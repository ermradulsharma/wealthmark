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
         @media(max-width:576px){
         .blinking-txt-wrapper {
         display: block!important;
         }
         }
         .blinking-txt-wrapper{
         display:flex;
         justify-content:center;
         align-items:center;
         }
         .start-trading-now-txt{
         text-transform:uppercase;
         -webkit-text-stroke: thick;
         display:flex;
         justify-content:center;
         align-items:center;
         }
         ul.start-trading-now-txt li{
         list-style: none;
         letter-spacing: 5px;
         font-family: fantasy;
         color:#484848;
         animation: ani 1.2s linear infinite;
         }
         ul.start-trading-now-txt li:nth-child(1){
         animation-delay: .2s;
         }
         ul.start-trading-now-txt li:nth-child(2){
         animation-delay: .6s;
         }
         ul.start-trading-now-txt li:nth-child(3){
         animation-delay: .8s;
         }
         ul.start-trading-now-txt li:nth-child(4){
         animation-delay: 1.0s;
         }
         ul.start-trading-now-txt li:nth-child(5){
         animation-delay: 1.4s;
         }
         ul.start-trading-now-txt li:nth-child(6){
         animation-delay: 1.8s;
         }
         ul.start-trading-now-txt li:nth-child(7){
         animation-delay: 1.12s;
         }
         ul.start-trading-now-txt li:nth-child(8){
         animation-delay: .2s;
         }
         ul.start-trading-now-txt li:nth-child(9){
         animation-delay: .6s;
         }
         ul.start-trading-now-txt li:nth-child(10){
         animation-delay: .8s;
         }
         ul.start-trading-now-txt li:nth-child(11){
         animation-delay: 1.0s;
         }
         ul.start-trading-now-txt li:nth-child(12){
         animation-delay: 1.4s;
         }
         ul.start-trading-now-txt li:nth-child(13){
         animation-delay: 1.8s;
         }
         ul.start-trading-now-txt li:nth-child(14){
         animation-delay: 1.12s;
         }
         ul.start-trading-now-txt li:nth-child(15){
         animation-delay: .2s;
         }
         ul.start-trading-now-txt li:nth-child(16){
         animation-delay: .6s;
         }
         ul.start-trading-now-txt li:nth-child(17){
         animation-delay: .8s;
         }
         ul.start-trading-now-txt li:nth-child(18){
         animation-delay: 1.0s;
         }
         @keyframes ani {
         0%{
         color:#f8a532
         text-shadow: none;
         }
         90%{
         color:#f8a532;
         text-shadow: none;
         }
         100%{
         color:#fec00f;
         text-shadow: 0 0 7px #fec00f,0 0 70px #fff123;
         }
         }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="bg-light-theme p-2">
         <div class="container">
            <div class="row aligh-items-center justify-content-center">
               <div class="col-md-6">
                  <a href="{{ url( app()->getLocale(), 'register') }}" class="reward-link">
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                        <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                     </svg>
                     <div class="reward-text text-black">Register now and get verified - Enjoy Welcome Rewards up to $100!</div>
                     <div class="reward-div-arrow">
                        <svg  viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <section id="p2p" class="breadcrumbs shadow-sm">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center  order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="top-heading">Wealthmark <span class="yellow-text"> P2Pro </span> Merchant Program</h1>
                  <h3 class="title">Exclusive program for licensed partners</h3>
                  <p class="top-p">Trusted by millions of users worldwide, Wealthmark P2P provides a safe platform to conduct crypto trades in 300+ payment methods and 70+ fiat currencies. Users can easily buy, sell and trade crypto directly with other users, while setting their preferred prices and payment methods in an open crypto marketplace.</p>
                  <div class="mt-3">
                     <a href="#" class="btn btn-yellow shadow"> Apply Now </a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 text-center order-lg-2 hero-img p-4" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('assets/img/p2p-pro_banner.png') }}" class="img-fluid animated" alt="P2P Merchant Banner" title="P2P Merchant Banner">
               </div>
            </div>
         </div>
      </section>
      <!-- ADVERTISERS SERVICE CARD -->
      <section id="advertisers" class="advertisers-service-sec pt-5 pb-5 bg-light-blue">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-12 col-sm-12">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">Discover how you can benefit from PRO status</h2>
                  </div>
               </div>
            </div>
            <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
               <div class="col">
                  <div class="service-card">
                     <div class="icon-wrapper shadow-sm">
                        <img src="{{ asset('assets/img/p2p-merchant-application/special-pro-badge.png') }}" class="img-fluid" alt="Special “PRO” Badge" title="Special “PRO” Badge" >
                     </div>
                     <h3 class="yellow-text">Special “PRO” Badge</h3>
                     <div class="text">
                        Users will be able to recognize your partner status by the “PRO” badge placed next to your username.
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="service-card ">
                     <div class="icon-wrapper shadow-sm">
                        <img src="{{ asset('assets/img/p2p-merchant-application/customized-profile-page.png') }}" class="img-fluid" alt="Customized Profile Page"  title="Customized Profile Page">
                     </div>
                     <h3 class="yellow-text">Customized Profile Page</h3>
                     <div class="text">
                        Customized Profile Page with your company Logo, to build your brand around and help you stand out amongst your competition.
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="service-card">
                     <div class="icon-wrapper shadow-sm">
                        <img src="{{ asset('assets/img/p2p-merchant-application/biggest-p2p-crypto.png') }}" class="img-fluid" alt="Biggest P2P Crypto" title="Biggest P2P Crypto">
                     </div>
                     <h3 class="yellow-text">Biggest P2P crypto</h3>
                     <div class="text">
                        Benefit of user traffic from the world's biggest P2P crypto exchange platform and increase your sales.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row align-items-center justify-content-center mb-5">
               <div class="col-md-6 col-sm-6 mb-4 d-flex justify-content-center">
                  <img src="{{ asset('assets/img/p2p-merchant-application/dedicated-client-support.png') }}" class="img-fluid max-width-300px" alt="Dedicated client support" title="Dedicated client support">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">Dedicated client support</h2>
                  </div>
                  <div class="text">
                     As a P2Pro merchant you will benefit from individual support from our experienced team.
                  </div>
                  <div class="text">
                     Our team will provide you with express handling of appeals through additional communication channel, extra features for your account, and lower fees.
                  </div>
               </div>
            </div>
            <div class="row align-items-center justify-content-center">
               <div class="col-md-6 col-sm-6 order-md-last mb-4 d-flex justify-content-center">
                  <img src="{{ asset('assets/img/p2p-merchant-application/pro-merchant-account.png') }}" class="img-fluid max-width-300px" alt="Apply for PRO merchant account" title="Apply for PRO merchant account">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left">
                     <h2 class="heading-h2">Apply for PRO merchant account</h2>
                  </div>
                  <div class="text">
                     Are you an existing P2P merchant or new client with existing crypto-license and extensive experience in P2P trading?
                  </div>
                  <div class="text">
                     Please apply for our program for professional local exchangers and enjoy all the benefits of PRO merchant status on leading peer-to-peer platform!
                  </div>
                  <div class="mt-4">
                     <a href="" class="btn-yellow"> Apply Now</a>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <section class="bg-dark-blue">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="title text-white blinking-txt-wrapper">
                     <ul class="start-trading-now-txt m-3">
                        <li>S</li>
                        <li>t</li>
                        <li>a</li>
                        <li>r</li>
                        <li>t</li>
                     </ul>
                     <ul class="start-trading-now-txt m-3">
                        <li>P</li>
                        <li>2</li>
                        <li>P</li>
                     </ul>
                     <ul class="start-trading-now-txt m-3">
                        <li>t</li>
                        <li>r</li>
                        <li>a</li>
                        <li>d</li>
                        <li>i</li>
                        <li>n</li>
                        <li>g</li>
                     </ul>
                     <ul class="start-trading-now-txt m-3">
                        <li>n</li>
                        <li>o</li>
                        <li>w</li>
                     </ul>
                  </h2>
                  <a href="#" class="btn-yellow"> Apply Now</a>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
