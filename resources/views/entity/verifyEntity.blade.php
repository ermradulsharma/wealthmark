<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.auth_page_cssLink')

      <!------------------------Country flag dropdown css------------------------------->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/css/verifyEntity.css') }}">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
      <style>
          .max-width-350px{
              max-width:350px !important;
          }
                    .max-width-850px{
              max-width:850px !important;
          }
          .input-absolute{
              position: absolute;
              width: 100%;
              height: 100%;
              opacity: 0;
              cursor: pointer;
          }
      .custom_modal .dropdown.bootstrap-select ul.dropdown-menu.inner a.dropdown-item,  .addi .dropdown.bootstrap-select ul.dropdown-menu.inner a.dropdown-item, .address_nosame .dropdown.bootstrap-select ul.dropdown-menu.inner a.dropdown-item  , .eRegCountrydrp .dropdown.bootstrap-select ul.dropdown-menu.inner a.dropdown-item, .Source_of_Capital .dropdown.bootstrap-select ul.dropdown-menu.inner a.dropdown-item {
     white-space: nowrap !important;
      display: flex;
        align-items: center;
    justify-content: start;
}
    .addi .dropdown.bootstrap-select .dropdown-menu ,  .address_nosame .dropdown.bootstrap-select .dropdown-menu , .eRegCountrydrp .dropdown.bootstrap-select .dropdown-menu ,.Source_of_Capital .dropdown.bootstrap-select .dropdown-menu ,.Business_Nature .dropdown.bootstrap-select .dropdown-menu{
           padding:0px !important;
           max-width:100% !important;
           width:100% !important;

       }
    .dropdown.bootstrap-select .dropdown-menu    {
           max-width:100% !important;
           width:100% !important;
       }
       .bootstrap-select .dropdown-toggle:focus, .bootstrap-select>select.mobile-device:focus+.dropdown-toggle{
               outline: thin dotted #333!important;
    outline: 0px auto -webkit-focus-ring-color!important;
    outline-offset: -2px;
       }

       .Business_Nature .dropdown.bootstrap-select{
           padding:0px !important;
       }

       .form-floating.Business_Nature > .dropdown.form-control > .btn{
           padding: 0.5rem 0.75rem !important;
       }
      .form-floating.Business_Nature .bootstrap-select .dropdown-toggle:after{
          top:20px !important;
      }
      .rightbox .bootstrap-select .dropdown-menu li:nth-child(even) {
          background:whitesmoke !important;

      }

