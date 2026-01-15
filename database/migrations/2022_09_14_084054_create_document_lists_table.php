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
        Schema::create('document_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->tinyInteger('type')->deafult(0)->comment('0:None|1:Business|2:Related_parties');
            $table->tinyInteger('subtype')->deafult(0)->comment('0:None|1:Identity|2:AddressProof');
            $table->tinyInteger('status')->deafult(1)->comment('0:Inactive|1:Active|3:Deleted');
            $table->string('comments', 255);
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
        Schema::dropIfExists('document_lists');
    }
};
