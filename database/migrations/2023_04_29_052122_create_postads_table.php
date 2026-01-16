<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('postads', function (Blueprint $table) {
                $table->id();
                $table->string('adsid');
                $table->string('userid');
                $table->string('ordertype');
                $table->string('cryptoname');
                $table->string('faithid');
                $table->string('cryptovalue_in_domestictype');
                $table->string('pricetype');
                $table->string('fixed_floating_pice');
                $table->string('total_amount');
                $table->string('order_lower_limit');
                $table->string('order_higher_limit');
                $table->text('payment_method')->nullable();
                $table->string('payment_time_limit');
                $table->longText('terms')->nullable();
                $table->longText('auto_replay')->nullable();
                $table->string('countryparty_condition');
                $table->string('estimated_fee');
                $table->string('cryptorateinusd');
                $table->string('currencyrateinusd');
                $table->string('current_crypto_in_inr');                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postads');
    }
};
