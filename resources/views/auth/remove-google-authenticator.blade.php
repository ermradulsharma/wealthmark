<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <title>Wealth Mark | Register</title>
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <style>

      </style>
    </head>
<body class="bg-white Remove_Wealthmark/Google_Authenticator">
    @include('template.custom_header')
    <main id="main" >
        <div class="container">
            <div class="back-div">
               <a href="{{ url(app()->getLocale())}}/user/security" target="_self" class="back-link">
                    <span class="back-arrow">
                        <i class="bi bi-chevron-left"></i>
                    </span>
                    <span class="text">   Security </span>
               </a>
            </div>
        </div>

        <section class="inner-page authentication-step pt-0">

        </section>

    <section class="inner-page register Authenticator pt-0 pb-0 mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mb-3 mt-4 pb-4">
                        <h2 class="text-center text-dark">Remove Wealthmark/Google Authenticator</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-md-5">

                    <div id="Auth-fourth-step">
                        <h3 class="mb-4 text-center">Security Verification</h3>
                        <div class="outer-div">
                            <form action="" method="post" id="authenticator_otp_frm">
                                <!--<form action="{{url("verify_google_authenticator")}}" method="POST">-->
                                @csrf
                                @if(Auth::user()->email !='' and Auth::user()->is_mail_verified=='1')
                                    <div class="verification_div">
                                        <div class="verification_main">
                                            <div class="verification_inner potp_verification_inner inner-css" id="email_error_border">
                                               <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="e_otp" name="e_opt" class="verification_textbox" value="">
                                               <div class="getCode_outer">
                                                  <div class="getCode_inner Get_Code_e" style="display:block" onclick="e_start()">Get Code</div>
                                                  <div class="getCode_inner code_sent_e" style="display:none" >
                                                     Verification Code Sent
                                                     <span class="tooltip txt_info">
                                                     <i class="bi bi-info-circle-fill"></i>
                                                     <span class="tooltiptext toolTop">
                                                     Haven’t received code? Request new code in
                                                     <span class="timer-counter" id="count_e">120</span>
                                                     <span id="text">seconds</span>
                                                     The code will expire after 30 mins.
                                                     </span>
                                                     </span>
                                                  </div>
                                               </div>
                                               <label class="wm_label wm_label_error">Email Verification Code</label>
                                            </div>
                                        </div>
                                        <div class="verification_innerInfo  error_text">Enter the 6-digit code sent to <span>{{$email_data}}</span> </div>
                                        <div id="e_otp_err" class="error_color"></div>
                                    </div>
                                @else
                                <input type="hidden" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="e_otp" name="e_opt" class="verification_textbox" value="000000">
                                @endif

                                @if(Auth::user()->phone !='' and Auth::user()->is_phone_verified=='1')
                                    <div class="verification_div mt-3">
                                        <div class="verification_main">
                                            <div class="verification_inner potp_verification_inner inner-css" id="phone_error_border">
                                               <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="p_otp" name="p_otp" class="verification_textbox" value="">
                                               <div class="getCode_outer">
                                                  <div class="getCode_inner Get_Code_p" style="display:block" onclick="p_start()">Get Code</div>
                                                  <div class="getCode_inner code_sent_p" style="display:none" >
                                                     Verification Code Sent
                                                     <span class="tooltip txt_info">
                                                     <i class="bi bi-info-circle-fill"></i>
                                                     <span class="tooltiptext toolTop">
                                                     Haven’t received code? Request new code in
                                                     <span class="timer-counter" id="count_p">120</span>
                                                     <span id="text">seconds</span>
                                                     The code will expire after 30 mins.
                                                     </span>
                                                     </span>
                                                  </div>
                                               </div>
                                               <label class="wm_label wm_label_error">Phone Verification Code</label>
                                            </div>
                                        </div>
                                        <div class="verification_innerInfo error_text">Enter the 6-digit code sent to <span>{{$phone_data}}</span> </div>
                                        <div id="p_otp_err" class="error_color"></div>
                                    </div>
                                @else
                                <input type="hidden" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="p_otp" name="p_otp" class="verification_textbox" value="000000">
                                @endif
                                    <div class="verification_div mt-3">
                                        <div class="verification_main">
                                            <div class="verification_inner  inner-css">
                                               <input type="text" class="verification_textbox" id="o_otp" name="o_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                               <label class="wm_label wm_label_error">Authenticator Code</label>
                                            </div>
                                        </div>
                                        <span class="error"> </span>
                                        <div class="verification_innerInfo error_text">Enter the 6-digit code from Wealthmark/Google Authenticator</div>
                                        <div id="o_otp_err" class="error_color"></div>
                                    </div>
                                    <div class="my-3 text-start"><span class="text-muted"><a href="" class="text-theme-yellow"> Security verification unavailable?</a></span></div>
                                    <!--<button type="submit" id="auth_4_complete" class="next">Next</button>-->
                            </form>
                        </div>

                        <div class="auth-btn-divs">
                            <button type="submit" id="auth_4_complete w-100" onclick=final_next() class="next btn-yellow border-0 w-100">Remove</button>
                        </div>
                    </div>

                    <div id="Auth-complete" style="display:none">
                        <div class="outer-div">
                            <div class="bar-code-div">
                              <img src="{{ asset('assets/img/auth-icons/create-account.svg') }}" class="complet-img">
                            </div>
                            <div class="complete-text">Remove Authenticator removed</div>
                            <div class="mb-4 subtitle">You have successfully removed Authenticator.</div>
                            <div class="auth-btn-divs">
                               <a href="{{ url(app()->getLocale())}}/user/security" class="next btn-defailt m-auto mt-5">Back to Secutiry</a>
                            </div>
                        </div>
                    </div>

                  </div>
               </div>
            </div>
         </section>
      </main>
      @include('template.copy_right_footer')
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>

      <script>
            function e_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("count_e");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".code_sent_e").css("display", "none");
                  $(".Get_Code_e").css("display", "block");
                }
              }, 1000);
            };

            function p_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("count_p");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".code_sent_p").css("display", "none");
                  $(".Get_Code_p").css("display", "block");
                }
              }, 1000);
            };

        function final_next() {
            var _token = $("input[name=_token]").val();
            var e_otp = $('#e_otp').val();
            var p_otp = $('#p_otp').val();
            var o_otp = $('#o_otp').val();
            if(e_otp==""){
                $('#e_otp_err').html("Please enter email otp");
                $('#email_error_border').addClass('error_border');
                return true;
            }

            if(p_otp==""){
                $('#p_otp_err').html("Please enter phone otp");
                $('#phone_error_border').addClass('error_border');
                return true;
            }

            if(o_otp==""){
                $('#o_otp_err').html("Please enter authenticator otp");
                $('#o_otp').addClass('error_border');
                return true;
            }

            if((o_otp!="" & o_otp.length==6) & (p_otp!="" & p_otp.length==6) & (e_otp!="" & e_otp.length==6)){
                $.ajax({
                    type:'POST',
                    url:"{{ url(app()->getLocale(), 'remove_action_google_authenticator') }}",
                    data:{'e_otp':e_otp, 'p_otp':p_otp, 'o_otp':o_otp, '_token':_token},
                    success:function(data,status){
                        if(status=="success"){
                            $('#step-4').addClass("is-complete");
                            $('#step-5').addClass("is-active is-complete");
                            $("#Auth-fourth-step").css("display", "none");
                            $("#Auth-complete").css("display", "block");
                            triggerAlert('Google authenticator removed successfully', 'success');
                            // $.ajax({
                                //     type:'POST',
                                //     url:"{{ url('2fa') }}",
                                //     data:{'one_time_password':o_otp, '_token':_token},
                                //     success:function(data,status){
                                //         if(status=="success"){
                                //             $.post("{{ url( app()->getLocale(), 'success_google_authenticator') }}",{auth_status: "yes", '_token':_token},function(data,status){
                                //                 if(status=="success"){
                                //                     $('#step-4').addClass("is-complete");
                                //                     $('#step-5').addClass("is-active is-complete");
                                //                     $("#Auth-fourth-step").css("display", "none");
                                //                     $("#Auth-complete").css("display", "block");
                                //                     triggerAlert('Google authenticator enabled successfully', 'success');
                                //                 }
                                //             });
                                //         }
                                //     },error: function(xhr, status, error) {
                                //         var erroJson = JSON.parse(xhr.responseText);
                                //         triggerAlert(erroJson.message, 'error');
                                //     }
                                // })
                            // }else{
                            //     triggerAlert('Google authenticator can not be enabled', 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.error, 'error');
                    }
                });
            }
        }


         $('.tooltips').append("<span></span>");
            $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');

            $(".tooltips").mouseenter(function(){
               $(this).find('span').empty().append($(this).attr('tooltip'));
            });

            $(".Get_Code_p").click(function(){
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_phone') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            $(".Get_Code_p").css("display", "none");
                            $(".code_sent_p").css("display", "block");
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

            $(".Get_Code_e").click(function(){
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_email_authenticator') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            $(".Get_Code_e").css("display", "none");
                            $(".code_sent_e").css("display", "block");
                            triggerAlert('OTP sent on your email address', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                    }
                });
            });


            $("#auth_3_complete").click(function(){
                var _token = $("input[name=_token]").val();
                 var code = $('#code').val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'associate_secret_key') }}",
                    data:{ '_token':_token,'code':code},
                    success:function(data,status){
                        if(status=="success"){
                            $('#step-3').addClass("is-complete");
                            $('#step-4').addClass("is-active");
                            $("#Auth-third-step").css("display", "none");
                            $("#Auth-fourth-step").css("display", "block");
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert('Somthing went wrong', 'error');
                    }
                });
            });
      </script>
   </body>
</html>
