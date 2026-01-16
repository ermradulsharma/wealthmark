<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Login</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
       <meta name="csrf-token" content="{{ csrf_token() }}">

      @include('template.web_css')
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
     <link href="{{ asset('assets/disk/slidercaptcha.min.css') }}" rel="stylesheet" />
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">-->
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <!--<link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">-->
      <link rel="stylesheet" href="{{ asset('assets/css/QapTcha.jquery.css') }}" type="text/css" />

       <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" />
       <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}" />

      <style>

        .warning-img{
            max-width:60px;
        }
        .bg-whitesmoke{
            background:whitesmoke !important;
            box-shadow:none !important;
        }
         .bg-whitesmoke:hover{
             color:black !important;
         }

        /*  start css for new capcha */


        .slidercaptcha {
            margin: 0 auto;
            /*width: 314px;*/
            height: 286px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.125);
            /*margin-top: 40px;*/
        }

            .slidercaptcha .card-body {
                padding: 1rem;
            }

            .slidercaptcha canvas:first-child {
                border-radius: 4px;
                border: 1px solid #e6e8eb;
            }

            .slidercaptcha.card .card-header {
                color:black !important;
                background-color: #fdc116 !important;
            }



.sliderContainer .slider  {
    color:white !important;
    background:#fdc116;
    box-shadow:0 0 3px transparent !important;
}
.refreshIcon.bi.bi-arrow-clockwise{
    background: white;
    padding: 3px 8px;
    font-size: 15px;
    font-weight: 900 !important;
    border-radius: 10px;
    color: black;
    top: -60px;
}
       /* css code of 09-02-2023 */

        @media(max-width:768px){
            .login_scan{
                display:none;
            }
        }

     /*   @media(max-width:350px){
            .slidercaptcha canvas:first-child {
                width: 100%!important;
            }
            #captcha{
                width:100%!important;
                position:relative;
            }
            .block {
                top: -1px;
                width: 23%;
            }
        }
        */

        .sliderContainer_success .slider {
    top: -1px;
    border: 1px solid green;
    background-color: green !important;
    color: white;
}
.sliderContainer_success .sliderMask {
    border: 1px solid #008000b8;
    border-width: 1px 0 1px 1px;
    background-color: #008000b8;
}

