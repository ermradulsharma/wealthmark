  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark |{{ Request::segment(2) }} </title>
  @include('template.web_css')


 <style>

  </style>
   </head>

 <body class="bg-white">
        @include('template.web_menu')


      <section  class="breadcrumbs shadow community-top">
          <div class="container-fluid mt-3">
              <div class="row align-items-center justify-content-center">
                 <div class="col-lg-4 col-md-6 col-sm-6 d-flex flex-column justify-content-center pt-lg-0 pb-3 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                 <h3 class="top-heading">Wealthmark Vault </h3>
                 <p class="top-p">One-click to earn multi-benefits with Wealthmark</p>

                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-6 order-1 order-lg-2 hero-img text-center pb-3" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/bmk-vault/wm-ecosystem.png') }}" class="img-fluid w-100 max-width-350px" alt="welathmark">
                 </div>
              </div>
           </div>
      </section>
      <!-----------------ecosystemt-content-block--------------------->
      <section class="bg-light-blue">
      <div class="container">
  <div class="eco-first-block-top">
    <div class="eco-first-block-left">
      <h3>Current Est. APR</h3>
      <div  class="green-text-large">0.35%</div>
    </div>
    <div class="eco-first-block-right">
      <span  class="text">BNB Vault combines rewards from Simple Earn and Launchpool and offers competitive returns.</span>
      <div cursor="pointer" id="open_video_modal" class="video-div-eco-desk">
        <div>Tutorial</div>
        <svg  viewBox="0 0 24 24" fill="none" class="svg-video">
          <path d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z" fill="currentColor"></path>
          <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
        </svg>
      </div>
    </div>
  </div>
  <div class="eco-sys-mob-first">
    <div class="text">BNB Vault combines rewards from Simple Earn and Launchpool and offers competitive returns.</div>
    <div class="amt-box-mob">
      <span  class="amt-title-mob">Current Est. APR</span>
      <div  class="green-text-large-mob">0.35%</div>
    </div>
    <div class="video-div-eco">
      <div cursor="pointer" class="tutorial">
        <div   class="">Tutorial</div>
        <svg  viewBox="0 0 24 24" fill="none" class="svg-video">
          <path d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z" fill="currentColor"></path>
          <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
        </svg>
      </div>
    </div>
  </div>
  <div class="ecosystemt-content-main">
      <!--=====================================open this section before login and comment below section==============================================-->

    <!--   <div class="ecosystemt-content-main-left">-->
    <!--  <h3>My Shares</h3>-->
    <!--  <div class="ecosystem-my-shares">-->
    <!--    <img src="{{ asset('assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="ecosystemt-content-main-left-img">-->
    <!--    <div class="btn-check-inner">-->
    <!--      <div  class="symbol-dash">-</div>-->
    <!--    </div>-->
    <!--    <div  class="eco-title">Staked Wealthmark</div>-->
    <!--  </div>-->


    <!--  <div class="ecosystemt-btn-div-inner mb-3">-->
    <!--    <button type="button"  class="btn-yellow w-100 border-0">Login</button> -->

    <!--  </div>-->
    <!--  <a  target="_blank" href="#" class="mb-2 w-100 d-block">-->
    <!--    <button type="button"  class="btn-default border-0 d-block w-100">Buy Wealthmark to Stake -->
    <!--    <svg  viewBox="0 0 24 24" fill="none" class="svg-chevron-right">-->
    <!--        <path d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z" fill="currentColor"></path>-->
    <!--      </svg>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--  <a  target="_blank" class="mb-2 w-100 d-block" href="#">-->
    <!--    <button type="button"  class="btn-default border-0 d-block w-100">Join Launchpad <svg  viewBox="0 0 24 24" fill="none" class="svg-chevron-right">-->
    <!--        <path d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z" fill="currentColor"></path>-->
    <!--      </svg>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <div class="ecosystemt-content-main-left">
      <h3>My Shares</h3>
      <div class="ecosystem-my-shares">
        <img src="{{ asset('assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="ecosystemt-content-main-left-img">
        <div class="btn-check-inner">
          <div  class="symbol-dash">-</div>
        </div>
        <div  class="eco-title">Staked Wealthmark</div>
      </div>

      <div class="mb-3 d-flex justify-content-between">
          <div class="d-flex justify-content-between align-items-center" >
             <div class="lf-change-optn">
                  <svg viewBox="0 0 24 24" fill="none" class="lf-change-optn-icon" >
                    <path d="M20.7 11.925c0 2.1-.8 4.1-2.3 5.6-1.6 1.5-3.6 2.3-5.6 2.3-2 0-4-.8-5.6-2.3l-1.3-1.3 1.4-1.4 1.3 1.3c2.3 2.3 6 2.3 8.3 0 1.1-1.1 1.7-2.6 1.7-4.2s-.6-3.1-1.7-4.2c-2.3-2.3-6-2.3-8.3 0l-1.1 1.2h3.3v2H4v-6.8h2v3.4l1.2-1.2c3.1-3.1 8.1-3.1 11.2 0 1.5 1.5 2.3 3.5 2.3 5.6z" fill="currentColor"></path>
                  </svg>

                </div>
                  <span class="ms-2 border-bottom crnt-reward m-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The available balance of your Spot wallet will be used daily at 02:00 and 20:00 (UTC + 0) to subscribe BNB Vault.">
                      Auto Transfer
                  </span>
          </div>
               <div class="simple-earn-tbl">
                        <input type="checkbox" hidden="hidden" id="username_1">
                <label class="switch" for="username_1"></label>
                      </div>
 </div>
      <div class="ecosystemt-btn-div-inner mb-3">
        <button type="button"  class="btn-yellow w-100 border-0" id="stake_modal_open">Stake</button> &nbsp;&nbsp;&nbsp;
        <button type="button" disabled class="btn-default border-0 d-block w-100">UnStake</button>
      </div>
      <a  target="_blank" href="{{ url(app()->getLocale()) }}/buy-dogecoin" class="mb-2 w-100 d-block">
        <button type="button"  class="btn-default border-0 d-block w-100">Buy Wealthmark to Stake
        <svg  viewBox="0 0 24 24" fill="none" class="svg-chevron-right">
            <path d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z" fill="currentColor"></path>
          </svg>
        </button>
      </a>
      <a  target="_blank" class="mb-2 w-100 d-block" href="{{ url(app()->getLocale()) }}/launchpad">
        <button type="button"  class="btn-default border-0 d-block w-100">Join Launchpad <svg  viewBox="0 0 24 24" fill="none" class="svg-chevron-right">
            <path d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z" fill="currentColor"></path>
          </svg>
        </button>
      </a>
    </div>
    <div class="my-reward-sec">
      <div class="my-reward-sec-first">
        <h3>My Rewards</h3>
        <a  href="#" class="yellow-text">Distribution History</a>
      </div>
      <div  class="text">All Rewards will be distributed to spot wallet.</div>
      <div class="my-reward-inner-block">
        <div  class="my-reward-inner-block-left">
          <h6>Flexible Rewards</h6>
          <div  class="amt-title-desk">Est. APR
            <!-- -->
            <!-- -->0.35%
          </div>
        </div>
        <div class="my-reward-inner-block-mid">
          <div class="reward-div-main-outer">
            <div class="reward-div-main">
              <div class="d-flex align-items-center text-dark">
                <img class="reward-coin-img" src="{{ asset('assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                <div  class="reward-coin-name">BNB</div>
              </div>
            </div>
            <div  class="reward-number">0</div>
          </div>
        </div>
        <div class="my-reward-inner-block-right">
          <div class="div1">
            <div  class="amt-subtitle">Est. APR</div>
            <div  class="green-text-sm">0.35%</div>
          </div>
        </div>
      </div>
      <div class="my-reward-inner-block">
        <div  class="my-reward-inner-block-left">
          <h6>Launchpool Rewards</h6>
          <div  class="amt-title-desk">Est. APR
            <!-- -->
            <!-- -->0%
          </div>
        </div>
        <div class="my-reward-inner-block-mid">
          <div class="crnt-reward-div">
            <div  class="crnt-reward">Current Rewards</div>
            <div  class="symbol-dash">-</div>
          </div>
        </div>
        <div class="my-reward-inner-block-right">
          <div class="div1">
            <div  class="amt-subtitle">Yesterday’s APR</div>
            <div  class="green-text-sm">0%</div>
          </div>
        </div>
      </div>
      <div class="my-reward-inner-block">
        <div  class="my-reward-inner-block-left">
         <h6>Other Rewards</h6>
          <div  class="amt-title-desk">Est. APR
            <!-- -->
            <!-- -->0%
          </div>
        </div>
        <div class="my-reward-inner-block-mid">
          <div class="crnt-reward-div">
            <div  class="crnt-reward">Current Rewards</div>
            <div  class="symbol-dash">-</div>
          </div>
        </div>
        <div class="my-reward-inner-block-right">
          <div class="div1">
            <div  class="amt-subtitle">Est. APR</div>
            <div  class="green-text-sm">0%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>




