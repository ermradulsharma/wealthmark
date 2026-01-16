<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entity_details', function (Blueprint $table) {
                $table->id();
                $table->string('entity_name');
                $table->tinyInteger('entity_status')->default(1);
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entity_details');
    }
};
