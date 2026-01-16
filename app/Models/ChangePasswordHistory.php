<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangePasswordHistory extends Model
{
    use HasFactory;

    protected $table = 'change_password_histories';

    protected $fillable = [
        'user_id',
        'login_type',
        'ip',
        'record_type',
        'old_record',
        'new_record'
    ];
}
