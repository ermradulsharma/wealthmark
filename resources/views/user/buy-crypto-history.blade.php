<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Buy Crypto History</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="theme-color" content="#287aff">
    <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
    <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/daterangepicker.css') }}" />
    @include('template.web_css')
    <style>
        .sidebar-nav {
            display: block;
        }
    </style>
</head>
<body>

    @include('template.web_menu')
    <div class="dashboard-main mt-0">
        @include('template.sidebar')
        <div class="w-100">
            <div class="container-fluid p-0">
                <div class="bg-light-blue p-3 w-100">
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2 d-flex align-items-center justify-content-between">
                        <h2 class="fw-bold mb-0">Buy Crypto History</h2>
                        <a href="javascript:void(0)" class="btn-yellow d-flex" id="buyhistorymodal" onClick="open_modal_div(this.id)">
                            <i class="bi bi-download"></i>
                            <span class="ms-2 d-none d-md-block">Export</span>
                        </a>
                    </div>
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">

                          <div class="dashboard-tabpills">
                <div class="">
                    <div class="dashboard-card-body">
                        @include('user.buy_crypto_history_tab_menu')


                        <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="history-buy" role="tabpanel" aria-labelledby="history-buy-tab">

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
                        <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">-->
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
                        <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">-->
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
                        <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">-->
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



                            <div class="row">
                                <div class="col-md-12">
                                      <div class="tbl-convert-div">
                       <table class="table table-hover tbl-to-div">
                          <thead>
                                   <th>Method</th>
                                   <th>Amount</th>
                                   <th>Price</th>
                                   <th>Fees</th>
                                   <th>Final Amount	</th>
                                   <th>Date</th>
                                   <th class="text-center">Status</th>


                          </thead>
                           <tbody>
                               <!--<tr>-->
                               <!--    <td><div class="">Online</div></td>-->
                               <!--    <td>-->
                               <!--        <div class="d-flex align-items-center">-->
                               <!--            <img src="{{ asset('img/assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="max-width-20px me-2" />-->
                               <!--            <span class="fs-12 fw-bolder">BTC</span>-->
                               <!--        </div>-->
                               <!--     </td>-->
                               <!--    <td>-->
                               <!--        <span class="fs-14">$14214</span>-->
                               <!--    </td>-->
                               <!--    <td>12%</td>-->
                               <!--    <td>$12521</td>-->
                               <!--    <td>20-04-2023</td>-->
                               <!--    <td class="text-center">-->
                               <!--      <span class="bg-green-light p-1 rounded d-inline-block min-width-80px text-center"> Success</span> -->
                               <!--        </td>-->

                               <!--    <td class="arrow-open">-->
                               <!--        <span class="expand-row">-->
                               <!--            <i class="bi bi-chevron-down"></i>-->
                               <!--        </span>-->
                               <!--    </td>-->
                               <!--</tr>-->
                               <!--<tr>-->
                               <!--    <td><div class="">Online</div></td>-->
                               <!--    <td>-->
                               <!--        <div class="d-flex align-items-center">-->
                               <!--            <img src="{{ asset('img/assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="max-width-20px me-2" />-->
                               <!--            <span class="fs-12 fw-bolder">BTC</span>-->
                               <!--        </div>-->
                               <!--     </td>-->
                               <!--    <td>-->
                               <!--        <span class="fs-14">$14214</span>-->
                               <!--    </td>-->
                               <!--    <td>12%</td>-->
                               <!--    <td>$12521</td>-->
                               <!--    <td>20-04-2023</td>-->
                               <!--    <td class="text-center">-->
                               <!--      <span class="bg-whitesmoke p-1 d-inline-block rounded min-width-80px text-center"> Pending</span> -->
                               <!--        </td>-->

                               <!--    <td class="arrow-open">-->
                               <!--        <span class="expand-row">-->
                               <!--            <i class="bi bi-chevron-down"></i>-->
                               <!--        </span>-->
                               <!--    </td>-->
                               <!--</tr>-->
                               <!-- <tr>-->
                               <!--    <td><div class="">Online</div></td>-->
                               <!--    <td>-->
                               <!--        <div class="d-flex align-items-center">-->
                               <!--            <img src="{{ asset('img/assets/img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="max-width-20px me-2" />-->
                               <!--            <span class="fs-12 fw-bolder">BTC</span>-->
                               <!--        </div>-->
                               <!--     </td>-->
                               <!--    <td>-->
                               <!--        <span class="fs-14">$14214</span>-->
                               <!--    </td>-->
                               <!--    <td>12%</td>-->
                               <!--    <td>$12521</td>-->
                               <!--    <td>20-04-2023</td>-->
                               <!--    <td class="text-center">-->
                               <!--      <span class="bg-danger d-inline-block p-1 rounded min-width-80px text-white text-center"> Failed</span> -->
                               <!--        </td>-->

                               <!--    <td class="arrow-open">-->
                               <!--        <span class="expand-row">-->
                               <!--            <i class="bi bi-chevron-down"></i>-->
                               <!--        </span>-->
                               <!--    </td>-->
                               <!--</tr>-->

                           </tbody>
                       </table>
                   </div>
                   <div id="tbl-append-here">

                   </div>
                                </div>
                            </div>
                        </div>




                        <!--<div class="tab-pane fade" id="history-recurring-buy" role="tabpanel" aria-labelledby="history-recurring-buy-tab">-->
                        <!--   2-->
                        <!--</div>-->
                        <!--<div class="tab-pane fade" id="history-sell" role="tabpanel" aria-labelledby="history-sell-tab">-->
                        <!-- 3-->
                        <!--</div>-->
                        <!--<div class="tab-pane fade" id="history-wm-access" role="tabpanel" aria-labelledby="history-wm-access-tab">-->
                        <!--  4-->
                        <!--</div>-->
                        <!--<div class="tab-pane fade" id="history-exchange" role="tabpanel" aria-labelledby="history-exchange-tab">-->
                        <!--   5-->
                        <!--</div>-->

                        </div>
                    </div>
                </div>
            </div>



                    </div>
                </div>
            </div>




    </div>







    <!--<div class="buyhistorymodal">-->
    <!--    <div class="hide">-->


    <!--           <div class="wm-custom-modal-diolog max-width-450px">-->
    <!--            <div class="wm-custom-modal-body px-3">-->
    <!--               <div class="wm-custom-modal-header m-0">-->
    <!--                        <span>Export Buy History </span>-->
    <!--                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">-->
    <!--                          <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>-->
    <!--                        </svg>-->
    <!--                </div>-->


    <!--                <div class="container-fluid p-0 m-0">-->
    <!--                      <div class="row mb-3">-->
    <!--                    <div class="col-lg-12">-->
    <!--                        <label for="">-->
    <!--                            Date-->
    <!--                        </label>-->
    <!--                        <div class="input-group input-daterange">-->
    <!--                            <input type="text" name="daterange" -->
    <!--                                class="form-control" id="buy-crypto-picker"/>-->
    <!--                        </div>-->
    <!--                        <label for=""><small>The selected time range cannot exceed 3 months.</small></label>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row my-3">-->
    <!--                    <div class="col-md-4 col-lg-4">-->
    <!--                        <div class="lf-add-coin-div-active">-->
    <!--                            <div class="wm-pool-radio-btn-custom">-->
    <!--                                <input type="radio" class="radio" name="add-liquidity-item">&nbsp;-->
    <!--                            </div>-->
    <!--                            <span class="ps-2">Last 24 Hours</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4 col-lg-4">-->
    <!--                        <div class="lf-add-coin-div-active">-->
    <!--                            <div class="wm-pool-radio-btn-custom">-->
    <!--                                <input type="radio" class="radio" name="add-liquidity-item">&nbsp;-->
    <!--                            </div>-->
    <!--                            <span class="ps-2">Yesterday</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4 col-lg-4">-->
    <!--                        <div class="lf-add-coin-div-active">-->
    <!--                            <div class="wm-pool-radio-btn-custom">-->
    <!--                                <input type="radio" class="radio" name="add-liquidity-item">&nbsp;-->
    <!--                            </div>-->
    <!--                            <span class="ps-2">Last 2 Weeks</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row my-3">-->
    <!--                    <div class="col-md-4 col-lg-4">-->
    <!--                        <div class="lf-add-coin-div-active">-->
    <!--                            <div class="wm-pool-radio-btn-custom">-->
    <!--                                <input type="radio" class="radio" name="add-liquidity-item">&nbsp;-->
    <!--                            </div>-->
    <!--                            <span class="ps-2">Month to Date</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4 col-lg-4">-->
    <!--                        <div class="lf-add-coin-div-active">-->
    <!--                            <div class="wm-pool-radio-btn-custom">-->
    <!--                                <input type="radio" class="radio" name="add-liquidity-item">&nbsp;-->
    <!--                            </div>-->
    <!--                            <span class="ps-2">Past Month</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-4 col-lg-4">-->
    <!--                        <div class="lf-add-coin-div-active">-->
    <!--                            <div class="wm-pool-radio-btn-custom">-->
    <!--                                <input type="radio" class="radio" name="add-liquidity-item">&nbsp;-->
    <!--                            </div>-->
    <!--                            <span class="ps-2">Past 3 Months</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row mt-3">-->
    <!--                    <div class="col-md-12 col-lg-12">-->
    <!--                        <div class="label position-relative">-->
    <!--                                    <span class="payment-transation-txt">Status</span>-->
    <!--                                    <div class="earn-search-div-main">-->
    <!--                                        <div class="lf-select_coin-to" id="earn-search-coin-filter">-->
    <!--                                            <div class="coin-swap-from m-0 min-height-40px">-->
    <!--                                                <input type="text" value="16" class="lf-select-coin-to-input">-->
    <!--                                                <div class="wm-input-suffix ">-->
    <!--                                                    <div class="lf-select-coin-to-drpd">-->
    <!--                                                       <i class="bi bi-chevron-down"></i>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                            <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">-->
    <!--                                                <div class="wm-dropdown-optn-item-div">-->
    <!--                                                    <div id="select_coin_text" class="wm-dropdown-optn-item-txt">All-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                            <div class="wm-dropdown-div  wm-dropdown-div-open"  style="display: none;">-->
    <!--                                                <div class="p-3">-->
    <!--                                                    <div class=" wm-dropdown-srch-div">-->
    <!--                                                        <div class="wm-input-prefix ">-->
    <!--                                                            <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">-->
    <!--                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>-->
    <!--                                                            </svg>-->
    <!--                                                        </div>-->
    <!--                                                        <input type="text" class="wm-dropdown-search-input" value="">-->
    <!--                                                        <div class="wm-input-suffix ">-->
    <!--                                                            <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">-->
    <!--                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>-->
    <!--                                                            </svg>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                                <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">-->
    <!--                                                    <li role="option" id="36" title="36" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">-->
    <!--                                                        <div class="wm-dropdown-optn-item-inner">-->
    <!--                                                            <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                <div class="wm-dropdown-optn-item-txt">INJ-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="37" title="37" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">-->
    <!--                                                        <div class="wm-dropdown-optn-item-inner">-->
    <!--                                                            <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                <div class="wm-dropdown-optn-item-txt">USDP-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="38" title="38" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: none;">-->
    <!--                                                        <div class="wm-dropdown-optn-item-inner">-->
    <!--                                                            <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                <div class="wm-dropdown-optn-item-txt">FILDOWN-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="39" title="39" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">-->
    <!--                                                        <div class="wm-dropdown-optn-item-inner">-->
    <!--                                                            <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                <div class="wm-dropdown-optn-item-txt">DYDX-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="40" title="40" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">-->
    <!--                                                        <div class="wm-dropdown-optn-item-inner selected">-->
    <!--                                                            <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                <div class="wm-dropdown-optn-item-txt">QUINT-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="41" title="41" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: none;">-->
    <!--                                                        <div class="wm-dropdown-optn-item-inner">-->
    <!--                                                            <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                <div class="wm-dropdown-optn-item-txt">VAB-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                </ul>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                        <div class="row">-->



    <!--                            <div class="d-flex align-items-center col-12 mt-3 w-100 text-center mb-3">-->
    <!--                                <button type="button" class="btn-yellow d-inline-block  border-0 m-2" >Export Excel</button>-->
    <!--                                 <button type="button" class="btn-blue d-inline-block border-0 m-1" >Export Excel</button>-->
    <!--                            </div>-->

    <!--                        </div>-->

    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    </div>
        @include('template.web_footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>

    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
    </script>

</body>

</html>
