<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedParty extends Model
{
    use HasFactory;

    protected $table = 'related_parties';

    protected $fillable = [
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
        'comments',
        'user_id',
        'status'
    ];
}
