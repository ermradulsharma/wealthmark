
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <title>Wealth Mark | Select Payment Method</title>
      @include('template.web_css')
       <link rel="stylesheet" href="{{ asset('assets/css/confirm-order.css') }}">
      <style>
          .wm-dropdown-optn-item-inner {
                white-space: normal;
          }
          i.bi.bi-x-lg {
                color: red;
            }



            span.fs-12.appeal_count_message {
            display: flex;
            justify-content: end;
        }


        .apeal-basic-info div.text {
            font-size: 15px;
            margin-bottom:0px;
        }

 /*==============this page onle=============================*/
        .chat-support{
            display:none;
        }
    /*==============this page onle=============================*/

</style>

   </head>
   <body class="bg-white">
      @include('template.web_menu')

    <section class="bg-light-blue py-4 shadow-sm">
         <div class="container">
            <div class="row">

                    <div class="col-9">
                  <div class="d-md-flex justify-content-between align-items-center if-order-cancel">
                     <div class="">
                        <div class="title  mb-1" id="my-div">
                            @if($orderStatus==0)
                                Order Created
                            @elseif($orderStatus==4 )
                                System Cancelled
                            @elseif($orderStatus==1 && $get_order_data->buyer_confirmation_status != 1 && $get_order_data->seller_confirmation_status != 1)
                                Order Accepted
                            @elseif($orderStatus==2)
                                Reciver Cancelled Order
                            @elseif($get_order_data->buyer_confirmation_status == 1 && $orderStatus==1 && $get_order_data->seller_confirmation_status != 1)
                                Payment Released
                            @elseif($get_order_data->buyer_confirmation_status != 1 && $orderStatus==1 && $get_order_data->seller_confirmation_status == 1)
                                Asset Released
                            @elseif($get_order_data->buyer_confirmation_status == 1 && $orderStatus==1 && $get_order_data->seller_confirmation_status == 1)
                                Order Completed
                            @elseif($orderStatus==3)
                                You have cancelled Order
                            @endif
                           <i class="bi bi-info-circle-fill ms-1"></i>
                        </div>
                        <span>
                            95% of the Seller's order have been completed within
                        </span>
                     </div>
                    <div class="">
                        <div class="order_no">
                           <span>Order number : </span>
                           <span><?php echo $get_order_data->order_id; ?></span>
                           <span><i class="bi bi-info-circle-fill"></i></span>
                        </div>
                        <div class="time_created">
                           <span>Time Created : </span>
                           <span> {{ App\Http\Controllers\HomeController::fetchDateFromSQL($get_order_data->created_at) }} <?php // echo $get_order_data->created_at; ?></span>
                        </div>
                     </div>
                  </div>
                  </div>
                    <div class="col-3">
                        <div class="timer-div-section">
                            <div class="pie degree">
                            <span class="block"></span>
                            <span id="timer" style="color:black !important;z-index:9999;">0</span>
                        </div>
                      </div>
                    </div>
               </div>
            </div>

      </section>
    <section class="inner-page authentication-step pb-0">
            <div class="container" id="order-status">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <ol class="steps">
                            <li id="step-1" class="step is-active" data-step="1">
                             <span> Order Pending </span>
                            </li>

                            <li id="step-2" class="step" data-step="2">
                            <span>  Order Accepted </span>
                            </li>

                            <li id="step-3" class="step" data-step="3">
                             <span> Payment Released </span>
                            </li>

                            <li id="step-4" class="step" data-step="4">
                                <span>  Asset Released</span>
                            </li>

                            <li id="step-5" class="step" data-step="5">
                              <span>  Order Completed </span>
                            </li>



                        </ol>
                    </div>
                </div>
            </div>
        </section>

    <!-- Confirm order info page code start-->
    <section>
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                    <!--=====================================================    -->
                        <div id="my-div1">
                            <div class="bg-light-theme rounded order-noti-txt">
                                <h5 class="mb-2">Transfer payment to Seller</h5>
                                <span>You need to leave the Wealthmark website and pay with the selected payment platfor. Meanwhile, Wealthmark will keep the crypto tin custody. Wealthmark only supports real-name verified payment methods. Upon successful payment to the seller, go back to the Wealthmark website and click the "Transferred, notify seller" button. </span>

                            </div>
                             @if(!empty($seller_details) && $get_order_data->order_status==1)
                               <div class="ordered-user-info">
                                   <div class="bg-white p-3">
                                    <h5 class="fs-14">
                                        <span><?php echo $seller_details->first_name; ?></span>
                                        <span class="fs-12">
                                            <span class="bg-light-theme p-2 d-inline-block rounded"> Verified User </span>
                                            <a data-bs-toggle="modal" data-bs-target="#reportModal" class="ms-2 text-warning text-decoration-underline">Report</a>
                                        </span>
                                    </h5>

                                  <div class="h-divider mt-3 mb-2"></div>

                                  <div class="d-flex justify-content-between">
                                     <div class="fs-14">
                                         <p class="fw-bold"> 30d Trades</p>
                                         <p class="fw-bold"> 581  </p>
                                     </div>
                                     <div class="fs-14">
                                         <p class="fw-bold">30d Completion Rate</p>
                                         <p class="fw-bold">96.67%</p>
                                     </div>
                                  </div>
                                  </div>
                               </div>
                             @endif
                        </div>
                    <!--=====================================================    -->





                    <div class="order-confirm-left-block">
                        <!--==========================order quantity and price===========================    -->
                            <div class="order-confirm-info-txt mt-3  shadow-sm p-3">
                         <h5>Confirm Order Info</h5>

                         <div class="h-divider mb-3"></div>

                         <div class="Confirm_Order_Info">
                             <div class="block">
                                 <div class="heading">Amount</div>
                                 <span class="value">
                                    <?php echo $get_order_data->domestic_currency_value; $currencies=  App\Models\currencies::where('id', $get_order_data->domestic_currency_type)->first(); echo $currencies->name;?>
                                </span>
                             </div>
                             <div class="block">
                                 <div class="heading">Per Coin Price</div>
                                 <span class="value">
                                    <?php echo $get_order_data->crypto_current_value; echo $get_order_data->crypto_type;?>
                                </span>
                             </div>
                             <div class="block">
                                 <div class="heading">Quntity</div>
                                <span class="value">
                                   <?php echo $get_order_data->total_crypto_value; echo $get_order_data->crypto_type;?>
                                </span>
                             </div>
                         </div>
                        </div>
                       <!--==========================order quantity and price===========================    -->

                            <div class="order-confirm-detail mt-3" id="my-div4">
                          @if(!empty($seller_details) && $get_order_data->order_status==1)


                          <div class="order-confirm-inner-block">
                            <h6>Transfer the fund to the seller's account provided below &nbsp;
                                <small class="text-warning">
                                    <i class="bi bi-info-circle-fill"></i>
                                    (Wealthmark only supports real-name verified payment methods).
                                </small>
                            </h6>

                            <div class="h-divider mt-3 mb-3"></div>

                             @php
                                if(!empty($getseller_bank_details)){


                                $detail = json_decode($getseller_bank_details->payment_account_details_for_seller);
                                @endphp

                                @if($detail->method_type != 'UPI')
                                <!--====================if payment method not UPI==================-->
                                    <table class="table table-bordered vertical-top mob-responsive-tbl">
                                        <tr>
                                            <td colspan="2" data-label="Payment Method Type">
                                                 <div class="tbl-label mb-2 bg-light-blue p-2">Payment Method Type</div>
                                               <div class="">{{$detail->method_type}}</div>
                                            </td>
                                            <td colspan="2" data-label="Account Holder Name">
                                                <div class="tbl-label mb-2 bg-light-blue p-2">Account Holder Name</div>
                                                <div class="value">{{ ($detail->account_holder) ? $detail->account_holder : 'N/A'}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Account No">

                                                  <div class="tbl-label mb-2 bg-light-blue p-2">Account No</div>
                                                <div class="value">{{ ($detail->account_number) ? $detail->account_number : 'N/A'}} </div>
                                            </td>
                                            <td data-label="IFSC Code">

                                                <div class="tbl-label mb-2 bg-light-blue p-2">IFSC Code</div>
                                                <div class="value">{{ ($detail->ifsc) ? $detail->ifsc : 'N/A'}}  </div>
                                            </td>
                                            <td data-label="Account Type">

                                                 <div class="tbl-label mb-2 bg-light-blue p-2">Account Type</div>
                                                <div class="value">{{ ($detail->account_type) ? $detail->account_type : 'N/A'}}  </div>
                                            </td>
                                            <td data-label="Bank Name">

                                                  <div class="tbl-label mb-2 bg-light-blue p-2">Bank Name</div>
                                                <div class="value">{{ ($detail->bank_name) ? $detail->bank_name : 'N/A'}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Branch">

                                                 <div class="tbl-label mb-2 bg-light-blue p-2">Account Opening Branch</div>
                                                <div class="value"> {{ ($detail->branch_name) ? $detail->branch_name : 'N/A'}}  </div>
                                            </td>
                                            <td data-label="SWIFT Code">

                                                 <div class="tbl-label mb-2 bg-light-blue p-2">SWIFT Code</div>
                                                <div class="value">{{ ($detail->swift_code) ? $detail->swift_code : 'N/A'}} </div>
                                            </td>
                                            <td data-label="UPI ID">

                                                  <div class="tbl-label mb-2 bg-light-blue p-2">UPI ID</div>
                                                <div class="value">{{ ($detail->upi_Id) ? $detail->upi_Id : 'N/A'}} </div>
                                            </td>
                                            <td data-label="QR COde">
                                                <div class="tbl-label mb-2 bg-light-blue p-2 bg-light-blue p-2">QR COde</div>


                                                  <div class="value">
                                                      @if($detail->qr_code)
                                                      <img class="img-thumbnail " width="100px" src="{{url('storage/app/').'/'.$detail->qr_code }}" alt="" title="">
                                                      @else
                                                        N/A
                                                      @endif
                                                      </div>

                                            </td>
                                        </tr>
                                    </table>
                                 <!--====================if payment method not UPI==================-->
                                @else
                                   <!--====================if payment method  UPI==================-->
                                    <div>

                                      <table class="table table-bordered mob-responsive-tbl">
                                        <tr>
                                            <td class="show-max-600">
                                            <div class="tbl-label">   Payment Methods </div>
                                                </td>
                                            <td data-label="Payment Methods">
                                                <div class="buyer_payment_type-2">{{$detail->method_type}}</div>
                                            </td>
                                            <td rowspan="3" data-label="QR COde" class="text-center">
                                                @if($detail->qr_code)
                                                    <div class="tbl-label bg-whitesmoke text-center p-2 mb-2">QR COde</div>
                                                    <div class="text text-center">
                                                        @if($detail->qr_code)
                                                            <img class="img-thumbnail " width="100px" src="{{url('storage/app/').'/'.$detail->qr_code }}" alt="" title="">
                                                        @else
                                                            N/A
                                                        @endif
                                                    </div>
                                                @endif
                                            </td>
                                          </tr>
                                          <tr>
                                               <td class="show-max-600"> <span class="tbl-label">UPI ID</span></td>
                                               <td data-label="UPI ID"><div class="fs-14">{{ ($detail->account_holder) ? $detail->account_holder : 'N/A'}}</div></td>
                                          </tr>
                                          <tr>
                                              <td class="show-max-600"> <span class="tbl-label">Account Holder Name</span></td>
                                              <td data-label="Account Holder Name"> <div class="fs-14">{{ ($detail->upi_Id) ? $detail->upi_Id : 'N/A'}} </div></td>
                                          </tr>

                                      </table>

                                  </div>
                                    <!--====================if payment method  UPI==================-->
                                @endif
                                  @php
                                 }
                               @endphp






                         </div>
                         @endif
                      </div>



                            <div class="transferred-notify-seller mt-3" id="my-div3">
                                @if(!empty($seller_details) && $get_order_data->order_status==1 && ($get_order_data->buyer_confirmation_status !=1 && $get_order_data->seller_confirmation_status !=1))
                                    <h5 class="fs-14">After transferring the funds. click on the "Transferred, notify seller" button.</h5>
                                    <div class="h-divider mb-3"></div>
                                    <div class="transferred-notify-action-row mb-3">
                                        <a class="btn-yellow shadow-none d-inline-block me-3 mb-2" data-bs-toggle="modal" data-bs-target="#Notify_Seller_modal">Transferred, Notify Seller</a>
                                        <a class="btn-red text-white cancel-order-btn" data-bs-toggle="modal" data-bs-target="#Order-cancel" >Cancel Order</a>
                                    </div>
                                @else

                                @if($get_order_data->order_status==0 && $get_order_data->seller_id !=1 && $get_order_data->buyer_confirmation_status !=1 && $get_order_data->seller_confirmation_status !=1)
                                    <h5>If You want to cancel this order. click on the "Cancel Order" button.</h5>
                                    <div class="transferred-notify-action-row">
                                        <a class="btn btn-danger text-white cancel-order-btn" data-bs-toggle="modal" data-bs-target="#Order-cancel" >Cancel Order</a>
                                    </div>
                                @elseif($get_order_data->order_status==2 && $get_order_data->seller_id !='')

                                    <h5>Reciver canceled this order.</h5>

                                @elseif($get_order_data->order_status==3)

                                    <h5>You have already cancel this order.</h5>

                                @elseif(($get_order_data->order_status==2 || $get_order_data->order_status ==3) && $get_order_data->seller_confirmation_status !=1)

                                        <h5>If You want to cancel this order. click on the "Cancel Order" button.</h5>
                                        <div class="transferred-notify-action-row">
                                            <a class="btn btn-blue text-white cancel-order-btn" id="confirm_for_appeal" data-target-modal="appeal_upld_docs">Appeal Now</a>
                                        </div>
                                @elseif($get_order_data->order_status==1 && $get_order_data->buyer_confirmation_status ==1 && $get_order_data->seller_confirmation_status ==1)
                                          <div class="transferred-notify-action-row">
                                           <a class="btn btn-yellow text-white" href="{{ url(app()->getLocale().'/user/dashboard') }}">Go to Dashboard</a>
                                           </div>
                                @endif
                             @endif
                          </div>

                        <!--================Appeal==================================-->
                                <div class="bg-white" id="appeal_pending">
                                <div class="hide w-100" >
             <div class="row bg-white" style="padding:30px">
                 <div class="col-md-12 col-sm-12">
                     <h3>Appeal Pending</h3>
                     <div class="d-sm-flex align-items-center justify-content-between">
                     <p class="fs-14">Pending response from respondent </p>
                     <span class="fs-14">
                         Time Remaining : <span class="yellow-text" id=""> 10 : 00</span>
                     </span>
                     </div>

                     <div class="">
                         <ol class="fs-12 mt-3">
                             <li class="mb-2"><span class="me-2"></span> If both parties have reached an agreement. You can <b>cancel the appeal </b> and proceed to complete the trade.</li>
                             <li class="mb-2"><span class="me-2"></span> If complainant did not respond in time . CS will get involved and arbitrate.</li>
                             <li class="mb-2"><span class="me-2"></span> To <a href="javascript:void(0)" class="yellow-text">provide more infomation </a>, please Provide more info. Info provided by both users and CS can be found in "Appeal progress" </li>
                         </ol>
                         <a href="#" class="btn btn-default cancel_appeal" >
                             Cancel the Appeal
                         </a>

                         <div class="bg-light-blue pt-1 mt-2 mb-2"></div>
                         <a href="#">
                          <div class="d-flex align-items-center justify-content-between">
                     <p class="fs-6">Appeal Progress </p>
                     <span class="fs-14 d-flex align-items-center">
                         <span class="me-4 text-success line-height-10"> <i class="fs-1 bi bi-dot"></i></span>
                         <i class=" bi bi-chevron-right"></i>
                     </span>
                     </div>
                     </a>

                         <div class="bg-light-blue pt-1 mt-2 mb-2"></div>
                     </div>
                 </div>

             </div>
         </div>

                        <!--===================Appeal===============================-->
                </div>
                    </div>

                 </div>


            <!--==================================chat box ========================================================-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="wm-chatbox bg-light-blue p-3">
                            <div class="chat-box">
                                <div class="header" id="my-div2">
                                    <div class="avatar-wrapper avatar-big">
                                        @if(!empty($seller_details))
                                            <img src="{{  asset('assets/img/country-flag/').'/'.$seller_details->country_flag }} " alt="avatar" />

                                        @endif
                                    </div>
                                    <span class="name ">
                                        @if(!empty($seller_details))
                                            <?php echo $seller_details->first_name; ?> <div class="fs-12">@if(Cache::has('user-is-online-' . $seller_details->id))<span class="text-green">Online</span>@else<span class="text-red">Offline</span>@endif</div>
                                        @elseif(empty($seller_details) && $get_order_data->order_status==0 )
                                            Pending
                                        @elseif($get_order_data->order_status==4 )
                                            System Cancelled
                                        @elseif($get_order_data->order_status==3 )
                                            You have cancel
                                        @endif
                                    </span>
                                    <!--<span class="options">-->
                                    <!--    <i class="bi bi-three-dots"></i>-->
                                    <!--</span>-->
                                </div>

                                <div id="chat_history" class="chat-room scrollbar-style"></div>
                                <div id="chat_area">

    			                </div>
                                <!--<div id="chat_div">-->
                                <!--    <div class="chat-room scrollbar-style">-->
                                <!--        <input type="hidden" class="btn btn-info btn-xs start_chat" data-touserid="@if(!empty($seller_details)){{$seller_details->id}}@else @endif" data-tousername="@if(!empty($seller_details)){{$seller_details->id}}@else @endif" />-->
                                <!--        <div class="chat_history" data-touserid="@if(!empty($seller_details)){{$seller_details->id}}@else @endif" id="@if(!empty($seller_details))chat_history_{{$seller_details->id}}@else chat_history @endif">-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="type-area">-->
                                <!--        <div id="chat_img" contenteditable class="input-wrapper img hide" >-->
                                <!--        </div>-->

                                <!--        <input type="text" name="@if(!empty($seller_details))chat_message_{{$seller_details->id}}@else chat_message @endif" id="@if(!empty($seller_details))chat_message_{{$seller_details->id}}@else chat_message @endif" class="form-control chat_message border-0" placeholder="Type messages here..."/>-->
                                <!--        <span class="button-add position-relative">-->

                                <!--            <div class="image_upload">-->
                                <!--                <form id="uploadImage" method="post" action="{{ route('upload-image') }}">  -->
                                <!--                    <i class="bi bi-paperclip text-white bg-dark-blue rounded-circle p-1"></i>-->
                                <!--                    <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png, .jpeg" class="chat-file-ulp">-->
                                <!--                </form>-->
                                <!--            </div>-->
                                <!--        </span>-->
                                <!--        <button type="button" name="send_chat" id="@if(!empty($seller_details)){{$seller_details->id}}@else @endif" class="button-send send_chat" > <i class="bi bi-send"></i> </button>-->
                                <!--    </div>-->
                                <!--</div>-->


                                 </div>
                        </div>
                    </div>
            <!--==================================chat box ========================================================-->
                </div>
            </div>
        </section>

      <div class="modal fade" id="reportModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="reportModalLabel">Report</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body scrollbar-style">
                  <div class="bg-light-blue p-2 fs-14">
                     <i class="bi bi-info-circle-fill"></i>
                     <span>Malicious reports will cause an account freeze.</span>
                  </div>
                  <div class="form-floating report-reason-block my-3">

                     <select class="form-control">
                        <option>Please select report reason </option>
                        <option>Reason 1</option>
                        <option>Reason 2</option>
                     </select>
                      <label>Report Reason</label>
                  </div>
                  <div class="form-floating user-email-block my-3">
                     <input type="text" class="form-control" placeholder="Enter email address"/>
                      <label>Your Email</label>
                  </div>
                  <div class="form-floating user-email-block my-3">
                     <textarea class="form-control" rows="+4" placeholder="Please provide as much details as possible."></textarea>
                     <label>Description</label>
                     <small class="typed-word-counter d-flex justify-content-end">0/500</small>
                  </div>
                  <div class="upload-proof-block my-3">
                     <label>Upload Proof</label>
                     <div class="text-muted fs-14 mt-1 mb-3">Screenshots or video/audio recordings of payment and communication data should not exceed a total of 5 files with total size of 50 MB. Supported file formats include jptg. jpeg, png, mp4, avi,rm,rmvb.mov.wmv.</div>
                     <input type="file" class="form-control"/>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-blue shadow" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-yellow shadow">Submit</button>
               </div>
            </div>
         </div>
      </div>


    <div class="modal fade" id="Notify_Seller_modal" tabindex="-1" aria-labelledby="Notify_Seller_modalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <form id="buyer_confirmationForm">
            <div class="modal-content">
               <div class="modal-header">

                          <h5 class="modal-title" >Payment Confirmation</h5>

                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>



               </div>
               <div class="modal-body">
                  <span class="payment_proof_spinner"></span>
                  <div class="payment-confirmation-modal" >
                     <div class="confirm-payment-block mb-3">
                        <h6>  1) Confirm Payment *</h6>

                        <ul class="ul-list">
                            <li class="fs-14 align-items-center">
                                <span>
                                    <i class="bi bi-check me-2"></i>
                                </span>
                                <span>You must leave Wealthmark's platform to complete the transfer yourself. Wealthmark will not automatically tranfer the payment on your behalf.</span>
                            </li>
                            <li class="fs-14 text-red align-items-center">
                                <span>
                                     <i class="bi bi-x text-red me-2"></i>
                                </span>
                                <span>Do not click on the "Transferred, notify seller" button without first making the payment. Doing so without making the payment first, may cause your account to be suspended. Please note tht the platform reserves the right to seek damages.</span>
                            </li>
                        </ul>


                      <div class="flex-div bg-light-blue p-2">
                          <input type="checkbox" name="checkbox" id="myCheckbox" class="me-2"/>
                          <label class="cursor-pointer" for="myCheckbox">I have read and understood the above information.</label>
                      </div>



                     </div>

                    <div class="h-divider"></div>


                     <div class="upload-proof-block mt-3 mb-3">
                        <h6> 2) Upload Proof of Payment *</h6>
                        <ul class="ul-list">
                            <li class="fs-14 align-items-center">
                                <span>Upload and send at least 1 proof of payment to the seller. Supported file formats include jpg, jpeg, png</span>
                            </li>
                        </ul>
                     </div>
                     <input type="file" name="file" class="form-control mb-3"/>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-blue shadow" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" id="confirmButton" class="btn btn-yellow shadow" disabled>Confirm Payment</button>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
               </div>
            </div>
            </form>
         </div>
      </div>
    <section class="bg-light-blue">
          <div class="container">
               <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" {{ isset($_SESSION['buyer_confirmation_status']) ? "style=display:block" : "style=display:block"}}>


                   <!--<div class="bg-white py-4 rounded px-4 mb-3 if_paymentIssue"  >-->
                   <!--         <a class="fs-14 text-dark d-inline-block mb-3" data-bs-toggle="modal" data-bs-target="#have-a-question" >Have A Question</a> &nbsp;&nbsp;-->
                   <!--         <a class="yellow-text mb-3"> | &nbsp;&nbsp;</a>-->
                   <!--         <a class="fs-14 text-dark d-inline-block mb-3" data-bs-toggle="modal" data-bs-target="#paid-order-cancelled">I paid but the order has been cancelled</a>-->
                   <!--</div>-->

                   <!--order completed 2(two) sections start-->
                   <div class="bg-white py-4 rounded px-4 mb-3">
                       <h5>Preferred Investment Method</h5>

                       <div class="h-divider mb-4"></div>

                       <a href="javascript:void(0)" class="btn-default border-0 shadow-sm d-inline-flex me-4 align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#have-a-question">
                            <div class="method-name me-3">
                                  Have A Question
                            </div>
                            <i class="bi bi-arrow-right"></i>
                       </a>

                       <a href="javascript:void(0)" class="btn-yellow border-0 d-inline-flex me-4 align-items-center" data-bs-toggle="modal" data-bs-target="#paid-order-cancelled">
                            <div class="method-name me-3">
                                 <!--I paid but the order has been cancelled-->
                                 <span>Appeal</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                       </a>





                   </div>



                   <div class="trading-experiance mt-4 mb-3" id="trading-experience">
                           @if( $get_order_data->buyer_confirmation_status == 1 && $get_order_data->seller_confirmation_status == 1)
                       <h5>How was your trading experience ?</h5>
                        <div class="trading-experience-block mt-3">

                            <button type="button" id="PositiveRating" onclick="orderrating(this.id)" class="PositiveRating exp-1 border border-1 p-2 text-secondary trading-experience " > <i class="bi bi-hand-thumbs-up"></i> Positive</button>
                            <button type="button" id="NegativeRating" onclick="orderrating(this.id)" class=" NegativeRating exp-2 border border-1 p-2 text-secondary trading-experience  "> <i class="bi bi-hand-thumbs-down"></i> Negative</button>
                             <button type="button" onclick="deleteRating('{{ $get_order_data->order_id }}')" class="deleterating exp-2 border border-1 p-2 deleterating"><i class="bi bi-trash"></i></button>
                        </div>
                        @endif
                   </div>
                   <!--order completed 2(two) sections end-->


                </div>

             </div>
          </div>
      </section>

    @include('web.p2pTrading_template.templateOrderFaq')


    @include('web.p2pTrading_template.templateAppealSection')
    @include('web.p2pTrading_template.templateOrderCancel')
    @include('web.p2pTrading_template.templatePaidOrderCancelled')


    @include('web.p2pTrading_template.templateHaveAquestion')
    @include('web.p2pTrading_template.templateOtherReasonCancelOrder')









    <!------------ // appeal on paid order cancel ---->



      <!--ORDER CANCEL PAGE CODE END-->


     <div class="chatbox-mob-btn">
        <a href="javascript:void(0)">
            <div class="contact_icon">
                <i class="bi-chat-dots-fill my-float"></i>
            </div>
        </a>
        <p class="text_icon">Talk to us?</p>
    </div>

