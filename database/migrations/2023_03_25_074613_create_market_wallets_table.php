<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('market_wallets', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('user_id')->nullable();
                $table->bigInteger('order_id')->default(0);
                $table->bigInteger('new_order_id')->default(0);
                $table->bigInteger('staking_id')->default(0);
                $table->integer('new_staking_id')->default(0);
                $table->string('every_month_benefits_inr')->nullable();
                $table->string('every_month_benefits_usd')->nullable();
                $table->string('no_of_coin')->nullable();
                $table->string('type_of_coin')->nullable();
                $table->integer('transaction_status');
                $table->tinyInteger('status')->default(1);
                $table->integer('coin_type');
                $table->string('coin_name');
                $table->string('comments')->nullable();
                $table->date('p2p_credit_date')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('market_wallets');
    }
};
