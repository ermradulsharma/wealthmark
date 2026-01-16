<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountActivity extends Model
{
    use HasFactory;

    protected $table = 'user_account_activities';

    protected $fillable = [
        'user_id',
        'order_id',
        'reason_id',
        'reason_type',
        'buying_status',
        'comments'
    ];
}