<div class="bg-overlay hide"></div>




      @include('template.country_language')
      @include('template.web_footer')

    <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
    <!--<script src="{{ asset('assets/js/emoji/emojiPicker.js') }}"></script> -->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
    $(".chatbox-mob-btn").click(function(){
        $('.bg-overlay').toggleClass("hide");
        $(this).find('.bi-chat-dots-fill').toggleClass('bi bi-x')
        $('.wm-chatbox').parent().toggleClass("wm-chatbox-mobile");
        $("body").toggleClass("overflow-hidden");
        $('.chatbox-mob-btn .text_icon').toggleClass('hide');
    });

</script>

    <script> // this script related to appeal functionality
    function openAppeal_stepOne(){
            $("#paid-order-cancelled").modal('hide');
            var e = $('.demo_1 .hide').addClass('custom-modal-bck-bg');
            e.removeClass('hide');
         }

    $("#tips_one_Ok").click(function (){
             // alert();

             $('#tips-2').removeClass('d-none');
             $('#tips-1').addClass('d-none');
    })

    $("#confirm_for_appeal").click(function (){
           //  alert();


            $('#tips-1').removeClass('d-none');
            $('#tips-2').addClass('d-none');


            var e = $('.demo_1 .custom-modal-bck-bg').addClass('hide');
            e.removeClass('custom-modal-bck-bg');

            var e = $('.appeal_upld_docs .hide').addClass('custom-modal-bck-bg');
            e.removeClass('hide');
    })

    $("#file_appeal").click(function (){
            // alert();
            var e = $('.appeal_upld_docs .custom-modal-bck-bg').addClass('hide');
            e.removeClass('custom-modal-bck-bg');


            var e = $('#appeal_pending .hide').removeClass('hide');
            $('#my-div3').addClass('hide')
            //e.removeClass('hide');
    })
    $(".cancel_appeal").click(function (){

            var e = $('#appeal_pending .custom-modal-bck-bg').addClass('hide');
            e.removeClass('custom-modal-bck-bg');
    })

