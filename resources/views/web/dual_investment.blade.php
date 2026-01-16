  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Dual Investment </title>
  @include('template.web_css')


 <style>

 </style>


   </head>

 <body class="bg-white">
        @include('template.web_menu')

            <section class="auto-invesment">
     <div class="container">
         <div class="row align-items-center justify-content-center" >
             <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="sec-title text-left mb-3">
                            <span class="title">Welcome to Wealthmark</span>
                            <h2 class="heading-h2 text-white mt-0">Dual Investment</h2>
                            <div class="text text-left text-white mt-0">Monetize your market view and get access to potentially high rewards</div>
                        </div>
                     <div class="auto-invesment-top-row">

                          <div class="detail">
                              <i class="bi bi-check2 auto-invesment-check"></i>
                              Buy Low or Sell High</div>

                          <div class="detail">
                              <i class="bi bi-check2 auto-invesment-check"></i>
                              Wide Selection</div>

                          <div class="detail">
                               <i class="bi bi-check2 auto-invesment-check"></i>
                               No Trading Fees</div>

                          <div class="detail">
                               <i class="bi bi-check2 auto-invesment-check"></i>
                               High Rewards</div>
                    </div>

             </div>
              <div class="col-md-4 col-sm-5 col-xs-12">
                 <div class="asset-overview login-box-main">
                          <div class="login-box-bg">
                            <div class="login-box">
                              <img src="{{ asset('img/account.png') }}" class="login-box-img">
                              <div class="login-box-txt">Log in to view holding details</div>
                              <button type="button" class="btn btn-yellow">Log In</button>
                            </div>
                          </div>
                        </div>
                  </div>

         </div>
         </div>
         </section>

            <div class="bg-white pt-2 pb-2">
        <div class="container">
            <div class="dual-inv-top-row">
  <div class="dual-inv-top-row-inner">
    <div class="dual-inv-top-row-inner-left">
      <div class="avbl-coin-text">Available Coins</div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <div class="dual-inv-avbl-coin">
        <img class="dual-inv-avbl-coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
      </div>
      <span class="dual-inv-avbl-coin-more">+7</span>
    </div>
    <div class="dual-inv-top-row-inner-right">
      <button type="button" class=" dual-tutorial-btn">


            <div class="dual-svg-video-div">
              <svg  viewBox="0 0 24 24" fill="none" class="dual-svg-video">
                <path d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z" fill="currentColor"></path>
                <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
              </svg>Tutorial


        </div>
      </button>
      <button type="button" class=" dual-learn-btn">
        <a href="#" target="_blank" class="dual-learn-text">Learn More</a>
      </button>
      <div class="dual-faq-btn">FAQ</div>
    </div>
  </div>
