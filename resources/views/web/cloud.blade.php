<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.css">
<style>

</style>
</head>
<body>
    @include('template.web_menu')



    <section class="breadcrumbs-box shadow-sm" id="cloud-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center">
                        <h1 class="display-4 yellow-text mb-3">Wealthmark Cloud</h1>
                        <div class="fs-3 text-white mb-2">Build your crypto business in minutes with Wealthmark</div>
                        <div class="fs-14 yellow-text">Leverage the superior security, technology, and liquidity solutions of Wealthmark</div>
                        <div class="mt-5">
                            <a href="javascript:void(0)" class="btn-yellow">Apply for a trial</a>
                        </div>
                </div>


            </div>
        </div>
    </section>


   <section class="bg-light-blue">
       <div class="container">
           <div class="row">

                    <div class="sec-title text-left">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Why Build with Wealthmark Cloud?</h2>
                    </div>

           </div>
           <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="why-wm-cloud card card-body">
                       <div class="icon">
                           <img src="{{ asset('img/cloud/liquidity.svg') }}" />
                       </div>
                       <div class="why-build-content">
                            <h3 class="mb-3">Liquidity</h3>
                            <div class="fs-18 mb-3 fst-italic fw-bolder">Your exchange shares Wealthmark’s liquidity.</div>
                            <div class="fs-14 text-justify text-gray">As the world’s leading digital asset exchange by real trading volume, Wealthmark’s orders account for >50% market volume on the majority of listings.</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="why-wm-cloud card card-body">
                       <div class="icon">
                           <img src="{{ asset('img/cloud/secutiry.svg') }}" />
                       </div>
                       <div class="why-build-content">
                            <h3 class="mb-3">Security</h3>
                            <div class="fs-18 mb-3 fst-italic fw-bolder">Your exchange is protected by Wealthmark.</div>
                            <div class="fs-14 text-justify text-gray">Wealthmark’s cutting-edge security and risk management ensures your users’ funds are safe.</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="why-wm-cloud card card-body">
                       <div class="icon">
                           <img src="{{ asset('img/cloud/performance.svg') }}" />
                       </div>
                       <div class="why-build-content">
                            <h3 class="mb-3">Performance</h3>
                            <div class="fs-18 mb-3 fst-italic fw-bolder">Your exchange runs smoothly when it matters most.</div>
                            <div class="fs-14 text-justify text-gray">Wealthmark’s matching engines stand up to stress even at peak trading times.</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="why-wm-cloud card card-body">
                       <div class="icon">
                           <img src="{{ asset('img/cloud/independence.svg') }}" />
                       </div>
                       <div class="why-build-content">
                            <h3 class="mb-3">Independence</h3>
                            <div class="fs-18 mb-3 fst-italic fw-bolder">Your exchange, your style, your tokens!</div>
                            <div class="fs-14 text-justify text-gray">Independent operation with self-service for coin listing and content management</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>




    <section class="bg-white">
    <div class="container">

        <div class="row">
           <div class="text-center mb-5">

                <h2 class="title">Trade Anywhere</h2>

            </div>
        </div>



    <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="box">
                    <img src="{{ asset('img/cloud/s-icon7.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon7a.png') }}" class="black-img">
                     <h3>Management System</h3>
                     <div>Including coin management, risk management, user management, financial management, etc.</div>
            </div>
        </div>
        <div class="swiper-slide">
             <div class="box">
                    <img src="{{ asset('img/cloud/s-icon1.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon1a.png') }}" class="black-img">
                     <h3>Spot Trading</h3>
                     <div>Share the market depth and liquidity with Wealthmark; Support for new coins listing; Provide trading API.</div>
            </div>
        </div>
        <div class="swiper-slide">
             <div class="box">
                    <img src="{{ asset('img/cloud/s-icon2.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon2a.png') }}" class="black-img">
                     <h3>Fiat Trading</h3>
                     <div>Support trading between fiat currencies and crypto currencies.</div>
            </div>
        </div>
        <div class="swiper-slide">
             <div class="box">
                    <img src="{{ asset('img/cloud/s-icon3.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon3a.png') }}" class="black-img">
                     <h3>Futures Trading</h3>
                     <div>Margin mode; Long and short order; delivery contract and perpetual contract; Leverage support up to 125 times.</div>
            </div>
        </div>
        <div class="swiper-slide">
             <div class="box">
                    <img src="{{ asset('img/cloud/s-icon4.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon4a.png') }}" class="black-img">
                     <h3>Quantitative Trading</h3>
                     <div>Provide market making solutions to improve the liquidity for your exchange.</div>
            </div>
        </div>
         <div class="swiper-slide">
             <div class="box">
                    <img src="{{ asset('img/cloud/s-icon5.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon5a.png') }}" class="black-img">
                     <h3>KYC Solution</h3>
                     <div>Professional KYC solution, which protects the platform from financial crimes and risks.</div>
            </div>
        </div>
         <div class="swiper-slide">
             <div class="box">
                    <img src="{{ asset('img/cloud/s-icon6.png') }}" class="gray-img">
                     <img src="{{ asset('img/cloud/s-icon6a.png') }}" class="black-img">
                     <h3>Risk Control</h3>
                     <div>Separation of hot and cold wallets, user behavior monitoring.</div>
            </div>
        </div>
    </div>
      <!-- If we need navigation buttons -->
