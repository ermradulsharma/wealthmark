<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/payments.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
  @include('template.web_css')

   <style>


   .sidebar-nav{
      display:block;
  }




  </style>
    <style>
/*   .dashboard-card-body .nav-link{*/
/*    font-size: 16px;*/
/*}*/
/*.dashboard-card-body .nav-pills .nav-link.active{*/
/*    font-size: 16px;*/
/*}*/

/*.pay-method-text{*/
/*   color: #222222;*/
/*   font-size: 14px;*/
/*}*/
/*.pay-method-text:hover{*/
/*   color: #d5a419;*/
/*}*/
/*.pay-method-icon{*/
/*   box-sizing: border-box;*/
/*    margin: 0px 8px 0px 0px;*/
/*    min-width: 0px;*/
/*    width: 4px;*/
/*    height: 14px;*/
/*    border-radius: 4px;*/
/*    background: linear-gradient( 180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
/*    display: inline-block;*/
/*}*/

/*.form-control.no-border-field{*/
/*    padding: 0rem;*/
/*    border-top: none;*/
/*    border-left: none;*/
/*    border-right: none;*/
/*    border-radius: 0px;*/
/*}*/
/*.atoz-filter{*/
/*   background-color: #fff;*/
/*   padding: 2px;*/
/*   border-radius: 2px;*/
/*   transition: 0.1s;*/
/*   margin-right: 2px;*/
/*   color: gray;*/
/*   display: inline-block;*/
/*   font-size: 14px;*/
/*}*/
/*.atoz-filter:hover{*/
/*   background-color: #eee;*/
/*}*/
/*.atoz-filter.active{*/
/*   background: linear-gradient( 180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
/*   color: #fff;*/
/*}*/
/*@media  only screen and (max-width: 600px) {*/
/*   .pay-method-mobile{*/
/*      display: flex;*/
/*    flex-basis: 100%;*/
/*   }*/
/*   .pay-method-mobile p, .pay-method-mobile span{*/
/*      font-size: 14px;*/
/*   }*/
/*   .pay-method-mobile span{*/
/*      text-align: right;*/
/*      flex: 1 1 0%;*/
/*   }*/
/*}*/


/*                                       .css-paytm-icon{*/
/*                                        box-sizing: border-box;*/
/*                                        margin: 0px 8px 0px 0px;*/
/*                                        min-width: 0px;*/
/*                                        width: 4px;*/
/*                                        height: 14px;*/
/*                                        border-radius: 4px;*/
/*                                        background-color: rgb(11, 45, 110);*/
/*                                        float: left;*/
/*                                        }*/
/*                                        .css-paymentInner{*/
/*                                            box-sizing: border-box;*/
/*                                            margin: 0px;*/
/*                                            min-width: 0px;*/
/*                                            font-weight: 400;*/
/*                                            font-size: 14px;*/
/*                                            line-height: 20px;*/
/*                                            float: left;*/
/*                                        }*/

/*                                        .css-imps-icon{*/
/*                                        box-sizing: border-box;*/
/*                                            margin: 0px 8px 0px 0px;*/
/*                                            min-width: 0px;*/
/*                                            width: 4px;*/
/*                                            height: 14px;*/
/*                                            border-radius: 4px;*/
/*                                            background-color: rgb(245, 121, 31);*/
/*                                            float: left;*/
/*                                        }*/

/*                                        .css-upi-icon{*/
/*                                        box-sizing: border-box;*/
/*                                            margin: 0px 8px 0px 0px;*/
/*                                            min-width: 0px;*/
/*                                            width: 4px;*/
/*                                            height: 14px;*/
/*                                            border-radius: 4px;*/
/*                                            background-color: rgb(109, 110, 114);*/
/*                                            float: left;*/
/*                                        }*/

/*                                        .css-enbank-icon{*/
/*                                            box-sizing: border-box;*/
/*                                            margin: 0px 8px 0px 0px;*/
/*                                            min-width: 0px;*/
/*                                            width: 4px;*/
/*                                            height: 14px;*/
/*                                            border-radius: 4px;*/
/*                                            background-color: rgb(240, 185, 11);*/
/*                                            float: left;*/
/*                                        }*/

