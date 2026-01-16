   <?php //echo "<pre>"; print_r($seller_details); die(); ?> 
      <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark |Select Payment Method</title>
        @include('template.web_css')
 
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
  
   </head>
   
 <body class="bg-white">
     
     @include('template.mobile_menu')
        @include('template.web_menu')
    <?php 
    
    //print_r($_SESSION); ?> 


<!--<section class="">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="db-user-div">-->
<!--                    <div class="profile-img me-3">-->
<!--                            <img src="{{ asset('/assets/img/country-flag/India-Icon.svg') }}" alt="">-->
<!--                    </div>-->
<!--                    <div>-->
<!--                    <div class="user-name-div">-->
<!--                        <span class="db-user-name">User Id: <b>125426523</b></span>-->
<!--                        <span class="db-user-type">Regular User </span>-->
<!--                        <span class="db-user-status">Verify</span>-->
<!--                        <span class="db-twitter-status"><i class="bi bi-twitter me-1"></i> <span class="linked">Not Linked</span></span>-->
<!--                    </div>-->
<!--                    <div class="db-login-activity">-->
<!--                        <span>Last login time : <b> 2023-02-01 12:44:03</b></span> -->
<!--                         <span>IP : <b> 103.121.114.202</b></span> -->
<!--                    </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--         </div> -->
<!--     </div> -->
<!--     </section>-->

<section class="bg-whitesmoke py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="d-md-flex justify-content-between align-items-center if-order-cancel">
                   <div class="">
                       <div class="title mb-1">
                           @if($get_order_data->order_status==0)
                           Order Pending
                           
                           @elseif($get_order_data->order_status==1)
                           Order Confirmed
                           
                           @elseif($get_order_data->order_status==2)
                           Order Cancelled
                           @endif
                           <i class="bi bi-info-circle-fill ms-1"></i>
                       </div>
                       <p>You have cancelled the Order. </p>
                   </div>
                   <div class="text-right">
                        <div class="order_no"> 
                            <span>Order number : </span> 
                            <span><?php echo $get_order_data->id; ?></span>
                            <span><i class="bi bi-info-circle-fill"></i></span> 
                        </div>
                        <div class="time_created">
                            <span>Time Created : </span>
                            <span><?php echo $get_order_data->created_at; ?></span>
                        </div>
                   </div>
               </div>
            </div>
            
            
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <!--<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>-->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="mb-3">
                    <h3 class="title mb-3"> Order Info</h3>
                    <div class="Order_Info">
                        
                        <div class="">
                            <div class="heading">Amount</div>
                            <div class="order-status text-success">
                               <i class="bi bi-currency-dollar"></i>
                                <?php echo $get_order_data->domestic_currency_value; ?>
                            </div>
                        </div>
                         
                        <div class="">
                            <div class="heading">Price</div>
                            <div class="order-status">
                                <i class="bi bi-currency-dollar"></i>
                                <?php echo $get_order_data->crypto_current_value; ?>
                            </div>
                        </div>
                         
                        <div class="">
                            <div class="heading">Quantity</div>
                            <div class="order-status">
                                
                                <?php echo $get_order_data->total_crypto_value; ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="shadow-sm p-3 mb-3 mt-3 bg-light-blue">
                     <h3 class="title mb-3"> Payment Methods</h3>
                     
                   <div class="pg-methods">
                       <div class="pay_through_upi"><?php echo $get_order_data->payment_method_type; ?></div>
                       <!--<div class="pay_through_imps"> IMPS</div>-->
                       <!--<div class="pay_through_rtgs"> RTGS</div>-->
                   </div> 
                </div>
                
                <div class="mb-3 mt-5">
                     <h3 class="title mb-2"> Have a Question ?</h3>
                     <div class="divider-horizental mb-3"></div>
                    <section class="wm-pay-accordian-section">
                        <div class="container-fluid">
                      <div class="accordion" id="accordionExample">
                                  <div class="card">
                                    <div class="card-head" id="headingOne">
                                      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                     What is Example - 1 ?
                                      </h2>
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                                      <div class="text">  DeFi (Decentralized Finance) is a way of providing financial services to users through smart contracts. Existing DeFi projects aim to provide higher annualized earnings for specific currencies.</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-head" id="headingTwo">
                                      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  What is Example - 2 ?
                                      </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                      <div class="card-body">
                                       <div class="text">There's a relatively high threshold for users of DeFi products. Wealthmark DeFi Staking acts on behalf of users to participate in certain DeFi products, obtains and distributes realized earnings, and helps users to participate in DeFi products with a single click.</div>
                                      
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-head" id="headingThree">
                                      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     What is Example - 3 ?
                                      </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                                        <div class="text">1. Easy to use: You don't need to manage private keys, acquire resources, make trades, or perform other complicated tasks to participate in DeFi Staking. Wealthmark's one-stop service allows users to obtain generous online rewards without keeping an on-chain wallet. 2. No gas fee: Wealthmark Staking deposits users’ funds into smart contracts on users’ behalf, saving users on-chain gas fees.</div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  
                                  <div class="card">
                                    <div class="card-head" id="headingFour">
                                      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                   What is Example - 4 ?
                                      </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                      <div class="card-body">
                                  <div class="text">Once funds are successfully allocated to DeFi Staking, earnings are calculated beginning at 00:00 (UTC) the following day. The minimum earnings calculation period is one day; earnings for a period of less than one day will not be included in the earnings distribution.</div>     
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </section>

                </div>
             
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="wm-chatbox bg-light-blue p-3">
                    <div class="chat-box">
  <div class="header">
    <div class="avatar-wrapper avatar-big">
        @if($seller_details == '')
        <img src="" alt="avatar" />
        @else
      <img src="{{  asset('/assets/img/country-flag/').'/'.$seller_details->country_flag }} " alt="avatar" />
      @endif
    </div>
    <span class="name">
        @if($seller_details == '')
        Pending
        @else
        <?php echo $seller_details->first_name; ?> 
        @endif
        </span>
    <span class="options">
     <i class="bi bi-three-dots"></i>
    </span>
  </div>
  <div class="chat-room scrollbar-style">
       @if($seller_details == '')
       
       @else

       <div
                class="clearfix"
                v-for="message in messages"
            >
                @{{ message.user.name }}: @{{ message.message }}
            </div>

            <div class="input-group">
                <input
                    type="text"
                    name="message"
                    class="form-control"
                    placeholder="Type your message here..."
                    v-model="newMessage"
                    @keyup.enter="sendMessage"
                >

                <button
                    class="btn btn-primary"
                    @click="sendMessage"
                >
                    Send
                </button>
            </div>
    <!-- <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="avatar" />
            </div>
            <div class="chat-time">
                <span class="d-block"> 02-02-2023</span>
                 <span>10 : 50pm</span>
                </div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
 <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
    <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
    <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
    <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
    <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }} " alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }} " alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
    <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }} " alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div>
    <div class="message message-left">
        <div class="d-flex align-items-center">
            <div class="avatar-wrapper avatar-small">
                <img src="{{  asset('/assets/img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="avatar" />
            </div>
            <div class="chat-time">10 : 50pm</div>
        </div>
      <div class="bubble bubble-light">
        Hey anhat!  Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat! Hey anhat!
      </div>
    </div>
    <div class="message message-right">
         <div class="d-flex align-items-center">
              <div class="chat-time">10 : 50pm</div>
      <div class="avatar-wrapper avatar-small">
        <img src="{{  asset('/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" alt="avatar" />
      </div>
      
      </div>
      <div class="bubble bubble-dark">
        what is going on? what is going on? what is going on? what is going on?
      </div>
        <div class="bubble bubble-dark">
        what is going on? 
      </div>
    </div> -->
    
    <!--<div class="message message-right">-->
    <!--    <div class="bubble bubble-dark">-->
    <!--        <div class="position-relative chatbox-img-file">-->
    <!--            <img src="{{ asset('img//assets/img/demo-5-dark.png') }}" class="">-->
         
    <!--     <div class="chat-img-download">-->
    <!--         <span>-->
    <!--             <i class="bi bi-arrow-down"></i>-->
    <!--         </span>-->
    <!--     </div>-->
    <!--        </div>-->
         
    <!--     </div>-->
    <!--</div>-->
    <!-- <div class="message message-left">-->
    <!--    <div class="bubble bubble-light">-->
    <!--        <div class="position-relative chatbox-img-file">-->
    <!--            <img src="{{ asset('img//assets/img/demo-5-dark.png') }}" class="">-->
         
    <!--     <div class="chat-img-download">-->
    <!--         <span>-->
    <!--             <i class="bi bi-arrow-down"></i>-->
    <!--         </span>-->
    <!--     </div>-->
    <!--        </div>-->
         
    <!--     </div>-->
    <!--</div>-->
    @endif
  </div>
  <div class="type-area">
    <div class="input-wrapper">
      <input type="text" id="inputText" placeholder="Type messages here..." />
    </div>
   
    <span class="button-add">
      <!--<i class="fas fa-plus-circle"></i>-->
      <i class="bi bi-plus-circle-fill"></i>
      <div class="others">
        <span class="emoji-button">
         <i class="bi bi-emoji-smile"></i>
          <div class="emoji-box">
            <span>&#x1f604;</span>
            <span>😀</span>
            <span>😂</span>
            <span>😭</span>
            <span>😍</span>
            <span>🤮</span>
            <span>🤑</span>
            <span>😖</span>
            <span>😷</span>
          </div>
        </span>
        <!--<span class="image-button">-->
        <!-- <i class="bi bi-card-image"></i>-->
        <!--</span>-->
        <span class="position-relative">
         <i class="bi bi-paperclip"></i>
         <input type="file" class="chat-file-ulp">
        </span>
      </div>
    </span>
    <button class="button-send"> <i class="bi bi-send"></i> </button>
   
  </div>