</div>
        </div>
    </div>


            <section class="bg-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                     <h3 class="title">
                Step 1: Choose an asset
            </h3>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-right ">
                   <div class="switch-box d-flex align-items-center justify-content-end">
                   <span>Beginner Mode</span>
                            <label class="switch">
                              <input type="checkbox" class="switch_input" checked/>
                             <div></div>
                            </label>
                </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 pt-4 mb-4">
                     <div class="custom-modal-search-div m-0">
                <svg viewBox="0 0 24 24" fill="none" class="custom-modal-search-icn">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                </svg>
                <input type="text" id="coinModalInput" placeholder="Search Coin" class="custom-modal-search-input" value="">
      </div>
                </div>
            </div>
           <div class="row">
               <div class="col-md-12 open show" id="coin_opt_desk">
               <div class="di-coin-list-div">
                  <div class="di-coin-list-active">
                    <img src="{{ asset('img/wm-card_tick.svg') }}" class="di-coin-list-img-tick">
                    <div class="di-coin-list-title-div">
                      <div class="di-coin-list-img-content">
                        <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                        <div class="di-coin-list-name-coin">BTC</div>
                      </div>
                      <img src="{{ asset('img/wm-hot.svg') }}" class="di-coin-list-img-hot">
                    </div>
                    <div class="di-coin-list-sts">
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">APR</div>
                        <div class="di-coin-list-sts-apr-sb">4.00%~84.48%</div>
                      </div>
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">Current Price</div>
                        <div class="di-coin-list-sts-crrnt">16,583</div>
                      </div>
                    </div>
                  </div>
                  <div class="di-coin-list">
                  <img src="{{ asset('img/wm-not_selected_tick.svg') }}" class="di-coin-list-img-tick">
                    <div class="di-coin-list-title-div">
                      <div class="di-coin-list-img-content">
                        <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                        <div class="di-coin-list-name-coin">BTC</div>
                      </div>
                      <img src="{{ asset('img/wm-hot.svg') }}" class="di-coin-list-img-hot">
                    </div>
                    <div class="di-coin-list-sts">
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">APR</div>
                        <div class="di-coin-list-sts-apr-sb">4.00%~84.48%</div>
                      </div>
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">Current Price</div>
                        <div class="di-coin-list-sts-crrnt">16,583</div>
                      </div>
                    </div>
                  </div>
                   <div class="di-coin-list">
                  <img src="{{ asset('img/wm-not_selected_tick.svg') }}" class="di-coin-list-img-tick">
                    <div class="di-coin-list-title-div">
                      <div class="di-coin-list-img-content">
                        <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                        <div class="di-coin-list-name-coin">BTC</div>
                      </div>
                      <img src="{{ asset('img/wm-hot.svg') }}" class="di-coin-list-img-hot">
                    </div>
                    <div class="di-coin-list-sts">
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">APR</div>
                        <div class="di-coin-list-sts-apr-sb">4.00%~84.48%</div>
                      </div>
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">Current Price</div>
                        <div class="di-coin-list-sts-crrnt">16,583</div>
                      </div>
                    </div>
                  </div>
                  <div class="di-coin-list">
                  <img src="{{ asset('img/wm-not_selected_tick.svg') }}" class="di-coin-list-img-tick">
                    <div class="di-coin-list-title-div">
                      <div class="di-coin-list-img-content">
                        <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                        <div class="di-coin-list-name-coin">BTC</div>
                      </div>
                      <img src="{{ asset('img/wm-hot.svg') }}" class="di-coin-list-img-hot">
                    </div>
                    <div class="di-coin-list-sts">
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">APR</div>
                        <div class="di-coin-list-sts-apr-sb">4.00%~84.48%</div>
                      </div>
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">Current Price</div>
                        <div class="di-coin-list-sts-crrnt">16,583</div>
                      </div>
                    </div>
                  </div>
                  <div class="di-coin-list">
                  <img src="{{ asset('img/wm-not_selected_tick.svg') }}" class="di-coin-list-img-tick">
                    <div class="di-coin-list-title-div">
                      <div class="di-coin-list-img-content">
                        <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                        <div class="di-coin-list-name-coin">BTC</div>
                      </div>
                      <img src="{{ asset('img/wm-hot.svg') }}" class="di-coin-list-img-hot">
                    </div>
                    <div class="di-coin-list-sts">
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">APR</div>
                        <div class="di-coin-list-sts-apr-sb">4.00%~84.48%</div>
                      </div>
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">Current Price</div>
                        <div class="di-coin-list-sts-crrnt">16,583</div>
                      </div>
                    </div>
                  </div>
                  <div class="di-coin-list">
                  <img src="{{ asset('img/wm-not_selected_tick.svg') }}" class="di-coin-list-img-tick">
                    <div class="di-coin-list-title-div">
                      <div class="di-coin-list-img-content">
                        <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                        <div class="di-coin-list-name-coin">BTC</div>
                      </div>
                      <img src="{{ asset('img/wm-hot.svg') }}" class="di-coin-list-img-hot">
                    </div>
                    <div class="di-coin-list-sts">
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">APR</div>
                        <div class="di-coin-list-sts-apr-sb">4.00%~84.48%</div>
                      </div>
                      <div class="di-coin-list-sts-apr">
                        <div class="d-flex">Current Price</div>
                        <div class="di-coin-list-sts-crrnt">16,583</div>
                      </div>
                    </div>
                  </div>

                </div>
             </div>
             <div class="col-md-12 p-4 border mb-4 bg-white open hide" id="more_coin_div">

                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 ">
                            <div class="table-responsive" style="">
                      <table class="wm-table">

                        <thead style="">
                          <tr>
                            <th class="stickyTop"></th>
                            <th class="stickyTop" style="text-align:start">
                              <div class="broker-tb-first-th">
                                <div class="wm-tbl-column-div">
                                  <p class="wm-tbl-column-title ">#</p>
                                  <span class=" space-width"></span>
                                </div>
                              </div>
                            </th>
                            <th class="stickyTop" style="text-align:start">
                              <div class="broker-tb-first-th">
                                <div class="wm-tbl-column-div">
                                  <p class="wm-tbl-column-title">Name</p>
                                  <span class=" space-width"></span>
                                </div>
                              </div>
                            </th>
                            <th class="stickyTop" style="text-align:end">
                              <div class="bGlLSM">
                                <div class="wm-tbl-column-div">
                                  <span class=" space-width"></span>
                                  <p class="wm-tbl-column-title">Price</p>
                                </div>
                              </div>
                            </th>

                            <th class="stickyTop" style="text-align:end">
                              <div>
                                <div class="bGlLSM">
                                  <div class="wm-tbl-column-div">
                                    <span class=" space-width"></span>
                                    <p class="wm-tbl-column-title">24h %</p>
                                  </div>
                                </div>
                              </div>
                            </th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">1</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>


                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">2</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">3</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>

                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">4</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">5</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>

                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">6</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>


                          </tr>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">7</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>

                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">8</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>

                          </tr>


                        </tbody>
                      </table>
                    </div>
                        </div>
                           <div class="col-md-6 col-sm-12 col-xs-12 d-md-block d-sm-none">
                            <div class="table-responsive" style="">
                      <table class="wm-table">

                        <thead style="">
                          <tr>
                            <th class="stickyTop"></th>
                            <th class="stickyTop" style="text-align:start">
                              <div class="broker-tb-first-th">
                                <div class="wm-tbl-column-div">
                                  <p class="wm-tbl-column-title ">#</p>
                                  <span class=" space-width"></span>
                                </div>
                              </div>
                            </th>
                            <th class="stickyTop" style="text-align:start">
                              <div class="broker-tb-first-th">
                                <div class="wm-tbl-column-div">
                                  <p class="wm-tbl-column-title">Name</p>
                                  <span class=" space-width"></span>
                                </div>
                              </div>
                            </th>
                            <th class="stickyTop" style="text-align:end">
                              <div class="bGlLSM">
                                <div class="wm-tbl-column-div">
                                  <span class=" space-width"></span>
                                  <p class="wm-tbl-column-title">Price</p>
                                </div>
                              </div>
                            </th>

                            <th class="stickyTop" style="text-align:end">
                              <div>
                                <div class="bGlLSM">
                                  <div class="wm-tbl-column-div">
                                    <span class=" space-width"></span>
                                    <p class="wm-tbl-column-title">24h %</p>
                                  </div>
                                </div>
                              </div>
                            </th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">1</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>


                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">2</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">3</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>

                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">4</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">5</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>

                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">6</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>


                          </tr>
                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">7</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " loading="lazy" alt="BTC logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">Bitcoin</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">1</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BTC</p>
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
                                <span class="icon-Caret-up"></span>0.27% </span>
                            </td>

                          </tr>

                          <tr>
                            <td>
                              <span>
                                <span class="wm-tbl-str-div">
                                  <span class="icon-Star" style="color: #a6b0c3 ;"></span>
                                </span>
                              </span>
                            </td>
                            <td style="text-align: start;">
                              <p color="text2" class="wm-tbl-broker-vol-sub">8</p>
                            </td>
                            <td style="text-align: start;" class="">
                              <div class="d-flex align-items-center">
                                <a href="#" class="wm-link">
                                  <div class="broker-tbl-coin-div-main">
                                    <img class="coin-logo" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="BNB logo">
                                    <div class="name-area ">
                                      <p class="broker-tbl-coin-title">BNB</p>
                                      <div class="coin-item-symbol-div">
                                        <div class="coin-nm-mob">4</div>
                                        <p color="text3" class="coin-nm-color coin-item-symbol">BNB</p>
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
                              <span class="broker-tbl-price-down">
                                <span class="icon-Caret-down"></span>0.39% </span>
                            </td>

                          </tr>


                        </tbody>
                      </table>
                    </div>
                        </div>
                    </div>

        <div class="pagination-div mt-3">
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
            <div class="text">* APR is refreshed in real time. We will use the latest APR at the time you complete the subscription successfully.</div>

            <div class="border-top border-bottom pt-2 pb-2 mt-2 mb-2 yellow-text text-center hide-max-768">
              <span class="open show" id="Show_more_btn"> <b> Show more </b></span> <span class="open hide" id="Show_less_btn"> <b> Show Less </b></span>
            </div>
           </div>
        </div>

    </section>

            <section id="Beginner_Mode_on">
      <div class="container" >
          <div class="row">
              <div class="">
  <h3 class="title mt-2 mb-4">Step 2: Get Started</h3>
  <div class="di-get-start">

   <div class="di-get-start-left">
  <div class="li-prog-tst-mob">Decide to Sell High or Buy Low</div>


      <div id="step-prog" class="step-prog">
        <div class="bn-steps-step li-prog-div-main" data-status="process">
          <div class="li-prog-div">
            <div class="step_marker_column " data-class="step_marker_column">
              <span data-class="step_marker_number" class="step_marker_span">
                <div class="step_marker_number">1</div>
              </span>
            </div>
            <div class="li-prog-tst">Decide to Sell High or Buy Low</div>

          </div>
        </div>
        <div data-status-line="wait" class="cn-mob li-prog-line"></div>
        <div class="bn-steps-step li-prog-div-main" data-status="wait">
          <div class="li-prog-div">
            <div class="step_marker_column " data-class="step_marker_column">
              <span data-class="step_marker_number" class="step_marker_span">
                <div class="step_marker_number">2</div>
              </span>
            </div>
            <div class="li-prog-tst">Enter Subscription Amount</div>

          </div>
        </div>
        <div data-status-line="wait" class="cn-mob li-prog-line"></div>
        <div class="bn-steps-step li-prog-div-main" data-status="wait">
          <div class="li-prog-div">
            <div class="step_marker_column " data-class="step_marker_column">
              <span data-class="step_marker_number" class="step_marker_span">
                <div class="step_marker_number">3</div>
              </span>
            </div>
            <div class="li-prog-tst">Check Winning Scenarios</div>

          </div>
        </div>
        <div data-status-line="wait" class="cn-mob li-prog-line"></div>
        <div class="bn-steps-step li-prog-div-main" data-status="wait">
          <div class="li-prog-div">
            <div class="step_marker_column " data-class="step_marker_column">
              <span data-class="step_marker_number" class="step_marker_span">
                <div class="step_marker_number">4</div>
              </span>
            </div>
            <div class="li-prog-tst">Confirm and Subscribe</div>

          </div>
        </div>
      </div>
      <div class="step-prog-mobile">
  <div class="bn-steps-step li-prog-div-main" data-status="process">
    <div class="step-prog-num-div">

      <div class="step_marker_row " data-class="step_marker_row">
        <span data-class="step_marker_number" class="step_marker_span">
          <div class="step_marker_number">1</div>
        </span>
      </div>
    </div>
  </div>
  <div data-status-line="wait" class="li-prog-line-mob"></div>
  <div class="bn-steps-step li-prog-div-main" data-status="wait">
    <div class="step-prog-num-div">

      <div class="step_marker_row " data-class="step_marker_row">
        <span data-class="step_marker_number" class="step_marker_span">
          <div class="step_marker_number">2</div>
        </span>
      </div>
    </div>
  </div>
  <div data-status-line="wait" class="li-prog-line-mob"></div>
  <div class="bn-steps-step li-prog-div-main" data-status="wait">
    <div class="step-prog-num-div">

      <div class="step_marker_row " data-class="step_marker_row">
        <span data-class="step_marker_number" class="step_marker_span">
          <div class="step_marker_number">3</div>
        </span>
      </div>
    </div>
  </div>
  <div data-status-line="wait" class="li-prog-line-mob"></div>
  <div class="bn-steps-step li-prog-div-main" data-status="wait">
    <div class="step-prog-num-div">

      <div class="step_marker_row " data-class="step_marker_row">
        <span data-class="step_marker_number" class="step_marker_span">
          <div class="step_marker_number">4</div>
        </span>
      </div>
    </div>
  </div>
