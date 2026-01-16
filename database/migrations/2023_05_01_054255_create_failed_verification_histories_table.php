<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('failed_verification_histories', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('user_id')->nullable();
                $table->text('digilocker_verification_responce')->nullable();
                $table->text('pan_verification_responce')->nullable();
                $table->text('eaadhar_response')->nullable();
                $table->string('id_card_type')->nullable();
                $table->string('id_card_num')->nullable();
                $table->integer('status')->nullable();
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('failed_verification_histories');
    }
};
