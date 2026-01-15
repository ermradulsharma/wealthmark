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
   .about-section img {
    width: 100%;
    width: calc(100% - 100px);
    padding: 30px;
}
.inner-column::-webkit-scrollbar {
  height: 5px;
 }

.inner-column::-webkit-scrollbar {
  width: 5px;
 }

 .inner-column::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
 }

.inner-column::-webkit-scrollbar-thumb {
  background: rgb(154, 154, 154);
  border-radius: 10px;
 }

       .about-us-header-box .nav-tabs-a {
            margin-bottom: 0px;
        }
        section#hero.abt-section-main {
            padding: 40px;
        }
        @media(max-width:576px){
            .threediv-block {
                min-width: 145px;
                margin:10px 0px;
            }
            .threediv {
                display: flex;
                justify-content: space-between;
            }
        }
          @media(max-width:350px){
                .threediv-block {
                min-width: 100%;
                margin: 10px 0px;
                box-shadow: 0px 0px 1px 0px;
                padding: 10px;
            }
          }
          .about-section .content-column .inner-column {
                padding: 15px!important;
            }
   </style>
   </head>

 <body class="bg-white">
        @include('template.web_menu')
        <div class="bg-light-blue about-us-header-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="nav-tabs-list d-flex justify-content-between">
  <a  href="{{ url( app()->getLocale(), 'about-us') }}" class="nav-tabs-a active">About</a>
  <a  href="{{ url( app()->getLocale(), 'careers') }}" class="nav-tabs-a">Careers</a>
  <a  href="{{ url( app()->getLocale(), 'press') }}" class="nav-tabs-a">Press</a>
  <a  href="{{ url( app()->getLocale(), 'community') }}" class="nav-tabs-a">Community</a>
</div>
            </div>
        </div>
    </div>
</div>


   <section id="hero" class="breadcrumbs shadow-sm abt-section-main pb-4 pt-4">
          <div class="container">
              <div class="row align-items-center pt-3">
                 <div class="col-lg-6 col-sm-6  d-flex flex-column justify-content-center  order-lg-1 order-sm-1 order-2" data-aos="fade-up" data-aos-delay="200">
                 <h1 class="top-heading">Welcome to Wealthmark</h1>
                 <p class="top-p">At Wealthmark, we believe that everyone should have the freedom to earn, hold, spend, share and give their money - no matter who you are or where you come from.</p>

                 </div>
                 <div class="col-lg-6 col-sm-6  order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/about-banner-graphic.svg') }}" class="img-fluid animated w-75" alt="Wealthmark About Us Banner" title="Wealthmark About Us Banner">
                 </div>
              </div>
            </div>
      </section>

     <section class="support-sec bg-light-blue">
         <div class="container">
                  <div class="threediv">
  <div class="threediv-block">
    <div class="threediv-block-inner">
         <img src="{{ asset('assets/img/volume.svg') }}" class="threediv-block-svg" alt="Average daily volume" title="Average daily volume"/>

      <div class="threediv-block-txt-div">
        <div class="threediv-block-txt-top">2.0 wm</div>
        <div class="threediv-block-txt-bottom">Average daily volume</div>
      </div>
    </div>
  </div>
  <div class="threediv-block">
    <div class="threediv-block-inner">
         <img src="{{ asset('assets/img/translation.svg') }}" class="threediv-block-svg" alt="Transactions per second" title="Transactions per second"/>

      <div class="threediv-block-txt-div">
        <div class="threediv-block-txt-top">1,400,000+</div>
        <div class="threediv-block-txt-bottom">Transactions per second</div>
      </div>
    </div>
  </div>
  <div class="threediv-block">
    <div class="threediv-block-inner">
        <img src="{{ asset('assets/img/support.svg') }}" class="threediv-block-svg" alt="Customer Support in 40 languages" title="Customer Support in 40 languages"/>

      <div class="threediv-block-txt-div">
        <div class="threediv-block-txt-top">24/7</div>
        <div class="threediv-block-txt-bottom">Customer Support in 40 languages</div>
      </div>
    </div>
  </div>