</div>

</div>


    <div class="di-get-start-rgt">
      <div class="di-get-start-img">
        <img src="{{ asset('img/dual-investment/sell-wmc.png') }}" class="di-get-start-img-">
      </div>
      <div class="di-get-start-rgt-lft">
        <div class="di-get-start-rgt-lft-1">Find
        <div class="di-get-start-rgt-lft-1-inner">
            <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="di-coin-list-name-coin">BTC</div>
          </div>
          Products </div>
        <div class="di-get-start-rgt-lft-swt-tbn-div">
          <div class="btn-yellow" id="open_sell_btc">Sell BTC at</div>
          <div class="di-get-start-rgt-lft-swt-tbn" id="open_buy_btc">Buy BTC at</div>
        </div>
         <div class="open show pt-2" id="Sell_BTC">
        <div class="buy_BTC_div">
          <div class="buy_BTC_div-inner">
            <h3 class="title mb-0">$18,000</h3>
            <img src="{{ asset('img/wm-vertical_line.svg') }}" class="line-img">
            <div class="d-flex " id="demo_1" onclick="openModal(this.id)">
              <svg viewBox="0 0 24 24" fill="none" cursor="pointer" class="edit-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.314 4.781l3.889 3.89-1.768 1.767-3.889-3.889 1.768-1.768zm-3.182 3.182l3.89 3.89-5.129 5.127H15v3H7.893l-.004.004H4v-3.889l8.132-8.132zM17 16.98h3v3h-3v-3z" fill="currentColor"></path>
              </svg>
            </div>
          </div>
          <div class="lover-risk">Lowest Risk</div>
          <div class="gt-status">on <div class="gt-status-crrnt-price">&nbsp;&nbsp;2022/11/18</div>
            <img src="{{ asset('img/wm-vertical_line.svg') }}" class="gt-earn-apr">earn APR
           :

            <div class="gt-crrnt-earn-title">&nbsp;15.18%</div>
          </div>
          <div class="gt-status-crrnt-div">Current Price
           :

            <div class="gt-status-crrnt-price">&nbsp;16,631</div>
          </div>
        </div>
        </div>
         <div class="open hide pt-2" id="buy_BTC">
        <div class="buy_BTC_div" >
        <div class="buy_BTC_div-inner">
                <h3 class="title m-0 p-0 me-3">$13,000</h3>with
                <div class="ms-2 me-2">

                   <div class="dropdown show">
                          <a class="btn bg-light-theme d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <div class="di-get-start-rgt-lft-1-inner">
            <img class="di-coin-list-img-coin" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="di-coin-list-name-coin">BTC</div>
          </div>
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                    </div>


                </div>
                <img src="{{ asset('img/wm-vertical_line.svg') }}" class="line-img">
                <div class="d-flex" id="demo_2" onclick="openModal(this.id)">
                  <svg viewBox="0 0 24 24" fill="none" cursor="pointer" class="edit-svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.314 4.781l3.889 3.89-1.768 1.767-3.889-3.889 1.768-1.768zm-3.182 3.182l3.89 3.89-5.129 5.127H15v3H7.893l-.004.004H4v-3.889l8.132-8.132zM17 16.98h3v3h-3v-3z" fill="currentColor"></path>
                  </svg>
                </div>
              </div>
              <div class="lover-risk">Lowest Risk</div>
              <div class="gt-status">on <div class="gt-status-crrnt-price">&nbsp;&nbsp;2022/11/22</div>
                <img src="{{ asset('img/wm-vertical_line.svg') }}" class="gt-earn-apr">earn APR
               :

                <div class="gt-crrnt-earn-title">&nbsp;4.72%</div>
              </div>
              <div class="gt-status-crrnt-div">Current Price
               :

                <div class="gt-status-crrnt-price">&nbsp;16,529</div>
              </div>
            </div>
           </div>
      </div>
      <div class="di-get-start-login-div">
        <button type="button" class="btn btn-yellow w-auto">Log In</button>
      </div>
    </div>
  </div>
