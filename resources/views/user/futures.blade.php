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
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    @include('template.web_css')

    <style>
    .sidebar-nav {
        display: block;
    }

.ref-code-block {
    box-sizing: border-box;
    min-width: 0px;
    position: relative;
    display: inline-flex;
    cursor: pointer;
    border: 1px solid rgb(234, 236, 239);
    border-radius: 4px;
    margin: 8px 12px;
    /*flex: 0 1 0px;*/
    overflow: visible;
}
.ref-code-inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding: 24px 16px;
    flex-direction: column;
    -webkit-box-pack: justify;
    justify-content: space-between;
    width: 100%;
}

.ref-code-unactive-icn {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-color: transparent rgb(234, 236, 239) transparent transparent;
    border-width: 0px 24px 24px 0px;
}
.ref-code-svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: absolute;
    top: 0px;
    right: 0px;
    line-height: 1;
}
 .ref-code-svg svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(255, 255, 255);
    font-size: 24px;
    fill: rgb(255, 255, 255);
    width: 1em;
    height: 1em;
}
.ref-code-block.active {
    border: 1px solid rgb(240, 185, 11);

}
.ref-code-active-icn {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-color: transparent rgb(240, 185, 11) transparent transparent;
    border-width: 0px 24px 24px 0px;
}

