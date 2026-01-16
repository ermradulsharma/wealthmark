<?php //echo "<pre>"; print_r($ethereum); die(); ?>
  <!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
        <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Buy Sell Trade</title>
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
  @include('template.web_css')

 <style>

     #header{
         background:white;

     }
    .currency_symbol{
        border-radius: 50%;
        height: 30px;
        width: 30px;
        padding: 4px 10px 0px 10px;
        box-shadow: 0 .125rem .35rem rgba(0,0,0,.075)!important;
        background: #ff7e0d;
        color: white;
    }
    .bS-crypto-select-coin-symbol span{
             background: #ff7e0d;
    color: #fff;
    border-radius: 50%;
    padding: 2px 7px;
    }



 </style>


   </head>

 <body class="bg-white">


    @include('template.web_menu')

   <section class="bg-light-blue selection_forTrade" >
<div class="container">
    <div class="row align-items-center justify-content-center">

        <div class="w-auto me-5">
           <div class="sec-title">
                            <span class="title">Welcome to Wealthmark</span>
                            <h1 class="heading-h2">Buy crypto in 3 steps</h1>
                            <div class="text">
                                Buy Bitcoin and 99+ cryptocurrency with 50+ fiat currencies
                            </div>
          </div>
        </div>
        <div class="Crypto-loans-right">
            <div class="crypto-right-inner-main mt-0">
                <div class="dashboard-tabpills">
                    <div class="dashboard-card-body">



                                <ul class="nav nav-pills my-1 border-bottom expressTrade" id="pills-tab" role="tablist">
                                    <li class="nav-item w-50" role="presentation">
                                        <button class="nav-link active w-100" id="Buy" value="0" type="button" onClick="SelectExpressTrade(this.id)">Buy</button>
                                   </li>
                                    <li class="nav-item w-50" role="presentation">
                                        <button class="nav-link w-100" id="sell"  value="1" type="button" onClick="SelectExpressTrade(this.id)">Sell</button>
                                    </li>
                                </ul>



                           <!--=====================================content section========================    -->


                                <div class="tab-content " id="expresss-buy-sell-main-div">

                                    <div class="tab-pane fade active show" id="Buy-express" role="tabpanel" aria-labelledby="Buy-express-tab">
                                        <div class="crypto-right-inner flex-column">
                                            <div class="flex-1">
                                                <div class="field crypto-rght-first-box">

                                                    <div id="ocbs-guide-step1" class="bS-crypto-div">
                                                        <span></span>
                                                          <div class="bS-crypto-div-inner">
                                                            <div class="bS-crypto-div-title">Spend</div>
                                                            <div class="bS-crypto-div-inp-div">
                                                              <div class="bS-crypto-div-inp-div-1">

                                                                <!--<input type="number" placeholder="Please enter amount" class="bS-crypto-div-input" value="" id="amount" oninput="count_crypto(this.value)">-->
                                                                  <input type="number" placeholder="Please enter amount" class="bS-crypto-div-input" value="" id="amount" oninput="trade(this.id)">
                                                                  <!--<input type="hidden" class="selectedglobalCurrency" name="selectedglobalCurrency" value="">-->
                                                                  <!--<input type="hidden" class="selectedglobalCurrencyRate" name="selectedglobalCurrencyRate" value="">-->

                                                              </div>

                                                              <div class="bS-crypto-div-open-list"  id="selected_crrency">
                                                                 <div class="bS-crypto-select-coin-symbol"><img src="{{ asset('img/inr-img.png') }}" class="bS-crypto-select-coin"></div>
                                                                <div class="bS-crypto-select-coin-title cointitle">INR</div>
                                                                <svg viewBox="0 0 24 24" fill="none" class="bS-crypto-div-open-list-svg">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>
                                                                </svg>
                                                              </div>
                                                            </div>
                                                          </div>
                                                    </div>
                                                    <div id="error-message" style="display:none; color:red;">Please enter an amount greater than 100</div>

                                                    <div id="ocbs-guide-step2" class="bS-crypto-div">
                                                    <span></span>
                                                      <div class="bS-crypto-div-inner">
                                                        <div class="bS-crypto-div-title">Receive</div>
                                                        <div class="bS-crypto-div-inp-div">
                                                          <div class="bS-crypto-div-inp-div-1">
                                                            <!--<input type="number" placeholder="0.00" class="bS-crypto-div-input" value="" id="result" oninput="count_currency(this.value)">-->
                                                              <input type="number" placeholder="0.00" class="bS-crypto-div-input" value="" id="result" oninput="trade(this.id)">
                                                             <!--<input type="hidden" class="selectedCrypto" name="selectedCrypto" value="ETH"> 250423-->
                                                             <!--<input type="hidden" class="selectedCrypto" name="selectedCrypto" value="BMK">-->
                                                          </div>
                                                          <div class="bS-crypto-div-open-list" id="selected_crypto">

                                                            <!--<img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}" class="bS-crypto-select-coin"> 250423-->
                                                            <img src="{{ asset('storage/app/bmklogo/12.png') }}" class="bS-crypto-select-coin">
                                                            <!--<div  class="bS-crypto-select-coin-title selectedCryptoTypeTitle">ETH</div> 250423-->
                                                             <div  class="bS-crypto-select-coin-title selectedCryptoTypeTitle">BMK</div>
                                                            <svg viewBox="0 0 24 24" fill="none" class="bS-crypto-div-open-list-svg">
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>
                                                            </svg>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div id="error-message-crypto" style="display:none; color:red;">Please enter an amount greater than 100</div>
                                                </div>
                                            </div>

                                            <div class="mt-5">

                                                <div class="bS-est-div">
                                       <div class="bS-est-div-inner" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The price of crypto changes frequently based on market conditions. Please refer to the price on the confirm order page as your final quotation.">

                                         <div class="bS-est-div-inner-title">Estimate price:</div>
                                         <div class="bS-est-div-inner-price-div">
                                           <div class="bS-est-div-inner-price-div-title">
                                               <span>1</span>
                                               <!--<span class="c_Type">ETH</span> -->
                                                <span class="c_Type">BMK</span>
                                               <span>≈</span>
                                               <span  class="c_Val">
                                                  USD
                                                   {{-- number_format( $ethereum->data->priceUsd , 8, '.', '') --}}
                                                    {{ number_format( $bmk_price->per_coin , 8, '.', '') }}
                                               </span>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="switch-div">
                                         <svg viewBox="0 0 24 24" fill="none" class="switch-div-icon">
                                           <path d="M21 7.5v3H2.5l7-7v4H21zM3 16.5v-3h18.5l-7 7v-4H3z" fill="currentColor"></path>
                                         </svg>
                                       </div>
                            </div>

                                 <!--=================remove desabled class when coin selected =================================-->

                                                @if (!Auth::check())
                                                 <button class="btn btn-yellow w-100 mt-4 desabled selectPaymntTobuy_crypto" id="selectPaymntTobuy_crypto" >  Log In  </button>
                                                @else



                                                    <button class="btn btn-yellow w-100 mt-4 selectPaymntTobuy_crypto" id="selectPaymntTobuy_crypto" {{ (sizeof($userPaymentMethod) < 1 ) ? 'disabled' : ' ' }}> {{ (sizeof($userPaymentMethod) < 1 ) ? 'No payment method added yet!' : 'BUY' }}  </button>
                                                    @if(sizeof($userPaymentMethod) < 1)
                                                                        <a type="button" class="btn btn-yellow w-100 mt-4 " href="{{  url(app()->getLocale()."/user/payment") }} "> Add payment method </a>
                                                                    @endif
                                                     @endif

                                                         <div class="Recurring_Buy-div">
                                                          <div class="Recurring_Buy">
                                                            <svg viewBox="0 0 24 24" fill="none" class="titmer-svg">
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.597 16.594A6.48 6.48 0 0112 18.498h-1.25v2.5H12a9 9 0 006.364-15.364 9 9 0 00-12.728 0l1.767 1.768a6.5 6.5 0 019.193 9.192zM13.25 8h-2.5v4.518l3.185 3.185 1.768-1.768-2.453-2.453V8zM5.627 9.568v1.2l-.092.006c-.767.062-1.371.29-1.783.662-.41.37-.639.891-.639 1.564 0 .684.24 1.223.676 1.642.438.421 1.08.726 1.889.925l.076.019v1.901l-.123-.029a3.94 3.94 0 01-.838-.305 2.512 2.512 0 01-.596-.4L3.14 17.935c.446.416 1.309.784 2.268.974l.08.016v1.277h1.578v-1.207l.086-.011c.796-.11 1.357-.448 1.718-.891a2.457 2.457 0 00.532-1.562c0-.669-.246-1.177-.668-1.568-.426-.394-1.037-.675-1.772-.874l-.074-.02v-1.802l.125.033c.406.106.816.31 1.099.558l1.035-1.136c-.43-.4-1.102-.697-1.875-.861l-.08-.017V9.568H5.628zm.19 4.272l-.137-.056c-.221-.09-.381-.185-.485-.303a.599.599 0 01-.149-.418c0-.133.028-.298.126-.448.1-.152.265-.279.522-.34l.123-.03v1.595zm1.057 3.678v-1.732l.147.08a.934.934 0 01.376.346.936.936 0 01.122.483.9.9 0 01-.096.429.744.744 0 01-.414.343l-.135.05z" fill="currentColor"></path>
                                                            </svg>
                                                            <span class="text">Recurring Buy</span>
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
    </div>
