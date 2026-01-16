<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('payment_medhods', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id')->nullable();
                $table->string('method_type')->nullable();
                $table->string('account_holder')->nullable();
                $table->string('account_number')->nullable();
                $table->string('account_type')->nullable();
                $table->bigInteger('bank_id')->nullable();
                $table->string('bank_name')->nullable();
                $table->string('ifsc')->nullable();
                $table->string('swift_code')->nullable();
                $table->string('branch_name')->nullable();
                $table->string('qr_code')->nullable();
                $table->string('upi_Id')->nullable();
                $table->integer('email_otp')->nullable();
                $table->integer('phone_otp')->nullable();
                $table->integer('authentication_otp')->nullable();
                $table->tinyInteger('account_status')->nullable()->default(1);
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_medhods');
    }
};
