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
        Schema::create('related_parties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyinteger('partnerId')->comment('1:genPartner|2:neneOwner|3:signiController|4:acuntTrader|5:mainTrader|6:authletter')->nullable();
            $table->tinyinteger('partnerType')->comment('1:Indivisual|2:Entity')->nullable();
            $table->integer('companyID')->nullable();
            $table->string('firstName', 255)->nullable();
            $table->string('MidName', 255)->nullable();
            $table->string('lastName', 255)->nullable(); 
            $table->date('dob')->nullable();
            $table->string('jurisCountry', 255)->nullable();
            $table->string('countryResidence', 255)->nullable();
            $table->string('companyName', 255)->nullable();
            $table->string('companyRegNum', 255)->nullable();
            $table->string('countryIncorp', 255)->nullable();
            $table->string('idDocUploadedFront', 255)->nullable();
            $table->string('idDocUploadedBack', 255)->nullable();
            $table->string('idDocIssuedCountry', 255)->nullable();
            $table->integer('idDocType')->nullable();
            $table->string('idDocNum', 255)->nullable();
            $table->integer('addressProofType')->nullable();
            $table->string('addressProofNum', 255)->nullable();
            $table->string('addDocAttachFront', 255)->nullable();
            $table->string('addDocAttachBack', 255)->nullable();
            $table->date('addDocIssuedDate', 255)->nullable();
            $table->string('addDocCountry', 255)->nullable();
            $table->string('addDocState', 255)->nullable();
            $table->string('addDocCity', 255)->nullable();
            $table->string('addDocStreet', 255)->nullable();
            $table->biginteger('addDocZip')->nullable();
            $table->string('residenceCountry', 255)->nullable();
            $table->string('residenceState', 255)->nullable();
            $table->string('residenceCity', 255)->nullable();
            $table->string('residencestreet', 255)->nullable();
            $table->biginteger('residenceZip')->nullable();
            $table->text('authLetter')->nullable(); 
            $table->string('comments')->nullable();
            $table->integer('status')->default(1)->Comment('0:Deleted|1:Actives|2:Inactive|3:Drafted');
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
        Schema::dropIfExists('related_parties');
    }
};
