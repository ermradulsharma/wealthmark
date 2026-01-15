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
   </head>
   <body>
      @include('template.web_menu')
      <section class="feedback-section shadow">
         <div class="container mt-3">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-2 order-lg-1"
                  data-aos="fade-up" data-aos-delay="200">
                  <h1 class="text-white">FEEDBACK </h1>
                  <h3 class="top-heading text-white">Your Voice feedback</h3>
                  <div class="text text-white text-uppercase">Wealth Mark is always here to listen. Let's enhance our community.</div>
                  <h3 class="text-white">Feedback already submitted?</h3>
                  <a class="btn btn-yellow feedback-history-btn yellow shadow">My Feedback History </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('assets/img/feedback/cover-graphic.png') }}" class="max-width-450px animated" alt="Give us feedback" title="Give us feedback">
               </div>
            </div>
         </div>
      </section>
      <section class="submit-feedback-block">
         <div class="container">
            <div class="row">
               <div class="sec-title text-left mb-5">
                  <h2 class="heading-h2">Submit Feedback</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-6 ol-xs-12 col-sm-12">
                  <a href="javascript:void(0)">
                     <div class="feedback-inner-box alert alert-warning d-flex">
                        <img src="{{ asset('assets/img/feedback/localization.png') }}" class="max-width-30px" alt="Submit Feedback" title="Submit Feedback">
                        <div class="feedback-content-box">
                           <h4>
                              <span>Localization & Language </span>
                           </h4>
                           <p>Discover spelling or grammar mistakes, and misleading content. </p>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-6 col-lg-6 ol-xs-12 col-sm-12">
                  <a href="javascript:void(0)">
                     <div class="feedback-inner-box alert alert-warning d-flex">
                        <img src="{{ asset('assets/img/feedback/localization.png') }}" class="max-width-30px" alt="Submit Feedback" title="Submit Feedback">
                        <div class="feedback-content-box">
                           <h4>
                              <span>Localization & Language </span>
                           </h4>
                           <p>Discover spelling or grammar mistakes, and misleading content. </p>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-6 ol-xs-12 col-sm-12">
                  <a href="javascript:void(0)">
                     <div class="feedback-inner-box alert alert-warning d-flex">
                        <img src="{{ asset('assets/img/feedback/design-layout.png') }}" class="max-width-30px" alt="Submit Feedback" title="Submit Feedback">
                        <div class="feedback-content-box">
                           <h4>
                              <span>Localization & Language </span>
                           </h4>
                           <div class="text">Discover spelling or grammar mistakes, and misleading content. </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-6 col-lg-6 ol-xs-12 col-sm-12">
                  <a href="javascript:void(0)">
                     <div class="feedback-inner-box alert alert-warning d-flex">
                        <img src="{{ asset('assets/img/feedback/share-listed-project.png') }}" class="max-width-30px" alt="Submit Feedback" title="Submit Feedback">
                        <div class="feedback-content-box">
                           <h4>
                              <span>Localization & Language </span>
                           </h4>
                           <div class="text">Discover spelling or grammar mistakes, and misleading content. </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-6 ol-xs-12 col-sm-12">
                  <a href="javascript:void(0)">
                     <div class="feedback-inner-box alert alert-warning d-flex">
                        <img src="{{ asset('assets/img/feedback/security-vulnerabilities.png') }}" class="max-width-30px" alt="Submit Feedback" title="Submit Feedback">
                        <div class="feedback-content-box">
                           <h4>
                              <span>Localization & Language </span>
                           </h4>
                           <div class="text">Discover spelling or grammar mistakes, and misleading content. </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-6 col-lg-6 ol-xs-12 col-sm-12">
                  <a href="javascript:void(0)">
                     <div class="feedback-inner-box alert alert-warning d-flex">
                        <img src="{{ asset('assets/img/feedback/product-suggestions.png') }}" class="max-width-30px" alt="Submit Feedback" title="Submit Feedback">
                        <div class="feedback-content-box">
                           <h4>
                              <span>Localization & Language </span>
                           </h4>
                           <div class="text">Discover spelling or grammar mistakes, and misleading content. </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="feedback-how-works" id="how-works-feedback">
         <div class="container">
            <div class="row">
               <div class="sec-title text-left mb-5">
                  <span class="title">Know About</span>
                  <h2 class="heading-h2">How does it works </h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <img src="{{ asset('assets/img/feedback/how-does-it-work-graphic.png') }}" class="w-100" alt="how does it works?" title="how does it works?">
               </div>
            </div>
         </div>
      </section>
      <section class="footer-give-feedback-txt">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                  <div class="text">We treat security as our number one priority and we look forward to excelling our product further by building with you into the future. Discover flaws, or a potential product feature and track the status of eligible ideas.Let's get started! Click here to submit a suggestion or feedback <a class="text-warning">Submit feedback</a></div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