.upld-btn-inner .thumbnails, .upl-doc-inner.preview-frontDocIndi .thumbnails{
    max-height:200px;
}


      </style>
   </head>
   <body class="bg-white">
      <?php
         function getClientIP(){
           if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
             $ip = $_SERVER['HTTP_CLIENT_IP'];
           } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           } else {
             $ip = $_SERVER['REMOTE_ADDR'];
           }
           return $ip;
         }

         $ipaddress = getClientIP();
         function ip_details($ip) {
          // $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
          $json = file_get_contents("https://ipinfo.io/{$ip}/json?token=ebaa850199a396");
           $details = json_decode($json, true);
           return $details;
         }
         $details = ip_details($ipaddress);
         $country_code=$details['country'];
         //print_r($country_code);
         $url = 'http://country.io/names.json';
         $json = file_get_contents($url);
         $jo = json_decode($json);
         // print_r($jo);
         ?>
      <div id="first" class="main-content-box"  >
         <div class="leftbox">
             @include('entity.leftSectionTemplate.entityLeftSection')
         </div>
         <div class="rightbox" >
            <div class="right-inner">
               <div class="_des_box">
                  <svg width="64" height="64" viewBox="0 0 24 24" fill="none" >
                     <rect x="2" y="10" width="6" height="10" fill="#76808F"></rect>
                     <rect x="16" y="8" width="6" height="12" fill="#76808F"></rect>
                     <rect width="8" height="17" transform="matrix(1 0 0 -1 8 20)" fill="url(#paint108_1_linear)"></rect>
                     <path d="M10 9L12 7L14 9L12 11L10 9Z" fill="#76808F"></path>
                     <defs>
                        <linearGradient id="paint108_1_linear" x1="4" y1="0" x2="4" y2="17" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#F0B90B"></stop>
                           <stop offset="1" stop-color="#F8D33A"></stop>
                        </linearGradient>
                     </defs>
                  </svg>
               </div>
               <div class="_des_box">
                  <div class="_title">Entity Verification</div>
               </div>
               <div class="_subtitle">Account limits after Verification</div>
               <div class="_right_main_content">
                  <div class="_des_list_box">
                     <div class="_div_box">
                        <svg  viewBox="0 0 24 24" fill="none" class="_svg_icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                        </svg>
                        <div class="_des">Unlimited crypto deposit</div>
                     </div>
                  </div>
                  <div class="_des_list_box">
                     <div class="_div_box">
                        <svg  viewBox="0 0 24 24" fill="none" class="_svg_icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                        </svg>
                        <div class="_des">8000000 BUSD crypto withdrawal limit every 24 hours</div>
                     </div>
                  </div>
                  <div class="_des_list_box">
                     <div class="_div_box">
                        <svg  viewBox="0 0 24 24" fill="none" class="_svg_icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                        </svg>
                        <div class="_des">
                           <a type="link" href="/en/vip-institutional-services" target="_blank" class="css-1e3kx25">Institutional &amp; VIP Services</a>
                        </div>
                     </div>
                  </div>
                  <div class="_des_list_box">
                     <div class="_div_box">
                        <svg  viewBox="0 0 24 24" fill="none" class="_svg_icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path>
                        </svg>
                        <div class="_des">Fiat deposit/withdrawal (optional)</div>
                     </div>
                  </div>
               </div>
               <div class="btn-div mt-5">
                  <button type="button" id="verify_btn" class="btn-main-yellow">Verify</button>
               </div>
            </div>
         </div>
      </div>
      <div id="second_div" style="display:none">
         <div class="main-content-box">
            <div class="leftbox">

                 @include('entity.leftSectionTemplate.entityLeftSection')
            </div>
            <div class="rightbox" >

               <div class="right-inner">
                  <div class="_des_box">
                     <div class="_title">Start your entity application</div>
                     <div class="_subtitle">Answer a few questions below to see what you need to prepare</div>
                  </div>
                  <div class="_right_main_content">
                     <form action="#"  class="w-100 h-100" >
                        <div class="main_content_inner">
                           <div class="_des_box">
                              <div class="_mb-40px">
                                 <div class="_border_box">
                                    <div class="_des_heading">What is the name of your entity?</div>
                                    <div class="form-floating mt-3 mb-3">
                                       <input type="text" id="doccc" class="form-control" name="doccc" value="{{ $entity ? $entity->entity_name : old('doccc') }}" placeholder="As displayed on your original document" >
                                       <label for="floatingInput">As displayed on your original document</label>
                                    </div>
                                    <div  id="doccc_alert" class="validate_alrt"></div>
                                 </div>
                              </div>
                              <div class="_mb-40px">
                                 <div class="_border_box">
                                    <div class="_des_heading">Which country is your entity registered in? </div>
                                 </div>

                                   <div class="modal-counrty-code  mt-3 mb-3">
                                    <div id="regCntry" class="niceCountryInputSelector" data-selectedcountry="{{ $entity ? $entity->regstrd_cntry : $country_code }}" data-showspecial="false" data-showflags="true" data-i18nall="All selected" onclick="select_country();" data-i18nnofilter="No selection"  data-i18nfilter="no Filter"></div>
                                 </div>
                              </div>
                           </div>
                     </form>
                     </div>
                     </form>
                  </div>
                  <div class="_des_box">
                     <button type="button" id="btn-2" class="active btn-main-yellow">
                        <div class="_btn_text">Continue</div>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="third" style="display:none">
         <div class="main-content-box">
            <div class="leftbox">

                 @include('entity.leftSectionTemplate.entityLeftSection')
            </div>
            <div class="rightbox">
               <div class="right-inner">
                  <div class="_des_box">
                     <div class="_title">What is your entity type?</div>
                  </div>
                  <div class="_right_main_content">
                     <form action="#" class="w-100 h-100">
                        <div class="main_content_inner">
                           <div class="_des_box">
                              <div class="_mb-40px">
                                 <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">What is the legal form of your entity?</div>
                                       <div class="legal_txt">What is legal form?</div>
                                       <div class="mt-3 mb-3">
                                          <div class="dropdown-theme">
                                             <select class="selectpicker selectpicker1 w-100" id="legalForm" name="legalForm" data-selected-text-format="count > 1">
                                                <option value=""> Select Entity Type </option>
                                                @if($entity)

                                                    @foreach( $entityTypes as $entityType )
                                                    <option value="{{ $entityType->id }}" {{ ($entityType->id == $entity->entity_type) ? 'selected' : '' }}> {{ $entityType->entity_name }} </option>
                                                    @endforeach

                                                @else

                                                    @foreach( $entityTypes as $entityType )
                                                    <option value="{{ $entityType->id }}" > {{ $entityType->entity_name }} </option>
                                                    @endforeach

                                                @endif



                                             </select>
                                          </div>
                                       </div>
                                       <div id="legalvalidateErr" class="validate_alrt" ></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="_mb-40px">
                                 <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">Select your company type</div>
                                       <div class="mt-3 mb-3">
                                          <div class="dropdown-theme">
                                             <select class="selectpicker selectpicker2 w-100" id="companyTpye" name="companyTpye" data-selected-text-format="count > 1">
                                                <option value=""> Select Company Type </option>
                                               @if($entity)
                                                     @foreach( $companyTypes as $companyType )
                                                    <option value="{{ $companyType->id }}" {{ ($companyType->id == $entity->company_type) ? 'selected' : '' }}> {{ $companyType->name }} </option>
                                                    @endforeach
                                                @else
                                                    @foreach( $companyTypes as $companyType )
                                                    <option value="{{ $companyType->id }}"> {{ $companyType->name }} </option>
                                                    @endforeach

                                              @endif
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="companyvalidateErr" class="validate_alrt"></div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="_btn_div">
                     <button type="button" class=" _btn_default" onclick="moveOn2nd();">
                        <div class="_btn_text">Previous</div>
                     </button>
                     <button type="button" id="select_farm" class="btn-main-yellow active">
                        <div class="_btn_text">Continue</div>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="fourth" style="display:none">
         <div class="main-content-box">
            <div class="leftbox">

                 @include('entity.leftSectionTemplate.entityLeftSection')
            </div>
            <div class="rightbox">
               <div class="right-inner">
                  <div class="_des_box">
                     <div class="_title">Additional support</div>
                  </div>
                  <div class="_right_main_content">
                     <div id="add_support" class="validate_alrt"> </div>
                     <form action="#" class="w-100 h-100">
                        <div class="main_content_inner">
                           <div class="_des_box">
                              <div class="_mb-40px">
                                 <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">Have you already been in touch with a Wealthmark Key Account Manager?</div>
                                       <div class="mt-3 mb-3">
                                          <div class="spprt-box">
                                             <label class="spprt-label">
                                                @if($entity)
                                                <svg  viewBox="0 0 16 16" fill="none" class="spprt-svgicon selectYes add1 {{ $entity->keyAcount_manager != NULL ? 'spprt-svgicon-active' : ''}}">
                                                   <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                                   <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                                </svg>
                                                @else
                                                 <svg  viewBox="0 0 16 16" fill="none" class="spprt-svgicon selectYes add1 ">
                                                   <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                                   <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                                </svg>

                                                @endif

                                                <div class="spprt-inpt_div">Yes, I have <input hidden=""  type="radio"  value="1" style="clip: rect(0px, 0px, 0px, 0px); position: absolute;">
                                                </div>
                                             </label>
                                          </div>
                                          <div class="spprt-box">
                                             <label class="spprt-label">
                                                   @if($entity)
                                                <svg  viewBox="0 0 16 16" fill="none" class="spprt-svgicon selectNo add2 {{ $entity->most_recentMail != NULL ? 'spprt-svgicon-active' : ''}}">
                                                   <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                                   <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                                </svg>
                                                 @else
                                                  <svg  viewBox="0 0 16 16" fill="none" class="spprt-svgicon selectNo add2">
                                                   <circle cx="8" cy="8" r="7.5" stroke="currentColor"></circle>
                                                   <circle cx="8" cy="8" r="4" fill="currentColor" style="display:none"></circle>
                                                </svg>
                                                @endif

                                                <div class="spprt-inpt_div">No, I haven’t <input hidden="" type="radio"  value="0" style="clip: rect(0px, 0px, 0px, 0px); position: absolute;">
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @if($entity)
                              <div class="_mb-40px" id="idYes" style=" {{ $entity->keyAcount_manager != NULL ? 'display:block' : 'display:none' }}  ">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">Please add the name of the Key Account Manager here</div>
                                       <div class="form-floating mt-3 mb-3">

                                          <input type="text" class="form-control" id="accountkey" name="accountkey" value="{{ $entity->keyAcount_manager != NULL ? $entity->keyAcount_manager : old('accountkey') }}" placeholder="Please add the name ...."/>
                                           <label for="floatingInput">name of the Key Account Manager here.....</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @else
                              <div class="_mb-40px" id="idYes" style="display:none">
                                  <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">Please add the name of the Key Account Manager here</div>
                                       <div class="form-floating mt-3 mb-3">
                                         <input type="text" class="form-control" id="accountkey" name="accountkey" value="{{ old('accountkey')}}" placeholder="Please add the name ...."/>
                                        <label for="floatingInput">name of the Key Account Manager here.....</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              @endif

                              @if($entity)
                              <div class="_mb-40px" id="ifNo" style=" {{ $entity->most_recentMail != NULL ? 'display:block' : 'display:none' }} ">

                                 <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">Please provide us with your most recent email.</div>
                                       <div class="form-floating mt-3 mb-5">

                                             <input type="text" class="form-control" id="recentmail" name="recentmail" value="{{ $entity->most_recentMail != NULL ? $entity->most_recentMail : old('recentmail')}}" placeholder="Please add the name ...."/>

                                          <label for="floatingInput">Enter your mail</label>
                                       </div>
                                       <span class="fs-6 mt-1 text-secondary">You can also take the initiative and get in touch with us via</span>
                                       <span class="helpmail">help@wealthmark.io</span>
                                       <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                 </div>
                              </div>
                               @else
                                <div class="_mb-40px" id="ifNo" style="display:none">
                                <div class="_border_box">
                                    <div class="_mb-16px">
                                       <div class="_des_heading">Please provide us with your most recent email.</div>
                                       <div class="form-floating mt-3 mb-5">

                                          <input type="text" class="form-control" id="recentmail" name="recentmail" value="{{old('recentmail')}}" placeholder="Please add the name ...."/>

                                          <label for="floatingInput">Enter your mail</label>
                                       </div>
                                       <span class="fs-6 mt-1 text-secondary">You can also take the initiative and get in touch with us via</span>
                                       <span class="helpmail">help@wealthmark.io</span>
                                       <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                 </div>
                              </div>

                               @endif

                           </div>
                        </div>
                     </form>

                     <div class="entity_name_validtnErrMsg"></div>
                     <div class="regstrd_cntry_validtnErrMsg"></div>
                     <div class="entity_type_validtnErrMsg"></div>
                     <div class="keyAcount_manager_validtnErrMsg"></div>
                      <div class="most_recentMail_validtnErrMsg"></div>
                  </div>
                  <div class="_des_box">
                     <div class="_btn_div">
                        <button type="button" class=" _btn_default" onClick="moveOn3rd();">
                           <div class="_btn_text">Previous</div>
                        </button>
                        <!--<button type="button" class="btn-main-yellow active modal-trigger" id="additinalBtn" data-modal="verify_process">-->
                        <button type="button" class="btn-main-yellow active modal-trigger" id="additinalBtn" >
                           <div class="_btn_text ">Continue</div>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!------------------------------------------------------------------------------------------------------------>
      <div id="fifth" style="display:none">
         <!-- {{Auth::user()}} -->
         <div class="main-content-box">
            <div class="leftbox">

                 @include('entity.leftSectionTemplate.entityLeftSection')
                  <div class="checklist">
                     <div class="checklist-inner" >

                        <i class="bi bi-clipboard-check-fill checklist-svg"></i>
                        Checklist
                     </div>
                  </div>
            </div>

            <div class="rightbox">
               <div class="right-inner">
                  <div class="border-box">
                     <div class="heading-box">
                        <div class="p-bold">Verify your business information</div>
                        <div class="counting"><span>0</span>/4</div>
                     </div>
                     <div class="optn-box" id="basic_information">
                         <span class="basicGreenchk" style="display:none">
                            <svg xmlns="" viewBox="0 0 24 24" fill="none" class="basicGreenchkImg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-4.934-4.483L10.2 13.383l-2.716-2.716-1.768 1.767 4.484 4.484 7.634-7.634-1.768-1.767z" fill="currentColor"></path></svg>

                         </span>

                        <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M22 20H2V4h20v16zM4 7h7v6H4V7zm9 0h4v2h-4V7z" fill="url(#id-g_svg__paint0_linear)"></path>
                           <path d="M7.5 12a2 2 0 100-4 2 2 0 000 4zM11 17v-4H4v4h7zM13 11h7v2h-7v-2zM20 15h-7v2h7v-2z" fill="#76808F"></path>
                           <defs>
                              <linearGradient id="id-g_svg__paint0_linear" x1="12" y1="20" x2="12" y2="4" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        <div class="optn-box-txt">
                           <div class="p-bold">Basic Information</div>
                           <div class="p-light">Fill in basic entity information</div>
                        </div>
                       <i class="bi bi-chevron-right optn-arrow"></i>
                     </div>
                     <div class="optn-box" id="Related-Parties">
                           <span class="relatedCountChkGreenchk" style="display:none">
                            <svg xmlns="" viewBox="0 0 24 24" fill="none" class="basicGreenchkImg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-4.934-4.483L10.2 13.383l-2.716-2.716-1.768 1.767 4.484 4.484 7.634-7.634-1.768-1.767z" fill="currentColor"></path></svg>

                         </span>
                        <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                           <path d="M17 13v3h2v-3h3v-2h-3V8h-2v3h-3v2h3zM3 18a4 4 0 014-4h4a4 4 0 014 4v3H3v-3z" fill="#76808F"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 7.5a4.5 4.5 0 10-9 0 4.5 4.5 0 009 0z" fill="url(#referral-g_svg__paint0_linear)"></path>
                           <defs>
                              <linearGradient id="referral-g_svg__paint0_linear" x1="9" y1="12" x2="9" y2="3" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        <div class="optn-box-txt">
                           <div class="p-bold">Related Parties</div>
                           <div class="p-light">Add related entity parties</div>
                        </div>
                        <i class="bi bi-chevron-right optn-arrow"></i>
                     </div>
                     <div class="optn-box" id="open_upld_documents">
                           <span class="businessDocGreenchk" style="display:none">
                            <svg xmlns="" viewBox="0 0 24 24" fill="none" class="basicGreenchkImg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-4.934-4.483L10.2 13.383l-2.716-2.716-1.768 1.767 4.484 4.484 7.634-7.634-1.768-1.767z" fill="currentColor"></path></svg>

                         </span>
                        <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M4.014 21H20a2 2 0 002-2V3H6v15.857c0 1.179-.889 2.135-1.987 2.143zM8 11h5v6H8v-6zm12 0h-5v2h5v-2zm-5 4h5v2h-5v-2z" fill="url(#news-g_svg__paint0_linear)"></path>
                           <path d="M18 8h-8V6h8v2zM2 18.857V9h4v9.857C6 20.041 5.105 21 4 21s-2-.96-2-2.143z" fill="#76808F"></path>
                           <defs>
                              <linearGradient id="news-g_svg__paint0_linear" x1="16.5" y1="13.5" x2="16.5" y2="2" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        <div class="optn-box-txt">
                           <div class="p-bold">Upload Documents</div>
                           <div class="p-light">Upload required documents</div>
                        </div>

                        <i class="bi bi-chevron-right optn-arrow"></i>
                     </div>
                     <div class="optn-box" id="Fiat_Enablement">
                           <span class="fietCountGreenchk" style="display:none">
                            <svg xmlns="" viewBox="0 0 24 24" fill="none" class="basicGreenchkImg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-4.934-4.483L10.2 13.383l-2.716-2.716-1.768 1.767 4.484 4.484 7.634-7.634-1.768-1.767z" fill="currentColor"></path></svg>

                         </span>
                        <svg  viewBox="0 0 24 24" fill="none" class="optn-box-svg">
                           <circle r="10" transform="matrix(1 0 0 -1 12 12)" fill="url(#payment-g_svg__paint0_linear)"></circle>
                           <path d="M13.088 20v-1.782c2.468-.408 3.62-1.949 3.62-3.768 0-1.893-1.244-2.951-3.843-3.545V7.824c.89.204 1.485.612 1.93 1.113l1.69-1.522c-.817-.928-1.912-1.503-3.397-1.67V4h-2.116v1.745c-2.395.278-3.675 1.578-3.675 3.526 0 1.8 1.132 3.026 3.916 3.601v3.341c-1.04-.148-1.912-.65-2.617-1.392l-1.67 1.522c.927 1.021 2.171 1.782 4.046 1.95V20h2.116zM9.858 9.197c0-.724.408-1.225 1.355-1.41v2.747c-.947-.26-1.355-.631-1.355-1.337zm4.288 5.457c0 .706-.409 1.281-1.281 1.522v-2.932c1.058.315 1.28.872 1.28 1.41z" fill="#76808F"></path>
                           <defs>
                              <linearGradient id="payment-g_svg__paint0_linear" x1="10" y1="0" x2="10" y2="20" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#F0B90B"></stop>
                                 <stop offset="1" stop-color="#F8D33A"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        <div class="optn-box-txt">
                           <div class="p-bold">Fiat Enablement (if needed)</div>
                           <div class="p-light">If you wish to use the Fiat service, additional information is required.</div>
                        </div>
                        <i class="bi bi-chevron-right optn-arrow"></i>
                     </div>
                  </div>
                  <div class="btn-div">
                     <button  type="button" class="active btn-main-yellow">
                        <div class="_btn_text">Submit</div>
                     </button>
                  </div>
               </div>
            </div>

         </div>
      </div>


       <!-- checklist -->

       @include('entity.templates.checklist')


      <!-- // checklist -->
      <!-- basic information -->
      @if($entity)

      <div id="basic_information-div" class="" style="display:none">
         <div class="main-content-box">
            <div class="leftbox">
               <div class="left-inner">
                  <div class="border-box">
                  </div>
                  <div class="left-footer">
                  </div>
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
                     <div class="h1 p-bold  mt-3 mb-5">Basic Information</div>

                      @include('entity.templates.basicInformation')

                  <div class="mt-3">
                     <button class="btn-main-yellow active">
                        <div class="_btn_text" id="basicCompleted" onClick="countCompletedSections()"> Complete</div>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- //basic information -->
      <!-- related parties -->
      <div id="Related-Parties-div" class="accordion-div" style="display:none">
         @include('entity.templates.related-paries')
      </div>
      <!-- // related parties -->

      <!------------------------28sept22 --------------------------------------------------------->
      <!--------------------------------------------------------- add directors and person model section which is called from its head  ----------->
      <div class="modal custom_modal" id="Add-Director">
         <div class="modal-sandbox"></div>
         <div class="modal-box max-width-850px">
            <div class="modal-header">
               <div class="modal-icons">
                  <span class="btn-back" id="back_start">
                  <i class="bi bi-arrow-left"></i>
                  </span>
                  <span class="close-modal">
                  <i class="bi bi-x"></i>
                  </span>
               </div>
               <div class="modal_heading">Add Director(s) or Equivalent Persons </div>
            </div>
            <div class="modal-body text-start ">
               <div class="main-heading">Select Type</div>
               <div class="mb-5">
                  <div class="radio-div">
                     <input type="radio" type="radio" name="selectPartnerType" value="1" checked="" class="radio-btns" id="Individual"> Individual
                  </div>
                  <div class="radio-div">
                     <input type="radio" type="radio" name="selectPartnerType" value="2" class="radio-btns" id="Entity"> Entity
                  </div>
               </div>
               <!-- entity director inner form model form --->
               <div class="mb-5 msgValidErrIndisul"> </div>
               <form action="#" id="directorForm" class="w-100" enctype="multipart/form-data">
                    @csrf
                  <!--- indivisual form section-->
                  <div class="form-inner Individual scrollbar-style">
                     <input type="text" hidden name="partnerId" id="partnerId" value="1" class="form-control " placeholder="">
                     <input type="text" hidden id="directoTypeIndi" name="directoTypeIndi" value="1" class="form-control " placeholder="">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column3">
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" id="firstName" name="firstName" value="" placeholder="demo">
                              <label>First Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput"  id="MidName" name="MidName" value="" placeholder="demo">
                              <label>Middle Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput"  id="lastName" name="lastName" value="" placeholder="demo">
                              <label>Last Name</label>
                           </div>
                        </div>
                        <div class="">
                           <div class="input-group date" id="datepickerind">
                            <!--  <input type="text" class="form-control"  id="indidate"  name="indidob" placeholder="Enter your DOB" />
                              <span class="input-group-append">
                                          <span class="input-group-text bg-light">
                                                <i class="bi bi-calendar-fill"></i>
                                          </span>
                              </span>-->
                                <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker"  id="indidate"  name="indidob" placeholder="Enter your DOB" />
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
                                 <input type="checkbox" type="checkbox" id="multipleCitizenship"  class="radio-btns"> Multiple Citizenship
                              </div>
                           </div>
                           <div class="mt-1">
                              <select id="jurisCountry"  name="jurisCountry[]" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple=""> </select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Residential Address</label>
                           <div class="form-floating mb-3 clearable-input">
                              <label>Country of Residence</label>
                           </div>
                           <div class="mt-1">
                              <select id="countryResidence"  name="countryResidence" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" ></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Upload Identification Documents</label>
                           <div class="form group mt-3">
                              <label class="label-text">Country/Region of Issue</label>
                              <select id="Region_of_Issue" name="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" ></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Select Document Type</label>
                           <div class="form-group d-flex doc-type mt-2">
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="idDocTypePS" name="idDocType" value="10" checked class="radio-btns"> Passport
                              </div>
                              <!--<div class="aadhar d-flex align-items-center">-->
                              <!--  <input type="radio" id="idDocTypeAA" name="idDocType" value="" class="radio-btns"> Aadhar Card-->
                              <!--</div>-->
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="idDocTypeID" name="idDocType"  value="9" class="radio-btns"> Id Card
                              </div>
                           </div>
                        </div>
                        <div class="form group mt-3">
                           <label class="label-text">Identification Number</label>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" id="idDocNum" value="" name="idDocNum" placeholder="demo">
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

                              <input id="idDocUploadedFront" name="idDocUploadedFront" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" class="input-absolute">
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
                              <input id="idDocUploadedBack" name="idDocUploadedBack" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" class="input-absolute">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--- end indivisual form section-->
                  <div>
                     <input type="text" hidden name="compID" id="compID" value="" class="compID">
                     <input type="text" hidden name="compName" id="compName" value="" class="compName">
                      <input type="text" hidden name="compPartnerType" id="compPartnerType" value="" class="compName">
                  </div>
                  <!--- entity form section-->
                  <div class="msgErrmsg">

                  </div>
                  <div class="form-inner Entity scrollbar-style" style="display:none">
                     <input type="text" hidden name="directoTypeEntity" id="dirTypeEntity" value="2" class="form-control searchinput" placeholder="demo">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column2">
                           <div class="form-floating mb-3 clearable-input">
                                <span class="comperror"> </span>
                              <input type="text" class="form-control searchinput" name="companyName" id="companyName" value=""  placeholder="demo">
                              <label>Company Name</label>

                           </div>
                           <div class="form-floating mb-3 clearable-input">
                                <span class="compRegerror"> </span>
                              <input type="text" class="form-control searchinput" name="companyRegNum" id="companyRegNum" value="" placeholder="demo">
                              <label>Company Registered Number</label>

                           </div>
                        </div>
                        <label class="label-text">Please fill in the Entity Name and Registration Number exactly as they appear on the Certificate of Incorporation.</label>
                        <div class="mt-3">
                           <div class="d-flex justify-content-between">
                              <!--  <input type="text" class="form-control"  placeholder="demo">-->
                              <label class="label-text">Country of Incorporation</label>
                           </div>
                           <div class="mt-1">
                              <select  name="countryIncorp" id="countryIncorp" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true"></select>
                           </div>
                           <span class="compIncopCntry"> </span>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Director(s) or Equivalent Persons</label>
                           <label class="label-text">At least 1 record must be added. You can add up to 10.</label>
                           <div class="upld-btn-div-outer">
                              <div class="upld-btn-div-inner modal-trigger extraAddDirtor"  data-modal="Entity-Add-Director_100" >
                                 <div class="upld-btn-div">
                                    <svg  viewBox="0 0 24 24" fill="none" class="upld-btn-icon">
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
                  <button class="modal_btn_theme" id="directorFormSubmit">Submit</button>
                  <button class="btn bg-whitesmoke" id="directorFormCancel">Cancel </button>
               </div>
            </div>
            <!-- extra derector's entity inner model form  --->
            <div class="modal custom_modal "  id="Entity-Add-Director_100">
               <div class="modal-box mt-4">
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

                  <div class="modal-body text-start">
                       <div class="allValidationExtraDir"></div>
                     <form action="#" id="extradirectorEntityForm" class="w-100" enctype="multipart/form-data">
                        <div class="form-inner Individual-pop scrollbar-style">
                           <div class="d-column">
                              <label class="label-text">Basic Information</label>
                              <div class="column3">
                                 <input type="hidden" name="_tokenextDir" id="extDirtoken" value="{{ csrf_token() }}">
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text" id="extDirFirstName" name="extDirFirstName" value=""  class="form-control searchinput" placeholder="demo">
                                    <label>First Name</label>
                                 </div>
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text"  id="extDirMidName" name="extDirMidName" value="" class="form-control searchinput" placeholder="demo">
                                    <label>Middle Name</label>
                                 </div>
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text"  id="etxDirLastName" name="etxDirLastName" value=""  class="form-control searchinput" placeholder="demo">
                                    <label>Last Name</label>
                                 </div>
                              </div>
                              <div class="">
                                 <div class="input-group date" id="datepickerEnt">

                                     <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker"  id="extrdate"  name="extrdate" placeholder="Enter your DOB" />
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
                                    <select id="extrJurisCountry" name="extrJurisCountry[]" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <label class="label-text">Basic Information</label>
                                 <div class="mb-3">
                                    <!--<input type="text" class="form-control searchinput" id="extrCountryResidence"  placeholder="demo">-->
                                    <label>Country of Residence</label>
                                    <select id="extrCountryResidence" class="selectpicker countrypicker form-control" name="extrCountryResidence"  data-live-search="true" data-flag="true" ></select>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <label class="label-text">Upload Identification Documents</label>
                                 <div class="mt-3">
                                    <label class="label-text">Country/Region of Issue</label>
                                    <select class="selectpicker countrypicker form-control w-100" id="extridDocIssuedCountry" name="extridDocIssuedCountry"  data-live-search="true" data-flag="true" ></select>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <label class="label-text">Select Document Type</label>
                                 <div class="form-group d-flex doc-type mt-2">
                                    <div class="passport d-flex align-items-center">
                                       <input type="radio" id="extIdDocTypePS" name="extIdDocType" value="10" checked class="radio-btns"> Passport
                                    </div>
                                    <!--<div class="aadhar d-flex align-items-center">
                                       <input type="radio" id="extIdDocTypeAA" name="extIdDocType" value="" class="radio-btns"> Aadhar Card
                                       </div>-->
                                    <div class="passport d-flex align-items-center">
                                       <input type="radio" id="extIdDocTypeID" name="extIdDocType" value="9" class="radio-btns"> Id Card
                                    </div>
                                 </div>
                              </div>
                              <div class="form group mt-3">
                                 <label class="label-text">Identification Number</label>
                                 <div class="form-floating mb-3 clearable-input">
                                    <input type="text" class="form-control searchinput" id="extridDocNum" name="extridDocNum" value="" placeholder="demo">
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

                                    <!--<input name="extrIdDocUploadedFront" id="extrIdDocUploadedFront" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf"  style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">-->
                                     <input name="idDocUploadedFront" id="extrIdDocUploadedFront" value="" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf"  class="input-absolute">
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
                                    <!--<input name="extrIdDocUploadedBack" id="extrIdDocUploadedBack" value=""  type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer;">-->
                                     <input name="idDocUploadedBack" id="extrIdDocUploadedBack" value=""  type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" class="input-absolute">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer mt-5">
                     <div class="footer-div-btn">
                        <button class="modal_btn_theme" onclick="extradirectorSubmit(this)">Submit</button>
                        <button class="btn bg-whitesmoke close-Entity-Add-Director" onclick="extradirectorCancel(this)">Cancel </button>
                     </div>
                  </div>
                  <!-- ends extra derector's entity inner model form  --->
                  <!-- end entity director inner form model form --->
               </div>
            </div>
         </div>
      </div>
      <div class="editSection">  </div>
      <div class="editSection2"> </div>

      <!---------------------------------------------------------------- end add directors and person model section which is called from its head ------->
      <!-- add and delete director popup ---->
      <div class="modal custom_modal" id="added_user_modal">
         <div class="modal-sandbox"></div>
         <div class="modal-box max-width-850px">
            <div class="modal-header">
               <div class="modal-icons">
                  <span class="btn-back" id="back_start">
                  <i class="bi bi-arrow-left"></i>
                  </span>
                  <span class="close-modal">
                  <i class="bi bi-x"></i>
                  </span>
               </div>
               <div class="modal_heading">Add Director(s) or Equivalent Persons </div>
            </div>
            <div class="modal-body text-start">
               <form action="#" class="w-100" enctype="multipart/form-data">
                  <div class="form-inner Individual scrollbar-style">
                     <div class="d-column">
                        <label class="label-text">Basic Information</label>
                        <div class="column3">
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" placeholder="demo">
                              <label>Email address</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" placeholder="demo">
                              <label>Middle Name</label>
                           </div>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" placeholder="demo">
                              <label>Last Name</label>
                           </div>
                        </div>
                        <div class="">
                           <div class="input-group date" id="datepicker">
                              <input data-date-format="yyyy-mm-dd" type="text" class="form-control datepicker" class="form-control" name="dob" id="date" placeholder="Enter your DOB" />
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
                              <select id="select_multi_country" class="selectpicker countrypicker form-control" data-flag="true" data-live-search="true" multiple></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Basic Information</label>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" placeholder="demo">
                              <label>Country of Residence</label>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Upload Identification Documents</label>
                           <div class="form group mt-3">
                              <label class="label-text">Country/Region of Issue</label>
                              <select id="Region_of_Issue" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" multiple></select>
                           </div>
                        </div>
                        <div class="mt-3">
                           <label class="label-text">Select Document Type</label>
                           <div class="form-group d-flex doc-type mt-2">
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="passport" class="radio-btns"> Passport
                              </div>
                              <div class="aadhar d-flex align-items-center">
                                 <input type="radio" id="aadhar" class="radio-btns"> Aadhar Card
                              </div>
                              <div class="passport d-flex align-items-center">
                                 <input type="radio" id="passport" class="radio-btns"> Id Card
                              </div>
                           </div>
                        </div>
                        <div class="form group mt-3">
                           <label class="label-text">Identification Number</label>
                           <div class="form-floating mb-3 clearable-input">
                              <input type="text" class="form-control searchinput" placeholder="demo">
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
                        <div class="file-encrypted-div">
                           <div class="encrypted-div">
                              <div class="encrypted-main">
                                 <div class="encrypted-inner">
                                    <div class="encrypted-inner-left">
                                       <div  class="encrypted-inner-text">The file has been uploaded and is being encrypted</div>
                                       <svg  viewBox="0 0 24 24" fill="none" class="encrypted-inner-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7 8v2H5v11h14V10h-2V8A5 5 0 007 8zm7.5 2V8a2.5 2.5 0 00-5 0v2h5zm-1 8v-5h-3v5h3z" fill="currentColor"></path>
                                       </svg>
                                    </div>
                                    <div class="encrypted-inner-right">
                                       <svg  viewBox="0 0 24 24" fill="none" class="encrypted-inner-svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M19.997 12.21a8.161 8.161 0 000-.42v.42zm-4.463 3.327l-2.608-2.608h7.07V20l-2.341-2.342A8.003 8.003 0 014.252 14h3.164a5.001 5.001 0 008.118 1.537zM19.747 10A8.003 8.003 0 006.343 6.343L4.001 4v7.071h7.07L8.466 8.464A5.001 5.001 0 0116.585 10h3.162zM4 12L4 11.845v.31A8.126 8.126 0 014 12z" fill="currentColor"></path>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                              <input name="front" type="file" accept="image/jpg,image/jpeg,image/png,application/pdf" multiple="" class="input-absolute">
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="modal-footer mt-5">
               <div class="footer-div-btn">
                  <button class="modal_btn_theme">Submit</button>
                  <button class="btn bg-whitesmoke">Cancel </button>
               </div>
            </div>
         </div>
      </div>
       <div class="OwnereditSection"> </div>
      <!--------------------------------------------------------- add Add-Ultimate-Beneficial model section which is called from its head  ----------->

      @include('entity.templates.Ultimate-Beneficial-model-section')

      <!--------------------------------------------------------- ends Add-Ultimate-Beneficial model section which is called from its head  ----------->
      <!--------------------------------------------------------- add Significant Controller(s) model section which is called from its head  ----------->
      @include('entity.templates.Significant-Controller')
        <div class="SignificantControllerSection"> </div>
      <!--------------------------------------------------------- ends Significant Controller(s) model section which is called from its head  ----------->
      <!--------------------------------------------------------- add  Authorised Account Trader model section which is called from its head  ----------->
      @include('entity.templates.accountTrader')
      <div class="AccountTraderSection"> </div>

     <!--------------------------------------------------------- end  Authorised Account Trader model section which is called from its head  ----------->

     <!--------- upload all document section ------>
      <div id="upld_document_main" style="display:none">
     @include('entity.templates.upload-documents')
     </div>


   <!-------- end upload all document section ------>

   <!--------- Fiat_Enablement section ------>
      <div id="Fiat_Enablement_div_main" style="display:none">
     @include('entity.templates.fiat-Enablement')
     </div>


   <!-------- end Fiat_Enablement section ------>


      @endif



      <!------------------end 28sept22 --------------->
       <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      @include('template.auth_page_js')
      <!----------------------------------- add for country dropdown box---------------------------------->

      <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
      <!------------------------ add for datepicker---------------------------->
      <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap-select-country.min.js') }}"></script>
      <script src="{{ asset('assets/js/verify-entity.js') }}"></script>




      <!-- condition for showing basic information direct  -->
      @if($entity)
      @if( ( ($entity->entity_type != NULL) && ($entity->entity_name != NULL) && ($entity->company_type != NULL) && ($entity->regstrd_cntry != NULL) ) &&  ( ($entity->keyAcount_manager != NULL) || ($entity->most_recentMail != NULL) ) )
      <script type="text/javascript">
         document.getElementById('first').style.display="none";
          document.getElementById('fifth').style.display="block";
             //  $("#first").css({"display":"none"});
           //    $("#fifth").css({"display":"block"});
      </script>
      @endif
      @endif
      <!-- end condition for showing basic information direct  -->
      <script>
         // $(".modal-trigger").click(function(e){
         function deleteDirtorBlock(that){

          // e.preventDefault();
           dataModal = $(that).attr("data-modal");
          // alert(dataModal);
           $("#" + dataModal).css({"display":"block"});

           };

           //);

           $(".close-modal, .modal-sandbox").click(function(){
           $(".modal").css({"display":"none"});
           });

      </script>
      <script>
         $(document).ready(function () {
           $("#verify_btn").click(function(){
              $("#second_div").css("display", "block");
              $("#first").css("display", "none");
             });

                   // entity name validation
                              $("#btn-2").click(function(){
                              entityName = $("#doccc").val();


                                 // alert($("#doccc").val());
                                  if(entityName == ""){
                                      document.getElementById("doccc_alert").innerText = "Please enter entity name!";

                                  }else if( isNaN(entityName) == false){
                                      document.getElementById("doccc_alert").innerText = "Please enter valid name!";

                                  }else if (entityName.length > 255){
                                       document.getElementById("doccc_alert").innerText = "Only 255 characters allowed!";
                                  }else{
                                     document.getElementById("doccc_alert").innerText = "";
                                      $("#second_div").css("display", "none");
                                     $("#third").css("display", "block");
                                  }

                             });

                             $("#select_farm").click(function(){
                               const legalfrmtype = $("#legalForm").val();
                                const legalcmpnytype = $("#companyTpye").val();
                                 if(legalfrmtype == '' && legalcmpnytype !='') {
                                document.getElementById("legalvalidateErr").innerText = "Please select entity type!";
                                  document.getElementById("companyvalidateErr").innerText = "";

                                 }else if(legalcmpnytype =='' && legalfrmtype !=''){
                                document.getElementById("companyvalidateErr").innerText = "Please select company type!";
                                 document.getElementById("legalvalidateErr").innerText = "";
                                 }else if(legalfrmtype =='' && legalcmpnytype ==''){

                                 document.getElementById("legalvalidateErr").innerText = "Please select entity type!";
                                  document.getElementById("companyvalidateErr").innerText = "Please select company type!";

                                 }else{
                                document.getElementById("legalvalidateErr").innerText = "";
                                 document.getElementById("companyvalidateErr").innerText = "";
                                 $("#fourth").css("display", "block");
                                  $("#third").css("display", "none");
                            }
                       });


                            $("#legalForm").change( function() {

                                if($("#legalForm option:selected").val() != ''){
                                     const Append_legalfrmtype = $("#legalForm option:selected").text();
                                     $(".appendEntityType").siblings('svg').css({"display":"block"});
                                     $(".appendEntityType").html(Append_legalfrmtype);

                                }else{
                                     $(".appendEntityType").siblings('svg').css({"display":"none"});
                                     $(".appendEntityType").html('');
                                }
                              });


                             $("#companyTpye").change( function(){

                                if($("#companyTpye option:selected").val() != ''){
                                const Append_legalcmpnytype = $("#companyTpye option:selected").text();
                                  $(".appendCompanyType").siblings('svg').css({"display":"block"});
                                  $(".appendCompanyType").html(Append_legalcmpnytype);

                                }else{
                                  $(".appendCompanyType").siblings('svg').css({"display":"none"});
                                  $(".appendCompanyType").html('');
                                }
                            });





         //  end entity name validation


                         $('.selectpicker').change(function () {
                         var selectedItem = $('.selectpicker1').val();
                          var selectedItem2 = $('.selectpicker2').val();
                         // alert(selectedItem);
                         //  alert(selectedItem2);
                                 if(selectedItem !="" && selectedItem2 !=""){

                                   $("#select_farm").removeClass("inactive");
                                 }
                         });
         });



         function select_country(){
                 var doc=$("#doccc").val();
                 var val = $('.niceCountryInputMenuDefaultText span').text();
                 var flagImg = $(".niceCountryInputMenuCountryFlag").attr('src');
                 $("img.appendCountryflag").attr('src', flagImg) ;
                 $(".appendCountry").html(val);
                  if(doc!="" && val!=""){
                 $("#btn-2").removeClass("inactive");
             }
         }
      </script>
      <script>
         $(document).ready(function () {
                $(".niceCountryInputSelector").each(function(i,e){
                    new NiceCountryInput(e).init();
            });
         });

         // initialyze selectpicker
         $('select').selectpicker();

         $(".modal-trigger").click(function(e){
            e.preventDefault();
            dataModal = $(this).attr("data-modal");
             $("#" + dataModal).css({"display":"block"});

         });

         $(".close-modal, .modal-sandbox").click(function(){
         $(".modal").css({"display":"none"});
         });


         $(".selectYes").click(function(){
         document.getElementById("recentmail").value = "";
         //    $("#recentmail").val({"display":"block"});
         $("#idYes").css({"display":"block"});
         $("#ifNo").css({"display":"none"});
         $(".add1").addClass('spprt-svgicon-active');
         $(".add2").removeClass('spprt-svgicon-active');

         });


         $(".selectNo").click(function(){
         document.getElementById("accountkey").value = "";
         $("#ifNo").css({"display":"block"});
         $("#idYes").css({"display":"none"});
         $(".add1").removeClass('spprt-svgicon-active');
         $(".add2").addClass('spprt-svgicon-active');

         });

         $(".addressYes").click(function(){
              $(".address_same").css({"display":"block"});
              $(".address_nosame").css({"display":"none"});


         });


         $(".addressNo").click(function(){
              $(".address_nosame").css({"display":"block"});
              $(".address_same").css({"display":"none"});


         });




         $("#basic_information").click(function(){
             $("#basic_information-div").css({"display":"block"});
             $("#fifth").css({"display":"none"});

         });

         $("#Related-Parties").click(function(){
             $("#Related-Parties-div").css({"display":"block"});
             $("#fifth").css({"display":"none"});

         });

         $('.accordion__header').click(function(e) {
         e.preventDefault();
         var currentIsActive = $(this).hasClass('is-active');
         $(this).parent('.accordion').find('> *').removeClass('is-active');
            	if(currentIsActive != 1) {
            		$(this).addClass('is-active');
            		$(this).next('.accordion__body').addClass('is-active');
            	}
         });
      </script>
      <!-- JS form total form submission tima--->
      <script>
         $(document).ready(function(){

                 $("#additinalBtn").click(function(){


                                 const entityname  = document.getElementById('doccc').value;
                                // const cntryNmae = document.querySelector('.niceCountryInputMenuCountryFlag').nextElementSibling.innerText;
                               // const cntryNmae = document.getElementsByClassName('niceCountryInputMenuCountryFlag').getAttribute('data-flagiso');
                                 const cntryNmae =  $(".niceCountryInputMenuCountryFlag").attr('data-flagiso');
                  	    	    const entityType = document.getElementById('legalForm').value;
                 		        const companyType = document.getElementById('companyTpye').value;
                 	    	    const accountKey = document.getElementById('accountkey').value;
                 		        const recentmail = document.getElementById('recentmail').value;
                 		       // const user_id = "<?php // echo $_SESSION['user_id'] ?>";
                 		        const user_id = "<?php echo Auth::user()->id ?>";
                 		        const token = document.getElementById('token').value;

           // alert(token+"/"+user_id+"/"+entityname +"/"+ cntryNmae +"/"+ entityType +"/"+ entityType +"/"+ accountKey +"/"+ recentmail );
                // console.log(token+"/"+user_id+"/"+entityname +"/"+ cntryNmae +"/"+ entityType +"/"+ entityType +"/"+ accountKey +"/"+ recentmail );



             		        if(accountKey == "" && recentmail ==""){
             		            document.getElementById("add_support").innerText = "Please select Key Account Manager OR recent mail!";
             		              $('#verify_process').css({"display":"none"});

             		        }else{
                            document.getElementById("add_support").innerText = "";

                         		            	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/register-business')}}',
                                                         url: "<?php echo url('api/register-business');  ?>",
                                                         data: {
                                                             'user_id' :  user_id,
                                                             'entity_name' : entityname,
                                                             'regstrd_cntry':cntryNmae,
                                                             'entity_type':entityType,
                                                             'company_type':companyType,
                                                             'keyAcount_manager':accountKey,
                                                             'most_recentMail':recentmail,
                                                              '_token': token,


                                                         },
                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');
                                                            $("#verify_process").hide();
                                                          setTimeout(function () {
                                                                 $("#verify_process").show();
                                                            }, 4000);
                                                            return data;

                                                         },
                                                         error: function(xhr, status, error) {
                                                               $("#verify_process").hide();
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                           // alert(erroJson.error);

                                                          var entity_name_error = erroJson.error.entity_name;
                                                           var regstrd_cntry_error = erroJson.error.regstrd_cntry;
                                                           var entity_type_error = erroJson.error.entity_type;
                                                          // var keyAcount_manager_error = erroJson.error.keyAcount_manager;
                                                            var most_recentMail_error = erroJson.error.most_recentMail;



                                                            if(entity_name_error){
                                                                $('.entity_name_validtnErrMsg').html(entity_name_error);
                                                                $('.entity_name_validtnErrMsg').addClass('alert alert-danger');
                                                            }
                                                            if(regstrd_cntry_error){
                                                              $('.regstrd_cntry_validtnErrMsg').html(regstrd_cntry_error);
                                                              $('.regstrd_cntry_validtnErrMsg').addClass('alert alert-danger');
                                                            }
                                                             if(entity_type_error){
                                                              $('.entity_type_validtnErrMsg').html(entity_type_error);
                                                              $('.entity_type_validtnErrMsg').addClass('alert alert-danger');
                                                            }
                                                            //  if(keyAcount_manager_error ){
                                                            //   $('.keyAcount_manager_validtnErrMsg').html(keyAcount_manager_error);
                                                            //   $('.keyAcount_manager_validtnErrMsg').addClass('alert alert-danger');
                                                            // }
                                                              if(most_recentMail_error){
                                                              $('.most_recentMail_validtnErrMsg').html(most_recentMail_error);
                                                              $('.most_recentMail_validtnErrMsg').addClass('alert alert-danger');
                                                            }

                                        setTimeout(function(){
                                           $('.entity_name_validtnErrMsg, .regstrd_cntry_validtnErrMsg, .entity_type_validtnErrMsg, .keyAcount_manager_validtnErrMsg, .most_recentMail_validtnErrMsg ').html("");
                                           $('.entity_name_validtnErrMsg, .regstrd_cntry_validtnErrMsg, .entity_type_validtnErrMsg, .keyAcount_manager_validtnErrMsg, .most_recentMail_validtnErrMsg ').removeClass('alert alert-danger');
                                                           }, 4000);

                                                         }

                                     				});

                            }

                  });

                 $('.checkAll').click(function(){
                    // alert();
                          $(this).siblings().prop('checked', this.checked);

                 });


                 $('.checklist-inner').click(function(){
                      $('#verify_process').css({"display":"block"});
                 });


                 $("#btn_basic_detail").click(function(){


                         // const chklist  = document.getElementById('docs').value;

                            var selectedDocs=Array();
                          //  $("input:checkbox[type=checkbox]:checked").each(function(){
                            $("#verify_process input:checkbox[type=checkbox]:checked").each(function(){
                                selectedDocs.push($(this).val());

                            });

                               // return ch_list;
                               // const user_id = "<?php // echo $_SESSION['user_id'] ?>";
                                 const user_id = "<?php echo Auth::user()->id ?>";
                                const busidocschklist = selectedDocs.toString();
                                 const token = document.getElementById('token').value;

                               //  alert(busidocschklist.length+"-"+busidocschklist);

                               //  alert(user_id+"/"+token+"/"+busidocschklist);

                               if(busidocschklist == "entityDoc-,partiesDoc-"){
                                     document.getElementById("ifdoc").innerText = "Please select document!";
                               }else{

                                     document.getElementById("ifdoc").innerText = "";

                                                 $.ajax({
                             					type: "POST",

                                                 url: "<?php echo url('api/prepareChecklist');  ?>",
                                                 data: {
                                                     'user_id' :  user_id,
                                                     'checklist' : busidocschklist,
                                                     '_token': token,

                                                 },
                             					success: function(data) {
                                                     triggerAlert('Congratulations! You have added prepared checklist in Wealthmark account.', 'success');
                                                      return data;

                                                 },
                                                 error: function(xhr, status, error) {
                                                    var erroJson = JSON.parse(xhr.responseText);
                                                    //alert(erroJson.error);
                                                 }

                             				});

                                      $(".modal").css({"display":"none"});
                                     $("#fourth").css({"display":"none"});
                                      $("#fifth").css({"display":"block"});

                                 }
                          });

         });


         // to add basicinformation detail
                     $("#accountInfo").click(function(){

                        const enName = $('#eName').val();
                        const enRegistration = $('#eRegistration').val();
                        const enIncorpDate = $('#eIncorpDate').val();
                         const token = $('#etoken').val();
                         const user_id = "<?php echo Auth::user()->id ?>";

                         if(enName.length > 255){
                             $('.eNameError').html("Only 255 chacters allowed!");
                         }
                         if(enRegistration.length > 199){
                             $('.eRegistrationError').html("Only 199 chacters allowed!");
                         }
                         if(new Date() < new Date(enIncorpDate)){
                             $('.eincorpdateError').html("Invalid Date");
                         }


                       // alert(user_id+"/"+enName+'/'+enRegistration+'/'+enIncorpDate+'/'+token);

                                             $.ajax({
                             					type: "POST",

                                                 url: "<?php echo url('api/accountInformation');  ?>",
                                                 data: {
                                                     'user_id' : user_id,
                                                     'entity_name' :  enName,
                                                     'reg_num' : enRegistration,
                                                     'DOB_incorpor' : enIncorpDate,
                                                     '_token': token,

                                                 },
                             					success: function(data) {
                                                     triggerAlert('Congratulations! Account information has been added.', 'success');
                                                      return data;

                                                 },
                                                 error: function(xhr, status, error) {
                                                    var erroJson = JSON.parse(xhr.responseText);

                                                     var entityName_error = erroJson.error.entity_name;
                                                    var reg_num_error = erroJson.error.reg_num;
                                                    var DOB_incorpor_error = erroJson.error.DOB_incorpor;
                                                   // alert(erroJson.error);

                                                    if(entityName_error){
                                                          $('.validtnErr_basicentityname').html(entityName_error);
                                                          $('.validtnErr_basicentityname').addClass('alert alert-danger');
                                                           }
                                                     if(reg_num_error){
                                                          $('.validtnErr_incopdata').html(reg_num_error);
                                                          $('.validtnErr_incopdata').addClass('alert alert-danger');
                                                           }
                                                     if(DOB_incorpor_error){
                                                          $('.validtnErr_registrationNum').html(DOB_incorpor_error);
                                                          $('.validtnErr_registrationNum').addClass('alert alert-danger');
                                                           }

                                                     setTimeout(function(){
                                                         $('.validtnErr_basicentityname, .validtnErr_incopdata, .validtnErr_registrationNum').html("");
                                                         $('.validtnErr_basicentityname, .validtnErr_incopdata, .validtnErr_registrationNum').removeClass('alert alert-danger'); }, 4000);

                                                 }
                                         	});

                         });


         function elearErrMsg(that){
          //  alert(that);
             $(that).next().next().html("");


         };



           $("#entityAddrs").click(function(){
                         const enRegCountry = $('#eRegCountry').val();
                        const enCity = $('#eCity').val();
                        const enStreet = $('#eStreet').val();
                         const enZip = $('#eZip').val();
                         const enKeyAccountManager = $("input[name='hasKeyAccountManager']:checked").val();
                        //const enKeyAccountManagerYes = $('#hasKeyAccountManagerYes').val();
                        // const enKeyAccountManagerNo = $('#hasKeyAccountManagerNo').val();
                       const enOperativeRegCountry = $('#eOperativeRegCountry').val();
                        const enOperativeCity = $('#eOperativeCity').val();
                        const enOperativeStreet = $('#eOperativeStreet').val();
                         const enOperativeZip = $('#eOperativeZip').val();
                         const entoken = $('#etoken').val();
                         const user_id = "<?php echo Auth::user()->id ?>";


                       if(enCity.length > 0 || enStreet.length > 0 || enZip.length > 0)
                       {


                               if(enRegCountry == "" ){
                                     $('.addressCountryError').html("Please select country!");
                               }else{


                                      if(enCity.length > 199 ){
                                          $('.addresscityError').html("Only 199 chacters allowed!");
                                          }

                                           if(enCity.length > 1 && enStreet.length < 1 ){
                                          $('.addressstreetError').html("Please select street!");
                                          }


                                      if(enStreet.length > 255 ){
                                          $('.addressstreetError').html("Only 255 chacters allowed!");
                                          }
                                      if(enStreet.length > 1 && enCity.length < 1 ){
                                          $('.addresscityError').html("Please select city first!");
                                          }




                                      if(enZip.length > 6 ){
                                          $('.addresszipError').html("Only 6 chancters allowed!");
                                          }


                                      if( isNaN(enZip) == true ){
                                          $('.addresszipError').html("Not a number!");
                                          }

                                       if(enZip.length > 1 && enStreet.length < 1 ){
                                           $('.addressstreetError').html("Please select street first!");
                                           }

                                      if(enZip.length < 1 && enStreet.length > 1 ){
                                           $('.addresszipError').html("Zip code can't be blank!");
                                           }

                               }

                       }

                     if(enKeyAccountManager == 0)
                      {
                          if( enCity.length < 1 || enStreet.length < 1 || enZip.length < 1 ) {

                               $('.mainAdrsErrorMsg').html("Please fill all fields of main address!");

                               setTimeout(function(){
                                  $('.mainAdrsErrorMsg').html("");

                               }, 6000);
                          }

                          if( enOperativeCity.length < 1 && enOperativeStreet.length < 1 && enOperativeZip.length < 1 )
                          {
                               $('.mainAdrsErrorMsg').html("Please fill operative address!");
                               setTimeout(function(){
                                  $('.mainAdrsErrorMsg').html("");

                               }, 6000);

                         }

                         if( enOperativeCity.length > 1 || enOperativeStreet.length > 1 || enOperativeZip.length > 1)
                         {

                                         if( enOperativeRegCountry == "" ){
                                                 $('.oprtvCountryError').html("Please select Operative country!");

                                                 setTimeout(function(){
                                                      $('.oprtvCountryError').html("");

                                                   }, 6000);

                                           }else{

                                                  if(enOperativeCity.length > 199 ){
                                                      $('.oprtvAddresscityError').html("Only 199 chacters allowed!");
                                                      }

                                                   if(enOperativeCity.length > 1 && enOperativeStreet.length < 1 ){
                                                      $('.oprtvAddressStreetError').html("Please select operative street!");
                                                      }


                                                  if(enOperativeStreet.length > 255 ){
                                                      $('.oprtvAddressStreetError').html("Only 255 chacters allowed!");
                                                      }
                                                  if(enOperativeZip.length > 6 ){
                                                      $('.oprtvAddressZipError').html("Only 6 chancters allowed!");
                                                      }
                                                  if( isNaN(enOperativeZip) == true ){
                                                      $('.oprtvAddressZipError').html("Not a number!");
                                                      }

                                                   if(enOperativeStreet.length > 1 && enOperativeCity.length < 1 ){
                                                       $('.oprtvAddresscityError').html("Please select operative city first!");
                                                       }

                                                   if(enOperativeZip.length > 1 && enOperativeStreet.length < 1 ){
                                                       $('.oprtvAddressStreetError').html("Please select street first!");
                                                       }
                                                  if(enOperativeZip.length < 1 && enOperativeStreet.length > 1 ){
                                                       $('.oprtvAddressZipError').html("Zip code can't be blank");
                                                       }

                                           }

                         }

                      }

              //   alert(user_id+'/'+enRegCountry+"/"+enCity+'/'+enStreet+'/'+enZip+'/'+enKeyAccountManager+'/'+ enOperativeRegCountry+'/'+ enOperativeCity+'/'+enOperativeStreet +'/'+ enOperativeZip+'/'+token);

                                             $.ajax({
                             					type: "POST",

                                                 url: "<?php echo url('api/entityAddress');  ?>",
                                                 data: {
                                                     'user_id' : user_id,
                                                     'juris_cntry' :  enRegCountry,
                                                     'city' : enCity,
                                                     'street_add' : enStreet,
                                                     'postal_code' : enZip,
                                                     'oprting_addrs_same' : enKeyAccountManager,
                                                     'oprt_juris_cntry' : enOperativeRegCountry,
                                                     'oprt_city' : enOperativeCity,
                                                     'oprt_street_add' : enOperativeStreet,
                                                     'oprt_postal_code' : enOperativeZip,
                                                     '_token' : entoken,

                                                 },

                             					success: function(data) {
                                                     triggerAlert('Congratulations! Entity address has been added.', 'success');
                                                      return data;

                                                 },
                                                 error: function(xhr, status, error) {
                                                    var erroJson = JSON.parse(xhr.responseText);
                                                   // alert(erroJson.error);

                                                    var juris_cntry_error = erroJson.error.juris_cntry;
                                                    var city = erroJson.error.city;
                                                    var street_add = erroJson.error.street_add;
                                                     var postal_code = erroJson.error.postal_code;
                                                   // var oprting_addrs_same = erroJson.error.reg_num;
                                                    var oprt_juris_cntry = erroJson.error.oprt_juris_cntry;
                                                     var oprt_city = erroJson.error.oprt_city;
                                                    var oprt_street_add = erroJson.error.oprt_street_add;
                                                    var oprt_postal_code = erroJson.error.oprt_postal_code;


                                                   // alert(erroJson.error);

                                                    if(juris_cntry_error){
                                                          $('.addressCountryError ').html(juris_cntry_error);
                                                          $('.addressCountryError ').addClass('alert alert-danger');
                                                           }
                                                     if(city){
                                                          $('.addresscityError ').html(city);
                                                          $('.addresscityError').addClass('alert alert-danger');
                                                           }
                                                     if(street_add){
                                                          $('.addressstreetError ').html(street_add);
                                                          $('.addressstreetError ').addClass('alert alert-danger');
                                                           }
                                                       if(postal_code){
                                                          $('.addresszipError ').html(postal_code);
                                                          $('.addresszipError ').addClass('alert alert-danger');
                                                           }

                                                     if(oprt_juris_cntry){
                                                          $('.oprtvCountryError ').html(oprt_juris_cntry);
                                                          $('.oprtvCountryError ').addClass('alert alert-danger');
                                                           }
                                                     if(oprt_city){
                                                          $('.oprtvAddresscityError  ').html(oprt_city);
                                                          $('.oprtvAddresscityError  ').addClass('alert alert-danger');
                                                           }
                                                     if(oprt_street_add){
                                                          $('.oprtvAddressStreetError').html(oprt_street_add);
                                                          $('.oprtvAddressStreetError').addClass('alert alert-danger');
                                                           }
                                                     if(oprt_postal_code){
                                                          $('.oprtvAddressZipError ').html(oprt_postal_code);
                                                          $('.oprtvAddressZipError ').addClass('alert alert-danger');
                                                           }

                                                     setTimeout(function(){
        $('.addressCountryError, .addresscityError, .addressstreetError, .addresszipError, .oprtvCountryError, .oprtvAddresscityError, .oprtvAddressStreetError, .oprtvAddressZipError' ).html("");
        $('.addressCountryError, .addresscityError, .addressstreetError, .addresszipError, .oprtvCountryError, .oprtvAddresscityError, .oprtvAddressStreetError, .oprtvAddressZipError').removeClass('alert alert-danger'); }, 4000);


                                                 }

                             				});
         });

           $("#sourceDeclr").click(function(){
               const cap = JSON.stringify($("#eSourceCap").val());
               const wealth = JSON.stringify( $("#eSourceWealth").val());
               const fund = JSON.stringify($("#eSourceFund").val());
               const user_id = "<?php echo Auth::user()->id ?>";
               const token = $("#eSourcetoken").val();




           //  alert(user_id+'/'+cap+'/'+wealth+'/'+fund+"/"+token);

                                      $.ajax({
                             					type: "POST",

                                                 url: "<?php echo url('api/sourceDeclairation');  ?>",
                                                 data: {
                                                     'user_id' : user_id,
                                                     'cap_source' :  cap,
                                                     'wealth_source' : wealth,
                                                     'fund_source' : fund,
                                                     'capArray' : $("#eSourceCap").val(),
                                                     'wealthArray' : $("#eSourceWealth").val(),
                                                     'fundArray' : $("#eSourceFund").val(),
                                                     '_token': token,

                                                 },
                             					success: function(data) {
                                                     triggerAlert('Congratulations! Source declaration has been added.', 'success');
                                                      return data;

                                                 },
                                                 error: function(xhr, status, error) {
                                                   var erroJson = JSON.parse(xhr.responseText);
                                                   // alert(erroJson.error);

                                                   var cap_source_error = erroJson.error.capArray;
                                                    var wealth_source_error = erroJson.error.wealthArray;
                                                    var fund_source_error = erroJson.error.fundArray;
                                                   // alert(erroJson.error);

                                                    if(cap_source_error || wealth_source_error || fund_source_error ){
                                                          $('.source_validationErr').html('Please select Source!');
                                                          $('.source_validationErr').addClass('alert alert-danger');
                                                    }
                                                     setTimeout(function(){
                                                         $('.source_validationErr').html("");
                                                         $('.source_validationErr').removeClass('alert alert-danger');

                                                         }, 4000);
                                                 }
                             				});

         });

           $("#addtnlinfo").click(function(){
           //  alert();
             // all additional information

                         const enbusiNature = $('#ebusiNature').val();
                        const enAppliPerpose = $('#appliPerpose').val().trim();
                         const eaddRegCountry = $('#eaddRegCountry').val();
                        const enAdditnlEntityPhone = $('#additnlEntityPhone').val();
                          const enCompany = $('#eCompany').val();

                         const token = $('#eAdditionaltoken').val();
                         const user_id = "<?php echo Auth::user()->id ?>";

                         if(enAppliPerpose.length > 55){
                             $('.enAppliPerposeNameError').html("!Only 55 chacters allowed");
                         }
                         if(enAdditnlEntityPhone.length > 11){
                             $('.enAdditnlEntityPhoneError').html("!Not a valid mobile");
                         }

                      //  alert(user_id+"/"+enbusiNature+'/'+enAppliPerpose+'/'+enAdditnlEntityPhone+'/'+enCompany+'/'+token);

                                             $.ajax({
                             					type: "POST",

                                                 url: "<?php echo url('api/additionalInformation');  ?>",
                                                 data: {
                                                     'user_id' : user_id,
                                                     'entity_nature' :  enbusiNature,
                                                     'appli_purpose' : enAppliPerpose,
                                                     'listed_country' : eaddRegCountry,
                                                     'additional_mob' : enAdditnlEntityPhone,
                                                     'web_address' : enCompany,
                                                      '_token': token,

                                                 },
                             					success: function(data) {
                                                     triggerAlert('Congratulations! Addition information has been added.', 'success');
                                                      return data;

                                                 },
                                                 error: function(xhr, status, error) {
                                                    var erroJson = JSON.parse(xhr.responseText);
                                                   // alert(erroJson.error);
                                                   var entity_nature_error = erroJson.error.entity_nature;
                                                    var appli_purpose_error = erroJson.error.appli_purpose;
                                                      var listed_country_error = erroJson.error.listed_country;
                                                    var additional_mob_error = erroJson.error.additional_mob;
                                                      var web_address_error = erroJson.error.web_address;

                                                   // alert(erroJson.error);

                                                    if(entity_nature_error){
                                                          $('.ebusiNatureError').html(entity_nature_error);
                                                          $('.ebusiNatureError').addClass('alert alert-danger');
                                                           }
                                                     if(appli_purpose_error){
                                                          $('.enAppliPerposeNameError').html(appli_purpose_error);
                                                          $('.enAppliPerposeNameError').addClass('alert alert-danger');
                                                           }
                                                     if(listed_country_error){
                                                          $('.eaddRegCountryError').html(listed_country_error);
                                                          $('.eaddRegCountryError').addClass('alert alert-danger');
                                                           }
                                                     if(additional_mob_error){
                                                          $('.enAdditnlEntityPhoneError').html(additional_mob_error);
                                                          $('.enAdditnlEntityPhoneError').addClass('alert alert-danger');
                                                           }
                                                     if(web_address_error){
                                                          $('.eCompanyError').html(web_address_error);
                                                          $('.eCompanyError').addClass('alert alert-danger');
                                                           }

                                                     setTimeout(function(){
                                                         $('.ebusiNatureError, .enAppliPerposeNameError, .eaddRegCountryError, .enAdditnlEntityPhoneError, .eCompanyError').html("");
                                                         $('.ebusiNatureError, .enAppliPerposeNameError, .eaddRegCountryError, .enAdditnlEntityPhoneError, .eCompanyError').removeClass('alert alert-danger'); }, 4000);


                                                 }

                             				});

         });


                       //........ related parties directors section start
         $("#directorFormSubmit").click(function(){

                if(document.getElementsByName("selectPartnerType")['0'].checked == true){
                      // On Indivisual selection


                     const user_id = "<?php echo Auth::user()->id ?>";
                     const token = $("#extDirtoken").val();

                      const partnerId = $("#partnerId").val();
                      const partnerType = $("#directoTypeIndi").val();
                      const indivisualSubmitStatus = 3;
                     const firstName = $("#firstName").val();
                      const MidName = $("#MidName").val();
                      const lastName = $("#lastName").val();
                        const date = $("#indidate").val();
                         const jurisCountry = $("#jurisCountry").val();
                          const countryResidence = $("#countryResidence").val();
                          const idDocIssuedCountry = $("#Region_of_Issue").val();
                            const idDocType = $('input[name=idDocType]:checked', '#directorForm').val();
                             const 	idDocNum = $("#idDocNum").val();
                             const idDocUploadedFront = $("#idDocUploadedFront").val();
                              const idDocUploadedBack = $("#idDocUploadedBack").val();




                      var formData = new FormData( $('#directorForm')[0]);
                      formData.append('user_id' , user_id);
                      formData.append('status' , indivisualSubmitStatus);
                      formData.append('partnerType' , partnerType);
                       formData.append('dob' , date);
                         formData.append('dob' , date);
                          formData.append('idDocIssuedCountry' , idDocIssuedCountry);




                            if((firstName.length< 1) || (lastName.length< 1) || (date.length< 1) || (document.getElementById('jurisCountry').selectedIndex < 0) || (document.getElementById('countryResidence').selectedIndex < 0) || (document.getElementById('Region_of_Issue').selectedIndex < 0 )  || idDocType.length< 1 || idDocNum.length< 1 || idDocUploadedFront.length< 1 || idDocUploadedBack.length< 1  ){

                                 $(".msgValidErrIndisul").html('<span class="text-red"> All fields are mandatory and valid! </span>');
                                 setTimeout(function () {
                                                         $(".msgValidErrIndisul").html('');
                                                     }, 1000);
                           }else{
                                //  alert("Fields are validaed!");



                                                 	$.ajax({
                                     					type: "POST",

                                                         url: "<?php echo url('api/addGeneralPartner');  ?>",

                                                         enctype : 'multipart/form-data',
                                                         processData: false,
                                                         contentType: false,
                                                          data : formData,

                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');

                                                              if(data){

                                                                  // alert(data.indivisualPartnrType+data.indivisualPartnrId+data.indivisualPartnrfirstName+data.indivisualPartnrLastname+data.message);

                                                                    setTimeout(function () {
                                                                                 $('#directorForm').load('#directorForm');
                                                                             }, 1000);


                                                                    $("#Add-Director").hide();
                                                                    $(".addDirBtnDiv").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'   data-modal='delete_box_modal_"+data.indivisualPartnrId+"' id='"+data.indivisualPartnrId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg  viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.indivisualPartnrfirstName+" "+data.indivisualPartnrLastname+"</div> <svg  viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editCompORDirtr("+data.indivisualPartnrId+", "+data.indivisualPartnrType+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+data.indivisualPartnrId+"' id='"+data.indivisualPartnrId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box max-width-350px'> <div class='text-center p-3'><svg  viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmDelete("+data.indivisualPartnrId+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+data.indivisualPartnrId+");'>Cancel </button></div></div></div></div>");

                                                              }else{
                                                                    return "Indivisual details couldn't be added!";
                                                              }

                                                               $(that).parent().parent().parent().parent().hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);

                                                    var firstName_error = erroJson.error.firstName;
                                                    var lastName_error = erroJson.error.lastName;
                                                    var dob_error = erroJson.error.dob;
                                                    var jurisCountry_error = erroJson.error.jurisCountry;
                                                    var countryResidence_error = erroJson.error.countryResidence;
                                                    var idDocIssuedCountry_error = erroJson.error.idDocIssuedCountry;
                                                    var idDocType_error = erroJson.error.idDocType;
                                                    var idDocNum_error = erroJson.error.idDocNum;
                                                    var idDocUploadedFront_error = erroJson.error.idDocUploadedFront;
                                                    var idDocUploadedBack_error = erroJson.error.idDocUploadedBack;

                                            if(erroJson.error.extrJurisCountry || erroJson.error.companyName ||  erroJson.error.companyRegNum || erroJson.error.countryIncorp || erroJson.error.countryResidence ){

                                                         $('.msgValidErrIndisul').html('All fields are mandatory and valid');
                                                          $('.msgValidErrIndisul').addClass('alert alert-danger');
                                                    }


                                                   // alert(erroJson.error);

   if(firstName_error || lastName_error || dob_error || jurisCountry_error || countryResidence_error || idDocIssuedCountry_error || idDocType_error || idDocNum_error || idDocUploadedFront_error || idDocUploadedBack_error ){
                                                          $('.msgValidErrIndisul').html('All fields are mandatory and valid');
                                                          $('.msgValidErrIndisul').addClass('alert alert-danger');
                                                           }


                                                     setTimeout(function(){
                                                         $('.msgValidErrIndisul').html("");
                                                         $('.msgValidErrIndisul').removeClass('alert alert-danger'); }, 4000);

                                                      }

                                     				});

                             }



                }else{

                    // On entity selection


                     var compID = $("#compID").val();
                      var compName = $("#compName").val();
                      var compPartnerType = $("#compPartnerType").val();

                      var leastCompanyName = $("#companyName").val();
                      var leastCompanyReg = $("#companyRegNum").val();
                      var leastIncopCountry =  $("#companyName").val();


                      if(leastCompanyName.length < 1 || leastCompanyReg.length < 1 || leastIncopCountry.length < 1 ){


                          $(".msgErrmsg").html('<span class="text-red"> All fields are mandatory! </span>');

                           setTimeout(function () {
                                                 $(".msgErrmsg").html('');
                                             }, 1000 );

                      }else{

                        //  alert(compID);

                            document.getElementById("directorForm").reset();

                            setTimeout(function () {
                                      $('#directorForm').load('#directorForm');
                                           }, 1000);

                            $("#Add-Director").hide();

                             $(".addDirBtnDiv").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg  viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'  data-modal='delete_box_modal_"+compID+"' id='"+compID+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg  viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+compName+"</div> <svg  viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editCompORDirtr("+compID+", "+compPartnerType+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+compID+"' id='"+compID+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box max-width-350px'> <div class='text-center p-3'><svg  viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmDelete("+compID+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+compID+");'>Cancel </button></div></div></div></div>");

                      }
            }





              });

         function extradirectorSubmit(that){


                    //alert(that);

                      const user_id = "<?php echo Auth::user()->id ?>";
                         const token = $("#extDirtoken").val();

                         const 	companyName = $("#companyName").val();
                          const companyRegNum = $("#companyRegNum").val();
                           const countryIncorp =  $("#countryIncorp").val();

                          const partnerId = $("#partnerId").val();
                           const partnerType = $("#dirTypeEntity").val();
                             const  FirstName =  $("#extDirFirstName").val();
                                 const  MidName =  $("#extDirMidName").val();
                                     const  LastName =  $("#etxDirLastName").val();
                                         const date =  $("#extrdate").val();

                           const JurisCountry =  $("#extrJurisCountry").val();
                            const CountryResidence =  $("#extrCountryResidence").val();
                                const  Region_of_Issue = $("#extridDocIssuedCountry").val();
                                    const idDocType = $('input[name=extIdDocType]:checked', '#extradirectorEntityForm').val();
                                       const idDocNum = $("#extridDocNum").val();
                                           const idDocUploadedFront = $("#extrIdDocUploadedFront").val();
                                               const idDocUploadedBack = $("#extrIdDocUploadedBack").val();
                                                 const directorSubmitStatus = 3;

                      var formData = new FormData( $('#extradirectorEntityForm')[0]);
                      formData.append('user_id' , user_id);
                      formData.append('status' , directorSubmitStatus);

                      formData.append('partnerId' , partnerId);
                       formData.append('partnerType' , partnerType);
                      formData.append('companyName' , companyName);
                      formData.append('companyRegNum' , companyRegNum);
                      formData.append('countryIncorp' , countryIncorp);

                        formData.append('firstName' , FirstName);
                          formData.append('MidName' , MidName);
                            formData.append('lastName' , LastName);

                              formData.append('dob' , date);
                              formData.append('JurisCountry' , JurisCountry);
                                  formData.append('countryResidence' , CountryResidence);
                                    formData.append('Region_of_Issue' , Region_of_Issue);

                           formData.append('idDocType' , idDocType);
                          formData.append('idDocNum' , idDocNum);
                          //  formData.append('idDocUploadedFront' , idDocUploadedFront);
                            //  formData.append('idDocUploadedBack' , idDocUploadedBack);



            if(companyName.length < 1 || companyRegNum.length < 1 || (document.getElementById('countryIncorp').selectedIndex < 0 ) || FirstName.length < 1 || LastName.length < 1 || date.length < 1
                    || (document.getElementById('extrJurisCountry').selectedIndex < 0 ) || (document.getElementById('extrCountryResidence').selectedIndex < 0 ) || (document.getElementById('extridDocIssuedCountry').selectedIndex < 0 )
                            || idDocNum.length < 1 || idDocType.length < 1  || idDocUploadedFront.length < 1   || idDocUploadedBack.length < 1  ){

                        $(".allValidationExtraDir").html('<span class="text-red">All fields are mandatory!</span>');
                        setTimeout( function(){
                              $(".allValidationExtraDir").html('');
                        }, 1000);


                    }else{

                    //   alert(companyName+"/"+companyRegNum+"/"+countryIncorp+"/"+token+"/"+user_id+"/"+partnerId+"/"+partnerType+"/"+directorSubmitStatus+"/"+FirstName+"/"+MidName+"/"+LastName+"/"+date+"/"+"/"+JurisCountry+"/"+CountryResidence+"/"+Region_of_Issue+"/"+idDocType+"/"+idDocNum+"/"+idDocUploadedFront+"/"+idDocUploadedBack);

                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/addGeneralPartner');  ?>",
                                                            enctype : 'multipart/form-data',
                                                         processData: false,
                                                         contentType: false,
                                                          data : formData,



                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');

                                                              if(data){

                                                                //  alert(data.directorFirstname);

                                                                $("#compID").val(data.companyID);
                                                                $("#compName").val(data.compName);
                                                                $("#compPartnerType").val(data.compPartnerType);

                                                                $(".extraAddDirtor").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg  viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'  data-modal='delete_box_modal_extr_"+data.directorId+"' id='"+data.directorId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg  viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.directorFirstname+" "+data.directorLastname+"</div> <svg  viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editCompORDirtr("+data.companyID+", "+data.compPartnerType+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_extr_"+data.directorId+"' id='"+data.directorId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box max-width-350px'> <div class='text-center p-3'><svg  viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button type='button' class='modal_btn_theme' onClick='confirmDeleteExt("+data.directorId+")' >Delete</button><button type='button' class='btn bg-whitesmoke' onClick='cancelDeleteExt("+data.directorId+")'>Cancel </button></div></div></div></div>");

                                                                 document.getElementById("extradirectorEntityForm").reset();

                                                              }else{
                                                                    return "Director cant be added";
                                                              }

                                                            $(that).parent().parent().parent().parent().hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                    var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);
                                                     var firstName_error = erroJson.error.firstName;
                                                    var lastName_error = erroJson.error.lastName;
                                                    var dob_error = erroJson.error.dob;
                                                    var jurisCountry_error = erroJson.error.JurisCountry;
                                                    var countryResidence_error = erroJson.error.countryResidence;
                                                    var idDocIssuedCountry_error = erroJson.error.Region_of_Issue;
                                                    var idDocType_error = erroJson.error.idDocType;
                                                    var idDocNum_error = erroJson.error.idDocNum;
                                                    var idDocUploadedFront_error = erroJson.error.idDocUploadedFront;
                                                    var idDocUploadedBack_error = erroJson.error.idDocUploadedBack;

        if(firstName_error || lastName_error || dob_error || jurisCountry_error || countryResidence_error || idDocIssuedCountry_error || idDocType_error || idDocNum_error || idDocUploadedFront_error || idDocUploadedBack_error ){
                                                          $('.allValidationExtraDir').html('All fields are mandatory');
                                                          $('.allValidationExtraDir').addClass('alert alert-danger');
                                                           }


                                                     setTimeout(function(){
                                                         $('.allValidationExtraDir').html("");
                                                         $('.allValidationExtraDir').removeClass('alert alert-danger'); }, 4000);

                                                    }

                                     				});


                 }
           }


          function confirmDelete(id){


            const token = $('#eAdditionaltoken').val();
            const toDeleteId = id;
           // alert(toDeleteId);


            $.ajax({

            type: 'POST',
              //  url: 'url(app()->getLocale(),'api/addGeneralPartner'))',
                url: "<?php echo url('api/deleteGeneralPartner'); ?>",
              // url: "url(app(),'api/addGeneralPartner')",

             data: {

                 'toDeleteId' : toDeleteId,
                 '_token' : token,
             },
             success: function(data) {

                       triggerAlert('Company Or Director deleted successfuly!', 'success');
                       //return data;


                       if(data){
                         $("#delete_box_modal"+"_"+id).parent().remove();
                       }

                         },

             error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                          // alert(erroJson.error);
                                       }
                 });

                // alert("ok delete it"+"-"+id);



     }


          function confirmDeleteExt(id){


                                        // alert("ok delete it"+"-"+id);


                            const token = $('#eAdditionaltoken').val();
                            const toDeleteId = id;

                           // alert(toDeleteId);


                            $.ajax({

                            type: 'POST',

                                url: "<?php echo url('api/deleteSingleDirector'); ?>",


                             data: {

                                 'toDeleteId' : toDeleteId,
                                 '_token' : token,
                             },
                             success: function(data) {

                                       triggerAlert('Company Or Director deleted successfuly!', 'success');
                                       //return data;


                                       if(data){
                                         $("#delete_box_modal_extr"+"_"+id).parent().remove();

                                      // return data;

                                       }

                                         },

                             error: function(xhr, status, error) {
                                           var erroJson = JSON.parse(xhr.responseText);
                                          // alert(erroJson.error);
                                                       }
                             });

         }
         //........


      </script>
      <script>
         // function for previous button
                     function moveOn2nd(){
                                     $("#second_div").css("display", "block");
                                     $("#third").css("display", "none");
                                      }

                     function moveOn3rd(){
                                      $("#third").css("display", "block");
                                      $("#fourth").css("display", "none");
                                 }
          // end function for previous button


                // to direct open basicnformation form
                function basicformdirect(){
                  //  alert();
                    $("#first").css({"display":"none"});
                  $("#fifth").css({"display":"block"});
                }
           // end to direct open basicnformation form
      </script>
      <!-- End JS form total form submission--->
      <script>
         function onChangeCallback(ctr){
                $(".country_box").load("{{ url('api/filter/get_country_record') }}",{'country_code':ctr});
            }
      </script>
      <!-- script addedon 28sept22 new design--->
      <script>
         $("#Individual").click(function(){
         $(".Individual").css({"display":"block"});
         $(".Entity").css({"display":"none"});
         $(".Entity").css({"display":"none"});

         });

         $("#Entity").click(function(){
         $(".Individual").css({"display":"none"});
         $(".Entity").css({"display":"block"});
         });


         $(".close-Entity-Add-Director").click(function(){
         $("#Entity-Add-Director_100").css({"display":"none"});
         });

         $(function(){
         $('.datepicker').datepicker( {
              autoclose: true,
                //  dateFormat: 'yy-mm-dd'

             });
         });


      </script>
      <!-- ends script addedon 28sept22 new design --->
       <script>
     // start edit forms script
               function editCompORDirtr(id, type){
                //   alert(id+"/"+type);
                   const partnerType = type;
                   const partnerId = id;
                 //  const token = $("#editEntitytoken").val();

                  $(".editSection").load("<?php echo url('api/editGeneralPartner'); ?>" , { 'id': partnerId , 'partnerType' : partnerType })

                                // if(partnerType == 1){

                                //      $(".editSection").load("<?php echo url('api/editGeneralPartner'); ?>" , { 'id': partnerId , 'partnerType' : partnerType })
                                // }


                                // if(partnerType == 2){

                                //   $(".editSection2").load(" <?php echo url('api/editGeneralPartner');  ?>" , { 'id': partnerId , 'partnerType' : partnerType  });
                                // }

               }


               function editSingleDirector(id, type){

                   const partnerType = type;
                   const Id = id;
                 //  const token = $("#editEntitytoken").val();
                 // alert(Id +"/"+partnerType);
                  $(".editSection2").load("<?php echo url('api/editSingleDirector'); ?>" , { 'id': Id , 'partnerType' : partnerType })
                  //  $(".editSection2").load("<?php echo url('api/editSingleDirector'); ?>" , { 'id': partnerId , 'partnerType' : partnerType })



               }

   //  ends edit forms script
       </script>
    <!-- start Add-Ultimate-Beneficial owner setion JS-->
        <script>

         $("#Add-Ultimate-Beneficial .close-modal, #cancelOwnerForm").click(function(){
              $("#Add-Ultimate-Beneficial").css({"display":"none"});
         });




        $("#submitOwnerForm").click(function(){
                // alert();
                     const user_id = "<?php echo Auth::user()->id ?>";
                     // const token = $("#extDirtoken").val();

                      const partnerId = $("#owner_partnerId").val();

                      const ownerStatus = 3;

                     const firstName = $("#owner_fname").val();
                      const MidName = $("#owner_midName").val();
                      const lastName = $("#owner_lastName").val();
                        const DOB = $("#owner_dob").val();
                         const jurisCountry = $("#owner_Jurisdiction_country").val();
                          const countryResidence = $("#owner_residence_country").val();
                           const idDocIssuedCountry = $("#owner_docIssueRegion").val();
                            const idDocType = $('input[name=owner_idDocType]:checked').val();
                             const 	idDocNum = $("#owner_IdNum").val();


                              //const idDocUploadedFront = $("#idDocUploadedFront").val();
                              // const idDocUploadedBack = $("#idDocUploadedBack").val();

                                const idDocUploadedFront = $("#ownerId_frontCopy").attr('value');
                                    const idDocUploadedBack = $("#ownerId_BackCopy").attr('value');

                                        const owner_addressproof = $("#owner_addressproof").attr('value');
                                            const ownerDoc_type = $("#ownerDoc_type").val();
                                                const addProofIssuedate = $("#addProofIssuedate").val();

                                        const owner_addProof_country = $("#owner_addProof_country").val();
                                            const owner_addressproof_state = $("#owner_addressproof_state").val();
                                                const owner_addressproof_city = $("#owner_addressproof_city").val();
                                                    const owner_addressproof_zipcode = $("#owner_addressproof_zipcode").val();
                                                        const owner_addressproof_Street = $("#owner_addressproof_Street").val();





                      var formData = new FormData( $('#beneficialOwner')[0]);
                      formData.append('user_id' , user_id);
                      formData.append('status' , ownerStatus);

                       formData.append('DOB' , DOB);
                         formData.append('addProofIssuedate' , addProofIssuedate);
                         formData.append('selectedidDocType' , idDocType);
                         // formData.append('idDocIssuedCountry' , idDocIssuedCountry);




  if( (firstName.length< 1) || (lastName.length< 1) || (DOB.length< 1) || (document.getElementById('owner_Jurisdiction_country').selectedIndex < 0) || (document.getElementById('owner_residence_country').selectedIndex < 0)
  || (document.getElementById('owner_docIssueRegion').selectedIndex < 0 )  || (idDocType.length< 1 ) || (idDocNum.length< 1) || ($("#ownerId_frontCopy").val() < 1) || ($("#ownerId_BackCopy").val() < 1) || ( $("#owner_addressproof").val() < 1 )
  || (ownerDoc_type.length< 1) || (addProofIssuedate.length < 1) || (owner_addProof_country.length < 1) || (owner_addressproof_state.length < 1) || (owner_addressproof_city.length < 1) || (owner_addressproof_zipcode.length < 1) || (owner_addressproof_Street.length < 1)){

                                 $("#Add-Ultimate-Beneficial .msgValidErrIndisul").html('<span class="text-red"> All fields are mandatory! </span>');
                                 setTimeout(function () {
                                                         $("#Add-Ultimate-Beneficial .msgValidErrIndisul").html('');
                                                     }, 1000);
                           }else{
                                //  alert("Fields are validaed!");



                                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/addBeneficialOwner');  ?>",

                                                         enctype : 'multipart/formData',
                                                         processData: false,
                                                         contentType: false,
                                                          data : formData,

                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');

                                                              if(data){

                                                                  console.log(data.ownerId+data.ownerfirstName);

                                                                    document.getElementById("beneficialOwner").reset();
                                                                    $("#Add-Ultimate-Beneficial").hide();
                                                                    $(".addsubmittedOwner").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg  viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'   data-modal='delete_box_modal_"+data.ownerId+"' id='"+data.ownerId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg  viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.ownerfirstName+" "+data.ownerLastname+"</div> <svg  viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editSubmittedOwner("+data.ownerId+", "+data.ownerpartnerId+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+data.ownerId+"' id='"+data.ownerId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box max-width-350px'> <div class='text-center p-3'><svg  viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmBeneficialOwnerDelete("+data.ownerId+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+data.ownerId+");'>Cancel </button></div></div></div></div>");

                                                              }else{
                                                                    return "Indivisual details couldn't be added!";
                                                              }

                                                               $("#Add-Ultimate-Beneficial").hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);


                                                   // alert(erroJson.error);

   if(erroJson.error.owner_fname || erroJson.error.owner_lastName || erroJson.error.owner_dob || erroJson.error.owner_Jurisdiction_country || erroJson.error.owner_residence_country || erroJson.error.owner_docIssueRegion ||
   erroJson.error.owner_idDocType || erroJson.error.owner_IdNum || erroJson.error.ownerId_frontCopy || erroJson.error.ownerId_BackCopy || erroJson.error.owner_addressproof || erroJson.error.ownerDoc_type ||
   erroJson.error.addProofIssuedate || erroJson.error.owner_addProof_country || erroJson.error.owner_addressproof_state || erroJson.error.owner_addressproof_city ||
    erroJson.error.owner_addressproof_zipcode || erroJson.error.owner_addressproof_Street ){

                                                           $("#Add-Ultimate-Beneficial .msgValidErrIndisul").html('Invalid input!');
                                                           $("#Add-Ultimate-Beneficial .msgValidErrIndisul").addClass('alert alert-danger');

                                                           }

                                                     setTimeout(function(){
                                                         $("#Add-Ultimate-Beneficial .msgValidErrIndisul").html("");
                                                         $("#Add-Ultimate-Beneficial .msgValidErrIndisul").removeClass('alert alert-danger'); }, 4000);




                                                         }

                                     				});

                                      //$(this).parent().parent().parent().parent().hide();



                             };
           });


        function confirmBeneficialOwnerDelete(id){


            const token = $('#eAdditionaltoken').val();
            const toDeleteId = id;
          //  alert(toDeleteId);


            $.ajax({

            type: 'POST',
              //  url: 'url(app()->getLocale(),'api/addGeneralPartner'))',
                url: "<?php echo url('api/deleteBeneficialOwner'); ?>",
              // url: "url(app(),'api/addGeneralPartner')",

             data: {

                 'toDeleteId' : toDeleteId,
                 '_token' : token,
             },
             success: function(data) {

                       triggerAlert('Beneficial Owner deleted successfuly!', 'success');
                       //return data;


                       if(data){
                         $("#delete_box_modal"+"_"+id).parent().remove();
                       }

                         },

             error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                          // alert(erroJson.error);
                                       }
                 });

                // alert("ok delete it"+"-"+id);



        }


        function editSubmittedOwner(id , partnerID){

           const ownerId = id;
           const partnerid = partnerID;

                 //  const token = $("#editEntitytoken").val();
              //    alert(ownerId +"/"+partnerid);
                  $(".OwnereditSection").load("<?php echo url('api/editBeneficialOwner'); ?>" , { 'id': ownerId , 'partnerId' : partnerid })

         }



     </script>
