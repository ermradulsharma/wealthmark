<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('announcement_categories', function (Blueprint $table) {
                $table->id();
                $table->text('slugs')->nullable();
                $table->string('category_name')->nullable();
                $table->string('cat_short_description')->nullable();
                $table->text('cat_long_description')->nullable();
                $table->text('cat_icon')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('announcement_categories');
    }
};
