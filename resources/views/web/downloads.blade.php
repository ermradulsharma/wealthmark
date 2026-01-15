<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')
      <style>
         .register-now-head{
         color:white;
         }
         .register-now-head:hover{
         color:#fdc116
         }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="bg-dark-blue p-2 reward-section">
         <div class="container">
            <div class="row aligh-items-center justify-content-center">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <a href="{{ url( app()->getLocale(), 'register') }}" class="reward-link d-flex">
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                        <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                     </svg>
                     <span class="register-now-head">&nbsp;Register now and get verified - Enjoy Welcome Rewards up to $100!&nbsp;</span>
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                     </svg>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <section class="about-section">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-12 order-2 order-lg-1 order-md-1 order-sm-2 col-xs-2">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Trade. Anywhere.</h2>
                  </div>
                  <div class="text">
                     All the power of Wealthmark's cryptocurrency exchange, in the palm of your hand. Download the Wealthmark mobile crypto trading app today.
                  </div>
                  <div class="reward-div-arrow">
                     <div class="download-div-btn">
                        <div  class="download-btn">
                           <a href="#" target="_blank"  >
                              <div class="download-text">
                                 <div class="download-text-inner">
                                    <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M15.69 1.979c.133 1.148-.345 2.28-1.046 3.112-.73.818-1.9 1.444-3.037 1.364-.15-1.105.428-2.28 1.073-2.997.73-.814 1.997-1.437 3.01-1.48zm3.64 6.17c-.135.076-2.231 1.27-2.208 3.698.026 2.94 2.707 3.912 2.739 3.923-.015.068-.42 1.402-1.424 2.757-.84 1.192-1.72 2.358-3.116 2.379-.665.014-1.113-.167-1.58-.356-.488-.198-.996-.403-1.79-.403-.843 0-1.374.212-1.886.417-.442.177-.87.348-1.474.372-1.33.047-2.347-1.273-3.217-2.455-1.738-2.412-3.092-6.8-1.277-9.785.88-1.464 2.484-2.407 4.197-2.432.755-.015 1.48.261 2.114.504.485.185.918.35 1.273.35.312 0 .733-.158 1.224-.343.773-.292 1.72-.648 2.683-.552.659.018 2.536.246 3.745 1.923l-.003.002z" ></path>
                                    </svg>
                                    <div class="margin-left-10">
                                       <div class="download-text">Download from</div>
                                       <div class="download-text">App Store</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="download-btn">
                           <a href="#" target="_blank"  >
                              <div class="download-text">
                                 <div class="download-text-inner">
                                    <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                       <path d="M17.543 14.1a1 1 0 01-.997-.997 1 1 0 01.997-.997 1 1 0 01.997.997 1 1 0 01-.997.997zm-11.05 0a1 1 0 01-.996-.997 1 1 0 01.997-.997 1 1 0 01.997.997.993.993 0 01-.997.997zM17.9 8.082l1.994-3.458a.409.409 0 00-.155-.567.409.409 0 00-.567.156l-2.022 3.503a12.354 12.354 0 00-5.14-1.098c-1.857 0-3.594.394-5.14 1.098L4.848 4.213a.419.419 0 00-.568-.156.419.419 0 00-.155.567l1.994 3.458C2.689 9.948.348 13.423 0 17.52h24c-.32-4.107-2.67-7.583-6.1-9.44z" ></path>
                                    </svg>
                                    <div class="margin-left-10">
                                       <div class="download-text">Download for</div>
                                       <div class="download-text">Android</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="download-btn">
                           <a href="#" target="_blank"  >
                              <div class="download-text">
                                 <div class="download-text-inner">
                                    <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                       <path d="M13.559 11.088L4.082 1.597h.092c.812 0 1.512.295 2.637.903l9.938 5.381-3.19 3.207zM12.637 12.008l-9.735 9.713c-.24-.388-.405-1.014-.405-1.917V4.194c0-.903.165-1.53.405-1.917l9.735 9.731zM13.559 12.913l3.19 3.206L6.81 21.5c-1.125.608-1.826.904-2.637.904h-.092l9.477-9.491zM17.944 8.526l-3.466 3.483 3.466 3.465 2.102-1.143C20.82 13.907 22 13.133 22 12.01c0-1.143-1.18-1.917-1.954-2.34l-2.102-1.143z" ></path>
                                    </svg>
                                    <div class="margin-left-10">
                                       <div class="download-text">Download from</div>
                                       <div class="download-text">Google Play</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div>
                        <div class="barcode-div-download">
                           <!--<svg shape-rendering="crispEdges" height="100" width="100" viewBox="0 0 41 41">-->
                           <!--   <path fill="#FFFFFF" d="M0,0 h41v41H0z"></path>-->
                           <!--   <path fill="#000000" d="M0 0h7v1H0zM13 0h1v1H13zM19 0h1v1H19zM21 0h3v1H21zM26 0h2v1H26zM29 0h3v1H29zM34,0 h7v1H34zM0 1h1v1H0zM6 1h1v1H6zM8 1h4v1H8zM13 1h3v1H13zM18 1h1v1H18zM20 1h1v1H20zM23 1h1v1H23zM25 1h1v1H25zM27 1h4v1H27zM32 1h1v1H32zM34 1h1v1H34zM40,1 h1v1H40zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h3v1H8zM17 2h1v1H17zM19 2h2v1H19zM23 2h1v1H23zM29 2h1v1H29zM31 2h1v1H31zM34 2h1v1H34zM36 2h3v1H36zM40,2 h1v1H40zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM10 3h2v1H10zM14 3h1v1H14zM18 3h1v1H18zM20 3h1v1H20zM22 3h3v1H22zM26 3h6v1H26zM34 3h1v1H34zM36 3h3v1H36zM40,3 h1v1H40zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM8 4h1v1H8zM10 4h1v1H10zM14 4h2v1H14zM21 4h1v1H21zM26 4h3v1H26zM34 4h1v1H34zM36 4h3v1H36zM40,4 h1v1H40zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM11 5h1v1H11zM15 5h3v1H15zM19 5h1v1H19zM21 5h2v1H21zM24 5h1v1H24zM27 5h2v1H27zM30 5h3v1H30zM34 5h1v1H34zM40,5 h1v1H40zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h1v1H14zM16 6h1v1H16zM18 6h1v1H18zM20 6h1v1H20zM22 6h1v1H22zM24 6h1v1H24zM26 6h1v1H26zM28 6h1v1H28zM30 6h1v1H30zM32 6h1v1H32zM34,6 h7v1H34zM8 7h3v1H8zM12 7h1v1H12zM14 7h2v1H14zM17 7h1v1H17zM20 7h2v1H20zM23 7h2v1H23zM26 7h1v1H26zM29 7h2v1H29zM32 7h1v1H32zM0 8h2v1H0zM3 8h1v1H3zM6 8h2v1H6zM9 8h1v1H9zM11 8h1v1H11zM13 8h2v1H13zM16 8h1v1H16zM19 8h1v1H19zM25 8h4v1H25zM30 8h1v1H30zM34 8h3v1H34zM38 8h2v1H38zM4 9h2v1H4zM9 9h2v1H9zM12 9h2v1H12zM16 9h2v1H16zM20 9h3v1H20zM24 9h3v1H24zM28 9h1v1H28zM32 9h1v1H32zM34 9h1v1H34zM40,9 h1v1H40zM0 10h1v1H0zM2 10h1v1H2zM4 10h8v1H4zM14 10h1v1H14zM17 10h1v1H17zM19 10h1v1H19zM21 10h1v1H21zM28 10h2v1H28zM31 10h3v1H31zM35 10h1v1H35zM37 10h3v1H37zM5 11h1v1H5zM7 11h3v1H7zM13 11h1v1H13zM15 11h2v1H15zM18 11h2v1H18zM21 11h2v1H21zM24 11h2v1H24zM28 11h1v1H28zM30 11h1v1H30zM35 11h1v1H35zM38 11h1v1H38zM40,11 h1v1H40zM1 12h1v1H1zM3 12h4v1H3zM9 12h1v1H9zM12 12h2v1H12zM16 12h2v1H16zM19 12h1v1H19zM21 12h1v1H21zM24 12h2v1H24zM27 12h3v1H27zM31 12h1v1H31zM34 12h1v1H34zM37 12h1v1H37zM39,12 h2v1H39zM1 13h1v1H1zM3 13h1v1H3zM7 13h2v1H7zM11 13h2v1H11zM17 13h3v1H17zM22 13h1v1H22zM24 13h1v1H24zM30 13h4v1H30zM37 13h1v1H37zM0 14h1v1H0zM2 14h5v1H2zM8 14h1v1H8zM10 14h1v1H10zM12 14h2v1H12zM16 14h1v1H16zM21 14h1v1H21zM23 14h4v1H23zM32,14 h9v1H32zM1 15h2v1H1zM7 15h1v1H7zM9 15h2v1H9zM12 15h7v1H12zM20 15h10v1H20zM31 15h2v1H31zM34 15h1v1H34zM36 15h2v1H36zM39 15h1v1H39zM0 16h1v1H0zM4 16h4v1H4zM9 16h1v1H9zM11 16h2v1H11zM15 16h3v1H15zM21 16h2v1H21zM27 16h1v1H27zM29 16h1v1H29zM31 16h2v1H31zM35 16h1v1H35zM37 16h1v1H37zM39 16h1v1H39zM2 17h1v1H2zM7 17h2v1H7zM11 17h2v1H11zM14 17h1v1H14zM16 17h1v1H16zM20 17h7v1H20zM33 17h3v1H33zM37 17h2v1H37zM40,17 h1v1H40zM0 18h4v1H0zM6 18h1v1H6zM8 18h2v1H8zM13 18h1v1H13zM17 18h1v1H17zM22 18h1v1H22zM26 18h1v1H26zM28 18h3v1H28zM33 18h1v1H33zM35 18h1v1H35zM38,18 h3v1H38zM0 19h3v1H0zM4 19h2v1H4zM7 19h1v1H7zM9 19h2v1H9zM12 19h1v1H12zM14 19h2v1H14zM17 19h2v1H17zM20 19h2v1H20zM24 19h1v1H24zM26 19h1v1H26zM29 19h2v1H29zM33 19h1v1H33zM37 19h1v1H37zM0 20h1v1H0zM6 20h2v1H6zM10 20h2v1H10zM13 20h2v1H13zM16 20h1v1H16zM18 20h1v1H18zM21 20h1v1H21zM25 20h3v1H25zM32 20h4v1H32zM37,20 h4v1H37zM0 21h2v1H0zM4 21h2v1H4zM7 21h2v1H7zM11 21h1v1H11zM13 21h1v1H13zM16 21h2v1H16zM20 21h2v1H20zM24 21h1v1H24zM29 21h1v1H29zM32 21h3v1H32zM38 21h1v1H38zM40,21 h1v1H40zM1 22h1v1H1zM3 22h1v1H3zM5 22h4v1H5zM10 22h1v1H10zM13 22h2v1H13zM16 22h1v1H16zM18 22h2v1H18zM21 22h1v1H21zM28 22h8v1H28zM37 22h1v1H37zM39 22h1v1H39zM3 23h2v1H3zM10 23h1v1H10zM13 23h1v1H13zM16 23h1v1H16zM18 23h1v1H18zM21 23h2v1H21zM24 23h5v1H24zM30 23h1v1H30zM33 23h3v1H33zM38 23h2v1H38zM0 24h4v1H0zM6 24h1v1H6zM8 24h1v1H8zM10 24h1v1H10zM12 24h2v1H12zM17 24h1v1H17zM20 24h2v1H20zM25 24h1v1H25zM28 24h2v1H28zM32 24h4v1H32zM0 25h2v1H0zM7 25h2v1H7zM10 25h1v1H10zM12 25h2v1H12zM19 25h2v1H19zM22 25h1v1H22zM25 25h1v1H25zM31 25h3v1H31zM0 26h1v1H0zM3 26h1v1H3zM6 26h3v1H6zM10 26h2v1H10zM14 26h1v1H14zM16 26h1v1H16zM20 26h1v1H20zM23 26h4v1H23zM34 26h1v1H34zM37,26 h4v1H37zM0 27h1v1H0zM2 27h1v1H2zM7 27h5v1H7zM13 27h2v1H13zM16 27h2v1H16zM21 27h5v1H21zM27 27h4v1H27zM32 27h1v1H32zM34 27h1v1H34zM36 27h2v1H36zM2 28h1v1H2zM6 28h1v1H6zM8 28h1v1H8zM10 28h5v1H10zM17 28h1v1H17zM19 28h4v1H19zM29 28h1v1H29zM32 28h2v1H32zM39,28 h2v1H39zM1 29h2v1H1zM4 29h2v1H4zM7 29h2v1H7zM12 29h1v1H12zM14 29h1v1H14zM16 29h2v1H16zM22 29h3v1H22zM26 29h1v1H26zM28 29h3v1H28zM32 29h4v1H32zM38,29 h3v1H38zM0 30h1v1H0zM4 30h1v1H4zM6 30h1v1H6zM8 30h1v1H8zM11 30h2v1H11zM17 30h1v1H17zM21 30h1v1H21zM24 30h1v1H24zM29 30h1v1H29zM34 30h2v1H34zM37 30h1v1H37zM39,30 h2v1H39zM3 31h1v1H3zM9 31h1v1H9zM12 31h1v1H12zM14 31h1v1H14zM17 31h1v1H17zM21 31h1v1H21zM24 31h1v1H24zM28 31h3v1H28zM32 31h2v1H32zM36 31h2v1H36zM40,31 h1v1H40zM0 32h1v1H0zM2 32h2v1H2zM5 32h2v1H5zM8 32h1v1H8zM10 32h1v1H10zM12 32h5v1H12zM19 32h1v1H19zM21 32h1v1H21zM23 32h4v1H23zM28 32h1v1H28zM31 32h6v1H31zM38 32h1v1H38zM40,32 h1v1H40zM8 33h1v1H8zM10 33h1v1H10zM12 33h1v1H12zM14 33h1v1H14zM17 33h1v1H17zM20 33h3v1H20zM24 33h1v1H24zM28 33h2v1H28zM31 33h2v1H31zM36 33h3v1H36zM40,33 h1v1H40zM0 34h7v1H0zM8 34h3v1H8zM16 34h2v1H16zM19 34h2v1H19zM25 34h2v1H25zM28 34h1v1H28zM32 34h1v1H32zM34 34h1v1H34zM36 34h2v1H36zM0 35h1v1H0zM6 35h1v1H6zM9 35h1v1H9zM14 35h1v1H14zM18 35h1v1H18zM20 35h2v1H20zM25 35h1v1H25zM28 35h1v1H28zM30 35h1v1H30zM32 35h1v1H32zM36,35 h5v1H36zM0 36h1v1H0zM2 36h3v1H2zM6 36h1v1H6zM10 36h1v1H10zM16 36h2v1H16zM20 36h2v1H20zM24 36h2v1H24zM27 36h3v1H27zM32 36h5v1H32zM39 36h1v1H39zM0 37h1v1H0zM2 37h3v1H2zM6 37h1v1H6zM8 37h2v1H8zM11 37h1v1H11zM19 37h4v1H19zM25 37h1v1H25zM30 37h2v1H30zM34,37 h7v1H34zM0 38h1v1H0zM2 38h3v1H2zM6 38h1v1H6zM11 38h1v1H11zM17 38h2v1H17zM20 38h1v1H20zM23 38h1v1H23zM25 38h2v1H25zM28 38h2v1H28zM32 38h1v1H32zM35 38h4v1H35zM0 39h1v1H0zM6 39h1v1H6zM8 39h4v1H8zM13 39h1v1H13zM16 39h4v1H16zM21 39h2v1H21zM25 39h2v1H25zM29 39h4v1H29zM34 39h1v1H34zM36 39h1v1H36zM39 39h1v1H39zM0 40h7v1H0zM8 40h3v1H8zM12 40h1v1H12zM15 40h1v1H15zM17 40h1v1H17zM19 40h1v1H19zM21 40h2v1H21zM24 40h1v1H24zM29 40h2v1H29zM32 40h4v1H32zM37 40h1v1H37zM39 40h1v1H39z"></path>-->
                           <!--</svg>-->
                           <img src="{{ asset('assets/img/wm-qrcode.png') }}" class="" alt="Scan to Download" title="Scan to Download">
                        </div>
                        <div class="scan-text">Scan to Download</div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 order-1 order-lg-2 order-md-2 order-sm-1 col-xs-1">
                  <img src="{{ asset('assets/img/trade-anywhere.png') }}" class="img-fluid animated w-100" alt="Trade. Anywhere" title="Trade. Anywhere.">
               </div>
            </div>
         </div>
      </section>
      <section class="about-section bg-light-blue">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-12 order-1 order-lg-1 order-md-1 order-sm-1 col-xs-1">
                  <img src="{{ asset('assets/img/desktop.png') }}" class="img-fluid animated w-100" alt="Desktop App" title="Desktop App">
               </div>
               <div class="col-md-6 col-sm-12 order-2 order-lg-2 order-md-2 order-sm-2 col-xs-2">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Desktop</h2>
                  </div>
                  <div class="text">
                     Powerful crypto trading platform for those who mean business. The Wealthmark crypto trading experience, tailor-made for your Windows or MacOS device.
                  </div>
                  <div class="download-div-btn">
                     <div  class="download-btn">
                        <a href="#" target="_blank"  >
                           <div class="download-text">
                              <div class="download-text-inner">
                                 <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.69 1.979c.133 1.148-.345 2.28-1.046 3.112-.73.818-1.9 1.444-3.037 1.364-.15-1.105.428-2.28 1.073-2.997.73-.814 1.997-1.437 3.01-1.48zm3.64 6.17c-.135.076-2.231 1.27-2.208 3.698.026 2.94 2.707 3.912 2.739 3.923-.015.068-.42 1.402-1.424 2.757-.84 1.192-1.72 2.358-3.116 2.379-.665.014-1.113-.167-1.58-.356-.488-.198-.996-.403-1.79-.403-.843 0-1.374.212-1.886.417-.442.177-.87.348-1.474.372-1.33.047-2.347-1.273-3.217-2.455-1.738-2.412-3.092-6.8-1.277-9.785.88-1.464 2.484-2.407 4.197-2.432.755-.015 1.48.261 2.114.504.485.185.918.35 1.273.35.312 0 .733-.158 1.224-.343.773-.292 1.72-.648 2.683-.552.659.018 2.536.246 3.745 1.923l-.003.002z" ></path>
                                 </svg>
                                 <div class="margin-left-10">
                                    <div class="download-text">Download from</div>
                                    <div class="download-text">App Store</div>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="download-btn">
                        <a href="#" target="_blank"  >
                           <div class="download-text">
                              <div class="download-text-inner">
                                 <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                    <path d="M17.543 14.1a1 1 0 01-.997-.997 1 1 0 01.997-.997 1 1 0 01.997.997 1 1 0 01-.997.997zm-11.05 0a1 1 0 01-.996-.997 1 1 0 01.997-.997 1 1 0 01.997.997.993.993 0 01-.997.997zM17.9 8.082l1.994-3.458a.409.409 0 00-.155-.567.409.409 0 00-.567.156l-2.022 3.503a12.354 12.354 0 00-5.14-1.098c-1.857 0-3.594.394-5.14 1.098L4.848 4.213a.419.419 0 00-.568-.156.419.419 0 00-.155.567l1.994 3.458C2.689 9.948.348 13.423 0 17.52h24c-.32-4.107-2.67-7.583-6.1-9.44z" ></path>
                                 </svg>
                                 <div class="margin-left-10">
                                    <div class="download-text">Download for</div>
                                    <div class="download-text">Android</div>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="download-btn">
                        <a href="#" target="_blank"  >
                           <div class="download-text">
                              <div class="download-text-inner">
                                 <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                    <path d="M13.559 11.088L4.082 1.597h.092c.812 0 1.512.295 2.637.903l9.938 5.381-3.19 3.207zM12.637 12.008l-9.735 9.713c-.24-.388-.405-1.014-.405-1.917V4.194c0-.903.165-1.53.405-1.917l9.735 9.731zM13.559 12.913l3.19 3.206L6.81 21.5c-1.125.608-1.826.904-2.637.904h-.092l9.477-9.491zM17.944 8.526l-3.466 3.483 3.466 3.465 2.102-1.143C20.82 13.907 22 13.133 22 12.01c0-1.143-1.18-1.917-1.954-2.34l-2.102-1.143z" ></path>
                                 </svg>
                                 <div class="margin-left-10">
                                    <div class="download-text">Download from</div>
                                    <div class="download-text">Google Play</div>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-12 order-2 order-lg-1 order-md-1 order-sm-2 col-xs-2" >
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Integration with ease</h2>
                  </div>
                  <div class="text">
                     Powerful crypto trading platform for those who mean business. The Wealthmark crypto trading experience, tailor-made for your Windows or MacOS device.
                  </div>
                  <a href="#" >
                     <div class="reward-div-arrow">
                        <!--<svg  viewBox="0 0 24 24" fill="none" class="api-svg">-->
                        <!--    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5a7 7 0 000 14h3v-3h3v-3h-3v-2h3V8h-3V5h-3zm11 0h-3v14h3V5z" fill="currentColor"></path>-->
                        <!--</svg>-->
                        <img src="{{ asset('assets/img/authentication-icon.svg') }}" class="api-svg" alt="Integration with ease" title="Integration with ease" >
                        <div class="api-text">Official Wealthmark API Documentation</div>
                     </div>
                  </a>
               </div>
               <div class="col-md-6 col-sm-12 order-1 order-lg-2 order-md-2 order-sm-1 col-xs-1">
                  <img src="{{ asset('assets/img/integration-with-ease.png') }}" class="img-fluid w-100" alt="wealthmark Integration with ease" title="wealthmark Integration with ease">
               </div>
            </div>
         </div>
      </section>
      <section class="about-section bg-light-blue">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-12">
                  <img src="{{ asset('assets/img/authentication-graphic-s.png') }}" class="img-fluid animated w-100 max-width-350px" alt="Wealthmark Authenticator" title="Wealthmark Authenticator">
               </div>
               <div class="col-md-6 col-sm-12">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Wealthmark Authenticator</h2>
                  </div>
                  <div class="text">
                     Powerful crypto trading platform for those who mean business. The Wealthmark crypto trading experience, tailor-made for your Windows or MacOS device.
                  </div>
                  <div class="reward-div-arrow">
                     <div class="download-div-btn">
                        <div  class="download-btn">
                           <a href="#" target="_blank"  >
                              <div class="download-text">
                                 <div class="download-text-inner">
                                    <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M15.69 1.979c.133 1.148-.345 2.28-1.046 3.112-.73.818-1.9 1.444-3.037 1.364-.15-1.105.428-2.28 1.073-2.997.73-.814 1.997-1.437 3.01-1.48zm3.64 6.17c-.135.076-2.231 1.27-2.208 3.698.026 2.94 2.707 3.912 2.739 3.923-.015.068-.42 1.402-1.424 2.757-.84 1.192-1.72 2.358-3.116 2.379-.665.014-1.113-.167-1.58-.356-.488-.198-.996-.403-1.79-.403-.843 0-1.374.212-1.886.417-.442.177-.87.348-1.474.372-1.33.047-2.347-1.273-3.217-2.455-1.738-2.412-3.092-6.8-1.277-9.785.88-1.464 2.484-2.407 4.197-2.432.755-.015 1.48.261 2.114.504.485.185.918.35 1.273.35.312 0 .733-.158 1.224-.343.773-.292 1.72-.648 2.683-.552.659.018 2.536.246 3.745 1.923l-.003.002z" ></path>
                                    </svg>
                                    <div class="margin-left-10">
                                       <div class="download-text">Download from</div>
                                       <div class="download-text">App Store</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="download-btn">
                           <a href="#" target="_blank"  >
                              <div class="download-text">
                                 <div class="download-text-inner">
                                    <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                       <path d="M17.543 14.1a1 1 0 01-.997-.997 1 1 0 01.997-.997 1 1 0 01.997.997 1 1 0 01-.997.997zm-11.05 0a1 1 0 01-.996-.997 1 1 0 01.997-.997 1 1 0 01.997.997.993.993 0 01-.997.997zM17.9 8.082l1.994-3.458a.409.409 0 00-.155-.567.409.409 0 00-.567.156l-2.022 3.503a12.354 12.354 0 00-5.14-1.098c-1.857 0-3.594.394-5.14 1.098L4.848 4.213a.419.419 0 00-.568-.156.419.419 0 00-.155.567l1.994 3.458C2.689 9.948.348 13.423 0 17.52h24c-.32-4.107-2.67-7.583-6.1-9.44z" ></path>
                                    </svg>
                                    <div class="margin-left-10">
                                       <div class="download-text">Download for</div>
                                       <div class="download-text">Android</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="download-btn">
                           <a href="#" target="_blank"  >
                              <div class="download-text">
                                 <div class="download-text-inner">
                                    <svg  viewBox="0 0 24 24" fill="none" class="download-app-icon">
                                       <path d="M13.559 11.088L4.082 1.597h.092c.812 0 1.512.295 2.637.903l9.938 5.381-3.19 3.207zM12.637 12.008l-9.735 9.713c-.24-.388-.405-1.014-.405-1.917V4.194c0-.903.165-1.53.405-1.917l9.735 9.731zM13.559 12.913l3.19 3.206L6.81 21.5c-1.125.608-1.826.904-2.637.904h-.092l9.477-9.491zM17.944 8.526l-3.466 3.483 3.466 3.465 2.102-1.143C20.82 13.907 22 13.133 22 12.01c0-1.143-1.18-1.917-1.954-2.34l-2.102-1.143z" ></path>
                                    </svg>
                                    <div class="margin-left-10">
                                       <div class="download-text">Download from</div>
                                       <div class="download-text">Google Play</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div>
                        <div class="barcode-div-download">
                           <img src="{{ asset('assets/img/wm-qrcode.png') }}" class="" alt="Scan to Download" title="Scan to Download">
                        </div>
                        <div class="scan-text">Scan to Download</div>
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
