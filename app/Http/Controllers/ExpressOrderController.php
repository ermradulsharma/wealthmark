<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Support\Authenticator;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\giftcard;
use App\Models\Entity_detail;
use App\Models\SecurityActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\KycVerificationController;
use App\Http\Controllers\BmkApiController;
use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\StakingController;
use App\Http\Controllers\ImageCompression;
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
use App\Models\Banks;
use App\Models\Country;
use App\Models\currencies;
use Illuminate\Support\Facades\File;
use App\Models\Order;
use App\Models\change_password_history;
use App\Models\gift_card_history;
use App\Models\loginAttemptHistory;
use App\Models\payment_method_list;
use App\Models\marketWallet;
use Jenssegers\Agent\Agent;
use App\Models\LoginDetails;
use App\Models\Chat;
use App\Models\Tradingratings;
use App\Models\NotificationCategory;
use App\Notifications\TradeNotification;
use App\Models\Notification;
use App\Models\stakings;
use App\Models\announcement;
use App\Models\announcement_category;
use App\Models\Escrow;
use App\Models\config;
use App\Models\user_account_activity;
use App\Imports\P2pOrderExport;
use App\Imports\SelectedP2POrderExport;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;
use App\Models\Postads;
use App\Models\Estimatedfee;
use App\Models\failed_verification_history;
use Illuminate\Support\Facades\Cache;



class ExpressOrderController extends Controller
{
    public $successStatus = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // session_start();

