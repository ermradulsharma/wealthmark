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

 </style>


   </head>

 <body class="bg-white">
        @include('template.web_menu')



    <div class="Liquid_Swap_top pt-5">
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-md-8 col-sm-10 col-xs-12">
                <div class="sec-title text-center">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2 text-white">Wealthmark Best Crypto Currency Partners </h2>
                            <div class="text text-center text-white">Trade Instantly &amp; Pool Tokens to Earn Rewards</div>
                        </div>

             </div>

         </div>

         </div>

 </div>
    <div class="bg-dark-blue p-2 reward-section">
       <div class="container">
           <div class="row aligh-items-center justify-content-center">
               <div class="col-md-6">
                <a href="https://www.wealthmark.io/en/register" class="reward-link">
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                          <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                    </svg>
                    <div class="reward-text">Register now and get verified - Enjoy Welcome Rewards up to $100!</div>
                    <div class="reward-div-arrow">
                        <svg  viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                    </div>
                </a>
               </div>
           </div>
       </div>
   </div>

     <section class="bg-light-blue" id="brokers_crypto">

     <div class="container">
         <div class="row">
             <div class="col-md-4 col-sm-12 col-xs-12">
                 <div class="filter">
            <form  method="get" class="collapsed">
                <div  class="filter-switcher icon-menu-filters more-block"></div>

                <div class="list category collapsed">

                    <a href="#" class="item block single-block active">
                        <span class="text">All Forex Brokers</span>
                        <span class="field-button">
                             <i class="bi bi-check"></i>
                        </span>
                    </a>


                    <a href="#" class="item block single-block ">
                        <span class="text">CFD Forex Brokers</span>
                        <span class="field-button">
                             <i class="bi bi-check"></i>
                        </span>
                    </a>


                    <a href="#" class="item block single-block ">
                        <span class="text">Binary Options Brokers</span>
                        <span class="field-button">
                             <i class="bi bi-check"></i>
                        </span>
                    </a>


                    <a href="#" class="item block single-block ">
                        <span class="text">Social Trading Brokers</span>
                        <span class="field-button">
                             <i class="bi bi-check"></i>
                        </span>
                    </a>



                    <div class="block more-block single-block">
                        <span class="text" data-show-more-text="Show more" data-hide-more-text="Show less"></span>
                        <span class="field-button">
                           <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                </div>


                <div class="filter-header block">
                  <i class="bi bi-funnel"></i>
                    <span>Filters:</span>
                </div>

                <div class="range block single-block">
                    <div>Established</div>
                    <div class="inputs">
                        <div
                            class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                            </div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 0%;"></span><span tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <input type="range" hidden="" name="established[]" min="1965" max="2022" step="1" value="1965"
                            id="established_from">
                        <input type="range" hidden="" name="established[]" min="1965" max="2022" step="1" value="2022"
                            id="established_to">
                    </div>
                    <div class="labels">
                        <label for="established_from" data-template="{VALUE}">1965</label>
                        <label for="established_to" data-template="{VALUE}">2022</label>
                    </div>
                </div>



                <div class="range block single-block">
                    <div>Leverage</div>
                    <div class="inputs">
                        <div
                            class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                            </div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 0%;"></span><span tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <input type="range" hidden="" name="leverage[]" min="30" max="3000" step="10" value="30"
                            id="leverage_from">
                        <input type="range" hidden="" name="leverage[]" min="30" max="3000" step="10" value="3000"
                            id="leverage_to">
                    </div>
                    <div class="labels">
                        <label for="leverage_from" data-template="1:{VALUE}">1:30</label>
                        <label for="leverage_to" data-template="1:{VALUE}">1:3000</label>
                    </div>
                </div>



                <div class="list options select-location collapsed">
                    <span class="block single-block more-block">
                        <span class="text">Location</span>
                        <span class="field-button">
                           <i class="bi bi-plus"></i>
                           <i class="bi bi-dash"></i>
                        </span>
                    </span>

                    <div class="item block">
                        <input type="checkbox"  value="3" id="filter_location_3">
                        <label for="filter_location_3">Australia</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="26" id="filter_location_26">
                        <label for="filter_location_26">New Zealand</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="22" id="filter_location_22">
                        <label for="filter_location_22">Canada</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="2" id="filter_location_2">
                        <label for="filter_location_2">US</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="1" id="filter_location_1">
                        <label for="filter_location_1">UK</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="27" id="filter_location_27">
                        <label for="filter_location_27">Ireland</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="39" id="filter_location_39">
                        <label for="filter_location_39">Austria</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="32" id="filter_location_32">
                        <label for="filter_location_32">Germany</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="20" id="filter_location_20">
                        <label for="filter_location_20">Switzerland</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="33" id="filter_location_33">
                        <label for="filter_location_33">France</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="30" id="filter_location_30">
                        <label for="filter_location_30">Spain</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="34" id="filter_location_34">
                        <label for="filter_location_34">Italy</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="37" id="filter_location_37">
                        <label for="filter_location_37">Denmark</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="23" id="filter_location_23">
                        <label for="filter_location_23">Latvia</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="24" id="filter_location_24">
                        <label for="filter_location_24">Poland</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="36" id="filter_location_36">
                        <label for="filter_location_36">Greece</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="8" id="filter_location_8">
                        <label for="filter_location_8">Cyprus</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="15" id="filter_location_15">
                        <label for="filter_location_15">Malta</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="4" id="filter_location_4">
                        <label for="filter_location_4">UAE</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="7" id="filter_location_7">
                        <label for="filter_location_7">South Africa</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="40" id="filter_location_40">
                        <label for="filter_location_40">Lebanon</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="41" id="filter_location_41">
                        <label for="filter_location_41">Kazakhstan</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="5" id="filter_location_5">
                        <label for="filter_location_5">Singapore</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="19" id="filter_location_19">
                        <label for="filter_location_19">Malaysia</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="21" id="filter_location_21">
                        <label for="filter_location_21">Hong Kong</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="16" id="filter_location_16">
                        <label for="filter_location_16">Japan</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="9" id="filter_location_9">
                        <label for="filter_location_9">Belize</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="31" id="filter_location_31">
                        <label for="filter_location_31">Bermuda</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="10" id="filter_location_10">
                        <label for="filter_location_10">Bahamas</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="35" id="filter_location_35">
                        <label for="filter_location_35">Dominica</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="6" id="filter_location_6">
                        <label for="filter_location_6">Saint Vincent and the Grenadines</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="11" id="filter_location_11">
                        <label for="filter_location_11">Saint Kitts and Nevis</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="13" id="filter_location_13">
                        <label for="filter_location_13">British Virgin Islands</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="18" id="filter_location_18">
                        <label for="filter_location_18">Cayman Islands</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="17" id="filter_location_17">
                        <label for="filter_location_17">Marshall Islands</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="38" id="filter_location_38">
                        <label for="filter_location_38">Mauritius</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="25" id="filter_location_25">
                        <label for="filter_location_25">Seychelles</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="12" id="filter_location_12">
                        <label for="filter_location_12">Vanuatu</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="29" id="filter_location_29">
                        <label for="filter_location_29">Unknown</label>
                    </div>

                </div>


                <div class="list options collapsed select-platforms">
                    <span class="block single-block more-block">
                        <span class="text">Platforms</span>
                        <span class="field-button">
                           <i class="bi bi-plus"></i>
                           <i class="bi bi-dash"></i>
                        </span>
                    </span>

                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="4" id="filter_platforms_4">
                        <label for="filter_platforms_4">Web</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="1" id="filter_platforms_1">
                        <label for="filter_platforms_1">MetaTrader 4</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="2" id="filter_platforms_2">
                        <label for="filter_platforms_2">MetaTrader 5</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="5" id="filter_platforms_5">
                        <label for="filter_platforms_5">cTrader</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="10" id="filter_platforms_10">
                        <label for="filter_platforms_10">xStation</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="9" id="filter_platforms_9">
                        <label for="filter_platforms_9">Currenex</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="6" id="filter_platforms_6">
                        <label for="filter_platforms_6">Ninja Trader</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="11" id="filter_platforms_11">
                        <label for="filter_platforms_11">CQG</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="3" id="filter_platforms_3">
                        <label for="filter_platforms_3">Specific</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="7" id="filter_platforms_7">
                        <label for="filter_platforms_7">Social Platform</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="8" id="filter_platforms_8">
                        <label for="filter_platforms_8">Binary Platform</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="platforms[]" value="12" id="filter_platforms_12">
                        <label for="filter_platforms_12">FIX API (protocol)</label>
                    </div>

                </div>


                <div class="list options collapsed select-instruments">
                    <span class="block single-block more-block">
                        <span class="text">Instruments</span>
                        <span class="field-button">
                           <i class="bi bi-plus"></i>
                           <i class="bi bi-dash"></i>
                        </span>
                    </span>

                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="1" id="filter_instruments_1">
                        <label for="filter_instruments_1">Currencies</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="2" id="filter_instruments_2">
                        <label for="filter_instruments_2">Crypto</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="3" id="filter_instruments_3">
                        <label for="filter_instruments_3">Indices</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="4" id="filter_instruments_4">
                        <label for="filter_instruments_4">Metals</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="5" id="filter_instruments_5">
                        <label for="filter_instruments_5">Energies</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="6" id="filter_instruments_6">
                        <label for="filter_instruments_6">Softs</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="7" id="filter_instruments_7">
                        <label for="filter_instruments_7">Stocks</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="8" id="filter_instruments_8">
                        <label for="filter_instruments_8">Bonds</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="9" id="filter_instruments_9">
                        <label for="filter_instruments_9">ETFs</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox" name="instruments[]" value="10" id="filter_instruments_10">
                        <label for="filter_instruments_10">Interest Rates</label>
                    </div>

                </div>


                <div class="list options collapsed select-methods">
                    <span class="block single-block more-block">
                        <span class="text">Funding methods</span>
                        <span class="field-button">
                           <i class="bi bi-plus"></i>
                           <i class="bi bi-dash"></i>
                        </span>
                    </span>

                    <div class="item block">
                        <input type="checkbox"  value="1" id="filter_methods_1">
                        <label for="filter_methods_1">Wire Transfer</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="2" id="filter_methods_2">
                        <label for="filter_methods_2">Credit Cards</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="3" id="filter_methods_3">
                        <label for="filter_methods_3">PayPal</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="4" id="filter_methods_4">
                        <label for="filter_methods_4">Skrill</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="5" id="filter_methods_5">
                        <label for="filter_methods_5">Neteller</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="58" id="filter_methods_58">
                        <label for="filter_methods_58">PayRedeem</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="7" id="filter_methods_7">
                        <label for="filter_methods_7">FasaPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="8" id="filter_methods_8">
                        <label for="filter_methods_8">UnionPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="10" id="filter_methods_10">
                        <label for="filter_methods_10">WebMoney</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="9" id="filter_methods_9">
                        <label for="filter_methods_9">Perfect Money</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="19" id="filter_methods_19">
                        <label for="filter_methods_19">Yandex Money</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="24" id="filter_methods_24">
                        <label for="filter_methods_24">Trustly</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="25" id="filter_methods_25">
                        <label for="filter_methods_25">Qiwi</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="37" id="filter_methods_37">
                        <label for="filter_methods_37">ePayments</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="41" id="filter_methods_41">
                        <label for="filter_methods_41">iDeal</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="49" id="filter_methods_49">
                        <label for="filter_methods_49">Sofort</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="52" id="filter_methods_52">
                        <label for="filter_methods_52">Payza</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="54" id="filter_methods_54">
                        <label for="filter_methods_54">AdvCash</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="11" id="filter_methods_11">
                        <label for="filter_methods_11">Bitcoin</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="12" id="filter_methods_12">
                        <label for="filter_methods_12">Bitсoin Cash</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="18" id="filter_methods_18">
                        <label for="filter_methods_18">Ethereum</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="15" id="filter_methods_15">
                        <label for="filter_methods_15">Liteсoin</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="17" id="filter_methods_17">
                        <label for="filter_methods_17">Dash</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="53" id="filter_methods_53">
                        <label for="filter_methods_53">Ripple</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="31" id="filter_methods_31">
                        <label for="filter_methods_31">Tether</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="34" id="filter_methods_34">
                        <label for="filter_methods_34">BitWallet</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="30" id="filter_methods_30">
                        <label for="filter_methods_30">RBK Money</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="29" id="filter_methods_29">
                        <label for="filter_methods_29">Intellect Money</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="35" id="filter_methods_35">
                        <label for="filter_methods_35">Uphold</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="36" id="filter_methods_36">
                        <label for="filter_methods_36">BitPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="26" id="filter_methods_26">
                        <label for="filter_methods_26">Bpay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="27" id="filter_methods_27">
                        <label for="filter_methods_27">POLi</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="33" id="filter_methods_33">
                        <label for="filter_methods_33">EcoPayz</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="22" id="filter_methods_22">
                        <label for="filter_methods_22">UPayCard</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="20" id="filter_methods_20">
                        <label for="filter_methods_20">Giropay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="21" id="filter_methods_21">
                        <label for="filter_methods_21">Wirecard</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="23" id="filter_methods_23">
                        <label for="filter_methods_23">Epay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="28" id="filter_methods_28">
                        <label for="filter_methods_28">PaySafeCard</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="38" id="filter_methods_38">
                        <label for="filter_methods_38">SticPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="39" id="filter_methods_39">
                        <label for="filter_methods_39">DusuPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="40" id="filter_methods_40">
                        <label for="filter_methods_40">DotPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="42" id="filter_methods_42">
                        <label for="filter_methods_42">AstroPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="43" id="filter_methods_43">
                        <label for="filter_methods_43">SafetyPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="44" id="filter_methods_44">
                        <label for="filter_methods_44">Moneta Ru</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="45" id="filter_methods_45">
                        <label for="filter_methods_45">RegularPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="46" id="filter_methods_46">
                        <label for="filter_methods_46">DixiPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="47" id="filter_methods_47">
                        <label for="filter_methods_47">CashU</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="48" id="filter_methods_48">
                        <label for="filter_methods_48">Payeer</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="50" id="filter_methods_50">
                        <label for="filter_methods_50">Klarna</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="51" id="filter_methods_51">
                        <label for="filter_methods_51">Przelewy24</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="55" id="filter_methods_55">
                        <label for="filter_methods_55">Alipay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="56" id="filter_methods_56">
                        <label for="filter_methods_56">SafeCharge</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="57" id="filter_methods_57">
                        <label for="filter_methods_57">ZotaPay</label>
                    </div>


                    <div class="item block">
                        <input type="checkbox"  value="59" id="filter_methods_59">
                        <label for="filter_methods_59">PayTrust88</label>
                    </div>

                </div>


                <div class="block input input-name" hidden="">
                    <span>Name</span>
                    <input type="search" name="name" value="">
                </div>


            </form>
        </div>
             </div>
             <div class="col-md-8 col-sm-12 col-xs-12">

                 <div class="sec-title">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Best Crypto Brokers for 2022</h2>
                        </div>
        <div class="simple content">
            <div class="text"> Brokerage companies are scattered all over the world and have many differences in trading conditions,
                products and services. Some companies are regulated, others are not. Some have been around for decades,
                others are rather young. Certain brokers work as Market Makers and have fixed spreads, others provide
                STP or ECN accounts with direct market access and offer a much larger selection of underlying assets for
                trading. This site was created to help you find the best forex brokers for your specific needs and
                requirements. There are several sections and filters in the menu on the left. These can be used to
                create a custom list of entities with preferable parameters and characteristics. If you find a certain
                broker you are currently trading with or have used before, feel free to share your experience about it
                in the comments section meant for forex broker reviews.</div>

        </div>


        <div class="brokers list">

            <a href="" target="_blank" class="div-node item"   >
                <span class="div-node left-side">
                    <img loading="lazy"  src="{{ asset('img/brokers/roboforex.png') }}" alt="RoboForex">
                </span>

                <span class="div-node center">
                    <span class="ul-node">
                        <span class="li-node name"><span >RoboForex</span> (
                        <span >2009</span>)</span>
                        <span class="li-node"><b>Leverage:</b> up to 1:2000</span>
                        <span class="li-node"><b>Deposit:</b> from 10 USD</span>
                        <span class="li-node"><b>Spreads:</b>&nbsp;&nbsp;
                        <img src="{{ asset('img/brokers/low.png') }}"  alt="low">&nbsp;&nbsp;low</span>
                    </span>
                </span>
                <span class="div-node right-side">
                    <span class="ul-node">
                        <span class="li-node"><b>Location:</b> <span class="list-item">Belize</span></span>
                        <span class="li-node"><b>Instruments:</b> <span class="list-item">Currencies</span>
                            <span class="list-item">Crypto</span>
                            <span class="list-item">Indices</span>
                            <span class="list-item">Metals</span>
                            <span class="list-item">Energies</span>
                            <span class="list-item">Stocks</span>
                            <span class="list-item">ETFs</span></span>
                        <span class="li-node"><b>Platforms:</b> <span class="list-item">Web</span>
                            <span class="list-item">MetaTrader 4</span>
                            <span class="list-item">MetaTrader 5</span>
                            <span class="list-item">cTrader</span>
                            <span class="list-item">Specific</span>
                            <span class="list-item">Social Platform</span></span>
                        <span class="li-node methods">
                            <img loading="lazy" src="{{ asset('img/brokers/wire_transfer.png') }}"  alt="Wire Transfer" title="Wire Transfer">
                            <img loading="lazy" src="{{ asset('img/brokers/cards.png_2.png') }}"  alt="Card Payment" title="Card Payment">
                            <img loading="lazy" src="{{ asset('img/brokers/FasaPay.png') }}"  alt="Fasa Pay" title="Fasa Pay">
                            <img loading="lazy" src="{{ asset('img/brokers/bitcoin.png') }}"  alt="Bitcoin cash pay" title="Bitcoin cash pay">
                            <img loading="lazy" src="{{ asset('img/brokers/ethereum.png') }}"  alt="Ethereum Pay" title="Ethereum Pay">

                    </span>
                    </span>
                </span>
            </a>

    <a href="#" target="_blank" class="div-node item ">
                <span class="div-node left-side">
                    <img loading="lazy"    src="{{ asset('img/brokers/roboforex.png') }}" alt="RoboForex">
                </span>

                <span class="div-node center">
                    <span class="ul-node">
                        <span class="li-node name"><span >RoboForex</span> (<span
                                >2009</span>)</span>
                        <span class="li-node"><b>Leverage:</b> up to 1:2000</span>
                        <span class="li-node"><b>Deposit:</b> from 10 USD</span>
                        <span class="li-node"><b>Spreads:</b>&nbsp;&nbsp;
                        <img src="{{ asset('img/brokers/low.png') }}"  alt="low">&nbsp;&nbsp;low</span>
                    </span>
                </span>
                <span class="div-node right-side">
                    <span class="ul-node">
                        <span class="li-node"><b>Location:</b> <span class="list-item">Belize</span></span>
                        <span class="li-node"><b>Instruments:</b> <span class="list-item">Currencies</span>
                            <span class="list-item">Crypto</span>
                            <span class="list-item">Indices</span>
                            <span class="list-item">Metals</span>
                            <span class="list-item">Energies</span>
                            <span class="list-item">Stocks</span>
                            <span class="list-item">ETFs</span></span>
                        <span class="li-node"><b>Platforms:</b> <span class="list-item">Web</span>
                            <span class="list-item">MetaTrader 4</span>
                            <span class="list-item">MetaTrader 5</span>
                            <span class="list-item">cTrader</span>
                            <span class="list-item">Specific</span>
                            <span class="list-item">Social Platform</span></span>
                        <span class="li-node methods">
                            <img loading="lazy" src="{{ asset('img/brokers/wire_transfer.png') }}"  alt="Wire Transfer" title="Wire Transfer">
                            <img loading="lazy" src="{{ asset('img/brokers/cards.png_2.png') }}"  alt="Card Payment" title="Card Payment">
                            <img loading="lazy" src="{{ asset('img/brokers/FasaPay.png') }}"  alt="Fasa Pay" title="Fasa Pay">
                            <img loading="lazy" src="{{ asset('img/brokers/bitcoin.png') }}"  alt="Bitcoin cash pay" title="Bitcoin cash pay">
                            <img loading="lazy" src="{{ asset('img/brokers/ethereum.png') }}"  alt="Ethereum Pay" title="Ethereum Pay">

                    </span>
                    </span>
                </span>
            </a>

          <div class="pagination-div mt-5 bg-white shadow-sm p-3">
                   <button type="button" class="mirror pagination-back" aria-label="Previous page" disabled="">
                     <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M11.934 12l3.89 3.89-1.769 1.767L8.398 12l1.768-1.768 3.89-3.889 1.767 1.768-3.889 3.89z" fill="currentColor"></path>
                     </svg>
                   </button>
                   <button type="button" aria-label="Page number 1" class="pagination-active" disabled="">1</button>
                   <button type="button" aria-label="Page number 2" class="pagination-all">2</button>
                   <button type="button" aria-label="Page number 3" class="pagination-all">3</button>
                   <button type="button" aria-label="Page number 4" class="pagination-all">4</button>
                   <button type="button" aria-label="Page number 5" class="pagination-all">5</button>
                   <button type="button" class="mirror pagination-next" aria-label="Next page">
                     <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                     </svg>
                   </button>
                 </div>

        </div>

             </div>
         </div>
     </div>

      </section>

