<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
    <meta name="keywords" content="Wealthmark, Crypto, coins">
    <meta name="author" content="Wealthmark">
    <style>

    @media(min-width: 1400px) {
        #why-choose-us .card {
            min-height: 280px;
        }
    }
    @media(max-width: 576px) {
        #why-choose-us .card {
            min-height: 280px;
        }
    }
    @media(max-width: 320px) {
        #why-choose-us .card {
            min-height: 320px;
            max-height: 450px;
        }
    }

    #why-choose-us .btn {
        transition: none;
        position: absolute;
        left: 50%;
        bottom: 10px;
        transform: translate(-50%, -50%);
    }
    #why-choose-us .btn:hover{
        transition: none;
        position: absolute;
        left: 50%;
        bottom: 10px;
        transform: translate(-50%, -50%);
    }

    #lunchpool .card.card2 {
        min-height: 402px;
    }

    #why-choose-us .card {
        cursor: pointer;
        border: 1px dotted #a7a7a7 !important;
    }

    #why-choose-us .card:hover {
        cursor: pointer;
        border: 1px dotted orange !important;
        background-color: #ffa50012;
    }
    </style>
</head>

<body>
    @include('template.web_menu')

    <section class="clients-section" id="launchpad-widgets-section">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Wealth Card's Token Launch Platform</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card border-0 shadow animated">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="widgets-block">
                                    <h2 class="fw-extrabold h5">$ 50.88%</h2>
                                    <h3 class="mb-1">Current Funds</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card border-0 shadow animated">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="widgets-block">
                                    <h2 class="fw-extrabold h5">$ 150.88%</h2>
                                    <h3 class="mb-1">Loss Funds</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card border-0 shadow animated">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="widgets-block">
                                    <h2 class="fw-extrabold h5">$ 107, 554</h2>
                                    <h3 class="mb-1">Total Funds</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card border-0 shadow animated">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="widgets-block">
                                    <h2 class="fw-extrabold h5">$145, 781 , 88%</h2>
                                    <h3 class="mb-1">Extra Fund</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="launchpad-section" id="launchpad">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Launchpad</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-6">
                    <div class="launchpad-second-block">
                        <img loading="lazy" src="{{ asset('assets/img/launch.jpg') }}" alt="LaunchPad" title="Launchpad"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-6">
                    <div class="launchapd-detailed-right-block">

                        <div class="row mb-4">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <h4>STEPN</h4>
                                <div class="text text-left">STEPN - A Move-to Health and Fitness Application </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                                <h5 class="launchpad-heading">Tokens Offered </h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 launchpad-right-block">
                                <div class="text">420,000.0000 GMT </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                                <h5 class="launchpad-heading">Participants </h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 launchpad-right-block">
                                <p>130,672 </p>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                                <h5 class="launchpad-heading">Tokens Offered </h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 launchpad-right-block">
                                <div class="text">420,000.0000 GMT </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                                <h5 class="launchpad-heading">Participants </h5>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 launchpad-right-block">
                                <p>130,672 </p>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-md-3 col-xs-6 col-sm-6">
                                <h5 class="launchpad-heading">End Time</h5>
                            </div>
                            <div class="col-md-3 col-xs-6 col-sm-6 launchpad-right-block">
                                <div class="text">2022-03-09</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-center">
                <div class="col-md-3 d-flex justify-content-center">
                    <div class="read-more-block">
                        <a href="#" class="btn btn-yellow shadow"> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lunchpool" id="lunchpool">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">LunchPool</h2>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card first-card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <p class="badge badge-warning text-uppercase">Completed</p>
                                <div class="col-md-12">
                                    <img loading="lazy" class="lunchpool-img-1 img-fluid"
                                        src="{{ asset('assets/img/wm-logo.png') }}" alt="Launchpool image" title="Launchpool image">
                                </div>
                                <div class="col-md-12 launchpool-txt d-flex justify-content-center align-item-center">
                                    <h4>Wealth Mark<h4>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="text">Project Galaxy, A Web3 Credential</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-sm-8">
                                    <h5>Total Rewards:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-sm-4">
                                    <p>3,000</p>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-sm-8">
                                    <h5>Farming Period:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-sm-4">
                                    <p>30 day/s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card card2">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <img loading="lazy" src="{{ asset('assets/img/launchpad-card.png') }}"
                                        alt="LaunchPad Image" title="LaunchPad" class="launchpad-top-img img-fluid">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12 launchpool-txt d-flex justify-content-center align-item-center">
                                    <h4>Wealth Mark<h4>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <img loading="lazy" src="{{ asset('assets/img/lunchpad-img.png') }}"
                                        alt="LaunchPad" title="LaunchPad" class="img-fluid">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="text">Project Galaxy, A Web3 Credential.</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <h5>Total Rewards:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p>3,000</p>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <h5>Farming Period:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p>30 day/s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card card2">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <img loading="lazy" src="{{ asset('assets/img/launchpad-card.png') }}"
                                        alt="LaunchPad Image" title="LaunchPad" class="launchpad-top-img img-fluid">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12 launchpool-txt d-flex justify-content-center align-item-center">
                                    <h4>Wealth Mark<h4>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <img loading="lazy" src="{{ asset('assets/img/lunchpad-img.png') }}"
                                        alt="LaunchPad" title="LaunchPad"  class="img-fluid">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="text">Project Galaxy, A Web3 Credential</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <h5>Total Rewards:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p>3,000</p>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <h5>Farming Period:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p>30 day/s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card card2">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <img loading="lazy" src="{{ asset('assets/img/launchpad-card.png') }}"
                                        alt="LaunchPad Image" title="LaunchPad" class="launchpad-top-img img-fluid">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12 launchpool-txt d-flex justify-content-center align-item-center">
                                    <h4>Wealth Mark<h4>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <img loading="lazy" src="{{ asset('assets/img/lunchpad-img.png') }}"
                                        alt="LaunchPad Image" title="LaunchPad" class="img-fluid">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="text">Project Galaxy, A Web3 Credential</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <h5>Total Rewards:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p>3,000</p>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <h5>Farming Period:</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p>30 day/s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="launch-project" id="launch-project">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 col-md-6 col-lg-5 col-sm-12 col-xs-12 order-2 order-lg-1 order-md-1">
                    <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Launch a project on Wealth now!</h2>
                    </div>
                    <div class="text">Explore more than 60 official Telegram groups on a variety of topics, from trading
                        and NFTs to platform announcements and more. Find your community with more than 40 multilingual
                        Telegram groups designed to bring together local communities.</div>
                    <div class="read-more-block mt-3 mb-3">
                        <a href="#" class="btn btn-yellow shadow mt-3">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 col-sm-12 col-xs-12 order-1 order-lg-2 order-md-2 img-hover3">
                    <figure><img loading="lazy" class="hero-image mx-auto d-block img-fluid"
                            src="{{ asset('assets/img/launch-project-on-wealthmark.svg') }}"
                            alt="launch-project" title="launchpad project">


                    </figure>

                </div>
            </div>

        </div>
    </section>

    <section class="why-choose-us" id="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Why choose Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 why-choos-block">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('assets/img/exposure.svg') }}" alt="launch-project"
                            class="img-fluid" title="launchapd project">
                        <div class="card-body">
                            <h5 class="card-title">Exposure</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-yellow shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 why-choos-block">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('assets/img/liquidity.svg') }}" alt="LaunchPad Image" title="Launchpad image"
                            class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Liquidity</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-yellow shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 why-choos-block">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('assets/img/token-distribution.svg') }}"
                            alt="LaunchPad Image" title="LaunchPad" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Token Distribution</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-yellow shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 why-choos-block">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('assets/img/feature-syynergy.svg') }}"
                            alt="LaunchPad Image" title="LaunchPad" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Future Synergy</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-yellow shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>
