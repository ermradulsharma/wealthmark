<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class payment_method_list extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       
        'name',
        'status',
        'comments'
    ];

    protected $dates = ['deleted_at'];
}
