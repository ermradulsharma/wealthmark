<div class="breadcrumbs shadow-sm position-relative" id="express-div-section">
    <div class="container">

        <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="p-5 pt-0"></div>
                <h3 class="fs-1 text-black">P2P Trading - Buy <span class="yellow-text"> USDT </span> with Your Preferred Payment Methods  </h3>
                <div class="p-2"></div>
                <p class="top-p fs-16 text-black">Buy and Sell Tether safely and easily on Wealthmark P2P. Find the best offer below to Buy and Sell USDT with your preferred payment methods today. </p>

            </div>
             <div class="col-lg-6 col-md-6">
                <div class="crypto-right-inner-main mx-auto max-width-450px m-0">

                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link active w-100 text-black" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="true">Buy</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link w-100 text-black" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Sell</button>
                        </li>
                        </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show min-height-450px" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                                <div class="crypto-right-inner flex-column">
          <div class="flex-1">
            <div class="field crypto-rght-first-box">

             <div class="bS-crypto-div">
                 <span></span>
                  <div class="bS-crypto-div-inner">
                    <div class="bS-crypto-div-title">Spend</div>
                    <div class="bS-crypto-div-inp-div lf-select_coin-to position-relative">
                        <div class="bS-crypto-div-inp-div-1">
                            <input type="number" placeholder="70.00 - 55000.00" class="bS-crypto-div-input" value="" id="amount">
                        </div>
                        <div class="bS-crypto-div-open-list" id="selected_crrency">
                            <div class="bS-crypto-select-coin-symbol">
                                <img src="https://wealthmark.io/img/inr-img.png" class="bS-crypto-select-coin">
                            </div>
                            <div class="bS-crypto-select-coin-title">INR</div>
                            <svg viewBox="0 0 24 24" fill="none" class="bS-crypto-div-open-list-svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="wm-dropdown-div  wm-dropdown-div-open hide">
                            <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                <div class="wm-input-prefix ">
                                  <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                                  </svg>
                                </div>
                                <input type="text" class="wm-dropdown-search-input" value="">
                                <div class="wm-input-suffix ">
                                  <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                                  </svg>
                                </div>
                              </div>
                            </div>
                            <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                              <li role="option" id="INR" title="INR" class="wm-dropdown-optn-item " onclick="express_coin(this.id)">
                                <div class="wm-dropdown-optn-item-inner selected">
                                  <div class="wm-dropdown-optn-item-div">
                                    <img class="wm-dropdown-optn-item-img" src="https://wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                    <div class="wm-dropdown-optn-item-txt">INR</div>
                                  </div>
                                </div>
                              </li>
                              <li role="option" id="USD" title="USD" class="wm-dropdown-optn-item " onclick="express_coin(this.id)">
                                <div class="wm-dropdown-optn-item-inner">
                                  <div class="wm-dropdown-optn-item-div">
                                    <img class="wm-dropdown-optn-item-img" src="https://wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                    <div class="wm-dropdown-optn-item-txt">USD</div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                    </div>
                  </div>
                </div>

            <div class="bS-crypto-div">
                  <span></span>
              <div class="bS-crypto-div-inner">
                <div class="bS-crypto-div-title">Receive</div>
                <div class="bS-crypto-div-inp-div lf-select_coin-to position-relative">
                  <div class="bS-crypto-div-inp-div-1">
                    <input type="number" placeholder="70.00 - 55000.00" class="bS-crypto-div-input" value="" id="result" oninput="count_currency(this.value)">
                     <input type="hidden" class="selectedCrypto" name="selectedCrypto" value="ETH">
                  </div>
                  <div class="bS-crypto-div-open-list" id="selected_crypto">
                       <input type="hidden" class="selectedCoinPrice" name="selectedCoinPrice" value="1919.36352580">

                    <img src="https://wealthmark.io/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png" class="bS-crypto-select-coin">
                    <div class="bS-crypto-select-coin-title">ETH</div>
                    <svg viewBox="0 0 24 24" fill="none" class="bS-crypto-div-open-list-svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>
                    </svg>
                  </div>
                  <div class="wm-dropdown-div  wm-dropdown-div-open hide">
                            <div class="p-3">
                              <div class=" wm-dropdown-srch-div">
                                <div class="wm-input-prefix ">
                                  <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                                  </svg>
                                </div>
                                <input type="text" class="wm-dropdown-search-input" value="">
                                <div class="wm-input-suffix ">
                                  <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                                  </svg>
                                </div>
                              </div>
                            </div>
                            <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                              <li role="option" id="BMK" title="BMK" class="wm-dropdown-optn-item " onclick="express_coin(this.id)">
                                <div class="wm-dropdown-optn-item-inner selected">
                                  <div class="wm-dropdown-optn-item-div">
                                    <img class="wm-dropdown-optn-item-img" src="https://wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                    <div class="wm-dropdown-optn-item-txt">BMK</div>
                                  </div>
                                </div>
                              </li>
                              <li role="option" id="ETH" title="ETH" class="wm-dropdown-optn-item " onclick="express_coin(this.id)">
                                <div class="wm-dropdown-optn-item-inner">
                                  <div class="wm-dropdown-optn-item-div">
                                    <img class="wm-dropdown-optn-item-img" src="https://wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">
                                    <div class="wm-dropdown-optn-item-txt">ETH</div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                </div>

              </div>
            </div>
          </div>
        </div>

             <div class="mt-5">


             <!--=================remove desabled class when coin selected =================================-->
                <button class="btn btn-yellow w-100 mt-4">  Buy  </button>

            </div>
 </div>
                        </div>
                        <div class="tab-pane fade min-height-450px" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">

                        </div>

                    </div>

            </div>
            </div>


        </div>

    </div>

  <div class="express-div-section-img-overlay"></div>
</div>





<script>
$('.bS-crypto-div-open-list').click(function(){
    $(this).siblings('.wm-dropdown-div').toggleClass('open-drop-doen')
});

function express_coin(id){
    const divid = id;
    var txt = $("#"+ id).children().children().children('.wm-dropdown-optn-item-txt').text();
    var img = $("#"+ id).children().children().children('.wm-dropdown-optn-item-img').attr('src');
//   ---------------append data--------------------------
    $("#"+ id).closest('.wm-dropdown-div').siblings('.bS-crypto-div-open-list').children('.bS-crypto-select-coin-title').html(txt);
    $("#"+ id).closest('.wm-dropdown-div').siblings('.bS-crypto-div-open-list').children().children('.bS-crypto-select-coin').attr('src' , img)
    $("#"+ id).children('.wm-dropdown-optn-item-inner').addClass('selected');
    $("#"+ id).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass('selected');
    $("#"+ id).closest('.wm-dropdown-div').removeClass('open-drop-doen');
}
</script>
