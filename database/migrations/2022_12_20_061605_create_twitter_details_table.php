<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('twitter_details', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id')->nullable();
                $table->string('twitter_id')->nullable();
                $table->string('twitter_detail')->nullable();
                $table->integer('status')->default(0);
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twitter_details');
    }
};