/*        .css-paymentmethods{*/
/*        box-sizing: border-box;*/
/*    margin: 0px;*/
/*    min-width: 0px;*/
/*    display: flex;*/
    /*background: rgb(255, 255, 255);*/
/*    height: 40px;*/
/*    padding: 0px 16px;*/
/*    cursor: pointer;*/
/*    -webkit-box-align: center;*/
/*    align-items: center;*/
/*        }*/

/*        #payMethod_confirmation_popup{*/
/*z-index: 9999;*/
/*display:none;            */
/*position: fixed;*/
/*top: 50%;*/
/*left: 50%;*/
/*transform: translate(-50%, -50%);*/
/*width: 50%;*/

/*        }*/

/* .payment_div svg{*/
/*           width: 27px;*/

/*   }*/
    /*.payment_div {
           margin: 15px;

   } */
/*   .payment_div .flex {*/
/*       display:flex;*/
/*   }*/

       /*css for 09-02-2023  start*/

/*      #payMethod_confirmation_popup {*/
/*            width: 100%;*/
/*            background-color: #0000004a;*/
/*            height:100vh;*/
/*            z-index: 9999999999;*/
/*        }*/
/*        #payMethod_confirmation_popup .modal-dialog {*/
/*            max-width: 384px;*/
/*            margin: 1.75rem auto;*/
/*            top: 30%;*/
/*        }*/
/*        .verify-account-para{*/
/*           line-height: 1.5;*/
/*        }*/
/*        .payment-toggle{*/
/*            float:right;*/
/*        }*/
/*        @media(max-width:768px){*/
/*            .payment-toggle{*/
/*                float:left;*/
/*                margin-top: 15px*/
/*            }*/
/*        }*/
/*        .dashboard-main {*/
/*    margin-top: 0px !important;*/
/*}*/
/*@media(min-width:768px){*/
/*        .add-payment-method-row .dropdown-menu {*/
/*        right: 15px;*/
/*        position: absolute;*/
/*        top: 40px;*/
/*        }*/
/*}*/
/*@media(max-width:768px){*/
/*        .add-payment-method-row .dropdown-menu {*/
/*            position: absolute;*/
/*            top: 65px;*/
/*            left: 13px;*/
/*            }*/
/*            .no-record-icon {*/
/*            height: 100px;*/
/*            margin-top: 100px;*/
/*            }*/
/*    }*/

/*.add-payment-method-row .dropdown-menu {*/
/*     border: 1px solid rgba(0,0,0,.15)!important;*/
/*}*/

/*span.dashboard-card-heading::before {*/
/*    content: '';*/
/*    border-left: 3px solid black;*/
/*    padding-right: 5px;*/
/*}*/
/*.card {*/
/*    border: 1px solid rgb(230, 232, 234);*/
/*    box-shadow: 0px 0px 1.5px 0px;*/
/*    border-radius: 0px;*/
/*}*/

/*.payment-more-option-container.payment-add-more-option:focus, .payment-add-more-option {*/
/*    line-height: 39px;*/
/*}*/
/*.payment-more-option-container .payment-add-more-option:focus, .payment-add-more-option:hover {*/
/*    background-color: #f5f5f5;*/
/*    line-height: 39px;*/
/*}*/
/*#payment-page-container{*/
/*    max-height:900px;*/
/*    overflow-y:scroll;*/
/*}*/
       /*css for 09-02-2023  start*/
</style>