</div>
          </div>
      </div>
  </section>


        <section class="bg-white" id="biginner_mode_of" style="display:none">
      <div class="container">
          <div class="d-flex align-items-center justify-content-between pb-4 mb-4">
              <div class="div">

                        <h3 class="title m-0 p-0"> Step 2: Choose a settlement</h3>

              </div>

                  <div class="Di_Current_coin_Price_div">Current BTC Price<div class="Di_Current_coin_Price_status">16,770</div></div>

          </div>
          <div class="row">


              <div class="dashboard-tabpills">
                <div class="mb-4">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">
                                <div  class="Choose_settlement_optn-div">
                                      <div class="Choose_settlement_optn-img">
                                        <div class="di-coin-list-img-content">
                                          <img class="Choose_settlement_optn-img-main" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                        </div>
                                        <div class="Choose_settlement_optn-img2-main">
                                          <img class="Choose_settlement_optn-img2-main2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                        </div>
                                      </div>
                                      <div class="Choose_settlement_optn-title">Sell High</div>
                                      <div class="Choose_settlement_optn-up"></div>
                                      <div class="Choose_settlement_optn-title-2">Deposit BTC</div>
                            </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-margin-tab" data-bs-toggle="pill" data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin" aria-selected="true">
                                <div  class="Choose_settlement_optn-div">
                                      <div class="Choose_settlement_optn-img">
                                        <div class="di-coin-list-img-content">
                                          <img class="Choose_settlement_optn-img-main" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                        </div>
                                        <div class="Choose_settlement_optn-img2-main">
                                          <img class="Choose_settlement_optn-img2-main2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                        </div>
                                      </div>
                                      <div class="Choose_settlement_optn-title">Buy Low</div>
                                      <div class="Choose_settlement_optn-down"></div>
                                      <div class="Choose_settlement_optn-title-2">Deposit Usdt</div>
                            </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-futures-tab" data-bs-toggle="pill" data-bs-target="#pills-futures" type="button" role="tab" aria-controls="pills-futures" aria-selected="false">
                                <div  class="Choose_settlement_optn-div">
                                      <div class="Choose_settlement_optn-img">
                                        <div class="di-coin-list-img-content">
                                          <img class="Choose_settlement_optn-img-main" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                        </div>
                                        <div class="Choose_settlement_optn-img2-main">
                                          <img class="Choose_settlement_optn-img2-main2" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                                        </div>
                                      </div>
                                      <div class="Choose_settlement_optn-title">Buy Low</div>
                                     <div class="Choose_settlement_optn-down"></div>
                                      <div class="Choose_settlement_optn-title-2">Deposit BUSD</div>
                            </div>
                            </button>
                        </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                                <div class="date-wise-filter scrollbar-style p-3 pb-3">
                                    <div class="date-wise-filter-div">
                                        <div class="active date-wise-filter--txt">All Settlement Dates</div>
                                    </div>
                                    <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                     <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                     <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                     <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                     <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                     <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                     <div class="date-wise-filter-div">
                                        <div class=" date-wise-filter--txt">2022-11-22</div>
                                    </div>
                                </div>


                                             <div class="mt-4">

                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                      <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                        <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                        <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                       <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                    <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                      <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                      <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>
                                     <div class="date-wise-filter-list">
                                         <div class="date-wise-filter-list-inner">
                                              <div class="filter-list-inner-left">
                                                <div class="filter-list-trgt-div">
                                                  <div class="d-flex">Target Price</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-trgt-crrnt-sts-div">
                                                      <div class="d-flex">$17,000</div>
                                                      <div class="filter-list-trgt-per-div">
                                                        <div class="filter-list-trgt-per">1.54%</div>
                                                      <i class="bi bi-caret-up-fill filter-list-trgt-per-icon"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-apr-div">
                                                  <div class="d-flex">APR</div>
                                                  <div class="filter-list-trgt-sts">
                                                    <div class="filter-list-apr-sts">74.41%</div>
                                                  </div>
                                                </div>
                                                <div class="filter-list-date-div">
                                                  <div class="d-flex">
                                                    <div class="filter-list-date-div-title">Settlement Date</div>
                                                  </div>
                                                  <div class="filter-list-trgt-sts">2022-11-22</div>
                                                </div>
                                              </div>
                                              <div class="filter-list-inner-right">
                                                <button type="button" class="btn-yellow border-0">Subscribe</button>
                                                <button type="button" class="di_cal_btn">Calculate</button>
                                              </div>
                                            </div>
                                     </div>




                                <div class="pagination-div mt-3">
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

                            <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">

                            </div>
                            <div class="tab-pane fade " id="pills-margin" role="tabpanel" aria-labelledby="pills-margin-tab">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        <div class="return_div_2222">
            <div class="d-flex mb-4">
                <img src="{{ asset('img/dual-investment/calculator.png') }}" class="me-2 di-coin-list-img-coin rounded-0" >
                <div class="return_cal_deading_div">
                    <h3 class="title m-0 p-0 me-2"> Return Calculator</h3>
                    <p class="text m-0 p-0">Select a product above to start the calculation.</p>
                </div>
            </div>

            <div class="Return_Calculator_div">
                <div class="chart_Calculator_div order-1" id="apend_div_child-1" >
    <div class="chart_Calculator_div-main-inner">
      <div class="chart_Calculator_div-inner">
        <div  class="rc-coin-selected-price">ETH Price</div>
        <div class="">
          <div  class="rc-coin-selected-price">Target Price</div>
          <div  class="rc-coin-selected-price-1">$1,300</div>
        </div>

      </div>
      <div class="chart_Calculator_right">
        <div class="chart_Calculator_dashed-line"></div>
        <div class="chart_Calculator_crrnt_div">
          <div class="">
            <div  class="chart_Calculator_crnt-price-txt">Current Price</div>
            <div  class="chart_Calculator_crnt-price-txt">$1,207</div>
          </div>

        </div>
        <div class="max-trget_price_div">
          <div  class="chart_Calculator_crnt-price-txt">Price ≥ $1,300</div>

        </div>
        <div class="chart_Calculator_dot-2"></div>
        <div class="chart_Calculator_dot-1"></div>
        <img src="#" class="chart_Calculator_chart-img">
        <div class="chart_Calculator_right_top">
          <div class="cal_div_return_left">
            <div class="chart_Calculator_list_dot"></div>
            <div  class="chart_Calculator_title_right">Receive</div>
          </div>
          <div  class="chart_Calculator_title_--">--</div>
          <div class="chart_Calculator_img_div-coin">
            <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div  class="chart_Calculator_img_name">BUSD</div>
          </div>
        </div>
        <div class="chart_Calculator_right_bottom">
          <div class="cal_div_return_left">
            <div class="chart_Calculator_list_dot"></div>
            <div  class="chart_Calculator_title_right">Receive</div>
          </div>
          <div  class="chart_Calculator_title_--">--</div>
          <div class="chart_Calculator_img_div-coin">
            <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div  class="chart_Calculator_img_name">ETH</div>
          </div>
        </div>
        <div  class="chart_Calculator_date">2022-11-25</div>
      </div>
    </div>
  </div>
                <div class="sell_Calculator_div order-2" id="apend_div_child-3" >
    <div class="sell_div_main">
      <div  class="sell_div_main_title">Sell ETH</div>
      <div class="sell_div_inner">
        <div class="sell_div_inner-row1">
          <div  class="sell_div_inner-row-title">Subscription Amount</div>
          <div class=" sell_div_sub_amt_div">
            <input type="input" placeholder="Enter Amount" class="sell_div_sub_amt_inpt" value="">
            <div class="wm-input-suffix ">
              <div class="sell_div_sub_amt_coin-div">
                <div class="sell_div_inner-row-right-img">
                  <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                </div>
                <div  class="sell_div_sub_amt_coin-title">ETH</div>
              </div>
            </div>
          </div>
        </div>
        <div class="sell_div_inner-row2">
          <div  class="sell_div_inner-row-title">Target Price</div>
          <div class="sell_div_inner-row-right">
            <div class="sell_div_inner-row-right-img">
              <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            </div>
            <div  class="sell_div_inner-row-target-coin">ETH = $</div>
            <div  class="sell_div_inner-row-target-price">1,300</div>
          </div>
        </div>
        <div class="sell_div_inner-row3">
          <div  class="sell_div_inner-row-title">Settlement Date</div>
          <div class="sell_div_inner-row-right">
            <div  class="sell_div_inner-row-date">2022-11-25</div>
          </div>
        </div>
        <div class="sell_div_inner-row3">
          <div  class="sell_div_inner-row-title">Outcome</div>
          <div class="sell_div_inner-row3-btns-div">
            <div class="acitve sell_div_inner-row3-btns">
              <div  class="chart_Calculator_crnt-price-txt">At or above $1,300</div>
            </div>
            <div class=" sell_div_inner-row3-btns">
              <div  class="chart_Calculator_crnt-price-txt">Below $1,300</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                <div class="cal_div_return order-3" id="apend_div_child-2">
    <div class="cal_div_return-inner">
      <div  class="cal_div_return-title">Return Calculator</div>
      <div class="cal_div_return-1-row">
        <div class="cal_div_return_left">
          <div  class="rc_blank_record">Subscription Amount</div>
        </div>
        <div class="cal_div_return_right">
          <div  class="rc_blank_record">--</div>
          <div class="rc_crnt_rcrd">
            <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div  class="rc_title">ETH</div>
          </div>
        </div>
      </div>
      <div class="cal_div_return-2-row">
        <div class="cal_div_return_left">
          <div class="rc_Interests_div">Interests ( <div  class="g-light-green me-2">22.36%</div> APR) </div>
          <div class="cal_div_return_left_info">

            <svg  viewBox="0 0 24 24" fill="none" class="cal_div_return_left_info_icn">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
            </svg>
          </div>
        </div>
        <div class="cal_div_return_right">
          <div  class="rc_blank_record">--</div>
          <div class="rc_crnt_rcrd">
            <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div  class="rc_title">ETH</div>
          </div>
        </div>
      </div>
      <div class="cal_div_return-border-line"></div>
      <div class="cal_div_return-3-row">
        <div class="d-flex align-items-center justify-content-between">
          <div  class="rc_blank_record">Total</div>
        </div>
        <div class="cal_div_return_right">
          <div  class="rc_blank_record">--</div>
          <div class="rc_crnt_rcrd">
            <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div  class="rc_title">ETH</div>
          </div>
        </div>
      </div>
      <div class="cal_div_return-3-arrow">
        <svg  viewBox="0 0 24 24" fill="none" class="rc_arrow">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M12 20.999l7.071-7.071-1.768-1.768-4.054 4.055V2.998h-2.5v13.216L6.696 12.16l-1.768 1.768 7.07 7.071H12z" fill="currentColor"></path>
        </svg>
      </div>
      <div  class="receive_amt_title">You will receive</div>
      <div class="cal_div_return-3-row">
        <div class="cal_div_return_left">
          <div  class="rc_blank_record">Settlement Amount</div>
          <svg  viewBox="0 0 24 24" fill="none" class="cal_div_return_left_info_icn">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
            </svg>

        </div>
        <div class="cal_div_return_right">
          <div  class="rc_blank_record">--</div>
          <div class="rc_crnt_rcrd">
            <img class="rc_coin-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div  class="rc_title">BUSD</div>
          </div>
        </div>
      </div>
    </div>
  </div>

            <div id="apend_div" class="order-3">

            </div>

            </div>
        </div>

      </div>
  </section>