</div>


</section>



<section class="payment-panel_section" style="display:none">
      @include('user.confirm_payment_panel')
</section>

<section class="crypto-three-steps bg-white">

              <div class="container">
                  <div class="row">
                      <div class="sec-title">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2">Buy & Sell Crypto on wealthmark: Where You Trade Crypto in 3 Steps</h2>
                            <div class="text">
                               wealthmark is a safe and secure platform to buy and sell cryptocurrencies quickly using our streamlined buy/sell process. You're just three steps away from your first Bitcoin, Ethereum, and other cryptocurrencies.
                            </div>
          </div>
                  </div>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="serviceBox">
                <div class="service-icon">
                    <span>
                        <i class="bi bi-person-bounding-box"></i>
                    </span>
                </div>
                <h3 class="title">Register for an account</h3>
                <div class="text p-4">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="serviceBox">
                <div class="service-icon">
                    <span>
                      <i class="bi bi-person-check"></i>
                    </span>
                </div>
                <h3 class="title">Verify your identity</h3>
                <div class="text p-4">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>
            </div>
        </div>
         <div class="col-md-4 col-sm-4">
            <div class="serviceBox">
                <div class="service-icon">
                    <span>
                       <i class="bi bi-currency-bitcoin"></i>
                    </span>
                </div>
                <h3 class="title">Buy Crypto!</h3>
                <div class="text p-4">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>
            </div>
        </div>
    </div>
</div>

