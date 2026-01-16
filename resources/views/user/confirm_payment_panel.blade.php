

  <style>
     .pg-option {
            border: 1px solid #dee2e6 ;
            padding: 10px;
            border-radius: 10px;
            background: #f5f8fd;
            cursor: pointer;
            margin:10px 0px;
            padding-right: 30px;
            position:relative;
            }
    .pg-option:hover{
       box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
       /*border:1px solid #fdc116;*/
    }

      .pg-option div:first-child{
          display:flex;
          justify-content:space-between;
      }
      .pg-option.active{
          border:1px solid #fdc116 !important;
      }
      .pg-heading{
          margin-bottom: 1rem!important;
          padding: 0.25rem!important;
          padding-bottom:10px;
          align-items: center;
    justify-content: space-between;
    display: flex!important;
    border-bottom:1px solid #dee2e6;
      }

      .pg-footer{
          border-top:1px solid #dee2e6!important;
          padding-top:10px;
          display:flex;
          align-items: center;
    justify-content: space-between;
      }
      .pg-footer > div >span{
        color: #9e9e9e;
    font-size: 14px;
      }

      .pg-main-div{
            background: white !important;
    padding: 1.5rem!important;
    position: relative!important;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    min-height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 10px;
      }

      .pg-selected{position:absolute;
          top:0;
          right:0;
      }










      /*====================dashboard page======================*/
      .db-user-div{
            display: flex;
            align-items: center;
             font-size: 16px;
             margin-bottom:10px;
             cursor: pointer;
      }
      .db-user-div b{
          font-weight:900;
          color:black !important;
      }
      .db-user-name{
        color: rgb(112, 122, 138);

    margin-right:10px;
      }
      .db-user-type{
          color:#fdc116;
          margin-right:10px;
      }
      .db-user-status{
        color:#fdc116;
          margin-right:10px;
      }
      .db-twitter-status{

      }
     .db-login-activity {
          color: rgb(112, 122, 138);
    font-size: 12px;
      }

      .user-name-div{
          margin-bottom:5px;
      }
      .if-order-cancel{
          font-size:15px;
          color: rgb(112, 122, 138);
      }
      .if-order-cancel div.title{
          font-size:20px;
          color:black;
      }
       .if-order-cancel div:first-child p{
           font-size:12px;
       }
       .order_no{
           margin-bottom:10px;
       }
       .order_no span:nth-child(2){
           color:black;
           margin-left:10px;
       }


        .time_created span:nth-child(2){
           color:black;
           margin-left:10px;
       }
       .Order_Info{
           display: flex!important;
margin-bottom: 0.5rem!important;
margin-top: 0.5rem!important;
align-items: center!important;
justify-content:space-between;
    flex-wrap: wrap;
       }
       .Order_Info > div {
               min-width: 120px;
    margin-right: 20px;
    max-width: 150px;
       }

     .Order_Info .heading{
         font-size:15px;
          color: rgb(112, 122, 138);
          padding-left:6px;
     }
      .Order_Info   .order-status{
              font-size: 1.5rem;
    color: rgb(0 0 0);
    font-weight: 900 !important;
    display: flex;
    align-items: center;
      }

    .Order_Info  .order-status > i{
        font-size:15px;
        line-height:0px;
    }

    /*--------------------chatbox-------------------------------------*/


..chat-box i:hover {
  color: #be79df;
}

.others-show{
  top:-55px !important;
  z-index:10 !important;
}
.emoji-show{
            display:flex !important;
            flex-wrap:wrap;
            align-content:flex-start;
            width:150px !important;
            height:100px !important;
            padding:10px;

            top:-135px !important;
            right:10px !important;
            background-color:#fff;
            box-shadow:0 0 25px -5px lightgray;
            border-radius:5px 5px 0 5px;
}
/*.chat-box button {*/
/*      border: 0;*/
/*    outline: none;*/
/*    color: #263674;*/
/*    font-weight: 700 !important;*/
/*}*/
.chat-box img {
  width: 100%;
  object-fit: cover;
}
.avatar-wrapper {
  border-radius: 50%;
  overflow: hidden;
}

.chat-box .header {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 20px 20px 0 0;
    padding: 15px;}
    .header .avatar-big {
      width: 30px;
      height: 30px;
    }
   .header .name {
      margin-left: 20px;
      font-size: 20px;
      font-weight: 500;
    }
  .header  .options {
      font-size: 20px;
      color: lightgrey;
      margin-left: auto;
      cursor: pointer;
    }

