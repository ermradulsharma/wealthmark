<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();			
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();	
			$table->string('nick_name')->nullable(); 
			$table->string('avatar')->nullable();
			$table->string('gender')->nullable();
			$table->string('email')->unique()->nullable();
			$table->string('password');
			$table->string('phone')->nullable();
			$table->string('country_phone_code')->nullable();
			$table->string('alternate_phone')->nullable();
			$table->string('referral_id')->nullable();
			$table->string('parent_referral_id')->nullable();
			$table->string('comment')->nullable();
			$table->integer('country_id')->nullable();
			$table->string('country_code')->nullable();
			$table->string('country_flag')->nullable();
			$table->integer('status')->comment('0=Pending,1=Active,2=Block,3=Inactive')->default('0');
			$table->string('profile_image')->nullable();
			$table->string('default_language')->nullable();
			$table->date('dob')->nullable();	
			$table->string('postal_code')->nullable();	
			$table->string('country')->nullable();
			$table->string('state')->nullable();
			$table->string('city')->nullable();
			$table->string('pan_card')->nullable();
			$table->string('pan_card_img')->nullable();
			$table->string('qr_code')->nullable();
			$table->string('phone_otp')->nullable();
			$table->string('email_otp')->nullable();	
			$table->integer('is_phone_verified')->comment('0=No,1=Yes')->default('0'); 	
			$table->integer('is_mail_verified')->comment('0=No,1=Yes')->default('0'); 	
			$table->integer('proof_address_verified')->comment('0=No,1=Yes')->default('0');
			$table->integer('government_id_verified')->comment('0=No,1=Yes')->default('0');	
			$table->integer('entity_verified')->comment('0=No,1=Yes')->default('0');
			$table->text('digilocker_verification_responce')->nullable();
			$table->text('eaadhar_response')->nullable();
			$table->string('proof_address_image')->nullable();
			$table->string('id_card_front_image')->nullable();
			$table->string('id_card_back_image')->nullable();
			$table->string('id_card_type')->nullable();
			$table->bigInteger('id_card_num')->nullable();
			$table->text('selfie_image')->nullable();
			$table->string('permanent_address')->nullable();
			$table->string('residential_address')->nullable();
			$table->integer('is_two_factor')->comment('0=No,1=Yes')->default('0');
			$table->integer('is_facial_recogination')->comment('0=No,1=Yes')->default('0');
			$table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('is_agree_email_update')->comment('0=No,1=Yes')->default('0');
            $table->integer('account_type')->comment('1=User,2=Entity,3=Admin,4=SuperAdmin')->default('1');
            $table->string('user_type')->comment('0=new_user,1=old_bmk_user')->default('0');
            $table->string('user_name')->nullable();
            $table->string('bmk_wallet_address')->nullable();
		    $table->integer('twitter_link_status')->comment('0=Not Linked,1=Linked')->default('0');
            $table->text('google2fa_secret')->nullable();
            $table->string('google_id')->nullable();
            $table->string('twitter_id')->nullable();
            
            $table->string('notification_language')->nullable();
            $table->integer('on_site_notification_status')->comment('0:do not send notificaton,1:send notificaton')->default('1');
            $table->integer('email_marketting_status')->comment('0:do not send marketing emails,1:send marketing emails	')->default('1');
            		
            $table->rememberToken();
            $table->string('user_ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
