

    <div id="upld_documents-div" class="accordion-div">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                     <div class="main-content-box">
           <div class="rightbox">
               <div class="right-inner">
                  <div>
                       <div class="backEntityVerificationBtn">
                         <i class="bi bi-chevron-left"></i>
                              <div class="" >Entity Verification</div>

                        </div>
                     <div class="h1 mt-4">Upload Documents</div>

                     <div class="mt-3 mb-3 upld-docx-notice-div" style="display:block">
                         <div class="upld-docx-notice">
                             <div>
                                 <i class="bi bi-info-circle-fill"></i>
                             </div>
                             <div class="p-light">Currently, we support Bulgarian, Russian, French, Portuguese, Polish, Slovenian, Italian, Hungarian, Swedish, Dutch, Spanish, Ukrainian, Romanian, Turkish, Greek, Estonian, Latvian, and Korean, alongside English. If the corporate documents are in other languages, please provide a notarized English translation with apostille seal along with the original documents.</div>
                          <div class="close-upld-docx-notice">
                               <i class="bi bi-x-circle-fill"></i>

                          </div>
                         </div>
                     </div>
                     <div class="mt-2">
                          <div class="accordion">
                            <!---------------------------------    Certificate of Incorporation ------------------------------------->

                            <div class="accordion__header">
                              <h2>

                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                                Certificate of Incorporation
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                <div class="incorp_cert_errmsg "></div>

                                  <form action="" id="incorp_cert_form" >
                              <div class="p-light"> Please provide the legal document which evidences the formation or registration of your legal entity </div>
                              <div class="file-upld-status mt-3 " id="incorp_cert_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="1024" id="incorp_cert"  onChange="caption(this.id);"  multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }}, 'incorp_cert')" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>

                                  <div class="incorp_cert_box">
                                      @if($entitydocs && ($entitydocs->incorp_cert != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->incorp_cert);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif

                                  </div>


                              <div class="divider-line"></div>
                               </form>
                            </div>

                            <!---------------------------------    Partnership Agreement ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                               Partnership Agreement
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                <div class="partnership_agrnmt_errmsg "></div>
                                 <form action="" id="partnership_agrnmt_form" >
                              <div class="p-light"> The document which governs and regulates the activities of the Partnership. Outlines rules and procedures to govern the Partnership. Please upload the latest and most up to date version of your Partnership Agreement. </div>
                              <div class="file-upld-status mt-3" id="partnership_agrnmt_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="partnership_agrnmt"    onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'partnership_agrnmt' );" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>

                                </div>
                                <div class="partnership_agrnmt_box">
                                     @if($entitydocs && ($entitydocs->partnership_agrnmt != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->partnership_agrnmt);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                </div>
                              <div class="divider-line"></div>
                              </form>
                            </div>

                            <!---------------------------------    Register of Partners / Certificate of Incumbency/Business Registry or equivalent ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Register of Partners / Certificate of Incumbency/Business Registry or equivalent
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                  <div class="regsterOf_partner_errmsg "></div>
                                 <form action="" id="regsterOf_partner_form" >
                              <div class="p-light"> This should be issued within the last 12 months, and include the information of current partners. </div>
                              <div class="file-upld-status mt-3" id="regsterOf_partner_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" data-max-size="2048" accept=".pdf,.jpg,.jpeg,.png" id="regsterOf_partner"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }}, 'regsterOf_partner');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                <div class="regsterOf_partner_box">
                                     @if($entitydocs && ($entitydocs->regsterOf_partner != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->regsterOf_partner);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                </div>

                              <div class="divider-line"></div>
                               </form>
                            </div>

                            <!---------------------------------    Current Operating Status ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Current Operating Status
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                  <div class="curnt_oprtiv_status_errmsg "></div>
                                <form action="" id="curnt_oprtiv_status_form" >
                              <div class="p-light">Upload one of the below documents (issued within the last 6 months) for the current operating status: <span class="d-block mb-3">1)A full screenshot from the government website which contains the current company details and date of obtaining the information. Kindly also make sure the system clock &amp; date on the desktop is included</span>
                                <span class="d-block mb-3">2) Certificate of Incumbency</span>
                                <span class="d-block">3) Certificate of Good Standing</span>
                              </div>

                               <div class="file-upld-status mt-3" id="curnt_oprtiv_status_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="curnt_oprtiv_status"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }}, 'curnt_oprtiv_status');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                <div class="curnt_oprtiv_status_box">
                                     @if($entitydocs && ($entitydocs->curnt_oprtiv_status != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->curnt_oprtiv_status);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                </div>
                              <div class="divider-line"></div>
                                 </form>
                            </div>

                            <!---------------------------------    AML/CFT Policy or Binance AML Questionnaire ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> AML/CFT Policy or Binance AML Questionnaire
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>

                            <div class="accordion__body">
                                <div class="aml_questionnaire_errmsg "></div>
                                <form action="" id="aml_questionnaire_form">
                              <div class="p-light mb-4">1) AML/CFT Policy or Binance AML Questionnaire needs to be signed by the head of AML compliance, chief compliance officer, MLRO, director, or equivalent.</div>
                              <div class="p-light mb-4">2) Click “Generate” to generate your own Binance AML Questionnaire document.</div>
                              <div class="upld-btn-inner mt-3 mb-3  ">
                                <button type="button" class="generate-btn">
                                 <!-- <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="aml_questionnaire2"   onChange="caption(this.id);" multiple required>-->
                                 <i class="bi bi-clipboard2-data-fill"></i> Generate Template
                                 </button>
                              </div>

                              <div class="p-light">--------------- or ---------------</div>
                              <div class="p-light mb-4">I have another document with the same legal effect as the AML/CFT policy document.</div>
                               <div class="file-upld-status mt-3" id="aml_questionnaire_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="aml_questionnaire"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }}, 'aml_questionnaire');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                 <div class="aml_questionnaire_box">
                                      @if($entitydocs && ($entitydocs->aml_questionnaire != NULL))
                                                 @php
                                                       $imgString = explode(',', $entitydocs->aml_questionnaire);
                                                 @endphp

                                                  @foreach($imgString as $perDocImg )
                                                        <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                 </div>
                              <div class="divider-line"></div>
                               </form>
                            </div>

                            <!---------------------------------  Operating License ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Operating License
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                 <div class="operating_license_errmsg "></div>
                                 <form action="" id="operating_license_form">
                              <div class="p-light mb-4">Do you have any operating license?</div>
                              <div class="radio-btns-div">
                                <input type="radio" id="radio1_OL" name="operating_license" value="yes" {{ ($entitydocs && ( ($entitydocs->operating_license != NULL) || ($entitydocs->operating_license == 'no')) )? 'checked' : '' }} onclick= "yesORno(this.name, this.id)"> Yes
                              </div>
                              <div class="radio-btns-div">
                                <input type="radio" id="radio2_OL" name="operating_license" value="no" {{ ($entitydocs && ( ($entitydocs->operating_license == NULL) ||  ($entitydocs->operating_license == 'no')) ) ? 'checked' : '' }}   onclick= "yesORno(this.name, this.id)"> No
                              </div>
                              <div class="OL_if_Yes" id="OL_if_Yes">
                                 <div class="file-upld-status mt-3" id="operating_license_file">

                              </div>
                              <div class="upld-btn-inner mt-3" {{ ($entitydocs && ( ($entitydocs->operating_license == NULL) || ($entitydocs->operating_license == 'no')) ) ? 'style=display:none ' : 'style=display:block !important' }}>
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="operating_license"  onChange="caption(this.id);" multiple required  >
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>

                              </div>
                              <div class="OL_if_no" id="OL_if_no">
                               <!-------------------------if no mark button active------------->
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }}, 'operating_license');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                 <div class="operating_license_box">
                                      @if($entitydocs && ($entitydocs->operating_license != NULL ))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->operating_license);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  @if( $perDocImg != 'no')
                                                    <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                 @endif

                                                  @endforeach
                                      @endif
                                 </div>
                              <div class="divider-line"></div>
                              </form>
                            </div>

                            <!---------------------------------   Outsourcing / Service Agreement ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Outsourcing / Service Agreement
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">

                                 <div class="outsour_serv_agrmnt_errmsg "></div>
                                 <form action="" id="outsour_serv_agrmnt_form" >
                              <div class="p-light mb-4">Do you have any Outsourcing / Service Agreement?</div>
                              <div class="radio-btns-div">
                                <input type="radio" id="radio1_osa" name="outsour_serv_agrmnt" value="yes" {{ ( $entitydocs && ( ($entitydocs->outsour_serv_agrmnt != NULL) || ($entitydocs->outsour_serv_agrmnt != 'no')  )) ? 'checked' : '' }} onclick= "yesORno(this.name, this.id)" > Yes
                              </div>
                              <div class="radio-btns-div">
                                <input type="radio" id="radio2_osa" name="outsour_serv_agrmnt" value="no" {{ ( $entitydocs && ( ($entitydocs->outsour_serv_agrmnt == NULL) || ($entitydocs->outsour_serv_agrmnt == 'no') )) ? 'checked' : '' }}   onclick= "yesORno(this.name, this.id)" > No
                              </div>
                              <div class="OSA_if_Yes" id="OSA_if_Yes">

                                 <div class="file-upld-status mt-3" id="outsour_serv_agrmnt_file">

                              </div>
                              <div class="upld-btn-inner mt-3" {{ ($entitydocs && ( ($entitydocs->outsour_serv_agrmnt == NULL) || ($entitydocs->outsour_serv_agrmnt == 'no')) ) ? 'style=display:none !important' : 'style=display:block !important' }}>
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="outsour_serv_agrmnt"   onChange="caption(this.id);" multiple required >
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>

                              </div>
                              <div class="OSA_if_no" id="OSA_if_no">
                                   <!-------------------------if no mark button active------------->

                              </div>
                                <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'outsour_serv_agrmnt');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                <div class="outsour_serv_agrmnt_box">
                                     @if($entitydocs && ($entitydocs->outsour_serv_agrmnt != NULL ))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->outsour_serv_agrmnt);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )
                                                   @if( $perDocImg != 'no')
                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endif
                                                  @endforeach
                                      @endif
                                </div>
                              <div class="divider-line"></div>
                               </form>
                            </div>

                            <!---------------------------------  Proof of Address Collection of the Entity ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Proof of Address Collection of the Entity
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                 <div class="add_proof_errmsg "></div>
                                 <form action="" id="add_proof_form" >
                              <div class="p-light">1) Please upload document to prove your Operating Business Address. <br> 2) Ensure the PoA documents were issued in the last <div class="font-weight-bolder d-inline">
                                  <div class="text-red">90</div>
                                </div> days. <br> 3) Ensure <div class="font-weight-bolder d-inline">
                                  <div class="text-red">full role's name</div>
                                </div> and <div class="font-weight-bolder d-inline">
                                  <div class="text-red">full address</div>
                                </div> are reflected on the document. <br> 4) We only support <div class="font-weight-bolder d-inline">
                                  <div class="text-red">a limited number of document types</div>
                                </div>. Unsupported documents will be rejected. </div>
                              <div class="p-light">
                                <ul class="PoA_ul">
                                  <li class="PoA_li">
                                    <div class="font-weight-bolder d-inline">Bank statements (with transactions history)</div>. We accept digital bank statements too but please send us the original .pdf file. Please note that sensitive information, such as transaction details, can be covered.
                                  </li>
                                  <li class="PoA_li">
                                    <div class="font-weight-bolder d-inline">Utility bills</div>, such as electricity, water, fixed internet, or phone bills (please note that we do not accept mobile phone bills and insurance letters), waste management, etc.
                                  </li>
                                  <li class="PoA_li">
                                    <div class="font-weight-bolder d-inline">Government documents</div>, such as letters from government agencies, tax bills, etc.
                                  </li>
                                </ul>
                              </div>

                              <div class="file-upld-status mt-3"  id="add_proof_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="add_proof"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }}, 'add_proof');" >
                                  <i class="bi bi-check-lg "></i>
                                  <span> Confirm </span>
                                </button>
                              </div>
                               <div class="add_proof_box">
                                    @if($entitydocs && ($entitydocs->add_proof != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->add_proof);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                               </div>
                              <div class="divider-line"></div>
                              </form>
                            </div>

                            <!---------------------------------   Intermediaries (at least 25% or more) ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Intermediaries (at least 25% or more)
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                <div class="Intermedianes_errmsg "></div>
                               <form action="" id="Intermedianes_form" >
                              <div class="p-light mb-4">Do you have any intermediaries (at least 25% or more)?</div>
                              <div class="radio-btns-div">
                                <input type="radio" id="radio1_itd" name="Intermedianes" value="yes" {{ ( $entitydocs && ( ($entitydocs->Intermedianes != NULL) || ($entitydocs->Intermedianes != 'no')) ) ? 'checked' : '' }} onclick= "yesORno(this.name, this.id)"> Yes
                              </div>
                              <div class="radio-btns-div">
                                <input type="radio" id="radio2_itd" name="Intermedianes" value="no" {{ ( $entitydocs && ( ($entitydocs->Intermedianes == NULL) || ($entitydocs->Intermedianes == 'no')) ) ? 'checked' : '' }}   onclick= "yesORno(this.name, this.id)"> No
                              </div>
                              <div class="intermediaries_if_Yes" id="intermediaries_if_Yes">
                                <div class="file-upld-status mt-3" id="Intermedianes_file">

                              </div>
                              <div class="upld-btn-inner mt-3" {{ ($entitydocs && ( ($entitydocs->Intermedianes == NULL) || ($entitydocs->Intermedianes == 'no') ))? 'style=display:none !important' : 'style=display:block !important' }}>
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="Intermedianes"   onChange="caption(this.id);" multiple  required >
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>

                              </div>
                              <div class="intermediaries_if_no" id="intermediaries_if_no">
                                 <!-------------------------if no mark button active------------->
                              </div>
                               <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'Intermedianes');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                 <div class="Intermedianes_box">
                                      @if($entitydocs && ($entitydocs->Intermedianes != NULL ))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->Intermedianes);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )
                                                  @if( $perDocImg != 'no')
                                                   <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endif

                                                  @endforeach
                                      @endif
                                 </div>
                              <div class="divider-line"></div>
                               </form>
                            </div>

                            <!---------------------------------   Investment Management Agreement or similar delegation of authority------------------------------------->

                            <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Investment Management Agreement or similar delegation of authority
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                 <div class="managementAgreement_errmsg "></div>
                                 <form action="" id="managementAgreement_form" >
                                  <div class="file-upld-status mt-3" id="managementAgreement_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="managementAgreement"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                                 <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'managementAgreement');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                 <div class="managementAgreement_box">
                                      @if($entitydocs && ($entitydocs->managementAgreement != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->managementAgreement);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                 </div>
                                <div class="divider-line"></div>
                                  </form>
                            </div>

                            <!---------------------------------  List of Investors------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> List of Investors
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                            <div class="investorsList_errmsg "></div>
                              <form action="" id="investorsList_form" >
                            <div class="p-light">1) This should be issued within the last 12 months, and include the information of current shareholders<br> <br>
                                2) This documents should be signed by either director/HR/Legal/Compliance/Company Secretary/Registered Agent<br> <br>
                                3) Please note that the signer cannot be in the register of members<br> <br>
                                4) The sign-off should contain the following wordings to the effect "I confirm/attest that this document is true”</div>


                               <div class="file-upld-status mt-3 " id="investorsList_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="investorsList"  onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                                 <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'investorsList');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>

                                  <div class="investorsList_box">
                                       @if($entitydocs && ($entitydocs->investorsList != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->investorsList);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                  </div>
                                <div class="divider-line"></div>
                                </form>
                            </div>

                            <!--------------------------------- Offering documents or any marketing material of the fund------------------------------------->

                            <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Offering documents or any marketing material of the fund
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                             <div class="offeringDoc_errmsg "></div>
                                <form action="" id="offeringDoc_form" >
                            <div class="p-light">e.g. Prospectus, Fund factsheet, Private Placement Memorandum, Offering Document etc.</div>

                             <div class="file-upld-status mt-3" id="offeringDoc_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="offeringDoc"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                                 <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'offeringDoc');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                  <div class="offeringDoc_box">
                                       @if($entitydocs && ($entitydocs->offeringDoc != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->offeringDoc);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                  </div>
                                <div class="divider-line"></div>
                                 </form>
                            </div>

                             <!--------------------------------- Investment Manager's Register of Directors/Certificate of Incumbency/Business Registry or equivalent------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Investment Manager's Register of Directors/Certificate of Incumbency/Business Registry or equivalent
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                             <div class="InvestmentManager_errmsg "></div>
                             <form action="" id="InvestmentManager_form" >
                            <div class="p-light">
                                    The document should be dated within the last 12 months and showing the current Directors of the applying company. <br> <br>
                                    If the document is not issued by a Government or Registry, please ensure the document contains the following:<br> <br>
                                    1) The document should be signed by an appropriate authority (i.e. Director, Company Secretary, Legal, or equivalent) and contain the following statement "I confirm and attest that this document is true, valid and accurate as of DDMMYYYY"<br> <br>
                                    2) The signer should sign off with their full name, capacity / designation and date of sign off.
                            </div>


                           <div class="file-upld-status mt-3" id="InvestmentManager_file">

                            </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="InvestmentManager"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>

                                 <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'InvestmentManager');" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                 <div class="InvestmentManager_box">
                                      @if($entitydocs && ($entitydocs->InvestmentManager != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->InvestmentManager);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                 </div>
                                <div class="divider-line"></div>
                                </form>
                            </div>

                             <!--------------------------------- Supplemental Documents (optional) ------------------------------------->

                            <div class="accordion__header">
                              <h2>
                               <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io"> Supplemental Documents (optional)
                              </h2>
                              <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                 <div class="supmentry_errmsg "></div>
                           <form action="" id="supmentry_form" >
                             <div class="file-upld-status mt-3" id="supmentry_file">

                              </div>
                              <div class="upld-btn-inner mt-3">
                                <button type="button" class="generate-btn">
                                  <input type="file" name="uploaddedFile[]" accept=".pdf,.jpg,.jpeg,.png" data-max-size="2048" id="supmentry"   onChange="caption(this.id);" multiple required>
                                  <i class="bi bi-upload"></i> Upload </button>
                              </div>
                                 <div class="upld-btn-inner mt-3">
                                  <button type="button" class="active generate-btn w-auto" onClick="uploadBusinessEachDoc({{ Auth::user()->id }} , 'supmentry');">
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                                </div>
                                <div class="supmentry_box">
                                     @if($entitydocs && ($entitydocs->supmentry != NULL))

                                                 @php

                                                 $imgString = explode(',', $entitydocs->supmentry);

                                                    @endphp

                                                  @foreach($imgString as $perDocImg )

                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perDocImg) }}" alt="" title="">
                                                  @endforeach
                                      @endif
                                </div>
                                <div class="divider-line"></div>
                                 </form>
                            </div>
                             <!---------------------------------  ------------------------------------->

                            <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto"  onClick="confirmBusinessdocStatus( {{ Auth::user()->id }} );">
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                            </div>
                          </div>



                        </div>
               </div>
            </div>
         </div>
      </div>
                </div>
            </div>
        </div>
 </div>





