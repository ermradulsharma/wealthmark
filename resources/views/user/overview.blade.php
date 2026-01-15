<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="theme-color" content="#287aff">
    <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
    <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  
    @include('template.web_css')
    <style>
     .sidebar-nav {
        display: block;
    }
    
    .overview-block-div{
        display:flex;
        align-items:center;
        justify-content:space-between;
        width:100%;
        padding:20px 10px;
        background:white;
        border-radius:10px;
        margin-bottom:10px;
        cursor:pointer;
    }
    
   .overview-block-div:hover {
        box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
    }
    
    @media(max-width:575px){
         .overview-block-div{
             display:block;
         }
         .overview-block-div > div{
             width:100%;
             text-align:left;
         }
         .funding-video-tutorial span.d-block , .funding-video-tutorial span.d-block + p{
             text-align:center;
         }
    }
    </style>
</head>

<body>
    @include('template.web_menu')
    <div class="dashboard-main ">
        @include('template.sidebar')
        
        <div class="container-fluid p-0 w-100">
        <div class="bg-light-blue p-3 w-100">
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-3">
                <h2 class="fw-bold">Wallet Overview</h2>
                <div class="h-divider mt-2 mb-3"></div>
               
                <div class="d-flex align-items-center flex-nowrap overflow-auto ">
                        <a class="btn btn-yellow mx-2" data-bs-toggle="modal" data-bs-target="#deposit-modal">Deposit</a>
                        <a class="btn btn-blue">Withdraw</a>
                        <a class="btn btn-blue" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Use Wealthmark pay to send tokens toother wealthmark users at zero fees.">Send</a>
                        <a class="btn btn-blue overview-transfer-popup-modal">Transfer</a>
                        <a class="btn btn-blue">Transaction History</a>
                    </div>
            </div>
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-3">
                 <div class="bg-light-blue p-3 d-flex align-items-center mb-3">
                    <svg viewBox="0 0 24 24" fill="#fdc116" width="25" height="25" class="me-3 d-none d-md-block">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zm-1.25-5.5V18h2.5v-2.5h-2.5zm0-9.5v7h2.5V6h-2.5z" fill="#fdc116"></path>
                    </svg>
                    <div class="fs-14 fw-normal">
                        <span> 
                            Notice: From 2021-08-19 08:00 (UTC), P2P Wallet will be integrated under the Funding Wallet. P2P
                            Wallet will no longer be used, and all P2P transactions will be conducted via the Funding
                            Wallet. Timely updates will occur during this integration, and is estimated to be completed by
                            the end of this year.
                        </span> 
                        <a href="#" class="yellow-text d-block">
                            Learn more
                        </a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-8">
                        <div class="d-flex align-items-center">
                        <h5 class="mb-0">Estimated Balance &nbsp;
                            <i id="showbalence-estimate" class="bi bi-eye asset-eye-icon" onclick="showhideBalestimate(this.id)"></i>
                            <i id="hidebalence-estimate" class="bi bi-eye-slash asset-eye-icon" style="display:none" onclick="showhideBalestimate(this.id)"></i>
                    </h5></div>
                    
                    <div class="d-flex align-items-center mt-4 hide-when-astix overview-estimate-balance-hide estimate-asset-balence">
                        <span class="h4 mb-0 me-2 fw-bold est-balance text-decoration-underline estimate-asset-balence" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Please note that the estimated balance is calculated by converting the toal assets of your acunt into BUSD, not tht amount of BUSD you hold.">0.00000000
                        </span>
                        <span class="h4 mb-0 fw-bold est-balance text-decoration-underline">
                            <select class="border-0 me-2">
                                <option class="fs-14">BTC </option>
                                <option class="fs-14">BUSD </option>
                                <option class="fs-14">ETH </option>
                                <option class="fs-14">BNB </option>
                            </select>
                        </span><span class="h4 mb-0 est-balance fw-bold text-muted estimate-asset-balence">≈ &nbsp;
                            ₹0.000000</span>
                    </div>
                    <div class="d-flex align-items-center mt-4 overview-estimate-balance-show">
                        <span class="alert alert-warning" id="show-alert">
                            Your assets are hidden, tap the eye icon to show your assets.
                        </span>
                    </div>
                    
                    
                    
                    </div>
                     <div class="col-sm-4">
                        
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-8">
                  
                        <div class="row mt-4 gap-y-3 align-items-md-center justify-content-md-between mb-3">
                            <div class="col-lg-3 col-md-4">
                                <h5 class="mb-0">My Assets</h5>
                            </div>
                            <div class="col-lg-9 col-md-8 text-md-end">
                                <div class="form-check asset-check">
                                    <a class="text-muted" id="hide-zero-balance">
                                        <label class="form-check-label" for="defaultCheck2">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                            Hide 0 Balance Wallets
                                        </label>
                                    </a>
    
                                </div>
                            </div>
                        </div>

                    <div class="bg-light-blue p-2">
                                <div class="overview-block-div" id="fiat-spot-row">
                             
                                     <div class="d-flex">
                                            <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3.5a5.502 5.502 0 00-5.302 4.032 7.502 7.502 0 016.77 6.77A5.502 5.502 0 0015 3.5zM14.5 15a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0zm-8 0L9 17.5l2.5-2.5L9 12.5 6.5 15zM9 4H4v5l5-5zm11 16h-5l5-5v5z" fill="currentColor"></path>
                                            </svg>
                                            <span class="fw-bold fs-16">Fiat &amp; Spot</span>
                                            <svg viewBox="0 0 24 24" fill="none" class="wm-deposit wm-overview-svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 3h-3v6.95l-.303-.003-4.159.04 5.975 5.976 5.975-5.975-4.176-.01-.312-.002V3zm-10 11h3v4h11v-4h3v7h-17v-7z" fill="currentColor"></path>
                                            </svg>
                                            <svg viewBox="0 0 24 24" fill="none" class="wm-transfer wm-overview-svg overview-transfer-popup-modal">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 9V6h13.5V2.5l5 5-5 5V9H3zm18 9v-3H7v-3.5l-5 5 5 5V18h14z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                               
                                <div>
                                    <span class="text-dark fw-bold fs-16 hide-when-astix">1000.00000000 ETH</span>
                                     <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                                </div>
                            </div>
                                <!----------------------------------------------------------next row ---------------------------------------->
                                <div class="overview-block-div" id="funding-row">
                       
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-4l4 4-4 4-4-4 4-4z" fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">Funding</span>
                                    <svg viewBox="0 0 24 24" fill="none" class="wm-overview-svg">
                                        <path d="M3 12.007a7.887 7.887 0 014.215-3.538c.021 1.914.612 3.811 1.708 5.216a6.827 6.827 0 00-1.074.92l-.981.893 1.488 1.487 1.061-1.04c1.987-2.102 4.072-1.098 4.866-.333L8.923 21H3v-8.993z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 9a6 6 0 01-5.348 5.965l-.546-.527a5.275 5.275 0 00-3.083-1.414 4.844 4.844 0 00-1.41.07A6 6 0 1121 9zm-6-2.5L12.5 9l2.5 2.5L17.5 9 15 6.5z" fill="currentColor"></path>
                                    </svg>
                                    <svg viewBox="0 0 24 24" fill="none" class="wm-overview-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-4l4 4-4 4-4-4 4-4z" fill="currentColor"></path>
                                    </svg>
                                        <svg viewBox="0 0 24 24" fill="none" class="wm-overview-svg overview-transfer-popup-modal">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 9V6h13.5V2.5l5 5-5 5V9H3zm18 9v-3H7v-3.5l-5 5 5 5V18h14z" fill="currentColor"></path>
                                            
                                        </svg>
                                </div>
                          
                        <div class="">
                            <a href="https://wealthmark.io/en/user/funding" class="col d-flex align-items-center justify-content-end asset-balence">
                                <span class="text-dark fw-bold fs-16 hide-when-astix">400.00000000 ETH</span>
                                
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                        </div>
                    </div>
                                <!----------------------------------------------------------next row ---------------------------------------->
                                <div class="overview-block-div" id="cross-row">
                        
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path
                                            d="M20.018 5.768L20 5.786V12l-3.107-3.107L5.768 20.018 4 18.25 15.125 7.125 12 4h8v1.75l.018.018z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M5.768 4l4.827 4.827-1.768 1.768L4 5.768 5.768 4zM13.423 15.19l1.768-1.767 4.827 4.827-1.768 1.768-4.827-4.827z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">Cross Margin</span>
                                    <svg viewBox="0 0 24 24" fill="none" class="wm-overview-svg overview-transfer-popup-modal">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3 9V6h13.5V2.5l5 5-5 5V9H3zm18 9v-3H7v-3.5l-5 5 5 5V18h14z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            
                        <div class="">
                            <a class="d-flex align-items-center justify-content-end asset-balence">
                                <span class="text-dark fw-bold fs-16 hide-when-astix">80.00000000 ETH</span>
                                
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                        </div>
                    </div>
                                <div class="overview-block-div">
                       
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.5 11a3.5 3.5 0 100-7 3.5 3.5 0 000 7zm0-5.031L5.969 7.5 7.5 9.031l1.531-1.53L7.5 5.968zM20 4h-8l3.125 3.125L4.061 18.19l1.768 1.768L16.893 8.893 20 12V4zm0 12.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">Isolated Margin</span>
                                </div>
                            
                        <div class="">
                            <a class="col d-flex align-items-center justify-content-end asset-balence">
                                <span class="text-dark fw-bold fs-16 hide-when-astix">50.00000000 BTC</span>
                                <div class="d-none astix text-dark">
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                </div>
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                        </div>
                    </div>
                                <div class="overview-block-div" id="option-row">
                       
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20 3H8.5v6H4v7.5A3.5 3.5 0 007.5 20H16a4 4 0 004-4V3zM6.5 11.5h2v5a1 1 0 11-2 0v-5zm10.364 3.75H11.66v-7.5h5.203v1.7h-3.328v1.164h2.854v1.69h-2.854v1.246h3.328v1.7z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">USDⓈ-M Futures</span>
                                </div>
                            
                        <div class="">
                            <a href="{{ url(app()->getLocale()) }}/user/futures" class="col d-flex align-items-center justify-content-end asset-balence">
                                <span class="text-dark fw-bold fs-16 hide-when-astix btn btn-default option-inactive-btn">Inactive</span>
                                
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                        </div>
                    </div>
                                <div class="overview-block-div" id="option-row">
                        
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20 3H8.5v6H4v7.5A3.5 3.5 0 007.5 20H16a4 4 0 004-4V3zM6.5 11.5h2v5a1 1 0 11-2 0v-5zm10.364 3.75H11.66v-7.5h5.203v1.7h-3.328v1.164h2.854v1.69h-2.854v1.246h3.328v1.7z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">COIN-M Futures</span>
                                </div>
                           
                       
                            <a href="{{ url(app()->getLocale()) }}/user/futures"  class="col d-flex align-items-center justify-content-end asset-balence">
                                <span  class="text-dark fw-bold fs-16 hide-when-astix btn btn-default option-inactive-btn">Inactive</span>
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                        
                    </div>
                                <div class="overview-block-div" id="funding-row">
                       
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.014 1a4.912 4.912 0 00-4.218 7.431 6.703 6.703 0 00-4.006 5.717H2v1.786h1.915a6.704 6.704 0 002.758 4.155l-1.648 1.648L6.287 23l2.07-2.07a6.694 6.694 0 002.118.342h5.304l1.591 1.591 1.263-1.262-1.34-1.34 4.35-4.35v-2.687h-1.934a6.126 6.126 0 00-1.398-2.915l2.435-2.435h-4.228A4.912 4.912 0 0012.014 1zM8.888 5.912a3.126 3.126 0 116.251 0 3.126 3.126 0 01-6.251 0zm1.786 0l1.34-1.34 1.34 1.34-1.34 1.34-1.34-1.34zm-.926 7.322h4.53v-1.786h-4.53v1.786z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">Earn</span>
                                </div>
                           
                        
                            <a href="{{ url(app()->getLocale()) }}/user/earn" class="col d-flex align-items-center justify-content-end asset-balence">
                                <span class="text-dark fw-bold fs-16 hide-when-astix">100.00000000 BNB</span>
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                       
                    </div>
                                <div class="overview-block-div" id="option-row">
                        
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20 3H8.5v6H4v7.5A3.5 3.5 0 007.5 20H16a4 4 0 004-4V3zM6.5 11.5h2v5a1 1 0 11-2 0v-5zm10.364 3.75H11.66v-7.5h5.203v1.7h-3.328v1.164h2.854v1.69h-2.854v1.246h3.328v1.7z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">Options</span>
                                </div>
                            
                        
                            <a href="{{ url(app()->getLocale()) }}/user/funding" class="col d-flex align-items-center justify-content-end asset-balence">
                                <span
                                    class="text-dark fw-bold fs-16 hide-when-astix btn btn-default option-inactive-btn">Inactive</span>
                                <div class="d-none astix text-dark">
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                    <span class="bi bi-asterisk fs-13"></span>
                                </div>
                                <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                       
                    </div>
                                <div class="overview-block-div" id="third-party-wallet-row" data-bs-toggle="modal" data-bs-target="#third-paty-wallet-modal">
                        
                                <div class="d-flex">
                                    <svg viewBox="0 0 24 24" fill="none" class="overview-my-assets">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20 3H8.5v6H4v7.5A3.5 3.5 0 007.5 20H16a4 4 0 004-4V3zM6.5 11.5h2v5a1 1 0 11-2 0v-5zm10.364 3.75H11.66v-7.5h5.203v1.7h-3.328v1.164h2.854v1.69h-2.854v1.246h3.328v1.7z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="fw-bold fs-16">Third-party Wallets</span>
                                </div>
                           
                        <div class="">
                            <a href="#" class="col d-flex align-items-center justify-content-end asset-balence">
                                 <span class="bi bi-chevron-right fs-12 fw-bold text-theme-yellow ps-2"></span>
                            </a>
                        </div>
                    </div>
                                
                                 <div class="mb-2"></div>
                                 <h4>NFTs </h4>
                                <div class="mb-2"></div>
                                <div class="overview-block-div ">
                       
                        <div class="col-md-12 d-flex" id="unlock-nft-wealth">
                            <div class="nft-wealth-block">
                                <a href="{{ url( app()->getLocale(), 'nft') }}">
                                    <img src="{{asset('img/header-icons/mega-option/exchange.svg') }}"
                                        class="header-icons" alt="Exchange" />
                                </a>
                            </div>
                            <div class="nft-wealth">
                                <p>Unlock your NFT wealth</p>
                                <a href="{{ url( app()->getLocale(), 'nft') }}"
                                    class="btn btn-blue shadow my-2 text-white">Explore
                                    Wealthmark NFT</a>
                            </div>
                        </div>
                    </div>
                </div> 
                </div>

                <div class="col-lg-4">
                    <div class="mt-3"></div>
                    <h5 class="mb-3">Video Tutorials</h5>
                    <div class="funding-video-tutorial" data-bs-toggle="modal"
                        data-bs-target="#overview-fund-your-account">
            

                        <div class="border-bottom py-2 pb-2">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-sm-4  text-center">
                                    <img src="{{asset('img/buyCrypto.png') }}" class="w-100 max-width-150px rounded"  alt="">
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <span class="d-block mt-2">How to deposit crypto on Wealthmark</span>
                                    <p class="mb-0 fs-14 text-muted">02:23</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom py-2 pb-2">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <img src="{{asset('img/buyCrypto.png') }}" class="w-100 max-width-150px rounded"  alt="">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <span class="d-block mt-2">How to deposit crypto on Wealthmark</span>
                                    <p class="mb-0 fs-14 text-muted">02:23</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="no-transaction-record">
                        <div class="col-6">
                            <h5>Recent Transactions </h5>
                        </div>
                        <div class="col-6">
                            <a href="{{ url( app()->getLocale(), 'earn-history') }}" class="btn btn-default">View All
                            </a>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <svg viewBox="0 0 96 96" fill="none" class="no-recent-transaction-icon">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M64 8H26v80h58V28H64V8zM36 37h38v4H36v-4zm0 9h38v4H36v-4zm38 9H36v4h38v-4zm-8 12l4 4-4 4-4-4 4-4zM50 18l-3 3 3 3 3-3-3-3z"
                                            fill="url(#not-found-data_svg__paint0_linear_22059_32288)"></path>
                                        <path opacity="0.3"
                                            d="M86 50l3-3 3 3-3 3-3-3zM47 21l3-3 3 3-3 3-3-3zM84 28H64V8l20 20z"
                                            fill="#929AA5"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.172 73.171l14.5-14.5 5.656 5.658-14.5 14.5-5.656-5.657z"
                                            fill="url(#not-found-data_svg__paint1_linear_22059_32288)"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M51 48c0-8.837-7.163-16-16-16s-16 7.163-16 16 7.163 16 16 16 16-7.163 16-16zm4 0c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20z"
                                            fill="url(#not-found-data_svg__paint2_linear_22059_32288)"></path>
                                        <defs>
                                            <linearGradient id="not-found-data_svg__paint0_linear_22059_32288" x1="55"
                                                y1="8" x2="55" y2="88" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#929AA5" stop-opacity="0.1"></stop>
                                                <stop offset="1" stop-color="#929AA5" stop-opacity="0.25"></stop>
                                            </linearGradient>
                                            <linearGradient id="not-found-data_svg__paint1_linear_22059_32288"
                                                x1="4.172" y1="68.75" x2="24.328" y2="68.75"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#929AA5"></stop>
                                                <stop offset="1" stop-color="#76808F"></stop>
                                            </linearGradient>
                                            <linearGradient id="not-found-data_svg__paint2_linear_22059_32288" x1="15"
                                                y1="48" x2="55" y2="48" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#929AA5"></stop>
                                                <stop offset="1" stop-color="#76808F"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <p class="text-center">No recent transactions </p>
                                <small class="text-center d-flex justify-content-center pt-4">Deposit hasn’t arrived?
                                    Click here</small> <br />
                            </div>


                        </div>
                        </div>
                    </div>
                 
                </div>
               
                
            </div>
    </div>
     </div>
      </div>


    <!--<div class="hide">-->
    <!--    <div id="transfer-modal">-->
    <!--        <div class="wm-custom-modal-body">-->
    <!--            <div class="container p-0">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12 col-lg-12 col-sm-12">-->
    <!--                        <div class="overview-transfer-1fwh5ni">-->
    <!--                            <div class="overview-transfer-1e1f1e0">-->
    <!--                                <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close"-->
    <!--                                    id="wm-custom-modal-close">-->
    <!--                                    <path-->
    <!--                                        d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"-->
    <!--                                        fill="currentColor"></path>-->
    <!--                                </svg>-->
    <!--                            </div>-->
    <!--                            <div class="modal-title overview-transfer-464yi2">-->
    <!--                                <div class="overview-transfer-vurnku">Transfer</div>-->
    <!--                            </div>-->
    <!--                            <div class="style-dialog-body overview-transfer-1dmjzhi">-->
    <!--                                <div class="overview-transfer-pmqufv"></div>-->
    <!--                                <div class="overview-transfer-oxzfpw">Internal transfers are-->
    <!--                                    free on Wealthmark.-->
    <!--                                </div>-->
    <!--                                <div class="container mt-3" id="form-traing-pair">-->
    <!--                                    <div class="row mb-3">-->
    <!--                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">-->
    <!--                                            <div class="transfer-alert-info d-flex">-->

    <!--                                                <span class="alert alert-warning">-->
    <!--                                                    Assets with a value more than 2 times of your total debt can be-->
    <!--                                                    transferred out of your margin account.-->
    <!--                                                </span>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="row">-->
    <!--                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 position-relative">-->
    <!--                                            <label for="">From</label><br />-->
    <!--                                            <div id="second-from-dropdown"-->
    <!--                                                class="form-control transfor-modal-form-control">Isolated Margin-->
    <!--                                            </div>-->
    <!--                                            <div class="wm-sdd-dropdown closing overview-transfer-1tsr9u1 position-absolute"-->
    <!--                                                id="overview-first-dropdown-body-1" style="display:none;">-->

    <!--                                                <ul role="listbox" class="wm-sdd-list overview-transfer-2rl2kr">-->
    <!--                                                    <li role="option" id="second-from-fiat-spot"-->
    <!--                                                        title="Fiat and Spot"-->
    <!--                                                        class="weatlhmark-active-option wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-hbiox4">-->
    <!--                                                                    Fiat-->
    <!--                                                                    and Spot</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="FUTURE_1" title="USDⓈ-M Futures"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-1ufmo62">-->
    <!--                                                                    USDⓈ-M Futures</div>-->
    <!--                                                            </div>-->
    <!--                                                            <div class="overview-transfer-1beohno">-->
    <!--                                                                <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                    Inactive</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="DELIVERY_1" title="COIN-M Futures"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-1ufmo62">-->
    <!--                                                                    COIN-M Futures</div>-->
    <!--                                                            </div>-->
    <!--                                                            <div class="overview-transfer-1beohno">-->
    <!--                                                                <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                    Inactive</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="second-from-isolated-margin"-->
    <!--                                                        title="Isolated Margin"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-15prsq4">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-i7tlno">-->
    <!--                                                                    Isolated Margin</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                </ul>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">-->
    <!--                                            <label for="">Trading Pair</label><br />-->
    <!--                                            <select class="form-control transfor-modal-form-control">-->
    <!--                                                <option>ADX/BUSD </option>-->
    <!--                                                <option>AERGO/BUSD </option>-->
    <!--                                                <option>ALCX/BUSD </option>-->
    <!--                                                <option>aLGO/BUSD </option>-->
    <!--                                                <option>ALICe/BUSD </option>-->
    <!--                                            </select>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="row form-traing-pair-block mt-4">-->
    <!--                                        <div class="col-md-12 position-relative" id="second-to-dropdown-block">-->
    <!--                                            <label for="">To</label><br />-->
    <!--                                            <div type="text" id="second-to-txbox"-->
    <!--                                                class="form-control transfor-modal-form-control">Cross Margin </div>-->

    <!--                                            <div class="second-to-txbox-dropdown-list">-->
    <!--                                                <ul role="listbox" class="wm-sdd-list overview-transfer-2rl2kr">-->


    <!--                                                    <li role="option" id="FUTURE_1" title="USDⓈ-M Futures"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-1ufmo62">-->
    <!--                                                                    USDⓈ-M Futures</div>-->
    <!--                                                            </div>-->
    <!--                                                            <div class="overview-transfer-1beohno">-->
    <!--                                                                <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                    Inactive</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="DELIVERY_1" title="COIN-M Futures"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-1ufmo62">-->
    <!--                                                                    COIN-M Futures</div>-->
    <!--                                                            </div>-->
    <!--                                                            <div class="overview-transfer-1beohno">-->
    <!--                                                                <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                    Inactive</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="second-to-fiat-spot" title="Fiat and Spot"-->
    <!--                                                        class="weatlhmark-active-option wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-hbiox4">-->
    <!--                                                                    Fiat-->
    <!--                                                                    and Spot</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="second-to-cross_margin"-->
    <!--                                                        title="cross margin"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->

    <!--                                                            <div> Cross Margin</div>-->

    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="second-to-isolate-margin"-->
    <!--                                                        title="Isolated Margin"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-15prsq4">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-i7tlno">-->
    <!--                                                                    Isolated Margin</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                </ul>-->

    <!--                                            </div>-->
    <!--                                        </div>-->

    <!--                                        <div class="col-md-6 position-relative"-->
    <!--                                            id="second-trading-pair-dropdown-block">-->
    <!--                                            <label for="">Trading Pair</label><br />-->
    <!--                                            <div type="text" id="second-trading-pair-txbox"-->
    <!--                                                class="form-control transfor-modal-form-control">Cross Margin </div>-->

    <!--                                            <div class="second-trading-pair-txbox-dropdown-list">-->
    <!--                                                <ul role="listbox" class="wm-sdd-list overview-transfer-2rl2kr">-->


    <!--                                                    <li role="option" id="FUTURE_1" title="USDⓈ-M Futures"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-1ufmo62">-->
    <!--                                                                    USDⓈ-M Futures</div>-->
    <!--                                                            </div>-->
    <!--                                                            <div class="overview-transfer-1beohno">-->
    <!--                                                                <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                    Inactive</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="DELIVERY_1" title="COIN-M Futures"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-1ufmo62">-->
    <!--                                                                    COIN-M Futures</div>-->
    <!--                                                            </div>-->
    <!--                                                            <div class="overview-transfer-1beohno">-->
    <!--                                                                <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                    Inactive</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="second-to-fiat-spot" title="Fiat and Spot"-->
    <!--                                                        class="weatlhmark-active-option wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-hbiox4">-->
    <!--                                                                    Fiat-->
    <!--                                                                    and Spot</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                    <li role="option" id="second-to-cross_margin"-->
    <!--                                                        title="cross margin"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->

    <!--                                                            <div> Cross Margin</div>-->

    <!--                                                        </div>-->
    <!--                                                    </li>-->

    <!--                                                    <li role="option" id="second-pair-isolate-margin"-->
    <!--                                                        title="Isolated Margin"-->
    <!--                                                        class="wm-sdd-option-item overview-transfer-15prsq4">-->
    <!--                                                        <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                            <div class="overview-transfer-1pysja1">-->
    <!--                                                                <div class="overview-transfer-i7tlno">-->
    <!--                                                                    Isolated Margin</div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </li>-->
    <!--                                                </ul>-->

    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="row mt-4">-->
    <!--                                        <label for="">Coin</label>-->
    <!--                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">-->
    <!--                                            <div class="coin-block1 d-flex">-->
    <!--                                                <img id="select_coin_img" class="wm-dropdown-optn-item-img"-->
    <!--                                                    src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
    <!--                                                <div class="coin-name">-->
    <!--                                                    <p>1INCH</p>-->
    <!--                                                    <span>0.000000 </span>-->
    <!--                                                </div>-->
    <!--                                            </div>-->

    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"-->
    <!--                                            id="second-to-isolate-margin-hide-box">-->
    <!--                                            <div class="coin-block1 d-flex">-->
    <!--                                                <img id="select_coin_img" class="wm-dropdown-optn-item-img"-->
    <!--                                                    src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
    <!--                                                <div class="coin-name">-->
    <!--                                                    <p>1INCH</p>-->
    <!--                                                    <span>0.000000 </span>-->
    <!--                                                </div>-->
    <!--                                            </div>-->

    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="overview-transfer-7tkdw6">-->
    <!--                                    <div class="overview-transfer-9jes68">-->

                                            <!-- first dropdownlist -->

    <!--                                        <div class="row" id="internal-transfer-first-dropdown">-->
    <!--                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">-->
    <!--                                                <div class="overview-transfer-1sb440z">-->
    <!--                                                    <svg viewBox="0 0 24 24"-->
    <!--                                                        fill="none" class="overview-transfer-1iztezc">-->
    <!--                                                        <path fill-rule="evenodd" clip-rule="evenodd"-->
    <!--                                                            d="M15 3.5a5.502 5.502 0 00-5.302 4.032 7.502 7.502 0 016.77 6.77A5.502 5.502 0 0015 3.5zM14.5 15a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0zm-8 0L9 17.5l2.5-2.5L9 12.5 6.5 15zM9 4H4v5l5-5zm11 16h-5l5-5v5z"-->
    <!--                                                            fill="currentColor"></path>-->
    <!--                                                    </svg><label class="overview-transfer-qd81cz">From</label>-->
    <!--                                                    <div class="overview-transfer-69zxoq"-->
    <!--                                                        id="overview-first-dropdown-head">-->
    <!--                                                        <div class=" overview-transfer-uhb17u">-->
    <!--                                                            <input data-wm-type="input"-->
    <!--                                                                class="wm-sdd-input overview-transfer-1jpgac0"-->
    <!--                                                                value="MAIN">-->
    <!--                                                            <div class="wm-input-suffix overview-transfer-vurnku">-->
    <!--                                                                <div class="overview-transfer-13c2b5p"><svg-->
    <!--                                                                        viewBox="0 0 24 24" fill="none"-->
    <!--                                                                        class="overview-transfer-1nlwvj5">-->
    <!--                                                                        <path-->
    <!--                                                                            d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z"-->
    <!--                                                                            fill="currentColor"></path>-->
    <!--                                                                    </svg></div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->

    <!--                                                        <div class="wm-sdd-value overview-transfer-wfoape">Fiat and-->
    <!--                                                            Spot-->
    <!--                                                        </div>-->

    <!--                                                        <div class="wm-sdd-dropdown closing overview-transfer-1tsr9u1"-->
    <!--                                                            id="overview-first-dropdown-body">-->
    <!--                                                            <ul role="listbox"-->
    <!--                                                                class="wm-sdd-list overview-transfer-2rl2kr">-->
    <!--                                                                <li role="option" id="MAIN" title="Fiat and Spot"-->
    <!--                                                                    class="weatlhmark-active-option wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                                    <div-->
    <!--                                                                        class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                        <div class="overview-transfer-1pysja1">-->
    <!--                                                                            <div class="overview-transfer-hbiox4">-->
    <!--                                                                                Fiat-->
    <!--                                                                                and Spot</div>-->
    <!--                                                                        </div>-->
    <!--                                                                    </div>-->
    <!--                                                                </li>-->

    <!--                                                                <li role="option" id="FUTURE" title="USDⓈ-M Futures"-->
    <!--                                                                    class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                                    <div-->
    <!--                                                                        class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                        <div class="overview-transfer-1pysja1">-->
    <!--                                                                            <div class="overview-transfer-1ufmo62">-->
    <!--                                                                                USDⓈ-M Futures</div>-->
    <!--                                                                        </div>-->
    <!--                                                                        <div class="overview-transfer-1beohno">-->
    <!--                                                                            <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                                Inactive</div>-->
    <!--                                                                        </div>-->
    <!--                                                                    </div>-->
    <!--                                                                </li>-->

    <!--                                                                <li role="option" id="DELIVERY"-->
    <!--                                                                    title="COIN-M Futures"-->
    <!--                                                                    class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                                    <div-->
    <!--                                                                        class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                        <div class="overview-transfer-1pysja1">-->
    <!--                                                                            <div class="overview-transfer-1ufmo62">-->
    <!--                                                                                COIN-M Futures</div>-->
    <!--                                                                        </div>-->
    <!--                                                                        <div class="overview-transfer-1beohno">-->
    <!--                                                                            <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                                Inactive</div>-->
    <!--                                                                        </div>-->
    <!--                                                                    </div>-->
    <!--                                                                </li>-->

    <!--                                                                <li role="option"-->
    <!--                                                                    id="ISOLATED_MARGIN-first-dropdown"-->
    <!--                                                                    title="Isolated Margin"-->
    <!--                                                                    class="wm-sdd-option-item overview-transfer-15prsq4">-->
    <!--                                                                    <div-->
    <!--                                                                        class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                        <div class="overview-transfer-1pysja1">-->
    <!--                                                                            <div class="overview-transfer-i7tlno">-->
    <!--                                                                                Isolated Margin</div>-->
    <!--                                                                        </div>-->
    <!--                                                                    </div>-->
    <!--                                                                </li>-->
    <!--                                                            </ul>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->

                                            <!-- first dropdownlist end -->




    <!--                                        <div class="overview-transfer-1vlmpl8">-->
    <!--                                            <svg viewBox="0 0 24 24" fill="none"-->
    <!--                                                class="overview-transfer-b327i8">-->
    <!--                                                <path fill-rule="evenodd" clip-rule="evenodd"-->
    <!--                                                    d="M12 20.999l7.071-7.071-1.768-1.768-4.054 4.055V2.998h-2.5v13.216L6.696 12.16l-1.768 1.768 7.07 7.071H12z"-->
    <!--                                                    fill="currentColor"></path>-->
    <!--                                            </svg><svg viewBox="0 0 24 24"-->
    <!--                                                fill="none" cursor="pointer" class="overview-transfer-1pndtfo">-->
    <!--                                                <path d="M7.5 3h3v18.5l-7-7h4V3zM16.5 21h-3V2.5l7 7h-4V21z"-->
    <!--                                                    fill="currentColor"></path>-->
    <!--                                            </svg>-->
    <!--                                        </div>-->

    <!--                                        <div class="overview-transfer-1sb440z">-->
    <!--                                            <svg viewBox="0 0 24 24" fill="none"-->
    <!--                                                class="overview-transfer-1iztezc">-->
    <!--                                                <path-->
    <!--                                                    d="M20.018 5.768L20 5.786V12l-3.107-3.107L5.768 20.018 4 18.25 15.125 7.125 12 4h8v1.75l.018.018z"-->
    <!--                                                    fill="currentColor"></path>-->
    <!--                                                <path-->
    <!--                                                    d="M5.768 4l4.827 4.827-1.768 1.768L4 5.768 5.768 4zM13.423 15.19l1.768-1.767 4.827 4.827-1.768 1.768-4.827-4.827z"-->
    <!--                                                    fill="currentColor"></path>-->
    <!--                                            </svg><label class="overview-transfer-qd81cz">To</label>-->
    <!--                                            <div class="overview-transfer-69zxoq"-->
    <!--                                                id="overview-second-dropdown-head">-->
    <!--                                                <div class=" overview-transfer-uhb17u"><input data-wm-type="input"-->
    <!--                                                        class="wm-sdd-input overview-transfer-1jpgac0"-->
    <!--                                                        value="MARGIN">-->
    <!--                                                    <div class="wm-input-suffix overview-transfer-vurnku">-->
    <!--                                                        <div class="overview-transfer-13c2b5p"><svg-->
    <!--                                                                viewBox="0 0 24 24" fill="none"-->
    <!--                                                                class="overview-transfer-1nlwvj5">-->
    <!--                                                                <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z"-->
    <!--                                                                    fill="currentColor"></path>-->
    <!--                                                            </svg></div>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                                <div class="wm-sdd-value overview-transfer-wfoape">Cross Margin-->
    <!--                                                </div>-->
    <!--                                                <div class="wm-sdd-dropdown closing overview-transfer-1tsr9u1"-->
    <!--                                                    id="overview-second-dropdown-body">-->
    <!--                                                    <ul role="listbox" class="wm-sdd-list overview-transfer-2rl2kr">-->
    <!--                                                        <li role="option" id="MARGIN" title="Cross Margin"-->
    <!--                                                            class="weatlhmark-active-option wm-sdd-option-item overview-transfer-1bsofzt">-->
    <!--                                                            <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                <div class="overview-transfer-1pysja1">-->
    <!--                                                                    <div class="overview-transfer-hbiox4">-->
    <!--                                                                        Cross Margin</div>-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </li>-->
    <!--                                                        <li role="option" id="FUTURE" title="USDⓈ-M Futures"-->
    <!--                                                            class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                            <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                <div class="overview-transfer-1pysja1">-->
    <!--                                                                    <div class="overview-transfer-1ufmo62">-->
    <!--                                                                        USDⓈ-M Futures</div>-->
    <!--                                                                </div>-->
    <!--                                                                <div class="overview-transfer-1beohno">-->
    <!--                                                                    <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                        Inactive</div>-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </li>-->
    <!--                                                        <li role="option" id="DELIVERY" title="COIN-M Futures"-->
    <!--                                                            class="wm-sdd-option-item overview-transfer-ze51gc">-->
    <!--                                                            <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                <div class="overview-transfer-1pysja1">-->
    <!--                                                                    <div class="overview-transfer-1ufmo62">-->
    <!--                                                                        COIN-M Futures</div>-->
    <!--                                                                </div>-->
    <!--                                                                <div class="overview-transfer-1beohno">-->
    <!--                                                                    <div class="overview-transfer-1yh4p8a">-->
    <!--                                                                        Inactive</div>-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </li>-->
    <!--                                                        <li role="option" id="CARD" title="Funding"-->
    <!--                                                            class="wm-sdd-option-item overview-transfer-15prsq4">-->
    <!--                                                            <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                <div class="overview-transfer-1pysja1">-->
    <!--                                                                    <div class="overview-transfer-i7tlno">-->
    <!--                                                                        Funding</div>-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </li>-->
    <!--                                                        <li role="option" id="ISOLATED_MARGIN"-->
    <!--                                                            title="Isolated Margin"-->
    <!--                                                            class="wm-sdd-option-item overview-transfer-15prsq4">-->
    <!--                                                            <div class="wm-sdd-option overview-transfer-4cffwv">-->
    <!--                                                                <div class="overview-transfer-1pysja1">-->
    <!--                                                                    <div class="overview-transfer-i7tlno">-->
    <!--                                                                        Isolated Margin</div>-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </li>-->
    <!--                                                    </ul>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->

    <!--                                    </div>-->
    <!--                                </div>-->

    <!--                                <div class="overview-transfer-oxzfpw">-->
    <!--                                    <div class="overview-transfer-1pxm4lx" id="select-coin-full-row"><label-->
    <!--                                            class="overview-transfer-1g9pl1l">Coin</label>-->
    <!--                                        <div class="label position-relative">-->
    <!--                                            <div class="earn-search-div-main">-->
    <!--                                                <div class="lf-select_coin-to" id="earn-search-coin-filter">-->
    <!--                                                    <div class=" coin-swap-from transfor-modal-form-control m-0">-->
    <!--                                                        <input type="text" value="16"-->
    <!--                                                            class="lf-select-coin-to-input">-->
    <!--                                                        <div class="wm-input-suffix ">-->
    <!--                                                            <div class="lf-select-coin-to-drpd">-->
    <!--                                                                <svg viewBox="0 0 24 24" fill="none"-->
    <!--                                                                    class="lf-select-coin-to-icn">-->
    <!--                                                                    <path-->
    <!--                                                                        d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z"-->
    <!--                                                                        fill="currentColor"></path>-->
    <!--                                                                </svg>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->

    <!--                                                    <div-->
    <!--                                                        class="lf-select-coin-to-active-value lf-select-coin-to-active-div">-->

    <!--                                                        <div class="wm-dropdown-optn-item-div">-->
    <!--                                                            <img id="select_coin_img"-->
    <!--                                                                class="wm-dropdown-optn-item-img"-->
    <!--                                                                src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
    <!--                                                            <div id="select_coin_text"-->
    <!--                                                                class="wm-dropdown-optn-item-txt">1 INCH<small>-->
    <!--                                                                    1inch </small></div>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->

    <!--                                                    <div class="wm-dropdown-div  wm-dropdown-div-open"-->
    <!--                                                        style="display: none;">-->
    <!--                                                        <div class="p-3">-->
    <!--                                                            <div class=" wm-dropdown-srch-div">-->
    <!--                                                                <div class="wm-input-prefix ">-->
    <!--                                                                    <svg viewBox="0 0 24 24" fill="none"-->
    <!--                                                                        class=" wm-dropdown-search-icn">-->
    <!--                                                                        <path fill-rule="evenodd"-->
    <!--                                                                            clip-rule="evenodd"-->
    <!--                                                                            d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"-->
    <!--                                                                            fill="currentColor"></path>-->
    <!--                                                                    </svg>-->
    <!--                                                                </div>-->
    <!--                                                                <input type="text" class="wm-dropdown-search-input"-->
    <!--                                                                    value="">-->
    <!--                                                                <div class="wm-input-suffix ">-->
    <!--                                                                    <svg viewBox="0 0 24 24" fill="none"-->
    <!--                                                                        class=" wm-dropdown-search-cross-icn">-->
    <!--                                                                        <path fill-rule="evenodd"-->
    <!--                                                                            clip-rule="evenodd"-->
    <!--                                                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z"-->
    <!--                                                                            fill="currentColor"></path>-->
    <!--                                                                    </svg>-->
    <!--                                                                </div>-->
    <!--                                                            </div>-->
    <!--                                                        </div>-->
    <!--                                                        <ul role="listbox"-->
    <!--                                                            class="wm-dropdown-list wm-dropdown-list-css">-->
    <!--                                                            <li role="option" id="16" title="16"-->
    <!--                                                                class="wm-dropdown-optn-item "-->
    <!--                                                                onclick="changeSrc2(this.id)"-->
    <!--                                                                style="display: list-item;">-->
    <!--                                                                <div class="wm-dropdown-optn-item-inner">-->

    <!--                                                                    <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                        <img class="wm-dropdown-optn-item-img"-->
    <!--                                                                            src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

    <!--                                                                        <div class="wm-dropdown-optn-item-txt">-->
    <!--                                                                            AAVE<small> Aave </small></div>-->

    <!--                                                                    </div>-->
    <!--                                                                </div>-->
    <!--                                                            </li>-->
    <!--                                                            <li role="option" id="17" title="17"-->
    <!--                                                                class="wm-dropdown-optn-item "-->
    <!--                                                                onclick="changeSrc2(this.id)"-->
    <!--                                                                style="display: list-item;">-->
    <!--                                                                <div class="wm-dropdown-optn-item-inner">-->


    <!--                                                                    <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                        <img class="wm-dropdown-optn-item-img"-->
    <!--                                                                            src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

    <!--                                                                        <div class="wm-dropdown-optn-item-txt">-->
    <!--                                                                            ACH<small> Alchemy Pay </small></div>-->
    <!--                                                                    </div>-->


    <!--                                                                </div>-->
    <!--                                                            </li>-->
    <!--                                                            <li role="option" id="14" title="14"-->
    <!--                                                                class="wm-dropdown-optn-item "-->
    <!--                                                                onclick="changeSrc2(this.id)"-->
    <!--                                                                style="display: none;">-->
    <!--                                                                <div class="wm-dropdown-optn-item-inner">-->


    <!--                                                                    <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                        <img class="wm-dropdown-optn-item-img"-->
    <!--                                                                            src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

    <!--                                                                        <div class="wm-dropdown-optn-item-txt">-->
    <!--                                                                            AGLD<small> Adventure Gold</small></div>-->


    <!--                                                                    </div>-->
    <!--                                                                </div>-->
    <!--                                                            </li>-->
    <!--                                                            <li role="option" id="32" title="32"-->
    <!--                                                                class="wm-dropdown-optn-item "-->
    <!--                                                                onclick="changeSrc2(this.id)"-->
    <!--                                                                style="display: list-item;">-->
    <!--                                                                <div class="wm-dropdown-optn-item-inner">-->


    <!--                                                                    <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                        <img class="wm-dropdown-optn-item-img"-->
    <!--                                                                            src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

    <!--                                                                        <div class="wm-dropdown-optn-item-txt">-->
    <!--                                                                            ALGO<small> Algorand</small></div>-->
    <!--                                                                    </div>-->


    <!--                                                                </div>-->
    <!--                                                            </li>-->
    <!--                                                            <li role="option" id="34" title="34"-->
    <!--                                                                class="wm-dropdown-optn-item "-->
    <!--                                                                onclick="changeSrc2(this.id)"-->
    <!--                                                                style="display: list-item;">-->
    <!--                                                                <div class="wm-dropdown-optn-item-inner selected">-->


    <!--                                                                    <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                        <img class="wm-dropdown-optn-item-img"-->
    <!--                                                                            src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

    <!--                                                                        <div class="wm-dropdown-optn-item-txt">-->
    <!--                                                                            AMB<small> Ambrosus</small></div>-->
    <!--                                                                    </div>-->


    <!--                                                                </div>-->
    <!--                                                            </li>-->
    <!--                                                            <li role="option" id="13" title="13"-->
    <!--                                                                class="wm-dropdown-optn-item "-->
    <!--                                                                onclick="changeSrc2(this.id)"-->
    <!--                                                                style="display: none;">-->
    <!--                                                                <div class="wm-dropdown-optn-item-inner">-->
    <!--                                                                    <div class="wm-dropdown-optn-item-div">-->
    <!--                                                                        <img class="wm-dropdown-optn-item-img"-->
    <!--                                                                            src="https://www.wealthmark.io/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->

    <!--                                                                        <div class="wm-dropdown-optn-item-txt">-->
    <!--                                                                            APE<small> ApeCoin</small></div>-->
    <!--                                                                    </div>-->
    <!--                                                                </div>-->
    <!--                                                            </li>-->
    <!--                                                        </ul>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="overview-transfer-1ks6bb6">No amount available to transfer, please-->
    <!--                                        select another-->
    <!--                                        coin.</div>-->
    <!--                                    <div class="overview-transfer-1pxm4lx"><label class="overview-transfer-1g9pl1l">-->
    <!--                                            <div class="overview-transfer-cr60ng">-->
    <!--                                                <div class="overview-transfer-vurnku">Amount-->
    <!--                                                </div>-->
    <!--                                                <div class="overview-transfer-19gx5t6"><span-->
    <!--                                                        class="overview-transfer-6hm6tl">0.00000000 </span>available-->
    <!--                                                    / <span class="overview-transfer-6hm6tl">0.00000000 </span>in-->
    <!--                                                    order</div>-->
    <!--                                            </div>-->
    <!--                                        </label>-->
    <!--                                        <div class=" overview-transfer-1qycgny"><input data-wm-type="input"-->
    <!--                                                autocomplete="off" class="overview-transfer-16fg16t" value="">-->
    <!--                                            <div class="wm-input-suffix overview-transfer-vurnku">-->
    <!--                                                <div class="overview-transfer-1ii0qmr">-->
    <!--                                                    <div class="overview-transfer-3bhv7e">MAX-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="overview-transfer-siljvp">-->
    <!--                                        <div class="overview-transfer-yc6oq3">-->
    <!--                                            <div class="overview-transfer-7y16gy">-->
    <!--                                                <button data-wm-type="button" disabled=""-->
    <!--                                                    class=" overview-transfer-1szubzj">Confirm</button>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="modal fade" id="deposit-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
    <!--    aria-labelledby="deposit-modalLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog modal-dialog-centered">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title" id="deposit-modalLabel">Deposit </h5>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="container ">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-12 col-lg-12 col-sm-12">-->
    <!--                            <h6 class="wm-deposit-title">Select a way to deposit</h6>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-12 col-lg-12 col-sm-12 col-sm-12 my-3">-->
    <!--                            <div class="deposit-type d-flex justify-content-center">-->
    <!--                                <img src="{{ asset('img/crypto-deposit.png') }}"-->
    <!--                                    class="img-fluid overview-deposit-crypto-img" alt="overview modal">-->
    <!--                                <div class="deposit-info ps-3">-->
    <!--                                    <h5 class="m-0">Crypto Deposit </h5>-->
    <!--                                    <div class="text"> I already have crypto and want to transfer them to-->
    <!--                                        wealthmark.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <i class="bi bi-arrow-right pt-3"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-12 col-lg-12 col-sm-12 col-sm-12 my-3">-->
    <!--                            <div class="deposit-type d-flex justify-content-center">-->
    <!--                                <img src="{{ asset('img/fiat-deposit.png') }}"-->
    <!--                                    class="img-fluid overview-deposit-crypto-img" alt="overview modal">-->
    <!--                                <div class="deposit-info ps-3">-->
    <!--                                    <h5 class="m-0">Fiat Deposit </h5>-->
    <!--                                    <div class="text">I want to deposit fiat money (such as EUR, AUD, etc.) from my-->
    <!--                                        bank-->
    <!--                                        account to Wealthmark.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <i class="bi bi-arrow-right pt-3"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-12 col-lg-12 col-sm-12">-->
    <!--                            <h5>Other way of funding</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row" id="overview-other-deposit">-->
    <!--                        <div class="col-md-12">-->
    <!--                            <div class="other-deposit">-->
    <!--                                <h5 class="other-deposit-heading">Buy crypto with card <i-->
    <!--                                        class="bi bi-arrow-right"></i>-->
    <!--                                </h5>-->
    <!--                                <div class="text mb-0">Visa, Mastercard and other supported bank cards. </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-12">-->
    <!--                            <div class="other-deposit">-->
    <!--                                <h5 class="other-deposit-heading">Buy crypto with card <i-->
    <!--                                        class="bi bi-arrow-right"></i>-->
    <!--                                </h5>-->
    <!--                                <div class="text mb-0">Visa, Mastercard and other supported bank cards. </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="modal fade" id="overview-fund-your-account" tabindex="-1"-->
    <!--    aria-labelledby="overview-fund-your-accountLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title" id="overview-fund-your-accountLabel">Fund Your Account</h5>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="wm-custom-modal-body">-->
    <!--                <div class="container">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-12 col-lg-12 col-sm-12">-->
    <!--                            <ul class="nav nav-tabs" id="fiat-funding-tab" role="tablist">-->
    <!--                                <li class="nav-item" role="presentation">-->
    <!--                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"-->
    <!--                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"-->
    <!--                                        aria-selected="true">Buy Crypto</button>-->
    <!--                                </li>-->
    <!--                                <li class="nav-item" role="presentation">-->
    <!--                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"-->
    <!--                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"-->
    <!--                                        aria-selected="false">Deposit Crypto</button>-->
    <!--                                </li>-->
    <!--                                <li class="nav-item" role="presentation">-->
    <!--                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"-->
    <!--                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"-->
    <!--                                        aria-selected="false">Receive Crypto</button>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                            <div class="tab-content" id="fiat-funding-tabContent">-->
    <!--                                <div class="tab-pane fade show active" id="home" role="tabpanel"-->
    <!--                                    aria-labelledby="home-tab">-->
    <!--                                    <div-->
    <!--                                        class="col-lg-12 col-md-12 col-sm-12 funding-your-account-modal text-center">-->
    <!--                                        <div id="appendVideo" class="p-3 bg-white pt-1">-->
    <!--                                            <div class="video-section" style="">-->
    <!--                                                <video width="100%" id="video"-->
    <!--                                                    class="video-js vjs-default-skin vjs-big-play-centered"-->
    <!--                                                    controls="" data-setup="{}" preload="auto">-->
    <!--                                                    <source src="" type="video/mp4">-->

    <!--                                                </video>-->
    <!--                                                <div id="circle-play-b" class="video-play-button">-->
    <!--                                                    <span></span>-->
    <!--                                                </div>-->
    <!--                                                <div class="video-overlay-bg" id="video-overlay-bg"></div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="text">Deposit fiat currencies (e.g. EUR) from your bank account-->
    <!--                                            to-->
    <!--                                            buy crypto.</div>-->
    <!--                                        <a class="text-warning">Learn More ></a>-->
    <!--                                        <br />-->
    <!--                                        <button type="button" class="btn btn-yellow shadow mt-2">Buy Now</button>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="tab-pane fade" id="profile" role="tabpanel"-->
    <!--                                    aria-labelledby="profile-tab">-->
    <!--                                    <div-->
    <!--                                        class="col-lg-12 col-md-12 col-sm-12 funding-your-account-modal text-center">-->
    <!--                                        <div id="appendVideo" class="p-3 bg-white pt-1">-->
    <!--                                            <div class="video-section" style="">-->
    <!--                                                <video width="100%" id="video"-->
    <!--                                                    class="video-js vjs-default-skin vjs-big-play-centered"-->
    <!--                                                    controls="" data-setup="{}" preload="auto">-->
    <!--                                                    <source src="" type="video/mp4">-->

    <!--                                                </video>-->
    <!--                                                <div id="circle-play-b" class="video-play-button">-->
    <!--                                                    <span></span>-->
    <!--                                                </div>-->
    <!--                                                <div class="video-overlay-bg" id="video-overlay-bg"></div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="text">If you already have crypto currency, you can use deposit-->
    <!--                                            function to transfer them from other trading platforms or wallets to-->
    <!--                                            your-->
    <!--                                            Wealthmark account.</div>-->
    <!--                                        <a class="text-warning">Learn More ></a>-->
    <!--                                        <br />-->
    <!--                                        <button type="button" class="btn btn-yellow shadow mt-2">Buy Now</button>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="tab-pane fade" id="contact" role="tabpanel"-->
    <!--                                    aria-labelledby="contact-tab">-->
    <!--                                    <div-->
    <!--                                        class="col-lg-12 col-md-12 col-sm-12 funding-your-account-modal text-center">-->
    <!--                                        <div id="appendVideo" class="p-3 bg-white pt-1">-->
    <!--                                            <div class="video-section" style="">-->
    <!--                                                <video width="100%" id="video"-->
    <!--                                                    class="video-js vjs-default-skin vjs-big-play-centered"-->
    <!--                                                    controls="" data-setup="{}" preload="auto">-->
    <!--                                                    <source src="" type="video/mp4">-->

    <!--                                                </video>-->
    <!--                                                <div id="circle-play-b" class="video-play-button">-->
    <!--                                                    <span></span>-->
    <!--                                                </div>-->
    <!--                                                <div class="video-overlay-bg" id="video-overlay-bg"></div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="text">If you already have crypto currency, you can use deposit-->
    <!--                                            function to transfer them from other trading platforms or wallets to-->
    <!--                                            your-->
    <!--                                            Wealthmark account.</div>-->
    <!--                                        <a class="text-warning">Learn More ></a>-->
    <!--                                        <br />-->
    <!--                                        <button type="button" class="btn btn-yellow shadow mt-2">Buy Now</button>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="modal fade css-vurnku" id="third-paty-wallet-modal" tabindex="-1"-->
    <!--    aria-labelledby="third-paty-wallet-modalLabel" aria-hidden="true">-->
    <!--    <div class="modal-dialog">-->
    <!--        <div class="modal-content">-->
    <!--            <div class="modal-header">-->
    <!--                <h5 class="modal-title" id="third-paty-wallet-modalLabel">Third-party Wallets</h5>-->
    <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="text"> Wealthmark has separate accounts for each trading and finance products.-->
    <!--                            Add an account and transfer your funds to use them.</div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="wm-overview-pv7j37">-->
    <!--                            <div class="wm-overview-1wms2q8">-->
    <!--                                <div class="wm-overview-qxnwr4">-->
    <!--                                    <img src="{{ asset('img/tpw-img-1.png') }}"-->
    <!--                                        class="wm-overview-un68zl" alt="third party icon">-->
    <!--                                    <div data-bn-type="text" class="wm-overview-1xku4e1">tokocrypto</div>-->
    <!--                                </div>-->
    <!--                                <div data-bn-type="text" class="wm-overview-1ez451f">Trade with Indonesian rupiah.-->
    <!--                                    Deposit-->
    <!--                                    and withdraw instantly with direct bank transfer.</div>-->
    <!--                            </div>-->
    <!--                            <div class="wm-overview-11d3d40">-->
    <!--                                <div class="wm-overview-mz3brd">-->
    <!--                                    <div class="wm-overview-jxsao6"></div>-->
    <!--                                    <div data-bn-type="text" class="wm-overview-d85im8">Inactive</div>-->
    <!--                                </div><button data-bn-type="button" class="wm-overview-1s9721q">Activate</button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="text"> Wealthmark has separate accounts for each trading and finance products.-->
    <!--                            Add an account and transfer your funds to use them.</div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="wm-overview-pv7j37">-->
    <!--                            <div class="wm-overview-1wms2q8">-->
    <!--                                <div class="wm-overview-qxnwr4">-->
    <!--                                    <img src="{{ asset('img/tpw-img-2.png') }}"-->
    <!--                                        class="wm-overview-un68zl" alt="third party icon">-->
    <!--                                    <div data-bn-type="text" class="wm-overview-1xku4e1">tokocrypto</div>-->
    <!--                                </div>-->
    <!--                                <div data-bn-type="text" class="wm-overview-1ez451f">Trade with Indonesian rupiah.-->
    <!--                                    Deposit-->
    <!--                                    and withdraw instantly with direct bank transfer.</div>-->
    <!--                            </div>-->
    <!--                            <div class="wm-overview-11d3d40">-->
    <!--                                <div class="wm-overview-mz3brd">-->
    <!--                                    <div class="wm-overview-jxsao6"></div>-->
    <!--                                    <div data-bn-type="text" class="wm-overview-d85im8">Inactive</div>-->
    <!--                                </div><button data-bn-type="button" class="wm-overview-1s9721q">Activate</button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="row">-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="text"> Wealthmark has separate accounts for each trading and finance products.-->
    <!--                            Add an account and transfer your funds to use them.</div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-12">-->
    <!--                        <div class="wm-overview-pv7j37">-->
    <!--                            <div class="wm-overview-1wms2q8">-->
    <!--                                <div class="wm-overview-qxnwr4"><img-->
    <!--                                        src="{{ asset('img/tpw-img-3.png') }}"-->
    <!--                                        class="wm-overview-un68zl" alt="third party icon">-->
    <!--                                    <div data-bn-type="text" class="wm-overview-1xku4e1">tokocrypto</div>-->
    <!--                                </div>-->
    <!--                                <div data-bn-type="text" class="wm-overview-1ez451f">Trade with Indonesian rupiah.-->
    <!--                                    Deposit-->
    <!--                                    and withdraw instantly with direct bank transfer.</div>-->
    <!--                            </div>-->
    <!--                            <div class="wm-overview-11d3d40">-->
    <!--                                <div class="wm-overview-mz3brd">-->
    <!--                                    <div class="wm-overview-jxsao6"></div>-->
    <!--                                    <div data-bn-type="text" class="wm-overview-d85im8">Inactive</div>-->
    <!--                                </div><button data-bn-type="button" class="wm-overview-1s9721q">Activate</button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
   
   
    @include('template.web_footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $("#ISOLATED_MARGIN-first-dropdown").click(function() {

            $("#overview-first-dropdown-body-1").hide();
            $("#overview-first-dropdown-body").hide();
            $("#internal-transfer-first-dropdown").hide();
            $(".overview-transfer-7tkdw6").hide();
            $("#select-coin-full-row").hide();
            $("#form-traing-pair").show();
        });

        $("#second-from-fiat-spot").click(function() {
            $("#overview-first-dropdown-body-1").hide();
            $("#overview-first-dropdown-body").hide();
            $("#internal-transfer-first-dropdown").show();
            $(".overview-transfer-7tkdw6").show();
            $("#select-coin-full-row").show();
            $("#form-traing-pair").hide();
        });

        $("#second-to-txbox").click(function() {
            $(".second-to-txbox-dropdown-list").toggle();
        });



        $("#second-from-dropdown").click(function() {
            $("#overview-first-dropdown-body-1").toggle();
        });

        $("#second-to-isolate-margin").click(function() {
            $("#second-to-isolate-margin-hide-box").hide();
            $(".second-to-txbox-dropdown-list").hide();

            $("#second-to-dropdown-block").removeClass("col-md-12");
            $("#second-to-dropdown-block").addClass("col-md-6");
            $("#second-trading-pair-dropdown-block").show();



        });


        $("#second-to-cross_margin").click(function() {
            $("#second-to-isolate-margin-hide-box").show();
            $(".second-to-txbox-dropdown-list").hide();
        });
        $("#second-to-fiat-spot").click(function() {
            $("#second-to-isolate-margin-hide-box").show();
            $(".second-to-txbox-dropdown-list").hide();
        });
        $("#ISOLATED_MARGIN-first-dropdown").click(function() {
            $("#second-to-isolate-margin-hide-box").hide();
        });


        $("#second-trading-pair-txbox").click(function() {
            $(".second-trading-pair-txbox-dropdown-list").toggle();
        });



    });
    </script>





    <script>
    $(".overview-transfer-popup-modal").click(function() {
        $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    });

    $(".wm-custom-modal-close").click(function() {
        $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

    });
    </script>

    <script>
    $(document).ready(function() {
        $("#overview-skip-guide-btn").click(function() {
            $(".overview-fund-crypto-box").hide();
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#hide-zero-balance").click(function() {
            $(".low-balance").toggle();
        });
    });
    </script>

    <script>
    function showhideBal(id) {
        let divid = id;
        if (divid === "showbalence") {
            $("#hidebalence").show();
            $("#showbalence").hide();
            $('.asset-balence').html("*******");

        }
        if (divid === "hidebalence") {
            $("#showbalence").show();
            $("#hidebalence").hide();
            $('.asset-balence').html("*******");

        }

    }
    </script>

