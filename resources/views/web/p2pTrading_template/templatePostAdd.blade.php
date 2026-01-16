
<div class="col-md-12 p2p-post-ads-tab">
<ul class="custom-tab trade mb-4" id="pills-tab" role="tablist">
                        <li>
                           <a class="postTypeOrder active" id="buy" value="0"  role="tab" >I want to Buy</a>
                        </li>
                        <li>
                           <a class="postTypeOrder" id="sell" value="1" role="tab" >I want to Sell</a>
                        </li>
</ul>



<div class="py-3 px-3">
       <form id="post-ads-form">
        <div class="row align-items-center" id="first-div-filter">
            <div class="col-lg-4 col-md-5 col-sm-5">
            <label class="d-block mb-1 text-muted">Assets </label>
            <div class="label position-relative">
               <div class="lf-select_coin-to bg-light-blue">
                     <div class="coin-swap-from m-0 border-0">
                        <input type="text" value="31" class="lf-select-coin-to-input">
                        <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                     </div>
                     <div class="lf-select-coin-to-active-div" id="selected_crypto">
                        <div class="wm-dropdown-optn-item-div">
                           <img class="wm-dropdown-optn-item-img" src="{{ asset('storage/app/bmklogo/12.png') }}">
                           <div class="wm-dropdown-optn-item-txt default-selected-crypto-name">BMK</div>
                            <input type="hidden" class="selectedCrypto" name="selectedCrypto" value="BMK">
                             <input type="hidden" class="selectedCoinPrice" name="selectedCoinPrice" value="{{ number_format( $bmk_price->per_coin , 8, '.', '') }}">

                        </div>
                     </div>
                     <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                        <div class="p-3">
                            <div class=" wm-dropdown-srch-div">
                                <i class="bi bi-search wm-dropdown-search-icn"></i>
                                <input type="text" class="wm-dropdown-search-input" placeholder="Enter coin name" value="">
                                <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                            </div>
                        </div>

                  <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                    <li role="option" id="1" title="1" class="wm-dropdown-optn-item ">
                        <div class="wm-dropdown-optn-item-inner selected" id="choose-coin-BMK" onClick="select_crypto(this.id)">
                            <div class="wm-dropdown-optn-item-div">
                                <img class="wm-dropdown-optn-item-img" src="{{ asset('storage/app/bmklogo/12.png') }}">
                                <div class="wm-dropdown-optn-item-txt">BMK</div>
                                <input type="hidden"  id="choose-coin-BMK_Currentprice" name="choose-coin-BMK_Currentprice" value="{{number_format( $bmk_price->per_coin , 8, '.', '')}}">
                            </div>
                        </div>
                    </li>
                    <li role="option" id="2" title="2" class="wm-dropdown-optn-item ">
                        <div class="wm-dropdown-optn-item-inner"  id="choose-coin-BTC" onClick="select_crypto(this.id)">
                            <div class="wm-dropdown-optn-item-div">
                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                <div class="wm-dropdown-optn-item-txt">BTC</div>
                                 <input type="hidden"id="choose-coin-BTC_Currentprice" name="choose-coin-BTC_Currentprice"  value=" {{ number_format( $bitcoin->data->priceUsd , 8, '.', '') }}" >
                            </div>
                        </div>
                    </li>
                    <li role="option" id="3" title="3" class="wm-dropdown-optn-item ">
                        <div class="wm-dropdown-optn-item-inner"  id="choose-coin-ETH" onClick="select_crypto(this.id)">
                            <div class="wm-dropdown-optn-item-div">
                                <img class="wm-dropdown-optn-item-img" src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}">
                                <div class="wm-dropdown-optn-item-txt">ETH</div>
                                <input type="hidden"  id="choose-coin-ETH_Currentprice" name="choose-coin-ETH_Currentprice" value=" {{ number_format( $ethereum->data->priceUsd , 8, '.', '') }}">
                            </div>
                      </div>
                    </li>

                   </ul>
                     </div>
                  </div>
            </div>
         </div>
            <div class="col-md-1 col-sm-2 text-center">
            <label class="d-block mb-1">&nbsp; </label>
            <span class="arrow">
                    <i class="bi bi-arrow-right d-none d-sm-inline-block"></i>
                    <i class="bi bi-arrow-down  d-sm-none"></i>
            </span>
         </div>
            <div class="col-lg-4 col-md-5 col-sm-5">
            <label class="d-block mb-1 text-muted">With Fiat </label>
            <div class="label position-relative">
              <div class="lf-select_coin-to bg-light-blue">
                     <div class="coin-swap-from m-0 border-0">
                        <input type="text" value="31" class="lf-select-coin-to-input">
                        <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                     </div>
                     <div class="lf-select-coin-to-active-div" id="selected_crrency">
                        <div class="wm-dropdown-optn-item-div curreny-1">

                                   <span class="wm-dropdown-optn-item-symbol">{{$allcurrency[0]->symbol}} </span>
                                   <div class="wm-dropdown-optn-item-txt default-currency-name cointitle">{{$allcurrency[0]->name}}</div>
                                    <input type="hidden" class="selectedglobalCurrency" name="selectedglobalCurrency" value="{{ number_format( $allcurrency[0]->currencyVal_by_USD , 8, '.', '') }}">
                                    <input type="hidden" class="selectedglobalCurrencyRate" name="selectedglobalCurrencyRate" value="{{ number_format( $allcurrency[0]->currencyVal_by_INR , 8, '.', '') }}">
                                    <input type="hidden" class="selectedglobalCurrencyId" name="selectedglobalCurrencyId" value="{{ $allcurrency[0]->id }}">
                                    <input type="hidden" class="selectedglobalCurrencysymbol" name="selectedglobalCurrencysymbol" value="{{$allcurrency[0]->symbol}}">
                                    <input type="hidden" class="selectedglobalCurrencyname" name="selectedglobalCurrencyname" value="{{$allcurrency[0]->name}}">



                        </div>
                     </div>
                     <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                        <div class="p-3">
                            <div class=" wm-dropdown-srch-div">
                                <i class="bi bi-search wm-dropdown-search-icn"></i>
                                <input type="text" class="wm-dropdown-search-input" placeholder="Enter currency name" value="">
                                <input type="hidden" class="selectedglobalCurrency" name="selectedglobalCurrency" value="">
                                <input type="hidden" class="selectedglobalCurrencyRate" name="selectedglobalCurrencyRate" value="">
                                <input type="hidden" class="selectedglobalCurrencysymbol" name="selectedglobalCurrencysymbol" value="">
                                <input type="hidden" class="selectedglobalCurrencyname" name="selectedglobalCurrencyname" value="">
                                <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                            </div>
                        </div>

                        <ul role="listbox" class="wm-dropdown-list curreny-2 currency_filter wm-dropdown-list-css" >
                 @foreach ($allcurrency as $currency)
                    <li role="option" id="currency-{{ $currency->id }}" title="{{ $currency->id }}" class="wm-dropdown-optn-item " onClick="select_currency(this.id)"  style="display: list-item;">
                        <div class="wm-dropdown-optn-item-inner">

                            <div class="wm-dropdown-optn-item-div">
                                <span class="wm-dropdown-optn-item-symbol">
                                    {{ $currency->symbol }}
                                </span>

                                <div class="wm-dropdown-optn-item-txt cointitle">{{ $currency->name }}</div>
                                    <input type="hidden" class="selectedcurrencyPrice" name="currency-{{ $currency->id.'_price' }}" value="{{ number_format( $currency->currencyVal_by_USD , 8, '.', '') }}">
                                    <input type="hidden" class="selectedCurrencyRate" name="currency-{{ $currency->id.'_price' }}" value="{{ number_format( $currency->currencyVal_by_INR , 8, '.', '') }}">
                                    <input type="hidden" class="selectedCurrencyId" name="currency-{{  $currency->id.'_price' }}" value="{{ $currency->id }}">
                                     <input type="hidden" class="selectedCurrencySymbol" name="currency-{{  $currency->symbol.'_price' }}" value="{{ $currency->symbol }}">
                                     <input type="hidden" class="selectedCurrencyname" name="currency-{{  $currency->name.'_price' }}" value="{{ $currency->name }}">
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
                     </div>
                  </div>

             </div>
         </div>
            <div class="col-md-12 my-3">
                <div class="h-divider">
            </div>
         </div>
        </div>


        <div id="step-div-click">
        <div id="first-section" class="bg-light-blue p-3 post-add-selection">
            <div class="bg-white p-4">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table tbl-borderless">
                                <tr>
                                    <td>
                                        <h3>Your Price</h3>
                                    </td>
                                    <td>
                                        <h3>Highest Order Price</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="current-coin-price" id="order-price">
                                            <small class="wm-dropdown-optn-item-symbol item-symbol me-2">₹</small>
                                            <span>00.00</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="current-coin-price" id="highest-order-price">
                                            <input type="hidden" name="highest-order-price" value="">
                                            <small class="wm-dropdown-optn-item-symbol item-symbol me-2">₹</small>
                                            <span>00.00</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h3>Your Price</h3>
                                    </td>
                                </tr>
                                <tr class="select-price-tab">
                                    <td>

                                        <div class="">
                                            <input type="radio" id="price_type_0" name="price_type" value="0" class="me-1" checked>
                                            <label for="price_type_0" class="text-muted cursor-pointer fs-16">Fixed</label>
                                        </div>


                                    </td>
                                    <td>
                                        <div class="">
                                            <input type="radio" id="price_type_1" name="price_type" value="1" class="me-1">
                                            <label for="price_type_1" class="text-muted cursor-pointer fs-16">Floating</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table tbl-borderless">
                                <tr>
                                    <td class="selected-coin-type">
                                        <h3>Fixed Price Margin</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="selected-coin-type">

                                            <div class="coin-fixed-value">
                                                <span class="indicator minus">
                                                    <i class="bi bi-dash"></i>
                                                </span>
                                                <span class="crrent-price min-width-150px" id="crrent_price">
                                                    <input type="number" id="fmyInput" class="form-control border-0" value="0">

                                                </span>
                                                <span class="indicator plus">
                                                    <i class="bi bi-plus"></i>
                                                </span>
                                            </div>
                                            <div class="text-muted fs-14 d-flex align-items-center my-3 price-formula">
                                                <span class="border-bottom pb-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Floating Price  = Market Price x Exchange rate x Price margin">Price formula </span>
                                                <span class="mx-2">82.2 * 100.00% </span>
                                                <span class="me-2">≈</span>
                                                <span class="fw-bold text-black mx-1">82.07</span>
                                                <span>INR</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class=" col-md-12 my-3">
                        <div class="h-divider"></div>
                    </div>

                    <div class="col-md-12 flex-div selected-coin-type">
                        <div class="max-width-full">
                            <a href="javascript:void(0)" class="btn-yellow px-5 py-2 fs-16" id="first_step" onClick="Steps(this.id)"> Next </a>

                        </div>
                        <div class="max-width-full text-right">
                            <a href="{{ url(app()->getLocale().'/support-center') }}" class="yellow-text fs-14">
                                <svg viewBox="0 0 24 24" fill="none" class="max-width-20px">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                </svg>
                                <span>Help & Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------------------------------------------------------------------------->
        <div id="second-section" class="bg-light-blue p-3 post-add-selection hide">
            <div class="bg-white p-4">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table tbl-borderless mb-0">
                                <tr class="available_coins">
                                    <td>
                                        <h3 class="mb-2">Available Coins in your wallet</h3>
                                        <div class="p2p-search-box height-48px bg-light-blue">
                                            <input type="number" disabled value="{{ ($totalAvailableCoinsInMarketWallet) ?  $totalAvailableCoinsInMarketWallet : 0}}" name="available_coins" id="available_coins" class="border-0 bg-transparent">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="max-width-750px">
                                            <h3 class="mb-2">No. of Coins</h3>
                                            <div class="p2p-search-box height-48px bg-light-blue" id="no_of_coin_coin_box">
                                                <input type="number" value="" placeholder="Enter No Of Coins" autocomplete="off" name="transAmount" onInput="checkLimit()" id="amount" onKeyup="count_crypto(this.value)" class="border-0 bg-transparent">
                                                <div class="bn-input-suffix">
                                                    <div class="d-flex align-items-center">
                                                        <div type="text" class="p2p-search-box-text total-trading-currency-type">INR</div>
                                                        <input type="hidden" class="total-trading-currency-type-value" name="total-trading-currency-type-value" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fs-14 text-muted flex-div justify-content-between">
                                                <span id="no_of_coin_error" class="text-red"></span>
                                                <div>
                                                <span class="me-1 selected-golobal-currency-type-value">
                                                    00.00
                                                </span>
                                                <span class="selected-golobal-currency-type">INR</span>
                                                <input type="hidden" class="selected-golobal-currency-type-rate" name="selected-golobal-currency-type-rate" value="">
                                            </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex-div w-100 justify-content-between">
                                            <div class="trade_type_heading">
                                                <h3 class="mb-2">Buying Limit </h3>
                                                <div class="p2p-search-box height-48px bg-light-blue" id="lowerlimit_box">
                                                    <input type="number" id="lowerlimit" onInput="checkLimit()" value="" placeholder="Min." autocomplete="off" name="transAmount" class="border-0 bg-transparent">
                                                    <div class="bn-input-suffix">
                                                        <div class="d-flex align-items-center">
                                                            <div type="text" class="p2p-search-box-text lower-order-limit">BMK</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fs-14 text-muted flex-div justify-content-between">
                                                    <span id="lowerlimit_error" class="text-red"></span>
                                                </div>
                                            </div>
                                            <span class="mx-3">
                                                <h3 class="mb-0">&nbsp;</h3>
                                                <span class="text-muted">≈</span>
                                            </span>
                                            <div>
                                                <h3 class="mb-2">&nbsp; </h3>
                                                <div class="p2p-search-box height-48px bg-light-blue" id="higherlimit_box">
                                                    <input type="number" id="higherlimit" onInput="checkLimit()" value="" placeholder="Max." autocomplete="off" name="transAmount" class="border-0 bg-transparent">
                                                    <div class="bn-input-suffix">
                                                        <div class="d-flex align-items-center">
                                                            <div type="text" class="p2p-search-box-text higher-order-limit">BMK</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fs-14 text-muted flex-div justify-content-between">
                                                    <span id="higherlimit_error" class="text-red"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light-blue p-2">
                            <div class="table-responsive">
                                <table class="table td-p tbl-borderless bg-white mb-0">
                                    <tr>
                                        <td>
                                            <h3 class="mb-2">Payment Methods </h3>

                                        </td>
                                        <!--- Add Payment Method for Add/Edit Post ads ---->
                                        <td>
                                            <span class="rounded border-yellow p-1 cursor-pointer  me-2" data-target-modal="payMethod">
                                                <span class="fs-12 line-height-10 "><i class="bi bi-plus"></i></span>
                                                <span class="fs-14">Add</span>
                                            </span>
                                            <span class="fs-12 text-muted">(Select up to 3 methods)</span>
                                            <div class="fs-14 text-muted flex-div justify-content-between">
                                                <span id="selected-payment-option_error" class="text-red"> </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="selected-payment-option-hide" style="display:none">
                                        <td colspan="2">
                                            <div class="d-flex align-items-center flex-wrap w-100" id="selected-payment-option">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 class="mb-2">Nick Name</h3>

                                            <div class="d-flex align-items-center flex-wrap" id="selected-payment-option">

                                                @if(Auth::user()->nick_name === NULL)
                                                <span class="bi bi-check-circle-fill text-green me-1 fs-12"></span>
                                                <span class="text me-2">Anonymous-User-0ecdc</span>
                                                <a href="javascript:void(0)" id="open_edit_modal" onClick="open_modal_div(this.id)"><i class="bi bi-plus"></i></a>
                                                <input type="hidden" id="nicknameval" value="{{ (Auth::user()->nick_name) ? Auth::user()->nick_name : '0'}}">
                                                @else
                                                <span class="bi bi-check-circle-fill text-green me-1 fs-12"></span>
                                                <span class="text-theme-yellow text me-2">{{ Auth::user()->nick_name }}</span>
                                                <a href="javascript:void(0)" id="open_edit_modal" onClick="open_modal_div(this.id)"><i class="bi bi-pencil-square"></i></a>
                                                <input type="hidden" id="nicknameval" value="0">
                                                @endif
                                                <span class="nickname_msg alert " role="alert"></span>
                                                <div class="fs-14 text-muted flex-div justify-content-between">
                                                    <span id="nikname_error" class="text-red"> </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <h3 class="mb-2">Payment Time</h3>
                                                <div class="position-relative max-width-250px">
                                                    <select id="selected-order-time" class="form-control bg-light-blue border-0" style="appearance:auto">
                                                        <option value="">Select Max Order Time</option>
                                                        <option value="15_Minutes" selected>15 Minutes</option>
                                                        <option value="20_Minutes">20 Minutes</option>
                                                        <option value="25_Minutes">25 Minutes</option>
                                                        <option value="30_Minutes">30 Minutes</option>
                                                    </select>
                                                </div>
                                                <div class="fs-14 text-muted flex-div justify-content-between">
                                                    <span id="selected-order-time_error" class="text-red"> </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="text-muted fs-14 d-flex align-items-center my-3 estimated-fees">
                        <span class="border-bottom pb-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Floating Price  = Market Price x Exchange rate x Price margin">Estimated Fee</span>
                        <span class="mx-2 estimatedfee">{{ env('ESTIMATEDFEE') }}</span>
                        <span class="estimatedfeetype">{{ env('CURRENCY_NAME') }}</span>
                        <input type="hidden" class="estimatedfeeID" name="estimatedfeeID" value="{{ env('ESTIMATEDFEE') }}">
                    </div>
                    <div class="my-3">
                        <div class="h-divider"></div>
                    </div>
                    <div class="flex-div selected-coin-type">
                        <div class="max-width-full d-flex">

                            <a href="javascript:void(0)" class="btn-default d-inline-block px-5 py-2 fs-16 me-2" id="div-2" onClick="backStep(this.id)"> Back </a>
                            <a href="javascript:void(0)" class="btn-yellow px-5 py-2 fs-16" id="second_step" onClick="Steps(this.id)"> Next </a>
                        </div>
                        <div class="max-width-full text-right">
                            <a href="{{ url(app()->getLocale().'/support-center') }}" class="yellow-text fs-14">
                                <svg viewBox="0 0 24 24" fill="none" class="max-width-20px">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                </svg>
                                <span>Help & Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="third-section" class="bg-light-blue p-3 post-add-selection hide">
            <div class="bg-white p-4">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="table-responsive scrollbar-style-h">
                            <table class="table tbl-borderless mb-0">
                                <tr>
                                    <td>
                                        <h3 class="mb-2">Auto Reply (Optional)</h3>
                                        <textarea id="autoreplay" class="scrollbar-style form-control bg-light-blue" rows="3">Welcome to WealthMark trader community!

