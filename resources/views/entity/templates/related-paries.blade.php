<div class="main-content-box">
            <div class="leftbox">
               <div class="left-inner">
                  <div class="border-box"></div>
                  <div class="left-footer"></div>
               </div>
            </div>
            <div class="rightbox">
               <div class="right-inner">
                  <div>
                       <div class="backEntityVerificationBtn">
                          <svg xmlns="" viewBox="0 0 24 24" fill="none" class="">
                                  <path d="M16.414 18.586L15 20l-8-8 8-8 1.414 1.414L9.828 12l6.586 6.586z" fill="#76808F"></path>
                              </svg>
                              <div data-bn-type="text" class="" >Entity Verification</div>

                        </div>
                     <div class="h1 p-bold  mt-3 mb-5">Related Parties</div>
                     <div class="mt-2">
                        <!-------------------------------------- start all models head section where model are called ------------------------>
                        <div class="accordion">
                           <!--start directors model head -->
                           <div class="accordion__header is-active">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">

                                 Director(s) or Equivalent Persons
                              </h2>
                              <span class="accordion__toggle"></span>
                           </div>
                           <div class="accordion__body is-active">
                              <div class="mt-3">
                                 <div class="p-light">Please add the information of all directors here. </div>
                                 <div class="add-detail">
                                    <div class="add-detail-inner">
                                       @if( count($related_partiesPartners) > 0)
                                           @foreach($related_partiesPartners as $partner)
                                               @if($partner->companyID == NULL)
                                               <div class="add-detail-inner-box">
                                                  <div class="added_user">
                                                     <div class="added_user-inner">
                                                        <div class="delete-btn-div">
                                                           <svg  viewBox="0 0 24 24" fill="none" class="delete-user-btn modal-trigger" data-modal="delete_box_modal_{{ $partner->id }}"  id="{{ $partner->id }}" onClick='deleteDirtorBlock(this)' >
                                                              <path d="M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z" fill="currentColor"></path>
                                                           </svg>
                                                        </div>
                                                        <div class="added_user-icon-div">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="added_user-icon">
                                                              <path fill="#76808F" d="M36 54h24v30H36z"></path>
                                                              <path d="M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z" fill="url(#partner-account-light_svg__paint0_linear_24482_26505)"></path>
                                                              <path d="M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z" fill="url(#partner-account-light_svg__paint1_linear_24482_26505)"></path>
                                                              <path d="M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z" fill="#E6E8EA"></path>
                                                              <defs>
                                                                 <linearGradient id="partner-account-light_svg__paint0_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="partner-account-light_svg__paint1_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <div  class="user_des-div">
                                                              <div  class="user_detail">
                                                                  @if( $partner->partnerType == 1)
                                                                  {{ $partner->firstName.' '.$partner->lastName }}
                                                                  @else
                                                                  {{ $partner->companyName }}

                                                                  @endif

                                                                  </div>
                                                              <svg  viewBox="0 0 24 24" fill="none" class="edit_user modal-trigger" onclick="editCompORDirtr({{ $partner->id }}, {{ $partner->partnerType}})" data-modal="added_user_modal_{{ $partner->id }}">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z" fill="currentColor"></path>
                                                              </svg>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="modal custom_modal" id="delete_box_modal_{{ $partner->id }}" >
                                                     <div class="modal-sandbox"></div>
                                                     <div class="modal-box max-width-350px">
                                                        <div class="text-center p-3">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="warning-icon">
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z" fill="url(#general-warning_svg__paint0_linear_22059_28207)"></path>
                                                              <path d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z" fill="url(#general-warning_svg__paint1_linear_22059_28207)"></path>
                                                              <path d="M45 66h6v-6h-6v6zM51 54V30h-6v24h6z" fill="#14151A"></path>
                                                              <defs>
                                                                 <linearGradient id="general-warning_svg__paint0_linear_22059_28207" x1="8" y1="48" x2="102.5" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B" stop-opacity="0"></stop>
                                                                    <stop offset="1" stop-color="#F0B90B"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="general-warning_svg__paint1_linear_22059_28207" x1="77" y1="48" x2="19" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B"></stop>
                                                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <p>Are you sure you want to delete this people?</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between p-4 delete-modal-btn">
                                                           <button class="modal_btn_theme" onClick='confirmDelete({{ $partner->id }})' >Delete</button>
                                                           <button class="btn bg-whitesmoke" onClick='cancelDelete({{ $partner->id }})'>Cancel </button>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                               @endif
                                           @endforeach
                                       @endif

                                       <div class="add-detail-inner-box addDirBtnDiv">
                                          <div class="add-detail-modal modal-trigger " data-modal="Add-Director">
                                             <div class="add-detail-plus">
                                                <svg  viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                                   <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                                </svg>
                                                <div class="text">Add</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="add-detail">
                                 <button type="button" class="active btn-main-yellow w-auto" onClick="confirmBusinessTypes( {{ Auth::user()->id }} , 1);">
                                    <div>
                                       <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                       </svg>
                                       Confirm
                                    </div>
                                 </button>
                                 <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                 </button>
                              </div>
                              <div class="divider-line"></div>
                           </div>
                           <!--ends directors model head -->
                           <!--start  Ultimate Beneficial Owner(s) (if any) model head -->
                           <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                                 Ultimate Beneficial Owner(s) (if any)
                              </h2>
                              <span class="accordion__toggle"></span>
                           </div>
                           <div class="accordion__body">
                              <div class="mt-3">
                                 <div class="p-light">Please add the information of all directors here. </div>
                                 <div class="add-detail">
                                    <div class="add-detail-inner">
                                         @if( count($relatedParties_beneficialOwner) > 0)
                                           @foreach($relatedParties_beneficialOwner as $beneficialOwners)
                                               <div class="add-detail-inner-box">
                                                  <div class="added_user">
                                                     <div class="added_user-inner">
                                                        <div class="delete-btn-div">
                                                           <svg  viewBox="0 0 24 24" fill="none" class="delete-user-btn modal-trigger" data-modal="delete_box_modal_{{ $beneficialOwners->id }}"  id="{{ $beneficialOwners->id }}" onClick='deleteDirtorBlock(this)' >
                                                              <path d="M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z" fill="currentColor"></path>
                                                           </svg>
                                                        </div>
                                                        <div class="added_user-icon-div">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="added_user-icon">
                                                              <path fill="#76808F" d="M36 54h24v30H36z"></path>
                                                              <path d="M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z" fill="url(#partner-account-light_svg__paint0_linear_24482_26505)"></path>
                                                              <path d="M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z" fill="url(#partner-account-light_svg__paint1_linear_24482_26505)"></path>
                                                              <path d="M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z" fill="#E6E8EA"></path>
                                                              <defs>
                                                                 <linearGradient id="partner-account-light_svg__paint0_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="partner-account-light_svg__paint1_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <div  class="user_des-div">
                                                              <div  class="user_detail">

                                                                  {{ $beneficialOwners->firstName.' '.$beneficialOwners->lastName }}

                                                                  </div>
                                                              <svg  viewBox="0 0 24 24" fill="none" class="edit_user modal-trigger" onclick="editSubmittedOwner( {{ $beneficialOwners->id }}, {{ $beneficialOwners->partnerId}})" data-modal="added_user_modal_{{ $beneficialOwners->id }}">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z" fill="currentColor"></path>
                                                              </svg>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="modal custom_modal" id="delete_box_modal_{{ $beneficialOwners->id }}" >
                                                     <div class="modal-sandbox"></div>
                                                     <div class="modal-box max-width-350px">
                                                        <div class="text-center p-3">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="warning-icon">
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z" fill="url(#general-warning_svg__paint0_linear_22059_28207)"></path>
                                                              <path d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z" fill="url(#general-warning_svg__paint1_linear_22059_28207)"></path>
                                                              <path d="M45 66h6v-6h-6v6zM51 54V30h-6v24h6z" fill="#14151A"></path>
                                                              <defs>
                                                                 <linearGradient id="general-warning_svg__paint0_linear_22059_28207" x1="8" y1="48" x2="102.5" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B" stop-opacity="0"></stop>
                                                                    <stop offset="1" stop-color="#F0B90B"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="general-warning_svg__paint1_linear_22059_28207" x1="77" y1="48" x2="19" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B"></stop>
                                                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <p>Are you sure you want to delete this people?</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between p-4 delete-modal-btn">
                                                           <button class="modal_btn_theme" onClick='confirmBeneficialOwnerDelete({{ $beneficialOwners->id }})' >Delete</button>
                                                           <button class="btn bg-whitesmoke" onClick='cancelDelete({{ $beneficialOwners->id }})'>Cancel </button>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>


                                           @endforeach
                                        @endif

                                       <div class="add-detail-inner-box addsubmittedOwner">
                                          <div class="add-detail-modal modal-trigger" data-modal="Add-Ultimate-Beneficial">
                                             <div class="add-detail-plus">
                                                <svg  viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                                   <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                                </svg>
                                                <div class="text">Add</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="add-detail">
                                 <button type="button" class="active btn-main-yellow w-auto" onClick="confirmBusinessTypes( {{ Auth::user()->id }} , 2);">
                                    <div>
                                       <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                       </svg>
                                       Confirm
                                    </div>
                                 </button>
                                 <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                 </button>
                              </div>
                              <div class="divider-line"></div>
                           </div>
                           <!--ends  Ultimate Beneficial Owner(s) (if any) model head -->
                           <!------------------  starts Significant Controller(s) ---------->
                           <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                                 Significant Controller(s)
                              </h2>
                              <span class="accordion__toggle"></span>
                           </div>
                           <div class="accordion__body">
                              <div class="mt-3">
                                          <div class="p-light">
                                         <p class="p-bold"> Please add the information of all significant controllers here.</p>
                                         <p class="p-light">  Control Person is defined as :</p>
                                         <label class="label-text">   1) Any person able to exercise significant or effective influence over the management of the company or partnership who are neither a shareholder nor director (e.g. CEO)</label>
                                         <label class="label-text">     2) Any person entitled to or controls directly or indirectly not less than a 25% share of the capital or profits of the company or partnership</label>
                                         <label class="label-text">    3) Any person directly or indirectly entitled to exercise or control the exercise of more than 25% of the voting power in the company or who is able to exercise significant influence over the management of the company</label>
                                        </div>
                                <div class="add-detail">
                                    <div class="add-detail-inner">
                                         @if( count($relatedParties_significantController) > 0)
                                           @foreach($relatedParties_significantController as $significantController)
                                               <div class="add-detail-inner-box">
                                                  <div class="added_user">
                                                     <div class="added_user-inner">
                                                        <div class="delete-btn-div">
                                                           <svg  viewBox="0 0 24 24" fill="none" class="delete-user-btn modal-trigger" data-modal="delete_box_modal_{{ $significantController->id }}"  id="{{ $significantController->id }}" onClick='deleteDirtorBlock(this)' >
                                                              <path d="M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z" fill="currentColor"></path>
                                                           </svg>
                                                        </div>
                                                        <div class="added_user-icon-div">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="added_user-icon">
                                                              <path fill="#76808F" d="M36 54h24v30H36z"></path>
                                                              <path d="M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z" fill="url(#partner-account-light_svg__paint0_linear_24482_26505)"></path>
                                                              <path d="M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z" fill="url(#partner-account-light_svg__paint1_linear_24482_26505)"></path>
                                                              <path d="M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z" fill="#E6E8EA"></path>
                                                              <defs>
                                                                 <linearGradient id="partner-account-light_svg__paint0_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="partner-account-light_svg__paint1_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <div  class="user_des-div">
                                                              <div  class="user_detail">

                                                                  {{ $significantController->firstName.' '.$significantController->lastName }}

                                                                  </div>
                                                              <svg  viewBox="0 0 24 24" fill="none" class="edit_user modal-trigger" onclick="editSubmittedSignificant( {{ $significantController->id }}, {{ $significantController->partnerId}})" data-modal="added_user_modal_{{ $significantController->id }}">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z" fill="currentColor"></path>
                                                              </svg>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="modal custom_modal" id="delete_box_modal_{{ $significantController->id }}" >
                                                     <div class="modal-sandbox"></div>
                                                     <div class="modal-box max-width-350px">
                                                        <div class="text-center p-3">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="warning-icon">
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z" fill="url(#general-warning_svg__paint0_linear_22059_28207)"></path>
                                                              <path d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z" fill="url(#general-warning_svg__paint1_linear_22059_28207)"></path>
                                                              <path d="M45 66h6v-6h-6v6zM51 54V30h-6v24h6z" fill="#14151A"></path>
                                                              <defs>
                                                                 <linearGradient id="general-warning_svg__paint0_linear_22059_28207" x1="8" y1="48" x2="102.5" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B" stop-opacity="0"></stop>
                                                                    <stop offset="1" stop-color="#F0B90B"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="general-warning_svg__paint1_linear_22059_28207" x1="77" y1="48" x2="19" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B"></stop>
                                                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <p>Are you sure you want to delete this people?</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between p-4 delete-modal-btn">
                                                           <button class="modal_btn_theme" onClick='confirmSignificantControllerDelete({{ $significantController->id }})' >Delete</button>
                                                           <button class="btn bg-whitesmoke" onClick='cancelDelete({{ $significantController->id }})'>Cancel </button>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>


                                           @endforeach
                                        @endif



                                        <div class="add-detail-inner-box addsubmittedSignificant">
                                             <div class="add-detail-modal modal-trigger" data-modal="Add_Significant_Controller">
                                                <div class="add-detail-plus">
                                                   <svg  viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                                      <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                                   </svg>
                                                   <div class="text">Add</div>
                                                </div>
                                             </div>
                                         </div>
                                        </div>
                                    </div>



                              </div>

                              <div class="add-detail">
                                 <button type="button" class="active btn-main-yellow w-auto" onClick="confirmBusinessTypes( {{ Auth::user()->id }} , 3);">
                                    <div>
                                       <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                       </svg>
                                       Confirm
                                    </div>
                                 </button>
                                 <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                 </button>
                              </div>
                              <div class="divider-line"></div>
                           </div>
                           <!------------------  ends Significant Controller(s) ---------->
                           <!------------------  starts Authorised Account Trader Controller(s) ---------->
                           <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                                 Authorised Account Trader
                              </h2>
                              <span class="accordion__toggle"></span>
                           </div>
                           <div class="accordion__body">
                              <div class="mt-3">
                                  <div class="p-light">
                                 <p class="p-light">  Please add the information of all authorized account traders. For Wealthmark Pay merchants/partners, we need authorized signatories/person information.</p>
                                 </div>
                                  <div class="add-detail">
                                    <div class="add-detail-inner">

                                         @if( count($relatedParties_accountTrader) > 0)
                                           @foreach($relatedParties_accountTrader as $accountTrader)
                                               <div class="add-detail-inner-box">
                                                  <div class="added_user">
                                                     <div class="added_user-inner">
                                                        <div class="delete-btn-div">
                                                           <svg  viewBox="0 0 24 24" fill="none" class="delete-user-btn modal-trigger" data-modal="delete_box_modal_{{ $accountTrader->id }}"  id="{{ $accountTrader->id }}" onClick='deleteDirtorBlock(this)' >
                                                              <path d="M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z" fill="currentColor"></path>
                                                           </svg>
                                                        </div>
                                                        <div class="added_user-icon-div">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="added_user-icon">
                                                              <path fill="#76808F" d="M36 54h24v30H36z"></path>
                                                              <path d="M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z" fill="url(#partner-account-light_svg__paint0_linear_24482_26505)"></path>
                                                              <path d="M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z" fill="url(#partner-account-light_svg__paint1_linear_24482_26505)"></path>
                                                              <path d="M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z" fill="#E6E8EA"></path>
                                                              <defs>
                                                                 <linearGradient id="partner-account-light_svg__paint0_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="partner-account-light_svg__paint1_linear_24482_26505" x1="48" y1="84" x2="48" y2="54" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#929AA5"></stop>
                                                                    <stop offset="1" stop-color="#76808F"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <div  class="user_des-div">
                                                              <div  class="user_detail">

                                                                  {{ $accountTrader->firstName.' '.$accountTrader->lastName }}

                                                                  </div>
                                                              <svg  viewBox="0 0 24 24" fill="none" class="edit_user modal-trigger" onclick="editSubmittedAccountTrader( {{ $accountTrader->id }}, {{ $accountTrader->partnerId}})" data-modal="added_user_modal_{{ $accountTrader->id }}">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z" fill="currentColor"></path>
                                                              </svg>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                                  <div class="modal custom_modal" id="delete_box_modal_{{ $accountTrader->id }}" >
                                                     <div class="modal-sandbox"></div>
                                                     <div class="modal-box max-width-350px">
                                                        <div class="text-center p-3">
                                                           <svg  viewBox="0 0 96 96" fill="none" class="warning-icon">
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z" fill="url(#general-warning_svg__paint0_linear_22059_28207)"></path>
                                                              <path d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z" fill="url(#general-warning_svg__paint1_linear_22059_28207)"></path>
                                                              <path d="M45 66h6v-6h-6v6zM51 54V30h-6v24h6z" fill="#14151A"></path>
                                                              <defs>
                                                                 <linearGradient id="general-warning_svg__paint0_linear_22059_28207" x1="8" y1="48" x2="102.5" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B" stop-opacity="0"></stop>
                                                                    <stop offset="1" stop-color="#F0B90B"></stop>
                                                                 </linearGradient>
                                                                 <linearGradient id="general-warning_svg__paint1_linear_22059_28207" x1="77" y1="48" x2="19" y2="48" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#F0B90B"></stop>
                                                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                                                 </linearGradient>
                                                              </defs>
                                                           </svg>
                                                           <p>Are you sure you want to delete this people?</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between p-4 delete-modal-btn">
                                                           <button class="modal_btn_theme" onClick='confirmAccountTraderDelete({{ $accountTrader->id }})' >Delete</button>
                                                           <button class="btn bg-whitesmoke" onClick='cancelDelete({{ $accountTrader->id }})'>Cancel </button>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>


                                           @endforeach
                                        @endif


                                 <div class="add-detail-inner-box addsubmittedAccountTrader ">
                                 <div class="add-detail-modal modal-trigger" data-modal="Add_Authorised_Account">
                                    <div class="add-detail-plus">
                                       <svg  viewBox="0 0 24 24" fill="none" class="svg-plus-icon">
                                          <path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path>
                                       </svg>
                                       <div class="text">Add</div>
                                    </div>
                                 </div>
                                </div>
                              </div>
                              </div>




                              </div>



                              <div class="add-detail">
                                 <button type="button" class="active btn-main-yellow w-auto" onClick="confirmBusinessTypes( {{ Auth::user()->id }} , 4);">
                                    <div>
                                       <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                                       </svg>
                                       Confirm
                                    </div>
                                 </button>
                                 <button type="button" class="btn-no-border">
                                    <div>Save as Draft </div>
                                 </button>
                              </div>
                              <div class="divider-line"></div>
                           </div>
                           <!------------------  ends Authorised Account Trader Controller(s) ---------->
                           <!------------------  starts Main Trader Verification Controller(s) ---------->
                           <div class="accordion__header">
                              <h2>
                                <img src="{{ asset('assets/img/threedot-blue.png') }}" class="threedotsvg" alt="three dot" title="wealthmark.io">
                                 Main Trader Verification
                              </h2>
                              <span class="accordion__toggle"></span>
                           </div>
                           <div class="accordion__body">
                              <div class="divider-line"></div>
                           </div>



                           <!------------------  ends Main Trader Verification Controller(s) ---------->


                           <!------------------  starts Upload Letter of Authorization Controller(s) ---------->
                           @include('entity.templates.uploadAuthLetter')

                           <!------------------  ends Upload Letter of Authorization Controller(s) ---------->


                        </div>
                        <!-------------------------------------- end all models head section where model are called ------------------------>
                     </div>

                  </div>
                   <div class="mt-3">
                        <button class="btn-main-yellow active">
                           <div class="_btn_text" id="relatedPartiesCompleted" onClick="countCompletedSections()"> Complete</div>
                        </button>
                     </div>
               </div>
            </div>
         </div>