<div class="ecosystemt-main">
  <div class="ecosystemt-inner">
    <div class="ecosystemt-content-block">
      <div class="ecosystemt-contentinner">
        <img src="{{ asset('assets/img/bmk-vault/wm-vault.png') }}" class="ecosystemt-img-left max-width-300px">
        <div class="top-img-box">
          <img src="{{ asset('assets/img/vault-bg-circle.svg') }}" class="ecosystemt-img">
          <div  class="top-img-box-subtitle">What is Wealthmark</div>
        </div>
        <div class="eco-content-left">
          <h3> Wealthmark Ecosystem</h3>
          <div  class="text">As the native coin of Wealthmark Chain, Wealthmark has multiple use cases: Fueling transactions on the Chain, paying for transaction fees on Wealthmark Exchange, making in-store payments, and many more.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="ecosystemt-btn-div">
    <div class="ecosystemt-btn-div-inner">
      <div class="tabs-change eco-btns-inner">
        <div class="eco-btns-inner-main">
          <div class="eco-btns-border"></div>
          <div  class="eco-btns-text">Buy Wealthmark</div>
        </div>
      </div>
      <div class="tabs-change eco-btns">
        <div class="eco-btns-inner-main">
          <div class="eco-btns-border"></div>
          <div  class="eco-btns-text">Store Wealthmark</div>
        </div>
      </div>
      <div class="tabs-change eco-btns">
        <div class="eco-btns-inner-main">
          <div class="eco-btns-border"></div>
          <div  class="eco-btns-text">Use Wealthmark</div>
        </div>
      </div>
      <div class="tabs-change eco-btns">
        <div class="eco-btns-inner-main">
          <div class="eco-btns-border"></div>
          <div  class="eco-btns-text">Burn Wealthmark</div>
        </div>
      </div>
    </div>
  </div>
  <div class="buy-section">
    <div class="buy-section-bg">
      <div class="buy-section-inner">
        <div class="buy-section-top">
          <div class="buy-section-top-left">
            <h3>Buy Wealthmark</h3>
            <div class="text">Buying Wealthmark is easy. Check the list below to find the place that suits you best!</div>
          </div>
          <img src="{{ asset('assets/img/vault-buy-wm-right.svg') }}" class="line-img">
        </div>
        <div class="our-partner-main">
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-spendlogo.svg') }}" class="partner-logo">
                <div  class="our-partner-inner-text">Buy &amp; Sell Wealthmark with bank account</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-coinflip.svg') }} " class="partner-logo">
                <div  class="our-partner-inner-text">Buy Wealthmark with ATMs</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-gb.svg') }}" class="partner-logo">
                <div  class="our-partner-inner-text">Buy Wealthmark with cash</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-bravelion.svg') }}" class="partner-logo">
                <div  class="our-partner-inner-text">Trade Wealthmark and other crypto in Brave Browser</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-2">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-metalpay.svg') }}" class="partner-logo">
                <div  class="our-partner-inner-text">Purchasing and selling Wealthmark with USD</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-dether.svg') }}" class="partner-logo">
                <div  class="our-partner-inner-text">Buy Wealthmark with cash</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-inner">
              <div class="our-partner-inner-div">
                <img src="{{ asset('assets/img/vault-netcoins.svg') }}" class="partner-logo">
                <div  class="our-partner-inner-text">Buy Wealthmark voucher</div>

              </div>
              <a  href="#" target="_blank" class="a-hover-check">
                <button type="button" class="btn-check-hover">
                  <div class="btn-check-inner">Check
                    <!-- -->
                    <svg  viewBox="0 0 24 24" fill="none" class="svg-right-arrow">
                      <path d="M13.5 19l-1.4-1.4 5.1-5.1H3v-2h14.2l-5.1-5.1L13.5 4l7.5 7.5-7.5 7.5z" fill="currentColor"></path>
                    </svg>
                  </div>
                </button>
              </a>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="our-partner-block">
            <div class="our-partner-more">
              <div class="our-partner-more-inner">
                <h6>More in the future</h6>
              </div>
            </div>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-1">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
            <svg  viewBox="0 0 16 16" fill="none" class="svg-plus-2">
              <path d="M2 7.25h12v1.5H2v-1.5z" fill="currentColor"></path>
              <path d="M8.75 2v12h-1.5V2h1.5z" fill="currentColor"></path>
            </svg>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>