<script>
    function showhideBalestimate(id) {
        let divid = id;
        if (divid === "showbalence-estimate") {
            $("#hidebalence-estimate").show();
            $("#showbalence-estimate").hide();
            $('.estimate-asset-balence').html("*******");

        }
        if (divid === "hidebalence-estimate") {
            $("#showbalence-estimate").show();
            $("#hidebalence-estimate").hide();
            $('.estimate-asset-balence').html("<h3 style='text-decoration:underline;font-size: 1.5rem;color: black;'>0.00000000 </h3><select class='overview-appended-balance' style='border:0px;font-size: 25px;margin-bottom: 7px;'><option class='test-balance-option' style='font-size:15px'>BTC</option><option class='test-balance-option' style='font-size:15px'>BUSD</option><option class='test-balance-option' style='font-size:15px'>ETH</option><option class='test-balance-option' style='font-size:15px'>BNB</option></select> <p style='font-size: 1.5rem;margin-bottom: 8px;'>≈   ₹0.000000 </p>");

        }

    }
    </script>

    <script>
    $(document).ready(function() {
        $("#overview-first-dropdown-head").click(function() {
            $("#overview-first-dropdown-body").toggle();
        });
        $("#overview-second-dropdown-head").click(function() {
            $("#overview-second-dropdown-body").toggle();
        });
        $("#third-modal-select-coin-head").click(function() {
            $("#third-modal-select-coin-body").toggle();
        });
    });
    </script>

    <script>
   
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#showbalence").click(function() {
            $("#show-alert").show();


        });
        $("#hidebalence").click(function() {
            $("#show-alert").hide();
        });
    });
    </script>
</body>

</html>



