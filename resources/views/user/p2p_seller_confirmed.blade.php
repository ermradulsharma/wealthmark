<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Seller Confirm Order</title>
      <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
      @include('template.web_css')
        <link rel="stylesheet" href="{{ asset('css/confirm-order.css') }}">
    <style>
         .pie {
          width: 50px;
            height: 50px;
            position: relative;
            border-radius: 50%;
            background-color: #fec00f;
            border: 2px solid #fec00f;
            float: left;
            margin: 2em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pie .block {
              position: absolute;
            background: #fff;
            width: 40px;
            height: 40px;
            display: block;
            border-radius: 50%;
        }

        #time {
          font-size: 25px;
            /*position: absolute;*/
            /*top: 7%;*/
            /*left: 20%;*/
            color: #999999;
            z-index: 99;
        }

        .degree {
          /*90 + ( 360 * .1 )*/
          background-image: linear-gradient(90deg, transparent 50%, white 50%), linear-gradient(90deg, white 50%, transparent 50%);
        }

        .timer-div-section{
            display:flex;
            align-items:center;
            font-size:14px;
            color:black;
            font-weight:700 !important;
        }
    </style>


   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <?php
         //print_r($_SESSION); ?>
        <section class="bg-light-blue py-4 shadow-sm">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="d-md-flex justify-content-between align-items-center if-order-cancel">
                     <div class="">
                        <div class="title mb-1" id="my-div">
                          @if($get_order_data->order_status==0)
                                Order Pending
                            @elseif($get_order_data->order_status==4)
                                System Cancelled
                            @elseif($get_order_data->order_status==1 && $get_order_data->buyer_confirmation_status != 1 && $get_order_data->seller_confirmation_status != 1)
                                Order Accepted
                            @elseif($get_order_data->order_status==2)
                                Reciver Cancelled Order
                            @elseif($get_order_data->buyer_confirmation_status == 1 && $get_order_data->order_status==1 && $get_order_data->seller_confirmation_status != 1)
                            Payment Released
                            @elseif($get_order_data->buyer_confirmation_status != 1 && $get_order_data->order_status==1 && $get_order_data->seller_confirmation_status == 1)
                                Asset Released
                            @elseif($get_order_data->buyer_confirmation_status == 1 && $get_order_data->order_status==1 && $get_order_data->seller_confirmation_status == 1)
                                Order Completed
                            @elseif($get_order_data->order_status==3)
                            You have cancelled Order
                            @endif

                           <i class="bi bi-info-circle-fill ms-1"></i>
                        </div>
                        <!--<p>You have cancelled the Order. </p>-->
                     </div>
                     <!--<div id="timer"></div>-->

                     <div class="timer-div-section">
                        <span>
                            95% of the Seller's order have been completed within
                        </span>
                        <div class="pie degree">
                            <span class="block"></span>
                            <span id="timer" style="color:black !important;z-index:9999;">0</span>
                        </div>
                      </div>


                     <div class="">
                        <div class="order_no">
                           <span>Order number : </span>
                           <span><?php echo $get_order_data->order_id; ?></span>
                           <span><i class="bi bi-info-circle-fill"></i></span>
                        </div>
                        <div class="time_created">
                           <span>Time Created : </span>
                           <span>{{ App\Http\Controllers\HomeController::fetchDateFromSQL($get_order_data->created_at) }} <?php // echo $get_order_data->created_at; ?></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
        </section>
        <section class="inner-page authentication-step pb-0">
            <div class="container" id="order-status">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <!--<div class="mb-3 pb-4">-->
                        <!--    <h2 class="mb-4 text-center">Order Status</h2>-->
                        <!--</div>-->
                        <ol class="steps">
                            <li id="step-1" class="step is-active" data-step="1">
                               Order Pending
                            </li>

                            <li id="step-2" class="step" data-step="2">
                               Order Accepted
                            </li>

                            <li id="step-3" class="step" data-step="3">
                               Payment Released
                            </li>

                            <li id="step-4" class="step" data-step="4">
                               Asset Released
                            </li>

                            <li id="step-5" class="step " data-step="5">
                               Order Completed
                            </li>

                            <!--<li id="step-6" class="step" data-step="5">-->
                            <!--   Order Cancled-->
                            <!--</li>-->

                        </ol>
                    </div>
                </div>
            </div>
        </section>

      <!-- Confirm order info page code start-->
        <section>
         <div class="container">
             <div class="row" id="my-div1">
                <div class="col-md-8">
                   <div class="order-timeline-row">
                      <h5>Transfer payment to Seller</h5>
                      <div class="border-yellow rounded show p-3 fs-14 shadow-sm fw-normal" role="alert">
                         You need to leave the Wealthmark website and pay with the selected payment platfor. Meanwhile, Wealthmark will keep the crypto tin custody. Wealthmark only supports real-name verified payment methods. Upon successful payment to the seller, go back to the Wealthmark website and click the "Transferred, notify seller" button.
                      </div>
                   </div>
                </div>

                <div class="col-md-4">
                     @if(!empty($buyer_details) && $get_order_data->order_status==1)
                   <div class="ordered-user-info mb-3" role="alert">
                      <h5 class="fs-14">  <?php echo $buyer_details->first_name; ?></h5>
                      <div class="h-divider mb-2 mt-2"></div>
                      <h6>Verified User <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-warning text-decoration-underline">Report</a></h6>

                      <div class="d-flex justify-content-between fs-14">

                          <div class="fs-14">
                             <p class="fw-bold"> 30d Trades</p>
                             <p class="fw-bold"> 581  </p>
                         </div>
                          <div class="fs-14">
                             <p class="fw-bold"> 0d Completion Rate</p>
                             <p class="fw-bold">96.67%  </p>
                         </div>
                      </div>
                   </div>
                    @endif
                </div>


             </div>
             <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">

                      <div class="order-confirm-info-txt mt-3  shadow-sm p-3">
                         <h5>Confirm Order Info</h5>
                          <div class="h-divider mb-3"></div>

                            <div class="table-responsive">
                                <table class="table border table-bordered text-center">
                                <tr>
                                     <th><p>Amount</p></th>
                                     <th><p>Per Coin Price</p></th>
                                     <th><p>Quntity</p></th>
                                 </tr>
                                 <tr>
                                    <td> <h6 class="badge bg-warning text-dark mt-2">
                                        @php echo $get_order_data->domestic_currency_value;
                                            $base_url=env('BMK_API_BASE_URL');
                                            $BmkApiController = new \App\Http\Controllers\BmkApiController;
                                            $url = $base_url.'/get_currency';
                                            $params = array();
                                            $allcurrency = collect($BmkApiController->verify_api($url,$params));
                                            $currencies = $allcurrency->where('id', $get_order_data->domestic_currency_type)->first();
                                            echo $currencies->name;
                                        @endphp

                                    </h6></td>
                                    <td><h6 class="badge bg-warning text-dark mt-2"> @php echo $get_order_data->crypto_current_value; echo $get_order_data->crypto_type;@endphp</h6></td>
                                    <td> <h6 class="badge bg-warning text-dark mt-2">@php echo $get_order_data->total_crypto_value; echo $get_order_data->crypto_type;@endphp</h6></td>
                                </tr>
                                </table>
                            </div>


                      </div>



                       <div class="transferred-notify-seller mt-3" id="my-div3">
                          @if(!empty($seller_details) && $get_order_data->order_status==1 )
                         <h5 class="fs-14">After transferring the funds. click on the "Transferred, notify Buyer" button.</h5>
                         <div class="h-divider mb-3"></div>
                         <div class="transferred-notify-action-row mb-3">
                            <a class="btn-yellow shadow-none d-inline-block me-3 mb-2 exampleModalbtn" disabled data-bs-toggle="modal" data-bs-target="#exampleModal">Transferred, Notify Buyer</a>

                            <!--<button class="delete-modal btn-default border-0 cancelPay   d-inline-block" data-id="{{$get_order_data->seller_id}}" data-name="{{$get_order_data->seller_id}}">-->
                            <!--        <span class="glyphicon glyphicon-trash"></span> cancel-->
                            <!--    </button>-->
                         </div>
                         @else
                            @if($get_order_data->order_status==2 && $get_order_data->seller_id !='')
                            <h5>You have already cancel this order.</h5>

                            @elseif($get_order_data->order_status==3)
                            <h5>Buyer cancelled this order.</h5>
                             <div class="h-divider mb-3"></div>
                              @elseif($get_order_data->order_status==1 && $get_order_data->buyer_confirmation_status ==1)
                               <div class="h-divider mb-3"></div>
                             <div class="transferred-notify-action-row">
                                <a class="btn btn-yellow shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">Transferred, Notify Buyer</a>


                             </div>

                            @elseif($get_order_data->order_status==1 && $get_order_data->buyer_confirmation_status ==1 && $get_order_data->seller_confirmation_status ==1)
                             <!--<h5>If You want to cancel this order. click on the "Cancel Order" button.</h5>-->
                              <div class="h-divider mb-3"></div>
                             <div class="transferred-notify-action-row">
                                <!--<a class="btn btn-yellow shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">Transferred, Notify Buyer</a>-->

                                <!--  <a class="delete-modal btn btn-danger cancelPay usrcancelPay" data-id="{{$get_order_data->seller_id}}" data-name="{{$get_order_data->seller_id}}">-->
                                <!--    <span class="glyphicon glyphicon-trash"></span> cancel-->
                                <!--</a>-->
                                 <a class="btn btn-yellow text-white" href="{{ url(app()->getLocale().'/user/dashboard') }}">Go to Dashboard</a>
                             </div>
                             @endif
                         @endif
                      </div>
                                  </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                   <div class="wm-chatbox bg-light-blue p-3">
                      <div class="chat-box">
                         <div class="header" id="my-div2">

                            <div class="avatar-wrapper avatar-big">
                                @if(!empty($buyer_details) && $get_order_data->order_status==1)
                                <img src="{{  asset('img/country-flag/').'/'.$buyer_details->country_flag }} " alt="avatar" />

                               @elseif(!empty($buyer_details) && $get_order_data->order_status==2 ||  $get_order_data->order_status==3)
                               <img src="" alt="avatar" />

                               @elseif(empty($buyer_details) && $get_order_data->order_status==0 )
                               <img src="" alt="avatar" />
                               @endif
                            </div>
                            <span class="name">
                            @if(!empty($buyer_details) && $get_order_data->order_status==1)
                            <?php echo $buyer_details->first_name; ?> <div>@if(Cache::has('user-is-online-' . $buyer_details->id))<span>Online</span>@else<span>Offline</span>@endif</div>
                            @elseif($get_order_data->order_status==2)

                            Order Cancelled
                            @elseif($get_order_data->order_status==3)
                            Buyer cancelled order
                            @elseif($get_order_data->order_status==4)
                            System cancelled
                            @else
                            Pending

                            @endif
                            </span>
                            <span class="options">
                            <i class="bi bi-three-dots"></i>
                            </span>
                         </div>

                          @if(!empty($buyer_details))
                           <div class="chat-room scrollbar-style">
                              <input type="hidden" class="btn btn-info btn-xs start_chat" data-touserid="{{$buyer_details->id}}" data-tousername="{{$buyer_details->id}}" />
                                 <div class="chat_history" data-touserid="{{$buyer_details->id}}" id="chat_history_{{$buyer_details->id}}">

                                 </div>


                                 </div>

                            <div class="type-area">
                                <div id="chat_img" contenteditable class="input-wrapper img hide" >
                                </div>

                            <input type="text" name="chat_message_{{$buyer_details->id}}" id="chat_message_{{$buyer_details->id}}" class="form-control chat_message border-0" placeholder="Type messages here..." data-emoji-picker="true"/>

                            <span class="button-add position-relative">

                                        <div class="image_upload">
                                            <form id="uploadImage" method="post" action="{{ route('upload-image') }}">
                                                <i class="bi bi-paperclip text-white bg-dark-blue rounded-circle p-1"></i>
                                                <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png, .jpeg" class="chat-file-ulp">
                                            </form>
                                        </div>
                                                            </span>
                            <button type="button" name="send_chat" id="{{$buyer_details->id}}" class="button-send send_chat" > <i class="bi bi-send"></i> </button>
                         </div>

                              </div>
                              @endif


                </div>
             </div>
        </div>
        </div>
      </section>


      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Report</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="alert alert-warning">
                     <i class="bi bi-info-circle-fill"></i>  Malicious reports will cause an account freeze.
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
                     <div class="text">Screenshots or video/audio recordings of payment and communication data should not exceed a total of 5 files with total size of 50 MB. Supported file formats include jptg. jpeg, png, mp4, avi,rm,rmvb.mov.wmv.</div>
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
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <form id ="seller_confirmationForm">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Payment Confirmation</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <span class="seller_payment_proof_spinner"></span>
                  <div class="payment-confirmation-modal">
                     <div class="confirm-payment-block mb-3">
                        <h6>  1. Confirm Payment *</h6>
                        <div class="text">
                           <i class="bi bi-check-square-fill"></i> You must leave Wealthmark's platform to complete the transfer yourself. Wealthmark will not automatically tranfer the payment on your behalf.
                        </div>
                        <div class="text">
                           <i class="bi bi-x-square-fill"></i> Do not click on the "Transferred, notify seller" button without first making the payment. Doing so without making the payment first, may cause your account to be suspended. Please note tht the platform reserves the right to seek damages.
                        </div>
                        <input type="checkbox" name="checkbox" id="myCheckbox" class="mb-3"/> &nbsp;I have read and understood the above information.

                     </div>
                     <hr>
                     <div class="upload-proof-block mb-3">
                        <h6> 2.Upload Proof of Payment *</h6>
                        <div class="text">
                           Upload and send at least 1 (max 3) proof of payment to the seller. Supported file formats include jpg, jpeg, png
                        </div>
                     </div>
                     <input disabled type="file" name="file" class="form-control mb-3"/>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="bg-white py-4 rounded px-4 mb-3 if_paymentIssue"  {{ isset($_SESSION['seller_confirmation_status']) ? "style=display:block" : "style=display:none"}}>
                            <a onclick="focusInput()"  class="fs-14 text-dark d-inline-block mb-3" data-bs-toggle="modal" data-bs-target="#have-a-question" >Have A Question</a> &nbsp;&nbsp;
                            <a class="yellow-text mb-3"> | &nbsp;&nbsp;</a>
                            <a class="fs-14 text-dark d-inline-block mb-3" data-bs-toggle="modal" data-bs-target="#paid-order-cancelled">I paid but the order has been cancelled</a>
                   </div>

                   <!--order completed 2(two) sections start-->
                   <div class="bg-white py-4 rounded px-4 mb-3">
                       <h5>Preferred Investment Method</h5>

                       <div class="h-divider mb-4"></div>

                       <a href="javascript:void(0)" class="btn-yellow border-0 d-inline-flex me-4 align-items-center mb-3">
                            <div class="method-name me-3">
                                <i class="bi bi-coin me-1"></i>    Spot
                            </div>
                            <i class="bi bi-arrow-right"></i>
                       </a>

                       <a href="javascript:void(0)" class="btn-blue border-0 d-inline-flex me-4 align-items-center">
                            <div class="method-name me-3">
                                <i class="bi bi-coin me-1"></i>    Earn
                            </div>
                            <i class="bi bi-arrow-right"></i>
                       </a>





                   </div>


                   <div class="trading-experiance mt-4 mb-3" id="trading-experience">
                           @if( $get_order_data->buyer_confirmation_status == 1 && $get_order_data->seller_confirmation_status == 1)
                       <h5>How was your trading experience ?</h5>
                        <div class="trading-experience-block mt-3">

                            <button type="button" id="PositiveRating" onclick="orderrating(this.id)" class="PositiveRating exp-1 border border-1 p-2 text-secondary trading-experience  @if(isset($ratedRecords)){{ ($ratedRecords->positive_rating ==1) ? 'ratingBg' : ' '}}@endif"> <i class="bi bi-hand-thumbs-up"></i> Positive</button>
                            <button type="button" id="NegativeRating" onclick="orderrating(this.id)" class=" NegativeRating exp-2 border border-1 p-2 text-secondary trading-experience @if(isset($ratedRecords)){{ ($ratedRecords->negative_rating ==2) ? 'ratingBg' : ' '}}@endif"> <i class="bi bi-hand-thumbs-down"></i> Negative</button>
                             <button type="button"  id="{{ $_SESSION['orderid'] }}" onclick="deleteRating('{{ $_SESSION['orderid'] }}')" class="deleterating exp-2 border border-1 p-2 deleterating"><i class="bi bi-trash"></i></button>
                        </div>
                        @endif
                   </div>
                   <!--order completed 2(two) sections end-->


                </div>

             </div>
          </div>
      </section>


       <section class="wm-pay-accordian-section">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">

                            <div class="sec-title text-center mb-2">
                           <h2 class="heading-h2">FAQs</h2>
                            </div>

                        </div>

                        </div>
    </div>
    <div class="container">
  <div class="accordion"  id="accordian-order-cancelled">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
     1. What is Wealthmark Pay?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to
                                            style each element. These classes control the overall appearance, as well as
                                            the
                                            showing and hiding via CSS transitions. You can modify any of this with
                                            custom
                                            CSS or overriding our default variables. It's also worth noting that just
                                            about
                                            any HTML can go within the <code>.accordion-body</code>, though the
                                            transition
                                            does limit overflow</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  2. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by
                                        Wealthmark?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">
             [Wallets] - [Funding] - [Pay] on your Wealthmark App.
       </div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    3. How long does it take for a Wealthmark Pay transaction to be completed?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">
            Wealthmark Pay transactions are usually confirmed instantly.

        </div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
    4. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by
                                        Wealthmark?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text"> [Wallets] -
                                            [Funding] - [Pay] on your Wealthmark App.</div>
      </div>
    </div>
  </div>


   <div class="card">
    <div class="card-head" id="headingFive">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
     5. How long does it take for a Wealthmark Pay transaction to be completed?
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text"> [Wallets] -
                                            [Funding] - [Pay] on your Wealthmark App.</div>
      </div>
    </div>
  </div>


