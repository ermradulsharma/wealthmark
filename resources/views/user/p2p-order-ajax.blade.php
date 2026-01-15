 @php  $i=1; @endphp
                                               @foreach ($p2p_orders as $p2p_order)

                                               @php

                                                $base_url=env('BMK_API_BASE_URL');
                                                            $BmkApiController = new \App\Http\Controllers\BmkApiController;
                                                            $url = $base_url.'/get_currency';
                                                            $params = array();
                                                            $allcurrency = collect($BmkApiController->verify_api($url,$params));
                                                            $currencies = $allcurrency->where('id', $p2p_order->domestic_currency_type)->first();

                                                            $currenciesname = $currencies->name;
                                               @endphp
                                              <tbody class="table__tbody">

                                                <tr class="table-row table-row--angie">
                                                  <td class="table-row__td">
                                                    <input id="" type="checkbox" class="table__select-row">
                                                  </td>
                                                  <td data-column="sl-no" class="table-row__td">
                                                    <p class="table-row__status">{{$i}}</p>
                                                  </td>
                                                  <td class="table-row__td">
                                                    @if($p2p_order->crypto_type == 'BMK')
                                                        <div class="table-row__img">
                                                            <img src="https://wealthmark.io/storage/app/bmklogo/12.png">
                                                        </div>
                                                        <div class="table-row__info">
                                                          <!--<p class="table-row__name">Bmkoin</p>-->
                                                          <span class="table-row__small">{{$p2p_order->crypto_type}}</span>
                                                        </div>
                                                    @endif

                                                    @if($p2p_order->crypto_type == 'BTC')
                                                        <div class="table-row__img">
                                                            <img src="https://wealthmark.io/assets/img/coin-logo/bitcoin.svg">
                                                        </div>
                                                        <div class="table-row__info">
                                                          <!--<p class="table-row__name">Bitcoin</p>-->
                                                          <span class="table-row__small">{{$p2p_order->crypto_type}}</span>
                                                        </div>
                                                    @endif

                                                    @if($p2p_order->crypto_type == 'ETH')
                                                        <div class="table-row__img">
                                                            <img src="https://wealthmark.io/assets/img/coin-logo/ethereum.svg">
                                                        </div>
                                                        <div class="table-row__info">
                                                          <!--<p class="table-row__name">Ethereum</p>-->
                                                          <span class="table-row__small">{{$p2p_order->crypto_type}}</span>
                                                        </div>
                                                    @endif
                                                  </td>
                                                  <td data-column="Policy" class="table-row__td">
                                                    <div class="">
                                                        @if($p2p_order->buyer_id == Auth::user()->id)
                                                            <p class="table-row__policy">Buy</p>
                                                            <!--<span class="table-row__small"></span>-->
                                                        @endif
                                                        @if($p2p_order->seller_id == Auth::user()->id)
                                                            <p class="table-row__policy">Sell</p>
                                                            <!--<span class="table-row__small"></span>-->
                                                        @endif
                                                    </div>
                                                  </td>
                                                  <td data-column="Status" class="table-row__td">
                                                    <p class="table-row__status">{{$p2p_order->	order_id}}</p>
                                                  </td>
                                                  <td data-column="Policy Status" class="table-row__td">
                                                        @if($p2p_order->buyer_id == Auth::user()->id && $p2p_order->seller_id != Auth::user()->id)
                                                        @php
                                                            $username = '-';
                                                            if ($p2p_order->seller_id) {
                                                                $seller = App\Models\User::where('id', $p2p_order->seller_id)->firstOrFail();
                                                                $username = $seller->first_name;
                                                            }


                                                        @endphp
                                                        @else

                                                         @endif

                                                        @if($p2p_order->buyer_id != Auth::user()->id && $p2p_order->seller_id == Auth::user()->id)
                                                        @php
                                                            $username = '-';
                                                            if ($p2p_order->seller_id) {
                                                                $seller = App\Models\User::where('id', $p2p_order->buyer_id)->firstOrFail();
                                                                $username = $seller->first_name;
                                                            }
                                                        @endphp
                                                         @endif
                                                        <p class="table-row__p-status status--yellow">{{$username}}</p>

                                                  </td>
                                                  <td data-column="Destination" class="table-row__td">
                                                   {{$p2p_order->total_crypto_value}} {{$p2p_order->crypto_type}}
                                                  </td>
                                                  <td data-column="Status" class="table-row__td">
                                                    <p class="table-row__status">{{$p2p_order->domestic_currency_value}} {{$currenciesname}}</p>
                                                  </td>

                                                  <td data-column="Status" class="table-row__td">
                                                       @if($p2p_order->payment_bank_id == 0)
                                                    <p class="table-row__status">GiftCard Benefit Coin </p>
                                                    @else
                                                    <p class="table-row__status">-</p>
                                                    @endif
                                                  </td>

                                                  <td data-column="Progress" class="table-row__td">
                                                      @if($p2p_order->order_status == 1 && $p2p_order->buyer_confirmation_status == 1 && $p2p_order->seller_confirmation_status == 1 || ($p2p_order->payment_method_id ==0 && $p2p_order->order_status == 1))
                                                      <p class="table-row__progress status--blue">Completed</p>
                                                      @elseif ($p2p_order->order_status == 1 && ($p2p_order->buyer_confirmation_status == 1 || $p2p_order->buyer_confirmation_status != 1) && ($p2p_order->seller_confirmation_status != 1 || $p2p_order->seller_confirmation_status == 1) )
                                                      <p class="table-row__progress status--yellow">Not Completed</p>
                                                      @elseif($p2p_order->order_status == 4 || $p2p_order->order_status == 2 || $p2p_order->order_status == 3)
                                                      <p class="table-row__progress status--red">Canceled</p>
                                                      @elseif ($p2p_order->order_status == 0 )

                                                       <p class="table-row__progress">Pending</p>
                                                      @endif

                                                  </td>
                                                  <td class="table-row__td">

                                                     <i class="bi bi-eye-fill table-row__edit btn btn-warning"  onclick="order({{$p2p_order->id}})" id="order_{{$p2p_order->id}}" data-target-modal="demo" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View"></i>
                                                    <!--<i class="bi bi-trash-fill table-row__bin" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete"></i>               -->
                                                  </td>
                                                </tr>


                                              </tbody></div>
                                               @php $i++; @endphp
                                              @endforeach
                                            </table>
                                             {!! $p2p_orders->render('pagination::bootstrap-5') !!}
