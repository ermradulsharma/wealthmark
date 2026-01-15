<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller
{

    // =============== [ Email ] ===================
    public function email()
    {
        $mail = new PHPMailer(true);
        //return view("email");
        //echo"543543543";
        $message = "test";
        $subject = "test";
        $email = "jairamyadav83@gmail.com";
        $EMAIL_SENDER_PASSWORD = env('EMAIL_SENDER_PASSWORD');
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('EMAIL_HOST');
        $mail->SMTPAuth = false;
        $mail->Username = env('EMAIL_SENDER_USERNAME');
        $mail->Password = env('EMAIL_SENDER_PASSWORD');
        $mail->SMTPSecure = 'none';
        $mail->Port = env('EMAIL_PORT');
        $mail->setFrom(env('EMAIL_SENDER_USERNAME'), 'Wealthmark');
        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     )
        // );
        $mail->addAddress($email);
        //$mail->SMTPDebug = true;
        //$mail->debug(3);
        // 		if(env('EMAIL_CC')){
        // 			$mail->addCC(env('EMAIL_CC'));
        // 		}
        //         if(env('EMAIL_BCC')){
        // 			$mail->addBCC(env('EMAIL_CC'));
        // 		}
        $mail->addReplyTo(env('EMAIL_REPLY'), 'Wealthmark');
        // if(isset($attachment)) {
        // for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
        // $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
        // }
        // }
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        echo $mail->send();



        // new php mail code

        // $to = "jairamyadav83@gmail.com";
        // $subject = "HTML email";

        // $message = "
        // <html>
        // <head>
        // <title>HTML email</title>
        // </head>
        // <body>
        // <p>This email contains HTML Tags!</p>
        // <table>
        // <tr>
        // <th>Firstname</th>
        // <th>Lastname</th>
        // </tr>
        // <tr>
        // <td>John</td>
        // <td>Doe</td>
        // </tr>
        // </table>
        // </body>
        // </html>
        // ";

        // // Always set content-type when sending HTML email
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // // More headers
        // $headers .= 'From: <no-reply@wealthmark.io>' . "\r\n";
        // //$headers .= 'Cc: myboss@example.com' . "\r\n";

        // echo mail($to,$subject,$message,$headers);

    }


    // ========== [ Compose Email ] ================
    public function composeEmail($email, $subject, $message)
    {
        require base_path("vendor/autoload.php");
        // $ip = $request->ip();
        // $currentUserInfo = Location::get($ip);
        $mail = new PHPMailer(true);
        try {
            $EMAIL_SENDER_PASSWORD = env('EMAIL_SENDER_PASSWORD');
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('EMAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('EMAIL_SENDER_USERNAME');
            $mail->Password = env('EMAIL_SENDER_PASSWORD');
            $mail->SMTPSecure = true;
            $mail->Port = env('EMAIL_PORT');
            $mail->setFrom(env('EMAIL_SENDER_USERNAME'), 'Wealthmark');
            $mail->addAddress($email);
            // $mail->SMTPDebug = true;
            // $mail->debug(3);
            if (env('EMAIL_CC')) {
                $mail->addCC(env('EMAIL_CC'));
            }
            if (env('EMAIL_BCC')) {
                $mail->addBCC(env('EMAIL_CC'));
            }
            $mail->addReplyTo(env('EMAIL_REPLY'), 'Wealthmark');
            // if(isset($attachment)) {
            // for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            // $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            // }
            // }
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            // $mail->AltBody = plain text version of email body;
            if (!$mail->send()) {
                $msg = "error";
                return $msg;
                //return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                //return back()->with("success", "Email has been sent.");
                $msg = "success";
                return $msg;
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }
}
