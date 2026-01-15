<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postads extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       
        'userid','ordertype','cryptoname','current_crypto_in_inr','faithid','pricetype','fixed_floating_pice','total_amount','order_lower_limit','order_higher_limit','payment_method','payment_time_limit','countryparty_condition','adsid','estimated_fee','domestic_currency_value','cryptorateinusd','currencyrateinusd',
       
    ];
}
