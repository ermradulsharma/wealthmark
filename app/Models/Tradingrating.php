<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tradingrating extends Model
{
    use HasFactory;

    protected $table = 'tradingratings';

    protected $fillable = [
        'order_id',
        'buyer_id',
        'seller_id',
        'positive_rating',
        'negative_rating'
    ];
}
