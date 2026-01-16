<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCardHistory extends Model
{
    use HasFactory;

    protected $table = 'gift_card_histories';

    protected $fillable = [
        'gift_card_gc_number',
        'gift_card_gc_order_id',
        'gift_card_otp',
        'gift_card_user_id',
        'gift_card_current_user_id',
        'ip_address'
    ];
}
