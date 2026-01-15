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
        Schema::create('escrows', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('orderId')->nullable();
            $table->bigInteger('sellerId')->nullable();
            $table->bigInteger('buyerId')->nullable();
            $table->string('tradeCoins')->nullable();
            $table->string('tradeCurrencyValue')->nullable();
            $table->string('paymentMode')->nullable();
            $table->integer('orderStatus')->comment('0:Not Done|1:Done')->nullable();
            $table->integer('coinReleased')->comment('0:No|1:Yes')->nullable();
            $table->integer('paymentReleased')->comment('0:No|1:Yes')->nullable();
            $table->string('comments')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('escrows');
    }
};
