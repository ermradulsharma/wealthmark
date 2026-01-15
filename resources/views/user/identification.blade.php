<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  @include('template.web_css')
     <style>
     .cmplet_btn{
    box-sizing: border-box;
    margin: 16px 0px 24px;
    min-width: 0px;
    display: flex;
    border-radius: 36px;
    cursor: pointer;
    background: rgba(14, 203, 129, 0.12);
    font-size: 16px;
    line-height: 24px;
    color: rgb(3, 166, 109);
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    padding-left: 22px;
    padding-right: 22px;
    height: 40px;
     }



   .sidebar-nav{
      display:block;
  }




  .identyty-varified{
        display: flex;
    background: white;
    align-items: center;
    padding: 15px 10px;
    border-radius: 10px;
    margin-bottom: 10px;
    min-height: 100px;
  }
  .identyty-varified > div:first-child{
      color: #fdc116;
    margin-right: 15px;
    font-size: 20px;
    background: #f5f8fd !important;
    padding: 10px;
  }

   .identyty-varified > div > div:first-child{
       display: flex;
    align-items: center;
    justify-content: start;
    font-size: 18px;
    font-weight:400 !important;
   }
    .identyty-varified > div > div:first-child > b{
        margin-right:5px;
    }

   .identyty-varified > div > p{
       font-size: 12px;
    color: #6c757d!important;
   }

 .identyty-varified > div > a  {
       border-radius: 15px;
    color: #000000;
    font-size: 12px;
    font-weight: 600 !important;
   }
  </style>
