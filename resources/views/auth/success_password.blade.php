<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Login</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/niceCountryInput.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
      <link href="{{ asset('assets/css/style_main.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/wealthmark_new/css/style.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/QapTcha.jquery.css') }}" type="text/css" />
      <style>
        .error_border{border:1px solid red!important;}

        .error input {
            border-color: red;
            border-width: 2px;
        }

        .success input {
            border-color: green;
            border-width: 2px;
        }

        .error span {

            color: red;
        }

        .success span {
            color: green;
        }

        span.error {
            font-size: 14px;
            color: red;
        }

        .reset-bg {
            background-color: rgb(254, 246, 216)!important;
        }
        .reset-text {
            color: rgb(240, 185, 11)!important;
        }

        .step-box-icon-svg {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            color: #ffc107;
            font-size: 24px;
            fill: #ffc107;
            width: 4em;
            height: 4em;
        }

         .warning-img{
            max-width:60px;
        }
    </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
      <main id="main">
         <section class="inner-page register">
            <div class="container">
               <div class="row">
                    <div class="col-lg-4 col-md-6 offset-md-1 offset-lg-1">
                        <div class="step-box-icon text-center mb-3 text-center">
                               <img src="{{ asset('img/auth-icons/create-account.svg') }}" class="mx-auto warning-img">
                        </div>
                        <h5 class="my-3 text-center">Password Changed</h5>
                        <p class="text-center offer-text-head">Please log in with the new password</p>
                        <div class="form-button my-4">
                            <a href="{{ url(app()->getLocale(),'login') }}" class="btn-theme btn-yellow w-100 text-center">Login</a>
                        </div>
                        <div class="container-fluid reset-bg p-4 rounded shadow-sm  ">
                            <div class="justify-content-between">
                                <div class="col-lg-12 text-left">
                                    <a href="#"><span class="offer-text-head reset-bg">
                                        <i class="bi bi-exclamation-circle-fill reset-text"></i> &nbsp;Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-1">

                    </div>
                </div>
            </div>
         </section>
      </main>
      <!-- End #main -->
      @include('template.country_language')
      <div class="copy_right text-center">
         © 2017 - 2022 wealthmark.io All rights reserved
      </div>
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>
   </body>
</html>
