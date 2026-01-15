 @php
 if($entitydocs){

         if($entitydocs->checklist){
            $chk = explode('partiesDoc-', $entitydocs->checklist);
        }else{
                $chk[0] ='';
                $chk[1] ='';
        }
         
  }else{

        $chk[0] ='';
        $chk[1] ='';
  }
 @endphp
 
 <!--{{ print_r($chk[0]) }}-->
 <!-- {{ print_r($chk[1] )}}-->
  
 <div class="modal custom_modal" id="verify_process">
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
               <div id="ifdoc" class="validate_alrt"> </div>
               <div class="modal_heading">Here is your checklist of documents </div>
            </div>
            <div class="modal-body text-start" >
               <div class="style-dialog-body checklist_box">
                  <div class="checklist_header">
                     <div  class="checklist-flex">Select the document(s) you have prepared. Please note that you see optional documents and details of the required documents by downloading the checklist.</div>
                     <div class="print-btn">
                        <svg  viewBox="0 0 24 24" fill="none" class="print-svg">
                           <path d="M3 5.5A2.5 2.5 0 005.5 8H21v13H6a3 3 0 01-3-3V5.5z" fill="url(#wallet-g_svg__paint0_linear)"></path>
                           <path d="M5.5 3H21v5H5.5a2.5 2.5 0 010-5zM21 12v5h-5v-5h5z" fill="#76808F"></path>
                           <defs>
                              <linearGradient id="wallet-g_svg__paint0_linear" x1="12" y1="21" x2="12" y2="5.5" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        <div  class="print-text">Print Full List</div>
                     </div>
                  </div>
                  <div class="checklist-content-box">
                     <div  class="p-bold">Entity Documents</div>
                     <input type="checkbox"  checked hidden id="docs1" class="checkAll" name="" value="entityDoc-">
                    <div class="checklist-inner_list">
                     @foreach($entityDocs as $entityDoc)
                     @if($entityDoc->type == 1)
                    
                     
                        <div class="checklist-half-width">
                           <input type="checkbox" id="docs_{{$entityDoc->id}}"  class="{{ ( ($chk[0]) &&( strpos($chk[0], $entityDoc->id) !== false ) ) ? 'chk' : '' }}" onclick="checkboxpercent(this.id)" name="docs_{{$entityDoc->id}}" value="{{$entityDoc->id}}"  {{ (($chk[0]) && ( strpos($chk[0], $entityDoc->id) !== false )) ? "checked" : '' }}>
                           <label class="checklist-label" style="margin-left:10px !important">
                              <div  class="checklist-text"> {{ $entityDoc->name }}</div>
                           </label>
                        </div>
                     
                     
                     @endif
                     @endforeach
                     </div>
                     <div style="clear:both"></div>
                     <div  class="p-bold">Related Parties’ Documents</div>
                     <div class="mt-4">
                        <label class="checklist-fulll-width">
                           <input type="checkbox" hidden checked id="" class="" name="" value="partiesDoc-">
                           <div class="checklist-icon">
                              @foreach($entityDocs as $entityDoc)
                              @if($entityDoc->type == 2)
                              <input type="checkbox"  id="docs2" style="display:none"  class="checkAll " name="docs[]" value="{{$entityDoc->id}}" {{  ( ($chk[1]) && (strpos($chk[1], $entityDoc->id) !== false) ) ? "checked" : ''  }} >
                              @endif
                              @endforeach
                              <input type="checkbox"  id="docs2" class="checkAll {{ ( strpos($chk[1], $entityDoc->id) !== false ) ? 'chk' : '' }}"    onclick="checkboxpercent(this.id) " name="" value="0"    {{ ( ($chk[1]) && (strpos($chk[1], $entityDoc->id) !== false ) ) ? "checked" : '' }}   >
                           </div>
                           <div  class="checklist-text">Identity document ( 
                              @foreach($entityDocs as $entityDoc) 
                              @if($entityDoc->type == 2 && $entityDoc->subtype == 1) 
                              {{ $entityDoc->name }}
                              @endif       
                              @endforeach  
                              ) or Proof of Address  ( 
                              @foreach($entityDocs as $entityDoc) 
                              @if($entityDoc->type == 2 && $entityDoc->subtype == 2)  
                              {{ $entityDoc->name }}  
                              @endif    
                              @endforeach   
                              ) of significant related parties.
                           </div>
                        </label>
                     </div>
                  </div>
                  <div class="checklist-footer">
                     <div  class="color-lightgray">
                        <div  class="large-text">0</div>
                        % of your documents prepared
                     </div>
                     <button  class="btn-main-yellow w-auto" class="checklistData" id="btn_basic_detail">
                        <div class="_btn_text">Start</div>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>