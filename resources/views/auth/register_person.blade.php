<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Personal Account</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
       @include('template.web_css')
        <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
      <style>
         button {
         padding: 10px 20px;
         font-size: 16px;
         }

      </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
        <main id="main" >
           <section class="inner-page register">
              <div class="container">
                 <div class="col-lg-4 col-md-6 offset-md-1 offset-lg-1">
                    <div>

                       <h5 class="mb-4">Create Personal Account</h5>
                       <div id="message"></div>
                       <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                             <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Email</button>
                          </li>
                          <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mobile</button>
                          </li>
                       </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form method="post" action="" name="registerform"  id="myform">
                                    <div class="form-floating mb-3 clearable-input">
                                       <input type="email" value="{{ old('email') }}" class="form-control searchinput" id="email" name="email" placeholder="name@example.com">
                                        <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                        </div>

                                       <label for="email">Email address</label>
                                       <span class="error" id="email_err"> </span>
                                    </div>

                                    <div class="form-floating mb-3 has-feedback clearable-input clearable-input">
                                       <input name="password" type="password" class="form-control input pass-validation searchinput" id="password" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">
                                        <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                            <span class="input-group-eye " onclick="password_show_hide();">
                                               <i class="bi bi-eye-slash " id="show_eye"></i>
                                               <i class="bi bi-eye d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                       <label for="floatingPassword">Password</label>
                                       <span class="error" id="password_err"></span>
                                      <div class="pwd_strength_wrap">
                                    <div class="passwordDescription">Password not entered</div>
                                    <div id="passwordStrength" class="strength0"></div>
                                     <div class="pswd_info">
                                        <strong>Strong Password Tips:</strong>
                                            <ul>
                                                <li class="length invalid">At least 6 characters</li>
                                                <li class="pnum invalid">At least one number</li>
                                                <li class="capital invalid"> one uppercase letter</li>
                                                <li class="spchar invalid">At least one special character</li>
                                            </ul>
                                     </div><!-- END pswd_info -->
                                </div><!-- END pwd_strength_wrap -->
                                       </div>

                                    <div class="form-floating mb-3">
                                       <a href="#" class="r_code"> <span>Referral ID (Optional) </span>
                                       <span class="down-arrow" style="{{ (Request::segment(3) != '') ? 'display:none' : 'display:inline-block'}} "> <i class="bi-caret-down-fill"> </i></span>
                                       <span class="up-arrow" style="{{ (Request::segment(3) != '') ? 'display:inline-block' : 'display:none'}} "> <i class="bi-caret-up-fill"> </i></span> </a>
                                    </div>
                                    <div class="form-floating mb-3 r-box" style="{{ (Request::segment(3) != '') ? 'display:block' : 'display:none'}} ">
                                       <input type="text" class="form-control" name="refid" id="floatingReferral" placeholder="Referral ID (Optional)" value="{{ Request::segment(3)}}">
                                       <label for="floatingReferral">Referral ID (Optional)</label>
                                       <span class="error" id="e_referal_err"> </span>
                                    </div>
                                    <div class="form-check mb-3">
                                       <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                       <label class="form-check-label" for="defaultCheck4">
                                       <span class="small">I agree to receive email updates from WealthMark</span>
                                       </label>
                                    </div>

                                    <div class="form-check mb-4">
                                       <input class="form-check-input" type="checkbox" value="" name="defaultCheck3" checked id="defaultCheck3">
                                       <label class="form-check-label" for="defaultCheck3">
                                       <span class="small">I have read and agree to WealthMarks's  <a href="#" class="text-theme-yellow">Terms of Service</a></span>
                                       </label>
                                       <span class="error" id="term_errs"> </span>
                                    </div>


                                    <div class="form-button mb-3">
                                       <input type="button" class="btn-yellow border-0 w-100 text-center" id="submitbtn" value="Register">
                                    </div>
                                   <!-- <div class="form-check mb-3">-->
                                   <!--    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">-->
                                   <!--    <label class="form-check-label" for="defaultCheck1">-->
                                   <!--    <span class="small">I agree to receive email updates from WealthMark</span>-->
                                   <!--    </label>-->
                                   <!-- </div>-->

                                   <!-- <div class="form-check mb-4">-->
                                   <!--    <input class="form-check-input" type="checkbox" value="" checked id="defaultCheck2">-->
                                   <!--    <label class="form-check-label" for="defaultCheck2">-->
                                   <!--    <span class="small">I have read and agree to WealthMarks's  <a href="#" class="text-theme-yellow">Terms of Service</a></span>-->
                                   <!--    </label>-->
                                   <!-- </div>-->
                                   <!-- <div class="form-button mb-3">-->
                                   <!--    <input type="button" class="btn-theme w-100 text-center" id="submitbtn" value="Register">-->
                                   <!-- </div>-->
                                   <!--<span class="text-muted">Not looking for a personal account?<a href="{{ url(app()->getLocale(),'register-business')}}" class="text-theme-yellow"> Sign up for an entity account</a></span>                    -->
                                </form>
                            </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="" method="post" id="myform1">
                                <div class="input-number-group">
                                   <div class="">
                                      <input type="tel" id="txtPhone" class="select-county form-control" name="mobile"  placeholder="Mobile No" />
                                      <!--<input type="tel" id="txtPhone" class="form-control" name="mobile"  placeholder="Mobile No" />-->
                                   </div>
                                   <div class="form-floating clearable-input">
                                      <input type="text" class="form-control searchinput" id="mobile" pattern="\d*" maxlength="10"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Phone Number">
                                       <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>

                                       </div>
                                      <label for="floatingInput">Mobile Number</label>
                                   </div>
                                </div>
                                <div><span class="error" id="phone_err">&nbsp; </span></div>
                                <div class="form-floating mb-3 clearable-input">
                                   <input name="password" type="password" class="form-control input pass-validation searchinput" id="password1" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">
                                  <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                               <span class="input-group-eye " onclick="password_show_hide1();">
                                   <i class="bi bi-eye" id="show_eye1"></i>
                                   <i class="bi bi-eye-slash d-none" id="hide_eye1"></i>
                                   </span>
                                       </div>

                                   <label for="floatingPassword">Password</label>
                                   <span class="error" id="password1_err"></span>
                                 <div class="pwd_strength_wrap">
                                    <div class="passwordDescription">Password not entered</div>
                                    <div id="passwordStrength2" class="strength0"></div>
                                     <div class="pswd_info">
                                        <strong>Strong Password Tips:</strong>
                                            <ul>
                                                <li class="length invalid">At least 6 characters</li>
                                                <li class="pnum invalid">At least one number</li>
                                                <li class="capital invalid"> one uppercase letter</li>
                                                <li class="spchar invalid">At least one special character</li>
                                            </ul>
                                     </div><!-- END pswd_info -->
                                </div><!-- END pwd_strength_wrap -->

                                  </div>
                                <div class="form-floating mb-3">
                                   <a href="#" class="r_code"> <span>Referral ID (Optional) </span>
                                   <span class="down-arrow" style="{{ (Request::segment(3) ) ? 'display:none' : 'display:inline-block'}}"> <i class="bi-caret-down-fill"> </i></span>
                                   <span class="up-arrow" style="{{ (Request::segment(3) ) ? 'display:inline-block' : 'display:none'}}"> <i class="bi-caret-up-fill"> </i></span> </a>
                                </div>
                                <div class="form-floating mb-3  r-box" style="{{ (Request::segment(3) != '') ? 'display:block' : 'display:none'}} ">
                                   <input type="text" class="form-control" id="refcode" placeholder="Referral ID (Optional)" value="{{ Request::segment(3)}}">
                                   <label for="floatingReferral">Referral ID (Optional)</label>
                                   <span class="error" id="p_referal_err"> </span>
                                </div>
                                <div class="form-check mb-3">
                                       <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                       <label class="form-check-label" for="defaultCheck1">
                                       <span class="small">I agree to receive email updates from WealthMark</span>
                                       </label>
                                    </div>

                                    <div class="form-check mb-4">
                                       <input class="form-check-input" type="checkbox" value="" name="defaultCheck2" id="defaultCheck2">
                                       <label class="form-check-label" for="defaultCheck2">
                                       <span class="small">I have read and agree to WealthMarks's  <a href="#" class="text-theme-yellow">Terms of Service</a></span>
                                       </label>
                                    </div>
                                    <span class="error" id="term_err"></span>
                                    <div class="form-button mb-3">
                                       <input type="button" class="btn-yellow border-0 w-100 text-center" id="submitbtnn" value="Register">
                                    </div>

                            </form>
                          </div>


                                   <span class="text-muted">Not looking for a personal account?<a href="{{ url(app()->getLocale(),'register-business')}}" class="text-theme-yellow"> Sign up for an entity account</a></span>
                       </div>
                    </div>
                 </div>
              </div>
           </section>
        </main>

      @include('template.copy_right_footer')
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>


        @include('template.web_js')
