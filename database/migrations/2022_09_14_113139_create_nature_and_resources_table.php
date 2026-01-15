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
        Schema::create('nature_and_resources', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->tinyInteger('type')->comment('0:Other|1:Nature|2:Capital|3:Wealth|4:Funds');
            $table->tinyInteger('status')->deafult(1)->comment('0:Inactive|1:Active|3:Deleted');
            $table->string('description', 255);
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
        Schema::dropIfExists('nature_and_resources');
    }
};
