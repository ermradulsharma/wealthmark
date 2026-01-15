<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Entity_detail;
use App\Models\company_type;
use App\Models\entities;
use App\Models\document_lists;
use App\Models\businessDocs;
use App\Models\relatedParties;
use App\Models\nature_and_resources;
use App\Models\User;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\UploadedFile;
use App\Models\Country;
use App\Models\Banks;
use Illuminate\Support\Facades\Validator;

class EntityController extends Controller
{

    public function __construct()
    {
        session_start();
    }


    public function updateUsername250223_old()
    {

        /* for ($id = 1; $id <= 1; $id++) {
            $username = random_int(1000000000, 9999999999);
            echo $username;
            echo '</br>';
            $UpdateduserName = User::where('id', '=', $id)->update(['user_name' => $username]);
        } */
    }

    public function generate_referral_usernames_2feb23()
    {

        // to generate referral is and usernames

        for ($id = 1; $id <= 24350; $id++) {

            // $UpdateduserName = User::where( 'id', '=', $id )->update( [ 'user_name' => time().$id ]);
            // $Updatereffereals = User::where( 'id', '=', $id )->update( [ 'referral_id' => substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10) ]);
            //  $Updatereffereals = User::where( 'id', '=', $id )->update( [ 'referral_id' => null , 'residential_address' => null ,
            // 'permannent_address' => null ,
            // 'selfie_image' => null ,
            // 'id_card_type' => null ,
            // 'id_card_back_image' => null ,
            // 'id_card_front_image' => null ,
            // 'proof_address_image' => null ,
            // 'email_otp' => null ,
            // 'phone_otp' => null ,
            // 'qr_code' => null ,
            // 'pan_card_img' => null ,
            // 'pan_card' => null ,
            // 'city' => null ,
            // 'state' => null ,
            // 'country' => null ,
            // 'postal_code' => null ,
            // 'default_language' => null ,
            // 'profile_image' => null ,
            // 'country_flag' => null ,
            // 'country_code' => null ,
            // 'comment' => null ,
            // 'gender' => null ,
            // 'avatar' => null ,
            // 'nick_name' => null ,
            // 'last_name' => null ,
            // 'middle_name' => null         ]);
        }
    }

    // this is verification page demo
    public function dashboardDemo()
    {

        $countrynameAndIos2 = json_decode(file_get_contents('http://country.io/names.json'));
        $countrynameIOS3 = json_decode(file_get_contents('http://country.io/iso3.json'));
        $countryCapital = json_decode(file_get_contents('http://country.io/capital.json'));
        $countryContinent = json_decode(file_get_contents('http://country.io/continent.json'));
        $countryDialingCode = json_decode(file_get_contents('http://country.io/phone.json'));
        $countryCurrency = json_decode(file_get_contents('http://country.io/currency.json'));

        //   $totalusers = User::whereNotNull('email')->get();
        $userID =  [18289,  8861, 10172, 16914, 15982, 15650, 14866];

        // $allNullrefIDS = array();

        //  foreach($userID as $id){


        // //         $UpdateduserName = User::where( 'id', '=', $id )->update( [ 'user_name' => time().$id ]);

        //         $findrefferalRow =    User::where( 'id', '=', $id )->whereNull( 'referral_id' )->first();


        //                   if($findrefferalRow){

        //                       $allNullrefIDS[]  = $id;
        //                   }

        //          }

        //    print_r($allNullrefIDS);
        //   echo "</br>";
        //   echo count($allNullrefIDS);
        //  foreach($allNullrefIDS as $refids){


        //          $Updatereffereals = User::where( 'id', '=', $refids )->update( [ 'referral_id' => substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10) ]);



        //          }

        //  die;

        //     foreach($countrynameAndIos2 AS $key => $value){


        //  $inscountry = new Country;
        // $inscountry->name = $value ;
        //  $inscountry->ISO2code = $key ;
        // $inscountry->save();


        //    foreach($countryDialingCode AS $dialkey => $dialingCode){
        //      if( $key == $dialkey){
        //   $countryUpdated = Country::where( 'ISO2code', '=', $key  )->update( [ 'dialing_code' => $dialingCode]);
        //     }
        // }

        //     foreach($countrynameIOS3 AS $ios3key => $iso3val){
        //        if( $key == $ios3key){
        //   $ios3Updated = Country::where( 'ISO2code', '=', $key )->update( [ 'ISO3code' => $iso3val]);
        //          }
        //   }


        //      foreach($countryCapital AS $capkey => $capval){
        //            if( $key == $capkey){
        //  $capUpdated = Country::where('ISO2code', '=', $key )->update( [ 'capital' => $capval]);
        //         }
        //      }


        //      foreach($countryContinent AS $countkey => $countval){
        //          if( $key == $countkey){
        //    $countUpdated = Country::where( 'ISO2code', '=', $key )->update( [ 'continent' => $countval]);
        //        }
        //     }

        //         foreach($countryCurrency AS $cruncykey => $cruncyval){
        //            if( $key == $cruncykey){
        // $curncyUpdated = Country::where( 'ISO2code', '=', $key  )->update( [ 'currency' => $cruncyval]);
        //            }
        //        }

        // };




        //   foreach($paymentss as $pmnt){
        //       print_r($pmnt);
        //      $ptmntmdth = new Banks;
        //    $ptmntmdth->bank_name = $pmnt ;
        //    $ptmntmdth->save();
        //   };

        // die;

        return view('entity/register_business_process');
    }


    public function dashboardDemo2()
    {
        return view('entity/uploaddocumnet_test');
    }

    // register information before basic information just after registeration
    public function register(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'entity_name' => 'required|string|max:199',
            'regstrd_cntry' => 'required|string',
            'entity_type' => 'required|string',
            'company_type' => 'nullable|string|max:199',
            'keyAcount_manager' => 'nullable|string|max:199',
            'most_recentMail' => 'nullable|email',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // Prepare data for insert/update
        $data = $request->only([
            'entity_name',
            'company_type',
            'regstrd_cntry',
            'entity_type',
            'keyAcount_manager',
            'most_recentMail',
        ]);

        // Ensure only one of keyAcount_manager or most_recentMail is set
        if (!empty($data['keyAcount_manager'])) {
            $data['most_recentMail'] = null;
        } elseif (!empty($data['most_recentMail'])) {
            $data['keyAcount_manager'] = null;
        }

        // Check if entity exists for the user
        $entity = Entities::where('user_id', $request->user_id)->first();

        if ($entity) {
            $entity->update($data);
            return response()->json([
                'success' => true,
                'message' => 'Entity updated successfully',
                'entity' => $entity
            ], 200);
        } else {
            $data['user_id'] = $request->user_id; // Ensure user_id is set
            $entity = Entities::create($data);
            return response()->json([
                'success' => true,
                'message' => 'Entity created successfully',
                'entity' => $entity
            ], 201);
        }
    }




    // show all entity data in entity table
    public function show()
    {

        //  DB::enableQueryLog();

        // dd($request->all());
        $all = Entities::all();
        //  dd($all);

        // dd(DB::getQueryLog(), $all);
        // return view('api/show-businesses', compact(['all']));
        return response()->json($all);
        // print_r("hello");

    }



    // entity profile
    public function entity_profile()
    {
        session_start();
        $allSessions = session()->all();
        // dd($allSessions);
        return view('entity/entityProfile');
    }


    // entity enterprises
    public function entity_enterprise()
    {
        session_start();
        $allSessions = session()->all();
        // dd($allSessions);
        return view('entity/enterprise');
    }


    public function related_parties(Request $request)
    {
        // print_r($request->all());
        $inputs = $request->all();
        $related_prolicies = relatedParties::create($inputs);
        // dd($related_prolicies);
        return response()->json($related_prolicies);
    }

    // entity dashboard

    public function entityDashboard()
    {

        $UserInEntity = Entities::where('user_id', Auth::user()->id)->first();
        //dd($UserInEntity);

        if (empty($UserInEntity)) {
            return redirect('en/entity-verification');
        }

        $entity = entities::where('user_id', Auth::user()->id)->first();
        $entitydocs = businessDocs::where('user_id', Auth::user()->id)->first();
        $related_parties = relatedParties::where('user_id', Auth::user()->id)->first();

        $entity_verificationStatus = $this->is_entity_verified(Auth::user()->id);

        return view('entity/myDashboard', compact('entity', 'entitydocs', 'related_parties', 'entity_verificationStatus'));
    }


    // update entity
    public function update_entity(Request $request, $id)
    {
        //$id = Request::segment(3);
        //  print_r($id);

    }



    // To get business nature from its type
    public function getBusinessnatureName($natureType)
    {
        //   $businatureNamae = nature_and_resources::where('id', $natureType)->get('name');
        //  return $businatureNamae;
        return $natureType;
    }


    // For entity Verification
    public function verifyEntity()
    {

        // print_r(Auth::user()->id."/".Auth::user()->account_type);

        $companyTypes = company_type::all();
        $entityTypes = Entity_detail::all();
        $entityDocs = document_lists::all();
        $businessNatures = nature_and_resources::all();


        $entity = entities::where('user_id', Auth::user()->id)->first();
        $entitydocs = businessDocs::where('user_id', Auth::user()->id)->first();
        $related_parties = relatedParties::where('user_id', Auth::user()->id)->first();
        $related_partiesPartners = relatedParties::where(['user_id' => Auth::user()->id, 'partnerId' => 1,])->whereIn('status', [3, 1])->get();
        $relatedParties_beneficialOwner = relatedParties::where(['user_id' => Auth::user()->id, 'partnerId' => 2,])->whereIn('status', [3, 1])->get();
        $relatedParties_significantController = relatedParties::where(['user_id' => Auth::user()->id, 'partnerId' => 3,])->whereIn('status', [3, 1])->get();

        $relatedParties_accountTrader = relatedParties::where(['user_id' => Auth::user()->id, 'partnerId' => 4,])->whereIn('status', [3, 1])->get();
        $relatedParties_mainTrader = relatedParties::where(['user_id' => Auth::user()->id, 'partnerId' => 5,])->whereIn('status', [3, 1])->get();
        $relatedParties_authLetters = relatedParties::where(['user_id' => Auth::user()->id, 'partnerId' => 6,])->whereIn('status', [3, 1])->get();

        return view('entity/verifyEntity',  compact('businessNatures', 'entityTypes', 'companyTypes', 'entityDocs', 'entity', 'entitydocs', 'related_parties', 'related_partiesPartners', 'relatedParties_beneficialOwner', 'relatedParties_significantController', 'relatedParties_accountTrader', 'relatedParties_mainTrader', 'relatedParties_authLetters'));
    }




