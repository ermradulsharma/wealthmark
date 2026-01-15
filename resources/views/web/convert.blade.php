<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')

    <style>
        .convert-div-api iframe{
            width:100% !important;
        }
    </style>
</head>

<body>
    @include('template.web_menu')



    <section class="bg-light-blue">
        <div class="container">
                <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-md-6 convert-div-api">
<div style="width:100%; height:335px; background-color: #FAFAFA; overflow:hidden; box-sizing: border-box; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; margin: 0;padding:1px;padding: 0px; margin: 0px;">
                    <div style="height:315px; padding:0px; margin:0px; width: 100%;">
                        <iframe src="https://widget.coinlib.io/widget?type=converter&theme=dark" width="250" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0">
                        </iframe>
                   </div>
                </div>
                </div>
                </div>
        </div>
    </section>


<!--    <section class="convert-page-block p-0" id="convert-page-section">-->
<!--        <div class="container">-->
<!--            <div class="row" id="wm-convert-fist-row">-->
<!--                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--                    <div class="convert-page-header-block">-->
<!--                        <div class="sec-title ">-->
<!--                            <span class="title">Know About</span>-->
<!--                            <h2 class="heading-h2">WealthMark <span class="yellow-text">Convert</span></h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--                    <div class="convert-page-header-block float-end" id="conversion-history-block">-->
<!--                        <a class="btn btn-blue shadow m-4" class="btn btn-primary" data-bs-toggle="modal"-->
<!--                            data-bs-target="#conversion-history-modal">Conversion History <i-->
<!--                                class="bi bi-arrow-right"></i> </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="col-lg-8 col-md-8" id="convert-chart-block">-->
<!--                    <div class="chart-heading-content">-->
<!--                        <img src="{{ asset('assets/img/convert-busd-img.png') }}" class="img-fluid"-->
<!--                            alt="walth mark blog">-->
<!--                        <img src="{{ asset('assets/img/convert-bnb-img.png') }}" class="img-fluid"-->
<!--                            alt="walth mark blog">-->
<!--                        <strong class="chart-inner-content">&nbsp;BNB/BUSD</strong> <small-->
<!--                            class="chart-inner-content2">&nbsp;1 BNB = 313.9 BUSD</small>-->
<!--                    </div>-->
<!--                    <img src="{{ asset('assets/img/convert-limit-chart.png') }}" class="img-fluid"-->
<!--                        alt="walth mark blog">-->
<!--                </div>-->

<!--                <div class="offset-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 justify-content-center align-items-center"-->
<!--                    id="convert-middle-page">-->

<!--                    <ul class="nav nav-pills mb-3" id="convert-older-tab-section" role="tablist">-->
<!--                        <li class="nav-item" role="presentation">-->
<!--                            <button class="nav-link active" id="convert-market-tab-tab" data-bs-toggle="pill"-->
<!--                                data-bs-target="#convert-market-tab" type="button" role="tab"-->
<!--                                aria-controls="convert-market-tab" aria-selected="true">-->
<!--                                Market-->
<!--                            </button>-->
<!--                        </li>-->
<!--                        <li class="nav-item" role="presentation">-->
<!--                            <button class="nav-link" id="convert-limit-tab-tab" data-bs-toggle="pill"-->
<!--                                data-bs-target="#convert-limit-tab" type="button" role="tab"-->
<!--                                aria-controls="convert-limit-tab" aria-selected="false">-->
<!--                                Limit-->
<!--                            </button>-->
<!--                        </li>-->
<!--                        <li class="d-flex convert-tabs-right-icon">-->
<!--                            <i class="bi bi-bar-chart-line-fill" id="limit-chart-view"></i>-->
<!--                            <i class="bi bi-bar-chart-line-fill" id="limit-chart-view-full"></i>-->
<!--                            <i class="bi bi-gear" data-bs-toggle="modal" href="#market-setting-modal" role="button"></i>-->
<!--                        </li>-->
<!--                    </ul>-->

<!--                    <div class="convert-wallet-option my-3 d-flex justify-content-end align-items-center">-->
<!--                        <span class="badge rounded-pill bg-secondary" id="convert-funding-wallet"><i-->
<!--                                class="bi bi-wallet"></i> Funding Wallet </span>-->
<!--                        <span class="badge rounded-pill bg-secondary" id="convert-spot-wallet"><i-->
<!--                                class="bi bi-wallet"></i> Spot Wallet </span>-->
<!--                    </div>-->


<!--                    <div class="tab-content" id="convert-older-tab-sectionContent">-->