.chat-box {
  width: 100%;
  margin: auto;
}
  .chat-room {
       min-height: 300px;
    background-color: #f7f9fb;
    padding: 15px;
    border: 5px solid white;
    max-height: 450px;
    overflow: auto;
  }
    .chat-room .avatar-small {
      width: 25px;
      height: 25px;
    }
   .chat-room .message {
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
    }
    .chat-room .message-left {
      align-items: flex-start;
  }
    .chat-room .message-left  .bubble {
        border-radius: 0 5px 5px 5px;
      }

    .chat-room .message-right {
      align-items: flex-end;
  }
    .chat-room .message-right .bubble {
        border-radius: 5px 0 5px 5px;
      }

   .chat-room .bubble {
      padding: 10px;
      font-size: 14px;
      margin-top: 5px;
      display: inline-block;
    }

   .chat-room .bubble-light {
          background-color: #ffffff;
    color: black;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    }

  .chat-room .bubble-dark {
         color: #000000;
    background-color: #f1f1f1;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    font-weight: 600 !important;
    }




  .type-area {
    display: flex;
    height: 50px;
    background-color: #fff;
    border-radius: 0 0 20px 20px;
        border-radius: 0 0 20px 20px;
    justify-content: space-between;
}
   .type-area  .input-wrapper {
      overflow:hidden;
     border-radius: 0 0 0 20px;
     width:100%;
}

.type-area  .input-wrapper  input {
        outline: none;
        border: none;
        padding-left: 20px;
        height: 100%;
        width: 100%;
        font-size: 14px;
      }

   .type-area  .button-add {
      display: flex;
      align-items: center;
     position: relative;
}

  .type-area  .button-add   i {
        font-size: 20px;
        color: #263674;
        cursor: pointer;
      }
       .type-area  .button-add   i:hover {
        color: #fdc116;
      }

     .type-area  .button-add .others {
        display: flex;
        padding: 10px 15px;
        background-color: #fff;
        position: absolute;
        top:0px;
        z-index:-1;
        right:-35px;
        border-radius: 999px;
        box-shadow:0 0 25px -5px lightgray;
        transition:0.3s all ease-out;
        min-width: 100px;
        align-items: center;
        justify-content: space-between;
     }
     .type-area  .button-add .others > span{
         cursor: pointer;
     }
     .type-area  .button-add .others   span  i {
            font-size: 20px;
            color: #be79df;
          }
     span.image-button {
          margin: 0 25px;
        }
    .emoji-button{
          position:relative;
}
    .emoji-button .emoji-box{
            display:none;
            position:absolute;
            width:0px;
            height:0px;
            top:0px;
            right:0px;
           transition:0.3s all ease-out;
}
    .emoji-button .emoji-box   span{
              user-select:none;
              cursor:pointer;
              margin-right:5px;
              margin-bottom:5px;
              width:20px;
              height:20px;
            }



