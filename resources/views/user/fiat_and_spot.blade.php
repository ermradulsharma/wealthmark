<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
     @include('template.web_css')

     <style>
           .sidebar-nav {
        display: block;
    }
    .balance-low-value td{
        padding:20px 10px;
    }

    .balence-status-div{
        margin:10px 0px;
    }

.right-sidebar{
   background: white;
    max-width: 350px;
    width: 100%;
    position: fixed;
    top: 0px;
    right: -350px;
    opacity: 0;
    visibility: hidden;
    height: 100%;
    z-index: 99999999999;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    transition: transform 0.5s;
}

.right-sidebar.open{
    right: 0px;
     opacity: 1;
    visibility: visible;
}
.right-sidebar .heading{
    font-size:20px;
    font-weight:800 !important;
}
.right-sidebar .sub-heading{
    font-size:16px;

}


     </style>

</head>


<body>
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')

          <div class="container-fluid p-0 w-100 mb-3">
        <div class="bg-light-blue p-3 w-100">
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-3">
                <h2 class="fw-bold">Fiat & Spot</h2>
                <div class="h-divider mt-2 mb-3"></div>

                <div class="d-flex align-items-center flex-nowrap overflow-auto ">
                        <a class="btn btn-yellow mx-2" data-bs-toggle="modal" data-bs-target="#deposit-modal">Deposit</a>
                        <a class="btn btn-blue">Withdraw</a>
                        <a class="btn btn-blue"data-bs-toggle="tooltip" data-bs-placement="bottom" title=""  data-bs-original-title="Use Wealthmark pay to send tokens to other wealthmark users at zero fees.">Send</a>
                        <a class="btn btn-blue overview-transfer-popup-modal">Transfer</a>
                        <a class="btn btn-blue">Transaction History</a>
                        <a class="btn btn-blue" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Transfer cons or tokens between wealthmar.com account and wealthmark chain wallet.">
                            <i  class="bi bi-paperclip"></i>
                            Wallet History
                        </a>
                    </div>
                     <div class="row spot-balance-row mt-5" id="spot-fiat-balance">
                <div class="col-md-4">
                    <div class="balence-status-div">
                        <div class="d-flex align-items-center ">
                            <h5 class="mb-0">Estimated Balance
                                <i id="showbalence" class="bi bi-eye asset-eye-icon" onClick="showhideBal(this.id)"></i>
                                <i id="hidebalence" class="bi bi-eye-slash asset-eye-icon" style="display:none"  onClick="showhideBal(this.id)"></i>
                            </h5>
                        </div>
                        <div class="d-flex align-items-center hide-when-astix asset-balence">
                            <span class="h4 me-2 fw-bold est-balance">0.00000000 </span>
                            <span class="h4 fw-bold est-balance"> BTC &nbsp;</span>
                            <span class="h4 est-balance fw-bold text-muted">≈ &nbsp; ₹0.000000</span>
                        </div>
                   </div>
                </div>
                 <div class=" col-md-2">
                </div>
                 <div class=" col-md-2">
                     <div class="balence-status-div">
                            <div class="mini-title">Spot balance</div>
                            <div class="bal-coin asset-balence">0.00000000 BTC</div>
                            <div class="bal-curr asset-balence">≈ ₹0.000000</div>
                        </div>
                         </div>
                        <div class="col-md-2 col-sm-6 col-6">
                              <div class="balence-status-div">
                            <div class="mini-title">Fiat balance</div>
                            <div class="bal-coin asset-balence">0.00000000 BTC</div>
                            <div class="bal-curr asset-balence">≈ ₹0.000000</div>
                        </div>
