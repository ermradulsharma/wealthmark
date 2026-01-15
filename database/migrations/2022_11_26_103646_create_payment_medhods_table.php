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
        Schema::create('payment_medhods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id'); $table->string('method_type', 99)->unique();
            $table->string('account_holder', 255)->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->string('account_type')->nullable();
            $table->bigInteger('bank_id')->nullable();
            $table->string('bank_name', 99)->nullable();
            $table->string('ifsc', 99)->nullable();
            $table->string('swift_code', 99)->nullable();
            $table->string('branch_name', 255)->nullable();
            $table->string('qr_code', 255)->nullable();
            $table->string('upi_Id', 255)->nullable();
            $table->integer('email_otp')->nullable();
            $table->integer('phone_otp')->nullable();
            $table->integer('authentication_otp')->nullable();
            $table->tinyInteger('account_status')->default(1)->comment('0:blocked|1:pending|2:active|3:inactive');
            $table->string('comments',255)->nullable();
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
        Schema::dropIfExists('payment_medhods');
    }
};
