<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_details', function (Blueprint $table) {
            $table->id();
          	$table->bigInteger('user_id');
            $table->string('twitter_id')->nullable();
            $table->string('twitter_detail')->nullable();	
            $table->integer('status')->comment('0=Not Linked,1=Linked')->default('0'); 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twitter_details');
    }
};
