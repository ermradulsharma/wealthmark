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
        Schema::create('business_docs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('incorp_cert' ,255)->nullable();
            $table->string('partnership_agrnmt', 255)->nullable();
            $table->string('regsterOf_partner', 199)->nullable();
            $table->date('incorp_date');
            $table->string('sanc_questn', 255)->nullable();
            $table->string('auth_letter',255)->nullable();
            $table->string('curnt_oprtiv_status', 255)->nullable();
            $table->tinyInteger('curnt_oprtiv_statusOld')->deafult(1)->comment('1:yes|2:no');
            $table->string('aml',255)->comment('1:No|2:Yes')->nullable();
            $table->string('aml_questionnaire', 255)->nullable();
            $table->string('operating_license', 255)->nullable();
            $table->string('outsour_serv_agrmnt', 255)->nullable();
            $table->string('Intermedianes', 255)->nullable();
            $table->string('managementAgreement', 255)->nullable();
            $table->string('investorsList', 255)->nullable();
            $table->string('offeringDoc', 255)->nullable();
            $table->string('InvestmentManager', 255)->nullable();
            $table->string('SoW', 255)->nullable();
            $table->string('SoF', 255)->nullable();
            $table->string('iftrd_othr_behlf', 255)->nullable();
            $table->string('add_proof' , 255)->nullable();
            $table->string('supmentry',255)->nullable();
            $table->string('checklist',255)->nullable();
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
        Schema::dropIfExists('business_docs');
    }
};