    // start basicinformation form multiple sections

    public function accountInformation(Request $request)
    {

        $validator =  Validator::make($request->all(), [
            'reg_num' => 'required|string|max:199',
            'DOB_incorpor' => 'required|date|before:today',
            'entity_name' =>  'required|max:199|string',


        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            $findIfUser = Entities::where('user_id', $request->user_id)->first();


            //dd($findIfUser);

            if ($findIfUser) {

                print_r($request->user_id);
                print_r($findIfUser->user_id);
                //  print_r($findIfUser->reg_num);
                //  print_r($findIfUser->DOB_incorpor);

                $entityUpdated = Entities::where('user_id', $request->user_id)->update(['entity_name' => $request->entity_name, 'reg_num' => $request->reg_num, 'DOB_incorpor' => $request->DOB_incorpor]);

                if ($entityUpdated == true) {

                    return response()->json(['message' => 'Details confirmed Successfully', 'success' => "200"]);
                } else {
                    return response()->json(['error' => "401"]);
                }
            }
        }
    }


    public function entityAddress(Request $request)
    {
        //  print_r($request->juris_cntry);
        // dd($request->all());
        $validator =  Validator::make($request->all(), [

            'juris_cntry' => 'required',
            'city' => 'required|max:199|string',
            'postal_code' => 'required|numeric',
            'street_add' => 'required|max:199|string',
            'oprt_juris_cntry' => 'required',
            'oprt_city' => 'required|max:199|string',
            'oprt_postal_code' => 'required|numeric',
            'oprt_street_add' => 'required|max:199|string',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {


            if ($request->user_id) {


                $findIfUser = Entities::where('user_id', $request->user_id)->first();

                if ($findIfUser) {


                    if ($request->oprting_addrs_same == 0) {

                        $entityUpdated = Entities::where('user_id', $request->user_id)->update([


                            'juris_cntry'  =>  $request->juris_cntry,
                            'city' => $request->city,
                            'postal_code' => $request->postal_code,
                            'street_add' => $request->street_add,
                            'oprting_addrs_same' => $request->oprting_addrs_same,
                            'oprt_city' => $request->oprt_city,
                            'oprt_juris_cntry' => $request->oprt_juris_cntry,
                            'oprt_postal_code' => $request->oprt_postal_code,
                            'oprt_street_add' => $request->oprt_street_add,

                        ]);
                    }

                    if ($request->oprting_addrs_same == 1) {

                        $entityUpdated = Entities::where('user_id', $request->user_id)->update([

                            'juris_cntry'  =>  $request->juris_cntry,
                            'city' => $request->city,
                            'postal_code' => $request->postal_code,
                            'street_add' => $request->street_add,
                            'oprting_addrs_same' => $request->oprting_addrs_same,
                            'oprt_city' => $request->city,
                            'oprt_juris_cntry' => $request->juris_cntry,
                            'oprt_postal_code' => $request->postal_code,
                            'oprt_street_add' => $request->street_add,

                        ]);
                    }

                    if ($entityUpdated == true) {

                        return response()->json(['message' => 'Details confirmed Successfully', 'success' => "200"]);
                    } else {
                        return response()->json(['error' => "401"]);
                    }
                }
            } else {

                return response()->json(['error' => "401"]);
            }

            //   return response()->json($request->all());

        }
    }


    public function sourceDeclairation(Request $request)
    {
        // dd($request);

        $validator = Validator::make(
            $request->all(),
            [

                'capArray' => 'required|min:1',
                'wealthArray' => 'required|min:1',
                'fundArray' => 'required|min:1',

            ]
        );


        if ($validator->fails()) {

            // $message = $validator->messages();

            return response()->json(['error' => $validator->errors()], 401);
        } else {

            $findIfUser = Entities::where('user_id', $request->user_id)->first();

            if ($findIfUser) {

                $entityUpdated = Entities::where('user_id', $request->user_id)->update([
                    'fund_source' => $request->fund_source,
                    'cap_source' => $request->cap_source,
                    'wealth_source' => $request->wealth_source,

                ]);

                if ($entityUpdated == true) {
                    return response()->json(['message' => 'Details confirmed Successfully', 'success' => "200"]);
                } else {
                    return response()->json(['error' => "401"]);
                }
            }
        }
    }



    public function additionalInformation(Request $request)
    {
        //  dd($request->all);
        $validator =  Validator::make($request->all(), [
            'entity_nature' =>  'required|max:199|string',
            'appli_purpose' => 'required|max:55|string',
            'listed_country' => 'required',
            'additional_mob' => 'required|numeric',
            'web_address' => 'required|url',


        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            $findIfUser = Entities::where('user_id', $request->user_id)->first();


            //dd($findIfUser);

            if ($findIfUser) {

                //   print_r( $request->user_id);
                //    print_r($findIfUser->user_id);
                //  print_r($findIfUser->reg_num);
                //  print_r($findIfUser->DOB_incorpor);

                $entityUpdated = Entities::where('user_id', $request->user_id)->update(['entity_nature' => $request->entity_nature, 'appli_purpose' => $request->appli_purpose, 'listed_cntry' => $request->listed_country, 'additional_mob' => $request->additional_mob, 'web_address' => $request->web_address]);

                if ($entityUpdated == true) {

                    return response()->json(['message' => 'Details confirmed Successfully', 'success' => "200"]);
                } else {
                    return response()->json(['error' => "401"]);
                }
            }
        }
    }


    // end basic form multiple sections
    // For related parties

    //general partner
    public function addGeneralPartner(Request $request)
    {

        //  dd($request->all());
        // print_r($request->all());
        //dd($request->jurisCountry);
        // dd($request->dob);
        // dd($request->partnerType);

        // dd( $request->file('idDocUploadedFront')->getClientOriginalName(), $request->file('idDocUploadedBack')->getClientOriginalName() , $request->all());


        if ($request->partnerType == 1) {
            $validator = Validator::make($request->all(), [
                'firstName' => 'required|max:199|string',
                'lastName' => 'required|max:199|string',
                'dob' => 'required|date|before:today',
                'JurisCountry' => 'array|min:1',
                'countryResidence' => 'required',
                'idDocIssuedCountry' => 'required',
                'idDocType' => 'required',
                'idDocNum' => 'required|max:99|string',
                'idDocUploadedFront' => 'required',
                'idDocUploadedBack' => 'required',


            ]);


            if ($validator->fails()) {

                $message = $validator->messages();

                return response()->json(['error' => $validator->errors()], 401);
            } else {

                $relatedPartiesRec = new relatedParties;

                $findIfUser =  relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->partnerId,  'partnerType' =>  $request->partnerType, 'dob' =>  $request->dob, 'idDocNum' =>  $request->idDocNum])->first();

                if ($findIfUser) {
                    // $existedIndivisualID = $findIfUser->id;
                    return response()->json(['message' => 'Duplicate record found!']);
                } else {

                    $relatedPartiesIndivisualRec = new relatedParties;


                    $relatedPartiesIndivisualRec->user_id = $request->user_id;
                    $relatedPartiesIndivisualRec->status = $request->status;

                    $relatedPartiesIndivisualRec->partnerId  = $request->partnerId;
                    $relatedPartiesIndivisualRec->partnerType  = $request->partnerType;

                    $relatedPartiesIndivisualRec->firstName  = $request->firstName;
                    $relatedPartiesIndivisualRec->MidName  = $request->MidName;
                    $relatedPartiesIndivisualRec->lastName = $request->lastName;
                    $relatedPartiesIndivisualRec->dob  = $request->dob;


                    $relatedPartiesIndivisualRec->jurisCountry  =  implode(',', $request->jurisCountry);

                    $relatedPartiesIndivisualRec->countryResidence = $request->countryResidence;
                    $relatedPartiesIndivisualRec->idDocIssuedCountry  = $request->idDocIssuedCountry;
                    $relatedPartiesIndivisualRec->idDocType  = $request->idDocType;
                    $relatedPartiesIndivisualRec->idDocNum  = $request->idDocNum;


                    $relatedPartiesIndivisualRec->idDocUploadedFront = $request->file('idDocUploadedFront')->store('public/images');
                    $relatedPartiesIndivisualRec->idDocUploadedBack = $request->file('idDocUploadedBack')->store('public/images');
                    $relatedPartiesIndivisualRec->save();

                    $indivisualPartnrId = $relatedPartiesIndivisualRec->id;
                    $indivisualPartnrType  = $relatedPartiesIndivisualRec->partnerType;
                    $indivisualPartnrfirstName = $relatedPartiesIndivisualRec->firstName;
                    $indivisualPartnrLastname = $relatedPartiesIndivisualRec->lastName;



                    return response()->json(['indivisualPartnrId'  => $indivisualPartnrId, 'indivisualPartnrType' => $indivisualPartnrType, 'indivisualPartnrfirstName' => $indivisualPartnrfirstName, 'indivisualPartnrLastname' => $indivisualPartnrLastname, 'message' => 'Indivisual partner added successfuly!']);
                }
            }
        } else {
            // dd($request->all());
            //  die;
            //$all = $request->all();
            // print_r($all);
            //  print_r($request->companyRegNum);
            // return response()->json($all);
            $validator = Validator::make($request->all(), [

                'companyName' => 'required|max:255|string',
                'companyRegNum' => 'required|max:199|string',
                'countryIncorp' => 'required',
                'countryResidence' => 'required',

                'firstName' => 'required|max:199|string',
                'lastName' => 'required|max:199|string',
                'dob' => 'required|date|before:today',
                'extrJurisCountry' => 'array|min:1',
                // 'countryResidence' => 'required',
                'Region_of_Issue' => 'required',
                'idDocType' => 'required',
                'idDocNum' => 'required|max:99|string',
                'idDocUploadedFront' => 'required',
                'idDocUploadedBack' => 'required',


            ]);


            if ($validator->fails()) {

                $message = $validator->messages();

                return response()->json(['error' => $validator->errors()], 401);
            } else {


                $relatedPartiesRec = new relatedParties;

                $findIfUser =  relatedParties::where(['companyRegNum' => $request->companyRegNum, 'user_id' => $request->user_id])->first();

                // print_r($findIfUser);


                if ($findIfUser) {

                    $existedcompanyID = $findIfUser->id;
                    // print_r($existedcompanyID);


                    // now inserting extra directors
                    //  $this->insertDirectors($existedcompanyID);
                    $relatedPartiesDirector = new relatedParties;

                    $relatedPartiesDirector->companyID = $existedcompanyID;
                    $relatedPartiesDirector->partnerId  = $request->partnerId;
                    $relatedPartiesDirector->partnerType  = $request->partnerType;
                    $relatedPartiesDirector->companyName  = $request->companyName;
                    $relatedPartiesDirector->companyRegNum  = $request->companyRegNum;
                    $relatedPartiesDirector->countryIncorp = $request->countryIncorp;
                    $relatedPartiesDirector->firstName  = $request->firstName;
                    $relatedPartiesDirector->MidName  = $request->MidName;
                    $relatedPartiesDirector->lastName = $request->lastName;
                    $relatedPartiesDirector->dob  = $request->dob;
                    $relatedPartiesDirector->jurisCountry  =  implode(',', $request->extrJurisCountry);
                    //   $relatedPartiesDirector->jurisCountry  =  $request->jurisCountry;
                    $relatedPartiesDirector->countryResidence = $request->countryResidence;
                    $relatedPartiesDirector->idDocIssuedCountry  = $request->Region_of_Issue;
                    $relatedPartiesDirector->idDocType  = $request->idDocType;
                    $relatedPartiesDirector->idDocNum  = $request->idDocNum;

                    $relatedPartiesDirector->idDocUploadedFront  = $request->file('idDocUploadedFront')->store('public/images');
                    $relatedPartiesDirector->idDocUploadedBack  = $request->file('idDocUploadedBack')->store('public/images');

                    $relatedPartiesDirector->user_id = $request->user_id;
                    $relatedPartiesDirector->status = $request->status;
                    $relatedPartiesDirector->save();

                    $directorid = $relatedPartiesDirector->id;
                    $directorFirstname = $relatedPartiesDirector->firstName;
                    $directorLastname = $relatedPartiesDirector->lastName;
                    $companyID = $relatedPartiesDirector->companyID;

                    //    to find company name
                    $findCompany =  relatedParties::where(['id' => $companyID, 'user_id' => $request->user_id])->first();

                    $compName = $findCompany->companyName;
                    $compPartnerType =  $findCompany->partnerType;

                    return response()->json(['compPartnerType' => $compPartnerType, 'compName' => $compName, 'companyID' => $companyID, 'directorId' => $directorid, 'directorFirstname' => $directorFirstname, 'directorLastname' => $directorLastname]);
                } else {

                    $relatedPartiesCompany = new relatedParties;

                    $relatedPartiesCompany->partnerId  = $request->partnerId;
                    $relatedPartiesCompany->partnerType  = $request->partnerType;
                    $relatedPartiesCompany->companyName  = $request->companyName;
                    $relatedPartiesCompany->companyRegNum  = $request->companyRegNum;
                    $relatedPartiesCompany->countryIncorp = $request->countryIncorp;
                    $relatedPartiesCompany->user_id = $request->user_id;
                    $relatedPartiesCompany->status = $request->status;
                    $relatedPartiesCompany->save();
                    $addedCompanyId = $relatedPartiesCompany->id;

                    // now inserting extra directors
                    // $this->insertDirectors($addedCompanyId);

                    $relatedPartiesDirector = new relatedParties;

                    $relatedPartiesDirector->companyID = $addedCompanyId;
                    $relatedPartiesDirector->partnerId  = $request->partnerId;
                    $relatedPartiesDirector->partnerType  = $request->partnerType;
                    $relatedPartiesDirector->companyName  = $request->companyName;
                    $relatedPartiesDirector->companyRegNum  = $request->companyRegNum;
                    $relatedPartiesDirector->countryIncorp = $request->countryIncorp;
                    $relatedPartiesDirector->firstName  = $request->firstName;
                    $relatedPartiesDirector->MidName  = $request->MidName;
                    $relatedPartiesDirector->lastName = $request->lastName;
                    $relatedPartiesDirector->dob  = $request->dob;
                    $relatedPartiesDirector->jurisCountry  = implode(',', $request->extrJurisCountry);
                    // $relatedPartiesDirector->jurisCountry  = $request->jurisCountry;
                    $relatedPartiesDirector->countryResidence = $request->countryResidence;
                    $relatedPartiesDirector->idDocIssuedCountry  = $request->Region_of_Issue;
                    $relatedPartiesDirector->idDocType  = $request->idDocType;
                    $relatedPartiesDirector->idDocNum  = $request->idDocNum;

                    $relatedPartiesDirector->idDocUploadedFront  = $request->file('idDocUploadedFront')->store('public/images');
                    $relatedPartiesDirector->idDocUploadedBack  = $request->file('idDocUploadedBack')->store('public/images');
                    $relatedPartiesDirector->user_id = $request->user_id;
                    $relatedPartiesDirector->status = $request->status;
                    $relatedPartiesDirector->save();

                    $directorid = $relatedPartiesDirector->id;
                    $directorFirstname = $relatedPartiesDirector->firstName;
                    $directorLastname = $relatedPartiesDirector->lastName;
                    $companyID = $relatedPartiesDirector->companyID;

                    //    to find company name
                    $findCompany =  relatedParties::where(['id' => $companyID, 'user_id' => $request->user_id])->first();

                    $compName = $findCompany->companyName;
                    $compPartnerType =  $findCompany->partnerType;

                    return response()->json(['compPartnerType' => $compPartnerType, 'compName' => $compName, 'companyID' => $companyID, 'directorId' => $directorid, 'directorFirstname' => $directorFirstname, 'directorLastname' => $directorLastname]);
                };
            }
        }
    }

    public function editGeneralPartner(Request $request)
    {
        // dd($request->all());


        if ($request->partnerType == 2) {
            // dd($request->partnerType);
            //   print_r($request->partnerType);

            $findpartnerComp = relatedParties::where(['id' => $request->id])->first();
            $findCompDirector = relatedParties::where(['companyID' => $request->id])->get();

            //     print_r($request->all());
            return view('entity/templates/editTemplateDirector',  compact('findpartnerComp', 'findCompDirector'));

            // return response()->json(['company' => $findpartnerComp , 'companyDirector' => $findCompDirector, 'Success' => '200']);

        }

        if ($request->partnerType == 1) {

            $findpartnerIndi = relatedParties::where(['id' => $request->id])->first();


            return view('entity/templates/editTemplateIndivisual',  compact('findpartnerIndi'));

            // return response()->json(['indivisualPartner' => $findpartnerIndi ,'Success' => '200']);

        }
    }

    public function editSingleDirector(Request $request)
    {
        // Validate input
        $request->validate([
            'id' => 'required|integer|exists:related_parties,id',
            'partnerType' => 'required|string',
        ]);

        // Find the director
        $findCompDirector = relatedParties::where([
            'id' => $request->id,
            'partnerType' => $request->partnerType
        ])->first();

        if (!$findCompDirector) {
            return response()->json([
                'success' => false,
                'message' => 'Director not found'
            ], 404);
        }

        // If you intend to return a view:
        return view('entity.templates.editTemplateSingleDir', compact('findCompDirector'));

        // OR, if you intend to return JSON instead of a view:
        // return response()->json([
        //     'success' => true,
        //     'director' => $findCompDirector
        // ], 200);
    }

    public function UpdateGeneralPartner(Request $request)
    {
        // dd($request);
        $validator =  Validator::make($request->all(), [

            'firstName' => 'max:255',
            'MidName' => 'max:255',
            'lastName' => 'max:255',


        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {


            if ($request->file('edit_idDocUploadedFront') == NULL || $request->file('edit_idDocUploadedBack') == NULL) {

                $updateindipartnr = relatedParties::where('id', $request->pdId)->update([
                    'partnerId' => $request->partnerId,
                    'partnerType' => $request->directoTypeIndi,
                    'firstName' => $request->firstName,
                    'MidName' => $request->MidName,
                    'lastName' => $request->lastName,
                    'dob' => $request->indidob,
                    'jurisCountry' => implode(',', $request->jurisCountry),
                    'countryResidence' => $request->countryResidence,
                    'idDocIssuedCountry' => $request->Region_of_Issue,
                    'idDocType' => $request->edit_idDocType,
                    'idDocNum' => $request->idDocNum,
                ]);
            } else {

                $updateindipartnr = relatedParties::where('id', $request->pdId)->update([
                    'partnerId' => $request->partnerId,
                    'partnerType' => $request->directoTypeIndi,
                    'firstName' => $request->firstName,
                    'MidName' => $request->MidName,
                    'lastName' => $request->lastName,
                    'dob' => $request->indidob,
                    'jurisCountry' => implode(',', $request->jurisCountry),
                    'countryResidence' => $request->countryResidence,
                    'idDocIssuedCountry' => $request->Region_of_Issue,
                    'idDocType' => $request->edit_idDocType,
                    'idDocNum' => $request->idDocNum,

                    'idDocUploadedFront'  =>   $request->file('edit_idDocUploadedFront')->store('public/images'),

                    'idDocUploadedBack' => $request->file('edit_idDocUploadedBack')->store('public/images'),

                ]);
            }

            if ($updateindipartnr == true) {

                $fullName = $request->firstName . " " . $request->lastName;

                return response()->json(['success' => 200, 'message' => 'details edited successfully', 'name' => $fullName]);
            } else {
                return response()->json(['error' => "401", $request->all()]);
            }
        }
    }

    public function UpdateSingleDirector(Request $request)
    {

        // dd($request);
        $validator =  Validator::make($request->all(), [

            'firstName' => 'max:255',
            'MidName' => 'max:255',
            'lastName' => 'max:255',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            if ($request->file('edit_idDocUploadedFront') == NULL || $request->file('edit_idDocUploadedBack') == NULL) {

                $updateSingleDir = relatedParties::where('id', $request->pdId)->update([
                    'partnerId' => $request->partnerId,
                    'partnerType' => $request->directoTypeIndi,
                    'firstName' => $request->firstName,
                    'MidName' => $request->MidName,
                    'lastName' => $request->lastName,
                    'dob' => $request->indidob,
                    'jurisCountry' => implode(',', $request->jurisCountry),
                    'countryResidence' => $request->countryResidence,
                    'idDocIssuedCountry' => $request->Region_of_Issue,
                    'idDocType' => $request->edit_idDocType,
                    'idDocNum' => $request->idDocNum,
                ]);
            } else {

                $updateSingleDir = relatedParties::where('id', $request->pdId)->update([
                    'partnerId' => $request->partnerId,
                    'partnerType' => $request->directoTypeIndi,
                    'firstName' => $request->firstName,
                    'MidName' => $request->MidName,
                    'lastName' => $request->lastName,
                    'dob' => $request->indidob,
                    'jurisCountry' => implode(',', $request->jurisCountry),
                    'countryResidence' => $request->countryResidence,
                    'idDocIssuedCountry' => $request->Region_of_Issue,
                    'idDocType' => $request->edit_idDocType,
                    'idDocNum' => $request->idDocNum,

                    'idDocUploadedFront'  =>   $request->file('edit_idDocUploadedFront')->store('public/images'),

                    'idDocUploadedBack' => $request->file('edit_idDocUploadedBack')->store('public/images'),

                ]);
            }

            if ($updateSingleDir == true) {

                $fullName = $request->firstName . " " . $request->lastName;

                return response()->json(['success' => 200, 'message' => 'details edited successfully', 'name' => $fullName]);
            } else {
                return response()->json(['error' => "401", $request->all()]);
            }
        }
    }

    public function deleteGeneralPartner(Request $request)
    {
        $findpartnerType = relatedParties::where(['id' => $request->toDeleteId])->first();

        // return $findpartnerType->partnerType;


        if ($findpartnerType->partnerType == 1) {

            $indiPartnrchange = relatedParties::where(['id' => $request->toDeleteId])->update(['status' => 0]);

            $indiPartnrTobeDeleted = relatedParties::where(['id' => $request->toDeleteId])->delete();

            if ($indiPartnrchange && $indiPartnrTobeDeleted) {
                return response()->json(['message' => 'Indivisual partner deleted successfuly!']);
            }
        } else {

            $updateCompanyTobeDeleted = relatedParties::find($request->toDeleteId)->update(['status' => 0]);

            $updateDirectorsOfsameCompany =  relatedParties::where(['companyID' => $request->toDeleteId])->update(['status' => 0]);


            if ($updateCompanyTobeDeleted && $updateDirectorsOfsameCompany) {
                $deletedRec = relatedParties::find($request->toDeleteId)->delete();
                $deleteDirectors =  relatedParties::where(['companyID' => $request->toDeleteId])->delete();

                // dd($request);
                if ($deletedRec && $deleteDirectors) {
                    return response()->json(['message' => 'Company deleted successfuly!']);
                }
            }
        }
    }

    public function deleteSingleDirector(Request $request)
    {
        //dd($request);
        $updatedirector = relatedParties::find($request->toDeleteId)->update(['status' => 0]);

        if ($updatedirector) {
            $deleteDirectors = relatedParties::find($request->toDeleteId)->delete();


            if ($deleteDirectors) {
                return response()->json(['message' => 'Director deleted successfuly!']);
            }
        }
    }

    public function UpdateCompany(Request $request)
    {
        // dd($request->all);

        $validator =  Validator::make($request->all(), [

            'edit_companyName' => 'required|max:3',
            'edit_companyRegNum' => 'required|max:5',
            'edit_countryIncorp' => 'required',


        ]);

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            $updateCompany = relatedParties::where('id', $request->edit_compID)->update([
                'companyName' => $request->edit_companyName,
                'companyRegNum' => $request->edit_companyRegNum,
                'countryIncorp' => $request->edit_countryIncorp,

            ]);
            $updateDiretorsCompany = relatedParties::where('companyID', $request->edit_compID)->update([
                'companyName' => $request->edit_companyName,
                'companyRegNum' => $request->edit_companyRegNum,
                'countryIncorp' => $request->edit_countryIncorp,

            ]);


            if ($updateCompany == true && $updateDiretorsCompany == true) {

                $fullName = $request->edit_companyName;

                return response()->json(['success' => 200, 'message' => 'details edited successfully', 'companyName' => $fullName]);
            } else {
                return response()->json(['error' => "401", $request->all()]);
            }
        }
    }



    //end general partner

    //Ultimate beneficial owner section
    public function addBeneficialOwner(Request $request)
    {

        $validator =  Validator::make($request->all(), [


            'owner_fname' => 'required|max:255|string',
            'owner_lastName' => 'required|max:199|string',
            'owner_dob' => 'required|date|before:today',
            'owner_Jurisdiction_country' => 'array|min:1',
            'owner_residence_country' => 'required',
            'owner_docIssueRegion' => 'required',
            'owner_idDocType' => 'required',
            'owner_IdNum' => 'required|max:99|string',
            'ownerId_frontCopy' => 'required',
            'ownerId_BackCopy' => 'required',
            'owner_addressproof' => 'required',
            'ownerDoc_type' => 'required',
            'addProofIssuedate' => 'required',
            'owner_addProof_country' => 'required',
            'owner_addressproof_state' => 'required|max:199|string',
            'owner_addressproof_city' => 'required|max:199|string',
            'owner_addressproof_zipcode' => 'required|numeric',
            'owner_addressproof_Street' => 'required|max:199|string',


        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            // dd($request);

            $findIfUser =  relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->partnerId,  'dob' =>  $request->DOB, 'firstName' =>  $request->owner_fname, 'lastName' =>  $request->owner_lastName, 'idDocNum' =>  $request->owner_IdNum])->first();

            if ($findIfUser) {
                // $existedIndivisualID = $findIfUser->id;

                return response()->json(['message' => 'Duplicate record found!']);
            } else {

                $BeneficialOwner = new relatedParties;


                $BeneficialOwner->user_id = $request->user_id;
                $BeneficialOwner->status = $request->status;
                $BeneficialOwner->partnerId  = $request->partnerId;


                $BeneficialOwner->firstName  = $request->owner_fname;
                $BeneficialOwner->MidName  = $request->owner_midName;
                $BeneficialOwner->lastName = $request->owner_lastName;
                $BeneficialOwner->dob  = $request->owner_dob;


                $BeneficialOwner->jurisCountry  =  implode(',', $request->owner_Jurisdiction_country);
                $BeneficialOwner->countryResidence = $request->owner_residence_country;
                $BeneficialOwner->idDocIssuedCountry  = $request->owner_docIssueRegion;

                $BeneficialOwner->idDocType  = $request->owner_idDocType;
                $BeneficialOwner->idDocNum  = $request->owner_IdNum;


                $BeneficialOwner->idDocUploadedFront = $request->file('ownerId_frontCopy')->store('public/images');
                $BeneficialOwner->idDocUploadedBack = $request->file('ownerId_BackCopy')->store('public/images');
                $BeneficialOwner->addDocAttachFront = $request->file('owner_addressproof')->store('public/images');

                $BeneficialOwner->addressProofType = $request->ownerDoc_type;
                $BeneficialOwner->addDocIssuedDate  = $request->addProofIssuedate;

                $BeneficialOwner->addDocCountry  = $request->owner_addProof_country;
                $BeneficialOwner->addDocState  = $request->owner_addressproof_state;
                $BeneficialOwner->addDocCity = $request->owner_addressproof_city;
                $BeneficialOwner->addDocStreet  = $request->owner_addressproof_Street;
                $BeneficialOwner->addDocZip  = $request->owner_addressproof_zipcode;


                $BeneficialOwner->save();

                if ($BeneficialOwner == true) {

                    $ownerId = $BeneficialOwner->id;
                    $ownerpartnerId  = $BeneficialOwner->partnerId;
                    $ownerfirstName = $BeneficialOwner->firstName;
                    $ownerLastname = $BeneficialOwner->lastName;
                }

                return response()->json(['ownerId'  => $ownerId, 'ownerpartnerId' => $ownerpartnerId, 'ownerfirstName' => $ownerfirstName, 'ownerLastname' => $ownerLastname, 'message' => 'Beneficial Owner added successfuly!']);
            }
        }
    }

    public function editBeneficialOwner(Request $request)
    {
        // Validate input
        $request->validate([
            'id' => 'required|integer|exists:related_parties,id',
            'partnerId' => 'required|integer',
        ]);

        // Find the beneficial owner
        $findBeneficialOwner = relatedParties::where([
            'id' => $request->id,
            'partnerId' => $request->partnerId
        ])->first();

        if (!$findBeneficialOwner) {
            return response()->json([
                'success' => false,
                'message' => 'Beneficial owner not found'
            ], 404);
        }

        // Return a view
        return view('entity.templates.editBeneficialOwner', compact('findBeneficialOwner'));

        // OR, if you want JSON for API/AJAX:
        // return response()->json([
        //     'success' => true,
        //     'beneficialOwner' => $findBeneficialOwner
        // ], 200);
    }


    public function updateBeneficialOwner(Request $request)
    {
        //  dd($request->all());

        $validator =  Validator::make($request->all(), [

            'owner_fname'  => 'required|max:199|string',
            'owner_lastName'  => 'required|max:199|string',
            'owner_dob'  => 'required|date|before:today',
            'edit_owner_Jurisdiction_country' => 'required',
            'edit_owner_residence_country'  => 'required',
            'edit_owner_docIssueRegion'  => 'required',
            'owner_idDocType'  => 'required',
            'owner_IdNum' => 'required|max:99|string',
            'ownerDoc_type'  => 'required',
            'addProofIssuedate' =>  'required',
            'owner_addProof_country'  => 'required',
            'owner_addressproof_state' => 'required|max:199|string',
            'owner_addressproof_city'  => 'required|max:199|string',
            'owner_addressproof_zipcode'  => 'required|numeric',
            'owner_addressproof_Street'  => 'required|max:199|string',

        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            // dd($request->all());

            if ($request->file('ownerId_frontCopy')) {

                $updateownerFrontId = relatedParties::where('id', $request->user_id)->update([
                    'idDocUploadedFront'  =>   $request->file('ownerId_frontCopy')->store('public/images'),
                ]);
            }

            if ($request->file('ownerId_BackCopy')) {

                $updateownerBackId = relatedParties::where('id', $request->user_id)->update([
                    'idDocUploadedBack'  =>   $request->file('ownerId_BackCopy')->store('public/images'),
                ]);
            }
            if ($request->file('owner_addressproof')) {

                $updateownerAddressproof = relatedParties::where('id', $request->user_id)->update([
                    'addDocAttachFront'  =>   $request->file('owner_addressproof')->store('public/images'),
                ]);
            }
            $updateBeneficialOwnerDetail = relatedParties::where('id', $request->user_id)->update([

                'firstName' => $request->owner_fname,
                'MidName' => $request->owner_midName,
                'lastName' => $request->owner_lastName,
                'dob' => $request->owner_dob,
                'jurisCountry' => implode(',', $request->edit_owner_Jurisdiction_country),
                'countryResidence' => $request->edit_owner_residence_country,
                'idDocIssuedCountry' => $request->edit_owner_docIssueRegion,
                'idDocType' => $request->owner_idDocType,
                'idDocNum' => $request->owner_IdNum,

                'addressProofType' => $request->ownerDoc_type,

                'addDocIssuedDate' => $request->addProofIssuedate,

                'addDocCountry' => $request->owner_addProof_country,
                'addDocState' => $request->owner_addressproof_state,
                'addDocCity' =>  $request->owner_addressproof_city,
                'addDocZip' => $request->owner_addressproof_zipcode,
                'addDocStreet' => $request->owner_addressproof_Street,

            ]);

            if ($updateBeneficialOwnerDetail == true || $updateownerFrontId == true || $updateownerBackId == true || $updateownerAddressproof == true) {

                $fullName = $request->owner_fname . " " . $request->owner_lastName;

                return response()->json(['success' => 200, 'message' => 'details edited successfully', 'name' => $fullName]);
            } else {
                return response()->json(['error' => "401", $request->all()]);
            }
        }
    }

    public function deleteBeneficialOwner(Request $request)
    {
        //  dd($request->all());
        $updateOwnerstatusTobeDeleted = relatedParties::find($request->toDeleteId)->update(['status' => 0]);

        if ($updateOwnerstatusTobeDeleted) {
            $deleteOwner = relatedParties::find($request->toDeleteId)->delete();


            if ($deleteOwner) {
                return response()->json(['message' => 'Beneficial owner deleted successfuly!']);
            }
        }
    }


    //end Ultimate beneficial owner section



    //Significant Controller
    public function addSignificantController(Request $request)
    {
        //    dd($request->all());

        $validator =  Validator::make($request->all(), [

            'significant_fname' => 'required|max:199|string',
            'significant_lastName' => 'required|max:199|string',
            'significant_dob' => 'required|date|before:today',
            'significant_Jurisdiction_country' => 'required',
            'significant_residence_country' => 'required',
            'significant_docIssueRegion' => 'required',
            'significant_idDocType' => 'required',
            'significant_IdNum' => 'required|max:199|string',
            'significantId_frontCopy' => 'required',
            'significantId_BackCopy' => 'required',
            'significant_addressproof' => 'required',
            'significantDoc_type' => 'required',
            'significant_addProofIssuedate' => 'required',
            'significant_addProof_country' => 'required',
            'significant_addressproof_state' => 'required|max:199|string',
            'significant_addressproof_city' => 'required|max:199|string',
            'significant_addressproof_zipcode' => 'required|numeric',
            'significant_addressproof_Street' => 'required|max:199|string',

            // 'DOB' => 'required',
            // 'addProofIssuedate' => 'required',
            // 'selectedidDocType' => 'required',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            // dd($request);

            $findIfUser =  relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->partnerId,  'dob' =>  $request->significant_dob, 'firstName' =>  $request->significant_fname, 'lastName' =>  $request->significant_lastName, 'idDocNum' =>  $request->significant_IdNum])->first();

            if ($findIfUser) {
                // $existedIndivisualID = $findIfUser->id;

                return response()->json(['message' => 'Duplicate record found!']);
            } else {

                $significantController = new relatedParties;


                $significantController->user_id = $request->user_id;
                $significantController->status = $request->status;
                $significantController->partnerId  = $request->partnerId;


                $significantController->firstName  = $request->significant_fname;
                $significantController->MidName  = $request->significant_midName;
                $significantController->lastName = $request->significant_lastName;
                $significantController->dob  = $request->significant_dob;


                $significantController->jurisCountry  =  implode(',', $request->significant_Jurisdiction_country);
                $significantController->countryResidence = $request->significant_residence_country;
                $significantController->idDocIssuedCountry  = $request->significant_docIssueRegion;

                $significantController->idDocType  = $request->significant_idDocType;
                $significantController->idDocNum  = $request->significant_IdNum;


                $significantController->idDocUploadedFront = $request->file('significantId_frontCopy')->store('public/images');
                $significantController->idDocUploadedBack = $request->file('significantId_BackCopy')->store('public/images');
                $significantController->addDocAttachFront = $request->file('significant_addressproof')->store('public/images');

                $significantController->addressProofType = $request->significantDoc_type;
                $significantController->addDocIssuedDate  = $request->significant_addProofIssuedate;

                $significantController->addDocCountry  = $request->significant_addProof_country;
                $significantController->addDocState  = $request->significant_addressproof_state;
                $significantController->addDocCity = $request->significant_addressproof_city;
                $significantController->addDocStreet  = $request->significant_addressproof_Street;
                $significantController->addDocZip  = $request->significant_addressproof_zipcode;


                $significantController->save();

                if ($significantController == true) {

                    $significantId = $significantController->id;
                    $significantpartnerId  = $significantController->partnerId;
                    $significantfirstName = $significantController->firstName;
                    $significantLastname = $significantController->lastName;
                }

                return response()->json(['significantId'  => $significantId, 'significantpartnerId' => $significantpartnerId, 'significantfirstName' => $significantfirstName, 'significantLastname' => $significantLastname, 'message' => 'Significant Controller added successfuly!']);
            }
        }
    }


    public function editSignificantController(Request $request)
    {
        // Validate input
        $request->validate([
            'id' => 'required|integer|exists:related_parties,id',
            'partnerId' => 'required|integer',
        ]);

        // Find the significant controller
        $findSignificantController = relatedParties::where([
            'id' => $request->id,
            'partnerId' => $request->partnerId
        ])->first();

        if (!$findSignificantController) {
            return response()->json([
                'success' => false,
                'message' => 'Significant controller not found'
            ], 404);
        }

        // Return a view
        return view('entity.templates.editSignificantController', compact('findSignificantController'));

        // If you want JSON for AJAX/API requests, you can use this instead:
        // return response()->json([
        //     'success' => true,
        //     'controller' => $findSignificantController
        // ], 200);
    }
    public function UpdateSignificantController(Request $request)
    {
        // dd($request->all());
        //  dd($request->all());

        $validator =  Validator::make($request->all(), [


            'significant_fname' => 'required|max:5|string',
            'significant_lastName' => 'required|max:5|string',
            'significant_dob' => 'required|date|before:today',
            'edit_significant_Jurisdiction_country' => 'required',
            'edit_significant_residence_country' =>  'required',
            'edit_significant_docIssueRegion' => 'required',
            'significant_idDocType' => 'required',
            'significant_IdNum' =>  'required|max:199|string',
            'significantDoc_type' => 'required',
            'significantaddProofIssuedate' => 'required',
            'significant_addProof_country' => 'required',
            'significant_addressproof_state' => 'required|max:199|string',
            'significant_addressproof_city' => 'required|max:199|string',
            'significant_addressproof_zipcode' => 'required|numeric',
            'significant_addressproof_Street' => 'required|max:199|string',



        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            // dd($request->all());

            if ($request->file('significantId_frontCopy')) {

                $updatesignificantFrontId = relatedParties::where('id', $request->user_id)->update([
                    'idDocUploadedFront'  =>   $request->file('significantId_frontCopy')->store('public/images'),
                ]);
            }

            if ($request->file('significantId_BackCopy')) {

                $updatesignificantBackId = relatedParties::where('id', $request->user_id)->update([
                    'idDocUploadedBack'  =>   $request->file('significantId_BackCopy')->store('public/images'),
                ]);
            }
            if ($request->file('significant_addressproof')) {

                $updatesignificantAddressproof = relatedParties::where('id', $request->user_id)->update([
                    'addDocAttachFront'  =>   $request->file('significant_addressproof')->store('public/images'),
                ]);
            }


            $updateSignificantController = relatedParties::where('id', $request->user_id)->update([

                'firstName' => $request->significant_fname,
                'MidName' => $request->significant_midName,
                'lastName' => $request->significant_lastName,
                'dob' => $request->significant_dob,
                'jurisCountry' => implode(',', $request->edit_significant_Jurisdiction_country),
                'countryResidence' => $request->edit_significant_residence_country,
                'idDocIssuedCountry' => $request->edit_significant_docIssueRegion,
                'idDocType' => $request->significant_idDocType,
                'idDocNum' => $request->significant_IdNum,

                'addressProofType' => $request->significantDoc_type,

                'addDocIssuedDate' => $request->significantaddProofIssuedate,

                'addDocCountry' => $request->significant_addProof_country,
                'addDocState' => $request->significant_addressproof_state,
                'addDocCity' =>  $request->significant_addressproof_city,
                'addDocZip' => $request->significant_addressproof_zipcode,
                'addDocStreet' => $request->significant_addressproof_Street,

            ]);


            if ($updateSignificantController == true || $updatesignificantFrontId == true || $updatesignificantBackId == true || $updatesignificantAddressproof == true) {

                $fullName = $request->significant_fname . " " . $request->significant_lastName;

                return response()->json(['success' => 200, 'message' => 'Significant Controller details edited successfully', 'name' => $fullName]);
            } else {
                return response()->json(['error' => "401", $request->all()]);
            }
        }
    }

    public function deleteSignificantController(Request $request)
    {
        //  dd($request->all());

        $updateSignificantstatusTobeDeleted = relatedParties::find($request->toDeleteId)->update(['status' => 0]);

        if ($updateSignificantstatusTobeDeleted) {
            $deleteSignificant = relatedParties::find($request->toDeleteId)->delete();


            if ($deleteSignificant) {
                return response()->json(['message' => 'Significant Controller deleted successfuly!']);
            }
        }
    }
    //end  Significant Controller



    //Authorised Account Trader
    public function addAuthorisedAccountTrader(Request $request)
    {
        //    dd($request->all());

        $validator =  Validator::make($request->all(), [

            'accountTrader_fname' => 'required|max:199|string',
            'accountTrader_lastName' => 'required|max:199|string',
            'accountTrader_dob' => 'required|date|before:today',
            'accountTrader_Jurisdiction_country' => 'required',
            'accountTrader_residence_country' => 'required',
            'accountTrader_docIssueRegion' => 'required',
            'accountTrader_idDocType' => 'required',
            'accountTrader_IdNum' => 'required|max:199|string',
            'accountTraderDoc_type' => 'required',
            'accountTrader_addProofIssuedate' => 'required',
            'accountTrader_addProof_country' => 'required',
            'accountTrader_addressproof_state' => 'required|max:199|string',
            'accountTrader_addressproof_city' => 'required|max:199|string',
            'accountTrader_addressproof_zipcode' => 'required|numeric',
            'accountTrader_addressproof_Street' => 'required|max:199|string',
            'addProofIssuedate' => 'required',
            'selectedidDocType' => 'required',
            'accountTraderId_frontCopy' => 'required',
            'accountTraderId_BackCopy' => 'required',
            'accountTrader_addressproof' => 'required',


        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            // dd($request->all());

            $findIfUser =  relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->partnerId,  'dob' =>  $request->accountTrader_dob, 'firstName' =>  $request->accountTrader_fname, 'lastName' =>  $request->accountTrader_lastName, 'idDocNum' =>  $request->accountTrader_IdNum])->first();

            if ($findIfUser) {
                // $existedIndivisualID = $findIfUser->id;

                return response()->json(['message' => 'Duplicate record found!']);
            } else {

                $accountTrader = new relatedParties;


                $accountTrader->user_id = $request->user_id;
                $accountTrader->status = $request->status;
                $accountTrader->partnerId  = $request->partnerId;


                $accountTrader->firstName  = $request->accountTrader_fname;
                $accountTrader->MidName  = $request->accountTrader_midName;
                $accountTrader->lastName = $request->accountTrader_lastName;
                $accountTrader->dob  = $request->accountTrader_dob;


                $accountTrader->jurisCountry  =  implode(',', $request->accountTrader_Jurisdiction_country);
                $accountTrader->countryResidence = $request->accountTrader_residence_country;
                $accountTrader->idDocIssuedCountry  = $request->accountTrader_docIssueRegion;

                $accountTrader->idDocType  = $request->accountTrader_idDocType;
                $accountTrader->idDocNum  = $request->accountTrader_IdNum;


                $accountTrader->idDocUploadedFront = $request->file('accountTraderId_frontCopy')->store('public/images');
                $accountTrader->idDocUploadedBack = $request->file('accountTraderId_BackCopy')->store('public/images');
                $accountTrader->addDocAttachFront = $request->file('accountTrader_addressproof')->store('public/images');

                $accountTrader->addressProofType = $request->accountTraderDoc_type;
                $accountTrader->addDocIssuedDate  = $request->addProofIssuedate;

                $accountTrader->addDocCountry  = $request->accountTrader_addProof_country;
                $accountTrader->addDocState  = $request->accountTrader_addressproof_state;
                $accountTrader->addDocCity = $request->accountTrader_addressproof_city;
                $accountTrader->addDocStreet  = $request->accountTrader_addressproof_Street;
                $accountTrader->addDocZip  = $request->accountTrader_addressproof_zipcode;


                $accountTrader->save();

                if ($accountTrader == true) {

                    $accountTraderId = $accountTrader->id;
                    $accountTraderpartnerId  = $accountTrader->partnerId;
                    $accountTraderfirstName = $accountTrader->firstName;
                    $accountTraderLastname = $accountTrader->lastName;
                }

                return response()->json(['accountTraderId'  => $accountTraderId, 'accountTraderpartnerId' => $accountTraderpartnerId, 'accountTraderfirstName' => $accountTraderfirstName, 'accountTraderLastname' => $accountTraderLastname, 'message' => 'Authorised account Trader added successfuly!']);
            }
        }
    }

    public function editAuthorisedAccountTrader(Request $request)
    {
        // dd($request->all());

        $findAccountTrader = relatedParties::where(['id' => $request->id, 'partnerId' => $request->partnerId])->first();

        //     print_r($request->all());
        return view('entity/templates/editAccountTrader',  compact('findAccountTrader'));

        return response()->json([$findAccountTrader, 'Success' => '200']);
    }

    public function UpdateAuthorisedAccountTrader(Request $request)
    {
        // dd($request->all());
        //  dd($request->all());

        $validator =  Validator::make($request->all(), [

            'accountTrader_fname' => 'required|max:199|string',
            'accountTrader_midName' => 'max:199|string',
            'accountTrader_lastName' => 'required|max:199|string',
            'accountTrader_dob'  => 'required|date|before:today',
            'edit_accountTrader_Jurisdiction_country'  => 'required',
            'edit_accountTrader_residence_country'  => 'required',
            'edit_accountTrader_docIssueRegion'  => 'required',
            'accountTrader_idDocType'  => 'required',
            'accountTrader_IdNum'  => 'required',
            'accountTraderDoc_type'  => 'required',
            'accountTraderaddProofIssuedate'  => 'required',
            'accountTrader_addProof_country'  => 'required',
            'accountTrader_addressproof_state'  => 'required|max:199|string',
            'accountTrader_addressproof_city'  => 'required|max:199|string',
            'accountTrader_addressproof_zipcode'  => 'required|numeric',
            'accountTrader_addressproof_Street'  => 'required|max:199|string',


        ]);

        // dd($request->all());

        if ($validator->fails()) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            // dd($request->all());

            if ($request->file('accountTraderId_frontCopy')) {

                $updateaccountTraderFrontId = relatedParties::where('id', $request->user_id)->update([
                    'idDocUploadedFront'  =>   $request->file('accountTraderId_frontCopy')->store('public/images'),
                ]);
            }

            if ($request->file('accountTraderId_BackCopy')) {

                $updateaccountTraderBackId = relatedParties::where('id', $request->user_id)->update([
                    'idDocUploadedBack'  =>   $request->file('accountTraderId_BackCopy')->store('public/images'),
                ]);
            }
            if ($request->file('accountTrader_addressproof')) {

                $updateaccountTraderAddressproof = relatedParties::where('id', $request->user_id)->update([
                    'addDocAttachFront'  =>   $request->file('accountTrader_addressproof')->store('public/images'),
                ]);
            }


            $updateAccountTrader = relatedParties::where('id', $request->user_id)->update([

                'firstName' => $request->accountTrader_fname,
                'MidName' => $request->accountTrader_midName,
                'lastName' => $request->accountTrader_lastName,
                'dob' => $request->accountTrader_dob,
                'jurisCountry' => implode(',', $request->edit_accountTrader_Jurisdiction_country),
                'countryResidence' => $request->edit_accountTrader_residence_country,
                'idDocIssuedCountry' => $request->edit_accountTrader_docIssueRegion,
                'idDocType' => $request->accountTrader_idDocType,
                'idDocNum' => $request->accountTrader_IdNum,

                'addressProofType' => $request->accountTraderDoc_type,

                'addDocIssuedDate' => $request->accountTraderaddProofIssuedate,

                'addDocCountry' => $request->accountTrader_addProof_country,
                'addDocState' => $request->accountTrader_addressproof_state,
                'addDocCity' =>  $request->accountTrader_addressproof_city,
                'addDocZip' => $request->accountTrader_addressproof_zipcode,
                'addDocStreet' => $request->accountTrader_addressproof_Street,

            ]);


            if ($updateAccountTrader == true || $updateaccountTraderFrontId == true || $updateaccountTraderBackId == true || $updateaccountTraderAddressproof == true) {

                $fullName = $request->accountTrader_fname . " " . $request->accountTrader_lastName;

                return response()->json(['success' => 200, 'message' => 'Account Trader details edited successfully', 'name' => $fullName]);
            } else {
                return response()->json(['error' => "401", $request->all()]);
            }
        }
    }

    public function deleteAuthorisedAccountTrader(Request $request)
    {
        //  dd($request->all());

        $updateAccountTraderstatusTobeDeleted = relatedParties::find($request->toDeleteId)->update(['status' => 0]);

        if ($updateAccountTraderstatusTobeDeleted) {
            $deleteAccountTrader = relatedParties::find($request->toDeleteId)->delete();


            if ($deleteAccountTrader) {
                return response()->json(['message' => 'Account Trader deleted successfuly!']);
            }
        }
    }
    //end  Authorised Account Trader

    //count Completed Sections
    public function countCompletedSections(Request $request)
    {
        //dd($request->all());

        $basicCompletionChk =  Entities::where('user_id', $request->user_id)
            ->whereNotNull('entity_name')
            ->whereNotNull('reg_num')
            ->whereNotNull('DOB_incorpor')
            ->whereNotNull('regstrd_cntry')
            ->whereNotNull('juris_cntry')
            ->whereNotNull('city')
            ->whereNotNull('street_add')
            ->whereNotNull('postal_code')
            ->whereNotNull('fund_source')
            ->whereNotNull('cap_source')
            ->whereNotNull('wealth_source')
            ->whereNotNull('entity_nature')
            ->whereNotNull('appli_purpose')
            ->whereNotNull('web_address')
            ->whereNotNull('additional_mob')
            ->where('status', '=', 1)->count();

        $businessDocCountChk =  businessDocs::where('user_id', $request->user_id)
            ->whereNotNull('incorp_cert')
            ->whereNotNull('partnership_agrnmt')
            ->whereNotNull('regsterOf_partner')
            ->whereNotNull('curnt_oprtiv_status')
            ->whereNotNull('aml_questionnaire')
            ->whereNotNull('operating_license')
            ->whereNotNull('outsour_serv_agrmnt')
            ->whereNotNull('Intermedianes')
            ->whereNotNull('add_proof')
            ->whereNotNull('managementAgreement')
            ->whereNotNull('InvestmentManager')
            ->whereNotNull('investorsList')
            ->whereNotNull('offeringDoc')
            ->whereNotNull('supmentry')
            ->whereIn('status', [3, 1])->count();

        $relatedPartiesCountChk =  relatedParties::where('user_id', $request->user_id)->whereIn('status', [3, 1])->distinct('partnerId')->count();
        $fietCountChk =  Entities::where('user_id', $request->user_id)->whereNotNull('fiat_dpstWithdwl')->whereNotNull('fiat_currencies')->whereIn('status', [3, 1])->count();

        //  return response()->json(['rec' => $relatedPartiesChk]);



        if (!empty($basicCompletionChk) || !empty($businessDocCountChk) || !empty($relatedPartiesCountChk) || !empty($fietCountChk)) {
            if ($relatedPartiesCountChk >= 5 &&  $relatedPartiesCountChk < 6) {
                $relatedPartiesCountChk = 1;
            } else {
                $relatedPartiesCountChk = 0;
            }

            $completion = $basicCompletionChk + $relatedPartiesCountChk + $fietCountChk + $businessDocCountChk;

            return response()->json(['completion' => $completion, 'basicCompletionChk' => $basicCompletionChk, 'relatedPartiesCountChk' => $relatedPartiesCountChk, 'businessDocCountChk' => $businessDocCountChk, 'fietCountChk' => $fietCountChk]);
        } else {

            $completion = 0;
            return $completion;
        }
    }


    //Main Trader Verification
    public function addMainTraderVerification(Request $request)
    {
        dd($request->all());
    }

    public function UpdateMainTraderVerification(Request $request)
    {
        dd($request->all());
    }

    public function deleteMainTraderVerification(Request $request)
    {
        //dd($request->all());
        dd(implode(',', $request->uploadedAuthLetters));
    }
    //end  Main Trader Verification



    //Upload Letter of Authorization
    public function uploadAuthorizationLetter(Request $request)
    {

        // dd($request->all());


        $validator = Validator::make($request->all(), [
            'uploadedAuthLetters' => 'required',
            'uploadedAuthLetters.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {

            $message = $validator->messages();
            return response()->json(['error' => $validator->errors()], 401);
        } else {

            //     $insertAuthLetter->uploadedAuthLetters = $request->file('uploadedAuthLetters')->store('public/images');

            $findIfLetterExist = relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->authletterPartnerId])->whereIn('status', [3, 1])->count();

            $insertAuthLetter = new relatedParties;

            if ($findIfLetterExist < 1) {

                $insertAuthLetter->user_id = $request->user_id;
                $insertAuthLetter->status = $request->authletterStatus;
                $insertAuthLetter->partnerId  = $request->authletterPartnerId;

                foreach ($request->uploadedAuthLetters as $key => $val) {
                    $insertAuthLetter->authLetter =   $val->store('public/authLetters');
                    $authLettersImgNames[] = $val->store('public/authLetters');
                }

                $insertAuthLetter->authLetter =   implode(',', $authLettersImgNames);
                $insertAuthLetter->save();

                if ($insertAuthLetter == true) {
                    return response()->json(['uplodedAuthLetters' => $insertAuthLetter->authLetter, 'message' => 'Auth letters uploaded successfully'], 200);
                }
            } else {

                $insertAuthLetter->user_id = $request->user_id;
                $insertAuthLetter->status = $request->authletterStatus;
                $insertAuthLetter->partnerId  = $request->authletterPartnerId;
                $oldLetters  =  relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->authletterPartnerId])->whereIn('status', [3, 1])->get('authLetter');

                foreach ($request->uploadedAuthLetters as $key => $val) {
                    $updateAuthLetter = relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->authletterPartnerId,])->update(['authLetter'  =>   $val->store('public/images')]);
                    $authLettersImgNames[] = $val->store('public/authLetters');
                }

