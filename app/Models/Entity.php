<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    protected $table = 'entities';

    protected $fillable = [
        'user_id',
        'entity_type',
        'entity_name',
        'company_type',
        'reg_num',
        'DOB_incorpor',
        'contact_num',
        'fund_source',
        'cap_source',
        'wealth_source',
        'share_holds',
        'listed_cntry',
        'regstrd_cntry',
        'entity_nature',
        'appli_purpose',
        'additional_mob',
        'juris_cntry',
        'city',
        'street_add',
        'postal_code',
        'oprting_addrs_same',
        'oprt_juris_cntry',
        'oprt_city',
        'oprt_street_add',
        'oprt_postal_code',
        'keyAcount_manager',
        'most_recentMail',
        'web_address',
        'fiat_dpstWithdwl',
        'fiat_currencies',
        'CNPJ_number',
        'CNPJ_doc',
        'ASIC_doc',
        'status',
        'comments'
    ];
}
