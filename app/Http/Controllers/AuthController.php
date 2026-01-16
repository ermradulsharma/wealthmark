<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FALaravel\Support\Authenticator;
use Illuminate\Support\Facades\Validator;

use Session;
use App\Models\User;
use App\Models\loginAttemptHistory;
use App\Models\Entity_detail;
use App\Models\change_password_history;
use Jenssegers\Agent\Agent;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\GoogleAuthenticatorController;
use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public $successStatus = 200;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getIPdetail()
    {
        $ip = request()->ip();
        if ($ip == '127.0.0.1') {
            $ip = '103.116.26.54';
        }
        $url = "http://ip-api.com/json/" . $ip;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $data = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($data);
        $result = (array) $result;
        return $result;
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect(app()->getLocale() . "/user/dashboard");
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

    public function logout(Request $request)
    {
        if (Auth::check()) {
            $sessionId = session("custom_session_id");
            $loginAttemptHistory = loginAttemptHistory::where('sessionId', $sessionId)->where('status', 1)->first();

            if ($loginAttemptHistory) {
                $UpdatedKycdetailTonull = loginAttemptHistory::where('sessionId', $sessionId)->update(['status' => 0]);
            }
            session()->forget('custom_session_id');

            Auth::logout();

            return redirect('/');
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

            if (($request->phone_otp == session('phone_otp')) && (session('is_mail_verified') == 0) && (session('is_two_factor') == 0) ||
                ($request->phone_otp == session('phone_otp') && (session('is_mail_verified') == 1 && $request->email_otp == session('email_otp')) && ($checkResult === true && session('is_two_factor') == 1))  ||
                ($request->phone_otp == session('phone_otp') && (session('is_mail_verified') == 1 && $request->email_otp == session('email_otp')) && (session('is_two_factor') == 0)) ||
                ($request->phone_otp == session('phone_otp') && ($checkResult === true && session('is_two_factor') == 1) && (session('is_mail_verified') == 0))
            ) {
                if (Auth::attempt(['phone' => session('phone_number'), 'password' => session('user_password')])) {

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

                            $email = Auth::user()->email;
                            $subject = "[Wealthmark] Login From New Device device Or IP " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                            $result = new MailerController;
                            $text_message = file_get_contents(asset('public/assets/img/emailTemplates/login-from-new-device-location.html'));

                            $text_message =    str_replace("@__currentTime__@", Auth::user()->updated_at, $text_message);
                            $text_message =    str_replace("@__ip__@", request()->ip(), $text_message);
                            $text_message =    str_replace("@__device__@", $agent->device(), $text_message);
                            $text_message =    str_replace("@__browser__@", $agent->browser(), $text_message);
                            $text_message = str_replace("@__location__@", $location, $text_message);
                            $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                            $result->composeEmail($email, $subject, $text_message);
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

            if (($request->email_otp == session('email_otp'))  && (session('is_phone_verified') == 0) && (session('is_two_factor') == 0) ||
                ($request->email_otp == session('email_otp') && (session('is_phone_verified') == 1 && $request->phone_otp == session('phone_otp')) && ($checkResult === true && session('is_two_factor') == 1)) ||
                ($request->email_otp == session('email_otp') &&  (session('is_phone_verified') == 1 && $request->phone_otp == session('phone_otp')) && (session('is_two_factor') == 0)) ||
                ($request->email_otp == session('email_otp') && ($checkResult === true &&  session('is_two_factor') == 1) &&  (session('is_phone_verified') == 0))
            ) {

                if (Auth::attempt(['email' => session('email_id'), 'password' => session('user_password')])) {

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
                            $text_message = file_get_contents(asset('public/assets/img/emailTemplates/login-from-new-device-location.html'));

                            $text_message =    str_replace("@__currentTime__@", Auth::user()->updated_at, $text_message);
                            $text_message =    str_replace("@__ip__@", request()->ip(), $text_message);
                            $text_message =    str_replace("@__device__@", $agent->device(), $text_message);
                            $text_message =    str_replace("@__browser__@", $agent->browser(), $text_message);
                            $text_message = str_replace("@__location__@", $location, $text_message);
                            $text_message =    str_replace("@__email__@", Auth::user()->email, $text_message);
                            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);

                            $result->composeEmail($email, $subject, $text_message);
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

                    session()->forget([
                        'qaptcha_key',
                        'email_id',
                        'email_otp',
                        'phone_otp',
                        'user_password',
                        'is_two_factor',
                        'is_phone_verified',
                        'is_mail_verified',
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

    public function request_otp(Request $request)
    {
        if (session('user_id') != "" and session('email_id') != "" and session('phone_number') != "") {
            return view('auth.request_otp');
        } else {
            return redirect(app()->getLocale() . "/login");
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
            }


            if ($request->otp_type == "Phone Number Verification Code") {

                $AuthenticatorController = new GoogleAuthenticatorController;
                $tolerance = 0;
                $checkResult = $AuthenticatorController->verifyCode(session('secret'), $request->o_otp, $tolerance);

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
    public function dashboard()
    {
        if (Auth::check()) {
            return view('user.dashboard');
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function enable_sms_authentication()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            return view('user.enable_sms_authentication', compact('user_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function enable_email_authentication()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            return view('user.enable_email_authentication', compact('user_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function enable_google_authenticator()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            return view('user.enable_google_authenticator', compact('user_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function change_google_authenticator()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            return view('user.change_google_authenticator', compact('user_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function remove_google_authenticator()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            return view('user.remove_google_authenticator', compact('user_data'));
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function need_kyc()
    {
        if (Auth::check()) {
            return view('user.need_kyc');
        }
        return redirect(app()->getLocale() . "/login");
    }

    public function identification()
    {
        return Auth::check() ? view('user.identification') : redirect(app()->getLocale() . "/login");
    }
    public function payment()
    {
        return Auth::check() ? view('user.payment') : redirect(app()->getLocale() . "/login");
    }
    public function referral()
    {
        return Auth::check() ? view('user.referral') : redirect(app()->getLocale() . "/login");
    }
    public function settings()
    {
        return Auth::check() ? view('user.settings') : redirect(app()->getLocale() . "/login");
    }
    public function api_management()
    {
        return Auth::check() ? view('user.api_management') : redirect(app()->getLocale() . "/login");
    }
    public function task_center()
    {
        return Auth::check() ? view('user.task_center') : redirect(app()->getLocale() . "/login");
    }
    public function market()
    {
        return Auth::check() ? view('user.market') : redirect(app()->getLocale() . "/login");
    }
    public function reward_center()
    {
        return Auth::check() ? view('user.reward_center') : redirect(app()->getLocale() . "/login");
    }
    public function overview()
    {
        return Auth::check() ? view('user.overview') : redirect(app()->getLocale() . "/login");
    }
    public function fiat_and_spot()
    {
        return Auth::check() ? view('user.fiat_and_spot') : redirect(app()->getLocale() . "/login");
    }
    public function funding()
    {
        return Auth::check() ? view('user.funding') : redirect(app()->getLocale() . "/login");
    }
    public function futures()
    {
        return Auth::check() ? view('user.futures') : redirect(app()->getLocale() . "/login");
    }
    public function earn()
    {
        return Auth::check() ? view('user.earn') : redirect(app()->getLocale() . "/login");
    }
    public function jex()
    {
        return Auth::check() ? view('user.jex') : redirect(app()->getLocale() . "/login");
    }
    public function wazirx()
    {
        return Auth::check() ? view('user.wazirx') : redirect(app()->getLocale() . "/login");
    }
    public function pexpay()
    {
        return Auth::check() ? view('user.pexpay') : redirect(app()->getLocale() . "/login");
    }
    public function tokocrypto()
    {
        return Auth::check() ? view('user.tokocrypto') : redirect(app()->getLocale() . "/login");
    }
    public function wealthmark_tr()
    {
        return Auth::check() ? view('user.wealthmark_tr') : redirect(app()->getLocale() . "/login");
    }
    public function staking_coin()
    {
        return Auth::check() ? view('user.staking_coin') : redirect(app()->getLocale() . "/login");
    }
    public function coin_staking_term_conditions()
    {
        return Auth::check() ? view('user.coin_staking_term_conditions') : redirect(app()->getLocale() . "/login");
    }
    public function is_entity_verified($id)
    {
        return Auth::check() ? view('user.is_entity_verified', compact('id')) : redirect(app()->getLocale() . "/login");
    }
    public function get_coin_record()
    {
        return Auth::check() ? response()->json([]) : redirect(app()->getLocale() . "/login");
    }
    public function get_our_coin()
    {
        return Auth::check() ? response()->json([]) : redirect(app()->getLocale() . "/login");
    }

    public function reset_password(Request $request)
    {
        return view('auth.reset-password-form');
    }
}
