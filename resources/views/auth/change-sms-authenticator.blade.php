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
<body class="bg-white">
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



    <section class="inner-page register Authenticator pt-0 pb-0 mt-0">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-md-5">
                    <div id="Auth-first-step">
                        <h3 class="mb-4 text-center">Update phone by <br>verifying your identity</h3>

                         @if(Auth::user()->is_phone_verified=='1')
                        <div class="tab-content mb-4" id="pills-tabContent">
                              <div class="alert " role="alert" id="update_phone_error"></div>
                            <div class="tab-pane fade show active pb-4" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="outer-div">

                                    <form action="" method="post" id="change_email_otp_frm">
                                        @csrf

                                        <!----------  new phone section  ---------->

                                           <div class="verification_div">
                                                <div class="verification_main">
                                                   <div class="verification_inner potp_verification_inner inner-css" id="update_newPhone">
                                                       <input type="input" pattern="\d*" id="newPhone" name="newPhone" class="verification_textbox" value="">

                                                       <label class="wm_label wm_label_error">New phone</label>
                                                    </div>
                                                </div>
                                           </div>

                                         <div class="verification_div">
                                                <div class="verification_main">
                                                    <div class="verification_inner potp_verification_inner inner-css" id="new_phone_error_border">
                                                       <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="new_rp_opt" name="new_rp_opt" class="verification_textbox" value="">
                                                       <div class="getCode_outer">
                                                          <div class="getCode_inner newphonerGet_Code_e" style="display:block" onclick="newphone_re_start()">Get Code</div>
                                                          <div class="getCode_inner newphonercode_sent_e" style="display:none" >
                                                             Verification Code Sent
                                                             <span class="tooltip txt_info">
                                                             <i class="bi bi-info-circle-fill"></i>
                                                             <span class="tooltiptext toolTop">
                                                             Haven’t received code? Request new code in
                                                             <span class="timer-counter" id="newphone_rcount_e">120</span>
                                                             <span id="text">seconds</span>
                                                             The code will expire after 30 mins.
                                                             </span>
                                                             </span>
                                                          </div>
                                                       </div>
                                                       <label class="wm_label wm_label_error">New phone Verification Code</label>
                                                    </div>
                                                </div>

                                                <div id="new_p_otp_err" class="fs-12 text-red"></div>
                                            </div>
                                            <!---------- // end new phone section ---------->

                                         <!-------------------previous phone authentication section ------->
                                        @if(Auth::user()->phone !='' and Auth::user()->is_phone_verified=='1')
                                            <div class="verification_div mt-3">
                                                <div class="verification_main">
                                                    <div class="verification_inner potp_verification_inner inner-css" id="phone_error_border">
                                                       <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="rp_otp" name="rp_otp" class="verification_textbox" value="">
                                                       <div class="getCode_outer">
                                                          <div class="getCode_inner rGet_Code_p" style="display:block" onclick="rp_start()">Get Code</div>
                                                          <div class="getCode_inner rcode_sent_p" style="display:none" >
                                                             Verification Code Sent
                                                             <span class="tooltip txt_info">
                                                             <i class="bi bi-info-circle-fill"></i>
                                                             <span class="tooltiptext toolTop">
                                                             Haven’t received code? Request new code in
                                                             <span class="timer-counter" id="rcount_p">120</span>
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
                                                <div id="p_otp_err" class="fs-12 text-red"></div>
                                            </div>
                                        @else
                                        <input type="hidden" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="rp_otp" name="rp_otp" class="verification_textbox" value="000000">
                                        @endif
                                         <!------------------- previous email authentication section ------->

                                        @if(Auth::user()->email !='' and Auth::user()->is_mail_verified=='1')
                                            <div class="verification_div">
                                                <div class="verification_main">
                                                    <div class="verification_inner potp_verification_inner inner-css" id="email_error_border">
                                                       <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="re_otp" name="re_opt" class="verification_textbox" value="">
                                                       <div class="getCode_outer">
                                                          <div class="getCode_inner rGet_Code_e" style="display:block" onclick="re_start()">Get Code</div>
                                                          <div class="getCode_inner rcode_sent_e" style="display:none" >
                                                             Verification Code Sent
                                                             <span class="tooltip txt_info">
                                                             <i class="bi bi-info-circle-fill"></i>
                                                             <span class="tooltiptext toolTop">
                                                             Haven’t received code? Request new code in
                                                             <span class="timer-counter" id="rcount_e">120</span>
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
                                                <div id="e_otp_err" class="fs-12 text-red"></div>
                                            </div>

                                        @else
                                        <input type="hidden" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="re_otp" name="re_opt" class="verification_textbox" value="000000">
                                        @endif



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
                                            <div id="o_otp_err" class="fs-12 text-red"></div>
                                        </div>
                                        @else
                                           <input type="hidden" class="verification_textbox" id="ro_otp" name="ro_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="000000">
                                        @endif
                                         <!-------------------end google authentication section ------->


                                        <div class="my-3 text-start"><span class="text-muted"><a href="" class="text-theme-yellow"> Security verification unavailable?</a></span></div>
                                    </form>
                                </div>
                                <button type="button" id="updateNewPhone"  class="btn-yellow-fw btn-yellow border-0 w-100">Update phone</button>
                            </div>
                        </div>
                        @endif
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------->

                    <div id="Auth-complete" style="display:none">
                        <div class="outer-div">
                            <div class="bar-code-div">
                              <img src="{{ asset('img/auth-icons/create-account.svg') }}" class="complet-img">
                            </div>
                            <div class="complete-text">Email Changed Successfully</div>
                            <div class="subtitle">You have successfully Changed email.</div>
                            <div class="auth-btn-divs">
                               <a href="{{ url(app()->getLocale())}}/user/security" class="next btn-default m-auto mt-5">Back to Secutiry</a>
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
            function re_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("rcount_e");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".rcode_sent_e").css("display", "none");
                  $(".rGet_Code_e").css("display", "block");
                }
              }, 1000);
            };

        function newphone_re_start(){

              var newcounter = 120;
              setInterval(function() {
                newcounter--;
                if (newcounter >= 0) {
                  span = document.getElementById("newphone_rcount_e");
                  span.innerHTML = newcounter;
                }

                if (newcounter === 0) {
                    clearInterval(newcounter);
                  $(".newphonercode_sent_e").css("display", "none");
                  $(".newphonerGet_Code_e").css("display", "block");
                }
              }, 1000);
            };

            function rp_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("rcount_p");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".rcode_sent_p").css("display", "none");
                  $(".rGet_Code_p").css("display", "block");
                }
              }, 1000);
            };


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



         $('.tooltips').append("<span></span>");
            $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');

            $(".tooltips").mouseenter(function(){
               $(this).find('span').empty().append($(this).attr('tooltip'));
            });

            $(".rGet_Code_p").click(function(){
                //$(".Get_Code_p").css("display", "none");
                //$(".code_sent_p").css("display", "block");
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_phone') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            $(".rGet_Code_p").css("display", "none");
                            $(".rcode_sent_p").css("display", "block");
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

            $(".rGet_Code_e").click(function(){
                // $(".Get_Code_e").css("display", "none");
                // $(".code_sent_e").css("display", "block");
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_email_authenticator') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            //$("#getCode_email").html(data.email_data);
                            $(".rGet_Code_e").css("display", "none");
                            $(".rcode_sent_e").css("display", "block");
                            triggerAlert('OTP sent on your email address', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        //$('#email_err').html(erroJson.error);
                        //$('#email').addClass('error_border');
                    }
                });
            });


              $(".newphonerGet_Code_e").click(function(){

                var _token = $("input[name=_token]").val();
                 var phoneToUpdate = $("#newPhone").val();

                 if(phoneToUpdate == '' || phoneToUpdate.length !=10 ){
                     $("#new_p_otp_err").text("invalid phone!");
                     $("#new_p_otp_err").addClass("alert-danger");

                     setTimeout(function(){
                     $("#new_p_otp_err").text("");
                     $("#new_p_otp_err").removeClass("alert-danger");
                     }, 4000);

                     }else{

                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_changedNew_phone_authenticator') }}",
                    data:{
                        '_token':_token,
                        'phone': phoneToUpdate

                        },
                    success:function(data,status){
                           if(status=="success"){

                             $(".newphonercode_sent_e").css("display", "block");
                            $(".newphonerGet_Code_e").css("display", "none");

                            triggerAlert('OTP sent on your new phone', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        //console.log(erroJson);
                         console.log(erroJson.error.phone);
                         if(erroJson.error.phone){
                            triggerAlert(erroJson.error.phone, 'error');
                         }

                        // $('#update_phone_error').addClass('alert-danger').text(erroJson.error.phone);
                        // $('#update_newPhone').addClass('error_border');

                        // setTimeout(function(){
                        //  $('#update_phone_error').removeClass('alert-danger').text('');
                        // $('#update_newPhone').removeClass('error_border');
                        // },4000)
                    }
                });
              }
            });


            $(".Get_Code_p").click(function(){
                //$(".Get_Code_p").css("display", "none");
                //$(".code_sent_p").css("display", "block");
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
                // $(".Get_Code_e").css("display", "none");
                // $(".code_sent_e").css("display", "block");
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_email_authenticator') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            //$("#getCode_email").html(data.email_data);
                            $(".Get_Code_e").css("display", "none");
                            $(".code_sent_e").css("display", "block");
                            triggerAlert('OTP sent on your email address', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        //$('#email_err').html(erroJson.error);
                        //$('#email').addClass('error_border');
                    }
                });
            });

            $("#updateNewPhone").click(function(){
                var _token = $("input[name=_token]").val();
                 var newPhone = $('#newPhone').val();
                 var new_p_otp = $('#new_rp_opt').val();
                var e_otp = $('#re_otp').val();
                var p_otp = $('#rp_otp').val();
                var o_otp = $('#ro_otp').val();



                 if(new_p_otp==""){
                    $('#new_p_otp_err').html("Please enter phone otp");
                    $('#new_phone_error_border').addClass('error_border');
                    return true;
                }

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

                if((new_p_otp!="" & new_p_otp.length==6) & (o_otp!="" & o_otp.length==6) & (p_otp!="" & p_otp.length==6) & (e_otp!="" & e_otp.length==6)){
                    $.ajax({
                        type:'POST',

                        url:"{{ url(app()->getLocale(), 'change_newPhone_authentication') }}",
                        data:{ 'phone':newPhone, 'new_p_otp':new_p_otp, 'e_otp':e_otp, 'p_otp':p_otp, 'o_otp':o_otp, '_token':_token},
                        success:function(data,status){
                            if(status=="success"){
                                // $('#step-1').addClass("is-complete");
                                // $('#step-2').addClass("is-active");
                                 $("#Auth-first-step").css("display", "none");
                                $("#Auth-complete").css("display", "block");

                                //triggerAlert('Authenticator removed successfully', 'success');
                                triggerAlert('new phone updated successfully', 'success');
                            }
                        },error: function(xhr, status, error) {
                            var erroJson = JSON.parse(xhr.responseText);
                            triggerAlert(erroJson.error, 'error');
                        }
                    });
                }


            });




      </script>
   </body>
</html>
