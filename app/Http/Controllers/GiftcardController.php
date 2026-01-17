<?php

namespace App\Http\Controllers;

use App\Models\Plan;

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Support\Authenticator;
use Illuminate\Http\RedirectResponse;
use App\Imports\GiftCardImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\EntityDetail;
use App\Models\Giftcard;
use App\Models\SecurityActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\KycVerificationController;
use App\Http\Controllers\BmkApiController;
use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ChatController;

use Validator;
use Session;
use DB;
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
use App\Models\PaymentMethodList;
use App\Models\Bank;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Support\Facades\File;
use App\Models\Order;
use App\Models\ChangePasswordHistory;
use App\Models\LoginAttemptHistory;
use Jenssegers\Agent\Agent;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class GiftcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  $this->middleware('permission:plan-list|plan-create|plan-edit|plan-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:plan-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:plan-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:plan-delete', ['only' => ['destroy']]);

        $this->middleware('permission:giftcard-list|giftcard-edit|giftcard-delete|giftcard-create', ['only' => ['index', 'manage_gift_card']]);
        $this->middleware('permission:giftcard-create', ['only' => ['generate_gift_card', 'import_gift_card']]);
        // $this->middleware('permission:giftcard-edit', ['only' => ['manage_gift_card']]);
        // $this->middleware('permission:giftcard-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "GiftCard";
    }


    public function fluctuate_wallet_coin($order_id)
    {
        $user_id = Auth::User()->id;
        $percent = env('BMK_EVERY_MONTH_FLUCTUATE_PERCENTAGE');
        $p_method = PaymentMethodList::where('name', '=', 'Gift-card')->first();
        $data = Order::where('payment_method_id', $p_method->id)->where('id', $order_id)->where('buyer_id', $user_id)->whereDate('created_at', date('Y-m-d'))->first();
        //  $wallet_coin=floatval($data->total_crypto_value)*$percent/100;
        $wallet_coin = floatval($data->total_crypto_value);
        if ($wallet_coin) {
            return $wallet_coin;
        }
    }


    public function manage_gift_card(Request $request)
    {


        // print_r($permission);

        if (Auth::User()->account_type == 3) {

            if ($request->filter_email != "") {
                $giftcard = Giftcard::orderBy('id', 'DESC')->where('Gift_Card_email', '=', $request->filter_email)->paginate(20);
                return view('admin.manage-gift-card', compact('giftcard'));
            } elseif ($request->filter_phone != "") {
                $giftcard = Giftcard::orderBy('id', 'DESC')->where('Gift_Card_phone', '=', $request->filter_phone)->paginate(20);
                return view('admin.manage-gift-card', compact('giftcard'));
            } elseif ($request->filter_date != "") {
                $filter_date = explode(" - ", $request->filter_date);
                $from = str_replace("/", "-", $filter_date[0]);
                $to = str_replace("/", "-", $filter_date[1]);
                $from = date("Y-m-d", strtotime($from));
                $to = date("Y-m-d", strtotime($to));
                $giftcard = Giftcard::orderBy('id', 'DESC')->whereBetween('created_at', [$from, $to])->paginate(20);
                return view('admin.manage-gift-card', compact('giftcard'));
            } elseif ($request->filter_status != "") {
                $giftcard = Giftcard::orderBy('id', 'DESC')->where('Gift_Card_Status', '=', $request->filter_status)->paginate(20);
                return view('admin.manage-gift-card', compact('giftcard'));
            } elseif ($request->filter_amount != "") {
                $giftcard = Giftcard::orderBy('id', 'DESC')->where('Gift_Card_Amount', '=', $request->filter_amount)->paginate(20);
                return view('admin.manage-gift-card', compact('giftcard'));
            } else {
                $giftcard = Giftcard::orderBy('id', 'DESC')->paginate(20);
                return view('admin.manage-gift-card', compact('giftcard'));
            }
        } else {
            echo "can't access this page";
        }
    }


    public function generate_gift_card(Request $request)
    {
        if (Auth::User()->account_type == 3) {
            if ($_POST) {
                $data = array();
                $random = array();
                $random_pin = array();
                $no = $_POST['no_of_gift_card'];
                for ($i = 0; $i < $no; $i++) {
                    $string1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $string = $string1;
                    $string = str_shuffle($string);
                    $end = date('Y-m-d', strtotime('+1 years'));
                    $record = array(
                        'Gift_Card_Uploader_User_Id' => Auth::user()->id,
                        'Gift_Card_phone' => $_POST['phone'],
                        'Gift_Card_email' => $_POST['email'],
                        'Gift_Card_Voucher_no' => "WEB" . $random[$i] = substr($string, 0, 13),
                        'Gift_Card_Voucher_pin' => $random[$i] = substr($string, 0, 16),
                        'created_at' => date("Y-m-d H:i:s"),
                        'Gift_Card_Expiration_date' => $_POST['exp_date'],
                        'Gift_Card_Status' => $_POST['status'],
                        'Gift_Card_Amount' => $_POST['amount']
                    );
                    $data = Giftcard::insert($record);
                }
                if ($data) {
                    echo $msg = "1";
                } else {

                    echo $msg = "0";
                }
            }
        } else {
            echo "can't access this page";
        }
    }

    public function import_gift_card(Request $request)
    {

        // die();
        if (Auth::check()) {
            // die();
            if (Auth::User()->account_type == 3) {
                // $this->check_login();
                $data = Excel::import(new GiftCardImport, $request->file('uploadexcel')->store('temp'));
                if ($data) {
                    echo $msg = "1";
                } else {

                    echo $msg = "0";
                }
            } else {
                echo "can't access this page";
            }
        } else {
            //   die();
            return redirect(app()->getLocale() . "/login");
            //   return redirect('https://wealthmark.io/en/login');
        }
    }

    public function currency_use_case(Request $request)
    {
        $base_url = env('BMK_API_BASE_URL');
        $BmkApiController = new BmkApiController;
        $url = $base_url . '/get_koin_currency_use_case';
        $params = array();
        $usecase_coin = $BmkApiController->verify_api($url, $params);
        //  print_r($usecase_coin);
        return view('admin.currency_use_case.index', compact('usecase_coin'));
    }


    public function gift_card_filter_with_limit(Request $request)
    {

        if (Auth::User()->account_type == 3) {
            $giftcard = Giftcard::orderBy('id', 'DESC');

            if ($request->filter_email != "") {
                $giftcard->where('Gift_Card_email', '=', $request->filter_email);
            };

            if ($request->filter_phone != "") {
                $giftcard->where('Gift_Card_phone', '=', $request->filter_phone);
            };

            if ($request->filter_date != "") {
                $filter_date = explode(" - ", $request->filter_date);
                $from = str_replace("/", "-", $filter_date[0]);
                $to = str_replace("/", "-", $filter_date[1]);
                $from = date("Y-m-d", strtotime($from));
                $to = date("Y-m-d", strtotime($to));

                $giftcard->whereBetween('created_at', [$from, $to]);
            };

            if ($request->filter_status != "") {
                $giftcard->where('Gift_Card_Status', '=', $request->filter_status);
            };

            if ($request->filter_amount != "") {
                $giftcard->where('Gift_Card_Amount', '=', $request->filter_amount);
            };

            if (($request->filter_email == "") && ($request->filter_phone == "") && ($request->filter_date == "") && ($request->filter_status == "") && ($request->filter_amount == "")) {

                $giftcard = $giftcard->skip($request->from)->take($request->paginating)->get();
                return response()->json(['records' => $giftcard], 200);
                //  return view('admin.manage-gift-card', compact('giftcard'));
            };


            $giftcard = $giftcard->skip($request->from)->take($request->paginating)->get();
            return response()->json(['records' => $giftcard], 200);
        }
    }

    public function manage_gift_card_filter(Request $request)
    {

        if (Auth::User()->account_type == 3) {
            $giftcard = Giftcard::orderBy('id', 'DESC');

            if ($request->filter_email != "") {
                $giftcard->where('Gift_Card_email', '=', $request->filter_email);
            };

            if ($request->filter_phone != "") {
                $giftcard->where('Gift_Card_phone', '=', $request->filter_phone);
            };

            if ($request->filter_date != "") {
                $filter_date = explode(" - ", $request->filter_date);
                $from = str_replace("/", "-", $filter_date[0]);
                $to = str_replace("/", "-", $filter_date[1]);
                $from = date("Y-m-d", strtotime($from));
                $to = date("Y-m-d", strtotime($to));

                $giftcard->whereBetween('created_at', [$from, $to]);
            };

            if ($request->filter_status != "") {
                $giftcard->where('Gift_Card_Status', '=', $request->filter_status);
            };

            if ($request->filter_amount != "") {
                $giftcard->where('Gift_Card_Amount', '=', $request->filter_amount);
            };

            if (($request->filter_email == "") && ($request->filter_phone == "") && ($request->filter_date == "") && ($request->filter_status == "") && ($request->filter_amount == "")) {

                $giftcard = $giftcard->paginate(20);
                return response()->json(['records' => $giftcard], 200);
                // return view('admin.manage-gift-card', compact('giftcard'));
            };


            $giftcard = $giftcard->paginate(20);
            return response()->json(['records' => $giftcard], 200);
        } else {
            echo "can't access this page";
        }
    }

    public function filter_users(Request $request)
    {

        if (Auth::User()->account_type == 3) {
            $users = User::orderBy('id', 'DESC');

            if ($request->filter_id != "") {
                $users->where('id', '=', $request->filter_id);
                //  $users->where('id', 'like', $request->filter_id . '%');
            };

            if ($request->filter_email != "") {
                $users->where('email', '=', $request->filter_email);
                //  $users->where('email', 'like', $request->filter_email . '%');
            };

            if ($request->filter_phone != "") {
                $users->where('phone', '=', $request->filter_phone);
                // $users->where('phone', 'like', $request->filter_phone . '%');
            };

            if ($request->filter_status != "") {
                //$users->hasRole($request->filter_status);
                $users->role($request->filter_status);
            };

            //---

            if ($request->filter_pan != "") {

                $users->where('pan_card', '=', $request->filter_pan);
                // $users->where('pan_card', 'like', $request->filter_pan . '%');

            };

            if ($request->filter_fields != "") {

                $fieldstring = explode('-', $request->filter_fields);
                $field_key = $fieldstring[0];
                $field_val = $fieldstring[1];

                // print_r($field_key);
                // print_r($field_val);
                if ($field_key == 'bmk_wallet_address') {
                    if ($field_val == 'NULL') {
                        $users->whereNull($field_key);
                    } else {
                        $users->whereNotNull($field_key);
                    }
                } elseif ($field_key == 'google_id') {
                    $users->whereNull($field_key);
                } else {
                    $users->where($field_key, '=', $field_val);
                }
            };

            if ($request->filter_account_type != "") {

                $users->where('account_type', '=', $request->filter_account_type);
            };
            if ($request->filter_accountstatus != "") {

                $users->where('status', '=', $request->filter_accountstatus);
            };


            if (($request->filter_email == "") && ($request->filter_phone == "") && ($request->filter_status == "")  && ($request->filter_pan == "") && ($request->filter_fields == "") && ($request->filter_account_type == "") && ($request->filter_accountstatus == "")) { // when nothing selected for filter

                $totalRec = $users->count();
                $users = $users->paginate(20);
                return response()->json(['records' => $users, 'totalRec' => $totalRec], 200);
            };

            $totalRec = $users->count();
            $users = $users->paginate(20);
            return response()->json(['records' => $users,  'totalRec' => $totalRec], 200);
        } else {
            echo "can't access this page";
        }
    }

    public function user_filter_with_limit(Request $request)
    {
        if (Auth::User()->account_type == 3) {
            $users = User::orderBy('id', 'DESC');

            if ($request->filter_email != "") {
                $users->where('email', '=', $request->filter_email);
            };

            if ($request->filter_phone != "") {
                $users->where('phone', '=', $request->filter_phone);
            };

            if ($request->filter_status != "") {
                //$users->hasRole($request->filter_status);
                $users->role($request->filter_status);
            };

            if (($request->filter_email == "") && ($request->filter_phone == "") && ($request->filter_status == "")) {

                $users = $users->skip($request->from)->take($request->paginating)->get();
                return response()->json(['records' => $users], 200);
            };

            $users = $users->skip($request->from)->take($request->paginating)->get();
            return response()->json(['records' => $users], 200);
        }
    }

    public function get_UserRole_by_userId($userId)
    {


        $user = User::find($userId);
        $roles = $user->roles;
        $roleNames = $user->roles()->pluck('name');
        //  print_r($roleNames); // it returns the collection of names
        return $roleNames;
    }

    public function get_Allusers_by_role($role_name)
    {
        // all users by role type
        $role = Role::findByName($role_name);
        $users = $role->users;
        return $users;
    }


    public function test_page()
    {
        $ChatController = new ChatController;
        //echo"111111";
        $data = $ChatController->webmenu();
        // print_r($data['notification']);
        //print_r($data->notification);
        //return view('template.web_menu', ['notification' => $notification,'count_allnotification' => $count_allnotification,'all_latest_notification' => $all_latest_notification]);
        //return view('template.web_menu', ['notification' => $notification,'count_allnotification' => $count_allnotification,'all_latest_notification' => $all_latest_notification]);
    }
}
