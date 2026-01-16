<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stacking extends Model
{
    use HasFactory;

    protected $table = 'stackings';

    protected $fillable = [
        'user_id',
        'stacking_num',
        'wallet_ids',
        'start_date',
        'years',
        'months',
        'date_of_deposite',
        'maturity_date',
        'price_id',
        'token_transaction_id',
        'after_maturity_coins',
        'total_value_INR',
        'total_value_USD',
        'upto_total_benefits',
        'upto_monthly_benefits',
        'end_date',
        'num_of_year',
        'percentage_of_interest',
        'no_of_coin',
        'current_price_of_coin',
        'status',
        'comments'
    ];
}
