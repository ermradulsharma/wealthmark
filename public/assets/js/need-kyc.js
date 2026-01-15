
//         $(function() {
//           $('input[name="dob"]').daterangepicker({
//               autoUpdateInput: false,
//               singleDatePicker: true,
//               showDropdowns: true,
//               autoApply: true,
//               opens:'center',
//               drops:'up',
//               minYear: 1901,
//               maxYear: parseInt(moment().format('YYYY')-18),
//               locale: {
//                   cancelLabel: 'Clear'
//               }
//           });

//           $('input[name="dob"]').on('apply.daterangepicker', function(ev, picker) {
//               $(this).val(picker.startDate.format('DD-MM-YYYY'));
//           });

//           $('input[name="dob"]').on('cancel.daterangepicker', function(ev, picker) {
//               $(this).val('');
//           });
//         });




//         function check_pan(inputvalues) {
//             var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
//             if(!regex.test(inputvalues)){
//                 $('#pan_card_err').html("Invalid pan number");
//                 $('#pan_card').addClass('error_border');
//                 return true;
//             }else{
//                 $('#pan_card_err').html("");
//                 $('#pan_card').removeClass('error_border');
//                 return false;
//             }

//         }

//          $(function(){
//             $('#datepicker').datepicker({
//                 format: "dd-mm-yyyy",
//                 autoclose: true
//             });



//          });

//          $(".modal-trigger").click(function(e){
//          e.preventDefault();
//          dataModal = $(this).attr("data-modal");
//          $("#" + dataModal).css({"display":"block"});

//          });

//          $(".close-modal, .modal-sandbox").click(function(){
//          $(".modal").css({"display":"none"});
//          });

//          // --------------code for verification steps-------------------

//          $(".btn-select-country").click(function(){
//          $("#Personal_Information").css({"display":"block"});
//          $("#select_country").css({"display":"none"});
//          });

//          $(".btn-p-info1").click(function(){
//             var f_name=$("input[name=first_name]").val();
//             var rename_f_name=$("input[name=rename_user]").val();
//           // var m_name=$("input[name=middle_name]").val();
//           //  var l_name=$("input[name=last_name]").val();
//             var dob=$("input[name=dob]").val();
//             var year = Number(dob.substr(6, 4));
//             var month = Number(dob.substr(3, 2));
//             var day = Number(dob.substr(0, 2));
//             var today = new Date();
//             var age = today.getFullYear() - year;



//             if(rename_f_name.length > 0  ){

//                 console.log(rename_f_name);
//                  console.log(f_name);
//                  if($("input[name=rename_user]:checked").length > 0){
//                   f_name = rename_f_name;
//                  }else{
//                     triggerAlert('something went wrong !', 'error');

//                  }

//             }

//             if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
//               age--;
//             }

//             var dob=$("input[name=dob]").val();
//                 if (!f_name) {
//                     $('#first_name_err').html("Enter first name");
//                     $('#first_name').addClass('error_border');
//                 }

//                 else if (!dob) {
//                     $('#dob_err').html("Enter DOB as on Pancard");
//                     $('#datepicker').addClass('error_border');
//                 }

//                 else if (17 >= age)
//                     {
//                         $('#dob_err').html("You are not elegible because your age under 18 years.");
//                         $('#datepicker').addClass('error_border');
//                     }
//                 else{
//                     $('#first_name_err').html("");
//                     $('#first_name').removeClass('error_border');
//                     $('#dob_err').html("");
//                     $('#datepicker').removeClass('error_border');

//                     $(".step1").css({"display":"none"});
//                     $(".step2").css({"display":"block"});
//                 }
//          });

//         $('.rename_username').click(function(){
//              var rename = $("input[name=rename_user]").val();
//              var old_name= $("input[name=first_name]").val();

//              if($("input[name=rename_user]:checked").length > 0){

//                  $("#personal_step1").removeAttr('disabled' );
//                   $("input[name=first_name]").val(rename);

//                  }else{
//                      $("input[name=first_name]").val(old_name);
//                      $("#personal_step1").attr('disabled', 'disabled' );

//                  }
//         });

//          $(".btn-p-info2").click(function(){

