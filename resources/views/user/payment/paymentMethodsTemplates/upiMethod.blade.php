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
         span.upi_Id_error {
                font-size: 14px;
            }
      .paymentMethod_QRcaption div{
            display:block!important;
            margin:auto;
        }

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
         .upi-inner-block-main{
         position:relative;
         }
         .all_success-upi-alert{
         float: inherit;
         position: absolute!important;
         right: 0;
         top: -80px;
         }
         .upi-heading:before{
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
         .bank-breadcrumbs-box{
         padding-left: 0!important;
         }
         .bank-breadcrumbs-box{
         box-shadow:0px!important;
         }
         .upi-css-breadcrumbs{
             box-shadow:none!important;
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
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <div class="dashboard-main">
         @include('template.sidebar')
         <div class="container-fluid mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
            <div class="upi-css-breadcrumbs">
               <div class="css-breadcrumbs_div px-0">
                  <a data-bn-type="link" class="css-breadcrumbs_anchore" href="{{ url(app()->getLocale().'/user/payment') }}">P2P Payment</a>
                  <i class="bi bi-chevron-right"></i>
                  <span class="css-breadcrumbs_method">Add payment method</span>
               </div>
            </div>
            <section class="payment_method_section mb-2rem UPI-container">
               <div class="upi-wrapper">
                  <div class="upi-container">
                     <div class="upi-inner-block-main">
                        <div class="css-12rpxgg all_success alert all_success-upi-alert" ></div>
                        <form action="#" id="upi_Id_form">
                                    <div class="row">
                                      <div class="col-lg-3 col-md-4 col-sm-6">
                                         <div class="all_error alert alert-danger" style="display:none">
                                         </div>
                                         <div data-bn-type="text" title="upi Id" class="upi-heading">UPI ID</div>
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
                                                   <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            	<div data-bn-type="text" class="form-control">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</div>
                                            	<label for="account_holder">Name</label>

                                                <div class="css-19oj9bu">
                                                     <input type="hidden"  id="user_id" name="user_id"  value="{{ Auth::user()->id}}">
                                                      <input type="hidden"  id="account_holder" name="account_holder"  value="{{ Auth::user()->first_name.' '.Auth::user()->last_name}}">
                                                       <input type="hidden"  id="method_type" name="method_type"  value="UPI">


                                                </div>
                                             </div>




                                    </div>
                                         <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                            <div class="form-floating mb-3">
                                                 <input data-bn-type="input" id="upi_Id" class="form-control" placeholder="Enter your Upi ID" name="upi_Id" maxlength="100" class="css-16fg16t" value="{{ ($chkupiMedhods && $chkupiMedhods->upi_Id) ? $chkupiMedhods->upi_Id : old('upi_Id')}}">
                                                 <label for="upi_Id">UPI ID</label>
                                                <span class="upi_Id_error"></span>
                                            </div>
                                        </div>


                                   </div>
                                  <div class="row mb-4">
                                        <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                                            <div class="upload-qr-block">
                                                         <div class="upi_Id">
                                                       @if($chkupiMedhods && ($chkupiMedhods->qr_code != NULL))
                                                         <i class="bi-x"></i></br>
                                                         <img  class="img-thumbnail "   width="100px" src="{{ url('storage/app/'.$chkupiMedhods->qr_code) }}" alt="" title="" />
                                                          <input type="hidden"  id="uploadedQR" name="uploadedQR"  value="{{ ($chkupiMedhods && ($chkupiMedhods->qr_code != NULL) ? $chkupiMedhods->qr_code : '' ) }}">
                                                         @endif
                                                    </div>

                                                        <div  class="qrmsg">UPI ID QR code(Optional)</div>
                                                          <span class="paymentMethod_QRcaption"></span>

                                                        <div class="upload-qr-box">
                                                            <input type="file" accept=".jpg,.jpeg,.png,.bmp" id="uploads" name="uploads" style="display: none;" onChange="payment_method_caption(this.id);">

                                                            <div data-bn-type="text" class="css-jhdjgf"><label for="uploads"><i class="bi bi-upload"></i> <div>Upload</div></label></div>
                                                        </div>
                                                            <span class="css-1qborlq">(JPG/JPEG/PNG/BMP, less than 1MB)</span>
                                                            <div class="css-19oj9bu"></div>
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

                                              <button data-bn-type="button" type="button" class="btn btn-blue shadow cancelupi_id">Cancel</button>
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

    $data = {'account_number' : $("#upi_Id").val(), 'qr' : $("#uploads").val()};
    return $data;


    };

    $(document).ready(function() {
            //console.log(getformvalues().account_number);
             //console.log(getformvalues().qr);


           const preFilled_account_number =  getformvalues().account_number;
            const preFilled_qr =  getformvalues().qr;

            // when page is getting loaded and  all fields are prefilled hence confirm button should be active on first page loading.
            if( (preFilled_account_number.length > 0 ) ){
                            $("#add_method").css({'display' : 'block'});
                            $(".confirm_otp").css({'display' : 'none'});
            }
            // end, when page is getting loaded and  all fields are prefilled hence confirm button should be active on first page loading.

            $("#upi_Id").keyup(function() {

                //   console.log($("#uploads").val());
                //  console.log(preFilled_qr);
                //  console.log($("#upi_Id").val());
                // console.log(preFilled_account_number);

                // for preFilled_account_number
                    if(preFilled_account_number.length > 0){
                            if ($("#upi_Id").val() == preFilled_account_number && $("#uploads").val() == preFilled_qr ) {
                                  //console.log('equal');
                                  $("#add_method").css({'display' : 'block'});
                                  $(".confirm_otp").css({'display' : 'none'});

                                } else {
                                  //console.log('not equal');
                                  $("#add_method").css({'display' : 'none'});
                                  $(".confirm_otp").css({'display' : 'block'});
                                }

                       }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
            });

            $("#uploads").on("change", function() {
                //  console.log($("#uploads").val());
                //  console.log(preFilled_qr);
                //  console.log($("#upi_Id").val());
                // console.log(preFilled_account_number);
                // for preFilled_account_number
                    if($("#uploads").val().length > 0){
                            if ($("#uploads").val() == preFilled_qr && $("#upi_Id").val() == preFilled_account_number) {
                                  //console.log('equal');
                                  $("#add_method").css({'display' : 'block'});
                                  $(".confirm_otp").css({'display' : 'none'});

                                } else {
                                  //console.log('not equal');
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
      $("#upi_Id_form .bi-x").click(function(){
         $('#upi_Id_form input[type=file]').val('');
         $('#uploadedQR').val('');
          $('#upi_Id_form .upi_Id').html('');
      });


      $(".cancelupi_id").click(function(){
          window.location.href = '{{ url(app()->getLocale().'/user/payment')}}';
      });


         $("#upi_Id_form #add_method").click(function(){

             //here i have to send otp before adding payment
               $("#payMethod_otp_popup").css({'display' : 'block'});

             //end here i have to send otp before adding payment

          // console.log('upiId clicked');
             if($("#upi_Id").val() == 0 || $("#upi_Id").val() === undefined ||  $("#upi_Id").val().length > 25  || $("#upi_Id").val().search('@') == -1 ){

              //  $("#upi_Id_form .upi_Id_error").html('Valid Upi ID required and should be less than 25 characters!');
                 triggerAlert('Valid UPI ID required and should be less than 25 characters!.', 'error');
                // setTimeout( function(){
                //   $("#upi_Id_form .upi_Id_error").html('');
                // } , 3000);

             }else{
               // console.log('validatiion passed');


                           var upi_Id_formData = new FormData( $('#upi_Id_form')[0]);

                           upi_Id_formData.append('ifuploadSelected' , $("#uploads").val());
                           upi_Id_formData.append('ifuploadedQR' , $("#uploadedQR").val());

                                             	$.ajax({
                                          					type: "POST",

                                                              url: "<?php echo url(app()->getLocale().'/user/payment/c2c/add/UPI');  ?>",
                                                              enctype : 'multipart/form-data',
                                                              processData: false,
                                                              contentType: false,
                                                              data : upi_Id_formData,

                                                          	success: function(data) {

                                                                       if(data.success == 200){
                                                                         triggerAlert('Congratulations! Detail Submitted Successfully.', 'success');

                                                                      // $(".UPI-container .all_success").html('Submitted Successfully!');
                                                                     //    $('.UPI-container .all_success').addClass('alert-success');
                                                                       //  console.log(data.upi_Id);
                                                                        // document.getElementById("upi_Id_form").reset();

                                                                         $("#upi_Id_form #upi_Id").val(data.upi_Id);

                                                                         if(data.upi_IdQR != ''){
                                                                           $("#upi_Id_form .upi_Id").html('');
                                                                          $("#upi_Id_form .upi_Id").append('  <i class="bi-x"></i></br><img class="img-thumbnail " width="100px" src="/storage/app/'+data.upi_IdQR +'" alt="" title="">');
                                                                         }


                                                                         }

                                                                          if(data.error){
                                                                                triggerAlert('detail already exist!', 'error');
                                                                            //  $("#upi_Id_form .account_number_error").html('detail already exist!');
                                                                            //  $('#upi_Id_form .account_number_error').addClass('alert alert-danger');
                                                                          }

                                                                          setTimeout( function(){
                                                                        //   $(".UPI-container .all_success").html('');
                                                                        //  $('.UPI-container .all_success').removeClass('alert-success');
                                                                        // $("#upi_Id_form .account_number_error").html('');
                                                                            //   $('#upi_Id_form .account_number_error').removeClass('alert alert-danger');
                                                                             window.location.href = '{{ url(app()->getLocale().'/user/payment')}}';
                                                                         }, 2000);

                                                                     },

                                                             error: function(xhr, status, error) {
                                                                                     var erroJson = JSON.parse(xhr.responseText);
                                                                                     //alert(erroJson.error);
                                                                                     var upi_Id_error = erroJson.error.upi_Id;

                                                                                     //  $.each(erroJson.error, function(key, value){
                                                                                     //     $("#upi_Id_form .all_error").html(key + ": " + value + '<br>');
                                                                                     // });

                                                                                       if(upi_Id_error){
                                                                                       $('#upi_Id').css({'border' : '1px solid red'});
                                                                                       $("#upi_Id_form .upi_Id_error").html('Valid UPI ID required and should be less than 25 characters!');
                                                                                       $('#upi_Id_form .upi_Id_error').addClass('alert-danger');
                                                                                        }


                                                                                      setTimeout(function(){
                                                                                                $('#upi_Id').css({'border' : '1px solid #ced4da'});
                                                                                                $("#upi_Id_form .upi_Id_error").html('');
                                                                                                $('#upi_Id_form .upi_Id_error').removeClass('alert-danger');
                                                                                          }, 4000);

                                                                                     }

                                          				});
                                         }
                          });

   </script>
   <script>
      function payment_method_caption(id){
     // console.log(id);

      var input = document.getElementById( 'id');
      var input = event.srcElement;

      $("#upi_Id_form .paymentMethod_QRcaption").append('<div class="d-flex bg-gray" id="" style="margin: 10px 0px;">  <i class="bi bi-image" style="padding-right: 10px;"></i> '+input.files[0].name+'  <div onClick="captionRemove()"  class="file_delete"><i class="bi bi-x-circle-fill"></i> </div></div> ');
      }


      function captionRemove(){
      //  alert();

      $('#upi_Id_form input[type=file]').val('');
      $("#upi_Id_form .paymentMethod_QRcaption").html('');
      }
   </script>
   <script>
   // this verifies input fields validation on before send OTP
       $('.confirm_otp').click(function(){
            if($("#upi_Id").val() == 0 || $("#upi_Id").val() === undefined ||  $("#upi_Id").val().length > 18  || $("#upi_Id").val().search('@') == -1 ){

                 var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');
                    triggerAlert('Valid Upi ID required and should be less than 25 characters!.', 'error');
             }
       });
   </script>


</html>
