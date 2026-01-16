  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
     <meta name="author" content="Wealthmark">
  @include('template.web_css')



   </head>

 <body class="bg-white">
        @include('template.web_menu')






    <section id="wm-earn"  class="breadcrumbs shadow-sm auto-invesment">
          <div class="container-fluid">
              <div class="row justify-content-center">
                 <div class="col-lg-4 col-md-6 col-sm-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1 align-items-center" data-aos="fade-up" data-aos-delay="200">
                 <h1 class="top-heading">Wealthmakr Earn</h1>
                 <p class="top-p">Simple & Secure. Search popular coins and start earning.</p>

                 </div>
                 <div class="col-lg-5 col-md-6 col-sm-6 offset-lg-1 order-1 order-lg-2 hero-img mt-3 mb-5" data-aos="zoom-in" data-aos-delay="200">

                   <div class="asset-overview login-box-main">
                          <div class="login-box-bg">
                            <div class="login-box">
                              <img src="{{ asset('ount.png') }}" class="login-box-img" alt="Login" title="Login">
                              <div class="login-box-txt">Log in to view holding details</div>
                              <button type="button" class="btn btn-yellow">Log In</button>
                            </div>
                          </div>
                        </div>
                 </div>
              </div>
            </div>
      </section>
      <!----------------------------------------------------------slider-end---------------------------------------------->
    <section class="earn-content pt-0 pb-0">
        <div class="bg-light-blue pt-2 pb-2">
            <div class="container">
                <div class="row">

                     <div class="dashboard-tabpills">
                <div class="simple-earb-tabs">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-simpal-earn-tab" data-bs-toggle="pill" data-bs-target="#simpal-earn" type="button" role="tab" aria-controls="simpal-earn" aria-selected="false">Simple Earn</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-staking-tab" data-bs-toggle="pill" data-bs-target="#staking" type="button" role="tab" aria-controls="staking" aria-selected="false">Staking</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-faming-tab" data-bs-toggle="pill" data-bs-target="#faming" type="button" role="tab" aria-controls="faming" aria-selected="true">Farming</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dualInvestment-tab" data-bs-toggle="pill" data-bs-target="#dualInvestment" type="button" role="tab" aria-controls="dualInvestment" aria-selected="false"> Dual Investment</button>
                        </li>

                        </ul>


                    </div>
                </div>
            </div>
                </div>


                 <div class="tab-content mt-3 mb-3" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="simpal-earn" role="tabpanel" aria-labelledby="pills-simpal-earn-tab">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-earn-savings.svg') }}" class="" alt="Earn savings" title="Earn savings">
                                                      <div class="simpal-earn-block-title">Simple Earn</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" title="wealthmark light card" alt="wealthmark light card">
                                        </div>
                                         </div>
                                     <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-vault.svg') }}" class="" alt="Vault Icon" title="Vault Icon">
                                                      <div class="simpal-earn-block-title">BNB Vault</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" alt="wm-light-card-moon" title="wm-light-card-moon">
                                        </div>
                                         </div>
                                          <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-auto-invest.svg') }}" class="" alt="Auto Invest" title="Auto Invest">
                                                      <div class="simpal-earn-block-title">Auto-Invest</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="staking" role="tabpanel" aria-labelledby="pills-staking-tab">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-eth.svg') }}" class="" alt="Wealthmark stacking" title="Wealthmark Stacking">
                                                      <div class="simpal-earn-block-title">ETH 2.0 Staking</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>
                                     <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-coins.svg') }}" class="" alt="DeFi Stacking" title="DeFi Stacking">
                                                      <div class="simpal-earn-block-title">DeFi Staking</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-dot-icon-.svg') }}" class="" alt="Coin" title="Coin">
                                                      <div class="simpal-earn-block-title">DOT Slot Auction</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" alt="Wealthmark light card" title="Wealthmark light card" >
                                        </div>
                                         </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="faming" role="tabpanel" aria-labelledby="pills-faming-tab">
                                   <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-liquid-swap.svg') }}" class="" alt="Wealthmark light card" title="Wealthmark light card">
                                                      <div class="simpal-earn-block-title">Liquidity Farming</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay" alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>
                                     <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-swap.svg') }}" class=""  alt="Swap Farming" title="Swap Farming">
                                                      <div class="simpal-earn-block-title">Swap Farming</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay"  alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>

                                          <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-launchpad.svg') }}" class="" alt="Launchpool" title="Launchpool">
                                                      <div class="simpal-earn-block-title">Launchpool</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay"  alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="dualInvestment" role="tabpanel" aria-labelledby="pills-dualInvestment-tab">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="simpal-earn-block-main">
                                            <div class="simpal-earn-block-row">

                                                    <div class="d-flex first-div">
                                                      <img src="{{ asset('earn/wm-savings-dual.svg') }}" class=""  alt="Dual Investment" title="Dual Investment">
                                                      <div class="simpal-earn-block-title">Dual Investment</div>
                                                    </div>
                                                    <div class="second-div" >

                                                        <svg  viewBox="0 0 24 24" fill="none">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path>
                                                        </svg>

                                                    </div>

                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Stable earnings
                                                    </span>
                                                </div>
                                                <div class="simpal-earn-option">
                                                    <i class="bi bi-check-lg"></i>
                                                    <span class="option-title">
                                                        Zero Fees
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="simpal-earn-block-row">
                                                <div class="option-title">Deposit and earn daily rewards, either for flexible-term or locked-terms. 200+ tokens for you to choose.</div>
                                            </div>
                                            <div class="simpal-earn-block-row justify-content-end">
                                                <a href="#" class="btn-yellow">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <img src="{{ asset('earn/wm-light-card-moon.svg') }}" class="simpal-earn-bg-overlay"  alt="Wealthmark light card" title="Wealthmark light card">
                                        </div>
                                         </div>

                                </div>
                            </div>
                        </div>

            </div>
        </div>
        </div>
    </section>


    <!----------------------------------------------------------Protected High Yield Auto-Invest---------------------------------------------->



    <div class="mb-3 mt-3">
        <div class="container">

          <div class="row align-items-center content-justify pt-4 pb-4">
              <div class="col-md-8 col-sm-7 col-xs-12 ">

		         <div class="dashboard-tabpills">
                <div class="earn-content-inner-tab">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Protected-tab" data-bs-toggle="pill" data-bs-target="#Protected" type="button" role="tab" aria-controls="Protected" aria-selected="false">Protected</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-High_Yield-tab" data-bs-toggle="pill" data-bs-target="#High_Yield" type="button" role="tab" aria-controls="High_Yield" aria-selected="false">High Yield</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-Auto-Invest-tab" data-bs-toggle="pill" data-bs-target="#Auto-Invest" type="button" role="tab" aria-controls="Auto-Invest" aria-selected="true">Auto-Invest</button>
                        </li>


                        </ul>


                    </div>
                </div>
            </div>

		  </div>
		        <div class="col-md-4 col-sm-5 col-xs-12 d-flex justify-content-end">

			<div class="earn-search-div-main">
                  <svg viewBox="0 0 24 24" fill="none" class="earn-search-icon">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 11a6 6 0 10-12 0 6 6 0 0012 0zm-6-8a8 8 0 110 16 8 8 0 010-16z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.586 22L15 16.414 16.414 15 22 20.586 20.586 22z" fill="currentColor"></path>
                  </svg>
                 <div class="lf-select_coin-to" id="earn-search-coin-filter">
                    <div class="coin-swap-from m-0">
                        <input type="text" value="16" class="lf-select-coin-to-input">
                        <div class="wm-input-suffix ">
                          <div class="lf-select-coin-to-drpd">
                            <svg  viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                              <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>
                    </div>

                    <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                        <div class="wm-dropdown-optn-item-div">
                            <img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">
                            <div id="select_coin_text"  class="wm-dropdown-optn-item-txt">BTC/BUSD</div>
                         </div>
                    </div>

                   <div class="wm-dropdown-div wm-dropdown-div-open">
                      <div class="p-3">
                        <div class=" wm-dropdown-srch-div">
                          <div class="wm-input-prefix ">
                            <svg  viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                            </svg>
                          </div>
                          <input type="text" class="wm-dropdown-search-input" value="">
                          <div class="wm-input-suffix ">
                            <svg  viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                        <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onClick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">

                                <div class="wm-dropdown-optn-item-div">
                                  <img class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">

                                  <div  class="wm-dropdown-optn-item-txt">BTC/USD</div>

                            </div>
                          </div>
                        </li>
                        <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onClick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner selected">


                                <div class="wm-dropdown-optn-item-div">
                                    <img class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}"  alt="Coin" title="Coin">

                                    <div  class="wm-dropdown-optn-item-txt">BNB/BUSD</div>
                                </div>


                          </div>
                        </li>
                        <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onClick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">


                                <div class="wm-dropdown-optn-item-div">
                                  <img class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">

                                  <div  class="wm-dropdown-optn-item-txt">ETH/DAI</div>


                            </div>
                          </div>
                        </li>
                        <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onClick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">


                                <div class="wm-dropdown-optn-item-div">
                                  <img class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">

                                  <div  class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                </div>


                          </div>
                        </li>
                        <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onClick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">


                                <div class="wm-dropdown-optn-item-div">
                                 <img class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">

                                  <div  class="wm-dropdown-optn-item-txt">USDT/ETH</div>
                                </div>


                          </div>
                        </li>
                        <li role="option" id="13" title="13" class="wm-dropdown-optn-item " onClick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                           <div class="wm-dropdown-optn-item-div">
                                  <img class="wm-dropdown-optn-item-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="Coin" title="Coin">

                                  <div  class="wm-dropdown-optn-item-txt">BTC/ETH</div>
                                </div>
                          </div>
                        </li>
                       </ul>
                </div>
                </div>
            </div>

		      </div>
		  </div>



    <div class="row">
         <div class="col-md-12">
		           <div class="tab-content mt-3 mb-3" id="pills-tabContent">
                <div class="tab-pane fade active show" id="Protected" role="tabpanel" aria-labelledby="pills-Protected-tab">

                    <div class="row  align-items-center content-justify">
		      <div class="col-md-12">
		          <div class="reward-alert-popup bg-white shadow-sm border-yellow">

                          <div class="reward-alert-popup-div1">
                            <div class="d-flex mt-3">
                              <img src="{{ asset('img/iliate-program-4.png') }}" class="reward-alert-popup-img" alt="Principle Protected" title="Principle Protected">
                              <div class="reward-alert-popup-title">Principal Protected</div>
                            </div>
                            <div class="reward-alert-popup-sb">An opportunity to receive higher than average gains but with corresponding risks to your invested cryptocurrencies. Only invest what you can afford to risk, regardless of how high the potential rates of return.</div>
                          </div>
                          <div class="reward-alert-popup-div2">
                            <svg  viewBox="0 0 16 16" fill="none" cursor="pointer" class="reward-alert-popup-svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14 12.676l-1.324 1.316-4.683-4.675L3.324 14l-1.316-1.324L6.676 8 2 3.324l1.324-1.317 4.669 4.676L12.676 2l1.31 1.324L9.315 8 14 12.676z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>

		      </div>
                <div class="col-md-12">
                    <div class="coins-filter">
                      <div class="coins-filter-mid">
                        <div class="coins-filter-inner">

                            <div class="coins-filter-type-div" id="pop_coin" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('-g.png') }}" class="coins-filter-type-span-icn" alt="Popular Coins" title="Popular Coins">
                              </span>Popular Coins
                            </div>


                            <div class="coins-filter-inner-block-div" id="B4B" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('mb-up-g.png') }}" class="coins-filter-type-span-icn" alt="Best for Beginners" title="Best for Beginners">
                              </span>Best for Beginners
                            </div>


                            <div class="coins-filter-inner-block-div" id="Chain_Zone" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('zone.svg') }}" class="coins-filter-type-span-icn" alt="BNB Chain Zone" title="BNB Chain Zone">
                              </span>BNB Chain Zone
                            </div>


                            <div class="coins-filter-inner-block-div" id="Polka_Zone" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('ka_zone.svg') }}" class="coins-filter-type-span-icn" alt="Polka Zone" title="Polka Zone">
                              </span>Polka Zone
                            </div>


                            <div class="coins-filter-inner-block-div" id="Solana_Zone" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('_zone.svg') }}" class="coins-filter-type-span-icn" alt="Solana Zone" title="Solana Zone">
                              </span>Solana Zone
                            </div>

                        </div>

                      </div>
                    </div>
                </div>
            </div>
                   <div id="Popular_Coins" class="earn-record-sec">
                              <div class="earn-tbl w-100">
                                <table>

                                      <thead class="earn-tbl-thead">
                                        <tr>
                                          <th class="earn-td-block">
                                            <div class="earn-product-text">Coin</div>
                                          </th>
                                          <th class="earn-td-block">Product</th>
                                          <th class="earn-td-block">
                                            <div class="earn-amt-div">Est. APR <div class="svg-fillter-div">
                                                <svg  viewBox="0 0 24 24" fill="none" class="svg-fillter">
                                                  <path opacity="0.5" d="M9 10.153V8.5L12.25 5l3.25 3.501v1.652H9z" fill="#848E9C"></path>
                                                  <path d="M15.5 13.257v1.652l-3.25 3.5L9 14.91v-1.652h6.5z" fill="url(#sorting-down-color-s24_svg__paint0_linear)"></path>
                                                  <defs>
                                                    <linearGradient id="sorting-down-color-s24_svg__paint0_linear" x1="9" y1="18.41" x2="15.5" y2="18.41" gradientUnits="userSpaceOnUse">
                                                      <stop stop-color="#EFB80B"></stop>
                                                      <stop offset="1" stop-color="#FBDA3C"></stop>
                                                    </linearGradient>
                                                  </defs>
                                                </svg>
                                              </div>
                                            </div>
                                          </th>
                                          <th class="earn-td-block">
                                            <div class="earn-amt-div">Duration <div class="svg-fillter-div">
                                                <svg  viewBox="0 0 24 24" class="svg-fillter">
                                                  <path d="M9 10.368v-1.4L11.968 6l2.968 2.968v1.4H9zM14.936 13v1.4l-2.968 2.968L9 14.4V13h5.936z" fill="#C1C6CD"></path>
                                                </svg>
                                              </div>
                                            </div>
                                          </th>
                                          <th class="earn-td-block"></th>
                                        </tr>
                                      </thead>
                                      <tbody class="earn-tbl-tbody">
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="coin" title="coin">

                                                <div  class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">59.00%</div>
                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">90 Days</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                               <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">NEAR</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">30.49%</div>
                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">120 Days</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">
                                                <div class="">24.00%</div>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">Flexible</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">DOT</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">20.98%</div>
                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">120 Days</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                               <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">AVAX</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">18.90%</div>
                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">120 Days</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">ADA</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">9.85%</div>
                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">90 Days</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr  class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">USDT</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">
                                                <div class="">
                                                  <div class="earn-product-text">8.00%</div>
                                                </div>
                                              </div>

                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">Flexible</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a  target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}"  alt="Coin" title="Coin">
                                                <div  class="earn-coin-text">BUSD</div>
                                              </div>
                                            </a>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-product-text">Simple Earn</div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">
                                                <div class="">
                                                  <div class="earn-product-text">8.00%</div>
                                                </div>
                                              </div>

                                            </div>
                                          </td>
                                          <td class="earn-td-block">
                                            <div class="earn-duration-text">Flexible</div>
                                          </td>
                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a  href="#" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Subscribe</button>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  <div class="mt-4 text-center expand">
                                        <span class="yellow-text" id="expand-Popular-Coins" onClick="openModal(this.id)">
                                            <span>Expand </span>
                                            <span>
                                                <svg viewBox="0 0 24 24" fill="none" class="svg-up">
                                                    <path d="M13.5 12L7 18.6 8.4 20l8-8-8-8L7 5.4l6.5 6.6z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </span>
                                </div>

                              </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="High_Yield" role="tabpanel" aria-labelledby="pills-High_Yield-tab">
                     <div class="row  align-items-center content-justify">
		      <div class="col-md-12">
		          <div class="reward-alert-popup bg-white shadow-sm border-yellow">

                          <div class="reward-alert-popup-div1">
                            <div class="d-flex mb-3">
                              <img src="{{ asset('img/iliate-program-4.png') }}" class="reward-alert-popup-img"  alt="High Potential Rewards" title="High Potential Rewards">
                              <div class="reward-alert-popup-title">(High Yield) Higher Potential Rewards</div>
                            </div>
                            <div class="reward-alert-popup-sb">An opportunity to receive higher than average gains but with corresponding risks to your invested cryptocurrencies. Only invest what you can afford to risk, regardless of how high the potential rates of return.</div>
                          </div>
                          <div class="reward-alert-popup-div2">
                            <svg  viewBox="0 0 16 16" fill="none" cursor="pointer" class="reward-alert-popup-svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14 12.676l-1.324 1.316-4.683-4.675L3.324 14l-1.316-1.324L6.676 8 2 3.324l1.324-1.317 4.669 4.676L12.676 2l1.31 1.324L9.315 8 14 12.676z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>

		      </div>
                <div class="col-md-12 mt-3 mb-3">
                    <div class="coins-filter">
                      <div class="coins-filter-mid">
                        <div class="coins-filter-inner">

                            <div class="coins-filter-type-div" id="pop_coin" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('-g.png') }}" class="coins-filter-type-span-icn"  alt="Coins" title="Coins">
                              </span>Popular Coins
                            </div>


                            <div class="coins-filter-inner-block-div" id="B4B" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('mb-up-g.png') }}" class="coins-filter-type-span-icn" alt="Coins" title="Coins">
                              </span>Best for Beginners
                            </div>


                            <div class="coins-filter-inner-block-div" id="Chain_Zone" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('zone.svg') }}" class="coins-filter-type-span-icn" alt="Coins" title="Coins">
                              </span>BNB Chain Zone
                            </div>


                            <div class="coins-filter-inner-block-div" id="Polka_Zone" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('ka_zone.svg') }}" class="coins-filter-type-span-icn" alt="Coins" title="Coins">
                              </span>Polka Zone
                            </div>


                            <div class="coins-filter-inner-block-div" id="Solana_Zone" onClick="showtblfilter(this.id)">
                              <span class="coins-filter-type-span">
                                <img src="{{ asset('_zone.svg') }}" class="coins-filter-type-span-icn" alt="Coins" title="Coins">
                              </span>Solana Zone
                            </div>

                        </div>

                      </div>
                    </div>
                </div>
                <div class="col-md-12">
                   <div class="title-div-section">
                       <div class="inner-left">
                           <h3 class="title">
                               Liquid Swap
                           </h3>
                           <span>
                               Earn potentially higher rewards on multiple popular tokens by becoming a liquidity provider.
                           </span>
                       </div>
                       <div class="inner-right">
                            <svg  viewBox="0 0 24 24" fill="none" class="inner-right-svg">
                                <path d="M13 17.5l-1.414-1.414L14.67 13H6v-2h8.672l-3.086-3.086L13 6.5l5.5 5.5-5.5 5.5z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zM4 12a8 8 0 1116 0 8 8 0 01-16 0z" fill="currentColor"></path>
                            </svg>
                       </div>
                   </div>
                </div>
                <div class="col-md-12" id="High-Yield-tbl">
                    <div class="earn-tbl w-100">
                                <table >

                                      <thead class="earn-tbl-thead">
                                        <tr>
                                          <th class="earn-td-block">
                                            <div class="earn-product-text">Pool</div>
                                          </th>

                                          <th class="earn-td-block">
                                            <div class="earn-amt-div">Est. APR <div class="svg-fillter-div">
                                                <svg viewBox="0 0 24 24" fill="none" class="svg-fillter">
                                                  <path opacity="0.5" d="M9 10.153V8.5L12.25 5l3.25 3.501v1.652H9z" fill="#848E9C"></path>
                                                  <path d="M15.5 13.257v1.652l-3.25 3.5L9 14.91v-1.652h6.5z" fill="url(#sorting-down-color-s24_svg__paint0_linear)"></path>
                                                  <defs>
                                                    <linearGradient id="sorting-down-color-s24_svg__paint0_linear" x1="9" y1="18.41" x2="15.5" y2="18.41" gradientUnits="userSpaceOnUse">
                                                      <stop stop-color="#EFB80B"></stop>
                                                      <stop offset="1" stop-color="#FBDA3C"></stop>
                                                    </linearGradient>
                                                  </defs>
                                                </svg>
                                              </div>
                                            </div>
                                          </th>
                                           <th class="earn-td-block">Reward</th>
                                          <th class="earn-td-block"></th>
                                        </tr>
                                      </thead>
                                      <tbody class="earn-tbl-tbody">
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img-2" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">demo</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">59.00%</div>

                                                  <svg  viewBox="0 0 24 24" fill="none" class="earn-amt-div-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="FEE 201.21% +  *Based on 24hr volume annualized.">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm0-2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm.997 9.004h-2.009v6h2.009v-6zm-2.009-4h2.009v2.009h-2.009v-2.01z" fill="currentColor"></path></svg>

                                            </div>
                                          </td>

                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Add</button>
                                              </a>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img-2" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">59.00%</div>

                                                  <svg  viewBox="0 0 24 24" fill="none" class="earn-amt-div-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="FEE 201.21% +  *Based on 24hr volume annualized.">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm0-2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm.997 9.004h-2.009v6h2.009v-6zm-2.009-4h2.009v2.009h-2.009v-2.01z" fill="currentColor"></path></svg>

                                            </div>
                                          </td>

                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Add</button>
                                              </a>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img-2" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">59.00%</div>

                                                  <svg  viewBox="0 0 24 24" fill="none" class="earn-amt-div-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="FEE 201.21% +  *Based on 24hr volume annualized.">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm0-2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm.997 9.004h-2.009v6h2.009v-6zm-2.009-4h2.009v2.009h-2.009v-2.01z" fill="currentColor"></path></svg>

                                            </div>
                                          </td>

                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Add</button>
                                              </a>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img-2" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">59.00%</div>

                                                  <svg  viewBox="0 0 24 24" fill="none" class="earn-amt-div-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="FEE 201.21% +  *Based on 24hr volume annualized.">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm0-2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm.997 9.004h-2.009v6h2.009v-6zm-2.009-4h2.009v2.009h-2.009v-2.01z" fill="currentColor"></path></svg>

                                            </div>
                                          </td>

                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Add</button>
                                              </a>
                                            </div>
                                          </td>

                                        </tr>
                                        <tr class="earn-tbl-row earn-tbl-row-level-0">
                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img-2" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block">
                                            <div class="earn-amt-div">
                                              <div class="earn-amt-text">59.00%</div>

                                                  <svg  viewBox="0 0 24 24" fill="none" class="earn-amt-div-svg" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="FEE 201.21% +  *Based on 24hr volume annualized.">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8zm0-2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm.997 9.004h-2.009v6h2.009v-6zm-2.009-4h2.009v2.009h-2.009v-2.01z" fill="currentColor"></path></svg>

                                            </div>
                                          </td>

                                          <td class="earn-td-block">
                                            <a target="_blank" href="#" class="earn-td-block-link">
                                              <div class="earn-td-block-link-img">
                                                <img class="earn-coin-img" src="{{ asset('img/63af2-c980-42cf-a139-7b9f462a36c2.png') }}" alt="Coins" title="Coins">

                                                <div class="earn-coin-text">AXS</div>
                                              </div>
                                            </a>
                                          </td>

                                          <td class="earn-td-block text-right">
                                            <div class="">
                                              <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" target="_blank" class="">
                                                <button type="button" class="btn-yellow border-0 shadow-none">Add</button>
                                              </a>
                                            </div>
                                          </td>

                                        </tr>

                                      </tbody>
                                    </table>
                                  <div class="mt-4 text-center expand">
                                        <span class="yellow-text" id="expand_Liquid_Swap" onClick="openModal(this.id)">
                                            <span>Expand </span>
                                            <span>
                                                <svg viewBox="0 0 24 24" fill="none" class="svg-up">
                                                    <path d="M13.5 12L7 18.6 8.4 20l8-8-8-8L7 5.4l6.5 6.6z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </span>
                                </div>

                              </div>
                </div>
            </div>
                </div>


                <div class="tab-pane fade" id="Auto-Invest" role="tabpanel" aria-labelledby="pills-Auto-Invest-tab">
                    <div class="row">
                        <div class="col-md-12 mt-5 d-flex">
                    <div class="Auto-Invest-div-left">
                          <div class="Auto-Invest-div-title">Create your own Auto-Invest Plan</div>
                          <div class="Auto-Invest-div-subtitle">Regularly invest in cryptocurrency with a pre-determined amount and accumulate your crypto holdings</div>
                          <div class="Auto-Invest-div-inner">
                            <div class="Auto-Invest-div-inner-number">1</div>
                            <div class="Auto-Invest-div-inner-text-div">
                              <div class="Auto-Invest-yellow-line"></div>
                              <div class="Auto-Invest-title-sm">Start creating your Auto-Invest Plan</div>
                              <div class="Auto-Invest-subtitle-sm">Pick a coin you want to invest in, decide your investment amount and schedule a recurring plan.</div>
                            </div>
                            <div class="Auto-Invest-div-inner-number">2</div>
                            <div class="Auto-Invest-div-inner-text-div-2">
                              <div class="Auto-Invest-yellow-line"></div>
                              <div class="Auto-Invest-title-sm">Enjoy the Auto-Invest plan while earning passive income</div>
                              <div class="Auto-Invest-subtitle-sm">Once invested, you can receive daily earnings from Simple Earn and redeem your funds any time you wish.</div>
                            </div>
                            <img src="{{ asset('img/cle-plus.svg') }}" class="Auto-Invest-sideimg" alt="Auto Invest " title="Auto Invest">
                          </div>
                        </div>
                       <img src="{{ asset('img/o-invest-banner.svg') }}" class="Auto-Invest-Plan-img" alt="Auto Invest banner" title="Auto Invest Banner">
                </div>
                <div class="col-md-12 mt-5">
                    <div id="apendAutoInvest">

                    </div>
                </div>
                    </div>
                </div>
            </div>
    </div>

    </div>
    </div>
    </div>






















    <section class="bg-light-blue" id="wm-earn-chart-div">
        <div class="container">
            <div class="subtitle">
                <div class="flex-1 coin-fixed-tab">
                      <span class="interested-text">I have</span>
                    <div class="field crypto-rght-first-box m-0">
                        <div class="input-wrap ">
                            <div class="input-outer-div">
                                <input type="text" value="" class="inputbox">
                            </div>
                            <div class="coin-select">
                                <div class="input-right-img-div">
                                    <img id="barrow-coin-img" src="{{ asset('img/ns/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="BUSD" title="BUSD">
                                </div>
                                <span id="barrow-coin-text" class="coin">BUSD</span>
                                <svg viewBox="0 0 16 16" fill="none" class="arrow svg-down-arrow">
                                    <path d="M11 5.632v1.4L8.2 10 5.4 7.032v-1.4H11z" fill="currentColor"></path>
                                </svg>
                            </div>
                        <div class="select expand" id="barrow_dropdown">
                            <div class="select-drop-inner">
                                <div class="search-input">
                                    <div class="select-search-div">
                                        <svg  viewBox="0 0 24 24" fill="none" class="select-search-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                                        </svg>
                                <div class=" select-search-input-div">
                                  <input value="" placeholder="Search Coin" class="select-search-input" id="barrow_coin_list">
                                </div>
                              </div>
                            </div>
                            <div class="select-drop-list-div-main">
                              <div class="select-drop-list-div" id="1" onClick="changeSrc(this.id)">
                                <div class="">
                                  <div class="select-drop-list-div-inner">
                                    <div class="select-drp-img-name-div">
                                      <img class="barrow-drdn-img" src="{{ asset('img/ns/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="USDT" title="USDT">
                                    </div>
                                    <div class="select-drp-coin-name-div">
                                      <div class="select-drp-coin-title barrow-drdn-text">USDT</div>
                                      <div class="select-drp-coin-subtitle">TetherUS</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="select-drop-list-div" id="2" onClick="changeSrc(this.id)">
                                <div class="">
                                  <div class="select-drop-list-div-inner">
                                    <div class="select-drp-img-name-div">
                                      <img class="barrow-drdn-img" src="{{ asset('img/96d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="BUSD" title="BUSD">
                                    </div>
                                    <div class="select-drp-coin-name-div">
                                      <div class="select-drp-coin-title barrow-drdn-text">BUSD</div>
                                      <div class="select-drp-coin-subtitle">BUSD</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
               <!--place dropdown code here -->
               </div> </div>
          </div>
                    <div class="lineHeight d-flex interested-text">and I am interested in</div>

                    <div class="coin-fixed-tab">
                            <div class="type-switch coin-fixed-tab-inner">
                                <div  class="coin-fixed-tab-Flexible">Flexible</div>
                                <div class="divider d-flex"></div>
                                <div class="coin-fixed-tab-Fixed">Fixed</div>
                            </div>
                        investment.
                    </div>
             </div>
             <div class="row align-items-center justify-content-center h-100">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="product-container d-flex">
                          <div class="product-card selected">
                            <div class="d-flex">
                              <div class="">
                                <div class="product-name">Simple Earn</div>
                              </div>
                              <div class="product-card-apy">0.28% ~ 5.50%</div>
                              <div class="">
                                <div class="prod-sub">
                                  <div class="d-flex">Based on Tier Rate APR
                                  <div class="">

                                      <i class="bi bi-info-circle-fill ms-2"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="product-card">
                            <div class="d-flex">
                              <div class="product-card-inner">
                                <div class="product-name">Flexible DeFi Staking</div>
                                <div class="tag d-flex">Advanced</div>
                              </div>
                              <div class="product-card-apy">0.60%</div>

                            </div>

                          </div>
                        </div>

                        <div class="btn-div mt-3">
                            <a href="#" class="btn-yellow">
                                Subscribe Now
                            </a>
                        </div>
                 </div>
                 <div class="col-lg-6 col-md-12 col-sm-12 text-center bg-white rounded shadow-sm p-5">
                     Chart Here!!
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12 mt-5">
                     <div class="text">
                         This calculation is an estimate of rewards you will earn in cryptocurrency over the selected timeframe. It does not display the actual or predicted APR in any fiat currency. APR is adjusted daily and the estimated earnings may be different from the actual earnings generated.
                     </div>
                 </div>
             </div>
        </div>
    </section>



