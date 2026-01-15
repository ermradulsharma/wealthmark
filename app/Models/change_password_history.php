<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class change_password_history extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [ 
	
        'user_id',
        'login_type',  
        'ip',
        'record_type',
        'new_record',
        'old_record',
       		
    ];
  protected $dates = ['deleted_at'];
  // protected $guarded = [];
}