<!--                        <div class="tab-pane fade show active" id="convert-market-tab" role="tabpanel"-->
<!--                            aria-labelledby="convert-market-tab-tab">-->

                            <!--<div class="row order-2 order-lg-1" id="convert-market-tab-1-box">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-6">-->
                            <!--                <span class="convert-txt">From</span>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-6"><span class="float-end"> Balance : <span>0 BNB</span> </span></div>-->
                            <!--        </div>-->
                            <!--    </div>-->

                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-8 col-sm-8">-->
                            <!--                <div class="market-from-txbox">-->
                            <!--                    <input type="text" class="form-control" placeholder="0.0032-12000" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-4 col-sm-4">-->
                            <!--                <div class="convert-tab-dropdown float-end" data-bs-toggle="modal"-->
                            <!--                    data-bs-target="#buy-tab-select-currency-new">-->
                            <!--                    <div class="convert-select-currency">-->
                            <!--                        <div class="convert-currency-selected-box d-flex">-->
                            <!--                            <img src="{{ asset('assets/img/convert-busd-img.png') }}"-->
                            <!--                                class="img-fluid convert-curreny-img"-->
                            <!--                                alt="walth mark blog">&nbsp;-->
                            <!--                            <input type="text" id= "setText" value="BUSD" class="currency-added" name= "setText" onclick= "this.value = '' " disabled>-->

                            <!--                        </div>-->
                            <!--                        <div class="currency-selet-dropdwon-icon">-->
                            <!--                            <span class="angle-arrow-bottom">> </span>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <!--<div class="row">-->
                            <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                            <!--        <div-->
                            <!--            class="market-interchange-value-box d-flex justify-content-center align-items-center">-->
                            <!--            <a class="change-value"><i class="bi bi-arrow-down-up"></i> </a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="row order-1 order-lg-2" id="convert-market-tab-2-box">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-6">-->
                            <!--                <span class="convert-txt">To</span>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-6"><span class="float-end"> Balance : <span>0 BNB</span></span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-8 col-sm-8">-->
                            <!--                <div class="market-from-txbox">-->
                            <!--                    <input type="text" class="form-control" placeholder="1-40000000" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-4 col-sm-4">-->
                            <!--                <div class="convert-tab-dropdown float-end" data-bs-toggle="modal"-->
                            <!--                    data-bs-target="#market-currency-modal">-->
                            <!--                    <img src="{{ asset('assets/img/convert-bnb-img.png') }}"-->
                            <!--                        class="img-fluid convert-curreny-img"-->
                            <!--                        alt="walth mark blog">&nbsp;BNB-->
                            <!--                    <i class="bi bi-caret-down"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <!--<div class="row">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0 my-3">-->
                            <!--        <div class="convert-market-tab-btn">-->
                            <!--            <a class="btn btn-yellow shadow d-block">Enter an Amount </a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

<!--                        </div>-->

<!--                        <div class="tab-pane fade" id="convert-limit-tab" role="tabpanel"-->
<!--                            aria-labelledby="convert-limit-tab-tab">-->

                            <!--<div class="row" id="convert-limit-tab-1-box">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0 ">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-6 ">From </div>-->
                            <!--            <div class="col-md-6"><span class="float-end"> Balance : <span>0 BNB</span></span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-8 col-sm-8">-->
                            <!--                <div class="market-from-txbox">-->
                            <!--                    <input type="text" class="form-control" placeholder="0.00" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-4 col-sm-4">-->
                            <!--                <div class="convert-tab-dropdown float-end">-->
                            <!--                    <img src="{{ asset('assets/img/convert-busd-img.png') }}"-->
                            <!--                        class="img-fluid convert-curreny-img"-->
                            <!--                        alt="walth mark blog">&nbsp;BUSD-->
                            <!--                    <i class="bi bi-caret-down"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-12 ">-->
                            <!--        <small class="text-danger text-small hide d-none">Amount is more than the-->
                            <!--            maximum-->
                            <!--            amount (4000000 BUSD). </small>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <!--<div class="row" id="convert-limit-tab-1-box">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-4 ">-->
                            <!--                <span class="">Convert Price:<br />1 BNB =</span>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-8" id="market-price-txt"><span-->
                            <!--                    class="market-price-txt">Ｍarket Price: 314.79462424 BUSD</span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-8 col-sm-8">-->
                            <!--                <div class="market-from-txbox">-->
                            <!--                    <input type="text" class="form-control" placeholder="316.30000000"-->
                            <!--                        value="316.30000000" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-4 col-sm-4">-->
                            <!--                <span class="float-end">-->
                            <!--                    BUSD-->
                            <!--                    </span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-12 d-none">-->
                            <!--        <small class="text-danger text-small">Amount is more than the maximum amount-->
                            <!--            (4000000 BUSD). </small>-->
                            <!--    </div>-->

                            <!--</div>-->


                            <!--<div class="row">-->
                            <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div-->
                            <!--            class="market-interchange-value-box d-flex justify-content-center align-items-center">-->
                            <!--            <a class="change-value"><i class="bi bi-arrow-down-up"></i> </a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="row" id="convert-limit-tab-3-box">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-6">To </div>-->
                            <!--            <div class="col-md-6"><span class="float-end"> Balance : <span>0 BNB</span></span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0">-->
                            <!--        <div class="row convert-market-tab-box1 d-flex">-->
                            <!--            <div class="col-md-8 col-sm-8">-->
                            <!--                <div class="market-from-txbox">-->
                            <!--                    <input type="text" class="form-control" placeholder="315.40000000" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="col-md-4 col-sm-4 right-currency-change-box">-->
                            <!--                <div class="convert-tab-dropdown float-end">-->
                            <!--                    <img src="{{ asset('assets/img/convert-bnb-img.png') }}"-->
                            <!--                        class="img-fluid convert-curreny-img"-->
                            <!--                        alt="walth mark blog">&nbsp;BNB-->
                            <!--                    <i class="bi bi-caret-down"></i>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-12 d-none">-->
                            <!--        <small class="text-danger text-small">Amount is more than the maximum amount-->
                            <!--            (4000000 BUSD). </small>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="row mt-3 p-4">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0 ">-->
                            <!--        <div class="row">-->
                            <!--            <div class="col-md-6">Inverse Price </div>-->
                            <!--            <div class="col-md-6"><span class="float-end"> 1 BUSD = 0.00317158-->
                            <!--                    BNB</span>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="row">-->
                            <!--    <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12 p-0 my-3">-->
                            <!--        <div class="convert-market-tab-btn">-->
                            <!--            <a class="btn btn-yellow shadow d-block">Enter an Amount </a>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
