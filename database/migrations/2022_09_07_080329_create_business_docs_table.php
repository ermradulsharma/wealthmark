<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('business_docs', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('incorp_cert')->nullable();
                $table->string('partnership_agrnmt')->nullable();
                $table->string('regsterOf_partner')->nullable();
                $table->date('incorp_date')->nullable();
                $table->string('sanc_questn')->nullable();
                $table->string('auth_letter')->nullable();
                $table->tinyInteger('curnt_oprtiv_statusOld')->default(1);
                $table->string('curnt_oprtiv_status')->nullable();
                $table->string('aml')->nullable();
                $table->string('aml_questionnaire')->nullable();
                $table->string('operating_license')->nullable();
                $table->string('outsour_serv_agrmnt')->nullable();
                $table->string('Intermedianes')->nullable();
                $table->string('managementAgreement')->nullable();
                $table->string('investorsList')->nullable();
                $table->string('offeringDoc')->nullable();
                $table->string('InvestmentManager')->nullable();
                $table->string('SoW')->nullable();
                $table->string('SoF')->nullable();
                $table->string('iftrd_othr_behlf')->nullable();
                $table->string('add_proof')->nullable();
                $table->string('supmentry')->nullable();
                $table->string('checklist')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('business_docs');
    }
};
