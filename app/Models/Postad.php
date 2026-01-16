<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postad extends Model
{
    use HasFactory;

    protected $table = 'postads';

    protected $fillable = [
        'adsid',
        'userid',
        'ordertype',
        'cryptoname',
        'faithid',
        'cryptovalue_in_domestictype',
        'pricetype',
        'fixed_floating_pice',
        'total_amount',
        'order_lower_limit',
        'order_higher_limit',
        'payment_method',
        'payment_time_limit',
        'terms',
        'auto_replay',
        'countryparty_condition',
        'estimated_fee',
        'cryptorateinusd',
        'currencyrateinusd'
    ];
}
