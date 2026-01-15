  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <title>Wealth Mark | {{ Request::segment(2) }}</title>
  @include('template.web_css')
      

  
  
   </head>
   
 <body class="bg-white">
        @include('template.web_menu')
    
      <section  class="breadcrumbs shadow-sm wm-card-top pt-5 pb-5">
          <div class="container-fluid">
              <div class="row align-items-center justify-content-center">
                 <div class="col-lg-4 col-md-6  d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1 pb-5" data-aos="fade-up" data-aos-delay="200">
                    
                 <h3 class="top-heading">Welcome to the Wealthmark Card</h3>
                 <p class="top-p">Earn up to 8% Wealthmark cashback every time you make an eligible purchase. Learn more about <a href="#" class="yellow-text" data-bs-toggle="modal" data-bs-target="#who-can-apply"> who can apply </a> </p>
                
                 </div>
                 <div class="col-lg-5 col-md-6  order-1 order-lg-2 hero-img text-center">
                    <img src="{{ asset('img/wealthmark-card/wm-card.png') }}" class="img-fluid w-100 animated max-width-500px mb-5" alt="">
                 </div>
              </div>
           </div>
      </section>
      
      <section class="wm-card-point">
          <div class="container">
  
       
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="padding-box">
                    <div class="circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4">
                       <i class="bi bi-bullseye"></i>
                    </div>
                    <div class="text-center">
                        <!--<h3>Services</h3>-->
                        <p class="font-weight-light my-3">Supported by Google Pay and Samsung Pay</p>
                    </div>
                </div>
            </div>
          <div class="col-md-4 col-sm-4">
                <div class="padding-box">
                    <div class="circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4">
                      <i class="bi bi-upc-scan"></i>
                    </div>
                    <div class="text-center">
                        <!--<h3>Services</h3>-->
                        <p class="font-weight-light my-3">Hold and Exchange Crypto only when you are making payments.</p>
                    </div>
                </div>
            </div>
          <div class="col-md-4 col-sm-4 my-2">
                <div class="padding-box">
                    <div class="circle text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4">
                      <i class="bi bi-lock-fill"></i>
                    </div>
                    <div class="text-center">
                        <!--<h3>Services</h3>-->
                        <p class="font-weight-light my-3">Spend with your Virtual Card immediately after applying</p>
                    </div>
                </div>
            </div>
        </div>
    
</div>
      </section>
      
   
      
<section class="wm-marketplace">
    <div class="container">
        <div class="row align-items-center mb-4 pt-4 pb-4">
             <div class="col-md-6 col-sm-6  order-lg-last text-center">
                   <img src="{{ asset('img/wealthmark-card/wm-cashback.png') }}" class="img-fluid w-100 animated max-width-300px pb-4 pt-4" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                        <div class="sec-title text-left mb-2">
                           
                            <h2 class="heading-h2">Earn up to 8% <span class="yellow-text"> Wealthmark Cashback </span> everytime you spend</h2>
                           
                        </div>
                        <div class="text">
                               All your cashback from eligible purchases are automatically deposited in your Funding Wallet so you only need to worry about spending your crypto.
                        </div>
                        
                        <a href="#" class="learn-more btn-6">
                           <span>Learn More </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>
                            
            </div>
            
           
        </div>
        <div class="row align-items-center mb-4 pt-4 pb-4">
             <div class="col-md-6 col-sm-6 text-center">
                   <img src="{{ asset('img/wealthmark-card/lowest-fees.png') }}" class="img-fluid w-100 animated max-width-300px pb-4 pt-4" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                        <div class="sec-title text-left mb-2">
                           
                            <h2 class="heading-h2"> <span class="yellow-text"> Lowest Fees </span> in the Market</h2>
                           
                        </div>
                        <div class="text">
                              Free ATM withdrawal. No foreign exchange fees and annual fees.
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
        <div class="row align-items-center mb-4 pt-4 pb-4">
             <div class="col-md-6 col-sm-6  order-lg-last text-center">
                   <img src="{{ asset('img/wealthmark-card/hold-exchange-crypto.png') }}" class="img-fluid w-100 animated max-width-300px pb-4 pt-4" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                        <div class="sec-title text-left mb-2">
                           
                            <h2 class="heading-h2"> <span class="yellow-text">Hold </span> and  <span class="yellow-text"> Exchange </span> Crypto only when you need to</h2>
                           
                        </div>
                        <div class="text">
                             Hold crypto in your Wealthmark Funding Wallet and exchange only when you're making payments. No need to pre convert your crypto.
                        </div>
                        
                        <a href="#" class="learn-more btn-6">
                           <span>Learn More </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>
                            
            </div>
            
           
        </div>
        <div class="row align-items-center mb-4 pt-4 pb-4">
             <div class="col-md-6 col-sm-6 text-center">
                   <img src="{{ asset('img/wealthmark-card/all-funds-are.png  ') }}" class="img-fluid w-100 animated max-width-300px pb-4 pt-4" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                        <div class="sec-title text-left mb-2">
                           
                            <h2 class="heading-h2">All Funds are <span class="yellow-text">SAFU </span></h2>
                           
                        </div>
                        <div class="text">
                              All your Wealthmark Card funds and transactions are protected by Wealthmark’s world class security. Sleep tight, we've got you covered.
                        </div>
                        
                        <a href="#" class="learn-more btn-6">
                           <span>User Protection Commitment > </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>
                            
            </div>
            
           
        </div>
      
      
    </div>