</script>
    <script>

         $(".pg-option").click(function () {
        // alert();
         $(this).addClass("active");
         $(this).children(".pg-selected").attr("src","{{  asset('/assets/img/wm-card_tick.svg') }}");
         $(this).siblings(".pg-option").removeClass("active");
         $(this).siblings(".pg-option").children(".pg-selected").attr("src","{{  asset('/assets/img/wm-not_selected_tick.svg') }}")
         });



         //Content Loaded
         window.addEventListener("DOMContentLoaded", (e) => {
         var header = document.querySelector(".header");
         var chatRoom = document.querySelector(".chat-room");
         var typeArea = document.querySelector(".type-area");
         var btnAdd = document.querySelector(".button-add");
         var others = document.querySelector(".others");
        //  var emojiBox = document.querySelector(".emoji-button .emoji-box");
        //  var emojiButton = document.querySelector(".others .emoji-button");
        //  var emojis = document.querySelectorAll(".emoji-box span");
         var inputText = document.querySelector("#inputText");
         var btnSend = document.querySelector(".button-send");
         var messageArea=document.querySelector(".message.message-right:last-child");
         btnAdd.addEventListener("click", (e) => {
         others.classList.add("others-show");
         });
         //Emoji onclick event
        //  if(emojiButton){
        //     emojiButton.addEventListener("click", (e) => {
        //  emojiBox.classList.add("emoji-show");
        //  });
        //  }

         //Button Send onclick event
         btnSend.addEventListener("click", (e) => {

         var mess=inputText.value;
          // alert(mess);
             var bubble=document.createElement('div');
             bubble.className+=" bubble bubble-dark";
             bubble.textContent=mess;
             messageArea.appendChild(bubble);
             chatRoom.scrollTop = chatRoom.scrollHeight;
             inputText.value="";
         });
        //  for (var emoji of emojis) {
        //     emoji.addEventListener("click", (e) => {
        //   e.stopPropagation();
        //   emojiBox.classList.remove("emoji-show");
        //   others.classList.remove("others-show");
        //   inputText.value+=e.target.textContent;
        //  });
        //  }
         });

         document.addEventListener('DOMContentLoaded', function(){
         var chatWindow = document.querySelector('.chat-room');
         chatWindow.scrollTop = chatWindow.scrollHeight;

         });

      </script>
    <script>
         $(".pay_through_upi").click(function(){
         //  alert('pay_through_upi');
         location.href = "{{  url(app()->getLocale()."/user/payment/c2c/add/UPI") }}";
         });

         $(".pay_through_imps").click(function(){
         //   alert('pay_through_imps');
         location.href = "{{  url(app()->getLocale()."/user/payment/c2c/add/IMPS") }}";
         });

         $(".pay_through_rtgs").click(function(){
         //    alert('pay_through_rtgs');
         location.href = "{{  url(app()->getLocale()."/user/payment/c2c/add/Bank-Transfer-INDIA") }}";
         });

      </script>
    <script>
            $(document).ready(function() {
                $(".trading-experience").click(function () {
                $(".trading-experience").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below
                $(this).addClass("active");
            });
        });
    </script>
    <script>

        $(".cancelPay").click(function(){

            if($("input[name=buyer-reason]:checked").length > 0 || $("input[name=seller_agreed_refund]:checked").length > 0){

                    var reason = $("input[name=buyer-reason]:checked").val();
                    var ifSellerAgreedRefund = $("input[name=seller_agreed_refund]:checked");
                    var reason_type = 0;

                        if(ifSellerAgreedRefund.length > 0){
                            ifSellerAgreedRefund = ifSellerAgreedRefund.val();
                        }else{
                            ifSellerAgreedRefund = 0;
                        }

                    localStorage.setItem('timerValue', 0);
                    clearInterval(offtimer);
                    clearInterval(offtimer1);
                              clearInterval(offtimer2);
                    $('.timer-div-section').html('');

                    const cancel_id = $('.cancelPay').attr('data-id');


                    const orderid = <?php echo $get_order_data->id; ?>;

                $.ajax({

                    type: 'POST',
                    url: '{{  url(app()->getLocale()."/buyer_sell_request_accept") }}',
                    cache: false,
                    beforeSend: function(){ $(".cancelPay").html("<span class='spinner-border spinner-border-sm me-1'></span><span> Order cancelling </span>");
                    $(".cancelPay").css("pointer-events","none"); },
                    data: {

                            '_token': "{{ csrf_token() }}",
                            'user_cancel_id' : cancel_id,
                            'order_id' : orderid,
                            'reason' : reason,
                            'ifSellerAgreedRefund' : ifSellerAgreedRefund,
                            'reason_type' : reason_type

                        },
                        success: function (data) {
                            localStorage.setItem('timerValue', 0);

                            $('.timer-div-section').html('');
                            triggerAlert('Your order has been cancelled!', 'error');
                            // $('#Order-cancel div').removeClass('custom-modal-bck-bg').addClass('hide');
                            // $('body').removeClass('modal-open').removeAttr('style');
                            // $('.modal-backdrop').remove();
                            // $("#Order-cancel").modal('hide');
                            $("#expressOrderNotifyPopup-btn-close").click();
                             $("#cancel_close_btn").click();
                            // $('#Order-cancel').removeClass('show');
                        },
                        error: function(xhr, status, error) {

                            var erroJson = JSON.parse(xhr.responseText);

                            triggerAlert('Something went wrong!', 'error');

                        }
                });
            }else{
                 triggerAlert('Please select cancelation reason!', 'error');
            }



        });

    </script>
    <script>




 function ratingStatus(){
 var order_id = '<?php echo  Session::get('orderid');   ?>';

            $.ajax({
            url: '{{ route('check-ratingStatus') }}',

            type: 'POST',
            data: {
            "_token" : "{{ csrf_token() }}",
            'order_id' : order_id

            },

            success: function(data){

                 if(data.records){
                        if(data.records.positive_rating == 1){
                             $('#PositiveRating').css({'background': '#fdb919'});
                        }else if(data.records.negative_rating == 2){

                            $('#NegativeRating').css({'background': '#fdb919'});
                        }else{
                             $('#PositiveRating').css({'background': 'none'});
                             $('#NegativeRating').css({'background': 'none'});
                        }
                 }


            },
            error: function(xhr, status, error){

            }
        });
};

        // var checkconfirmorderstatus = setInterval(function(){

        //  var orderid = '<?php //echo  Session::get('orderid');   ?>';
        //  const userid ='<?php //echo Auth::user() ->id; ?>';

        //   $.ajax({

        //         type: 'POST',
        //         url: '{{  url(app()->getLocale()."/check-order") }}',
        //         data: {

        //             '_token': "{{ csrf_token() }}",

        //             'order_id' : orderid,
        //             'userID' :userid,
        //             },
        //             success: function (data) {

        //                 if((data.buyerDetail.order_status == 0) ){

        //                     $("#step-6").css("display", "none");
        //                     $('#step-1').addClass('is-active');
        //                     localStorage.setItem('chatValue', 0);
        //                 }
        //                 if(data.buyerDetail.order_status == 1 && data.buyerDetail.buyer_confirmation_status != 1 && data.buyerDetail.seller_confirmation_status != 1){

        //                   $('#step-1').addClass('success');
        //                     $('#step-2').addClass('is-active');
        //                     $('#step-2').addClass('success');
        //                     if(localStorage.getItem('chatValue') == 0){
        //                         $('#chat_div').load(' #chat_div');
        //                          $('#my-div4').load(' #my-div4');

        //                         location.reload();
        //                         localStorage.setItem('chatValue', 1);
        //                     }

        //                 }else{
        //                     $('#step-3').removeClass('is-active');
        //                     $('#step-4').removeClass('is-active');
        //                     $('#step-5').removeClass('is-active');

        //                 }
        //                 if(data.buyerDetail.buyer_confirmation_status == 1){
        //                     $('#step-3').addClass('is-active');
        //                     $('#step-3').addClass('success');
        //                      $('#step-1').addClass('success');
        //                      $('#step-2').addClass('success');
        //                 }else{
        //                     $('#step-3').removeClass('is-active');

        //                     $('#step-4').removeClass('is-active');
        //                     $('#step-5').removeClass('is-active');

        //                 }
        //                 if(data.buyerDetail.seller_confirmation_status == 1){
        //                     $('#step-4').addClass('is-active');
        //                     $('#step-4').addClass('success');
        //                     $('#step-3').addClass('success');
        //                      $('#step-1').addClass('success');
        //                      $('#step-2').addClass('success')
        //                 }else{
        //                   $('#step-4').removeClass('is-active');
        //                     $('#step-5').removeClass('is-active');

        //                 }
        //                 if((data.buyerDetail.buyer_confirmation_status == 1) && (data.buyerDetail.seller_confirmation_status == 1) && (data.buyerDetail.order_status == 1)){


        //                     $('#step-5').addClass('is-active');
        //                     $('#step-5').text('Order Completed');
        //                     $('#step-5').addClass('success');
        //                     localStorage.setItem('timerValue', 0);
        //                     localStorage.setItem('chatValue', 0);
        //                     clearInterval(checkconfirmorderstatus);

        //                 }
        //                 if((data.buyerDetail.order_status == 2) || (data.buyerDetail.order_status == 3) || (data.buyerDetail.order_status == 4)){
        //                      $('#step-5').html('<span>Order Cancelled </span>');
        //                     $('#step-2').addClass('cancel');
        //                     $('#step-3').addClass('cancel');
        //                     $('#step-4').addClass('cancel');
        //                     $('#step-5').addClass('cancel');
        //                     $('#step-1').removeClass('success');
        //                     $('#step-2').removeClass('success');
        //                     $('#step-3').removeClass('success');
        //                     $('#step-4').removeClass('success');
        //                     $('#step-5').removeClass('success');
        //                     clearInterval(checkconfirmorderstatus);

        //                     localStorage.setItem('timerValue', 0);
        //                     localStorage.setItem('chatValue', 0);
        //                      clearInterval(offtimer);
        //                      clearInterval(offtimer1);
        //                       clearInterval(offtimer2);
        //                     $('.timer-div-section').html('');

        //                 }

        //              if(data.rdata==1){


        //             $('#my-div').load(' #my-div');
        //             $('#my-div1').load(' #my-div1');
        //           $('#my-div2').load(' #my-div2');
        //             $('#my-div3').load(' #my-div3');

        //             $('#trading-experience').load(' #trading-experience');




        //              }


        //             },
        //             error: function(xhr, status, error) {

        //                 var erroJson = JSON.parse(xhr.responseText);


        //             }
        //     });
        //     ratingStatus ();
        // }, 3000);





    </script>