//                 var country_name = $("input[name=country_name]").val();
//                 var country_ISO2code = $("input[name=country_ISO2code]").val();
//                 var country_ID = $("input[name=countryyId]").val();
//                 var f_name=$("input[name=first_name]").val();
//                 var rename_f_name=$("input[name=rename_user]").val();
//                 //  var m_name=$("input[name=middle_name]").val();
//                 // var l_name=$("input[name=last_name]").val();
//                 var dob=$("input[name=dob]").val();
//                 var residential_address = $("textarea[name=residential_address]").val();
//                 var pin_code=$("input[name=pin_code]").val();
//                 var city=$("input[name=city]").val();
//                 var pan_card=$("input[name=pan_card]").val();
//                 const token = $("input[name=_token]").val();
//                 // var _token = $("input[name=_token]").val();
//                 //  var pan_card_img = $("#pan_card_img").prop("files")[0];

//               var pan_card_img = $("#pan_card_img")[0].files[0];
//               var blobPanImg = $("#panPreview").attr('src');
//             //   alert(pan_card_img);
//             //   var selected = document.getElementById("pan_card_img").files.length > 0;
//             //     alert(selected);
//             //   die;
//               var formData = new FormData( $('#pancard_img')[0]);

//               // formData.append('pancard_img' , pan_card_img);
//                 formData.append('country_name' , country_name);
//                  formData.append('country_ISO2code' , country_ISO2code);
//                  formData.append('country_ID' , country_ID);
//                   formData.append('first_name' , f_name);
//                   // formData.append('middle_name' , m_name);
//                   //  formData.append('last_name' , l_name);
//                      formData.append('dob' , dob);
//                       formData.append('residential_address' , residential_address);
//                       formData.append('postal_code' , pin_code);
//                         formData.append('city' , city);
//                          formData.append('pan_card' , pan_card);
//                           formData.append('_token' , token);
//                           formData.append('blobPanImg', blobPanImg );


//             if (!residential_address) {
//                 $('#residential_address_err').html("Enter residential address");
//                 $('#residential_address').addClass('error_border');
//             }
//             else if (!pin_code) {
//                 $('#pin_code_err').html("Enter pin code");
//                 $('#pin_code').addClass('error_border');
//             }
//             else if (!city) {
//                 $('#city_err').html("Enter city");
//                 $('#city').addClass('error_border');
//             }
//             else if (!pan_card) {
//                 $('#pan_card_err').html("Enter pan card");
//                 $('#pan_card').addClass('error_border');
//             }

//             else if (!pan_card_img) {
//                 $('#pan_card_img_err').html("Upload pan card");
//                 $('#pan_card_img').addClass('error_border');
//             }else if (check_pan(pan_card)) {
//               // check_pan(pan_card);
//             }else{

//                 $.ajax({
//                             xhr: function() {
//                             var xhr = new window.XMLHttpRequest();
//                             xhr.upload.addEventListener("progress", function(evt) {
//                                 if (evt.lengthComputable) {
//                                     var percentComplete = (evt.loaded / evt.total) * 100;

//                                     $('#UploadingImgstatus').html('Uploading.. '+percentComplete.toFixed()+' %');
//                                 }
//                             }, false);
//                             return xhr;
//                             },

//                     type: "POST",
//                      enctype : 'multipart/form-data',
//                     processData: false,
//                 beforeSend: function(){
//                                 $(".loadingPersonal").text('Submitting...........') ;
//                                 $(".loadingPersonal").addClass('disablepointer');

//                                 },

//                     contentType: false,

//                     url: '{{ url( app()->getLocale()) }}/save_personal_info',

//                 data : formData,

//                 success: function(data) {


//                         if(data.success == 200){

//                          $("#Personal_Information").css({"display":"none"});
//                          $("#Identity_Verification").css({"display":"block"});
//                               triggerAlert('Pan card verified successfully!', 'success');
//                         }

//                   },
//                   error: function(xhr, status, error) {
//                       //console.log(error);
//                       $(".step1").css({"display":"block"});
//                       $(".step2").css({"display":"none"});
//                       $("#personal_step1").attr('disabled', 'disabled' );
//                       $("#UploadingImgstatus").text('');




//                  var erroJson = JSON.parse(xhr.responseText);

