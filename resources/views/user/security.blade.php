<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Security on Wealthmark</title>
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  @include('template.web_css')
    <style>
    .adrs_mng{
        font-size: 13px;
        text-decoration: underline;
    }

  .sidebar-nav{
      display:block;
  }



  </style>

</head>
<body>
    @include('template.web_menu')

<div class="dashboard-main">
     @include('template.sidebar')
     <div class="container-fluid p-0">
     <div class="bg-light-blue p-3 w-100">

            <div class="dashboard-breadcrumb bg-white shadow-none border-0 px-4 py-3">

                    <div class="row g-0 align-items-center justify-content-between">
                        <div class="col-8">
                            <h2 class="fw-bold">Security</h2>
                            <div class="security-tabs">
                                <div class="d-flex align-items-center">
                                     @if(Auth::user()->is_two_factor==0)
                                         <span class="bx bx-x"></span>
                                         <a href="#" class="text-theme-yellow">Two-Factor Authentication (2FA)</a>
                                    @else
                                        <span class="bx bx-check"></span>
                                        <a href="#" class="text-dark text-theme-green">Two-Factor Authentication (2FA)</a>
                                    @endif
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="bx bx-x"></span>
                                    <a href="#" class="text-theme-yellow">Identity Verification</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="bx bx-x"></span>
                                    <a href="#" class="text-theme-yellow">Anti-Phishing Code</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="bx bx-x"></span>
                                    <a href="#" class="text-theme-yellow">Withdrawal Whitelist</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                          <img src="{{ asset('img/dashboard-icons/Security-Icon.svg') }}" class="breadcrumb-icon" alt="">
                        </div>
                    </div>

            </div>
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                 @if(Auth::user()->is_two_factor==0)
                        <div class="bg-dark-blue p-3 rounded">
                           <div class="mb-2">
                              <span class="text-white fs-12">To increase your account security, it is recommended that you enable 2FA, including WealthMark/Google authenticator.</span>
                           </div>
                           <div>
                                <div class="yellow-text d-flex align-items-center cursor-pointer">
                                    Enable WealthMark/Google Authenticator Now
                                    <i class="bx bx-chevron-right"></i>
                                </div>
                           </div>
                        </div>
                    @endif
            </div>
          <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">


                    <div>
                       <h4 >Two-Factor Authentication (2FA)</h4>
                    </div>
                    <div class="security-column ">
                       <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/settings/biometric-authentication.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Biometric Authentication/Security Key</h5>
                             <span>Protect your account and withdrawals with a security key such as Yubikey.</span>
                          </div>
                       </div>
                       <div class="security-column-right">
                          <div class="d-flex align-items-center">
                             <span class="bx bx-x"></span>
                             <span class="text-theme-yellow">Unset</span>
                          </div>
                          <div class="security-right-button">
                             <a href="" class="btn-yellow shadow-none">Enable</a>
                          </div>
                       </div>
                    </div>
                    <div class="security-column ">
                       <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/settings/email-address-verification.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Email Address Verification</h5>
                             <span>Protect your account and transactions.</span>
                          </div>
                       </div>
                       <div class="security-column-right">
                            <div class="d-flex align-items-center">
                                @if(Auth::user()->is_mail_verified==0)
                                 <span class="bx bx-x"></span>
                                 <span class="text-theme-yellow">Not linked</span>
                                @else
                                 <span class="bx bx-check"></span>
                                 <span class="text-theme-green">{{$email_data}}</span>
                                @endif
                            </div>
                            <div class="security-right-button">
                                @if(Auth::user()->is_mail_verified==0)
                                    <a href="{{ url( app()->getLocale()) }}/user/enable-email-authentication" class="btn-yellow shadow-none">Enable</a>
                                @else
                                 <a href="javascript:void(0)" data-target-modal="change_email_authenticator" class="btn-yellow shadow-none">Change</a>
                                    <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#remove_email_authenticator" class="btn-yellow shadow-none">Remove</a>-->
                                    <!--<a href="" class="btn-yellow shadow-none">Remove</a>-->
                                @endif
                            </div>
                       </div>
                    </div>
                    <div class="security-column ">
                        <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/settings/wm-google-authenticator.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>WealthMark/Google Authenticator (Recommended)</h5>
                             <span>Protect your account with a security key (e.g. Yubikey).</span>
                          </div>
                        </div>
                       <div class="security-column-right">
                          <div class="d-flex align-items-center">
                            @if(Auth::user()->is_two_factor==0)
                             <span class="bx bx-x"></span>
                             <span class="text-theme-yellow">Unset</span>
                            @else
                            <span class="bx bx-check"></span>
                            <span class="text-theme-green">On</span>
                            @endif
                          </div>
                          <div class="security-right-button">
                            @if(Auth::user()->is_two_factor==0)
                                <a href="{{ url( app()->getLocale()) }}/enable-google-authenticator" class="btn-yellow shadow-none">Enable</a>
                            @else
                                <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#change_google_authenticator" class="btn-yellow shadow-none">Change</a>&nbsp;-->
                                <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#remove_google_authenticator" class="btn-default shadow-sm">Remove</a>-->
                                <a href="javascript:void(0)" data-target-modal="change_google_authenticator" class="btn-yellow shadow-none">Change</a>&nbsp;
                                <a href="javascript:void(0)" data-target-modal="remove_google_authenticator" class="btn-default shadow-sm">Remove</a>
                            @endif
                          </div>
                       </div>
                    </div>
                    <div class="security-column ">
                       <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/settings/phone-number-verification.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Phone Number Verification</h5>
                             <span>Protect your account and transactions.</span>
                          </div>
                       </div>
                       <div class="security-column-right">
                          <div class="d-flex align-items-center">
                                @if(Auth::user()->is_phone_verified==0)
                                 <span class="bx bx-x"></span>
                                 <span class="text-theme-yellow">Not linked</span>
                                @else
                                 <span class="bx bx-check"></span>
                                 <span class="text-theme-green">{{ substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4) }}</span>
                                @endif
                          </div>
                          <div class="security-right-button">
                            @if(Auth::user()->is_phone_verified==0 && Auth::user()->phone =='')
                                <a href="{{url(app()->getLocale().'/user/enable-sms-authentication')}}" class="btn-yellow shadow-none">Enable</a>
                            @else
                                <a href="javascript:void(0)"  data-target-modal="change_phone_number" class="btn-yellow shadow-none">Change</a>
                                <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#remove_phone_number" class="btn-yellow shadow-none">Remove</a>-->
                            @endif
                          </div>
                       </div>
                    </div>
                    </div>
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    <div class="mt-2">
                       <h4 >Advanced Security</h4>
                    </div>
                    <div class="security-column ">
                       <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/security/loging-password.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Login Password</h5>
                             <span>Login password is used to log in to your account.</span>
                          </div>
                       </div>
                       <div class="security-column-right">
                          <div class="d-flex align-items-center">
                             <!--<span class="bx bx-x"></span>-->
                             <!--<span class="text-theme-yellow">Unset</span>-->
                          </div>
                          <div class="security-right-button">
                             <a href="{{ url( app()->getLocale()) }}/user/password" class="btn-yellow shadow-none">Change</a>
                          </div>
                       </div>
                    </div>
                    <div class="mt-4">
                        <div class="security-column-left">
                            <div class="security-column-icon">
                                <!--<img src="{{ asset('img/dashboard-icons/settings/crypto-withdrawal.svg') }}" alt="">-->
                            </div>
                            <div class="security-column-description">
                                <h5>Crypto Withdrawal</h5>
                            </div>

                        </div>
                        <div class="security-column border-0">
                            <div class="security-column-left">
                                 <div class="security-column-icon">
                                <img src="{{ asset('img/dashboard-icons/security/one-step-withdrawal.svg') }}" alt="">
                            </div>
                                <div class="security-column-description">
                                    <h5>One-step Withdrawal</h5>
                                    <span>When this function is turned on, you can withdraw small amount crypto to whitelisted addresses without passing 2FA verification </span>
                                </div>
                            </div>

                            <div class="security-column-right">
                                <div class="d-flex align-items-center">
                                     <span class="bx bx-x"></span>
                                     <span class="text-theme-yellow">OFF</span>
                                </div>

                                <div class="security-right-button">
                                     <a href="#" class="btn-yellow shadow-none">Enable</a>
                                </div>
                            </div>
                        </div>

                        <div class="security-column border-0">
                            <div class="security-column-left">
                                 <div class="security-column-icon">
                                <img src="{{ asset('img/dashboard-icons/settings/withdrawal-whitelist.svg') }}" alt="">
                            </div>
                                <div class="security-column-description">
                                    <h5>Withdrawal Whitelist</h5>
                                    <span>Once this function is enabled, your account will only be able to withdraw to addresses on your whitelist.</span>
                                    <a href="" class="text-warning adrs_mng">Address Management</a>
                                </div>
                            </div>
                            <div class="security-column-right">
                                <div class="d-flex align-items-center">
                                     <span class="bx bx-x"></span>
                                     <span class="text-theme-yellow">OFF</span>
                                </div>
                              <div class="security-right-button">
                                 <a href="#" class="btn-yellow shadow-none">Enable</a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="security-column">
                        <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/settings/anti-phishing.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Anti-Phishing Code</h5>
                             <span>Protect your account from phishing attempts and ensure that your notification emails are from WealthMark only.</span>
                          </div>
                        </div>
                        <div class="security-column-right">
                          <div class="d-flex align-items-center">
                             <span class="bx bx-x"></span>
                             <span class="text-theme-yellow">OFF</span>
                          </div>
                          <div class="security-right-button">
                             <a href="" class="btn-yellow shadow-none">Enable</a>
                          </div>
                        </div>
                    </div>
                    <div class="security-column ">
                        <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/security/third-party-apps-account-access.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Third-party apps with account access</h5>
                             <span>You use your Wealthmark Account to sign in to third party sites and apps.</span>
                          </div>
                        </div>
                        <div class="security-column-right">
                          <!--<div class="d-flex align-items-center">-->
                          <!--   <span class="bx bx-x"></span>-->
                          <!--   <span class="text-theme-yellow">Unset</span>-->
                          <!--</div>-->
                          <div class="security-right-button">
                             <a href="" class="btn-default shadow-none">Manage</a>
                          </div>
                        </div>
                    </div>
                    </div>
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    <div class="mt-2">
                       <h4 >Devices and Activities</h4>
                    </div>
                    <div class="security-column ">
                       <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/Security-Icon.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Device Management</h5>
                             <span>Login password is used to log in to your account.</span>
                          </div>
                       </div>
                       <div class="security-column-right">
                          <div class="d-flex align-items-center">
                             <!--<span class="bx bx-x"></span>-->
                             <!--<span class="text-theme-yellow">Unset</span>-->
                          </div>
                          <div class="security-right-button">
                             <a href="{{ url( app()->getLocale()) }}/user/password" class="btn-yellow shadow-none">Change</a>
                          </div>
                       </div>
                    </div>
                    <div class="security-column ">
                       <div class="security-column-left">
                          <div class="security-column-icon">
                             <img src="{{ asset('img/dashboard-icons/security/account-activity.svg') }}" alt="">
                          </div>
                          <div class="security-column-description">
                             <h5>Account Activity</h5>
                             <span>Last Login : {{$log_data->log_datetime}}</span>
                             <div><span>Suspicious account activity?</span> <a href="{{ url( app()->getLocale()) }}/user/disable-account" class="text-warning adrs_mng">Disable account</a></div>
                          </div>
                       </div>
                       <div class="security-column-right">
                          <div class="security-right-button">
                             <a href="{{ url( app()->getLocale()) }}/user/security/account-activity" class="btn-default shadow-none">More</a>
                          </div>
                       </div>
                    </div>


                </div>
         </div>
     </div>

