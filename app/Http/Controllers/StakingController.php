<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Support\Authenticator;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Giftcard;
use App\Models\EntityDetail;
use App\Models\SecurityActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\KycVerificationController;
use App\Http\Controllers\BmkApiController;
use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\HomeController;
use Validator;
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
use App\Models\Bank;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Support\Facades\File;
use App\Models\Order;
use App\Models\ChangePasswordHistory;
use App\Models\GiftCardHistory;
use App\Models\LoginAttemptHistory;
use App\Models\PaymentMethodList;
use App\Models\MarketWallet;
use Jenssegers\Agent\Agent;
use App\Models\LoginDetail;
use App\Models\Chat;
use App\Models\TradingRating;
use App\Models\NotificationCategory;
use App\Notifications\TradeNotification;
use App\Models\Notification;
use App\Models\Staking;

class StakingController extends Controller
{
    public $successStatus = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //session_start();
    }

    public function random_strings($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    function random_number($length_of_string)
    {
        $str_result = '01234567899876532100123456789';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    function all_bmk_staking_coin()
    {
        $coin = DB::table('market_wallets')->selectRaw('IFNULL(SUM(no_of_coin), 0) as total')->where(function ($query) {
            $query->where('status', '=', '1')->orWhere('status', '=', '0');
        })->where('transaction_status', '=', 1)->where('type_of_coin', '=', 1)->where('coin_name', '=', 'BMK')->first()->total;
        return $coin;
    }

    // SELECT IFNULL(SUM(no_of_coin), 0) as total FROM `market_wallets` WHERE type_of_coin=1 and transaction_status=1 and (status=1 or status=0) and coin_name='BMK'


    function get_bmk_recurring_coin_for_staking()
    {
        $coin = DB::table('market_wallets')->selectRaw('IFNULL(SUM(no_of_coin), 0) as total')->where('user_id', '=', Auth::User()->id)->where('status', '=', 0)->where('transaction_status', '=', 1)->where('type_of_coin', '=', 1)->where('coin_type', '=', 2)->where('coin_name', '=', 'BMK')->first()->total;
        return $coin;
    }

    function get_bmk_recurring_wallet_coin_for_staking_list()
    {
        $list_coin = DB::table('market_wallets')->selectRaw('id')->where('user_id', '=', Auth::User()->id)->where('status', '=', 0)->where('transaction_status', '=', 1)->where('type_of_coin', '=', 1)->where('coin_type', '=', 2)->where('coin_name', '=', 'BMK')->get();
        return $list_coin;
    }

    function get_other_coin_for_staking($coin_name, $coin_type)
    {
        $coin = DB::table('market_wallets')->selectRaw('IFNULL(SUM(no_of_coin), 0) as total')->where('user_id', '=', Auth::User()->id)->where('status', '=', 1)->where('transaction_status', '=', 1)->where('type_of_coin', '=', 1)->where('coin_name', '=', $coin_name)->first()->total;
        return $coin;
    }


    public function get_coin_for_staking(Request $request)
    {
        if ($request->coin_name == "BMK") {
            $HomeController = new HomeController;
            if ($HomeController->getTotalAvailableCoinsInMarketWallet() > 0) {
                $totalAvailableCoinsInMarketWallet = $HomeController->getTotalAvailableCoinsInMarketWallet();
                if (strpos($totalAvailableCoinsInMarketWallet, ',') !== false) {
                    $totalAvailableCoinsInMarketWallet = str_replace(',', '', $totalAvailableCoinsInMarketWallet);
                }
            } else {
                $totalAvailableCoinsInMarketWallet = 0;
            }
            // $total = DB::table('market_wallets')->where('user_id', '=', Auth::User()->id)->where('type_of_coin', '=', 1)->where('transaction_status', '=', 1)->whereIn('coin_type', ['1', '2', '3'])->where('status', '=', '1')
            // ->where('coin_name', '=', 'BMK')->select(DB::raw('IFNULL(SUM(no_of_coin), 0) as total'))->get()->first()->total;
            $coin = DB::table('market_wallets')->selectRaw('IFNULL(SUM(no_of_coin), 0) as total')->where('user_id', '=', Auth::User()->id)->where('status', '=', 0)->where('transaction_status', '=', 1)->where('type_of_coin', '=', 1)->where('coin_type', '=', 2)->where('coin_name', '=', 'BMK')->first()->total;
            $data = array();
            echo $data = "<option value=''></option><option value='P2P'>P2P(" . number_format($totalAvailableCoinsInMarketWallet, 8) . ")</option><option value='Recurring'>Recurring($coin)</option>";
        }

        if ($request->coin_name == "BTC" || $request->coin_name == "ETH") {
            $total = DB::select("SELECT SUM(no_of_coin) as no_of_coin FROM `market_wallets`,orders WHERE market_wallets.order_id=orders.id and status=1 AND type_of_coin='1' AND transaction_status='1' and orders.crypto_type='$request->coin_name' and orders.buyer_id=market_wallets.user_id and market_wallets.user_id=" . Auth::User()->id);
            $stacking_coin = Staking::where('user_id', '=', Auth::User()->id)->where('status', 1)->where('maturity_status', 0)->where('staking_coin_name', $request->coin_name)->where('staking_coin_type', "P2P")->sum('before_maturity_coins');
            $coin = floor($total[0]->no_of_coin) - floor($stacking_coin);
            echo $data = "<option value=''></option><option value='P2P'>P2P($coin)</option>";
        }
    }

    public function get_BMK_p2p_balance()
    {
        $total = DB::table('market_wallets')->where('user_id', '=', Auth::User()->id)->where('type_of_coin', '=', 1)->where('transaction_status', '=', 1)->whereIn('coin_type', ['1', '2', '3'])->where('status', '=', '1')
            ->where('coin_name', '=', 'BMK')->select(DB::raw('IFNULL(SUM(no_of_coin), 0) as total'))->get()->first()->total;
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new BmkApiController;
        $currency = Currency::where('name', 'INR')->first();
        $coin_price_url = $base_url . '/get_current_coin_price';
        $coin_price_params = array();
        $price = $BmkApiController->verify_api($coin_price_url, $coin_price_params);
        $price = $price->price * $total;
        $data = array('total_coin' => $total, 'total_amount_inr' => $price, 'total_amount_usd' => $price * $currency->currencyVal_by_USD);
        return $data;
    }

    public function submit_staking_record(Request $request)
    {
        if ($request->session()->get('staking_coin_otp') == $request->staking_coin_otp) {
            $base_url = env('BMK_API_BASE_URL');
            $BmkApiController = new BmkApiController;
            $url = $base_url . '/get_koin_currency_use_case';
            $use_coin_params = array();
            $bmk_user_case = $BmkApiController->verify_api($url, $use_coin_params);
            $all_benefites_coin = $this->all_bmk_staking_coin();
            if ($bmk_user_case[0]->early_user_benefit >= $all_benefites_coin) {
                if ($this->get_bmk_recurring_coin_for_staking() == 0 and $request->coin_name == "BMK" and $request->bmk_coin_type == 'Recurring') {
                    return response()->json(['error' => "Insufficient Recurring BMK coin for stacking."], 401);
                } else if ($this->get_other_coin_for_staking($request->coin_name, $request->bmk_coin_type) == 0 and $request->coin_name == "BMK" and $request->bmk_coin_type == 'P2P') {
                    return response()->json(['error' => "Insufficient P2P BMK coin for stacking."], 401);
                } else {
                    $url = $base_url . '/find_gift_card_coin';
                    $rec_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '3');
                    $regular_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '2');
                    $charity_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '4');
                    $regular_coin = $BmkApiController->verify_api($url, $rec_params);
                    $recurring_coin = $BmkApiController->verify_api($url, $regular_params);
                    $charity_coin = $BmkApiController->verify_api($url, $charity_params);
                    $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
                    $bmk_params = array('currency_name' => 'USD');
                    $bmk_usd_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);
                    $bmk_inr_params = array('currency_name' => 'INR');
                    $bmk_inr_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_inr_params);
                    $bmk_stack_per = env('BMK_STACKING_PERCENTAGE');
                    // if($request->coin_name=="BMK"){
                    //     $coin_type=$request->bmk_coin_type;
                    // }else{
                    //     $coin_type=$request->other_coin_type;
                    // }
                    if ($request->coin_name == "BMK" and $request->bmk_coin_type == 'P2P') {
                        $stacking_coin = $this->get_other_coin_for_staking($request->coin_name, $request->bmk_coin_type);
                    }

                    if ($request->coin_name == "BMK" and $request->bmk_coin_type == 'Recurring') {
                        $stacking_coin = $this->get_bmk_recurring_coin_for_staking();
                    }
                    $total_coin_benefits = $stacking_coin * $bmk_stack_per / 100;
                    $after_maturity_coins = $total_coin_benefits * 12 * $request->tenure;
                    $benefites_url = $base_url . '/check_staking_benefites';
                    // $benefites_params = array('no_of_coin' => $total_coin_benefits*12*$request->tenure);
                    $benefites_params = array('no_of_coin' => $total_coin_benefits * 12 * $request->tenure);
                    $benefites_result = $BmkApiController->verify_api($benefites_url, $benefites_params);

                    if ($benefites_result->msg == 200) {

                        $total_coin = floatval($after_maturity_coins) + floatval($stacking_coin);
                        $maturity_date = date('Y-m-d', strtotime('+' . $request->tenure . 'years'));
                        $staking_data = array(
                            'user_id' => Auth::user()->id,
                            'staking_transaction_id' => $this->random_strings(32),
                            'staking_num_of_year' => $request->tenure,
                            'stacking_num' => $this->random_number(20),
                            'staking_coin_name' => $request->coin_name,
                            'staking_coin_type' => $request->bmk_coin_type,
                            'date_of_deposite' => date('Y-m-d'),
                            'maturity_date' => $maturity_date,
                            'before_maturity_coins' => $stacking_coin,
                            'before_maturity_value_usd' => $stacking_coin * $bmk_usd_price->per_coin,
                            'before_maturity_value_inr' => $stacking_coin * $bmk_inr_price->per_coin,
                            'after_maturity_coins' => $total_coin,
                            'after_total_value_INR' => $total_coin * $bmk_inr_price->per_coin,
                            'after_total_value_USD' => $total_coin * $bmk_usd_price->per_coin,
                            'upto_total_benefits' => $total_coin_benefits * 12 * $request->tenure,
                            'upto_monthly_benefits' => $stacking_coin * $bmk_stack_per / 100,
                            'current_price_of_coin_usd' => $bmk_usd_price->per_coin,
                            'current_price_of_coin_inr' => $bmk_inr_price->per_coin,
                            'percentage_of_interest' => $bmk_stack_per,
                            'status' => '1',
                            'maturity_status' => 0,
                            'comments' => "Staking coin"
                        );
                        //$data=Staking::insert($staking_data);
                        $stakings_data = Staking::insertGetId($staking_data);
                        if ($stakings_data) {
                            if ($request->coin_name == "BMK" and $request->bmk_coin_type == 'Recurring') {
                                $data = $this->get_bmk_recurring_wallet_coin_for_staking_list();
                                foreach ($data as $row) {
                                    $block_recurring_wallet = MarketWallet::where('id', $row->id)->update(['status' => 2]);
                                }
                            }
                            if ($request->coin_name == "BMK" and $request->bmk_coin_type == 'P2P') {
                                $data = DB::table('market_wallets')->selectRaw('id')->where('user_id', '=', Auth::User()->id)->where('type_of_coin', '=', 1)->where('transaction_status', '=', 1)->whereIn('coin_type', ['1', '2', '3'])->where('status', '=', '1')
                                    ->where('coin_name', '=', 'BMK')->get();
                                //$data=DB::table('market_wallets')->selectRaw('id')->where('user_id', '=', Auth::User()->id)->where('staking_id', '=', '0')->where('transaction_status', '=', '1')->where('type_of_coin', '=', '1')->where('coin_name', '=', 'BMK')->whereIn('coin_type', [1, 2, 3])->where('status', '=', 1)->get();
                                foreach ($data as $row) {
                                    $block_recurring_wallet = MarketWallet::where('id', $row->id)->update(['status' => 2, 'new_staking_id' => $stakings_data]);
                                }
                            }
                            $monthly_wallet_coin_val = $stacking_coin * $bmk_stack_per / 100;
                            $month = (12 * $request->tenure) - 1;
                            for ($x = 0; $x <= $month; $x++) {
                                //echo"1";
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
                                $staking_wallet_arr = array(
                                    'user_id'    => Auth::user()->id,
                                    'order_id' => '0',
                                    'staking_id' => $stakings_data,
                                    'coin_type' => 1,
                                    'coin_name' => "BMK",
                                    'no_of_coin' => $monthly_wallet_coin_val,
                                    'type_of_coin' => 1,
                                    'transaction_status' => $transaction_status,
                                    'status' => $status,
                                    'every_month_benefits_inr' => $stacking_coin * $bmk_inr_price->per_coin * 5 / 100,
                                    'every_month_benefits_usd' => $stacking_coin * $bmk_usd_price->per_coin * 5 / 100,
                                    'p2p_credit_date' => $p2p_credit_date,
                                    'comments' =>    'BMK staking revenue benefites.',
                                );

                                $block_recurring_wallet = MarketWallet::insert($staking_wallet_arr);
                            }

                            $subject = "[Wealthmark] Your Coin Staking Successfully" . \Illuminate\Support\Facades\Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                            $result = new MailerController;
                            $text_message = file_get_contents(asset('public/assets/img/emailTemplates/coinStakingSuccessful.html'));
                            $text_message =    str_replace("@__email__@", Auth::User()->email, $text_message);
                            //  $text_message =	str_replace("@__otp__@", $otp, $text_message);
                            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
                            $mail_response = $result->composeEmail(Auth::User()->email, $subject, $text_message);
                            return response()->json(['success' => "200"], $this->successStatus);
                        } else {
                            return response()->json(['error' => "something went wrong."], 401);
                        }
                    } else {
                        return response()->json(['error' => "Sorry! can't staking coin."], 401);
                    }
                }
            } else {
                return response()->json(['error' => "Sorry! can't staking coin because insufficient coin for staking."], 401);
            }
        } else {
            return response()->json(['error' => "Please enter valid otp."], 401);
        }
    }

    public function genrate_staking_record_otp(Request $request)
    {
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new BmkApiController;
        $url = $base_url . '/get_koin_currency_use_case';
        $use_coin_params = array();
        $bmk_user_case = $BmkApiController->verify_api($url, $use_coin_params);
        $all_benefites_coin = $this->all_bmk_staking_coin();
        if ($bmk_user_case[0]->early_user_benefit >= $all_benefites_coin) {
            if ($this->get_bmk_recurring_coin_for_staking() == 0 and $request->coin_name == "BMK" and $request->bmk_coin_type == 'Recurring') {
                return response()->json(['error' => "Insufficient Recurring BMK coin for stacking."], 401);
            } else if ($this->get_other_coin_for_staking($request->coin_name, $request->bmk_coin_type) == 0 and $request->coin_name == "BMK" and $request->bmk_coin_type == 'P2P') {
                return response()->json(['error' => "Insufficient P2P BMK coin for stacking."], 401);
            } else {
                $url = $base_url . '/find_gift_card_coin';
                $rec_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '3');
                $regular_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '2');
                $charity_params = array('wallet_address' => Auth::User()->bmk_wallet_address, 'type' => '3', 'mode' => '4');
                $regular_coin = $BmkApiController->verify_api($url, $rec_params);
                $recurring_coin = $BmkApiController->verify_api($url, $regular_params);
                $charity_coin = $BmkApiController->verify_api($url, $charity_params);
                $current_bmk_price_url = $base_url . '/get_bmk_currency_price';
                $bmk_params = array('currency_name' => 'USD');
                $bmk_usd_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_params);
                $bmk_inr_params = array('currency_name' => 'INR');
                $bmk_inr_price = $BmkApiController->verify_api($current_bmk_price_url, $bmk_inr_params);
                $bmk_stack_per = env('BMK_STACKING_PERCENTAGE');

                if ($request->coin_name == "BMK" and $request->bmk_coin_type == 'P2P') {
                    $stacking_coin = $this->get_other_coin_for_staking($request->coin_name, $request->bmk_coin_type);
                }

                if ($request->coin_name == "BMK" and $request->bmk_coin_type == 'Recurring') {
                    $stacking_coin = $this->get_bmk_recurring_coin_for_staking();
                }

                $total_coin_benefits = $stacking_coin * $bmk_stack_per / 100;
                $after_maturity_coins = $total_coin_benefits * 12 * $request->tenure;
                $benefites_url = $base_url . '/check_staking_benefites';
                $benefites_params = array('no_of_coin' => $total_coin_benefits * 12 * $request->tenure);
                $benefites_result = $BmkApiController->verify_api($benefites_url, $benefites_params);
                if ($benefites_result->msg == 200) {
                    $otp = mt_rand(100000, 999999);
                    $request->session()->put('staking_coin_otp', $otp);
                    $HomeController = new HomeController;
                    $data = $HomeController->hideEmailAddress(Auth::User()->email);
                    $subject = "[Wealthmark] Confirm Your Staking Coin OTP Verification " . \Illuminate\Support\Facades\Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                    $result = new MailerController;
                    $text_message = file_get_contents(asset('public/assets/img/emailTemplates/gift_card_email_otp.html'));
                    $text_message =    str_replace("@__email__@", Auth::User()->email, $text_message);
                    $text_message =    str_replace("@__otp__@", $otp, $text_message);
                    $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
                    $mail_response = $result->composeEmail(Auth::User()->email, $subject, $text_message);
                    if ($mail_response == "success") {
                        return response()->json(['success' => "200", 'email_data' => $data, 'otp' => $otp], $this->successStatus);
                    } else {
                        return response()->json(['error' => $mail_response], $this->successStatus);
                    }
                    //return response()->json(['success' => "200"], $this-> successStatus);
                } else {
                    return response()->json(['error' => "Sorry! can't staking coin."], 401);
                }
            }
        } else {
            return response()->json(['error' => "Sorry! can't staking coin because insufficient coin for staking."], 401);
        }
    }

    public function get_staking_coin_detail(Request $request)
    {
        $stacking_coin = Staking::where('user_id', '=', Auth::User()->id)->where('id', $request->id)->first();
        $staking_wallet_coin = MarketWallet::where('staking_id', '=', $request->id)->where('coin_type', 1)->get();
        $coin = array('stacking_coin' => $stacking_coin, 'staking_wallet_coin' => $staking_wallet_coin);
        $coin = json_encode($coin);
        return $coin;
    }

    public function get_recurring_coin_detail(Request $request)
    {
        $Order_coin = Order::where('buyer_id', '=', Auth::User()->id)->where('id', $request->id)->first();
        $recurring_wallet_coin = MarketWallet::where('order_id', '=', $request->id)->where('coin_type', 2)->where('coin_name', 'BMK')->get();
        $buyer_detail = User::select('first_name')->where('id', '=', Auth::User()->id)->first();
        $seller_detail = User::select('first_name')->where('id', '=', $Order_coin->seller_id)->first();
        $coin = array('order_coin' => $Order_coin, 'seller_detail' => $seller_detail, 'buyer_detail' => $buyer_detail, 'recurring_wallet_coin' => $recurring_wallet_coin);
        $coin = json_encode($coin);
        return $coin;
    }

    //$this->credit_staking_bmk_benefites();
    // public function credit_staking_bmk_benefites(){
    //     $results = DB::table('market_wallets')->where('coin_name', '=', 'BMK')->where('user_id', '=', Auth::User()->id)->where('status', '=', 0)->where('type_of_coin', '=', 1)->where('transaction_status', '=', 1)
    //         ->where(function($query) {
    //             $query->where('p2p_credit_date', '=', DB::raw('CURDATE()'))->orWhere('p2p_credit_date', '<=', DB::raw('CURDATE()'));
    //         })->get();
    //     if($results){
    //         foreach($results as $row){
    //             //echo MarketWallet::where('id', $row->id)->where('user_id',Auth::User()->id)->where('coin_name','BMK')->update(['order_id' => 1,'status'=>1,'updated_at'=> date("Y-m-d H:i:s")]);
    //             $base_url=env('BMK_API_BASE_URL');
    //             $BmkApiController = new BmkApiController;
    //             $url = $base_url.'/buy_bmk_coin';
    //             $user_wallet_addrs=User::where('id', Auth::user()->id)->first();
    //             $params = array('wallet_address'=>$user_wallet_addrs->bmk_wallet_address,'no_of_coin'=>$row->no_of_coin,'type'=>3, 'mode'=>5);
    //             $api_result = $BmkApiController->verify_api($url,$params);
    //             $order_id=rand(1000000000,1234567890);
    //             $currency = Currency::where('name','INR')->first();
    //             $coin_price_url = $base_url.'/get_current_coin_price';
    //             $coin_price_params = array();
    //             $price=$BmkApiController->verify_api($coin_price_url,$coin_price_params);
    //             $seller_results = DB::table('model_has_roles')->join('users', 'users.id', '=', 'model_has_roles.model_id')->where('model_has_roles.role_id', '=', 1)->select('*')->first();
    //             $data=array(
    //                 'order_id'=>$order_id,
    //                 'buyer_id'=>Auth::User()->id,
    //                 'seller_id'=>$seller_results->id,
    //                 'buyer_country'=>Auth::user()->country,
    //                 'seller_country'=>Auth::user()->country,
    //                 'crypto_type'=>"BMK",
    //                 'total_crypto_value'=>$row->no_of_coin,
    //                 'payment_method_id'=> 0,
    //                 'payment_bank_id'=>0,
    //                 'crypto_current_value'=>$price->price*$currency->currencyVal_by_USD,
    //                 'current_crypto_in_inr'=>$price->price,
    //                 'inr_value_in_usd'=>$currency->currencyVal_by_INR,
    //                 'order_status'=>1,
    //             );
    //             $order_data = Order::insertGetId($data);
    //             if($order_data){
    //                 MarketWallet::where('id', $row->id)->where('user_id',Auth::User()->id)->where('coin_name','BMK')->update(['order_id' => $order_data,'status'=>1,'updated_at'=> date("Y-m-d H:i:s")]);
    //             }
    //         }
    //     }
    // }













}
