<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
    <!--<meta content="" name="description">-->
    <!--<meta content="" name="keywords">-->
    <!--<meta name="theme-color" content="#287aff">-->
    <!--<link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">-->
    <!--<link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">-->
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    @include('template.web_css')
    <style>
    .sidebar-nav{
        display:block;
    }


/*        .table-responsive {*/
/*    overflow-x: scroll;*/
/*    min-height: 170px;*/
/*}*/
/*.mynav ul li {*/
/*    border-bottom: 1px solid #efecec;*/
/*}*/
/*.mynav ul {*/
/*padding:0px;*/
/*padding-left:0px;*/
/*}*/
/*.mynav ul li a {*/
/*    color: #263674;*/
/*}*/
/*.mynav ul li:hover {*/
/*    background-color: #fdc116;*/
/*    color: white;*/
/*    cursor: pointer;*/
/*}*/

/*         .E-click {*/
/*        position: relative;*/
/*    }*/

/*    .E-dropdown {*/
/*    display: block;*/
/*    position: absolute;*/
/*    width: 90px;*/
/*    max-width: 200px;*/
/*    height: auto;*/
/*    overflow: hidden;*/
/*    background: #d3d3d3;*/
/*    z-index: 999999999;*/
/*    right: 57px;*/
/*    padding: 05px 10px 5px 5px;*/
/*    border-radius:5px;*/
/*}*/
/*    @media(min-width:768px) {*/

/*        .funding-more-option-content1 {*/
/*            display: none;*/
/*            position: absolute;*/
/*            right: 0;*/
/*        }*/

/*        .funding-more-option-content2 {*/
/*            display: none;*/
/*            position: absolute;*/
/*            right: 0;*/
/*        }*/

/*        .funding-more-option-content3 {*/
/*            display: none;*/
/*            position: absolute;*/
/*            right: 0;*/
/*        }*/

/*        .funding-more-option-content4 {*/
/*            display: none;*/
/*            position: absolute;*/
/*            right: 0;*/
/*        }*/

/*        .funding-more-option-content5 {*/
/*            display: none;*/
/*            position: absolute;*/
/*            right: 0;*/
/*        }*/
/*    }*/

/*    #fiat-spot-balance-table .action-btn-group {*/
/*        display: flex !important;*/
/*        justify-content: space-between;*/
/*    }*/

/*    .space-width {*/
/*        display: none;*/
/*    }*/

/*    .table-responsive {*/
/*        overflow: scroll;*/
/*    }*/

/*    #funding-left-side-block .btn-yellow {*/
/*        min-width: 100px;*/
/*    }*/

/*    .funding-more-option-content1 {*/
/*        display: none;*/
/*        position: absolute;*/
/*        background-color: #f1f1f1;*/
/*        min-width: 128px;*/
/*        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);*/
/*        z-index: 1;*/
/*    }*/

/*    .funding-more-option-content1 a {*/
/*        color: black;*/
/*        padding: 12px 16px;*/
/*        text-decoration: none;*/
/*        display: block;*/
/*        margin-right: 0;*/
/*    }*/

/*    .funding-more-option-content1 a:hover {*/
/*        background-color: #fdc116;*/
/*        color: white !important;*/
/*    }*/

/*    .funding-more-option-content2 {*/
/*        display: none;*/
/*        position: absolute;*/
/*        background-color: #f1f1f1;*/
/*        min-width: 128px;*/
/*        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);*/
/*        z-index: 1;*/
/*    }*/

/*    .funding-more-option-content2 a {*/
/*        color: black;*/
/*        padding: 12px 16px;*/
/*        text-decoration: none;*/
/*        display: block;*/
/*        margin-right: 0;*/
/*    }*/

/*    .funding-more-option-content2 a:hover {*/
/*        background-color: #fdc116;*/
/*        color: white !important;*/
/*    }*/

/*    .funding-more-option-content3 {*/
/*        display: none;*/
/*        position: absolute;*/
/*        background-color: #f1f1f1;*/
/*        min-width: 128px;*/
/*        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);*/
/*        z-index: 1;*/
/*    }*/

/*    .funding-more-option-content3 a {*/
/*        color: black;*/
/*        padding: 12px 16px;*/
/*        text-decoration: none;*/
/*        display: block;*/
/*        margin-right: 0;*/
/*    }*/

/*    .funding-more-option-content3 a:hover {*/
/*        background-color: #fdc116;*/
/*        color: white !important;*/
/*    }*/

/*    .funding-more-option-content4 {*/
/*        display: none;*/
/*        position: absolute;*/
/*        background-color: #f1f1f1;*/
/*        min-width: 128px;*/
/*        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);*/
/*        z-index: 1;*/
/*    }*/

/*    .funding-more-option-content4 a:hover {*/
/*        background-color: #fdc116;*/
/*        color: white !important;*/
/*    }*/

/*    .funding-more-option-content4 a {*/
/*        color: black;*/
/*        padding: 12px 16px;*/
/*        text-decoration: none;*/
/*        display: block;*/
/*        margin-right: 0;*/
/*    }*/

/*    .funding-more-option-content5 {*/
/*        display: none;*/
/*        position: absolute;*/
/*        background-color: #f1f1f1;*/
/*        min-width: 128px;*/
/*        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);*/
/*        z-index: 1;*/
/*    }*/

/*    .funding-more-option-content5 a {*/
/*        color: black;*/
/*        padding: 12px 16px;*/
/*        text-decoration: none;*/
/*        display: block;*/
/*        margin-right: 0;*/
/*    }*/

/*    .funding-more-option-content5 a:hover {*/
/*        background-color: #fdc116;*/
/*        color: white !important;*/
/*    }*/


/*    @media(max-width:576px) {*/
/*        #overview-fund-crypto-main .btn-yellow {*/
/*            display: block;*/
/*        }*/
/*    }*/

/*    .sidebar-nav {*/
/*        display: block;*/
/*    }*/

