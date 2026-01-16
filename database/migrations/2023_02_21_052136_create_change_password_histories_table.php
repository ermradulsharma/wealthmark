<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('change_password_histories', function (Blueprint $table) {
                $table->increments('id');
            $table->bigInteger('user_id')->nullable();
            $table->text('login_type')->nullable();
            $table->text('ip')->nullable();
            $table->text('record_type')->nullable();
            $table->text('old_record')->nullable();
            $table->text('new_record')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('change_password_histories');
    }
};
