<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\loginAttemptHistory;
use Session;
use Jenssegers\Agent\Agent;
use App\Http\Controllers\MailerController;


class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $ipdetail =  $this->getIPdetail();
            $location = $ipdetail['city'];

            $user = Socialite::driver('google')->user();
            //  dd($user->user['given_name'], $user->user['family_name']);
            // dd($user->id, $user->email);


            $checkaccountType = User::where('email', $user->email)->first(); // account type should not be entity type that is '2'.
            // print("hello");

            if ($checkaccountType) {


                // update old user email verification from zero to one
                if ($checkaccountType->user_type == 1 && ($checkaccountType->is_mail_verified == 0)) {
                    User::where('email', $checkaccountType->email)->update(['is_mail_verified' => 1]);
                }
                // end update old user email verification from zero to one

                if ($checkaccountType->account_type == 1) {

                    if ($checkaccountType->google_id == null) {

                        $updateGoogleidifNull = User::where('email', $user->email)->update(['google_id' => $user->id]);
                    }

                    $finduser = User::where('google_id', $user->id)->Where('email', $user->email)->first();
                    Auth::login($finduser);




                    // for loginattemptedhidtory conditions
                    //  print_r( session_id());
                    // die;
                    //  $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                    //         $session_id=substr(str_shuffle($str_result),0, 32);

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

                    if ($getLoginAttemptHistory) {
                        $updateLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->update(['status' => 0]);
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
                            $text_message = str_replace("@__location__@", $location, $text_message);
                            $text_message =    str_replace("@__browser__@", $agent->browser(), $text_message);
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


                    return redirect()->intended(app()->getLocale() . '/user/dashboard');
                } else {


                    return redirect()->intended(app()->getLocale() . '/login' . '/loginFailed');
                    // return redirect()->json(['error' => 401]);
                }
            } else {

                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'first_name' => $user->user['given_name'] . ' ' . $user->user['family_name'],
                    'last_name' => $user->user['family_name'],
                    'google_id' => $user->id,
                    'is_mail_verified' => 1
                    // 'password' => encrypt('123456dummy')
                    // 'account_type' => 1
                ]);

                $findinserted = User::where('email', $user->email)->first();
                $new_user_name = random_int(1000000000, 9999999999);
                $updateusername =  User::where('email', $user->email)
                    ->update(['user_name' => $new_user_name, 'referral_id' => substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10)]);

                Auth::login($newUser);

                // for loginattemptedhidtory conditions
                //  print_r( session_id());
                // die;
                // $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                // $session_id=substr(str_shuffle($str_result),0, 32);
                $agent = new Agent();

                $getLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->first();

                $custom_session_id = random_int(1000000000, 9999999999);
                session(['custom_session_id' => $custom_session_id]);

                if ($getLoginAttemptHistory) {
                    $updateLoginAttemptHistory = loginAttemptHistory::where('user_id', Auth::user()->id)->where('status', '=', 1)->update(['status' => 0]);
                    if ($updateLoginAttemptHistory) {

                        $loginAttemptHistory = new loginAttemptHistory;
                        $loginAttemptHistory->user_id = Auth::user()->id;
                        $loginAttemptHistory->browser = $agent->browser();
                        $loginAttemptHistory->device = $agent->device();
                        $loginAttemptHistory->ip = request()->ip();
                        $loginAttemptHistory->location = $location;
                        $loginAttemptHistory->sessionId = session('custom_session_id');
                        $loginAttemptHistory->status = 1;
                        $loginAttemptHistory->save();
                    }
                } else {

                    $loginAttemptHistory = new loginAttemptHistory;
                    $loginAttemptHistory->user_id = Auth::user()->id;
                    $loginAttemptHistory->browser = $agent->browser();
                    $loginAttemptHistory->device = $agent->device();
                    $loginAttemptHistory->ip = request()->ip();
                    $loginAttemptHistory->location = $location;
                    $loginAttemptHistory->sessionId = session('custom_session_id');
                    $loginAttemptHistory->status = 1;
                    $loginAttemptHistory->save();
                }



                // end for login attempt history





                // return redirect()->intended(app()->getLocale().'/user/dashboard');

            }
        } catch (Exception $e) {
            return redirect()->intended(app()->getLocale() . '/login' . '/googleLoginError');
            //  dd($e->getMessage());
            //  return redirect()->json(['loginMsg' => 'failed']);
        }
    }

    public function getIPdetail()
    {
        $ipaddress = request()->ip();
        $details = array('city' => 'Unknown', 'country' => 'Unknown');
        try {
            $json = file_get_contents("http://ipinfo.io/{$ipaddress}/geo");
            if ($json) {
                $details = json_decode($json, true);
            }
        } catch (Exception $e) {
            // Fallback for failed external API call
        }
        return $details;
    }
}
