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
        Schema::create('company_type', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->unique();
            $table->tinyInteger('status')->default('1')->comment('0:Inactive|1:Active|2:Deleted');
            $table->string('comments',255)->nullable();
           // $table->softDeletes();
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
        Schema::dropIfExists('company_type');
    }
};
