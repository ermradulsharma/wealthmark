<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
     @include('template.web_css')
<!------------------------Country flag dropdown css------------------------------->
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" />
    <!------------------------alert custom box css------------------------------->
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">

  <style>


@media (max-width: 768px){
    .legal_txt_box{
        max-height:500px;
    }

}


  </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
        <main id="main" >
         <section class="inner-page register">
              <div class="container">
                 <div class="col-lg-4 col-md-6 offset-md-1 offset-lg-1">



                     <div class="business-info">
                               <h5 class="mb-4">Create Entity Account</h5>
                               <div id="message"></div>
                               <form method="post" action="" name="registerform"  id="myform">
                                  <div class="form-floating mb-3">
                                     <input type="text" class="form-control" id="entity_Name" name="entity_Name" value="{{ (!empty($entity_Name)) ? $entity_Name : old('entity_Name') }}" placeholder="Entity Name">
                                     <label for="entity_Name">Entity Name</label>
                                     <span class="error" id="entity_name_err"> </span>
                                  </div>
                                  <div class="form-floating mb-3 entity_drop">
                               <div class="dropdown-theme mb-3">
                                                 <label for="" class="form-label">Select Entity Type</label>
                                                             <select class="selectpicker w-100"  id="intitydiv">
                                                                   @if($entity_types)

                                                          @foreach($entity_types as $entity_type)

                                                                <option class="init" data-value="{{$entity_type->id}}" id="entit" onclick="entity_id(this);">{{$entity_type->entity_name}}</option>
                                                                 @endforeach

                                                      @endif
                                                             </select>
                                            </div>
                                    <span class="error" id="entity_type_err"> </span>

                                     <a href="#" class="modal-trigger" data-modal="modal-name">What is legal form? </a>
                                  </div>
                                  <div>

                                  </div>
                               </form>
                               <div class="form-button mb-3">
                                  <input type="button" class="btn-yellow border-0 w-100 text-center" id="nextbtn" value="Next">
                               </div>
                               <span class="text-muted">Not looking for an entity account?<a href="{{ url(app()->getLocale(),'register-person')}}" class="text-theme-yellow"> Sign up for a personal account</a></span>
                     </div>









                     <!--===============================================================-->


                    <div class="business-details" style="display:none">


                       <h5 class="mb-4">Create Entity Account</h5>
                       <div id="message"></div>
                       <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                             <button class="nav-link active" id="pills-home-tab"  data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Email</button>
                          </li>
                          <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-profile-tab"  data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mobile</button>
                          </li>
                       </ul>


                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form method="post" action="" name="registerform"  id="myform">
                                    <div class="form-floating mb-3 clearable-input">
                                       <input type="email" value="{{ old('email') }}" class="form-control searchinput" id="email" name="email" placeholder="name@example.com">
                                        <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>

                                       </div>
                                       <label for="email">Entity  Email address</label>
                                       <span class="error" id="email_err"> </span>



                                    </div>

                                    <div class="form-floating mb-3 has-feedback clearable-input">
                                       <input name="password" onkeyup="demo();" type="password" class="form-control input pass-validation searchinput" id="password" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">
                                       <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                              <span class="input-group-eye " onclick="password_show_hide();">
                                               <i class="bi bi-eye-slash " id="show_eye"></i>
                                               <i class="bi bi-eye d-none" id="hide_eye"></i>
                                            </span>
                                       </div>


                                       <label for="floatingPassword">Password</label>
                                       <span class="error" id="password_err"></span>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>


                                             <div class="pwd_strength_wrap">
                                             <div class="passwordDescription">Password not entered</div>
                                                <div id="passwordStrength" class="strength0"></div>
                                                     <div class="pswd_info">
                                                        <strong>Strong Password Tips:</strong>
                                                            <ul>
                                                                <li class="length invalid">At least 6 characters</li>
                                                                <li class="pnum invalid">At least one number</li>
                                                                <li class="capital invalid"> one uppercase letter</li>
                                                                <li class="spchar invalid">At least one special character</li>
                                                            </ul>
                                                     </div><!-- END pswd_info -->
                                            </div><!-- END pwd_strength_wrap -->
                                        </div>
                                        <div class="form-floating mb-3">
                                       <a href="#" class="r_code"> <span>Referral ID (Optional) </span>  <span class="down-arrow" {{ (Request::segment(3) != '') ? 'display:none' : 'display:block'}}> <i class="bi-caret-down-fill"> </i></span> <span class="up-arrow" {{ (Request::segment(3) != '') ? 'display:block' : 'display:none'}}> <i class="bi-caret-up-fill"> </i></span> </a>
                                    </div>
                                    <div class="form-floating mb-3 r-box" {{ (Request::segment(3) != '') ? 'display:block' : 'display:none'}}>
                                       <input type="text" class="form-control" name="refid" id="floatingReferral" placeholder="Referral ID (Optional)" value="{{ Request::segment(3)}}">
                                       <label for="floatingReferral">Referral ID (Optional)</label>
                                    </div>
                                     <div class="form-check mb-3">
                                       <input class="form-check-input" type="checkbox" value="" name="defaultCheck4" id="defaultCheck4" >
                                       <label class="form-check-label" for="defaultCheck4">
                                       <span class="small">I agree to receive email updates from WealthMark</span>
                                       </label>
                                    </div>

                                    <div class="form-check mb-4">
                                       <input class="form-check-input" type="checkbox" value="" name="defaultCheck3" checked id="defaultCheck3">
                                       <label class="form-check-label" for="defaultCheck3">
                                       <span class="small">I have read and agree to WealthMarks's  <a href="#" class="text-theme-yellow">Terms of Service</a></span>
                                      </label>
                                        <span class="error" id="TOS_err"></span>
                                    </div>
                                    <div class="form-button mb-3">
                                       <input type="button" class="btn-theme w-100 text-center" id="submitbtn" value="Create Entity Account">

                                    </div>
                                  </form>
                            </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="" method="post" id="myform1">
                                <div class="input-number-group">
                                   <div class="mb-3">
                                      <input type="tel" id="txtPhone" class="select-county form-control" name="mobile"  placeholder="Mobile No" />
                                      <!--<input type="tel" id="txtPhone" class="form-control" name="mobile"  placeholder="Mobile No" />-->
                                   </div>
                                   <div class="form-floating mb-3 clearable-input">
                                      <input type="text" class="form-control searchinput" id="mobile"  placeholder="Phone Number">

                                       <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>

                                       </div>
                                      <label for="floatingInput">Entity Phone Number</label>
                                   </div>
                                </div>
                                <div><span class="error" id="phone_err"></span></div>
                                <div class="form-floating mb-3 clearable-input">
                                   <input name="password" type="password" class="form-control input pass-validation searchinput" id="password1" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1">

                                   <div class="icon-over">
                                            <span class="cross-btn-clear"  data-clear-input>  <i class="bi bi-x-circle-fill"></i> </span>
                                              <span class="input-group-eye " onclick="password_show_hide1();">
                                               <i class="bi bi-eye-slash " id="show_eye1"></i>
                                               <i class="bi bi-eye d-none" id="hide_eye1"></i>
                                            </span>
                                       </div>
                                       <label for="floatingPassword">Password</label>


                                <div class="pwd_strength_wrap">
                                    <div class="passwordDescription">Password not entered</div>
                                    <div id="passwordStrength2" class="strength0"></div>
                                     <div class="pswd_info">
                                        <strong>Strong Password Tips:</strong>
                                            <ul>
                                                <li class="length invalid">At least 6 characters</li>
                                                <li class="pnum invalid">At least one number</li>
                                                <li class="capital invalid"> one uppercase letter</li>
                                                <li class="spchar invalid">At least one special character</li>
                                            </ul>
                                     </div><!-- END pswd_info -->
                                </div><!-- END pwd_strength_wrap -->
                                </div>
                                <div class="form-floating mb-3">
                                   <a href="#" class="r_code"> <span>Referral ID (Optional) </span>  <span class="down-arrow" style="{{ (Request::segment(3) != '') ? 'display:none' : 'display:block'}} "> <i class="bi-caret-down-fill"> </i></span> <span class="up-arrow" style="{{ (Request::segment(3) != '') ? 'display:block' : 'display:none'}} "> <i class="bi-caret-up-fill"> </i></span> </a>
                                </div>
                                <div class="form-floating mb-3  r-box" style="{{ (Request::segment(3) != '') ? 'display:block' : 'display:none'}} ">
                                   <input type="text" class="form-control" id="refcode" placeholder="Referral ID (Optional)" value="{{ Request::segment(3)}}">
                                   <label for="floatingReferral">Referral ID (Optional)</label>
                                </div>
                                 <div class="form-check mb-3">
                                       <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="defaultCheck1" >
                                       <label class="form-check-label" for="defaultCheck1">
                                       <span class="small">I agree to receive email updates from WealthMark</span>
                                       </label>
                                    </div>

                                    <div class="form-check mb-4">
                                       <input class="form-check-input" type="checkbox" value="" checked id="defaultCheck2" name="defaultCheck2">
                                       <label class="form-check-label" for="m_defaultCheck2">
                                       <span class="small">I have read and agree to WealthMarks's  <a href="#" class="text-theme-yellow">Terms of Service</a></span>
                                       </label>
                                        <span class="error" id="m_TOS_err"></span>
                                    </div>
                                    <div class="form-button mb-3">

                                        <input type="button" class="btn-theme w-100 text-center" id="submitbtnn" value="Create Entity Account">
                                    </div>
                            </form>
                          </div>
                       </div>

                                    <span class="text-muted">Not looking for an entity account?<a href="{{ url(app()->getLocale(),'register-person')}}" class="text-theme-yellow"> Sign up for a personal account</a></span>
                    </div>
                 </div>
              </div>
           </section>
        </main>








