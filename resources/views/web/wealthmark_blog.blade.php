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
      <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">
      <style>
         .dashboard-tabpills .dashboard-card-body .nav-pills .nav-link.active, .dashboard-tabpills .nav-pills .show>.nav-link, .dashboard-tabpills .dashboard-card-header .nav-pills .nav-link.active, .dashboard-tabpills .nav-pills .show>.nav-link {
         background-color: #f5f8fd!important;
         }
         .wm-blog-date {
         background-color: #fdc116;
         padding: 8px;
         }
         .wm-blog-date:hover {
         background-color: #263674;
         padding: 8px;
         color:white!important;
         }
         #pills-tab::-webkit-scrollbar {
         height: 5px;
         }
         #pills-tab::-webkit-scrollbar {
         width: 5px;
         }
         #pills-tab::-webkit-scrollbar-track {
         box-shadow: inset 0 0 5px grey;
         border-radius: 10px;
         }
         #pills-tab::-webkit-scrollbar-thumb {
         background: rgb(154, 154, 154);
         border-radius: 10px;
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="breadcrumbs shadow-sm wm-blog-top">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 col-sm-10   d-flex flex-column justify-content-center  order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="top-heading m-0 p-0 mb-3">Wealthmark Blog</h1>
                  <p class="top-p text-white">Wealthmark OTC and Execution Solutions platform is dedicated to serving private and institutional clients with the professional services and cutting-edge technology.</p>
                  <p class="top-p text-white">The prime choice for block trades, secure settlement and competitive pricing.</p>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-8 pt-5 pb-5  order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('img/wm-blog/blog-cover.png') }}" class="max-width-400px animated" alt="Wealthmark Blog Banner" title="Wealthmark Blog Banner">
               </div>
            </div>
         </div>
      </section>
      <section class="wealthmark-blogs-pills-listing bg-light-blue" id="blogs-listing-section">
         <div class="container">
         <div class="dashboard-tabpills">
            <div class="dashboard-card-body">
               <ul class="nav nav-pills my-1 border-bottom p-0" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active">Credit Card and Debit Card</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link">Bank Deposit</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link ">P2P Trading</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link">Third Party Payment</button>
                  </li>
               </ul>
               <div class="my-3">
                  <div class="row">
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid" alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                        <div class="shadow-sm card card-body">
                           <img src="{{ asset('img/wm-blog/banner.png') }}" class="img-fluid"  alt="Wealthmark Blog" title="Wealthmark Blog"/>
                           <div class="p-3">
                              <h6 class="mb-2">Our Response to the Latest Reuters Story </h6>
                              <div class="fs-14 mb-2">CZ replies to the latest Reuters piece with his insights, thoughts, and feelings on the   topics raised. </div>
                              <a href="javascript:void()" class="text-warning d-block text-center text-white wm-blog-date">2022-10-17 </a>
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