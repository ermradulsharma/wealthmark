<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Enable Email Authentication</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/niceCountryInput.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
      <link href="{{ asset('assets/css/style_main.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/wealthmark_new/css/style.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">

   </head>
   <body class="bg-white">
      @include('template.custom_header')
      <main id="main" >
         <section class="inner-page register">
            <div class="container">
               <div class="container step-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 offset-md-1 offset-lg-2">
                            <h4 class="form-heading mb-4">
                               Email Verification
                            </h4>
                            <?php //print_r($_SESSION); ?>
                            <p class="mt-2 mb-4">To secure your account, please complete the following verification.</p>
                            <div class="row">
                               <div class="col-md-12 verification_inner">
                                    <form action="" method="post" id="email_otp_frm">
                                        <label class="wm_label">Email Address</label>
                                        <div class="form-floating mb-3 clearable-input">
                                            <input type="email" value="" class="form-control searchinput" id="email" name="email" placeholder="name@example.com">
                                            <div class="icon-over" style="display: none;">
                                                <span class="cross-btn-clear" data-clear-input="">  <i class="bi bi-x-circle-fill"></i> </span>
                                            </div>
                                            <label for="email">Email address</label>
                                            <span class="error" id="email_err"> </span>
                                        </div>

                                        <div class="verification_div">
                                            <div class="verification_main">
                                               <div class="verification_inner inner-css email_otp">
                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="email_otp" class="verification_textbox" value="">
                                                  <div class="getCode_outer getCode_outer1">
                                                     <div class="getCode_inner email_get_code" style="display:block" onclick="e_start()">Get Code</div>
                                                     <div class="getCode_inner email_code_sent" style="display:none">
                                                        Verification Code Sent
                                                        <span class="tooltip txt_info">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                        <span class="tooltiptext toolTop">
                                                        Haven’t received code? Request new code in
                                                        <span class="timer-counter" id="count">5</span>
                                                        <span id="text">seconds</span>
                                                        The code will expire after 30 mins.
                                                        </span>
                                                        </span>
                                                     </div>
                                                  </div>
                                                  <label class="wm_label wm_label_error">New Email Verification Code</label>
                                                  <label class="wm_label wm_label_error">New Email Verification Code</label>
                                               </div>
                                            </div>
                                            <span class="error" id="email_otp_err"> </span>
                                            <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to <span  dir="ltr" id="getCode_email" class="getCode_outer1"></span></div>
                                        </div>
                                        <h5 class="my-2">Security Verification</h5>

                                        <div class="verification_div">
                                            <div class="verification_main">
                                               <div class="verification_inner inner-css phone_otp">
                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="phone_otp" class="verification_textbox" value="">
                                                  <div class="getCode_outer getCode_outer1">
                                                     <div class="getCode_inner phone_get_code" style="display:block" onclick="start()">Get Code</div>
                                                     <div class="getCode_inner phone_code_sent" style="display:none" >
                                                        Verification Code Sent
                                                        <span class="tooltip txt_info">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                        <span class="tooltiptext toolTop">
                                                        Haven’t received code? Request new code in
                                                        <span class="timer-counter" id="phone_count">5</span>
                                                        <span id="text">seconds</span>
                                                        The code will expire after 30 mins.
                                                        </span>
                                                        </span>
                                                     </div>
                                                  </div>
                                                  <label class="wm_label wm_label_error">Phone Verification Code</label>
                                                  <label class="wm_label wm_label_error">Phone Verification Code</label>
                                               </div>
                                            </div>
                                            <span class="error" id="phone_otp_err"> </span>
                                            <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1">{{ substr(Auth::user()->phone, 0, 3) . "***" . substr(Auth::user()->phone, 6, 4) }}</span>
                                            </div>
                                        </div>
                                          <!------------------- google authentication section ------->
                                        @if(Auth::user()->is_two_factor=='1')
                                        <div class="verification_div mt-3">
                                            <div class="verification_main">
                                                <div class="verification_inner  inner-css">
                                                   <input type="text" class="verification_textbox" id="ro_otp" name="ro_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                                   <label class="wm_label wm_label_error">Authenticator Code</label>
                                                </div>
                                            </div>
                                            <span class="error"> </span>
                                            <div class="verification_innerInfo error_text">Enter the 6-digit code from Wealthmark/Google Authenticator</div>
                                            <div id="o_otp_err" class="error_color"></div>
                                        </div>
                                        @else
                                           <input type="hidden" class="verification_textbox" id="ro_otp" name="ro_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="000000">
                                        @endif
                                         <!-------------------end google authentication section ------->

                                        @csrf
                                        <div class="btn-div">
                                            <button type="button" class="submit_code w-100 mt-5" id="verify_enable_email">
                                               <div class="inner_text">Submit</div>
                                            </button>
                                        </div>
                                    </form>
                               </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
         </section>
      </main>
      @include('template.copy_right_footer')
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>
      @include('template.country_language')
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/niceCountryInput.js') }}"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
        <script src="{{ asset('assets/js/alert.js') }}"></script>
        <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
        <script src="{{ asset('assets/js/login_register.js') }}"></script>
        <script>
            $(".email_get_code").click(function(){
                if (!checkemail()) {
            	    return true;
                }
                var email = $('#email').val();
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_mail') }}",
                    data:{ 'email': email,'_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            $("#getCode_email").html(data.email_data);
                            $(".email_get_code").css("display", "none");
                            $(".email_code_sent").css("display", "block");
                            triggerAlert('OTP sent on your email address', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        $('#email_err').html(erroJson.error);
                        $('#email').addClass('error_border');
                    }
                });
            });


            $(".phone_get_code").click(function(){
                if (!checkemail()) {
            	    return true;
                }
                var email = $('#email').val();
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_phone') }}",
                    data:{ 'email': email,'_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            $(".phone_get_code").css("display", "none");
                            $(".phone_code_sent").css("display", "block");

                            triggerAlert('OTP sent on your registered phone number', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        $('#email_err').html(erroJson.error);
                        $('#email').addClass('error_border');
                    }
                });
            });

            function e_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("count");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".email_code_sent").css("display", "none");
                  $(".email_get_code").css("display", "block");
                }
              }, 1000);
            };

            function start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("phone_count");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".phone_code_sent").css("display", "none");
                  $(".phone_get_code").css("display", "block");
                }
              }, 1000);
            };


        	$("#verify_enable_email").click(function() {
    			if (!checkemail()|| !check_email_otp() || !check_phone_otp()) {
            	    return true;
                }

                if($("#ro_otp").val().length != 6 || $("#ro_otp").val() == ""){
                 $("#o_otp_err").addClass("alert-danger");
                $("#o_otp_err").text("Blank or Invalid OTP ");
                setTimeout(function(){
                 $("#o_otp_err").removeClass("alert-danger");
                $("#o_otp_err").text("");
                }, 4000);

            }else{

                var email = $('#email').val();
                var _token = $("input[name=_token]").val();
                var phone_otp = $("#phone_otp").val();
                var email_otp = $("#email_otp").val();
                 var o_otp =  $("#ro_otp").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'verify_enable_email') }}",
                    data:{ 'email': email,'_token':_token,'phone_otp':phone_otp,'email_otp':email_otp, 'authenticator_otp': o_otp},
                    success:function(data,status){
                        if(status=="success"){
                            triggerAlert('Email authentication successfully enabled', 'success');
                            setTimeout(function(){
                                window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
                            }, 2000);
                        }else{
                            triggerAlert(status, data.error);
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        $('#email_err').html(erroJson.error);
                        $('#email').addClass('error_border');
                    }
                });
        	}
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

            function check_phone_otp(){
                var phone_otp = $('#phone_otp').val();
                if (phone_otp == "") {
                    $('#phone_otp_err').html('Please enter phone otp');
                    $('.phone_otp').addClass('error_border');
                    return false;
                }else {
                    $('#phone_otp_err').html('');
                    $('.phone_otp').removeClass('error_border');
                    return true;
                }
            }

            function check_email_otp(){
                var email_otp = $('#email_otp').val();
                if (email_otp == "") {
                    $('#email_otp_err').html('Please enter email otp');
                    $('.email_otp').addClass('error_border');
                    return false;
                }else {
                    $('#email_otp_err').html('');
                    $('.email_otp').removeClass('error_border');
                    return true;
                }
            }
        </script>
   </body>
</html>
