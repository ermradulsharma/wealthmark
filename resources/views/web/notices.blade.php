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
      <style>
         p.card-text{
         font-weight:100!important;
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="Notice-search-block pb-0 pt-0" id="notice-search-section">
         <div class="container">
            <div class="row notice-search-row">
               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 mb-3">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Type here and search"
                        aria-label="Announcements" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Search</span>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                  <div class="notice-search-img">
                     <img src="{{ asset('img/notice-search-img.png') }}" class="img-fluid animated"
                        alt="Wealthmark Notice Slab" title="Wealthmark Notice Slab">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="notice-listing-block" id="notice-listing-section">
         <div class="container py-4">
            <div class="row">
               <div class="sec-title text-left">
                  <span class="title">Know About</span>
                  <h1 class="heading-h2">Wealthmark <span class="yellow-text">Notice</span></h1>
               </div>
            </div>
            <!-- timeline item 1 -->
            <div class="row no-gutters">
               <div class="col-sm">
                  <!--spacer-->
               </div>
               <!-- timeline item 1 center dot -->
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
                  <h5 class="m-2">
                     <span class="badge  bg-warning border">1</span>
                  </h5>
                  <div class="row h-50">
                     <div class="col border-end">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
               </div>
               <!-- timeline item 1 event content -->
               <div class="col-sm py-2">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title text-warning">Notice 1</h4>
                        <p class="card-text text-muted text-normal">Wealthmark makes sure to provide the best services possible in order to
                           help every individual acquire these digital assets and build a financially secure
                           lifestyle.
                        </p>
                        <div class="float-end text-warning small">Feb 10th 2022 10:30 AM</div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- timeline item 2 -->
            <div class="row no-gutters">
               <div class="col-sm py-2">
                  <div class="card border-warning shadow">
                     <div class="card-body">
                        <h4 class="card-title text-warning">Notice 2</h4>
                        <p class="card-text text-muted text-normal">Crypto currencies are globally rising and sought form of assets, since
                           their regulation is completely decentralized every individual wishes to secure their
                           future by building a diverse portfolio
                        </p>
                        <div class="float-end text-warning small">Mar 10th 2021 8:30 AM</div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col border-end">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
                  <h5 class="m-2">
                     <span class="badge  bg-warning">2</span>
                  </h5>
                  <div class="row h-50">
                     <div class="col border-end">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
               </div>
               <div class="col-sm">
                  <!--spacer-->
               </div>
            </div>
            <!-- timeline item 3 -->
            <div class="row no-gutters">
               <div class="col-sm">
               </div>
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col border-end">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
                  <h5 class="m-2">
                     <span class="badge  bg-warning border">3</span>
                  </h5>
                  <div class="row h-50">
                     <div class="col border-end">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
               </div>
               <div class="col-sm py-2">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title text-warning">Notice 3</h4>
                        <p class="card-text text-muted text-normal">We aim at enabling every user to learn and cherish the various steps of trading, be it
                           you’re first time entering into the world of trading or just another swing at one of
                           many successful trades.
                        </p>
                        <div class="float-end text-warning small">Aug 10th 2021 8:30 AM</div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- timeline item 4 -->
            <div class="row no-gutters">
               <div class="col-sm py-2">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title text-warning">Notice 4</h4>
                        <p class="card-text text-muted text-normal">We don’t just halt there but provide additional services to our users such and go on to
                           boast of supporting the NFT marketplace to help diversify your profits by assisting you
                           to indulge in art & media created by you
                        </p>
                        <br/>
                        <div class="float-end text-warning small">Jan 10th 2021 8:30 AM</div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col border-end">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
                  <h5 class="m-2">
                     <span class="badge  bg-warning border">4</span>
                  </h5>
                  <div class="row h-50">
                     <div class="col">&nbsp;</div>
                     <div class="col">&nbsp;</div>
                  </div>
               </div>
               <div class="col-sm">
                  <!--spacer-->
               </div>
            </div>
            <!-- <div class="row">
               <div class="col-lg-6 col-md-6 col-xs-6 col-sm-12">
                   <div class="notice-block-inner">
                       <div class="alert alert-warning" role="alert">
                           <h4 class="alert-heading text-uppercase">Notice 1</h4>
                           <div class="text">Aww yeah, you warningfully read this important alert message. This example
                               text is
                               going
                               to run a bit longer so that you can see how spacing within an alert works with this kind
                               of content.</div>


                       </div>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-xs-6 col-sm-12">
                   <div class="notice-block-inner">
                       <div class="alert alert-warning" role="alert">
                           <h4 class="alert-heading text-uppercase">Notice 2</h4>
                           <div class="text">Aww yeah, you warningfully read this important alert message. This example
                               text is
                               going
                               to run a bit longer so that you can see how spacing within an alert works with this kind
                               of content.</div>
                       </div>
                   </div>
               </div>
               </div>
               <div class="row">
               <div class="col-lg-6 col-md-6 col-xs-6 col-sm-12">
                   <div class="notice-block-inner">
                       <div class="alert alert-warning" role="alert">
                           <h4 class="alert-heading text-uppercase">Notice 3</h4>
                           <div class="text">Aww yeah, you warningfully read this important alert message. This example
                               text is
                               going
                               to run a bit longer so that you can see how spacing within an alert works with this kind
                               of content.</div>


                       </div>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-xs-6 col-sm-12">
                   <div class="notice-block-inner">
                       <div class="alert alert-warning" role="alert">
                           <h4 class="alert-heading text-uppercase">Notice 4</h4>
                           <div class="text">Aww yeah, you warningfully read this important alert message. This example
                               text is
                               going
                               to run a bit longer so that you can see how spacing within an alert works with this kind
                               of content.</div>
                       </div>
                   </div>
               </div>
               </div> -->
            <!--/row-->
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
