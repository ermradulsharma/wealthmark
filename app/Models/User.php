<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Auth;

use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
		'first_name',
		'middle_name',	
		'last_name',	
		'nick_name',
		'avatar',
		'gender',		
        'email',
		'phone',
		'country_phone_code',		
		'alternate_phone',	
		'referral_id',
		'password',
		'parent_referral_id',	
		'comment',
		'country_id',
		'country_code',	
		'country_flag',	
		'status',	
		'profile_image',	
		'default_language',	
		'dob',	
		'postal_code',	
		'country',
		'state',	
		'city',
		'pan_card',
		'pan_card_img',
		'qr_code',
		'phone_otp',	
		'email_otp',	
		'is_phone_verified',	
		'is_mail_verified',	
		'proof_address_verified',	
		'proof_address_image', 
		'government_id_verified',
		'entity_verified',
		'digilocker_verification_responce',
		'eaadhar_response',
		'id_card_front_image', 
		'id_card_back_image',
		'id_card_type',
		'id_card_num',
		'account_type',
		'user_type',
		'user_name',
		'bmk_wallet_address',
		'twitter_link_status',
		'permannent_address',
		'residential_address',
		'is_two_factor',
		'phone_verified_at',
		'email_verified_at',
		'is_facial_recogination',
		'is_agree_email_update',
		'selfie_image',
		'google2fa_secret',
		'google_id',
		'twitter_id',
		'notification_language',
		'on_site_notification_status',
		'email_marketting_status',
		'user_ip_address',
		'last_activity_status',
		'online_status'
		// 'social_id',
        // 'social_type'		
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'google2fa_secret'
		// 'two_factor_recovery_codes',
        // 'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
		'phone_verified_at' => 'datetime',
    ];
	
	// protected $appends = [
        // 'profile_photo_url',
    // ];
    
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    // protected function google2faSecret(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) =>  decrypt($value),
    //         set: fn ($value) =>  encrypt($value),
    //     );
    // }
    
    public function setGoogle2faSecretAttribute($value)
    {
         $this->attributes['google2fa_secret'] = $value;
    }

    public function getGoogle2faSecretAttribute($value)
    {
        return $value;
    }
    public static function getTime(){
       $ip = $_SERVER['REMOTE_ADDR'];
       $ipInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip)); //file_get_contents('http://ip-api.com/json/' . $ip);
       $clientsLatitude = $ipInfo['geoplugin_timezone'];
       $today = date('Y-m-d');
       $orderObj = Order::where('buyer_id',Auth::user()->id)->orWhere('seller_id', Auth::user()->id)->whereDate('created_at', '=', $today)->latest()->first();
       if($orderObj){
         return $createdAt = $orderObj->created_at->timezone( $clientsLatitude)->format('d-m-Y h:i A');   
       } else {
           return $createdAt = Auth::user()->created_at->timezone( $clientsLatitude)->format('d-m-Y h:i A'); 
       }
   
       
    }
}
