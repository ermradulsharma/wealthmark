<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('voucher_key')->nullable();
                $table->string('voucher_number')->nullable();
                $table->string('voucher_name')->nullable();
                $table->string('market')->nullable();
                $table->string('validityIndays')->nullable();
                $table->date('expiry')->nullable();
                $table->string('amount')->nullable();
                $table->string('status')->nullable();
                $table->string('comment')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
};
