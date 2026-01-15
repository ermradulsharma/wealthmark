<div class="col-md-12 ">
                            <div class="card shadow-sm border">
                                <div class="card-body position-relative verify-div-main">
                                        <svg xmlns="#" viewBox="0 0 96 96" fill="none" class="verify-now"><path opacity="0.3" d="M85 54.5l2.5-2.5 2.5 2.5-2.5 2.5-2.5-2.5zM23 9.5L26.5 6 30 9.5 26.5 13 23 9.5zM6 69l2-2 2 2-2 2-2-2z" fill="#AEB4BC"></path><path d="M12 80v-4h72v4H12z" fill="#76808F"></path><path opacity="0.3" fill="#AEB4BC" d="M20 42h8v34h-8zM36 42h8v34h-8zM52 42h8v34h-8zM68 42h8v34h-8z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M84 34L48 6 12 34v8h72v-8zm-41-7l5 5 5-5-5-5-5 5z" fill="url(#bank_svg__paint0_linear_26712_55097)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M48 37c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm-5-10l5 5 5-5-5-5-5 5z" fill="#76808F"></path><path d="M12 80v8h72v-8H12z" fill="url(#bank_svg__paint1_linear_26712_55097)"></path><defs><linearGradient id="bank_svg__paint0_linear_26712_55097" x1="48" y1="42" x2="48" y2="6" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient><linearGradient id="bank_svg__paint1_linear_26712_55097" x1="12" y1="84" x2="84" y2="84" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient></defs></svg>
                               
                                   <div class="max-width-500">
                                       <span class=".dashboard-card-heading d-block mb-2">
                                           Complete Enterprise Verification
                                       </span>
                                       <span class="sub-heading d-block mb-3">Click Verify Now to complete your entity verification and <br>gain access to more features.</span>
                                        @if( Auth::user()->account_type == 1)
                                             @if( Auth::user()->government_id_verified == 0 ) 
                                       <a href="{{url(app()->getLocale().'/entity-verification')}}" class="btn-yellow d-inline-block">Verify Now  </a>
                                            @endif
                                        @endif
                                         
                                         @if( Auth::user()->account_type == 2)
                                             @if( $entity_verificationStatus == 0 ) 
                                      <a href="{{url(app()->getLocale().'/need-kyc')}}" class="btn-yellow d-inline-block">  Verify Now   </a>
                                                @endif
                                          @endif
                                   </div>
                                </div>
                            </div>
 </div>