/*.slidercaptcha #captcha , .slidercaptcha #captcha canvas {*/
/*    max-width:100% !important;*/
/*}*/
           /* css code end of 09-02-2023 */
      /*  end css for new capcha */
    </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
      <main id="main">
         <section class="inner-page register p-0">
            <div class="container">


                   <!--@if ( Request::segment(3) == 'loginFailed' )-->
                   <!--     <div class="row">-->
                   <!--       <h6 class="loginMsg alert alert-danger">Login with e-mail associalted with entity accounts is not allowed!</h6>-->
                   <!--     </div>    -->
                   <!--     @endif-->
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">

                          <h5 class="mb-4">WealthMark Account Login</h5>
                    </div>
                </div>
               <div class="row">
                   <div class="col-lg-4 col-md-6 offset-lg-1 order-md-2">
                     <div class="login_scan">WealthMark Account Login
                        <div class="qr_code">
                           <img src="{{ asset('img/qr-code.png') }}" class="img-responsive" />
                        </div>
                        <div class="mob_login mb-4">
                           <h2 class="login-head">Log in with QR code</h2>
                           <p>Scan this code with the <span class="wealthmark-text"> Weathmark mobile app</span> to log in instantly.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6  offset-lg-1 order-md-1">
                     <div class="">
                        <div class="text-danger" id="error" style="display: none;">Incorrect Username Or Password</div>

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
                                <form action="" method="post" id='myform'>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required autocomplete="off">
                                        <label for="email" class="label">Email address</label>
                                        <span class="error" id="email_err"> </span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="off">
                                        <label for="floatingPassword" class="label">Password</label>
                                        <span class="error" id="password_err"> </span>
                                    </div>
                                    <!-- captcha -->
                                     <!--<div class="QapTcha mb-3 oldCapcha"></div> -->
                                     <div class="col-12 newCapcha">
                                        <div class="slidercaptcha card">
                                            <div class="card-header">
                                                <span>Complete the security check</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="captcha"></div>
                                            </div>
                                        </div>


                                    </div>
                                   <input type="hidden" name="capchaname" value="capchavalue" class="cap" >
                                    <div class="bgSlider">
                                      <span class="TxtStatus"></span>
                                    </div>

                                    <!-- end captcha -->

                                    <div class="form-button mb-3 mt-3">
                                        <input Type="button" id="pbtnSubmit" class="btn-yellow border-0 w-100 text-center" value="Login">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <span class="error" id="default_err"> </span>
                                <form action="" method="post" id='myform1'>
                                    <div class="input-number-group">
                                        <div class="mb-3">
                                           <input type="tel" id="txtPhone" class="form-control" name="mobile"  placeholder="Mobile No" />
                                        </div>
                                        <div class="form-floating mb-3">
                                           <input type="text" class="form-control" id="mobile" pattern="\d*" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  placeholder="Phone Number" autocomplete="off">
                                           <label for="floatingInput">Mobile Number</label>
                                           <span class="error" id="phone_err"> </span>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password1" name="password" placeholder="Password" autocomplete="off">
                                        <label for="floatingPassword">Password</label>
                                        <span class="error" id="password1_err"> </span>
                                    </div>
                                    <!-- captcha phone -->
                                    <!--<div class="QapTcha mb-3 oldCapcha"></div>-->
                                        <div class="col-12 newCapcha">
                                        <div class="slidercaptcha card">
                                            <div class="card-header">
                                                <span>Complete the security check</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="captchaPhone"></div>
                                            </div>
                                        </div>


                                    </div>

                                    <input type="hidden" name="capchaname" value="capchavalue" class="cap" >
                                    <div class="bgSlider">
                                      <span class="TxtStatus"></span>
                                    </div>
                                       <!-- end captcha phone -->
                                    <div class="form-button mt-3 mb-3">
                                        <input Type="button" id="btnSubmit"  class="btn-theme btn-yellow w-100 text-center" value="Login">
                                        <a href="#" ></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="alt-text">
                            <div class="half-line"></div>
                            <div class="alt-text-main">or continue with</div>
                            <div class="half-line"></div>
                        </div>
                        <div class="other-login-option">
                            <div class="google-login">
                               <div class="google">
                                  <div class="google-div">
                                     <img src="{{ asset('img/google-icon.png') }}" class="other-login-img">

                                  </div>

                                  <div class="text m-0 p-0 googleAuth"> <a href="{{ url('auth/google') }}" >
                                        <strong>Google </strong>
                                        </a>
                                </div>
                                   <!--<div class="text m-0 p-0 googleAuth"> <strong>Google </strong>  </div>-->
                               </div>
                            </div>
                            <div class="apple-login">
                               <div class="apple">
                                  <div class="apple-div">
                                     <img src="{{ asset('img/apple-icon.png') }}" class="other-login-img">
                                  </div>
                                  <div class="text m-0 p-0">
                                      <strong>Apple</strong>
                                      </div>
                               </div>
                            </div>
                        </div>
                        <div class="pt-3 pb-3">
                            <p class="mb-2"> <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#forgotModal" class="text-theme-yellow"> Forgot Password</a></p>
                            <p> <span class="text-muted">Don't have an account?<a href="{{ url( app()->getLocale()) }}/register" class="text-theme-yellow"> Register Now</a></span></p>
                        </div>
                    </div>
                  </div>

                <div class="modal fade" id="forgotModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width:400px;margin:10% auto;">
                        <div class="modal-content pt-3 pb-3 p-3">
                            <div class="modal-header mb-3 mt-3 p-0 text-center border-0">
                                <img class="warning-img  mx-auto" src="{{ url('assets/img/warning.svg') }}" >
                            </div>
                            <div class="modal-body">
                                <div class="warning-notes">
                                    <p class="text-center">Withdrawals, P2P selling, and payment services will be disabled for 24 hours after you make this change to protect your account.</p>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-around mt-3 border-0 p-0">
                                 <button type="button" class="btn got-it btn-blue shadow" data-bs-dismiss="modal" >Cancel</button>
                                 <a href="{{ url(app()->getLocale()."/reset-password") }}" class="btn btn-yellow got-it">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>

               </div>
            </div>
         </section>

      </main>
      <!-- End #main -->

