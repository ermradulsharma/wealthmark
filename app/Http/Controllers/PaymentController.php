<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Support\Authenticator;
use App\Models\User;
use App\Models\Entity_detail;
use App\Models\SecurityActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use Validator;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Base32\Base32;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use App\Models\company_type;
use App\Models\entities;
use App\Models\document_lists;
use App\Models\businessDocs;
use App\Models\relatedParties;
use App\Models\PaymentMedhods;
use App\Models\Order;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
    }


    // To check entity is verified or not on dashboard page starts
    public function is_entity_verified($id)
    {
        $entity = entities::where('user_id', $id)->first();
        $entitydocs = businessDocs::where('user_id', $id)->first();
        $related_parties = relatedParties::where('user_id', $id)->first();
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
        //   $chkpaytmMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
        //   return view('user/payment.paymentMethodsTemplates.paytmMethod', compact('chkpaytmMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            $chkpaytmMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
            return view('user/payment.paymentMethodsTemplates.paytmMethod', compact('chkpaytmMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        // OR
        // if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //      $chkpaytmMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
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
            $if_methodAccount = PaymentMedhods::where('account_number', $request->account_number)->where('bank_name', $request->bank_name)->count();
            $if_methodAccount_withLogedInUser = PaymentMedhods::where('user_id', $request->user_id)->where('account_number', $request->account_number)->where('bank_name', $request->bank_name)->count();
            if ($if_methodAccount > 1) {
                return response()->json(['error' => '401', 'message' => 'paytm detail already exist']);
                return false;
            } else if ($if_methodAccount == 1 && $if_methodAccount_withLogedInUser != 1) {
                return response()->json(['error' => '401', 'message' => 'paytm detail already exist']);
                return false;
            }
            // dd($if_methodAccount, $if_methodAccount_withLogedInUser );
            // end check if paytm detail is already exist
            $PaymentMedhods = new PaymentMedhods;
            $findIfUser = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', 'Paytm')->first();
            //  dd($findIfUser);
            if ($findIfUser !== NULL) {
                if ($findIfUser->qr_code != null) {
                    $old_file = $findIfUser->qr_code;
                } else {
                    $old_file = NULL;
                }
                if (empty($request->ifuploadSelected)) {
                    // dd($request->ifuploadedQR);
                    $updatePaymentMedhods = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('bank_name', $request->bank_name)->where('account_holder', $request->account_holder)->update(['account_number' => $request->account_number,]);
                    if ($updatePaymentMedhods == 1) {
                        if (($old_file != NULL) && ($request->ifuploadedQR == 'undefined')) {
                            $updatePaymentMedhods = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['qr_code' => NULL,]);
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
                    $updatePaymentMedhods = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('bank_name', $request->bank_name)->where('account_holder', $request->account_holder)->update(['account_number' => $request->account_number, 'qr_code'  =>   $request->file('uploads')->store('public/payments/paytm'),]);
                    // dd($updatePaymentMedhods);
                    if ($updatePaymentMedhods == 1) {
                        $updatedQR =  PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('bank_name', $request->bank_name)->first();
                        if ($old_file != NULL) {
                            unlink(storage_path('app/' . $old_file));
                        }
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => $updatedQR->qr_code, 'success' => 200], 200);
                    }
                }
            } else {
                // dd($request->all());
                $PaymentMedhods->user_id = $request->user_id;
                $PaymentMedhods->method_type = $request->method_type;
                $PaymentMedhods->account_holder = $request->account_holder;
                $PaymentMedhods->account_number = $request->account_number;
                $PaymentMedhods->bank_name = $request->bank_name;
                if (!empty($request->ifuploadSelected)) {
                    $PaymentMedhods->qr_code  =   $request->file('uploads')->store('public/payments/paytm');
                }
                $PaymentMedhods->save();
                // dd('hello', $PaymentMedhods);
                if ($PaymentMedhods->id) {
                    if (!empty($request->ifuploadSelected)) {
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => $PaymentMedhods->qr_code, 'success' => 200], 200);
                    } else {
                        return response()->json(['account_number' => $request->account_number, 'paytmQR' => '', 'success' => 200], 200);
                    }
                }
            }
        }
    }




    public function show_Imps(Request $request)
    {
        // $chkIMPSMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->first();
        // return view('user/payment.paymentMethodsTemplates.impsMethod',  compact('chkIMPSMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            //   $chkIMPSMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->where('bank_name', 'IMPS')->first();
            $chkIMPSMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->first();
            return view('user/payment.paymentMethodsTemplates.impsMethod',  compact('chkIMPSMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        // OR

        // if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //          $chkIMPSMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'IMPS')->where('bank_name', 'IMPS')->first();
        //         return view('user/payment.paymentMethodsTemplates.impsMethod',  compact('chkIMPSMedhods'));
        //         }else{
        //             return redirect(app()->getLocale().'/user/payment');
        //         }

    }



    public function Imps(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'required|numeric|digits_between:8,35', //|unique:payment_medhods,account_number',
            'ifsc' => 'required|max:25',
            'bank_name' => 'required|max:199',
            'account_type' => 'required|max:25',
            'branch_name' => 'required|max:199',
        ]);
        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors(), 'success' => 401], 401);
        }
        $PaymentMedhods = PaymentMedhods::where(['user_id' => $request->user_id, 'method_type' => 'IMPS',])->latest()->first();
        if (!$PaymentMedhods) {
            $PaymentMedhods = new PaymentMedhods;
        }
        $PaymentMedhods->user_id = $request->user_id;
        $PaymentMedhods->method_type = $request->method_type;
        $PaymentMedhods->account_holder = $request->account_holder;
        $PaymentMedhods->account_number = $request->account_number;
        $PaymentMedhods->ifsc = $request->ifsc;
        $PaymentMedhods->bank_name = $request->bank_name;
        $PaymentMedhods->account_type = $request->account_type;
        $PaymentMedhods->branch_name = $request->branch_name;
        if ($PaymentMedhods->save()) {
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
        //   $chkupiMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'UPI')->first();
        //   return view('user/payment.paymentMethodsTemplates.upiMethod', compact('chkupiMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            $chkupiMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'UPI')->first();
            return view('user/payment.paymentMethodsTemplates.upiMethod', compact('chkupiMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        //OR
        //   if( (Auth::user()->entity_verified == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //          $chkupiMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'UPI')->first();
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
            $if_upiIdExist = PaymentMedhods::where('upi_Id', $request->upi_Id)->count();
            $if_upiIdExist_withLogedInUser = PaymentMedhods::where('user_id', $request->user_id)->where('upi_Id', $request->upi_Id)->count();
            if ($if_upiIdExist > 1) {
                return response()->json(['error' => '401', 'message' => 'UPI already exist']);
                return false;
            } else if ($if_upiIdExist == 1 && $if_upiIdExist_withLogedInUser != 1) {
                return response()->json(['error' => '401', 'message' => 'UPI already exist']);
                return false;
            }
            // dd($if_upiIdExist, $if_upiIdExist_withLogedInUser );
            // end check if upi is already exist
            $PaymentMedhods = new PaymentMedhods;
            $findIfUser = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', 'UPI')->first();
            // dd($findIfUser);
            if ($findIfUser !== NULL) {
                if ($findIfUser->qr_code != null) {
                    $old_file = $findIfUser->qr_code;
                } else {
                    $old_file = NULL;
                }
                if (empty($request->ifuploadSelected)) {
                    $updatePaymentMedhods = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['upi_Id' => $request->upi_Id,]);
                    if ($updatePaymentMedhods == 1) {
                        if (($old_file != NULL) && ($request->ifuploadedQR == 'undefined')) {
                            $updatePaymentMedhods = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['qr_code' => NULL,]);
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
                    $updatePaymentMedhods = PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->where('account_holder', $request->account_holder)->update(['upi_Id' => $request->upi_Id, 'qr_code'  =>   $request->file('uploads')->store('public/payments/UpiID'),]);
                    // dd($updatePaymentMedhods);
                    if ($updatePaymentMedhods == 1) {
                        $updatedQR =  PaymentMedhods::where('user_id', $request->user_id)->where('method_type', $request->method_type)->first();
                        if ($old_file != NULL) {
                            unlink(storage_path('app/' . $old_file));
                        }
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => $updatedQR->qr_code, 'success' => 200], 200);
                    }
                }
            } else {
                // dd($request->all());
                $PaymentMedhods->user_id = $request->user_id;
                $PaymentMedhods->method_type = $request->method_type;
                $PaymentMedhods->account_holder = $request->account_holder;
                $PaymentMedhods->upi_Id = $request->upi_Id;
                if (!empty($request->ifuploadSelected)) {
                    $PaymentMedhods->qr_code  =   $request->file('uploads')->store('public/payments/UpiID');
                }
                $PaymentMedhods->save();
                // dd('hello', $PaymentMedhods);
                if ($PaymentMedhods->id) {
                    if (!empty($request->ifuploadSelected)) {
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => $PaymentMedhods->qr_code, 'success' => 200], 200);
                    } else {
                        return response()->json(['upi_Id' => $request->upi_Id, 'upi_IdQR' => '', 'success' => 200], 200);
                    }
                }
            }
        }
    }



    public function show_Bank_transfer_india(Request $request)
    {
        //  $chkbanktransferMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Bank-Transfer-INDIA')->first();
        //  return view('user/payment.paymentMethodsTemplates.indianBanks', compact('chkbanktransferMedhods'));
        if (($this->is_entity_verified(Auth::user()->id) == 1) || (Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1)) {
            $chkbanktransferMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Bank-Transfer-INDIA')->first();
            return view('user/payment.paymentMethodsTemplates.indianBanks', compact('chkbanktransferMedhods'));
        } else {
            return redirect(app()->getLocale() . '/user/payment');
        }

        //OR
        //   if( (Auth::user()->entity_verified) == 1) || ( Auth::user()->is_mail_verified == 1 &&  Auth::user()->is_phone_verified == 1 &&  Auth::user()->government_id_verified == 1) ){
        //           $chkbanktransferMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Bank-Transfer-INDIA')->first();
        //          return view('user/payment.paymentMethodsTemplates.indianBanks', compact('chkbanktransferMedhods'));
        //          }else{
        //              return redirect(app()->getLocale().'/user/payment');
        //          }

    }
    public function Bank_transfer_india(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account_number' => 'required|numeric|digits_between:8,35', //|unique:payment_medhods,account_number',
            'ifsc' => 'required|max:25',
            'bank_name' => 'required|max:199',
            'account_type' => 'required|max:25',
            'branch_name' => 'required|max:199',
        ]);
        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        }
        $PaymentMedhods = PaymentMedhods::where(['user_id' => $request->user_id, 'method_type' => $request->method_type])->latest()->first();

        if (!$PaymentMedhods) {
            $PaymentMedhods = new PaymentMedhods;
            $PaymentMedhods->method_type = $request->method_type;
        }
        $PaymentMedhods->user_id = $request->user_id;
        $PaymentMedhods->account_holder = $request->account_holder;
        $PaymentMedhods->account_number = $request->account_number;
        $PaymentMedhods->ifsc = $request->ifsc;
        $PaymentMedhods->account_type = $request->account_type;
        $PaymentMedhods->bank_name = $request->bank_name;
        $PaymentMedhods->branch_name = $request->branch_name;
        if ($PaymentMedhods->save()) {
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
        //         // $chkpaytmMedhods = PaymentMedhods::where('user_id', Auth::user()->id)->where('method_type', 'Paytm')->where('bank_name', 'Paytm')->first();
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
        $medhodTobeDeleted = PaymentMedhods::where('id', $request->id)->first();
        $deleteMedhod = PaymentMedhods::where('id', $request->id)->delete();
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