<div class="modal custom_modal" id="modal-name">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">

       <div  class="modal_heading">What is legal form?</div>

    </div>
    <div class="modal-body">
      <div class="legal_txt_box scrollbar" id="style-1">

      <div class="inner">
         <div  class="legal_heading">Company Limited by Shares or Guarantee</div>
         <div  class="legal_text">The most common type of legal structure. This Includes private limited companies, proprietary companies, limited by guarantee type companies.</div>
      </div>
      <div class="inner">
         <div  class="legal_heading">Trust</div>
         <div  class="legal_text">Trust is a legal arrangement whereby a person or entity (a trustee) holds property or assets, for the benefit of one or more beneficiaries.</div>
      </div>
      <div class="inner">
         <div  class="legal_heading">Partnership</div>
         <div  class="legal_text">A partnership is a formal arrangement by two or more parties to manage and operate a business and share its profits. Some examples of partnerships are general partnerships, limited partnerships, limited liability partnerships.</div>
      </div>
      <div class="inner">
         <div  class="legal_heading">Limited Liability Company</div>
         <div  class="legal_text">A hybrid legal entity between a limited company and a partnership, where each of its members has limited personal liability, owns and controls the business and shares in profits.</div>
      </div>
      <div class="inner">
         <div  class="legal_heading">Segregated Portfolio/Protected Cell/Variable Capital Type Companies</div>
         <div  class="legal_text">Legal structures which allow an entity the ability to isolate and segregate its assets and liabilities into separate "segregated portfolios" or cells.</div>
      </div>
      <div class="inner">
         <div  class="legal_heading">Foundations / Co-Ops / Unions / Associations / Clubs / Societies</div>
         <div  class="legal_text">Unincorporated entities and associations which have been created for a common purpose with the intent of creating a legally binding relationship between a group of people.</div>
      </div>
      <div class="inner">
         <div  class="legal_heading">Government Body/Agency</div>
         <div  class="legal_text">Government Bodies/Agencies could be the government of any country or of any political subdivision of any country, any instrumentality of any such government, any other person or organization authorized by law to perform any executive, legislative, judicial, regulatory, administrative, military, or police functions of any such government, and any intergovernmental organization.</div>
      </div>
   </div>


    <div class="modal-footer">
          <button class="close-modal">OK</button>
    </div>
    </div>
  </div>
