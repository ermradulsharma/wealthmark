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
        Schema::create('postads', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('adsid');
            $table->string('ordertype')->comment("0=>buy : 1=>sell");
            $table->string('cryptoname');
            $table->string('current_crypto_in_inr')->comment("Per crypto value in INR");
            
            $table->string('faithid')->comment("1=>INR : 2=>USD : 3=>EUR : 4=>GBP : 5=>JPY");
            $table->string('domestic_currency_value');
            $table->string('pricetype')->comment("0=>Fixed : 1=>Floating ");
            $table->string('fixed_floating_pice');
            $table->string('total_amount');
            $table->string('order_lower_limit');
            $table->string('order_higher_limit');
            $table->string('payment_method')->comment("Select upto 5");
            $table->string('payment_time_limit');
            $table->longtext('terms')->nullable();
            $table->longtext('auto_replay')->nullable();
            $table->string('countryparty_condition');                     
            $table->string('status')->comment("0=>ofline : 1=>online")->nullable(); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postads');
    }
};
