<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">
    <style>
    
    </style>
</head>

<body>
    @include('template.web_menu')

    <section class="p2p-trading-box" id="p2p-trading-section">
        <div class="container">
            <div class="row">
                <div class="overview-inner-box text-center">
                    <h3 class="digital-asset-heading">Buy and Sell TetherUS (USDT) with Your Preferred Payment Methods
                    </h3>
                    <p class="text-center text-primary fw-bold"> Buy and sell TetherUS safely and easily on Wealth Mark
                        P2P. Find the best offer below and buy and sell USDT with Your Preferred Payment Methods today.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="p2p-trading-tabs" id="leverage-navbar">
        <div class="container">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <ul class="nav nav-pills mb-2 mt-2 " id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="modal"
                            data-bs-target="#trading-express-modal">Express</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="false">
                            P2P</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Block</button>
                    </li>

                </ul>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <ul class="nav nav-pills mb-2 mt-2 tab-right-side" id="pills-tab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link tradinguser-guide-box" id="pills-contact-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1"
                            aria-selected="false">User Guide &#11167;</button>
                        <ul class="normal-dropdown">
                            <li>Beginners Guide</li>
                            <li>Video tutorial </li>
                            <li>P2P Trading FAQ </li>
                        </ul>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1"
                            aria-selected="false">Orders</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1"
                            aria-selected="false">P2P User Center</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link trading-moreoption-box" id="pills-contact-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1"
                            aria-selected="false">More &#11167;</button>
                        <ul class="normal-dropdown2">
                            <li>Beginners Guide</li>
                            <li>Video tutorial </li>
                            <li>P2P Trading FAQ </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section class="leverage-tokens-sub-tab" id="leverage-sub-navbar">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <ul class="nav nav-pills mb-2 mt-2 " id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">Buy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab11" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="false">Sell</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">USDT</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab11" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="false">BTC</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">BUSD</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab11" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="false">BNB</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">ETH</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab11" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="false">DOGE</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">DAI</button>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <section class="p2p-trading-table-box" id="p2p-trading-table-section">
        <div class="container">
            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-contact2" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                    </div>
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row mb-3">
                            <div class="col-md-3 col-lg-3 col-sm-6 col-sm-6">
                                <lable>Amount </lable>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter amount   CNY"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">Search</span>
                                </div>
                            </div>
                            <div class="col-md-1 col-lg-1 col-sm-6 col-xs-6">
                                <lable>Fiat </lable>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option><img src="{{ asset('img/currency-1.png') }}" class="img-fluid"
                                            alt="P2P Trading">&#165; AED</option>
                                    <option selected>&#165; AFN</option>
                                    <option>&#165; AMD</option>
                                    <option>&#165; ARS</option>
                                    <option>&#165; AUD</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                                <lable>Payment </lable>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option selected>&#x20B9 All Payments</option>
                                    <option>&#x20B9 Bank Transfer</option>
                                    <option>&#x20B9 WeChat</option>
                                    <option>&#x20B9 Alipay</option>
                                </select>
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                                <lable>Available Region(s) </lable><br />
                                <select class="form-control select2">
                                    <option selected>&#127937 All Region</option>
                                    <option>&#127937 Australia</option>
                                    <option>&#127937 Belgium</option>
                                    <option>&#127937 Brazil</option>
                                    <option>&#127937 Canada</option>
                                    <option>&#127937 Pakistan</option>
                                </select>
                            </div>

                            <div class="col-md-3" id="trading-refresh-box">
                                <lable>&nbsp;</lable>
                                <a class="btn btn-yellow shadow mt-4" id="trading-filter-btn"> &#x21bb; Filter </a>
                                <div class="filter-dropdown">
                                    <ul>
                                        <li><input type="checkbox" /> Only show merchant ads</li>
                                        <li><input type="checkbox" /> Only display ads from Pro Merchant</li>
                                    </ul>
                                </div>
                                <lable>&nbsp;</lable>
                                <a class="btn btn-yellow shadow mt-4" id="trading-refresh-btn"> &#x21bb; Refresh </a>
                                <div class="refresh-dropdown">
                                    <ul>
                                        <li>Not Now </li>
                                        <li>5s to Refresh </li>
                                        <li>10s to Refresh </li>
                                        <li>20s to Refresh </li>
                                    </ul>
                                </div>
                            </div>




                        </div>
                        <div class="tokens-table table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Advertisers (Completion rate)</th>
                                        <th scope="col">Price <span class="text-warning">(Lowesst to Highest)</span>
                                        </th>
                                        <th scope="col">Limit/Available</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Trade <span class="text-success">0 Fee</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat | <a class="text-warning">Alipay </a>
                                        </td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row mb-3">
                            <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
                                <lable>Amount </lable>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter amount   CNY"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">Search</span>
                                </div>
                            </div>
                            <div class="col-md-1 col-lg-1 col-sm-6 col-xs-6">
                                <lable>Fiat </lable>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option><img src="{{ asset('img/currency-1.png') }}" class="img-fluid"
                                            alt="P2P Trading">&#165; AED</option>
                                    <option selected>&#165; AFN</option>
                                    <option>&#165; AMD</option>
                                    <option>&#165; ARS</option>
                                    <option>&#165; AUD</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">
                                <lable>Payment </lable>
                                <select class="form-control select2">
                                    <option>Select</option>
                                    <option selected>&#x20B9 All Payments</option>
                                    <option>&#x20B9 Bank Transfer</option>
                                    <option>&#x20B9 WeChat</option>
                                    <option>&#x20B9 Alipay</option>
                                </select>
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                                <lable>Available Region(s) </lable><br />
                                <select class="form-control select2">
                                    <option selected>&#127937 All Region</option>
                                    <option>&#127937 Australia</option>
                                    <option>&#127937 Belgium</option>
                                    <option>&#127937 Brazil</option>
                                    <option>&#127937 Canada</option>
                                    <option>&#127937 Pakistan</option>
                                </select>
                            </div>

                            <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6" id="block-tab-trading-refresh-box">
                                <lable>&nbsp;</lable>
                                <a class="btn btn-yellow shadow mt-4" id="block-tab-trading-filter-btn"> &#x21bb; Filter
                                </a>
                                <div class="block-tab-filter-dropdown">
                                    <ul>
                                        <li><input type="checkbox" /> Only show merchant ads</li>
                                        <li><input type="checkbox" /> Only display ads from Pro Merchant</li>
                                    </ul>
                                </div>
                                <lable>&nbsp;</lable>
                                <a class="btn btn-yellow shadow mt-4" id="block-tab-trading-refresh-btn"> &#x21bb;
                                    Refresh </a>
                                <div class="block-tab-refresh-dropdown">
                                    <ul>
                                        <li>Not Now </li>
                                        <li>5s to Refresh </li>
                                        <li>10s to Refresh </li>
                                        <li>20s to Refresh </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tokens-table table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Advertisers (Completion rate)</th>
                                        <th scope="col">Price <span class="text-warning">(Lowesst to Highest)</span>
                                        </th>
                                        <th scope="col">Limit/Available</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Trade <span class="text-success">0 Fee</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat | <a class="text-warning">Alipay </a>
                                        </td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                    <tr>
                                        <td><b>4641 orders</b><br />
                                            99.90% completion</td>
                                        <td>1,954.49 <small>CNY</small></td>
                                        <td>
                                            <div class="p2p-inner-table-content">
                                                <p>Available <span>0.10795902 BNB</span> </p>
                                                <p>Limit <span>￥100.00-￥211.09</span> </p>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">WeChat</td>
                                        <td><a href="#" class="btn btn-yellow shadow ">Buy BNB</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        Test 3
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="how-p2p-works-box" id="how-p2p-works">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sec-title text-left popular-head-block">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">HOW <span class="yellow-text">P2P WORKS</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" id="p2p-work-block">
                    <ul class="nav nav-tabs P2P-WORKS-tab-box" id="P2P-WORKS" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="P2P-WORKS-home-tab" data-bs-toggle="tab"
                                data-bs-target="#P2P-WORKS-home" type="button" role="tab" aria-controls="P2P-WORKS-home"
                                aria-selected="true">Buy Crypto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="P2P-WORKS-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#P2P-WORKS-profile" type="button" role="tab"
                                aria-controls="P2P-WORKS-profile" aria-selected="false">Sell Crypto</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="P2P-WORKSContent">
                        <div class="tab-pane fade show active" id="P2P-WORKS-home" role="tabpanel"
                            aria-labelledby="P2P-WORKS-home-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="buy-crypto-img-block">
                                    <div class="steps-inner-box">
                                        <img src="{{ asset('img/buy-crypto-img.jpg') }}" class="img-fluid"
                                            alt="gift Card Image">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="steps-inner-box">
                                        <div class="show-number">
                                            <img src="{{ asset('img/p2p-work-icon-1.png') }}"
                                                class="img-fluid" alt="gift Card Image">
                                        </div>
                                        <h4>Place an Order</h4>
                                        <div class="text">Once you place a P2P order, the crypto asset will be escrowed by Wealth Mark
                                            P2P.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="steps-inner-box">
                                        <div class="show-number">
                                            <img src="{{ asset('img/p2p-work-icon-2.png') }}"
                                                class="img-fluid" alt="gift Card Image">
                                        </div>
                                        <h4>Pay the Seller</h4>
                                        <div class="text">Send money to the seller via the suggested payment methods. Complete the
                                            fiat.</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="steps-inner-box">
                                        <div class="show-number">
                                            <img src="{{ asset('img/p2p-work-icon-3.png') }}"
                                                class="img-fluid" alt="gift Card Image">
                                        </div>
                                        <h4>Get your Crypto</h4>
                                        <div class="text">Once the seller confirms receipt of money, the escrowed crypto will be
                                            released to you.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="P2P-WORKS-profile" role="tabpanel"
                            aria-labelledby="P2P-WORKS-profile-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="sell-crypto-img-block">
                                    <div class="steps-inner-box">
                                        <img src="{{ asset('img/sell-cryto.jpg') }}" class="img-fluid"
                                            alt="gift Card Image">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="steps-inner-box">
                                        <div class="show-number">
                                            <img src="{{ asset('img/p2p-work-icon-1.png') }}"
                                                class="img-fluid" alt="gift Card Image">
                                        </div>
                                        <h4>Place an Order</h4>
                                        <div class="text">Once you place a P2P order, the crypto asset will be escrowed by Wealth Mark
                                            P2P.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="steps-inner-box">
                                        <div class="show-number">
                                            <img src="{{ asset('img/confirm-payment.png') }}"
                                                class="img-fluid" alt="gift Card Image">
                                        </div>
                                        <h4>Confirm the Payment</h4>
                                        <div class="text">Send money to the seller via the suggested payment methods. Complete the
                                            fiat.</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="steps-inner-box">
                                        <div class="show-number">
                                            <img src="{{ asset('img/releae-crypto-img.png') }}"
                                                class="img-fluid" alt="gift Card Image">
                                        </div>
                                        <h4>Release Crypto</h4>
                                        <div class="text">Once the seller confirms receipt of money, the escrowed crypto will be
                                            released to you.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section class="exchange-advantages-section" id="exchange-advantages">
        <div class="container">
            <div class="row heading-row-exchange-advantages">
                <div
                    class="col-md-12 col-md-12 col-xs-12 col-sm-6 sec-title text-left exchange-advantages-heading-block">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2"><span class="yellow-text">Advantages</span> of P2P Exchange</h2>
                </div>
            </div>

            <div class="row" id="advantage-content-block">
                <div class="col-md-6 col-lg-6 colsm-12 col-xs-12" id="sm-full-block">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <img loading="lazy" src="{{ asset('img/advantage-p2p-img-1.png') }}"
                                    alt="Research Image" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Low cost transaction fees</h5>
                                    <div class="text">Peer-to-peer exchanges allow sellers freedom to define how they
                                        want to
                                        be paid.</div>
                                    <a href="" class="text-warning">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <img loading="lazy" src="{{ asset('img/advantage-p2p-img-2.png') }}"
                                    alt="Research Image" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Flexible payment methods</h5>
                                    <div class="text">As P2P exchange is a simple platform, the overhead costs are
                                        for buyers and sellers.</div>
                                    <a href="" class="text-warning">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <img loading="lazy" src="{{ asset('img/advantage-p2p-img-3.png') }}"
                                    alt="Research Image" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Trade at preferred prices</h5>
                                    <div class="text">As P2P exchange is a simple platform, the overhead costs are
                                        negligible
                                        for buyers.</div>
                                    <a href="" class="text-warning">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <img loading="lazy" src="{{ asset('img/advantage-p2p-img-4.png') }}"
                                    alt="Research Image" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Protection for your privacy</h5>
                                    <div class="text">Peer-to-peer exchanges bring users freedom to trade crypto at
                                        the
                                        preferred prices.
