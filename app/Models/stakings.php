<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class stakings extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'user_id',	
    	'staking_transaction_id	',
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
    	'current_price_of_coin_usd',	
    	'percentage_of_interest',	
    	'current_price_of_coin_inr',	
    	'status',	
    	'comments',
    ];

    protected $dates = ['deleted_at'];
}
