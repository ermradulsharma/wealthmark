 <div class="modal fade" id="have-a-question" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="have-a-questionLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="have-a-questionLabel">Have A Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <div class="bg-light-blue p-2 mb-2">
                        <h6>Negotiate with the counterparty</h6>
                        <div class="fs-14 text-muted"> If there is an issue with the transactoin, the most effective solution is to contac tthe counterparty directly. You can upload the payment receipt and account information in the chat window for both parties to verify and negotiate.</div>
                    </div>
                    <div class="bg-light-blue p-2 mb-2">
                        <h6>Appeal</h6>
                        <div class="fs-14 text-muted">The order has been completed and your asset is no longer escrowed by Wealthmark. Please not that we are unable to directly trace back your assets.</div>
                    </div>
                  
              
                   <div class="bg-light-blue p-2">
                                <div class="flex-div">
                                    <input type="radio" class="me-2" id="paid-order-cancelled-check" name="order-status" data-bs-toggle="modal" data-bs-target="#paid-order-cancelled"/>
                                    <label class="cursor-pointer" for="paid-order-cancelled-check">I paid but the order cancelled.</label>
                                </div>
                                <div class="flex-div">
                                    <input type="radio" class="me-2" id="Other_reasons" name="order-status" data-bs-toggle="modal" data-bs-target="#other-reason-cancel-order"/>
                                    <label class="cursor-pointer" for="Other_reasons">  Other reasons.</label>
                                </div>
                            </div>
                        
              </div>
              <div class="modal-footer">
                    <a class="btn-yellow shadow-sm" onclick="focusInput()">
                        Chat Now 
                    </a>
              </div>
            </div>
          </div>
        </div>