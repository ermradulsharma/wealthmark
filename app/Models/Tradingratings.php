<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tradingratings extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
       'order_id', 
       'buyer_id',
       'seller_id',
       'positive_rating',
       'negative_rating'
           ];
    protected $dates = ['deleted_at'];
}