/*    #preloader {*/
/*        display: none !important;*/
/*    }*/

/*    @media (max-width: 450px) {*/
/*        .balance-details .dashboard-card-header {*/
/*            display: block;*/
/*        }*/

/*        .dashboard-card-heading {*/
/*            margin-bottom: 10px;*/
/*            display: block;*/
/*        }*/

/*        .balance-details .dashboard-card-header .btn-theme-sm {*/
/*            margin-left: 0px;*/
/*        }*/

/*        #progressbar li {*/
/*            width: 33% !important;*/
/*        }*/
/*    }*/

    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/
/*    @media (max-width: 992px) {*/
/*        .hide_on_max_dashboard_992 {*/
/*            display: none !important;*/
/*        }*/
/*    }*/

    /* .dashboard-main {
        margin-top: 10px !important;
    } */

/*    .hide_on_dashboard {*/
/*        display: none !important;*/
/*    }*/

/*    header {*/
/*        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;*/
/*        background: white;*/
/*        z-index: 9999999999 !important;*/
/*    }*/

/*    .sidebar-btn-open {*/
/*        font-size: 30px;*/
/*        color: #242424;*/
/*    }*/

/*    @media (max-width: 992px) {*/
/*        .sidebar.active {*/
/*            display: block;*/
/*            top: 0px !important;*/
/*            position: fixed !important;*/
/*            right: 0 !important;*/
/*            left: auto !important;*/
/*        }*/

/*        .dashboard-sidebar {*/
/*            box-sizing: border-box;*/
/*            margin: 0px;*/
/*            min-width: 0px;*/
/*            position: fixed;*/
/*            inset: 0px;*/
/*            z-index: 9999;*/
/*            flex-direction: row-reverse;*/
/*            background-color: rgba(0, 0, 0, 0.1);*/
/*            display: none;*/
/*            transition: all 0.5s ease;*/
/*        }*/

/*        .dashboard-sidebar-flex {*/
/*            display: flex !important;*/
/*        }*/
/*    }*/

/*    .wm-custom-modal-diolog {*/
/*        width: 500px;*/
/*        height: 500px;*/
/*    }*/

/*    .text-theme-yellow span {*/
/*        color: #6c6c6c;*/
/*    }*/

/*    .text-theme-yellow span:hover {*/
/*        color: #fdc116;*/
/*    }*/

    /* .asset-balence {
    font-size: calc(1.275rem + .3vw);
    color: #545454;
}
	 */
    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/
/*    .wm-custom-modal-diolog {*/
/*        width: 800px;*/
/*        height: 751px;*/
/*    }*/

/*    .nav-tabs .nav-link:hover {*/
/*        border-color: #ffffff #ffffff #dee2e6 !important;*/
/*        border-bottom: 2px solid #fdc116 !important;*/
/*    }*/

/*    .dashboard-main .container-fluid {*/
/*        padding: 0rem 12px !important;*/
/*    }*/

/*    @media(min-width:768px) and(max-width:991px) {*/
/*        .funding-video-tutorial {*/
/*            margin: 23px !important;*/
/*        }*/
/*    }*/


/*    @media(min-width:576px) and (max-width:992px) {*/
/*        .closeable-crypto-info svg {*/
/*            min-width: 18%;*/
/*        }*/
/*    }*/

/*    @media(max-width:480px) {*/
/*        .tutorial-video-skipable .col-6 {*/
/*            width: 100%;*/
/*        }*/
/*    }*/

/*    @media(max-width:768px) {*/
/*        .overview-btn-group .btn {*/
/*            margin-bottom: 10px;*/
/*        }*/
/*    }*/

/*    .closeable-crypto-info svg {*/
/*        min-width: 70px;*/
/*        width: 70px;*/
/*        margin-top: -30px;*/
/*        margin-right: 20px;*/
/*    }*/

/*    #funding-left-side-block {*/
/*        padding: 35px;*/
/*    }*/

/*    @media(max-width:576px) {*/
/*        #funding-left-side-block {*/
/*            padding: 20px;*/
/*        }*/
/*    }*/
/*                .nav-tabs .nav-link.active {*/
/*    color: #495057;*/
/*    background-color: #fff;*/
/*    border-color: #ffffff #ffffff #fdc116;*/
/*    border-bottom: 2px solid #fdc116;*/
/*}*/
    </style>
</head>

