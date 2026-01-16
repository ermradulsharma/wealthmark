<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staking extends Model
{
    use HasFactory;

    protected $table = 'stakings';

    protected $fillable = [
        'user_id',
        'staking_transaction_id',
        'staking_num_of_year',
        'stacking_num',
        'staking_coin_name',
        'staking_coin_type',
        'date_of_deposite',
        'maturity_date',
        'before_maturity_coins',
        'before_maturity_value_usd',
        'before_maturity_value_inr',
        'after_maturity_coins',
        'after_total_value_INR',
        'after_total_value_USD',
        'upto_total_benefits',
        'upto_monthly_benefits',
        'percentage_of_interest',
        'current_price_of_coin_usd',
        'current_price_of_coin_inr',
        'status',
        'maturity_status',
        'comments'
    ];
}