//                         if(erroJson.success == 201){
//                          console.log(erroJson.panDetailAfterVerificationfail);
//                          triggerAlert(erroJson.panDetailAfterVerificationfail, 'error');
//                           if($(".rename_username").hasClass('hide')){
//                                 $(".rename_username").removeClass('hide');
//                             }
//                          $('#pan_card_err1').html('<div class="bg-light-blue fs-12 card p-3">'+erroJson.panDetailAfterVerificationfail+'</div>');
//                          $('#pan_card_res1').html('<div class="bg-light-blue fs-12 card p-3 mt-2"> Response Number- '+erroJson.panNumInresponse+' </br> Response Name- '+erroJson.nameInResponse+'</br>'+'</div>');

//                          $("input[name=rename_user]").val(erroJson.nameInResponse);
//                          $('#pan_card').addClass('error_border');
//                          $(".loadingPersonal").text('Final') ;
//                          $(".loadingPersonal").removeClass('disablepointer');
//                         }


//                         var pan_card= erroJson.error.pan_card;

//                         var pan_card_img = erroJson.error.pan_card_img;
//                         if(pan_card){
//                             $('#pan_card_err').html(pan_card);
//                             $('#pan_card').addClass('error_border');
//                         }
//                         if(pan_card_img){
//                             $('#pan_card_img_err').html(pan_card_img);
//                             $('#pan_card_img').addClass('error_border');
//                         }


//                     },
//                     complete: function(){
//                                 $(".loadingPersonal").text('Final') ;
//                                 $(".loadingPersonal").removeClass('disablepointer') ;

//                                 }
//                 });
//             }
//          });

//         $("#btn_Identity1").click(function(){
//             var id_card_type = $('#id_card_data').val();
//              //alert(id_card_type);
//             if (!id_card_type) {
//                 triggerAlert('Select id card type !', 'error');

//                 return true;

//             }else{
//                  if(id_card_type == 'ID Card (Aadhaar Image Upload)'){
//                 // alert('ID Card (Aadhaar Image Upload)');
//                     $(".Identity_Verification_step2").css({"display":"block"});
//                     $(".Identity_Verification_step1").css({"display":"none"});

//                 }

//               if( id_card_type == 'ID Card (Aadhaar Digilocker)'){
//                   //  alert('ID Card (Aadhaar Digilocker)');
//                 $(".Identity_Verification_step1").css({"display":"none"});
//                 $("#digilockerSection").css({"display":"block"});

//                 }
//             }



//          });


//         $("#validate_selfie_image").click(function(){
//             var selfie_image=$("input[name=selfie_image]").val();
//             if (!selfie_image) {
//                 $('#selfie_err').html("Please capture selfie image");
//                 $("#selfie_err").css({"display":"block"});
//                 return true;
//             }else{
//                 var _token = $("input[name=_token]").val();
//                 const front_image = $("#formed_img_preview_front img").attr('src');
//                 const selfie_formed_image = $("#formed_img_preview_selfie img").attr('src');

//                 $.ajax({
//                     type: "POST",
//                     url: '{{ url( app()->getLocale()) }}/save_selfie_info',
//                     data: {'selfie_image':selfie_image,'_token':_token, 'front_image': front_image , 'selfie_formed_image': selfie_formed_image },
//                     success: function(data) {



//                         $(".modal").css({"display":"none"});
//                         triggerAlert('Your application successfully submitted. Application under review', 'success');
//                         setTimeout(function(){
//                             window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
//                         }, 3000);
//                     },
//                     error: function(xhr, status, error) {
//                       var erroJson = JSON.parse(xhr.responseText);
//                       var faceMatchPercent = erroJson.error.faceMatchPercent;
//                       var faceMatchComment = erroJson.error.faceMatchComment;
//                       if(faceMatchComment){
//                           triggerAlert(faceMatchComment, 'error');
//                       }

//                     }
//                 });
//             }
//         });



//          $(".upld-btn-doc").click(function(){
//              $("#upload_document").css({"display":"none"});
//              $("#img_capture").css({"display":"block"});
//          });

//           $("#take_selfie").click(function(){
//              $("#selfie_img_capture").css({"display":"block"});
//              $("#selfie_div").css({"display":"none"});
//              $("#img_capture").css({"display":"none"});
//          });