<!--                              <div class="row align-items-center justify-content-center">-->
<!--                                <div class="col-md-12 convert-div-api">-->
<!--<div style="width:100%; height:335px; background-color: #FAFAFA; overflow:hidden; box-sizing: border-box; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; margin: 0;padding:1px;padding: 0px; margin: 0px;">-->
<!--                    <div style="height:315px; padding:0px; margin:0px; width: 100%;">-->
<!--                        <iframe src="https://widget.coinlib.io/widget?type=converter&theme=dark" width="250" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0">-->
<!--                        </iframe>-->
<!--                   </div>-->
<!--                </div>-->
<!--                </div>-->
<!--                </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </section>-->

<!--    <section class="wealthmark-conversion-old-version" id="convert-old-version">-->
<!--        <div class="container-fluid">-->
<!--            <div class="row bg-light">-->

<!--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">-->
<!--                    <div class="convert-version-banner-row">-->
<!--                        <h1 class="text-white">WealthMark Convert </h1>-->
<!--                        <div class="banner-second-row">-->
<!--                            <div class="banner-second-row-block">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"-->
<!--                                    class="wm-convert-svg">-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                        d="M20 12a8 8 0 10-16 0 8 8 0 0016 0zM12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z"-->
<!--                                        fill="#76808F"></path>-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                        d="M7.293 15.293l8-8 1.414 1.414-8 8-1.414-1.414z" fill="#76808F"></path>-->
<!--                                    <path-->
<!--                                        d="M7.293 8.707l1.414 1.414 1.414-1.414-1.414-1.414-1.414 1.414zM16.707 15.293l-1.414-1.414-1.414 1.414 1.414 1.414 1.414-1.414z"-->
<!--                                        fill="#76808F"></path>-->
<!--                                </svg>-->
<!--                                <span class="text-white">Zero fee</span>-->
<!--                            </div>-->
<!--                            <div class="banner-second-row-block">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"-->
<!--                                    class="wm-convert-svg">-->
<!--                                    <path d="M13 13V7h-2v6h2zM13 17v-2h-2v2h2z" fill="#76808F"></path>-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                        d="M16.591 4.045l-1.68-2.911-2.912 1.68-2.912-1.68-1.68 2.911H4.043v3.363l-2.911 1.68L2.813 12l-1.68 2.911 2.91 1.681v3.362h3.363l1.681 2.912L12 21.185l2.911 1.68 1.681-2.91h3.362v-3.362l2.912-1.682L21.184 12l1.68-2.912-2.911-1.681V4.045H16.59zm-8.03 2l1.258-2.18L12 5.126l2.18-1.26 1.258 2.18h2.516v2.517l2.18 1.258L18.875 12l1.258 2.18-2.18 1.258v2.516h-2.516l-1.259 2.18-2.18-1.259-2.179 1.259-1.258-2.18H6.044v-2.517l-2.18-1.258L5.125 12 3.863 9.82l2.18-1.258V6.045H8.56z"-->
<!--                                        fill="#76808F"></path>-->
<!--                                </svg>-->
<!--                                <span class="text-white"> Guaranteed price </span>-->
<!--                            </div>-->
<!--                            <div class="banner-second-row-block">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"-->
<!--                                    class="wm-convert-svg">-->
<!--                                    <path d="M9 13.5l1.5 1.5L9 16.5 7.5 15 9 13.5z" fill="#76808F"></path>-->
<!--                                    <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                        d="M8.062 8.062A7.001 7.001 0 0122 9c0 3.548-2.64 6.48-6.062 6.938A7.001 7.001 0 012 15c0-3.548 2.64-6.48 6.062-6.938zM15 4a5 5 0 01.917 9.916 7.005 7.005 0 00-5.833-5.833A5.002 5.002 0 0115 4zm-6 6a5 5 0 110 10 5 5 0 010-10z"-->
<!--                                        fill="#76808F"></path>-->
<!--                                </svg>-->
<!--                                <span class="text-white"> Any pairs </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="container mt-4">-->
<!--            <div class="row" id="older-tab-header">-->
<!--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">-->
<!--                    <ul class="nav nav-pills mb-3" id="convert-older-tab-section" role="tablist">-->
<!--                        <li class="nav-item" role="presentation">-->
<!--                            <button class="nav-link active" id="pills-market-older-tab" data-bs-toggle="pill"-->
<!--                                data-bs-target="#pills-market-older" type="button" role="tab"-->
<!--                                aria-controls="pills-market-older" aria-selected="true">Market</button>-->
<!--                        </li>-->
<!--                        <li class="nav-item" role="presentation">-->
<!--                            <button class="nav-link" id="pills-profile-older-tab" data-bs-toggle="pill"-->
<!--                                data-bs-target="#pills-profile-older" type="button" role="tab"-->
<!--                                aria-controls="pills-profile-older" aria-selected="false">Limit</button>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 pt-2">-->
<!--                    <div class="covnver-older-right-block  float-end">-->
<!--                        <a class="switch-version-btn" id="covnert-switch-new-version"-->
<!--                            onClick="window.location.href=window.location.href">Switch to new Version </a>-->
<!--                        <a class="convert-order-btn">Order</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="row mt-3">-->
<!--                <div class="col-lg-6 col-md-6" id="chart-older-version">-->
<!--                    <div class="chart-heading-content">-->
<!--                        <img src="{{ asset('assets/img/convert-busd-img.png') }}" class="img-fluid"-->
<!--                            alt="walth mark blog">-->
<!--                        <img src="{{ asset('assets/img/convert-bnb-img.png') }}" class="img-fluid"-->
<!--                            alt="walth mark blog">-->
<!--                        <strong class="chart-inner-content">&nbsp;BNB/BUSD</strong> <small-->
<!--                            class="chart-inner-content2">&nbsp;1 BNB = 313.9 BUSD</small>-->
<!--                    </div>-->
<!--                    <img src="{{ asset('assets/img/limit-older-img.png') }}" class="img-fluid older-chart-img"-->
<!--                        alt="walth mark blog">-->
<!--                </div>-->

