<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Career</title>
      @include('template.web_css')
      <style>
         @media (max-width: 576px){
         .col-sm-12 {
         flex: 0 0 auto;
         width: 100%;
         }
         }
         ._div.bg-white {
         padding: 16px;
         margin: 10px;
         }
         @media screen and (min-width: 1023px){
         .hiring_block-txt {
         margin-top: 134px!important;
         }
         }
         .career-apply-box{
         display: flex;
         padding: 20px;
         width: 100%;
         height: 100%;
         -webkit-box-align: center;
         align-items: center;
         background:#f5f8fd !important;
         border-radius: 16px;
         -webkit-box-pack: justify;
         justify-content: space-between;
         }
         .nav-tabs-a {
         margin-bottom: 0px;
         }
         /*._div {*/
         /*    flex-basis: 33.3%;*/
         /*}*/
         .why_work_block {
         background: #fdcb08;
         }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="bg-light-blue">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="nav-tabs-list d-flex justify-content-between">
                     <a  href="{{ url( app()->getLocale(), 'about-us') }}" class="nav-tabs-a">About</a>
                     <a  href="{{ url( app()->getLocale(), 'careers') }}" class="nav-tabs-a active">Careers</a>
                     <a  href="{{ url( app()->getLocale(), 'press') }}" class="nav-tabs-a">Press</a>
                     <a  href="{{ url( app()->getLocale(), 'community') }}" class="nav-tabs-a">Community</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section  class="breadcrumbs shadow-sm career-section-breadcrumbs">
         <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-5 col-md-6 col-sm-6 text-center mt-3 mb-4">
                  <img src="{{ asset('assets/img/career-graphic.png') }}" class="img-fluid w-75" alt="wealthmark Career" title="wealthmark.io">
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6  d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="top-heading yellow-text fs-1 mb-3">Careers at Wealthmark</h1>
                  <p class="top-p text-white mb-3">Join our quest to increase the Freedom of Money</p>
                  <div class="mt-3">
                     <a href="#" class="btn btn-yellow shadow"> View Openings</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-our-values">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Our Values</h2>
                  </div>
                  <div class="text">Wealthmark Core Values guide our behavior, decisions, and action, enabling unified collaboration across our diverse, international teams.                    </div>
               </div>
            </div>
            <div class="des-our-value">
               <div class="des-our-value-block-main">
                  <div class="des-our-value-block-left">
                     <h4>User-Focused</h4>
                     <div class="text">We protect our users by putting our users' needs first and delivering quality service.</div>
                  </div>
                  <div class="des-our-value-block-right">
                     <img src="{{ asset('assets/img/wm-user-focused.png') }}" class="des-our-value-img-max" alt="wealthmark User-Focused" title="User-Focused">
                  </div>
               </div>
               <div class="des-our-value-block-main">
                  <div class="des-our-value-block-left">
                     <h4>Collaboration</h4>
                     <div class="text">We communicate openly.</div>
                     <div class="text">We work as a team towards shared goals to build the ecosystem together.</div>
                  </div>
                  <div class="des-our-value-block-right">
                     <img src="{{ asset('assets/img/wm-collaboration.png') }}" class="des-our-value-img-max">
                  </div>
               </div>
               <div class="des-our-value-block-main">
                  <div class="des-our-value-block-left">
                     <h4>Hardcore</h4>
                     <div class="text">We are results driven. We get things done.</div>
                     <div class="text">We are passionate and work hard.</div>
                     <div class="text">When we fail, we learn fast, and pick ourselves up.</div>
                  </div>
                  <div class="des-our-value-block-right">
                     <img src="{{ asset('assets/img/wm-hardcore.png') }}" class="des-our-value-img-max" alt="wealthmark Hardcore" title="Hardcore">
                  </div>
               </div>
               <div class="des-our-value-block-main">
                  <div class="des-our-value-block-left">
                     <h4>Freedom</h4>
                     <div class="text">We execute responsibly and autonomously.</div>
                     <div class="text">We empower those around us.</div>
                     <div class="text">Our team is diverse and we challenge the status quo.</div>
                  </div>
                  <div class="des-our-value-block-right">
                     <img src="{{ asset('assets/img/wm-freedom.png') }}" class="des-our-value-img-max" alt="wealthmark Freedom" title="Freedom">
                  </div>
               </div>
               <div class="des-our-value-block-main">
                  <div class="des-our-value-block-left">
                     <h4>Humility</h4>
                     <div class="text">We accept critical feedback.</div>
                     <div class="text">We treat everyone as equals.</div>
                     <div class="text">We are modest about our success.</div>
                  </div>
                  <div class="des-our-value-block-right">
                     <img src="{{ asset('assets/img/wm-humility.png') }}" class="des-our-value-img-max" alt="wealthmark Humility" title="Humility">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="Conters bg-dark-blue">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-3 col-sm-3 col-6">
                  <i class="fa fa-code"></i>
                  <h2 class="text-white"><span class="counter" data-count="43">0</span>+</h2>
                  <span class="counter-desc yellow-text">Nationalities</span>
               </div>
               <div class="col-md-3 col-sm-3 col-6">
                  <i class="fa fa-coffee"></i>
                  <h2 class="text-white"><span class="counter" data-count="565">0</span>+</h2>
                  <span class="counter-desc yellow-text">Employees</span>
               </div>
               <div class="col-md-3 col-sm-3 col-6">
                  <i class="fa fa-bug"></i>
                  <h2 class="text-white"><span class="counter" data-count="50">0</span>+</h2>
                  <span class="counter-desc yellow-text">Locations</span>
               </div>
               <div class="col-md-3 col-sm-3 col-6">
                  <i class="fa fa-hourglass-half"></i>
                  <h2 class="text-white"><span class="counter" data-count="91874">0</span>+</h2>
                  <span class="counter-desc yellow-text">Happy Clients</span>
               </div>
            </div>
         </div>
      </section>
      <section class="team">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title mb-0">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Choose Your Team</h2>
                  </div>
                  <div class="text">Select a team most relevant to your interests and experience to view job openings</div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="career-apply-box">
                     <div>
                        <h5 class="title">Senior QA Engineer</h5>
                        <div class="fs-14 text-black">Dubai / Engineering</div>
                     </div>
                     <div>
                        <a href="javascript:void" class="btn-yellow shadow-none d-inline-block">Apply</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="career-apply-box">
                     <div>
                        <h5 class="title">Senior QA Engineer</h5>
                        <div class="fs-14 text-black">Dubai / Engineering</div>
                     </div>
                     <div>
                        <a href="javascript:void" class="btn-yellow shadow-none d-inline-block">Apply</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="career-apply-box">
                     <div>
                        <h5 class="title">Senior QA Engineer</h5>
                        <div class="fs-14 text-black">Dubai / Engineering</div>
                     </div>
                     <div>
                        <a href="javascript:void" class="btn-yellow shadow-none d-inline-block">Apply</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="career-apply-box">
                     <div>
                        <h5 class="title">Senior QA Engineer</h5>
                        <div class="fs-14 text-black">Dubai / Engineering</div>
                     </div>
                     <div>
                        <a href="javascript:void" class="btn-yellow shadow-none d-inline-block">Apply</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="career-apply-box">
                     <div>
                        <h5 class="title">Senior QA Engineer</h5>
                        <div class="fs-14 text-black">Dubai / Engineering</div>
                     </div>
                     <div>
                        <a href="javascript:void" class="btn-yellow shadow-none d-inline-block">Apply</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <div class="career-apply-box">
                     <div>
                        <h5 class="title">Senior QA Engineer</h5>
                        <div class="fs-14 text-black">Dubai / Engineering</div>
                     </div>
                     <div>
                        <a href="javascript:void" class="btn-yellow shadow-none d-inline-block">Apply</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-8">
                  <div class="sec-title">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Why Work Here</h2>
                  </div>
                  <div class="text">We are proud to offer competitive benefits that enable healthy and fulfilling careers at Wealthmark</div>
               </div>
            </div>
            <div class="select-supp">
               <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="_div bg-white">
                     <div class="why_work_block">
                        <img src="{{ asset('assets/img/competitive-salary.png') }}" class="why_work_block-svg" alt="wealthmark Competitive salary" title="wealthmark.io">
                     </div>
                     <div class="why_work_block-list">Competitive salary</div>
                     <div class="why_work_block-list">Option to be paid in crypto</div>
                     <div class="why_work_block-list">Health insurance</div>
                     <div class="why_work_block-list">Flexible working hours</div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="_div bg-white">
                     <div class="why_work_block">
                        <img src="{{ asset('assets/img/remote-work.png') }}" class="why_work_block-svg" alt="wealthmark Remote Work" title="wealthmark.io">
                     </div>
                     <div class="why_work_block-list">Remote work for many roles</div>
                     <div class="why_work_block-list">Company sponsored holidays</div>
                     <div class="why_work_block-list">Team building activities</div>
                     <div class="why_work_block-list">And other various perks and benefits</div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                  <div class="_div bg-white">
                     <div class="why_work_block">
                        <img src="{{ asset('assets/img/learning-development.png') }}" class="why_work_block-svg" alt="wealthmark development" title="wealthmark.io">
                     </div>
                     <div class="why_work_block-list">Learning and development programs</div>
                     <div class="why_work_block-list">Free language classes</div>
                     <div class="why_work_block-list">Relocation support</div>
                     <div class="why_work_block-list">International transfers mid-career</div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="hiring">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-8">
                  <div class="sec-title">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">How We Hire</h2>
                  </div>
                  <div class="text">On average 2~4 week interview process with 4 interviews.</div>
               </div>
            </div>
            <div class="row">
               <div class="select-supp">
                  <div class="hiring_block">
                     <div class="hiring_block-txt">Application Review</div>
                     <div class="hiring_block-num">
                        0
                        <!-- -->1
                     </div>
                     <div class="hiring_block-line"></div>
                  </div>
                  <div class="hiring_block">
                     <div class="hiring_block-txt">Interviews</div>
                     <div class="hiring_block-num">
                        0
                        <!-- -->2
                     </div>
                     <div class="hiring_block-line"></div>
                  </div>
                  <div class="hiring_block">
                     <div class="hiring_block-txt">Offer</div>
                     <div class="hiring_block-num">
                        0
                        <!-- -->3
                     </div>
                     <div class="hiring_block-line"></div>
                  </div>
                  <div class="hiring_block">
                     <div class="hiring_block-txt">Onboarding</div>
                     <div class="hiring_block-num">
                        0
                        <!-- -->4
                     </div>
                     <div class="hiring_block-line"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.web_footer')
      <script>
         $(document).ready(function($) {
         //Check if an element was in a screen
         function isScrolledIntoView(elem){
         var docViewTop = $(window).scrollTop();
         var docViewBottom = docViewTop + $(window).height();
         var elemTop = $(elem).offset().top;
         var elemBottom = elemTop + $(elem).height();
         return ((elemBottom <= docViewBottom));
         }
         //Count up code
         function countUp() {
         $('.counter').each(function() {
           var $this = $(this), // <- Don't touch this variable. It's pure magic.
               countTo = $this.attr('data-count');
               ended = $this.attr('ended');

         if ( ended != "true" && isScrolledIntoView($this) ) {
             $({ countNum: $this.text()}).animate({
             countNum: countTo
           },
           {
             duration: 2500, //duration of counting
             easing: 'swing',
             step: function() {
               $this.text(Math.floor(this.countNum));
             },
             complete: function() {
               $this.text(this.countNum);
             }
           });
         $this.attr('ended', 'true');
         }
         });
         }
         //Start animation on page-load
         if ( isScrolledIntoView(".counter") ) {
         countUp();
         }
         //Start animation on screen
         $(document).scroll(function() {
         if ( isScrolledIntoView(".counter") ) {
             countUp();
         }
         });
         });
      </script>
   </body>
</html>