</div>
                        <div class="col-md-2 col-sm-6 col-6">
                              <div class="balence-status-div">
                            <a href="" class="text-decoration-underline text-dark">
                                <div class="mini-title ">Today's PNL<span
                                        class="bi bi-chevron-right p-1 bg-light rounded ms-2 h6 mb-0"></span></div>
                            </a>
                            <div class="bal-coin asset-balence">--</div>
                            <div class="bal-curr asset-balence">--</div>
                        </div>
               </div>
            </div>
                </div>


                 <div class="bg-white shadow-none border-0 px-4 py-3 mb-3">
                    <div class="row overview-fund-crypto-box-head align-items-center">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                            <!--<h4>Fund Your Account</h4>-->
                             <h2 class="fw-bold">Fund Your Account</h2>
                            <div class="fs-14">
                                Wealthmark supports multiple options to fund your account. Find a method that suits you the most.
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-2 skip-guide-txt">
                            <a class="text-warning text-decoration-underline" id="overview-skip-guide-btn">Skip
                                Guide</a>
                        </div>

                         <div class="h-divider mt-2  mb-3"></div>

                         <div class="col-md-12">
                             <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                               <img src="{{ asset('img/dashboard-icons/bank-account.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Buy Crypto <span id="video-Buy" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Buy crypto directly with cash, hassle-free and suggested for new users.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="buy-crypto-btn" class="btn-yellow shadow-none">
                                              Buy
                                          </a>


                                      </div>
                                  </div>
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                                <img src="{{ asset('img/dashboard-icons/crypto_deposit.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Crypto Deposit <span id="video-Deposit" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Conveniently deposit crypto from another account to your Wealthmark account.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="Deposit-btn" class="btn-default shadow-none">
                                              Deposit
                                          </a>


                                      </div>
                                  </div>
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                               <img src="{{ asset('img/dashboard-icons/Receive_Crypto.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Receive Crypto <span id="video-Receive" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Easily and securely receive crypto from other Wealthmark accounts.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="Receive-btn" class="btn-default shadow-none">
                                              Receive
                                          </a>


                                      </div>
                                  </div>
                         </div>
                    </div>

                </div>
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-3">

                        <div class="table-div-responsive">

                            <div class="tbl-1-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-img-div">
                                    <img src="{{ asset('img/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" />
                                </div>
                                <div class="tbl-content-div">
                                    <div class="tbl-bold-text">BTC</div>
                                    <div class="tbl-text">Bitcoin</div>
                                </div>
                            </div>
                            <div class="tbl-2-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-3-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-4-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-5-div">
                             <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-6-div">
                                <div class="tbl-actn-btn-div">
                                    <a href="javascript:void(0)" class="yellow-text">Buy</a>
                                    <a href="javascript:void(0)" class="yellow-text">Sell</a>
                                    <a href="javascript:void(0)" class="yellow-text">Deposit</a>
                                    <a href="javascript:void(0)" class="yellow-text">Withdraw</a>
                                    <a href="javascript:void(0)" class="yellow-text">Trade</a>
                                    <a href="javascript:void(0)" class="yellow-text">Earn</a>
                                     <a href="javascript:void(0)" class="yellow-text">Convert</a>

                                </div>
                            </div>
                            <div class="tbl-7-div">
                                <div class="tbl-icon-div">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>

                            <div class="tbl-div-expand">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                         <div class="table-div-responsive">

                            <div class="tbl-1-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-img-div">
                                    <img src="{{ asset('img/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" />
                                </div>
                                <div class="tbl-content-div">
                                    <div class="tbl-bold-text">BTC</div>
                                    <div class="tbl-text">Bitcoin</div>
                                </div>
                            </div>
                            <div class="tbl-2-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-3-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-4-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-5-div">
                             <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-6-div">
                                <div class="tbl-actn-btn-div">
                                    <a href="javascript:void(0)" class="yellow-text">Buy</a>
                                    <a href="javascript:void(0)" class="yellow-text">Sell</a>
                                    <a href="javascript:void(0)" class="yellow-text">Deposit</a>
                                    <a href="javascript:void(0)" class="yellow-text">Withdraw</a>
                                    <a href="javascript:void(0)" class="yellow-text">Trade</a>
                                    <a href="javascript:void(0)" class="yellow-text">Earn</a>
                                     <a href="javascript:void(0)" class="yellow-text">Convert</a>

                                </div>
                            </div>
                            <div class="tbl-7-div">
                                <div class="tbl-icon-div">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>

                            <div class="tbl-div-expand">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                         <div class="table-div-responsive">

                            <div class="tbl-1-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-img-div">
                                    <img src="{{ asset('img/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" />
                                </div>
                                <div class="tbl-content-div">
                                    <div class="tbl-bold-text">BTC</div>
                                    <div class="tbl-text">Bitcoin</div>
                                </div>
                            </div>
                            <div class="tbl-2-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-3-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-4-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-5-div">
                             <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-6-div">
                                <div class="tbl-actn-btn-div">
                                    <a href="javascript:void(0)" class="yellow-text">Buy</a>
                                    <a href="javascript:void(0)" class="yellow-text">Sell</a>
                                    <a href="javascript:void(0)" class="yellow-text">Deposit</a>
                                    <a href="javascript:void(0)" class="yellow-text">Withdraw</a>
                                    <a href="javascript:void(0)" class="yellow-text">Trade</a>
                                    <a href="javascript:void(0)" class="yellow-text">Earn</a>
                                     <a href="javascript:void(0)" class="yellow-text">Convert</a>

                                </div>
                            </div>
                            <div class="tbl-7-div">
                                <div class="tbl-icon-div">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>

                            <div class="tbl-div-expand">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                         <div class="table-div-responsive">

                            <div class="tbl-1-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-img-div">
                                    <img src="{{ asset('img/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" />
                                </div>
                                <div class="tbl-content-div">
                                    <div class="tbl-bold-text">BTC</div>
                                    <div class="tbl-text">Bitcoin</div>
                                </div>
                            </div>
                            <div class="tbl-2-div">
                                <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-3-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-4-div">
                            <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-5-div">
                             <div class="tbl-lbl-div">Heading here</div>
                                <div class="tbl-bold-text">00000000</div>
                                </div>
                            <div class="tbl-6-div">
                                <div class="tbl-actn-btn-div">
                                    <a href="javascript:void(0)" class="yellow-text">Buy</a>
                                    <a href="javascript:void(0)" class="yellow-text">Sell</a>
                                    <a href="javascript:void(0)" class="yellow-text">Deposit</a>
                                    <a href="javascript:void(0)" class="yellow-text">Withdraw</a>
                                    <a href="javascript:void(0)" class="yellow-text">Trade</a>
                                    <a href="javascript:void(0)" class="yellow-text">Earn</a>
                                     <a href="javascript:void(0)" class="yellow-text">Convert</a>

                                </div>
                            </div>
                            <div class="tbl-7-div">
                                <div class="tbl-icon-div">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>

                            <div class="tbl-div-expand">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>


                </div>


            </div>
        </div>