<!--                <div class="offset-3 col-lg-6 col-md-6 col-sm-12 col-12" id="convert-middle-page-older">-->
<!--                    <div class="older-page-tab-block">-->
<!--                        <div class="tab-content" id="convert-older-tab-sectionContent">-->
<!--                            <div class="tab-pane fade show active" id="pills-market-older" role="tabpanel"-->
<!--                                aria-labelledby="pills-market-older-tab">-->
<!--                                <div class="row" id="spot-wallet-heading">-->
<!--                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column-small">-->
<!--                                        <h5 class="m-0">From </h5>-->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column-small">-->
<!--                                        <div class="older-version-avilable-wallet">-->
<!--                                            <select class="form-control">-->
<!--                                                <option>Spot Wallet Available </option>-->
<!--                                                <option>Spot Wallet </option>-->
<!--                                                <option>Funding Wallet </option>-->
<!--                                            </select>-->
<!--                                            <span>0 BNB </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <div class="input-group mb-3">-->
<!--                                            <input type="number" class="form-control"-->
<!--                                                placeholder="Please enter 76- 17000000"-->
<!--                                                aria-label="Please enter 76- 17000000" aria-describedby="basic-addon4">-->
<!--                                            <span class="input-group-text" id="basic-addon2">max</span>-->
<!--                                            <select class="form-control" id="select-currency-market-older-tab">-->
<!--                                                <option>AGLD</option>-->
<!--                                                <option>MATIC</option>-->
<!--                                                <option>STPT</option>-->
<!--                                                <option>APT</option>-->
<!--                                            </select>-->

<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row">-->
<!--                                    <div class="col-md-12 mt-3">-->
<!--                                        <div-->
<!--                                            class="change-values-older d-flex justify-content-center align-items-center">-->
<!--                                            <i class="bi bi-arrow-down-up"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row" id="spot-wallet-heading">-->
<!--                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column-small">-->
<!--                                        <h5 class="m-0">To </h5>-->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column-small">-->
<!--                                        <div class="older-version-avilable-wallet">-->
<!--                                            <select class="form-control">-->
<!--                                                <option>Spot Wallet Available </option>-->
<!--                                                <option>Spot Wallet </option>-->
<!--                                                <option>Funding Wallet </option>-->
<!--                                            </select>-->
<!--                                            <span>0 BNB </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <div class="input-group mb-3">-->
<!--                                            <input type="number" class="form-control"-->
<!--                                                placeholder="Please enter 76- 17000000"-->
<!--                                                aria-label="Please enter 76- 17000000" aria-describedby="basic-addon4">-->
<!--                                            <select class="form-control" id="select-currency-market-older-tab">-->
<!--                                                <option>AGLD</option>-->
<!--                                                <option>MATIC</option>-->
<!--                                                <option>STPT</option>-->
<!--                                                <option>APT</option>-->
<!--                                            </select>-->

