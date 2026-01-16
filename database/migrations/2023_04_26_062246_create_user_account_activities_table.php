<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_account_activities', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id')->nullable();
                $table->bigInteger('order_id')->nullable();
                $table->bigInteger('reason_id')->nullable();
                $table->string('reason_type')->nullable();
                $table->integer('buying_status')->default(1);
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_account_activities');
    }
};
