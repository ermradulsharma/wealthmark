<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('escrows', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('orderId')->nullable();
                $table->bigInteger('sellerId')->nullable();
                $table->bigInteger('buyerId')->nullable();
                $table->string('tradeCoins')->nullable();
                $table->string('tradeCurrencyValue')->nullable();
                $table->string('paymentMode')->nullable();
                $table->integer('orderStatus')->nullable();
                $table->integer('coinReleased')->nullable();
                $table->integer('paymentReleased')->nullable();
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escrows');
    }
};
