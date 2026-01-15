
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel='stylesheet' href="{{ asset('css/p2p_trading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">

</head>
<style>
    #load_buy_p2p_trading{
        display:none;
    }
    .btn-green[disabled] {
      pointer-events: none;
      opacity: 0.5;
    }
    .set-payment-method-right table:nth-child(odd){
        background:whitesmoke;
    }
</style>
<body>
  
    @include('template.web_menu')
   <!-------------baner section------------------------->
   
<section class="p2p-trading-box" id="p2p-trading-section">
        <div class="container">
            <div class="row">
                <div class="overview-inner-box text-center">
                    <h3 class="digital-asset-heading text-white">Buy and Sell P2P with Your Preferred Payment Methods
                    </h3>
                    <p class="text-center text-white fw-bold"> Buy and sell BMK safely and easily on Wealth Mark
                        P2P. Find the best offer below and buy and sell BMK with Your Preferred Payment Methods today.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-------------baner section------------------------->
 
@include('web.p2pTrading_template.tabSection')

<div id="load_page_here">
   
    <section class="p2p-trading-table-box pt-3 pb-3" id="p2p-trading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div id="table_data">
                        <div id="loading" style="display:none;">
                                <img src="https://thumbs.gfycat.com/DangerousWavyFinwhale-max-1mb.gif" alt="Loading...">
                        </div>
                        @include('web.p2p_trading_ajax_dev')
                    </div>
                </div>
            </div>

        </div>
    </section> 
</div>

<div id="load_buy_p2p_trading">
   
    <section class="p2p-trading-table-box pt-3 pb-3" id="p2p-trading_buy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div id="table_data_buy">
                        <div id="loading_buy" style="display:none;">
                                <img src="https://thumbs.gfycat.com/DangerousWavyFinwhale-max-1mb.gif" alt="Loading...">
                        </div>
                     <h3>BUY COINS</h3>
                      @include('web.p2p_trading_buy_ajax')
                    </div>
                </div>
            </div>

        </div>
    </section> 
</div>



<!--==================================div section =======================================-->
    @include('web.p2pTrading_template.static_section')
    @include('web.p2pTrading_template.faq')
<!--==================================div section =======================================-->

    <!--// user payment method-->
    {{-- $userPaymentMethod --}}
    
    <!--// all payment method-->
    {{-- $allpaymentMethod --}}
    
   
    <!--// count payment type-->
     {{-- $count_payment_type  --}}


<div class="modal_open_id">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body">
                    <div class="wm-custom-modal-header">
                        <span>Trading Requirements</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close">
                            <path
                                d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <p>P2P Trading is not available in the following countries: United States, Cuba, Iran, North Korea,
                        and Syria.</p>

                    <div class="row mb-3 mt-3 mt-2">
                        <div class="col">Complete KYC Verification</div>
                        <div class="col d-flex justify-content-end"> <span
                                class="badge badge-warning enable-badge-link">Enable </span>
                        </div>
                    </div>
                    <hr />
                    <div class="row mb-3 mt-3">
                        <div class="col">Enable SMS authentication</div>
                        <div class="col d-flex justify-content-end text-warning align-items-center">
                            <svg viewBox="0 0 24 24" fill="none" class="finish-tick-icon">
                                <path
                                    d="M19.068 4.932A9.917 9.917 0 0012 2a9.917 9.917 0 00-7.068 2.932A9.917 9.917 0 002 11.988C2 17.521 6.479 22 12 22a9.917 9.917 0 007.068-2.932A9.992 9.992 0 0022 11.988a9.918 9.918 0 00-2.932-7.056zm-8.912 12.234L5.71 12.71l1.42-1.42 3.025 3.024 6.7-6.713 1.421 1.42-8.121 8.145z"
                                    fill="currentColor"></path>
                            </svg>
                            Finished
                        </div>
                    </div>
                    <hr />
                    <div class="row d-flex text-center mt-2 justify-content-center">
                        <a class="btn btn-yellow trading-refresh-btn">
                            <svg viewBox="0 0 24 24" fill="none" class="refresh-icon-trading">
                                <path
                                    d="M20.7 11.925c0 2.1-.8 4.1-2.3 5.6-1.6 1.5-3.6 2.3-5.6 2.3-2 0-4-.8-5.6-2.3l-1.3-1.3 1.4-1.4 1.3 1.3c2.3 2.3 6 2.3 8.3 0 1.1-1.1 1.7-2.6 1.7-4.2s-.6-3.1-1.7-4.2c-2.3-2.3-6-2.3-8.3 0l-1.1 1.2h3.3v2H4v-6.8h2v3.4l1.2-1.2c3.1-3.1 8.1-3.1 11.2 0 1.5 1.5 2.3 3.5 2.3 5.6z"
                                    fill="currentColor"></path>
                            </svg>
                            Refresh</a>
                    </div>
                    <div class="row mt-1">
                        <a class="btn btn-default requirement-btn">I have met the requirementes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="sell_coin_p2p_modal">
    <div class="hide">
        <div class="wm-custom-modal-diolog max-width-700px">
            <div>
                <div class="wm-custom-modal-header m-0">
                    <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                          <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                    </svg>
               </div>
           </div>
           <div class="wm-custom-modal-body max-height-500px bg-light-blue py-2 px-3 scrollbar-style">
               
                <div class="bg-white p-2 mb-2" id="payment-method-content-left">
                     <input type="hidden" class="postID" name="postID" value="">
                     <table class="table tbl-borderless">
                        <tr>
                            <td class=""><div class="buy_modal_lbl"> Name  :</div></td>
                            <td><div class="buy_modal_value"> <span class="buyer_name"></span> </div></td>
                        </tr>
                        <tr>
                            <td><div class="buy_modal_lbl">Order Status  : </div></td>
                            <td><div class="buy_modal_value"><span class="buyer_order_completion"></span></div></td>
                        </tr>
                         <tr>
                            <td> <div class="buy_modal_lbl">Price  :  </div></td>
                            <td><div class="buy_modal_value">
                              <span class="buyer_cr_value"></span>
                           </div></td>
                        </tr>
                         <tr>
                            <td><div class="buy_modal_lbl">
                              Payment Method  : 
                           </div>
                           </td>
                            <td>
                                 <div class="buy_modal_value buyer_p_type">
                              <span class="buyer_payment_type"></span>
                           </div>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <div class="buy_modal_lbl">
                              Total  :
                           </div>
                            </td>
                            <td>
                                 <div class="buy_modal_value">
                              <span class="total-crypto-coin"></span> <span class="crypto-coin-type"></span>
                           </div>
                            </td>
                        </tr>
                         <tr>
                             <td> <div class="buy_modal_lbl">
                           Payment Time Limit  : 
                        </div></td>
                             <td> <div class="buy_modal_value">
                           <span class="buyer_payment_timel_imit"></span><small>Minutes</small>
                        </div></td>
                         </tr>
                     </table>
                     
                     
                     
                  
                        <div class="record-section bg-whitesmoke flex-column">
                        <div class="buy_modal_lbl w-100">
                                       Countryparty Conditions  :
                        </div>
                        <div class="buy_modal_value w-100 flex-div fs-12">
                            <!--<div class="step-progress-highlight-point"></div>-->
                            <span class="buyer_countryparty_conditions">
                                
                            </span>
                        </div>
                        <div class="buy_modal_lbl w-100">
                           Terms & conditions  :
                        </div>
                        <div class="buy_modal_value w-100 flex-div fs-12">
                            <div class="step-progress-highlight-point"></div>
                           <span class="terms_and_conditions"></span>
                        </div>
                    </div>
                  </div>
                <div class="bg-white p-2 mb-2">
                    <div  id="payment-method-content-right">
                        <div class="set-payment-method-right">
                            <form action="javascript:void(0);">
                               <div class="mb-3 mt-4 bg-light-blue p-2">
                                   <div class="table-responsive mb-2 bg-white" id="addHiddenValues" ></div>
                                   <a href="javascript:void(0);" class="btn-yellow d-inline-block shadow-none"  data-target-modal="payMethod">Set My Payment  Method</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wm-custom-modal-footer py-2 px-3 mb-3">
                <div class=" d-flex">
                    <a class="btn-default refresh-price-btn d-inline-block w-50 mb-3 text-center">Refresh Price</a>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-yellow Crypto_type d-inline-block w-50 mb-3 sell-btn-id confirmPay " disabled>Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('template.web_footer')
