<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Exception;
use App\Models\User;
use App\Models\failed_verification_history;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use DB;
use Carbon\Carbon;

class KycVerificationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function CallKycApi($url, $loginData, $header)
    {

        //  $baseurl ="https://preproduction.signzy.tech/api/v2/patrons/login";
        // $loginData = '{
        //                 "username": '.$api_user.',
        //                 "password": '.$api_pwd.'
        //               }';

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            // CURLOPT_POSTFIELDS => "{\"username\":\"<username>\",\"password\":\"<Password-or-apikey>\"}",
            CURLOPT_POSTFIELDS => $loginData,
            //  CURLOPT_POSTFIELDS => $loginData,
            CURLOPT_HTTPHEADER => $header,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            return $response;
            // dd($response);
        }
    }

    public function KycApiLogin()
    {

        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",

        ];


        $api_user = env('KYC_API_USERNAME');
        $api_pwd = env('KYC_API_PASSWORD');
        $loginData = "{\"username\":\"$api_user\",\"password\":\"$api_pwd\"}";
        $baseurl = env('KYC_API_BASE_URL');
        $urltype = 'patrons/login';

        $url = $baseurl . $urltype;

        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);


        return $data;
    }

    public function identify($id_img, $id_type)
    {

        $baseurl = env('KYC_API_BASE_URL');
        $loggApiUserdata = $this->KycApiLogin();
        $id = $loggApiUserdata->id;
        $user_id = $loggApiUserdata->userId;
        $urltype = 'identities';

        $url = $baseurl . 'patrons/' . $user_id . '/' . $urltype;
        //  dd($url);
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
            "Authorization:" . $id,
        ];

        //dd($header);


        $loginData = "{\"type\":\"$id_type\",\"callbackUrl\":\"https://localhost/data.php\",\"email\":\"admin@signzy.com\",\"images\":[\"$id_img\"]}";

        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);
        return $data;
        // $itemId = $data->id;
        //  $accessToken = $data->accessToken;
        // $patronId = $data->patronId;
        //  dd($itemId, $accessToken, $patronId );

    }

    public function read_identity_document($id_img_url, $img_type)
    {

        //   public function read_identity_document() {


        $id_img = $id_img_url;
        $id_type = $img_type;



        /*
                $id_type = 'aadhaar';
              $id_type = 'individualPan';
                $id_type = 'businessPan';
                $id_type = 'passport';
                $id_type = 'drivingLicence';
                $id_type = 'cheque';
                $id_type = 'voterid';
         */



        /*
            $id_img = 'https://wealthmark.io/storage/app/public/1674539360_41414.png';
            $id_img = 'https://i.pinimg.com/originals/44/76/75/447675edf75967ed3047d0ff28f280ac.jpg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/1.jpg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/Jay_prakash_front.jpeg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/amiback.jpeg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/amifront.jpeg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/vivek%20back.jpg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/vivek%20front.jpg';
            $id_img = 'https://wealthmark.io/public/assets/img/aadhaars/sudhanshu.jpg';
            // $id_img = 'https://i.pinimg.com/originals/a2/f1/f2/a2f1f2834472ef1c93d076de916f6ee9.jpg';

   */

        $identitifiedUser =  $this->identify($id_img, $id_type);
        //  dd($identitifiedUser);
        $url = env('KYC_API_SNOOP_URL');
        $loginData = "{\"service\":\"Identity\",\"itemId\":\"$identitifiedUser->id\",\"accessToken\":\"$identitifiedUser->accessToken\",\"task\":\"autoRecognition\",\"essentials\":{}}";
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",

        ];

        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);
        // dd($data);
        return $data;
    }


    public  function verifyFaceWithId()
    {
        //    function verifyFaceWithId($image1, $image2){
        //Face Match
        //  $img1 = 'https://preproduction-persist.signzy.tech/api/files/37388521/download/ee1d12e4efca4326b2ce959a2422e3b9eed15096e782498085406b5077025601.jpeg';
        //  $img2 = 'https://preproduction-persist.signzy.tech/api/files/37388523/download/bcc2563db81549dd995a10510e5c4fb64fe86101ffe44f07b972a8056eb8bdfc.png';

        $img1 = 'https://wealthmark.io/storage/app/public/1674634255_41414.png';
        $img2 = 'https://wealthmark.io/storage/app/public/1674634327_41414.png';

        //  $img1 = $image1;
        //  $img2 = $image2;

        $loggApiUserdata = $this->KycApiLogin();
        $id = $loggApiUserdata->id;
        $user_id = $loggApiUserdata->userId;
        $baseurl = env('KYC_API_BASE_URL');
        $urltype = 'facematches';

        $url = $baseurl . 'patrons/' . $user_id . '/' . $urltype;
        $curl = curl_init();
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
            "Authorization:" . $id,
        ];

        $loginData =  "{\"essentials\":{\"firstImage\":\"$img1\",\"secondImage\":\"$img2\"}}";

        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);
        // dd($data);
        return $data;
    }

    public function verify_aadhar_number($aadhar_img, $aadhaar_no, $img_type)
    {

        $id_img = $aadhar_img;
        $id_number = $aadhaar_no;
        $id_type = $img_type;

        $identitifiedUser =  $this->identify($id_img, $id_type);
        // print_r($identitifiedUser);
        // die;
        $url = env('KYC_API_SNOOP_URL');
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
        ];
        $loginData = "{\"service\":\"Identity\",\"itemId\":\"$identitifiedUser->id\",\"accessToken\":\"$identitifiedUser->accessToken\",\"task\":\"verifyAadhaar\",\"essentials\":{\"uid\":\"$id_number\"}}";
        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);
        // dd($data);
        return $data;
    }


    public function verify_pan_number($name, $pan_img, $pan_no, $img_type)
    {
        //  public function verify_pan_number(){
        // $nameOnPan = 'monu';
        // $id_img = 'https://wealthmark.io/storage/app/public/images/pancards/YR1qC20mrr7xOkCabvC46AMJ3fzjEqPa6FTUGEal.jpg';
        // $id_number = 'EOTPM5725R';
        // $id_type = 'individualPan';

        $id_img = $pan_img;
        $id_number = $pan_no;
        $id_type = $img_type;
        $nameOnPan = $name;

        $identitifiedUser =  $this->identify($id_img, $id_type);
        //print_r($identitifiedUser->error->statusCode);
        if ($identitifiedUser->error->statusCode == 403) {
            return $identitifiedUser->error->statusCode;
        } else {
            $url = env('KYC_API_SNOOP_URL');
            $header = [
                "Accept: */*",
                "Accept-Language: en-US,en;q=0.8",
                "content-type: application/json",
            ];

            $loginData = "{\"service\":\"Identity\",\"itemId\":\"$identitifiedUser->id\",\"accessToken\":\"$identitifiedUser->accessToken\",\"task\":\"verification\",\"essentials\":{\"name\":\"$nameOnPan\",\"number\":\"$id_number\"}}";
            $d =  $this->CallKycApi($url, $loginData, $header);
            $data = json_decode($d);

            // dd($data);
            return $data;
        }
    }

    public function verify_pan_card($pan_img, $pan_no, $img_type)
    {

        //public function verify_pan_card(){
        $id_img = $pan_img;
        $id_number = $pan_no;
        $id_type = $img_type;

        //  $id_img = 'https://wealthmark.io/storage/app/public/images/pancards/YR1qC20mrr7xOkCabvC46AMJ3fzjEqPa6FTUGEal.jpg';
        //   $id_number = 'EOTPM5725R';
        // $id_type = 'individualPan';

        $identitifiedUser =  $this->identify($id_img, $id_type);

        $urltype = 'identities';
        $callback_url = env('KYC_API_BASE_URL');
        $url = env('KYC_API_SNOOP_URL');
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
        ];
        $loginData = "{\"service\":\"Identity\",\"itemId\":\"$identitifiedUser->id\",\"task\":\"autoRecognition\",\"accessToken\":\"$identitifiedUser->accessToken\",\"essentials\":{\"number\":\"$id_number\"}}";
        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);
        // dd($data);
        return $data;
    }


    public function transfer_payment_bank_account($ifsc_code, $account_no)
    {
        // $loggApiUserdata = $this->kyc_authentication();
        // $id = $loggApiUserdata->id;
        // $user_id = $loggApiUserdata->userId;
        // $loginData ="{\"task\":\"bankTransfer\",\"essentials\":{\"beneficiaryMobile\":\"\",\"beneficiaryAccount\":\"$account_no\",\"beneficiaryName\":\"\",\"beneficiaryIFSC\":\"$ifsc_code\"}}";
        // $url = $this->url.'patrons/'.$user_id.'/'.bankaccountverifications;
        // $header = [
        //         "Accept: */*",
        //         "Accept-Language: en-US,en;q=0.8",
        //         "content-type: application/json",
        //         "Authorization:".$id,
        //     ];
        // $response =  $this->call_kyc_api($url, $loginData, $header);
        // return $response;
    }

    public function verify_bank_account($amount, $signzid)
    {
        // $loggApiUserdata = $this->kyc_authentication();
        // $id = $loggApiUserdata->id;
        // $user_id = $loggApiUserdata->userId;
        // $loginData ="{\"task\":\"verifyAmount\",\"essentials\":{\"amount\":\"$amount\",\"signzyId\":\"$signzid\"}}";
        // $url = $this->url.'patrons/'.$user_id.'/'.bankaccountverifications;
        // $header = [
        //         "Accept: */*",
        //         "Accept-Language: en-US,en;q=0.8",
        //         "content-type: application/json",
        //         "Authorization:".$id,
        //     ];
        // $response =  $this->call_kyc_api($url, $loginData, $header);
        // return $response;
    }


    public function verifyPanNumberWithoutImage($panNumber)
    {

        // dd($panNumber);
        $loggApiUserdata = $this->KycApiLogin();
        //  print_r($loggApiUserdata);
        $id = $loggApiUserdata->id;
        $user_id = $loggApiUserdata->userId;
        $baseurl = env('KYC_API_BASE_URL');

        $urltype = 'panv2';
        $task =  ["1"];
        $url = $baseurl . 'patrons/' . $user_id . '/' . $urltype;
        // print_r($url);

        //https://preproduction.signzy.tech/api/v2/patrons/..your-patron-id../panv2
        //$curl = curl_init();
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
            "Authorization:" . $id,
        ];


        //   $loginData =  "{\"task\":\"['1']\",\"essentials\":{\"number\":\"$panNumber\"}}";
        $loginData = "{\"task\":[\"1\"],\"essentials\":{\"number\":\"$panNumber\"}}";


        $d =  $this->CallKycApi($url, $loginData, $header);

        $data = json_decode($d);
        if (isset($data->result)) {
            return $data;
        }
        return false;
        // print_r($loggApiUserdata);
        //    print_r($data);
        // if($data->error->status == 404 ||  $data->error->statusCode == 404 || $data->error->name == 'error'){
        //     return false;
        // }else{
        //     return $data;
        // }


    }

    public function verifyDigilocker()
    {
        $loggApiUserdata = $this->KycApiLogin();
        $id = $loggApiUserdata->id;
        $user_id = $loggApiUserdata->userId;

        $baseurl = env('KYC_API_BASE_URL');
        $urltype = 'digilockers';
        $url = $baseurl . 'patrons/' . $user_id . '/' . $urltype;
        //https://preproduction.signzy.tech/api/v2/patrons/..your-patron-id../panv2
        //$curl = curl_init();

        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
            "Authorization:" . $id,
        ];

        // $getwayurl = 'https://wealthmark.io/en/user/getwayverifyDigilocker';
        // $redirecturl = 'https://wealthmark.io/en/user/redirectdigilocker';
        // $callbackurl = 'https://wealthmark.io/en/user/callbackdigilocker';

        $getwayurl = url(app()->getLocale()) . "/user/getwayverifyDigilocker";
        $redirecturl = url(app()->getLocale()) . "/user/redirectdigilocker";
        $callbackurl = url(app()->getLocale()) . "/user/callbackdigilocker";

        //   $loginData = "{\"task\":\"url\",\"essentials\":{\"redirectUrl\":\".$redirecturl.\",\"redirectTime\":\"\",\"callbackUrl\":\".$callbackurl.\"}}";

        $loginData  = "{\"task\":\"url\",\"essentials\":{\"redirectUrl\":\"$redirecturl\",\"redirectTime\":\"\",\"callbackUrl\":\"$callbackurl\"}}";
        $d =  $this->CallKycApi($url, $loginData, $header);
        $data = json_decode($d);
        echo "<script>window.open('" . $data->result->url . "', '_self');</script>";
    }

    public function redirectdigilocker()
    {
        $requestId = $_GET['requestId'];
        $status =  $_GET['status'];
        // $auth_id_card_num = Auth::user()->id_card_num;
        $auth_id_card_type = Session::get('id_card_type');
        $auth_id_card_num = Session::get('id_card_num');
        // Session::put('id_card_num', $request->id_card_num);
        if ($status == 'success') {
            $data = array(
                'requestId' => $requestId,
                'status' => $status
            );

            // Convert the array to a JSON string
            $data_json = json_encode($data);

            $updateAadhaarStatus = User::where('id', Auth::user()->id)->update(['eaadhar_response' => $data_json]);
            $getEaadhaar_data = $this->getEaadhaarVerificationResponse($requestId, $status);

            $digilockaerUserdata = json_decode($getEaadhaar_data);

            // removing session
            Session::forget('id_card_type');
            Session::forget('id_card_num');

            $lastdigitOfPreAadhaar = substr($auth_id_card_num, -4);
            $lastdigitOfDigiResponsreAadhar = substr($digilockaerUserdata->result->uid, -4);
            $digiDob = str_replace('/', '-', $digilockaerUserdata->result->dob);

            $digiDate = date('Y-m-d', strtotime($digiDob));
            $dataDate = Auth::user()->dob;

            if (($lastdigitOfPreAadhaar == $lastdigitOfDigiResponsreAadhar) && ($digilockaerUserdata->result->name == strtoupper(Auth::user()->first_name)) && ($digiDate == $dataDate)) {
                //  echo "Aadhaar Matched!";
                $updateAadhaarResponseAfterVerification = User::find(Auth::user()->id)->update([
                    'id_card_num' => $auth_id_card_num,
                    'id_card_type' => $auth_id_card_type,
                    'gender' => $digilockaerUserdata->result->gender,
                    'digilocker_verification_responce' => $getEaadhaar_data,
                    'government_id_verified' => 1
                ]);
                return redirect(app()->getLocale() . "/user/identification");
            } else {
                //  echo "Aadhaar Not Matching!" ;
                $updateDigilockerStatus_fail = User::where('id', Auth::user()->id)->update([
                    'digilocker_verification_responce' => '2',
                    'government_id_verified' => 0,
                    'eaadhar_response'  => null,
                    'id_card_type'  => null,
                    'id_card_num' => null,
                    'gender' => null
                ]);

                // inserting verification failed detail history
                $InseertFailedAadhaarHistory = new failed_verification_history;
                $InseertFailedAadhaarHistory->user_id = Auth::user()->id;
                $InseertFailedAadhaarHistory->digilocker_verification_responce = $getEaadhaar_data;
                $InseertFailedAadhaarHistory->eaadhar_response = $data_json;
                $InseertFailedAadhaarHistory->id_card_num = $auth_id_card_num;
                $InseertFailedAadhaarHistory->id_card_type = 'digiLoacker';
                $InseertFailedAadhaarHistory->status = 0;
                $InseertFailedAadhaarHistory->save();
                // inserting verification failed detail history
                return redirect(app()->getLocale() . "/need-kyc");
            }
        } else {
            $ReUpdateAadhaarResponseAfterVerification = User::where('id', $request->user_id)->update(['id_card_type' => NULL, 'id_card_num' => NULL]);
            return redirect(app()->getLocale() . "/user/need-kyc");
        }
    }

    public function getEaadhaarVerificationResponse($requestId, $status)
    {
        $loggApiUserdata = $this->KycApiLogin();

        $id = $loggApiUserdata->id;
        $user_id = $loggApiUserdata->userId;
        $baseurl = env('KYC_API_BASE_URL');
        $urltype = 'digilockers';
        $url = $baseurl . 'patrons/' . $user_id . '/' . $urltype;
        $header = [
            "Accept: */*",
            "Accept-Language: en-US,en;q=0.8",
            "content-type: application/json",
            "Authorization:" . $id,
        ];


        // $loginData  = "\"task\":\"getDetails\", essentials: {\"requestId\": \"$requestId\"}}";
        $loginData  = "{\"task\":\"getEadhaar\",\"essentials\":{\"requestId\":\"$requestId\"}}";
        $d =  $this->CallKycApi($url, $loginData, $header);


        // $data = json_decode($d);

        return $d;
    }


    public function update_digilocker_aadhaarAndType(Request $request)
    {

        $validator = Validator::make($request->all(), ['id_card_num' => 'required|numeric|digits_between:12,12|unique:users']);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            //   print_r($request->all());

            Session::put('id_card_type', $request->id_card_type);
            Session::put('id_card_num', $request->id_card_num);

            // $updateAadhaarResponseAfterVerification = User::where('id', $request->user_id)->update(['id_card_type' => $request->id_card_type, 'id_card_num' => $request->id_card_num]);

            // if($updateAadhaarResponseAfterVerification){
            //     return response()->json(['status' => 'updated'], 200);
            // }else{
            //   return response()->json(['status' => 'Not Updated something went wrong'], 401);
            // } 16052023

            if (Session::has('id_card_type')  && Session::has('id_card_num')) {
                return response()->json(['status' => 'updated'], 200);
            } else {
                return response()->json(['status' => 'Not Updated something went wrong'], 401);
            }
        }
    }

    public function callbackdigilocker()
    {
        echo 'callbackdigilocker';
    }
}
