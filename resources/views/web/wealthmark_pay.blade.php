  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <title>Wealth Mark | {{ Request::segment(2) }}</title>
  @include('template.web_css')
      
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
     #header{
         background:white;
         
     }
     
  

 </style>
  
  
   </head>
   
 <body class="bg-white">
        @include('template.web_menu')
    
    <section  class="breadcrumbs shadow-sm wm-pay-top to-slider  pb-5">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 content-box col-md-6 col-sm-12 d-flex flex-column justify-content-center order-2 order-lg-1 p-4">
                
                    <h5>Welcome to the <span class="yellow-text"> #CryptoLifestyle </span></h5>
                    <h3 class="top-heading">Pay and get paid with crypto.</h3>
                    <p class="top-p">Wealthmark Pay is a contactless, borderless and secure cryptocurrency payment technology designed by Wealthmark. Shop with crypto or send crypto to friends and family worldwide.</p>
                
                </div>
                <div class="col-lg-5 col-md-6 col-sm-10 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('img/wm-pay-banner.png') }}" class="img-fluid animated max-width-300px" alt="wealthmark pay">
                </div>
            </div>
        </div>
    </section>
      
      
      
      <section class="wm-pay-type">
            <div class="container">
                 <div class="sec-title text-left mb-3">
                           
                            <h2 class="heading-h2">Freedom to choose how you pay</h2>
                           
                        </div>
    <div class="row">
        
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="service-content">
                    <h3 class="title">Zero fees</h3>
                    <div class="text mb-0 text-center"> Say goodbye to unfair fees and charges. Pay, send and receive crypto—all with zero fees.</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox orange">
                <div class="service-icon">
               <i class="bi bi-lightning-charge"></i>
                </div>
                <div class="service-content">
                    <h3 class="title">Lightning fast payments</h3>
                   <div class="text mb-0 text-center"> Instantly send crypto to your friends <br>and family worldwide. </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="serviceBox">
                <div class="service-icon">
                   <i class="bi bi-coin"></i>
                </div>
                <div class="service-content">
                    <h3 class="title">200+ crypto currencies</h3>
                    <div class="text mb-0 text-center"> Send and spend your favourite crypto currencies with Wealthmark Pay.</div>
                </div>
            </div>
        </div>
       
    </div>
</div>
      </section>
      
     
      
<section class="wm-marketplace">
    <div class="container">
        <div class="row align-items-center">
             <div class="col-md-6 col-sm-6  order-lg-last text-center">
                   <img src="{{ asset('img/wm-marketplace.png') }}" class="img-fluid w-100 max-width-300px animated" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="sec-title text-left">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Wealthmark Marketplace</h2>
                           
                        </div>
                          <div class="text">
                               We're bringing your favorite businesses to your fingertips. Access the Wealthmark Marketplace via the app and make payments using Wealthmark Pay.
                            </div>
                            <div class="text">
                              Spending crypto just became a whole lot easier.
                            </div>
            </div>
            
           
        </div>
        <div class="row">
             <div class="col-md-12 p-0 pt-4">
                <div class="outlet-main-div">
                 <div class="wm-outlet-div">
                           
                            <h4 class="subtitle"><b> Freedom to choose how you pay </b></h4>
                           
                        </div>
                         <div class="wm-outlet-div">
                           
                            <img src="{{ asset('img/logo-1.png') }}" class="wm-outlet">
                            <img src="{{ asset('img/logo-2.png') }}" class="wm-outlet">
                            <img src="{{ asset('img/logo-3.png') }}" class="wm-outlet">
                            <img src="{{ asset('img/logo-4.png') }}" class="wm-outlet">
                            <img src="{{ asset('img/logo-5.png') }}" class="wm-outlet">
                           
                        </div>
                        </div>
                
                    <a href="javascript:void(0)" target="_blank" class="become-marchent-a">
                        <div class="become-marchent">
                             <img src="{{ asset('img/wm-become-a-merchant.svg') }}" class="become-marchent-img">
                             <div class="become-marchent-txt-div">
                                 <div class="become-marchent-txt-div-bold">Become a Merchant</div>
                                 <div class="become-marchent-txt-div-normal">Accept cryptocurrency payments and tap into our 6.9 million and growing Pay users.</div>
                            </div>
                            <div class="become-marchent-svg-div">
                                <svg  viewBox="0 0 24 24" fill="none" class="become-marchent-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path></svg>
                            </div>
                        </div>
                    </a>
               
            </div>
        </div>
    </div>
</section>    




<section class="wm-pay-accordian-section">
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Who can use Wealthmark Pay?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">   Wealthmark pay is available to all eligible users on Wealthmark.com. To start using Wealthmark Pay, please register on Wealthmark.com and complete your Identity Verification.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Can I pay with Bitcoin, BMK and other cryptocurrencies supported by Wealthmark?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text"> Wealthmark Pay currently supports more than 40 cryptocurrencies.</div>
       <div class="text">
           ADA, ATOM, AVA, BCH, BMK, BTC, BUSD, CTSI, DASH, DOGE, DOT, EGLD, EOS, ETC, ETH, FIL, FRONT, FTM, GRS, HBAR, IOTX, LINK, LTC, MANA, MATIC, NEO, OM, ONE, PAX, QTUM, STRAX, SXP, TRX, TUSD, UNI, USDC, USDT, VAI, VET, WRX, XLM, XMR, XRP, XTZ, XVS, ZEC, ZIL.
       </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         How to access your Wealthmark Pay?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text"> You can access your Wealthmark Pay Wallet by clicking [Wallets] - [Funding] - [Pay] on your Wealthmark App.</div>
      </div>
    </div>
  </div>
  
  
  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        How long does it take for a Wealthmark Pay transaction to be completed?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">Wealthmark Pay transactions are usually confirmed instantly.</div>     
      </div>
    </div>
  </div>
  
  
</div>
</div>
</section>



  @include('template.country_language')
    @include('template.web_footer') 
      

 <script src="{{ asset('js/bootstrap.min.js') }}"></script>   
  
    </body>
</html>