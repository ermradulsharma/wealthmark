<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class businessDocs extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable  = [
        'user_id',
        'incorp_cert',
        'partnership_agrnmt',
        'regsterOf_partner',
        'incorp_date',
        'sanc_questn',
        'auth_letter',
        'curnt_oprtiv_statusOld',
        'curnt_oprtiv_status',
        'aml',
        'aml_questionnaire',
        'operating_license',
        'outsour_serv_agrmnt',
        'Intermedianes',
        'managementAgreement',
        'investorsList',
        'offeringDoc',
        'InvestmentManager',
        'SoW',
        'SoF',
        'iftrd_othr_behlf',
        'add_proof',
        'supmentry',
        'checklist',
        'status',
        ];

    protected $dates = ['deleted_at'];
}