.button-send {
        background-color: #fff;
   width: 50px;
    color: #263674;
    font-size: 20px;
    font-weight: 900 !important;
    border: 1px solid transparent;
    border-left: 2px solid #fff7f7;
    border-radius: 0 0 20px 0;
    margin-left: 10px;
    }
    .button-send:hover {
          background-color: #263674;
    color: #fff;

    }
    .chat-time{
        font-size:12px;
        margin-left:10px;
    }
    .chat-room .message-right .chat-time{
        margin-right:10px;
        margin-left:0px;
    }
 /*----------------------------------------------------------------   */
    .pg-methods{
        display:flex;
        align-items:center;
        justify-content:start;
    }

    .pg-methods > div{
        background:white;
        border-radius:5px;
        color:black;
        padding:10px;
        margin:10px;
        min-width:100px;
        max-width:200px;
        text-align:center;
    }


   .divider-horizental {
        width: 100%;
    height: 2px;
    background: #EAECEF;
    margin:auto;
    }

    .wm-chatbox{
            position: sticky;
    top: 70px;
    }

    .chat-file-ulp{
           position: absolute;
    width: 100%;
    height: 100%;
    display: block !important;
    top: 0;
    left: 0;
    opacity: 0;
     visibility: hidden;
    }

    .chatbox-img-file{
        max-width:200px;
        border-radius:10px;
    }

    .chat-img-download{
        background: #00000094;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    }
   .chat-img-download > span {
          color: white;
    border: 3px solid white;
    padding: 5px 10px;
    border-radius: 10px;
    line-height: 20px;
    font-size: 20px;
    font-weight: 600 !important;
    cursor: pointer;
    }
  </style>




  <section class="bg-light-blue" style="display:block">
        <div class="container">
                <div class="row align-items-center justify-content-center">

       <!--<div class="w-auto me-5">-->
       <!--    <div class="sec-title">-->
       <!--                     <span class="title">Welcome to Wealthmark</span>-->
       <!--                     <h2 class="heading-h2">Buy crypto in 3 steps</h2>-->
       <!--                     <div class="text">-->
       <!--                         Buy Bitcoin and 99+ cryptocurrency with 50+ fiat currencies-->
       <!--                     </div>-->
       <!--   </div>-->
       <!--</div>-->

            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <!--<a href="{{  url(app()->getLocale()."/buy-sell-trade") }}" class="btn-default">-->
                        <span class="backToselection_forTrade"><i class="bi bi-chevron-left"></i>  Back</span>
                             <!--<a href="{{  url()->previous()  }}" class="btn-default ">    <i class="bi bi-chevron-left"></i>  Back   </a>-->
                    </div>

                </div>
                <div class="position-relative pg-main-div">
                    <div>
                        <span class="confirmerr"></span>
                     <div class="pg-heading">
                        <h4 class="title text-center w-100">Select Payment Method</h4>
                    </div>
                    <div class="pg-heading border-0">
                        <span>Pay With</span>
                        <span> Pay With</span>
                    </div>

                    @foreach( $userPaymentMethod as $userEachMethod)
                    <?php $payment_method_id = App\Models\payment_method_list::where('name', $userEachMethod->method_type)->first(); ?>

                    <div class="pg-option">
                        <div class="">
                            <span>P2P</span>
                            <span class="TotalCryptoval"></span>
                        </div>

                      <input type="hidden" class="cryptoVAL" name="cryptoVAL" value="">
                      <input type="hidden" class="cryptoTYPE" name="cryptoTYPE" value="">
                        <div>
                            <span>{{ $userEachMethod->method_type}}</span>
                        <input type="hidden" class="paymentMethodId" name="paymentMethodId" value="{{ $userEachMethod->id }}">
                        <input type="hidden" class="paymentMethodType" name="paymentMethodType" value="{{ $userEachMethod->method_type }}">
                        <input type="hidden" class="paymentListId" name="paymentListId" value="{{ $payment_method_id->id }}">
                        </div>
                        <img src="{{ asset('img/wm-not_selected_tick.svg') }} " class="pg-selected">
                    </div>
                    @endforeach


                    </div>
                    <!------------------------------------------------>

                    <div class="pg-footer">
                        <div>
                            <span>You will pay</span>
                      <input type="hidden" class="domesticCurrencyVAL" name="domesticCurrencyVAL" value="">
                      <input type="hidden" class="domesticCurrencyTYPE" name="domesticCurrencyTYPE" value="">
                      <input type="hidden" class="domesticCurrencyId" name="domesticCurrencyId" value="">
                            <h4 class="title totalPayment"></h4>
                        </div>
                         <!--<a class="btn btn-blue-login  shadow d-flex justify-content-center align-items-center " href="https://wealthmark.io/beta-dlp/en/login"><span> Login </span></a>-->
                        <!--<button class="btn btn-yellow confirmPay"> Confirm <span id="timer_div"></span></button>-->
                         <button class="btn btn-yellow confirmPay" id="confirmPay" > Confirm <span id="timer_div"></span></button>
                        <!--<a href="" class="btn-yellow confirmPay">Confirm  <span id="timer_div"></span></a>-->
                    </div>
                </div>
            </div>

    </div>
</div>


</section>


     <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
   <script>


// $(".pg-option").click(function () {
//   // alert();
//     $(this).addClass("active");
//     $(this).children(".pg-selected").attr("src","{{ asset('img/wm-card_tick.svg') }}");
//     $(this).siblings(".pg-option").removeClass("active");
//     $(this).siblings(".pg-option").children(".pg-selected").attr("src","{{ asset('img/wm-not_selected_tick.svg') }}")
// });



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
  emojiButton.addEventListener("click", (e) => {
    emojiBox.classList.add("emoji-show");
  });
   //Button Send onclick event
  btnSend.addEventListener("click", (e) => {

    var mess=inputText.value;
     //alert(mess);
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