</div>
</div>
</section>

      <div class="modal fade" id="paid-order-cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paid-order-cancelledLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paid-order-cancelledLabel">I Paid but the order has been cancelled</h5>
        <button type="button" id="appeal_close" class=" btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="order-canlled-inner">
                    <div class="text">
                            If you paid but the order is cancelled, your assets cannot be traced back automatically. Please chat with the seller and request the seller to refund or try one of the solutions below.
                    </div>
                    <div class="solution-1-block my-3">
                        <h6>Solutions: 1</h6>
                        <div class="text">If you have paid but the order is cancelled, you can request for the seller to transfer the purchased crypto via Wealthmark Pay. </div>
                        <div class="text"><span class="step-1 text-warning">Step 1: </span>Go to Wealthmark pay, select the currency to generate QR Code, or copy the pay ID, or copy the Wealthmark ID.</div>
                        <div class="text"><span class="step-2 text-warning">Step 2: </span>Send the QR Cdoe/Pay Wealthmark ID to the seller in chat</div>
                        <div class="text"><span class="step-3 text-warning">Step 3: </span>Confirm the order amount with the seller and wait for the transfer.</div>
                         <button type="button" id="request_crypto_transfer" class="btn btn-yellow shadow-none d-block" value="request_crypto_transfer">Request Crypto Transfer</button>
                    </div>
                    <div class="h-divider"></div>
                    <div class="solutions-2-block my-2">
                            <h6>Solutions: 2</h6>
                            <div class="text">Click the button below, place another order with the <span class="text-warning">same amount</span> from the seller's profile page. You should send the proof of payment to the seller and explain the situatoin. Then make sure to click the <span class="text-warning">"Transferred, notify seller" </span> button.</div>
                            <a class="btn btn-yellow shadow-none d-block">Place Another Order</a>
                    </div>
                     <div class="h-divider"></div>
                    <div class="solutions-3-block my-2">
                            <h6>Solutions: 3</h6>
                            <div class="text">If the counterparty does not have any online Ads, click the "Appeal" button below.</div>
                            <a class="btn btn-yellow shadow-none d-block" onClick="openAppeal_stepOne()">Appeal</a>
                     </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="modal fade" id="have-a-question" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="have-a-questionLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="have-a-questionLabel">Have A Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <div class="row">
                   <div class="col-md-12">
                        <div class="have-a-question-inner">
                            <h6><i class="bi bi-journal-minus"></i> &nbsp;Negotiate with the counterparty</h6>
                            <div class="text"> If there is an issue with the transactoin, the most effective solution is to contac tthe counterparty directly. You can upload the payment receipt and account information in the chat window for both parties to verify and negotiate.</div>
                            <a onclick="focusInput()" class="btn btn-yellow shadow d-flex justify-content-center align-item-right w-50 mx-auto">&nbsp;Chat Now &nbsp;<i class="bi bi-chat"></i></a>
                        </div>
                        <div class="apeal-section">
                            <h6><i class="bi bi-shield-fill-check"></i> Appeal</h6>
                            <div class="text">The order has been completed and your asset is no longer escrowed by Wealthmark. Please not that we are unable to directly trace back your assets.</div>
                            <div class="apeal-radio-boxes">
                                <p><input type="radio" name="order-status" data-bs-toggle="modal" data-bs-target="#paid-order-cancelled"/>&nbsp;I paid but the order cancelled.</p>
                                <p><input type="radio" name="order-status" data-bs-toggle="modal" data-bs-target="#other-reason-cancel-order"/>&nbsp;Other reasons.</p>
                            </div>
                        </div>
                   </div>
               </div>
              </div>
            </div>
          </div>
        </div>

      <div class="modal fade" id="other-reason-cancel-order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="other-reason-cancel-orderLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                  <a data-bs-dismiss="modal">X</a>
                  <div class="row">
                        <div class="col-md-12">
                          <div class="tips-block text-center">
                                    <i class="bi bi-info-circle-fill order-canceled-info-icon"></i>
                                <h5 class="modal-title" id="other-reason-cancel-orderLabel">Tips</h5>
                            <div class="text">
                                If you have any questions, please contact the other party first. You can reach out to our customer service officers to report other issues that happend in transactions.
                            </div>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-yellow shadow tert-center w-100">Customer Support</button>
              </div>
            </div>
          </div>
        </div>
      <!--ORDER CANCEL PAGE CODE END-->

      <div id="Order-cancel">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-650px">
                <div class="border-bottom">
                   <div class="wm-custom-modal-header ">
                            <span>Cancel Order</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3 max-height-500px scrollbar-style">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 bg-light-blue p-3 mt-2">
                                <h3 class="title">Tips</h3>
                                <div class="fs-12 yellow-black fw-normal mb-1">If you have already paid the seller, please do not cancel the order.</div>
                                <div class="fs-12 yellow-black fw-normal mb-1">If the order is canceled due to system time out, the buyer shall be accountable (completion rate affected).</div>
                                <div class="fs-12 yellow-black fw-normal mb-1">If the seller does not reply to the chat within 15 mins, you will be unaccountable for this order cancellation. <span class="text-warning">Only 5 unaccountable order cancellations can be made in a day.</span></div>
                                <div class="fs-12 yellow-black fw-normal mb-1">You can only make up to <span class="text-warning">3 accountable cancellations</span> in a day. Otherwise, your account will be suspended and you cannot place any more orders on the same day.</div>

                            </div>
                <div class="col-lg-12 col-md-12 mt-3">
                    <h6 class="m-0">Why did you cancel the order?</h6>
                    <div class="fs-14 fw-normal order-inner-txt">We keep your feedback confidential and strive to serve you better next time.</div>

                        <div class="cancel-reason-buyer shadow-sm p-2 mt-2">
                            <h6 class="bg-light-blue p-2">Due to buyer</h6>
                            <div class="order-cancel-radio fs-14 d-flex align-items-center"><input type="radio" name="buyer-reason" class="me-2"><span>I do not want to trade anymore</span></div>
                            <div class="order-cancel-radio fs-14 d-flex align-items-center"><input type="radio" name="buyer-reason" class="me-2"><span>I do not meet the requirements of the advertiser's trading terms and condition</span></div>
                            <div class="order-cancel-radio fs-14 d-flex align-items-center"><input type="radio" name="buyer-reason" class="me-2"><span>Other reasons</span></div>
                        </div>
                        <div class="cancel-reason-seller shadow-sm p-2 mt-2">
                            <h6 class="bg-light-blue p-2">Due to seller</h6>
                            <div class="fs-14 fw-normal">If the seller accepts the cancellation request due to the seller, the buyer's completion rate will not be affected.</div>
                            <div class="fs-14 fw-normal">If the seller rejects the cancellation request, the buyer shall be accountable (completion rate affected).</div>
                            <div class="fs-14 fw-normal">You can only make an order cancellation with reason due to the seller up to 3 times per day.</div>
                        </div>
                        <div class="seller-reason-radio shadow-sm p-2 mt-2">
                            <h6 class="bg-light-blue p-2">Due to buyer</h6>
                            <div class="order-cancel-radio fs-14 d-flex align-items-center"><input type="radio" name="buyer-reason" class="me-2"><span>Seller is asking for extra fee</span></div>
                            <div class="order-cancel-radio fs-14 d-flex align-items-center"><input type="radio" name="buyer-reason" class="me-2"><span>Problem with seller's payment method result in unsuccessful payments</span></div>
                            <div class="order-cancel-radio fs-14 d-flex align-items-center"><input type="radio" name="buyer-reason" class="me-2"><span>Seller cannot release the order due to network issue. The seller has refunded the amount.</span></div>
                        </div>
                </div>
                        </div>

                        <div class="h-divider mb-3"></div>
                        <div class="mb-2 terms-conditions">
                            <div class="d-flex justify-content-start align-items-center fs-12"><input type="checkbox">&nbsp;I have not paid the seller / seller has agreed to refund</div>
                        </div>
                        <div class="terms-box d-flex mb-4 w-100">
                            <!--<button type="button" class="btn btn-blue btn-block w-50">Close</button>-->
                            <!--<button type="button"  class="btn btn-yellow btn-block w-50 delete-modal btn btn-danger cancelPay usrcancelPay" data-bs-dismiss="modal"  data-id="{{$get_order_data->buyer_id}}" data-name="{{$get_order_data->buyer_id}}">Cancel Order</button>-->

                            <button type="button"  class="shadow-none btn-yellow btn-block delete-modal border-0 cancelPay  w-100" data-id="{{$get_order_data->seller_id}}" data-name="{{$get_order_data->seller_id}}">Cancel Order</button>

                        </div>




                    </div>

                </div>
            </div>
        </div>
    </div>

 <!--=======================================new appel page design ==============================================================================     -->
  <!-------------------------------- step-1 when user click on appeal button then open this modal------------------------------------->

    <div class="demo_1 appeal_tips">
        <div class="hide">  <!-- for show and hide modal use one class ( hide, custom-modal-bck-bg) at time -->
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Tips</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row " id="tips-1">      <!-- after click on appeal button this row should show in modal untill user click on Request for Customer Service btn  -->
                               <div class="col-md-12">
                                        <div class="fs-14 text-justify">
                                            If there is an issue with the transaction, the most effective solution is to contact the counterparty directly. You can upload the payment receipt and account information in the chat for both parties to verify and negotiate.
                                        </div>
                                    </div>

                                <div class="d-block col-12 mt-4 w-100 text-center mb-3">
                                    <button type="submit" class="btn-yellow shadow-none d-block w-100 border-0" id="tips_one_Ok">OK</button>
                                </div>
                                <div class="mb-2 col-md-12 text-center req_help_ser min-height-50px">
                                    <p class="text-muted">Request for Customer Service</p>
                                    <span class="c d-block text-center fw-bolder"  id="5"></span>
                                </div>

                            </div>

                            <div class="row d-none" id="tips-2">      <!-- open this after above condition  -->
                               <div class="col-md-12 max-height-300px scrollbar-style">
                                            <div class="appeal-point">
                                            <i class="bi bi-dot"></i>

                                         <span>   Please start with contacting the counterparty to explain the issue.</span>
                                        </div>
                                            <div class="appeal-point">
                                             <i class="bi bi-dot"></i>
                                                <span>
                                                Kindly note that once the transaction is completed, the
                                                assets are no longer held in Wealthmark's custody.
                                                The platform is unable to freeze the assets and cannot
                                                quarantee that your assets will be fully recovered after the appeal is
                                                </span>

                                            </div>
                                            <div class="appeal-point">
                                                <i class="bi bi-dot"></i>

                                                <span>   Please start with contacting the counterparty to explain the issue.</span>
                                            </div>
                                            <div class="appeal-point">
                                                 <i class="bi bi-dot"></i>
                                                    <span>
                                                    Kindly note that once the transaction is completed, the
                                                    assets are no longer held in Wealthmark's custody.
                                                    The platform is unable to freeze the assets and cannot
                                                    quarantee that your assets will be fully recovered after the appeal is
                                                    </span>

                                            </div>
                                </div>

                                <div class="d-block col-12 mt-4 w-100 text-center mb-3">
                                    <button type="submit" class="btn-yellow shadow-none d-block w-100 border-0" id="confirm_for_appeal">OK, I got it</button>
                                </div>


                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-------------------------------- step-2------------------------------------->
     <div class="appeal_upld_docs">
        <div class="hide">  <!-- for show and hide modal use one class ( hide, custom-modal-bck-bg) at time -->
            <div class="wm-custom-modal-diolog max-width-650px">
                <div class="px-3">
                     <div class="wm-custom-modal-header m-0">
                            <span>Appeal</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3">

                    <div class="container-fluid p-0 m-0">
                        <div class="row">
                        <div class="col-md-12 authentication-step">
                            <ol class="steps mb-3">
                            <li id="step-1" class="step is-active" data-step="1">
                              Appeal Submitted
                            </li>

                            <li id="step-2" class="step" data-step="2">
                               Negotiate with Counterparty
                            </li>

                            <li id="step-3" class="step" data-step="3">
                               CS Review
                            </li>



                        </ol>
                        <div class="fs-12">
                            CS review takes a few hours. If no proof has been submitted, CS will notify both parties to upload proof in time.
                        </div>
                        <div class="h-divider mb-3 mt-3"></div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="">


                                <div class="bg-light-blue fs-12 text-justify mb-3 p-2">
                                    Reason for appeal and proofs are visible to both parties and CS. Please avoid including private or sensitive information
                                </div>
                                <h6 class="title fs-14">Appeal Reason (Mandatory)</h6>
                                 <div class="lf-select_coin-to rounded">
       <div class=" coin-swap-from m-0">
                    <input type="text" value="16" class="lf-select-coin-to-input">
                    <div class="wm-input-suffix ">
                      <div class="lf-select-coin-to-drpd">
                        <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                          <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                  </div>

                  <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                    <div class="wm-dropdown-optn-item-div">
                        <div id="select_coin_text" class="wm-dropdown-optn-item-txt">Select reason for appeal</div>
                      </div>
                    </div>

                   <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
                     <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                        <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">I have released the crypto but the buyer has not released the payment</div>
                            </div>
                          </div>
                        </li>
                        <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                   <div class="wm-dropdown-optn-item-txt">I have released extra crypto to the buyer</div>
                            </div>
                            </div>
                        </li>
                        <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                <div class="wm-dropdown-optn-item-txt">I suspected the buyer is scamming</div>
                            </div>
                          </div>
                        </li>
                        <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                            <div class="wm-dropdown-optn-item-inner selected">
                                <div class="wm-dropdown-optn-item-div">
                                    <div class="wm-dropdown-optn-item-txt">Others</div>
                                </div>
                            </div>
                        </li>

                       </ul>
                </div>
  </div>
                                <div class="p-2"></div>

                                 <h6 class="title fs-14">Description</h6>
                                 <div class="position-relative">
                                    <textarea class="form-control" id="appeal_description" name="text" placeholder="Type in your message" rows="5"></textarea>
                                    <span class="fs-12 appeal_count_message">   <span id="count_message"></span> /500 </span>
                                </div>

                                 <div class="p-2"></div>
                            </div>

                        </div>
                        <div class="col-lg-5 col-md-6">
                             <h6 class="title fs-14">Upload Proof (Mandatory)</h6>
                              <div class="fs-12">
                            Screenshots or Video/audio recordings of payment and communication data should not exceed a total files with total size of 200 MB.
                        </div>
                         <div class="fs-12">
                           Please provide pictures/videos of the corresponding payment account transactions to support your appeal.<br> <a hreg="javascript:void(0)" class="yellow-text">show more</a>
                        </div>
                        <div class="upload__box mt-3">
                          <div class="upload__btn-box">
                                    <label class="upload__btn upload__btn btn btn-default shadow-none py-1 px-2">
                                  <span class=""><i class="bi bi-plus"></i></span>
                                  <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                </label>
                              </div>
                              <div class="upload__img-wrap"></div>
                        </div>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <a href="javascript:void(0)" class="btn btn-yellow shadow-sm w-100" id="file_appeal">File an appeal</a>
                        </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
     <!-------------------------------- step-3------------------------------------->
     <section class="bg-white" id="appeal_pending">
         <div class="container hide" >
             <div class="row bg-white" style="padding:30px">
                 <div class="col-md-8 col-sm-12">
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
                          <div class="d-flex align-items-center justify-content-between">
                     <p class="fs-6">Appeal Progress </p>
                     <span class="fs-14 d-flex align-items-center">
                         <span class="me-4 text-success line-height-10"> <i class="fs-1 bi bi-dot"></i></span>
                         <i class=" bi bi-chevron-right"></i>
                     </span>
                     </div>

                         <div class="bg-light-blue pt-1 mt-2 mb-2"></div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="bg-light-blue rounded p-2 h-100">
                         <div class="fs-6 d-flex align-items-center justify-content-between bg-white py-3 px-4 rounded mb-2">
                             <span class="g-light-green me-2">Buy</span>
                             <span class="text-dark me-2">USDT</span>

                         </div>
                         <div class="bg-white px-2">
                         <div class="d-flex align-items-center justify-content-between  py-3 px-2 rounded mb-2">
                             <span class="fs-14 fw-bolder text-muted"> Fiat Amount</span>
                             <span class="fs-6 line-height-10"><i class="bi bi-currency-dollar"></i> <span>1000</span></span>
                         </div>
                         <div class="h-divider"></div>
                         <div class="d-flex align-items-center justify-content-between  py-3 px-2 rounded mb-2">
                             <span class="fs-14 fw-bolder text-muted"> Price</span>
                             <span class="fs-6 line-height-10"><i class="bi bi-currency-dollar"></i> <span>1000</span></span>
                         </div>
                          <div class="h-divider"></div>
                         <div class="d-flex align-items-center justify-content-between  py-3 px-2 rounded mb-2">
                             <span class="fs-14 fw-bolder text-muted"> Crypto Amount</span>
                             <span class="fs-6 line-height-10"><i class="bi bi-currency-dollar"></i> <span>1000</span></span>
                         </div>

                     </div></div>
                 </div>
             </div>
         </div>
     </section>
 <!--=======================================/ new appel page design ==============================================================================     -->







      @include('template.country_language')
      @include('template.web_footer')