//          $("#aadhar_btn").click(function(){
//              $("#upload_document").css({"display":"block"});
//              $("#Identity_Verification").css({"display":"none"});
//          });


//          $('.inner').click(function() {

//              $(this).addClass('document_type_active').siblings().removeClass('document_type_active');
//              var s = $(this).find('#id_card_type').html();
//              $('#id_card_data').val(s);
//              $(this).find('.document_type_inner_right').addClass("document_type_active_icon").siblings().removeClass('document_type_active_icon');
//          });


//          $(document).ready(function () {
//          $(".niceCountryInputSelector").each(function(i,e){
//          new NiceCountryInput(e).init();
//          });
//          });





//         function open_selfie_camera(){
//             Webcam.set({
//                 width: 490,
//                 height: 390,
//                 image_format: 'jpeg',
//                 jpeg_quality: 100,
//               // flip_horiz: true,
//                  constraints: {
//                   facingMode: 'user'
//                 }
//             });
//             Webcam.attach( '#camera-selfie' );
//         }

//         function open_camera(){
//           Webcam.set({
//                 width: 490,
//                 height: 390,
//                 image_format: 'jpeg',
//                 jpeg_quality: 100,
//               //  flip_horiz: false,
//                 constraints: {
//                   facingMode: 'environment'
//                 }
//             });
//             Webcam.attach( '#camera-front' );
//         }

//         function open_back_camera(){
//             Webcam.set({
//                 width: 490,
//                 height: 390,
//                 image_format: 'jpeg',
//                 jpeg_quality: 100,
//               // flip_horiz: false,
//                 constraints: {
//                   facingMode: 'environment'
//                 }
//             });
//             Webcam.attach( '#camera-back' );
//         }

//     $('#camera-front').click(function() {
//     webcam.flip();
//     webcam.start();
//     });

//     // Webcam.attach( '#my_camera1' );
//     function take_front_snapshot() {
//         Webcam.snap( function(data_uri) {
//             $(".image-tag").val(data_uri);

//             // document.getElementById('front_image').innerHTML = '<img style="width:100%;height:100%" src="'+data_uri+'"/>';
//             document.getElementById('img_preview_front').innerHTML = '<img  style="margin-bottom:10px;max-width:300px;max-height:150px; " src="'+data_uri+'"/>';
//             document.getElementById("img_preview_front_delete").style.display="block";
//             document.getElementById("btn_click_img_front").style.display="none";
//             document.getElementById("img_preview_front").style.display="block";



//         } );



//         Webcam.reset();
//     }

//     function take_back_snapshot() {
//         Webcam.snap( function(data_uri) {
//             $(".image-tag1").val(data_uri);
//             document.getElementById('img_preview_back').innerHTML = '<img style="margin-bottom:10px;max-width:300px;max-height:150px; " src="'+data_uri+'"/>';
//             document.getElementById("img_preview_back_delete").style.display="block";
//             document.getElementById("btn_click_img_back").style.display="none";
//             document.getElementById("img_preview_back").style.display="block";

//         } );

//          //  conversion from blog to decoded back image--------------------
//             // var _token = $("input[name=_token]").val();
//             // const backImg_base64Url = $(".image-tag1").val();



//         Webcam.reset();
//     }

//     function take_selfie_snapshot() {
//         Webcam.snap( function(data_uri) {
//             $(".image-tag2").val(data_uri);
//             document.getElementById('selfie_image_preview').innerHTML = '<img style="margin-bottom:10px;max-width:300px;max-height:150px;" src="'+data_uri+'"/>';
//             document.getElementById("selfie_image_delete").style.display="block";
//             document.getElementById("btn_selfie_image").style.display="none";
//             document.getElementById("selfie_image_preview").style.display="block";
//         } );



//         Webcam.reset();
//     }




//          function onChangeCallback(ctr){
//              console.log(ctr);
//              $(".country_box").load("{{ url('api/filter/get_country_record') }}",{'country_code':ctr});
//          }

//          $("#back_first").click(function(){
//           $("#Personal_Information").css({"display":"none"});
//           $("#select_country").css({"display":"block"});
//          });

