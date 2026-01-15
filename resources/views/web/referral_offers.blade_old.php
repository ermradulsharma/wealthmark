  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | referral-offers</title>
  @include('template.web_css')
      
  
 <style>
     #header{
         background:white;
         
     }


 </style>
  
  
   </head>
   
 <body class="bg-white">
     
        @include('template.web_menu')
    
    
    
   
   <section class="affiliate-section-block shadow-sm wm-pay-top lite-referral-banner" id="refferal-section">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 order-2 order-lg-1" data-aos="fade-up"
                    data-aos-delay="200">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link referral-lite" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Lite
                                Referral</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  standard-referral" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Standard
                                Referral</button>
                        </li>
                    </ul>
                    <h3 class="top-heading"><strong>Refer Friends.
                            Get 100 USDT Trading Fee Credit Each.</strong></h3>

                    <p class="top-p text-primary">You're just steps away from receiving your reward.</p>
                    <a class="btn btn-yellow shadow become-affiliate-btn">View Rules</a>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 order-1 order-lg-2" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="{{ asset('img/refer-friend-refferal.png') }}" class="img-fluid"
                        alt="walth mark blog">
                </div>
            </div>
        </div>
    </section>

    <section class="affiliate-section-block shadow-sm wm-pay-top standard-referral-banner" id="standard-section">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 order-2 order-lg-1" data-aos="fade-up"
                    data-aos-delay="200">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link referral-lite" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Lite
                                Referral</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link standard-referral" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Standard
                                Referral</button>
                        </li>
                    </ul>
                    <h3 class="top-heading"><strong>Refer Friends. Earn Crypto Together.</strong></h3>

                    <p class="top-p text-white">You're just steps away from receiving your reward.</p>
                    <a class="btn btn-yellow shadow become-affiliate-btn">View Rules</a>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 order-1 order-lg-2" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="{{ asset('img/refer-friend-refferal-2.png') }}" class="img-fluid"
                        alt="walth mark blog">
                </div>
            </div>
        </div>
    </section>

    <section class="refer-your-friends" id="refer-your-friends">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">How To Refer Your Friends</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 trading-inner-box">

                    <div class="card">
                        <img src="{{ asset('img/tutorial-step1.png') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Share your referral link with friends</h5>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 trading-inner-box">
                    <div class="card">
                        <img src="{{ asset('img/tutorial-step2.png') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Invite friends to sign up and deposit more $50</h5>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 trading-inner-box">
                    <div class="card">
                        <img src="{{ asset('img/tutorial-step3.png') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Receive 100 USDT cashback voucher each</h5>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="referral-section" id="referral-section">
        <div class="container">
            <div class="row">
                <div class="sec-title">
                    <h3 class="digital-asset-heading text-center">Start Earning Now</h3>
                </div>
            </div>
            <div class="row digital-assets-row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a class="btn btn-yellow start-earning-loging-btn">Log In</a>
                </div>
            </div>
        </div>
    </section>




      
  @include('template.country_language')
    @include('template.web_footer') 
    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".referral-lite").click(function(){
    $(".lite-referral-banner").show();
    $(".standard-referral-banner").hide();
  });
  $(".standard-referral").click(function(){
    $(".standard-referral-banner").show();
    $(".lite-referral-banner").hide();
  });
});
</script>
  
    </body>
</html>