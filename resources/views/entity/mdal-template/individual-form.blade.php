<div class="main-modal-form">
    <div class="main-heading">Basic Information</div>
        <form>
            <div class="form-content scrollbar-style">
                
                <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column3">
                           <div class="form-floating mb-3 ">
                              <input type="text" class="form-control" name="firstName" value="" placeholder="demo">
                              <label>First Name</label>
                           </div>
                           <div class="form-floating mb-3 ">
                              <input type="text" class="form-control" name="MidName" value="" placeholder="demo">
                              <label>Middle Name</label>
                           </div>
                           <div class="form-floating mb-3 ">
                              <input type="text" class="form-control" name="lastName" value="" placeholder="demo">
                              <label>Last Name</label>
                           </div>
                        </div>
                        <div class="">
                           <div class="input-group date" id="datepicker">
                              <input type="text" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
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
                                 <input type="checkbox" type="checkbox"   class="radio-btns"> Multiple Citizenship
                              </div>
                           </div>
                           <div class="mt-1">
                              <select  name="" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Residential Address</label>
                           <div class="form-floating mb-3 ">
                              <label>Country of Residence</label> 
                           </div>
                           <div class="mt-1">
                              <select name="" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" ></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Upload Identification Documents</label>
                           <div class="form group mt-3">
                              <label class="label-text">Country/Region of Issue</label>
                              <select name="" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" ></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Select Document Type</label>
                           <div class="form-group d-flex doc-type mt-2">
                              <div class="passport d-flex align-items-center">
                                 <input type="radio"  name="idDocType" value="10" checked class="radio-btns"> Passport
                              </div>
                              
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" name="idDocType"  value="9" class="radio-btns"> Id Card
                              </div>
                           </div>
                        </div>
                        <div class="form group mt-3">
                           <label class="label-text">Identification Number</label>
                           <div class="form-floating mb-3 ">
                              <input type="text" class="form-control" value="" name="idDocNum" placeholder="demo">
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
                                       <div class="attach">Attach Image</div>
                                    </div>
                                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                                 </div>
                              </div>
                             
                              <input name="idDocUploadedFront" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf"  style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
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
                                       <div class="attach">Attach Image</div>
                                    </div>
                                    <div class="img-types">Max 5 MB in .jpg/.jpeg/.png/.pdf format</div>
                                 </div>
                              </div>
                              <input name="idDocUploadedBack" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                           </div>
                        </div>
                     </div>
            </div>
        </form>
          <div class="_des_box">
                     <div class="_btn_div">
                        <button type="button" class=" _btn_default">
                           <div class="_btn_text">Previous</div>
                        </button>
                        <button type="button" class="btn-main-yellow" >
                           <div class="_btn_text ">Continue</div>
                        </button>
                     </div>
                  </div>
    </div>
</div>
          