<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <a class="btn btn-yellow shadow d-block">Enter an Amount </a>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <br />-->

<!--                            </div>-->

<!--                            <div class="tab-pane fade" id="pills-profile-older" role="tabpanel"-->
<!--                                aria-labelledby="pills-profile-older-tab">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <div class="row" id="spot-wallet-heading">-->
<!--                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column-small">-->
<!--                                                <h5 class="m-0">From </h5>-->
<!--                                            </div>-->
<!--                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column-small">-->
<!--                                                <div class="older-version-avilable-wallet">-->
<!--                                                    <select class="form-control">-->
<!--                                                        <option>Spot Wallet Available </option>-->
<!--                                                        <option>Spot Wallet </option>-->
<!--                                                        <option>Funding Wallet </option>-->
<!--                                                    </select>-->
<!--                                                    <span>0 BNB </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-md-12">-->
<!--                                                <div class="input-group mb-3">-->
<!--                                                    <input type="number" class="form-control"-->
<!--                                                        placeholder="Please enter 76- 17000000"-->
<!--                                                        aria-label="Please enter 76- 17000000"-->
<!--                                                        aria-describedby="basic-addon4">-->
<!--                                                    <span class="input-group-text" id="basic-addon2">max</span>-->
<!--                                                    <select class="form-control" id="select-currency-market-older-tab">-->
<!--                                                        <option>AGLD</option>-->
<!--                                                        <option>MATIC</option>-->
<!--                                                        <option>STPT</option>-->
<!--                                                        <option>APT</option>-->
<!--                                                    </select>-->

<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-md-6">-->
<!--                                                <div class="price-box">-->
<!--                                                    <label for="price-txt">Price</label>-->
<!--                                                    <div class="input-group mb-3">-->
<!--                                                        <input type="text" class="form-control"-->
<!--                                                            placeholder="294.90000000" aria-label="Recipient's username"-->
<!--                                                            aria-describedby="basic-addon2">-->
<!--                                                        <span class="input-group-text" id="basic-addon2">BUSD</span>-->
<!--                                                    </div>-->

<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-6">-->
<!--                                                <div class="price-box">-->
<!--                                                    <label for="price-txt">Expires In</label>-->
<!--                                                    <select class="form-control">-->
<!--                                                        <option>1 Hour</option>-->
<!--                                                        <option>1 Day</option>-->
<!--                                                        <option>3 Days</option>-->
<!--                                                        <option>7 Hour</option>-->
<!--                                                        <option>30 Days</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-md-12">-->
<!--                                                <div class="left-border-line"></div>-->
<!--                                                <div class="limit-older-currency-change">-->
<!--                                                    <i class="bi bi-arrow-down-up"></i>-->
<!--                                                </div>-->
<!--                                                <div class="right-border-line"></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row mt-3">-->
<!--                                            <div class="col-md-12">-->
<!--                                                <div class="input-group mb-3">-->
<!--                                                    <input type="number" class="form-control"-->
<!--                                                        placeholder="Please enter 76- 17000000"-->
<!--                                                        aria-label="Please enter 76- 17000000"-->
<!--                                                        aria-describedby="basic-addon4">-->
<!--                                                    <select class="form-control" id="select-currency-market-older-tab">-->
<!--                                                        <option>AGLD</option>-->
<!--                                                        <option>MATIC</option>-->
<!--                                                        <option>STPT</option>-->
<!--                                                        <option>APT</option>-->
<!--                                                    </select>-->

