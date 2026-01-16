<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
                $table->id();
                $table->string('bank_name')->nullable();
                $table->string('groupof_bank')->nullable();
                $table->tinyInteger('bank_type')->nullable();
                $table->string('branch_id')->nullable();
                $table->string('ifsc_code')->nullable();
                $table->string('swift_code')->nullable();
                $table->string('branch_name')->nullable();
                $table->string('branch_address')->nullable();
                $table->bigInteger('pin_code')->nullable();
                $table->string('zone')->nullable();
                $table->string('city')->nullable();
                $table->string('state')->nullable();
                $table->string('country')->nullable();
                $table->string('country_code')->nullable();
                $table->tinyInteger('status')->nullable()->default(1);
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banks');
    }
};
