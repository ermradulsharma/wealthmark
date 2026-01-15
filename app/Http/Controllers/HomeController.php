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
use App\Http\Controllers\MailerController;
use App\Http\Controllers\KycVerificationController;
use App\Http\Controllers\BmkApiController;
use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\StakingController;
use App\Http\Controllers\ImageCompression;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use App\Models\entities;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public $successStatus = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // session_start(); // Handled by Laravel middleware
        //$this->middleware('auth');
    }

    public function setCookie(Request $request)
    {
        $country = $request->get('country');
        $minutes = time() + 60 * 60 * 24 * 365;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('country_name', $country, $minutes));
        return $response;
    }

    public function getCookie(Request $request)
    {
        $value = $request->cookie('country_name');
        return $value;
    }


    public function hideEmailAddress($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            list($first, $last) = explode('@', $email);
            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first) - 3), $first);
            $last = explode('.', $last);
            $last_domain = str_replace(substr($last['0'], '10'), str_repeat('*', strlen($last['0']) - 1), $last['0']);
            $hideEmailAddress = $first . '@' . $last_domain . '.' . $last['1'];
            return $hideEmailAddress;
        }
    }


    public function credit_staking_bmk_benefites()
    {
        $results = DB::table('market_wallets')->where('coin_name', '=', 'BMK')->where('user_id', '=', Auth::User()->id)->where('status', '=', 0)->where('type_of_coin', '=', 1)->where('coin_type', '=', 1)->where('transaction_status', '=', 1)
            ->where(function ($query) {
                $query->where('p2p_credit_date', '=', DB::raw('CURDATE()'))->orWhere('p2p_credit_date', '<=', DB::raw('CURDATE()'));
            })->get();
        if (count($results)) {
            foreach ($results as $row) {
                //print_r($row);
                //echo marketWallet::where('id', $row->id)->where('user_id',Auth::User()->id)->where('coin_name','BMK')->update(['order_id' => 1,'status'=>1,'updated_at'=> date("Y-m-d H:i:s")]);
                $base_url = env('BMK_API_BASE_URL');
                $BmkApiController = new BmkApiController;
                $url = $base_url . '/buy_bmk_coin';
                $user_wallet_addrs = User::where('id', Auth::user()->id)->first();
                $params = array('wallet_address' => $user_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $row->no_of_coin, 'type' => 3, 'mode' => 5);
                $api_result = $BmkApiController->verify_api($url, $params);
                $order_id = rand(1000000000, 1234567890);
                $currency = currencies::where('name', 'INR')->first();
                $coin_price_url = $base_url . '/get_current_coin_price';
                $coin_price_params = array();
                $price = $BmkApiController->verify_api($coin_price_url, $coin_price_params);

                $seller_results = DB::table('model_has_roles')->join('users', 'users.id', '=', 'model_has_roles.model_id')->where('model_has_roles.role_id', '=', 1)->select('*')->first();
                $data = array(
                    'order_id' => $order_id,
                    'buyer_id' => Auth::User()->id,
                    'seller_id' => $seller_results->id,
                    'buyer_country' => Auth::user()->country,
                    'seller_country' => Auth::user()->country,
                    'crypto_type' => "BMK",
                    'total_crypto_value' => $row->no_of_coin,
                    'domestic_currency_type' => 1,
                    'domestic_currency_value' => 0,
                    'payment_method_id' => 0,
                    'buyer_confirmation_status' => 1,
                    'seller_confirmation_status' => 1,
                    'payment_bank_id' => 0,
                    'crypto_current_value' => $price->price * $currency->currencyVal_by_USD,
                    'current_crypto_in_inr' => $price->price,
                    'inr_value_in_usd' => $currency->currencyVal_by_INR,
                    'order_status' => 1,
                );
                $order_data = Order::insertGetId($data);
                if ($order_data) {
                    marketWallet::where('id', $row->id)->where('user_id', Auth::User()->id)->where('coin_name', 'BMK')->update(['new_order_id' => $order_data, 'status' => 1, 'updated_at' => date("Y-m-d H:i:s")]);
                }
            }
        }
    }

    public function credit_recurring_bmk_benefites()
    {
        $results = DB::table('market_wallets')->where('coin_name', '=', 'BMK')->where('user_id', '=', Auth::User()->id)->where('status', '=', 0)->where('type_of_coin', '=', 1)->where('coin_type', '=', 2)->where('transaction_status', '=', 1)
            ->where(function ($query) {
                $query->where('p2p_credit_date', '=', DB::raw('CURDATE()'))->orWhere('p2p_credit_date', '<=', DB::raw('CURDATE()'));
            })->get();
        if (count($results)) {
            foreach ($results as $row) {
                marketWallet::where('id', $row->id)->where('user_id', Auth::User()->id)->where('coin_name', 'BMK')->update(['status' => 1, 'updated_at' => date("Y-m-d H:i:s")]);
            }
        }
    }

    public function validate_giftcard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_no' => 'required|string|size:16',
            'sr_no' => 'required|string|size:16',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $giftcard = giftcard::where('Gift_Card_Voucher_no', $request->order_no)->where('Gift_Card_Voucher_pin', $request->sr_no)->first();
            if ($giftcard) {
                if ($giftcard->Gift_Card_Status == 1) {
                    $g_date = date("Y-m-d", strtotime($giftcard->Gift_Card_Expiration_date));
                    $curdate = strtotime(date('Y-m-d'));
                    $mydate = strtotime($g_date);
                    if ($curdate >= $mydate) {
                        return response()->json(['error' => "Gift Card Expired."], 401);
                    } else {
                        $base_url = env('BMK_API_BASE_URL');
                        $BmkApiController = new BmkApiController;
                        $url = $base_url . '/get_current_coin_price';
                        $params = array();
                        $price = $BmkApiController->verify_api($url, $params);
                        //print_r($giftcard->Gift_Card_Amount/$price->price);
                        return response()->json(['success' => "200", 'id' => $giftcard->id, 'amount' => $giftcard->Gift_Card_Amount, 'total_coin' => $giftcard->Gift_Card_Amount / $price->price, 'coin_price' => $price->price], $this->successStatus);
                    }
                } else if ($giftcard->Gift_Card_Status == 3) {
                    return response()->json(['error' => "This gift card already used."], 401);
                } else if ($giftcard->Gift_Card_Status == 2) {
                    return response()->json(['error' => "This gift card blocked."], 401);
                } else if ($giftcard->Gift_Card_Status == 0) {
                    return response()->json(['error' => "This gift not active."], 401);
                } else {
                    return response()->json(['error' => "Please enter valid gift card details."], 401);
                }
            } else {
                return response()->json(['error' => "Invalid gift card details."], 401);
            }
        }
    }


    public function verify_otp_giftcard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_no' => 'required|string|size:16',
            'sr_no' => 'required|string|size:16',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $giftcard = giftcard::where('Gift_Card_Voucher_no', $request->order_no)->where('Gift_Card_Voucher_pin', $request->sr_no)->first();
            if ($giftcard) {
                if ($giftcard->Gift_Card_Status == 1) {
                    $g_date = date("Y-m-d", strtotime($giftcard->Gift_Card_Expiration_date));
                    $curdate = strtotime(date('Y-m-d'));
                    $mydate = strtotime($g_date);
                    if ($curdate >= $mydate) {
                        return response()->json(['error' => "Gift Card Expired."], 401);
                    } else {
                        $otp = mt_rand(100000, 999999);
                        session(['gift_card_otp' => $otp]);
                        $data = $this->hideEmailAddress($giftcard->Gift_Card_email);
                        $subject = "[Wealthmark] Confirm Your Gift Card Verification " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                        $result = new MailerController;
                        $text_message = file_get_contents(asset('public/assets/img/emailTemplates/gift_card_email_otp.html'));
                        $text_message =    str_replace("@__email__@", $giftcard->Gift_Card_email, $text_message);
                        $text_message =    str_replace("@__otp__@", $otp, $text_message);
                        $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
                        $mail_response = $result->composeEmail($giftcard->Gift_Card_email, $subject, $text_message);
                        if ($mail_response == "success") {
                            return response()->json(['success' => "200", 'email_data' => $data], $this->successStatus);
                        } else {
                            return response()->json(['error' => $mail_response], $this->successStatus);
                        }
                    }
                } else if ($giftcard->Gift_Card_Status == 3) {
                    return response()->json(['error' => "This gift card already used."], 401);
                } else if ($giftcard->Gift_Card_Status == 2) {
                    return response()->json(['error' => "This gift card blocked."], 401);
                } else if ($giftcard->Gift_Card_Status == 0) {
                    return response()->json(['error' => "This gift not active."], 401);
                } else {
                    return response()->json(['error' => "Please enter valid gift card details."], 401);
                }
            } else {
                return response()->json(['error' => "Invalid gift card details."], 401);
            }
        }
    }


    public function buy_with_otp_giftcard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_no' => 'required|string|size:16',
            'sr_no' => 'required|string|size:16',
            'gift_card_otp' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $total = DB::table('orders')
                ->select(DB::raw('(SELECT SUM(total_crypto_value) as total_bmk FROM `orders` where crypto_type="BMK" and buyer_id is not null) - (SELECT SUM(total_crypto_value) as total_bmk FROM `orders` where crypto_type="BMK" and seller_id is not null) as total'))
                ->value('total');
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_koin_currency_use_case';
            $params = array();
            $usecase_coin = $BmkApiController->verify_api($url, $params);
            if ($usecase_coin[0]->presale_public > $total) {
                $giftcard = giftcard::where('Gift_Card_Voucher_no', $request->order_no)->where('Gift_Card_Voucher_pin', $request->sr_no)->first();
                $giftcard_user = User::where('email', $giftcard->Gift_Card_email)->first();
                $base_url = env('BMK_API_BASE_URL');
                //$BmkApiController = new BmkApiController;
                $url = $base_url . '/get_current_coin_price';
                $params = array();
                $price = $BmkApiController->verify_api($url, $params);

                if ($giftcard->Gift_Card_Status == 1) {
                    $g_date = date("Y-m-d", strtotime($giftcard->Gift_Card_Expiration_date));
                    $curdate = strtotime(date('Y-m-d'));
                    $mydate = strtotime($g_date);
                    if ($curdate >= $mydate) {
                        return response()->json(['error' => "Gift Card Expired."], 401);
                    } else {
                        if (session('gift_card_otp') == $request->gift_card_otp) {
                            $agent = new Agent();
                            $ipdetail =  $this->getIPdetail();
                            $location = $ipdetail['city'];
                            $order_id = rand(1000000000, 1234567890);
                            $gift_history_data = array(
                                'gift_card_gc_number' => $request->sr_no,
                                'gift_card_gc_order_id' => $request->order_no,
                                'gift_card_otp' => $request->gift_card_otp,
                                'gift_card_user_id' => $giftcard_user->id,
                                'gift_card_current_user_id' => Auth::User()->id,
                                'gift_card_id' => $giftcard->id,
                                'created_at' => date("Y-m-d h:i:s"),
                                'updated_at' => date("Y-m-d h:i:s"),
                                'ip_address' => request()->ip() . " - " . $agent->browser() . " - " . $agent->device() . " - " . $location,
                            );
                            $seller_results = DB::table('model_has_roles')->join('users', 'users.id', '=', 'model_has_roles.model_id')->where('model_has_roles.role_id', '=', 1)->select('*')->first();
                            $payment_method_list = payment_method_list::where('name', 'Gift-card')->first();
                            $currency = currencies::where('name', 'INR')->first();
                            if (Auth::User()->bmk_wallet_address === NULL) {
                                $base_url = env('BMK_API_BASE_URL');
                                $url = $base_url . '/generate_bmk_wallet_address';
                                $params = array('entity_name' => 'Wealthmark');
                                $wallet_address_result = $BmkApiController->verify_api($url, $params);
                                $upadeWalletAddress = User::where('id', Auth::user()->id)->update(['bmk_wallet_address' => $wallet_address_result->wallet_signature]);
                            }
                            $order_data = array(
                                'order_id' => $order_id,
                                'buyer_id' => Auth::User()->id,
                                'seller_id' => $seller_results->id,
                                'buyer_country' => Auth::user()->country,
                                'seller_country' => Auth::user()->country,
                                'crypto_type' => "BMK",
                                'total_crypto_value' => $giftcard->Gift_Card_Amount / $price->price,
                                'domestic_currency_value' => $giftcard->Gift_Card_Amount,
                                'domestic_currency_type' => $currency->id,
                                'payment_method_id' => $payment_method_list->id,
                                'crypto_current_value' => $price->price * $currency->currencyVal_by_USD,
                                'current_crypto_in_inr' => $price->price,
                                'inr_value_in_usd' => $currency->currencyVal_by_INR,
                                'order_status' => 1,
                                'created_at' => date("Y-m-d h:i:s"),
                                'updated_at' => date("Y-m-d h:i:s"),
                            );
                            $gift_card_history_result_data = gift_card_history::insert($gift_history_data);
                            $history_order_data = Order::insert($order_data);
                            $update_gift_card = giftcard::where('id', $giftcard->id)->update(['Gift_Card_Status' => 3, 'Gift_Card_Used_Date' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]);
                            if ($gift_card_history_result_data && $history_order_data && $update_gift_card) {
                                $base_url = env('BMK_API_BASE_URL');
                                //$BmkApiController = new BmkApiController;
                                $url = $base_url . '/buy_bmk_coin';
                                $user_wallet_addrs = User::where('id', Auth::user()->id)->first();
                                $params = array('wallet_address' => $user_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $giftcard->Gift_Card_Amount / $price->price, 'type' => 3, 'mode' => 2);
                                $api_result = $BmkApiController->verify_api($url, $params);
                                // print_r($params);
                                // print_r($api_result);
                                // print_r($user_wallet_addrs->bmk_wallet_address);
                                // die;
                                if ($api_result) {
                                    $GiftcardController =  new GiftcardController;
                                    $get_order =  Order::where('order_id', $order_id)->first();
                                    $wallet_coin_val = $GiftcardController->fluctuate_wallet_coin($get_order->id);
                                    if ($giftcard->Gift_Card_Amount == 500) {
                                        $status = 0;
                                        $transaction_status = 1;
                                        //  $p2p_credit_date = date('Y-m-d', strtotime("+".$days." days"));
                                        $wallet_arr = array(
                                            'user_id'    => Auth::user()->id,
                                            'order_id' =>    $get_order->id,
                                            'no_of_coin' => $wallet_coin_val,
                                            'type_of_coin' => 1,
                                            'transaction_status' => $transaction_status,
                                            'status' => $status,
                                            'p2p_credit_date' => date('Y-m-d'),
                                            'comments' =>    'BMK purchased using Gift card',
                                            'coin_type' => '2',
                                            'coin_name' => "BMK"
                                        );
                                        $wallet_data = marketWallet::insert($wallet_arr);
                                    } else {
                                        $monthly_wallet_coin_val = floatval($wallet_coin_val) / 12;
                                        for ($x = 0; $x <= 11; $x++) {
                                            $days = 30 * $x;
                                            $dayss = 30;
                                            $curdate = date("Y-m-d");
                                            if ($x == 0) {
                                                $Start_date = date('Y-m-d');
                                                $p2p_credit_date = date('Y-m-d', strtotime($Start_date . ' +' . $dayss . 'days'));
                                            } else {
                                                $Start_date = date('Y-m-d', strtotime($curdate . ' +' . $days . 'days'));
                                                $p2p_credit_date = date('Y-m-d', strtotime($Start_date . ' +' . $dayss . 'days'));
                                            }

                                            $status = 0;
                                            $transaction_status = 1;
                                            //  $p2p_credit_date = date('Y-m-d', strtotime("+".$days." days"));
                                            $wallet_arr = array(
                                                'user_id'    => Auth::user()->id,
                                                'order_id' =>    $get_order->id,
                                                'no_of_coin' => $monthly_wallet_coin_val,
                                                'type_of_coin' => 1,
                                                'transaction_status' => $transaction_status,
                                                'status' => $status,
                                                'p2p_credit_date' => $p2p_credit_date,
                                                'comments' =>    'BMK purchased using Gift card',
                                                'coin_type' => '2',
                                                'coin_name' => "BMK"
                                            );
                                            $wallet_data = marketWallet::insert($wallet_arr);
                                        }
                                    }

                                    $data = $this->hideEmailAddress($giftcard->Gift_Card_email);
                                    $subject = "[Wealthmark] Your Gift Card Order Successfully " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                                    $result = new MailerController;
                                    $text_message = file_get_contents(asset('public/assets/img/emailTemplates/coin_purchase.html'));
                                    $text_message =    str_replace("@__email__@", $giftcard->Gift_Card_email, $text_message);
                                    $text_message =    str_replace("@__coinName__@", "BMK", $text_message);
                                    $text_message =    str_replace("@__order_id__@", $order_id, $text_message);
                                    $text_message =    str_replace("@__order_date__@", date("Y-m-d h:i:s"), $text_message);
                                    $text_message =    str_replace("@__total_coin__@", $giftcard->Gift_Card_Amount / $price->price, $text_message);
                                    $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
                                    $mail_response = $result->composeEmail($giftcard->Gift_Card_email, $subject, $text_message);
                                    return response()->json($api_result, $this->successStatus);
                                } else {
                                    return response()->json($api_result, 401);
                                }
                            }
                        } else {
                            return response()->json(['error' => "Enter valid otp"], 401);
                        }
                    }
                } else if ($giftcard->Gift_Card_Status == 3) {
                    return response()->json(['error' => "This gift card already used."], 401);
                } else if ($giftcard->Gift_Card_Status == 2) {
                    return response()->json(['error' => "This gift card blocked."], 401);
                } else if ($giftcard->Gift_Card_Status == 0) {
                    return response()->json(['error' => "This gift not active."], 401);
                } else {
                    return response()->json(['error' => "Please enter valid gift card details."], 401);
                }
            } else {
                return response()->json(['error' => " Can not sale BMK due to insufficient BMK."], 401);
            }

            // 		}else{
            // 		    return response()->json(['error'=>"Can not sale BMK due to insufficient BMK."], 401);
            // 		}
        }
    }

    public function request_login_phone_otp(Request $request)
    {
        if (session('user_id') != "" and session('phone_number') != "") {

            // to check user already loggedin for phone


            $getLoginAttemptHistory = loginAttemptHistory::where('user_id', session('user_id'))->where('status', '=', 1)->first();

            if ($getLoginAttemptHistory) {

                return view('auth.loggedinPhone_confirmation');
            } else {

                $data = $this->hideEmailAddress(session('email_id'));
                return view('auth.request_login_phone_otp', compact('data'));
            }
            // end to check user already loggedin

        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }


    public function request_login_email_otp(Request $request)
    {

        if (@$_SESSION['user_id'] != "" and @$_SESSION['email_id'] != "") {

            // to check user already loggedin

            $getLoginAttemptHistory = loginAttemptHistory::where('user_id', session('user_id'))->where('status', '=', 1)->first();

            if ($getLoginAttemptHistory) {

                return view('auth.loggedinEmail_confirmation');
            } else {

                $data = $this->hideEmailAddress(session('email_id'));
                return view('auth.request_login_email_otp', compact('data'));
            }
            // end to check user already loggedin



        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }



    public function change_email_authenticator(Request $request)
    {
        if (Auth::check()) {
            //  dd($request->all());
            if (Auth::user()->is_mail_verified == 1 and Auth::user()->email != "") {
                $AuthenticatorController = new GoogleAuthenticatorController;
                $secret = $AuthenticatorController->createSecret();
                $reg_data = $request->all();
                $reg_data["google2fa_secret"] = $secret;
                $request->session()->flash('registration_data', $reg_data);
                $reg_data['email'] = Auth::user()->email;
                $QR_Image = $AuthenticatorController->getQRCodeGoogleUrl(
                    $reg_data['email'],
                    $reg_data['google2fa_secret'],
                    config('app.name')
                );
                $phone_data = substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4);
                return view('auth.change-email-authenticator', ['QR_Image' => $QR_Image, 'secret' => $reg_data['google2fa_secret'], 'phone_data' => $phone_data, 'email_data' => $this->hideEmailAddress($this->hideEmailAddress(Auth::user()->email))]);
            } else {
                return redirect(app()->getLocale() . "/user/security");
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function change_sms_authenticator(Request $request)
    {
        if (Auth::check()) {
            //  dd($request->all());
            if (Auth::user()->is_phone_verified == 1 and Auth::user()->phone != "") {
                $AuthenticatorController = new GoogleAuthenticatorController;
                $secret = $AuthenticatorController->createSecret();
                $reg_data = $request->all();
                $reg_data["google2fa_secret"] = $secret;
                $request->session()->flash('registration_data', $reg_data);
                $reg_data['email'] = Auth::user()->email;
                $QR_Image = $AuthenticatorController->getQRCodeGoogleUrl(
                    $reg_data['email'],
                    $reg_data['google2fa_secret'],
                    config('app.name')
                );
                $phone_data = substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4);
                return view('auth.change-sms-authenticator', ['QR_Image' => $QR_Image, 'secret' => $reg_data['google2fa_secret'], 'phone_data' => $phone_data, 'email_data' => $this->hideEmailAddress($this->hideEmailAddress(Auth::user()->email))]);
            } else {
                return redirect(app()->getLocale() . "/user/security");
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function request_otp(Request $request)
    {
        if (session('user_id') != "" and session('email_id') != "" and session('phone_number') != "") {
            return view('auth.request_otp');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function request_reset_password_otp(Request $request)
    {
        if (@$_SESSION['user_id'] != "" and (@$_SESSION['email_id'] != "" or @$_SESSION['phone_number'] != "")) {
            $data = $this->hideEmailAddress($_SESSION['email_id']);
            return view('auth.reset_password_otp', compact('data'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function request_reset_password(Request $request)
    {
        if (session('user_id') != "" and (session('email_id') != "" or session('phone_number') != "")) {
            return view('auth.reset-password-form');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function submit_reset_pass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {


            $user = User::find(session('user_id'));
            $user->password = bcrypt($request->password);
            $pass_data = $user->save();
            if ($pass_data) {

                if (session()->has('user_id')) {
                    if (session('is_mail_verified') == 0 and session('is_phone_verified') == 0 and session('account_type') == 1) {



                        $findoldrec =  User::where('id', session('user_id'))->first();


                        if (session('login_type') == 'mobile') {

                            User::where('id', session('user_id'))->update(['email' => session('new_rec'), 'is_mail_verified' => 1, 'is_phone_verified' => 1, 'email_verified_at' => date("Y-m-d H:i:s"), 'phone_verified_at' => date("Y-m-d H:i:s")]);

                            // $old_record =  $_SESSION['old_rec'];
                            $old_record =  $findoldrec->email;
                            // $new_record = $_SESSION['email_id'];
                            $new_record = session('new_rec');
                        }

                        if (session('login_type') == 'email') {
                            // print_r($_SESSION);
                            User::where('id', session('user_id'))->update(['phone' => session('new_rec'), 'is_mail_verified' => 1, 'is_phone_verified' => 1, 'email_verified_at' => date("Y-m-d H:i:s"), 'phone_verified_at' => date("Y-m-d H:i:s")]);
                            // $old_record ==  $_SESSION['old_rec'];
                            $old_record =  $findoldrec->phone;
                            // $new_record = $_SESSION['phone_number'];
                            $new_record = session('new_rec');
                        }

                        // print_r($_SESSION);

                        $oldUserHistory = new change_password_history;
                        $oldUserHistory->user_id = session('user_id');
                        $oldUserHistory->login_type = session('login_type');
                        $oldUserHistory->old_record = $old_record;
                        $oldUserHistory->new_record = $new_record;
                        $oldUserHistory->ip = request()->ip();
                        $oldUserHistory->record_type = session('account_type');
                        $oldUserHistory->save();
                    }
                }

                // old user condition

                //    print_r($_SESSION );
                //   print_r($_SESSION['is_mail_verified'] );
                //   print_r($_SESSION['is_phone_verified']);
                //   print_r($_SESSION['email_id']);
                //     print_r($_SESSION['phone_number']);
                //if(isset($_SESSION['user_id']) ){
                //   $getuser=  User::where('id', $_SESSION['user_id'])->first();
                // //     print_r($getuser->user_type);

                // if($getuser->user_type == 1 && isset($_SESSION['email_otp']) && ($getuser->is_mail_verified == 0) ){

                //    User::where('id', $_SESSION['user_id'])->update(['is_mail_verified' => 1]);
                // }

                // if($getuser->user_type == 1 && isset($_SESSION['phone_otp']) && ($getuser->is_phone_verified == 0) ){

                //    User::where('id', $_SESSION['user_id'])->update(['is_phone_verified' => 1]);
                // }

                //}
                // end old user condition

                session()->flush();
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Something went wrong"], 401);
            }
        }
    }

    public function pass_success(Request $request)
    {
        return view('auth.success_password');
    }

    public function verifyOTP_beforeAddPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'potp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {

            // 	print_r($_SESSION);

            if ($request->potp == session('otp_beforeAddPayment')) {
                session()->forget('otp_beforeAddPayment');
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Enter valid email or phone otp "], 401);
            }
        }
    }




    public function verify_reset_pass_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => 'required|numeric|digits_between:6,6',
            'potp' => 'required|numeric|digits_between:6,6',
            'eotp' => 'required|numeric|digits_between:6,6',
            'o_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {

            if ($request->otp_type == "Email Address Verification Code") {

                $AuthenticatorController = new GoogleAuthenticatorController;
                $tolerance = 0;
                $checkResult = $AuthenticatorController->verifyCode(session('secret'), $request->o_otp, $tolerance);


                if ($request->otp != 00000 && $request->potp == 00000 && $request->o_otp == 000000) {
                    if ($request->otp == session('email_otp')) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter email valid otp "], 401);
                    }
                }

                if ($request->otp != 00000 && $request->potp != 00000 && $request->o_otp == 000000) {
                    if ($request->otp == session('email_otp') && $request->potp == session('phone_otp')) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter valid email or phone otp "], 401);
                    }
                }

                if ($request->otp != 00000 && $request->potp == 00000 && $request->o_otp != 000000) {

                    if ($request->otp == session('email_otp') && $checkResult === true) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter valid email or auth otp "], 401);
                    }
                }

                if ($request->otp != 00000 && $request->potp != 00000 && $request->o_otp != 000000) {

                    if ($request->otp == session('email_otp') && $request->potp == session('phone_otp') && $checkResult === true) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter valid email or auth otp "], 401);
                    }
                }

                //   if( ($request->otp==$_SESSION["email_otp"]  && $_SESSION["is_phone_verified"] ==0  && $_SESSION["is_two_factor"] == 0 ) ||
                // ($request->otp==$_SESSION["email_otp"] && $request->potp==$_SESSION["phone_otp"] && $checkResult===true) ||
                // ($request->otp==$_SESSION["email_otp"] && $request->potp==$_SESSION["phone_otp"] && $_SESSION["is_two_factor"] == 0) ||
                // ($request->otp==$_SESSION["email_otp"] && $checkResult===true && $_SESSION["is_phone_verified"] ==0) ){

                //                 return response()->json(['success' => "200" ], $this-> successStatus);
                // 			}else{
                // 				return response()->json(['error'=>"Enter valid otp "], 401);
                // 			}
            }


            if ($request->otp_type == "Phone Number Verification Code") {

                $AuthenticatorController = new GoogleAuthenticatorController;
                $tolerance = 0;
                $checkResult = $AuthenticatorController->verifyCode(session('secret'), $request->o_otp, $tolerance);

                // print_r($checkResult);
                //     	print_r($_SESSION);


                if ($request->otp != 00000 && $request->eotp == 00000 && $request->o_otp == 000000) {
                    if ($request->otp == session('phone_otp')) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter email valid otp "], 401);
                    }
                }

                if ($request->otp != 00000 && $request->eotp != 00000 && $request->o_otp == 000000) {
                    if ($request->otp == session('phone_otp') && $request->eotp == session('email_otp')) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter valid email or phone otp "], 401);
                    }
                }

                if ($request->otp != 00000 && $request->eotp == 00000 && $request->o_otp != 000000) {

                    if ($request->otp == session('phone_otp') && $checkResult === true) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter valid email or auth otp "], 401);
                    }
                }

                if ($request->otp != 00000 && $request->eotp != 00000 && $request->o_otp != 000000) {

                    if ($request->otp == session('phone_otp') && $request->eotp == session('email_otp') && $checkResult === true) {
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => "Enter valid email or auth otp "], 401);
                    }
                }

                // if( ($request->otp==$_SESSION["phone_otp"]  && $_SESSION["is_mail_verified"] == 0 && $_SESSION["is_two_factor"] == 0) ||
                // ($request->otp==$_SESSION["phone_otp"] && $request->eotp==$_SESSION["email_otp"] && $checkResult===true) ||
                // ($request->otp==$_SESSION["phone_otp"] && $request->eotp==$_SESSION["email_otp"] && $_SESSION["is_two_factor"] == 0) ||
                // ($request->otp==$_SESSION["phone_otp"] && $checkResult===true && $_SESSION["is_mail_verified"] == 0) ){


                //    return response()->json(['success' => "200"], $this->successStatus);

                // 			}else{
                // 				return response()->json(['error'=>"Enter valid otp otp"], 401);
                // 			}
            }
        }
    }



    public function verify_old_user_reset_pass_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'potp' => 'required|numeric|digits_between:6,6',
            'eotp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {

            //   print_r($_SESSION);

            session(['new_rec' => $request->new_rec]);
            session(['old_rec' => $request->old_rec]);
            session(['login_type' => $request->otp_type]);

            if ($request->otp_type == "email" and $request->potp == session('phone_otp') and $request->eotp == session('email_otp')) {
                return response()->json(['success' => "200"], $this->successStatus);
            }
            // 			else{
            // 				return response()->json(['error'=>"Enter valid otp "], 401);
            // 		}

            else if ($request->otp_type == "mobile" and $request->potp == session('phone_otp') and $request->eotp == session('email_otp')) {
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Enter valid otp otp"], 401);
            }
        }
    }


    public function request_potp(Request $request)
    {
        if (session('phone_number') != "") {
            return view('auth.request_potp');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function request_eotp(Request $request)
    {
        if (session('email_id') != "") {
            $data = $this->hideEmailAddress(session('email_id'));
            return view('auth.request_eotp', compact('data'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function verify_phone_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {
            if (request('phone_otp') == session('phone_otp')) {
                $input['parent_referral_id'] = session('parent_referral_id');
                $input['is_phone_verified'] = 1;
                $input['phone'] = session('phone_number');
                $input['password'] = session('user_pass');
                $input['referral_id'] = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                $input['country_phone_code'] = session('country_phone_code');
                $input['country_code'] = session('country_code');
                $input['is_agree_email_update'] = session('check_email_update');
                if (session()->has('entity_name') && session()->has('entity_type')) {
                    $input['account_type'] = 2;
                }
                $user = User::create($input);
                if ($user) {
                    $new_user_name = random_int(1000000000, 9999999999);
                    $updateusername =  User::where('id', $user->id)
                        ->update(['user_name' => time() . $user->id]);



                    Auth::login($user);
                    if (session()->has('entity_name') && session()->has('entity_type')) {
                        session()->forget(['entity_name', 'entity_type']);
                    }
                    session()->forget([
                        'parent_referral_id',
                        'is_phone_verified',
                        'phone',
                        'password',
                        'referral_id',
                        'country_phone_code',
                        'country_code',
                        'phone_otp',
                        'check_email_update'
                    ]);

                    // updating detail in attempt login history
                    $ipdetail =  $this->getIPdetail();
                    $location = $ipdetail['city'];

                    $agent = new Agent();
                    if ($agent->isPhone() == true) {
                        $deviceType = "phone";
                    }
                    if ($agent->isMobile() == true) {
                        $deviceType = "mobile";
                    }
                    if ($agent->isTablet() == true) {
                        $deviceType = "tablet";
                    }
                    if ($agent->isDesktop() == true) {
                        $deviceType = "desktop";
                    }


                    $custom_session_id = random_int(1000000000, 9999999999);
                    session(['custom_session_id' => $custom_session_id]);

                    $loginAttemptHistory = new loginAttemptHistory;
                    $loginAttemptHistory->user_id = Auth::user()->id;
                    $loginAttemptHistory->browser = $agent->browser();
                    $loginAttemptHistory->device = $agent->device();
                    $loginAttemptHistory->deviceType = $deviceType;
                    $loginAttemptHistory->ip = request()->ip();
                    $loginAttemptHistory->location = $location;
                    $loginAttemptHistory->sessionId = session('custom_session_id');
                    $loginAttemptHistory->status = 1;
                    $loginAttemptHistory->save();
                    // end updating detail in attempt login history
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Somthing went wrong"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function verify_email_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {
            if ($request->email_otp == session('email_otp')) {
                $input['parent_referral_id'] = session('parent_referral_id');
                $input['is_mail_verified'] = 1;
                $input['email'] = session('email_id');
                $input['password'] = session('user_pass');
                $input['referral_id'] = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                $input['is_agree_email_update'] = session('check_email_update');
                if (session()->has('entity_name') && session()->has('entity_type')) {
                    $input['account_type'] = 2;
                }
                $user = User::create($input);
                if ($user) {
                    $new_user_name = random_int(1000000000, 9999999999);
                    $updateusername =  User::where('id', $user->id)
                        ->update(['user_name' => $new_user_name]);



                    $subject = "[Wealthmark] Congratulations, Your Registration has been successful From " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                    $result = new MailerController;
                    $text_message = file_get_contents(asset('public/assets/img/emailTemplates/registrationSuccessful.html'));
                    $text_message = str_replace("@__email__@", session('email_id'), $text_message);

                    $mail_response = $result->composeEmail(session('email_id'), $subject, $text_message);

                    Auth::login($user);
                    if (session()->has('entity_name') && session()->has('entity_type')) {
                        session()->forget(['entity_name', 'entity_type']);
                    }
                    session()->forget([
                        'parent_referral_id',
                        'is_mail_verified',
                        'email',
                        'password',
                        'referral_id',
                        'email_otp',
                        'check_email_update'
                    ]);
                    // updating detail in attempt login history
                    $ipdetail =  $this->getIPdetail();
                    $location = $ipdetail['city'];

                    $agent = new Agent();
                    if ($agent->isPhone() == true) {
                        $deviceType = "phone";
                    }
                    if ($agent->isMobile() == true) {
                        $deviceType = "mobile";
                    }
                    if ($agent->isTablet() == true) {
                        $deviceType = "tablet";
                    }
                    if ($agent->isDesktop() == true) {
                        $deviceType = "desktop";
                    }


                    $custom_session_id = random_int(1000000000, 9999999999);
                    session(['custom_session_id' => $custom_session_id]);

                    $loginAttemptHistory = new loginAttemptHistory;
                    $loginAttemptHistory->user_id = Auth::user()->id;
                    $loginAttemptHistory->browser = $agent->browser();
                    $loginAttemptHistory->device = $agent->device();
                    $loginAttemptHistory->deviceType = $deviceType;
                    $loginAttemptHistory->ip = request()->ip();
                    $loginAttemptHistory->location = $location;
                    $loginAttemptHistory->sessionId = session('custom_session_id');
                    $loginAttemptHistory->status = 1;
                    $loginAttemptHistory->save();
                    // end updating detail in attempt login history

                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Somthing went wrong"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function verify_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_otp' => 'required|numeric|digits_between:6,6',
            'email_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            if ($request->phone_otp == session('phone_otp') && $request->email_otp == session('email_otp')) {
                if (Auth::attempt(['email' => session('email_id'), 'password' => session('user_password')])) {
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function verify_Lphone_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_otp' => 'required|numeric|digits_between:6,6',
            'email_otp' => 'required|numeric|digits_between:6,6',
            'auth_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            $AuthenticatorController = new GoogleAuthenticatorController;

            $tolerance = 0;
            $checkResult = $AuthenticatorController->verifyCode(session('secret'), $request->auth_otp, $tolerance);


            //    dd($_SESSION["secret"], $checkResult, $request->all());



            if (($request->phone_otp == session('phone_otp')) && (session('is_mail_verified') == 0) && (session('is_two_factor') == 0) ||
                ($request->phone_otp == session('phone_otp') && (session('is_mail_verified') == 1 && $request->email_otp == session('email_otp')) && ($checkResult === true && session('is_two_factor') == 1))  ||
                ($request->phone_otp == session('phone_otp') && (session('is_mail_verified') == 1 && $request->email_otp == session('email_otp')) && (session('is_two_factor') == 0)) ||
                ($request->phone_otp == session('phone_otp') && ($checkResult === true && session('is_two_factor') == 1) && (session('is_mail_verified') == 0))
            ) {
                if (Auth::attempt(['phone' => session('phone_number'), 'password' => session('user_password')])) {


                    // for loginattemptedhidtory conditions
                    //     print_r($_SESSION);
                    //   echo  $session_id = session_id();

                    $agent = new Agent();
                    if ($agent->isPhone() == true) {
                        $deviceType = "phone";
                    }
                    if ($agent->isMobile() == true) {
                        $deviceType = "mobile";
                    }
                    if ($agent->isTablet() == true) {
                        $deviceType = "tablet";
                    }
                    if ($agent->isDesktop() == true) {
                        $deviceType = "desktop";
                    }
                    $getLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->first();
                    $custom_session_id = random_int(1000000000, 9999999999);
                    session(['custom_session_id' => $custom_session_id]);
                    $ipdetail =  $this->getIPdetail();
                    $location = $ipdetail['city'];

                    if ($getLoginAttemptHistory) {
                        $updateLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('id', $getLoginAttemptHistory->id)->update(['status' => 0]);

                        if ($updateLoginAttemptHistory) {
                            $loginAttemptHistory = new loginAttemptHistory;
                            $loginAttemptHistory->user_id = Auth::user()->id;
                            $loginAttemptHistory->browser = $agent->browser();
                            $loginAttemptHistory->device = $agent->device();
                            $loginAttemptHistory->deviceType = $deviceType;
                            $loginAttemptHistory->ip = request()->ip();
                            $loginAttemptHistory->location = $location;
                            $loginAttemptHistory->sessionId = session('custom_session_id');
                            $loginAttemptHistory->status = 1;
                            $loginAttemptHistory->save();

                            // code for sending mail if user is loggedin on anywhere on other device
                            $email = Auth::user()->email;
                            $subject = "[Wealthmark] Login From New Device device Or IP " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                            $result = new MailerController;
                            // $text_message = "Yor are loggedin on".$agent->device()." and on".$agent->browser()."on browser"."Your IP is ".request()->ip();
                            // $text_message = "Yor are loggedin on "."mobile"." and on "."firefox"."on browser"."Your IP is ".request()->ip();
                            $text_message = file_get_contents(asset('public/assets/img/emailTemplates/login-from-new-device-location.html'));

                            $text_message =    str_replace("@__currentTime__@", Auth::user()->updated_at, $text_message);
                            $text_message =    str_replace("@__ip__@", request()->ip(), $text_message);
                            $text_message =    str_replace("@__device__@", $agent->device(), $text_message);
                            $text_message =    str_replace("@__browser__@", $agent->browser(), $text_message);
                            $text_message = str_replace("@__location__@", $location, $text_message);
                            $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                            $result->composeEmail($email, $subject, $text_message);
                            // end sending mail if user is loggedin on anywhere
                        }
                    } else {

                        $loginAttemptHistory = new loginAttemptHistory;
                        $loginAttemptHistory->user_id = Auth::user()->id;
                        $loginAttemptHistory->browser = $agent->browser();
                        $loginAttemptHistory->device = $agent->device();
                        $loginAttemptHistory->deviceType = $deviceType;
                        $loginAttemptHistory->ip = request()->ip();
                        $loginAttemptHistory->location = $location;
                        $loginAttemptHistory->sessionId = session('custom_session_id');
                        $loginAttemptHistory->status = 1;
                        $loginAttemptHistory->save();
                    }



                    // end for login attempt history

                    session()->forget([
                        'qaptcha_key',
                        'phone_number',
                        'phone_otp',
                        'user_password',
                        'is_two_factor',
                        'is_mail_verified',
                        'is_phone_verified',
                        'secret'
                    ]);

                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function verify_Lemail_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_otp' => 'required|numeric|digits_between:6,6',
            'phone_otp' => 'required|numeric|digits_between:6,6',
            'auth_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {


            $AuthenticatorController = new GoogleAuthenticatorController;

            $tolerance = 0;
            $checkResult = $AuthenticatorController->verifyCode(session('secret'), $request->auth_otp, $tolerance);


            //    dd($_SESSION["secret"], $checkResult, $request->all());


            if (($request->email_otp == session('email_otp'))  && (session('is_phone_verified') == 0) && (session('is_two_factor') == 0) ||
                ($request->email_otp == session('email_otp') && (session('is_phone_verified') == 1 && $request->phone_otp == session('phone_otp')) && ($checkResult === true && session('is_two_factor') == 1)) ||
                ($request->email_otp == session('email_otp') &&  (session('is_phone_verified') == 1 && $request->phone_otp == session('phone_otp')) && (session('is_two_factor') == 0)) ||
                ($request->email_otp == session('email_otp') && ($checkResult === true &&  session('is_two_factor') == 1) &&  (session('is_phone_verified') == 0))
            ) {

                if (Auth::attempt(['email' => session('email_id'), 'password' => session('user_password')])) {

                    // for loginattemptedhidtory conditions
                    //     print_r($_SESSION);
                    //   echo  $session_id = session_id();
                    $getLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->first();

                    $agent = new Agent();
                    if ($agent->isPhone() == true) {
                        $deviceType = "phone";
                    }
                    if ($agent->isMobile() == true) {
                        $deviceType = "mobile";
                    }
                    if ($agent->isTablet() == true) {
                        $deviceType = "tablet";
                    }
                    if ($agent->isDesktop() == true) {
                        $deviceType = "desktop";
                    }
                    $custom_session_id = random_int(1000000000, 9999999999);
                    session(['custom_session_id' => $custom_session_id]);
                    $ipdetail =  $this->getIPdetail();
                    $location = $ipdetail['city'];
                    if ($getLoginAttemptHistory) {

                        $updateLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('id', $getLoginAttemptHistory->id)->update(['status' => 0]);

                        if ($updateLoginAttemptHistory) {


                            $loginAttemptHistory = new loginAttemptHistory;
                            $loginAttemptHistory->user_id = Auth::user()->id;
                            $loginAttemptHistory->browser = $agent->browser();
                            $loginAttemptHistory->device = $agent->device();
                            $loginAttemptHistory->deviceType = $deviceType;
                            $loginAttemptHistory->ip = request()->ip();
                            $loginAttemptHistory->location = $location;
                            $loginAttemptHistory->sessionId = session('custom_session_id');
                            $loginAttemptHistory->status = 1;
                            $loginAttemptHistory->save();

                            // code for sending mail incase if any user loggedin on other device anywhere
                            $email = Auth::user()->email;
                            $subject = "[Wealthmark] Login From New Device device Or IP " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                            $result = new MailerController;
                            // $text_message = "Yor are loggedin on".$agent->device()." and on".$agent->browser()."on browser"."Your IP is ".request()->ip();
                            // $text_message = "Yor are loggedin on "."mobile"." and on "."firefox"."on browser"."Your IP is ".request()->ip();
                            $text_message = file_get_contents(asset('public/assets/img/emailTemplates/login-from-new-device-location.html'));

                            $text_message =    str_replace("@__currentTime__@", Auth::user()->updated_at, $text_message);
                            $text_message =    str_replace("@__ip__@", request()->ip(), $text_message);
                            $text_message =    str_replace("@__device__@", $agent->device(), $text_message);
                            $text_message =    str_replace("@__browser__@", $agent->browser(), $text_message);
                            $text_message = str_replace("@__location__@", $location, $text_message);
                            $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                            $result->composeEmail($email, $subject, $text_message);

                            // end code for sending mail incase if any user loggedin on other device anywhere

                        }
                    } else {

                        $loginAttemptHistory = new loginAttemptHistory;
                        $loginAttemptHistory->user_id = Auth::user()->id;
                        $loginAttemptHistory->browser = $agent->browser();
                        $loginAttemptHistory->device = $agent->device();
                        $loginAttemptHistory->deviceType = $deviceType;
                        $loginAttemptHistory->ip = request()->ip();
                        $loginAttemptHistory->location = $location;
                        $loginAttemptHistory->sessionId = session('custom_session_id');
                        $loginAttemptHistory->status = 1;
                        $loginAttemptHistory->save();
                    }

                    // end for login attempt history

                    session()->forget([
                        'qaptcha_key',
                        'email_id',
                        'email_otp',
                        'user_password',
                        'is_two_factor',
                        'is_mail_verified',
                        'is_phone_verified',
                        'secret'
                    ]);

                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    function upload_img(Request $request)
    {
        if (isset($_POST['submit'])) {
            //  uploading files
            $imageName = $_FILES['image']['name'];
            $tempPath = $_FILES["image"]["tmp_name"];
            $uploadTo = "storage/app/public/images/pancards";
            //echo $msg= $this->upload_image($uploadTo,$imageName,$tempPath);
            $basename = basename($imageName);
            $originalPath = $uploadTo . '/' . $basename;
            $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
            $msg = $this->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);
        }
    }

    public function upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath)
    {

        $allowImageExt = array('jpg', 'png', 'jpeg', 'gif');
        $imageQuality = 50;
        if (empty($imageName)) {
            $error = "Please Select files..";
            return $error;
        } else {
            if (in_array($imageExt, $allowImageExt)) {
                $compressedImage = $this->compress_image($tempPath, $originalPath, $imageQuality);
                if ($compressedImage) {
                    return "Image was compressed and uploaded to server";
                } else {
                    return "Some error !.. check your script";
                }
            } else {
                return "Image Type not allowed";
            }
        }
    }

    public function compress_image($tempPath, $originalPath, $imageQuality)
    {
        // Get image info
        $imgInfo = getimagesize($tempPath);
        $mime = $imgInfo['mime'];
        // Create a new image from file
        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($tempPath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($tempPath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($tempPath);
                break;
            default:
                $image = imagecreatefromjpeg($tempPath);
        }
        // Save image
        imagejpeg($image, $originalPath, $imageQuality);
        // Return compressed image
        return $originalPath;
    }

    public function save_personal_info(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'pan_card' => 'required|unique:users|size:10',
                'pan_card_img' => 'required|image|mimes:jpg,jpeg,png', // open this comment when we are saving image on server and do not need to create blob.
                //	'blobPanImg' => 'required', // comment this  when we are only saving image on server and do not need to create blob.
                'first_name' => 'required',
                //	'middle_name' => 'required',
                //	'last_name' => 'required',
                'dob' => 'required|date|before:13 years ago',
                //'city' => 'required',
                //	'residential_address' => 'required',
                //	'postal_code' => 'required',
            ],
            [
                'pan_card.required' => 'Please enter your PAN',
                'pan_card.unique' => 'The PAN number is already associated with another Wealthmark account',
                'dob.before' => 'You must be 18 years old',
                //	'pan_card_img.max' => 'Maximum image size is 100kb allowed',
                'blobPanImg.required' => 'Pancard image required please image in jpg, jpeg or png ',

            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            // dd($request->all(), $request->file('pan_card_img'));
            // die();
            //  $pancardofUser =   $request->file('edit_idDocUploadedFront').Auth::user()->id;


            // $user = User::find(Auth::user()->id);
            // $user->first_name = $request->post('first_name');
            // $user->middle_name = $request->post('middle_name');
            // $user->last_name = $request->post('last_name');
            // $user->dob = date("Y-m-d", strtotime($request->post('dob')));
            // $user->city = $request->post('city');
            // $user->pan_card = $request->post('pan_card');
            // $user->residential_address = $request->post('residential_address');
            // $user->postal_code = $request->post('postal_code');
            // $user->country = $request->post('country_code');
            // $user->country_flag = $request->post('country_ISO2code').'.png';
            // $imageName = $_FILES['pan_card_img']['name'];
            // 		$tempPath=$_FILES["pan_card_img"]["tmp_name"];
            // 		$uploadTo = "public/images/pancard/";
            // 		$prod=date("Yndhis");
            // 		$extension=end(explode(".", $imageName));
            // 		$imageName=$prod .".".$extension;

            // 		$basename = basename($imageName);
            // 		$originalPath = $uploadTo.$basename;
            // 		$imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
            // 		$msg= $this->upload_image($uploadTo,$imageName,$tempPath,$originalPath);

            // Compress and save the image 11042023
            // $path = $request->file('pan_card_img')->store('public/images/pancards');
            // $image->encode('jpg', 75)->save(storage_path('app/' . $path));
            // Save the image path to the database
            // $post = new Post();
            // $post->image = $path;
            // $post->save();

            $imageName = $_FILES['pan_card_img']['name'];
            $tempPath = $_FILES["pan_card_img"]["tmp_name"];
            $uploadTo = "storage/app/public/images/pancards";
            //echo $msg= $this->upload_image($uploadTo,$imageName,$tempPath);
            $prod = date("Yndhis");
            $extension = explode(".", $imageName);
            $imageName = $prod . "." . end($extension);
            $basename = basename($imageName);
            $originalPath = $uploadTo . '/' . $basename;
            $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
            $msg = $this->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);


            // end compress image method 2

            $updateUserInformation = User::where('id', Auth::user()->id)->update([
                //  'pan_card' => $request->pan_card,
                //         'pan_card_img' => $request->file('pan_card_img')->store('public/images/pancards'), // without blog its saving pan image on server and database
                //    'pan_card_img' => $request->blobPanImg, // this is saving blog url only in  database not on server
                'pan_card_img' => $originalPath
            ]);
            //$data = $user->save();
            // print_r($updateUserInformation);
            // compress image method 2
            // Load the image
            //    $image = Image::make($request->file('pan_card_img'));
            if ($updateUserInformation) {
                $userPanifo = DB::table('users')->where('id', Auth::user()->id)->first();
                $KycVerificationController = new KycVerificationController;
                //  print_r($KycVerificationController);
                // print_r(json_decode($returnedPanNumber_Status));
                //  die;
                //  $nameOnPan = strtoupper($request->first_name.' '.$request->middle_name.' '.$request->last_name);
                $nameOnPan = strtoupper($request->first_name);
                $panimgUrl = url('storage/app' . '/' . $userPanifo->pan_card_img); // in case when image save on server not in blob type. this line has to comment when we save pan image on server and not creating blob url
                // $panimgUrl = $userPanifo->pan_card_img; // in case blob type only and this line has to comment when we do not save pan image on server even creating blob url
                $panNum = $request->pan_card;
                $Id_type = 'individualPan';
                //   print_r($panNum);

                // dd($panimgUrl, $panNum, $Id_type);
                //   $returnedPanNumber_Status = $KycVerificationController->verify_pan_number($nameOnPan, $panimgUrl, $panNum, $Id_type );

                // compress image code by imagejpeg() method 1
                //  $CompressImgageTobestored = url('storage/app'.'/public/images/pancards/');
                //  $imgCompress  = new ImageCompression;
                //  $imgCompress->imgCompressAfterStored($panimgUrl, $CompressImgageTobestored);

                // compress image code ends



                $returnedPanNumber_Status = $KycVerificationController->verifyPanNumberWithoutImage($panNum);


                //  print_r($nameOnPan);

                //    print_r($returnedPanNumber_Status);

                //  print_r($returnedPanNumber_Status->result->name);
                // print_r($returnedPanNumber_Status->result->number);
                //print_r($returnedPanNumber_Status->result->isValid);
                //print_r($returnedPanNumber_Status->result->panStatus);
                // print_r($returnedPanNumber_Status->result->aadhaarSeedingStatus);

                // if($returnedPanNumber_Status->result->panStatus == 1 || $returnedPanNumber_Status->result->isValid == true ){  }
                //    die;
                //    if($returnedPanNumber_Status == 403){

                //if($returnedPanNumber_Status->error->statusCode == 400 || $returnedPanNumber_Status->error->statusCode == 404 || $returnedPanNumber_Status->result->isValid == false || $returnedPanNumber_Status->result->panStatusCode != "E" ){


                if ($returnedPanNumber_Status !== false) {

                    if ($returnedPanNumber_Status->result->isValid == false || $returnedPanNumber_Status->result->panStatusCode != "E") {

                        return response()->json(['ispanPanValid' => $returnedPanNumber_Status->result->isValid], 401);
                        // if($returnedPanNumber_Status->error->statusCode == 400){

                        //     return response()->json(['panDetailAfterVerification_error' => $returnedPanNumber_Status->error->statusCode, 'ispanPanValid' => $returnedPanNumber_Status->error->name.'_'.$returnedPanNumber_Status->error->message ] , 401 );
                        // }else{
                        //   return response()->json(['panDetailAfterVerification_error' => $returnedPanNumber_Status->error->statusCode, 'ispanPanValid' => $returnedPanNumber_Status->result->isValid, 'panStatusCode' => $returnedPanNumber_Status->result->panStatusCode,] , 401 );
                        // }



                    } else {

                        //  if( $returnedPanNumber_Status->response->result->verified == true || $returnedPanNumber_Status->response->result->verified == 1){

                        if ($returnedPanNumber_Status->result->isValid == true && $returnedPanNumber_Status->result->panStatusCode == "E") {

                            //  $returnedPan_detail = $KycVerificationController->verify_pan_card($panimgUrl, $panNum, $Id_type );


                            // changed and made data fromat into d-m-y and removed '- or /' from date string inorder to match both dates
                            // $dobFromPan = str_replace('/', '', $returnedPan_detail->response->result->dob) ;
                            // $dobEnteredByUser = str_replace('-', '', date("d-m-Y", strtotime($request->dob)));

                            // dd($returnedPan_detail->response->result->name, $returnedPan_detail->response->result->fatherName, $returnedPan_detail->response->result->dob, $returnedPan_detail->response->result->number, $request->dob, $dobFromPan, $dobEnteredByUser);



                            // if( ($dobFromPan == $dobEnteredByUser) && ($returnedPan_detail->response->result->name == $nameOnPan && ($returnedPan_detail->response->result->number == $request->pan_card))){

                            if (($returnedPanNumber_Status->result->name == $nameOnPan) && ($returnedPanNumber_Status->result->number == $request->pan_card)) {

                                //  print_r('came in');
                                $updateUserInformation = User::where('id', Auth::user()->id)->update([
                                    'first_name' => $request->first_name,
                                    'middle_name' => $request->middle_name,
                                    'last_name' => $request->last_name,
                                    'dob' => date('Y-m-d', strtotime($request->dob)),
                                    // 'dob' => $request->dob,
                                    //'city' => $request->city,
                                    'pan_card' => $request->pan_card,
                                    //'residential_address' => $request->residential_address,
                                    //'postal_code' => $request->postal_code,
                                    'country' => $request->country_name,
                                    'country_id' => $request->country_ID,
                                    'country_flag'  =>   $request->country_ISO2code . '.png',
                                ]);

                                //  print_r($updateUserInformation);

                                if ($updateUserInformation == true || $updateUserInformation == 1) {
                                    return response()->json(['success' => 200], $this->successStatus);
                                } else {
                                    User::where('id', Auth::user()->id)->update(['pan_card_img' => null]);
                                }
                            } else {

                                $updateUserInformation = User::where('id', Auth::user()->id)->update(['pan_card_img' => null]);
                                //   return response()->json(['panDetailAfterVerification_error' => "401", 'panEnteredByUser' => $request->pan_card ,'panNumInresponse' => $returnedPanNumber_Status->result->numbe,'nameEnteredByuser' => $nameOnPan ,'nameInResponse' => $returnedPanNumber_Status->result->name , 'dobEnteredByUser' => $dobEnteredByUser,  'panDetailAfterVerificationfail' => 'pan detail cannot be matched after verification'], $this-> successStatus);
                                //  inserting verification failed detail history
                                $panResult = [
                                    'ispanPanValid' => $returnedPanNumber_Status->result->isValid,
                                    'panEnteredByUser' => $request->pan_card,
                                    'panNumInresponse' => $returnedPanNumber_Status->result->number,
                                    'nameEnteredByuser' => $nameOnPan,
                                    'nameInResponse' => $returnedPanNumber_Status->result->name,
                                ];
                                $InseertFailedAadhaarHistory = new failed_verification_history;
                                $InseertFailedAadhaarHistory->user_id = Auth::user()->id;
                                $InseertFailedAadhaarHistory->pan_verification_responce = json_encode($panResult);

                                $InseertFailedAadhaarHistory->id_card_num = $request->pan_card;
                                $InseertFailedAadhaarHistory->id_card_type = 'pancard';
                                $InseertFailedAadhaarHistory->status = 0;
                                $InseertFailedAadhaarHistory->save();
                                // inserting verification failed detail history
                                return response()->json(['success' => "201", 'ispanPanValid' => $returnedPanNumber_Status->result->isValid, 'panEnteredByUser' => $request->pan_card, 'panNumInresponse' => $returnedPanNumber_Status->result->number, 'nameEnteredByuser' => $nameOnPan, 'nameInResponse' => $returnedPanNumber_Status->result->name, 'panDetailAfterVerificationfail' => 'Pancard Number OR Name on Pan-card  mismatched!'], 401);
                            }
                        } else {

                            $updateUserInformation = User::where('id', Auth::user()->id)->update(['pan_card_img' => null]);
                            //  inserting verification failed detail history
                            $panResult = [
                                'ispanPanValid' => $returnedPanNumber_Status->result->isValid,
                                'panEnteredByUser' => $request->pan_card,
                                'nameEnteredByuser' => $nameOnPan,

                            ];
                            $InseertFailedAadhaarHistory = new failed_verification_history;
                            $InseertFailedAadhaarHistory->user_id = Auth::user()->id;
                            $InseertFailedAadhaarHistory->pan_verification_responce = json_encode($panResult);

                            $InseertFailedAadhaarHistory->id_card_num = $request->pan_card;
                            $InseertFailedAadhaarHistory->id_card_type = 'pancard';
                            $InseertFailedAadhaarHistory->status = 0;
                            $InseertFailedAadhaarHistory->save();
                            return response()->json(['ispanPanValid' => $returnedPanNumber_Status->result->isValid], 401);
                        }
                    }
                } else {

                    return response()->json(['success' => "201", 'panDetailAfterVerificationfail' => 'Pancard not found OR Invalid'], 401);
                }
            }
        }
    }


    public function save_id_card_info_old1feb23_3_55pm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'front_image' => 'required',
            'back_image' => 'required',
            'id_card_type' => 'required',
            'id_card_num' => 'required|unique:users|digits_between:12,12',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            //session_start();


            /* here to check uploaded image data with inserted data */
            // print_r($request->newFormed_front_image) ;
            // print_r($request->newFormed_back_image) ;

            // created object of KycVerificationController
            $KycVerificationController = new KycVerificationController;

            $id_type = 'aadhaar';
            $frontSide_img = $request->newFormed_front_image;
            $backSide_img = $request->newFormed_back_image;
            $aadhaarNum = $request->id_card_num;

            // dd($frontSide_img, $backSide_img);


            // below two lines for extract data printed on aadhaar front and back side.
            $frontSide_AadhaarData = $KycVerificationController->read_identity_document($frontSide_img, $id_type);
            $backSide_AadhaarData = $KycVerificationController->read_identity_document($backSide_img, $id_type);

            // below single lines is for verify aadhaar by aadhaar number.
            $matchAadhaar = $KycVerificationController->verify_aadhar_number($frontSide_img, $aadhaarNum, $id_type);


            //   dd($matchAadhaar, $matchAadhaar->response->result->verified, $matchAadhaar->response->result->gender);

            // $matchAadhaar->->response->result->summary->name;
            $ifAadhaarNum_verified = $matchAadhaar->response->result->verified;
            $Aadhaargender_rerturned = ucwords(strtolower($matchAadhaar->response->result->gender));


            // extracted detail from aadhar front side image....................................................



            // print_r($frontSide_AadhaarData);


            $name = ucwords(strtolower($frontSide_AadhaarData->response->result->summary->name));
            $dob = $frontSide_AadhaarData->response->result->summary->dob;
            $dob = str_replace('/', '', $dob);
            $gender = ucwords(strtolower($frontSide_AadhaarData->response->result->summary->gender));
            $dateOfbirth = $frontSide_AadhaarData->response->result->summary->dateOfBirth;
            $dateOfbirth = str_replace('/', '', $dateOfbirth);

            //   print_r($name.'</br>');
            //  print_r($dob.'</br>');
            //  print_r($gender.'</br>');
            //   print_r($dateOfbirth.'</br>');

            // extracted detail from aadhar back side image....................................................

            // print_r('data from back image'.'</br>');

            //  print_r($backSide_AadhaarData);


            $pincode  =   $backSide_AadhaarData->response->result->pincode;
            $address  =   ucwords(strtolower($backSide_AadhaarData->response->result->address));


            $city  =   ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->city[0]));
            $district =   ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->district[0]));
            $state  =    ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->state[0][0]));


            $pincode_fromOtherField     =   $backSide_AadhaarData->response->result->summary->splitAddress->pincode;

            $country_iso2Code  =  ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->country[0]));
            $country_short_name = ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->country[1]));
            $country_full_name  = ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->country[2]));
            $addressLinefromBackImage  =  ucwords(strtolower($backSide_AadhaarData->response->result->summary->splitAddress->addressLine));

            //   print_r($pincode.'</br>');
            //   print_r($address.'</br>');
            //    print_r($city.'</br>');
            //  print_r($district.'</br>');

            //   print_r($state.'</br>');
            //  print_r($pincode_fromOtherField.'</br>');
            //  print_r($country_iso2Code.'</br>');
            //  print_r($country_short_name.'</br>');
            //  print_r($country_full_name.'</br>');
            //    print_r($addressLinefromBackImage.'</br>');


            // changed and date format ....................
            $formatedDObDate = str_replace('-', '', date("d-m-Y", strtotime(Auth::user()->dob)));
            //  print_r($formatedDObDate);

            $userEnteredName = ucwords(Auth::user()->first_name . ' ' . Auth::user()->middle_name . ' ' . Auth::user()->last_name);
            $userEnteredCountry = ucwords(Auth::user()->country);
            $userEnteredCity = ucwords(Auth::user()->city);
            $userEnteredPostalCode = Auth::user()->postal_code;

            //   if($name == $userEnteredName){
            //       print_r('name matched');

            //   }

            if ($ifAadhaarNum_verified == 1 || $ifAadhaarNum_verified == true) {

                /* end here check uploaded image data with inserted data */
                if (($userEnteredName == $name) && ($formatedDObDate == $dob || $formatedDObDate == $dateOfbirth)) {

                    //  if( (Auth::user()->residential_address == $addressLinefromBackImage || Auth::user()->permannent_address == $addressLinefromBackImage) && (Auth::user()->residential_address == $address || Auth::user()->permannent_address == $address)){

                    if ((($userEnteredCountry == $country_full_name) && ($userEnteredCity = $city || $userEnteredCity = $district)) && (($userEnteredPostalCode == $pincode) || ($userEnteredPostalCode == $pincode_fromOtherField))) {

                        $user = User::find(Auth::user()->id);
                        $user->id_card_front_image = $_POST['front_image'];
                        $user->id_card_back_image = $_POST['back_image'];
                        $user->id_card_type = $_POST['id_card_type'];
                        $user->id_card_num = $_POST['id_card_num'];
                        $user->gender = $Aadhaargender_rerturned;
                        $user->permannent_address = $address;
                        $data = $user->save();

                        if ($data) {

                            $files = array($request->newFormed_front_image, $request->newFormed_back_image);
                            File::delete($files);
                            return response()->json(['success' => "200"], $this->successStatus);
                        } else {
                            return response()->json(['error' => "Unauthrized"], 401);
                        }
                    } else {
                        return response()->json(['error' => "Unauthrized", 'countryByUser' => $userEnteredCountry, 'countryInresponse' => $country_full_name, 'cityByUser' => $userEnteredCity, 'cityInResponse' => $city . '/' . $district, 'pincodeByuser' => $userEnteredPostalCode, 'pincodeInresponse' => $pincode, 'backImageCountryCityError' => 401, 'backImageCountryCityData' => 'Back image is not matching with pincode OR city OR country filled in previous personal info form. Please check and try again! '], 401);
                    }


                    // }else{
                    //           return response()->json(['error'=>"Unauthrized", 'backImagePinNAddressError' => 401 ,'backImagePinNAddressData' => 'Back image is not matching with address filled in previous personal info form. Please check and try again! '], 401);
                    //  }


                } else {

                    return response()->json(['error' => "Unauthrized", 'dobByUser' => $formatedDObDate, 'dobInResponse' => $dob . '/' . $dateOfbirth, 'nameInresponse' => $name, 'nameEnteredbyuser' => $userEnteredName, 'frontImageDataError' => 401, 'frontImageData' => 'Front image is not matching  with name OR dob filled previous personal info form. Please check and try again! '], 401);
                }
            } else {

                return response()->json(['error' => "Unauthrized", 'idNumMatchError' => 401, 'idNumMatchData' => 'aadhaar number does not match', 'aadhaarStatus' => $ifAadhaarNum_verified, 'aadhaarGenderreturned' => $Aadhaargender_rerturned], 401);
            }
        }
    }


    public function save_selfie_info_oldfeb23_3_55pm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'selfie_image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            //   print_r($request->front_image);
            // print_r($request->selfie_formed_image);

            $KycVerificationController = new KycVerificationController;
            $matched_images_response = $KycVerificationController->verifyFaceWithId($request->front_image, $request->selfie_formed_image);

            // print_r($matched_images_response);
            //  print_r($matched_images_response->result->matchPercentage);
            //   print_r($matched_images_response->result->verified);


            if ($matched_images_response->result->verified == 1 || $matched_images_response->result->verified == true) {

                //session_start();


                $user = User::find(Auth::user()->id);
                $user->selfie_image = $_POST['selfie_image'];
                $user->government_id_verified = 1;
                $user->status = 1;
                $data = $user->save();


                if ($data) {

                    return response()->json(['success' => "200", 'faceMatchPercent' => $matched_images_response->result->matchPercentage, 'faceMatchComment' => 'Face matched with ID'], $this->successStatus);
                } else {
                    return response()->json(['error' => "401", 'faceMatchPercent' => $matched_images_response->result->matchPercentage, 'faceMatchComment' => 'Face cannot be matchedOR low percentage'], 401);
                }
            } else {

                $UpdatedKycdetailTonull = User::where('id', '=', Auth::user()->id)->update(['gender' => null, 'permannent_address' => null, 'id_card_num' => null, 'id_card_type' => null, 'id_card_front_image' => null, 'id_card_back_image' => null, 'id_card_type' => null]);

                return response()->json(['error' => "401", 'faceMatchPercent' => $matched_images_response->result->matchPercentage, 'faceMatchComment' => 'Face not matched with ID'], 401);
            }

            // if($matched_images_response->error->status == 403){
            //     return response()->json(['error' => $matched_images_response->error->message ], 401);
            // }
        }
    }


    public function save_id_card_info(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'front_image' => 'required',
            'back_image' => 'required',
            'id_card_type' => 'required',
            'city' => 'required',
            'residential_address' => 'required',
            'postal_code' => 'required',
            'id_card_num' => 'required|unique:users|digits_between:12,12',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            //session_start();
            $user = User::find(Auth::user()->id);
            $user->id_card_front_image = $_POST['front_image'];
            $user->id_card_back_image = $_POST['back_image'];
            $user->id_card_type = $_POST['id_card_type'];
            $user->id_card_num = $_POST['id_card_num'];
            $user->residential_address = $_POST['residential_address'];
            $user->postal_code = $_POST['postal_code'];
            $user->city = $_POST['city'];
            $data = $user->save();
            if ($data) {
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Unauthrized"], 401);
            }
        }
    }


    public function save_selfie_info(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'selfie_image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            //session_start();
            $user = User::find(Auth::user()->id);
            $user->selfie_image = $_POST['selfie_image'];
            $user->government_id_verified = 1;
            $user->status = 1;
            $data = $user->save();
            if ($data) {
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Unauthrized"], 401);
            }
        }
    }

    public function need_kyc(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->government_id_verified == 0) {


                if (Auth::user()->email == 1) {
                    $data = $this->hideEmailAddress(Auth::user()->email);
                } else {
                    $data = Auth::user()->phone;
                }
                $country = Country::all();
                return view('auth.need_kyc', compact('data', 'country'));
            } else {
                return redirect(app()->getLocale() . "/user/dashboard");
            }
        }
        return redirect(app()->getLocale() . "/login");
    }




    public function enable_sms_authentication(Request $request)
    {

        if (Auth::check()) {
            if (Auth::user()->account_type == 1) {
                if (Auth::user()->government_id_verified == 0) {
                    return redirect(app()->getLocale() . "/need-kyc");
                } else {
                    $verificationStatus = Auth::user()->government_id_verified;
                    $data = $this->hideEmailAddress(Auth::user()->email);
                    return view('auth.enable_sms_authentication', compact('data', 'verificationStatus'));
                }
            }


            if (Auth::user()->account_type == 2) {
                $verificationStatus = $this->is_entity_verified(Auth::user()->id);

                $data = $this->hideEmailAddress(Auth::user()->email);
                return view('auth.enable_sms_authentication', compact('data', 'verificationStatus'));
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function enable_email_authentication(Request $request)
    {

        if (Auth::check()) {
            if (Auth::user()->account_type == 1) {
                if (Auth::user()->government_id_verified == 0) {
                    return redirect(app()->getLocale() . "/need-kyc");
                } else {
                    return view('auth.enable_email_authentication');
                }
            }


            if (Auth::user()->account_type == 2) {
                $entity_verificationStatus = $this->is_entity_verified(Auth::user()->id);
                if ($entity_verificationStatus == 0) {
                    return redirect(app()->getLocale() . "/entity-verification");
                } else {
                    return view('auth.enable_email_authentication');
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function enable_google_authenticator(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->government_id_verified == 0 && Auth::user()->account_type == 1) {
                return redirect(app()->getLocale() . "/need-kyc");
            } else {
                if (Auth::user()->is_two_factor == 0) {
                    $AuthenticatorController = new GoogleAuthenticatorController;
                    $secret = $AuthenticatorController->createSecret();
                    // $secret = $authenticator->createSecret();
                    // $google2fa = app('pragmarx.google2fa');
                    $reg_data = $request->all();
                    $reg_data["google2fa_secret"] = $secret;
                    $request->session()->flash('registration_data', $reg_data);
                    $reg_data['email'] = Auth::user()->email;
                    //$qrCodeUrl = $authenticator->getQRCodeGoogleUrl($title, $secret,$website);
                    $QR_Image = $AuthenticatorController->getQRCodeGoogleUrl(
                        $reg_data['email'],
                        $reg_data['google2fa_secret'],
                        config('app.name')
                    );
                    $phone_data = substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4);
                    return view('auth.enable-google-authenticator', ['QR_Image' => $QR_Image, 'secret' => $reg_data['google2fa_secret'], 'phone_data' => $phone_data, 'email_data' => $this->hideEmailAddress($this->hideEmailAddress(Auth::user()->email))]);
                } else {
                    return redirect(app()->getLocale() . "/user/security");
                }
            }
        }
        //return redirect(app()->getLocale()."/login");
    }

    public function verify_google_authenticator(Request $request)
    {
        if (Auth::check()) {
            $eotp = Auth::user()->email_otp;
            $potp = Auth::user()->phone_otp;
            $ifemail_verified = Auth::user()->is_mail_verified;
            $ifphone_verified = Auth::user()->is_phone_verified;

            if (
                (($ifemail_verified == 1) && ($ifphone_verified == 1) && $request->post('e_otp') == $eotp and $request->post('p_otp') === $potp and $request->post('o_otp') != "") ||
                (($ifemail_verified == 0) && ($ifphone_verified == 1) and $request->post('p_otp') === $potp and $request->post('o_otp') != "") ||
                (($ifemail_verified == 1) && ($ifphone_verified == 0) and $request->post('e_otp') === $eotp and $request->post('o_otp') != "")

            ) {

                $AuthenticatorController = new GoogleAuthenticatorController;

                $secret = Auth::user()->google2fa_secret;
                $tolerance = 0;
                $checkResult = $AuthenticatorController->verifyCode($secret, $request->post('o_otp'), $tolerance);
                $security_activities = new SecurityActivity;

                if ($checkResult) {

                    $user = Auth::user();
                    $input['is_two_factor'] = '1';
                    $data = $user->update($input);
                    if ($data) {


                        $security_activities->source = 'web';
                        $security_activities->activity = 1;
                        $security_activities->status = 1;
                        $security_activities->type = 0;
                        $security_activities->data = getenv("REMOTE_ADDR");
                        $security_activities->user_id = Auth::user()->id;
                        $security_activities->save();

                        $subject = "[Wealthmark] Authenticator has been enabled successfully " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                        $result = new MailerController;
                        $text_message = file_get_contents(asset('public/assets/img/emailTemplates/googleAuthenticationEnable.html'));

                        // $text_message =	str_replace("@__email__@", Auth::user()->email , $text_message);
                        // $text_message =	str_replace("@__otp__@", $otp, $text_message);
                        // $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                        $mail_response = $result->composeEmail(Auth::user()->email, $subject, $text_message);
                        if ($mail_response == "success") {
                            return response()->json(['success' => "200"], $this->successStatus);
                        }

                        if ($mail_response == "error") {
                            return response()->json(['error' => 'Unauthorised'], 401);
                        }
                    } else {

                        return response()->json(['error' => "Unauthrized"], 401);
                    }
                } else {

                    $security_activities->source = 'web';
                    $security_activities->activity = 1;
                    $security_activities->status = 0;
                    $security_activities->type = 0;
                    $security_activities->data = getenv("REMOTE_ADDR");
                    $security_activities->user_id = Auth::user()->id;
                    $security_activities->save();
                    return response()->json(['error' => "Please enter valid authenticator code"], 401);
                }
            } else {
                return response()->json(['error' => "Please enter valid email or phone"], 401);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function remove_action_google_authenticator(Request $request)
    {
        if (Auth::check()) {
            $eotp = Auth::user()->email_otp;
            $potp = Auth::user()->phone_otp;
            $ifemail_verified = Auth::user()->is_mail_verified;
            $ifphone_verified = Auth::user()->is_phone_verified;


            if (
                // $request->post('e_otp')==$eotp and $request->post('p_otp')===$potp and $request->post('o_otp')!=""

                (($ifemail_verified == 1) && ($ifphone_verified == 1) && $request->post('e_otp') == $eotp and $request->post('p_otp') === $potp and $request->post('o_otp') != "") ||
                (($ifemail_verified == 0) && ($ifphone_verified == 1) and $request->post('p_otp') === $potp and $request->post('o_otp') != "") ||
                (($ifemail_verified == 1) && ($ifphone_verified == 0) and $request->post('e_otp') === $eotp and $request->post('o_otp') != "")


            ) {
                $AuthenticatorController = new GoogleAuthenticatorController;
                $secret = Auth::user()->google2fa_secret;
                $tolerance = 0;
                $checkResult = $AuthenticatorController->verifyCode($secret, $request->post('o_otp'), $tolerance);
                $security_activities = new SecurityActivity;
                if ($checkResult) {
                    $user = Auth::user();
                    $input['is_two_factor'] = '0';
                    $input['google2fa_secret'] = 'NULL';
                    $data = $user->update($input);
                    if ($data) {
                        $security_activities->source = 'web';
                        $security_activities->activity = 0;
                        $security_activities->status = 1;
                        $security_activities->type = 0;
                        $security_activities->data = getenv("REMOTE_ADDR");
                        $security_activities->user_id = Auth::user()->id;
                        $security_activities->save();

                        $subject = "[Wealthmark] Authenticator has been removed " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                        $result = new MailerController;
                        $text_message = file_get_contents(asset('public/assets/img/emailTemplates/googleAuthenticationremove.html'));
                        // $text_message =	str_replace("@__email__@", Auth::user()->email , $text_message);
                        // $text_message =	str_replace("@__otp__@", $otp, $text_message);
                        // $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                        $mail_response = $result->composeEmail(Auth::user()->email, $subject, $text_message);
                        if ($mail_response == "success") {

                            return response()->json(['success' => "200"], $this->successStatus);
                        }
                        if ($mail_response == "error") {
                            return response()->json(['error' => 'Unauthorised'], 401);
                        }
                    } else {
                        return response()->json(['error' => "Unauthrized"], 401);
                    }
                } else {
                    $security_activities->source = 'web';
                    $security_activities->activity = 0;
                    $security_activities->status = 0;
                    $security_activities->type = 0;
                    $security_activities->data = getenv("REMOTE_ADDR");
                    $security_activities->user_id = Auth::user()->id;
                    $security_activities->save();


                    return response()->json(['error' => "Please enter valid authenticator code"], 401);
                }
            } else {
                return response()->json(['error' => "Please enter valid email or phone otp"], 401);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function associate_secret_key(Request $request)
    {
        if (Auth::check()) {
            if ($request->post('code') != "") {
                $user = Auth::user();
                $input['google2fa_secret'] = $request->post('code');
                $data = $user->update($input);
                if ($data) {
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthrized"], 401);
                }
            } else {
                echo "Something went wrong";
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function success_google_authenticator(Request $request)
    {
        if (Auth::check()) {
            if ($request->post('auth_status') === "yes") {
                $user = Auth::user();
                $input['is_two_factor'] = '1';
                $data = $user->update($input);
                if ($data) {
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthrized"], 401);
                }
            }
            if ($request->post('auth_status') === "no") {
                $user = Auth::user();
                $input['is_two_factor'] = '0';
                $input['google2fa_secret'] = 'NULL';
                $data = $user->update($input);
                if ($data) {
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthrized"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function remove_google_authenticator(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->is_two_factor == 1 and (Auth::user()->google2fa_secret === NULL || Auth::user()->google2fa_secret != "")) {
                $phone_data = substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4);
                $email_data = $this->hideEmailAddress(Auth::user()->email);
                return view('auth.remove-google-authenticator', compact('phone_data', 'email_data'));
            } else {
                return redirect(app()->getLocale() . "/user/security");
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function change_google_authenticator(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->is_two_factor == 1 and Auth::user()->google2fa_secret != "") {
                $AuthenticatorController = new GoogleAuthenticatorController;
                $secret = $AuthenticatorController->createSecret();
                $reg_data = $request->all();
                $reg_data["google2fa_secret"] = $secret;
                $request->session()->flash('registration_data', $reg_data);
                $reg_data['email'] = Auth::user()->email;
                $QR_Image = $AuthenticatorController->getQRCodeGoogleUrl(
                    $reg_data['email'],
                    $reg_data['google2fa_secret'],
                    config('app.name')
                );
                $phone_data = substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4);
                return view('auth.change-google-authenticator', ['QR_Image' => $QR_Image, 'secret' => $reg_data['google2fa_secret'], 'phone_data' => $phone_data, 'email_data' => $this->hideEmailAddress($this->hideEmailAddress(Auth::user()->email))]);
            } else {
                return redirect(app()->getLocale() . "/user/security");
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function  home(Request $request)
    {
        echo "Welcome";
    }

    public function index()
    {
        // Fetch individual crypto assets
        $bitcoin   = Cryptocap::getSingleAsset('bitcoin');
        $ethereum  = Cryptocap::getSingleAsset('ethereum');
        $tether    = Cryptocap::getSingleAsset('tether');
        $dogecoin  = Cryptocap::getSingleAsset('dogecoin');
        $litecoin  = Cryptocap::getSingleAsset('litecoin');
        $polkadot  = Cryptocap::getSingleAsset('polkadot');
        $xrp       = Cryptocap::getSingleAsset('xrp');
        $cardano   = Cryptocap::getSingleAsset('cardano');
        $solana    = Cryptocap::getSingleAsset('solana');

        // Prepare data array
        $data = [
            'bitcoin'  => $bitcoin,
            'ethereum' => $ethereum,
            'tether'   => $tether,
            'dogecoin' => $dogecoin,
            'litecoin' => $litecoin,
            'polkadot' => $polkadot,
            'xrp'      => $xrp,
            'cardano'  => $cardano,
            'solana'   => $solana,
        ];

        // Pass data to the view
        return view('web.index', $data);
    }


    public function get_our_coin()
    {
        $bitcoin = Cryptocap::getSingleAsset('bitcoin');
        $ethereum = Cryptocap::getSingleAsset('ethereum');

        return view('web.buy_sell_crypto', compact('bitcoin', 'ethereum'));
    }

    public function buy_bmk_coin()
    {
        return view('user.buy-bmk-coin');
    }

    public function get_coin_record()
    {
        $bitcoin = Cryptocap::getSingleAsset('bitcoin');
        $ethereum = Cryptocap::getSingleAsset('ethereum');
        $tether = Cryptocap::getSingleAsset('tether');
        $dogecoin = Cryptocap::getSingleAsset('dogecoin');
        $litecoin = Cryptocap::getSingleAsset('litecoin');
        $polkadot = Cryptocap::getSingleAsset('polkadot');
        $xrp = Cryptocap::getSingleAsset('xrp');
        $cardano = Cryptocap::getSingleAsset('cardano');
        $solana = Cryptocap::getSingleAsset('solana');
?>
        <table class="table table-hover table-borderless">
            <tbody>
                <tr class="head" id="t_title1">
                    <th></th>
                    <th class="g-text-left">
                        <span class="arrow" type="trans"> Pairs </span>
                    </th>
                    <th class="g-text-left">
                        <span class="arrow" type="new"> Last Price </span>
                    </th>
                    <th class="g-text-left">
                        <span class="arrow" type="weex"> Weekly Change </span>
                    </th>
                    <th class="g-text-left">
                        <span class="arrow" type="high"> Weekly Highest </span>
                    </th>
                    <th class="g-text-left">
                        <span class="arrow" type="low"> Weekly Lowest </span>
                    </th>
                    <th class="g-text-left">
                        <span class="arrow" type="deal"> Weekly Volume </span>
                    </th>
                    <th>Action</th>
                </tr>
                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/bitcoin.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $bitcoin->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($bitcoin->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $ <?php echo number_format($bitcoin->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 126.05% <i class="bi-arrow-up"></i>
                    </td>
                    <td class="g-text-left">21.399</td>
                    <td class="g-text-left">5.741</td>
                    <td class="g-text-left">6.38M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="santos/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/ethereum.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $ethereum->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($ethereum->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $ <?php echo number_format($ethereum->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 56.83% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">8.3626</td>
                    <td class="g-text-left">3.6706</td>
                    <td class="g-text-left">5.92M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="porto/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/tether.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $tether->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($tether->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $ <?php echo number_format($tether->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 56.83% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">8.3626</td>
                    <td class="g-text-left">3.6706</td>
                    <td class="g-text-left">5.92M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="porto/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/dogecoin.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $dogecoin->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($dogecoin->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $<?php echo number_format($dogecoin->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 56.83% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">8.3626</td>
                    <td class="g-text-left">3.6706</td>
                    <td class="g-text-left">5.92M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="porto/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/litecoin.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $litecoin->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($litecoin->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $<?php echo number_format($litecoin->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 130.99% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">6.8307</td>
                    <td class="g-text-left">2.5000</td>
                    <td class="g-text-left">4.68M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="lazio/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/polkadot.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $polkadot->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($polkadot->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $<?php echo number_format($polkadot->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 130.99% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">6.8307</td>
                    <td class="g-text-left">2.5000</td>
                    <td class="g-text-left">4.68M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="lazio/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/xrp.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $xrp->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($xrp->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $<?php echo number_format($xrp->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 130.99% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">6.8307</td>
                    <td class="g-text-left">2.5000</td>
                    <td class="g-text-left">4.68M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="lazio/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/cardano.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $cardano->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($cardano->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $<?php echo number_format($cardano->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 130.99% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">6.8307</td>
                    <td class="g-text-left">2.5000</td>
                    <td class="g-text-left">4.68M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="lazio/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>

                <tr class="body">
                    <td class="g-text-right star-icon">
                        <i class="bi-star-fill"></i>
                    </td>
                    <td class="g-text-left asset-code g-pointer">
                        <img src="<?php echo url('public/assets/img/coin-logo/solana.svg'); ?>" class="coin-icon-img" alt=""> <?php echo $solana->data->name; ?>/USDT
                    </td>
                    <td class="g-text-left">
                        <span class="g-light-green"><?php echo number_format($solana->data->priceUsd, 2); ?></span>
                        <span class="g-grey g-font12"> / $<?php echo number_format($solana->data->priceUsd, 2); ?> </span>
                    </td>
                    <td class="g-text-left g-light-green"> 130.99% <i class="bi-arrow-up"></i></td>
                    <td class="g-text-left">6.8307</td>
                    <td class="g-text-left">2.5000</td>
                    <td class="g-text-left">4.68M</td>
                    <td class="g-text-center g-pointer left-right-icon" symbolold="lazio/usdt">
                        <a href="javascript:void(0);" target="_blank">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
<?php
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/dashboard");
        }
        return view('auth.login');
    }

    public function staking_coin()
    {
        if (Auth::check()) {
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $StakingController = new StakingController;
            $url = $base_url . '/find_gift_card_coin';
            $rec_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '3');
            $regular_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '2');
            $charity_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '4');
            $regular_coin = $BmkApiController->verify_api($url, $rec_params);
            //$recurring_coin=$BmkApiController->verify_api($url,$regular_params);
            $recurring_coin = $StakingController->get_bmk_recurring_coin_for_staking();
            $charity_coin = $BmkApiController->verify_api($url, $charity_params);
            $p2p_coin = "";

            $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
            $bmk_params = array('currency_name' => 'USD');
            $bmk_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);

            $bmk_inr_params = array('currency_name' => 'INR');
            $bmk_inr_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_inr_params);

            $userStakingData = stakings::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(10);

            return view('user.coin_staking', compact('regular_coin', 'recurring_coin', 'charity_coin', 'p2p_coin', 'bmk_price', 'bmk_inr_price', 'userStakingData'));
        }
        return view('auth.login');
    }
    public function coin_staking_term_conditions()
    {

        if (Auth::check()) {

            return view('user.coin_staking_term_conditions');
        }
        return view('auth.login');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/dashboard");
        }
        return view('auth.register');
    }

    public function register_person()
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "user/dashboard");
        }
        return view('auth.register_person');
    }

    public function register_business()
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/dashboard");
        }
        $entity_types = Entity_detail::all();
        return view('auth.register_business', compact('entity_types'));
    }

    public function check_login()
    {


        if (!session()->has('custom_session_id')) {
            $reAllotSession = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->first();
            if ($reAllotSession) {
                session(['custom_session_id' => $reAllotSession->sessionId]);
            }
        }


        // session_start(); handled by Laravel
        if (!session()->has('custom_session_id') && Auth::check()) {
            $reAllotSession = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->first();
            if ($reAllotSession) {
                session(['custom_session_id' => $reAllotSession->sessionId]);
            }
        }


        $query =  loginAttemptHistory::where('user_id', Auth::user()->id)->where('sessionId', '=', session('custom_session_id'))->where('status', '=', 1)->first();


        if ($query) {

            $data['output'] = 'login';
        } else {
            $data['output'] = 'logout';
        }
        echo json_encode($data);
    }

    public function logout()
    {

        if (Auth::check()) {
            $sessionId = session("custom_session_id");
            $loginAttemptHistory = loginAttemptHistory::where('sessionId', $sessionId)->where('status', 1)->first();

            if ($loginAttemptHistory) {

                $UpdatedKycdetailTonull = loginAttemptHistory::where('sessionId', $sessionId)->update(['status' => 0]);
            }
            session()->forget('custom_session_id');
            // Session::forget('custom_session_id');

            Auth::logout();

            return redirect('/');


            // $getLoginAttemptHistory = loginAttemptHistory::where('sessionId', $_SESSION["custom_session_id"])->where('status', '=', 1 )->first();
            // $s_id = $_SESSION["custom_session_id"];
            // if($getLoginAttemptHistory){
            // $UpdatedKycdetailTonull = loginAttemptHistory::where('sessionId', $s_id)->where('status', 1)->update(['status' => 0]);
            // }
            // unset($_SESSION['custom_session_id']);
            // Auth::logout();
            // (new Authenticator(request()))->logout();
            // return redirect(url('/'));
        } else {
            return view('auth.login');
        }
    }

    public function register_action()
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/dashboard");
        }
        return view('auth.register_action');
    }

    public function dashboard()
    {
        //  print_r($this->getEscrowHoldCoin(Auth::user()->id));

        if (Auth::check()) {
            if (Auth::user()->account_type == 2) {
                //  return redirect('entity-dashboard');
                $UserInEntity = Entities::where('user_id', Auth::user()->id)->first();
                //dd($UserInEntity);

                if (empty($UserInEntity)) {
                    return redirect(app()->getLocale() . '/entity-verification');
                }

                $entity = entities::where('user_id', Auth::user()->id)->first();
                $entitydocs = businessDocs::where('user_id', Auth::user()->id)->first();
                $related_parties = relatedParties::where('user_id', Auth::user()->id)->first();

                $entity_verificationStatus = $this->is_entity_verified(Auth::user()->id);

                $log_data = DB::table('logs')->where('user_id', Auth::user()->id)->orderBy('log_datetime', 'DESC')->first();
                $log_data_lastfewrows = DB::table('logs')->where('user_id', Auth::user()->id)->orderByDesc('log_datetime')->limit(3)->get();
                $security_activity_data = DB::table('security_activities')->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->limit(3)->get();
                $announce_data = DB::table('announcements')->orderBy('created_at', 'DESC')->limit(4)->get();

                if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
                    $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
                } else {
                    $totalAvailableCoinsInMarketWallet = 0;
                }

                //$totalAvailableBMKCoinsInUSD = abs($this->getTotalAvailableCoinsInselectedCurrency());

                // bmk value through Api start

                $base_url = env('BMK_API_BASE_URL');
                $BmkApiController = new BmkApiController;
                $url = $base_url . '/get_currency';
                $params = array();
                $allcurrency = collect($BmkApiController->verify_api($url, $params));
                $currencies_name = $allcurrency->where('name', 'USD')->first();
                $crypto_value_based_on_currency_type = $currencies_name->per_coin;

                $available_ballence_bmk_usd = abs($totalAvailableCoinsInMarketWallet * $crypto_value_based_on_currency_type);



                // bmk value through Api end

                //Pending order

                $getpendingorders = Order::where(function ($query) {
                    $query->where('buyer_id', Auth::user()->id)
                        ->orWhere('seller_id', Auth::user()->id);
                })
                    ->where(function ($query) {
                        $query->where('order_status', 1)
                            // ->orWhere('order_status', 1)
                            ->where('order_status', '!=', 2)
                            ->where('order_status', '!=', 3)
                            ->where('order_status', '!=', 4);
                    })
                    //  ->where(function($query) {
                    // $query->where('order_accept_action',0)
                    // ->orWhere('order_accept_action', 1);
                    // })
                    ->Where('order_accept_action', 1)
                    ->where('buyer_confirmation_status', null)
                    ->where('seller_confirmation_status', null)
                    ->where('payment_method_id', '!=', 5)
                    ->whereDate('created_at', today())
                    ->orderByDesc('created_at')
                    ->first();


                if ($getpendingorders) {
                    $getpendingordersData = collect();
                    $tradetype = '-';
                    if ($getpendingorders->buyer_id == Auth::user()->id) {
                        $tradetype = 'Buy';
                    }
                    if ($getpendingorders->seller_id == Auth::user()->id) {
                        $tradetype = 'Sell';
                    }
                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
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

                $held_coin =  $this->getEscrowHoldCoin(Auth::user()->id);

                return view('user.dashboard', compact('held_coin', 'log_data', 'available_ballence_bmk_usd', 'log_data_lastfewrows', 'entity', 'entitydocs', 'related_parties', 'entity_verificationStatus', 'security_activity_data', 'announce_data', 'totalAvailableCoinsInMarketWallet', 'getpendingorder'));


                //  return redirect(app()->getLocale()."/entity-dashboard");
            } elseif (Auth::user()->account_type == 3 || Auth::user()->account_type == 4) {

                return redirect("/admin/dashboard");
            } else {
                //User Dashboard Section
                if (Auth::user()->government_id_verified == 0) {
                    return redirect(app()->getLocale() . "/need-kyc");
                } else {
                    $this->credit_staking_bmk_benefites();
                    $this->credit_recurring_bmk_benefites();
                    $log_data = DB::table('logs')->where('user_id', Auth::user()->id)->orderBy('log_datetime', 'DESC')->first();
                    $log_data_lastfewrows = DB::table('logs')->where('user_id', Auth::user()->id)->orderByDesc('log_datetime')->limit(3)->get();
                    $security_activity_data = DB::table('security_activities')->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->limit(3)->get();
                    $announce_data = DB::table('announcements')->orderBy('created_at', 'DESC')->limit(4)->get();
                    $StakingController = new StakingController;
                    $p2p_balance = $StakingController->get_BMK_p2p_balance();
                    //$totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
                    // $totalAvailableBMKCoinsInUSD = $this->getTotalAvailableCoinsInselectedCurrency();
                    //   print_r($this->getTotalAvailableCoinsInMarketWallet());
                    //    echo "</br>";
                    if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
                        $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
                        //   print_r($totalAvailableCoinsInMarketWallet);
                        //   die();
                    } else {
                        $totalAvailableCoinsInMarketWallet = 0;
                    }

                    // bmk value through Api start

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies_name = $allcurrency->where('name', 'USD')->first();
                    //  print_r($currencies_name->per_coin);

                    if ($currencies_name->per_coin > 0) {
                        $crypto_value_based_on_currency_type = $currencies_name->per_coin;
                    } else {
                        $crypto_value_based_on_currency_type = 0;
                    }


                    $available_ballence_bmk_usd = $totalAvailableCoinsInMarketWallet * $crypto_value_based_on_currency_type;


                    //  print_r($totalAvailableCoinsInMarketWallet);

                    //    print_r($crypto_value_based_on_currency_type);


                    // bmk value through Api end

                    //Pending order
                    $getpendingorders = Order::where(function ($query) {
                        $query->where('buyer_id', Auth::user()->id)
                            ->orWhere('seller_id', Auth::user()->id);
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
                        if ($getpendingorders->buyer_id == Auth::user()->id) {
                            $tradetype = 'Buy';
                        }
                        if ($getpendingorders->seller_id == Auth::user()->id) {
                            $tradetype = 'Sell';
                        }
                        $base_url = env('BMK_API_BASE_URL');
                        $BmkApiController = new \App\Http\Controllers\BmkApiController;
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
                    $held_coin =  $this->getEscrowHoldCoin(Auth::user()->id);

                    return view('user.dashboard', compact('held_coin', 'log_data', 'available_ballence_bmk_usd', 'log_data_lastfewrows', 'log_data_lastfewrows', 'security_activity_data', 'announce_data', 'p2p_balance', 'totalAvailableCoinsInMarketWallet', 'getpendingorder'));
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function send_otp_by_secure_mail()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $email = $_REQUEST['email'];
            $data = User::where('email', $email)->first();
            if ($data) {
                return response()->json(['error' => "The email address is already associated with another Wealthmark account"], 401);
            } else {
                $otp = mt_rand(100000, 999999);
                $input['email_otp'] = $otp;
                $user->update($input);
                $data = $this->hideEmailAddress($email);
                $subject = "[Wealthmark] Confirm Your Email Verification " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";

                $result = new MailerController;
                //    $text_message = "Dear Customer Your email verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.wealthmark.io Team wealthmark";

                $text_message = file_get_contents(asset('public/assets/img/emailTemplates/Emailtemplate_email.html'));
                $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                $text_message =    str_replace("@__otp__@", $otp, $text_message);
                $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                $mail_response = $result->composeEmail($email, $subject, $text_message);
                if ($mail_response == "success") {
                    return response()->json(['success' => "200", 'email_data' => $data], $this->successStatus);
                } else {
                    return response()->json(['error' => $mail_response], $this->successStatus);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function get_security_activity_new(Request $request)
    {

        //  DB::enableQueryLog();
        //  print_r($request->all());

        $totaldays = explode(" ", $request->days);
        $daysORmonth_number = $totaldays[0];
        $ifDaysORmonth = $totaldays[1];

        if ($ifDaysORmonth == "DAYS" || $ifDaysORmonth == "DAY") {
            $numberOfDays = $daysORmonth_number * 1;
        }
        if ($ifDaysORmonth == "Months" || $ifDaysORmonth == "Month") {
            $numberOfDays = $daysORmonth_number * 30;
        }



        $newDateTime =  Carbon::now()->subDays($numberOfDays)->toDateString();

        if ($request->status == "All") {
            $totalrec = SecurityActivity::where('created_at', '>=', $newDateTime)->where('user_id', '=', $request->user_id)->get();
            $users = SecurityActivity::where('created_at', '>=', $newDateTime)->where('user_id', '=', $request->user_id)->orderBy('id', 'DESC')->paginate($request->paginate);
        } else {


            if ($request->status == "Completed") {
                $status = 1;
            }
            if ($request->status == "Failed") {
                $status = 0;
            }
            $totalrec = SecurityActivity::where('created_at', '>=', $newDateTime)->where('status', '=', $status)->where('user_id', '=', $request->user_id)->get();
            $users = SecurityActivity::where('created_at', '>=', $newDateTime)->where('status', '=', $status)->where('user_id', '=', $request->user_id)->orderBy('id', 'DESC')->paginate($request->paginate);
        }


        // $querylog =  DB::getQueryLog();
        //  dd( $users, $querylog);
        return response()->json(['users' => $users, 'totalrec' => $totalrec]);
    }

    public function get_security_activity_new_withLimit(Request $request)
    {

        //  DB::enableQueryLog();
        // print_r($request->all());

        $totaldays = explode(" ", $request->days);
        $daysORmonth_number = $totaldays[0];
        $ifDaysORmonth = $totaldays[1];

        if ($ifDaysORmonth == "DAYS" || $ifDaysORmonth == "DAY") {
            $numberOfDays = $daysORmonth_number * 1;
        }
        if ($ifDaysORmonth == "Months" || $ifDaysORmonth == "Month") {
            $numberOfDays = $daysORmonth_number * 30;
        }



        $newDateTime =  Carbon::now()->subDays($numberOfDays)->toDateString();
        $totalrec = SecurityActivity::where('created_at', '>=', $newDateTime)->where('user_id', '=', $request->user_id)->get();
        if ($request->status == "All") {

            $users = SecurityActivity::where('created_at', '>=', $newDateTime)->where('user_id', '=', $request->user_id)->orderBy('id', 'DESC')->skip($request->from)->take($request->paginating)->get();
            //  $users = SecurityActivity::where('created_at', '>=', $newDateTime)->where('user_id', '=', $request->user_id )->paginate($request->paginating);

        } else {
            if ($request->status == "Completed") {
                $status = 1;
            }
            if ($request->status == "Failed") {
                $status = 0;
            }
            $users = SecurityActivity::where('created_at', '>=', $newDateTime)->where('status', '=', $status)->where('user_id', '=', $request->user_id)->orderBy('id', 'DESC')->skip($request->from)->take($request->paginating)->get();
            //  $users = SecurityActivity::where('created_at', '>=', $newDateTime)->where('status', '=', $status )->where('user_id', '=', $request->user_id)->paginate($request->paginating);
        }



        return response()->json(['users' => $users, 'totalrec' => $totalrec]);
    }

    public function get_security_activity(Request $request)
    {

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        //$searchValue = $search_arr['value']; // Search value

        // Custom search filter
        $searchCity = $request->get('searchCity');
        $searchGender = $request->get('searchGender');
        //$searchName = $request->get('searchName');

        // Total records
        $records = SecurityActivity::select('count(*) as allcount');

        ## Add custom filter conditions
        if (!empty($searchCity)) {
            $date = explode(" ", $searchCity);
            $day_num = $date[0];
            $month_name = $date[1];
            if ($date[1] == "DAYS" || $date[1] == "DAY") {
                $dates = Carbon::now()->subDays($day_num);
                //$security_data = SecurityActivity::where('created_at', '>=', $date)->orderBy('id', 'DESC')->paginate(5);
                $records->where('created_at', '>=', $dates);
            }
            if ($date[1] == "Months" || $date[1] == "Month") {
                $dates = Carbon::now()->subMonths($day_num);
                $records->where('created_at', '>=', $dates);
            }
        }
        if (!empty($searchGender)) {
            if ($searchGender == "All") {
                $records->orWhere('status', 0);
                $records->orWhere('status', 1);
            }
            if ($searchGender == "Failed") {
                $records->where('status', 0);
            }
            if ($searchGender == "Completed") {
                $records->where('status', 1);
            }
        }
        //   if(!empty($searchName)){
        //       $records->where('name','like','%'.$searchName.'%');
        //   }
        $totalRecords = $records->count();

        // Total records with filter
        //$records = SecurityActivity::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%');

        ## Add custom filter conditions
        //   if(!empty($searchCity)){
        //      $date=explode(" ",$searchCity);
        //         $day_num=$date[0];
        //         $month_name=$date[1];
        //         if($date[1]=="DAYS" || $date[1]=="DAY"){
        //             $dates = Carbon::now()->subDays($day_num);
        //             //$security_data = SecurityActivity::where('created_at', '>=', $date)->orderBy('id', 'DESC')->paginate(5);
        //             $records->where('created_at', '>=', $dates);
        //         }
        //         if($date[1]=="Months" || $date[1]=="Month"){
        //             $dates = Carbon::now()->subMonths($day_num);
        //             $records->where('created_at', '>=', $dates);
        //         }
        //   }
        //   if(!empty($searchGender)){
        //         if($searchGender=="All"){
        //             $records->orWhere('status',0);
        //             $records->orWhere('status',1);
        //         }
        //         if($searchGender=="Failed"){
        //             $records->where('status',0);
        //         }
        //         if($searchGender=="Completed"){
        //             $records->where('status',1);
        //         }
        //   }
        //   if(!empty($searchName)){
        //      $records->where('name','like','%'.$searchName.'%');
        //   }
        $totalRecordswithFilter = $records->count();

        // Fetch records
        $records = SecurityActivity::orderBy($columnName, $columnSortOrder)
            ->select('*')
            ->where(['user_id' => Auth::user()->id]);
        ## Add custom filter conditions
        //   if(!empty($searchCity)){
        //      $date=explode(" ",$searchCity);
        //         $day_num=$date[0];
        //         $month_name=$date[1];
        //         if($date[1]=="DAYS" || $date[1]=="DAY"){
        //             $dates = Carbon::now()->subDays($day_num);
        //             //$security_data = SecurityActivity::where('created_at', '>=', $date)->orderBy('id', 'DESC')->paginate(5);
        //             $records->where('created_at', '>=', $dates);
        //         }
        //         if($date[1]=="Months" || $date[1]=="Month"){
        //             $dates = Carbon::now()->subMonths($day_num);
        //             $records->where('created_at', '>=', $dates);
        //         }
        //   }
        //   if(!empty($searchGender)){
        //         if($searchGender=="All"){
        //             $records->orWhere('status',0);
        //             $records->orWhere('status',1);
        //         }
        //         if($searchGender=="Failed"){
        //             $records->where('status',0);
        //         }
        //         if($searchGender=="Completed"){
        //             $records->where('status',1);
        //         }
        //   }
        //   if(!empty($searchName)){
        //      $records->where('name','like','%'.$searchName.'%');
        //   }
        $employees = $records->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        foreach ($employees as $employee) {
            $created_at = date("d-m-Y h:i:s", strtotime($employee->created_at));
            $source = $employee->source;
            $ip_address = $employee->data;

            if ($employee->activity == 1) {
                if ($employee->type == 1) {
                    $cator_name = "Wealthmark";
                }
                if ($employee->type == 0) {
                    $cator_name = "Google";
                }
                $activity = "Enabled" . $cator_name . "authenticator";
            }
            if ($employee->activity == 0) {
                if ($employee->type == 1) {
                    $cator_name = "Wealthmark";
                }
                if ($employee->type == 0) {
                    $cator_name = "Google";
                }
                $activity = "Disabled " . $cator_name . " authenticator";
            }

            if ($employee->status == 1) {
                $status = '<span class="text-success">Completed</span>';
            }
            if ($employee->status == 0) {
                $status = '<span class="text-danger">Failed</span>';
            }
            $data_arr[] = array(
                "created_at" => $created_at,
                "source" => $source,
                "activity" => $activity,
                "status" => $status,
                "ip_address" => $ip_address,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        return response()->json($response);
    }

    public function account_activity(Request $request)
    {
        if (Auth::check()) {
            $log_data = DB::table('logs')->where('user_id', Auth::user()->id)->orderBy('log_datetime', 'DESC')->paginate(15);
            $security_activity_data = DB::table('security_activities')->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(15);
            return view('user.account-activity', compact('log_data', 'security_activity_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }


    public function disable_account(Request $request)
    {
        if (Auth::check()) {
            return view('user.disable-account');
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function update_user_account_status(Request $request)
    {
        if (Auth::check()) {
            $update_account_status = user::where('id', $request->user_id)->update(['status' => 3]);

            if ($update_account_status) {
                return response()->json(['status' => 3]);
            } else {
                return response()->json(['status' => 5]);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }


    public function send_otp_by_secure_email_authenticator()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (Auth::user()) {
                $otp = mt_rand(100000, 999999);
                $input['email_otp'] = $otp;
                $user->update($input);
                $email = Auth::user()->email;
                $subject = "[Wealthmark] Confirm Your Email Verification " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                $result = new MailerController;
                // $text_message = "Dear Customer Your email verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.wealthmark.io Team wealthmark";

                $text_message = file_get_contents(asset('public/assets/img/emailTemplates/Emailtemplate_email.html'));
                $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                $text_message =    str_replace("@__otp__@", $otp, $text_message);
                $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                $mail_response = $result->composeEmail($email, $subject, $text_message);

                if ($mail_response == "success") {
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => $mail_response], $this->successStatus);
                }
            } else {
                return response()->json(['error' => "Unauthorised"], 401);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function send_otp_by_changedNew_email_authenticator(Request $request)
    {
        if (Auth::check()) {

            $validator = Validator::make($request->all(), ['email' => 'required|email|unique:users']);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else {
                $user = Auth::user();
                if (Auth::user()) {
                    $otp = mt_rand(100000, 999999);
                    session(['newEmail_otp' => $otp]);

                    $email = $request->email;
                    $subject = "[Wealthmark] Confirm Your Email Verification " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                    $result = new MailerController;
                    // $text_message = "Dear Customer Your email verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.wealthmark.io Team wealthmark";

                    $text_message = file_get_contents(asset('public/assets/img/emailTemplates/Emailtemplate_email.html'));
                    $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                    $text_message =    str_replace("@__otp__@", $otp, $text_message);
                    $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                    $mail_response = $result->composeEmail($email, $subject, $text_message);

                    if ($mail_response == "success") {

                        return response()->json(['success' => "200", 'emailotp' => session('newEmail_otp')], $this->successStatus);
                    } else {

                        return response()->json(['error' => $mail_response, 'emailotp' => session('newEmail_otp')], $this->successStatus);
                    }
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function send_otp_by_changedNew_phone_authenticator(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), ['phone' => 'required|numeric|digits_between:10,10|unique:users']);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else {
                $user = Auth::user();
                if (Auth::user()) {
                    $otp = mt_rand(100000, 999999);
                    session(['newPhone_otp' => $otp]);
                    //   $text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.gmartindia.com Team Gmart India";
                    //   $text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.webgv.in";
                    $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';

                    $sms = urlencode($text_message);
                    $result = new SmsController;
                    $sms_response = $result->Send_SMS($request->phone, $sms);
                    if ($sms_response) {

                        return response()->json(['success' => "200", 'phoneotp' => session('newPhone_otp')], $this->successStatus);
                    } else {

                        return response()->json(['error' => $sms_response, 'phoneotp' => session('newPhone_otp')], 401);
                    }
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function change_newEmail_authentication(Request $request)
    {
        //   dd($request->all(), $request->new_e_otp, $_SESSION['newEmail_otp']);
        if (Auth::check()) {
            $eotp = Auth::user()->email_otp;
            $potp = Auth::user()->phone_otp;
            $ifemail_verified = Auth::user()->is_mail_verified;
            $ifphone_verified = Auth::user()->is_phone_verified;
            $ifTwoFactor_verified = Auth::user()->is_two_factor;

            if ($request->new_e_otp == session('newEmail_otp')) {
                if (
                    ($ifemail_verified == 1) && ($request->post('e_otp') == $eotp) && ($ifphone_verified == 1)  && ($request->post('p_otp') === $potp) && ($ifTwoFactor_verified == 1) ||
                    ($ifemail_verified == 1) && ($request->post('e_otp') == $eotp) && ($ifphone_verified == 1)  && ($request->post('p_otp') === $potp) &&  ($ifTwoFactor_verified == 0) ||
                    ($ifemail_verified == 1) && ($request->post('e_otp') == $eotp) && ($ifphone_verified == 0)  &&  ($ifTwoFactor_verified == 0) ||
                    ($ifemail_verified == 1) && ($request->post('e_otp') == $eotp) && ($ifphone_verified == 0)  &&  ($ifTwoFactor_verified == 1)


                ) {

                    if ($ifTwoFactor_verified == 1) {
                        $AuthenticatorController = new GoogleAuthenticatorController;
                        $secret = Auth::user()->google2fa_secret;
                        $tolerance = 0;
                        $checkResult = $AuthenticatorController->verifyCode($secret, $request->post('o_otp'), $tolerance);
                        if ($checkResult) {
                            $user = Auth::user();
                            $input['email'] = $request->email;
                            $input['email_otp'] = $request->new_e_otp;
                            $data = $user->update($input);
                        } else {
                            return response()->json(['error' => "Please enter valid google authenticator code"], 401);
                        }
                    }

                    if ($ifTwoFactor_verified == 0) {
                        $user = Auth::user();
                        $input['email'] = $request->email;
                        $input['email_otp'] = $request->new_e_otp;
                        $data = $user->update($input);
                    }

                    if ($data) {
                        session()->forget('newEmail_otp');

                        $subject = "[Wealthmark] New email has been updated " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                        $result = new MailerController;
                        $text_message = file_get_contents(asset('public/assets/img/emailTemplates/newEmailUpdation.html'));
                        $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                        // $text_message =	str_replace("@__otp__@", $otp, $text_message);
                        // $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                        $mail_response = $result->composeEmail(Auth::user()->email, $subject, $text_message);
                        if ($mail_response == "success") {

                            return response()->json(['success' => "200"], $this->successStatus);
                        }
                        if ($mail_response == "error") {
                            return response()->json(['error' => 'mail response unsuccessful!'], 401);
                        }
                    } else {
                        return response()->json(['error' => "Unauthrized! Email can not be updated!"], 401);
                    }
                } else {
                    return response()->json(['error' => "Please enter valid email or phone otp"], 401);
                }
            } else {
                return response()->json(['error' => "Please enter valid new email"], 401);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function change_newPhone_authentication(Request $request)
    {
        // dd($request->all(), $request->new_p_otp, $_SESSION['newPhone_otp']);
        if (Auth::check()) {



            $eotp = Auth::user()->email_otp;
            $potp = Auth::user()->phone_otp;
            $ifemail_verified = Auth::user()->is_mail_verified;
            $ifphone_verified = Auth::user()->is_phone_verified;
            $ifTwoFactor_verified = Auth::user()->is_two_factor;


            if ($request->new_p_otp == session('newPhone_otp')) {
                if (
                    ($ifphone_verified == 1) && ($request->post('p_otp') == $potp) && ($ifemail_verified == 1)  && ($request->post('e_otp') === $eotp) && ($ifTwoFactor_verified == 1) ||
                    ($ifphone_verified == 1) && ($request->post('p_otp') == $potp) && ($ifemail_verified == 1)  && ($request->post('e_otp') === $eotp) &&  ($ifTwoFactor_verified == 0) ||
                    ($ifphone_verified == 1) && ($request->post('p_otp') == $potp) && ($ifemail_verified == 0)  &&  ($ifTwoFactor_verified == 0) ||
                    ($ifphone_verified == 1) && ($request->post('p_otp') == $potp) && ($ifemail_verified == 0)  &&  ($ifTwoFactor_verified == 1)


                ) {

                    if ($ifTwoFactor_verified == 1) {
                        $AuthenticatorController = new GoogleAuthenticatorController;
                        $secret = Auth::user()->google2fa_secret;
                        $tolerance = 0;
                        $checkResult = $AuthenticatorController->verifyCode($secret, $request->post('o_otp'), $tolerance);
                        if ($checkResult) {
                            $user = Auth::user();
                            $input['phone'] = $request->phone;
                            $input['phone_otp'] = $request->new_p_otp;
                            $data = $user->update($input);
                        } else {
                            return response()->json(['error' => "Please enter valid google authenticator code"], 401);
                        }
                    }

                    if ($ifTwoFactor_verified == 0) {
                        $user = Auth::user();
                        $input['phone'] = $request->phone;
                        $input['phone_otp'] = $request->new_p_otp;
                        $data = $user->update($input);
                    }

                    if ($data) {

                        session()->forget('newPhone_otp');

                        $subject = "[Wealthmark] New phone has been updated " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                        $result = new MailerController;
                        $text_message = file_get_contents(asset('public/assets/img/emailTemplates/newPhoneUpdation.html'));
                        $text_message =    str_replace("@__phone__@", Auth::user()->phone, $text_message);
                        // $text_message =	str_replace("@__otp__@", $otp, $text_message);
                        // $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                        $mail_response = $result->composeEmail(Auth::user()->email, $subject, $text_message);

                        // $phone_text_message = "Dear Customer Your Phone ".Auth::user()->phone." has been updated successfully. @www.gmartindia.com Team Gmart India";
                        // $phone_text_message = "Dear Customer Your Phone ".Auth::user()->phone." has been updated successfully. @www.webgv.in";
                        $phone_text_message = "Dear Customer Your Phone " . Auth::user()->phone . " has been updated successfully. Team INDEX";
                        $sms = urlencode($phone_text_message);
                        $phone_result = new SmsController;
                        $sms_response = $phone_result->Send_SMS($request->phone, $sms);


                        if ($mail_response == "success") {
                            return response()->json(['success' => "200"], $this->successStatus);
                        }
                        if ($mail_response == "error") {
                            return response()->json(['error' => 'mail response unsuccessful!'], 401);
                        }

                        if ($sms_response) {
                            return response()->json(['success' => "200"], $this->successStatus);
                        } else {
                            return response()->json(['error' => $sms_response], 401);
                        }
                    } else {
                        return response()->json(['error' => "Unauthrized! Phone can not be updated!"], 401);
                    }
                } else {
                    return response()->json(['error' => "Please enter valid email or phone otp"], 401);
                }
            } else {
                return response()->json(['error' => "Please enter valid new email"], 401);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }



    public function send_otp_by_secure_phone()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (Auth::user()) {
                $otp = mt_rand(100000, 999999);
                $input['phone_otp'] = $otp;
                $user->update($input);
                //   $text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.gmartindia.com Team Gmart India";
                // $text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.webgv.in";
                $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
                $sms = urlencode($text_message);
                $result = new SmsController;
                $sms_response = $result->Send_SMS(Auth::user()->phone, $sms);
                if ($sms_response) {
                    return response()->json(['success' => "200", 'phoneotp' => $otp], $this->successStatus);
                } else {
                    return response()->json(['error' => $sms_response], 401);
                }
            } else {
                return response()->json(['error' => "Unauthorised"], 401);
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function send_otp_enable_secure_phone()
    {
        if (Auth::check()) {
            $phone = $_REQUEST['mobile'];
            $data = User::where('phone', $phone)->first();
            if ($data) {
                return response()->json(['error' => "The phone number is already associated with another Wealthmark account"], 401);
            } else {
                $user = Auth::user();
                if (Auth::user()) {
                    if ($_REQUEST['mobile'] == "") {
                        return response()->json(['error' => "Please enter mobile number"], 401);
                    } else {
                        $otp = mt_rand(100000, 999999);
                        $input['phone_otp'] = $otp;
                        $user->update($input);
                        // $text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.gmartindia.com Team Gmart India";
                        // $text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.webgv.in";
                        $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
                        $sms = urlencode($text_message);
                        $result = new SmsController;
                        $sms_response = $result->Send_SMS($phone, $sms);
                        if ($sms_response) {
                            $phone_data = substr($phone, 0, 3) . "***" . substr($phone, 6, 4);
                            return response()->json(['success' => "200", 'phone_data' => $phone_data], $this->successStatus);
                        } else {
                            return response()->json(['error' => $sms_response], 401);
                        }
                    }
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function send_otp_enable_secure_mail()
    {
        if (Auth::check()) {
            $phone = $_REQUEST['phone'];
            $data = User::where('phone', $phone)->first();
            if ($data) {
                return response()->json(['error' => "The phone number is already associated with another Wealthmark account"], 401);
            } else {
                $user = Auth::user();
                if (Auth::user()) {
                    if ($_REQUEST['phone'] == "") {
                        return response()->json(['error' => "Please enter mobile number"], 401);
                    } else {
                        $otp = mt_rand(100000, 999999);
                        $input['email_otp'] = $otp;
                        $user->update($input);
                        $subject = "[Wealthmark] Confirm Your Email Verification " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                        $result = new MailerController;
                        //    $text_message = "Dear Customer Your email verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.wealthmark.io Team wealthmark";

                        $text_message = file_get_contents(asset('public/assets/img/emailTemplates/Emailtemplate_email.html'));
                        $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                        $text_message =    str_replace("@__otp__@", $otp, $text_message);
                        $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);


                        $mail_response = $result->composeEmail(Auth::user()->email, $subject, $text_message);
                        if ($mail_response == "success") {
                            return response()->json(['success' => "200"], $this->successStatus);
                        } else {
                            return response()->json(['error' => $mail_response], $this->successStatus);
                        }
                    }
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function verify_enable_email()
    {
        if (Auth::check()) {
            $email = $_REQUEST['email'];
            $email_otp = $_REQUEST['email_otp'];
            $phone_otp = $_REQUEST['phone_otp'];
            $authenticator_otp = $_REQUEST['authenticator_otp'];
            $data = User::where('email', $email)->first();
            if ($data) {
                return response()->json(['error' => "The email address is already associated with another Wealthmark account"], 401);
            } else {
                $e_otp = Auth::user()->email_otp;
                $p_otp = Auth::user()->phone_otp;
                if ($email_otp == $e_otp && $phone_otp == $p_otp) {

                    if (Auth::user()->is_two_factor == 1) {

                        $AuthenticatorController = new GoogleAuthenticatorController;
                        $secret = Auth::user()->google2fa_secret;
                        $tolerance = 0;
                        $checkResult = $AuthenticatorController->verifyCode($secret, $authenticator_otp, $tolerance);
                        if ($checkResult) {
                            $user = Auth::user();
                            $input['email_otp'] = "NULL";
                            $input['phone_otp'] = "NULL";
                            $input['email'] = $email;
                            $input['is_mail_verified'] = 1;
                            $user->update($input);

                            return response()->json(['success' => "200"], $this->successStatus);
                        } else {
                            return response()->json(['error' => "Authentication Failed"], 401);
                        }
                    } else {

                        //echo"verified";
                        $user = Auth::user();
                        $input['email_otp'] = "NULL";
                        $input['phone_otp'] = "NULL";
                        $input['email'] = $email;
                        $input['is_mail_verified'] = 1;
                        $user->update($input);
                        return response()->json(['success' => "200"], $this->successStatus);
                    }
                } else {
                    return response()->json(['error' => "Unauthorised, Invalid OTP"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function verify_enable_phone()
    {
        if (Auth::check()) {
            $phone = $_REQUEST['phone'];
            $email_otp = $_REQUEST['email_otp'];
            $phone_otp = $_REQUEST['phone_otp'];
            $authenticator_otp = $_REQUEST['authenticator_otp'];
            $data = User::where('phone', $phone)->first();
            if ($data) {
                return response()->json(['error' => "The phone number is already associated with another Wealthmark account"], 401);
            } else {
                $e_otp = Auth::user()->email_otp;
                $p_otp = Auth::user()->phone_otp;

                if ($email_otp == $e_otp && $phone_otp == $p_otp) {

                    if (Auth::user()->is_two_factor == 1) {

                        $AuthenticatorController = new GoogleAuthenticatorController;
                        $secret = Auth::user()->google2fa_secret;
                        $tolerance = 0;
                        $checkResult = $AuthenticatorController->verifyCode($secret, $authenticator_otp, $tolerance);

                        if ($checkResult) {
                            $user = Auth::user();
                            $input['email_otp'] = "NULL";
                            $input['phone_otp'] = "NULL";
                            $input['phone'] = $phone;
                            $input['is_phone_verified'] = 1;
                            $user->update($input);
                            return response()->json(['success' => "200"], $this->successStatus);
                        } else {

                            return response()->json(['error' => "Authentication Failed"], 401);
                        }
                    } else {

                        $user = Auth::user();
                        $input['email_otp'] = "NULL";
                        $input['phone_otp'] = "NULL";
                        $input['phone'] = $phone;
                        $input['is_phone_verified'] = 1;
                        $user->update($input);
                        return response()->json(['success' => "200"], $this->successStatus);
                    }
                } else {
                    return response()->json(['error' => "Unauthorised! Invalid OTP"], 401);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function security()
    {
        if (Auth::check()) {
            $log_data = DB::table('logs')->where('user_id', Auth::user()->id)->orderBy('log_datetime', 'DESC')->first();
            $email_data = $this->hideEmailAddress(Auth::user()->email);
            return view('user.security', compact('email_data', 'log_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function password()
    {
        if (Auth::check()) {
            return view('user.password');
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function submit_change_pass(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                // 'phone'=>   [
                //         'required',
                //         'digits:10',
                //         Rule::unique('users', 'phone'),
                //     ],
                'OldPassword' =>   ['required'],
                'password' =>   ['required']
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else {
                $odata = array("OldPassword" => "The specified password does not match the database password");
                $user = User::find(auth()->user()->id);
                if (!Hash::check($request->post('OldPassword'), $user->password)) {
                    return response()->json(['error' => $odata], 401);
                } else {
                    session(['old_password' => $request->post('OldPassword')]);
                    session(['new_password' => $request->post('password')]);
                    session(['email_id' => $user->email]);
                    session(['phone_number' => $user->phone]);
                    return response()->json(['success' => "200"], $this->successStatus);
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function submit_change_pass_otp(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'email_otp' => 'required|min:6|',
                'phone_otp' => 'required|min:6',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } else {
                $edata = array("email_otp" => "Please enter valid email otp");
                $pdata = array("phone_otp" => "Please enter valid phone otp");
                if (session('phone_otp') != $request->post('phone_otp')) {
                    return response()->json(['error' => $pdata], 401);
                } else if (session('email_otp') != $request->post('email_otp')) {
                    return response()->json(['error' => $edata], 401);
                } else {

                    $user = User::find(auth()->user()->id);
                    $user->password = bcrypt(session('new_password'));
                    $pass_data = $user->save();

                    if ($pass_data) {
                        session()->forget([
                            'old_password',
                            'new_password',
                            'email_id',
                            'phone_number',
                            'phone_otp',
                            'email_otp'
                        ]);
                        return response()->json(['success' => "200"], $this->successStatus);
                    }
                }
            }
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function change_password_otp(Request $request)
    {
        if (Auth::check()) {
            return view('user.change_password_otp');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function identification()
    {
        if (Auth::check()) {

            if (Auth::user()->account_type == 1) {
                if (Auth::user()->government_id_verified == 1) {
                    $user_data = $users = Auth::user();
                    return view('user.identification', compact('user_data'));
                } else {
                    return redirect(app()->getLocale() . "/need-kyc");
                }
            }

            if ((Auth::user()->account_type == 2)) {
                if ($this->is_entity_verified(Auth::user()->id) == 1) {
                    return view('user.identification');
                } else {
                    return redirect(app()->getLocale() . "/entity-verification");
                }
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function referral()
    {
        if (Auth::check()) {

            if (Auth::user()->account_type == 1) {
                $userVerificationStatus = Auth::user()->government_id_verified;
                return view('user.referral', compact('userVerificationStatus'));
            }

            if (Auth::user()->account_type == 2) {
                $userVerificationStatus = $this->is_entity_verified(Auth::user()->id);
                return view('user.referral', compact('userVerificationStatus'));
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function settings()
    {

        if (Auth::check()) {
            $user_notifications = Notification::where('notifiable_id', Auth::user()->id)->get();
            $notification_categories = NotificationCategory::all();
            return view('user.settings', compact('notification_categories', 'user_notifications'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function api_management()
    {

        if (Auth::check()) {
            return view('user.api_management');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function payment()
    {
        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(4);
            $allpaymentMethod = Banks::all();
            $allpaymentMethod_list = payment_method_list::all();
            return view('user.payment.payment', compact('ifpaymentMethod', 'allpaymentMethod', 'allpaymentMethod_list'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function payment_panel()
    {
        return view('user.confirm_pay_method');
    }

    // public function confirmed_order_info(){
    //   return view('user.confirmed-order-info' );
    // }

    public function task_center()
    {
        if (Auth::check()) {
            return view('user.task_center');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function market()
    {
        if (Auth::check()) {
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $StakingController = new StakingController;
            $url = $base_url . '/find_gift_card_coin';
            $rec_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '3');
            $regular_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '2');
            $charity_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '4');
            $regular_coin = $BmkApiController->verify_api($url, $rec_params);
            //$recurring_coin=$BmkApiController->verify_api($url,$regular_params);
            $recurring_coin = $StakingController->get_bmk_recurring_coin_for_staking();
            $charity_coin = $BmkApiController->verify_api($url, $charity_params);
            $p2p_coin = "";
            $order_data = Order::where('buyer_id', Auth::user()->id)->where('crypto_type', 'BMK')->where('payment_method_id', 5)->orderBy('id', 'DESC')->paginate(10);
            $if_purchaseBy_giftcard = Order::where('buyer_id', Auth::user()->id)->where('crypto_type', 'BMK')->where('payment_method_id', 5)->count();
            // print_r($if_purchaseBy_giftcard);

            return view('user.market', compact('recurring_coin', 'regular_coin', 'charity_coin', 'if_purchaseBy_giftcard', 'order_data'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function reward_center()
    {
        if (Auth::check()) {
            $my_giftcard_histroy = gift_card_history::where('gift_card_user_id', Auth::user()->id)->paginate('10');
            $other_giftcard_histroy = gift_card_history::where('gift_card_current_user_id', Auth::user()->id)->paginate('10');
            return view('user.reward_center', compact('my_giftcard_histroy', 'other_giftcard_histroy'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }
    public function digital_giftcard()
    {

        return view('user.digital_giftcard');
    }

    public function recurring_buy_history()
    {

        $recurring_buy_history = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.buyer_id')
            ->where('orders.buyer_id', '=', Auth::user()->id)
            ->select('*')
            ->paginate('10');

        return view('user.recurring_buy_history', compact('recurring_buy_history'));
    }

    public function other_giftcard_history()
    {

        $other_giftcard_histroy = gift_card_history::where('gift_card_current_user_id', Auth::user()->id)->paginate('10');


        return view('user.other_giftcard_history', compact('other_giftcard_histroy'));
    }


    public function overview()
    {
        if (Auth::check()) {
            return view('user.overview');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function fiat_and_spot()
    {
        if (Auth::check()) {
            return view('user.fiat_and_spot');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function funding()
    {
        if (Auth::check()) {
            return view('user.funding');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function futures()
    {
        if (Auth::check()) {
            return view('user.futures');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function earn()
    {
        if (Auth::check()) {
            return view('user.earn');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function jex()
    {
        return view('user.jex');
    }

    public function wazirx()
    {
        return view('user.wazirx');
    }

    public function pexpay()
    {
        return view('user.pexpay');
    }

    public function tokocrypto()
    {
        return view('user.tokocrypto');
    }

    public function wealthmark_tr()
    {
        return view('user.wealthmark_tr');
    }


    public function reset_password(Request $request)
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/dashboard");
        }
        return view('auth.reset-password');
    }

    public function card_deposite()
    {
        return view('web.card_deposite');
    }

    public function cash_balance()
    {
        return view('web.cash_balance');
    }

    public function third_party_payment()
    {
        return view('web.third_party_payment');
    }

    // Code added on 4th-Mar-23

    public function p2p_trading(Request $request)
    {

        /*
        |=============================================|
        |====== New Code start on 03-05-2023==========|
        |=============================================|
        */
        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }
        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at', null)->get();
            //print_r($userPaymentMethod);
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        $get_BTC_orders = Postads::where('cryptoname', '=', 'BTC')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $get_ETH_orders = Postads::where('cryptoname', '=', 'ETH')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        if (Auth::check()) {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->Where('userid', '!=', Auth::user()->id)->where('status', 1)->where('ordertype', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }


        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        } else {
            $ifpaymentMethod = 0;
        }

        $allpaymentMethod = Banks::all();

        $paymentType = $request->paymentType;
        $count_payment_type = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 0)->count();
        $allpaymentMethod_list = payment_method_list::all();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));


        $currencyid = $request->CurrencyId;
        $country = Country::all();
        $countryname = $request->countryname;




        // if  ($paymentType || $currencyid || $countryname)  {

        //     $count_payment_type = Postads::where('cryptoname','=','BMK')->where('status',1)->count();

        //     if(Auth::check()){


        //         $query = Postads::where('cryptoname', '=', 'BMK')
        //                     ->where('userid', '!=', Auth::user()->id)
        //                     ->where('status', '=', 1);


        //         if($paymentType){
        //           //  print_r($paymentType);
        //               $query->where('payment_method', '=', $paymentType);
        //         }

        //         if($currencyid){
        //           //    print_r($currencyid);
        //              $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //           //   print_r($countryname);
        //              $query->where('buyer_country', '=', $countryname);
        //         }

        //       $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //     }else{
        //         $query = Order::where('crypto_type','=','BMK')->where('order_status',0);

        //       if($paymentType){
        //           //  print_r($paymentType);
        //               $query->where('payment_method_id', '=', $paymentType);
        //         }

        //         if($currencyid){
        //           //    print_r($currencyid);
        //              $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //           //   print_r($countryname);
        //              $query->where('buyer_country', '=', $countryname);
        //         }

        //         $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);


        //      }


        //     $get_BMK_orders = $query->orderBy('id','desc')->paginate(2);

        //   // print_r($get_BMK_orders);

        //      return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'get_BTC_orders' => $get_BTC_orders,'get_ETH_orders' => $get_ETH_orders,'count_payment_type' => $count_payment_type])->render();
        // }

        if ($request->ajax()) {

            return view('web.p2p_trading_ajax', ['get_BMK_orders' => $get_BMK_orders, 'count_payment_type' => $count_payment_type, 'totalAvailableCoinsInMarketWallet' => $totalAvailableCoinsInMarketWallet])->render();
        }


        $all_sell_request = Postads::where('status', 1)->get();






        $buyList_details =   $get_BMK_orders->map(function ($item) {

            $username = User::where('id', $item->userid)->first();
            $buylist_mapped_details['username'] = isset($username->nick_name) ? $username->nick_name  : $username->first_name;
            $countbmk_orders = Postads::where('userid', $item->userid)->where('cryptoname', "$item->cryptoname")->get();
            $user_last_activity = User::where('id', $item->userid)->first();
            $buylist_mapped_details['id'] = $item->id;
            $buylist_mapped_details['nick_name'] = $item->nick_name;

            $buylist_mapped_details['payment_method'] = $item->payment_method;
            $buylist_mapped_details['count'] = $countbmk_orders->count();
            $buylist_mapped_details['onlneStatus'] = $user_last_activity->online_status;
            $buylist_mapped_details['created_at'] = $this->fetchDateFromSQL($item->created_at);

            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $item->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            $buylist_mapped_details['currenciesname'] = $currenciesname;
            $buylist_mapped_details['currencysymbol'] = $currencysymbol;
            $buylist_mapped_details['order_lower_limit'] = $item->order_lower_limit;
            $buylist_mapped_details['order_higher_limit'] = $item->order_higher_limit;




            $first_order = Postads::where('id', '=', $item->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = Order::where('order_status', '=', 1)
                ->where(function ($query) use ($item) {
                    $query->where('buyer_id', '=', $item->userid)
                        ->orWhere('seller_id', '=', $item->userid);
                })
                ->where('order_accept_action', '=', 1)

                ->where(function ($query) {
                    $query->where(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->whereNull('seller_confirmation_status');
                    })
                        ->orWhere(function ($subquery) {
                            $subquery->whereNull('buyer_confirmation_status')
                                ->where('seller_confirmation_status', '=', 1);
                        })
                        ->orWhere(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '=', 1)
                                ->orWhereNull('seller_confirmation_status');
                        })
                        ->where(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '!=', 1)
                                ->where('seller_confirmation_status', '!=', 1)
                                ->where('order_status', '!=', 1)
                                ->where('order_accept_action', '!=', 1);
                        });
                })

                ->whereDate('created_at', '=', $today)
                ->first();
            if ($activeorders != '') {
                $orderongoing = 1;
            } else {
                $orderongoing = 0;
            }


            $buylist_mapped_details['orderongoing'] = $orderongoing;
            $buylist_mapped_details['fixed_floating_pice'] = $item->fixed_floating_pice;
            $buylist_mapped_details['total_amount'] = $item->total_amount;
            $buylist_mapped_details['cryptoname'] = $item->cryptoname;
            $buylist_mapped_details['userid'] = $item->userid;

            $paymentmethodid = json_decode($item->payment_method);

            $payment_method_type = array();
            foreach ($paymentmethodid as $key => $value) {
                // $payment_method = App\Models\PaymentMedhods::where('id', $value)->first();
                // if ($payment_method) {
                //       $payment_method_type[] = $payment_method;
                //  }
                // echo '<pre>';
                // print_r( json_decode($value->account_holder));


                // print_r( gettype(json_decode($value)->user_id));


                $payment_method_type[] = json_decode($value)->method_type;
            }


            $buylist_mapped_details['payment_method_type'] = $payment_method_type;





            return $buylist_mapped_details;
        });
        $buyList_details = $buyList_details->toArray();
        // return $buyList_details;































        return view('web.p2p_trading', compact('buyList_details', 'get_BTC_orders', 'get_ETH_orders', 'get_BMK_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'ifpaymentMethod', 'allpaymentMethod', 'all_sell_request', 'userPaymentMethod', 'userPaymentMethodcount', 'totalAvailableCoinsInMarketWallet'));





        /*
        |=============================================|
        |====== New Code end on 03-05-2023============|
        |=============================================|
        */


        /*
        |=============================================|
        |====== Commented start on 03-05-2023=========|
        |=============================================|
        */

        //   if(Auth::check()){
        //               $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at',null)->get();
        //               $userPaymentMethodcount =$userPaymentMethod->count();
        //          }else{
        //               $userPaymentMethod = 0;
        //               $userPaymentMethodcount = $userPaymentMethod;
        //          }


        //     $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //     $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //              if(Auth::check()){
        //       $get_BMK_orders = Order::where('crypto_type','=','BMK')->Where('buyer_id','!=',Auth::user()->id)->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);
        //     }else{
        //             $get_BMK_orders = Order::where('crypto_type','=','BMK')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);
        //      }


        //     if(Auth::check()){
        //     $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        //     }else{
        //           $ifpaymentMethod = 0;
        //     }

        //     $allpaymentMethod = Banks::all();

        //     $paymentType = $request->paymentType;
        //     $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     $allpaymentMethod_list = payment_method_list::all();

        //     $base_url=env('BMK_API_BASE_URL');
        //                                 $BmkApiController = new \App\Http\Controllers\BmkApiController;
        //                                 $url = $base_url.'/get_currency';
        //                                 $params = array();
        //                                 $allcurrency = collect($BmkApiController->verify_api($url,$params));


        //     $currencyid = $request->CurrencyId;
        //     $country = Country::all();
        //     $countryname = $request->countryname;




        //     if  ($paymentType || $currencyid || $countryname)  {

        //         $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();

        //         if(Auth::check()){


        //             $query = Order::where('crypto_type', '=', 'BMK')
        //                         ->where('buyer_id', '!=', Auth::user()->id)
        //                         ->where('order_status', '=', 0);


        //             if($paymentType){
        //               //  print_r($paymentType);
        //                   $query->where('payment_method_id', '=', $paymentType);
        //             }

        //             if($currencyid){
        //               //    print_r($currencyid);
        //                  $query->where('domestic_currency_type', '=', $currencyid);
        //             }

        //             if($countryname){
        //               //   print_r($countryname);
        //                  $query->where('buyer_country', '=', $countryname);
        //             }

        //           $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);

        //             $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);

        //         }else{
        //             $query = Order::where('crypto_type','=','BMK')->where('order_status',0);

        //           if($paymentType){
        //               //  print_r($paymentType);
        //                   $query->where('payment_method_id', '=', $paymentType);
        //             }

        //             if($currencyid){
        //               //    print_r($currencyid);
        //                  $query->where('domestic_currency_type', '=', $currencyid);
        //             }

        //             if($countryname){
        //               //   print_r($countryname);
        //                  $query->where('buyer_country', '=', $countryname);
        //             }

        //             $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);

        //             $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);


        //          }


        //         $get_BMK_orders = $query->orderBy('id','desc')->paginate(2);

        //       // print_r($get_BMK_orders);

        //          return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'get_BTC_orders' => $get_BTC_orders,'get_ETH_orders' => $get_ETH_orders,'count_payment_type' => $count_payment_type])->render();
        //     }

        //     if ($request->ajax())  {

        //         return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type])->render();
        //     }


        //     $all_sell_request = Order::where('order_status', 0)->get();

        //     return view('web.p2p_trading',compact('get_BTC_orders','get_ETH_orders','get_BMK_orders','count_payment_type','allpaymentMethod_list','allcurrency','country','ifpaymentMethod', 'allpaymentMethod','all_sell_request','userPaymentMethod','userPaymentMethodcount'));

        /*
        |=============================================|
        |====== Commented end on 03-05-2023===========|
        |=============================================|
        */
    }


    // start code add on 14 june 2023 for dev environment

    public function p2p_trading_dev(Request $request)
    {

        /*
        |=============================================|
        |====== New Code start on 03-05-2023==========|
        |=============================================|
        */
        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }
        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at', null)->get();
            //print_r($userPaymentMethod);
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        $get_BTC_orders = Postads::where('cryptoname', '=', 'BTC')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $get_ETH_orders = Postads::where('cryptoname', '=', 'ETH')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        if (Auth::check()) {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->Where('userid', '!=', Auth::user()->id)->where('status', 1)->where('ordertype', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }


        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        } else {
            $ifpaymentMethod = 0;
        }

        $allpaymentMethod = Banks::all();

        $paymentType = $request->paymentType;
        $count_payment_type = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 0)->count();
        $allpaymentMethod_list = payment_method_list::all();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));


        $currencyid = $request->CurrencyId;
        $country = Country::all();
        $countryname = $request->countryname;




        // if  ($paymentType || $currencyid || $countryname)  {

        //     $count_payment_type = Postads::where('cryptoname','=','BMK')->where('status',1)->count();

        //     if(Auth::check()){


        //         $query = Postads::where('cryptoname', '=', 'BMK')
        //                     ->where('userid', '!=', Auth::user()->id)
        //                     ->where('status', '=', 1);


        //         if($paymentType){
        //           //  print_r($paymentType);
        //               $query->where('payment_method', '=', $paymentType);
        //         }

        //         if($currencyid){
        //           //    print_r($currencyid);
        //              $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //           //   print_r($countryname);
        //              $query->where('buyer_country', '=', $countryname);
        //         }

        //       $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //     }else{
        //         $query = Order::where('crypto_type','=','BMK')->where('order_status',0);

        //       if($paymentType){
        //           //  print_r($paymentType);
        //               $query->where('payment_method_id', '=', $paymentType);
        //         }

        //         if($currencyid){
        //           //    print_r($currencyid);
        //              $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //           //   print_r($countryname);
        //              $query->where('buyer_country', '=', $countryname);
        //         }

        //         $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);


        //      }


        //     $get_BMK_orders = $query->orderBy('id','desc')->paginate(2);

        //   // print_r($get_BMK_orders);

        //      return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'get_BTC_orders' => $get_BTC_orders,'get_ETH_orders' => $get_ETH_orders,'count_payment_type' => $count_payment_type])->render();
        // }

        if ($request->ajax()) {

            return view('web.p2p_trading_ajax', ['get_BMK_orders' => $get_BMK_orders, 'count_payment_type' => $count_payment_type, 'totalAvailableCoinsInMarketWallet' => $totalAvailableCoinsInMarketWallet])->render();
        }


        $all_sell_request = Postads::where('status', 1)->get();






        $buyList_details =   $get_BMK_orders->map(function ($item) {

            $username = User::where('id', $item->userid)->first();
            $buylist_mapped_details['username'] = isset($username->nick_name) ? $username->nick_name  : $username->first_name;
            $countbmk_orders = Postads::where('userid', $item->userid)->where('cryptoname', "$item->cryptoname")->get();
            $user_last_activity = User::where('id', $item->userid)->first();
            $buylist_mapped_details['id'] = $item->id;
            $buylist_mapped_details['nick_name'] = $item->nick_name;

            $buylist_mapped_details['payment_method'] = $item->payment_method;
            $buylist_mapped_details['count'] = $countbmk_orders->count();
            $buylist_mapped_details['onlneStatus'] = $user_last_activity->online_status;
            $buylist_mapped_details['created_at'] = $this->fetchDateFromSQL($item->created_at);

            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $item->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            $buylist_mapped_details['currenciesname'] = $currenciesname;
            $buylist_mapped_details['currencysymbol'] = $currencysymbol;
            $buylist_mapped_details['order_lower_limit'] = $item->order_lower_limit;
            $buylist_mapped_details['order_higher_limit'] = $item->order_higher_limit;




            $first_order = Postads::where('id', '=', $item->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = Order::where('order_status', '=', 1)
                ->where(function ($query) use ($item) {
                    $query->where('buyer_id', '=', $item->userid)
                        ->orWhere('seller_id', '=', $item->userid);
                })
                ->where('order_accept_action', '=', 1)

                ->where(function ($query) {
                    $query->where(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->whereNull('seller_confirmation_status');
                    })
                        ->orWhere(function ($subquery) {
                            $subquery->whereNull('buyer_confirmation_status')
                                ->where('seller_confirmation_status', '=', 1);
                        })
                        ->orWhere(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '=', 1)
                                ->orWhereNull('seller_confirmation_status');
                        })
                        ->where(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '!=', 1)
                                ->where('seller_confirmation_status', '!=', 1)
                                ->where('order_status', '!=', 1)
                                ->where('order_accept_action', '!=', 1);
                        });
                })

                ->whereDate('created_at', '=', $today)
                ->first();
            if ($activeorders != '') {
                $orderongoing = 1;
            } else {
                $orderongoing = 0;
            }


            $buylist_mapped_details['orderongoing'] = $orderongoing;
            $buylist_mapped_details['fixed_floating_pice'] = $item->fixed_floating_pice;
            $buylist_mapped_details['total_amount'] = $item->total_amount;
            $buylist_mapped_details['cryptoname'] = $item->cryptoname;
            $buylist_mapped_details['userid'] = $item->userid;

            $paymentmethodid = json_decode($item->payment_method);

            $payment_method_type = array();
            foreach ($paymentmethodid as $key => $value) {
                // $payment_method = App\Models\PaymentMedhods::where('id', $value)->first();
                // if ($payment_method) {
                //       $payment_method_type[] = $payment_method;
                //  }
                // echo '<pre>';
                // print_r( json_decode($value->account_holder));


                // print_r( gettype(json_decode($value)->user_id));


                $payment_method_type[] = json_decode($value)->method_type;
            }


            $buylist_mapped_details['payment_method_type'] = $payment_method_type;





            return $buylist_mapped_details;
        });
        $buyList_details = $buyList_details->toArray();
        // return $buyList_details;































        return view('web.p2p_trading_dev', compact('buyList_details', 'get_BTC_orders', 'get_ETH_orders', 'get_BMK_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'ifpaymentMethod', 'allpaymentMethod', 'all_sell_request', 'userPaymentMethod', 'userPaymentMethodcount', 'totalAvailableCoinsInMarketWallet'));





        /*
        |=============================================|
        |====== New Code end on 03-05-2023============|
        |=============================================|
        */


        /*
        |=============================================|
        |====== Commented start on 03-05-2023=========|
        |=============================================|
        */

        //   if(Auth::check()){
        //               $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at',null)->get();
        //               $userPaymentMethodcount =$userPaymentMethod->count();
        //          }else{
        //               $userPaymentMethod = 0;
        //               $userPaymentMethodcount = $userPaymentMethod;
        //          }


        //     $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //     $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //              if(Auth::check()){
        //       $get_BMK_orders = Order::where('crypto_type','=','BMK')->Where('buyer_id','!=',Auth::user()->id)->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);
        //     }else{
        //             $get_BMK_orders = Order::where('crypto_type','=','BMK')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);
        //      }


        //     if(Auth::check()){
        //     $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        //     }else{
        //           $ifpaymentMethod = 0;
        //     }

        //     $allpaymentMethod = Banks::all();

        //     $paymentType = $request->paymentType;
        //     $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     $allpaymentMethod_list = payment_method_list::all();

        //     $base_url=env('BMK_API_BASE_URL');
        //                                 $BmkApiController = new \App\Http\Controllers\BmkApiController;
        //                                 $url = $base_url.'/get_currency';
        //                                 $params = array();
        //                                 $allcurrency = collect($BmkApiController->verify_api($url,$params));


        //     $currencyid = $request->CurrencyId;
        //     $country = Country::all();
        //     $countryname = $request->countryname;




        //     if  ($paymentType || $currencyid || $countryname)  {

        //         $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();

        //         if(Auth::check()){


        //             $query = Order::where('crypto_type', '=', 'BMK')
        //                         ->where('buyer_id', '!=', Auth::user()->id)
        //                         ->where('order_status', '=', 0);


        //             if($paymentType){
        //               //  print_r($paymentType);
        //                   $query->where('payment_method_id', '=', $paymentType);
        //             }

        //             if($currencyid){
        //               //    print_r($currencyid);
        //                  $query->where('domestic_currency_type', '=', $currencyid);
        //             }

        //             if($countryname){
        //               //   print_r($countryname);
        //                  $query->where('buyer_country', '=', $countryname);
        //             }

        //           $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);

        //             $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);

        //         }else{
        //             $query = Order::where('crypto_type','=','BMK')->where('order_status',0);

        //           if($paymentType){
        //               //  print_r($paymentType);
        //                   $query->where('payment_method_id', '=', $paymentType);
        //             }

        //             if($currencyid){
        //               //    print_r($currencyid);
        //                  $query->where('domestic_currency_type', '=', $currencyid);
        //             }

        //             if($countryname){
        //               //   print_r($countryname);
        //                  $query->where('buyer_country', '=', $countryname);
        //             }

        //             $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);

        //             $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //                 ->orderBy('id','desc')
        //                 ->paginate(2);


        //          }


        //         $get_BMK_orders = $query->orderBy('id','desc')->paginate(2);

        //       // print_r($get_BMK_orders);

        //          return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'get_BTC_orders' => $get_BTC_orders,'get_ETH_orders' => $get_ETH_orders,'count_payment_type' => $count_payment_type])->render();
        //     }

        //     if ($request->ajax())  {

        //         return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type])->render();
        //     }


        //     $all_sell_request = Order::where('order_status', 0)->get();

        //     return view('web.p2p_trading',compact('get_BTC_orders','get_ETH_orders','get_BMK_orders','count_payment_type','allpaymentMethod_list','allcurrency','country','ifpaymentMethod', 'allpaymentMethod','all_sell_request','userPaymentMethod','userPaymentMethodcount'));

        /*
        |=============================================|
        |====== Commented end on 03-05-2023===========|
        |=============================================|
        */
    }



    // end code add on 14 june 2023 for dev environment









    public function p2p_trading_BTC(Request $request)
    {


        $paymentType = $request->input('paymentType');
        $count_payment_type = Order::where('crypto_type', '=', 'BTC')->where('order_status', 0)->count();
        $allpaymentMethod_list = payment_method_list::all();
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));
        $currencyid = $request->input('CurrencyId');
        $country = Country::all();
        $countryname = $request->input('countryname');
        $allpaymentMethod = Banks::all();

        if (Auth::check()) {
            $get_BTC_orders = Order::where('crypto_type', '=', 'BTC')->where('order_status', 0)->where('buyer_id', '!=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);

            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $get_BTC_orders = Order::where('crypto_type', '=', 'BTC')->where('order_status', 0)->orderBy('id', 'desc')->paginate(10);
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }

        if (!empty($paymentType)) {

            if (Auth::check()) {
                $query = Order::where('payment_method_id', '=', $paymentType)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->paginate(10);
            } else {
                $query = Order::where('payment_method_id', '=', $paymentType)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->paginate(10);
            }


            $count_payment_type = Order::where('payment_method_id', '=', $paymentType)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->count();
            $get_BTC_orders = $query;

            return view('web.p2p_trading_ajax_btc', compact('get_BTC_orders', 'count_payment_type'));
        }

        if (!empty($currencyid)) {

            if (Auth::check()) {
                $query = Order::where('domestic_currency_type', '=', $currencyid)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->paginate(10);
            } else {
                $query = Order::where('domestic_currency_type', '=', $currencyid)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->paginate(10);
            }
            $count_payment_type = Order::where('domestic_currency_type', '=', $currencyid)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->count();
            $get_BTC_orders = $query;
            return view('web.p2p_trading_ajax_btc', compact('get_BTC_orders', 'count_payment_type'));
        }

        if (!empty($countryname)) {

            if (Auth::check()) {
                $query = Order::where('buyer_country', '=', $countryname)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->paginate(10);
            } else {
                $query = Order::where('buyer_country', '=', $countryname)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->paginate(10);
            }
            $count_payment_type = Order::where('buyer_country', '=', $countryname)->where('crypto_type', '=', 'BTC')->where('order_status', 0)->count();
            $get_BTC_orders = $query;

            return view('web.p2p_trading_ajax_btc', compact('get_BTC_orders', 'count_payment_type'));
        }

        if ($request->ajax()) {
            return view('web.p2p_trading_ajax_btc', compact('get_BTC_orders', 'count_payment_type'));
        }

        return view('web.p2p_trading_btc', compact('get_BTC_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'allpaymentMethod', 'userPaymentMethod', 'userPaymentMethodcount'));
    }

    public function p2p_trading_bmk(Request $request)
    {

        /*
        |=============================================|
        |====== New Code start on 03-05-2023==========|
        |=============================================|
        */

        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }



        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at', null)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        $get_BTC_orders = Postads::where('cryptoname', '=', 'BTC')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $get_ETH_orders = Postads::where('cryptoname', '=', 'ETH')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        if (Auth::check()) {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->Where('userid', '!=', Auth::user()->id)->where('status', 1)->where('ordertype', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }


        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        } else {
            $ifpaymentMethod = 0;
        }

        $allpaymentMethod = Banks::all();

        $paymentType = $request->paymentType;
        $count_payment_type = Postads::where('cryptoname', '=', 'BMK')->where('ordertype', 0)->where('status', 1)->count();
        $allpaymentMethod_list = payment_method_list::all();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));


        $currencyid = $request->CurrencyId;
        $country = Country::all();
        $countryname = $request->countryname;



        if ($request->ajax()) {

            return view('web.p2p_trading_ajax', ['get_BMK_orders' => $get_BMK_orders, 'count_payment_type' => $count_payment_type, 'totalAvailableCoinsInMarketWallet' => $totalAvailableCoinsInMarketWallet])->render();
        }


        $all_sell_request = Postads::where('status', 1)->get();


        $buyList_details =   $get_BMK_orders->map(function ($item) {

            $username = User::where('id', $item->userid)->first();
            $buylist_mapped_details['username'] = isset($username->nick_name) ? $username->nick_name  : $username->first_name;
            $countbmk_orders = Postads::where('userid', $item->userid)->where('cryptoname', "$item->cryptoname")->get();
            $user_last_activity = User::where('id', $item->userid)->first();
            $buylist_mapped_details['id'] = $item->id;
            $buylist_mapped_details['nick_name'] = $item->nick_name;

            $buylist_mapped_details['payment_method'] = $item->payment_method;
            $buylist_mapped_details['count'] = $countbmk_orders->count();
            $buylist_mapped_details['onlneStatus'] = $user_last_activity->online_status;
            $buylist_mapped_details['created_at'] = $this->fetchDateFromSQL($item->created_at);

            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $item->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            $buylist_mapped_details['currenciesname'] = $currenciesname;
            $buylist_mapped_details['currencysymbol'] = $currencysymbol;
            $buylist_mapped_details['order_lower_limit'] = $item->order_lower_limit;
            $buylist_mapped_details['order_higher_limit'] = $item->order_higher_limit;




            $first_order = Postads::where('id', '=', $item->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = Order::where('order_status', '=', 1)
                ->where(function ($query) use ($item) {
                    $query->where('buyer_id', '=', $item->userid)
                        ->orWhere('seller_id', '=', $item->userid);
                })
                ->where('order_accept_action', '=', 1)

                ->where(function ($query) {
                    $query->where(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->whereNull('seller_confirmation_status');
                    })
                        ->orWhere(function ($subquery) {
                            $subquery->whereNull('buyer_confirmation_status')
                                ->where('seller_confirmation_status', '=', 1);
                        })
                        ->orWhere(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '=', 1)
                                ->orWhereNull('seller_confirmation_status');
                        })
                        ->where(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '!=', 1)
                                ->where('seller_confirmation_status', '!=', 1)
                                ->where('order_status', '!=', 1)
                                ->where('order_accept_action', '!=', 1);
                        });
                })

                ->whereDate('created_at', '=', $today)
                ->first();
            if ($activeorders != '') {
                $orderongoing = 1;
            } else {
                $orderongoing = 0;
            }


            $buylist_mapped_details['orderongoing'] = $orderongoing;
            $buylist_mapped_details['fixed_floating_pice'] = $item->fixed_floating_pice;
            $buylist_mapped_details['total_amount'] = $item->total_amount;
            $buylist_mapped_details['cryptoname'] = $item->cryptoname;
            $buylist_mapped_details['userid'] = $item->userid;

            $paymentmethodid = json_decode($item->payment_method);

            $payment_method_type = array();
            foreach ($paymentmethodid as $key => $value) {
                // $payment_method = App\Models\PaymentMedhods::where('id', $value)->first();
                // if ($payment_method) {
                //       $payment_method_type[] = $payment_method;
                //  }
                // echo '<pre>';
                // print_r( json_decode($value->account_holder));


                // print_r( gettype(json_decode($value)->user_id));


                $payment_method_type[] = json_decode($value)->method_type;
            }


            $buylist_mapped_details['payment_method_type'] = $payment_method_type;





            return $buylist_mapped_details;
        });
        $buyList_details = $buyList_details->toArray();
        // return $buyList_details;



















        return view('web.p2p_trading_bmk', compact('buyList_details', 'get_BTC_orders', 'get_ETH_orders', 'get_BMK_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'ifpaymentMethod', 'allpaymentMethod', 'all_sell_request', 'userPaymentMethod', 'userPaymentMethodcount', 'totalAvailableCoinsInMarketWallet'));


        /*
        |=============================================|
        |====== New Code end on 03-05-2023============|
        |=============================================|
        */


        /*
        |=============================================|
        |====== Commented start on 03-05-2023=========|
        |=============================================|
        */

        //     $paymentType = $request->input('paymentType');
        //     $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     $allpaymentMethod_list = payment_method_list::all();
        //      $base_url=env('BMK_API_BASE_URL');
        //                                 $BmkApiController = new \App\Http\Controllers\BmkApiController;
        //                                 $url = $base_url.'/get_currency';
        //                                 $params = array();
        //                                 $allcurrency = collect($BmkApiController->verify_api($url,$params));
        //     $currencyid = $request->input('CurrencyId');
        //     $country = Country::all();
        //     $countryname = $request->input('countryname');

        //      $allpaymentMethod = Banks::all();
        //     if(Auth::check()){
        //             $get_BMK_orders = Order::where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->orderBy('id','desc')->paginate(2);
        //             $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
        //             $userPaymentMethodcount =$userPaymentMethod->count();
        //      }else{
        //           $get_BMK_orders = Order::where('crypto_type','=','BMK')->where('order_status',0)->orderBy('id','desc')->paginate(2);
        //           $userPaymentMethod = 0;
        //           $userPaymentMethodcount = $userPaymentMethod;
        //      }

        //   if  ($paymentType || $currencyid || $countryname)  {

        //         $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();

        //     if(Auth::check()){


        //         $query = Order::where('crypto_type', '=', 'BMK')
        //                     ->where('buyer_id', '!=', Auth::user()->id)
        //                     ->where('order_status', '=', 0);


        //         if($paymentType){
        //           //  print_r($paymentType);
        //               $query->where('payment_method_id', '=', $paymentType);
        //         }

        //         if($currencyid){
        //           //    print_r($currencyid);
        //              $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //           //   print_r($countryname);
        //              $query->where('buyer_country', '=', $countryname);
        //         }

        //         $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //     }else{
        //         $query = Order::where('crypto_type','=','BMK')->where('order_status',0);

        //         if($paymentType){
        //                       $query->where('payment_method_id', '=', $paymentType);
        //         }

        //         if($currencyid){
        //                     $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //                           $query->where('buyer_country', '=', $countryname);
        //         }

        //         $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);


        //      }


        //       $get_BMK_orders = $query->orderBy('id','desc')->paginate(2);

        //       // print_r($get_BMK_orders);

        //          return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'get_BTC_orders' => $get_BTC_orders,'get_ETH_orders' => $get_ETH_orders,'count_payment_type' => $count_payment_type])->render();
        //     }

        //     // if  (!empty($paymentType))  {

        //     //     if(Auth::check()){
        //     //         $query= Order::where('payment_method_id','=', $paymentType)->where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->paginate(2);
        //     //     }else{
        //     //         $query= Order::where('payment_method_id','=', $paymentType)->where('crypto_type','=','BMK')->where('order_status',0)->paginate(2);
        //     //     }

        //     //     $get_BMK_orders = $query;
        //     //     $count_payment_type = Order::where('payment_method_id','=', $paymentType)->where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     //     return view('web.p2p_trading_bmk',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     // }

        //     // if  (!empty($currencyid))  {

        //     //     if(Auth::check()){
        //     //         $query= Order::where('domestic_currency_type','=', $currencyid)->where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->paginate(2);
        //     //     }else{
        //     //         $query= Order::where('domestic_currency_type','=', $currencyid)->where('crypto_type','=','BMK')->where('order_status',0)->paginate(2);
        //     //     }

        //     //     $get_BMK_orders = $query;
        //     //     $count_payment_type = Order::where('domestic_currency_type','=', $currencyid)->where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     //     return view('web.p2p_trading_bmk',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     // }

        //     // if  (!empty($countryname))  {

        //     //     if(Auth::check()){
        //     //         $query= Order::where('buyer_country','=', $countryname)->where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->paginate(2);
        //     //     }else{
        //     //         $query= Order::where('buyer_country','=', $countryname)->where('crypto_type','=','BMK')->where('order_status',0)->paginate(2);
        //     //     }

        //     //         $get_BMK_orders = $query;
        //     //         $count_payment_type = Order::where('buyer_country','=', $countryname)->where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     //         return view('web.p2p_trading_bmk',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     //     }

        //     if ($request->ajax()) {

        //         return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     }
        //     return view('web.p2p_trading_bmk', compact('get_BMK_orders','count_payment_type','allpaymentMethod_list','allcurrency','country', 'allpaymentMethod', 'userPaymentMethod','userPaymentMethodcount'));


        /*
        |=============================================|
        |====== Commented end on 03-05-2023===========|
        |=============================================|
        */
    }


    public function p2p_trading_bmk_dev(Request $request)
    {

        /*
        |=============================================|
        |====== New Code start on 03-05-2023==========|
        |=============================================|
        */

        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }



        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at', null)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        $get_BTC_orders = Postads::where('cryptoname', '=', 'BTC')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $get_ETH_orders = Postads::where('cryptoname', '=', 'ETH')->where('status', 1)->where('ordertype', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        if (Auth::check()) {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->Where('userid', '!=', Auth::user()->id)->where('status', 1)->where('ordertype', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }


        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        } else {
            $ifpaymentMethod = 0;
        }

        $allpaymentMethod = Banks::all();

        $paymentType = $request->paymentType;
        $count_payment_type = Postads::where('cryptoname', '=', 'BMK')->where('ordertype', 0)->where('status', 1)->count();
        $allpaymentMethod_list = payment_method_list::all();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));


        $currencyid = $request->CurrencyId;
        $country = Country::all();
        $countryname = $request->countryname;



        if ($request->ajax()) {

            return view('web.p2p_trading_ajax', ['get_BMK_orders' => $get_BMK_orders, 'count_payment_type' => $count_payment_type, 'totalAvailableCoinsInMarketWallet' => $totalAvailableCoinsInMarketWallet])->render();
        }


        $all_sell_request = Postads::where('status', 1)->get();


        $buyList_details =   $get_BMK_orders->map(function ($item) {

            $username = User::where('id', $item->userid)->first();
            $buylist_mapped_details['username'] = isset($username->nick_name) ? $username->nick_name  : $username->first_name;
            $countbmk_orders = Postads::where('userid', $item->userid)->where('cryptoname', "$item->cryptoname")->get();
            $user_last_activity = User::where('id', $item->userid)->first();
            $buylist_mapped_details['id'] = $item->id;
            $buylist_mapped_details['nick_name'] = $item->nick_name;

            $buylist_mapped_details['payment_method'] = $item->payment_method;
            $buylist_mapped_details['count'] = $countbmk_orders->count();
            $buylist_mapped_details['onlneStatus'] = $user_last_activity->online_status;
            $buylist_mapped_details['created_at'] = $this->fetchDateFromSQL($item->created_at);

            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $item->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            $buylist_mapped_details['currenciesname'] = $currenciesname;
            $buylist_mapped_details['currencysymbol'] = $currencysymbol;
            $buylist_mapped_details['order_lower_limit'] = $item->order_lower_limit;
            $buylist_mapped_details['order_higher_limit'] = $item->order_higher_limit;




            $first_order = Postads::where('id', '=', $item->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = Order::where('order_status', '=', 1)
                ->where(function ($query) use ($item) {
                    $query->where('buyer_id', '=', $item->userid)
                        ->orWhere('seller_id', '=', $item->userid);
                })
                ->where('order_accept_action', '=', 1)

                ->where(function ($query) {
                    $query->where(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->whereNull('seller_confirmation_status');
                    })
                        ->orWhere(function ($subquery) {
                            $subquery->whereNull('buyer_confirmation_status')
                                ->where('seller_confirmation_status', '=', 1);
                        })
                        ->orWhere(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '=', 1)
                                ->orWhereNull('seller_confirmation_status');
                        })
                        ->where(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '!=', 1)
                                ->where('seller_confirmation_status', '!=', 1)
                                ->where('order_status', '!=', 1)
                                ->where('order_accept_action', '!=', 1);
                        });
                })

                ->whereDate('created_at', '=', $today)
                ->first();
            if ($activeorders != '') {
                $orderongoing = 1;
            } else {
                $orderongoing = 0;
            }


            $buylist_mapped_details['orderongoing'] = $orderongoing;
            $buylist_mapped_details['fixed_floating_pice'] = $item->fixed_floating_pice;
            $buylist_mapped_details['total_amount'] = $item->total_amount;
            $buylist_mapped_details['cryptoname'] = $item->cryptoname;
            $buylist_mapped_details['userid'] = $item->userid;

            $paymentmethodid = json_decode($item->payment_method);

            $payment_method_type = array();
            foreach ($paymentmethodid as $key => $value) {
                // $payment_method = App\Models\PaymentMedhods::where('id', $value)->first();
                // if ($payment_method) {
                //       $payment_method_type[] = $payment_method;
                //  }
                // echo '<pre>';
                // print_r( json_decode($value->account_holder));


                // print_r( gettype(json_decode($value)->user_id));


                $payment_method_type[] = json_decode($value)->method_type;
            }


            $buylist_mapped_details['payment_method_type'] = $payment_method_type;





            return $buylist_mapped_details;
        });
        $buyList_details = $buyList_details->toArray();
        // return $buyList_details;



















        return view('web.p2p_trading_bmk_dev', compact('buyList_details', 'get_BTC_orders', 'get_ETH_orders', 'get_BMK_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'ifpaymentMethod', 'allpaymentMethod', 'all_sell_request', 'userPaymentMethod', 'userPaymentMethodcount', 'totalAvailableCoinsInMarketWallet'));


        /*
        |=============================================|
        |====== New Code end on 03-05-2023============|
        |=============================================|
        */


        /*
        |=============================================|
        |====== Commented start on 03-05-2023=========|
        |=============================================|
        */

        //     $paymentType = $request->input('paymentType');
        //     $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     $allpaymentMethod_list = payment_method_list::all();
        //      $base_url=env('BMK_API_BASE_URL');
        //                                 $BmkApiController = new \App\Http\Controllers\BmkApiController;
        //                                 $url = $base_url.'/get_currency';
        //                                 $params = array();
        //                                 $allcurrency = collect($BmkApiController->verify_api($url,$params));
        //     $currencyid = $request->input('CurrencyId');
        //     $country = Country::all();
        //     $countryname = $request->input('countryname');

        //      $allpaymentMethod = Banks::all();
        //     if(Auth::check()){
        //             $get_BMK_orders = Order::where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->orderBy('id','desc')->paginate(2);
        //             $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
        //             $userPaymentMethodcount =$userPaymentMethod->count();
        //      }else{
        //           $get_BMK_orders = Order::where('crypto_type','=','BMK')->where('order_status',0)->orderBy('id','desc')->paginate(2);
        //           $userPaymentMethod = 0;
        //           $userPaymentMethodcount = $userPaymentMethod;
        //      }

        //   if  ($paymentType || $currencyid || $countryname)  {

        //         $count_payment_type = Order::where('crypto_type','=','BMK')->where('order_status',0)->count();

        //     if(Auth::check()){


        //         $query = Order::where('crypto_type', '=', 'BMK')
        //                     ->where('buyer_id', '!=', Auth::user()->id)
        //                     ->where('order_status', '=', 0);


        //         if($paymentType){
        //           //  print_r($paymentType);
        //               $query->where('payment_method_id', '=', $paymentType);
        //         }

        //         if($currencyid){
        //           //    print_r($currencyid);
        //              $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //           //   print_r($countryname);
        //              $query->where('buyer_country', '=', $countryname);
        //         }

        //         $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //     }else{
        //         $query = Order::where('crypto_type','=','BMK')->where('order_status',0);

        //         if($paymentType){
        //                       $query->where('payment_method_id', '=', $paymentType);
        //         }

        //         if($currencyid){
        //                     $query->where('domestic_currency_type', '=', $currencyid);
        //         }

        //         if($countryname){
        //                           $query->where('buyer_country', '=', $countryname);
        //         }

        //         $get_BTC_orders = Order::where('crypto_type','=','BTC')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);

        //         $get_ETH_orders = Order::where('crypto_type','=','ETH')->where('order_status',0)
        //             ->orderBy('id','desc')
        //             ->paginate(2);


        //      }


        //       $get_BMK_orders = $query->orderBy('id','desc')->paginate(2);

        //       // print_r($get_BMK_orders);

        //          return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'get_BTC_orders' => $get_BTC_orders,'get_ETH_orders' => $get_ETH_orders,'count_payment_type' => $count_payment_type])->render();
        //     }

        //     // if  (!empty($paymentType))  {

        //     //     if(Auth::check()){
        //     //         $query= Order::where('payment_method_id','=', $paymentType)->where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->paginate(2);
        //     //     }else{
        //     //         $query= Order::where('payment_method_id','=', $paymentType)->where('crypto_type','=','BMK')->where('order_status',0)->paginate(2);
        //     //     }

        //     //     $get_BMK_orders = $query;
        //     //     $count_payment_type = Order::where('payment_method_id','=', $paymentType)->where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     //     return view('web.p2p_trading_bmk',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     // }

        //     // if  (!empty($currencyid))  {

        //     //     if(Auth::check()){
        //     //         $query= Order::where('domestic_currency_type','=', $currencyid)->where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->paginate(2);
        //     //     }else{
        //     //         $query= Order::where('domestic_currency_type','=', $currencyid)->where('crypto_type','=','BMK')->where('order_status',0)->paginate(2);
        //     //     }

        //     //     $get_BMK_orders = $query;
        //     //     $count_payment_type = Order::where('domestic_currency_type','=', $currencyid)->where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     //     return view('web.p2p_trading_bmk',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     // }

        //     // if  (!empty($countryname))  {

        //     //     if(Auth::check()){
        //     //         $query= Order::where('buyer_country','=', $countryname)->where('crypto_type','=','BMK')->where('order_status',0)->Where('buyer_id','!=',Auth::user()->id)->paginate(2);
        //     //     }else{
        //     //         $query= Order::where('buyer_country','=', $countryname)->where('crypto_type','=','BMK')->where('order_status',0)->paginate(2);
        //     //     }

        //     //         $get_BMK_orders = $query;
        //     //         $count_payment_type = Order::where('buyer_country','=', $countryname)->where('crypto_type','=','BMK')->where('order_status',0)->count();
        //     //         return view('web.p2p_trading_bmk',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     //     }

        //     if ($request->ajax()) {

        //         return view('web.p2p_trading_ajax',['get_BMK_orders' => $get_BMK_orders,'count_payment_type' => $count_payment_type]);
        //     }
        //     return view('web.p2p_trading_bmk', compact('get_BMK_orders','count_payment_type','allpaymentMethod_list','allcurrency','country', 'allpaymentMethod', 'userPaymentMethod','userPaymentMethodcount'));


        /*
        |=============================================|
        |====== Commented end on 03-05-2023===========|
        |=============================================|
        */
    }





















    public function p2p_trading_eth(Request $request)
    {

        $paymentType = $request->input('paymentType');
        $count_payment_type = Order::where('crypto_type', '=', 'ETH')->where('order_status', 0)->count();
        $allpaymentMethod_list = payment_method_list::all();
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));
        $currencyid = $request->input('CurrencyId');
        $country = Country::all();
        $countryname = $request->input('countryname');

        $allpaymentMethod = Banks::all();
        if (Auth::check()) {
            $get_ETH_orders = Order::where('crypto_type', '=', 'ETH')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $get_ETH_orders = Order::where('crypto_type', '=', 'ETH')->where('order_status', 0)->orderBy('id', 'desc')->paginate(10);
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        if (!empty($paymentType)) {

            if (Auth::check()) {
                $query = Order::where('payment_method_id', '=', $paymentType)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->paginate(10);
            } else {
                $query = Order::where('payment_method_id', '=', $paymentType)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->paginate(10);
            }


            // echo "<pre>"; print_r($query);die;
            $get_ETH_orders = $query;
            $count_payment_type = Order::where('payment_method_id', '=', $paymentType)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->count();
            //print_r($count_payment_type);die();

            return view('web.p2p_trading_ajax_eth', ['get_ETH_orders' => $get_ETH_orders, 'count_payment_type' => $count_payment_type]);
        }

        if (!empty($currencyid)) {

            if (Auth::check()) {
                $query = Order::where('domestic_currency_type', '=', $currencyid)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->paginate(2);
            } else {
                $query = Order::where('domestic_currency_type', '=', $currencyid)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->paginate(10);
            }


            $get_ETH_orders = $query;
            $count_payment_type = Order::where('domestic_currency_type', '=', $currencyid)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->count();

            return view('web.p2p_trading_ajax_eth', ['get_ETH_orders' => $get_ETH_orders, 'count_payment_type' => $count_payment_type]);
        }

        if (!empty($countryname)) {

            if (Auth::check()) {
                $query = Order::where('buyer_country', '=', $countryname)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->Where('buyer_id', '!=', Auth::user()->id)->paginate(2);
            } else {
                $query = Order::where('buyer_country', '=', $countryname)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->paginate(10);
            }


            $get_ETH_orders = $query;
            $count_payment_type = Order::where('buyer_country', '=', $countryname)->where('crypto_type', '=', 'ETH')->where('order_status', 0)->count();
            return view('web.p2p_trading_ajax_eth', ['get_ETH_orders' => $get_ETH_orders, 'count_payment_type' => $count_payment_type]);
        }


        if ($request->ajax()) {
            return view('web.p2p_trading_ajax_eth', ['get_ETH_orders' => $get_ETH_orders, 'count_payment_type' => $count_payment_type]);
        }

        return view('web.p2p_trading_eth', compact('get_ETH_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'allpaymentMethod', 'userPaymentMethod', 'userPaymentMethodcount'));
    }

    public function userdetails($userid)
    {
        $userdetails = User::where('id', $userid)->first();
        //echo "<pre>"; print_r($userdetails->first_name);
        return $userdetails;
    }

    // Code ended on 4th-Mar-23


    public function markets()
    {
        return view('web.markets');
    }

    public function convert()
    {
        return view('web.convert');
    }

    public function classic()
    {
        return view('web.classic');
    }

    public function advanced()
    {
        return view('web.advanced');
    }

    public function margin()
    {
        return view('web.margin');
    }

    public function p2p()
    {
        return view('web.p2p');
    }

    public function strategy_trading()
    {
        return view('web.strategy_trading');
    }

    public function swap_farming()
    {
        return view('web.swap_farming');
    }

    public function wealthmark_futures_overview()
    {
        return view('web.wealthmark_futures_overview');
    }

    public function responsible_trading()
    {
        return view('web.responsible_trading');
    }

    public function coin_m_futures()
    {
        return view('web.coin_m_futures');
    }

    public function vanilla_options()
    {
        return view('web.vanilla_options');
    }

    public function leveraged_tokens()
    {
        return view('web.leveraged_tokens');
    }

    public function battle()
    {
        return view('web.battle');
    }

    public function wealthmark_visa_card()
    {
        return view('web.wealthmark_visa_card');
    }

    public function wealthmark_pay()
    {
        return view('web.wealthmark_pay');
    }

    public function nft()
    {
        return view('web.nft');
    }

    public function wealthmark_earn()
    {
        return view('web.wealthmark_earn');
    }

    public function launchpad()
    {
        return view('web.launchpad');
    }

    public function savings()
    {
        return view('web.savings');
    }

    public function staking()
    {
        return view('web.staking');
    }

    public function bm_vault()
    {
        return view('web.bm_vault');
    }

    public function dual_investment()
    {
        return view('web.dual_investment');
    }

    public function liquidity_farming()
    {
        return view('web.liquidity_farming');
    }

    public function auto_invest()
    {
        return view('web.auto_invest');
    }

    public function wealthmark_pool()
    {
        return view('web.wealthmark_pool');
    }

    public function exchange()
    {
        return view('web.exchange');
    }

    public function academy()
    {
        return view('web.academy');
    }

    public function fan_token()
    {
        return view('web.fan_token');
    }

    public function vip_institutional_services()
    {
        return view('web.vip_institutional_services');
    }

    public function broker()
    {
        return view('web.broker');
    }

    public function cloud()
    {
        return view('web.cloud');
    }

    public function charity()
    {
        return view('web.charity');
    }

    public function dex()
    {
        return view('web.dex');
    }

    public function labs()
    {
        return view('web.labs');
    }


    public function research()
    {
        return view('web.research');
    }

    public function gift_card()
    {
        return view('web.gift_card');
    }

    public function trust_wallet()
    {
        return view('web.trust_wallet');
    }

    public function careers()
    {
        return view('web.careers');
    }
    public function press()
    {
        return view('web.press');
    }

    public function business_contacts()
    {
        return view('web.business_contacts');
    }

    public function community()
    {
        return view('web.community');
    }

    public function wealthmark_blog()
    {
        return view('web.wealthmark_blog');
    }

    public function terms()
    {
        return view('web.terms');
    }

    public function privacy()
    {
        return view('web.privacy');
    }



    public function news()
    {
        return view('web.news');
    }

    public function notices()
    {
        return view('web.notices');
    }

    public function downloads()
    {
        return view('web.downloads');
    }

    public function desktop_application()
    {
        return view('web.desktop_application');
    }

    public function execution_solutions()
    {
        return view('web.execution_solutions');
    }

    public function referral_offers()
    {

        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/referral");
        } else {
            return view('web.referral_offers');
        }
    }

    public function affiliate()
    {
        return view('web.affiliate');
    }

    public function bmkoin()
    {
        return view('web.bmkoin');
    }

    public function otc_trading()
    {
        return view('web.otc_trading');
    }

    public function listing_application()
    {
        return view('web.listing_application');
    }

    public function p2p_merchant_application()
    {
        return view('web.p2p_merchant_application');
    }


    public function historical_market_data()
    {
        return view('web.historical_market_data');
    }

    public function give_us_feedback()
    {
        return view('web.give_us_feedback');
    }

    public function support_center()
    {
        return view('web.support_center');
    }

    public function submit_request()
    {
        return view('web.submit_request');
    }

    public function api_documentation()
    {
        return view('web.api_documentation');
    }

    public function fees()
    {
        return view('web.fees');
    }

    public function trading_rules()
    {
        return view('web.trading_rules');
    }

    public function wealthmark_verify()
    {
        return view('web.wealthmark_verify');
    }

    public function law_enforcement_requests()
    {
        return view('web.law_enforcement_requests');
    }

    public function buy_bmkoin()
    {
        return view('web.buy_bmkoin');
    }

    public function buy_busd()
    {
        return view('web.buy_busd');
    }

    public function buy_bitcoin()
    {
        return view('web.buy_bitcoin');
    }

    public function buy_ethereum()
    {
        return view('web.buy_ethereum');
    }

    public function buy_litecoin()
    {
        return view('web.buy_litecoin');
    }

    public function buy_ripple()
    {
        return view('web.buy_ripple');
    }

    public function buy_bitcoin_cash()
    {
        return view('web.buy_bitcoin_cash');
    }

    public function buy_dogecoin()
    {
        return view('web.buy_dogecoin');
    }

    public function buy_defi()
    {
        return view('web.buy_defi');
    }

    public function buy_shib()
    {
        return view('web.buy_shib');
    }

    public function buy_tradable_altcoins()
    {
        return view('web.buy_tradable_altcoins');
    }

    public function crypto_loans()
    {
        return view('web.crypto_loans');
    }

    // --------------------new website---------------------------
    public function wm_pool()
    {
        return view('web.wm_pool');
    }
    public function simple_earn()
    {
        return view('web.simple_earn');
    }

    public function job_description()
    {
        return view('web.job_details');
    }


    public function buy_sell_crypto(Request $request)
    {
        //$count_lastDay_cancelled_orders = $this->checkSusspensionStatus('24402');



        if (Auth::check()) {


            // commented on 180223
            //     $bitcoin=Cryptocap::getSingleAsset('bitcoin');
            //     $ethereum=Cryptocap::getSingleAsset('ethereum');
            //     $allcurrency = currencies::all();
            //     $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
            //     return view('web.buy_sell_crypto',compact('bitcoin','ethereum','allcurrency', 'userPaymentMethod' ));


            $data = $request->all();
            $userid = Auth::user()->id;
            $buyer_country_name = Auth::user()->country;

            //
            // Order data inserted into temp_order table


            if ($data) {
                $count_lastDay_cancelled_orders = $this->checkSusspensionStatus($userid);

                // print_r($count_lastDay_cancelled_orders);

                if ($count_lastDay_cancelled_orders == 0) {


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


                        'crypto_current_value' => $request->current_crypto_value,
                        'inr_value_in_usd' => $request->inr_value_in_usd,
                        'current_crypto_in_inr' => $request->current_crypto_in_inr,
                        'order_status' => 0,
                        'created_at' => now(),
                    ];



                    $conf_order_data = Order::insert($inserted_data_conf_order);
                    $lastId = DB::getPdo()->lastInsertId();
                    //print_r($conf_order_data); die();
                    //session_start();
                    session(['orderid' => $lastId]);
                    //session(['orderid' => $lastId]);
                    //echo session('orderid');
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

                        return response()->json(['message' => 'success', 'order_data' => $conf_order_data]);
                    } else {
                        return response()->json(['message' => 'error, somthing went wrong']);
                    }
                } else {
                    return response()->json(['message' => 'error, You have canceled 3 order in today.', 'order_data' => '1'], 401);
                }
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
                return view('web.buy_sell_crypto', compact('bitcoin', 'ethereum', 'allcurrency', 'userPaymentMethod', 'allpaymentMethod_list', 'bmk_price'));
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }



    public function activity_history()
    {
        return view('web.activity_history');
    }

    public function documentation()
    {
        return view('web.all_documentation');
    }

    public function earn_history()
    {
        if (Auth::check()) {
            return view('user.earn-history');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }
    public function buy_crypto_history()
    {
        if (Auth::check()) {
            return view('user.buy-crypto-history');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }
    public function margin_order()
    {
        if (Auth::check()) {
            return view('user.margin-order');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }
    public function spot_order()
    {
        if (Auth::check()) {
            return view('user.spot-order');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }
    public function auto_investment_section()
    {
        return view('template.auto_invest');
    }

    public function p2p_order()
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

            // $active_p2p_orders = Order::where(function($query) use ($buyerid, $sellerid) { // 31052023
            //     $query->where('buyer_id', $buyerid)
            //           ->orWhere('seller_id', $sellerid);
            // })
            //  ->where('payment_method_id', '!=', '5' )
            //  ->where('order_status',1 )
            //  ->where('order_accept_action', 1 )
            //   ->where('ordertype', '!=', null )
            //  ->where('buyer_confirmation_status', null )
            //  ->where('seller_confirmation_status',null )
            //  ->whereDate('created_at', $today)
            // ->orderByDesc('created_at')
            // ->get();

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

            /* For View-all Tab*/

            $p2p_orders_view_all = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->orderByDesc('created_at')
                ->paginate(25);



            return view('user.p2p-order', compact('p2p_orders', 'active_p2p_orders', 'count_active_p2p_orders', 'p2p_orders_view_all'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function p2p_order_view_all()
    {
        if (Auth::check()) {
            $buyerid = Auth::user()->id;
            $sellerid = Auth::user()->id;
            $p2p_orders_view_all = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->orderByDesc('created_at')
                ->paginate(25);

            return view('user.p2p_order_view_all', compact('p2p_orders_view_all'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function p2p_order_profit_loss_statement()
    {
        if (Auth::check()) {
            return view('user.p2p_order_profit_loss_statement');
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function getviewallp2pOrders(Request $request)
    {
        $buyerid = Auth::user()->id;
        $sellerid = Auth::user()->id;
        $getSelectedCoin = $request->getSelectedCoin;

        if ($request->getSelectedCoin == 1) {
            $selectedcoin = 'BMK';
        }

        if ($request->getSelectedCoin == 2) {
            $selectedcoin = 'ETH';
        }

        if ($request->getSelectedCoin == 3) {
            $selectedcoin = 'BTC';
        }

        $OrderType = $request->OrderType;
        $statusType = $request->statusType;
        $dateRange = $request->dateRange;
        $cryptoid = $request->selectedcoin;


        /*
        |=================================|
        |====Multiple selected Filterimg==|
        |=================================|
        */

        if ($OrderType || $statusType || $dateRange) {
            if ($cryptoid == 1) {
                $selectedcryptoid = 'BMK';
            }

            if ($cryptoid == 2) {
                $selectedcryptoid = 'ETH';
            }

            if ($cryptoid == 3) {
                $selectedcryptoid = 'BTC';
            }


            if ($OrderType == 'Buy') {
                $selectedOrderType = $buyerid;
            }

            if ($OrderType == 'Sell') {
                $selectedOrderType = $sellerid;
            }




            $p2p_orders_count = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')->where('crypto_type', $selectedcoin)->count();

            $query = Order::where(function ($query1) use ($buyerid, $sellerid) {
                $query1->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            });


            if ($OrderType == 'Buy') {
                $query->where('buyer_id', $buyerid);
            }

            if ($OrderType == 'Sell') {
                $query->where('seller_id', $sellerid);
            }



            if ($statusType == 'completed') {

                $query->where('order_status', 1)
                    ->where('buyer_confirmation_status', 1)
                    ->where('seller_confirmation_status', 1);
            }

            if ($statusType == 'not_completed') {

                $query->where(function ($query1) {
                    $query1->where('buyer_confirmation_status', 1)

                        ->whereNull('seller_confirmation_status');
                })
                    ->orWhere(function ($query2) {
                        $query2->where('seller_confirmation_status', 1)

                            ->whereNull('buyer_confirmation_status');
                    })
                    ->orWhere(function ($query3) {
                        $query3->whereNull('seller_confirmation_status')
                            ->whereNull('buyer_confirmation_status');
                    })
                    ->where(function ($query4) {
                        $query4->where('order_status', '=', 1)
                            ->orWhere('order_status', '!=', 3)
                            ->orWhere('order_status', '!=', 4)
                            ->orWhere('order_status', '!=', 2);
                    })

                    // ->where('order_status', 1)
                    ->where('order_accept_action', 1);
            }

            if ($statusType == 'pending') {

                $query
                    ->where('order_status', 0);
            }

            if ($statusType == 'cancelled') {

                $query->where(function ($query1) {
                    $query1->orWhere('order_status', 4)
                        ->orWhere('order_status', 3)
                        ->orWhere('order_status', 2);
                });
            }



            if ($dateRange) {
                $dateParts = explode(" - ", $dateRange);

                // Parse the start and end dates using the DateTime class
                $startDate = date("Y-m-d", strtotime($dateParts[0]));
                $endDate = date("Y-m-d", strtotime($dateParts[1]));

                $query->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate]);
            }

            // $ajaxp2p_orders =$query->where('crypto_type', $selectedcoin )->where('payment_method_id', '!=', '5' )->orderByDesc('created_at')->paginate($request->numberoforderperpage);
            $ajaxp2p_orders = $query->where(function ($query2) use ($selectedcoin) {
                $query2->where('crypto_type', $selectedcoin)
                    ->where('payment_method_id', '!=', '5');
            })
                ->orderByDesc('created_at')
                ->paginate($request->numberoforderperpage);
            //dd($ajaxp2p_orders);

            $p2porderData = collect();

            if ($ajaxp2p_orders->isNotEmpty()) {
                $i = 1;
                foreach ($ajaxp2p_orders as $value) {

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


                    $p2porderData->push([
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
                        'created_at' => $value->created_at,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                    ]);
                    $i++;
                }
            }
            //print_r($p2porderData);
            if ($p2p_orders_count > 0) {
                return response()->json(['p2p_orders_count' =>  $p2p_orders_count, 'ajaxp2p_orders' => $p2porderData], 200);
            }
        }

        /*
        |======================|
        |====Crypto Filterimg==|
        |======================|
        */

        if ($request->getSelectedCoin) {
            $ajaxp2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->where('crypto_type', $selectedcoin)
                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')->where('crypto_type', $selectedcoin)->count();

            $p2porderData = collect();

            if ($ajaxp2p_orders->isNotEmpty()) {
                $i = 1;
                foreach ($ajaxp2p_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;

                    if ($value->buyer_id == Auth::user()->id && $value->seller_id != Auth::user()->id) {

                        $username = '-';
                        if ($value->seller_id) {
                            $seller = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if ($value->buyer_id != Auth::user()->id && $value->seller_id == Auth::user()->id) {

                        $username = '-';
                        if ($value->buyer_id) {
                            $buyer = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }

                    if ($value->buyer_id == Auth::user()->id) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id == Auth::user()->id) {
                        $tradetype = 'Sell';
                    }


                    $p2porderData->push([
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
                        'created_at' => $value->created_at,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                    ]);
                    $i++;
                }
            }
            //print_r($p2porderData);
            if ($p2p_orders_count > 0) {
                return response()->json(['p2p_orders_count' =>  $p2p_orders_count, 'ajaxp2p_orders' => $p2porderData], 200);
            }
        }

        /*
        |===================|
        |====Buy Filterimg==|
        |===================|
        */

        if ($request->getTradeType == 'Buy') {
            $ajaxp2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid);
            })
                ->where('payment_method_id', '!=', '5')

                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($buyerid) {
                $query->where('buyer_id', $buyerid);
            })
                ->where('payment_method_id', '!=', '5')->count();

            $p2porderData = collect();

            if ($ajaxp2p_orders->isNotEmpty()) {
                $i = 1;
                foreach ($ajaxp2p_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;

                    if ($value->buyer_id == Auth::user()->id && $value->seller_id != Auth::user()->id) {

                        $username = '-';
                        if ($value->seller_id) {
                            $seller = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if ($value->buyer_id != Auth::user()->id && $value->seller_id == Auth::user()->id) {

                        $username = '-';
                        if ($value->buyer_id) {
                            $buyer = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }

                    if ($value->buyer_id == Auth::user()->id) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id == Auth::user()->id) {
                        $tradetype = 'Sell';
                    }


                    $p2porderData->push([
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
                        'created_at' => $value->created_at,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                    ]);
                    $i++;
                }
            }
            //print_r($p2porderData);
            if ($p2p_orders_count > 0) {
                return response()->json(['p2p_orders_count' =>  $p2p_orders_count, 'ajaxp2p_orders' => $p2porderData], 200);
            }
        }

        /*
        |====================|
        |====sell Filterimg==|
        |====================|
        */

        if ($request->getTradeType == 'Sell') {
            $ajaxp2p_orders = Order::where(function ($query) use ($sellerid) {
                $query->Where('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($sellerid) {
                $query->Where('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')->count();

            $p2porderData = collect();

            if ($ajaxp2p_orders->isNotEmpty()) {
                $i = 1;
                foreach ($ajaxp2p_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;

                    if ($value->buyer_id == Auth::user()->id && $value->seller_id != Auth::user()->id) {

                        $username = '-';
                        if ($value->seller_id) {
                            $seller = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if ($value->buyer_id != Auth::user()->id && $value->seller_id == Auth::user()->id) {

                        $username = '-';
                        if ($value->buyer_id) {
                            $buyer = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }

                    if ($value->buyer_id == Auth::user()->id) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id == Auth::user()->id) {
                        $tradetype = 'Sell';
                    }


                    $p2porderData->push([
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
                        'created_at' => $value->created_at,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                    ]);
                    $i++;
                }
            }
            //print_r($p2porderData);
            if ($p2p_orders_count > 0) {
                return response()->json(['p2p_orders_count' =>  $p2p_orders_count, 'ajaxp2p_orders' => $p2porderData], 200);
            }
        }


        /*
        |============================|
        |====Order Status Filterimg==|
        |============================|
        */
        if ($request->orderstatus == 'completed') {
            $ajaxp2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->where('order_status', 1)
                ->where('buyer_confirmation_status', 1)
                ->where('seller_confirmation_status', 1)
                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('order_status', 1)
                ->where('buyer_confirmation_status', 1)
                ->where('seller_confirmation_status', 1)
                ->where('payment_method_id', '!=', '5')->count();
        }

        if ($request->orderstatus == 'not_completed') {
            $ajaxp2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where(function ($query1) {
                    $query1->where('buyer_confirmation_status', 1)

                        ->whereNull('seller_confirmation_status');
                })
                ->orWhere(function ($query2) {
                    $query2->where('seller_confirmation_status', 1)

                        ->whereNull('buyer_confirmation_status');
                })
                ->orWhere(function ($query3) {
                    $query3->whereNull('seller_confirmation_status')
                        ->whereNull('buyer_confirmation_status');
                })
                ->where(function ($query4) {
                    $query4->where('order_status', '=', 1)
                        ->orWhere('order_status', '!=', 3)
                        ->orWhere('order_status', '!=', 4)
                        ->orWhere('order_status', '!=', 2);
                })
                ->where('payment_method_id', '!=', '5')
                // ->where('order_status', 1)
                ->where('order_accept_action', 1)
                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where(function ($query1) {
                    $query1->where('buyer_confirmation_status', 1)

                        ->whereNull('seller_confirmation_status');
                })
                ->orWhere(function ($query2) {
                    $query2->where('seller_confirmation_status', 1)

                        ->whereNull('buyer_confirmation_status');
                })
                ->orWhere(function ($query3) {
                    $query3->whereNull('seller_confirmation_status')
                        ->whereNull('buyer_confirmation_status');
                })
                ->where(function ($query4) {
                    $query4->where('order_status', '=', 1)
                        ->orWhere('order_status', '!=', 3)
                        ->orWhere('order_status', '!=', 4)
                        ->orWhere('order_status', '!=', 2);
                })
                //->where('order_status', 1)
                ->where('order_accept_action', 1)
                ->where('payment_method_id', '!=', '5')->count();
        }

        if ($request->orderstatus == 'pending') {
            $ajaxp2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->where('order_status', 0)

                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('order_status', 0)

                ->where('payment_method_id', '!=', '5')->count();
        }

        if ($request->orderstatus == 'cancelled') {
            $ajaxp2p_orders = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where('payment_method_id', '!=', '5')
                ->where(function ($query1) {
                    $query1->orWhere('order_status', 4)
                        ->orWhere('order_status', 3)
                        ->orWhere('order_status', 2);
                })

                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) use ($buyerid, $sellerid) {
                $query->where('buyer_id', $buyerid)
                    ->orWhere('seller_id', $sellerid);
            })
                ->where(function ($query1) {
                    $query1->orWhere('order_status', 4)
                        ->orWhere('order_status', 3)
                        ->orWhere('order_status', 2);
                })

                ->where('payment_method_id', '!=', '5')->count();
        }
        if ($request->orderstatus) {
            $p2porderData = collect();

            if ($ajaxp2p_orders->isNotEmpty()) {
                $i = 1;
                foreach ($ajaxp2p_orders as $value) {

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


                    $p2porderData->push([
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
                        'created_at' => $value->created_at,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                    ]);
                    $i++;
                }
            }
            //print_r($p2porderData);
            if ($p2p_orders_count > 0) {
                return response()->json(['p2p_orders_count' =>  $p2p_orders_count, 'ajaxp2p_orders' => $p2porderData], 200);
            }
        }
        /*
        |============================|
        |====Date Range Filterimg====|
        |============================|
        */


        if ($request->startDate && $request->endDate) {

            $ajaxp2p_orders = Order::where(function ($query) {
                $query->where('buyer_id', Auth::user()->id)
                    ->orWhere('seller_id', Auth::user()->id);
            })
                ->where('payment_method_id', '!=', '5')
                ->whereBetween(DB::raw('DATE(created_at)'), [$request->startDate, $request->endDate])
                ->orderByDesc('created_at')->paginate($request->numberoforderperpage);

            $p2p_orders_count = Order::where(function ($query) {
                $query->where('buyer_id', Auth::user()->id)
                    ->orWhere('seller_id', Auth::user()->id);
            })
                ->where('payment_method_id', '!=', 5)
                ->whereBetween(DB::raw('DATE(created_at)'), [$request->startDate, $request->endDate])
                ->count();



            $p2porderData = collect();

            if ($ajaxp2p_orders->isNotEmpty()) {
                $i = 1;
                foreach ($ajaxp2p_orders as $value) {

                    $base_url = env('BMK_API_BASE_URL');
                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                    $url = $base_url . '/get_currency';
                    $params = array();
                    $allcurrency = collect($BmkApiController->verify_api($url, $params));
                    $currencies = $allcurrency->where('id', $value->domestic_currency_type)->first();
                    $currenciesname = $currencies->name;

                    if ($value->buyer_id == Auth::user()->id && $value->seller_id != Auth::user()->id) {

                        $username = '-';
                        if ($value->seller_id) {
                            $seller = User::where('id', $value->seller_id)->firstOrFail();
                            $username = $seller->first_name;
                        }
                    }

                    if ($value->buyer_id != Auth::user()->id && $value->seller_id == Auth::user()->id) {

                        $username = '-';
                        if ($value->buyer_id) {
                            $buyer = User::where('id', $value->buyer_id)->firstOrFail();
                            $username = $buyer->first_name;
                        }
                    }

                    if ($value->buyer_id == Auth::user()->id) {
                        $tradetype = 'Buy';
                    }

                    if ($value->seller_id == Auth::user()->id) {
                        $tradetype = 'Sell';
                    }


                    $p2porderData->push([
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
                        'created_at' => $value->created_at,
                        'buyer_confirmation_status' => $value->buyer_confirmation_status,
                        'seller_confirmation_status' => $value->seller_confirmation_status,
                        'payment_bank_id' => $value->payment_bank_id,
                    ]);
                    $i++;
                }
            }
            //print_r($p2porderData);
            if ($p2p_orders_count > 0) {
                return response()->json(['p2p_orders_count' =>  $p2p_orders_count, 'ajaxp2p_orders' => $p2porderData], 200);
            }
        }


        // else{
        //   $p2p_orders = Order::where(function($query) use ($buyerid, $sellerid) {
        //                 $query->where('buyer_id', $buyerid)
        //                       ->orWhere('seller_id', $sellerid);
        //             })
        //             ->where('payment_method_id', '!=', '5' )
        //             ->orderByDesc('created_at')->paginate($request->paginating, ['*'], 'page', $request->pageNumber);
        //   $p2p_orders_count = Order::where(function($query) use ($buyerid, $sellerid) {
        //                 $query->where('buyer_id', $buyerid)
        //                       ->orWhere('seller_id', $sellerid);
        //             })
        //             ->where('payment_method_id', '!=', '5' )->count();

        // }



    }

    public function getOrderDetails(Request $request)
    {

        $first_order = Order::where('id', '=', $request->orderId)->first();

        return response()->json(['order_data' => $first_order]);
    }

    public function getOrderDetailsbyAds(Request $request)
    {

        $first_order = Postads::where('id', '=', $request->orderId)->first();
        $getadsid = $first_order->adsid;
        $today = date('Y-m-d');
        $activeorders = Order::where('adsid', '=', $getadsid)
            ->where('order_status', '=', 1)
            ->where('order_accept_action', '=', 1)
            ->where(function ($query) {
                $query->where(function ($subquery) {
                    $subquery->whereNull('buyer_confirmation_status')
                        ->orWhereNull('seller_confirmation_status');
                })
                    ->orWhere(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->where('seller_confirmation_status', '=', 1);
                    })
                    ->orWhere(function ($subquery) {
                        $subquery->where('buyer_confirmation_status', '=', 1)
                            ->orWhereNull('seller_confirmation_status');
                    });
            })
            ->whereDate('created_at', '=', $today)
            ->first();
        if ($activeorders != '') {
            return response()->json(['order_data_by_ads' => $activeorders]);
        } else {
            return response()->json(['order_data_by_ads' => '0']);
        }
    }


    public function orderExport()
    {
        // $buyerid = Auth::user()->id;
        //     $sellerid = Auth::user()->id;
        // $p2p_orders = Order::where(function($query) use ($buyerid, $sellerid) {
        //             $query->where('buyer_id', $buyerid)
        //                   ->orWhere('seller_id', $sellerid);
        //         })
        //         ->orWhere(function($query) use ($buyerid, $sellerid) {
        //             $query->where('buyer_id', $sellerid)
        //                   ->orWhere('seller_id', $buyerid);
        //         })
        //         ->orderByDesc('created_at')
        //         ->get();
        $filename = Auth::user()->id . '_p2p_orders.xlsx';

        // return Excel::download(new P2pOrderExport($p2p_orders), $filename);
        //Excel::store(new P2pOrderExport, $filename, 'public_p2porder');
        return Excel::download(new P2pOrderExport,  $filename);
        // return response()->json(['filename' => $filename]);
    }


    public function selectedexportOrder(Request $request)
    {
        $orderIds = explode(',', $request->input('order_ids'));

        $filename = Auth::user()->id . '_selected_p2p_orders.xlsx';
        //return Excel::download(new SelectedP2POrderExport($orderIds),  $filename);
        //Excel::store(new SelectedP2POrderExport($orderIds), $filename);
        Excel::store(new SelectedP2POrderExport($orderIds), $filename, 'public_p2porder');
        // return storage_path('app/public/p2porder/' . $filename);
    }
    public function getselectedexportOrder()
    {

        $filename = Auth::user()->id . '_selected_p2p_orders.xlsx';
        $filePath = storage_path('app/public/p2porder/' . $filename);
        //return response()->download($filePath, $filename);
        $response = response()->download($filePath, $filename);
        return $response;
    }

    public function orderExportdownload($filename)
    {
        $file_path = storage_path('app/public/p2porder/' . $filename);
        if (file_exists($file_path)) {
            return response()->file($file_path);
        } else {
            return response()->json(['error' => 'File not found']);
        }
    }


    public function video_section()
    {
        return view('template.video');
    }

    public function nav_dummy()
    {
        return view('web.menu_dummy');
    }

    public function seller_confirm_order(Request $request)
    {

        if (Auth::check()) {
            $checkuserType = $this->checkorderurl();
            //print_r($checkuserType);die();
            $orderid = session('orderid') ?? null;
            $checkuserorder = Order::where('id', '=', $orderid)->where(function ($query) {
                $query->Where('buyer_id', '=', Auth::user()->id);
            })
                ->first();
            //  if($checkuserType == true){
            // print_r($orderid);die();
            if (!$orderid) {
                return view('web.page_not_found');
                //abort(404, 'Record not found');
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
                return view('user.seller-confirmed-order-info', compact('get_order_data', 'buyer_details', 'ratedRecords'));
                //return view('user.seller-confirmed-order-info');
            }
            // }else{
            //     return view('web.page_not_found');
            // }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }


    public function chart_demo()
    {
        return view('web.demo_chart');
    }
    // --------------------new website---------------------------


    public function not_found(Request $request)
    {
        return view('web.page_not_found');
        // $authenticator = app(Authenticator::class)->bootStateless($request);
        // if ($authenticator->isAuthenticated()) {
        //     echo"otp auth success!";
        //     print_r($authenticator->createSecret());
        // }
    }


    // ------for all need section design here ------------------
    public function utility()
    {
        return view('web.utility');
    }

    // To check entity is verified or not on dashboard page
    public function is_entity_verified($id)
    {
        $entity = entities::where('user_id', $id)->first();
        $entitydocs = businessDocs::where('user_id', $id)->first();
        $related_parties = relatedParties::where('user_id', $id)->first();

        if ((empty($entity->reg_num) || empty($entity->DOB_incorpor) || empty($entity->DOB_incorpor) || empty($entity->contact_num) ||  empty($entity->fund_source) || empty($entity->cap_source) ||
                empty($entity->wealth_source) || empty($entity->share_holds) ||  empty($entity->listed_cntry) || empty($entity->regstrd_cntry) || empty($entity->entity_nature) || empty($entity->appli_purpose) ||
                empty($entity->juris_cntry) || empty($entity->oprt_juris_cntry) || empty($entity->keyAcount_manager) || empty($entity->most_recentMail) || empty($entity->web_address) ||
                empty($entity->fiat_dpstWithdwl) || empty($entity->fiat_currencies) || empty($entity->fiat_currencies)) ||

            (empty($entitydocs->incorp_cert) || empty($entitydocs->partnership_agrnmt) ||  empty($entitydocs->regsterOf_partner) ||  empty($entitydocs->incorp_date) || empty($entitydocs->sanc_questn) ||
                empty($entitydocs->auth_letter) || empty($entitydocs->curnt_oprtiv_status) || empty($entitydocs->aml) || empty($entitydocs->Intermedianes) || empty($entitydocs->SoW) || empty($entitydocs->SoF) ||
                empty($entitydocs->iftrd_othr_behlf) || empty($entitydocs->add_proof) || empty($entitydocs->supmentry) || empty($entitydocs->SoW) || empty($entitydocs->SoF) || empty($entitydocs->iftrd_othr_behlf)) ||

            (empty($related_parties->gen_partnr_info) || empty($related_parties->beneficial_owner) ||  empty($related_parties->sign_controlr) || empty($related_parties->auth_acunt_trade) ||
                empty($related_parties->main_trd_vrfication) || empty($related_parties->letter_auth))
        ) {

            $verificationStatus = 0;
            //  User::where('id', $id)->update(['entity_verified' => $verificationStatus]);

        } else {

            $verificationStatus = 1;
            //  User::where('id', $id)->update(['entity_verified' => $verificationStatus]);
        }

        return $verificationStatus;
    }


    // to update any column value in any table
    public function update_user_column(Request $request)
    {
        //   dd($request->all());
        // $users = Auth::user();
        $updateColumn =  User::where('id', $request->user_id)
            ->update([$request->column => $request->value]);


        if ($updateColumn) {

            return response()->json(['success' => 200, 'column' =>  $request->column, 'columnValue' =>  $request->value]);
        } else {
            return response()->json(['error' => 401]);
        }
    }

    // create normal images of aadhaars both copies
    public function decoeBlob(request $request)
    {

        //   dd($requset->all());
        /*   $image_parts = explode(";base64,", 'data:image/png;base64,AAAFBfj42Pj4');
                     // $image_64 = 'data:image/png;base64,AAAFBfj42Pj4'; //your base64 encoded data
                     $base64_image =  $image_parts ;
                    */

        $base64_image = $request->imageTobeDecoded;
        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            // dd(strpos($base64_image, ',') + 1);
            $data = substr($base64_image, strpos($base64_image, ',') + 1);
            $data = base64_decode($data);

            $newfilenamw = time() . '_' . Auth::user()->id . '.png';
            Storage::disk('public')->put($newfilenamw, $data);
            return response()->json(['status' => 200, 'decodedImage_name' => $newfilenamw]);
            // dd("stored", $newfilenamw);
        }
    }



    public function fill_currencies_by_USD($to, $from,  $amount)
    {
        // $from = 'INR';
        // $to = 'JPY';
        // $amount = '1';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.apilayer.com/fixer/convert?to=" . $to . "&from=" . $from . "&amount=" . $amount,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain",
                "apikey: PDlhA7wWlgUvfXT0lC17IUaK6H3RRPAP"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);
        // print_r(json_decode($response));
        curl_close($curl);
        //   echo $response;
        return json_decode($response);
    }

    public function get_currencies()
    {
        //  die;
        $from = 'USD';
        $amount = '1';

        $to_selected_global_currencies = array('GBP', 'INR', 'JPY', 'EURO');
        // $response = $this->fill_currencies_by_INR( 'EURO', 'INR',  '25' );


        foreach ($to_selected_global_currencies as $to) {
            //  print_r($each_from.'/');

            $response = $this->fill_currencies_by_INR($to, $from,  $amount);
            //   $response = $this->fill_currencies_by_USD( $to_selected_global_currencies , $from,  $amount );
            // $response = json_decode( '{ "success": true, "query": { "from": "INR", "to": "GBP", "amount": 1 }, "info": { "timestamp": 1675838524, "rate": 0.010039 }, "date": "2023-02-08", "result": 0.010039 }');
            //  print_r($response);
            // print_r($response->result);

            //  print_r($response->success);
            $ch = $amount / $response->result;
            //  print_r($amount/$response->result);

            //  $updateColumn =  currencies::where('name', $to_selected_global_currency)->update(['currencyVal_by_INR' => $response->result]);
            $updateColumn =  currencies::where('name', $to)->update(['currencyVal_by_USD' => $ch]);
        }
    }

    public function testcamera()
    {
        return view('user.testcamera');
    }


    public function confirmedOrderInfo(Request $request, $id)
    {

        if (Auth::check()) {
            $url = url()->current();
            $segments = collect(explode('/', $url));
            $lastSegment = $segments->last();

            $checkuserorder = Order::where('id', '=', $lastSegment)->where(function ($query) {
                $query->Where('buyer_id', '=', Auth::user()->id);
            })
                ->first();
            if ($checkuserorder != '') {


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
                return view('user.confirmed-order-info', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords', 'config_data'));
            } else {
                return view('web.page_not_found');
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function confirmed_order_info(Request $request)
    {
        if (Auth::check()) {
            //session_start();
            $allajaxdata = $request->all();

            $url = url()->current();
            $segments = collect(explode('/', $url));
            $lastSegment = $segments->last();
            $orderid = $lastSegment;
            //print_r($_SESSION);
            $get_order_data = Order::where('id', $orderid)->where('buyer_id', Auth::user()->id)->first();
            $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id', Auth::user()->id)->first();
            $config_data = config::all();


            $accept_by_buyer_orderid = $request->accept_by_buyer_orderid;
            $cancel_by_buyer_orderid = $request->cancel_by_buyer_orderid;

            // print_r($accept_by_buyer_orderid);
            if (!empty($accept_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $accept_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } elseif (!empty($cancel_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $cancel_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } else {



                $orderid = session('orderid') ?? null;
                //print_r($orderid);die();
                if (!$orderid) {
                    return view('web.page_not_found');
                    //abort(404, 'Record not found');
                }

                $get_order_data = Order::where('id', $orderid)->where('buyer_id', Auth::user()->id)->first();
                // print_r($get_order_data); die();
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
            //echo "<pre>"; print_r($getbuyer_bank_details); die;
            // print_r($get_order_data->buyer_id);
            // $getseller_bank_details=[];

            //print_r($methodtype);
            if ($get_seller_details) {
                //  $getseller_bank_details[] = PaymentMedhods::where('user_id', $get_seller_details->id)->where('deleted_at','=',NULL)->where('method_type',$methodtype)->get();
                $getseller_bank_details = Order::where('seller_id', $get_order_data->seller_id)->where('id', $orderid)->first();
            } else {
                $getseller_bank_details = null;
            }


            //$byer_confirmation_status = $request>all();
            //  echo "<pre>";print_r($allajaxdata);


            if (!empty($get_seller_details)) {
                $seller_details = $get_seller_details;
            } else {
                $seller_details = '';
            }
            return view('user.confirmed-order-info', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords', 'config_data'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }


    public function CheckOrder(Request $request)
    {

        // print_r($request->order_id);

        $orderid = $request->order_id;

        $checkBuyer = Order::where('id', $orderid)
            ->where(function ($query) {
                $query->where('buyer_id', '=', Auth::user()->id)
                    ->orWhere('seller_id', '=', Auth::user()->id);
            })
            //->where('buyer_id', Auth::user()->id)
            ->first();
        if (!empty($checkBuyer)) {
            return response()->json(['message' => 'success', 'rdata' => 1, 'buyerDetail' => $checkBuyer]);
        } else {
            return response()->json(['message' => 'success', 'rdata' => 0, 'buyerDetail' => $checkBuyer]);
        }
    }
    public function sellerCheckOrder(Request $request)
    {
        $orderid = $request->order_id;
        $trader_id = Auth::user()->id;
        $checkSeller = Order::where('id', $orderid)
            //->where('seller_id', Auth::user()->id)
            // ->where(function($query) {
            //         $query->where('buyer_id', Auth::user()->id)
            //               ->orWhere('seller_id', Auth::user()->id);
            //  })
            ->where(function ($query) use ($trader_id) {
                $query->where('buyer_id', $trader_id)
                    ->orWhere('seller_id', $trader_id);
            })
            ->first();
        if (!empty($checkSeller)) {
            return response()->json(['message' => 'success', 'rdata' => 1, 'sellerDetail' => $checkSeller]);
        } else {
            return response()->json(['message' => 'success', 'rdata' => 0, 'sellerDetail' => $checkSeller]);
        }
    }

    public function buyer_confirmation_status(Request $request)
    {
        $allajaxdata = $request->all();
        //$orderid =   $request->input('orderid');
        //dd($orderid);
        // print_r($allajaxdata);
        $validatedData = Validator::make($request->all(), [
            'checkbox' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,png'

        ], [
            'file.required' => 'Payment proof required.',
            'file.mimes' => 'Olny jpg,jpeg,png image type allowed.',

        ]);


        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()], 401);
        } else {

            // $checkbox_data = 'Your payment has been reecived , the asset have been sent to your account.';

            $checkbox_data = 'You have marked the order as paid, please wait for seller to confirm and release the asset.';


            //$paymentData = $checkbox_data . ',' . $request->file('file')->store('public/payments/buyer_confirmation');

            //  image compression
            if ($request->file('file')->isValid()) {
                // dd($request->all());
                $file = $request->file('file');
                $tempPath = $file->getPathname();
                //	print_r('trmp'.'/'.$tempPath);
                $imageName = $file->getClientOriginalName();
                $uploadTo = "storage/app/payments/buyer_confirmation";
                $prod = date("Yndhis");
                $extension = $file->getClientOriginalExtension();
                $imageName = $prod . "." . $extension;
                $basename = basename($imageName);
                $originalPath = $uploadTo . '/' . $basename;
                //  print_r($originalPath);
                $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
                $msg = $this->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);
                // return '<img src="'.url('/').'/'.$originalPath.'" class="chat_img" />';
                $paymentData = '<p><img src="' . url('/' . $originalPath) . '" class="img-thumbnail" width="200" height="160" /></p><br />' . $checkbox_data;
            }
            // end image compression

            // $target_path = $request->file('file')->store('/payments/buyer_confirmation');
            // $paymentData ='<p><img src="'. url('storage/app/'.$target_path).'" class="img-thumbnail" width="200" height="160" /></p><br />' . $checkbox_data;

            $orderid = $request->input('orderid');

            $get_order_data = Order::where('id', $orderid)->first();

            $to_user_id = $get_order_data->seller_id;
            $from_user_id = $get_order_data->buyer_id;
            $payment_status = new Chat;
            $payment_status->to_user_id = $to_user_id;
            $payment_status->from_user_id = $from_user_id;
            $payment_status->order_id = $orderid;
            $payment_status->chat_message = $paymentData;
            $payment_status->status = 0;


            $buyer_confirmation_status = 1;

            session(['buyer_confirmation_status' => $buyer_confirmation_status]);

            $update_buyer_confirmation_status = Order::where('id', $orderid)->update(['buyer_confirmation_status' => $buyer_confirmation_status]);

            $payment_status->save();

            $ifOrderUpdated = Order::where('id', $orderid)
                ->where('order_status', 1)
                ->where('buyer_confirmation_status', 1)
                ->count();




            if ($ifOrderUpdated > 0) {
                //19042023  $this->p2p_wallet_entry($orderid);
                // escrow account insert or update
                $countEscrowRecord = Escrow::where('orderId', $orderid)->count();
                $escrow = new Escrow;
                if ($countEscrowRecord < 1) {

                    $escrow->orderId = $orderid;
                    $escrow->sellerId = $get_order_data->seller_id;
                    $escrow->buyerId = $get_order_data->buyer_id;
                    $escrow->tradeCoins = $get_order_data->total_crypto_value;
                    $escrow->tradeCurrencyValue    = $get_order_data->domestic_currency_value;
                    $escrow->paymentMode = $get_order_data->payment_method_id;
                    $escrow->orderStatus = 0;
                    // $escrow->coinReleased = 0;
                    $escrow->paymentReleased = 1;
                    $escrow->comments = json_encode(array('buyer_comment' => 'payment released from buyer'));
                    $escrow->save();
                } else {
                    $get_countEscrowRecord = Escrow::where('orderId', $orderid)->first();
                    $update_comment = json_decode($get_countEscrowRecord->comments);
                    $new_comment_data = json_encode(['buyer_comment' => $update_comment,     'buyer_ReComment' => 'payment released from buyer']);

                    $update_order_InEscrow_table = Escrow::where('orderId', $orderid)->update([

                        'paymentReleased' => 1,
                        'comments' => $new_comment_data,
                        'orderStatus' => 1,

                    ]);
                }


                // end escrow account insert or update
                $count_Escrow_toConfirm = Escrow::where('orderId', $orderid)->where('coinReleased', 1)->where('paymentReleased', 1)->where('orderStatus', 1)->count();
                $get_Escrow_toConfirm = Escrow::where('orderId', $orderid)->where('coinReleased', 1)->where('paymentReleased', 1)->where('orderStatus', 1)->first();
                if ($count_Escrow_toConfirm == 1) {
                    $delete_order_fromEscrow_table = Escrow::where('orderId', $orderid)->delete();

                    // update p2p BMK wallet for buyer
                    //         if($get_order_data->crypto_type == 'BMK'){

                    //           $base_url=env('BMK_API_BASE_URL');
                    //              $BmkApiController = new BmkApiController;
                    //             $url = $base_url.'/buy_bmk_coin';
                    //             $user_wallet_addrs=User::where('id', Auth::user()->id)->first();
                    //             $params = array('wallet_address'=>$user_wallet_addrs->bmk_wallet_address,'no_of_coin'=>$get_order_data->total_crypto_value,'type'=>3, 'mode'=>1);
                    //             $api_result = $BmkApiController->verify_api($url,$params);
                    //                 // print_r($params);
                    //                 // print_r($api_result);
                    //                 // print_r($user_wallet_addrs->bmk_wallet_address);
                    //                 // die;
                    //         }

                    //   if($api_result){
                    //     return response()->json(['message' => 'Payment confirmed successfully']);
                    //   }else{
                    //       return response()->json(['message' => 'BMK wallet cannot be confirmed ']);
                    //   }

                    if ($get_order_data->crypto_type == 'BMK') {
                        $base_url = env('BMK_API_BASE_URL');
                        $BmkApiController = new BmkApiController;
                        $url = $base_url . '/buy_bmk_coin';
                        $seller_wallet_addrs = User::where('id', $get_Escrow_toConfirm->sellerId)->first();
                        $params_seller = array('wallet_address' => $seller_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $get_order_data->total_crypto_value, 'type' => 4, 'mode' => 1);
                        $api_result_seller = $BmkApiController->verify_api($url, $params_seller);

                        $buyer_wallet_addrs = User::where('id', $get_Escrow_toConfirm->buyerId)->first();
                        $params_buyer = array('wallet_address' => $buyer_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $get_order_data->total_crypto_value, 'type' => 3, 'mode' => 1);

                        $api_result_buyer = $BmkApiController->verify_api($url, $params_buyer);
                        // print_r($params);
                        // print_r($api_result);
                        // print_r($user_wallet_addrs->bmk_wallet_address);
                        // die;

                    }

                    if ($api_result_seller && $api_result_buyer) {
                        return response()->json(['message' => 'Payment confirmed successfully']);
                    } else {
                        return response()->json(['message' => 'BMK wallet cannot be confirmed!']);
                    }



                    //


                }
            }
        }
    }

    public function p2p_wallet_entry($order_id)
    {


        $find_p2p_order_detail = Order::where('id', $order_id)
            ->where('order_status', 1)
            ->where('buyer_confirmation_status', 1)
            ->where('seller_confirmation_status', 1)
            ->first();

        //print_r($find_p2p_order_detail);

        if ($find_p2p_order_detail->buyer_id) {
            // $typeOfCoin = 1;
            // $transaction_status= 1;
            $comment = $find_p2p_order_detail->crypto_type . ' Purchased using P2P';
            //   $check_p2p_order_exist = marketWallet::where('order_id',$order_id)->where('user_id', $find_p2p_order_detail->buyer_id)->count();
            //   if($check_p2p_order_exist < 1){
            $p2p_wallet_entry = new marketWallet;
            $p2p_wallet_entry->user_id = $find_p2p_order_detail->buyer_id;
            $p2p_wallet_entry->order_id = $find_p2p_order_detail->id;
            $p2p_wallet_entry->no_of_coin  = $find_p2p_order_detail->total_crypto_value;

            $p2p_wallet_entry->type_of_coin = 1;
            $p2p_wallet_entry->transaction_status = 1;
            $p2p_wallet_entry->coin_type = 3;
            $p2p_wallet_entry->coin_name = $find_p2p_order_detail->crypto_type;
            $p2p_wallet_entry->comments = $comment;
            $p2p_wallet_entry->p2p_credit_date = $find_p2p_order_detail->updated_at;
            $p2p_wallet_entry->save();
            //  }
        }

        if ($find_p2p_order_detail->seller_id) {
            // $typeOfCoin = 0;
            // $transaction_status= 0;
            $comment_a = $find_p2p_order_detail->crypto_type . ' Sold using P2P';
            //    $check_p2p_order_exist = marketWallet::where('order_id',$order_id)->where('user_id', $find_p2p_order_detail->seller_id)->count();
            //    if($check_p2p_order_exist < 1){
            $p2p_wallet_entry = new marketWallet;
            $p2p_wallet_entry->user_id = $find_p2p_order_detail->seller_id;
            $p2p_wallet_entry->order_id = $find_p2p_order_detail->id;
            $p2p_wallet_entry->no_of_coin  = $find_p2p_order_detail->total_crypto_value;

            $p2p_wallet_entry->type_of_coin = 0;
            $p2p_wallet_entry->transaction_status = 0;
            $p2p_wallet_entry->coin_type = 3;
            $p2p_wallet_entry->coin_name = $find_p2p_order_detail->crypto_type;
            $p2p_wallet_entry->comments = $comment_a;
            $p2p_wallet_entry->p2p_credit_date = $find_p2p_order_detail->updated_at;
            $p2p_wallet_entry->save();
            //    }
        }
    }

    public function seller_confirmation_status(Request $request)
    {
        $allajaxdata = $request->all();
        //dd($allajaxdata);
        //print_r($allajaxdata);
        $validatedData = Validator::make($request->all(), [
            'checkbox' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,png'
        ], [
            'file.required' => 'Payment proof required.',
            'file.mimes' => 'Olny jpg,jpeg,png image type allowed.',

        ]);

        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()], 401);
        } else {
            $checkbox_data = 'Your payment has been reecived , the asset have been sent to your account.';
            //$paymentData = $checkbox_data . ',' . $request->file('file')->store('public/payments/buyer_confirmation');

            //  image compression
            if ($request->file('file')->isValid()) {
                // dd($request->all());
                $file = $request->file('file');
                $tempPath = $file->getPathname();
                //	print_r('trmp'.'/'.$tempPath);
                $imageName = $file->getClientOriginalName();
                $uploadTo = "storage/app/payments/seller_confirmation";
                $prod = date("Yndhis");
                $extension = $file->getClientOriginalExtension();
                $imageName = $prod . "." . $extension;
                $basename = basename($imageName);
                $originalPath = $uploadTo . '/' . $basename;
                // print_r($originalPath);
                $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
                $msg = $this->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);
                // return '<img src="'.url('/').'/'.$originalPath.'" class="chat_img" />';
                $paymentData = '<p><img src="' . url('/' . $originalPath) . '" class="img-thumbnail" width="200" height="160" /></p><br />' . $checkbox_data;
            }
            // end image compression
            // $target_path = $request->file('file')->store('/payments/buyer_confirmation');
            // $paymentData ='<p><img src="'. url('storage/app/'.$target_path).'" class="img-thumbnail" width="200" height="160" /></p><br />' . $checkbox_data;

            $orderid = $request->orderid;;

            $get_order_data = Order::where('id', $orderid)->first();
            // dd($get_order_data);
            $to_user_id = $get_order_data->seller_id;
            $from_user_id = $get_order_data->buyer_id;
            $payment_status = new Chat;
            $payment_status->to_user_id = $to_user_id;
            $payment_status->from_user_id = $from_user_id;
            $payment_status->order_id = $orderid;
            $payment_status->chat_message = $paymentData;
            $payment_status->status = 0;
            $payment_status->save();
            $seller_confirmation_status = 1;
            session(['seller_confirmation_status' => $seller_confirmation_status]);
            $update_seller_confirmation_status = Order::where('id', $orderid)->update(['seller_confirmation_status' => $seller_confirmation_status]);


            $ifOrderUpdated = Order::where('id', $orderid)
                ->where('order_status', 1)
                ->where('buyer_confirmation_status', 1)
                ->where('seller_confirmation_status', 1)
                ->count();




            if ($ifOrderUpdated > 0) {

                Postads::where('adsid', $get_order_data->adsid)->update(['status' => 2]);

                // escrow account insert or update
                $countEscrowRecord = Escrow::where('orderId', $orderid)->count();
                $escrow = new Escrow;
                if ($countEscrowRecord < 1) {

                    $escrow->orderId = $orderid;
                    $escrow->sellerId = $get_order_data->seller_id;
                    $escrow->buyerId = $get_order_data->buyer_id;
                    $escrow->tradeCoins = $get_order_data->domestic_currency_value;
                    $escrow->tradeCurrencyValue    = $get_order_data->total_crypto_value;
                    $escrow->paymentMode = $get_order_data->payment_method_id;
                    $escrow->orderStatus = 0;
                    $escrow->coinReleased = 1;
                    // $escrow->paymentReleased = 0;
                    $escrow->comments = json_encode(array('seller_comment' => 'coins released from seller'));
                    $escrow->save();
                } else {
                    $get_countEscrowRecord = Escrow::where('orderId', $orderid)->first();
                    $update_comment = json_decode($get_countEscrowRecord->comments);
                    $new_comment_data = json_encode(['seller_comment' => $update_comment,     'seller_ReComment' => 'coins released from seller']);

                    $update_order_InEscrow_table = Escrow::where('orderId', $orderid)->update([

                        'coinReleased' => 1,
                        'comments' => $new_comment_data,
                        'orderStatus' => 1,

                    ]);
                }


                // end escrow account insert or update

                $count_Escrow_toConfirm = Escrow::where('orderId', $orderid)->where('coinReleased', 1)->where('paymentReleased', 1)->where('orderStatus', 1)->count();
                $get_Escrow_toConfirm = Escrow::where('orderId', $orderid)->where('coinReleased', 1)->where('paymentReleased', 1)->where('orderStatus', 1)->first();

                if ($count_Escrow_toConfirm == 1) {
                    $delete_order_fromEscrow_table = Escrow::where('orderId', $orderid)->delete();
                    $this->p2p_wallet_entry($orderid);

                    // update p2p BMK wallet for seller
                    if ($get_order_data->crypto_type == 'BMK') {
                        $base_url = env('BMK_API_BASE_URL');
                        $BmkApiController = new BmkApiController;
                        $url = $base_url . '/buy_bmk_coin';
                        $seller_wallet_addrs = User::where('id', $get_Escrow_toConfirm->sellerId)->first();
                        $params_seller = array('wallet_address' => $seller_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $get_order_data->total_crypto_value, 'type' => 4, 'mode' => 1);
                        $api_result_seller = $BmkApiController->verify_api($url, $params_seller);

                        $buyer_wallet_addrs = User::where('id', $get_Escrow_toConfirm->buyerId)->first();
                        $params_buyer = array('wallet_address' => $buyer_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $get_order_data->total_crypto_value, 'type' => 3, 'mode' => 1);

                        $api_result_buyer = $BmkApiController->verify_api($url, $params_buyer);
                        // print_r($params);
                        // print_r($api_result);
                        // print_r($user_wallet_addrs->bmk_wallet_address);
                        // die;

                    }

                    if ($api_result_seller && $api_result_buyer) {
                        return response()->json(['message' => 'Payment confirmed successfully']);
                    } else {
                        return response()->json(['message' => 'BMK wallet cannot be confirmed!']);
                    }

                    //

                }
            }
        }
    }

    public function request_crypto_transfer(Request $request)
    {
        $allajaxdata = $request->all();
        //print_r($allajaxdata);
        $orderid = session('orderid');

        $get_order_data = Order::where('id', $orderid)->first();
        $message = 'I have done payment, please release assets';
        if (!empty($allajaxdata)) {
            $to_user_id = $get_order_data->seller_id;
            $from_user_id = $get_order_data->buyer_id;
            $payment_status = new Chat;
            $payment_status->to_user_id = $to_user_id;
            $payment_status->from_user_id = $from_user_id;
            $payment_status->order_id = $orderid;
            $payment_status->chat_message = $message;
            $payment_status->status = 0;
            $payment_status->save();
        }

        return response()->json(['message' => 'Request crypto transfer message sent successfully']);
    }

    public function seller_ratings(Request $request)
    {
        $allajaxdata = $request->all();
        //print_r($allajaxdata);
        if ($request->rating_type == 'PositiveRating') {
            $PositiveRating = 1;
        } else {
            $PositiveRating = 0;
        }

        if ($request->rating_type == 'NegativeRating') {
            $NegativeRating = 2;
        } else {
            $NegativeRating = 0;
        }

        $orderid = session('orderid');
        $get_order_data = Order::where('id', $orderid)->first();

        $seller_id = $request->seller_id;
        //$buyer_id = $get_order_data->buyer_id;
        $checkbuyer = Tradingratings::where('seller_id', $seller_id)->where('order_id', $orderid)->first();
        if ($checkbuyer == null) {
            $rating = new Tradingratings;
            $rating->order_id = $orderid;
            //$rating->buyer_id =$buyer_id;
            $rating->seller_id = $seller_id;
            $rating->positive_rating = $PositiveRating;
            $rating->negative_rating = $NegativeRating;
            $rating->created_at = now();
            $rating->updated_at = now();
            $rating->save();

            return response()->json(['message' => 'Rating submited successfully']);
        } else {
            //$buyer_id = $request->buyer_id;
            if ($request->rating_type == 'PositiveRating') {
                $update = Tradingratings::where('seller_id', $seller_id)->where('order_id', $orderid)->update(['positive_rating' => $PositiveRating, 'negative_rating' => $NegativeRating]);
            }
            if ($request->rating_type == 'NegativeRating') {
                $update = Tradingratings::where('seller_id', $seller_id)->where('order_id', $orderid)->update(['negative_rating' => $NegativeRating, 'positive_rating' => $PositiveRating]);
            }
            if ($update) {
                return response()->json(['message' => 'Rating submiteupdated successfully', 'rateType' => $request->rating_type]);
            } else {
                return response()->json(['message' => 'somethong Went wrong!']);
            }
        }
    }

    public function buyer_ratings(Request $request)
    {
        $allajaxdata = $request->all();
        // print_r($allajaxdata);
        if ($request->rating_type == 'PositiveRating') {
            $PositiveRating = 1;
        } else {
            $PositiveRating = 0;
        }

        if ($request->rating_type == 'NegativeRating') {
            $NegativeRating = 2;
        } else {
            $NegativeRating = 0;
        }

        $orderid = session('orderid');
        $get_order_data = Order::where('id', $orderid)->first();


        $buyer_id = $request->buyer_id;

        $checkbuyer = Tradingratings::where('buyer_id', $buyer_id)->where('order_id', $orderid)->first();
        if ($checkbuyer == null) {
            $rating = new Tradingratings;
            $rating->order_id = $orderid;
            $rating->buyer_id = $buyer_id;
            //$rating->seller_id =$seller_id;
            $rating->positive_rating = $PositiveRating;
            $rating->negative_rating = $NegativeRating;
            $rating->created_at = now();
            $rating->updated_at = now();
            $rating->save();

            return response()->json(['message' => 'Rating submited successfully']);
        } else {
            //$buyer_id = $request->buyer_id;
            if ($request->rating_type == 'PositiveRating') {
                $update = Tradingratings::where('buyer_id', $buyer_id)->where('order_id', $orderid)->update(['positive_rating' => $PositiveRating, 'negative_rating' => $NegativeRating]);
            }
            if ($request->rating_type == 'NegativeRating') {
                $update = Tradingratings::where('buyer_id', $buyer_id)->where('order_id', $orderid)->update(['negative_rating' => $NegativeRating, 'positive_rating' => $PositiveRating]);
            }
            if ($update) {
                return response()->json(['message' => 'Rating submited successfully', 'rateType' => $request->rating_type]);
            } else {
                return response()->json(['message' => 'somethong Went wrong!']);
            }
        }
    }

    public function buyer_sell_request()
    {
        if (Auth::check()) {
            $all_sell_request = Order::where('order_status', 0)->get();
            return view('user.buyer_sell_request', compact('all_sell_request'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function buyer_sell_request_accept(Request $request)
    {
        $data_id = $request->id;
        $cancel_id = $request->cancel_id;
        $usercancel_id = $request->user_cancel_id;
        $orderId = $request->order_id;
        $paymentMethodID = $request->paymentMethodID;
        $paymentMethods = explode(' ', $paymentMethodID);
        /*
        |======================================|
        |==== Commented start on 03-05-2023====|
        |======================================|
        */

        // if(!empty($data_id)){
        //     $_SESSION['orderid'] = $data_id;
        // }
        /*
        |====================================|
        |==== Commented end on 03-05-2023====|
        |====================================|
        */

        if ($data_id) {
            $getbuyerdetails = Postads::where('adsid', $data_id)->where('status', 1)->latest()->first();
            if ($getbuyerdetails->ordertype == 0) {
                $buyer_id = $getbuyerdetails->userid; // Coin buy by buyer
                $seller_id =  Auth::user()->id;
                $payment_methods = json_decode($getbuyerdetails->payment_method);
                $payment_method_type = [];
                foreach ($payment_methods as $key => $value) {
                    $method_id =  json_decode($value)->id;
                    $payment_method = PaymentMedhods::where('id', $method_id)->first();
                    if ($payment_method) {
                        $payment_method_type[] = $payment_method;
                        $method_ids = [];
                        $method_type = [];
                        foreach ($payment_method_type as $method) {
                            $method_ids[] =  json_decode($method)->id;
                            $method_type[] =  json_decode($method)->method_type;
                        }
                    }
                }
                // ======================== Extra code
                $payment_account_details_for_buyer = PaymentMedhods::where('user_id', $buyer_id)
                    ->whereIn('id', $method_ids)
                    ->where('deleted_at', null)
                    ->get();
                // ============================

                $seller_country = Auth::user()->country;
                $buyer_country = User::where('id', $buyer_id)->first();
                $buyer_country_name = $buyer_country->country;
                // ======================== Extra code
                $payment_account_details_for_seller = PaymentMedhods::where('user_id', $seller_id)
                    ->whereIn('method_type', $method_type)
                    ->where('deleted_at', '=', NULL)
                    ->get();
                // ============================

            } else {
                $buyer_id = Auth::user()->id;
                $seller_id = $getbuyerdetails->userid;
                $payment_methods = json_decode($getbuyerdetails->payment_method);
                $payment_method_type = [];
                foreach ($payment_methods as $key => $value) {
                    $method_id =  json_decode($value)->id;
                    $payment_method = PaymentMedhods::where('id', $method_id)->first();
                    if ($payment_method) {
                        $payment_method_type[] = $payment_method;
                        $method_ids = [];
                        $method_type = [];
                        foreach ($payment_method_type as $method) {
                            $method_ids[] =  json_decode($method)->id;
                            $method_type[] =  json_decode($method)->method_type;
                        }
                    }
                }
                // dd($method_type);

                // ======================== Extra code
                $payment_account_details_for_buyer = PaymentMedhods::where('user_id', $seller_id)
                    ->whereIn('id', $method_ids)
                    ->where('deleted_at', null)
                    ->get();
                // ============================

                $buyer_country_name = Auth::user()->country;
                $seller_country_name = User::where('id', $seller_id)->first();
                $seller_country =  $seller_country_name->country;

                // ======================== Extra code
                $payment_account_details_for_seller = PaymentMedhods::where('user_id', $buyer_id)
                    ->whereIn('method_type', $method_type)
                    ->where('deleted_at', '=', NULL)
                    ->get(); // ============================
            }

            $order = new Order;
            $order->buyer_id = $buyer_id;
            $order->adsid = $data_id;
            $order->order_id = mt_rand(1000000000, 9999999999);;
            $order->buyer_country = $buyer_country_name;
            $order->crypto_type = $getbuyerdetails->cryptoname;
            $order->total_crypto_value = $getbuyerdetails->total_amount;
            $order->domestic_currency_value = $getbuyerdetails->cryptovalue_in_domestictype;
            $order->domestic_currency_type = $getbuyerdetails->faithid;
            $order->payment_method_id = $getbuyerdetails->payment_method;
            $order->payment_bank_id = $getbuyerdetails->payment_method;
            $order->payment_account_details_for_buyer = json_encode($payment_account_details_for_buyer);
            $order->crypto_current_value = $getbuyerdetails->cryptorateinusd;
            $order->inr_value_in_usd = $getbuyerdetails->currencyrateinusd;
            $order->current_crypto_in_inr = (($getbuyerdetails->cryptorateinusd) / ($getbuyerdetails->cryptovalue_in_domestictype));
            $order->order_status = 1;
            $order->seller_country = $seller_country;
            $order->seller_id = $seller_id;
            $order->order_status = 1;
            //  $order-> order_accept_action= 1;
            $order->payment_account_details_for_seller = json_encode($payment_account_details_for_seller);
            $order->payment_time_limit = $getbuyerdetails->payment_time_limit;
            $order->ordertype = $getbuyerdetails->ordertype;
            $order->created_at = now();
            $order->updated_at = now();
            $order->save();

            $lastId = DB::getPdo()->lastInsertId();

            if (!empty($lastId)) {
                $orderdata =  Order::where('id', $lastId)->latest()->first();
                $buyer = User::where('id', $getbuyerdetails->userid)->first();
                $notification_category_id = NotificationCategory::where('id', 2)->first();
                $orderstatus = 1;
                $seller_confirmation_status = 0;
                $buyer_confirmation_status = 0;
                $order_accept_action = 1;
                $orderId = $lastId;
                $buyer_id = $getbuyerdetails->userid;
                $seller_id = $seller_id;
                $buyer->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $buyer_id, $seller_id));

                session(['orderid' => $lastId]);

                // if($getbuyerdetails->auto_replay != ''){
                //     $autoreplay= $getbuyerdetails->auto_replay;
                // }else{
                //     $autoreplay= '';
                // }

                if ($getbuyerdetails->ordertype == 1) {
                    $to_user_id = Auth::user()->id;
                    $from_user_id = $getbuyerdetails->userid;
                }

                if ($getbuyerdetails->ordertype == 0) {
                    $to_user_id = $getbuyerdetails->userid;
                    $from_user_id =  Auth::user()->id;
                }
                if (!empty($getbuyerdetails->auto_replay)) {
                    $chat = new Chat;
                    $chat->to_user_id = $to_user_id;
                    $chat->from_user_id = $from_user_id;
                    $chat->order_id = $lastId;
                    $chat->chat_message = $getbuyerdetails->auto_replay;
                    $chat->status = 0;
                    $chat->save();
                }
                return response()->json(['order_data' => $orderdata]);
            }


            //   $inserted_data_conf_order = array(

            //         'buyer_id' =>intval($getbuyerdetails->userid),
            //         'adsid' =>$data_id ,
            //         'order_id'=>null,
            //         'buyer_country'=>$buyer_country_name,
            //         'crypto_type' =>$getbuyerdetails->cryptoname,
            //         'total_crypto_value' =>$getbuyerdetails->total_amount,
            //         'domestic_currency_value' =>$getbuyerdetails->domestic_currency_value,
            //         'domestic_currency_type' =>$getbuyerdetails->faithid,
            //         'payment_method_id' =>$getbuyerdetails->payment_method,
            //         'payment_bank_id' =>$getbuyerdetails->payment_method,
            //         'payment_account_details_for_buyer'=>$getbuyerdetails->payment_method,
            //         'crypto_current_value' =>$request->cryptorateinusd ,
            //         'inr_value_in_usd' =>$request->currencyrateinusd ,
            //         'current_crypto_in_inr' =>$request->domestic_currency_value ,
            //         'order_status' =>1,
            //         'seller_country'=>$seller_country,
            //         'seller_id'=>$sellerid,
            //         'order_status'=>1,
            //         'order_accept_action'=>1,
            //         'payment_account_details_for_seller'=>json_encode($payment_account_details_for_seller),
            //         'created_at' =>now(),
            //         'updated_at'=>now(),
            //   );

            //dd($inserted_data_conf_order);

            /*
            |======================================|
            |==== Commented start on 03-05-2023====|
            |======================================|
            */
            // $inserted_data_conf_order = [
            //   'seller_country'=>$seller_country,
            //   'seller_id'=>$sellerid,
            //   'order_status'=>1,
            //   'order_accept_action'=>1,
            //   'updated_at'=>now(),
            //   'payment_account_details_for_seller'=>json_encode($payment_account_details_for_seller),
            //   ];
            /*
            |====================================|
            |==== Commented end on 03-05-2023====|
            |====================================|
            */

            //   $conf_order_data = Order::create($inserted_data_conf_order);
            //   if($conf_order_data){

            //     $orderdata =  Order::where('id', $data_id)->latest()->first();
            //     $order_accept_action = $orderdata->order_accept_action;
            //     $user = auth()->user();
            //     $notification_category_id = NotificationCategory::where('id', 2)->first();
            //     $orderstatus = $orderdata->order_status;
            //     $seller_confirmation_status= $orderdata->seller_confirmation_status;
            //     $buyer_confirmation_status= $orderdata->seller_confirmation_status;
            //     $orderId = $data_id;
            //     if($orderdata->buyer_id != ''){
            //         $buyer_id = $orderdata->buyer_id;
            //     }else{
            //         $buyer_id = '';
            //     }

            //     if($orderdata->seller_id != ''){
            //         $seller_id = $orderdata->seller_id;
            //     }else{
            //         $seller_id = '';
            //     }
            //     if(Auth::user()->on_site_notification_status == 1){
            //         $user->notify(new TradeNotification($orderdata,$notification_category_id,$orderstatus,$seller_confirmation_status,$buyer_confirmation_status, $order_accept_action,$orderId,$buyer_id,$seller_id));
            //     }

            //     return response()->json(['message'=>'success','order_data' => $conf_order_data]);
            //   }else{
            //     return response()->json(['message'=>'error, somthing went wrong']);
            //   }
        }

        if ($cancel_id) {

            $inserted_data_can_order = [

                'order_status' => 2,
                'updated_at' => now(),
            ];

            $can_order_data = Order::where('id', $orderId)->update($inserted_data_can_order);
            if ($can_order_data) {

                $orderdata =  Order::where('id', $orderId)->latest()->first();
                $order_accept_action = $orderdata->order_accept_action;
                $user = auth()->user();
                $notification_category_id = NotificationCategory::where('id', 2)->first();
                $orderstatus = $orderdata->order_status;
                $seller_confirmation_status = $orderdata->seller_confirmation_status;
                $buyer_confirmation_status = $orderdata->seller_confirmation_status;
                $orderId = $orderId;

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

                //$orderstatus=2;
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $buyer_id, $seller_id));
                session()->forget('orderid');
                return response()->json(['message' => 'success', 'order_data' => $can_order_data]);
            } else {
                return response()->json(['message' => 'error, somthing went wrong']);
            }
        }

        if ($usercancel_id) {

            $inserted_data_can_order = [
                'order_status' => 3,
                'updated_at' => now(),
            ];

            $can_order_data = Order::where('id', $orderId)->update($inserted_data_can_order);

            if ($can_order_data) {
                $orderdata =  Order::where('id', $orderId)->latest()->first();
                $order_accept_action = $orderdata->order_accept_action;
                $user = auth()->user();
                $notification_category_id = NotificationCategory::where('id', 2)->first();
                $orderstatus = $orderdata->order_status;
                $seller_confirmation_status = $orderdata->seller_confirmation_status;
                $buyer_confirmation_status = $orderdata->seller_confirmation_status;
                $orderId = $orderId;

                // updating cancelation
                $user_account_activity = new user_account_activity;
                $user_account_activity->user_id = $request->user_cancel_id;
                $user_account_activity->order_id = $request->order_id;
                $user_account_activity->reason_id = $request->reason;
                $user_account_activity->reason_type = $request->reason_type;
                $user_account_activity->save();

                // end updating cancelation

                // check if user cancels the order in same day for 3 times the update as suspended acount if yes then this function changes its buying status as zero.
                $orderid = $orderId;
                $userid = $request->user_cancel_id;

                $if_caceledOrder_today = $this->Crypto_buying_Susspension($orderid, $userid);
                //print_r($if_caceledOrder_today);

                // end check if user cancels the order in same day for 3 times the update as suspended acount

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

                //$orderstatus=2;
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $buyer_id, $seller_id));
                session()->forget('orderid');
                return response()->json(['message' => 'success', 'order_data' => $can_order_data]);
            } else {
                return response()->json(['message' => 'error, somthing went wrong']);
            }
        }
    }

    public function confirmed_ifLoggedinWithEmail_Rediection(Request $request)
    {
        //  echo 'beta';
        $data = $this->hideEmailAddress(session('email_id'));
        return view('auth.request_login_email_otp', compact('data'));
    }

    public function confirmed_ifLoggedinWithPhone_Rediection(Request $request)
    {
        //  echo 'beta';
        $data = $this->hideEmailAddress(session('email_id'));
        return view('auth.request_login_phone_otp', compact('data'));
    }

    /* For Chat between buyer and seller */

    public function fetch_user_last_activity($user_id)
    {
        $query = LoginDetails::where(user_id, $user_id)->orderBy('id', 'DESC')->limit(1)->get();
        foreach ($query as $row) {
            return $row->last_activity;
        }
    }

    public function fetch_user()
    {  // session_start();
        $user_id = Auth::user()->id;
        $getunauthusres = User::where('id', '!=', $user_id)->get();
        // print_r($getunauthusres);die();
        //Session::get('user_id');
        $output = '
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="70%">Username</td>
                    <th width="20%">Status</td>
                    <th width="10%">Action</td>
                </tr>
            ';
        foreach ($getunauthusres as $users) {
            $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
            $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
            $user_last_activity = $this->fetch_user_last_activity($users->id);
            if ($user_last_activity > $current_timestamp) {
                $status = '<span class="label label-success">Online</span>';
            } else {
                $status = '<span class="label label-danger">Offline</span>';
            }
            $output .= '
            <tr>
                <td>' . $users->user_name . ' ' . $this->count_unseen_message($users->id, $user_id) . ' ' . $this->fetch_is_type_status($users->id) . '</td>
                <td>' . $status . '</td>
                <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="' . $users->id . '" data-tousername="' . $users->name . '">Start Chat</button></td>
            </tr>
            ';
        }
        $output .= '</table>';
        return $output;
    }


    public function update_last_activity()
    {
        // session_start();
        $login_details_id = session('login_details_id');
        //  print_r($login_details_id);
        $data = array(
            'last_activity'        =>    now()
        );

        $lastactivity = LoginDetails::where('login_details_id', '=', $login_details_id)->update($data);
    }
    public function update_is_type_status(Request $request)
    {
        // session_start();
        $login_details_id = session('login_details_id');
        $data = array(
            'is_type'        =>    $request->is_type
        );

        $lastactivity = LoginDetails::where('login_details_id', '=', $login_details_id)->update($data);
    }

    public function insert_chat(Request $request)
    {
        //  session_start();

        if (!empty($request->uploadFile)) {
            if (is_uploaded_file($request->uploadFile['uploadFile']['tmp_name'])) {
                $ext = pathinfo($request->uploadFile['uploadFile']['name'], PATHINFO_EXTENSION);
                $allow_ext = array('jpg', 'png');
                if (in_array($ext, $allow_ext)) {
                    $_source_path = $request->uploadFile['uploadFile']['tmp_name'];
                    $target_path = 'upload/' . $request->uploadFile['uploadFile']['name'];
                    if (move_uploaded_file($_source_path, $target_path)) {
                        return '<p><img src="' . $target_path . '" class="img-thumbnail" width="200" height="160" /></p><br />';
                    }
                    //echo $ext;
                    $data = array(
                        'to_user_id'        =>    $request->to_user_id,
                        'from_user_id'        =>    Auth::user()->id,
                        'chat_message'        =>     $_source_path,
                        'status'            =>    '1',
                        'order_id'          => $request->order_id,
                    );
                    $insertdatatoChat = Chat::insert($data);
                    if ($insertdatatoChat) {
                        return response()->json(['user_id' => Auth::user()->id, 'to_user_id' => $request->to_user_id], 200);
                    }
                }
            }
        } else {
            $data = array(
                'to_user_id'        =>    $request->to_user_id,
                'from_user_id'        =>    Auth::user()->id,
                'chat_message'        =>    $request->chat_message,
                'status'            =>    '1',
                'order_id'          => $request->order_id,
            );

            $insertdatatoChat = Chat::insert($data);
            if ($insertdatatoChat) {
                return response()->json(['user_id' => Auth::user()->id, 'to_user_id' => $request->to_user_id], 200);
            }
        }

        // $data= array(
        //     'to_user_id'		=>	$request->to_user_id,
        //     'from_user_id'		=>	Session::get('user_id'),
        //     'chat_message'		=>	$request->chat_message,
        //     'status'			=>	'1'
        // );

        // $insertdatatoChat= Chat::insert($data);
        // if($insertdatatoChat){
        //     return response()->json(['user_id' =>Session::get('user_id'),'to_user_id' => $request->to_user_id], 200);
        // }
    }
    // public function fetch_user_chat_history(Request $request){
    //     session_start();
    //     return response()->json(['user_id' =>Session::get('user_id'),'to_user_id' => $request->to_user_id], 200);
    // }

    function fetch_user_chat_history(Request $request)
    {
        // session_start();
        $from_user_id = Auth::user()->id;
        $to_user_id = $request->to_user_id;
        $order_id = $request->order_id;
        $result = Chat::select('*')
            ->where(function ($query) use ($from_user_id, $to_user_id, $order_id) {
                $query->where('from_user_id', $from_user_id)
                    ->where('to_user_id', $to_user_id)->where('order_id', $order_id);
            })
            ->orWhere(function ($query) use ($from_user_id, $to_user_id, $order_id) {
                $query->where('from_user_id', $to_user_id)
                    ->where('to_user_id', $from_user_id)->where('order_id', $order_id);
            })
            //->orderByDesc('timestamp')
            ->get();

        // $output = '<div>';
        // foreach ($result as $row) {
        //     $user_name = '';
        //     $dynamic_background = '';
        //     $chat_message = '';
        //     if ($row->from_user_id == $from_user_id) {
        //         if ($row->status == '2') {
        //             $chat_message = '<em>This message has been removed</em>';
        //             $user_name = '<b class="text-success">You</b>';
        //         } else {
        //             $chat_message = $row->chat_message;
        //             $user_name = '<button type="button" class="remove_chat hide" id="'.$row->chat_message_id.'"></button><b class="text-success hide">You</b>';
        //         }

        //         $dynamic_background = 'background-color:#ffe6e6;';
        //     } else {
        //         if ($row->status == '2') {
        //             $chat_message = '<em>This message has been removed</em>';
        //         } else {
        //             $chat_message = $row->chat_message;
        //         }
        //         //$user_name = '<b class="text-danger">'.get_user_name($row->from_user_id).'</b>';
        //         $dynamic_background = 'background-color:#ffffe6;';
        //     }
        //     $output .= '
        //     <div class="message '. ($from_user_id == Auth::user()->id ? "message-right" : "message-left") . '">


        //     <div class="d-flex align-items-center">
        //                 <div class="chat-time">'.Carbon::parse($row->timestamp)->format('Y-m-d H:i:s').'</div>
        //                 <div class="avatar-wrapper avatar-small">
        //                     <img src="https://www.wealthmark.io/public/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png" alt="avatar" />
        //                 </div>
        //             </div>
        //             <div class="bubble bubble-dark">
        //               '.$user_name.'  '.$chat_message.'
        //         </div>
        //          </div>
        //     ';
        // }
        // $output .= '</div>';

        $output = '<div>';
        foreach ($result as $row) {
            // Check whether the message is from the logged-in user or the other user
            $isFromCurrentUser = $row->from_user_id == Auth::user()->id;

            // Add a CSS class to the message div based on whether the message is from the logged-in user or the other user
            $messageClass = $isFromCurrentUser ? 'message-right' : 'message-left';
            $bubble_dark = $isFromCurrentUser ? 'bubble-dark' : 'bubble-light';

            // Build the message HTML
            $unauth_user = User::where('id', $row->to_user_id)->first();

            if ($unauth_user->avatar == null) {
                $unauth_user_avtar = 'wealthmakr-avatar-7.png';
            } else {
                $unauth_user_avtar = $unauth_user->avatar;
            }

            // Build the message HTML
            if (Auth::user()->avatar == null) {
                $avtaar = 'wealthmakr-avatar-3.png';
            } else {
                $avtaar = Auth::user()->avatar;
            }



            if ($isFromCurrentUser) {
                $Avtar_url = asset("public/assets/img/avatar/" . $avtaar);
                $output .= '<div class="message ' . $messageClass . '">
                        <div class="d-flex align-items-center">

                            <div class="avatar-wrapper avatar-small">
                               <img src="' . $Avtar_url . '" alt="" >
                            </div>
                        </div>
                        <div class="bubble ' . $bubble_dark . '">
                            ' . $row->chat_message . '
                        </div>
                    </div>';
            } else {
                $unauth_user_avtar_url = asset("public/assets/img/avatar/" . $unauth_user_avtar);
                $output .= '<div class="message ' . $messageClass . '">
                        <div class="d-flex align-items-center">

                            <div class="avatar-wrapper avatar-small">
                                 <img src="' . $unauth_user_avtar_url . '" alt="" >
                            </div>
                        </div>
                        <div class="bubble ' . $bubble_dark . '">
                            ' . $row->chat_message . '
                        </div>
                    </div>';
            }
        }
        $output .= '</div>';
        $result = DB::table('chats')
            ->where('from_user_id', $to_user_id)
            ->where('to_user_id', $from_user_id)
            ->where('status', '1')
            ->update(['status' => '0']);
        return $output;
    }
    public function uploadImage(Request $request)
    {
        // session_start();

        // if($request->uploadFile)
        // {
        //     $imageName = time().'.'.$request->uploadFile->extension();
        //     $sourcepath = $request->uploadFile->move(public_path('images'), $imageName);
        //     $path = asset('public/images/'.$imageName);
        //     if($sourcepath){
        //         return '<img src="'.$path.'" class="chat_img" />';
        //     }

        // }
        // image compression
        //     if($request->uploadFile){
        //         print_r($_FILES);
        //           dd($request->all());
        //       	$imageName = $_FILES['uploadFile']['name'];
        // 		$tempPath=$_FILES["uploadFile"]["tmp_name"];
        // 		print_r('trmp'.'/'.$tempPath);
        // 		$uploadTo = "storage/app/public/images/";
        // 		//echo $msg= $this->upload_image($uploadTo,$imageName,$tempPath);

        // 		$prod=date("Yndhis");
        // 		$extension=explode(".", $imageName);
        // 		$imageName=$prod .".".end($extension);
        // 		$basename = basename($imageName);
        // 	    // print_r($uploadTo);

        // 	    $originalPath = $uploadTo.'/'.$basename;
        // 	    	// print_r($originalPath);
        //         $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
        //         $msg= $this->upload_image($uploadTo,$imageName,$tempPath,$imageExt, $originalPath);
        //         // print_r(url('storage/app/public/').$originalPath);
        //          return '<img src="'.url('/').'/'.$originalPath.'" class="chat_img" />';

        //               // $updateUserInformation = User::where('id', Auth::user()->id)->update( ['pan_card_img' => $originalPath   ]);
        //     }


        if ($request->file('uploadFile')->isValid()) {
            // dd($request->all());
            $file = $request->file('uploadFile');
            $tempPath = $file->getPathname();
            //	print_r('trmp'.'/'.$tempPath);
            $imageName = $file->getClientOriginalName();
            $uploadTo = "storage/app/public/images/";
            $prod = date("Yndhis");
            $extension = $file->getClientOriginalExtension();
            $imageName = $prod . "." . $extension;
            $basename = basename($imageName);
            $originalPath = $uploadTo . '/' . $basename;
            //  print_r($originalPath);
            $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
            $msg = $this->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);
            return '<img src="' . url('/') . '/' . $originalPath . '" class="chat_img" />';
        }
        // end image compression
    }

    // public function update_last_activity(Request $request){
    //     session_start();
    //     $update = LoginDetails::where('login_details_id',Session::get('login_details_id'))->update('last_activity',now());
    // }

    public function groupchat(Request $request)
    {
        // session_start();
        if ($request->action = 'insert_data') {
            $data = array(
                'to_user_id'        =>    0,
                'from_user_id'        =>    session('user_id'),
                'chat_message'        =>    $_source_path,
                'status'            =>    '1'
            );

            $insertdatatoChat = Chat::insert($data);
            return '<p><img src="' . $target_path . '" class="img-thumbnail" width="200" height="160" /></p><br />';
        }
        // if($request->action = 'fetch_data'){

        // }
    }

    public function remove_chat(Request $request)
    {
        $chat_message_id = $request->chat_message_id;
        $data = array(
            'status'            =>    '2'
        );

        $query = Chat::where('chat_message_id', $chat_message_id)->update($data);
    }

    public function getIPdetail()
    {

        function getClientIP()
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        $ipaddress = getClientIP();
        function ip_details($ip)
        {
            $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
            $details = json_decode($json, true);
            return $details;
        }
        $details = ip_details($ipaddress);

        $country_code = $details['country'];
        // print_r($details['city']);
        return $details;
    }

    public function check_if_tradeStatus(Request $request)
    {

        // print_r($request->all());
        $records_couning = Order::where('id', $request->order_id)
            ->where('buyer_confirmation_status', '=', 1)
            ->where('seller_confirmation_status', '=', 1)->count();

        return response()->json(['message' => 'found record', 'found_records' => $records_couning]);
    }

    public function check_if_ratingStatus(Request $request)
    {
        // print_r($request->all());
        //   $found_record = Tradingratings::where('order_id', $request->order_id)->orwhere('buyer_id', Auth::user()->id)->orWhere('seller_id', Auth::user()->id)->first();
        $found_record = Tradingratings::where('order_id', '=', $request->order_id)
            ->where(function ($query) {
                $query->where('buyer_id', '=', Auth::user()->id)
                    ->orWhere('seller_id', '=', Auth::user()->id);
            })->first();
        // print_r($found_record);

        return response()->json(['message' => 'found record', 'records' => $found_record]);
    }

    public function request_amount_transfer(Request $request)
    {
        $allajaxdata = $request->all();
        //print_r($allajaxdata);
        $orderid = session('orderid');

        $get_order_data = Order::where('id', $orderid)->first();
        $message = 'Please release amount';
        if (!empty($allajaxdata)) {
            $to_user_id = $get_order_data->seller_id;
            $from_user_id = $get_order_data->buyer_id;
            $payment_status = new Chat;
            $payment_status->to_user_id = $to_user_id;
            $payment_status->from_user_id = $from_user_id;
            $payment_status->order_id = $orderid;
            $payment_status->chat_message = $message;
            $payment_status->status = 0;
            $payment_status->save();
        }

        return response()->json(['message' => 'Request amount transfer message sent successfully']);
    }

    public function delete_rating(Request $request)
    {

        $allajaxdata = $request->all();
        //  print_r($allajaxdata);
        $orderid = $request->orderid;

        $deleterating = Tradingratings::where('order_id', $orderid)->where($request->trader_type, Auth::user()->id)->delete();
        if ($deleterating) {
            return response()->json(['message' => 'Rating deleted'], 200);
        } else {
            return response()->json(['message' => 'Rating cannot be deleted'], 401);
        }
    }

    public function popupUserDetail(Request $request)
    {
        $userDetails = User::where('id', $request->userid)->first();
        return response()->json(['userDetails' => $userDetails], 200);
    }

    public function cancelOrder($id)
    {

        $order = Order::findOrFail($id);
        //print_r($order->order_status);
        if ($order->order_status == 0) {
            $order->order_status = 4;
            $order->save();
            //  unset($_SESSION['orderid']);
            return response()->json(['success' => true]);
        }
        if (($order->order_status == 1) &&  ($order->buyer_confirmation_status === null) && ($order->order_status == 1) && ($order->seller_confirmation_status === null)) {
            $order->order_status = 4;
            $order->save();
            //  unset($_SESSION['orderid']);
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function sellerSidecancleOrder($id)
    {
        $order = Order::findOrFail($id);
        if (($order->order_status == 1) &&  ($order->buyer_confirmation_status === null) && ($order->order_status == 1) && ($order->seller_confirmation_status === null)) {
            $order->order_status = 4;
            $order->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }


    public  function checkOrderStatus($id)
    {

        $order = Order::findOrFail($id);
        //$status = $order->order_status;

        return response()->json(['status' => $order]);
    }

    public function Check_notification(Request $request)
    {

        $orderId = $request->orderid;
        $trader_id = $request->trader_id;
        $user = User::where('id', $trader_id)->first();
        $getorderdata = Order::where('id', $orderId)
            ->where(function ($query) use ($trader_id) {
                $query->where('buyer_id', $trader_id)
                    ->orWhere('seller_id', $trader_id);
            })
            //->where('buyer_id', $trader_id)
            ->first();

        //dd($getorderdata);
        if ($getorderdata->order_status == 1 && $getorderdata->buyer_confirmation_status == 1 &&  $getorderdata->seller_confirmation_status == 1) {
            // order confirmed by seller & buyer both
            $orderdata = Order::where('id', $orderId)->where('buyer_id', $trader_id)->first();
            $orderstatus = $orderdata->order_status;
            $order_accept_action = $orderdata->order_accept_action;
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $buyer_confirmation_status = $orderdata->seller_confirmation_status;

            $user = User::where('id', $trader_id)->first();
            $notification_category_id = NotificationCategory::where('id', 2)->first();

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


            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 3)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $buyer_id, $seller_id));
            }
        }

        if ($getorderdata->order_status == 1 && ($getorderdata->buyer_confirmation_status == null or $getorderdata->buyer_confirmation_status == "") &&  ($getorderdata->seller_confirmation_status == null or $getorderdata->seller_confirmation_status == "")  && $getorderdata->order_accept_action == 1) {
            echo "order accepted by seller";
            $orderdata = Order::where('id', $orderId)->where('buyer_id', $trader_id)->first();
            $orderstatus = $orderdata->order_status;
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $buyer_confirmation_status = $orderdata->buyer_confirmation_status;
            $order_accept_action = $orderdata->order_accept_action;
            $user = User::where('id', $trader_id)->first();
            $notification_category_id = NotificationCategory::where('id', 2)->first();
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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 1)->first();

            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }

        if ($getorderdata->order_status == 1 && $getorderdata->buyer_confirmation_status == 1 &&  ($getorderdata->seller_confirmation_status == null or $getorderdata->seller_confirmation_status == "") && $getorderdata->order_accept_action == 1) {
            echo "payment Realeased by buyer";
            $orderdata = Order::where('id', $orderId)->where('buyer_id', $trader_id)->first();
            $orderstatus = $orderdata->order_status;
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $order_accept_action = $orderdata->order_accept_action;
            $buyer_confirmation_status = $orderdata->buyer_confirmation_status;
            $user = User::where('id', $trader_id)->first();
            $notification_category_id = NotificationCategory::where('id', 2)->first();
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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 2)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }


        if (($getorderdata->order_status == 4)) {
            // payment canceled
            $orderdata = Order::where('id', $orderId)->where(function ($query) use ($trader_id) {
                $query->where('buyer_id', $trader_id)
                    ->orWhere('seller_id', $trader_id);
            })->first();
            $orderstatus = $orderdata->order_status;
            $user = User::where('id', $trader_id)->first();
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $buyer_confirmation_status = $orderdata->buyer_confirmation_status;
            $order_accept_action = $orderdata->order_accept_action;
            $notification_category_id = NotificationCategory::where('id', 2)->first();
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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 4)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }
    }

    public function CheckSellerNotification(Request $request)
    {
        $orderId = $request->orderid;
        $trader_id = $request->trader_id;
        $user = User::where('id', $trader_id)->first();
        $getorderdata = Order::where('id', $orderId)->where(function ($query) use ($trader_id) {
            $query->where('buyer_id', $trader_id)->orWhere('seller_id', $trader_id);
        })->latest()->first();

        if ($getorderdata->order_status == 1 && $getorderdata->buyer_confirmation_status == 1 &&  $getorderdata->seller_confirmation_status == 1) {
            $orderdata = Order::where('id', $orderId)->where(function ($query) use ($trader_id) {
                $query->where('buyer_id', $trader_id)->orWhere('seller_id', $trader_id);
            })->latest()->first();
            $orderstatus = $orderdata->order_status;
            $order_accept_action = $orderdata->order_accept_action;
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $buyer_confirmation_status = $orderdata->seller_confirmation_status;

            $user = User::where('id', $trader_id)->first();
            $notification_category_id = NotificationCategory::where('id', 2)->first();

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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 3)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }
        if ($getorderdata->order_status == 1 && ($getorderdata->buyer_confirmation_status == null or $getorderdata->buyer_confirmation_status == "") &&  ($getorderdata->seller_confirmation_status == null or $getorderdata->seller_confirmation_status == "")  && $getorderdata->order_accept_action == 1) {
            //  echo "order accepted by seller";
            $orderdata = Order::where('id', $orderId)->where('seller_id', $trader_id)->first();
            $orderstatus = $orderdata->order_status;
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $buyer_confirmation_status = $orderdata->buyer_confirmation_status;
            $order_accept_action = $orderdata->order_accept_action;
            $user = User::where('id', $trader_id)->first();
            $notification_category_id = NotificationCategory::where('id', 2)->first();
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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 1)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }

        if ($getorderdata->order_status == 1 && $getorderdata->buyer_confirmation_status == 1 &&  ($getorderdata->seller_confirmation_status == null or $getorderdata->seller_confirmation_status == "") && $getorderdata->order_accept_action == 1) {
            echo "payment Realeased by buyer";
            $orderdata = Order::where('id', $orderId)->where('seller_id', $trader_id)->first();
            $orderstatus = $orderdata->order_status;
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $order_accept_action = $orderdata->order_accept_action;
            $buyer_confirmation_status = $orderdata->buyer_confirmation_status;
            $user = User::where('id', $trader_id)->first();
            $notification_category_id = NotificationCategory::where('id', 2)->first();
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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 2)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }


        if (($getorderdata->order_status == 4)) {
            // payment canceled
            $orderdata = Order::where('id', $orderId)->where('seller_id', $trader_id)->first();
            $orderstatus = $orderdata->order_status;
            $user = User::where('id', $trader_id)->first();
            $seller_confirmation_status = $orderdata->seller_confirmation_status;
            $buyer_confirmation_status = $orderdata->buyer_confirmation_status;
            $order_accept_action = $orderdata->order_accept_action;
            $notification_category_id = NotificationCategory::where('id', 2)->first();
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

            $get_notification = Notification::where('notifiable_id', $trader_id)->where('order_id', $orderId)->where('status', 4)->first();
            if ($get_notification == '' && Auth::user()->on_site_notification_status == 1) {
                $user->notify(new TradeNotification($orderdata, $notification_category_id, $orderstatus, $seller_confirmation_status, $buyer_confirmation_status, $order_accept_action, $orderId, $seller_id, $buyer_id));
            }
        }
    }

    public function set_notification_language(Request $request)
    {


        $langdata = '{"langCode": "' . $request->language . '","langText": "' . $request->language_text . '"}';

        $update_notification_language = User::where('id', $request->user_id)->update(['notification_language' => $langdata]);
        $getUpdatedRec = User::where('id', $request->user_id)->first();
        // print_r($getUpdatedRec);
        if ($getUpdatedRec) {
            return response()->json(['nofificationLanguage' => $getUpdatedRec->notification_language], 200);
        } else {
            return response()->json(['statusMsg' => 'Something Went wrong'], 401);
        }
    }

    public function set_onSiteNotification(Request $request)
    {

        //print_r($request->status);
        $update_onsite_notification_status = User::where('id', $request->user_id)->update(['on_site_notification_status' => $request->status]);
        $getUpdatedRec = User::where('id', $request->user_id)->first();
        // print_r($getUpdatedRec);
        if ($getUpdatedRec) {
            return response()->json(['nofificationstatus' => $getUpdatedRec->on_site_notification_status], 200);
        } else {
            return response()->json(['statusMsg' => 'Something Went wrong'], 401);
        }
    }

    public function set_emailmarketing_status(Request $request)
    {
        //print_r($request->status);
        $update_emailMarketting_status = User::where('id', $request->user_id)->update(['email_marketting_status' => $request->status]);
        $getUpdatedRec = User::where('id', $request->user_id)->first();
        // print_r($getUpdatedRec);
        if ($getUpdatedRec) {
            return response()->json(['nofificationstatus' => $getUpdatedRec->email_marketting_status], 200);
        } else {
            return response()->json(['statusMsg' => 'Something Went wrong'], 401);
        }
    }

    public function notifications()
    {
        if (Auth::check()) {
            $allnotifications = Notification::where('notifiable_id', Auth::user()->id)->where('deleted_at', null)->orderBy('id', 'DESC')->paginate(10);
            $notification_categories = NotificationCategory::all();
            $notificationCount = $allnotifications->count();
            $readnotificationCount = Notification::where('notifiable_id', Auth::user()->id)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->count();
            // echo "<pre>"; print_r($allnotifications); die();
            return view('web.notifications', compact('allnotifications', 'notification_categories', 'notificationCount', 'readnotificationCount'));

            if ($request->ajax()) {
                $allnotifications = Notification::where('notifiable_id', Auth::user()->id)->where('deleted_at', null)->orderBy('id', 'DESC')->paginate(2);
                $notification_categories = NotificationCategory::all();
                return response()->json(['notificationCount' =>  $getNotifiation_count, 'nofification' => $allnotifications], 200);
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function announcements()
    {

        // $all_announcements = Announcement::orderBy('id', 'DESC')->get();
        // $announcements_categories = Announcement_category::all();

        $all_announcements_with_categories = Announcement::join('announcement_categories', 'announcement_categories.id', '=', 'announcements.category_id')
            ->select('announcements.*', 'announcement_categories.*')
            ->get();

        $all_announcements_with_categories_by_id = Announcement::orderBy('id', 'DESC')->take(5)->get();

        // $announcements_Count= $all_announcements->count();
        // return view('web.announcements',compact('all_announcements', 'announcements_categories','announcements_Count', 'all_announcements_with_categories'));
        return view('web.announcements', compact('all_announcements_with_categories', 'all_announcements_with_categories_by_id'));
    }

    // public function search_announcements(Request $request){

    //       $article_id = $request->article_id;

    //       $filtered_annoncements  = Announcement::where('title','LIKE',$article_id)->orderBy('id', 'DESC')->get();

    //       return response()->json(['status' => 1, 'filtered_annoncements' => $filtered_annoncements], 200);
    // }
    public function search_announcements(Request $request)
    {

        $article_id = $request->article_input;

        $filtered_announcements =  Announcement::where('title', 'like', '%' . $article_id . '%')
            ->orderBy('id', 'DESC')
            ->get();


        if ($filtered_announcements->isEmpty()) {
            return response()->json(['status' => 0, 'message' => 'Record not found'], 200);
        }

        return response()->json(['status' => 1, 'filtered_annoncements' => $filtered_announcements], 200);
    }

    public function announcements_topics(Request $request)
    {
        //   $categorySlugs = trim($request->topic);

        $categorySlugs = trim(request()->segment(3));
        //  print_r($categorySlugs);

        $all_announcements = Announcement::orderBy('id', 'DESC')->get();
        $announcements_categories = Announcement_category::all();

        $selected_category_detail  = Announcement_category::where('slugs', $categorySlugs)->first();
        $selected_annoncements_OfSelected_category  = Announcement::where('category_id', $selected_category_detail->id)->orderBy('id', 'DESC')->paginate(10);
        $announcements_Count = $all_announcements->count();
        return view('web.announcement_categories', compact('all_announcements', 'announcements_categories', 'announcements_Count', 'selected_category_detail', 'selected_annoncements_OfSelected_category'));
    }

    public function announcements_articles(Request $request)
    {

        // $articelSlugs = trim($request->article);

        $articelSlugs = trim(request()->segment(3));

        // print_r($articelSlugs);
        // $all_announcements = Announcement::orderBy('id', 'DESC')->paginate(11);

        $announcements_categories = Announcement_category::all();
        //  $selected_annoncements_OfSelected_category  = Announcement::where('category_id', $categoryId)->orderBy('id', 'DESC')->paginate(10);


        $get_announcement = Announcement::where('slugs', $articelSlugs)->orderBy('id', 'DESC')->first();
        //dd($get_announcement);
        $selected_annoncements_category  = Announcement_category::where('id', $get_announcement->category_id)->orderBy('id', 'DESC')->first();
        $all_annoncements_OfSelected_category = Announcement::where('category_id', $selected_annoncements_category->id)->orderBy('id', 'DESC')->paginate(10);
        //  $announcements_Count= $all_announcements->count();

        return view('web.announcement_articles', compact('announcements_categories', 'all_annoncements_OfSelected_category', 'get_announcement'));
    }

    public function getNotifiation(Request $request)
    {
        $userId = Auth::user()->id;
        $notificationId = $request->notificationId;

        $tabid = $request->tabid;
        $pageNumber = $request->pageNumber;
        // For all notification
        if ($request->allnotificationId == 'all') {
            $getNotifiation = Notification::where('notifiable_id', $userId)->where('deleted_at', null)->orderBy('id', 'DESC')->paginate($request->paginating, ['*'], 'page', $request->pageNumber);
            $getNotifiation_count = Notification::where('notifiable_id', $userId)->where('deleted_at', null)->count();
        } else {
            $getNotifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $notificationId)->where('deleted_at', null)->orderBy('id', 'DESC')->paginate($request->paginating, ['*'], 'page', $request->pageNumber);
            $getNotifiation_count = Notification::where('notifiable_id', $userId)->where('notification_category_id', $notificationId)->where('deleted_at', null)->count();

            //   $getNotifiation = $getNotifiations->skip(($page - 1) * $perPage)
            //                   ->take($perPage)
            //                   ->get();
        }


        if ($getNotifiation_count > 0) {
            return response()->json(['notificationCount' =>  $getNotifiation_count, 'nofification' => $getNotifiation], 200);
        } elseif ($getNotifiation_count < 1) {
            return response()->json(['notificationCount' =>  $getNotifiation_count, 'nofification' => $getNotifiation], 200);
        } else {
            return response()->json(['error' => 'Somthing went Wrong!'], 401);
        }
    }

    public function getAjaxNotifiation(Request $request)
    {
        $userId = Auth::user()->id;
        $tabid = $request->tabid;
        $pageNumber = $request->pageNumber;
        $from = $request->from;
        $paginating = $request->paginating;

        if ($request->ajax()) {
            // $getNotifiation = Notification::where('notifiable_id', $userId)
            //     ->where('deleted_at', null)
            //     ->orderBy('id', 'DESC')
            //     ->skip($pageNumber)->take($request->paginating)
            //     ->get();
            // $getNotifiation_count = Notification::where('notifiable_id', $userId)
            //     ->where('deleted_at', null)
            //     ->count();
            // return response()->json([
            //     'notificationCount' =>  $getNotifiation_count,
            //     'notification' => $getNotifiation
            // ], 200);

            $notifications = Notification::orderBy('id', 'desc')->where('deleted_at', null)->paginate($request->paginating, ['*'], 'page', $request->pageNumber);
            return response()->json(['notification' => $notifications]);
        }
    }

    public function getNotificationActivity(Request $request)
    {
        $userId = Auth::user()->id;
        $notificationactivity = $request->notificationactivity;
        $selected_tab = $request->selected_tab;
        $notificationById = $request->notificationById;
        $categoryId = $request->categoryId;
        $allnotification = $request->all;


        // notification count by tab

        if ($allnotification == 'all') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['all_notificationCount' =>  $Count_all_read_Notifiation], 200);
            }
        }

        if ($categoryId == 1 && $categoryId != 2 && $categoryId != 3 && $categoryId != 4) {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', 1)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();


            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['Activities_notification' =>  $Count_all_read_Notifiation], 200);
            }
        }

        if ($categoryId == 2 && $categoryId != 1 && $categoryId != 3 && $categoryId != 4) {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', 2)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['Trade_Notification' =>  $Count_all_read_Notifiation], 200);
            }
        }

        if ($categoryId == 3 && $categoryId != 2 && $categoryId != 1 && $categoryId != 4) {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', 3)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['News_Notification' =>  $Count_all_read_Notifiation], 200);
            }
        }

        if ($categoryId == 4 && $categoryId != 2 && $categoryId != 3 && $categoryId != 1) {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', 4)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['System_Notification' =>  $Count_all_read_Notifiation], 200);
            }
        }





        // For selected tab all
        if ($selected_tab == 'all' && $notificationactivity == 'Hide-read-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 'all' && $notificationactivity == 'Unread-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 'all' && $notificationactivity == 'Mark-as-read-notifications') {
            $user = Auth::user();

            $user->notifications->markAsRead();
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('read_at', '!=', 'null')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['success' => 'You have marked as read all notification!'], 200);
            } else {
                return response()->json(['error' => 'Already you have marked as read all notification!'], 401);
            }
        }

        if ($selected_tab == 'all' && $notificationactivity == 'Clear-all-notifications') {
            $update_deleted_at_notification = Notification::where('notifiable_id', $userId)->update(['deleted_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        // For selected tab Activities

        if ($selected_tab == 1 && $notificationactivity == 'Hide-read-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 1 && $notificationactivity == 'Unread-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 1 && $notificationactivity == 'Mark-as-read-notifications') {
            $update_activity_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['read_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['success' => 'Already you have marked as read all notification!'], 200);
            } else {
                return response()->json(['error' => 'You have marked as read all notification!'], 401);
            }
        }

        if ($selected_tab == 1 && $notificationactivity == 'Clear-all-notifications') {
            $update_deleted_at_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['deleted_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        // For selected tab Trade

        if ($selected_tab == 2 && $notificationactivity == 'Hide-read-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 2 && $notificationactivity == 'Unread-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 2 && $notificationactivity == 'Mark-as-read-notifications') {
            $update_activity_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['read_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['success' => 'Already you have marked as read all notification!'], 200);
            } else {
                return response()->json(['error' => 'You have marked as read all notification!'], 401);
            }
        }

        if ($selected_tab == 2 && $notificationactivity == 'Clear-all-notifications') {
            $update_deleted_at_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['deleted_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        // For selected tab News

        if ($selected_tab == 3 && $notificationactivity == 'Hide-read-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 3 && $notificationactivity == 'Unread-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 3 && $notificationactivity == 'Mark-as-read-notifications') {
            $update_activity_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['read_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['success' => 'Already you have marked as read all notification!'], 200);
            } else {
                return response()->json(['error' => 'You have marked as read all notification!'], 401);
            }
        }

        if ($selected_tab == 3 && $notificationactivity == 'Clear-all-notifications') {
            $update_deleted_at_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['deleted_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        // For selected tab System Message

        if ($selected_tab == 4 && $notificationactivity == 'Hide-read-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 4 && $notificationactivity == 'Unread-notifications') {
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', null)->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        if ($selected_tab == 4 && $notificationactivity == 'Mark-as-read-notifications') {
            $update_activity_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['read_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['success' => 'Already you have marked as read all notification!'], 200);
            } else {
                return response()->json(['error' => 'You have marked as read all notification!'], 401);
            }
        }

        if ($selected_tab == 4 && $notificationactivity == 'Clear-all-notifications') {
            $update_deleted_at_notification = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->update(['deleted_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('notification_category_id', $selected_tab)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }



        ///

        if ($notificationactivity == 'clear_all_web_notifications') {
            $update_deleted_at_notification = Notification::where('notifiable_id', $userId)->update(['deleted_at' => now()]);
            $all_read_Notifiation = Notification::where('notifiable_id', $userId)->where('read_at', '!=', null)->where('deleted_at', '!=', null)->orderBy('id', 'DESC')->get();
            $Count_all_read_Notifiation = $all_read_Notifiation->count();

            if ($Count_all_read_Notifiation > 0) {
                return response()->json(['notificationCount' =>  $Count_all_read_Notifiation, 'nofification' => $all_read_Notifiation], 200);
            } else {
                return response()->json(['error' => 'No record found!']);
            }
        }

        /// Read notificationById
        if ($notificationactivity == 'notificationExpand') {

            //$update_read_at_notification =  auth()->user()->unreadNotifications->where('id', $notificationById)->markAsRead();
            $update_read_at_notification = Notification::where('notifiable_id', $userId)->where('id', $notificationById)->update(['read_at' => now()]);
            $count_notification =  Notification::where('notifiable_id', $userId)->where('id', $notificationById)->count();
            if ($count_notification > 0) {
                return response()->json(['success' => 'ok'], 200);
            } else {
                return response()->json(['error' => 'Somthing went wrong!']);
            }
        }
    }

    public function countNotification()
    {

        $CountNotification = Notification::where('notifiable_id', Auth::user()->id)->where('read_at', null)->where('deleted_at', null)->count();
        return response()->json(['CountNotification' => $CountNotification]);
    }


    public function getLatestNotifiation(Request $request)
    {
        $userId = Auth::user()->id;

        // 30032023    $getNotifiation = Notification::where('notifiable_id', $userId)->where('deleted_at',null)->orderBy('id', 'DESC')->latest('created_at')->take(5)->get();
        $getNotifiation = Notification::where('read_at', null)->where('notifiable_id', $userId)->where('deleted_at', null)->orderBy('id', 'DESC')->latest('created_at')->take(5)->get();
        $getNotifiation_count = Notification::where('notifiable_id', $userId)->where('read_at', null)->where('deleted_at', null)->count();


        if ($getNotifiation_count > 0) {
            return response()->json(['notificationCount' =>  $getNotifiation_count, 'nofification' => $getNotifiation], 200);
        } else {
            return response()->json(['error' => 'Somthing went Wrong!'], 401);
        }
    }

    public function getOrderbyId(Request $request)
    {
        //$first_order = Order::where('adsid',$request->ads_id)->where('order_status', 1)->first();
        $first_order = Order::where('id', $request->orderId)->where('order_status', 1)->first();
        return response()->json(['order_data' => $first_order]);
    }

    public function getOrderDetailbyId(Request $request)
    {

        $first_order = Order::where('id', $request->orderId)->first();
        $orderId = Session::put('orderid', $request->orderId);
        $first_order = Order::where('id', $request->orderId)->first();

        return response()->json(['order_data' => $first_order, 'orderid' => $orderId]);
    }

    public function getAndUpdateOrderDetailbyId(Request $request)
    {

        $updateOrderStatusAsAccepted = Order::where('id', $request->orderId)->update(['order_accept_action' => 1]);

        if ($updateOrderStatusAsAccepted) {

            $first_order = Order::where('id', $request->orderId)->first();
            $orderId = Session::put('orderid', $request->orderId);
            $first_order = Order::where('id', $request->orderId)->first();
        }

        return response()->json(['order_data' => $first_order, 'orderid' => $orderId]);
    }

    public function corporate()
    {
        return view('web.corporate');
    }

    public function wm_gold()
    {
        //   $Intrade = $this->AuthenticateSellerAndBuyerToTrade(801, 24366);
        //     if($Intrade){
        //          return view('web.wm-gold');
        //     }else{
        //       echo $Intrade;
        //     }
        return view('web.wm-gold');
    }

    public function express_page()
    {

        return view('web.p2pTrading_template.express');
    }

    public function group_Page()
    {

        return view('web.p2pTrading_template.groupPage');
    }

    public function block_Page()
    {
        return view('web.p2pTrading_template.BlockPage');
    }

    public function getTotalCoinsInMarketWallet($userID, string $coinName, int  $typeOfCoin,  int $transactionStatus, $status)
    {
        /**
         * Display the specified resource.
         *
         * @param int $coinType The Type of coint Like 1=Staking, 2=Recurring,3=P2P
         * @param int $typeOfCoin The Type of coint Like 0:debit|1:credit
         * @param int $transactionStatus 	0:debit|1:credit
         * @param string $coinName 	BMK, ETH, BTC ect
         * @param int $status 	0=inactive,1=active, 2=block, 3=staking
         * @return total available of coins
         **/
        $query = marketWallet::where('user_id', $userID)
            ->where('coin_name', $coinName)
            //->where('coin_type', $coinType)
            ->where('type_of_coin', $typeOfCoin)
            ->where('transaction_status', $transactionStatus);
        //->where('status', $status)
        //->sum('no_of_coin');
        if (is_array($status)) {
            $query->whereIn('status', $status);
        } else {
            $query->where('status', $status);
        }

        $total = $query->sum('no_of_coin');



        return $total;
    }

    public function getTotalCoinsInMarketWallet_without_login(string $coinName, int  $typeOfCoin,  int $transactionStatus, $status)
    {
        /**
         * Display the specified resource.
         *
         * @param int $coinType The Type of coint Like 1=Staking, 2=Recurring,3=P2P
         * @param int $typeOfCoin The Type of coint Like 0:debit|1:credit
         * @param int $transactionStatus 	0:debit|1:credit
         * @param string $coinName 	BMK, ETH, BTC ect
         * @param int $status 	0=inactive,1=active, 2=block, 3=staking
         * @return total available of coins
         **/
        $query = marketWallet::where('coin_name', $coinName)
            //->where('coin_type', $coinType)
            ->where('type_of_coin', $typeOfCoin)
            ->where('transaction_status', $transactionStatus);
        //->where('status', $status)
        //->sum('no_of_coin');
        if (is_array($status)) {
            $query->whereIn('status', $status);
        } else {
            $query->where('status', $status);
        }

        $total = $query->sum('no_of_coin');



        return $total;
    }

    public function getEscrowHoldCoin($userID)
    {
        //*** now check if coins are pending in escrow table due to not completed order form buyer or seller.
        $find_if_hasEscrowrecord = Escrow::where('sellerId', $userID)->orWhere('buyerId', $userID)->whereNotNull('orderStatus')->count();
        //  print_r($find_if_hasEscrowrecord);
        $held_coins = 0;
        if ($find_if_hasEscrowrecord > 0) {

            $find_coins_held_for_seller =  Escrow::where('sellerId', $userID)->where('orderStatus', 0)->count();
            if ($find_coins_held_for_seller > 0) {
                $find_hold_coins_for_seller =  Escrow::where('sellerId', $userID)->where('orderStatus', 0)->sum('tradeCoins');
                $held_coins = $find_hold_coins_for_seller;
                $data = array('trader_type' => 'seller', 'held_coins' => $held_coins);
                return json_encode($data);
            }
            $find_coins_hold_for_buyer =  Escrow::where('buyerId', $userID)->where('orderStatus', 0)->count();
            if ($find_coins_hold_for_buyer > 0) {
                $find_held_coins_for_buyer =  Escrow::where('buyerId', $userID)->where('orderStatus', 0)->sum('tradeCoins');
                $held_coins = $find_held_coins_for_buyer;

                $data = array('trader_type' => 'buyer', 'held_coins' => $held_coins);
                return json_encode($data);
            }
            //   $find_coins_hold_for_buyer =  Escrow::where('buyerId', $userID)->where('orderStatus', 0)->count();
            //   //print_r($find_coins_hold_for_buyer);
            //         if($find_coins_hold_for_buyer > 0){
            //              $find_held_coins_for_buyer =  Escrow::where('buyerId', $userID)->where('orderStatus', 0)->sum('tradeCoins');
            //              $held_coins = $find_held_coins_for_buyer;

            //             $data = array('trader_type' => 'buyer', 'held_coins' => $held_coins );
            //             return json_encode($data);
            //         }else{
            //             $data = array('trader_type' => 'buyer', 'held_coins' => $held_coins );
            //             return json_encode($data);
            //         }

            //   $find_coins_held_for_seller =  Escrow::where('sellerId', $userID)->where('orderStatus', 0)->count();
            //   print_r($find_coins_held_for_seller);
            //         if($find_coins_held_for_seller > 0){
            //              $find_hold_coins_for_seller =  Escrow::where('sellerId', $userID)->where('orderStatus', 0)->sum('tradeCoins');

            //               $held_coins = $find_hold_coins_for_seller;
            //               $data = array('trader_type' => 'seller', 'held_coins' => $held_coins ) ;
            //                 return json_encode($data);
            //         }else{
            //             $data = array('trader_type' => 'seller', 'held_coins' => $held_coins ) ;
            //             return json_encode($data);
            //         }
        } else {
            $data = array('trader_type' => 'none', 'held_coins' => $held_coins);
            return json_encode($data);
        }


        //*** now check if coins pending in escrow ammount due to not completed order form buyer and seller as well.

    }

    public function getEscrowHoldCoin_without_login()
    {
        //*** now check if coins are pending in escrow table due to not completed order form buyer or seller.
        $find_if_hasEscrowrecord = Escrow::whereNotNull('orderStatus')->count();
        $held_coins = 0;
        if ($find_if_hasEscrowrecord > 0) {

            $find_coins_hold_for_buyer =  Escrow::where('orderStatus', 0)->count();
            if ($find_coins_hold_for_buyer > 0) {
                $find_held_coins_for_buyer =  Escrow::where('orderStatus', 0)->sum('tradeCoins');
                $held_coins = $find_held_coins_for_buyer;

                $data = array('trader_type' => 'buyer', 'held_coins' => $held_coins);
                return json_encode($data);
            }

            $find_coins_held_for_seller =  Escrow::where('orderStatus', 0)->count();
            if ($find_coins_held_for_seller > 0) {
                $find_hold_coins_for_seller =  Escrow::where('orderStatus', 0)->sum('tradeCoins');

                $held_coins = $find_hold_coins_for_seller;
                $data = array('trader_type' => 'seller', 'held_coins' => $held_coins);
                return json_encode($data);
            }
        } else {
            $data = array('trader_type' => 'none', 'held_coins' => 0);
            return json_encode($data);
        }


        //*** now check if coins pending in escrow ammount due to not completed order form buyer and seller as well.

    }

    public function getTotalAvailableCoinsInMarketWallet($userId = null)
    {
        if (Auth::check()) {
            if ($userId == null) {
                $totalCreditCoinFromMarketWallet = $this->getTotalCoinsInMarketWallet(Auth::user()->id, trim('BMK'), 1, 1, [1, 3]);
                $totalDebitCoinsFromMarketWallet = $this->getTotalCoinsInMarketWallet(Auth::user()->id, trim('BMK'), 0, 0, [1, 3]);
                //  print_r('a'.$totalCreditCoinFromMarketWallet);
                //  print_r('b'.$totalDebitCoinsFromMarketWallet);
                //  return $availableCoin = $totalCreditCoinFromMarketWallet- $totalDebitCoinsFromMarketWallet;
                $heldCoin = json_decode($this->getEscrowHoldCoin(Auth::user()->id));
                if ($heldCoin->trader_type == 'buyer') {
                    //  $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet  + $heldCoin->held_coins;
                    $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet;
                }
                if ($heldCoin->trader_type == 'seller') {
                    $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet - $heldCoin->held_coins;
                }
                if ($heldCoin->trader_type == 'none') {
                    $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet;
                }
                return $availableCoin;
            } else {
                $totalCreditCoinFromMarketWallet = $this->getTotalCoinsInMarketWallet($userId, trim('BMK'), 1, 1, [1, 3]);
                $totalDebitCoinsFromMarketWallet = $this->getTotalCoinsInMarketWallet($userId, trim('BMK'), 0, 0, [1, 3]);
                //  print_r('a'.$totalCreditCoinFromMarketWallet);
                //  print_r('b'.$totalDebitCoinsFromMarketWallet);
                // return $availableCoin = $totalCreditCoinFromMarketWallet- $totalDebitCoinsFromMarketWallet;
                $heldCoin = json_decode($this->getEscrowHoldCoin($userId));
                if ($heldCoin->trader_type == 'buyer') {
                    //  $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet  + $heldCoin->held_coins;
                    $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet;
                };
                if ($heldCoin->trader_type == 'seller') {
                    $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet - $heldCoin->held_coins;
                };
                if ($heldCoin->trader_type == 'none') {
                    $availableCoin = $totalCreditCoinFromMarketWallet - $totalDebitCoinsFromMarketWallet;
                };
                return $availableCoin;
            }
        } else {
            $totalCreditCoinFromMarketWallet_without_login = $this->getTotalCoinsInMarketWallet_without_login(trim('BMK'), 1, 1, [1, 3]);
            $totalDebitCoinsFromMarketWallet_without_login = $this->getTotalCoinsInMarketWallet_without_login(trim('BMK'), 0, 0, [1, 3]);

            //return $availableCoin = $totalCreditCoinFromMarketWallet- $totalDebitCoinsFromMarketWallet;
            $heldCoin = json_decode($this->getEscrowHoldCoin_without_login());

            if ($heldCoin->trader_type == 'buyer') {
                $availableCoin = $totalCreditCoinFromMarketWallet_without_login - $totalDebitCoinsFromMarketWallet_without_login + $heldCoin->held_coins;
            } else if ($heldCoin->trader_type == 'seller') {
                $availableCoin = $totalCreditCoinFromMarketWallet_without_login - $totalDebitCoinsFromMarketWallet_without_login - $heldCoin->held_coins;
            } else {
                $availableCoin = $totalCreditCoinFromMarketWallet_without_login - $totalDebitCoinsFromMarketWallet_without_login;
            }

            return $availableCoin;
        }
    }

    public function getTotalAvailableCoinsInselectedCurrency(Request $request)
    {
        $available_coin = $this->getTotalAvailableCoinsInMarketWallet();
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));
        if ($request->ajax()) {
            //  print_r($available_coin);
            //  print_r($request->ordervalue);

            $currency_type = $request->currency_type;
            $buyer_cr_value = $request->ordervalue;
            $currencies_name = $allcurrency->where('name', $currency_type)->first();
            $crypto_value_based_on_currency_type = $currencies_name->per_coin;
            $available_ballence_in_selected_currency = $available_coin * $crypto_value_based_on_currency_type;
            $adsID = $request->ads_id;
            $Countryparty_Conditions = Postads::where('adsid', $adsID)->first();
            $cc = json_decode($Countryparty_Conditions->countryparty_condition);
            //  print_r($cc->CompletedKYC);
            //  CompletedKYC] => 1 [registerd_account_day] => 50 [holding_coin] => 200

            $authuser = User::where('id', Auth::user()->id)->first();
            $auth_user_CompletedKYC = $authuser->government_id_verified; // Condition for normal users & add more conditions for entity
            $auth_user_registerd_account_day = $authuser->created_at;
            $auth_user_holding_coin = $available_coin;
            $auth_user_registerd_account_no_of_day =  $auth_user_registerd_account_day->diffInDays(Carbon::now());
            //  print_r($auth_user_registerd_account_no_of_day);

            if ($available_coin >= $buyer_cr_value) {
                $available_ballence = 1;
            } else {
                $available_ballence = 0;
            }

            //  return response()->json(['available_ballence'=>$available_ballence]);
            return $available_ballence;
        } else {
            $currencies_name = $allcurrency->where('name', 'USD')->first();
            $crypto_value_based_on_currency_type = $currencies_name->per_coin;

            $available_ballence = $available_coin * $crypto_value_based_on_currency_type;

            return $available_ballence;
            //  return response()->json(['available_ballence'=>$available_ballence]);
        }
        // return response()->json(['available_ballence'=>$available_ballence]);
        return $available_ballence;
    }

    public function p2p_appeal_history(Request $request)
    {

        if (Auth::check()) {
            //session_start();
            $allajaxdata = $request->all();


            $orderid = session('orderid');
            //print_r(session()->all());
            $get_order_data = Order::where('id', $orderid)->where('buyer_id', Auth::user()->id)->first();
            $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id', Auth::user()->id)->first();

            $accept_by_buyer_orderid = $request->accept_by_buyer_orderid;
            $cancel_by_buyer_orderid = $request->cancel_by_buyer_orderid;

            // print_r($accept_by_buyer_orderid);
            if (!empty($accept_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $accept_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } elseif (!empty($cancel_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $cancel_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } else {
                $orderid = session('orderid');

                $get_order_data = Order::where('id', $orderid)->where('buyer_id', Auth::user()->id)->first();
                // print_r($get_order_data); die();
                $orderStatus = $get_order_data->order_status;
            }





            $get_seller_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();
            // $getbuyer_bank_details = json_decode($get_order_data->payment_account_details,true);
            // echo "<pre>"; print_r($getbuyer_bank_details); die;

            //$getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at','=',NULL)->select('method_type')->get();
            $getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at', '=', NULL)->get();
            //echo "<pre>"; print_r($getbuyer_bank_details); die;
            // print_r($get_order_data->buyer_id);
            // $getseller_bank_details=[];

            //print_r($methodtype);
            if ($get_seller_details) {
                //  $getseller_bank_details[] = PaymentMedhods::where('user_id', $get_seller_details->id)->where('deleted_at','=',NULL)->where('method_type',$methodtype)->get();
                $getseller_bank_details = Order::where('seller_id', $get_order_data->seller_id)->where('id', $orderid)->first();
            } else {
                $getseller_bank_details = null;
            }


            //$byer_confirmation_status = $request>all();
            //  echo "<pre>";print_r($allajaxdata);


            if (!empty($get_seller_details)) {
                $seller_details = $get_seller_details;
            } else {
                $seller_details = '';
            }
            return view('user.appealHistory', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
        // return view('user.appealHistory');

    }

    public function p2p_page()
    {
        return view('web.p2pTrading_template.p2psection');
    }

    public function postAdd()
    {
        if (Auth::check()) {
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new \App\Http\Controllers\BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();

            $allpaymentMethod_list = payment_method_list::all();
            $country = Country::all();

            $bitcoin = Cryptocap::getSingleAsset('bitcoin');
            $ethereum = Cryptocap::getSingleAsset('ethereum');

            $estimatedfee = Estimatedfee::first();
            //dd($estimatedfee->fee_type);

            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $estimatedfee->fee_type)->first();
            $currenciesname = $currencies->name;

            $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
            $bmk_params = array('currency_name' => 'USD');
            $bmk_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);

            // $selectedcurrency = collect();
            // $selectedcurrency->push([
            //                     'id'=>$allcurrency->id,
            //                     'symbol' =>$allcurrency->name,
            //                     'name' => $allcurrency->name,

            //                 ]);

            if (Auth::check()) {

                $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
                $userPaymentMethodcount = $userPaymentMethod->count();
                $allpaymentMethod = Banks::all();
                $allpaymentMethod_list = payment_method_list::all();
            } else {
                $allpaymentMethod = 0;
                $allpaymentMethod_list = 0;
                $userPaymentMethod = 0;
                $userPaymentMethodcount = $userPaymentMethod;
            }


            if ($this->getTotalAvailableCoinsInMarketWallet() > 0) { // Available bmk in market wallet
                $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
                //   print_r($totalAvailableCoinsInMarketWallet);
                //   die();
            } else {
                $totalAvailableCoinsInMarketWallet = 0;
            }

            return view('web.p2pTrading_template.postAdd', compact('allcurrency', 'allpaymentMethod_list', 'country', 'userPaymentMethodcount', 'userPaymentMethod', 'allpaymentMethod_list', 'allpaymentMethod', 'bitcoin', 'ethereum', 'bmk_price', 'estimatedfee', 'currenciesname', 'totalAvailableCoinsInMarketWallet'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function myAdd()
    {
        if (Auth::check()) {

            // $alladsData = Postads::where('userid', Auth::user()->id)->orderBy('status', 'desc')->paginate(15); 30052023
            $alladsData = Postads::where('userid', Auth::user()->id)->orderBy('id', 'desc')->paginate(5);
            $allads = [];
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = [];
            $allcurrency = collect($BmkApiController->verify_api($url, $params));

            $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
            $bmk_params = array('currency_name' => 'USD');
            $bmk_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);
            $bitcoin = Cryptocap::getSingleAsset('bitcoin');
            $ethereum = Cryptocap::getSingleAsset('ethereum');

            foreach ($alladsData as $ads) {

                $currencies = $allcurrency->where('id', $ads->faithid)->first();
                $ads->currenciesname = $currencies->name;

                if (!empty($ads->payment_method)) {
                    $paymentmethodid = json_decode($ads->payment_method);


                    // if (is_array($paymentmethodid)) {

                    //         $payment_method_type = [];
                    //         foreach ($paymentmethodid as $key => $value) {
                    //           // $payment_method = PaymentMedhods::where('id', intval($value))->first();
                    //          if ($payment_method) {
                    //             $payment_method_type[] = $payment_method->method_type;
                    //               }
                    //               }
                    //           $ads->payment_method_type = $payment_method_type;

                    // }
                    // dd($paymentmethodid);
                    $ads->payment_method_type = $paymentmethodid;
                }

                $allads[] = $ads;
                // dd($allads);
            }

            if (Auth::check()) {

                // $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
                $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->get();
                $userPaymentMethodcount = $userPaymentMethod->count();
                $allpaymentMethod = Banks::all();
                $allpaymentMethod_list = payment_method_list::all();
            } else {
                $allpaymentMethod = 0;
                $allpaymentMethod_list = 0;
                $userPaymentMethod = 0;
                $userPaymentMethodcount = $userPaymentMethod;
            }


            if ($this->getTotalAvailableCoinsInMarketWallet() > 0) { // Available bmk in market wallet
                $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
            } else {
                $totalAvailableCoinsInMarketWallet = 0;
            }

            return view('web.p2pTrading_template.myAdd', compact('allads', 'alladsData', 'allcurrency', 'bmk_price', 'bitcoin', 'ethereum', 'totalAvailableCoinsInMarketWallet', 'allpaymentMethod', 'allpaymentMethod_list', 'userPaymentMethod', 'userPaymentMethodcount'));
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function SubmitPostAds(Request $request)
    {

        $alldata = $request->all();

        //dd($alldata);

        $validatedData = Validator::make($request->all(), [
            'ordertype' => 'required',
            'cryptoname' => 'required',
            'faithid' => 'required',
            'domestic_currency_value' => 'required',
            'pricetype' => 'required',
            'fixed_floating_pice' => 'required',
            'total_amount' => 'required',
            'order_lower_limit' => 'required',
            'order_higher_limit' => 'required',
            'payment_method' => 'required',
            'payment_time_limit' => 'required',
            'countryparty_condition' => 'required',
            'status' => 'required',
            'nickname' => 'required',
        ]);

        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()], 401);
        } else {

            if ($request->ordertype == '1') {
                if ($request->availableCoins < $request->total_amount) {
                    return response()->json(['error' => 'Insufficient coins in your wallet to sell.'], 401);
                }
            }


            // here we are recieving whole details of payment Method by id id and storing this into database by converting it in json formate.
            $paymentmethodsDetail_json = [];
            foreach ($request->payment_method as $idOfeachmethod) {

                $paymentmethods = DB::table('payment_medhods')
                    ->where('payment_medhods.id', $idOfeachmethod)
                    ->whereNull('payment_medhods.deleted_at')
                    ->first();

                $paymentmethodsDetail_json[] = json_encode($paymentmethods);
            }
            // dd($paymentmethodsDetail_json);
            // end here we are recieving whole details of payment Method by id id and storing this into database by converting it in json formate.


            $ads = new Postads;
            $ads->adsid = mt_rand(1000000000, 9999999999);
            $ads->userid = Auth::user()->id;
            $ads->ordertype = $request->ordertype;
            $ads->cryptoname = $request->cryptoname;
            $ads->faithid = $request->faithid;
            $ads->cryptovalue_in_domestictype = $request->domestic_currency_value;
            $ads->pricetype = $request->pricetype;
            $ads->fixed_floating_pice = $request->fixed_floating_pice;
            $ads->total_amount = $request->total_amount;
            $ads->order_lower_limit = $request->order_lower_limit;
            $ads->order_higher_limit = $request->order_higher_limit;
            $ads->payment_method = json_encode($paymentmethodsDetail_json);
            $ads->payment_time_limit = ($request->payment_time_limit) * 60;
            $ads->terms = $request->terms;
            $ads->auto_replay = $request->auto_replay;
            $ads->countryparty_condition = json_encode($request->countryparty_condition);
            $ads->status = $request->status;
            $ads->estimated_fee = $request->estimated_fee;
            $ads->created_at = now();
            $ads->updated_at = now();
            $ads->cryptorateinusd = $request->selectedCoinPrice;
            $ads->currencyrateinusd = $request->selectedglobalCurrency;
            $ads->current_crypto_in_inr = $request->cryptoPriceInInr;

            $ads->save();


            $lastId = DB::getPdo()->lastInsertId();

            if ($lastId) {
                return response()->json(['success' => 'Succesfully Posted, Your ad has been published and is now visible to other users once it goe online. Please pay attention to prompts for new orders'], 200);
            } else {
                return response()->json(['error' => 'Something went wrong.'], 401);
            }
        }
    }

    public function EditPostAds(Request $request)
    {

        $alldata = $request->all();

        //dd($alldata);
        unset($request["_token"]);
        //unset($request["adsId"]);
        $validatedData = Validator::make($request->all(), [
            'ordertype' => 'required',
            'cryptoname' => 'required',
            'faithid' => 'required',
            'domestic_currency_value' => 'required',
            'pricetype' => 'required',
            'fixed_floating_pice' => 'required',
            'total_amount' => 'required',
            'order_lower_limit' => 'required',
            'order_higher_limit' => 'required',
            'payment_method' => 'required',
            'payment_time_limit' => 'required',
            'countryparty_condition' => 'required',
            'status' => 'required',
            'nickname' => 'required',
        ]);

        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()], 401);
        } else {

            if ($request->ordertype == '1') {
                if ($request->availableCoins < $request->total_amount) {
                    return response()->json(['error' => 'Insufficient coins in your wallet to sell.'], 401);
                }
            }
            $id = $request->adsId;

            // payment method in json
            $paymentmethodsDetail_json = [];
            foreach ($request->payment_method as $idOfeachmethod) {

                $paymentmethods = DB::table('payment_medhods')
                    ->where('payment_medhods.id', $idOfeachmethod)
                    ->whereNull('payment_medhods.deleted_at')
                    ->first();

                $paymentmethodsDetail_json[] = json_encode($paymentmethods);
            }
            // dd($request->all());


            // end payment method

            $data = [
                'ordertype' => $request->ordertype,
                'cryptoname' => $request->cryptoname,
                'faithid' => $request->faithid,
                'cryptovalue_in_domestictype' =>  $request->domestic_currency_value,
                'pricetype' => $request->pricetype,
                'fixed_floating_pice' => $request->fixed_floating_pice,
                'total_amount' => $request->total_amount,
                'order_lower_limit' => $request->order_lower_limit,
                'order_higher_limit' => $request->order_higher_limit,
                'payment_method' => json_encode($paymentmethodsDetail_json),
                'payment_time_limit' => ($request->payment_time_limit) * 60,
                'terms' => $request->terms,
                'auto_replay' => $request->auto_replay,
                'countryparty_condition' =>  json_encode($request->countryparty_condition),
                'status' => $request->status,
                'estimated_fee' => $request->estimated_fee,
                'updated_at' => now(),
                'cryptorateinusd' => $request->selectedCoinPrice,
                'currencyrateinusd' => $request->selectedglobalCurrency,
                'current_crypto_in_inr' => $request->cryptoPriceInInr,

            ];

            $adsupdated = Postads::where('id', $id)->update($data);

            if ($adsupdated) {
                return response()->json(['success' => 'Succesfully Edited'], 200);
            } else {
                return response()->json(['error' => 'Something went wrong.'], 401);
            }
        }
    }

    public function ChangePostAdsStatus(Request $request)
    {
        //dd($request->ads_id);
        $ads = Postads::find($request->ads_id);
        $ads->status = $request->status;
        $ads->save();

        return response()->json(['success' => 'Status change successfully.', 'data' => $ads->status]);
    }

    public function ChangePostAdsStatusall(Request $request)
    {

        $ads_ids = $request->ads_id;
        $status = $request->status;
        foreach ($ads_ids as $ads_id) {
            $ads = Postads::find($ads_id);
            $ads->status = $status;
            $ads->save();
        }

        return response()->json(['success' => 'Status change successfully.', 'data' => $ads->status]);
    }

    public function adsPostdelete(Request $request)
    {
        $id = $request->adsid;
        Postads::find($id)->delete();

        return back();
    }

    public function advertiserDetailbyadvertiseId()
    {

        return view('web.p2pTrading_template.advertiserDetails');
    }

    public function getTodayCancleorderCount($order_status, $userid)
    {
        $order_status = 3; // 3 mean canceled order
        $totalCancleOrders = Order::where('order_status', $order_status)
            ->where('buyer_id', $userid)
            ->whereDate('created_at', today())
            ->count();

        return $totalCancleOrders;
    }

    public function Crypto_buying_Susspension($orderid, $userid)
    {

        //   $find_user_account_activity = user_account_activity::where('user_id',$userid)->whereDate('created_at', today())->count();
        $find_user_account_activity = user_account_activity::where('user_id', $userid)
            ->whereDate('created_at', today())
            ->count();

        if ($find_user_account_activity > 1) {
            $totalcancleorder_perday = $this->getTodayCancleorderCount(3, $userid); // 3 mean canceled order

            if ($totalcancleorder_perday == 3) {
                // updating cancelation
                $update_user_account_activity = user_account_activity::where('order_id', $orderid)->where('user_id', $userid)->update(['buying_status' => 0]);

                $count_user_account_activity = user_account_activity::where('order_id', $orderid)->where('buying_status', 0)->count();

                if ($count_user_account_activity > 0) {
                    $result = 1; // '1 means record found and updated successfully'
                } else {
                    $result = 2; // '2 means record found but cannot be updated or something went wrong'
                }
            } else {
                $result = 0; // '0 means no record found in 'order' table in last day where 'order_status' is 3 or canceled'
            }
        } else {
            $result = 3; // '3 means no cancled order exist in table from lastday'
        }
        return $result;
    }

    public function checkSusspensionStatus($userid)
    {

        $checkSusspensionStatus = user_account_activity::where('user_id', $userid)->where('buying_status', 0)->whereDate('updated_at', today())->count();

        if ($checkSusspensionStatus > 0) {
            $value = 1;
        } else {
            $value = 0;
        }
        return $value;
    }

    public function failed_digilocker_details(Request $request)
    {

        $details = failed_verification_history::where('user_id', $request->userID)->get();
        return response()->json(['failedDetail' => $details]);
    }

    public function update_user_last_activity()
    {
        $update_user_last_activity =  User::where('id', Auth::user()->id)->update(['last_activity_status' => now()]);
    }

    public function p2p_trading_Buy_old(Request $request)
    {
        //$formateddate = $this->fetchDateFromSQL('xyz');
        //print_r($formateddate);
        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }



        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at', null)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        $get_BTC_orders = Postads::where('cryptoname', '=', 'BTC')->where('status', 1)->where('ordertype', 1)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $get_ETH_orders = Postads::where('cryptoname', '=', 'ETH')->where('status', 1)->where('ordertype', 1)
            ->orderBy('id', 'desc')
            ->paginate(10);

        if (Auth::check()) {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->Where('userid', '!=', Auth::user()->id)->where('status', 1)->where('ordertype', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }


        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        } else {
            $ifpaymentMethod = 0;
        }

        $allpaymentMethod = Banks::all();

        $paymentType = $request->paymentType;
        $count_payment_type = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 1)->count();
        $allpaymentMethod_list = payment_method_list::all();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));


        $currencyid = $request->CurrencyId;
        $country = Country::all();
        $countryname = $request->countryname;
        //dd($get_BMK_orders);

        if ($request->ajax()) {

            return view('web.p2p_trading_buy_ajax', ['get_BMK_orders' => $get_BMK_orders, 'count_payment_type' => $count_payment_type, 'totalAvailableCoinsInMarketWallet' => $totalAvailableCoinsInMarketWallet])->render();
        }


        $all_sell_request = Postads::where('status', 1)->get();

        $buyList_details =   $get_BMK_orders->map(function ($item) {

            $username = User::where('id', $item->userid)->first();
            $buylist_mapped_details['username'] = isset($username->nick_name) ? $username->nick_name  : $username->first_name;
            $countbmk_orders = Postads::where('userid', $item->userid)->where('cryptoname', "$item->cryptoname")->get();
            $user_last_activity = User::where('id', $item->userid)->first();
            $buylist_mapped_details['id'] = $item->id;
            $buylist_mapped_details['payment_method'] = $item->payment_method;
            $buylist_mapped_details['count'] = $countbmk_orders->count();
            $buylist_mapped_details['onlneStatus'] = $user_last_activity->online_status;
            $buylist_mapped_details['created_at'] = $this->fetchDateFromSQL($item->created_at);

            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $item->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            $buylist_mapped_details['currenciesname'] = $currenciesname;
            $buylist_mapped_details['currencysymbol'] = $currencysymbol;
            $buylist_mapped_details['order_lower_limit'] = $item->order_lower_limit;
            $buylist_mapped_details['order_higher_limit'] = $item->order_higher_limit;




            $first_order = Postads::where('id', '=', $item->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = Order::where('order_status', '=', 1)
                ->where(function ($query) use ($item) {
                    $query->where('buyer_id', '=', $item->userid)
                        ->orWhere('seller_id', '=', $item->userid);
                })
                ->where('order_accept_action', '=', 1)

                ->where(function ($query) {
                    $query->where(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->whereNull('seller_confirmation_status');
                    })
                        ->orWhere(function ($subquery) {
                            $subquery->whereNull('buyer_confirmation_status')
                                ->where('seller_confirmation_status', '=', 1);
                        })
                        ->orWhere(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '=', 1)
                                ->orWhereNull('seller_confirmation_status');
                        })
                        ->where(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '!=', 1)
                                ->where('seller_confirmation_status', '!=', 1)
                                ->where('order_status', '!=', 1)
                                ->where('order_accept_action', '!=', 1);
                        });
                })

                ->whereDate('created_at', '=', $today)
                ->first();
            if ($activeorders != '') {
                $orderongoing = 1;
            } else {
                $orderongoing = 0;
            }


            $buylist_mapped_details['orderongoing'] = $orderongoing;
            $buylist_mapped_details['fixed_floating_pice'] = $item->fixed_floating_pice;
            $buylist_mapped_details['total_amount'] = $item->total_amount;
            $buylist_mapped_details['cryptoname'] = $item->cryptoname;
            return $buylist_mapped_details;
        });
        $buyList_details = $buyList_details->toArray();
        // return $buyList_details;
        return view('web.p2p_trading_buy', compact('buyList_details', 'get_BTC_orders', 'get_ETH_orders', 'get_BMK_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'ifpaymentMethod', 'allpaymentMethod', 'all_sell_request', 'userPaymentMethod', 'userPaymentMethodcount', 'totalAvailableCoinsInMarketWallet'));
    }





    public function p2p_trading_Buy(Request $request)
    {
        //$formateddate = $this->fetchDateFromSQL('xyz');
        //print_r($formateddate);
        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) {
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }



        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', Auth::user()->id)->where('deleted_at', null)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }


        $get_BTC_orders = Postads::where('cryptoname', '=', 'BTC')->where('status', 1)->where('ordertype', 1)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $get_ETH_orders = Postads::where('cryptoname', '=', 'ETH')->where('status', 1)->where('ordertype', 1)
            ->orderBy('id', 'desc')
            ->paginate(10);

        if (Auth::check()) {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->Where('userid', '!=', Auth::user()->id)->where('status', 1)->where('ordertype', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $get_BMK_orders = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }


        if (Auth::check()) {
            $ifpaymentMethod = PaymentMedhods::where('user_id', Auth::user()->id)->paginate(3);
        } else {
            $ifpaymentMethod = 0;
        }

        $allpaymentMethod = Banks::all();

        $paymentType = $request->paymentType;
        $count_payment_type = Postads::where('cryptoname', '=', 'BMK')->where('status', 1)->where('ordertype', 1)->count();
        $allpaymentMethod_list = payment_method_list::all();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new \App\Http\Controllers\BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));


        $currencyid = $request->CurrencyId;
        $country = Country::all();
        $countryname = $request->countryname;
        //dd($get_BMK_orders);

        if ($request->ajax()) {

            return view('web.p2p_trading_buy_ajax', ['get_BMK_orders' => $get_BMK_orders, 'count_payment_type' => $count_payment_type, 'totalAvailableCoinsInMarketWallet' => $totalAvailableCoinsInMarketWallet])->render();
        }


        $all_sell_request = Postads::where('status', 1)->get();

        $buyList_details =   $get_BMK_orders->map(function ($item) {

            $username = User::where('id', $item->userid)->first();
            $buylist_mapped_details['username'] = isset($username->nick_name) ? $username->nick_name  : $username->first_name;
            $countbmk_orders = Postads::where('userid', $item->userid)->where('cryptoname', "$item->cryptoname")->get();
            $user_last_activity = User::where('id', $item->userid)->first();
            $buylist_mapped_details['id'] = $item->id;
            $buylist_mapped_details['nick_name'] = $item->nick_name;

            $buylist_mapped_details['payment_method'] = $item->payment_method;
            $buylist_mapped_details['count'] = $countbmk_orders->count();
            $buylist_mapped_details['onlneStatus'] = $user_last_activity->online_status;
            $buylist_mapped_details['created_at'] = $this->fetchDateFromSQL($item->created_at);

            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url, $params));
            $currencies = $allcurrency->where('id', $item->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            $buylist_mapped_details['currenciesname'] = $currenciesname;
            $buylist_mapped_details['currencysymbol'] = $currencysymbol;
            $buylist_mapped_details['order_lower_limit'] = $item->order_lower_limit;
            $buylist_mapped_details['order_higher_limit'] = $item->order_higher_limit;




            $first_order = Postads::where('id', '=', $item->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = Order::where('order_status', '=', 1)
                ->where(function ($query) use ($item) {
                    $query->where('buyer_id', '=', $item->userid)
                        ->orWhere('seller_id', '=', $item->userid);
                })
                ->where('order_accept_action', '=', 1)

                ->where(function ($query) {
                    $query->where(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->whereNull('seller_confirmation_status');
                    })
                        ->orWhere(function ($subquery) {
                            $subquery->whereNull('buyer_confirmation_status')
                                ->where('seller_confirmation_status', '=', 1);
                        })
                        ->orWhere(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '=', 1)
                                ->orWhereNull('seller_confirmation_status');
                        })
                        ->where(function ($subquery) {
                            $subquery->where('buyer_confirmation_status', '!=', 1)
                                ->where('seller_confirmation_status', '!=', 1)
                                ->where('order_status', '!=', 1)
                                ->where('order_accept_action', '!=', 1);
                        });
                })

                ->whereDate('created_at', '=', $today)
                ->first();
            if ($activeorders != '') {
                $orderongoing = 1;
            } else {
                $orderongoing = 0;
            }


            $buylist_mapped_details['orderongoing'] = $orderongoing;
            $buylist_mapped_details['fixed_floating_pice'] = $item->fixed_floating_pice;
            $buylist_mapped_details['total_amount'] = $item->total_amount;
            $buylist_mapped_details['cryptoname'] = $item->cryptoname;
            $buylist_mapped_details['userid'] = $item->userid;

            $paymentmethodid = json_decode($item->payment_method);

            $payment_method_type = array();
            foreach ($paymentmethodid as $key => $value) {
                // $payment_method = App\Models\PaymentMedhods::where('id', $value)->first();
                // if ($payment_method) {
                //       $payment_method_type[] = $payment_method;
                //  }
                // echo '<pre>';
                // print_r( json_decode($value->account_holder));


                // print_r( gettype(json_decode($value)->user_id));


                $payment_method_type[] = json_decode($value)->method_type;
            }


            $buylist_mapped_details['payment_method_type'] = $payment_method_type;





            return $buylist_mapped_details;
        });
        $buyList_details = $buyList_details->toArray();
        // return $buyList_details;
        return view('web.p2p_trading_buy', compact('buyList_details', 'get_BTC_orders', 'get_ETH_orders', 'get_BMK_orders', 'count_payment_type', 'allpaymentMethod_list', 'allcurrency', 'country', 'ifpaymentMethod', 'allpaymentMethod', 'all_sell_request', 'userPaymentMethod', 'userPaymentMethodcount', 'totalAvailableCoinsInMarketWallet'));
    }


    public function p2p_trading_buy_confirm_order_info(Request $request)
    {
        //   dd('hello');
        if (Auth::check()) {
            //   if(isset($_SESSION['orderid']) && $_SESSION['orderid']){
            //session_start();
            $allajaxdata = $request->all();
            //dd($_SESSION['orderid']);
            $url = url()->current();
            $segments = collect(explode('/', $url));
            $lastSegment = $segments->last();
            $orderid = $lastSegment;
            //print_r($_SESSION);

            $get_order_data = Order::where('id', $orderid)->where('seller_id', Auth::user()->id)->first();
            $ratedRecords = Tradingratings::where('order_id', $orderid)->where('seller_id', Auth::user()->id)->first();
            $config_data = config::all();

            //dd($get_order_data);
            $accept_by_buyer_orderid = $request->accept_by_buyer_orderid;
            $cancel_by_buyer_orderid = $request->cancel_by_buyer_orderid;

            // print_r($accept_by_buyer_orderid);
            if (!empty($accept_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $accept_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } elseif (!empty($cancel_by_buyer_orderid)) {
                $get_order_data1 = Order::where('id', $cancel_by_buyer_orderid)->first();
                $orderStatus = $get_order_data1->order_status;
            } else {

                $orderid = session('orderid') ?? null;
                //print_r($orderid);die();
                if (!$orderid) {
                    return view('web.page_not_found');
                    //abort(404, 'Record not found');
                }

                $get_order_data = Order::where('id', $orderid)
                    //->where('seller_id', Auth::user()->id)
                    ->where(function ($query) {
                        $query->where('buyer_id', '=', Auth::user()->id)
                            ->orWhere('seller_id', '=', Auth::user()->id);
                    })
                    ->first();
                // print_r($get_order_data); die();
                if (!$get_order_data) {
                    return view('web.page_not_found');
                    //abort(404, 'Record not found');
                } else {
                    $orderStatus = $get_order_data->order_status;
                }
            }
            //dd($get_order_data);


            $get_seller_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();
            // $getbuyer_bank_details = json_decode($get_order_data->payment_account_details,true);
            // echo "<pre>"; print_r($getbuyer_bank_details); die;

            //$getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at','=',NULL)->select('method_type')->get();
            $getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at', '=', NULL)->get();
            //echo "<pre>"; print_r($getbuyer_bank_details); die;
            // print_r($get_order_data->buyer_id);
            // $getseller_bank_details=[];

            //print_r($methodtype);
            if ($get_seller_details) {
                //  $getseller_bank_details[] = PaymentMedhods::where('user_id', $get_seller_details->id)->where('deleted_at','=',NULL)->where('method_type',$methodtype)->get();
                $getseller_bank_details = Order::where('buyer_id', $get_order_data->buyer_id)->where('id', $orderid)->latest()->first();
            } else {
                $getseller_bank_details = null;
            }


            //$byer_confirmation_status = $request>all();
            //  echo "<pre>";print_r($allajaxdata);
            //dd($getseller_bank_details->payment_account_details_for_buyer);

            if (!empty($get_seller_details)) {
                $seller_details = $get_seller_details;
            } else {
                $seller_details = '';
            }
            return view('web.p2p_trading_buy_confirm_order_info', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords', 'config_data'));

            //   }else{
            //          return view('web.page_not_found');
            //   }
        } else {
            return redirect(app()->getLocale() . "/login");
        }

        //return view('web.p2p_trading_buy_confirm_order_info');

    }

    public function p2p_trading_buy_confirm_order_info_by_id(Request $request)
    {

        if (Auth::check()) {
            //session_start();
            $allajaxdata = $request->all();
            //dd($_SESSION['orderid']);
            $url = url()->current();
            $segments = collect(explode('/', $url));
            $lastSegment = $segments->last();
            $orderid = $lastSegment;
            //print_r($_SESSION);
            $checkuserorder = Order::where('id', '=', $lastSegment)->where(function ($query) {
                $query->Where('buyer_id', '=', Auth::user()->id);
            })
                ->first();
            if ($checkuserorder != '') {
                $get_order_data = Order::where('id', $orderid)->where('seller_id', Auth::user()->id)->first();
                $ratedRecords = Tradingratings::where('order_id', $orderid)->where('seller_id', Auth::user()->id)->first();
                $config_data = config::all();

                //dd($get_order_data);
                $accept_by_buyer_orderid = $request->accept_by_buyer_orderid;
                $cancel_by_buyer_orderid = $request->cancel_by_buyer_orderid;

                // print_r($accept_by_buyer_orderid);
                if (!empty($accept_by_buyer_orderid)) {
                    $get_order_data1 = Order::where('id', $accept_by_buyer_orderid)->first();
                    $orderStatus = $get_order_data1->order_status;
                } elseif (!empty($cancel_by_buyer_orderid)) {
                    $get_order_data1 = Order::where('id', $cancel_by_buyer_orderid)->first();
                    $orderStatus = $get_order_data1->order_status;
                } else {

                    $orderid = session('orderid') ?? null;
                    //print_r($orderid);die();
                    if (!$orderid) {
                        return view('web.page_not_found');
                        //abort(404, 'Record not found');
                    }

                    $get_order_data = Order::where('id', $orderid)
                        //->where('seller_id', Auth::user()->id)
                        ->where(function ($query) {
                            $query->where('buyer_id', '=', Auth::user()->id)
                                ->orWhere('seller_id', '=', Auth::user()->id);
                        })
                        ->first();
                    // print_r($get_order_data); die();
                    if (!$get_order_data) {
                        return view('web.page_not_found');
                        //abort(404, 'Record not found');
                    } else {
                        $orderStatus = $get_order_data->order_status;
                    }
                }
                //dd($get_order_data);


                $get_seller_details = DB::table('users')->where('id', $get_order_data->seller_id)->first();
                // $getbuyer_bank_details = json_decode($get_order_data->payment_account_details,true);
                // echo "<pre>"; print_r($getbuyer_bank_details); die;

                //$getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at','=',NULL)->select('method_type')->get();
                $getbuyer_bank_details = PaymentMedhods::where('user_id', $get_order_data->buyer_id)->where('deleted_at', '=', NULL)->get();
                //echo "<pre>"; print_r($getbuyer_bank_details); die;
                // print_r($get_order_data->buyer_id);
                // $getseller_bank_details=[];

                //print_r($methodtype);
                if ($get_seller_details) {
                    //  $getseller_bank_details[] = PaymentMedhods::where('user_id', $get_seller_details->id)->where('deleted_at','=',NULL)->where('method_type',$methodtype)->get();
                    $getseller_bank_details = Order::where('buyer_id', $get_order_data->buyer_id)->where('id', $orderid)->first();
                } else {
                    $getseller_bank_details = null;
                }


                //$byer_confirmation_status = $request>all();
                //  echo "<pre>";print_r($allajaxdata);
                //dd($getseller_bank_details->payment_account_details_for_buyer);

                if (!empty($get_seller_details)) {
                    $seller_details = $get_seller_details;
                } else {
                    $seller_details = '';
                }
                return view('web.p2p_trading_buy_confirm_order_info', compact('get_order_data', 'seller_details', 'getseller_bank_details', 'orderStatus', 'ratedRecords', 'config_data'));
            } else {
                return view('web.page_not_found');
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }

        //return view('web.p2p_trading_buy_confirm_order_info');

    }

    public function seller_confirm_confirmedOrderInfo(Request $request, $id)
    {

        $url = url()->current();
        $segments = collect(explode('/', $url));
        $lastSegment = $segments->last();


        session(['last_id' => $lastSegment]);

        $allajaxdata = $request->all();

        //dd($lastSegment);
        $orderid = $lastSegment;

        // $orderid = $_SESSION['orderid']?? null;
        //print_r($orderid);die();
        $orderid_in_session = session('orderid') ?? null;
        if ($orderid_in_session != null) {
            if (!$orderid) {
                return view('web.page_not_found');
                //abort(404, 'Record not found');
            } else {
                $checkuserorder = Order::where('id', '=', $lastSegment)->where(function ($query) {
                    $query->Where('seller_id', '=', Auth::user()->id);
                })
                    ->first();
                if ($checkuserorder != '') {
                    $get_order_data = Order::where('id', $lastSegment)->first();

                    $get_buyer_details = DB::table('users')->where('id', $get_order_data->buyer_id)->first();
                    $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id', Auth::user()->id)->first();
                    $getbuyer_bank_details = DB::table('payment_medhods')->where('user_id', $get_order_data->buyer_id)->select('method_type')->get();

                    if (!empty($get_buyer_details)) {
                        $buyer_details = $get_buyer_details;
                    } else {
                        $buyer_details = '';
                    }
                    //dd($get_order_data);seller-confirmed-order-info
                    return view('user.p2p_seller_confirmed', compact('get_order_data', 'buyer_details', 'ratedRecords'));
                    //return view('user.seller-confirmed-order-info');
                } else {
                    return view('web.page_not_found');
                }
            }
        } else {
            return view('web.page_not_found');
        }
    }

    public function p2p_trading_seller_confirm_order_info(Request $request, $id)
    {
        if (Auth::check()) {
            $url = url()->current();
            $segments = collect(explode('/', $url));
            $lastSegment = $segments->last();
            session(['last_id' => $lastSegment]);

            $allajaxdata = $request->all();


            $orderid = $lastSegment;

            $checkuserorder = Order::where('id', '=', $lastSegment)->where(function ($query) {
                $query->Where('seller_id', '=', Auth::user()->id);
            })
                ->first();
            if ($checkuserorder != '') {

                if (!$orderid) {
                    return view('web.page_not_found');
                } else {
                    $get_order_data = Order::where('id', $lastSegment)->first();
                    //dd($get_order_data);

                    if ($get_order_data->ordertype == 0) {
                        $buyer_id = Auth::user()->id;
                        $seller_id = $get_order_data->seller_id;
                    }
                    if ($get_order_data->ordertype == 1) {
                        $buyer_id = $get_order_data->buyer_id;
                        $seller_id = Auth::user()->id;
                    }

                    $get_buyer_details = DB::table('users')
                        ->where('id', $buyer_id)
                        ->first();
                    $ratedRecords = Tradingratings::where('order_id', $orderid)->where('buyer_id',  $buyer_id)->first();
                    $getbuyer_bank_details = DB::table('payment_medhods')->where('user_id', $buyer_id)->select('method_type')->get();

                    if (!empty($get_buyer_details)) {
                        $buyer_details = $get_buyer_details;
                    } else {
                        $buyer_details = '';
                    }

                    return view('web.p2p_trading_seller_confirm_order_info', compact('get_order_data', 'buyer_details', 'ratedRecords'));
                }
            } else {
                return view('web.page_not_found');
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function seller_transfer_confirmation_status(Request $request)
    {
        $allajaxdata = $request->all();
        //dd($allajaxdata);
        //print_r($allajaxdata);
        $validatedData = Validator::make($request->all(), [
            'checkbox' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,png'
        ], [
            'file.required' => 'Payment proof required.',
            'file.mimes' => 'Olny jpg,jpeg,png image type allowed.',

        ]);

        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()], 401);
        } else {
            $checkbox_data = 'Your payment has been reecived , the asset have been sent to your account.';
            //$paymentData = $checkbox_data . ',' . $request->file('file')->store('public/payments/buyer_confirmation');

            //  image compression
            if ($request->file('file')->isValid()) {
                // dd($request->all());
                $file = $request->file('file');
                $tempPath = $file->getPathname();
                //	print_r('trmp'.'/'.$tempPath);
                $imageName = $file->getClientOriginalName();
                $uploadTo = "storage/app/payments/seller_confirmation";
                $prod = date("Yndhis");
                $extension = $file->getClientOriginalExtension();
                $imageName = $prod . "." . $extension;
                $basename = basename($imageName);
                $originalPath = $uploadTo . '/' . $basename;
                // print_r($originalPath);
                $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
                $msg = $this->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);
                // return '<img src="'.url('/').'/'.$originalPath.'" class="chat_img" />';
                $paymentData = '<p><img src="' . url('/' . $originalPath) . '" class="img-thumbnail" width="200" height="160" /></p><br />' . $checkbox_data;
            }
            // end image compression
            // $target_path = $request->file('file')->store('/payments/buyer_confirmation');
            // $paymentData ='<p><img src="'. url('storage/app/'.$target_path).'" class="img-thumbnail" width="200" height="160" /></p><br />' . $checkbox_data;

            $orderid = $request->orderid;;

            $get_order_data = Order::where('id', $orderid)->first();

            //dd($get_order_data);

            if ($get_order_data->ordertype == 0) {
                $touser_id = $get_order_data->buyer_id;
                $fromuser_id = $get_order_data->seller_id;
            }
            if ($get_order_data->ordertype == 1) {
                $touser_id = $get_order_data->seller_id;
                $fromuser_id = $get_order_data->buyer_id;
            }
            $to_user_id = $touser_id;
            $from_user_id = $fromuser_id;
            $payment_status = new Chat;
            $payment_status->to_user_id = $to_user_id;
            $payment_status->from_user_id = $from_user_id;
            $payment_status->order_id = $orderid;
            $payment_status->chat_message = $paymentData;
            $payment_status->status = 0;
            $payment_status->save();
            $seller_confirmation_status = 1;
            $_SESSION['seller_confirmation_status'] = $seller_confirmation_status;
            $update_seller_confirmation_status = Order::where('id', $orderid)->update(['seller_confirmation_status' => $seller_confirmation_status]);


            $ifOrderUpdated = Order::where('id', $orderid)
                ->where('order_status', 1)
                ->where('buyer_confirmation_status', 1)
                ->where('seller_confirmation_status', 1)
                ->count();




            if ($ifOrderUpdated > 0) {

                Postads::where('adsid', $get_order_data->adsid)->update(['status' => 2]);

                // escrow account insert or update
                $countEscrowRecord = Escrow::where('orderId', $orderid)->count();
                $escrow = new Escrow;
                if ($countEscrowRecord < 1) {

                    $escrow->orderId = $orderid;
                    $escrow->sellerId = $get_order_data->seller_id;
                    $escrow->buyerId = $get_order_data->buyer_id;
                    $escrow->tradeCoins = $get_order_data->domestic_currency_value;
                    $escrow->tradeCurrencyValue    = $get_order_data->total_crypto_value;
                    $escrow->paymentMode = $get_order_data->payment_method_id;
                    $escrow->orderStatus = 0;
                    $escrow->coinReleased = 1;
                    // $escrow->paymentReleased = 0;
                    $escrow->comments = json_encode(array('seller_comment' => 'coins released from seller'));
                    $escrow->save();
                } else {
                    $get_countEscrowRecord = Escrow::where('orderId', $orderid)->first();
                    $update_comment = json_decode($get_countEscrowRecord->comments);
                    $new_comment_data = json_encode(['seller_comment' => $update_comment,     'seller_ReComment' => 'coins released from seller']);

                    $update_order_InEscrow_table = Escrow::where('orderId', $orderid)->update([

                        'coinReleased' => 1,
                        'comments' => $new_comment_data,
                        'orderStatus' => 1,

                    ]);
                }


                // end escrow account insert or update

                $count_Escrow_toConfirm = Escrow::where('orderId', $orderid)->where('coinReleased', 1)->where('paymentReleased', 1)->where('orderStatus', 1)->count();
                $get_Escrow_toConfirm = Escrow::where('orderId', $orderid)->where('coinReleased', 1)->where('paymentReleased', 1)->where('orderStatus', 1)->first();

                if ($count_Escrow_toConfirm == 1) {
                    $delete_order_fromEscrow_table = Escrow::where('orderId', $orderid)->delete();
                    $this->p2p_wallet_entry($orderid);

                    // update p2p BMK wallet for seller
                    if ($get_order_data->crypto_type == 'BMK') {
                        $base_url = env('BMK_API_BASE_URL');
                        $BmkApiController = new BmkApiController;
                        $url = $base_url . '/buy_bmk_coin';
                        $seller_wallet_addrs = User::where('id', $get_Escrow_toConfirm->sellerId)->first();
                        $params_seller = array('wallet_address' => $seller_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $get_order_data->total_crypto_value, 'type' => 4, 'mode' => 1);
                        $api_result_seller = $BmkApiController->verify_api($url, $params_seller);

                        $buyer_wallet_addrs = User::where('id', $get_Escrow_toConfirm->buyerId)->first();
                        $params_buyer = array('wallet_address' => $buyer_wallet_addrs->bmk_wallet_address, 'no_of_coin' => $get_order_data->total_crypto_value, 'type' => 3, 'mode' => 1);

                        $api_result_buyer = $BmkApiController->verify_api($url, $params_buyer);
                        // print_r($params);
                        // print_r($api_result);
                        // print_r($user_wallet_addrs->bmk_wallet_address);
                        // die;

                    }

                    if ($api_result_seller && $api_result_buyer) {
                        return response()->json(['message' => 'Payment confirmed successfully']);
                    } else {
                        return response()->json(['message' => 'BMK wallet cannot be confirmed!']);
                    }

                    //

                }
            }
        }
    }

    public function validateCountrypayConditions(Request $request)
    {

        $available_coin = $this->getTotalAvailableCoinsInMarketWallet();

        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));

        if ($request->ajax()) {

            $currency_type = $request->currency_type;

            $currencies_name = $allcurrency->where('name', $currency_type)->first();


            $adsID = $request->ads_id;
            $Countryparty_Conditions = Postads::where('adsid', $adsID)->first();

            $cc = json_decode($Countryparty_Conditions->countryparty_condition);
            //dd($cc->CompletedKYC);
            // CompletedKYC] => 1 [registerd_account_day] => 50 [holding_coin] => 200

            $holdingcoin = intval($cc->holding_coin);
            $registerd_account_day = intval($cc->registerd_account_day);

            $authuser = User::where('id', Auth::user()->id)->first();
            $auth_user_CompletedKYC = $authuser->government_id_verified; // Condition for normal users & add more conditions for entity
            $auth_user_registerd_account_day = $authuser->created_at;
            $auth_user_holding_coin = $available_coin;
            $auth_user_registerd_account_no_of_day =  $auth_user_registerd_account_day->diffInDays(Carbon::now());
            //print_r($auth_user_registerd_account_no_of_day);

            if (($cc->CompletedKYC == $auth_user_CompletedKYC)) {
                $auth_user_CompletedKYC = 1;
            } else {
                $auth_user_CompletedKYC = 0;
            }

            if ($registerd_account_day <= $auth_user_registerd_account_no_of_day) {

                $auth_user_registerd_account_noof_day = 1;
            } else {

                $auth_user_registerd_account_noof_day = 0;
            }

            if (($holdingcoin <= intval($auth_user_holding_coin))) {

                $auth_user_holdingcoin = 1;
            } else {


                $auth_user_holdingcoin = 0;
            }

            return response()->json(['auth_user_CompletedKYC' => $auth_user_CompletedKYC, 'auth_user_holdingcoin' => $auth_user_holdingcoin, 'auth_user_registerd_account_noof_day' => $auth_user_registerd_account_noof_day]);
        }
        return response()->json(['auth_user_CompletedKYC' => $auth_user_CompletedKYC, 'auth_user_holding_coin' => $auth_user_holding_coin, 'auth_user_registerd_account_no_of_day' => $auth_user_registerd_account_no_of_day]);
    }

    public function getpaymentMethodById(Request $request)
    {

        $paymentmethods = DB::table('payment_medhods')
            ->where('payment_medhods.id', $request->paymentMethodId)

            ->where('payment_medhods.user_id',  Auth::user()->id)
            ->whereNull('payment_medhods.deleted_at')
            ->first();


        return response()->json(['paymentmethods_details' => $paymentmethods]);
    }

    public function getPaymentDetailBymethodId(Request $request)
    {

        $paymentmethods = DB::table('payment_medhods')
            ->where('payment_medhods.id', $request->paymentMethodId)
            ->whereNull('payment_medhods.deleted_at')
            ->first();
        return response()->json(['paymentmethods_details' => $paymentmethods]);
    }

    public function getPostbyId(Request $request)
    {

        $first_order = Postads::where('id', $request->postId)->where('status', 1)->first();
        $get_bank_details = json_decode($first_order->countryparty_condition);

        $data = [];

        foreach ($get_bank_details as $key => $value) {
            $data[$key] = $value;
        }

        $paymentmethodid = json_decode($first_order->payment_method);
        //   $method_type=[];
        $payment_method_type = [];
        foreach ($paymentmethodid as $key => $value) {
            //   print_r($value);
            $method_id =  json_decode($value)->id;

            $payment_method = PaymentMedhods::where('id', $method_id)->first();
            if ($payment_method) {
                $payment_method_type[] = $payment_method;
                $method_type = [];
                foreach ($payment_method_type as $method) {
                    $method_type[] =  json_decode($method)->method_type;
                }
            }
        }

        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) { // Available bmk in market wallet
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }
        return response()->json(['ads_data' => $first_order, 'countryparty_condition' => $data, 'payment_method_type' => $payment_method_type, 'method_type' => $method_type, 'AvailableCoins' => $totalAvailableCoinsInMarketWallet]);
        // return response()->json(['ads_data' => $first_order, 'countryparty_condition' => $data,  'method_type' => $method_type ,'AvailableCoins'=>$totalAvailableCoinsInMarketWallet]);
    }

    /* public function editAds(Request $request){
        $response = Postads::where('id',$request->adsId)->where('userid',Auth::user()->id)->first();
        $paymentmethodid=json_decode($response->payment_method);

            $payment_method_type = [];
            foreach ($paymentmethodid as $key => $value) {
                $payment_method = PaymentMedhods::where('id', $value)->first();
                if ($payment_method) {
                    $payment_method_type[] = $payment_method;
                    if($payment_method_type != ''){
                        $method_type=[];
                            foreach ($payment_method_type as $method){
                                $method_type[] =  $method;
                            }
                    }else{
                        $method_type=[];
                    }
                }
            }
        return response()->json(['edit_ads_data' => $response,'method_type' => $method_type]);
    } */

    public function editAds(Request $request)
    {
        $response = Postads::where('id', $request->adsId)
            ->where('userid', Auth::user()->id)
            ->first();

        $paymentmethodid = json_decode($response->payment_method);

        $payment_method_type = [];
        $method_type = [];

        foreach ($paymentmethodid as $key => $value) {
            $payment_method = PaymentMedhods::where('id', $value)->first();

            if ($payment_method) {
                $payment_method_type[] = $payment_method;

                if ($payment_method_type != '') {
                    foreach ($payment_method_type as $method) {
                        $method_type[] =  $method;
                    }
                } else {
                    $method_type = [];
                }
            }
        }

        return response()->json(['edit_ads_data' => $response, 'method_type' => $method_type]);
    }

    public function getpaymentMethodByUserId($user_id)
    {
        if (Auth::check()) {
            $userPaymentMethod = PaymentMedhods::where('user_id', '=', $user_id)->where('deleted_at', null)->get();
            $userPaymentMethodcount = $userPaymentMethod->count();
        } else {
            $userPaymentMethod = 0;
            $userPaymentMethodcount = $userPaymentMethod;
        }
    }

    public function checkpendingorders(Request $request)
    {
        $userId = $request->userid;
        $orders = Order::join('escrows', function ($join) use ($userId) {
            $join->on('orders.seller_id', '=', 'escrows.sellerId')
                ->orOn('orders.buyer_id', '=', 'escrows.buyerId');
        })
            ->where(function ($query) use ($userId) {
                $query->where('orders.buyer_id', '=', $userId)
                    ->orWhere('orders.seller_id', '=', $userId);
            })
            ->whereIn('orders.order_status', [2, 3, 4])
            ->whereNull('orders.payment_account_details_for_buyer')
            ->whereNull('orders.payment_account_details_for_seller')
            ->where(function ($query) use ($userId) {
                $query->where('escrows.sellerId', '=', $userId)
                    ->orWhere('escrows.buyerId', '=', $userId);
            })
            ->where('escrows.orderStatus', '=', 0)
            ->count();
        // $orders = Order::where(function ($query) use ($userid){
        //     $query->where('buyer_id', $userid)
        //           ->orWhere('seller_id', $userid);
        // })
        // ->where('order_status', 1)
        // ->where('order_accept_action', 1)
        // ->where(function ($query) {
        //     $query->whereNull('buyer_confirmation_status')
        //           ->where('seller_confirmation_status', 1);
        // })
        // ->orWhere(function ($query) {
        //     $query->where('buyer_confirmation_status', 1)
        //           ->whereNull('seller_confirmation_status');
        // })
        // ->first();


        if (!empty($orders)) {
            $value = 1;
        } else {
            $value = 0;
        }

        return $value;
    }

    public function loggedinDeviceInfo()
    {
        $agent = new Agent();
        $device = $agent->device();  // Get the device name
        $platform = $agent->platform();  // Get the platform name
        $browser = $agent->browser();  // Get the browser name

        // You can also check for specific device types or browser versions
        $isMobile = $agent->isMobile();     // return in boolean
        $isDesktop = $agent->isDesktop();   // return in boolean
        $browserVersion = $agent->version($browser);

        // Return the device information to the view or perform further actions

        return response()->json(['device' => $device, 'platform' => $platform, 'browser' => $browser, 'isMobile' => $isMobile, 'isDesktop' => $isDesktop, 'browserVesion' => $browserVersion]);
    }

    public function getAddressDetailByPincode(Request $request)
    {
        $url = 'https://api.postalpincode.in/pincode/' . $request->pincode;
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return $response;
        } else {
            // Handle the case where the API request was unsuccessful
            return 'API request failed';
        }
    }

    public static function fetchDateFromSQL($sqlDate)
    {
        return $formattedDateTime = \Carbon\Carbon::parse($sqlDate)->timezone('Asia/Kolkata')->format('d-m-y h:i A');
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $url = "http://ip-api.com/json/" . $ipAddress;
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        if ($data && $data['status'] == 'success') {
            $countryName = $data['timezone'];
            return  $formattedDateTime = \Carbon\Carbon::parse($sqlDate)->timezone('$countryName')->format('d-m-y h:i A');
        } else {
            return $formattedDateTime = 'Asia/Kolkata'; // Default value if the country name cannot be determined
        }
    }

    function get_nearest_timezone($cur_lat, $cur_long, $country_code = '')
    {
        $timezone_ids = ($country_code) ? DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_code)
            : DateTimeZone::listIdentifiers();

        if ($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {

            $time_zone = '';
            $tz_distance = 0;

            //only one identifier?
            if (count($timezone_ids) == 1) {
                $time_zone = $timezone_ids[0];
            } else {

                foreach ($timezone_ids as $timezone_id) {
                    $timezone = new DateTimeZone($timezone_id);
                    $location = $timezone->getLocation();
                    $tz_lat   = $location['latitude'];
                    $tz_long  = $location['longitude'];

                    $theta    = $cur_long - $tz_long;
                    $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat)))
                        + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                    $distance = acos($distance);
                    $distance = abs(rad2deg($distance));
                    // echo '<br />'.$timezone_id.' '.$distance;

                    if (!$time_zone || $tz_distance > $distance) {
                        $time_zone   = $timezone_id;
                        $tz_distance = $distance;
                    }
                }
            }
            return  $time_zone;
        }
        return 'unknown';
    }

    public function AuthenticateSellerAndBuyerToTrade($orderPrimaryId, $userId)
    {
        if (Auth::check()) {


            $chekTrader = Order::where('id', $orderPrimaryId)
                ->where(function ($query) use ($userId) {
                    $query->where('buyer_id', $userId)
                        ->orWhere('seller_id', $userId);
                });


            $chekTrader->first();
            $chekTrader->count();
            // print_r($chekTrader->first());
            // print_r($chekTrader->count());

            if ($chekTrader->count() > 0) {

                return true;
            } else {
                return false;
            }
        } else {
            return redirect(app()->getLocale() . "/login");
        }
    }

    public function checkorderurl()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $orderid = $_SESSION['orderid'] ?? null;
            if ($orderid != null) {
                $chekBuyer = Order::where('id', $orderid)
                    ->where('buyer_id', $userId)->first();

                $chekSeller = Order::where('id', $orderid)
                    ->where('seller_id', $userId)->first();


                if ($chekBuyer != '') {
                    $chekTrader = 0;
                    return true;
                }
                if ($chekSeller != '') {
                    $chekTrader = 1;
                    return false;
                }
            } else {
                return view('web.page_not_found');
            }
        }
    }

    // New function for Sell BMK 08/06/2023

    public function sellBmkPostById(Request $request)
    {
        $first_order = Postads::where('id', $request->orderId)->first();

        $getadsid = $first_order->adsid;
        $today = date('Y-m-d');

        $activeorders = Order::where('adsid', '=', $getadsid)
            ->where('order_status', '=', 1)
            ->where('order_accept_action', '=', 1)
            ->where(function ($query) {
                $query->where(function ($subquery) {
                    $subquery->whereNull('buyer_confirmation_status')
                        ->orWhereNull('seller_confirmation_status');
                })
                    ->orWhere(function ($subquery) {
                        $subquery->whereNull('buyer_confirmation_status')
                            ->where('seller_confirmation_status', '=', 1);
                    })
                    ->orWhere(function ($subquery) {
                        $subquery->where('buyer_confirmation_status', '=', 1)
                            ->orWhereNull('seller_confirmation_status');
                    });
            })
            ->whereDate('created_at', '=', $today)
            ->first();

        $first_order_1 = Postads::where('id', $request->orderId)->where('status', 1)->first();
        $get_bank_details = json_decode($first_order_1->countryparty_condition);

        $data = [];

        foreach ($get_bank_details as $key => $value) {
            $data[$key] = $value;
        }

        $paymentmethodid = json_decode($first_order_1->payment_method);
        $payment_method_type = [];
        foreach ($paymentmethodid as $key => $value) {
            $method_id =  json_decode($value)->id;
            $payment_method = PaymentMedhods::where('id', $method_id)->first();
            if ($payment_method) {
                $payment_method_type[] = $payment_method;
                $method_type = [];
                foreach ($payment_method_type as $method) {
                    $method_type[] =  json_decode($method)->method_type;
                }
            }
        }

        if ($this->getTotalAvailableCoinsInMarketWallet() > 0) { // Available bmk in market wallet
            $totalAvailableCoinsInMarketWallet = $this->getTotalAvailableCoinsInMarketWallet();
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        }
        // return response()->json(['AvailableCoins'=>$totalAvailableCoinsInMarketWallet]);
        $available_coin = $this->getTotalAvailableCoinsInMarketWallet();
        // return response()->json(['AvailableCoins'=>$available_coin]);
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new BmkApiController;
        $url = $base_url . '/get_currency';
        $params = array();
        $allcurrency = collect($BmkApiController->verify_api($url, $params));
        if ($request->ajax()) {
            $currency_type = $request->currency_type;
            $buyer_cr_value = $request->ordervalue;
            $currencies_name = $allcurrency->where('name', $currency_type)->first();
            $crypto_value_based_on_currency_type = $currencies_name->per_coin;
            $available_ballence_in_selected_currency = $available_coin * $crypto_value_based_on_currency_type;
            // $adsID = $request->ads_id;
            $Countryparty_Conditions = Postads::where('adsid', $getadsid)->first();
            $cc = json_decode($Countryparty_Conditions->countryparty_condition);

            $authuser = User::where('id', Auth::user()->id)->first();
            $auth_user_CompletedKYC = $authuser->government_id_verified; // Condition for normal users & add more conditions for entity
            $auth_user_registerd_account_day = $authuser->created_at;
            $auth_user_holding_coin = $available_coin;
            $auth_user_registerd_account_no_of_day =  $auth_user_registerd_account_day->diffInDays(Carbon::now());
            if ($available_coin >= $buyer_cr_value) {
                $available_ballence = 1;
            } else {
                $available_ballence = 0;
            }

            //  return response()->json(['available_ballence'=>$available_ballence]);
            // return $available_ballence;

        } else {
            $currencies_name = $allcurrency->where('name', 'USD')->first();
            $crypto_value_based_on_currency_type = $currencies_name->per_coin;

            $available_ballence = $available_coin * $crypto_value_based_on_currency_type;

            // return $available_ballence;
            //  return response()->json(['available_ballence'=>$available_ballence]);
        }
        // return response()->json(['available_ballence'=>$available_ballence]);
        // return $available_ballence;

        if ($activeorders) {
            return response()->json(['order_data_by_ads' => $activeorders, 'ads_data' => $first_order_1, 'countryparty_condition' => $data,  'method_type' => $method_type, 'AvailableCoins' => $totalAvailableCoinsInMarketWallet, 'available_balance' => $available_ballence]);
        } else {
            return response()->json(['order_data_by_ads' => '0', 'ads_data' => $first_order_1, 'countryparty_condition' => $data,  'method_type' => $method_type, 'AvailableCoins' => $totalAvailableCoinsInMarketWallet, 'available_balance' => $available_ballence]);
        }
    }
}