<script src="{{ asset('css/accordian_bootstrap.min.js') }}"></script>
<script src="{{ asset('js/emoji/emojiPicker.js') }}"></script>
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


            var e = $('#appeal_pending .hide').addClass('custom-modal-bck-bg');
            e.removeClass('hide');
    })
    $(".cancel_appeal").click(function (){

            var e = $('#appeal_pending .custom-modal-bck-bg').addClass('hide');
            e.removeClass('custom-modal-bck-bg');
    })

</script>
<script>
         //   var timeLeft = 30;
         // var elem = document.getElementById('timer_div');

         // var timerId = setInterval(countdown, 1000);

         // function countdown() {
         //   if (timeLeft == -1) {
         //     clearTimeout(timerId);

         //   } else {
         //     elem.innerHTML = "(" + timeLeft + ")"
         //     timeLeft--;
         //   }
         // }



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
         var emojiBox = document.querySelector(".emoji-button .emoji-box");
         var emojiButton = document.querySelector(".others .emoji-button");
         var emojis = document.querySelectorAll(".emoji-box span");
         var inputText = document.querySelector("#inputText");
         var btnSend = document.querySelector(".button-send");
         var messageArea=document.querySelector(".message.message-right:last-child");
         //Header onclick event
         //   header.addEventListener("click", (e) => {
         //     if (typeArea.classList.contains("d-none")) {
         //       header.style.borderRadius = "20px 20px 0 0";
         //     } else {
         //       header.style.borderRadius = "20px";
         //     }
         //     typeArea.classList.toggle("d-none");
         //     chatRoom.classList.toggle("d-none");
         //   });
         //Button Add onclick event
         btnAdd.addEventListener("click", (e) => {
         others.classList.add("others-show");
         });
         //Emoji onclick event
         if(emojiButton){
             emojiButton.addEventListener("click", (e) => {
         emojiBox.classList.add("emoji-show");
         });
         }

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
         for (var emoji of emojis) {
         emoji.addEventListener("click", (e) => {
           e.stopPropagation();
           emojiBox.classList.remove("emoji-show");
           others.classList.remove("others-show");
           inputText.value+=e.target.textContent;
         });
         }
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

        const cancel_id = $('.cancelPay').attr('data-id');
              //console.log(cancel_id);
             const orderid = <?php echo $get_order_data->id; ?>;
            $.ajax({

                type: 'POST',
                url: '{{  url(app()->getLocale()."/buyer_sell_request_accept") }}',
                data: {

                        '_token': "{{ csrf_token() }}",

                        'cancel_id' : cancel_id,
                        'order_id' : orderid,
                    },
                success: function (data) {
                    var count = parseInt(localStorage.getItem('timerValue')) ;
                    if(count){
                         localStorage.setItem('timerValue', 0);
                          $('.timer-div-section').html('');
                    }



                      //console.log(data.order_data.selectedCrypto_type);
                     // location.href = '{{  url(app()->getLocale()."/user/confirm-pay-method") }}';

                       triggerAlert('Your order has been cancled!', 'error');
                    },
                error: function(xhr, status, error) {

                        var erroJson = JSON.parse(xhr.responseText);
                        //console.log(erroJson);
                        triggerAlert('Something went wrong!', 'error');
                    }
            });

        });

