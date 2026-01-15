<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class currencies extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'currency_symbol',
        'currency_value',
        'currency_type',
        'currencyVal_by_INR',
        'currency_symbol',
        'status',
        'description',
    ];

}
