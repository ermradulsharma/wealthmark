<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Contracts\Auth\MustVerifyEmail;



class Entity_detail extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'entity_name',
        'entity_status',
        'comments',
       
    ];
 //   protected $dates = ['deleted_at'];

}