Please follow the trading rules for smooth trading and if you want to know more please read terms and condition</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="mb-2">Terms and conditions :: (Before Placing Order Read carefully )</h3>

                                        <div  id="remarks" class=" bg-light-blue editor" >
                                              <p>  ✅ Your account name should match with your Wealthmark account name  </p>
                                               <p> ✅ Pay from your Real account only.  </p>
                                              <p>  🚫 Third party Payment not accepted.</p>
<p>🚫 Send payment only from legal source. </p>
<p>🚫 Never write anything related to crypto in payment remarks.</p>
<p>✅  Always leave positive feedback after receiving crypto.  </p>
<p>✅ After payment please send Proof of Payment, Screenshot or Transaction Receipt.  </p>

<div class="fs-14">Disclaimer :- </div>
<p> 👉🏻Third party payment is crime if you do it we can take legal action against you and your wealthmark account may freeze or permanently closed.</p>
<p> 👉🏻If we find any suspicious thing we can ask documents from you.</p>
<p> 👉🏻Doing fraudulent transactions is punishable under ipc 419 and 420 of cyber crime.</p>

<p>Thank You for Trading!</p>
</div>                                  </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light-blue p-2">
                            <div class="table-responsive">
                                <table class="table td-p tbl-borderless bg-white mb-0">
                                    <tr>
                                        <td>
                                            <h3 class-"mb-2">Counterparty Conditions</h3>
                                            <div class="d-flex c-conditions align-items-center p-2">
                                                <input type="checkbox" id="kycCheck" class="me-2" name="kycCheck" checked disabled>
                                                <label for="kycCheck" class="fs-14 text-muted cursor-pointer">Completed&nbsp;KYC</label>
                                            </div>
                                            <div class="d-flex c-conditions align-items-center p-2">
                                                <input type="checkbox" id="regDaysCheck" class="me-2" name="regDaysCheck" checked>
                                                <label for="regDaysCheck" class="fs-14 text-muted cursor-pointer">Registered</label>
                                                <span class="fs-16 mx-1 border-bottom min-width-100px d-inline-block text-center">
                                                    <input type="number" value="1" autocomplete="off" name="registerd_account_day" class="border-0 bg-transparent text-center"></span></span>
                                                <span class="fs-14 text-muted">days(s)&nbsp;ago</span>
                                            </div>
                                            <div class="d-flex c-conditions align-items-center p-2">
                                                <input type="checkbox" id="holding_coinCheck" class="me-2" name="holding_coinCheck" checked>
                                                <label for="holding_coinCheck" class="fs-14 text-muted cursor-pointer">Holding&nbsp;more&nbsp;than</label>
                                                <span class="fs-16 mx-1 border-bottom min-width-100px d-inline-block text-center">
                                                    <input type="number" value="" autocomplete="off" name="holding_coin" onChange="checkHoldingCoins()" class="border-0 bg-transparent text-center"></span>
                                                <span class="fs-14 text-muted holding-more-than-crypto-name">BMK</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 class="mb-2">Status</h3>
                                            <div class="flex-div justify-content-between select-price-tab pt-0" id="ads-status">
                                                <div class="">
                                                    <input type="radio" id="post_status_1" name="post_status" value="1" class="me-1" checked>
                                                    <label for="post_status_1" class="text-muted fs-16">Online right now</label>
                                                </div>
                                                <div class="">
                                                    <input type="radio" id="post_status_0" name="post_status" value="0" class="me-1">
                                                    <label for="post_status_0" class="text-muted fs-16">Offline, manually later </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="my-3">
                        <div class="h-divider"></div>
                    </div>
                    <div class="flex-div selected-coin-type">
                        <div class="max-width-full d-flex">
                            <a href="javascript:void(0)" class="btn-default d-inline-block px-5 py-2 fs-16 me-2" id="div-3" onClick="backStep(this.id)"> Back </a>
                            <a href="javascript:void(0)" class="btn-yellow px-5 py-2 fs-16" id="final_step" onclick="getAllValues()" data-target-modal="confirm_post_modal"> Post </a>

                        </div>
                        <div class="max-width-full text-right">
                            <a href="{{ url(app()->getLocale().'/support-center') }}" class="yellow-text fs-14">
                                <svg viewBox="0 0 24 24" fill="none" class="max-width-20px">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                </svg>
                                <span>Help & Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>



       </form>

   </div>   </div>
