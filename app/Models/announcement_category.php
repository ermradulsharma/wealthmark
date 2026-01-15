<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class announcement_category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       
                'category_id',
                'author_id',
                'author_name',
                'slugs',
                'author_type',
                'title',
                'cat_short_description',
                'cat_long_description',
                'cat_icon',
     
    ];

    protected $dates = ['deleted_at'];
}
