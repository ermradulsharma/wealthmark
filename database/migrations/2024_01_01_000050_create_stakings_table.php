<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stakings', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('user_id')->nullable();
                $table->string('staking_transaction_id')->nullable();
                $table->integer('staking_num_of_year')->nullable();
                $table->string('stacking_num')->nullable();
                $table->string('staking_coin_name');
                $table->string('staking_coin_type');
                $table->date('date_of_deposite')->nullable();
                $table->date('maturity_date')->nullable();
                $table->string('before_maturity_coins')->nullable();
                $table->string('before_maturity_value_usd')->nullable();
                $table->string('before_maturity_value_inr')->nullable();
                $table->string('after_maturity_coins')->nullable();
                $table->string('after_total_value_INR')->nullable();
                $table->string('after_total_value_USD')->nullable();
                $table->string('upto_total_benefits')->nullable();
                $table->string('upto_monthly_benefits')->nullable();
                $table->string('percentage_of_interest')->nullable();
                $table->string('current_price_of_coin_usd')->nullable();
                $table->string('current_price_of_coin_inr')->nullable();
                $table->string('status')->nullable()->default(1);
                $table->integer('maturity_status');
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stakings');
    }
};
