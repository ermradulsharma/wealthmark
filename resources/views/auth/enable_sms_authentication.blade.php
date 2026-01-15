<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Wealth Mark | OTP</title>
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

        <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">

   </head>
   <body class="bg-white">
                            <!-- veryfication button top  row -->
            @if( Auth::user()->account_type == 2)
                       @if( $verificationStatus == 0 )
                    <div class="">
                                <div style="background-color: rgb(254, 246, 216); display: flex; place-content: center;">
                    <div style="width: 100%; max-width: 1200px; padding: 20px 24px;font-size: 14px;line-height: 24px;display: flex; ">
                            <img src="{{  asset('assets/img/wealthmark-logo.svg') }}" style="display: inline-block;width: 24px; height: 24px;">
                            <div style="flex: 1;padding-left: 8px;margin-right: 24px;color: #1E2329;">
                                <div style="margin-right: 8px;display: inline-block;">Complete verification to access Binance products and services.</div>
                                <a style=" color: #C99400; display: inline-block;text-decoration: underline;" href="#">Learn more</a>
                            </div>

                            <a style="display: inline-block;text-decoration: none;" href="{{url(app()->getLocale().'/entity-verification')}}">
                                <button id="verify-btn"  style="" class="btn-yellow  btn-theme-sm active"> Verify</button>
                            </a>
                    </div>
                </div>
                    </div>
                    @endif

                  @endif
            <!-- end veryfication button top  row -->
      @include('template.custom_header')
      <main id="main" >
         <section class="inner-page register">
            <div class="container">

               <div class="container step-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 offset-md-1 offset-lg-2">
                            <h4 class="form-heading mb-4">
                                Enable Phone Number Verification

                            </h4>
                            <?php //print_r($_SESSION); ?>
                            <p class="mt-2 mb-4"> New Phone Number Verification</p>
                            <div class="row">
                               <div class="col-md-12">
                                    <form action="" method="post" id="email_otp_frm">
                                    <div class="input-number-group">
                                        <div class="mb-3">
                                           <input type="tel" id="txtPhone" class="form-control" name="mobile"  placeholder="Mobile No" />
                                        </div>
                                        <div class="form-floating mb-3">
                                           <input type="text" class="form-control" id="mobile" pattern="\d*" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  placeholder="Phone Number">
                                           <label for="floatingInput">Mobile Number</label>
                                        </div>
                                    </div>
                                    <span class="error" id="phone_err"> </span>
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
                                              <label class="wm_label wm_label_error">New Phone Verification Code</label>
                                              <label class="wm_label wm_label_error">New Phone Verification Code</label>
                                           </div>
                                        </div>
                                        <span class="error" id="phone_otp_err"> </span>
                                        <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to <span  dir="ltr" id="getCode_phone" class="getCode_outer1"></span>
                                        </div>
                                    </div>
                                    <h5 class="my-2">Security Verification</h5>

                                     <div class="verification_div">
                                        <div class="verification_main">
                                           <div class="verification_inner inner-css email_otp">
                                              <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="email_otp" class="verification_textbox" value="">
                                              <div class="getCode_outer getCode_outer1">
                                                 <div class="getCode_inner email_get_code" style="display:block" onclick="e_start()">Get Code</div>
                                                 <div class="getCode_inner email_code_sent" style="display:none" >
                                                    Verification Code Sent
                                                    <span class="tooltip txt_info">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                    <span class="tooltiptext toolTop">
                                                    Haven’t received code? Request new code in
                                                    <span class="timer-counter" id="email_count">5</span>
                                                    <span id="text">seconds</span>
                                                    The code will expire after 30 mins.
                                                    </span>
                                                    </span>
                                                 </div>
                                              </div>
                                              <label class="wm_label wm_label_error">E-mail Verification Code</label>
                                              <label class="wm_label wm_label_error">E-mail Verification Code</label>
                                           </div>
                                        </div>
                                        <span class="error" id="email_otp_err"> </span>
                                        <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1">{{$data}}</span>
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
                                            <div id="o_otp_err" class="alert"></div>
                                        </div>
                                        @else
                                           <input type="hidden" class="verification_textbox" id="ro_otp" name="ro_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="000000">
                                        @endif
                                         <!-------------------end google authentication section ------->
                                    @csrf
                                    <div class="btn-div">
                                        <button type="button" class="submit_code border-0" id="verify_enable_phone">
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

        $(".email_get_code").click(function(){
            if (!checkPhone()) {
        	    return true;
            }
            var phone = $('#mobile').val();
            var _token = $("input[name=_token]").val();
            $.ajax({
                type:'POST',
                url:"{{ url( app()->getLocale(), 'send_otp_enable_secure_mail') }}",
                data:{ 'phone': phone,'_token':_token},
                success:function(data,status){
                    if(status=="success"){
                        $(".email_get_code").css("display", "none");
                        $(".email_code_sent").css("display", "block");
                        triggerAlert('OTP sent on your email address', 'success');
                    }else{
                      triggerAlert(status, 'error');
                    }
                },error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    $('#phone_err').html(erroJson.error);
                    $('#mobile').addClass('error_border');
                }
            });
        });


        $(".phone_get_code").click(function(){
            if (!checkPhone()) {
        	    return true;
            }
            var mobile = $('#mobile').val();
            var _token = $("input[name=_token]").val();
            $.ajax({
                type:'POST',
                url:"{{ url( app()->getLocale(), 'send_otp_enable_secure_phone') }}",
                data:{ 'mobile': mobile,'_token':_token},
                success:function(data,status){
                       if(status=="success"){
                        $("#getCode_phone").html(data.phone_data);
                        $(".phone_get_code").css("display", "none");
                        $(".phone_code_sent").css("display", "block");

                        triggerAlert('OTP sent on your phone number', 'success');
                    }else{
                      triggerAlert(status, 'error');
                    }
                },error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    $('#phone_err').html(erroJson.error);
                    $('#mobile').addClass('error_border');
                }
            });
        });

        function e_start(){
          var counter = 120;
          setInterval(function() {
            counter--;
            if (counter >= 0) {
              span = document.getElementById("email_count");
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


    	$("#verify_enable_phone").click(function() {
			if (!checkPhone()|| !check_email_otp() || !check_phone_otp()) {
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

                            var phone = $('#mobile').val();
                            var _token = $("input[name=_token]").val();
                            var phone_otp = $("#phone_otp").val();
                            var email_otp = $("#email_otp").val();
                            var o_otp =  $("#ro_otp").val();
                            $.ajax({
                                type:'POST',
                                url:"{{ url( app()->getLocale(), 'verify_enable_phone') }}",
                                data:{ 'phone': phone,'_token':_token,'phone_otp':phone_otp,'email_otp':email_otp, 'authenticator_otp': o_otp},
                                success:function(data,status){
                                    if(status=="success"){
                                        triggerAlert('Phone number authentication successfully enabled.', 'success');
                                        setTimeout(function(){
                                            window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
                                        }, 2000);
                                    }else{
                                      triggerAlert(status, 'error');
                                    }
                                },error: function(xhr, status, error) {
                                    var erroJson = JSON.parse(xhr.responseText);
                                    $('#phone_err').html(erroJson.error);
                                    $('#mobile').addClass('error_border');
                                }
                            });
    	}
		});

    	function checkPhone() {
            var phone = $('#mobile').val();
            if (phone == "") {
                $('#phone_err').html('Please enter your phone number');
                $('#mobile').addClass('error_border');
                return false;
            } else {
                $('#phone_err').html('');
                $('#mobile').removeClass('error_border');
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
