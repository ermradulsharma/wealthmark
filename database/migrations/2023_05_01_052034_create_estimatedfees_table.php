<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('estimatedfees', function (Blueprint $table) {
                $table->id();
                $table->string('estimated_fee');                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estimatedfees');
    }
};
