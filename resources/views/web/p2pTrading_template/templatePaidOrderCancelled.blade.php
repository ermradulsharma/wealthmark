 <div class="modal fade" id="paid-order-cancelled" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paid-order-cancelledLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paid-order-cancelledLabel">I Paid but the order has been cancelled</h5>
        <button type="button" id="appeal_close" class=" btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body max-height-700px scrollbar-style mb-3">
            <div class="order-canlled-inner">
                <div class="bg-light-blue p-2 fs-14">
                            If you paid but the order is cancelled, your assets cannot be traced back automatically. Please chat with the seller and request the seller to refund or try one of the solutions below.
                </div>
                <div class="table-responsive mt-2 mb-2">
                    <table class="table table-bordered mb-0">
                            <tr>
                                <td colspan="2" class="bg-whitesmoke">
                                    Solutions: 1
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <ul class="ul-list min-width-300px">
                                        <li class="text-black fs-14">
                                            If you have paid but the order is cancelled, you can request for the seller to transfer the purchased crypto via Wealthmark Pay.
                                        </li>
                                    </ul>
                                </td>
                              
                            </tr>
                            
                            <tr>
                                <td>
                                    <ul class="ul-list min-width-300px">
                                        <li class="fs-14"> <span class="me-2">Step&nbsp;1: </span> <span> Go to Wealthmark pay, select the currency to generate QR Code, or copy the pay ID, or copy the Wealthmark ID. </span> </li>
                                    </ul>
                                </td>
                                   <td rowspan="3">
                                     <button type="button" id="request_crypto_transfer" class="btn-yellow border-0 w-100" value="request_crypto_transfer">Request Crypto Transfer</button>
                                 </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="ul-list min-width-300px">
                                         <li class="fs-14"> <span class="me-2">Step&nbsp;2: </span> <span> Send the QR Cdoe/Pay Wealthmark ID to the seller in chat </span> </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <ul class="ul-list min-width-300px">
                                         <li class="fs-14"> <span class="me-2">Step&nbsp;3: </span> <span>Confirm the order amount with the seller and wait for the transfer. </span> </li>
                                    </ul>
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td colspan="2" class="bg-whitesmoke">
                                     Solutions: 2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="ul-list min-width-300px">
                               <li class="fs-14">
                               <span>    Click the button below, place another order with the <span class="text-warning">same amount</span> from the seller's profile page. You should send the proof of payment to the seller and explain the situatoin. Then make sure to click the <span class="text-warning">"Transferred, notify seller" </span> button.</span>
                               </li>
                           </ul>
                                </td>
                                 <td>
                                      <a class="btn-yellow border-0 w-100">Place Another Order</a>
                                 </td>
                            </tr>
                             <tr>
                                <td colspan="2" class="bg-whitesmoke">
                                    Solutions: 3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                     <ul class="ul-list min-width-300px">
                               <li class="fs-14">If the counterparty does not have any online Ads, click the "Appeal" button below.</li>
                           </ul>
                                </td>
                                 <td>
                                     
                                      <a class="btn-yellow border-0 w-100"  data-bs-dismiss="modal" aria-label="Close" onClick="openAppeal_stepOne()">Appeal</a>
                                 </td>
                            </tr>
                        </table>
                </div> 
        </div>
      </div>
    </div>
  </div>
</div>