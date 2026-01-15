<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class relatedParties extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'user_id', 
       'partnerId',
       'partnerType',
       'companyID',
       'firstName',
       'MidName',
       'lastName',
       'dob',
       'jurisCountry',
       'countryResidence',
       'companyName',
       'companyRegNum',
       'countryIncorp',
       'idDocUploadedFront',
       'idDocUploadedBack',
       'idDocIssuedCountry',
       'idDocType',
       'idDocNum',
       'addressProofType',
       'addressProofNum',
       'addDocAttachFront',
       'addDocAttachBack',
       'addDocIssuedDate',
       'addDocCountry',
       'addDocState',
       'addDocCity',
       'addDocStreet',
       'addDocZip',
       'residenceCountry',
       'residenceState',
       'residenceCity',
       'residencestreet',
       'residenceZip',
       'authLetter',
       'status',
       'comments',
        
      ];
    protected $dates = ['deleted_at'];


}
