<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
                $table->id();
                $table->integer('category_id')->nullable();
                $table->integer('author_id')->nullable();
                $table->string('author_name')->nullable();
                $table->string('author_type')->nullable();
                $table->text('slugs')->nullable();
                $table->string('title')->nullable();
                $table->string('short_description')->nullable();
                $table->text('long_description')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('announcements');
    }
};