</div>
                                    <a href="" class="text-warning">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 d-xs-none d-sm-none d-md-block d-lg-block"
                    id="advantage-man-box-main">
                    <div class="advantage-man-box">
                        <img src="{{ asset('img/p2p-exchange-advantage.png') }}"
                            class="img-fluid advantage-man blink-img-animation" alt="gift Card Image">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="p2p-blog-box" id="p2p-blog-section">
        <div class="container">
            <div class="row heading-row-exchange-advantages">
                <div class="col-md-12 col-xs-12 col-sm-12 sec-title text-left exchange-advantages-heading-block">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Wealth Mark <span class="yellow-text">P2P Blog</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/p2p-blog-2.png') }}" alt="Research Image"
                            class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit </h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/p2p-blog-3.png') }}" alt="Research Image"
                            class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit </h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/p2p-blog-1.png') }}" alt="Research Image"
                            class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit </h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/p2p-blog-4.png') }}" alt="Research Image"
                            class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit </h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-block" id="faq-section">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                    <div class="accordion" id="accordian-p2p-trading">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is Wealthmark Pay?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordian-p2p-trading">
                                <div class="accordion-body">
                                <div class="text"> <strong>This is the first item's accordion body.</strong> It is shown by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by
                                    Wealthmark?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordian-p2p-trading">
                                <div class="accordion-body">
                                <div class="text">   <strong>You can access your Wealthmark Pay Wallet by clicking [Wallets] -
                                        [Funding] - [Pay] on your Wealthmark App.</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. How long does it take for a Wealthmark Pay transaction to be completed?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordian-p2p-trading">
                                <div class="accordion-body">
                                <div class="text">     <strong>Wealthmark Pay transactions are usually confirmed instantly.</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    4. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by
                                    Wealthmark?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordian-p2p-trading">
                                <div class="accordion-body">
                                <div class="text">  <strong>You can access your Wealthmark Pay Wallet by clicking [Wallets] -
                                        [Funding] - [Pay] on your Wealthmark App.</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    5. How long does it take for a Wealthmark Pay transaction to be completed?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordian-p2p-trading">
                                <div class="accordion-body">
                                <div class="text"> <strong>Wealthmark Pay transactions are usually confirmed instantly.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <!-- Modal -->
    <div class="modal fade" id="trading-express-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="trading-express-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">

                        <div
                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                            <div class="cash-balance-buy-sell-tab" id="p2p-trading-buy-sell-tab">
                                <nav class="cash-balance-navbar">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Buy</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Sell</button>
                                    </div>
                                </nav>
                                <div class="tab-content casb-balance-tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row mb-2">
                                            <div class="col-md-12 col-lg-12 col-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-12 col-xs-12 mt-4">
                                                        <strong>I want to pay </strong>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Amount" aria-label="Enter Amount"
                                                                aria-describedby="basic-addon2">
                                                            <div class="input-group-append" onclick="myFunction()"
                                                                class="dropbtn">
                                                                <span class="input-group-text" id="basic-addon2">&#8377;
                                                                    INR &#129171; </span>
                                                                <div id="express-buy-sell-dropdown"
                                                                    class="express-dropdown-content show">
                                                                    <input type="text" placeholder="Search.."
                                                                        id="myInput" onkeyup="filterFunction()">
                                                                    <a href="#about">About</a>
                                                                    <a href="#base">Base</a>
                                                                    <a href="#blog">Blog</a>
                                                                    <a href="#contact">Contact</a>
                                                                    <a href="#custom">Custom</a>
                                                                    <a href="#support">Support</a>
                                                                    <a href="#tools">Tools</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <p class="text-danger">Insufficient balance, please top up your
                                                            Funding Wallet </p>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-12 col-xs-12">
                                                        <strong>I want receive </strong>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Crypto Amount"
                                                                aria-label="Enter Crypto Amount"
                                                                aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">&#8377;
                                                                    INR &#129171; </span>
                                                            </div>
                                                        </div>
                                                        <span>Reference price
                                                            ₹1,660,000.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row mb-2">
                                            <div class="col-md-12 col-lg-12 col-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-12 col-xs-12 mt-4">
                                                        <strong>I want to pay </strong>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Amount" aria-label="Enter Amount"
                                                                aria-describedby="basic-addon2">
                                                            <div class="input-group-append" onclick="myFunction()"
                                                                class="dropbtn">
                                                                <span class="input-group-text" id="basic-addon2">&#8377;
                                                                    INR &#129171; </span>
                                                                <div id="express-buy-sell-dropdown"
                                                                    class="express-dropdown-content show">
                                                                    <input type="text" placeholder="Search.."
                                                                        id="myInput" onkeyup="filterFunction()">
                                                                    <a href="#about">About</a>
                                                                    <a href="#base">Base</a>
                                                                    <a href="#blog">Blog</a>
                                                                    <a href="#contact">Contact</a>
                                                                    <a href="#custom">Custom</a>
                                                                    <a href="#support">Support</a>
                                                                    <a href="#tools">Tools</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <p class="text-danger">Insufficient balance, please top up your
                                                            Funding Wallet </p>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-12 col-xs-12">
                                                        <strong>I want receive </strong>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Crypto Amount"
                                                                aria-label="Enter Crypto Amount"
                                                                aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">&#8377;
                                                                    INR &#129171; </span>
                                                            </div>
                                                        </div>
                                                        <span>Reference price
                                                            ₹1,660,000.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div
                            class="col-lg-12 col-md-12  col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                            <a class="btn btn-yellow shadow mt-3 mb-3 buy-with-btn">Buy with
                                0 Fee </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('.select2').select2();
    </script>

    <script>
    $(document).ready(function() {
        $("#trading-refresh-btn").click(function() {
            $(".refresh-dropdown").toggle();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#trading-filter-btn").click(function() {
            $(".filter-dropdown").toggle();
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $("#block-tab-trading-refresh-btn").click(function() {
            $(".block-tab-refresh-dropdown").toggle();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#block-tab-trading-filter-btn").click(function() {
            $(".block-tab-filter-dropdown").toggle();
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $(".tradinguser-guide-box").click(function() {
            $(".normal-dropdown").toggle();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".trading-moreoption-box").click(function() {
            $(".normal-dropdown2").toggle();
        });
    });
    </script>



    <script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
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
    </script>
    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>