<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('ISO2code')->nullable();
                $table->string('ISO3code')->nullable();
                $table->string('dialing_code')->nullable();
                $table->string('capital')->nullable();
                $table->string('continent')->nullable();
                $table->string('currency')->nullable();
                $table->string('gdp')->nullable();
                $table->string('main_language')->nullable();
                $table->string('population')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