<!--------------------------------------------------------------->
  <section class="bg-white">
     <div class="container">
         <div class="wm-faq-search wm-faq-search-1 bg-light-blue">
  <div class="wm-faq-search-title">Got a Question?</div>
  <div class="wm-faq-search-inner">
    <div class="wm-faq-search-box-main">

        <div class=" wm-faq-search-box-div">

            <svg viewBox="0 0 24 24" fill="none" class="wm-faq-search--icn">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
            </svg>

          <input type="input" value="" placeholder="Search" maxlength="50" class="wm-faq-search-input-box">

            <button type="button" class="btn-yellow border-0 me-2">
              Search
            </button>

        </div>

    </div>

      <a href="#" target="_blank" class="wm-faq-search-default-btn">Live Chat</a>

  </div>
</div>
     </div>
 </section>
    <section class="wm-pay-accordian-section border-top">
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
     What is DeFi Staking?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  DeFi (Decentralized Finance) is a way of providing financial services to users through smart contracts. Existing DeFi projects aim to provide higher annualized earnings for specific currencies.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  About Wealthmark DeFi Staking
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">There's a relatively high threshold for users of DeFi products. Wealthmark DeFi Staking acts on behalf of users to participate in certain DeFi products, obtains and distributes realized earnings, and helps users to participate in DeFi products with a single click.</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     What are the advantages of DeFi Staking?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">1. Easy to use: You don't need to manage private keys, acquire resources, make trades, or perform other complicated tasks to participate in DeFi Staking. Wealthmark's one-stop service allows users to obtain generous online rewards without keeping an on-chain wallet. 2. No gas fee: Wealthmark Staking deposits users’ funds into smart contracts on users’ behalf, saving users on-chain gas fees.</div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
   After I participate in DeFi Staking, how is the earnings cycle calculated?
      </h2>
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
<!--------------------------------------------------------------->
<div class="expand-coin-div-modal hide">

    <div class="expand-coin-div-modal-header">
        <div class="text-div">
                <h3 class="title mb-0">Protected</h3>
                <span>The same number of tokens deposited to Savings and Staking will be returned to you along with yields paid out in the same type of token. See our Terms & Conditions and FAQs for more details.</span>
        </div>
        <div>
            <svg viewBox="0 0 16 16" fill="none" cursor="pointer" class="expand-close">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14 12.676l-1.324 1.316-4.683-4.675L3.324 14l-1.316-1.324L6.676 8 2 3.324l1.324-1.317 4.669 4.676L12.676 2l1.31 1.324L9.315 8 14 12.676z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <div class="container">
                 <div class="expand-coin-div-modal-body">
                     <div class="max-height-450 scrollbar-style">
                            <div id="apend_Popular_Coins"></div>
                            <div id="apend_Liquid_Swap"></div>

                    </div>
                </div>

    </div>
     <div class="expand-coin-div-modal-footer">
              <div class="text-center">
                                        <a href="#" class="yellow-text">
                                            <span>show Less </span>
                                            <span>
                                                <svg viewBox="0 0 24 24" fill="none" class="svg-up">
                                                    <path d="M13.5 12L7 18.6 8.4 20l8-8-8-8L7 5.4l6.5 6.6z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                </div>
    </div>
