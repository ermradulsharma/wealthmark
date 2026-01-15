<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Reset Your Password | Wealth Mark</title>
      <meta content="Reset you password on Wealthmark.io - Find out more on how you can recover your password and get further help" name="description">
      <meta content="Blockchain Crypto Exchange, Cryptocurrency Exchange, Bitcoin Trading, Ethereum price trend, BNB, CZ, BTC price, ETH wallet registration, LTC price, Binance,Wealthmark, Poloniex, Bittrex" name="keywords">
      <meta name="theme-color" content="#287aff">

       @include('template.web_css')

      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">



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
                            <?php
                            // echo  $_SERVER['HTTP_USER_AGENT'];
                            //   echo '</br>';
                            // echo Request::server('HTTP_USER_AGENT');

                            // print_r($_SESSION); ?>

                            <p class="mt-2 mb-4">To secure your account, please complete the following verification.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="" method="post" id="email_otp_frm">
                                        @csrf
                                         <!-- old users code starts from here-->

                                        @if($_REQUEST['type']=="email" and $_SESSION['account_type']==1 and $_SESSION['user_type'] == 1 and $_SESSION['email_id']!="" and $_SESSION['is_phone_verified']==0 and $_SESSION['is_mail_verified']==0 )
                                            <div class="verification_div">
                                                <div class="verification_main">
                                                    <div class="verification_inner inner-css" id="email_error_border">
                                                        <input type="text" class="verification_textbox" pattern="\d*" maxlength="10"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="old_phone" name="old_phone" placeholder="Enter Mobile" required="">
                                                        <div class="getCode_outer getCode_outer1">
                                                            <div class="getCode_inner p_Get_Code_old_user" id="p_Get_Code_old_user" onclick="p_start()">Get Code</div>
                                                            <div class="getCode_inner p_code_sent" style="display:none" >
                                                                Verification Code Sent
                                                                <span class="tooltip txt_info">
                                                                <i class="bi bi-info-circle-fill"></i>
                                                                <span class="tooltiptext toolTop">
                                                                Haven’t received code? Request new code in
                                                                <span class="timer-counter" id="p_counter">5</span>
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
                                                <div id="p_otp_err_old_user" class="error_color"></div>
                                            </div>



                                            <!--<div class="form-floating mb-3">-->
                                            <!--    <input type="text" class="form-control" pattern="\d*" maxlength="10"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="old_phone" name="old_phone" placeholder="Enter Mobile" required="">-->
                                            <!--    <label for="email">Enter Phone Number</label>-->
                                            <!--    <span class="error" id="email_err"> </span>-->
                                            <!--</div>-->
                                            <div class="verification_div" id="old_phone_otps" style="display:none;">
                                                <div class="verification_main">
                                                   <div class="verification_inner inner-css" id="old_phone_error_border">
                                                      <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="old_phone_otp" class="verification_textbox" value="">
                                                        <div class="getCode_outer getCode_outer1">
                                                             <!--<div class="getCode_inner old_Get_Code" id="old_Get_Code" style="display:block" onclick="old_start()">Get Code</div>-->
                                                             <div class="getCode_inner old_code_sent" style="display:none" >
                                                                Verification Code Sent
                                                                <span class="tooltip txt_info">
                                                                <i class="bi bi-info-circle-fill"></i>
                                                                <span class="tooltiptext toolTop">
                                                                Haven’t received code? Request new code in
                                                                <span class="timer-counter" id="old_count">5</span>
                                                                <span id="text">seconds</span>
                                                                The code will expire after 30 mins.
                                                                </span>
                                                                </span>
                                                             </div>
                                                        </div>
                                                        <label class="wm_label wm_label_error" id="verification_label">Phone Number Verification Code</label>
                                                   </div>
                                                </div>
                                                <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to
                                                    <span  dir="ltr" class="getCode_outer1" id="old_phone_short"></span>
                                                </div>
                                                <div id="old_otp_err" class="error_color"></div>
                                            </div>

                                            <div class="verification_div">
                                                <div class="verification_main">
                                                   <div class="verification_inner inner-css" id="email_error_border">
                                                      <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="old_email_otp" class="verification_textbox" value="">
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

                                            <div class="btn-div">
                                                <button type="button" class="btn-yellow w-100 border-0 shadow-none d-block" id="submit_old_user">
                                                  Next
                                                </button>
                                            </div>

                                        @elseif($_GET['type']=="mobile" and $_SESSION['account_type']==1 and $_SESSION['user_type'] == 1 and $_SESSION['is_phone_verified']==0 and $_SESSION['is_mail_verified']==0 and $_SESSION['phone_number']!="")
                                            <!--<div class="form-floating mb-3">-->
                                            <!--    <div class="getCode_inner e_Get_Code_old_user" id="e_Get_Code_old_user" style="display:block;" >Get Code</div>-->
                                            <!--    <input type="email" class="form-control" id="old_email" name="old_email" placeholder="Enter Email" required="">-->
                                            <!--    <label for="email">Enter Email address</label>-->
                                            <!--    <span class="error" id="email_err"> </span>-->
                                            <!--</div>-->

                                            <div class="verification_div">
                                                <div class="verification_main">
                                                    <div class="verification_inner inner-css" id="email_error_border">
                                                        <input type="email" class="verification_textbox" id="old_email" name="old_email" placeholder="Enter Email" required="">
                                                        <div class="getCode_outer getCode_outer1">
                                                            <div class="getCode_inner e_Get_Code_old_user" id="e_Get_Code_old_user" onclick="e_start()">Get Code</div>
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
                                                <div id="e_otp_err_old_user" class="error_color"></div>
                                            </div>

                                            <div class="verification_div" id="old_email_otps" style="display:none;">
                                                <div class="verification_main">
                                                   <div class="verification_inner inner-css" id="email_error_border">
                                                      <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="old_email_otp" class="verification_textbox" value="">
                                                      <div class="getCode_outer getCode_outer1">
                                                         <!--<div class="getCode_inner e_Get_Code" id="e_Get_Code" style="display:none;" onclick="e_start()">Get Code</div>-->
                                                         <!--<div class="getCode_inner e_code_sent" style="display:none" >-->
                                                         <!--   Verification Code Sent -->
                                                         <!--   <span class="tooltip txt_info">-->
                                                         <!--   <i class="bi bi-info-circle-fill"></i> -->
                                                         <!--   <span class="tooltiptext toolTop">-->
                                                         <!--   Haven’t received code? Request new code in  -->
                                                         <!--   <span class="timer-counter" id="e_count">5</span> -->
                                                         <!--   <span id="text">seconds</span>-->
                                                         <!--   The code will expire after 30 mins.-->
                                                         <!--   </span>-->
                                                         <!--   </span>-->
                                                         <!--</div>-->
                                                      </div>
                                                      <label class="wm_label wm_label_error">Email Verification Code</label>
                                                      <label class="wm_label wm_label_error">Email Verification Code</label>
                                                   </div>
                                                </div>
                                                <!--<div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent.</div>44444-->
                                                <div id="e_otp_err" class="error_color"></div>
                                            </div>

                                            <div class="verification_div">
                                                <div class="verification_main">
                                                   <div class="verification_inner inner-css">
                                                      <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="old_phone_otp" class="verification_textbox" value="">
                                                        <div class="getCode_outer getCode_outer1">
                                                             <div class="getCode_inner Get_Code" id="Get_Code" style="display:block" onclick="start()">Get Code</div>
                                                             <div class="getCode_inner code_sent" style="display:none" >
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
                                                            <label class="wm_label wm_label_error" id="verification_label">Phone Number Verification Code</label>
                                                   </div>
                                                </div>
                                                <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to
                                                @if($_GET['type']=="email")
                                                    <span  dir="ltr" class="getCode_outer1">{{$data}}</span>
                                                @else
                                                    <span  dir="ltr" class="getCode_outer1">{{ substr($_SESSION['phone_number'], 0, 3) . "***" . substr($_SESSION['phone_number'], 6, 4) }}</span>
                                                @endif
                                                </div>
                                            </div>



                                            <div class="btn-div">
                                                <button type="button" class="btn-yellow w-100 border-0 shadow-none d-block" id="submit_old_user">
                                                   <div class="inner_text">Next</div>

                                                </button>
                                            </div>
                                        @else
                                      <!-- old users code ends here-->

                                        <!-- new users code starts from here-->


                                                @if($_GET['type']=="email")  <!-- when forget type 'email'-->
                                                        <div class="verification_div">
                                                            <div class="verification_main">
                                                               <div class="verification_inner inner-css"  id="email_error_border">
                                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="eotp" class="verification_textbox" value="">
                                                                  <div class="getCode_outer getCode_outer1">
                                                                     <div class="getCode_inner Get_Code" id="Get_Code" style="display:block" onclick="start()">Get Code</div>
                                                                     <div class="getCode_inner code_sent" style="display:none" >
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

                                                                        <label class="wm_label wm_label_error" id="verification_label">Email Address Verification Code</label>

                                                               </div>
                                                            </div>
                                                            <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to
                                                            <span  dir="ltr" class="getCode_outer1">{{$data}}</span>

                                                            </div>
                                                            <div id="e_otp_err" class="error_color"></div>
                                                        </div>

                                                         @if( $_SESSION['is_phone_verified'] == 1 )

                                                          <div class="verification_div">
                                                            <div class="verification_main">
                                                               <div class="verification_inner inner-css" id="phone_error_border">
                                                                  <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="potp" class="verification_textbox" value="">
                                                                  <div class="getCode_outer getCode_outer1">
                                                                     <div class="getCode_inner p_Get_Code" id="p_Get_Code" style="display:block" onclick="p_start()">Get Code</div>
                                                                     <div class="getCode_inner p_code_sent" style="display:none" >
                                                                        Verification Code Sent
                                                                        <span class="tooltip txt_info">
                                                                        <i class="bi bi-info-circle-fill"></i>
                                                                        <span class="tooltiptext toolTop">
                                                                        Haven’t received code? Request new code in
                                                                        <span class="timer-counter" id="p_counter"></span>
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
                                                           @else
                                                           <input type="hidden" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="potp" class="verification_textbox" value="000000">
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
                                                                <!--<div class="verification_innerInfo error_text">Enter the 6-digit code from Wealthmark/Google Authenticator</div>-->
                                                                <div id="o_otp_err" class="error_color"></div>
                                                            </div>
                                                        @else
                                                         <input type="hidden" class="verification_textbox" id="o_otp" name="o_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="000000">
                                                       @endif
                                                        <div class="change_mode mt-2 mb-3">
                                                            <span data-bs-toggle="modal" data-bs-target="#Switch_verification_mode">Switch to another verification option</span>
                                                        </div>
                                                        <div class="btn-div">
                                                            <button type="button" class="btn-yellow w-100 border-0 shadow-none d-block submit_code opt_from_email_btn" >
                                                               <div class="inner_text">Next</div>
                                                            </button>
                                                        </div>
                                                        <div class="modal fade" id="Switch_verification_mode" tabindex="-1" aria-labelledby="Switch_verification_mode" aria-hidden="true">
                                                            <div class="modal-dialog change_mode_modal">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Choose an authenticator</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="email_mode">

                                                                                <span class="email_mode-icon"> <i class="bi bi-phone-fill "></i> </span>
                                                                                <div class="email_mode-text" id="verification_type">Phone Number Verification</div>
                                                                                <span class="email_mode-next"> <i class="bi bi-arrow-right"></i></span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                @endif




                                                @if($_GET['type']=="mobile") <!-- when forget type 'mobile'-->

                                                    <div class="verification_div">
                                                        <div class="verification_main">
                                                           <div class="verification_inner inner-css" id="phone_error_border">
                                                              <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="potp" class="verification_textbox" value="">
                                                              <div class="getCode_outer getCode_outer1">
                                                                 <div class="getCode_inner Get_Code " id="Get_Code" style="display:block" onclick="start()">Get Code</div>
                                                                 <div class="getCode_inner code_sent" style="display:none" >
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

                                                                    <label class="wm_label wm_label_error" id="verification_label">Phone Number Verification Code</label>

                                                           </div>
                                                        </div>
                                                        <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to

                                                            <span  dir="ltr" class="getCode_outer1">{{ substr($_SESSION['phone_number'], 0, 3) . "***" . substr($_SESSION['phone_number'], 6, 4) }}</span>

                                                        </div>
                                                          <div id="p_otp_err" class="error_color"></div>
                                                </div>

                                                     @if( $_SESSION['is_mail_verified'] == 1 )

                                                     <div class="verification_div">
                                                        <div class="verification_main">
                                                           <div class="verification_inner inner-css" id="email_error_border">
                                                              <input type="input" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="eotp" class="verification_textbox" value="">
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
                                                        <div class="verification_innerInfo my-2 error_text">Enter the 6-digit code sent to
                                                            <span  dir="ltr" class="getCode_outer1">{{ $data }}</span>
                                                        </div>
                                                        <div id="e_otp_err" class="error_color"></div>
                                                 </div>
                                                     @else
                                                     <input type="hidden" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="eotp" class="verification_textbox" value="000000">
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
                                                            <!--<div class="verification_innerInfo error_text">Enter the 6-digit code from Wealthmark/Google Authenticator</div>-->
                                                            <div id="o_otp_err" class="error_color"></div>
                                                        </div>
                                                    @else
                                                     <input type="hidden" class="verification_textbox" id="o_otp" name="o_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="000000">
                                                    @endif

                                                    <div class="change_mode mt-2 mb-3">
                                                        <span data-bs-toggle="modal" data-bs-target="#Switch_verification_mode">Switch to another verification option</span>
                                                    </div>
                                                    <div class="btn-div">
                                                        <button type="button" class="btn-yellow w-100 border-0 shadow-none d-block submit_code opt_from_mobile_btn" >
                                                           <div class="inner_text">Next</div>
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="Switch_verification_mode" tabindex="-1" aria-labelledby="Switch_verification_mode" aria-hidden="true">
                                                        <div class="modal-dialog change_mode_modal">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Choose an authenticator</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="email_mode">

                                                                            <span class="email_mode-icon"> <i class="bi bi-envelope-fill "></i> </span>
                                                                            <div class="email_mode-text" id="verification_type">Email Address Verification</div>
                                                                            <span class="email_mode-next"> <i class="bi bi-arrow-right"></i></span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif




                                         <!-- new users code ends  here-->


                                         @endif
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


       @include('template.web_js')


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('assets/js/alert.js') }}"></script>
        <script src="{{ asset('assets/js/login_register.js') }}"></script>
        <script>
        $(document).ready(function () {
        //     $("#old_phone").on("input", function(e) {
        //         if( $("#old_phone").val().length == 10 && $("#old_phone").val() != "" ){
        //             $("#old_phone_otps").css('display','block');
        //         }else{
        //             $("#old_phone_otps").css('display','none');
        //         }
        // 	});

        // 	$("#old_email").on("input", function(e) {
        //         if( $("#old_email").val() != "" ){
        //             $("#old_email_otps").css('display','block');
        //         }else{
        //             $("#old_email_otps").css('display','none');
        //         }
        // 	});


            $("#submit_old_user").on("click", function() {

    			var old_email_otp = $('#old_email_otp').val();
    			var old_phone_otp = $('#old_phone_otp').val();
    			var _token = $("input[name=_token]").val();
    			var otp_type='<?php echo $_GET['type']; ?>';
    	    	var old_phone = '<?php echo $_SESSION['phone_number']; ?>';
    			var old_email = '<?php echo $_SESSION['email_id']; ?>';

    			console.log(otp_type);
    			 if(otp_type == 'email'){
    			    var new_rec = $('#old_phone').val();
    			    var old_rec = old_phone;
    			     }

    			 if(otp_type == 'mobile'){
    			       var new_rec = $('#old_email').val();
    			        var old_rec = 	old_email;
    			     }



                if(old_email_otp==""){
                    $('#e_otp_err').html("Please enter email otp");
                    $('#email_error_border').addClass('error_border');
                    return true;
                }

                if(old_phone_otp==""){
                    $('#old_otp_err').html("Please enter phone otp");
                    $('#old_phone_error_border').addClass('error_border');
                    return true;
                }

        		if((old_phone_otp!="" & old_phone_otp.length==6) & (old_email_otp!="" & old_email_otp.length==6)){
        		  //  alert(old_email_otp + old_phone_otp);
    				$.ajax({
    					type: "POST",
    					url: "{{ url( app()->getLocale()) }}/verify_old_user_reset_pass_otp",
    					data: {'otp_type':otp_type,'_token':_token,'eotp' : old_email_otp,  'potp' : old_phone_otp, 'new_rec' : new_rec , 'old_rec' : old_rec},
    					dataType: "json",
    					encode: true,
    					beforeSend: function(){
    					   // $("#submit_old_user").text("Validating OTP");
    					   // $("#submit_old_user").css("pointer-events","none");
    					   $("#submit_old_user").addClass("disable");
    					   $("#submit_old_user").html("<span class='spinner-border spinner-border-sm'></span>");

    				},
    				}).done(function (data) {
        				triggerAlert('Congratulations! OTP successfully verified.', 'success');
        				setTimeout(function(){
                            window.location.href = '<?php echo url( app()->getLocale());  ?>/request-reset-password';
                        }, 2000);
    				}).fail(function(jqXHR, textStatus, errorThrown)  {
    				    triggerAlert('Enter valid otp', 'error');
    				    $("#submit_old_user").text("Next");
    				     $("#submit_old_user").removeClass("disable");
                        // setTimeout(function(){
                        //  $('#email_otp_frm').trigger("reset");
                        // }, 2000);
                    });
        		}
            });


        });

        function old_start(){
          var counter = 120;
          setInterval(function() {
            counter--;
            if (counter >= 0) {
              span = document.getElementById("old_count");
              span.innerHTML = counter;
            }
            if (counter === 0) {
                clearInterval(counter);
              $(".old_code_sent").css("display", "none");
              $(".old_Get_Code").css("display", "block");

              $("#old_Get_Code").text("Get Code"); $("#old_Get_Code").css("pointer-events","");
            }
          }, 1000);
        }

        $(".old_Get_Code").click(function(){
            var old_phone = $("#old_phone").val();
            $.ajax({
        		type: "POST",
        		url: "<?php echo url('api/send_old_phone_otp_by_secure_phone');  ?>",
        		data: {'old_phone':old_phone},
        		cache: false,
        		beforeSend: function(){
        		  //  $("#old_Get_Code").text("Sending OTP");
        		  //  $("#old_Get_Code").css("pointer-events","none");
        		    $("#old_Get_Code").html(" <span class='spinner-border spinner-border-sm'></span>");
        		},
        		success: function(data,status) {
        		    if(status=="success"){
                        $(".old_Get_Code").css("display", "none");
                        $(".old_code_sent").css("display", "block");
                        $("#old_phone_short").text(old_phone);
                        triggerAlert('OTP sent on your mobile number', 'success');
                    }else{
                       triggerAlert(status, 'error');
                    }
        		},
        		error: function(jqXHR, textStatus, errorThrown){
        			triggerAlert(status, 'error');
        		}
        	});
        });

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

                        $(".e_Get_Code_old_user").css("display", "block");
                       $(".e_code_sent").css("display", "none");
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
                        		     $("#e_Get_Code").html(" <span class='spinner-border spinner-border-sm'></span>");
                        		},
                        		success: function(data,status) {
                        		    if(status=="success"){
                                        $(".e_Get_Code").css("display", "none");
                                        $(".e_code_sent").css("display", "block");
                                        triggerAlert('OTP sent on your email address', 'success');
                                    }else{
                                       triggerAlert(status, 'error');
                                    }
                        		},
                        		error: function(jqXHR, textStatus, errorThrown){
                        			triggerAlert(status, 'error');
                        		}
                        	});

                    }

                        // $.post("<?php // echo url('api/send_otp_by_secure_mail');  ?>",
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

        $(".e_Get_Code_old_user").click(function(){
                    const sessioniD = '<?php echo session_id(); ?>';
                    //  console.log(sessioniD);
                    if(!sessioniD){
                    triggerAlert('Page expired!', 'error');
                    window.location.href = '<?php echo url( app()->getLocale());  ?>/login';
                    }else{
                        var new_email = $("#old_email").val();
                        if(new_email == ""){
                            $("#e_otp_err_old_user").text("Please enter email");
                        }else{
                            $.ajax({
                        		type: "POST",
                        		data:{"old_user_new_email":new_email},
                        		url: "<?php echo url('api/send_otp_by_secure_mail_old_user');  ?>",
                        		cache: false,
                        		beforeSend: function(){
                        		  //  $("#e_Get_Code").text("Sending OTP");
                        		  //  $("#e_Get_Code").css("pointer-events","none");
                        		    $("#e_Get_Code").html("<span class='spinner-border spinner-border-sm'></span>");
                        		 },
                        		success: function(data,status) {
                        		    if(status=="success"){
                                        $(".e_Get_Code_old_user").css("display", "none");
                                        $(".e_code_sent").css("display", "block");
                                        $("#old_email_otps").css('display','block');
                                        $("#e_otp_err_old_user").text("");
                                        triggerAlert('OTP sent on your email address', 'success');
                                    }else{
                                       triggerAlert(status, 'error');
                                    }
                        		},
                        		error: function(jqXHR, textStatus, errorThrown){
                        			triggerAlert(status, 'error');
                        		}
                        	});
                        }
                    }
                });

        $(".p_Get_Code_old_user").click(function(){
                    const sessioniD = '<?php echo session_id(); ?>';
                    //  console.log(sessioniD);
                    if(!sessioniD){
                        triggerAlert('Page expired!', 'error');
                        window.location.href = '<?php echo url( app()->getLocale());  ?>/login';
                    }else{
                        var old_phone = $("#old_phone").val();
                        if(old_phone == ""){
                            $("#p_otp_err_old_user").text("Please enter phone number.");
                        }else{
                            $.ajax({
                        		type: "POST",
                        		data:{'old_user_new_phone':old_phone},
                        		url: "<?php echo url('api/send_otp_by_secure_phone_old_user');  ?>",
                        		cache: false,
                        		beforeSend: function(){
                        		  //  $("#p_Get_Code_old_user").text("Sending OTP..");
                        		  //  $("#p_Get_Code_old_user").css("pointer-events","none");
                        		     $("#p_Get_Code_old_user").html("<span class='spinner-border spinner-border-sm'></span>");
                        		 },
                        		success: function(data,status) {
                        		    if(status=="success"){
                                        $(".p_Get_Code_old_user").css("display", "none");
                                        $(".p_code_sent").css("display", "block");
                                        $("#old_phone_otps").css('display','block');
                                        $("#p_otp_err_old_user").text("");
                                        triggerAlert('OTP sent on your mobile number', 'success');
                                    }else{
                                       triggerAlert(status, 'error');
                                    }
                        		},
                        		error: function(jqXHR, textStatus, errorThrown){
                        			triggerAlert(status, 'error');
                        		}
                        	});
                        }
                    }
                });

        </script>
          <script>
            $(".p_Get_Code").click(function(){


                const sessioniD = '<?php echo session_id(); ?>';
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
                		  //  $("#p_Get_Code").text("Sending OTP..");
                		  //  $("#p_Get_Code").css("pointer-events","none");
                		    $("#p_Get_Code").html("<span class='spinner-border spinner-border-sm'></span>");
                		},
                		success: function(data,status) {
                		    if(status=="success"){
                                $(".p_Get_Code").css("display", "none");
                                $(".p_code_sent").css("display", "block");
                                triggerAlert('OTP sent on your mobile number', 'success');
                            }else{
                               triggerAlert(status, 'error');
                            }
                		},
                		error: function(jqXHR, textStatus, errorThrown){
                			triggerAlert(status, 'error');
                		}
                	});
                }

                // $.post("<?php echo url('api/send_otp_by_secure_phone');  ?>",
                // function(data,status){
                //     if(status=="success"){
                //         $(".p_Get_Code").css("display", "none");
                //         $(".p_code_sent").css("display", "block");
                //         triggerAlert('OTP sent on your phone number', 'success');
                //     }else{
                //       triggerAlert(status, 'error');
                //     }
                // });
            });

            function p_start(){
              var p_counter = 120;
              setInterval(function() {
                p_counter--;
                if (p_counter >= 0) {
                  span = document.getElementById("p_counter");
                  span.innerHTML = p_counter;
                }
                if (p_counter === 0) {
                    clearInterval(p_counter);
                  $(".p_code_sent").css("display", "none");
                  $(".p_Get_Code").css("display", "block");
                  $("#p_Get_Code").text("Get Code"); $("#p_Get_Code").css("pointer-events","");

                  $(".p_Get_Code_old_user").css("display", "block");
                  $(".p_code_sent").css("display", "none");
                }
              }, 1000);
            };
        </script>
        <script>
                $('.tooltips').append("<span></span>");
                $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');

                $(".tooltips").mouseenter(function(){
                    $(this).find('span').empty().append($(this).attr('tooltip'));
                });

                $(".email_mode").click(function() {
        			var type = $('#verification_type').text();
        			if(type=="Email Address Verification"){
        			    $('#verification_type').html("Phone Number Verification");
        			    $('.email_mode-icon').html('<i class="bi bi-phone-fill"></i>');
        			    $('#verification_label').html("Email Address Verification Code");
        			    $('#Switch_verification_mode').modal('hide');
        			}if(type=="Phone Number Verification"){
        			    $('#verification_type').html("Email Address Verification");
        			    $('#verification_label').html("Phone Number Verification Code");
        			    $('.email_mode-icon').html('<i class="bi bi-envelope-fill"></i>');
        			    $('#Switch_verification_mode').modal('hide');
        			}
        		});



                $(".Get_Code").click(function(){

                   const sessioniD = '<?php echo session_id(); ?>';
            		  //  console.log(sessioniD);
            		    if(!sessioniD){
            		        	triggerAlert('Page expired!', 'error');
            		        	window.location.href = '<?php echo url( app()->getLocale());  ?>/login';
            		    }else{



                                    var type = $('#verification_label').text();

                                    if(type=="Email Address Verification Code"){
                                        $.ajax({
                                        type: "POST",
                                        url: "<?php echo url('api/send_otp_by_secure_mail');  ?>",
                                        cache: false,
                                        beforeSend: function(){
                                            // $("#Get_Code").text("Sending OTP..");
                                            // $("#Get_Code").css("pointer-events","none");
                                           $("#Get_Code").html(" <span class='spinner-border spinner-border-sm'></span>");
                                        },
                                        success: function(data,status) {
                                            if(status=="success"){
                                                $(".Get_Code").css("display", "none");
                                                $(".code_sent").css("display", "block");
                                                triggerAlert('OTP sent on your email address', 'success');
                                            }else{
                                            triggerAlert(status, 'error');
                                            }
                                        },
                                        error: function(jqXHR, textStatus, errorThrown){
                                        triggerAlert(status, 'error');
                                        }
                                        });
                                    }if(type=="Phone Number Verification Code"){
                                        $.ajax({
                                        type: "POST",
                                        url: "<?php echo url('api/send_otp_by_secure_phone');  ?>",
                                        cache: false,
                                        beforeSend: function(){
                                            // $("#Get_Code").text("Sending OTP");
                                            // $("#Get_Code").css("pointer-events","none");
                                            $("#Get_Code").html(" <span class='spinner-border spinner-border-sm'></span>");
                                        },
                                        success: function(data,status) {
                                            if(status=="success"){
                                                $(".Get_Code").css("display", "none");
                                                $(".code_sent").css("display", "block");
                                                triggerAlert('OTP sent on your mobile number', 'success');
                                            }else{
                                            triggerAlert(status, 'error');
                                            }
                                        },
                                        error: function(jqXHR, textStatus, errorThrown){
                                        triggerAlert(status, 'error');
                                        }
                                        });
                                    }

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



                    $("#potp").on("input", function(e) {
                      clear_error_formatings();
                     //   if( $("#eotp").val().length == 6 && $("#potp").val().length == 6 &&  $("#o_otp").val().length == 6 ){
                     //   check_otp();
                      //  }

                    });

                    $("#eotp").on("input", function(e) {
                      clear_error_formatings();
                     //   if(  $("#eotp").val().length == 6 && $("#potp").val().length == 6 &&  $("#o_otp").val().length == 6){
                     //   check_otp();
                   // }

                    });

                    $("#o_otp").on("input", function(e) {
                        clear_error_formatings();

                       // if( $("#eotp").val().length == 6 && $("#potp").val().length == 6 &&  $("#o_otp").val().length == 6){
                     //   check_otp();
                        // }

                    });



                });

                function clear_error_formatings(){
                     $('#e_otp_err').html('');
                         $('#email_error_border').removeClass('error_border');
                         $('#p_otp_err').html('');
                         $('#phone_error_border').removeClass('error_border');
                         $('#o_otp_err').html('');
                        $('#o_otp').removeClass('error_border');
                }

            	function check_otp(){
            	     /*
            	    	var spinner = $('#loader');

            			var otp = $('#otp').val();
            			var eotp = $('#eotp').val();
            			var potp = $('#potp').val();
            			var o_otp = $('#o_otp').val();

            			var _token = $("input[name=_token]").val();
            			var count_eotp = eotp.length;
            			var count_potp = potp.length;
            			var count_o_otp = o_otp.length;

            			var type = $('#verification_label').text();

            			if(count_eotp==6 && count_potp == 6 && count_o_otp == 6){
            			    spinner.show();


            			   $.ajax({
            					type: "POST",
            					url: "{{ url( app()->getLocale()) }}/verify_reset_pass_otp",

            				    data: {'otp':otp,'_token':_token,'otp_type':type, 'potp' : potp , 'eotp' : eotp, 'o_otp' : o_otp },
            				}).done(function (data) {
                				triggerAlert('Congratulations! OTP successfully verified.', 'success');
                				setTimeout(function(){
                               //     window.location.href = '<?php echo url( app()->getLocale());  ?>/request-reset-password';


                                }, 2000);
            				}).fail(function(jqXHR, textStatus, errorThrown)  {
            				    triggerAlert('Enter valid otp!', 'error');
            				    console.log(json.parse(errorThrown));
                                setTimeout(function(){
                                 $('#email_otp_frm').trigger("reset");
                                }, 2000);
                            });
                    	}
            			*/
            	}
        </script>
             <script>
        // only this code '.submit_code' when user reset his password in both cases like 'email' and 'mobile' for new users
            $(document).ready(function () {
            	    var spinner = $('#loader');

            		$(".submit_code").on("click", function(e) {

            		            clear_error_formatings();

                    		    const sessioniD = '<?php echo session_id(); ?>';
                    		   // console.log(sessioniD);
                    		    if(!sessioniD){
                    		        	triggerAlert('Page expired!', 'error');
                    		        	window.location.href = '<?php echo url( app()->getLocale());  ?>/login';
                    		    }

                    		    e.preventDefault();
                    		    //	var otp = $('#eORp_otp').val();

                    			var potp = $('#potp').val();
                    			var eotp = $('#eotp').val();
                    			var o_otp = $('#o_otp').val();
                    			var _token = $("input[name=_token]").val();
                    			var type = $('#verification_label').text();

                    			if(type == 'Email Address Verification Code'){
                    			   var otp = eotp; // made same when edited and seperated type=mobile and type=email at 23022023
                    			}

                    			if(type == 'Phone Number Verification Code'){
                    			   var otp = potp; // made same when edited and seperated type=mobile and type=email at 23022023
                    			}

                                if(eotp==""){
                                    $('#e_otp_err').html("Please enter email otp");
                                    $('#email_error_border').addClass('error_border');
                                    return true;
                                }

                                if(potp==""){
                                    $('#p_otp_err').html("Please enter phone otp");
                                    $('#phone_error_border').addClass('error_border');
                                    return true;
                                }

                                if(o_otp==""){
                                    $('#o_otp_err').html("Please enter authenticator otp");
                                    $('#o_otp').addClass('error_border');
                                    return true;
                                }


            	                if((o_otp!="" & o_otp.length==6) & (potp!="" & potp.length==6) & (eotp!="" & eotp.length==6) & (otp!="" & otp.length==6)){

                        			    spinner.show();
                        				$.ajax({
                        					type: "POST",
                        					url: "{{ url( app()->getLocale()) }}/verify_reset_pass_otp",
                        			        data: {'otp':otp,'_token':_token,'otp_type':type,  'potp' : potp , 'eotp' : eotp,  'o_otp' : o_otp },

                        				// 	dataType: "json",
                        				// 	encode: true,
                        				}).done(function (data) {
                            				triggerAlert('Congratulations! OTP successfully verified.', 'success');
                            				setTimeout(function(){
                                            window.location.href = '<?php echo url( app()->getLocale());  ?>/request-reset-password';
                                            }, 2000);
                        				}).fail(function(jqXHR, textStatus, errorThrown)  {
                        				    triggerAlert('Enter valid otp', 'error');
                                            setTimeout(function(){
                                             $('#email_otp_frm').trigger("reset");
                                            }, 2000);
                                        });
            			        }


            		});
            	});

            	  // ends only this code '.submit_code' when user reset his password in both cases like 'email' and 'mobile' for new users
        </script>

         <script>
        // probably this code is not required on this page but we did not removed it due to confussion
            $(document).ready(function () {
            	    var spinner = $('#loader');

            		$(".loginWithPhone").on("click", function(e) {
            		  //  alert();
            		    e.preventDefault();
            			var otp = $('#eORp_otp').val();
            		    var potp = $('#potp').val();
            			var eotp = $('#eotp').val();
            			var o_otp = $('#o_otp').val();
            			var _token = $("input[name=_token]").val();
                            if(otp==""){
                                $('#e_otp_err').html("Please enter phone otp");
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
            				    beforeSend: function(){
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
    					            $("#loginWithPhone").html("Next");
                                setTimeout(function(){
                                 $('#email_otp_frm').trigger("reset");
                                }, 2000);
                            });
            			}
            		});
            	});
        </script>
   </body>
</html>