</div>
              </div>

     </section>




      <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="content-column col-lg-8 col-md-6 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">About Us</h2>
                        </div>
                        <div class="text">Wealthmark is a leading player in the Crypto ecosystem; Since its inception it has risen to provide its users with an ostentatious and secure platform which not only fulfils their desire of enhancing their financial health but also provides them with an exuberant experience when trading in crypto by educating them with the know-how’s and unending benefits of Blockchain technology.</div>
                             <div class="text">Crypto currencies are globally rising and sought form of assets, since their regulation is completely decentralized every individual wishes to secure their future by building a diverse portfolio and having an array of crypto currencies, Wealthmark makes sure to provide the best services possible in order to help every individual acquire these digital assets and build a financially secure lifestyle.</div>
                             <div class="text">We aim at enabling every user to learn and cherish the various steps of trading, be it you’re first time entering into the world of trading or just another swing at one of many successful trades completed by you. We provide complete trading solutions with 24x7 Support to make sure your soaring success is not hindered by trifling technical inefficiencies.  </div>
                             <div class="text">We don’t just halt there but provide additional services to our users such and go on to boast of supporting the NFT marketplace to help diversify your profits by assisting you to indulge in art & media created by you and other users alike, alongside providing derivative option and strengthening your financial portfolio. Wealthmark is not just another platform built for trading; it’s a whole new perception to the world of Blockchain.</div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-6 col-sm-12 text-center">

                    <img src="{{ asset('assets/img/about-us.png') }}" class="img-fluid animated w-100" alt="wealthmark about-us" title="wealthmark about-us">
                 </div>
            </div>

           <div class="container vision-mission-sec">
	<div class="card border-0 bg-none">
	 <div class="dashboard-tabpills">

                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Our Vision</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Our Mission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-margin-tab" data-bs-toggle="pill" data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin" aria-selected="true">Our Values</button>
                        </li>


                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                          	 <div class="vision">


        <div class="container">
    <div class="row align-items-center">

        <div class="col-md-6 col-sm-6 text-center p-4">
             <img src="{{ asset('assets/img/our-vision-2.svg') }}" class="img-fluid abt-tab-img" alt="Our Vision" title="Our Vision">
        </div>

        <div class="col-md-6  col-sm-6">
           <div class="sec-title text-left mb-2">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Our Vision</h2>

                        </div>
         <div class="text">Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.</div>


        </div>
    </div>

</div>


    </div>
                            </div>
                            <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                             <div class="mission">
        <div class="container">
    <div class="row align-items-center">

        <div class="col-md-6 col-sm-6 text-center p-4">
             <img src="{{ asset('assets/img/our-mission.svg') }}" class="img-fluid abt-tab-img" alt="wealthmark Mission" title="wealthmark Mission">
        </div>

        <div class="col-md-6  col-sm-6">
           <div class="sec-title text-left mb-2">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Our Mission</h2>

                        </div>
         <div class="text">Our mission is to provide the core infrastructure services for organizing the world’s crypto.</div>
                    </div>
    </div>

</div>
    </div>
                            </div>
                            <div class="tab-pane fade " id="pills-margin" role="tabpanel" aria-labelledby="pills-margin-tab">
                            	<div class="mission">
        <div class="container">
    <div class="row align-items-center">

        <div class="col-md-6 col-sm-6 text-center p-4">
             <img src="{{ asset('assets/img/our-values.svg') }}" class="img-fluid abt-tab-img" alt="wealthmark Value" title="wealthmark Value">
        </div>

        <div class="col-md-6  col-sm-6">
           <div class="sec-title text-left mb-2">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Our Values</h2>

                        </div>
         <div class="text">Wealthmark Core Values guide our behavior, decisions, and action, enabling unified collaboration across our diverse, international teams.</div>
                    </div>
    </div>

</div>
    </div>
                            </div>
                        </div>
                    </div>

            </div>


	</div>
</div>
        </div>
    </section>


      <section class="amazing_feature">
      <div class="container">

            <div class="row">
                <div class="col-md-12 text-center heading-main">
                    <h2 class="heading-h2">Our ecosystem</h2>
                    <div class="separator mb-2"><i class="fa fa-home below-line-about-icon"></i></div>
                    <p class="mb-5">Our platform is trusted by millions worldwide, and features an unmatched portfolio of financial product offerings.