</div>



    <div id="change_email_authenticator">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">


                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="border-0 text-center pb-2">
                                        <img class="warning-img" src="{{url('assets/img/warning.svg')}}">
                                    </div>
                                     <div class="modal-heading text-center mb-2 fs-16 text-dark p-2 rounded fw-bolder">Are you sure you want to change Wealthmark/email Authenticator?</div>
                                       <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</span>
                            </p>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-4">
                                    <!--<a href="javascript:void(0)" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn" >Close Modal</a>-->

                                    <a href="{{ url( app()->getLocale()) }}/change-email-authenticator" class="btn-yellow border-0 d-block">
                                        Confirm
                                    </a>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="change_phone_number">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">


                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="border-0 text-center pb-2">
                                        <img class="warning-img" src="{{url('assets/img/warning.svg')}}">
                                    </div>
                                     <div class="modal-heading text-center mb-2 fs-16 text-dark p-2 rounded fw-bolder">Are you sure you want to change Wealthmark/Phone Authenticator?</div>
                                       <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</span>
                            </p>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-4">
                                    <!--<a href="javascript:void(0)" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn" >Close Modal</a>-->

                                    <a href="{{ url( app()->getLocale()) }}/change-sms-authenticator" class="btn-yellow border-0 d-block">
                                        Confirm
                                    </a>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="remove_email_authenticator">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">


                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="border-0 text-center pb-2">
                                        <img class="warning-img" src="{{url('assets/img/warning.svg')}}">
                                    </div>
                                     <div class="modal-heading text-center mb-2 fs-16 text-dark p-2 rounded fw-bolder">Are you sure you want to change Wealthmark/email Authenticator?</div>
                                       <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</span>
                            </p>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-4">
                                    <!--<a href="javascript:void(0)" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn" >Close Modal</a>-->

                                    <a href="{{ url( app()->getLocale()) }}/change-email-authenticator" class="btn-yellow border-0 d-block">
                                        Confirm
                                    </a>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div id="remove_phone_number">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">


                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="border-0 text-center pb-2">
                                        <img class="warning-img" src="{{url('assets/img/warning.svg')}}">
                                    </div>
                                     <div class="modal-heading text-center mb-2 fs-16 text-dark p-2 rounded fw-bolder">Are you sure you want to change Mobile Number</div>
                                       <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</span>
                            </p>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-4">
                                    <!--<a href="javascript:void(0)" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn" >Close Modal</a>-->

                                    <a href="{{ url( app()->getLocale()) }}/remove-sms-authenticator" class="btn-yellow border-0 d-block">
                                        Confirm
                                    </a>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="remove_google_authenticator">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">


                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="border-0 text-center pb-2">
                                        <img class="warning-img" src="{{url('assets/img/warning.svg')}}">
                                    </div>
                                     <div class="modal-heading text-center mb-2 fs-16 text-dark p-2 rounded fw-bolder">Are you sure you want to remove Wealthmark/Google Authenticator?</div>
                                       <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</span>
                            </p>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-4">
                                    <!--<a href="javascript:void(0)" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn" >Close Modal</a>-->

                                    <a href="{{ url( app()->getLocale()) }}/remove-google-authenticator" class="btn-yellow border-0 d-block">
                                        Confirm
                                    </a>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="change_google_authenticator">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">


                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="border-0 text-center pb-2">
                                        <img class="warning-img" src="{{url('assets/img/warning.svg')}}">
                                    </div>
                                     <div class="modal-heading text-center mb-2 fs-16 text-dark p-2 rounded fw-bolder">Are you sure you want to change Wealthmark/Google Authenticator?</div>
                                       <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.</span>
                            </p>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-4">
                                    <!--<a href="javascript:void(0)" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn" >Close Modal</a>-->

                                    <a href="{{ url( app()->getLocale()) }}/change-google-authenticator" class="btn-yellow border-0 d-block">
                                        Confirm
                                    </a>
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