<!--<div class="swiper-button-prev"></div>-->
<!--    <div class="swiper-button-next"></div>-->
<div class="swiper-pagination"></div>
</div>
<div class="p-4"></div>
</div>
</section>

<section class="cloud-map">
    <div class="container text-center">
         <img src="{{ asset('img/cloud/map.png') }}" class="max-width-1000px"/>
    </div>
</section>
<section class="cloud-Getting-Started">
    <div class="container">
        <div class="row">
            <div class="sec-title">
                <h3 class="text-center">Getting Started</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="getting-started-block bg-light-blue shadow-sm">
                                <div class="box">
                            1
                        </div>

                        <div class="gstart-block">
                             <h3>Consultation</h3>
                            We’re always ready to discuss your business needs, including KYC & compliance, type of exchange, and features needed.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="getting-started-block bg-light-blue shadow-sm">
                        <div class="box">
                            2
                        </div>

                        <div class="gstart-block">
                           <h3>Preparation</h3>
                         When you apply, you’ll send us your domain name, branding materials, and other specs so we can start building.
                        </div>

                        </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="getting-started-block bg-light-blue shadow-sm">
                        <div class="box">
                            3
                        </div>

                        <div class="gstart-block">
                                <h3>Deployment</h3>
                           While we get your product ready for launch, you can log in to the dashboard to add your trading pairs, marketing banners, and more.
                        </div>

                        </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="getting-started-block bg-light-blue shadow-sm">
                        <div class="box">
                            4
                        </div>

                        <div class="gstart-block">
                            <h3>Launch!</h3>
                            Your product is online! We’ll be by your side to help you get up and running.
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('template.country_language')
    @include('template.web_footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.js"></script>

    <script>
$(document).ready(function() {
  // Assign some jquery elements we'll need
  var $swiper = $(".swiper-container");
  var $bottomSlide = null; // Slide whose content gets 'extracted' and placed
  // into a fixed position for animation purposes
  var $bottomSlideContent = null; // Slide content that gets passed between the
  // panning slide stack and the position 'behind'
  // the stack, needed for correct animation style

  var mySwiper = new Swiper(".swiper-container", {
    spaceBetween: 1,
    slidesPerView: 3,
    centeredSlides: true,
    roundLengths: true,
    loop: true,
    autoplay: {
    delay: 5000,
    disableOnInteraction: true
  },
    loopAdditionalSlides: 30,
    pagination: {                       //pagination(dots)
            el: '.swiper-pagination',
        },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
        breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 50,
      }
    },
  });
});


	</script>

</body>

</html>
