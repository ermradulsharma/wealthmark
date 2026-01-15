  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
  @include('template.web_css')


 <style>
     #header{
         background:white;

     }
   section#hero{
       background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='550' preserveAspectRatio='none' viewBox='0 0 1920 550'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1270%26quot%3b)' fill='none'%3e%3crect width='1920' height='550' x='0' y='0' fill='rgba(247%2c 225%2c 158%2c 1)'%3e%3c/rect%3e%3cpath d='M0%2c625.754C118.722%2c631.773%2c245.552%2c598.108%2c331.821%2c516.323C414.013%2c438.403%2c409.674%2c310.89%2c445.469%2c203.439C476.844%2c109.255%2c523.13%2c23.005%2c529.167%2c-76.083C536.322%2c-193.52%2c545.324%2c-318.825%2c483.385%2c-418.856C417.832%2c-524.723%2c306.916%2c-604.266%2c185.369%2c-631.309C66.711%2c-657.709%2c-51.905%2c-606.812%2c-165.37%2c-563.198C-270.904%2c-522.632%2c-386.16%2c-482.786%2c-447.726%2c-387.956C-507.081%2c-296.531%2c-477.941%2c-178.556%2c-485.675%2c-69.829C-492.778%2c30.028%2c-521.425%2c128.898%2c-491.282%2c224.361C-458.915%2c326.864%2c-394.121%2c415.727%2c-310.88%2c483.738C-220.832%2c557.31%2c-116.133%2c619.866%2c0%2c625.754' fill='%23f1c94f'%3e%3c/path%3e%3cpath d='M1920 997.838C2001.843 984.837 2063.891 926.2760000000001 2138.049 889.2909999999999 2223.365 846.741 2330.145 839.275 2388.733 764.063 2451.7690000000002 683.14 2482.497 572.644 2463.182 471.902 2444.115 372.453 2365.927 295.33799999999997 2286.763 232.19799999999998 2216.697 176.31400000000002 2126.101 165.70299999999997 2041.65 135.697 1951.246 103.57499999999999 1866.919 29.64300000000003 1773.095 49.68599999999998 1678.494 69.89600000000002 1627.741 168.947 1560.493 238.486 1488.949 312.46799999999996 1390.905 370.462 1366.258 470.384 1340.963 572.93 1375.489 683.078 1428.259 774.571 1478.408 861.52 1560.971 924.948 1652.367 966.4449999999999 1735.845 1004.347 1829.455 1012.222 1920 997.838' fill='%23fef9ed'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1270'%3e%3crect width='1920' height='550' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        }




 </style>


   </head>

 <body class="bg-white">
        @include('template.web_menu')



<div style="background:#f5f8fd">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="nav-tabs-list d-flex justify-content-between">
  <a  href="{{ url( app()->getLocale(), 'about-us') }}" class="nav-tabs-a active">About</a>
  <a  href="{{ url( app()->getLocale(), 'careers') }}" class="nav-tabs-a">Careers</a>
  <a  href="#" class="nav-tabs-a">Press</a>
  <a  href="{{ url( app()->getLocale(), 'community') }}" class="nav-tabs-a">Community</a>
</div>
            </div>
        </div>
    </div>
</div>

      <section id="hero" class="breadcrumbs shadow-sm abt-section-main">
          <div class="container-fluid mt-3">
              <div class="row">
                 <div class="col-lg-4 offset-lg-1 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                 <h3 class="top-heading">Buy, trade, and hold 100+ cryptocurrencies</h3>
                 <p class="top-p">Sign up now to build your own portfolio</p>
                 <div>
                     <a href="#" class="btn btn-blue shadow"> Sign up</a>
                 </div>
                 </div>
                 <div class="col-lg-5 offset-lg-1 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/graphic-1-01.svg') }}" class="img-fluid animated" alt="" style="width:100%">
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

                    <img src="{{ asset('assets/img/about-us.svg') }}" class="img-fluid animated" alt="" style="width:100%">
                 </div>
            </div>
        </div>
    </section>


      <section class="amazing_feature">
              <div class="container">
                 <div class="row">
                        <div class="col-md-12 text-center heading-main">
                            <h2 class="heading-h2">OUR FEATURES</h2>
                            <div class="separator"><i class="fa fa-home below-line-about-icon"></i></div>

                        </div>
                    </div>
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_feature">
                      <div class="feature_icon"><i class="bi bi-patch-question-fill"></i></div>
                      <h3>Wealthmark Exchange</h3>
                      <p>Wealthmark Exchange is the largest crypto exchange by trade volume.</p>
                    </div>
                  </div><!-- END COL-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_feature">
                      <div class="feature_icon">
                      <i class="bi bi-patch-question-fill"></i></div>
                      <h3>Wealthmark Chain</h3>
                      <p>Wealthmark Chain is a community-driven blockchain software system with developers and contributors from all over the world.</p>
                    </div>
                  </div><!-- END COL-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_feature">
                      <div class="feature_icon">
                          <i class="bi bi-patch-question-fill"></i>
                      </div>
                      <h3>Trust Wallet</h3>
                      <p>The official wallet of Wealthmark, Trust Wallet, is a secure, decentralized wallet where users can send, receive and store their digital assets.</p>
                    </div>
                  </div><!-- END COL-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_feature">
                      <div class="feature_icon"><i class="bi bi-patch-question-fill"></i>
                      </div>
                      <h3>Research</h3>
                      <p>Wealthmark Research provides institutional-grade research reports, data-driven insights and analysis for investors in the crypto space.</p>
                    </div>
                  </div><!-- END COL-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_feature">
                      <div class="feature_icon">
                        <i class="bi bi-patch-question-fill"></i>
                          </div>
                      <h3>Launchpad</h3>
                      <p>Wealthmark Exchange is the largest crypto exchange by trade volume</p>
                    </div>
                  </div><!-- END COL-->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single_feature">
                      <div class="feature_icon">
                          <i class="bi bi-patch-question-fill"></i>
                      </div>
                      <h3>Labs</h3>
                      <p>Wealthmark Labs is an infrastructure impact fund and an initiative to incubate, invest in, and empower blockchain projects.</p>
                    </div>
                  </div><!-- END COL-->
                </div><!--- END ROW -->
              </div><!--- END CONTAINER -->
    </section>


 <!--     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->


    </body>
</html>
