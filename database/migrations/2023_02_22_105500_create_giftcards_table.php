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
        Schema::create('giftcards', function (Blueprint $table) {
            $table->id();
           // $table->bigInteger('user_id')->nullable();
            $table->string('Gift_Card_Type')->nullable();
            $table->string('Gift_Card_phone')->nullable();
            $table->integer('location')->nullable();
            $table->string('Gift_Card_email')->nullable();
            $table->string('Gift_Card_Voucher_no')->nullable();

            $table->string('Gift_Card_Voucher_pin')->nullable();
            $table->string('Gift_Card_Status')->comment('0=Pending,1=Active,2=Block,3=Inactive')->default('0');
            $table->string('Gift_Card_Amount')->nullable();
            $table->string('Gift_Card_Expiration_date')->nullable();
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
        Schema::dropIfExists('giftcards');
    }
};