<!-----------------------1-------->

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="{{ asset('assets/js/intlTelInput-jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>
       <script src="{{ asset('assets/js/login_register.js') }}"></script>


        <script>
            $(document).ready(function () {
                $('#email').on('input', function () {
                    checkemail();
                });
                // $('#password').on('input', function () {
                //     checkpass();
                // });
                $('#mobile').on('input', function () {
                    checkmobile();
                });
                $('#submitbtn').click(function () {
                    if (!checkemail()) {
                        //triggerAlert('Please fill all required field', 'error');
                    }
                    else{
                        var checkFlag = '0';
                        var defaultCheck3 = '0'
                        if ($('#defaultCheck4').is(':checked')) {
                            checkFlag = '1';
                        }
                        if ($('#defaultCheck3').is(':checked')== false) {
                            $('#term_errs').html('Please check terms & conditions');
                            $('#defaultCheck3').addClass('error_border');
                            return true;
                        }else{
                            $('#term_errs').html('');
                            $('#defaultCheck3').removeClass('error_border');
                            defaultCheck3 = '1'
                        }

                        $("#message").html("");
                        var form = $('#myform')[0];
                        var frmdata = new FormData(form);
                        var email = $('#email').val();
                        var password = $('#password').val();
                        var refcode =$('#floatingReferral').val();
                          var agree_TOS = $("#defaultCheck3").is(":checked") ;

                        $.ajax({
                            type: "POST",
                            url: '<?php echo url('api/email_register');  ?>',
                            data: {
                               'email': email,
                               'password': password,
                               'parent_referral_id':refcode,
                               'check_email_update':checkFlag,
                                'agree_TOS' : agree_TOS,
                                'defaultCheck3' : defaultCheck3,
                           },
                           success: function(data) {
                                $('#myform').trigger("reset");
                                window.location.href = '<?php echo url( app()->getLocale(), 'request_eotp');  ?>?step=2';
                                // triggerAlert('Register successful', 'success');
                                // setTimeout(function(){
                                //     $('#myform').trigger("reset");
                                //     window.location.href = '<?php echo url( app()->getLocale(), 'request_eotp');  ?>?step=2';
                                // }, 2000);
                           },
                           error: function(xhr, status, error) {
                               var erroJson = JSON.parse(xhr.responseText);
                               var email_error=erroJson.error.email;
                               var password_error=erroJson.error.password;
                                var termServices_error = erroJson.error.defaultCheck3;
                                if(email_error){
                                   $('#email_err').html(email_error);
                                    $('#email').addClass('error_border');
                                }
                                if(password_error){
                                   $('#password_err').html(password_error);
                                   $('#password').addClass('error_border');
                                }
                                if(erroJson.error==401){
                                    $('#floatingReferral').addClass('error_border');
                                    $('#e_referal_err').html("Please enter valid referral code");
                                }
                                 if(termServices_error){
                                   $('#TOS_err').html(termServices_error);
                                    $('#defaultCheck3').addClass('error_border');
                                }
                            }
                        });
                    }
                });

                $('#submitbtnn').click(function () {
                    var checkFlag = '0';
                    var   defaultCheck2 = '0'
                    if ($('#defaultCheck1').is(':checked')) {
                        checkFlag = '1';
                    }

                    if ($('#defaultCheck2').is(':checked')== false) {
                        $('#term_err').html('Please check terms & conditions');
                        $('#defaultCheck2').addClass('error_border');
                        return true;
                    }else{
                        $('#term_err').html('');
                        $('#defaultCheck2').removeClass('error_border');
                           defaultCheck2 = '1'

                    }
                    var country_name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
                    var dialCode = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
                    $("#message").html("");
                    var form = $('#myform1')[0];
                    var frmdata = new FormData(form);
                    var mobile = $('#mobile').val();
                    var password = $('#password1').val();
                    var refcode = $('#refcode').val();
                    //alert(refcode);
                    $.ajax({
                        type: "POST",
                        url: '{{ url('api/phone_register') }}',
                        data: {
                           'phone': mobile,
                           'password': password,
                           'country_phone_code':dialCode,
                           'country_code':country_name,
                           'parent_referral_id':refcode,
                           'check_email_update':checkFlag,
                           'defaultCheck2' : defaultCheck2,

                       },
                       success: function(data) {
                           $('#myform').trigger("reset");
                           window.location.href = '{{ url( app()->getLocale(), 'request_potp') }}?step=2';
                            // triggerAlert('Register successful', 'success');
                            // setTimeout(function(){
                            //     $('#myform1').trigger("reset");
                            //     window.location.href = '<?php //echo url( app()->getLocale(), 'request_potp');  ?>?step=2';
                            // }, 2000);
                       },
                       error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                           var phone_error=erroJson.error.phone;
                           var password_error=erroJson.error.password;
                             var termServices_error = erroJson.error.defaultCheck2;
                            if(phone_error){
                               $('#phone_err').html(phone_error);
                               $('#mobile').addClass('error_border');
                            }
                            if(password_error){
                               $('#password1_err').html(password_error);
                                $('#password1').addClass('error_border');
                            }
                            if(erroJson.error==401){
                                $('#refcode').addClass('error_border');
                                $('#p_referal_err').html("Please enter valid referral code");
                            }
                             if(termServices_error){
                                   $('#TOS_err').html(termServices_error);
                                    $('#defaultCheck2').addClass('error_border');
                                }
                        }
                    });
                });
            });

            function checkemail() {
                var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var email = $('#email').val();
                var validemail = pattern1.test(email);
                if (email == "") {
                    $('#email_err').html('Please enter your email');
                    $('#email').addClass('error_border');
                    return false;
                } else
                if (!validemail) {
                    $('#email_err').html('Please enter a correct email address');
                    $('#email').addClass('error_border');
                    return false;
                } else {
                    $('#email_err').html('');
                    $('#email').removeClass('error_border');
                    return true;
                }
            }

            // function checkpass() {
            //     console.log("sass");
            //     var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            //     var pass = $('#password').val();
            //     var validpass = pattern2.test(pass);
            //     if (pass == "") {
            //         $('#password_err').html('Please enter your password');
            //         $('#password').addClass('error_border');
            //         return false;
            //     }
            //     else if (!validpass) {
            //         $('#password_err').html('Minimum 8 and upto 15 characters, at least one uppercase, one lowercase, one number and one special character:');
            //         $('#password').addClass('error_border');
            //         return false;
            //     }
            //     else {
            //         $('#password_err').html("");
            //          $('#password').removeClass('error_border');
            //         return true;
            //     }
            // }


            function checkmobile() {
                if (!$.isNumeric($("#mobile").val())) {
                    $("#mobile_err").html("only number is allowed");
                    return false;
                } else if ($("#mobile").val().length != 10) {
                    $("#mobile_err").html("10 digit required");
                    return false;
                }
                else {
                    $("#mobile_err").html("");
                    return true;
                }
            }
        </script>


      <script>

        $('#txtPhone').intlTelInput({
             autoHideDialCode: true,
             autoPlaceholder: "ON",
             dropdownContainer: document.body,
             formatOnDisplay: true,
             hiddenInput: "full_number",
             initialCountry: "auto",
             nationalMode: true,
             placeholderNumberType: "MOBILE",
             geoIpLookup: function(callback) {
                    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        callback(countryCode);
                    });
                },
             separateDialCode: true
         });
      </script>

   </body>
</html>