</section>

  @include('template.country_language')
    @include('template.web_footer')

  <!----------------------------modal---------------------------------->
  <div class="hide">
  <div class="wm-custom-modal-diolog">
  <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close">
         <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
       </svg>
    <div class="wm-custom-modal-body">
        <div id="select_currency_list" style="display:block">
            <div class="wm-custom-modal-header">
    <span>
        Select Currency
    </span>

    </div>
            <div class="pb-3" >
      <div class="custom-modal-search-div">
        <svg viewBox="0 0 24 24" fill="none" class="custom-modal-search-icn">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
        </svg>
        <!--<input type="text" id="coinModalInput" placeholder="Search" class="custom-modal-search-input" value="">-->
      </div>

      <div class="wm-custom-modal-max-height">
        <div class="search-fillter-div">
          @foreach ($allcurrency as $currency)
                <div id="currency-{{ $currency->id }}" class="custom-modal-drpdn" onClick="select_currency(this.id)">
                    <div class="custom-modal-drpdn-inner">
                      <div class="d-flex">
                        <span class="currency_symbol">{{ $currency->symbol }}</span>
                        <div class="custom-modal-drpdn-img">
                            <!--<input type="hidden" class="selectedcurrencyPrice" name="currency-{{ $currency->id.'_price' }}" value="{{ number_format( $currency->currencyVal_by_USD , 8, '.', '') }}">-->
                            <!--<input type="hidden" class="selectedCurrencyRate" name="currency-{{ $currency->id.'_price' }}" value="{{ number_format( $currency->currencyVal_by_INR , 8, '.', '') }}">-->
                            <!--<input type="hidden" class="selectedCurrencyId" name="currency-{{  $currency->id.'_price' }}" value="{{ $currency->id }}">-->
                          <div class="custom-modal-drpdn-title">{{ $currency->name }}</div>
                          <div class="custom-modal-drpdn-subtitle" style="display: block;">{{ $currency->desc }}</div>
                        </div>
                      </div>
                    </div>
                </div>
            @endforeach



         </div>
      </div>
    </div>
        </div>
        <div id="select_crypto_list" style="display:block">

       <div class="wm-custom-modal-header">Select Crypto</div>
       <div class="pb-3">
         <div class="custom-modal-search-div">
           <svg viewBox="0 0 24 24" fill="none" class="custom-modal-search-icn">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
           </svg>
           <!--<input type="text" id="coinModalInput" placeholder="Search" class="custom-modal-search-input" value="">-->
         </div>
         <div class="custom-modal-drpdn-filter">
           <div class="custom-modal-drpdn-filter-text">Sort by</div>
           <div class="d-flex">
             <div class="custom-modal-drpdn-filter-active">24h Vol</div>
             <div class="custom-modal-drpdn-filter-text">24h Change <svg viewBox="0 0 24 24" fill="none" class="custom-modal-drpdn-filter-svg">
                 <path d="M5 13.47l1.41-1.41 5.1 5.1V3h1.99v14.15l5.09-5.09L20 13.47l-7.5 7.5-7.5-7.5z" fill="currentColor"></path>
               </svg>
             </div>
             <div class="custom-modal-drpdn-filter-text">24h Change <svg viewBox="0 0 24 24" fill="none" class="custom-modal-drpdn-filter-svg">
                 <path d="M19 10.5l-1.41 1.41-5.1-5.1v14.16H10.5V6.82l-5.09 5.09L4 10.5 11.5 3l7.5 7.5z" fill="currentColor"></path>
               </svg>
             </div>
           </div>
         </div>
         <div class="wm-custom-modal-max-height">
           <div class="search-fillter-div">

              <div id="choose-coin-BMK" class="custom-modal-drpdn" onClick="select_crypto(this.id)">
               <div class="custom-modal-drpdn-inner">
                 <div class="d-flex">
                   <img src="{{ asset('storage/app/bmklogo/12.png') }}" class="custom-modal-drpdn-img-1">
                   <div class="custom-modal-drpdn-img">
                     <div class="custom-modal-drpdn-title">BMK</div>
                     <div class="custom-modal-drpdn-subtitle">BMK</div>
                   </div>
                 </div>
               </div>
               <div class="">
                 <div class="custom-modal-drpdn-price"> ${{number_format( $bmk_price->per_coin , 8, '.', '')}}</div>
                 <!--<input type="hidden"  id="choose-coin-BMK_Currentprice" name="choose-coin-BMK_Currentprice" value="{{number_format( $bmk_price->per_coin , 8, '.', '')}}">-->
                 <div class="custom-modal-drpdn-status text-success">+3.1%</div>
               </div>
             </div>

             <div id="choose-coin-BTC" class="custom-modal-drpdn" onClick="select_crypto(this.id)">
               <div class="custom-modal-drpdn-inner">
                 <div class="d-flex">
                   <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" class="custom-modal-drpdn-img-1">
                   <div class="custom-modal-drpdn-img">
                     <div class="custom-modal-drpdn-title">BTC</div>
                     <div class="custom-modal-drpdn-subtitle">Bitcoin</div>
                   </div>
                 </div>
               </div>
               <div class="">
                 <div class="custom-modal-drpdn-price">$<?php $btc= number_format($bitcoin->data->priceUsd,8); echo number_format($bitcoin->data->priceUsd,8); ?></div>
                 <!--<input type="hidden"id="choose-coin-BTC_Currentprice" name="choose-coin-BTC_Currentprice"  value=" {{ number_format( $bitcoin->data->priceUsd , 8, '.', '') }}" >-->
                 <?php $bitcoinstatus = $bitcoin->data->changePercent24Hr; ?>
                 @if ($bitcoinstatus>0)
                 <div class="custom-modal-drpdn-status text-success"><?php echo number_format($bitcoin->data->changePercent24Hr,2); ?> %</div>
                 @else
                 <div class="custom-modal-drpdn-status"><?php echo number_format($bitcoin->data->changePercent24Hr,2); ?> %</div>
                 @endif
               </div>
             </div>
             <div id="choose-coin-ETH" class="custom-modal-drpdn" onClick="select_crypto(this.id)">
               <div class="custom-modal-drpdn-inner">
                 <div class="d-flex">
                   <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}" class="custom-modal-drpdn-img-1">
                   <div class="custom-modal-drpdn-img">
                     <div class="custom-modal-drpdn-title">ETH</div>
                     <div class="custom-modal-drpdn-subtitle">Ethereum</div>
                   </div>
                 </div>
               </div>
               <div class="">
                 <div class="custom-modal-drpdn-price">$<?php echo number_format( $ethereum->data->priceUsd , 8); ?></div>
                 <!--<input type="hidden"  id="choose-coin-ETH_Currentprice" name="choose-coin-ETH_Currentprice" value=" {{ number_format( $ethereum->data->priceUsd , 8, '.', '') }}">-->
                 <?php $etharstatus = $ethereum->data->changePercent24Hr; ?>
                 @if ($etharstatus>0)
                 <div class="custom-modal-drpdn-status text-success"><?php echo number_format($ethereum->data->changePercent24Hr,2); ?>%</div>
                 @else
                 <div class="custom-modal-drpdn-status"><?php echo number_format($ethereum->data->changePercent24Hr,2); ?>%</div>
                 @endif
               </div>
             </div>
             <!--<div id="choose-coin-BNB" class="custom-modal-drpdn" onClick="select_crypto(this.id)">-->
             <!--  <div class="custom-modal-drpdn-inner">-->
             <!--    <div class="d-flex">-->
             <!--      <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
             <!--      <div class="custom-modal-drpdn-img">-->
             <!--        <div class="custom-modal-drpdn-title">BNB</div>-->
             <!--        <div class="custom-modal-drpdn-subtitle">BNB</div>-->
             <!--      </div>-->
             <!--    </div>-->
             <!--  </div>-->
             <!--  <div class="">-->
             <!--    <div class="custom-modal-drpdn-price">251.256254</div>-->
             <!--    <div class="custom-modal-drpdn-status">-3.02 %</div>-->
             <!--  </div>-->
             <!--</div>-->
             <!--<div id="choose-coin-XRP" class="custom-modal-drpdn" onClick="select_crypto(this.id)">-->
             <!--  <div class="custom-modal-drpdn-inner">-->
             <!--    <div class="d-flex">-->
             <!--      <img src="{{ asset('img/4766a9cc-8545-4c2b-bfa4-cad2be91c135.png') }}" class="custom-modal-drpdn-img-1">-->
             <!--      <div class="custom-modal-drpdn-img">-->
             <!--        <div class="custom-modal-drpdn-title">XRP</div>-->
             <!--        <div class="custom-modal-drpdn-subtitle">Ripple</div>-->
             <!--      </div>-->
             <!--    </div>-->
             <!--  </div>-->
             <!--  <div class="">-->
             <!--    <div class="custom-modal-drpdn-price">251.256254</div>-->
             <!--    <div class="custom-modal-drpdn-status">-4.31 %</div>-->
             <!--  </div>-->
             <!--</div>-->
             <!--<div id="choose-coin-LTC" class="custom-modal-drpdn" onClick="select_crypto(this.id)">-->
             <!--  <div class="custom-modal-drpdn-inner">-->
             <!--    <div class="d-flex">-->
             <!--      <img src="{{ asset('img/359ca651-a084-4010-92d8-4eaff96e6384.png') }}" class="custom-modal-drpdn-img-1">-->
             <!--      <div class="custom-modal-drpdn-img">-->
             <!--        <div class="custom-modal-drpdn-title">LTC</div>-->
             <!--        <div class="custom-modal-drpdn-subtitle">Litecoin</div>-->
             <!--      </div>-->
             <!--    </div>-->
             <!--  </div>-->
             <!--  <div class="">-->
             <!--    <div class="custom-modal-drpdn-price">251.256254</div>-->
             <!--    <div class="custom-modal-drpdn-status">-3.83 %</div>-->
             <!--  </div>-->
             <!--</div>-->
             <!--<div id="choose-coin-BUSD" class="custom-modal-drpdn" onClick="select_crypto(this.id)">-->
             <!--  <div class="custom-modal-drpdn-inner">-->
             <!--    <div class="d-flex">-->
             <!--      <img src="{{ asset('img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" class="custom-modal-drpdn-img-1">-->
             <!--      <div class="custom-modal-drpdn-img">-->
             <!--        <div class="custom-modal-drpdn-title">BUSD</div>-->
             <!--        <div class="custom-modal-drpdn-subtitle">BUSD</div>-->
             <!--      </div>-->
             <!--    </div>-->
             <!--  </div>-->
             <!--  <div class="">-->
             <!--    <div class="custom-modal-drpdn-price">251.256254</div>-->
             <!--  </div>-->
             <!--</div>-->
             <!--<div id="choose-coin-USDT" class="custom-modal-drpdn" onClick="select_crypto(this.id)">-->
             <!--  <div class="custom-modal-drpdn-inner">-->
             <!--    <div class="d-flex">-->
             <!--      <img src="{{ asset('img/2b5c7d80-7bcd-4cfb-8bd9-d1760a752afc.png') }}" class="custom-modal-drpdn-img-1">-->
             <!--      <div class="custom-modal-drpdn-img">-->
             <!--        <div class="custom-modal-drpdn-title">USDT</div>-->
             <!--        <div class="custom-modal-drpdn-subtitle">TetherUS</div>-->
             <!--      </div>-->
             <!--    </div>-->
             <!--  </div>-->
             <!--  <div class="">-->
             <!--    <div class="custom-modal-drpdn-price">251.256254</div>-->
             <!--  </div>-->
             <!--</div>-->
           </div>
         </div>
       </div>
     </div>

    </div>
  </div>

