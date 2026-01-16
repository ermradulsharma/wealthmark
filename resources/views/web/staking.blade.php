  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
  @include('template.web_css')
      
  
 <style>

   
 </style>
  
  
   </head>
   
 <body class="bg-white">
        @include('template.web_menu')
    
    <section  class="breadcrumbs shadow-sm simple-earn-top pt-5 pb-5">
          <div class="container">
              <div class="row justify-content-center align-items-center">
                 <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center align-items-center  order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                 <h3 class="top-heading mb-0 text-left">Wealthmark DeFi Staking</h3>
                 <p class="top-p text-left">Dedicated to increasing user staking income </p>
               
                 </div>
                 
                 <!--------------------------open this div before login-------------------------------------->
                 <!--<div class="col-lg-6 col-md-6 col-sm-12  order-1 order-lg-2 hero-img mt-3 mb-5" data-aos="zoom-in" data-aos-delay="200">-->
                 <!--  <div class="asset-overview login-box-main">-->
                 <!--         <div class="login-box-bg">-->
                 <!--           <div class="login-box">-->
                 <!--             <img src="{{ asset('img/ount.png') }}" class="login-box-img">-->
                 <!--             <div class="login-box-txt">Log in to view holding details</div>-->
                 <!--           <a href="{{ url( app()->getLocale(), 'login') }}"  <button type="button" class="btn btn-yellow">Log In</button></a>-->
                 <!--           </div>-->
                 <!--         </div>-->
                 <!--       </div>-->
                  
                 <!--</div>-->
                  <div class="col-lg-6 col-md-6 col-sm-12  order-1 order-lg-2 hero-img mt-3 mb-5" data-aos="zoom-in" data-aos-delay="200">
                   <div class="asset-overview login-box-main">
                          <div class="login-box-bg bg-white border-yellow" >
                            <div class="login-box" id="after_login">
                           <div class="asset-views-main">
                                  <div class="asset-views">
                                    <div class="asset-priview-div">
                                      <div class="asset-priview-div-left">
                                        <div class="asset-balence-text">Total Balance</div>
                                        <div class="asset-balance-div">
                                          <span class="asset-balence">**********</span>
                                        </div>
                                        <div class="asset-sbbalence">********</div>
                                      </div>
                                      <div class="asset-priview-div-right">
                                        <div class="asset-balence-text">Cumulative Profit</div>
                                        <div class="css-fah2tm">
                                          <div class="asset-balance-div">
                                            <span class="asset-profit">**********</span>
                                          </div>
                                          <div class="asset-sbprofit">*********</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="d-flex mt-2 w-100">
                                      <div class="asset-priview-img-div">
                                        <img class="asset-priview-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="asset-btn-div  justify-content-between">
                                      <div class="w-50 text-left">  <a href="#" target="_blank" class="btn-yellow border-0 shadow-none"> <i class="bi bi-wallet me-2"></i> Wallet</a> </div>
                                      <div class="w-50 text-left">  <a href="#" target="_blank" class="btn-default"> <i class="bi bi-clock-history me-2"></i> History</a> </div>
                                   
                                   
                                  </div>
                                 
                                  <div class="asset-eye-icon-div">
                                  
                                    <i id="showbalence" class="bi bi-eye asset-eye-icon" onClick="showhideBal(this.id)" style="display:none"></i>
                                    <i id="hidebalence" class="bi bi-eye-slash asset-eye-icon" onClick="showhideBal(this.id)" ></i>
                                    
                                   
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                  
                 </div>
              </div>
            </div>
      </section>
    
    
    
    
    
 <section class="bg-white Staking">
  <div class="container">
    <div class="staking-top">
      <div class="search-div">
        <input  placeholder="Choose/Search Coin" id="staking_filter">
        <svg viewBox="0 0 24 24" fill="none" class="svg-search">
          <path d="M3 10.982c0 3.845 3.137 6.982 6.982 6.982 1.518 0 3.036-.506 4.149-1.416L18.583 21 20 19.583l-4.452-4.452c.81-1.113 1.416-2.631 1.416-4.149 0-1.922-.81-3.643-2.023-4.958C13.726 4.81 11.905 4 9.982 4 6.137 4 3 7.137 3 10.982zM13.423 7.44a4.819 4.819 0 011.416 3.441c0 1.315-.506 2.53-1.416 3.44a4.819 4.819 0 01-3.44 1.417 4.819 4.819 0 01-3.441-1.417c-1.012-.81-1.518-2.023-1.518-3.339 0-1.315.506-2.53 1.416-3.44.911-1.012 2.227-1.518 3.542-1.518 1.316 0 2.53.506 3.44 1.416z" fill="currentColor"></path>
        </svg>
      </div>
      <label class="lbl-fillter-optn">
        <div class="lbl-fillter-check-div">
          <input type="checkbox"  name="remember" >
          
        </div>
        <div class="lbl-fillter-text">Display available only</div>
      </label>
      <label class="lbl-fillter-optn">
        <div class="lbl-fillter-check-div">
          <input type="checkbox"   name="remember">
        
        </div>
        <div class="lbl-fillter-text">Match My Assets</div>
      </label>
    </div>
 
      <div class="stating-2">
        <div class="stating-2-inner">
          <div class="Staking-History-otpn">
            <div class="stating-heading-div">
              <div class="stating-heading-div-inner">
                <div class="d-flex position-relative">
                  <span class="stating-heading--">DeFi Staking</span>
                  <div class="height-4px"></div>
                </div>
              </div>
            </div>
            <div class="play-video">
              <div class="Staking-History-otpn">
                <div>
                  <div class="play-video-inner">
                    <div class="play-video-icon-div">
                      <svg viewBox="0 0 24 24" fill="none" class="svg-video">
                        <path d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z" fill="currentColor"></path>
                        <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
                      </svg>
                    </div>
                    <div class="play-video-text-div">Video Guide <svg viewBox="0 0 24 24" fill="none" class="svg-chevron-right">
                        <path d="M13.5 12L7 18.6 8.4 20l8-8-8-8L7 5.4l6.5 6.6z" fill="currentColor"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         <div>
             <div class="stating-heading-div">
              <div class="stating-heading-div-inner">
                <div class="d-flex position-relative">
                  <span class="lbl-fillter-text text-gray" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="DeFi Staking subscription and redemption are closed during 23:50-00:10 (UTC) daily. No interest is accumulated on products purchased on the day of subscription.">DeFi Staking timeline</span>
                  <div class="height-4px"></div>
                </div>
              </div>
            </div>
         </div>
         
         
         
         
        </div>
      </div>
      <div class="staking-tbl-heaading-div">
        <div class="staking-tbl-heaading">Token</div>
        <div class="d-flex w-100 justify-content-between st-2-div">
        <div class="staking-tbl-heaading">Est. APR</div>
        <div class="staking-tbl-heaading">Duration (days)
        <div class="div____" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The actual period that assets are transferred back to your Spot wallet">
           
            <svg viewBox="0 0 24 24" fill="none" class="svg-info">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm0-2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm.997 9.004h-2.009v6h2.009v-6zm-2.009-4h2.009v2.009h-2.009v-2.01z" fill="currentColor"></path>
            </svg>
          </div>
        </div>
        </div>
        <div class="staking-min-amt">Minimum Locked Amount</div>
        <div class="flex-div-blank">
          <div class="width-90px"></div>
        </div>
      </div>
      
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-btn-yellow">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_1" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_1" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-checkout-btn">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_2" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_2" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-checkout-btn">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_3" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_3" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
      <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-btn-yellow">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_4" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_4" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-checkout-btn">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_5" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_5" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-checkout-btn">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_6" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_6" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
      <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-btn-yellow">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0"  id="open_stake_7" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_7" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-checkout-btn">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_8"  onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_8" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
            <div class="staking-tbl-record-row">
        <div class="d-flex justify-content-between align-items-center px-5 w-100">
          <div class="staking-desc-div">
            <div class="staking-lbl-div">
              <img src="{{ asset('ty-label.png') }}" class="staking-lbl-bgimg">
              <div class="staking-lbl-bgtxt">
                <div class="lbl-bgtxt-inner">VENUS</div>
              </div>
            </div>
            <div class="staking-coin-img-div">
              <img class="staking-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
            </div>BTC
          </div>
          <div class="d-flex justify-content-between w-100 st-record-2-div">
                <div class="staking-est-amt">3.1%</div>
                    <div class="staking-duration">
                        <div class="d-flex flex-wrap w-100">
                          <button type="button" class="s-duration-btn-gry">Flexible Lock</button>
                          <button type="button" class="s-duration-btn-gry active">60</button>
                        </div>
                    </div>
                </div>
          <div class="staking-min-amt">0.0001BTC</div>
                <div class="staking-btn-div d-flex hide-checkout-btn">
                    <div class="sold-out-div">Sold out</div>
                    <button type="button" class="btn btn-yellow shadow-none border-0" id="open_stake_9" onClick="OpenModalSubcscribe(this.id)">Stake Now</button>
                    <button type="button"  class=" staking-check-btn" id="open_check_9" onClick="OpenModalSubcscribe(this.id)">Check</button>
                </div>
        </div>
      </div>
      
      
      
      
      
      
   
      <div class="view-more-div">
          <div class="pagination-div">
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
  
  
</section>
    
    
    
    
    
    




