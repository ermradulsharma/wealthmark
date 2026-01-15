
    <div id="Fiat_Enablement_div_main-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-10">
            <div class="main-content-box">
              <div class="rightbox w-100">
                <div class="right-inner w-100">
                     <form action="" id="fiet_form" >
                  <div class="backEntityVerificationBtn">
                    <svg xmlns="" viewBox="0 0 24 24" fill="none" class="">
                      <path d="M16.414 18.586L15 20l-8-8 8-8 1.414 1.414L9.828 12l6.586 6.586z" fill="#76808F"></path>
                    </svg>
                    <div class="">Entity Verification</div>
                  </div>
                  
                      <div class="h1 mt-4">Fiat Enablement (if needed)</div>
                      
                      <div class="mt-3 mb-3" >
                        
                             
                             <div class="p-light text-justify">Please provide the required information and files on this page if your entity needs Fiat deposits and withdrawals. The deposit/withdrawal limit may vary based on the documents you provide.</div>
                            <div class="p-light mt-3 text-justify">Please note that Fiat Enablement is not mandatory for enterprise verification. You can apply for Fiat Enablement at any time after verification is completed.</div>
                            
                         
                         
                     </div>
                     
                       <div class="mt-3">
                          <div class="dropdown-theme">
                          <div class="p-light text-justify mb-2">Expected monthly fiat deposit/withdrawal volume (in EUR)</div>
                             <select class="selectpicker w-100" name="fiat_dpstWithdwl">
                                <option  value="EUR <$100,000" {{ ($entity && ($entity->fiat_dpstWithdwl == 'EUR <$100,000' )) ? 'selected' : '' }} >EUR <$100,000</option>
                                <option value="EUR $100,000 - $999,999" {{ ($entity && ($entity->fiat_dpstWithdwl == 'EUR $100,000 - $999,999' )) ? 'selected' : '' }} >EUR $100,000 - $999,999</option>
                                <option value="EUR $1,000,000 - $4,999,999" {{ ($entity && ($entity->fiat_dpstWithdwl == 'EUR $1,000,000 - $4,999,999' )) ? 'selected' : '' }} >EUR $1,000,000 - $4,999,999</option>
                                <option value="EUR >$5,000,000" {{ ($entity && ($entity->fiat_dpstWithdwl == 'EUR >$5,000,000' )) ? 'selected' : '' }} >EUR >$5,000,000</option>
                              
                             </select>
                          </div>
                     </div>
                     
                           @php
                          if($entity){
                                        if($entity->fiat_currencies != NULL ){
                                           $fietimgs = explode(',' , $entity->fiat_currencies); 
                                       }else{
                                       $fietimgs = ''; 
                                       }
                            }   
                        @endphp
                     <div class="mt-3">
                         
                            <div class="p-light text-justify mb-2">Which fiat currencies do you intend to use?</div>
                            <div class="dropdown">
                              <label class="dropdown-label border rounded">Select Options</label>
                              
                              <div class="dropdown-list border p-0 m-0 shadow-sm">
                                
                                <div class="checkbox p-2">
                <input type="checkbox" name="dropdown_group[]" value="BRL" class="check checkbox-custom" id="checkbox-custom_01" {{ ($fietimgs != '' && (in_array("BRL", $fietimgs) == true )) ? 'checked' : '' }}  />
                                  <label for="checkbox-custom_01" class="checkbox-custom-label">BRL</label>
                                </div>
                                
                                <div class="checkbox p-2">
                                  <input type="checkbox" name="dropdown_group[]" value="USD" class="check checkbox-custom" id="checkbox-custom_02" {{ ($fietimgs != '' && (in_array("USD", $fietimgs) == true )) ? 'checked' : '' }}/>
                                  <label for="checkbox-custom_02" class="checkbox-custom-label">USD</label>
                                </div>
                                
                                <div class="checkbox p-2">
                                  <input type="checkbox" name="dropdown_group[]" value="GBP" class="check checkbox-custom" id="checkbox-custom_03" {{ ($fietimgs != '' && (in_array("GBP", $fietimgs) == true )) ? 'checked' : '' }} />
                                  <label for="checkbox-custom_03" class="checkbox-custom-label">GBP</label>
                                </div>
                                
                                <div class="checkbox p-2">
                                  <input type="checkbox" name="dropdown_group[]" value="EUR" class="check checkbox-custom" id="checkbox-custom_04" {{ ($fietimgs != '' && (in_array("EUR", $fietimgs) == true) ) ? 'checked' : '' }} />
                                  <label for="checkbox-custom_04" class="checkbox-custom-label">EUR</label>
                                </div>
                                <div class="checkbox p-2">
                                  <input type="checkbox" name="dropdown_group[]" value="AUD" class="check checkbox-custom" id="checkbox-custom_05" {{ ($fietimgs != '' && (in_array("AUD", $fietimgs) == true )) ? 'checked' : '' }}/>
                                  <label for="checkbox-custom_05" class="checkbox-custom-label">AUD</label>
                                </div>
                              </div>
                            </div>
  

                     </div>
                     
                   
                     
              <!--<span class="FE_curreny-selected"> GBP</span>-->
              <!--<span class="FE_curreny-selected"> GBP</span>-->
              <!--<span class="FE_curreny-selected"> GBP</span>-->
              <!--<span class="FE_curreny-selected"> GBP</span>-->
                      <div class="fiet_errmsg "></div>
                                              <!--<div class="p-light text-justify mb-2">ASIC Document</div>-->
                       <div class="asicDoc_box">
                                @if($entity && ($entity->ASIC_doc != NULL))
                                      
                                                 @php
                                                 
                                                 $ASICimgString = explode(',', $entity->ASIC_doc);
                                                 
                                                    @endphp
                                    
                                                  @foreach($ASICimgString as $perASIC )
                                                  
                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perASIC) }}" alt="" title="">
                                                  @endforeach
                            @endif
                       </div>
                       <!--<hr>-->
                       <!--<div class="p-light text-justify mb-2">CNPJ Document </div>-->
                       <div class="cnpjDoc_box"> 
                             @if($entity && ($entity->CNPJ_doc != NULL))
                                      
                                                 @php
                                                 
                                                 $CNPJimgString = explode(',', $entity->CNPJ_doc);
                                                 
                                                    @endphp
                                    
                                                  @foreach($CNPJimgString as $perCNPJ )
                                                  
                                                  <img class="img-thumbnail " width="100px" src="{{ url('storage/app/'. $perCNPJ) }}" alt="" title="">
                                                  @endforeach
                            @endif
                       </div>
                      

                     <div class="mt-3 cnpjNum " style="{{ ($entity && ($entity->CNPJ_number != NULL)) ? 'display:block' : 'display:none' }}">
                         <div class="p-light text-justify mb-2">Input CNPJ number</div>
                         <input type="text" id="cnpjNum" name="cnpjNum" value="{{ ($entity && ($entity->CNPJ_number != NULL)) ? $entity->CNPJ_number : old('cnpjNum') }}" class="form-control" />
                     </div>
                     
                     <div class="upld-btn-inner mt-3 asicDoc" style="{{ ($entity && ($entity->CNPJ_doc != NULL)) ? 'display:block' : 'display:none' }}">
                          <div class="p-light text-justify mb-2">ASIC Document</div>
                           <div class="file-upld-status mt-3 " id="asicDoc_file"> </div>
                                <button type="button" class="generate-btn">
                                  <input type="file" name="asicDoc[]" accept=".pdf,.jpg,.jpeg,.png" id="asicDoc" onChange="asicDoc_caption(this.id);" multiple>
                                  <i class="bi bi-upload"></i> Upload </button>
                    </div>
                     <div class="upld-btn-inner mt-3 cnpjDoc" style="{{ ($entity && ($entity->ASIC_doc != NULL)) ? 'display:block' : 'display:none' }}">
                          <div class="p-light text-justify mb-2">CNPJ Document</div>
                            <div class="file-upld-status mt-3 " id="cnpjDoc_file"> </div>
                                <button type="button" class="generate-btn">
                                  <input type="file" name="cnpjDoc[]" accept=".pdf,.jpg,.jpeg,.png" id="cnpjDoc" onChange="cnpjDoc_caption(this.id);" multiple>
                                  <i class="bi bi-upload"></i> Upload </button>
                    </div>
                     
                 
                  <div class="upld-btn-inner mt-3">
                                  <button type="button" class="generate-btn active w-auto" onClick="uploadfiatDetail({{ Auth::user()->id }}, 'fiet')" >
                                    <i class="bi bi-check-lg "></i>
                                    <span> Confirm </span>
                                  </button>
                   </div>
                   </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>