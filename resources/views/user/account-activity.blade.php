<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <title>Wealth Mark | Account Activity Records</title>
      @include('template.web_css')
      <!--<link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">-->
      <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
      <style>
       /* table.dataTable thead th, table.dataTable thead td {*/
       /*     padding: 10px 18px;*/
       /*     border-bottom: 1px solid transparent!important;*/
       /* }*/
       /* table.dataTable.no-footer {*/
       /*     border-bottom: 1px solid transparent!important;*/
       /* }*/
       /*.page-item.disabled .page-link {*/
       /*      border-color: transparent; */
       /* }*/
       /* .page-link:focus {*/
       /*     box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 0%);*/
       /* }*/
       /* .page-item.active .page-link {*/
       /*     z-index: 3;*/
       /*     color: black;*/
       /*     background-color: #fdcb08;*/
       /*     border-color: transparent;*/
       /* }*/
       /* .page-link {*/
       /*     color: black;*/
       /*     border: 1px solid transparent;*/
       /* }*/
       /* .text-line-height{line-height:50px;}*/
       /* .thead-shadow{box-shadow: rgb(20 21 26 / 4%) 0px 1px 2px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(20 21 26 / 10%) 0px 0px 1px;}*/
       /* #pills-home {*/
       /*     background-color: transparent!important;*/
       /*     padding: 0px 0px;*/
       /* }*/
       /* .error_border{border:1px solid red;}*/
       /* .error_color{font-size: 15px;color: red;text-align: left;}*/
       /* .authentication-step .steps {*/
       /*  list-style: none;*/
       /*  margin: 0;*/
       /*  padding: 0;*/
       /*  display: table;*/
       /*  table-layout: fixed;*/
       /*  width: 100%;*/
       /*  color: #e6e6e6;*/
       /*  height:4rem;}*/
       /*  .authentication-step .steps .step {*/
       /*  position: relative;*/
       /*  display: table-cell;*/
       /*  text-align: center;*/
       /*  font-size: 0.875rem;*/
       /*  color:#6D6875;}*/
       /*  .authentication-step .step:before {*/
       /*  content: attr(data-step);*/
       /*  display: block;*/
       /*  margin: 0 auto;*/
       /*  background: rgb(234, 236, 239);*/
       /*  border: 2px solid rgb(234, 236, 239);*/
       /*  color: rgb(112, 122, 138);*/
       /*  width: 2rem;*/
       /*  height: 2rem;*/
       /*  text-align: center;*/
       /*  margin-bottom: 1rem;*/
       /*  line-height: 1.9rem;*/
       /*  border-radius: 100%;*/
       /*  position: relative;*/
       /*  z-index: 1;*/
       /*  font-weight:700;*/
       /*  font-size:1rem;*/
       /*  }*/
       /*  .authentication-step  .step:after {*/
       /*  content: '';*/
       /*  position: absolute;*/
       /*  display: block;*/
       /*  background: #e6e6e6;*/
       /*  width: 100%;*/
       /*  height: 0.25rem;*/
       /*  top: .9rem;*/
       /*  left: 50%;*/
       /*  }*/
       /*  .authentication-step  .step:last-child:after {*/
       /*  display: none;*/
       /*  }*/
       /*  .authentication-step  .step.is-complete {*/
       /*  color:#6D6875;}*/
       /*  .authentication-step   .step.is-complete:before {*/
       /*  content:*/
       /*  '\2713';*/
       /*  color: rgba(254,192,15,1);*/
       /*  background: #ffffff;*/
       /*  border: 2px solid  rgba(254,192,15,1);*/
       /*  }*/
       /*  .authentication-step   .step.is-complete:after {*/
       /*  background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
       /*  }*/
       /*  .authentication-step .step.is-active {*/
       /*  font-size:1.5rem;}*/
       /*  .authentication-step   .step.is-active:before {*/
       /*  color: #FFF;*/
       /*  border: 2px solid  rgba(254,192,15,1);*/
       /*  background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
       /*  margin-bottom: 1rem;*/
       /*  }*/
       /*  .authentication-step .steps {*/
       /*  margin-bottom: 3em;*/
       /*  }    */
       /*  @media screen and (max-width: 768px) {*/
       /*  .authentication-step .steps{*/
       /*  display: flex;*/
       /*  flex-direction: column;*/
       /*  align-items: flex-start;*/
       /*  height: auto;*/
       /*  }*/
       /*  .authentication-step .steps .step{*/
       /*  position: relative;*/
       /*  display: flex;*/
       /*  }*/
       /*  .authentication-step  .step:after {*/
       /*  content: '';*/
       /*  position: absolute;*/
       /*  display: block;*/
       /*  background: #e6e6e6;*/
       /*  width: 1%;*/
       /*  height: 100%;*/
       /*  top: .9rem;*/
       /*  left: 46px;*/
       /*  }*/
       /*  .authentication-step   .step:before{*/
       /*  margin-bottom: 3rem;*/
       /*  margin-left: 30px;*/
       /*  margin-right: 20px;*/
       /*  }*/
       /*  .authentication-step   .step.is-active:before{*/
       /*  margin-bottom: 3rem;*/
       /*  }*/
       /*  }*/
         /*.Authenticator .nav-item{*/
         /*width:50%;*/
         /*}*/
         /*.Authenticator .nav-pills .nav-link{*/
         /*width:100%;*/
         /*}*/
       /*  .Authenticator .outer-div {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  text-align: center;*/
       /*  min-height:220px;*/
       /*  }*/
       /*  .Authenticator .app-div {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px 0px 24px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  width: 100%;*/
       /*  }*/
       /*  .Authenticator .app-link {*/
       /*  box-shadow: rgb(24 26 32 / 10%) 0px 0px 1px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(24 26 32 / 4%) 0px 1px 2px;    */
       /*  box-sizing: border-box;*/
       /*  margin: 0px 8px;*/
       /*  min-width: 0px;*/
       /*  border-radius: 4px;*/
       /*  padding-top: 20px;*/
       /*  padding-bottom: 20px;*/
       /*  width: 50%;*/
       /*  color: rgb(30, 35, 41);*/
       /*  text-align:center;*/
       /*  }*/
       /*  .Authenticator .app-icon {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  color: black;*/
       /*  font-size: 24px;*/
       /*  fill: black;*/
       /*  width: 1em;*/
       /*  height: 1em;*/
       /*  }*/
       /*  .Authenticator .app-text-heading {*/
       /*  box-sizing: border-box;*/
       /*  margin: 4px 0px 0px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 500;*/
       /*  font-size: 16px;*/
       /*  line-height: 24px;*/
       /*  }*/
       /*  .Authenticator .bar-code-div {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px 0px 12px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  -webkit-box-pack: center;*/
       /*  justify-content: center;*/
       /*  width: 100%;*/
       /*  }*/
       /*  .Authenticator .qr-css {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  box-shadow: rgb(24 26 32 / 10%) 0px 0px 1px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(24 26 32 / 4%) 0px 1px 2px;*/
       /*  border-radius: 4px;*/
       /*  flex: 0 0 112px;*/
       /*  padding: 8px;*/
       /*  text-align: center;*/
       /*  }*/
       /*  .Authenticator .qr-description {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px 0px 0px 16px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  flex: 1 1 0%;*/
       /*  flex-direction: column;*/
       /*  -webkit-box-pack: center;*/
       /*  justify-content: center;*/
       /*  text-align: left;*/
       /*  }*/
       /*  .Authenticator .qr-heading {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 500;*/
       /*  font-size: 14px;*/
       /*  line-height: 20px;*/
       /*  color: rgb(30, 35, 41);*/
       /*  }*/
       /*  .Authenticator .qr-subtitle {*/
       /*  box-sizing: border-box;*/
       /*  margin: 12px 0px 0px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 400;*/
       /*  font-size: 12px;*/
       /*  line-height: 16px;*/
       /*  color: rgb(71, 77, 87);*/
       /*  }*/
       /*  .Authenticator .qr-info {*/
       /*  box-sizing: border-box;*/
       /*  margin: 12px 0px 0px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  }*/
       /*  .Authenticator .qr-info-svg {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  color: rgb(146, 154, 165);*/
       /*  font-size: 16px;*/
       /*  fill: rgb(146, 154, 165);*/
       /*  display: none;*/
       /*  width: 1em;*/
       /*  height: 1em;*/
       /*  }*/
       /*  @media screen and (min-width: 767px)*/
       /*  {*/
       /*  .Authenticator .qr-info-svg {*/
       /*  display: block;*/
       /*  }}*/
       /*  .Authenticator .qr-info-txt {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px 0px 0px 4px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 400;*/
       /*  font-size: 12px;*/
       /*  line-height: 16px;*/
       /*  flex: 1 1 0%;*/
       /*  color: rgb(112, 122, 138);*/
       /*  }*/
       /*  .Authenticator .Auth-help-div {*/
       /*  box-sizing: border-box;*/
       /*  margin: 24px 0px 0px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  -webkit-box-align: center;*/
       /*  align-items: center;*/
       /*  -webkit-box-pack: center;*/
       /*  justify-content: center;*/
       /*  }*/
       /*  .Authenticator .Auth-help-icon {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  color: rgb(146, 154, 165);*/
       /*  font-size: 24px;*/
       /*  fill: rgb(146, 154, 165);*/
       /*  width: 1em;*/
       /*  height: 1em;*/
       /*  }*/
       /*  .Authenticator .Auth-help-txt {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px 0px 0px 8px;*/
       /*  min-width: 0px;*/
       /*  text-align: left;*/
       /*  vertical-align: middle;*/
       /*  font-size: 14px;*/
       /*  line-height: 20px;*/
       /*  color: rgb(71, 77, 87);*/
       /*  text-decoration: underline;*/
       /*  cursor: pointer;*/
       /*  }*/
       /*  .Authenticator .btn-yellow-fw {*/
       /*  margin: 24px 0px 0px;*/
       /*  appearance: none;*/
       /*  user-select: none;*/
       /*  cursor: pointer;*/
       /*  overflow: hidden;*/
       /*  text-overflow: ellipsis;*/
       /*  white-space: nowrap;*/
       /*  display: inline-flex;*/
       /*  -webkit-box-align: center;*/
       /*  align-items: center;*/
       /*  -webkit-box-pack: center;*/
       /*  justify-content: center;*/
       /*  box-sizing: border-box;*/
       /*  font-size: 16px;*/
       /*  font-family: inherit;*/
       /*  font-weight: 500;*/
       /*  text-align: center;*/
       /*  text-decoration: none;*/
       /*  outline: none;*/
       /*  padding: 12px 24px;*/
       /*  line-height: 24px;*/
       /*  min-width: 80px;*/
       /*  word-break: keep-all;*/
       /*  color: rgb(24, 26, 32);*/
       /*  border-radius: 4px;*/
       /*  min-height: 24px;*/
       /*  border: none;*/
       /*  background-image: none;*/
       /*  background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
       /*  width: 100%;*/
       /*  }*/
       /*  .Authenticator .app-link:hover {*/
       /*  background-color: rgb(245, 245, 245);*/
       /*  }*/
       /*  .Authenticator .app-div-inner {*/
       /*  box-sizing: border-box;*/
       /*  margin: 16px 0px 0px;*/
       /*  min-width: 0px;*/
       /*  color: rgb(30, 35, 41);*/
       /*  }*/
       /*  .Authenticator .app-subtitle {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 400;*/
       /*  font-size: 14px;*/
       /*  line-height: 20px;*/
       /*  color: rgb(112, 122, 138);*/
       /*  }*/
       /*  .Authenticator .bar-code-div-inner {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  box-shadow: rgb(24 26 32 / 10%) 0px 0px 1px, rgb(71 77 87 / 4%) 0px 3px 6px, rgb(24 26 32 / 4%) 0px 1px 2px;*/
       /*  border-radius: 4px;*/
       /*  background-color: rgb(255, 255, 255);*/
       /*  }*/
       /*  .Authenticator .unique-key {*/
       /*  box-sizing: border-box;*/
       /*  margin: 32px 0px 8px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 500;*/
       /*  font-size: 16px;*/
       /*  line-height: 24px;*/
       /*  }*/
       /*  .Authenticator .subtitle {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  font-weight: 400;*/
       /*  font-size: 14px;*/
       /*  line-height: 20px;*/
       /*  color: rgb(112, 122, 138);*/
       /*  }*/
       /*  .Authenticator .auth-btn-divs {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  }*/
       /*  .Authenticator .auth-btn-divs .previous-btn {*/
       /*  margin: 40px 0px 0px;*/
       /*  appearance: none;*/
       /*  user-select: none;*/
       /*  cursor: pointer;*/
       /*  overflow: hidden;*/
       /*  text-overflow: ellipsis;*/
       /*  white-space: nowrap;*/
       /*  display: inline-flex;*/
       /*  -webkit-box-align: center;*/
       /*  align-items: center;*/
       /*  -webkit-box-pack: center;*/
       /*  justify-content: center;*/
       /*  box-sizing: border-box;*/
       /*  font-size: 16px;*/
       /*  font-family: inherit;*/
       /*  font-weight: 500;*/
       /*  text-align: center;*/
       /*  text-decoration: none;*/
       /*  outline: none;*/
       /*  padding: 12px 24px;*/
       /*  line-height: 24px;*/
       /*  min-width: 80px;*/
       /*  word-break: keep-all;*/
       /*  color: rgb(30, 35, 41);*/
       /*  border-radius: 4px;*/
       /*  min-height: 24px;*/
       /*  border: none;*/
       /*  background-color: rgb(234, 236, 239);*/
       /*  width: 100%;*/
       /*  }*/
       /*  .Authenticator .auth-btn-divs .next {*/
         /*margin: 40px 0px 0px 16px;*/
       /*  appearance: none;*/
       /*  user-select: none;*/
       /*  cursor: pointer;*/
       /*  overflow: hidden;*/
       /*  text-overflow: ellipsis;*/
       /*  white-space: nowrap;*/
       /*  display: inline-flex;*/
       /*  -webkit-box-align: center;*/
       /*  align-items: center;*/
       /*  -webkit-box-pack: center;*/
       /*  justify-content: center;*/
       /*  box-sizing: border-box;*/
       /*  font-size: 16px;*/
       /*  font-family: inherit;*/
       /*  font-weight: 500;*/
       /*  text-align: center;*/
       /*  text-decoration: none;*/
       /*  outline: none;*/
       /*  padding: 12px 24px;*/
       /*  line-height: 24px;*/
       /*  min-width: 80px;*/
       /*  word-break: keep-all;*/
       /*  color: rgb(24, 26, 32);*/
       /*  border-radius: 4px;*/
       /*  min-height: 24px;*/
       /*  border: none;*/
       /*  background-image: none;*/
       /*  background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);*/
       /*  width: 100%;*/
       /*  }*/
       /*  .Authenticator .error_text{*/
       /*  text-align:left;*/
       /*  }*/
       /*  .tooltip {*/
       /*  position: relative;*/
       /*  display: inline-block;*/
       /*  border-bottom: 1px dotted black;*/
       /*  opacity:1;*/
       /*  }*/
       /*  .tooltip .tooltiptext {*/
       /*  visibility: hidden;*/
       /*  width: 250px;*/
       /*  background-color: black;*/
       /*  color: #fff;*/
       /*  text-align: center;*/
       /*  border-radius: 6px;*/
       /*  padding: 5px 10px;*/
       /*  position: absolute;*/
       /*  z-index: 999999;*/
       /*  right: 29px;*/
       /*  left: -50px;*/
       /*  bottom: 30px;*/
       /*  }*/
       /*  .tooltip:hover .tooltiptext {*/
       /*  visibility: visible;*/
       /*  }		*/
       /*  .toolLeft {*/
       /*  top: -5px;*/
       /*  right: 105%;*/
       /*  }					*/
       /*  .toolRight {*/
       /*  top: -5px;*/
       /*  left: 105%;*/
       /*  }*/
       /*  .toolTop {*/
       /*  bottom: 100%;*/
       /*  left: 50%;*/
       /*  margin-left: -60px;*/
       /*  }*/
       /*  .toolBottom {*/
       /*  top: 100%;*/
       /*  left: 50%;*/
       /*  margin-left: -60px;*/
       /*  }*/
       /*  .timer-counter{*/
       /*  color:#fec00f;*/
       /*  }*/
       /*  .Authenticator  .complet-img{*/
       /*  max-width:100px;*/
       /*  margin:20px auto;*/
       /*  }*/
       /*  .Authenticator .complete-text {*/
       /*  font-size: 20px;*/
       /*  font-weight: 700 !important;*/
       /*  -webkit-text-stroke: 1px #263674;*/
       /*  letter-spacing: 1.3px;*/
       /*  margin-bottom: 15px;*/
       /*  }*/
       /*  .back-div {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  min-width: 0px;*/
       /*  display: flex;*/
       /*  max-width: 1280px;*/
       /*  width: 100%;*/
       /*  padding-left: 16px;*/
       /*  padding-right: 16px;*/
       /*  }*/
       /*  .back-arrow {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px 8px 0px 0px;*/
       /*  min-width: 0px;*/
       /*  color: currentcolor;*/
       /*  font-size: 24px;*/
       /*  fill: currentcolor;*/
       /*  width: 1em;*/
       /*  height: 1em;*/
       /*  }*/
       /*  .back-link {*/
       /*  box-sizing: border-box;*/
       /*  margin: 0px;*/
       /*  display: flex;*/
       /*  font-size: 16px;*/
       /*  line-height: 24px;*/
       /*  -webkit-box-align: center;*/
       /*  align-items: center;*/
       /*  color: rgb(112, 122, 138) !important;*/
       /*  padding:10px 20px;*/
       /*  }*/
       /*  .back-link .text{*/
       /*  font-size:24px !important;*/
       /*  }*/
       /*  @media screen and (min-width: 1023px){*/
       /*  .back-div {*/
       /*  padding-left: 40px;*/
       /*  padding-right: 40px;*/
       /*  }*/
       /*  }*/
       /*  @media screen and (min-width: 767px)*/
       /*  {*/
       /*  .back-div {*/
       /*  padding-left: 24px;*/
       /*  padding-right: 24px;*/
       /*  }*/
       /*  .back-link {*/
       /*  font-weight: 500;*/
       /*  font-size: 20px;*/
       /*  line-height: 28px;*/
       /*  }} */
       /*  .back-link:hover{*/
       /*  color:black;*/
       /*  background:whitesmoke;*/
       /*  border-radius:5px;*/
       /*  }*/
       /*  @media screen and (max-width: 767px){*/
       /*  .back-div{*/
       /*  margin-bottom:30px;*/
       /*  }*/
       /*  }  */
      </style>
    </head>
    <body class="bg-white">
        @include('template.custom_header')
        <section id="main"  class="bg-light-blue">

            <div class="container">
                <div class="bg-white p-3 mb-4">
                    <div class="back-div">
                   <a href="{{ url(app()->getLocale())}}/user/security" target="_self" class="back-link">
                        <span class="back-arrow">
                            <i class="bi bi-chevron-left"></i>
                        </span>
                        <span class="text">   Security </span>
                   </a>
                </div>
                <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="mb-3 mt-4 pb-4">
                                <h2 class="text-center text-dark">Account Activity Records</h2>
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 mb-1">
                             <div class="dashboard-tabpills">

                    <div class="dashboard-card-body">


                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="{{ url(app()->getLocale())}}/user/security/account-activity" class="nav-link @if(Request::url()==url(app()->getLocale())."/user/security/account-activity") active @endif" type="button">Login Activity</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="{{ url(app()->getLocale())}}/user/security/security-activity" class="nav-link @if(Request::url()==url(app()->getLocale())."/user/security/security-activity") active @endif" type="button">Security Activity</a>
                                </li>
                            </ul>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-1">
                            <div class="text-right text-line-height"><span>Suspicious account activity?</span> <a href="{{ url(app()->getLocale())}}/user/disable-account" class="text-warning adrs_mng">Disable account</a></div>
                        </div>



                     <div class="h-divider my-3"></div>




                        @if(Request::url()==url(app()->getLocale())."/user/security/security-activity")
                            <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                                <div class="dropdown-theme">
                                    <label for="" class="form-label">Time</label>
                                    <select class="selectpicker w-100" id="days"  onchange="getFilteredSecurityData(5)">

                                        <option >1 DAY</option>
                                        <option >7 DAYS</option>
                                        <option >1 Month</option>
                                        <option >3 Months</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                                <div class="dropdown-theme">
                                    <label for="" class="form-label">Status</label>
                                    <select class="selectpicker w-100" id="status" onchange="getFilteredSecurityData(5)">
                                        <option>All</option>
                                        <option>Completed</option>
                                        <option>Failed</option>
                                    </select>
                                </div>
                            </div>
                             @csrf
                            <div class="col-lg-6 col-md-4 col-sm-4 mb-3">
                               &nbsp;
                            </div>
            				<div class="table-responsive">
                                <div class="col-12">
                                    <table class="table table-hover table-bordered" id='empTable' >
                                        <thead class="thead-shadow">
                                            <tr>
                                               <th scope="col">Date</th>
                                               <th scope="col">Source</th>
                                               <th scope="col">Activity</th>
                                               <th scope="col">Status</th>
                                               <th scope="col">IP Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    @if(!empty($security_activity_data) && $security_activity_data->count())
                                        @foreach($security_activity_data as $row)

                                            <tr>
                                                 <td scope="row">{{$row->created_at}}</td>
                                               <td scope="row">{{$row->source}}</td>
                                               <td>@if($row->type == 0)
                                               Google Authenticator Enabled
                                               @else
                                                Wealthmark Authenticator Enabled
                                                @endif
                                               </td>
                                               <td>@if($row->status == 1)
                                              Completed
                                               @else
                                               failed
                                                  @endif
                                                  </td>
                                               <td>{{$row->data}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">
                                                <div class="text-center mt-5 py-5">
                                                    <img src="{{asset('assets/img/not-found-icons/no-vouchers.svg') }}" class="no-record-icon" alt="">
                                                    <p class="mt-3">No Record Found.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class=".security_pagination" id="security_pagination">
                                 {!! $security_activity_data->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        @endif

                        @if(Request::url()==url(app()->getLocale())."/user/security/account-activity")
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="bg-light thead-shadow">
                                        <tr>
                                           <th scope="col">Date</th>
                                           <th scope="col">Source</th>
                                           <th scope="col">Status</th>
                                           <th scope="col">IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody id="div1">
                                    @if(!empty($log_data) && $log_data->count())
                                        @foreach($log_data as $row)
                                       @php $ip_data=json_decode($row->request_info);  @endphp
                                            <tr>
                                               <td scope="row">{{$row->log_datetime}}</td>
                                               <td>Web</td>
                                               <td>Completed</td>
                                               <td>{{$ip_data->ip}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">
                                                <div class="text-center mt-5 py-5">
                                                    <img src="{{asset('assets/img/not-found-icons/no-vouchers.svg') }}" class="no-record-icon" alt="">
                                                    <p class="mt-3">No Record Found.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                             <div class=".account_activity_pagination">
                             {!! $log_data->links('pagination::bootstrap-5') !!}
                             </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>


            <!--<div class="container">-->
            <!--    <div class="back-div">-->
            <!--       <a href="{{ url(app()->getLocale())}}/user/security" target="_self" class="back-link">-->
            <!--            <span class="back-arrow">  -->
            <!--                <i class="bi bi-chevron-left"></i>-->
            <!--            </span>-->
            <!--            <span class="text">   Security </span>-->
            <!--       </a>-->
            <!--    </div>-->
            <!--</div>-->




        </section>
      @include('template.copy_right_footer')
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
      <script src="{{ asset('assets/js/alert.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script>
            // $(document).ready(function(){
            //   var empTable = $('#empTable').DataTable({
        		  //"lengthChange": false,

        		  //"bFilter": false,
            //       processing: true,
            //       serverSide: true,
            //       ajax: {
            //          url:"{{ url(app()->getLocale()) }}/user/get_security_activity",
            //          data: function(data){
            //             data.searchCity = $('#days').val();
            //             data.searchGender = $('#status').val();
            //          }
            //       },
            //       columns: [
            //          { data: 'created_at' },
            //          { data: 'source' },
            //          { data: 'activity' },
            //          { data: 'status' },
            //          { data: 'ip_address' },
            //       ],
            //       'columnDefs': [ {
            //         'targets': [0,1,2,3,4],
            //         'orderable': false,
            //      }]
            //   });

        //       $('#days,#status').change(function(){
        //          empTable.draw();
        //       });
        //   });
        </script>
          <script>
            function getFilteredSecurityData_withLimit(from, to){
                 var from = from;
                   var to = to;
                  var paginating = to-from;
                const userID  = {{ Auth::user()->id }};
                const days  = $("#days").val();
                 const status  = $("#status").val();
                 var token =  $('input[name="_token"]').attr('value');
                console.log(userID+'/'+from+'/'+to+'/'+days+'/'+status);

                     $.ajax({
                             					type: "POST",
                                             //  dataType: "text",
                                                 url: "<?php echo url(app()->getLocale().'/user/get_security_activity_new_withLimit'); ?>",

                                                 data: {
                                                     'user_id' : userID,
                                                     'from' : from,
                                                      'to' : to,
                                                      'paginating' : paginating,
                                                     'days' :  days,
                                                     'status' : status,
                                                     '_token': token,

                                                 },
                             					success: function(data) {
                                                      //  console.log(JSON.parse(data));

                             				          // console.log(data);
                             				            // console.log(data.users[0].id);
                             				            // console.log(data.totalrec);

                                                         $("#empTable tbody").html('') ;

                                                     $.each( data.users, function( key, value ) {
                                                                // console.log( key + ": " + value );
                                                              //    console.log(value.id);
                                                               //    console.log(value.type);
                                                                //    console.log(value.status);
                                                                //     console.log(value.created_at);
                                                                 //     console.log(value.data);

                                                                 if(value.type == '0'){
                                                                       var auth = 'Google Authenticator Enabled';
                                                                   }else{
                                                                        var auth = 'Wealthmark Authenticator Enabled';
                                                                   }
                                                                    if(value.status == 1){
                                                                       var activityStatus = 'Completed';
                                                                   }else{
                                                                       var activityStatus = 'Failed';
                                                                   }

                                                                   var dataAndtime = value.created_at.split('T');

                                                                   $("#empTable tbody:last-child").append(
                                                                   "<tr><td>"+dataAndtime[0]+' '+dataAndtime[1].toString().substring(0,11)+
                                                                // "<tr><td>"+value.created_at+
                                                                   "</td><td>"+value.source+
                                                                   "</td><td>"+auth+
                                                                   "</td><td class='status'>"+activityStatus+
                                                                   "</td><td>"+value.data+
                                                                   "</td></tr>"
                                                                   );
                                                  });
                                               },
                                                 error: function(xhr, status, error) {
                                                   // var erroJson = JSON.parse(xhr.responseText);

                                                   // console.log(status);
                                                 }

                        });
            }
        </script>
        <script>


            function getFilteredSecurityData(paginateValue){
               // alert(paginateValue);
                var paginate = paginateValue;
                const userID  = {{ Auth::user()->id }};
                const days  = $("#days").val();
                 const status  = $("#status").val();
                 var token =  $('input[name="_token"]').attr('value');
             //   console.log(days+'/'+status);
                 $.ajax({
                             					type: "POST",
                                             //  dataType: "text",
                                                 url: "<?php echo url(app()->getLocale().'/user/get_security_activity_new'); ?>",

                                                 data: {
                                                     'user_id' : userID,
                                                     'days' :  days,
                                                     'status' : status,
                                                     'paginate' : paginate,
                                                      '_token': token,

                                                 },
                             					success: function(data) {

                             				          //  console.log(data.users.data);
                             				         //    console.log(data.users.links);
                             				         //   console.log(data.totalrec.length);

                             				         const possibleBlocks =  Math.ceil(data.totalrec.length / paginate);
                             				       //    console.log(possibleBlocks);

                                                       // return data;
                                                       // console.log(JSON.parse(data));
                                                         $("#empTable tbody").html('') ;

                                                         $("#security_pagination").html('');
                                                     $.each( data.users.data, function( key, value ) {
                                                               //  console.log( key + ": " + value );
                                                                 // console.log(value.id);
                                                                 if(value.type == '0'){
                                                                       var auth = 'Google Authenticator Enabled';
                                                                   }else{
                                                                        var auth = 'Wealthmark Authenticator Enabled';
                                                                   }
                                                                    if(value.status == 1){
                                                                       var activityStatus = 'Completed';
                                                                   }else{
                                                                       var activityStatus = 'Failed';
                                                                   }

                                                                   var dataAndtime = value.created_at.split('T');

                                                                   $("#empTable tbody:last-child").append(
                                                                   "<tr><td>"+dataAndtime[0]+' '+dataAndtime[1].toString().substring(0,11)+
                                                                // "<tr><td>"+value.created_at+
                                                                   "</td><td>"+value.source+
                                                                   "</td><td>"+auth+
                                                                   "</td><td class='status'>"+activityStatus+
                                                                   "</td><td>"+value.data+
                                                                   "</td></tr>"
                                                                   );


                                             });

                                              var bloc = '<nav class="d-flex justify-items-center justify-content-between">   <ul class="pagination">'+'<li class="page-item disabled" aria-disabled="true" aria-label="« Previous"><span class="page-link" aria-hidden="true">‹</span></li>';
                                              var from = 0;
                                              var to = paginate;
                                              for(i=1; i <= possibleBlocks; i++){
                                                 var bloc = bloc+'<li class="page-item " aria-current="page" onclick="getFilteredSecurityData_withLimit('+from+','+to+')"><span class="page-link">'+i+'</span></li>';

                                                  from=from+paginate;
                                                  to = to+paginate;
                                              };
                                              var bloc = bloc+'<li class="page-item"><a class="page-link" href="#" rel="next" aria-label="Next »">›</a></li>'+'</ul></nav>';
                                        $("#security_pagination").html(bloc);

                                                     },
                                                 error: function(xhr, status, error) {
                                                   // var erroJson = JSON.parse(xhr.responseText);

                                                   // console.log(status);
                                                 }

                        });
              };


        </script>

   </body>
</html>