</head>
<body>
    @include('template.web_menu')
    <div class="dashboard-main ">
        @include('template.sidebar')





                <div class="container-fluid p-0" id="payment-page-container">
                    <div class="bg-light-blue p-3 w-100">
                        <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                              <h2 class="fw-bold mb-0">Payment</h2>
                        </div>
                         <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                              <div class="row ifDeletedORnot"></div>
                 <div class="row">
                    <div class="col-12">
                       <div class="dashboard-card-body">
                             <ul class="tabs nav nav-pills mb-4 border-bottom" id="pills-tab" role="tablist">
                                <li class="nav-item " role="presentation">
                                    <button class="nav-link active ps-0" id="pills-ptop-tab" data-bs-toggle="pill" data-bs-target="#pills-ptop" type="button" role="tab" aria-controls="pills-ptop" aria-selected="true">P2P</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-buy-tab" data-bs-toggle="pill" data-bs-target="#pills-buy" type="button" role="tab" aria-controls="pills-buy" aria-selected="false">Buy Crypto</button>
                                </li>
                                <!--<li class="nav-item" role="presentation">-->
                                <!--      <button class="nav-link" id="pills-withdraw-tab" data-bs-toggle="pill" data-bs-target="#pills-withdraw" type="button" role="tab" aria-controls="pills-withdraw" aria-selected="false">Withdraw</button>-->
                                <!--</li>-->
                             </ul>
                             <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-ptop" role="tabpanel" aria-labelledby="pills-ptop-tab">
                                   <div class="row justify-content-between">
                                      <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12">
                                         <p class="para">
                                        P2P payment methods: When you sell cryptocurrencies, the payment method added will be displayed to buyer as options to accept payment, please ensure that the account owner’s name is consistent with your verified name on Wealthmark. You can add up to 20 payment methods.
                                         </p>
                                      </div>
                                      <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12 position-relative add-payment-method-row no-dropdown-arrow">





                                         <!--<a href="#" class="btn-theme-gray" data-bs-toggle="modal" data-bs-target="#payMethod"><span class="bi bi-plus-lg"></span> Add a payment method</a>-->
                                            <a href="javascript:void(0)" class="btn-yellow mt-3 dropdown-toggle payment-toggle">
                                                <span class="bi bi-plus-lg me-1"></span>
                                                <span> Add a payment method </span>
                                            </a>
                                            <ul class="dropdowns dropdown-menu payment-more-option-container" style="">
                                                @foreach($allpaymentMethod_list as $payment_list)
                                                    @if($payment_list->name != 'Gift-card')
                                                    <li><a class="dropdown-item" href="{{ url(app()->getLocale().'/user/payment/c2c/add/').'/'.$payment_list->name }}">
                                                        <div class="css-paymentmethods">
                                                            @if($payment_list->name == 'Bank-Transfer-INDIA')  <div class="css-enbank-icon"></div> @endif
                                                            @if($payment_list->name == 'UPI')  <div class="css-upi-icon"></div> @endif
                                                            @if($payment_list->name == 'IMPS')  <div class="css-imps-icon"></div> @endif
                                                            @if($payment_list->name == 'Paytm')  <div class="css-paytm-icon"></div> @endif
                                                            <div data-bn-type="text" class="css-paymentInner">{{ $payment_list->name }} </div>
                                                         </div>
                                                            </a>
                                                    </li>
                                                    @endif
                                                 @endforeach



                                                <li class="payment-add-more-option">
                                                    <!--<a class="dropdown-item" href="{{ url(app()->getLocale().'/user/payment/c2c/add/More') }}">-->
                                                        <a href="#" class=" dropdown-item" data-target-modal="payMethod">

                                                          <i class="bi bi-chevron-right"></i>More
                                                   </a>
                                                </li>
                                            </ul>
                <!--<div class="modal warning-modal-index fade" id="payMethod_confirmation_popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog" >-->
                 @include('user.payment.paymentMethodsTemplates.morePaymethods')
                     <div class="" id="payMethod_confirmation_popup" style="display:none" >
                <div class="modal-dialog">
                    <div class="modal-content pt-3 pb-3 p-3">
                        <div class="modal-header border-0">
                            <img class="warning-img" src="https://wealthmark.io/assets/img/warning.svg">
                        </div>
                        <h5 class="text-center text-dark">Verify your account</h5>
                        <h6 class="text-center text-dark"> Complete KYC & Verify Email & Phone</h6>
                        <div class="modal-body">
                            <p class="icon align-items-start">
                            <!--    <span class="text-dark"><i class="bi bi-dot h4"></i></span>  -->
                                <span class="text text-center verify-account-para">Your Email & Phone  must be verified and Your KYC must be complited by you for inorder to add payment methods. Please complete your KYC OR verify your account!</span>
                            </p>
                        </div>
                        <div class="row gx-2">
                            <div class="col-6">
                                <button type="" data-bs-dismiss="modal" class="btn btn-blue w-100 close_paymentPopup">Cancel</button>
                            </div>
                            <div class="col-6">
                                <a href="{{ (Auth::user()->account_type == 1) ? url(app()->getLocale().'/need-kyc') : ( (Auth::user()->account_type == 2) ? url(app()->getLocale().'/entity-verification') : '#' ) }} " class="btn btn-yellow w-100">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                                        </div>


                                        @if( count($ifpaymentMethod) >= 1)
                                        @foreach($ifpaymentMethod as $paymentmethod)
                                      <div class="col-12 mt-5" id="{{ $paymentmethod->id }}">
                                         <div class="card ">
                                            <div class="card-header dashboard-card-header bg-light-blue border-0">
                                               <span class="dashboard-card-heading">{{ $paymentmethod->method_type }}</span>
                                               <div class="ms-auto">
                                                  <a href="{{ url(app()->getLocale().'/user/payment/c2c/add/'.$paymentmethod->method_type)}}" class="me-3 btn-blue d-inline-block mb-1">
                                                  <span class="d-none d-sm-block"> Edit</span>
                                                      <span class="d-sm-none">  <i class="bi bi-pencil-square"></i> </span>

                                                  </a>
                                                  <a href="#" onClick="return confirm('Are You Sure ?'), delete_payment({{ $paymentmethod->id }})" class="payment-delete-btn btn-default d-inline-block mb-1">
                                                     <span class="d-none d-sm-block"> Delete</span>
                                                      <span class="d-sm-none"><i class="bi bi-trash"></i></span>
                                                      </a>
                                               </div>
                                            </div>
                                            <div class="card-body">
                                               <div class="row ">
                                                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                     <p class="mb-2 text-muted">{{ Str::title('Account holder name') }} </p>
                                                     <span>{{ Str::title($paymentmethod->account_holder)   }}</span>
                                                  </div>
                                                  <?php if($paymentmethod->account_number!=""){ ?>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                            <p class="mb-2 text-muted">{{ Str::title('Account no.') }}</p>
                                                            <span>{{ ($paymentmethod->account_number) ? $paymentmethod->account_number : 'N/A'  }}</span>
                                                        </div>
                                                  <?php } ?>
                                                  <?php if($paymentmethod->ifsc!=""){ ?>
                                                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                     <p class="mb-2 text-muted">{{ Str::title('IFSC code') }}</p>
                                                     <span>{{ ($paymentmethod->ifsc) ? $paymentmethod->ifsc : 'N/A'  }}</span>
                                                  </div>
                                                  <?php } ?>

                                                  <?php if($paymentmethod->ifsc!=""){ ?>
                                                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                     <p class="mb-2 text-muted">{{ Str::title('Account Type') }}</p>
                                                     <span>{{ ($paymentmethod->account_type) ? (Str::title($paymentmethod->account_type)) : 'N/A'  }}</span>
                                                  </div>
                                                  <?php } ?>

                                                  <?php if($paymentmethod->bank_name!=""){ ?>
                                                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                     <p class="mb-2 text-muted">{{ Str::title('Bank name') }}</p>
                                                     <span>{{ ($paymentmethod->bank_name) ? (Str::title($paymentmethod->bank_name)) : 'N/A'  }}</span>
                                                  </div>
                                                  <?php } ?>

                                                  <?php if($paymentmethod->bank_name!=""){ ?>
                                                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                     <p class="mb-2 text-muted">{{ Str::title('Account opening branch') }} </p>
                                                     <span>{{ ($paymentmethod->branch_name) ? (Str::title($paymentmethod->branch_name)) : $paymentmethod->bank_name  }}</span>
                                                  </div>
                                                  <?php } ?>
                                                   <?php if($paymentmethod->upi_Id!=""){ ?>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                         <p class="mb-2 text-muted">UPI</p>
                                                         <span>{{ ($paymentmethod->upi_Id ) ? $paymentmethod->upi_Id  : 'N/A' }}</span>
                                                          <!--<span>  </span>-->
                                                        </div>
                                                   <?php } ?>
                                                   <?php if($paymentmethod->qr_code!=""){ ?>
                                                   <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pay-method-mobile">
                                                     <p class="mb-2 text-muted">{{ Str::title(' QR Code') }}</p>
                                                     @if($paymentmethod->qr_code)
                                                     <span><img  class="img-thumbnail "   width="100px" src="{{ url('storage/app/'.$paymentmethod->qr_code) }}" alt="" title="" /></span>
                                                     @else
                                                     <span>N/A</span>
                                                     @endif
                                                  </div>
                                                  <?php } ?>
                                               </div>
                                            </div>
                                         </div>

                                      </div>
                                      <!--<div style="clear:both"></div>-->
                                      @endforeach

                                      <div class="account_activity_pagination mt-3">
                                        {!! $ifpaymentMethod->links('pagination::bootstrap-5') !!}
                                    </div>
                                        @else

                                      <div class="col-12 mt-5 text-center">
                                         <img src="{{ asset('assets/img/not-found-icons/no-payment-method.svg') }}" class="no-record-icon" alt="">
                                         <p class="mt-3 mb-2">You have not added any payment methods</p>
                                      </div>
                                        @endif
                                   </div>

                                </div>
                                <div class="tab-pane fade" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
                                      <div class="row justify-content-between">
                                         <div class="col-lg-8 col-md-7">
                                            <p class="para">
                                            Manage the payment method of your credit and debit card on the buy crypto page.
                                            </p>
                                         </div>

                                         <div class="col-12">
                                            <div class="text-center mt-5 py-5">
                                               <img src="{{ asset('assets/img/not-found-icons/no-card.svg') }}" class="no-record-icon" alt="">
                                               <p class="mt-3">You don't have any cards</p>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                <div class="tab-pane fade" id="pills-withdraw" role="tabpanel" aria-labelledby="pills-withdraw-tab">
                                   <div class="table-responsive">
                                      <table class="table table-hover table-bordered">
                                         <thead>
                                            <tr>
                                               <th scope="col">Bank Country</th>
                                               <th scope="col">Currency</th>
                                               <th scope="col">Bank Name</th>
                                               <th scope="col">Branch Code</th>
                                               <th scope="col">Account Number</th>
                                               <th scope="col">Account Status</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                            <tr>
                                               <td scope="row">Demo</td>
                                               <td>Demo</td>
                                               <td>Demo</td>
                                               <td>Demo</td>
                                               <td>Demo</td>
                                               <td>Demo</td>
                                            </tr>

                                         </tbody>
                                      </table>
                                   </div>

                                   <div class="col-12">
                                         <div class="text-center mt-5 py-5">
                                            <img src="{{ asset('assets/img/not-found-icons/no-card.svg') }}" class="no-record-icon" alt="">
                                            <p class="mt-3">You don't have any cards</p>
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
       <div class="modal warning-modal-index fade" id="payment_confirmationr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog" >
                <div class="modal-dialog">
                    <div class="modal-content pt-3 pb-3 p-3">
                        <div class="modal-header border-0">
                            <img class="warning-img" src="https://wealthmark.io/assets/img/warning.svg">
                        </div>
                        <h5 class="text-center text-dark">Are you sure you want to remove Binance/Google Authenticator?</h5>
                        <div class="modal-body">
                            <p class="icon align-items-start">
                                <span class="text-dark"><i class="bi bi-dot h4"></i></span>
                                <span class="text text-justify">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.
                                Two security verification methods are required for withdrawals and other actions. Using only one verification method will limit your withdrawals.</span>
                            </p>
                        </div>
                        <div class="row gx-2">
                            <div class="col-6">
                                <button type="" data-bs-dismiss="modal" class="btn-theme-light w-100">Cancel</button>
                            </div>
                            <div class="col-6">
                                <a href="{{ url(app()->getLocale().'/remove-google-authenticator')  }}" class="btn-theme w-100">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   @include('template.web_footer')


    <script src="{{ asset('assets/js/alert.js') }}"></script>

   <script>

  $("#filterPaymentMethod").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".payment-methods *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  </script>

   <script>


    $(".atoz-filter").on("click", function() {
         $("#filterPaymentMethod").val('');

        const pmn = [];
     var value2 = $(this).text();

        $(".payment-methods *").filter(function() {
            if( ($(this).text() != 'All') && ($(this).text().indexOf(value2) == 0)){
                pmn.push($(this).text());
            }

    });

   $(".payment-filter").html('');
    $.each(pmn, function(index, value){

            $(".payment-filter").append('<div class="col-6 mb-3 pay-method paymentfilter"><a href="'+'https://wealthmark.io/en/user/payment/c2c/add/'+ value+ '" class="pay-method-text "><span class="pay-method-icon"></span>'+value+'<span></span></a></div>');
        });
    pmn = [];
    });
    </script>
