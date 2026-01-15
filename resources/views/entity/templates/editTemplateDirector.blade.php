
<!--  edit Entity Director form -->

@if($findpartnerComp && $findCompDirector)

         @php

         $jocntry = json_decode(file_get_contents('http://country.io/names.json'));
        // print_r($jocntry);
        @endphp




 <div class="modal custom_modal" id="editEntityAdd-Director" style="display:block;">

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


               <div class="mb-5 msgValidErrCompany"> </div>
               <form action="#" id="edit_directorForm" style="width: 100%;" enctype="multipart/form-data">

                  <div>
                      <input type="hidden" name="_token" id="edit_Entitytoken" value="{{ csrf_token() }}">
                     <input type="text" hidden name="edit_compID" id="edit_compID" value="{{$findpartnerComp->id}}" class="compID">
                     <!--<input type="text" hidden name="edit_compName" id="edit_compName" value="{{$findpartnerComp->companyName}}" class="compName">-->
                  </div>
                  <!--- entity form section-->
                  <div class="msgErrmsg">

                  </div>
                  <div class="form-inner Entity scrollbar-style" style="display:block">
                        <input type="text" hidden name="edit_partnerId" id="edit_partnerId" value="{{$findpartnerComp->partnerId}}" class="form-control " placeholder="">
                     <input type="text" hidden name="edit_dirTypeEntity" id="edit_dirTypeEntity" value="{{$findpartnerComp->partnerType}}" class="form-control searchinput" placeholder="demo">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column2">
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" name="edit_companyName" id="edit_companyName" value="{{$findpartnerComp->companyName}}"  placeholder="demo">
                              <label>Company Name</label>
                              <span class="comperror"> </span>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" name="edit_companyRegNum" id="edit_companyRegNum" value="{{$findpartnerComp->companyRegNum }}" placeholder="demo">
                              <label>Company Registered Number</label>
                              <span class="compRegerror"> </span>
                           </div>
                        </div>
                        <label class="label-text">Please fill in the Entity Name and Registration Number exactly as they appear on the Certificate of Incorporation.</label>
                        <div class="mt-3">
                           <div class="d-flex justify-content-between">
                              <!--  <input type="text" class="form-control"  placeholder="demo">-->
                              <label class="label-text">Country of Incorporation</label>
                           </div>
                           <div class="mt-1">
                              <select  name="edit_countryIncorp" id="edit_countryIncorp" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true">

                                  @foreach($jocntry as $key => $value)
                                          <img src="https://countryflagsapi.com/png/{{ $key }}" >
                                          <option value="{{ $key }}" {{ ($key == $findpartnerComp->countryIncorp) ? "selected" : "" }} >
                                          <span> {{ $value }}</span>
                                          </option>
                                          <img src="https://countryflagsapi.com/png/{{ $key }}" >
                                    @endforeach


                              </select>


                           </div>
                           <span class="compIncopCntry"> </span>
                        </div>

                        <div class="mt-3">
                           <label class="label-text">Director(s) or Equivalent Persons</label>
                           <label class="label-text">At least 1 record must be added. You can add up to 10.</label>
                           <div class="upld-btn-div-outer">


                               <!-- append all directors of company -->
                            @if($findCompDirector)

                              @foreach($findCompDirector as $CompDirector)
                             <div class='add-detail-inner-box'>
                                 <div class='added_user'>
                                     <div class='added_user-inner'>
                                         <div class='delete-btn-div'>
                                             <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'  data-modal='delete_box_modal_extr_{{ $CompDirector->id}}' id='{{ $CompDirector->id}}' onClick='deleteDirtorBlock(this)'  >
                                             <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path>
                                             </svg>
                                             </div>
                                             <div class='added_user-icon-div'>
                                                 <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' fill='none' class='added_user-icon'>
                                                     <path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path>
                                                     <path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path>
                                                     <defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'>
                                                     <stop stop-color='#929AA5'></stop>
                                                     <stop offset='1' stop-color='#76808F'> </stop>
                                                     </linearGradient>
                                                     <linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop>  <stop offset='1' stop-color='#76808F'></stop>
                                                     </linearGradient>
                                                     </defs>
                                                 </svg>
                                             <div  class='user_des-div'>
                                                <div  class='user_detail'>{{ $CompDirector->firstName." ".$CompDirector->lastName}}</div>
                             <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editSingleDirector({{ $CompDirector->id}}, {{ $CompDirector->partnerType }})' data-modal='added_user_modal_{{ $CompDirector->id }}'>
                                 <path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path>
                             </svg>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 <div class='modal custom_modal' id='delete_box_modal_extr_{{ $CompDirector->id}}' id='{{ $CompDirector->id}}' onClick='deleteDirtorBlock(this)' >
                                     <div class='modal-sandbox'></div>
                                     <div class='modal-box' style='max-width:350px;'>
                                     <div class='text-center p-3'>
                                         <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' fill='none' class='warning-icon'>
                                             <path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path>
                                             <path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path>
                                             <path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path>
                                             <defs>
                                                 <linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop>
                                                 <stop offset='1' stop-color='#F0B90B'></stop>
                                                 </linearGradient>
                                                 <linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'>
                                                     <stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop>
                                                     </linearGradient>
                                                     </defs>
                                          </svg>
                                          <p>Are you sure you want to delete this people?</p>
                                          </div>
                                          <div class='d-flex justify-content-between p-4 delete-modal-btn'>
                                              <button type='button' class='modal_btn_theme' onClick='confirmDeleteExt({{ $CompDirector->id}})' >Delete</button>
                                              <button type='button' class='btn bg-whitesmoke' onClick='cancelDeleteExt({{ $CompDirector->id}})'>Cancel </button>
                                              </div>
                                              </div>
                                              </div>
                                              </div>


                              @endforeach
                             @endif
                               <!-- --->


                              <div class="upld-btn-div-inner modal-trigger extraAddDirtor"  data-modal="Entity-Add-Director_100" style="background-color:#ffff !important">
                                 <div class="upld-btn-div" style="display:none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-btn-icon">
                                       <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                    </svg>
                                    <div class="upld-btn-text">Add</div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <!--- ends entity form section-->
               </form>
            </div>
            <div class="modal-footer mt-5">
               <div class="footer-div-btn">
                  <button class="modal_btn_theme" id="update_compAnddirectorForm">Update</button>
                  <button class="btn bg-whitesmoke" id="edit_directorFormCancel">Cancel </button>
               </div>
            </div>
            <!-- extra derector's entity inner model form  --->
            <div class="modal custom_modal "  id="edit_Entity-Add-Director_100">
               <div class="modal-box" style="top:10px">
                  <div class="modal-header">
                     <div class="modal-icons">
                        <span class="btn-back" id="back_start">
                        <i class="bi bi-arrow-left"></i>
                        </span>
                        <span class="close-Entity-Add-Director">
                        <i class="bi bi-x"></i>
                        </span>
                     </div>
                     <div class="modal_heading">Add Director(s) or Equivalent Persons </div>
                  </div>
                  <div class="allValidationExtraDir"></div>
                  <div class="modal-body text-start">
                     <form action="#" id="edit_extradirectorEntityForm" style="width: 100%;" enctype="multipart/form-data">
                        <div class="form-inner Individual-pop scrollbar-style">
                           <div class="d-column">
                              <label class="label-text">Basic Information</label>
                              <div class="column3">
                                 <input type="hidden" name="_tokenextDirEdit" id="edit_extDirtoken" value="{{ csrf_token() }}">
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text" id="edit_extDirFirstName" name="edit_extDirFirstName" value=""  class="form-control searchinput" placeholder="demo">
                                    <label>First Name</label>
                                 </div>
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text"  id="edit_extDirMidName" name="edit_extDirMidName" value="" class="form-control searchinput" placeholder="demo">
                                    <label>Middle Name</label>
                                 </div>
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text"  id="edit_etxDirLastName" name="edit_etxDirLastName" value=""  class="form-control searchinput" placeholder="demo">
                                    <label>Last Name</label>
                                 </div>
                              </div>
                              <div class="">
                                 <div class="input-group date" id="datepickerEnt">
                                    <!--<input type="date" class="form-control"  id="extrdate"  value="" name="extrdate" placeholder="Enter your DOB" />-->
                                    <!--    <span class="input-group-append">-->
                                    <!--            <span class="input-group-text bg-light">-->
                                    <!--            <i class="bi bi-calendar-fill"></i>-->
                                    <!--            </span>-->
                                    <!--    </span> -->
                                     <input type="date" class="form-control"  id="edit_extrdate"  name="edit_extrdate" placeholder="Enter your DOB" />
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <div class="d-flex justify-content-between">
                                    <label class="label-text">Jurisdiction</label>
                                    <div class="multiple-text d-flex align-items-center">
                                       <input type="checkbox" type="checkbox" id="edit_multipleCitizenship" class="radio-btns"> Multiple Citizenship
                                    </div>
                                 </div>
                                 <div class="mt-1">
                                    <select id="edit_extrJurisCountry" name="edit_extrJurisCountry" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <label class="label-text">Basic Information</label>
                                 <div class="form-floating mb-3 clearable-input">
                                    <!--<input type="text" class="form-control searchinput" id="extrCountryResidence"  placeholder="demo">-->
                                    <label>Country of Residence</label>
                                    <select id="edit_extrCountryResidence" class="selectpicker countrypicker form-control" name="edit_extrCountryResidence"  data-live-search="true" data-flag="true" ></select>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <label class="label-text">Upload Identification Documents</label>
                                 <div class="form group mt-3">
                                    <label class="label-text">Country/Region of Issue</label>
                                    <select class="selectpicker countrypicker form-control" id="edit_extridDocIssuedCountry" name="edit_extridDocIssuedCountry"  data-live-search="true" data-flag="true" ></select>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <label class="label-text">Select Document Type</label>
                                 <div class="form-group d-flex doc-type mt-2">
                                    <div class="passport d-flex align-items-center">
                                       <input type="radio" id="edit_extIdDocTypePS" name="edit_extIdDocType" value="10" checked class="radio-btns"> Passport
                                    </div>
                                    <!--<div class="aadhar d-flex align-items-center">
                                       <input type="radio" id="extIdDocTypeAA" name="extIdDocType" value="" class="radio-btns"> Aadhar Card
                                       </div>-->
                                    <div class="passport d-flex align-items-center">
                                       <input type="radio" id="edit_extIdDocTypeID" name="edit_extIdDocType" value="9" class="radio-btns"> Id Card
                                    </div>
                                 </div>
                              </div>
                              <div class="form group mt-3">
                                 <label class="label-text">Identification Number</label>
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text" class="form-control searchinput" id="edit_extridDocNum" name="edit_extridDocNum" value="" placeholder="demo">
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
                                    <input name="edit_extrIdDocUploadedFront" id="edit_extrIdDocUploadedFront" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf"  style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
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
                                    <input name="edit_extrIdDocUploadedBack" id="edit_extrIdDocUploadedBack" value=""  type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer mt-5">
                     <div class="footer-div-btn">
                        <button class="modal_btn_theme" onclick="update_extradirectorSubmit(this)">Update</button>
                        <button class="btn bg-whitesmoke close-Entity-Add-Director" onclick="edit_extradirectorCancel(this)">Cancel </button>
                     </div>
                  </div>
                  <!-- ends extra derector's entity inner model form  --->
                  <!-- end entity director inner form model form --->
               </div>
            </div>
         </div>
      </div>

      <div class="singleditpopup"></div>

