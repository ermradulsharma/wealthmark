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
use Validator;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Base32\Base32;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
use App\Models\company_type;
use App\Models\entities;
use App\Models\document_lists;
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
use App\Models\announcement;
use App\Models\announcement_category;

class WealthmarkCron extends Controller
{
    public $successStatus = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }
    
    //Gift Card Every month(date wise amount) credit amount url
    
    public function credit_amount_url(){
        $update_gift_card=marketWallet::where('p2p_credit_date', date('Y-m-d'))->update(['status' => 1,'updated_at'=> date("Y-m-d H:i:s")]);
    }
    
    

    

 
}
