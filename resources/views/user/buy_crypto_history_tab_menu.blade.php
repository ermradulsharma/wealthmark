<ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link @if(Request::url()==url(app()->getLocale())."/user/other-giftcard-history") active @endif" id="history-buy-tab" data-bs-toggle="tab" data-bs-target="#history-buy" type="button" role="tab" aria-controls="history-buy" aria-selected="true">Buy</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link @if(Request::url()==url(app()->getLocale())."/user/recurring-buy-history") active @endif" href="{{ url(app()->getLocale()) }}/user/recurring-buy-history">Recurring Buy</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link @if(Request::url()==url(app()->getLocale())."/user/other-giftcard-history") active @endif" href="#">Sell</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link @if(Request::url()==url(app()->getLocale())."/user/other-giftcard-history") active @endif" href="#">WM Access</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link @if(Request::url()==url(app()->getLocale())."/user/other-giftcard-history") active @endif" href="#">exchange</a>
    </li>
</ul>


<div class="buyhistorymodal">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-450px">
            <div class="wm-custom-modal-body px-3">
                <div class="wm-custom-modal-header m-0">
                    <span>Export Buy History </span>
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                      <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                    </svg>
                </div>
                <div class="container-fluid p-0 m-0">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="">
                                Date
                            </label>
                            <div class="input-group input-daterange">
                                <input type="text" name="daterange" 
                                    class="form-control" id="buy-crypto-picker"/>
                            </div>
                            <label for=""><small>The selected time range cannot exceed 3 months.</small></label>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4 col-lg-4">
                            <div class="lf-add-coin-div-active">
                                <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                </div>
                                <span class="ps-2">Last 24 Hours</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="lf-add-coin-div-active">
                                <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                </div>
                                <span class="ps-2">Yesterday</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="lf-add-coin-div-active">
                                <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                </div>
                                <span class="ps-2">Last 2 Weeks</span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4 col-lg-4">
                            <div class="lf-add-coin-div-active">
                                <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                </div>
                                <span class="ps-2">Month to Date</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="lf-add-coin-div-active">
                                <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                </div>
                                <span class="ps-2">Past Month</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="lf-add-coin-div-active">
                                <div class="wm-pool-radio-btn-custom">
                                    <input type="radio" class="radio" name="add-liquidity-item">&nbsp;
                                </div>
                                <span class="ps-2">Past 3 Months</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12">
                            <div class="label position-relative">
                                <span class="payment-transation-txt">Status</span>
                                <div class="earn-search-div-main">
                                    <div class="lf-select_coin-to" id="earn-search-coin-filter">
                                        <div class="coin-swap-from m-0 min-height-40px">
                                            <input type="text" value="16" class="lf-select-coin-to-input">
                                            <div class="wm-input-suffix ">
                                                <div class="lf-select-coin-to-drpd">
                                                   <i class="bi bi-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                                            <div class="wm-dropdown-optn-item-div">
                                                <div id="select_coin_text" class="wm-dropdown-optn-item-txt">All
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wm-dropdown-div  wm-dropdown-div-open"  style="display: none;">
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
                                                <li role="option" id="36" title="36" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">
                                                    <div class="wm-dropdown-optn-item-inner">
                                                        <div class="wm-dropdown-optn-item-div">
                                                            <div class="wm-dropdown-optn-item-txt">INJ
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="option" id="37" title="37" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">
                                                    <div class="wm-dropdown-optn-item-inner">
                                                        <div class="wm-dropdown-optn-item-div">
                                                            <div class="wm-dropdown-optn-item-txt">USDP
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="option" id="38" title="38" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: none;">
                                                    <div class="wm-dropdown-optn-item-inner">
                                                        <div class="wm-dropdown-optn-item-div">
                                                            <div class="wm-dropdown-optn-item-txt">FILDOWN
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="option" id="39" title="39" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">
                                                    <div class="wm-dropdown-optn-item-inner">
                                                        <div class="wm-dropdown-optn-item-div">
                                                            <div class="wm-dropdown-optn-item-txt">DYDX
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="option" id="40" title="40" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: list-item;">
                                                    <div class="wm-dropdown-optn-item-inner selected">
                                                        <div class="wm-dropdown-optn-item-div">
                                                            <div class="wm-dropdown-optn-item-txt">QUINT
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="option" id="41" title="41" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)" style="display: none;">
                                                    <div class="wm-dropdown-optn-item-inner">
                                                        <div class="wm-dropdown-optn-item-div">
                                                            <div class="wm-dropdown-optn-item-txt">VAB
                                                            </div>
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
                    <div class="row">
                        <div class="d-flex align-items-center col-12 mt-3 w-100 text-center mb-3">
                            <button type="button" class="btn-yellow d-inline-block  border-0 m-2" >Export Excel</button>
                            <button type="button" class="btn-blue d-inline-block border-0 m-1" >Export Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>