<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('country_documents', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('country_id')->nullable();
                $table->string('country_name')->nullable();
                $table->integer('DoucumentId')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('country_documents');
    }
};