.ref-code-block .ref-code-active-icn{
    display:none;
}
.ref-code-block.active .ref-code-unactive-icn{
    display:none;
}
.ref-code-block.active .ref-code-active-icn{
    display:block !important;
}
    </style>




    <style>
    /*@media(max-width:576px) {*/
    /*    .table-responsive {*/
    /*        overflow: scroll !important;*/
    /*    }*/
    /*}*/

    /*.table-responsive {*/
    /*    overflow: scroll;*/
    /*}*/

    /*.open_modal {*/
    /*    pointer-events: none;*/
    /*}*/

    /*.active-btn {*/
    /*    pointer-events: all;*/
    /*    color: #222222;*/
    /*    font-size: 14px;*/
    /*    background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);*/
    /*    font-weight: 600;*/
    /*    border-radius: 5px;*/
    /*    white-space: nowrap;*/
    /*    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%) !important;*/
    /*}*/

    /*.dashboard-breadcrumb {*/
    /*    height: 71.60px;*/
    /*}*/

    /*.sidebar-nav {*/
    /*    display: block;*/
    /*}*/

    /*#preloader {*/
    /*    display: none !important;*/
    /*}*/

    /*@media (max-width: 450px) {*/

    /*    .balance-details .dashboard-card-header {*/
    /*        display: block;*/

    /*    }*/

    /*    .dashboard-card-heading {*/
    /*        margin-bottom: 10px;*/
    /*        display: block;*/
    /*    }*/

    /*    .balance-details .dashboard-card-header .btn-theme-sm {*/
    /*        margin-left: 0px;*/
    /*    }*/

    /*    #progressbar li {*/
    /*        width: 33% !important;*/
    /*    }*/

    /*}*/






    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/


    /*@media (max-width: 992px) {*/
    /*    .hide_on_max_dashboard_992 {*/
    /*        display: none !important;*/
    /*    }*/
    /*}*/

    /* .dashboard-main {
        margin-top: 10px !important;
    } */

    /*.hide_on_dashboard {*/
    /*    display: none !important;*/
    /*}*/

    /*header {*/
    /*    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;*/
    /*    background: white;*/
    /*    z-index: 9999999999 !important;*/

    /*}*/

    /*.sidebar-btn-open {*/
    /*    font-size: 30px;*/
    /*    color: #242424;*/
    /*}*/

    /*@media (max-width: 992px) {*/
    /*    .sidebar.active {*/
    /*        display: block;*/
    /*        top: 0px !important;*/
    /*        position: fixed !important;*/
    /*        right: 0 !important;*/
    /*        left: auto !important;*/
    /*    }*/

    /*    .dashboard-sidebar {*/
    /*        box-sizing: border-box;*/
    /*        margin: 0px;*/
    /*        min-width: 0px;*/
    /*        position: fixed;*/
    /*        inset: 0px;*/
    /*        z-index: 9999;*/
    /*        flex-direction: row-reverse;*/
    /*        background-color: rgba(0, 0, 0, 0.1);*/
    /*        display: none;*/
    /*        transition: all 0.5s ease;*/
    /*    }*/

    /*    .dashboard-sidebar-flex {*/
    /*        display: flex !important;*/
    /*    }*/
    /*}*/

    /*.wm-custom-modal-diolog {*/
    /*    width: 740px;*/
    /*    height: 300px;*/
    /*}*/

    /*.product-card {*/
    /*    flex-basis: 200px !important;*/
    /*    margin-right: 0px !important;*/
    /*    margin-bottom: 0px !important;*/
    /*    padding: 12px 18px !important;*/
    /*    border: 1px solid #e5e5e5;*/
    /*    margin: 20px;*/
    /*}*/

    /*.product-container-block .row {*/
    /*    display: flex;*/
    /*    justify-content: center;*/
    /*}*/

    /*.default-leverge-txt small {*/
    /*    font-size: .8em;*/
    /*    color: #4a4a4a;*/
    /*    font-weight: 300 !important;*/
    /*}*/

    /*.select-custom-leverage {*/
    /*    word-wrap: normal;*/
    /*    border: 1px solid #fdc11685;*/
    /*    border-radius: 4px;*/
    /*    color: #fdc116;*/
    /*}*/

    /*.product-card div.text {*/
    /*    margin-bottom: 10px;*/
    /*    font-size: 18px;*/
    /*    line-height: 26px;*/
    /*    text-align: inherit;*/
    /*}*/

    /*.modal.show .modal-dialog {*/
    /*    top: 28.4%;*/
    /*}*/

    /*#verification-required.modal {*/
    /*    z-index: 9999999999999;*/
    /*    background-color: #50505080;*/
    /*}*/

    /*.dashboard-breadcrumb {*/
    /*    padding: 15px 0;*/
    /*    background: #f1f1f1;*/
    /*    min-height: 40px;*/
    /*    box-shadow: 0px 2px 1px 0px;*/
    /*}*/

    /*.future-center-block .text {*/
    /*    margin-bottom: 10px;*/
    /*    font-size: 15px;*/
    /*    line-height: 26px;*/
    /*    text-align: justify;*/
    /*    color: #474D57;*/
    /*    font-weight: 400 !important;*/
    /*    display: block;*/
    /*}*/

    /*.earn-search-div-main {*/
    /*    width: 54px;*/
    /*    height: 26px;*/
    /*    position: absolute;*/
    /*    right: 40px;*/
    /*    top: -25px;*/
    /*}*/

    /*.lf-select_coin-to .lf-select-coin-to-active-value {*/
    /*    min-height: 32px;*/
    /*    padding: 0px !important;*/
    /*}*/

    /*.coin-swap-from {*/
    /*    height: 26px;*/
    /*}*/

    /*.coin-swap-from input {*/
    /*    padding-top: 25px;*/
    /*}*/

    /*.wm-dropdown-optn-item-inner.selected:after {*/
    /*    display: none;*/
    /*}*/

    /*.text a:hover {*/
    /*    cursor: pointer;*/
    /*}*/

    /*.dashboard-main .container-fluid {*/
    /*    padding: 0rem 1rem !important;*/
    /*}*/

    /*@media(max-width:768px) {*/
    /*    .earn-search-div-main {*/
    /*        display: block;*/
    /*    }*/
    /*}*/
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
                <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="future-center-block max-width-600px m-auto text-center shadow-sm border p-4">
                        <img src="{{ asset('img/assets/img/open-futures-account-img.svg') }}" class="img-fluid mb-3" alt="walth mark blog">
                        <h3 class="mb-2">Open Future Account </h3>
                        <div class="text my-3 text-justify">
                            Futures trading is a highly risky endeavor, with
                            the potential for both great profits and significant losses.
                            Please be aware that in the event of extreme price movement,
                            there is a chance that all margin balance in your futures
                            wallet may be liquidated. Futures trading is restricted for
                            users from certain regions.
                        </div>
                        <div class="future-second-block">
                            <input type="checkbox" id="onclickbtnactive"> I have read and agree to Wealthmark <a class="text-warning">Future Service Agreement </a>
                            <div class="form-floating my-4">
                                <input type="text" class="form-control" id="futureReffCode" placeholder="Futures referral code (Optional)">
                                <label for="futureReffCode">Futures referral code (Optional)</label>
                            </div>

                            <a class="btn btn-default d-block  mt-3 mb-2" id="ref-code-modal" onClick="open_modal_div(this.id)">Open Now </a>
                            <a class="text-warning pt-3">Click to see Future Trading Guide </a>
                        </div>

                    </div>

                </div>
            </div>
                </div>
                </div>
                </div>




        <div class="container-fluid p-0 d-none">
        <div class="row" id="mobile-icon-row">
                <div class="col-md- d-flex justify-content-end">
                    <a class="order-tab-mobile-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <span class="bi bi-list btn-mobile-nav"></span>
                    </a>
                </div>
            </div>
            <div class="row align-items-center justify-content-between dashboard-breadcrumb">
                <div class="col-12">
                    <h2 class="fw-bold mb-0">Futures</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="future-center-block">
                        <img src="{{ asset('img/open-futures-account-img.svg') }}" class="img-fluid"
                            alt="walth mark blog">
                        <h3>Open Future Account </h3>
                        <div class="text my-3">
                            Futures trading is a highly risky endeavor, with
                            the potential for both great profits and significant losses.
                            Please be aware that in the event of extreme price movement,
                            there is a chance that all margin balance in your futures
                            wallet may be liquidated. Futures trading is restricted for
                            users from certain regions.
                        </div>
                        <div class="future-second-block">
                            <input type="checkbox" id="onclickbtnactive" /> I have read and agree to Wealthmark <a
                                class="text-warning">Future Service Agreement </a>
                            <div class="form-floating my-4">
                                <input type="text" class="form-control" id="futureReffCode"
                                    placeholder="Futures referral code (Optional)">
                                <label for="futureReffCode">Futures referral code (Optional)</label>
                            </div>

                            <a class="btn btn-default d-block open_modal mt-3 mb-2">Open Now </a>
                            <a class="text-warning pt-3">Click to see Future Trading Guide </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="ref-code-modal">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-650px" >
           <div>
                <div class="wm-custom-modal-header">
                    <span>Select Default Leverage</span>
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                        <path
                            d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                </div>
                  <div class="wm-custom-modal-body px-4 py-3 pt-0">
                <div class="d-flex">
                   <div class="ref-code-block active">
                      <div class="ref-code-inner">
                        <div  class="fs-14 yellow-text">Beginner</div>
                        <div  class="text fs-12">With default 5x leverage</div>
                      </div>
                      <div class="ref-code-active-icn"></div>
                      <div class="ref-code-unactive-icn"></div>
                      <div class="ref-code-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="">
                          <path d="M20.723 5.248l-1.246-1.246-4.652 4.652-2.077-2.077-1.246 1.246 3.323 3.323 5.898-5.898z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="ref-code-block">
                      <div class="ref-code-inner">
                        <div  class="fs-14 yellow-text">Experienced</div>
                        <div  class="text fs-12">With default 20x leverage</div>
                      </div>
                      <div class="ref-code-unactive-icn"></div>
                      <div class="ref-code-active-icn"></div>
                      <div class="ref-code-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="">
                          <path d="M20.723 5.248l-1.246-1.246-4.652 4.652-2.077-2.077-1.246 1.246 3.323 3.323 5.898-5.898z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="ref-code-block">
                      <div class="ref-code-inner">
                        <div  class="fs-14 yellow-text">Customize</div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">Select</span>
                              <div class="earn-search-div-main max-width-150px">
                        <div class="lf-select_coin-to" id="earn-search-coin-filter">
                                               <div class=" coin-swap-from m-0">
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
                                                   <div id="select_coin_text" class="wm-dropdown-optn-item-txt">1x</div>
                                                 </div>
                                               </div>
                                               <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
                                                 <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css" id="custom-leverage-list">
                                                   <li role="option" id="15" title="15" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">1x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">2x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">3x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="18" title="18" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">4x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="19" title="19" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">5x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="20" title="20" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">6x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="21" title="21" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">7x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="22" title="22" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">8x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="23" title="23" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">9x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="24" title="24" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">10x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="25" title="25" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">11x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="26" title="26" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">12x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="27" title="27" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">13x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="28" title="28" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">14x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="29" title="29" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">15x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="30" title="30" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">16x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="31" title="31" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">17x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">18x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="33" title="33" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">19x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                   <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                     <div class="wm-dropdown-optn-item-inner">
                                                       <div class="wm-dropdown-optn-item-div">
                                                         <div class="wm-dropdown-optn-item-txt">20x </div>
                                                       </div>
                                                     </div>
                                                   </li>
                                                 </ul>
                                               </div>
                                             </div>
                      </div>
                        </div>
                        <div  class="text fs-12">as default leverage</div>
                      </div>
                      <div class="ref-code-unactive-icn"></div>
                      <div class="ref-code-active-icn"></div>
                      <div class="ref-code-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="">
                          <path d="M20.723 5.248l-1.246-1.246-4.652 4.652-2.077-2.077-1.246 1.246 3.323 3.323 5.898-5.898z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>






             </div>
                        <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="text ms-4 mt-2 default-leverge-txt">
                                        <small><i class="bi bi-info-circle-fill"></i> Setting a default leverage only
                                            applies for USDⓈ-M Futures. COIN-M Futures default leverage is 20x.</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a class="btn btn-yellow shadow float-end me-4" data-bs-toggle="modal"
                                        data-bs-target="#verification-required">Open Futures Account </a>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>
    <!-- Modal -->