</p>
                </div>
            </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon">
                  <i class="bi bi-patch-question-fill"></i>
                  </div>
                  <div class="single_feature-inner">
              <h3>Wealthmark Exchange</h3>
              <p>Wealthmark Exchange is the largest crypto exchange by trade volume.</p>
              </div>
            </div>
          </div><!-- END COL-->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon">
              <i class="bi bi-patch-question-fill"></i></div>
               <div class="single_feature-inner">
              <h3>Wealthmark Chain</h3>
              <p>Wealthmark Chain is a community-driven blockchain software system with developers and contributors from all over the world.</p>
            </div></div>
          </div><!-- END COL-->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon">
                  <i class="bi bi-patch-question-fill"></i>
              </div>
            <div class="single_feature-inner">  <h3>Trust Wallet</h3>
              <p>The official wallet of Wealthmark, Trust Wallet, is a secure, decentralized wallet where users can send, receive and store their digital assets.</p>
            </div></div>
          </div><!-- END COL-->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="bi bi-patch-question-fill"></i>
              </div>
               <div class="single_feature-inner">
              <h3>Research</h3>
              <p>Wealthmark Research provides institutional-grade research reports, data-driven insights and analysis for investors in the crypto space.</p>
            </div></div>
          </div><!-- END COL-->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon">
                <i class="bi bi-patch-question-fill"></i>
                  </div>
                   <div class="single_feature-inner">
              <h3>Launchpad</h3>
              <p>Wealthmark Exchange is the largest crypto exchange by trade volume</p>
            </div></div>
          </div><!-- END COL-->
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon">
                  <i class="bi bi-patch-question-fill"></i>
              </div>
               <div class="single_feature-inner">
              <h3>Labs</h3>
              <p>Wealthmark Labs is an infrastructure impact fund and an initiative to incubate, invest in, and empower blockchain projects.</p>
            </div></div>
          </div><!-- END COL-->
        </div><!--- END ROW -->
      </div><!--- END CONTAINER -->
    </section>


     <section class="about-section">
        <div class="container">
           <div class="row align-items-center">
             <div class="col-md-6 col-sm-6 order-1 order-lg-2 order-md-2 order-sm-2 col-xs-2 text-center">
                   <img src="{{ asset('assets/img/abt-putting-our-users-first.png') }}" class="img-fluid abt-tab-img" alt="Putting our users first" title="Putting our users first">
            </div>
            <div class="col-md-6 col-sm-6 order-2 order-lg-1 order-md-1 order-sm-1 order-xs-1">
                <div class="sec-title text-left">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Putting our users first</h2>

                        </div>
                         <div class="text">
                                Users are at the heart of everything we do. From the beginning, we made user protection our top priority. That’s why we’ve embedded state-of-the-art security measures and strict data privacy controls across the entire Wealthmark ecosystem.
                            </div>
            </div>
        </div>

        <div class="row align-items-center">
             <div class="col-md-6 col-sm-6 text-center order-1 order-lg-1 order-md-1 order-sm-1 col-xs-1">
                   <img src="{{ asset('assets/img/regulators.png') }}" class="img-fluid abt-tab-img" alt="Working with regulators" title="Working with regulators">
            </div>
            <div class="col-md-6 col-sm-6 order-2 order-lg-2 order-md-2 order-sm-2 col-xs-2">
                <div class="sec-title text-left">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Working with regulators</h2>

                        </div>
                         <div class="text">
                              We’re also committed to meeting the highest standards for regulatory compliance to maintain our responsibility to our users and further build a sustainable path forward for the blockchain industry.
                            </div>
            </div>
        </div>

         <div class="row align-items-center">
                 <div class="row align-items-center">



        <div class="col-md-6  col-sm-6 order-2 order-lg-1 order-md-1 order-sm-1 col-xs-1">
           <div class="sec-title text-left mb-2">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Working at Wealthmark</h2>

                        </div>
         <div class="text">At Wealthmark, we give people the freedom to own their decisions, collaborate openly, and serve our users with passion and integrity. Join the Wealthmark team today and work with some of the world’s most talented, hardworking, and passionate people.</div>

         <a href="javascript:void(0);" class="btn btn-yellow"><span>Explore Jobs</span></a>
        </div>
           <div class="col-md-6 col-sm-6 text-center order-1 order-lg-2 order-md-2 order-sm-2 col-xs-2">
             <img src="{{ asset('assets/img/bitcount-2.png') }}" class="img-fluid animated abt-tab-img" alt="wealthmark career" title="wealthmark career">
        </div>
    </div>
         </div>
        </div>
    </section>





  @include('template.country_language')
    @include('template.web_footer')



    </body>
</html>