<section class="wm-pay-accordian-section">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">

                            <div class="sec-title text-center mb-2">
                           <h2 class="heading-h2">FAQs</h2>
                            </div>

                        </div>
                         <div class="wm-outlet-div text-right justify-content-end">

                            <a href="#" class="learn-more btn-6">
                           <span>Learn More </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>

                        </div>
                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        What is Wealthmark Vault？
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  Wealthmark Vault is a Wealthmark yield aggregator. Depositing Wealthmark means participating in Launchpool, Simple Earn, Defi staking and other projects and at the same time gaining rewards..</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    What are the sources of Wealthmark Vault reward?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">The rewards from Wealthmark Vault is accumulated by the income of different projects. Currently it includes Simple Earn, Launchpool, Defi staking.</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       When can I redeem after subscribing to Wealthmark vault?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">The time frame for subscription and redemption is open from 00:10-23:50(UTC) every day.</div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
     subscribing Wealthmark vault and participating in Launchpool projects？
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">If there is only one project in Launchpool, the APR is the same in these two products; if there is more than one project on-going in Launchpool, Wealthmark vault will subscribe the projects for users automatically according to the configuration while in Launchpool users can choose which project to participate in and allocate their funds as they want.</div>
      </div>
    </div>
  </div>


</div>
</div>
</section>


