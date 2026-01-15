<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityActivity extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'source',
        'activity',
        'status',
        'data',
        'user_id'
    ];
}
