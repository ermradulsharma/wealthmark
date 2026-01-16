<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel='stylesheet' href="{{ asset('css/deepak_custom.css') }}">
    <link rel='stylesheet' href="{{ asset('css/p2p_trading.css') }}">
    
 
</head>
<style>
    #load_buy_p2p_trading{
        display:none;
    }
</style>
<body>
    @include('template.web_menu')
    
    <!-------------baner section------------------------->
<section class="p2p-trading-box" id="p2p-trading-section">
        <div class="container">
            <div class="row">
                <div class="overview-inner-box text-center">
                    <h3 class="digital-asset-heading text-white">Buy and Sell ETH with Your Preferred Payment Methods
                    </h3>
                    <p class="text-center text-white fw-bold"> Buy and sell BMK safely and easily on Wealth Mark
                        P2P. Find the best offer below and buy and sell BMK with Your Preferred Payment Methods today.
                    </p>
                </div>
            </div>
        </div>
    </section>

 <!-------------baner section------------------------->
 @include('web.p2pTrading_template.tabSection')
 
 <div id="load_page_here">
    <section class="p2p-trading-table-box pt-3 pb-3" id="p2p-trading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="tab-content" id="trading-myTabContent">
                        <div class="tab-pane {{ (Request::segment(3) == 'eth') ? 'show active':'fade'}}" id="p2p-trading-ETH" role="tabpanel"
                            aria-labelledby="p2p-trading-ETH-tab">   
                            <div id="table_data1">   
                            @include('web.p2p_trading_ajax_eth')                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</div>
<div id="load_buy_p2p_trading">
   
    <section class="p2p-trading-table-box pt-3 pb-3" id="p2p-trading_buy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div id="table_data_buy">
                        <div id="loading_buy" style="display:none;">
                                <img src="https://thumbs.gfycat.com/DangerousWavyFinwhale-max-1mb.gif" alt="Loading...">
                        </div>
                     <h3>BUY COINS</h3>
                      @include('web.p2p_trading_ajax_eth_buy')
                    </div>
                </div>
            </div>

        </div>
    </section> 
</div>


<!--==================================div section =======================================-->
    @include('web.p2pTrading_template.static_section')
    @include('web.p2pTrading_template.faq')
<!--==================================div section =======================================-->



<!--====================================modal section=============================================================-->
<div class="trading-express-modal">
   <div class="hide">
     <div class="wm-custom-modal-diolog max-width-550px">
       <div class="wm-custom-modal-body px-3">
         <div class="wm-custom-modal-header m-0">
           <span>P2P Trading - Sell USDT with Your Preferred Payment Methods</span>
           <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
           </svg>
         </div>
         <div class="container-fluid p-0 m-0">
           <div class="row">
             <div class="dashboard-tabpills mb-4">
               <div class="dashboard-card-body">
                 <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                   <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Buy</button>
                   </li>
                   <li class="nav-item" role="presentation">
                     <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Sell</button>
                   </li>
                 </ul>
                 <div class="tab-content" id="pills-tabContent">
                   <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                     <div class="mt-3">
                       <div class="fs-14 fw-bolder mb-1">I want to pay</div>
                       <div class="lf-select_coin-to rounded mb-5">
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
                       <div class="fs-14 fw-bolder mb-1">I want to pay</div>
                       <div class="lf-select_coin-to rounded mb-5">
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
                       <div class="">
                         <p class="mb-3 fs-14 text-muted">
                           <span>Estimated price <i class="bi bi-info-circle-fill mx-2"></i>
                           </span>
                           <span> 1 USDT = 83.00 INR </span>
                         </p>
                         <a href="javascript:void(0)" class="btn-yellow border-0 w-100 d-block text-center">Buy with 0 Fee </a>
                       </div>
                     </div>
                   </div>
                   <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                     <div class="mt-3">
                       <div class="fs-14 fw-bolder mb-1">I want to pay</div>
                       <div class="lf-select_coin-to rounded mb-5">
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
                       <div class="fs-14 fw-bolder mb-1">I want to pay</div>
                       <div class="lf-select_coin-to rounded mb-5">
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
                       <div class="">
                         <p class="mb-3 fs-14 text-muted">
                           <span>Estimated price <i class="bi bi-info-circle-fill mx-2"></i>
                           </span>
                           <span> 1 USDT = 83.00 INR </span>
                         </p>
                         <a href="javascript:void(0)" class="btn-blue border-0 w-100 d-block text-center">Sell with 0 Fee </a>
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
 </div>