<script>


</script>
   <script>

            $('.dropdown-toggle.payment-toggle').click(function() {

            const user_id ="<?php echo Auth::user()->id ?>";
            const user_accountType = "<?php echo Auth::user()->account_type ?>";
              // alert(user_id+'/'+user_accountType);
             if(user_accountType == 1){
               // console.log(user_accountType);

                if( ("<?php echo Auth::user()->is_mail_verified ?>" == 1) && ("<?php echo Auth::user()->is_phone_verified ?>" == 1) &&  ("<?php echo Auth::user()->government_id_verified ?>" == 1 )){
                      $(".dropdown-toggle").next('.dropdowns').slideToggle();
                }else{
                    // alert('First verify your account first!');
                     $("#payMethod_confirmation_popup").css({'display' : 'block'});
                };
             }

             if(user_accountType == 2){
                // console.log(user_accountType);
                                                $.ajax({
                                     					type: "GET",

                                                         url : "<?php echo url(app()->getLocale().'/is-entity-verified/');  ?>"+'/'+user_id,

                                     					success: function(data) {
                                                           //  triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');



                                                            if(data == 0){
                                                                // alert('First verify your entity account first!');


                                                                 $(".dropdown-toggle").next('.dropdowns').slideToggle();

                                                                // $("#payMethod_confirmation_popup").css({'display' : 'block'});
                                                            }else{
                                                                //console.log('entity verified');
                                                                 $(".dropdown-toggle").next('.dropdowns').slideToggle();
                                                            }

                                                         },
                                                });

            };


        $(document).click(function(e){
            var target = e.target;
            if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')){
                  $('.dropdowns').slideUp();

              }
        });
    });

     $(".close_paymentPopup").click(function(){
          $("#payMethod_confirmation_popup").css({'display' : 'none'});
     })


     function delete_payment(id){
         const ID = id;
         //console.log(ID);

        $.ajax({
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') ,

             },
           type: "POST",
           url: '<?php echo url(app()->getLocale().'/user/payment/c2c/delete/paymentMethods') ?>',

           data: {
                'id' : ID,
           },
           success: function(data){
                            if(data.success == 200){
                                  //console.log(data.success);
                             triggerAlert('Payment method deleted successfully!', 'success');

                        //     $('.ifDeletedORnot').addClass('alert-success');
                        //     $(".ifDeletedORnot").html('Submitted Deleted!');
                              $("#"+data.deletedMethodId).html('');


                        //   setTimeout( function(){
                        //   $(".ifDeletedORnot").html('');
                        //     $('.ifDeletedORnot').removeClass('alert-success');
                        //      }, 2000);

                             }
                    },
           error: function(xhr, status, error){
                var erroJson = JSON.parse(xhr.responseText);
                 //alert(erroJson.error);
               //  var Deletion_error = erroJson.error;
                   triggerAlert('Payment method cannot be deleted!.', 'error');
                //  $('.ifDeletedORnot').addClass('alert-danger');
                //  $(".ifDeletedORnot").html('Something Wrong!');

                //  setTimeout( function(){
                //           $(".ifDeletedORnot").html('');
                //             $('.ifDeletedORnot').removeClass('alert-danger');
                //              }, 2000);
           },



        });

     }
   </script>

</body>
</html>
