<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmOrder extends Model
{
    use HasFactory;

    protected $table = 'confirm_order';

    protected $fillable = [
        'order_id',
        'buyer_id',
        'seller_id',
        'buyer_country',
        'seller_country',
        'crypto_type',
        'total_crypto_value',
        'domestic_currency_value',
        'domestic_currency_type',
        'payment_method_id',
        'payment_method_type',
        'crypto_current_value'
    ];
}
