
<div class="tab-pane {{ (Request::segment(2) == 'p2p-trading') ? 'show active':'fade'}}" id="p2p-trading-USDT-tab" role="tabpanel" aria-labelledby="p2p-trading-BTC-tab">

    <div class="tokens-table ">
                    <div class="p2p-tbl-record-div">
                        <div class="p2p-tbl-record-header">
                            <div class="block one">Advertisers (Completion rate)</div>
                            <div class="block two">Price <span class="bg-light-blue text-black p-1 mx-1 rounded shadow-sm"> lowest to highest </span> </div>
                            <div class="block three">Limit/Available</div>
                            <div class="block four">Payment</div>
                            <div class="block five">Trade <span class="bg-success p-1 text-white mx-1 rounded shadow-sm">0 Fee</span></div>
                        </div>

                @if($count_payment_type> 0)
                    @foreach($get_BMK_orders as $bmk)


                        @php
                            $username = App\Models\User::where('id',$bmk->buyer_id)->first();
                            $countbtc_orders = App\Models\Order::where('buyer_id',$bmk->buyer_id)->where('crypto_type',"$bmk->crypto_type")->get();
                            $count = $countbtc_orders->count();
                            $confirmorder = App\Models\Order::where('buyer_id',$bmk->buyer_id)->where('crypto_type',"$bmk->crypto_type")->where('order_status',1)->where('buyer_confirmation_status',1)->where('seller_confirmation_status',1)->get();
                            $count_confirmorder = $confirmorder->count();
                            $cancel_order = App\Models\Order::where('buyer_id',$bmk->buyer_id)->where('crypto_type',"$bmk->crypto_type")->where('order_status',4)->get();
                            $count_cancel_order = $cancel_order->count();
                            $totalorder = $count - $count_cancel_order;
                            $completion_percentage = ($totalorder * 100)/$count;

                            $payment_method_type = App\Models\payment_method_list::where('id', $bmk->payment_method_id)->first();
                             //$currencies=  App\Models\currencies::where('id', $bmk->domestic_currency_type)->first();
                             //$currenciesname = $currencies->name;
                             $base_url=env('BMK_API_BASE_URL');
                                    $BmkApiController = new \App\Http\Controllers\BmkApiController;
                                    $url = $base_url.'/get_currency';
                                    $params = array();
                                    $allcurrency = collect($BmkApiController->verify_api($url,$params));
                                    $currencies = $allcurrency->where('id', $bmk->domestic_currency_type)->first();
                                    $currenciesname = $currencies->name;
                                    //print_r($allcurrency);

                        @endphp

                         <div class="p2p-tbl-record-body" id = "{{$bmk->id}}">

                            <div class="block one d-flex align-items-start">
                                 <span class="buyer_name_first">{{ Str::title($username->first_name[0])}}</span>
                                 <div>
                                <span class="buyer_name d-block">{{ Str::title($username->first_name)}}</span>
                                <span class="adviser-rate-txt buyer_order_completion">{{$count}} orders {{ number_format( $completion_percentage , 2, '.', '') }} % completion </span>
                                </div>
                            </div>
                            <div class="block two">
                                <div class="d-lg-none">
                                    <span class="p2p-tbl-record-body-title">Price</span>
                                </div>
                                <div>
                                    <span class="buyer_cr_value">{{$bmk->domestic_currency_value}} </span>
                                    <span class= "buyer_cr_type">{{$currenciesname}}</span>
                                </div>
                            </div>
                            <div class="block three">
                                <div><span class="p2p-tbl-record-body-title">Available</span> <span class="p2p-tbl-record-body-subtitle"> 21,488.05 USDT </span> </div>
                                <div><span class="p2p-tbl-record-body-title">Limit</span> <span class="p2p-tbl-record-body-subtitle"> ₹ 300,000.00 - ₹ 800,000.00</span> </div>
                            </div>
                            <div class="block four">
                                  <div class="d-lg-none">
                                    <span class="p2p-tbl-record-body-title">Price</span>
                                </div>
                                 <span class=" payment-type-txt buyer_payment_type">{{$payment_method_type->name}}</span>
                            </div>
                            <div class="block five">
                                  <div class="d-lg-none">
                                    <span class="p2p-tbl-record-body-title">Price</span>
                                </div>
                                <div class="buyer_Crypto_type">
                                 <a href="javascript:void(0);" onclick="sell_bmk({{$bmk->id}})" id ="sell_bmk_{{$bmk->id}}" class="btn-green">Sell {{$bmk->crypto_type}}</a>
                           </div>
                            </div>
                        </div>



                        @endforeach
                    @else


                        <div class="no-data bg-white text-center shadow-sm p-5">
                             <img src="{{ asset('img/no-idea-illustration.svg') }}"  class="img-fluid max-width-250px mb-2" alt="gift Card Image">
                            <h3 class="text-center mt-2">No record Found </h3>
                        </div>


                @endif

    </div>
    <div class="d-flex justify-content-center pgnation">
        {!! $get_BMK_orders->render('pagination::bootstrap-5') !!}
    </div>
</div>
</div>
