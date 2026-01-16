<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | OTP</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">

       @include('template.web_css')


      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">

      <style>
      body{
          background:white;
      }
        #reset-pass-form- .icon-over{
             top: 15px !important;
         }
      </style>
      <style>


      </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
        <main id="main" >
            <section class="inner-page register">
                <div class="container">
                    <div class="container step-2" id="reset-pass-form-">
                        <div class="row align-items-center justify-content-evenly">
                            <div class="col-lg-10 col-md-6 d-sm-none d-block">
                                <h4 class="form-heading mb-4">
                                   Reset Your Password
                                </h4>
                                <?php // print_r($_SESSION); ?>
                                 </div>

                        </div>
                                <div class="row align-items-center justify-content-evenly">
                                     <div class="col-lg-4 col-md-6 col-sm-6 order-md-2">
                                <img src="{{ asset('img/auth-icons/password_change.png') }}" class="w-100">
                            </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 order-md-1">
                                         <h4 class="form-heading mb-4  d-md-block ">
                                   Reset Your Password
                                </h4>
                                        <form action="" method="post" id="pass_frm">
                                            @csrf
                                            <div class="form-floating mb-3 clearable-input">
                                                <input name="password" type="password" class="form-control input pass-validation searchinput" id="NewPassword" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">
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
                                                <input name="password" type="password" class="form-control input pass-validation searchinput" id="ConfirmPassword" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1">
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
                                                <button type="button" class="btn-yellow w-100 border-0 shadow-none submit_code" id="submit_code">
                                                   <div class="inner_text">Next</div>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                    </div>
                </div>
            </section>
        </main>


      @include('template.copy_right_footer')
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>
 <!-------------------------------shubham---------------------------------->

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('assets/js/alert.js') }}"></script>
         <script src="{{ asset('assets/js/login_register.js') }}"></script>
        <!----------------------------------------------------------------1------------------------------------------------------------->
          @include('template.web_js')

        <script>
            function check_password(){
                var password = $("#NewPassword").val();
                var confirmPassword = $("#ConfirmPassword").val();
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
                    var password = $("#NewPassword").val();
                    var confirmPassword = $("#ConfirmPassword").val();
                    var _token = $("input[name=_token]").val();
                    check_password();
                    $.ajax({
                            type: "POST",
                            url: '{{ url( app()->getLocale()) }}/submit_reset_pass',
                            data: {'password': password,'confirmPassword': confirmPassword,'_token':_token,},
                            success: function(data) {
                               $('#pass_frm').trigger("reset");
                                window.location.href = '{{ url( app()->getLocale()) }}/pass_success';
                            },
                            error: function(xhr, status, error) {
                               var erroJson = JSON.parse(xhr.responseText);
                               var error=erroJson.error;
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




           function password_show_hide1() {
           var x = document.getElementById("NewPassword");
           var show_eye1 = document.getElementById("show_eye1");
           var hide_eye1 = document.getElementById("hide_eye1");
           hide_eye1.classList.remove("d-none");
           if (x.type === "password") {
             x.type = "text";
             show_eye1.style.display = "none";
             hide_eye1.style.display = "inline-block";
           } else {
             x.type = "password";
             show_eye1.style.display = "inline-block";
             hide_eye1.style.display = "none";
           }
         }

         function password_show_hide() {
           var x = document.getElementById("ConfirmPassword");
           var show_eye1 = document.getElementById("show_eye");
           var hide_eye1 = document.getElementById("hide_eye");
           hide_eye1.classList.remove("d-none");
           if (x.type === "password") {
             x.type = "text";
             show_eye1.style.display = "none";
             hide_eye1.style.display = "inline-block";
           } else {
             x.type = "password";
             show_eye1.style.display = "inline-block";
             hide_eye1.style.display = "none";
           }
         }




        </script>
   </body>
</html>