                $insertAuthLetter->authLetter =   implode(',', $authLettersImgNames);
                $updateAuthLetter = relatedParties::where(['user_id' => $request->user_id, 'partnerId' => $request->authletterPartnerId,])->update(['authLetter'  =>   $insertAuthLetter->authLetter]);


                if ($updateAuthLetter == true) {

                    // to delete old file
                    foreach ($oldLetters as  $val) {
                        $imgs =  explode(',', $val->authLetter);

                        foreach ($imgs as  $img) {
                            unlink(storage_path('app/' . $img));
                        }
                    }
                    // end to delete old file

                    return response()->json(['uplodedAuthLetters' => $insertAuthLetter->authLetter, 'message' => 'Auth letters updated successfully'], 200);
                }
            }
        }
    }

    public function UpdateAuthorizationLetter(Request $request)
    {
        dd($request->all());
    }

    public function deleteAuthorizationLetter(Request $request)
    {
        dd($request->all());
    }
    //end  Upload Letter of Authorization


    // prepare all checklist

    public function prepareChecklist(Request $request)
    {

        $findIfUser = BusinessDocs::where('user_id', $request->user_id)->first();

        if ($findIfUser) {
            //  dd($findIfUser);
            $checklistUpdated = BusinessDocs::where('user_id', $request->user_id)->update(['checklist' => $request->checklist]);
        } else {
            $inputs = $request->All();
            $allInputs = BusinessDocs::create($inputs);
            // dd($allInputs);
            return response()->json($allInputs);
            //  print_r(' upload business documents');
            // return view('api/load-businesses-doc'));
        }
    }



    // Upload all business documents

    // public function uploadBusinessDocs(Request $request) {       dd($request);  $checklistUpdated = BusinessDocs::where('user_id', $request->user_id)->update( [ 'checklist' => $request->checklist]); }

    public function uploadBusinessDocs(Request $request)
    {
        if ((($request->operating_license) && $request->operating_license == 'no')
            || (($request->outsour_serv_agrmnt) && $request->outsour_serv_agrmnt == 'no')
            || (($request->Intermedianes) && $request->Intermedianes == 'no')
        ) {

            if ($request->operating_license == 'no') {
                $ifdoc = $request->operating_license;
            }

            if ($request->outsour_serv_agrmnt == 'no') {
                $ifdoc = $request->outsour_serv_agrmnt;
            }

            if ($request->Intermedianes == 'no') {
                $ifdoc = $request->Intermedianes;
            }

            $ifUserExist = businessDocs::where(['user_id' => $request->user_id])->count();

            if ($ifUserExist < 1) {

                $insertbusinessDocs = new businessDocs;
                $insertbusinessDocs->user_id = $request->user_id;
                $insertbusinessDocs[$request->user_doctype] =  $ifdoc;
                $insertbusinessDocs->save();
                return response()->json(['uplodeddocs' => 'no', 'message' => 'Updated successfully'], 200);
            } else {
                $IfdocIsnotNull = businessDocs::where(['user_id' => $request->user_id])->whereNotNull($request->user_doctype)->whereIn('status', [3, 1])->count();

                // dd($IfdocIsnotNull);
                if ($IfdocIsnotNull > 0)  // Here user exist but perticilar doc is 'no' OR 'is has image string'
                {
                    $IfdocRow = businessDocs::where(['user_id' => $request->user_id])->whereIn('status', [3, 1])->get($request->user_doctype)->first();
                    // dd($IfdocRow[$request->user_doctype]);

                    if ($IfdocRow[$request->user_doctype] == 'no') {
                        $updateDocs = businessDocs::where(['user_id' => $request->user_id])->update([$request->user_doctype  =>   'no']);
                    } else {

                        $oldDocs  =  businessDocs::where(['user_id' => $request->user_id])->whereIn('status', [3, 1])->get($request->user_doctype);

                        $updateDocs = businessDocs::where(['user_id' => $request->user_id])->update([$request->user_doctype  =>   'no']);


                        // dd($oldDocs);
                        if ($updateDocs == true) {
                            foreach ($oldDocs as  $val) {
                                // dd($val[$request->user_doctype]);

                                $imgs =  explode(',', $val[$request->user_doctype]);

                                foreach ($imgs as  $img) {
                                    unlink(storage_path('app/' . $img));
                                }
                            }
                        }
                    }
                } else {     // Here user exist but perticilar doc field is 'NULL'

                    $updateDocs = businessDocs::where(['user_id' => $request->user_id])->update([$request->user_doctype  =>   'no']);
                }
                return response()->json(['uplodeddocs' => 'no', 'message' => 'Updated successfully'], 200);
            }
        } {
            //  dd('yes', $request->all());
            $validator = Validator::make($request->all(), [
                'allImgsOf' => 'required',
                //    'allImgsOf.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'uploaddedFile' => 'required',
                'uploaddedFile.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                $message = $validator->messages();
                return response()->json(['error' => $validator->errors()], 401);
            } else {

                $ifUserExist = businessDocs::where(['user_id' => $request->user_id])->count();
                // dd($ifUserExist);
                if ($ifUserExist < 1) {
                    // if user does not exist
                    $insertbusinessDocs = new businessDocs;

                    $insertbusinessDocs->user_id = $request->user_id;

                    foreach ($request->uploaddedFile as $key => $val) {

                        foreach ($request->allImgsOf as $restfile) {
                            if ($val->getClientOriginalName() == $restfile) {

                                $insertbusinessDocs[$request->user_doctype] =   $val->store('public/uploadedBusinesIMgs');
                                $docsNames[] = $val->store('public/uploadedBusinesIMgs');
                            }
                        }
                    }
                    $insertbusinessDocs[$request->user_doctype] =   implode(',', $docsNames);
                    $insertbusinessDocs->save();
                    if ($insertbusinessDocs == true) {
                        return response()->json(['uplodeddocs' => $insertbusinessDocs[$request->user_doctype], 'message' => 'Document uploaded letters uploaded successfully'], 200);
                    }
                } else {
                    // Here user exist

                    $IfdocIsnotNull = businessDocs::where(['user_id' => $request->user_id])->whereNotNull($request->user_doctype)->whereIn('status', [3, 1])->count();

                    // dd($IfdocIsnotNull);
                    if ($IfdocIsnotNull > 0)  // Here user exist but perticilar doc is not null
                    {
                        $oldDocs  =  businessDocs::where(['user_id' => $request->user_id])->whereIn('status', [3, 1])->get($request->user_doctype);
                        // dd($oldDocs);
                    }
                    foreach ($request->uploaddedFile as $key => $val) {
                        foreach ($request->allImgsOf as $restfile) {
                            if ($val->getClientOriginalName() == $restfile) {
                                $updatebusinessDocs =   $val->store('public/uploadedBusinesIMgs');
                                $docsNames[] = $val->store('public/uploadedBusinesIMgs');
                            }
                        }
                    }
                    $updatebusinessDocs =   implode(',', $docsNames);

                    $updateDocs = businessDocs::where(['user_id' => $request->user_id])->update([$request->user_doctype  =>   $updatebusinessDocs]);
                    //  $updateDocs  =   DB::table('businessDocs')->where('user_id', $request->user_id)->update([$request->user_doctype => $updatebusinessDocs]);

                    if ($updateDocs == true) {
                        if ($IfdocIsnotNull > 0) {
                            // to delete old documents
                            foreach ($oldDocs as  $val) {
                                if ($val[$request->user_doctype] != 'no') {
                                    $imgs =  explode(',', $val[$request->user_doctype]);
                                    foreach ($imgs as  $img) {
                                        unlink(storage_path('app/' . $img));
                                    }
                                }
                            }
                            // end to delete old documents
                        }
                        return response()->json(['uplodeddocs' => $updatebusinessDocs, 'message' => 'Document uploaded letters uploaded successfully'], 200);
                    }
                }
            }
        }
    }

    public function confirmVariousBusinessesDocs(Request $request)
    {
        return response()->json(['message' => 'All documents are uploaded and confirmed successfully', 'success' => 200]);



        //  $ConfirmBusinessDocs = businessDocs::where('user_id', $request->user_id )->update( [ 'status' => 1 ]);


        //   if($ConfirmBusinessDocs == true){

        //       return response()->json(['message' => 'All documents are uploaded and confirmed successfully', 'success' => 200]);

        //   }else{
        //       return response()->json(['error'=> 'something went wrong!', 401]);
        //   }


    }

    public function update_business_docs(Request $request, $id)
    {

        dd($id, $request);
        // $busineDoc = DB::table('relatedParties')->find($id);
        //  return response()->json($busineDoc);
    }

    public function show_business_docs()
    {



        //   print_r(' list of business documents');
        $alldocs = businessDocs::all();
        // return view('api/show-businesses-docs', compact('alldocs'));

        return response()->json($alldocs);
    }


    // Fiat Enablement

    public function addfiatEnablement(Request $request)
    {
        // dd($request->post('dropdown-group'));



        // dd(in_array("BRL", $request->dropdown_group));

        $validator = Validator::make($request->all(), [
            'fiat_dpstWithdwl' => 'required',
            'dropdown_group' => 'required',
        ]);

        if (in_array("BRL", $request->dropdown_group) === true) {

            $validator1 = Validator::make($request->all(), [
                'cnpjNum' => 'required',
                'cnpjDoc' => 'required',
                'cnpjDoc.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
        }


        if (in_array("AUD", $request->dropdown_group) === true) {
            $validator2 = Validator::make($request->all(), [

                'asicDoc' => 'required',
                'asicDoc.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
        }

        //  dd(in_array("AUD", $request->dropdown_group), $validator1 , in_array("AUD", $request->dropdown_group),$validator2);

        if ($validator->fails() || $validator1->fails() || $validator2->fails()) {


            //     if ($validator->fails() ) {
            $message = $validator->messages();
            return response()->json(['error' => $validator->errors(), 'error' => $validator1->errors(), 'error' => $validator2->errors()], 401);
        } else { //if validation success

            //   dd( $request->all());

            $ifUserExist = Entities::where(['user_id' => $request->user_id])->count();

            if ($ifUserExist < 1) {  // if user does not exist

                $dropdown_group = implode(',', $request->dropdown_group);



                $insertfietDocs = new Entities;


                $insertfietDocs->user_id = $request->user_id;
                $insertfietDocs->fiat_currencies  =   $dropdown_group;
                $insertfietDocs->fiat_dpstWithdwl = $request->fiat_dpstWithdwl;

                if (in_array("BRL", $request->dropdown_group) === true) {
                    foreach ($request->cnpjDoc as $key => $val) {

                        foreach ($request->allImgsOf_cnpjDoc as $restfile) {
                            if ($val->getClientOriginalName() == $restfile) {

                                $insertfietDocs->CNPJ_doc =   $val->store('public/uploadedFietIMgs');
                                $CNPJ_docNames[] = $val->store('public/uploadedFietIMgs');
                            }
                        }
                    }
                    $insertfietDocs->CNPJ_doc =   implode(',', $CNPJ_docNames);
                    $insertfietDocs->CNPJ_number =   $request->cnpjNum;
                }

                if (in_array("AUD", $request->dropdown_group) === true) {
                    foreach ($request->asicDoc as $key => $val) {

                        foreach ($request->allImgsOf_asicDoc as $restfile) {
                            if ($val->getClientOriginalName() == $restfile) {

                                $insertfietDocs->ASIC_doc =   $val->store('public/uploadedFietIMgs');
                                $asicDocNames[] = $val->store('public/uploadedFietIMgs');
                            }
                        }
                    }
                    $insertfietDocs->ASIC_doc =   implode(',', $asicDocNames);
                }

                $insertfietDocs->save();


                if ($insertfietDocs == true) {
                    return response()->json(['uplodedCNPJ_doc' => $insertfietDocs->CNPJ_doc, 'uplodedASIC_doc' => $insertfietDocs->ASIC_doc, 'message' => 'Document uploaded letters uploaded successfully'], 200);
                }
            } else {    // if user exist

                $dropdown_group = implode(',', $request->dropdown_group);

                $update_feitCurrencies = Entities::where(['user_id' => $request->user_id])->update(['fiat_dpstWithdwl' => $request->fiat_dpstWithdwl, 'fiat_currencies'  =>   $dropdown_group]);

                if ((in_array("BRL", $request->dropdown_group) === true) && count((array)$request->cnpjDoc) != 0  && (is_array($request->cnpjDoc) || is_object($request->cnpjDoc))) { // if BDL selected


                    $IfCNPJ_docIsnotNull = Entities::where(['user_id' => $request->user_id])->whereNotNull('CNPJ_doc')->whereIn('status', [3, 1])->count();
                    // dd($IfCNPJ_docIsnotNull);

                    if ($IfCNPJ_docIsnotNull > 0)  // if user exist but CNPJ_doc is not null
                    {
                        $oldCNPJ_doc  =  Entities::where(['user_id' => $request->user_id])->whereIn('status', [3, 1])->get('CNPJ_doc');
                        // dd($oldCNPJ_doc);
                    }
                    foreach ($request->cnpjDoc as $key => $val) {
                        foreach ($request->allImgsOf_cnpjDoc as $restfile) {
                            if ($val->getClientOriginalName() == $restfile) {
                                $updatecnpjDoc =   $val->store('public/uploadedFietIMgs');
                                $cnpjDocNames[] = $val->store('public/uploadedFietIMgs');
                            }
                        }
                    }
                    $updatecnpjDoc =   implode(',', $cnpjDocNames);

                    $update_cnpjDoc = Entities::where(['user_id' => $request->user_id])->update(['CNPJ_doc'  =>   $updatecnpjDoc, 'CNPJ_number'  =>  $request->cnpjNum]);

                    // deleting old document if BRL is selected
                    if ($update_cnpjDoc == true) {

                        if ($IfCNPJ_docIsnotNull > 0) {
                            // to delete old documents
                            foreach ($oldCNPJ_doc as  $val) {

                                $imgs =  explode(',', $val->CNPJ_doc);
                                foreach ($imgs as  $img) {
                                    unlink(storage_path('app/' . $img));
                                }
                            }
                            // end to delete old documents
                        }
                    }
                } // end if BDL selected




                if ((in_array("AUD", $request->dropdown_group) === true)   && (count((array)$request->asicDoc) != 0) && (is_array($request->asicDoc) || is_object($request->asicDoc))) { // if AUD selected

                    $IfASIC_docIsnotNull = Entities::where(['user_id' => $request->user_id])->whereNotNull('ASIC_doc')->whereIn('status', [3, 1])->count();
                    // dd($IfASIC_docIsnotNull);


                    if ($IfASIC_docIsnotNull > 0)  // if user exist but ASIC_doc is not null
                    {
                        $oldASIC_doc  =  Entities::where(['user_id' => $request->user_id])->whereIn('status', [3, 1])->get('ASIC_doc');
                        // dd($oldASIC_doc);
                    }

                    foreach ($request->asicDoc as $key => $val) {
                        foreach ($request->allImgsOf_asicDoc as $restfile) {
                            if ($val->getClientOriginalName() == $restfile) {
                                $updateasicDoc =   $val->store('public/uploadedFietIMgs');
                                $asicDocNames[] = $val->store('public/uploadedFietIMgs');
                            }
                        }
                    }

                    $updateasicDoc =   implode(',', $asicDocNames);
                    $update_asicDoc = Entities::where(['user_id' => $request->user_id])->update(['ASIC_doc'  =>   $updateasicDoc]);

                    // deleting old document if AUD is selected
                    if ($update_asicDoc == true) {
                        if ($IfASIC_docIsnotNull > 0) {
                            // to delete old documents
                            foreach ($oldASIC_doc as  $val) {

                                $imgs =  explode(',', $val->ASIC_doc);
                                foreach ($imgs as  $img) {
                                    unlink(storage_path('app/' . $img));
                                }
                            }
                            // end to delete old documents
                        }
                    }
                } // if AUD selected





                if ((in_array("BRL", $request->dropdown_group) === true)  && (in_array("AUD", $request->dropdown_group) === true) && (count((array)$request->cnpjDoc) != 0) && (count((array)$request->asicDoc) != 0)) {

                    return response()->json(['uplodedCNPJ_doc' => $updatecnpjDoc, 'CNPJ_number' => $request->cnpjNum, 'uplodedASIC_doc' => $updateasicDoc, 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }

                if ((in_array("BRL", $request->dropdown_group) === true) &&  (count((array)$request->cnpjDoc) == 0) && (in_array("AUD", $request->dropdown_group) === false)) {
                    return response()->json(['uplodedCNPJ_doc' => '', 'CNPJ_number' => $request->cnpjNum, 'uplodedASIC_doc' => '', 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }

                if ((in_array("BRL", $request->dropdown_group) === true) &&  (count((array)$request->cnpjDoc) == 0) && (in_array("AUD", $request->dropdown_group) === true)) {
                    return response()->json(['uplodedCNPJ_doc' => '', 'CNPJ_number' => $request->cnpjNum, 'uplodedASIC_doc' => $updateasicDoc, 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }

                if ((in_array("BRL", $request->dropdown_group) === true)  && (in_array("AUD", $request->dropdown_group) === true) &&  (count((array)$request->cnpjDoc) != 0) && (count((array)$request->asicDoc) == 0)) {
                    return response()->json(['uplodedCNPJ_doc' => $updatecnpjDoc,  'CNPJ_number' => $request->cnpjNum, 'uplodedASIC_doc' => '', 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }



                if ((in_array("BRL", $request->dropdown_group) === true)  && (count((array)$request->cnpjDoc) != 0) && (in_array("AUD", $request->dropdown_group) === false)) {
                    return response()->json(['uplodedCNPJ_doc' => $updatecnpjDoc, 'CNPJ_number' => $request->cnpjNum, 'uplodedASIC_doc' => '', 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }

                if ((in_array("BRL", $request->dropdown_group) === false)  && (in_array("AUD", $request->dropdown_group) === true) && (count((array)$request->asicDoc) != 0)) {

                    return response()->json(['uplodedCNPJ_doc' => '', 'CNPJ_number' => '', 'uplodedASIC_doc' => $updateasicDoc, 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }

                if ((in_array("BRL", $request->dropdown_group) === false)  && (in_array("AUD", $request->dropdown_group) === true) && (count((array)$request->asicDoc) == 0)) {

                    return response()->json(['uplodedCNPJ_doc' => '', 'CNPJ_number' => '', 'uplodedASIC_doc' => '', 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }

                if ((in_array("BRL", $request->dropdown_group) === true)  && (in_array("AUD", $request->dropdown_group) === true) && (count((array)$request->cnpjDoc) == 0) && (count((array)$request->asicDoc) == 0)) {
                    return response()->json(['currenciesStatus' => '200', 'message' => 'Fiet Document updated successfully', 'status' => 200]);
                }
            } // end if user does not exist


        } // close if valodation runs

    }

    public function confirmVariousBusinesses(Request $request)
    {
        return response()->json(['message' => 'All details confirmed successfully', 'success' => 200]);



        //  $ConfirmBusiness = relatedParties::where('user_id', $request->user_id )->where('partnerId', $request->businessTypeID )->update( [ 'status' => 1 ]);


        //   if($ConfirmBusiness == true){

        //       return response()->json(['message' => 'All details confirmed successfully', 'success' => 200]);

        //   }else{
        //       return response()->json(['error'=> 'something went wrong!', 401]);
        //   }


    }
}
