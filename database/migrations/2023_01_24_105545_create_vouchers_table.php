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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_key', 255)->nullable();
            $table->string('voucher_number', 255)->nullable();
            $table->string('voucher_name', 255)->nullable();
            $table->string('market', 255)->nullable();
            $table->string('validityIndays', 255)->nullable();
            $table->date('expiry')->nullable();
            $table->string('amount',99)->nullable();
            $table->string('status')->comment('1=active,0=inactive')->default('1');
            $table->string('comment', 255)->nullable();
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
        Schema::dropIfExists('vouchers');
    }
};