<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        <div class="row">-->
<!--                                            <div class="col-md-6">-->
<!--                                                <p class="fw-bold">Price </p>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-6">-->
<!--                                                <p class="text-right fw-bold">1 BNB = 294.70000000 BUSD </p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-md-6">-->
<!--                                                <p class="fw-bold">Inverse Price</p>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-6">-->
<!--                                                <p class="text-right fw-bold">1 BUSD = 0.00339328 BNB</p>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        <div class="row mt-2">-->
<!--                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                                <a-->
<!--                                                    class="btn btn-yellow shadow d-flex text-center justify-content-center ">Place-->
<!--                                                    Order </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <!-- FAQ section  start-->
    <!--<section class="faq-block" id="faq-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="sec-title text-left">-->
    <!--                <span class="title">Know About</span>-->
    <!--                <h2 class="heading-h2">FAQ</h2>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="faq-inner-block" id="faq-inner-section">-->

    <!--                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">-->
    <!--                    <div class="accordion" id="convert-faq">-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingOne">-->
    <!--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
    <!--                                    1. What is Wealthmark Pay?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapseOne" class="accordion-collapse collapse show"-->
    <!--                                aria-labelledby="headingOne" data-bs-parent="#convert-faq">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text"> It is shown by-->
    <!--                                        default, until the collapse plugin adds the appropriate classes that we use-->
    <!--                                        to-->
    <!--                                        style each element. These classes control the overall appearance, as well as-->
    <!--                                        the-->
    <!--                                        showing and hiding via CSS transitions. You can modify any of this with-->
    <!--                                        custom-->
    <!--                                        CSS or overriding our default variables. It's also worth noting that just-->
    <!--                                        about-->
    <!--                                        any HTML can go within the <code>.accordion-body</code>, though the-->
    <!--                                        transition-->
    <!--                                        does limit overflow.</div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingTwo">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
    <!--                                    2. Can I pay with Bitcoin?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"-->
    <!--                                data-bs-parent="#convert-faq">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text">You can access your Wealthmark Pay Wallet by clicking-->
    <!--                                        [Wallets] --->
    <!--                                        [Funding] - [Pay] on your Wealthmark App.</div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingThree">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapseThree" aria-expanded="false"-->
    <!--                                    aria-controls="collapseThree">-->
    <!--                                    3. How long does it take for a Wealthmark Pay?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapseThree" class="accordion-collapse collapse"-->
    <!--                                aria-labelledby="headingThree" data-bs-parent="#convert-faq">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text">Wealthmark Pay transactions are usually confirmed instantly.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">-->
    <!--                    <div class="accordion" id="convert-faq">-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingfour">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapsefour" aria-expanded="false"-->
    <!--                                    aria-controls="collapsefour">-->
    <!--                                    4.Cryptocurrencies supported Wealthmark?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"-->
    <!--                                data-bs-parent="#convert-faq">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text"> You can access your Wealthmark Pay Wallet by clicking-->
    <!--                                        [Wallets] --->
    <!--                                        [Funding] - [Pay] on your Wealthmark App.</div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingfive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapsefive" aria-expanded="false"-->
    <!--                                    aria-controls="collapsefive">-->
    <!--                                    5. Wealth Mark Pay transaction to be completed?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"-->
    <!--                                data-bs-parent="#convert-faq">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text">Wealthmark Pay transactions are usually confirmed instantly.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- FAQ section end -->




    <!-- market setting modal -->
    <!--<div class="modal fade" id="market-setting-modal" aria-hidden="true" aria-labelledby="market-setting-modalLabel"-->
    <!--    tabindex="-1">-->
    <!--    <div class="modal-dialog modal-dialog-centered">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h4 class="modal-title" id="market-setting-modalLabel">Setting</h4>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="row mb-3" id="limit-expire-dropdown">-->
    <!--                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
    <!--                        <div class="switch-version-box d-flex">-->
    <!--                            <h5>Expires In</h5>-->
    <!--                            <select class="form-control">-->
    <!--                                <option>1 Hour </option>-->
    <!--                                <option>1 Day </option>-->
    <!--                                <option>3 Days </option>-->
    <!--                                <option>7 Days </option>-->
    <!--                                <option>30 Days </option>-->
    <!--                            </select>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
    <!--                        <div class="switch-version-box d-flex">-->
    <!--                            <h5>Wants to switch older version? </h5>-->
    <!--                            <div class="form-check form-switch float-end">-->
    <!--                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>-->
    <!--                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- market setting modal end -->


    <!-- older maret tab code start-->

    <!--<div class="modal fade" id="buy-tab-select-currency-new" data-bs-backdrop="static" data-bs-keyboard="false"-->
    <!--    tabindex="-1" aria-labelledby="buy-tab-select-currency-newLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title" id="buy-tab-select-currency-newLabel">Select Currency</h5>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
    <!--                        <select class="form-control select2" id="combo">-->
    <!--                            <option class="convert-selected-currency">Select</option>-->
    <!--                            <option  class="convert-selected-currency" value="MAGIC" id= "getText" name= "getText" onclick= "this.value = '' ">&#x20B9 MAGIC</option>-->
    <!--                            <option class="convert-selected-currency" value="STPT">&#x20B9 STPT</option>-->
    <!--                            <option class="convert-selected-currency" value="APT">&#x20B9 APT</option>-->
    <!--                            <option class="convert-selected-currency" value="STG">&#x20B9 STG</option>-->
    <!--                        </select>-->
                            <!-- <input type= "text" />
    <!--                        <button >Get Value</button> -->
                            <!-- <button >Set Value</button>
    <!--                        <input type= "text"/> -->

    <!--                        <input id="button1" class="btn btn-yellow shadow mt-2 float-end" onclick= "getAndSetText()" type="button" value="Select & Close Now!" data-bs-dismiss="modal" aria-label="Close" />-->
    <!--                        <script>-->
    <!--                        $('.select2').select2();-->
    <!--                        </script>-->
    <!--                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->



    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- older market tab code end -->
