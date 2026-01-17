<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    use HasFactory;

    protected $fillable = [

        // 'deleted_at',
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

    // protected $dates = ['deleted_at'];
}
