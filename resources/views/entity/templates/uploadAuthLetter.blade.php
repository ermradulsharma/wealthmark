       <div class="accordion__header">
                              <h2>
                                 <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                                 Upload Letter of Authorization
                              </h2>
                              <span class="accordion__toggle"></span>
                           </div>
                           <div class="accordion__body">
                              <label class="label-text" >The Letter of Authorization is used to provide written confirmation of the authorized personnel(s) who will be permitted to access Wealthmark’s services on behalf of the entity.</label>
                              <label class="label-text" >Step 1: Generate Letter of Authorization template</label>
                              <label class="label-text" >  1) Please use the Wealthmark template if required. </label>
                              <label class="label-text" >  2) Kindly ensure that all authorized traders have been updated in the Related Parties section</label>
                              <label class="label-text" > 3) Click "Generate Template" to generate a pre-populated letter of authorization for your entity</label>
                              <div class="mt-3 mb-2">
                                 <button class="generate-btn">Generate Template</button>
                              </div>
                              <label class="label-text" >Step 2: Upload Signed Letter of Authorization</label>
                              <label class="label-text" >1) Generate the template of letter of authorization and have the appropriate quorum of directors provide signoff and upload it here</label>
                              <label class="label-text" >2) For Wealthmark Pay merchants/partners - Provide a Resolution of Board of Directors authorizing the list of person(s) authorized to act on behalf of the customer</label>
                              <label class="label-text" >3) A Valid Company Board Resolution with clear delegation of authority can be uploaded in lieu of the letter of authorization </label>
                               <div class="mt-3 mb-2 ">
                                 <span class="UploadAuthLetterSec msgValidErrIndisul"></span>


                              </div>
                              <div class="mt-3 mb-2 authletterBox">
                                  @if( $relatedParties_authLetters )

                                   @foreach($relatedParties_authLetters as $relatedParties_authLetter)

                                        @php
                                        $authLetters = explode( ',' , $relatedParties_authLetter->authLetter );
                                        @endphp

                                        @foreach($authLetters as $authLetter)

                                         <img  class="img-thumbnail "  src="{{ url('storage/app/'. $authLetter) }}" alt="" title="" />

                                        @endforeach



                                    @endforeach

                                  @endif

                              </div>

                              <form action="#" id="UploadAuthLetterForm">
                                 <div class="mt-4">
                                    <div class="upld-btn-div">
                                       <div class="upld-btn-outer">
                                            <input type="text" hidden="" name="authletterPartnerId" id="authletterPartnerId" value="6" class="form-control " placeholder="">
                                             <input type="text" hidden="" name="authletterStatus" id="authletterStatus" value="1" class="form-control " placeholder="">
                                          <div class="upld-btn-inner">
                                             <button  type="button" class="generate-btn">
                                                <input type="file" name="uploadedAuthLetters[]" accept=".pdf,.jpg,.jpeg,.png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;" multiple>
                                               <i class="bi bi-upload"></i>
                                                {{ ( !empty($authLetters) ? 'Upload Another' : 'Upload')}}
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="confirm-btn-div">
                                    <button  name="" type="button" form="" class="active confirm-btn" id="UploadAuthLetterBtn" >
                                       <div class="confirm-inner">
                                          <div class="confirm-in">


                                             <i class="bi bi-check-lg"></i>
                                             Confirm
                                          </div>
                                       </div>
                                    </button>
                                 </div>
                              </form>
                           </div>