<script>
function getText(){
    var getText = document.getElementById('getText').value;
}

function getAndSetText(){
    var setText= document.getElementById('getText').value;
    document.getElementById('setText').value= setText;
}

</script>



    <!-- conversion history modal code start -->
    <!-- Button trigger modal -->
    <!-- Modal -->
    <!--<div class="modal fade" id="conversion-history-modal" data-bs-backdrop="static" data-bs-keyboard="false"-->
    <!--    tabindex="-1" aria-labelledby="conversion-history-modalLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog modal-fullscreen">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title" id="conversion-history-modalLabel">Convert History</h5>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="container-fluid">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-3">-->
    <!--                            <label for="time">Time</label>-->
    <!--                            <select class="form-control">-->
    <!--                                <option>Past 7 Days </option>-->
    <!--                                <option>Past 30 Days </option>-->
    <!--                                <option>Past 90 Days </option>-->
    <!--                                <option>Past 365 Days </option>-->
    <!--                                <option>Customized </option>-->
    <!--                            </select>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-3">-->
    <!--                            <label for="time">Wallet</label>-->
    <!--                            <select class="form-control">-->
    <!--                                <option>All</option>-->
    <!--                                <option>Spot</option>-->
    <!--                                <option>Funding</option>-->
    <!--                                <option>Others</option>-->
    <!--                            </select>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-3">-->
    <!--                            <label for="time">Coin</label>-->
    <!--                            <select class="form-control">-->
    <!--                                <option>Coin</option>-->
    <!--                                <option>INJ</option>-->
    <!--                                <option>DYDX</option>-->
    <!--                                <option>FILUP</option>-->
    <!--                                <option>VAB</option>-->
    <!--                            </select>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-3">-->
    <!--                            <div class="history-btn-group">-->
    <!--                                <a class="btn btn-yellow shadow mt-4">Search </a>-->
    <!--                                <a class="btn btn-yellow shadow mt-4">Reset </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row mt-5">-->
    <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <table class="table table-bordered table-hover table-striped">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>Trade Date </th>-->
    <!--                                            <th>Wallet </th>-->
    <!--                                            <th>Pair </th>-->
    <!--                                            <th>Type</th>-->
    <!--                                            <th>From </th>-->
    <!--                                            <th>To </th>-->
    <!--                                            <th>Price </th>-->
    <!--                                            <th>Settlement Date </th>-->
    <!--                                            <th>Status </th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr>-->
    <!--                                            <td>10-12-2022 </td>-->
    <!--                                            <td>Funding </td>-->
    <!--                                            <td>both </td>-->
    <!--                                            <td>coin </td>-->
    <!--                                            <td>21-01-2021 </td>-->
    <!--                                            <td>10-02-2022 </td>-->
    <!--                                            <td>28-02-2023 </td>-->
    <!--                                            <td>05-01-2020 </td>-->
    <!--                                            <td><span class="badge bg-warning">Active</span> </td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>10-12-2022 </td>-->
    <!--                                            <td>Funding </td>-->
    <!--                                            <td>both </td>-->
    <!--                                            <td>coin </td>-->
    <!--                                            <td>21-01-2021 </td>-->
    <!--                                            <td>10-02-2022 </td>-->
    <!--                                            <td>28-02-2023 </td>-->
    <!--                                            <td>05-01-2020 </td>-->
    <!--                                            <td><span class="badge bg-warning">Active</span> </td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>10-12-2022 </td>-->
    <!--                                            <td>Funding </td>-->
    <!--                                            <td>both </td>-->
    <!--                                            <td>coin </td>-->
    <!--                                            <td>21-01-2021 </td>-->
    <!--                                            <td>10-02-2022 </td>-->
    <!--                                            <td>28-02-2023 </td>-->
    <!--                                            <td>05-01-2020 </td>-->
    <!--                                            <td><span class="badge bg-warning">Active</span> </td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>10-12-2022 </td>-->
    <!--                                            <td>Funding </td>-->
    <!--                                            <td>both </td>-->
    <!--                                            <td>coin </td>-->
    <!--                                            <td>21-01-2021 </td>-->
    <!--                                            <td>10-02-2022 </td>-->
    <!--                                            <td>28-02-2023 </td>-->
    <!--                                            <td>05-01-2020 </td>-->
    <!--                                            <td><span class="badge bg-warning">Active</span> </td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>10-12-2022 </td>-->
    <!--                                            <td>Funding </td>-->
    <!--                                            <td>both </td>-->
    <!--                                            <td>coin </td>-->
    <!--                                            <td>21-01-2021 </td>-->
    <!--                                            <td>10-02-2022 </td>-->
    <!--                                            <td>28-02-2023 </td>-->
    <!--                                            <td>05-01-2020 </td>-->
    <!--                                            <td><span class="badge bg-warning">Active</span> </td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="modal-footer d-flex justify-content-center">-->
    <!--                <button type="button" class="btn btn-blue shadow" data-bs-dismiss="modal">Close</button>-->
    <!--                <button type="button" class="btn btn-yellow shadow">Download</button>-->
    <!--                <button type="button" class="btn btn-blue shadow">Export</button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- conversion history modal code end -->

    <!-- currency convert popmodal 4 -->

    <!-- currency convert popup modal 4 end -->

    <!-- currency modal 2 -->
    <!--<div class="modal fade" id="market-currency-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
    <!--    aria-labelledby="market-currency-modalLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title" id="market-currency-modalLabel">Select Currency</h5>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
    <!--                        <input type="text" class="form-control" placeholder="Search" />-->
    <!--                    </div>-->
    <!--                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
    <!--                        <div class="select-country-group">-->
    <!--                            <div class="select-currency-tab">-->
    <!--                                <img src="{{ asset('assets/img/currency-1.png') }}" class="img-fluid"-->
    <!--                                    alt="cash-balance-img" />-->
    <!--                                <div class="currency-detail">-->
    <!--                                    <h5>AED </h5>-->
    <!--                                    <span>United Arab Emirates dirham </span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="select-currency-tab">-->
    <!--                                <img src="{{ asset('assets/img/currency-2.png') }}" class="img-fluid"-->
    <!--                                    alt="cash-balance-img" />-->
    <!--                                <div class="currency-detail">-->
    <!--                                    <h5>AED </h5>-->
    <!--                                    <span>United Arab Emirates dirham </span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="select-currency-tab">-->
    <!--                                <img src="{{ asset('assets/img/currency-3.png') }}" class="img-fluid"-->
    <!--                                    alt="cash-balance-img" />-->
    <!--                                <div class="currency-detail">-->
    <!--                                    <h5>AED </h5>-->
    <!--                                    <span>United Arab Emirates dirham </span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="select-currency-tab">-->
    <!--                                <img src="{{ asset('assets/img/currency-4.png') }}" class="img-fluid"-->
    <!--                                    alt="cash-balance-img" />-->
    <!--                                <div class="currency-detail">-->
    <!--                                    <h5>AED </h5>-->
    <!--                                    <span>United Arab Emirates dirham </span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="select-currency-tab">-->
    <!--                                <img src="{{ asset('assets/img/currency-5.png') }}" class="img-fluid"-->
    <!--                                    alt="cash-balance-img" />-->
    <!--                                <div class="currency-detail">-->
    <!--                                    <h5>AED </h5>-->
    <!--                                    <span>United Arab Emirates dirham </span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- currency modal 2 end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#convert-funding-wallet").click(function() {
            $("#convert-funding-wallet").hide();
            $("#convert-spot-wallet").show();
        });
        $("#convert-spot-wallet").click(function() {
            $("#convert-spot-wallet").hide();
            $("#convert-funding-wallet").show();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#convert-limit-tab-tab").click(function() {
            $("#limit-expire-dropdown").show();
            $("#limit-chart-view").show();
        });
        $("#convert-market-tab-tab").click(function() {
            $("#limit-expire-dropdown").hide();
            $("#limit-chart-view").hide();
            $("#limit-chart-view-full").hide();
        });

        $("#limit-chart-view").click(function() {
            $("#convert-chart-block").show();
            $("#limit-chart-view").hide();
            $("#limit-chart-view-full").show();
            $("#convert-middle-page").removeClass("offset-4");
        });

        $("#limit-chart-view-full").click(function() {
            $("#convert-chart-block").hide();
            $("#limit-chart-view").show();
            $("#limit-chart-view-full").hide();
            $("#convert-middle-page").addClass("offset-4");
        });

        $("#convert-market-tab-tab").click(function() {
            $("#convert-chart-block").hide();
            $("#convert-middle-page").addClass("offset-4");
        });

        $("#convert-limit-tab-tab").click(function() {
            $("#limit-chart-view-full").hide();
        });

        $("#pills-profile-older-tab").click(function() {
            $("#convert-middle-page-older").removeClass("offset-3");
        });

        $("#pills-market-older-tab").click(function() {
            $("#convert-middle-page-older").addClass("offset-3");
        });

        $("#pills-profile-older-tab").click(function() {
            $("#chart-older-version").show();
        });
        $("#pills-market-older-tab").click(function() {
            $("#chart-older-version").hide();
            $("#convert-middle-page-older").addClass("offset-3");

        });
        $("#covnert-switch-new-version").click(function() {
            $("#convert-old-version").hide();
            $("#convert-page-section").show();

        });
        $("#flexSwitchCheckChecked").click(function() {
            $("#market-setting-modal").hide();
            $(".modal-backdrop").hide();
            $("#convert-page-section").hide();
            $("#convert-old-version").show();
        });

    });
    </script>

    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>
