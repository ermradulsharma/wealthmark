
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <title>Wealth Mark | Appeal History</title>
      @include('template.web_css')
       <link rel="stylesheet" href="{{ asset('assets/css/confirm-order.css') }}">
   <style>
       .appeal_history_block .status{
           position:absolute;
           top:0px;
           right:0px;
           background:#dc3545;
           color:black;
           padding:5px 10px;
           font-size:14px;
       }
       .comment-text{
               font-size: 14px;
    color: #9E9E9E;
    margin-bottom: 10px;
    font-weight: normal !important;
       }
   </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')

        <div class="shadowm-sm bg-dark-blue py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col fs-2 text-white">
                        Appeal Process
                    </div>
                    <div class="col text-right">
                        <div class="text-white">
                            <i class="bi bi-chevron-left me-2"></i>
                            <span>
                                Back
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>








      <section class="authentication-step">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3 pb-4">
                            <h2 class="mb-4 text-center">Appeal Pending</h2>

                        </div>
                        <ol class="steps">
                            <li id="step-1" class="step is-active" data-step="1">
                               Appeal Submitted
                            </li>

                            <li id="step-2" class="step" data-step="2">
                               Negotiate with Counterparty
                            </li>

                            <li id="step-3" class="step" data-step="3">
                               CS Review
                            </li>

                            <li id="step-4" class="step" data-step="4">
                               Appeal Complete
                            </li>



                        </ol>

                        <div class="p-3"></div>
                          <div class=" bg-light-blue p-2 py-3">

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

                     </div>
                 </div>

                <div class="">
                    <h3 class="my-3">Appeal History</h3>

                    <div class="appeal_history">

                        <div class="appeal_history_block mb-4">
                            <div class="fs-14 text-muted mb-3">
                                <span class="date me-1">14-02-2023</span>
                                <span class="time">15:51:25</span>
                            </div>
                            <div class="mb-2">
                                <img src="https://wealthmark.io/assets/img/wealthmark-logo.svg" class="max-width-30px me-2" />
                                <span>Customer support's comment</span>
                            </div>
                            <div class="bg-light-blue p-2 position-relative">
                                    <div class="comment-text">Comment</div>
                                   <div class="bg-white pt-1 mt-2 mb-2"></div>
                               <div class="fs-14 text-black fw-normal">
                                   Dear buyer. we noticed that you marked the orr as paid. however. the seller has not received the money. please upload valid proof of payment here (shuuld include source or sender name, card number, amount, date and recipient account) and reply to thismessage as soon as possibl. this order will be canceled in the next 1 HOUR if there is no reply from you. Please note that clicking "Transferred, notify seller" without making the payment will lead to your account suspension if you attempt to du so multiple times. Dear both parties, please maintain communication using chatbox. Kindly check with your bank update the progress of the payment to the other party. Please do NOT release the crypto unless you actually received the payment. Note: Customer Support DOES NOT contact users via phone call, messenger or other platforms, and DO NOT ask for personal information, nor scanning of QR Code. Be aware of FAKE payment receipts and payment notifications via SMS/Email. Wealthmark Team
                               </div>
                               <div class="status">
                                   New
                               </div>
                            </div>
                        </div>
                        <div class="appeal_history_block mb-4">
                            <div class="fs-14 text-muted mb-3">
                                <span class="date me-1">14-02-2023</span>
                                <span class="time">15:51:25</span>
                            </div>
                            <div class="mb-2">
                                <img src="https://wealthmark.io/assets/img/wealthmark-logo.svg" class="max-width-30px me-2" />
                                <span>Shubhm rawat</span>
                            </div>
                            <div class="bg-light-blue p-2">
                                <div class="comment-text">Reason(s)</div>

                               <div class="fs-14 text-black fw-bold mb-4">
                                  I did not receive payment from the buyer
                               </div>
                               <div class="comment-text">Reason(s)</div>
                               <div class="fs-14 text-black fw-bold mb-4">
                                  I have not received payment by user even I asked to send me payment prooof
                               </div>
                               <div class="d-flex align-items-start mb-3 flex-wrap">
                                <img class="max-width-80px mx-2" src="https://wealthmark.io/assets/img/reward-center/reward-gift-card.jpg" />
                                <img class="max-width-80px mx-2" src="https://wealthmark.io/assets/img/reward-center/reward-gift-card.jpg" />
                                <img class="max-width-80px mx-2" src="https://wealthmark.io/assets/img/reward-center/reward-gift-card.jpg" />
                               </div>
                            </div>
                        </div>
                    </div>

                </div>



                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                   <div class="wm-chatbox bg-light-blue p-3">
                      <div class="chat-box">
                         <div class="header" id="my-div2">
                            <div class="avatar-wrapper avatar-big">
                                @if(!empty($seller_details))
                                <img src="{{  asset('assets/img/country-flag/').'/'.$seller_details->country_flag }} " alt="avatar" />


                               @elseif(empty($seller_details) && $get_order_data->order_status==0 )
                               <img src="https://uxwing.com/wp-content/themes/uxwing/download/time-and-date/pending-clock-icon.png" alt="avatar" />
                               @endif
                            </div>
                            <span class="name">
                            @if(!empty($seller_details))
                            <?php echo $seller_details->first_name; ?>

                            @endif
                            </span>
                            <span class="options">
                            <i class="bi bi-three-dots"></i>
                            </span>
                         </div>

                          @if(!empty($seller_details))
                           <div class="chat-room scrollbar-style">
                              <input type="hidden" class="btn btn-info btn-xs start_chat" data-touserid="{{$seller_details->id}}" data-tousername="{{$seller_details->id}}" />
                                 <div class="chat_history" data-touserid="{{$seller_details->id}}" id="chat_history_{{$seller_details->id}}">

                                 </div>


                                 </div>


                            <div class="type-area">
                            <div id="chat_img" contenteditable class="input-wrapper img hide" >

                            </div>

                            <input type="text" name="chat_message_{{$seller_details->id}}" id="chat_message_{{$seller_details->id}}" class="form-control chat_message border-0" placeholder="Type messages here..." data-emoji-picker="true"/>

                            <span class="button-add position-relative">

                               <!--<i class="bi bi-plus-circle-fill"></i>-->
                                <div class="image_upload">
                                    <form id="uploadImage" method="post" action="{{ route('upload-image') }}">
                                            <i class="bi bi-paperclip text-white bg-dark-blue rounded-circle p-1"></i>
                                            <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png, .jpeg" class="chat-file-ulp">
                                    </form>
                                </div>

                            </span>
                            <button type="button" name="send_chat" id="{{$seller_details->id}}" class="button-send send_chat" > <i class="bi bi-send"></i> </button>
                         </div>

                              </div>
                              @endif


                </div>
             </div>
                </div>
            </div>
        </section>

      @include('template.country_language')
      @include('template.web_footer')

       <script>

         $(".pg-option").click(function () {
        // alert();
         $(this).addClass("active");
         $(this).children(".pg-selected").attr("src","{{  asset('/assets/img/wm-card_tick.svg') }}");
         $(this).siblings(".pg-option").removeClass("active");
         $(this).siblings(".pg-option").children(".pg-selected").attr("src","{{  asset('/assets/img/wm-not_selected_tick.svg') }}")
         });



         //Content Loaded
         window.addEventListener("DOMContentLoaded", (e) => {
         var header = document.querySelector(".header");
         var chatRoom = document.querySelector(".chat-room");
         var typeArea = document.querySelector(".type-area");
         var btnAdd = document.querySelector(".button-add");
         var others = document.querySelector(".others");
         var emojiBox = document.querySelector(".emoji-button .emoji-box");
         var emojiButton = document.querySelector(".others .emoji-button");
         var emojis = document.querySelectorAll(".emoji-box span");
         var inputText = document.querySelector("#inputText");
         var btnSend = document.querySelector(".button-send");
         var messageArea=document.querySelector(".message.message-right:last-child");
         //Header onclick event
         //   header.addEventListener("click", (e) => {
         //     if (typeArea.classList.contains("d-none")) {
         //       header.style.borderRadius = "20px 20px 0 0";
         //     } else {
         //       header.style.borderRadius = "20px";
         //     }
         //     typeArea.classList.toggle("d-none");
         //     chatRoom.classList.toggle("d-none");
         //   });
         //Button Add onclick event
         btnAdd.addEventListener("click", (e) => {
         others.classList.add("others-show");
         });
         //Emoji onclick event
         if(emojiButton){
            emojiButton.addEventListener("click", (e) => {
         emojiBox.classList.add("emoji-show");
         });
         }

         //Button Send onclick event
         btnSend.addEventListener("click", (e) => {

         var mess=inputText.value;
          // alert(mess);
             var bubble=document.createElement('div');
             bubble.className+=" bubble bubble-dark";
             bubble.textContent=mess;
             messageArea.appendChild(bubble);
             chatRoom.scrollTop = chatRoom.scrollHeight;
             inputText.value="";
         });
         for (var emoji of emojis) {
            emoji.addEventListener("click", (e) => {
           e.stopPropagation();
           emojiBox.classList.remove("emoji-show");
           others.classList.remove("others-show");
           inputText.value+=e.target.textContent;
         });
         }
         });

         document.addEventListener('DOMContentLoaded', function(){
         var chatWindow = document.querySelector('.chat-room');
         chatWindow.scrollTop = chatWindow.scrollHeight;

         });

      </script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>
