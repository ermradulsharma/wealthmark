<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
                $table->id();
                $table->string('wallet_signature');
                $table->string('ordersid');
                $table->string('transaction_id');
                $table->string('number_of_coin');
                $table->string('amount');
                $table->string('transaction_type');
                $table->string('payment_type');
                $table->string('status')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
