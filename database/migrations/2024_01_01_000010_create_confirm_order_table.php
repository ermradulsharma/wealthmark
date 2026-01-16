<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('confirm_order', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('order_id')->nullable();
                $table->integer('buyer_id')->nullable();
                $table->integer('seller_id')->nullable();
                $table->string('buyer_country')->nullable();
                $table->string('seller_country')->nullable();
                $table->string('crypto_type');
                $table->string('total_crypto_value');
                $table->string('domestic_currency_value');
                $table->string('domestic_currency_type');
                $table->string('payment_method_id');
                $table->string('payment_method_type');
                $table->string('crypto_current_value');
                $table->tinyInteger('order_status');                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('confirm_order');
    }
};
