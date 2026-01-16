<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginDetail extends Model
{
    use HasFactory;

    protected $table = 'login_details';

    protected $fillable = [
        'login_details_id',
        'user_id',
        'last_activity'
    ];
}
