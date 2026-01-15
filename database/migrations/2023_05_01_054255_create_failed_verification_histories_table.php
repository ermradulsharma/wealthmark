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
        Schema::create('failed_verification_histories', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->nullable();
            $table->text('digilocker_verification_responce')->nullable();
            $table->text('eaadhar_response')->nullable();
            $table->string('id_card_type')->nullable();
            $table->string('id_card_num')->nullable();
            $table->integer('status')->comment('0:failed')->nullable();
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
        Schema::dropIfExists('failed_verification_histories');
    }
};