<div class="modal_open_id">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body">
                    <div class="wm-custom-modal-header">
                        <span>Trading Requirements</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close">
                            <path
                                d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <p>P2P Trading is not available in the following countries: United States, Cuba, Iran, North Korea,
                        and Syria.</p>

                    <div class="row mb-3 mt-3 mt-2">
                        <div class="col">Complete KYC Verification</div>
                        <div class="col d-flex justify-content-end"> <span
                                class="badge badge-warning enable-badge-link">Enable </span>
                        </div>
                    </div>
                    <hr />
                    <div class="row mb-3 mt-3">
                        <div class="col">Enable SMS authentication</div>
                        <div class="col d-flex justify-content-end text-warning align-items-center">
                            <svg viewBox="0 0 24 24" fill="none" class="finish-tick-icon">
                                <path
                                    d="M19.068 4.932A9.917 9.917 0 0012 2a9.917 9.917 0 00-7.068 2.932A9.917 9.917 0 002 11.988C2 17.521 6.479 22 12 22a9.917 9.917 0 007.068-2.932A9.992 9.992 0 0022 11.988a9.918 9.918 0 00-2.932-7.056zm-8.912 12.234L5.71 12.71l1.42-1.42 3.025 3.024 6.7-6.713 1.421 1.42-8.121 8.145z"
                                    fill="currentColor"></path>
                            </svg>
                            Finished
                        </div>
                    </div>
                    <hr />
                    <div class="row d-flex text-center mt-2 justify-content-center">
                        <a class="btn btn-yellow trading-refresh-btn">
                            <svg viewBox="0 0 24 24" fill="none" class="refresh-icon-trading">
                                <path
                                    d="M20.7 11.925c0 2.1-.8 4.1-2.3 5.6-1.6 1.5-3.6 2.3-5.6 2.3-2 0-4-.8-5.6-2.3l-1.3-1.3 1.4-1.4 1.3 1.3c2.3 2.3 6 2.3 8.3 0 1.1-1.1 1.7-2.6 1.7-4.2s-.6-3.1-1.7-4.2c-2.3-2.3-6-2.3-8.3 0l-1.1 1.2h3.3v2H4v-6.8h2v3.4l1.2-1.2c3.1-3.1 8.1-3.1 11.2 0 1.5 1.5 2.3 3.5 2.3 5.6z"
                                    fill="currentColor"></path>
                            </svg>
                            Refresh</a>
                    </div>
                    <div class="row mt-1">
                        <a class="btn btn-default requirement-btn">I have met the requirementes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="sell_coin_p2p_modal">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-700px">
            <div>
            <div class="wm-custom-modal-header m-0">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
           </div>
           </div>
           <div class="wm-custom-modal-body bg-light-blue py-2 px-3">
               
                <div class="bg-white p-2 mb-2" id="payment-method-content-left">
                     <div class="record-section">
                        <div>
                           Name  :
                        </div>
                        <div>
                           <span class="buyer_name"></span>
                        </div>
                     </div>
                     <div class="record-section">
                        <div>
                           Order Status  :
                        </div>
                        <div>
                           <span class="buyer_order_completion"></span>
                        </div>
                     </div>
                     <div class="record-section">
                        <div>
                          Price  :  
                        </div>
                        <div>
                           <span class="buyer_cr_value"></span>
                        </div>
                     </div>
                     <div class="record-section">
                        <div>
                          Payment Method  : 
                        </div>
                        <div>
                           <span class="buyer_payment_type"></span>
                        </div>
                     </div>
                     <div class="record-section">
                        <div>
                          Available  :
                        </div>
                        <div>
                           <span class=""></span>
                        </div>
                     </div>
                     <div class="mt-2 p-2 bg-light-blue fs-6 fw-bold text-black">
                      <span class="d-block"> *&nbsp;&nbsp;Order to be cancelled after 15 minutes</span>
                      <div class="bg-white pt-1 my-1"></div>
                      <span class="d-block">*&nbsp;&nbsp;Third party payment not accepted.</span>
                      <div class="bg-white pt-1 my-1"></div>
                      <span class="d-block">*&nbsp;&nbsp;Send payment screenshot.</span>
                     </div>
                  </div>
                <div class="bg-white p-2 mb-2">
                    <div  id="payment-method-content-right">
                    <div class="set-payment-method-right">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="position-relative">
                                        <label class="fs-14 mb-2 mt-1" for="exampleInputPassword1">I want to sell</label>
                                        <span class="want-sell-currency-lbl">
                                            <a href="javascript:void(0)" class="text-warning mx-2">All</a> 
                                            BNB
                                        </span>
                                        <input type="text" placeholder="0.00000000" class="form-control">
                                        <!--<small class="float-right d-flex justify-content-end">-->
                                        <!--        Balance: 0.00000000 &nbsp; BNB -->
                                        <!--    <a href="javascript:void(0);" class="text-warning">&nbsp;Transfer</a>-->
                                        <!--</small>-->
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="position-relative">
                                        <label class="fs-14 mb-2 mt-1" for="will-receive">I will receive</label>
                                        <span class="will-receive-currency-lbl">INR</span>
                                        <input type="text" placeholder="7,000.00 - 11,200.00" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            

                            

                            <div class="mb-3 mt-4 bg-light-blue p-2">
                                <!--<label for="will-receive">Payment Method</label>-->
                               <a href="javascript:void(0);" class="btn-yellow d-inline-block shadow-none"  data-target-modal="payMethod">
                                    Set My Payment  Method
                                </a>
                                                  
                            </div>

                            <div class="h-divider mt-1 mb-3"></div>
                            <div class="mb-4 d-flex">
                               <a class="btn-default refresh-price-btn d-inline-block w-50 mb-3">Refresh Price</a>
                                &nbsp;&nbsp;
                                <button type="button" class="btn btn-yellow Crypto_type d-inline-block w-50 mb-3 sell-btn-id confirmPay">Confirm</button>
                               
                            </div>
                            
                        
                            
                        </form>

                       
                       
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @include('user.payment.paymentMethodsTemplates.selectAllPaymethods') 
 
  
 
   

    @include('template.country_language')
    @include('template.web_footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
    $('.switch-btn').click(function(){
       
        if(document.getElementById("togBtn").checked){
            $('#load_page_here').css({'display' : 'block'});
             $('#load_buy_p2p_trading').css({'display' : 'none'});
        }else{
            $('#load_page_here').css({'display' : 'none'});
             $('#load_buy_p2p_trading').css({'display' : 'block'});
        }
    });
        
    </script>
    <script>
        function myFunction() {
            document.getElementById("express-buy-sell-dropdown").classList.toggle("show");
        }
    
        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("express-buy-sell-dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    
    
        $(document).ready(function() {
            $("#trading-refresh-btn").click(function() {
                $(".refresh-dropdown").toggle();
            });
            $("#trading-filter-btn").click(function() {
                $(".filter-dropdown").toggle();
            });
            $("#block-tab-trading-refresh-btn").click(function() {
                $(".block-tab-refresh-dropdown").toggle();
            });
            $("#block-tab-trading-filter-btn").click(function() {
                $(".block-tab-filter-dropdown").toggle();
            });
    
            $("#p2p-trading-tab-one-tab").click(function() {
                $("#p2p-trading").show();
                $("#trading-block-tabs-section").hide();
            });
            $("#p2p-trading-tab-two-tab").click(function() {
                $("#p2p-trading").hide();
                $("#trading-block-tabs-section").show();
            });
        });
    </script>


    
   
   
    <script>
        $(document).on('click','button.nav-link', function(e){
           // console.log(this.id);
            e.preventDefault();
           
            var clickedid = this.id;
            //alert(clickedid);
            if(clickedid == 'p2p-trading-BTC-tab'){
                var pageURL=$(this).attr('href');
            
                    history.pushState(null, '', pageURL);
             var appLocale = "<?php echo url(app()->getLocale()) ?>";
                    $.ajax({    
                    type: "GET",
                    url: appLocale +"/p2p-trading/btc", 
                    data:{page:pageURL},            
                    dataType: "html",                  
                    success: function(data){ 
                       // document.location.reload();
                        //$('#p2p-trading-USDT').html(data);    
                            
                    }
                });
            }

            if(clickedid == 'p2p-trading-USDT-tab'){
                var pageURL=$(this).attr('href');
            
                    history.pushState(null, '', pageURL);
             var appLocale = "<?php echo url(app()->getLocale()) ?>";
                    $.ajax({    
                    type: "GET",
                    url: appLocale +"/en/p2p-trading/bmk", 
                    data:{page:pageURL},            
                    dataType: "html",                  
                    success: function(data){ 
                        //document.location.reload();
                       // $('#p2p-trading-USDT').html(data);    
                            
                    }
                });
            }

            if(clickedid == 'p2p-trading-ETH-tab'){
                var pageURL=$(this).attr('href');
            
                    history.pushState(null, '', pageURL);
             var appLocale = "<?php echo url(app()->getLocale()) ?>";
                    $.ajax({    
                    type: "GET",
                    url: appLocale +"/p2p-trading/eth", 
                    data:{page:pageURL},            
                    dataType: "html",                  
                    success: function(data){ 
                        //document.location.reload();
                       // $('#p2p-trading-USDT').html(data);    
                            
                    }
                });
            }
           
            });
    </script>

<script>
    $(document).ready(function(){

        $(document).on('click', '.pagination a', function(event){
                event.preventDefault(); 
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
                var page1 = $(this).attr('href');                  
                history.pushState(null, '', page1);
            });

        function fetch_data(page){
             var appLocale = "<?php echo url(app()->getLocale()) ?>";
            $.ajax({
                url:appLocale +"/p2p-trading/eth?page="+page,
                success:function(data){
                    $('#table_data1').html(data);
            }
        });
        }
        
    });
</script>

<script>
    function changeSrc3(id){  
         $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
              $('#loading').hide();
        });
        var appLocale = "<?php echo url(app()->getLocale()) ?>";
        var id = id;
        //alert(id);
        $.ajax({
            url: appLocale +'/p2p-trading/eth',
            type: 'GET',
            data: { paymentType: id },
            success: function(response) {
                $('#table_data1').html(response);
            }
        });

    };
               
