<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel="stylesheet" href="{{ asset('css/_trading.css') }}">
    <link rel="stylesheet" href="{{ asset('rt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /*-------------------------------only for this page------------------------------*/
        #p2p-form,
        #leverage-sub-navbar {
            display: none !important;
        }

        .heading-03 {
            display: flex;
            align-items: center;
        }

        .text {
            color: #fdc116 !important;
        }

        .available_coins {
            display: none;
        }

        /*-------------------------------only for this page------------------------------*/
        .p2p-post-ads-tab {
            background: var(--bg-white);
            padding: 20px;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            margin: 20px 0px;
        }
    </style>
</head>

<body>
    @include('template.web_menu')
    @include('web.p2pTrading_template.tabSection')
    <div class="bg-white py-3 shadow-sm">
        <div class="container">
            <div class="fs-4 text-black">Post Normal Ad</div>
        </div>
    </div>
    <section class="inner-page authentication-step  bg-light-blue">
        <div class="container" id="order-status">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ol class="steps">
                        <li id="step-1" class="step is-active" data-step="1">
                            <span>Set Type & Price</span>
                        </li>
                        <li id="step-2" class="step" data-step="2">
                            <span>Set Total Amount & Payment Method</span>
                        </li>
                        <li id="step-3" class="step" data-step="3">
                            <span>Set Remark & Automatic Response</span>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <!--<div class="col-md-12 p2p-post-ads-tab">-->
                <!--<ul class="nav nav-pills my-1 trade" id="pills-tab" role="tablist">-->
                <!--      <li class="nav-item" role="presentation">-->
                <!--         <button class="nav-link active" id="buy" value="0"  role="tab" >I want to Buy</button>-->
                <!--      </li>-->
                <!--      <li class="nav-item" role="presentation">-->
                <!--         <button class="nav-link" id="sell" value="1" role="tab" >I want to Sell</button>-->
                <!--      </li>-->
                <!--   </ul>-->
                @include('web.p2pTrading_template.templatePostAdd')

                <!--</div>-->
            </div>

            <!--<div class="tab-content" id="pills-tabContent">-->
            <!--   <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">-->

            <!--</div>-->




        </div>
    </section>


    <div id="confirm_post_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-450px">
                <div class="border-bottom">
                    <div class="wm-custom-modal-header">
                        <span>Confirm Post</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3">
                    <div class="container-fluid p-0 m-0 max-height-500px scrollbar-style">
                        <div class="flex-div post-status-div">
                            <div class="">
                                Type
                            </div>
                            <div class="post-type">

                            </div>
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                Assets
                            </div>
                            <div class="post-Assets selected-asset">

                            </div>
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                Currency
                            </div>
                            <div class="post-Currency">

                            </div>
                            <input type="hidden" class="postCurrencyid" name="postCurrencyid" value="">
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                Price type
                            </div>
                            <div class="post-Currency-type">

                            </div>
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="post-Currency-type">

                            </div>
                            <div class="post-fixed-value">
                                <span class="post-fixed-total-value"></span><span class="post-Assets"></span>
                            </div>
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                Order Limit
                            </div>
                            <div class="post-Order-limit">
                                <span class="post-Order-lower-limit"></span><span class="post-Currency"></span>~<span class="post-Order-higher-limit"></span><span class="post-Currency"></span>

                            </div>
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                Total Trading Amount
                            </div>
                            <div class="post-Trading-amt">
                                <span class="post-Trading-amt-val"></span><span class="post-Assets"></span>
                            </div>
                        </div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                <span> Estimated Fee </span>
                                <span class="ms-1 yellow-text"><i class="bi bi-info-circle-fill"></i> </span>
                            </div>
                            <div class="post-Estimated-fee">
                                <span class="post-Estimated-fee-val"></span><span class="post-Estimated-fee-type"></span>
                            </div>
                            <input type="hidden" class="hestimatedfeeid" name="hestimatedfeeid" value="">
                        </div>
                        <div class="h-divider my-1"></div>
                        <div class="flex-div post-status-div">
                            <div class="">
                                <span> Counterparty Conditions </span>
                            </div>
                            <div class="post-Counterparty-condition">
                                <span class="d-block mb-1 compleated-kyc"></span>
                                <span class="d-block mb-1 registered-day"></span>
                                <span class="d-block mb-1 holding-more">
                                    <span class="ms-1 yellow-text"><i class="bi bi-info-circle-fill"></i></span>
                                </span>

                            </div>
                        </div>


                        <div class="flex-div post-status-div">
                            <div class="">
                                <span> Payment Method </span>
                            </div>
                            <div class="post-Payment-Method">
                                <span></span>

                            </div>
                        </div>

                        <div class="flex-div post-status-div">
                            <div class="">
                                <span> Payment Time Limit </span>
                            </div>
                            <div class="post-time-limit">
                                <span class="post-time-limit-val"></span><span>Min</span>
                            </div>
                        </div>


                    </div>
                    <div class="flex-div my-4 w-100">
                        <a href="javascript:void(0)" id="SubmitPostAds" onclick="SubmitPostAds(this.id)" class="btn-yellow w-100">Confirm to Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nickname model-->
    <div id="nickNameEdit" class="open_edit_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                    <div class="wm-custom-modal-header m-0">
                        <span>Edit Nickname</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                        <div class="row">
                            <div class="col-md-12">
                                <form name="nicknameForm" id="nicknameForm" class="nicknameForm">
                                    <p class="fs-14 mb-2">Set a customized nickname for your profile.</p>

                                    <span class="fs-14 mb-2 d-block"><b> Nick Name </b></span>
                                    <div class="">
                                        <input type="hidden" id="nikefld" name="_token" value="{{ csrf_token() }}">
                                        <input type="text" maxlength="8" minlength="2" pattern="\d*" id="nickName" name="nickName" value="{{ (Auth::user()->nick_name !== NULL) ? Auth::user()->nick_name : '' }}" class="form-control">
                                    </div>
                                </form>
                            </div>


                            <div class="d-block col-12 mt-3 w-100 text-center mb-3">
                                <!--<button type="button" class="btn-default d-inline-block close_custom_modal_btn border-0 me-3">Close Modal</button>-->
                                <!--<button type="button" class="save-nickName btn-theme-light w-100">Save</button>-->

                                <!--<a href="{{ url(app()->getLocale().'/update_table_column_byID') }}" class="btn-yellow d-inline-block">Save</a>-->
                                <button type="button" class="save-nickName btn-yellow d-inline-block border-0">Save</button>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- -->


    @include('template.web_footer')
    @include('web.p2pTrading_template.script')

    @include('user.payment.paymentMethodsTemplates.selectAllPaymethods')

    <script src="{{ asset('t.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/inline/ckeditor.js"></script>
    <script>
        const init = div =>
            InlineEditor.create(div, {
                toolbar: [
                    "bold",
                    "italic",
                    "link",
                    "bulletedList",
                    "numberedList",
                    "blockQuote",
                    "undo",
                    "redo"
                ]
            })

        init(document.querySelector('#remarks'))


        const clickHandler = async evt => {
            e2.removeEventListener('click', clickHandler)

            s = window.getSelection();
            var range = s.getRangeAt(0);
            var node = s.anchorNode;

            const editor = await init(evt.target.closest('.editor'))
            window.e = editor
            editor.editing.view.focus()

            await new Promise(r => setTimeout(r, 1000))

            editor.model.change(writer => {
                // const pos = editor.model.document.selection.getLastPosition()
                const pos = writer.createPositionAt(editor.model.document.selection.getLastPosition())
                console.warn(pos)
                const range = writer.createRange(pos, editor.model.document.selection.getLastPosition());

                writer.setSelection(range);
            });

        }
    </script>
    <script>
        $('input[name="price_type"]').click((event) => {
            var selectedPrice = $('input[name="price_type"]:checked').siblings().text();
            //console.log(selectedPrice );
            $('.selected-coin-type h3').text(selectedPrice + ' Price Margin');
            // alert();
        });

        $('.trade li').click((event) => {

            $('#selected-payment-option').html('')
            $('#post-ads-form')[0].reset();
            if ($('#payMethod .select-payment a').hasClass('selected')) {
                $('#payMethod .select-payment a').removeClass('selected')
            }

            loadPostAdsPage();
            // location.reload();
            //  $('#post-ads-form').find(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
            $('#first-section').removeClass('hide');
            $('#first-section').siblings().addClass('hide');


            $(event.currentTarget).find('.postTypeOrder').addClass('active');
            // $(event.currentTarget).siblings().find('button').removeClass('active');
            var selectedBuyType = $('.trade .postTypeOrder.active').attr('value');
            if (selectedBuyType == 1) {
                $('.trade_type_heading h3').text('Selling Limit');
            } else {
                $('.trade_type_heading h3').text('Buying Limit');
            }

            if ($("#sell").hasClass('active') == true) {
                $(".available_coins").css({
                    'display': 'block'
                });
                $("input[name='holding_coinCheck']").parent().addClass('hide');
                $("input[name='holding_coinCheck']").prop("checked", 'checked');

            } else {
                $(".available_coins").css({
                    'display': 'none'
                });
                if ($("input[name='holding_coinCheck']").parent().hasClass('hide')) {
                    $("input[name='holding_coinCheck']").parent().removeClass('hide');
                }


            }
            $('#amount').val('');

        });

        function Steps(id) {


            var divid = id;

            // if(divid === "first-section"){
            //     $("#first-div-filter").removeClass("hide");
            // }else{
            //   $("#first-div-filter").addClass("hide");
            // }


            if (divid == "first_step") {
                if ($("#crrent_price input").val().length < 1 === true) {
                    triggerAlert('Price Margin cannot be blank', 'error');
                } else {
                    var highestPrice = parseFloat($("#highest-order-price input").val());
                    var currentValue = parseFloat($('#crrent_price input').val());

                    // console.log(highestPrice);
                    // console.log(currentValue);
                    if (parseFloat(currentValue) > highestPrice) {
                        triggerAlert('You cannot set Price Margin more than Highest Order price', 'error');

                    } else {
                        $("#" + divid).closest('.post-add-selection').addClass("hide");
                        $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
                    }


                    // $("#first-div-filter").removeClass("hide");
                }
            }

            if (divid == "second_step") {
                if ($('#amount').val().length < 1 === true) {
                    $("#no_of_coin_coin_box").addClass("border-danger");
                    $("#no_of_coin_error").text("Enter no of coins.");

                    setTimeout(function() {
                        $("#no_of_coin_error").text("");
                        $("#no_of_coin_coin_box").removeClass("border-danger");
                    }, 4000);
                }

                if ($('#lowerlimit').val().length < 1 === true) {
                    $("#lowerlimit_box").addClass("border-danger");
                    $("#lowerlimit_error").text("Please enter min limit.");
                    setTimeout(function() {
                        $("#lowerlimit_box").removeClass("border-danger");
                        $("#lowerlimit_error").text("");
                    }, 4000);
                }


                if ($('#higherlimit').val().length < 1 === true) {
                    $("#higherlimit_box").addClass("border-danger");
                    $("#higherlimit_error").text("Please enter max limit.");

                    setTimeout(function() {
                        $("#higherlimit_box").removeClass("border-danger");
                        $("#higherlimit_error").text("");
                    }, 4000);

                }

                if ($('#selected-payment-option').find('.selected-payment-option-div').length < 1) {
                    $('span[data-target-modal="payMethod" ]').addClass("border-red");
                    $("#selected-payment-option_error").text("Please select payment method.");

                    setTimeout(function() {
                        $('span[data-target-modal="payMethod" ]').removeClass("border-red");
                        $("#selected-payment-option_error").text("");
                    }, 4000);
                }

                if ($("#nickName").val() == '') {
                    $('#nikname_error').text("Please add nikname.");

                    setTimeout(function() {
                        $('#nikname_error').text(" ");
                    }, 4000);
                }

                if ($('#selected-order-time').val() == "") {
                    $('#selected-order-time').removeClass("border-0");
                    $('#selected-order-time').addClass("border-red");
                    $("#selected-order-time_error").text("Please select order time.");

                    setTimeout(function() {
                        $('#selected-order-time').addClass("border-0");
                        $('#selected-order-time').removeClass("border-red");
                        $("#selected-order-time_error").text("");
                    }, 2000);

                }

                // if($('#selected-payment-option').find('.selected-payment-option-div').length < 1){
                //     //triggerAlert('Please select payment method.','error');
                // }

                // else if($('#selected-order-time').text().length < 1){
                //     triggerAlert('Please select order Time.','error');
                // }

                // else{
                //     check_vailable_cointInWallet();
                //     if( parseFloat($('#higherlimit').val()) < parseFloat($('#lowerlimit').val()) ){
                //         triggerAlert('Lower limit must be less than higher limit','error');
                //     }else{
                //          $("#" + divid).closest('.post-add-selection').addClass("hide");
                //          $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
                //     }
                //     // $("#first-div-filter").removeClass("hide");
                // }





                // if( ($("#nickName").val() == '') || ($('#amount').val().length < 1 === true) || ($('#lowerlimit').val().length < 1 ===true) || ($('#higherlimit').val().length < 1 ===true) || ($('#selected-payment-option').find('.selected-payment-option-div').length < 1) || ($('#selected-order-time').text().length < 1) ){
                //     triggerAlert('All fields are required!','error');
                // }
                if ($("#nickName").val() == '') {
                    triggerAlert('Nick name are required!', 'error');
                } else if (($('#amount').val().length < 1 === true)) {
                    triggerAlert('Number of coin are required!', 'error');
                } else if (($('#lowerlimit').val().length < 1 === true)) {
                    triggerAlert('Lower limit are required!', 'error');
                } else if (($('#higherlimit').val().length < 1 === true)) {
                    triggerAlert('Higher limit are required!', 'error');
                } else if (($('#selected-payment-option').find('.selected-payment-option-div').length < 1)) {
                    triggerAlert('Select payment method at least one!', 'error');
                } else if ($('#selected-order-time').val() == '') {
                    triggerAlert('Select payment time limit!', 'error');
                } else {
                    check_vailable_cointInWallet();

                    if (parseFloat($('#higherlimit').val()) < parseFloat($('#lowerlimit').val())) {
                        triggerAlert('Lower limit must be less than higher limit', 'error');
                    } else {
                        $("#" + divid).closest('.post-add-selection').addClass("hide");
                        $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
                    }
                    // $("#first-div-filter").removeClass("hide");
                }
            }

        }

        function backStep(id) {
            var divid = id;

            $("#" + divid).closest('.post-add-selection').addClass("hide");
            $("#" + divid).closest('.post-add-selection').prev().removeClass('hide');
            if (divid === "div-2") {
                $("#first-div-filter").removeClass("hide");
            } else {
                $("#first-div-filter").addClass("hide");
            }
        }

        //   function addHiddenValues_old(id){
        //         const ID = id;
        //         $('#'+ID).parent().addClass('selected');
        //         $('#'+ID).parent().siblings().removeClass('selected');

        //          }

        function addHiddenValues(id) {
            const ID = id;
            console.log(ID);
            // $(this).parent().addClass('selected');

            const parentA = event.target.closest('a');

            if (parentA.classList.contains('selected')) {
                parentA.classList.remove('selected');
            } else {
                parentA.classList.add('selected');
            }
        }

        $("#confirm_paymentOn_p2ptrading").click(function() {
            var selectedMethod = $('.select-payment').find('.selected div');
            var addedMethod = $('.added-payment-div');
            var id = $('.select-payment a.selected div').attr('id');
            var paymentMethodIds = [];
            selectedMethod.each(function() {
                paymentMethodIds.push($(this).attr('id'));
            });
            // console.log(paymentMethodIds);
            // const count =$('.selected-payment-option-div').find('.fs-12').length;
            //console.log(paymentMethodIds.length);

            if (paymentMethodIds.length < 4) {
                var loadpaymentmethod = $('#selected-payment-option');
                loadpaymentmethod.html('');
                $.each(paymentMethodIds, function(index, id) {
                    console.log(id);
                    var Value = $("#" + id).html();
                    // loadpaymentmethod.empty();
                    var html = '<div class="d-flex align-items-center border rounded p-2 min-width-100px hover-border cursor-pointer selected-payment-option-div ele_' + id + '">';
                    html += '<img src="{{ asset('
                    img / hboard - icons / bank - account.svg ') }}" class="max-width-20px me-2" alt="wealthmark.io">';
                    html += '<span class="fs-12 added-payment-div" id="paymethod_' + id + '">' + Value + '</span>';
                    html += '<span class="bi bi-x-circle-fill " onclick="delMthod(' + id + ')"></span></div>';
                    $(".selected-payment-option-hide").css("display", "block")
                    loadpaymentmethod.append(html);

                });

            } else {
                triggerAlert('You can select up to 3 methods', 'error');
                $('#payMethod .hide').addClass('custom-modal-bck-bg').removeClass('hide');

            }


        });

        $("#confirm_paymentOn_p2ptrading_old").click(function() {


            var id = $('.select-payment a.selected div').attr('id');
            // var paymentMethodIds = $('.selected-payment-option-div').find('.added-payment-div').attr('id').map(function() {
            //     return $(this).attr('id');
            // }).get();
            var paymentMethodIds = [];
            $('.selected-payment-option-div').find('.added-payment-div').each(function() {
                paymentMethodIds.push($(this).attr('id'));
            });


            console.log(paymentMethodIds);


            if (jQuery.inArray(id, paymentMethodIds) !== -1) {
                triggerAlert('Already added!', 'error');
            } else {

                const count = $('.selected-payment-option-div').find('.fs-12').length;

                if (count < 3) {
                    var Value = $("#" + id).html();
                    var loadpaymentmethod = $('#selected-payment-option');

                    // loadpaymentmethod.empty();

                    var html = '<div class="d-flex align-items-center border rounded p-2 min-width-100px hover-border cursor-pointer selected-payment-option-div ele_' + id + '">';
                    html += '<img src="{{ asset('
                    img / hboard - icons / bank - account.svg ') }}" class="max-width-20px me-2" alt="wealthmark.io">';
                    html += '<span class="fs-12 added-payment-div" id="' + id + '">' + Value + '</span>';

                    html += '<span class="bi bi-x-circle-fill " onclick="delMthod(' + id + ')"></span></div>';
                    $(".selected-payment-option-hide").css("display", "block")
                    loadpaymentmethod.append(html);


                } else {
                    triggerAlert('You can select up to 3 methods', 'error');
                }

            }
        });
    </script>
    <script>
        $('input[name="price_type"]').on('change', function() {
            const selectedValue = $(this).val();
            $('input[name="price_type"]').removeAttr('checked');
            const checkedtype = $(this).attr('checked', 'checked');
            //console.log(selectedValue);

            if (selectedValue == 0) {
                $('.price-formula').addClass('hide');
            }
            if (selectedValue == 1) {
                $('.price-formula').removeClass('hide');
            }

        });
    </script>
    <script>
        $(document).ready(function() {
            loadPostAdsPage();

        });

        function loadPostAdsPage() {
            const default_selected_crypto_name = $('.default-selected-crypto-name').text();
            const default_selected_currency_name = $('.default-currency-name').text();
            const default_selected_coin_BMK_Currentprice = $('#choose-coin-BMK_Currentprice').val();
            const selectedglobalCurrency = $('.selectedglobalCurrency').val();
            const myVar = '{{ env('
            HIGHEST_ORDER_PRICE_PERCENTAGE ') }}';

            const orderPrice = default_selected_coin_BMK_Currentprice / selectedglobalCurrency;
            const totalprice = $("#order-price span").text(orderPrice.toFixed(8));
            const highestOrderprice_percentage = ((orderPrice * myVar) / 100).toFixed(8);
            const total_highest_order_price = (parseFloat(orderPrice) + parseFloat(highestOrderprice_percentage)).toFixed(8);
            const highest_order_price_val = $("#highest-order-price input").val(total_highest_order_price);
            const highest_order_price = $("#highest-order-price span").text(total_highest_order_price);
            $("#crrent_price input").val(parseFloat(orderPrice).toFixed(8));

            const item_symbol = $("#selected_crrency .selectedglobalCurrencysymbol").val()

            $(".item-symbol").val(item_symbol);
            $(".total-trading-currency-type").text(default_selected_crypto_name);

            //console.log(default_selected_coin_BMK_Currentprice);
            const fixedvalue = $('#fmyInput').val();

            //$('input[name="total-trading-currency-type-value"]').val(default_selected_coin_BMK_Currentprice);
            $('input[name="total-trading-currency-type-value"]').val(fixedvalue);
            $('input[name="selected-golobal-currency-type-rate"]').val(selectedglobalCurrency);




            $(".lower-order-limit").text(default_selected_currency_name);
            $(".higher-order-limit").text(default_selected_currency_name);
            $(".holding-more-than-crypto-name").text(default_selected_crypto_name);


            $(".selected-golobal-currency-type").text(default_selected_currency_name);
            $(".selected-golobal-currency-type-value").text(orderPrice.toFixed(8));




            // add click event listener to plus button
            function compairForhighestOredr() {
                var highestPrice = parseFloat($("#highest-order-price input").val());
                var currentValue = parseFloat($('#crrent_price input').val());
                var newValue = currentValue + 1.00; // change this to adjust the increment value
                if (newValue > highestPrice) {
                    triggerAlert('You cannot set Price Margin more than Highest Order price', 'error');

                } else {
                    $('#crrent_price input').val(newValue.toFixed(8));
                }

            }

            $('.plus').on('click', function() {
                compairForhighestOredr();
            });


            // $('#crrent_price input').on('input', function() {
            //   compairForhighestOredr();

            // });

            // add click event listener to minus button
            $('.minus').on('click', function() {
                var currentValue = parseFloat($('#crrent_price input').val());
                var newValue = currentValue - 1.00; // change this to adjust the decrement value
                $('#crrent_price input').val(newValue.toFixed(8));
            });

            const ordertypecheckedvalue = $('input[name="price_type"]:checked').val();
            if (ordertypecheckedvalue == 0) {
                $('.price-formula').addClass('hide');
            }

            // console.log(ordertypecheckedvalue);
        }


        function select_crypto(id) {

            crypto_id = id;
            //alert(crypto_id);
            const selected_crypto_value = $("#" + crypto_id + '_' + "Currentprice").val();
            const selectedcurrencyPrice = $('.selectedcurrencyPrice').val();
            const selectedcryptoType = $("#" + crypto_id + " .wm-dropdown-optn-item-txt").html();
            const selectedglobalCurrency = $('.selectedglobalCurrency').val();
            const selectedCurrencysymbol = $('.selectedCurrencysymbol').val();
            const default_selected_currency_name = $('.default-currency-name').text();

            const myVar = '{{ env('
            HIGHEST_ORDER_PRICE_PERCENTAGE ') }}';
            const orderPrice = selected_crypto_value / selectedglobalCurrency;
            const totalprice = $("#order-price span").text(orderPrice.toFixed(8));
            const highestOrderprice_percentage = ((orderPrice * myVar) / 100).toFixed(8);
            const total_highest_order_price = (parseFloat(orderPrice) + parseFloat(highestOrderprice_percentage)).toFixed(8);
            const highest_order_price_val = $("#highest-order-price input").val(total_highest_order_price);
            const highest_order_price = $("#highest-order-price span").text(total_highest_order_price);
            $("#crrent_price input").val(parseFloat(orderPrice).toFixed(8));



            const item_symbol = $("#selected_crrency .selectedglobalCurrencysymbol").val()
            $(".item-symbol").text(item_symbol);

            // console.log(selected_crypto_value);
            // console.log(selectedcurrencyPrice);

            $(".total-trading-currency-type").text(selectedcryptoType);
            $(".lower-order-limit").text(default_selected_currency_name);
            $(".higher-order-limit").text(default_selected_currency_name);
            $(".holding-more-than-crypto-name").text(selectedcryptoType);
            const fixedvalue = $('#fmyInput').val();

            $(".selected-golobal-currency-type").text(fixedvalue);
            $(".selected-golobal-currency-type-value").text(fixedvalue);



            $('input[name="total-trading-currency-type-value"]').val(fixedvalue);
            $('input[name="selected-golobal-currency-type-rate"]').val(selectedglobalCurrency);


            $('.selectedCoinPrice').val(selected_crypto_value);
            $('#selected_crypto .bS-crypto-select-coin').attr('src', $("#" + crypto_id + ' ' + ".custom-modal-drpdn-img-1").attr('src'));
            $('#selected_crypto .selectedCrypto').val(selectedcryptoType);
            $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');

        }


        function select_currency(id) {

            currency_id = id;

            $('#selected_crrency .bS-crypto-select-coin').attr('src', $("#" + currency_id + ' ' + ".custom-modal-drpdn-img-1").attr('src'));
            $('#selected_crrency .bS-crypto-select-coin-title').html($("#" + currency_id + ' ' + ".custom-modal-drpdn-title").html());
            $('#selected_crrency .bS-crypto-select-coin-symbol').html('<span>' + $("#" + currency_id + ' ' + ".currency_symbol").html() + '</span>');
            $('.selectedglobalCurrency').val($("#" + currency_id + ' ' + ".selectedcurrencyPrice").val());
            $('.selectedglobalCurrencyRate').val($("#" + currency_id + ' ' + ".selectedCurrencyRate").val());

            $('.selectedglobalCurrencyId').val($("#" + currency_id + ' ' + ".selectedCurrencyId").val());

            $('.selectedglobalCurrencyname').val($("#" + currency_id + ' ' + ".selectedCurrencyname").val());


            $('.selectedglobalCurrencysymbol').val($("#" + currency_id + ' ' + ".selectedCurrencySymbol").val());

            $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');

            const selected_crypto_value = $('.selectedCoinPrice').val();
            const selectedcurrencyPrice = $('.selectedglobalCurrency').val();
            const selectedcryptoType = $('.default-selected-crypto-name').text();
            const myVar = '{{ env('
            HIGHEST_ORDER_PRICE_PERCENTAGE ') }}';


            const orderPrice = selected_crypto_value / selectedcurrencyPrice;
            const totalprice = $("#order-price span").text(orderPrice.toFixed(8));
            const highestOrderprice_percentage = ((orderPrice * myVar) / 100).toFixed(8);
            const total_highest_order_price = (parseFloat(orderPrice) + parseFloat(highestOrderprice_percentage)).toFixed(8);
            const highest_order_price = $("#highest-order-price span").text(total_highest_order_price);
            const highest_order_price_val = $("#highest-order-price input").val(total_highest_order_price);
            $("#crrent_price input").val(parseFloat(orderPrice).toFixed(8));

            const item_symbol = $("#selected_crrency .selectedglobalCurrencysymbol").val()
            $(".item-symbol").text(item_symbol);


            var selectedglobalCurrencyname = $("#selected_crrency .selectedglobalCurrencyname").val()
            // console.log(selectedglobalCurrencyname);
            //  console.log(selectedcryptoType);
            const fixedvalue = $('#fmyInput').val();

            $('input[name="total-trading-currency-type-value"]').val(fixedvalue);
            $('input[name="selected-golobal-currency-type-rate"]').val(selectedcurrencyPrice);

            $(".total-trading-currency-type").text(selectedcryptoType);
            $(".lower-order-limit").text(selectedglobalCurrencyname);
            $(".higher-order-limit").text(selectedglobalCurrencyname);
            $(".holding-more-than-crypto-name").text(selectedcryptoType);
            $(".selected-golobal-currency-type").text(selectedglobalCurrencyname);
            $(".selected-golobal-currency-type-value").text(orderPrice.toFixed(8));


            // console.log(selected_crypto_value);
            // console.log(selectedcurrencyPrice);
            // console.log(selectedcryptoType);


        }

        function count_crypto(amountToTrading) {

            const total_trading_currency_type_value = $('.total-trading-currency-type-value').val();
            const selected_golobal_currency_type_rate = $('.selected-golobal-currency-type-rate').val();

            // console.log(amountToTrading);
            //  console.log(total_trading_currency_type_value);
            // console.log(selected_golobal_currency_type_rate);
            const fixedvalue = $('#fmyInput').val();
            const amount_To_Trading = (amountToTrading * total_trading_currency_type_value) / selected_golobal_currency_type_rate;
            const fixed_amount_To_Trading = (amountToTrading * fixedvalue);
            //  console.log(amount_To_Trading);
            $(".selected-golobal-currency-type-value").text('');
            $(".selected-golobal-currency-type-value").text(fixed_amount_To_Trading.toFixed(8));
            $("#higherlimit").val(fixed_amount_To_Trading.toFixed(8));
            $('input[name="holding_coin"]').val(amountToTrading)
            // console.log(total_trading_currency_type_value);
            // console.log(selected_golobal_currency_type_rate);
            //console.log(amount_To_Trading);

        }

        function checkHoldingCoins() {
            if ($('input[name="holding_coin"]').val() < $('#amount').val()) {
                triggerAlert('Held Coins must be higher OR eqaul to trade ammount ' + $('#amount').val() + ' !', 'error');
                $('input[name="holding_coin"]').val($('#amount').val());
            }
        }
    </script>
    <script>
        $('input[name="post_status"]').on('change', function() {
            const selectedValue = $(this).val();
            $('input[name="post_status"]').removeAttr('checked');
            const checkedtype = $(this).attr('checked', 'checked');
            //console.log(selectedValue);

        });
    </script>
    <script>
        $(document).ready(function() {
            // Listen for a click event on the dropdown menu's <a> elements
            $('.ul-dropdown a').click(function() {
                // Get the text content of the clicked <a> element
                var selectedInterval = $(this).text();

                // Update the text content of the parent <a> element's <span> element
                $('.open-dropdown span').text(selectedInterval);
            });

        });

        function getAllValues() {

            // if($("#nickName").val() == '' || $('input[name="kycCheck"]:checked').length < 1 || $('input[name="regDaysCheck"]:checked').length < 1 || $('input[name="registerd_account_day"]').val() < 1 || $('input[name="registerd_account_day"]').val().length < 1 ||
            //     $('input[name="holding_coinCheck"]:checked').length < 1 || $('input[name="holding_coin"]').val() < 1 || $('input[name="holding_coin"]').val().length < 1 ){

            //       //  $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
            //       $('#confirm_post_modal').addClass('hide');
            //         triggerAlert('All fields are mandatory!','error');


            // }
            if ($("#nickName").val() == '') {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Nick name are required!', 'error');
            } else if ($('#selected-order-time').val() == '') {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Select payment time limit!', 'error');
            } else if ($('input[name="kycCheck"]:checked').length < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Checked Completed KYC!', 'error');
            } else if ($('input[name="regDaysCheck"]:checked').length < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Checked Registered day!', 'error');

            } else if ($('input[name="registerd_account_day"]').val() < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Enter registered day!', 'error');

            } else if ($('input[name="registerd_account_day"]').val().length < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Enter registered day!', 'error');

            } else if ($('input[name="holding_coinCheck"]:checked').length < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Checked holding coin!', 'error');

            } else if ($('input[name="holding_coin"]').val() < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Enter number of holding coin!', 'error');

            } else if ($('input[name="holding_coin"]').val().length < 1) {
                $('#confirm_post_modal').addClass('hide');
                triggerAlert('Enter number of holding coin!', 'error');

            } else {
                if ($('#confirm_post_modal').hasClass('hide') === true) {
                    $('#confirm_post_modal').removeClass('hide');
                }


                //Selected tab value
                const activeTabValue = $('.trade .postTypeOrder.active').attr('value');
                // console.log(activeTabValue);

                // selected crypto type
                const selectedcryptoType = $('.default-selected-crypto-name').text();
                // console.log(selectedcryptoType);

                // Selected Currency

                const selectedglobalCurrencyname = $("#selected_crrency .selectedglobalCurrencyname").val()
                // console.log(selectedglobalCurrencyname);

                const selectedglobalCurrencyId = $("#selected_crrency .selectedglobalCurrencyId").val()
                // console.log(selectedglobalCurrencyId);


                // Your Price
                const order_price = $('#order-price span').text();
                // console.log(order_price);


                // Highest Order Price

                const highest_order_price = $('#highest-order-price span').text();
                // console.log(highest_order_price);


                //Your Price type

                const price_type_checkedValue = $('input[name=price_type]:checked').val();
                // console.log(price_type_checkedValue);

                //Floating Price Margin

                const current_price = $('#crrent_price input').val();
                // console.log(current_price);

                // Total Trading Amount

                const total_trading_amount = $('#amount').val();
                // console.log(total_trading_amount);

                // Lower Order Limit

                const lowerlimit = $('#lowerlimit').val();
                // console.log(lowerlimit);


                // Higher Order Limit

                const higherlimit = $('#higherlimit').val();
                // console.log(higherlimit);

                // Payment Methods

                var text = $(".selected-payment-option-div").find(".added-payment-div").text().trim();
                var methodTypes = text.split("\n").filter(function(value) {
                    return value.trim().length > 0;
                    if (!methodTypes.includes(methodType)) {
                        methodTypes.push(methodTypes);

                    }
                });

                var methodIds = $(".added-payment-div").map(function() {
                    return this.id;
                    methodIds.push(this.id);
                }).get();

                //console.log(options);

                // const paymentOptions = $(".selected-payment-option-div");
                // let methodTypes = [];
                // let methodIds =  [];
                // console.log(paymentOptions);
                // paymentOptions.each(function() {
                //   const methodType = $(this).find(".method_type").val().trim();
                //   const methodId = $(this).find(".paymentMethodId").val().trim();
                // //   console.log("Method Type: " + methodType);

                //   if (!methodTypes.includes(methodType)) {
                //     methodTypes.push(methodType);
                //     methodIds.push(methodId);
                //   }
                // });

                const postPaymentMethod = $('.post-Payment-Method');
                postPaymentMethod.empty();

                if (methodTypes.length > 0) {
                    postPaymentMethod.append(`<span class="${methodTypes[0]}">${methodTypes[0]}</span><input type="hidden" class="methodIds_${methodIds[0]}" name="methodIds" value="${methodIds[0]}">`);

                    for (let i = 1; i < methodTypes.length; i++) {
                        postPaymentMethod.append(`, <span class="${methodTypes[i]}">${methodTypes[i]}</span><input type="hidden" class="methodIds_${methodIds[i]}" name="methodIds" value="${methodIds[i]}">`);
                    }
                }



                // Payment Time
                const selectedTime = $('#selected-order-time').val().split('_Minutes')[0];
                // console.log(selectedTime);
                // $('#year_pick').change(function(){
                //         var value = $('#year_pick :selected').val();
                //         var txt = $('#year_pick :selected').text();

                // });

                // Remarks (Optional) Values

                const remarks = $('#remarks').html();
                // console.log(remarks);

                // Auto Reply (Optional) values

                const autoreplay = $('#autoreplay').val();
                // console.log(autoreplay);
                // Counterparty Conditions values

                var checkedValues = [];

                $('input[type=checkbox]:checked').each(function() {
                    var checkboxLabel = $(this).siblings('.text-muted').text();
                    if (checkboxLabel) {
                        var inputVal = $(this).siblings('span').find('input').length ? $(this).siblings('span').find('input').val() : '';
                        var inputUnit = $(this).siblings('.text-muted').last().text();
                        checkedValues.push({
                            'value': checkboxLabel,
                            'inputValue': inputVal,
                            'inputUnit': inputUnit
                        });
                    }
                });

                // var counterpartyConditions = {};
                // $('.flex-div input[type=checkbox]:first').each(function() {
                //     counterpartyConditions[$(this).next().text().replace(/\s/g, '')] = $(this).is(':checked') ? 1 : 0;
                // });

                // $('.flex-div input[type=number]').each(function() {
                //     var name = $(this).attr('name');
                //     if (name) {
                //         counterpartyConditions[name] = $(this).val();
                //     }
                // });

                // console.log(counterpartyConditions);

                // console.log(checkedValues);

                //Status values
                const statuscheckedValue = $('input[name=post_status]:checked').val();
                // console.log(statuscheckedValue);



                if (activeTabValue == 0) {
                    $(".post-type").html('Buy');
                }
                if (activeTabValue == 1) {
                    $(".post-type").text('Sell');
                }

                $(".post-Assets").text(selectedcryptoType);
                $(".post-Currency").text(selectedglobalCurrencyname);

                if (price_type_checkedValue == 0) {
                    $(".post-Currency-type").text('Fixed');
                }
                if (price_type_checkedValue == 1) {
                    $(".post-Currency-type").text('Floating');
                }

                $(".post-fixed-total-value").text(current_price);

                $(".post-Order-lower-limit").text(lowerlimit);
                $(".post-Order-higher-limit").text(higherlimit);
                $(".post-Trading-amt-val").text(total_trading_amount);

                $('.compleated-kyc').text(checkedValues[0].value);
                $('.registered-day').text(`Registered ${checkedValues[1].inputValue} ${checkedValues[1].inputUnit}`);
                $('.holding-more').text(`Holding more than ${checkedValues[2].inputValue} ${checkedValues[2].inputUnit}`);

                const estimatedfee_val = $('.estimatedfee').text();
                const post_Estimated_fee_type = $('.estimatedfeetype').text();
                $(".post-Estimated-fee-val").text(estimatedfee_val);
                $(".post-Estimated-fee-type").text(post_Estimated_fee_type);

                const estimatedfeeID = $('.estimatedfeeID').val();
                $('input[name="hestimatedfeeid"]').val(estimatedfeeID);
                $(".post-time-limit-val").text(selectedTime);

                const postCurrencyid = $('.selectedglobalCurrencyId').val();
                $('input[name="postCurrencyid"]').val(postCurrencyid);

                //$(".").text();

            }

        }
    </script>
    <script>
        function SubmitPostAds(id) {
            //alert(id);
            const ordertype = $('.trade .postTypeOrder.active').attr('value');
            const cryptoname = $('.selected-asset').text();
            const faithid = $('.postCurrencyid').val();
            const pricetype = $('input[name=price_type]:checked').val();
            const fixed_floating_pice = $('.post-fixed-total-value').text();
            const total_amount = $('.post-Trading-amt-val').text();
            const order_lower_limit = $('.post-Order-lower-limit').text();
            const order_higher_limit = $('.post-Order-higher-limit').text();
            const payment_method = $('.post-Payment-Method').text();
            const payment_time_limit = $('.post-time-limit-val').text();
            const terms = $('#remarks').html();
            const auto_replay = $('#autoreplay').val();

            const selectedCoinPrice = $('.selectedCoinPrice').val();
            const selectedglobalCurrency = $('.selectedglobalCurrency').val();
            const domestic_currency_value = $('.selected-golobal-currency-type-value').text();
            const nickname = $('#nicknameval').val();
            const availableCoins = $('input[name="available_coins"]').val();
            // counterpartyConditions

            const counterpartyConditions = {};
            $('.c-conditions input[type=checkbox]:first').each(function() {
                counterpartyConditions[$(this).next().text().replace(/\s/g, '')] = $(this).is(':checked') ? 1 : 0;
            });

            $('.c-conditions input[type=number]').each(function() {
                const name = $(this).attr('name');
                if (name) {
                    counterpartyConditions[name] = $(this).val();
                }
            });

            //per crypto in inr
            const cryptoPriceInInr = ($('#selected_crypto .selectedCoinPrice').val() / $('input[name="currency-1_price"].selectedcurrencyPrice ').val()).toFixed(8);

            //const countryparty_condition= $('.post-Counterparty-condition').text();

            const estimated_fee = $('.hestimatedfeeid').val();
            const status = $('input[name=post_status]:checked').val();

            // Payment Method Ids
            const methodIds = $('.post-Payment-Method input[class^="methodIds_paymethod_"]').map(function() {
                var paymthd = $(this).val();
                var pm = paymthd.split("paymethod_");
                // return $(this).val();
                return pm[1];
            }).get();

            //    console.log(methodIds);
            //     const methodIdsObj = methodIds.reduce((obj, val, index) => {
            //       obj[index] = val;
            //       return obj;
            //     }, {});

            // const jsonmethodIdsObj = JSON.stringify(methodIdsObj);


            // SUBMIT ADS POST

            $.ajax({
                type: 'POST',
                url: '{{ route('
                SubmitPostAds ') }}',
                cache: false,
                beforeSend: function() {
                    $("#SubmitPostAds").text("Post Getting Submited.");
                    $("#SubmitPostAds").css("pointer-events", "none");
                },
                data: {
                    '_token': "{{ csrf_token() }}",
                    'ordertype': ordertype,
                    'cryptoname': cryptoname,
                    'faithid': faithid,
                    'pricetype': pricetype,
                    'fixed_floating_pice': fixed_floating_pice,
                    'total_amount': total_amount,
                    'order_lower_limit': order_lower_limit,
                    'order_higher_limit': order_higher_limit,
                    'payment_method': methodIds,
                    'payment_time_limit': payment_time_limit,
                    'terms': terms,
                    'auto_replay': auto_replay,
                    'countryparty_condition': counterpartyConditions,
                    'estimated_fee': estimated_fee,
                    'status': status,
                    'selectedCoinPrice': selectedCoinPrice,
                    'selectedglobalCurrency': selectedglobalCurrency,
                    'domestic_currency_value': domestic_currency_value,
                    'cryptoPriceInInr': cryptoPriceInInr,
                    'nickname': nickname,
                    'availableCoins': availableCoins
                },
                success: function(data) {

                    $('#confirm_post_modal .custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
                    document.getElementById("post-ads-form").reset();
                    triggerAlert('Ad Posted successfully!', 'success');
                    setTimeout(function() {
                        window.location.href = '{{ url(app()->getLocale())."/my-ads" }}';

                    }, 2500)
                    $("#third-section").addClass('hide')
                    $("#second-section").addClass('hide')
                    $("#first-section").removeClass('hide')

                },
                error: function(xhr, status, error) {
                    //  $('#confirm_post_modal .custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
                    triggerAlert('Something went wrong!', 'error');
                }
            });

        }

        function check_vailable_cointInWallet() {
            if ($("#sell").hasClass('active') == true) {
                var amount = $('#amount').val();

                var available_cointInwallet = $("input[name='available_coins']").val();
                if (parseFloat(available_cointInwallet) < parseFloat(amount)) {
                    triggerAlert('Insufficient coins in your wallet to sell', 'error');
                    $('#amount').val('');

                }
            }
        }

        function checkLimit() {
            // console.log('wealthmark');

            check_vailable_cointInWallet();

            var higherlimit = $('#higherlimit').val();
            var lowerlimit = $('#lowerlimit').val();

            // console.log(amount);
            // console.log(higherlimit);
            // console.log(lowerlimit);

            if (higherlimit.length > 1 && lowerlimit.length > 1) {

                if (parseFloat($('#higherlimit').val()) < parseFloat($('#lowerlimit').val())) {
                    triggerAlert('Lower limit must be less than higher limit', 'error');
                }
            }

        }
    </script>
    <script>
        function delMthod(id) {

            // console.log(id);
            element = $(".ele_" + id)
            element.remove();
            $('.select-payment a').removeClass('selected');
        }

        // Get the input field
        const myInput = $('#fmyInput');
        myInput.on('change', function() {
            const value = parseFloat($(this).val());
            const formattedValue = value.toFixed(8);
            $(this).val(formattedValue);
        });
    </script>
    <script>
        $(".save-nickName").click(function() {
            var id = '{{ Auth::user()->id }}';
            var value = $("#nickName").val();
            var token = $("#nikefld").val();
            var column = 'nick_name';
            $.ajax({
                type: "POST",
                //  dataType: "text",
                url: "https://wealthmark.io/en/user/update_user_column",
                data: {
                    'user_id': id,
                    'value': value,
                    'column': column,
                    '_token': token,

                },
                success: function(data) {
                    $(".nicknameClose").click();

                    // $("#nickNameEdit").hide();
                    // $(".nicknamefield span.text").text(data.columnValue);
                    var nickName = $("#nickName").val();
                    if (nickName == '') {
                        nickName = 'Anonymous-User-0ecdc';
                        $('#open_edit_modal').text('Add');
                    } else {
                        $('#open_edit_modal').text('Edit');
                    }
                    $("#selected-payment-option .text").text(nickName);
                    $('#nicknameval').val(nickName);

                    triggerAlert('Nick name set!', 'success');


                    return data;

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    triggerAlert('Nickname cannot be set!', 'error');
                }

            });


            //   $(".nicknamefield span").load(url);

            $("#nickNameEdit").children().addClass("hide").removeClass("custom-modal-bck-bg");
        });



        //  $('.trade button').click(function(){
        //      $('.trade').find('.nav-link').removeClass('active');
        //      $(this).addClass('active')
        //  })

        $(".custom-tab a").click(function() {
            var id = $(this).attr("id")
            $('.custom-tab').find(".active").removeClass('active');
            $(this).addClass('active');

        })
    </script>


</body>

</html>