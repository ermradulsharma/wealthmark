<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
      <!--<meta content="" name="description">-->
      <!--<meta content="" name="keywords">-->
      <!--<meta name="theme-color" content="#287aff">-->
      <!--<link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">-->
      <!--<link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">-->
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
      @include('template.web_css')
      <style>
         .availble-amt-txt {
         position: absolute;
         right: 20px;
         top: 38px;
         }
         .popup-img {
         height: 100px;
         width: auto;
         margin-bottom: 1rem;
         }
         .input-icon {
         height: 20px;
         }
         .transfer .form-control:disabled,
         .form-control[readonly] {
         background-color: #fff;
         opacity: 1;
         }
         .input-icon-contain {
         position: absolute;
         top: 31px;
         left: 20px;
         color: #707a8a;
         font-weight: bold;
         }
         .btn-check:focus+.btn-outline-warning,
         .btn-outline-warning:focus {
         box-shadow: none;
         }
         .transfer .btn-outline-warning {
         color: #222222;
         border-color: #ffc107;
         margin-right: 1rem;
         border-radius: 2rem !important;
         }
         .transfer .btn-check:active+.btn-outline-warning,
         .btn-check:checked+.btn-outline-warning,
         .btn-outline-warning.active,
         .btn-outline-warning.dropdown-toggle.show,
         .btn-outline-warning:active {
         color: #222222;
         background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
         border-color: #ffc107;
         }
         .sidebar-nav {
         display: block;
         }
         #preloader {
         display: none !important;
         }
         @media (max-width: 450px) {
         .balance-details .dashboard-card-header {
         display: block;
         }
         .dashboard-card-heading {
         margin-bottom: 10px;
         display: block;
         }
         .balance-details .dashboard-card-header .btn-theme-sm {
         margin-left: 0px;
         }
         #progressbar li {
         width: 33% !important;
         }
         }
         /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/
         @media (max-width: 992px) {
         .hide_on_max_dashboard_992 {
         display: none !important;
         }
         }
         /* .dashboard-main{
         margin-top:10px !important;
         } */
         .hide_on_dashboard {
         display: none !important;
         }
         header {
         box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
         background: white;
         z-index: 9999999999 !important;
         }
         .sidebar-btn-open {
         font-size: 30px;
         color: #242424;
         }
         @media (max-width: 992px) {
         .sidebar.active {
         display: block;
         top: 0px !important;
         position: fixed !important;
         right: 0 !important;
         left: auto !important;
         }
         .dashboard-sidebar {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: fixed;
         inset: 0px;
         z-index: 9999;
         flex-direction: row-reverse;
         background-color: rgba(0, 0, 0, 0.1);
         display: none;
         transition: all 0.5s ease;
         }
         .dashboard-sidebar-flex {
         display: flex !important;
         }
         }
         /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/
         .modal-dialog {
         max-width: 400px;
         margin: 1.75rem auto;
         }
         #jex-container-box .mt-5 {
         margin-top: 10rem !important;
         }
         a.text-theme-yellow {
         color: #fdc116;
         transition: 0.1s;
         font-size: 14px;
         }
         #jex-container-box .small,
         small {
         font-size: .8em;
         color: gray;
         }
         #jex-container-box .btn-group {
         position: relative;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .change-icon {
         box-sizing: border-box;
         min-width: 0px;
         color: rgb(240, 185, 11);
         font-size: 48px;
         fill: rgb(240, 185, 11);
         width: .8em;
         height: .8em;
         display: block;
         margin: auto;
         padding-top: 0px;
         }
         .earn-search-div-main {
         display: contents;
         }
         .coin-swap-from {
         border: 1px solid #ededed;
         min-height: 48px;
         }
         .lbl-heading {
         display: inline-block;
         float: left;
         }
         @media(max-width: 320px) {
         #jex-container-box .btn-group {
         position: relative;
         display: block;
         }
         .btn-group>.btn-group:not(:last-child)>.btn,
         .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
         border-top-right-radius: 0;
         border-bottom-right-radius: 0;
         margin-bottom: 10px;
         }
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <div class="dashboard-main">
         @include('template.sidebar')
         <div class="container-fluid p-0">
            <section class="dashboard-breadcrumb mb-2rem">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <h2 class="fw-bold mb-0">Transfer</h2>
                     </div>
                  </div>
               </div>
            </section>
            <div class="container" id="jex-container-box">
               <div class="row justify-content-center mt-5">
                  <div class="col-xl-5 col-lg-6 col-md-8">
                     <div class="card">
                        <div class="card-body transfer">
                           <div class="row g-0 gap-y-3">
                              <div class="col-6 text-left">
                                 <h5 class="fw-bold">Transfer to JEX</h5>
                              </div>
                              <div class="col-6 text-end">
                                 <a href="" class="text-theme-yellow"> Visit JexPay &nbsp; | &nbsp; </a><a
                                    href="" class="text-theme-yellow"> Transfer History</a>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 text-left">
                                 <small>JexPay: Your safest, fastest and easiest peer-to-peer trading platform
                                 </small>
                              </div>
                           </div>
                           <hr>
                           <div class="row gap-y-3">
                              <div class="col-lg-5 position-relative">
                                 <label for="" class="lbl-heading">From</label>
                                 <input type="text" class="form-control" disabled />
                                 <div class="input-icon-contain">
                                    <img src="{{asset('img/header-icons/buy-crypto/card-deposit.svg')}}"
                                       alt="" class="input-icon" />
                                    <span class="fs-14">Spot Wallet</span>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <div class="change-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none"
                                       class="mirror css-970acu">
                                       <path
                                          d="M25.83 30.79l-1.41-1.41 4.39-4.39H15.65V23H28.8l-4.38-4.38 1.41-1.41L32.62 24l-6.79 6.79z"
                                          fill="currentColor"></path>
                                       <path
                                          d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z"
                                          fill="currentColor"></path>
                                    </svg>
                                 </div>
                              </div>
                              <div class="col-lg-5 position-relative">
                                 <label for="" class="lbl-heading">To</label>
                                 <input type="text" class="form-control" disabled />
                                 <div class="input-icon-contain">
                                    <img src="{{asset('img/dashboard-icons/jex.png') }}" alt=""
                                       class="input-icon" />
                                    <span class="fs-14">Spot Wallet</span>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="dropdown-theme">
                                    <label for="" class="form-label lbl-heading">Coin</label>
                                    <div class="earn-search-div-main">
                                       <div class="lf-select_coin-to" id="earn-search-coin-filter">
                                          <div class=" coin-swap-from m-0">
                                             <input type="text" value="16" class="lf-select-coin-to-input">
                                             <div class="wm-input-suffix ">
                                                <div class="lf-select-coin-to-drpd">
                                                   <i class="bi bi-chevron-down"></i>
                                                </div>
                                             </div>
                                          </div>
                                          <div
                                             class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                                             <div class="wm-dropdown-optn-item-div">
                                                <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                   src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                <div id="select_coin_text"
                                                   class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                             </div>
                                          </div>
                                          <div class="wm-dropdown-div  wm-dropdown-div-open"
                                             style="display: none;">
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
                                                   <input type="text" class="wm-dropdown-search-input"
                                                      value="">
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
                                             <ul role="listbox"
                                                class="wm-dropdown-list wm-dropdown-list-css">
                                                <li role="option" id="16" title="16"
                                                   class="wm-dropdown-optn-item "
                                                   onclick="changeSrc2(this.id)"
                                                   style="display: list-item;">
                                                   <div class="wm-dropdown-optn-item-inner">
                                                      <div class="wm-dropdown-optn-item-div">
                                                         <img class="wm-dropdown-optn-item-img"
                                                            src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                         <div class="wm-dropdown-optn-item-txt">BTC/USD
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li role="option" id="17" title="17"
                                                   class="wm-dropdown-optn-item "
                                                   onclick="changeSrc2(this.id)"
                                                   style="display: list-item;">
                                                   <div class="wm-dropdown-optn-item-inner">
                                                      <div class="wm-dropdown-optn-item-div">
                                                         <img class="wm-dropdown-optn-item-img"
                                                            src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                         <div class="wm-dropdown-optn-item-txt">BNB/BUSD
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li role="option" id="14" title="14"
                                                   class="wm-dropdown-optn-item "
                                                   onclick="changeSrc2(this.id)" style="display: none;">
                                                   <div class="wm-dropdown-optn-item-inner">
                                                      <div class="wm-dropdown-optn-item-div">
                                                         <img class="wm-dropdown-optn-item-img"
                                                            src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                         <div class="wm-dropdown-optn-item-txt">ETH/DAI
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li role="option" id="32" title="32"
                                                   class="wm-dropdown-optn-item "
                                                   onclick="changeSrc2(this.id)"
                                                   style="display: list-item;">
                                                   <div class="wm-dropdown-optn-item-inner">
                                                      <div class="wm-dropdown-optn-item-div">
                                                         <img class="wm-dropdown-optn-item-img"
                                                            src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                         <div class="wm-dropdown-optn-item-txt">USDT/BNB
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li role="option" id="34" title="34"
                                                   class="wm-dropdown-optn-item "
                                                   onclick="changeSrc2(this.id)"
                                                   style="display: list-item;">
                                                   <div class="wm-dropdown-optn-item-inner selected">
                                                      <div class="wm-dropdown-optn-item-div">
                                                         <img class="wm-dropdown-optn-item-img"
                                                            src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                         <div class="wm-dropdown-optn-item-txt">USDT/ETH
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li role="option" id="13" title="13"
                                                   class="wm-dropdown-optn-item "
                                                   onclick="changeSrc2(this.id)" style="display: none;">
                                                   <div class="wm-dropdown-optn-item-inner">
                                                      <div class="wm-dropdown-optn-item-div">
                                                         <img class="wm-dropdown-optn-item-img"
                                                            src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                         <div class="wm-dropdown-optn-item-txt">BTC/ETH
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 col-lg-12 position-relative">
                                 <label for="" class="form-label lbl-heading">Amount</label>
                                 <label for="" class="form-label availble-amt-txt">Available: <span
                                    class="text-warning">01 INCH</span></label>
                                 <input type="number" placeholder="0" class="form-control" />
                              </div>
                              <div class="col-12">
                                 <label for="" class="form-label lbl-heading">24h Withdraw Limit: <span
                                    class="text-theme-yellow">0</span> &nbsp;/ &nbsp;10000
                                 USDT</label><br><br>
                                 <div class="btn-group" role="group"
                                    aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                       autocomplete="off" checked>
                                    <label class="btn btn-outline-warning" for="btnradio1">25%</label>
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                       autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btnradio2">50%</label>
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                       autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btnradio3">75%</label>
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4"
                                       autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btnradio4">100%</label>
                                 </div>
                              </div>
                              <div class="col-12 pt-3">
                                 <a type="button" class="btn-theme text-center w-100" href="">Connect JEX</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Payment Method Modal -->
      <div class="modal fade" id="jex" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="jexLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header border-0">
                  <!-- <h5 class="modal-title" id="jexLabel">WealthMark Jex</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="text-center">
                     <img src="{{asset('img/jexpay-login-img.png') }}" class="popup-img" alt="">
                  </div>
                  <p class="para text-center">
                     Please visit Jexpay and use Wealthmark Login to connect your Wealthmark account to your JexPay
                     account.
                  </p>
                  <a type="button" class="btn-theme text-center w-100" href="">Connect JEX</a>
               </div>
            </div>
         </div>
      </div>
      </div>
      @include('template.web_footer')
      <script type="text/javascript">
         window.onload = () => {
             $('#jex').modal('show');
         }
      </script>
      <script>
        //  $('.tabs').on('click', function() {
        //      $('.tabs').removeClass('active');
        //      $(this).addClass('active');
        //  });
      </script>
      <script>
        //  $('.coin-swap-from').click(function() {
        //      $(this).siblings(".wm-dropdown-div").toggle();
        //  });
        //  $('.payment-transation-txt').click(function() {
        //      $(this).siblings(".wm-dropdown-div").toggle();
        //  });

        //  function changeSrc2(id) {
        //      const li = id;
        //      $(".lf-select-coin-to-active-value #select_coin_img").attr('src', $("#" + li + ' ' +
        //          ".wm-dropdown-optn-item-img").attr('src'));
        //      $(".lf-select-coin-to-active-value #select_coin_text").html($("#" + li + ' ' + ".wm-dropdown-optn-item-txt")
        //          .html());
        //      $("#" + li).children('.wm-dropdown-optn-item-inner').addClass('selected');
        //      $("#" + li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass(
        //          'selected');
        //      $(".wm-dropdown-div").hide();
        //  };

        //  $(function() {
        //      $("#earn-search-coin-filter .wm-dropdown-search-input").on("keyup", function() {
        //          var value = $(this).val().toLowerCase();
        //          $("#earn-search-coin-filter .wm-dropdown-div ul li").filter(function() {
        //              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //          });
        //      });
        //  });

        //  $('.wm-dropdown-search-cross-icn').on('click', function(e) {
        //      $('.wm-dropdown-search-input').val('');
        //      $('.wm-dropdown-div ul li').show();
        //      return false;
        //  });

        //  function showtblfilter(id) {
        //      const divid = id;
        //      alert(divid);

        //      $("#" + divid).addClass('coins-filter-type-div').removeClass('coins-filter-inner-block-div');
        //      $("#" + divid).siblings('.coins-filter-type-div').addClass('coins-filter-inner-block-div').removeClass(
        //          'coins-filter-type-div');

        //  };




        //  $('.reward-alert-popup-div2').click(function() {
        //      $(this).parent().addClass('hide');
        //  });

        //  $('.product-card').click(function() {
        //      $(this).addClass('selected').siblings().removeClass('selected');
        //  });
        //  $('.coin-select').click(function(e) {
        //      $(this).siblings('.select').toggle()
        //  });
        //  $("#barrow_coin_list").on("keyup", function() {
        //      var value = $(this).val().toLowerCase();
        //      $("#barrow_dropdown .select-drop-inner .select-drop-list-div-main .select-drop-list-div ").filter(
        //          function() {
        //              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //          });
        //  });

        //  function changeSrc(id) {
        //      const li = id;
        //      $(".coin-select #barrow-coin-img").attr('src', $("#" + li + ' ' + ".barrow-drdn-img").attr('src'));
        //      $(".coin-select #barrow-coin-text").html($("#" + li + ' ' + ".barrow-drdn-text").html());
        //      $(".expand").hide();
        //  };
      </script>
   </body>
</html>
