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
        Schema::create('user_account_activities', function (Blueprint $table) {
            $table->id();

            $table->biginteger('user_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->biginteger('reason_id')->nullable();
            $table->string('reason_type')->comment('0:canceled|1:suspended|2:disabled')->nullable();
            $table->integer('buying_status')->default(1)->comment('0:suspended|1:active')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('user_account_activities');
    }
};
