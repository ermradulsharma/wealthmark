<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gift_card_histories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('gift_card_gc_number')->nullable();
                $table->string('gift_card_gc_order_id')->nullable();
                $table->string('gift_card_otp')->nullable();
                $table->bigInteger('gift_card_user_id')->nullable();
                $table->bigInteger('gift_card_current_user_id')->nullable();
                $table->text('ip_address')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gift_card_histories');
    }
};
