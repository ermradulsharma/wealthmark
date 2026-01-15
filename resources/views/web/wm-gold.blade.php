<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      @include('template.web_css')
      <style>

         section#wm-gold-top {
         padding: 50px !important;
         background-image: url(https://wealthmark.io/-institutional/cover.png);
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         .css-1ka7jde {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         padding: 20px;
         width: 264px;
         flex: 1 0 270px;
         height: 330px;
         cursor: pointer;
         background-color: var(--bg-light-blue);
         border: 1px solid transparent;
         position: relative;
         border-radius: 8px;
         flex-direction: column;
         }
         .css-1ka7jde .card-title-box {
         display: block;
         margin-bottom: 12px;
         }
         .css-10nf7hq {
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
         .css-1ka7jde .card-title-box .title-icon {
         border-radius: 8px;
         background-color: rgb(255 255 255);
         width: 56px;
         height: 56px;
         padding: 4px;
         margin-right: 6px;
         margin-bottom: 12px;
         }
         .css-vurnku {
         box-sizing: border-box;
         margin: 0;
         min-width: 0;
         }
         .css-1ka7jde .title-text {
         font-size: 20px;
         }
         .css-1ds83c4 {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 500;
         font-size: 20px;
         line-height: 28px;
         color:var(--text-yellow);
         }
         .css-1rd75c1 {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: currentcolor;
         font-size: 24px;
         fill: currentcolor;
         width: 100%;
         height: 100%;
         }
         .css-1ka7jde .card-content {
         font-size: 14px;
         color: rgb(183, 189, 198);
         font-weight: 500;
         line-height: 20px;
         margin-bottom: 12px;
         height: 80px;
         display: -webkit-box;
         -webkit-line-clamp: 4;
         -webkit-box-orient: vertical;
         overflow: hidden;
         }
         .css-1ka7jde .card-advantage-box {
         margin-bottom: 12px;
         }
         .css-1ka7jde .card-advantage-box .title-icon {
         margin-right: 6px;
         width: 16px;
         /*height: 16px;*/
         }
         .css-1uqrljd {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: rgb(14, 203, 129);
         font-size: 24px;
         fill: rgb(14, 203, 129);
         width: 100%;
         height: 100%;
         }
         .css-1ka7jde .card-advantage-box .title-text {
         color: rgb(132, 142, 156);
         font-size: 14px;
         }
         .css-1kj68nb {
         box-sizing: border-box;
         margin: auto 0px 0px;
         min-width: 0px;
         display: flex;
         }
         .css-1ka7jde .card-arrowIcon {
         width: 24px;
         height: 24px;
         color: rgb(71, 77, 87);
         margin-right: 9px;
         }
         .css-1rd75c1 {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: currentcolor;
         font-size: 24px;
         fill: currentcolor;
         width: 100%;
         height: 100%;
         }
         .css-1ka7jde .card-createText {
         color: rgb(240, 185, 11);
         display: none;
         }
         .css-1ka7jde:hover {
         background-size: cover;
         background-image: url(https://wealthmark.io/rlay-hover-bg.png);
         border-color: rgb(245 248 253);
         background-color: rgb(255 255 255);
         box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
         }
         .css-1ka7jde:hover .card-createText {
         display: inline;
         }
         .wm-glod-plan{
         display:flex;
         align-items:center;
         gap:20px;
         overflow:auto;
         padding-bottom:15px;
         flex-wrap:wrap;
         }
         .tab-pills-btn{
         display: flex;
         align-items: center;
         gap: 10px;
         margin-bottom:20px;
         }
         .tab-pills-btn .pills-btn{
         background: white;
         padding: 10px 15px;
         border-radius: 30px;
         border: 1px solid var(--border-light-blue);
         color: var(--text-gray);
         }
         .tab-pills-btn .pills-btn.active{
         background:var(--text-yellow);
         color:var(--text-black) !important;
         border-color: var(--border-yellow);
         }
         .tab-pills-btn .pills-btn:hover{
         background:var(--text-blue);
         color:var(--text-white) !important;
         border-color: var(--border-blue);
         }
         .wm-gold-filter-div{
         display:flex;
         align-items:center;
         flex-wrap:wrap;
         gap:20px;
         margin:20px 0px;
         justify-content: space-between;
         }
         .wm-gold-filter-div .lf-select_coin-to .lf-select-coin-to-active-div{
         background:white;
         border-radius:5px;
         }
         .wm-tbl-row{
         background: white;
         display: flex;
         align-items: center;
         padding: 15px;
         flex-wrap: wrap;
         gap: 15px;
         white-space: nowrap;
         margin-bottom:5px;
         }
         .wm-tbl-row > div{
         flex: 1;
         text-align: center;
         }
         .wm-tbl-row > div .subtitle{
         font-size: 12px;
         color: var(--text-gray);
         margin-bottom: 7px;
         }
         .wm-tbl-row > div .title{
         font-size: 16px;
         color: var(--text-blue);
         }
         .wm-gold-tbl .lf-select_coin-to{
         max-width:200px;
         }
         .Trending_Market{
         display:flex;
         align-items:center;
         flex-wrap:wrap;
         gap:20px
         }
         .Trending_Market .top-card {
         box-sizing: border-box;
         width: auto;
         padding: 16px;
         background: var(--bg-light-blue);
         border-radius: 8px;
         border: 1px solid transparent;
         cursor: pointer;
         flex-grow:1;
         }
         .css-3j2kqe {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         -webkit-box-pack: justify;
         justify-content: space-between;
         }
         .Trending_Market .rank-number {
         color: rgb(94, 102, 115);
         font-size: 16px;
         font-weight: 500;
         }
         .Trending_Market .symbol-box {
         -webkit-box-align: center;
         align-items: center;
         display: flex;
         margin-bottom: 12px;
         }
         .Trending_Market .symbol-text {
         font-size: 16px;
         font-weight: 500;
         max-width: 135px;
         overflow: hidden;
         white-space: nowrap;
         text-overflow: ellipsis;
         }
         .Trending_Market .symbol-icon {
         margin-right: 4px;
         width: 24px;
         height: 24px;
         }
         .Trending_Market .content-body {
         font-size: 24px;
         font-weight: 600;
         }
         .Trending_Market .content-title {
         margin-bottom: 4px;
         color: rgb(132, 142, 156);
         font-size: 12px;
         }
         .css-1jrxz3i {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         max-width: 100%;
         width: 100%;
         height: 100%;
         }
         .Trending_Market{
         margin-top:20px;
         }
         .css-1xwhrzr {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         max-width: 100%;
         width: 48px;
         height: 48px;
         }
         .css-16df996 {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 500;
         font-size: 20px;
         line-height: 28px;
         padding-top: 20px;
         padding-bottom: 12px;
         color:#263674;
         }
         .css-1u4ulvl {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 400;
         font-size: 16px;
         line-height: 24px;
         color:var(--text-gray);
         }
         @media(min-width:768px){
         .Trending_Market.one .top-card:nth-child(odd){
         background:transparent;
         }
         .Trending_Market.second .top-card:nth-child(even){
         background:transparent;
         }
         .Trending_Market.second{
         margin-top:0px;
         }
         .css-16df996 {
         padding-top: 20px;
         padding-bottom: 12px;
         }
         }
         @media screen and (min-width: 1023px)
         {
         .css-16df996 {
         padding-top: 26px;
         padding-bottom: 18px;
         }}
         .Trending_Market .top-card:hover{
         background:#263674 !important;
         color:var(--text-yellow);
         }
         .Trending_Market .top-card:hover  .content-title{
         color:white;
         }
         @media (max-width:768px){
         .wm-gold-tbl .lf-select_coin-to{
         max-width:45%;
         }
         }
         /*@media (max-width:576px){*/
         /*    .wm-gold-tbl .lf-select_coin-to{*/
         /*        max-width:100%;*/
         /*    }*/
         /*}*/
      </style>
      <style>
          @media(min-width:768px) and (max-width:1200px){
            table.wm-customize-table{

            }
          }
         @media(max-width:767px){
         tr td:last-child{
         padding:0px!important;
         }
         .btn-yellow{
         padding: 4px 10px!important;
         margin: 5px 10px!important;
         }
         }
         .table-mobile-header {
         padding:auto!important;
         }
         .mobile-tr-head{
         display:none;
         }
         * {
         box-sizing: border-box;
         }
         .wm-customize-table p {
         display: none;
         }
         table.wm-customize-table {
         width: 100%;
         border-collapse: collapse;
         text-align: left;
         overflow: hidden;
         }
         table.wm-customize-table td, table th {
         border-top: 1px solid #ecf0f1;
         padding: 10px;
         }
         table.wm-customize-table td {
         border-left: 1px solid #ecf0f1;
         border-right: 1px solid #ecf0f1;
         }
         table.wm-customize-table th {
         background-color: #d7d7d7;
         }
         table.wm-customize-table tr:nth-of-type(even) td {
         background-color: #fff0b547;
         }
         table.wm-customize-table .total th {
         background-color: white;
         }
         table.wm-customize-table .total td {
         text-align: right;
         font-weight: 700;
         }
         .wm-customize-table .table-mobile-header {
         display: none;
         }
         @media only screen and (max-width: 767px) {
         .wm-customize-table p {
         display: block;
         font-weight: bold;
         }
         table.wm-customize-table tr td:not(:first-child), table tr th:not(:first-child), table tr td:not(.total-val) {
         display: none;
         }
         table.wm-customize-table tr:nth-of-type(even) td:first-child {
         background-color: #fff0b547;
         }
         table.wm-customize-table tr:nth-of-type(odd) td:first-child {
         background-color: white;
         }
         table.wm-customize-table tr:nth-of-type(even) td:not(:first-child) {
         background-color: white;
         }
         table.wm-customize-table tr th:first-child {
         width: 100%;
         display: block;
         }
         table.wm-customize-table tr th:not(:first-child) {
         width: 40%;
         transition: transform 0.4s ease-out;
         transform: translateY(-9999px);
         position: relative;
         z-index: 0;
         }
         table.wm-customize-table tr td:not(:first-child) {
         transition: transform 0.4s ease-out;
         transform: translateY(-9999px);
         width: 60%;
         position: relative;
         z-index: 0;
         }
         table.wm-customize-table tr td:first-child {
         display: block;
         cursor: pointer;
         }
         table.wm-customize-table tr.total th {
         width: 25%;
         display: inline-block;
         }
         table.wm-customize-table tr td.total-val {
         display: inline-block;
         transform: translateY(0);
         width: 75%;
         }
         }
         @media only screen and (max-width: 300px) {
         table.wm-customize-table tr th:not(:first-child) {
         width: 50%;
         font-size: 14px;
         }
         table.wm-customize-table tr td:not(:first-child) {
         width: 50%;
         font-size: 14px;
         }
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="breadcrumbs-box shadow-sm" id="wm-gold-top">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 text-center pt-lg-0 order-lg-2 text-center">
                  <img src="https://wealthmark.io/-institutional/cover-graphic.png" alt="Your Trusted Platform in Digital Institutions" title="Your Trusted Platform in Digital Institutions" class="img-fluid max-width-350px">
               </div>
               <div class="col-lg-6 d-flex flex-column justify-content-center pt-lg-0 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="fs-1"> Wealthmark WM Gold </h1>
                  <div class="text">Built by the world's largest digital asset exchange, Wealth Mark Institutional offers  unparalleled access to digital asset solutions for VIP clients and institutions.</div>
                  <div class="mt-4 mb-4">
                     <a href="#" class="btn-yellow w-auto shadow">Get Started</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue wm-gold-tbl">
         <div class="container">
            <div class="row">
               <div class="col-md-12 mb-3">
                  <div class="sec-title mb-4">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">WM Gold Premium Plan</h2>
                  </div>
               </div>
               <div class="col-md-12">
                  <ul class="tab-pills-btn">
                     <li>
                        <a href="javascript:void(0)"  class="pills-btn active">Spot Grid</a>
                     </li>
                     <li>
                        <a href="javascript:void(0)"  class="pills-btn">Futures Grid</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-12 mb-3">
                  <div class="wm-gold-filter-div">
                     <div class="lf-select_coin-to">
                        <div class="coin-swap-from m-0">
                           <input type="text" value="31" class="lf-select-coin-to-input">
                           <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                        </div>
                        <div class="lf-select-coin-to-active-div">
                           <div class="wm-dropdown-optn-item-div">
                              <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                              <div class="wm-dropdown-optn-item-txt">INR</div>
                           </div>
                        </div>
                        <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                           <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                 <i class="bi bi-search wm-dropdown-search-icn"></i>
                                 <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                 <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                              </div>
                           </div>
                           <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">
                              <li role="option" id="demo_id" title="demo_id" class="wm-dropdown-optn-item ">
                                 <div class="wm-dropdown-optn-item-inner">
                                    <div class="wm-dropdown-optn-item-div">
                                       <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                                       <div class="wm-dropdown-optn-item-txt">Text</div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="lf-select_coin-to">
                        <div class="coin-swap-from m-0">
                           <input type="text" value="31" class="lf-select-coin-to-input">
                           <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                        </div>
                        <div class="lf-select-coin-to-active-div">
                           <div class="wm-dropdown-optn-item-div">
                              <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                              <div class="wm-dropdown-optn-item-txt">INR</div>
                           </div>
                        </div>
                        <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                           <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                 <i class="bi bi-search wm-dropdown-search-icn"></i>
                                 <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                 <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                              </div>
                           </div>
                           <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">
                              <li role="option" id="demo_id" title="demo_id" class="wm-dropdown-optn-item ">
                                 <div class="wm-dropdown-optn-item-inner">
                                    <div class="wm-dropdown-optn-item-div">
                                       <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                                       <div class="wm-dropdown-optn-item-txt">Text</div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="lf-select_coin-to">
                        <div class="coin-swap-from m-0">
                           <input type="text" value="31" class="lf-select-coin-to-input">
                           <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                        </div>
                        <div class="lf-select-coin-to-active-div">
                           <div class="wm-dropdown-optn-item-div">
                              <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                              <div class="wm-dropdown-optn-item-txt">INR</div>
                           </div>
                        </div>
                        <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                           <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                 <i class="bi bi-search wm-dropdown-search-icn"></i>
                                 <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                 <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                              </div>
                           </div>
                           <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">
                              <li role="option" id="demo_id" title="demo_id" class="wm-dropdown-optn-item ">
                                 <div class="wm-dropdown-optn-item-inner">
                                    <div class="wm-dropdown-optn-item-div">
                                       <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                                       <div class="wm-dropdown-optn-item-txt">Text</div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="lf-select_coin-to">
                        <div class="coin-swap-from m-0">
                           <input type="text" value="31" class="lf-select-coin-to-input">
                           <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                        </div>
                        <div class="lf-select-coin-to-active-div">
                           <div class="wm-dropdown-optn-item-div">
                              <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                              <div class="wm-dropdown-optn-item-txt">INR</div>
                           </div>
                        </div>
                        <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                           <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                 <i class="bi bi-search wm-dropdown-search-icn"></i>
                                 <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                 <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                              </div>
                           </div>
                           <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">
                              <li role="option" id="demo_id" title="demo_id" class="wm-dropdown-optn-item ">
                                 <div class="wm-dropdown-optn-item-inner">
                                    <div class="wm-dropdown-optn-item-div">
                                       <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                                       <div class="wm-dropdown-optn-item-txt">Text</div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="lf-select_coin-to">
                        <div class="coin-swap-from m-0">
                           <input type="text" value="31" class="lf-select-coin-to-input">
                           <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                        </div>
                        <div class="lf-select-coin-to-active-div">
                           <div class="wm-dropdown-optn-item-div">
                              <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                              <div class="wm-dropdown-optn-item-txt">INR</div>
                           </div>
                        </div>
                        <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                           <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                 <i class="bi bi-search wm-dropdown-search-icn"></i>
                                 <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                 <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                              </div>
                           </div>
                           <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">
                              <li role="option" id="demo_id" title="demo_id" class="wm-dropdown-optn-item ">
                                 <div class="wm-dropdown-optn-item-inner">
                                    <div class="wm-dropdown-optn-item-div">
                                       <img class="wm-dropdown-optn-item-img" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" title="coin" alt="coin">
                                       <div class="wm-dropdown-optn-item-txt">Text</div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12 mb-3">
                        <div class="sec-title text-left  mb-4">
                           <span class="title">Welcome to Wealthmark</span>
                           <h2 class="heading-h2">WM Rank/Market Listing</h2>
                        </div>
                     </div>
                  </div>
                  <div class="custom-table-wrapper">
                     <table class="wm-customize-table">
                        <thead>
                           <tr class="table-headers">
                              <th>Rank/Market</th>
                              <th>Running Time</th>
                              <th>ROI</th>
                              <th>PNL(USD</th>
                              <th>Copy Popularity</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="mobile-tr-head">GMT/BUSD 1</td>
                              <th class="table-mobile-header">Rank/Market</th>
                              <td>GMT/BUSD 1</td>
                              <th class="table-mobile-header">Running Time</th>
                              <td>1y 16d 23h 53m	</td>
                              <th class="table-mobile-header">ROI</th>
                              <td>871.41 %</td>
                              <th class="table-mobile-header">PNL(USD)</th>
                              <td>7,660.19</td>
                              <th class="table-mobile-header">Copy Popularity</th>
                              <td>12045</td>
                              <th class="table-mobile-header">Action</th>
                              <td><a class="btn btn-yellow shadow"> Subscribe</a></td>
                           </tr>
                           <tr>
                              <td class="mobile-tr-head">GMT/BUSD 2</td>
                              <th class="table-mobile-header">Rank/Market</th>
                              <td>GMT/BUSD 2</td>
                              <th class="table-mobile-header">Running Time</th>
                              <td>1y 16d 23h 53m	</td>
                              <th class="table-mobile-header">ROI</th>
                              <td>871.41 %</td>
                              <th class="table-mobile-header">PNL(USD)</th>
                              <td>7,660.19</td>
                              <th class="table-mobile-header">Copy Popularity</th>
                              <td>12045</td>
                              <th class="table-mobile-header">Action</th>
                              <td><a class="btn btn-yellow shadow"> Subscribe</a></td>
                           </tr>
                           <tr>
                              <td class="mobile-tr-head">GMT/BUSD 3</td>
                              <th class="table-mobile-header">Rank/Market</th>
                              <td>GMT/BUSD 3</td>
                              <th class="table-mobile-header">Running Time</th>
                              <td>1y 16d 23h 53m	</td>
                              <th class="table-mobile-header">ROI</th>
                              <td>871.41 %</td>
                              <th class="table-mobile-header">PNL(USD)</th>
                              <td>7,660.19</td>
                              <th class="table-mobile-header">Copy Popularity</th>
                              <td>12045</td>
                              <th class="table-mobile-header">Action</th>
                              <td><a class="btn btn-yellow shadow"> Subscribe</a></td>
                           </tr>
                           <tr>
                              <td class="mobile-tr-head">GMT/BUSD 4</td>
                              <th class="table-mobile-header">Rank/Market</th>
                              <td>GMT/BUSD 4</td>
                              <th class="table-mobile-header">Running Time</th>
                              <td>1y 16d 23h 53m	</td>
                              <th class="table-mobile-header">ROI</th>
                              <td>871.41 %</td>
                              <th class="table-mobile-header">PNL(USD)</th>
                              <td>7,660.19</td>
                              <th class="table-mobile-header">Copy Popularity</th>
                              <td>12045</td>
                              <th class="table-mobile-header">Action</th>
                              <td><a class="btn btn-yellow shadow"> Subscribe</a></td>
                           </tr>
                           <tr>
                              <td class="mobile-tr-head">GMT/BUSD 5</td>
                              <th class="table-mobile-header">Rank/Market</th>
                              <td>GMT/BUSD 5</td>
                              <th class="table-mobile-header">Running Time</th>
                              <td>1y 16d 23h 53m	</td>
                              <th class="table-mobile-header">ROI</th>
                              <td>871.41 %</td>
                              <th class="table-mobile-header">PNL(USD)</th>
                              <td>7,660.19</td>
                              <th class="table-mobile-header">Copy Popularity</th>
                              <td>12045</td>
                              <th class="table-mobile-header">Action</th>
                              <td><a class="btn btn-yellow shadow"> Subscribe</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!--<div class="col-md-12">-->
               <!--   <div class="">-->
               <!--      <div class="wm-tbl-row">-->
               <!--         <div class="one">-->
               <!--            <div class="subtitle">Rank/Market</div>-->
               <!--            <div class="title">-->
               <!--               <span class="number"></span>-->
               <!--               <span>GMT/BUSD</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="two">-->
               <!--            <div class="subtitle">Running Time</div>-->
               <!--            <div class="title">-->
               <!--               <span>1y 16d 23h 53m</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="theree">-->
               <!--            <div class="subtitle">ROI</div>-->
               <!--            <div class="title">-->
               <!--               <span class="text-green"> 871.41 %</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="four">-->
               <!--            <div class="subtitle">PNL(USD)</div>-->
               <!--            <div class="title">-->
               <!--               <span>7,660.19</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="five">-->
               <!--            <div class="subtitle">Copy Popularity</div>-->
               <!--            <div class="title">-->
               <!--               <span>12045</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="six">-->
               <!--            <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_1" onclick="OpenModalSubcscribe(this.id)">-->
               <!--            Subscribe-->
               <!--            </button>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <div class="wm-tbl-row">-->
               <!--         <div class="one">-->
               <!--            <div class="subtitle">Rank/Market</div>-->
               <!--            <div class="title">-->
               <!--               <span class="number"></span>-->
               <!--               <span>GMT/BUSD</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="two">-->
               <!--            <div class="subtitle">Running Time</div>-->
               <!--            <div class="title">-->
               <!--               <span>1y 16d 23h 53m</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="theree">-->
               <!--            <div class="subtitle">ROI</div>-->
               <!--            <div class="title">-->
               <!--               <span class="text-green"> 871.41 %</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="four">-->
               <!--            <div class="subtitle">PNL(USD)</div>-->
               <!--            <div class="title">-->
               <!--               <span>7,660.19</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="five">-->
               <!--            <div class="subtitle">Copy Popularity</div>-->
               <!--            <div class="title">-->
               <!--               <span>12045</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="six">-->
               <!--            <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_1" onclick="OpenModalSubcscribe(this.id)">-->
               <!--            Subscribe-->
               <!--            </button>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <div class="wm-tbl-row">-->
               <!--         <div class="one">-->
               <!--            <div class="subtitle">Rank/Market</div>-->
               <!--            <div class="title">-->
               <!--               <span class="number"></span>-->
               <!--               <span>GMT/BUSD</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="two">-->
               <!--            <div class="subtitle">Running Time</div>-->
               <!--            <div class="title">-->
               <!--               <span>1y 16d 23h 53m</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="theree">-->
               <!--            <div class="subtitle">ROI</div>-->
               <!--            <div class="title">-->
               <!--               <span class="text-green"> 871.41 %</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="four">-->
               <!--            <div class="subtitle">PNL(USD)</div>-->
               <!--            <div class="title">-->
               <!--               <span>7,660.19</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="five">-->
               <!--            <div class="subtitle">Copy Popularity</div>-->
               <!--            <div class="title">-->
               <!--               <span>12045</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="six">-->
               <!--            <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_1" onclick="OpenModalSubcscribe(this.id)">-->
               <!--            Subscribe-->
               <!--            </button>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <div class="wm-tbl-row">-->
               <!--         <div class="one">-->
               <!--            <div class="subtitle">Rank/Market</div>-->
               <!--            <div class="title">-->
               <!--               <span class="number"></span>-->
               <!--               <span>GMT/BUSD</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="two">-->
               <!--            <div class="subtitle">Running Time</div>-->
               <!--            <div class="title">-->
               <!--               <span>1y 16d 23h 53m</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="theree">-->
               <!--            <div class="subtitle">ROI</div>-->
               <!--            <div class="title">-->
               <!--               <span class="text-green"> 871.41 %</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="four">-->
               <!--            <div class="subtitle">PNL(USD)</div>-->
               <!--            <div class="title">-->
               <!--               <span>7,660.19</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="five">-->
               <!--            <div class="subtitle">Copy Popularity</div>-->
               <!--            <div class="title">-->
               <!--               <span>12045</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="six">-->
               <!--            <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_1" onclick="OpenModalSubcscribe(this.id)">-->
               <!--            Subscribe-->
               <!--            </button>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <div class="wm-tbl-row">-->
               <!--         <div class="one">-->
               <!--            <div class="subtitle">Rank/Market</div>-->
               <!--            <div class="title">-->
               <!--               <span class="number"></span>-->
               <!--               <span>GMT/BUSD</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="two">-->
               <!--            <div class="subtitle">Running Time</div>-->
               <!--            <div class="title">-->
               <!--               <span>1y 16d 23h 53m</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="theree">-->
               <!--            <div class="subtitle">ROI</div>-->
               <!--            <div class="title">-->
               <!--               <span class="text-green"> 871.41 %</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="four">-->
               <!--            <div class="subtitle">PNL(USD)</div>-->
               <!--            <div class="title">-->
               <!--               <span>7,660.19</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="five">-->
               <!--            <div class="subtitle">Copy Popularity</div>-->
               <!--            <div class="title">-->
               <!--               <span>12045</span>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--         <div class="six">-->
               <!--            <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_1" onclick="OpenModalSubcscribe(this.id)">-->
               <!--            Subscribe-->
               <!--            </button>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--   <div class="d-flex flex-wrap align-items-center justify-content-between mt-4">-->
               <!--      <div class="mb-2">-->
               <!--         <div class="fs-14 text-muted">-->
               <!--            Last updated on 2023-06-09 15:42:45.-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <div class="pagination-div mb-2">-->
               <!--         <button type="button" class="mirror pagination-back" aria-label="Previous page" disabled="">-->
               <!--            <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">-->
               <!--               <path fill-rule="evenodd" clip-rule="evenodd" d="M11.934 12l3.89 3.89-1.769 1.767L8.398 12l1.768-1.768 3.89-3.889 1.767 1.768-3.889 3.89z" fill="currentColor"></path>-->
               <!--            </svg>-->
               <!--         </button>-->
               <!--         <button type="button" aria-label="Page number 1" class="pagination-active" disabled="">1</button>-->
               <!--         <button type="button" aria-label="Page number 2" class="pagination-all">2</button>-->
               <!--         <button type="button" aria-label="Page number 3" class="pagination-all">3</button>-->
               <!--         <button type="button" aria-label="Page number 4" class="pagination-all">4</button>-->
               <!--         <button type="button" aria-label="Page number 5" class="pagination-all">5</button>-->
               <!--         <button type="button" class="mirror pagination-next" aria-label="Next page">-->
               <!--            <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">-->
               <!--               <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>-->
               <!--            </svg>-->
               <!--         </button>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
            </div>
         </div>
      </section>
      <section class="">
         <div class="container">
            <div class="row">
               <div class="col-md-12 mb-3">
                  <div class="sec-title text-left  mb-4">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">WM Gold Premium Plan</h2>
                  </div>
               </div>
            </div>
            <div class="wm-glod-plan scrollbar-style-h">
               <div class="css-1ka7jde">
                  <div class="card-title-box css-10nf7hq">
                     <div class="title-icon css-vurnku">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill="#76808F" d="M22 21H2v-2h20z"></path>
                           <path fill="url(#trade-spot-grid-g_svg__paint0_linear_1361_8087)" d="M2 3h20v14H2z"></path>
                           <mask id="trade-spot-grid-g_svg__a" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="17" style="mask-type: alpha;">
                              <path fill="#D9D9D9" d="M2 2h20v17H2z"></path>
                           </mask>
                           <g mask="url(#trade-spot-grid-g_svg__a)" stroke="#76808F">
                              <path d="M8.027 8.23L0 16.259M10.904 8.245l2.92 2.92M24.68 3.162l-8 8" stroke-width="2"></path>
                              <path d="M9.461 6.1l.707.706-.707.707-.707-.707zM15.251 11.877l.707.708-.707.707-.707-.707.707-.708z"></path>
                           </g>
                           <defs>
                              <linearGradient id="trade-spot-grid-g_svg__paint0_linear_1361_8087" x1="12" y1="3" x2="12" y2="17" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <div class="title-text css-1ds83c4">Spot Grid - 1</div>
                  </div>
                  <div class="card-content">Buy low and sell high 24/7 automatically with just one click.</div>
                  <div class="card-advantage-box">
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Volatile Markets</div>
                        </div>
                     </div>
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Preset Ranges</div>
                        </div>
                     </div>
                  </div>
                  <div class="css-1kj68nb">
                     <div class="card-arrowIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <span class="card-createText">Create</span>
                  </div>
               </div>
               <div class="css-1ka7jde">
                  <div class="card-title-box css-10nf7hq">
                     <div class="title-icon css-vurnku">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill="#76808F" d="M22 21H2v-2h20z"></path>
                           <path fill="url(#trade-spot-grid-g_svg__paint0_linear_1361_8087)" d="M2 3h20v14H2z"></path>
                           <mask id="trade-spot-grid-g_svg__a" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="17" style="mask-type: alpha;">
                              <path fill="#D9D9D9" d="M2 2h20v17H2z"></path>
                           </mask>
                           <g mask="url(#trade-spot-grid-g_svg__a)" stroke="#76808F">
                              <path d="M8.027 8.23L0 16.259M10.904 8.245l2.92 2.92M24.68 3.162l-8 8" stroke-width="2"></path>
                              <path d="M9.461 6.1l.707.706-.707.707-.707-.707zM15.251 11.877l.707.708-.707.707-.707-.707.707-.708z"></path>
                           </g>
                           <defs>
                              <linearGradient id="trade-spot-grid-g_svg__paint0_linear_1361_8087" x1="12" y1="3" x2="12" y2="17" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <div class="title-text css-1ds83c4">Spot Grid-2</div>
                  </div>
                  <div class="card-content">Buy low and sell high 24/7 automatically with just one click.</div>
                  <div class="card-advantage-box">
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Volatile Markets</div>
                        </div>
                     </div>
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Preset Ranges</div>
                        </div>
                     </div>
                  </div>
                  <div class="css-1kj68nb">
                     <div class="card-arrowIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <span class="card-createText">Create</span>
                  </div>
               </div>
               <div class="css-1ka7jde">
                  <div class="card-title-box css-10nf7hq">
                     <div class="title-icon css-vurnku">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill="#76808F" d="M22 21H2v-2h20z"></path>
                           <path fill="url(#trade-spot-grid-g_svg__paint0_linear_1361_8087)" d="M2 3h20v14H2z"></path>
                           <mask id="trade-spot-grid-g_svg__a" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="17" style="mask-type: alpha;">
                              <path fill="#D9D9D9" d="M2 2h20v17H2z"></path>
                           </mask>
                           <g mask="url(#trade-spot-grid-g_svg__a)" stroke="#76808F">
                              <path d="M8.027 8.23L0 16.259M10.904 8.245l2.92 2.92M24.68 3.162l-8 8" stroke-width="2"></path>
                              <path d="M9.461 6.1l.707.706-.707.707-.707-.707zM15.251 11.877l.707.708-.707.707-.707-.707.707-.708z"></path>
                           </g>
                           <defs>
                              <linearGradient id="trade-spot-grid-g_svg__paint0_linear_1361_8087" x1="12" y1="3" x2="12" y2="17" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <div class="title-text css-1ds83c4">Spot Grid - 3</div>
                  </div>
                  <div class="card-content">Buy low and sell high 24/7 automatically with just one click.</div>
                  <div class="card-advantage-box">
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Volatile Markets</div>
                        </div>
                     </div>
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Preset Ranges</div>
                        </div>
                     </div>
                  </div>
                  <div class="css-1kj68nb">
                     <div class="card-arrowIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <span class="card-createText">Create</span>
                  </div>
               </div>
               <div class="css-1ka7jde">
                  <div class="card-title-box css-10nf7hq">
                     <div class="title-icon css-vurnku">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill="#76808F" d="M22 21H2v-2h20z"></path>
                           <path fill="url(#trade-spot-grid-g_svg__paint0_linear_1361_8087)" d="M2 3h20v14H2z"></path>
                           <mask id="trade-spot-grid-g_svg__a" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="17" style="mask-type: alpha;">
                              <path fill="#D9D9D9" d="M2 2h20v17H2z"></path>
                           </mask>
                           <g mask="url(#trade-spot-grid-g_svg__a)" stroke="#76808F">
                              <path d="M8.027 8.23L0 16.259M10.904 8.245l2.92 2.92M24.68 3.162l-8 8" stroke-width="2"></path>
                              <path d="M9.461 6.1l.707.706-.707.707-.707-.707zM15.251 11.877l.707.708-.707.707-.707-.707.707-.708z"></path>
                           </g>
                           <defs>
                              <linearGradient id="trade-spot-grid-g_svg__paint0_linear_1361_8087" x1="12" y1="3" x2="12" y2="17" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                     </div>
                     <div class="title-text css-1ds83c4">Spot Grid - 4</div>
                  </div>
                  <div class="card-content">Buy low and sell high 24/7 automatically with just one click.</div>
                  <div class="card-advantage-box">
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Volatile Markets</div>
                        </div>
                     </div>
                     <div>
                        <div class="css-10nf7hq">
                           <div class="title-icon css-vurnku">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1uqrljd">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                           </div>
                           <div class="title-text css-1ds83c4">Preset Ranges</div>
                        </div>
                     </div>
                  </div>
                  <div class="css-1kj68nb">
                     <div class="card-arrowIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-1rd75c1">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <span class="card-createText">Create</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="css-1t9l1qk">
                     <img src="{{ asset('gold-1.png') }}" class="css-1xwhrzr" alt="Intuitive Automation" title="Intuitive Automation">
                     <div class="css-16df996">Intuitive Automation</div>
                     <div class="css-1u4ulvl">Set up your algorithmic bot and automate your orders in a few clicks with TWAP, VP algos, and Grid trading.</div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="css-1t9l1qk">
                     <img src="{{ asset('gold-2.png') }}" class="css-1xwhrzr" title="Trending strategies" alt="Trending strategies">
                     <div class="css-16df996">Trending strategies</div>
                     <div class="css-1u4ulvl">Set up your algorithmic bot and automate your orders in a few clicks with TWAP, VP algos, and Grid trading.</div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="css-1t9l1qk">
                     <img src="{{ asset('gold-3.png') }}" class="css-1xwhrzr" alt="Deep Liquidity" title="Deep Liquidity">
                     <div class="css-16df996">Deep Liquidity</div>
                     <div class="css-1u4ulvl">Set up your algorithmic bot and automate your orders in a few clicks with TWAP, VP algos, and Grid trading.</div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="">
         <div class="container">
            <div class="row">
               <div class="col-md-12 mb-3">
                  <div class="sec-title text-left  mb-4">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Trending Market Top 10</h2>
                  </div>
               </div>
               <div class="col-md-12">
                  <ul class="tab-pills-btn">
                     <li>
                        <a href="javascript:void(0)"  class="pills-btn active">Spot Grid</a>
                     </li>
                     <li>
                        <a href="javascript:void(0)"  class="pills-btn">Futures Grid</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <div class="Trending_Market one">
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                  </div>
                  <div class="Trending_Market second">
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                     <div class="top-card">
                        <div class="css-3j2kqe">
                           <div class="symbol-box css-vurnku">
                              <div class="symbol-icon">
                                 <!--<img src="https://bin.bnbstatic.com/image/admin_mgs_image_upload/20201110/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="css-1jrxz3i">-->
                                 <img class="css-1jrxz3i" src="{{ asset('96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                              </div>
                              <span class="symbol-text">BTC/USDT</span>
                           </div>
                           <span class="rank-number">#1</span>
                        </div>
                        <div class="content-box">
                           <div class="content-title">
                              <div class="css-759evp">
                                 <div class="css-1m1bey3">Total Strategies in Running</div>
                              </div>
                           </div>
                           <div class="content-body">4152</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="wm-pay-accordian-section bg-light-blue">
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
                        What is DeFi Staking?
                     </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">  DeFi (Decentralized Finance) is a way of providing financial services to users through smart contracts. Existing DeFi projects aim to provide higher annualized earnings for specific currencies.</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingTwo">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        About Wealthmark DeFi Staking
                     </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">There's a relatively high threshold for users of DeFi products. Wealthmark DeFi Staking acts on behalf of users to participate in certain DeFi products, obtains and distributes realized earnings, and helps users to participate in DeFi products with a single click.</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingThree">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the advantages of DeFi Staking?
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">1. Easy to use: You don't need to manage private keys, acquire resources, make trades, or perform other complicated tasks to participate in DeFi Staking. Wealthmark's one-stop service allows users to obtain generous online rewards without keeping an on-chain wallet. 2. No gas fee: Wealthmark Staking deposits users’ funds into smart contracts on users’ behalf, saving users on-chain gas fees.</div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-head" id="headingFour">
                     <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        After I participate in DeFi Staking, how is the earnings cycle calculated?
                     </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                     <div class="card-body">
                        <div class="text">Once funds are successfully allocated to DeFi Staking, earnings are calculated beginning at 00:00 (UTC) the following day. The minimum earnings calculation period is one day; earnings for a period of less than one day will not be included in the earnings distribution.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
      <script src="{{ asset('ordian_bootstrap.min.js') }}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script>
         $(window).on('resize', function() {

                 if ($(this).width() < 767) {
                    $('tr td:first-child').click(function(){

                       $(this).siblings().css({'display': 'inline-block'});

                       var $this = $(this);
                       setTimeout(function(){
                       $this.siblings().css('transform', 'translateY(0)');
                      },0);

                       $('tr td:first-child').not($(this)).siblings().css({'display': 'none', 'transform': 'translateY(-9999px)'});
                   });
                 } else if ($(this).width() > 767) {
                     //unbind click : name is not clickable when screen is > 700px
                     $( "tr td:first-child").unbind( "click" );
                     //remove with jquery added styles
                     $('tr td:first-child').siblings().css({'display': '', 'transform': ''});
                 }

         }).resize();
      </script>
   </body>
</html>