@if(!empty($seller_details)&& $get_order_data->order_status==1)
    <script>

    $(document).ready(function(){



    // 	setInterval(function(){

    // 		update_chat_history_data();

    // 	}, 1000);



    	function update_last_activity()
    	{
    		$.ajax({
    			url:"{{ route('update-last-activity') }}",
    			success:function()
    			{

    			}
    		})
    	}



	    $(document).on('ready', function(){
		var to_user_id =  "{{$seller_details->id}}";
		var to_user_name =  "{{$seller_details->id}}";

// 		$('#chat_message_{{$seller_details->id}}').emojioneArea({
// 			pickerPosition:"top",
// 			toneStyle: "bullet"
// 		});
	});

	    $(document).on('click', '.send_chat', function(){
		var to_user_id = $(this).attr('id');
		var chat_message = $.trim($('#chat_message_'+to_user_id).val());

		var chat_image = $.trim($('#chat_img').html())
		var img_path = $("#chat_img .chat_img").attr('src');


	    var order_id = '<?php echo  Session::get('orderid');   ?>';


		if (chat_message != ''){
			chat_messages = chat_message;
		}else{

			chat_messages = chat_image;
			$("#chat_img").removeClass('hide');
		}
		if(chat_messages != '')
		{
			$.ajax({
				url:"{{ route('insert-chat') }}",
				method:"POST",
				data:{
                    "_token": "{{ csrf_token() }}",
                    to_user_id:to_user_id,
                    chat_message:chat_messages,order_id:order_id},
				success:function(data)
				{
					$('#chat_message_'+to_user_id).val('');


					$('#chat_history_'+to_user_id).html(data);
					$("#uploadImage").val('');
					$("#chat_img").val('');
					$("#chat_img").addClass('hide');
					$('.input-send').removeClass('hide');
                    $('.button-add').removeClass('hide');

				}
			})
			setscrollHeight();
		}
		else
		{

		}
	});


    	function fetch_user_chat_history()
    	{
          var to_user_id = "{{$seller_details->id}}";

          var order_id = '<?php echo  Session::get('orderid');   ?>';
    		$.ajax({
    			url:"{{ route('fetch-user-chat-history') }}",
    			method:"POST",
    			data:{  "_token": "{{ csrf_token() }}",to_user_id:to_user_id,order_id:order_id},
    			success:function(data){

    				$('#chat_history_'+to_user_id).html(data);
    				setscrollHeight();
    			}
    		})
    	}

    	function update_chat_history_data()
    	{
    		$('.chat_history').each(function(){
    			var to_user_id = $(this).data('touserid');
    			fetch_user_chat_history(to_user_id);
    		});
    	}

    	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
		$('#is_active_group_chat_window').val('no');
	});

	    $(document).on('focus', '.chat_message', function(){
		var is_type = 'yes';
		$.ajax({
			url:"{{ route('update-is-type-status') }}",
			method:"POST",
			data:{ "_token": "{{ csrf_token() }}",is_type:is_type},
			success:function()
			{

			}
		})
	});

	    $(document).on('blur', '.chat_message', function(){
		var is_type = 'no';
		$.ajax({
			url:"{{ route('update-is-type-status') }}",
			method:"POST",
			data:{ "_token": "{{ csrf_token() }}",is_type:is_type},
			success:function()
			{

			}
		})
	});



	    $('#send_group_chat').click(function(){
		var chat_message = $.trim($('#group_chat_message').html());
		if(chat_message != '')
		{
			$.ajax({
				url:"{{ route('upload-image') }}",
				method:"POST",
				data:{"_token": "{{ csrf_token() }}", to_user_id:to_user_id ,chat_message:chat_message},
				success:function(data){
					$('#group_chat_message').html('');
					$('#group_chat_history').html(data);
				}
			})
		}
		else
		{
			// alert('Type something');
		}
	});

	    function fetch_group_chat_history(){
		var group_chat_dialog_active = $('#is_active_group_chat_window').val();
		var action = "fetch_data";
		if(group_chat_dialog_active == 'yes')
		{
			$.ajax({
				url:"{{ route('upload-image') }}",
				method:"POST",
				data:{"_token": "{{ csrf_token() }}",action:action},
				success:function(data)
				{
					$('#group_chat_history').html(data);
				}
			})
		}
	}


        $(document).ready(function() {
            var jq = $.noConflict();
            $('#uploadFile').on('change', function(){

                var to_user_id = $('#chat_message_{{$seller_details->id}}').val();
                 $('#chat_img').removeClass('hide');

               $('.input-send').addClass('hide');

                $('#uploadImage').ajaxSubmit({
                   //$.ajax({
                //       url:"{{ route('upload-image') }}",
                // 		method:"post",
                      data: {
                         "_token": "{{ csrf_token() }}",
                          to_user_id: to_user_id,
                      },

                      target: "#chat_img",

                      resetForm: true
                   });
                });
        });

        $(document).on('click', '.remove_chat', function(){
		var chat_message_id = $(this).attr('id');
		if(confirm("Are you sure you want to remove this chat?"))
		{
			$.ajax({
				url:"{{ route('remove-chat') }}",
				method:"POST",
				data:{"_token": "{{ csrf_token() }}",chat_message_id:chat_message_id},
				success:function(data)
				{
					update_chat_history_data();
				}
			})
		}
	});

    });

