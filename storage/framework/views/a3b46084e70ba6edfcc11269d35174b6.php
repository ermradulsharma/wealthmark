<!DOCTYPE html>
<html lang="en">

<head>
    <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <?php echo $__env->make('template.web_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/wealthmark_new/css/style_index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/css_template/all_pages.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/css_template/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/css_template/header.css')); ?>">
    <meta name="description"
        content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
    <meta name="keywords" content="Wealthmark, Crypto, coins">
    <meta name="author" content="Wealthmark, Buy, trade, and hold 100+ cryptocurrencies on Wealthmark">
    <style>
        /*------------only for this page----------*/
        .mobile-header {
            position: fixed;
            width: 100% !important;
        }

        @media(max-width:768px) {
            section#hero {
                padding-top: 55px !important;
            }
        }

        /*------------only for this page----------*/




        .hidden-div {
            display: none
        }

        .sliderContainer {
            display: flex;
            justify-content: center
        }

        .sliderContainer>div {
            width: 100%;
            /*background-color: #333;*/
            color: #fff;
            font-size: 1rem;
            /*text-transform: capitalize*/
        }


        .magicStartLoop {
            display: flex;
            justify-content: center;
            /*align-items: center;*/
            flex-direction: column;
            opacity: 1;
            animation: op 200ms linear;
            text-align: left;
        }

        @keyframes op {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }
    </style>
</head>