<!--end  Ultimate-Beneficial owner setion JS-->
<!-- start significant-Controller setion JS-->
      <script>

         $("#Add_Significant_Controller .close-modal, #cancelSignificantForm").click(function(){
              $("#Add_Significant_Controller").css({"display":"none"});
         });




        $("#submitSignificantForm").click(function(){
                // alert();
                     const user_id = "<?php echo Auth::user()->id ?>";
                     // const token = $("#extDirtoken").val();

                      const partnerId = $("#significant_partnerId").val();

                      const significantStatus = 3;

                     const firstName = $("#significant_fname").val();
                      const MidName = $("#significant_midName").val();
                      const lastName = $("#significant_lastName").val();
                        const DOB = $("#significant_dob").val();
                         const jurisCountry = $("#significant_Jurisdiction_country").val();
                          const countryResidence = $("#significant_residence_country").val();
                           const idDocIssuedCountry = $("#significant_docIssueRegion").val();
                            const idDocType = $('input[name=significant_idDocType]:checked').val();
                             const 	idDocNum = $("#significant_IdNum").val();


                              //const idDocUploadedFront = $("#idDocUploadedFront").val();
                              // const idDocUploadedBack = $("#idDocUploadedBack").val();

                                const idDocUploadedFront = $("#significantId_frontCopy").attr('value');
                                    const idDocUploadedBack = $("#significantId_BackCopy").attr('value');

                                        const significant_addressproof = $("#significant_addressproof").attr('value');
                                            const significantDoc_type = $("#significantDoc_type").val();
                                                const significant_addProofIssuedate = $("#significant_addProofIssuedate").val();

                                        const significant_addProof_country = $("#significant_addProof_country").val();
                                            const significant_addressproof_state = $("#significant_addressproof_state").val();
                                                const significant_addressproof_city = $("#significant_addressproof_city").val();
                                                    const significant_addressproof_zipcode = $("#significant_addressproof_zipcode").val();
                                                        const significant_addressproof_Street = $("#significant_addressproof_Street").val();





                      var formData = new FormData( $('#significantController')[0]);
                      formData.append('user_id' , user_id);
                      formData.append('status' , significantStatus);

                       formData.append('DOB' , DOB);
                         formData.append('addProofIssuedate' , significant_addProofIssuedate);
                         formData.append('selectedidDocType' , idDocType);
                         // formData.append('idDocIssuedCountry' , idDocIssuedCountry);




  if( (firstName.length< 1) || (lastName.length< 1) || (DOB.length< 1) || (document.getElementById('significant_Jurisdiction_country').selectedIndex < 0) || (document.getElementById('significant_residence_country').selectedIndex < 0)
  || (document.getElementById('significant_docIssueRegion').selectedIndex < 0 )  || (idDocType.length< 1 ) || (idDocNum.length< 1) || ($("#significantId_frontCopy").val() < 1) || ($("#significantId_BackCopy").val() < 1) || ( $("#significant_addressproof").val() < 1 )
  || (significantDoc_type.length< 1) || (significant_addProofIssuedate.length < 1) || (significant_addProof_country.length < 1) || (significant_addressproof_state.length < 1) || (significant_addressproof_city.length < 1) || (significant_addressproof_zipcode.length < 1) || (significant_addressproof_Street.length < 1)){

                                 $("#Add_Significant_Controller .msgValidErrIndisul").html('<span class="text-red"> All fields are mandatory! </span>');
                                 setTimeout(function () {
                                                         $("#Add_Significant_Controller .msgValidErrIndisul").html('');
                                                     }, 1000);
                           }else{
                                //  alert("Fields are validaed!");



                                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/addSignificantController');  ?>",

                                                         enctype : 'multipart/formData',
                                                         processData: false,
                                                         contentType: false,
                                                          data : formData,

                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');

                                                              if(data){

                                                                  console.log(data.significantId+data.significantfirstName);

                                                                    document.getElementById("significantController").reset();
                                                                    $("#Add_Significant_Controller").hide();
                                                                    $(".addsubmittedSignificant").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg  viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'   data-modal='delete_box_modal_"+data.significantId+"' id='"+data.significantId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg  viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.significantfirstName+" "+data.significantLastname+"</div> <svg  viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editSubmittedSignificant("+data.significantId+", "+data.significantpartnerId+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+data.significantId+"' id='"+data.significantId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box max-width-350px'> <div class='text-center p-3'><svg  viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmSignificantControllerDelete("+data.significantId+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+data.significantId+");'>Cancel </button></div></div></div></div>");

                                                              }else{
                                                                    return "Indivisual details couldn't be added!";
                                                              }

                                                              //$(this).parent().parent().parent().parent().hide();
                                                             $("#Add_Significant_Controller").hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);

   if(erroJson.error.significant_fname || erroJson.error.significant_lastName || erroJson.error.significant_dob || erroJson.error.significant_Jurisdiction_country || erroJson.error.significant_residence_country || erroJson.error.significant_docIssueRegion ||
   erroJson.error.significant_idDocType || erroJson.error.significant_IdNum || erroJson.error.significantId_frontCopy || erroJson.error.significantId_BackCopy || erroJson.error.significant_addressproof || erroJson.error.significantDoc_type ||
   erroJson.error.significant_addProofIssuedate || erroJson.error.significant_addProof_country || erroJson.error.significant_addressproof_state || erroJson.error.significant_addressproof_city ||
    erroJson.error.significant_addressproof_zipcode || erroJson.error.significant_addressproof_Street ){

                                                           $("#Add_Significant_Controller .msgValidErrIndisul").html('Invalid input!');
                                                           $("#Add_Significant_Controller .msgValidErrIndisul").addClass('alert alert-danger');

                                                           }

                                                     setTimeout(function(){
                                                         $("#Add_Significant_Controller .msgValidErrIndisul").html("");
                                                         $("#Add_Significant_Controller .msgValidErrIndisul").removeClass('alert alert-danger'); }, 4000);


                                                         }

                                     				});




                             };
           });


        function confirmSignificantControllerDelete(id){


            const token = $('#eAdditionaltoken').val();
            const toDeleteId = id;
           // alert(toDeleteId);


            $.ajax({

            type: 'POST',

                url: "<?php echo url('api/deleteSignificantController'); ?>",


             data: {

                 'toDeleteId' : toDeleteId,
                 '_token' : token,
             },
             success: function(data) {

                       triggerAlert('Significant Controller deleted successfuly!', 'success');
                       //return data;


                       if(data){
                         $("#delete_box_modal"+"_"+id).parent().remove();
                       }

                         },

             error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                          // alert(erroJson.error);
                                       }
                 });

                // alert("ok delete it"+"-"+id);



        }


        function editSubmittedSignificant(id , partnerID){

           const significantId = id;
           const partnerid = partnerID;

                 //  const token = $("#editEntitytoken").val();
                //  alert(significantId +"/"+partnerid);
                  $(".SignificantControllerSection").load("<?php echo url('api/editSignificantController'); ?>" , { 'id': significantId , 'partnerId' : partnerid })

         }



     </script>