</script>
<script>

        // $(".usrcancelPay").click(function(){

        // const cancel_id = $('.usrcancelPay').attr('data-id');
        //       console.log(cancel_id);
        //      const orderid = <?php echo $get_order_data->id; ?>;
        //     $.ajax({

        //         type: 'GET',
        //         url: '{{  url(app()->getLocale()."/user/confirmed-order-info") }}',
        //         data: {

        //             '_token': "{{ csrf_token() }}",

        //              'user_cancel_id' : cancel_id,
        //              'order_id' : orderid,
        //             },
        //             success: function (data) {

        //           window.location.reload();

        //             },
        //             error: function(xhr, status, error) {

        //                 var erroJson = JSON.parse(xhr.responseText);
        //                 console.log(erroJson);

        //             }
        //     });

        // });

</script>
<script>
        function refreshPage() {
            //location.reload(true);
        }


         var checkconfirmorderstatus = setInterval(function(){
         // window.location.reload();
         //history.go()
         const userid ='<?php echo Auth::user() ->id; ?>';
          //var order_id = sessionStorage.getItem('orderid');
          var order_id = '<?php echo $_SESSION['orderid']; ?>';
          $.ajax({

                type: 'POST',
                url: '{{  url(app()->getLocale()."/seller-check-order") }}',
                data: {

                    '_token': "{{ csrf_token() }}",

                    //  'user_cancel_id' : cancel_id,
                      'order_id' : order_id,
                    'userID' :userid,
                    },
                    success: function (data) {
                        //console.log(data);
                     if(data.rdata==1){
                    //  $("#my-div").load(window.location + "#my-div");
                    //  $("#my-div1").load(window.location + "#my-div1");
                    //  $("#my-div2").load(window.location + "#my-div2");
                    //  $("#my-div3").load(window.location + "#my-div3");
                    //  $("#my-div4").load(window.location + "#my-div4");
                    //  $('#my-div').show();
                    //  $('#my-div1').show();
                    //  $('#my-div2').show();
                    //  $('#my-div3').show();
                    //  $('#my-div4').show();
                    //   $('#trading-experience').show();

                    $('#my-div').load(' #my-div');
                    $('#my-div1').load(' #my-div1');
                    $('#my-div2').load(' #my-div2');
                    $('#my-div3').load(' #my-div3');
                    $('#my-div4').load(' #my-div4');
                    $('#trading-experience').load(' #trading-experience');

                     }
                   //window.location.reload();
                  // console.log(data);

                    },
                    error: function(xhr, status, error) {

                        var erroJson = JSON.parse(xhr.responseText);
                        //console.log(erroJson);

                    }
            })
             //ratingStatus ();
        }, 3000);

        var check_seller_order = setInterval(function(){

             const userid ='<?php echo Auth::user() ->id; ?>';
            //var order_id = sessionStorage.getItem('orderid');
            var order_id = '<?php echo $_SESSION['orderid']; ?>';
        $.ajax({
            type: 'POST',
            url: '{{  url(app()->getLocale()."/seller-check-order") }}',
            data: {
                    '_token': "{{ csrf_token() }}",

                    'userID' :userid,
                    'order_id':order_id,
                },
                success: function(data) {
              //console.log(data);
                    if(data.sellerDetail.order_status == 0){
                        $("#step-6").css("display", "none");
                        $('#step-1').addClass('is-active');

                    }
                    if(data.sellerDetail.order_status == 1){
                        $('#step-1').addClass('success');
                        $('#step-2').addClass('is-active');
                        $('#step-2').addClass('success');
                    }else{
                        $('#step-3').removeClass('is-active');
                        $('#step-4').removeClass('is-active');
                        $('#step-5').removeClass('is-active');

                    }
                    if(data.sellerDetail.buyer_confirmation_status == 1){
                        $('#step-3').addClass('is-active');
                        $('#step-3').addClass('success');
                    }else{
                        $('#step-3').removeClass('is-active');
                        $('#step-4').removeClass('is-active');
                        $('#step-5').removeClass('is-active');

                    }
                    if(data.sellerDetail.seller_confirmation_status == 1){
                        $('#step-4').addClass('is-active');
                        $('#step-4').addClass('success');
                    }else{
                        $('#step-4').removeClass('is-active');
                        $('#step-5').removeClass('is-active');

                    }
                    if((data.sellerDetail.buyer_confirmation_status == 1) && (data.sellerDetail.seller_confirmation_status == 1) && (data.sellerDetail.order_status == 1)){

                        //$('#step-6').removeClass('is-active');
                        $('#step-5').addClass('is-active');
                        $('#step-5').text('Order Completed');
                        $('#step-5').addClass('success');
                        clearInterval(checkconfirmorderstatus);
                        clearInterval(check_seller_order);


                    }
                    if((data.sellerDetail.order_status == 2) || (data.sellerDetail.order_status == 3) || (data.sellerDetail.order_status == 4)){
                         $('#step-5').text('Order Cancelled');
                            $('#step-2').addClass('cancel');
                            $('#step-3').addClass('cancel');
                            $('#step-4').addClass('cancel');
                            $('#step-5').addClass('cancel');
                            $('#step-1').removeClass('success');
                            $('#step-2').removeClass('success');
                            $('#step-3').removeClass('success');
                            $('#step-4').removeClass('success');
                            $('#step-5').removeClass('success');
                            clearInterval(checkconfirmorderstatus);
                            clearInterval(check_seller_order);
                              //localStorage.setItem('timerValue', 0);
                        //$('#step-5').removeClass('is-active');

                    }

                }
            })

        }, 2000);

    //     setInterval(function(){
    //       checkOrderStatus();
    //       $('#Timerstatus').load(' #Timerstatus');
    //       $('#buyer_confirmationForm').load('#buyer_confirmationForm');
    //   },1000);

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="{{ asset('js/alert.js') }}"></script>

    @if(!empty($buyer_details)&& $get_order_data->order_status==1)
