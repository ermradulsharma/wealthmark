<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tradingratings', function (Blueprint $table) {
                $table->id();
                $table->integer('order_id');
                $table->integer('buyer_id')->nullable();
                $table->integer('seller_id')->nullable();
                $table->integer('positive_rating')->nullable();
                $table->integer('negative_rating')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tradingratings');
    }
};