</script>
    <script>
    $(document).ready(function() {
      $('input[name="file"]').on('change', function() {

          if($('#myCheckbox').is(":checked")){

               var fileExtension = $(this).val().split('.').pop().toLowerCase();
                if ($.inArray(fileExtension, ['jpg', 'jpeg' , 'png']) == -1) {

                triggerAlert('Please select a file with a JPG , JPEG or PNG extension.', 'error');
                $(this).val('');
            }
          }else{

              triggerAlert('Terms & conditions not accepted', 'error');
          }

      });
    });
    $(document).ready(function(){

        var orderid = sessionStorage.getItem('orderid');
        if(orderid){

              function check_if_tradeDone(){

                  var order_id = orderid;

                        $.ajax({
                        url: '{{ route('check-tradeStatus') }}',

                        type: 'POST',
                        data: {
                        "_token" : "{{ csrf_token() }}",
                        'order_id' : order_id

                        },

                        success: function(data){

                             $('.trading_experiance').css({'display':'block'})
                        },
                        error: function(xhr, status, error){

                        }
                    });
                }
        };

         $('#myCheckbox').click(function (){
             if($('#myCheckbox').is(":checked")){
                $("#confirmButton").removeAttr('disabled');

             }else{
                 $('#confirmButton').attr('disabled', 'disabled');

             }
            });

        $("#confirmButton").click(function(){

             var orderid = '<?php echo  Session::get('orderid');   ?>';
            if($('#myCheckbox').is(":checked")){

               var checkbox = $("#myCheckbox").prop("checked");
                var file = $("input[type='file']").prop("files")[0];
                var formData = new FormData( $('#buyer_confirmationForm')[0]);
                 formData.append('orderid', orderid);

                $.ajax({
                    url: '{{ route('buyer-confirmation-status') }}',
                    beforeSend: function(){ $(".payment_proof_spinner").html("<div class='alert alert-success'>Sending....</div>"); $(".payment_proof_spinner").css("pointer-events","none"); },
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data){

                         $(".if_paymentIssue").css("display","block");
                          $(".payment_proof_spinner").text("");
                                        $(".payment_proof_spinner").css("pointer-events","none");
                                        $('#confirmButton').attr('disabled', 'disabled');
                                        $("input[type='file']").attr('disabled', 'disabled');
                                        $('#buyer_confirmationForm')[0].reset();
                                        $('#buyer_confirmationForm .btn-close').click();

                        },
                         complete: function (data) {



                                                     },
                    error: function(xhr, status, error){

                          $(".payment_proof_spinner").text(" ");
                            $(".payment_proof_spinner").addClass('error');
                            var erroJson = JSON.parse(xhr.responseText);

                            $(".payment_proof_spinner").text(erroJson.error.file);

                            triggerAlert( erroJson.error.file, 'error');

                            setTimeout(function(){
                            $(".payment_proof_spinner").removeClass('error');
                            $(".payment_proof_spinner").text('');
                            }, 2000)
                    }
                });

        }else{

           $('#confirmButton').attr('disabled', 'disabled');
        }



        });

        $("#request_crypto_transfer").click(function(){

            var request_crypto_transfer = $(this).val();

            $.ajax({
                url: '{{ route('request-crypto-transfer') }}',

                type: 'POST',
                data: {"_token": "{{ csrf_token() }}",request_crypto_transfer:request_crypto_transfer},

                success: function(data){

                    $('#paid-order-cancelled .btn-close').click();
                },
                error: function(xhr, status, error){

                }
            });
        });
    });
</script>
    <script>


    function deleteRating(id){
        //console.log(id);
        var orderid = id;
        var trader_type = 'buyer_id';
        $.ajax({
        url: '{{ route('deleteRating') }}',
        method: 'POST',
        data: {
        '_token' : '{{ csrf_token() }}',
        'orderid' : orderid,
        'trader_type' : trader_type
        } ,
        success:function(data){
         $('#PositiveRating').css({'background': 'none'});
         $('#NegativeRrating').css({'background': 'none'});

        triggerAlert( data.message , 'success');

        },
        error: function(xhr, status, error){
        var errors = JSON.parse(xhr.responseText);
        //console.log(errors);
        triggerAlert('No review found!', 'error');
        },

        });
    }
    function orderrating(id){
        $('#'+id).css({'background': '#fdb919'});

        //console.log(id);
        var rating_type = id;
        var buyer_id = '<?php echo Auth::user()->id; ?>';
        // console.log(rating_type);
        // console.log(buyer_id);
        $.ajax({
            url:"{{ route('buyer-ratings') }}",
            method:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                'rating_type' : rating_type,
                'buyer_id' : buyer_id,

            },
            success:function(data)
            {
                //console.log(data);
                $('#'+id).css({'background': '#fdb919'});
                $('#'+id).siblings().css({'background': 'none'});
                var rating_msg = data.message;
                triggerAlert(rating_msg, 'success');

            }
        })
    };
    function focusInput() {
    $('#have-a-question .btn-close').click();
    document.getElementById("chat_message_{{$seller_details->id}}").focus();

    }


</script>
@endif
<script>
      if(localStorage.getItem("previouStatus") === null || localStorage.getItem("previouStatus") == 2 ){
         localStorage.setItem("previouStatus", 0);
            localStorage.setItem('timerValue', 0);

        }




