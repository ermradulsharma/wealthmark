<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <title>Wealth Mark | Register</title>
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
      <style>
       /**/
        #pills-home {
            background-color: transparent!important;
            padding: 0px 0px;
        }
        .error_border{border:1px solid red;}
        .error_color{font-size: 15px;color: red;text-align: left;}

         /*.authentication-step .steps {*/
         /*list-style: none;*/
         /*margin: 0;*/
         /*padding: 0;*/
         /*display: table;*/
         /*table-layout: fixed;*/
         /*width: 100%;*/
         /*color: #e6e6e6;*/
         /*height:4rem;}*/
         /*.authentication-step .steps .step {*/
         /*position: relative;*/
         /*display: table-cell;*/
         /*text-align: center;*/
         /*font-size: 0.875rem;*/
         /*color:#6D6875;}*/

         /*.authentication-step .step:before {*/
         /*content: attr(data-step);*/
         /*display: block;*/
         /*margin: 0 auto;*/
         /*background: rgb(234, 236, 239);*/
         /*border: 2px solid rgb(234, 236, 239);*/
         /*color: rgb(112, 122, 138);*/
         /*width: 2rem;*/
         /*height: 2rem;*/
         /*text-align: center;*/
         /*margin-bottom: 1rem;*/
         /*line-height: 1.9rem;*/
         /*border-radius: 100%;*/
         /*position: relative;*/
         /*z-index: 1;*/
         /*font-weight:700;*/
         /*font-size:1rem;*/
         /*}*/
         /*.authentication-step  .step:after {*/
         /*content: '';*/
         /*position: absolute;*/
         /*display: block;*/
         /*background: #e6e6e6;*/
         /*width: 100%;*/
         /*height: 0.25rem;*/
         /*top: .9rem;*/
         /*left: 50%;*/
         /*}*/
         /*.authentication-step  .step:last-child:after {*/
         /*display: none;*/
         /*}*/
         /*.authentication-step  .step.is-complete {*/
         /*color:#6D6875;}*/
         /*.authentication-step   .step.is-complete:before {*/
         /*content:*/
         /*'\2713';*/
         /*color: rgba(254,192,15,1);*/
         /*background: #ffffff;*/
         /*border: 2px solid  rgba(254,192,15,1);*/
         /*}*/
         /*.authentication-step   .step.is-complete:after {*/
         /*background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
         /*}*/
         /*.authentication-step .step.is-active {*/
         /*font-size:1.5rem;}*/
         /*.authentication-step   .step.is-active:before {*/
         /*color: #FFF;*/
         /*border: 2px solid  rgba(254,192,15,1);*/
         /*background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
         /*margin-bottom: 1rem;*/
         /*}*/
         /*.authentication-step .steps {*/
         /*margin-bottom: 3em;*/
         /*}    */


         /*@media screen and (max-width: 768px) {*/
         /*.authentication-step .steps{*/
         /*display: flex;*/
         /*flex-direction: column;*/
         /*align-items: flex-start;*/
         /*height: auto;*/
         /*}*/
         /*.authentication-step .steps .step{*/
         /*position: relative;*/
         /*display: flex;*/
         /*}*/
         /*.authentication-step  .step:after {*/
         /*content: '';*/
         /*position: absolute;*/
         /*display: block;*/
         /*background: #e6e6e6;*/
         /*width: 1%;*/
         /*height: 100%;*/
         /*top: .9rem;*/
         /*left: 46px;*/
         /*}*/
         /*.authentication-step   .step:before{*/
         /*margin-bottom: 3rem;*/
         /*margin-left: 30px;*/
         /*margin-right: 20px;*/
         /*}*/
         /*.authentication-step   .step.is-active:before{*/
         /*margin-bottom: 3rem;*/
         /*}*/
         /*}*/



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
         box-shadow: rgb(24 26 32 / 10%) 0px 0px 1px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(24 26 32 / 4%) 0px 1px 2px;
         box-sizing: border-box;
         margin: 0px 8px;
         min-width: 0px;
         border-radius: 4px;
         padding-top: 20px;
         padding-bottom: 20px;
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
         /*.Authenticator .btn-yellow-fw {*/
         /*margin: 24px 0px 0px;*/
         /*appearance: none;*/
         /*user-select: none;*/
         /*cursor: pointer;*/
         /*overflow: hidden;*/
         /*text-overflow: ellipsis;*/
         /*white-space: nowrap;*/
         /*display: inline-flex;*/
         /*-webkit-box-align: center;*/
         /*align-items: center;*/
         /*-webkit-box-pack: center;*/
         /*justify-content: center;*/
         /*box-sizing: border-box;*/
         /*font-size: 16px;*/
         /*font-family: inherit;*/
         /*font-weight: 500;*/
         /*text-align: center;*/
         /*text-decoration: none;*/
         /*outline: none;*/
         /*padding: 12px 24px;*/
         /*line-height: 24px;*/
         /*min-width: 80px;*/
         /*word-break: keep-all;*/
         /*color: rgb(24, 26, 32);*/
         /*border-radius: 4px;*/
         /*min-height: 24px;*/
         /*border: none;*/
         /*background-image: none;*/
         /*background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
         /*width: 100%;*/
         /*}*/
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
         /*.Authenticator .auth-btn-divs .previous-btn {*/
         /*margin: 40px 0px 0px;*/
         /*appearance: none;*/
         /*user-select: none;*/
         /*cursor: pointer;*/
         /*overflow: hidden;*/
         /*text-overflow: ellipsis;*/
         /*white-space: nowrap;*/
         /*display: inline-flex;*/
         /*-webkit-box-align: center;*/
         /*align-items: center;*/
         /*-webkit-box-pack: center;*/
         /*justify-content: center;*/
         /*box-sizing: border-box;*/
         /*font-size: 16px;*/
         /*font-family: inherit;*/
         /*font-weight: 500;*/
         /*text-align: center;*/
         /*text-decoration: none;*/
         /*outline: none;*/
         /*padding: 12px 24px;*/
         /*line-height: 24px;*/
         /*min-width: 80px;*/
         /*word-break: keep-all;*/
         /*color: rgb(30, 35, 41);*/
         /*border-radius: 4px;*/
         /*min-height: 24px;*/
         /*border: none;*/
         /*background-color: rgb(234, 236, 239);*/
         /*width: 100%;*/
         /*}*/
         /*.Authenticator .auth-btn-divs .next {*/
         /*margin: 40px 0px 0px 16px;*/
         /*appearance: none;*/
         /*user-select: none;*/
         /*cursor: pointer;*/
         /*overflow: hidden;*/
         /*text-overflow: ellipsis;*/
         /*white-space: nowrap;*/
         /*display: inline-flex;*/
         /*-webkit-box-align: center;*/
         /*align-items: center;*/
         /*-webkit-box-pack: center;*/
         /*justify-content: center;*/
         /*box-sizing: border-box;*/
         /*font-size: 16px;*/
         /*font-family: inherit;*/
         /*font-weight: 500;*/
         /*text-align: center;*/
         /*text-decoration: none;*/
         /*outline: none;*/
         /*padding: 12px 24px;*/
         /*line-height: 24px;*/
         /*min-width: 80px;*/
         /*word-break: keep-all;*/
         /*color: rgb(24, 26, 32);*/
         /*border-radius: 4px;*/
         /*min-height: 24px;*/
         /*border: none;*/
         /*background-image: none;*/
         /*background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
         /*width: 100%;*/
         /*}*/
         .Authenticator .error_text{
         text-align:left;
         }
         /*.tooltip {*/
         /*position: relative;*/
         /*display: inline-block;*/
         /*border-bottom: 1px dotted black;*/
         /*opacity:1;*/
         /*}*/
         /*.tooltip .tooltiptext {*/
         /*visibility: hidden;*/
         /*width: 250px;*/
         /*background-color: black;*/
         /*color: #fff;*/
         /*text-align: center;*/
         /*border-radius: 6px;*/
         /*padding: 5px 10px;*/
         /*position: absolute;*/
         /*z-index: 999999;*/
         /*right: 29px;*/
         /*left: -50px;*/
         /*bottom: 30px;*/
         /*}*/
         /*.tooltip:hover .tooltiptext {*/
         /*visibility: visible;*/
         /*}		*/
         /*.toolLeft {*/
         /*top: -5px;*/
         /*right: 105%;*/
         /*}					*/
         /*.toolRight {*/
         /*top: -5px;*/
         /*left: 105%;*/
         /*}*/
         /*.toolTop {*/
         /*bottom: 100%;*/
         /*left: 50%;*/
         /*margin-left: -60px;*/
         /*}*/
         /*.toolBottom {*/
         /*top: 100%;*/
         /*left: 50%;*/
         /*margin-left: -60px;*/
         /*}*/
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
         /*.back-div {*/
         /*box-sizing: border-box;*/
         /*margin: 0px;*/
         /*min-width: 0px;*/
         /*display: flex;*/
         /*max-width: 1280px;*/
         /*width: 100%;*/
         /*padding-left: 16px;*/
         /*padding-right: 16px;*/
         /*}*/
         /*.back-arrow {*/
         /*box-sizing: border-box;*/
         /*margin: 0px 8px 0px 0px;*/
         /*min-width: 0px;*/
         /*color: currentcolor;*/
         /*font-size: 24px;*/
         /*fill: currentcolor;*/
         /*width: 1em;*/
         /*height: 1em;*/
         /*}*/
         /*.back-link {*/
         /*box-sizing: border-box;*/
         /*margin: 0px;*/
         /*display: flex;*/
         /*font-size: 16px;*/
         /*line-height: 24px;*/
         /*-webkit-box-align: center;*/
         /*align-items: center;*/
         /*color: rgb(112, 122, 138) !important;*/
         /*padding:10px 20px;*/
         /*}*/
         /*.back-link .text{*/
         /*font-size:24px !important;*/
         /*}*/
         /*@media screen and (min-width: 1023px){*/
         /*.back-div {*/
         /*padding-left: 40px;*/
         /*padding-right: 40px;*/
         /*}*/
         /*}*/
         /*@media screen and (min-width: 767px)*/
         /*{*/
         /*.back-div {*/
         /*padding-left: 24px;*/
         /*padding-right: 24px;*/
         /*}*/
         /*.back-link {*/
         /*font-weight: 500;*/
         /*font-size: 20px;*/
         /*line-height: 28px;*/
         /*}*/

         /*} */
         /*.back-link:hover{*/
         /*color:black;*/
         /*background:whitesmoke;*/
         /*border-radius:5px;*/
         /*}*/
         /*@media screen and (max-width: 767px){*/
         /*.back-div{*/
         /*margin-bottom:30px;*/
         /*}*/
         /*}*/
      </style>
    </head>