</div>
<script src="{{ asset('assets/js/alert.js') }}"></script>
    <script>
    let timerId = null;
$(".pg-option").click(function () {
   // alert();
    $(this).addClass("active");
    $(this).children(".pg-selected").attr("src","{{ asset('img/wm-card_tick.svg') }}");
    $(this).siblings(".pg-option").removeClass("active");
    $(this).siblings(".pg-option").children(".pg-selected").attr("src","{{ asset('img/wm-not_selected_tick.svg') }}");

   // var selectedpymnttypebefore =  $(".active .paymentMethodType ").val();
   clearInterval(timerId);
        var timeLeft = 30;
        //console.log(timeLeft);
        var elem = document.getElementById('timer_div');

         timerId = setInterval(countdown, 1000);

            function countdown() {

                if ( (timeLeft == -1) ) {
               // clearTimeout(timerId);
                 clearInterval(timerId);
               // alert();
                $(".pg-option").removeClass("active");
                $(".pg-option").children(".pg-selected").attr("src"," ");
                $(".pg-option").siblings(".pg-option").removeClass("active");
                $(".pg-option").siblings(".pg-option").children(".pg-selected").attr("src","")


                } else {

                elem.innerHTML = "(" + timeLeft + ")"

                timeLeft--;
                }
            }

});

    </script>

 <script>


 $("#selected_crrency").click(function() { // this is required
                $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
                $("#select_currency_list").css("display" , "block");
                $("#select_crypto_list").css("display" , "none");


        });

