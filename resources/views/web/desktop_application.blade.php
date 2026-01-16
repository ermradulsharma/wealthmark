<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')
      <style>
         #header{
         background:white;
         }
         .heading-h2.no-before:before{
         background:transparent;
         }
         .sec-title h1.heading-h2{
         font-size: calc(30px + 6 * ((100vw - 320px) / 680));
         }
         @media(max-width:576px){
             .des-app-futures img {
                max-width: 50%;
                margin: 15%;
            }
         }
         .des-app-futures img {
            padding: 5%;
        }
    .register-now-head:hover{
        color:#fdc116;
    }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="bg-dark-blue p-2 reward-section">
         <div class="container">
            <div class="row aligh-items-center justify-content-center">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <a href="{{ url( app()->getLocale(), 'register') }}" class="reward-link d-flex text-white">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                        <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                     </svg> &nbsp;<span class="register-now-head">Register now and get verified - Enjoy Welcome Rewards up to $100!&nbsp;</span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>

                  </a>
               </div>
            </div>
         </div>
      </div>
      <section class="about-section">
         <div class="container">
            <div class="row align-items-center justify-content-center text-center">
               <div class="col-md-8 col-sm-12">
                  <div class="sec-title">
                     <span class="title">CONNECT WITH THE Wealthmark DESKTOP APP</span>
                     <h1 class="heading-h2 no-before pb-2">Enhance Your Trading Experience</h1>
                     <div class="text text-center mt-2 mb-4">
                        Download now for refined performance and increased speed; a complement to your crypto trading needs. Available for Windows, MacOS, and Linux.
                     </div>
                     <div>
                        <a href="#" class="btn btn-blue shadow"> Download Now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row align-items-center justify-content-center text-center">
               <div class="col-md-6 col-sm-8 text-center">
                  <img src="{{ asset('img/electron-enhance.png') }}" class="img-fluid  w-100" alt="CONNECT WITH THE Wealthmark DESKTOP APP" title="CONNECT WITH THE Wealthmark DESKTOP APP">
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue des-app-futures">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-6 col-sm-6 order-2 order-lg-1 order-sm-1">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">Secure & Effortless</h2>
                  </div>
                  <div class="text">
                     Safely log in via QR code support and trade online without phishing attempts. Enjoy streamlined interface displays and market updates.
                  </div>
                  <div class="yellow-text">
                     Download >
                  </div>
               </div>
                <div class="col-md-6 col-sm-6 text-center order-1 order-lg-2 order-sm-2">
                  <img src="{{ asset('img/secure-effortless.png') }}" class="img-fluid  w-100" alt="Secure & Effortless" title="Secure & Effortless">
               </div>
            </div>
         </div>
      </section>
      <section class="des-app-futures">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-6 col-sm-6 text-center">
                  <img src="{{ asset('img/verified-application-.png') }}" class="img-fluid  w-100" alt="Verified Application" title="Verified Application">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">Verified Application</h2>
                  </div>
                  <div class="text">
                     Connect to the Wealthmark platform in one click. Browse markets 24/7, and buy or sell crypto in seconds.
                  </div>
                  <div class="yellow-text">
                     Download >
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue des-app-futures">
         <div class="container">
            <div class="row align-items-center justify-content-center">

               <div class="col-md-6 col-sm-6 order-2 order-lg-1 order-sm-1">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">Multi-Account Access</h2>
                  </div>
                  <div class="text">
                     Easily switch through multiple accounts, for institutional and individual traders.
                  </div>
                  <div class="yellow-text">
                     Download >
                  </div>
               </div>
                    <div class="col-md-6 col-sm-6 text-center order-1 order-lg-2 order-sm-2">
                  <img src="{{ asset('img/multi-account-access.png') }}" class="img-fluid  w-100" alt="Multi-Account Access" title="Multi-Account Access">
               </div>
            </div>
         </div>
      </section>
      <section class="des-app-futures">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-6 col-sm-6 text-center">
                  <img src="{{ asset('img/world-wide-support.png') }}" class="img-fluid  w-100" alt="Wealthmark Support" title="World-Wide Support">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">World-Wide Support</h2>
                  </div>
                  <div class="text">
                     Comfortably browse Wealthmark with your local network provider for a hassle-free trading experience.
                  </div>
                  <div class="yellow-text ">
                     Download >
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-12 col-sm-12">
                  <div class="text-center mb-0">
                     <h2 class="heading-h2 yellow-text">Revolutionize your trading - Download the desktop app today.</h2>
                  </div>
                  <div class="text text-center text-black">
                     Comfortably browse Wealthmark with your local network provider for a hassle-free trading experience.
                  </div>
                  <div class="text-center mt-4">
                     <a href="#" class="btn btn-yellow shadow"> Download Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