<!--end  significant-Controller setion JS-->

<!-- start account-trader setion JS-->

      <script>

         $("#Add_Authorised_Account .close-modal, #cancelAccountTraderForm").click(function(){
              $("#Add_Authorised_Account").css({"display":"none"});
         });




        $("#submitAccountTraderForm").click(function(){
                // alert();
                     const user_id = "<?php echo Auth::user()->id ?>";
                     // const token = $("#extDirtoken").val();

                      const partnerId = $("#accountTrader_partnerId").val();

                      const accountTraderStatus = 3;

                     const firstName = $("#accountTrader_fname").val();
                      const MidName = $("#accountTrader_midName").val();
                      const lastName = $("#accountTrader_lastName").val();
                        const DOB = $("#accountTrader_dob").val();
                         const jurisCountry = $("#accountTrader_Jurisdiction_country").val();
                          const countryResidence = $("#accountTrader_residence_country").val();
                           const idDocIssuedCountry = $("#accountTrader_docIssueRegion").val();
                            const idDocType = $('input[name=accountTrader_idDocType]:checked').val();
                             const 	idDocNum = $("#accountTrader_IdNum").val();


                              //const idDocUploadedFront = $("#idDocUploadedFront").val();
                              // const idDocUploadedBack = $("#idDocUploadedBack").val();

                                const idDocUploadedFront = $("#accountTraderId_frontCopy").attr('value');
                                    const idDocUploadedBack = $("#accountTraderId_BackCopy").attr('value');

                                        const accountTrader_addressproof = $("#accountTrader_addressproof").attr('value');
                                            const accountTraderDoc_type = $("#accountTraderDoc_type").val();
                                                const accountTrader_addProofIssuedate = $("#accountTrader_addProofIssuedate").val();

                                        const accountTrader_addProof_country = $("#accountTrader_addProof_country").val();
                                            const accountTrader_addressproof_state = $("#accountTrader_addressproof_state").val();
                                                const accountTrader_addressproof_city = $("#accountTrader_addressproof_city").val();
                                                    const accountTrader_addressproof_zipcode = $("#accountTrader_addressproof_zipcode").val();
                                                        const accountTrader_addressproof_Street = $("#accountTrader_addressproof_Street").val();





                      var formData = new FormData( $('#accountTrader')[0]);
                      formData.append('user_id' , user_id);
                      formData.append('status' , accountTraderStatus);

                       formData.append('DOB' , DOB);
                         formData.append('addProofIssuedate' , accountTrader_addProofIssuedate);
                         formData.append('selectedidDocType' , idDocType);
                         // formData.append('idDocIssuedCountry' , idDocIssuedCountry);




  if( (firstName.length< 1) || (lastName.length< 1) || (DOB.length< 1) || (document.getElementById('accountTrader_Jurisdiction_country').selectedIndex < 0) || (document.getElementById('accountTrader_residence_country').selectedIndex < 0)
  || (document.getElementById('accountTrader_docIssueRegion').selectedIndex < 0 )  || (idDocType.length< 1 ) || (idDocNum.length< 1) || ($("#accountTraderId_frontCopy").val() < 1) || ($("#accountTraderId_BackCopy").val() < 1) || ( $("#accountTrader_addressproof").val() < 1 )
  || (accountTraderDoc_type.length< 1) || (accountTrader_addProofIssuedate.length < 1) || (accountTrader_addProof_country.length < 1) || (accountTrader_addressproof_state.length < 1) || (accountTrader_addressproof_city.length < 1) || (accountTrader_addressproof_zipcode.length < 1) || (accountTrader_addressproof_Street.length < 1)){

                                 $("#Add_Authorised_Account .msgValidErrIndisul").html('<span class="text-red"> All fields are mandatory! </span>');
                                 setTimeout(function () {
                                                         $("#Add_Authorised_Account .msgValidErrIndisul").html('');
                                                     }, 1000);
                           }else{
                                //  alert("Fields are validaed!");



                                                 	$.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/addAuthorisedAccountTrader');  ?>",

                                                         enctype : 'multipart/formData',
                                                         processData: false,
                                                         contentType: false,
                                                          data : formData,

                                     					success: function(data) {
                                                             triggerAlert('Congratulations! You have successfully addded primary details in Wealthmark account.', 'success');

                                                              if(data){

                                                                  console.log(data.accountTraderId+data.accountTraderfirstName);

                                                                    document.getElementById("accountTrader").reset();
                                                                    $("#Add_Authorised_Account").hide();
                                                                    $(".addsubmittedAccountTrader").before("<div class='add-detail-inner-box'><div class='added_user'><div class='added_user-inner'><div class='delete-btn-div'><svg  viewBox='0 0 24 24' fill='none' class='delete-user-btn modal-trigger'   data-modal='delete_box_modal_"+data.accountTraderId+"' id='"+data.accountTraderId+"' onClick='deleteDirtorBlock(this)'  > <path d='M11.94 2.005a9.995 9.995 0 10.01 19.99 9.995 9.995 0 00-.01-19.99zm4.66 13.17l-1.42 1.41-3.17-3.17-3.18 3.17-1.42-1.41 3.18-3.18-3.18-3.18 1.42-1.42 3.18 3.18 3.17-3.18 1.42 1.42-3.18 3.18 3.18 3.18z' fill='currentColor'></path></svg></div><div class='added_user-icon-div'><svg  viewBox='0 0 96 96' fill='none' class='added_user-icon'><path fill='#76808F' d='M36 54h24v30H36z'></path><path d='M36 54h-8c-8.837 0-16 7.163-16 16v14h24V54z' fill='url(#partner-account-light_svg__paint0_linear_24482_26505)'></path><path d='M60 84h24V70c0-8.837-7.163-16-16-16h-8v30z' fill='url(#partner-account-light_svg__paint1_linear_24482_26505)'></path><path d='M60 54v10L50 54h10zM36 54v10l10-10H36zM46 54h4v30h-4zM47.998 10c9.941 0 18 8.06 18 18 0 9.942-8.059 18.001-18 18.001s-18-8.06-18-18.001 8.059-18 18-18z' fill='#E6E8EA'></path><defs><linearGradient id='partner-account-light_svg__paint0_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'> <stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient><linearGradient id='partner-account-light_svg__paint1_linear_24482_26505' x1='48' y1='84' x2='48' y2='54' gradientUnits='userSpaceOnUse'><stop stop-color='#929AA5'></stop><stop offset='1' stop-color='#76808F'></stop></linearGradient> </defs></svg><div  class='user_des-div'><div  class='user_detail'>"+data.accountTraderfirstName+" "+data.accountTraderLastname+"</div> <svg  viewBox='0 0 24 24' fill='none' class='edit_user modal-trigger' onclick='editSubmittedAccountTrader("+data.accountTraderId+", "+data.accountTraderpartnerId+")' data-modal='added_user_modal'><path fill-rule='evenodd' clip-rule='evenodd' d='M15.336 4.776l3.89 3.889-1.768 1.767-3.89-3.889 1.768-1.767zm-3.181 3.181l3.889 3.89-5.129 5.128H20v3H7.915l-.004.003H4.022V16.09l8.133-8.132z' fill='currentColor'></path></svg></div></div></div></div><div class='modal custom_modal' id='delete_box_modal_"+data.accountTraderId+"' id='"+data.accountTraderId+"' onClick='deleteDirtorBlock(this)' ><div class='modal-sandbox'></div><div class='modal-box max-width-350px'> <div class='text-center p-3'><svg  viewBox='0 0 96 96' fill='none' class='warning-icon'><path fill-rule='evenodd' clip-rule='evenodd' d='M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z' fill='url(#general-warning_svg__paint0_linear_22059_28207)'></path><path d='M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z' fill='url(#general-warning_svg__paint1_linear_22059_28207)'></path><path d='M45 66h6v-6h-6v6zM51 54V30h-6v24h6z' fill='#14151A'></path><defs><linearGradient id='general-warning_svg__paint0_linear_22059_28207' x1='8' y1='48' x2='102.5' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B' stop-opacity='0'></stop><stop offset='1' stop-color='#F0B90B'></stop></linearGradient><linearGradient id='general-warning_svg__paint1_linear_22059_28207' x1='77' y1='48' x2='19' y2='48' gradientUnits='userSpaceOnUse'><stop stop-color='#F0B90B'></stop><stop offset='1' stop-color='#F8D33A'></stop></linearGradient></defs></svg><p>Are you sure you want to delete this people?</p></div><div class='d-flex justify-content-between p-4 delete-modal-btn'><button class='modal_btn_theme' onClick='confirmAccountTraderDelete("+data.accountTraderId+")' >Delete</button><button class='btn bg-whitesmoke' onClick='cancelDelete("+data.accountTraderId+");'>Cancel </button></div></div></div></div>");

                                                              }else{
                                                                    return "Indivisual details couldn't be added!";
                                                              }

                                                              //$(this).parent().parent().parent().parent().hide();
                                                                $("#Add_Authorised_Account").hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error);


  if(erroJson.error.accountTrader_fname || erroJson.error.accountTrader_lastName || erroJson.error.accountTrader_dob || erroJson.error.accountTrader_Jurisdiction_country || erroJson.error.accountTrader_residence_country || erroJson.error.accountTrader_docIssueRegion ||
   erroJson.error.accountTrader_idDocType || erroJson.error.accountTrader_IdNum || erroJson.error.accountTraderDoc_type || erroJson.error.accountTrader_addProofIssuedate || erroJson.error.accountTrader_addProof_country || erroJson.error.accountTrader_addressproof_state ||
   erroJson.error.accountTrader_addressproof_city || erroJson.error.accountTrader_addressproof_zipcode || erroJson.error.accountTrader_addressproof_Street || erroJson.error.addProofIssuedate ||
    erroJson.error.selectedidDocType || erroJson.error.accountTraderId_frontCopy || accountTraderId_BackCopy || accountTrader_addressproof){

                                                           $("#Add_Authorised_Account .msgValidErrIndisul").html('Invalid input!');
                                                           $("#Add_Authorised_Account .msgValidErrIndisul").addClass('alert alert-danger');

                                                           }

                                                     setTimeout(function(){
                                                         $("#Add_Authorised_Account .msgValidErrIndisul").html("");
                                                         $("#Add_Authorised_Account .msgValidErrIndisul").removeClass('alert alert-danger'); }, 4000);





                                                         }

                                     				});




                             };
           });


        function confirmAccountTraderDelete(id){


            const token = $('#eAdditionaltoken').val();
            const toDeleteId = id;
           // alert(toDeleteId);


            $.ajax({

            type: 'POST',

                url: "<?php echo url('api/deleteAuthorisedAccountTrader'); ?>",


             data: {

                 'toDeleteId' : toDeleteId,
                 '_token' : token,
             },
             success: function(data) {

                       triggerAlert('Authorised account trader deleted successfuly!', 'success');
                       //return data;


                       if(data){
                         $("#delete_box_modal"+"_"+id).parent().remove();
                       }

                         },

             error: function(xhr, status, error) {
                           var erroJson = JSON.parse(xhr.responseText);
                          // alert(erroJson.error);
                                       }
                 });

                // alert("ok delete it"+"-"+id);



        }


        function editSubmittedAccountTrader(id , partnerID){

           const accountTraderId = id;
           const partnerid = partnerID;

                 //  const token = $("#editEntitytoken").val();
               //   alert(accountTraderId +"/"+partnerid);
                  $(".AccountTraderSection").load("<?php echo url('api/editAuthorisedAccountTrader'); ?>" , { 'id': accountTraderId , 'partnerId' : partnerid })

         }



     </script>