</div>






  @include('template.country_language')
    @include('template.web_footer')




        <script src="{{ asset('strap.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
          $(".expand-close").click(function () {
                    $( ".expand-coin-div-modal" ).addClass('hide');
                 });

                $(".yellow-text").click(function () {
                    $( ".expand-coin-div-modal" ).removeClass('hide');
            });

    </script>
    <script>
            // $('.coin-swap-from').click(function(){
            //     alert();
            //     $(this).siblings(".wm-dropdown-div").toggle();
            // });


            // function changeSrc2(id){
            //     const li = id;
            //         $(".lf-select-coin-to-active-value #select_coin_img").attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img").attr('src')) ;
            //         $(".lf-select-coin-to-active-value #select_coin_text").html($("#"+li+' '+ ".wm-dropdown-optn-item-txt").html()) ;
            //         $("#"+li).children('.wm-dropdown-optn-item-inner').addClass('selected');
            //         $("#"+li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass('selected');
            //         $(".wm-dropdown-div").hide();
            // };

            $(function() {
                $("#earn-search-coin-filter .wm-dropdown-search-input").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                        $("#earn-search-coin-filter .wm-dropdown-div ul li").filter(function() {$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

            $('.wm-dropdown-search-cross-icn').on('click', function(e) {
                $('.wm-dropdown-search-input').val('');
                $('.wm-dropdown-div ul li').show();
                return false;
            });
            // show_tbl_filter
            function showtblfilter(id){
                const divid = id;
                alert(divid);

                 $("#"+divid).addClass('coins-filter-type-div').removeClass('coins-filter-inner-block-div');
                $("#"+divid).siblings('.coins-filter-type-div').addClass('coins-filter-inner-block-div').removeClass('coins-filter-type-div');

            };




              $('.reward-alert-popup-div2').click(function(){
                $(this).parent().addClass('hide');
            });

             $('.product-card').click(function(){
                $(this).addClass('selected').siblings().removeClass('selected');
            });
            $('.coin-select').click(function (e) {
             $(this).siblings('.select').toggle()
        });
        $("#barrow_coin_list").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#barrow_dropdown .select-drop-inner .select-drop-list-div-main .select-drop-list-div ").filter(function() {      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });


    //   function changeSrc(id){
    //           const li = id;
    //         $(".coin-select #barrow-coin-img").attr('src', $("#"+li+' '+ ".barrow-drdn-img").attr('src')) ;
    //         $(".coin-select #barrow-coin-text").html($("#"+li+' '+ ".barrow-drdn-text").html()) ;
    //         $(".expand").hide();
    //     };
    </script>

    <script>
        $(document).ready(function(){
            $("#pills-Auto-Invest-tab").click(function(){
                $("#apendAutoInvest").load("<?php echo url( app()->getLocale(), 'auto_investment_section');  ?>");
            });
        });
    </script>
    </body>
</html>
