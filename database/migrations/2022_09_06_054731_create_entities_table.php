<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->integer('entity_type')->nullable();
                $table->string('entity_name');
                $table->integer('company_type')->nullable();
                $table->string('reg_num')->nullable();
                $table->date('DOB_incorpor')->nullable();
                $table->bigInteger('contact_num')->nullable();
                $table->string('fund_source')->nullable();
                $table->string('cap_source')->nullable();
                $table->string('wealth_source')->nullable();
                $table->string('share_holds')->nullable();
                $table->string('listed_cntry')->nullable();
                $table->string('regstrd_cntry')->nullable();
                $table->string('entity_nature')->nullable();
                $table->string('appli_purpose')->nullable();
                $table->bigInteger('additional_mob')->nullable();
                $table->string('juris_cntry')->nullable();
                $table->string('city')->nullable();
                $table->string('street_add')->nullable();
                $table->string('postal_code')->nullable();
                $table->tinyInteger('oprting_addrs_same')->default(1);
                $table->string('oprt_juris_cntry')->nullable();
                $table->string('oprt_city')->nullable();
                $table->string('oprt_street_add')->nullable();
                $table->string('oprt_postal_code')->nullable();
                $table->string('keyAcount_manager')->nullable();
                $table->string('most_recentMail')->nullable();
                $table->string('web_address')->nullable();
                $table->string('fiat_dpstWithdwl')->nullable();
                $table->string('fiat_currencies')->nullable();
                $table->string('CNPJ_number')->nullable();
                $table->string('CNPJ_doc')->nullable();
                $table->string('ASIC_doc')->nullable();
                $table->tinyInteger('status')->default(1);
                $table->string('comments')->nullable();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entities');
    }
};