<section class="wm-pay-accordian-section">
  <div class="container">
    <div class="outlet-main-div">
      <div class="wm-outlet-div">
        <div class="sec-title text-center mb-2">
          <h2 class="heading-h2">FAQs</h2>
        </div>
      </div>
      <div class="wm-outlet-div text-right justify-content-end">
        <a href="#" class="learn-more btn-6">
          <span>Learn More </span>
          <span>
            <i class="bi bi-chevron-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-head" id="headingOne">
          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> What is DeFi Staking? </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <div class="text"> DeFi (Decentralized Finance) is a way of providing financial services to users through smart contracts. Existing DeFi projects aim to provide higher annualized earnings for specific currencies.</div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-head" id="headingTwo">
          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> About Wealthmark DeFi Staking </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <div class="text">There's a relatively high threshold for users of DeFi products. Wealthmark DeFi Staking acts on behalf of users to participate in certain DeFi products, obtains and distributes realized earnings, and helps users to participate in DeFi products with a single click.</div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-head" id="headingThree">
          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> What are the advantages of DeFi Staking? </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <div class="text">1. Easy to use: You don't need to manage private keys, acquire resources, make trades, or perform other complicated tasks to participate in DeFi Staking. Wealthmark's one-stop service allows users to obtain generous online rewards without keeping an on-chain wallet. 2. No gas fee: Wealthmark Staking deposits users’ funds into smart contracts on users’ behalf, saving users on-chain gas fees.</div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-head" id="headingFour">
          <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> After I participate in DeFi Staking, how is the earnings cycle calculated? </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <div class="text">Once funds are successfully allocated to DeFi Staking, earnings are calculated beginning at 00:00 (UTC) the following day. The minimum earnings calculation period is one day; earnings for a period of less than one day will not be included in the earnings distribution.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!---------------------------           modal        ------------------------------------------>
