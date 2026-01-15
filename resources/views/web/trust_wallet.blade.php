<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">
    @include('template.web_css')

<style>
@media (max-width:575px){
    .three-offers-block .col.d-flex {
      flex-direction: column;
    justify-content: center;
    text-align: center;;
    }
  .three-offers-block .col.d-flex >  .max-width-60px{
      margin-right:unset !important;
     
      max-width:40px !important;
  }
}
</style>

</head>

<body>
    @include('template.web_menu')
    <section class="pt-8 pb-8 bg-gradient-primary trust-banner-section" id="trust-wallet-banner-section">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-12 col-lg-6 mb-8 text-md-left text-white order-2 order-lg-1">
                    <h1 class="display-3 trust-wallet-heading">The most trusted &amp; secure crypto
                        wallet</h1>
                    <p class="text-white-90 lead mb-4 banner-para">Buy, store, collect NFTs, exchange &amp; earn
                        crypto.<br />
                        Join 25 million+ people using Trust Wallet.</p>
                    <div class="download-button">
                        <div class="row download-button-group">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 apple-button">
                                <a href="#"><img  class="mx-auto d-block img-fluid"
                                        src="{{ asset('img/app-store.svg') }}" alt="Trust Wallet Image">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 googleplay-button">
                                <a href="#"><img  class="mx-auto d-block img-fluid"
                                        src="{{ asset('img/google_play.svg') }}" alt="Trust Wallet Image">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 androidapk-button">
                                <a href="#"><img  class="mx-auto d-block img-fluid"
                                        src="{{ asset('img/window-10.svg') }}" alt="Trust Wallet Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center order-1 order-lg-2 text-center">
                    <img  class="mx-auto max-width-300px d-block img-fluid banner-main-img animated"
                        src="{{ asset('img/trust-wallet/wallet.png') }}" alt="Trust Wallet Image">
                </div>
            </div>
        </div>
    </section>
    <!-- banner section End -->
