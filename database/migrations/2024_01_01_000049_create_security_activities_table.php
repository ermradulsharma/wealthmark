<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('security_activities', function (Blueprint $table) {
                $table->id();
                $table->string('source');
                $table->integer('activity')->default(0);
                $table->integer('status');
                $table->integer('type');
                $table->text('data')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('security_activities');
    }
};
