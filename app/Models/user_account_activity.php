<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user_account_activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
   
            'user_id',
            'order_id',
            'reason_id',
            'reason_type',
            'buying_status',
            'comments',
    ];

    protected $dates = ['deleted_at'];

}
