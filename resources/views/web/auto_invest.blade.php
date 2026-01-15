  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Auto Investment</title>
  @include('template.web_css')
  </head>

 <body class="bg-white">
        @include('template.web_menu')



<section  class="breadcrumbs shadow-sm auto-invesment pb-0">
              <div class="container-fluid">
                  <div class="row justify-content-center">
                     <div class="col-lg-4  d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1 align-items-center pt-4 pb-4" data-aos="fade-up" data-aos-delay="200">
                     <h3 class="top-heading yellow-text">Auto-Invest</h3>
                     <p class="top-p text-white">Accumulate Crypto on Autopilot.</p>

                     </div>
                     <div class="d-none d-md-block col-lg-5 offset-lg-1 order-1 order-lg-2 hero-img mt-3 mb-5" data-aos="zoom-in" data-aos-delay="200">

                       <div class="asset-overview login-box-main">
                              <div class="login-box-bg">
                                <div class="login-box">
                                  <img src="{{ asset('assets/img/account.png') }}" class="login-box-img">
                                  <div class="login-box-txt">Log in to view holding details</div>
                                  <button type="button" class="btn btn-yellow">Log In</button>
                                </div>
                              </div>
                            </div>
                     </div>
                  </div>
                </div>
          </section>
<section class="Auto-Invest-Plan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="Auto-Invest-div-left">
                          <div  class="Auto-Invest-div-title">Create your own Auto-Invest Plan</div>
                          <div  class="Auto-Invest-div-subtitle">Regularly invest in cryptocurrency with a pre-determined amount and accumulate your crypto holdings</div>
                          <div class="Auto-Invest-div-inner">
                            <div class="Auto-Invest-div-inner-number">1</div>
                            <div class="Auto-Invest-div-inner-text-div">
                              <div class="Auto-Invest-yellow-line"></div>
                              <div class="Auto-Invest-title-sm">Start creating your Auto-Invest Plan</div>
                              <div class="Auto-Invest-subtitle-sm">Pick a coin you want to invest in, decide your investment amount and schedule a recurring plan.</div>
                            </div>
                            <div class="Auto-Invest-div-inner-number">2</div>
                            <div class="Auto-Invest-div-inner-text-div-2">
                              <div class="Auto-Invest-yellow-line"></div>
                              <div class="Auto-Invest-title-sm">Enjoy the Auto-Invest plan while earning passive income</div>
                              <div class="Auto-Invest-subtitle-sm">Once invested, you can receive daily earnings from Simple Earn and redeem your funds any time you wish.</div>
                            </div>
                            <img src="{{ asset('assets/img/circle-plus.svg') }}" class="Auto-Invest-sideimg">
                          </div>
                        </div>
                       <img src="{{ asset('assets/img/p2p-pro_banner.png') }}" class="Auto-Invest-Plan-img">
                </div>
            </div>
        </div>

    </section>
<section id="Auto-Invest-record-table" class=" bg-white investment-table">



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
         What is Auto-Invest?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">   Auto-Invest allows you to automate crypto investment and earn passive income. It is a dollar-cost averaging (DCA) investment strategy. You can choose the cryptocurrency you want to purchase on a regular basis. Your purchased crypto will be automatically deposited into your Flexible account, so you can earn passive income with your investments.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      What happens to my Auto-Invest purchase when I don’t have sufficient balance in my Spot Wallet?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text"> Wealthmark Pay currently supports more than 40 cryptocurrencies.</div>
       <div class="text">
          If you have enabled the [Use Flexible Balance] function, when the balance in your Spot Wallet is insufficient to cover the Auto-Invest plan purchase, the system will automatically redeem the assets from your Flexible plans to complete the purchase.
If you don't enable the function, the purchase will fail. The system will try to make another purchase on the next Auto-Invest date.
       </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How many Auto-Invest plans can I subscribe to?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text"> There is no maximum limit to the number of Auto-Invest plans you can subscribe to.</div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
       How to pause or stop my Auto-Invest plans?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">You can go to [Wallet] - [Earn] and click [Auto-Invest Plan] to view your plans.
To pause or resume a plan, toggle the button under [On/Off]. To stop a plan permanently, click [Remove Plan]. </div>
      </div>
    </div>
  </div>


</div>
</div>
</section>

   <!-------------------------modal-------------------------------->





  @include('template.country_language')
    @include('template.web_footer')


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
     <script>
        $(document).ready(function(){
          $( window ).load(function() {
                $("#Auto-Invest-record-table").load("<?php echo url( app()->getLocale(), 'auto_investment_section');  ?>");
            });
        });
    </script>

    </body>
</html>
