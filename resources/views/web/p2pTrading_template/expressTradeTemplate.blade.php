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
                                                              
                                                               <!--  <input type="hidden" class="selectedglobalCurrency" name="selectedglobalCurrency" value="">-->
                                                               <!--  <input type="hidden" class="selectedglobalCurrencyRate" name="selectedglobalCurrencyRate" value="">-->
                                                               <!--<input type="hidden" class="selectedglobalCurrencyId" name="selectedglobalCurrencyId" value="">-->
                                                                
                                                                
                                                                
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
                                                             
                                                               <!--<input type="hidden" class="selectedCoinPrice" name="selectedCoinPrice" value="{{ number_format( $ethereum->data->priceUsd , 8, '.', '') }}"> 250423-->
                                                               <!--<input type="hidden" class="selectedCoinPrice" name="selectedCoinPrice" value="{{ number_format( $bmk_price->per_coin , 8, '.', '') }}">-->
                                                               
                                                            <!--<img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}" class="bS-crypto-select-coin"> 250423-->
                                                            <img src="{{ asset('storage/app//12.png') }}" class="bS-crypto-select-coin">
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
                                         
                                           
                                     
                                                    <button class="btn btn-yellow w-100 mt-4 selectPaymntTobuy_crypto" id="selectPaymntTobuy_crypto" {{ (sizeof($userPaymentMethod) < 1 ) ? 'disabled' : ' ' }}> {{ (sizeof($userPaymentMethod) < 1 ) ? 'No payment method added yet!' : 'Buy' }}  </button>   
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