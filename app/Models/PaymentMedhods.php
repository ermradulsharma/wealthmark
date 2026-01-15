<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMedhods extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       
        'user_id',
        'method_type',
       'account_holder',
       'account_number',
      'account_type',
      'bank_id',
       'bank_name',
       'ifsc', 
       'swift_code',
       'branch_name',
        'qr_code',
        'upi_Id',
       'email_otp', 
        'phone_otp', 
       'authentication_otp', 
        'account_status',
        'comments'
    ];

    protected $dates = ['deleted_at'];
}