<script>
    $(document).ready(function(){
    $('.exampleModalbtn').removeAttr('disabled');
    	// fetch_user();

    	setInterval(function(){
    // 		update_last_activity();
    		// fetch_user();
    		update_chat_history_data();
    		//fetch_group_chat_history();
    	}, 1000);

    	// function fetch_user()
    	// {
    	// 	$.ajax({
    	// 		url:"{{ route('fetch-user') }}",
    	// 		method:"POST",
        //         data: {
        //             "_token": "{{ csrf_token() }}"

        //             }
    	// 		success:function(data){
    	// 			$('#user_details').html(data);
    	// 		}
    	// 	})
    	// }

    	function update_last_activity(){
    		$.ajax({
    			url:"{{ route('update-last-activity') }}",
    			success:function()
    			{

    			}
    		})
    	}



    	$(document).on('ready', function(){
    		var to_user_id =  "{{$buyer_details->id}}";
    		var to_user_name =  "{{$buyer_details->id}}";
    		//make_chat_dialog_box(to_user_id, to_user_name);
    		// $("#user_dialog_"+to_user_id).dialog({
    		// 	autoOpen:false,
    		// 	width:400
    		// });
    		// $('#user_dialog_'+to_user_id).dialog('open');
    		$('#chat_message_{{$buyer_details->id}}').emojioneArea({
    			pickerPosition:"top",
    			toneStyle: "bullet"
    		});
    	});

    	$(document).on('click', '.send_chat', function(){
    		var to_user_id = $(this).attr('id');
    		var chat_message = $.trim($('#chat_message_'+to_user_id).val());
         // alert(chat_message);
    		var chat_image = $.trim($('#chat_img').html())
    		var img_path = $("#chat_img .chat_img").attr('src');

    		//var order_id = <?php //echo $_SESSION['orderid']; ?>;
    			var order_id = '<?php echo $_SESSION['orderid']; ?>';

    		//alert(chat_image);
    		if (chat_message != ''){
    			chat_messages = chat_message;
    		}else{
    		  //  alert();
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
    				// 	var element = $('#chat_message_'+to_user_id).emojioneArea();
    				// 	element[0].emojioneArea.setText('');

    					$('#chat_history_'+to_user_id).html(data);
    					$("#uploadImage").val('');
    					$("#chat_img").val('');
    					$("#chat_img").addClass('hide');
    					$('.input-send').removeClass('hide');
                        $('.button-add').removeClass('hide');

    				}
    			})

    		}
    		else
    		{
    		//	alert('Type something');
    		}
    	});


    	function fetch_user_chat_history(){
          var to_user_id = "{{$buyer_details->id}}";
          //var order_id = <?php //echo $_SESSION['orderid']; ?>;
          var order_id = '<?php echo $_SESSION['orderid']; ?>';

    		$.ajax({
    			url:"{{ route('fetch-user-chat-history') }}",
    			method:"POST",
    			data:{  "_token": "{{ csrf_token() }}",to_user_id:to_user_id,order_id:order_id},
    			success:function(data){
                //alert(data);
    				$('#chat_history_'+to_user_id).html(data);
    				setscrollHeight();
    			}
    		})
    	}

    	function update_chat_history_data(){
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

    	// $('#group_chat_dialog').dialog({
    	// 	autoOpen:false,
    	// 	width:400
    	// });

    	// $('#group_chat').click(function(){
    	// 	$('#group_chat_dialog').dialog('open');
    	// 	$('#is_active_group_chat_window').val('yes');
    	// 	fetch_group_chat_history();
    	// });

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
    		//	alert('Type something');
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


       $(document).ready(function(){
            var jq = $.noConflict();
        $('#uploadFile').on('change', function(){
        var to_user_id = $('#chat_message_{{$buyer_details->id}}').val();
        $('#chat_img').removeClass('hide');
        //$('.others').removeClass('others-show');
        $('.input-send').addClass('hide');
        //$('.button-add').addClass('hide');
        $('#uploadImage').ajaxSubmit({
       //$.ajax({
          // url:"{{ route('upload-image') }}",
    		// method:"post",
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
        var fileExtension = $(this).val().split('.').pop().toLowerCase();
        if ($.inArray(fileExtension, ['jpg', 'jpeg' , 'png']) == -1) {
          //alert("Please select a file with a JPG or JPEG extension.");
          triggerAlert('Please select a file with a JPG , JPEG or PNG extension.', 'error');
          $(this).val('');
        }
      });
    });

    $(document).ready(function(){
        // $("#confirmButton").click(function(){
        //     var checkbox = $("#myCheckbox").prop("checked");
        //     var file = $("input[type='file']").prop("files")[0];
        //     var formData = new FormData( $('#seller_confirmationForm')[0]);
        //     $.ajax({
        //         url: '{{ route('seller-confirmation-status') }}',

        //         type: 'POST',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         success: function(data){
        //             // Success message
        //         },
        //         error: function(xhr, status, error){
        //             // Error message
        //         }
        //     });
        // });


            $('#myCheckbox').click(function (){
             if($('#myCheckbox').is(":checked")){
                $("#confirmButton").removeAttr('disabled');
                $("input[type='file']").removeAttr('disabled');
             }else{
                 $('#confirmButton').attr('disabled', 'disabled');
                 $("input[type='file']").attr('disabled', 'disabled');
             }
            });

        $("#confirmButton").click(function(){

            if($('#myCheckbox').is(":checked")){


                    var orderid = sessionStorage.getItem('orderid');

                var checkbox = $("#myCheckbox").prop("checked");
                var file = $("input[type='file']").prop("files")[0];
                var formData = new FormData( $('#seller_confirmationForm')[0]);
                  formData.append('orderid', orderid);
                // formData.append('checkbox', checkbox);
                // formData.append('file', file);
                $.ajax({
                    url: '{{ route('seller-confirmation-status') }}',
                    beforeSend: function(){
                        $(".seller_payment_proof_spinner").html("<div class='alert alert-success'>Sending....</div>");
                        $(".seller_payment_proof_spinner").css("pointer-events","none");
                        $("#confirmButton").attr('disabled', 'disabled');
                    },
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        // Success message
                         $("#confirmButton").removeAttr('disabled');
                        $(".if_paymentIssue").css("display","block");
                        $(".seller_payment_proof_spinner").text("");
                        $(".seller_payment_proof_spinner").css("pointer-events","none");
                        $('#confirmButton').attr('disabled', 'disabled');
                        $("input[type='file']").attr('disabled', 'disabled');
                        $('#seller_confirmationForm')[0].reset();
                        $('#seller_confirmationForm .btn-close').click();
                        },
                         complete: function (data) {



                                                     },
                    error: function(xhr, status, error){
                        $(".seller_payment_proof_spinner").text(" ");
                        $(".seller_payment_proof_spinner").addClass('error');
                        var erroJson = JSON.parse(xhr.responseText);
                        //console.log(erroJson.errors.file);
                        $(".seller_payment_proof_spinner").text(erroJson.error.file);
                        //  console.log(erroJson.error.file);
                        triggerAlert( erroJson.error.file, 'error');

                        setTimeout(function(){
                            $(".seller_payment_proof_spinner").removeClass('error');
                            $(".seller_payment_proof_spinner").text('');
                        }, 2000)
                    }
                });

        }else{
         //  alert('accept TOC.');
           $('#confirmButton').attr('disabled', 'disabled');
        }
    });


        $("#request_crypto_transfer").click(function(){
                var request_crypto_transfer = $(this).val();
               // alert(request_crypto_transfer);
                $.ajax({
                    url: '{{ route('request-amount-transfer') }}',

                    type: 'POST',
                    data: {"_token": "{{ csrf_token() }}",request_crypto_transfer:request_crypto_transfer},

                    success: function(data){
                        // Success message
                    },
                    error: function(xhr, status, error){
                        // Error message
                    }
                });
            });
        });
</script>
<script>

            function orderrating(id){
                $('#'+id).css({'background': '#fdb919'});
                var rating_type = id;
                var seller_id =  '<?php echo Auth::user()->id; ?>';

                //alert(rating_type);
                $.ajax({
        			url:"{{ route('seller-ratings') }}",
        			method:"POST",
        			data:{ "_token": "{{ csrf_token() }}",rating_type:rating_type,seller_id:seller_id},
        			success:function(data)
        			{
            		 $('#'+id).css({'background': '#fdb919'});
            		  $('#'+id).siblings().css({'background': 'none'});
                       var rating_msg = data.message;
                       triggerAlert(rating_msg, 'success');

            		}
        		})
            }

            function focusInput() {
                $('#have-a-question .btn-close').click();
                document.getElementById("chat_message_{{$buyer_details->id}}").focus();

            }

            function deleteRating(id){
                var orderid = id;
                var trader_type = 'seller_id';
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
                            triggerAlert(data.message, 'success');

                        },
                        error: function(xhr, status, error){
                            var errors = JSON.parse(xhr.responseText);
                         //   console.log(errors);
                            triggerAlert('No review found!', 'error');
                        },

                });
            }

            function ratingStatus(){   // this checks

            //var order_id = '<?php //echo $_SESSION['orderid'] ?>';
             var order_id = sessionStorage.getItem('orderid');
           // alert(order_id);
            $.ajax({
            url: '{{ route('check-ratingStatus') }}',

            type: 'POST',
            data: {
            "_token" : "{{ csrf_token() }}",
            'order_id' : order_id

            },

            success: function(data){
                // console.log(data.records.positive_rating);
              //   console.log(data.records.negative_rating);

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
                // Success message
               // $('.trading_experiance').css({'display':'block'})
            },
            error: function(xhr, status, error){
                // Error message
            }
        });
    };