</script>

<script>
    function changeSrc4(id){  
         $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
              $('#loading').hide();
        });
        var id = id;
        //alert(id);
         var appLocale = "<?php echo url(app()->getLocale()) ?>";
        $.ajax({
            url: appLocale +'/p2p-trading/eth',
            type: 'GET',
            data: { CurrencyId: id },
            success: function(response) {
                $('#table_data1').html(response);
            }
        });

    };
               
</script>

<script>
    function changeSrc5(id){  
         $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
              $('#loading').hide();
        });
         var appLocale = "<?php echo url(app()->getLocale()) ?>";
        var id = id;
        //alert(id);
        var appLocale = "<?php echo url(app()->getLocale()) ?>";
        $.ajax({
            url: appLocale +'/p2p-trading/eth',
            type: 'GET',
            data: { countryname: id },
            success: function(response) {
                $('#table_data1').html(response);
            }
        });

    };
               
</script>

<script>
    var intervalId;
   
        function refresh(id) {
              
            //console.log(id);
            if (id === 'five-sec') {
                var fivesec = $('#five-sec').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+fivesec);
                clearInterval(intervalId);
                intervalId = setInterval(function() {
                    $('#block-tab-trading-refresh-btn').html('<img src="{{ asset('Spin.gif') }}" style="width: 20px;" />'+' '+fivesec);
                    $('#table_data1').load(location.href + '#table_data1');
                }, 5000);
            } else if (id === 'ten-sec') {
                var ten_sec = $('#ten-sec').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+ten_sec);
                clearInterval(intervalId);
                intervalId = setInterval(function() {
                    $('#block-tab-trading-refresh-btn').html('<img src="{{ asset('Spin.gif') }}" style="width: 20px;" />'+' '+ten_sec);
                    $('#table_data1').load(location.href + '#table_data1');
                }, 10000);
            } else if (id === 'twenty-sec') {
                var twenty_sec = $('#twenty-sec').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+twenty_sec);
                clearInterval(intervalId);
                intervalId = setInterval(function() {
                    $('#block-tab-trading-refresh-btn').html('<img src="{{ asset('Spin.gif') }}" style="width: 20px;" />'+' '+twenty_sec);
                    $('#table_data1').load(location.href + '#table_data1');
                }, 20000);
            }else if (id === 'not-now') {
                var not_now = $('#not-now').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+not_now);
                clearInterval(intervalId);
                intervalId = setTimeout(function() {
                    $('#table_data1').load(location.href + '#table_data1');
                }, 100);
            }
            $('.ul-dropdown').removeClass('active')
        };
        
        $(document).ready(function() {
          
            $('#five-sec').click(function() {
                refresh('five-sec');
            });
        
            $('#ten-sec').click(function() {
                refresh('ten-sec');
            });
        
            $('#twenty-sec').click(function() {
                refresh('twenty-sec');
            });
            
            $('#not-now').click(function() {
                refresh('not-now');
            });
        });
