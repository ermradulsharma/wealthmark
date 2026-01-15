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
        Schema::create('market_wallets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('order_id')->default(0)->nullable();
             $table->string('new_order_id')->default(0)->nullable();
            $table->bigInteger('new_staking_id')->nullable();
            $table->bigInteger('staking_id')->nullable();
            $table->bigInteger('no_of_coin')->nullable();
            $table->string('type_of_coin')->comment('0:debit|1:credit')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0:inactive|1:active');
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
        Schema::dropIfExists('market_wallets');
    }
};
