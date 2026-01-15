<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escrow extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
       
        'deleted_at',
        'orderId',
       'sellerId',
       'buyerId',
       'tradeCoins',
       'tradeCurrencyValue',
       'paymentMode',
       'orderStatus',
       'coinReleased',
       'paymentReleased',
        'comments'
    ];

    protected $dates = ['deleted_at'];
}
