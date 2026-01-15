<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class failed_verification_history extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'id_card_type',
        'id_card_num',
        'digilocker_verification_responce',
        'eaadhar_response',
        'status',
        'comments'
    ];
    
    protected $dates = ['deleted_at'];

   
}
