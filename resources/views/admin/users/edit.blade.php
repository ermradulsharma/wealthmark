<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Edit New User</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="javascript:void(0)287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <link href="{{ asset('assets/admin_assets/css/jquery.magnify.css') }}" rel="stylesheet">
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
      <style>
      @media(device-width:768px) and (device-height:1024px){
          .input-hide .btn-yellow{
                 white-space: pre-wrap;
          }
      }
      @media(min-width:768px) and (max-width:1200px){
          .upload-doument-head{
                white-space: nowrap;
                overflow: hidden !important;
                text-overflow: ellipsis;
          }
          .upload-btn{
            white-space: nowrap;
            overflow: hidden !important;
            text-overflow: ellipsis;
          }
      }
      @media(min-width:1200px) and (width:1400px){
          .pan-kyc-detail {
                height: 454px!important;
                min-height:454px!important;
                border: 1px solid #dddddd;
                padding: 10px;
                border-radius: 10px;
                min-height: 373px;
            }
      }
        .upload-container-pan{
            margin-top:4px;
        }
         /*@media(max-width:576px){*/
         /*#sidebar{*/
         /*display:none!important;*/
         /*}*/
         /*}*/
         .coins-wrapper-main{
         text-align:center;
         }
         .input-hide{
         position:relative;
         }
         .input-hide > input{
         position:absolute;
         top:0;
         width:100%;
         height:100%;
         opacity:0;
         z-index:999;
         }
         @media(min-width:768px){
         .upload-container {
         width: auto!important;
         height: 158px;
         border: 2px dotted gray;
         border-radius: 6px;
         }
         .rectangle-img-container {
         width: 100%!important;
         }
         }
         .pan-kyc-detail{
         margin-bottom:10px;
         }
         @media(max-width:576px){
         .rectangle-img-container{
         width: 100%!important;
         }
         .upload-container {
         width: 100%!important;
         min-height: auto!important;
         }
         }
         .rectangle-img-container{
         width: 300px;
         height: 150px;
         }
         .upload-container-selfie {
         width: 154px;
         height: 154px;
         border: 2px dotted gray;
         border-radius: 4px;
         margin-bottom:18px;
         }
         .upload-container {
         width: 305px;
         height: 158px;
         border: 2px dotted gray;
         border-radius: 6px;
         margin-bottom:10px;
         }
         @media(min-width:992px){
         #coin-display-section .p-3 {
         width: 18.4%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         margin: 0px 12px;
         }
         }
         @media(max-width:576px){
         .mobile-section-seperator {
         background-color: whitesmoke;
         }
         #coin-display-section .p-3 {
         max-width: 135px;
         margin: 10px auto;
         }
         .user-info-box div {
         text-align: center;
         white-space: unset!important;
         margin: 10px auto;
         min-width: 125px;
         max-width: 125px;
         }
         .pan-kyc-detail {
         margin-bottom: 20px;
         }
         }
         @media(min-width:577px) and (max-width:1200px){
         .user-info-box div {
         text-align: center;
         white-space: nowrap;
         margin: 10px auto;
         min-width: 180px;
         max-width: 180px;
         }
         }
         div.p-3 {
         border: 1px solid #e7e7e7;
         box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
         }

         .aadhar-kyc-detail{
         border: 1px solid #dddddd;
         padding: 10px;
         border-radius: 10px;
         min-height: 307px;
         }
         .user-info-box {
         display: flex;
         justify-content:start;
         flex-wrap: wrap;
         }
         .fund-div  {
         display: flex;
         align-items: center;
         justify-content: space-between;
         margin: 10px 0px;
         padding: 15px 15px;
         border-radius: 5px;
         }
         .fund-div .fund-div-btn{
         width:100px;
         text-align:center;
         }
         .fund-div .fund-div-btn a{
         display:block;
         }
         .security-block {
         width: 100%;
         }
         @media(max-width:991px){
             #coin-display-section .p-3 {
                width: 45.4%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 0px 12px;
            }
         }
         @media(min-width:1201px){
         .user-info-box div {
         text-align: center;
         white-space: nowrap;
         margin-top:5px ;
         min-width:110px;
         }
         }
         .table thead, .table th {
         text-align: left;
         }
         table td {
         font-size: 14px !important;
         text-align: left;
         }
         .padding-10{
         padding-top:10px;
         padding-bottom:10px;
         }
         table {
         caption-side: bottom;
         border-collapse: collapse;
         background: radial-gradient(#f1f3f4, transparent);
         }
         span a{
         padding: 2px !important;
         }
         .role nav a.py-2 {
         padding-top: 0.25rem!important;
         padding-bottom: 0.25rem!important;
         }
         .role nav a.px-2 {
         padding-right: 0.25rem!important;
         padding-left: 0.5rem!important;
         }
         div.stacking-extra-records {
         display: flex;
         align-items: center;
         flex-wrap: wrap;
         }
        .stacking-inner-block {
        min-width: 200px;
        text-align: left;
        margin: 10px 10px;
        padding: 15px 10px 15px 10px;
        background-color: white;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        }
        .table-bordered>:not(caption)>* {
        vertical-align: middle;
        }
        .upload-doument-head{
            white-space: nowrap;
            overflow: hidden !important;
            text-overflow: ellipsis;
        }
        @media(max-width:768px){
        .stacking-inner-block {
            margin: 10px auto;
            }
        }
          .pan-kyc-detail {
                 border: 1px solid #dddddd;
                 padding: 10px;
                 border-radius: 10px;
                 }
        @media(min-width:1401px){
             .pan-kyc-detail {
                 border: 1px solid #dddddd;
                 padding: 10px;
                 border-radius: 10px;
                 min-height: 373px;
                 }
        }
      </style>
   </head>
   <body>
      @include('admin.template.web_menu')
      <div class="dashboard-main">
      @include('admin.template.sidebar')
      <div class="container-fluid bg-light-blue ">
      <div class=" banner-section p-0">
         <br/>
         <div class="card">
            <div class="card-body">
               <div class="row bg-white d-flex align-items-center justify-content-between m-0">
                  <div class="col-md-6 col p-0">
                     <div class="bg-white shadow-none border-0 mb-2">
                        <div class="col-12">
                           <h2 class="fw-bold mb-0 ps-1">Edit New User</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col d-flex align-items-center justify-content-end">
                     <a class="btn btn-blue shadow d-inline-block " href="{{ route('users.index') }}"> Back</a>
                  </div>
               </div>
            </div>
         </div>
         @if (count($errors) > 0)
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <div class="card">
            <div class="card-body">
               <div class="col-xs-12 col-sm-12 col-md-12 d-flex user-info-box">
                  <div class="p-3">User ID<br/>
                     <span class="text-green"> {{ $user->id }} </span>
                  </div>
                  {{-- print_r($ifpanORdigilockerFailedEver) --}}
                  <div class="p-3">Account Type<br/>
                     @if ($user->account_type == 1 )
                     <span class="text-green"> Personal</span>
                     @elseif($user->account_type == 2 )
                     <span class="text-green"> Entity</span>
                     @elseif($user->account_type == 3 )
                     <span class="text-green"> Admin</span>
                     @elseif($user->account_type == 4 )
                     <span class="text-green"> Super Admin</span>
                     @else
                     <span> None</span>
                     @endif
                  </div>
                  <div class="p-3">Account Status<br/>
                     @if ($user->status == 0 )
                     <span class="text-green"> Pending</span>
                     @elseif($user->status == 1 )
                     <span class="text-green"> Active</span>
                     @elseif($user->status == 2 )
                     <span class="text-green"> Blocked</span>
                     @elseif($user->status == 3 )
                     <span class="text-green"> Inactive</span>
                     @else
                     <span> None</span>
                     @endif
                  </div>
                  <div class="p-3">Account verified <br/>
                     @if ($user->government_id_verified == 1 )
                     <span class="text-green"> Yes</span>
                     @else
                     <span class="text-red"> No</span>
                     @endif
                  </div>
                  <div class="digilockerFailed p-3">
                     Digilocker Failed Ever
                     @php
                     if( $ifpanORdigilockerFailedEver){
                     $digiAttempts = 0 ;
                     echo '<div id="staticBackdrop1">';
                        echo'<div class="hide">';
                           echo'<div class="wm-custom-modal-diolog max-width-1000px">';
                              echo'<div class="">';
                                 echo'<div class="wm-custom-modal-header">';
                                    echo '<span>Security verification </span>';
                                    echo'<svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">';
                                       echo'<path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>';
                                       echo '
                                    </svg>
                                 </div>
                              </div>';
                              echo'<div class="wm-custom-modal-body px-3  max-height-500px scrollbar-style">';
                                 echo'<div class="container-fluid p-0 m-0">';
                                    foreach($ifpanORdigilockerFailedEver as $ifdigilockerFailedEver){
                                    if( trim($ifdigilockerFailedEver->id_card_type) == 'digiLoacker' && trim($ifdigilockerFailedEver->id_card_type) != 'pancard'){
                                    $digilockerObject = json_decode($ifdigilockerFailedEver->digilocker_verification_responce);
                                    //  print_r($digilockerObject);
                                    print_r($digilockerObject->result  );
                                    $digiAttempts++ ;
                                    echo'<hr>';} } echo'
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     ';
                     if($digiAttempts > 0){
                     echo '<span class="text-green">Yes </span>';
                     echo '-Attempts::<span class="text-green">'.$digiAttempts.'</span>';
                     echo '
                     <span class="text-red">
                        <div class="btn-yellow" data-target-modal="staticBackdrop1">View</div>
                     </span>
                     ';
                     }else{
                     echo '<span class="text-green">No </span>';
                     }
                     }
                     @endphp
                  </div>
                  <div class="p-3">Digilocker Verified <br/>
                     @if ($user->digilocker_verification_responce != 2 && $user->digilocker_verification_responce !=null && $user->id_card_type == 'digiLoacker' )
                     <span class="text-green"> Yes</span>
                     @endif
                     @if($user->digilocker_verification_responce == 2 && $user->digilocker_verification_responce !=null )
                     <span class="text-red"> Failed</span>
                     @endif
                  </div>
                  <div class="failedPan p-3">
                     Pan Failed Ever <br/>
                     @php
                     if( $ifpanORdigilockerFailedEver){
                     $PanAttempts = 0 ;
                     echo'<div class="res" id="staticBackdrop2" >';
                        echo'<div class="hide">';
                           echo'<div class="wm-custom-modal-diolog max-width-1000px">';
                              echo'<div class="">';
                                 echo'<div class="wm-custom-modal-header">';
                                    echo'<span>Security verification </span>';
                                    echo'<svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">';
                                       echo'<path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>';
                                       echo'
                                    </svg>
                                 </div>
                              </div>
                              ';
                              echo'<div class="wm-custom-modal-body px-3">';
                                 echo'<div class="container-fluid p-0 m-0">';
                                    foreach($ifpanORdigilockerFailedEver as $ifdigilockerFailedEver){
                                    if( trim($ifdigilockerFailedEver->id_card_type) == 'pancard' && trim($ifdigilockerFailedEver->id_card_type) != 'digiLoacker'){
                                    $panObject = json_decode($ifdigilockerFailedEver->pan_verification_responce);
                                    foreach($panObject as $key => $value){
                                    print_r('</br>'.$key.'::'.$value);
                                    }
                                    $PanAttempts++ ;
                                    echo '
                                    <hr>
                                    ';
                                    }
                                    }
                                    echo '
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     ';
                     if($PanAttempts > 0){
                     echo '<span class="text-green">Yes </span>';
                     echo '-Attempts::<span class="text-green">'.$PanAttempts.'</span>';
                     echo '
                     <span class="text-red">
                        <div  class="btn-yellow" data-target-modal="staticBackdrop2">View</div>
                     </span>
                     ';
                     }else{
                     echo '<span class="text-green">No </span>';
                     }
                     }
                     @endphp
                  </div>
                  <div class="p-3">Pan Verified<br/>
                     @if ($user->pan_card != null && $user->pan_card_img != null)
                     <span class="text-green"> Yes</span>
                     @else
                     <span class="text-red"> No</span>
                     @endif
                  </div>
                  <div class="p-3">Aadhaar Verified<br/>
                     @if ($user->id_card_front_image != null && $user->id_card_back_image != null && ($user->id_card_type == 'ID Card (Aadhaar Image Upload)' || $user->id_card_type != 'digiLoacker'))
                     <span class="text-green"> Yes</span>
                     @else
                     <span class="text-red"> No</span>
                     @endif
                  </div>
                  <div class="p-3">Email Verified<br/>
                     @if ($user->is_mail_verified == 1 )
                     <span class="text-green"> Yes</span>
                     @else
                     <span class="text-red"> No</span>
                     @endif
                  </div>
                  <div class="p-3">Phone Verified<br/>
                     @if ($user->is_phone_verified == 1 )
                     <span class="text-green"> Yes</span>
                     @else
                     <span class="text-red"> No</span>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--- Coins display section-->
      <div class="card" id="coin-display-section">
         <div class="card-body">
            <div class="row">
               <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 p-3 mb-2">
                  <div class="coins-wrapper-main">
                     <strong>AVAILABLE Coins(P2P)</strong>
                     <div class="available-coin-value text-success">
                        @if($totalAvailableCoinsInMarketWallet)
                        <span>BMK </span>
                        <span>{{ $totalAvailableCoinsInMarketWallet }}</span>
                        @else
                        <span>0.00 </span>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 p-3 mb-2">
                  <div class="coins-wrapper-main">
                     <strong>RECURRING (ICO)</strong>
                     <div class="recurring-coin-value text-success">
                        @if($recurring_coin)
                        <span>BMK </span>
                        <span>{{ $recurring_coin}} </span>
                        @else
                        <span>0.00 </span>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 p-3 mb-2">
                  <div class="coins-wrapper-main">
                     <strong> REGULAR (ICO) </strong>
                     <div class="regular-coin-value text-success">
                        @if($regular_coin->total)
                        <span>BMK </span>
                        <span> {{ $regular_coin->total}} </span>
                        @else
                        <span>0.00 </span>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 p-3 mb-2">
                  <div class="coins-wrapper-main">
                     <strong>CHARITY (ICO)</strong>
                     <div class="charity-coin-value text-success">
                        @if($charity_coin->total)
                        <span>BMK </span>
                        <span>{{ $charity_coin->total }}</span>
                        @else
                        <span>0.00 </span>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 p-3 mb-2">
                  <div class="coins-wrapper-main">
                     <strong>
                        COMMUNITY (ICO)
                        <div class="community-coin-value text-success">
                           <span>BMK </span>
                           <span>0.00 </span>
                        </div>
                     </strong>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 p-3 mb-2">
                  <div class="coins-wrapper-main">
                     <strong>
                        Escrow
                        <div class="community-coin-value text-success">
                           <span> </span>
                           <span>
                           @php
                           if($coinSInEscrowAccount != 0){
                           $heldCoin = json_decode($coinSInEscrowAccount);
                           echo $heldCoin->held_coins;
                           }else{
                           echo '0.00';
                           }
                           @endphp
                           </span>
                        </div>
                     </strong>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--stacking admin template table view-->
      <div class="row stack bg-light-blue">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="card-body">
                  <div class="coins-wrapper-main">
                     <h4 class="text-left">Stacking Status</h4>
                     <div class="community-coin-value text-success">

                           <?php
                              if(count($stackingData) > 0){
                              foreach($stackingData as $stacking){
                              $stack = json_encode($stacking);
                              $stackArray = json_decode($stack);
                              //print_r($stackArray);
                              //die;
                              ?>
                           <div class="table-responsive scrollbar-style-h">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th scope="col">{{ Str::title('id') }}</th>
                                       <th scope="col">{{ Str::title('user id') }}</th>
                                       <th scope="col">{{ Str::title('staking transaction id' ) }}</th>
                                       <th scope="col">{{ Str::title('staking num of year') }}</th>
                                       <th scope="col">{{ Str::title('stacking num') }}</th>
                                       <th scope="col">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>{{ $stackArray->id }}</td>
                                       <td>{{ $stackArray->user_id }}</td>
                                       <td>{{ $stackArray->staking_transaction_id }}</td>
                                       <td>{{ $stackArray->staking_num_of_year }}</td>
                                       <td>{{ $stackArray->stacking_num }}</td>
                                       <td><a class="btn btn-sm btn-yellow" id="{{ $stackArray->stacking_num }}" onClick="mytoggle(this.id);"><i class="bi bi-eye-fill"></i> &nbsp; View More Records</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>

                           <div class="stacking-more-records bg-light-blue {{$stackArray->stacking_num}} stacking-extra-records" id="{{ 'div'.$stackArray->stacking_num }}" style="display:none">
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('staking coin name') }}</h6>
                               	    <span>{{ $stackArray->staking_coin_name}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('staking coin type') }}</h6>
                               	    <span>{{ $stackArray->staking_coin_type}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   <h6 scope="col">{{ Str::title('date of deposite') }}</h6>
                                   <span>{{ $stackArray->date_of_deposite }}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   <h6 scope="col">{{ Str::title('maturity date') }}</h6>
                                   <span>{{ $stackArray->maturity_date}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                  	<h6 scope="col">{{ Str::title('before maturity coins') }}</h6>
                              	    <span>{{ $stackArray->before_maturity_coins}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('before maturity value usd') }}</h6>
                               	    <span>{{ $stackArray->before_maturity_value_usd}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('before maturity value inr') }}</h6>
                                   	<span>{{ $stackArray->before_maturity_value_inr}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   <h6 scope="col">{{ Str::title('after maturity coins') }}</h6>
                                   <span>{{$stackArray->after_maturity_coins }}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   <h6 scope="col">{{ Str::title('after total value INR') }}</h6>
                                   <span>{{ $stackArray->after_total_value_INR }}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   <h6 scope="col">{{ Str::title('after total value USD') }}</h6>
                                   <span>{{ $stackArray->after_total_value_USD }}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('upto total benefits') }}</h6>
                               	    <span>{{ $stackArray->upto_total_benefits }}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   <h6 scope="col">{{ Str::title('upto monthly benefits') }}</h6>
                                   <span>{{ $stackArray->upto_monthly_benefits}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('percentage of interest') }}</h6>
                               	   <span>{{ $stackArray->percentage_of_interest}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('current price_of coin usd') }}</h6>
                               	    <span>{{ $stackArray->current_price_of_coin_usd}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('current price of coin inr') }}</h6>
                               	   <span>{{ $stackArray->current_price_of_coin_inr}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('status') }}</h6>
                               	    <span>{{ $stackArray->status}}</span>
                               </div>
                               <div class="stacking-inner-block shadow-sm">
                                   	<h6 scope="col">{{ Str::title('maturity status') }}</h6>
                                   	<span>{{ $stackArray->maturity_status}}</span>
                               </div>
                           </div>

                     <?php  }
                     echo"</div>";
                     echo"</div>";
                        }else{
                        echo count($stackingData);
                        }    ?>

               </div>
            </div>
            <!--stacking admin template table view-->
         </div>
      </div>
      {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'files' => true]) !!}
      <div class="card">
         <div class="card-body">
            <div class="row ">
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Name:</strong>
                     {!! Form::text('first_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Email:</strong>
                     {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Phone:</strong>
                     {!! Form::number('phone', null, array('placeholder' => 'phone','class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>PAN no.:</strong>
                     {!! Form::text('pan_card', null, array('placeholder' => 'Pan Card','class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Password:</strong>
                     {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Confirm Password:</strong>
                     {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Role:</strong>
                     {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Government Verification Status:(0:No/1:Yes)</strong>
                     <!--{!! Form::text('government_id_verified', null, array('placeholder' => 'Government Verification Status','class' => 'form-control')) !!}-->
                     {!! Form::select('government_id_verified', array( '1' => 'Yes', '0' => 'No'),  $user->government_id_verified , array( 'class' => 'form-select'))  !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-10 mb-2">
                  <div class="form-group">
                     <strong>Remark/Comments:</strong>
                     {!! Form::textarea('comment', null, array('placeholder' => 'Remark','class' => 'form-control','rows' => '+3')) !!}
                  </div>
               </div>
            </div>
            <div id="playground">
               <div class="row my-4 image-set m-t-20">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="pan-kyc-detail shadow-sm bg-light-blue bg-white p-2 shadow-sm pb-2">
                        <h4>Pan KYC Details</h4>
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-10">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="bg-white p-3 shadow-sm padding-10">
                                    <div class="row">
                                       <div class="col-md-6 order-1 order-lg-1">
                                          <strong>DOC ID: (PAN no) </strong>
                                       </div>
                                       <div class="col-md-6 d-flex justify-content-center order-2 order-lg-2">
                                          {!! Form::text('pan_card', null, array('placeholder' => 'Enter your 10 digit Pan Card Unique Number','class' => 'form-control')) !!}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 order-1 order-lg-1 mt-2">
                                 <div class="bg-white p-2 shadow-sm" id="selfie-img-upload-box">
                                    <div class="bg-light-blue p-2 upload-doument-head">Selfie Image:</div>
                                    <br/>
                                    <!--<img class="img-hover-zoom mb-2" style="height:80px; width:80px;border-radius:5px" src="{{ $user->selfie_image }}">-->
                                    <div class="upload-container-selfie">
                                       <a data-magnify="gallery" data-src="" data-caption="Uploaded Selfie Photo" data-group="a" href="{{ $user->selfie_image }}">
                                       <img src="{{ $user->selfie_image }}"  style="width: 150px;height: 150px;"  id="selfie-img" alt="Selfie image"  /></a>
                                    </div>
                                    <div class="input-hide">
                                       {!! Form::file('selfie_image', array( 'placeholder' => 'ID Card Front Image','class' => 'form-control upload-btn','onchange' => 'readURL2(this)')) !!}
                                       <a class="btn btn-yellow shadow w-100" >Upload Your Selfie</a>
                                    </div>
                                    <!--<input type='file' onchange="readURL2(this);" name="selfie_image" placeholder="ID Card Front Image", class="form-control"  />-->
                                 </div>
                              </div>
                              <div class="col-md-6 order-2 order-lg-1 mt-2">
                                 <div class="bg-white p-2 shadow-sm">
                                    <div class="bg-light-blue p-2 upload-doument-head">PAN image</div>
                                    <br/>
                                    <?php
                                       $string = $user->pan_card_img;
                                       $ele = 'storage/app/';

                                       if (strpos($string, $ele) !== false) {
                                       $userPanImg = $user->pan_card_img;
                                       } else {
                                       $userPanImg = $ele.$user->pan_card_img;
                                       }

                                       ?>
                                    <div class="upload-container upload-container-pan">
                                       <a data-magnify="gallery" data-src="" data-caption="Uploaded Pan Card Photo" data-group="a" href="{{ url($userPanImg) }}">
                                       <img src="{{ url($userPanImg) }}" class="rectangle-img-container" id="pan-front-img" alt="Pan Image" style="width:490px;max-width:490px;" /></a>
                                    </div>
                                    <!--<input type='file' onchange="readURL(this);" />-->
                                    <!--<input type='file' id="pan_card_img" name="pan_card_img" placeholder="Pan Card Image" class="form-control" onchange="readURL(this)" />-->
                                    <div class="input-hide">
                                       {!! Form::file('pan_card_img', array('id' => 'pan_card_img', 'placeholder' => 'Pan Card Image', 'class' => 'form-control upload-btn', 'onchange' => 'readURL(this)')) !!}
                                       <a class="btn btn-yellow shadow w-100" >Upload Your Pan</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="aadhar-kyc-detail shadow-sm bg-light-blue">
                        <h4>Aadhaar KYC Details</h4>
                        <div class="bg-white p-3 shadow-sm col-xs-12 col-sm-12 col-md-12 padding-10 mt-3">
                           <div class="row">
                              <div class="col-md-6 order-1 order-lg-1">
                                 <strong class="upload-doument-head">DOC ID: (AADHAAR/DL no. etc.):</strong>
                              </div>
                              <div class="col-md-6 d-flex justify-content-center order-2 order-lg-2">
                                 {!! Form::text('id_card_num', null, array('placeholder' => 'Enter your 12 digit Aadhaar Card Number','class' => 'form-control')) !!}
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 padding-10 ">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="bg-white p-2 shadow-sm">
                                    <div class="bg-light-blue p-2 upload-doument-head">ID Card Front Image: (AADHAAR/DL etc.):</div>
                                    <br/>
                                    <!--{!! Form::file('selfie_image', array( 'placeholder' => 'ID Card Front Image','class' => 'form-control','onchange' => 'readURL2(this)')) !!}-->
                                    <div class="upload-container">
                                       <a data-magnify="gallery" data-src="" data-caption="Aadhar Card Front Photo" data-group="a" href="{{ $user->id_card_front_image }}">
                                       <img src="{{ $user->id_card_front_image }}" class="rectangle-img-container" id="aadhar-front-img" alt="Selfie image" >
                                       </a>
                                    </div>
                                    <div class="input-hide">
                                       {!! Form::file('id_card_front_image', array( 'placeholder' => 'ID Card Front Image','class' => 'form-control upload-btn','onchange' => 'readURL3(this)')) !!}
                                       <a class="btn btn-yellow shadow w-100" >Upload Front Aadhar Card</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="bg-white p-2 shadow-sm">
                                    <div class="bg-light-blue p-2 upload-doument-head">ID Card Back Image: (AADHAAR/DL etc.):</div>
                                    <br/>
                                    <div class="upload-container">
                                       <a data-magnify="gallery" data-src="" data-caption="Aadhar Card Back Photo" data-group="a" href="{{ $user->id_card_back_image }}">
                                       <img  src="{{ $user->id_card_back_image }}"  class="rectangle-img-container" id="aadhar-back-img" alt="Selfie image" >
                                       </a>
                                    </div>
                                    <div class="input-hide">
                                       {!! Form::file('id_card_back_image', array( 'placeholder' => 'ID Card Back Image','class' => 'form-control upload-btn','onchange' => 'readURL4(this)')) !!}
                                       <a class="btn btn-yellow shadow w-100" >Upload Back Aadhar Card</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="footer-btn-box d-flex justify-content-end align-items-center">
                        <a class="btn btn-blue" href="{{ route('users.index') }}"> Cancel</a>
                        <button type="submit" class="btn btn-yellow">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {!! Form::close() !!}
      @include('admin.template.web_footer')
      <link rel="stylesheet" href="{{ url("assets/css/alert.css") }}">
      <script src="{{ url("assets/js/alert.js") }}"></script>
      <script type="text/javascript">
         document.getElementById("searchUserlist").onkeyup = function() {
         const value = document.getElementById("searchUserlist").value;
         //alert(value);
         jQuery.ajax({
         type : 'get',
         url : '{{URL::to('admin/searchUserlist')}}',
         data:{
         'search':value
         },
         success:function(data){
         alert(data);
         $('.livesearch').html(data);
         }
         });
         };
      </script>
      <script>
         function loadFile() {
         $('#UploadingImgstatus').html('');
         $('#pan_card_img_err').html('');
         $(".loadingPersonal").addClass('disablepointer');
         // alert(event.target.files[0]);
         $("#panPreview").parent().css({'display' : 'block'});
         panPreview.src=URL.createObjectURL(event.target.files[0]);
         console.log(event.target.files[0].size);
         $(".loadingPersonal").removeClass('disablepointer');
         // }

         }
         $('[data-target-modal]').click(function() {
         const divId = $(this).attr('data-target-modal');
         $("#"+divId).children().addClass('custom-modal-bck-bg').removeClass('hide');

         });

      </script>
      <script>
         function readURL(input) {
         if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
         $('#pan-front-img')
         .attr('src', e.target.result);
         };

         reader.readAsDataURL(input.files[0]);
         }
         }
         function readURL2(input) {
         if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
         $('#selfie-img')
         .attr('src', e.target.result);
         };

         reader.readAsDataURL(input.files[0]);
         }
         }
         function readURL3(input) {
         if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
         $('#aadhar-front-img')
         .attr('src', e.target.result);
         };

         reader.readAsDataURL(input.files[0]);
         }
         }
         function readURL4(input) {
         if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
         $('#aadhar-back-img')
         .attr('src', e.target.result);
         };

         reader.readAsDataURL(input.files[0]);
         }
         }
      </script>
      <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{ asset('assets/admin_assets/js/jquery.magnify.js') }}"> </script>
      <script>
         window.prettyPrint && prettyPrint();

         var defaultOpts = {
         draggable: true,
         resizable: true,
         movable: true,
         keyboard: true,
         title: true,
         modalWidth: 320,
         modalHeight: 320,
         fixedContent: true,
         fixedModalSize: false,
         initMaximized: false,
         gapThreshold: 0.02,
         ratioThreshold: 0.1,
         minRatio: 0.05,
         maxRatio: 16,
         headToolbar: ['maximize', 'close'],
         footToolbar: ['zoomIn', 'zoomOut', 'prev', 'fullscreen', 'next', 'actualSize', 'rotateRight'],
         multiInstances: true,
         initEvent: 'click',
         initAnimation: true,
         fixedModalPos: false,
         zIndex: 1090,
         dragHandle: '.magnify-modal',
         progressiveLoading: true
         };

         var vm = new Vue({
         el: '#playground',
         data: {
         options: defaultOpts
         },
         methods: {
         changeTheme: function (e) {
         if (e.target.value === '0') {
         $('.magnify-theme').remove();
         } else if (e.target.value === '1') {
         $('.magnify-theme').remove();
         $('head').append('<link class="magnify-theme" href="css/magnify-bezelless-theme.css" rel="stylesheet">');
         } else if (e.target.value === '2') {
         $('.magnify-theme').remove();
         $('head').append('<link class="magnify-theme" href="css/magnify-white-theme.css" rel="stylesheet">');
         }
         }
         },
         updated: function () {
         $('[data-magnify]').magnify(this.options);
         }
         });

      </script>
      <script>
         $(document).ready(function(){
         $(".upload-container img").click(function(){

         });

         });
         function mytoggle(id){
            // alert();
             var Tid= id;

                  //    alert();
                //$("#stacking-extra-records").slideToggle();
                $("."+Tid).slideToggle();
                // console.log($("#'+'div'+Tid"));
                // $("#'+'div'+Tid").slideToggle();
         };

      </script>
   </body>
</html>