@include('web.p2pTrading_template.script')
@include('user.payment.paymentMethodsTemplates.selectAllPaymethods')
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>
<script src="{{ asset('css/accordian_bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/alert.js') }}"></script>
<script>
function addHiddenValues(id){
    const ID = id;
    // $(this).parent().addClass('selected');
    const parentA = event.target.closest('a');
    if(parentA.classList.contains('selected')){
       parentA.classList.remove('selected');
    }else{
        parentA.classList.add('selected');
    }
}
$('.switch-btn').click(function(){
    if(document.getElementById("togBtn").checked){
        $('#load_page_here').css({'display' : 'block'});
        $('#load_buy_p2p_trading').css({'display' : 'none'});
    } else {
        $('#load_page_here').css({'display' : 'none'});
        $('#load_buy_p2p_trading').css({'display' : 'block'});
    }
});
    
</script>
<script>

$('.countrybarToggle').click(function(){$('.spinner-border-sm').toggle()})


$("#confirm_paymentOn_p2ptrading").click(function(){
    var selectedMethod = $('.select-payment').find('.selected div');
    // var addedMethod = $('.added-payment-div');
    // var id = $('.select-payment a.selected div').attr('id');
    // console.log(selectedMethod);
    var paymentMethodIds = [];
    selectedMethod.each(function() {
        paymentMethodIds.push($(this).attr('id'));
        
    }); 
    //  console.log(paymentMethodIds);
    // const count =$('.selected-payment-option-div').find('.fs-12').length; 
    //console.log(paymentMethodIds.length);
    if(paymentMethodIds.length < 4){
        var loadpaymentmethod = $('#selected-payment-option');
        loadpaymentmethod.html('');
        $.each(paymentMethodIds, function(index, id) {
            // console.log(id);
            $('#addHiddenValues').html('')
            appendPaymentDetails(id);
        });
        
    } else {
        triggerAlert('You can select up to 3 methods','error');
        $('#payMethod .hide').addClass('custom-modal-bck-bg').removeClass('hide');
        
    }
}); 
       
  function appendPaymentDetails(paymentMethodId) {
      var paymentMethod_Id = paymentMethodId;
                //console.log()
                $.ajax({
                    type: 'POST',
                    url: '{{ route('getPaymentDetailBymethodId') }}',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'paymentMethodId' : paymentMethod_Id,
                    },
                    success: function (data) {

                        $('#'+paymentMethodId).parent().addClass('selected');
                        //$('#'+paymentMethodId).parent().siblings().removeClass('selected');
                        var modal = document.getElementById("wm-custom-modal-close");
                        var accountHolder =  data.paymentmethods_details.account_holder;
                        var paymentMethodType = data.paymentmethods_details.method_type;
                        var account_number = data.paymentmethods_details.account_number;
                        var ifsc = data.paymentmethods_details.ifsc;
                        var bank_name = data.paymentmethods_details.bank_name;
                        var branch_name = data.paymentmethods_details.branch_name;
                        var upi_Id = data.paymentmethods_details.upi_Id;
                        var swift_code = data.paymentmethods_details.swift_code;
                        var qr_code = data.paymentmethods_details.qr_code;
                        if(qr_code == null || qr_code == 'undefined' || qr_code == ''){
                            qr_code= 's/noQRAdded.png';
                        }
                        //console.log(paymentMethodType);
             
                        // $('#addHiddenValues).html('');
                        var QR = "{{ url('storage/app/') }}" +'/'+ qr_code;
                        var html = '<table class="table mb-0"><tbody>';
                        if(paymentMethodType != null) {
                            html = html+'<tr>';
                            html = html+'<td colspan="4" class="text-black"><b>'+paymentMethodType+'</b></td>';
                            html = html+'</tr>';
                        }
                        if(bank_name != null){
                            html = html+'<tr>';
                            html = html+'<td colspan="2" class="text-muted fs-12">Bank Name</td>';
                            html = html+'<td colspan="2" class="text-black"><b>'+bank_name+'</b></td>';
                            html = html+'</tr>';
                        }
                            html = html+'<tr>';
                            html = html+'<td class="text-muted fs-12">Holder Name</td>';
                            html = html+'<td class="text-black"><b>'+accountHolder+'</b></td>';
                            html = html+'<td class="text-muted fs-12">Payment Mode</td>';
                            html = html+'<td class="text-black"><b class="paymentmode">'+paymentMethodType+'</b></td>';
                            html = html+'</tr>';
                        if(account_number!= null){
                            html = html+'<tr>';
                            html = html+'<td class="text-muted fs-12">Account No</td>';
                            html = html+'<td class="text-black"><b>'+account_number+'</b></td>';
                            html = html+'<td class="text-muted fs-12">Ifsc Code</td>';
                            html = html+'<td class="text-black"><b>'+ifsc+'</b></td>';
                            html = html+'</tr>';
                        }
                        if(bank_name!= null){
                            html = html+'<tr>';
                            html = html+'<td class="text-muted fs-12">Bank Name</td>';
                            html = html+'<td class="text-black"><b>'+bank_name+'</b></td>';
                            html = html+'<td class="text-muted fs-12">Branch Name</td>';
                            html = html+'<td class="text-black"><b>'+branch_name+'</b></td>';
                            html = html+'</tr>';
                        }
                        if(upi_Id!= null){
                            html = html+'<tr>';
                            html = html+'<td class="text-muted fs-12">UPI ID</td>';
                            html = html+'<td class="text-black"><b>'+upi_Id+'</b></td>';
                            html = html+'<td class="text-muted fs-12">QR Code</td>';
                            html = html+'<td class="text-black"><b><span><img class="img-thumbnail " width="100px" src="'+QR+'" alt="" title=""></span></b></td>';
                            html = html+'</tr>';
                        }
                        html = html+'</tbody></table>';
                        $('#addHiddenValues').append(html);  
                                 
                        $('.confirmPay').attr('disabled', false) 
                    },
                    error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                          
                    }
                });                         
            }
