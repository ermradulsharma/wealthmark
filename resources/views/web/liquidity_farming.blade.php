  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')


      <style>


      .centerBTC {
          display: flex;
          justify-content: flex-start;
          align-items: center;
      }

      .arrow_lfRt {
          width: 30px;
          color: #fcb918;
      }


      .Text-mainDiv {
          display: flex;
          justify-content: center;
          align-items: flex-start;
      }



      /* Intial Price Css Start */


      .InitialFirstDiv {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          display: flex;
          gap: 16px;
          padding-top: 16px;
          align-items: flex-end;
      }

      .InitialSecondDiv {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          flex: 1 1 0%;
      }

      .InitialThirdDiv {
          box-sizing: border-box;
          margin: 0;
          min-width: 0;
          margin: 0;
          padding: 0;
          position: relative;
      }

      .InitialFourthDiv {
          box-sizing: border-box;
          margin: 24px 0px 0px;
          min-width: 0px;
          display: inline-flex;
          position: relative;
          -webkit-box-align: center;
          align-items: center;
          line-height: 1.6;
          border: 1px solid rgb(234, 236, 239);
          border-radius: 4px;
          width: 100%;
          height: auto;
      }

      .InitialFourthDiv input {
          padding-left: 16px;
          padding-right: 16px;
          font-size: 16px;
      }

      .FourthDivInput {
          box-sizing: border-box;
          margin: 0px -20px 0px -4px;
          min-width: 0px;
          width: 100%;
          height: 100%;
          padding: 0px;
          outline: none;
          border: none;
          background-color: inherit;
          opacity: 1;
          min-height: 38px;
          font-size: 14px;
          border-radius: inherit;
          color: rgb(30, 35, 41);
      }


      button,
      input {
          overflow: visible;
      }

      .InitialFourthDiv .input-suffix {
          flex-shrink: 0;
          margin-left: 4px;
          margin-right: 4px;
          font-size: 14px;
      }

      .FourthDivFistDiv {
          box-sizing: border-box;
          margin: 0;
          min-width: 0;
      }

      .FourthDivIntialPrice {
          box-sizing: border-box;
          margin: 0;
          min-width: 0;
          position: absolute;
          top: -24px;
          left: 0px;
          line-height: 24px;
          -webkit-transition-property: top, font-size;
          transition-property: top, font-size;
          -webkit-transition-duration: .3s;
          transition-duration: .3s;
          -webkit-transition-timing-function: ease;
          transition-timing-function: ease;
          z-index: 1;
          cursor: text;
          color: #474D57;
          font-size: 14px;
      }

      .IntialPriceSecondSec {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          display: flex;
          -webkit-box-align: center;
          align-items: center;
          height: 40px;
      }

      .Intial2ndSecFirst {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          font-size: 16px;
          line-height: 24px;
          white-space: nowrap;
          font-weight: 400;
      }

      .FourthDiv3rdDiv {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          display: flex;
          justify-content: flex-start;
          -webkit-box-align: center;
          align-items: flex-start;
          padding-right: 0px;
          font-weight: 500;
          font-size: 14px;
          height: 100%;
      }



      .FourthDivBTC {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          padding-left: 4px;
          font-weight: 400;
          display: inline;
      }

      .EndDiv {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          display: flex;
          cursor: pointer;
          height: 40px;
          -webkit-box-align: center;
          align-items: center;
      }

      .EndDiv2nd {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          color: rgb(201, 148, 0);
          font-size: 20px;
          fill: rgb(201, 148, 0);
          width: 1em;
          height: 1em;
      }

      .IntialPBTCIcon {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          max-width: 100%;
          z-index: 0;
          background-color: rgb(255, 255, 255);
          border-radius: 50%;
          width: 22px;
          height: 22px;
      }

      .FourthDiv2rdDiv {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          display: flex;
          padding-left: 8px;
          padding-right: 8px;
          height: 40px;
      }


      .FourthDiv5rdDiv {
          box-sizing: border-box;
          margin: 0px;
          min-width: 0px;
          color: rgb(30, 35, 41);
          -webkit-box-align: center;
          align-items: center;
          display: inline-flex;
      }

      .FourthDivFistDiv {
          box-sizing: border-box;
          margin: 0;
          min-width: 0;
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-align-items: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
      }




      @media (max-width: 568px) {

          input,
          input::placeholder {
              font-size: 12px;

          }


      }

      @media (min-width: 568px) and (max-width: 768px) {

          input,
          input::placeholder {
              font-size: 14px;
          }


      }

      @media (max-width: 1278px) {
          .btn_Close_Media .button_media_close {

              display: none;
          }

      }

      @media (min-width: 568px) and (max-width: 766px) {
          .Impermanent_media {
              width: 100%;
              display: flex;
              flex-direction: column;
          }

      }

      @media (min-width: 568px) and (max-width: 766px) {
          .Summary_media {
              width: 100%;
              display: flex;
              flex-direction: column;
          }

      }

      @media (min-width: 768px) and (max-width: 1278px) {
          .Impermanent_media {
              width: 70%;
              display: flex;
              margin: auto;
              flex-direction: column;
          }

      }

      @media (min-width: 768px) and (max-width: 1278px) {
          .Summary_media {
              width: 70%;
              display: flex;
              margin: auto;
              flex-direction: column;
          }

      }



      .emi-calculator_div_open .wm-custom-modal-diolog {
          max-width: 850px !important;
          width: 100% !important;
      }

      /* Intial Price Css End */
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




      <div class="Liquid_Swap_bg-overlay">
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
                          <div class="  active-tab lp-link-top-active">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Liquidity</div>
                              </div>
                          </div>
                      </a>
                      <a href="{{ url( app()->getLocale(), 'swap-farming') }}" class="lp-link-top">
                          <div class=" lp-link-top-block ">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Swap</div>
                                  <div class="lp-reward">
                                      <div class="lp-reward-txt">Rewards</div>
                                  </div>
                              </div>
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




      <section style="background:#F5F5F5">
          <div class="container">
              <div class="row">
                  <div class="outer-max-729px">
                      <div class="rwrd-div-outer">
                          <div class="rwrd-div-inner">
                              <div class="rwrd-div">
                                  <div class="rwrd-title">Introducing the Newest Liquidity Pool</div>

                              </div>
                              <div class="rwrd-subtitle"> IOTX/USDT</div>
                          </div>
                          <button type="button" class=" claim-reward">Add Liquidity Now</button>
                      </div>
                  </div>
                  <div class="coin-swap">

                      <div class="coin-swap-left">
                          <div class="coin-swap-left-div1">
                              <h3 class="title p-0 mb-0">Liquid Swap</h3>
                              <div class="d-flex align-items-center">
                                  <div class="lf-change-optn"  data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Slippage Setting" viewBox="0 0 16 16">
                                      <i class="bi bi-gear lf-change-optn-icon"></i>
                                  </div>
                                  <div class="lf-change-optn" data-bs-toggle="tooltip" data-bs-placement="top" title=""  data-bs-original-title="Refresh Pool Data">
                                       <!--<i class="bi bi-arrow-clockwise lf-change-optn-icon"></i>-->
                                       <i class="bi bi-arrow-counterclockwise lf-change-optn-icon"></i>
                                   </div>
                                <div class="lf-change-optn" data-bs-toggle="tooltip" data-bs-placement="right" title=""  data-bs-original-title="You can become a liquidity provider for this pair by adding assets in the liquid asset pool. As a liquidity provider you can enjoy the transaction fee income of users in the pool. You can remove your portion at any time. If you add one asset, a transaction fee will be charged.">
                                      <i class="bi bi-info-circle lf-change-optn-icon"></i>
                                </div>
                              </div>
                          </div>


                        <div class="dashboard-tabpills">

                                            <div class="dashboard-card-body">
                                                <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Add</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Remove</button>
                                                    </li>
                                               </ul>

                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">




                                                  <div class="coin-select-main-div">
                                                 <!------------------------first dropwoen---------------------------->
                                                <div class="lf-select_coin-to bg-light-blue  rounded" id="earn-search-coin-filter">
                                                      <div class=" coin-swap-from m-0">
                                                        <input type="text" value="16" class="lf-select-coin-to-input">
                                                        <div class="wm-input-suffix ">
                                                          <div class="lf-select-coin-to-drpd">
                                                            <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                                                              <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                                                            </svg>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                                                        <div class="wm-dropdown-optn-item-div">
                                                          <img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img id="select_coin_img" class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                                          <div id="select_coin_text" class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                        </div>
                                                      </div>
                                                      <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
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
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                 <img class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">

                                                                <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                <img class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                                                <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                <img class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                                                <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner selected">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                <img class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                                                <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                 <img class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                                                <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="13" title="13" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                 <img class="wm-dropdown-optn-item-img-2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                                                <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                </div>
                                                <!------------------------first dropwoen---------------------------->
















                                      <div class="lf-add-coin-div">
                                          <div class="lf-add-coin-div-active">
                                              <div class="wm-pool-radio-btn-custom"><input type="radio" class="radio" name="add-liquidity-item">&nbsp; </div><span class="ps-2">Add WOO  + USDT</span>
                                              <div class="lf-add-coin-lbl-title-tool wm-liquidity-fee">0 Fee</div>
                                          </div>
                                          <div class="lf-add-coin-div-active">
                                              <div class="wm-pool-radio-btn-custom"><input type="radio" class="radio"
                                                      name="add-liquidity-item">&nbsp; </div><span class="ps-2"  data-bs-toggle="tooltip" data-bs-placement="right" title=""   data-bs-original-title="One coin staking will swap part of the portion value into another coin, then adding 2 coins. Swap transaction and slippage fees will affect your portion yield.">Add
                                                  BTC</span>
                                          </div>
                                          <div class="lf-add-coin-div-active">
                                              <div class="wm-pool-radio-btn-custom"><input type="radio" class="radio"
                                                      name="add-liquidity-item">&nbsp; </div><span class="ps-2"   data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="One coin staking will swap part of the portion value into another coin, then adding 2 coins. Swap transaction and slippage fees will affect your portion yield.">Add
                                                  BUSD</span>
                                          </div>
                                      </div>

                                      <div class="coin-select">
                                          <div class=" coin-swap-from">

                                          <div class="input-group">
                                          <input type="text" class="form-control coin-swap-from-txtbox" aria-describedby="basic-addon2"
                                              placeholder="9.99900001-2499.75" class="search-box coin-swap-from-input">
                                          <span class="input-group-text" id="basic-addon2">MAX</span>
                                      </div>
                                              <div class="lf-suffix">
                                                  <div class="coin-swap-from-status">
                                                      <div class="coin-swap-from-status-mid">
                                                          <!--<div class=" coin-swap-from-status-last">-->
                                                          <!--    <input type="input" value="USDT"-->
                                                          <!--        class="wm-lf-input coin-select-drpdn-inner-1-input">-->
                                                          <!--    <div class="lf-suffix">-->
                                                          <!--        <div class="coin-select-drpdn-icn">-->

                                                          <!--            <i class="bi bi-caret-down-fill coin-select-drpdn-icn-1"></i>-->
                                                          <!--        </div>-->
                                                          <!--    </div>-->
                                                          <!--</div>-->
                                                          <!--<div class="wm-lf-value coin-drpdn-active">-->
                                                          <!--    <div class="coin-drpdn-active-inner">-->
                                                          <!--        <img id="fromCoinImg"-->
                                                          <!--            src="{{ asset('img/2b5c7d80-7bcd-4cfb-8bd9-d1760a752afc.png') }}"-->
                                                          <!--            class="coin-drpdn-active-img">-->
                                                          <!--        <div id="fromCoinText" class="coin-drpdn-active-lbl">-->
                                                          <!--            USDT-->
                                                          <!--        </div>-->
                                                          <!--    </div>-->
                                                          <!--</div>-->
                                                          <!-----------------------------add this class showing css-fxluzf--------------->
                                                          <!--<div class="wm-dropdown-div  wm-dropdown-div-open">-->
                                                          <!--    <ul role="listbox"-->
                                                          <!--        class="wm-dropdown-list wm-dropdown-list-css">-->
                                                          <!--        <li role="option" id="BTC" title="BTC"-->
                                                          <!--            class="wm-dropdown-optn-item"-->
                                                          <!--            onClick="changeSrc(this.id)">-->
                                                          <!--            <div class="wm-dropdown-optn-item-inner">-->

                                                          <!--                <div class="wm-dropdown-optn-item-div">-->
                                                          <!--                    <img class="wm-dropdown-optn-item-img"-->
                                                          <!--                        src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">-->
                                                          <!--                    <div class="wm-dropdown-optn-item-txt">BTC-->
                                                          <!--                    </div>-->
                                                          <!--                </div>-->

                                                          <!--            </div>-->
                                                          <!--        </li>-->
                                                          <!--        <li role="option" id="BUSD" title="BUSD"-->
                                                          <!--            class="wm-dropdown-optn-item"-->
                                                          <!--            onClick="changeSrc(this.id)">-->
                                                          <!--            <div class="wm-dropdown-optn-item-inner">-->

                                                          <!--                <div class="wm-dropdown-optn-item-div">-->
                                                          <!--                    <img class="wm-dropdown-optn-item-img"-->
                                                          <!--                        src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">-->
                                                          <!--                    <div class="wm-dropdown-optn-item-txt">-->
                                                          <!--                        BUSD</div>-->

                                                          <!--                </div>-->
                                                          <!--            </div>-->
                                                          <!--        </li>-->
                                                          <!--    </ul>-->
                                                          <!--</div>-->
                                                    <div class=" coin-swap-from m-0 p-0 border-0">
                                                        <input type="text" value="16" class="lf-select-coin-to-input">
                                                        <div class="wm-input-suffix ">
                                                          <div class="lf-select-coin-to-drpd">
                                                            <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                                                              <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                                                            </svg>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                                                        <div class="wm-dropdown-optn-item-div">
                                                          <img  class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">

                                                          <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                        </div>
                                                      </div>
                                                      <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
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
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">


                                                                <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">

                                                                <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">

                                                                <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner selected">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">

                                                                <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">

                                                                <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li role="option" id="13" title="13" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                            <div class="wm-dropdown-optn-item-inner">
                                                              <div class="wm-dropdown-optn-item-div">
                                                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">

                                                                <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>


                                                      </div>
                                                  </div>
                                              </div>

                                              <!----------------===============================---------------->
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
                                      <div class="lf-lbl-txt">The ultimate price and output is determined by the amount
                                          of
                                          tokens in the pool at the time of your swap.</div>
                                      <div class="mt-4">
                                          <div class="smmry-txt">Amount Limit</div>
                                          <div class="d-flex align-items-center justify-content-between mt-2">
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <div class="lf-lbl-status me-3">Minimum:</div>
                                                  <div class="max-min-value">74.46016382 WOO</div>
                                              </div>
                                              <div class="d-flex align-items-center justify-content-between">
                                                  <div class="lf-lbl-status me-3">Maximum:</div>
                                                  <div class="max-min-value">18615 WOO</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">

                                                    <div class="d-flex align-items-center">
                                                        <h1>no data</h1>
                                                    </div>

                                                    </div>

                                                </div>
                                            </div>

                        </div>











                      </div>

                      <div class="coin-swap-right">
                          <div class="">
                              <div class="smmry-div">
                                  <div class="smmry-txt">Summary</div>

                              </div>
                              <div class="lf-status">
                                  <div class="lf-price-div">

                                      <div class="lf-price-lbl">Current pool size</div>

                                      <span class="lf-currnt-status">
                                          <div class="lf-status">
                                              <div class="">
                                                  <div class="d-flex flex-column">
                                                      <div class=""> 3,422,953 WOO </div>
                                                      <div>+</div>
                                                      <div class=""> 459,946 USDT </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </span>
                                  </div>
                                  <div class="lf-price-div">

                                      <div class="lf-price-lbl">Total yield</div>

                                      <span class="lf-currnt-status">
                                          <div class="lf-currnt-status-green">0.00299645 wm</div>
                                      </span>
                                  </div>
                                  <div class="emi-cal-div" id="emi-calculator_modal">
                                      <i class="bi bi-calculator emi-cal-icon"></i>
                                      <div class="emi-cal-txt">Impermanent Loss Calculator</div>
                                  </div>
                              </div>
                          </div>

                          <div class="mt-3">
                              <div class="lf-login-con-div">
                                  <div class="lf-login-con-input-div">
                                      <input type="checkbox" id="agree_Liquid_Swap_Terms">
                                  </div>

                                  <span>I have read, understand, and agree to <a href="#" target="_blank"
                                          class="lf-filter-view-all d-block m-0">Wealthmark Liquid Swap Terms of
                                          Use.</a>
                                  </span>
                              </div>
                              <button type="button" class=" lf-btn-login">Log In to Add</button>
                          </div>

                      </div>

                  </div>
              </div>
          </div>
      </section>
      <section class="swap-farming-learn-more bg-light-blue">
          <div class="container">
              <div class="sec-title mb-2">
                  <h2 class="heading-h2">Learn More</h2>
              </div>

              <div class="row">
                  <div class="col-md-4 col-sm-4">
                      <div class="sf-block">
                          <a href="#" target="_blank">
                              <img src="{{ asset('img/sawp-academy-learn.svg') }}">
                              <h4 class="title mt-3">Academy</h4>
                              <div class="text">Learn how to add liquidity to become a liquidity provider and earn high
                                  yield farming rewards.</div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                      <div class="sf-block">
                          <a href="#" target="_blank">
                              <img src="{{ asset('img/sawp-low-fees.svg') }}">
                              <h4 class="title mt-3">Swap Fees</h4>

                              <div class="text">Low fees and high rewards. Swap to earn more wm.</div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                      <div class="sf-block">
                          <a href="#" target="_blank">
                              <img src="{{ asset('img/sawp-tutorial.svg') }}">
                              <h4 class="title mt-3">Tutorials</h4>
                              <div class="text">Watch the video tutorials to learn more about the product.</div>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')



      <!-- Modal -->
      <div class="modal fade liquidity-farming" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
          tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Risk warning</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="border p-2">
                          <div class="text">
                              Adding liquidity into a liquid pool and becoming a liquidity provider is not risk-free.
                              When the market price of tokens fluctuates greatly, the staking income may be lower than
                              the income of ordinary holding of the tokens, and losses may even occur. For more details
                              about the principle of Liquidity, please refer to
                              <span class="yellow-text"> Wealthmark Liquid Swap Terms of Use </span>.
                          </div>
                      </div>
                      <div class="agree-box">
                          <div class="agree-check-box">
                              <input type="checkbox" id="liquidity-farming-agree">
                          </div>
                          <div class="text">
                              I confirm that I have read, understand, and agree to the Terms of Use and Conditions.
                          </div>
                      </div>

                  </div>
                  <div class="modal-footer">

                      <button type="button" id="liquidity-farming-btn" class="btn btn-yellow inactive">Continue</button>
                  </div>
              </div>
          </div>
      </div>


      <div class="emi-calculator_div_open">
          <div class="hide">
              <div class="wm-custom-modal-diolog ">
                  <div class="wm-custom-modal-body">

                      <div class="container">

                          <div class="row fullmediawidth">
                              <div class="col-lg-6 py-3 shadow-sm Impermanent_media">
                                  <h4>Impermanent Loss Calculator</h4>
                                  <p class="mt-4" style="border:1px solid gray; width:100%;height:1px; "></p>

                                  <!-- alert error box start  -->
                                  <div class="mt-4 alert bg-light-blue alert-dismissible fade show" role="alert">
                                      <div class="centerBTC">
                                          <div>
                                              <h6> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                      fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16"
                                                      style="background:#fcb918;border-radius:50%;">
                                                      <path
                                                          d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z" />
                                                  </svg></h6>
                                          </div>
                                          <div>
                                              <h6 style="padding-left:5px;">BTC + BUSD</h6>
                                          </div>
                                      </div>

                                      <div class="text">
                                          The liquidity pool is composed of two token assets; the calculation is based
                                          on two tokens being added or redeemed as the normal process of liquidity.
                                          Please note single tokens added or redeemed will be swapped into two tokens
                                          automatically.
                                      </div>
                                      <button type="button" class="btn-close" data-bs-dismiss="alert"
                                          aria-label="Close"></button>
                                  </div>
                                  <!-- alert error box End -->
                                  <!----------------===========Form Start====================---------------->
                                  <div class="lf-select_coin-to">
                                      <div class=" coin-swap-from">
                                          <input type="text" value="16" class="lf-select-coin-to-input">
                                          <div class="wm-input-suffix ">
                                              <div class="lf-select-coin-to-drpd">
                                                  <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                                                      <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z"
                                                          fill="currentColor"></path>
                                                  </svg>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">

                                          <div class="wm-dropdown-optn-item-div">
                                              <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                  src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                              <img id="select_coin_img-2" class="wm-dropdown-optn-item-img-2"
                                                  src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                              <div id="select_coin_text" class="wm-dropdown-optn-item-txt">BTC/BUSD
                                              </div>
                                          </div>
                                      </div>

                                      <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
                                          <div class="p-3">
                                              <div class=" wm-dropdown-srch-div">
                                                  <div class="wm-input-prefix ">
                                                      <svg viewBox="0 0 24 24" fill="none"
                                                          class=" wm-dropdown-search-icn">
                                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                                              fill="currentColor"></path>
                                                      </svg>
                                                  </div>
                                                  <input type="text" class="wm-dropdown-search-input" value="">
                                                  <div class="wm-input-suffix ">
                                                      <svg viewBox="0 0 24 24" fill="none"
                                                          class=" wm-dropdown-search-cross-icn">
                                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z"
                                                              fill="currentColor"></path>
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                          <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                                              <li role="option" id="16" title="16" class="wm-dropdown-optn-item "
                                                  onclick="changeSrc2(this.id)">
                                                  <div class="wm-dropdown-optn-item-inner">

                                                      <div class="wm-dropdown-optn-item-div">
                                                          <img class="wm-dropdown-optn-item-img"
                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img class="wm-dropdown-optn-item-img-2"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                          <div class="wm-dropdown-optn-item-txt">BTC/BUSD</div>

                                                      </div>
                                                  </div>
                                              </li>
                                              <li role="option" id="17" title="17" class="wm-dropdown-optn-item "
                                                  onclick="changeSrc2(this.id)">
                                                  <div class="wm-dropdown-optn-item-inner">


                                                      <div class="wm-dropdown-optn-item-div">
                                                          <img class="wm-dropdown-optn-item-img"
                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img class="wm-dropdown-optn-item-img-2"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                          <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                                                      </div>


                                                  </div>
                                              </li>
                                              <li role="option" id="14" title="14" class="wm-dropdown-optn-item "
                                                  onclick="changeSrc2(this.id)">
                                                  <div class="wm-dropdown-optn-item-inner">


                                                      <div class="wm-dropdown-optn-item-div">
                                                          <img class="wm-dropdown-optn-item-img"
                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img class="wm-dropdown-optn-item-img-2"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                          <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>


                                                      </div>
                                                  </div>
                                              </li>
                                              <li role="option" id="32" title="32" class="wm-dropdown-optn-item "
                                                  onclick="changeSrc2(this.id)">
                                                  <div class="wm-dropdown-optn-item-inner">


                                                      <div class="wm-dropdown-optn-item-div">
                                                          <img class="wm-dropdown-optn-item-img"
                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img class="wm-dropdown-optn-item-img-2"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                          <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                      </div>


                                                  </div>
                                              </li>
                                              <li role="option" id="34" title="34" class="wm-dropdown-optn-item "
                                                  onclick="changeSrc2(this.id)">
                                                  <div class="wm-dropdown-optn-item-inner">


                                                      <div class="wm-dropdown-optn-item-div">
                                                          <img class="wm-dropdown-optn-item-img"
                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img class="wm-dropdown-optn-item-img-2"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                          <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                                      </div>


                                                  </div>
                                              </li>
                                              <li role="option" id="13" title="13" class="wm-dropdown-optn-item "
                                                  onclick="changeSrc2(this.id)">
                                                  <div class="wm-dropdown-optn-item-inner">
                                                      <div class="wm-dropdown-optn-item-div">
                                                          <img class="wm-dropdown-optn-item-img"
                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                          <img class="wm-dropdown-optn-item-img-2"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                          <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                                      </div>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class=" coin-swap-from">
                                      <input type="input" value="" placeholder="Please Enter  BTC Amount"
                                          class="search-box coin-swap-from-input">
                                      <div class="lf-suffix">
                                          <div class="coin-swap-from-status">
                                              <div class="wm-lf-value coin-drpdn-active">
                                                  <div class="coin-drpdn-active-inner"
                                                      style="margin-left:auto;padding-right:5px;">
                                                      <img class="wm-dropdown-optn-item-img"
                                                          src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                      <div id="fromCoinText" class="coin-drpdn-active-lbl">BTC</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class=" coin-swap-from">
                                      <input type="input" value="" placeholder="Please Enter BUSD  Amount"
                                          class="search-box coin-swap-from-input">
                                      <div class="lf-suffix">
                                          <div class="coin-swap-from-status">
                                              <div class="wm-lf-value coin-drpdn-active">
                                                  <div class="coin-drpdn-active-inner"
                                                      style="margin-left:auto;padding-right:5px;">
                                                      <img class="wm-dropdown-optn-item-img-2"
                                                          src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                      <div id="fromCoinText" class="coin-drpdn-active-lbl">BUSD</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <!-- Gap Two Section Icon Start -->


                                  <div class="InitialFirstDiv">
                                      <div class="InitialSecondDiv">
                                          <div class="InitialThirdDiv">
                                              <div class="InitialFourthDiv">
                                                  <input data-bn-type="input" aria-label="Initial Price"
                                                      placeholder="0.000501005" class="search-box FourthDivInput">
                                                  <div class="input-suffix FourthDivFistDiv">
                                                      <div class="FourthDiv2ndsDiv">
                                                          <div class="FourthDiv2rdDiv">
                                                              <div class="coinlogo FourthDiv3rdDiv">
                                                                  <div class="mt-2"
                                                                      style="display:flex;justify-content:space-around; align-items:center;">
                                                                      <div class="FourthDiv5rdDiv"><img
                                                                              class="IntialPBTCIcon"
                                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                      </div>
                                                                      <div data-bn-type="text" class="FourthDivBTC">BTC
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <label class="bn-input-label FourthDivIntialPrice">Initial
                                                      Price</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="IntialPriceSecondSec">
                                          <div data-bn-type="text" class="Intial2ndSecFirst">≈ 1</div>
                                          <div class="FourthDiv2rdDiv">
                                              <div class="coinlogo FourthDiv3rdDiv">
                                                  <div class="mt-2"
                                                      style="display:flex;justify-content:space-around; align-items:center;">
                                                      <div class="FourthDiv5rdDiv"><img class="IntialPBTCIcon"
                                                              src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                      </div>
                                                      <div data-bn-type="text" class="FourthDivBTC">BUSD</div>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class="EndDiv">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                              class="EndDiv2nd">
                                              <path d="M21 7.5v3H2.5l7-7v4H21zM3 16.5v-3h18.5l-7 7v-4H3z"
                                                  fill="currentColor"></path>
                                          </svg>
                                      </div>
                                  </div>


                                  <div class="InitialFirstDiv">
                                      <div class="InitialSecondDiv">
                                          <div class="InitialThirdDiv">
                                              <div class="InitialFourthDiv">
                                                  <input data-bn-type="input" aria-label="Initial Price"
                                                      placeholder="Please enter amount"
                                                      class="search-box FourthDivInput">
                                                  <div class="input-suffix FourthDivFistDiv">
                                                      <div class="FourthDiv2ndsDiv">
                                                          <div class="FourthDiv2rdDiv">
                                                              <div class="coinlogo FourthDiv3rdDiv">
                                                                  <div class="mt-2"
                                                                      style="display:flex;justify-content:flex-start; align-items:flex-start;">
                                                                      <div class="FourthDiv5rdDiv"><img
                                                                              class="IntialPBTCIcon"
                                                                              src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                                      </div>
                                                                      <div data-bn-type="text" class="FourthDivBTC">BTC
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <label class="bn-input-label FourthDivIntialPrice">Expected Price at
                                                      Redemption</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="IntialPriceSecondSec">
                                          <div data-bn-type="text" class="Intial2ndSecFirst">≈ 1</div>
                                          <div class="FourthDiv2rdDiv">
                                              <div class="coinlogo FourthDiv3rdDiv">
                                                  <div class="mt-2"
                                                      style="display:flex;justify-content:space-around; align-items:center;">
                                                      <div class="FourthDiv5rdDiv">
                                                          <img class="IntialPBTCIcon"  src="{{ asset('img/assets/img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}">
                                                      </div>
                                                      <div data-bn-type="text" class="FourthDivBTC">BUSD</div>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                      <div class="EndDiv">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                              class="EndDiv2nd">
                                              <path d="M21 7.5v3H2.5l7-7v4H21zM3 16.5v-3h18.5l-7 7v-4H3z"
                                                  fill="currentColor" style="display:none;"></path>
                                          </svg>

                                      </div>
                                  </div>


                                  <!-- Gap Two Section Icon End -->

                                  <!----------------===========Form End====================---------------->

                              </div>
                              <div class="col-lg-6 bg-light-blue">
                                  <div class="p-3 Summary_media">
                                      <h4>Sum mary</h4>

                                      <div class="text mt-5">Impermanent Loss</div>
                                      <div style="font-weight:bold;font-size:20px;">- -</div>
                                      <div class="text mt-2">Expected Redeemable Amount</div>
                                      <div style="font-weight:bold;font-size:20px;">- -</div>

                                      <div class="Text-mainDiv mt-2">
                                          <div class="cins">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                  fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16"
                                                  style=" border:1px solid; border-radius:50%;">
                                                  <path
                                                      d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z">
                                                  </path>
                                              </svg>
                                          </div>
                                          <div class="text" style="padding-left:5px;">
                                              This calculation shows an estimated impermanent loss. This is provided as
                                              a reference only and it does not represent actual impermanent loss you can
                                              incur. Please refer to our FAQs to learn more about impermanent loss.
                                          </div>
                                      </div>

                                      <div class="FixedBtn btn_Close_Media">
                                          <button type="button" class="lf-btn-login button_media_close"
                                              id="wm-custom-modal-close"
                                              style="margin-bottom:0px;margin-top:65%;">Close</button>
                                      </div>

                                  </div>
                              </div>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>