</script>
<script>


</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
        // var duration = moment.duration(1, 'minutes');
        // var interval = 1000;

        //  var timer = setInterval(function() {
        //     duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
        //     var minutes = duration.minutes();
        //     var seconds = duration.seconds();

        //     $('#countdown').text(minutes + ' minutes and ' + seconds + ' seconds remaining');

        //     if (duration.asMilliseconds() <= 0) {
        //         var id = <?php //echo $_SESSION['orderid']; ?>;
        //         var url = "{{ route('cancel-order', ['id' => ':id']) }}".replace(':id', id);
        //         $.ajax({
        //             url:  url,

        //             type: 'GET',
        //             success: function(response) {

        //                 console.log('Your order has been cancelled.');
        //                 clearInterval(timer);
        //             },
        //             error: function(xhr, status, error) {
        //                 // Handle errors here
        //             }
        //         });
        //     }
        // }, interval);

        // function stop() {
        // clearInterval(timeout);
        // }
</script>

<script>
//     <script>
//     <script>
//     var duration = moment.duration(1, 'minutes');
//     var interval = 1000;

//     var timeout = setInterval(function() {
//         duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
//         var minutes = duration.minutes();
//         var seconds = duration.seconds();

//         $('#countdown').text(minutes + ' minutes and ' + seconds + ' seconds remaining');

