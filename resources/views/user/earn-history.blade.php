<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/daterangepicker.css') }}" />
      <style>
         .sidebar-nav {
         display: block;
         }
      </style>
   </head>
   <body>

      @include('template.web_menu')
      <div class="dashboard-main ">
         @include('template.sidebar')
         <div class="w-100">
            <div class="container-fluid p-0">
               <div class="bg-light-blue p-3 w-100">
                  <div class="bg-white shadow-none border-0 px-4 py-3 mb-2 d-flex align-items-center justify-content-between">
                     <!--<span class="section-sub-title">Spot</span>-->
                     <h2 class="fw-bold mb-0">Simple Earn History</h2>
                     <a href="javascript:void(0)" class="btn-yellow d-flex" id="earnhistorymodal" onClick="open_modal_div(this.id)">
                     <i class="bi bi-download"></i>
                     <span class="ms-2 d-none d-md-block">Export</span>
                     </a>
                  </div>
                  <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">

                    <div class="dashboard-tabpills">
                        <div class="">
                           <div class="dashboard-card-body">
                              <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="earn-history-flexible-tab" data-bs-toggle="tab" data-bs-target="#earn-history-flexible" type="button" role="tab" aria-controls="earn-history-flexible" aria-selected="true">Flexible</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="history-locked-tab" data-bs-toggle="tab" data-bs-target="#history-locked" type="button" role="tab" aria-controls="history-locked" aria-selected="false">Locked</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="locked-savings-tab" data-bs-toggle="tab" data-bs-target="#locked-savings" type="button" role="tab" aria-controls="locked-savings" aria-selected="false">Locked Savings</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="earn-activities-tab" data-bs-toggle="tab" data-bs-target="#earn-activities" type="button" role="tab" aria-controls="earn-activities" aria-selected="false">Activities</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="history-trial-fund-tab" data-bs-toggle="tab" data-bs-target="#history-trial-fund" type="button" role="tab" aria-controls="history-trial-fund" aria-selected="false">Flexible Trial Fund</button>
                                 </li>
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                 <div class="tab-pane fade show active" id="earn-history-flexible" role="tabpanel" aria-labelledby="history-buy-tab">
                                    <div class="d-sm-flex align-items-center justify-content-between mt-2 py-2 mb-3 fillter-div-optn">
                                       <div class="d-sm-flex">
                                          <div class="me-2">
                                             <label class="mb-1 fs-12 fw-bold">Crypto</label>
                                             <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                                                <div class=" coin-swap-from m-0 min-height-40px">
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
                                                      <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
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
                                                               <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner selected">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="13" title="13" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="me-2">
                                             <label class="mb-1 fs-12 fw-bold">Crypto</label>
                                             <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                                                <div class=" coin-swap-from m-0 min-height-40px">
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
                                                      <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
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
                                                               <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner selected">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                      <li role="option" id="13" title="13" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                         <div class="wm-dropdown-optn-item-inner">
                                                            <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="me-2">
                                             <label class="mb-1 fs-12 fw-bold">Crypto</label>
                                             <div id="reportrange" class="max-width-350px border min-height-40px p-1 rounded d-flex align-items-center">
                                                <i class="bi bi-calendar"></i> &nbsp;
                                                <span></span> <i class="fa fa-caret-down"></i>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <div class="me-1">
                                             <label class="mb-1 fs-12 fw-bold d-block">&nbsp;</label>
                                             <a href="javascript:void(0)" class="btn-default d-inline-block">Reset</a>
                                          </div>
                                          <div class="me-1">
                                             <label class="mb-1 fs-12 fw-bold d-block">&nbsp;</label>
                                             <a href="javascript:void(0)" class="btn-yellow d-inline-block">Search</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row mt-3">
                                       <div class="col-md-12">
                                          <div class="tbl-convert-div">
                                             <table class="table table-hover tbl-to-div">
                                                <thead>
                                                   <th>Subscription Date</th>
                                                   <th>Product Name</th>
                                                   <th>Coin</th>
                                                   <th>Amount</th>
                                                   <th>Subscription type	</th>
                                                   <th>Status</th>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <div class="">20-02-22</div>
                                                      </td>
                                                      <td>USDT-BUSD</td>
                                                      <td>Coin</td>
                                                      <td>12,500</td>
                                                      <td>Online</td>
                                                      <td class="text-center">
                                                         <span class="bg-green-light p-1 rounded d-inline-block min-width-80px text-center"> Success</span>
                                                      </td>
                                                      <td class="arrow-open">
                                                         <span class="expand-row">
                                                         <i class="bi bi-chevron-down"></i>
                                                         </span>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="">20-02-22</div>
                                                      </td>
                                                      <td>USDT-BUSD</td>
                                                      <td>Coin</td>
                                                      <td>12,500</td>
                                                      <td>Online</td>
                                                      <td class="text-center">
                                                         <span class="bg-danger d-inline-block p-1 rounded min-width-80px text-white text-center"> Failed</span>
                                                      </td>
                                                      <td class="arrow-open">
                                                         <span class="expand-row">
                                                         <i class="bi bi-chevron-down"></i>
                                                         </span>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="">20-02-22</div>
                                                      </td>
                                                      <td>USDT-BUSD</td>
                                                      <td>Coin</td>
                                                      <td>12,500</td>
                                                      <td>Online</td>
                                                      <td class="text-center">
                                                         <span class="bg-whitesmoke p-1 d-inline-block rounded min-width-80px text-center"> Pending</span>
                                                      </td>
                                                      <td class="arrow-open">
                                                         <span class="expand-row">
                                                         <i class="bi bi-chevron-down"></i>
                                                         </span>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div id="tbl-append-here">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="history-locked" role="tabpanel" aria-labelledby="history-buy-tab">
                                    2
                                 </div>
                                 <div class="tab-pane fade" id="locked-savings" role="tabpanel" aria-labelledby="history-buy-tab">
                                    3
                                 </div>
                                 <div class="tab-pane fade" id="earn-activities" role="tabpanel" aria-labelledby="history-buy-tab">
                                    4
                                 </div>
                                 <div class="tab-pane fade" id="history-trial-fund" role="tabpanel" aria-labelledby="history-buy-tab">
                                    5
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="earnhistorymodal">
            <div class="hide">
               <div class="wm-custom-modal-diolog max-width-600px">
                  <div class="wm-custom-modal-body px-3">
                     <div class="wm-custom-modal-header m-0">
                        <span>Export Simple Earn History </span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                           <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <div class="container-fluid p-0 m-0">
                        <div class="row my-1">
                           <div class="col-md-12 col-lg-12 col-sm-12">
                              <label for="">Select: </label>
                           </div>
                           <div class="col-md-2 col-lg-2">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                 </div>
                                 <span class="ps-2">Flexible</span>
                              </div>
                           </div>
                           <div class="col-md-2 col-lg-2">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                 </div>
                                 <span class="ps-2">Locked</span>
                              </div>
                           </div>
                           <div class="col-md-3 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                 </div>
                                 <span class="ps-2">Locked Savings</span>
                              </div>
                           </div>
                           <div class="col-md-2 col-lg-2">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                 </div>
                                 <span class="ps-2">Activities</span>
                              </div>
                           </div>
                           <div class="col-md-3 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                 </div>
                                 <span class="ps-2">Flexible Trial Fund</span>
                              </div>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-md-4 col-lg-6 col-sm-6 col-xs-12 mt-3 mb-3">
                              <div class="label position-relative">
                                 <span
                                    class="payment-transation-txt pe-5">Coin</span>
                                 <div class="earn-search-div-main">
                                    <div class="lf-select_coin-to" id="earn-search-coin-filter">
                                       <div class=" coin-swap-from m-0">
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
                                          <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                             src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                          <div class="wm-dropdown-optn-item-div">
                                             <div id="select_coin_text" class="wm-dropdown-optn-item-txt">1 INCH
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
                                             <li role="option" id="21" title="21" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                         src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                                      <div class="wm-dropdown-optn-item-txt">AAVE</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="22" title="22" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                         src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                                      <div class="wm-dropdown-optn-item-txt">ACA</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="23" title="23" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: none;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                         src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                                      <div class="wm-dropdown-optn-item-txt">ACH</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="24" title="24" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                         src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                                      <div class="wm-dropdown-optn-item-txt">ACM</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="25" title="25" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner selected">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                         src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                                      <div class="wm-dropdown-optn-item-txt">ADA</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="26" title="26" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: none;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <img id="select_coin_img" class="wm-dropdown-optn-item-img"
                                                         src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                                      <div class="wm-dropdown-optn-item-txt">ADX</div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-6 col-sm-6 col-xs-12 mt-3 mb-3">
                              <div class="label position-relative">
                                 <span
                                    class="payment-transation-txt pe-5">Type</span>
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
                                       <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                                          <div class="wm-dropdown-optn-item-div">
                                             <div id="select_coin_text" class="wm-dropdown-optn-item-txt">Subscription</div>
                                          </div>
                                       </div>
                                       <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
                                          <div class="p-3">
                                             <div class=" wm-dropdown-srch-div">
                                                <div class="wm-input-prefix ">
                                                   <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
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
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <div class="wm-dropdown-optn-item-txt">Subscription</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="17" title="17" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <div class="wm-dropdown-optn-item-txt">Redemption</div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li role="option" id="14" title="14" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">
                                                   <div class="wm-dropdown-optn-item-div">
                                                      <div class="wm-dropdown-optn-item-txt">Interest</div>
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
                        <div class="row my-3">
                           <div class="col-md-12 col-lg-12 col-sm-12">
                              <label for="">Date: </label>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Last 24 hours</span>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Yesterday</span>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Last 2 weeks</span>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Month to date</span>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Past month</span>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Past 3 months</span>
                              </div>
                           </div>
                           <div class="col-md-4 col-lg-3">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom earn-history-below-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Past 6 months</span>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom" id="earn-history-six-months">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Custom - Within 6 months</span>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="lf-add-coin-div-active">
                                 <div class="wm-pool-radio-btn-custom" id="earn-history-above-six">
                                    <input type="radio" class="radio" name="select-history-time">&nbsp;
                                 </div>
                                 <span class="ps-2">Custom- Beyond 6 months</span>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12 my-3">
                              <div class="input-group input-daterange">
                                 <input type="text" name="daterange-modal" id="earn-history-modal-date"
                                    value="01/01/2018 - 01/15/2018" class="form-control " disabled />
                              </div>
                           </div>
                        </div>
                        <div class="row" id="generate-earn-history-report" style="display:none;">
                           <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                              <div class="text">History is displayed in UTC+0 time zone, and contains information before
                                 00:00.
                                 Generating history requires some time.
                              </div>
                              <br />
                              <a class="btn btn-yellow shadow my-3">Generate (5 times left) </a>
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead class="position-sticky">
                                       <tr>
                                          <th>Submission Time</th>
                                          <th>Statement Period</th>
                                          <th colspan="+2">Status</th>
                                       </tr>
                                    </thead>
                                    <tbody class="bn-table-tbody">
                                       <tr aria-hidden="true" class="bn-table-measure-row"
                                          style="height: 0px; font-size: 0px;">
                                          <td>
                                             <div>&nbsp;</div>
                                          </td>
                                          <td>
                                             <div>&nbsp;</div>
                                          </td>
                                          <td>
                                             <div>&nbsp;</div>
                                          </td>
                                          <td>
                                             <div>&nbsp;</div>
                                          </td>
                                       </tr>
                                       <tr data-row-key="1671260246088" class="bn-table-row bn-table-row-level-0">
                                          <td class="bn-table-cell">
                                             <span data-bn-type="text" class="css-vr1wsl">2022-12-17 12:27:26</span>
                                          </td>
                                          <td class="bn-table-cell">
                                             <div data-bn-type="text" class="css-vr1wsl">2022-12-16-2022-12-17</div>
                                          </td>
                                          <td class="bn-table-cell">
                                             <div class="css-wm-table-txt text-success generated-txt">Generating
                                             </div>
                                          </td>
                                          <td class="bn-table-cell">
                                             <div data-bn-type="text" class="css-1bkyy7e text-warning download-txt">
                                                Download in 30
                                                mins
                                             </div>
                                          </td>
                                       </tr>
                                       <tr data-row-key="1671260243519" class="bn-table-row bn-table-row-level-0">
                                          <td class="bn-table-cell">
                                             <div data-bn-type="text" class="css-vr1wsl">2022-12-17 12:27:23</div>
                                          </td>
                                          <td class="bn-table-cell">
                                             <div data-bn-type="text" class="css-vr1wsl">2022-12-16-2022-12-17</div>
                                          </td>
                                          <td class="bn-table-cell">
                                             <div class="css-wm-table-txt  text-success generated-txt">Generating
                                             </div>
                                          </td>
                                          <td class="bn-table-cell">
                                             <div data-bn-type="text" class="css-1bkyy7e text-warning download-txt">
                                                Download
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="d-flex align-items-center  mt-3 w-100 mb-3">
                              <button type="button" class="btn-yellow d-inline-block border-0 me-2" >Export Excel</button>
                              <button type="button" class="btn-blue d-inline-block  border-0" >Export PDF</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      @include('template.web_footer')
      <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
      <script type="text/javascript">
         $(function() {

             var start = moment().subtract(29, 'days');
             var end = moment();

             function cb(start, end) {
                 $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
             }

             $('#reportrange').daterangepicker({
                 startDate: start,
                 endDate: end,
                 ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                 }
             }, cb);

             cb(start, end);

         });
      </script>
   </body>
</html>
