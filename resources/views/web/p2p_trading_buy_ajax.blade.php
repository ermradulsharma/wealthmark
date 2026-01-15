
<div class="tab-pane {{ (Request::segment(2) == 'p2p-trading') ? 'show active':'fade'}}" id="p2p-trading-USDT-tab" role="tabpanel" aria-labelledby="p2p-trading-BTC-tab">

    <div class="tokens-table ">
                    <!--<div class="p2p-tbl-record-div">-->
                    <!--    <div class="p2p-tbl-record-header">-->
                    <!--        <div class="block one">Advertisers (Completion rate)</div>-->
                    <!--        <div class="block two">Price <span class="bg-light-blue text-black p-1 mx-1 rounded shadow-sm"> lowest to highest </span> </div>-->
                    <!--        <div class="block three">Limit/Available</div>-->
                    <!--        <div class="block four">Payment</div>-->
                    <!--        <div class="block five">Trade <span class="bg-success p-1 text-white mx-1 rounded shadow-sm">0 Fee</span></div>-->
                    <!--    </div>-->

                @if($count_payment_type> 0)
                    @foreach($buyList_details as $bmk)



                        <?php //dd( $bmk);
                       // print_r($onlineusers);
                        // print_r($payment_method_type);
                        ?>
                        @if($bmk['payment_method_type'] != null)

                         <?php // print_r($payment_method_type); ?>
                         <div class="p2p-tbl-record" id = "{{$bmk['id']}}">

                            <div class="first p2p-tbl-record-body" >

                                        <div class="block one flex-row">
                                             <span class="buyer_name_first">{{ Str::title($bmk['username'][0])}}</span>
                                                <div>
                                                   <div class="position-relative">
                                                       <span class="buyer_name">

                                                            @if($bmk['nick_name'] != null)

                                                                {{ Str::title($bmk['nick_name'])}}
                                                           @else
                                                                {{ Str::title($bmk['username'])}}
                                                           @endif
                                                        </span>
                                                        <span>
                                                              @php
                                                               if(Cache::has('user-is-online-' . $bmk['userid'])){
                                                               $onlineclass = 'online';
                                                               } else{
                                                               $onlineclass = 'offline';
                                                                    }
                                                            @endphp
                                                        </span>

                                                    <span class="user-login-status {{$onlineclass}}" id="onlinestatus">
                                                        <span class="dot"></span>
                                                        <span>{{$onlineclass}}</span>
                                                    </span>
                                                </div>
                                                <div class="buyer_order_completion ">
                                                    <span class="sub-title order-count text-muted">{{$bmk['count']}}  orders  </span>
                                                    <span class="sub-title order-completion text-muted">20 % completion</span>
                                                </div>
                                                <div class="buyer_order_completion ">
                                                    <span class="sub-title order-completion text-muted">{{--  $bmk->created_at->format('Y-m-d H:i:s') --}} {{ $bmk['created_at'] }}</span>
                                                </div>
                                                <div class="second">
                                                    <div>
                                                        @foreach ($bmk['payment_method_type'] as $method)
                                                            <span class=" payment-type-txt buyer_payment_type">{{$method }} {{-- $method->method_type --}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="block two">
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Price</span>
                                            </div>
                                            <div>
                                                <span class="sub-title buyer_cr_value">{{$bmk['fixed_floating_pice']}} </span>
                                                <span class="sub-title buyer_cr_type">{{$bmk['currenciesname']}}</span>
                                            </div>

                                        </div>
                                        <div class="block three">
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Available</span>
                                                <span class="subTitle">
                                                        <span class="total-coin">{{$bmk['total_amount']}}</span>
                                                        <span>{{$bmk['cryptoname']}}</span>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Limit</span>
                                                <span class="sub-title">
                                                    <span class="">{{$bmk['currencysymbol']}}{{$bmk['order_lower_limit']}} </span>
                                                    <span class="">-</span>
                                                    <span class="crypto-total-coin-type">{{$bmk['currencysymbol']}}{{$bmk['order_higher_limit']}}</span>
                                                </span>

                                            </div>
                                        </div>
                                        <div class="block four">
                                            <div class="block">
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Payment</span>
                                            </div>
                                            <div id="paymentId">
                                                @foreach ($bmk['payment_method_type'] as $method)
                                                    <span class=" payment-type-txt buyer_payment_type-2">{{$method }} {{-- $method->method_type --}}</span>
                                                @endforeach
                                           </div>
                                        </div>
                                        </div>
                                        <div class="block five buyer_Crypto_type">

                                           @if(Cache::has('user-is-online-' . $bmk['userid']) && $bmk['orderongoing'] != 1)
                                            <a href="javascript:void(0)" class="actn-btn buy" onClick="Buy_bmk(this.id)" id ="Buy_bmk_{{$bmk['id']}}">

                                                <span class="span">Buy {{$bmk['cryptoname']}}</span>
                                            </a>
                                            @elseif($bmk['orderongoing'] == 1 && Cache::has('user-is-online-' . $bmk['userid']))
                                            <a href="javascript:void(0)" class="actn-btn" disabled>

                                                <span>Order Ongoing</span>
                                            </a>
                                            @else
                                            <a href="javascript:void(0)" class="actn-btn" id="limited" onClick="limited(this.id)" disabled>

                                                <span>Limited</span>
                                            </a>

                                            @endif
                                        </div>

                                </div>

                            </div>

                        @endif





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
