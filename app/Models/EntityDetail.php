<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityDetail extends Model
{
    use HasFactory;

    protected $table = 'entity_details';

    protected $fillable = [
        'entity_name',
        'entity_status'
    ];
}
