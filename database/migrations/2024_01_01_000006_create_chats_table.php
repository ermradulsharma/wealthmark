<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->unsignedBigInteger('chat_message_id')->autoIncrement();
            $table->integer('to_user_id');
            $table->integer('from_user_id');
            $table->bigInteger('order_id');
            $table->text('chat_message');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
};
