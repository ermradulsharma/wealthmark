<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Support\Authenticator;
use App\Models\User;
use App\Models\EntityDetail;
use App\Models\SecurityActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Base32\Base32;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use App\Models\CompanyType;
use App\Models\Entity;
use App\Models\DocumentList;
use App\Models\BusinessDoc;
use App\Models\RelatedParty;
use App\Models\PaymentMethod;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct() {}


    // To check entity is verified or not on dashboard page starts
    public function is_entity_verified($id)
    {
        $entity = Entity::where('user_id', $id)->first();
        $entitydocs = BusinessDoc::where('user_id', $id)->first();
        $related_parties = RelatedParty::where('user_id', $id)->first();
        if ((empty($entity->reg_num) || empty($entity->DOB_incorpor) || empty($entity->DOB_incorpor) || empty($entity->contact_num) ||  empty($entity->fund_source) || empty($entity->cap_source) || empty($entity->wealth_source) || empty($entity->share_holds) ||  empty($entity->listed_cntry) || empty($entity->regstrd_cntry) || empty($entity->entity_nature) || empty($entity->appli_purpose) || empty($entity->juris_cntry) || empty($entity->oprt_juris_cntry) || empty($entity->keyAcount_manager) || empty($entity->most_recentMail) || empty($entity->web_address) || empty($entity->fiat_dpstWithdwl) || empty($entity->fiat_currencies) || empty($entity->fiat_currencies)) || (empty($entitydocs->incorp_cert) || empty($entitydocs->partnership_agrnmt) ||  empty($entitydocs->regsterOf_partner) ||  empty($entitydocs->incorp_date) || empty($entitydocs->sanc_questn) || empty($entitydocs->auth_letter) || empty($entitydocs->curnt_oprtiv_status) || empty($entitydocs->aml) || empty($entitydocs->Intermedianes) || empty($entitydocs->SoW) || empty($entitydocs->SoF) || empty($entitydocs->iftrd_othr_behlf) || empty($entitydocs->add_proof) || empty($entitydocs->supmentry) || empty($entitydocs->SoW) || empty($entitydocs->SoF) || empty($entitydocs->iftrd_othr_behlf)) || (empty($related_parties->gen_partnr_info) || empty($related_parties->beneficial_owner) ||  empty($related_parties->sign_controlr) || empty($related_parties->auth_acunt_trade) || empty($related_parties->main_trd_vrfication) || empty($related_parties->letter_auth))) {
            $verificationStatus = 0;
        } else {
            $verificationStatus = 1;
        }
        return $verificationStatus;
    }

    // To check entity is verified or not on dashboard page ends

    public function show_paytm(Request $request)
    {
        //   $chkpaytmMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
        //   return view('user/payment.paymentMethodsTemplates.paytmMethod', compact('chkpaytmMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            $chkpaytmMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
            return view('user/payment.paymentMethodsTemplates.paytmMethod', compact('chkpaytmMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        // OR
        // if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //      $chkpaytmMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
        //      return view('user/payment.paymentMethodsTemplates.paytmMethod', compact('chkpaytmMedhods'));

        // }else{
        //     return redirect(app()->getLocale().'/user/payment');

        // }
    }

    public function Paytm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'required|max:25',
        ]);
        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            // start check if paytm detail  is already exist
            $if_methodAccount = PaymentMethod::where('account_number', $request->account_number)->where('bank_name', $request->bank_name)->count();
            $if_methodAccount_withLogedInUser = PaymentMethod::where('user_id', $request->user_id)->where('account_number', $request->account_number)->where('bank_name', $request->bank_name)->count();
            if ($if_methodAccount > 1) {
                return response()->json(['error' => '401', 'message' => 'paytm detail already exist']);
                return false;
            } else if ($if_methodAccount == 1 && $if_methodAccount_withLogedInUser != 1) {
                return response()->json(['error' => '401', 'message' => 'paytm detail already exist']);
                return false;
            }
            // dd($if_methodAccount, $if_methodAccount_withLogedInUser );
            // end check if paytm detail is already exist
            $PaymentMethod = new PaymentMethod;
            $findIfUser = PaymentMethod::where('user_id', $request->user_id)->where('method_type', 'Paytm')->first();
            //  dd($findIfUser);
            if ($findIfUser !== NULL) {
                if ($findIfUser->qr_code != null) {
                    $old_file = $findIfUser->qr_code;
                } else {
                    $old_file = NULL;
                }
                if (empty($request->ifuploadSelected)) {
                    // dd($request->ifuploadedQR);
                    $updatePaymentMedhods = PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('bank_name', $request->bank_name)->where('account_holder', $request->account_holder)->update(['account_number' => $request->account_number,]);
                    if ($updatePaymentMedhods == 1) {
                        if (($old_file != NULL) && ($request->ifuploadedQR == 'undefined')) {
                            $updatePaymentMedhods = PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['qr_code' => NULL,]);
                            unlink(storage_path('app/' . $old_file));
                        }
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => '', 'success' => 200], 200);
                    }
                } else {
                    if ($findIfUser->qr_code != null) {
                        $old_file = $findIfUser->qr_code;
                    } else {
                        $old_file = NULL;
                    }
                    $updatePaymentMedhods = PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('bank_name', $request->bank_name)->where('account_holder', $request->account_holder)->update(['account_number' => $request->account_number, 'qr_code'  =>   $request->file('uploads')->store('public/payments/paytm'),]);
                    // dd($updatePaymentMedhods);
                    if ($updatePaymentMedhods == 1) {
                        $updatedQR =  PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('bank_name', $request->bank_name)->first();
                        if ($old_file != NULL) {
                            unlink(storage_path('app/' . $old_file));
                        }
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => $updatedQR->qr_code, 'success' => 200], 200);
                    }
                }
            } else {
                // dd($request->all());
                $PaymentMethod->user_id = $request->user_id;
                $PaymentMethod->method_type = $request->method_type;
                $PaymentMethod->account_holder = $request->account_holder;
                $PaymentMethod->account_number = $request->account_number;
                $PaymentMethod->bank_name = $request->bank_name;
                if (!empty($request->ifuploadSelected)) {
                    $PaymentMethod->qr_code  =   $request->file('uploads')->store('public/payments/paytm');
                }
                $PaymentMethod->save();
                // dd('hello', $PaymentMethod);
                if ($PaymentMethod->id) {
                    if (!empty($request->ifuploadSelected)) {
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => $PaymentMethod->qr_code, 'success' => 200], 200);
                    } else {
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => '', 'success' => 200], 200);
                    }
                }
            }
        }
    }




    public function show_Imps(Request $request)
    {
        // $chkIMPSMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->first();
        // return view('user/payment.paymentMethodsTemplates.impsMethod',  compact('chkIMPSMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            //   $chkIMPSMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->where('bank_name', 'IMPS')->first();
            $chkIMPSMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->first();
            return view('user/payment.paymentMethodsTemplates.impsMethod',  compact('chkIMPSMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        // OR

        // if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //          $chkIMPSMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->where('bank_name', 'IMPS')->first();
        //         return view('user/payment.paymentMethodsTemplates.impsMethod',  compact('chkIMPSMedhods'));
        //         }else{
        //             return redirect(app()->getLocale().'/user/payment');
        //         }

    }



    public function Imps(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'required|numeric|digits_between:8,35', //|unique:payment_methods,account_number',
            'ifsc' => 'required|max:25',
            'bank_name' => 'required|max:199',
            'account_type' => 'required|max:25',
            'branch_name' => 'required|max:199',
        ]);
        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors(), 'success' => 401], 401);
        }
        $PaymentMethod = PaymentMethod::where(['user_id' => $request->user_id, 'method_type' => 'IMPS',])->latest()->first();
        if (!$PaymentMethod) {
            $PaymentMethod = new PaymentMethod;
        }
        $PaymentMethod->user_id = $request->user_id;
        $PaymentMethod->method_type = $request->method_type;
        $PaymentMethod->account_holder = $request->account_holder;
        $PaymentMethod->account_number = $request->account_number;
        $PaymentMethod->ifsc = $request->ifsc;
        $PaymentMethod->bank_name = $request->bank_name;
        $PaymentMethod->account_type = $request->account_type;
        $PaymentMethod->branch_name = $request->branch_name;
        if ($PaymentMethod->save()) {
            return response()->json([
                'account_number' => $request->account_number,
                'ifsc' => $request->ifsc,
                'bank_name' => $request->bank_name,
                'account_type' => $request->account_type,
                'branch_name' => $request->branch_name,
                'success' => 200
            ], 200);
        }
    }


    public function show_Upi(Request $request)
    {
        //   $chkupiMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'UPI')->first();
        //   return view('user/payment.paymentMethodsTemplates.upiMethod', compact('chkupiMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            $chkupiMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'UPI')->first();
            return view('user/payment.paymentMethodsTemplates.upiMethod', compact('chkupiMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        //OR
        //   if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //          $chkupiMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'UPI')->first();
        //           return view('user/payment.paymentMethodsTemplates.upiMethod', compact('chkupiMedhods'));
        //          }else{
        //              return redirect(app()->getLocale().'/user/payment');
        //          }

    }

    public function Upi(Request $request)
    {
        // return view('user/payment.paymentMethodsTemplates.upiMethod');
        $validator = Validator::make($request->all(), [
            'upi_Id' => 'required|max:25',
        ]);
        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            // start check if upi is already exist
            $if_upiIdExist = PaymentMethod::where('upi_Id', $request->upi_Id)->count();
            $if_upiIdExist_withLogedInUser = PaymentMethod::where('user_id', $request->user_id)->where('upi_Id', $request->upi_Id)->count();
            if ($if_upiIdExist > 1) {
                return response()->json(['error' => '401', 'message' => 'UPI already exist']);
                return false;
            } else if ($if_upiIdExist == 1 && $if_upiIdExist_withLogedInUser != 1) {
                return response()->json(['error' => '401', 'message' => 'UPI already exist']);
                return false;
            }
            // dd($if_upiIdExist, $if_upiIdExist_withLogedInUser );
            // end check if upi is already exist
            $PaymentMethod = new PaymentMethod;
            $findIfUser = PaymentMethod::where('user_id', $request->user_id)->where('method_type', 'UPI')->first();
            // dd($findIfUser);
            if ($findIfUser !== NULL) {
                if ($findIfUser->qr_code != null) {
                    $old_file = $findIfUser->qr_code;
                } else {
                    $old_file = NULL;
                }
                if (empty($request->ifuploadSelected)) {
                    $updatePaymentMedhods = PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['upi_Id' => $request->upi_Id,]);
                    if ($updatePaymentMedhods == 1) {
                        if (($old_file != NULL) && ($request->ifuploadedQR == 'undefined')) {
                            $updatePaymentMedhods = PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['qr_code' => NULL,]);
                            unlink(storage_path('app/' . $old_file));
                        }
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => '', 'success' => 200], 200);
                    }
                } else {
                    if ($findIfUser->qr_code != null) {
                        $old_file = $findIfUser->qr_code;
                    } else {
                        $old_file = NULL;
                    }
                    $updatePaymentMedhods = PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['upi_Id' => $request->upi_Id, 'qr_code'  =>   $request->file('uploads')->store('public/payments/UpiID'),]);
                    // dd($updatePaymentMedhods);
                    if ($updatePaymentMedhods == 1) {
                        $updatedQR =  PaymentMethod::where('user_id', $request->user_id)->where('method_type', $request->method_type)->first();
                        if ($old_file != NULL) {
                            unlink(storage_path('app/' . $old_file));
                        }
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => $updatedQR->qr_code, 'success' => 200], 200);
                    }
                }
            } else {
                // dd($request->all());
                $PaymentMethod->user_id = $request->user_id;
                $PaymentMethod->method_type = $request->method_type;
                $PaymentMethod->account_holder = $request->account_holder;
                $PaymentMethod->upi_Id = $request->upi_Id;
                if (!empty($request->ifuploadSelected)) {
                    $PaymentMethod->qr_code  =   $request->file('uploads')->store('public/payments/UpiID');
                }
                $PaymentMethod->save();
                // dd('hello', $PaymentMethod);
                if ($PaymentMethod->id) {
                    if (!empty($request->ifuploadSelected)) {
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => $PaymentMethod->qr_code, 'success' => 200], 200);
                    } else {
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => '', 'success' => 200], 200);
                    }
                }
            }
        }
    }



    public function show_Bank_transfer_india(Request $request)
    {
        //  $chkbanktransferMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Bank-Transfer-INDIA')->first();
        //  return view('user/payment.paymentMethodsTemplates.indianBanks', compact('chkbanktransferMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            $chkbanktransferMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Bank-Transfer-INDIA')->first();
            return view('user/payment.paymentMethodsTemplates.indianBanks', compact('chkbanktransferMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        //OR
        //   if( (Auth::user()->entity_verified) == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //           $chkbanktransferMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Bank-Transfer-INDIA')->first();
        //          return view('user/payment.paymentMethodsTemplates.indianBanks', compact('chkbanktransferMedhods'));
        //          }else{
        //              return redirect(app()->getLocale().'/user/payment');
        //          }

    }
    public function Bank_transfer_india(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'required|numeric|digits_between:8,35', //|unique:payment_methods,account_number',
            'ifsc' => 'required|max:25',
            'bank_name' => 'required|max:199',
            'account_type' => 'required|max:25',
            'branch_name' => 'required|max:199',
        ]);
        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        }
        $PaymentMethod = PaymentMethod::where(['user_id' => $request->user_id, 'method_type' => $request->method_type])->latest()->first();

        if (!$PaymentMethod) {
            $PaymentMethod = new PaymentMethod;
            $PaymentMethod->method_type = $request->method_type;
        }
        $PaymentMethod->user_id = $request->user_id;
        $PaymentMethod->account_holder = $request->account_holder;
        $PaymentMethod->account_number = $request->account_number;
        $PaymentMethod->ifsc = $request->ifsc;
        $PaymentMethod->account_type = $request->account_type;
        $PaymentMethod->bank_name = $request->bank_name;
        $PaymentMethod->branch_name = $request->branch_name;
        if ($PaymentMethod->save()) {
            return response()->json([
                'account_number' => $request->account_number,
                'ifsc' => $request->ifsc,
                'bank_name' => $request->bank_name,
                'account_type' => $request->account_type,
                'branch_name' => $request->branch_name,
                'success' => 200
            ], 200);
        }
    }

    public function show_More(Request $request)
    {
        // return view('user/payment.paymentMethodsTemplates.morePaymethods');
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            return view('user/payment.paymentMethodsTemplates.morePaymethods');
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        //OR

        //  if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //         // $chkpaytmMedhods = PaymentMethod::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
        //           return view('user/payment.paymentMethodsTemplates.morePaymethods');
        //         }else{
        //             return redirect(app()->getLocale().'/user/payment');
        //         }

    }

    public function More(Request $request)
    {
        return view('user/payment.paymentMethodsTemplates.morePaymethods');
    }



    public function delete_paymentMethod(Request $request)
    {
        //  dd($request->all());
        $medhodTobeDeleted = PaymentMethod::where('id', $request->id)->first();
        $deleteMedhod = PaymentMethod::where('id', $request->id)->delete();
        //  dd($medhodTobeDeleted->qr_code);
        if ($deleteMedhod == true) {
            if ($medhodTobeDeleted->qr_code != NULL) {
                //dd($medhodTobeDeleted->qr_code);
                unlink(storage_path('app/' . $medhodTobeDeleted->qr_code));
            }
        }
        return response()->json(['deletedMethodId' => $medhodTobeDeleted->id, 'deletedMethod' => $medhodTobeDeleted->method_type, 'success' => 200]);
    }

    public function test(Request $request)
    {
        $orderObj = Order::where('id', $request->orderId)->latest()->first();

        if ($orderObj->order_status == 1) {
            if ($request->payment_time_limit <= 0) {
                DB::table('orders')->where('id', $request->orderId)->update(['payment_time_limit' => 0]);
            } else {
                $payment_time_limit = $request->payment_time_limit - 1;
                DB::table('orders')->where('id', $request->orderId)->update(['payment_time_limit' => $payment_time_limit]);
            }
        }

        if ($request->has('orderStatus')) {
            Order::where('id', $request->orderId)->update(['payment_time_limit' => 0, 'order_status' => $request->orderStatus]);
        }
        return response()->json(['orderObj' => $orderObj]);
    }

    /* public static function updateTradeTimer($orderID, $timevalue){
        $timeInseconds = $timevalue*60;
        print_r($timeInseconds);
        echo "<br>";
        $count = 0;
        for ($count = 1; $count <= $timeInseconds;) {
           $orderObj = Order::find($orderID)->where('order_status', '1')->first();
            if($orderObj){
                $tm = $timeInseconds-$count;
                $updateTimes = Order::where('order_id', $orderID)->update(['payment_time_limit' => $tm]);
                sleep(1);
                $count++;
                 print_r($tm.',');
                $tm = null;
                return $orderObj;
            } else {
                $updateTimes = Order::where('order_id', $orderID)->update(['payment_time_limit' => 0]);
                exit;
            }

        }


    } */
}