@endif

<script>
     $(".editcloseModal, #edit_directorFormCancel").click(function(){
           $("#editEntityAdd-Director").css({"display":"none"});
 });




    $("#update_compAnddirectorForm").click(function(){

        const pId = $("#edit_compID").val();
      const partnerId = $("#edit_partnerId").val();
      const dirTypeEntity = $("#edit_dirTypeEntity").val();

      const companyName = $("#edit_companyName").val();
      const companyRegNum = $("#edit_companyRegNum").val();

     const countryIncorp = $("#edit_countryIncorp").val();

    // alert(pId+"/"+partnerId+"/"+dirTypeEntity+"/"+companyName+"/"+companyRegNum+"/"+countryIncorp);

      var formComData = new FormData( $('#edit_directorForm')[0]);




                            if((companyName.length< 1) || (companyRegNum.length< 1) || (document.getElementById('edit_countryIncorp').selectedIndex < 0) ){

                                 $("#editEntityAdd-Director .msgValidErrCompany").html('<span style="color:red"> All fields are mandatory! </span>');
                                 setTimeout(function () {
                                                         $("#editEntityAdd-Director .msgValidErrCompany").html('');
                                                     }, 1000);
                           }else{


                                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/UpdateGeneralPartner')}}',
                                                         url: "<?php echo url('api/UpdateCompany');  ?>",

                                                         enctype : 'multipart/form-data',
                                                         processData: false,
                                                         contentType: false,
                                                         data : formComData,

                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully updated Company detail.', 'success');

                                                              if(data){

                                                                //  alert(data.indivisualPartnrType+data.indivisualPartnrId+data.indivisualPartnrfirstName+data.indivisualPartnrLastname+data.message);

                                                                      $("#editEntityAdd-Director").css({"display":"none"});
                                                                      document.querySelector('[data-modal="added_user_modal_'+pId+'"]').previousElementSibling.innerHTML = data.companyName;


                                                              }else{
                                                                    return "Company details couldn't be added!";
                                                              }


                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);

                                                              var companyName_error = erroJson.error.edit_companyName;
                                                                var companyRegNum_error = erroJson.error.edit_companyRegNum;
                                                                var countryIncorp_error = erroJson.error.edit_countryIncorp;

                                                                if(companyName_error){
                                                                      $('#editEntityAdd-Director .msgValidErrCompany').html('Company name is required and should be less than 199 characters!');
                                                                      $('#editEntityAdd-Director .msgValidErrCompany').addClass('alert alert-danger');
                                                                       }

                                                                if(companyRegNum_error){
                                                                     $('#editEntityAdd-Director .msgValidErrCompany').html('Company Registration No. is required and should be less than 199 characters!');
                                                                      $('#editEntityAdd-Director .msgValidErrCompany').addClass('alert alert-danger');
                                                                     }

                                                                if(countryIncorp_error){
                                                                  $('#editEntityAdd-Director .msgValidErrCompany').html('Please select country!');
                                                                 $('#editEntityAdd-Director .msgValidErrCompany').addClass('alert alert-danger');
                                                                     }

                                                                setTimeout(function(){
                                                                $('#editEntityAdd-Director .msgValidErrCompany ').html("");
                                                                $('#editEntityAdd-Director .msgValidErrCompany ').removeClass('alert alert-danger'); }, 4000);

                                                            }

                                     				});
                             }
             });

</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
       <script src="{{ asset('assets/js/bootstrap-select-country.min.js') }}"></script>