<body>
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')
        <div class="container-fluid p-0" id="payment-page-container">
            <div class="bg-light-blue p-3 w-100">
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    <h2 class="fw-bold mb-0">Funding</h2>
                    <div class="h-divider mt-2 mb-3"></div>
                    <div class="d-flex align-items-center flex-nowrap overflow-auto ">
                        <a class="btn btn-yellow shadow me-1">Deposit</a>
                        <a class="btn btn-blue shadow">Withdraw</a>
                        <a class="btn btn-blue shadow">Send</a>
                        <a class="btn btn-blue shadow overview-transfer-popup-modal">Transfer</a>
                        <a class="btn btn-blue shadow">Transaction History</a>
                    </div>
                </div>
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                     <div class="row overview-fund-crypto-box-head">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                            <h4>Fund Your Account</h4>
                            <div class="text">Wealthmark supports multiple options to fund your account. Find a method
                                that
                                suits you the most.</div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-2 skip-guide-txt">
                            <a class="text-warning text-decoration-underline" id="overview-skip-guide-btn">Skip
                                Guide</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                               <img src="{{ asset('assets/img/dashboard-icons/bank-account.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Buy Crypto</span>
                                              <span>If you already have crypto currency, you can use deposit function to transfer them from other trading platforms or wallets to your Wealthmark account.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="buy-crypto-btn" class="btn-yellow shadow-none">
                                              Buy
                                          </a>


                                      </div>
                                  </div>
                            <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                                <img src="{{ asset('assets/img/dashboard-icons/crypto_deposit.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Crypto Deposit</span>
                                              <span>Conveniently deposit crypto from another account to your Wealthmark account.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="buy-crypto-btn" class="btn-yellow shadow-none">
                                              Buy
                                          </a>


                                      </div>
                                  </div>
                            <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                               <img src="{{ asset('assets/img/dashboard-icons/Receive_Crypto.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Receive Crypto </span>
                                              <span>Easily and securely receive crypto from other Wealthmark accounts.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="buy-crypto-btn" class="btn-yellow shadow-none">
                                              Buy
                                          </a>


                                      </div>
                                  </div>
                        </div>
                    </div>

                </div>
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    <div class="row spot-balance-row mt-5" id="spot-fiat-balance">
                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center ">
                        <h5 class="mb-0">Estimated Balance
                            <i id="showbalence" class="bi bi-eye asset-eye-icon" onClick="showhideBal(this.id)"></i>
                            <i id="hidebalence" class="bi bi-eye-slash asset-eye-icon" style="display:none"
                                onClick="showhideBal(this.id)"></i>
                        </h5>
                    </div>
                    <div class="d-flex align-items-center mt-2 hide-when-astix asset-balence">

                        <span class="h4 mb-0 me-2 fw-bold est-balance">0.00000 </span><span
                            class="h4 mb-0 fw-bold est-balance"> BTC &nbsp;</span><span
                            class="h4 mb-0 est-balance fw-bold text-muted">≈ &nbsp; ₹0.000</span>
                    </div>
                    <div class="d-none astix mt-4">
                        <div class="text-dark h4">***Balance hidden***</div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="row gap-y-3" id="show-guidance-box">
                        <div class="col-md-12 col-lg-12">
                            <div class="guiding-funding d-flex">
                                <img src="{{ asset('assets/img/funding-guidance-icon.svg') }} " class="rounded"
                                    alt="">
                                <div class="ps-3">
                                    <h6>Guidance of Funding</h6>
                                    <a class="view-guidance btn btn-blue shadow btn-small">View Guidance </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" id="balance-table-fields">
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <div class="position-relative search-div">
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                        <i class="bi bi-search float-right"></i>
                    </div>

                </div>
                <div class="col-md-4 col-lg-3 mt-1 col-sm-6">
                    <div class="hide-smaller-values d-flex align-items-center ">
                        <input type="checkbox" id="hide-small-value" />
                        <a class="lf-add-coin-lbl-title ps-1" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="One coin staking will swap part of the portion value into another coin, then adding 2 coins. Swap transaction and slippage fees will affect your portion yield.">Hide
                            Small Balances </a>
                    </div>
                </div>

            </div>
            <div class="row mt-4">
                <!--<div class="col-md-12 col-lg-12">-->
                <!--    <div class="table-responsive" style="">-->
                <!--        <table class="wm-table">-->
                <!--            <thead>-->
                <!--                <tr>-->
                <!--                    <th class="stickyTop" style="text-align:start" colspan="+2">-->
                <!--                        <div class="broker-tb-first-th">-->
                <!--                            <div class="wm-tbl-column-div">-->
                <!--                                <p class="wm-tbl-column-title" title="Assets">Assets</p>-->
                <!--                                <span class=" space-width"></span>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                    <th class="stickyTop" style="text-align:start">-->
                <!--                        <div class="bGlLSM">-->
                <!--                            <div class="wm-tbl-column-div">-->
                <!--                                <span class=" space-width"></span>-->
                <!--                                <p class="wm-tbl-column-title" title="Total Amount"> Total Amount</p>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                    <th class="stickyTop" style="text-align:start">-->
                <!--                        <div>-->
                <!--                            <div class="bGlLSM">-->
                <!--                                <div class="wm-tbl-column-div">-->
                <!--                                    <span class=" space-width"></span>-->
                <!--                                    <p class="wm-tbl-column-title" title="Available">Available</p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                    <th class="stickyTop" style="text-align:start">-->
                <!--                        <div>-->
                <!--                            <div class="bGlLSM">-->
                <!--                                <div class="wm-tbl-column-div">-->
                <!--                                    <span class=" space-width"></span>-->
                <!--                                    <p class="wm-tbl-column-title" title="In Order">Frozen</p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                    <th class="stickyTop" style="text-align:start">-->
                <!--                        <div>-->
                <!--                            <div class="bGlLSM">-->
                <!--                                <div class="wm-tbl-column-div">-->
                <!--                                    <span class=" space-width"></span>-->
                <!--                                    <p class="wm-tbl-column-title" title="BTC Value">BTC Value</p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                    <th class="stickyTop" style="text-align:start">-->
                <!--                        <div class="">-->
                <!--                            <div class="wm-tbl-column-div">-->
                <!--                                <span class=" space-width"></span>-->
                <!--                                <p class="wm-tbl-column-title" title="Action">Action</p>-->
                <!--                            </div>-->
                <!--                            <div class="wm-tbl-info-dv">-->

                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                    <th class="stickyTop" style="text-align:start">-->
                <!--                        <div>-->
                <!--                            <div class="bGlLSM">-->
                <!--                                <div class="wm-tbl-column-div">-->
                <!--                                    <span class=" space-width"></span>-->
                <!--                                    <p class="wm-tbl-column-title">&nbsp;</p>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </th>-->
                <!--                </tr>-->
                <!--            </thead>-->
                <!--            <tbody id="fiat-spot-balance-table">-->
                <!--                <tr class="balance-low-value">-->
                <!--                    <td style="text-align: start;" class="">-->
                <!--                        <div class="d-flex align-items-center">-->
                <!--                            <a href="#" class="wm-link" data-bs-toggle="offcanvas"-->
                <!--                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">-->
                <!--                                <div class="broker-tbl-coin-div-main">-->
                <!--                                    <img class="coin-logo"-->
                <!--                                        src="{{ asset('assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} "-->
                <!--                                        loading="lazy" alt="BTC logo">-->

                <!--                                </div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                    </td>-->
                <!--                    <td style="text-align: end;">-->
                <!--                        <div class="asset-balence">-->
                <!--                            <a href="#" class="wm-link">-->
                <!--                                <div class="name-area ">-->
                <!--                                    <p class="broker-tbl-coin-title">USDT</p>-->
                <!--                                    <div class="coin-item-symbol-div">-->
                <!--                                        <div class="coin-nm-mob">1</div>-->
                <!--                                        <p color="text3" class="coin-nm-color coin-item-symbol">-->
                <!--                                            BTC</p>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                    </td>-->
                <!--                    <td style="text-align: end;">-->
                <!--                        <span class="broker-tbl-price-up asset-balence">-->
                <!--                            <span class="icon-Caret-up"></span>0.00% </span>-->
                <!--                    </td>-->
                <!--                    <td style="text-align: end;">-->
                <!--                        <span class="broker-tbl-price-up asset-balence">-->
                <!--                            <span class="icon-Caret-up"></span>0.00% </span>-->
                <!--                    </td>-->
                <!--                    <td style="text-align: end;">-->
                <!--                        <span class="broker-tbl-price-up asset-balence">-->
                <!--                            <span class="icon-Caret-up"></span>0.00% </span>-->
                <!--                    </td>-->
                <!--                    <td style="text-align: end;">-->
                <!--                        <span class="broker-tbl-price-down asset-balence">-->
                <!--                            <span class="icon-Caret-down"></span>0.00% </span>-->
                <!--                    </td>-->
                <!--                    <td class="action-btn-group  d-flex">-->
                <!--                        <a class="text-warning">Deposit</a>-->
                <!--                        <a class="text-warning">Receive</a>-->
                <!--                        <a href="{{ url( app()->getLocale(), 'convert') }}"  class="text-warning">Convert</a>-->
                <!--                            <div class="text-warning fiat-trade-dropdown-link1">-->
                <!--                            <div class="trade-click earn-box">-->
                <!--                                <div class="E-click fw-normal"> <i-->
                <!--                                    class="bi bi-three-dots"></i></div>-->
                <!--                                <div class="E-dropdown" style="display: none;">-->
                <!--                                    <nav class="mynav">-->
                <!--                                        <ul>-->
                <!--                                            <li><a href="javascript:void(0);">Send</a></li>-->
                <!--                                            <li><a href="javascript:void(0);">Withdrawa</a></li>-->
                <!--                                            <li><a href="javascript:void(0);">Transfer</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </nav>-->
                <!--                                </div>-->
                <!--                            </div>-->


                <!--                        </div>-->
                <!--                    </td>-->

                <!--                </tr>-->
                <!--            </tbody>-->
                <!--        </table>-->
                <!--    </div>-->
                <!--</div>-->


                 <div class="col-md-12">
                   <div class="tbl-convert-div">
                       <table class="table table-hover tbl-to-div">
                          <thead>
                                   <th>Assets</th>
                                   <th>Total Amount</th>
                                   <th>Available</th>
                                   <th>Frozen</th>
                                   <th>Value</th>
                                   <th>Action</th>


                          </thead>
                           <tbody>
                               <tr>
                                   <td>
                                       <div class="broker-tbl-coin-div-main">
                                                    <img class="coin-logo" src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png " loading="lazy" alt="BTC logo">

                                                </div>
                                   </td>
                                   <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                    <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                   <td>
                                       <div class="d-flex align-items-center w-100 justify-content-between flex-wrap">
                                        <a class="text-warning me-2">Deposit</a>
                                        <a class="text-warning me-2">Receive</a>
                                        <a href="{{ url( app()->getLocale(), 'convert') }}"  class="text-warning m2-1">Convert</a>
                                        <div class="text-warning fiat-trade-dropdown-link1 d-inline-block">
                                            <div class="trade-click earn-box">
                                                <div class="E-click fw-normal"> <i
                                                    class="bi bi-three-dots"></i></div>
                                                <div class="E-dropdown" style="display: none;">
                                                    <nav class="mynav">
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Send</a></li>
                                                            <li><a href="javascript:void(0);">Withdrawa</a></li>
                                                            <li><a href="javascript:void(0);">Transfer</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>
                               </tr>
                              <tr>
                                   <td>
                                       <div class="broker-tbl-coin-div-main">
                                                    <img class="coin-logo" src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png " loading="lazy" alt="BTC logo">

                                                </div>
                                   </td>
                                   <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                    <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                   <td>
                                       <div class="d-flex align-items-center w-100 justify-content-between flex-wrap">
                                        <a class="text-warning me-2">Deposit</a>
                                        <a class="text-warning me-2">Receive</a>
                                        <a href="{{ url( app()->getLocale(), 'convert') }}"  class="text-warning m2-1">Convert</a>
                                        <div class="text-warning fiat-trade-dropdown-link1 d-inline-block">
                                            <div class="trade-click earn-box">
                                                <div class="E-click fw-normal"> <i
                                                    class="bi bi-three-dots"></i></div>
                                                <div class="E-dropdown" style="display: none;">
                                                    <nav class="mynav">
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Send</a></li>
                                                            <li><a href="javascript:void(0);">Withdrawa</a></li>
                                                            <li><a href="javascript:void(0);">Transfer</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="broker-tbl-coin-div-main">
                                                    <img class="coin-logo" src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png " loading="lazy" alt="BTC logo">

                                                </div>
                                   </td>
                                   <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                    <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                   <td>
                                       <div class="d-flex align-items-center w-100 justify-content-between flex-wrap">
                                        <a class="text-warning me-2">Deposit</a>
                                        <a class="text-warning me-2">Receive</a>
                                        <a href="{{ url( app()->getLocale(), 'convert') }}"  class="text-warning m2-1">Convert</a>
                                        <div class="text-warning fiat-trade-dropdown-link1 d-inline-block">
                                            <div class="trade-click earn-box">
                                                <div class="E-click fw-normal"> <i
                                                    class="bi bi-three-dots"></i></div>
                                                <div class="E-dropdown" style="display: none;">
                                                    <nav class="mynav">
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Send</a></li>
                                                            <li><a href="javascript:void(0);">Withdrawa</a></li>
                                                            <li><a href="javascript:void(0);">Transfer</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="broker-tbl-coin-div-main">
                                                    <img class="coin-logo" src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png " loading="lazy" alt="BTC logo">

                                                </div>
                                   </td>
                                   <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                    <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                   <td>
                                       <div class="d-flex align-items-center w-100 justify-content-between flex-wrap">
                                        <a class="text-warning me-2">Deposit</a>
                                        <a class="text-warning me-2">Receive</a>
                                        <a href="{{ url( app()->getLocale(), 'convert') }}"  class="text-warning m2-1">Convert</a>
                                        <div class="text-warning fiat-trade-dropdown-link1 d-inline-block">
                                            <div class="trade-click earn-box">
                                                <div class="E-click fw-normal"> <i
                                                    class="bi bi-three-dots"></i></div>
                                                <div class="E-dropdown" style="display: none;">
                                                    <nav class="mynav">
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Send</a></li>
                                                            <li><a href="javascript:void(0);">Withdrawa</a></li>
                                                            <li><a href="javascript:void(0);">Transfer</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="broker-tbl-coin-div-main">
                                                    <img class="coin-logo" src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png " loading="lazy" alt="BTC logo">

                                                </div>
                                   </td>
                                   <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                    <td>
                                    <span class="broker-tbl-price-up asset-balence">
                                        <span class="icon-Caret-up"></span>
                                        0.00%
                                    </span>
                                    </td>
                                   <td>
                                       <span class="broker-tbl-price-down asset-balence">
                                            <span class="icon-Caret-down"></span>
                                            0.00%
                                        </span>
                                   </td>
                                   <td>
                                       <div class="d-flex align-items-center w-100 justify-content-between flex-wrap">
                                        <a class="text-warning me-2">Deposit</a>
                                        <a class="text-warning me-2">Receive</a>
                                        <a href="{{ url( app()->getLocale(), 'convert') }}"  class="text-warning m2-1">Convert</a>
                                        <div class="text-warning fiat-trade-dropdown-link1 d-inline-block">
                                            <div class="trade-click earn-box">
                                                <div class="E-click fw-normal"> <i
                                                    class="bi bi-three-dots"></i></div>
                                                <div class="E-dropdown" style="display: none;">
                                                    <nav class="mynav">
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Send</a></li>
                                                            <li><a href="javascript:void(0);">Withdrawa</a></li>
                                                            <li><a href="javascript:void(0);">Transfer</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            </div>
        </div>



        <!--<div class="container-fluid my-assets p-0 d-none">-->


            <!--<div class="row justify-content-between gap-y-3 find-your-account mt-3" id="overview-fund-crypto-main">-->


            <!--    <div class="col-xl-4 col-lg-5 col-md-6">-->
            <!--        <div class="funding-video-tutorial">-->
            <!--            <h5 class="mb-3">Video Tutorials</h5>-->
            <!--            <div class="tutorial-video-skipable">-->
            <!--                <div class="row gap-y-3 g-2 pb-3 mb-3 border-bottom ms-3">-->
            <!--                    <div class="col-sm-2 col-3">-->
            <!--                        <img src="{{asset('assets/img/buyCrypto.png') }}" class="w-100 rounded"-->
            <!--                            alt="">-->
            <!--                    </div>-->
            <!--                    <div class="col-sm-10 col-6">-->
            <!--                        <span>How to deposit crypto on Wealthmark</span>-->
            <!--                        <p class="mb-0 fs-14 text-muted">02:23</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="tutorial-video-skipable">-->
            <!--                <div class="row gap-y-3 g-2 pb-3 mb-3 border-bottom ms-3">-->
            <!--                    <div class="col-sm-2 col-3">-->
            <!--                        <img src="{{asset('assets/img/buyCrypto.png') }}" class="w-100 rounded"-->
            <!--                            alt="">-->
            <!--                    </div>-->
            <!--                    <div class="col-sm-10 col-6">-->
            <!--                        <span>How to deposit crypto on Wealthmark</span>-->
            <!--                        <p class="mb-0 fs-14 text-muted">02:23</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="row spot-balance-row mt-5" id="spot-fiat-balance">-->
            <!--    <div class="col-xl-9 col-lg-6 col-md-6 col-sm-6">-->
            <!--        <div class="d-flex align-items-center ">-->
            <!--            <h5 class="mb-0">Estimated Balance-->
            <!--                <i id="showbalence" class="bi bi-eye asset-eye-icon" onClick="showhideBal(this.id)"></i>-->
            <!--                <i id="hidebalence" class="bi bi-eye-slash asset-eye-icon" style="display:none"-->
            <!--                    onClick="showhideBal(this.id)"></i>-->
            <!--            </h5>-->
            <!--        </div>-->
            <!--        <div class="d-flex align-items-center mt-2 hide-when-astix asset-balence">-->

            <!--            <span class="h4 mb-0 me-2 fw-bold est-balance">0.00000 </span><span-->
            <!--                class="h4 mb-0 fw-bold est-balance"> BTC &nbsp;</span><span-->
            <!--                class="h4 mb-0 est-balance fw-bold text-muted">≈ &nbsp; ₹0.000</span>-->
            <!--        </div>-->
            <!--        <div class="d-none astix mt-4">-->
            <!--            <div class="text-dark h4">***Balance hidden***</div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">-->
            <!--        <div class="row gap-y-3" id="show-guidance-box">-->
            <!--            <div class="col-md-12 col-lg-12">-->
            <!--                <div class="guiding-funding d-flex">-->
            <!--                    <img src="{{ asset('assets/img/funding-guidance-icon.svg') }} " class="rounded"-->
            <!--                        alt="">-->
            <!--                    <div class="ps-3">-->
            <!--                        <h6>Guidance of Funding</h6>-->
            <!--                        <a class="view-guidance btn btn-blue shadow btn-small">View Guidance </a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->

            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row my-3" id="balance-table-fields">-->
            <!--    <div class="col-md-3 col-lg-3 position-relative" id="balance-filter-txbox">-->
            <!--        <input class="form-control" id="myInput" type="text" placeholder="Search..">-->
            <!--        <i class="bi bi-search position-absolute"></i>-->
            <!--    </div>-->
            <!--    <div class="col-md-4 col-lg-3 mt-1">-->
            <!--        <div class="hide-smaller-values">-->
            <!--            <input type="checkbox" id="hide-small-value" />-->
            <!--            <a class="lf-add-coin-lbl-title ps-1" data-bs-toggle="tooltip" data-bs-placement="right"-->
            <!--                title=""-->
            <!--                data-bs-original-title="One coin staking will swap part of the portion value into another coin, then adding 2 coins. Swap transaction and slippage fees will affect your portion yield.">Hide-->
            <!--                Small Balances </a>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->
            <!--<div class="row mt-4">-->
            <!--    <div class="col-md-12 col-lg-12">-->
            <!--        <div class="table-responsive" style="">-->
            <!--            <table class="wm-table">-->
            <!--                <thead>-->
            <!--                    <tr>-->
            <!--                        <th class="stickyTop" style="text-align:start" colspan="+2">-->
            <!--                            <div class="broker-tb-first-th">-->
            <!--                                <div class="wm-tbl-column-div">-->
            <!--                                    <p class="wm-tbl-column-title" title="Assets">Assets</p>-->
            <!--                                    <span class=" space-width"></span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                        <th class="stickyTop" style="text-align:start">-->
            <!--                            <div class="bGlLSM">-->
            <!--                                <div class="wm-tbl-column-div">-->
            <!--                                    <span class=" space-width"></span>-->
            <!--                                    <p class="wm-tbl-column-title" title="Total Amount"> Total Amount</p>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                        <th class="stickyTop" style="text-align:start">-->
            <!--                            <div>-->
            <!--                                <div class="bGlLSM">-->
            <!--                                    <div class="wm-tbl-column-div">-->
            <!--                                        <span class=" space-width"></span>-->
            <!--                                        <p class="wm-tbl-column-title" title="Available">Available</p>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                        <th class="stickyTop" style="text-align:start">-->
            <!--                            <div>-->
            <!--                                <div class="bGlLSM">-->
            <!--                                    <div class="wm-tbl-column-div">-->
            <!--                                        <span class=" space-width"></span>-->
            <!--                                        <p class="wm-tbl-column-title" title="In Order">Frozen</p>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                        <th class="stickyTop" style="text-align:start">-->
            <!--                            <div>-->
            <!--                                <div class="bGlLSM">-->
            <!--                                    <div class="wm-tbl-column-div">-->
            <!--                                        <span class=" space-width"></span>-->
            <!--                                        <p class="wm-tbl-column-title" title="BTC Value">BTC Value</p>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                        <th class="stickyTop" style="text-align:start">-->
            <!--                            <div class="">-->
            <!--                                <div class="wm-tbl-column-div">-->
            <!--                                    <span class=" space-width"></span>-->
            <!--                                    <p class="wm-tbl-column-title" title="Action">Action</p>-->
            <!--                                </div>-->
            <!--                                <div class="wm-tbl-info-dv">-->

            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                        <th class="stickyTop" style="text-align:start">-->
            <!--                            <div>-->
            <!--                                <div class="bGlLSM">-->
            <!--                                    <div class="wm-tbl-column-div">-->
            <!--                                        <span class=" space-width"></span>-->
            <!--                                        <p class="wm-tbl-column-title">&nbsp;</p>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </th>-->
            <!--                    </tr>-->
            <!--                </thead>-->
            <!--                <tbody id="fiat-spot-balance-table">-->
            <!--                    <tr class="balance-low-value">-->
            <!--                        <td style="text-align: start;" class="">-->
            <!--                            <div class="d-flex align-items-center">-->
            <!--                                <a href="#" class="wm-link" data-bs-toggle="offcanvas"-->
            <!--                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">-->
            <!--                                    <div class="broker-tbl-coin-div-main">-->
            <!--                                        <img class="coin-logo"-->
            <!--                                            src="{{ asset('assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} "-->
            <!--                                            loading="lazy" alt="BTC logo">-->

            <!--                                    </div>-->
            <!--                                </a>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td style="text-align: end;">-->
            <!--                            <div class="asset-balence">-->
            <!--                                <a href="#" class="wm-link">-->
            <!--                                    <div class="name-area ">-->
            <!--                                        <p class="broker-tbl-coin-title">USDT</p>-->
            <!--                                        <div class="coin-item-symbol-div">-->
            <!--                                            <div class="coin-nm-mob">1</div>-->
            <!--                                            <p color="text3" class="coin-nm-color coin-item-symbol">-->
            <!--                                                BTC</p>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </a>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td style="text-align: end;">-->
            <!--                            <span class="broker-tbl-price-up asset-balence">-->
            <!--                                <span class="icon-Caret-up"></span>0.00% </span>-->
            <!--                        </td>-->
            <!--                        <td style="text-align: end;">-->
            <!--                            <span class="broker-tbl-price-up asset-balence">-->
            <!--                                <span class="icon-Caret-up"></span>0.00% </span>-->
            <!--                        </td>-->
            <!--                        <td style="text-align: end;">-->
            <!--                            <span class="broker-tbl-price-up asset-balence">-->
            <!--                                <span class="icon-Caret-up"></span>0.00% </span>-->
            <!--                        </td>-->
            <!--                        <td style="text-align: end;">-->
            <!--                            <span class="broker-tbl-price-down asset-balence">-->
            <!--                                <span class="icon-Caret-down"></span>0.00% </span>-->
            <!--                        </td>-->
            <!--                        <td class="action-btn-group  d-flex">-->
            <!--                            <a class="text-warning">Deposit</a>-->
            <!--                            <a class="text-warning">Receive</a>-->
            <!--                            <a href="{{ url( app()->getLocale(), 'convert') }}"-->
            <!--                                class="text-warning">Convert</a>-->
            <!--                                <div class="text-warning fiat-trade-dropdown-link1">-->
            <!--                                <div class="trade-click earn-box">-->
            <!--                                    <div class="E-click fw-normal"> <i-->
            <!--                                        class="bi bi-three-dots"></i></div>-->
            <!--                                    <div class="E-dropdown" style="display: none;">-->
            <!--                                        <nav class="mynav">-->
            <!--                                            <ul>-->
            <!--                                                <li><a href="javascript:void(0);">Send</a></li>-->
            <!--                                                <li><a href="javascript:void(0);">Withdrawa</a></li>-->
            <!--                                                <li><a href="javascript:void(0);">Transfer</a></li>-->
            <!--                                            </ul>-->
            <!--                                        </nav>-->
            <!--                                    </div>-->
            <!--                                </div>-->


            <!--                            </div>-->
            <!--                        </td>-->

            <!--                    </tr>-->
            <!--                </tbody>-->
            <!--            </table>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->



        <!--</div>-->
    </div>



    <!--<div class="hide">-->
    <!--    <div class="wm-custom-modal-diolog">-->
    <!--        <div class="wm-custom-modal-body">-->
    <!--            <div class="wm-custom-modal-header">-->
    <!--                <span>Transfer</span>-->
    <!--                <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">-->
    <!--                    <path-->
    <!--                        d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"-->
    <!--                        fill="currentColor"></path>-->
    <!--                </svg>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-lg-12 col-sm-12">-->
    <!--                        <p>Internal transfers are free on Wealthmark.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div class="hide">-->
    <!--    <div class="wm-custom-modal-diolog">-->
    <!--        <div class="wm-custom-modal-body">-->
    <!--            <div class="wm-custom-modal-header">-->
    <!--                <span>Fund Your Account</span>-->
    <!--                <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">-->
    <!--                    <path-->
    <!--                        d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"-->
    <!--                        fill="currentColor"></path>-->
    <!--                </svg>-->
    <!--            </div>-->
    <!--            <div class="container">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-lg-12 col-sm-12">-->
    <!--                        <ul class="nav nav-tabs" id="fiat-funding-tab" role="tablist">-->
    <!--                            <li class="nav-item" role="presentation">-->
    <!--                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"-->
    <!--                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"-->
    <!--                                    aria-selected="true">Buy Crypto</button>-->
    <!--                            </li>-->
    <!--                            <li class="nav-item" role="presentation">-->
    <!--                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"-->
    <!--                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"-->
    <!--                                    aria-selected="false">Deposit Crypto</button>-->
    <!--                            </li>-->
    <!--                            <li class="nav-item" role="presentation">-->
    <!--                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"-->
    <!--                                    data-bs-target="#contact" type="button" role="tab" aria-controls="contact"-->
    <!--                                    aria-selected="false">Receive Crypto</button>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                        <div class="tab-content" id="fiat-funding-tabContent">-->
    <!--                            <div class="tab-pane fade show active" id="home" role="tabpanel"-->
    <!--                                aria-labelledby="home-tab">-->
    <!--                                <div class="col-lg-12 col-md-12 col-sm-12 funding-your-account-modal text-center">-->
    <!--                                    <div id="appendVideo" class="p-3 bg-white pt-1">-->
    <!--                                        <div class="video-section" style="">-->
    <!--                                            <video width="100%" id="video"-->
    <!--                                                class="video-js vjs-default-skin vjs-big-play-centered" controls=""-->
    <!--                                                data-setup="{}" preload="auto">-->
    <!--                                                <source src="" type="video/mp4">-->

    <!--                                            </video>-->
    <!--                                            <div id="circle-play-b" class="video-play-button">-->
    <!--                                                <span></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="video-overlay-bg" id="video-overlay-bg"></div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="text">Deposit fiat currencies (e.g. EUR) from your bank account to-->
    <!--                                        buy crypto.</div>-->
    <!--                                    <a class="text-warning">Learn More ></a>-->
    <!--                                    <br />-->
    <!--                                    <button type="button" class="btn btn-yellow shadow mt-2">Buy Now</button>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
    <!--                                <div class="col-lg-12 col-md-12 col-sm-12 funding-your-account-modal text-center">-->
    <!--                                    <div id="appendVideo" class="p-3 bg-white pt-1">-->
    <!--                                        <div class="video-section" style="">-->
    <!--                                            <video width="100%" id="video"-->
    <!--                                                class="video-js vjs-default-skin vjs-big-play-centered" controls=""-->
    <!--                                                data-setup="{}" preload="auto">-->
    <!--                                                <source src="" type="video/mp4">-->

    <!--                                            </video>-->
    <!--                                            <div id="circle-play-b" class="video-play-button">-->
    <!--                                                <span></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="video-overlay-bg" id="video-overlay-bg"></div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="text">If you already have crypto currency, you can use deposit-->
    <!--                                        function to transfer them from other trading platforms or wallets to your-->
    <!--                                        Wealthmark account.</div>-->
    <!--                                    <a class="text-warning">Learn More ></a>-->
    <!--                                    <br />-->
    <!--                                    <button type="button" class="btn btn-yellow shadow mt-2">Buy Now</button>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">-->
    <!--                                <div class="col-lg-12 col-md-12 col-sm-12 funding-your-account-modal text-center">-->
    <!--                                    <div id="appendVideo" class="p-3 bg-white pt-1">-->
    <!--                                        <div class="video-section" style="">-->
    <!--                                            <video width="100%" id="video"-->
    <!--                                                class="video-js vjs-default-skin vjs-big-play-centered" controls=""-->
    <!--                                                data-setup="{}" preload="auto">-->
    <!--                                                <source src="" type="video/mp4">-->

    <!--                                            </video>-->
    <!--                                            <div id="circle-play-b" class="video-play-button">-->
    <!--                                                <span></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="video-overlay-bg" id="video-overlay-bg"></div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="text">If you already have crypto currency, you can use deposit-->
    <!--                                        function to transfer them from other trading platforms or wallets to your-->
    <!--                                        Wealthmark account.</div>-->
    <!--                                    <a class="text-warning">Learn More ></a>-->
    <!--                                    <br />-->
    <!--                                    <button type="button" class="btn btn-yellow shadow mt-2">Buy Now</button>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
