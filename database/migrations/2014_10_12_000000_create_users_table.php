<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->text('bmk_wallet_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('country_phone_code')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->string('referral_id')->nullable();
            $table->string('parent_referral_id')->nullable();
            $table->string('comment')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_flag')->nullable();
            $table->integer('status')->default(0);
            $table->string('profile_image')->nullable();
            $table->string('default_language')->nullable();
            $table->date('dob')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pan_card')->nullable();
            $table->longText('pan_card_img')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('phone_otp')->nullable();
            $table->string('email_otp')->nullable();
            $table->integer('is_phone_verified')->default(0);
            $table->integer('is_mail_verified')->default(0);
            $table->integer('proof_address_verified')->default(0);
            $table->integer('government_id_verified')->default(0);
            $table->integer('entity_verified')->default(0);
            $table->text('digilocker_verification_responce')->nullable();
            $table->text('eaadhar_response')->nullable();
            $table->string('proof_address_image')->nullable();
            $table->longText('id_card_front_image')->nullable();
            $table->longText('id_card_back_image')->nullable();
            $table->string('id_card_type')->nullable();
            $table->bigInteger('id_card_num')->nullable();
            $table->longText('selfie_image')->nullable();
            $table->string('permannent_address')->nullable();
            $table->string('residential_address')->nullable();
            $table->integer('is_two_factor')->default(0);
            $table->integer('is_facial_recogination')->default(0);
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('is_agree_email_update')->nullable()->default(0);
            $table->integer('account_type')->default(1);
            $table->integer('user_type')->default(0);
            $table->string('user_name')->nullable();
            $table->integer('twitter_link_status')->nullable()->default(0);
            $table->text('google2fa_secret')->nullable();
            $table->string('google_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('notification_language')->nullable();
            $table->integer('on_site_notification_status')->nullable()->default(1);
            $table->integer('email_marketting_status')->nullable()->default(1);
            $table->string('user_ip_address')->nullable();
            $table->bigInteger('online_status')->default(0);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