</script>
<script>
    $('#p2p-trading-buy-tab').click(function(){
        var clickedid = $(this).attr('id');
        if(clickedid == 'p2p-trading-buy-tab'){
            
            var pageURL=$(this).attr('href');
                history.pushState(null, '', pageURL);
                var appLocale = "<?php echo url(app()->getLocale()) ?>";
                 location.reload();
                //   $.ajax({    
                //     type: "GET",
                //     url: appLocale +"/p2p-trading/buy", 
                //     data:{page:pageURL},            
                //     dataType: "html",                  
                //     success: function(data){ 
                //         document.location.reload();
                //     }
                // });
        }
    //   console.log('Buy ID:', $(this).attr('id'));
    });
    
    $('#p2p-trading-sell-tab').click(function(){
        var clickedid = $(this).attr('id');
        if(clickedid == 'p2p-trading-sell-tab'){
            
            var pageURL=$(this).attr('href');
                history.pushState(null, '', pageURL);
                var appLocale = "<?php echo url(app()->getLocale()) ?>";
                 location.reload();
                // $.ajax({    
                //     type: "GET",
                //     url: appLocale +"/p2p-trading", 
                //     data:{page:pageURL},            
                //     dataType: "html",                  
                //     success: function(data){ 
                //       document.location.reload();
                //     }
                // });
        }
    //   console.log('Sell ID:', $(this).attr('id'));
    });
</script>
<script>
        $(document).on('click','a.nav-link', function(e){
           // console.log(this.id);
            e.preventDefault();
           
            var clickedid = this.id;
            //alert(clickedid);
            if(clickedid == 'p2p-trading-BTC-tab'){
                var pageURL=$(this).attr('href');
            
                    history.pushState(null, '', pageURL);
            var appLocale = "<?php echo url(app()->getLocale()) ?>";
                    $.ajax({    
                    type: "GET",
                    url: appLocale +"/p2p-trading/btc", 
                    data:{page:pageURL},            
                    dataType: "html",                  
                    success: function(data){ 
                        document.location.reload();
                       // $('#p2p-trading').html(data);    
                            
                    }
                });
            }

            if(clickedid == 'p2p-trading-USDT-tab'){
                var pageURL=$(this).attr('href');
            
                    history.pushState(null, '', pageURL);
            var appLocale = "<?php echo url(app()->getLocale()) ?>";
                    $.ajax({    
                    type: "GET",
                    url: appLocale +"/p2p-trading/bmk", 
                    data:{page:pageURL},            
                    dataType: "html",                  
                    success: function(data){ 
                        document.location.reload();
                      //  $('#p2p-trading').html(data);    
                            
                    }
                });
            }

            if(clickedid == 'p2p-trading-ETH-tab'){
                var pageURL=$(this).attr('href');
            
                    history.pushState(null, '', pageURL);
            var appLocale = "<?php echo url(app()->getLocale()) ?>";
                    $.ajax({    
                    type: "GET",
                    url: appLocale +"/p2p-trading/eth", 
                    data:{page:pageURL},            
                    dataType: "html",                  
                    success: function(data){ 
                        document.location.reload();
                      // $('#p2p-trading').html(data);    
                            
                    }
                });
            }
           
            });
