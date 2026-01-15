<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/payments.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      @include('template.web_css')
      <style>
         .confirm-btn-box .btn {
         width: 195px;
         }
         .cancel-btn-box .btn {
         width: 195px;
         }
         .imps-edit-account{
         position:relative;
         }
         .all_success{
         float: inherit;
         position: absolute!important;
         right: 0;
         top: -80px;
         }
         .imps-heading:before{
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
         .imps-footer-btn-block{
         display:flex;
         justify-content: space-between!important;
         }
         .imps-form-fields .alert {
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
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <div class="dashboard-main">
         @include('template.sidebar')
         <div class="container-fluid mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
            <div class="breadcrumbs-block">
               <div class="css-breadcrumbs_div px-0">
                  <a data-bn-type="link" class="css-breadcrumbs_anchore" href="{{ url(app()->getLocale().'/user/payment') }}">P2P Payment</a>
                  <i class="bi bi-chevron-right"></i>
                  <span class="css-breadcrumbs_method">Add payment method</span>
               </div>
            </div>
            <section class="payment_method_section mb-2rem IMPS-container">
               <div class="imps-account-wrapper">
                  <div class="imps-acount-container">
                     <div class="imps-edit-account">
                        <div class="all_success alert " ></div>
                        <form action="#" id="IMPS_form">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="all-alert-box all_error alert alert-danger" style="display:none"></div>
                                 <div data-bn-type="text" title="IMPS" class="imps-heading">IMPS</div>
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
                           <div class="row imps-form-fields">
                              <div class="col-lg-4 col-md-3 col-sm-6 mb-4">
                                 <div class="form-floating mb-3">
                                    <div data-bn-type="text" class="form-control">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</div>
                                    <label for="account_holder">Name</label>
                                    <div class="error-account-holder">
                                       <input type="hidden"  id="user_id" name="user_id"  value="{{ Auth::user()->id}}">
                                       <input type="hidden"  id="account_holder" name="account_holder"  value="{{ Auth::user()->first_name.' '.Auth::user()->last_name}}">
                                       <input type="hidden"  id="method_type" name="method_type"  value="IMPS">
                                       <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-6 mb-4">
                                 <div class="form-floating mb-3">
                                    <input data-bn-type="input" id="account_number" class="form-control" placeholder="Enter your account number" name="account_number" maxlength="25" value="{{ ($chkIMPSMedhods && $chkIMPSMedhods->account_number) ? $chkIMPSMedhods->account_number : old('account_number')}}">
                                    <label for="email">Bank account number</label>
                                    <span class="account_number_error"></span>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-6 mb-4">
                                 <div class="form-floating mb-3">
                                    <input data-bn-type="input" id="ifsc" class="form-control" style="text-transform:uppercase" placeholder="Enter IFSC number" name="ifsc" maxlength="25"  value="{{ ($chkIMPSMedhods && $chkIMPSMedhods->ifsc) ? $chkIMPSMedhods->ifsc : old('ifsc')}}">
                                    <label for="ifsc">IFSC code</label>
                                    <span class="ifsc_error"></span>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-6 mb-4">
                                 <div class="form-floating mb-3">
                                    <input data-bn-type="input" id="bank_name" class="form-control"  placeholder="Enter bank name" name="bank_name" maxlength="199" value="{{ ($chkIMPSMedhods && $chkIMPSMedhods->bank_name) ? $chkIMPSMedhods->bank_name : old('bank_name')}}">
                                    <label for="bank_name">Bank name</label>
                                    <span class="bank_name_error "></span>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-6 mb-4">
                                 <div class="form-floating mb-3">

                                        <select id="account_type" name="account_type" class="form-control">
                                            <option value=""></option>
                                            <?php if($chkIMPSMedhods==""){ ?>
                                                <option value="Saving Account">Saving Account</option>
                            					<option value="Current Account">Current Account</option>
                                            <?php }else{ ?>
                                                <option <?php if($chkIMPSMedhods->account_type=='Saving Account'){ echo"selected";} ?> value="Saving Account">Saving Account</option>
                            					<option <?php if($chkIMPSMedhods->account_type=='Current Account'){ echo"selected";} ?> value="Current Account">Current Account</option>
                                           <?php  } ?>
                        				</select>
                        				<label for="">Select Account Type</label>

                                    <span class="account_type_error "></span>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-6 mb-4">
                                 <div class="form-floating mb-3">
                                    <input data-bn-type="input" id="branch_name" class="form-control" placeholder="Enter branch information" name="branch_name" maxlength="199"  value="{{ ($chkIMPSMedhods && $chkIMPSMedhods->branch_name) ? $chkIMPSMedhods->branch_name : old('branch_name')}}">
                                    <label for="branch_name">Account opening branch</label>
                                    <span class="branch_name_error "></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-between imps-footer-btn-block mb-4">
                                 <div class="confirm-btn-box">
                                    <button data-bn-type="button" type="button" class="btn btn-yellow shadow" id="add_method" style="display:none">Confirm</button>
                                       <button data-bn-type="button" type="button" class="btn btn-yellow shadow confirm_otp" data-target-modal="payMethod_otp_popup" >Add Now</button>
                                 </div>
                                 <div class="cancel-btn-box">
                                    <button data-bn-type="button" type="button" class="btn btn-blue shadow cancelIMPS">Cancel</button>
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
      $(".cancelIMPS").click(function(){
           window.location.href = '{{ url(app()->getLocale().'/user/payment')}}';
      });

          $("#IMPS_form #add_method").click(function(){
         //   console.log('IMPS clicked');
              if($("#account_number").val() == 0 || $("#account_number").val() === undefined ||  $("#account_number").val().length > 25 || ( $.isNumeric( $("#account_number").val()) !== true ) ){
                      $("#IMPS_form .account_number_error").html('Valid Acoount number required and should be less than 25 characters!');
                       $("#IMPS_form .account_number_error").addClass('alert-danger');

                      setTimeout( function(){
                              $("#IMPS_form .account_number_error").html('');
                               $("#IMPS_form .account_number_error").removeClass('alert-danger');
                             } , 3000);

                    // triggerAlert('Valid Acoount number required and should be less than 25 characters!', 'error');

              }
              if($("#ifsc").val() == 0 || $("#ifsc").val() === undefined ||  $("#ifsc").val().length > 25 ){
                    $("#IMPS_form .ifsc_error").html('Valid IFSC number required !');
                    $("#IMPS_form .ifsc_error").addClass('alert-danger');
                      setTimeout( function(){
                               $("#IMPS_form .ifsc_error").html('');
                                $("#IMPS_form .ifsc_error").removeClass('alert-danger');
                             } , 3000);

                  }
                  if($("#bank_name").val() == 0 || $("#bank_name").val() === undefined ||  $("#bank_name").val().length > 199 ){
                        $("#IMPS_form .bank_name_error").html('Valid bank name required and should be less than 199 characters!');
                         $("#IMPS_form .bank_name_error").addClass('alert-danger');
                        $("#IMPS_form .ifsc_error")
                      setTimeout( function(){
                               $("#IMPS_form .bank_name_error").html('');
                               $("#IMPS_form .ifsc_error").removeClass('alert-danger');
                             } , 3000);

                  }
                  if($("#account_type").val() == 0 || $("#account_type").val() === undefined ||  $("#account_type").val().length > 25 ){

                        $("#IMPS_form .account_type_error").html('Valid account type required and should be less than 25 characters!');
                        $("#IMPS_form .account_type_error").addClass('alert-danger');

                      setTimeout( function(){
                               $("#IMPS_form .account_type_error").html('');
                               $("#IMPS_form .account_type_error").removeClass('alert-danger');
                             } , 3000);

                  }
                  if($("#branch_name").val() == 0 || $("#branch_name").val() === undefined ||  $("#branch_name").val().length > 199 ){
                        $("#IMPS_form .branch_name_error").html('Valid branch_name required and should be less than 199 characters!');
                        $("#IMPS_form .branch_name_error").addClass('alert-danger');
                      setTimeout( function(){
                               $("#IMPS_form .branch_name_error").html('');
                                $("#IMPS_form .branch_name_error").removeClass('alert-danger');
                             } , 3000);

                  }

                    //  console.log('validatiion passed');


                            var IMPS_formData = new FormData( $('#IMPS_form')[0]);


                                              	$.ajax({
                                           					type: "POST",

                                                               url: "<?php echo url(app()->getLocale().'/user/payment/c2c/add/IMPS');  ?>",
                                                               enctype : 'multipart/form-data',
                                                               processData: false,
                                                               contentType: false,
                                                               data : IMPS_formData,

                                                           	success: function(data) {
                                                                console.log(data);
                                                                        if(data.success == 200){
                                                                           triggerAlert('Congratulations! Detail Submitted Successfully.', 'success');
                                                                        //   $(".IMPS-container .all_success").html('Submitted Successfully!');
                                                                        //   $('.IMPS-container .all_success').addClass('alert-success');

                                                                       //   console.log(data.account_number);

                                                                          $("#IMPS_form #account_number").val(data.account_number);
                                                                           $("#IMPS_form #ifsc").val(data.ifsc);
                                                                            $("#IMPS_form #bank_name").val(data.bank_name);
                                                                             $("#IMPS_form #account_type").val(data.account_type);
                                                                              $("#IMPS_form #branch_name").val(data.branch_name);

                                                                          }

                                                                           if(data.error){
                                                                            //   $("#IMPS_form .account_number_error").html('detail already exist!');
                                                                            //   $('#IMPS_form .account_number_error').addClass('alert alert-danger');
                                                                                  triggerAlert('detail already exist!', 'error');
                                                                           }

                                                                            setTimeout( function(){
                                                                        //   $(".IMPS-container .all_success").html('');
                                                                        //   $('.IMPS-container .all_success').removeClass('alert-success');
                                                                        //     $("#IMPS_form .account_number_error").html('');
                                                                        //       $('#IMPS_form .account_number_error').removeClass('alert alert-danger');
                                                                                 window.location.href = '{{ url(app()->getLocale().'/user/payment')}}';
                                                                          }, 2000);


                                                                      },

                                                              error: function(xhr, status, error) {
                                                                                      var erroJson = JSON.parse(xhr.responseText);
                                                                                      //alert(erroJson.error);
                                                                                      var account_number_error = erroJson.error.account_number;
                                                                                        var ifsc_error = erroJson.error.ifsc;
                                                                                          var bank_name_error = erroJson.error.bank_name;
                                                                                            var account_type_error = erroJson.error.account_type;
                                                                                              var branch_name_error = erroJson.error.branch_name;

                                                                                      //  $.each(erroJson.error, function(key, value){
                                                                                      //     $("#IMPS_form .all_error").html(key + ": " + value + '<br>');
                                                                                      // });

                                                                                        if(account_number_error){
                                                                                        $("#IMPS_form .account_number_error").html('Valid Acoount number required and should be less than 25 characters!');
                                                                                           $('#account_number').css({'border' : '1px solid red'});
                                                                                        $('#IMPS_form .account_number_error').addClass('alert-danger');


                                                                                         }

                                                                                          if(ifsc_error){
                                                                                               $('#ifsc').css({'border' : '1px solid red'});
                                                                                        $("#IMPS_form .ifsc_error").html('Valid IFSc code required and should be less than 25 characters!');
                                                                                        $('#IMPS_form .ifsc_error').addClass('alert-danger');
                                                                                         }

                                                                                          if(bank_name_error){
                                                                                               $('#bank_name').css({'border' : '1px solid red'});
                                                                                        $("#IMPS_form .bank_name_error").html('Valid bank name required and should be less than 199 characters!');
                                                                                        $('#IMPS_form .bank_name_error').addClass('alert-danger');
                                                                                         }

                                                                                          if(account_type_error){

                                                                                        $('#account_type').css({'border' : '1px solid red'});
                                                                                        $("#IMPS_form .account_type_error").html('Valid acoount type required and should be less than 25 characters!');
                                                                                        $('#IMPS_form .account_type_error').addClass('alert-danger');
                                                                                         }

                                                                                          if(branch_name_error){

                                                                                        $('#branch_name').css({'border' : '1px solid red'});
                                                                                        $("#IMPS_form .branch_name_error").html('Valid branch name required and should be less than 199 characters!');
                                                                                        $('#IMPS_form .branch_name_error').addClass('alert-danger');
                                                                                         }

                                                                                      setTimeout(function(){
                                                                                             $("#IMPS_form .account_number_error").html('');
                                                                                              $("#IMPS_form .ifsc_error").html('');
                                                                                               $("#IMPS_form .bank_name_error").html('');
                                                                                                $("#IMPS_form .account_type_error").html('');
                                                                                                 $("#IMPS_form .branch_name_error").html('');

                                                                                              $('#account_number').css({'border' : '1px solid #ced4da'});
                                                                                              $('#ifsc').css({'border' : '1px solid #ced4da'});
                                                                                              $('#bank_name').css({'border' : '1px solid #ced4da'});
                                                                                               $('#account_type').css({'border' : '1px solid #ced4da'});
                                                                                              $('#branch_name').css({'border' : '1px solid #ced4da'});

                                                                                                      $("#IMPS_form .account_number_error").removeClass('alert-danger');
                                                                                                       $("#IMPS_form .ifsc_error").removeClass('alert-danger');;
                                                                                               $("#IMPS_form .bank_name_error").removeClass('alert-danger');
                                                                                                $("#IMPS_form .account_type_error").removeClass('alert-danger');
                                                                                                 $("#IMPS_form .branch_name_error").removeClass('alert-danger');

                                                                                                  }, 3000);


                                                                                      }

                                           				});

                           });

   </script>
      <script>
   // this verifies input fields validation on before send OTP


   function getformvalues() {

    const data = {};

    $data = {'account_number' : $("#account_number").val() ,'ifsc' :  $("#ifsc").val() , 'bank_name' : $("#bank_name").val() ,'account_type' : $("#account_type").val() , 'branch_name' : $("#branch_name").val()};
    return $data;


    };

    $(document).ready(function() {
            console.log(getformvalues().account_number);
            console.log(getformvalues().ifsc);
            console.log(getformvalues().bank_name);
            console.log(getformvalues().account_type);
            console.log(getformvalues().branch_name);

           const preFilled_account_number =  getformvalues().account_number;
           const preFilled_ifsc =  getformvalues().ifsc;
           const preFilled_bank_name =  getformvalues().bank_name;
           const preFilled_account_type =  getformvalues().account_type;
           const preFilled_branch_name =  getformvalues().branch_name;

            // when page is getting loaded and  all fields are prefilled hence confirm button should be active on first page loading.
            if( (preFilled_account_number.length > 0) && (preFilled_ifsc.length > 0) && (preFilled_bank_name.length > 0) && (preFilled_account_type.length > 0) && (preFilled_branch_name.length > 0)){
                            $("#add_method").css({'display' : 'block'});
                            $(".confirm_otp").css({'display' : 'none'});
            }
            // end, when page is getting loaded and  all fields are prefilled hence confirm button should be active on first page loading.

            $("#account_number").keyup(function() {

                console.log($("#account_number").val());
                console.log(preFilled_account_number);

                // for preFilled_account_number
                    if(preFilled_account_number.length > 0){
                            if ($("#account_number").val() == preFilled_account_number) {
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
                 // for preFilled_ifsc
             $("#ifsc").keyup(function() {
                   if(preFilled_ifsc.length > 0){
                              if( $("#ifsc").val() == preFilled_ifsc){
                              $("#add_method").css({'display' : 'block'});
                              $(".confirm_otp").css({'display' : 'none'});
                            }else{
                               $("#add_method").css({'display' : 'none'});
                               $(".confirm_otp").css({'display' : 'block'});
                            }
                    }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
             });
                 //preFilled_bank_name
            $("#bank_name").keyup(function() {
                   if(preFilled_bank_name.length > 0){
                              if($("#bank_name").val() == preFilled_bank_name){
                              $("#add_method").css({'display' : 'block'});
                              $(".confirm_otp").css({'display' : 'none'});
                            }else{
                               $("#add_method").css({'display' : 'none'});
                               $(".confirm_otp").css({'display' : 'block'});
                            }
                    }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
            });
                 //preFilled_account_type
               $("#account_type").keyup(function() {
                   if(preFilled_account_type.length > 0){
                              if($("#account_type").val() == preFilled_account_type){
                              $("#add_method").css({'display' : 'block'});
                              $(".confirm_otp").css({'display' : 'none'});
                            }else{
                               $("#add_method").css({'display' : 'none'});
                               $(".confirm_otp").css({'display' : 'block'});
                            }
                    }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
               });
                 //preFilled_branch_name
              $("#branch_name").keyup(function() {
                   if(preFilled_branch_name.length > 0){
                              if($("#branch_name").val() == preFilled_branch_name){
                              $("#add_method").css({'display' : 'block'});
                              $(".confirm_otp").css({'display' : 'none'});
                            }else{
                               $("#add_method").css({'display' : 'none'});
                               $(".confirm_otp").css({'display' : 'block'});
                            }
                    }else{
                        $("#add_method").css({'display' : 'none'});
                        $(".confirm_otp").css({'display' : 'block'});
                    }
              });
    });




       $('.confirm_otp').click(function(){
            if($("#account_number").val() == 0 || $("#account_number").val() === undefined ||  $("#account_number").val().length > 25 || ( $.isNumeric( $("#account_number").val()) !== true ) ){

                 var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');

                triggerAlert('Valid Acoount number required and should be less than 25 characters!', 'error');
             }

             if($("#ifsc").val() == 0 || $("#ifsc").val() === undefined ||  $("#ifsc").val().length > 25 ){

                 var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');

                triggerAlert('Valid IFSC number required !', 'error');
              }

              if($("#bank_name").val() == 0 || $("#bank_name").val() === undefined ||  $("#bank_name").val().length > 199 ){

                 var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');

                triggerAlert('Valid bank name required and should be less than 199 characters!', 'error');

                  }
                  if($("#account_type").val() == 0 || $("#account_type").val() === undefined ||  $("#account_type").val().length > 25 ){


                  var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');

                    triggerAlert('Valid account type required and should be less than 25 characters!', 'error');

                  }

                if($("#branch_name").val() == 0 || $("#branch_name").val() === undefined ||  $("#branch_name").val().length > 199 ){

                 var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                 elm.addClass('hide');
                 elm.removeClass('custom-modal-bck-bg');

                triggerAlert('Valid branch name required and should be less than 199 characters!', 'error');

                  }
       });
   </script>


</html>
