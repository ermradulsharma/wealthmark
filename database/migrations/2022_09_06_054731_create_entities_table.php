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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('entity_type', 10)->unique();
            $table->string('entity_name', 255)->nullable();
            $table->integer('company_type', 10)->nullable();
            $table->string('reg_num', 199)->nullable();
            $table->date('DOB_incorpor');
            $table->bigInteger('contact_num')->nullable();
            $table->string('fund_source', 255)->nullable();
            $table->string('cap_source', 255)->nullable();
            $table->string('wealth_source', 255)->nullable();
            $table->string('share_holds', 255)->nullable();
            $table->string('listed_cntry', 255)->nullable();
            $table->string('regstrd_cntry', 255)->nullable();
            $table->string('entity_nature', 255)->nullable();
            $table->string('appli_purpose', 255)->nullable();
            $table->bigInteger('additional_mob')->nullable();
            $table->string('juris_cntry', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('street_add', 255)->nullable();
            $table->string('postal_code', 255)->nullable();
            $table->tinyInteger('oprting_addrs_same')->default(1)->comment('0:no|1:yes');
            $table->string('oprt_juris_cntry', 255)->nullable();
            $table->string('oprt_city', 255)->nullable();
            $table->string('oprt_street_add', 255)->nullable();
            $table->string('oprt_postal_code', 255)->nullable();
            $table->string('keyAcount_manager', 255)->nullable();
            $table->string('most_recentMail', 255)->nullable();
            $table->string('web_address', 255)->nullable();
            $table->string('fiat_dpstWithdwl', 255)->nullable();
            $table->string('fiat_currencies', 255)->nullable();
            $table->string('CNPJ_number', 255)->nullable();
            $table->string('CNPJ_doc', 255)->nullable();
            $table->string('ASIC_doc', 255)->nullable();
            $table->tinyInteger('status')->default(1)->comment('0:Inactive|1:Active|2:Deleted');
            $table->string('comments',255)->nullable();
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
        Schema::dropIfExists('entities');
    }
};