//          $("#back_start").click(function(){
//           $(".modal").css({"display":"none"});
//          });

//          $("#back_third").click(function(){
//              $(".step2").css({"display":"none"});
//              $("#Personal_Information").css({"display":"block"});
//              $(".step1").css({"display":"block"});
//          });

//          $("#back_fourth").click(function(){
//              $(".step2").css({"display":"block"});
//              $("#Personal_Information").css({"display":"block"});
//              $(".step1").css({"display":"none"});
//              $("#Identity_Verification").css({"display":"none"});
//              $("#Identity_Verification_step1").css({"display":"none"});
//          });

//          $("#back_fifth").click(function(){
//              $(".Identity_Verification_step1").css({"display":"block"});
//              $(".Identity_Verification_step2").css({"display":"none"});
//          });

//          $("#back_sixth").click(function(){
//              $("#Identity_Verification").css({"display":"block"});
//              $("#upload_document").css({"display":"none"});
//          });

//         $("#back_digilocker").click(function(){
//              $("#digilockerSection").css({"display":"none"});
//              $("#Identity_Verification").css({"display":"block"});
//               $(".Identity_Verification_step1").css({"display":"block"});


//          });

//          $(".close_digilocker_model").click(function(){
//              $("#digilockerSection").css({"display":"none"});
//              $("#Identity_Verification").css({"display":"block"});
//               $(".Identity_Verification_step1").css({"display":"block"});


//          });

//           $("#back_seventh").click(function(){
//              $("#Identity_Verification").css({"display":"none"});
//              $("#img_capture").css({"display":"none"});
//              $("#upload_document").css({"display":"block"});
//           });

//           $("#capture-camera").click(function(){
//              $("#upload_document").css({"display":"block"});
//              $("#img_capture").css({"display":"none"});
//              $
//           });

//           $("#capture-selfie-camera").click(function(){
//              $("#selfie_div").css({"display":"block"});
//              $("#selfie_img_capture").css({"display":"none"});
//              $
//           });


//           $("#back_img_btn").click(function(){
//              $("#upload_document").css({"display":"block"});
//              $(".img_capture_front").css({"display":"none"});
//              $
//           });


//           $(".btn-back-img").click(function(){
//              $("#upload_document").css({"display":"none"});
//              $(".img_capture_front").css({"display":"none"});
//              $(".img_capture_back").css({"display":"block"});
//              $
//           });


//           $(".back_img_btn").click(function(){
//              $("#upload_document").css({"display":"block"});
//              $(".img_capture_front").css({"display":"none"});
//              $(".img_capture_back").css({"display":"none"});
//              $
//           })


//         // digilocker starts
//           $("#continue_digilocker").click(function(){

//                         const id_card_type = 'digiLoacker';
//                         const user_id =  '{{ Auth::user()->id }}';
//                         const aadhaar_num = $("#digilocker_aadhaar_card_num").val();
//                         var _token = $("input[name=_token]").val();



//                         if(aadhaar_num.length != 12 || aadhaar_num.length < 1){
//                             $("#digilocker_aadhaar_card_num").addClass('error_border');
//                             $('#digilocker_aadhaar_card_num_err').html("Invalid aadhaar number!");
//                         }


//               if(aadhaar_num.length == 12 ){
//                 //   console.log(id_card_type);
//                 //   console.log(aadhaar_num);

//                             $("#digilocker_aadhaar_card_num").removeClass('error_border');
//                             $('#digilocker_aadhaar_card_num_err').html("");
//                     $.ajax({

//                       type: "POST",
//                       url: '{{ url( app()->getLocale()) }}/user/update-digilocker-aadhaarAndType',
//                       data: {
//                             'user_id': user_id,
//                             'id_card_type': id_card_type,
//                             'id_card_num' : aadhaar_num,
//                             '_token':_token,
//                         },
//                       success: function(data) {
//                             if(data.status){
//                               window.location.href = '{{ url( app()->getLocale()) }}/user/verifyDigilocker';
//                             }

//                       },
//                       error: function(xhr, status, error) {

//                           var erroJson = JSON.parse(xhr.responseText);
//                           console.log(erroJson);
//                           var digilockerUpadetErr = erroJson.error.id_card_num;

