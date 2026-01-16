<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('giftcards', function (Blueprint $table) {
                $table->increments('id');
            $table->bigInteger('Gift_Card_Uploader_User_Id')->nullable();
            $table->string('Gift_Card_phone')->nullable();
            $table->string('Gift_Card_email')->nullable();
            $table->string('Gift_Card_Voucher_no')->nullable();
            $table->string('Gift_Card_Voucher_pin')->nullable();
            $table->string('Gift_Card_Status')->nullable()->default(0);
            $table->string('Gift_Card_Amount')->nullable();
            $table->string('Gift_Card_Expiration_date')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('giftcards');
    }
};