<div id="video_modal">
    <div class="hide">
    <div class="wm-custom-modal-diolog">
        <div class="wm-custom-modal-body">
           <div class="wm-custom-modal-header border-bottom">
                    <span>Wealthmark Vault Tutorial </span>
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                      <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                    </svg>
            </div>
            <div id="appendVideo" class="p-3 bg-white pt-1">

            </div>
        </div>
    </div>
</div>
</div>



<div id="autoTransfer_modal">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
          <div class="wm-custom-modal-header mb-0">
        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
          <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
        </svg>
        </div>
        <div class="px-4">
          <div class="mb-3 text-center">
            <img class="warning-img" src="https://www.wealthmark.io/assets/img/warning.svg">
          </div>
          <h3 class="title mb-3 text-center">Auto Transfer</h3>
          <div class="text"> Turning Auto-transfer on means your corresponding asset (including your interests, new token purchase) in the spot wallet will be transferred to the Earn wallet every 24 hours; you can find the auto-transfer history under [Earn History]-[Savings]-[Flexible]. </div>
          <div class="mt-5 mb-4">
            <a href="#" class="btn-yellow d-block text-center text-white"> OK </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="Stake_div">
<div class="hide">
    <div class="wm-custom-modal-diolog">
        <div class="wm-custom-modal-body">
           <div class="wm-custom-modal-header">
                    <span>Stake BNB </span>
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                      <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                    </svg>


            </div>
             <div class="body">
                        <div class="flex-1 px-3">
                  <div class="field crypto-rght-second-box">
                      <div class="d-flex justify-content-between">
                            <span class="step-progress-title">Lock Amount</span>
                            <span class="step-progress-title">Available amount 0.00000000 ETH</span>
                      </div>

                    <div class="input-wrap mt-2">
                      <div class="input-outer-div">
                        <input type="text" value="" class="inputbox">
                        <span class="input-span-text">MAX</span>
                      </div>
                      <div class="coin-select w-auto">
                        <div class="input-right-img-div">
                          <img id="Collateral-coin-img" src="https://www.wealthmark.io/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png" alt="BUSD" title="BUSD">
                        </div>
                        <span id="Collateral-coin-text" class="coin">Wm</span>
                      </div>
                    </div>
                    <div class="condition_error_msg"> ----------- show your condition msg here --------------- </div>
                  </div>
                </div>
                        <div class="modal-conver-div-main">
                  <div class="d-flex">
                    <svg viewBox="0 0 24 24" fill="none" class="modal-conver-div-main-svg">
                      <path d="M12.011 2H12C6.472 2 2 6.472 2 12c0 5.527 4.472 10 10 10 5.516 0 9.988-4.473 10-9.989.012-5.527-4.461-10-9.989-10.011zm.998 16.984h-2.018v-2.007h2.018v2.007zm0-4.633h-2.018V5.005h2.018v9.346z" fill="currentColor"></path>
                    </svg>
                    <div class="modal-conver-div-main-txt">Don’t have enough crypto?</div>
                  </div>
                  <div class="modal-conver-div">
                    <div class="modal-conver-div-text">Convert</div>
                    <svg viewBox="0 0 24 24" fill="none" class="modal-conver-div-svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                    </svg>
                  </div>
                </div>
                <div class="px-3">
                <div class="subscribe_modal-dec-div">
                  <div class="subscribe_modal-dec-inner">
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">The APR is subject to change on a daily basis. Please refer to the details on the page.</div>
                    </div>
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">APR does not mean the actual or predicted returns in fiat currency.</div>
                    </div>
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.002 7H16l4-4v16l-4-4h-4v6H7v-6H4.002V7z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">Locked will return the subscribed digital assets to users’ spot wallets after the agreed period ends or early redemption, but the value of digital assets fluctuates and is subject to change.</div>
                    </div>
                  </div>
                </div>
                <div class="subscribe_modal-right-footer position-relative bg-white">

                    <div class="subscribe_modal-check-box mb-2 bg-white">
                      <label class="subscribe_modal-check-box-lbl">
                        <div class="subscribe_modal-check-box-input">
                          <input type="checkbox" id="subscribe_agree_checkbox">
                        </div>
                      </label>
                      <div class="">I have read and I agree to <a target="_blank" href="#" class="yellow-text">Wealthmark Simple Earn Service Agreement</a>
                      </div>

                  </div>
                  <div class="d-flex">
                  <button type="button" class="btn-default d-block w-100 border-0">Cancel</button> &nbsp;&nbsp;
                  <button type="button" class="btn-yellow d-block w-100 border-0">Confirm</button>
                  </div>
                </div>
                 </div>
                 </div>
        </div>
    </div>