//                         //   triggerAlert(id_card_num, 'error');
//                           $('#digilocker_aadhaar_card_num_err').html(digilockerUpadetErr);

//                           setTimeout(function(){
//                               $('.loading').html('');
//                               $('#digilocker_aadhaar_card_num_err').html('');

//                           }, 2000);
//                         }
//                     });
//                 }



//           });


//         // ends digilocker

//         //   btn-back-img

//           $("#btn_Identity2").click(function(){

//                 var id_card_type = $("input[name=id_card_data]").val();
//                 var back_image=$("input[name=back_image]").val();
//                 var front_image=$("input[name=front_image]").val();


//                                      //   var newFormed_back_image = $("#formed_img_preview_back img").attr('src');
//                                      //   var newFormed_front_image = $("#formed_img_preview_front img").attr('src');

//                 var id_card_num = $("#id_card_num").val();
//                 if(id_card_num.length >= 1){
//                         $("#id_card_num").removeClass('error_border');
//                         $('#id_card_num_err').html("");
//                         // $("#id_card_num_err").css({"display":"block"});

//                 }
//                 if(front_image.length >= 1){
//                      $("#front_image").removeClass('error_border');
//                         $('#front_image_err').html("");
//                         $("#front_image_err").css({"display":"none"});
//                 }

//                 if(back_image.length >=1){
//                       $("#back_image").removeClass('error_border');
//                         $('#back_image_err').html("");
//                         $("#back_image_err").css({"display":"none"});
//                 }


//                 if(!id_card_type){

//                         $('#id_card_err').html("Select id card type");
//                         $("#id_card_err").css({"display":"block"});
//                         return true;
//                 }else if(!id_card_num){
//                         $("#id_card_num").addClass('error_border');
//                         $('#id_card_num_err').html("Please enter aadhaar number");
//                         // $("#id_card_num_err").css({"display":"block"});

//                 }else if(!front_image){
//                         $("#front_image").addClass('error_border');
//                         $('#front_image_err').html("Please capture front image");
//                         $("#front_image_err").css({"display":"block"});
//                 }else if(!back_image){
//                         $("#back_image").addClass('error_border');
//                         $('#back_image_err').html("Please capture back image");
//                         $("#back_image_err").css({"display":"block"});
//                         }else{


//                     var _token = $("input[name=_token]").val();
//                     $.ajax({
//                         type: "POST",
//                         url: '{{ url( app()->getLocale()) }}/save_id_card_info',
//                         beforeSend: function( jqXHR ) {

//                                 $('.loading').html('<span style="color:#000 !important; backgraound:#fff !important" class=" alert-success"> Please wait!. Images processing ... </span>');
//                                                     },
//                         data: {
//                             'front_image':front_image,
//                             'back_image':back_image,
//                             'id_card_type':id_card_type,

//                             'id_card_num' : id_card_num,
//                             '_token':_token,
//                         },
//                       success: function(data) {

//                             $(".img_capture_front").css({"display":"none"});
//                             $(".img_capture_back").css({"display":"none"});
//                             $("#upload_document").css({"display":"none"});

//                           triggerAlert('aadhaar verified successfully. Now match your selfie', 'success');
//                             $("#selfie_div").css({"display":"block"});
//                              $( '.loading' ).html('');
//                       },
//                       error: function(xhr, status, error) {

//                          //  $("#selfie_div").css({"display":"block"});
//                           $( '.loading' ).html( '<span class=" alert-danger "> Images cannot be processed try again </span>');
//                           $( '#id_card_num_err').html( '<span class=" alert-danger "> Aadhaar card number mandatory </span>');


//                           var erroJson = JSON.parse(xhr.responseText);
//                           console.log(erroJson);
//                           var id_card_num= erroJson.error.id_card_num;
//                             var frontImageData = erroJson.error.frontImageData;
//                           var backImageCountryCityData = erroJson.error.backImageCountryCityData;


//                           if(id_card_num){
//                                 triggerAlert(id_card_num, 'error');
//                                  $( '#id_card_num_err').html(id_card_num);
//                                   $("#id_card_num_err").css({"display":"block"});
//                           }

//                             if(frontImageData){
//                                 triggerAlert(frontImageData, 'error');