</script>
<script>
        $(document).ready(function(){
            
            $(document).on('click', '.pagination a', function(event){
                    event.preventDefault(); 
                    var page = $(this).attr('href').split('page=')[1];
                    fetch_data(page);
                    var page1 = $(this).attr('href');                  
                    history.pushState(null, '', page1);
                });

            function fetch_data(page){
                var appLocale = "<?php echo url(app()->getLocale()) ?>";
                $.ajax({
                    url:appLocale +"/p2p-trading?page="+page,
                    success:function(data){
                        $('#table_data').html(data);
                }
            });
            }
            
        });
</script>
<script>
    function changeSrc3(id){ // for payment filter
         
        var CurrencyId = $('.currency_filter  .wm-dropdown-optn-item-inner.selected').parent().attr('id');
        var countryname =  $('#region-dropdown-list ul li .selected').parent().attr('id');
        var paymentType = id;
        
         if(CurrencyId === undefined){
            CurrencyId = null;
        }
        if(countryname === undefined){
            countryname = null;
        }
        
        //      console.log(CurrencyId);
        //      console.log(paymentType);
        //      console.log(countryname);
        $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
              $('#loading').hide();
        });
        //var selectedPaymentType= $("#" + id).children().children().children('.wm-dropdown-optn-item-txt').text();
        var appLocale = "<?php echo url(app()->getLocale()) ?>";
        var id = id;
        //alert(id);
       
        $.ajax({
            url: appLocale +'/p2p-trading',
            type: 'GET',
            data: { 
                paymentType: paymentType,
                 countryname: countryname,
                  CurrencyId: CurrencyId,
                
                
            },
            success: function(response) {
                $('#table_data').html(response);
            }
        });
    };
               
</script>
<script>
    function changeSrc4(id){ // for currency filter
        
        var CurrencyId = id;
        var countryname =  $('#region-dropdown-list ul li .selected').parent().attr('id')
        var paymentType = $('#payment-dropdown-list .wm-dropdown-optn-item-inner.selected').parent().attr('id');
        
        if(paymentType === undefined){
            paymentType = null;
        }
        if(countryname === undefined){
            countryname = null;
        }
        
        //     console.log(CurrencyId);
        //   console.log(paymentType);
        //   console.log(countryname);
        
         $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
              $('#loading').hide();
        });
        var id = id;
      
        var appLocale = "<?php echo url(app()->getLocale()) ?>";
        $.ajax({
            url: appLocale +'/p2p-trading',
            type: 'GET',
            data: { 
                CurrencyId: CurrencyId,
                countryname : countryname,
                paymentType : paymentType
                
                
            },
            success: function(response) {
                $('#table_data').html(response);
            }
        });

    };
               
</script>
<script>
    function changeSrc5(id){  // for country filter
        var countryname = id;
         var CurrencyId = $('.currency_filter  .wm-dropdown-optn-item-inner.selected').parent().attr('id');
         var paymentType = $('#payment-dropdown-list .wm-dropdown-optn-item-inner.selected').parent().attr('id');
         
             if( CurrencyId === undefined){
            CurrencyId = null;
        }
        if(paymentType === undefined){
            paymentType = null;
        }
        
        //     console.log(CurrencyId);
        //   console.log(paymentType);
        //     console.log(countryname);
         
         $(document).ajaxStart(function(){
            $('#loading').show();
        }).ajaxStop(function(){
              $('#loading').hide();
        });
        var id = id;
       // alert(id);
      
       var appLocale = "<?php echo url(app()->getLocale()) ?>";
        $.ajax({
            url: appLocale +'/p2p-trading',
            type: 'GET',
            data: { 
                CurrencyId: CurrencyId,
                countryname : countryname,
                paymentType : paymentType
                
            },
            success: function(response) {
                $('#table_data').html(response);
            }
        });
    
    };
               