<!-- three offers block end -->
    <div class="three-offers-block bg-light-blue py-3">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <div class="max-width-60px max-height-60px me-2">
                        <img  class="w-100" src="{{ asset('img/trust-wallet/card.svg') }}" alt="Trust Wallet Image">
                    </div>
                    <div class="ml-4">
                        <span class="font-weight-bold lead">
                            Buy Crypto With a Card
                        </span>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="max-width-60px max-height-60px me-2">
                        <img  class="w-100" src="{{ asset('img/trust-wallet/exchange.svg') }}" alt="Trust Wallet Image">
                    </div>
                    <div class="ml-4">
                        <span class="font-weight-bold lead">
                            Exchange Instantly
                        </span>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="max-width-60px max-height-60px me-2">
                        <img class="w-100 max-height-60px" src="{{ asset('img/trust-wallet/privacy.svg') }}" alt="Trust Wallet Image">
                    </div>
                    <div class="ml-4">
                        <span class="font-weight-bold lead">
                            Private &amp; Secure
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- three offers block end -->
    
    <!--<section class="pt-8" id="crypto-info-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="sec-title text-left">-->
    <!--                <span class="title">Know About</span>-->
    <!--                <h2 class="heading-h2">Cryptocurrencies & Trust Wallet</h2>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row align-items-center  pb-4 text-center">-->
    <!--            <div class="col-12 col-lg-6">-->
    <!--                <div class="list-group-item d-flex"><span class="check-icon"> </span>Buy Bitcoin in-->
    <!--                    under five minutes</div>-->
    <!--                <div class="list-group-item d-flex"><span class="check-icon"></span>Easily earn-->
    <!--                    interest on the crypto in your wallet</div>-->
    <!--                <div class="list-group-item d-flex"><span class="check-icon"></span>See your-->
    <!--                    collectibles. Art &amp; NFTs in one place</div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-lg-6">-->
    <!--                <div class="list-group-item d-flex"><span class="check-icon"></span>Exchange your-->
    <!--                    crypto without leaving the app</div>-->
    <!--                <div class="list-group-item d-flex"><span class="check-icon"></span>Track charts-->
    <!--                    and prices within the app</div>-->
    <!--                <div class="list-group-item d-flex"><span class="check-icon"></span>Keep your-->
    <!--                    crypto safe from hackers &amp; scammers</div>-->
    <!--            </div>-->
    <!--            <a href="#" class="btn btn-yellow shadow crypto-download-btn info-button btn btn-primary mt-6 mx-auto ">-->
    <!--                Download Now</a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- basic crypto info block end -->

    <section class="pt-8" id="about-us-section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-12 col-md-6 col-lg-5 text-md-left mb-4 order-2 order-lg-2">
                    <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Buy Crypto with a Card</h2>

                    </div>
                    <div class="text">Get your first $50 of Bitcoin, Ethereum, Wealth Mark Coin and many
                        other
                        cryptocurrencies.</div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 text-center order-1 order-lg-1">
                    <img class="max-width-300px max-height-300px"  src="{{ asset('img/trust-wallet/buy-crypto.svg') }}" alt="Trust Wallet Image">
                        
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-12 col-md-6 col-lg-5 text-md-left mb-4 order-2 order-lg-1">
                    <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Exchange Instantly</h2>

                    </div>
                    <div class="text">No forms, no selfies. Trade crypto anytime with ease.</div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 text-center order-1 order-lg-2">
                     <img class="max-width-300px" src="{{ asset('img/trust-wallet/exchange-instantly.svg') }}" alt="Trust Wallet Image"></figure>
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-12 col-md-6 col-lg-5 order-sm-2 text-md-left mb-4  order-2 order-lg-2">
                    <div class="sec-title">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Private & Secure</h2>
                    </div>

                    <div class="text">Only you can access your wallet. We don’t collect any personal data.
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 text-center order-1 order-lg-1">
                   
                    <img class="max-width-300px" src="{{ asset('img/trust-wallet/private-secure.svg') }}" alt="Trust Wallet Image">
                        
                </div>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-12 col-md-6 col-lg-5 text-md-left order-2 order-lg-1">
                    <div class="sec-title">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Browser for Apps</h2>
                    </div>

                    <div class="text">Use your favourite decentralized apps &amp; find new ones, without
                        leaving your wallet.</div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 text-center order-1 order-lg-2">
                   <img class="max-width-300px"  src="{{ asset('img/trust-wallet/exchange-instantly.svg') }}" alt="Trust Wallet Image">
                </div>
            </div>

        </div>
    </section>
    <!-- About us  block end -->

    <section class="bg-light-blue" id="wallet-steps-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">

                    <div class="sec-title">
                        <span class="title">Welcome to Wealthmark</span>
                        <h2 class="heading-h2">Get Started in 3 Simple Steps</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters mt-8 mb-6 mb-md-7" id="character-group">
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="step-row">
                        <a href="#">
                            <img  class="max-width-200px mb-3" src="{{ asset('img/trust-wallet/step1.svg') }}" alt="Trust Wallet Image">
                        </a>
                        <h3 class="font-weight-bold">
                            Step (1): Download Trust Wallet
                        </h3>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="step-row">
                        <a href="#">
                            <img  class="max-width-200px mb-3"  src="{{ asset('img/trust-wallet/step2.svg') }}" alt="Trust Wallet Image">
                        </a>
                        <h3 class="font-weight-bold">
                            Step (2): Create a new wallet
                        </h3>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="step-row">
                        <a href="#">
                            <img  class="max-width-200px mb-3" src="{{ asset('img/trust-wallet/step3.svg') }}" alt="Trust Wallet Image">
                        </a>
                        <h3 class="font-weight-bold">
                            Step (3): Get some crypto
                        </h3>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <a href="#" class="btn btn-yellow shadow mt-6 mx-auto info-button crypto-download-btn"> Download
                        Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- steps section end -->

  
    @include('template.web_footer')
</body>

</html>