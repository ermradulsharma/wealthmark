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
      <link rel='stylesheet' href="{{('../assets/css/style_main.css') }}">
      <style>
         .executions-solutions .serviceBox:hover .service-icon{
         border:3px solid orange;
         }
         .executions-solutions .serviceBox:hover .service-content {
         border: 3px solid #fdd127;
         }
         .executions-solutions .serviceBox:hover .serviceBox:before {
         content: "";
         border: 3px solid #263674!important;
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="execution-solutions shadow-sm exection-solution-banner">
         <div class="container mt-3">
            <div class="row execution-solutions-section-row">
               <div class="col-md-6 col-lg-6  col-sm-12 col-xs-12 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="text-blue execution-heading-main display-5">Welcome to the Wealthmark Execution Solutions
                  </h1>
                  <div class="text mb-2 pb-2">At Wealthmanrk, we believe that everyone should have the freedom to
                     earn, hold, spend, share and give their money - no matter who you are or where you come
                     from.<br />
                  </div>
                  <a href="#" class="btn btn-blue"> Hurry Up!! </a>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-1 order-lg-2 hero-img " data-aos="zoom-in"
                  data-aos-delay="200">
                  <img src="{{ asset('assets/img/execution-solutions/welcome-to-the-wealthmark.png') }}"
                     class="img-fluid animated d-flex mx-auto" alt="Execution Solutions"  title="Execution Solutions">
               </div>
            </div>
         </div>
      </section>
      <section class="executions-solutions">
         <div class="container">
            <div class="sec-title text-left mb-3">
               <h2 class="heading-h2">Freedom to choose <span class="yellow-text"> how you pay
                  </span>
               </h2>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serviceBox">
                     <div class="service-icon">
                        <i class="bi bi-credit-card"></i>
                     </div>
                     <div class="service-content">
                        <h3 class="title">Zero fees</h3>
                        <div class="text mb-0 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           veniam
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serviceBox orange">
                     <div class="service-icon">
                        <i class="bi bi-lightning-charge"></i>
                     </div>
                     <div class="service-content">
                        <h3 class="title">Lightning fast payments</h3>
                        <div class="text mb-0 text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           veniam
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serviceBox">
                     <div class="service-icon">
                        <i class="bi bi-coin"></i>
                     </div>
                     <div class="service-content">
                        <h3 class="title">200+ crypto currencies</h3>
                        <div class="text mb-0 text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           veniam
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="wm-marketplace">
         <div class="container">
            <div class="row align-items-center p-2">
               <div class="col-md-6 col-sm-6  order-lg-last text-center">
                  <img src="{{ asset('assets/img/execution-solutions/execution-solutions.png') }}" class="img-fluid animated"
                     alt="Execution Solutions with Cashback" title="Execution Solutions with Cashback">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left mb-2">
                     <h2 class="heading-h2">Execution Solutions <span class="yellow-text">with Wealthmark Cashback
                        </span>
                     </h2>
                  </div>
                  <div class="text">
                     At Wealthmanrk, we believe that everyone should have the freedom to earn, hold, spend, share and
                     give their money - no matter who you are or where you come from.
                  </div>
                  <a href="#" class="learn-more btn-6">
                  <span>Learn More </span>
                  <span><i class="bi bi-chevron-right"></i></span>
                  </a>
               </div>
            </div>
            <div class="row align-items-center p-2">
               <div class="col-md-6 col-sm-6 text-center">
                  <img src="{{ asset('assets/img/execution-solutions/lowest-frees.png') }}" class="img-fluid animated"
                     alt="Lowest Fees Execution Solutions" title="Lowest Fees Execution Solutions">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left mb-2">
                     <h2 class="heading-h2"> <span class="yellow-text"> Lowest Fees </span>on Execution Solutions
                     </h2>
                  </div>
                  <div class="text">
                     At Wealthmanrk, we believe that everyone should have the freedom to earn, hold, spend, share and
                     give their money - no matter who you are or where you come from.
                  </div>
                  <div class="text">
                     *Third-party fees may still be applicable
                  </div>
                  <a href="#" class="learn-more btn-6">
                  <span>Learn More </span>
                  <span><i class="bi bi-chevron-right"></i></span>
                  </a>
               </div>
            </div>
            <div class="row align-items-center p-2">
               <div class="col-md-6 col-sm-6  order-lg-last text-center">
                  <img src="{{ asset('assets/img/execution-solutions/executions-when-need.png') }}" class="img-fluid animated"
                     alt="Execution when need" title="Execution when need">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left mb-2">
                     <h2 class="heading-h2"> <span class="yellow-text">Execution </span> when need</h2>
                  </div>
                  <div class="text">
                     At Wealthmanrk, we believe that everyone should have the freedom to earn, hold, spend, share and
                     give their money - no matter who you are or where you come from.
                  </div>
                  <a href="#" class="learn-more btn-6">
                  <span>Learn More </span>
                  <span><i class="bi bi-chevron-right"></i></span>
                  </a>
               </div>
            </div>
            <div class="row align-items-center p-2">
               <div class="col-md-6 col-sm-6 text-center">
                  <img src="{{ asset('assets/img/execution-solutions/all-types-of-solutions.png') }}" class="img-fluid animated"
                     alt="All type of Solutions" title="All types of Solutions">
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="sec-title text-left mb-2">
                     <h2 class="heading-h2">All Types of <span class="yellow-text">Solutions </span></h2>
                  </div>
                  <div class="text">
                     At Wealthmanrk, we believe that everyone should have the freedom to earn, hold, spend, share and
                     give their money - no matter who you are or where you come from.
                  </div>
                  <a href="#" class="learn-more btn-6">
                  <span>User Protection Commitment &gt; </span>
                  <span><i class="bi bi-chevron-right"></i></span>
                  </a>
               </div>
            </div>
         </div>
      </section>
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
                        What is the Wealthmark Affiliate Program?
                     </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text"> The Wealthmark Affiliate Program allows you to create unique referral links that invite your community to register and trade on Wealthmark. If anyone clicks the link and registers, they’ll be automatically attributed as your referral. You’ll receive a commission on every trade they make, whether it’s on Wealthmark Spot, Futures, or Margin trading or even Wealthmark Pool.</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingTwo">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do I earn a bonus of up to $72,000 every month?
                     </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">In addition to earning 30% commission, Affiliates that promote Futures trading can now earn a bonus of up to $72,000 based on the fees paid by their referrals over a period of 1 month. For example, if your referrals generate the equivalent of $15,000 in trading fees over a period of 1 month, then in addition to your standard referral commission, you will receive a bonus of $1,500. The more trading fees generated by referrals, the bigger the bonus you will receive.</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingThree">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the requirements to be a Wealthmark Affiliate?
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">Individual
                           Social media influencer with 5,000+ followers or subscribers on one or more social media platforms (Youtube, Twitter, Facebook, Instagram)
                           Crypto Communities
                           Financial leaders or opinion leaders with a community of 500+ members on one or more community groups (Telegram, Facebook, WeChat, Reddit, QQ, VK)
                           Business/Organization
                           User base of 2,000+
                           Market analysis platform with 5,000+ daily visits
                           Industry Media Platform
                           Crypto Fund
                           Aggregate Trading Platform
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
      <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
   </body>
</html>
