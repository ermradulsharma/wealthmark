<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class marketWallet extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'order_id',
        'new_order_id',
        'no_of_coin',
        'type_of_coin',
        'transaction_status',
        'status',
        'p2p_credit_date',
        'comments',
        'staking_id',
        'new_staking_id',
        'coin_type',
        'coin_name',
    ];

    protected $dates = ['deleted_at'];

}
	
	

	
	





	
	
