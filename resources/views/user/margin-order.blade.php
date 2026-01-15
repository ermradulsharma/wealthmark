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
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
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

        <div class="bg-light-blue p-3 w-100 container-fluid" id="earn-main-container">
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="col-12">
                    <h2 class="fw-bold mb-0 ps-1">Margin Order</h2>
                </div>
            </div>


<div class="bg-white shadow-none border-0 px-4 py-3 mb-2">

            <div class="row">


                <div class="d-sm-flex align-items-center justify-content-between mt-2 py-2 mb-3 fillter-div-optn">
                     <div class="d-sm-flex">
                        <div class="label position-relative me-2">
                            <span
                                class="payment-transation-txt pe-5">Filter</span>
                                <div class="earn-search-div-main">
                                <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                                    <div class=" coin-swap-from m-0 min-height-40px">
                                        <input type="text" value="16" class="lf-select-coin-to-input">
                                        <div class="wm-input-suffix ">
                                            <div class="lf-select-coin-to-drpd">
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">

                                        <div class="wm-dropdown-optn-item-div">
                                            <div id="select_coin_text" class="wm-dropdown-optn-item-txt">Trailing Stop</div>
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


                                                        <div class="wm-dropdown-optn-item-txt">All</div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li role="option" id="17" title="17" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">Limit Order</div>
                                                    </div>


                                                </div>
                                            </li>
                                            <li role="option" id="14" title="14" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: none;">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">Stop-Limit Order</div>


                                                    </div>
                                                </div>
                                            </li>
                                            <li role="option" id="32" title="32" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">

                                                        <div class="wm-dropdown-optn-item-txt">Limit-Maker</div>
                                                    </div>


                                                </div>
                                            </li>
                                            <li role="option" id="34" title="34" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner selected">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">Trailing Stop</div>
                                                    </div>


                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="label position-relative me-2">
                            <span
                                class="payment-transation-txt pe-5">Pair</span>
                            <div class="earn-search-div-main">
                                <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                                    <div class=" coin-swap-from m-0 min-height-40px">
                                        <input type="text" value="16" class="lf-select-coin-to-input">
                                        <div class="wm-input-suffix ">
                                            <div class="lf-select-coin-to-drpd">
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">

                                        <div class="wm-dropdown-optn-item-div">
                                            <div id="select_coin_text" class="wm-dropdown-optn-item-txt">All</div>
                                        </div>
                                    </div>

                                    <div class="wm-dropdown-div  wm-dropdown-div-open">
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
                                            <li role="option" id="16" title="16" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">

                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">All</div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li role="option" id="17" title="17" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">BNB/BTC</div>
                                                    </div>


                                                </div>
                                            </li>
                                            <li role="option" id="14" title="14" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>


                                                    </div>
                                                </div>
                                            </li>
                                            <li role="option" id="32" title="32" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">TRX/BTC</div>
                                                    </div>


                                                </div>
                                            </li>
                                            <li role="option" id="34" title="34" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner selected">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">XRP/BTC</div>
                                                    </div>


                                                </div>
                                            </li>
                                            <li role="option" id="13" title="13" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">
                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">ETH/BTC</div>
                                                    </div>
                                                </div>
                                            </li>
                                             <li role="option" id="13" title="13" class="wm-dropdown-optn-item"
                                                onclick="changeSrc2(this.id)">
                                                <div class="wm-dropdown-optn-item-inner">
                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">BNB/USDT</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="label position-relative me-2">
                            <span
                                class="payment-transation-txt pe-5">Side</span>
                                <div class="earn-search-div-main">
                                <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                                    <div class=" coin-swap-from m-0 min-height-40px">
                                        <input type="text" value="16" class="lf-select-coin-to-input">
                                        <div class="wm-input-suffix ">
                                            <div class="lf-select-coin-to-drpd">
                                                <i class="bi bi-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">

                                        <div class="wm-dropdown-optn-item-div">
                                            <div id="select_coin_text" class="wm-dropdown-optn-item-txt">All</div>
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


                                                        <div class="wm-dropdown-optn-item-txt">All</div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li role="option" id="17" title="17" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">Buy</div>
                                                    </div>


                                                </div>
                                            </li>
                                            <li role="option" id="14" title="14" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: none;">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>


                                                    </div>
                                                </div>
                                            </li>
                                            <li role="option" id="32" title="32" class="wm-dropdown-optn-item "
                                                onclick="changeSrc2(this.id)" style="display: list-item;">
                                                <div class="wm-dropdown-optn-item-inner">


                                                    <div class="wm-dropdown-optn-item-div">


                                                        <div class="wm-dropdown-optn-item-txt">Sell</div>
                                                    </div>


                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

            <div class="d-flex align-items-center">
                            <div class="me-1">
                                <span class="payment-transation-txt pe-5 d-block">&nbsp;</span>
                                <a href="#" class="btn-default desabled d-inline-flex align-items-center">
                                <span>Cancel All</span>
                                <!--<i class="ms-2 bi bi-caret-down-fill"></i>-->
                                </a>
                            </div>
                     </div>
                </div>



            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-3">


            <div class="dashboard-tabpills">
                <div class="">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="margin-order-cross-tab" data-bs-toggle="tab"
                                    data-bs-target="#margin-order-cross" type="button" role="tab"
                                    aria-controls="margin-order-cross" aria-selected="true">Cross</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="margin-order-isolated-tab" data-bs-toggle="tab"
                                    data-bs-target="#margin-order-isolated" type="button" role="tab"
                                    aria-controls="margin-order-isolated" aria-selected="false">Isolated</button>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="margin-order-cross" role="tabpanel"
                            aria-labelledby="margin-order-cross-tab">
                            <div class="table-responsive scrollbar-style" id="margin-order-table">
                            </div>
                              <div class="col-md-12">
                                  <div class="tbl-convert-div">
                       <table class="table table-hover tbl-to-div">
                          <thead>
                                  <th>Date </th>
                                            <th>Pair </th>
                                            <th>Type </th>
                                            <th>Side </th>
                                            <th>Price </th>
                                            <th>Amount </th>
                                            <th>Filled </th>
                                            <th>Total </th>
                                            <th>Trigger Conditions </th>
                                            <th>Action </th>
                        </thead>
                           <tbody>
                                  <tr>
                           <td><div class="">20-02-22</div></td>
                           <td>USDT-BUSD</td>
                           <td>Coin</td>

                          <td>USDT-BUSD</td>
                           <td>Coin</td>

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
                           <td><div class="">20-02-22</div></td>
                           <td>USDT-BUSD</td>
                           <td>Coin</td>

                          <td>USDT-BUSD</td>
                           <td>Coin</td>

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
                           <td><div class="">20-02-22</div></td>
                           <td>USDT-BUSD</td>
                           <td>Coin</td>

                          <td>USDT-BUSD</td>
                           <td>Coin</td>

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

                           </tbody>
                       </table>
                   </div>
                   <div id="tbl-append-here">

                   </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="margin-order-isolated" role="tabpanel"
                            aria-labelledby="margin-order-isolated-tab">
                          2 Tab
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

    @include('template.web_footer')



</body>

</html>