var paymettimeervalue =  "{{ env('EXPRESS_ORDER_MAX_TIME') }}";

    var remainingTime = 1 * paymettimeervalue * 60;

    function update(percent) {
        var deg;
        if (percent < (remainingTime / 2)) {
            deg = 90 + (360 * percent / remainingTime);
            $('.pie').css('background-image',
                'linear-gradient(' + deg + 'deg, transparent 50%, white 50%),linear-gradient(90deg, white 50%, transparent 50%)'

            );
        } else if (percent >= (remainingTime / 2)) {
            deg = -90 + (360 * percent / remainingTime);
            $('.pie').css('background-image',
                'linear-gradient(' + deg + 'deg, transparent 50%, #fec00f 50%),linear-gradient(90deg, white 50%, transparent 50%)'
            );
        }
    }


    var offtimer;
    var offtimer1;
    var offtimer2;
    function start() {
         var orderId = '<?php echo  Session::get('orderid');  ?>';


        // var orderId = orderid;

        var orderStatus = <?php echo $orderStatus; ?>;
        var buyer_confirmation_status = <?php
            $buyer_confirmation_status = $get_order_data->buyer_confirmation_status;
            if(!empty($buyer_confirmation_status)){
                echo json_encode($buyer_confirmation_status);
            } else {
                echo 'null';
            }
        ?>;

        var order_accept_action = <?php
            $order_accept_action = $get_order_data->order_accept_action;
            if(!empty($order_accept_action)){
                echo json_encode($order_accept_action);
            } else {
                echo 'null';
            }
        ?>;

         var seller_confirmation_status = <?php
            $seller_confirmation_status = $get_order_data->seller_confirmation_status;
            if(!empty($seller_confirmation_status)){
                echo json_encode($seller_confirmation_status);
            } else {
                echo 'null';
            }
        ?>;
        var counter = 1 * 60;
        var minutes ,seconds;




        if (orderStatus == 0) {

            var gettimerValue = parseInt(localStorage.getItem('timerValue'));
            if(gettimerValue === 0){

                  var paymettimeervalue = "{{ env('EXPRESS_ORDER_MAX_TIME') }}";
                 var Time = 1 * paymettimeervalue * 60;
                localStorage.setItem('timerValue', Time);
            }


            offtimer = setInterval(function() {

                var count = parseInt(localStorage.getItem('timerValue')) ;


                    count--;

                var minutes = Math.floor(count / 60);
                var seconds = count % 60;
                if (count >= 0) {
                    $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
                    update(count);
                }
                localStorage.setItem('timerValue', count);
                if (count === 0) {
                    localStorage.setItem('timerValue', 0);
                    clearInterval(offtimer);
                     //var orderid = '<?php echo  Session::get('orderid');   ?>';
                    $('.timer-div-section').html('');
                    $.get('{{ route('cancel-order', ['id' => ':id']) }}'.replace(':id', orderId), function(response) {
                        if (response.success) {
                            chek_notification();
                            triggerAlert('Order cancelled successfully!', 'error');
                        }
                    });
                }
            }, 1000);


        }else if(orderStatus == 1 && (buyer_confirmation_status != 1 || buyer_confirmation_status != null)   && order_accept_action == 1 && (seller_confirmation_status != null || seller_confirmation_status != 1) ) {


            var gettimerValue = parseInt(localStorage.getItem('timerValue'));

            if(gettimerValue === 0){
                var paymettimeervalue = "{{ env('EXPRESS_ORDER_MAX_TIME') }}";
                var Time = 1 * paymettimeervalue * 60;
                localStorage.setItem('timerValue', Time);
                 localStorage.setItem("previouStatus", 0) ;
            }

            offtimer1 = setInterval(function() {

                var orderid = '<?php echo  Session::get('orderid');   ?>';
                var count = parseInt(localStorage.getItem('timerValue'));

                var minutes = Math.floor(count / 60);
                var seconds = count % 60;
                if (count >= 0) {
                    $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
                    update(count);
                }
               localStorage.setItem('timerValue', count);

                if (count === 0) {

                    clearInterval(offtimer1);
                     localStorage.setItem('timerValue', 0);
                       var orderid = '<?php echo  Session::get('orderid');   ?>';
                     $.get('{{ route('cancel-order', ['id' => ':id']) }}'.replace(':id', orderId), function(response) {
                          if (response.success) {
                            //console.log('Order cancelled successfully');
                             $('.timer-div-section').html('');
                            triggerAlert('If the counterparty does not have any online Ads, click the "Appeal" button on the `I Paid but the order has been cancelled` tab!', 'error');

                          }

                    });

                }
            }, 1000);

        }else if(orderStatus == 1 && buyer_confirmation_status == 1 && order_accept_action == 1 && seller_confirmation_status == null) {

            offtimer2 = setInterval(function() {


                 var count = parseInt(localStorage.getItem('timerValue'));


                var minutes = Math.floor(count / 60);
                var seconds = count % 60;
                if (count >= 0) {

                    $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
                    update(count);
                }
                    localStorage.setItem('timerValue', count);
                if (count === 0) {
                     localStorage.setItem('timerValue', 0);
                    clearInterval(offtimer2);
                    $('#timer').html('');
                    triggerAlert('Please wait for asset realease!', 'error');

                }
            }, 1000);
        }
        else if(orderStatus == 4 || orderStatus == 2 || orderStatus == 3) {
           localStorage.setItem('timerValue', 0);
           localStorage.setItem("previouStatus", null) ;
        }
        else {
            $('#timer').text('');
            clearInterval(offtimer);
            clearInterval(offtimer1);
            clearInterval(offtimer2);
            localStorage.setItem('timerValue', 0);
        }
    }

    function checkOrderStatus() {



        return new Promise(function(resolve, reject) {
            var order_id = '<?php echo  Session::get('orderid');   ?>';

            $.get('{{ route('check-order-status', ['id' => ':id']) }}'.replace(':id', order_id), function(response) {

                const orderStatus = response.status.order_status;
                const seller_confirmation_status = response.status.seller_confirmation_status;
                const buyer_confirmation_status = response.status.buyer_confirmation_status;
                if (response.status.order_status == 1 && response.status.buyer_confirmation_status == null && response.status.seller_confirmation_status == null && response.status.order_accept_action == 1) {

                    if(localStorage.getItem("previouStatus") != response.status.order_status){

                        chek_notification();

                         triggerAlert('Order accepted', 'success');
                        localStorage.setItem("previouStatus", 1) ;

                    }
                }
                if (response.status.order_status == 1 && response.status.buyer_confirmation_status == 1 && response.status.order_accept_action== 1 && response.status.seller_confirmation_status== null) {
                     // payment realeased
                      if(localStorage.getItem("previouStatus") != 0 && localStorage.getItem("previouStatus") == 1 && localStorage.getItem("previouStatus") != 2){

                             chek_notification();


                         triggerAlert('You have released payment', 'success');

                         localStorage.setItem("previouStatus", 2) ;

                    }
                }
                if (response.status.order_status == 1 && response.status.buyer_confirmation_status == 1 && response.status.order_accept_action== 1 && response.status.seller_confirmation_status == 1) {
                     // order confirmed
                     if(localStorage.getItem("previouStatus") ==2 ){
                            chek_notification();
                         var count = parseInt(localStorage.getItem('timerValue'));
                        if (count) {
                            localStorage.setItem('timerValue', 0);
                            clearInterval(offtimer);
                            clearInterval(offtimer1);
                            clearInterval(offtimer2);
                            triggerAlert('Asset released & Order completed', 'success');
                        }
                        localStorage.setItem("previouStatus", null) ;
                    }
                }
                if (response.status.order_status == 4 || response.status.order_status == 2 || response.status.order_status == 3) {

                    chek_notification();
                    localStorage.setItem('timerValue', 0);
                    clearInterval(offtimer);
                    clearInterval(offtimer1);
                              clearInterval(offtimer2);
                    localStorage.setItem("previouStatus", null) ;

                }

                resolve({
                    orderStatus,
                    seller_confirmation_status,
                    buyer_confirmation_status
                  });
            }).fail(function() {
                reject(new Error('Failed to get order status.'));
            });
        });
    }
    if(localStorage.getItem("previouStatus") == 0 || localStorage.getItem("previouStatus") == 'null'){
        start();
    }

    function chek_notification(){

     var orderid = '<?php echo  Session::get('orderid');   ?>';

        $.ajax({
            url: '{{ route('CheckNotification') }}',
            method: 'POST',
            data: {
            '_token' : '{{ csrf_token() }}',


             'orderid' :orderid ,
            'trader_id' : '{{ Auth::user()->id }}'
            } ,
            success:function(data){

            },
            error: function(xhr, status, error){

            },

        });
    }

    // const intervalId = setInterval(getOrderStatus, 1000);
    // async function getOrderStatus() {
    //     try {
    //         const { orderStatus, seller_confirmation_status, buyer_confirmation_status } = await checkOrderStatus();



    //         if (Math.floor(orderStatus) === 4 || Math.floor(orderStatus) === 2 || Math.floor(orderStatus) === 3) {
    //           clearInterval(intervalId);
    //           $('.timer-div-section').html('');
    //           var count = parseInt(localStorage.getItem('timerValue'));
    //                     if (count) {
    //                         localStorage.setItem('timerValue', 0);
    //                         clearInterval(offtimer);
    //                         clearInterval(offtimer1);
    //                           clearInterval(offtimer2);


    //                     }

    //         }

    //         if (Math.floor(orderStatus) === 1 && Math.floor(seller_confirmation_status) === 1 && Math.floor(buyer_confirmation_status) === 1) {
    //           clearInterval(intervalId);
    //           $('.timer-div-section').html('');
    //           var count = parseInt(localStorage.getItem('timerValue'));
    //                     if (count) {
    //                         localStorage.setItem('timerValue', 0);
    //                         clearInterval(offtimer);
    //                         clearInterval(offtimer1);
    //                           clearInterval(offtimer2);


    //                     }
    //         }


    //     } catch (error) {

    //     }
    // }

</script>
<script>
    jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
</script>
<script>
    $(document).ready(function(){
    $(".chat_message").keydown(function (event) {
     if (event.which == 13) {
         event.preventDefault();
         $('.send_chat').click();
             }
    });
});

function setscrollHeight(){
  var element = document.querySelector('.chat-room');
    element.scrollTop = element.scrollHeight;
}


</script>






<?php echo  Session::get('orderid');   ?>
<script>

var conn = new WebSocket('wss://wealthmark.io:8443/?token={{ auth()->user()->user_name }}');

//var from_user_id = "{{ Auth::user()->id }}";
var from_user_id = "{{ Session::get('orderid') }}";
var to_user_id = "";

conn.onopen = function(e){

	console.log("Connection established!");

	//load_unconnected_user(from_user_id);

	//load_unread_notification(from_user_id);

	load_connected_chat_user(from_user_id);
	//console.log(conn);

};

