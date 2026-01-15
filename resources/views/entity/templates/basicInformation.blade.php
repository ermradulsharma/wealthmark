<div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <svg  viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                 </svg>
                                 Account Information
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                    <div class="row">
                                        <span class="validtnErr_basicentityname"></span>
                                         <span class="validtnErr_incopdata" ></span>
                                          <span class="validtnErr_registrationNum"></span>
                                    </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" placeholder="Entity Name" id="eName" name="eName" value="{{ ($entity) ? $entity->entity_name : old('eName')  }}">
                                          <label for="floatingInput">Entity Name</label>
                                          <span class="eNameError danger"></span>
                                          <input type="hidden" name="_token" id="etoken" value="{{ csrf_token() }}">
                                          @error('eName')
                                          <span class="danger error"> {{ $message }}</span>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mt-3">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" placeholder="Registration Number" id="eRegistration" name="eRegistration" value="{{ ($entity) ?  $entity->reg_num : old('eRegistration')}}">
                                          <label for="floatingInput">Registration Number</label>
                                          <span class="eRegistrationError "></span>
                                          @error('reg_num')
                                          <span class="danger error"> {{ $message }}</span>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mt-3">
                                       <div class="form-floating">

                                          <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" placeholder="Date of Incorporation" id="eIncorpDate" name="eIncorpDate" value="{{ ($entity) ? $entity->DOB_incorpor : old('eIncorpDate')}}">
                                          <label for="floatingInput">Date of Incorporation</label>
                                           <span class="eincorpdateError danger"></span>

                                       </div>
                                    </div>
                                 </div>
                                 <div class="mt-2">
                                    <button class="btn-main-yellow w-auto" id="accountInfo" >
                                       <div class="_btn_text">
                                          Confirm
                                       </div>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <svg  viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                                 </svg>
                                 Entity Address
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="row">
                                    <div class="country_box"></div>
                                    <div class="col-md-12 mb-3">
                                       <div class="form-floating w-100 eRegCountrydrp">
                                            <!--<span> <img src="{{ asset('assets/img/country-flag/').'/'.'IN'.'.png' }}" ></span>-->
                                          <select id="eRegCountry" name="eRegCountry" placeholder="Jurisdiction country" class="w-100">

                                          @foreach($jo as $key => $value)
                                          <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->

                                          <option value="{{ $key }}"
                                          @if($entity)   {{ $key == $entity->regstrd_cntry ? "selected"  : "" }}   @endif >

                                            <span> {{ $value }}</span>
                                          </option>
                                           <!--<img src="https://countryflagsapi.com/png/{{ $key }}" > -->
                                          <!--<img src="{{ asset('assets/img/country-flag/').'/'.$key.'.png' }}" >-->
                                          @endforeach
                                          </select>
                                       </div>
                                       <span class="addressCountryError "></span>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" placeholder="Street Address" id="eStreet" onKeyup="elearErrMsg(this);" name="eStreet" value="{{ $entity ? $entity->street_add : old('eStreet')}}">
                                          <label for="floatingInput">Street Address</label>
                                          <span class="d-block addressstreetError "></span>
                                       </div>
                                    </div>
                                     <div class="col-md-6 col-sm-6">
                                       <div class="form-floating ">
                                          <input type="text" class="form-control" placeholder="City" id="eCity" name="eCity" onKeyup="elearErrMsg(this)" value="{{ $entity ? $entity->city : old('eCity')}}">
                                          <label for="floatingInput">City</label>
                                          <span class="d-block addresscityError "></span>
                                          <input type="hidden" name="_token" id="eAddtoken" value="{{ csrf_token() }}">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                       <div class="form-floating">
                                          <input type="text" class="form-control" placeholder="Zip Code" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');"  id="eZip" onKeyup="elearErrMsg(this);" name="eZip" value="{{ $entity ? $entity->postal_code : old('eZip')}}">
                                          <label for="floatingInput">Zip Code</label>
                                          <span class="d-block addresszipError "></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mainAdrsErrorMsg"> </div>
                                 <div class="mt-2 mb-5">
                                    <div class="p-bold">Operating Business Address</div>
                                    <div class="p-light">The operating business address is the same as the registered address.</div>
                                    <div class="mt-3 mb-3">
                                       <div class="spprt-box">
                                          <label class="spprt-label">
                                             <div class="spprt-inpt_div">Yes <input class="addressYes" type="radio"   id="hasKeyAccountManagerYes" name="hasKeyAccountManager"    value="1"
                                                @if($entity)
                                                {{ ($entity->oprting_addrs_same == 1) ? "checked" : ""}}
                                                @endif
                                                >
                                             </div>
                                          </label>
                                       </div>
                                       <div class="spprt-box">
                                          <label class="spprt-label">
                                             <div class="spprt-inpt_div">No <input  class="addressNo" type="radio"  id="hasKeyAccountManagerNo" name="hasKeyAccountManager" value="0"
                                                @if($entity)
                                                {{ ($entity->oprting_addrs_same == 0) ? "checked" : ""}}
                                                @endif
                                                >
                                             </div>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="address_same" >
                                       <div class="p-light">Please note that the operating business address should be the same as the address in the proof of address for your entity, which is provided on the Upload Document page.</div>
                                    </div>
                                    <div class="address_nosame"
                                    @if($entity)
                                    style=" {{ ($entity->oprting_addrs_same == 0) ? "display:block" : "display:none"}}"
                                    @endif
                                    >
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-floating mt-3 mb-3 w-100">
                                             <select id="eOperativeRegCountry" name="eOperativeRegCountry" placeholder="Jurisdiction country" class="w-100">
                                             @foreach($jo as $key => $value)
                                             <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             <option value="{{ $key }}"
                                             @if($entity)
                                             {{ $key == $entity->oprt_juris_cntry ? "selected"  : "" }}
                                             @endif
                                             >
                                             <span> {{ $value }} </span>
                                             </option>
                                             <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                             @endforeach
                                             </select>
                                             <span class="d-block oprtvCountryError "></span>
                                          </div>
                                       </div>

                                       <div class="col-md-12">
                                          <div class="form-floating w-100">
                                             <input type="text" class="form-control" placeholder="Street Address" id="eOperativeStreet" onKeyup="elearErrMsg(this);" name="eOperativeStreet" value="{{ $entity ? $entity->oprt_street_add : old('eOperativeStreet')}}">
                                             <label for="floatingInput">Street Address</label>
                                             <span class="d-block oprtvAddressStreetError "></span>
                                          </div>
                                       </div>
                                        <div class="col-md-6">
                                          <div class="form-floating">
                                             <input type="text" class="form-control" placeholder="City" id="eOperativeCity" onKeyup="elearErrMsg(this);" name="eOperativeCity" value="{{ $entity ? $entity->oprt_city : old('eOperativeCity')}}">
                                             <label for="floatingInput">City</label>
                                             <span class="d-block oprtvAddresscityError "></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-floating">
                                             <input type="text" class="form-control" placeholder="Zip Code" pattern="\d*" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="eOperativeZip" onKeyup="elearErrMsg(this);" name="eOperativeZip" value="{{ $entity ? $entity->oprt_postal_code : old('eOperativeZip')}}">
                                             <label for="floatingInput">Zip Code</label>
                                             <span class="d-block oprtvAddressZipError "></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div>
                                 <button class="btn-main-yellow w-auto" id="entityAddrs">
                                    <div class="_btn_text">
                                       Confirm
                                    </div>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <svg  viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                              </svg>
                              Source Declaration
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <span class="source_validationErr"></span>
                           <div class="accordion-body Source_of_Capital">
                              <div class="form-floating mt-3 mb-3 sourceDropdown">
                                 <!-- <input type="text" class="form-control" placeholder="Source of Capital" id="eSourceCap" name="eSourceCap" value="{{ $entity ?  $entity->cap_source : old('eSourceCap')}}">-->
                                 <label for="eSourceCap">Source of Capital</label>
                                 <select id="eSourceCap" name="eSourceCap" class="select"  placeholder="Source of Capital" multiple>
                                 @foreach($businessNatures as $businessNature)
                                 @if($businessNature->type == 2)
                                 <option value="{{ $businessNature->id }}"
                                 @if(!empty($entity->cap_source) || $entity->cap_source != NULL)
                                 {{  in_array($businessNature->id, json_decode($entity->cap_source))  ? 'selected' : '' }}
                                 @endif
                                 >  {{ $businessNature->name }}</option>
                                 @endif
                                 @endforeach
                                 </select>
                                 <p class="p-light">How your entity obtained your initial capital</p>
                                 <input type="hidden" name="_token" id="eSourcetoken" value="{{ csrf_token() }}">
                              </div>
                              <div class="form-floating mt-3 mb-3 sourceDropdown">
                                 <!--   <input type="select" class="form-control" placeholder="Source of Wealth" value="{{ $entity ?  $entity->wealth_source : old('eSourceWealth')}}">-->
                                 <label for="eSourceWealth">Source of Wealth</label>
                                 <select id="eSourceWealth" name="eSourceWealth" class="select"  placeholder="Source of Wealth"  multiple >
                                 @foreach($businessNatures as $businessNature)
                                 @if($businessNature->type == 3)
                                 <option value="{{ $businessNature->id }}"
                                 @if(!empty($entity->wealth_source) || $entity->wealth_source != NULL)
                                 {{  in_array($businessNature->id, json_decode($entity->wealth_source))  ? 'selected' : '' }}
                                 @endif
                                 >  {{ $businessNature->name }}</option>
                                 @endif
                                 @endforeach
                                 </select>
                                 <p class="p-light">The origin of the entire wealth of your entity</p>
                              </div>
                              <div class="form-floating mt-3 mb-3 sourceDropdown">
                                 <!-- <input type="text" class="form-control" placeholder="Source of Funds"  value="{{ $entity ?  $entity->fund_source : old('eSourceFund')}}">-->
                                 <label for="eSourceFund">Source of Funds</label>
                                 <select id="eSourceFund" name="eSourceFund" class="select"  placeholder="Source of Funds"  multiple>
                                 @foreach($businessNatures as $businessNature)
                                 @if($businessNature->type == 4)
                                 <option value="{{ $businessNature->id }}"
                                 @if(!empty($entity->fund_source) || $entity->fund_source != NULL)
                                 {{  in_array($businessNature->id, json_decode($entity->fund_source))  ? 'selected' : '' }}
                                 @endif
                                 >  {{ $businessNature->name }}</option>
                                 @endif
                                 @endforeach
                                 </select>
                                 <p class="p-light">Origin of the particular funds that are being used to fund your Wealthmark account</p>
                              </div>
                              <div>
                                 <button class="btn-main-yellow w-auto" id="sourceDeclr">
                                    <div class="_btn_text"> Confirm </div>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                              <svg  viewBox="0 0 24 24" fill="none" class="threedotsvg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                              </svg>
                              Additional Information
                           </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                           <div class="accordion-body">

                               <div class="row">
                                   <div class="col-md-12 mb-3">
                                        <label for="floatingInput">Business Nature</label>
                                         <div class="form-floating w-100 Business_Nature">

                                                 <select class="form-control scrollabletextbox w-100" id="ebusiNature" name="ebusiNature"  placeholder="Business Nature">
                                                 @foreach($businessNatures as $businessNature)
                                                 @if($businessNature->type == 1)
                                                 <option value=" {{ $businessNature->id }}"
                                                 @if($entity)
                                                 {{ $businessNature->id == $entity->entity_nature ? "selected" : "" }}
                                                 @endif
                                                 > {{ $businessNature->name }}</option>
                                                 @endif
                                                 @endforeach
                                                 </select>

                                        </div>
                                        <span class="mt-2 d-block ebusiNatureError"></span>
                                   </div>
                                   <div class="col-md-12 mb-3">
                                       <label for="appliPerpose">Purpose of Application</label>
                                 <textarea class="form-control" style="padding:3px !important; resize:none;" id="appliPerpose" rows="3" cols="3" name="appliPerpose" maxlength="55">{{ $entity ? trim($entity->appli_purpose) : old('appliPerpose')}}</textarea>
                                 <span class="mt-2 d-flex enAppliPerposeNameError"></span>
                                   </div>
                                   <div class="col-md-12">
                                        <div class="form-floating  mb-3 addi">
                                       <select id="eaddRegCountry" name="eaddRegCountry" placeholder="Jurisdiction country" class="w-100">
                                       @foreach($jo as $key => $value)
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                       <option value="{{ $key }}"
                                       @if($entity)
                                       {{ $key == $entity->listed_cntry ? "selected"  : "" }}
                                       @endif
                                       >
                                       <span> {{ $value }}</span>
                                       </option>
                                       <!--<img src="https://countryflagsapi.com/png/{{ $key }}" >-->
                                       @endforeach
                                       </select>
                                    </div>
                                    <span class="d-flex eaddRegCountryError"></span>
                                   </div>
                                   <div class="col-md-12 mb-3">
                                       <div class="form-floating ">
                                            <input type="text" class="form-control" pattern="\d*" maxlength="10"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="additnlEntityPhone" name="additnlEntityPhone" value="{{ $entity ? $entity->additional_mob : old('additnlEntityPhone')}}" placeholder="Phone Number">
                                            <label for="floatingInput">Mobile Number</label>
                                            <input type="hidden" name="_token" id="eAdditionaltoken" value="{{ csrf_token() }}">
                                         </div>
                                        <span class="d-flex enAdditnlEntityPhoneError"></span>
                                   </div>

                                   <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                 <input type="text" class="form-control" id="eCompany" name="eCompany" value="{{ $entity ? $entity->web_address : old('eCompany')}}" placeholder="Company Website (if have)">
                                 <label for="floatingInput">Company Website (if have)</label>
                                 <p class="p-light">Ensure the website you provide is accessible. If the company doesn't have a website, please put "N/A" here</p>
                                 <span class="d-flex eCompanyError"></span>
                              </div>
                                   </div>
                               </div>





                              <div class="input-number-group">
                                 <div class="mb-3">

                                 </div>

                              </div>


                              <div>
                                 <button class="btn-main-yellow w-auto" id="addtnlinfo" >
                                    <div class="_btn_text"> Confirm </div>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