</div>
</div>


<div id="convert_coin_modal">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
        <div class="wm-custom-modal-header">
          <span>Select Currency </span>
          <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
          </svg>
        </div>
        <div class="px-4">
          <div class="custom-step-progress-bln-div">
            <div class="d-flex align-items-center justify-content-end w-100 mb-3">
              <div class="text-gray">Spot Wallet</div>
            </div>
            <div class="coin-drop-down-div">
              <div class="coin-drop-down-div-inner" id="coinvert_coin_from">
                <div class="d-flex">
                  <img src="https://www.wealthmark.io/assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png" class="coin-drop-down-div-inner-img" id="coinvert_coin_from_img">
                  <div class="coin-drop-down-div-inner-txt" id="coinvert_coin_from_text">USDT</div>
                </div>
                <svg viewBox="0 0 24 24" fill="none" class="modal-svg-down">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                </svg>
              </div>
              <div class="coin-drop-down-input-div">
                <input type="text" placeholder="1-170000" value="">
                <div class="coin-drop-down-input-div-txt">Balance: 0.00 USDT</div>
              </div>
            </div>
            <div class="bln-div-h-16"></div>
            <div class="mb-4 text-center w-100">
              <svg viewBox="0 0 24 24" fill="none" class="modal-svg-down" style="cursor: pointer;" id="swap_value">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3a9 9 0 110 18 9 9 0 010-18zm5 10l-5 5-5-5h3.75V6h2.5v7H17z" fill="currentColor"></path>
              </svg>
            </div>
            <div class="coin-drop-down-div">
              <div class="coin-drop-down-div-inner" id="coinvert_coin_to">
                <div class="d-flex">
                  <img src="https://www.wealthmark.io/assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png" class="coin-drop-down-div-inner-img" id="coinvert_coin_to_img">
                  <div class="coin-drop-down-div-inner-txt" id="coinvert_coin_to_text">APE</div>
                </div>
                <svg viewBox="0 0 24 24" fill="none" class="modal-svg-down">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                </svg>
              </div>
              <div class="coin-drop-down-input-div">
                <input type="text" placeholder="0.25-42000" value="">
              </div>
            </div>
            <div class="bln-div-h-16"></div>

            <div class="coin-canversion-div">
                  <div class="coin-canversion-div-flex-div">
                    <div class="rate-heading">Rate</div>
                    <div class="rate-heading">1 MATIC = 0.00318961 BNB <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="swap-svg-icon">
                        <path d="M2 7l5.5 5.5 1.41-1.42L5.82 8H21V6H5.82l3.09-3.09L7.5 1.5 2 7zM22 17l-5.49-5.5-1.41 1.42L18.19 16H3v2h15.19l-3.09 3.08 1.41 1.41L22 17z" fill="#76808F"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="coin-canversion-avail-div">
                    <div class="rate-heading">You Receive</div>
                    <div class="coin-canversion-title">0.39870147 BNB</div>
                  </div>
                  <div class="error-red-bg-div">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="error-cross">
                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5.326 13.909l-1.429 1.417L12 13.429l-3.897 3.897-1.429-1.417 3.909-3.898-3.909-3.908 1.429-1.417L12 10.583l3.897-3.897 1.429 1.417-3.897 3.908 3.897 3.898z" fill="currentColor"></path>
                    </svg>
                    <div class="error-red-text">Insufficient balance. Please fund your account.</div>
                  </div>
            </div>
            <div class="bln-div-h-16"></div>
            <button type="button" class="btn-yellow d-block w-100 border-0"> Enter Amount </button>
            <div class="bln-div-h-16"></div>
            <div class="bln-div-h-16"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="coin_list_modal">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
        <div class="wm-custom-modal-header">
          <span>Select Currency </span>
          <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
          </svg>
        </div>
        <div class="px-4 mb-5">
          <div class="lf-select_coin-to">
            <div class="wm-dropdown-div position-relative shadow-none  w-100 h-auto">
              <div class="p-3">
                <div class=" wm-dropdown-srch-div">
                  <div class="wm-input-prefix ">
                    <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                    </svg>
                  </div>
                  <input type="text" class="wm-dropdown-search-input" value="">
                  <div class="wm-input-suffix ">
                    <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                    </svg>
                  </div>
                </div>
              </div>
              <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">BTC</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">BNB</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">ETH</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">USDT</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">Example-5</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="35" title="35" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">Example-4</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="36" title="36" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">coin-</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="37" title="37" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">Example-2</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="38" title="38" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                      <div class="wm-dropdown-optn-item-txt">Example-1</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  @include('template.country_language')
    @include('template.web_footer')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
      $(".tabs-change").click(function(){
            $(this).addClass("eco-btns-inner").removeClass("eco-btns");
            $(this).siblings(".eco-btns-inner").addClass("eco-btns").removeClass("eco-btns-inner");
});





  </script>


  <script>

    $("#open_video_modal").click(function(){
        $('#video_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
        $("#appendVideo").load("<?php echo url( app()->getLocale(), 'video-section');  ?>");
    });
    $("#stake_modal_open").click(function(){
        $('#Stake_div').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');

    });
    $(".modal-conver-div").click(function(){
        $('#convert_coin_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');

    });
    $("#coinvert_coin_from").click(function(){
        $('#coin_list_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');

    });


  function changeSrc2(id){
                const li = id;
                    $("#coinvert_coin_from_img").attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img").attr('src')) ;
                    $("#coinvert_coin_from_text").html($("#"+li+' '+ ".wm-dropdown-optn-item-txt").html()) ;
                    $("#coin_list_modal").children().addClass("hide").removeClass("custom-modal-bck-bg");

            };
        $.fn.swap = function (elem) {
                        elem = elem.jquery ? elem : $(elem);
                            return this.each(function () {
                            $(document.createTextNode('')).insertBefore(this).before(elem.before(this)).remove();
                        });
                    };


                $('#swap_value').click(function () {
                    $('#coinvert_coin_from_text').swap('#coinvert_coin_to_text');
                    $('#coinvert_coin_from_img').swap('#coinvert_coin_to_img');

                });

                $(function() {
                                                $(".wm-dropdown-search-input").on("keyup", function() {
                                                var value = $(this).val().toLowerCase();
                                                $(".wm-dropdown-optn-item").filter(function() {
                                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                });});});

    $(function()
    {
      $('#username_1').change(function()
      {
        if ($(this).is(':checked')) {
          $('#autoTransfer_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
        }else{
            $('#autoTransfer_modal').children().addClass('hide').removeClass('custom-modal-bck-bg');
        }
      });
    });


  </script>


    </body>
</html>