<!--end  account-trader setion JS-->

<!-- edit country basic information and back button on basic information page-->
<script>

$(".Edit-box").click(function(){
    $("#first").hide();
    $("#third").hide();
    $("#fourth").hide();
    $("#fifth").hide();
    $("#basic_information-div").hide();
    $("#Related-Parties-div").hide();
    $("#second_div").show();

});

$(".backEntityVerificationBtn").click(function(){
    $("#fifth").show();
    $("#basic_information-div").hide();
    $("#Related-Parties-div").hide();
    $("#upld_document_main").hide();
    $("#Fiat_Enablement_div_main").hide();

});


function checkboxpercent(id){
  var chkid = id;

 // alert(chkid);
     if($("#"+chkid).hasClass('chk') == true ) {
       $("#"+chkid).removeClass('chk');
    }else{
         $("#"+chkid).addClass('chk');

    }

 const totalselected = $(".chk").length;
 const docPercent = Math.ceil(totalselected * 100 /9);

   // alert(docPercent);
    $(".large-text").html(docPercent);

}

 $( window ).on( "load", function() {
      var chkClassCount = $('.chk').length;
     // console.log(chkClassCount);

      var chkPercent = Math.ceil(chkClassCount * 100 /9);
       $(".large-text").html(chkPercent);
    });


