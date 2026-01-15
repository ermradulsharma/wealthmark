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
      <style>
      .tabs-groups .nav-link{
          border:0px!important;
      }
         h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
         color: #000000;
         }
         .self-service-inner.d-flex.bg-light-blue.sm-shadow.p-3.my-2 {
         font-size: 12px;
         }
         i.bi.bi-currency-exchange {
         margin-right: 10px;
         }
         .might-looking-block-2{
         display:none!important;
         }
         .might-looking-block-3{
         display:none!important;
         }
         .submit-faq-block a{
         font-size:13px;
         }
         p.self-service-para {
         font-size: 13px;
         }
         /*        .first-form-box {*/
         /*    display: none;*/
         /*}*/
         .second-form-box{
         display:none;
         }
         .chat-container {
    background-color: #ffffff61;
    border-radius: 10px;
    border: 1px solid #c5c5c5;
    box-shadow: 0px 0px 2px;
    position: relative;
}
.second-form-box ul#myTab {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: scroll;
    overflow-y: hidden;
}
#myTab li.nav-item {
    white-space: nowrap;
}
#myTab::-webkit-scrollbar {
  height: 5px;
 }

#myTab::-webkit-scrollbar {
  width: 5px;
 }

 #myTab::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
 }

#myTab::-webkit-scrollbar-thumb {
  background: rgb(154, 154, 154);
  border-radius: 10px;
 }

      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="chat-submit-request-block" id="chat-submit-request">
         <div class="container chat-container">
            <div class="first-form-box">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 colxs-12 d-flex justify-content-center align-items-center">
                     <div class="chat-submit-request row" id="chat-submit-request">
                        <div class="user-info-box col-md-8 col-lg-8 col-xs-8 col-sm-8">
                           <h1 class="text-white user-welcome-txt">Hi, Wealth Mark User </h1>
                           <p class="text-white">What can I do for you? </p>
                        </div>
                        <div class="user-profile col-md-4 col-lg-4 col-xs-4 col-xs-4">
                           <img src="{{ asset('img/chat-user-icon.png') }}" class="img-fluid user-icon"
                              alt="User image" title="User" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="chat-body-block">
                  <div class="kyc-verification-block">
                     <div class="row m-0">
                        <div class="col-md-6 col-lg-6 col-sm-6">
                           <h6>KYC Verification </h6>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                           <a href="#">
                              <h6 class="chat-proces-txt text-warning">Process <i class="bi bi-chevron-right"></i></h6>
                           </a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="verifcation-step">
                           <div class="submit-request-wizard">
                              <div class="inner-wizard-wrapper">
                                 <div class="step-box1 wizard-step"> 1 </div>
                                 <div class="seperator"></div>
                                 <div class="step-box2 wizard-step"> 2 </div>
                                 <div class="seperator"></div>
                                 <div class="step-box3 wizard-step"> 3 </div>
                              </div>
                           </div>
                           <a class="btn btn-yellow shadow d-blokc mt-3 w-100">How to Continue </a>
                        </div>
                     </div>
                  </div>
                  <div class="might-looking-block">
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between">
                           <h6>You might be looking for</h6>
                           <i class="bi bi-arrow-clockwise float-end might-looking-load-click-1" id="might-looking-load-click-1"></i>
                        </div>
                     </div>
                     <div class="row might-looking-box might-looking-block-1 ">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-2 d-flex justify-content-between mb-2">
                           <div class="might-looking-box-left">
                              <a href="javascript:void(0);" class="d-flex"><i class="bi bi-x-diamond-fill"></i><span>XRPUP & XRPDOWN Delisting Issues</span></a>
                           </div>
                           <a href="javascript:void(0);"><i class="bi bi-chevron-right"></i> </a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);" class="d-flex justify-content-start"><i class="bi bi-x-diamond-fill"></i><span>Notice of Removal of AUD related Trading Pairs</span></a>
                           <a href="javascript:void(0);"><i class="bi bi-chevron-right d-flex justify-content-end"></i></a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);"><i class="bi bi-x-diamond-fill"></i> <span>How to verify personal account</span></a>
                           <a href="javascript:void(0);" class="d-flex"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);" class="d-flex"><i class="bi bi-x-diamond-fill"></i><span> How to buy crypto with P2P</span></a>
                           <a href="javascript:void(0);"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                        </div>
                     </div>
                     <div class="row might-looking-box might-looking-block-2">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-2 d-flex justify-content-between mb-2">
                           <div class="might-looking-box-left">
                              <a href="javascript:void(0);" class="d-flex"><i class="bi bi-x-diamond-fill"></i><span>Crypto Withdrawal FAQ</span></a>
                           </div>
                           <a href="javascript:void(0);"><i class="bi bi-chevron-right"></i> </a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);" class="d-flex justify-content-start"><i class="bi bi-x-diamond-fill"></i><span>Email/Cellphone is occupied</span></a>
                           <a href="javascript:void(0);"><i class="bi bi-chevron-right d-flex justify-content-end"></i></a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);"><i class="bi bi-x-diamond-fill"></i> <span>How to Open a Futures Trading Account</span></a>
                           <a href="javascript:void(0);" class="d-flex"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);" class="d-flex"><i class="bi bi-x-diamond-fill"></i><span>P2P account disabled/Cannot Trade with P2P</span></a>
                           <a href="javascript:void(0);"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                        </div>
                     </div>
                     <div class="row might-looking-box might-looking-block-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-2 d-flex justify-content-between mb-2">
                           <div class="might-looking-box-left">
                              <a href="javascript:void(0);" class="d-flex"><i class="bi bi-x-diamond-fill"></i><span>Forgot/wrong tag for deposit</span></a>
                           </div>
                           <a href="javascript:void(0);"><i class="bi bi-chevron-right"></i> </a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);" class="d-flex justify-content-start"><i class="bi bi-x-diamond-fill"></i><span>How to modify name</span></a>
                           <a href="javascript:void(0);"><i class="bi bi-chevron-right d-flex justify-content-end"></i></a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);"><i class="bi bi-x-diamond-fill"></i> <span>Crypto deposit from the external platform to Wealthmark not credited</span></a>
                           <a href="javascript:void(0);" class="d-flex"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between mb-2">
                           <a href="javascript:void(0);" class="d-flex"><i class="bi bi-x-diamond-fill"></i><span> How to register on Wealthmark</span></a>
                           <a href="javascript:void(0);"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                        </div>
                     </div>
                  </div>
                  <div class="self-service">
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between">
                           <h6>Self Service</h6>
                           <i class="bi bi-arrow-clockwise float-end"></i>
                        </div>
                     </div>
                     <div class="row self-service-box-1">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Withdrawal Suspension Appeal</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Fiat Withdrawal Not Received</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Reset two-factor authenticator</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Report Compromised Account</p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <a class="btn btn-default shadow-sm d-blokc mt-3 w-100" id="service-view-all">View All</a>
                        </div>
                     </div>
                  </div>
                  <div class="submit-faq-block">
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <h6>&nbsp;&nbsp;&nbsp;FAQ</h6>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <a href="javascript:void(0);"> <i class="bi bi-arrow-clockwise float-end"></i></a>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"> <i class="bi bi-file-earmark-text"></i>&nbsp; Getting Started</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <i class="bi bi-chevron-right d-flex justify-content-end"></i>
                           </svg>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"> <i class="bi bi-person-bounding-box"></i>&nbsp; Account Functions</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <a href="javascript:void(0);"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                           </svg>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"> <i class="bi bi-box-arrow-down"></i>&nbsp; Crypto Deposit / Withdrawal</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <a href="javascript:void(0);">  <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                           </svg>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"><i class="bi bi-currency-bitcoin"></i>&nbsp; Buy Crypto (Fiat/P2P)</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <a href="javascript:void(0);"> <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                           </svg>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"> <i class="bi bi-graph-up-arrow"></i>&nbsp; Spot & Margin Trading</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <a href="javascript:void(0);">  <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                           </svg>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"> <i class="bi bi-globe"></i>&nbsp; Website Activities / Promotion</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block"> 
                           <a href="javascript:void(0);">  <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                           </svg>
                        </div>
                        <hr>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                           <a href="javascript:void(0);"> <i class="bi bi-megaphone"></i>&nbsp; News / Announcement</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 refresh-icon-block">
                           <a href="javascript:void(0);">  <i class="bi bi-chevron-right d-flex justify-content-end"></i> </a>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="row" id="btn-footer-row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <a id="chat-now" class="btn btn-blue shadow float-end"> Chat Now </a>
                        <a id="get-support" class="btn btn-blue shadow"> Get Support </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="second-form-box">
               <div class="chat-body-block">
                  <div class="self-service mt-3">
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex justify-content-between">
                           <h6>Self Service</h6>
                           <i class="bi bi-arrow-clockwise float-end"></i>
                        </div>
                     </div>
                     <div class="row self-service-box-1">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Withdrawal Suspension Appeal</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Fiat Withdrawal Not Received</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Reset two-factor authenticator</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="self-service-inner d-flex bg-light-blue sm-shadow p-3 my-2">
                              <i class="bi bi-currency-exchange"></i>
                              <p class="self-service-para">Report Compromised Account</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tabs-groups">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="true">Account</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="kyc-tab" data-bs-toggle="tab" data-bs-target="#kyc" type="button" role="tab" aria-controls="kyc" aria-selected="false">KYC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="crypto-deposit-tab" data-bs-toggle="tab" data-bs-target="#crypto-deposit" type="button" role="tab" aria-controls="crypto-deposit" aria-selected="false">Crypto Deposit / Withdrawal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="buy-sell-crypto-tab" data-bs-toggle="tab" data-bs-target="#buy-sell-crypto" type="button" role="tab" aria-controls="buy-sell-crypto" aria-selected="true">Buy/Sell Crypto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">Other</button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="user-chat-ui" id="user-chat-ui-section">
         <div class="container py-5">
            <div class="row d-flex justify-content-center">
               <div class="col-md-8 col-lg-6 col-xl-4">
                  <div class="card" id="chat1" style="border-radius: 15px;">
                     <div class="card-header d-flex justify-content-between align-items-center p-3 bg-primary text-white border-bottom-0"
                        style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <i class="fas fa-angle-left"></i>
                        <p class="mb-0 fw-bold text-white">Wealth Mark Live chat</p>
                        <i class="fas fa-times"></i>
                     </div>
                     <div class="card-body">
                        <div class="d-flex flex-row justify-content-start mb-4">
                           <img src="{{ asset('img/ava2-bg.webp') }}"
                              class="img-fluid user-icon-chat" alt="chat-img" />
                           <div class="p-3 ms-3 user-chat-txt">
                              <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the
                                 video
                                 below.
                              </p>
                           </div>
                        </div>
                        <div class="d-flex flex-row justify-content-end mb-4">
                           <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                              <p class="small mb-0">Thank you, I really like your product.</p>
                           </div>
                           <img src="{{ asset('img/ava1-bg.webp') }}"
                              class="img-fluid user-icon-chat" alt="chat-img" />
                        </div>
                        <div class="d-flex flex-row justify-content-start mb-4">
                           <img src="{{ asset('img/ava1-bg.webp') }}"
                              class="img-fluid user-icon-chat" alt="chat-img" />
                           <div class="ms-3" style="border-radius: 15px;">
                              <div class="bg-image">
                                 <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/screenshot1.webp"
                                    style="border-radius: 15px;" alt="video">
                                 <a href="#!">
                                    <div class="mask"></div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="d-flex flex-row justify-content-start mb-4">
                           <img src="{{ asset('img/ava2-bg.webp') }}"
                              class="img-fluid user-icon-chat" alt="chat-img" />
                           <div class="p-3 ms-3"
                              style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                              <p class="small mb-0">...</p>
                           </div>
                        </div>
                        <div class="form-outline">
                           <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                           <label class="form-label" for="textAreaExample">Type your message</label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script></script>
      <script>
         $(document).ready(function(){
                   $("#service-view-all").click(function(){
                     $(".second-form-box").show();
                     $(".first-form-box").hide();
                 });
         });
      </script>
      <script>
         $(document).ready(function() {
             $("#chat-now").click(function() {
                 $("#chat-submit-request").hide();
                 $("#user-chat-ui-section").show();
             });
             $("#get-support").click(function() {
                 $("#chat-submit-request").show();
                 $("#user-chat-ui-section").hide();
             });
         });
      </script>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>