//         if (duration.asMilliseconds() <= 0 || <?php //echo $orderAccepted ? 'true' : 'false'; ?>) {
//             clearInterval(timeout);
//             if (!<?php //echo $orderAccepted ? 'true' : 'false'; ?>) {
//                 var id = <?php //echo $_SESSION['orderid']; ?>;
//                 var url = "{{ route('cancel-order', ['id' => ':id']) }}".replace(':id', id);
//                 $.ajax({
//                     url: url,
//                     type: 'GET',
//                     success: function(response) {
//                         console.log('Your order has been cancelled.');
//                     },
//                     error: function(xhr, status, error) {
//                         // Handle errors here
//                     }
//                 });
//             }
//         }
//     }, interval);

//     function stop() {
//         clearInterval(timeout);
//     }

//     function acceptOrder() {
//         orderAccepted = true;

//         stop();
//     }
//
</script>
<script>
    (() => {
      new EmojiPicker()
    })()
</script>
@endif



<!-------------------------new appeal page js---------------------------------->

<script>
    function c(){ // on 1rd step
        //  console.log('appeal 1step');
    	var n =$('.c').attr('id');
        var c=n;
	    $('.c').text(c);
	    setInterval(function(){
		c--;
		if(c>=0){
			$('.c').text(c);
		}
        if(c==0){
          // $('.c').text("0");
          $('.req_help_ser').html('');
           $('.req_help_ser').html('<a href="#" class="yellow-text a-req_cutomer  fw-bolder">Request for Customer Service</a> ');

        }
	    },1000);
    }
    c();
