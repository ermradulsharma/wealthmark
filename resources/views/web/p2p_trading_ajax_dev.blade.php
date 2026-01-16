
<div class="tab-pane show active {{ (Request::segment(2) == 'p2p-trading') ? 'show active':'fade'}}" id="p2p-trading-USDT-tab" role="tabpanel" aria-labelledby="p2p-trading-BTC-tab">

    <div class="tokens-table ">
        @foreach($buyList_details as $bmk)
        {{$bmk['username']}}
        @endforeach
        @if($count_payment_type > 0)
            @foreach($get_BMK_orders as $bmk)
        @php
            $username = App\Models\User::where('id',$bmk->userid)->first();
            $countbmk_orders = App\Models\Postads::where('userid',$bmk->userid)->where('cryptoname',"$bmk->cryptoname")->get();

            $count = $countbmk_orders->count();

            $user_last_activity=App\Models\User::where('id', $bmk->userid)->first();
            $onlneStatus =  $user_last_activity->online_status;
            $paymentmethodid=json_decode($bmk->payment_method);
            $payment_method_type = array();
            foreach ($paymentmethodid as $key => $value) {
              $payment_method_type[] = json_decode($value)->method_type;
             //print_r($payment_method_type);
            }

            $base_url=env('BMK_API_BASE_URL');
            $BmkApiController = new \App\Http\Controllers\BmkApiController;
            $url = $base_url.'/get_currency';
            $params = array();
            $allcurrency = collect($BmkApiController->verify_api($url,$params));
            $currencies = $allcurrency->where('id', $bmk->faithid)->first();
            $currenciesname = $currencies->name;
            $currencysymbol = $currencies->symbol;
            //print_r($allcurrency);
            $countryparty_condition=json_decode($bmk->countryparty_condition);
            $userlaststatus = new \App\Http\Controllers\ChatController;
            $getstatus=  $userlaststatus->get_time_ago( time()-3600 );
            $first_order = App\Models\Postads::where('id','=',$bmk->id)->first();
            $getadsid = $first_order->adsid;
            $today = date('Y-m-d');
            $activeorders = App\Models\Order::where('order_status', '=', 1)
                ->where(function($query) use ($bmk) {
                $query->where('buyer_id', '=', $bmk->userid)
                    ->orWhere('seller_id', '=', $bmk->userid);
                })
                ->where('order_accept_action', '=', 1)->where(function ($query) {
                $query->where(function ($subquery) {
                    $subquery->whereNull('buyer_confirmation_status')
                        ->whereNull('seller_confirmation_status');
                })
                ->orWhere(function ($subquery) {
                    $subquery->whereNull('buyer_confirmation_status')
                        ->where('seller_confirmation_status', '=', 1);
                })
                ->orWhere(function ($subquery) {
                    $subquery->where('buyer_confirmation_status', '=', 1)
                        ->orWhereNull('seller_confirmation_status');
                })
                ->where(function ($subquery) {
                    $subquery->where('buyer_confirmation_status', '!=', 1)
                        ->where('seller_confirmation_status', '!=', 1)
                        ->where('order_status', '!=', 1)
                        ->where('order_accept_action', '!=', 1);
                    });
                })
                ->whereDate('created_at', '=', $today)->first();
                if($activeorders != ''){
                    $orderongoing = 1;
                } else {
                    $orderongoing = 0;
                }

        @endphp

       @if($payment_method_type != null)

        <div class="p2p-tbl-record" id = "{{$bmk->id}}">
            <div class="first p2p-tbl-record-body" >
                <div class="block one flex-row">
                    <span class="buyer_name_first">{{ Str::title($username->first_name[0])}}</span>
                    <div>
                        <div class="position-relative">
                            <span class="buyer_name">
                            @if($username->nick_name != null)
                                {{ Str::title($username->nick_name)}}
                            @else
                                {{ Str::title($username->first_name)}}
                            @endif
                            </span>
                            @php
                                if(Cache::has('user-is-online-' . $bmk->userid)){
                                    $onlineclass = 'online';
                                } else {
                                    $onlineclass = 'offline';
                                }
                            @endphp
                                            <span class="user-login-status {{$onlineclass}}" id="onlinestatus">
                                                <span class="dot"></span>
                                                <span>{{$onlineclass}}</span>
                                            </span>
                                            </div>
                                                <div class="buyer_order_completion ">
                                                    <span class="sub-title order-count text-muted">{{$count}}  orders  </span>
                                                    <span class="sub-title order-completion text-muted">20 % completion</span>
                                                <div class="buyer_order_completion ">
                                                    <span class="sub-title order-completion text-muted">{{-- $bmk->created_at->format('Y-m-d H:i:s') --}} {{ App\Http\Controllers\HomeController::fetchDateFromSQL($bmk->created_at) }}</span>
                                                </div>
                                            </div>
                                                <div class="second">
                                                        <div>

                                                            @if(count($payment_method_type) > 0)
                                                                @foreach ($payment_method_type as $method)
                                                                <?php // print_r($method); ?>
                                                                <span class=" payment-type-txt buyer_payment_type">{{$method }} {{--method_type --}} </span>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="block two">
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Price</span>
                                            </div>
                                            <div>
                                                <span class="sub-title buyer_cr_value">{{$bmk->fixed_floating_pice}} </span>
                                                <span class="sub-title buyer_cr_type">{{$currenciesname}}</span>
                                            </div>

                                        </div>
                                        <div class="block three">
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Available</span>
                                                <span class="subTitle">
                                                        <span class="total-coin">{{$bmk->total_amount}}</span>
                                                        <span>{{$bmk->cryptoname}}</span>
                                                </span>
                                            </div>
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Limit</span>
                                                <span class="sub-title">
                                                    <span class="">{{$currencysymbol}}{{$bmk->order_lower_limit}} </span>
                                                    <span class="">-</span>
                                                    <span class="crypto-total-coin-type">{{$currencysymbol}}{{$bmk->order_higher_limit}}</span>
                                                </span>

                                            </div>
                                        </div>
                                        <div class="block four">
                                            <div class="block">
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Payment</span>
                                            </div>
                                            <div>
                                                @if(count($payment_method_type) > 0)
                                                    @foreach ($payment_method_type ?? [] as $method)
                                                        <span class=" payment-type-txt buyer_payment_type">{{ $method }} {{-- $method->method_type --}}</span>
                                                    @endforeach
                                                @endif
                                           </div>
                                        </div>
                                        </div>
                                        <div class="block five buyer_Crypto_type">
                                            @if(Cache::has('user-is-online-' . $bmk->userid) && $orderongoing != 1)

                                            <a href="javascript:void(0)" class="actn-btn sell " onClick="sell_bmk(this.id)" id ="sell_bmk_{{$bmk->id}}" data-id="{{$bmk->id}}">
                                                <span>Sell</span>
                                            </a>
                                            @elseif($orderongoing == 1 && Cache::has('user-is-online-' . $bmk->userid))
                                            <a href="javascript:void(0)" class="actn-btn" disabled>

                                                <span>Order Ongoing</span>
                                            </a>
                                            @else
                                            <a href="javascript:void(0)" class="actn-btn" id="limitedsell" onClick="limitedsell(this.id)" disabled>

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
    <div class="d-flex justify-content-center pgnation mt-4">
        {!! $get_BMK_orders->render('pagination::bootstrap-5') !!}
    </div>
  </div>
