<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegisterEntityTypeController;
use App\Http\Controllers\Api\EntityController;
use App\Http\Controllers\MailerController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();
// });
Route::get('login', [MailerController::class, 'email']);

Route::post('reset_password', [UserController::class, 'reset_password']);
Route::post('get_verification_type', [UserController::class, 'get_verification_type']);
Route::post('phone_login', [UserController::class, 'phone_login']);
Route::post('verify_phone_otp', [UserController::class, 'verify_phone_otp']);
Route::post('verify_Lphone_otp', [UserController::class, 'verify_Lphone_otp']);

Route::post('email_login', [UserController::class, 'email_login']);
Route::post('verify_email_otp', [UserController::class, 'verify_email_otp']);
Route::post('verify_Lemail_otp', [UserController::class, 'verify_Lemail_otp']);

Route::post('verify_captcha', [UserController::class, 'verify_captcha']);
Route::post('verify_otp', [UserController::class, 'verify_otp']);

Route::post('email_register', [UserController::class, 'email_register']);
Route::post('phone_register', [UserController::class, 'phone_register']);

Route::post('email_forgot_password', [UserController::class, 'reset_password_by_email']);
Route::post('phone_forgot_password', [UserController::class, 'reset_password_by_phone']);

Route::post('send_otp_phone', [UserController::class, 'send_otp_by_phone']);
Route::post('send_otp_email', [UserController::class, 'send_otp_by_mail']);

Route::post('send_otp_by_secure_mail', [UserController::class, 'send_otp_by_secure_mail']);
Route::post('send_otp_by_secure_mail_old_user', [UserController::class, 'send_otp_by_secure_mail_old_user']);
Route::post('send_otp_by_secure_phone_old_user', [UserController::class, 'send_otp_by_secure_phone_old_user']);
Route::post('send_otp_by_secure_phone', [UserController::class, 'send_otp_by_secure_phone']);
Route::post('send_otp_toAdd_Payment_onPhone', [UserController::class, 'send_otp_toAdd_Payment_onPhone']);


Route::post('send_old_phone_otp_by_secure_phone', [UserController::class, 'send_old_phone_otp_by_secure_phone']);

Route::post('save_personal_info', [UserController::class, 'save_personal_info']);
Route::post('save_id_card_info', [UserController::class, 'save_id_card_info']);
Route::post('save_selfie_info', [UserController::class, 'save_selfie_info']); 


Route::post('filter/get_country_record', [UserController::class, 'get_country_record']);


//  entity start
    Route::post('entity-list', [RegisterEntityTypeController::class, 'show']);
    // Route::post('/create-entity', [RegisterEntityTypeController::class, 'register']);
    // Route::get('/delete-entity/{id}', [RegisterEntityTypeController::class, 'delete']);
    Route::post('register-business', [EntityController::class, 'register']);
    Route::get('show-businesses', [EntityController::class, 'show']);
    Route::post('prepareChecklist', [EntityController::class, 'prepareChecklist']);
     
    Route::post('countCompletedSections', [EntityController::class, 'countCompletedSections']);
    
    Route::post('related-parties', [EntityController::class, 'related_parties']);
    Route::get('view-businessesDocs', [EntityController::class, 'show_business_docs']);
    Route::post('entity-primary-detail', [UserController::class, 'registerEntityprimary_detail']);

    Route::post('/accountInformation', [EntityController::class, 'accountInformation']);
    Route::post('/entityAddress', [EntityController::class, 'entityAddress']);
    Route::post('/sourceDeclairation', [EntityController::class, 'sourceDeclairation']);
    Route::post('/additionalInformation', [EntityController::class, 'additionalInformation']);
    
    Route::post('/addGeneralPartner', [EntityController::class, 'addGeneralPartner']);
    Route::post('/editGeneralPartner', [EntityController::class, 'editGeneralPartner']);
    Route::post('/UpdateGeneralPartner', [EntityController::class, 'UpdateGeneralPartner']);
     Route::post('/deleteGeneralPartner', [EntityController::class, 'deleteGeneralPartner']);
   
    Route::post('/UpdateSingleDirector', [EntityController::class, 'UpdateSingleDirector']);
    Route::post('/editSingleDirector', [EntityController::class, 'editSingleDirector']);
   Route::post('/deleteSingleDirector', [EntityController::class, 'deleteSingleDirector']);
    Route::post('/UpdateCompany', [EntityController::class, 'UpdateCompany']);
     
    
    Route::post('/addBeneficialOwner', [EntityController::class, 'addBeneficialOwner']);
    Route::post('/editBeneficialOwner', [EntityController::class, 'editBeneficialOwner']);
     Route::post('/updateBeneficialOwner', [EntityController::class, 'updateBeneficialOwner']);
      Route::post('/deleteBeneficialOwner', [EntityController::class, 'deleteBeneficialOwner']);
    
     Route::post('/confirmVariousBusinesses', [EntityController::class, 'confirmVariousBusinesses']);
      Route::post('/confirmVariousBusinessesDocs', [EntityController::class, 'confirmVariousBusinessesDocs']);
    
    
    Route::post('/addSignificantController', [EntityController::class, 'addSignificantController']);
     Route::post('/editSignificantController', [EntityController::class, 'editSignificantController']);
     Route::post('/UpdateSignificantController', [EntityController::class, 'UpdateSignificantController']);
      Route::post('/deleteSignificantController', [EntityController::class, 'deleteSignificantController']);
    
    Route::post('/addAuthorisedAccountTrader', [EntityController::class, 'addAuthorisedAccountTrader']);
    Route::post('/editAuthorisedAccountTrader', [EntityController::class, 'editAuthorisedAccountTrader']);
     Route::post('/UpdateAuthorisedAccountTrader', [EntityController::class, 'UpdateAuthorisedAccountTrader']);
      Route::post('/deleteAuthorisedAccountTrader', [EntityController::class, 'deleteAuthorisedAccountTrader']);
    
    
    
    
    
    
    Route::post('/addMainTraderVerification', [EntityController::class, 'addMainTraderVerification']);
    Route::post('/uploadAuthorizationLetter', [EntityController::class, 'uploadAuthorizationLetter']);


    Route::post('/uploadBusinessDocs', [EntityController::class, 'uploadBusinessDocs']);
    Route::post('/addfiatEnablement', [EntityController::class, 'addfiatEnablement']);
    
    
 //End entity    



 
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('user-details', [UserController::class, 'userDetails']);
    
});

  Route::get('updateUsername250223', [EntityController::class, 'updateUsername250223']); 








