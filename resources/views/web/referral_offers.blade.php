<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')

<style> 


</style>
</head>

<body>
    @include('template.web_menu')
    <div class="dashboard-tabpills">
              
                    <div class="dashboard-card-body">
                     <div class="bg-light-blue">
                     <div class="container">
                            <ul class="nav nav-pills border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Lite Referral</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Standard Referral</button>
                        </li>
                     
                     
                        </ul>
                        </div>
    </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                                <section class="Refer_lite_top">
                                        <div class="container">
                                          <div class="row align-items-center justify-content-center">
                                             <div class="col-lg-12 text-center d-flex flex-column justify-content-center " data-aos="fade-up" data-aos-delay="200">
                                             <h3 class="top-heading m-0 p-0 mb-3">Wealthmark Referral Program</h3>
                                             <p class="top-p text-white">Refer & earn 50% of trading fee paid by your friends as reward. Be your own Boss!</p>
                                        
                                             </div>
                                             <!--<div class="col-lg-5 col-md-6 col-sm-8 pt-5 pb-5  order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">-->
                                             <!--   <img src="{{ asset('img/Trading/otc-cover-graphic.png') }}" class="img-fluid animated" alt="wealthmark otc-trading">-->
                                             <!--</div>-->
                                         <div class="col-md-12">
                                             <div class="Refer_points">
                                                 <div class="Refer_points_block">
                                                     <div class="">
                                                         <span><i class="bi bi-percent"></i></span>
                                                     </div>
                                                     <div class="fs-14">Earn 50% as reward of <br> every trading fee</div>
                                                 </div>
                                                  <div class="Refer_points_block">
                                                     <div class="">
                                                         <span><i class="bi bi-arrow-clockwise"></i></span>
                                                     </div>
                                                     <div class="fs-14">Payout every 24 hours! </div>
                                                 </div>
                                                  <div class="Refer_points_block">
                                                     <div class="">
                                                        <span><i class="bi bi-currency-bitcoin"></i></span>
                                                     </div>
                                                     <div class="fs-14">Unlimited referrals</div>
                                                 </div>
                                                  <div class="Refer_points_block">
                                                     <div class="">
                                                         <span><i class="bi bi-lightning-charge-fill"></i></span>
                                                     </div>
                                                     <div class="fs-14">Unlimited rewards</div>
                                                 </div>
                                             </div>
                                         </div>
                                       </div>
                                    </div>
                                </section>
                                
                          <section class="bg-light-blue">
                            <div class="container">
                                 <div class="sec-title text-left mb-4">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">How it works?</h2>
                           
                        </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="refer-div-Box">
                                            <div class="refer-div--icon">
                                                <span class="number"> 1 </span>
                                            </div>
                                            <h3 class="title">Get your link</h3>
                                            <div class="text">Join Wealthmark and get your unique tracking link. You'll earn for customers who sign up through this link.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="refer-div-Box">
                                            <div class="refer-div--icon">
                                                <span class="number"> 2 </span>
                                            </div>
                                            <h3 class="title">Share your link</h3>
                                           <div class="text">Share your links via Telegram, Twitter, Emails or anyway you want. The more you promote, the more you earn.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="refer-div-Box">
                                            <div class="refer-div--icon">
                                                <span class="number"> 3 </span>
                                            </div>
                                            <h3 class="title">Earn when they trade!</h3>
                                            <div class="text">You earn 50% as reward of every trading fee paid by your friends. Even while you're asleep!</div>
                                        </div>
                                    </div>
                                    
                                
                                </div>
                                <div class="row justify-content-center">
                                     <div class="col-12">
                                         <div class="bg-white pt-1 mb-3 mt-5"></div>
                                         </div>
                                    <div class="col-md-4 col-sm-6 col-8">
                                        <a href="javascript:void()" class="btn-blue d-block text-center"> Login to participate </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                           <section class="wm-pay-accordian-section bg-white">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">
                           
                            <div class="sec-title mb-2">
                           <h2 class="heading-h2">Frequently Asked Questions</h2>
                            </div>
                           
                        </div>
                        
                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
    How much can I earn in this referral program?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  You can earn unlimited rewards! Every time your friend trades, you get 50% of their trading fees as reward in Wealthmark. The more your friend trades, the more you earn.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
 When will the referral rewards be credited to my account?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">
           All rewards earned for a day are credited to your account at once in the next 24 hours. Usually early in the morning.
       </div>
      
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    How will referral rewards be distributed?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">all referral rewards are distributed in WRX irrespective of the trading fee being paid in INR, USDT, BMK or BTC</div>
      </div>
    </div>
  </div>
  
  
  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
   Do you have any tips that will help me earn more rewards?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
 
      <ul>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Share your invite link with as many friends as you can. The more friends you share it with, the more likely they are to sign up. Use social media, chat and emails to share your invite link</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Get your friends excited about crypto and why they need to sign up on an exchange like Wealthamrk</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Let your friends know about the benefits of signing up with your invite link instead of signing up directly</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Encourage your friends to use their own referral links after they sign up. This will build their trust in you</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Push your friends to trade everyday. The more they trade, the more you earn.</li></ul>
    
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingFive">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
   How do I know if my friend has successfully signed up via my referral link?

      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">
      When a friend completes sign up via your referral link, their email will get added in "Referred friends" tab below your referral link. You can start receiving rewards as soon as they complete KYC verification and start trading.
  </div>     
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingSix">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
  Important rules to keep in mind
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">
     Please keep in mind the below rules when you participate in the Wealthmark Referral Program. These simple but important rules help us keep the program fair for the entire community.
  </div> 
        <ul class="fs-14 ps-2">
            <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Do not misrepresent rewards when sharing the referral link with your friends </li> 
            <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> We constantly look out for fake or duplicate accounts. If we find something amiss we will disqualify those accounts from being part of the referral program and withdraw any rewards that may have been credited earlier</li>
        </ul>
  <div class="fs-14 text-black text-justify fw-normal mt-3">
     <span class="fw-bolder">Note : </span>   While we run this program in good faith, Wealthmark reserves the right to make any changes to the referral program without prior notice. We may make such changes in view of changing market conditions, security or risk of fraud or any other reason. The decision on reward eligibility will be made by Wealthmark and will be final and binding. By participating in the referral program you acknowledge the above.If you find someone misusing the referral program, you can let us know by contacting us directly. We'll look into it and take the necessary steps to fix it.
  </div>
      </div>
    </div>
  </div>
  
  