</head>
<body>
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')
             <div class="container-fluid p-0 w-100">
        <div class="bg-light-blue p-3 w-100">
                 <!-- banner -->
                  <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                 <div class="verification-banner">
                    <div class="row">
                       <div class="col-md-7 verification-banner-left">
                          <div class="d-flex align-items-center">
                             <h2 class="fw-bold mb-0">Personal Verification</h2>
                             {{-- 'welath-'.$_SESSION['custom_session_id'] --}}
                              {{-- 'welath-'.Session::get('custom_session_id') --}}
                             {{-- session('custom_session_id') --}}
                              <?php // print_r($_SESSION) ; ?>

                                <a href="" class="d-flex align-items-center">
                                   <span class="bi bi-shield-plus privacy-icon"></span>
                                </a>
                                <a href="" class="d-flex align-items-center">
                                   <span class="bi bi-question-octagon guide-icon"></span><span class="guide-text">Guide</span>
                                </a>
                          </div>
                       </div>
                       <div class="col-md-5 verification-banner-right">
                          <span>Residential country/region : </span>
                          <button type="button" class="btn-theme " disabled=""><img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('assets/img/country-flag/'.$user_data['country_flag']) }}">&nbsp;&nbsp;&nbsp;{{$user_data['country']}}</button>
                       </div>
                    </div>
                 </div>
                 </div>
                  <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                 <div class="verification-content">
                    <div class="row">
                       <div class="col-lg-4 col-md-12">
                          <div class="card-body bg-light-blue h-100">
                             <!--<h3 class="fw-bold mb-0">Current Features</h3>-->
                             <!--<div class="text-center curr-feature-content">-->
                             <!--   <img src="" class="mb-4" alt="">-->
                                <!--{{ asset('assets/img/Security-Icon.svg') }}-->
                             <!--   <h4 class="fw-bold ">Your account is currently not verified.</h4>-->
                             <!--   <span>Complete verification to access services on WealthMark.</span>-->
                             <!--</div>                 -->

                           <h3 class="mb-4">Current Features </h3>


                                <div class="identyty-varified">
                                    <div>
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div>

                                        <div>
                                            <b><i class="bi bi-currency-dollar"></i> 2M</b>
                                             Daily
                                        </div>

                                        <p>Fait Deposit & Widhdrawal Limits</p>
                                        <a href="#" class="bg-light-blue px-3 py-1 mt-2 round d-inline-flex  align-items-center justify-content-between">
                                            Increase limit
                                          <i class="bi bi-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                           <div class="identyty-varified">
                                    <div>
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div>

                                        <div>
                                            <b><i class="bi bi-currency-dollar"></i> Unlimited</b>
                                        </div>

                                        <p>Crypto Deposit Limit</p>

                                    </div>
                                </div>
                                <div class="identyty-varified">
                                    <div>
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div>

                                        <div>
                                            <b><i class="bi bi-currency-dollar"></i>  8M BUSD </b>
                                            Daily
                                        </div>

                                        <p>Fait Deposit & Widhdrawal Limits</p>
                                        <a href="#" class="bg-light-blue px-3 py-1 mt-2 round d-inline-flex  align-items-center justify-content-between">
                                            Increase limit
                                          <i class="bi bi-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="identyty-varified">
                                    <div>
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div>

                                        <div>
                                            <b><i class="bi bi-currency-dollar"></i> Unlimited</b>
                                        </div>

                                        <p>P2P Transaction Limits</p>

                                    </div>
                                </div>
                                 <div class="identyty-varified">
                                    <div>
                                        <i class="bi bi-wallet-fill"></i>
                                    </div>
                                    <div>

                                        <div>
                                            <b><i class="bi bi-currency-dollar"></i> LPD/OTC/Wealthmark Card</b>
                                        </div>

                                        <p>Other Features</p>

                                    </div>
                                </div>


                             </div>

                          </div>


                       <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="card-body ">
                             <h3 class="fw-bold mb-4">
                                 @php
                                        if( Auth::user()->account_type == 1 ){
                                            if(Auth::user()->government_id_verified == 1){
                                                echo "Verified";
                                            }else{
                                             echo "Unerified";
                                            }
                                        }

                                        if( (Auth::user()->account_type == 2) ){
                                            if($this->is_entity_verified(Auth::user()->id) == 1  ){
                                            echo "Verified";
                                            }else{
                                            echo "Unerified";
                                            }
                                        }
                                @endphp

                                 </h3>
                             <div class="verified-feature-content">
                                <div class="up-feature">
                                   <div class="mb-2">
                                      <span class="bi bi-person-fill text-muted me-2"></span>
                                      <span class=" text-muted">Personal information</span>
                                   </div>
                                   <div class="mb-2">
                                      <span class="bi bi-person-lines-fill text-muted me-2"></span>
                                      <span class=" text-muted">Government-issued ID</span>
                                   </div>
                                   <div class="mb-2">
                                      <span class="bi bi-person-bounding-box text-muted me-2"></span>
                                      <span class=" text-muted">Facial recognition</span>
                                   </div>
                                   <!--<div class="mb-2">-->
                                   <!--   <span class="bi bi-hourglass-split text-muted me-2"></span>-->
                                   <!--   <span class=" text-muted">Review time: 10 days</span>-->
                                   <!--</div>-->
                                </div>

                                <div class="mt-1 mb-5 text-left">


                                       @php
                                        if( Auth::user()->account_type == 1 ){
                                            if(Auth::user()->government_id_verified == 1){
                                        @endphp
                                            <a href="#" class="d-inline py-2 px-3 round shadow-sm cmplet_btn">Verified</a>
                                        @php
                                                echo "";
                                            }else{
                                       @endphp
                                              <a href="{{ url(app()->getLocale().'/need-kyc') }}" class="btn-theme w-100"> Start Now </a>
                                       @php
                                            }
                                        }

                                        if( (Auth::user()->account_type == 2) ){
                                            if($this->is_entity_verified(Auth::user()->id) == 1  ){
                                         @endphp
                                            <a href="#" class="d-inline py-2 px-3 round shadow-sm cmplet_btn">Verified</a>
                                        @php
                                            }else{
                                        @endphp
                                            <a href="{{ url(app()->getLocale().'/entity-verification') }}" class="btn-theme w-100"> Start Now </a>
                                        @php
                                            }
                                        }
                                        @endphp




                                </div>

                                <div class="mb-2">
                                   <span class="text-muted">Fiat Deposit &amp; Withdrawal Limits</span>
                                   <p>$50K Daily</p>
                                </div>
                                <div class="mb-2">
                                   <span class="text-muted">Crypto Withdrawal Limit</span>
                                   <p>8M BUSD Daily</p>
                                </div>
                                <div class="mb-2">
                                   <span class="text-muted">P2P Transaction Limits</span>
                                   <p>Unlimited</p>
                                </div>
                                <div class="mb-2">
                                   <span class="text-muted">Other Features</span>
                                   <p>LPD/OTC/WealthMark card</p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="card-body ">
                             <h3 class="fw-bold mb-4">Verified Plus</h3>
                             <div class="verified-feature-content">
                                <div class="up-feature">
                                   <div class="mb-2">
                                      <span class="bi bi-geo-fill text-muted me-2"></span>
                                      <span class=" text-muted">Proof of address</span>
                                   </div>
                                   <div class="mb-2">
                                      <span class="bi bi-hourglass-split text-muted me-2"></span>
                                      <span class=" text-muted">Review time: 10 days</span>
                                   </div>
                                </div>


                                <div class="mt-1 mb-4 text-left">
                                   <input type="button" class="btn-theme d-inline py-2 px-3 round" value="Verify Now">
                                </div>

                                <div class="mb-2">
                                   <span class="text-muted">Fiat Deposit &amp; Withdrawal Limits</span>
                                   <p>$200K Daily Daily</p>
                                </div>
                                <div class="mb-2">
                                   <span class="text-muted">Crypto Withdrawal Limit</span>
                                   <p>8M BUSD Daily</p>
                                </div>
                                <div class="mb-2">
                                   <span class="text-muted">P2P Transaction Limits</span>
                                   <p>Unlimited</p>
                                </div>
                                <div class="mb-2">
                                   <span class="text-muted">Other Features</span>
                                   <p>LPD/OTC/WealthMark card</p>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 </div>
             </div>
        </div>
    </div>
   @include('template.web_footer')

</body>
</html>