</section>    

<section class="how-its-work">
       <div class="container"> 
            <div class="sec-title text-center mb-4">
                           <h2 class="heading-h2">How your card works</h2>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                 <div class="box">
    <div class="icon">01</div>
    <div class="content">
      <h3>Top-up crypto to your Funding Wallet</h3>
   <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nihil minus, repellat sit numquam modi.</div>
      <a href="#">Read More</a>
    </div>
  </div>
  
            </div>
             <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="box">
    <div class="icon">02</div>
    <div class="content">
      <h3>Spend anywhere you see the Visa logo</h3>
     <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nihil minus, repellat sit numquam modi.</div>
      <a href="#" class="btn-2">Read More</a>
    </div>
  </div>
            </div>
             <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box">
    <div class="icon">03</div>
    <div class="content">
      <h3>Earn Wealthmark cashback</h3>
    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nihil minus, repellat sit numquam modi.</div>
      <a href="#" class="btn-3">Read More</a>
    </div>
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
        Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by Wealthmark?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text"> Wealthmark Pay currently supports more than 40 cryptocurrencies.</div>
       <div class="text">
           ADA, ATOM, AVA, BCH, Wealthmark, BTC, BUSD, CTSI, DASH, DOGE, DOT, EGLD, EOS, ETC, ETH, FIL, FRONT, FTM, GRS, HBAR, IOTX, LINK, LTC, MANA, MATIC, NEO, OM, ONE, PAX, QTUM, STRAX, SXP, TRX, TUSD, UNI, USDC, USDT, VAI, VET, WRX, XLM, XMR, XRP, XTZ, XVS, ZEC, ZIL.
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
      
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>      
      

<!-- Modal -->
<div class="modal fade" id="who-can-apply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Who can apply</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h5 class="title">For EEA Residents</h5>
       <div class="text">The Wealthmark EEA Card is available to EEA residents who are living in the following countries/regions:</div>
       <div class="text">Austria, Belgium, Bulgaria, Croatia, Republic of Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany, Gibraltar, Greece, Hungary, Iceland, Ireland, Italy, Latvia, Liechtenstein, Lithuania, Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Romania, Slovakia, Slovenia, Spain, and Sweden.</div>
        <div class="text">If you are not a citizen of the above countries but are currently residing there, you are eligible to apply. Please complete personal verification and submit your <a href="#" class="yellow-text"> Proof of Address </a> before applying for Wealthmark Card.</div>
      
      <h5 class="title">
          For Ukrainian Refugee
      </h5>
      <div class="text">
          Wealthmark Card Refugee Program allows Ukrainian Refugees to apply for Wealthmark Card while in other EEA supported countries.
      </div>
      <div class="text">Requirements are:</div>
     <div class="text"> 1. Identity verification country = Ukraine (age above 18) AND
 </div>
<div class="text">2. Must bind phone number to Wealthmark account and the phone’s country code is from the supported list of EEA countries AND </div>

<div class="text">3. You are currently located in the supported list of EEA countries AND </div>

<div class="text">4. Proof of Address (POA) = NULL or Ukraine </div>

<div class="text">You can find more information on the Refugee card here.</div>
<div class="text">Details for crypto donations are here.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
    </body>
</html>