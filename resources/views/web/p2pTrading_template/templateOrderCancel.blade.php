   <div class="modal fade" id="Order-cancel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paid-order-cancelledLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paid-order-cancelledLabel">Cancel Order</h5>
        <button type="button" id="cancel_close_btn" class=" btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <div class="container-fluid p-0 m-0">
                   <div class=" max-height-500px scrollbar-style mb-3">
                             <div class="">
                            <div class="bg-light-blue p-3 mt-2">
                                <h3 class="title">Tips</h3>
                                <div class="fs-12 yellow-black fw-normal mb-1">If you have already paid the seller, please do not cancel the order.</div>
                                <div class="fs-12 yellow-black fw-normal mb-1">If the order is canceled due to system time out, the buyer shall be accountable (completion rate affected).</div>
                                <div class="fs-12 yellow-black fw-normal mb-1">If the seller does not reply to the chat within 15 mins, you will be unaccountable for this order cancellation. <span class="text-warning">Only 5 unaccountable order cancellations can be made in a day.</span></div>
                                <div class="fs-12 yellow-black fw-normal mb-1">You can only make up to <span class="text-warning">3 accountable cancellations</span> in a day. Otherwise, your account will be suspended and you cannot place any more orders on the same day.</div>
                               
                            </div>
                            <div class="mt-3">
                    <h6 class="m-0">Why did you cancel the order?</h6>
                    <div class="fs-14 fw-normal order-inner-txt">We keep your feedback confidential and strive to serve you better next time.</div>
                    
                        <div class="cancel-reason-buyer shadow-sm p-2 mt-2">
                            <h6 class="bg-light-blue p-2">Due to buyer</h6>
                             
                            
                                 @foreach($config_data as $cancelation_reason )
                                    @if($cancelation_reason->type == 1)
                                    <div class="order-cancel-radio fs-14 d-flex align-items-start">
                                        <input type="radio" name="buyer-reason" class="me-2 mt-1" id="{{ $cancelation_reason->id }}" value="{{ $cancelation_reason->id }}">
                                        <label class="cursor-pointer" for="{{ $cancelation_reason->id }}">{{ $cancelation_reason->comment_1 }}</label>
                                    </div>
                                     @endif
                                @endforeach
                        
                        </div>
                        <div class="cancel-reason-seller shadow-sm p-2 mt-2">
                            <h6 class="bg-light-blue p-2">Due to seller</h6>
                            <div class="fs-14 fw-normal">If the seller accepts the cancellation request due to the seller, the buyer's completion rate will not be affected.</div>
                            <div class="fs-14 fw-normal">If the seller rejects the cancellation request, the buyer shall be accountable (completion rate affected).</div>
                            <div class="fs-14 fw-normal">You can only make an order cancellation with reason due to the seller up to 3 times per day.</div>
                        </div>
                        <div class="seller-reason-radio shadow-sm p-2 mt-2">
                          
                          
                             
                                  @foreach($config_data as $cancelation_reason )
                                    @if($cancelation_reason->type == 2)
                                    <div class="order-cancel-radio fs-14 d-flex align-items-start">
                                        <input type="radio" name="buyer-reason" class="me-2 mt-1" id="{{ $cancelation_reason->id }}" value="{{ $cancelation_reason->id }}">
                                        <label class="cursor-pointer" for="{{ $cancelation_reason->id }}">{{ $cancelation_reason->comment_1 }}</label>
                                    </div>
                                    @endif
                                @endforeach
                        
                        </div>
                </div>
                        </div>
        
                        <div class="h-divider mb-3"></div>
                        <div class="mb-2 terms-conditions">
                            @foreach($config_data as $cancelation_reason )
                                @if($cancelation_reason->type == 3)
                            <div class="d-flex justify-content-start align-items-center fs-12">
                                <input type="checkbox" name="seller_agreed_refund" id="{{ $cancelation_reason->id }}" value="{{ $cancelation_reason->id }}" class="me-2">
                                <label class="cursor-pointer" for="{{ $cancelation_reason->id }}">
                                     {{ $cancelation_reason->comment_1 }}
                                </label>
                               
                            </div> 
                                @endif
                            @endforeach    
                        </div>
                        
                      
                           
                       </div> 
                       
        
         <div class="terms-box d-flex mb-4 w-100">
                              
                            <button type="button"  class="shadow-none btn-yellow btn-block delete-modal border-0 cancelPay w-100" data-id="{{$get_order_data->buyer_id}}" data-name="{{$get_order_data->buyer_id}}">Cancel Order</button>
                       
                        </div>
                       
                             
                    </div>
         </div> 
     </div> 
      </div> 
       </div> 
      