<div id="Risk_Warning">
  <div class="custom-modal-bck-bg">
    <div class="wm-custom-modal-diolog">
         <div class="">
                    <div class="wm-custom-modal-header h-auto">
                        <span></span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
        
      <div class="wm-custom-modal-body">
        
        <div class="px-4 mt-5">
          <div class="mb-3 text-center">
            <img class="warning-img" src="{{ asset('ning.svg') }}">
          </div>
          <h3 class="title mb-3 text-center">Risk Warning</h3>
          <div class="text"> Wealthmark strives to offer its users only the best DeFi Mining projects. However, Wealthmark only acts as a platform to showcase projects and provide users with related services, such as accessing funds on behalf of the user and distributing earnings, etc. Wealthmark does not assume liability for any losses incurred due to project on-chain contract security issues.</div>
          <div class="mt-5 mb-4">
            <a href="#" class="btn-yellow d-block text-center text-white"> I understand </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="subscribe_modal" class="simple-earn-tbl">
  <div class="hide">
   
      <div class="wm-custom-modal-diolog">
          <div class="">
                    <div class="wm-custom-modal-header h-auto">
                        <span></span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
        <div class="wm-custom-modal-body">
          <div class="subscribe_modal-main-div">
            <div class="subscribe_modal-left-div">
              <div class="subscribe_modal-select-coin-div">
                <div class="d-flex">
                  <div class="modal-select-coin-text">Subscribe</div>
                 
                </div>
              </div>
              <div class="mt-4">
                  
                   <div class="px-3 mb-3">
                   <div class="subscribe_modal-dec-inner m-0">
                    <div class="subscribe_modal-dec-block bg-light-theme border-yellow rounded">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">
                          Wealthmark strives to offer its users only the best DeFi Mining projects. However, Wealthmark only acts as a platform to showcase projects and provide users with related services, such as accessing funds on behalf of the user and distributing earnings, etc. Wealthmark does not assume liability for any losses incurred due to project on-chain contract security issues.
                          </div>
                          </div>
                    </div>
                   
                  </div>
                  <div class="px-3 mb-3">
                    <div class="modal-select-coin-img-div">
                    <img class="modal-select-coin-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                    <div class="ms-2">APE</div>
                  </div>
                  </div>
                  <div class="px-3 mb-3">
                  <span class="step-progress-title">Type</span>
                  <div class="simple-earn-duration mt-2">
                    <div class="simple-earn-day active w-50 m-0">
                      <div class="simple-earn-text">Flexible</div>
                      <svg viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="simple-earn-day w-50 m-0">
                      <div class="simple-earn-text">Locked</div>
                      <svg viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                        </svg>
                    </div>
                   
                    
                   
                  </div>
                </div>
                  
                <div class="px-3 mb-3" id="duratin_div">
                  <span class="step-progress-title">Duration (Days)</span>
                  <div class="simple-earn-duration mt-2">
                    <div class="simple-earn-day active">
                      <div class="simple-earn-text">Flexible</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">30</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">60</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">90</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">120</div>
                      <div class="sm-tbl-row-mob-svg-check">
                        <svg viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-1 px-3">
                  <div class="field crypto-rght-second-box">
                      <div class="d-flex justify-content-between">
                            <span class="step-progress-title">Lock Amount</span>
                            <span class="step-progress-title">Available amount 0.00000000 ETH</span>
                      </div>
                    
                    <div class="input-wrap mt-2">
                      <div class="input-outer-div">
                        <input type="text" value="" class="inputbox">
                        <span class="input-span-text">MAX</span>
                      </div>
                      <div class="coin-select w-auto">
                        <div class="input-right-img-div">
                          <img id="Collateral-coin-img" src="{{ asset('ns/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="BUSD" title="BUSD">
                        </div>
                        <span id="Collateral-coin-text" class="coin">Wm</span>
                      </div>
                    </div>
                    <div class="condition_error_msg"> ----------- show your condition msg here --------------- </div>
                  </div>
                </div>
                <div class="modal-coin-avail-div">
                  <div class="modal-select-coin-text">Amount Limits</div>
                  <div class="d-flex flex-wrap mt-2 justify-content-between flex-column">
                    <div class="d-flex flex-wrap me-2 justify-content-between">
                      <div class="step-progress-title">Minimum:</div>
                      <div class="d-flex">0.1 OAX</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between" >
                      <div class="step-progress-title">Available Quota:</div>
                      <div class="d-flex">60,000 OAX</div>
                    </div>
                     <div class="d-flex align-items-center justify-content-between" >
                      <div class="step-progress-title">Total Personal Quota:</div>
                      <div class="d-flex">60,000 OAX</div>
                    </div>
                  </div>
                   <div class="bln-div-h-16"></div> <div class="bln-div-h-16"></div>
                </div>
               
               
              </div>
            </div>
            <div class="subscribe_modal-right-div">
              <div class="subscribe_modal-right-header">
                <div class="subscribe_modal-right-header-title">Summary &nbsp; 
                <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="DeFi Staking subscription and redemption are closed during 23:50-00:10 (UTC) daily. No interest is accumulated on products purchased on the day of subscription.">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      </div>
              </div>
              <div class="subscribe_modal-right-body">
                <div class="custom-step-progress">
                  <div class="step-progress-frst-div">
                    <div class="d-flex">
                      <div class="custom-step-progress-bln-div">
                        <div class="step-progress-highlight-point"></div>
                        <div class="custom-step-progress-vertical-line"></div>
                      </div>
                      <div class="step-progress-title-div">
                        <div class="step-progress-title">Subscription Date</div>
                        <div class="modal-conver-div-main-txt">2022-12-16 10:42</div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="custom-step-progress-bln-div">
                        <div class="step-progress-highlight-point"></div>
                      </div>
                      <div class="step-progress-title-div">
                        <div class="step-progress-title">Value Date</div>
                        <div class="modal-conver-div-main-txt">2022-12-17 05:30</div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-end">
                    <div class="custom-step-progress-bln-div">
                      <div class="custom-step-progress-vertical-line-green"></div>
                      <div class="step-progress-highlight-point"></div>
                    </div>
                    <div class="step-progress-txt-div-2">
                      <div class="d-flex justify-content-between position-relative align-items-end ">
                        <div class="step-progress-title">Interest End Date</div>
                        <div class="modal-date-div">
                          <div class="modal-conver-div-main-txt">2023-01-07 05:30</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-step-progress-bln-div">
                    <div class="custom-step-progress-vertical-line"></div>
                  </div>
                  <div class="d-flex">
                    <div class="step-progress-highlight-point"></div>
                    <div class="step-progress-txt-div">
                      <div class="step-progress-title">Redemption Date</div>
                      <div class="modal-date-div">
                        <div class="modal-conver-div-main-txt">2023-01-08 15:30</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-div2">
                  <div class="key ">Est. APR</div>
                  <div class="value">
                    <div class="key-value-profit">24.79%</div>
                  </div>
                </div>
                <div class="flex-div1">
                  <span class="key">Est. Interest</span>
                  <span class="key-value-profit">--</span>
                </div>
                <div class="subscribe_modal-dec-div">
                  <div class="subscribe_modal-dec-inner">
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">The APR is subject to change on a daily basis. Please refer to the details on the page.</div>
                    </div>
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">APR does not mean the actual or predicted returns in fiat currency.</div>
                    </div>
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.002 7H16l4-4v16l-4-4h-4v6H7v-6H4.002V7z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">Locked will return the subscribed digital assets to users’ spot wallets after the agreed period ends or early redemption, but the value of digital assets fluctuates and is subject to change.</div>
                    </div>
                  </div>
                </div>
                <div class="subscribe_modal-right-footer">
                  <div class="subscribe_modal-dec-inner">
                    <div class="subscribe_modal-check-box">
                      <label class="subscribe_modal-check-box-lbl">
                        <div class="subscribe_modal-check-box-input">
                          <input type="checkbox" id="subscribe_agree_checkbox">
                        </div>
                      </label>
                      <div class="">I have read and I agree to <a target="_blank" href="#" class="yellow-text">Wealthmark Simple Earn Service Agreement</a>
                      </div>
                    </div>
                  </div>
                  <button id="subscribe_confirm_btn" type="button" class="btn-default d-block w-100 border-0">Confirm</button>
                </div>
              </div>
            </div>
          </div>
          <!--<svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">-->
          <!--  <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>-->
          <!--</svg>-->
        </div>
      </div>
   
  </div>
</div>
<!--------------------------------------spinner-------------------------------------------------------------->

<!--------------------------------------spinner-------------------------------------------------------------->
  
    @include('template.web_footer') 
 <script src="{{ asset('strap.min.js') }}"></script> 
 
 <script>
        
        // $( window ).on("load", function() {
        //       $('#Risk_Warning').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
        // });
        
       
        function OpenModalSubcscribe(e){
            alert(e),$("#subscribe_modal").children().addClass("custom-modal-bck-bg").removeClass("hide")
         }
         $(".simple-earn-day").click(function(){
             $(this).addClass("active");
             $(this).children(".simple-earn-text").after('<div class="sm-tbl-row-mob-svg-check"> <svg viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path> </svg></div>'),$(this).siblings().removeClass("active")
             
         })

$("#subscribe_agree_checkbox").on("change",function(e){e.target.checked?$("#subscribe_confirm_btn").addClass("btn-yellow").removeClass("btn-default"):$("#subscribe_confirm_btn").removeClass("btn-yellow").addClass("btn-default")})
                             


 </script>
  
    </body>
</html>