<section class="wm-pay-accordian-section bg-light-blue">
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
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>

                        </div>
                        </div>
    </div>
            <div class="container">
          <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-head" id="headingOne">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        1. What is Dual Investment?
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
              <div class="text"> Dual Investment gives you an opportunity to buy or sell cryptocurrency at your desired price and date in the future, while earning high interest yield no matter which direction the market goes.</div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingTwo">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       2. What are the benefits of using Dual Investment?
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
               <div class="text"> • Buy Low or Sell High: You can buy crypto at a lower price or sell crypto at a higher price;</div>
               <div class="text"> • High Interest Yield: You’ll earn a high passive income no matter which direction the market goes;</div>
               <div class="text"> • Wide Selection: You can choose from a wide variety of assets and set the target date and price to your liking;</div>
               <div class="text"> • No Trading Fees: Zero trading fees when the target is reached and the “Buy Low” or “Sell High” product is filled.</div>

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingThree">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           3. When should I use Dual Investment?
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text">Whether you’re an advanced trader or simply a HODLer that wants to earn some extra yield, there are many different reasons why you may decide to use Dual Investment. Some of the most common scenarios include:</div>
              <div class="text">• Take profit: Sell your crypto holding at a Target Price to realize some of your investment gains while benefiting from additional interest yield; </div>
                 <div class="text">• Buy the dips: Buy crypto at a Target Price when the market is down, and enjoy additional interest yield; </div>
                 <div class="text">• Grow more crypto: You have crypto and want to earn additional returns while holding onto them; </div>
                 <div class="text">• Grow more stablecoin: You have stablecoins and want to earn additional returns while holding onto them. </div>
              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-head" id="headingFour">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        4. How do “Buy Low” and “Sell High” products work?
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
          <div class="text">There are two types of Dual Investment products: “Buy Low” and “Sell High”.</div>

               <div class="text">
                   Buy Low products gives you a chance to buy your desired crypto (such as BTC) at a lower price in the future with stablecoins (BUSD or USDT).<br>
