<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureAndResource extends Model
{
    use HasFactory;

    protected $table = 'nature_and_resources';

    protected $fillable = [
        'name',
        'type',
        'status',
        'description'
    ];
}