@if(!empty($seller_details)&& $get_order_data->order_status==1)
<script>
    $(document).ready(function(){

	// fetch_user();

    	setInterval(function(){
    // 		update_last_activity();
    		// fetch_user();
    		update_chat_history_data();
    		//fetch_group_chat_history();
    	}, 1000);

    	// function fetch_user()
    	// {
    	// 	$.ajax({
    	// 		url:"{{ route('fetch-user') }}",
    	// 		method:"POST",
        //         data: {
        //             "_token": "{{ csrf_token() }}"

        //             }
    	// 		success:function(data){
    	// 			$('#user_details').html(data);
    	// 		}
    	// 	})
    	// }

    	function update_last_activity()
    	{
    		$.ajax({
    			url:"{{ route('update-last-activity') }}",
    			success:function()
    			{

    			}
    		})
    	}



	    $(document).on('ready', function(){
		var to_user_id =  "{{$seller_details->id}}";
		var to_user_name =  "{{$seller_details->id}}";
		//make_chat_dialog_box(to_user_id, to_user_name);
		// $("#user_dialog_"+to_user_id).dialog({
		// 	autoOpen:false,
		// 	width:400
		// });
		// $('#user_dialog_'+to_user_id).dialog('open');
		$('#chat_message_{{$seller_details->id}}').emojioneArea({
			pickerPosition:"top",
			toneStyle: "bullet"
		});
	});

	    $(document).on('click', '.send_chat', function(){
		var to_user_id = $(this).attr('id');
		var chat_message = $.trim($('#chat_message_'+to_user_id).val());
     // alert(chat_message);
		var chat_image = $.trim($('#chat_img').html())
		var img_path = $("#chat_img .chat_img").attr('src');
		var order_id = <?php echo $_SESSION['orderid']; ?>;

		//alert(chat_image);
		if (chat_message != ''){
			chat_messages = chat_message;
		}else{
		   // alert();
			chat_messages = chat_image;
			$("#chat_img").removeClass('hide');
		}
		if(chat_messages != '')
		{
			$.ajax({
				url:"{{ route('insert-chat') }}",
				method:"POST",
				data:{
                    "_token": "{{ csrf_token() }}",
                    to_user_id:to_user_id,
                    chat_message:chat_messages,order_id:order_id},
				success:function(data)
				{
					$('#chat_message_'+to_user_id).val('');
				// 	var element = $('#chat_message_'+to_user_id).emojioneArea();
				// 	element[0].emojioneArea.setText('');

					$('#chat_history_'+to_user_id).html(data);
					$("#uploadImage").val('');
					$("#chat_img").val('');
					$("#chat_img").addClass('hide');
					$('.input-send').removeClass('hide');
                    $('.button-add').removeClass('hide');

				}
			})
		}
		else
		{
			// alert('Type something');
		}
	});


    	function fetch_user_chat_history()
    	{
          var to_user_id = "{{$seller_details->id}}";
          var order_id = <?php echo $_SESSION['orderid']; ?>;
    		$.ajax({
    			url:"{{ route('fetch-user-chat-history') }}",
    			method:"POST",
    			data:{  "_token": "{{ csrf_token() }}",to_user_id:to_user_id,order_id:order_id},
    			success:function(data){
                //alert(data);
    				$('#chat_history_'+to_user_id).html(data);
    			}
    		})
    	}

    	function update_chat_history_data()
    	{
    		$('.chat_history').each(function(){
    			var to_user_id = $(this).data('touserid');
    			fetch_user_chat_history(to_user_id);
    		});
    	}

    	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
		$('#is_active_group_chat_window').val('no');
	});

	    $(document).on('focus', '.chat_message', function(){
		var is_type = 'yes';
		$.ajax({
			url:"{{ route('update-is-type-status') }}",
			method:"POST",
			data:{ "_token": "{{ csrf_token() }}",is_type:is_type},
			success:function()
			{

			}
		})
	});

	    $(document).on('blur', '.chat_message', function(){
		var is_type = 'no';
		$.ajax({
			url:"{{ route('update-is-type-status') }}",
			method:"POST",
			data:{ "_token": "{{ csrf_token() }}",is_type:is_type},
			success:function()
			{

			}
		})
	});

    	// $('#group_chat_dialog').dialog({
    	// 	autoOpen:false,
    	// 	width:400
    	// });

    	// $('#group_chat').click(function(){
    	// 	$('#group_chat_dialog').dialog('open');
    	// 	$('#is_active_group_chat_window').val('yes');
    	// 	fetch_group_chat_history();
    	// });

	    $('#send_group_chat').click(function(){
		var chat_message = $.trim($('#group_chat_message').html());
		if(chat_message != '')
		{
			$.ajax({
				url:"{{ route('upload-image') }}",
				method:"POST",
				data:{"_token": "{{ csrf_token() }}", to_user_id:to_user_id ,chat_message:chat_message},
				success:function(data){
					$('#group_chat_message').html('');
					$('#group_chat_history').html(data);
				}
			})
		}
		else
		{
			// alert('Type something');
		}
	});

	    function fetch_group_chat_history(){
		var group_chat_dialog_active = $('#is_active_group_chat_window').val();
		var action = "fetch_data";
		if(group_chat_dialog_active == 'yes')
		{
			$.ajax({
				url:"{{ route('upload-image') }}",
				method:"POST",
				data:{"_token": "{{ csrf_token() }}",action:action},
				success:function(data)
				{
					$('#group_chat_history').html(data);
				}
			})
		}
	}


        $(document).ready(function() {
    $('#uploadFile').on('change', function(){
    var to_user_id = $('#chat_message_{{$seller_details->id}}').val();
    $('#chat_img').removeClass('hide');
    $('.others').removeClass('others-show');
    $('.input-send').addClass('hide');
    $('.button-add').addClass('hide');
    $('#uploadImage').ajaxSubmit({
   //$.ajax({
      // url:"{{ route('upload-image') }}",
		// method:"post",
      data: {
         "_token": "{{ csrf_token() }}",
          to_user_id: to_user_id,
      },

      target: "#chat_img",

      resetForm: true
   });
});
});

        $(document).on('click', '.remove_chat', function(){
		var chat_message_id = $(this).attr('id');
		if(confirm("Are you sure you want to remove this chat?"))
		{
			$.ajax({
				url:"{{ route('remove-chat') }}",
				method:"POST",
				data:{"_token": "{{ csrf_token() }}",chat_message_id:chat_message_id},
				success:function(data)
				{
					update_chat_history_data();
				}
			})
		}
	});

    });

