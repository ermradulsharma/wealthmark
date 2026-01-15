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
      <section class="law-enforcement" id="law-inforcement-section">
         <div class="container">
            <div class="row">
               <div class="content-column col-lg-12 col-md-12 col-sm-12">
                  <div class="inner-column">
                     <div class="sec-title mb-0">
                        <h1 class="heading-h2 mb-0 pb-0">Government Law <span class="yellow-text">Enforcement Request System</span></h1>
                     </div>
                     <div class="learn-more btn-6"><span>For Government and Law Enforcement Agencies only</span></div>
                     <div class="text">Welcome to the Government Law Enforcement Request System (LERS). Government
                        and law enforcement agencies can use this system to submit information requests. Wealth Mark
                        will review each case and cooperate on a case-by-case basis to disclose information as
                        legally required, in accordance with our Terms of Use and applicable laws.
                     </div>
                     <div class="text">To access LERS, you must be a law enforcement agent or governmental official
                        authorized to 1) gather evidence in connection with an investigation or 2) make a formal law
                        enforcement request.
                     </div>
                     <div class="text alert alert-warning"><input type="checkbox" /> I hereby declare that I am a law
                        enforcement agent or government official authorized to make law enforcement requests or
                        enquiries to Wealth Mark and such access is requested in an official capacity. I understand that
                        if I make an unauthorized request, I may be subject to prosecution. For further information,
                        please see the <a class="yellow-text">Government Law Enforcement Guidelines</a>
                     </div>
                  </div>
                  <a class="btn btn-yellow shadow">Begin Request </a>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