<div class="modal fade" id="verification-required" tabindex="-1" aria-labelledby="verification-requiredLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="verification-requiredLabel">Verification Required </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                            <svg viewBox="0 0 96 97" width="120" fill="none" class="wm-verification-icon">
                                <path d="M66 8.088l4 4 4-4-4-4-4 4zM41 91.088l3 3 3-3-3-3-3 3zM14 87.088h3v-3h-3v3z"
                                    fill="#E6E8EA"></path>
                                <path d="M6 18.088h84v60H6v-60z" fill="url(#kyc-light_svg__paint0_linear)"></path>
                                <path d="M6 49.088h84v29H6v-29z" fill="url(#kyc-light_svg__paint1_linear)"></path>
                                <path fill="#fff" d="M14 31.088h24v34H14z"></path>
                                <path fill="#fff" d="M14 31.088h24v18H14z"></path>
                                <path d="M33 44.089a7 7 0 10-14.001 0 7 7 0 0014 0z"
                                    fill="url(#kyc-light_svg__paint2_linear)"></path>
                                <path d="M14 55.088v12h24v-12h-7l-5 5-5-5h-7z"
                                    fill="url(#kyc-light_svg__paint3_linear)"></path>
                                <path d="M45 31.088h19v4H45v-4z" fill="url(#kyc-light_svg__paint4_linear)"></path>
                                <path d="M45 43.088h37v4H45v-4z" fill="url(#kyc-light_svg__paint5_linear)"></path>
                                <path fill="#76808F" d="M45 55.088h37v4H45zM45 63.088h37v4H45z"></path>
                                <path d="M32.999 44.089a7 7 0 11-14 0 7 7 0 0114 0z"
                                    fill="url(#kyc-light_svg__paint6_linear)"></path>
                                <path d="M31.744 48.088a6.992 6.992 0 01-5.745 3 6.992 6.992 0 01-5.746-3h11.491z"
                                    fill="#E6E8EA"></path>
                                <path d="M0 47.088h96v4H0v-4z" fill="#76808F"></path>
                                <defs>
                                    <linearGradient id="kyc-light_svg__paint0_linear" x1="48" y1="18.088" x2="48"
                                        y2="78.088" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="kyc-light_svg__paint1_linear" x1="90" y1="49.845" x2="90"
                                        y2="77.088" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FAFAFA"></stop>
                                        <stop offset="1" stop-color="#E6E8EA"></stop>
                                    </linearGradient>
                                    <linearGradient id="kyc-light_svg__paint2_linear" x1="26" y1="37.088" x2="26"
                                        y2="67.088" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="kyc-light_svg__paint3_linear" x1="26" y1="37.088" x2="26"
                                        y2="67.088" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#929AA5"></stop>
                                        <stop offset="1" stop-color="#76808F"></stop>
                                    </linearGradient>
                                    <linearGradient id="kyc-light_svg__paint4_linear" x1="45" y1="39.088" x2="82"
                                        y2="39.088" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                    <linearGradient id="kyc-light_svg__paint5_linear" x1="45" y1="39.088" x2="82"
                                        y2="39.088" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                    <linearGradient id="kyc-light_svg__paint6_linear" x1="25.999" y1="51.089"
                                        x2="25.999" y2="37.089" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F0B90B"></stop>
                                        <stop offset="1" stop-color="#F8D33A"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="p-2"></div>
                            <div class="text">All new and existing users are required to complete Identity Verification
                                to access the full range of Binance products and services.<a class="text-warning">Learn
                                    more</a></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-bs-dismiss="modal">Cancel</a>
                    <a href="{{ url( app()->getLocale(), 'identification') }}" class="btn btn-yellow shadow">Verify
                        Now</a>
                </div>
            </div>
        </div>
    </div>


    @include('template.web_footer')

    <script>
    // $(".open_modal").click(function() {
    //     $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    // });

    // $(".wm-custom-modal-close").click(function() {
    //     $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

    // });

    // $('.reward-alert-popup-div2').click(function() {
    //     $(this).parent().addClass('hide');
    // });

    // $('.product-card').click(function() {
    //     $(this).addClass('selected').siblings().removeClass('selected');
    // });
    // $('.coin-select').click(function(e) {
    //     $(this).siblings('.select').toggle()
    // });
    </script>
    <script>
    // $('.coin-swap-from').click(function() {
    //     $(this).siblings(".wm-dropdown-div").toggle();
    // });
    // $('.payment-transation-txt').click(function() {
    //     $(this).siblings(".wm-dropdown-div").toggle();
    // });

    // function changeSrc2(id) {
    //     const li = id;
    //     $(".lf-select-coin-to-active-value #select_coin_img").attr('src', $("#" + li + ' ' +
    //         ".wm-dropdown-optn-item-img").attr('src'));
    //     $(".lf-select-coin-to-active-value #select_coin_text").html($("#" + li + ' ' + ".wm-dropdown-optn-item-txt")
    //         .html());
    //     $("#" + li).children('.wm-dropdown-optn-item-inner').addClass('selected');
    //     $("#" + li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass(
    //         'selected');
    //     $(".wm-dropdown-div").hide();
    // };

    // $(function() {
    //     $("#earn-search-coin-filter .wm-dropdown-search-input").on("keyup", function() {
    //         var value = $(this).val().toLowerCase();
    //         $("#earn-search-coin-filter .wm-dropdown-div ul li").filter(function() {
    //             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //         });
    //     });
    // });

    // $('.wm-dropdown-search-cross-icn').on('click', function(e) {
    //     $('.wm-dropdown-search-input').val('');
    //     $('.wm-dropdown-div ul li').show();
    //     return false;
    // });

    // function showtblfilter(id) {
    //     const divid = id;
    //     alert(divid);

    //     $("#" + divid).addClass('coins-filter-type-div').removeClass('coins-filter-inner-block-div');
    //     $("#" + divid).siblings('.coins-filter-type-div').addClass('coins-filter-inner-block-div').removeClass(
    //         'coins-filter-type-div');

    // };




    // $('.reward-alert-popup-div2').click(function() {
    //     $(this).parent().addClass('hide');
    // });

    // $('.product-card').click(function() {
    //     $(this).addClass('selected').siblings().removeClass('selected');
    // });
    // $('.coin-select').click(function(e) {
    //     $(this).siblings('.select').toggle()
    // });
    // $("#barrow_coin_list").on("keyup", function() {
    //     var value = $(this).val().toLowerCase();
    //     $("#barrow_dropdown .select-drop-inner .select-drop-list-div-main .select-drop-list-div ").filter(
    //         function() {
    //             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //         });
    // });

    // function changeSrc(id) {
    //     const li = id;
    //     $(".coin-select #barrow-coin-img").attr('src', $("#" + li + ' ' + ".barrow-drdn-img").attr('src'));
    //     $(".coin-select #barrow-coin-text").html($("#" + li + ' ' + ".barrow-drdn-text").html());
    //     $(".expand").hide();
    // };
    </script>

    <script>
    $("#onclickbtnactive").click(function() {
        if ($(this).is(":checked")) {
            alert(" Are you Sure? You have read the Future Service Agreement?");
            $("#ref-code-modal").addClass("btn-yellow shadow-none");
            $("#ref-code-modal").removeClass("btn-default");

        } else {
            $("#ref-code-modal").removeClass("btn-yellow shadow-none");
             $("#ref-code-modal").addClass("btn-default");
            // $(".open_modal").removeClass("shadow");

        }
    });

      $(".ref-code-block").click(function() {
            $(this).addClass('active');
            $(this).siblings().removeClass('active')
      });
    </script>

</body>

</html>
