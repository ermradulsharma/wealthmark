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
use App\Http\Controllers\StakingController;
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
use App\Models\Announcement;
use App\Models\AnnouncementCategory;

class WealthmarkCronController extends Controller
{
    public $successStatus = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    //Gift Card Every month(date wise amount) credit amount url

    public function creditAmountUrl()
    {
        $update_gift_card = MarketWallet::where('p2p_credit_date', date('Y-m-d'))->update(['status' => 1, 'updated_at' => date("Y-m-d H:i:s")]);
    }
}