</div>
                </div>
        </div>
    </div>
</section>




    
    

  @include('template.country_language')
    @include('template.web_footer') 
     <script src="{{ asset('/assets/css/accordian_bootstrap.min.js') }}"></script> 
   <script>
    //   var timeLeft = 30;
    // var elem = document.getElementById('timer_div');
    
    // var timerId = setInterval(countdown, 1000);
    
    // function countdown() {
    //   if (timeLeft == -1) {
    //     clearTimeout(timerId);
       
    //   } else {
    //     elem.innerHTML = "(" + timeLeft + ")"
    //     timeLeft--;
    //   }
    // }



$(".pg-option").click(function () {
    alert();
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
  emojiButton.addEventListener("click", (e) => {
    emojiBox.classList.add("emoji-show");
  });
   //Button Send onclick event
  btnSend.addEventListener("click", (e) => {
      
    var mess=inputText.value;
     alert(mess);
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
    <script>
        
        $(".pay_through_upi").click(function(){
      //  alert('pay_through_upi');
        location.href = "{{  url(app()->getLocale()."/user/payment/c2c/add/UPI") }}";
        });
        
        $(".pay_through_imps").click(function(){
     //   alert('pay_through_imps');
        location.href = "{{  url(app()->getLocale()."/user/payment/c2c/add/IMPS") }}";
        });
        
        $(".pay_through_rtgs").click(function(){
      //    alert('pay_through_rtgs');
        location.href = "{{  url(app()->getLocale()."/user/payment/c2c/add/Bank-Transfer-INDIA") }}";
        });
                    
    </script>

    </body>
</html>