- Target Reached: On the Settlement Date, if the Market Price is at or below the Target Price, the target currency (BTC) will be bought<br>
- Target Not Reached: On the Settlement Date, if the Market Price is above the Target Price, then you will keep your stablecoins<br>
In both scenarios, you will first earn interest in stablecoins. Once the Target Price is reached, your subscription amount and interest income will be used to buy BTC.
               </div>
             <div class="text">
                 Sell High products gives you a chance to sell your existing crypto (such as BNB) at a higher price in the future (for BUSD).<br>
- Target Reached: On the Settlement Date, the Market Price is at or above the Target Price, your BNB will be sold for BUSD<br>
- Target Not Reached: On the Settlement Date, the Market Price is below the Target Price, then you will keep your BNB<br>
In both scenarios, you will first earn interest in your existing currency (BNB). Once the Target Price is reached, your subscription amount and interest income will be sold for BUSD.
             </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-head" id="headingfive">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
       5. What is the Beginner Mode in Dual Investment?
              </h2>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
              <div class="card-body">
          <div class="text">Beginner Mode is designed for new Dual Investment users. It provides a step-by-step guide to help you through the Dual Investment subscription process.</div>
          <div class="text">You can turn on or off the Beginner Mode with the toggle button.</div>
              </div>
            </div>
          </div>


