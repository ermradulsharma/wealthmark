<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('order_id')->nullable();
                $table->string('adsid')->nullable();
                $table->string('buyer_id')->nullable();
                $table->string('seller_id')->nullable();
                $table->string('buyer_country')->nullable();
                $table->string('seller_country')->nullable();
                $table->string('crypto_type');
                $table->string('total_crypto_value');
                $table->string('domestic_currency_value');
                $table->string('domestic_currency_type');
                $table->longText('payment_bank_id')->nullable();
                $table->longText('payment_method_id');
                $table->text('payment_account_details_for_buyer')->nullable();
                $table->text('payment_account_details_for_seller')->nullable();
                $table->string('crypto_current_value');
                $table->string('current_crypto_in_inr');
                $table->string('inr_value_in_usd');
                $table->string('order_status');
                $table->string('buyer_confirmation_status')->nullable();
                $table->string('seller_confirmation_status')->nullable();
                $table->string('order_accept_action')->default(0);
                $table->integer('payment_time_limit')->nullable();
                $table->string('ordertype')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
