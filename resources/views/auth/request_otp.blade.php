<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | OTP</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
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
      <style>
         .error_border{border:1px solid red;}
         .success_border{border:2px solid green;}
         .error input {
         border-color: red;
         border-width: 2px;
         }
         .success input {
         border-color: green;
         border-width: 2px;
         }
         .error span {
         color: red;
         }
         .success span {
         color: green;
         }
         span.error {
         font-size: 14px;
         color: red;
         }
      </style>
      <style>
         .tooltip {
         position: relative;
         display: inline-block;
         border-bottom: 1px dotted black;
         opacity:1;
         }
         .tooltip .tooltiptext {
         visibility: hidden;
         width: 250px;
         background-color: black;
         color: #fff;
         text-align: center;
         border-radius: 6px;
         padding: 5px 10px;
         position: absolute;
         z-index: 999999;
         right: 29px;
         left: -50px;
         bottom: 30px;
         }
         .tooltip:hover .tooltiptext {
         visibility: visible;
         }
         .toolLeft {
         top: -5px;
         right: 105%;
         }
         .toolRight {
         top: -5px;
         left: 105%;
         }
         .toolTop {
         bottom: 100%;
         left: 50%;
         margin-left: -60px;
         }
         .toolBottom {
         top: 100%;
         left: 50%;
         margin-left: -60px;
         }
         .timer-counter{
         color:#fec00f;
         }
      </style>
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
                               Security verification
                            </h4>
                            <p class="mt-2 mb-4">To secure your account, please complete the following verification.</p>
                            <?php
                            $email = $_SESSION['email_id'];
                            function hideEmailAddress($email)
                            {
                                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                                {
                                    list($first, $last) = explode('@', $email);
                                    $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
                                    $last = explode('.', $last);
                                    $last_domain = str_replace(substr($last['0'], '10'), str_repeat('*', strlen($last['0'])-1), $last['0']);
                                    $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
                                    return $hideEmailAddress;
                                }
                            }
                            ?>
                            <div class="row">
                               <div class="col-md-12">
                                    <form action="" method="post" id="email_otp_frm">
                                        {{ csrf_field() }}
                                        <div class="verification_div">
                                            <div class="verification_main">
                                               <div class="verification_inner potp_verification_inner inner-css">
                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="p_otp" class="verification_textbox" value="">
                                                  <div class="getCode_outer getCode_outer1">
                                                     <div class="getCode_inner Get_Code_p" style="display:block" onclick="pstart()">Get Code</div>
                                                     <div class="getCode_inner code_sent_p" style="display:none" >
                                                        Verification Code Sent
                                                        <span class="tooltip txt_info">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                        <span class="tooltiptext toolTop">
                                                        Haven’t received code? Request new code in
                                                        <span class="timer-counter" id="count_p">5</span>
                                                        <span id="text">seconds</span>
                                                        The code will expire after 30 mins.
                                                        </span>
                                                        </span>
                                                     </div>
                                                  </div>
                                                  <label class="wm_label wm_label_error">Phone Number Verification Code</label>
                                                  <label class="wm_label wm_label_error">Phone Number Verification Code</label>
                                               </div>
                                            </div>
                                            <span class="error" id="p_otp_err"> </span>
                                            <div class="verification_innerInfo  error_text">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1">{{ substr($_SESSION['phone_number'], 0, 3) . "***" . substr($_SESSION['phone_number'], 6, 4) }}</span> </div>
                                        </div>

                                        <div class="verification_div mt-3">
                                            <div class="verification_main">
                                               <div class="verification_inner eotp_verification_inner inner-css">
                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="e_otp" class="verification_textbox" value="">
                                                  <div class="getCode_outer getCode_outer1">
                                                     <div class="getCode_inner Get_Code_e" style="display:block" onclick="estart()">Get Code</div>
                                                     <div class="getCode_inner code_sent_e" style="display:none" >
                                                        Verification Code Sent
                                                        <span class="tooltip txt_info">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                        <span class="tooltiptext toolTop">
                                                        Haven’t received code? Request new code in
                                                        <span class="timer-counter" id="count_e">5</span>
                                                        <span id="text">seconds</span>
                                                        The code will expire after 30 mins.
                                                        </span>
                                                        </span>
                                                     </div>
                                                  </div>
                                                  <label class="wm_label wm_label_error">Email Verification Code</label>
                                                  <label class="wm_label wm_label_error">Email Verification Code</label>
                                               </div>
                                            </div>
                                            <span class="error" id="e_otp_err"> </span>
                                            <div class="verification_innerInfo  error_text">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1">{{ hideEmailAddress($email) }}</span>
                                            </div>
                                        </div>
                                        <div class="my-3"><span class="text-muted"><a href="" class="text-theme-yellow"> Security verification unavailable?</a></span></div>
                                        <div class="btn-div">
                                            <a href="#" class="submit_code" id="submit_otp">
                                               <div class="inner_text">Next</div>
                                            </a>
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
                $('.tooltips').append("<span></span>");
                $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');

                $(".tooltips").mouseenter(function(){
                    $(this).find('span').empty().append($(this).attr('tooltip'));
                });

                $(".Get_Code_p").click(function(){
                    $.post("<?php echo url('api/send_otp_by_secure_phone');  ?>",
                    function(data,status){
                        if(status=="success"){
                            $(".Get_Code_p").css("display", "none");
                            $(".code_sent_p").css("display", "block");
                            triggerAlert('OTP sent on your phone number', 'success');
                        }else{
                           triggerAlert(status, 'error');
                        }
                    });
                });

                $(".Get_Code_e").click(function(){
                    $.post("<?php echo url('api/send_otp_by_secure_mail');  ?>",
                    function(data,status){
                        if(status=="success"){
                            $(".Get_Code_e").css("display", "none");
                            $(".code_sent_e").css("display", "block");
                            triggerAlert('OTP sent on your email address', 'success');
                        }else{
                           triggerAlert(status, 'error');
                        }
                    });
                });

                function pstart(){
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

                function estart(){
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

                $(document).ready(function () {
            	    var spinner = $('#loader');
            		$("#p_otp").keyup(function() {
            			var otp = $('#p_otp').val();
            			var count = otp.length;
            			if(count==6){
            			    spinner.show();
            				$.ajax({
            					type: "POST",
            					url: "<?php echo url('api/verify_Lphone_otp');  ?>",
            					data: {'phone_otp':otp},
            					dataType: "json",
            					encode: true,
            				}).done(function (data) {
            				    $('#p_otp_err').html('<span style="color:green!important;">Valid</span>');
                                $('.potp_verification_inner').addClass('success_border');
                                $('.potp_verification_inner').removeClass('error_border');

            				// 	triggerAlert('success', 'success');
            				}).fail(function(jqXHR, textStatus, errorThrown)  {
            				    $('#p_otp_err').html('Please enter valid otp');
                                $('.potp_verification_inner').addClass('error_border');
                                $('.potp_verification_inner').removeClass('success_border');
                            });
            			}
            		});
            	});





                $(document).ready(function () {
            	    var spinner = $('#loader');
            		$("#e_otp").keyup(function() {
            			var otp = $('#e_otp').val();
            			var count = otp.length;
            			if(count==6){
            			    spinner.show();
            				$.ajax({
            					type: "POST",
            					url: "<?php echo url('api/verify_Lemail_otp');  ?>",
            					data: {'email_otp':otp},
            					dataType: "json",
            					encode: true,
            				}).done(function (data) {
            				    $('#e_otp_err').html('<span style="color:green!important;">Valid</span>');
                                $('.eotp_verification_inner').addClass('success_border');
                                $('.eotp_verification_inner').removeClass('error_border');
            				// 	triggerAlert('success', 'success');
            				}).fail(function(jqXHR, textStatus, errorThrown)  {
            				    $('#e_otp_err').html('Please enter valid otp');
                                $('.eotp_verification_inner').addClass('error_border');
                                 $('.eotp_verification_inner').removeClass('success_border');
                            });
            			}
            		});
            	});

            	$(document).ready(function () {
            		$("#submit_otp").click(function() {
            			var p_otp = $('#p_otp').val();
            			var e_otp = $('#e_otp').val();
            			//var token = $('#e_otp').val();
            			var token = $("input[name=_token]").val();
            			//alert(e_otp);
            			var p_count = p_otp.length;
            			var e_count = e_otp.length;
            			if(p_count==6 && e_count==6){
            				$.ajax({
            					type: "POST",
                                url: '{{ url(app()->getLocale(),'verify_otp')}}',
                                data: {'email_otp':e_otp,'phone_otp':p_otp,'_token':token},
            					success: function(data) {
                                    $('#email_otp_frm').trigger("reset");
                                    triggerAlert('Congratulations! You have successfully logged in Wealthmark account.', 'success');
                                    setTimeout(function(){
                                        window.location.href = '<?php echo url( app()->getLocale(), 'dashboard');  ?>';
                                    }, 3000);
                                },
                                error: function(xhr, status, error) {
                                   var erroJson = JSON.parse(xhr.responseText);
                                   //alert(erroJson.error);
                                }

            				});
            			}
            		});
            	});
        </script>
   </body>
</html>
