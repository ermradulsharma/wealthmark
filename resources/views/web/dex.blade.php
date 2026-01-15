<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
    <meta name="keywords" content="Wealthmark, Crypto, coins">
    <meta name="author" content="Wealthmark">
</head>
<body>
    @include('template.web_menu')
    <!-- first section -->
    <section class="dex-banner-section" id="dex-banner-section">
        <div class="container ">
            <div class="row" id="banner-dex">
                <div class="col-xl-7 col-lg-6 col-md-8">
                    <div class="left-content-block">
                        <h1 class="display-5 text-white">Explore the <span class="yellow-text">Wealthmark Chain</span> Ecosystem</h1>
                        <div class="fs-3 text-white my-5">The best-performing decentralized economy. Ready for massive user
                            access.</div>

                        <div class="w-100 mt-4">
                            <a href="#" class="btn-yellow d-inline-block fs-5 py-1  text-center text-black my-1">Develop with BNB Chain</a>&nbsp;
                            <a href="#" class="rounded fs-5 text-black py-1   text-center text-black d-inline-block btn-yellow">Explore Ecosystem </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
     <section>
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 mt-n5">
                    <div class="sec-title text-center mb-4">
                      <div class="display-5 text-blue">What's <span class="yellow-text"> NEW  </span>  at BMK  Chain</div>

                    </div>
                </div>
              <div class="col-lg-4 col-md-6">
                  <div class="shadow-sm max-width-350px m-auto cursor-pointer border">
                      <img  src="https://wealthmark.io/assets/img/chain-img1.png" class="w-100 rounded" alt="New in BMK Chain" title="New in BMK Chain">
                      <div class="p-4">
                          <div class="fs-16 text-blue mb-3">
                              Wealth Mark Chain Builder Grant Opens Door to Innovators
                          </div>
                          <div class="d-flex align-items-center fs-16 text-muted line-height-10 dex-card-footer">
                              <span>Apr 24</span>
                                <div class="dex-time">
                              <span>3 min read</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="shadow-sm max-width-350px m-auto cursor-pointer border">
                      <img  src="https://wealthmark.io/assets/img/chain-img1.png" class="w-100 rounded" alt="New in BMK Chain" title="New in BMK Chain">
                      <div class="p-4">
                          <div class="fs-16 text-blue mb-3">
                              Wealth Mark Chain Builder Grant Opens Door to Innovators
                          </div>
                          <div class="d-flex align-items-center fs-16 text-muted line-height-10 dex-card-footer">
                              <span>Apr 24</span>
                                <div>
                              <span>3 min read</span>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="shadow-sm max-width-350px m-auto cursor-pointer border">
                      <img  src="https://wealthmark.io/assets/img/chain-img1.png" class="w-100 rounded" title="New in BMK Chain" alt="New in BMK Chain">
                      <div class="p-4">
                          <div class="fs-16 text-blue mb-3">
                              Wealth Mark Chain Builder Grant Opens Door to Innovators
                          </div>
                          <div class="d-flex align-items-center fs-16 text-muted line-height-10 dex-card-footer">
                              <span>Apr 24</span>
                               <div>
                              <span>3 min read</span>
                               </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 text-center my-5">
                  <a href="#" class="btn-yellow min-width-200px py-3 fs-6">Learn More</a>
              </div>
            </div>
            </div>
       </section>
 <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-4">
                         <!--<h2 class="heading-h2">Join the BMK Chain <span class="yellow-text"> Ecosystem </span></h2>-->
                         <!--<div class="fs-5 text-blue">Get started in 3 steps to dive into the world of Wealthmark Chain.</div>-->
                         <div class="display-5 text-blue">Join the BMK Chain  <span class="yellow-text"> Ecosystem  </span> </div>
                         <div class="fs-4 text-muted mb-5">  Get started in 3 steps to dive into the world of Wealthmark Chain.  </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="join-wm-chain one">
                        <div class="display-6 text-blue mb-3">Download a wallet</div>
                        <div class="fs-4 mb-3 fw-normal">A wallet helps you connect to<br> BMK Chain and manage your funds.</div>
                        <a href="#" class="btn-blue d-inline-block shadow-none">Download Wallet</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="join-wm-chain two">
                        <div class="display-6 text-blue mb-3">Get BMK</div>
                        <div class="fs-4 mb-3 fw-normal">BMK is the currency of BMK Chain <br>- you can use it in dApps.</div>
                        <a href="#"  class="btn-blue d-inline-block shadow-none">Get BMK</a>
                    </div>
                </div>
                 <div class="col-md-12">
                    <div class="join-wm-chain three">
                        <div class="display-6 text-blue mb-3">Use a dApp</div>
                        <div class="fs-4 mb-3 fw-normal">Discover the hottest projects on BNB Chain.</div>
                        <a href="#"  class="btn-blue d-inline-block shadow-none">Find Your First dApp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="bg-light-blue">
        <div class="container">
            <div class="row build-chain-row-main">
                <div class="col-md-6 col-md-6 col-xs-12 order-2 order-lg-1">
                   <div class="display-5 text-blue">Build  <span class="yellow-text"> on BMK Chain  </span> </div>
                    <div class="build-chain-inner-box">
                        <div class="text">Wealth Mark Smart Chain (BSC) supports the most popular programming languages, flexible tools, and comes with clear and canonical documentation. You can quickly start and deploy your application on a blockchain designed with real use in mind.</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut  labore et dolore magna aliqua.</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn-yellow">Start Building</a>&nbsp;&nbsp; <a href="#" class="btn-default shadow-sm">Read the Docs</a>
                    </div>
                </div>
                <div class="col-md-6 col-md-6 col-xs-12 order-1 order-lg-2">
                    <div class="build-chain-inner-box">
                        <img loading="lazy" class="chain-img img-fluid d-block mx-auto max-width-400px" src="{{ asset('assets/img/dex/code.png') }}" alt="Build on BMK Chain" title="Build on BMK Chain">
                    </div>
                </div>
            </div>
            <div class="bg-white mt-5 p-4 rounded shadow-sm">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="p-2">
                        <h4 class="mb-3"><span class="yellow-text">// </span> Best EVM Compatible</h4>
                        <div class="text">The best-performing EVM compatible layer 1. Fully compatible tooling for EVM
                            with up to 35
                            times of capacity.</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="p-2">
                        <h4 class="mb-3"><span class="yellow-text">// </span> Massive User Base</h4>
                        <div class="text">The best-performing EVM compatible layer 1. Fully compatible tooling for EVM
                            with up to 35
                            times of capacity.</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="h-divider my-3"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="p-2">
                        <h4 class="mb-3"><span class="yellow-text">// </span> Most Diversified Assets</h4>
                        <div class="text">The best-performing EVM compatible layer 1. Fully compatible tooling for EVM
                            with up to 35
                            times of capacity.</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="p-2">
                        <h4 class="mb-3"><span class="yellow-text">// </span> Strongest Ecosystem</h4>
                        <div class="text">The best-performing EVM compatible layer 1. Fully compatible tooling for EVM
                            with up to 35
                            times of capacity.</div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
   <section>
       <div class="container">
            <div class="bg-light-blue p-5 rounded mb-5 position-relative">
           <div class="row">
                 <div class="col-xl-6">
                    <div class="sec-title">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">WM-Apps on Playstore</h2>
                    </div>
                    <div class="text md-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="read-more-block mt-4">
                        <a href="#" class="btn btn-yellow shadow mt-3">Explore Playstore Now</a>
                    </div>
                </div>
           </div>
            <img class="des-app-img one" src="{{ asset('assets/img/many-app-store.svg') }}" alt="WM-Apps on Playstore" title="WM-Apps on Playstore">
            <img class="des-app-img two" src="{{ asset('assets/img/dex/wmapps-icons-md.svg') }}" alt="WM-Apps on Playstore" title="WM-Apps on Playstore">
            </div>

           <div class="row align-items-center justify-content-center">
               <div class="col-lg-8 text-center">
                   <div class="display-5 text-blue">Get Involved, Be Part of the <br> <span class="yellow-text"> Community  </span> </div>
                   <div class="fs-4 text-muted mt-3 mb-3">
                       Wealthmark Chain is a global, decentralized network with developers, validators, users, HODLers and enthusiasts.
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-md-12">
                   <div class="dex_get_involved">
                       <div class="block reddit">
                           <i class="bi bi-reddit"></i>
                           <div class="no-hover">Discord</div>
                           <div class="on-hover">Get Involved</div>
                       </div>
                       <div class="block twitter">
                           <i class="bi bi-twitter"></i>
                           <div class="no-hover">Twitter</div>
                           <div class="on-hover">Read The Latest</div>
                       </div>
                       <div class="block youtube">
                           <i class="bi bi-youtube"></i>
                           <div class="no-hover">Youtube</div>
                           <div class="on-hover">Watch Videos</div>
                       </div>
                       <div class="block telegram">
                           <i class="bi bi-telegram"></i>
                           <div class="no-hover">Telegram</div>
                           <div class="on-hover">Join Discussion</div>
                       </div>
                       <div class="block github">
                           <i class="bi bi-github"></i>
                           <div class="no-hover">GitHub</div>
                           <div class="on-hover">Build With Us</div>
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
