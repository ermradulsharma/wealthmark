<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    <style>
        @media(max-width:768px){
                #market-heading-top-row{
                    margin-top:50px;
                }
        }
        .sec-title {
    margin-top: 0px;
}
    </style>
</head>

<body>
    @include('template.web_menu')

    <section class="market-table-group p-3" id="market-table-group-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sec-title text-left" id="market-heading-top-row">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Markets</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover market-coin-table">
                            <tr>
                                <th colspan="+3">
                                    <h6>Highlight Coin </h6>
                                </th>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover new-listing-table">
                            <tr>
                                <th colspan="+2">
                                    <h6>New Listing</h6>
                                </th>
                                <th>
                                    <div class="right-angle-arrow">
                                        <svg viewBox="0 0 24 24" fill="none" class="css-8q8u36">
                                            <path
                                                d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-4.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>OSMO </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-5.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>APT </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-6.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>KDA </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover gainer-coin-table">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top Gainer Coin</h6>
                                </th>
                                <th>
                                    <a class="top-gainer-link" id="gainer-box">
                                        <div class="right-angle-arrow">
                                            <svg viewBox="0 0 24 24" fill="none" class="css-8q8u36">
                                                <path
                                                    d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-7.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>LAZIO </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-8.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>PIVX </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-9.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>PORTO </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover volume-coin-table">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top Volume Coin</h6>
                                </th>
                                <th>
                                    <a class="top-volume-link" id="volume-box">
                                        <div class="right-angle-arrow">
                                            <svg viewBox="0 0 24 24" fill="none" class="css-8q8u36">
                                                <path
                                                    d="M14.65 12.24l-4.24 4.24L9 15.06l2.82-2.82L9 9.42 10.41 8l4.24 4.24z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-10.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BTC </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-11.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>ETH </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th><img src="{{ asset('assets/img/high-light-icon-12.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>DOGE </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="market-second-block pb-0 pt-0" id="market-second-section-block">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="market-tab-block">
                        <ul class="nav nav-tabs" id="market-Tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="market-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#market-home" type="button" role="tab" aria-controls="market-home"
                                    aria-selected="true"><svg viewBox="0 0 24 24" fill="none" class="css-1p1vtse">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.173 3.007L12.768 3l2.41 5.11 5.326.831.496 1.495-3.89 4.013.895 5.636-1.298.915-4.735-2.648L7.236 21l-1.296-.923.946-5.632L3 10.436l.496-1.495 5.322-.83 2.355-5.104z"
                                            fill="currentColor"></path>
                                    </svg> Favorites</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="market-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#market-profile" type="button" role="tab"
                                    aria-controls="market-profile" aria-selected="false">All Cryptos</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="market-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#market-contact" type="button" role="tab"
                                    aria-controls="market-contact" aria-selected="false">Spot Market</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="future-market-tab" data-bs-toggle="tab"
                                    data-bs-target="#future-market" type="button" role="tab"
                                    aria-controls="future-market" aria-selected="true">Futures Market</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="new-listing-tab" data-bs-toggle="tab"
                                    data-bs-target="#new-listing" type="button" role="tab" aria-controls="new-listing"
                                    aria-selected="false">New Listing</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="market-search-block">
                        <input type="text" class="form-control" placeholder="Search" />
                        <svg viewBox="0 0 24 24" fill="none" class="market-search-icon">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="market-tab-block">

                        <div class="tab-content" id="market-TabsContent">
                            <div class="tab-pane fade show active" id="market-home" role="tabpanel"
                                aria-labelledby="market-home-tab">
                                <ul class="nav nav-tabs" id="favorites-sub--main" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="favorites-sub-one-tab" data-bs-toggle="tab"
                                            data-bs-target="#favorites-sub-one" type="button" role="tab"
                                            aria-controls="favorites-sub-one" aria-selected="true">Spot(0)</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="favorites-sub-two-tab" data-bs-toggle="tab"
                                            data-bs-target="#favorites-sub-two" type="button" role="tab"
                                            aria-controls="favorites-sub-two" aria-selected="false">Futures(7)</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="favorites-sub--mainContent">
                                    <div class="tab-pane fade show active" id="favorites-sub-one" role="tabpanel"
                                        aria-labelledby="favorites-sub-one-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>1h 4h 24h Change</th>
                                                        <th>24h High / 24h Low</th>
                                                        <th>24h Volume</th>
                                                        <th>Market Cap</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>BTCUSDT perpetual</td>
                                                        <td>16,928.80 / $16,928.80</td>
                                                        <td>
                                                            <p class="text-danger">-1.41%</p>
                                                        </td>
                                                        <td>
                                                            <p class="text-success">17,265.00 / 16,865.00</p>
                                                        </td>
                                                        <td>4,324.86M</td>
                                                        <td><a>Data History</a><a>Trade</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="favorites-sub-two" role="tabpanel"
                                        aria-labelledby="favorites-sub-two-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>1h 4h 24h Change</th>
                                                        <th>24h High / 24h Low</th>
                                                        <th>24h Volume</th>
                                                        <th>Market Cap</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>BTCUSDT perpetual</td>
                                                        <td>16,928.80 / $16,928.80</td>
                                                        <td>
                                                            <p class="text-danger">-1.41%</p>
                                                        </td>
                                                        <td>
                                                            <p class="text-success">17,265.00 / 16,865.00</p>
                                                        </td>
                                                        <td>4,324.86M</td>
                                                        <td><a>Data History</a><a>Trade</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- favourite tab content end -->
                            <div class="tab-pane fade" id="market-profile" role="tabpanel"
                                aria-labelledby="market-profile-tab">
                                <div class="All-crypto-sub-tabs">
                                    <ul class="nav nav-tabs" id="All_CryptoTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="all_crypto-tab" data-bs-toggle="tab"
                                                data-bs-target="#all_crypto" type="button" role="tab"
                                                aria-controls="all_crypto" aria-selected="true">ALL</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Metaverse-tab" data-bs-toggle="tab"
                                                data-bs-target="#Metaverse" type="button" role="tab"
                                                aria-controls="Metaverse" aria-selected="false">Metaverse</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Gaming-tab" data-bs-toggle="tab"
                                                data-bs-target="#Gaming" type="button" role="tab" aria-controls="Gaming"
                                                aria-selected="false">Gaming</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="DeFi-tab" data-bs-toggle="tab"
                                                data-bs-target="#DeFi" type="button" role="tab" aria-controls="DeFi"
                                                aria-selected="true">DeFi</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Innovation-tab" data-bs-toggle="tab"
                                                data-bs-target="#Innovation" type="button" role="tab"
                                                aria-controls="Innovation" aria-selected="false">Innovation</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="layerone-tow-tab" data-bs-toggle="tab"
                                                data-bs-target="#layerone-tow" type="button" role="tab"
                                                aria-controls="layerone-tow" aria-selected="false">Layer 1/ Layer
                                                2</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="FanToken-tab" data-bs-toggle="tab"
                                                data-bs-target="#FanToken" type="button" role="tab"
                                                aria-controls="FanToken" aria-selected="true">Fan Token</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="NFT-tab" data-bs-toggle="tab"
                                                data-bs-target="#NFT" type="button" role="tab" aria-controls="NFT"
                                                aria-selected="false">NFT</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Storage-tab" data-bs-toggle="tab"
                                                data-bs-target="#Storage" type="button" role="tab"
                                                aria-controls="Storage" aria-selected="false">Storage</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Polkadot-tab" data-bs-toggle="tab"
                                                data-bs-target="#Polkadot" type="button" role="tab"
                                                aria-controls="Polkadot" aria-selected="true">Polkadot</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="POS-tab" data-bs-toggle="tab"
                                                data-bs-target="#POS" type="button" role="tab" aria-controls="POS"
                                                aria-selected="false">POS</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="POW-tab" data-bs-toggle="tab"
                                                data-bs-target="#POW" type="button" role="tab" aria-controls="POW"
                                                aria-selected="false">POW</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Launchpad-tab" data-bs-toggle="tab"
                                                data-bs-target="#Launchpad" type="button" role="tab"
                                                aria-controls="Launchpad" aria-selected="true">Launchpad</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Launchpool-tab" data-bs-toggle="tab"
                                                data-bs-target="#Launchpool" type="button" role="tab"
                                                aria-controls="Launchpool" aria-selected="false">Launchpool</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="WMChain-tab" data-bs-toggle="tab"
                                                data-bs-target="#WMChain" type="button" role="tab"
                                                aria-controls="WMChain" aria-selected="false">WM Chain</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ETF-tab" data-bs-toggle="tab"
                                                data-bs-target="#ETF" type="button" role="tab" aria-controls="ETF"
                                                aria-selected="true">ETF</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Infrastructure-tab" data-bs-toggle="tab"
                                                data-bs-target="#Infrastructure" type="button" role="tab"
                                                aria-controls="Infrastructure"
                                                aria-selected="false">Infrastructure</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="All_CryptoTabContent">
                                        <div class="tab-pane fade show active" id="all_crypto" role="tabpanel"
                                            aria-labelledby="all_crypto-tab">
                                            <div class="d-flex justify-content-center pb-5">


                                                <!-- TradingView Widget BEGIN -->
                                                <div class="tradingview-widget-container">
                                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                                    {
                                                    "width": 770,
                                                    "height": 550,
                                                    "symbolsGroups": [
                                                      {
                                                        "name": "Coins",
                                                        "symbols": [
                                                          {
                                                            "name": "BINANCE:BTCUSDT",
                                                            "displayName": "BTC Bitcoin"
                                                          },
                                                          {
                                                            "name": "BINANCE:ETHUSDT",
                                                            "displayName": "ETH Ethereum"
                                                          },
                                                          {
                                                            "name": "CRYPTOCAP:USDT",
                                                            "displayName": "USDT TehterUS"
                                                          },
                                                          {
                                                            "name": "BINANCE:DOGEUSDT",
                                                            "displayName": "DOGE Dogecoin"
                                                          },
                                                          {
                                                            "name": "BINANCE:LTCUSDT",
                                                            "displayName": "LTC Litecoin"
                                                          },
                                                          {
                                                            "name": "BINANCE:DOTUSDT",
                                                            "displayName": "DOT Polkadot"
                                                          },
                                                          {
                                                            "name": "BINANCE:XRPUSDT",
                                                            "displayName": "XRP Ripple"
                                                          },
                                                          {
                                                            "name": "BINANCE:ADAUSDT",
                                                            "displayName": "ADA Cardano"
                                                          },
                                                          {
                                                            "name": "BINANCE:SOLUSDT",
                                                            "displayName": "SOL Solana"
                                                          }

                                                        ]
                                                      }
                                                    ],
                                                    "showSymbolLogo": true,
                                                    "colorTheme": "light",
                                                    "isTransparent": false,
                                                    "locale": "en"
                                                  }
                                                    </script>
           </div>



                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Metaverse" role="tabpanel"
                                            aria-labelledby="Metaverse-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Gaming" role="tabpanel"
                                            aria-labelledby="Gaming-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="DeFi" role="tabpanel" aria-labelledby="DeFi-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Innovation" role="tabpanel"
                                            aria-labelledby="Innovation-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="layerone-tow" role="tabpanel"
                                            aria-labelledby="layerone-tow-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="FanToken" role="tabpanel"
                                            aria-labelledby="FanToken-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="NFT" role="tabpanel" aria-labelledby="NFT-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Storage" role="tabpanel"
                                            aria-labelledby="Storage-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Polkadot" role="tabpanel"
                                            aria-labelledby="Polkadot-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="POS" role="tabpanel" aria-labelledby="POS-tab">

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="POW" role="tabpanel" aria-labelledby="POW-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Launchpad" role="tabpanel"
                                            aria-labelledby="Launchpad-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Launchpool" role="tabpanel"
                                            aria-labelledby="Launchpool-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="WMChain" role="tabpanel"
                                            aria-labelledby="WMChain-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="ETF" role="tabpanel" aria-labelledby="ETF-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="Infrastructure" role="tabpanel"
                                            aria-labelledby="Infrastructure-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- All crypto tab content end -->
                            <div class="tab-pane fade" id="market-contact" role="tabpanel"
                                aria-labelledby="market-contact-tab">
                                <div class="sport-market-sub-tabs">
                                    <ul class="nav nav-pills mb-3" id="sport-market-main" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="spot-market-BUSD-tab"
                                                data-bs-toggle="pill" data-bs-target="#spot-market-BUSD" type="button"
                                                role="tab" aria-controls="spot-market-BUSD"
                                                aria-selected="true">USD</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="spot-market-USDT-tab" data-bs-toggle="pill"
                                                data-bs-target="#spot-market-USDT" type="button" role="tab"
                                                aria-controls="spot-market-USDT" aria-selected="false">USDT</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="spot-market-BNB-tab" data-bs-toggle="pill"
                                                data-bs-target="#spot-market-BNB" type="button" role="tab"
                                                aria-controls="spot-market-BNB" aria-selected="true">BNB</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="spot-market-BTC-tab" data-bs-toggle="pill"
                                                data-bs-target="#spot-market-BTC" type="button" role="tab"
                                                aria-controls="spot-market-BTC" aria-selected="false">BTC</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="spot-market-ALTS-tab" data-bs-toggle="pill"
                                                data-bs-target="#spot-market-ALTS" type="button" role="tab"
                                                aria-controls="spot-market-ALTS" aria-selected="false">ALTS</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="spot-market-FIAT-tab" data-bs-toggle="pill"
                                                data-bs-target="#spot-market-FIAT" type="button" role="tab"
                                                aria-controls="spot-market-FIAT" aria-selected="true">FIAT(All)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="spot-market-ETF-tab" data-bs-toggle="pill"
                                                data-bs-target="#spot-market-ETF" type="button" role="tab"
                                                aria-controls="spot-market-ETF" aria-selected="false">ETF</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="futures-market-mainTabContent">
                                        <div class="tab-pane fade show active" id="spot-market-BUSD" role="tabpanel"
                                            aria-labelledby="spot-market-BUSD-tab">
                                            <div class="d-flex justify-content-center pb-5">
                                    <!----------------------------------usd table------------------------->
                                    <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                {
                "width": 770,
                "height": 450,
                "symbolsGroups": [
                {
                    "name": "Spot Markets",
                    "symbols": [
                    {
                        "name": "COINBASE:BTCUSD",
                        "displayName": "BTC/USD"
                    },
                    {
                        "name": "COINBASE:ETHUSD",
                        "displayName": "ETH/USD"
                    },
                    {
                        "name": "COINBASE:USDTUSD",
                        "displayName": "TETHER/USD"
                    },
                    {
                        "name": "COINBASE:DOGEUSD",
                        "displayName": "DOGE/USD"
                    },
                    {
                        "name": "COINBASE:LTCUSD",
                        "displayName": "LTC/USD"
                    },
                    {
                        "name": "COINBASE:DOTUSD",
                        "displayName": "DOT/USD"
                    },
                    {
                        "name": "BITSTAMP:XRPUSD",
                        "displayName": "XRP/USD"
                    },
                    {
                        "name": "COINBASE:ADAUSD",
                        "displayName": "ADA/USD"
                    },
                    {
                        "name": "COINBASE:SOLUSD",
                        "displayName": "SOL/USD"
                    }
                    ]
                }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "locale": "en"
            }
                </script>
            </div>
            <!-- TradingView Widget END -->



                                </div>
                                        </div>

                                        <div class="tab-pane fade" id="spot-market-USDT" role="tabpanel"
                                            aria-labelledby="spot-market-USDT-tab">
                                            <div class="d-flex justify-content-center pb-5">


                                  <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
            {
            "width": 770,
            "height": 450,
            "symbolsGroups": [
              {
                "name": "Spot Markets",
                "symbols": [
                  {
                    "name": "COINBASE:BTCUSDT",
                    "displayName": "BTC/USDT"
                  },
                  {
                    "name": "COINBASE:ETHUSDT",
                    "displayName": "ETH/USDT"
                  },
                  {
                    "name": "CRYPTOCAP:USDT",
                    "displayName": "TETHER/USDT"
                  },
                  {
                    "name": "COINBASE:DOGEUSDT",
                    "displayName": "DOGE/USDT"
                  },
                  {
                    "name": "KUCOIN:LTCUSDT",
                    "displayName": "LTC/USDT"
                  },
                  {
                    "name": "COINBASE:DOTUSDT",
                    "displayName": "DOT/USDT"
                  },
                  {
                    "name": "BITSTAMP:XRPUSDT",
                    "displayName": "XRP/USDT"
                  },
                  {
                    "name": "COINBASE:ADAUSDT",
                    "displayName": "ADA/USDT"
                  },
                  {
                    "name": "COINBASE:SOLUSDT",
                    "displayName": "SOL/USDT"
                  }
                ]
              }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "locale": "en"
          }
            </script>
          </div>
          <!-- TradingView Widget END -->



                                </div>
                                        </div>

                                        <div class="tab-pane fade" id="spot-market-BNB" role="tabpanel"
                                            aria-labelledby="spot-market-BNB-tab">
                                            <div class="d-flex justify-content-center pb-5">
                                   <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
            {
            "width": 770,
            "height": 450,
            "symbolsGroups": [
              {
                "name": "Cons",
                "symbols": [
                  {
                    "name": "POLONIEX:BTCBNB",
                    "displayName": "BTC/BNB"
                  },
                  {
                    "name": "BINANCE:DOTBNB",
                    "displayName": "DOT/XRP"
                  },
                  {
                    "name": "BINANCE:XRPBNB",
                    "displayName": "XRP/BNB"
                  },
                  {
                    "name": "BINANCE:LTCBNB",
                    "displayName": "LTC/BNB"
                  },
                  {
                    "name": "BINANCE:ADABNB",
                    "displayName": "ADA/BNB"
                  },
                  {
                    "name": "BINANCE:SOLBNB",
                    "displayName": "SOL/BNB"
                  }
                ]
              }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "locale": "en"
          }
            </script>
          </div>
      <!-- TradingView Widget END -->

                                </div>
                                        </div>

                                        <div class="tab-pane fade" id="spot-market-BTC" role="tabpanel"
                                            aria-labelledby="spot-market-BTC-tab">
                                            <div class="d-flex justify-content-center pb-5">

                                   <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">

          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
          {
          "width": 770,
          "height": 450,
          "symbolsGroups": [
            {
              "name": "Cons",
              "symbols": [
                {
                  "name": "BINANCE:ETHBTC",
                  "displayName": "ETH/BTC"
                },
                {
                  "name": "BINANCE:XRPBTC",
                  "displayName": "XRP/BTC"
                },
                {
                  "name": "BINANCE:DOTBTC",
                  "displayName": "DOT/BTC"
                },
                {
                  "name": "BINANCE:LTCBTC",
                  "displayName": "LTC/BTC"
                },
                {
                  "name": "BINANCE:ADABTC",
                  "displayName": "ADA/BTC"
                },
                {
                  "name": "BINANCE:DOGEBTC",
                  "displayName": "DOGE/BTC"
                },
                {
                  "name": "BINANCE:SOLBTC",
                  "displayName": "SOL/BTC"
                },
                {
                  "name": "POLONIEX:USDTBTC",
                  "displayName": "USDT/BTC"
                }
              ]
            }
          ],
          "showSymbolLogo": true,
          "colorTheme": "light",
          "isTransparent": false,
          "locale": "en"
        }
          </script>
        </div>
<!-- TradingView Widget END -->

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="spot-market-ALTS" role="tabpanel"
                                            aria-labelledby="spot-market-ALTS-tab">
                                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>1h 4h 24h Change</th>
                                                <th>24h High / 24h Low</th>
                                                <th>24h Volume</th>
                                                <th>Market Cap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">20,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>20,826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">60,501.00 </span> /<span>
                                                        $90,501.00</span></td>
                                                <td> <span class="text-text text-danger">-51.57%</span></td>
                                                <td><span>826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data History</span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">Trade</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">55,501.00 </span> /<span>
                                                        $30,501.00</span></td>
                                                <td> <span class="text-text text-danger">-14.57%</span></td>
                                                <td><span>2826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">80,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>626.20 / 20,416.00 </span> </td>
                                                <td><span>6825.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">820,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>620826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                        </div>

                                        <div class="tab-pane fade" id="spot-market-FIAT" role="tabpanel"
                                            aria-labelledby="spot-market-FIAT-tab">
                                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>1h 4h 24h Change</th>
                                                <th>24h High / 24h Low</th>
                                                <th>24h Volume</th>
                                                <th>Market Cap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">20,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>20,826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">60,501.00 </span> /<span>
                                                        $90,501.00</span></td>
                                                <td> <span class="text-text text-danger">-51.57%</span></td>
                                                <td><span>826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data History</span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">Trade</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">55,501.00 </span> /<span>
                                                        $30,501.00</span></td>
                                                <td> <span class="text-text text-danger">-14.57%</span></td>
                                                <td><span>2826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">80,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>626.20 / 20,416.00 </span> </td>
                                                <td><span>6825.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">820,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>620826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                        </div>

                                        <div class="tab-pane fade" id="spot-market-ETF" role="tabpanel"
                                            aria-labelledby="spot-market-ETF-tab">
                                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>1h 4h 24h Change</th>
                                                <th>24h High / 24h Low</th>
                                                <th>24h Volume</th>
                                                <th>Market Cap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">20,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>20,826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">60,501.00 </span> /<span>
                                                        $90,501.00</span></td>
                                                <td> <span class="text-text text-danger">-51.57%</span></td>
                                                <td><span>826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data History</span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">Trade</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">55,501.00 </span> /<span>
                                                        $30,501.00</span></td>
                                                <td> <span class="text-text text-danger">-14.57%</span></td>
                                                <td><span>2826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">80,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>626.20 / 20,416.00 </span> </td>
                                                <td><span>6825.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>BUSD </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">820,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>620826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Data
                                                        History</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- Spot markets tab content end -->
                            <div class="tab-pane fade" id="future-market" role="tabpanel"
                                aria-labelledby="future-market-tab">
                                <div class="futures-market-sub-tabs">
                                    <p class="alert alert-warning">Favorites can only be added with a Futures Trade
                                        account <span class="text-warning">Open Now >></span> </p>
                                    <ul class="nav nav-pills mb-3" id="futures-market-mainTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="futures-market-one-tab"
                                                data-bs-toggle="pill" data-bs-target="#futures-market-one" type="button"
                                                role="tab" aria-controls="futures-market-one" aria-selected="true">USD &
                                                Copy-M Futures</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="futures-market-two-tab" data-bs-toggle="pill"
                                                data-bs-target="#futures-market-two" type="button" role="tab"
                                                aria-controls="futures-market-two" aria-selected="false">Coin M
                                                Futures</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="futures-market-mainTabContent">

                                        <div class="tab-pane fade show active" id="futures-market-one" role="tabpanel"
                                            aria-labelledby="futures-market-one-tab">
                                            <div class="d-flex justify-content-center pb-5">


                                                 <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                    {
                    "width": 770,
                    "height": 600,
                    "symbolsGroups": [
                    {
                        "name": "Futures Market",
                        "symbols": [
                        {
                            "name": "BYBIT:BTCUSD.P",
                            "displayName": "BTCUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:BTCUSDT.P",
                            "displayName": "BTCUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:ETHUSDZ2022",
                            "displayName": "ETHUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:ETHUSDT.P",
                            "displayName": "ETHUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:DOGEUSDT.P",
                            "displayName": "DOGEUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:LTCUSD.P",
                            "displayName": "LTCUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:LTCUSDT.P",
                            "displayName": "LTCUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:DOTUSD.P",
                            "displayName": "DOTUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:DOTUSDT.P",
                            "displayName": "DOTUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:XRPUSD.P",
                            "displayName": "XRPUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:XRPUSDT.P",
                            "displayName": "XRPUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:ADAUSD.P",
                            "displayName": "ADAUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:ADAUSDT.P",
                            "displayName": "ADAUSDT Perpetual"
                        },
                        {
                            "name": "BYBIT:SOLUSD.P",
                            "displayName": "SOLUSD Perpetual"
                        },
                        {
                            "name": "BYBIT:SOLUSDT.P",
                            "displayName": "SOLUSDT Perpetual"
                        }
                        ]
                    }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": false,
                    "locale": "en"
                }
                    </script>
                </div>
  <!-- TradingView Widget END -->


                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="futures-market-two" role="tabpanel"
                                            aria-labelledby="futures-market-two-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>1h 4h 24h Change</th>
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th>
                                                            <th>Market Cap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">20,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>20,826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning listing-tab-detail-modal"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">60,501.00 </span> /<span>
                                                                    $90,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-51.57%</span></td>
                                                            <td><span>826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span class="text-warning">Detail</span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">55,501.00 </span> /<span>
                                                                    $30,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-14.57%</span></td>
                                                            <td><span>2826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">80,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>626.20 / 20,416.00 </span> </td>
                                                            <td><span>6825.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="market-future-tab">
                                                                    <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                                        class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                                    <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                                </div>
                                                            </td>
                                                            <td> <span class="text-success">820,501.00 </span> /<span>
                                                                    $20,501.00</span></td>
                                                            <td> <span class="text-text text-danger">-1.57%</span></td>
                                                            <td><span>620826.20 / 20,416.00 </span> </td>
                                                            <td><span>6,625.54M</span> </td>
                                                            <td><span
                                                                    class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                    class="text-warning">Trade</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- futures markets tab content end -->

                            <div class="tab-pane fade" id="new-listing" role="tabpanel"
                                aria-labelledby="new-listing-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>1h 4h 24h Change</th>
                                                <th>24h High / 24h Low</th>
                                                <th>24h Volume</th>
                                                <th>Market Cap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">20,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>20,826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning listing-tab-detail-modal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">60,501.00 </span> /<span>
                                                        $90,501.00</span></td>
                                                <td> <span class="text-text text-danger">-51.57%</span></td>
                                                <td><span>826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span class="text-warning">Detail</span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">Trade</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-4.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">55,501.00 </span> /<span>
                                                        $30,501.00</span></td>
                                                <td> <span class="text-text text-danger">-14.57%</span></td>
                                                <td><span>2826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span
                                                        class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-11.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">80,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>626.20 / 20,416.00 </span> </td>
                                                <td><span>6825.54M</span> </td>
                                                <td><span
                                                        class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="market-future-tab">
                                                        <img src="{{ asset('assets/img/high-light-icon-12.png') }}"
                                                            class="img-fluid" alt="Market img">&nbsp;&nbsp;
                                                        <p>BTCUSDT <span>PERTECTUAL </span></p>
                                                    </div>
                                                </td>
                                                <td> <span class="text-success">820,501.00 </span> /<span>
                                                        $20,501.00</span></td>
                                                <td> <span class="text-text text-danger">-1.57%</span></td>
                                                <td><span>620826.20 / 20,416.00 </span> </td>
                                                <td><span>6,625.54M</span> </td>
                                                <td><span
                                                        class="text-warning">Detail</span>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                        class="text-warning">Trade</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- new listing tab content end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-gainer-detailed-content pb-0" id="three-grouped-sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="market-chart-svg-icon">
                    <a class="market-overview-link" id="back-market-top-tbls">
                        <h4><svg width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                            <svg viewBox="0 0 24 24" fill="none" class="css-1iztezc">
                                <path
                                    d="M2 12C2 6.477 6.477 2 12 2v10l7.071 7.071A9.97 9.97 0 0112 22C6.477 22 2 17.523 2 12z"
                                    fill="url(#chart-pie-g_svg__paint0_linear)"></path>
                                <path d="M19.071 4.929c3.905 3.905 3.905 10.237 0 14.142L12 12l7.071-7.071z"
                                    fill="#76808F">
                                </path>
                                <defs>
                                    <linearGradient id="chart-pie-g_svg__paint0_linear" x1="10.536" y1="22" x2="10.536"
                                        y2="2" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            Back from Markets overview
                        </h4>
                    </a>
                </div>
            </div>
            <div class="row" id="markets-overview">

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top Gainers</h6>
                                </th>
                                <th colspan="+2">
                                    <select class="form-control">
                                        <option>Crypto </option>
                                        <option>All Market</option>
                                        <option>BNB Market</option>
                                        <option>BTC Market </option>
                                        <option>ETH Market</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>S.No </th>
                                <th>Name </th>
                                <td>Price </td>
                                <td>24h Change </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">1 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">2</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">3</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">4 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">5</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">6</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">7 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">8</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">9</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">10 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">11</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">12</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top Loosers</h6>
                                </th>
                                <th colspan="+2">
                                    <select class="form-control">
                                        <option>Crypto </option>
                                        <option>All Market</option>
                                        <option>BNB Market</option>
                                        <option>BTC Market </option>
                                        <option>ETH Market</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>S.No </th>
                                <th>Name </th>
                                <td>Price </td>
                                <td>24h Change </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">1 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">2</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">3</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">4 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">5</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">6</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">7 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">8</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">9</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">10 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">11</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">12</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top Volume</h6>
                                </th>
                                <th colspan="+2">
                                    <select class="form-control">
                                        <option>Crypto </option>
                                        <option>All Market</option>
                                        <option>BNB Market</option>
                                        <option>BTC Market </option>
                                        <option>ETH Market</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>S.No </th>
                                <th>Name </th>
                                <td>Price </td>
                                <td>24h Change </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">1 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">2</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">3</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">4 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">5</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">6</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">7 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">8</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">9</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">10 </th>
                                <th><img src="{{ asset('assets/img/high-light-icon-1.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">11</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-2.jpg') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">12</th>
                                <th><img src="{{ asset('assets/img/high-light-icon-3.png') }}" class="img-fluid"
                                        alt="Market img">&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>


            <div class="row" id="markets-overview">

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top USDT-ⓜ Futures</h6>
                                </th>
                                <th colspan="+2">

                                </th>
                            </tr>
                            <tr>
                                <th>S.No </th>
                                <th>Name </th>
                                <td>Price </td>
                                <td>24h Change </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">1 </th>
                                <th>&nbsp;&nbsp;<strong>LITUSDT </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">2</th>
                                <th>&nbsp;&nbsp;<strong>FOOTBALL </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">3</th>
                                <th>&nbsp;&nbsp;<strong>ALGOUS </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">4 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">5</th>
                                <th>&nbsp;&nbsp;<strong>AVAXUSDT </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">6</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">7 </th>
                                <th>&nbsp;&nbsp;<strong>AVAXUSDT </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">8</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">9</th>
                                <th>&nbsp;&nbsp;<strong>AVAXUSDT </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">10 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">11</th>
                                <th>&nbsp;&nbsp;<strong>BNBBUSD </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">12</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top COIN-ⓜ Futures</h6>
                                </th>
                                <th colspan="+2">

                                </th>
                            </tr>
                            <tr>
                                <th>S.No </th>
                                <th>Name </th>
                                <td>Price </td>
                                <td>24h Change </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">1 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">2</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">3</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">4 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">5</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">6</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">7 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">8</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">9</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">10 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">11</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">12</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top ETF</h6>
                                </th>
                                <th colspan="+2">

                                </th>
                            </tr>
                            <tr>
                                <th>S.No </th>
                                <th>Name </th>
                                <td>Price </td>
                                <td>24h Change </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">1 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">2</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">3</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">4 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">5</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">6</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">7 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">8</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">9</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">10 </th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">309.9 </span> </td>
                                <td><span class="text-danger">0.49% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">11</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-danger">309.9 </span> </td>
                                <td><span class="text-success">+1.12% </span> </td>
                            </tr>
                            <tr>
                                <th class="overview-first-column">12</th>
                                <th>&nbsp;&nbsp;<strong>BNB </strong></th>
                                <td><span class="text-success">19.9 </span> </td>
                                <td><span class="text-danger">+4.51% </span> </td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>

            <div class="row" id="markets-overview">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive Price-distribution-table">
                        <h6>Price Change Distribution</h6>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="Markets-top-table-block table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th colspan="+2">
                                    <h6>Top Movers</h6>
                                </th>
                                <th colspan="+2">

                                </th>
                            </tr>
                            <tr>
                                <th>Name </th>
                                <td>Status </td>
                                <td>Change</td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ALCX/USDT </strong></th>
                                <td><span>In 5m </span> </td>
                                <td><span class="text-danger">+3.07%
                                        <svg viewBox="0 0 16 16" fill="currentColor" class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11 9h2l-3 3-3-3h2.256V6.388c0-.884-.783-1.602-1.75-1.602-.966 0-1.75.718-1.75 1.602V13H4V6.388C4 4.52 5.569 3 7.5 3 9.432 3 11 4.521 11 6.388V9z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span> </td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ALCX/BTC </strong></th>
                                <td><span>In 5m</span> </td>
                                <td><span class="text-danger">+3.07%
                                        <svg viewBox="0 0 16 16" fill="currentColor" class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11 9h2l-3 3-3-3h2.256V6.388c0-.884-.783-1.602-1.75-1.602-.966 0-1.75.718-1.75 1.602V13H4V6.388C4 4.52 5.569 3 7.5 3 9.432 3 11 4.521 11 6.388V9z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span> </td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ASTR/USDT </strong></th>
                                <td><span>New 7d High</span> </td>
                                <td><span class="text-success">+4.51%<svg viewBox="0 0 16 16" fill="currentColor"
                                            class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11 9h2l-3-3-3 3h2.256v.612c0 .884-.783 1.602-1.75 1.602-.966 0-1.75-.718-1.75-1.602V3H4v6.612C4 11.48 5.569 13 7.5 13c1.932 0 3.5-1.521 3.5-3.388V9z"
                                                fill="currentColor"></path>
                                        </svg></span> </td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ALCX/USDT </strong></th>
                                <td><span>In 5m </span> </td>
                                <td><span class="text-success">+3.07%
                                        <svg viewBox="0 0 16 16" fill="currentColor" class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.077 4.308h4.615v4.615L9.846 7.077 4.77 12.154l-.923-.923 5.077-5.077-1.846-1.846z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span> </td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ALCX/USDT </strong></th>
                                <td><span>In 5m </span> </td>
                                <td><span class="text-danger">+3.07%
                                        <svg viewBox="0 0 16 16" fill="currentColor" class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11 9h2l-3 3-3-3h2.256V6.388c0-.884-.783-1.602-1.75-1.602-.966 0-1.75.718-1.75 1.602V13H4V6.388C4 4.52 5.569 3 7.5 3 9.432 3 11 4.521 11 6.388V9z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span> </td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ALCX/BTC </strong></th>
                                <td><span>In 5m</span> </td>
                                <td><span class="text-success">+1.12% <svg viewBox="0 0 16 16" fill="currentColor"
                                            class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.077 11.692h4.615V7.077L9.846 8.923 4.77 3.846l-.923.923 5.077 5.077-1.846 1.846z"
                                                fill="currentColor"></path>
                                        </svg> </td>
                            </tr>
                            <tr>
                                <th>&nbsp;&nbsp;<strong>ASTR/USDT </strong></th>
                                <td><span>New 7d High</span> </td>
                                <td><span class="text-success">+4.51% <svg viewBox="0 0 16 16" fill="currentColor"
                                            class="css-1ci1qph">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11 9h2l-3 3-3-3h2.256V6.388c0-.884-.783-1.602-1.75-1.602-.966 0-1.75.718-1.75 1.602V13H4V6.388C4 4.52 5.569 3 7.5 3 9.432 3 11 4.521 11 6.388V9z"
                                                fill="currentColor"></path>
                                        </svg></span> </td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel text-center">Markets Listing Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="listing-modal-content-box-left">
                                <div>
                                    <img src="{{ asset('assets/img/detail-modal-icon.png') }}" class="img-fluid"
                                        alt="Market img">
                                    Wealth Mark
                                </div>
                                <p>$4.84 <span class="text-danger">-2.08%</span> </p>
                                <img src="{{ asset('assets/img/detail-listing-graph.svg') }}" class="img-fluid"
                                    alt="Market img">
                                <p>ApeCoin (APE) is the native governance token that empowers the decentralized
                                    community building of the APE ecosystem. The APE ecosystem includes the community of
                                    Bored Ape Yacht Club (BAYC) and Mutant Ape Yacht Club (MAYC), two of the most
                                    popular NFT collections on the Ethereum blockchain.<a class="text-warning">Read More
                                    </a> </p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="listing-modal-content-box-right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Market Cap Rank </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>37 </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Market Cap Rank </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>37</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Market Cap </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>1,483.99M</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Circulation Supply</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>306,875,000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Max Supply</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>37 </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Total Supply</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>1,000,000,000</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Issue Date</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>1,000,000,000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Issue Price</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <p>37 </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="btn btn-yellow shadow"> Trade Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
    var xValues = ["Janurary", "February", "March", "April", "May"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green", "blue", "orange", "brown"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Price down & Up Graph"
            }
        }
    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#gainer-box").click(function() {
            $("#three-grouped-sections").show();
            $("#market-table-group-section").hide();
            $("#market-second-section-block").hide();
        });
        $("#volume-box").click(function() {
            $("#three-grouped-sections").show();
            $("#market-table-group-section").hide();
            $("#market-second-section-block").hide();
        });

        $("#back-market-top-tbls").click(function() {
            $("#three-grouped-sections").hide();
            $("#market-table-group-section").show();
            $("#market-second-section-block").show();
        });
    });
    </script>

    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>
