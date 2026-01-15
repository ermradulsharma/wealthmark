<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\MailerController;
class TradeNotification extends Notification
{
    use Queueable;


    private $orderdata;
    private $notification_category_id;
    private $orderstatus;
    private $seller_confirmation_status;
    private $buyer_confirmation_status;
    private $order_accept_action;
    private $orderId;
    private $buyer_id;
    private $seller_id;
    public function __construct($orderdata,$notification_category_id,$orderstatus,$seller_confirmation_status,$buyer_confirmation_status,$order_accept_action,$orderId,$buyer_id,$seller_id)
    {
        $this->orderdata = $orderdata;
        $this->notification_category_id = $notification_category_id;
        $this->orderstatus = $orderstatus;
        $this->buyer_confirmation_status =$buyer_confirmation_status;
        $this->seller_confirmation_status =$seller_confirmation_status;
        $this->order_accept_action =$order_accept_action;
        $this->orderId=$orderId;
        $this->seller_id =$seller_id;
        $this->buyer_id=$buyer_id;
    }


    public function via($notifiable)
    {
        return ['database'];
    }


    public function toMail($notifiable)
    {
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');

    }

    public function getNotificationCategoryId(){

        return $this->notification_category_id;
    }

    public function getOrderId(){
        return $this->orderId;
    }

     public function getOrderStatus(){
        $orderstatus = $this->orderstatus;
        $buyer_confirmation_status = $this->buyer_confirmation_status;
        $seller_confirmation_status=$this->seller_confirmation_status ;
        $order_accept_action = $this->order_accept_action;
         $seller_id = $this->seller_id ;
        // echo $dd = "-------- $orderstatus -  $this->buyer_confirmation_status - $this->seller_confirmation_status - $this->order_accept_action" ;

        if ( $orderstatus == 0){
           // order pending
           $orderstatus = $this->orderstatus;
           return $orderstatus;
        }

        // if ( $orderstatus == 1 && $this->order_accept_action ==1){
        //   // order pending
        //   $orderstatus = $this->orderstatus;
        //   return $orderstatus;
        // }


        if (  $orderstatus == 1 && $this->buyer_confirmation_status==1  && ($this->seller_confirmation_status ==null or $this->seller_confirmation_status =="") && $this->order_accept_action ==1){
          //$orderstatus ="payment release ";
          $orderstatus = 2;
         // $dd = "$orderstatus -  $this->buyer_confirmation_status - $this->seller_confirmation_status - $this->order_accept_action" ;
           return $orderstatus;
        }

        if (  $orderstatus == 1 && ($this->buyer_confirmation_status==null or $this->buyer_confirmation_status=="")  && ($this->seller_confirmation_status =="" or $this->seller_confirmation_status ==null) && $this->order_accept_action ==1){
          // order accepted
          $orderstatus = 1;
         // $orderstatus ="accepted ";
          return $orderstatus;
        }

        if ( $this->orderstatus == 1 && $this->buyer_confirmation_status==1 && $this->seller_confirmation_status==1 && $this->order_accept_action ==1){
           //order completed
           // $orderstatus ="completed";
          $orderstatus = 3;
           return $orderstatus;
        }
        if ( $this->orderstatus == 4 || $this->orderstatus == 2 || $this->orderstatus == 3){
          $orderstatus = 4;
           //$orderstatus ="Canclled ";
           return $orderstatus;
        }


    }


    //  public function toDatabase($notifiable){
    //     return [
    //          'order_id' => $this->orderdata->id,
    //         'buyer_country' => $this->orderdata->buyer_country,
    //         'crypto_type' => $this->orderdata->crypto_type,
    //         'total_crypto_value' => $this->orderdata->total_crypto_value,
    //         'domestic_currency_value' => $this->orderdata->domestic_currency_value,
    //         'domestic_currency_type' => $this->orderdata->domestic_currency_type,
    //         'crypto_current_value' => $this->orderdata->crypto_current_value,
    //         'payment_method_type' => $this->orderdata->payment_method_type,
    //     ];

    // }


