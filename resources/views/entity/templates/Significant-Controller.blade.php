
<div class="modal custom_modal" id="Add_Significant_Controller">
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
               <div class="modal_heading">Add Significant Controller(s)</div>
            </div>
            
            <div class="modal-body text-start">
                 <div class="msgValidErrIndisul"></div>
            <form action="#" style="width: 100%;" enctype="multipart/form-data" id="significantController">
                      @csrf
                      <div>
                     
                     <input type="text" hidden="" name="partnerId" id="significant_partnerId" value="3" class="form-control " placeholder="">
                  
                          
                      </div>
                  
                  <div class="form-inner scrollbar-style">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column3">
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" id="significant_fname" name="significant_fname" value="" class="form-control searchinput" placeholder="demo">
                              <label>First Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" id="significant_midName" name="significant_midName" value="" class="form-control searchinput" placeholder="demo">
                              <label>Middle Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" id="significant_lastName" name="significant_lastName" value="" class="form-control searchinput" placeholder="demo">
                              <label>Last Name</label>
                           </div>
                        </div>
                        <div class="">
                           <div class="input-group date" id="datepicker">
                              <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" name="significant_dob" id="significant_dob" placeholder="Enter your DOB" />
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
                                 <input type="checkbox" type="checkbox" id="multipleCitizenship" class="radio-btns"> Multiple Citizenship
                              </div>
                           </div>
                           <div class="mt-1">
                              <select id="significant_Jurisdiction_country" name="significant_Jurisdiction_country[]" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Country of Residence</label>
                           <div class="mb-3">
                             
                               <select id="significant_residence_country"  name="significant_residence_country" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" >
                                  <option> Select one </option> 
                               </select>
                              
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Upload Identification Documents</label>
                           <div class="form group mt-3">
                              <label class="label-text">Country/Region of Issue</label>
                              <select  id="significant_docIssueRegion" name="significant_docIssueRegion" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" >
                                
                              </select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Select Document Type</label>
                           <div class="form-group d-flex doc-type mt-2">
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="significant_passport" name="significant_idDocType" value="10" checked class="radio-btns"> Passport
                              </div>
                              <div class="aadhar d-flex align-items-center">
                                 <input type="radio" id="significant_aadhar" name="significant_idDocType" value="13" class="radio-btns"> Aadhar Card
                              </div>
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="significant_IdCard" name="significantidDocType" value="9" class="radio-btns"> Id Card
                              </div>
                           </div>
                        </div>
                        <div class="form group mt-3">
                           <label class="label-text">Identification Number</label>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text"  id="significant_IdNum" name="significant_IdNum" class="form-control searchinput" placeholder="demo">
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
                                       <svg  viewBox="0 0 24 24" fill="none" class="icon-upl">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                                       </svg>
                                       <div class="attach">Attach Image</div>
                                    </div>
                                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                                 </div>
                              </div>
                              <input   id="significantId_frontCopy" name="significantId_frontCopy" type="file" value="" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                           </div>
                           <div class="upl-doc-inner">
                              <div class="inner-doc"> 
                                 <div class="upld-main">
                                    <div class="upld-text">Click or drag and drop to attach ID back</div>
                                    <div class="icon-div">
                                       <svg  viewBox="0 0 24 24" fill="none" class="icon-upl">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15 7.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM13.5 11a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" fill="#76808F"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 4h20v16H2V4zm2 2v7.586l3-3L14.414 18H20V6H4zm0 12v-1.586l3-3L11.586 18H4z" fill="#76808F"></path>
                                       </svg>
                                       <div class="attach">Attach Image</div>
                                    </div>
                                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                                 </div>
                              </div>
                              <input  type="file" id="significantId_BackCopy" name="significantId_BackCopy" value="" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
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
                                    <input type="file" id="significant_addressproof" name="significant_addressproof" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                    <svg  viewBox="0 0 24 24" fill="none" class="upld-icon">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M3.224 6V3h8.5v3h-5.5v12h5.5v3h-8.5V6zm5.368 7.5v-3h6.587V5.984L21.21 12l-6.03 5.98V13.5H8.592z" fill="currentColor"></path>
                                    </svg>
                                    Upload 
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Confirm Address Document</label>
                           <label class="label-text"> Fill in details of the document that you have just uploaded</label>
                           <label class="label-text"> Select Document Type</label>
                           <div class="row">
                              <div class="col-md-6 col-sm-6 mb-3">
                                 <select class="form-control" id="significantDoc_type" name="significantDoc_type">
                                    <option value="11" >Utility Bills</option>
                                    <option value="12" >Bank Statement</option>
                                    <!--<option value="" >Government</option>
                                    <option value="" >Other</option>-->
                                 </select>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="input-group date" id="datepicker">
                                    <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" name="significant_addProofIssuedate" id="significant_addProofIssuedate" placeholder="Issue Date or Last Date of Billing Period" />
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
                             
                                     <select  id="significant_addProof_country" name="significant_addProof_country" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" > </select>
                                    
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="form-floating mb-3 clearable-input">
                                       <label>   State/Province (if applicable)</label>
                                    <input type="text" id="significant_addressproof_state" name="significant_addressproof_state" class="form-control searchinput" placeholder="demo">
                                  
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="form-floating mb-3 clearable-input">
                                      <label>City</label>
                                    <input type="text"  id="significant_addressproof_city" name="significant_addressproof_city" class="form-control searchinput" placeholder="demo">
                                   
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="form-floating mb-3 clearable-input">
                                     <label>Zip Code</label>
    <input type="text"  id="significant_addressproof_zipcode" name="significant_addressproof_zipcode"  class="form-control searchinput" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="demo">
                                    
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                 <div class="form-floating mb-3 clearable-input">
                                     <label>Street Address    </label>
                                    <input type="text" id="significant_addressproof_Street" name="significant_addressproof_Street" class="form-control searchinput" placeholder="demo">
                                    
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
                  <button class="modal_btn_theme" id="submitSignificantForm">Submit</button>
                  <button class="btn bg-whitesmoke" id="cancelSignificantForm">Cancel </button>
               </div>
            </div>
         </div>
      </div>