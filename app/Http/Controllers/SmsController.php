<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class SmsController extends Controller
{
    public function Send_SMS($mobile, $sms)
    {
        $SMS_URL = env('SMS_URL');
        $SMS_USERNAME = env('SMS_USERNAME');
        $SMS_PASSWORD = env('SMS_PASSWORD');
        $SMS_SENDER_ID = env('SMS_SENDER_ID');
        $SMS_CHANNEL = env('SMS_CHANNEL');
        $SMS_DCS = env('SMS_DCS');
        $SMS_FLASH_SMS = env('SMS_FLASH_SMS');
        $SMS_ROUTE = env('SMS_ROUTE');
        $smsurl = "$SMS_URL" . "user=" . "$SMS_USERNAME" . "&password=" . "$SMS_PASSWORD" . "&senderid=" . "$SMS_SENDER_ID" . "&channel=" . "$SMS_CHANNEL" . "&DCS=" . "$SMS_DCS" . "&flashsms=" . "$SMS_FLASH_SMS" . "&number=" . "91" . "$mobile" . "&text=" . "$sms" . "&route=" . "$SMS_ROUTE";
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $smsurl);
            $data = curl_exec($ch);
            curl_close($ch);
            $response = $data;

            //	print_r($response);
            if ($response) {
                $msg = 1;
                return $msg;
            } else {
                return response()->json(['error' => 'Somthing went wrong'], 401);
            }
        } catch (Exception $e) {
            $response = $e->getMessage();
        }
    }
}