    public function toArray($notifiable)
    {

        $orderstatus = $this->orderstatus;
        $buyer_confirmation_status=$this->buyer_confirmation_status;
        $seller_confirmation_status = $this->seller_confirmation_status;
        $order_accept_action = $this->order_accept_action;
        $seller_id = $this->seller_id ;
        if($orderstatus == 0){

             $ordertitle = 'New order created ('.$this->orderdata->order_id.')';
            // $result = new MailerController;
            // $message = "Dear ".$notifiable->first_name.",
            // We wanted to reach out and provide you with some details regarding your recent order with us. Your order ID is ".$this->orderdata->order_id." and we wanted to confirm the following details with you:
            // Crypto type: {$this->orderdata->crypto_type}
            // Total crypto value: {$this->orderdata->total_crypto_value}
            // Domestic currency value: {$this->orderdata->crypto_current_value}
            // Domestic currency type: {$this->orderdata->domestic_currency_type}
            // Crypto current value: {$this->orderdata->total_crypto_value} Value
            // Payment method type: {$this->orderdata->payment_method_type}

            // If you have any questions or concerns about your order, please don't hesitate to reach out to us. We're here to help.

            // Thank you for choosing us for your purchase.

            // Best regards, " . env('APP_NAME');

            //$subject = "Order Created";
          //  $email = $notifiable->email;
            //$mail_response=$result->composeEmail($email,$subject,$message);

            $crypto_type=$this->orderdata->crypto_type;
            $total_crypto_value= $this->orderdata->total_crypto_value;
            $domestic_currency_value= $this->orderdata->crypto_current_value;
            $domestic_currency_type= $this->orderdata->domestic_currency_type;
            $crypto_current_value = $this->orderdata->total_crypto_value;

            $orderid = $this->orderdata->order_id;
            $orderstatus = "Pending";
            $subject="Order Created ". $orderid ." - " .date('Y-m-d h:i:s')." (UTC)";
            $result = new MailerController;
            $text_message = file_get_contents(asset('assets/img/emailTemplates/orderstatus.html'));
		    $text_message =	str_replace("@__email__@", $notifiable->email, $text_message);
		    $text_message =	str_replace("@__name__@", $notifiable->first_name, $text_message);
		    $text_message =	str_replace("@__orderid__@", $orderid, $text_message);
		    $text_message =	str_replace("@__cryptotype__@", $crypto_type, $text_message);
		    $text_message =	str_replace("@__totalcryptovalue__@", $total_crypto_value, $text_message);
		    $text_message =	str_replace("@__domesticcurrencyvalue__@", $domestic_currency_value, $text_message);
		    $text_message =	str_replace("@__cryptocurrentvalue__@",  $crypto_current_value, $text_message);
		    $text_message =	str_replace("@__orderstatus__@", $orderstatus, $text_message);

		    $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
            $mail_response=$result->composeEmail($notifiable->email,$subject,$text_message);

        }


    //     if($orderstatus == 1 && $order_accept_action==1){

    //          $ordertitle = 'Your post order accepted ('.$this->orderdata->order_id.')';

    //         $crypto_type=$this->orderdata->crypto_type;
    //         $total_crypto_value= $this->orderdata->total_crypto_value;
    //         $domestic_currency_value= $this->orderdata->crypto_current_value;
    //         $domestic_currency_type= $this->orderdata->domestic_currency_type;
    //         $crypto_current_value = $this->orderdata->total_crypto_value;

    //         $orderid = $this->orderdata->order_id;
    //         $orderstatus = "Accepted";
    //         $subject="Order Accepted ". $orderid ." - " .date('Y-m-d h:i:s')." (UTC)";
    //         $result = new MailerController;
    //         $text_message = file_get_contents(asset('assets/img/emailTemplates/orderstatus.html'));
		  //  $text_message =	str_replace("@__email__@", $notifiable->email, $text_message);
		  //  $text_message =	str_replace("@__name__@", $notifiable->first_name, $text_message);
		  //  $text_message =	str_replace("@__orderid__@", $orderid, $text_message);
		  //  $text_message =	str_replace("@__cryptotype__@", $crypto_type, $text_message);
		  //  $text_message =	str_replace("@__totalcryptovalue__@", $total_crypto_value, $text_message);
		  //  $text_message =	str_replace("@__domesticcurrencyvalue__@", $domestic_currency_value, $text_message);
		  //  $text_message =	str_replace("@__cryptocurrentvalue__@",  $crypto_current_value, $text_message);
		  //  $text_message =	str_replace("@__orderstatus__@", $orderstatus, $text_message);

		  //  $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
    //         $mail_response=$result->composeEmail($notifiable->email,$subject,$text_message);

    //     }



        if($orderstatus == 1 && ($buyer_confirmation_status == null or $buyer_confirmation_status == "") && ($seller_confirmation_status == null or $seller_confirmation_status == "") && $order_accept_action == 1){
            //order accepted
            // $result = new MailerController;
            // $message = $message = "Dear $notifiable->first_name,

            //     We are delighted to inform you that your order with us has been accepted and is now being processed. Your order number is ". $this->orderdata->order_id ."

            //     We want to thank you for choosing " .env('APP_NAME')." for your purchase. We assure you that we will make every effort to ensure that your order is handled with the utmost care and delivered to you as soon as possible.

            //     Below is a summary of your order details:

            //     Order Number: {$this->orderdata->order_id}
            //     Order Date: {$this->orderdata->created_at}
            //     Crypto type: {$this->orderdata->crypto_type}
            //     Total crypto value: {$this->orderdata->total_crypto_value}
            //     Domestic currency value: {$this->orderdata->crypto_current_value}
            //     Domestic currency type: {$this->orderdata->domestic_currency_type}
            //     Crypto current value: {$this->orderdata->total_crypto_value} Value
            //     Payment method type: {$this->orderdata->payment_method_type}


            //     If you have any questions or concerns regarding your order, please feel free to contact us at [Company Contact Information].

            //     Thank you for your patronage.

            //     Best regards,
            //     " . env('APP_NAME');

            // $subject = 'Order Accepted';
            // $email = $notifiable->email;
            // $mail_response=$result->composeEmail($email,$subject,$message);

            $crypto_type=$this->orderdata->crypto_type;
            $total_crypto_value= $this->orderdata->total_crypto_value;
            $domestic_currency_value= $this->orderdata->crypto_current_value;
            $domestic_currency_type= $this->orderdata->domestic_currency_type;
            $crypto_current_value = $this->orderdata->total_crypto_value;

            $orderid = $this->orderdata->order_id;
            $orderstatus = "Accepted";
            $subject="Order Accepted ". $orderid ." - " .date('Y-m-d h:i:s')." (UTC)";
            $result = new MailerController;
            $text_message = file_get_contents(asset('assets/img/emailTemplates/orderaccepted.html'));
		    $text_message =	str_replace("@__email__@", $notifiable->email, $text_message);
		    $text_message =	str_replace("@__name__@", $notifiable->first_name, $text_message);
		    $text_message =	str_replace("@__orderid__@", $orderid, $text_message);
		    $text_message =	str_replace("@__cryptotype__@", $crypto_type, $text_message);
		    $text_message =	str_replace("@__totalcryptovalue__@", $total_crypto_value, $text_message);
		    $text_message =	str_replace("@__domesticcurrencyvalue__@", $domestic_currency_value, $text_message);
		    $text_message =	str_replace("@__cryptocurrentvalue__@",  $crypto_current_value, $text_message);
		    $text_message =	str_replace("@__orderstatus__@", $orderstatus, $text_message);

		    $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
            $mail_response=$result->composeEmail($notifiable->email,$subject,$text_message);

            $ordertitle = 'Order Accepted';
        }

        if($orderstatus == 1 && $buyer_confirmation_status == 1 && ($seller_confirmation_status == null or $this->seller_confirmation_status =="") && $order_accept_action==1){
            //payment released
            // $result = new MailerController;
            // $message = "Dear $notifiable->first_name,

            //     We are pleased to inform you that the payment for your order". $this->orderdata->order_id. " has been successfully processed and released. We would like to thank you for choosing our company for your [product/service] needs and we hope that our services have met your expectations.

            //     Please find attached a copy of your updated invoice for your reference. The payment was processed on  and should reflect in your account within 1/2 hours.

            //     Once again, we would like to thank you for your business and we look forward to serving you in the future.

            //     Sincerely," . env('APP_NAME');

            // $subject =" Payment released";
            // $email = $notifiable->email;
            // $mail_response=$result->composeEmail($email,$subject,$message);

            $crypto_type=$this->orderdata->crypto_type;
            $total_crypto_value= $this->orderdata->total_crypto_value;
            $domestic_currency_value= $this->orderdata->crypto_current_value;
            $domestic_currency_type= $this->orderdata->domestic_currency_type;
            $crypto_current_value = $this->orderdata->total_crypto_value;

            $orderid = $this->orderdata->order_id;
            $orderstatus = "Payment released";
            $subject="Payment released ". $orderid ." - " .date('Y-m-d h:i:s')." (UTC)";
            $result = new MailerController;
            $text_message = file_get_contents(asset('assets/img/emailTemplates/orderaccepted.html'));
		    $text_message =	str_replace("@__email__@", $notifiable->email, $text_message);
		    $text_message =	str_replace("@__name__@", $notifiable->first_name, $text_message);
		    $text_message =	str_replace("@__orderid__@", $orderid, $text_message);
		    $text_message =	str_replace("@__cryptotype__@", $crypto_type, $text_message);
		    $text_message =	str_replace("@__totalcryptovalue__@", $total_crypto_value, $text_message);
		    $text_message =	str_replace("@__domesticcurrencyvalue__@", $domestic_currency_value, $text_message);
		    $text_message =	str_replace("@__cryptocurrentvalue__@",  $crypto_current_value, $text_message);
		    $text_message =	str_replace("@__orderstatus__@", $orderstatus, $text_message);

		    $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
            $mail_response=$result->composeEmail($notifiable->email,$subject,$text_message);

            $ordertitle = 'Payment released';
        }

         if($orderstatus == 1 && $buyer_confirmation_status == 1 && $seller_confirmation_status == 1 && $order_accept_action == 1){
            //ordercompleted
            // $result = new MailerController;
            // $message = "Dear $notifiable->first_name,

            //     I am pleased to inform you that your order ". $this->orderdata->order_id. " has been completed and is ready for release. We would like to thank you for choosing our company for your [product/service] needs and we hope that our services have met your expectations.

            //     Please find attached a copy of your invoice for your reference. Kindly review and confirm the details of the invoice to avoid any discrepancies.

            //     Once payment has been received and processed, we will release the assets to you. The release process may take up to 2 hours. Should you have any questions or concerns regarding the release process, please do not hesitate to contact us.

            //     Thank you once again for your business. We look forward to serving you in the future.

            //     Sincerely,
            //     " . env('APP_NAME');

            // $subject = 'Order Completed & Asset Released';
            // $email = $notifiable->email;
            // $mail_response=$result->composeEmail($email,$subject,$message);

            $crypto_type=$this->orderdata->crypto_type;
            $total_crypto_value= $this->orderdata->total_crypto_value;
            $domestic_currency_value= $this->orderdata->crypto_current_value;
            $domestic_currency_type= $this->orderdata->domestic_currency_type;
            $crypto_current_value = $this->orderdata->total_crypto_value;

            $orderid = $this->orderdata->order_id;
            $orderstatus = "Order completed & asset released";
            $subject="Order completed & asset released ". $orderid ." - " .date('Y-m-d h:i:s')." (UTC)";
            $result = new MailerController;
            $text_message = file_get_contents(asset('assets/img/emailTemplates/orderaccepted.html'));
		    $text_message =	str_replace("@__email__@", $notifiable->email, $text_message);
		    $text_message =	str_replace("@__name__@", $notifiable->first_name, $text_message);
		    $text_message =	str_replace("@__orderid__@", $orderid, $text_message);
		    $text_message =	str_replace("@__cryptotype__@", $crypto_type, $text_message);
		    $text_message =	str_replace("@__totalcryptovalue__@", $total_crypto_value, $text_message);
		    $text_message =	str_replace("@__domesticcurrencyvalue__@", $domestic_currency_value, $text_message);
		    $text_message =	str_replace("@__cryptocurrentvalue__@",  $crypto_current_value, $text_message);
		    $text_message =	str_replace("@__orderstatus__@", $orderstatus, $text_message);

		    $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
            $mail_response=$result->composeEmail($notifiable->email,$subject,$text_message);

            $ordertitle = 'Order completed & asset released';
        }




        if($orderstatus == 4 || $orderstatus == 2 || $orderstatus == 3){
            //Order Canclled
            // $result = new MailerController;
            // $message = " $notifiable->first_name,

            // We regret to inform you that your order {$this->orderdata->order_id} has been cancelled due to unforeseen circumstances. We apologize for any inconvenience this may have caused you and we understand that this can be frustrating.

            // The cancellation of your order may have been caused by various reasons such as stock unavailability or technical issues. Our team has already processed the refund of the total amount you paid for the order. Please allow 2/3hours for the refund to reflect in your account.

            // We understand that this may not meet your expectations, and we apologize once again for any inconvenience caused. Should you have any questions or concerns regarding this matter, please do not hesitate to contact us.

            // Thank you for your understanding.

            // Sincerely,
            // " . env('APP_NAME');

            // $subject = "Order Canclled";
            // $email = $notifiable->email;
            // $mail_response=$result->composeEmail($email,$subject,$message);

             $crypto_type=$this->orderdata->crypto_type;
            $total_crypto_value= $this->orderdata->total_crypto_value;
            $domestic_currency_value= $this->orderdata->crypto_current_value;
            $domestic_currency_type= $this->orderdata->domestic_currency_type;
            $crypto_current_value = $this->orderdata->total_crypto_value;

            $orderid = $this->orderdata->order_id;
            $orderstatus = "Order Canclled";
            $subject="Order Canclled ". $orderid ." - " .date('Y-m-d h:i:s')." (UTC)";
            $result = new MailerController;
            $text_message = file_get_contents(asset('assets/img/emailTemplates/ordercanclled.html'));
		    $text_message =	str_replace("@__email__@", $notifiable->email, $text_message);
		    $text_message =	str_replace("@__name__@", $notifiable->first_name, $text_message);
		    $text_message =	str_replace("@__orderid__@", $orderid, $text_message);
		    $text_message =	str_replace("@__cryptotype__@", $crypto_type, $text_message);
		    $text_message =	str_replace("@__totalcryptovalue__@", $total_crypto_value, $text_message);
		    $text_message =	str_replace("@__domesticcurrencyvalue__@", $domestic_currency_value, $text_message);
		    $text_message =	str_replace("@__cryptocurrentvalue__@",  $crypto_current_value, $text_message);
		    $text_message =	str_replace("@__orderstatus__@", $orderstatus, $text_message);

		    $text_message =	str_replace("@__serverMail__@", env('EMAIL_TEMPLATE_EMAIL'), $text_message);
            $mail_response=$result->composeEmail($notifiable->email,$subject,$text_message);

            $ordertitle = 'Order Canclled ('.$this->orderdata->order_id.')';
        }


        return [
            'order_title'=>$ordertitle,
            'notification_category_id'=>$this->notification_category_id,
            'name' => $notifiable->first_name,
            'email' => $notifiable->email,
            'order_id' => $this->orderdata->order_id,
            'buyer_country' => $this->orderdata->buyer_country,
            'crypto_type' => $this->orderdata->crypto_type,
            'total_crypto_value' => $this->orderdata->total_crypto_value,
            'domestic_currency_value' => $this->orderdata->domestic_currency_value,
            'domestic_currency_type' => $this->orderdata->domestic_currency_type,
            'crypto_current_value' => $this->orderdata->crypto_current_value,
            'payment_method_type' => $this->orderdata->payment_method_type,
            'created_at'=> $this->orderdata->created_at,
          ];
    }
}