</div>
</div>
</section>

<!---------- --------------------------- -modal ----------------------------->

<div class="hide">
     <div class="demo_1 hide" id="Select_settlement">
      <div class="wm-custom-modal-diolog">
        <div class="wm-custom-modal-body">
          <div class="wm-custom-modal-header">
            <span>Select a settlement </span>
            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
            </svg>
          </div>

            <div class="wm-custom-modal-max-height mb-3">
              <div class="dual3-modal-scroller coin-list-popup">
                <div class="coin-list-popup-title">Target Price</div>
                <div class="coin-list-popup-title">Settlement Date</div>
                <div class="coin-list-popup-title justify-content-end">APR</div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-down-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
                <div class="coin-list-popup-row">
                  <div class="coin-list-popup-inner-div">
                    <div class="coin-list-popup-price-div">
                      <input type="radio" name="radio" value="48499" style="">
                      <div class="">$17,000</div>
                    </div>
                  </div>
                  <div class="coin-list-popup-inner-div"> 2022-11-22 </div>
                  <div class="coin-list-popup-apr-div">
                    <div class="coin-list-popup-apr-up-sts">66.55%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2 pb-4">
              <button type="button" class="btn btn-yellow w-100">Confirm</button>
            </div>
          </div>
        </div>
      </div>

    <div class="demo_2 hide" id="calculate_coin">
      <div class="wm-custom-modal-diolog">
        <div class="wm-custom-modal-body">
          <div class="wm-custom-modal-header">
            <span>Select a settlement </span>
            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
            </svg>
          </div>
          <div class="wm-custom-modal-max-height mb-3">
            <div id="show_calculate_coin_modal"></div>
          </div>
        </div>
      </div>
    </div>
