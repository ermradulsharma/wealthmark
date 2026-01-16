<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = 'banks';

    protected $fillable = [
        'bank_name',
        'groupof_bank',
        'bank_type',
        'branch_id',
        'ifsc_code',
        'swift_code',
        'branch_name',
        'branch_address',
        'pin_code',
        'zone',
        'city',
        'state',
        'country',
        'country_code',
        'status',
        'comments'
    ];
}