</script>
<script>
    var intervalId;
   
        function refresh(id) {
              
            //console.log(id);
            if (id === 'five-sec') {
                var fivesec = $('#five-sec').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+fivesec);
                clearInterval(intervalId);
                intervalId = setInterval(function() {
                    $('#block-tab-trading-refresh-btn').html('<img src="{{ asset('Spin.gif') }}" style="width: 20px;" />'+' '+fivesec);
                    $('#table_data').load(location.href + '#table_data');
                }, 5000);
            } else if (id === 'ten-sec') {
                var ten_sec = $('#ten-sec').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+ten_sec);
                clearInterval(intervalId);
                intervalId = setInterval(function() {
                    $('#block-tab-trading-refresh-btn').html('<img src="{{ asset('Spin.gif') }}" style="width: 20px;" />'+' '+ten_sec);
                    $('#table_data').load(location.href + '#table_data');
                }, 10000);
            } else if (id === 'twenty-sec') {
                var twenty_sec = $('#twenty-sec').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+twenty_sec);
                clearInterval(intervalId);
                intervalId = setInterval(function() {
                    $('#block-tab-trading-refresh-btn').html('<img src="{{ asset('Spin.gif') }}" style="width: 20px;" />'+' '+twenty_sec);
                    $('#table_data').load(location.href + '#table_data');
                }, 20000);
            }else if (id === 'not-now') {
                var not_now = $('#not-now').text();
                $('#block-tab-trading-refresh-btn').html('&#x21bb'+' '+not_now);
                clearInterval(intervalId);
                intervalId = setTimeout(function() {
                    $('#table_data').load(location.href + '#table_data');
                }, 100);
            }
             $('.ul-dropdown').hide()
        };
        
        $(document).ready(function() {
           
          
            $('#five-sec').click(function() {
                refresh('five-sec');
            });
        
            $('#ten-sec').click(function() {
                refresh('ten-sec');
            });
        
            $('#twenty-sec').click(function() {
                refresh('twenty-sec');
            });
            
            $('#not-now').click(function() {
                refresh('not-now');
            });
        });
</script>
<script>
// function sell_bmk(id){
//     $("#"+id).html("<span class='spinner-border spinner-border-sm' style='cursor: wait;'></span>");
//     setTimeout(function(){
//         if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === true){
//             $("#"+id).text('Sell');
            
//         };
        
//     }, 2000);

//     $('#addHiddenValues').html('')
//     const ifAuth =  <?php echo Auth::check() ? 'true' : 'false' ?>;
//     if(ifAuth == true) {
//         if (parseInt(localStorage.getItem('timerValue'))  == 0){
//             var buttonId = id;
//             var number = buttonId.replace('sell_bmk_', '');
//             var value = parseInt(number);
//             $.ajax({
//                 type: 'POST',
//                 url: '{{ route('getOrderDetailsbyAds') }}',
//                 data: {
//                     '_token': "{{ csrf_token() }}",
//                     'orderId' : value,
                    
//                 },
//                 success: function (data) {
//                     console.log('data', data);
//                     if(data.order_data_by_ads !='0'){
//                         $('#' + this.id + ' .span').text('on going');
//                         triggerAlert('This order already on going!', 'error');
//                         const myButtonId = 'Buy_bmk_'+id;
//                         const myButton = $("#" + myButtonId);
//                         myButton.attr("disabled", true);
//                     } else {
//                         var countryparty_conditions, timelimit, terms_conditions, buyer_payment_type, adsid;
                        
//                         $.ajax({
//                             type: 'POST',
//                             url: '{{ route('getPostbyId') }}',
//                             data: {
//                                 '_token': "{{ csrf_token() }}",
//                                 'postId' : value,
//                             },
//                             success: function (data) {
//                                 console.log('data_1', data);
//                                 var posttotalcrypto = data.ads_data.total_amount;
//                                 if(data.AvailableCoins >= posttotalcrypto){
//                                     var countryparty_conditions = data.countryparty_condition;
//                                     countryparty_conditions.CompletedKYC = (countryparty_conditions.CompletedKYC === '1') ? 'Yes' : 'No';
//                                     countryparty_conditions.registerd_account_day = countryparty_conditions.registerd_account_day + ' day';
//                                     countryparty_conditions.holding_coin = countryparty_conditions.holding_coin + ' Bmk coin';
//                                     var timelimit = data.ads_data.payment_time_limit;
//                                     var terms_conditions = data.ads_data.terms;
//                                     var buyer_payment_type = data.method_type;
//                                     var adsid= data.ads_data.adsid;
//                                     var ads_order_id= data.ads_data.id;
//                                     //  $('.select-payment').html('');
                                    
//                                     //  var methiodHtml = '';
//                                     //  data.payment_method_type.forEach((element) => {
//                                     //      console.log({ element });
//                                     //      methiodHtml =  '<a class="">';
//                                     //      methiodHtml += '<div  id="'+element.id+'" onclick="addHiddenValues('+element.id+')">';
//                                     //      methiodHtml +=  '<span>'+element.method_type+'</span>';
//                                     //      methiodHtml += '<span><i class="bi bi-check-circle-fill"></i></span>';
//                                     //      methiodHtml +=   '</div>';
//                                     //      methiodHtml +=   '</a>';
//                                     //      $('.select-payment').append(methiodHtml); 
//                                     //  }); 
//                                     processResponse(countryparty_conditions, timelimit, terms_conditions, buyer_payment_type,adsid,ads_order_id);
                                    
//                                 } else {
//                                     if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === false){
//                                         $("#"+id).text('Sell');
                                        
//                                     };
//                                     triggerAlert('Insufficient coins in your wallet to sell', 'error');
//                                 }
                                
//                             },
//                             error: function(xhr, status, error) {
//                                 var erroJson = JSON.parse(xhr.responseText);
                                  
//                             }
//                         });
                        