//                                  $( '#id_card_num_err').html(frontImageData);
//                                   $("#id_card_num_err").css({"display":"block"});
//                           }

//                             if(backImageCountryCityData){
//                                 triggerAlert(backImageCountryCityData, 'error');
//                                  $( '#id_card_num_err').html(backImageCountryCityData);
//                                   $("#id_card_num_err").css({"display":"block"});
//                           }

//                           setTimeout(function(){
//                               $('.loading').html('');
//                               $('#id_card_num_err').html('');
//                               $("#id_card_num_err").css({"display":"none"});
//                           }, 3000);
//                         }
//                     });
//                 }


//           });

//           $("#back_tenth").click(function(){
//              $("#upload_document").css({"display":"block"});
//              $("#selfie_div").css({"display":"none"});
//           });




//         function handleInput(e) {
//           var ss = e.target.selectionStart;
//           var se = e.target.selectionEnd;
//           e.target.value = e.target.value.toUpperCase();
//           e.target.selectionStart = ss;
//           e.target.selectionEnd = se;
//         }


//             $(document).ready(function(){
//                 // $("#Verification_process").css('display','block');
//               {{--  @if(Auth::user()->first_name!="" &&  Auth::user()->last_name!="" && Auth::user()->dob!="" && Auth::user()->country!="" && Auth::user()->residential_address!="" && Auth::user()->postal_code!="" && Auth::user()->city!="" && Auth::user()->pan_card!="") --}}
//                 @if(Auth::user()->first_name!="" && Auth::user()->dob!="" && Auth::user()->country!="" && Auth::user()->residential_address!="" && Auth::user()->postal_code!="" && Auth::user()->city!="" && Auth::user()->pan_card!="")
// 			        $("#Personal_Information").css({"display":"none"});
//                     $("#select_country").css({"display":"none"});
//                     $("#Identity_Verification").css({"display":"block"});
//                 @endif

//                 @if(Auth::user()->id_card_front_image!="" && Auth::user()->id_card_back_image!="" && Auth::user()->id_card_type!="")
// 			        $("#Identity_Verification").css({"display":"none"});
//                     $("#upload_document").css({"display":"none"});
//                     $("#selfie_div").css({"display":"block"});
//                 @endif

//             });



//          $('.inner').click(function() {
//                 $(this).siblings().removeClass("document_type_active");
//                 $(this).siblings().find(".document_type .document_type_inner_right").removeClass("document_type_active_icon");
//                 $(this).addClass('document_type_active')
//               $(this).find(".document_type .document_type_inner_right").addClass("document_type_active_icon");
//                 $(this).find(".document_type .document_type_active_icon").attr("src", "{{ asset('assets/img/auth-icons/check-mark-yellow.svg') }}");
//                 $(this).siblings().find(".document_type .document_type_inner_right").attr("src", "{{ asset('assets/img/auth-icons/check-mark-grey.svg') }}");




//     });



//             // 28-11-22-------------------delete capture document btn script---------------------------

//              $('#img_preview_back_delete').click(function() {
//                  $('#img_preview_back').css("display" , "none");
//                  $('#img_preview_back_delete').css("display" , "none");
//                  $('#btn_click_img_back').show();

//              });
//               $('#img_preview_front_delete').click(function() {
//                  $('#img_preview_front').css("display" , "none");
//                  $('#img_preview_front_delete').css("display" , "none");
//                  $('#btn_click_img_front').show();

//              });

//               $('#selfie_image_delete').click(function() {
//                  $('#selfie_image_preview').css("display" , "none");
//                  $('#selfie_image_delete').css("display" , "none");
//                  $('#btn_selfie_image').show();



//              });


//              $('.coin-swap-from').click(function(){
//                  $(this).toggleClass('open');
//                 $(this).siblings(".wm-dropdown-div").toggle();
//         });
//         function changeSrc2(id){
//                 const li = id;
//                 onChangeCallback(li) ;
//                 console.log(li);

//                     $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img").attr('src')) ;
//                     $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img2').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img-2").attr('src')) ;
//                     $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-txt').html($("#"+li+' '+ ".wm-dropdown-optn-item-txt").html()) ;
//                     $("#"+li).children('.wm-dropdown-optn-item-inner').addClass('selected');
//                     $("#"+li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass('selected');
//                     $(".wm-dropdown-div").hide();