</div>





<!-----------------------------------------modal-------------------------------------------------->
<div id="Risk_Warning">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
          <div class="wm-custom-modal-header mb-0">
        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
          <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
        </svg>
        </div>
        <div class="px-4">
          <div class="mb-3 text-center">
            <img class="warning-img" src="{{ asset('img/assets/img/warning.svg') }}">
          </div>
          <h3 class="title mb-3 text-center">Risk Warning</h3>
          <div class="text"> You may lose more cryptocurrency than initially subscribed. Subscribed assets are locked until the Settlement Date and subject to market volatility. Wealthmark does not assume liability for any losses incurred from price fluctuations. Cryptocurrency trading is subject to high market risk. Please make your trades cautiously. </div>
          <div class="mt-5 mb-4">
            <a href="#" class="btn-yellow d-block text-center text-white"> OK </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















  @include('template.country_language')
    @include('template.web_footer')

 <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>



   <script>
            $('.switch input').on('change', function(){
                var dad = $(this).parent();
                    if($(this).is(':checked'))
                        dad.addClass('switch-checked');
                    else
                        dad.removeClass('switch-checked');
            });
$(document).ready(function(){
        $('.switch_input').change(function(){
            if($('.switch_input:checked').is(":checked")){
                $('#Beginner_Mode_on').show();
                $('#biginner_mode_of').hide();
            }else{
                $('#Beginner_Mode_on').hide();
                $('#biginner_mode_of').show();
            }
        });
    });


$(".di-coin-list-div").on("click", ".di-coin-list", function () {
    $(this).addClass("di-coin-list-active").removeClass("di-coin-list");
    $(this).children(".di-coin-list-img-tick").attr("src","{{ asset('img/wm-card_tick.svg') }}");
    $(this).siblings(".di-coin-list-active").removeClass("di-coin-list-active").addClass("di-coin-list");
    $(this).siblings(".di-coin-list").children(".di-coin-list-img-tick").attr("src","{{ asset('img/wm-not_selected_tick.svg') }}")
});

//   ------------------------
        $(".di-get-start-rgt-lft-swt-tbn-div").on("click", ".di-get-start-rgt-lft-swt-tbn", function () {
            $(this).addClass("btn-yellow").removeClass("di-get-start-rgt-lft-swt-tbn");
            $(this).siblings(".btn-yellow").removeClass("btn-yellow").addClass("di-get-start-rgt-lft-swt-tbn");

        });
    //   ------------------------
        $("#open_sell_btc").click(function() {
             $("#Sell_BTC").addClass("show").removeClass("hide");
             $("#buy_BTC").addClass("hide").removeClass("show");
         });
        $("#open_buy_btc").click(function() {
                $("#Sell_BTC").addClass("hide").removeClass("show");
                $("#buy_BTC").addClass("show").removeClass("hide");
         });

 //   -----------show more coin top-------------

         $("#Show_more_btn").click(function() {
             $("#coin_opt_desk").addClass("hide").removeClass("show");
             $("#more_coin_div").addClass("show").removeClass("hide");
             $("#Show_more_btn").addClass("hide").removeClass("show");
             $("#Show_less_btn").addClass("show").removeClass("hide");
         });
         $("#Show_less_btn").click(function() {
             $("#coin_opt_desk").addClass("show").removeClass("hide");
             $("#more_coin_div").addClass("hide").removeClass("show");
             $("#Show_more_btn").addClass("show").removeClass("hide");
             $("#Show_less_btn").addClass("hide").removeClass("show");
         });

// ----------------------------------------
        $(".date-wise-filter").on("click", ".date-wise-filter-div", function () {
            $(this).children(".date-wise-filter--txt").addClass("active");
            $(this).siblings(".date-wise-filter-div").children(".date-wise-filter--txt").removeClass("active");

        });
// ----------------------------

$(function(){
  var desktopForm = $('#apend_div').html();
  $(window).on('load resize', function(){
    if ($(window).width() <= 1279) {
        $( "#apend_div_child-1" ).appendTo( "#apend_div" );
        $( "#apend_div_child-2" ).appendTo( "#apend_div" );
    }
    else {
      $( "#apend_div_child-1" ).appendTo( ".Return_Calculator_div" );
      $( "#apend_div_child-2" ).appendTo( ".Return_Calculator_div" );

    }
  });
});


function openModal(id){

    const a = id;
    $("."+a).removeClass("hide").siblings().addClass("hide");
    $("."+a).parent().removeClass("hide");
    $("."+a).parent().addClass("custom-modal-bck-bg")
}
  $(".wm-custom-modal-close").click(function() {
            $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

        });


$(window).on('load', function () {
  $('#Risk_Warning').children().addClass('custom-modal-bck-bg').removeClass('hide');
  });


   </script>

    </body>
</html>























