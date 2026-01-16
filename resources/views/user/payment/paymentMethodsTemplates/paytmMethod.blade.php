<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/payments.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      @include('template.web_css')
      <style>
         .bi-x{
         color:red;
         float: right;
         }
         .confirm-btn-box .btn {
         width: 195px;
         }
         .cancel-btn-box .btn {
         width: 195px;
         }
         .paytm-inner-block{
         position:relative;
         }
         .all_success-paytm-alert{
         float: inherit;
         position: absolute!important;
         right: 0;
         top: -80px;
         }
         .paytm-heading:before{
         content: '';
         border-left: 3px solid orange;
         padding-right: 5px;
         }
         .confirm-btn-box .btn {
         margin-top: 5px;
         }
         .cancel-btn-box .btn {
         margin-top: 5px;
         }
         .sidebar-nav {
         display: block;
         }
         .dashboard-main {
         margin-top: 0px !important;
         }
         @media(max-width:420px){
         .cancel-btn-box .btn {
         width: 150px;
         }
         .confirm-btn-box .btn {
         width: 150px;
         }
         }
         @media(max-width:350px){
         .cancel-btn-box .btn {
         width: auto;
         }
         .confirm-btn-box .btn {
         width: auto;
         }
         }
         .bank-footer-btn-block{
         display:flex;
         justify-content: space-between!important;
         }
         .indian-bank-row-inner .alert {
         position: relative;
         padding: 02px 2px!important;
         margin-bottom: 0rem!important;
         border: 1px solid transparent;
         border-radius: 0.25rem;
         font-size:12px;
         }
         .confirm-btn-box{
         margin:0px 05px 0px 0px;
         }

         .paytm-breadcrumbs{
         box-shadow:none!important;
          padding-left: 0!important;
         }
         .upload-qr-box{
         box-sizing: border-box;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         flex-direction: column;
         background: rgb(250, 250, 250);
         border: 1px dashed rgb(230, 232, 234);
         width: 80px;
         text-align: center;
         cursor: pointer;
         margin: auto;
         }
         .upload-qr-block {
         box-shadow: 0px 0px 1px 0px;
         padding:10px;
         }
         .paymentMethod_QRcaption div{
            display:block!important;
        }
            span.account_number_error {
                font-size: 14px;
            }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <div class="dashboard-main">
         @include('template.sidebar')
         <div class="container-fluid mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
            <div class="paytm-breadcrumbs-block">
               <div class="css-breadcrumbs_div px-0">
                  <a data-bn-type="link" class="css-breadcrumbs_anchore" href="{{ url(app()->getLocale().'/user/payment') }}">P2P Payment</a>
                  <i class="bi bi-chevron-right"></i>
                  <span class="css-breadcrumbs_method">Add payment method</span>
               </div>
            </div>
            <section class="payment_method_section mb-2rem paytm-container paytm-breadcrumbs">
               <div class="paytm-wrapper">
                  <div class="paytm-container">
                     <div class="paytm-inner-block">
                        <div class="all_success alert all_success-paytm-alert" ></div>
                        <form action="#" id="paytm_form">
                               <div class="row">
                                      <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="all_error alert alert-danger" style="display:none"> </div>
                                        <div data-bn-type="text" title="Paytm" class="paytm-heading">Paytm</div>
                                      </div>
                                </div>

                                <div class="row mt-3">
                                          <div data-bn-type="text" class="col-md-12">
                                             <div class="text">
                                                Note: The added payment method will be shown to the buyer during the transaction to accept fiat transfers.
                                                Please ensure that the information is correct, real, and matches your KYC information on Wealthmark.
                                             </div>
                                          </div>
                                 </div>

                        <div class="row">
                           <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                                <div class="form-floating mb-3">
                                    <div data-bn-type="text" class="form-control">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</div>

                                    <label for="account_holder">Name</label>

                                    <div class="paytm-user-info">
                                 <input type="hidden"  id="user_id" name="user_id"  value="{{ Auth::user()->id}}">
                                 <input type="hidden"  id="account_holder" name="account_holder"  value="{{ Auth::user()->first_name.' '.Auth::user()->last_name}}">
                                 <input type="hidden"  id="method_type" name="method_type"  value="Paytm">
                                 <input type="hidden"  id="bank_name" name="bank_name"  value="Paytm">
                                 <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                              </div>
                                </div>





                           </div>


                           <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="form-floating mb-3">
                                      <input data-bn-type="input" id="account_number" class="form-control" placeholder="Enter your account number" name="account_number" maxlength="100" value="{{ ($chkpaytmMedhods && $chkpaytmMedhods->account_number) ? $chkpaytmMedhods->account_number : old('account_number')}}">
                                    	<label for="account_number">UPI ID</label>
                                     <span class="account_number_error "></span>
                                 </div>
                           </div>





                        </div>

                        <div class="row">
                             <div class="col-lg-3 col-md-4 col-sm-6 mb-4 text-center">
                             <div class="upload-qr-block">
                                  <div class="paytm">
                                 @if($chkpaytmMedhods && ($chkpaytmMedhods->qr_code != NULL))
                                 <i class="bi-x"></i></br>
                                 <img  class="img-thumbnail "   width="100px" src="{{ url('storage/app/'.$chkpaytmMedhods->qr_code) }}" alt="" title="" />
                                 <input type="hidden"  id="uploadedQR" name="uploadedQR"  value="{{ ($chkpaytmMedhods && ($chkpaytmMedhods->qr_code != NULL) ? $chkpaytmMedhods->qr_code : '' ) }}"   >
                                 @endif
                              </div>
                              <div class="qrmsg">Payment QR code(Optional)</div>
                              <span class="paymentMethod_QRcaption"></span>
                              <div class="upload-qr-box">
                                 <label for="uploads">
                                    <i class="bi bi-upload"></i>
                                    <div>Upload</div>
                                 </label>
                                 <input type="file" accept=".jpg,.jpeg,.png,.bmp" id="uploads" name="uploads" style="display: none;" onChange="payment_method_caption(this.id);">
                              </div>
                              <span>(JPG/JPEG/PNG/BMP, less than 1MB)</span>
                              <div></div>
                             </div>
                           </div>
                        </div>

                         <div class="row">
                                          <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-between bank-footer-btn-block mb-4 mt-3">
                                              <div class="confirm-btn-box">
                                                <button data-bn-type="button" type="button" class="btn btn-yellow shadow" id="add_method" style="display:none">Confirm</button>
                                                 <button data-bn-type="button" type="button" class="btn btn-yellow shadow confirm_otp" data-target-modal="payMethod_otp_popup" >Add Now</button>
                                             </div>

                                             <div class="cancel-btn-box">
                                                 <button data-bn-type="button" type="button" class="btn btn-blue shadow cancelpaytm">Cancel</button>
                                             </div>

                                          </div>
                                      </div>

                        </form>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>

      @include('template.web_footer')
        @include('user.payment.paymentMethodsTemplates.mobileVerificationToaddPayment')
      @include('template.web_js')
   </body>
   <script src="{{ asset('assets/js/alert.js') }}"></script>
   <script>
        function getformvalues() {

    const data = {};

    $data = {'account_number' : $("#account_number").val(), 'qr' : $("#uploads").val()};
    return $data;


    };

    $(document).ready(function() {
            console.log(getformvalues().account_number);
             console.log(getformvalues().qr);


           const preFilled_account_number =  getformvalues().account_number;
            const preFilled_qr =  getformvalues().qr;

            // when page is getting loaded and  all fields are prefilled hence confirm button should be active on first page loading.
            if( (preFilled_account_number.length > 0 ) ){
                            $("#add_method").css({'display' : 'block'});
                            $(".confirm_otp").css({'display' : 'none'});
            }
            // end, when page is getting loaded and  all fields are prefilled hence confirm button should be active on first page loading.

            $("#account_number").keyup(function() {

                  console.log($("#uploads").val());
                 console.log(preFilled_qr);
                 console.log($("#account_number").val());
                console.log(preFilled_account_number);

                // for preFilled_account_number
                    if(preFilled_account_number.length > 0){
                            if ($("#account_number").val() == preFilled_account_number && $("#uploads").val() == preFilled_qr ) {
                                  console.log('equal');
                                  $("#add_method").css({'display' : 'block'});
                                  $(".confirm_otp").css({'display' : 'none'});

                                } else {
                                  console.log('not equal');
                                  $("#add_method").css({'display' : 'none'});
                                  $(".confirm_otp").css({'display' : 'block'});
                                }

                       }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
            });

            $("#uploads").on("change", function() {
                 console.log($("#uploads").val());
                 console.log(preFilled_qr);
                 console.log($("#account_number").val());
                console.log(preFilled_account_number);
                // for preFilled_account_number
                    if($("#uploads").val().length > 0){
                            if ($("#uploads").val() == preFilled_qr && $("#account_number").val() == preFilled_account_number) {
                                  console.log('equal');
                                  $("#add_method").css({'display' : 'block'});
                                  $(".confirm_otp").css({'display' : 'none'});

                                } else {
                                  console.log('not equal');
                                  $("#add_method").css({'display' : 'none'});
                                  $(".confirm_otp").css({'display' : 'block'});
                                }

                       }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
            });


    });
   </script>
   <script>
      $("#paytm_form .bi-x").click(function(){
         $('#paytm_form input[type=file]').val('');
          $('#uploadedQR').val('');

          $('#paytm_form .paytm').html('');
      });

      $(".cancelpaytm").click(function(){
          window.location.href = '{{ url(app()->getLocale().'/user/payment')}}';
      });

         $("#paytm_form #add_method").click(function(){
          // console.log('paytm clicked');
             if($("#account_number").val() == 0 || $("#account_number").val() === undefined ||  $("#account_number").val().length > 25  ){
                // $("#paytm_form .account_number_error").html('Valid Acoount number required and should be less than 25 characters!');

                // setTimeout( function(){
                //   $("#paytm_form .account_number_error").html('');
                // } , 3000);
                  triggerAlert('Valid Paytm UPI required and should be less than 25 characters!', 'error');

             }else{
             //   console.log('validatiion passed');


                           var paytm_formData = new FormData( $('#paytm_form')[0]);
                            paytm_formData.append('ifuploadSelected' , $("#uploads").val());
                             paytm_formData.append('ifuploadedQR' , $("#uploadedQR").val());

                                             	$.ajax({
                                          					type: "POST",

                                                              url: "<?php echo url(app()->getLocale().'/user/payment/c2c/add/Paytm');  ?>",
                                                              enctype : 'multipart/form-data',
                                                              processData: false,
                                                              contentType: false,
                                                              data : paytm_formData,

                                                          	success: function(data) {

                                                                       if(data.success == 200){
                                                                        // triggerAlert('Congratulations! Account addded successfully.', 'success');
                                                                        triggerAlert('Congratulations! Detail Submitted Successfully.', 'success');
                                                                        // $(".paytm-container .all_success").html('Submitted Successfully!');
                                                                        //  $('.paytm-container .all_success').addClass('alert-success');
                                                                        //  console.log(data.account_number);
                                                                        // document.getElementById("paytm_form").reset();

                                                                         $("#paytm_form #account_number").val(data.account_number);

                                                                              if(data.paytmQR != ''){
                                                                                  $("#paytm_form .paytm").html('');
                                                                                 $("#paytm_form .paytm").append('  <i class="bi-x"></i></br><img class="img-thumbnail " width="100px" src="/storage/app/'+data.paytmQR +'" alt="" title="">');
                                                                              }
                                                                         }

                                                                          if(data.error){
                                                                               triggerAlert('detail already exist!', 'error');
                                                                            //   $("#paytm_form .account_number_error").html('detail already exist!');
                                                                            //   $('#paytm_form .account_number_error').addClass('alert alert-danger');
                                                                          }

                                                                        setTimeout( function(){
                                                                                    // $(".paytm-container .all_success").html('');
                                                                                    // $('.paytm-container .all_success').removeClass('alert-success');
                                                                                    // $("#paytm_form .account_number_error").html('');
                                                                                    // $('#paytm_form .account_number_error').removeClass('alert alert-danger');

                                                                              window.location.href = '{{ url(app()->getLocale().'/user/payment')}}';
                                                                         }, 2000);



                                                                     },

                                                             error: function(xhr, status, error) {
                                                                                     var erroJson = JSON.parse(xhr.responseText);
                                                                                     //alert(erroJson.error);
                                                                                     var account_number_error = erroJson.error.account_number;

                                                                                     //  $.each(erroJson.error, function(key, value){
                                                                                     //     $("#paytm_form .all_error").html(key + ": " + value + '<br>');
                                                                                     // });

                                                                                       if(account_number_error){

                                                                                       $('#account_number').css({'border' : '1px solid red'});
                                                                                       $("#paytm_form .account_number_error").html('Valid Paytm UPI required and should be less than 25 characters!');
                                                                                       $('#paytm_form .account_number_error').addClass('alert-danger');
                                                                                        }


                                                                                      setTimeout(function(){
                                                                                          $('#account_number').css({'border' : '1px solid #ced4da'});
                                                                                          $("#paytm_form .account_number_error").html('');
                                                                                          $('#paytm_form .account_number_error').removeClass('alert-danger');
                                                                                          }, 4000);

                                                                                     }

                                          				});
                                         }
                          });





   </script>
   <script>
      function payment_method_caption(id){
      console.log(id);

      var input = document.getElementById( 'id');
      var input = event.srcElement;

      $("#paytm_form .paymentMethod_QRcaption").append('<div class="d-flex bg-gray" id="" style="margin: 10px 0px;">  <i class="bi bi-image" style="padding-right: 10px;"></i> '+input.files[0].name+' <div onClick="captionRemove()"  class="file_delete"><i class="bi bi-x-circle-fill"></i> </div></div>  ');
      }



      function captionRemove(){
      //alert();

      $('#paytm_form input[type=file]').val('');
      $("#paytm_form .paymentMethod_QRcaption").html('');




      }
   </script>
      <script>
   // this verifies input fields validation on before send OTP


       $('.confirm_otp').click(function(){
             if($("#account_number").val() == 0 || $("#account_number").val() === undefined ||  $("#account_number").val().length > 25  ){

                 var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');
                 triggerAlert('Valid Paytm UPI required and should be less than 25 characters!', 'error');
             }
       });
   </script>
</html>
