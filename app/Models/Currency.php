<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $table = 'currencies';

    protected $fillable = [
        'name',
        'currency_symbol',
        'currency_value',
        'currency_type',
        'currencyVal_by_INR',
        'currencyVal_by_USD',
        'status',
        'description'
    ];
}
