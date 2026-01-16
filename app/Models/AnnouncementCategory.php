<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementCategory extends Model
{
    use HasFactory;

    protected $table = 'announcement_categories';

    protected $fillable = [
        'slugs',
        'category_name',
        'cat_short_description',
        'cat_long_description',
        'cat_icon'
    ];
}
