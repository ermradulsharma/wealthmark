<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('currency_symbol')->nullable();
                $table->decimal('currency_value', 10, 2)->nullable();
                $table->string('currency_type')->nullable();
                $table->decimal('currencyVal_by_INR', 10, 2)->nullable();
                $table->decimal('currencyVal_by_USD', 10, 2)->nullable();
                $table->string('status')->default(1);
                $table->string('description')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
