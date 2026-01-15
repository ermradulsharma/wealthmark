<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      @include('template.web_css')

      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">

   </head>
   <body>
      @include('template.web_menu')
      <section class="bg-light-theme top-slider">
         <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
               <div class="col-12 content-box col-lg-6 mb-8 order-2 order-lg-1">
                  <h1 class="display-5">Verify your account Or Create New One </h1>
                  <p class="mb-4 fs-3">Get verified to achieve higher trading capacity.</p>
                  <a class="btn btn-yellow shadow">Get Verified </a>
               </div>
               <div class="col-12 col-lg-6 text-center order-1 order-lg-2 text-center">
                  <img src="{{ asset('rd-party-payment.png') }}" class="max-width-300px animated m-auto"  alt="third party payment-img" title="third party payment-img" />
               </div>
            </div>
         </div>
      </section>
      <section class="working-process bg-white">
         <div class="container">
            <!--Sec Title-->
            <div class="div-title centered">
               <h1>Get started in 3 Simple steps</h1>
            </div>
            <div class="working-process-step">
               <div class="row">
                  <!--Process Block-->
                  <div class="process-block col-lg-4 col-md-6">
                     <div class="inner-box">
                        <div class="count-box">
                           <div class="count">01</div>
                           ss
                        </div>
                        <h3>Create Account</h3>
                        <div class="fs-14 text-center text-muted">Lorem ipsum dolor sit amet constur adipelit sed do eiusm.</div>
                     </div>
                  </div>
                  <!--Process Block-->
                  <div class="process-block col-lg-4 col-md-6">
                     <div class="inner-box float-bob-y">
                        <div class="count-box">
                           <div class="count">02</div>
                        </div>
                        <h3>Verify Account</h3>
                        <div class="fs-14 text-center text-muted">Lorem ipsum dolor sit amet constur adipelit sed do eiusm.</div>
                     </div>
                  </div>
                  <!--Process Block-->
                  <div class="process-block col-lg-4 col-md-6">
                     <div class="inner-box">
                        <div class="count-box">
                           <div class="count">03</div>
                        </div>
                        <h3>Go Ahead for Payment</h3>
                        <div class="fs-14 text-center text-muted">Lorem ipsum dolor sit amet constur adipelit sed do eiusm.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-xs-6 col-sm-6 text-center">
                  <img src="{{ asset('rd-party-payment.png') }}" class="max-width-300px"  alt="third party payment-img" title="third party payment-img" />
               </div>
               <div class="col-md-6 col-xs-6 col-sm-6">
                  <div class="sec-title">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Once Payment Done</h2>
                  </div>
                  <div class="text">Every four years, the Bitcoin rewards are slashed in half. Find
                     out why on the Halving page.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                     eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  <a href="#" class="btn btn-yellow shadow mt-3">View More</a>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sec-title">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Popular <span class="yellow-text">Payments</span></h2>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-borderless shadow-sm">
                        <thead>
                           <tr>
                              <th scope="col">Coin</th>
                              <th scope="col">Algo</th>
                              <th scope="col">Active Workers</th>
                              <th scope="col">Hashrate</th>
                              <th scope="col">Payment Done</th>
                              <th scope="col">Tutorial</th>
                              <th scope="col">#</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><img src="{{ asset('of-work-icon-1.svg') }}"
                                 class="img-fluid"  alt="Coin" title="Coin"></td>
                              <td>SHA256</td>
                              <td>695139</td>
                              <td>38.53 Eh/s</td>
                              <td>10000000</td>
                              <td><span class="text-warning">View&nbsp;Tutorial </span></td>
                              <td><span class="text-warning"><a>View&nbsp;More </a></span></td>
                           </tr>
                           <tr>
                              <td><img src="{{ asset('of-work-icon-1.svg') }}"
                                 class="img-fluid" alt="Coin" title="Coin" ></td>
                              <td>SHA256</td>
                              <td>695139</td>
                              <td>38.53 Eh/s</td>
                              <td>15470000</td>
                              <td><span class="text-warning">View&nbsp;Tutorial </span></td>
                              <td><span class="text-warning"><a>View&nbsp;More </a></span></td>
                           </tr>
                           <tr>
                              <td><img src="{{ asset('of-work-icon-1.svg') }}"
                                 class="img-fluid"  alt="Coin" title="Coin"></td>
                              <td>SHA256</td>
                              <td>695139</td>
                              <td>38.53 Eh/s</td>
                              <td>8570000</td>
                              <td><span class="text-warning">View&nbsp;Tutorial </span></td>
                              <td><span class="text-warning"><a>View&nbsp;More </a></span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="wm-pay-accordian-section bg-light-blue">
         <div class="container">
            <div class="accordion" id="accordionExample">
               <div class="card">
                  <div class="card-head" id="headingOne">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        1. What is Wealthmark Pay?
                     </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">  
                           This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingTwo">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by Wealthmark?
                     </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">
                           You can access your Wealthmark Pay Wallet by clicking [Wallets] - [Funding] - [Pay] on your Wealthmark App.
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingThree">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. How long does it take for a Wealthmark Pay transaction to be completed?
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">
                           Wealthmark Pay transactions are usually confirmed instantly.
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingFour">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        4. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by Wealthmark?
                     </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">
                           You can access your Wealthmark Pay Wallet by clicking [Wallets] - [Funding] - [Pay] on your Wealthmark App.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
      <script src="{{ asset('ordian_bootstrap.min.js') }}"></script> 
   </body>
</html>