</div>





<div class="video-modal">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-600px">
            <div class="wm-custom-modal-body">
                <div class="wm-custom-modal-header">
                    <span>Fund Your Account</span>
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                        <path
                            d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 px-4">
                            <div class="fs-12 font-weight-bold text-center">
                              Wealthamrk  supports multiple options to fund your account. Find a method that suits you the best.
                            </div>
                            <div class="fund-div-outer">
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                              <img src="{{ asset('img/dashboard-icons/bank-account.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Buy Crypto <span id="video-Buy" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Buy crypto directly with cash, hassle-free and suggested for new users.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="buy-crypto-btn" class="btn-yellow shadow-none">
                                              Buy
                                          </a>


                                      </div>
                                  </div>
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                              <img src="{{ asset('img/dashboard-icons/crypto_deposit.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Crypto Deposit <span id="video-Deposit" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Conveniently deposit crypto from another account to your Wealthmark account.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="Deposit-btn" class="btn-default shadow-none">
                                              Deposit
                                          </a>


                                      </div>
                                  </div>
                        <div class="fund-div bg-light-blue shadow-sm mb-3">
                                      <div class="fund-div-text pe-5">
                                          <div class="">
                                               <img src="{{ asset('img/dashboard-icons/Receive_Crypto.svg') }}" alt="">
                                          </div>
                                          <div>
                                              <span> Receive Crypto <span id="video-Receive" class="video cursor-pointer" onClick="openVideo(this.id)"> <i class="bi bi-play-circle-fill"></i> Video Tutorial  </span> </span>
                                              <span>Easily and securely receive crypto from other Wealthmark accounts.</span>
                                          </div>
                                      </div>
                                      <div class="fund-div-btn">

                                          <a href="javascript:void(0)" id="Receive-btn" class="btn-default shadow-none">
                                              Receive
                                          </a>


                                      </div>
                                  </div>
    </div>
                        <div class="video-hide px-4">
                            <div id="appendVideo" class="py-3 bg-white">
                                <div class="video-section" style="">
                                    <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                        <source id="src-here" src="" type="video/mp4">
                                    </video>
                                    <div id="circle-play-b" class="video-play-button">
                                        <span></span>
                                    </div>
                                    <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                </div>
                            </div>
                            <button type="button" id="video-close" class="btn btn-yellow shadow mt-4 mb-3">Back</button>
                        </div>


                         <div class="mb-1 p-2"></div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="right-sidebar">
    <div class="right-sidebar-close p-3 py-1 d-flex align-items-center justify-content-end">
        <i class="bi bi-x fs-2 cursor-pointer"></i>
    </div>
    <div class="right-sidebar-body px-3 py-1">
        <div class="d-flex mb-3 align-items-center">
            <div class="me-3">
                <img src="{{ asset('img/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" class="max-width-30px">
            </div>
            <div class="tbl-content-div">
                                    <div class="tbl-bold-text">BTC</div>
                                    <div class="tbl-text">Bitcoin</div>
                                </div>
        </div>
        <div class="mb-2">
            <div class="heading">Holdings</div>
            <div class="fs-4 font-weight-bolder text-dark">0.00000000</div>
        </div>
        <div class="d-flex align-items-center justify-content-between py-1 px-2">
                <div class="sub-heading">
                    Available
                </div>
                <div class="fs-14 font-weight-bolder yellow-text">
                    0.00
                </div>
        </div>
        <div class="d-flex align-items-center justify-content-between py-1 px-2 ">
                <div class="sub-heading">
                    Available
                </div>
                <div class="fs-14 font-weight-bolder yellow-text">
                    0.00
                </div>
        </div>
        <div class="d-flex align-items-center justify-content-between py-1 px-2">
                <div class="sub-heading">
                    Available
                </div>
                <div class="fs-14 font-weight-bolder yellow-text">
                    0.00
                </div>
        </div>
        <div class="d-flex align-items-center justify-content-between py-1 px-2">
                <div class="sub-heading">
                    Available
                </div>
                <div class="fs-14 font-weight-bolder yellow-text">
                    0.00
                </div>
        </div>

        <div class="h-divider mb-4 mt-4"></div>

        <div class="d-flex align-items-center justify-content-between">
            <div class="heading">History</div>
            <div class="lf-select_coin-to max-width-150px" id="earn-search-coin-filter">
                    <div class="coin-swap-from m-0">
                        <input type="text" value="16" class="lf-select-coin-to-input">
                        <div class="wm-input-suffix ">
                          <div class="lf-select-coin-to-drpd">
                            <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                              <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>
                    </div>

                    <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                        <div class="wm-dropdown-optn-item-div">
                            <img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                            <div id="select_coin_text" class="wm-dropdown-optn-item-txt">All</div>
                         </div>
                    </div>

                   <div class="wm-dropdown-div wm-dropdown-div-open" style="display: none;">

                      <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                        <li role="option" id="0" title="0" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner selected">
                            <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">All</div>
                                </div>
                          </div>
                        </li>
                        <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                    <div class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                             </div>
                         </div>
                        </li>
                        <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">ETH/DAI</div>
                              </div>
                          </div>
                        </li>
                        <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                           <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                </div>
                              </div>
                        </li>
                        <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                </div>
                            </div>
                        </li>
                        <li role="option" id="13" title="13" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                           <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                </div>
                          </div>
                        </li>
                       </ul>
                </div>
                </div>
        </div>
    </div>