//                         function processResponse(countryparty_conditions, timelimit, terms_conditions, buyer_payment_type,adsid,ads_order_id) {
//                             var bmk = id;
//                             var ads_id =adsid;
//                             var buyer_name =$('#'+bmk).closest('.p2p-tbl-record-body').find('.buyer_name').text().trim();  
//                             var buyer_order_completion = $('#'+bmk).closest('.p2p-tbl-record-body').find('.buyer_order_completion').text().trim();  
//                             var buyer_cr_value = $('#'+bmk).closest('.p2p-tbl-record-body').find('.buyer_cr_value').text().trim();
//                             var buyer_cr_type = $('#'+bmk).closest('.p2p-tbl-record-body').find('.buyer_cr_type').text().trim();  
//                             var buyer_total_cr_value = $('#'+bmk).closest('.p2p-tbl-record-body').find('.total-coin').text().trim();
//                             var buyer_total_cr_type = $('#'+bmk).closest('.p2p-tbl-record-body').find('.crypto-total-coin-type').text().trim();
//                             var numericValue = parseFloat(buyer_total_cr_type.replace(/₹/g, ''));
//                             var formattedValue = numericValue.toFixed(2);
//                             var formattedBuyerTotalCrType = '₹' + formattedValue;
//                             var buyer_Crypto_type = $('#'+bmk).closest('.p2p-tbl-record-body').find('.buyer_Crypto_type').text().trim();
//                             var t_and_c = $('#'+bmk).closest('.p2p-tbl-record-body').find('input[name="terms_conditions"]').val();
//                             var buyerpaymentlimit = $('#'+bmk).closest('.p2p-tbl-record-body').find('input[name="timelimit"]').val();
//                             $.ajax({
//                                 type: 'POST',
//                                 url: '{{ route('getTotalAvailableCoinsInselectedCurrency') }}',
//                                 data: {
//                                     '_token': "{{ csrf_token() }}",
//                                     'ordervalue' : buyer_total_cr_value,
//                                     'currency_type' :buyer_cr_type,
//                                     'ads_id' : ads_id,
//                                 },
                               
//                                 success: function (data) {
//                                     console.log('data_2', data);
//                                     $('.sell_coin_p2p_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
//                                     const myButtonId = 'sell_bmk_'+id;
//                                     const myButton = $("#" + myButtonId);
//                                     myButton.attr("disabled", true);
//                                     setTimeout(function() {
//                                         myButton.attr("disabled", false);
                                        
//                                     }, 1000);
//                                     $('.sell-btn-id').attr('id',bmk);
//                                     $('.sell-btn-id').attr('data-id',bmk);
//                                     $('.sell-btn-id').attr('data-name',bmk);
//                                     // $('.sell_coin_p2p_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
//                                     $('#payment-method-content-left .buyer_name').html(buyer_name);
//                                     $('#payment-method-content-left .buyer_order_completion').html(buyer_order_completion);
//                                     $('#payment-method-content-left .buyer_cr_value').html('<p>'+ buyer_cr_value + buyer_cr_type+ '</p>');
//                                     $('#payment-method-content-left .buyer_cr_type').html(buyer_cr_type);
//                                     $('#payment-method-content-left .total-crypto-coin').html(buyer_total_cr_value);
//                                     $('#payment-method-content-left .crypto-coin-type').html(formattedBuyerTotalCrType);
//                                     var buyerpaymenttype = buyer_payment_type;
//                                     var paymentTypeHtml = '';
                                    
//                                     for (var i = 0; i < buyerpaymenttype.length; i++) {
//                                         paymentTypeHtml += '<span class="buyer_payment_type ' + buyerpaymenttype[i] + '">' + buyerpaymenttype[i] + '</span>';
                                        
//                                     }
//                                     $('#payment-method-content-left .buyer_p_type').html(paymentTypeHtml);
//                                     $('#payment-method-content-left .buyer_Crypto_type').html(buyer_Crypto_type);
//                                     $('#payment-method-content-right .Crypto_type').html(buyer_Crypto_type);
//                                     var conditions_object = countryparty_conditions;
//                                     var formatted_conditions = "";
                                    
//                                     for (var key in conditions_object) {
//                                         if (conditions_object.hasOwnProperty(key)) {
//                                             var condition = key + ": " + conditions_object[key];
//                                             var formatted_condition = condition.replace(/_/g, " ").replace(/([a-z])([A-Z])/g, "$1 $2");
//                                             formatted_conditions += '<div class="buy_modal_value w-100 flex-div fs-12"><div class="step-progress-highlight-point"></div><span class="" style="text-transform: capitalize;">' + formatted_condition + '</span></div>';
                                            
//                                         }
                                        
//                                     }
//                                     $('.buyer_countryparty_conditions').html(formatted_conditions);
//                                     $('.terms_and_conditions').html(terms_conditions);
//                                     $('.buyer_payment_timel_imit').html(timelimit);
//                                     if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === true){
//                                         $("#"+id).text('Sell');
                                        
//                                     };
                                   
//                                 },
                                
//                                 error: function(xhr, status, error) {
//                                     var erroJson = JSON.parse(xhr.responseText);
                                          
//                                 }
                                
//                             });
                            
//                         }
                        
//                     }
                    
//                 },
//                 error: function(xhr, status, error) {
//                     var erroJson = JSON.parse(xhr.responseText);
                    
//                 }
                
//             });
            
//         } else {
//             triggerAlert('Previous Order pending!', 'error');
//             const ifAuth =  <?php echo Auth::check() ? 'true' : 'false' ?>;
//             if(ifAuth == true) {
//                 const trader_id = 'Auth::user()->id';
//                 $.ajax({
//                     type: 'post',
//                     url: '{{ "/getOrderDetailbyId" }}',
//                     data: {
//                         '_token': "{{ csrf_token() }}",
//                         'orderId' : '<?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;',
//                         },
//                     success: function (data) {
//                             setTimeout(function(){
//                                 if(data.order_data.buyer_id == trader_id){
//                                     window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}';
                                    
//                                 }
//                                 if(data.order_data.seller_id == trader_id){
//                                     window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}';
                                    
//                                 }
                                
//                             }, 2500)
                            
//                         },
//                     error: function(xhr, status, error) {
//                             var erroJson = JSON.parse(xhr.responseText);
                            