</script>
<!-- end edit country basic information and back button on basic information page-->

<!-- count complated sections-->
<script>

    function countCompletedSections(){
       // alert();
       const user_id = "<?php echo Auth::user()->id ?>";

        $(".counting span").load("{{ url('api/countCompletedSections') }}",{'user_id':user_id},function(responseTxt, statusTxt, xhr){
                    if(statusTxt == "success")
                     var counting = JSON.parse(xhr.responseText);
                   $(".counting span").text(counting.completion);


                                setTimeout(function () {

                                        if(counting.basicCompletionChk == 1 ){
                                           // alert(counting.basicCompletionChk);
                                               $(".basicGreenchk").css({"display":"block"});
                                           }else{

                                               $(".basicGreenchk").css({"display":"none"});
                                           }

                                            if(counting.relatedPartiesCountChk == 1){
                                               $(".relatedCountChkGreenchk").css({"display":"block"});
                                           }else{
                                               $(".relatedCountChkGreenchk").css({"display":"none"});
                                           }
                                           if(counting.businessDocCountChk == 1){
                                               $(".businessDocGreenchk").css({"display":"block"});
                                           }else{
                                               $(".businessDocGreenchk").css({"display":"none"});
                                           }

                                           if(counting.fietCountChk == 1){
                                               $(".fietCountGreenchk").css({"display":"block"});
                                           }else{
                                               $(".fietCountGreenchk").css({"display":"none"});
                                           }
                                     }, 3000);

                   if(statusTxt == "error")
                                        console.log("Error: " + xhr.status + ": " + xhr.statusText);
                                    }

    );



                 }

    $( window ).on( "load", function() {
        // alert();
        countCompletedSections();

    });


