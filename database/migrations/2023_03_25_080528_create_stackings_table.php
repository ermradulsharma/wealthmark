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
        Schema::create('stackings', function (Blueprint $table) {

          
            $table->bigInteger('user_id')->nullable();
            $table->string('stacking_num')->nullable();
            $table->bigInteger('wallet_ids')->nullable();
            $table->date('start_date')->nullable();
            
            $table->integer('years')->nullable();
            $table->integer('months')->nullable();
            $table->date('date_of_deposite')->nullable();
            $table->date('maturity_date')->nullable();
            $table->string('price_id')->nullable();
            $table->string('token_transaction_id')->nullable();
            $table->string('after_maturity_coins')->nullable();
            $table->string('total_value_INR')->nullable();
            $table->string('total_value_USD')->nullable();
            $table->string('upto_total_benefits')->nullable();
            $table->string('upto_monthly_benefits')->nullable();
        
            $table->date('end_date')->nullable();
            $table->bigInteger('num_of_year')->nullable();
            $table->string('percentage_of_interest',255)->nullable();
            $table->string('no_of_coin',255)->nullable();
            $table->string('current_price_of_coin',255)->nullable();
            $table->string('status',255)->default(1)->comment('0:inactive|1:active')->nullable();
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
        Schema::dropIfExists('stackings');
    }
};
