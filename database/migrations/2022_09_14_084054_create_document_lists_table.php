<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('document_lists', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->tinyInteger('type')->default(0);
                $table->tinyInteger('subtype')->default(0);
                $table->tinyInteger('status')->default(1);
                $table->string('comments');
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_lists');
    }
};