@include('template.copy_right_footer')


       @include('template.web_js')

      <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
     <script type="text/javascript" src="{{ asset('assets/js/intlTelInput-jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.touch.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/QapTcha.jquery.js') }}"></script>
      <script type="text/javascript">
        $(document).ready(function(){
        	$('.QapTcha').QapTcha({disabledSubmit:false,autoRevert:true,autoSubmit:false});
        });
      </script>
      <script>
            $(document).ready(function () {
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

                $('#email').on('input', function () {
                    checkemail();
                });
                // $('#password').on('input', function () {
                //     checkpass();
                // });
                $('#mobile').on('input', function () {
                    checkmobile();
                });
                $('#pbtnSubmit').click(function () {
                    if (!checkemail()) {
                        //triggerAlert('Please fill all required field', 'error');
                    }
                    else{
                        $("#message").html("");
                        var form = $('#myform')[0];
                        var frmdata = new FormData(form);
                        var email = $('#email').val();
                        var password = $('#password').val();
                        var capp =$('#myform .cap').val();
                        var cap = $('#myform .cap').attr('name');
                        let datas = {};
                        datas[cap] = capp;
                        datas['email'] = email;
                        datas['password'] = password;
                        $.ajax({
                            type: "POST",
                            url: '<?php echo url('api/email_login');  ?>',
                            data: datas,
                            success: function(data) {
                               // console.log(data);
                              //  $('#myform').trigger("reset");
                                window.location.href = '<?php echo url( app()->getLocale(), 'request_login_email_otp');  ?>';
                            },
                            error: function(xhr, status, error) {
                                var erroJson = JSON.parse(xhr.responseText);

                              //  console.log(erroJson);

                                var email_error=erroJson.error.email;
                                var password_error=erroJson.error.password;
                                if(email_error){
                                    $('#email_err').html(email_error);
                                    $('#email').addClass('error_border');
                                }
                                if(password_error){
                                  $('#password_err').html(password_error);
                                  $('#password').addClass('error_border');
                                }
                                if(erroJson.error=="mismatch Captcha" || erroJson.error=="Invalid Captcha"){
                                    $('#myform .bgSlider').addClass('error_border');
                                    $('#myform .TxtStatus').html("<span style='color:red!important'>Captcha Invalid</span>");
                                }
                            }
                        });
                    }
                });

                $('#btnSubmit').click(function () {
                    var country_name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
                    var dialCode = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
                    $("#message").html("");
                    var form = $('#myform1')[0];
                    var frmdata = new FormData(form);
                    var mobile = $('#mobile').val();
                    var password = $('#password1').val();
                    var capp =$('#myform1 .cap').val();
                    var cap = $('#myform1 .cap').attr('name');
                    let datas = {};
                    datas[cap] = capp;
                    datas['phone'] = mobile;
                    datas['password'] = password;
                    datas['country_phone_code'] = dialCode;
                    $.ajax({
                        type: "POST",
                        url: '<?php echo url('api/phone_login');  ?>',
                        data: datas,
                       success: function(data) {
                        //   $('#myform1').trigger("reset");
                           window.location.href = '<?php echo url( app()->getLocale(), 'request_login_phone_otp');  ?>?step=2';
                       },
                       error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                           var phone_error=erroJson.error.phone;
                           var password_error=erroJson.error.password;
                            if(phone_error){
                               $('#phone_err').html(phone_error);
                                $('#mobile').addClass('error_border');
                            }
                            if(password_error){
                               $('#password1_err').html(password_error);
                                $('#password1').addClass('error_border');
                            }
                            if(erroJson.error=="mismatch Captcha" || erroJson.error=="Invalid Captcha"){
                                $('#myform1 .bgSlider').addClass('error_border');
                                $('#myform1 .TxtStatus').html("<span style='color:red!important'>Captcha Invalid</span>");
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


            // setTimeout(function(){
            //      $(".loginMsg").html('');
            //      $(".loginMsg").removeClass('alert-danger');
            // }, 5000);

            //  $(".googleAuth").click( function() {
            //      $.ajax({
            //                 type: "GET",

            //               url: '<?php echo url('auth/google');  ?>',
            //               headers: {

            //                 'Access-Control-Allow-Origin':'*',
            //                 'Access-Control-Allow-Headers':'Origin,X-Requested-With',
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

            //                     },

            //                 dataType:'jsonp',
            //                 crossDomain: true,


            //                 data : {

            //                 },
            //                 success: function(data) {
            //                     console.log(data);
            //                     // $('#myform').trigger("reset");

            //                 },
            //                 error: function(xhr, status, error) {
            //                     console.log(status);
            //                     // var erroJson = JSON.parse(xhr.responseText);
            //                     // var email_error=erroJson.error.email;
            //                     // var password_error=erroJson.error.password;


            //                 }
            //             });
            //           });
        </script>
        <script>
        $( document ).ready(function(){

          //   var url = window.location.href,
             var parts = window.location.href.split('/');
            var lastSegment = parts.pop() || parts.pop();  // handle potential trailing slash

           // console.log(lastSegment);
            if(lastSegment == 'loginFailed'){
             triggerAlert('Login with e-mail associalted with entity accounts is not allowed!', 'error');
            }

             if(lastSegment == 'googleLoginError'){
             triggerAlert('Something went wrong while login with Google!', 'error');
            }


        });



        </script>

    <script src="{{ asset('assets/disk/longbow.slidercaptcha.min.js') }}"></script>
    <script>
    function generatePass(nb) {
		        var chars = 'azertyupqsdfghjkmwxcvbn23456789AZERTYUPQSDFGHJKMWXCVBN_-#@';
		        var pass = '';
		        for(i=0;i<nb;i++){
		            var wpos = Math.round(Math.random()*chars.length);
		            pass += chars.substring(wpos,wpos+1);
		        }
		        return pass;
		    }

		    // form email
        var captcha = sliderCaptcha({

            id: 'captcha',
           // repeatIcon: 'fa fa-redo',
           repeatIcon: 'bi bi-arrow-clockwise',

            onSuccess: function () {
               //  console.log('success');


          //     $('#myform .TxtStatus').html("<span style='color:green!important'>Captcha Verified</span>");
               $("#myform .cap").attr('name', generatePass(32) );
             $("#myform .cap").val( generatePass(7) );

            //   $("#myform .cap").attr('name');
            //   $("#myform .cap").val();

            var inputQapTcha_key =   $("#myform .cap").attr('name');
              var inputQapTcha_val =  $("#myform .cap").val();
             //  inputQapTcha = jQuery('<input>',{name:generatePass(32),value:generatePass(7),type:'hidden',class:'cap'});
           //  console.log(inputQapTcha_key);
            // console.log(inputQapTcha_val);
             $.ajax({
                  type: "POST",
                  url: '<?php echo url( 'api/verify_captcha');  ?>',

                  data: {
                    'action' : 'qaptcha',
					'qaptcha_key' : inputQapTcha_key
                  },
                  success: function(data) {
						  //  console.log(data);
							$('#myform .TxtStatus').html("<span style='color:green!important'>Captcha Verified</span>");

						},

			     error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                      // console.log(erroJson);
                    }
               //  dataType: dataType
                });




    //             $.post( '<?php echo url( 'api/verify_captcha');  ?>',{
				// 			action : 'qaptcha',
				// 			qaptcha_key : inputQapTcha_key
				// 		},

				// 		function(data) {
				// 		    alert(data);
				// 			if(!data.error)
				// 			{

				// 				inputQapTcha_val;

				// 			}
				// 		},'json');




                var handler = setTimeout(function () {
                    window.clearTimeout(handler);
               //     captcha.reset();
                $('#myform .TxtStatus').html('');
                }, 3000);


            },
             setSrc:function () {

                          return '{{ asset('img/captchaImages/') }}' +'/'+Math.round(Math.random() * 20) +'.jpg';
                         // return '{{ asset('img/captchaImages/1.jpg') }}';

                        },

             onFail:function () {
                  $('#myform .TxtStatus').html("<span style='color:red!important'>Captcha Verification failed.</span>");
                  // console.log('fail');
                    var handler = setTimeout(function () {
                     $('#myform .TxtStatus').html('');
                    window.clearTimeout(handler);
                    captcha.reset();
                }, 1000);
                          // ...

            }


        });

        // for phone
         var captcha_phone = sliderCaptcha({

            id: 'captchaPhone',
           // repeatIcon: 'fa fa-redo',
             repeatIcon: 'bi bi-arrow-clockwise',

            onSuccess: function () {
              //   console.log('success');


          //     $('#myform .TxtStatus').html("<span style='color:green!important'>Captcha Verified</span>");
               $("#myform1 .cap").attr('name', generatePass(32) );
               $("#myform1 .cap").val( generatePass(7) );

            var inputQapTcha_key =   $("#myform1 .cap").attr('name');
              var inputQapTcha_val =  $("#myform1 .cap").val();
             //  inputQapTcha = jQuery('<input>',{name:generatePass(32),value:generatePass(7),type:'hidden',class:'cap'});
            // console.log(inputQapTcha_key);
             // console.log(inputQapTcha_val);
             $.ajax({
                  type: "POST",
                  url: '<?php echo url( 'api/verify_captcha');  ?>',

                  data: {
                    'action' : 'qaptcha',
					'qaptcha_key' : inputQapTcha_key
                  },
                  success: function(data) {
						  //  console.log(data);
							$('#myform1 .TxtStatus').html("<span style='color:green!important'>Captcha Verified</span>");
						},

			     error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                     //  console.log(erroJson);
                    }
               //  dataType: dataType
                });




    //             $.post( '<?php echo url( 'api/verify_captcha');  ?>',{
				// 			action : 'qaptcha',
				// 			qaptcha_key : inputQapTcha_key
				// 		},

				// 		function(data) {
				// 		    alert(data);
				// 			if(!data.error)
				// 			{

				// 				inputQapTcha_val;

				// 			}
				// 		},'json');




                var handler = setTimeout(function () {
                    window.clearTimeout(handler);
               //     captcha.reset();
                $('#myform1 .TxtStatus').html('');
                }, 3000);


            },
             setSrc:function () {

                          return '{{ asset('img/captchaImages/') }}' +'/'+Math.round(Math.random() * 20) +'.jpg';
                         // return '{{ asset('img/captchaImages/1.jpg') }}';

                        },

             onFail:function () {
                  $('#myform1 .TxtStatus').html("<span style='color:red!important'>Captcha Verification failed.</span>");
                //   console.log('fail');
                    var handler = setTimeout(function () {
                     $('#myform1 .TxtStatus').html('');
                    window.clearTimeout(handler);
                    captcha.reset();
                }, 1000);
                          // ...

            }


        });
        </script>
   </body>
</html>
