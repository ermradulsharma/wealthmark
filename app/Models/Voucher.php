<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Voucher extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens, Notifiable, HasRoles;
    
    protected $fillable = [
		'voucher_key',
		'voucher_number',	
		'voucher_name',	
		'market',
		'validityIndays',
		'expiry',		
        'amount',
		'status',
		'comment'	
 ];
}


