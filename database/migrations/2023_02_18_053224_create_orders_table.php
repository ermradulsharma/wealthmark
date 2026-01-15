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
            $table->string('payment_method_id');
            $table->string('payment_method_type');
            $table->string('crypto_current_value');
            $table->string('payment_time_limit')->nullable();
            $table->string('order_status')->comment('0 =Pending , 1 =Confirmed ,2=System Cancel');
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
        Schema::dropIfExists('orders');
    }
};
