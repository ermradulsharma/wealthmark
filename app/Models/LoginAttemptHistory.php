<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAttemptHistory extends Model
{
    use HasFactory;

    protected $table = 'login_attempt_histories';

    protected $fillable = [
        'user_id',
        'browser',
        'device',
        'deviceType',
        'ip',
        'location',
        'sessionId',
        'status'
    ];
}
