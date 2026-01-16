<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailedVerificationHistory extends Model
{
    use HasFactory;

    protected $table = 'failed_verification_histories';

    protected $fillable = [
        'user_id',
        'digilocker_verification_responce',
        'pan_verification_responce',
        'eaadhar_response',
        'id_card_type',
        'id_card_num',
        'status',
        'comments'
    ];
}
