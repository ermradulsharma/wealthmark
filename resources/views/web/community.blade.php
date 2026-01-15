<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')
      <style>
          .nav-tabs-a {
              margin-bottom: 0px;
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
                     <a  href="{{ url( app()->getLocale(), 'about-us') }}" class="nav-tabs-a ">About</a>
                     <a  href="{{ url( app()->getLocale(), 'careers') }}" class="nav-tabs-a">Careers</a>
                     <a  href="{{ url( app()->getLocale(), 'press') }}" class="nav-tabs-a">Press</a>
                     <a  href="{{ url( app()->getLocale(), 'community') }}" class="nav-tabs-a active">Community</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section  class="breadcrumbs shadow community-top">
         <div class="container-fluid mt-3">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-4 col-md-6 col-sm-6  d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1 order-md-1 order-sm-1 col-xs-2" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="top-heading">Join the Wealthmark Community </h1>
                  <p class="top-p">Wealthmark is more than a crypto ecosystem. It's a vibrant global community powered by Wealthmark users from all walks of life, who come together both in real life and online to pursue their passions and advance the crypto cause.</p>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-6 hero-img text-center p-2 order-1 order-lg-2 order-md-2 order-sm-2 col-xs-1" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('assets/img/community/cover-graphic-2.png') }}" class="img-fluid  w-100 max-width-450px" alt="Join the Wealthmark Community" title="Join the Wealthmark Community">
               </div>
            </div>
         </div>
      </section>
      <section class="community-main-content">
         <div class="container">
            <div class="row align-items-center justify-content-center">

               <div class="col-md-6 col-sm-12 col-xs-12 order-2 order-lg-1 order-md-1 order-sm-2 col-xs-2">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Explore Meet-ups & Events</h2>
                  </div>
                  <div class="text">
                     We’ve resumed offline events and meet-ups in cities where they’re permitted, from Dubai and Kyiv to Uruguay. Meet-ups give community members the chance to connect and share ideas in person, hear from Wealthmark team members, industry experts, and special guests.
                  </div>
               </div>
                <div class="col-md-6 col-sm-6 col-xs-8 text-center order-1 order-lg-2 order-md-2 order-sm-1 col-xs-1">
                  <img src="{{ asset('assets/img/meet-ups-events.png') }}" class="img-fluid  w-100 pb-4 max-width-350px" alt="Explore Meet-ups & Events" title="Explore Meet-ups & Events">
               </div>
            </div>
            <div class="row align-items-center justify-content-center">
               <div class="col-md-6 col-sm-6 text-center">
                  <img src="{{ asset('assets/img/angel-program.png') }}" class="img-fluid animated w-100 max-width-350px" alt="Wealthmark Angel Program" title="Wealthmark Angel Program" >
               </div>
               <div class="col-md-6 col-sm-12">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Wealthmark Angel Program</h2>
                  </div>
                  <div class="text">
                     Wealthmark Angels are our most active and passionate community builders, who help make a difference by sharing Wealthmark’s vision with the world. There are currently 300+ Wealthmark Angels across 70+ cities, who help fellow , lead the crypto conversation, share local insights and trends, organize online and offline events, and more.
                  </div>
                  <div class="text">
                     We’re looking for dedicated users from all walks of life who share our values. Bring your unique voice and perspective to help us increase the freedom of money for all.
                  </div>
               </div>
            </div>
            <div class="row align-items-center justify-content-center">

               <div class="col-md-6 col-sm-12 order-2 order-lg-1 order-md-1 order-sm-2 col-xs-2">
                  <div class="sec-title text-left">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Join the Conversation</h2>
                  </div>
                  <div class="text">
                     Explore more than 60 official Telegram groups on a variety of topics, from trading and NFTs to platform announcements and more. Find your community with more than 40 multilingual Telegram groups designed to bring together local communities.
                  </div>
                  <div class="text">
                     Of course, we’re not just on Telegram. Follow us on Twitter, Facebook, Instagram, Reddit and more for the latest news, updates, and crypto memes.
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 text-center order-1 order-lg-2 order-md-2 order-sm-1 col-xs-1">
                  <img src="{{ asset('assets/img/join-the-conversation.png') }}" class="img-fluid animated w-100 max-width-350px" alt="Join the Conversation" title="Join the Conversation" >
               </div>
            </div>
         </div>
      </section>
      <section class="social-partners bg-light-blue mb-5">
         <div class="container">
            <div class="row">
               <div class="sec-title text-left mb-5">
                  <span class="title">Connect to Us</span>
                  <h2 class="heading-h2">Wealthmark Social Medias</h2>
               </div>
            </div>
            <div class="row d-flex align-items-center text-center">
               <div class="col s-icon-div" title="facebook">
                  <div class="s-icons">
                     <i class="bi bi-facebook"></i>
                  </div>
                  <div class="s-text">
                     facebook
                  </div>
               </div>
               <div class="col s-icon-div" title="WhatsApp">
                  <div class="s-icons">
                     <i class="bi bi-whatsapp"></i>
                  </div>
                  <div class="s-text">
                     WhatsApp
                  </div>
               </div>
               <div class="col s-icon-div" title="Twitter">
                  <div class="s-icons">
                     <i class="bi bi-twitter"></i>
                  </div>
                  <div class="s-text">
                     Twitter
                  </div>
               </div>
               <div class="col s-icon-div" title="Telegram">
                  <div class="s-icons">
                     <i class="bi bi-telegram"></i>
                  </div>
                  <div class="s-text">
                     Telegram
                  </div>
               </div>
               <div class="col s-icon-div" title="Instagram">
                  <div class="s-icons">
                     <i class="bi bi-instagram"></i>
                  </div>
                  <div class="s-text">
                     Instagram
                  </div>
               </div>
               <div class="col s-icon-div" title="Github">
                  <div class="s-icons">
                     <i class="bi bi-github"></i>
                  </div>
                  <div class="s-text">
                     Github
                  </div>
               </div>
               <div class="col s-icon-div" title="Youtube">
                  <div class="s-icons">
                     <i class="bi bi-youtube"></i>
                  </div>
                  <div class="s-text">
                     Youtube
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
