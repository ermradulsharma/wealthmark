<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimatedFee extends Model
{
    use HasFactory;

    protected $fillable = [

        'fee_type',
        'estimated_fee',

    ];
}