</div>






      @include('template.copy_right_footer')
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>

          @include('template.web_js')


        <script src="{{ asset('assets/js/alert.js') }}"></script>
        <script src="{{ asset('assets/js/login_register.js') }}"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/intlTelInput-jquery.min.js') }}"></script>


       <script>

    $(".modal-trigger").click(function(e){
        e.preventDefault();
        dataModal = $(this).attr("data-modal");
         $("#" + dataModal).css({"display":"block"});

    });

    $(".close-modal, .modal-sandbox").click(function(){
      $(".modal").css({"display":"none"});
    });
</script>



            <script>
            //** for business type id**//
                                          function entity_id(e){
                                           const ent=  e.getAttribute('data-value');
                                        //  alert(ent);


                                //     var parentid = e.parentElement.getAttribute('id');
                                  //   alert(parentid);

                                           };


                                       </script>


        <script>
             $('#nextbtn').click(function(){


                    const entityName = $("#entity_Name").val();
                    const entityType = $(".init").html();

                    console.log(entityName);
                    console.log(entityType);

                if (entityName == "" && entityType == "Select Entity Type") {

                    $('#entity_name_err').html('Please enter Entity name');
                    $('#entity_Name').addClass('error_border');
                      $('#entity_type_err').html('Please select Entity type');
                    $('#intitydiv').addClass('error_border');
                    return false;


                }else if(entityName == "" || entityType == "Select Entity Type") {

                    if(entityName == ""){
                     $('#entity_name_err').html('Please enter Entity name');
                    $('#entity_Name').addClass('error_border');
                    };

                    if(entityType == "Select Entity Type"){
                    $('#entity_type_err').html('Please select Entity type');
                    $('#intitydiv').addClass('error_border');
                    };

                    return false;

                }else{
                    $('.business-info').css("display" , "none");
                     $('.business-details').css("display" , "block");
                    $('#entity_Name').removeClass('error_border');
                     $('#intitydiv').removeClass('error_border');
                     // return true;



                         $.ajax({
                            type: "POST",
                            url: '<?php echo url('api/entity-primary-detail');  ?>',
                            data: {
                              'entityName': entityName,
                              'entityType': entityType,

                          },
                          success: function(data) {
                               console.log(data);
                               // triggerAlert('Register successful', 'success');
                                $('#primarystepblock').css("color","green");
                                $('#primarystepblock').text("Your! first step Completed , Go for next....").show().delay(3000).fadeOut();
                                // setTimeout(function(){
                                //     $('#myform').trigger("reset");
                                //     window.location.href = 'https://wealthmark.io/beta/en/request_otp?step=22';
                                // }, 3000);
                          },
                          error: function(xhr, status, error) {
                              console.log(status);
                              console.log(error);
                               $('#primarystepblock').css("color","red");
                               $('#primarystepblock').text("Something Went wrong....").show().delay(3000).fadeOut();
                        //       var entityName_error = JSON.parse(xhr.responseText);
                        //       var entityType_error = erroJson.error.entityType;

                        // //var password_error=erroJson.error.password;
                        //         if(entityName_error){
                        //         //   $('#email_err').html(email_error);
                        //          $('#primarystepblock').addClass('error_border');

                        //          $('#primarystepblock').html(entityName_error);

                        //         }
                        //         if(entityType_error){

                        //           $('#primarystepblock').addClass('error_border');
                        //          $('#primarystepblock2').html(entityType_error);
                        //         }
                            }
                        });

                }

             });

             $('.legal_type_box_inner').click(function(){
                    $(".legal_type_dropdown").removeClass("closing").addClass("showing");
                    $(".legal_type_dropdown").removeClass("legal_type_ul_box").addClass("ul_list_show");
                    $(".icon_legal_svg").removeClass("icon_legal_svg").addClass("icon_legal_svg_up");

            });




        </script>

        <script>


                $(document).ready(function () {

                $('#email').on('input', function () {
                    checkemail();
                });
                // $('#password').on('input', function () {
                //     checkpass();
                // });
                $('#mobile').on('input', function () {
                    checkmobile();
                });
                $('#submitbtn').click(function () {

                  if (!checkemail()|| !checkpass()) {
                        triggerAlert('Please fill all required field', 'error');
                    }
                    else{
                      var checkFlag = '0';
                      var defaultCheck3 = '0'
                    if ($('#defaultCheck4').is(':checked')) {
                        checkFlag = '1';
                    }

                    if($('#defaultCheck3').is(':checked')== false) {
                            $('#term_errs').html('Please check terms & conditions');
                            $('#defaultCheck3').addClass('error_border');
                            return true;
                        }else{
                            $('#term_errs').html('');
                            $('#defaultCheck3').removeClass('error_border');
                            defaultCheck3 = '1'
                        }


                        $("#message").html("");
                        var form = $('#myform')[0];
                        var frmdata = new FormData(form);
                        var email = $('#email').val();
                        var password = $('#password').val();
                        var refcode =$('#floatingReferral').val();

                        var agree_TOS = $("#defaultCheck4").is(":checked") ;


                      //   alert();
                        console.log(email);
                        console.log(password);
                        console.log(refcode);
                        $.ajax({
                            type: "POST",
                            url: '<?php echo url('api/email_register');  ?>',
                            data: {
                               'email': email,
                               'password': password,
                               'parent_referral_id':refcode,
                                'check_email_update':checkFlag,
                               'agree_TOS' : agree_TOS,
                                'defaultCheck3' : defaultCheck3,
                           },
                           success: function(data) {
                                // triggerAlert('Register successful', 'success');
                                setTimeout(function(){
                                    $('#myform').trigger("reset");
                                    window.location.href = '{{ url( app()->getLocale(), 'request_eotp') }}';
                                }, 3000);
                           },
                           error: function(xhr, status, error) {
                               var erroJson = JSON.parse(xhr.responseText);
                               var email_error=erroJson.error.email;
                               var password_error=erroJson.error.password;
                               var termServices_error = erroJson.error.defaultCheck3;
                                if(email_error){
                                   $('#email_err').html(email_error);
                                    $('#email').addClass('error_border');
                                }
                                if(password_error){
                                   $('#password_err').html(password_error);
                                    $('#password').addClass('error_border');
                                }
                                 if(termServices_error){
                                   $('#TOS_err').html(termServices_error);
                                    $('#defaultCheck3').addClass('error_border');
                                }
                            }
                        });
                    }
                });

                $('#submitbtnn').click(function () {
                     var checkFlag = '0';
                        var   defaultCheck2 = '0';
                    if ($('#defaultCheck1').is(':checked')) {
                        checkFlag = '1';
                    }
                   // alert();
                    var country_name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
                    var dialCode = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
                    $("#message").html("");
                    var form = $('#myform1')[0];
                    var frmdata = new FormData(form);
                    var mobile = $('#mobile').val();
                    var password = $('#password1').val();
                    var refcode = $('#refcode').val();

                        var m_agree_TOS = $("#defaultCheck1").is(":checked") ;

                    if($('#defaultCheck2').is(':checked')== false) {
                        $('#term_err').html('Please check terms & conditions');
                        $('#defaultCheck2').addClass('error_border');
                        return true;
                    }else{
                        $('#term_err').html('');
                        $('#defaultCheck2').removeClass('error_border');
                           defaultCheck2 = '1'

                    }



                    $.ajax({
                        type: "POST",
                        url: '<?php echo url('api/phone_register');  ?>',
                        data: {
                           'phone': mobile,
                           'password': password,
                           'country_phone_code':dialCode,
                           'country_code':country_name,
                           'parent_referral_id':refcode,
                           'check_email_update':checkFlag,
                           'm_agree_TOS' : m_agree_TOS,
                           'defaultCheck2' : defaultCheck2,
                       },
                       success: function(data) {
                           // triggerAlert('Register successful', 'success');
                            setTimeout(function(){
                                $('#myform1').trigger("reset");
                                window.location.href = '{{ url( app()->getLocale(), 'request_potp') }}';
                            }, 3000);
                       },
                       error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                           var phone_error=erroJson.error.phone;
                           var password_error=erroJson.error.password;
                            var m_termServices_error = erroJson.error.defaultCheck2;
                            if(phone_error){
                               $('#phone_err').html(phone_error);
                                $('#mobile').addClass('error_border');
                            }
                            if(password_error){
                               $('#password1_err').html(password_error);
                                $('#password1').addClass('error_border');
                            }
                             if(m_termServices_error){
                                   $('#m_TOS_err').html(m_termServices_error);
                                    $('#defaultCheck2').addClass('error_border');
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



            function checkpass() {
                console.log("sass");
                var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                var pass = $('#password').val();
                var validpass = pattern2.test(pass);
                if (pass == "") {
                    $('#password_err').html('Please enter your password');
                    $('#password').addClass('error_border');
                    return false;
                }
                else if (!validpass) {
                    $('#password_err').html('Minimum 8 and upto 15 characters, at least one uppercase, one lowercase, one number and one special character:');
                    $('#password').addClass('error_border');
                    return false;
                }
                else {
                    $('#password_err').html("");
                     $('#password').removeClass('error_border');
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
      </script>

        <script id="rendered-js">
             $(".entity_drop ul").on("click", ".init", function () {
              $(this).closest(".entity_drop ul").children('li:not(.init)').toggle();
            });

            var allOptions = $(".entity_drop ul").children('li:not(.init)');
            $(".entity_drop ul").on("click", "li:not(.init)", function () {
              allOptions.removeClass('selected');
              $(this).addClass('selected');
              $(".entity_drop ul").children('.init').html($(this).html());
              allOptions.toggle();
            });

        </script>
   </body>
</html>