//                         }
                    
//                 });
                
//             }
            
//         }
//     } else {
//         window.location.href = 'https://wealthmark.io/en/login';
        
//     }
    
// }

// New code for sell 08/06/2023

function sell_bmk(id){
    // $("#"+id).html("<span class='spinner-border spinner-border-sm' style='cursor: wait;'></span>");
    // setTimeout(function(){
    //     if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === true){
    //         $("#"+id).text('Sell');
            
    //     };
        
    // }, 2000);

    $('#addHiddenValues').html('')
    const ifAuth =  <?php echo Auth::check() ? 'true' : 'false' ?>;
    if(ifAuth == true) {
        if (parseInt(localStorage.getItem('timerValue'))  == 0){
            var buttonId = id;
            var number = buttonId.replace('sell_bmk_', '');
            var value = parseInt(number);
            
            var buyer_name =$('#'+id).closest('.p2p-tbl-record-body').find('.buyer_name').text().trim();  
            var buyer_order_completion = $('#'+id).closest('.p2p-tbl-record-body').find('.buyer_order_completion').text().trim();  
            var buyer_cr_value = $('#'+id).closest('.p2p-tbl-record-body').find('.buyer_cr_value').text().trim();
            var buyer_cr_type = $('#'+id).closest('.p2p-tbl-record-body').find('.buyer_cr_type').text().trim();  
            var buyer_total_cr_value = $('#'+id).closest('.p2p-tbl-record-body').find('.total-coin').text().trim();
            var buyer_total_cr_type = $('#'+id).closest('.p2p-tbl-record-body').find('.crypto-total-coin-type').text().trim();
            var numericValue = parseFloat(buyer_total_cr_type.replace(/₹/g, ''));
            var formattedValue = numericValue.toFixed(2);
            var formattedBuyerTotalCrType = '₹' + formattedValue;
            var buyer_Crypto_type = $('#'+id).closest('.p2p-tbl-record-body').find('.buyer_Crypto_type').text().trim();
            var t_and_c = $('#'+id).closest('.p2p-tbl-record-body').find('input[name="terms_conditions"]').val();
            var buyerpaymentlimit = $('#'+id).closest('.p2p-tbl-record-body').find('input[name="timelimit"]').val();
            
            $.ajax({
                type: 'POST',
                url: '{{ route('sellBmkPostById') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'orderId' : value,
                    'ordervalue' : buyer_total_cr_value,
                    'currency_type' :buyer_cr_type,
                },
                success: function (data) {
                    
                    if(data.order_data_by_ads == "0"){
                        var countryparty_conditions, timelimit, terms_conditions, buyer_payment_type, adsid;
                        var posttotalcrypto = data.ads_data.total_amount;
                        
                        if(data.AvailableCoins >= posttotalcrypto){
                            $('.sell_coin_p2p_modal').children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
                            var countryparty_conditions = data.countryparty_condition;
                            countryparty_conditions.CompletedKYC = (countryparty_conditions.CompletedKYC === '1') ? 'Yes' : 'No';
                            countryparty_conditions.registerd_account_day = countryparty_conditions.registerd_account_day + ' day';
                            countryparty_conditions.holding_coin = countryparty_conditions.holding_coin + ' Bmk coin';
                            var timelimit = data.ads_data.payment_time_limit;
                            var terms_conditions = data.ads_data.terms;
                            var buyer_payment_type = data.method_type;
                            var adsid= data.ads_data.adsid;
                            var ads_order_id= data.ads_data.id;
                            
                            const myButtonId = 'sell_bmk_'+id;
                            const myButton = $("#" + myButtonId);
                            myButton.attr("disabled", true);
                            
                            setTimeout(function() {
                                myButton.attr("disabled", false);
                                
                            }, 1000);
                            
                            $('.sell-btn-id').attr('id',id);
                            $('.sell-btn-id').attr('data-id',id);
                            $('.sell-btn-id').attr('data-name',id);
                            
                            $('#payment-method-content-left .buyer_name').html(buyer_name);
                            $('#payment-method-content-left .buyer_order_completion').html(buyer_order_completion);
                            $('#payment-method-content-left .buyer_cr_value').html('<p>'+ buyer_cr_value +' '+ buyer_cr_type+ '</p>');
                            $('#payment-method-content-left .buyer_cr_type').html(buyer_cr_type);
                            $('#payment-method-content-left .total-crypto-coin').html(buyer_total_cr_value);
                            $('#payment-method-content-left .crypto-coin-type').html(formattedBuyerTotalCrType);
                            
                            var buyerpaymenttype = buyer_payment_type;
                            var paymentTypeHtml = '';
                            
                            for (var i = 0; i < buyerpaymenttype.length; i++) {
                                paymentTypeHtml += '<span class="buyer_payment_type ' + buyerpaymenttype[i] + '">' + buyerpaymenttype[i] + '</span>';
                            
                            }
                            
                            $('#payment-method-content-left .buyer_p_type').html(paymentTypeHtml);
                            $('#payment-method-content-left .buyer_Crypto_type').html(buyer_Crypto_type);
                            $('#payment-method-content-right .Crypto_type').html(buyer_Crypto_type);
                            
                            var conditions_object = countryparty_conditions;
                            var formatted_conditions = "";
                            
                            for (var key in conditions_object) {
                                if (conditions_object.hasOwnProperty(key)) {
                                    var condition = key + ": " + conditions_object[key];
                                    var formatted_condition = condition.replace(/_/g, " ").replace(/([a-z])([A-Z])/g, "$1 $2");
                                    formatted_conditions += '<div class="buy_modal_value w-100 flex-div fs-12"><div class="step-progress-highlight-point"></div><span class="" style="text-transform: capitalize;">' + formatted_condition + '</span></div>';
                                    
                                }
                                
                            }
                            
                            $('.buyer_countryparty_conditions').html(formatted_conditions);
                            $('.terms_and_conditions').html(terms_conditions);
                            $('.buyer_payment_timel_imit').html(timelimit);
                            
                            // if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === true){
                            //     $("#"+id).text('Sell');
                            // };
                            
                        } else {
                            // if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === false){
                            //     $("#"+id).text('Sell');
                                
                            // };
                            triggerAlert('Insufficient coins in your wallet to sell', 'error');
                        }
                    } else {
                        // if($('.sell_coin_p2p_modal div').hasClass('custom-modal-bck-bg') === false){
                        //     $("#"+id).text('Sell');
                            
                        // };
                        $('#' + this.id + ' .span').text('on going');
                        triggerAlert('This order already on going!', 'error');
                        const myButtonId = 'Buy_bmk_'+id;
                        const myButton = $("#" + myButtonId);
                        myButton.attr("disabled", true);
                    }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    
                }
            });
            
        } else {
            triggerAlert('Previous Order pending!', 'error');
            const ifAuth =  <?php echo Auth::check() ? 'true' : 'false' ?>;
            if(ifAuth == true) {
                const trader_id = 'Auth::user()->id';
                $.ajax({
                    type: 'post',
                    url: '{{ "/getOrderDetailbyId" }}',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'orderId' : '<?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;',
                        
                    },
                    success: function (data) {
                        setTimeout(function(){
                            if(data.order_data.buyer_id == trader_id){
                                window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}';
                                
                            }
                            if(data.order_data.seller_id == trader_id){
                                window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}';
                                
                            }
                            
                        }, 2500)
                        
                    },
                    error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        
                    }
                    
                });
                
            }
            
        }
    } else {
        window.location.href = 'https://wealthmark.io/en/login';
        
    }
    
}
</script>
<script>
$(".confirmPay").click(function(){
    if (parseInt(localStorage.getItem('timerValue'))  == 0){
        var buttonId = this.id;
        var number = buttonId.replace('sell_bmk_', '');
        var value = parseInt(number);
        var adsid;
        $.ajax({
            type: 'POST',
                        url: '{{ route('getPostbyId') }}',
                        data: {
                            '_token': "{{ csrf_token() }}",
                             'postId' : value,
                            },
                            success: function (data) {

                               var adsid= data.ads_data.adsid;

                                processResponse(adsid);
                               
                            },
                            error: function(xhr, status, error) {
                                var erroJson = JSON.parse(xhr.responseText);
                                  
                            }
                        });
                
                    function processResponse(adsid) {
                         const value = adsid;
                         //const paymentMethodID = $('.select-payment').find('.selected div').attr('id');
                         const paymentMethodID = $('.select-payment').find('.selected span').text();
                        //console.log(paymentMethodID);
                         $.ajax({
                             
                             type: 'POST',
                             url: '{{  url(app()->getLocale()."/buyer_sell_request_accept") }}',
                             data: {
                               
                               '_token': "{{ csrf_token() }}",
                           
                               'id' : value,
                               'paymentMethodID' : paymentMethodID
                               
                             },
                             success: function (data) {
                                
                                location.href = '{{  url(app()->getLocale()."/users/seller-confirm-order") }}';
                                
                                
                             },
                             error: function(xhr, status, error) {
                                       
                                         var erroJson = JSON.parse(xhr.responseText);
                                         
                                    
                                       
                                     }
                           });
                    }      
             
             }else{
                 triggerAlert('Previous Order pending!', 'error');
                 const ifAuth =  <?php echo Auth::check() ? 'true' : 'false' ?>;
                 if(ifAuth == true){
                     const trader_id = 'Auth::user()->id';
                 }
                  $.ajax({
                         type: 'post',
                         url: '{{ "/getOrderDetailbyId" }}',
                         data: {
                                 '_token': "{{ csrf_token() }}",
                                 'orderId' : '<?php echo isset($_SESSION['orderid']) ? $_SESSION['orderid'] : 'null'; ?>;',
                        },
                         success: function (data) {
                         
                                
                                setTimeout(function(){ 
                                  if(data.order_data.buyer_id == trader_id){
                                                      window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}'; 
                                              }
                                              
                                              if(data.order_data.seller_id == trader_id){
                                                      window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}'; 
                                              }
                                    
                                }, 2500)
                             
                         },
                         error: function(xhr, status, error) {
                                   
                                     var erroJson = JSON.parse(xhr.responseText);
                                      triggerAlert('something went wrong!', 'error');
                                  
                                 }
                     });
                
              
             }
         
         });

$(".cancelPay").click(function(){
   

 const cancel_id = this.id;
     alert(cancel_id);
    $.ajax({
            
        type: 'POST',
        url: '{{  url(app()->getLocale()."/buyer_sell_request_accept") }}',
        data: {
              
            '_token': "{{ csrf_token() }}",
          
             'cancel_id' : cancel_id,
            },
            success: function (data) {
                   //alert();
                //window.location.reload();
                  const p = 'https://wealthmark.io/beta-dlp/en/user/confirmed-order-info';
        $("#my-div").load(p + " #my-div");
              
            },
            error: function(xhr, status, error) {
                      
                var erroJson = JSON.parse(xhr.responseText);
               // console.log(erroJson);
                      
            }
    });
   // location.reload();
});


  
</script>


</body>

</html>












































