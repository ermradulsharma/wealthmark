<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 'announcements';

    protected $fillable = [
        'category_id',
        'author_id',
        'author_name',
        'author_type',
        'slugs',
        'title',
        'short_description',
        'long_description'
    ];

    /**
     * Get the category that this announcement belongs to.
     */
    public function category()
    {
        return $this->belongsTo(AnnouncementCategory::class, 'category_id');
    }
}