<body>
    <?php echo $__env->make('template.top_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="hero" class="align-items-center">

        <?php echo $__env->make('template.web_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-12 text-center mt-2 p-0">
                    <a href="<?php echo e(url(app()->getLocale(), 'register')); ?>">
                        <span class="offer-text-head">
                            Register now - Enjoy Welcome Rewards up to 1 BMK! ( for verified user)
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-3">
            <div class="row justify-content-evenly align-items-center">
                <div class="col-lg-4 order-2 order-lg-1 py-3">
                    <div class="sliderContainer">
                        <div class="hidden-div">
                            <h1 class="mb-3"> Buy, trade, and hold 100+ cryptocurrencies</h1>
                            <h2>Sign up now to build your own portfolio</h2>
                        </div>
                        <div class="magicStartLoop">
                            <h1 class="mb-3"> WealthMark is most Trusted Crypto Exchange</h1>
                            <h2>Investing in crypto will be easier than ever</h2>
                        </div>
                        <div class="hidden-div">
                            <h1 class="mb-3"> WealthMark is an easy and secure digital wallet trusted by millions</h1>
                            <h2>Digital assets under your control</h2>
                        </div>
                        <div class="hidden-div">
                            <h1 class="mb-3"> Trusted by customers from more than 100 countries</h1>
                            <h2>The easiest way to start your crypto Lifestyle</h2>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 order-1 order-lg-2 hero-img text-center py-3" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="<?php echo e(asset('img/home-page/home-graphic-1-01.png')); ?>"
                        class="img-fluid animated max-width-450px" alt="Buy, trade, and hold 100+ cryptocurrencies"
                        title="Buy, trade, and hold 100+ cryptocurrencies">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->








    <section id="features" class="features-area item-full  cell-items default-padding">
        <div class="container-fluid">
            <div class="row features-items">
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/home-page/create-an-account.svg')); ?>"
                                alt="Sign up with your email and mobile in just 5 minutes"
                                alt="Sign up with your email and mobile in just 5 minutes">
                        </div>
                        <div class="info">
                            <h4>Create an account</h4>
                            <p>Sign up with your email and mobile in just 5 minutes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/home-page/add-funds.svg')); ?>" alt="Add funds to wallet"
                                title="Add funds to wallet">
                        </div>
                        <div class="info">
                            <h4>Add funds to wallet</h4>
                            <p>Quick add money to your WealthMark investment wallet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/home-page/investing-in-crypto.svg')); ?>"
                                alt="Investing in crypto" title="Investing in crypto">
                        </div>
                        <div class="info">
                            <h4>Investing in crypto</h4>
                            <p>Buy & Sell a variety of top coin at the best prices
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height border-bottom-none">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/home-page/insured-by-bitgo.svg')); ?>" alt="Safe & Secure"
                                title="Safe & Secure">
                        </div>
                        <div class="info">
                            <h4>Safe & Secure</h4>
                            <p>Offline signature is more secure with WealthMark hardware wallet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height border-bottom-none">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/home-page/deep-encryption.svg')); ?>" title="Deep encryption"
                                alt="Deep encryption">
                        </div>
                        <div class="info">
                            <h4>Deep encryption</h4>
                            <p>All data is encrypted to secure your password & personal data
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height border-bottom-none">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo e(asset('img/home-page/safe-security.svg')); ?>"
                                title="Identity verification" alt="Identity verification">
                        </div>
                        <div class="info">
                            <h4>Identity verification</h4>
                            <p>Complete identity verification to protect your accounts and transactions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
        <div class="container-fluid  text-center">
            <div class="sign-up-block mt-2">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <h4 class="text-white mb-0 font-weight-normal">Take the first step towards building your crypto
                            portfolio</h4>
                    </li>
                    <li class="list-inline-item mb-0"><a href="<?php echo e(url(app()->getLocale(), 'register')); ?>"
                            class="btn btn-yellow"><span>Get Started</span></a></li>
                </ul>
            </div>
        </div>






        <!-- End Clients Section -->
        <div class="market-trend">
            <div class="container-fluid ">
                <div class="row">
                    <div class="card bg-white shadow-lg">
                        <div class="card-body">


                            <div class="dashboard-tabpills">
                                <div class="">
                                    <div class="dashboard-card-body">
                                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="weekly-stars-tab"
                                                    data-bs-toggle="pill" data-bs-target="#weekly-stars"
                                                    type="button" role="tab" aria-controls="weekly-stars"
                                                    aria-selected="false">Weekly Stars</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="gainers-24h-tab" data-bs-toggle="pill"
                                                    data-bs-target="#gainers-24h" type="button" role="tab"
                                                    aria-controls="gainers-24h" aria-selected="false">24h
                                                    Gainers</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link " id="ETF-gainers-tab" data-bs-toggle="pill"
                                                    data-bs-target="#ETF-gainers" type="button" role="tab"
                                                    aria-controls="ETF-gainers" aria-selected="true">ETF
                                                    Gainers</button>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="weekly-stars" role="tabpanel"
                                                aria-labelledby="weekly-stars">
                                                <div class="table-responsive" id="bitcoin_refrsh">

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="gainers-24h" role="tabpanel"
                                                aria-labelledby="gainers-24h-tab">
                                                <table class="table table-hover table-borderless" id="table">
                                                    <tbody>
                                                        <tr class="head" id="t_title1">
                                                            <th></th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="trans"> Pairs </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="new"> Last Price
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="weex"> Weekly Change
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="high"> Weekly Highest
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="low"> Weekly Lowest
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="deal"> Weekly Volume
                                                                </span>
                                                            </th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> SANTOS/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">13.484</span>
                                                                <span class="g-grey g-font12"> / $ 13.484 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 126.05% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">21.399</td>
                                                            <td class="g-text-left">5.741</td>
                                                            <td class="g-text-left">6.38M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="santos/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> PORTO/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">5.8335</span>
                                                                <span class="g-grey g-font12"> / $ 5.8335 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 56.83% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">8.3626</td>
                                                            <td class="g-text-left">3.6706</td>
                                                            <td class="g-text-left">5.92M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="porto/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> LAZIO/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">5.7747</span>
                                                                <span class="g-grey g-font12"> / $ 5.7747 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 130.99% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">6.8307</td>
                                                            <td class="g-text-left">2.5000</td>
                                                            <td class="g-text-left">4.68M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="lazio/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> STG/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">0.8409</span>
                                                                <span class="g-grey g-font12"> / $ 0.8409 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 150.27% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">0.9995</td>
                                                            <td class="g-text-left">0.3350</td>
                                                            <td class="g-text-left">600.14K</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="stg/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> INJ/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">1.800</span>
                                                                <span class="g-grey g-font12"> / $ 1.8 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 50.00% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">2.013</td>
                                                            <td class="g-text-left">1.200</td>
                                                            <td class="g-text-left">5.50M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="inj/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> GM/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">0.00000973</span>
                                                                <span class="g-grey g-font12"> / $ 0 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 13.54% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">0.00001553</td>
                                                            <td class="g-text-left">0.00000831</td>
                                                            <td class="g-text-left">6.07M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="gm/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> MELOS/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-red">0.0284</span>
                                                                <span class="g-grey g-font12"> / $ 0.0284 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-red"> -1.73% <i
                                                                    class="bi-arrow-down"></i>
                                                            </td>
                                                            <td class="g-text-left">0.0528</td>
                                                            <td class="g-text-left">0.0250</td>
                                                            <td class="g-text-left">3.37M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="melos/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> ZBC/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-red">0.025087</span>
                                                                <span class="g-grey g-font12"> / $ 0.0250 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-red"> -0.36% <i
                                                                    class="bi-arrow-down"></i>
                                                            </td>
                                                            <td class="g-text-left">0.039708</td>
                                                            <td class="g-text-left">0.022381</td>
                                                            <td class="g-text-left">6.02M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="zbc/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> PMON/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">1.3796</span>
                                                                <span class="g-grey g-font12"> / $ 1.3796 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 3.33% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">2.2001</td>
                                                            <td class="g-text-left">1.2268</td>
                                                            <td class="g-text-left">1.20M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="pmon/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('/assets/img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> MAGIC/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">0.6642</span>
                                                                <span class="g-grey g-font12"> / $ 0.6642 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 15.49% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">0.7721</td>
                                                            <td class="g-text-left">0.4552</td>
                                                            <td class="g-text-left">12.11M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="magic/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade " id="ETF-gainers" role="tabpanel"
                                                aria-labelledby="ETF-gainers-tab">
                                                <table class="table table-hover table-borderless" id="table">
                                                    <tbody>
                                                        <tr class="head" id="t_title1">
                                                            <th></th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="trans"> Pairs </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="new"> Last Price
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="weex"> Weekly Change
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="high"> Weekly Highest
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="low"> Weekly Lowest
                                                                </span>
                                                            </th>
                                                            <th class="g-text-left">
                                                                <span class="arrow" type="deal"> Weekly Volume
                                                                </span>
                                                            </th>
                                                            <th>Action</th>
                                                        </tr>



                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> SANTOS/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">13.484</span>
                                                                <span class="g-grey g-font12"> / $ 13.484 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 126.05% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">21.399</td>
                                                            <td class="g-text-left">5.741</td>
                                                            <td class="g-text-left">6.38M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="santos/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> PORTO/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">5.8335</span>
                                                                <span class="g-grey g-font12"> / $ 5.8335 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 56.83% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">8.3626</td>
                                                            <td class="g-text-left">3.6706</td>
                                                            <td class="g-text-left">5.92M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="porto/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> LAZIO/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">5.7747</span>
                                                                <span class="g-grey g-font12"> / $ 5.7747 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 130.99% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">6.8307</td>
                                                            <td class="g-text-left">2.5000</td>
                                                            <td class="g-text-left">4.68M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="lazio/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> STG/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">0.8409</span>
                                                                <span class="g-grey g-font12"> / $ 0.8409 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 150.27% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">0.9995</td>
                                                            <td class="g-text-left">0.3350</td>
                                                            <td class="g-text-left">600.14K</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="stg/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> INJ/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">1.800</span>
                                                                <span class="g-grey g-font12"> / $ 1.8 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 50.00% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">2.013</td>
                                                            <td class="g-text-left">1.200</td>
                                                            <td class="g-text-left">5.50M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="inj/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> GM/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">0.00000973</span>
                                                                <span class="g-grey g-font12"> / $ 0 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 13.54% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">0.00001553</td>
                                                            <td class="g-text-left">0.00000831</td>
                                                            <td class="g-text-left">6.07M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="gm/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> MELOS/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-red">0.0284</span>
                                                                <span class="g-grey g-font12"> / $ 0.0284 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-red"> -1.73% <i
                                                                    class="bi-arrow-down"></i>
                                                            </td>
                                                            <td class="g-text-left">0.0528</td>
                                                            <td class="g-text-left">0.0250</td>
                                                            <td class="g-text-left">3.37M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="melos/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> ZBC/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-red">0.025087</span>
                                                                <span class="g-grey g-font12"> / $ 0.0250 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-red"> -0.36% <i
                                                                    class="bi-arrow-down"></i>
                                                            </td>
                                                            <td class="g-text-left">0.039708</td>
                                                            <td class="g-text-left">0.022381</td>
                                                            <td class="g-text-left">6.02M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="zbc/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> PMON/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">1.3796</span>
                                                                <span class="g-grey g-font12"> / $ 1.3796 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 3.33% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">2.2001</td>
                                                            <td class="g-text-left">1.2268</td>
                                                            <td class="g-text-left">1.20M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="pmon/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="body">
                                                            <td class="g-text-right star-icon">
                                                                <i class="bi-star-fill"></i>
                                                            </td>
                                                            <td class="g-text-left asset-code g-pointer">
                                                                <img src="<?php echo e(asset('img/Bitcoin-BTC-icon.png')); ?>"
                                                                    class="coin-icon-img" alt="Coin Icon"
                                                                    title="Coin Icon"> MAGIC/USDT
                                                            </td>
                                                            <td class="g-text-left">
                                                                <span class="g-light-green">0.6642</span>
                                                                <span class="g-grey g-font12"> / $ 0.6642 </span>
                                                            </td>
                                                            <td class="g-text-left g-light-green"> 15.49% <i
                                                                    class="bi-arrow-up"></i>
                                                            </td>
                                                            <td class="g-text-left">0.7721</td>
                                                            <td class="g-text-left">0.4552</td>
                                                            <td class="g-text-left">12.11M</td>
                                                            <td class="g-text-center g-pointer left-right-icon"
                                                                symbolold="magic/usdt">
                                                                <a href="javascript:void(0);" target="_blank">
                                                                    <i class="bi bi-arrow-left-right"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        <div class="bg-overlay"></div>
    </section>
    <!--==================================================================================================================================================================================================================-->

    <section class="needhelp">
        <div class="need_title text-center">
            <h4>Need help</h4>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="needhelp_inner">
                        <div class="need_thumb">
                            <img src="<?php echo e(asset('assets/wealthmark_new/img/icon-chat-support.svg')); ?>"
                                class="img-fluid" alt="Icon Chat Support" title="Icon Chat Support">
                        </div>
                        <div class="needhelp_box">
                            <h5>24/7 Chat Support</h5>
                            <p>Get 24/7 chat support with our friendly customer service agents at your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="needhelp_inner">
                        <div class="need_thumb">
                            <img src="<?php echo e(asset('assets/wealthmark_new/img/faqs.svg')); ?>" class="img-fluid"
                                alt="View FAQs" title="View FAQs" a>
                        </div>
                        <div class="needhelp_box">
                            <h5>FAQS</h5>
                            <p>View FAQs for detailed instructions on
                                specific features.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="needhelp_inner">
                        <div class="need_thumb">
                            <img src="<?php echo e(asset('assets/wealthmark_new/img/blog.svg')); ?>" class="img-fluid"
                                alt="Stay up to date with blog" title="Stay up to date with blog">
                        </div>
                        <div class="needhelp_box">
                            <h5>BLOG</h5>
                            <p>Stay up to date with the latest
                                stories and commentary.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more_market">
            <a href="javascript:void(0);" class="btn btn-yellow">View more</a>
        </div>
        <div class="container-fluid ">
            <div class="bottom-box">
            </div>
        </div>
    </section>

    <!--==================================================================================================================================================================================================================-->

    <section class="mob-app p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                    <h3 class="app-heading"> Wealthmark Official API
                    </h3>
                    <span>Make trading more efficient </span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-center pt-4">
                    <a href="javascript:void(0);" class="api-doc">
                        API Documentation
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================================================================================================================================================================================-->


    <section class="bg-white">
        <div class="container">
            <div class="wm-faq-search wm-faq-search-1 bg-light-blue">
                <div class="wm-faq-search-title">Got a Question?</div>
                <div class="wm-faq-search-inner">
                    <div class="wm-faq-search-box-main">

                        <div class=" wm-faq-search-box-div">

                            <svg viewBox="0 0 24 24" fill="none" class="wm-faq-search--icn">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                    fill="currentColor"></path>
                            </svg>

                            <input type="input" value="" placeholder="Search" maxlength="50"
                                class="wm-faq-search-input-box">

                            <button type="button" class="btn-yellow border-0 me-2">
                                Search
                            </button>

                        </div>

                    </div>

                    <a href="#" target="_blank" class="wm-faq-search-default-btn">Live Chat</a>

                </div>
            </div>
        </div>
    </section>

    <!--==================================================================================================================================================================================================================-->
    <p style="font-size: 16px;color: #095CFA;display: none;" id="acceptNoti"></p>

    <div class="cookies" id="cookieNotice">
        <div class="cookie-text">
            <p class="pt-2">We use cookies to offer you a better browsing experience, analyze site traffic,
                personalize content, and serve targeted advertisements. Read about how we use cookies and how you can
                control them on our Privacy Policy. If you continue to use this site, you consent to our use of cookies.
            </p>
        </div>
        <div class="cookie-btn-box">
            <a href="javascript:void(0)" class="customize_cookie btn">Cookies Settings</a>
            <a href="javascript:void(0)" class="cookies_btn all_cookie btn" onclick="acceptCookieConsent();">Accept
                All Cookies</a>
        </div>
    </div>



    <!--==================================================================================================================================================================================================================-->
    <main class="cookies_discription" style="display:none">
        <section class="container">
            <div class="container__heading">
                <h2>Our Cookies Policy</h2>
            </div>
            <div class="container__content">
                <h3>Cookies Policy</h3>
                <p>At WealtMark, we’re strongly committed to protecting and respecting your privacy</p>
                <p> This Privacy Policy (“Privacy Policy”) covers your access and use of this Website, wealthmark.io
                    (the “Website”), as well as associated content, software, and mobile applications (collectively, the
                    “Service”).</p>
                <p>This Privacy Policy explains when and why and how we collect and use personal information about
                    people who visit our Website or use our Services, the conditions under which we may disclose your
                    personal information to others, and how we keep your personal information secure.</p>
                <p>We may change this Privacy Policy from time to time so please check this page occasionally to ensure
                    that you are happy with any changes. By using our Website or our Services, you are agreeing to be
                    bound by this Privacy Policy.</p>
                <h3>What Information Do We Collect? </h3>
                <p> WealthMark (“WealthMark”, “we” or “us”) collects</p>
                <ul>
                    <li>(a) the e-mail addresses of those who communicate with us via email;</li>
                    <li>(b) aggregate information concerning what pages users access or visit;</li>
                    <li>(c) information given by the user (such as survey information and/or site registrations); and
                    </li>
                    <li>(d) information related to your use of the Website and/or the mobile application, including IP
                        address, Device ID, geographic location, and date and time of your request; </li>
                    <li>(e) any other information that you might provide voluntarily. We might also collect your email
                        address and your Wallet ID if you decide to participate to one of our campaigns.</li>
                </ul>
                <h3> How Do We Use the Information? </h3>
                <p> WealthMark uses collected information for the following purposes: </p>
                <ul>
                    <li>i. To fulfill a contract or take steps linked to a contract such as processing your registration
                        on our Website or sending you information about changes to our terms or policies;</li>
                    <li>
                        ii. Where it is necessary for purposes which are in WealthMark’s legitimate interests such as
                        <p><b>(a)</b> to provide the information or content you have requested;</p>
                        <p><b>(b)</b> to contact you about our programs, products, features or services; </p>
                        <p><b>(c)</b> to improve our services and for internal business purposes such as identification
                            and authentication or customer service, portfolio tracking and user preference syncing
                            between devices; </p>
                        <p><b>(d)</b> to ensure the security of our Website, by trying to prevent unauthorized or
                            malicious activities; </p>
                        <p><b>(e)</b> to enforce compliance with our Terms of Use and other policies; </p>
                        <p><b>(f)</b> to help other organizations (such as copyright owners) to enforce their rights;
                            and </p>
                        <p><b>(g)</b> to tailor content, advertisements, and offers for you or for other purposes
                            disclosed at the time of collection.</p>
                    </li>
                    <li>If you do not wish to receive marketing information about our programs, products, features or
                        services, you can opt-out of marketing communications.</li>
                    <li>
                        Where you give us consent, such as
                        <p><b>(a)</b> where you ask us to send marketing information to you via a medium where we need
                            your consent, including alerts via mobile push notifications;</p>
                        <p><b>(b)</b> where you give us consent to place cookies and to use similar technologies; and
                        </p>
                        <p><b>(c)</b> on other occasions where we ask you for consent, for any other purpose that might
                            arise.</p>
                    </li>
                    <li>iii. Where we are legally required to do so. We may also provide access to your personally
                        identifiable information when legally required to do so, to cooperate with police investigations
                        or other legal proceedings, to protect against misuse or unauthorized use of our Website, to
                        limit our legal liability and protect our rights, or to protect the rights, property or safety
                        of visitors of the Website or the public. In those instances, the information is provided only
                        for that purpose.</li>
                </ul>
                <h3> How Do We Share Your Information? </h3>
                <p> We do not sell your personal data to other organizations for commercial purposes. We also only share
                    your personal information to provide products or services you’ve requested, when we have your
                    permission, or under the following circumstances: </p>
                <ul>
                    <li>I. It is necessary to share information in order to investigate, prevent, or take action
                        regarding illegal activities, suspected fraud, situations involving potential threats to the
                        physical safety of any person, violations of Terms of Service, or as otherwise required by law.
                    </li>
                    <li>II. We provide personal information to trusted businesses or persons for the sole purpose of
                        processing personally identifying information on our behalf and provide us with services. When
                        this is done, it is subject to agreements that oblige those parties to process such information
                        only on our instructions and in compliance with this Privacy Policy and appropriate
                        confidentiality and security measures.</li>
                    <li>III. We provide such information to third parties who have entered into non-disclosure
                        agreements with us.</li>
                    <li>IV. We provide such information to a company controlled by, or under common control with,
                        WealthMark for any purpose permitted by this Privacy Policy.</li>
                    <li>V. We may aggregate, anonymize, and publish data for statistical and research purposes only. For
                        example, we may compile and share information related to the popularity of certain products
                        tracked by users. In any such instance, the information will not be able to be traced back to
                        any individual.</li>
                </ul>
                <h3>Security</h3>
                <p> We take precautions to ensure the security of your personal information. We ensure that our Website
                    is protected by reasonable security measures afforded by current technology, and that all our data
                    hosts and servers are similarly protected by such security measures, including but not limited to
                    firewalls. We strongly advise you to change your password frequently and not to use the same
                    password for different websites. </p>
                <p> We cannot protect, nor does this Privacy Policy apply to, any information that you transmit to other
                    users. You should never transmit personal or identifying information to other users. </p>
                <h3>Retention of Your Personal Information</h3>
                <p> We retain information as long as it is necessary to provide the Services requested by you and
                    others, subject to any legal obligations to further retain such information. Information associated
                    with your account will generally be kept until it is no longer necessary to provide the Services or
                    until you ask us to delete it or your account is deleted, whichever comes first. Additionally, we
                    may retain information from deleted accounts to comply with the law, prevent fraud, resolve
                    disputes, troubleshoot problems, assist with investigations, enforce the Terms of Use, and take
                    other actions permitted by law. The information we retain will be handled in accordance with this
                    Privacy Policy. </p>
                <h3>Children</h3>
                <p> We do not knowingly collect information from children under the age of 18. Children aged 17 or
                    younger should not submit any personal information without the permission of their parents or
                    guardians. By using the WealthMark service, you are representing that you are at least 18 years old.
                </p>
                <h3>EU and EEA Users’ Rights</h3>
                <p> If you are a resident of the European Economic Area, you generally have the right to access,
                    rectify, download or erase your information, as well as the right to restrict and object to certain
                    processing of your information. While some of these rights apply generally, certain rights apply
                    only in certain limited circumstances. We briefly describe these rights below: </p>
                <p> You have the right to access your personal data and, if necessary, have it amended, deleted or
                    restricted. In certain instances, you may have the right to the portability of your data. You can
                    also ask us not to send marketing communications and not to use your personal data when we carry out
                    profiling for direct marketing purposes. You can opt out of receiving e-mail newsletters and other
                    marketing communications by following the opt-out instructions provided to you in those e-mails.
                    Transactional account messages will be unaffected even if you opt out from marketing communications.
                </p>
                <h3>Complaints</h3>
                <p> Should you wish to raise a concern about our use of your information (and without prejudice to any
                    other rights you may have), you have the right to do so with your local supervisory authority,
                    although we hope that we can assist with any queries or concerns you may have about our use of your
                    personal data. </p>
                <h3>Your California Privacy Rights</h3>
                <p> WealthMark may have collected, used, and shared, for business purposes, personal information about
                    you as described in this Privacy Policy. Each category of data may be used by WealthMark or shared
                    with third parties also as described in this Privacy Policy. Residents of California have the right
                    to request access to and deletion of the information WealthMark holds about them. Such requests may
                    be submitted by email to legal@wealthmark.io or by mail to WealthMark LLC. WealthMark will not sell
                    your personal information without your consent. WealthMark will not discriminate against you for
                    exercising your rights under CCPA. Specifically, we will not: </p>
                <ul>
                    <li>Deny access to our Services;</li>
                    <li>Charge a different rate for the use of our Services; or</li>
                    <li>Provide a different quality of service.</li>
                </ul>
                <h3>Changes</h3>
                <p> WealthMark may periodically update this policy as deemed necessary. You may access this Policy at
                    any time through our website. </p>
                <h3>Questions</h3>
                <p> Any questions about this Privacy Policy should be addressed to this e-mail address:
                    <b>legal@wealthmark.io.</b>
                </p>
                <p> Effective Date: January 01, 2022. </p>
            </div>
            <div class="container__nav">
                <small>By clicking 'Accept' you are agreeing to our Privacy Policy.</small>
                <a class="button custom_cookie_Accept" href="javascript:void(0)"
                    onclick="acceptCookieConsent();">Accept</a>
            </div>
        </section>
    </main>

    <!--===================================================================================================================================================================================-->

    <div class="modal warning-modal-index fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content pt-3 pb-3 p-3">
                <div class="modal-header">
                    <img class="warning-img" src="<?php echo e(asset('img/warning.svg')); ?>" alt="warning"
                        alt="warning">
                </div>
                <div class="modal-body">

                    <div class="warning-notes scrollbar-style">
                        <p>Beware of new scams. Under no circumstances will Wealthmark call you directly. Learn more</p>
                        <p class="icon">
                            <span class="text-green">
                                <i class="bi bi-check-circle-fill"></i>
                            </span>
                            <span class=""> Participate in activities only on the <span
                                    class="wealthmark-text">「official」Wealthmark website</span>
                            </span>
                        </p>
                        <p class="icon">
                            <span class="text-green">
                                <i class="bi bi-check-circle-fill"></i>
                            </span>
                            <span class="">Verify sources via <span class="wealthmark-text"> Wealthmark </span>
                                Verify to check if it is official </span>
                        </p>
                        <p class="icon">
                            <span class="text-red">
                                <i class="bi bi-x-circle-fill"></i>
                            </span>
                            <span class="">Ignore unrealistic high ROI investments </span>
                        </p>
                        <p class="icon">
                            <span class="text-red">
                                <i class="bi bi-x-circle-fill"></i>
                            </span>
                            <span class=""> Ignore requests from government impersonators </span>
                        </p>
                        <p class="icon">
                            <span class="text-red">
                                <i class="bi bi-x-circle-fill"></i>
                            </span>
                            <span class="">Do not withdraw to unofficial addresses or platforms </span>
                        </p>
                        <p class="icon">
                            <span class="text-red">
                                <i class="bi bi-x-circle-fill"></i>
                            </span>
                            <span class="">Do not disclose your verification code or account information to
                                anyone </span>
                        </p>
                    </div>
                </div>
                <div class="modal-footer warning-index-pop">
                    <button type="button" class="btn btn-yellow w-100 got-it" data-bs-dismiss="modal">GOT
                        IT</button>
                </div>
            </div>
        </div>
    </div>






    <?php echo $__env->make('template.country_language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('template.web_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <script>
        $(".close").click(function() {
            $(".select_country").hide();
        });

        $(".app-down-close").click(function() {
            $(".download_mob_app").hide();
        })


        //   =========================	tab pills js=========================

        $(document).ready(function() {

            $('ul.tabs li').click(function() {
                var tab_id = $(this).attr('data-tab');
                $('ul.tabs li').removeClass('current');
                $('.table-content').removeClass('current');

                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            })

        })
        //   =========================	tab pills js=========================
        $(window).on('load', function() {
            $('#exampleModal').modal('show');
        });

        $(document).ready(function() {

            $(".btn-mobile-nav").click(function() {
                $("#btn-mobile-nav").show();
            });

        })


        //   cookies_btn
        $(".cookies_btn").click(function() {
            $(".cookies").hide();
        })

        $(".customize_cookie").click(function() {
            $(".cookies_discription").css("display", "block");
            $(".cookies").css("display", "none");
        });

        $(".custom_cookie_Accept").click(function() {
            $(".cookies_discription").css("display", "none");
        });
    </script>



    <script>
        $('.tabs').on('click', function() {
            $('.tabs').removeClass('active');
            $(this).addClass('active');
        });
    </script>


    <script>
        $(function() {
            "use strict";
            //you can put magicStartLoop class in any element you want to start with it

            //change magicStartLoop class every num of seconds
            setInterval(function() {
                //loop on every magicStartLoop in the page
                $(".magicStartLoop").each(function() {
                    //after num of seconds make the first movement
                    $(this).addClass("hidden-div").removeClass("magicStartLoop");
                    //first movement
                    $(this).next().addClass("magicStartLoop").removeClass("hidden-div");
                    //check if the last element has magicStartLoop class to repeat the loop again
                    if ($(".sliderContainer").children().last().hasClass("magicStartLoop")) {
                        setTimeout(function() {
                            $(".sliderContainer").children().first().removeClass(
                                "hidden-div").addClass("magicStartLoop");
                        }, 4000); //you must set this time as the same time for setInterval time
                    }
                });
            }, 4000);


        });
    </script>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var headerH = $('.select_country').outerHeight(true);
                console.log(headerH);
                var scrollVal = $(this).scrollTop();
                if (scrollVal > headerH) {
                    $('#header').css({
                        'position': 'fixed',
                        'top': '0px',
                        'width': '100%',
                        'background-color': 'white'
                    });
                } else {
                    $('#header').css({
                        'position': 'static',
                        'top': '0px',
                        'width': '100%',
                        'background-color': 'transparent'
                    });
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH D:\Laravel Project\wealthMark\resources\views/web/index.blade.php ENDPATH**/ ?>