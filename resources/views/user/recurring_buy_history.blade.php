<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Buy Recurring Crypto History</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="theme-color" content="#287aff">
    <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
    <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/daterangepicker.css') }}" />
    @include('template.web_css')
    <style>
        .sidebar-nav {
            display: block;
        }
    </style>
</head>
<body>

    @include('template.web_menu')
    <div class="dashboard-main mt-0">
        @include('template.sidebar')
        <div class="w-100">
            <div class="container-fluid p-0">
                <div class="bg-light-blue p-3 w-100">
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2 d-flex align-items-center justify-content-between">
                        <h2 class="fw-bold mb-0">Buy Recurring Crypto History</h2>
                        <a href="javascript:void(0)" class="btn-yellow d-flex" id="buyhistorymodal" onClick="open_modal_div(this.id)">
                            <i class="bi bi-download"></i>
                            <span class="ms-2 d-none d-md-block">Export</span>
                        </a>
                    </div>
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                        <div class="dashboard-tabpills">
                            <div class="">
                                <div class="dashboard-card-body">
                                    @include('user.buy_crypto_history_tab_menu')
                                    <div class="tab-pane fade show active" id="history-buy" role="tabpanel" aria-labelledby="history-buy-tab">
                                        <div class="d-sm-flex align-items-center justify-content-between mt-2 py-2 mb-3 fillter-div-optn">
                                            <div class="d-sm-flex">
                                                <div class="me-2">
                                                    <label class="mb-1 fs-12 fw-bold">Crypto</label>
                                                    <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                                                        <div class=" coin-swap-from m-0 min-height-40px">
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
                                                                        <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
                                                                        <div id="select_coin_text" class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                                                      </div>
                                                                    </div>
                                                        <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
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
                                                           <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                                             <div class="wm-dropdown-optn-item-inner">
                                                               <div class="wm-dropdown-optn-item-div">
                                                                 <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
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
                                                             <div class="wm-dropdown-optn-item-inner selected">
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
                                                <div class="me-2">
                                                <label class="mb-1 fs-12 fw-bold">Crypto</label>
                                                <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                         <div class=" coin-swap-from m-0 min-height-40px">
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
                                    <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
                                    <div id="select_coin_text" class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                  </div>
                                </div>

                               <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
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
                                   <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                     <div class="wm-dropdown-optn-item-inner">
                                       <div class="wm-dropdown-optn-item-div">
                                         <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
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
                                     <div class="wm-dropdown-optn-item-inner selected">
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
                                                <div class="me-2">
                                                <label class="mb-1 fs-12 fw-bold">Crypto</label>
                                                <div class="lf-select_coin-to max-width-200px" id="earn-search-coin-filter">
                         <div class=" coin-swap-from m-0 min-height-40px">
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
                                    <!--<img id="select_coin_img" class="wm-dropdown-optn-item-img" src="https://www.wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png">-->
                                    <div id="select_coin_text" class="wm-dropdown-optn-item-txt">USDT/BNB</div>
                                  </div>
                                </div>

                               <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
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
                                   <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                                     <div class="wm-dropdown-optn-item-inner">
                                       <div class="wm-dropdown-optn-item-div">
                                         <div class="wm-dropdown-optn-item-txt">BTC/USD</div>
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
                                     <div class="wm-dropdown-optn-item-inner selected">
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

                                            <div class="d-flex align-items-center">
                                                <div class="me-1">
                                                    <label class="mb-1 fs-12 fw-bold d-block">&nbsp;</label>
                                                    <a href="javascript:void(0)" class="btn-default d-inline-block">Reset</a>
                                                </div>
                                                <div class="me-1">
                                                    <label class="mb-1 fs-12 fw-bold d-block">&nbsp;</label>
                                                    <a href="javascript:void(0)" class="btn-yellow d-inline-block">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">

                                                        <thead>
                                                            <th>S.No.</th>
                                                            <th>Order Id</th>
                                                            <th>Seller Id</th>
                                                            <th>Buyer Country</th>
                                                            <th>Seller Country</th>
                                                            <th>Crypto Type</th>
                                                            <th>Total Crypto</th>
                                                            <th>Domestic Currency Value</th>
                                                            <th>Payment Method</th>
                                                            <th>Crypto Current Price</th>
                                                            <th>Crypto In INR</th>
                                                            <th>INR In USD</th>
                                                            <th>Status</th>
                                                            <th>Created At</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($recurring_buy_history as $row)
                                                            <?php
                                                                $seller_user = DB::table('users')->where('id',$row->seller_id)->first();
                                                                $payment_method = DB::table('payment_method_lists')->where('id',$row->payment_method_id)->first();
                                                            ?>
                                                                <tr>
                                                                    <td>{{($recurring_buy_history->currentPage() - 1) * $recurring_buy_history->perPage() + $loop->iteration}}</td>
                                                                    <td>{{ $row->order_id }}</td>
                                                                    <td>{{ @$seller_user->first_name }}</td>
                                                                    <td>{{ $row->buyer_country }}</td>
                                                                    <td>{{ $row->seller_country }}</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <img src="{{ url('storage/app/bmklogo/12.png') }}" class="max-width-20px me-2" />
                                                                           <span class="fs-12 fw-bolder">{{ $row->crypto_type }}</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                       <span class="fs-14">{{$row->total_crypto_value}}</span>
                                                                    </td>
                                                                    <td>₹{{$row->domestic_currency_value}}</td>
                                                                    <td>{{--$payment_method->name--}}</td>
                                                                    <td>{{$row->current_crypto_in_inr}}</td>
                                                                    <td>{{$row->current_crypto_in_inr}}</td>
                                                                    <td>{{$row->inr_value_in_usd}}</td>
                                                                    <td class="text-center">
                                                                        @if($row->order_status==1)
                                                                            <span class="bg-green-light p-1 rounded d-inline-block min-width-80px text-center">Success</span>
                                                                        @else
                                                                            <span class="bg-danger d-inline-block p-1 rounded min-width-80px text-white text-center">Failed</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>{{$row->created_at}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="security_pagination mb-4" id="security_pagination">
                                                     {!! $recurring_buy_history->links('pagination::bootstrap-5') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.web_footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>

    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });

    </script>


</body>

</html>
