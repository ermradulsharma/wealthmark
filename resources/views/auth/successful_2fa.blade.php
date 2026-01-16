<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <title>Wealth Mark | Register</title>
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <style>
        .error_border{border:1px solid red;}
        .error_color{font-size: 15px;color: red;text-align: left;}
         .authentication-step .steps {
         list-style: none;
         margin: 0;
         padding: 0;
         display: table;
         table-layout: fixed;
         width: 100%;
         color: #e6e6e6;
         height:4rem;}
         .authentication-step .steps .step {
         position: relative;
         display: table-cell;
         text-align: center;
         font-size: 0.875rem;
         color:#6D6875;}
         .authentication-step .step:before {
         content: attr(data-step);
         display: block;
         margin: 0 auto;
         background: rgb(234, 236, 239);
         border: 2px solid rgb(234, 236, 239);
         color: rgb(112, 122, 138);
         width: 2rem;
         height: 2rem;
         text-align: center;
         margin-bottom: 1rem;
         line-height: 1.9rem;
         border-radius: 100%;
         position: relative;
         z-index: 1;
         font-weight:700;
         font-size:1rem;
         }
         .authentication-step  .step:after {
         content: '';
         position: absolute;
         display: block;
         background: #e6e6e6;
         width: 100%;
         height: 0.25rem;
         top: .9rem;
         left: 50%;
         }
         .authentication-step  .step:last-child:after {
         display: none;
         }
         .authentication-step  .step.is-complete {
         color:#6D6875;}
         .authentication-step   .step.is-complete:before {
         content:
         '\2713';
         color: rgba(254,192,15,1);
         background: #ffffff;
         border: 2px solid  rgba(254,192,15,1);
         }
         .authentication-step   .step.is-complete:after {
         background: rgba(254,192,15,1);
         }
         .authentication-step .step.is-active {
         font-size:1.5rem;}
         .authentication-step   .step.is-active:before {
         color: #FFF;
         border: 2px solid  rgba(254,192,15,1);
         background: rgba(254,192,15,1);
         margin-bottom: 1rem;
         }
         .authentication-step .steps {
         margin-bottom: 3em;
         }
         @media screen and (max-width: 768px) {
         .authentication-step .steps{
         display: flex;
         flex-direction: column;
         align-items: flex-start;
         height: auto;
         }
         .authentication-step .steps .step{
         position: relative;
         display: flex;
         }
         .authentication-step  .step:after {
         content: '';
         position: absolute;
         display: block;
         background: #e6e6e6;
         width: 1%;
         height: 100%;
         top: .9rem;
         left: 46px;
         }
         .authentication-step   .step:before{
         margin-bottom: 3rem;
         margin-left: 30px;
         margin-right: 20px;
         }
         .authentication-step   .step.is-active:before{
         margin-bottom: 3rem;
         }
         }
         .Authenticator .nav-item{
         width:50%;
         }
         .Authenticator .nav-pills .nav-link{
         width:100%;
         }
         .Authenticator .outer-div {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         text-align: center;
         min-height:220px;
         }
         .Authenticator .app-div {
         box-sizing: border-box;
         margin: 0px 0px 24px;
         min-width: 0px;
         display: flex;
         width: 100%;
         }
         .Authenticator .app-link {
         box-sizing: border-box;
         margin: 0px 8px;
         min-width: 0px;
         border-radius: 4px;
         padding-top: 8px;
         padding-bottom: 8px;
         width: 50%;
         color: rgb(30, 35, 41);
         text-align:center;
         }
         .Authenticator .app-icon {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: black;
         font-size: 24px;
         fill: black;
         width: 1em;
         height: 1em;
         }
         .Authenticator .app-text-heading {
         box-sizing: border-box;
         margin: 4px 0px 0px;
         min-width: 0px;
         font-weight: 500;
         font-size: 16px;
         line-height: 24px;
         }
         .Authenticator .bar-code-div {
         box-sizing: border-box;
         margin: 0px 0px 12px;
         min-width: 0px;
         display: flex;
         -webkit-box-pack: center;
         justify-content: center;
         width: 100%;
         }
         .Authenticator .qr-css {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         box-shadow: rgb(24 26 32 / 10%) 0px 0px 1px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(24 26 32 / 4%) 0px 1px 2px;
         border-radius: 4px;
         flex: 0 0 112px;
         padding: 8px;
         text-align: center;
         }
         .Authenticator .qr-description {
         box-sizing: border-box;
         margin: 0px 0px 0px 16px;
         min-width: 0px;
         display: flex;
         flex: 1 1 0%;
         flex-direction: column;
         -webkit-box-pack: center;
         justify-content: center;
         text-align: left;
         }
         .Authenticator .qr-heading {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 500;
         font-size: 14px;
         line-height: 20px;
         color: rgb(30, 35, 41);
         }
         .Authenticator .qr-subtitle {
         box-sizing: border-box;
         margin: 12px 0px 0px;
         min-width: 0px;
         font-weight: 400;
         font-size: 12px;
         line-height: 16px;
         color: rgb(71, 77, 87);
         }
         .Authenticator .qr-info {
         box-sizing: border-box;
         margin: 12px 0px 0px;
         min-width: 0px;
         display: flex;
         }
         .Authenticator .qr-info-svg {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: rgb(146, 154, 165);
         font-size: 16px;
         fill: rgb(146, 154, 165);
         display: none;
         width: 1em;
         height: 1em;
         }
         @media screen and (min-width: 767px)
         {
         .Authenticator .qr-info-svg {
         display: block;
         }}
         .Authenticator .qr-info-txt {
         box-sizing: border-box;
         margin: 0px 0px 0px 4px;
         min-width: 0px;
         font-weight: 400;
         font-size: 12px;
         line-height: 16px;
         flex: 1 1 0%;
         color: rgb(112, 122, 138);
         }
         .Authenticator .Auth-help-div {
         box-sizing: border-box;
         margin: 24px 0px 0px;
         min-width: 0px;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         }
         .Authenticator .Auth-help-icon {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         color: rgb(146, 154, 165);
         font-size: 24px;
         fill: rgb(146, 154, 165);
         width: 1em;
         height: 1em;
         }
         .Authenticator .Auth-help-txt {
         box-sizing: border-box;
         margin: 0px 0px 0px 8px;
         min-width: 0px;
         text-align: left;
         vertical-align: middle;
         font-size: 14px;
         line-height: 20px;
         color: rgb(71, 77, 87);
         text-decoration: underline;
         cursor: pointer;
         }
         .Authenticator .btn-yellow-fw {
         margin: 24px 0px 0px;
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
         font-size: 16px;
         font-family: inherit;
         font-weight: 500;
         text-align: center;
         text-decoration: none;
         outline: none;
         padding: 12px 24px;
         line-height: 24px;
         min-width: 80px;
         word-break: keep-all;
         color: rgb(24, 26, 32);
         border-radius: 4px;
         min-height: 24px;
         border: none;
         background-image: none;
         background-color: rgb(252, 213, 53);
         width: 100%;
         }
         .Authenticator .app-link:hover {
         background-color: rgb(245, 245, 245);
         }
         .Authenticator .app-div-inner {
         box-sizing: border-box;
         margin: 16px 0px 0px;
         min-width: 0px;
         color: rgb(30, 35, 41);
         }
         .Authenticator .app-subtitle {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 400;
         font-size: 14px;
         line-height: 20px;
         color: rgb(112, 122, 138);
         }
         .Authenticator .bar-code-div-inner {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         box-shadow: rgb(24 26 32 / 10%) 0px 0px 1px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(24 26 32 / 4%) 0px 1px 2px;
         border-radius: 4px;
         background-color: rgb(255, 255, 255);
         }
         .Authenticator .unique-key {
         box-sizing: border-box;
         margin: 32px 0px 8px;
         min-width: 0px;
         font-weight: 500;
         font-size: 16px;
         line-height: 24px;
         }
         .Authenticator .subtitle {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         font-weight: 400;
         font-size: 14px;
         line-height: 20px;
         color: rgb(112, 122, 138);
         }
         .Authenticator .auth-btn-divs {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         }
         .Authenticator .auth-btn-divs .previous-btn {
         margin: 40px 0px 0px;
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
         font-size: 16px;
         font-family: inherit;
         font-weight: 500;
         text-align: center;
         text-decoration: none;
         outline: none;
         padding: 12px 24px;
         line-height: 24px;
         min-width: 80px;
         word-break: keep-all;
         color: rgb(30, 35, 41);
         border-radius: 4px;
         min-height: 24px;
         border: none;
         background-color: rgb(234, 236, 239);
         width: 100%;
         }
         .Authenticator .auth-btn-divs .next {
         margin: 40px 0px 0px 16px;
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
         font-size: 16px;
         font-family: inherit;
         font-weight: 500;
         text-align: center;
         text-decoration: none;
         outline: none;
         padding: 12px 24px;
         line-height: 24px;
         min-width: 80px;
         word-break: keep-all;
         color: rgb(24, 26, 32);
         border-radius: 4px;
         min-height: 24px;
         border: none;
         background-image: none;
         background-color: rgb(252, 213, 53);
         width: 100%;
         }
         .Authenticator .error_text{
         text-align:left;
         }
         .tooltip {
         position: relative;
         display: inline-block;
         border-bottom: 1px dotted black;
         opacity:1;
         }
         .tooltip .tooltiptext {
         visibility: hidden;
         width: 250px;
         background-color: black;
         color: #fff;
         text-align: center;
         border-radius: 6px;
         padding: 5px 10px;
         position: absolute;
         z-index: 999999;
         right: 29px;
         left: -50px;
         bottom: 30px;
         }
         .tooltip:hover .tooltiptext {
         visibility: visible;
         }
         .toolLeft {
         top: -5px;
         right: 105%;
         }
         .toolRight {
         top: -5px;
         left: 105%;
         }
         .toolTop {
         bottom: 100%;
         left: 50%;
         margin-left: -60px;
         }
         .toolBottom {
         top: 100%;
         left: 50%;
         margin-left: -60px;
         }
         .timer-counter{
         color:#fec00f;
         }
         .Authenticator  .complet-img{
         max-width:100px;
         margin:20px auto;
         }
         .Authenticator .complete-text {
         font-size: 20px;
         font-weight: 700 !important;
         -webkit-text-stroke: 1px #263674;
         letter-spacing: 1.3px;
         margin-bottom: 15px;
         }
         .back-div {
         box-sizing: border-box;
         margin: 0px;
         min-width: 0px;
         display: flex;
         max-width: 1280px;
         width: 100%;
         padding-left: 16px;
         padding-right: 16px;
         }
         .back-arrow {
         box-sizing: border-box;
         margin: 0px 8px 0px 0px;
         min-width: 0px;
         color: currentcolor;
         font-size: 24px;
         fill: currentcolor;
         width: 1em;
         height: 1em;
         }
         .back-link {
         box-sizing: border-box;
         margin: 0px;
         display: flex;
         font-size: 16px;
         line-height: 24px;
         -webkit-box-align: center;
         align-items: center;
         color: rgb(112, 122, 138) !important;
         padding:10px 20px;
         }
         .back-link .text{
         font-size:24px !important;
         }
         @media screen and (min-width: 1023px){
         .back-div {
         padding-left: 40px;
         padding-right: 40px;
         }
         }
         @media screen and (min-width: 767px)
         {
         .back-div {
         padding-left: 24px;
         padding-right: 24px;
         }
         .back-link {
         font-weight: 500;
         font-size: 20px;
         line-height: 28px;
         }}
         .back-link:hover{
         color:black;
         background:whitesmoke;
         border-radius:5px;
         }
         @media screen and (max-width: 767px){
         .back-div{
         margin-bottom:30px;
         }
         }
      </style>
    </head>
<body class="bg-white">
    @include('template.custom_header')
    <main id="main" >
        <div class="container">
            <div class="back-div">
               <a href="{{ url(app()->getLocale())}}/user/security" target="_self" class="back-link">
                    <span class="back-arrow">
                        <i class="bi bi-chevron-left"></i>
                    </span>
                    <span class="text"> Security </span>
               </a>
            </div>
        </div>

        <section class="inner-page register Authenticator pt-0 pb-0 mt-0">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-md-5">
                        <div id="Auth-complete" style="display:none">
                            <div class="outer-div">
                                <div class="bar-code-div">
                                  <img src="{{ asset('img/auth-icons/create-account.svg') }}" class="complet-img">
                                </div>
                                <div class="complete-text">Google Authenticator Enabled</div>
                                <div class="subtitle">If you are unable to scan the QR code, please enter this code manually into the app.</div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>
    </main>
    @include('template.copy_right_footer')
   </body>
</html>