conn.onmessage = function(e){

	var data = JSON.parse(e.data);
    //console.log(data);
    //alert(data);
	if(data.image_link)
	{
		//Display Code for uploaded Image
		document.getElementById('message_area').innerHTML = `<img src="{{ asset('images/`+data.image_link+`') }}" class="img-thumbnail img-fluid" />`;
	}

	if(data.status)
	{
		var online_status_icon = document.getElementsByClassName('online_status_icon');

		for(var count = 0; count < online_status_icon.length; count++)
		{
			if(online_status_icon[count].id == 'status_'+data.id)
			{
				if(data.status == 'Online')
				{
					online_status_icon[count].classList.add('text-success');

					online_status_icon[count].classList.remove('text-danger');

					document.getElementById('last_seen_'+data.id+'').innerHTML = 'Online';
				}
				else
				{
					online_status_icon[count].classList.add('text-danger');

					online_status_icon[count].classList.remove('text-success');

					document.getElementById('last_seen_'+data.id+'').innerHTML = data.last_seen;
				}
			}
		}
	}

// 	if(data.response_load_unconnected_user || data.response_search_user)
// 	{
// 		var html = '';

// 		if(data.data.length > 0)
// 		{
// 			html += '<ul class="list-group">';

// 			for(var count = 0; count < data.data.length; count++)
// 			{
// 				var user_image = '';

// 				if(data.data[count].user_image != '')
// 				{
// 					user_image = `<img src="{{ asset('images/') }}/`+data.data[count].user_image+`" width="40" class="rounded-circle" />`;
// 				}
// 				else
// 				{
// 					user_image = `<img src="{{ asset('images/no-image.jpg') }}" width="40" class="rounded-circle" />`
// 				}

// 				html += `
// 				<li class="list-group-item">
// 					<div class="row">
// 						<div class="col col-9">`+user_image+`&nbsp;`+data.data[count].name+`</div>
// 						<div class="col col-3">
// 							<button type="button" name="send_request" class="btn btn-primary btn-sm float-end" onclick="send_request(this, `+from_user_id+`, `+data.data[count].id+`)"><i class="fas fa-paper-plane"></i></button>
// 						</div>
// 					</div>
// 				</li>
// 				`;
// 			}

// 			html += '</ul>';
// 		}
// 		else
// 		{
// 			html = 'No User Found';
// 		}

// 		document.getElementById('search_people_area').innerHTML = html;
// 	}

// 	if(data.response_from_user_chat_request)
// 	{
// 		search_user(from_user_id, document.getElementById('search_people').value);

// 		load_unread_notification(from_user_id);
// 	}

// 	if(data.response_to_user_chat_request)
// 	{
// 		load_unread_notification(data.user_id);
// 	}

// 	if(data.response_load_notification)
// 	{
// 		var html = '';

// 		for(var count = 0; count < data.data.length; count++)
// 		{
// 			var user_image = '';

// 			if(data.data[count].user_image != '')
// 			{
// 				user_image = `<img src="{{ asset('images/') }}/`+data.data[count].user_image+`" width="40" class="rounded-circle" />`;
// 			}
// 			else
// 			{
// 				user_image = `<img src="{{ asset('images/no-image.jpg') }}" width="40" class="rounded-circle" />`;
// 			}

// 			html += `
// 			<li class="list-group-item">
// 				<div class="row">
// 					<div class="col col-8">`+user_image+`&nbsp;`+data.data[count].name+`</div>
// 					<div class="col col-4">
// 			`;
// 			if(data.data[count].notification_type == 'Send Request')
// 			{
// 				if(data.data[count].status == 'Pending')
// 				{
// 					html += '<button type="button" name="send_request" class="btn btn-warning btn-sm float-end">Request Send</button>';
// 				}
// 				else
// 				{
// 					html += '<button type="button" name="send_request" class="btn btn-danger btn-sm float-end">Request Rejected</button>';
// 				}
// 			}
// 			else
// 			{
// 				if(data.data[count].status == 'Pending')
// 				{
// 					html += '<button type="button" class="btn btn-danger btn-sm float-end" onclick="process_chat_request('+data.data[count].id+', '+data.data[count].from_user_id+', '+data.data[count].to_user_id+', `Reject`)"><i class="fas fa-times"></i></button>&nbsp;';
// 					html += '<button type="button" class="btn btn-success btn-sm float-end" onclick="process_chat_request('+data.data[count].id+', '+data.data[count].from_user_id+', '+data.data[count].to_user_id+', `Approve`)"><i class="fas fa-check"></i></button>';
// 				}
// 				else
// 				{
// 					html += '<button type="button" name="send_request" class="btn btn-danger btn-sm float-end">Request Rejected</button>';
// 				}
// 			}

// 			html += `
// 					</div>
// 				</div>
// 			</li>
// 			`;
// 		}

// 		document.getElementById('notification_area').innerHTML = html;
// 	}

// 	if(data.response_process_chat_request)
// 	{
// 		load_unread_notification(data.user_id);

// 		load_connected_chat_user(data.user_id);
// 	}

	if(data.response_connected_chat_user)
	{
        if((data.order_data.order_status == 0) ){
            $("#step-6").css("display", "none");
            $('#step-1').addClass('is-active');
            localStorage.setItem('chatValue', 0);
        }

        if(data.order_data.order_status == 1 && data.order_data.buyer_confirmation_status != 1 && data.order_data.seller_confirmation_status != 1){

          $('#step-1').addClass('success');
            $('#step-2').addClass('is-active');
            $('#step-2').addClass('success');
            if(localStorage.getItem('chatValue') == 0){
                $('#chat_div').load(' #chat_div');
                 $('#my-div4').load(' #my-div4');

                location.reload();
                localStorage.setItem('chatValue', 1);
            }

        }else{
            $('#step-3').removeClass('is-active');
            $('#step-4').removeClass('is-active');
            $('#step-5').removeClass('is-active');

        }
        if(data.order_data.buyer_confirmation_status == 1){
            $('#step-3').addClass('is-active');
            $('#step-3').addClass('success');
             $('#step-1').addClass('success');
             $('#step-2').addClass('success');
        }else{
            $('#step-3').removeClass('is-active');

            $('#step-4').removeClass('is-active');
            $('#step-5').removeClass('is-active');

        }
        if(data.order_data.seller_confirmation_status == 1){
            $('#step-4').addClass('is-active');
            $('#step-4').addClass('success');
            $('#step-3').addClass('success');
             $('#step-1').addClass('success');
             $('#step-2').addClass('success')
        }else{
          $('#step-4').removeClass('is-active');
            $('#step-5').removeClass('is-active');

        }
        if((data.order_data.buyer_confirmation_status == 1) && (data.order_data.seller_confirmation_status == 1) && (data.order_data.order_status == 1)){


            $('#step-5').addClass('is-active');
            $('#step-5').text('Order Completed');
            $('#step-5').addClass('success');
            localStorage.setItem('timerValue', 0);
            localStorage.setItem('chatValue', 0);
            //clearInterval(checkconfirmorderstatus);

        }
        if((data.order_data.order_status == 2) || (data.order_data.order_status == 3) || (data.order_data.order_status == 4)){
             $('#step-5').html('<span>Order Cancelled </span>');
            $('#step-2').addClass('cancel');
            $('#step-3').addClass('cancel');
            $('#step-4').addClass('cancel');
            $('#step-5').addClass('cancel');
            $('#step-1').removeClass('success');
            $('#step-2').removeClass('success');
            $('#step-3').removeClass('success');
            $('#step-4').removeClass('success');
            $('#step-5').removeClass('success');
            //clearInterval(checkconfirmorderstatus);

            localStorage.setItem('timerValue', 0);
            localStorage.setItem('chatValue', 0);
             //clearInterval(offtimer);
             //clearInterval(offtimer1);
              //clearInterval(offtimer2);
            $('.timer-div-section').html('');

        }

    //  if(data.rdata==1){


    // $('#my-div').load(' #my-div');
    // $('#my-div1').load(' #my-div1');
    // $('#my-div2').load(' #my-div2');
    // $('#my-div3').load(' #my-div3');

    // $('#trading-experience').load(' #trading-experience');




    //  }
        // if(data.order_data.order_status == 0){
        //     $("#step-6").css("display", "none");
        //     $('#step-1').addClass('is-active');
        // }
        // if(data.order_data.order_status == 1){
        //     $('#step-1').addClass('success');
        //     $('#step-2').addClass('is-active');
        //     $('#step-2').addClass('success');
        // }else{
        //     $('#step-3').removeClass('is-active');
        //     $('#step-4').removeClass('is-active');
        //     $('#step-5').removeClass('is-active');
        // }
        // if(data.order_data.buyer_confirmation_status == 1){
        //     $('#step-3').addClass('is-active');
        //     $('#step-3').addClass('success');
        // }else{
        //     $('#step-3').removeClass('is-active');
        //     $('#step-4').removeClass('is-active');
        //     $('#step-5').removeClass('is-active');
        // }
        // if(data.order_data.seller_confirmation_status == 1){
        //     $('#step-4').addClass('is-active');
        //     $('#step-4').addClass('success');
        // }else{
        //     $('#step-4').removeClass('is-active');
        //     $('#step-5').removeClass('is-active');
        // }
        // if((data.order_data.buyer_confirmation_status == 1) && (data.order_data.seller_confirmation_status == 1) && (data.order_data.order_status == 1)){
        //     $('#step-5').addClass('is-active');
        //     $('#step-5').html('<span> Order Completed </span>');
        //     $('#step-5').addClass('success');
        // }
        // if((data.order_data.order_status == 2) || (data.order_data.order_status == 3) || (data.order_data.order_status == 4)){
        //         $('#step-5').html('<span>Order Cancelled</span>');
        //         $('#step-2').addClass('cancel');
        //         $('#step-3').addClass('cancel');
        //         $('#step-4').addClass('cancel');
        //         $('#step-5').addClass('cancel');
        //         $('#step-1').removeClass('success');
        //         $('#step-2').removeClass('success');
        //         $('#step-3').removeClass('success');
        //         $('#step-4').removeClass('success');
        //         $('#step-5').removeClass('success');
        // }







	   // console.log(data.order_data);
	   // alert(data.length);
	    var from_user_id = "{{ Auth::user()->id }}";
	    var order_id = "{{ Session::get('orderid') }}";
		var html = '<div class="list-group">';
        //make_chat_area(data.data.id, data.data.name);
	    load_chat_data(from_user_id,data.data.id,order_id);
// 		if(data.data.length > 0)
// 		{
// 			for(var count = 0; count < data.data.length; count++)
// 			{
				html += `
				<a href="#" class="list-group-item d-flex justify-content-between align-items-start" onclick="make_chat_area(`+data.data.id+`, '`+data.data.name+`'); load_chat_data(`+from_user_id+`, `+data.data.id+`); ">
					<div class="ms-2 me-auto">
				`;

				var last_seen = '';

				if(data.data.user_status == '1')
				{
					html2 += '<span class="text-success online_status_icon" id="status_'+data.data.id+'"><i class="fas fa-circle"></i></span>';
					last_seen = '<span class="text-green">Online</span>';
				}
				else
				{
					html2 += '<span class="text-danger online_status_icon" id="status_'+data.data.id+'"><i class="fas fa-circle"></i></span>';

					last_seen = data.data.last_seen;
				}

				var user_image = '';

				if(data.data.user_image != '')
				{
					user_image = `<img src="{{ asset('assets/img/country-flag/') }}/`+data.data.country_flag+`" alt="avatar" />`;
				}
				else
				{
					user_image = `<img src="{{ asset('assets/img/country-flag/') }}" width="35" class="rounded-circle" />`;
				}



				html += `
						&nbsp; `+user_image+`&nbsp;<b>`+data.data.name+`</b>
						<div class="text-right"><small class="text-muted last_seen" id="last_seen_`+data.data.id+`">`+last_seen+`</small></div>
					</div>
					<span class="user_unread_message" data-id="`+data.data.id+`" id="user_unread_message_`+data.data.id+`"></span>
				</a>
				`;
// 			}
// 		}
// 		else
// 		{
// 			html += 'No User Found';
// 		}

		html += '</div>';
		var html2='';
		//html2 +='<div class="avatar-wrapper avatar-big">';

		//html2 += "<div class='avatar-wrapper avatar-big'>"+user_image+ "</div><span class='name'>"+data.data.name+"</span>";



		html2 += "<div class='avatar-wrapper avatar-big'>"+user_image+"</div><input type='hidden' value='"+data.data.id+"' id='buyer_chat_id'><span class='name'><span>"+data.data.name+"</span><span class='verified text-green'><i class='bi bi-patch-check-fill'></i></span><div class='fs-12'>"+last_seen+"</div></span>";




		//html2 +='</div>';

        //console.log(html2);
		//document.getElementById('user_list').innerHTML = html;
		document.getElementById('my-div2').innerHTML = html2;


		var html3 = `
    	<div id="chat_history"></div>
    	<div class="input-group mb-3">
    		<div id="message_area" class="form-control" contenteditable style="min-height:125px; border:1px solid #ccc; border-radius:5px;"></div>
    		<label class="btn btn-warning" style="line-height:125px;">
    			<i class="bi bi-upload"></i> <input type="file" id="browse_image" onchange="upload_image()" hidden />
    		</label>
    		<button type="button" class="btn btn-success" id="send_button" onclick="send_chat_message()"><i class="bi bi-send"></i></button>
    	</div>
    	`;

	document.getElementById('chat_area').innerHTML = html3;
		//check_unread_message();
	}

	if(data.message)
	{
	    var from_user_id = "{{ Auth::user()->id }}";
	    console.log("chat message");

		var html = '';

		if(data.from_user_id == from_user_id)
		{
		  //  console.log("5765767");
		  //  console.log(data);
			var icon_style = '';

// 			if(data.status == '0')
// 			{
// 				icon_style = '<span id="chat_status_'+data.chat_message_id+'" class="float-end"><i class="bi bi-check text-muted"></i></span>';
// 			}
// 			if(data.status == '1')
// 			{
// 				icon_style = '<span id="chat_status_'+data.chat_message_id+'" class="float-end"><i class="bi bi-check-all text-muted"></i></span>';
// 			}

// 			if(data.status == '1')
// 			{
				icon_style = '<span class="text-primary float-end" id="chat_status_'+data.chat_message_id+'"><i class="bi bi-check-all" style="color: #0d6efd;"></i></span>';
			//}

			html += `
			<div class="row">
				<div class="col col-3">&nbsp;</div>
				<div class="col col-9 alert alert-success text-dark shadow-sm">
					`+data.message+ icon_style +`
				</div>
			</div>
			`;
		}
		else
		{
			if(to_user_id != '')
			{
				html += `
				<div class="row">
					<div class="col col-9 alert alert-light text-dark shadow-sm">
					`+data.message+`
					</div>
				</div>
				`;

				update_message_status(data.chat_message_id, from_user_id, to_user_id, '1');
			}
			else
			{
				var count_unread_message_element = document.getElementById('user_unread_message_'+data.from_user_id+'');
            	if(count_unread_message_element)
            	{
	            	var count_unread_message = count_unread_message_element.textContent;
	            	if(count_unread_message == '')
	            	{
	            		count_unread_message = parseInt(0) + 1;
	            	}
	            	else
	            	{
	            		count_unread_message = parseInt(count_unread_message) + 1;
	            	}
	            	count_unread_message_element.innerHTML = '<span class="badge bg-primary rounded-pill">'+count_unread_message+'</span>';

	            	update_message_status(data.chat_message_id, data.from_user_id, data.to_user_id, 'Send');
	            }
			}
		}

		if(html != '')
		{
		    console.log("previous message");
			var previous_chat_element = document.querySelector('#chat_history');
            console.log(previous_chat_element);
			var chat_history_element = document.querySelector('#chat_history');

			chat_history_element.innerHTML = previous_chat_element.innerHTML + html;
			scroll_top();
		}

	}

	if(data.chat_history)
	{
	    var from_user_id = "{{ Auth::user()->id }}";

		var html = '';

		for(var count = 0; count < data.chat_history.length; count++)
		{

			if(data.chat_history[count].from_user_id == from_user_id)
			{
			 //    console.log("chat history");
		  //  console.log(data.chat_history[count].from_user_id);
		  //  console.log(from_user_id);
				var icon_style = '';

				// if(data.chat_history[count].status == '1')
				// {
				// 	icon_style = '<span id="chat_status_'+data.chat_history[count].id+'" class="float-end"><i class="fas fa-check text-muted"></i></span>';
				// }

				// if(data.chat_history[count].message_status == '1')
				// {
				// 	icon_style = '<span id="chat_status_'+data.chat_history[count].id+'" class="float-end"><i class="fas fa-check-double text-muted"></i></span>';
				// }

				// if(data.chat_history[count].message_status == '1')
				// {
					icon_style = '<span class="text-primary float-end" id="chat_status_'+data.chat_history[count].id+'"><i class="bi bi-check-all" style="color: #0d6efd;"></i></span>';
				//}

				html +=`
				<div class="row">
					<div class="col col-3">&nbsp;</div>
					<div class="col col-9 alert alert-success text-dark shadow-sm">
					`+data.chat_history[count].chat_message+ icon_style + `
					</div>
				</div>
				`;


			}
			else
			{
				if(data.chat_history[count].message_status != 'Read')
				{
					update_message_status(data.chat_history[count].id, data.chat_history[count].from_user_id, data.chat_history[count].to_user_id, 'Read');
				}

				html += `
				<div class="row">
					<div class="col col-9 alert alert-light text-dark shadow-sm">
					`+data.chat_history[count].chat_message+`
					</div>
				</div>
				`;

				var count_unread_message_element = document.getElementById('user_unread_message_'+data.chat_history[count].from_user_id+'');

                if(count_unread_message_element)
                {
                	count_unread_message_element.innerHTML = '';
                }
			}
		}

		document.querySelector('#chat_history').innerHTML = html;

		scroll_top();
	}

	if(data.update_message_status)
	{
	    //console.log("chat status");
		var chat_status_element = document.querySelector('#chat_status_'+data.chat_message_id+'');

		if(chat_status_element)
		{
			if(data.update_message_status == '1')
			{
				chat_status_element.innerHTML = '<i class="fas fa-check-double text-primary"></i>';
			}
			if(data.update_message_status == '0')
			{
				chat_status_element.innerHTML = '<i class="fas fa-check-double text-muted"></i>';
			}
		}

		if(data.unread_msg)
		{
			var count_unread_message_element = document.getElementById('user_unread_message_'+data.from_user_id+'');

			if(count_unread_message_element)
			{
				var count_unread_message = count_unread_message_element.textContent;

				if(count_unread_message == '')
				{
					count_unread_message = parseInt(0) + 1;
				}
				else
				{
					count_unread_message = parseInt(count_unread_message) + 1;
				}

				count_unread_message_element.innerHTML = '<span class="badge bg-danger rounded-pill">'+count_unread_message+'</span>';
			}
		}
	}
};

