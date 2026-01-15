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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name', 255)->nullable();
            $table->string('groupof_bank')->nullable();
            $table->tinyInteger('bank_type')->comment('1:goverment|2:private')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('ifsc_code', 99)->nullable();
            $table->string('swift_code', 99)->nullable();
            $table->string('branch_name', 255)->nullable();
            $table->string('branch_address', 255)->nullable();
            $table->bigInteger('pin_code')->nullable();
            $table->string('zone', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('country_code')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0:blocked|1:pending|2:active|3:inactive');
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
        Schema::dropIfExists('banks');
    }
};