<section>
    <div class="container">
        <div class="row">
            <div class="sec-title text-left">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Today's Cryptocurrency Prices by Market Cap</h2>

                        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive" style="">
  <table class="wm-table">
    <colgroup>
      <col>
      <col style="width:50px;min-width:auto;max-width:auto">
      <col style="width:250px;min-width:auto;max-width:auto">
      <col>
      <col style="width:84px;min-width:auto;max-width:auto">
      <col style="width:84px;min-width:auto;max-width:auto">
      <col style="width:84px;min-width:auto;max-width:auto">
      <col style="width:200px;min-width:auto;max-width:auto">
      <col style="width:200px;min-width:auto;max-width:auto">
      <col style="width:200px;min-width:auto;max-width:auto">
      <col>
      <col style="width:50px;min-width:auto;max-width:auto">
    </colgroup>
    <thead style="">
      <tr>
        <th class="stickyTop"></th>
        <th class="stickyTop" style="text-align:start">
          <div class="broker-tb-first-th">
            <div class="wm-tbl-column-div">
              <p class="wm-tbl-column-title "  >#</p>
              <span class=" space-width"></span>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:start">
          <div class="broker-tb-first-th">
            <div class="wm-tbl-column-div">
              <p class="wm-tbl-column-title"  >Name</p>
              <span class=" space-width"></span>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div class="bGlLSM">
            <div class="wm-tbl-column-div">
              <span class=" space-width"></span>
              <p class="wm-tbl-column-title"  >Price</p>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div>
            <div class="bGlLSM">
              <div class="wm-tbl-column-div">
                <span class=" space-width"></span>
                <p class="wm-tbl-column-title"  >1h %</p>
              </div>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div>
            <div class="bGlLSM">
              <div class="wm-tbl-column-div">
                <span class=" space-width"></span>
                <p class="wm-tbl-column-title"  >24h %</p>
              </div>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div>
            <div class="bGlLSM">
              <div class="wm-tbl-column-div">
                <span class=" space-width"></span>
                <p class="wm-tbl-column-title"  >7d %</p>
              </div>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div class="bGlLSM">
            <div class="wm-tbl-column-div">
              <span class=" space-width"></span>
              <p class="wm-tbl-column-title"  >Market Cap</p>
            </div>
            <div class="wm-tbl-info-dv">
              <svg  fill="currentColor" height="16" width="16" viewBox="0 0 24 24"  class="wm-tbl-info-icn">
                <path d="M12 2C6.48583 2 2 6.48583 2 12C2 17.5142 6.48583 22 12 22C17.5142 22 22 17.5142 22 12C22 6.48583 17.5142 2 12 2ZM14.215 17.2367C13.6642 17.4533 11.755 18.365 10.655 17.3958C10.3267 17.1075 10.1633 16.7417 10.1633 16.2975C10.1633 15.4658 10.4367 14.7408 10.9292 13C11.0158 12.6708 11.1217 12.2442 11.1217 11.9058C11.1217 11.3217 10.9 11.1667 10.2992 11.1667C10.0058 11.1667 9.68083 11.2708 9.38667 11.3808L9.54917 10.715C10.205 10.4483 11.0283 10.1233 11.7333 10.1233C12.7908 10.1233 13.5692 10.6508 13.5692 11.6542C13.5692 11.9433 13.5192 12.45 13.4142 12.8L12.8058 14.9517C12.68 15.3867 12.4525 16.3458 12.805 16.63C13.1517 16.9108 13.9725 16.7617 14.3775 16.5708L14.215 17.2367ZM13.21 8.66667C12.52 8.66667 11.96 8.10667 11.96 7.41667C11.96 6.72667 12.52 6.16667 13.21 6.16667C13.9 6.16667 14.46 6.72667 14.46 7.41667C14.46 8.10667 13.9 8.66667 13.21 8.66667Z"></path>
              </svg>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div class="bGlLSM">
            <div class="wm-tbl-column-div">
              <span class=" space-width"></span>
              <p class="wm-tbl-column-title"  >Volume(24h)</p>
            </div>
            <div class="wm-tbl-info-dv">
              <svg  fill="currentColor" height="16" width="16" viewBox="0 0 24 24"  class="wm-tbl-info-icn">
                <path d="M12 2C6.48583 2 2 6.48583 2 12C2 17.5142 6.48583 22 12 22C17.5142 22 22 17.5142 22 12C22 6.48583 17.5142 2 12 2ZM14.215 17.2367C13.6642 17.4533 11.755 18.365 10.655 17.3958C10.3267 17.1075 10.1633 16.7417 10.1633 16.2975C10.1633 15.4658 10.4367 14.7408 10.9292 13C11.0158 12.6708 11.1217 12.2442 11.1217 11.9058C11.1217 11.3217 10.9 11.1667 10.2992 11.1667C10.0058 11.1667 9.68083 11.2708 9.38667 11.3808L9.54917 10.715C10.205 10.4483 11.0283 10.1233 11.7333 10.1233C12.7908 10.1233 13.5692 10.6508 13.5692 11.6542C13.5692 11.9433 13.5192 12.45 13.4142 12.8L12.8058 14.9517C12.68 15.3867 12.4525 16.3458 12.805 16.63C13.1517 16.9108 13.9725 16.7617 14.3775 16.5708L14.215 17.2367ZM13.21 8.66667C12.52 8.66667 11.96 8.10667 11.96 7.41667C11.96 6.72667 12.52 6.16667 13.21 6.16667C13.9 6.16667 14.46 6.72667 14.46 7.41667C14.46 8.10667 13.9 8.66667 13.21 8.66667Z"></path>
              </svg>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <div class="bGlLSM">
            <div class="wm-tbl-column-div">
              <span class=" space-width"></span>
              <p class="wm-tbl-column-title"  >Circulating Supply</p>
            </div>
            <div class="wm-tbl-info-dv">
              <span class="icon-Info"></span>
            </div>
          </div>
        </th>
        <th class="stickyTop" style="text-align:end">
          <p style="font-size:12px"   class="broker-tbl-market-cap-p">Last 7 Days</p>
        </th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">1</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">Bitcoin</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">1</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BTC</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="">
            <a href="#" class="wm-link">
              <span>$16,833.51</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.68% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.27% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>15.11% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$323.33B</span>
            <span  class="broker-tbl-market-cap-1">$323,333,414,187</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$42,821,079,216</p>
            </a>
            <div >
              <p color="text2"  class="wm-tbl-broker-vol-sub">2,543,225 BTC</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">

          <p>19,207,725 BTC</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>

      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">2</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="BNB logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">BNB</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">4</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BNB</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="rise">
            <a href="#" class="wm-link">
              <span>$279.42</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.86% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>0.39% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>14.52% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$44.70B</span>
            <span  class="broker-tbl-market-cap-1">$44,699,792,964</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$1,377,514,783</p>
            </a>
            <div >
              <p color="text2"   class="wm-tbl-broker-vol-sub">4,933,655 BNB</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">
            <p>159,974,299 BNB</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>
      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">3</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">Bitcoin</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">1</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BTC</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="">
            <a href="#" class="wm-link">
              <span>$16,833.51</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.68% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.27% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>15.11% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$323.33B</span>
            <span  class="broker-tbl-market-cap-1">$323,333,414,187</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$42,821,079,216</p>
            </a>
            <div >
              <p color="text2"  class="wm-tbl-broker-vol-sub">2,543,225 BTC</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">

          <p>19,207,725 BTC</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>

      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">4</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="BNB logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">BNB</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">4</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BNB</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="rise">
            <a href="#" class="wm-link">
              <span>$279.42</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.86% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>0.39% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>14.52% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$44.70B</span>
            <span  class="broker-tbl-market-cap-1">$44,699,792,964</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$1,377,514,783</p>
            </a>
            <div >
              <p color="text2"   class="wm-tbl-broker-vol-sub">4,933,655 BNB</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">
            <p>159,974,299 BNB</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>
      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">5</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">Bitcoin</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">1</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BTC</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="">
            <a href="#" class="wm-link">
              <span>$16,833.51</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.68% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.27% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>15.11% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$323.33B</span>
            <span  class="broker-tbl-market-cap-1">$323,333,414,187</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$42,821,079,216</p>
            </a>
            <div >
              <p color="text2"  class="wm-tbl-broker-vol-sub">2,543,225 BTC</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">

          <p>19,207,725 BTC</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>

      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">6</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="BNB logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">BNB</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">4</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BNB</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="rise">
            <a href="#" class="wm-link">
              <span>$279.42</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.86% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>0.39% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>14.52% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$44.70B</span>
            <span  class="broker-tbl-market-cap-1">$44,699,792,964</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$1,377,514,783</p>
            </a>
            <div >
              <p color="text2"   class="wm-tbl-broker-vol-sub">4,933,655 BNB</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">
            <p>159,974,299 BNB</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>
      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">7</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">Bitcoin</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">1</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BTC</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="">
            <a href="#" class="wm-link">
              <span>$16,833.51</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.68% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.27% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>15.11% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$323.33B</span>
            <span  class="broker-tbl-market-cap-1">$323,333,414,187</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$42,821,079,216</p>
            </a>
            <div >
              <p color="text2"  class="wm-tbl-broker-vol-sub">2,543,225 BTC</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">

          <p>19,207,725 BTC</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>

      <tr>
        <td>
          <span>
            <span  class="wm-tbl-str-div">
              <span class="icon-Star" style="color: #a6b0c3 ;"></span>
            </span>
          </span>
        </td>
        <td style="text-align: start;">
          <p color="text2"   class="wm-tbl-broker-vol-sub">8</p>
        </td>
        <td style="text-align: start;" class="">
          <div class="d-flex align-items-center">
            <a href="#" class="wm-link">
              <div  class="broker-tbl-coin-div-main">
                <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="BNB logo">
                <div class="name-area ">
                  <p class="broker-tbl-coin-title">BNB</p>
                  <div  class="coin-item-symbol-div">
                    <div class="coin-nm-mob">4</div>
                    <p color="text3" class="coin-nm-color coin-item-symbol"  >BNB</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <div class="rise">
            <a href="#" class="wm-link">
              <span>$279.42</span>
            </a>
          </div>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-up">
            <span class="icon-Caret-up"></span>0.86% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>0.39% </span>
        </td>
        <td style="text-align: end;">
          <span class="broker-tbl-price-down">
            <span class="icon-Caret-down"></span>14.52% </span>
        </td>
        <td style="text-align: end;">
          <p   class="broker-tbl-market-cap-p" style="white-space: nowrap;">
            <span class="broker-tbl-market-cap-2">$44.70B</span>
            <span  class="broker-tbl-market-cap-1">$44,699,792,964</span>
          </p>
        </td>
        <td style="text-align: end;">
          <div class="wm-tbl-broker-vol-div">
            <a href="#" class="wm-link">
              <p  class="wm-tbl-broker-vol-title" >$1,377,514,783</p>
            </a>
            <div >
              <p color="text2"   class="wm-tbl-broker-vol-sub">4,933,655 BNB</p>
            </div>
          </div>
        </td>
        <td style="text-align: end;">
            <p>159,974,299 BNB</p>
        </td>
        <td style="text-align: end;">
          <a href="#" class="wm-link">
            <img src="{{ asset('img/brokers/grapgh.svg') }}">
          </a>
        </td>

      </tr>


    </tbody>
  </table>
</div>
            </div>
        </div>
    </div>
</section>

  @include('template.country_language')
    @include('template.web_footer')


    <script  src="https://www.wealthmark.io/assets/img/brokers/jquery-ui.range-n-touch-punch-2.min.js" defer=""></script>
    <script src="https://www.wealthmark.io/assets/img/brokers/main32.js" defer=""></script>

    </body>
</html>
