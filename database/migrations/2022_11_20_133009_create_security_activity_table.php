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
        Schema::create('security_activity', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('source');
			$table->string('activity')->default('0')->comment("0=disabled,1=enabled");
            $table->integer('status')->comment("1=success,0=failed");
			$table->text('data');
			$table->bigInteger('user_id');
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
        Schema::dropIfExists('security_activity');
    }
};