        //$this->middleware('auth');
    }

    public function express_confirmed_order_buyer_info(Request $request)
    {

        //  echo Session::get('orderid');
        //die;
        if (Auth::check()) {
            //echo "express_confirmed_order_buyer_info";
            //session_start();
            $allajaxdata = $request->all();
            // print_r($allajaxdata);
            // $url = url()->current();
            // $segments = collect(explode('/', $url));
            // $lastSegment = $segments->last();
            // $orderid = $lastSegment;
            // print_r($_SESSION);
            $orderid = Session::get('orderid');
            $get_order_data = Order::where('id', $orderid)->where('buyer_id', Auth::user()->id)->first();

            $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id', Auth::user()->id)->first();
            $config_data = config::all();


            $accept_by_buyer_orderid = $request->accept_by_buyer_orderid;
            $cancel_by_buyer_orderid = $request->cancel_by_buyer_orderid;


            if (!empty($accept_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $accept_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } elseif (!empty($cancel_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $cancel_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } else {



                $orderid = Session::get('orderid') ?? null;
                //print_r($orderid);die();
                if (!$orderid) {
                    return view('web.page_not_found');
                    //abort(404, 'Record not found');
                }


                $get_order_data = Order::where('id', $orderid)->where('buyer_id', Auth::user()->id)->first();
                //print_r($get_order_data);
                if (!$get_order_data) {
                    return view('web.page_not_found');
                    //abort(404, 'Record not found');
                } else {
                    $orderStatus = $get_order_data->order_status;
                }
            }


            $get_seller_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();
            // $getbuyer_bank_details = json_decode($get_order_data->payment_account_details,true);
            // echo "<pre>"; print_r($getbuyer_bank_details); die;

            //$getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at','=',NULL)->select('method_type')->get();
            $getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at', '=', NULL)->get();

            if ($get_seller_details) {

                $getseller_bank_details = Order::where('seller_id', $get_order_data->seller_id)->where('id', $orderid)->first();
            } else {
                $getseller_bank_details = null;
            }


            if (!empty($get_seller_details)) {
                $seller_details = $get_seller_details;
            } else {
                $seller_details = '';
            }
            return view('user.express-confirmed-buyerOrder-info', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords', 'config_data'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }


    public function express_order(Request $request, $id)
    {
        if (Auth::check()) {
            if ($request->segment('4') == "express-confirmed-order-seller-info") {
                $orderid = Session::get('orderid') ?? 'null';
                if ($orderid == "null" or $orderid == "") {
                    return view('web.page_not_found');
                } else {
                    $get_order_data = Order::where('id', $orderid)->first();
                    if ($get_order_data->buyer_id == null && $orderid) {
                        return redirect(app()->getLocale() . "/user/dashboard");
                    } else {
                        $get_order_data = Order::where('id', $orderid)->first();
                        $get_buyer_details = DB::table('users')->where('id', $get_order_data->buyer_id)->first();
                        $ratedRecords = Tradingratings::where('order_id', $orderid)->where('seller_id', Auth::user()->id)->first();
                        $getbuyer_bank_details = DB::table('payment_medhods')->where('user_id', $get_order_data->buyer_id)->select('method_type')->get();

                        if (!empty($get_buyer_details)) {
                            $buyer_details = $get_buyer_details;
                        } else {
                            $buyer_details = '';
                        }
                        return view('user.express-order-info', compact('get_order_data', 'buyer_details', 'ratedRecords'));
                    }
                }
            }

            if ($request->segment('4') == "express-confirmed-order-buyer-info") {
                //echo"tretertret";
                //return view('user.express-order-info');
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function express_confirmed_order_buyer_infoById(Request $request, $id)
    {

        echo 'express_confirmed_order_buyer_infoById';
        die;

        if (Auth::check()) {
            $url = url()->current();
            $segments = collect(explode('/', $url));
            $lastSegment = $segments->last();


            session(['last_id' => $lastSegment]);

            $allajaxdata = $request->all();


            $orderid = $id;

            $get_order_data = Order::where('id', $lastSegment)->where('buyer_id', Auth::user()->id)->first();
            $ratedRecords = Tradingratings::where('order_id', $lastSegment)->where('buyer_id', Auth::user()->id)->first();
            $config_data = config::all();


            $accept_by_buyer_orderid = $request->accept_by_buyer_orderid;
            $cancel_by_buyer_orderid = $request->cancel_by_buyer_orderid;


            if (!empty($accept_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $accept_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } elseif (!empty($cancel_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $cancel_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } else {
                $orderid = $id;
                $url = url()->current();
                $segments = collect(explode('/', $url));
                $lastSegment = $segments->last();

                $get_order_data = Order::where('id', $lastSegment)->where('buyer_id', Auth::user()->id)->first();

                $orderStatus = $get_order_data->order_status;
                // dd($orderStatus);
            }


            $get_seller_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();

            $getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at', '=', NULL)->get();

            if ($get_seller_details) {

                $getseller_bank_details = Order::where('seller_id', $get_order_data->seller_id)->where('id', $lastSegment)->first();
            } else {
                $getseller_bank_details = null;
            }

            //dd($getseller_bank_details->payment_account_details_for_seller);

            if (!empty($get_seller_details)) {
                $seller_details = $get_seller_details;
            } else {
                $seller_details = '';
            }
            return view('user.express-confirmed-buyerOrder-info', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords', 'config_data'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }



    public function express_confirmed_order_seller_info()
    {
        if (Auth::check()) {
            // echo "express_confirmed_order_seller_info";

            $orderid = Session::get('orderid') ?? 'null';
            // dd(session()->all());
            //print_r($orderid);

            // die;
            //print_r($orderid);die();
            if ($orderid == "null" or $orderid == "") {
                return view('web.page_not_found');
                //abort(404, 'Record not found');
            } else {
                $get_order_data = Order::where('id', $orderid)->first();
                //dd($get_order_data);
                if ($get_order_data->buyer_id == null && $orderid) {
                    return redirect(app()->getLocale() . "/user/dashboard");
                } else {
                    $get_order_data = Order::where('id', $orderid)->first();
                    $get_buyer_details = DB::table('users')->where('id', $get_order_data->buyer_id)->first();
                    $ratedRecords = Tradingratings::where('order_id', $orderid)->where('seller_id', Auth::user()->id)->first();
                    $getbuyer_bank_details = DB::table('payment_medhods')->where('user_id', $get_order_data->buyer_id)->select('method_type')->get();

                    if (!empty($get_buyer_details)) {
                        $buyer_details = $get_buyer_details;
                    } else {
                        $buyer_details = '';
                    }
                    //dd($get_order_data);
                    return view('user.express-confirmed-sellerOrder-info', compact('get_order_data', 'buyer_details', 'ratedRecords'));
                    //return view('user.seller-confirmed-order-info');
                }
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function express_confirmed_order_seller_infoById(Request $request, $id)
    {
        // echo 'express_confirmed_order_seller_infoById';
        // die;

        // $url = url()->current();
        // $segments = collect(explode('/', $url));
        // $lastSegment = $segments->last();


        // session(['last_id' => $lastSegment]);

        $allajaxdata = $request->all();

        //dd($lastSegment);
        // $orderid = $lastSegment;

        $orderid = Session::get('orderid') ?? null;
        //print_r($orderid);die();
        if (!$orderid) {
            return view('web.page_not_found');
            //abort(404, 'Record not found');
        } else {
            $get_order_data = Order::where('id', $lastSegment)->first();

            $get_buyer_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();
            $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id', Auth::user()->id)->first();
            $getbuyer_bank_details = DB::table('payment_medhods')->where('user_id', $get_order_data->seller_id)->select('method_type')->get();

            if (!empty($get_buyer_details)) {
                $buyer_details = $get_buyer_details;
            } else {
                $buyer_details = '';
            }
            //dd($get_order_data);
            return view('user.express_confirmed_order_seller_infoById', compact('get_order_data', 'buyer_details', 'ratedRecords'));
            //return view('user.seller-confirmed-order-info');
        }
    }

    // public function seller_confirm_confirmedOrderInfo(Request $request, $id){

    //     $url = url()->current();
    //     $segments = collect(explode('/', $url));
    //     $lastSegment = $segments->last();


    //     session(['last_id' => $lastSegment]);

    //     $allajaxdata = $request->all();

    //     //dd($lastSegment);
    //     $orderid = $lastSegment;

    //     // $orderid = $_SESSION['orderid']?? null;
    //     //print_r($orderid);die();
    //     if (!$orderid) {
    //         return view('web.page_not_found');
    //         //abort(404, 'Record not found');
    //     }else{
    //     $get_order_data = Order::where('id', $lastSegment)->first();

    //     $get_buyer_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();
    //      $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id', Auth::user()->id)->first();
    //     $getbuyer_bank_details = DB::table('payment_medhods')->where('user_id', $get_order_data->seller_id)->select('method_type')->get();

    //     if(!empty($get_buyer_details)){
    //         $buyer_details = $get_buyer_details;
    //     }else{
    //         $buyer_details = '';
    //     }
    //     //dd($get_order_data);
    //       return view('user.p2p_seller_confirmed',compact('get_order_data','buyer_details', 'ratedRecords') );
    //   //return view('user.seller-confirmed-order-info');
    //     }
    // }

    public function getPendingOrders($userId)
    {
        //Pending order
        $user_id = $userId;
        //  return $user_id ;

        $getpendingorders = Order::where(function ($query) {
            $query->where('buyer_id', $user_id)
                ->orWhere('seller_id', $user_id);
        })
            ->where(function ($query) {
                $query->where('order_status', 0)
                    ->orWhere('order_status', 1)
                    ->where('order_status', '!=', 2)
                    ->where('order_status', '!=', 3)
                    ->where('order_status', '!=', 4);
            })
            ->where(function ($query) {
                $query->where('order_accept_action', 0)
                    ->orWhere('order_accept_action', 1);
            })
            ->where('buyer_confirmation_status', null)
            ->where('seller_confirmation_status', null)
            ->whereDate('created_at', today())
            ->orderByDesc('created_at')
            ->first();

        if ($getpendingorders) {
            $getpendingordersData = collect();
            $tradetype = '-';
            if ($getpendingorders->buyer_id == $user_id) {
                $tradetype = 'Buy';
            }
            if ($getpendingorders->seller_id == $user_id) {
                $tradetype = 'Sell';
            }
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $getpendingorders->domestic_currency_type)->first();
            $currenciesname = $currencies->name;
            $getpendingordersData->push([
                'id' => $getpendingorders->id,
                'tradetype' => $tradetype,
                'crypto_type' => $getpendingorders->crypto_type,
                'total_crypto_value' => $getpendingorders->total_crypto_value,
                'domestic_currency_value' => $getpendingorders->domestic_currency_value,
                'domestic_currency_type' => $currenciesname,
                'created_at' => $getpendingorders->created_at,
            ]);
            $getpendingorder = $getpendingordersData;
        } else {
            $getpendingorder = 0;
        }
    }

    // public function express_buy_sell_crypto(Request $request){

    //  $homeControllerObject = new  HomeController;
    // // $count_lastDay_cancelled_orders = $homeControllerObject->checkSusspensionStatus();



    //      if(Auth::check()){


    //                 // commented on 180223
    //                 //     $bitcoin=Cryptocap::getSingleAsset('bitcoin');
    //                 //     $ethereum=Cryptocap::getSingleAsset('ethereum');
    //                 //     $allcurrency = currencies::all();
    //                 //     $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
    //                 //     return view('web.express_buy_sell_crypto',compact('bitcoin','ethereum','allcurrency', 'userPaymentMethod' ));


    //             $data = $request->all();
    //             $userid = Auth::user()->id;
    //             $buyer_country_name = Auth::user()->country;
    //      // dd($data);
    //       //
    //       // Order data inserted into temp_order table


    //               if($data){
    //                   // $count_lastDay_cancelled_orders = $homeControllerObject->checkSusspensionStatus($userid);

    //               //   print_r($count_lastDay_cancelled_orders);

    //                 //   if($count_lastDay_cancelled_orders == 0){


    //                       if(Auth::User()->bmk_wallet_address === NULL && $request->selectedCrypto_type == 'BMK'){
    //                                 $base_url=env('BMK_API_BASE_URL');
    //                                 $BmkApiController = new BmkApiController;
    //                                 $url = $base_url.'/generate_bmk_wallet_address';
    //                                 $params = array('entity_name'=>'Wealthmark');
    //                                 $wallet_address_result=$BmkApiController->verify_api($url,$params);
    //                                 $upadeWalletAddress = User::where('id', Auth::user()->id)->update(['bmk_wallet_address' => $wallet_address_result->wallet_signature]);
    //                             }
    //                         $payment_account_details = PaymentMedhods::where('id',$request->payment_bank_id)->first();
    //                         // echo "<pre>"; print_r($payment_account_details); echo "<pre>";
    //                         // echo "<pre>"; print_r($data);die();
    //                         $orderid = mt_rand(1000000000, 9999999999);


    //                         $inserted_data_conf_order = [
    //                         'buyer_id' =>$userid ,
    //                         'order_id'=>$orderid,
    //                         'buyer_country'=>$buyer_country_name,
    //                         'crypto_type' =>$request->selectedCrypto_type ,
    //                         'total_crypto_value' =>$request->total_Cryptovalue ,
    //                         'domestic_currency_value' =>$request->domesticCurrencyVAL ,
    //                         'domestic_currency_type' =>$request->domesticCurrencyId ,
    //                         'payment_method_id' =>$request->paymentMethodId ,
    //                         'payment_bank_id' =>$request->payment_bank_id ,
    //                         'payment_account_details_for_buyer'=>json_encode($payment_account_details),

    //                         'ordertype' =>$request->ordertype ,
    //                         'crypto_current_value' =>$request->current_crypto_value ,
    //                         'inr_value_in_usd' =>$request->inr_value_in_usd ,
    //                         'current_crypto_in_inr' =>$request->current_crypto_in_inr ,
    //                         'order_status' =>0 ,
    //                         'trade_type' => 1,
    //                         'created_at' =>now() ,
    //                       ];



    //                             $conf_order_data = Order::insert($inserted_data_conf_order);
    //                             $lastId = DB::getPdo()->lastInsertId();
    //                             //print_r($conf_order_data); die();
    //                             //session_start();

    //                             Session::put('orderid', $lastId);
    //                             //$_SESSION['orderid'] = $lastId;
    //                             //session(['orderid' => $lastId]);
    //                             //echo $_SESSION['orderid'];
    //                             //die;

    //                                 if($conf_order_data){
    //                                     $orderdata =  Order::where('id', $lastId)->latest()->first();
    //                                      $order_accept_action = $orderdata->order_accept_action;
    //                                     $user = auth()->user();
    //                                     $notification_category_id = NotificationCategory::where('id', 2)->first();
    //                                   $orderstatus = 0;
    //                                     $seller_confirmation_status= $orderdata->seller_confirmation_status;
    //                                     $buyer_confirmation_status= $orderdata->seller_confirmation_status;
    //                                     $orderId = $lastId;
    //                                         if($orderdata->buyer_id != ''){
    //                                             $buyer_id = $orderdata->buyer_id;
    //                                         }else{
    //                                             $buyer_id = '';
    //                                         }

    //                                         if($orderdata->seller_id != ''){
    //                                             $seller_id = $orderdata->seller_id;
    //                                         }else{
    //                                             $seller_id = '';
    //                                         }

    //                                         if(Auth::user()->on_site_notification_status == 1){
    //                                             $user->notify(new TradeNotification($orderdata,$notification_category_id,$orderstatus,$seller_confirmation_status,$buyer_confirmation_status, $order_accept_action,$orderId,$buyer_id,$seller_id));
    //                                         }

    //                                         return response()->json(['message'=>'success','order_data' => $conf_order_data]);


    //                                 }else{
    //                                     return response()->json(['message'=>'error, somthing went wrong']);
    //                                 }
    //                 //   }else{
    //                 //       return response()->json(['message'=>'error, You have canceled 3 order in today.', 'order_data' => '1'], 401);
    //                 //   }
    //         //$request->session()->put('orderid', $lastId->id);
    //         // Session::put('orderid', $conf_order_data->id);

    //         //$get_order_data = DB::table('confirm_order')->where('order_id', $conf_order_data->id)->latest()->first();

    //               }else{
    //                         $bitcoin=Cryptocap::getSingleAsset('bitcoin');
    //                         $ethereum=Cryptocap::getSingleAsset('ethereum');

    //                         $base_url=env('BMK_API_BASE_URL');
    //                         $BmkApiController = new BmkApiController;
    //                         $url = $base_url.'/get_currency';
    //                         $params = array();
    //                         $allcurrency=$BmkApiController->verify_api($url,$params);

    //                         $current_bmk_price_url = $base_url.'/get_bmk_currency_price';
    //                         $bmk_params = array('currency_name'=>'USD');
    //                         $bmk_price=$BmkApiController->verify_api($current_bmk_price_url,$bmk_params);
    //                         //$allcurrency = currencies::all();
    //                         //$allcurrency = currencies::orderBy('id','desc')->get();
    //                         $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
    //                         $allpaymentMethod_list = payment_method_list::all();
    //                         return view('web.express_buy_sell_crypto',compact('bitcoin','ethereum','allcurrency', 'userPaymentMethod','allpaymentMethod_list','bmk_price' ));

    //               }

    //       }else{
    //          return redirect(app()->getLocale()."/login");
    //      }

    //  } // commented on 06062023


    public function express_buy_sell_crypto(Request $request)
    {
        // this is new function that to be implemented and will replace just above express_buy_sell_crypto()

        $homeControllerObject = new  HomeController;

        if (Auth::check()) {

            // commented on 180223
            //     $bitcoin=Cryptocap::getSingleAsset('bitcoin');
            //     $ethereum=Cryptocap::getSingleAsset('ethereum');
            //     $allcurrency = currencies::all();
            //     $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
            //     return view('web.express_buy_sell_crypto',compact('bitcoin','ethereum','allcurrency', 'userPaymentMethod' ));


            $data = $request->all();
            $userid = Auth::user()->id;
            $buyer_country_name = Auth::user()->country;
            // dd($data);
            //
            // Order data inserted into temp_order table
            if ($data) {


                $count_lastDay_cancelled_orders = $homeControllerObject->checkSusspensionStatus($userid);
                //   print_r($count_lastDay_cancelled_orders);
                //   if($count_lastDay_cancelled_orders == 0){

                if (Auth::User()->bmk_wallet_address === NULL && $request->selectedCrypto_type == 'BMK') {
                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new BmkApiController;
                    $url = $base_url . '/generate_bmk_wallet_address';
                    $params = array('entity_name' => 'Wealthmark');
                    $wallet_address_result = $BmkApiController->verify_api($url, $params);
                    $upadeWalletAddress = User::where('id', Auth::user()->id)->update(['bmk_wallet_address' => $wallet_address_result->wallet_signature]);
                }

                $payment_account_details = PaymentMedhods::where('id', $request->payment_bank_id)->first();
                // echo "<pre>"; print_r($payment_account_details); echo "<pre>";
                // echo "<pre>"; print_r($data);die();
                $orderid = mt_rand(1000000000, 9999999999);


                $inserted_data_conf_order = [
                    'buyer_id' => $userid,
                    'order_id' => $orderid,
                    'buyer_country' => $buyer_country_name,
                    'crypto_type' => $request->selectedCrypto_type,
                    'total_crypto_value' => $request->total_Cryptovalue,
                    'domestic_currency_value' => $request->domesticCurrencyVAL,
                    'domestic_currency_type' => $request->domesticCurrencyId,
                    'payment_method_id' => $request->paymentMethodId,
                    'payment_bank_id' => $request->payment_bank_id,
                    'payment_account_details_for_buyer' => json_encode($payment_account_details),

                    'ordertype' => $request->ordertype,
                    'crypto_current_value' => $request->current_crypto_value,
                    'inr_value_in_usd' => $request->inr_value_in_usd,
                    'current_crypto_in_inr' => $request->current_crypto_in_inr,
                    'order_status' => 0,
                    'trade_type' => 1,
                    'payment_time_limit' => env('EXPRESS_ORDER_MAX_TIME'),
                    'ordertype' => $request->ordertype,
                    'created_at' => now(),
                ];



                $conf_order_data = Order::insert($inserted_data_conf_order);
                $lastId = DB::getPdo()->lastInsertId();
                //print_r($conf_order_data); die();
                //session_start();

                Session::put('orderid', $lastId);
                //$_SESSION['orderid'] = $lastId;
                //session(['orderid' => $lastId]);
                //echo $_SESSION['orderid'];
                //die;

                if ($conf_order_data) {
                    $orderdata =  Order::where('id', $lastId)->latest()->first();
                    $order_accept_action = $orderdata->order_accept_action;
                    $user = auth()->user();
                    $notification_category_id = NotificationCategory::where('id', 2)->first();
                    $orderstatus = 0;
                    $seller_confirmation_status = $orderdata->seller_confirmation_status;
                    $buyer_confirmation_status = $orderdata->seller_confirmation_status;
                    $orderId = $lastId;
                    if ($orderdata->buyer_id != '') {
                        $buyer_id = $orderdata->buyer_id;
                    } else {
                        $buyer_id = '';
                    }

                    if ($orderdata->seller_id != '') {
                        $seller_id = $orderdata->seller_id;
                    } else {
                        $seller_id = '';
                    }

                    if (Auth::user()->on_site_notification_status == 1) {
                        $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $buyer_id, $seller_id));
                    }

                    return response()->json(['message' => 'success', 'order_data' => $conf_order_data, 'ordertype' => $request->ordertype]);
                } else {
                    return response()->json(['message' => 'error, somthing went wrong']);
                }
                //   }else{
                //       return response()->json(['message'=>'error, You have canceled 3 order in today.', 'order_data' => '1'], 401);
                //   }

                //$request->session()->put('orderid', $lastId->id);
                // Session::put('orderid', $conf_order_data->id);

                //$get_order_data = DB::table('confirm_order')->where('order_id', $conf_order_data->id)->latest()->first();

            } else {
                $bitcoin = Cryptocap::getSingleAsset('bitcoin');
                $ethereum = Cryptocap::getSingleAsset('ethereum');

                $base_url = env('BMK_API_BASE_URL');
                $BmkApiController = new BmkApiController;
                $url = $base_url . '/get_currency';
                $params = array();
                $allcurrency = $BmkApiController->verify_api($url, $params);

                $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
                $bmk_params = array('currency_name' => 'USD');
                $bmk_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);
                //$allcurrency = currencies::all();
                //$allcurrency = currencies::orderBy('id','desc')->get();
                $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
                $allpaymentMethod_list = payment_method_list::all();
                return view('web.express_buy_sell_crypto', compact('bitcoin', 'ethereum', 'allcurrency', 'userPaymentMethod', 'allpaymentMethod_list', 'bmk_price'));
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function expressOrderConfirmation(Request $request)
    {
        // dd($request->all());
        $orderserialId = $request->orderId;
        $getExpressOrderData = order::where('id', $orderserialId)->first();
        //print_r($getExpressOrderData);
        if ($getExpressOrderData) {
            //print_r($orderserialId);
            if ($getExpressOrderData->adsid == null && $getExpressOrderData->order_status == 0 && $getExpressOrderData->seller_confirmation_status == null && $getExpressOrderData->seller_id == null && $getExpressOrderData->seller_country == null) {
                // print_r($getExpressOrderData);



                // $payment_account_details_for_seller =  PaymentMedhods::where('user_id', Auth::user()->id)->where('id', $getExpressOrderData->payment_method_id)->where('deleted_at','=',NULL)->first();

                $payment_account_details_for_seller = DB::table('payment_medhods')
                    ->join('payment_method_lists', 'payment_medhods.method_type', '=', 'payment_method_lists.name')
                    ->where('payment_method_lists.id', $getExpressOrderData->payment_method_id)
                    ->select('payment_medhods.*', 'payment_method_lists.*')
                    ->where('payment_medhods.user_id',  Auth::user()->id)
                    ->whereNull('payment_medhods.deleted_at')
                    ->first();

                //print_r($payment_account_details_for_seller);

                $updteorder = Order::where('id', $orderserialId)
                    ->update(['payment_account_details_for_seller' => json_encode($payment_account_details_for_seller), 'order_accept_action' => 1,  'order_status' => 1, 'seller_country' => Auth::user()->country, 'seller_id' =>   Auth::user()->id, 'updated_at' => now()]);
                //  print_r($updteorder);
                if ($updteorder) {
                    // Session::put('orderid', $orderserialId);
                    // echo "123";
                    // print_r(Session::put('orderid', $orderserialId));
                    //$_SESSION['orderid'] = $orderserialId;
                    $request->session()->put('orderid', $orderserialId);

                    //session(['key' => 'value']);
                    // echo $_SESSION['orderid'];
                    // $chatmessage = new Chat;
                    // $chatmessage->to_user_id =$getExpressOrderData->seller_id;
                    // $chatmessage->from_user_id = $getExpressOrderData->buyer_id;
                    // $chatmessage->order_id =$orderserialId;
                    // $chatmessage->chat_message ='Order Accepted';
                    // $chatmessage->status = 0;
                    // $chatmessage->save();
                }
            } else {
                print_r(0);
            }
        }
    }

    public function checkOrderAcceptedorNot(Request $request)
    {
        $acceptedOrderid = $request->orderId;
        $check_Order = order::where('id', $acceptedOrderid)->first();
        if ($check_Order->order_accept_action == 1 || $check_Order->order_status == 1 || $check_Order->order_status == 2 || $check_Order->order_status == 3 || $check_Order->order_status == 4) {
            $value = 1;
        } else {
            $value = 0;
        }
        return $value;
    }

    public function getpaymentmethodByuserid(Request $request)
    {
        $HomeController = new HomeController;
        $totalCoins = $HomeController->getTotalAvailableCoinsInMarketWallet();
        $formattedTotalCoins = number_format($totalCoins, 8);
        //print_r($HomeController->getTotalAvailableCoinsInMarketWallet());
        //   $payment_account_details_for_seller =  PaymentMedhods::where('user_id', Auth::user()->id)->where('payment_method', $getExpressOrderData->payment_method_id)->where('deleted_at','=',NULL)->first();
        $payment_account_details_for_seller  = DB::table('payment_medhods')
            ->join('payment_method_lists', 'payment_method_lists.name', '=', 'payment_medhods.method_type')
            ->where('payment_medhods.user_id', '=', Auth::user()->id)
            ->where('payment_medhods.deleted_at', '=', null)

            ->where('payment_method_lists.id', '=', $request->payment_method_id)
            ->select('payment_method_lists.id')
            ->first();
        $id = $payment_account_details_for_seller->id;
        $data = array("payment_method_id" => $id, "AvailableCoins" => $formattedTotalCoins);

        //print_r($payment_account_details_for_seller->id);
        return json_encode($data);
    }

    public function p2p_order(Request $request)
    {

        if (Auth::check()) {
            $buyerid = Auth::user()->id;
            $sellerid = Auth::user()->id;

            /* For Processing Tab*/

            $p2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->where('ordertype', '!=', null)
                ->orderByDesc('created_at')
                ->paginate(25);

            $today = date('Y-m-d');


            $active_p2p_orders = DB::table('orders')
                ->where(function ($query)  use ($buyerid, $sellerid) {
                    $query->where('buyer_id', $buyerid)
                        ->orWhere('seller_id', $sellerid);
                })
                ->whereNotIn('order_status', ['2', '3', '4'])
                ->where(function ($query) {
                    $query->whereNull('buyer_confirmation_status')
                        ->orWhereNull('seller_confirmation_status');
                })
                ->whereDate('created_at', $today)
                ->orderByDesc('created_at')
                ->get();

            $count_active_p2p_orders = $active_p2p_orders->count();
            //dd($count_active_p2p_orders, $active_p2p_orders );
            /* For View-all Tab*/

            $p2p_orders_view_all = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->orderByDesc('created_at')
                ->paginate(25);


            $request_id = $request->id;

            /* For express Processing Tab*/

            $today = date('Y-m-d');

            $active_express_orders = DB::table('orders')
                ->where(function ($query)  use ($buyerid, $sellerid) {
                    $query->where('buyer_id', '!=', $buyerid)
                        ->orWhere('seller_id', '!=', $sellerid);
                })
                ->where('trade_type', '=', 1)
                ->where('order_accept_action', '=', 0)
                //->whereNotIn('order_status', ['2', '3', '4'])
                ->where('order_status', '=', 0)
                ->whereDate('created_at', $today)
                ->orderByDesc('created_at')
                ->get();
            $count_active_express_orders = $active_express_orders->count();
            $expressProcessingorderData = collect();
            //print_r($expressProcessingorderData);
            if ($active_express_orders->isNotEmpty()) {
                $i = 1;
                foreach ($active_express_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;
                    $username = '-';
                    if (($value->buyer_id != $buyerid)) {


                        if ($value->buyer_id) {
                            $seller = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if (($value->seller_id != $sellerid)) {

                        // $username = '-';
                        if ($value->seller_id) {
                            $buyer = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }
                    $tradetype = '-';
                    if ($value->buyer_id == $buyerid) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id == $sellerid) {
                        $tradetype = 'Sell';
                    }


                    $HomeController = new HomeController;
                    $totalCoins = $HomeController->getTotalAvailableCoinsInMarketWallet();
                    $formattedTotalCoins = number_format($totalCoins, 8);
                    $payment_account_details_for_seller  = DB::table('payment_medhods')
                        ->join('payment_method_lists', 'payment_method_lists.name', '=', 'payment_medhods.method_type')
                        ->where('payment_medhods.user_id', '=', Auth::user()->id)
                        ->where('payment_medhods.deleted_at', '=', null)

                        ->where('payment_method_lists.id', '=', $value->payment_method_id)
                        ->select('payment_method_lists.id')
                        ->first();
                    if ($payment_account_details_for_seller != '') {
                        $id = $payment_account_details_for_seller->id;
                    } else {
                        $id = "0";
                    }

                    $data = array("payment_method_id" => $id, "AvailableCoins" => $formattedTotalCoins);


                    $expressProcessingorderData->push([
                        'payment_account_id_for_seller' => $id,
                        'AvailableCoins' => $formattedTotalCoins,
                        'main_id' => $value->id,
                        'id' => $i,
                        'order_id' => $value->order_id,
                        'seller_name' => $username,
                        'tradetype' => $tradetype,
                        'buyer_country' => $value->buyer_country,
                        'seller_country' => $value->seller_country,
                        'crypto_type' => $value->crypto_type,
                        'total_crypto_value' => $value->total_crypto_value,
                        'domestic_currency_value' => $value->domestic_currency_value,
                        'domestic_currency_type' => $currenciesname,
                        'crypto_current_value' => $value->crypto_current_value,
                        'current_crypto_in_inr' => $value->current_crypto_in_inr,
                        'order_status' => $value->order_status,
                        'seller_id' => $value->seller_id,
                        'buyer_id' => $value->buyer_id,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                        'created_at' => date('d:m:Y H:i:s', strtotime($value->created_at)),
                        'payment_method_id' => $value->payment_method_id,
                    ]);
                    $i++;
                    //print_r($expressProcessingorderData);
                }
            }
            return view('user.p2p-order', compact('p2p_orders', 'active_p2p_orders', 'count_active_p2p_orders', 'p2p_orders_view_all', 'expressProcessingorderData', 'count_active_express_orders'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function getExpress_Order(Request $request)
    {
        //  session_start();
        $buyerid = Auth::user()->id;
        $sellerid = Auth::user()->id;
        $request_id = $request->id;
        // $orderId = $_SESSION['orderid'];
        if ($request_id == 'express-Processing-order-tab') {
            $today = date('Y-m-d');

            $active_express_orders = DB::table('orders')
                ->where(function ($query)  use ($buyerid, $sellerid) {
                    $query->where('buyer_id', '!=', $buyerid)
                        ->orWhere('seller_id', '!=', $sellerid);
                })
                ->where('trade_type', '=', 1)
                ->where('order_accept_action', '=', 0)
                //->whereNotIn('order_status', ['2', '3', '4'])
                ->where('order_status', '=', 0)
                ->whereDate('created_at', $today)
                ->orderByDesc('created_at')
                ->get();
            $expressProcessingorderData = collect();
            if ($active_express_orders->isNotEmpty()) {
                $i = 1;
                foreach ($active_express_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;
                    $username = '-';
                    if (($value->buyer_id != $buyerid)) {


                        if ($value->buyer_id) {
                            $seller = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if (($value->seller_id != $sellerid)) {

                        // $username = '-';
                        if ($value->seller_id) {
                            $buyer = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }
                    $tradetype = '-';
                    if ($value->buyer_id) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id) {
                        $tradetype = 'Sell';
                    }
                    $HomeController = new HomeController;
                    $totalCoins = $HomeController->getTotalAvailableCoinsInMarketWallet();
                    $formattedTotalCoins = number_format($totalCoins, 8);
                    $payment_account_details_for_seller  = DB::table('payment_medhods')
                        ->join('payment_method_lists', 'payment_method_lists.name', '=', 'payment_medhods.method_type')
                        ->where('payment_medhods.user_id', '=', Auth::user()->id)
                        ->where('payment_medhods.deleted_at', '=', null)

                        ->where('payment_method_lists.id', '=', $value->payment_method_id)
                        ->select('payment_method_lists.id')
                        ->first();
                    if ($payment_account_details_for_seller != '') {
                        $id = $payment_account_details_for_seller->id;
                    } else {
                        $id = "0";
                    }

                    $data = array("payment_method_id" => $id, "AvailableCoins" => $formattedTotalCoins);

                    $expressProcessingorderData->push([
                        'payment_account_id_for_seller' => $id,
                        'AvailableCoins' => $formattedTotalCoins,
                        'main_id' => $value->id,
                        'id' => $i,
                        'order_id' => $value->order_id,
                        'seller_name' => $username,
                        'tradetype' => $tradetype,
                        'buyer_country' => $value->buyer_country,
                        'seller_country' => $value->seller_country,
                        'crypto_type' => $value->crypto_type,
                        'total_crypto_value' => $value->total_crypto_value,
                        'domestic_currency_value' => $value->domestic_currency_value,
                        'domestic_currency_type' => $currenciesname,
                        'crypto_current_value' => $value->crypto_current_value,
                        'current_crypto_in_inr' => $value->current_crypto_in_inr,
                        'order_status' => $value->order_status,

                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                        'payment_method_id' => $value->payment_method_id,
                        'created_at' => date('d:m:Y H:i:s', strtotime($value->created_at)),
                    ]);
                    $i++;
                }
            }
            return response()->json(['message' => 'success', 'active_express_orders' => $expressProcessingorderData]);
        }
        if ($request_id == 'express-view-order-tab') {
            $express_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->where('trade_type', '=', 1)
                ->orderByDesc('created_at')
                ->paginate(10);
            $expressorderData = collect();
            if ($express_orders->isNotEmpty()) {
                $i = 1;
                foreach ($express_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;
                    $username = '-';
                    if (($value->buyer_id == $buyerid)) {


                        if ($value->seller_id) {
                            $seller = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if (($value->seller_id == $sellerid)) {

                        // $username = '-';
                        if ($value->buyer_id) {
                            $buyer = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }
                    $tradetype = '-';
                    if ($value->buyer_id == $buyerid) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id == $sellerid) {
                        $tradetype = 'Sell';
                    }


                    $expressorderData->push([
                        'main_id' => $value->id,
                        'id' => $i,
                        'order_id' => $value->order_id,
                        'seller_name' => $username,
                        'tradetype' => $tradetype,
                        'buyer_country' => $value->buyer_country,
                        'seller_country' => $value->seller_country,
                        'crypto_type' => $value->crypto_type,
                        'total_crypto_value' => $value->total_crypto_value,
                        'domestic_currency_value' => $value->domestic_currency_value,
                        'domestic_currency_type' => $currenciesname,
                        'crypto_current_value' => $value->crypto_current_value,
                        'current_crypto_in_inr' => $value->current_crypto_in_inr,
                        'order_status' => $value->order_status,
                        'payment_method_id' => $value->payment_method_id,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                        'created_at' => date('d:m:Y H:i:s', strtotime($value->created_at)),


                    ]);
                    $i++;
                }
            }
            return response()->json(['message' => 'success', 'all_express_orders' => $expressorderData, 'pagination' => $express_orders]);
        }
    }

    public function express_buy_sell_crypto_22052023(Request $request)
    {
        return $this->express_buy_sell_crypto($request);
    }
}
