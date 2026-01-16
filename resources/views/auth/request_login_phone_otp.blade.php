<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Phone OTP</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      <!--<link href="{{ asset('assets/css/niceCountryInput.css') }}" rel="stylesheet">-->
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />-->
      <link href="{{ asset('assets/css/style_main.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
      <!--<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">-->
      <!--<link rel="stylesheet" href="{{ asset('assets/wealthmark_new/css/style.css') }}">-->
      <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">-->
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
                           Security verification
                        </h4>
                        <p class="mt-2 mb-4">To secure your account, please complete the following verification.</p>
                        <div class="row">
                           <div class="col-md-12">
                               <?php // print_r($_SESSION); ?>
                                <form action="" method="post" id="phone_otp_frm">
                                     @csrf
                                    <div class="verification_div">
                                        <div class="verification_main">
                                           <div class="verification_inner inner-css" >
                                              <!--<input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="{{ (($_SESSION['is_two_factor'] == 1) || ($_SESSION['is_mail_verified'] == 1) ? 'potp' : 'otp')}}" class="verification_textbox" value="">-->
                                             <input type="input" pattern="\d*" maxlength="6"  oninput="activeButton(),this.value=this.value.replace(/[^0-9]/g,'')" aria-label="Phone Number Verification Code" id="{{ (($_SESSION['is_two_factor'] == 1) || ($_SESSION['is_mail_verified'] == 1) ? 'potp' : 'otp')}}" class="verification_textbox" value="">

                                              <div class="getCode_outer getCode_outer1">
                                                 <div class="getCode_inner Get_Code" id="Get_Code" style="display:block" onclick="start()">Get Code</div>
                                                 <div class="getCode_inner code_sent" style="display:none" >
                                                    Verification Code Sent
                                                    <span class="tooltip txt_info">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                    <span class="tooltiptext toolTop">
                                                    Haven’t received code? Request new code in
                                                    <span class="timer-counter" id="count"></span>
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
                                        <div class="verification_innerInfo  error_text">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1">{{ substr($_SESSION['phone_number'], 0, 3) . "***" . substr($_SESSION['phone_number'], 6, 4) }}</span> </div>
                                       <div id="p_otp_err" class="error_color"></div>
                                    </div>
                                       @if($_SESSION['is_mail_verified'] == 1)
                                        <div class="verification_div">
                                            <div class="verification_main">
                                               <div class="verification_inner inner-css" id="email_error_border">
                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="activeButton(),this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="eotp" class="verification_textbox" value="">
                                                  <div class="getCode_outer getCode_outer1">
                                                     <div class="getCode_inner e_Get_Code" id="e_Get_Code" style="display:block" onclick="e_start()">Get Code</div>
                                                     <div class="getCode_inner e_code_sent" style="display:none" >
                                                        Verification Code Sent
                                                        <span class="tooltip txt_info">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                        <span class="tooltiptext toolTop">
                                                        Haven’t received code? Request new code in
                                                        <span class="timer-counter" id="e_count">5</span>
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
                                            <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1">{{ $data }}</span>
                                            </div>
                                            <div id="e_otp_err" class="error_color"></div>
                                         </div>
                                         @else
                                         <input type="hidden" pattern="\d*" maxlength="6"  oninput="activeButton(),this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="eotp" class="verification_textbox" value="000000">
                                         @endif


                                            @if($_SESSION['is_two_factor'] == 1)
                                            <div class="verification_div ">
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
                                            @else
                                             <input type="hidden" class="verification_textbox" id="o_otp" name="o_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="000000">
                                             @endif
                                    <div class="btn-div">
                                        @if( (($_SESSION['is_two_factor'] == 1) && ($_SESSION['is_phone_verified'] == 1)) || ( ($_SESSION['is_mail_verified'] == 1) && ($_SESSION['is_phone_verified'] == 1) ) )
                                        <button type="button" class="submit_code btn-yellow disable w-100 mt-3" id="loginWithPhone">
                                          Next
                                        </button>
                                        @endif

                                        @if( ( $_SESSION['is_two_factor'] == 0) && ($_SESSION['is_mail_verified'] == 0) && ($_SESSION['is_phone_verified'] == 1))
                                        <button type="button" class="submit_code btn-yellow disable w-100 mt-3" id="loginOnlyWithPhone">
                                           Next
                                        </button>

                                        @endif
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
        <!--<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/niceCountryInput.js') }}"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>-->
        <script src="{{ asset('assets/js/alert.js') }}"></script>
        <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
        <script src="{{ asset('assets/js/login_register.js') }}"></script>
        <script>
            function e_start(){
                  var e_counter = 120;
                  setInterval(function() {
                    e_counter--;
                    if (e_counter >= 0) {
                      span = document.getElementById("e_count");
                      span.innerHTML = e_counter;
                    }
                    if (e_counter === 0) {
                        clearInterval(e_counter);
                      $(".e_code_sent").css("display", "none");
                      $(".e_Get_Code").css("display", "block");
                      $("#e_Get_Code").text("Get Code"); $("#e_Get_Code").css("pointer-events","");
                    }
                  }, 1000);
                };



                $(".e_Get_Code").click(function(){
                    const sessioniD = '<?php echo session_id(); ?>';
                    //  console.log(sessioniD);
                    if(!sessioniD){
                    triggerAlert('Page expired!', 'error');
                    window.location.href = '<?php echo url( app()->getLocale());  ?>/login';
                    }else{
                        $.ajax({
                    		type: "POST",
                    		url: "<?php echo url('api/send_otp_by_secure_mail');  ?>",
                    		cache: false,
                    		beforeSend: function(){
                    		  //  $("#e_Get_Code").text("Sending OTP");
                    		  //  $("#e_Get_Code").css("pointer-events","none");
                    		    $("#e_Get_Code").html("<span class='spinner-border spinner-border-sm'></span>");
                    		},
                    		success: function(data,status) {
                    		    if(status=="success"){
                                    $(".e_Get_Code").css("display", "none");
                                    $(".e_code_sent").css("display", "block");
                                    $('.submit_code').removeClass('disable');
                                    triggerAlert('OTP sent on your email address', 'success');
                                }else{
                                   triggerAlert(status, 'error');
                                }
                    		},
                    		error: function(jqXHR, textStatus, errorThrown){
                    			triggerAlert("OTP not sent.", 'error');
                    		}
                    	});

                    }


                    // $.post("<?php echo url('api/send_otp_by_secure_mail');  ?>",
                    // function(data,status){
                    //     if(status=="success"){
                    //         $(".e_Get_Code").css("display", "none");
                    //         $(".e_code_sent").css("display", "block");
                    //         triggerAlert('OTP sent on your email address', 'success');
                    //     }else{
                    //       triggerAlert(status, 'error');
                    //     }
                    // });
                });




        </script>
        <script>
            $('.tooltips').append("<span></span>");
            $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');

            $(".tooltips").mouseenter(function(){
                $(this).find('span').empty().append($(this).attr('tooltip'));
            });

            $(".Get_Code").click(function(){
                const sessioniD = '<?php echo session_id(); ?>';
                // alert();
                    //  console.log(sessioniD);
                    if(!sessioniD){
                    triggerAlert('Page expired!', 'error');
                    window.location.href = '<?php echo url( app()->getLocale());  ?>/login';
                    }else{
                        $.ajax({
                    		type: "POST",
                    		url: "<?php echo url('api/send_otp_by_secure_phone');  ?>",
                    		cache: false,
                    		beforeSend: function(){
                    		  //  $("#Get_Code").text("Sending OTP");
                    		  //  $("#Get_Code").css("pointer-events","none");
                    		  $("#Get_Code").html("<span class='spinner-border spinner-border-sm'></span>");

                    		},
                    		success: function(data,status) {
                    		    if(status=="success"){
                                    $(".Get_Code").css("display", "none");
                                    $(".code_sent").css("display", "block");
                                     $('.submit_code').removeClass('disable');
                                    triggerAlert('OTP sent on your phone number.', 'success');
                                }else{
                                   triggerAlert(status, 'error');
                                }
                    		},
                    		error: function(jqXHR, textStatus, errorThrown){
                    			triggerAlert("OTP not sent.", 'error');
                    		}
                    	});
                    }
            });

            function start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("count");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".code_sent").css("display", "none");
                  $(".Get_Code").css("display", "block");
                  $("#Get_Code").text("Get Code"); $("#Get_Code").css("pointer-events","");
                }
              }, 1000);
            };

        	$(document).ready(function () {
        	    var spinner = $('#loader');
        	    $("#loginOnlyWithPhone").on("click", function(e) {
        			var otp = $('#otp').val();
        			var eotp = $('#eotp').val();
        		    var o_otp = $('#o_otp').val();
        			var _token = $("input[name=_token]").val();
        			var count = otp.length;

        			if(count==6){
        			    spinner.show();
        				$.ajax({
        					type: "POST",
        					url: "{{ url( app()->getLocale()) }}/verify_Lphone_otp",
        					beforeSend: function() {
                                    // setting a timeout
                                    // $(placeholder).addClass('loading');
                                    $("#loginOnlyWithPhone").addClass("disable");
                                    $("#loginOnlyWithPhone").html("<span class='spinner-border spinner-border-sm'></span>");

                                },
        					data: {'phone_otp':otp, 'email_otp':eotp, 'auth_otp':o_otp , '_token':_token},
        					dataType: "json",
        					encode: true,
        				}).done(function (data) {
                           	triggerAlert('Congratulations! successfully loggedin.', 'success');
                           	// $().html("<span class="spinner-border spinner-border-sm"></span>")

                           	setTimeout(function(){
                                window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
                            }, 2000);
                //             if(data.account_type == 2){
            				//     setTimeout(function(){
                //                     window.location.href = '{{ url( app()->getLocale(), 'entity-dashboard') }}?AccountType=phone_entity';
                //                 }, 2000);
            				// }else{
            			 //   setTimeout(function(){
                //                     window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
                //                 }, 2000);
            				// }
        				}).fail(function(jqXHR, textStatus, errorThrown)  {
        				    triggerAlert('Enter valid otp', 'error');
                            setTimeout(function(){
                                $('#phone_otp_frm').trigger("reset");
                                $("#loginOnlyWithPhone").removeClass("disable");
                                $("#loginOnlyWithPhone").text("Next");
                            }, 1000);
                        });
        			}
        		});
        	});
        </script>
        <script>
        // Runs when two factor authentication is on and email verified
            $(document).ready(function () {
            	    var spinner = $('#loader');

            		$("#loginWithPhone").on("click", function(e) {
            		    e.preventDefault();
            			var otp = $('#potp').val();
            			var eotp = $('#eotp').val();
            			var o_otp = $('#o_otp').val();
            			var _token = $("input[name=_token]").val();
                            if(otp==""){
                                $('#p_otp_err').html("Please enter phone otp");
                                $('#phone_error_border').addClass('error_border');
                                return true;
                            }

                            if(eotp==""){
                                $('#e_otp_err').html("Please enter email otp");
                                $('#email_error_border').addClass('error_border');
                                return true;
                            }

                            if(o_otp==""){
                                $('#o_otp_err').html("Please enter authenticator otp");
                                $('#o_otp').addClass('error_border');
                                return true;
                            }


            		if((o_otp!="" & o_otp.length==6) & (eotp!="" & eotp.length==6) & (otp!="" & otp.length==6)){
            			    spinner.show();
            				$.ajax({
            					type: "POST",
            					url: "{{ url( app()->getLocale()) }}/verify_Lphone_otp",
            					data: {'email_otp':eotp, 'phone_otp':otp, 'auth_otp':o_otp ,'_token':_token},
            					dataType: "json",
            					encode: true,
            					beforeSend: function() {
                                    // setting a timeout
                                    // $(placeholder).addClass('loading');
                                    $("#loginWithPhone").addClass("disable");
                                    $("#loginWithPhone").html("<span class='spinner-border spinner-border-sm'></span>");

                                },
            				}).done(function (data) {
                				triggerAlert('Congratulations! successfully loggedin.', 'success');
                				setTimeout(function(){
                                    window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
                                }, 2000);

            				}).fail(function(jqXHR, textStatus, errorThrown)  {

            				    triggerAlert('Enter valid otp', 'error');
            				    $("#loginWithPhone").removeClass("disable");
                                $("#loginWithPhone").text("Next");
                                setTimeout(function(){
                                 $('#email_otp_frm').trigger("reset");
                                }, 2000);
                            });
            			}
            		});
            	});



            	function activeButton(){
            	    $('.submit_code').removeClass("disable");
            	    //this.value=this.value.replace(/[^0-9]/g,'')
            	}

        </script>
   </body>
</html>