<div class="video-modal">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-600px">
            <div class="wm-custom-modal-body">
                <div class="wm-custom-modal-header">
                    <span>Fund Your Account</span>
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                        <path
                            d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 px-4">
                            <div class="fs-12 font-weight-bold text-center">
                              Wealthamrk  supports multiple options to fund your account. Find a method that suits you the best.
                            </div>
                            <div class="fund-div-outer">
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                              <img src="{{ asset('assets/img/dashboard-icons/bank-account.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Buy Crypto <span id="video-Buy" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Buy crypto directly with cash, hassle-free and suggested for new users.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="buy-crypto-btn" class="btn-yellow shadow-none">
                                              Buy
                                          </a>


                                      </div>
                                  </div>
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                              <img src="{{ asset('assets/img/dashboard-icons/crypto_deposit.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Crypto Deposit <span id="video-Deposit" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Conveniently deposit crypto from another account to your Wealthmark account.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="Deposit-btn" class="btn-default shadow-none">
                                              Deposit
                                          </a>


                                      </div>
                                  </div>
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                               <img src="{{ asset('assets/img/dashboard-icons/Receive_Crypto.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Receive Crypto <span id="video-Receive" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Easily and securely receive crypto from other Wealthmark accounts.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="Receive-btn" class="btn-default shadow-none">
                                              Receive
                                          </a>


                                      </div>
                                  </div>
    </div>
                        <div class="video-hide px-4">
                            <div id="appendVideo" class="py-3 bg-white">
                                <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                            </div>
                            <button type="button" id="video-close" class="btn btn-yellow shadow mt-4 mb-3">Back</button>
                        </div>


                         <div class="mb-1 p-2"></div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('template.web_footer')

    <script>
    // $(document).ready(function() {
        // $("#overview-skip-guide-btn").click(function() {
        //     $("#overview-fund-crypto-main").hide();
        //     $(".spot-balance-row").show();
        //     $("#spot-fiat-balance").css('display', 'flex');
        // });
        // $("#hide-small-value").click(function() {
        //     $(".balance-low-value").toggle();
        // });

        // $("#show-guidance-box").click(function() {
        //     $("#overview-fund-crypto-main").show();
        //     $("#show-guidance-box").hide();
        // });
        // $("#overview-skip-guide-btn").click(function() {
        //     $("#overview-fund-crypto-main").hide();
        //     $("#show-guidance-box").show();
        // });

        // $(".funding-more-option1").click(function() {
        //     $(".funding-more-option-content1").toggle();
        // });

        // $(".funding-more-option2").click(function() {
        //     $(".funding-more-option-content2").toggle();
        // });

        // $(".funding-more-option3").click(function() {
        //     $(".funding-more-option-content3").toggle();
        // });

        // $(".funding-more-option4").click(function() {
        //     $(".funding-more-option-content4").toggle();
        // });

        // $(".funding-more-option5").click(function() {
        //     $(".funding-more-option-content5").toggle();
        // });
    // });
    </script>

    <script>
    // $(document).ready(function() {
    //     $("#myInput").on("keyup", function() {
    //         var value = $(this).val().toLowerCase();
    //         $("#fiat-spot-balance-table tr").filter(function() {
    //             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //         });
    //     });
    // });
    </script>
    <script>
    // $(".open_modal").click(function() {
    //     $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    // });

    // $(".wm-custom-modal-close").click(function() {
    //     $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

    // });
    </script>

    <script>
    function showhideBal(id) {
        let divid = id;
        if (divid === "showbalence") {
            $("#hidebalence").show();
            $("#showbalence").hide();
            $('.asset-balence').html("*******");

        }
        if (divid === "hidebalence") {
            $("#showbalence").show();
            $("#hidebalence").hide();
            $('.asset-balence').html("0.00000000 ≈ $0.00");

        }

    }
    </script>

    <script type="text/javascript">
    // function fiatmodal() {
    //     $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    // }
    </script>

    <script>
    // $("#open_modal").click(function() {
    //     $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    // });

    // $(".wm-custom-modal-close").click(function() {
    //     $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

    // });
    </script>

<script>
    // $(document).ready(function() {

    //     $(".E-click").click(function() {
    //         $(".E-dropdown").toggle();
    //         $(".E-dropdown2").hide();
    //         $(".t-dropdown").hide();
    //         $(".t-dropdown2").hide();
    //     });
    //     $(".E-click2").click(function() {
    //         $(".E-dropdown2").toggle();
    //         $(".E-dropdown").hide();
    //         $(".t-dropdown").hide();
    //         $(".t-dropdown2").hide();
    //     });

    // });
    </script>





<script>
       $(document).ready(function() {
         $('.video-modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
         $(".video-hide").hide();
     });

function openVideo(id){
    var videoId = id;
    $(".fund-div-outer").hide();
    $(".video-hide").show();
    alert(videoId);
    if(videoId === "video-Buy"){
        $("#video source").attr("src" , "video-Buy.mp4");
    }
     if(videoId === "video-Deposit"){
        $("#video source").attr("src" , "video-Deposit.mp4");
    }
     if(videoId === "video-Receive"){
        $("#video source").attr("src" , "video-Receive");
    }
}

 $("#video-close").click(function (){
     $(".fund-div-outer").show();
    $(".video-hide").hide();
 })

</script>
</body>

</html>