</script>
 <!-- count complated sections-->
 <!-- To confirm all ralated business type sections-->
 <script>
      function confirmBusinessTypes(user_id, business_type){
          const userId = user_id;
          const businessType = business_type;
          console.log(userId+'/'+businessType);

                                                       $.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/confirmVariousBusinesses');  ?>",

                                                          data : {
                                                                         'user_id' : userId,
                                                                         'businessTypeID' : businessType,
                                                                     },

                                     					success: function(data) {


                                                           if(data.success == '200'){
                                                          triggerAlert('Congratulations! Details have been confirmed successfully.', 'success');


                                                              }else{
                                                                   triggerAlert('Details details could not be confirmed!', 'error');

                                                              }

                                                              //$(this).parent().parent().parent().parent().hide();
                                                            //    $("#Add_Authorised_Account").hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            console.log(erroJson.error);

                                                         }

                                     				});


      }


      function confirmBusinessdocStatus (userId){
          const user_id = userId;
          console.log (user_id);
           $.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/confirmVariousBusinessesDocs');  ?>",

                                                          data : {
                                                                         'user_id' : userId,

                                                                     },

                                     					success: function(data) {


                                                           if(data.success == '200'){
                                                          triggerAlert('Congratulations! Documents have been uploaded and confirmed successfully.', 'success');


                                                              }else{
                                                                   triggerAlert('Documents could not be confirmed!', 'error');

                                                              }

                                                              //$(this).parent().parent().parent().parent().hide();
                                                            //    $("#Add_Authorised_Account").hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            console.log(erroJson.error);

                                                         }

                                     				});
      }

 </script>

 <!-- end To confirm all ralated business type sections-->
 <script>
    jQuery("#UploadAuthLetterBtn").click(function(){

     const user_id = "<?php echo Auth::user()->id ?>";

    uploadAuthLetterformData = new FormData($('#UploadAuthLetterForm')[0]);

     uploadAuthLetterformData.append('user_id' , user_id);


    $.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addGeneralPartner')}}',
                                                         url: "<?php echo url('api/uploadAuthorizationLetter');  ?>",

                                                         enctype : 'multipart/form-data',
                                                         processData: false,
                                                         contentType: false,
                                                          data : uploadAuthLetterformData,

                                     					success: function(data) {
                                                             triggerAlert('Authorization Letter uploaded successfully.', 'success');

                                                              if(data.uplodedAuthLetters){

                                                              //     $(".authletterBox").html("");

                                                            const AuthLetters = data.uplodedAuthLetters.split(",");

                                                           // console.log(AuthLetters);
                                                            $(".authletterBox").html("");

                                                                    $.each(AuthLetters, function (index, value) {


                                                     $(".authletterBox").append('<img class="img-thumbnail " src="/storage/app/'+value +'" alt="" title="">');

                                                                   });






                                                              }else{
                                                                    return "Authorization Letter can't be uploaded!";
                                                              }

                                                            //   $(that).parent().parent().parent().parent().hide();
                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                            //alert(erroJson.error.uploadedAuthLetters);


                                                          $('.UploadAuthLetterSec.msgValidErrIndisul').html('Invalid Uploads!');
                                                        $('.UploadAuthLetterSec.msgValidErrIndisul').addClass('alert alert-danger');




                                                     setTimeout(function(){
                                                         $('.UploadAuthLetterSec.msgValidErrIndisul').html("");
                                                         $('.UploadAuthLetterSec.msgValidErrIndisul').removeClass('alert alert-danger'); }, 4000);

                                                      }

                                     				});



    });