<script>

       $(document).ready(function() {
          $("#staticBackdrop").modal('show');
      });


          $('#liquidity-farming-agree').change(function() {
          if ($(this).is(":checked")) {
              $('#liquidity-farming-btn').removeClass('inactive');
          } else {
              $('#liquidity-farming-btn').addClass('inactive');
          }
      });


</script>

















      <script>
    //   $("#emi-calculator_modal").click(function() {
    //       $('.emi-calculator_div_open').children(".hide").addClass("custom-modal-bck-bg").removeClass("hide");

    //   });

    //   $(".wm-custom-modal-close").click(function() {
    //       $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

    //   });
      </script>
      <script>


    //   $('#liquidity-farming-agree').change(function() {
    //       if ($(this).is(":checked")) {
    //           $('#liquidity-farming-btn').removeClass('inactive');
    //       } else {
    //           $('#liquidity-farming-btn').addClass('inactive');
    //       }
    //   });
      </script>
      <script>

    //   $('.coin-swap-from').click(function() {
    //       $(this).siblings(".wm-dropdown-div").toggle();
    //   });
      </script>

      <script>
    //   function changeSrc(id) {
    //       const li = id;
    //       const listImg = $(".wm-dropdown-optn-item-img");
    //       $(".coin-drpdn-active-inner #fromCoinImg").attr('src', $("#" + li + ' ' + ".wm-dropdown-optn-item-img").attr(
    //           'src'));
    //       $(".coin-drpdn-active-inner #fromCoinText").html($("#" + li + ' ' + ".wm-dropdown-optn-item-txt").html());
    //       $(".wm-dropdown-div").hide();
    //   }

    //   function changeSrc2(id) {
    //       const li = id;

    //       $(".lf-select-coin-to-active-value #select_coin_img").attr('src', $("#" + li + ' ' +
    //           ".wm-dropdown-optn-item-img").attr('src'));
    //       $(".lf-select-coin-to-active-value #select_coin_img-2").attr('src', $("#" + li + ' ' +
    //           ".wm-dropdown-optn-item-img-2").attr('src'));
    //       $(".lf-select-coin-to-active-value #select_coin_text").html($("#" + li + ' ' + ".wm-dropdown-optn-item-txt")
    //           .html());
    //       $(".wm-dropdown-div").hide();
    //   }
      </script>

      <script>
      $(document).ready(function() {
          $("#liquidity-farming-agree").click(function() {
              $("#liquidity-farming-btn").attr("data-bs-dismiss", "modal");
          });
      });
      </script>
  </body>

  </html>
