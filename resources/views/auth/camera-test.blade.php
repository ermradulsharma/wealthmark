    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="#287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!------------------------Country flag dropdown css------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />

    <!------------------------main theme css------------------------------->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!------------------------alert custom box css------------------------------->
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/niceCountryInput.css') }}">

<!----------------------------------- add for date picker box---------------------------------->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">



<style>

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
.step-box-icon-svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: #ffc107;
    font-size: 24px;
    fill: #ffc107;
    width: 1em;
    height: 1em;
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
}
.verification-steps .step-box-subtitle {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 400 !important;
    font-size: 14px;
    line-height: 20px;
    color: rgb(112, 122, 138);
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
    font-weight: 500 !important;
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
    /*font-weight: 500 !important;*/
}

.input-group-append {
  cursor: pointer;
}



.select_verification_type {
    box-sizing: border-box;
    min-width: 0px;
    max-height: 450px;
    overflow: auto;
    padding-left: 5px;
    padding-right: 5px;
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
.select_verification_type .document_type_active_icon {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: #ffc107;
    width: 24px;
    height: 24px;
    font-size: 24px;
    fill: #ffc107;
}
.select_verification_type .document_type_inner {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
.select_verification_type .document_type_inner_svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(30, 35, 41);
    font-size: 24px;
    fill: rgb(30, 35, 41);
    width: 1em;
    height: 1em;
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
.document_type_inner_right {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(183, 189, 198);
    font-size: 24px;
    fill: rgb(183, 189, 198);
    width: 1em;
    height: 1em;
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
.modal_li_svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 16px;
    fill: currentcolor;
    flex-shrink: 0;
    width: 1em;
    height: 1em;
}
.modal_li_des {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 400 !important;
    font-size: 14px;
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
    display: flex;
    border-radius: 4px;
    border: 2px dashed rgb(234, 236, 239);
    position: relative;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    height: 135px;
    width: 100%;
    background-color: rgb(250, 250, 250);
    flex-direction: column;
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
.cam-icon {
    box-sizing: border-box;
    margin: 0px 5px 0px 0px;
    min-width: 0px;
    color: rgb(24, 26, 32);
    font-size: 14px;
    fill: rgb(24, 26, 32);
    width: 1em;
    height: 1em;
}


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

video  {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /*background: rgba(0,0,0,0.2);*/
  -webkit-transform: scaleX(-1); /* mirror effect while using front cam */
  transform: scaleX(-1);         /* mirror effect while using front cam */
}

#canvas  {
  width: 192px;
  height: 192px;
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

 .disable_div{
          background: whitesmoke;
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

.dropdown-menu{
    background-color: #263674;
    color:#fff;
}

.datepicker table tr td.new, .datepicker table tr td.old {
    color: #fcb61d;
}

.datepicker table tr td.active, .datepicker table tr td.active.disabled, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active:hover {
    background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);
    color: #263674;
}

.datepicker table tr td span.focused, .datepicker table tr td span:hover {
    background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);
    color: #263674;
}

.datepicker .datepicker-switch:hover, .datepicker .next:hover, .datepicker .prev:hover, .datepicker tfoot tr th:hover {
    background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);
    color: #263674;
}

.datepicker table tr td.day.focused, .datepicker table tr td.day:hover {
    background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);
    color: #263674;
    cursor: pointer;
}
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
        //print_r($country_code);
        $url = 'http://country.io/names.json';
        $json = file_get_contents($url);
        $jo = json_decode($json);
        //print_r($jo);

    ?>
        <main id="main" >
                <section class="inner-page register">
                      <div class="container">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                                <h4 class="form-heading mb-4">Account Created</h4>



                                <p class="mt-2 mb-4">Please proceed to complete identity verification.</p>
                              <div class="verification-steps">
                                      <div class="step-box">
                                        <div class="step-box-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="step-box-icon-svg">
                                            <path d="M18 8l4 4 4-4-4-4-4 4z" fill="url(#general-success_svg__paint0_linear_22059_28209)"></path>
                                            <path d="M85 76l3 3 3-3-3-3-3 3z" fill="url(#general-success_svg__paint1_linear_22059_28209)"></path>
                                            <path d="M86 20l2 2 2-2-2-2-2 2z" fill="url(#general-success_svg__paint2_linear_22059_28209)"></path>
                                            <path d="M0 47l3 3 3-3-3-3-3 3z" fill="url(#general-success_svg__paint3_linear_22059_28209)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48 88c22.091 0 40-17.909 40-40S70.091 8 48 8 8 25.909 8 48s17.909 40 40 40zM31 48.335L43.475 61 64 40.241 59.812 36 43.475 52.547l-8.317-8.423L31 48.335z" fill="url(#general-success_svg__paint4_linear_22059_28209)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29zM31 48.335L43.475 61 64 40.241 59.812 36 43.475 52.547l-8.317-8.423L31 48.335z" fill="url(#general-success_svg__paint5_linear_22059_28209)"></path>
                                            <defs>
                                              <linearGradient id="general-success_svg__paint0_linear_22059_28209" x1="22" y1="12" x2="22" y2="4" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#02C076"></stop>
                                                <stop offset="1" stop-color="#28D294"></stop>
                                              </linearGradient>
                                              <linearGradient id="general-success_svg__paint1_linear_22059_28209" x1="88" y1="79" x2="88" y2="73" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#02C076"></stop>
                                                <stop offset="1" stop-color="#28D294"></stop>
                                              </linearGradient>
                                              <linearGradient id="general-success_svg__paint2_linear_22059_28209" x1="88" y1="22" x2="88" y2="18" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#02C076"></stop>
                                                <stop offset="1" stop-color="#28D294"></stop>
                                              </linearGradient>
                                              <linearGradient id="general-success_svg__paint3_linear_22059_28209" x1="3" y1="50" x2="3" y2="44" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#02C076"></stop>
                                                <stop offset="1" stop-color="#28D294"></stop>
                                              </linearGradient>
                                              <linearGradient id="general-success_svg__paint4_linear_22059_28209" x1="8" y1="48" x2="88" y2="48" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#28D294" stop-opacity="0"></stop>
                                                <stop offset="1" stop-color="#28D294"></stop>
                                              </linearGradient>
                                              <linearGradient id="general-success_svg__paint5_linear_22059_28209" x1="48" y1="77" x2="48" y2="19" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#02C076"></stop>
                                                <stop offset="1" stop-color="#28D294"></stop>
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                        </div>
                                        <div class="step-box-content">
                                          <div  class="step-box-title">Create Account</div>
                                          <div  class="step-box-subtitle">Enter your account details.</div>
                                        </div>
                                      </div>
                                      <div class="step-box">
                                        <div class="step-box-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="step-box-icon-svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22 20H2V4h20v16zM4 7h7v6H4V7zm9 0h4v2h-4V7z" fill="url(#id-g_svg__paint0_linear)"></path>
                                            <path d="M7.5 12a2 2 0 100-4 2 2 0 000 4zM11 17v-4H4v4h7zM13 11h7v2h-7v-2zM20 15h-7v2h7v-2z" fill="#76808F"></path>
                                            <defs>
                                              <linearGradient id="id-g_svg__paint0_linear" x1="12" y1="20" x2="12" y2="4" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F0B90B"></stop>
                                                <stop offset="1" stop-color="#F8D33A"></stop>
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                        </div>
                                        <div class="step-box-content">
                                          <div  class="step-box-title">Verify Identity</div>
                                          <div  class="step-box-subtitle">Verify your identity to protect your account.</div>
                                        </div>
                                      </div>
                                      <div class="step-box">
                                        <div class="step-box-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="step-box-icon-svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 10l6-6h10l6 6-11 11L1 10zm9-2H8v2h2V8z" fill="url(#vip-g_svg__paint0_linear)"></path>
                                            <path d="M19 3l1.5-1.5L22 3l-1.5 1.5L19 3zM12.5 12L10 14.5l2.5 2.5 2.5-2.5-2.5-2.5zM3.5 15L2 16.5 3.5 18 5 16.5 3.5 15z" fill="#76808F"></path>
                                            <defs>
                                              <linearGradient id="vip-g_svg__paint0_linear" x1="12" y1="21" x2="12" y2="4" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F0B90B"></stop>
                                                <stop offset="1" stop-color="#F8D33A"></stop>
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                        </div>
                                        <div class="step-box-content">
                                          <div  class="step-box-title">Unlock Prize</div>
                                          <div  class="step-box-subtitle">Get your prize and start trading.</div>
                                        </div>
                                      </div>
                                    </div>
                           <div class="form-button mb-3">
                                    <input type="button" id="Verify_Now" class="btn-theme btn-yellow w-100 text-center fw-bold modal-trigger text-dark" value="Verify Now" data-modal="Verification_process">


                                 </div>

                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1 text-center">
                             <div class="login_scan">
                                 <div class="qr_code">
                                 <img src="{{ asset('img/assets/img/qr-code.png') }}" class="img-responsive">
                                 </div>
                                 <div class="mob_login">
                                     <h2>You're almost there!</h2>
                                     <p>Next, complete identity verification for your account.</p>
                                 </div>
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
              <div class="legal_txt_box country_box">
                <div class="inner">
                  <div class="legal_text">Please ensure your country of residence matches your valid ID. Your privileges could change based on the selection.</div>
                </div>
                <div class="modal-counrty-code mb-3">
                  <div class="niceCountryInputSelector" data-selectedcountry="{{ $country_code }}" data-showspecial="false" data-onchangecallback="onChangeCallback" data-showflags="true" data-i18nall="All selected" data-i18nnofilter="No selection" data-i18nfilter="no Filter"></div>
                </div>
                <div class="inner">
                  <div class="heading">Verification process</div>
                  <div class="content-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="content-box-icon">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 7.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM9 10a2.5 2.5 0 100-5 2.5 2.5 0 000 5zm4 9v-1a2 2 0 00-2-2H7a2 2 0 00-2 2v1h8zm-6-5a4 4 0 00-4 4v3h12v-3a4 4 0 00-4-4H7zm14-7h-5v2h5V7zm-5 4h5v2h-5v-2zm5-8h-5v2h5V3z" fill="#76808F"></path>
                    </svg>
                    <span class="content-box-text">Personal information</span>
                  </div>
                  <div class="content-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="content-box-icon">
                      <path d="M13 11h5V9h-5v2zM13 15h5v-2h-5v2zM11 13v2H6v-2h5zM8.5 11.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" fill="#76808F"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M22 4H2v16h20V4zm-2 2v12H4V6h16z" fill="#76808F"></path>
                    </svg>
                    <span class="content-box-text"> Government-issued ID</span>
                  </div>
                  <div class="content-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="content-box-icon">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 11a4.5 4.5 0 100-9 4.5 4.5 0 000 9zm2.5-4.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM3 17a4 4 0 014-4h10a4 4 0 014 4v4H3v-4zm16 0v2H5v-2a2 2 0 012-2h10a2 2 0 012 2z" fill="#76808F"></path>
                    </svg>
                    <span class="content-box-text"> Facial recognition</span>
                  </div>
                  <div class="content-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="content-box-icon">
                      <path d="M13 11.586V6h-2v6.414l3.793 3.793 1.414-1.414L13 11.586z" fill="#76808F"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zM4 12a8 8 0 1116 0 8 8 0 01-16 0z" fill="#76808F"></path>
                    </svg>
                    <span class="content-box-text"> Review time: 15 days</span>
                  </div>
                </div>
                <div class="inner">
                  <div class="heading">Guidance</div>
                  <div class="content-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="content-box-icon">
                      <path d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z" fill="currentColor"></path>
                      <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
                    </svg>
                 <a href="#">  <span class="content-box-text"> How to verify my identity</span> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="modal_btn_theme w-100 btn-yellow btn-select-country">Continue</button>
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
                <div id="country_box">
                    <div class="disable_div d-flex form-control">
                        <div class="img">
                            <img src="{{asset('img/Flag_of_India.jpg') }}" class="flag">
                        </div>
                        <div class="text">
                            <span>India</span>
                        </div>
                        <div class="iconbox">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="form-floating my-3">
                  <input type="text" class="form-control" placeholder="Enter your full name">
                  <label for="floatingInput">Full Name</label>
                </div>
                <div class="form-group">
                  <label class="text-start d-block my-2">Date of Birth</label>
                  <div class="input-group date" id="datepicker">
                    <input type="text" class="form-control" id="date" placeholder="Enter your Date of Birth" />
                    <span class="input-group-append">
                      <span class="input-group-text bg-light">
                        <i class="bi bi-calendar-fill"></i>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
              <!--==============modal body clos here ============-->
              <div class="modal-footer">
                <button class="modal_btn_theme w-100 btn-p-info1">Continue</button>
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
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" placeholder="Residential Address" disable>
                  <label for="floatingInput">Residential Address</label>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" placeholder="Pin Code">
                      <label for="floatingInput">Pin</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" placeholder="City">
                      <label for="floatingInput">City</label>
                    </div>
                  </div>
                </div>
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" placeholder="10 Digit">
                  <label for="floatingInput">PAN Card Number</label>
                </div>
              </div>
              <!--==============modal body clos here ============-->
              <div class="modal-footer">
                <button class="modal_btn_theme w-100 btn-p-info2">Final</button>
              </div>
            </div>
          </div>
            <!--=================================Identity_Verification=====================================-->
            <div id="Identity_Verification" style="display:none">
            <div class="Identity_Verification_step1" style="display:block"><!--///////////////////////////////////////// remove this style according to your convenience-->
               <div class="modal-header">
                <div class="modal-icons">
                  <span class="btn-back" id="back_fourth">
                    <i class="bi bi-arrow-left"></i>
                  </span>
                  <span class="close-modal">
                    <i class="bi bi-x"></i>
                  </span>
                </div>
                <div class="modal_heading">Identity Verification </div>
              </div>
              <div class="modal-body">
                <div class="select_verification_type">
                  <div class="outer">
                    <div class="form-group mb-4">
                      <label class="text-start d-block my-2">Select your document issuing country/region</label>
                      <input type="text" class="form-control" value="{{ $country_code }}"  disabled>
                    </div>
                    <div class="text-start mb-2 fw-bolder">Use a valid government-issued document</div>
                    <div class="text-start text-secondary mb-2 fw-light">Only the following documents listed below will be accepted, all other documents will be rejected.</div>
                    <div class="inner">
                      <div class="document_type">
                        <div class="document_type_inner">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 5h18v14H3V5zm7 5a2 2 0 11-4 0 2 2 0 014 0zm3-1h6v2.5h-6V9zm6 4.5h-6V16h6v-2.5zm-8 0V16H5v-2.5h6z" fill="currentColor"></path>
                          </svg>
                          <div class="_content_box">
                            <div class="_title">ID Card (Aadhaar Digilocker)</div>
                            <div class="_subtitle_box">
                              <div class="_subtitle">Recommended</div>
                            </div>
                          </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_right ">
                          <path d="M19.068 4.932A9.917 9.917 0 0012 2a9.917 9.917 0 00-7.068 2.932A9.917 9.917 0 002 11.988C2 17.521 6.479 22 12 22a9.917 9.917 0 007.068-2.932A9.992 9.992 0 0022 11.988a9.918 9.918 0 00-2.932-7.056zm-8.912 12.234L5.71 12.71l1.42-1.42 3.025 3.024 6.7-6.713 1.421 1.42-8.121 8.145z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="inner document_type_active">
                      <div class="document_type">
                        <div class="document_type_inner">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 5h18v14H3V5zm7 5a2 2 0 11-4 0 2 2 0 014 0zm3-1h6v2.5h-6V9zm6 4.5h-6V16h6v-2.5zm-8 0V16H5v-2.5h6z" fill="currentColor"></path>
                          </svg>
                          <div class="_content_box">
                            <div class="_title">ID Card (Aadhaar Image Upload)</div>
                            <div class="_subtitle_box">
                              <div class="_subtitle">Recommended</div>
                            </div>
                          </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_right document_type_active_icon">
                          <path d="M19.0676 4.93242C17.2577 3.11111 14.7606 2 12 2C9.2394 2 6.74227 3.11111 4.93242 4.93242C3.12257 6.73081 2 9.22795 2 11.9885C2 17.5212 6.47881 22 12 22C14.7606 22 17.2577 20.8889 19.0676 19.0676C20.8774 17.2577 22 14.7491 22 11.9885C22 9.22795 20.8774 6.73081 19.0676 4.93242ZM10.1558 17.1661L5.71134 12.7102L7.13173 11.2898L10.1558 14.3139L16.8568 7.60137L18.2772 9.02176L10.1558 17.1661Z"></path>
                          <defs>
                            <linearGradient id="checkmarkS24_linear" x1="2" y1="12" x2="22" y2="12" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#FCD535"></stop>
                              <stop offset="1" stop-color="#F0B90B"></stop>
                            </linearGradient>
                          </defs>
                        </svg>
                      </div>
                    </div>
                    <div class="inner">
                      <div class="document_type">
                        <div class="document_type_inner">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 5H21V19H3V5ZM14.344 8.50027H19V11.0003H14.344V8.50027ZM14.344 12.9997H19V15.4997H14.344V12.9997ZM5.42549 10.7886H4.98633V11.8929V14.6813H5.784V15.8437H7.21675V14.6813H10.6763V15.8437H12.1091V14.6813H13.0421V11.8929V10.7886H12.6107L11.5333 8.03113H6.52205L5.42549 10.7886ZM6.91546 10.7886L7.48248 9.32871H10.568L11.125 10.7886H6.91546ZM6.50025 11.9237L5.64851 12.7755L6.50025 13.6272L7.352 12.7755L6.50025 11.9237ZM10.6763 12.7755L11.5281 11.9237L12.3798 12.7755L11.5281 13.6272L10.6763 12.7755Z" fill="currentColor"></path>
                          </svg>
                          <div class="_content_box">
                            <div class="_title">Driver's License</div>
                          </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_right">
                          <path d="M19.068 4.932A9.917 9.917 0 0012 2a9.917 9.917 0 00-7.068 2.932A9.917 9.917 0 002 11.988C2 17.521 6.479 22 12 22a9.917 9.917 0 007.068-2.932A9.992 9.992 0 0022 11.988a9.918 9.918 0 00-2.932-7.056zm-8.912 12.234L5.71 12.71l1.42-1.42 3.025 3.024 6.7-6.713 1.421 1.42-8.121 8.145z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="inner">
                      <div class="document_type">
                        <div class="document_type_inner">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19 21L19 3H5V21H19ZM7.0625 16.375H16.9377V18.875H7.0625V16.375ZM9.68639 8.9054H7.74803C8.0505 7.3946 9.13592 6.16661 10.5632 5.66257C10.1082 6.44727 9.7866 7.59308 9.68639 8.9054ZM10.6896 8.9054C10.7704 7.94325 10.98 7.11212 11.2553 6.50284C11.653 5.62294 11.9968 5.5625 12.0116 5.5625C12.0265 5.5625 12.3703 5.62294 12.768 6.50284C13.0433 7.11212 13.2529 7.94325 13.3337 8.9054H10.6896ZM10.654 9.9054H13.3692C13.3545 11.1858 13.1127 12.2967 12.768 13.0597C12.3703 13.9396 12.0265 14 12.0116 14C11.9968 14 11.653 13.9396 11.2553 13.0597C10.9105 12.2967 10.6688 11.1858 10.654 9.9054ZM9.65397 9.9054C9.67083 11.5032 10.0122 12.9234 10.5379 13.8557C8.90394 13.2673 7.72398 11.7279 7.66561 9.9054H9.65397ZM14.3693 9.9054C14.3525 11.5031 14.0111 12.9233 13.4855 13.8556C15.1192 13.267 16.299 11.7278 16.3574 9.9054H14.3693ZM14.3369 8.9054H16.2749C15.9725 7.39474 14.8872 6.16684 13.4602 5.66271C13.9151 6.44741 14.2367 7.59316 14.3369 8.9054Z" fill="currentColor"></path>
                          </svg>
                          <div class="_content_box">
                            <div class="_title">Passport</div>
                          </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="document_type_inner_right">
                          <path d="M19.068 4.932A9.917 9.917 0 0012 2a9.917 9.917 0 00-7.068 2.932A9.917 9.917 0 002 11.988C2 17.521 6.479 22 12 22a9.917 9.917 0 007.068-2.932A9.992 9.992 0 0022 11.988a9.918 9.918 0 00-2.932-7.056zm-8.912 12.234L5.71 12.71l1.42-1.42 3.025 3.024 6.7-6.713 1.421 1.42-8.121 8.145z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--==============modal body clos here ============-->
              <div class="modal-footer">
                <button class="modal_btn_theme w-100">Continue</button>
              </div>
            </div>





            <!--=============Identity_Verification  step-1  end here ==============-->
            <div class="Identity_Verification_step2" style="display:none">  <!--///////////////////////////////////////// remove this style according to your convenience-->
              <div class="modal-header">
                <div class="modal-icons">
                  <span class="btn-back">
                    <i class="bi bi-arrow-left"></i>
                  </span>
                  <span class="close-modal">
                    <i class="bi bi-x"></i>
                  </span>
                </div>
                <div class="modal_heading">Identity_Verification </div>
              </div>

                <div class="aadhar_card">
                      <div class="modal-body">
                  <div class="img-box mt-3 mb-5">
                    <img src="{{ asset('img/card_dummy.png') }}" class="mx-auto d-block modal-card-img" />
                  </div>
                  <div class="">
                    <p class="modal-p">You are about to upload your ID card. Please ensure that:</p>
                    <ul class="modal_ul">
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">This is an original document, not a scan or copy</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">Place documents against a solid-colored background.</div>
                      </li>
                    </ul>

                  </div>
                </div>

                <div class="modal-footer">
                      <button class="modal_btn_theme w-100" id="adhar_btn">continue</button>
                    </div>
                </div>


                <div class="Driving license" style="display:none">  <!--///////////////////////////////////////// remove this style according to your convenience-->
                 <div class="modal-body">

                  <div class="img-box mt-3 mb-5">
                    <img src="{{ asset('img/card_dummy.png') }}" class="mx-auto d-block modal-card-img" />
                  </div>
                  <div class="">
                    <p class="modal-p">You are about to upload your driving license. Please ensure that:</p>
                    <ul class="modal_ul">
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">This is an original document, not a scan or copy</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">Place documents against a solid-colored background.</div>
                      </li>
                    </ul>

                  </div>
               </div>
                 <div class="modal-footer">
                      <button class="modal_btn_theme w-100" id="adhar_btn">continue</button>
                    </div>
                </div>
                <div class="Passport" style="display:none">  <!--///////////////////////////////////////// remove this style according to your convenience-->
                 <div class="modal-body">

                  <div class="img-box mt-3 mb-5">
                    <img src="{{ asset('img/card_dummy.png') }}" class="mx-auto d-block modal-card-img" />
                  </div>
                  <div class="">
                    <p class="modal-p">You are about to upload your passport. Please ensure that:</p>
                    <ul class="modal_ul">
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">This is your own government-issued document that is not expired</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">This is an original document, not a scan or copy</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">Remove any card holders or covers to avoid reflections or blur</div>
                      </li>
                      <li class="modal_li">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                          <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                        </svg>
                        <div class="modal_li_des">Place documents against a solid-colored background.</div>
                      </li>
                    </ul>

                  </div>
                </div>
                  <div class="modal-footer">
                      <button class="modal_btn_theme w-100" id="adhar_btn">continue</button>
                    </div>
                </div>
              </div>
              <!--==============modal body clos here ============-->

            </div>
            <div id="upload_document" style="display:block">
                   <div class="modal-header">
                    <div class="modal-icons">
                      <span class="btn-back">
                        <i class="bi bi-arrow-left"></i>
                      </span>
                      <span class="close-modal">
                        <i class="bi bi-x"></i>
                      </span>
                    </div>
                    <div class="modal_heading">Identity Verification </div>
                  </div>
                  <div class="modal-body">

                    <div class="upld-doc">


            <div class="upld-doc-heading">Upload your ID card</div>

          <div class="upld-doc-main">
            <div class="upld-box">
              <div class="upld-doc-subtitle">Front side of ID Card</div>
              <div class="upld-box-inner">
                <!--<div class="photo-box">-->
                <!--  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" class="upld-box-icon">-->
                <!--    <rect width="16" height="16" rx="8" fill="currentColor"></rect>-->
                <!--    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 11.117l-.883.878-3.122-3.117L4.883 12l-.878-.883L7.117 8 4 4.883l.883-.878 3.112 3.117L11.117 4l.873.883L8.878 8 12 11.117z" fill="#FEFEFE"></path>-->
                <!--  </svg>-->
                <!--</div>-->

                <div class="photo-box1">
                  <div class="photo-box1-inner">
                    <!--<input class="btn-upload" type="file" multiple="" accept="image/jpg,image/jpeg,image/png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer; left: 0px;">-->
                    <button type="button" class="upld-btn-doc">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="cam-icon">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8v11H3V8h3l3-3h6l3 3h3zm-9 2a2.5 2.5 0 110 5 2.5 2.5 0 010-5z" fill="currentColor"></path>
                      </svg>Take photo </button>

                  </div>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div class="upld-box">
              <div class="upld-doc-subtitle">Back side of ID Card</div>
              <div class="upld-box-inner">
                <!--<div class="photo-box">-->
                <!--  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" class="upld-box-icon">-->
                <!--    <rect width="16" height="16" rx="8" fill="currentColor"></rect>-->
                <!--    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 11.117l-.883.878-3.122-3.117L4.883 12l-.878-.883L7.117 8 4 4.883l.883-.878 3.112 3.117L11.117 4l.873.883L8.878 8 12 11.117z" fill="#FEFEFE"></path>-->
                <!--  </svg>-->
                <!--</div>-->

                <div class="photo-box1">
                  <div class="photo-box1-inner">
                    <!--<input class="btn-upload" type="file" multiple="" accept="image/jpg,image/jpeg,image/png" style="position: absolute; width: 100%; height: 100%; opacity: 0; cursor: pointer; left: 0px;">-->
                    <button type="button" class="upld-btn-doc">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="cam-icon">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8v11H3V8h3l3-3h6l3 3h3zm-9 2a2.5 2.5 0 110 5 2.5 2.5 0 010-5z" fill="currentColor"></path>
                      </svg>Take photo </button>

                  </div>
                </div>
              </div>
            </div>
          </div>


              <div class="modal-p mt-3">Ensure that the document meet all the standard below:</div>


            <ul class="modal_ul">
              <li class="modal_li">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                  <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                </svg>
                <div class="modal_li_des">Readable, clear and well-lit</div>
              </li>
              <li class="modal_li">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                  <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                </svg>
                <div class="modal_li_des">Not reflective, not blurry</div>
              </li>
              <li class="modal_li">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                  <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                </svg>
                <div class="modal_li_des">No black and white images, no edited</div>
              </li>
              <li class="modal_li">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_li_svg">
                  <path d="M12.243 8L8 12.243l4.243 4.242 4.242-4.242L12.243 8z" fill="currentColor"></path>
                </svg>
                <div class="modal_li_des">Document is placed against a solid-colored background.</div>
              </li>
            </ul>

      </div>
                     </div>
                  <!--==============modal body clos here ============-->
                   <div class="modal-footer">
                    <button class="modal_btn_theme w-100">Continue</button>
                  </div>

                </div>
            <div id="img_capture" style="display:none">
               <div class="modal-header">
                <div class="modal-icons">
                  <span class="btn-back">
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
  <video id="camera-stream"></video>
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
                  <div class="mt-3">

                    <canvas id="canvas" class="bg-light shadow border border-5 border-success">
                    </canvas>
                  </div>



                </div>

                <!--==============modal body clos here ============-->
               <div class="modal-footer">
                   <div class="footer-div-btn">

                <button id="capture-camera"  class="modal_btn_theme" style="margin:auto;">Take Photo</button>

                 <button disabled id="flip-btn" class="btn btn-sm btn-warning" style="display:none">
                      Flip Camera
                    </button>

                </div>
              </div>


                 </div>
            <div id="img_validation" style="display:none">
               <div class="modal-header">
                <div class="modal-icons">
                  <span class="btn-back">
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
                      <span class="btn-back">
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
                      <span class="btn-back">
                        <i class="bi bi-arrow-left"></i>
                      </span>
                      <span class="close-modal">
                        <i class="bi bi-x"></i>
                      </span>
                    </div>
                    <div class="modal_heading">Take a Selfie </div>
                  </div>
                    <div class="modal-body">
                        <div class="demo-img mb-4 text-start">
                            <p class="mb-4"> Example</p>
                           <img src="{{ asset('img/HTB1Alaue8WD3KVjSZFsq6AqkpXaz.jpg') }}" class="demo" />
                        </div>
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

      <div class="upld-doc-main">
            <div class="upld-box">
              <div class="upld-doc-subtitle">Front side of ID Card</div>
              <div class="upld-box-inner">

                <div class="photo-box1">
                  <div class="photo-box1-inner">
                   <button type="button" class="upld-btn-doc">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="cam-icon">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8v11H3V8h3l3-3h6l3 3h3zm-9 2a2.5 2.5 0 110 5 2.5 2.5 0 010-5z" fill="currentColor"></path>
                      </svg>Take photo </button>
                   </div>
                </div>
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







            <!--==============================main modal div==============-->
            </div>
            </div>






      @include('template.copy_right_footer')
      <a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>
       @include('template.country_language')
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

   <script>





                $(function(){
  $('#datepicker').datepicker();
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
      $(".step1").css({"display":"none"});
      $(".step2").css({"display":"block"});
    });

      $(".btn-p-info2").click(function(){
      $("#Personal_Information").css({"display":"none"});
      $("#Identity_Verification").css({"display":"block"});
    });


          $(".upld-btn-doc").click(function(){
      $("#upload_document").css({"display":"none"});
      $("#img_capture").css({"display":"block"});
    });


    $('.inner').click(function() {
         $(this).siblings().removeClass("document_type_active");
         $(this).siblings().find(".document_type .document_type_inner_right").removeClass("document_type_active_icon");
         $(this).addClass('document_type_active')
         $(this).find(".document_type .document_type_inner_right").addClass("document_type_active_icon");
    });


   $(document).ready(function () {
            $(".niceCountryInputSelector").each(function(i,e){
                new NiceCountryInput(e).init();
            });
        });


   </script>


   <script>
       // camera stream video element
  let on_stream_video = document.querySelector('#camera-stream');
  // flip button element
  let flipBtn = document.querySelector('#flip-btn');

  // default user media options
  let constraints = { audio: false, video: true }
  let shouldFaceUser = true;

  // check whether we can use facingMode
  let supports = navigator.mediaDevices.getSupportedConstraints();
  if( supports['facingMode'] === true ) {
    flipBtn.disabled = false;
  }

  let stream = null;

  function capture() {
    constraints.video = {
        width: {
        min: 192,
        ideal: 192,
        max: 192,
      },
      height: {
        min: 192,
        ideal: 192,
        max: 192
      },
      facingMode: shouldFaceUser ? 'user' : 'environment'
    }
    navigator.mediaDevices.getUserMedia(constraints)
      .then(function(mediaStream) {
        stream  = mediaStream;
        on_stream_video.srcObject = stream;
        on_stream_video.play();
      })
      .catch(function(err) {
        console.log(err)
      });
  }

  flipBtn.addEventListener('click', function(){
    if( stream == null ) return
    // we need to flip, stop everything
    stream.getTracks().forEach(t => {
      t.stop();
    });
    // toggle / flip
    shouldFaceUser = !shouldFaceUser;
    capture();
  })

  capture();

  document.getElementById("capture-camera").addEventListener("click", function() {
    // Elements for taking the snapshot
      const video = document.querySelector('video');
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      canvas.getContext('2d').drawImage(video, 0, 0);
  });
   </script>

    <script>
        function onChangeCallback(ctr){
            $("#country_box").load("{{ url('api/filter/get_country_record') }}",{'country_code':ctr});
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

    </script>



    </body>
</html>
