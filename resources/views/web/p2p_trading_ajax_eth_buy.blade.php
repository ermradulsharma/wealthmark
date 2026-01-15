<div class="tab-pane {{ (Request::segment(2) == 'p2p-trading') ? 'show active':'fade'}}" id="p2p-trading-USDT-tab" role="tabpanel" aria-labelledby="p2p-trading-BTC-tab">
    <div class="tokens-table table-responsive scrollbar-style">
        <table class="table table-hover  ">
            <thead>
                <tr>
                    <th scope="col">Advertisers (Completion rate)</th>
                    <th scope="col">Price <span class="text-warning">(Lowesst to Highest)</span>
                    </th>
                    <th scope="col">Limit/Available</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Trade <span class="text-success">0 Fee</span></th>
                </tr>
            </thead>
            <tbody>



                            <tr id = "{{--$bmk->id--}}">
                                <td class="p-3"><b class="text-warning buyer_name">{{--$username->first_name--}}</b><br />
                                    <span class="adviser-rate-txt buyer_order_completion">{{--$count--}} orders {{-- number_format( $completion_percentage , 2, '.', '') --}} % completion </span>
                                </td>
                                <td class="p-3"><strong class="fw-bold h5 text-primary buyer_cr_value">{{--$bmk->domestic_currency_value--}} </strong>
                                    <small class= "buyer_cr_type">{{--$currenciesname--}}</small>
                                </td>
                                <td class="p-3">
                                    <div class="p2p-inner-table-content">
                                        <p>Available <span>0.10795902 BNB</span> </p>
                                        <p>Limit <span>￥100.00-￥211.09</span> </p>
                                    </div>
                                </td>
                                <td class="text-success fw-bold p-3 payment-type-txt buyer_payment_type">{{--$payment_method_type->name--}}</td>
                                <td class="buyer_Crypto_type"><a href="javascript:void(0);" onclick="sell_bmk({{--$bmk->id--}})" id ="sell_bmk_{{--$bmk->id--}}" class="btn btn-yellow shadow">Buy {{--$bmk->crypto_type--}}</a></td>
                            </tr>



                <tr>
                    <td  colspan="6" class="border-0">
                        <div class="no-data bg-white text-center shadow-sm p-5">
                             <img src="{{ asset('assets/img/no-idea-illustration.svg') }}"  class="img-fluid max-width-250px mb-2" alt="gift Card Image">
                            <h3 class="text-center mt-2">No record Found </h3>
                        </div>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">

    </div>
</div>