</script>
<script>
    function sell_eth(id){
        const ifAuth = '{{ auth()->check() ? 'true' : 'false' }}';
      //  alert(ifAuth);
       
        if(ifAuth == 'true'){
                  var eth = id;
                //console.log(eth);
                var buyer_name = $('#'+eth+' ' +' .buyer_name').text();
                var buyer_order_completion = $('#'+eth+' ' +' .buyer_order_completion').text();
                var buyer_cr_value = $('#'+eth+' ' +' .buyer_cr_value').text();
                var buyer_cr_type = $('#'+eth+' ' +' .buyer_cr_type').text();
                var buyer_payment_type = $('#'+eth+' ' +' .buyer_payment_type').text();
                var buyer_Crypto_type = $('#'+eth+' ' +' .buyer_Crypto_type').text();
              
                $('.sell_coin_p2p_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
                $('#payment-method-content-left .buyer_name').html(buyer_name);
                $('#payment-method-content-left .buyer_order_completion').html(buyer_order_completion);
                $('#payment-method-content-left .buyer_cr_value').html('<p class="fs-14">'+ buyer_cr_value + buyer_cr_type+  '</p>');
                $('#payment-method-content-left .buyer_cr_type').html(buyer_cr_type);
                $('#payment-method-content-left .buyer_payment_type').html("Buyer's payment method " +buyer_payment_type);
                $('#payment-method-content-left .buyer_Crypto_type').html(buyer_Crypto_type);
                $('#payment-method-content-right .Crypto_type').html(buyer_Crypto_type);   
        }else{
            window.location.href = 'https://wealthmark.io/en/login'; 
           
        }
       
        
    }
    
        

        
  $(function () {
      
 
     
      $('.anchor-btns .ul-dropdown').hide();
      
      $('.anchor-btns').click(function(e) 
      {
        $(this).find('.ul-dropdown').slideToggle(400); 
        $('.anchor-btns .ul-dropdown').not($(this).find('.ul-dropdown')).hide();
         //e.preventDefault();
         e.stopPropagation();
      });      
    });
</script>
<script>
    $('.lp-link-top').click(function(){
        $(this).children('.lp-link-top-block').addClass('active');
        $(this).siblings().children('.lp-link-top-block').removeClass('active');
    })
</script>
</body>

</html>