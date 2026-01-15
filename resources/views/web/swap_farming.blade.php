  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')


      <style>
    
      </style>


  </head>

  <body class="bg-white">
      @include('template.web_menu')



      <div class="Liquid_Swap_top pt-5 mb-0 pb-0">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-md-8 col-sm-10 col-xs-12">
                      <div class="sec-title text-center">
                          <span class="title">Welcome to Wealthmark</span>
                          <h2 class="heading-h2 text-white">Wealthmark Liquid Swap </h2>
                          <div class="text text-center text-white">Trade Instantly & Pool Tokens to Earn Rewards</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

   <div class="Liquid_Swap_bg-overlay position-relative">
          <div class="container">
              <div class="tab-pills-div-top">
                  <div class="tab-pills-div-top-left scrollbar-style">
                      <a href="{{ url( app()->getLocale(), 'wm-pool') }}" class="lp-link-top">
                          <div class="lp-link-top-block">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Overview</div>
                              </div>
                          </div>
                      </a>
                      <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" class="lp-link-top">
                          <div class=" lp-link-top-block ">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Liquidity</div>
                              </div>
                          </div>
                      </a>
                      <a href="{{ url( app()->getLocale(), 'swap-farming') }}" class="lp-link-top">
                          <div class="  active-tab lp-link-top-active" id="swap-farming-swap-tab">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Swap</div>
                                  <div class="lp-reward">
                                      <div class="lp-reward-txt">Rewards</div>
                                  </div>
                              </div>
                              <!--<div class="wm-l8do11 swap-framing-swap-tooltip" data-popper-placement="top">-->
                              <!--    <div class="wm-swap-farming-tooltip-close-btn closable-tooltip-icon-1">-->
                              <!--        <svg viewBox="0 0 16 16" fill="none" class="wm-closable-tooltip-icon">-->
                              <!--            <path fill-rule="evenodd" clip-rule="evenodd"-->
                              <!--                d="M14 12.676l-1.324 1.316-4.683-4.675L3.324 14l-1.316-1.324L6.676 8 2 3.324l1.324-1.317 4.669 4.676L12.676 2l1.31 1.324L9.315 8 14 12.676z"-->
                              <!--                fill="currentColor"></path>-->
                              <!--        </svg>-->
                              <!--    </div>-->
                              <!--    <div  class="wm-rjqmed">Swap</div>-->
                              <!--    <div class="wm-1am1uy5">Get up to 50% of fee returns in BNB when making a swap.</div>-->
                                 
                              <!--    <div data-popper-arrow="true" class="wm-18sbeu" style="position: absolute; left: 0px; transform: translate(96px, 0px);"></div>-->
                              <!--</div>-->
                          </div>
                      </a>
                      <div class="lp-link-top-block">
                          <div class="lp-link-top-block-inner">
                              <div class="lp-link-top-txt">History</div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pills-div-top-right">
                      <button type="button" class=" tutorial-btn">
                          <svg viewBox="0 0 24 24" fill="none" class="tutorial-btn-video">
                              <path
                                  d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z"
                                  fill="currentColor"></path>
                              <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
                          </svg>
                          <div class="tutorial-btn-txt">Tutorial</div>
                      </button>
                      <a href="#" class="tab-pills-div-top-right-txt">FAQ</a>
                  </div>
              </div>
          </div>
      </div>





      <section  class="claim-reward-btn bg-light-blue">
          <div class="container">
              <div class="row">
                  <div class="outer-max-729px">
                      <div class="rwrd-div-outer">
                          <div class="rwrd-div-inner">
                              <div class="rwrd-div">
                                  <div class="rwrd-title">Swap Rewards</div>
                                  <div class="rwrd-info-div" data-bs-toggle="tooltip" data-bs-placement="bottom"  title=""  data-bs-original-title="Get up to 50% of fee returns in BNB when making a swap.">
                                      <i class="bi bi-info-circle-fill rwrd-info"></i>
                                  </div>
                              </div>
                              <div class="rwrd-subtitle"> 0 wm</div>
                          </div>
                          <!--<div class="wm-l8do11 claim-reward-btn-tooltip" data-popper-placement="top">-->
                          <!--    <div class="wm-swap-farming-tooltip-close-btn closable-tooltip-icon-2">-->
                          <!--        <svg viewBox="0 0 16 16" fill="none" class="wm-closable-tooltip-icon">-->
                          <!--            <path fill-rule="evenodd" clip-rule="evenodd"-->
                          <!--                d="M14 12.676l-1.324 1.316-4.683-4.675L3.324 14l-1.316-1.324L6.676 8 2 3.324l1.324-1.317 4.669 4.676L12.676 2l1.31 1.324L9.315 8 14 12.676z"-->
                          <!--                fill="currentColor"></path>-->
                          <!--        </svg>-->
                          <!--    </div>-->
                          <!--    <div  class="wm-rjqmed">Claim Rewards</div>-->
                          <!--    <div class="wm-1am1uy5">Claim swap rewards in BNB</div>-->
                          <!--    <div class="wm-sr9689">-->
                          <!--        <div class="wm-10nf7hq">-->
                          <!--            <div class="wm-1apxx4w"></div>-->
                          <!--            <div class="wm-wybyj1"></div>-->
                          <!--            <div class="wm-wybyj1"></div>-->
                          <!--        </div>-->
                          <!--    </div>-->
                          <!--    <div data-popper-arrow="true" class="wm-18sbeu"-->
                          <!--        style="position: absolute; left: 0px; transform: translate(96px, 0px);"></div>-->
                          <!--</div>-->
                          <button type="button" disabled="" class=" claim-reward">Claim Rewards</button>
                      </div>
                  </div>
                  <div class="coin-swap">
                      <div class="coin-swap-left">
                          <div class="coin-swap-left-div1">
                              <h3 class="title m-0 p-0">Swap</h3>

                          </div>
                          <div class="lf-filter-div">
                              <label class="filter-lbl">
                                  <div class="lf-filter-checkbox">
                                      <input type="checkbox" id="filter_token">
                                  </div>
                                  <div class="lf-filter-txt">Filter all tokens with rewards</div>
                              </label>
                              <div class="lf-filter-view-all">View All</div>
                          </div>
                          <div class="coin-select-main-div">
                              <div class="coin-select">
                                  <div class=" coin-swap-from">
                                      <input type="input" value="" placeholder="9.99900001-2499.75"
                                          class="search-box coin-swap-from-input">
                                      <div class="lf-suffix">
                                          <div class="coin-swap-from-status">
                                              <div class="coin-swap-from-status-mid">
                                                  <div class=" coin-swap-from-status-last">
                                                      <input type="input" value="USDT"
                                                          class="wm-lf-input coin-select-drpdn-inner-1-input">
                                                      <div class="lf-suffix">
                                                          <div class="coin-select-drpdn-icn">

                                                              <i
                                                                  class="bi bi-caret-down-fill coin-select-drpdn-icn-1"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="wm-lf-value coin-drpdn-active">
                                                      <div class="coin-drpdn-active-inner">
                                                          <img src="{{ asset('img/2b5c7d80-7bcd-4cfb-8bd9-d1760a752afc.png') }}"
                                                              class="coin-drpdn-active-img">
                                                          <div class="coin-drpdn-active-lbl">USDT</div>
                                                      </div>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <label class="lf-lbl lf-lbl-2">
                                          <div class="lf-lbl-inner">From <span class="lf-lbl-status">Available
                                                  : <span class="lf-lbl-status--">&nbsp;
                                                      --
                                                      &nbsp;
                                                  </span>USDT
                                              </span>
                                          </div>
                                      </label>
                                  </div>
                              </div>
                              <div class="reverse-icon-div">
                                  <div class="reverse-icon-div-inner">
                                      <i class="bi bi-arrow-down-up reverse-icon"></i>

                                  </div>
                              </div>
                              <div class="coin-select">
                                  <div class="coin-select-lbl">To</div>
                                  <div class="coin-select-inner">
                                      <div class=" coin-select-input-div">
                                          <input type="input" value="" class="search-box coin-select-input">
                                      </div>
                                      <div class="coin-select-drpdn">
                                          <div class=" coin-select-drpdn-inner-1">
                                              <input type="input" value="WOO"
                                                  class="wm-lf-input coin-select-drpdn-inner-1-input">
                                              <div class="lf-suffix">
                                                  <div class="coin-select-drpdn-icn">
                                                      <i
                                                          class="bi bi-caret-down-fill wm-lf-icon coin-select-drpdn-icn-1"></i>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="wm-lf-value coin-drpdn-active">
                                              <div class="coin-drpdn-active-inner">
                                                  <img src="{{ asset('img/651765d6-de50-4937-92d1-8f57242fce25.png') }}"
                                                      class="coin-drpdn-active-img">
                                                  <div class="coin-drpdn-active-lbl">WOO</div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                              <div class="lf-lbl-txt">The ultimate price and output is determined by the amount of
                                  tokens in the pool at the time of your swap.</div>
                          </div>
                      </div>
                      <div class="coin-swap-right">
                          <div class="">
                              <div class="smmry-div">
                                  <div class="smmry-txt">Summary</div>
                                  <div class="coin-swap-from-status">
                                      <img src="{{ asset('img/reward-light.svg') }}"
                                          class="smmry-rwrd-png">
                                      <div class="smmry-rwrd-txt">Rewards available!</div>
                                  </div>
                              </div>
                              <div class="lf-status">
                                  <div class="lf-price-div">

                                      <div class="lf-price-lbl" data-bs-toggle="tooltip" data-bs-placement="right"
                                          title=""
                                          data-bs-original-title="Estimated price of the swap, not the final price that the swap is executed.">
                                          Price</div>

                                      <span class="lf-currnt-status">
                                          <div class="lf-status">
                                              <div class="">
                                                  <div class="d-flex">
                                                      <div class="">1</div>&nbsp; <div class="">WOO</div>&nbsp; <div
                                                          class="">≈</div>&nbsp; <div class="">0.16473188</div>&nbsp;
                                                      <div class="">USDT</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </span>
                                  </div>
                                  <div class="lf-price-div">

                                      <div class="lf-price-lbl" data-bs-toggle="tooltip" data-bs-placement="right"  title=""  data-bs-original-title="The estimated percentage that the ultimate executed price of the swap deviates from current price due to trading amount.">
                                          Slippage</div>

                                      <span class="lf-currnt-status">
                                          <div class="">0.23% Slippage</div>
                                      </span>
                                  </div>
                                  <div class="lf-price-div">
                                      <div class="lf-price-lbl" data-bs-toggle="tooltip" data-bs-placement="right"
                                          title=""
                                          data-bs-original-title="The Effective Fee is calculated by Swap Fee minus Fee Rebate.">
                                          Effective fee (0.0825%)
                                      </div>
                                  </div>
                                  <div class="lf-convert-div">
                                      <div class="lf-price-div">

                                          <div class="d-flex">
                                              <div class="lf-price-lbl">
                                                  <div class="" data-bs-toggle="tooltip" data-bs-placement="right"
                                                      title=""
                                                      data-bs-original-title="Trade transaction fee collected by liquidity providers.">
                                                      Swap Fee (0.15%)</div>
                                              </div>
                                              <a href="#" target="_blank">
                                                  <div class="View_Rate">View Rate</div>
                                              </a>
                                          </div>

                                          <span class="lf-currnt-status">
                                              <div class="lf-fee-txt">1.8345 USDT</div>
                                          </span>
                                      </div>
                                      <div class="lf-convert-div-row2">

                                          <div class="d-flex">
                                              <div class="lf-price-lbl">
                                                  <div class="" data-bs-toggle="tooltip" data-bs-placement="right"
                                                      title="" data-bs-original-title="Swap fee return in BNB">Est. Fee
                                                      Rebate (45%)</div>
                                              </div>
                                          </div>

                                          <span class="lf-currnt-status">
                                              <div class="lf-currnt-status-green">0.00299645 wm</div>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--<div class="wm-l8do11 login-to-swap-tooltip" data-popper-placement="top"-->
                          <!--    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(319px, -307px);">-->
                          <!--    <div class="wm-swap-farming-tooltip-close-btn closable-tooltip-icon-3">-->
                          <!--        <svg viewBox="0 0 16 16" fill="none" class="wm-closable-tooltip-icon">-->
                          <!--            <path fill-rule="evenodd" clip-rule="evenodd"-->
                          <!--                d="M14 12.676l-1.324 1.316-4.683-4.675L3.324 14l-1.316-1.324L6.676 8 2 3.324l1.324-1.317 4.669 4.676L12.676 2l1.31 1.324L9.315 8 14 12.676z"-->
                          <!--                fill="currentColor"></path>-->
                          <!--        </svg>-->
                          <!--    </div>-->
                          <!--    <div  class="wm-rjqmed">Confirm Swap</div>-->
                          <!--    <div class="wm-1am1uy5">The exchange from selected tokens in your spot wallet will be-->
                          <!--        processed.</div>-->
                          <!--    <div class="wm-sr9689">-->
                          <!--        <div class="wm-10nf7hq">-->
                          <!--            <div class="wm-1apxx4w"></div>-->
                          <!--            <div class="wm-wybyj1"></div>-->
                          <!--            <div class="wm-wybyj1"></div>-->
                          <!--        </div>-->
                          <!--    </div>-->
                          <!--    <div data-popper-arrow="true" class="wm-18sbeu"-->
                          <!--        style="position: absolute; left: 0px; transform: translate(96px, 0px);"></div>-->
                          <!--</div>-->
                          <button type="button" class=" lf-btn-login">Log In to Swap</button>
                      </div>
                  </div>
              </div>
          </div>
      </section>



      <section class="swap-farming-learn-more bg-light-blue">
          <div class="container">

              <h1 class="title mb-4">Learn More</h1>

              <div class="row">
                  <div class="col-md-4 col-sm-4">
                      <div class="sf-block">
                          <a href="#" target="_blank">
                              <img src="{{ asset('img/sawp-academy-learn.svg') }}">
                              <h3 class="title mt-3">Academy</h3>
                              <div class="text">Learn how to add liquidity to become a liquidity provider and earn high
                                  yield farming rewards.</div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                      <div class="sf-block">
                          <a href="#" target="_blank">
                              <img src="{{ asset('img/sawp-low-fees.svg') }}">
                              <h3 class="title mt-3">Swap Fees</h3>

                              <div class="text">Low fees and high rewards. Swap to earn more wm.</div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                      <div class="sf-block">
                          <a href="#" target="_blank">
                              <img src="{{ asset('img/sawp-tutorial.svg') }}">
                              <h3 class="title mt-3">Tutorials</h3>
                              <div class="text">Watch the video tutorials to learn more about the product.</div>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </section>

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
                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne"
                              aria-expanded="false" aria-controls="collapseOne">
                              Who can use Wealthmark Pay?
                          </h2>
                      </div>

                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                          data-parent="#accordionExample">
                          <div class="card-body">
                              <div class="text"> Wealthmark pay is available to all eligible users on Wealthmark.com. To
                                  start using Wealthmark Pay, please register on Wealthmark.com and complete your
                                  Identity Verification.</div>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-head" id="headingTwo">
                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                              aria-expanded="false" aria-controls="collapseTwo">
                              Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by Wealthmark?
                          </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                          data-parent="#accordionExample">
                          <div class="card-body">
                              <div class="text"> Wealthmark Pay currently supports more than 40 cryptocurrencies.</div>
                              <div class="text">
                                  ADA, ATOM, AVA, BCH, Wealthmark, BTC, BUSD, CTSI, DASH, DOGE, DOT, EGLD, EOS, ETC,
                                  ETH, FIL, FRONT, FTM, GRS, HBAR, IOTX, LINK, LTC, MANA, MATIC, NEO, OM, ONE, PAX,
                                  QTUM, STRAX, SXP, TRX, TUSD, UNI, USDC, USDT, VAI, VET, WRX, XLM, XMR, XRP, XTZ, XVS,
                                  ZEC, ZIL.
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-head" id="headingThree">
                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree"
                              aria-expanded="false" aria-controls="collapseThree">
                              How to access your Wealthmark Pay?
                          </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                          data-parent="#accordionExample">
                          <div class="card-body">
                              <div class="text"> You can access your Wealthmark Pay Wallet by clicking [Wallets] -
                                  [Funding] - [Pay] on your Wealthmark App.</div>
                          </div>
                      </div>
                  </div>


                  <div class="card">
                      <div class="card-head" id="headingFour">
                          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour"
                              aria-expanded="false" aria-controls="collapseFour">
                              How long does it take for a Wealthmark Pay transaction to be completed?
                          </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                          data-parent="#accordionExample">
                          <div class="card-body">
                              <div class="text">Wealthmark Pay transactions are usually confirmed instantly.</div>
                          </div>
                      </div>
                  </div>


              </div>
          </div>
      </section>


      <!-------------------------view all modal ------------------------------------------->


      <div class="custom-modal-div" style="display:none">
          <div class="custom-modal-div-bg"></div>
          <div class="custom-modal-diolog-box">
              <div class="custom-modal-close">
                  <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                      <path
                          d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                          fill="currentColor"></path>
                  </svg>
              </div>
              <div class="modal-title custom-modal-header">
                  <div class="custom-modal-header-title">Swap Rewards of Provided Pairs</div>
              </div>
              <div class="style-dialog-body custom-modal-body">
                  <div class="custom-modal-body-inner">
                      <div class="swap-modal-top-row">
                          <div class="swap-modal-search-div">
                              <div class=" swap-modal-search-inner" id="swap_list">
                                  <input type="input" class="wm-input swap-modal-search-input" value="wm">
                                  <div class="wm-suffix">
                                      <div class="swap-modal-search-drpdn">
                                          <svg viewBox="0 0 24 24" fill="none" class="swap-modal-search-drpdn-icon">
                                              <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor">
                                              </path>
                                          </svg>
                                      </div>
                                  </div>
                              </div>
                              <div class="wm-value wm-value-show">
                                  <div class="sp-li-record-outer">
                                      <div class="sp-li-record-div" id="swap_list_select_value">


                                          <img class="wm-value-show-img"
                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                          <div  class="wm-value-show-txt">USDT</div>

                                      </div>
                                  </div>
                              </div>
                              <div class="wm-dropdown closing wm-dropdown-1">
                                  <div class="wm-innerInputContainer">
                                      <div class=" wm-drpdn-search-div">
                                          <div class="wm-prefix ">
                                              <svg viewBox="0 0 24 24" fill="none" class="wm-icon wm-drpdn-search-icon">
                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                                      fill="currentColor"></path>
                                              </svg>
                                          </div>
                                          <input type="input" class="wm-drpdn-search-input" id="swap_list-search"
                                              value="">
                                          <div class="wm-suffix ">
                                              <svg viewBox="0 0 24 24" fill="none"
                                                  class="wm-icon wm-drpdn-search-close">
                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z"
                                                      fill="currentColor"></path>
                                              </svg>
                                          </div>
                                      </div>
                                  </div>
                                  <ul role="listbox" class="wm-list wm-list-1" id="swap_list_ul">
                                      <li role="option" id="All Pairs" title="All Pairs" class="wm-option-item">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">All Pairs</div>
                                          </div>
                                      </li>
                                      <li role="option" id="USDT" title="USDT" class="wm-option-item">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">USDT</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="WOO" title="WOO" class="wm-option-item">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">WOO</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="wm" title="wm" class="wm-option-item wm-option-item-1">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">wm</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="WOO" title="WOO" class="wm-option-item">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">WOO</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="wm" title="wm" class="wm-option-item wm-option-item-1">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">wm</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="WOO" title="WOO" class="wm-option-item">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">WOO</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="wm" title="wm" class="wm-option-item wm-option-item-1">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">wm</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="WOO" title="WOO" class="wm-option-item">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">WOO</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li role="option" id="wm" title="wm" class="wm-option-item wm-option-item-1">
                                          <div class="wm-option">
                                              <div class="sp-li-record-main">
                                                  <div class="sp-li-record-outer">
                                                      <div class="sp-li-record-div">
                                                          <img class="swap-pair-img-1"
                                                              src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <div class="wm-value-show-txt">wm</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>

                          <div class="pagination-div">
                              <button type="button" class="mirror pagination-back" aria-label="Previous page"
                                  disabled="">
                                  <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.934 12l3.89 3.89-1.769 1.767L8.398 12l1.768-1.768 3.89-3.889 1.767 1.768-3.889 3.89z"
                                          fill="currentColor"></path>
                                  </svg>
                              </button>
                              <button type="button" aria-label="Page number 1" class="pagination-active"
                                  disabled="">1</button>
                              <button type="button" aria-label="Page number 2" class="pagination-all">2</button>
                              <button type="button" aria-label="Page number 3" class="pagination-all">3</button>
                              <button type="button" aria-label="Page number 4" class="pagination-all">4</button>
                              <button type="button" aria-label="Page number 5" class="pagination-all">5</button>
                              <button type="button" class="mirror pagination-next" aria-label="Next page">
                                  <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z"
                                          fill="currentColor"></path>
                                  </svg>
                              </button>
                          </div>
                      </div>
                      <div class="swap-tbl">
                          <div class="rc-table rc-table-has-fix-left">
                              <div class="rc-table-container">
                                  <div class="row">
                                      <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="rc-table-content">
                                              <table style="table-layout: auto;">
                                                  <colgroup>
                                                      <col style="width: 100px;">
                                                      <col style="width: 100px;">
                                                  </colgroup>
                                                  <thead class="rc-table-thead">
                                                      <tr>
                                                          <th class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">Pair</th>
                                                          <th class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">Rate</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody class="rc-table-tbody">
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>



                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="rc-table-content">
                                              <table style="table-layout: auto;">
                                                  <colgroup>
                                                      <col style="width: 100px;">
                                                      <col style="width: 100px;">
                                                  </colgroup>
                                                  <thead class="rc-table-thead">
                                                      <tr>
                                                          <th class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">Pair</th>
                                                          <th class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">Rate</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody class="rc-table-tbody">
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>
                                                      <tr class="rc-table-row rc-table-row-level-0">
                                                          <td class="rc-table-cell rc-table-cell-fix-left"
                                                              style="position: sticky; left: 0px;">
                                                              <div class="sp-li-record-outer">
                                                                  <div class="sp-li-record-main">
                                                                      <div class="sp-li-record-div">
                                                                          <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}"
                                                                              class="swap-pair-img-1">
                                                                          <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}"
                                                                              class="swap-pair-img-2">
                                                                      </div>
                                                                  </div>
                                                                  <div class="swap-tbl-coin-name">BSW/wm</div>
                                                              </div>
                                                          </td>
                                                          <td class="rc-table-cell rc-table-cell-fix-left rc-table-cell-fix-left-last"
                                                              style="position: sticky; left: 0px;">50%</td>
                                                      </tr>



                                                  </tbody>
                                              </table>
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








      @include('template.country_language')
      @include('template.web_footer')

      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <script>
      $(document).ready(function() {
          $('#swap_list').click(function() {
              if ($('.wm-dropdown').hasClass('wm-dropdown-show')) {
                  $('.wm-dropdown').removeClass('wm-dropdown-show');
              } else {
                  $('.wm-dropdown').addClass('wm-dropdown-show');
              }
              $('.wm-dropdown').toggle();
          });
      });

      $("#swap_list-search").on("keyup", function() {
          var value = this.value.toLowerCase().trim();
          $("#swap_list_ul li").show().filter(function() {
              return $(this).text().toLowerCase().trim().indexOf(value) == -1;
          }).hide();
      });


      $('#swap_list_ul li').click(function(event) {
          $(this).each(function(i) {
              // var data = $("<div class='sp-li-record-div'>")
              //   .append($(this).clone())
              // $('#swap_list_select_value').html(data);


          });
      });


      $(document).ready(function() {

          $('.custom-modal-close-icon').click(function() {
              $('.custom-modal-div').hide();
          });
          $('.lf-filter-view-all').click(function() {
              $('.custom-modal-div').show();
          });
      });
      </script>

      <script>
      $(document).ready(function() {
          $(".closable-tooltip-icon-1").click(function() {
              $(".swap-framing-swap-tooltip").hide();
              $(".claim-reward-btn-tooltip").show();
              $(".login-to-swap-tooltip").hide();
          });
          $(".closable-tooltip-icon-2").click(function() {
              $(".swap-framing-swap-tooltip").hide();
              $(".claim-reward-btn-tooltip").hide();
              $(".login-to-swap-tooltip").show();
          });
          $(".closable-tooltip-icon-3").click(function() {
              $(".swap-framing-swap-tooltip").hide();
              $(".claim-reward-btn-tooltip").hide();
              $(".login-to-swap-tooltip").hide();
          });
      });
      $('.closable-tooltip-icon-1').click(function(event) {
          event.preventDefault();
      });
      </script>





  </body>

  </html>