$("#selected_crypto").click(function() { // this is required
                $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
                $("#select_crypto_list").css("display" , "block");
                $("#select_currency_list").css("display" , "none");

        });


    function count_currency_03052023(count_currency){   // this is old code where we were using hidden input fields
            //alert(count_currency);

            const crypto_value = $('.selectedCoinPrice').val();
            const selectedglobalCurrencyRate = $('.selectedglobalCurrencyRate').val();
            const coin_count = $('#result').val();
            const totalinrvalue = crypto_value * selectedglobalCurrencyRate * coin_count;

            $("#amount").val(totalinrvalue.toFixed(8));

            const selectedcryptoType = $('.selectedCryptoTypeTitle').text();
       //  const selectedcurrencyPrice = $('.selectedglobalCurrency').val();

          const selectedcoinTitle = $('.cointitle').text();
       //console.log(coin_count);

            const errorDiv = $('#error-message');
                errorDiv.empty();

                /* For INR*/

                if (totalinrvalue < 100 && selectedcoinTitle == 'INR') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 100 INR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(totalinrvalue > 55000 && selectedcoinTitle == 'INR'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 55000 INR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For USD */

                if (totalinrvalue < 1.5 && selectedcoinTitle == 'USD') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 USD</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(totalinrvalue > 671 && selectedcoinTitle == 'USD'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 671 USD</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For EUR */

                if (totalinrvalue < 1.5 && selectedcoinTitle == 'EUR') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 EUR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(totalinrvalue > 611 && selectedcoinTitle == 'EUR'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 611 EUR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For GBP*/

                if (totalinrvalue < 1.5 && selectedcoinTitle == 'GBP') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 GBP</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(totalinrvalue > 536 && selectedcoinTitle == 'GBP'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 536 GBP</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }
                else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For JPY*/

                if (totalinrvalue < 133.05 && selectedcoinTitle == 'JPY') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 133.05 JPY</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(totalinrvalue > 89300 && selectedcoinTitle == 'JPY'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 89300 JPY</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }


            errorDiv.hide();

           const FixedInrvalue_lowest = 100;
            const selected_crypto_value = $('.selectedCoinPrice').val();
           // const cryptovalue_in_FixedInrvalue_lowest = ((FixedInrvalue_lowest * selectedcurrencyPrice) / selected_crypto_value).toFixed(8);

            const FixedInrvalue_highest = 55000;
            //const cryptovalue_in_FixedInrvalue_highest = ((FixedInrvalue_highest * selectedcurrencyPrice) / selected_crypto_value).toFixed(8);

            // console.log(cryptovalue_in_FixedInrvalue_lowest);
            // console.log(cryptovalue_in_FixedInrvalue_highest);

            const errorDiv1 = $('#error-message-crypto');
                errorDiv1.empty();

                /* For BMK*/

                if (count_currency <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'BMK') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' BMK</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(count_currency > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'BMK'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+' BMK</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For ETH*/

                if (count_currency <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'ETH') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' ETH</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(count_currency > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'ETH'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+' ETH</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For BTC*/

                if (count_currency <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'BTC') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' BTC</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(count_currency > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'BTC'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+' BTC</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

            errorDiv1.hide();
         }
//  function select_crypto(id){

        //  }

    function count_crypto_03052023(amountToBuy){    // this is old code where we were using hidden input fields
            //console.log(amountToBuy);
            //alert(amountToBuy);

            const selected_crypto_value = $('.selectedCoinPrice').val();
        //    const selectedcurrencyPrice = $('.selectedglobalCurrency').val();
            const selectedcoinTitle = $('.cointitle').text();

            const selectedcryptoType = $('.selectedCryptoTypeTitle').text();

            const errorDiv = $('#error-message');
                errorDiv.empty();

                /* For INR*/

                if (amountToBuy < 100 && selectedcoinTitle == 'INR') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 100 INR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(amountToBuy > 55000 && selectedcoinTitle == 'INR'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 55000 INR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For USD */

                if (amountToBuy < 1.5 && selectedcoinTitle == 'USD') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 USD</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(amountToBuy > 671 && selectedcoinTitle == 'USD'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 671 USD</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For EUR */

                if (amountToBuy < 1.5 && selectedcoinTitle == 'EUR') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 EUR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(amountToBuy > 611 && selectedcoinTitle == 'EUR'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 611 EUR</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For GBP*/

                if (amountToBuy < 1.5 && selectedcoinTitle == 'GBP') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 GBP</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(amountToBuy > 536 && selectedcoinTitle == 'GBP'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 536 GBP</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }
                else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For JPY*/

                if (amountToBuy < 133.05 && selectedcoinTitle == 'JPY') {
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 133.05 JPY</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else if(amountToBuy > 89300 && selectedcoinTitle == 'JPY'){
                    errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 89300 JPY</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }


            errorDiv.hide();

         //   const selected_domestic_value = amountToBuy * selectedcurrencyPrice;


            const total_crypto = (selected_domestic_value / selected_crypto_value);

            const FixedInrvalue_lowest = 100;

         //   const cryptovalue_in_FixedInrvalue_lowest = ((FixedInrvalue_lowest * selectedcurrencyPrice) / selected_crypto_value).toFixed(8);

            const FixedInrvalue_highest = 55000;
        //    const cryptovalue_in_FixedInrvalue_highest = ((FixedInrvalue_highest * selectedcurrencyPrice) / selected_crypto_value).toFixed(8);

            // console.log(cryptovalue_in_FixedInrvalue_lowest);
            // console.log(cryptovalue_in_FixedInrvalue_highest);


            const errorDiv1 = $('#error-message-crypto');
                errorDiv1.empty();

                /* For BMK*/

                if (total_crypto <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'BMK') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' BMK</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(total_crypto > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'BMK'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+' BMK</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {

                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For ETH*/

                if (total_crypto <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'ETH') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' ETH</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(total_crypto > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'ETH'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+' ETH</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For BTC*/

                if (total_crypto <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'BTC') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' BTC</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(total_crypto > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'BTC'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+'  BTC</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

            errorDiv1.hide();

            //$("#result").val(total_crypto);
            $("#result").val(total_crypto.toFixed(8));
            // $(this).val() = '';
      }


    function select_crypto(id){ // this function is used to select crypto coins so this is required.

        crypto_id = id;
        const selected_crypto_value = $("#"+crypto_id+'_'+"Currentprice").val();
        const amountTospend = $('#amount').val();
        const amountInCurrency = $('.selectedglobalCurrency').val();
        const selectedcurrencyPrice = $('.selectedcurrencyPrice').val();
        const selected_domestic_value = amountTospend * amountInCurrency;

        //  const total_crypto = (selected_domestic_value / selected_crypto_value);
        const total_crypto = (selected_domestic_value / selected_crypto_value);
        const selectedcoinTitle = $('.cointitle').text();

       if(selected_domestic_value > 0){
           // $("#result").val(total_crypto);
            $("#result").val(total_crypto.toFixed(8));
       }
       const selectedcryptoType = $('.selectedCryptoTypeTitle').text();
    //   console.log(total_crypto);
    //   console.log(selectedcoinTitle);
    //   console.log(id);
    const errorDiv1 = $('#error-message-crypto');
                errorDiv1.empty();

                // if (total_crypto < 0.00062 && selectedcoinTitle == 'INR' && id=='choose-coin-ETH') {
                //     $('.wm-custom-modal-close').click();
                //     errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 0.00062 ETH</div>');

                //     errorDiv1.show();
                //     return;
                //      $('.wm-custom-modal-close').click();
                // }else if(total_crypto > 0.35 && selectedcoinTitle == 'INR' && id=='choose-coin-ETH'){
                //     $('.wm-custom-modal-close').click();
                //     errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 55000 INR</div>');
                //     $('#selectPaymntTobuy_crypto').prop('disabled', true);
                //     errorDiv1.show();

                //     return;

                // }else {
                //     $('#selectPaymntTobuy_crypto').prop('disabled', false);
                // }


                // if (total_crypto < 1.73 && selectedcoinTitle == 'INR' && id=='choose-coin-BMK') {
                //     $('.wm-custom-modal-close').click();
                //     errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.73 BMK</div>');
                //     $('#selectPaymntTobuy_crypto').prop('disabled', true);
                //     errorDiv1.show();

                //     return;

                // }else if(total_crypto > 955 && selectedcoinTitle == 'INR' && id=='choose-coin-BMK'){
                //     $('.wm-custom-modal-close').click();
                //     errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 955 BMK</div>');
                //     $('#selectPaymntTobuy_crypto').prop('disabled', true);
                //     errorDiv1.show();

                //     return;

                // }else {

                //     $('#selectPaymntTobuy_crypto').prop('disabled', false);
                // }


                //  if (total_crypto < 0.000041 && selectedcoinTitle == 'INR' && id=='choose-coin-BTC') {
                //      $('.wm-custom-modal-close').click();
                //     errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 0.000041 BTC</div>');
                //     $('#selectPaymntTobuy_crypto').prop('disabled', true);
                //     errorDiv1.show();

                //     return;

                // }else if(total_crypto > 0.022 && selectedcoinTitle == 'INR' && id=='choose-coin-BTC'){
                //     $('.wm-custom-modal-close').click();
                //     errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 0.022 BTC</div>');
                //     $('#selectPaymntTobuy_crypto').prop('disabled', true);
                //     errorDiv1.show();

                //     return;

                // }else {
                //     $('#selectPaymntTobuy_crypto').prop('disabled', false);
                // }


       errorDiv1.hide();
    //   const errorDiv = $('#error-message');
    //             errorDiv.empty();

    //             /* For INR*/

    //             if (amountTospend < 100 && selectedcoinTitle == 'INR') {
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 100 INR</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else if(amountTospend > 55000 && selectedcoinTitle == 'INR'){
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 55000 INR</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else {
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', false);
    //             }

    //             /* For USD */

    //             if (amountTospend < 1.5 && selectedcoinTitle == 'USD') {
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 USD</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else if(amountTospend > 671 && selectedcoinTitle == 'USD'){
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 671 USD</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else {
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', false);
    //             }

    //             /* For EUR */

    //             if (amountTospend < 1.5 && selectedcoinTitle == 'EUR') {
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 EUR</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else if(amountTospend > 611 && selectedcoinTitle == 'EUR'){
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 611 EUR</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else {
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', false);
    //             }

    //             /* For GBP*/

    //             if (amountTospend < 1.5 && selectedcoinTitle == 'GBP') {
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 1.5 GBP</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else if(amountTospend > 536 && selectedcoinTitle == 'GBP'){
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 536 GBP</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }
    //             else {
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', false);
    //             }

    //             /* For JPY*/

    //             if (amountTospend < 133.05 && selectedcoinTitle == 'JPY') {
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than 133.05 JPY</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else if(amountTospend > 89300 && selectedcoinTitle == 'JPY'){
    //                 errorDiv.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than 89300 JPY</div>');
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', true);
    //                 errorDiv.show();
    //                 return;
    //             }else {
    //                 $('#selectPaymntTobuy_crypto').prop('disabled', false);
    //             }


    //         errorDiv.hide();


       //else{
         //  $("#result").val(selected_crypto_value);
        //  const crypto_value = $('.selectedCoinPrice').val();
        //   const coin_count = $('#result').val();
        // const totalinrvalue = crypto_value * 1 * coin_count;
        // $("#amount").val(totalinrvalue);
       //}


          $('.selectedCoinPrice').val(selected_crypto_value);
          $('#selected_crypto .bS-crypto-select-coin').attr('src' , $("#"+crypto_id+' '+ ".custom-modal-drpdn-img-1").attr('src'));
          $('#selected_crypto .bS-crypto-select-coin-title').html($("#" +crypto_id+' '+ ".custom-modal-drpdn-title").html());
           $('.selectedCrypto').val($("#" +crypto_id+' '+ ".custom-modal-drpdn-title").html());
          $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');


           //alert(coin_count);
           $('.bS-est-div-inner-price-div-title .c_Type').html( $(".selectedCrypto").val() );
           $('.bS-est-div-inner-price-div-title .c_Val').text('USD'+' '+$(".selectedCoinPrice").val());

      }
    function select_currency(id){  // this function is used to select currency of countries so this is required.

          currency_id = id;

          $('#selected_crrency .bS-crypto-select-coin').attr('src' , $("#"+currency_id+' '+ ".custom-modal-drpdn-img-1").attr('src'));
          $('#selected_crrency .bS-crypto-select-coin-title').html($("#" +currency_id+' '+ ".custom-modal-drpdn-title").html());
           $('#selected_crrency .bS-crypto-select-coin-symbol').html('<span>'+$("#" +currency_id+' '+ ".currency_symbol").html()+'</span>');
       //   $('.selectedglobalCurrency').val($("#" +currency_id+' '+ ".selectedcurrencyPrice").val());
          $('.selectedglobalCurrencyRate').val($("#" +currency_id+' '+ ".selectedCurrencyRate").val());

           $('.selectedglobalCurrencyId').val($("#" +currency_id+' '+ ".selectedCurrencyId").val());
          $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');

            const selected_crypto_value = $('.selectedCoinPrice').val();
            const amountTospend = $('#amount').val();
            //const amountInCurrency = $('.selectedglobalCurrency').val();
         //   const selectedcurrencyPrice = $('.selectedglobalCurrency').val();
        //    const selected_domestic_value = amountTospend * selectedcurrencyPrice;
            // alert(selectedcurrencyPrice);
            //const Cryptovalue_inAmountSpend = $('#result').val();

            const total_crypto = (selected_domestic_value / selected_crypto_value);
            const selectedcoinTitle = $('.cointitle').text();
            const selectedcryptoType = $('.selectedCryptoTypeTitle').text();

            const FixedInrvalue_lowest = 100;

         //   const cryptovalue_in_FixedInrvalue_lowest = ((FixedInrvalue_lowest * selectedcurrencyPrice) / selected_crypto_value).toFixed(8);

            const FixedInrvalue_highest = 55000;
       //     const cryptovalue_in_FixedInrvalue_highest = ((FixedInrvalue_highest * selectedcurrencyPrice) / selected_crypto_value).toFixed(8);

             const errorDiv1 = $('#error-message-crypto');
                errorDiv1.empty();


                 if (total_crypto <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'BMK') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' BMK</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(total_crypto > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'BMK'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+' BMK</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {

                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For ETH*/

                if (total_crypto <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'ETH') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' ETH</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(total_crypto > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'ETH'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than'+cryptovalue_in_FixedInrvalue_highest+' ETH</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

                /* For BTC*/

                if (total_crypto <= cryptovalue_in_FixedInrvalue_lowest && selectedcryptoType == 'BTC') {
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount greater than '+cryptovalue_in_FixedInrvalue_lowest+' BTC</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else if(total_crypto > cryptovalue_in_FixedInrvalue_highest && selectedcryptoType == 'BTC'){
                    errorDiv1.append('<div class="text-danger fs-12 mt-1">Please enter an amount less than '+cryptovalue_in_FixedInrvalue_highest+'  BTC</div>');
                    $('#selectPaymntTobuy_crypto').prop('disabled', true);
                    errorDiv1.show();
                    return;
                }else {
                    $('#selectPaymntTobuy_crypto').prop('disabled', false);
                }

            errorDiv1.hide();


            $("#result").val(total_crypto.toFixed(8));

            //$("#result").val(total_crypto);



      }


      $('.wm-custom-modal-close').click(function(){ // this is required
         // alert();
          $(this).closest('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
          $('.custom-modal-search-input').val("");
          $('.custom-modal-search-input').trigger("keyup");

      })



    $(function() {
        $(".custom-modal-search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
                $(".search-fillter-div .custom-modal-drpdn").filter(function() {$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
         });
    });

    // function updateVal() {

    //     const amountInCurrency = $('.selectedglobalCurrency').val();
    //     const selectedcurrencyPrice = $('.selectedcurrencyPrice').val();
    //     const selected_domestic_value = amountTospend * selectedcurrencyPrice;

    // }

    </script>

<script>
$("#selectPaymntTobuy_crypto").click(function(){ // this function is used to selct payment method on next step so this is required
  //  alert();
  var count = parseInt(localStorage.getItem('timerValue'));

// if (count) {

//       triggerAlert('Your previous order is in progress!', 'error');

// }else{


     if( !$("#amount").val() || !$("#result").val()){
            if( !$("#amount").val()){
            $("#ocbs-guide-step1").css({'border' : '1px solid red','border-radius': '8px'});
            // $("#ocbs-guide-step1 span").text('Spend field cannot be blanked!');

            }
            if( !$("#result").val() ){
            $("#ocbs-guide-step2").css({'border' : '1px solid red','border-radius': '8px'});
            // $("#ocbs-guide-step2 span").text(' Recive field cannot be blanked!');
            }

   }else{

            $(".selection_forTrade").hide();

            const amountTospend = $('#amount').val();
            // const amountInCurrency = $('.selectedglobalCurrency').val();
            const selectedCrypto_type = $('.selectedCryptoTypeTitle').text();
            const Cryptovalue_inAmountSpend = $('#result').val();
            const currency_title =$('.bS-crypto-select-coin-title').html();
            // const selectedglobalCurrencyId = $('.selectedglobalCurrencyId').val();
            // $(".totalPayment").html(amountTospend+' '+amountInCurrency);
            //alert(amountTospend.toFixed(8));
             $(".totalPayment").html(amountTospend+' '+currency_title);

            $(".TotalCryptoval").html(Cryptovalue_inAmountSpend+' '+selectedCrypto_type);

            // $(".cryptoVAL").val(Cryptovalue_inAmountSpend);
            // $(".cryptoTYPE").val(selectedCrypto_type);

            // $(".domesticCurrencyVAL").val(amountTospend);
            // $(".domesticCurrencyTYPE").val(currency_title);

            // $(".domesticCurrencyId").val(selectedglobalCurrencyId);

            $(".payment-panel_section").show();

   }

//}

});

$(".backToselection_forTrade").click(function(){ // this function is used to come on first step from second step where we choose payment method this is back button so this is required.
    $(".selection_forTrade").show();
    $(".payment-panel_section").hide();
   // alert();

});


</script>
 <script>



$(".confirmPay_03062023").click(function(){ // this is old code where we were using hidden input fields

 //  alert();


    const token = $('#amount').val();

    const selectedCrypto_type = $(".pg-option.active input[name='cryptoTYPE']").val();
    const total_Cryptovalue = $(".pg-option.active input[name='cryptoVAL']").val();

    const domesticCurrencyVAL = $("input[name='domesticCurrencyVAL']").val();
    const domesticCurrencyTYPE = $("input[name='domesticCurrencyTYPE']").val();

    const payment_bank_id = $(".pg-option.active input[name='paymentMethodId']").val();
    const paymentMethodType = $(".pg-option.active input[name='paymentMethodType']").val();
    const paymentMethodId = $(".pg-option.active input[name='paymentListId']").val();
    const current_crypto_value = $('.selectedCoinPrice').val();
    //  const amountTospend = $('#amount').val();
    //  const amountInCurrency = $('.selectedglobalCurrency').val();
    //  const selectedCrypto_type = $('.selectedCrypto').val();
    //  const currency_title =$('.bS-crypto-select-coin-title').html();
    //  const Cryptovalue_inAmountSpend = $('#result').val();
    const domesticCurrencyId =  $("input[name='domesticCurrencyId']").val();

    const inr_value_in_usd = $('.selectedCurrencyRate').val();
    const current_crypto_in_inr = inr_value_in_usd * current_crypto_value;

//  console.log(inr_value_in_usd);
//  console.log(current_crypto_in_inr);
   // console.log(selectedCrypto_type+'/'+total_Cryptovalue+'/'+domesticCurrencyVAL+'/'+domesticCurrencyTYPE+'/'+payment_bank_id+'/'+paymentMethodId+'/'+paymentMethodType+'/'+selectedCrypto_type+'/'+current_crypto_value+'/'+domesticCurrencyTYPE+'/'+inr_value_in_usd+'/'+selectedCrypto_type+'/'+current_crypto_in_inr+'/'+domesticCurrencyId);
    if (parseInt(localStorage.getItem('timerValue'))  == 0) {


        if( ($(".pg-option.active input[name='cryptoTYPE']").length > 0) && ($(".pg-option.active input[name='cryptoVAL']").length > 0) && ($(".pg-option.active input[name='paymentMethodType']").length > 0) && ($(".pg-option.active input[name='paymentMethodId']").length > 0)) {

              $.ajax({

                    type: 'get',
                   url: '{{  url(app()->getLocale()."/express-buy-sell-trade") }}',


                    cache: false,
                    beforeSend: function(){ $(".confirmPay").html("<span class='spinner-border spinner-border-sm me-1'></span><span>Order Getting Confirmed. </span>");
                    $(".confirmPay").css("pointer-events","none"); },
                    data: {

                            '_token': "{{ csrf_token() }}",

                            'selectedCrypto_type' : selectedCrypto_type,
                            'total_Cryptovalue' : total_Cryptovalue,

                            'domesticCurrencyVAL' : domesticCurrencyVAL,
                            'domesticCurrencyTYPE' : domesticCurrencyTYPE,
                            'domesticCurrencyId' : domesticCurrencyId,

                            'payment_bank_id' : payment_bank_id,
                            'paymentMethodId' : paymentMethodId,
                            'paymentMethodType' : paymentMethodType,
                            'current_crypto_value' : current_crypto_value,
                            'inr_value_in_usd' : inr_value_in_usd,
                            'current_crypto_in_inr' : current_crypto_in_inr,

                    },
                    success: function (data) {
                      //console.log(data.order_data.selectedCrypto_type);

                    console.log(data);


                     // check order status
                        onlineOrderNotifyPopup(userID);




                     // end check order status

                    location.href = '{{  url(app()->getLocale()."/user/express-confirmed-order-buyer-info") }}';



                                //  if(data.order_data == '1'){
                                //       triggerAlert('You have canceled 3 order in today', 'error');
                                //  }else{

                                //  }

                    },
                    error: function(xhr, status, error) {

                                var erroJson = JSON.parse(xhr.responseText);

                              //  console.log(erroJson.error.paymentMethodId);
                             //  triggerAlert(erroJson.error.paymentMethodId, 'error');
                             triggerAlert('You have canceled 3 order in today', 'error');
                            }
                  });

        }else{
               triggerAlert('Payment method not selected!', 'error');
        }


    }else{
           triggerAlert('Previous Order pending!', 'error');
           const trader_id = '{{ Auth::user()->id }}' ;
             $.ajax({
                    type: 'post',
                    url: '{{ "/getOrderDetailbyId" }}',
                    data: {
                            '_token': "{{ csrf_token() }}",
                            'orderId' : '<?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;',
                   },
                    success: function (data) {
                    //   console.log(data.order_data.buyer_id);
                    //     console.log(data.order_data.seller_id);


                           setTimeout(function(){
                             if(data.order_data.buyer_id == trader_id){
                                                 window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}';
                                         }

                                         if(data.order_data.seller_id == trader_id){
                                                 window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}';
                                         }

                           }, 2500)

                    },
                    error: function(xhr, status, error) {

                                var erroJson = JSON.parse(xhr.responseText);
                                 triggerAlert('something went wrong!', 'error');

                            }
                  });



        }
});
</script>

<script>
        $( document ).ready(function() {


            const currency_type_preselected =$('.selectedcurrencyPrice').val();
            const currency_value_preselected = '$allcurrency';

            // Currency convert crypto to selected currency

            const selectedglobalCurrencyRate =$('.selectedCurrencyRate').val();
            $(".selectedglobalCurrencyRate").val(selectedglobalCurrencyRate);

             const selectedglobalCurrencyId =$('.selectedCurrencyId').val();
            $(".selectedglobalCurrencyId").val(selectedglobalCurrencyId);
            ////

            const a = <?php echo json_encode($allcurrency, JSON_HEX_TAG); ?>;
                a.forEach(element => {
                    const currency_name = element.name;
                    //console.log(currency_name);
                    const currencyVal_by_USD = element.currencyVal_by_USD;
                    //console.log(element.currencyVal_by_USD);

                });

            //if()
        //console.log(currency_type_preselected);

        $(".selectedglobalCurrency").val(currency_type_preselected);

    });

function SelectExpressTrade(id){
    // alert(id);
     var Id = $("#"+id);
      if(Id.hasClass('active') == false ){
               Id.parents().siblings().children('.nav-link').removeClass('active');
               Id.addClass('active');
               $("#selectPaymntTobuy_crypto").text(id.toUpperCase());

      }

 };
</script>

<script>

// new code deployed from here
function tradeAjax(clickedId, amount, coinValue, currencyType, coinType) {
  var clickedOn = clickedId;
  var amountCurrency = amount;
  var cryptoValue = coinValue;
  var selectedcurrency = currencyType;
  var selectedcrypto = coinType;

              return new Promise(function (resolve, reject) {
                $.ajax({
                  type: 'post',
                  url: '{{ url("/trade") }}',
                  data: {
                    '_token': "{{ csrf_token() }}",
                    'clickedOn': clickedOn,
                    'amountCurrency': amountCurrency,
                    'cryptoValue': cryptoValue,
                    'selectedcurrency': selectedcurrency,
                    'selectedcrypto': selectedcrypto,
                  },
                  success: function (data) {
                    if (data.clickedOn == 'amount' || data.clickedOn == 'result') {
                      if (data.clickedOn == 'amount') {
                        $('#result').val(data.netCoin);
                      }
                      if (data.clickedOn == 'result') {
                        $('#amount').val(data.netAmmount);
                      }
                    }
                    if (data.clickedOn == 'confirmPay') {
                      resolve(data);
                    }
                  },
                  error: function (xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    triggerAlert('something went wrong!', 'error');
                    reject(error);
                  },
                });
              });
};

function trade(id){
       var clickedId = id;
       if(clickedId == 'amount'){
            var amountCurrency =  $('#amount').val();
            var cryptoValue = null;
       }else{
             var amountCurrency =  null;
             var cryptoValue = $('#result').val();
        }

       var selectedcurrency = $('.cointitle').text();
       var selectedcrypto = $('.selectedCryptoTypeTitle').text();

        if((amountCurrency != null) || cryptoValue != null){
           //  console.log('in');

                 if(amountCurrency != null && amountCurrency.length > 2 ){
                      if(amountCurrency > 100){
                          tradeAjax(clickedId , amountCurrency, cryptoValue, selectedcurrency, selectedcrypto);

                      }else{
                            triggerAlert('amount must be more than 100', 'error');
                      }
                 }

                 if(cryptoValue != null){
                        tradeAjax(clickedId , amountCurrency, cryptoValue, selectedcurrency, selectedcrypto);
                  }

        }
    }

$(".confirmPay").click(function(){ // this is new function after removing hidden inputs


        //alert(this.id);
            var clickedId = this.id;
        // new variable  20052023

            var selectedcurrency = $('.cointitle').text();
            var selectedcrypto = $('.selectedCryptoTypeTitle').text();
            var domesticCurrencyVAL = $('#amount').val(); // done
            var total_Cryptovalue = null;
            var ordertype = $('ul.expressTrade .nav-link.active').val();

                // var domesticCurrencyId =  $("input[name='domesticCurrencyId']").val(); // can get in above function, this is currecny id in currency table in database
                // var inr_value_in_usd = $('.selectedCurrencyRate').val();  // can  get in above function, this is currency rate in 1 USD
                // var current_crypto_value = $('.selectedCoinPrice').val(); // can get in above function , this is selected coin price in 1 usd
                // var current_crypto_in_inr = inr_value_in_usd * current_crypto_value; // this is the multiplecation of above both to get result in USD

        tradeAjax(clickedId , domesticCurrencyVAL, total_Cryptovalue, selectedcurrency, selectedcrypto)
            .then(function (data) {
                    // Handle the response here
                    console.log(data.clickedOn+'/'+data.current_crypto_value+'/'+data.domesticCurrencyId+'/'+data.inr_value_in_usd+'/'+data.netAmmount+'/'+data.netCoin+'/'+data.selectedcoin+'/'+data.selectedcurrency);

                        const selectedCrypto_type = data.selectedcoin;
                        const total_Cryptovalue = data.netCoin;
                        const domesticCurrencyVAL = data.netAmmount;
                        const domesticCurrencyTYPE = data.selectedcurrency;
                        const domesticCurrencyId = data.domesticCurrencyId;
                        const current_crypto_value = data.current_crypto_value;
                        const inr_value_in_usd  = data.inr_value_in_usd;
                        const current_crypto_in_inr = inr_value_in_usd * current_crypto_value;

                        var payment_bank_id = $(".pg-option.active input[name='paymentMethodId']").val();
                        var paymentMethodType = $(".pg-option.active input[name='paymentMethodType']").val();
                        var paymentMethodId = $(".pg-option.active input[name='paymentListId']").val();

                    // here we ajax is implemented
                    if (parseInt(localStorage.getItem('timerValue'))  == 0) {

                                if( payment_bank_id.length > 0 && paymentMethodType.length > 0 && paymentMethodId.length > 0) {

                                                    $.ajax({

                                                        type: 'get',
                                                        url: '{{  url(app()->getLocale()."/express-buy-sell-trade") }}',
                                                        //    url: '{{  url("/express-buy-sell-trade") }}',
                                                        data: {

                                                                '_token': "{{ csrf_token() }}",

                                                                'payment_bank_id' : payment_bank_id,
                                                                'paymentMethodId' : paymentMethodId,
                                                                'paymentMethodType' : paymentMethodType,
                                                                'selectedCrypto_type' : selectedCrypto_type,
                                                                'total_Cryptovalue' : total_Cryptovalue,
                                                                'domesticCurrencyVAL' : domesticCurrencyVAL,
                                                                'domesticCurrencyTYPE' : domesticCurrencyTYPE,
                                                                'domesticCurrencyId' : domesticCurrencyId,
                                                                'current_crypto_value' : current_crypto_value,
                                                                'inr_value_in_usd' : inr_value_in_usd,
                                                                'current_crypto_in_inr' : current_crypto_in_inr,
                                                                'ordertype' : ordertype,

                                                    },
                                                    success: function (data) {
                                                                //console.log(data.order_data.selectedCrypto_type);
                                                                console.log(data);

                                                                // check order status
                                                                onlineOrderNotifyPopup(userID);
                                                                // end check order status
                                                                if(data.ordertype == 0){
                                                                    location.href = '{{  url(app()->getLocale()."/user/express-confirmed-order-buyer-info") }}';
                                                                }
                                                                if(data.ordertype == 1){
                                                                    location.href = '{{  url(app()->getLocale()."/user/express-confirmed-order-seller-info") }}';

                                                                }




                                                                //  if(data.order_data == '1'){
                                                                //       triggerAlert('You have canceled 3 order in today', 'error');
                                                                //  }else{

                                                                //  }

                                                    },
                                                    error: function(xhr, status, error) {
                                                              var erroJson = JSON.parse(xhr.responseText);
                                                             //  console.log(erroJson.error.paymentMethodId);
                                                             //  triggerAlert(erroJson.error.paymentMethodId, 'error');
                                                             triggerAlert('Somthing went wrong on express trade');
                                                            }
                                                    });

                                }else{
                                                   triggerAlert('Payment method not selected!', 'error');
                                }


                    }else{

                        triggerAlert('Previous Order pending!', 'error');
                        const trader_id = '{{ Auth::user()->id }}' ;
                        var orderId =    '<?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;';

                        console.log(orderId);

                        $.ajax({
                                type: 'post',
                                url: '{{ "/getOrderDetailbyId" }}',
                                data: {
                                        '_token': "{{ csrf_token() }}",
                                        'orderId' : orderId,
                               },
                                success: function (data) {
                                        //   console.log(data.order_data.buyer_id);
                                        //     console.log(data.order_data.seller_id);


                                        setTimeout(function(){
                                        if(data.order_data.buyer_id == trader_id){
                                        window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}';
                                        }

                                        if(data.order_data.seller_id == trader_id){
                                        window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}';
                                        }

                                        }, 2500)

                                },
                                error: function(xhr, status, error) {

                                            var erroJson = JSON.parse(xhr.responseText);
                                             triggerAlert('something went wrong!', 'error');

                                        }
                        });



                    }

            // end here ajax implemented
          })
            .catch(function (error) {
                // Handle errors here
                console.error(error);
            });

          // alert(data.clickedOn);
           // console.log(data);


    // end new variable  20052023


});

// end new code deployed from here
</script>
    </body>
</html>



<!--================open when fund  insufficient===================-->

                                         <!--    <div class="d-flex flex-column align-items-center">-->
                                         <!--  <img src="{{ asset('img/empty-wallet.svg') }}" class="empty-wallet">-->
                                         <!--  <h4 class="title text-center">You have insufficient assets to sell</h4>-->
                                         <!--  <div class="text text-center">Here are the hot cryptos</div>-->
                                         <!--  <div class="max-height-300px">-->
                                         <!--    <div class="custom-modal-drpdn-outer">-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--      <div id="choose-coin-BNB" class="custom-modal-drpdn">-->
                                         <!--        <div class="custom-modal-drpdn-inner">-->
                                         <!--          <div class="d-flex">-->
                                         <!--            <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="custom-modal-drpdn-img-1">-->
                                         <!--            <div class="custom-modal-drpdn-img">-->
                                         <!--              <div class="custom-modal-drpdn-title">BNB</div>-->
                                         <!--              <div class="custom-modal-drpdn-subtitle">BNB</div>-->
                                         <!--            </div>-->
                                         <!--          </div>-->
                                         <!--        </div>-->
                                         <!--        <div class="">-->
                                         <!--          <div class="custom-modal-drpdn-price">274.03350853 </div>-->
                                         <!--          <div class="custom-modal-drpdn-status">-3.64 %</div>-->
                                         <!--        </div>-->
                                         <!--      </div>-->
                                         <!--    </div>-->
                                         <!--  </div>-->
                                         <!--  <div class="w-100">-->
                                         <!--    <button type="button" type="primary" class="btn btn-yellow w-100 mt-5">Buy Crypto</button>-->
                                         <!--  </div>-->
                                         <!--</div>-->

                                         <!--================open when fund  insufficient===================-->
