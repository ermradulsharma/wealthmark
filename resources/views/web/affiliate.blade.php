<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      @include('template.web_css')
      <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
      <style>
        #additional-affiliate-benefits-section .affiliate-benefit-img {
            filter: drop-shadow(2px 4px 6px black);
        }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="affiliate-section-block shadow-sm" id="affiliate-section">
         <div class="container">
            <div class="row justify-content-start">
               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" data-aos="fade-up"  data-aos-delay="200">
                  <h1 class="top-heading text-primary"><strong>Join the Wealth Mark Affiliate Program </strong></h1>
                  <p class="text mb-3">Monetize your traffic and earn crypto commissions when you share Wealth Mark with
                     your
                     audiences. Content creators, influencers and platforms can earn commissions and special rewards
                     on every trade, across Wealth Mark Spot, Futures, Margin trading or even Wealth Mark Pool.
                  </p>
                  <a class="btn btn-yellow shadow become-affiliate-btn">Become an Affiliate </a>
               </div>
            </div>
         </div>
      </section>
      <section class="affiliated-program-works-block" id="affiliated-program-works-section">
         <div class="container">
            <div class="row">
               <div class="sec-title text-left mb-5">
                  <span class="title">Know About</span>
                  <h2 class="heading-h2">Wealth Mark Affiliate Program Work?</h2>
               </div>
            </div>
            <div class="row affiliate-step-row">
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serviceBox">
                     <div class="service-content">
                        <div class="service-icon">
                           <span>1</span>
                        </div>
                        <h3 class="title fw-bolder">Sign up to become an affiliate</h3>
                        <p class="description">Submit your application by filling the form below. Our team will evaluate your application and ensure you meet our affiliate criteria.</p>
                        <a href="#" class="read-more btn btn-yellow shadow">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serviceBox">
                     <div class="service-content">
                        <div class="service-icon">
                           <span>2</span>
                        </div>
                        <h3 class="title">Create and share your affiliate link</h3>
                        <p class="description">Create, manage and track the performance of your affiliate links right from your Wealth Mark
                           account.
                        </p>
                        <a href="#" class="read-more btn btn-yellow shadow">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="serviceBox">
                     <div class="service-content">
                        <div class="service-icon">
                           <span>3</span>
                        </div>
                        <h3 class="title">Earn up to 50% commissions </h3>
                        <p class="description">When users create an account with your affiliate link, you’ll receive commission on every
                           trade they make.
                        </p>
                        <a href="#" class="read-more btn btn-yellow shadow">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="affiliate-commission-benefits" id="affiliate-commission-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sec-title text-left mb-5">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Wealth Mark <span class="yellow-text">Affiliate Program</span> Commission
                        Benefits
                     </h2>
                  </div>
                  <div class="text">Check more detailed rules of the affiliate program <a class="yellow-text">Detailed Rules</a></div>
               </div>
            </div>
         </div>
      </section>
      <section class="affiliate-incentives-block" id="affiliate-incentives-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sec-title text-left mb-5">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Earn more <span class="yellow-text">affiliate incentives</span></h2>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="table-responsive table-incentives">
                     <table class="table table-striped">
                        <tbody>
                           <tr>
                              <th>Spot commission</th>
                              <td>Up to 50%</td>
                           </tr>
                           <tr>
                              <th>Futures commission</th>
                              <td>30%</td>
                           </tr>
                           <tr>
                              <th>Wealth Mark pool commission</th>
                              <td>30%</td>
                           </tr>
                           <tr>
                              <th>NFT commission</th>
                              <td>20%</td>
                           </tr>
                           <tr>
                              <th>Liquid swap commission</th>
                              <td>15%</td>
                           </tr>
                           <tr>
                              <th>Dual investment commission</th>
                              <td>3%</td>
                           </tr>
                           <tr>
                              <th>Sign-up bonus package</th>
                              <td>Share a $50 new user sign-up bonus package with your community.</td>
                           </tr>
                           <tr>
                              <th>Minimum requirements</th>
                              <td>Must have more than 5000 followers on social media,more than 500 members in
                                 community
                              </td>
                           </tr>
                           <tr>
                              <th>Eligibility</th>
                              <td>Only eligible users can participate after submitting an application</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="additional-affiliate-benefits" id="additional-affiliate-benefits-section">
         <div class="container">
            <div class="row">
               <div class="sec-title text-left mb-5">
                  <span class="title">Know About</span>
                  <h2 class="heading-h2">Additional<span class="yellow-text"> Affiliate Program</span> Benefits</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="service_box">
                     <div class="service_icon">
                        <img src="{{ asset('img/affiliate/exclusive-content-program.png') }}" class="img-fluid affiliate-benefit-img"
                           alt="Affiliate img">
                     </div>
                     <h3>Exclusive content program</h3>
                     <p>Earn BUSD every month and special sign-up bonus for your audience when you create quality content.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="service_box">
                     <div class="service_icon">
                        <img src="{{ asset('img/affiliate/more-rewards.png') }}" class="img-fluid affiliate-benefit-img"
                           alt="Affiliate img">
                     </div>
                     <h3>Every Month More rewards</h3>
                     <p>Earn a bonus reward of up to $72,000 every month based on the total fees paid by Futures referrals.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="service_box">
                     <div class="service_icon">
                        <img src="{{ asset('img/affiliate/convenient-payments.png') }}" class="img-fluid affiliate-benefit-img"
                           alt="Affiliate img">
                     </div>
                     <h3>Receive Convenient payments</h3>
                     <p>Get paid for every first-time buyer, with no referral limit and a lifetime attribution for spot referrals.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="service_box">
                     <div class="service_icon">
                        <img src="{{ asset('img/affiliate/dedicated-account-manager.png') }}" class="img-fluid affiliate-benefit-img"
                           alt="Affiliate img">
                     </div>
                     <h3>Dedicated account manager</h3>
                     <p>Gain access to professional support, tutorials, marketing material, and a dedicated Binance Affiliate manager.</p>
                  </div>
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
      <section class="become-walthmark-affiliate" id="become-walthmark-affiliate-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="sec-title text-left mb-5">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Promote Wealth Mark.<span class="yellow-text"> Get paid.</span> Simple
                        right?
                     </h2>
                  </div>
                  <a class=" btn btn-yellow shadow">Become a Wealth Mark Affiliate</a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <img src="{{ asset('img/affiliate/affiliate-crypto.png') }}" class="img-fluid affiliate-benefit-img"
                     alt="Affiliate img">
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
       <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
   </body>
</html>
