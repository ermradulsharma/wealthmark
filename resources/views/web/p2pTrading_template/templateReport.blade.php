<div class="modal fade" id="reportModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="reportModalLabel">Report</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body scrollbar-style">
                  <div class="bg-light-blue p-2 fs-14">
                     <i class="bi bi-info-circle-fill"></i> 
                     <span>Malicious reports will cause an account freeze.</span>
                  </div>
                  <div class="form-floating report-reason-block my-3">
                    
                     <select class="form-control">
                        <option>Please select report reason </option>
                        <option>Reason 1</option>
                        <option>Reason 2</option>
                     </select>
                      <label>Report Reason</label>
                  </div>
                  <div class="form-floating user-email-block my-3">
                     <input type="text" class="form-control" placeholder="Enter email address"/>
                      <label>Your Email</label>
                  </div>
                  <div class="form-floating user-email-block my-3">
                     <textarea class="form-control" rows="+4" placeholder="Please provide as much details as possible."></textarea>
                     <label>Description</label>
                     <small class="typed-word-counter d-flex justify-content-end">0/500</small>
                  </div>
                  <div class="upload-proof-block my-3">
                     <label>Upload Proof</label>
                     <div class="text-muted fs-14 mt-1 mb-3">Screenshots or video/audio recordings of payment and communication data should not exceed a total of 5 files with total size of 50 MB. Supported file formats include jptg. jpeg, png, mp4, avi,rm,rmvb.mov.wmv.</div>
                     <input type="file" class="form-control"/>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-blue shadow" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-yellow shadow">Submit</button>
               </div>
            </div>
         </div>
      </div>