//         };

//         $(function() {
//                 $("#earn-search-coin-filter .wm-dropdown-search-input").on("keyup", function() {
//                     var value = $(this).val().toLowerCase();
//                         $("#earn-search-coin-filter .wm-dropdown-div ul li").filter(function() {$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//                     });
//                 });
//             });

//             $('.wm-dropdown-search-cross-icn').on('click', function(e) {
//                 $('.wm-dropdown-search-input').val('');
//                 $('.wm-dropdown-div ul li').show();
//                 return false;
//             });



//   function loadFile() {
//       $('#UploadingImgstatus').html('');

//       $('#pan_card_img_err').html('');
//      $(".loadingPersonal").addClass('disablepointer');

//     $("#panPreview").parent().css({'display' : 'block'});
//     panPreview.src=URL.createObjectURL(event.target.files[0]);
//     console.log(event.target.files[0].size);
//      $(".loadingPersonal").removeClass('disablepointer');


// }



//      var sessionid = '<?php echo session_id() ; ?>';
//      var auth_chk = '<?php echo Auth::check() ; ?>';
//     // console.log(sessionid+'-'+auth_chk);
//   	function check_session_id()
//         	{

//         		fetch('{{ url( app()->getLocale()) }}/check_login').then(function(response){
//         			return response.json();
//         		}).then(function(responseData){
//         			if(responseData.output == 'logout')
//         			{
//         				window.location.href = '{{ url( app()->getLocale()) }}/user/logout';
//         			}
//         		}).catch(function(err) {
//                       console.log(err);
//                   });
//         	};

//     if(auth_chk == 1 || auth_chk === true)   {
//       setInterval(function(){
//         check_session_id();
// 	}, 10000);

//     }





// function getCityBypincode(){
//         $("#city").val('');
//         $("#city").css({ 'border' : '1px solid #f0b90b'});
//         $("#pin_code").css({ 'border' : '1px solid #f0b90b'});

//         if($('#pin_code').val().length == 6){

//         var pincode = $('#pin_code').val();
//                 $.ajax({
//                         type:'GET',
//                         url:"{{ url('getAddressDetailByPincode') }}",
//                         data:{ 'pincode': pincode},
//                         success:function(data,status){


//                             if(status=="success"){
//                              var json = JSON.parse(data);
//                                 if(json[0].Status == "Success"){
//                                       //    console.log(json[0].PostOffice[1].District);
//                                 //   $("#residential_address").text();
//                                     $("#city").css({ 'border' : '1px solid #f0b90b'});
//                                     $("#pin_code").css({ 'border' : '1px solid #f0b90b'});
//                                     $("#city").val(json[0].PostOffice[1].District);
//                                 }else{


//                                      $("#pin_code").css({ 'border' : '1px solid red'});
//                                      $("#city").val('');
//                                      $("#city").css({ 'border' : '1px solid red'});
//                                       triggerAlert('Invalid Pincode !', 'error');

//                                   };


//                             }else{
//                               triggerAlert(status, 'error');
//                             }


//                         },error: function(xhr, status, error) {
//                             var erroJson = JSON.parse(xhr.responseText);
//                             $('#phone_err').html(erroJson.error);
//                             $('#mobile').addClass('error_border');
//                         }
//                 });
//         }
// }

// $('#pin_code').on('input', function() {
//      var userCountry = $('input[name="country_name"] ').val();
//     if(userCountry == 'India' ){
//       getCityBypincode();
//     }

// });
// $('#city').on('input', function() {
//      var userCountry = $('input[name="country_name"] ').val();
//     if(userCountry == 'India' ){
//       getCityBypincode();
//     }
// });





// $("#rename_user").change(function() {
//     if(this.checked) {
//       $(".rename_user").children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
//     }
//   else
//     {
//         $(".rename_user").children().addClass('hide').removeClass('custom-modal-bck-bg');

//     }
// });
//  function backToPersonalInfo(){
//              $('#Identity_Verification').css({'display':'none'});
//              $('#Personal_Information').css({'display':'block'});
//         };
