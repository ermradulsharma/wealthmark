
<!--  edit indivisual form -->

@if($findpartnerIndi)

         @php

         $jocntry = json_decode(file_get_contents('http://country.io/names.json'));
        // print_r($jocntry);
        @endphp


<div class="modal custom_modal" id="editIndi_Add-Director" style="display: block;">

         <div class="modal-sandbox"></div>
         <div class="modal-box" style="max-width:850px;">
            <div class="modal-header">
               <div class="modal-icons">
                  <span class="btn-back" id="back_start">
                  <i class="bi bi-arrow-left"></i>
                  </span>
                  <span class="close-modal editcloseModal">
                  <i class="bi bi-x"></i>
                  </span>
               </div>
               <div class="modal_heading">Add Director(s) or Equivalent Persons </div>

            </div>
            <div class="modal-body text-start ">
               <div class="main-heading">Edit/Update Individual</div>


               <div class="mb-5 msgValidErrIndisul"> </div>
               <form action="#" id="edit_directorForm" style="width: 100%;" enctype="multipart/form-data">
                   @csrf

                  <div class="form-inner Individual scrollbar-style">
                       <input type="text" hidden="" name="pdId" id="edit_pId" value="{{ $findpartnerIndi->id }}" class="form-control " placeholder="">
                     <input type="text" hidden="" name="partnerId" id="edit_partnerId" value="{{ $findpartnerIndi->partnerId }}" class="form-control " placeholder="">
                     <input type="text" hidden="" id="edit_directoTypeIndi" name="directoTypeIndi" value="{{ $findpartnerIndi->partnerType}}" class="form-control " placeholder="">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column3">
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" id="edit_firstName" name="firstName" value="{{ $findpartnerIndi->firstName }}" placeholder="demo">
                              <label>First Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" id="edit_MidName" name="MidName" value="{{ $findpartnerIndi->MidName }}" placeholder="demo">
                              <label>Middle Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" id="edit_lastName" name="lastName" value="{{ $findpartnerIndi->lastName }}" placeholder="demo">
                              <label>Last Name</label>
                           </div>
                        </div>
                        <div class="">
                           <div class="input-group date" id="datepickerind">

                                <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" id="edit_indidate" name="indidob" value="{{ $findpartnerIndi->dob }}" placeholder="Enter your DOB">
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="d-flex justify-content-between">
                              <label class="label-text">Jurisdiction</label>
                              <div class="multiple-text d-flex align-items-center">

                                 <input type="checkbox" id="multipleCitizenship" checked class="multipleCitizenship radio-btns"> Multiple Citizenship
                              </div>
                           </div>

                           <div class="mt-1">
                              <select id="edit_jurisCountry"  name="jurisCountry[]" data-flag="true" data-live-search="true"   multiple>

                                     @php
                                        $eachcntry = explode(',' , $findpartnerIndi->jurisCountry);
                                     @endphp

                                     @foreach($jocntry as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             <option value="{{ $key }}"  {{ in_array( $key , $eachcntry) ? "selected" : "" }}>
                                                      <span> {{ $value }}</span>
                                             </option>
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                     @endforeach




                              </select>
                           </div>


                        </div>
                        <div class="mt-3">
                           <label class="label-text bg-whitesmoke p-1 text-center">Residential Address</label>

                           <div class="row">
                               <div class="col-md-12 col-sm-12">
                                   <label class="mb-1">Country of Residence</label>
                                    <select id="edit_countryResidence" class="w-100" name="countryResidence" data-flag="true" data-live-search="true">
                                       @foreach($jocntry as $key => $value)
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                       <option value="{{ $key }}"     {{ $key == $findpartnerIndi->countryResidence ? "selected"  : "" }} >
                                       <span> {{ $value }}</span>
                                       </option>
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                       @endforeach
                                       </select>
                               </div>

                           </div>





                        </div>
                        <div class="mt-3">
                           <label class="label-text bg-whitesmoke p-1 text-center">Upload Identification Documents</label>
                           <div class="form group mt-3">
                              <label class="label-text">Country/Region of Issue</label>

                           </div>
                           <div class="mt-1">
                               <select id="edit_Region_of_Issue" class="w-100" name="Region_of_Issue"  data-live-search="true" data-flag="true" >

                                 @foreach($jocntry as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                          <option value="{{ $key }}" {{ ($key == $findpartnerIndi->idDocIssuedCountry) ? "selected" : "" }} >
                                          <span> {{ $value }}</span>
                                          </option>
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                    @endforeach

                            </select>

                           </div>

                        </div>
                        <div class="mt-3">
                           <label class="label-text">Select Document Type</label>
                           <div class="form-group d-flex doc-type mt-2">
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="edit_idDocTypePS" name="edit_idDocType" value="10" {{ ($findpartnerIndi->idDocType == 10) ? "checked" : "" }} class="radio-btns"> Passport
                              </div>

                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="edit_idDocTypeID" name="edit_idDocType" value="9" {{ ($findpartnerIndi->idDocType == 9) ? "checked" : "" }} class="radio-btns"> Id Card
                              </div>
                           </div>
                        </div>
                        <div class="form group mt-3">
                           <label class="label-text">Identification Number</label>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" id="edit_idDocNum" value="{{ $findpartnerIndi->idDocNum }}" name="idDocNum" placeholder="demo">
                              <label>Identification Number</label>
                           </div>
                        </div>
                        <div class="doc-instractions">
                           <label class="label-text">Upload Document Photos</label>
                           <ul class="instractions">
                              <li>Upload in the natural colorful forms instead of a scan/edited copy</li>
                              <li>Please make sure you taken all 4 corners of the document</li>
                              <li>Please make sure your ID document is valid and not expired</li>
                           </ul>
                        </div>
                        <div class="upl-doc">
                           <div class="upl-doc-inner">
                              <div class="inner-doc">
                                 <div class="upld-main">
                                    <div class="upld-text">Click or drag and drop to attach ID front</div>
                                    <div class="icon-div">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                                       </svg>
                                       <div class="attach">Change Image</div>
                                    </div>
                                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                                 </div>
                              </div>
                              <input id="edit_idDocUploadedFront" name="edit_idDocUploadedFront" value="{{ $findpartnerIndi->idDocUploadedFront }}" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                            </div>

                           <div class="upl-doc-inner">
                              <div class="inner-doc">
                                 <div class="upld-main">
                                    <div class="upld-text">Click or drag and drop to attach ID back</div>
                                    <div class="icon-div">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-upl">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                                       </svg>
                                       <div class="attach">Change Image</div>
                                    </div>
                                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                                 </div>
                              </div>
                              <input id="edit_idDocUploadedBack" name="edit_idDocUploadedBack" value="{{ $findpartnerIndi->idDocUploadedBack }}" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                           </div>

                        </div>
                        <div class="upl-doc">
                             <div class="upl-doc-inner preview-frontDocIndi">
                                <img width="100%" class="thumbnails" src="{{ url('storage/app/'.$findpartnerIndi->idDocUploadedFront) }}" alt="" title="" />
                            </div>
                             <div class="upl-doc-inner preview-backDocIndi">
                               <img width="100%" class="thumbnails" src="{{ url('storage/app/'.$findpartnerIndi->idDocUploadedBack) }}" alt="" title="" />
                            </div>
                        </div>
                     </div>
                  </div>



               </form>
            </div>
            <div class="modal-footer mt-5">
               <div class="footer-div-btn">
                  <button class="modal_btn_theme" id="updateDirectorFormSubmit">Update</button>
                  <button class="btn bg-whitesmoke" id="editDirectorFormCancel">Cancel </button>
               </div>
            </div>

         </div>
</div>
@endif



 <script>
// regarding country selection
$('select').selectpicker();

    //     $('.selectpicker').change(function () {
    // var selectedItem = $('.selectpicker1').val();
    // var selectedItem2 = $('.selectpicker2').val();
    // // alert(selectedItem);
    // //  alert(selectedItem2);
    // if(selectedItem !="" && selectedItem2 !=""){
    // $("#select_farm").removeClass("inactive");
    // });




// to close edit indivisual form

  $(".editcloseModal, #editDirectorFormCancel").click(function(){
           $("#editIndi_Add-Director").css({"display":"none"});
 });

  $("#updateDirectorFormSubmit").click(function(){




   const pId = $("#edit_pId").val();
   const partnerId = $("#edit_partnerId").val();
   const directoTypeIndi = $("#edit_directoTypeIndi").val();

   const firstName = $("#edit_firstName").val();
   const MidName = $("#edit_MidName").val();
   const lastName = $("#edit_lastName").val();

   const indidate = $("#edit_indidate").val();

   const jurisCountry = $("#edit_jurisCountry").val();
   const countryResidence = $("#edit_countryResidence").val();
   const Region_of_Issue = $("#edit_Region_of_Issue").val();

   const idDocType = $("input[name='edit_idDocType']:checked").val();
   const idDocNum = $("#edit_idDocNum").val();

   //const idDocUploadedFront = $("#edit_idDocUploadedFront").val();
    // const idDocUploadedBack = $("#edit_idDocUploadedBack").val();

   const idDocUploadedBack = $("#edit_idDocUploadedBack").attr('value');
   const idDocUploadedFront = $("#edit_idDocUploadedFront").attr('value');

      // alert("to submit indivisual form");

   //  alert(pId+"/"+partnerId+"/"+directoTypeIndi+"/"+firstName+"/"+MidName+"/"+lastName+"/"+indidate+"/"+jurisCountry+"/"+countryResidence+"/"+Region_of_Issue+"/"+idDocType+"/"+idDocNum+"/"+idDocUploadedFront+"/"+idDocUploadedBack);


        var form_Data = new FormData( $('#edit_directorForm')[0]);
     // var form_data = new FormData(document.getElementById("editIndi_Add-Director"));

                    //   form_Data.append('user_id' , user_id);
                    //   form_Data.append('status' , indivisualSubmitStatus);
                    //   form_Data.append('partnerType' , partnerType);
                    //   form_Data.append('dob' , date);

                      form_Data.append('idDocUploadedFront_old' , idDocUploadedFront);
                      form_Data.append('idDocUploadedBack_old' , idDocUploadedBack);


                            if((firstName.length< 1) || (lastName.length< 1) || (indidate.length< 1) || (document.getElementById('edit_jurisCountry').selectedIndex < 0) || (document.getElementById('edit_countryResidence').selectedIndex < 0) || (document.getElementById('edit_Region_of_Issue').selectedIndex < 0 )  || idDocType.length< 1 || idDocNum.length< 1 || idDocUploadedFront.length< 1 || idDocUploadedBack.length< 1  ){

                                 $("#editIndi_Add-Director .msgValidErrIndisul").html('<span style="color:red"> All fields are mandatory! </span>');
                                 setTimeout(function () {
                                                         $("#editIndi_Add-Director .msgValidErrIndisul").html('');
                                                     }, 1000);
                           }else{
                                //  alert("Fields are validaed!");


                                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/UpdateGeneralPartner')}}',
                                                         url: "<?php echo url('api/UpdateGeneralPartner');  ?>",
                                                          processData: false,
                                                          contentType: false,
                                                         enctype : 'multipart/form-data',

                                                          data : form_Data,

                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');

                                                              if(data.success == 200){

                                                                 // alert(data.indivisualPartnrType+data.indivisualPartnrId+data.indivisualPartnrfirstName+data.indivisualPartnrLastname+data.message);

                                                                    // setTimeout(function () {
                                                                    //              $('#directorForm').load('#directorForm');
                                                                    //          }, 1000);
                                                                    document.querySelector('[data-modal="added_user_modal_'+pId+'"]').previousElementSibling.innerHTML = data.name;
                                                                     $("#editIndi_Add-Director").css({"display":"none"});

                                                                  //  $("#Add-Director").hide();
                                                                    //$(".addDirBtnDiv").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'   data-modal='delete_box_modal_"+data.indivisualPartnrId+"' id='"+data.indivisualPartnrId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.indivisualPartnrfirstName+" "+data.indivisualPartnrLastname+"</div> <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editCompORDirtr("+data.indivisualPartnrId+", "+data.indivisualPartnrType+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+data.indivisualPartnrId+"' id='"+data.indivisualPartnrId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box' style='max-width:350px;'> <div class='text-center p-3'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmDelete("+data.indivisualPartnrId+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+data.indivisualPartnrId+");'>Cancel </button></div></div></div></div>");

                                                              }else{
                                                                    return "Indivisual details couldn't be edited!";
                                                              }

                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);
                                                         }

                                     				});

                                     // $(that).parent().parent().parent().parent().hide();


                             }

 });

       $(function(){
                                     $('.datepicker').datepicker( {
                                          autoclose: true,
                                            //  dateFormat: 'yy-mm-dd'

                                         });
                                     });

</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
       <script src="{{ asset('assets/js/bootstrap-select-country.min.js') }}"></script>
<!--  edit entity form -->



