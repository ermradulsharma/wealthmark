<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
        <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">

       @include('template.web_css')
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
      <!------------------------main theme css------------------------------->
      <!--<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">-->
      <!------------------------alert custom box css------------------------------->
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <!--<link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">-->
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/niceCountryInput.css') }}">
      <!----------------------------------- add for date picker box---------------------------------->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
    #selfie_image_preview img, #img_preview_back img, #img_preview_front img{
         -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
    }
    .UploadingImgstatus{
        color: #10311d;
    }
    .disablepointer{
        pointer-events: none;
    }

    .loading, .loadingPersonal{
        float:right;
        padding: 4px 2px;
        color: #264f9c;
    }
          .verification-steps {
         box-sizing: border-box;
         margin: 32px 0px 8px;
         min-width: 0px;
         position: relative;
         }
         .verification-steps .step-box {
         box-sizing: border-box;
         margin: 0px 0px 24px;
         min-width: 0px;
         display: flex;
         }
         .verification-steps .step-box-icon {
         box-sizing: border-box;
         margin: 0px 8px 0px 0px;
         min-width: 0px;
         width: 24px;
         height: 24px;
         }

         .verification-steps .step-box-content {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         flex: 1 1 0%;
         }
         .verification-steps .step-box-title {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         /*font-weight: 500 !important;*/
         font-size: 16px;
         line-height: 24px;
         text-align: left;
    padding-left: 10px;
         }
         .verification-steps .step-box-subtitle {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 400 !important;
         font-size: 14px;
         line-height: 20px;
         color: rgb(112, 122, 138);
        text-align: left;
    padding-left: 10px;
         }
         @media screen and (min-width: 767px)
         {
         .verification-steps {
         margin-top: 40px;
         }
         .verification-steps .step-box {
         margin-bottom: 32px;
         }
         }
         .inner .content-box-icon {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: #ffc107;
         font-size: 16px;
         fill: #ffc107;
         width: 1em;
         height: 1em;
         }
         .modal-counrty-code .iti__flag-container{
         width:100%;
         }
         .modal-counrty-code .iti{
         display:block;
         }
         .inner .content-box-text {
         box-sizing: border-box;
         margin: 0px 0px 0px 8px;
         min-width: 0px;
         font-weight: 600 !important;
         font-size: 14px;
         line-height: 20px;
         color: rgb(112, 122, 138);
         }
         .inner .content-box {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         margin-bottom: 10px;
         padding: 0px 20px;
         }
         .inner .heading {
         box-sizing: border-box;
         margin: 28px 0px 16px;
         min-width: 0px;
         font-size: 16px;
         line-height: 24px;
         color: #263674 !important;
         }
         .input-group-append {
         cursor: pointer;
         }
         .select_verification_type {
         box-sizing: border-box;
         min-width: 0px;
         max-height: 400px;
         overflow: auto;
         padding-left: 5px;
         padding-right: 5px;
         margin-bottom:10px;
         }
         .select_verification_type .outer {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         min-height: 200px;
         }
         .select_verification_type .inner {
         box-sizing: border-box;
         margin: 0px 0px 12px;
         min-width: 0px;
         display: flex;
         border: 1px solid transparent;
         border-radius: 4px;
         -webkit-box-pack: center;
         justify-content: center;
         flex-direction: column;
         height: fit-content;
         background-color: rgb(250, 250, 250);
         padding: 16px;
         }
         .select_verification_type .document_type {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: justify;
         justify-content: space-between;
         width: 100%;
         }
         /*.select_verification_type .document_type_active_icon {*/
         /*box-sizing: border-box;*/
         /*margin: 0px;*/
         /*min-width: 0px;*/
         /*color: #ffc107;*/
         /*width: 24px;*/
         /*height: 24px;*/
         /*font-size: 24px;*/
         /*fill: #ffc107;*/
         /*}*/
         .select_verification_type .document_type_inner {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         }

         .select_verification_type ._content_box {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         flex-direction: column;
         -webkit-box-pack: center;
         justify-content: center;
         }
         .select_verification_type ._title {
         box-sizing: border-box;
         margin: 0px 0px 0px 8px;
         min-width: 0px;
         font-weight: 500 !important;
         font-size: 16px;
         line-height: 24px;
         color: rgb(30, 35, 41);
         }
         .select_verification_type ._subtitle_box {
         box-sizing: border-box;
         margin: 4px 0px 0px 8px;
         min-width: 0px;
         align-self: flex-start;
         border-radius: 4px;
         padding: 4px 8px;
         background-color: rgb(254, 246, 216);
         }
         .select_verification_type ._subtitle {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: rgb(201, 148, 0);
         font-size: 12px;
         line-height: 16px;
         }

         .select_verification_type .document_type_active {
         box-sizing: border-box;
         margin: 0px 0px 12px;
         min-width: 0px;
         display: flex;
         border: 1px solid rgb(240, 185, 11);
         border-radius: 4px;
         -webkit-box-pack: center;
         justify-content: center;
         flex-direction: column;
         height: fit-content;
         background-color: rgb(250, 250, 250);
         padding: 16px;
         }
         .modal_ul {
         box-sizing: border-box;
         margin: 16px 0px 0px;
         min-width: 0px;
         height: auto;
         overflow-y: auto;
         padding: 0px;
         color: rgb(71, 77, 87);
         }
         .modal_ul > li:not(last-of-type) {
         margin-bottom: 8px;
         }
         .modal_li {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         gap: 4px;
         -webkit-box-align: center;
         align-items: center;
         text-align:left;
         }

         .modal_li_des {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         /*font-weight: 400 !important;*/
         font-size: 12px;
         line-height: 20px;
         }
         .modal-card-img{
         max-width:250px;
         margin:auto;
         }
         .modal-p{
         font-size:18px;
         font-weight:900 !important;
         color:black;
         text-align: left !important;
         line-height: 25px;
         }
         .upld-doc {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         width: 100%;
         max-height:400px;
         overflow-y:scroll;
         padding:0px 10px;
         margin-bottom:10px;
         }
         .upld-doc-heading {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 500;
         line-height: 24px;
         font-size: 16px;
         }
         .upld-doc-main {
         box-sizing: border-box;
         margin: 0px 0px 10px;
         min-width: 0px;
         display: flex;
         flex-direction: column;
         }
         .upld-box {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         flex-direction: column;
         width: 100%;
         }
         .upld-doc-subtitle {
         box-sizing: border-box;
         margin: 24px 0px 10px;
         min-width: 0px;
         color: rgb(71, 77, 87);
         }
         .upld-box-inner {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position:relative;
         display: flex;
         border-radius: 4px;
         border: 2px dashed rgb(234, 236, 239);
         position: relative;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         min-height: 135px;
         width: 100%;
         background-color: rgb(250, 250, 250);
         flex-direction: column;
         padding:10px 0px;
         }
         .photo-box {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: absolute;
         top: -10px;
         right: -10px;
         cursor: pointer;
         display: none;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         width: 20px;
         height: 20px;
         }
         .upld-box-icon {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: rgb(183, 189, 198);
         font-size: 16px;
         fill: rgb(183, 189, 198);
         width: 1em;
         height: 1em;
         }
         .photo-box1 {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         position: relative;
         border-radius: 4px;
         width: 100%;
         height: 32px;
         flex-shrink: 0;
         -webkit-box-pack: center;
         justify-content: center;
         -webkit-box-align: center;
         align-items: center;
         background-color: rgb(250, 250, 250);
         flex-direction: column;
         }
         .photo-box1-inner {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         top: 0px;
         position: absolute;
         width: max-content;
         height: 100%;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         flex-direction: column;
         }
         .upld-btn-doc {
         margin: 0px;
         appearance: none;
         user-select: none;
         cursor: pointer;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap;
         display: inline-flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         box-sizing: border-box;
         font-size: 14px;
         font-family: inherit;
         font-weight: 500;
         text-align: center;
         text-decoration: none;
         outline: none;
         padding: 6px 12px;
         line-height: 20px;
         min-width: 52px;
         word-break: keep-all;
         color: rgb(24, 26, 32);
         border-radius: 4px;
         min-height: 24px;
         border: none;
         background-image: none;
         background-color: rgb(252, 213, 53);
         }

         /*.cam-icon {*/
         /*box-sizing: border-box;*/
         /*margin: 0px 5px 0px 0px;*/
         /*min-width: 0px;*/
         /*color: rgb(24, 26, 32);*/
         /*font-size: 14px;*/
         /*fill: rgb(24, 26, 32);*/
         /*width: 1em;*/
         /*height: 1em;*/
         /*}*/

         .upld-doc-heading {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 500;
         line-height: 24px;
         font-size: 16px;
         }
         .divider {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         width: 16px;
         height: 16px;
         }
         @media screen and (min-width: 450px){
         .upld-doc-main {
         flex-direction: row !important;
         }
         }
         @media screen and (max-width: 767px){
         .css-1wi4m92{
         display:block !important;
         }}
         .img-preview{
         margin: 20px 0px;
         background: rgb(250, 250, 250);
         padding: 20px 0px;
         text-align: center;
         max-height: 300px;
         border: 2px dashed rgb(234, 236, 239);
         }
         .img-preview img{
         border:1px solid white;
         height:100%;
         max-width:250px;
         width:100%;
         }
         .footer-div-btn{
         display: flex;
         justify-content: space-between;
         align-items: center;
         width: 100%;
         margin-top:30px;
         }
         .bg-whitesmoke{
         background:whitesmoke;
         }
         .modal_li > span{
         font-size:15px;
         box-sizing:border-box;
         padding-right:10px;
         }
         .modal_li.done>span{
         color:green !important;
         }
         .modal_li.not-done>span{
         color:red !important;
         }
         #img_preview .upld-doc-main{
         flex-direction:column !important ;
         }
         #img_preview .upld-doc-main .upld-box-inner{
         max-height:200px;
         padding:20px 0px;
         text-align:center;
         height:auto !important;
         }
         #img_preview .upld-doc-main .upld-box-inner img{
         border:1px solid white;
         height:100%;
         max-width:150px;
         width:100%;
         }
         #selfie_div .demo{
         max-width: 120px;
         text-align: left;
         border: 4px solid whitesmoke;
         padding: 2px;
         box-shadow: 0px 0px 2px #9e9e9e;
         }
         /*--------------------only for need-kyc page---------------------------------*/
         .modal-counrty-code .niceCountryInputMenuDropdownContent a{
         height:auto !important;
         }
         .modal-counrty-code .niceCountryInputMenu{
         display:flex;
         justify-content: space-between;
         padding:0px 15px;
         text-align:left;
         }
         .legal_txt_box.country_box{
         overflow:unset;
         min-height:auto;
         }
         .legal_txt_box.country_box .legal_text{
         margin:0px;
         }
         .modal-counrty-code  .niceCountryInputSelector{
         position: relative;
         display: flex;
         flex-direction: column;
         }
         .modal-counrty-code .niceCountryInputMenuFilter{
         position: absolute;
         width: 100%;
         top: 50px;
         z-index:99999999;
         }
         .modal-counrty-code .niceCountryInputMenuDropdownContent{
         position: absolute;
         width: 100%;
         background: white;
         z-index: 999999;
         top: 98px;
         }
         .modal-counrty-code .niceCountryInputMenuFilter input{
         width: 100%;
         margin: 0;
         border-radius:0px;
         }
         .modal-counrty-code .niceCountryInputMenuCountryFlag{
         border-radius:0px;
         }
         .modal-counrty-code .niceCountryInputMenuDropdownContent a:hover {
         background-color: whitesmoke !important;
         color: #000000 !important;
         text-decoration: none;
         border-radius: 0;
         }
         .modal-counrty-code .niceCountryInputMenuDropdownContent a{
         cursor: pointer;
         }
         .modal-counrty-code .niceCountryInputMenuDropdownContent a:nth-child(even){
         background:#ffc1081c;
         }
         /*--------------------only for need-kyc page---------------------------------*/
         /*camera page*/
         /*.camra-width-example{*/
         /*    max-width:200px !important;*/
         /*    border:5px solid red !important;*/
         /*}*/
         #camera-front,#camera-back,#camera-selfie{
             width: 100% !important;
         height: 100% !important;

         }
         video  {
         width: 100% !important;
         height: 100% !important;
         object-fit: cover;
         /*background: rgba(0,0,0,0.2);*/
         -webkit-transform: scaleX(-1); /* mirror effect while using front cam */
         transform: scaleX(-1);         /* mirror effect while using front cam */
         }
         #canvas  {
         width: 192px;
         height: 135px;
         -webkit-transform: scaleX(-1); /* mirror effect while using front cam */
         transform: scaleX(-1);         /* mirror effect while using front cam */
         }
         .vid-main{box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: relative;
         width: 100%;
         height: 444px;
         overflow: hidden;
         left: 0px;
         }
         .cam-overlay {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: absolute;
         top: 0px;
         left: 0px;
         width: 100%;
         height: 100%;
         BACKGROUND:#42424226;
         }
         .cam-frame {
         box-sizing: border-box;
         margin: 0px auto;
         min-width: 0px;
         position: absolute;
         top: 28px;
         left: 0;
         text-align: center;
         width: 100%;
         height: 100%;
         }
         .cam-text {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: absolute;
         top: 356px;
         left: 0px;
         width: 100%;
         color: rgb(255, 255, 255);
         text-align: center;
         }
         .cam-headong {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 500;
         font-size: 20px;
         line-height: 28px;
         }
         .cam-headong2 {
         box-sizing: border-box;
         margin: 8px 0px 0px;
         min-width: 0px;
         font-weight: 400;
         font-size: 16px;
         line-height: 24px;
         }
         @media screen and (min-width: 767px)
         {
         .cam-headong2 {
         margin-top: 20px;
         }}
         @media screen and (max-width: 690px)
         {
         .frame-bg{
         height: 70% !important;
         width: 95% !important;
         }
         .close-mob{
         display:none !important;
         }
         }
         .frame-bg{
         height: 70%;
         width: 80%;
         }
         .form-control{
         height: calc(3.2rem + 2px);
         line-height: 1.25;
         }

         .panClass.form-control{
         height: 0px !important;
         line-height: 1.50 !important;
         }
         .disable_div{
        /* background: whitesmoke; */
        background: #fff;
         padding: 10px 20px;
         position: relative;
         justify-content: start;
         align-items: center;
         box-sizing: border-box;
         cursor: not-allowed;
         border-radius: .25rem;}
         .img{
         width: 30px;
         height: 30px;
         position: relative;
         margin: 0px 10px;
         }
         .img .flag{
         box-sizing: border-box;
         margin: 0px 8px 0px 0px;
         min-width: 0px;
         max-width: 100%;
         border-radius: 50%;
         flex-shrink: 0;
         width: 100%;
         height: 100%;
         }
         .disable_div  .text{
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         position: relative;
         display: flex;
         font-weight: 500;
         font-size: 20px;
         line-height: 24px;
         -webkit-box-pack: center;
         justify-content: center;}
         .disable_div  .iconbox{
         right:20px;
         position:absolute;
         }
         .input-group-text{
         height: 100%;
         align-items: center;
         }


         .error_border{border:1px solid red!important;border-radius: 0.25rem;}
         .btn-back{cursor: pointer;}
         .alert{
            color: white!important;
            background-color: red!important;
            padding: 5px!important;
            width: 100%!important;
            border-radius: 0px!important;
            text-align:left;
        }

        img.css-img-icon{
            width:100%;
            height:100%;
        }
        img.css-icon-1rem{
            width:1rem;
            height:1rem;
            margin-right:5px;
        }
        .close-img
        {
            background: rgb(234 236 239) !important;
    position: absolute;
    top: -10px;
    right: -6px;
    font-size: 10px;
    color: black;
    padding: 2px 5px;
    border-radius: 50%

        }

    .document_type_inner_right {
            width:1rem;
            height:1rem;
            margin-right:5px;
        }

        #img_preview_front, #img_preview_back{
         width:100%;
         padding:5px 0px;
         text-align:center;
        }






       /*---------------------28-11-22------------------------------  */

         @media screen and (max-width: 370px) {
             .select_verification_type .document_type_inner{
                     flex-direction: column;
                     align-items: self-start;
             }
             .select_verification_type ._title{
                 margin:0px;
                 text-align:left;
                  font-size: calc(1vw + 1vh + .5vmin);
             }
             .select_verification_type ._subtitle_box{
                 margin-left:0px;
             }
         }



      /*-------------------only for this page ----------------------------------------*/
      .coin-swap-from.height-css{
          height:40px !important;
      }
    .lf-select-coin-to-active-div.height-css{
          height:40px;
      }
      .wm-dropdown-div-open{
          width:100% !important;
      }

      .lf-select_coin-to .wm-dropdown-div{
          box-shadow:unset !important;
          border:5px solid #f8f9f9 !important;
      }
      .coin-swap-from.open .lf-select-coin-to-icn{
          transform:rotate(180deg);
          transition: ease .5s;
      }
       /*-------------------only for this page ----------------------------------------*/
    </style>
   </head>
   <body class="bg-white">
      @include('template.custom_header')
      <?php
         function getClientIP(){
           if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
             $ip = $_SERVER['HTTP_CLIENT_IP'];
           } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           } else {
             $ip = $_SERVER['REMOTE_ADDR'];
           }
           return $ip;
         }

         $ipaddress = getClientIP();
         function ip_details($ip) {
           $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
           $details = json_decode($json, true);
           return $details;
         }
         $details = ip_details($ipaddress);
         $country_code=$details['country'];
        // print_r($country_code);
      //   $url = 'http://country.io/names.json';
       //  $json = file_get_contents($url);
       //  $jo = json_decode($json);
         // print_r($jo);
         ?>
      <main id="main" >
         <section class="inner-page register">
            <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">
                        <h4 class="form-heading mb-4">Account Created</h4>
                    </div>
                </div>
               <div class="row row align-items-center justify-content-center">
                   <div class="col-lg-5 col-md-6 col-sm-6  text-center order-md-2">
                     <div class="login_scan">
                        <div class="qr_code shadow-none">
                           <img src="{{ url('assets/img/account-created-5.png') }}" class="img-responsive" style="width: 65%;">
                        </div>
                        <div class="mob_login">
                           <h2>You're almost there!</h2>
                           <p>Next, complete identity verification for your account.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-6  order-md-1">

                     <p class="mt-2 mb-4">Please proceed to complete identity verification.</p>
                     <div class="verification-steps">
                        <div class="step-box">
                           <div class="step-box-icon">
                            <img src="{{ asset('img/auth-icons/create-account.svg') }}" class="css-img-icon" alt="wealthmark" />
                           </div>
                           <div class="step-box-content">
                              <div  class="step-box-title">Create Account</div>
                              <div  class="step-box-subtitle">Enter your account details.</div>
                           </div>
                        </div>
                        <div class="step-box">
                           <div class="step-box-icon">
                               <img src="{{ asset('img/auth-icons/verify-identity.svg') }}" class="css-img-icon" alt="wealthmark" />
                           </div>
                           <div class="step-box-content">
                              <div  class="step-box-title">Verify Identity</div>
                              <div  class="step-box-subtitle">Verify your identity to protect your account.</div>
                           </div>
                        </div>
                        <div class="step-box">
                           <div class="step-box-icon">
                              <img src="{{ asset('img/auth-icons/unlock.svg') }}" class="css-img-icon" alt="wealthmark" />
                           </div>
                           <div class="step-box-content">
                              <div  class="step-box-title">Unlock Prize</div>
                              <div  class="step-box-subtitle">Get your prize and start trading.</div>
                           </div>
                        </div>
                     </div>
                     <div class="form-button mb-3">
                        <input type="button" id="Verify_Now" class="btn-yellow w-100 text-center border-0 text-decoration-none fw-bold modal-trigger text-dark" value="Verify Now" data-modal="Verification_process">
                     </div>
                  </div>

               </div>
            </div>
         </section>
      </main>

     <div class="modal custom_modal" id="Verification_process">
         <div class="modal-sandbox"></div>
         <div class="modal-box" style="max-width:550px;">
            <div id="select_country" style="display:block;">
               <div class="modal-header">

                  <div class="modal-icons">
                     <span class="btn-back" id="back_start">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                  <div class="modal_heading">Select Country of Residence </div>
               </div>
               <div class="modal-body">
                  <!--<div class="legal_txt_box country_box">-->
                   <div class="legal_txt_box ">

                     <div class="inner">
                        <div class="legal_text">Please ensure your country of residence matches your valid ID. Your privileges could change based on the selection.</div>
                     </div>

                     <!--<div class="modal-counrty-code mb-3">-->

                     <!--   <div class="niceCountryInputSelector" data-selectedcountry="{{ $country_code }}" data-showspecial="false" data-onchangecallback="onChangeCallback" data-showflags="true" data-i18nall="All selected" data-i18nnofilter="No selection" data-i18nfilter="no Filter"></div>-->
                     <!--</div>-->

                    <div class="lf-select_coin-to" id="earn-search-coin-filter">
                      <div class="coin-swap-from height-css m-0">
                        <input type="text" value="{{ $country_code }}" class="lf-select-coin-to-input">
                        <div class="wm-input-suffix ">
                          <div class="lf-select-coin-to-drpd">
                            <!--<svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">-->
                            <!--  <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>-->
                            <!--</svg>-->
                            <i class="bi bi-caret-down-fill"></i>
                          </div>
                        </div>
                    </div>

                    <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div height-css">
                        <div class="wm-dropdown-optn-item-div">
                            <img id="select_coin_img" class="wm-dropdown-optn-item-img" src="{{ asset('img/country-flag/'.$country_code.'.png') }}">
                            <div id="select_coin_text" class="wm-dropdown-optn-item-txt">
                                @foreach($country as $eachCountry)
                                        @if( $eachCountry->ISO2code == $country_code)
                                            @php
                                                $contr_id = $eachCountry->id;
                                            @endphp

                                                {{ $contrName = $eachCountry->name }}

                                        @endif
                                @endforeach
                            </div>
                         </div>

                    </div>

                   <div class="wm-dropdown-div wm-dropdown-div-open" style="display: none;">
                      <div class="px-3 pt-2">
                        <div class=" wm-dropdown-srch-div">
                          <div class="wm-input-prefix ">
                            <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                            </svg>
                          </div>
                          <input type="text" class="wm-dropdown-search-input" value="">
                          <div class="wm-input-suffix ">
                            <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                           @foreach($country as $eachCountry)
                        <li role="option" id="{{ $eachCountry->ISO2code }}" title="{{ $eachCountry->ISO2code }}" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                          <div class="wm-dropdown-optn-item-inner">

                                <div class="wm-dropdown-optn-item-div">
                                  <img class="wm-dropdown-optn-item-img" src="{{ asset('img/country-flag/'.$eachCountry->ISO2code.'.png') }}">

                                  <div class="wm-dropdown-optn-item-txt">{{ $eachCountry->name }}</div>

                            </div>
                          </div>
                        </li>
                        @endforeach

               </ul>

                </div>
                </div>


                     <div class="inner gh">
                        <div class="heading">Verification process</div>
                        <div class="content-box">
                           <img src="{{ asset('img/auth-icons/personal-info.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <span class="content-box-text">Personal information</span>
                        </div>
                        <div class="content-box">
                           <img src="{{ asset('img/auth-icons/govt-issued.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <span class="content-box-text"> Government-issued ID</span>
                        </div>
                        <div class="content-box">
                           <img src="{{ asset('img/auth-icons/facial-reco.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <span class="content-box-text"> Facial recognition</span>
                        </div>
                        <div class="content-box">
                            <img src="{{ asset('img/auth-icons/review-time.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <span class="content-box-text"> Review time: 15 days</span>
                        </div>
                     </div>
                     <div class="inner">
                        <div class="heading">Guidance</div>
                        <div class="content-box">
                            <img src="{{ asset('img/auth-icons/verify-identity.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <a href="#">  <span class="content-box-text"> How to verify my identity</span> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="modal_btn_theme w-100 btn-select-country">Continue</button>
               </div>
            </div>
            <div id="Personal_Information" style="display:none">
               <div class="step1">
                  <div class="modal-header">
                     <div class="modal-icons">
                        <span class="btn-back" id="back_first">
                        <i class="bi bi-arrow-left"></i>
                        </span>
                        <span class="close-modal">
                        <i class="bi bi-x"></i>
                        </span>
                     </div>
                     <div class="modal_heading">Personal Information </div>
                     <p>
                        <b>Identity Information </b>
                     </p>
                  </div>
                  <div class="modal-body">
                     <div class="country_box">
                        <div class="disable_div d-flex form-control">
                           <div class="img">
                               @if( Auth::user()->country != null)
                                <img src="{{asset('img/country-flag/'.Auth::user()->country_flag) }}" class="flag u">
                              @endif

                              @if( Auth::user()->country === null)
                                <img src="{{asset('img/country-flag/'.$country_code.'.png') }}" class="flag p" {{ $country_code }}>
                              @endif
                           </div>
                           <div class="text">
                             <span>
                             @if( Auth::user()->country != null) {{ Auth::user()->country  }}    @endif
                             @if( Auth::user()->country == null) {{ $contrName   }}    @endif
                             </span>
                           </div>
                           <div class="iconbox">
                              <i class="bi bi-caret-down-fill"></i>
                           </div>
                        </div>
                        <input type="hidden" name="country_name" value="{{ (Auth::user()->country != null) ? Auth::user()->country :  $contrName }}">
                        <input type="hidden" name="countryyId" value="{{ $contr_id }}">
                        <input type="hidden" name="country_ISO2code" value="{{ $country_code }} ">

                     </div>
                     <div class="form-floating my-3 text-start">
                        <input type="text" class="form-control" name="first_name" autocomplete="off" id="first_name" placeholder="Enter your Full name" value="{{ (Auth::user()->first_name != null) ? Auth::user()->first_name : '' }}">
                        <label for="floatingInput">Full Name</label>
                       <span class="error" id="first_name_err"></span>
                     </div>
                     <!--<input type="text" name="first_name" id="first_name" placeholder="Enter your Full name" value="{{ (Auth::user()->first_name != null) ? Auth::user()->first_name : '' }}">-->
                     <!--<div class="form-floating my-3 text-start">-->
                     <!--   <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter your middle name">-->
                     <!--   <label for="floatingInput">Middle Name</label>-->
                     <!--   <span class="error" id="middle_name_err"></span>-->
                     <!--</div>-->
                     <!--<div class="form-floating my-3 text-start">-->
                     <!--   <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your last name">-->
                     <!--   <label for="floatingInput">Last Name</label>-->
                     <!--   <span class="error" id="last_name_err"></span>-->
                     <!--</div>-->

                     <div class="form-group text-start">
                        <!--<label class="text-start d-block my-2">Date of Birth</label>-->
                        <div class="input-group date" id="datepicker">
                            <?php use Carbon\Carbon; ?>
                           <input type="text" class="form-control bg-transparent" name="dob" id="date"  placeholder="Enter your DOB" readonly autocomplete="off" />
                           <!--<span class="input-group-append">-->
                           <!--<span class="input-group-text bg-light">-->
                           <!--<i class="bi bi-calendar-fill"></i>-->
                           <!--</span>-->
                           <!--</span>-->
                        </div>
                        <span class="error" id="dob_err"></span>
                     </div>

                      <div class="form-floating mb-2 text-start mt-3">
                        <input type="text" class="form-control" placeholder="10 Digit" maxlength="10" name='pan_card' id="pan_card" oninput="handleInput(event)" required>
                        <label for="floatingInput">PAN Card Number</label>
                         <div class="error" id="pan_card_res"></div>
                        <span class="error" id="pan_card_err"></span>



                     </div>



                      <div class="form-floating mb-4 text-start">
                      <form id="pancard_img">
                      <!--     <label for="floatingInput">Upload PAN Card</label>-->
                      <!--<input type="file" class="form-control" placeholder="Upload pan card" name='pan_card_img' id="pan_card_img" accept="image/jpeg, image/png" required>-->



                              <label for="pan_card_img" class="form-label">Upload PAN Card</label>
                              <!--<input class="panClass form-control form-control-sm" type="file" data-max-size="100000" placeholder="Upload pan card" name='pan_card_img' id="pan_card_img" accept="image/jpeg, image/png" required onchange="loadFile(event)">-->
                               <input class="panClass form-control form-control-lg" type="file" placeholder="Upload pan card" name='pan_card_img' id="pan_card_img" accept="image/jpeg, image/png" required onchange="loadFile(event)">
                              <span class="error" id="pan_card_img_err"></span>

                            <!-- file upload bar -->
                            <div style="display:none;   margin: 10px;">
                            <img id="panPreview"  src="" width="50px" height="30px" style="float: right"/></br>
                            <span style="margin-top: 5px;" class="UploadingImgstatus" id="UploadingImgstatus"></span>
                            </div>
                          <!-- end file upload bar -->
                      </form>


                     </div>


                     <div class="error" id="pan_card_res1"></div>
                     <span class="error" id="pan_card_err1"></span>
                     <div class=" rename_username hide">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" class="me-2" name='rename_user' value="" id="rename_user" oninput="handleInput(event)" >
                            <label for="rename_user">Update name as per on pan card </label>
                        </div>
                        <div class="error" id="rename_user"></div>

                     </div>
                      <!--<input type="text" name="birthday" class="form-control"/>-->




                  </div>
                  <!--==============modal body clos here ============-->
                  <div class="modal-footer">
                     <button class="modal_btn_theme w-100 btn-p-info1 loadingPersonal" id="personal_step1">Continue</button>
                  </div>
               </div>
               <!--=============Personal Information  step-1  end here ==============-->
               <div class="step2" style="display:none">
                  <div class="modal-header">
                     <div class="modal-icons">
                        <span class="btn-back" id="back_third">
                        <i class="bi bi-arrow-left"></i>
                        </span>
                        <span class="close-modal">
                        <i class="bi bi-x"></i>
                        </span>
                     </div>
                     <div class="modal_heading">Personal Information </div>

                     <p>
                        <b>Identity Information </b>
                     </p>
                  </div>
                  <div class="modal-body">
                     <!--<div class="form-floating mb-4 text-start">-->
                        <!--<input type="text" class="form-control" placeholder="Residential Address">-->
                     <!--   <textarea class="form-control" placeholder="Enter residential address" name="residential_address" id="residential_address"></textarea>-->
                     <!--   <label for="floatingInput">Residential Address</label>-->
                     <!--   <span class="error" id="residential_address_err"></span>-->
                     <!--</div>-->
                     <!--<div class="row">-->
                     <!--   <div class="col-sm-6">-->
                     <!--      <div class="form-floating mb-4 text-start">-->
                     <!--         <input type="text" class="form-control" placeholder="Enter pin code" name="pin_code" id="pin_code" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');">-->
                     <!--         <label for="floatingInput">Pin</label>-->
                     <!--         <span class="error" id="pin_code_err"></span>-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--   <div class="col-sm-6">-->
                     <!--      <div class="form-floating mb-4 text-start">-->
                     <!--         <input type="text" class="form-control" placeholder="Enter city" name='city' id="city">-->
                     <!--         <label for="floatingInput">City</label>-->
                     <!--         <span class="error" id="city_err"></span>-->
                     <!--      </div>-->
                     <!--   </div>-->
                     <!--</div>-->
                     @csrf

                  </div>
                  <!--==============modal body clos here ============-->
                  <div class="modal-footer">
                     <button class="modal_btn_theme w-100 btn-p-info2 loadingPersonal">Final</button>
                  </div>
               </div>
            </div>
            <!--=================================Identity_Verification=====================================-->
            <div id="Identity_Verification" style="display:none">
               <div class="Identity_Verification_step1" style="display:block">
                  <!--///////////////////////////////////////// remove this style according to your convenience-->
                  <div class="modal-header">
                     <!--<div class="modal-icons">-->
                     <!--   <span class="btn-back" id="back_fourth">-->
                     <!--   <i class="bi bi-arrow-left"></i>-->
                     <!--   </span>-->
                     <!--   <span>&nbsp;</span>-->
                     <!--   <span class="close-modal">-->
                     <!--   <i class="bi bi-x"></i>-->
                     <!--   </span>-->
                     <!--</div>-->
                       <!--<button class=" btn bg-whitesmoke" onClick="backToPersonalInfo()"> back </button> -->
                     @if(Auth::user()->digilocker_verification_responce == '2')

                     <!--<span style="color:#eb3941; text-align: justify">AADHAAR verifiction failed by Digilockek Details.Please check your DOB, Name And Aadhar No. and verify Again! </span>-->
                      <span style="color:#eb3941; text-align: justify">AADHAAR verifiction failed by Digilockek.Please upload you Aadhaar card Now! </span>

                     @endif
                     <div class="modal_heading">Identity Verification </div>
                  </div>
                  <div class="modal-body">
                     <div class="select_verification_type scrollbar-style">
                        <div class="outer">
                           <div class="form-group mb-4">
                              <label class="text-start d-block my-2">Select your document issuing country/region</label>

                               <div class="country_box">
                                    <div class="disable_div d-flex form-control">
                                       <div class="img">
                                           @if(Auth::user()->country != null)
                                          <img src="{{asset('img/country-flag/'.Auth::user()->country_flag) }}" class="flag">

                                            @endif
                                             @if( Auth::user()->country == null)
                                             <img src="{{ asset('img/country-flag/'.$country_code.'.png') }}" class="flag">
                                              @endif
                                       </div>
                                       <div class="text">
                                          <span>
                                          @if( Auth::user()->country != null) {{ Auth::user()->country  }}    @endif
                                            @if( Auth::user()->country == null) {{ $contrName   }}    @endif

                                          </span>
                                       </div>
                                       <div class="iconbox">
                                          <i class="bi bi-caret-down-fill"></i>
                                       </div>
                                    </div>


                                 </div>
                           </div>
                           <div class="text-start mb-2 fw-bolder">Use a valid government-issued document</div>
                           <input type="hidden" value="" name="id_card_data" id="id_card_data">
                           <div class="text-start text-secondary mb-2 fw-light">Only the following documents listed below will be accepted, all other documents will be rejected.</div>
                            <div class="col-md-12 alert alert-danger" id="id_card_type_err" style="display:none;"></div>

                             <!--<div class="inner" style="pointer-events:none;">-->
                              @if(Auth::user()->digilocker_verification_responce == '2')
                            <div class="inner" >
                              <div class="document_type">
                                 <div class="document_type_inner">
                                    <img src="{{ asset('img/auth-icons/adhar.svg') }}" class="css-icon-1rem" title="wealthmark" />
                                    <div class="_content_box">
                                       <div class="_title" id="id_card_type">ID Card (Aadhaar Image Upload)</div>
                                       <div class="_subtitle_box">
                                          <div class="_subtitle">Recommended</div>
                                       </div>
                                    </div>
                                 </div>
                                 <img src="{{ asset('img/auth-icons/check-mark-grey.svg') }}" class="document_type_inner_right" alt="wealthmark" />
                              </div>
                           </div>
                           @endif
                           <!--<div class="inner" style="pointer-events:none;">-->
                             @if( Auth::user()->digilocker_verification_responce != 2 )
                            <div class="inner" >
                                 <div class="document_type">
                                     <div class="document_type_inner">
                                        <img src="{{ asset('img/auth-icons/digilocker.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                        <div class="_content_box">
                                           <div class="_title" id="id_card_type">ID Card (Aadhaar Digilocker)</div>
                                           <div class="_subtitle_box">
                                              <div class="_subtitle">Recommended</div>
                                           </div>
                                        </div>
                                     </div>
                                   <img src="{{ asset('img/auth-icons/check-mark-grey.svg') }}" class="document_type_inner_right" title="wealthmark" />
                                  </div>
                            </div>
                          @endif
                           <div class="inner" style="pointer-events:none;">

                              <div class="document_type">
                                 <div class="document_type_inner">
                                     <img src="{{ asset('img/auth-icons/driving-license.svg') }}" class="css-icon-1rem" title="wealthmark" />
                                    <div class="_content_box">
                                       <div class="_title" id="id_card_type">Driver's License</div>
                                    </div>
                                 </div>
                                 <img src="{{ asset('img/auth-icons/check-mark-grey.svg') }}" class="document_type_inner_right" alt="wealthmark" />
                              </div>
                           </div>
                           <div class="inner" style="pointer-events:none;">

                              <div class="document_type">
                                 <div class="document_type_inner">
                                   <img src="{{ asset('img/auth-icons/passport.svg') }}" class="css-icon-1rem" title="wealthmark" />
                                    <div class="_content_box">
                                       <div class="_title" id="
                                       ">Passport</div>
                                    </div>
                                 </div>
                                 <img src="{{ asset('img/auth-icons/check-mark-grey.svg') }}" class="document_type_inner_right" alt="wealthmark" />
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
                  <!--==============modal body clos here ============-->
                  <div class="modal-footer">
                     <button class="modal_btn_theme w-100" id="btn_Identity1">Continue</button>
                  </div>
               </div>
               <!--=============Identity_Verification  step-1  end here ==============-->
               <div class="Identity_Verification_step2" style="display:none">
                  <!--///////////////////////////////////////// remove this style according to your convenience-->
                  <div class="modal-header">
                     <div class="modal-icons">
                        <span class="btn-back" id="back_fifth">
                        <i class="bi bi-arrow-left"></i>
                        </span>
                        <span class="close-modal">
                        <i class="bi bi-x"></i>
                        </span>
                     </div>
                     <div class="modal_heading">Identity Verification </div>
                  </div>
                  <div class="aadhar_card">

                     <div class="modal-body">

                        <div class="img-box mt-3 mb-5">
                           <img src="{{ asset('img/auth-icons/adhar.svg') }}" class="mx-auto w-50 d-block modal-card-img" />
                        </div>
                        <div class="">
                           <p class="modal-p">You are about to upload your ID card. Please ensure that:</p>
                           <ul class="modal_ul">
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">This is an original document, not a scan or copy</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">Place documents against a solid-colored background.</div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button class="modal_btn_theme w-100" id="aadhar_btn">continue</button>
                     </div>
                  </div>
                  <div class="Driving license" style="display:none">
                     <!--///////////////////////////////////////// remove this style according to your convenience-->
                     <div class="modal-body">
                        <div class="img-box mt-3 mb-5">
                           <img src="{{ asset('img/auth-icons/adhar.svg') }}" class="mx-auto d-block modal-card-img" />
                        </div>
                        <div class="">
                           <p class="modal-p">You are about to upload your driving license. Please ensure that:</p>
                           <ul class="modal_ul">
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">This is an original document, not a scan or copy</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                              </li>
                              <li class="modal_li">
                                 <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">Place documents against a solid-colored background.</div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button class="modal_btn_theme w-100" id="dl_btn">continue</button>
                     </div>
                  </div>
                  <div class="Passport" style="display:none">
                     <!--///////////////////////////////////////// remove this style according to your convenience-->
                     <div class="modal-body">
                        <div class="img-box mt-3 mb-5">
                           <img src="{{ asset('img/card_dummy.png') }}" class="mx-auto d-block modal-card-img" />
                        </div>
                        <div class="">
                           <p class="modal-p">You are about to upload your passport. Please ensure that:</p>
                           <ul class="modal_ul">
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                              </li>
                              <li class="modal_li">
                               <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">This is an original document, not a scan or copy</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                              </li>
                              <li class="modal_li">
                                <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                 <div class="modal_li_des">Place documents against a solid-colored background.</div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button class="modal_btn_theme w-100" id="passport_btn">continue</button>
                     </div>
                  </div>
               </div>
               <!--==============modal body clos here ============-->
            </div>
            <div id="upload_document" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_sixth">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                    <!--<div class="loading"></div>-->
                  <div class="modal_heading">Identity Verification </div>

               </div>
               <div class="modal-body">
                   <!--<div class="col-md-12 alert alert-danger" id="front_image_err" style="display:none;"></div>-->
                    <!--<div class="col-md-12 alert alert-danger" id="back_image_err" style="display:none;"></div>-->
                    <div class="col-md-12 alert alert-danger" id="id_card_err" style="display:none;"></div>
                    <!--<div class="col-md-12  alert-danger" id="id_card_num_err" style="display:none;"></div>-->

                  <div class="upld-doc">

                     <div class="upld-doc-heading">Upload your ID card</div>
                    <div class="col-md-12" >
                        <div class="form-floating my-3 text-start">
                         <input type="number" name="id_card_num" id="id_card_num" class="form-control id_card_num" value="" Placeholder="Enter Your Aadhaar number"  maxlength="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingInput">Enter Aadhaar Card Number</label>
                            <span class="error" id="id_card_num_err" ></span>
                        </div>
                    </div>

                    <div class="form-floating mb-4 text-start">
                        <textarea class="form-control" placeholder="Enter residential address" name="residential_address" id="residential_address"></textarea>
                        <label for="floatingInput">Residential Address</label>
                        <span class="error" id="residential_address_err"></span>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-floating mb-4 text-start">
                              <input type="text" class="form-control" placeholder="Enter pin code" name="pin_code" id="pin_code" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                              <label for="floatingInput">Pin</label>
                              <span class="error" id="pin_code_err"></span>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-floating mb-4 text-start">
                              <input type="text" class="form-control" placeholder="Enter city" name='city' id="city">
                              <label for="floatingInput">City</label>
                              <span class="error" id="city_err"></span>
                           </div>
                        </div>
                     </div>


                     <div class="upld-doc-main">
                        <div class="upld-box">
                           <div class="upld-doc-subtitle">Front side of ID Card</div>
                           <input type="hidden" name="front_image" class="image-tag">
                           <div class="upld-box-inner" id="front_image">


                                <div id="img_preview_front">   </div>
                               <div id="formed_img_preview_front">   </div>
                              <div class="photo-box1" id="btn_click_img_front">
                                 <div class="photo-box1-inner">
                                    <button type="button" class="upld-btn-doc" onclick="open_camera();">
                                       <img src="{{ asset('img/auth-icons/camera.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                       Take photo
                                    </button>
                                 </div>
                              </div>
                              <div class="close-img" id="img_preview_front_delete" style="display:none">X</div>
                           </div>
                           <span class="error" id="front_image_err" style="display:none;"></span>
                        </div>
                        <div class="divider"></div>
                        <div class="upld-box">
                           <div class="upld-doc-subtitle">Back side of ID Card</div>
                           <input type="hidden" name="back_image" class="image-tag1">

                           <div class="upld-box-inner"  id="back_image">

                              <div id="img_preview_back">        </div>
                              <div id="formed_img_preview_back">        </div>
                              <div class="photo-box1" id="btn_click_img_back">
                                 <div class="photo-box1-inner">
                                    <button type="button" class="upld-btn-doc btn-back-img" onclick="open_back_camera();">
                                       <img src="{{ asset('img/auth-icons/camera.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                       Take photo
                                    </button>
                                 </div>
                              </div>
                              <div class="close-img" id="img_preview_back_delete" style="display:none">X</div>
                           </div>
                            <span class="error" id="back_image_err" style="display:none;"></span>
                        </div>
                     </div>
                     <div class="modal-p mt-3">Ensure that the document meet all the standard below:</div>
                     <ul class="modal_ul">
                        <li class="modal_li">
                          <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <div class="modal_li_des">Readable, clear and well-lit</div>
                        </li>
                        <li class="modal_li">
                          <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <div class="modal_li_des">Not reflective, not blurry</div>
                        </li>
                        <li class="modal_li">
                           <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <div class="modal_li_des">No black and white images, no edited</div>
                        </li>
                        <li class="modal_li">
                           <img src="{{ asset('img/auth-icons/drop-bullet-yellow.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                           <div class="modal_li_des">Document is placed against a solid-colored background.</div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--==============modal body clos here ============-->
               @csrf
               <div class="modal-footer">
                  <button class="modal_btn_theme w-100" id="btn_Identity2">Continue</button>
               </div>
            </div>

            <!-- digilocker section -->
             <div id="digilockerSection" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_digilocker">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close_digilocker_model">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                    <!--<div class="loading"></div>-->
                  <div class="modal_heading">Verification By Digilocker </div>

               </div>
               <div class="modal-body">

                    <div class="col-md-12 alert alert-danger" id="digilocker_err" style="display:none;"></div>
                     <div class="upld-doc-heading">Digilocker Verification</div>
                   <!--   <div class="col-md-12" >-->
                   <!--    <div class="form-floating my-3 text-start">-->
                   <!--      <input type="number" name="id_card_num" id="id_card_num" class="form-control id_card_num" value="" Placeholder="Enter Your Aadhaar number"  maxlength="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">-->
                   <!--         <label for="floatingInput">Enter Aadhaar Card Number</label>-->
                   <!--         <span class="error" id="id_card_num_err" ></span>-->
                   <!--         </div>-->
                   <!--</div>-->
                   <div class="col-md-12" >
                       <div class="form-floating my-3 text-start">
                         <input type="number" name="digilocker_aadhaar_card_num" id="digilocker_aadhaar_card_num" class="form-control digilocker_aadhaar_card_num" value="" Placeholder="Enter Your Aadhaar number"  maxlength="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label for="floatingInput">Enter Aadhaar Card Number</label>
                            <span class="error" id="digilocker_aadhaar_card_num_err" ></span>
                            </div>
                   </div>



               </div>
               <!--==============modal body clos here ============-->
               @csrf
               <div class="modal-footer">
                  <button class="modal_btn_theme w-100" id="continue_digilocker">Continue</button>
               </div>
            </div>

              <!-- end digilocker section -->
            <div id="img_capture" class="img_capture_front" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_seventh">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                  <div class="modal_heading">Front side of ID Card </div>
               </div>
               <div class="modal-body" style="padding:0px">
                  <div class="vid-main">
                     <!--<video id="camera-stream"></video>-->

                     <div id="camera-front"></div>

                     <div class="cam-overlay">
                        <!--<svg width="564" height="444" viewBox="0 0 564 444" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform-origin: left top; transform: scale(1);">-->
                        <!--  <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M564 0H0V444H564V0ZM75 32C70.5817 32 67 35.5817 67 40V324C67 328.418 70.5817 332 75 332H489C493.418 332 497 328.418 497 324V40C497 35.5817 493.418 32 489 32H75Z" fill="black"></path>-->
                        <!--</svg>-->
                     </div>
                     <div class="cam-frame">
                        <svg class="frame-bg" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform-origin: center top; transform: scale(1);">
                           <path class="close-mob" d="M12 34V16C12 13.7909 13.7909 12 16 12H34" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M12 274V292C12 294.209 13.7909 296 16 296H34" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M426 34V16C426 13.7909 424.209 12 422 12H404" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M426 274V292C426 294.209 424.209 296 422 296H404" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <rect x="0" y="0" width="100%"  height="100%" rx="10" stroke="#FCD535" stroke-width="4" style="border:4px solid #FCD535;"></rect>
                        </svg>
                     </div>
                     <div class="cam-text">
                        <div class="cam-headong">Front side of ID Card</div>
                        <div class="cam-headong2">Place the front of ID Card in the frame</div>
                     </div>
                  </div>
                  <!--unhide it for display click image for preview image-->
                  <!--<div class="mt-3">-->
                  <!--  <canvas id="canvas" class="bg-light shadow border border-5 border-success">-->
                  <!--  </canvas>-->
                  <!--</div>-->
               </div>
               <!--==============modal body clos here ============-->
               <div class="modal-footer">
                  <div class="footer-div-btn">
                     <button id="capture-camera"  class="modal_btn_theme front_img_btn" onclick="take_front_snapshot();" style="margin:auto;">Take Photo</button>
                     <button  disabled id="flip-btn" class="btn btn-sm btn-warning" style="display:none">
                     Flip Camera
                     </button>
                  </div>
               </div>
            </div>

            <div id="img_captures" class="img_capture_back" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_seventh">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                  <div class="modal_heading">Back side of ID Card </div>
               </div>
               <div class="modal-body" style="padding:0px">
                  <div class="vid-main">
                     <!--<video id="camera-stream"></video>-->

                     <div id="camera-back"></div>

                     <div class="cam-overlay">
                        <!--<svg width="564" height="444" viewBox="0 0 564 444" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform-origin: left top; transform: scale(1);">-->
                        <!--  <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M564 0H0V444H564V0ZM75 32C70.5817 32 67 35.5817 67 40V324C67 328.418 70.5817 332 75 332H489C493.418 332 497 328.418 497 324V40C497 35.5817 493.418 32 489 32H75Z" fill="black"></path>-->
                        <!--</svg>-->
                     </div>
                     <div class="cam-frame">
                        <svg class="frame-bg" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform-origin: center top; transform: scale(1);">
                           <path class="close-mob" d="M12 34V16C12 13.7909 13.7909 12 16 12H34" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M12 274V292C12 294.209 13.7909 296 16 296H34" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M426 34V16C426 13.7909 424.209 12 422 12H404" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M426 274V292C426 294.209 424.209 296 422 296H404" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <rect x="0" y="0" width="100%"  height="100%" rx="10" stroke="#FCD535" stroke-width="4" style="border:4px solid #FCD535;"></rect>
                        </svg>
                     </div>
                     <div class="cam-text">
                        <div class="cam-headong">Front side of ID Card</div>
                        <div class="cam-headong2">Place the front of ID Card in the frame</div>
                     </div>
                  </div>
                  <!--unhide it for display click image for preview image-->
                  <!--<div class="mt-3">-->
                  <!--  <canvas id="canvas" class="bg-light shadow border border-5 border-success">-->
                  <!--  </canvas>-->
                  <!--</div>-->
               </div>
               <!--==============modal body clos here ============-->
               <div class="modal-footer">
                  <div class="footer-div-btn">
                     <button id="capture-camera-back"  class="modal_btn_theme back_img_btn" onclick="take_back_snapshot();" style="margin:auto;">Take Photo</button>
                     <button disabled id="flip-btn" class="btn btn-sm btn-warning" style="display:none">
                     Flip Camera
                     </button>
                  </div>
               </div>
            </div>

            <div id="img_validation" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_eighth">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                  <div class="modal_heading">Identity Verification </div>
               </div>
               <div class="modal-body">
                  <div class="img-preview">
                     <img src="{{ asset('img/HTB1Alaue8WD3KVjSZFsq6AqkpXaz.jpg') }}" class="" />
                  </div>
                  <div>
                     <p class="modal-p">You are about to upload your passport. Please ensure that:</p>
                     <ul class="modal_ul">
                        <li class="modal_li done">
                           <span> <i class="bi bi-check-circle-fill"></i> </span>
                           <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                        </li>
                        <li class="modal_li not-done">
                           <span>  <i class="bi bi-x-circle-fill"></i></span>
                           <div class="modal_li_des">This is an original document, not a scan or copy</div>
                        </li>
                        <li class="modal_li done" >
                           <span>  <i class="bi bi-check-circle-fill"></i></span>
                           <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                        </li>
                        <li class="modal_li not-done">
                           <span> <i class="bi bi-x-circle-fill"></i></span>
                           <div class="modal_li_des">Place documents against a solid-colored background.</div>
                        </li>
                        <li class="modal_li done">
                           <span>   <i class="bi bi-check-circle-fill"></i></span>
                           <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                        </li>
                        <li class="modal_li not-done">
                           <span>   <i class="bi bi-x-circle-fill"></i></span>
                           <div class="modal_li_des">Place documents against a solid-colored background.</div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--==============modal body clos here ============-->
               <div class="modal-footer">
                  <div class="footer-div-btn">
                     <button class="btn bg-whitesmoke">Retake</button>
                     <button class="modal_btn_theme">Photo is Ok</button>
                  </div>
               </div>
            </div>
            <div id="img_preview" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_ninth">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                  <div class="modal_heading">Identity Verification </div>
               </div>
               <div class="modal-body">
                  <div class="upld-doc-heading text-start">Upload your ID card</div>
                  <div class="upld-doc-main">
                     <div class="upld-box">
                        <div class="upld-doc-subtitle">Front side of ID Card</div>
                        <div class="upld-box-inner">
                           <img src="{{ asset('img/HTB1Alaue8WD3KVjSZFsq6AqkpXaz.jpg') }}" class="" />
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="upld-box">
                        <div class="upld-doc-subtitle">Back side of ID Card</div>
                        <div class="upld-box-inner">
                           <img src="{{ asset('img/HTB1Alaue8WD3KVjSZFsq6AqkpXaz.jpg') }}" class="" />
                        </div>
                     </div>
                  </div>
               </div>

               <!--==============modal body clos here ============-->
               <div class="modal-footer">
                  <div class="footer-div-btn">
                     <button class="btn bg-whitesmoke">Previous</button>
                     <button class="modal_btn_theme">Continue</button>
                  </div>
               </div>
            </div>
            <div id="selfie_div" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <div class="modal_heading">Take a Selfie </div>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>

               </div>
               <div class="modal-body">
                    <div class="upld-doc-main">
                     <div class="upld-box">
                            <ul class="modal_ul">
                                 <li class="modal_li not-done">
                                    <span> <i class="bi bi-check-circle-fill"></i> </span>
                                    <div class="modal_li_des text-danger ">
                                        Make sure your web camera is turned off on other Apps or Websites.
                                    </div>
                                 </li>
                                  <li class="modal_li not-done text-danger">
                                    <span> <i class="bi bi-check-circle-fill "></i> </span>
                                    <div class="modal_li_des">
                                        Make sure your web camera is allowed to open .
                                    </div>
                                 </li>

                            </ul>
                        <div class="upld-doc-subtitle">Selfie Image</div>
                        <div class="col-md-12 alert alert-danger" id="selfie_err" style="display:none;"></div>
                        <input type="hidden" name="selfie_image" class="image-tag2">
                        <div class="upld-box-inner" id="selfie_captured_image">
                            <div id="selfie_image_preview">

                               </div>
                            <div id="formed_img_preview_selfie">

                            </div>
                           <div class="photo-box1" id="btn_selfie_image">
                              <div class="photo-box1-inner">
                                 <button type="button" class="upld-btn-doc" id="take_selfie" onclick="open_selfie_camera();" >
                                   <img src="{{ asset('img/auth-icons/camera.svg') }}" class="css-icon-1rem" alt="wealthmark" />
                                    Take photo
                                 </button>
                              </div>
                           </div>
                            <div class="close-img" id="selfie_image_delete" style="display:none">X</div>
                        </div>
                     </div>
                  </div>
                  <!--<div class="demo-img mb-4 text-start">-->
                  <!--   <p class="mb-4"> Example</p>-->
                  <!--   <img id="selfie_img_after_click" src="{{ asset('img/HTB1Alaue8WD3KVjSZFsq6AqkpXaz.jpg') }}" class="demo" />-->
                  <!--</div>-->
                  <ul class="modal_ul">
                     <li class="modal_li done">
                        <span> <i class="bi bi-check-circle-fill"></i> </span>
                        <div class="modal_li_des">Take a selfie of yourshel with a neutral expression</div>
                     </li>
                     <li class="modal_li done">
                        <span> <i class="bi bi-check-circle-fill"></i> </span>
                        <div class="modal_li_des">Make sure your whole face is visible centred, and your eyes are open </div>
                     </li>
                     <li class="modal_li not-done" >
                        <span> <i class="bi bi-x-circle-fill"></i></span>
                        <div class="modal_li_des">Do not crop your ID or use screenshot of your ID</div>
                     </li>
                     <li class="modal_li not-done">
                        <span> <i class="bi bi-x-circle-fill"></i></span>
                        <div class="modal_li_des">Do not hide or alter parts of your face (no hats / beauty images/filters/headgear)</div>
                     </li>
                  </ul>

               </div>
               <!--==============modal body clos here ============-->
               @csrf
               <div class="modal-footer">
                  <div class="footer-div-btn">
                     <button class="btn bg-whitesmoke">Previous</button>
                     <button class="modal_btn_theme" id="validate_selfie_image">Continue</button>
                  </div>
               </div>
            </div>

            <div id="selfie_img_capture" class="img_capture_selfie" style="display:none">
               <div class="modal-header">
                  <div class="modal-icons">
                     <span class="btn-back" id="back_seventh">
                     <i class="bi bi-arrow-left"></i>
                     </span>
                     <span class="close-modal">
                     <i class="bi bi-x"></i>
                     </span>
                  </div>
                  <div class="modal_heading">Take Selfie Image</div>
               </div>
               <div class="modal-body" style="padding:0px">
                  <div class="vid-main">
                     <!--<video id="camera-stream"></video>-->
                     <div id="camera-selfie"></div>
                     <div class="cam-overlay">
                        <!--<svg width="564" height="444" viewBox="0 0 564 444" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform-origin: left top; transform: scale(1);">-->
                        <!--  <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M564 0H0V444H564V0ZM75 32C70.5817 32 67 35.5817 67 40V324C67 328.418 70.5817 332 75 332H489C493.418 332 497 328.418 497 324V40C497 35.5817 493.418 32 489 32H75Z" fill="black"></path>-->
                        <!--</svg>-->
                     </div>
                     <div class="cam-frame">
                        <svg class="frame-bg" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform-origin: center top; transform: scale(1);">
                           <path class="close-mob" d="M12 34V16C12 13.7909 13.7909 12 16 12H34" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M12 274V292C12 294.209 13.7909 296 16 296H34" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M426 34V16C426 13.7909 424.209 12 422 12H404" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <path class="close-mob" d="M426 274V292C426 294.209 424.209 296 422 296H404" stroke="#1E2329" stroke-width="2" stroke-linecap="round"></path>
                           <rect x="0" y="0" width="100%"  height="100%" rx="10" stroke="#FCD535" stroke-width="4" style="border:4px solid #FCD535;"></rect>
                        </svg>
                     </div>
                     <div class="cam-text">
                        <div class="cam-headong">Selfie</div>
                        <div class="cam-headong2">Place the selfie in the frame</div>
                     </div>
                  </div>
                  <!--unhide it for display click image for preview image-->
                  <!--<div class="mt-3">-->
                  <!--  <canvas id="canvas" class="bg-light shadow border border-5 border-success">-->
                  <!--  </canvas>-->
                  <!--</div>-->
               </div>
               <!--==============modal body clos here ============-->
               <div class="modal-footer">
                  <div class="footer-div-btn">
                     <button id="capture-selfie-camera"  class="modal_btn_theme front_img_btn" onclick="take_selfie_snapshot();" style="margin:auto;">Take Selfie</button>
                     <button  disabled id="flip-btn" class="btn btn-sm btn-warning" style="display:none">
                     Flip Camera
                     </button>
                  </div>
               </div>
            </div>
            <!--==============================main modal div==============-->
         </div>
      </div>
      @include('template.copy_right_footer')
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>
    <div class="rename_user">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="">
                    <div class="wm-custom-modal-header">
                        <span>Security verification </span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3">
                    <div class="container-fluid p-0 m-0">

                        <div id="Notification">
                            <div class="custom-modal-bck-bg">
                                <div class="wm-custom-modal-diolog max-width-450px">

                                    <div class="wm-custom-modal-body px-3">
                                        <div class="container-fluid p-0 m-0">

                                            <div class="row">
                                                <div class="col-md-12 mt-3 p-2">
                                                    <div class="bg-light-blue p-2 text-center">
                                                   <h4 class="m-0 text-black">Notice</h4>
                                                   </div>
                                                 <div class="px-3 py-2">
                                                    <ul class="Notice-ul">
                                                        <li>
                                                            <i class="bi bi-forward-fill me-1"></i>
                                                            <span>
                                                                Are you sure update name as per on pan card.
                                                            </span>
                                                        </li>
                                                    </ul>
                                                 </div>

                                                    <div class="fs-14 fw-normal text-black d-flex align-items-center px-3 py-3">
                                                        <input type="checkbox" id="agree" class="me-2">
                                                        <label for="agree" class="fs-12">
                                                            By checking this box I confirm that I have read and agree to be bound by the Agreement.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">



                                                    <div class="d-block col-12 mt-1 w-100 text-center mb-3">
                                                        <button type="submit" id="agree_button" class="btn-yellow d-block w-100 border-0 desabled">Agree and continue</button>
                                                    </div>

                                                </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>








    <script>
       function backToPersonalInfo(){
             $('#Identity_Verification').css({'display':'none'});
             $('#Personal_Information').css({'display':'block'});
        };
    </script>

        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('assets/js/niceCountryInput.js') }}"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/js/need-kyc.js') }}"></script>
      <!----------------------------------- add for country dropdown box---------------------------------->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!------------------------ add for datepicker---------------------------->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(function() {
          $('input[name="dob"]').daterangepicker({
              autoUpdateInput: false,
              singleDatePicker: true,
              showDropdowns: true,
              autoApply: true,
              opens:'center',
              drops:'up',
              minYear: 1901,
              maxYear: parseInt(moment().format('YYYY')-18),
              locale: {
                  cancelLabel: 'Clear'
              }
          });

          $('input[name="dob"]').on('apply.daterangepicker', function(ev, picker) {
              $(this).val(picker.startDate.format('DD-MM-YYYY'));
          });

          $('input[name="dob"]').on('cancel.daterangepicker', function(ev, picker) {
              $(this).val('');
          });
        });
    </script>


      <script>
        function check_pan(inputvalues) {
            var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            if(!regex.test(inputvalues)){
                $('#pan_card_err').html("Invalid pan number");
                $('#pan_card').addClass('error_border');
                return true;
            }else{
                $('#pan_card_err').html("");
                $('#pan_card').removeClass('error_border');
                return false;
            }

        }

         $(function(){
            $('#datepicker').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true
            });



         });

         $(".modal-trigger").click(function(e){
         e.preventDefault();
         dataModal = $(this).attr("data-modal");
         $("#" + dataModal).css({"display":"block"});

         });

         $(".close-modal, .modal-sandbox").click(function(){
         $(".modal").css({"display":"none"});
         });

         // --------------code for verification steps-------------------

         $(".btn-select-country").click(function(){
         $("#Personal_Information").css({"display":"block"});
         $("#select_country").css({"display":"none"});
         });

         $(".btn-p-info1").click(function(){
                var f_name=$("input[name=first_name]").val();
                var rename_f_name=$("input[name=rename_user]").val();
                var pan_card=$("input[name=pan_card]").val();
                var dob=$("input[name=dob]").val();
                var year = Number(dob.substr(6, 4));
                var month = Number(dob.substr(3, 2));
                var day = Number(dob.substr(0, 2));
                var today = new Date();
                var age = today.getFullYear() - year;

                const token = $("input[name=_token]").val();
                var country_name = $("input[name=country_name]").val();
                var country_ISO2code = $("input[name=country_ISO2code]").val();
                var country_ID = $("input[name=countryyId]").val();

                var pan_card_img = $("#pan_card_img")[0].files[0];
                var blobPanImg = $("#panPreview").attr('src');

                var formData = new FormData( $('#pancard_img')[0]);
                formData.append('country_name' , country_name);
                formData.append('country_ISO2code' , country_ISO2code);
                formData.append('country_ID' , country_ID);
                formData.append('first_name' , f_name);
                formData.append('dob' , dob);
                formData.append('pan_card' , pan_card);
                formData.append('_token' , token);
                formData.append('blobPanImg', blobPanImg );


                if(rename_f_name.length > 0  ){
                    // console.log(rename_f_name);
                    //  console.log(f_name);
                     if($("input[name=rename_user]:checked").length > 0){
                       f_name = rename_f_name;
                     }else{
                        triggerAlert('something went wrong !', 'error');
                     }
                }

                if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
                  age--;
                }

                var dob=$("input[name=dob]").val();
                if (!f_name) {
                    $('#first_name_err').html("Enter first name");
                    $('#first_name').addClass('error_border');

                    setTimeout(function(){
                        $('#first_name_err').html("");
                        $('#first_name').removeClass('error_border');
                    }, 4000);
                }

                else if (!dob) {
                    $('#dob_err').html("Enter DOB as on Pancard");
                    $('#datepicker').addClass('error_border');

                     setTimeout(function(){
                        $('#dob_err').html("");
                        $('#datepicker').removeClass('error_border');
                    }, 4000);
                }

                else if (17 >= age)
                    {
                        $('#dob_err').html("You are not elegible because your age under 18 years.");
                        $('#datepicker').addClass('error_border');
                        setTimeout(function(){
                            $('#dob_err').html("");
                            $('#datepicker').removeClass('error_border');
                        }, 4000);
                    }
                else if (!pan_card) {
                    $('#pan_card_err').html("Enter pan card");
                    $('#pan_card').addClass('error_border');

                    setTimeout(function(){
                        $('#pan_card_err').html("");
                        $('#pan_card').removeClass('error_border');
                    }, 4000);
                }

                else if (!pan_card_img) {
                    $('#pan_card_img_err').html("Upload pan card");
                    $('#pan_card_img').addClass('error_border');

                    setTimeout(function(){
                        $('#pan_card_img_err').html("");
                        $('#pan_card_img').removeClass('error_border');
                    }, 4000);
                }else if (check_pan(pan_card)) {
                  // check_pan(pan_card);
                }
                else{

                    $.ajax({
                        xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;

                                $('#UploadingImgstatus').html('Uploading.. '+percentComplete.toFixed()+' %');
                            }
                        }, false);
                        return xhr;
                    },

                    type: "POST",
                    enctype : 'multipart/form-data',
                    processData: false,
                    beforeSend: function(){
                        $(".loadingPersonal").text('Submitting...........') ;
                        $(".loadingPersonal").addClass('disablepointer');
                    },
                    contentType: false,
                    url: '{{ url( app()->getLocale()) }}/save_personal_info',
                    data : formData,
                    success: function(data) {
                        $("#pan_card").removeClass('error_border') ;
                        if(data.success == 200){
                            $("#Personal_Information").css({"display":"none"});
                            $("#Identity_Verification").css({"display":"block"});
                            triggerAlert('Pan card verified successfully!', 'success');
                        }
                    },
                    error: function(xhr, status, error) {
                        //console.log(error);
                        $(".step1").css({"display":"block"});
                        $(".step2").css({"display":"none"});
                        $("#personal_step1").attr('disabled', 'disabled' );
                        $("#UploadingImgstatus").text('');
                        var erroJson = JSON.parse(xhr.responseText);
                        if(erroJson.success == 201){
                            console.log(erroJson.panDetailAfterVerificationfail);
                            triggerAlert(erroJson.panDetailAfterVerificationfail, 'error');
                            if($(".rename_username").hasClass('hide')){
                                $(".rename_username").removeClass('hide');
                            }
                            $('#pan_card_res1').html('<div class="bg-light-blue fs-12 card p-3 mt-2 text-left"> Response Number- '+erroJson.panNumInresponse+' </br> Response Name- '+erroJson.nameInResponse+'</br>'+' <span class="text-red"> '+erroJson.panDetailAfterVerificationfail+' </span></div>');
                            $("input[name=rename_user]").val(erroJson.nameInResponse);
                            $('#pan_card').addClass('error_border');
                            $(".loadingPersonal").text('Save') ;
                            $(".loadingPersonal").removeClass('disablepointer');
                        }
                      //  var ispanPanValid = erroJson.error.ispanPanValid;
                        var pan_card= erroJson.error.pan_card;
                        var pan_card_img = erroJson.error.pan_card_img;
                        if(pan_card){
                            $('#pan_card_err').html(pan_card);
                            $('#pan_card').addClass('error_border');
                        }
                        if(pan_card_img){
                            $('#pan_card_img_err').html(pan_card_img);
                            $('#pan_card_img').addClass('error_border');
                        }
                    },
                    complete: function(){
                        $(".loadingPersonal").text('Save') ;
                        $(".loadingPersonal").removeClass('disablepointer') ;

                    }
                });
            }
        });

        $('.rename_username').click(function(){
            var rename = $("input[name=rename_user]").val();
            var old_name= $("input[name=first_name]").val();
            if($("input[name=rename_user]:checked").length > 0){
                $("#personal_step1").removeAttr('disabled' );
                $("input[name=first_name]").val(rename);

            }else{
                $("input[name=first_name]").val(old_name);
                $("#personal_step1").attr('disabled', 'disabled' );
            }
        });

         $(".btn-p-info2").click(function(){

                var country_name = $("input[name=country_name]").val();
                var country_ISO2code = $("input[name=country_ISO2code]").val();
                var country_ID = $("input[name=countryyId]").val();
                var f_name=$("input[name=first_name]").val();
                var rename_f_name=$("input[name=rename_user]").val();
                //  var m_name=$("input[name=middle_name]").val();
                // var l_name=$("input[name=last_name]").val();
                var dob=$("input[name=dob]").val();
                var residential_address = $("textarea[name=residential_address]").val();
                var pin_code=$("input[name=pin_code]").val();
                var city=$("input[name=city]").val();
                var pan_card=$("input[name=pan_card]").val();
                const token = $("input[name=_token]").val();
                // var _token = $("input[name=_token]").val();
                //  var pan_card_img = $("#pan_card_img").prop("files")[0];

              var pan_card_img = $("#pan_card_img")[0].files[0];
              var blobPanImg = $("#panPreview").attr('src');
            //   alert(pan_card_img);
            //   var selected = document.getElementById("pan_card_img").files.length > 0;
            //     alert(selected);
            //   die;
              var formData = new FormData( $('#pancard_img')[0]);

              // formData.append('pancard_img' , pan_card_img);
                formData.append('country_name' , country_name);
                 formData.append('country_ISO2code' , country_ISO2code);
                 formData.append('country_ID' , country_ID);
                  formData.append('first_name' , f_name);
                  // formData.append('middle_name' , m_name);
                  //  formData.append('last_name' , l_name);
                     formData.append('dob' , dob);
                      formData.append('residential_address' , residential_address);
                       formData.append('postal_code' , pin_code);
                        formData.append('city' , city);
                         formData.append('pan_card' , pan_card);
                          formData.append('_token' , token);
                          formData.append('blobPanImg', blobPanImg );


            if (!residential_address) {
                $('#residential_address_err').html("Enter residential address");
                $('#residential_address').addClass('error_border');
            }
            else if (!pin_code) {
                $('#pin_code_err').html("Enter pin code");
                $('#pin_code').addClass('error_border');
            }
            else if (!city) {
                $('#city_err').html("Enter city");
                $('#city').addClass('error_border');
            }
            else if (!pan_card) {
                $('#pan_card_err').html("Enter pan card");
                $('#pan_card').addClass('error_border');
            }
            // else if (pan_card_img.size > 100000) {
            //     $('#pan_card_img_err').html("max size 200kb allowed!");
            //     $('#pan_card_img').addClass('error_border');
            // }
            else if (!pan_card_img) {
                $('#pan_card_img_err').html("Upload pan card");
                $('#pan_card_img').addClass('error_border');
            }else if (check_pan(pan_card)) {
              // check_pan(pan_card);
            }else{

                $.ajax({
                            xhr: function() {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function(evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = (evt.loaded / evt.total) * 100;

                                    $('#UploadingImgstatus').html('Uploading.. '+percentComplete.toFixed()+' %');
                                }
                            }, false);
                            return xhr;
                            },

                    type: "POST",
                     enctype : 'multipart/form-data',
                    processData: false,
                beforeSend: function(){
                                $(".loadingPersonal").text('Submitting...........') ;
                                $(".loadingPersonal").addClass('disablepointer');

                                },

                    contentType: false,

                    url: '{{ url( app()->getLocale()) }}/save_personal_info',
                            //     data: {
                            //         'first_name':f_name,
                            //         'middle_name':m_name,
                            //         'last_name':l_name,
                            //         'dob':dob,
                            //         'city':city,
                            //         'pan_card':pan_card,
                            //         'residential_address':residential_address,
                            //         'postal_code':pin_code,
                            //         'country_code':country_name,
                            //         'country_ISO2code':country_ISO2code,
                            //         'pan_card_img_data' : formData,
                            //         '_token':_token,
                            //   },
                data : formData,

                success: function(data) {
                     // console.log(data);
                        // if($(".rename_username").hasClass('hide') != false){
                        //     $(".rename_username").addClass('hide');
                        // }
                       // console.log(data.success);

                        if(data.success == 200){

                         $("#Personal_Information").css({"display":"none"});
                         $("#Identity_Verification").css({"display":"block"});
                              triggerAlert('Pan card verified successfully!', 'success');
                        }
                      //  if(data.success == 201){
                        //    alert(data);
                      //   console.log(data);
                           //   triggerAlert('something went wrong !', 'error');
                     //   }



                        //$('#myform').trigger("reset");
                      // window.location.href = 'https://www.wealthmark.io/en/request_otp';
                  },
                  error: function(xhr, status, error) {
                      //console.log(error);
                      $(".step1").css({"display":"block"});
                      $(".step2").css({"display":"none"});
                      $("#personal_step1").attr('disabled', 'disabled' );
                      $("#UploadingImgstatus").text('');




                 var erroJson = JSON.parse(xhr.responseText);

                        if(erroJson.success == 201){
                         console.log(erroJson.panDetailAfterVerificationfail);
                         triggerAlert(erroJson.panDetailAfterVerificationfail, 'error');
                           if($(".rename_username").hasClass('hide')){
                                $(".rename_username").removeClass('hide');
                            }
                        //  $('#pan_card_err').html('<div class="bg-light-blue card p-3">'+erroJson.panDetailAfterVerificationfail+ erroJson.panDetailAfterVerificationfail+'</div>');
                        //  $('#pan_card_res').html('<div class="bg-light-blue card p-3"> Response Number- '+erroJson.panNumInresponse+' </br> Response Name- '+erroJson.nameInResponse+'</br>'+'</div>');
                        //  $('#pan_card_err1').html('<div class="bg-light-blue fs-12 card p-3">'+erroJson.panDetailAfterVerificationfail+'</div>');
                         $('#pan_card_res1').html('<div class="bg-light-blue fs-12 card p-3 mt-2 text-left"> Response Number- '+erroJson.panNumInresponse+' </br> Response Name- '+erroJson.nameInResponse+'</br>'+' <span class="text-red"> '+erroJson.panDetailAfterVerificationfail+' </span></div>');

                         $("input[name=rename_user]").val(erroJson.nameInResponse);
                         $('#pan_card').addClass('error_border');
                         $(".loadingPersonal").text('Final') ;
                         $(".loadingPersonal").removeClass('disablepointer');
                        }

                      //  var ispanPanValid = erroJson.error.ispanPanValid;
                        var pan_card= erroJson.error.pan_card;

                        var pan_card_img = erroJson.error.pan_card_img;
                        if(pan_card){
                            $('#pan_card_err').html(pan_card);
                            $('#pan_card').addClass('error_border');
                        }
                        if(pan_card_img){
                            $('#pan_card_img_err').html(pan_card_img);
                            $('#pan_card_img').addClass('error_border');
                        }
                        // if(ispanPanValid){
                        //     $('#pan_card_err').html(ispanPanValid);
                        //     $('#pan_card').addClass('error_border');
                        // }

                    },
                    complete: function(){
                                $(".loadingPersonal").text('Final') ;
                                $(".loadingPersonal").removeClass('disablepointer') ;

                                }
                });
            }
         });

        $("#btn_Identity1").click(function(){
            var id_card_type = $('#id_card_data').val();
             //alert(id_card_type);
            if (!id_card_type) {
                triggerAlert('Select id card type !', 'error');
                                    // $('#id_card_type_err').html("Select id card type");
                                    // $("#id_card_type_err").css({"display":"block"});
                return true;
                                    //$('#residential_address').addClass('error_border');
            }else{
                 if(id_card_type == 'ID Card (Aadhaar Image Upload)'){
                // alert('ID Card (Aadhaar Image Upload)');
                    $(".Identity_Verification_step2").css({"display":"block"});
                    $(".Identity_Verification_step1").css({"display":"none"});

                }

               if( id_card_type == 'ID Card (Aadhaar Digilocker)'){
                   //  alert('ID Card (Aadhaar Digilocker)');
                $(".Identity_Verification_step1").css({"display":"none"});
                $("#digilockerSection").css({"display":"block"});

                }
            }



         });


        $("#validate_selfie_image").click(function(){
            var selfie_image=$("input[name=selfie_image]").val();
            if (!selfie_image) {
                $('#selfie_err').html("Please capture selfie image");
                $("#selfie_err").css({"display":"block"});
                return true;
            }else{
                var _token = $("input[name=_token]").val();
                const front_image = $("#formed_img_preview_front img").attr('src');
                const selfie_formed_image = $("#formed_img_preview_selfie img").attr('src');

                $.ajax({
                    type: "POST",
                    url: '{{ url( app()->getLocale()) }}/save_selfie_info',
                    data: {'selfie_image':selfie_image,'_token':_token, 'front_image': front_image , 'selfie_formed_image': selfie_formed_image },
                    success: function(data) {

                      //  console.log(data.faceMatchPercent);
                    //    console.log(data.faceMatchComment);
                       // alert(data.faceMatchPercent);

                        $(".modal").css({"display":"none"});
                        triggerAlert('Your application successfully submitted. Application under review', 'success');
                        setTimeout(function(){
                            window.location.href = '{{ url( app()->getLocale()) }}/user/dashboard';
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                      var erroJson = JSON.parse(xhr.responseText);
                      var faceMatchPercent = erroJson.error.faceMatchPercent;
                      var faceMatchComment = erroJson.error.faceMatchComment;
                      if(faceMatchComment){
                           triggerAlert(faceMatchComment, 'error');
                      }

                    }
                });
            }
        });



         $(".upld-btn-doc").click(function(){
             $("#upload_document").css({"display":"none"});
             $("#img_capture").css({"display":"block"});
         });

          $("#take_selfie").click(function(){
             $("#selfie_img_capture").css({"display":"block"});
             $("#selfie_div").css({"display":"none"});
             $("#img_capture").css({"display":"none"});
         });

         $("#aadhar_btn").click(function(){
             $("#upload_document").css({"display":"block"});
             $("#Identity_Verification").css({"display":"none"});
         });


         $('.inner').click(function() {

             $(this).addClass('document_type_active').siblings().removeClass('document_type_active');
             var s = $(this).find('#id_card_type').html();
             $('#id_card_data').val(s);
             $(this).find('.document_type_inner_right').addClass("document_type_active_icon").siblings().removeClass('document_type_active_icon');
         });


         $(document).ready(function () {
         $(".niceCountryInputSelector").each(function(i,e){
         new NiceCountryInput(e).init();
         });
         });


      </script>
      <script>

        function open_selfie_camera(){
            Webcam.set({
                width: 490,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 100,
               // flip_horiz: true,
                 constraints: {
                  facingMode: 'user'
                }
            });
            Webcam.attach( '#camera-selfie' );
        }

        function open_camera(){
           Webcam.set({
                width: 490,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 100,
              //  flip_horiz: false,
                constraints: {
                  facingMode: 'environment'
                }
            });
            Webcam.attach( '#camera-front' );
        }

        function open_back_camera(){
            Webcam.set({
                width: 490,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 100,
               // flip_horiz: false,
                constraints: {
                  facingMode: 'environment'
                }
            });
            Webcam.attach( '#camera-back' );
        }

    $('#camera-front').click(function() {
    webcam.flip();
    webcam.start();
    });

    // Webcam.attach( '#my_camera1' );
    function take_front_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);

            // document.getElementById('front_image').innerHTML = '<img style="width:100%;height:100%" src="'+data_uri+'"/>';
            document.getElementById('img_preview_front').innerHTML = '<img  style="margin-bottom:10px;max-width:300px;max-height:150px; " src="'+data_uri+'"/>';
            document.getElementById("img_preview_front_delete").style.display="block";
            document.getElementById("btn_click_img_front").style.display="none";
            document.getElementById("img_preview_front").style.display="block";



        } );


         //  conversion from blog to decoded front image--------------------

                        //   var _token = $("input[name=_token]").val();
                        //     const frontImg_base64Url = $(".image-tag").val();

                        //         console.log(frontImg_base64Url);

                        //         $.ajax({

                        //           type: "POST",
                        //                 url: '{{ url( app()->getLocale()) }}/decode-blob',
                        //                 data: {
                        //                     'imageTobeDecoded': frontImg_base64Url,
                        //                     '_token':_token,
                        //                 },
                        //               success: function(data) {
                        //                 //   var decodedImg = JSON.parse(data);
                        //                   console.log(data.decodedImage_name);
                        //                  var storageURI  = "<?php echo url('storage/app/') ; ?>"
                        //                   document.getElementById("formed_img_preview_front").innerHTML = '<img style="display:none" class="img-thumbnail " src="'+storageURI+'/'+data.decodedImage_name+'" alt="" title="">';

                        //               },
                        //               error: function(xhr, status, error) {
                        //                   var erroJson = JSON.parse(xhr.responseText);
                        //                   console.log(erroJson);
                        //                 }
                        //             });

        // end conversion from blog to decoded front image-------------------------

        Webcam.reset();
    }

    function take_back_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag1").val(data_uri);
            document.getElementById('img_preview_back').innerHTML = '<img style="margin-bottom:10px;max-width:300px;max-height:150px; " src="'+data_uri+'"/>';
            document.getElementById("img_preview_back_delete").style.display="block";
            document.getElementById("btn_click_img_back").style.display="none";
            document.getElementById("img_preview_back").style.display="block";

        } );

         //  conversion from blog to decoded back image--------------------
            // var _token = $("input[name=_token]").val();
            // const backImg_base64Url = $(".image-tag1").val();



                            // $.ajax({

                            // type: "POST",
                            // url: '{{ url( app()->getLocale()) }}/decode-blob',
                            // data: {
                            //     'imageTobeDecoded': backImg_base64Url,
                            //     '_token':_token,
                            // },
                            // success: function(data) {
                            // //   var decodedImg = JSON.parse(data);
                            //   console.log(data.decodedImage_name);
                            //  var storageURI  = "<?php echo url('storage/app/') ; ?>"
                            //   document.getElementById("formed_img_preview_back").innerHTML = '<img style="display:none" class="img-thumbnail " src="'+storageURI+'/'+data.decodedImage_name+'" alt="" title="">';

                            // },
                            // error: function(xhr, status, error) {
                            //   var erroJson = JSON.parse(xhr.responseText);
                            //   alert(erroJson);
                            // }
                            // });

                  //  conversion from blog to decoded back image--------------------
        Webcam.reset();
    }

    function take_selfie_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag2").val(data_uri);
            document.getElementById('selfie_image_preview').innerHTML = '<img style="margin-bottom:10px;max-width:300px;max-height:150px;" src="'+data_uri+'"/>';
            document.getElementById("selfie_image_delete").style.display="block";
            document.getElementById("btn_selfie_image").style.display="none";
            document.getElementById("selfie_image_preview").style.display="block";
        } );


           // convert blog selfie image into decoded normal image

                                // const selfieImg_base64Url = $("input[name=selfie_image]").val();
                                // var _token = $("input[name=_token]").val();
                                // console.log(selfieImg_base64Url);

                                // $.ajax({

                                // type: "POST",
                                // url: '{{ url( app()->getLocale()) }}/decode-blob',
                                // data: {
                                //     'imageTobeDecoded': selfieImg_base64Url,
                                //     '_token':_token,
                                // },
                                // success: function(data) {
                                // //   var decodedImg = JSON.parse(data);
                                //   console.log(data.decodedImage_name);
                                //  var storageURI  = "<?php echo url('storage/app/') ; ?>"
                                //   document.getElementById("formed_img_preview_selfie").innerHTML = '<img style="display:none" class="img-thumbnail " src="'+storageURI+'/'+data.decodedImage_name+'" alt="" title="">';

                                // },
                                // error: function(xhr, status, error) {
                                //   var erroJson = JSON.parse(xhr.responseText);
                                //   alert(erroJson);
                                // }
                                // });

             // end convert blog selfie image into decoded normal image
        Webcam.reset();
    }


      </script>
      <script>
         function onChangeCallback(ctr){
             console.log(ctr);
             $(".country_box").load("{{ url('api/filter/get_country_record') }}",{'country_code':ctr});
         }

         $("#back_first").click(function(){
           $("#Personal_Information").css({"display":"none"});
           $("#select_country").css({"display":"block"});
         });

         $("#back_start").click(function(){
           $(".modal").css({"display":"none"});
         });

         $("#back_third").click(function(){
             $(".step2").css({"display":"none"});
             $("#Personal_Information").css({"display":"block"});
             $(".step1").css({"display":"block"});
         });

         $("#back_fourth").click(function(){
             $(".step2").css({"display":"block"});
             $("#Personal_Information").css({"display":"block"});
             $(".step1").css({"display":"none"});
             $("#Identity_Verification").css({"display":"none"});
             $("#Identity_Verification_step1").css({"display":"none"});
         });

         $("#back_fifth").click(function(){
             $(".Identity_Verification_step1").css({"display":"block"});
             $(".Identity_Verification_step2").css({"display":"none"});
         });

         $("#back_sixth").click(function(){
             $("#Identity_Verification").css({"display":"block"});
             $("#upload_document").css({"display":"none"});
         });

        $("#back_digilocker").click(function(){
             $("#digilockerSection").css({"display":"none"});
             $("#Identity_Verification").css({"display":"block"});
              $(".Identity_Verification_step1").css({"display":"block"});


         });

         $(".close_digilocker_model").click(function(){
             $("#digilockerSection").css({"display":"none"});
             $("#Identity_Verification").css({"display":"block"});
              $(".Identity_Verification_step1").css({"display":"block"});


         });

          $("#back_seventh").click(function(){
             $("#Identity_Verification").css({"display":"none"});
             $("#img_capture").css({"display":"none"});
             $("#upload_document").css({"display":"block"});
          });

          $("#capture-camera").click(function(){
             $("#upload_document").css({"display":"block"});
             $("#img_capture").css({"display":"none"});
             $
          });

          $("#capture-selfie-camera").click(function(){
             $("#selfie_div").css({"display":"block"});
             $("#selfie_img_capture").css({"display":"none"});
             $
          });


          $("#back_img_btn").click(function(){
             $("#upload_document").css({"display":"block"});
             $(".img_capture_front").css({"display":"none"});
             $
          });


          $(".btn-back-img").click(function(){
             $("#upload_document").css({"display":"none"});
             $(".img_capture_front").css({"display":"none"});
             $(".img_capture_back").css({"display":"block"});
             $
          });


          $(".back_img_btn").click(function(){
             $("#upload_document").css({"display":"block"});
             $(".img_capture_front").css({"display":"none"});
             $(".img_capture_back").css({"display":"none"});
             $
          })


        // digilocker starts
           $("#continue_digilocker").click(function(){

                        const id_card_type = 'digiLoacker';
                        const user_id =  '{{ Auth::user()->id }}';
                        const aadhaar_num = $("#digilocker_aadhaar_card_num").val();
                        var _token = $("input[name=_token]").val();



                        if(aadhaar_num.length != 12 || aadhaar_num.length < 1){
                            $("#digilocker_aadhaar_card_num").addClass('error_border');
                            $('#digilocker_aadhaar_card_num_err').html("Invalid aadhaar number!");
                        }


                if(aadhaar_num.length == 12 ){
                //   console.log(id_card_type);
                //   console.log(aadhaar_num);

                            $("#digilocker_aadhaar_card_num").removeClass('error_border');
                            $('#digilocker_aadhaar_card_num_err').html("");
                    $.ajax({

                       type: "POST",
                       url: '{{ url( app()->getLocale()) }}/user/update-digilocker-aadhaarAndType',
                       data: {
                            'user_id': user_id,
                            'id_card_type': id_card_type,
                            'id_card_num' : aadhaar_num,
                            '_token':_token,
                        },
                      success: function(data) {
                            if(data.status){
                               window.location.href = '{{ url( app()->getLocale()) }}/user/verifyDigilocker';
                            }

                      },
                      error: function(xhr, status, error) {

                          var erroJson = JSON.parse(xhr.responseText);
                          console.log(erroJson);
                           var digilockerUpadetErr = erroJson.error.id_card_num;

                        //   triggerAlert(id_card_num, 'error');
                          $('#digilocker_aadhaar_card_num_err').html(digilockerUpadetErr);

                          setTimeout(function(){
                              $('.loading').html('');
                              $('#digilocker_aadhaar_card_num_err').html('');

                          }, 2000);
                        }
                    });
                }



          });


        // ends digilocker

        //   btn-back-img

          $("#btn_Identity2").click(function(){

                var id_card_type = $("input[name=id_card_data]").val();
                var back_image=$("input[name=back_image]").val();
                var front_image=$("input[name=front_image]").val();

                var residential_address = $("textarea[name=residential_address]").val();
                var pin_code=$("input[name=pin_code]").val();
                var city=$("input[name=city]").val();



                //   var newFormed_back_image = $("#formed_img_preview_back img").attr('src');
                //   var newFormed_front_image = $("#formed_img_preview_front img").attr('src');

                var id_card_num = $("#id_card_num").val();
                if(id_card_num.length >= 1){
                        $("#id_card_num").removeClass('error_border');
                        $('#id_card_num_err').html("");
                        // $("#id_card_num_err").css({"display":"block"});

                }
                if(front_image.length >= 1){
                     $("#front_image").removeClass('error_border');
                        $('#front_image_err').html("");
                        $("#front_image_err").css({"display":"none"});
                }

                if(back_image.length >=1){
                      $("#back_image").removeClass('error_border');
                        $('#back_image_err').html("");
                        $("#back_image_err").css({"display":"none"});
                }


                if(!id_card_type){

                        $('#id_card_err').html("Select id card type");
                        $("#id_card_err").css({"display":"block"});
                        return true;
                }else if(!id_card_num){
                        $("#id_card_num").addClass('error_border');
                        $('#id_card_num_err').html("Please enter aadhaar number");
                        // $("#id_card_num_err").css({"display":"block"});

                }else if(!residential_address) {
                    $('#residential_address_err').html("Enter residential address");
                    $('#residential_address').addClass('error_border');
                }
                else if (!pin_code) {
                    $('#pin_code_err').html("Enter pin code");
                    $('#pin_code').addClass('error_border');
                }
                else if (!city) {
                    $('#city_err').html("Enter city");
                    $('#city').addClass('error_border');
                }
                else if(!front_image){
                        $("#front_image").addClass('error_border');
                        $('#front_image_err').html("Please capture front image");
                        $("#front_image_err").css({"display":"block"});
                }else if(!back_image){
                        $("#back_image").addClass('error_border');
                        $('#back_image_err').html("Please capture back image");
                        $("#back_image_err").css({"display":"block"});
                        }else{


                    var _token = $("input[name=_token]").val();
                    $.ajax({
                        type: "POST",
                        url: '{{ url( app()->getLocale()) }}/save_id_card_info',
                        beforeSend: function( jqXHR ) {

                                $('.loading').html('<span style="color:#000 !important; backgraound:#fff !important" class=" alert-success"> Please wait!. Images processing ... </span>');
                                                    },
                        data: {
                            'front_image':front_image,
                            'back_image':back_image,
                            'id_card_type':id_card_type,
                            'city':city,
                            'residential_address':residential_address,
                            'postal_code':pin_code,
                            // 'newFormed_front_image' : newFormed_front_image,
                            // 'newFormed_back_image' : newFormed_back_image,
                            'id_card_num' : id_card_num,
                            '_token':_token,
                        },
                      success: function(data) {

                            $(".img_capture_front").css({"display":"none"});
                            $(".img_capture_back").css({"display":"none"});
                            $("#upload_document").css({"display":"none"});

                           triggerAlert('aadhaar verified successfully. Now match your selfie', 'success');
                            $("#selfie_div").css({"display":"block"});
                             $( '.loading' ).html('');
                      },
                      error: function(xhr, status, error) {

                         //  $("#selfie_div").css({"display":"block"});
                           $( '.loading' ).html( '<span class=" alert-danger "> Images cannot be processed try again </span>');
                           $( '#id_card_num_err').html( '<span class=" alert-danger "> Aadhaar card number mandatory </span>');


                          var erroJson = JSON.parse(xhr.responseText);
                          console.log(erroJson);
                           var id_card_num= erroJson.error.id_card_num;
                            var frontImageData = erroJson.error.frontImageData;
                           var backImageCountryCityData = erroJson.error.backImageCountryCityData;


                           if(id_card_num){
                                triggerAlert(id_card_num, 'error');
                                 $( '#id_card_num_err').html(id_card_num);
                                  $("#id_card_num_err").css({"display":"block"});
                           }

                            if(frontImageData){
                                triggerAlert(frontImageData, 'error');

                                 $( '#id_card_num_err').html(frontImageData);
                                  $("#id_card_num_err").css({"display":"block"});
                           }

                            if(backImageCountryCityData){
                                triggerAlert(backImageCountryCityData, 'error');
                                 $( '#id_card_num_err').html(backImageCountryCityData);
                                  $("#id_card_num_err").css({"display":"block"});
                           }

                          setTimeout(function(){
                              $('.loading').html('');
                              $('#id_card_num_err').html('');
                               $("#id_card_num_err").css({"display":"none"});
                          }, 3000);
                        }
                    });
                }
              //alert(id_card_type);
            //   var front_image =
            //   var back_image =


          });

          $("#back_tenth").click(function(){
             $("#upload_document").css({"display":"block"});
             $("#selfie_div").css({"display":"none"});
          });

        //  $("#personal_step1").click(function(){

        //  });

      </script>
      <script>
        function handleInput(e) {
           var ss = e.target.selectionStart;
           var se = e.target.selectionEnd;
           e.target.value = e.target.value.toUpperCase();
           e.target.selectionStart = ss;
           e.target.selectionEnd = se;
        }
      </script>
        <script type="text/javascript">
            $(document).ready(function(){
                // $("#Verification_process").css('display','block');
               {{--  @if(Auth::user()->first_name!="" &&  Auth::user()->last_name!="" && Auth::user()->dob!="" && Auth::user()->country!="" && Auth::user()->residential_address!="" && Auth::user()->postal_code!="" && Auth::user()->city!="" && Auth::user()->pan_card!="") --}}
                @if(Auth::user()->first_name!="" && Auth::user()->dob!="" && Auth::user()->country!="" && Auth::user()->pan_card!="")
			        $("#Personal_Information").css({"display":"none"});
                    $("#select_country").css({"display":"none"});
                    $("#Identity_Verification").css({"display":"block"});
                @endif

                @if(Auth::user()->id_card_front_image!="" && Auth::user()->id_card_back_image!="" && Auth::user()->id_card_type!="")
			        $("#Identity_Verification").css({"display":"none"});
                    $("#upload_document").css({"display":"none"});
                    $("#selfie_div").css({"display":"block"});
                @endif

            });
        </script>

        <script>
         $('.inner').click(function() {
                $(this).siblings().removeClass("document_type_active");
                $(this).siblings().find(".document_type .document_type_inner_right").removeClass("document_type_active_icon");
                $(this).addClass('document_type_active')
               $(this).find(".document_type .document_type_inner_right").addClass("document_type_active_icon");
                $(this).find(".document_type .document_type_active_icon").attr("src", "{{ asset('img/auth-icons/check-mark-yellow.svg') }}");
                $(this).siblings().find(".document_type .document_type_inner_right").attr("src", "{{ asset('img/auth-icons/check-mark-grey.svg') }}");




    });
        </script>

        <script>
            // 28-11-22-------------------delete capture document btn script---------------------------

             $('#img_preview_back_delete').click(function() {
                 $('#img_preview_back').css("display" , "none");
                 $('#img_preview_back_delete').css("display" , "none");
                 $('#btn_click_img_back').show();

             });
              $('#img_preview_front_delete').click(function() {
                 $('#img_preview_front').css("display" , "none");
                 $('#img_preview_front_delete').css("display" , "none");
                 $('#btn_click_img_front').show();

             });

              $('#selfie_image_delete').click(function() {
                 $('#selfie_image_preview').css("display" , "none");
                 $('#selfie_image_delete').css("display" , "none");
                 $('#btn_selfie_image').show();



             });
        </script>
        <script>
             $('.coin-swap-from').click(function(){
                 $(this).toggleClass('open');
                $(this).siblings(".wm-dropdown-div").toggle();
        });
        function changeSrc2(id){
                const li = id;
                onChangeCallback(li) ;
                console.log(li);

                    $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img").attr('src')) ;
                    $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img2').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img-2").attr('src')) ;
                    $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-txt').html($("#"+li+' '+ ".wm-dropdown-optn-item-txt").html()) ;
                    $("#"+li).children('.wm-dropdown-optn-item-inner').addClass('selected');
                    $("#"+li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass('selected');
                    $(".wm-dropdown-div").hide();

        };

        $(function() {
                $("#earn-search-coin-filter .wm-dropdown-search-input").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                        $("#earn-search-coin-filter .wm-dropdown-div ul li").filter(function() {$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

            $('.wm-dropdown-search-cross-icn').on('click', function(e) {
                $('.wm-dropdown-search-input').val('');
                $('.wm-dropdown-div ul li').show();
                return false;
            });
        </script>

        <script>
//             //   <script>
//       (function () {
//   if (
//     !"mediaDevices" in navigator ||
//     !"getUserMedia" in navigator.mediaDevices
//   ) {
//     alert("Camera API is not available in your browser");
//     return;
//   }

//   // get page elements
// //   const video = document.querySelector("#video");
// //   const btnPlay = document.querySelector("#btnPlay");
// //   const btnPause = document.querySelector("#btnPause");
//   const btnScreenshot = document.querySelector("#btnScreenshot");
//   const btnChangeCamera = document.querySelector("#btnChangeCamera");
//   const screenshotsContainer = document.querySelector("#screenshots");
//   const canvas = document.querySelector("#canvas");
//  // const devicesSelect = document.querySelector("#devicesSelect");

//   // video constraints
//   const constraints = {
//     video: {
//       width: {
//         min: 1280,
//         ideal: 1920,
//         max: 2560,
//       },
//       height: {
//         min: 720,
//         ideal: 1080,
//         max: 1440,
//       },
//     },
//   };

//   // use front face camera
//   let useFrontCamera = true;

//   // current video stream
//   let videoStream;

//   // handle events
//   // play
// //   btnPlay.addEventListener("click", function () {
// //     video.play();
// //     btnPlay.classList.add("is-hidden");
// //     btnPause.classList.remove("is-hidden");
// //   });

// //   // pause
// //   btnPause.addEventListener("click", function () {
// //     video.pause();
// //     btnPause.classList.add("is-hidden");
// //     btnPlay.classList.remove("is-hidden");
// //   });

//   // take screenshot
// //   btnScreenshot.addEventListener("click", function () {
// //     const img = document.createElement("img");
// //     canvas.width = video.videoWidth;
// //     canvas.height = video.videoHeight;
// //     canvas.getContext("2d").drawImage(video, 0, 0);
// //     img.src = canvas.toDataURL("image/png");
// //     screenshotsContainer.prepend(img);
// //   });

//   // switch camera
// //   btnChangeCamera.addEventListener("click", function () {
// //     useFrontCamera = !useFrontCamera;

// //     initializeCamera();
// //   });

// //   // stop video stream
// //   function stopVideoStream() {
// //     if (videoStream) {
// //       videoStream.getTracks().forEach((track) => {
// //         track.stop();
// //       });
// //     }
// //   }

//   // initialize
//   async function initializeCamera() {
//     stopVideoStream();
//     constraints.video.facingMode = useFrontCamera ? "user" : "environment";

//     try {
//       videoStream = await navigator.mediaDevices.getUserMedia(constraints);
//       video.srcObject = videoStream;
//     } catch (err) {
//       alert("Could not access the camera");
//     }
//   }

//   initializeCamera();
// })();
  </script>
  <script>
  function loadFile() {
       $('#UploadingImgstatus').html('');
   // alert(event.target.files[0].size);
    // if(event.target.files[0].size > 100000){
    //   $('#pan_card_img_err').html('Maximum  size 100kb allowed!');
    //   $('#pan_card_img').addClass('error_border');
    //   panPreview.src='';
    // }else{
      $('#pan_card_img_err').html('');
     $(".loadingPersonal").addClass('disablepointer');
      // alert(event.target.files[0]);
    $("#panPreview").parent().css({'display' : 'block'});
    panPreview.src=URL.createObjectURL(event.target.files[0]);
    console.log(event.target.files[0].size);
     $(".loadingPersonal").removeClass('disablepointer');
    // }

}
  </script>
  <script>

     var sessionid = '<?php echo session_id() ; ?>';
     var auth_chk = '<?php echo Auth::check() ; ?>';
    // console.log(sessionid+'-'+auth_chk);
  	function check_session_id()
        	{

        		fetch('{{ url( app()->getLocale()) }}/check_login').then(function(response){
        			return response.json();
        		}).then(function(responseData){
        			if(responseData.output == 'logout')
        			{
        				window.location.href = '{{ url( app()->getLocale()) }}/user/logout';
        			}
        		}).catch(function(err) {
                      console.log(err);
                  });
        	};

    if(auth_chk == 1 || auth_chk === true)   {
       setInterval(function(){
        check_session_id();
	}, 10000);

    }


</script>
<script>
//     navigator.mediaDevices.getUserMedia({
//     video: true,
//     audio: false
// }).then(stream => {
//     // do stuff
// }).catch(error => {
//     console.log(error.name + " " + error.message);
// });


function getCityBypincode(){
        $("#city").val('');
        $("#city").css({ 'border' : '1px solid #f0b90b'});
        $("#pin_code").css({ 'border' : '1px solid #f0b90b'});

        if($('#pin_code').val().length == 6){

        var pincode = $('#pin_code').val();
                $.ajax({
                        type:'GET',
                        url:"{{ url('getAddressDetailByPincode') }}",
                        data:{ 'pincode': pincode},
                        success:function(data,status){


                            if(status=="success"){
                             var json = JSON.parse(data);
                                if(json[0].Status == "Success"){
                                      //    console.log(json[0].PostOffice[1].District);
                                //   $("#residential_address").text();
                                    $("#city").css({ 'border' : '1px solid #f0b90b'});
                                    $("#pin_code").css({ 'border' : '1px solid #f0b90b'});
                                    $("#city").val(json[0].PostOffice[1].District);
                                }else{


                                     $("#pin_code").css({ 'border' : '1px solid red'});
                                     $("#city").val('');
                                     $("#city").css({ 'border' : '1px solid red'});
                                       triggerAlert('Invalid Pincode !', 'error');

                                  };


                            }else{
                              triggerAlert(status, 'error');
                            }


                        },error: function(xhr, status, error) {
                            var erroJson = JSON.parse(xhr.responseText);
                            $('#phone_err').html(erroJson.error);
                            $('#mobile').addClass('error_border');
                        }
                });
        }
}

$('#pin_code').on('input', function() {
     var userCountry = $('input[name="country_name"] ').val();
    if(userCountry == 'India' ){
      getCityBypincode();
    }

});
$('#city').on('input', function() {
     var userCountry = $('input[name="country_name"] ').val();
    if(userCountry == 'India' ){
      getCityBypincode();
    }
});





$("#rename_user").change(function() {
    if(this.checked) {
      $(".rename_user").children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
    }
  else
    {
        $(".rename_user").children().addClass('hide').removeClass('custom-modal-bck-bg');

    }
});

</script>

  <script type="text/javascript">
    $(function()
    {
        $('#agree').change(function()
        {
            if ($(this).is(':checked')) {
               // Do something...
               $("#agree_button").removeClass('desabled');
            }
            else{
                $("#agree_button").addClass('desabled')
            }
        });

        $('#agree_button').change(function()
        {
           $(".rename_user").children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
           $('.rename_user').prop("checked", false);
        });


        $("#agree_button").click(function (){
            $(".rename_user").children('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
            $('.rename_user').prop("checked", true);
        })
    });
  </script>


   </body>
</html>
