<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
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
      <section  class="breadcrumbs shadow-sm bg-dark-blue buy-coins-top">
         <div class="container mt-3">
            <div class="row">
               <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1 order-md-1 order-sm-2 col-xs-2" data-aos="fade-up" data-aos-delay="200">
                  <h5>Welcome to the <span class="yellow-text"> #CryptoLifestyle </span></h5>
                  <h3 class="top-heading"> <span class="yellow-text"> Buy, sell and swap </span> Bitcoin, Ethereum and other 50+ cryptocurrencies using <span class="yellow-text">multiple</span> payment methods</h3>
                  <p class="top-p">Easily trade and manage your cryptocurrency assets using our seamless buy/sell/swap process. Buy crypto with credit/debit card or bank transfer and receive crypto or fiat currency directly to your personal wallet.</p>
               </div>
               <div class="col-lg-6 col-md-6 order-1 order-lg-2 order-md-2 order-sm-1 col-xs-1 hero-img d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('img/graphic-1-01.svg') }}" class="img-fluid animated w-100 h-100" alt="buy-dogecoin image" title="buy-dogecoin banner">
               </div>
            </div>
         </div>
      </section>
      <section class="buy-coins-div bg-white">
         <div class="container">
            <div class="buy-coins-div-grid">
               <div class="left-section">
                  <div class="buy-crypto-mob bg-light pb-4 mb-4">
                     <h3 class="title">
                     Start buying DOGE</h2>
                     <div class="text">
                        If you’re ready to take the next step and want to buy some bitcoin, take the next step with Wealthmark!
                     </div>
                     <div>
                        <a href="javascript:void(0);" class="Coin-purchare-btn">
                           <div class="Coin-purchare-btn-txt">Buy Dogecoin</div>
                        </a>
                     </div>
                  </div>
                  <div class="sec-title text-left mb-3">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2"> How to buy Bitcoin & other crypto</h2>
                  </div>
                  <div class="text">Want to buy crypto but not sure how? No worries! wealthmark offers many options. You can easily buy Dogecoin (DOGE) with the lowest fees and highest security anywhere wealthmark is available. Learn how to buy Dogecoin (DOGE) with the wealthmark app now.</div>
                  <ul class="pymt-type-ul">
                     <li class="pymt-type">
                        <div class="pymt-type-div">
                           <div class="">
                              <div class="ul-numbring">1</div>
                           </div>
                           <div class="CP-active-div-">
                              <h3 class="title">Create a free account on the wealthmark website or the app.</h3>
                           </div>
                        </div>
                        <span class="">
                           <div class="text">Your wealthmark account acts as a gateway into buying crypto. But before you can buy Dogecoin (DOGE), you’ll need to open an account and verify your identification.</div>
                           <ul class="reg-via">
                              <li class="text">1). Register via the <a href="#" class="yellow-text">Wealthmark App</a>
                              </li>
                              <li class="text">2). Register via the website using your <a href="#" class="yellow-text">email</a>
                              </li>
                              <li class="text">3). Register via the website using your <a href="#" class="yellow-text">mobile number</a>
                              </li>
                           </ul>
                        </span>
                     </li>
                     <li class="pymt-type">
                        <div class="pymt-type-div">
                           <div class="">
                              <div class="ul-numbring">2</div>
                           </div>
                           <div class="CP-active-div-">
                              <h3 class="title">Choose how you want to buy the Dogecoin (DOGE) asset.</h3>
                           </div>
                        </div>
                        <div class="text">Click on the “Buy Crypto” link on the top left of the wealthmark website navigation, which will show the available options in your country.</div>
                        <div class="pymt-type-bg-div ps-0">
                           <i class="bi bi-slack icon-slack"></i>
                           <div class="CP-active-div-">
                              <div class="text">For better coin compatibility, you consider buying a stablecoin like USDT or BUSD first, and then use that coin to buy Dogecoin (DOGE).</div>
                           </div>
                        </div>
                        <div class="dashboard-tabpills">
                           <div class="dashboard-card balance-details mb-4">
                              <div class="dashboard-card-body">
                                 <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Credit Card and Debit Card</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Bank Deposit</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link " id="pills-margin-tab" data-bs-toggle="pill" data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin" aria-selected="true">P2P Trading</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-futures-tab" data-bs-toggle="pill" data-bs-target="#pills-futures" type="button" role="tab" aria-controls="pills-futures" aria-selected="false">Third Party Payment</button>
                                    </li>
                                 </ul>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                                       <ul class="pymt-type-ul">
                                          <li class="pymt-type">
                                             <h3 class="title">A. Credit Card and Debit Card</h3>
                                             <div class="text">If you are a new user, this is the easiest option to purchase Dogecoin (DOGE). wealthmark supports both Visa and MasterCard.</div>
                                             <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                   <div class="card">
                                                      <div class="card-block shadow border p-1">
                                                       <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="#" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                                                         <div class="mb-0 p-3 pt-0 video-title">How to Buy Crypto with Credit/Debit Card in app</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                   <div class="card">
                                                      <div class="card-block shadow border p-1">
                                                         <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="#" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                                                         <div class="mb-0 p-3 pt-0 video-title">How to Buy Crypto with Credit/Debit Card in website</div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                                       <ul class="pymt-type-ul">
                                          <li class="pymt-type">
                                             <h3 class="title">B. Bank Deposit</h3>
                                             <div class="text">Transfer fiat currency from your bank account to wealthmark, and then use the amount to buy Dogecoin (DOGE).</div>
                                             <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                   <div class="card">
                                                      <div class="card-block shadow border p-1">
                                                      <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="#" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                                                         <div class="mb-0 p-3 pt-0 video-title">How to Deposit USD via SWIFT</div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                       </ul>
                                    </div>
                                    <div class="tab-pane fade " id="pills-margin" role="tabpanel" aria-labelledby="pills-margin-tab">
                                       <ul class="pymt-type-ul">
                                          <li class="pymt-type">
                                             <h3 class="title">C. P2P Trading</h3>
                                             <div class="text">Buy Dogecoin (DOGE) directly from other users with wealthmark’s peer-to-peer service.</div>
                                             <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                   <div class="card">
                                                      <div class="card-block shadow border p-1">
                                                       <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="#" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                                                         <div class="mb-0 p-3 pt-0 video-title">How to Buy Cryptocurrency on wealthmark P2P (web)?</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                   <div class="card">
                                                      <div class="card-block shadow border p-1">
                                                       <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="#" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                                                         <div class="mb-0 p-3 pt-0 video-title">How to Buy Cryptocurrency on wealthmark P2P (App)?</div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-futures" role="tabpanel" aria-labelledby="pills-futures-tab">
                                       <ul class="pymt-type-ul">
                                          <li class="pymt-type">
                                             <h3 class="title">D. Third Party Payment</h3>
                                             <div class="text">There are multiple options for third-party payment channels. Please, visit the <a href="#" class="yellow-text">wealthmark FAQ</a> to check which ones are available in your region. </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="pymt-type">
                        <div class="pymt-type-div">
                           <div class="">
                              <div class="ul-numbring">3</div>
                           </div>
                           <div class="CP-active-div-">
                              <h3 class="title">Create a free account on the wealthmark website or the app.</h3>
                           </div>
                        </div>
                        <span class="">
                           <div class="text">You have 1 minute to confirm your order at the current price. After 1 minute, your order will be recalculated based on the current market price. You can click Refresh to see the new order amount.</div>
                        </span>
                     </li>
                     <li class="pymt-type">
                        <div class="pymt-type-div">
                           <div class="">
                              <div class="ul-numbring">4</div>
                           </div>
                           <div class="CP-active-div-">
                              <h3 class="title">Store or use your Dogecoin (DOGE) in wealthmark.</h3>
                           </div>
                        </div>
                        <span class="">
                           <div class="text">Now that you bought your crypto, you can store it in your personal crypto wallet or simply hold it in your wealthmark account. You can also trade for other crypto or stake it on
                              <a href="#" class="yellow-text">wealthmark Earn</a> for passive income. If you would like to trade your Dogecoin (DOGE) to a decentralized exchange you may want to check
                              <a href="#" class="yellow-text">Trust Wallet</a> which supports millions of assets and blockchains.
                           </div>
                           <div class="pymt-type-bg-div ps-0">
                              <i class="bi bi-slack icon-slack"></i>
                              <div class="CP-active-div-">
                                 <div class="text">Want to keep tabs on coin prices? Visit our <a href="#" class="yellow-text">coin price directory</a> to add to bookmark </div>
                              </div>
                           </div>
                        </span>
                     </li>
                  </ul>
               </div>
               <div class="right-section">
                  <div class="Coin-purchare-active">
                     <div class="CP-active-div">
                        <img src="{{ asset('img/doge-coin.png') }}" class="CP-active-img" title="DOGE price" alt="DOGE price">
                        <div class="CP-active-div-">
                           <h4 class="CP-active--title">
                              <a href="#">DOGE price</a>
                           </h4>
                        </div>
                     </div>
                     <div class="CP-price-div">
                        <h5 class="CP-price-crnt">$ 0.083142 USD</h5>
                        <h3 class="CP-price-status">-7.05%</h3>
                        <div class="CP-price-duration">(24H)</div>
                     </div>
                     <div class="CP-dex-div">
                        <div class="text">The live price of Dogecoin is $ 0.083142 per (DOGE / USD) today with a current market cap of $ 11.03B USD. 24-hour trading volume is $ 1.32B USD. BTC to USD price is updated in real-time. Bitcoin is -7.05% in the last 24 hours. It has a circulating supply of 132.67B.</div>
                     </div>
                     <a href="javascript:void(0);" class="Coin-purchare-btn">
                        <div class="Coin-purchare-btn-txt">Buy Dogecoin</div>
                     </a>
                  </div>
                  <div class="Coin-sgst-list">
                     <a  href="#" class="Coin-sgst-list-link">
                        <img src="{{ asset('img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}" class="Coin-sgst-img" title="Currency Icons" alt="Currency Icons">
                        <h3 class="Coin-sgst-title">ethereum (ETH)</h3>
                        <svg viewBox="0 0 24 24" fill="none" class="Coin-sgst-icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="Coin-sgst-list">
                     <a href="#" class="Coin-sgst-list-link">
                        <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="Coin-sgst-img" title="Currency Icons" alt="Currency Icons">
                        <h3 class="Coin-sgst-title">Wealthmark</h3>
                        <svg viewBox="0 0 24 24" fill="none" class="Coin-sgst-icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="Coin-sgst-list">
                     <a href="#" class="Coin-sgst-list-link">
                        <img src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" class="Coin-sgst-img" title="Currency Icons" alt="Currency Icons">
                        <h3 class="Coin-sgst-title">Bitcoin (BTC)</h3>
                        <svg viewBox="0 0 24 24" fill="none" class="Coin-sgst-icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="Coin-sgst-list">
                     <a href="#" class="Coin-sgst-list-link">
                        <img src="{{ asset('img/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" class="Coin-sgst-img" title="Currency Icons" alt="Currency Icons">
                        <h3 class="Coin-sgst-title">BUSD</h3>
                        <svg viewBox="0 0 24 24" fill="none" class="Coin-sgst-icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="Coin-sgst-list">
                     <a href="#" class="Coin-sgst-list-link">
                        <img src="{{ asset('img/4766a9cc-8545-4c2b-bfa4-cad2be91c135.png') }}" class="Coin-sgst-img" title="Currency Icons" alt="Currency Icons">
                        <h3 class="Coin-sgst-title">Ripple (XRP)</h3>
                        <svg viewBox="0 0 24 24" fill="none" class="Coin-sgst-icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="Coin-sgst-list">
                     <a href="#" class="Coin-sgst-list-link">
                        <img src="{{ asset('img/359ca651-a084-4010-92d8-4eaff96e6384.png') }}" class="Coin-sgst-img" title="Currency Icons" alt="Currency Icons">
                        <h3 class="Coin-sgst-title">Litecoin (LTC)</h3>
                        <svg viewBox="0 0 24 24" fill="none" class="Coin-sgst-icn">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
