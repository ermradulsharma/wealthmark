<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('login_attempt_histories', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id')->nullable();
                $table->string('browser')->nullable();
                $table->string('device')->nullable();
                $table->string('deviceType')->nullable();
                $table->string('ip')->nullable();
                $table->string('location')->nullable();
                $table->text('sessionId')->nullable();
                $table->integer('status')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('login_attempt_histories');
    }
};
