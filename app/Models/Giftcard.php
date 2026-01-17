<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giftcard extends Model
{
    use HasFactory;

    protected $table = 'giftcards';

    protected $fillable = [
        'Gift_Card_Uploader_User_Id',
        'Gift_Card_phone',
        'Gift_Card_email',
        'Gift_Card_Voucher_no',
        'Gift_Card_Voucher_pin',
        'Gift_Card_Status',
        'Gift_Card_Amount',
        'Gift_Card_Expiration_date'
    ];
}
