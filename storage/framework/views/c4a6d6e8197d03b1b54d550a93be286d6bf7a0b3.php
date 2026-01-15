  <!DOCTYPE html>
  <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Card Deposit</title>
      <?php echo $__env->make('template.web_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <link rel='stylesheet' href="<?php echo e(('../assets/css/deepak_custom.css')); ?>">
      <style>
      .hover-border-yellow:hover{
          border-color: #fdc116 !important;
      }
      .hover-shadow-sm:hover{
         box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
      }


     </style>




      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->

      <!--<style>-->
      <!--@media(max-width:768px) {-->
      <!--    .earn-search-div-main {-->
      <!--        display: block;-->
      <!--    }-->

      <!--    .coin-swap-from {-->
      <!--        border: 1px solid #ededed;-->
      <!--        height: 48px;-->
      <!--    }-->
      <!--}-->

      <!--#header {-->
      <!--    background: white;-->
      <!--}-->

      <!--@media screen and (min-width: 768px) {-->
      <!--    .under-maintance {-->
      <!--        max-width: 50%;-->

      <!--    }-->

      <!--    .under-maintance-div {-->
      <!--        padding: 50px 0px;-->
      <!--        text-align: center;-->
      <!--    }-->
      <!--}-->

      <!--input[type='radio']:after {-->
      <!--    width: 18px;-->
      <!--    height: 18px;-->
      <!--    border-radius: 15px;-->
      <!--    top: -3.5px;-->
      <!--    left: -2px;-->
      <!--    position: relative;-->
      <!--    background-color: white;-->
      <!--    content: '';-->
      <!--    display: inline-block;-->
      <!--    visibility: visible;-->
      <!--    border: 1px solid #1c1c1c;-->
      <!--}-->

      <!--input[type='radio']:checked:after {-->
      <!--    width: 16px;-->
      <!--    height: 16px;-->
      <!--    border-radius: 15px;-->
      <!--    top: -2px;-->
      <!--    left: -1px;-->
      <!--    position: relative;-->
      <!--    background-color: #ffa500;-->
      <!--    content: '';-->
      <!--    display: inline-block;-->
      <!--    visibility: visible;-->
      <!--    border: 2px solid #4e4e4e;-->
      <!--}-->
      <!--</style>-->


  </head>

  <body class="bg-white">
      <?php echo $__env->make('template.web_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light-blue  d-sm-flex p-2 py-3 align-items-center justify-content-between">
                <h3 class="m-0">Deposit Fiat</h3>
                <div>
                    <a href="javascript:void(0)" class="btn-yellow d-inline-block">Order History</a> &nbsp;  <a href="javascript:void(0)" class="btn-blue d-inline-block">Order History</a>
                </div>
            </div>

            <div class="col-md-12 p-0">
                    <div class="dashboard-tabpills">

                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="recommended-tab" data-bs-toggle="pill" data-bs-target="#recommended" type="button" role="tab" aria-controls="recommended" aria-selected="false">Recommended</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="other-methods-tab" data-bs-toggle="pill" data-bs-target="#other-methods" type="button" role="tab" aria-controls="other-methods" aria-selected="false">Other Methods</button>
                        </li>


                        </ul>

                        <div class="tab-content mt-3" id="pills-tabContent ">
                            <div class="tab-pane fade active show" id="recommended" role="tabpanel" aria-labelledby="recommended-tab">
                                <div class="row">
                                  <div class="col-sm-4 ">
                                    <div class="d-sm-flex align-items-center p-2 border shadow-sm rounded mx-1 mb-1">
                                    <div class="children-align-middle me-2">
                                        <img src="https://wealthmark.io/assets/img/deposit-type-icon-1.png" class="max-width-30px">
                                    </div>
                                    <div class="">
                                         <span class="fs-16 text-black">Bank Transfer (SEPA) </span>
                                        <div class="fs-12 text-muted">1EUR Discounted Transaction Fee,  1-3 business days
                                        </div>
                                    </div>
                                     </div>
                                </div>
                                   <div class="col-sm-4 ">
                                    <div class="d-sm-flex align-items-center p-2 border shadow-sm rounded mx-1 mb-1">
                                    <div class="children-align-middle me-2">
                                        <img src="https://wealthmark.io/assets/img/deposit-type-icon-1.png" class="max-width-30px">
                                    </div>
                                    <div class="">
                                         <span class="fs-16 text-black">Bank Transfer (SEPA) </span>
                                        <div class="fs-12 text-muted">1EUR Discounted Transaction Fee,  1-3 business days
                                        </div>
                                    </div>
                                     </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="d-sm-flex align-items-center p-2 border shadow-sm rounded mx-1 mb-1">
                                    <div class="children-align-middle me-2">
                                        <img src="https://wealthmark.io/assets/img/deposit-type-icon-1.png" class="max-width-30px">
                                    </div>
                                    <div class="">
                                         <span class="fs-16 text-black">Bank Transfer (SEPA) </span>
                                        <div class="fs-12 text-muted">1EUR Discounted Transaction Fee,  1-3 business days
                                        </div>
                                    </div>
                                </div>
                                </div></div>
                            </div>

                            <div class="tab-pane fade" id="other-methods" role="tabpanel" aria-labelledby="other-methods-tab">

                            </div>

                        </div>
                    </div>

            </div>
            </div>
        </div>
    </div>
</section>



 <section class="deposit-fun-account-block bg-light-blue">
          <div class="container">
              <div class="row">
                  <div class="sec-title text-left">
                      <span class="title">Know About</span>
                      <h2 class="heading-h2">Fund Your Account with <span class="yellow-text">Fiat Currencies</span>
                      </h2>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                      <div class="card text-center hover-border-yellow hover-shadow-sm h-100">
                          <div class="card-body d-flex align-items-center justify-content-between flex-column">
                              <div>
                              <img src="<?php echo e(asset('assets/img/card-deposit/experienced-trader.png')); ?>" class="max-width-80px max-height-80px mb-4" alt="cash-balance-img" />
                              <h5 class="card-title">Easy for both new & experienced trader</h5>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                             </div>

                              <div class="read-more-block">
                                  <a href="#" class="btn btn-yellow shadow"> Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                      <div class="card text-center hover-border-yellow hover-shadow-sm h-100">
                          <div class="card-body d-flex align-items-center justify-content-between flex-column">
                              <img src="<?php echo e(asset('assets/img/card-deposit/fiat-currency.png')); ?>" class="max-width-80px max-height-80px mb-4" alt="cash-balance-img" />
                              <h5 class="card-title">WealthMark offers deposit with fiat currency</h5>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                              <div class="read-more-block">
                                  <a href="#" class="btn btn-yellow shadow"> Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                      <div class="card text-center hover-border-yellow hover-shadow-sm h-100">
                          <div class="card-body d-flex align-items-center justify-content-between flex-column">
                              <img src="<?php echo e(asset('assets/img/card-deposit/following-currencies.png')); ?>" class="max-width-80px max-height-80px mb-4" alt="cash-balance-img" />
                              <h5 class="card-title">WealthMark supports the following currencies</h5>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                              <div class="read-more-block">
                                  <a href="#" class="btn btn-yellow shadow shadow-none"> Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="why-deposit-EUR">
          <div class="container">
              <div class="row align-items-center justify-content-center justify-content-md-between">

                  <div class="col-12 col-lg-5 text-md-left mb-4 order-2 order-lg-1">
                      <div class="sec-title text-left">
                          <span class="title">Know About</span>
                          <h2 class="heading-h2">Why Deposit <span class="yellow-text">EUR with SEPA</span>Transfer ?
                          </h2>
                      </div>
                      <div class="text">Customers in Europe can deposit and withdraw EUR using SEPA bank transfer and
                          enjoy high spending limits and zero processing fees. Unlike credit card orders, SEPA transfers
                          carry no additional processing fee.</div>
                  </div>
                  <div class="col-12 col-lg-7 img-hover3 order-1 order-lg-2 text-center">
                      <figure>
                          <img src="<?php echo e(asset('assets/img/card-deposit/eur-with-sepa.png')); ?>"  class="max-width-500px" alt="cash-balance-img" />
                      </figure>
                  </div>
              </div>
          </div>
      </section>
   <section>
          <div class="container">
              <div class="bg-light-blue p-4">
              <div class="row align-items-center">
                  <div class="sec-title text-left">
                      <span class="title">Know About</span>
                      <h2 class="heading-h2">€ EUR <span class="yellow-text">Deposit</span> Options</h2>
                  </div>
                  <div class="col-12 col-md-12 col-lg-12">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered mb-0">
                              <thead>
                                  <tr>
                                      <td class="bg-white text-black fs-18" scope="col">Recommended</td>
                                      <td class="bg-white text-black fs-18" scope="col">Deposit Fees</td>
                                      <td class="bg-white text-black fs-18" scope="col">Processing Time</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Bank Transfer (SEPA)</td>
                                      <td>Zero</td>
                                      <td>0-3 business days* (Weekdays only)</td>
                                  </tr>
                                  <tr>
                                      <td>Bank Transfer (SEPA Instant)</td>
                                      <td>Zero</td>
                                      <td>Half an hour (24x7x365)</td>
                                  </tr>
                                  <tr>
                                      <td>Bank Transfer (SEPA)</td>
                                      <td>Zero</td>
                                      <td>0-3 business days* (Weekdays only)</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
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
                           <h2 class="heading-h2 mb-0">FAQs</h2>
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
    1.What is SEPA
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text"> It is shown by default, until the collapse plugin adds the appropriate classes   that we use to   style each element.  </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
 How long does the deposit take?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">Wealthmark Pay transactions are usually  confirmed instantly.</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     Can I pay with Bitcoin
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">You can access your Wealthmark Pay Wallet by clicking [Wallets] - [Funding] - [Pay] on your Wealthmark App.</div>
      </div>
    </div>
  </div>



</div>
</div>
</section>







<!--      <section class="card-deposit-first-section">-->
<!--          <div class="container">-->
<!--              <div class="row" id="card-deposti-heading-row-top">-->
<!--                  <div class="col-lg-12 col-md-12">-->
<!--                      <h2 class="d-flex float-start">Deposit Fiat</h2>-->
<!--                      <a class="d-flex float-start btn btn-yellow shadow m-2">Order History <svg width="16"-->
<!--                              class="deposite-arrow-right" height="16" fill="currentColor" class="bi bi-arrow-right"-->
<!--                              viewBox="0 0 16 16">-->
<!--                              <path fill-rule="evenodd"-->
<!--                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">-->
<!--                              </path>-->
<!--                          </svg></a>-->
<!--                      <a class="d-flex float-end btn btn-yellow shadow m-2">Deposit Crypto <svg width="16"-->
<!--                              class="deposite-arrow-right" height="16" fill="currentColor" class="bi bi-arrow-right"-->
<!--                              viewBox="0 0 16 16">-->
<!--                              <path fill-rule="evenodd"-->
<!--                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">-->
<!--                              </path>-->
<!--                          </svg></a>-->
<!--                  </div>-->
<!--              </div>-->

<!--              <div class="row deposit-card-first-row mt-2">-->
<!--                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
<!--                      <div class="card-deposit-top-block">-->
<!--                          <h2>1. Select currency </h2><br />-->
<!--                          <label>₹ Currency </label>-->
<!--                          <div class="input-group mb-3">-->
<!--                              <div class="label position-relative">-->
<!--                                  <div class="earn-search-div-main">-->
<!--                                      <div class="lf-select_coin-to" id="earn-search-coin-filter">-->
<!--                                          <div class=" coin-swap-from m-0">-->
<!--                                              <input type="text" value="16" class="lf-select-coin-to-input">-->
<!--                                              <div class="wm-input-suffix ">-->
<!--                                                  <div class="lf-select-coin-to-drpd">-->
<!--                                                      <svg viewBox="0 0 24 24" fill="none"-->
<!--                                                          class="lf-select-coin-to-icn">-->
<!--                                                          <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z"-->
<!--                                                              fill="currentColor"></path>-->
<!--                                                      </svg>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                          </div>-->

<!--                                          <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">-->

<!--                                              <div class="wm-dropdown-optn-item-div">-->
<!--                                                  <img id="select_coin_img" class="wm-dropdown-optn-item-img"-->
<!--                                                      src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
<!--                                                  <div id="select_coin_text" class="wm-dropdown-optn-item-txt">USDT/ETH-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                          </div>-->

<!--                                          <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">-->
<!--                                              <div class="p-3">-->
<!--                                                  <div class=" wm-dropdown-srch-div">-->
<!--                                                      <div class="wm-input-prefix ">-->
<!--                                                          <svg viewBox="0 0 24 24" fill="none"-->
<!--                                                              class=" wm-dropdown-search-icn">-->
<!--                                                              <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                                                  d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"-->
<!--                                                                  fill="currentColor"></path>-->
<!--                                                          </svg>-->
<!--                                                      </div>-->
<!--                                                      <input type="text" class="wm-dropdown-search-input" value="">-->
<!--                                                      <div class="wm-input-suffix ">-->
<!--                                                          <svg viewBox="0 0 24 24" fill="none"-->
<!--                                                              class=" wm-dropdown-search-cross-icn">-->
<!--                                                              <path fill-rule="evenodd" clip-rule="evenodd"-->
<!--                                                                  d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z"-->
<!--                                                                  fill="currentColor"></path>-->
<!--                                                          </svg>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                              <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">-->
<!--                                                  <li role="option" id="16" title="16" class="wm-dropdown-optn-item "-->
<!--                                                      onclick="changeSrc2(this.id)" style="display: list-item;">-->
<!--                                                      <div class="wm-dropdown-optn-item-inner">-->

<!--                                                          <div class="wm-dropdown-optn-item-div">-->
<!--                                                              <img class="wm-dropdown-optn-item-img"-->
<!--                                                                  src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

<!--                                                              <div class="wm-dropdown-optn-item-txt">BTC/USD</div>-->

<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </li>-->
<!--                                                  <li role="option" id="17" title="17" class="wm-dropdown-optn-item "-->
<!--                                                      onclick="changeSrc2(this.id)" style="display: list-item;">-->
<!--                                                      <div class="wm-dropdown-optn-item-inner">-->


<!--                                                          <div class="wm-dropdown-optn-item-div">-->
<!--                                                              <img class="wm-dropdown-optn-item-img"-->
<!--                                                                  src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

<!--                                                              <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>-->
<!--                                                          </div>-->


<!--                                                      </div>-->
<!--                                                  </li>-->
<!--                                                  <li role="option" id="14" title="14" class="wm-dropdown-optn-item "-->
<!--                                                      onclick="changeSrc2(this.id)" style="display: none;">-->
<!--                                                      <div class="wm-dropdown-optn-item-inner">-->


<!--                                                          <div class="wm-dropdown-optn-item-div">-->
<!--                                                              <img class="wm-dropdown-optn-item-img"-->
<!--                                                                  src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

<!--                                                              <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>-->


<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </li>-->
<!--                                                  <li role="option" id="32" title="32" class="wm-dropdown-optn-item "-->
<!--                                                      onclick="changeSrc2(this.id)" style="display: list-item;">-->
<!--                                                      <div class="wm-dropdown-optn-item-inner">-->


<!--                                                          <div class="wm-dropdown-optn-item-div">-->
<!--                                                              <img class="wm-dropdown-optn-item-img"-->
<!--                                                                  src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

<!--                                                              <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>-->
<!--                                                          </div>-->


<!--                                                      </div>-->
<!--                                                  </li>-->
<!--                                                  <li role="option" id="34" title="34" class="wm-dropdown-optn-item "-->
<!--                                                      onclick="changeSrc2(this.id)" style="display: list-item;">-->
<!--                                                      <div class="wm-dropdown-optn-item-inner selected">-->


<!--                                                          <div class="wm-dropdown-optn-item-div">-->
<!--                                                              <img class="wm-dropdown-optn-item-img"-->
<!--                                                                  src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

<!--                                                              <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>-->
<!--                                                          </div>-->


<!--                                                      </div>-->
<!--                                                  </li>-->
<!--                                                  <li role="option" id="13" title="13" class="wm-dropdown-optn-item "-->
<!--                                                      onclick="changeSrc2(this.id)" style="display: none;">-->
<!--                                                      <div class="wm-dropdown-optn-item-inner">-->
<!--                                                          <div class="wm-dropdown-optn-item-div">-->
<!--                                                              <img class="wm-dropdown-optn-item-img"-->
<!--                                                                  src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

<!--                                                              <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </li>-->
<!--                                              </ul>-->
<!--                                          </div>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                          <br />-->
<!--                          <label>Deposit With</label>-->
<!--                          <ul class="nav nav-tabs" id="myTab" role="tablist">-->
<!--                              <li class="nav-item" role="presentation">-->
<!--                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab"-->
<!--                                      data-bs-target="#home" type="button" role="tab" aria-controls="home"-->
<!--                                      aria-selected="true">Recommended</button>-->
<!--                              </li>-->
<!--                              <li class="nav-item" role="presentation">-->
<!--                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab"-->
<!--                                      data-bs-target="#profile" type="button" role="tab" aria-controls="profile"-->
<!--                                      aria-selected="false">Other Methods</button>-->
<!--                              </li>-->
<!--                          </ul>-->
<!--                          <div class="tab-content" id="myTabContent">-->
<!--                              <div class="tab-pane fade show active" id="home" role="tabpanel"-->
<!--                                  aria-labelledby="home-tab">-->

<!--                                  <div class="row">-->
<!--                                      <div class="col-md-12">-->
<!--                                          <div class="deposit-type-block">-->
<!--                                              <div class="wm-card-deposit-vurnku">-->
<!--                                                  <div class="with-pinter css-6smcqa">-->
<!--                                                      <div class="wm-card-deposit-133p0j0">-->
<!--                                                          <div class="wm-card-deposit-6pok6e">-->
<!--                                                              <input type="radio" name="deposit-type" value="">-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                      <div class="wm-card-deposit-11v4451">-->
<!--                                                          <div class="children-align-middle css-18bhcco">-->
<!--                                                              <img src="<?php echo e(asset('assets/img/deposit-type-icon-1.png')); ?>"-->
<!--                                                                  class="wm-card-deposit-1jwu34t">-->
<!--                                                              <span data-bn-type="text" class="wm-card-deposit-8mokm4">Bank Transfer-->
<!--                                                                  (SEPA)</span>-->
<!--                                                          </div>-->
<!--                                                          <div class="wm-card-deposit-12z3w6y">-->
<!--                                                              <div class="wm-card-deposit-vurnku">1EUR Discounted Transaction Fee,-->
<!--                                                                  1-3 business days-->
<!--                                                              </div>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                                  <div class="with-pinter css-6smcqa">-->
<!--                                                      <div class="wm-card-deposit-133p0j0">-->
<!--                                                          <div class="wm-card-deposit-6pok6e">-->
<!--                                                              <input type="radio" name="deposit-type" value="">-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                      <div class="wm-card-deposit-11v4451">-->
<!--                                                          <div class="children-align-middle css-18bhcco"><img-->
<!--                                                                  src="<?php echo e(asset('assets/img/deposit-type-icon-2.png')); ?>"-->
<!--                                                                  class="wm-card-deposit-1jwu34t"><span data-bn-type="text"-->
<!--                                                                  class="wm-card-deposit-8mokm4">Easy Bank Payment</span></div>-->
<!--                                                          <div class="wm-card-deposit-12z3w6y">-->
<!--                                                              <div class="wm-card-deposit-vurnku">0.5EUR Fee, 1-3 Business Days-->
<!--                                                              </div>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                                  <div class="with-pinter css-6smcqa">-->
<!--                                                      <div class="wm-card-deposit-133p0j0">-->
<!--                                                          <div class="wm-card-deposit-6pok6e">-->
<!--                                                              <input type="radio" name="deposit-type" value="">-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                      <div class="wm-card-deposit-11v4451">-->
<!--                                                          <div class="children-align-middle css-18bhcco"><img-->
<!--                                                                  src="<?php echo e(asset('assets/img/deposit-type-icon-3.png')); ?>"-->
<!--                                                                  class="wm-card-deposit-1jwu34t"><span data-bn-type="text"-->
<!--                                                                  class="wm-card-deposit-8mokm4">Bank Card(Visa/MC)</span></div>-->
<!--                                                          <div class="wm-card-deposit-12z3w6y">-->
<!--                                                              <div class="wm-card-deposit-vurnku">1.8% Transaction Fee </div>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                          </div>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
<!--                                  <div class="row">-->
<!--                                      <div class="col-md-12">-->
<!--                                          <div class="deposit-type-block">-->
<!--                                              <div class="wm-card-deposit-vurnku">-->
<!--                                                  <div class="with-pinter css-6smcqa">-->
<!--                                                      <div class="wm-card-deposit-133p0j0">-->
<!--                                                          <div class="wm-card-deposit-6pok6e">-->
<!--                                                              <input type="radio" name="deposit-type-other" value="">-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                      <div class="wm-card-deposit-11v4451">-->
<!--                                                          <div class="children-align-middle css-18bhcco">-->
<!--                                                              <img src="<?php echo e(asset('assets/img/deposit-type-icon-1.png')); ?>"-->
<!--                                                                  class="wm-card-deposit-1jwu34t">-->
<!--                                                              <span data-bn-type="text" class="wm-card-deposit-8mokm4">P2P-->
<!--                                                                  Express</span>-->
<!--                                                          </div>-->
<!--                                                          <div class="wm-card-deposit-12z3w6y">-->
<!--                                                              <div class="wm-card-deposit-vurnku">0 Fee-->
<!--                                                              </div>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                                  <div class="with-pinter css-6smcqa">-->
<!--                                                      <div class="wm-card-deposit-133p0j0">-->
<!--                                                          <div class="wm-card-deposit-6pok6e">-->
<!--                                                              <input type="radio" name="deposit-type-other" value="">-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                      <div class="wm-card-deposit-11v4451">-->
<!--                                                          <div class="children-align-middle css-18bhcco"><img-->
<!--                                                                  src="<?php echo e(asset('assets/img/deposit-type-icon-2.png')); ?>"-->
<!--                                                                  class="wm-card-deposit-1jwu34t"><span data-bn-type="text"-->
<!--                                                                  class="wm-card-deposit-8mokm4">Advcash Account Balance</span>-->
<!--                                                          </div>-->
<!--                                                          <div class="wm-card-deposit-12z3w6y">-->
<!--                                                              <div class="wm-card-deposit-vurnku">0 Fee <small>Supports SEPA-->
<!--                                                                      transfer (€1 deposit fee) </small>-->
<!--                                                              </div>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                          </div>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                              <a class="btn btn-warning d-block mt-3">Continue </a>-->
<!--                              <div class="text mt-1 text-center">This service is powered by wealth mark UAB. Your-->
<!--                                  information is used for identity verification only, and will be kept secure by-->
<!--                                  wealth mark UAB. </div>-->
<!--                          </div>-->

<!--                      </div>-->
<!--                  </div>-->

<!--                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pt-3">-->
<!--                      <div class="row">-->
<!--                          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">-->
<!--                              <button type="button" class="btn p-0" data-bs-toggle="tooltip" data-bs-placement="top"-->
<!--                                  title="An appeal can be submitted if you have already submitted your deposit order but have exceeded the estimated processing duration.Appeal Now >"><i-->
<!--                                      class="bi bi-download"></i> Appeal</button><br />-->
<!--                              <h2 class="d-flex float-start">FAQ</h2>-->
<!--                              <h2 class="d-flex float-end"><a-->
<!--                                      class="deposit-faq-view-more text-decoration-underline">View more </a></h2>-->
<!--                          </div>-->
<!--                      </div>-->

<!--                      <div class="row">-->

<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </section>-->

<!--      <section class="deposit-fun-account-block" id="deposit-fun-account-section">-->
<!--          <div class="container">-->
<!--              <div class="row">-->
<!--                  <div class="sec-title text-left">-->
<!--                      <span class="title">Know About</span>-->
<!--                      <h2 class="heading-h2">Fund Your Account with <span class="yellow-text">Fiat Currencies</span>-->
<!--                      </h2>-->
<!--                  </div>-->
<!--              </div>-->
<!--              <div class="row mt-5">-->
<!--                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">-->
<!--                      <div class="card">-->
<!--                          <div class="card-body">-->
<!--                              <img src="<?php echo e(asset('assets/img/card-deposit/experienced-trader.png')); ?>" class="img-fluid max-width-80px mb-3"-->
<!--                                  alt="cash-balance-img" />-->
<!--                              <h5 class="card-title">Easy for both new & experienced trader</h5>-->
<!--                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do-->
<!--                                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>-->
<!--                              <div class="read-more-block">-->
<!--                                  <a href="#" class="btn btn-yellow shadow"> Read More</a>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">-->
<!--                      <div class="card">-->
<!--                          <div class="card-body">-->
<!--                              <img src="<?php echo e(asset('assets/img/card-deposit/fiat-currency.png')); ?>" class="img-fluid max-width-80px mb-3"-->
<!--                                  alt="cash-balance-img" />-->
<!--                              <h5 class="card-title">WealthMark offers deposit with fiat currency</h5>-->
<!--                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do-->
<!--                                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>-->
<!--                              <div class="read-more-block">-->
<!--                                  <a href="#" class="btn btn-yellow shadow"> Read More</a>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">-->
<!--                      <div class="card">-->
<!--                          <div class="card-body">-->
<!--                              <img src="<?php echo e(asset('assets/img/card-deposit/following-currencies.png')); ?>" class="img-fluid max-width-80px mb-3" alt="cash-balance-img" />-->
<!--                              <h5 class="card-title">WealthMark supports the following currencies</h5>-->
<!--                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do-->
<!--                                  eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>-->
<!--                              <div class="read-more-block">-->
<!--                                  <a href="#" class="btn btn-yellow shadow"> Read More</a>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </section>-->



<!--      <section class="why-deposit-EUR" id="deposti-eur">-->
<!--          <div class="container">-->
<!--              <div class="row align-items-center justify-content-center justify-content-md-between">-->

<!--                  <div class="col-12 col-lg-5 text-md-left mb-4 order-2 order-lg-1">-->
<!--                      <div class="sec-title text-left">-->
<!--                          <span class="title">Know About</span>-->
<!--                          <h2 class="heading-h2">Why Deposit <span class="yellow-text">EUR with SEPA</span>Transfer ?-->
<!--                          </h2>-->
<!--                      </div>-->
<!--                      <div class="text">Customers in Europe can deposit and withdraw EUR using SEPA bank transfer and-->
<!--                          enjoy high spending limits and zero processing fees. Unlike credit card orders, SEPA transfers-->
<!--                          carry no additional processing fee.</div>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-lg-7 img-hover3 order-1 order-lg-2">-->
<!--                      <figure>-->
<!--                          <img src="<?php echo e(asset('assets/img/card-deposit/eur-with-sepa.png')); ?>"-->
<!--                              class="img-fluid d-block mx-auto rotate-img-animation" alt="cash-balance-img" />-->
<!--                      </figure>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </section>-->


<!--      <section class="why-deposit-EUR-block" id="deposti-eur-table">-->
<!--          <div class="container">-->
<!--              <div class="row align-items-center justify-content-center justify-content-md-between">-->
<!--                  <div class="sec-title text-left">-->
<!--                      <span class="title">Know About</span>-->
<!--                      <h2 class="heading-h2">€ EUR <span class="yellow-text">Deposit</span> Options</h2>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-md-12 col-lg-12 img-hover3 order-1 order-lg-2">-->
<!--                      <div class="table-responsive">-->
<!--                          <table class="table table-hover table-bordered">-->
<!--                              <thead>-->
<!--                                  <tr>-->
<!--                                      <th scope="col">Recommended</th>-->
<!--                                      <th scope="col">Deposit Fees</th>-->
<!--                                      <th scope="col">Processing Time</th>-->
<!--                                  </tr>-->
<!--                              </thead>-->
<!--                              <tbody>-->
<!--                                  <tr>-->
<!--                                      <td>Bank Transfer (SEPA)</td>-->
<!--                                      <td>Zero</td>-->
<!--                                      <td>0-3 business days* (Weekdays only)</td>-->
<!--                                  </tr>-->
<!--                                  <tr>-->
<!--                                      <td>Bank Transfer (SEPA Instant)</td>-->
<!--                                      <td>Zero</td>-->
<!--                                      <td>Half an hour (24x7x365)</td>-->
<!--                                  </tr>-->
<!--                                  <tr>-->
<!--                                      <td>Bank Transfer (SEPA)</td>-->
<!--                                      <td>Zero</td>-->
<!--                                      <td>0-3 business days* (Weekdays only)</td>-->
<!--                                  </tr>-->
<!--                              </tbody>-->
<!--                          </table>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </section>-->
      <!-- popup modal card deposit -->
      <!-- Modal -->
<!--      <div class="modal fade" id="card-deposit-select-currency" tabindex="-1" aria-labelledby="card-deposit-select-currencyLabel" aria-hidden="true">-->
<!--          <div class="modal-dialog">-->
<!--              <div class="modal-content">-->
<!--                  <div class="modal-header">-->
<!--                      <h5 class="modal-title" id="card-deposit-select-currencyLabel">Select Currency</h5>-->
<!--                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                  </div>-->
<!--                  <div class="modal-body">-->
<!--                      <div class="row">-->
<!--                          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
<!--                              <input type="text" class="form-control" placeholder="Search" />-->
<!--                          </div>-->
<!--                          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
<!--                              <div class="select-country-group">-->
<!--                                  <div class="select-currency-tab">-->
<!--                                      <img src="<?php echo e(asset('assets/img/currency-1.png')); ?>" class="img-fluid"-->
<!--                                          alt="cash-balance-img" />-->
<!--                                      <div class="currency-detail">-->
<!--                                          <h5>AED </h5>-->
<!--                                          <span>United Arab Emirates dirham </span>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                                  <div class="select-currency-tab">-->
<!--                                      <img src="<?php echo e(asset('assets/img/currency-2.png')); ?>" class="img-fluid"-->
<!--                                          alt="cash-balance-img" />-->
<!--                                      <div class="currency-detail">-->
<!--                                          <h5>AED </h5>-->
<!--                                          <span>United Arab Emirates dirham </span>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                                  <div class="select-currency-tab">-->
<!--                                      <img src="<?php echo e(asset('assets/img/currency-3.png')); ?>" class="img-fluid"-->
<!--                                          alt="cash-balance-img" />-->
<!--                                      <div class="currency-detail">-->
<!--                                          <h5>AED </h5>-->
<!--                                          <span>United Arab Emirates dirham </span>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                                  <div class="select-currency-tab">-->
<!--                                      <img src="<?php echo e(asset('assets/img/currency-4.png')); ?>" class="img-fluid"-->
<!--                                          alt="cash-balance-img" />-->
<!--                                      <div class="currency-detail">-->
<!--                                          <h5>AED </h5>-->
<!--                                          <span>United Arab Emirates dirham </span>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                                  <div class="select-currency-tab">-->
<!--                                      <img src="<?php echo e(asset('assets/img/currency-5.png')); ?>" class="img-fluid"-->
<!--                                          alt="cash-balance-img" />-->
<!--                                      <div class="currency-detail">-->
<!--                                          <h5>AED </h5>-->
<!--                                          <span>United Arab Emirates dirham </span>-->
<!--                                      </div>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  <div class="modal-footer">-->
<!--                      <button type="button" class="btn btn-yellow shadow" data-bs-dismiss="modal">Close</button>-->
<!--                      <button type="button" class="btn btn-primary">Save changes</button>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div>-->


<!--    <section>-->
<!--   <div class="container">-->
<!--      <div class="faq-inner-block" id="faq-inner-section">-->
<!--         <div class="col-md-12">-->
<!--            <div class="accordion" id="accordian-api">-->
<!--               <div class="accordion-item">-->
<!--                  <h2 class="accordion-header" id="headingOne">-->
<!--                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseOne" aria-expanded="true"  aria-controls="collapseOne">-->
<!--                     1.What is SEPA?-->
<!--                     </button>-->
<!--                  </h2>-->
<!--                  <div id="collapseOne" class="accordion-collapse collapse "  aria-labelledby="headingOne" data-bs-parent="#accordian-api">-->
<!--                     <div class="accordion-body">-->
<!--                        <div class="text">It is shown by-->
<!--                           default, until the collapse plugin adds the appropriate classes-->
<!--                           that we use to-->
<!--                           style each element.-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="accordion-item">-->
<!--                  <h2 class="accordion-header" id="headingThree">-->
<!--                     <button class="accordion-button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseThree"   aria-expanded="false" aria-controls="collapseThree">-->
<!--                     3.How long does the deposit take?-->
<!--                     </button>-->
<!--                  </h2>-->
<!--                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordian-api">-->
<!--                     <div class="accordion-body">-->
<!--                        <div class="text"> Wealthmark Pay transactions are usually-->
<!--                           confirmed instantly.-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="accordion-item">-->
<!--                  <h2 class="accordion-header" id="headingfour">-->
<!--                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">-->
<!--                     4. Can I pay with Bitcoin?-->
<!--                     </button>-->
<!--                  </h2>-->
<!--                  <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordian-api">-->
<!--                     <div class="accordion-body">-->
<!--                        <div class="text">You can access your Wealthmark Pay Wallet by-->
<!--                           clicking [Wallets] --->
<!--                           [Funding] - [Pay] on your Wealthmark App.-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->

   <!--<div data-target-modal="demo">Open_modal</div>-->
   <!-- <div data-target-modal="demo1">Open_modal</div>-->
   <!--  <div data-target-modal="demo2">Open_modal</div>-->


   <!--<div id="demo" class="hide">-->

   <!--    modal div have id with demo-->
   <!--</div>-->
   <!--<div id="demo1" class="hide">-->

   <!--    modal div have id with demo-->
   <!--</div>-->
   <!--<div id="demo2" class="hide">-->

   <!--    modal div have id with demo-->
   <!--</div>-->






      <?php echo $__env->make('template.web_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="<?php echo e(asset('assets/css/accordian_bootstrap.min.js')); ?>"></script>




  </body>
  </html>
<?php /**PATH D:\wealthMark\resources\views/web/card_deposite.blade.php ENDPATH**/ ?>