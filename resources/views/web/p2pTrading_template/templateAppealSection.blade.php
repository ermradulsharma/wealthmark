 <!--=======================================new appel page design ==============================================================================     -->
  <!-------------------------------- step-1 when user click on appeal button then open this modal------------------------------------->
  
    <div class="demo_1 appeal_tips">
        <div class="hide">  <!-- for show and hide modal use one class ( hide, custom-modal-bck-bg) at time -->
            <div class="wm-custom-modal-diolog max-width-400px">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Tips</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                   
                        
                    <div class="container-fluid p-0 m-0">
                            <div class="row " id="tips-1">      <!-- after click on appeal button this row should show in modal untill user click on Request for Customer Service btn  -->
                               <div class="col-md-12">
                                        <div class="fs-14 text-justify">
                                            If there is an issue with the transaction, the most effective solution is to contact the counterparty directly. You can upload the payment receipt and account information in the chat for both parties to verify and negotiate.
                                        </div>
                                    </div>
                                
                                <div class="d-block col-12 mt-4 w-100 text-center mb-3">
                                    <button type="submit" class="btn-yellow shadow-none d-block w-100 border-0" id="tips_one_Ok">OK</button>
                                </div>
                                <div class="mb-2 col-md-12 text-center req_help_ser min-height-50px">
                                    <p class="text-muted">Request for Customer Service</p>
                                    <span class="c d-block text-center fw-bolder"  id="5"></span>
                                </div>
                    
                            </div>
                            
                            <div class="row d-none" id="tips-2">      <!-- open this after above condition  -->
                               <div class="col-md-12 max-height-300px scrollbar-style">
                                            <div class="appeal-point">
                                            <i class="bi bi-dot"></i>
                                            
                                         <span>   Please start with contacting the counterparty to explain the issue.</span>
                                        </div>
                                            <div class="appeal-point">
                                             <i class="bi bi-dot"></i>                         
                                                <span> 
                                                Kindly note that once the transaction is completed, the 
                                                assets are no longer held in Wealthmark's custody. 
                                                The platform is unable to freeze the assets and cannot 
                                                quarantee that your assets will be fully recovered after the appeal is
                                                </span>

                                            </div>
                                            <div class="appeal-point">
                                                <i class="bi bi-dot"></i>
                                                
                                                <span>   Please start with contacting the counterparty to explain the issue.</span>
                                            </div>
                                            <div class="appeal-point">
                                                 <i class="bi bi-dot"></i>                         
                                                    <span> 
                                                    Kindly note that once the transaction is completed, the 
                                                    assets are no longer held in Wealthmark's custody. 
                                                    The platform is unable to freeze the assets and cannot 
                                                    quarantee that your assets will be fully recovered after the appeal is
                                                    </span>
    
                                            </div>
                                </div>
                                
                                <div class="d-block col-12 mt-4 w-100 text-center mb-3">
                                    <button type="submit" class="btn-yellow shadow-none d-block w-100 border-0" id="confirm_for_appeal">OK, I got it</button>
                                </div>
                              
                    
                            </div>
                             
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
     
    <!-------------------------------- step-2------------------------------------->  
     <div class="appeal_upld_docs">
        <div class="hide">  <!-- for show and hide modal use one class ( hide, custom-modal-bck-bg) at time -->
            <div class="wm-custom-modal-diolog max-width-650px">
                <div class="px-3">
                     <div class="wm-custom-modal-header m-0">
                            <span>Appeal</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3">
                  
                    <div class="container-fluid p-0 m-0">
                        <div class="row"> 
                        <div class="col-md-12 authentication-step">
                            <ol class="steps mb-3">
                            <li id="step-1" class="step is-active" data-step="1">
                             <span> Appeal Submitted </span> 
                            </li>
                            
                            <li id="step-2" class="step" data-step="2">
                              <span>  Negotiate with Counterparty  </span> 
                            </li>
                            
                            <li id="step-3" class="step" data-step="3">
                              <span>  CS Review </span> 
                            </li>
                            
                         
                            
                        </ol>
                        <div class="fs-12">
                            CS review takes a few hours. If no proof has been submitted, CS will notify both parties to upload proof in time.
                        </div>
                        <div class="h-divider mb-3 mt-3"></div>
                        </div>
                        
                        <div class="col-lg-7 col-md-6">
                            <div class="">
                                
                                
                                <div class="bg-light-blue fs-12 text-justify mb-3 p-2">
                                    Reason for appeal and proofs are visible to both parties and CS. Please avoid including private or sensitive information
                                </div>
                                <h6 class="title fs-14">Appeal Reason (Mandatory)</h6>
                                 <div class="lf-select_coin-to rounded">
       <div class=" coin-swap-from m-0">
                    <input type="text" value="16" class="lf-select-coin-to-input">
                    <div class="wm-input-suffix ">
                      <div class="lf-select-coin-to-drpd">
                        <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                          <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                 
                  <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                    <div class="wm-dropdown-optn-item-div">
                        <div id="select_coin_text" class="wm-dropdown-optn-item-txt">Select reason for appeal</div>
                      </div>
                    </div>
                
                   <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
                     <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                        <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">I have released the crypto but the buyer has not released the payment</div>
                            </div>
                          </div>
                        </li>
                        <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                   <div class="wm-dropdown-optn-item-txt">I have released extra crypto to the buyer</div>
                            </div>
                            </div>
                        </li>
                        <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">
                            <div class="wm-dropdown-optn-item-div">
                                <div class="wm-dropdown-optn-item-txt">I suspected the buyer is scamming</div>
                            </div>
                          </div>
                        </li>
                        <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                            <div class="wm-dropdown-optn-item-inner selected">
                                <div class="wm-dropdown-optn-item-div">
                                    <div class="wm-dropdown-optn-item-txt">Others</div>
                                </div>
                            </div>
                        </li>
                        
                       </ul>
                </div>
  </div>
                                <div class="p-2"></div>
                                
                                 <h6 class="title fs-14">Description</h6>
                                 <div class="position-relative">
                                    <textarea class="form-control" id="appeal_description" name="text" placeholder="Type in your message" rows="5"></textarea>
                                    <span class="fs-12 appeal_count_message">   <span id="count_message"></span> /500 </span>
                                </div>
                                
                                 <div class="p-2"></div>
                            </div>
                            
                        </div>
                        <div class="col-lg-5 col-md-6">
                             <h6 class="title fs-14">Upload Proof (Mandatory)</h6>
                              <div class="fs-12">
                            Screenshots or Video/audio recordings of payment and communication data should not exceed a total files with total size of 200 MB.
                        </div>
                         <div class="fs-12">
                           Please provide pictures/videos of the corresponding payment account transactions to support your appeal.<br> <a hreg="javascript:void(0)" class="yellow-text">show more</a>
                        </div>
                        <div class="upload__box mt-3">
                          <div class="upload__btn-box">
                                    <label class="upload__btn upload__btn btn btn-default shadow-none py-1 px-2">
                                  <span class=""><i class="bi bi-plus"></i></span>
                                  <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                </label>
                              </div>
                              <div class="upload__img-wrap"></div>
                        </div>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <a href="javascript:void(0)" class="btn btn-yellow shadow-sm w-100" id="file_appeal">File an appeal</a>
                        </div>
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
     <!-------------------------------- step-3------------------------------------->  
     <section class="bg-white" id="appeal_pending">
         <div class="container hide" >
             <div class="row bg-white" style="padding:30px">
                 <div class="col-md-8 col-sm-12">
                     <h3>Appeal Pending</h3>
                     <div class="d-sm-flex align-items-center justify-content-between">
                     <p class="fs-14">Pending response from respondent </p>
                     <span class="fs-14">
                         Time Remaining : <span class="yellow-text" id=""> 10 : 00</span>
                     </span>
                     </div>
                     
                     <div class="">
                         <ol class="fs-12 mt-3">
                             <li class="mb-2"><span class="me-2"></span> If both parties have reached an agreement. You can <b>cancel the appeal </b> and proceed to complete the trade.</li>
                             <li class="mb-2"><span class="me-2"></span> If complainant did not respond in time . CS will get involved and arbitrate.</li>
                             <li class="mb-2"><span class="me-2"></span> To <a href="javascript:void(0)" class="yellow-text">provide more infomation </a>, please Provide more info. Info provided by both users and CS can be found in "Appeal progress" </li>
                         </ol>
                         <a href="#" class="btn btn-default cancel_appeal" >
                             Cancel the Appeal
                         </a>
                         
                         <div class="bg-light-blue pt-1 mt-2 mb-2"></div>
                          <div class="d-flex align-items-center justify-content-between">
                     <p class="fs-6">Appeal Progress </p>
                     <span class="fs-14 d-flex align-items-center">
                         <span class="me-4 text-success line-height-10"> <i class="fs-1 bi bi-dot"></i></span>
                         <i class=" bi bi-chevron-right"></i>
                     </span>
                     </div>
                         
                         <div class="bg-light-blue pt-1 mt-2 mb-2"></div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="bg-light-blue rounded p-2 h-100">
                         <div class="fs-6 d-flex align-items-center justify-content-between bg-white py-3 px-4 rounded mb-2">
                             <span class="g-light-green me-2">Buy</span>
                             <span class="text-dark me-2">USDT</span>
                           
                         </div>
                         <div class="bg-white px-2">
                         <div class="d-flex align-items-center justify-content-between  py-3 px-2 rounded mb-2">
                             <span class="fs-14 fw-bolder text-muted"> Fiat Amount</span>
                             <span class="fs-6 line-height-10"><i class="bi bi-currency-dollar"></i> <span>1000</span></span>
                         </div>
                         <div class="h-divider"></div>
                         <div class="d-flex align-items-center justify-content-between  py-3 px-2 rounded mb-2">
                             <span class="fs-14 fw-bolder text-muted"> Price</span>
                             <span class="fs-6 line-height-10"><i class="bi bi-currency-dollar"></i> <span>1000</span></span>
                         </div>
                          <div class="h-divider"></div>
                         <div class="d-flex align-items-center justify-content-between  py-3 px-2 rounded mb-2">
                             <span class="fs-14 fw-bolder text-muted"> Crypto Amount</span>
                             <span class="fs-6 line-height-10"><i class="bi bi-currency-dollar"></i> <span>1000</span></span>
                         </div>
                        
                     </div></div>
                 </div>
             </div>
         </div>
     </section>
 <!--=======================================/ new appel page design ==============================================================================     -->
    