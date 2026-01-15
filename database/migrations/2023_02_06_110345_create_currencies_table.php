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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 70)->nullable();
            $table->string('currency_symbol')->nullable();
            $table->decimal('currency_value')->nullable();
            $table->string('currency_type', 320)->nullable();
            $table->decimal('currencyVal_by_INR')->nullable();
            $table->string('status')->default(1)->comment('0:blocked|1:inactive|2:active|3: pending');;
            $table->string('description')->nullable();
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
        Schema::dropIfExists('currencies');
    }
};