</div>


    @include('template.web_footer')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


 <script>
     $(document).ready(function() {
         $('.video-modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
         $(".video-hide").hide();
     });

function openVideo(id){
    var videoId = id;
    $(".fund-div-outer").hide();
    $(".video-hide").show();
    alert(videoId);
    if(videoId === "video-Buy"){
        $("#video source").attr("src" , "video-Buy.mp4");
    }
     if(videoId === "video-Deposit"){
        $("#video source").attr("src" , "video-Deposit.mp4");
    }
     if(videoId === "video-Receive"){
        $("#video source").attr("src" , "video-Receive");
    }
}

 $("#video-close").click(function (){
     $(".fund-div-outer").show();
    $(".video-hide").hide();
 })



  $(".tbl-div-expand").click(function (){
     $(this).closest('.table-div-responsive').siblings().removeClass("div-expand")
     $(this).closest('.table-div-responsive').toggleClass("div-expand")
 })


//  $('.table-div-responsive').click(function(){
//     //  alert();
//      $('.right-sidebar').addClass('open')
//  })

//   $('.right-sidebar-close i').click(function(){
//     //  alert();
//      $('.right-sidebar').removeClass('open')
//  })
 </script>



</body>

</html>







<!--


  <div id="appendVideo" class="py-3 bg-white">
                                            <div class="video-section" style="">
                                                <video width="100%" id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" data-setup="{}" preload="auto">
                                                    <source src="" type="video/mp4">
                                                </video>
                                                <div id="circle-play-b" class="video-play-button">
                                                    <span></span>
                                                </div>
                                                <div class="video-overlay-bg" id="video-overlay-bg"></div>
                                            </div>
                                        </div>
                                        <div class="h-divider"></div>
                                    <div class="text-center my-3">
                                        <span class="fs-12 d-block">
                                            If you already have crypto currency, you can use deposit
                                            function to transfer them from other trading platforms or wallets to your
                                            Wealthmark account.
                                        </span>
                                            <button type="button" class="btn btn-yellow shadow mt-3 mb-3">Buy Now</button>
                                    </div>

                                    -->