function scroll_top()
{
    document.querySelector('#chat_history').scrollTop = document.querySelector('#chat_history').scrollHeight;
}

// function load_unconnected_user(from_user_id)
// {
// 	var data = {
// 		from_user_id : from_user_id,
// 		type : 'request_load_unconnected_user'
// 	};

// 	conn.send(JSON.stringify(data));
// }

// function search_user(from_user_id, search_query)
// {
// 	if(search_query.length > 0)
// 	{
// 		var data = {
// 			from_user_id : from_user_id,
// 			search_query : search_query,
// 			type : 'request_search_user'
// 		};

// 		conn.send(JSON.stringify(data));
// 	}
// 	else
// 	{
// 		load_unconnected_user(from_user_id);
// 	}
// }

// function send_request(element, from_user_id, to_user_id)
// {
// 	var data = {
// 		from_user_id : from_user_id,
// 		to_user_id : to_user_id,
// 		type : 'request_chat_user'
// 	};

// 	element.disabled = true;

// 	conn.send(JSON.stringify(data));
// }

// function load_unread_notification(user_id)
// {
// 	var data = {
// 		user_id : user_id,
// 		type : 'request_load_unread_notification'
// 	};

// 	conn.send(JSON.stringify(data));

// }

// function process_chat_request(chat_request_id, from_user_id, to_user_id, action)
// {
// 	var data = {
// 		chat_request_id : chat_request_id,
// 		from_user_id : from_user_id,
// 		to_user_id : to_user_id,
// 		action : action,
// 		type : 'request_process_chat_request'
// 	};

// 	conn.send(JSON.stringify(data));
// }

function load_connected_chat_user(from_user_id)
{
	var data = {
		from_user_id : from_user_id,
		user_type : 'buyer',
		type : 'request_connected_chat_user'
	};
    //console.log(data);
	conn.send(JSON.stringify(data));
	//console.log(conn.send(JSON.stringify(data)));
}

function make_chat_area(user_id, to_user_name)
{
	var html = `
	<div id="chat_history"></div>
	<div class="input-group mb-3">
		<div id="message_area" class="form-control" contenteditable style="min-height:125px; border:1px solid #ccc; border-radius:5px;"></div>
		<label class="btn btn-warning" style="line-height:125px;">
			<i class="fas fa-upload"></i> <input type="file" id="browse_image" onchange="upload_image()" hidden />
		</label>
		<button type="button" class="btn btn-success" id="send_button" onclick="send_chat_message()"><i class="fas fa-paper-plane"></i></button>
	</div>
	`;

	document.getElementById('chat_area').innerHTML = html;

	document.getElementById('chat_header').innerHTML = 'Chat with <b>'+to_user_name+'</b>';

	document.getElementById('close_chat_area').innerHTML = '<button type="button" id="close_chat" class="btn btn-danger btn-sm float-end" onclick="close_chat();"><i class="fas fa-times"></i></button>';

	to_user_id = user_id;
}

// function close_chat()
// {
// 	document.getElementById('chat_header').innerHTML = 'Chat Area';

// 	document.getElementById('close_chat_area').innerHTML = '';

// 	document.getElementById('chat_area').innerHTML = '';

// 	to_user_id = '';
// }

function send_chat_message()
{
	document.querySelector('#send_button').disabled = true;

	var message = document.getElementById('message_area').innerHTML.trim();
    var buyer_chat_id = document.getElementById('buyer_chat_id').value;
    //console.log(buyer_chat_id);
	var data = {
		message : message,
		from_user_id : '{{ Auth::user()->id }}',
		to_user_id : buyer_chat_id,
		new_order_id:{{ Session::get('orderid') }},
		type : 'request_send_message'
	};
    //console.log(data);
    	conn.send(JSON.stringify(data));

    	document.querySelector('#message_area').innerHTML = '';

    	document.querySelector('#send_button').disabled = false;
 }

function load_chat_data(from_user_id, to_user_id,order_id)
{
    console.log("load chat");
	var data = {
	    order_id:order_id,
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		type : 'request_chat_history'
	};
    //console.log(data);
	conn.send(JSON.stringify(data));
}

function update_message_status(chat_message_id, from_user_id, to_user_id, chat_message_status)
{
	var data = {
		chat_message_id : chat_message_id,
		from_user_id : from_user_id,
		to_user_id : to_user_id,
		chat_message_status : 1,
		type : 'update_chat_status'
	};
// 	console.log("update chat status");
//     console.log(data);
	conn.send(JSON.stringify(data));
}

function check_unread_message()
{
	var unread_element = document.getElementsByClassName('user_unread_message');

	for(var count = 0; count < unread_element.length; count++)
	{
		var temp_user_id = unread_element[count].dataset.id;

		var data = {
			from_user_id : from_user_id,
			to_user_id : temp_user_id,
			type : 'check_unread_message'
		};

		conn.send(JSON.stringify(data));
	}
}

function upload_image()
{
	var file_element = document.getElementById('browse_image').files[0];

	var file_name = file_element.name;

	var file_extension = file_name.split('.').pop().toLowerCase();

	var allowed_extension = ['png', 'jpg'];

	if(allowed_extension.indexOf(file_extension) == -1)
	{
		alert("Invalid Image File");

		return false;
	}

	var file_reader = new FileReader();

	var file_raw_data = new ArrayBuffer();

	file_reader.loadend = function()
	{

	}

	file_reader.onload = function(event){

		file_raw_data = event.target.result;

		conn.send(file_raw_data);
	}

	file_reader.readAsArrayBuffer(file_element);
}

</script>
   </body>
</html>
