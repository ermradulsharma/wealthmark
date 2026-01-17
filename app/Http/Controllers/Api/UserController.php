<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BmkApiController;
use App\Http\Controllers\StakingController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\SmsController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Staking;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;
use Spatie\Permission\Models\Role;
use App\Models\FailedVerificationHistory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function verify_captcha()
    {
        session_start();
        $aResponse['error'] = false;

        if (isset($_POST['action']) && isset($_POST['qaptcha_key'])) {
            $_SESSION['qaptcha_key'] = false;

            if (htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'qaptcha') {

                $_SESSION['qaptcha_key'] = $_POST['qaptcha_key'];

                echo json_encode($aResponse);
            } else {
                $aResponse['error'] = true;
                echo json_encode($aResponse);
            }
        } else {
            $aResponse['error'] = true;
            echo json_encode($aResponse);
        }
    }

    public function send_old_phone_otp_by_secure_phone(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'old_phone' => 'required|digits_between:10,10|numeric',
            ],
            [
                'old_phone.required' => 'Please enter a phone number.',
                'old_phone.digits_between' => 'Please enter a valid phone number.',
                'old_phone.numeric' => 'Please enter a valid phone number.'
            ]
        );
        if ($validator->fails()) { /*  */
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $mobile = $request->old_phone;
            $otp = mt_rand(100000, 999999);
            $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
            $sms = urlencode($text_message);
            $result = new SmsController;
            $sms_response = $result->Send_SMS($mobile, $sms);
            if ($sms_response == 1) {
                session_start();
                $_SESSION['phone_otp'] = $otp;
                $_SESSION['phone_number'] = $mobile;
                return response()->json(['success' => "OTP Send successfully"], $this->successStatus);
            } else {
                return response()->json(['success' => $sms_response], $this->successStatus);
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
            session_start();
            if ($request->phone_otp == $_SESSION["phone_otp"] && $request->email_otp == $_SESSION["email_otp"]) {
                if (Auth::attempt(['email' => $_SESSION["email_id"], 'password' => $_SESSION["user_password"]])) {
                    unset($_SESSION['qaptcha_key']);
                    unset($_SESSION['email_id']);
                    unset($_SESSION['phone_number']);
                    unset($_SESSION['phone_otp']);
                    unset($_SESSION['email_otp']);
                    unset($_SESSION['user_password']);
                    unset($_SESSION['user_id']);
                    $user = Auth::user();
                    $success['token'] =  $user->createToken('WealthmarkApp')->accessToken;
                    $success['userId'] = $user->id;
                    return response()->json(['success' => $success], $this->successStatus);
                } else {
                    return response()->json(['error' => "Unauthorised"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function email_login(Request $request)
    {

        session_start();
        $i = 0;
        $captcha = "";
        foreach ($_POST as $key => $value) {
            if ($i == 0) {
                $captcha = $key;

                //return $captcha;
            }
            $i++;
        }

        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',

            ],
            [
                'email.required' => 'Please enter your email',
                'email.email' => 'Please enter a correct email address',
                'password.required' => 'Please enter your password'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } elseif (isset($_POST['capchaname'])) {

            return response()->json(['error' => "mismatch Captcha"], 401);
        } elseif (!isset($_POST['' . $captcha . '']) || empty($captcha)) {

            return response()->json(['error' => "mismatch Captcha"], 401);
        } else {

            // print_r($_SESSION['qaptcha_key']);
            // dd($_POST[''.$captcha.'']);

            // dd($_SESSION['qaptcha_key'], $_POST[''.$captcha.'']);

            $_SESSION['qaptcha_key'] = '';
            // dd($_SESSION['qaptcha_key'], $_POST[''.$captcha.'']);

            if ($_SESSION['qaptcha_key'] == "" && empty($_SESSION['qaptcha_key'])) {
                //$QaptChaInput = $_SESSION['qaptcha_key'];
                //   if(isset($_POST[''.$captcha.'']) && empty($_POST[''.$captcha.''])){
                if (isset($_POST['' . $captcha . ''])) {
                    //  dd( $_POST[''.$captcha.'']);

                    $dbuser = User::where('email', $request->email)->first();
                    $edata = array("email" => "Please enter registered email id");
                    $pdata = array("password" => "Please enter valid password");
                    $blockededata = array("email" => "Your account is blocked");
                    if (empty($dbuser)) {
                        return response()->json(['error' => $edata], 401);
                    }
                    if ($dbuser->status == 2) {
                        return response()->json(['error' => $blockededata], 401);
                    }
                    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                        $user = Auth::user();
                        $_SESSION['email_id'] = $user->email;
                        $_SESSION['phone_number'] = $user->phone;
                        $_SESSION['user_id'] = $user->id;
                        $_SESSION['user_password'] = $request->password;
                        $_SESSION['account_type'] = $user->account_type;
                        $_SESSION['is_two_factor'] = $user->is_two_factor;
                        $_SESSION['is_mail_verified'] = $user->is_mail_verified;
                        $_SESSION['is_phone_verified'] = $user->is_phone_verified;
                        $_SESSION['secret'] = $user->google2fa_secret;
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => $pdata], 401);
                    }
                } else {
                    return response()->json(['error' => "mismatch Captcha"], 401);
                }
            } else {
                return response()->json(['error' => "Invalid Captcha"], 401);
                unset($_SESSION['qaptcha_key']);
            }
        }
    }

    public function phone_login(Request $request)
    {
        session_start();
        $i = 0;
        $captcha = "";
        foreach ($_POST as $key => $value) {
            if ($i == 0) {
                $captcha = $key;
                //return $captcha;
            }
            $i++;
        }

        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required|min:10|numeric',
                'password' => 'required',
                'country_phone_code' => 'required',
            ],
            [
                'phone.required' => 'Please enter valid phone number.',
                'password.required' => 'Please enter your password',
                'country_phone_code.required' => 'Please select country'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } elseif (isset($_POST['capchaname'])) {

            return response()->json(['error' => "mismatch Captcha"], 401);
        } elseif (!isset($_POST['' . $captcha . '']) || empty($captcha)) {

            return response()->json(['error' => "mismatch Captcha"], 401);
        } else {

            $_SESSION['qaptcha_key'] = '';
            if ($_SESSION['qaptcha_key'] == "" && empty($_SESSION['qaptcha_key'])) {
                //echo $QaptChaInput = $_SESSION['qaptcha_key'];
                // if(isset($_POST[''.$captcha.'']) && empty($_POST[''.$captcha.''])){
                if (isset($_POST['' . $captcha . ''])) {
                    $dbuser = User::where('phone', $request->phone)->first();
                    $edata = array("phone" => "Please enter registered phone");
                    $pdata = array("password" => "Please enter valid password");
                    $blockededata = array("phone" => "Your account is blocked");

                    if (empty($dbuser)) {
                        return response()->json(['error' => $pdata], 401);
                    }

                    if ($dbuser->status == 2) {
                        return response()->json(['error' => $blockededata], 401);
                    }
                    if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
                        $user = Auth::user();
                        $_SESSION['email_id'] = $user->email;
                        $_SESSION['phone_number'] = $user->phone;
                        $_SESSION['user_id'] = $user->id;
                        $_SESSION['user_password'] = $request->password;
                        $_SESSION['account_type'] = $user->account_type;
                        $_SESSION['is_two_factor'] = $user->is_two_factor;
                        $_SESSION['is_mail_verified'] = $user->is_mail_verified;
                        $_SESSION['is_phone_verified'] = $user->is_phone_verified;
                        $_SESSION['secret'] = $user->google2fa_secret;
                        return response()->json(['success' => "200"], $this->successStatus);
                    } else {
                        return response()->json(['error' => $pdata], 401);
                    }
                } else {
                    return response()->json(['error' => "mismatch Captcha"], 401);
                }
            } else {
                return response()->json(['error' => "Invalid Captcha"], 401);
                unset($_SESSION['qaptcha_key']);
            }
        }
    }

    public function reset_password(Request $request)
    {
        session_start();
        $i = 0;
        $captcha = "";
        foreach ($_POST as $key => $value) {
            if ($i == 0) {
                $captcha = $key;
            }
            $i++;
        }
        $_SESSION['qaptcha_key'] = '';

        if ($request->type == "email") {
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                ],
                [
                    'email.required' => 'Please enter your email',
                    'email.email' => 'Please enter a correct email address',
                ]
            );
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } elseif (isset($_POST['capchaname'])) {

                return response()->json(['error' => "mismatch Captcha"], 401);
            } elseif (!isset($_POST['' . $captcha . '']) || empty($captcha)) {

                return response()->json(['error' => "mismatch Captcha"], 401);
            } else {
                if ($_SESSION['qaptcha_key'] == "" && empty($_SESSION['qaptcha_key'])) {
                    // if(isset($_POST[''.$captcha.'']) && empty($_POST[''.$captcha.''])){
                    if (isset($_POST['' . $captcha . ''])) {
                        $dbuser = User::Where('email', $request->email)->first();
                        $edata = array("email" => "Please enter registered email id");
                        if (empty($dbuser)) {
                            return response()->json(['error' => $edata], 401);
                        } else {
                            $_SESSION['email_id'] = $dbuser->email;
                            $_SESSION['phone_number'] = $dbuser->phone;
                            $_SESSION['user_id'] = $dbuser->id;
                            $_SESSION['account_type'] = $dbuser->account_type;
                            $_SESSION['user_type'] = $dbuser->user_type;
                            $_SESSION['login_type'] = $request->type;
                            $_SESSION['login_ip'] = request()->ip();
                            $_SESSION['is_mail_verified'] = $dbuser->is_mail_verified;
                            $_SESSION['is_phone_verified'] = $dbuser->is_phone_verified;
                            $_SESSION['is_two_factor'] = $dbuser->is_two_factor;
                            $_SESSION['secret'] = $dbuser->google2fa_secret;
                            return response()->json(['success' => "200"], $this->successStatus);
                        }
                    } else {
                        return response()->json(['error' => "mismatch Captcha"], 401);
                    }
                } else {
                    return response()->json(['error' => "Invalid Captcha"], 401);
                    unset($_SESSION['qaptcha_key']);
                }
            }
        }

        if ($request->type == "phone") {
            $validator = Validator::make(
                $request->all(),
                [
                    'phone' => 'required|min:10|numeric',
                    'country_phone_code' => 'required',
                ],
                [
                    'phone.required' => 'Please enter valid phone number.',
                    'country_phone_code.required' => 'Please select country'
                ]
            );
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            } elseif (isset($_POST['capchaname'])) {

                return response()->json(['error' => "mismatch Captcha"], 401);
            } elseif (!isset($_POST['' . $captcha . '']) || empty($captcha)) {

                return response()->json(['error' => "mismatch Captcha"], 401);
            } else {

                if ($_SESSION['qaptcha_key'] == "" && empty($_SESSION['qaptcha_key'])) {
                    // if( isset($_POST[''.$captcha.'']) && empty($_POST[''.$captcha.''])){
                    if (isset($_POST['' . $captcha . ''])) {
                        $dbuser = User::where('phone', $request->phone)->first();
                        $pdata = array("phone" => "Please enter registered phone");
                        if (empty($dbuser)) {
                            return response()->json(['error' => $pdata], 401);
                        } else {
                            $_SESSION['email_id'] = $dbuser->email;
                            $_SESSION['phone_number'] = $dbuser->phone;
                            $_SESSION['user_id'] = $dbuser->id;
                            $_SESSION['account_type'] = $dbuser->account_type;
                            $_SESSION['user_type'] = $dbuser->user_type;
                            $_SESSION['login_type'] = $request->type;
                            $_SESSION['login_ip'] = request()->ip();
                            $_SESSION['is_mail_verified'] = $dbuser->is_mail_verified;
                            $_SESSION['is_phone_verified'] = $dbuser->is_phone_verified;
                            $_SESSION['is_two_factor'] = $dbuser->is_two_factor;
                            $_SESSION['secret'] = $dbuser->google2fa_secret;
                            return response()->json(['success' => "200"], $this->successStatus);
                        }
                    } else {
                        return response()->json(['error' => "mismatch Captcha"], 401);
                    }
                } else {
                    return response()->json(['error' => "Invalid Captcha"], 401);
                    unset($_SESSION['qaptcha_key']);
                }
            }
        }
    }

    public function verify_Lphone_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {
            session_start();
            if ($request->phone_otp == $_SESSION["phone_otp"]) {
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function verify_Lemail_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {
            session_start();
            if ($request->email_otp == $_SESSION["email_otp"]) {

                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    public function get_country_record(Request $request)
    {
        /*
	    $country_code=$_POST['country_code'];
	    $url = 'http://country.io/names.json';
        $json = file_get_contents($url);
        $jo = json_decode($json);
        ?>
            <div class="disable_div d-flex form-control">
                <div class="img">
                    <!--<img src="https://countryflagsapi.com/png/<?php echo $_POST['country_code'] ?>" class="flag">-->
                    <img src="<?php echo asset('assets/img/country-flag/'.$_POST['country_code'].'.png'); ?>" class="flag">
                </div>
                <div class="text">
                    <span><?php echo $jo->$country_code; ?></span>
                </div>
                <div class="iconbox">
                    <i class="bi bi-caret-down-fill"></i>
                </div>
            </div>
            <input type="hidden" name="country_name" value="<?php echo $jo->$country_code; ?>">

        <?php
        */



        // start new code 13012023
        $country_code = $_POST['country_code'];
        $country = Country::where('ISO2code', $country_code)->first();

?>
        <div class="disable_div d-flex form-control">
            <div class="img">
                <img src="<?php echo asset('assets/img/country-flag/' . $country->ISO2code . '.png'); ?>" class="flag">
            </div>
            <div class="text">
                <span><?php echo  $country->name; ?></span>
            </div>
            <div class="iconbox">
                <i class="bi bi-caret-down-fill"></i>
            </div>
        </div>
        <input type="hidden" name="country_name" value="<?php echo  $country->name; ?>">
        <input type="hidden" name="countryyId" value="<?php echo  $country->id; ?>">
        <input type="hidden" name="country_ISO2code" value="<?php echo  $country->ISO2code; ?>">
<?php
        // end new code 13012023
    }


    public function save_personal_info(Request $request)
    {
        echo Auth::user()->id;
        session_start();
        $user = User::find($_SESSION['userId']);
        $user->first_name = $request->post('first_name');
        $user->middle_name = $request->post('middle_name');
        $user->last_name = $request->post('last_name');
        $user->dob = date("Y-m-d", strtotime($request->post('dob')));
        $user->city = $request->post('city');
        $user->pan_card = $request->post('pan_card');
        $user->residential_address = $request->post('residential_address');
        $user->postal_code = $request->post('postal_code');
        $user->country_code = $request->post('country_code');

        $data = $user->save();
        if ($data) {
            return response()->json(['success' => "200"], $this->successStatus);
        } else {
            return response()->json(['error' => "Unauthrized"], 401);
        }
    }


    public function save_id_card_info(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'front_image' => 'required',
            'back_image' => 'required',
            'id_card_type' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            session_start();
            $user = User::find($_SESSION['userId']);
            $user->id_card_front_image = $_POST['front_image'];
            $user->id_card_back_image = $_POST['back_image'];
            $user->id_card_type = $_POST['id_card_type'];
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
            session_start();
            $user = User::find($_SESSION['userId']);
            $user->selfie_image = $_POST['selfie_image'];
            $data = $user->save();
            if ($data) {
                return response()->json(['success' => "200"], $this->successStatus);
            } else {
                return response()->json(['error' => "Unauthrized"], 401);
            }
        }
    }


    // For phone register otp

    public function verify_phone_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_otp' => 'required|numeric|digits_between:6,6',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => "The otp must be 6 digits."], 401);
        } else {
            session_start();
            if ($request->phone_otp == $_SESSION["phone_otp"]) {
                $input['parent_referral_id'] = $_SESSION["parent_referral_id"];
                $input['is_phone_verified'] = 1;
                $input['phone'] = $_SESSION['phone_number'];
                $input['password'] = $_SESSION['user_pass'];
                $input['referral_id'] = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                $input['country_phone_code'] = $_SESSION["country_phone_code"];
                $input['country_code'] = $_SESSION["country_code"];
                $input['is_agree_email_update'] = $_SESSION["check_email_update"];
                if (!empty($_SESSION["entity_name"]) && !empty($_SESSION["entity_type"])) {
                    $input['account_type'] = 2;
                }
                // print_r($input);
                //  die;
                $user = User::create($input);
                if ($user) {
                    if (!empty($_SESSION["entity_name"]) && !empty($_SESSION["entity_type"])) {
                        //  To run query to insert entity
                        unset($_SESSION['entity_name']);
                        unset($_SESSION['entity_type']);
                    }
                    unset($_SESSION['parent_referral_id']);
                    unset($_SESSION['is_phone_verified']);
                    unset($_SESSION['phone']);
                    unset($_SESSION['password']);
                    unset($_SESSION['referral_id']);
                    unset($_SESSION['country_phone_code']);
                    unset($_SESSION['country_code']);
                    unset($_SESSION['phone_otp']);
                    unset($_SESSION['check_email_update']);
                    //$success['token'] =  $user->createToken('WealthmarkApp')-> accessToken;
                    $_SESSION['userId'] = $user->id;
                    return response()->json(['account_type' => $user->account_type, 'success' => "200"], $this->successStatus);
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
            session_start();
            if ($request->email_otp == $_SESSION["email_otp"]) {
                $input['parent_referral_id'] = $_SESSION["parent_referral_id"];
                $input['is_mail_verified'] = 1;
                $input['email'] = $_SESSION['email_id'];
                $input['password'] = $_SESSION['user_pass'];
                $input['referral_id'] = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                $input['is_agree_email_update'] = $_SESSION["check_email_update"];
                if (!empty($_SESSION["entity_name"]) && !empty($_SESSION["entity_type"])) {
                    $input['account_type'] = 2;
                }
                $user = User::create($input);
                if ($user) {
                    if (!empty($_SESSION["entity_name"]) && !empty($_SESSION["entity_type"])) {
                        // To run query to insert entity
                        // $user->id;
                        unset($_SESSION['entity_name']);
                        unset($_SESSION['entity_type']);
                        // $_SESSION['account_type'] = $user->account_type;
                    }
                    unset($_SESSION['parent_referral_id']);
                    unset($_SESSION['is_mail_verified']);
                    unset($_SESSION['email']);
                    unset($_SESSION['password']);
                    unset($_SESSION['referral_id']);
                    unset($_SESSION['email_otp']);
                    unset($_SESSION['check_email_update']);
                    //$success['token'] =  $user->createToken('WealthmarkApp')-> accessToken;
                    $_SESSION['userId'] = $user->id;
                    return response()->json(['account_type' => $user->account_type, 'success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "Somthing went wrong"], 401);
                }
            } else {
                return response()->json(['error' => "Enter valid otp"], 401);
            }
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function email_register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'defaultCheck3' => 'required',

            ],
            [
                'email.required' => 'Please enter your email',
                'email.email' => 'Please enter a correct email address',
                'email.unique' => 'The email address is already associated with another Wealthmark account',
                'password.required' => 'Please enter your password',
                'password.min' => 'Please enter password atleast 8 character',
                'defaultCheck3.required' => 'Terms & Services must be accepted.'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            session_start();
            if (request('parent_referral_id') != "") {
                $user = User::where('referral_id', $request->parent_referral_id)->first();
                //print_r($user);
                if (!empty($user)) {
                    unset($_SESSION['phone_number']);
                    $_SESSION["parent_referral_id"] = request('parent_referral_id');
                    $_SESSION["user_pass"] = bcrypt(request('password'));
                    $_SESSION["email_id"] =  request('email');
                    $_SESSION["check_email_update"] =  request('check_email_update');
                    return response()->json(['success' => "200"], $this->successStatus);
                } else {
                    return response()->json(['error' => "401"], 401);
                }
            } else {
                unset($_SESSION['phone_number']);
                $_SESSION["parent_referral_id"] = request('parent_referral_id');
                $_SESSION["user_pass"] = bcrypt(request('password'));
                $_SESSION["email_id"] =  request('email');
                $_SESSION["check_email_update"] =  request('check_email_update');
                return response()->json(['success' => "200"], $this->successStatus);
            }
        }
    }

    public function phone_register(Request $request)
    {
        // echo request('check_email_update');
        // die;
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required|digits_between:10,10|numeric|unique:users',
                'password' => 'required',
                'country_phone_code' => 'required',
                'defaultCheck2' => 'required',
            ],
            [
                'phone.required' => 'Please enter a phone number.',
                'phone.numeric' => 'Please enter a valid phone number.',
                'phone.unique' => 'The phone number is already associated with another Wealthmark account',
                'phone.digits_between' => 'Please enter a valid phone number.',
                'password.required' => 'Please enter your password',
                'country_phone_code.required' => 'Please select country',
                'defaultCheck2.required' => 'Terms & Services must be accepted.'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            session_start();
            if (request('parent_referral_id') != "") {
                $user = User::where('referral_id', $request->parent_referral_id)->first();
                //print_r($user);
                if (!empty($user)) {
                    unset($_SESSION['email_id']);
                    $_SESSION["parent_referral_id"] = request('parent_referral_id');
                    $_SESSION["user_pass"] = bcrypt(request('password'));
                    $_SESSION["phone_number"] =  request('phone');
                    $_SESSION["country_phone_code"] =  request('country_phone_code');
                    $_SESSION["country_code"] =  request('country_code');
                    $_SESSION["check_email_update"] =  request('check_email_update');
                    //return response()->json(['success'=>"200"], $this-> successStatus);
                } else {
                    return response()->json(['error' => "401"], 401);
                }
            } else {

                unset($_SESSION['email_id']);
                $_SESSION["parent_referral_id"] = request('parent_referral_id');
                $_SESSION["user_pass"] = bcrypt(request('password'));
                $_SESSION["phone_number"] =  request('phone');
                $_SESSION["country_phone_code"] =  request('country_phone_code');
                $_SESSION["country_code"] =  request('country_code');
                $_SESSION["check_email_update"] =  request('check_email_update');
                //  print_r($_SESSION);
                // die;
                return response()->json(['success' => "200"], $this->successStatus);
            }
        }
    }

    /**  Forget Password phone/email api **/

    public function reset_password_by_phone(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required|digits_between:10,10|numeric',
            ],
            [
                'phone.required' => 'Please enter a phone number.',
                'phone.digits_between' => 'Please enter a valid phone number.',
                'phone.numeric' => 'Please enter a valid phone number.'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $user = User::where('phone', $request->phone)->first();
            if ($user) {
                $success['token'] =  $user->createToken('WealthmarkApp')->accessToken;
                $success['userId'] = $user->id;
                $success['user_email'] = $user->email;
                $success['user_phone'] = $user->phone;
                return response()->json(['success' => $success], $this->successStatus);
            } else {
                return response()->json(['error' => "Please enter valid phone number"], 401);
            }
        }
    }

    public function reset_password_by_email(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'Please enter your email',
                'email.email' => 'Please enter a correct email address',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $success['token'] =  $user->createToken('WealthmarkApp')->accessToken;
                $success['userId'] = $user->id;
                $success['user_email'] = $user->email;
                $success['user_phone'] = $user->phone;
                return response()->json(['success' => $success], $this->successStatus);
            } else {
                return response()->json(['error' => "Please enter valid email address"], 401);
            }
        }
    }

    public function send_otp_by_secure_mail_old_user()
    {
        session_start();
        if ($_POST['old_user_new_email']) {
            $otp = mt_rand(100000, 999999);
            $subject = "[Wealthmark] Confirm OTP verification From " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
            $result = new MailerController;
            $text_message = file_get_contents(asset('assets/img/emailTemplates/Emailtemplate_email.html'));
            $text_message =    str_replace("@__email__@", $_POST['old_user_new_email'], $text_message);
            $text_message =    str_replace("@__otp__@", $otp, $text_message);
            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
            $mail_response = $result->composeEmail($_POST['old_user_new_email'], $subject, $text_message);
            print_r($mail_response);
            if ($mail_response == "success") {
                $_SESSION['email_otp'] = $otp;
                return response()->json(['success' => "200"], $this->successStatus);
            }
            if ($mail_response == "error") {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
        } else {
            return response()->json(['error' => "Somthing went wrong"], 401);
        }
    }

    public function sendOtpBySecurePhoneOldUser(Request $request)
    {
        $request->validate([
            'old_user_new_phone' => 'required|string'
        ]);

        $phone = $request->input('old_user_new_phone');

        // Generate OTP
        $otp = mt_rand(100000, 999999);
        $textMessage = 'Dear User, Your account verification OTP is ' . $otp . '. This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
        $sms = urlencode($textMessage);

        // Send SMS
        $smsController = new SmsController();
        $smsResponse = $smsController->Send_SMS($phone, $sms);

        if ($smsResponse == 1) {
            session(['phone_otp' => $otp]);

            return response()->json([
                'success' => true,
                'message' => 'OTP sent successfully'
            ], 200);
        }

        return response()->json([
            'error' => 'Failed to send OTP'
        ], 500);
    }


    public function send_otp_by_secure_mail()
    {
        session_start();
        if ($_SESSION['email_id']) {
            $otp = mt_rand(100000, 999999);

            $subject = "[Wealthmark] Confirm OTP verification From " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
            $result = new MailerController;


            //	$text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.wealthmark.io Team wealthmark";

            $text_message = file_get_contents(asset('assets/img/emailTemplates/Emailtemplate_email.html'));
            $text_message =    str_replace("@__email__@", $_SESSION['email_id'], $text_message);
            $text_message =    str_replace("@__otp__@", $otp, $text_message);
            $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);


            //  $_SESSION['email_otp'] = $otp;

            $mail_response = $result->composeEmail($_SESSION['email_id'], $subject, $text_message);
            if ($mail_response == "success") {
                $_SESSION['email_otp'] = $otp;
                //$user = User::where('email', $_SESSION['email_id'])->first();
                //$user->update($input);
                //$input['password'] = $_SESSION['user_pass'];
                //$input['referal_id'] = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
                //$input['email_id'] = $_SESSION['email_id'];
                //$user = User::create($input);
                //	return response()->json(['email_otp'=> $_SESSION['email_otp'] ,'success' => "200"], $this-> successStatus);
                return response()->json(['success' => "200"], $this->successStatus);
            }
            if ($mail_response == "error") {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
        } else {
            return response()->json(['error' => "Somthing went wrong"], 401);
        }
    }

    public function custom_read_mail_template()
    {
        $text_message = file_get_contents(asset('assets/img/emailTemplates/Emailtemplate_email.html'));
        $text_message =    str_replace("@__email__@", "user@mail.com", $text_message);
        $text_message =    str_replace("@__otp__@", "123456", $text_message);
        $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
        print_r($text_message);

        //     $to = "prateekmishra681@gmail.com";
        //     $subject = "Test email";
        //     $message = "
        //     <h1>Testing mail</h1>
        //     ";
        //     // Always set content-type when sending HTML email
        //     $headers = "MIME-Version: 1.0" . "\r\n";
        //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //     // More headers
        //     $headers .= 'From: <no-reply@wealthmark.io>' . "\r\n";
        //     $send=mail($to,$subject,$message,$headers);
        //     echo $send;
    }


    public function send_otp_toAdd_Payment_onPhone(Request $request)
    {
        session_start();
        $phone = $request->phone;

        if ($phone) {
            $otp = mt_rand(100000, 999999);

            $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
            $sms = urlencode($text_message);
            $result = new SmsController;
            $sms_response = $result->Send_SMS($phone, $sms);

            //	print_r($sms_response);
            if ($sms_response == 1) {
                $_SESSION['otp_beforeAddPayment'] = $otp;
                return response()->json(['success' => "200"], $this->successStatus);
            }
            if ($mail_response == "error") {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
        } else {
            return response()->json(['error' => "Somthing went wrong"], 401);
        }
    }

    public function send_otp_by_secure_phone()
    {
        session_start();
        if ($_SESSION['phone_number']) {
            $otp = mt_rand(100000, 999999);
            //	$text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.gmartindia.com Team Gmart India";
            //	$text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.webgv.in";
            $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
            $sms = urlencode($text_message);
            $result = new SmsController;
            $sms_response = $result->Send_SMS($_SESSION['phone_number'], $sms);
            //	print_r($sms_response);
            if ($sms_response == 1) {
                $_SESSION['phone_otp'] = $otp;
                // $input['phone_otp'] = $otp;
                // $user = User::where('phone', $_SESSION['phone_number'])->first();
                // $user->update($input);
                //	return response()->json(['phone_otp' => $_SESSION['phone_otp'] ,'success' => "200"], $this-> successStatus);
                return response()->json(['success' => "200"], $this->successStatus);
            }
            if ($mail_response == "error") {
                return response()->json(['error' => 'Unauthorised'], 401);
            }
        } else {
            return response()->json(['error' => "Somthing went wrong"], 401);
        }
    }


    /** send otp phone/email for forget and register account**/
    public function send_otp_by_phone(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required|digits_between:10,10|numeric',
            ],
            [
                'phone.required' => 'Please enter a phone number.',
                'phone.digits_between' => 'Please enter a valid phone number.',
                'phone.numeric' => 'Please enter a valid phone number.'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $user = User::where('phone', $request->phone)->first();
            if ($user) {
                $mobile = $user->phone;
                $otp = mt_rand(100000, 999999);
                //	$text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.gmartindia.com Team Gmart India";
                //	$text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.webgv.in";
                $text_message = 'Dear User Your account verification OTP is ' . $otp . ' This is valid for only 15 minutes. Do not share the OTP with anyone. Team INDEX';
                $sms = urlencode($text_message);
                $result = new SmsController;
                $sms_response = $result->Send_SMS($mobile, $sms);
                if ($sms_response == 1) {
                    $input['phone_otp'] = $otp;
                    $user->update($input);
                    return response()->json(['success' => "OTP Send successfully"], $this->successStatus);
                } else {
                    return response()->json(['success' => $sms_response], $this->successStatus);
                }
            } else {
                return response()->json(['error' => "Please enter valid phone number"], 401);
            }
        }
    }

    public function send_otp_by_mail(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'Please enter your email',
                'email.email' => 'Please enter a correct email address',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $otp = mt_rand(100000, 999999);
                $subject = "[Wealthmark] Confirm Your Registration From " . \Request::ip() . " - " . date('Y-m-d h:i:s') . " (UTC)";
                $result = new MailerController;
                //	$text_message = "Dear Customer Your account verification OTP is ".$otp." This is valid for only 15 minutes. Do not share the OTP with anyone. @www.gmartindia.com Team Gmart India";

                $text_message = file_get_contents(asset('assets/img/emailTemplates/Emailtemplate_email.html'));
                $text_message =    str_replace("@__email__@", $_SESSION['email_id'], $text_message);
                $text_message =    str_replace("@__otp__@", $otp, $text_message);
                $text_message =    str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);


                $mail_response = $result->composeEmail($user->email, $subject, $text_message);
                if ($mail_response == "success") {
                    $input['email_otp'] = $otp;
                    $user->update($input);
                    $success['token'] =  $user->createToken('WealthmarkApp')->accessToken;
                    $success['userId'] = $user->id;
                    return response()->json(['success' => $success], $this->successStatus);
                }
                if ($mail_response == "error") {
                    return response()->json(['error' => 'Unauthorised'], 401);
                }
            } else {
                return response()->json(['error' => "Please enter valid email address"], 401);
            }
        }
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function userDetails()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }


    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     * register entity first step
     */
    public function registerEntityprimary_detail(Request $request)
    {

        //  print_r("entity primary primary");
        //  $primaryDetail = $request->all();
        //  print_r($request->entityName."/".$request->entityType);


        session_start();
        //  Session::put('entity_name', $request->entityName);
        // Session::put('entity_type', $request->entityType);

        $_SESSION["entity_name"] = $request->entityName;
        $_SESSION["entity_type"] = $request->entityType;


        // return response()->json($primaryDetail);
        return response()->json($_SESSION["entity_name"]);
    }

    /** user role method started 151122**/

    public function index(Request $request)
    {

        if (Auth::check() and Auth::User()->account_type == 3) {
            $data = User::orderBy('id', 'DESC')->paginate(20);
            $role = Role::all();

            return view('admin.users.index', compact('data', 'role'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
        } else {
            echo "Sorry can't access this page";
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }


    public function edit($id)
    {




        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        $ifpanORdigilockerFailedEver = FailedVerificationHistory::where('user_id', $user->id)->get();

        $objHomeController = new HomeController;
        $BmkApiController = new BmkApiController;
        $StakingController = new StakingController;

        if ($objHomeController->getTotalAvailableCoinsInMarketWallet($user->id) > 0) {
            $totalAvailableCoinsInMarketWallet = $objHomeController->getTotalAvailableCoinsInMarketWallet($id);
        } else {
            $totalAvailableCoinsInMarketWallet = 0;
        };

        $base_url = env('BMK_API_BASE_URL');
        $url = $base_url . '/find_gift_card_coin';
        $rec_params = array('wallet_address' => $user->bmk_wallet_address, 'type' => '3', 'mode' => '3');
        $regular_params = array('wallet_address' => $user->bmk_wallet_address, 'type' => '3', 'mode' => '2');
        $charity_params = array('wallet_address' => $user->bmk_wallet_address, 'type' => '3', 'mode' => '4');

        $recurring_coin = $StakingController->get_bmk_recurring_coin_for_staking();
        $regular_coin = $BmkApiController->verify_api($url, $rec_params);
        $charity_coin = $BmkApiController->verify_api($url, $charity_params);
        // print_r($charity_params);
        // print_r($charity_coin);

        $stacking = 0;
        $coinSInEscrowAccount = $objHomeController->getEscrowHoldCoin($id);
        $stackingData = Staking::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('admin.users.edit', compact('user', 'roles', 'userRole', 'ifpanORdigilockerFailedEver', 'totalAvailableCoinsInMarketWallet', 'recurring_coin', 'regular_coin', 'charity_coin', 'coinSInEscrowAccount', 'stackingData'));
    }


    public function update(Request $request, $id)
    {

        // dd($request->all());
        $this->validate($request, [
            //   'first_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            // 'roles' => 'required'
        ]);

        $input = $request->all();


        // dd($dataURL_frontImage_Adhar, $dataURL_backImage_Adhar );

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        if (!empty($input['selfie_image'])) {
            // Validate and store the selfie...
            $selfie = $request->file('selfie_image');
            $mimeType_selfieImg = $selfie->getClientMimeType();
            $selfieImg = file_get_contents($selfie->path());
            $encoded_selfieImg = base64_encode($selfieImg);
            $dataURL_selfie = 'data:' . $mimeType_selfieImg . ';base64,' . $encoded_selfieImg;
            // end Validate and store the selfie ...
            $input['selfie_image'] = $dataURL_selfie;
        } else {
            $input = Arr::except($input, array('selfie_image'));
        }

        if (!empty($input['pan_card_img'])) {
            // Validate and store the pan-car-img...
            $imageName = $_FILES['pan_card_img']['name'];
            $tempPath = $_FILES["pan_card_img"]["tmp_name"];
            $uploadTo = "storage/app/images/pancards";

            $prod = date("Yndhis");
            $extension = explode(".", $imageName);
            $imageName = $prod . "." . end($extension);

            $basename = basename($imageName);
            $originalPath = $uploadTo . '/' . $basename;
            $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
            $homeControllerObject = new HomeController;
            $msg = $homeControllerObject->upload_image($uploadTo, $imageName, $tempPath, $imageExt, $originalPath);
            // end Validate and store the pan-car-img...
            $input['pan_card_img'] = $originalPath;
        } else {
            $input = Arr::except($input, array('pan_card_img'));
        }

        if (!empty($input['id_card_front_image'])) {
            // Validate and store the aadhaar card front...
            $aadhaar_front = $request->file('id_card_front_image');
            $aadhaar_frontImg = file_get_contents($aadhaar_front->path());
            $encoded_frontImage_Adhar = base64_encode($aadhaar_frontImg);
            $mimeType_front = $aadhaar_front->getClientMimeType();
            $dataURL_frontImage_Adhar = 'data:' . $mimeType_front . ';base64,' . $encoded_frontImage_Adhar;
            // end Validate and store the aadhaar front ...
            $input['id_card_front_image'] = $dataURL_frontImage_Adhar;
        } else {
            $input = Arr::except($input, array('id_card_front_image'));
        }


        if (!empty($input['id_card_back_image'])) {
            // Validate and store the aadhaar card back...
            $aadhaar_back = $request->file('id_card_back_image');
            $aadhaar_backImg = file_get_contents($aadhaar_back->path());
            $encoded_backImage_Adhar = base64_encode($aadhaar_backImg);
            $mimeType_back = $aadhaar_back->getClientMimeType();
            $dataURL_backImage_Adhar = 'data:' . $mimeType_back . ';base64,' . $encoded_backImage_Adhar;
            // end Validate and store the aadhaar card back...
            $input['id_card_back_image'] = $dataURL_backImage_Adhar;
        } else {
            $input = Arr::except($input, array('id_card_back_image'));
        }

        // dd($input);

        $user = User::find($id);
        $user->update($input);


        //   $updateUserInformation = User::where('id', Auth::user()->id)->update( [ 'pan_card_img' => $originalPath    ]);

        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /** user role method ended 151122**/
    public function get_verification_type(Request $request)
    {
        return response()->json([]);
    }
    public function send_otp_by_secure_phone_old_user(Request $request)
    {
        return response()->json([]);
    }
    public function create()
    {
        return response()->json([]);
    }
    public function destroy($id)
    {
        return response()->json([]);
    }
}
