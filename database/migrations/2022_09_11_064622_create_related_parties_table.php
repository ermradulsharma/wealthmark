<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('related_parties', function (Blueprint $table) {
                $table->id();
                $table->tinyInteger('partnerId')->nullable();
                $table->tinyInteger('partnerType')->nullable();
                $table->integer('companyID')->nullable();
                $table->string('firstName')->nullable();
                $table->string('MidName')->nullable();
                $table->string('lastName')->nullable();
                $table->date('dob')->nullable();
                $table->string('jurisCountry')->nullable();
                $table->string('countryResidence')->nullable();
                $table->string('companyName')->nullable();
                $table->string('companyRegNum')->nullable();
                $table->string('countryIncorp')->nullable();
                $table->string('idDocUploadedFront')->nullable();
                $table->string('idDocUploadedBack')->nullable();
                $table->string('idDocIssuedCountry')->nullable();
                $table->integer('idDocType')->nullable();
                $table->string('idDocNum')->nullable();
                $table->integer('addressProofType')->nullable();
                $table->string('addressProofNum')->nullable();
                $table->string('addDocAttachFront')->nullable();
                $table->string('addDocAttachBack')->nullable();
                $table->date('addDocIssuedDate')->nullable();
                $table->string('addDocCountry')->nullable();
                $table->string('addDocState')->nullable();
                $table->string('addDocCity')->nullable();
                $table->string('addDocStreet')->nullable();
                $table->bigInteger('addDocZip')->nullable();
                $table->string('residenceCountry')->nullable();
                $table->string('residenceState')->nullable();
                $table->string('residenceCity')->nullable();
                $table->string('residencestreet')->nullable();
                $table->bigInteger('residenceZip')->nullable();
                $table->text('authLetter')->nullable();
                $table->string('comments')->nullable();
                $table->unsignedBigInteger('user_id');
                $table->integer('status')->default(1);
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('related_parties');
    }
};
