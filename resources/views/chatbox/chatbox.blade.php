   <div class="wm-chatbox bg-light-blue p-3">
                    <div class="chat-box">
                        <div class="header" id="my-div2">
                            <div class="avatar-wrapper avatar-big">
                              <img src="{{  asset('assets/img/country-flag/') }} " alt="avatar" />
                            </div>
                            <span class="name">
                                <span>Shubham Rawat</span>
                                <span class="verified text-green">
                                    <i class="bi bi-patch-check-fill"></i>
                                </span>
                                <div class="fs-12">
                                    <span class="text-green">Online</span>
                                    <span class="hide">Offline</span>
                                </div>
                            </span>
                        </div>
                        <div class="chat-room scrollbar-style">
                            <input type="hidden" class="btn btn-info btn-xs start_chat"/>
                             <div class="chat_history" data-touserid="demo_1" id="chat_history_ID">
                                    <!--============chat area====================-->
                            </div>


                        </div>
                        <div class="type-area">
                            <div id="chat_img" contenteditable class="input-wrapper img hide" >

                            </div>

                            <input type="text" name="chat_message_" id="chat_message_ID" class="form-control chat_message border-0" placeholder="Type messages here..." data-emoji-picker="true"/>

                            <span class="button-add position-relative">

                               <!--<i class="bi bi-plus-circle-fill"></i>-->
                                <div class="image_upload">
                                    <form id="uploadImage" method="post" action="">
                                            <i class="bi bi-paperclip text-white bg-dark-blue rounded-circle p-1"></i>
                                            <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png, .jpeg" class="chat-file-ulp">
                                    </form>
                                </div>

                            </span>
                            <button type="button" name="send_chat" id="" class="button-send send_chat" > <i class="bi bi-send"></i> </button>
                         </div>

                              </div>



                </div>

