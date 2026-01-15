  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
  @include('template.web_css')


 <style>
     #header{
         background:white;

     }



#tradingview_76e3c
{
    width: auto;
    height: 750px;
}
 </style>


   </head>

 <body class="bg-white">
        @include('template.web_menu')


     <div class="bg-dark-blue p-2 reward-section">
       <div class="container">
           <div class="row aligh-items-center justify-content-center">
               <div class="col-md-6">
                <a href="{{ url( app()->getLocale(), 'register') }}" class="reward-link">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                          <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                    </svg>
                    <div class="reward-text">Register now and get verified - Enjoy Welcome Rewards up to $100!</div>
                    <div class="reward-div-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                    </div>
                </a>
               </div>
           </div>
       </div>
   </div>

    <div class="bg-light-blue mb-5">
        <div class="container-fluid p-0 m-0">
          <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <!--<img src="{{ asset('assets/img/exchange-chart.png') }}" class="img-fluid"-->
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
        </div>
    </div>
  @include('template.country_language')
    @include('template.web_footer')



    </body>
</html>
