



<div id="payMethod">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-800px">
                <div class="">
                    <div class="wm-custom-modal-header">
                        <span>Recommended</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3"> 
                    <div class="container-fluid p-0 m-0">
                            
                              <!--<h5 class="mb-3"></h5>-->
               <div class="row gx-1">
                    @foreach($allpaymentMethod_list as $payment_list)
                                                    @if($payment_list->name != 'Gift-card')
                                                    <div class="col-6 mb-3">
                                                       <a class="dropdown-item" href="{{ url(app()->getLocale().'/user/payment/c2c/add/').'/'.$payment_list->name }}">
                                                                @if($payment_list->name == 'Bank-Transfer-INDIA')  <div class="css-enbank-icon"></div> @endif
                                                                @if($payment_list->name == 'UPI')  <div class="css-upi-icon"></div> @endif
                                                                @if($payment_list->name == 'IMPS')  <div class="css-imps-icon"></div> @endif
                                                                @if($payment_list->name == 'Paytm')  <div class="css-paytm-icon"></div> @endif
                                                         
                                                         <span>{{ $payment_list->name }}</span>
                                                       </a>
                                                    </div>
                                                    @endif
                                                 @endforeach
               
               </div>
               <hr>
                  <div class="my-4">
                     <div class="row g-0 align-items-start my-3">
                           <div class="col-7">
                           <h5 class="mb-0">All Payment Methods</h5>
                           </div>
                           <div class="col-5">
                              <input type="text" class="form-control no-border-field" id="filterPaymentMethod" placeholder="Search">
                           </div>
                     </div>
                     <div class="row g-0">
                           <div class="col-12">
                              <a href="#" class="atoz-filter active">All</a>
                              <a href="#" class="atoz-filter">A</a>
                              <a href="#" class="atoz-filter">B</a>
                              <a href="#" class="atoz-filter">C</a>
                              <a href="#" class="atoz-filter">D</a>
                              <a href="#" class="atoz-filter">E</a>
                              <a href="#" class="atoz-filter">F</a>
                              <a href="#" class="atoz-filter">G</a>
                              <a href="#" class="atoz-filter">H</a>
                              <a href="#" class="atoz-filter">I</a>
                              <a href="#" class="atoz-filter">J</a>
                              <a href="#" class="atoz-filter">K</a>
                              <a href="#" class="atoz-filter">L</a>
                              <a href="#" class="atoz-filter">M</a>
                              <a href="#" class="atoz-filter">N</a>
                              <a href="#" class="atoz-filter">O</a>
                              <a href="#" class="atoz-filter">P</a>
                              <a href="#" class="atoz-filter">Q</a>
                              <a href="#" class="atoz-filter">R</a>
                              <a href="#" class="atoz-filter">S</a>
                              <a href="#" class="atoz-filter">T</a>
                              <a href="#" class="atoz-filter">U</a>
                              <a href="#" class="atoz-filter">V</a>
                              <a href="#" class="atoz-filter">W</a>
                              <a href="#" class="atoz-filter">X</a>
                              <a href="#" class="atoz-filter">Y</a>
                              <a href="#" class="atoz-filter">Z</a>
                              </div>
                     </div>
               </div>
                  
                  <div class="row  payment-methods max-height-250px scrollbar-style mb-3">
                      <!-- <div class="row payment-filter">-->
                      <!--</div>-->
                      
                      @foreach($allpaymentMethod as $eachpaymentMethod)
                     <div class="col-lg-3 col-md-4 col-sm-6 mb-3 pay-method paymentfilter">
                        <a href="{{ url(app()->getLocale().'/user/payment/c2c/add/'.$eachpaymentMethod->bank_name) }}" class="pay-method-text "><span class="pay-method-icon"></span><span class="pm">{{ $eachpaymentMethod->bank_name }}</span></a>
                     </div>
                      @endforeach
                  
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!--<div class="modal fade" id="payMethod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="payMethodLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">-->
<!--    <div class="modal-content">-->
<!--         <div class="modal-header"> -->
<!--         <h5 class="modal-title" id="payMethodLabel">Select a Payment Method</h5>-->
<!--         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--         </div>-->
<!--         <div class="modal-body">-->
              
                 
<!--         </div>-->

<!--      </div>-->
      
<!--    </div>-->
<!--</div>-->
        
     