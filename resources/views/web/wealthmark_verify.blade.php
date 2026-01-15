<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      @include('template.web_css')
      <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="wm-verify-top pt-4 pb-4">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                  <img src="{{ asset('img/wm-verify/verify.png') }}" class="img-fluid  w-100 max-width-350px m-auto" alt="">
               </div>
               <div class="col-lg-8 col-md-6 col-sm-10 col-xs-12">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h1 class="heading-h2 text-white text-left">Wealth Mark Verify</h1>
                     <div class="text text-left text-white">Please use Wealth Mark Verify to check whether the source officially  represents Wealth Mark. website link, email address, phone number, WeChat ID, Twitter account or Telegram ID. *Please do not contact any unofficial/non-verified sources or
                        reveal  your account details to them. For further queries, please contact
                        <a href="javascript:void(0)" class="yellow-text"> Wealth Mark Support </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sec-title text-left mt-0 mb-3">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Wealthmark Verify</h2>
                  </div>
               </div>
            </div>
            <div class="wm-faq-search wm-faq-search-1 bg-light-blue p-0 shadow">
               <div class="wm-faq-search-inner">
                  <div class="wm-faq-search-box-main">
                     <div class=" wm-faq-search-box-div">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-faq-search--icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                        </svg>
                        <input type="input" value="" placeholder="Search" maxlength="50" class="wm-faq-search-input-box">
                        <button type="button" class="btn-yellow border-0 me-2">
                        Search
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sec-title text-left mt-0 mb-3">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Security Tips</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="wm-verify-service-box">
                     <div class="wm-verify-service-icon">
                        <span>
                        <img src="{{ asset('img/general-security.svg') }}" alt="wealthamrk image">
                        </span>
                     </div>
                     <h3 class="title">General Security<br> Principles    </h3>
                     <p class="description">Wealthmark is a leading player in the Crypto ecosystem; Since its inception it has risen to provide its users with an ostentatious and secure platform.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="wm-verify-service-box">
                     <div class="wm-verify-service-icon">
                        <span>
                        <img src="{{ asset('img/common-scams-mobile.svg') }}" alt="wealthamrk image">
                        </span>
                     </div>
                     <h3 class="title">Commnon Scams on<br> Mobile Devices</h3>
                     <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="wm-verify-service-box">
                     <div class="wm-verify-service-icon">
                        <span>
                        <img src="{{ asset('img/anti-phishing.png') }}" alt="wealthamrk image">
                        </span>
                     </div>
                     <h3 class="title">Wealth Marks<br> Phishing?</h3>
                     <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="wm-verify-service-box">
                     <div class="wm-verify-service-icon">
                        <span>
                        <img src="{{ asset('img/general-security.svg') }}" alt="wealthamrk image">
                        </span>
                     </div>
                     <h3 class="title">Other <br>Principles</h3>
                     <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
