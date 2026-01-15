@if($findAccountTrader)

         @php 
        
         $jocntry = json_decode(file_get_contents('http://country.io/names.json'));
        // print_r($jocntry);
        @endphp
         
 
 <div class="modal custom_modal" id="edit_Add_Authorised_Account" style="display:block;">
         <div class="modal-sandbox"></div>
         <div class="modal-box" style="max-width:850px;">
            <div class="modal-header">
               <div class="modal-icons">
                  <span class="btn-back" id="back_start">
                  <i class="bi bi-arrow-left"></i>
                  </span>
                  <span class="close-modal">
                  <i class="bi bi-x"></i>
                  </span>
               </div>
                <div class="modal_heading">Edit Account Trader</div>
            </div>
            
            <div class="modal-body text-start">
                <div class="msgValidErrIndisul"></div>
               <form action="#" style="width: 100%;" enctype="multipart/form-data" id="edit_accountTrader">
                      @csrf
                      <div>
                     <input type="text" hidden="" name="user_id" id="edit_accountTrader_user_id" value="{{$findAccountTrader->id }}" class="form-control " placeholder="">
                     <input type="text" hidden="" name="partnerId" id="edit_accountTrader_partnerId" value="{{$findAccountTrader->partnerId }}" class="form-control " placeholder="">
                     <input type="text" hidden="" name="status" id="edit_accountTrader_status" value="{{$findAccountTrader->status }}" class="form-control " placeholder="">
                  
                          
                      </div>
                  
                  <div class="form-inner scrollbar-style">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column3">
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" id="edit_accountTrader_fname" name="accountTrader_fname" value="{{$findAccountTrader->firstName}}" class="form-control searchinput" placeholder="demo">
                              <label>First Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" id="edit_accountTrader_midName" name="accountTrader_midName" value="{{$findAccountTrader->MidName }}" class="form-control searchinput" placeholder="demo">
                              <label>Middle Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" id="edit_accountTrader_lastName" name="accountTrader_lastName" value="{{$findAccountTrader->lastName }}" class="form-control searchinput" placeholder="demo">
                              <label>Last Name</label>
                           </div>
                        </div>
                        <div class="">
                           <div class="input-group date">
                              <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" name="accountTrader_dob" id="edit_accountTrader_dob" value="{{$findAccountTrader->dob }}" placeholder="Enter Date" />
                              <span class="input-group-append">
                              <span class="input-group-text bg-light">
                              <i class="bi bi-calendar-fill"></i>
                              </span>
                              </span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="d-flex justify-content-between">
                              <label class="label-text">Jurisdiction</label>
                              <div class="multiple-text d-flex align-items-center">
                                 <input type="checkbox" type="checkbox" id="edit_accountTraderMultipleCitizenship" class="radio-btns"> Multiple Citizenship
                              </div>
                           </div>
                           <div class="mt-1">
                              <select id="edit_accountTrader_Jurisdiction_country" name="edit_accountTrader_Jurisdiction_country[]" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple>
                                  
                                   @php    
                                        $eachcntryaccountTrader = explode(',' , $findAccountTrader->jurisCountry);    
                                     @endphp
                                     
                                     @foreach($jocntry as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             <option value="{{ $key }}"  {{ in_array( $key , $eachcntryaccountTrader) ? "selected" : "" }}> 
                                                      <span> {{ $value }}</span>     
                                             </option>
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                     @endforeach
                                  
                              </select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Country of Residence</label>
                           <div class="mb-3">
                             
                               <select id="edit_accountTrader_residence_country"  name="edit_accountTrader_residence_country" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" >
                                @php    
                                        $resigcntryaccountTrader = explode(',' , $findAccountTrader->countryResidence);    
                                     @endphp
                                     
                                     @foreach($jocntry as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             <option value="{{ $key }}"  {{ in_array( $key , $resigcntryaccountTrader) ? "selected" : "" }}> 
                                                      <span> {{ $value }}</span>     
                                             </option>
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                     @endforeach
                               </select>
                              
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text" style="font-size: 18px !important; color: black !important;">Upload Identification Documents</label>
                           <div class="form group mt-3">
                              <label class="label-text mb-2">Country/Region of Issue</label>
                              <select  id="edit_accountTrader_docIssueRegion" name="edit_accountTrader_docIssueRegion" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" >
                                 @php    
                                        $issuedcntryaccountTrader = explode(',' , $findAccountTrader->idDocIssuedCountry);    
                                     @endphp
                                     
                                     @foreach($jocntry as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             <option value="{{ $key }}"  {{ in_array( $key , $issuedcntryaccountTrader) ? "selected" : "" }}> 
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
                                 <input type="radio" id="edit_accountTrader_passport" name="accountTrader_idDocType" value="10" class="radio-btns" {{ $findAccountTrader->idDocType == '10' ? 'checked'  : ''  }} > Passport
                              </div>
                              <div class="aadhar d-flex align-items-center">
                                 <input type="radio" id="edit_accountTrader_aadhar" name="accountTrader_idDocType" value="13" class="radio-btns" {{ $findAccountTrader->idDocType == '13' ? 'checked'  : ''  }} > Aadhar Card
                              </div>
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="edit_accountTrader_IdCard" name="accountTrader_idDocType" value="9" class="radio-btns" {{ $findAccountTrader->idDocType == '9' ? 'checked'  : ''  }} > Id Card
                              </div>
                           </div>
                        </div>
                        <div class="form group mt-3">
                           <label class="label-text">Identification Number</label>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text"  id="edit_accountTrader_IdNum" name="accountTrader_IdNum" class="form-control searchinput" value="{{$findAccountTrader->idDocNum }}" placeholder="demo">
                              <label>Identification Number</label>
                           </div>
                        </div>
                        <div class="doc-instractions">
                           <label class="label-text" style="font-size: 18px !important; color: black !important;">Upload Document Photos</label> 
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
                              <input   id="edit_accountTraderId_frontCopy" name="accountTraderId_frontCopy" type="file" value="{{$findAccountTrader->idDocUploadedFront }}" accept="image/jpg,image/jpeg,image/png,application/pdf" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
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
                              <input  type="file" id="edit_accountTraderId_BackCopy" name="accountTraderId_BackCopy" value="{{$findAccountTrader->idDocUploadedBack }}" accept="image/jpg,image/jpeg,image/png,application/pdf"  style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                           </div>
                        </div>
                        <div class="upl-doc">
                             <div class="upl-doc-inner preview-frontDocIndi">
                                <img width="100%"  class="thumbnails" src="{{ url('storage/app/'.$findAccountTrader->idDocUploadedFront) }}" alt="" title="" />
                            </div>
                             <div class="upl-doc-inner preview-backDocIndi">
                               <img width="100%" class="thumbnails" src="{{ url('storage/app/'.$findAccountTrader->idDocUploadedBack) }}" alt="" title="" />
                            </div>
                        </div>    
                        <div class="Proof-of-address mt-3 mb-3">
                           <label class="label-text">Proof of address</label>
                           <ul class="instractions">
                              <li>Ensure the PoA documents were issued in the last <span class="text-danger">90</span> days.</li>
                              <li>Ensure <span class="text-danger"> full role's name</span> and <span class="text-danger"> full address</span> are reflected on the document.</li>
                              <li>We only support a <span class="text-danger"> limited number of document types </span>. Unsupported documents will be rejected.</li>
                              <li><b>Bank statements (with transactions history).</b> We accept digital bank statements too but please send us the original .pdf file. Please note that sensitive information, such as transaction details, can be covered.</li>
                              <li><b> Utility bills</b>, such as electricity, water, fixed internet, or phone bills (please note that we do not accept mobile phone bills and insurance letters), waste management, etc.</li>
                              <li><b>Government documents,</b> such as letters from government agencies, tax bills, etc.</li>
                           </ul>
                        </div>
                        <div class="upld-btn-div">
                           <div class="upld-btn-outer">
                              <div class="upld-btn-inner">
                                 <button  type="button" class="generate-btn">
                                    <input type="file" id="edit_accountTrader_addressproof" value="{{ $findAccountTrader->addDocAttachFront }}" name="accountTrader_addressproof" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="upld-icon">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M3.224 6V3h8.5v3h-5.5v12h5.5v3h-8.5V6zm5.368 7.5v-3h6.587V5.984L21.21 12l-6.03 5.98V13.5H8.592z" fill="currentColor"></path>
                                    </svg>
                                    Upload Another
                                 </button>
                              </div>
                           </div>
                        </div>
                         <div class="upld-btn-div">
                           <div class="upld-btn-outer">
                              <div class="upld-btn-inner">
                             <img width="100%" class="thumbnails" src="{{ url('storage/app/'.$findAccountTrader->addDocAttachFront) }}" alt="" title="" />
                              </div>
                           </div>
                            <div class="upld-btn-outer">
                              <div class="upld-btn-inner">
                            <!-- <img width="100%" class="thumbnails" src="{{ url('storage/app/'.$findAccountTrader->addDocAttachBack) }}" alt="" title="" />-->
                              </div>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Confirm Address Document</label>
                           <label class="label-text"> Fill in details of the document that you have just uploaded</label>
                           <label class="label-text"> Select Document Type</label>
                           <div class="row">
                              <div class="col-md-6 col-sm-6 mb-3">
                                 <select class="form-control" id="edit_accountTraderDoc_type" name="accountTraderDoc_type">
                                    <option value="11" {{ $findAccountTrader->addressProofType == '11' ? 'selected'  : ''  }} >Utility Bills</option>
                                    <option value="12" {{ $findAccountTrader->addressProofType == '12' ? 'selected'  : ''  }} >Bank Statement</option>
                                    <!--<option value=""  >Government</option>-->
                                    <!--<option value="" selected >Other</option>-->-->
                                 </select>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="input-group date">
                                    <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" name="accountTraderaddProofIssuedate" value="{{$findAccountTrader->addDocIssuedDate }}" id="edit_accountTraderaddProofIssuedate" placeholder="Issue Date or Last Date of Billing Period" />
                                    <span class="input-group-append">
                                    <span class="input-group-text bg-light">
                                    <i class="bi bi-calendar-fill"></i>
                                    </span>
                                    </span>
                                 </div>
                              </div>
                            
                              <div class="col-md-12 mt-2 mb-2 text-center">
                                 <label class="label-text mb-0">
                                 Address reflected in the above document
                                 </label>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="mb-3">
                                     <label class="mb-2">Country/Region of Issue</label>
                             
                                     <select  id="edit_accountTrader_addProof_country" name="accountTrader_addProof_country" value="{{$findAccountTrader->addDocCountry }}" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" > 
                                     @php    
                                        $addProofissuedcntryaccountTrader = explode(',' , $findAccountTrader->addDocCountry);    
                                     @endphp
                                     
                                     @foreach($jocntry as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             <option value="{{ $key }}"  {{ in_array( $key , $addProofissuedcntryaccountTrader) ? "selected" : "" }}> 
                                                      <span> {{ $value }}</span>     
                                             </option>
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                     @endforeach
                                     </select>
                                    
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="form-floating mb-3 clearable-input">
                                       <label>   State/Province (if applicable)</label>
                                    <input type="text" id="edit_accountTrader_addressproof_state" name="accountTrader_addressproof_state" value="{{$findAccountTrader->addDocState }}" class="form-control searchinput" placeholder="demo">
                                  
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="form-floating mb-3 clearable-input">
                                      <label>City</label>
                                    <input type="text"  id="edit_accountTrader_addressproof_city" name="accountTrader_addressproof_city" value="{{$findAccountTrader->addDocCity }}" class="form-control searchinput" placeholder="demo">
                                   
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="form-floating mb-3 clearable-input">
                                     <label>Zip Code</label>
                                    <input type="text"  id="edit_accountTrader_addressproof_zipcode" name="accountTrader_addressproof_zipcode"  value="{{$findAccountTrader->addDocZip }}" class="form-control searchinput" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');"
 placeholder="demo">
                                    
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-floating mb-3 clearable-input">
                                     <label>Street Address    </label>
                                    <input type="text" id="edit_accountTrader_addressproof_Street" name="accountTrader_addressproof_Street" value="{{$findAccountTrader->addDocStreet }}" class="form-control searchinput" placeholder="demo">
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="modal-footer mt-5">
               <div class="footer-div-btn">
                  <button class="modal_btn_theme" id="updateAccountTraderForm">Submit</button>
                  <button class="btn bg-whitesmoke" id="edit_cancelAccountTraderForm">Cancel </button>
               </div>
            </div>
         </div>
      </div>





@endif


<script>


    $('select').selectpicker();
    
     $("#edit_Add_Authorised_Account .close-modal, #edit_cancelAccountTraderForm").click(function(){
              $("#edit_Add_Authorised_Account").css({"display":"none"});
         });
         
     
         
    
     $("#updateAccountTraderForm").click(function(){
        // alert();
   
   const pId = $("#edit_accountTrader_user_id").val();
   const partnerId = $("#edit_accountTrader_partnerId").val();
  

   const firstName = $("#edit_accountTrader_fname").val();
   const MidName = $("#edit_accountTrader_midName").val();
   const lastName = $("#edit_accountTrader_lastName").val();

   const ownerDOB = $("#edit_accountTrader_dob").val();

   const jurisCountry = $("#edit_accountTrader_Jurisdiction_country").val();
   const countryResidence = $("#edit_accountTrader_residence_country").val();
   const Region_of_Issue = $("#edit_accountTrader_docIssueRegion").val();

   const idDocType = $("input[name='accountTrader_idDocType']:checked").val();
   const idDocNum = $("#edit_accountTrader_IdNum").val();

 // const idDocUploadedFront = $("#edit_idDocUploadedFront").val();
   //   const idDocUploadedBack = $("#edit_idDocUploadedBack").val();
   
   const idDocUploadedFront  = $("#edit_accountTraderId_frontCopy").attr('value');
   const  idDocUploadedBack = $("#edit_accountTraderId_BackCopy").attr('value');
   
    const accountTraderaddressproofFront = $("#edit_accountTrader_addressproof").attr('value');
   // const addressproofBack = 
   const accountTraderDoc_type = $("#edit_accountTraderDoc_type").val();
   const accountTraderaddProofIssuedate = $("#edit_accountTraderaddProofIssuedate").val();
   const accountTraderaddProof_country = $("#edit_accountTrader_addProof_country").val();
   
   const accountTraderaddressproof_state = $("#edit_accountTrader_addressproof_state").val();
   const accountTraderaddressproof_city = $("#edit_accountTrader_addressproof_city").val();
   const accountTraderaddressproof_zipcode = $("#edit_accountTrader_addressproof_zipcode").val();
   const accountTrader_addressproof_Street = $("#edit_accountTrader_addressproof_Street").val();

       
  //    alert(pId+"/"+partnerId+"/"+"/"+firstName+"/"+MidName+"/"+lastName+"/"+ownerDOB+"/"+jurisCountry+"/"+countryResidence+"/"+Region_of_Issue+"/"+idDocType+"/"+idDocNum+"/"+idDocUploadedFront+"/"+idDocUploadedBack);
      
     //  alert(accountTraderaddressproofFront+"/"+accountTraderDoc_type+"/"+accountTraderaddProofIssuedate+"/"+accountTraderaddProof_country);
     //  alert(accountTraderaddressproof_state+"/"+accountTraderaddressproof_city+"/"+accountTraderaddressproof_zipcode+"/"+accountTrader_addressproof_Street);
     
 
         var accountTraderFormData = new FormData( $('#edit_accountTrader')[0] );
     
                      accountTraderFormData.append('idDocUploadedFront_old' , idDocUploadedFront);
                      accountTraderFormData.append('idDocUploadedBack_old' , idDocUploadedBack);
                      accountTraderFormData.append('addressproofFront_old' , accountTraderaddressproofFront);
     
      
     if( (firstName.length< 1) || (lastName.length< 1) || (ownerDOB.length< 1) || (document.getElementById('edit_accountTrader_Jurisdiction_country').selectedIndex < 0) || 
     (document.getElementById('edit_accountTrader_residence_country').selectedIndex < 0) || (document.getElementById('edit_accountTrader_docIssueRegion').selectedIndex < 0 )  || 
     (idDocType.length< 1) || (idDocNum.length< 1 ) || ( idDocUploadedFront.length< 1 ) || ( idDocUploadedBack.length< 1 )  || ( accountTraderaddressproofFront.length< 1 ) || ( accountTraderDoc_type.length < 1 ) || ( accountTraderaddProofIssuedate.length < 1 ) || 
      (document.getElementById('edit_accountTrader_addProof_country').selectedIndex < 0 ) || (accountTraderaddressproof_state.length < 1) || (accountTraderaddressproof_city.length < 1 ) || (accountTraderaddressproof_zipcode.length < 1) || (accountTrader_addressproof_Street.length < 1 ) ){
                                 
                                  $("#edit_Add_Authorised_Account .msgValidErrIndisul").html('<span style="color:red"> All fields are mandatory! </span>');
                                  setTimeout(function () {
                                                          $("#edit_Add_Authorised_Account .msgValidErrIndisul").html('');
                                                      }, 1000);
                           }else{
                                //   alert("Fields are validaed!");
                            
                                  
                                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/UpdateGeneralPartner')}}',
                                                         url: "<?php echo url('api/UpdateAuthorisedAccountTrader');  ?>",  
                                                          processData: false,
                                                          contentType: false,
                                                         enctype : 'multipart/accountTraderFormData',
                                                       
                                                          data : accountTraderFormData,
                                                      
                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully edited account trader details in Wealthmark account.', 'success');
                                                            
                                                              if(data.success == 200){
                                                          
                                                           
                                                                    document.querySelector('[data-modal="added_user_modal_'+pId+'"]').previousElementSibling.innerHTML = data.name;             
                                                                     $("#edit_Add_Authorised_Account").css({"display":"none"});
                                                                     
                                                                  //  $("#Add-Director").hide();
                                                                    //$(".addDirBtnDiv").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'   data-modal='delete_box_modal_"+data.indivisualPartnrId+"' id='"+data.indivisualPartnrId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.indivisualPartnrfirstName+" "+data.indivisualPartnrLastname+"</div> <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editCompORDirtr("+data.indivisualPartnrId+", "+data.indivisualPartnrType+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+data.indivisualPartnrId+"' id='"+data.indivisualPartnrId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box' style='max-width:350px;'> <div class='text-center p-3'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmDelete("+data.indivisualPartnrId+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+data.indivisualPartnrId+");'>Cancel </button></div></div></div></div>");
                                                      
                                                              }else{
                                                                    return "Account trader details couldn't be edited!"; 
                                                              } 
                                       
                                                         },
                                                         
                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);
                                                  
                                                          
     if(erroJson.error.accountTrader_fname || erroJson.error.accountTrader_midName|| erroJson.error.accountTrader_lastName ||  erroJson.error.accountTrader_dob ||   erroJson.error.edit_accountTrader_Jurisdiction_country ||  erroJson.error.edit_accountTrader_residence_country ||  erroJson.error.edit_accountTrader_docIssueRegion ||
     erroJson.error.accountTrader_idDocType ||  erroJson.error.accountTrader_IdNum ||  erroJson.error.accountTraderDoc_type ||  erroJson.error.accountTraderaddProofIssuedate ||  erroJson.error.accountTrader_addProof_country ||  erroJson.error.accountTrader_addressproof_state ||
       erroJson.error.accountTrader_addressproof_city ||  erroJson.error.accountTrader_addressproof_zipcode ||  erroJson.error.accountTrader_addressproof_Street ){
           
                                                     $("#edit_Add_Authorised_Account .msgValidErrIndisul").html('Invalid input!');
                                                     $("#edit_Add_Authorised_Account .msgValidErrIndisul").addClass('alert alert-danger');
                                                     
                                                    }
                                                     
                                                     setTimeout(function(){
                                                          $("#edit_Add_Authorised_Account .msgValidErrIndisul").html('');
                                                          $("#edit_Add_Authorised_Account .msgValidErrIndisul").removeClass('alert alert-danger'); }, 4000);                                                            
                                                          
 
                                                         }
                                     					
                                     				});
                                 
                                     // $(that).parent().parent().parent().parent().hide();
                                 
                
                             }
     
 });     
         
         
</script>
  <script>
                                $(function(){
                                     $('.datepicker').datepicker( { 
                                          autoclose: true, 
                                            //  dateFormat: 'yy-mm-dd'
                                             
                                         });
                                     });
         
                              </script>
