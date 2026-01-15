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
        Schema::create('entity_details', function (Blueprint $table) {
            $table->id();
            $table->string('entity_name',199)->unique();
            $table->tinyInteger('entity_status')->default('1')->comment('0:Inactive|1:Active|2:Deleted');
            $table->string('comments',255)->nullable();
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
        Schema::dropIfExists('entity_details');
    }
};