<body class="bg-white d">
    @include('template.custom_header')
    <main id="main" >
        <div class="container">
            <div class="back-div">
               <a href="{{ url(app()->getLocale())}}/user/security" target="_self" class="back-link">
                    <span class="back-arrow">
                        <i class="bi bi-chevron-left"></i>
                    </span>
                    <span class="text">   Security </span>
               </a>
            </div>
        </div>

        <section class="inner-page authentication-step pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="mb-3 pb-4">
                            <h2 class="mb-4 text-center">Enable Wealthmark/Google Authenticator</h2>
                        </div>
                        <ol class="steps">
                            <li id="step-1" class="step is-active" data-step="1">
                               Download App
                            </li>

                            <li id="step-2" class="step" data-step="2">
                               Scan QR Code
                            </li>

                            <li id="step-3" class="step" data-step="3">
                               Backup Key
                            </li>

                            <li id="step-4" class="step" data-step="4">
                               Enable Wealthmark / Google Authenticator
                            </li>

                            <li id="step-5" class="step " data-step="5">
                               Complete
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

    <section class="inner-page register Authenticator pt-0 pb-0 mt-0">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-md-5">
                    <div id="Auth-first-step">
                        <h3 class="mb-4 text-center">Download and install the <br> Authenticator app </h3>
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Wealthmark Authenticator</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Google Authenticator</button>
                           </li>
                        </ul>

                        <div class="tab-content mb-4" id="pills-tabContent">
                            <div class="tab-pane fade show active pb-4" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="outer-div">
                                    <div class="app-div">
                                        <a href="javascript:void(0)" target="_blank" class="app-link">
                                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="app-icon">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.69 1.978c.133 1.149-.345 2.28-1.046 3.112-.73.819-1.9 1.445-3.037 1.364-.15-1.104.428-2.28 1.073-2.996.73-.815 1.997-1.438 3.01-1.48zm3.64 6.17c-.135.076-2.231 1.27-2.208 3.699.026 2.94 2.707 3.912 2.739 3.922-.015.069-.42 1.403-1.424 2.757-.84 1.193-1.72 2.359-3.116 2.38-.665.014-1.113-.168-1.58-.357-.488-.197-.996-.402-1.79-.402-.843 0-1.374.212-1.886.416-.442.177-.87.349-1.474.372-1.33.047-2.347-1.273-3.217-2.454-1.738-2.413-3.092-6.8-1.277-9.786.88-1.464 2.484-2.406 4.197-2.432.755-.014 1.48.262 2.114.504.485.186.918.35 1.273.35.312 0 .733-.158 1.224-.343.773-.291 1.72-.648 2.683-.552.659.018 2.536.247 3.745 1.924l-.003.002z" fill="currentColor"></path>
                                           </svg>
                                           <div class="app-div-inner">
                                              <div class="app-text-heading">App Store</div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0)" target="_blank" class="app-link">
                                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="app-icon">
                                              <path d="M13.559 11.087l-9.477-9.49h.092c.812 0 1.512.294 2.637.902l9.938 5.382-3.19 3.206zM12.637 12.008L2.902 21.72c-.24-.387-.405-1.014-.405-1.916V4.194c0-.903.165-1.53.405-1.917l9.735 9.731zM13.559 12.912l3.19 3.207L6.81 21.5c-1.125.608-1.826.904-2.637.904h-.092l9.477-9.492zM17.944 8.526l-3.466 3.483 3.466 3.465 2.102-1.143C20.82 13.907 22 13.133 22 12.009c0-1.143-1.18-1.917-1.954-2.34l-2.102-1.143z" fill="currentColor"></path>
                                            </svg>
                                           <div class="app-div-inner">
                                              <div class="app-text-heading">Android APK</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="bar-code-div">
                                        <div class="qr-css">
                                           <img src="" class="qr-img" />
                                        </div>
                                        <div class="qr-description">
                                           <div class="qr-heading">Scan to download</div>
                                           <div class="qr-subtitle">iOS &amp; Android</div>
                                           <div class="qr-info">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="qr-info-svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                                              </svg>
                                              <div class="qr-info-txt">Scan this with your inbuilt phone camera or browser.</div>
                                           </div>
                                        </div>
                                    </div>

                                    <div class="Auth-help-div">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Auth-help-icon">
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                                        </svg>
                                        <a href="javascript:void(0)" target="_blank" class="Auth-help-txt">How to set up Wealthmark/Google Authenticator</a>
                                    </div>
                                </div>
                                <button type="button" id="auth_1_complete" class="btn-yellow-fw btn-yellow border-0 w-100 mt-5">Next</button>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="outer-div">
                                    <div class="app-div">
                                        <a href="javascript:void(0)" target="_blank" class="app-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="app-icon">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.69 1.978c.133 1.149-.345 2.28-1.046 3.112-.73.819-1.9 1.445-3.037 1.364-.15-1.104.428-2.28 1.073-2.996.73-.815 1.997-1.438 3.01-1.48zm3.64 6.17c-.135.076-2.231 1.27-2.208 3.699.026 2.94 2.707 3.912 2.739 3.922-.015.069-.42 1.403-1.424 2.757-.84 1.193-1.72 2.359-3.116 2.38-.665.014-1.113-.168-1.58-.357-.488-.197-.996-.402-1.79-.402-.843 0-1.374.212-1.886.416-.442.177-.87.349-1.474.372-1.33.047-2.347-1.273-3.217-2.454-1.738-2.413-3.092-6.8-1.277-9.786.88-1.464 2.484-2.406 4.197-2.432.755-.014 1.48.262 2.114.504.485.186.918.35 1.273.35.312 0 .733-.158 1.224-.343.773-.291 1.72-.648 2.683-.552.659.018 2.536.247 3.745 1.924l-.003.002z" fill="currentColor"></path>
                                            </svg>
                                            <div class="app-div-inner">
                                              <div class="app-subtitle">Download from</div>
                                              <div class="app-text-heading">App Store</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" target="_blank" class="app-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="app-icon">
                                              <path d="M13.559 11.087l-9.477-9.49h.092c.812 0 1.512.294 2.637.902l9.938 5.382-3.19 3.206zM12.637 12.008L2.902 21.72c-.24-.387-.405-1.014-.405-1.916V4.194c0-.903.165-1.53.405-1.917l9.735 9.731zM13.559 12.912l3.19 3.207L6.81 21.5c-1.125.608-1.826.904-2.637.904h-.092l9.477-9.492zM17.944 8.526l-3.466 3.483 3.466 3.465 2.102-1.143C20.82 13.907 22 13.133 22 12.009c0-1.143-1.18-1.917-1.954-2.34l-2.102-1.143z" fill="currentColor"></path>
                                            </svg>
                                            <div class="app-div-inner">
                                              <div class="app-subtitle">Download from</div>
                                              <div class="app-text-heading">Google Play</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="Auth-help-div">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="Auth-help-icon">
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                                        </svg>
                                        <a href="javascript:void(0)" target="_blank" class="Auth-help-txt">How to set up Wealthmark/Google Authenticator</a>
                                    </div>
                                </div>
                                <button type="button" id="auth_1_complet_app" class="btn-yellow-fw btn-yellow border-0 w-100">Next</button>
                            </div>
                        </div>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------->
                    <div id="Auth-second-step" style="display:none">
                        <h3 class="mb-4 text-center">Scan this QR code in the  <br> Authenticator app </h3>
                        <div class="outer-div mt-4">
                            <div class="bar-code-div">
                                <div class="bar-code-div-inner">
                                    <div class="qr-img"><img src="{!! $QR_Image !!}"></div>
                                </div>
                            </div>
                            <div class="unique-key">{{$secret}}</div>
                            <input type="hidden" id="code" value="{{$secret}}">
                            <div class="subtitle">If you are unable to scan the QR code, please enter this code manually into the app.</div>
                        </div>
                        <!--<a href="{{ url( app()->getLocale(), 'verify_google_authenticator') }}" class="btn btn-primary">Complete Registration</a>-->
                        <div class="auth-btn-divs mt-5">
                            <button type="button" id="back_1_step" class="previous-btn btn-default border-0 w-50">Previous</button>
                            &nbsp;
                            <button type="button" id="auth_2_complete" class="next btn-yellow border-0 w-50">Next</button>
                        </div>
                    </div>

                    <div id="Auth-third-step" style="display:none">
                        <h3 class="mb-4 text-center">Save this Backup Key in a  <br> secure location </h3>
                        <div class="outer-div">
                           <!--<div class="bar-code-div">-->
                           <!--   <div class="bar-code-div-inner">-->
                           <!--      <img src="" class="qr-img" />-->
                           <!--   </div>-->
                           <!--</div>-->
                           <div class="unique-key">{{$secret}}</div>
                           <div class="subtitle">This Key will allow you to recover your Authenticator should you lose your phone.<br> Otherwise, resetting Wealthmark/Google Authenticator will take at least 7 days.</div>
                        </div>

                        <div class="auth-btn-divs">
                           <button type="button" id="back_2_step" class="previous-btn btn-default border-0 w-50">Previous</button>
                            &nbsp;
                           <button type="button" id="auth_3_complete" class="next btn-yellow border-0 w-50">Next</button>
                        </div>
                    </div>

                    <div id="Auth-fourth-step" style="display:none">
                        <h3 class="mb-4 text-center">Save this Backup Key in a  <br> secure location </h3>
                        <div class="outer-div">
                            <form action="" method="post" id="authenticator_otp_frm">
                                <!--<form action="{{url("verify_google_authenticator")}}" method="POST">-->
                                @csrf
                                @if(Auth::user()->email !='' and Auth::user()->is_mail_verified=='1')
                                    <div class="verification_div">
                                        <div class="verification_main">
                                            <div class="verification_inner potp_verification_inner inner-css" id="email_error_border">
                                               <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="e_otp" name="e_opt" class="verification_textbox" value="">
                                               <div class="getCode_outer">
                                                  <div class="getCode_inner Get_Code_e" style="display:block" onclick="e_start()">Get Code</div>
                                                  <div class="getCode_inner code_sent_e" style="display:none" >
                                                     Verification Code Sent
                                                     <span class="tooltip txt_info">
                                                     <i class="bi bi-info-circle-fill"></i>
                                                     <span class="tooltiptext toolTop">
                                                     Haven’t received code? Request new code in
                                                     <span class="timer-counter" id="count_e">120</span>
                                                     <span id="text">seconds</span>
                                                     The code will expire after 30 mins.
                                                     </span>
                                                     </span>
                                                  </div>
                                               </div>
                                               <label class="wm_label wm_label_error">Email Verification Code</label>
                                            </div>
                                        </div>
                                        <div class="verification_innerInfo  error_text">Enter the 6-digit code sent to <span>{{$email_data}}</span> </div>
                                        <div id="e_otp_err" class="error_color"></div>
                                    </div>
                                @else
                                <input type="hidden" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Email Verification Code" id="e_otp" name="e_opt" class="verification_textbox" value="000000">
                                @endif

                                @if(Auth::user()->phone !='' and Auth::user()->is_phone_verified=='1')
                                    <div class="verification_div mt-3">
                                        <div class="verification_main">
                                            <div class="verification_inner potp_verification_inner inner-css" id="phone_error_border">
                                               <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="p_otp" name="p_otp" class="verification_textbox" value="">
                                               <div class="getCode_outer">
                                                  <div class="getCode_inner Get_Code_p" style="display:block" onclick="p_start()">Get Code</div>
                                                  <div class="getCode_inner code_sent_p" style="display:none" >
                                                     Verification Code Sent
                                                     <span class="tooltip txt_info">
                                                     <i class="bi bi-info-circle-fill"></i>
                                                     <span class="tooltiptext toolTop">
                                                     Haven’t received code? Request new code in
                                                     <span class="timer-counter" id="count_p">120</span>
                                                     <span id="text">seconds</span>
                                                     The code will expire after 30 mins.
                                                     </span>
                                                     </span>
                                                  </div>
                                               </div>
                                               <label class="wm_label wm_label_error">Phone Verification Code</label>
                                            </div>
                                        </div>
                                        <div class="verification_innerInfo error_text">Enter the 6-digit code sent to <span>{{$phone_data}}</span> </div>
                                        <div id="p_otp_err" class="error_color"></div>
                                    </div>
                                @else
                                 <input type="hidden" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" aria-label="Phone Number Verification Code" id="p_otp" name="p_otp" class="verification_textbox" value="000000">
                                @endif
                                    <div class="verification_div mt-3">
                                        <div class="verification_main">
                                            <div class="verification_inner  inner-css">
                                               <input type="text" class="verification_textbox" id="o_otp" name="o_otp" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                               <label class="wm_label wm_label_error">Authenticator Code</label>
                                            </div>
                                        </div>
                                        <span class="error"> </span>
                                        <div class="verification_innerInfo error_text">Enter the 6-digit code from Wealthmark/Google Authenticator</div>
                                        <div id="o_otp_err" class="error_color"></div>
                                    </div>
                                    <div class="my-3"><span class="text-muted"><a href="" class="text-theme-yellow"> Security verification unavailable?</a></span></div>
                                    <!--<button type="submit" id="auth_4_complete" class="next">Next</button>-->
                            </form>
                        </div>

                        <div class="auth-btn-divs">
                            <button type="button" id="back_3_step" class="previous-btn btn-default w-50 border-0">Previous</button>
                            &nbsp;
                            <!--<button type="submit" id="auth_4_complete" class="next">Next</button>-->
                            <button type="submit" id="auth_4_complete" onclick=final_next() class="next btn-yellow w-50 border-0">Next</button>
                            <!--<a href="{{ url('home') }}">complete</a>-->
                        </div>
                    </div>

                    <div id="Auth-complete" style="display:none">
                        <div class="outer-div">
                            <div class="bar-code-div">
                              <img src="{{ asset('img/auth-icons/create-account.svg') }}" class="complet-img">
                            </div>
                            <div class="complete-text">Authenticator Enabled Successfully</div>
                            <div class="subtitle">You have successfully Google Authenticator to protect your account.</div>
                            <div class="auth-btn-divs">
                               <a href="{{ url(app()->getLocale())}}/user/security" class="next btn-default m-auto mt-5">Back to Secutiry</a>
                            </div>
                        </div>
                    </div>

                  </div>
               </div>
            </div>
         </section>
      </main>
      @include('template.copy_right_footer')
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>

      <script>
            function e_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("count_e");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".code_sent_e").css("display", "none");
                  $(".Get_Code_e").css("display", "block");
                }
              }, 1000);
            };

            function p_start(){
              var counter = 120;
              setInterval(function() {
                counter--;
                if (counter >= 0) {
                  span = document.getElementById("count_p");
                  span.innerHTML = counter;
                }
                if (counter === 0) {
                    clearInterval(counter);
                  $(".code_sent_p").css("display", "none");
                  $(".Get_Code_p").css("display", "block");
                }
              }, 1000);
            };

        function final_next() {
            var _token = $("input[name=_token]").val();
            var e_otp = $('#e_otp').val();
            var p_otp = $('#p_otp').val();
            var o_otp = $('#o_otp').val();
            if(e_otp==""){
                $('#e_otp_err').html("Please enter email otp");
                $('#email_error_border').addClass('error_border');
                return true;
            }

            if(p_otp==""){
                $('#p_otp_err').html("Please enter phone otp");
                $('#phone_error_border').addClass('error_border');
                return true;
            }

            if(o_otp==""){
                $('#o_otp_err').html("Please enter authenticator otp");
                $('#o_otp').addClass('error_border');
                return true;
            }

            if((o_otp!="" & o_otp.length==6) & (p_otp!="" & p_otp.length==6) & (e_otp!="" & e_otp.length==6)){
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'verify_google_authenticator') }}",
                    data:{'e_otp':e_otp, 'p_otp':p_otp, 'o_otp':o_otp, '_token':_token},
                    success:function(data,status){
                        if(status=="success"){
                            $('#step-4').addClass("is-complete");
                            $('#step-5').addClass("is-active is-complete");
                            $("#Auth-fourth-step").css("display", "none");
                            $("#Auth-complete").css("display", "block");
                            triggerAlert('Google authenticator enabled successfully', 'success');

                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.error, 'error');
                    }
                });
            }
        }


        // $("#auth_4_complete").click(function(){
        //         $('#step-4').addClass("is-complete");
        //         $('#step-5').addClass("is-active");
        //         $("#Auth-fourth-step").css("display", "none");
        //         $("#Auth-complete").css("display", "block");
        //     });

         $('.tooltips').append("<span></span>");
            $('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');

            $(".tooltips").mouseenter(function(){
               $(this).find('span').empty().append($(this).attr('tooltip'));
            });

            $(".Get_Code_p").click(function(){
                //$(".Get_Code_p").css("display", "none");
                //$(".code_sent_p").css("display", "block");
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_phone') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            $(".Get_Code_p").css("display", "none");
                            $(".code_sent_p").css("display", "block");
                            triggerAlert('OTP sent on your registered phone number', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        $('#email_err').html(erroJson.error);
                        $('#email').addClass('error_border');
                    }
                });
            });

            $(".Get_Code_e").click(function(){
                // $(".Get_Code_e").css("display", "none");
                // $(".code_sent_e").css("display", "block");
                var _token = $("input[name=_token]").val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'send_otp_by_secure_email_authenticator') }}",
                    data:{ '_token':_token},
                    success:function(data,status){
                           if(status=="success"){
                            //$("#getCode_email").html(data.email_data);
                            $(".Get_Code_e").css("display", "none");
                            $(".code_sent_e").css("display", "block");
                            triggerAlert('OTP sent on your email address', 'success');
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        //$('#email_err').html(erroJson.error);
                        //$('#email').addClass('error_border');
                    }
                });
            });

            $("#auth_1_complete").click(function(){
                $('#step-1').addClass("is-complete");
                $('#step-2').addClass("is-active");
                $("#Auth-first-step").css("display", "none");
                $("#Auth-second-step").css("display", "block");
            });

            $("#auth_1_complet_app").click(function(){
                $("#Auth-first-step").css("display", "none");
                $("#Auth-second-step").css("display", "block");
            });

            $("#auth_2_complete").click(function(){
                $('#step-2').addClass("is-complete");
                $('#step-3').addClass("is-active");
                $("#Auth-second-step").css("display", "none");
                $("#Auth-third-step").css("display", "block");
            });

            $("#auth_3_complete").click(function(){
                var _token = $("input[name=_token]").val();
                var code = $('#code').val();
                $.ajax({
                    type:'POST',
                    url:"{{ url( app()->getLocale(), 'associate_secret_key') }}",
                    data:{ '_token':_token,'code':code},
                    success:function(data,status){
                        if(status=="success"){
                            $('#step-3').addClass("is-complete");
                            $('#step-4').addClass("is-active");
                            $("#Auth-third-step").css("display", "none");
                            $("#Auth-fourth-step").css("display", "block");
                        }else{
                          triggerAlert(status, 'error');
                        }
                    },error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert('Somthing went wrong', 'error');
                    }
                });
            });



           // back_1_step
            $("#back_1_step").click(function(){
                $('#step-1').removeClass("is-complete");
                $('#step-2').removeClass("is-active");
                $('#step-1').addClass("is-active");
                $("#Auth-first-step").css("display", "block");
                $("#Auth-second-step").css("display", "none");
            });

            $("#back_2_step").click(function(){
                $('#step-2').removeClass("is-complete");
                $('#step-3').removeClass("is-active");
                $('#step-2').addClass("is-active");
                $("#Auth-second-step").css("display", "block");
                $("#Auth-third-step").css("display", "none");
            });

            $("#back_3_step").click(function(){
                $('#step-3').removeClass("is-complete");
                $('#step-4').removeClass("is-active");
                $('#step-3').addClass("is-active");
                $("#Auth-third-step").css("display", "block");
                $("#Auth-fourth-step").css("display", "none");
            });
            //   Auth-second-step
      </script>
   </body>
</html>
