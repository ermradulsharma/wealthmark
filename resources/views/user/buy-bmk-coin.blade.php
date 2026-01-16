<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Wealth Mark | Create Entity Account</title>
        @include('template.web_css')
        <style>
            #header{
                background:white;
            }

            .bS-crypto-div-input{
                font-size: 14px;
            }
            .error{color: red;font-size: 13px;}
            .error_border{border:1px solid red;border-radius: 8px;}
        </style>
        <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    </head>
    <body class="bg-white">

    @include('template.web_menu')
    <section class="bg-light-blue selection_forTrade" >
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!--<div class="w-auto me-5">-->
                <!--    <div class="sec-title">-->
                <!--        <span class="title">Welcome to Wealthmark</span>-->
                <!--        <h2 class="heading-h2">Buy crypto in 3 steps</h2>-->
                <!--        <div class="text">-->
                <!--             Buy Bitcoin and 99+ cryptocurrency with 50+ fiat currencies-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="Crypto-loans-right">
                    <div class="crypto-right-inner-main mt-0">
                       <div class="dashboard-tabpills">
                            <div class="dashboard-card-body">
                                <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                                    <li class="nav-item w-100" role="presentation">
                                        <button class="nav-link w-100 active text-left" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="true">Buy BMK Using Gift Card</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                                       <div class="crypto-right-inner flex-column">

                                            <form method="post">
                                                <div class="flex-1">
                                                    <span class="error" id="error_gift_card"></span>
                                                    <div class="field crypto-rght-first-box">
                                                        <div id="ocbs-guide-step1" class="bS-crypto-div">
                                                            <span></span>
                                                            <div class="bS-crypto-div-inner">
                                                                <div class="bS-crypto-div-title text-black">Enter G.C. SR NO.</div>
                                                                <div class="bS-crypto-div-inp-div">
                                                                    <div class="bS-crypto-div-inp-div-1">
                                                                        <input type="text" pattern="\d*" maxlength="16" placeholder="Enter G.C. SR NO." class="bS-crypto-div-input" name="order_no" id="order_no">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <span class="error" id="error_sr_no"></span>
                                                        @csrf
                                                        <div id="ocbs-guide-step2" class="bS-crypto-div">
                                                           <span></span>
                                                           <div class="bS-crypto-div-inner">
                                                              <div class="bS-crypto-div-title text-black">Enter G.C. ORDER NO.</div>
                                                              <div class="bS-crypto-div-inp-div">
                                                                 <div class="bS-crypto-div-inp-div-1">
                                                                    <input type="text" pattern="\d*" maxlength="16" placeholder="Enter G.C. ORDER NO." class="bS-crypto-div-input" name="sr_no" id="sr_no">
                                                                 </div>

                                                              </div>
                                                           </div>
                                                        </div>
                                                        <span class="error" id="error_order_no"></span>
                                                    </div>
                                                </div>
                                                <div id="coin_data">
                                                    @if (!Auth::check())
                                                        <button class="btn btn-yellow w-100 mt-4 desabled">  Log In  </button>
                                                    @else
                                                        <button class="btn btn-yellow w-100 mt-4" type="button" id="verify_gift_card">Submit</button>
                                                    @endif
                                                </div>
                                                <div id="coin_buy_btn" style="display:none;">
                                                    @if (!Auth::check())
                                                        <button class="btn btn-yellow w-100 mt-4 desabled selectPaymntTobuy_crypto" id="selectPaymntTobuy_crypto">  Log In  </button>
                                                    @else
                                                        <button class="btn btn-yellow w-100 mt-4" type="button" id="buy_now">Buy</button>
                                                    @endif
                                                </div>
                                            </form>
                                            <!--<div id="coin_data"></div>-->
                                       </div>
                                    </div>
                                </div>
                                <div id="otp_box" style="display:none;">
                                    <ul class="nav nav-pills my-1 border-bottom">
                                        <li class="nav-item w-100" role="presentation">
                                            <button class="nav-link w-100 active text-left" type="button" role="tab" aria-controls="pills-spot" aria-selected="true">Verify Gift Card</button>
                                        </li>
                                    </ul>
                                    <div class="form-group mt-3">
                                        <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="gift_card_otp" class="form-control">
                                        <span class="error" id="error_gift_card_otp"></span>
                                        <div class="verification_innerInfo my-2 error_text" style="font-size: 12px;">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1"></span></div>
                                    </div>
                                    <div class="btn-div ">
                                        <button type="button" class="btn-yellow border-0 d-block w-100 shadow-sm mt-3" id="verify_otp_now">
                                            <div class="inner_text">Verify Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('template.country_language')
    @include('template.web_footer')
    <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#verify_gift_card').click(function(){
                //event.preventDefault();
                var gc_order_no=$("#order_no").val();
                var gc_sr_no=$("#sr_no").val();
                var _token=$("input[name='_token']").val();
                $.ajax({
                    url:"{{ url(app()->getLocale().'/validate_giftcard') }}",
                    method:"POST",
                    data:{'order_no':gc_order_no,'sr_no':gc_sr_no,'_token':_token},
                    dataType:"json",
                    beforeSend:function(){ $('#verify_gift_card').text("Validating Gift Card"); $('#verify_gift_card').attr('disabled', 'disabled');},
                    success:function(data){
                        $('#verify_gift_card').addClass('display', 'none');
                        $('#verify_coin_data').addClass('display', 'none');
                        $('#coin_buy_btn').css('display', 'block');
                            $('#error_order_no').html('');
                            $('#ocbs-guide-step1').removeClass('error_border');
                            $('#error_sr_no').html('');
                            $('#ocbs-guide-step2').removeClass('error_border');

                        if(data)
                        {
                            var html = '<div class="flex-1">';
                            html += '<div id="ocbs-guide-step2" class="bS-crypto-div">';
                            html += '<span></span>';
                            html += '<div class="bS-crypto-div-inner">';
                            html += '<div class="bS-crypto-div-title text-black">Total Amount</div>';
                            html += '<div class="bS-crypto-div-inp-div">';
                            html += '<div class="bS-crypto-div-inp-div-1">';
                            html += '<input type="text" readonly placeholder="Total Amount" class="bS-crypto-div-input" value="'+data.amount+'" id="result" oninput="count_currency(this.value)">';
                            html += '<input type="hidden" class="selectedCrypto" name="selectedCrypto" value="ETH">';
                            html += '</div>';
                            html += '<div class="bS-crypto-div-open-list" id="selected_crypto">';
                            html += '<input type="hidden" class="selectedCoinPrice" name="selectedCoinPrice" value="">';
                            html += '<img src="{{ asset('img/inr-img.png') }}" class="bS-crypto-select-coin">';
                            html += '<div  class="bS-crypto-select-coin-title">INR</div>';
                            html += '<svg viewBox="0 0 24 24" fill="none" class="bS-crypto-div-open-list-svg">';
                            html += '<path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>';
                            html += '</svg>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';

                            html += '<div class="field crypto-rght-first-box">';
                            html += '<div id="ocbs-guide-step1" class="bS-crypto-div">';
                            html += '<span></span>';
                            html += '<div class="bS-crypto-div-inner">';
                            html += '<div class="bS-crypto-div-title text-black">No Of BMK</div>';
                            html += '<div class="bS-crypto-div-inp-div">';
                            html += '<div class="bS-crypto-div-inp-div-1">';
                            html += '<input type="text" readonly placeholder="No Of Coin" class="bS-crypto-div-input" value="'+data.total_coin+'" id="bmk_coin">';
                            html += '</div>';
                            html += '<div class="bS-crypto-div-open-list"  id="selected_crrency">';
                            html += '<input type="hidden" class="selectedglobalCurrency" name="selectedglobalCurrency" value="">';
                            html += '<input type="hidden" class="selectedglobalCurrencyRate" name="selectedglobalCurrencyRate" value="">';
                            html += '<img src="{{ asset('storage/app/bmklogo/12.png') }}" class="bS-crypto-select-coin">';
                            html += '<div class="bS-crypto-select-coin-title">BMK</div>';
                            html += '<svg viewBox="0 0 24 24" fill="none" class="bS-crypto-div-open-list-svg">';
                            html += '<path fill-rule="evenodd" clip-rule="evenodd" d="M12.11 12.178L16 8.287l1.768 1.768-5.657 5.657-1.768-1.768-3.889-3.889 1.768-1.768 3.889 3.89z" fill="currentColor"></path>';
                            html += '</svg>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            $('#coin_data').html(html);
                        }
                   },
                   error: function(xhr, textStatus, errorThrown){
                        $('#verify_gift_card').attr('disabled', false);
                        $('#verify_gift_card').text("Validate Gift Card");
                        var erroJson = JSON.parse(xhr.responseText);
                        var order_no_error = erroJson.error.order_no;
                        var sr_no_error = erroJson.error.sr_no;
                        if(order_no_error){
                            $('#error_order_no').html(order_no_error);
                            $('#ocbs-guide-step1').addClass('error_border');
                        }
                        if(sr_no){
                          $('#error_sr_no').html(sr_no_error);
                          $('#ocbs-guide-step2').addClass('error_border');
                        }
                        if(erroJson.error!="[object Object]"){
                            triggerAlert(erroJson.error, 'error');
                            //$('#error_gift_card').html(erroJson.error);
                            $('#ocbs-guide-step1').addClass('error_border');
                            $('#ocbs-guide-step2').addClass('error_border');
                        }
                   }
                })
            });


            $('#buy_now').click(function(){
                var gc_order_no=$("#order_no").val();
                var gc_sr_no=$("#sr_no").val();
                var _token=$("input[name='_token']").val();
                $.ajax({
                    url:"{{ url(app()->getLocale().'/verify_otp_giftcard') }}",
                    method:"POST",
                    data:{'order_no':gc_order_no,'sr_no':gc_sr_no,'_token':_token},
                    dataType:"json",
                    beforeSend:function(){ $('#buy_now').text("Sending OTP"); $('#buy_now').attr('disabled', 'disabled');},
                    success:function(data){
                        if(data)
                        {
                            $('.getCode_outer1').text(data.email_data);
                            $('#pills-tab').css('display', 'none');
                            $('#pills-tabContent').css('display', 'none');
                            $('#otp_box').css("display",'block');
                        }
                    },
                    error: function(xhr, textStatus, errorThrown){
                        var erroJson = JSON.parse(xhr.responseText);
                        //alert(erroJson.error);
                        triggerAlert(erroJson.error, 'error');
                        $('#buy_now').text("Buy");
                        $('#buy_now').removeAttr('disabled');
                    }
                })
            });

            $('#verify_otp_now').click(function(){
                var gc_order_no=$("#order_no").val();
                var gc_sr_no=$("#sr_no").val();
                var _token=$("input[name='_token']").val();
                var gift_card_otp=$("#gift_card_otp").val();
                $.ajax({
                    url:"{{ url(app()->getLocale().'/buy_with_otp_giftcard') }}",
                    method:"POST",
                    data:{'order_no':gc_order_no,'sr_no':gc_sr_no,'_token':_token,'gift_card_otp':gift_card_otp},
                    dataType:"json",
                    beforeSend:function(){ $('#verify_otp_now').text("Verifying OTP"); $('#verify_otp_now').attr('disabled', 'disabled');},
                    success:function(data){
                        if(data.success==200)
                        {
                            triggerAlert("BMK purchased successfully.", 'success');
                            setTimeout(function () {
                                //location.reload(true);
                                window.location.replace("{{ url(app()->getLocale().'/user/market') }}");
                            }, 2000);
                        }
                    },
                    error: function(xhr, textStatus, errorThrown){
                        $('#verify_otp_now').attr('disabled', false);
                        $('#verify_otp_now').text("Verify Now");
                        var erroJson = JSON.parse(xhr.responseText);
                       // alert(erroJson.error);
                        var gift_card_otp_error = erroJson.error.gift_card_otp;
                        if(erroJson.error=="[object Object]"){
                            $('#error_gift_card_otp').text(gift_card_otp_error);
                            $('#gift_card_otp').addClass('error_border');
                        }
                        if(erroJson.error!="[object Object]"){
                            $('#error_gift_card_otp').text(erroJson.error);
                            $('#gift_card_otp').addClass('error_border');
                        }
                    }
                })
            });
        });
</script>
    </body>
</html>