</script>

<script>
  //  const checkbox = document.getElementById("myCheckbox");
</script>



<script>
    $(document).ready(function() {
      $('input[type="file"]').on('change', function() {

          if($('#myCheckbox').is(":checked")){
            //   console.log('true');
               var fileExtension = $(this).val().split('.').pop().toLowerCase();
                if ($.inArray(fileExtension, ['jpg', 'jpeg' , 'png']) == -1) {
                 //alert("Please select a file with a JPG or JPEG extension.");
                triggerAlert('Please select a file with a JPG , JPEG or PNG extension.', 'error');
                $(this).val('');
            }
          }else{
            //   console.log('false');
              triggerAlert('TOC not accepted', 'error');
          }

      });
    });
    $(document).ready(function(){
        if('<?php isset($_SESSION['orderid']) ?>' ){

              function check_if_tradeDone(){
                    var order_id = '<?php echo $_SESSION['orderid'] ?>';
                       // alert(order_id);
                        $.ajax({
                        url: '{{ route('check-tradeStatus') }}',

                        type: 'POST',
                        data: {
                        "_token" : "{{ csrf_token() }}",
                        'order_id' : order_id

                        },

                        success: function(data){
                            //console.log(data);
                             $('.trading_experiance').css({'display':'block'})
                        },
                        error: function(xhr, status, error){
                            // Error message
                        }
                    });
                }
        };

         $('#myCheckbox').click(function (){
             if($('#myCheckbox').is(":checked")){
                $("#confirmButton").removeAttr('disabled');
                //$("input[type='file']").removeAttr('disabled');
             }else{
                 $('#confirmButton').attr('disabled', 'disabled');
                 //$("input[type='file']").attr('disabled', 'disabled');
             }
            });

        $("#confirmButton").click(function(){


            if($('#myCheckbox').is(":checked")){

               var checkbox = $("#myCheckbox").prop("checked");
                var file = $("input[type='file']").prop("files")[0];
                var formData = new FormData( $('#buyer_confirmationForm')[0]);

                // formData.append('checkbox', checkbox);
                // formData.append('file', file);
                $.ajax({
                    url: '{{ route('buyer-confirmation-status') }}',
                    beforeSend: function(){ $(".payment_proof_spinner").text("Sending...."); $(".payment_proof_spinner").css("pointer-events","none"); },
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        // Success message

                         $(".if_paymentIssue").css("display","block");
                          $(".payment_proof_spinner").text("");
                                        $(".payment_proof_spinner").css("pointer-events","none");
                                        $('#confirmButton').attr('disabled', 'disabled');
                                        $("input[type='file']").attr('disabled', 'disabled');
                                        $('#buyer_confirmationForm')[0].reset();
                                        $('#buyer_confirmationForm .btn-close').click();

                        },
                         complete: function (data) {



                                                     },
                    error: function(xhr, status, error){
                        // Error message
                          $(".payment_proof_spinner").text(" ");
                            $(".payment_proof_spinner").addClass('error');
                            var erroJson = JSON.parse(xhr.responseText);

                            $(".payment_proof_spinner").text(erroJson.error.file);

                            triggerAlert( erroJson.error.file, 'error');

                            setTimeout(function(){
                            $(".payment_proof_spinner").removeClass('error');
                            $(".payment_proof_spinner").text('');
                            }, 2000)
                    }
                });

        }else{
          // alert('accept TOC.');
           $('#confirmButton').attr('disabled', 'disabled');
        }



        });

        $("#request_crypto_transfer").click(function(){

            var request_crypto_transfer = $(this).val();
           // alert(request_crypto_transfer);
            $.ajax({
                url: '{{ route('request-crypto-transfer') }}',

                type: 'POST',
                data: {"_token": "{{ csrf_token() }}",request_crypto_transfer:request_crypto_transfer},

                success: function(data){
                    // Success message
                    $('#paid-order-cancelled .btn-close').click();
                },
                error: function(xhr, status, error){
                    // Error message
                }
            });
        });
    });
</script>
@endif

   </body>
</html>
