<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | <?php echo e(Request::segment(2)); ?></title>
    <?php echo $__env->make('template.web_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel='stylesheet' href="<?php echo e(('../assets/css/deepak_custom.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".exchange-order-book-detailed").click(function() {
            $("#exchange-table-tab").show();
            $("#buy-table-tab").hide();
            $("#sell-order-table-tab").hide();
        });
    });

    $(document).ready(function() {
        $(".exchange-buy-order-detailed").click(function() {
            $("#buy-table-tab").show();
            $("#sell-order-table-tab").hide();
            $("#exchange-table-tab").hide();
        });
    });

    $(document).ready(function() {
        $(".exchange-sell-order-detailed").click(function() {
            $("#sell-order-table-tab").show();
            $("#buy-table-tab").hide();
            $("#exchange-table-tab").hide();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".exchange-order-book-detailed2").click(function() {
            $("#exchange-table-tab2").show();
            $("#buy-table-tab2").hide();
            $("#sell-order-table-tab2").hide();
        });
    });

    $(document).ready(function() {
        $(".exchange-buy-order-detailed2").click(function() {
            $("#buy-table-tab2").show();
            $("#sell-order-table-tab2").hide();
            $("#exchange-table-tab2").hide();
        });
    });

    $(document).ready(function() {
        $(".exchange-sell-order-detailed2").click(function() {
            $("#sell-order-table-tab2").show();
            $("#buy-table-tab2").hide();
            $("#exchange-table-tab2").hide();
        });
    });
    </script>
    <style>
.left-peek-character {
display:none;
}

    body {
        overflow-x: hidden;
    }

#tradingview_76e3c
{
    width: auto;
    height: 750px;
}
    </style>
</head>

<body>
    <?php echo $__env->make('template.web_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="exchange-main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <!-- heading row left side -->
                    <div class="row exchange-heading-first-row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 logo-desktop">
                            <h4>BTC/USDT </h4>
                            <span>Bitcoin Price </span>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <div class="live-update_block">
                                <div class="logo-box">
                                    <h4>BTC/USDT </h4>
                                    <span>Bitcoin Price </span>
                                </div>
                                <div class="usd_live_update">
                                    <h5 class="text-danger">19,100.41 </h5>
                                    <span>$19,104,106.93 </span>
                                </div>
                                <div class="usd_live_update">
                                    <h5 class="text-success">19,100.41 </h5>
                                    <span>$19,104,106.93 </span>
                                </div>
                                <div class="usd_live_update">
                                    <h5 class="text-danger">19,100.41 </h5>
                                    <span>$19,104,106.93 </span>
                                </div>
                                <div class="usd_live_update">
                                    <h5 class="text-success">19,100.41 </h5>
                                    <span>$19,104,106.93 </span>
                                </div>
                                <div class="usd_live_update">
                                    <h5 class="text-danger">19,100.41 </h5>
                                    <span>$19,104,106.93 </span>
                                </div>
                                <div class="usd_live_update">
                                    <h5 class="text-success">19,100.41 </h5>
                                    <span>$19,104,106.93 </span>
                                </div>

                                <div class="usd-help_link"><a href="#" class="text-warning" data-bs-toggle="modal"
                                        data-bs-target="#spot-tutorial-modal"><span>&#9654; </span> Spot
                                        Tutorial</a> </div>
                                <div class="usd-help_link"><a href="#" class="text-warning" data-bs-toggle="modal"
                                        data-bs-target="#spot-guidance-modal">&#8383; Spot Guidance </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- left side table desktop -->
                    <div class="row" id="first-left-table">
                        <div class="col-lg-4 col-md-4">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="table-responsive exchange-left-table">
                                        <table class="table table-head-icons">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <a class="exchange-order-book-detailed" title="Order Book">
                                                            <img src="<?php echo e(asset('assets/img/order-book-icon.png')); ?>"
                                                                class="img-fluid order-icon" alt="gift Card Image">
                                                        </a>
                                                    </th>
                                                    <th scope="col">
                                                        <a class="exchange-buy-order-detailed order-icon"
                                                            title="Buy Order">
                                                            <img src="<?php echo e(asset('assets/img/buy-order-icon.png')); ?>"
                                                                class="img-fluid" alt="gift Card Image">
                                                        </a>
                                                    </th>
                                                    <th scope="col">
                                                        <a class="exchange-sell-order-detailed order-icon"
                                                            title="Sell Order">
                                                            <img src="<?php echo e(asset('assets/img/sell-order-icon.png')); ?>"
                                                                class="img-fluid" alt="gift Card Image">
                                                        </a>
                                                    </th>
                                                    <th scope="col">
                                                        <a class="exchange-table-right-icon-1">
                                                            0.01
                                                        </a>
                                                    </th>
                                                    <th scope="col">
                                                        <a class="exchange-table-right-icon-2">
                                                            <img src="<?php echo e(asset('assets/img/exchange-three-dots.png')); ?>"
                                                                class="img-fluid" alt="gift Card Image">
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="order-book-detailed-table-block" id="exchange-table-tab">
                                        <div class="table-responsive sell-table" id="sell-table">
                                            <table class="table table-sell-order table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Price(USDT)</th>
                                                        <th scope="col">Amount(BTC)</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-danger">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive buy-table" id="buy-table">
                                            <table class="table table-buy-order table-hover">
                                                <thead>
                                                    <tr>
                                                        <th colspan="+2">19,105.10 <span>$19,102.24 </span></th>
                                                        <th scope="col">More</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="text-success">19124.99 </span></th>
                                                        <td>0.2615110.98745</td>
                                                        <td>28.12545</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row" id="buy-table-tab">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive buy-table" id="buy-table">
                                                <table class="table table-buy-order table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="+2">19,105.10 <span>$19,102.24 </span></th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-success">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="sell-order-table-tab">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive buy-table" id="buy-table">
                                                <table class="table table-buy-order table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="+2">19,105.10 <span>$19,102.24 </span></th>
                                                            <th scope="col">More</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                        <tr>
                                                            <th><span class="text-danger">19124.99 </span></th>
                                                            <td>0.2615110.98745</td>
                                                            <td>28.12545</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- chart image section center -->
                        <div class="col-lg-8 col-md-8">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <!--<img src="<?php echo e(asset('assets/img/exchange-chart.png')); ?>" class="img-fluid"-->
                                    <!--    alt="gift Card Image">-->
                                     <div class="tradingview-widget-container">
                                        <div id="tradingview_76e3c"></div>

                                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                        <script type="text/javascript">
                                        new TradingView.widget(
                                            {
                                            "autosize": true,
                                            "symbol": "BINANCE:BTCUSDT",
                                            "timezone": "Etc/UTC",
                                            "theme": "dark",
                                            "style": "1",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "enable_publishing": true,
                                            "withdateranges": true,
                                            "range": "YTD",
                                            "enable_publishing": false,
                                            "hide_side_toolbar": false,
                                            "allow_symbol_change": true,
                                            "details": true,
                                            "hotlist": true,
                                            "calendar": true,
                                            "show_popup_button": true,
                                            "popup_width": "1000",
                                            "popup_height": "650",
                                            "container_id": "tradingview_76e3c"
                                            }
                                        );
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <!-- below-chart-tab-box -->

                            <div class="row" id="below-chart-tab-box">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12" id="trading-info">
                                            <p><span class="badge bg-warning text-dark">! </span> 0% trading fee on this
                                                BTC pair <span class="text-warning">More Details</span> >&nbsp;</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                            <nav>
                                                <div class="nav nav-tabs first-nav-chat-below" id="nav-tab"
                                                    role="tablist">
                                                    <button class="nav-link active" id="nav-home-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                                                        role="tab" aria-controls="nav-home"
                                                        aria-selected="true">Spot</button>
                                                    <button class="nav-link cross-3times" id="nav-profile-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                                                        role="tab" aria-controls="nav-profile" aria-selected="false">
                                                        <a class="cross-three-popup" data-bs-toggle="modal"
                                                            data-bs-target="#cross-three-times">Cross 3x</a></button>

                                                    <button class="nav-link isolated-box" id="nav-contact-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
                                                        role="tab" aria-controls="nav-contact" aria-selected="false"> <a
                                                            class="isolated" data-bs-toggle="modal"
                                                            data-bs-target="#isolated">Isolated</a>
                                                        10x</button>
                                                </div>
                                            </nav>
                                        </div>

                                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" id="spot-fee-heading">
                                            <p><span class="badge bg-warning text-dark">Hot </span> 0% trading fee on
                                                this BTC pair > &nbsp;</p>
                                            <span> <u>Spot Grid &nbsp;|</u></span>
                                            <span> <u>&nbsp;Fee Level</u></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-6 col-xs-12 col-sm-12">
                                            <nav id="second-nav-chat-below">
                                                <div class="nav nav-tabs" id="nav-tab-chat-below" role="tablist">

                                                    <button class="nav-link active" id="nav-home-chat-below-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-home-chat-below"
                                                        type="button" role="tab" aria-controls="nav-home-chat-below"
                                                        aria-selected="true">Limit</button>

                                                    <button class="nav-link" id="nav-profile-chat-below-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-profile-chat-below"
                                                        type="button" role="tab" aria-controls="nav-profile-chat-below"
                                                        aria-selected="false">Market</button>

                                                    <button class="nav-link" id="nav-contact-chat-below-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-contact-chat-below"
                                                        type="button" role="tab" aria-controls="nav-contact-chat-below"
                                                        aria-selected="false">Stop Limit &#11167;</button>

                                                    <!-- <ul>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                                href="#" role="button" aria-haspopup="true"
                                                                aria-expanded="false">Dropdown</a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </li>
                                                    </ul> -->

                                                    <button class="nav-link" id="nav-contact-chat-info-icon"
                                                        data-bs-toggle="tab" data-bs-target="#nav-contact-info-icon"
                                                        type="button" role="tab" aria-controls="nav-contact-info-icon"
                                                        aria-selected="false">
                                                        <span class="info-icon">&#x2139</span>
                                                    </button>



                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tab-chat-belowContent">
                                                <div class="tab-pane fade show active" id="nav-home-chat-below"
                                                    role="tabpanel" aria-labelledby="nav-home-chat-below-tab">

                                                    <ul class="nav nav-pills mb-3" id="pills-tab-borrow-repay"
                                                        role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active"
                                                                id="pills-home-tab-borrow-repay" data-bs-toggle="pill"
                                                                data-bs-target="#pills-home-borrow-repay" type="button"
                                                                role="tab" aria-controls="pills-home-borrow-repay"
                                                                aria-selected="true">Normal</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-profile-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-profile-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-profile-borrow-repay"
                                                                aria-selected="false">Borrow</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-contact-borrow-repay"
                                                                aria-selected="false">Repay</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-contact-borrow-repay"
                                                                aria-selected="false"><span
                                                                    class="info-icon">&#x2139</span></button>
                                                        </li>
                                                    </ul>
                                                    <!-- <div class="tab-content" id="pills-tabborrow-repayContent">
                                                        <div class="tab-pane fade show active" id="pills-home"
                                                            role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                            aria-labelledby="pills-profile-tab">...</div>
                                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                            aria-labelledby="pills-contact-tab">...</div>
                                                    </div> -->

                                                    <!-- content place here -->




                                                </div>
                                                <div class="tab-pane fade" id="nav-profile-chat-below" role="tabpanel"
                                                    aria-labelledby="nav-profile-chat-below-tab">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab-borrow-repay"
                                                        role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active"
                                                                id="pills-home-tab-borrow-repay" data-bs-toggle="pill"
                                                                data-bs-target="#pills-home-borrow-repay" type="button"
                                                                role="tab" aria-controls="pills-home-borrow-repay"
                                                                aria-selected="true">Normal</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-profile-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-profile-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-profile-borrow-repay"
                                                                aria-selected="false">Borrow</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-contact-borrow-repay"
                                                                aria-selected="false">Repay</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-contact-borrow-repay"
                                                                aria-selected="false"><span
                                                                    class="info-icon">&#x2139</span></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact-chat-below" role="tabpanel"
                                                    aria-labelledby="nav-contact-chat-below-tab">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab-borrow-repay"
                                                        role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active"
                                                                id="pills-home-tab-borrow-repay" data-bs-toggle="pill"
                                                                data-bs-target="#pills-home-borrow-repay" type="button"
                                                                role="tab" aria-controls="pills-home-borrow-repay"
                                                                aria-selected="true">Normal</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-profile-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-profile-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-profile-borrow-repay"
                                                                aria-selected="false">Borrow</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-contact-borrow-repay"
                                                                aria-selected="false">Repay</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab-borrow-repay"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact-borrow-repay"
                                                                type="button" role="tab"
                                                                aria-controls="pills-contact-borrow-repay"
                                                                aria-selected="false"><span
                                                                    class="info-icon">&#x2139</span></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xs-6 col-sm-12" id="trading-pair-box">
                                            <p><span class="badge bg-warning text-dark">! </span> 0% trading fee
                                                on this
                                                BTC pair <span class="text-warning">More Details</span> &nbsp;
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">

                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">

                                                    <div class="row fund-account-popup" id="exchange-txtbox-3tabs">
                                                        <div class="col-md-10 col-lg-10 col-xs-6 col-sm-6">
                                                            <p>Avbl. <code>0.00000000 USDT</code></p>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2 col-xs-6 col-sm-6">
                                                            <span class="spot-plus-popup" id="spot-plus-popup"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#cross-three-times-plus">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Price"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Amount"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">BTC</a>
                                                    </div>

                                                    <div class="slider">
                                                        <div class="range">
                                                            <input type="range" class="form-range" id="customRange1" />
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Total"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <a href="#" class="btn btn-yellow shadow mt-3 d-block">Buy BTC</a>
                                                </div>

                                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
                                                    <div class="row fund-account-popup">
                                                        <div class="col-md-10 col-lg-10 col-xs-6 col-sm-6">
                                                            <p>Avbl. <code>0.00000000 USDT</code></p>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2 col-xs-6 col-sm-6">
                                                            <span class="spot-plus-popup" id="spot-plus-popup"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#cross-three-times-plus2">+</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Price"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Amount"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">BTC</a>
                                                    </div>

                                                    <div class="slider">
                                                        <div class="range">
                                                            <input type="range" class="form-range" id="customRange1" />
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Total"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <a href="#" class="btn btn-blue shadow mt-3 d-block">Sell BTC</a>
                                                </div>
                                            </div>
                                        </div>






                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Price"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Amount"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">BTC</a>
                                                    </div>

                                                    <div class="slider">
                                                        <div class="range">
                                                            <input type="range" class="form-range" id="customRange1" />
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Total"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <a href="#" class="btn btn-yellow shadow mt-3 d-block">Buy BTC</a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Price"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Amount"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">BTC</a>
                                                    </div>

                                                    <div class="slider">
                                                        <div class="range">
                                                            <input type="range" class="form-range" id="customRange1" />
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Total"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <a href="#" class="btn btn-blue shadow mt-3 d-block">Sell BTC</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                            aria-labelledby="nav-contact-tab">

                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Stop"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">Stop</a>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Limit"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">Limit</a>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Amount"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">BTC</a>
                                                    </div>

                                                    <div class="slider">
                                                        <div class="range">
                                                            <input type="range" class="form-range" id="customRange1" />
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Total"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <a href="#" class="btn btn-yellow shadow mt-3 d-block">Buy BTC</a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Stop"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">Stop</a>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Limit"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">Limit</a>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="BTC"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">BTC</a>
                                                    </div>

                                                    <div class="slider">
                                                        <div class="range">
                                                            <input type="range" class="form-range" id="customRange1" />
                                                        </div>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Total"
                                                            aria-label="Recipient's username"
                                                            aria-describedby="basic-addon2">
                                                        <a href="#" class="input-group-text" id="basic-addon2">USDT</a>
                                                    </div>
                                                    <a href="#" class="btn btn-blue shadow mt-3 d-block">Sell BTC</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- right side 1/4 column -->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="exchange-right-table-box">
                    <div class="exchange-right-side-block ">
                        <div class="exchange-search-row">
                            <input type="text" class="form-control" placeholder="search" />
                            <span class="exchange-search-icon"> &#x1F50E;</span>
                        </div>
                    </div>

                    <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                Margin
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">BUSD</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">USDT</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-margin-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin"
                                aria-selected="false">USDT</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-BUSD-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-BUSD" type="button" role="tab" aria-controls="pills-BUSD"
                                aria-selected="true">
                                Margin
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-USDT-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-USDT" type="button" role="tab" aria-controls="pills-USDT"
                                aria-selected="false">BUSD</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-margin-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin"
                                aria-selected="false">USDT</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-BUSD-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-BUSD" type="button" role="tab" aria-controls="pills-BUSD"
                                aria-selected="true">
                                Margin
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-USDT-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-USDT" type="button" role="tab" aria-controls="pills-USDT"
                                aria-selected="false">BUSD</button>
                        </li>


                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Changes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark"> 3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.0000002945</span></td>
                                            <td><span class="text-success"> +0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-success">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC<span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-success">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-success"><span
                                                        class="text-danger">+0.89%</span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Changes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark"> 3X </span></p>
                                            </td>
                                            <td><span class="text-success"> 0.0000002945</span></td>
                                            <td><span class="text-success"> +0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger"> 0.0000002945</span></td>
                                            <td><span class="text-success">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC<span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-success">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.0000002945</span></td>
                                            <td><span class="text-success"><span
                                                        class="text-danger">+0.89%</span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.0000002945</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-danger">+0.89%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Changes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark"> 3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.00008245</span></td>
                                            <td><span class="text-success"> +0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.00008245</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC<span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.00005545</td>
                                            <td><span class="text-success">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.00008245</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000945</td>
                                            <td><span class="text-success"><span
                                                        class="text-danger">+0.89%</span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.00008245</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.0000002945</td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-danger">0.00008245</span></td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td>0.00000045</td>
                                            <td><span class="text-danger">+0.89%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="times-txt"> &#42;1INCH/BTC <span
                                                        class="badge bg-warning text-dark">3X </span></p>
                                            </td>
                                            <td><span class="text-success">0.00008245</span></td>
                                            <td><span class="text-danger">+0.89%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" id="Market-Trades" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab-market-trades" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">Market Trades</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab-market-trades" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">My Trades</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent-market-trades">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab-market-trades">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive sell-table right-block-table-2">
                                        <table class="table table-sell-order table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Price(USDT)</th>
                                                    <th scope="col">Amount(BTC)</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab-market-trades">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive sell-table right-block-table-2">
                                        <table class="table table-sell-order table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Price(USDT)</th>
                                                    <th scope="col">Amount(BTC)</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                                <tr>
                                                    <th><span class="text-danger">19124.99 </span></th>
                                                    <td>0.2615110.98745</td>
                                                    <td>28.12545</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Market Activities -->

                    <section id="market-activity-section">

                        <div class="row">
                            <h5 class="market-activity-head">Market Activities </h5>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="ps-3">GLM/BTC </p>
                                    <span class="ps-3">16:14:04 </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="text-danger">POLYX/BTC</p>
                                    <span class="text-danger">-13.33</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="text-danger">JAXY/BTC</p>
                                    <span class="text-success">+96.16</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="ps-3">GLM/BTC </p>
                                    <span class="ps-3">16:14:04 </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="text-danger">POLYX/BTC</p>
                                    <span class="text-danger">-13.33</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="text-danger">JAXY/BTC</p>
                                    <span class="text-success">+96.16</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="ps-3">GLM/BTC </p>
                                    <span class="ps-3">16:14:04 </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="text-danger">POLYX/BTC</p>
                                    <span class="text-danger">-13.33</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="activity-inner-box">
                                    <p class="text-danger">JAXY/BTC</p>
                                    <span class="text-success">+96.16</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </section>


                </div>

            </div>

            <!-- last footer table -->
            <div class="row">
                <div class="col-lg-12 col-md-sm-12 col-xs">
                    <ul class="nav nav-tabs" id="FooterTable" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="FooterTable-home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-ftr" type="button" role="tab" aria-controls="home-ftr"
                                aria-selected="true">Open Order</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="FooterTable-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-ftr" type="button" role="tab" aria-controls="profile-ftr"
                                aria-selected="false">Order History</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="FooterTable-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-ftr" type="button" role="tab" aria-controls="contact-ftr"
                                aria-selected="false">Trade History</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="FooterTable-funds-tab" data-bs-toggle="tab"
                                data-bs-target="#funds-ftr" type="button" role="tab" aria-controls="funds-ftr"
                                aria-selected="false">Funds</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="FooterTable-positions-tab" data-bs-toggle="tab"
                                data-bs-target="#positions-ftr" type="button" role="tab" aria-controls="positions-ftr"
                                aria-selected="false">positions</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="FooterTableContent">
                        <div class="tab-pane fade show active" id="home-ftr" role="tabpanel"
                            aria-labelledby="FooterTable-home-tab">
                            <div class="table-responsive" id="open-order-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Slide</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Filled</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Conditions</th>
                                            <th scope="col">Cancell All</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10-08-2022 </td>
                                            <td>paired </td>
                                            <td>USDT </td>
                                            <td>Yes </td>
                                            <td>$10,000 </td>
                                            <td>$10,000 </td>
                                            <td>Yes </td>
                                            <td>$10,000,000 </td>
                                            <td>Good </td>
                                            <td>Yes </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-ftr" role="tabpanel"
                            aria-labelledby="FooterTable-profile-tab">
                            <div class="row">
                                <div class="col-md-12" id="footer-tabls-fields">
                                    <a class="btn btn-yellow">1 Day &nbsp;</a>
                                    <a class="btn btn-yellow">1 Week &nbsp;</a>
                                    <a class="btn btn-yellow">1 Month &nbsp;</a>
                                    <a class="btn btn-yellow">3 Months &nbsp;</a>
                                    <span>&nbsp;&nbsp;Time &nbsp;&nbsp;</span>
                                    <input type="date" class="form-control" id="from-input-box1" />
                                    <span>&nbsp;&nbsp;To&nbsp;&nbsp; </span>
                                    <input type="date" class="form-control" id="from-input-box2" />
                                    <a class="btn btn-yellow">Search</a>
                                    <a class="btn btn-yellow">Reset</a>

                                </div>
                            </div>
                            <div class="table-responsive" id="funds-table">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Side</th>
                                            <th scope="col">Average</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Executed</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Trigger Conditions</th>
                                            <th scope="col">All</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10-08-2022 </td>
                                            <td>paired </td>
                                            <td>USDT </td>
                                            <td>Yes </td>
                                            <td>$10,000 </td>
                                            <td>$10,000 </td>
                                            <td>Yes </td>
                                            <td>$10,000,000 </td>
                                            <td>Good </td>
                                            <td>Yes </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact-ftr" role="tabpanel"
                            aria-labelledby="FooterTable-contact-tab">
                            <div class="row">
                                <div class="col-md-12" id="footer-tabls-fields">
                                    <a class="btn btn-yellow">1 Day &nbsp;</a>
                                    <a class="btn btn-yellow">1 Week &nbsp;</a>
                                    <a class="btn btn-yellow">1 Month &nbsp;</a>
                                    <a class="btn btn-yellow">3 Months &nbsp;</a>
                                    <span>&nbsp;&nbsp;Time &nbsp;&nbsp;</span>
                                    <input type="date" class="form-control" id="from-input-box1" />
                                    <span>&nbsp;&nbsp;To&nbsp;&nbsp; </span>
                                    <input type="date" class="form-control" id="from-input-box2" />
                                    <a class="btn btn-yellow">Search</a>
                                    <a class="btn btn-yellow">Reset</a>

                                </div>
                            </div>
                            <div class="table-responsive" id="funds-table">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Side</th>
                                            <th scope="col">Average</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Executed</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Trigger Conditions</th>
                                            <th scope="col">All</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10-08-2022 </td>
                                            <td>paired </td>
                                            <td>USDT </td>
                                            <td>Yes </td>
                                            <td>$10,000 </td>
                                            <td>$10,000 </td>
                                            <td>Yes </td>
                                            <td>$10,000,000 </td>
                                            <td>Good </td>
                                            <td>Yes </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="funds-ftr" role="tabpanel"
                            aria-labelledby="FooterTable-funds-tab">

                            <div class="table-responsive" id="funds-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pair</th>
                                            <th scope="col">Coin</th>
                                            <th scope="col">Total Balance</th>
                                            <th scope="col">Available Balance</th>
                                            <th scope="col">In Order</th>
                                            <th scope="col">In Order</th>
                                            <th scope="col">Debt</th>
                                            <th scope="col">Equity/ Equity Value(BTC)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10-08-2022 </td>
                                            <td>paired </td>
                                            <td>USDT </td>
                                            <td>Yes </td>
                                            <td>$10,000 </td>
                                            <td>$10,000 </td>
                                            <td>Yes </td>
                                            <td>$10,000,000 </td>
                                            <td>Good </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="positions-ftr" role="tabpanel"
                            aria-labelledby="FooterTable-positions-tab">
                            <div class="table-responsive" id="positioins-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Coin</th>
                                            <th scope="col">Potitions</th>
                                            <th scope="col">position Value(USDT)</th>
                                            <th scope="col">Index Price</th>
                                            <th scope="col">Liquidation Price</th>
                                            <th scope="col">To Liquidation Price</th>
                                            <th scope="col">Liquidation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Yes </td>
                                            <td>$10,000 </td>
                                            <td>$10,000 </td>
                                            <td>Yes </td>
                                            <td>$10,000,000 </td>
                                            <td>Good </td>
                                            <td>Yes </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Mobile device section area start -->
    <section class="footer-mobile-box" id="footer-btn-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-buy-block">
                        <a class="btn btn-blue shadow" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Buy</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-sell-block">
                        <a href="#" class="btn btn-yellow shadow">Sell</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- buy btn section -->
    <!-- offf canvas -->
    <div class="offcanvas offcanvas-bottom footer-buy-btn" tabindex="-1" id="offcanvasBottom"
        aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <button class="nav-link active" id="footer-home-new-tab" data-bs-toggle="tab"
                        data-bs-target="#footer-home-new" type="button" role="tab" aria-controls="footer-home-new"
                        aria-selected="true">Spot</button>

                    <button class="nav-link" id="footer-profile-new-tab" data-bs-toggle="tab"
                        data-bs-target="#footer-profile-new" type="button" role="tab" aria-controls="footer-profile-new"
                        aria-selected="false">Cross 3x</button>

                    <button class="nav-link" id="footer-contact-new-tab" data-bs-toggle="tab"
                        data-bs-target="#footer-contact-new" type="button" role="tab" aria-controls="footer-contact-new"
                        aria-selected="false">Isolated 10x</button>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="footer-home-new" role="tabpanel"
                    aria-labelledby="footer-home-new-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-buy-block">
                                <a class="btn btn-blue shadow spot-buy-mobile-btn" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                    aria-controls="offcanvasBottom">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-sell-block">
                                <a href="#" class="btn btn-yellow shadow spot-sell-mobile-btn">Sell</a>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" id="shorting-footer-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="limit-tab" data-bs-toggle="tab" data-bs-target="#limit"
                                type="button" role="tab" aria-controls="limit" aria-selected="true">Limit</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="market-tab" data-bs-toggle="tab" data-bs-target="#market"
                                type="button" role="tab" aria-controls="market" aria-selected="false">Market</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="stop-limit-tab" data-bs-toggle="tab"
                                data-bs-target="#stop-limit" type="button" role="tab" aria-controls="stop-limit"
                                aria-selected="false">Stop Limit</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="shorting-footer-tabContent">
                        <div class="tab-pane fade show active" id="limit" role="tabpanel" aria-labelledby="limit-tab">
                            ...</div>
                        <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">...</div>
                        <div class="tab-pane fade" id="stop-limit" role="tabpanel" aria-labelledby="stop-limit-tab">...
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="footer-profile-new" role="tabpanel"
                    aria-labelledby="footer-profile-new-tab">..dfdfd.
                </div>
                <div class="tab-pane fade" id="footer-contact-new" role="tabpanel"
                    aria-labelledby="footer-contact-new-tab">
                    .ddddddddd..</div>
            </div>
        </div>
    </div>







    <!-- Mobile device section area END -->
    <!-- Modal -->

    <div class="modal fade" id="cross-three-times" tabindex="-1" aria-labelledby="cross-three-timesLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="cross-three-timesLabel">Welcome to Wealth Mark Margin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex align-items-start row">
                        <div class="nav flex-column nav-pills col-lg-6 col-lg-6" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">1.Choose Account</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">2.Transfer</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">3.Borrow</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">4.Trade</button>
                            <button class="nav-link" id="v-pills-repay-tab" data-bs-toggle="pill"
                                data-bs-target="#v-repay-settings" type="button" role="tab"
                                aria-controls="v-repay-settings" aria-selected="false">5.Repay</button>
                        </div>
                        <div class="tab-content col-lg-6 col-lg-6 col-sm-6" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-1.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                            <div class="tab-pane fade" id="v-repay-settings" role="tabpanel"
                                aria-labelledby="v-pills-repay-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" id="start-quiz-popup-modal">
                    <span>You need to pass the quiz before trading Margin.</span>
                    <button type="button" class="btn btn-yellow"><span>▶ </span> Tutorial</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Not Now</button>
                    <button type="button" class="btn btn-primary">Start Quiz</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="isolated" tabindex="-1" aria-labelledby="isolatedLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="isolatedLabel">Welcome to Wealth Mark Margin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex align-items-start row">
                        <div class="nav flex-column nav-pills col-lg-6 col-lg-6" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">1.Choose Account</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">2.Transfer</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">3.Borrow</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">4.Trade</button>
                            <button class="nav-link" id="v-pills-repay-tab" data-bs-toggle="pill"
                                data-bs-target="#v-repay-settings" type="button" role="tab"
                                aria-controls="v-repay-settings" aria-selected="false">5.Repay</button>
                        </div>
                        <div class="tab-content col-lg-6 col-lg-6 col-sm-6 col-xs-12" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-1.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                            <div class="tab-pane fade" id="v-repay-settings" role="tabpanel"
                                aria-labelledby="v-pills-repay-tab">
                                <img src="<?php echo e(asset('assets/img/strat-quiz-img-2.png')); ?>" class="img-fluid"
                                    alt="gift Card Image" />
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" id="start-quiz-popup-modal">
                    <span>You need to pass the quiz before trading Margin.</span>
                    <button type="button" class="btn btn-yellow"><span>▶ </span> Tutorial</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Not Now</button>
                    <button type="button" class="btn btn-primary">Start Quiz</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cross-three-times-plus" tabindex="-1" aria-labelledby="cross-three-times-plusLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="cross-three-times-plusLabel">Fund Your Account
                    </h5><br />
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex align-items-start row fund-account-row">
                        <div class="col-lg-2 col-lg-2">
                            <svg viewBox="0 0 96 96" fill="none" class="css-1lvgmx4">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M88 21H8v54h80V21zM14 63h44v6H14v-6zm68 0H71v6h11v-6z" fill="#E6E8EA"></path>
                                <path d="M63 81.5l2.5-2.5 2.5 2.5-2.5 2.5-2.5-2.5zM14 13l3-3 3 3-3 3-3-3z"
                                    fill="#E6E8EA"></path>
                                <path fill="url(#fiat-light_svg__paint0_linear)" d="M8 32h80v11H8z"></path>
                                <circle r="15" transform="matrix(1 0 0 -1 50 23)" fill="#F8D33A"></circle>
                                <circle r="10.862" transform="matrix(1 0 0 -1 50 23)"
                                    fill="url(#fiat-light_svg__paint1_linear)"></circle>
                                <path d="M44.31 23L50 28.69 55.69 23 50 17.31 44.31 23z" fill="#F0B90B"></path>
                                <circle r="10" transform="matrix(1 0 0 -1 70 56)" fill="#F8D33A"></circle>
                                <circle r="7.273" transform="matrix(1 0 0 -1 70 56)"
                                    fill="url(#fiat-light_svg__paint2_linear)"></circle>
                                <path d="M66.364 56L70 59.636 73.636 56 70 52.363 66.364 56z" fill="#F0B90B"></path>
                                <circle r="12" transform="matrix(1 0 0 -1 28 76)" fill="#F8D33A"></circle>
                                <circle r="8.727" transform="matrix(1 0 0 -1 28 76)"
                                    fill="url(#fiat-light_svg__paint3_linear)"></circle>
                                <path d="M23.636 76L28 80.364 32.364 76 28 71.636 23.636 76z" fill="#F0B90B"></path>
                                <defs>
                                    <linearGradient id="fiat-light_svg__paint0_linear" x1="88" y1="32" x2="8" y2="32"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="fiat-light_svg__paint1_linear" x1="10.862" y1="0" x2="10.862"
                                        y2="21.724" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                    <linearGradient id="fiat-light_svg__paint2_linear" x1="7.273" y1="0" x2="7.273"
                                        y2="14.546" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                    <linearGradient id="fiat-light_svg__paint3_linear" x1="8.727" y1="0" x2="8.727"
                                        y2="17.454" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-lg-7 col-lg-7">
                            <h5>Internal Transfer </h5>
                            <span>Transfer from your internal account </span>
                        </div>

                        <div class="col-lg-3 col-lg-3">
                            <a class="btn btn-yellow">Transfer </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start row fund-account-row">
                        <div class="col-lg-2 col-lg-2">
                            <svg viewBox="0 0 96 96" fill="none" class="css-1lvgmx4">
                                <circle r="23.5" transform="matrix(1 0 0 -1 61.5 34.5)"
                                    fill="url(#spot-light_svg__paint0_linear)"></circle>
                                <circle cx="61.5" cy="34.499" r="16.537" fill="#76808F"></circle>
                                <path d="M53.04 34.5l8.46-8.46 8.46 8.46-8.46 8.46-8.46-8.46z" fill="#929AA5"></path>
                                <circle r="23.5" transform="matrix(1 0 0 -1 34.5 61.5)" fill="#F8D33A"></circle>
                                <circle r="16.537" transform="matrix(1 0 0 -1 34.5 61.5)"
                                    fill="url(#spot-light_svg__paint1_linear)"></circle>
                                <path d="M26.04 61.5l8.46 8.46 8.46-8.46-8.46-8.46-8.46 8.46z" fill="#F0B90B"></path>
                                <path
                                    d="M31 22.5l2.5-2.5 2.5 2.5-2.5 2.5-2.5-2.5zM61 68l4-4 4 4-4 4-4-4zM6 47l2-2 2 2-2 2-2-2zM36 12H12v24l24-24zM60 84h24V60L60 84z"
                                    fill="#E6E8EA"></path>
                                <defs>
                                    <linearGradient id="spot-light_svg__paint0_linear" x1="23.5" y1="0" x2="23.5"
                                        y2="47" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="spot-light_svg__paint1_linear" x1="16.537" y1="0" x2="16.537"
                                        y2="33.074" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-lg-7 col-lg-7">
                            <h5>Buy with cash </h5>
                            <span>If you want to buy crypto currency directly with cash, this will be the best way for
                                you.</span>
                        </div>

                        <div class="col-lg-3 col-lg-3">
                            <a class="btn btn-yellow">Buy </a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start row fund-account-row">
                        <div class="col-lg-2 col-lg-2">
                            <svg viewBox="0 0 96 96" fill="none" class="css-1lvgmx4">
                                <path fill="#E6E8EA" d="M12 84h72V42H12z"></path>
                                <path d="M26 57h44L48 79 26 57z" fill="url(#deposit-light_svg__paint0_linear)"></path>
                                <circle r="22" transform="matrix(1 0 0 -1 48 30)" fill="#F8D33A"></circle>
                                <circle r="15.053" transform="matrix(1 0 0 -1 48 30)"
                                    fill="url(#deposit-light_svg__paint1_linear)"></circle>
                                <path d="M39.895 30L48 38.105 56.105 30 48 21.895 39.895 30z" fill="#F0B90B"></path>
                                <path d="M80 30l2-2 2 2-2 2-2-2z" fill="#E6E8EA"></path>
                                <path d="M19 49l3-3 3 3-3 3-3-3zM65 75.5l1.5-1.5 1.5 1.5-1.5 1.5-1.5-1.5z" fill="#fff">
                                </path>
                                <defs>
                                    <linearGradient id="deposit-light_svg__paint0_linear" x1="48" y1="57" x2="48"
                                        y2="79" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="deposit-light_svg__paint1_linear" x1="15.053" y1="0" x2="15.053"
                                        y2="30.105" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-lg-7 col-lg-7">
                            <h5>Send coin to Wealth Mark</h5>
                            <span>If you already hold some crypto currency, you can choose to transfer them to Wealth
                                Mark
                                via blockchain.</span>
                        </div>

                        <div class="col-lg-3 col-lg-3">
                            <a class="btn btn-yellow">Deposit </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="cross-three-times-plus2" tabindex="-1" aria-labelledby="cross-three-times-plus2Label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="cross-three-times-plus2Label">Welcome to Wealth Mark Margin
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex align-items-start row fund-account-row">
                        <div class="col-lg-2 col-lg-2">
                            <svg viewBox="0 0 96 96" fill="none" class="css-1lvgmx4">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M88 21H8v54h80V21zM14 63h44v6H14v-6zm68 0H71v6h11v-6z" fill="#E6E8EA"></path>
                                <path d="M63 81.5l2.5-2.5 2.5 2.5-2.5 2.5-2.5-2.5zM14 13l3-3 3 3-3 3-3-3z"
                                    fill="#E6E8EA"></path>
                                <path fill="url(#fiat-light_svg__paint0_linear)" d="M8 32h80v11H8z"></path>
                                <circle r="15" transform="matrix(1 0 0 -1 50 23)" fill="#F8D33A"></circle>
                                <circle r="10.862" transform="matrix(1 0 0 -1 50 23)"
                                    fill="url(#fiat-light_svg__paint1_linear)"></circle>
                                <path d="M44.31 23L50 28.69 55.69 23 50 17.31 44.31 23z" fill="#F0B90B"></path>
                                <circle r="10" transform="matrix(1 0 0 -1 70 56)" fill="#F8D33A"></circle>
                                <circle r="7.273" transform="matrix(1 0 0 -1 70 56)"
                                    fill="url(#fiat-light_svg__paint2_linear)"></circle>
                                <path d="M66.364 56L70 59.636 73.636 56 70 52.363 66.364 56z" fill="#F0B90B"></path>
                                <circle r="12" transform="matrix(1 0 0 -1 28 76)" fill="#F8D33A"></circle>
                                <circle r="8.727" transform="matrix(1 0 0 -1 28 76)"
                                    fill="url(#fiat-light_svg__paint3_linear)"></circle>
                                <path d="M23.636 76L28 80.364 32.364 76 28 71.636 23.636 76z" fill="#F0B90B"></path>
                                <defs>
                                    <linearGradient id="fiat-light_svg__paint0_linear" x1="88" y1="32" x2="8" y2="32"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="fiat-light_svg__paint1_linear" x1="10.862" y1="0" x2="10.862"
                                        y2="21.724" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                    <linearGradient id="fiat-light_svg__paint2_linear" x1="7.273" y1="0" x2="7.273"
                                        y2="14.546" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                    <linearGradient id="fiat-light_svg__paint3_linear" x1="8.727" y1="0" x2="8.727"
                                        y2="17.454" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-lg-7 col-lg-7">
                            <h5>Internal Transfer </h5>
                            <span>Transfer from your internal account </span>
                        </div>

                        <div class="col-lg-3 col-lg-3">
                            <a class="btn btn-yellow">Transfer </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start row fund-account-row">
                        <div class="col-lg-2 col-lg-2">
                            <svg viewBox="0 0 96 96" fill="none" class="css-1lvgmx4">
                                <circle r="23.5" transform="matrix(1 0 0 -1 61.5 34.5)"
                                    fill="url(#spot-light_svg__paint0_linear)"></circle>
                                <circle cx="61.5" cy="34.499" r="16.537" fill="#76808F"></circle>
                                <path d="M53.04 34.5l8.46-8.46 8.46 8.46-8.46 8.46-8.46-8.46z" fill="#929AA5"></path>
                                <circle r="23.5" transform="matrix(1 0 0 -1 34.5 61.5)" fill="#F8D33A"></circle>
                                <circle r="16.537" transform="matrix(1 0 0 -1 34.5 61.5)"
                                    fill="url(#spot-light_svg__paint1_linear)"></circle>
                                <path d="M26.04 61.5l8.46 8.46 8.46-8.46-8.46-8.46-8.46 8.46z" fill="#F0B90B"></path>
                                <path
                                    d="M31 22.5l2.5-2.5 2.5 2.5-2.5 2.5-2.5-2.5zM61 68l4-4 4 4-4 4-4-4zM6 47l2-2 2 2-2 2-2-2zM36 12H12v24l24-24zM60 84h24V60L60 84z"
                                    fill="#E6E8EA"></path>
                                <defs>
                                    <linearGradient id="spot-light_svg__paint0_linear" x1="23.5" y1="0" x2="23.5"
                                        y2="47" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="spot-light_svg__paint1_linear" x1="16.537" y1="0" x2="16.537"
                                        y2="33.074" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-lg-7 col-lg-7">
                            <h5>Buy with cash </h5>
                            <span>If you want to buy crypto currency directly with cash, this will be the best way for
                                you.</span>
                        </div>

                        <div class="col-lg-3 col-lg-3">
                            <a class="btn btn-yellow">Transfer </a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start row fund-account-row">
                        <div class="col-lg-2 col-lg-2">
                            <svg viewBox="0 0 96 96" fill="none" class="css-1lvgmx4">
                                <path fill="#E6E8EA" d="M12 84h72V42H12z"></path>
                                <path d="M26 57h44L48 79 26 57z" fill="url(#deposit-light_svg__paint0_linear)"></path>
                                <circle r="22" transform="matrix(1 0 0 -1 48 30)" fill="#F8D33A"></circle>
                                <circle r="15.053" transform="matrix(1 0 0 -1 48 30)"
                                    fill="url(#deposit-light_svg__paint1_linear)"></circle>
                                <path d="M39.895 30L48 38.105 56.105 30 48 21.895 39.895 30z" fill="#F0B90B"></path>
                                <path d="M80 30l2-2 2 2-2 2-2-2z" fill="#E6E8EA"></path>
                                <path d="M19 49l3-3 3 3-3 3-3-3zM65 75.5l1.5-1.5 1.5 1.5-1.5 1.5-1.5-1.5z" fill="#fff">
                                </path>
                                <defs>
                                    <linearGradient id="deposit-light_svg__paint0_linear" x1="48" y1="57" x2="48"
                                        y2="79" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="deposit-light_svg__paint1_linear" x1="15.053" y1="0" x2="15.053"
                                        y2="30.105" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="col-lg-7 col-lg-7">
                            <h5>Send coin to Wealth Mark</h5>
                            <span>If you already hold some crypto currency, you can choose to transfer them to Wealth
                                Mark
                                via blockchain.</span>
                        </div>

                        <div class="col-lg-3 col-lg-3">
                            <a class="btn btn-yellow">Transfer </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="spot-tutorial-modal" tabindex="-1" aria-labelledby="spot-tutorial-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="spot-tutorial-modalLabel">Welcome to Wealth Mark Spot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/K4TOrB7at0Y"
                        title="Demo Background Sample Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="spot-guidance-modal" tabindex="-1" aria-labelledby="spot-guidance-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="spot-guidance-modalLabel">Welcome to Wealth Mark Spot Guidance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <h5>Select coin pair </h5>
                        <p>Choose a specific coin pair and check the last price. </p>
                        <div class="guidance-cta d-flex row mt-3">
                            <h6 class="col-md-9">Step 1/6 </h6>
                            <h6 class="col-md-2 btn btn-blue d-flex float-end">Next</h6>
                        </div>
                        <p>I am familiar with this no guidance is needed. <span>Skip</span> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('template.country_language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('template.web_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\wealthMark\resources\views/web/exchange.blade.php ENDPATH**/ ?>