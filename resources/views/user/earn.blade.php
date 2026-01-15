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

    .h-divider{
        width:100%;
        height:3px;
        background:#f5f8fd !important;
        display:block;
    }

    .tabs {
        overflow: hidden;
        overflow-x: auto;
    }

    .tbl-convert-div table th{
        white-space:unset !important;
        vertical-align:top !important;
    }
  </style>
</head>
<body>

    @include('template.web_menu')
    <div class="dashboard-main mt-0 p-0">
        @include('template.sidebar')



    <div class="container-fluid p-0">
        <div class="bg-light-blue p-3 w-100">
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold mb-0 ps-1">Earn</h2>
                      <a href="{{ url(app()->getLocale()) }}/user/earn-history"
                            class="btn btn-yellow shadow">History</a>
                </div>
            </div>
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="row gap-y-3 align-items-center justify-content-between" id="earn-top-header-row">
                        <div class="col-lg-8 col-md-6" id="funding-left-side-block">
                            <div class="d-flex align-items-center ">
                                <h5 class="mb-0 ">Est. Total Value
                                    <i id="showbalence" class="bi bi-eye asset-eye-icon"
                                        onClick="showhideBal(this.id)"></i>
                                    <i id="hidebalence" class="bi bi-eye-slash asset-eye-icon" style="display:none"
                                        onClick="showhideBal(this.id)"></i>
                                </h5>
                            </div>
                            <div class="d-flex align-items-center mt-3 hide-when-astix asset-balence">
                                <span class="h4 mb-0 me-2 fw-bold est-balance">0.00000000</span>
                                <span class="h4 mb-0 est-balance fw-bold text-muted">≈ &nbsp;
                                    ₹0.000000</span>
                            </div>
                            <div class="d-none astix mt-4">
                                <div class="text-dark h4">********</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <div class="row">
                                <div class="col text-center">
                                    <a href="{{ url( app()->getLocale(), 'simple-earn') }}" class="text-warning">
                                        <div class="fund-icon-contain mx-auto">
                                            <img src="{{ asset('assets/img/earn-product-icon.svg') }}"
                                                class="img-fluid" alt="Earn Product">
                                        </div>
                                        Earn
                                        Products
                                    </a>
                                </div>
                                <div class="col text-center">
                                    <a href="{{ url( app()->getLocale(), 'auto-invest') }}" class="text-warning">
                                        <div class="fund-icon-contain mx-auto">
                                            <img src="{{ asset('assets/img/earn-auto-invest-icon.svg') }}"
                                                class="img-fluid" alt="Earn Product">
                                        </div>
                                        Auto-Invest
                                    </a>
                                </div>
                                <div class="col text-center">
                                    <a href="{{ url( app()->getLocale(), 'eth2') }}" class="text-warning">
                                        <div class="fund-icon-contain mx-auto">
                                            <img src="{{ asset('assets/img/earn-eth2-icon.svg') }}"
                                                class="img-fluid" alt="Earn Product">
                                        </div>
                                        E2H 2.0
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                <div class="h-divider mt-4 mb-2"></div>

                <div class="row">
                        <div class="col-12 m-0">
                            <div class="dashboard-tabpills">
                                <div class="">
                                    <div class="dashboard-card-body">
                                        <ul class="tabs nav nav-pills my-1" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <button class="nav-link active" id="pills-spot-tab">Simple Earn</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="pills-p2p-tab">Staking</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link " id="pills-margin-tab" >Launchpad</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="pills-futures-tab">Liquid Swap</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" id="pills-futures-tab">Dual Investment</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="pills-futures-tab">Pool Savings</button>
                                        </li>

                                        </ul>

                                    </div>
                                </div>

                                <div class="mt-4" id="load_data">
                                    <div class="row mb-3">
                                <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                    <div class="mini-title">Estimated Positions</div>
                                    <div class="bal-coin asset-balence">0.00000000</div>
                                    <div class="bal-curr asset-balence">≈ ₹0.000000</div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                    <div class="mini-title">Total Profit</div>
                                    <div class="bal-coin text-success asset-balence">0.00000000</div>
                                    <div class="bal-curr asset-balence">≈ ₹0.000000</div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                    <div class="mini-title">Last Day Profit</div>
                                    <div class="bal-coin text-success asset-balence">0.00000000</div>
                                    <div class="bal-curr asset-balence">≈ ₹0.000000</div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
                                    <div class="mini-title">Savings Trial Fund Bonus</div>
                                    <div class="bal-coin text-success asset-balence">0.00000000</div>
                                    <div class="bal-curr asset-balence">≈ ₹0.000000</div>
                                </div>
                                </div>
                                 <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <div class="tbl-convert-div">
                       <table class="table table-hover tbl-to-div">
                          <thead>
                                   <th>Assets</th>
                                   <th>Reward Coin</th>
                                   <th>Auto-Subscribe</th>
                                   <th>Total Amount</th>
                                   <th>Accruing interest</th>
                                    <th>Today's Subscription</th>
                                   <th>Redeeming</th>
                                   <th>Cumulative Interest	</th>
                                   <th>AirDrop Amount	</th>
                                   <th>Est. APY	</th>
                                   <th>AirDrop APY	</th>
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
                                        <div id="tbl-append-here"> </div>
                                    </div>
                                </div>

                                </div>
                            </div> </div>
                        </div>
                </div>


            </div>



        </div>


    </div>










</div>
    @include('template.web_footer')
    <!-- offcanvas for menu item -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


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

<script>



</script>


</body>

</html>
