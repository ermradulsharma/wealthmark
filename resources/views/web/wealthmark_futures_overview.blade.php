<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">

<style>
.futures-overview .icon-img{
    width:50px;
    margin-bottom:20px;
}

.futures-overview .icon-img + h4{
    
}
 .futures-overview .icon-img + h4 + div{
   font-size:16px;
   color:var(--text-muted);
   padding:15px 0px;
 }

</style>
</head>

<body class="bg-white futures-overview">
    @include('template.web_menu')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="future-overview-detial-block text-center">
                        <img class="icon-img" src="https://wealthmark.io/img/wm-option.svg" alt="Wallet futures Overview Image">
                        <h4>Wealth Mark Options</h4>
                        <div class="">Perpetual or Quarterly Contracts settled in USDT or BUSD.</div>
                        <a href="#" class="btn btn-yellow shadow mt-3">Trade Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="future-overview-detial-block text-center">
                        <img class="icon-img" src="https://wealthmark.io/img/strategy-trading.svg" alt="Wallet futures Overview Image">
                        <h4>Strategy Trading</h4>
                        <div class="">Perpetual or Quarterly Contracts settled in USDT or BUSD.</div>
                        <a href="#" class="btn btn-yellow shadow mt-3">Trade Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="future-overview-detial-block text-center">
                        <img class="icon-img" src="https://wealthmark.io/img/m-futures.svg" alt="Wallet futures Overview Image">
                        <h4>USDⓈ-M Futures</h4>
                        <div class="">Perpetual or Quarterly Contracts settled in USDT or BUSD.</div>
                        <a href="#" class="btn btn-yellow shadow mt-3">Trade Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="future-overview-detial-block text-center">
                        <img class="icon-img" src="https://wealthmark.io/img/coin-m-futures.svg" alt="Wallet futures Overview Image">
                        <h4>COIN-M Futures</h4>
                        <div class="">Perpetual or Quarterly Contracts settled in USDT or BUSD.</div>
                        <a href="#" class="btn btn-yellow shadow mt-3">Trade Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="bg-light-blue">
            <div class="container">
                <div class="row align-items-center">
                   
                    <div class="col-md-6 text-center">
                            <img src="https://wealthmark.io/img/responsible-trading/responsible-trading.png" class="max-width-300px"/>
                    </div>
                     <div class="col-md-6">
                            <h2 class="title">Responsible Trading with Wealthmark Futures</h2>
                            <div class="fs-16  text-muted py-3">
                               Wealth Mark encourages our users to trade responsibly. Trading can be engaging and fun, but trading is a serious business and it can lead to financial and emotional distress. Trading derivatives carries risk, and furthermore, cryptocurrencies and other digital assets often have high levels of price volatility.
                            </div>
                            <div class="mt-3">
                                <a href="javascript:void(0)" class="btn-yellow">Learn More</a>
                            </div>
                    </div>
                </div>
            </div>
    </section>
      <section>
        
    </section>
    @include('template.country_language')
    @include('template.web_footer')
   
   

    </body>
</html>