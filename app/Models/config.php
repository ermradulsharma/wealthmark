<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class config extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'comment_1',
        'comment_2',
       'comments'
    ];
    protected $dates = ['deleted_at'];
    
}
