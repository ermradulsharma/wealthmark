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
      <link rel='stylesheet' href="{{('../pak_custom.css') }}">
   </head>
   <body>
      @include('template.web_menu')
      <section class="help-support-search">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-2 order-lg-1 order-md-2"
                  id="search-box-suppor-center">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h1 class="heading-h2">Search FAQ</span>
                     </h1>
                  </div>
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Type here and search announcements"
                        aria-label="Announcements" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <span class="input-group-text announcement-search-btn" id="basic-addon2">Search</span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-1 order-lg-2 order-md-1 d-flex justify-content-center"
                  id="search-box-suppor-center">
                  <div class="announcement-header-img">
                     <img src="{{ asset('-header-img.png') }}"
                        class="img-fluid float-md-end d-flex mx-auto faq-header-img rotate-img-animation" alt="Frequently asked questions" title="Frequently asked questions">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="self-service-section bg-dark-blue">
         <div class="container">
            <div class="row">
               <div class="sec-title text-left mb-5">
                  <span class="title">Know About</span>
                  <h2 class="heading-h2 text-white">Self-Service</h2>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="services-inner-box">
                     <img loading="lazy" src="{{ asset('et-account-password.svg') }}" alt="Reset Account Password" title="Reset Account Password" class="img-fluid self-service-icon">
                     <p class="text">Reset Account Password </p>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="services-inner-box">
                     <img loading="lazy" src="{{ asset('ock-personal-account.svg') }}" alt="Unlock Personal Account" title="Unlock Personal Account" class="img-fluid self-service-icon">
                     <p>Unlock Personal Account </p>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="services-inner-box">
                     <img loading="lazy" src="{{ asset('et-security-verfification.svg') }}" alt="Reset Security Verfification" title="Reset Security Verfification" class="img-fluid self-service-icon">
                     <p>Reset Security Verfification</p>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="services-inner-box">
                     <img loading="lazy" src="{{ asset('nge-email-address.svg') }}" alt="Change Email Address" title="Change Email Address" class="img-fluid self-service-icon">
                     <p>Change Email Address</p>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="services-inner-box">
                     <img loading="lazy" src="{{ asset('et-google-authenticator.svg') }}" alt="Reset Google Authenticator" title="Reset Google Authenticator" class="img-fluid self-service-icon">
                     <p>Reset Google Authenticator</p>
                  </div>
               </div>
               <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                  <div class="services-inner-box">
                     <img loading="lazy" src="{{ asset('pto-deposit-not-credited.svg') }}" alt="Crypto Deposit Not Credited" title="Crypto Deposit Not Credited" class="img-fluid self-service-icon">
                     <p>Crypto Deposit Not Credited</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="fee-rate-section">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">FAQ</h2>
                  </div>
                  <div class="text">Select a team most relevant to your interests and experience to view job openings
                  </div>
               </div>
            </div>
            <div class="fees-faq-main-box">
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('ount-functions.svg') }}" alt="Account Functions" title="Account Functions" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Account Functions</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('port-tutorial.svg') }}" alt="Tutorial" title="Tutorial" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Tutorial</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('-token.svg') }}" alt="Wealth Mark Fan Token" title="Wealth Mark Fan Token" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Wealth Mark Fan Token</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('earn.svg') }}" alt="Wealth Mark Earn" title="Wealth Mark Earn" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Wealth Mark Earn</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('pto-deposit.svg') }}" alt="Crypto Deposit/Withdrawal" title="Crypto Deposit/Withdrawal" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Crypto Deposit/Withdrawal</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('-crypto.svg') }}" alt="Buy Crypto (Fiat/P2P)" title="Buy Crypto (Fiat/P2P)" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Buy Crypto (Fiat/P2P)</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('gin.svg') }}" alt="Spot & Margin Trading" title="Spot & Margin Trading" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Spot & Margin Trading</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('pto-derivatives.svg') }}" alt="Crypto Derivatives" title="Crypto Derivatives" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Crypto Derivatives</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('ance.svg') }}" alt="Finance" title="Finance" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Finance</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('.svg') }}" alt="API" title="API" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">API</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('ount-functions.svg') }}" alt="Security" title="Security" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Security</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('er-topic.svg') }}" alt="Other Topics" title="Other Topics" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Other Topics</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('ount-functions.svg') }}" alt="Convert" title="Convert" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Convert</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('link.png') }}" alt="Wealth Mark Link" title="Wealth Mark Link" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Wealth Mark Link</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('.svg') }}" alt="Wealth Mark NFT" title="Wealth Mark NFT" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">Wealth Mark NFT</div>
                  </div>
               </a>
               <a href="javascript: void(0)" class="faq-inner-box">
                  <img loading="lazy" src="{{ asset('port-vip-icon.png') }}" alt="VIP" title="VIP" class="img-fluid icons-md">
                  <div class="faq-inner-box-div">
                     <div class="faq-inner-box-div-txt">VIP</div>
                  </div>
               </a>
            </div>
         </div>
      </section>
      <section class="announcements-block bg-dark-blue">
         <div class="container">
            <div class="row">
               <div class="sec-title">
                  <span class="title">Know About</span>
                  <h2 class="heading-h2 text-white">Announcement</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('-crypto.svg') }}" class="img-fluid icons-md" alt="New Cryptocurrency Listing" title="New Cryptocurrency Listing" />
                     <span>New Cryptocurrency Listing</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('est-news.svg') }}" class="img-fluid icons-md" alt="Latest Wealth Mark News" title="Latest Wealth Mark News" />
                     <span>Latest Wealth Mark News</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('est-activities.png') }}" class="img-fluid icons-md" alt="Latest Activities" title="Latest Activities" />
                     <span>Latest Activities</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('-fiat-listing.svg') }}" class="img-fluid icons-md" alt="New Fiat Listings" title="New Fiat Listings"/>
                     <span>New Fiat Listings</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('listing.svg') }}" class="img-fluid icons-md" alt="Delisting" title="Delisting" />
                     <span>Delisting</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('ouncemente-wallet-update.png') }}" class="img-fluid icons-md" alt="Wallet Maintenance Updates"  title="Wallet Maintenance Updates"/>
                     <span>Wallet Maintenance Updates</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('.svg') }}" class="img-fluid icons-md" alt="API Updates" title="API Updates"/>
                     <span>API Updates</span>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="announcements-inner-box alert alert-warning">
                     <img src="{{ asset('pto-airdrop.png') }}" class="img-fluid icons-md" alt="Crypto Airdrop" title="Crypto Airdrop" />
                     <span>Crypto Airdrop</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="support-center-block bg-light" id="support-listing-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Latest Articles</h2>
                  </div>
               </div>
            </div>
            <div class="row mb-4">
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="flip-box listing-topic-box border p-3 shadow-sm mb-2">
                     <div class="flip-box-inner">
                        <div class="flip-box-front">
                           <img src="{{ asset('port-article-icon-1.png') }}" class="img-fluid img-100" alt="Wealth Mark Options System Upgrade Notice"  title="Wealth Mark Options System Upgrade Notice"/>
                           <h4>Wealth Mark Options System Upgrade Notice </h4>
                           <div class="text">Check out the latest coin listings and pairs on Launchpad, Launchpool, Spot, Margin,
                              and Futures markets.<a class="text-warning">(2022-11-07) </a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="flip-box listing-topic-box border p-3 shadow-sm mb-2">
                     <div class="flip-box-inner">
                        <div class="flip-box-front">
                           <img src="{{ asset('port-article-icon-2.png') }}" class="img-fluid img-100" alt="Wealth Mark Lite to Buy and Sell Your Crypto" title="Get Started on Wealth Mark Lite to Buy and Sell Your Crypto" />
                           <h4>Get Started on Wealth Mark Lite to Buy and Sell Your Crypto</h4>
                           <div class="text">Check out the latest coin listings and pairs on Launchpad, Launchpool, Spot, Margin,
                              and Futures markets.<a class="text-warning">(2021-01-27) </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="flip-box listing-topic-box border p-3 shadow-sm mb-2">
                     <div class="flip-box-inner">
                        <div class="flip-box-front">
                           <img src="{{ asset('port-article-icon-3.png') }}" class="img-fluid img-100" alt="Simple Earn Flexible Products" title="Wealth Mark Adds New Assets to Simple Earn Flexible Products " />
                           <h4>Wealth Mark Adds New Assets to Simple Earn Flexible Products </h4>
                           <div class="text">Check out the latest coin listings and pairs on Launchpad, Launchpool, Spot, Margin,
                              and Futures markets.<a class="text-warning">(2022-11-03)</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="flip-box listing-topic-box border p-3 shadow-sm mb-2">
                     <div class="flip-box-inner">
                        <div class="flip-box-front">
                           <img src="{{ asset('port-article-icon-4.png') }}" class="img-fluid img-100" alt="Make Your First Wealth Mark Options Trade & Share Up to 21,000 USDT" title="Make Your First Wealth Mark Options Trade & Share Up to 21,000 USDT" />
                           <h4>Make Your First Wealth Mark Options Trade & Share Up to 21,000 USDT</h4>
                           <div class="text">Check out the latest coin listings and pairs on Launchpad, Launchpool, Spot, Margin,
                              and Futures markets.<a class="text-warning"> 2022-11-03 </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="flip-box listing-topic-box border p-3 shadow-sm mb-2">
                     <div class="flip-box-inner">
                        <div class="flip-box-front">
                           <img src="{{ asset('port-article-icon-5.png') }}" class="img-fluid img-100" alt="Send Crypto with Wealth Mark Pay to Receive Up to 2,999" title="Send Crypto with Wealth Mark Pay to Receive Up to 2,999" />
                           <h4>Send Crypto with Wealth Mark Pay to Receive Up to 2,999</h4>
                           <div class="text">Check out the latest coin listings and pairs on Launchpad, Launchpool, Spot, Margin,
                              and Futures markets.<a class="text-warning">2022-01-20</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                  <div class="flip-box listing-topic-box border p-3 shadow-sm mb-2">
                     <div class="flip-box-inner">
                        <div class="flip-box-front">
                           <img src="{{ asset('port-article-icon-6.png') }}" class="img-fluid img-100" alt="Deposit/Withdraw Cryptocurrency on Wealth Mark" title="How Do I Deposit/Withdraw Cryptocurrency on Wealth Mark" />
                           <h4>How Do I Deposit/Withdraw Cryptocurrency on Wealth Mark</h4>
                           <div class="text">Check out the latest coin listings and pairs on Launchpad, Launchpool, Spot, Margin,
                              and Futures markets.<a class="text-warning">2022-10-20 </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