// Start



    var text_max = 500;
    $('#count_message').html(text_max + ' remaining');
      $('#appeal_description').keyup(function() {
      var text_length = $('#appeal_description').val().length;
      var text_remaining = text_max - text_length;
      $('#count_message').html(text_remaining);
    });


    jQuery(document).ready(function () {
      ImgUpload();
    });

    function ImgUpload(){
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




<!-------------------------new appeal page js---------------------------------->

<script>




</script>

<script>
    if(localStorage.getItem("previouStatus") === null || localStorage.getItem("previouStatus") == 2 ){
         localStorage.setItem("previouStatus", 0);
    }
    var paymettimeervalue = <?php echo $get_order_data->payment_time_limit; ?>;
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

    function start() {
        var orderId = <?php echo $_SESSION['orderid']; ?>;
        //var remainingTime = 1 * 60;
        var orderStatus = <?php echo $orderStatus=$get_order_data->order_status; ?>;
        var buyer_confirmation_status = <?php
                                            $buyer_confirmation_status = $get_order_data->buyer_confirmation_status;
                                            if(!empty($buyer_confirmation_status)){
                                                echo $buyer_confirmation_status;

                                            } else {
                                                echo $buyer_confirmation_status=0;
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
        // var counter = 1 * 60;
        // var minutes ,seconds;

        if (orderStatus == 1 && buyer_confirmation_status == 0  && order_accept_action == 1  ) {
            var gettimerValue = parseInt(localStorage.getItem('timerValue'));
            if(gettimerValue === 0){
                 var paymettimeervalue = <?php echo $get_order_data->payment_time_limit; ?>;
                 var Time = 1 * paymettimeervalue * 60;
                localStorage.setItem('timerValue', Time);
            }

            offtimer = setInterval(function() {


                  var count = parseInt(localStorage.getItem('timerValue'));

                var minutes = Math.floor(count / 60);
                var seconds = count % 60;
                if (count >= 0) {
                   //  count--;
                    $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
                    update(count);
                }
                localStorage.setItem('timerValue', count);

                if (count === 0) {
                    clearInterval(offtimer);
                    $('.timer-div-section').html('');
                      localStorage.setItem('timerValue', 0);
                    $.get('{{ route('seller-side-cancel-order', ['id' => ':id']) }}'.replace(':id', orderId), function(response) {
                          if (response.success) {
                              chek_notification();
                            //console.log('Order cancelled successfully');
                               triggerAlert('System Cancelled!', 'error');
                          }
                        //   else {
                        //       triggerAlert('If payment released by buyer please you have to released asset to buyer', 'error');
                        //     $('#timer').html('');
                        //   }
                    });
                }
            }, 1000);
        }

        else if(orderStatus == 1 && buyer_confirmation_status == 1 && order_accept_action == 1 && seller_confirmation_status == null) {
        // console.log('else if 6');

            offtimer1 = setInterval(function() {

                 var count = parseInt(localStorage.getItem('timerValue'));

                var minutes = Math.floor(count / 60);
                var seconds = count % 60;

                if (count >= 0) {
                    // count--;
                    $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
                    update(count);
                }
                localStorage.setItem('timerValue', count);
                if (count === 0) {
                    $('.timer-div-section').html('');
                      localStorage.setItem('timerValue', 0);
                    clearInterval(offtimer1);

                     triggerAlert('If payment released by buyer please you have to released asset to buyer', 'error');

                }
            }, 1000);
        }
        else {
            $('#timer').text('');
            clearInterval(offtimer);
            clearInterval(offtimer1);
            $('.timer-div-section').html('');
              localStorage.setItem('timerValue', 0);
        }
    }
    function checkOrderStatus() {
         return new Promise(function(resolve, reject) {
               var orderId = '<?php echo $_SESSION['orderid']; ?>';
        //var orderId = sessionStorage.getItem('orderid');
        $.get('{{ route('check-order-status', ['id' => ':id']) }}'.replace(':id', orderId), function(response) {
             const orderStatus = response.status.order_status;
              const seller_confirmation_status = response.status.seller_confirmation_status;
                const buyer_confirmation_status = response.status.buyer_confirmation_status;
           // console.log(response);
            if (response.status.order_status == 1 && response.status.buyer_confirmation_status == null && response.status.order_accept_action == 1) {
                if(localStorage.getItem("previouStatus") != response.status.order_status){
                    chek_notification();
                    //  $('#timer').text('');
                    // clearInterval(offtimer);
                    localStorage.setItem("previouStatus", 1) ;
                  //  start();
                }

            }
            if (response.status.order_status == 1 && response.status.buyer_confirmation_status == 1 && response.status.order_accept_action== 1 && response.status.seller_confirmation_status== null) {
                var count = parseInt(localStorage.getItem('timerValue'));
                    if (!count) {
                          localStorage.setItem('timerValue', 0);
                        $('.timer-div-section').html('');
                    }
                 if(localStorage.getItem("previouStatus") != 0 && localStorage.getItem("previouStatus") == 1 && localStorage.getItem("previouStatus") != 2){
                     chek_notification();
                    //  $('#timer').text('');
                    // clearInterval(offtimer);

                    localStorage.setItem("previouStatus", 2) ;
                 //   start();
                }
            }

            if (response.status.order_status == 1 && response.status.buyer_confirmation_status == 1 && response.status.order_accept_action== 1 && response.status.seller_confirmation_status== 1) {
                 if(localStorage.getItem("previouStatus") == 2){
                     chek_notification();
                    //  $('#timer').text('');
                    // clearInterval(offtimer);
                    triggerAlert('Order confirmed', 'success');
                    localStorage.setItem("previouStatus", null) ;
                  // start();
                }
            } resolve({
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
        //var orderid = sessionStorage.getItem('orderid');
         var orderid ='<?php echo $_SESSION['orderid']; ?>';
    $.ajax({
            url: '{{ route('CheckSellerNotification') }}',
            method: 'POST',
            data: {
            '_token' : '{{ csrf_token() }}',
            'orderid' : orderid,
            'trader_id' : '{{ Auth::user()->id }}'
            } ,
            success:function(data){
            // console.log(data) ;



            },
            error: function(xhr, status, error){
                // console.log(xhr) ;
            },

         });



    }


     const intervalId = setInterval(getOrderStatus, 1000);
    async function getOrderStatus() {
        try {

            const { orderStatus, seller_confirmation_status, buyer_confirmation_status } = await checkOrderStatus();

            // console.log(orderStatus);
            // console.log(seller_confirmation_status);
            // console.log(buyer_confirmation_status);


            if (Math.floor(orderStatus) === 4 || Math.floor(orderStatus) === 2 || Math.floor(orderStatus) === 3) {
              clearInterval(intervalId);
              $('.timer-div-section').html('');
              var count = parseInt(localStorage.getItem('timerValue'));
                        if (count) {
                              localStorage.setItem('timerValue', 0);
                            clearInterval(offtimer);


                        }

            }

            if (Math.floor(orderStatus) === 1 && Math.floor(seller_confirmation_status) === 1 && Math.floor(buyer_confirmation_status) === 1) {
              clearInterval(intervalId);
              var count = parseInt(localStorage.getItem('timerValue'));
                        if (count) {
                              localStorage.setItem('timerValue', 0);
                            clearInterval(offtimer);
                            $('.timer-div-section').html('');

                        }
            }



        } catch (error) {
            //console.log(error);
        }
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
// $('html, body').animate({
//                                     scrollTop: $(".chat-room").offsetscrollHeight
//                                 }, 500);
}
</script>
   </body>
</html>
