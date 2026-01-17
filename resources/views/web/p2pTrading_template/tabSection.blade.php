 <style>
     .css-xbhv3i {
         box-sizing: border-box;
         margin: 0;
         min-width: 0;
         color: #B7BDC6;
         width: 22px;
         height: 22px;
         font-size: 22px;
         fill: #EAECEF;
         fill: #B7BDC6;
         -webkit-transform: rotate(0deg);
         -ms-transform: rotate(0deg);
         transform: rotate(0deg);
         width: 1em;
         height: 1em;
     }
 </style>
 <div class="Liquid_Swap_bg-overlay h-auto">
     <div class="container">
         <div class="tab-pills-div-top">
             <div class="tab-pills-div-top-left overflow-auto h-auto">
                 <a href="javascript:void(0)" class="lp-link-top" id="Express_section">
                     <div class="lp-link-top-block">
                         <div class="lp-link-top-block-inner">
                             <div class="lp-link-top-txt">Express</div>
                         </div>
                     </div>
                 </a>
                 <a href='{{ url(app()->getLocale())."/p2p-trading" }}' class="lp-link-top" id="P2P_section">
                     <div class="lp-link-top-block active">
                         <div class="lp-link-top-block-inner">
                             <div class="lp-link-top-txt">P2P</div>
                         </div>
                     </div>
                 </a>

                 <a href="javascript:void(0)" class="lp-link-top" id="group_section">
                     <div class="lp-link-top-block">
                         <div class="lp-link-top-block-inner">
                             <div class="lp-link-top-txt">Group</div>
                         </div>
                     </div>
                 </a>

                 <a href="javascript:void(0)" class="lp-link-top" id="block__section">
                     <div class=" lp-link-top-block ">
                         <div class="lp-link-top-block-inner">
                             <div class="lp-link-top-txt">Block</div>

                         </div>
                     </div>
                 </a>


             </div>
             <div class="tab-pills-div-top-right justify-content-end">
                 <nav id="p2p-nav-exapnd" class="navbar navbar-expand-lg p-0 w-100">

                     <ul class="navbar-nav w-100">
                         <li class="nav-item dropdown  d-none d-lg-block">
                             <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                 <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                 </svg>
                                 <span class=""> User Guide</span>
                             </a>
                             <ul class="dropdown-menu  fade-down">
                                 <li>
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M4.896 3h14v18h-14V3zm11 13v2h-8v-2h8zm-8-3h8V6h-8v7zm6-5h-4v3h4V8z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> Beginners Guide</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> Video tutorial</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path d="M11 8.2a4 4 0 00-4-4H3v14h5.16c1.193 0 2.243.635 2.86 1.6h1.96c.617-.965 1.668-1.6 2.86-1.6H21v-14h-4a4 4 0 00-4 4v8h-2v-8z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> P2P Trading FAQ</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         @if(Auth::check())
                         <li class="nav-item no-dropdown-arrow p2p-order-tab d-none d-lg-block">
                             <a class="nav-link dropdown-toggle position-relative" href="javascript:void(0);">
                                 <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                                 </svg>
                                 <span class=""> Orders</span>
                                 <span id="order-countdown" class="order-countdown" style="display: none;">1</span>
                             </a>
                             <ul class="dropdown-menu  fade-down">
                                 <div class="header-div">
                                     <div class="fs-18 min-width-150px">
                                         Processing
                                     </div>
                                     <a onclick="checkuser()" class="yellow-text fs-14 p-0">
                                         View&nbsp;All
                                     </a>
                                 </div>
                                 <div class="body-div">

                                     <div class="p2p-no-active-order">
                                         <img src="{{ asset('img/p2p-trading/empty-list.svg') }}">
                                         <div class="fs-16 text-muted mt-3">
                                             No Active Orders
                                         </div>
                                     </div>


                                     <!--<div class="timer-div-section"> </div>-->
                                     <div id="hide-when-no-order" class="hide-when-no-order">
                                         <div class="timer">
                                             <span id="timer">0</span>
                                         </div>

                                         <p class="d-block fs-14 text-black mt-4">
                                             Complete your Order within 15 minutes
                                         </p>
                                     </div>



                                 </div>


                             </ul>
                         </li>
                         <li class="nav-item d-none d-lg-block">
                             <a class="nav-link" href="javascript:void(0);">
                                 <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M15 4h6v4.5h-2.5v-2H15V4zM5.833 9.998A2.333 2.333 0 003.5 12.331v1.667h8v-1.667a2.333 2.333 0 00-2.333-2.333H5.833zm9 6.002a2.333 2.333 0 00-2.333 2.333V20h8v-1.667A2.333 2.333 0 0018.167 16h-3.334zM9 17.5H5.5v-2H3V20h6v-2.5zm10-4.998a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM7.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" fill="currentColor"></path>
                                 </svg>
                                 <span class="">
                                     P2P&nbsp;User&nbsp;Center
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item dropdown  ">
                             <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">

                                 <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                 </svg>
                                 <span class="hide-mas-576">
                                     More
                                 </span>
                             </a>
                             <ul class="dropdown-menu fade-down">
                                 <li>
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15 4h6v4.5h-2.5v-2H15V4zM5.833 9.998A2.333 2.333 0 003.5 12.331v1.667h8v-1.667a2.333 2.333 0 00-2.333-2.333H5.833zm9 6.002a2.333 2.333 0 00-2.333 2.333V20h8v-1.667A2.333 2.333 0 0018.167 16h-3.334zM9 17.5H5.5v-2H3V20h6v-2.5zm10-4.998a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM7.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> P2P User Center</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="d-lg-none">
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> Orders</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="nested-dropdown d-lg-none">
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <div>
                                                 <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                                 </svg>
                                                 <span> Payment Methods</span>
                                             </div>
                                             <span>
                                                 <svg class="p2p-dropdown-svg" viewBox="0 0 24 24" fill="none" class="css-1jt6gp1">
                                                     <path d="M15.5 10.29v1.75L12 15.75l-3.5-3.71v-1.75h7z" fill="currentColor"></path>
                                                 </svg>
                                             </span>
                                         </div>
                                     </a>
                                     <ul class="nested-dropdown-menu" style="display:none">
                                         <li>
                                             <a class="nested-dropdown-item" href="#">
                                                 <i class="bi bi-arrow-right-short"></i>
                                                 <span> Beginners Guide</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a class="nested-dropdown-item" href="#">
                                                 <i class="bi bi-arrow-right-short"></i>
                                                 <span> Video tutorial</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a class="nested-dropdown-item" href="#">
                                                 <i class="bi bi-arrow-right-short"></i>
                                                 <span> P2P Trading FAQ</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="d-lg-none">
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path d="M11.336 8.577c-.769.15-1.1.558-1.1 1.146 0 .573.331.874 1.1 1.086V8.577zM12.678 15.393c.71-.196 1.041-.663 1.041-1.236 0-.438-.18-.89-1.04-1.147v2.383z" fill="currentColor"></path>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zm.86-3.948V18.5h-1.72v-1.387c-1.523-.136-2.533-.755-3.287-1.584l1.357-1.237c.573.604 1.282 1.01 2.126 1.131V12.71c-2.262-.468-3.182-1.463-3.182-2.926 0-1.583 1.04-2.64 2.986-2.865V5.5h1.72v1.418c1.206.135 2.096.603 2.76 1.357l-1.373 1.237c-.362-.408-.845-.74-1.569-.905v2.503c2.112.483 3.122 1.342 3.122 2.88 0 1.479-.935 2.73-2.94 3.062z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> User Guide</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href='{{ url(app()->getLocale())."/post-ads" }}'>
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> Post new Ad</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href='{{ url(app()->getLocale())."/my-ads" }}'>
                                         <div class="d-flex align-items-center">
                                             <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3h14v18l-3.5-3-3.5 3-3.5-3L5 21V3zm3 4h4v2.5H8V7zm4 5H8v2.5h4V12zm2-5h2.5v2.5H14V7zm2.5 5H14v2.5h2.5V12z" fill="currentColor"></path>
                                             </svg>
                                             <div class="d-block">
                                                 <span> My ads</span>
                                             </div>
                                         </div>
                                     </a>
                                 </li>


                             </ul>
                         </li>
                         @endif








                     </ul>
                 </nav>

                 <!--<div class="d-lg-none">-->
                 <!--    <svg data-trigger="p2p-nav-exapnd" viewBox="0 0 24 24" fill="none" class="css-xbhv3i">-->
                 <!--        <path d="M15.5 10.29v1.75L12 15.75l-3.5-3.71v-1.75h7z" fill="currentColor"></path>-->
                 <!--    </svg>-->
                 <!--</div>-->

             </div>
         </div>
     </div>
 </div>
 <div id="leverage-sub-navbar" class="shadow-sm mb-2">
     <div class="container">
         <div class="buy-sell-tab-section">
             <div class="first position-relative">
                 <label class="switch-btn">
                     <input type="checkbox" id="togBtn" checked class="toggle_vat">
                     <div class="s-slider round">
                         <span class="s-slider_text">
                             <span class="off nav-link buy" <?php if (url()->current() == url(app()->getLocale() . '/p2p-trading/buy')) {
                                                                echo 'style="background-color: green!important;color: white;"';
                                                            } ?> href="{{ url(app()->getLocale().'/p2p-trading/buy') }}" id="p2p-trading-buy-tab">Buy</span>
                             <span class="on nav-link sell" <?php if ((url()->current() == url(app()->getLocale() . '/p2p-trading')) || (url()->current() == url(app()->getLocale() . '/p2p-trading/bmk')) || (url()->current() == url(app()->getLocale() . '/p2p-trading/btc')) || (url()->current() == url(app()->getLocale() . '/p2p-trading/eth'))) {
                                                                echo 'style="background-color: red!important;color:white"';
                                                            } ?> href="{{ url(app()->getLocale().'/p2p-trading') }}" id="p2p-trading-sell-tab">Sell</span>
                         </span>
                     </div>
                 </label>


                 <div class="p2p-filter-div">
                     <svg viewBox="0 0 24 24" fill="none" id="openRefreshModal">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M19.997 12.21a8.161 8.161 0 000-.42v.42zm-4.463 3.327l-2.608-2.608h7.07V20l-2.341-2.342A8.003 8.003 0 014.252 14h3.164a5.001 5.001 0 008.118 1.537zM19.747 10A8.003 8.003 0 006.343 6.343L4.001 4v7.071h7.07L8.466 8.464A5.001 5.001 0 0116.585 10h3.162zM4 12L4 11.845v.31A8.126 8.126 0 014 12z" fill="currentColor"></path>
                     </svg>
                     <svg viewBox="0 0 24 24" fill="none" id="open-p2p-form">
                         <path d="M3 3v4.5L8.4 13v7h3.3l3.2-3.2V13l5.5-5.5V3H3zm15.4 3.7l-5.5 5.5V16l-2 2h-.5v-5.8L5 6.7V5h13.5v1.7h-.1z" fill="currentColor"></path>
                     </svg>
                 </div>
             </div>
             <div class="second">
                 <ul class="nav nav-pills border-0" id="trading-myTab" role="tablist">

                     <li class="nav-item" role="presentation">
                         <a class="nav-link {{ (Request::segment(3) == 'bmk') ? 'active':''}}" aria-selected="{{ (Request::segment(3) == 'bmk') ? 'true':'false'}}" href="/{{ app()->getLocale() }}/p2p-trading/bmk" id="p2p-trading-USDT-tab">BMK</a>
                     </li>
                     <li class="nav-item" role="presentation">
                         <a class="nav-link {{ (Request::segment(3) == 'btc') ? 'active':''}}" aria-selected="{{ (Request::segment(3) == 'btc') ? 'true':'false'}}" href="/{{ app()->getLocale() }}/p2p-trading/btc" id="p2p-trading-BTC-tab">BTC</a>
                     </li>

                     <li class="nav-item" role="presentation">
                         <a class="nav-link {{ (Request::segment(3) == 'eth') ? 'active':''}}" aria-selected="{{ (Request::segment(3) == 'eth') ? 'true':'false'}}" href="/{{ app()->getLocale() }}/p2p-trading/eth" id="p2p-trading-ETH-tab">ETH</a>
                     </li>



                 </ul>
             </div>

         </div>

     </div>
 </div>
 <section class="p2p-form pt-3 pb-3 bg-white" id="p2p-form">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-12 header-div flex-div justify-content-between position-relative py-2">
                 <div class="fs-6 text-black">Filter </div>
                 <svg viewBox="0 0 24 24" fill="none" class="p2p-close-slide-div">
                     <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                 </svg>
             </div>
             <div class="appedRefrshDiv col-md-12 "></div>
             <div class="col-lg-3">
                 <label>Search</label>

                 <div class="p2p-search-box">
                     <input type="input" value="" placeholder="Enter amount" autocomplete="off" name="transAmount" class="border-0 bg-transparent">
                     <div class="bn-input-suffix">
                         <div class="d-flex align-items-center">
                             <div type="text" class="p2p-search-box-text">INR</div>
                             <button type="button" class="p2p-search-box-btn">Search</button>
                         </div>
                     </div>
                 </div>

             </div>
             <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                 <label>Fiat </label>
                 <div class="label position-relative">

                     <div class="lf-select_coin-to bg-light-blue">
                         <div class="coin-swap-from m-0">
                             <input type="text" value="31" class="lf-select-coin-to-input">
                             <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                         </div>
                         <div class="lf-select-coin-to-active-div">
                             <div class="wm-dropdown-optn-item-div">
                                 <span class="wm-dropdown-optn-item-symbol">{{ isset($allcurrency[0]) ? $allcurrency[0]->symbol : '' }}</span>
                                 <div class="wm-dropdown-optn-item-txt">{{ isset($allcurrency[0]) ? $allcurrency[0]->name : 'Select' }}</div>
                             </div>
                         </div>
                         <div class="wm-dropdown-div wm-dropdown-div-open" style="display: none;">
                             <div class="p-3">
                                 <div class=" wm-dropdown-srch-div">
                                     <i class="bi bi-search wm-dropdown-search-icn"></i>
                                     <input type="text" class="wm-dropdown-search-input" placeholder="search" value="">
                                     <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn  w-auto h-auto"></i>
                                 </div>
                             </div>
                             <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">

                                 @foreach ($allcurrency as $currency)
                                 <li role="option" id="{{ $currency->id }}" title="{{ $currency->id }}" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id); changeSrc4(this.id)" style="display: list-item;">
                                     <div class="wm-dropdown-optn-item-inner">

                                         <div class="wm-dropdown-optn-item-div">
                                             <span class="wm-dropdown-optn-item-symbol">{{$currency->symbol}}</span>

                                             <div class="wm-dropdown-optn-item-txt">{{ $currency->name }}</div>

                                         </div>
                                     </div>
                                 </li>
                                 @endforeach

                             </ul>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                 <label>Payment </label>
                 <div class="label position-relative payment_filter" id="p2p-trading-payment">
                     <div class="earn-search-div-main">
                         <div class="lf-select_coin-to bg-light-blue">
                             <div class=" coin-swap-from m-0" id="p2p-drop-down-click">
                                 <input type="text" value="22" class="lf-select-coin-to-input">
                                 <div class="wm-input-suffix ">
                                     <div class="lf-select-coin-to-drpd">
                                         <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                     </div>
                                 </div>
                             </div>

                             <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div ">

                                 <div class="wm-dropdown-optn-item-div">

                                     <div class="wm-dropdown-optn-item-txt">All Payment</div>
                                 </div>
                             </div>

                             <div class="wm-dropdown-div  wm-dropdown-div-open" id="payment-dropdown-list" style="display: none;">
                                 <div class="p-3">
                                     <div class=" wm-dropdown-srch-div">
                                         <div class="wm-input-prefix ">
                                             <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                     d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                                     fill="currentColor"></path>
                                             </svg>

                                         </div>
                                         <input type="text" class="wm-dropdown-search-input" value="" placeholder="search">
                                         <div class="wm-input-suffix ">

                                             <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn  w-auto h-auto"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                                     @foreach($allpaymentMethod_list as $payment_list)
                                     @if($payment_list->name != 'Gift-card')
                                     <li role="option" id="{{$payment_list->id}}" title="{{$payment_list->id}}" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id); changeSrc3(this.id)" style="display: list-item;">
                                         <div class="wm-dropdown-optn-item-inner">

                                             <div class="wm-dropdown-optn-item-div">

                                                 @if($payment_list->name == 'Bank-Transfer-INDIA')<div class="payment-left-border-2"></div> @endif
                                                 @if($payment_list->name == 'UPI') <div class="payment-left-border-3"></div> @endif
                                                 @if($payment_list->name == 'IMPS') <div class="payment-left-border-4"></div> @endif
                                                 @if($payment_list->name == 'Paytm') <div class="payment-left-border-5"></div> @endif

                                                 <div class="wm-dropdown-optn-item-txt">{{ $payment_list->name }}</div>

                                             </div>
                                         </div>
                                     </li>
                                     @endif
                                     @endforeach



                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                 <label class="">Availabel Region(s) </label>
                 <div class="label position-relative country_filter">
                     <div class="earn-search-div-main">
                         <div class="lf-select_coin-to bg-light-blue">
                             <div class=" coin-swap-from m-0" id="region-drop-down-click">
                                 <input type="text" value="29" class="lf-select-coin-to-input">
                                 <div class="wm-input-suffix ">
                                     <div class="lf-select-coin-to-drpd">
                                         <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                     </div>
                                 </div>
                             </div>

                             <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">

                                 <div class="wm-dropdown-optn-item-div">
                                     <img class="wm-dropdown-optn-item-img" src="{{ asset('img/country-flag/IN.png') }}">
                                     <div class="wm-dropdown-optn-item-txt">India</div>
                                 </div>
                             </div>

                             <div class="wm-dropdown-div  wm-dropdown-div-open w-100" id="region-dropdown-list" style="display: none;">
                                 <div class="p-3">
                                     <div class=" wm-dropdown-srch-div">
                                         <div class="wm-input-prefix ">
                                             <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                                     d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                                     fill="currentColor"></path>
                                             </svg>
                                         </div>
                                         <input type="text" class="wm-dropdown-search-input" placeholder="search" value="">
                                         <div class="wm-input-suffix ">
                                             <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn  w-auto h-auto"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                                     @foreach($country as $eachCountry)
                                     <li role="option" id="{{$eachCountry->name}}" title="{{$eachCountry->name}}" class="wm-dropdown-optn-item "
                                         onclick="changeSrc2(this.id); changeSrc5(this.id)" style="display: list-item;">
                                         <div class="wm-dropdown-optn-item-inner">

                                             <div class="wm-dropdown-optn-item-div">

                                                 <img class="wm-dropdown-optn-item-img" src="{{ asset('img/country-flag/'.$eachCountry->ISO2code.'.png') }}">


                                                 <div class="wm-dropdown-optn-item-txt">{{$eachCountry->name}}</div>

                                             </div>
                                         </div>
                                     </li>
                                     @endforeach

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 d-flex align-items-center p-0">
                 <div class="position-relative max-width-150px ">
                     <label class="d-block mb-0"> &nbsp; </label>
                     <div class="d-inline-block anchor-btns">
                         <span class="yellow-text" id="block-tab-trading-filter-btn">
                             <span class="me-1"> Filter </span>
                             <svg viewBox="0 0 24 24" fill="none">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>
                             </svg>
                         </span>
                         <div class="ul-dropdown">
                             <ul>
                                 <li>
                                     <a href="javascript:void(0)">
                                         <input type="checkbox" id="only_merchant" class="me-2" />
                                         <label for="only_merchant" class="cursor-pointer">Only Show Marchants Ads</label>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="javascript:void(0)">
                                         <input type="checkbox" id="only_merchant_pro" class="me-2" />
                                         <label for="only_merchant_pro" class="cursor-pointer">Only display ads from Pro Merchant</label>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="position-relative max-width-150px">
                     <label class="d-block mb-0"> &nbsp; </label>
                     <div class="d-inline-block anchor-btns">
                         <span class="bg-whitesmoke" id="block-tab-trading-refresh-btn">
                             <svg viewBox="0 0 24 24" fill="none" class="refresh-svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.997 12.21a8.161 8.161 0 000-.42v.42zm-4.463 3.327l-2.608-2.608h7.07V20l-2.341-2.342A8.003 8.003 0 014.252 14h3.164a5.001 5.001 0 008.118 1.537zM19.747 10A8.003 8.003 0 006.343 6.343L4.001 4v7.071h7.07L8.466 8.464A5.001 5.001 0 0116.585 10h3.162zM4 12L4 11.845v.31A8.126 8.126 0 014 12z" fill="currentColor"></path>
                             </svg>
                             <span> Refresh </span>
                         </span>
                         <div class="ul-dropdown">
                             <ul>
                                 <li>
                                     <a href="javascript:void(0)" id="not-now" onclick="refresh(this.id)">
                                         Not now
                                     </a>
                                     <a href="javascript:void(0)" id="five-sec" onclick="refresh(this.id)">
                                         5s to refresh
                                     </a>
                                     <a href="javascript:void(0)" id="ten-sec" onclick="refresh(this.id)">
                                         10s to refresh
                                     </a>
                                     <a href="javascript:void(0)" id="twenty-sec" onclick="refresh(this.id)">
                                         20s to refresh
                                     </a>
                                 </li>
                             </ul>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="footer-div flex-div justify-content-between py-2 mt-5">
                     <a href="javascript:void(0)" class="btn-default d-block w-100">Reset</a>
                     &nbsp;&nbsp;
                     <a href="javascript:void(0)" class="btn-yellow w-100">Confirm</a>
                 </div>


             </div>
         </div>
     </div>
 </section>
 <div class="bg-overlay hide"></div>

 <section class="openRefreshModalExapnd" id="openRefreshModalExapnd">
     <div class="container">
         <div class="header-div flex-div justify-content-between position-relative py-2">
             <div class="fs-6 text-black">Filter </div>
             <svg viewBox="0 0 24 24" fill="none" class="p2p-close-refresh-div cursor-pointer">
                 <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
             </svg>
         </div>
         <div>
             <ul>
                 <li>
                     <a href="javascript:void(0)" id="not-now" onclick="refresh(this.id)">
                         Not now
                     </a>
                     <a href="javascript:void(0)" id="five-sec" onclick="refresh(this.id)">
                         5s to refresh
                     </a>
                     <a href="javascript:void(0)" id="ten-sec" onclick="refresh(this.id)">
                         10s to refresh
                     </a>
                     <a href="javascript:void(0)" id="twenty-sec" onclick="refresh(this.id)">
                         20s to refresh
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </section>











 <script>
     var remainingTime = 1 * 900;

     function update(percent) {
         var deg;
         if (percent < (remainingTime / 2)) {
             deg = 90 + (360 * percent / remainingTime);
             $('.pie').css('background-image',
                 'linear-gradient(' + deg + 'deg, transparent 50%, white 50%),linear-gradient(90deg, white 50%, transparent 50%)'

             );
         } else if (percent >= (remainingTime / 2)) {
             deg = -90 + (360 * percent / remainingTime);
             $('.pie').css('background-image',
                 'linear-gradient(' + deg + 'deg, transparent 50%, #fec00f 50%),linear-gradient(90deg, white 50%, transparent 50%)'
             );
         }
     }

     $(document).ready(function() {
         // $('#order-countdown').hide();
         var orderId = <?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;
         //console.log(orderId);
         offtimer = setInterval(function() {
             var count = parseInt(localStorage.getItem('timerValue'));
             if (count > 0) {
                 $('.p2p-no-active-order').addClass('hide');
                 $('#order-countdown').show();
                 $('#pnding-order').show();
                 count--;
                 var minutes = Math.floor(count / 60);
                 var seconds = count % 60;
                 if (count >= 0) {
                     $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
                     update(count);
                 }
                 localStorage.setItem('timerValue', count);

                 var getcount = parseInt(localStorage.getItem('timerValue'));
                 if (getcount === 0) {
                     localStorage.setItem('timerValue', 0);
                     clearInterval(offtimer);
                     $('.timer-div-section').html('');
                     $.get('{{ route("cancel-order", ["id" => ":id"]) }}'.replace(':id', orderId),
                         function(response) {
                             if (response.success) {
                                 triggerAlert('Order cancelled successfully!', 'error');
                             }
                         });
                     // $('#timer').html('No active order');
                     $('.order-countdown').html('');
                 }
             } else {
                 localStorage.setItem('timerValue', 0);

                 //   var session = <?php // echo json_encode($_SESSION); 
                                    ?>;
                 //         console.log(session);
                 clearInterval(offtimer);
                 // $('.timer-div-section').html('No active order');
                 $('.conforder').html('');
                 $('.order-countdown').html('');
                 $('#order-countdown').hide();
                 $('#pnding-order').hide();

                 $("#hide-when-no-order").hide();

             }
         }, 1000);


     });
 </script>

 <script>
     @if(Auth::check())

     function checkuser() {
         const trader_id = '{{ Auth::user()->id }}';
         $.ajax({
             type: 'post',
             url: '{{ "/getOrderDetailbyId" }}',
             data: {
                 '_token': "{{ csrf_token() }}",
                 'orderId': '<?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;',
             },
             success: function(data) {

                 setTimeout(function() {
                     if (data.order_data.buyer_id == trader_id) {
                         window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}';
                     }
                     if (data.order_data.seller_id == trader_id) {
                         window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}';
                     }
                 }, 1000)
             },
             error: function(xhr, status, error) {
                 var erroJson = JSON.parse(xhr.responseText);
                 triggerAlert('something went wrong!', 'error');
             }
         });
     }
     @endif
 </script>


 <script>
     $('#p2p-trading-buy-tab').click(function() {
         var clickedid = $(this).attr('id');
         if (clickedid == 'p2p-trading-buy-tab') {

             var pageURL = $(this).attr('href');
             history.pushState(null, '', pageURL);
             var appLocale = "<?php echo url(app()->getLocale()) ?>";
             location.reload();
             //   $.ajax({
             //     type: "GET",
             //     url: appLocale +"/p2p-trading/buy",
             //     data:{page:pageURL},
             //     dataType: "html",
             //     success: function(data){
             //         document.location.reload();
             //     }
             // });
         }
         //   console.log('Buy ID:', $(this).attr('id'));
     });

     $('#p2p-trading-sell-tab').click(function() {
         var clickedid = $(this).attr('id');
         if (clickedid == 'p2p-trading-sell-tab') {

             var pageURL = $(this).attr('href');
             history.pushState(null, '', pageURL);
             var appLocale = "<?php echo url(app()->getLocale()) ?>";
             location.reload();
             // $.ajax({
             //     type: "GET",
             //     url: appLocale +"/p2p-trading",
             //     data:{page:pageURL},
             //     dataType: "html",
             //     success: function(data){
             //       document.location.reload();
             //     }
             // });
         }

     });

     $('.nested-dropdown a').click(function(e) {
         e.stopPropagation();
         $(this).next('.nested-dropdown-menu').slideToggle();
     });

     $('#open-p2p-form').click(function() {
         // c = 1;
         $("#p2p-form").toggleClass('slideup-div');
         $("#block-tab-trading-refresh-btn").closest('.position-relative').addClass("hide");
         $(".bg-overlay").removeClass("hide");
         $('body').addClass("overflow-hidden");
     });

     $('.p2p-close-slide-div').click(function() {
         $("#p2p-form").removeClass('slideup-div');
         $(".bg-overlay").addClass("hide");
         $('body').removeClass("overflow-hidden");
         $("#block-tab-trading-refresh-btn").closest('.position-relative').removeClass("hide");
         $('.appedRefrshDiv').html('');
     });



     $('#openRefreshModal').click(function() {
         $("#openRefreshModalExapnd").addClass("open");
         $(".bg-overlay").removeClass("hide");
     });

     $('.p2p-close-refresh-div').click(function() {
         alert();
         $("#openRefreshModalExapnd").removeClass("open");
         $(".bg-overlay").addClass("hide");
     });






     //  $('#openRefreshModal').click(function(){
     //      var refreshDiv = $("#block-tab-trading-refresh-btn").siblings('.ul-dropdown').html();
     //     $("#p2p-form").toggleClass('slideup-div openRefreshModalExapnd');
     //     $("#block-tab-trading-refresh-btn").closest('.position-relative').addClass("hide");
     //     $(".bg-overlay").removeClass("hide");
     //     $('.appedRefrshDiv').html(refreshDiv);

     // });
 </script>