</script>


 <!--------------------------upload document section script 05-11-2022---------------------------------------------->

<script>

  $("#open_upld_documents").click(function(){

             $("#upld_document_main").css({"display":"block"});
             $("#fifth").css({"display":"none"});

    });
    $(".close-upld-docx-notice").click(function(){
             $(".upld-docx-notice-div").css({"display":"none"});


    });



  function captionRemove(id, index){
   // alert(id);
    const ement  = id;


    const  ementIndex  = index;
   const ementID = ement.id
   // console.log(ementID);
   // console.log(ementIndex);

  $("#"+ementID+'_'+ementIndex).remove();


}



function caption(id){
    //alert(id);

   // console.log(id);
    var input = document.getElementById( 'id');
    var showcap = id+'_file';
   // console.log(showcap);


  var input = event.srcElement;


//  $("#"+showcap).parent().parent().parent().css({'display' : 'block'})

     $.each(input.files, function (index, value) {

           //   console.log( value );
         //  $(".authletterBox").append('<img class="img-thumbnail " src="/storage/app/'+value +'" alt="" title="">');

                // $("#"+showcap).append(' <div class="d-flex bg-gray" id="'+id+'_'+index+'">  <input type="hidden" id="allImgsOf_'+id+'_'+index+'" name="allImgsOf_'+id+'[]" value="'+value.name+'" > <div class="img-icon-pri"> <i class="bi bi-image"></i></div><div class="file-name p-light mr-20px"> <span>'+value.name+'</span> </div> <div onClick="captionRemove('+id+','+  index   +' )"  class="file_delete"><i class="bi bi-x-circle-fill"></i> </div></div>');
              $("#"+showcap).append(' <div class="d-flex bg-gray" id="'+id+'_'+index+'">  <input type="hidden" id="allImgsOf_'+id+'_'+index+'" name="allImgsOf[]" value="'+value.name+'" > <div class="img-icon-pri"> <i class="bi bi-image"></i></div><div class="file-name p-light mr-20px"> <span>'+value.name+'</span> </div> <div onClick="captionRemove('+id+','+  index   +' )"  class="file_delete"><i class="bi bi-x-circle-fill"></i> </div></div>');
       });


}






</script>
<script>
      function uploadBusinessEachDoc(authuserID , docType ){
        //  alert();
        const user_id = authuserID;
        const doc_type = docType;
        const fromprefix = '_form';

       // console.log(user_id);
       //  console.log(doc_type);
      // console.log($('#'+doc_type+'_form')[0]);
       var eachBusinessDocformData = new FormData($('#'+doc_type+'_form')[0]);

     // var eachBusinessDocformData = new FormData(document.getElementById('incorp_cert_form'));


     eachBusinessDocformData.append('user_id' , user_id);
     eachBusinessDocformData.append('user_doctype' , doc_type);

   // console.log(eachBusinessDocformData.entries());


       $.ajax({
                                     					type: "POST",

                                                         url: "<?php echo url('api/uploadBusinessDocs');  ?>",

                                                         enctype : 'multipart/form-data',
                                                         processData: false,
                                                         contentType: false,
                                                          data : eachBusinessDocformData,

                                     					success: function(data) {


                                                              if(data.uplodeddocs != 'no'){
                                                                   triggerAlert('Related document  uploaded successfully.', 'success');

                                                              //     $("."+doc_type+'_box').html("");

                                                            const businDocs = data.uplodeddocs.split(",");

                                                           // console.log(AuthLetters);
                                                            $("."+doc_type+'_box').html("");

                                                                $.each(businDocs, function (index, value) {
                                                                     $("."+doc_type+'_box').append('<img class="img-thumbnail " width="100px" src="/storage/app/'+value +'" alt="" title="">');
                                                                   });

                                                                   $("#"+doc_type+'_form')[0].reset();
                                                                   $("#"+doc_type+'_file').html("");

                                                                   if($("#"+doc_type+'_form').find($('input[name='+doc_type+']'))){
                                                                             $("#"+doc_type+'_form').find($('input[name='+doc_type+']'))[0].click();
                                                                          }
                                                         }
                                                              if(data.uplodeddocs == 'no'){
                                                                    $("."+doc_type+'_box').html("");
                                                                   triggerAlert('Updated successfully.', 'success');

                                                                  }


                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                          //  console.log(erroJson.error.allImgsOf);


                                                          $('.'+doc_type+'_errmsg').html('!Please select files. Allowed Extention: (jpeg | png | jpg | gif | svg)  And Maximum size:2MB. ');
                                                        $('.'+doc_type+'_errmsg').addClass('alert alert-danger');

                                                   setTimeout(function(){
                                                         $('.'+doc_type+'_errmsg').html("");
                                                         $('.'+doc_type+'_errmsg').removeClass('alert alert-danger'); }, 4000);

                                                      }

                                     				});




    }
</script>
<script>
    function yesORno(docType, id){
        const DocumentType = docType;
        const radioID = id;
        console.log(DocumentType);
        console.log(radioID);

     // alert($("#"+radioID).is(':checked'));
    // alert($("#"+radioID).val());

      if( $("#"+radioID).is(':checked') && ($("#"+radioID).val() == 'no') ){

           $("#"+DocumentType).parent().parent().css({display : 'none'}) ;
        }

        if(  $("#"+radioID).is(':checked')  && ($("#"+radioID).val() == 'yes') ){

           $("#"+DocumentType).parent().parent().css({display:  'block'}) ;
        }


    }

    </script>
<!--  ----------Fiat_Enablement column script here ---------------------------->
<script>


        $("#Fiat_Enablement").click(function(){

             $("#Fiat_Enablement_div_main").css({"display":"block"});
             $("#fifth").css({"display":"none"});

    });

function checkboxDropdown(el) {
  var $el = $(el)

  function updateStatus(label, result) {
    if(!result.length) {
      label.html('Select Options');
    }
  };

  $el.each(function(i, element) {
    var $list = $(this).find('.dropdown-list'),
      $label = $(this).find('.dropdown-label'),
      $checkAll = $(this).find('.check-all'),
      $inputs = $(this).find('.check'),
      defaultChecked = $(this).find('input[type=checkbox]:checked'),
      result = [];

    updateStatus($label, result);
    if(defaultChecked.length) {
      defaultChecked.each(function () {
        result.push($(this).next().text());
        $label.html(result.join(", "));
      });
    }

    $label.on('click', ()=> {
      $(this).toggleClass('open');
    });

    $checkAll.on('change', function() {
      var checked = $(this).is(':checked');
      var checkedText = $(this).next().text();
      result = [];
      if(checked) {
        result.push(checkedText);
        $label.html(result);
        $inputs.prop('checked', false);
      }else{
        $label.html(result);
      }
        updateStatus($label, result);
    });

    $inputs.on('change', function() {
      var checked = $(this).is(':checked');
      var checkedText = $(this).next().text();
      if($checkAll.is(':checked')) {
        result = [];
      }
      if(checked) {
        result.push(checkedText);
        $label.html(result.join(", "));
        $checkAll.prop('checked', false);
      }else{
        let index = result.indexOf(checkedText);
        if (index >= 0) {
          result.splice(index, 1);
        }
        $label.html(result.join(", "));
      }
      updateStatus($label, result);

      if(checked && checkedText == 'BRL'){
           $(".cnpjNum").css({'display' : 'block'});
            $(".cnpjDoc").css({'display' : 'block'});
      }

      if( $(this).is(':not(:checked)') && checkedText == 'BRL'){
           $(".cnpjNum").css({'display' : 'none'});
            $(".cnpjDoc").css({'display' : 'none'});
      }

       if(checked && checkedText == 'AUD'){
           $(".asicDoc").css({'display' : 'block'});
      }

      if($(this).is(':not(:checked)') && checkedText == 'AUD'){
           $(".asicDoc").css({'display' : 'none'});
      }

    });

    $(document).on('click touchstart', e => {
      if(!$(e.target).closest($(this)).length) {
        $(this).removeClass('open');
      }
    });
  });
};

checkboxDropdown('.dropdown');



function asicDoc_caption(id){
    //alert(id);

    console.log(id);
    var input = document.getElementById( 'id');
    var showcap = id+'_file';
  var input = event.srcElement;

   $.each(input.files, function (index, value) {
              $("#"+showcap).append(' <div class="d-flex bg-gray" id="'+id+'_'+index+'">  <input type="hidden" id="allImgsOf_'+id+'_'+index+'" name="allImgsOf_asicDoc[]" value="'+value.name+'" > <div class="img-icon-pri"> <i class="bi bi-image"></i></div><div class="file-name p-light mr-20px"> <span>'+value.name+'</span> </div> <div onClick="captionRemove('+id+','+  index   +' )"  class="file_delete"><i class="bi bi-x-circle-fill"></i> </div></div>');
       });
}

function cnpjDoc_caption(id){
    //alert(id);

    console.log(id);
    var input = document.getElementById( 'id');
    var showcap = id+'_file';
   var input = event.srcElement;
    $.each(input.files, function (index, value) {
              $("#"+showcap).append(' <div class="d-flex bg-gray" id="'+id+'_'+index+'">  <input type="hidden" id="allImgsOf_'+id+'_'+index+'" name="allImgsOf_cnpjDoc[]" value="'+value.name+'" > <div class="img-icon-pri"> <i class="bi bi-image"></i></div><div class="file-name p-light mr-20px"> <span>'+value.name+'</span> </div> <div onClick="captionRemove('+id+','+  index   +' )"  class="file_delete"><i class="bi bi-x-circle-fill"></i> </div></div>');
       });


}

  function uploadfiatDetail(authuserID , docType ){
        //  alert();
        const user_id = authuserID;
        const doc_type = docType;
        const fromprefix = '_form';


       // console.log(user_id);
       //  console.log(doc_type);
      // console.log($('#'+doc_type+'_form')[0]);
       var eachFiatformData = new FormData($('#'+doc_type+'_form')[0]);

     // var eachBusinessDocformData = new FormData(document.getElementById('incorp_cert_form'));


     eachFiatformData.append('user_id' , user_id);
     eachFiatformData.append('user_doctype' , doc_type);

   // console.log(eachFiatformData.entries());


       $.ajax({
                                     					type: "POST",
                                                         // url: '{{ url(app()->getLocale(),'api/addfiatEnablement')}}',
                                                         url: "<?php echo url('api/addfiatEnablement');  ?>",

                                                         enctype : 'multipart/form-data',
                                                         processData: false,
                                                         contentType: false,
                                                          data : eachFiatformData,

                                     					success: function(data) {

                                     					 if(data.uplodedCNPJ_doc && data.uplodedASIC_doc ){
                                                            const CNPJ_doc = data.uplodedCNPJ_doc.split(",");
                                                               const ASIC_doc = data.uplodedASIC_doc.split(",");

                                                           // console.log(AuthLetters);
                                                            $(".cnpjDoc_box, .asicDoc_box").html("");


                                                                $.each(CNPJ_doc, function (index, value) {
                                                                     $(".cnpjDoc_box").append('<img class="img-thumbnail " width="100px" src="/storage/app/'+value +'" alt="" title="">');
                                                                   });

                                                                $.each(ASIC_doc, function (index, value) {
                                                                     $(".asicDoc_box").append('<img class="img-thumbnail " width="100px" src="/storage/app/'+value +'" alt="" title="">');
                                                                   });

                                                                   $("#fiet_form")[0].reset();
                                                                   $("#cnpjDoc_file, #asicDoc_file").html("");
                                                                   $(".cnpjNum").css({'display' : 'block'});
                                                                    $(".cnpjDoc").css({'display' : 'block'});
                                                                    $("#cnpjNum").val(data.CNPJ_number);

                                                               triggerAlert('Updated successfully.', 'success');
                                                         }

                                                          if(data.uplodedCNPJ_doc && (data.uplodedASIC_doc == '')){
                                                            const CNPJ_doc = data.uplodedCNPJ_doc.split(",");


                                                           // console.log(AuthLetters);
                                                            $(".cnpjDoc_box").html("");

                                                                $.each(CNPJ_doc, function (index, value) {
                                                                     $(".cnpjDoc_box").append('<img class="img-thumbnail " width="100px" src="/storage/app/'+value +'" alt="" title="">');
                                                                   });

                                                                   $("#fiet_form")[0].reset();
                                                                   $("#cnpjDoc_file, #asicDoc_file").html("");

                                                                    $(".cnpjNum").css({'display' : 'block'});
                                                                    $(".cnpjDoc").css({'display' : 'block'});
                                                                     $("#cnpjNum").val(data.CNPJ_number);

                                                             triggerAlert('Updated successfully.', 'success');
                                                         }

                                                        if(data.uplodedASIC_doc && (data.uplodedCNPJ_doc == '')){

                                                              const ASIC_doc = data.uplodedASIC_doc.split(",");

                                                           // console.log(AuthLetters);
                                                                    $(".asicDoc_box").html("");
                                                                $.each(ASIC_doc, function (index, value) {
                                                                     $(".asicDoc_box").append('<img class="img-thumbnail " width="100px" src="/storage/app/'+value +'" alt="" title="">');
                                                                   });

                                                                   $("#fiet_form")[0].reset();
                                                                    $("#cnpjDoc_file, #asicDoc_file").html("");
                                                                   $(".asicDoc").css({'display' : 'block'});

                                                                    triggerAlert('Updated successfully.', 'success');

                                                         }


                                                              if(data.currenciesStatus == '200'){
                                                                    $("#fiet_form")[0].reset();
                                                                    $(".asicDoc_box , .cnpjDoc_box").html("");
                                                                     $("#cnpjDoc_file, #asicDoc_file").html("");
                                                                       $(".asicDoc").css({'display' : 'none'});
                                                                         $(".cnpjDoc").css({'display' : 'none'});

                                                                   triggerAlert('Updated successfully.', 'success');

                                                                  }


                                                         },

                                                         error: function(xhr, status, error) {
                                                            var erroJson = JSON.parse(xhr.responseText);
                                                          //  console.log(erroJson.error.allImgsOf);


                                                          $('.fiet_errmsg').html('!invalid Upload, file required (jpeg,png,jpg,gif,svg|max:2048.)');
                                                        $('.fiet_errmsg').addClass('alert alert-danger');

                                                   setTimeout(function(){
                                                         $('.fiet_errmsg').html("");
                                                         $('.fiet_errmsg').removeClass('alert alert-danger'); }, 4000);

                                                      }

                                     				});




    }
    </script>
 <!-- // ----------end Fiat_Enablement column script here---------------------------->
</body>
</html>
