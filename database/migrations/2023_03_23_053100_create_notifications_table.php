<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
                $table->increments('id');
                $table->string('type');
                $table->string('notifiable_type');
                $table->unsignedBigInteger('notifiable_id');
                $table->text('data')->nullable();
                $table->string('notification_category_id')->nullable();
                $table->string('status')->nullable();
                $table->string('order_id')->nullable();
                $table->string('comments')->nullable();
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};
