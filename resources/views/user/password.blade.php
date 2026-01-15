<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Change Password</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <!--<link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">-->
      <!--<link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">-->
      <!--<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">-->
      <!--<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">-->
      <!--<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">-->
      <!--<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">-->
      <!--<link href="{{ asset('assets/css/niceCountryInput.css') }}" rel="stylesheet">-->
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />-->
      <!--<link href="{{ asset('assets/css/style_main.css') }}" rel="stylesheet">-->
      <!--<link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">-->
      <!--<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">-->
      <!--<link rel="stylesheet" href="{{ asset('assets/wealthmark_new/css/style.css') }}">-->
      <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">-->
      <!--<link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">-->
      <!--  <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">-->
      <!--<link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">-->

          @include('template.web_css')
       <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
   <style>
      /*   .error_border{border:1px solid red;}*/
      /*   .error input {*/
      /*   border-color: red;*/
      /*   border-width: 2px;*/
      /*   }*/
      /*   .success input {*/
      /*   border-color: green;*/
      /*   border-width: 2px;*/
      /*   }*/
      /*   .error span {*/
      /*   color: red;*/
      /*   }*/
      /*   .success span {*/
      /*   color: green;*/
      /*   }*/
      /*   span.error {*/
      /*   font-size: 14px;*/
      /*   color: red;*/
      /*   }*/
    </style>
      <style>
      /*   .tooltip {*/
      /*   position: relative;*/
      /*   display: inline-block;*/
      /*   border-bottom: 1px dotted black;*/
      /*   opacity:1;*/
      /*   }*/
      /*   .tooltip .tooltiptext {*/
      /*   visibility: hidden;*/
      /*   width: 250px;*/
      /*   background-color: black;*/
      /*   color: #fff;*/
      /*   text-align: center;*/
      /*   border-radius: 6px;*/
      /*   padding: 5px 10px;*/
      /*   position: absolute;*/
      /*   z-index: 999999;*/
      /*   right: 29px;*/
      /*   left: -50px;*/
      /*   bottom: 30px;*/
      /*   }*/
      /*   .tooltip:hover .tooltiptext {*/
      /*   visibility: visible;*/
      /*   }		*/
      /*   .toolLeft {*/
      /*   top: -5px;*/
      /*   right: 105%;*/
      /*   }					*/
      /*   .toolRight {*/
      /*   top: -5px;*/
      /*   left: 105%;*/
      /*   }*/
      /*   .toolTop {*/
      /*   bottom: 100%;*/
      /*   left: 50%;*/
      /*   margin-left: -60px;*/
      /*   }*/
      /*   .toolBottom {*/
      /*   top: 100%;*/
      /*   left: 50%;*/
      /*   margin-left: -60px;*/
      /*   }*/
      /*   .timer-counter{*/
      /*   color:#fec00f;*/
      /*   }*/
      /*  .reset-bg {*/
      /*      background-color: rgb(254, 246, 216)!important;*/
      /*  }*/
     </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
        <main id="main" >
            <section class="inner-page register">
                <div class="container">
                    <div class="container step-2">
                        <div class="row">
                            <div class="back-div">
                                   <a href="javascript:void(0)" onclick="history.back()" class="back-link">
                                        <span class="back-arrow">
                                            <i class="bi bi-chevron-left"></i>
                                        </span>
                                        <span class="text">   Back </span>
                                   </a>
                            </div>
                            <div class="col-lg-4 col-md-6 offset-md-1 offset-lg-2">
                                <h3 class="form-heading mb-4 text-left">
                                    Change Password
                                </h3>

                                <div class="row">
                                    <div class="col-md-12">

                                          <div class="reset-bg p-3 d-flex align-items-center rounded mb-4">
                                        <span class="offer-text-head me-3">
                                            <i class="bi bi-exclamation-circle-fill reset-text"></i>
                                        </span>
                                        <span class="fs-14">&nbsp;Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.</span>
                                    </div>

                                        <form action="" method="post" id="pass_frm">
                                            @csrf
                                            <div class="form-floating mb-3 clearable-input">
                                                <input name="password" type="password" class="form-control input pass-validation searchinput" id="OldPassword" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">
                                                <div class="icon-over">
                                                    <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                                      <span class="input-group-eye " onclick="password_show_hide2();">
                                                       <i class="bi bi-eye-slash " id="show_eye2"></i>
                                                       <i class="bi bi-eye d-none" id="hide_eye2"></i>
                                                    </span>
                                                </div>
                                                <label for="floatingPassword">Old Password</label>
                                                <span class="error" id="opassword_err"></span>
                                            </div>

                                            <div class="form-floating mb-3 clearable-input">
                                                <input name="password" type="password" class="form-control input pass-validation searchinput" id="password1" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">
                                                <div class="icon-over">
                                                    <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                                      <span class="input-group-eye " onclick="password_show_hide1();">
                                                       <i class="bi bi-eye-slash " id="show_eye1"></i>
                                                       <i class="bi bi-eye d-none" id="hide_eye1"></i>
                                                    </span>
                                                </div>
                                                <label for="floatingPassword">New Password</label>
                                                <span class="error" id="npassword_err"></span>
                                            </div>

                                            <div class="form-floating has-feedback clearable-input clearable-input">
                                                <input name="password" type="password" class="form-control input pass-validation searchinput" id="password" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1">
                                                <div class="icon-over" style="display: block;">
                                                    <span class="cross-btn-clear" data-clear-input="">  <i class="bi bi-x-circle-fill"></i> </span>
                                                    <span class="input-group-eye " onclick="password_show_hide();">
                                                       <i class="bi bi-eye-slash " id="show_eye"></i>
                                                       <i class="bi bi-eye d-none" id="hide_eye"></i>
                                                    </span>
                                                </div>
                                                <label for="floatingPassword">Confirm Password</label>
                                                <span class="error" id="cpassword_err"></span>
                                            </div>
                                            <span class="error" id="password_error"></span>
                                            <div class="btn-div mt-3">
                                                <button type="button" class="submit_code btn-yellow border-0 d-block w-100" id="submit_code">
                                                   <div class="inner_text">Confirm</div>
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
        <!--<script src="{{ asset('assets/js/niceCountryInput.js') }}"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>-->
        <script src="{{ asset('assets/js/alert.js') }}"></script>
        <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
        <script src="{{ asset('assets/js/login_register.js') }}"></script>
        <script>
            function check_password(){
                var OldPassword = $("#OldPassword").val();
                var password = $("#password").val();
                var confirmPassword = $("#password1").val();
                if(OldPassword ==""){
                    $('#OldPassword').addClass('error_border');
                    $("#opassword_err").html("Please enter old password");
                    return true;
                }

                if(password ==""){
                    $('#NewPassword').addClass('error_border');
                    $("#npassword_err").html("Please enter new password");
                    return true;
                }

                if(confirmPassword ==""){
                    $('#ConfirmPassword').addClass('error_border');
                    $("#cpassword_err").html("Please enter confirm password");
                    return true;
                }

                if(password != confirmPassword){
                    $('#NewPassword').addClass('error_border');
                    $('#ConfirmPassword').addClass('error_border');
                    $("#cpassword_err").html("The confirm password and password must match.");
                    return true;
                }
            }

            $(document).ready(function () {
                $("#submit_code").click('keyup', function(){
                    var OldPassword = $("#OldPassword").val();
                    var password = $("#password").val();
                    var confirmPassword = $("#password1").val();
                    var _token = $("input[name=_token]").val();
                    check_password();
                    $.ajax({
                            type: "POST",
                            url: '{{ url( app()->getLocale()) }}/user/submit_change_pass',
                            data: {'OldPassword': OldPassword,'password': password,'confirmPassword': confirmPassword,'_token':_token,},
                            success: function(data) {
                                $('#pass_frm').trigger("reset");
                                window.location.href = '{{ url( app()->getLocale()) }}/user/change_password_otp';
                            },
                            error: function(xhr, status, error) {
                               var erroJson = JSON.parse(xhr.responseText);
                               var error=erroJson.error;
                                if(error.OldPassword){
                                  $('#OldPassword').addClass('error_border');
                                  $("#opassword_err").html(error.OldPassword);
                                }
                                if(error.confirmPassword){
                                  $('#ConfirmPassword').addClass('error_border');
                                  $("#cpassword_err").html(error.confirmPassword);
                                }
                                if(error.password){
                                  $('#NewPassword').addClass('error_border');
                                  $("#npassword_err").html(error.password);
                                }
                            }
                    });
                });
            });
        </script>
   </body>
</html>