</div>
</div>
</section>
                           
                           
                            </div>
                            
                            <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                               <section class="Refer_lite_top">
                                    
                                        <div class="container-fluid">
                                          <div class="row align-items-center justify-content-center">
                                             <div class="col-lg-4 col-md-6 col-sm-10   d-flex flex-column justify-content-center  order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                                             <h3 class="top-heading m-0 p-0 mb-3">Refer Friends. Earn Crypto Together.</h3>
                                             <p class="top-p text-white">Earn up to 40% commission on every trade across Binance Spot, Futures, and Pool.</p>
                                             
                                                 <div class="mt-5">
                                                <a href="#" class="btn-yellow mt-4"> View referral rules </a>
                                             </div>
                                             
                                             </div>
                                             <div class="col-lg-5 col-md-6 col-sm-8 pt-5 pb-5  order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                                                <img src="{{ asset('img/Trading/otc-cover-graphic.png') }}" class="img-fluid animated" alt="wealthmark otc-trading">
                                             </div>
                                         
                                       </div>
                                    </div>
                                </section>
                                
                          <section class="bg-light-blue">
                            <div class="container">
                                 <div class="sec-title text-left mb-4">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">How it works?</h2>
                           
                        </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="refer-div-Box">
                                            <div class="refer-div--icon">
                                                <span class="number"> 1 </span>
                                            </div>
                                            <h3 class="title">Get your link</h3>
                                            <div class="text">Join Wealthmark and get your unique tracking link. You'll earn for customers who sign up through this link.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="refer-div-Box">
                                            <div class="refer-div--icon">
                                                <span class="number"> 2 </span>
                                            </div>
                                            <h3 class="title">Share your link</h3>
                                           <div class="text">Share your links via Telegram, Twitter, Emails or anyway you want. The more you promote, the more you earn.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="refer-div-Box">
                                            <div class="refer-div--icon">
                                                <span class="number"> 3 </span>
                                            </div>
                                            <h3 class="title">Earn when they trade!</h3>
                                            <div class="text">You earn 50% as reward of every trading fee paid by your friends. Even while you're asleep!</div>
                                        </div>
                                    </div>
                                    
                                
                                </div>
                                <div class="row justify-content-center">
                                     <div class="col-12">
                                         <div class="bg-white pt-1 mb-3 mt-5"></div>
                                         </div>
                                    <div class="col-md-4 col-sm-6 col-8">
                                        <a href="javascript:void()" class="btn-blue d-block text-center"> Login to participate </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                         <section class="wm-pay-accordian-section bg-white">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">
                           
                            <div class="sec-title mb-2">
                           <h2 class="heading-h2">Frequently Asked Questions</h2>
                            </div>
                           
                        </div>
                        
                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
    How much can I earn in this referral program?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  You can earn unlimited rewards! Every time your friend trades, you get 50% of their trading fees as reward in Wealthmark. The more your friend trades, the more you earn.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
 When will the referral rewards be credited to my account?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">
           All rewards earned for a day are credited to your account at once in the next 24 hours. Usually early in the morning.
       </div>
      
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    How will referral rewards be distributed?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">all referral rewards are distributed in WRX irrespective of the trading fee being paid in INR, USDT, BMK or BTC</div>
      </div>
    </div>
  </div>
  
  
  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
   Do you have any tips that will help me earn more rewards?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
 
      <ul>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Share your invite link with as many friends as you can. The more friends you share it with, the more likely they are to sign up. Use social media, chat and emails to share your invite link</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Get your friends excited about crypto and why they need to sign up on an exchange like Wealthamrk</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Let your friends know about the benefits of signing up with your invite link instead of signing up directly</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Encourage your friends to use their own referral links after they sign up. This will build their trust in you</li>
          <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Push your friends to trade everyday. The more they trade, the more you earn.</li></ul>
    
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingFive">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
   How do I know if my friend has successfully signed up via my referral link?

      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">
      When a friend completes sign up via your referral link, their email will get added in "Referred friends" tab below your referral link. You can start receiving rewards as soon as they complete KYC verification and start trading.
  </div>     
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingSix">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
  Important rules to keep in mind
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">
     Please keep in mind the below rules when you participate in the Wealthmark Referral Program. These simple but important rules help us keep the program fair for the entire community.
  </div> 
        <ul class="fs-14 ps-2">
            <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> Do not misrepresent rewards when sharing the referral link with your friends </li> 
            <li class="fs-14 text-black d-flex align-items-center"> <i class="bi bi-dot yellow-text line-height-10px fs-4"></i> We constantly look out for fake or duplicate accounts. If we find something amiss we will disqualify those accounts from being part of the referral program and withdraw any rewards that may have been credited earlier</li>
        </ul>
  <div class="fs-14 text-black text-justify fw-normal mt-3">
     <span class="fw-bolder">Note : </span>   While we run this program in good faith, Wealthmark reserves the right to make any changes to the referral program without prior notice. We may make such changes in view of changing market conditions, security or risk of fraud or any other reason. The decision on reward eligibility will be made by Wealthmark and will be final and binding. By participating in the referral program you acknowledge the above.If you find someone misusing the referral program, you can let us know by contacting us directly. We'll look into it and take the necessary steps to fix it.
  </div>
      </div>
    </div>
  </div>
  
  
</div>
</div>
</section>
                            </div>
                            
                        </div>
                    </div>
    </div>
 
    





<!--<section class="bg-white">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--        <div class="col text-center">-->
<!--            <h1 class="title mb-4">-->
<!--                Start Earning Now-->
<!--         </h1>-->
<!--         <a href="{{ url( app()->getLocale(), 'login') }}" class="btn-yellow px-5">-->
<!--             Log In-->
<!--         </a>-->
<!--        </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->




    @include('template.country_language')
    @include('template.web_footer')

 <script src="{{ asset('ordian_bootstrap.min.js') }}"></script> 

</body>

</html>