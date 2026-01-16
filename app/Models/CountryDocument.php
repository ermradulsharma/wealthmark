<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryDocument extends Model
{
    use HasFactory;

    protected $table = 'country_documents';

    protected $fillable = [
        'country_id',
        'country_name',
        'DoucumentId'
    ];
}
