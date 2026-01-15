<style>
    .verification_div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    max-width: 100%;
}
.verification_main {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    align-items: flex-end;
}
.inner-css {
    box-sizing: border-box;
    margin: 32px 0px 0px;
    min-width: 0px;
    display: inline-flex;
    position: relative;
    -webkit-box-align: center;
    align-items: center;
    line-height: 1.6;
    border: 1px solid rgb(234, 236, 239);
    border-radius: 4px;
    height: 48px;
    background-color: transparent;
}
.verification_inner {
    flex: 1 1 0%;
}
.verification_textbox {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    width: 100%;
    height: 100%;
    padding: 0px;
    outline: none;
    border: none;
    background-color: inherit;
    opacity: 1;
}
.inner-css input {
    color: #1e2329;
    font-size: 14px;
    padding-left: 12px;
    padding-right: 12px;
}
.getCode_outer {
    color: rgb(240, 185, 11);
}
.inner-css .getCode_outer {
    flex-shrink: 0;
    margin-left: 4px;
    margin-right: 4px;
    font-size: 14px;
}
.getCode_inner {
    box-sizing: border-box;
    margin: 0px 12px 0px 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
    cursor: pointer;
    color: #fdc116;
}

</style>


 <div class="payMethod_otp_popup" id="payMethod_otp_popup">
  
            <?php 
          //  print_r( $_SESSION) ; 
            ?>
                        
   
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Verify Your Mobile </span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                   
                        
                    <div class="container-fluid p-0 m-0">
                            <div class="row">
                               
                                <!-- sending and verification otp  -->
                                 <form action="" method="post" id="addPayment_otp_frm">
                                         @csrf
                                <div class="verification_div">
                                                            <div class="verification_main">
                                                               <div class="w-100 inner-css mt-0" id="phone_error_border">
                                                                  <input disabled type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="potp" class="verification_textbox" value="">
                                                                  <div class="getCode_outer getCode_outer1">
                                                                     <!--<div class="getCode_inner p_Get_Code" id="p_Get_Code" style="display:block" onclick="p_start()">Get Code</div>-->
                                                                      <div class="getCode_inner p_Get_Code" id="p_Get_Code" style="display:block" >Get Code</div>
                                                                     <div class="getCode_inner p_code_sent" style="display:none">
                                                                        Verification Code Sent 
                                                                             <span class="tooltip txt_info">
                                                                                    <i class="bi bi-info-circle-fill"></i> 
                                                                                        <span class="tooltiptext toolTop">
                                                                                            Haven’t received code? Request new code in  
                                                                                            <span class="timer-counter" id="p_counter"></span> 
                                                                                            <span id="text">seconds</span>
                                                                                            The code will expire after 30 mins.
                                                                                        </span>
                                                                            </span>
                                                                     </div>
                                                                  </div>
                                                               
                                                               </div>
                                                            
                                                             
                                                            </div>
                                                            <div class="verification_innerInfo fs-12 text-muted mt-3  error_text">Enter the 6-digit code sent to 
                                                            
                                                                <span dir="ltr" class="getCode_outer1">{{ substr(Auth::user()->phone , 0, 3) . "***" . substr(Auth::user()->phone , 6, 4) }}</span> 
                                                            </div>
                                                             <div id="p_otp_err" class="error_color"></div>
                                 </div>
                                                           
                                                      
                                                     
                                                      
                             </div>
                                                   
                                
                                <!-- end sending and verification otp --> 
                                
                                <div class="d-block col-12 mt-3 w-100 text-center mb-3">
                                    <button type="submit" class="btn-yellow d-block w-100 border-0 submit_code" disabled>Submit OTP</button>
                                </div>
                    
                     </div>
                             
                    </div>
                   
                </div>
            </div>
        </div>
                          
                        
    
 <script>
 
 $("#wm-custom-modal-close").click(function(){
     var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
     elm.addClass('hide');
     elm.removeClass('custom-modal-bck-bg');
 });
 

 
 $('.tooltips').append("<span></span>");
                $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');
                
                $(".tooltips").mouseenter(function(){
                    $(this).find('span').empty().append($(this).attr('tooltip'));
                });
     
     function p_start(){
              var p_counter = 120;
                  setInterval(function() {
                    p_counter--;
                    if (p_counter >= 0) {
                      span = document.getElementById("p_counter");
                      span.innerHTML = p_counter;
                    }
                    if (p_counter === 0) {
                        clearInterval(p_counter);
                      $(".p_code_sent").css("display", "none");
                      $(".p_Get_Code").css("display", "block");
                      $("#p_Get_Code").text("Get Code"); $("#p_Get_Code").css("pointer-events","");
                      
                      $(".p_Get_Code_old_user").css("display", "block");
                      $(".p_code_sent").css("display", "none");
                    }
                  }, 1000);
            };
            
       
    $('#potp').on('input', function () {
        $('.submit_code').removeAttr('disabled');
    });
      
    $("#p_Get_Code").click(function(){
                  
                  $('#potp').removeAttr('disabled');
                  
                  const phone = '{{ Auth::user()->phone }}';
                  //console.log(phone);
           
                    $.ajax({
                		type: "POST",
                		url: "<?php echo url('api/send_otp_toAdd_Payment_onPhone');  ?>",
                		cache: false,
                		beforeSend: function(){
                		            $("#p_Get_Code").text("Sending OTP.."); $("#p_Get_Code").css("pointer-events","none"); 
                		    
                		},
                	    data: {
                        		'phone' : phone
                        	},
                		success: function(data,status) {
                		    if(status=="success"){
                                $(".p_Get_Code").css("display", "none");
                                $(".p_code_sent").css("display", "block");
                                triggerAlert('OTP sent on your mobile number', 'success');
                            }else{
                               triggerAlert(status, 'error');
                            }
                		},
                		error: function(jqXHR, textStatus, errorThrown){
                			triggerAlert(status, 'error');
                		}
                	});
                	
                
          
               
            });
  
       

       
            	    var spinner = $('#loader');
            	    
            		$(".submit_code").on("click", function(e) {
            		    
                    		    
                    		    
            		    e.preventDefault();
                    	var potp = $('#potp').val();
                        var _token = $("input[name=_token]").val();
                         if(potp==""){
                                    $('#p_otp_err').html("Please enter phone otp");
                                    $('#phone_error_border').addClass('error_border');
                                    return true;
                                };
                                
                              
          
            	         if(potp!="" & potp.length==6){
            
                        			    spinner.show();
                        				$.ajax({
                        					type: "POST",
                        					url: "<?php echo url(app()->getLocale().'/verifyOTP_beforeAddPayment');  ?>",
                        			        data: {
                        			                '_token':_token, 
                        			                'potp' : potp
                        			             
                        			                },
                        				
                        				// 	dataType: "json",
                        				// 	encode: true,
                        				}).done(function (data) {
                            				triggerAlert('Congratulations! OTP successfully verified.', 'success');
                            					
                                                        var elm = $('#payMethod_otp_popup .custom-modal-bck-bg');
                                                             elm.addClass('hide');
                                                             elm.removeClass('custom-modal-bck-bg');
                                                       
                                                        $('.confirm_otp').css({"display": 'none' });
                                                        $('#add_method').css({"display": 'block' });  
                            		        $("#add_method").click();
                            		      //  $("#upi_Id_form").click();
                            		     
                            		       window.location="<?php echo url(app()->getLocale().'/user/payment');  ?>";
                                            
                        				}).fail(function(jqXHR, textStatus, errorThrown)  {
                        				    triggerAlert('Enter valid otp', 'error');
                                            setTimeout(function(){
                                             $('#addPayment_otp_frm').trigger("reset");  
                                            }, 2000);
                                        });
            			        }
            		        
            		    
            		});
            		
            		
            
        </script>  
   
</div>