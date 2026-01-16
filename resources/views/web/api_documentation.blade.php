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
      <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
      <style>
         .parallax-api-documentation {
            background-image: url("{{ asset('img/assets/img/api-documentatopm-parallx-3.jpg') }}");
            min-height: 700px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /*filter: grayscale(1);*/
            }
            .parallax-api-documentation2 {
            background-image: url("{{ asset('img/assets/img/api-documentation_img_parallax-2.jpg') }}");
            min-height: 700px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /*filter: grayscale(1);*/
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="api-banner" id="api-documentation-section">
         <div class="container mt-3">
            <div class="row">
               <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 order-2 order-lg-1" data-aos="fade-up"
                  data-aos-delay="200">
                  <h5 class="text-uppercase">Welcome to our</span></h5>
                  <h1 class="top-heading">Application Programming Interface </h1>
                  <h4>Unlimited Opportunities with One Key.</h4>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 order-1 order-lg-2" data-aos="zoom-in"
                  data-aos-delay="200">
                  <img src="{{ asset('img/api.png') }}" class="img-fluid animated"
                     alt="API documentation banner" title="Application Programing Interface" />
               </div>
            </div>
         </div>
      </section>
      <section class="api-trading-connectivity">
         <div class="container">
            <div class="row first-row">
               <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 order-2 order-lg-1">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                           <path d="M44.5 36.5H40.5V10.5H44.5V36.5Z" fill="#CACED3"></path>
                           <path d="M28.5 33L36.5 33L36.5 29L28.5 29L28.5 33Z"
                              fill="url(#paint0_linear_1213_5262)">
                           </path>
                           <path d="M28.5 19L36.5 19L36.5 15L28.5 15L28.5 19Z"
                              fill="url(#paint1_linear_1213_5262)">
                           </path>
                           <path d="M11 22L2.5 22L2.5 26L11 26L11 22Z" fill="url(#paint2_linear_1213_5262)"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9 24C9 31.1797 14.8407 37 22.0455 37H28.5V11H22.0455C14.8407 11 9 16.8203 9 24Z"
                              fill="url(#paint3_linear_1213_5262)"></path>
                           <path d="M24.5 37H22.5V11H24.5V37Z" fill="url(#paint4_linear_1213_5262)"></path>
                           <path opacity="0.3" d="M4.5 6.5L7.5 9.5L10.5 6.5L7.5 3.5L4.5 6.5Z" fill="#AEB4BC">
                           </path>
                           <path opacity="0.3" d="M15 42L17 44L19 42L17 40L15 42Z" fill="#AEB4BC"></path>
                           <path opacity="0.3" d="M35 41H36.5V39.5H35V41Z" fill="#AEB4BC"></path>
                           <defs>
                              <linearGradient id="paint0_linear_1213_5262" x1="36.5" y1="31" x2="28.5" y2="31"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                              <linearGradient id="paint1_linear_1213_5262" x1="36.5" y1="17" x2="28.5" y2="17"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                              <linearGradient id="paint2_linear_1213_5262" x1="11" y1="24" x2="2.5" y2="24"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                              <linearGradient id="paint3_linear_1213_5262" x1="18.75" y1="37" x2="18.75" y2="11"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint4_linear_1213_5262" x1="23.5" y1="11" x2="23.5" y2="37"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Trading <span class="yellow-text"> Connectivity</span>
                     </h2>
                  </div>
                  <div class="text">We offer access to Spot, Margin, Futures and Options API trading for over 300
                     Digital and Fiat
                     currencies. API trading provides a testing environment, API documentation, and Sample Code in 6
                     languages. Suitable for HFT, Social Trader and Strategy trader.
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 order-1 order-lg-2 d-flex jusitfy-content-between align-items-center connectivity-api-wrapper">
                  <img src="{{ asset('img/connectivity-api-img.png') }}" class="img-fluid connectivity-api-img"
                     alt="Trading Connectivity"  title="Trading Connectivity"/>
               </div>
            </div>
         </div>
      </section>
      <section class="api-trading-block div-1">
         <div class="container">
            <div class="row mt-5">
               <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12">
                  <div class="spot-trading-box">
                     <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Spot <span class="yellow-text">Trading</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Spot </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Margin </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Covnert </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Spot </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Margin </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Covnert </h4>
                  </div>
               </div>
            </div>
            <div class="row mt-1">
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Spot </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Margin </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Covnert </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Spot </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Margin </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Covnert </h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row mt-1">
               <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12">
                  <div class="spot-trading-box">
                     <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Derivatives <span class="yellow-text">Trading</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>USDⓈ-M </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>COIN-M </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>BLVT </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M29.167 19.792a7.292 7.292 0 1114.583 0 7.292 7.292 0 01-14.583 0z"
                              fill="url(#users-g_svg__paint0_linear_2218_19600)"></path>
                           <path d="M39.584 31.25h-6.25v10.417h12.5V37.5a6.25 6.25 0 00-6.25-6.25z" fill="#76808F">
                           </path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.291 15.625A9.375 9.375 0 1116.666 25a9.375 9.375 0 01-9.375-9.375z"
                              fill="url(#users-g_svg__paint1_linear_2218_19600)"></path>
                           <path
                              d="M29.166 37.5a8.333 8.333 0 00-8.333-8.333h-8.334A8.333 8.333 0 004.166 37.5v4.167h25V37.5z"
                              fill="#76808F"></path>
                           <defs>
                              <linearGradient id="users-g_svg__paint0_linear_2218_19600" x1="36.458" y1="27.083"
                                 x2="36.458" y2="12.5" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="users-g_svg__paint1_linear_2218_19600" x1="16.666" y1="25"
                                 x2="16.666" y2="6.25" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Vanilla </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Algo </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Support </h4>
                  </div>
               </div>
            </div>
            <div class="row mt-1">
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Spot </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Margin </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Covnert </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path transform="matrix(1 0 0 -1 3 19)" fill="url(#business-development-g_svg__paint0)"
                              d="M0 0h3v4H0z"></path>
                           <path fill="#76808F" d="M8 11h3v10H8zM13 6h3v15h-3zM18 3h3v18h-3z"></path>
                           <path transform="matrix(1 0 0 -1 8 21)" fill="url(#business-development-g_svg__paint1)"
                              d="M0 0h3v6H0z"></path>
                           <path transform="matrix(1 0 0 -1 13 21)" fill="url(#business-development-g_svg__paint2)"
                              d="M0 0h3v10H0z"></path>
                           <path transform="matrix(1 0 0 -1 18 21)" fill="url(#business-development-g_svg__paint3)"
                              d="M0 0h3v15H0z"></path>
                           <path fill="#76808F" d="M3 19h18v2H3zM3 3h2v2H3zM3 7h2v2H3zM3 11h2v2H3z"></path>
                           <defs>
                              <linearGradient id="business-development-g_svg__paint0" x1="1.5" y1="0" x2="1.5"
                                 y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint1" x1="1.5" y1="0" x2="1.5"
                                 y2="6" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint2" x1="1.5" y1="0" x2="1.5"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="business-development-g_svg__paint3" x1="1.5" y1="0" x2="1.5"
                                 y2="15" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Spot </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 50 50" fill="none" class="faq-inner-svg">
                           <path
                              d="M26.786 8.333c8.054 0 14.584 6.53 14.584 14.584h4.166c0-10.356-8.394-18.75-18.75-18.75v4.166z"
                              fill="#76808F"></path>
                           <path
                              d="M35.416 14.583V37.5h-4.167V21.696l-6.755 6.756-2.947-2.947 6.756-6.755H12.499v-4.167h22.917zM4.88 42.172l8.334-8.333 2.946 2.946-8.333 8.334-2.946-2.947z"
                              fill="#76808F"></path>
                           <path
                              d="M10.268 39.731c8.136 8.136 21.327 8.136 29.463 0L10.268 10.27c-8.136 8.136-8.136 21.327 0 29.462z"
                              fill="url(#communications-g_svg__paint0_linear_2218_19589)"></path>
                           <defs>
                              <linearGradient id="communications-g_svg__paint0_linear_2218_19589" x1="21.948"
                                 y1="45.833" x2="21.948" y2="10.269" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Margin </h4>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="spot-trading-block">
                     <div class="spot-icon-block">
                        <svg viewBox="0 0 24 24" fill="none" class="faq-inner-svg">
                           <path
                              d="M6 10a6 6 0 1112 0v7h2v-7a8 8 0 10-16 0v7h2v-7zM12 18a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"
                              fill="#76808F"></path>
                           <path d="M.5 13.5A3.5 3.5 0 004 17v-7a3.5 3.5 0 00-3.5 3.5z"
                              fill="url(#customer-service-g_svg__paint0_linear)"></path>
                           <path d="M23.5 13.5A3.5 3.5 0 0120 17v-7a3.5 3.5 0 013.5 3.5z"
                              fill="url(#customer-service-g_svg__paint1_linear)"></path>
                           <defs>
                              <linearGradient id="customer-service-g_svg__paint0_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="customer-service-g_svg__paint1_linear" x1="12" y1="17" x2="12"
                                 y2="10" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <h4>Covnert </h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="parallax-api-documentation"></div>
      <section class="api-trading-connectivity">
         <div class="container">
            <div class="row first-row">
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mb-4">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                           <path d="M4.5 38H14.5V32H4.5V38Z" fill="url(#paint0_linear_1927_6034)"></path>
                           <path d="M19.5 42H29.5V32H19.5V42Z" fill="#76808F"></path>
                           <path d="M4.5 42H14.5V38H4.5V42Z" fill="#76808F"></path>
                           <path d="M19.5 16H29.5V32H19.5V16Z" fill="url(#paint1_linear_1927_6034)"></path>
                           <path d="M34.5 24H44.5V4H34.5V24Z" fill="url(#paint2_linear_1927_6034)"></path>
                           <path d="M34.5 42H44.5V24H34.5V42Z" fill="#76808F"></path>
                           <defs>
                              <linearGradient id="paint0_linear_1927_6034" x1="9.5" y1="38" x2="9.5" y2="32"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint1_linear_1927_6034" x1="24.5" y1="32" x2="24.5" y2="16"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint2_linear_1927_6034" x1="39.5" y1="24" x2="39.5" y2="4"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Market <span class="yellow-text"> Data</span>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h6>Market Data at your fingertips with Wealth Mark API and Websocket Services & K-lines, Premium Index, Order book and other historical data one click. </h6>
                  <div class="api-market-data-inner mt-5 mb-1">
                     <div class="market-data-wrapper">
                        <div class="market-data-inner m-1"><span>Market Data</span></div>
                        <div class="market-data-inner m-1"><span>Websocket</span></div>
                        <div class="market-data-inner m-1"><span>Historical Data</span></div>
                        <div class="market-data-inner m-1"><span>Others</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="investment-services" id="investment-services">
         <div class="container">
            <div class="row first-row">
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mb-4">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                           <path d="M4.5 38H14.5V32H4.5V38Z" fill="url(#paint0_linear_1927_6034)"></path>
                           <path d="M19.5 42H29.5V32H19.5V42Z" fill="#76808F"></path>
                           <path d="M4.5 42H14.5V38H4.5V42Z" fill="#76808F"></path>
                           <path d="M19.5 16H29.5V32H19.5V16Z" fill="url(#paint1_linear_1927_6034)"></path>
                           <path d="M34.5 24H44.5V4H34.5V24Z" fill="url(#paint2_linear_1927_6034)"></path>
                           <path d="M34.5 42H44.5V24H34.5V42Z" fill="#76808F"></path>
                           <defs>
                              <linearGradient id="paint0_linear_1927_6034" x1="9.5" y1="38" x2="9.5" y2="32"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint1_linear_1927_6034" x1="24.5" y1="32" x2="24.5" y2="16"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint2_linear_1927_6034" x1="39.5" y1="24" x2="39.5" y2="4"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Investment &<span class="yellow-text"> Services</span>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Manage and grow your digital wealth all in one place.</h5>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        Market Data
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        Websocket
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        Wallet
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        Saving
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        Minning
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        BSwap
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        C2C
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        NFT
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        WM Code
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        Websocket
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        Pay
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        Fiat
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        Stacking
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        BM NFT
                     </a>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="investment-service-data-inner">
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 25 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.5 5h-3v14h3V5zm-15 9h-3v5h3v-5zm7-6h3v11h-3V8zm-2 3h-3v8h3v-8z"
                              fill="currentColor"></path>
                        </svg>
                        C2C
                     </a>
                     <a class="alert alert-warning">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 5h18v4h-6v5.5h-1.75v2H15V19H7v-2.5h3.75v-2H3V5zm14 6v8h4v-8h-4z"
                              fill="currentColor"></path>
                        </svg>
                        NFT
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="vip-and-institutional" id="vip_institutional">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex">
                  <img src="{{ asset('img/vip-ins.svg') }}" class="img-fluid float-end vip-instifutional-img"
                     alt="VIP Institutional"  title="VIP Institutional"/>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <h4>
                     <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path opacity="0.3" d="M43.3906 27.25L44.6406 26L45.8906 27.25L44.6406 28.5L43.3906 27.25Z"
                           fill="#AEB4BC"></path>
                        <path opacity="0.3" d="M12.3906 4.75L14.1406 3L15.8906 4.75L14.1406 6.5L12.3906 4.75Z"
                           fill="#AEB4BC"></path>
                        <path opacity="0.3" d="M3.89062 34.5L4.89062 33.5L5.89062 34.5L4.89062 35.5L3.89062 34.5Z"
                           fill="#AEB4BC"></path>
                        <path d="M6.89063 40L6.89063 38L42.8906 38L42.8906 40L6.89063 40Z" fill="#76808F"></path>
                        <rect opacity="0.3" x="10.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <rect opacity="0.3" x="18.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <rect opacity="0.3" x="26.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <rect opacity="0.3" x="34.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M42.8905 17L24.8906 3L6.89062 17V21L42.8906 21L42.8905 17ZM22.3906 13.5L24.8906 16L27.3906 13.5L24.8906 11L22.3906 13.5Z"
                           fill="url(#paint0_linear_1325_4619)"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M24.8906 18.5C27.652 18.5 29.8906 16.2614 29.8906 13.5C29.8906 10.7386 27.652 8.5 24.8906 8.5C22.1292 8.5 19.8906 10.7386 19.8906 13.5C19.8906 16.2614 22.1292 18.5 24.8906 18.5ZM22.3906 13.5L24.8906 16L27.3906 13.5L24.8906 11L22.3906 13.5Z"
                           fill="#76808F"></path>
                        <path d="M6.89063 40L6.89063 44L42.8906 44L42.8906 40L6.89063 40Z"
                           fill="url(#paint1_linear_1325_4619)"></path>
                        <defs>
                           <linearGradient id="paint0_linear_1325_4619" x1="24.8906" y1="21" x2="24.8906" y2="3"
                              gradientUnits="userSpaceOnUse">
                              <stop stop-color="#F0B90B"></stop>
                              <stop offset="1" stop-color="#F8D33A"></stop>
                           </linearGradient>
                           <linearGradient id="paint1_linear_1325_4619" x1="6.89063" y1="42" x2="42.8906" y2="42"
                              gradientUnits="userSpaceOnUse">
                              <stop stop-color="#F0B90B"></stop>
                              <stop offset="1" stop-color="#F8D33A"></stop>
                           </linearGradient>
                        </defs>
                     </svg>
                     VIP & Institutional
                  </h4>
                  <div class="text">Wealth Mark VIP and Institutional offers access to professional services including
                     better fees, higher trading limits, flexible account management function and OTC services. Our
                     experienced team works closely with a wide range of market participants to provide bespoke
                     trading solutions.
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                     <span class="col">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12 8.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zM3 17a3 3 0 013-3h5a3 3 0 013 3v3H3v-3zM21 5h-5v3h5V5zm0 5.002h-5v3h5v-3zm-5 5.002h5v3h-5v-3z"
                              fill="currentColor"></path>
                        </svg>
                        Sub Account
                     </span>
                     <span  class="col">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                           <mask id="path-1-inside-1_2616_1648" fill="white">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M19.625 6H9.5V30H27.5V13.9563L19.625 6ZM14 13.5H18.5V16.5H14V13.5ZM23 19.5V22.5H14V19.5H23Z">
                              </path>
                           </mask>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19.625 6H9.5V30H27.5V13.9563L19.625 6ZM14 13.5H18.5V16.5H14V13.5ZM23 19.5V22.5H14V19.5H23Z"
                              fill="#B7BDC6"></path>
                           <path
                              d="M9.5 6V4H7.5V6H9.5ZM19.625 6L21.0465 4.59307L20.4595 4H19.625V6ZM9.5 30H7.5V32H9.5V30ZM27.5 30V32H29.5V30H27.5ZM27.5 13.9563H29.5V13.1339L28.9215 12.5494L27.5 13.9563ZM18.5 13.5H20.5V11.5H18.5V13.5ZM14 13.5V11.5H12V13.5H14ZM18.5 16.5V18.5H20.5V16.5H18.5ZM14 16.5H12V18.5H14V16.5ZM23 22.5V24.5H25V22.5H23ZM23 19.5H25V17.5H23V19.5ZM14 22.5H12V24.5H14V22.5ZM14 19.5V17.5H12V19.5H14ZM9.5 8H19.625V4H9.5V8ZM11.5 30V6H7.5V30H11.5ZM27.5 28H9.5V32H27.5V28ZM25.5 13.9563V30H29.5V13.9563H25.5ZM18.2035 7.40693L26.0785 15.3633L28.9215 12.5494L21.0465 4.59307L18.2035 7.40693ZM18.5 11.5H14V15.5H18.5V11.5ZM20.5 16.5V13.5H16.5V16.5H20.5ZM14 18.5H18.5V14.5H14V18.5ZM12 13.5V16.5H16V13.5H12ZM25 22.5V19.5H21V22.5H25ZM14 24.5H23V20.5H14V24.5ZM12 19.5V22.5H16V19.5H12ZM23 17.5H14V21.5H23V17.5Z"
                              fill="#B7BDC6" mask="url(#path-1-inside-1_2616_1648)"></path>
                        </svg>
                        TAX Report API
                     </span>
                  </div>
                  <br /> <span class="btn btn-yellow shadow mt-2">Learn More </span>
               </div>
            </div>
         </div>
      </section>
      <section class="developers-block" id="developers-sections">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-2 order-lg-1">
                  <h4>
                     <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path opacity="0.3" d="M43.3906 27.25L44.6406 26L45.8906 27.25L44.6406 28.5L43.3906 27.25Z"
                           fill="#AEB4BC"></path>
                        <path opacity="0.3" d="M12.3906 4.75L14.1406 3L15.8906 4.75L14.1406 6.5L12.3906 4.75Z"
                           fill="#AEB4BC"></path>
                        <path opacity="0.3" d="M3.89062 34.5L4.89062 33.5L5.89062 34.5L4.89062 35.5L3.89062 34.5Z"
                           fill="#AEB4BC"></path>
                        <path d="M6.89063 40L6.89063 38L42.8906 38L42.8906 40L6.89063 40Z" fill="#76808F"></path>
                        <rect opacity="0.3" x="10.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <rect opacity="0.3" x="18.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <rect opacity="0.3" x="26.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <rect opacity="0.3" x="34.8906" y="21" width="4" height="17" fill="#AEB4BC"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M42.8905 17L24.8906 3L6.89062 17V21L42.8906 21L42.8905 17ZM22.3906 13.5L24.8906 16L27.3906 13.5L24.8906 11L22.3906 13.5Z"
                           fill="url(#paint0_linear_1325_4619)"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M24.8906 18.5C27.652 18.5 29.8906 16.2614 29.8906 13.5C29.8906 10.7386 27.652 8.5 24.8906 8.5C22.1292 8.5 19.8906 10.7386 19.8906 13.5C19.8906 16.2614 22.1292 18.5 24.8906 18.5ZM22.3906 13.5L24.8906 16L27.3906 13.5L24.8906 11L22.3906 13.5Z"
                           fill="#76808F"></path>
                        <path d="M6.89063 40L6.89063 44L42.8906 44L42.8906 40L6.89063 40Z"
                           fill="url(#paint1_linear_1325_4619)"></path>
                        <defs>
                           <linearGradient id="paint0_linear_1325_4619" x1="24.8906" y1="21" x2="24.8906" y2="3"
                              gradientUnits="userSpaceOnUse">
                              <stop stop-color="#F0B90B"></stop>
                              <stop offset="1" stop-color="#F8D33A"></stop>
                           </linearGradient>
                           <linearGradient id="paint1_linear_1325_4619" x1="6.89063" y1="42" x2="42.8906" y2="42"
                              gradientUnits="userSpaceOnUse">
                              <stop stop-color="#F0B90B"></stop>
                              <stop offset="1" stop-color="#F8D33A"></stop>
                           </linearGradient>
                        </defs>
                     </svg>
                     Made for Developers
                  </h4>
                  <div class="text">Facing a problem in development? Find help from the developer community. We would
                     like to hear from you! Share your thoughts with us.
                  </div>
                  <ul class="d-flex">
                     <li class="text-primary text-uppercase"><b>1.Forum</b> &nbsp;&nbsp;&nbsp;</li>
                     <li class="text-primary text-uppercase"><b>2.Telegram</b> &nbsp;&nbsp;&nbsp;</li>
                     <li class="text-primary text-uppercase"><b>3.Survey</b> </li>
                  </ul>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-1 order-lg-2">
                  <img src="{{ asset('img/dev-icon.svg') }}" class="img-fluid d-block mx-auto"
                     alt="Made for developers" title="Made for Developers" />
               </div>
            </div>
         </div>
      </section>
      <section class="link-program" id="link-program-section">
         <div class="container">
            <div class="row first-row">
               <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-2 order-lg-1">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                           <path d="M25 4H23V32L18 37H11V42H37V37H30L25 32V4Z"
                              fill="url(#paint0_linear_1325_4604)"></path>
                           <path
                              d="M11.5 29.5C16.7467 29.5 21 25.2467 21 20L2 20C2 25.2467 6.25329 29.5 11.5 29.5Z"
                              fill="url(#paint1_linear_1325_4604)"></path>
                           <path
                              d="M36.5 29.5C41.7467 29.5 46 25.2467 46 20L27 20C27 25.2467 31.2533 29.5 36.5 29.5Z"
                              fill="url(#paint2_linear_1325_4604)"></path>
                           <path opacity="0.3" d="M11.5 10.5L2 20H21L11.5 10.5Z" fill="#AEB4BC"></path>
                           <path opacity="0.3" d="M36.5 10.5L27 20H46L36.5 10.5Z" fill="#AEB4BC"></path>
                           <rect x="9" y="10.5" width="2" height="30" transform="rotate(-90 9 10.5)"
                              fill="url(#paint3_linear_1325_4604)"></rect>
                           <circle r="3" transform="matrix(1 0 0 -1 24 9.5)" fill="url(#paint4_linear_1325_4604)">
                           </circle>
                           <path d="M22.5 9.5L24 8L25.5 9.5L24 11L22.5 9.5Z" fill="url(#paint5_linear_1325_4604)">
                           </path>
                           <path opacity="0.3" d="M29.5 32.5L31 34L32.5 32.5L31 31L29.5 32.5Z" fill="#AEB4BC">
                           </path>
                           <path opacity="0.3" d="M17 4L18.5 5.5L20 4L18.5 2.5L17 4Z" fill="#AEB4BC"></path>
                           <path opacity="0.3" d="M4 36L5 37L6 36L5 35L4 36Z" fill="#AEB4BC"></path>
                           <defs>
                              <linearGradient id="paint0_linear_1325_4604" x1="24" y1="4" x2="24" y2="42"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                              <linearGradient id="paint1_linear_1325_4604" x1="2" y1="24.75" x2="21" y2="24.75"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint2_linear_1325_4604" x1="27" y1="24.75" x2="46" y2="24.75"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint3_linear_1325_4604" x1="10" y1="10.5" x2="10" y2="40.5"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                              <linearGradient id="paint4_linear_1325_4604" x1="3" y1="0" x2="3" y2="6"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                              <linearGradient id="paint5_linear_1325_4604" x1="24" y1="8" x2="24" y2="11"
                                 gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#929AA5"></stop>
                                 <stop offset="1" stop-color="#76808F"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Link<span class="yellow-text"> Program</span>
                     </h2>
                  </div>
                  <div class="text">Wealth Mark Link Program enables enterprise clients to build their business with
                     Wealth Mark
                     technology
                     while earning commission from trading fees by leveraging Wealth Mark's liquidity and market
                     depth.
                  </div>
                  <ul class="mt-4 row">
                     <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.343 7.565a7.78 7.78 0 000 11.13c3.124 3.073 8.19 3.073 11.314 0a7.78 7.78 0 000-11.13L12 2 6.343 7.565zm8.44 9.782a3.935 3.935 0 000-5.565L12 9l-2.783 2.782a3.935 3.935 0 005.566 5.565z"
                              fill="currentColor"></path>
                        </svg>
                        Liquidity
                     </li>
                     <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path
                              d="M3 12.007a7.887 7.887 0 014.215-3.538c.021 1.914.612 3.811 1.708 5.216a6.827 6.827 0 00-1.074.92l-.981.893 1.488 1.487 1.061-1.04c1.987-2.102 4.072-1.098 4.866-.333L8.923 21H3v-8.993z"
                              fill="currentColor"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21 9a6 6 0 01-5.348 5.965l-.546-.527a5.275 5.275 0 00-3.083-1.414 4.844 4.844 0 00-1.41.07A6 6 0 1121 9zm-6-2.5L12.5 9l2.5 2.5L17.5 9 15 6.5z"
                              fill="currentColor"></path>
                        </svg>
                        Fiat Gateway
                     </li>
                     <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12 8.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zM3 17a3 3 0 013-3h5a3 3 0 013 3v3H3v-3zM21 5h-5v3h5V5zm0 5.002h-5v3h5v-3zm-5 5.002h5v3h-5v-3z"
                              fill="currentColor"></path>
                        </svg>
                        Sub Account
                     </li>
                     <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-svg-api">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.75 10.5a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5zM17.25 21a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5zm2.882-15.01L18.01 3.868 3.868 18.01l2.121 2.122L20.133 5.99z"
                              fill="currentColor"></path>
                        </svg>
                        Rebates
                     </li>
                  </ul>
                  <a class="btn btn-yellow shadow mt-3">Learn More </a>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-1 order-lg-2">
                  <img src="{{ asset('img/link-program.png') }}" class="img-fluid"
                     alt="Link Program" title="Link Program" />
               </div>
            </div>
         </div>
      </section>
      <div class="parallax-api-documentation2"></div>
      <section class="wm-pay-accordian-section">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">

                            <div class="sec-title text-center mb-2">
                           <h2 class="heading-h2">FAQs</h2>
                            </div>

                        </div>
                         <div class="wm-outlet-div text-right justify-content-end">

                            <a href="#" class="learn-more btn-6">
                           <span>Learn More </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>

                        </div>
                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
     What is DeFi Staking?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  DeFi (Decentralized Finance) is a way of providing financial services to users through smart contracts. Existing DeFi projects aim to provide higher annualized earnings for specific currencies.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  About Wealthmark DeFi Staking
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">There's a relatively high threshold for users of DeFi products. Wealthmark DeFi Staking acts on behalf of users to participate in certain DeFi products, obtains and distributes realized earnings, and helps users to participate in DeFi products with a single click.</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     What are the advantages of DeFi Staking?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">1. Easy to use: You don't need to manage private keys, acquire resources, make trades, or perform other complicated tasks to participate in DeFi Staking. Wealthmark's one-stop service allows users to obtain generous online rewards without keeping an on-chain wallet. 2. No gas fee: Wealthmark Staking deposits users’ funds into smart contracts on users’ behalf, saving users on-chain gas fees.</div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
   After I participate in DeFi Staking, how is the earnings cycle calculated?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">Once funds are successfully allocated to DeFi Staking, earnings are calculated beginning at 00:00 (UTC) the following day. The minimum earnings calculation period is one day; earnings for a period of less than one day will not be included in the earnings distribution.</div>
      </div>
    </div>
  </div>


</div>
</div>
</section>

      <script>
         $('.collapse').collapse()
      </script>
      @include('template.country_language')
      @include('template.web_footer')
       <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
   </body>
</html>
