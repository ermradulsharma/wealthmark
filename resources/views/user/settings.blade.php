    <!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <link rel="stylesheet" href="https://wealthmark.io/assets/css/alert.css">
  @include('template.web_css')

   <style>
   .bx.bx-check-off{
    padding: 1px;
    border-radius: 50%;
    background-color: rgb(183, 189, 198);
    font-size: 10px;
    margin-right: 5px;
    color: #fff;
}
.bx-check-off:before {
    content: "\eca4";
}


 .nickname_style{
     border:1px solid #9e9e9e !important;
 }
  span.nickname_msg, span.avatar_msg{
       display: none;
   }


    .nicknamefield{
          display: inline-flex;
          font-size:14px;
          text-transform: capitalize;
      }
   .inner-css {
     border: 1px solid rgb(234, 236, 239);
      border-radius: 4px;
      height: 48px;
      }
    .inner-css input{
        border: none;
        width: 100%;
        height: 48px;
       }

       form.nicknameForm{
          font-family: 'Karla', sans-serif !important;
           margin: 0;
            padding: 0;
             box-sizing: border-box;
            outline: none;
        }

  .sidebar-nav{
      display:block;
  }
  #preloader{
      display:none !important;
  }

  @media (max-width: 450px){

  .balance-details .dashboard-card-header{
      display:block;

  }
  .dashboard-card-heading{
      margin-bottom:10px;
      display:block;
  }
  .balance-details .dashboard-card-header .btn-default{
      margin-left:0px;
  }
 #progressbar li{
     width:33% !important;
 }

  }


  </style>
  <style>
  /* avatar popup model section style*/

  .tab_content .row svg{
     width: 100px;
        margin: 10px auto;
       }

      ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;

	width: 100%;
}

ul.tabs li {
	float: left;
	margin: 0;
	cursor: pointer;
	padding: 0px 21px;
	height: 31px;
	line-height: 31px;
	overflow: hidden;
	position: relative;
}


ul.tabs li:hover {
	color: #333;
}

ul.tabs li.active {
	background-color: #fdc116;
	color: #333;
	border-bottom: 1px solid #fdc116;
	display: block;
}

.tab_container {
	clear: both;
	float: left;
	width: 100%;
	background: #fff;
	overflow: auto;
}

.tab_content {
	padding: 20px;
	display: none;
	text-align:center;
}
.tab_content p{
    padding:20px 10px; text-align: left;  font-size: 14px;    font-weight: 500 !important;

}
.tab_drawer_heading { display: none; }

@media screen and (max-width: 480px) {
	.tabs {
		display: none;
	}
	.tab_drawer_heading {
		background-color: #ccc;
		color: #fff;
		border-top: 1px solid #333;
		margin: 0;
		padding: 5px 20px;
		display: block;
		cursor: pointer;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	.d_active {
		background-color: #666;
		color: #fff;
	}
}
  </style>
</head>
<body>

    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')


    <div class="container-fluid p-0 w-100">
        <div class="bg-light-blue p-3 w-100">


                <div class="dashboard-breadcrumb bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="row align-items-center justify-content-between">
                       <div class="col-8">
                          <h2 class="fw-bold mb-0">Settings</h2>
                       </div>
                       <div class="col-4 text-end">
                          <img src="{{ asset('img/dashboard-icons/settings/setting.svg') }}" class="breadcrumb-icon" alt="">
                       </div>
                    </div>

                </div>
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                 <h4>My Profile</h4>
                 <div class="security-column ">
                    <div class="security-column-left">
                       <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/my-profile.svg') }}" alt="">
                       </div>
                       <div class="security-column-description">
                          <h5>Nickname</h5>
                          <span>Set a customized nickname for your profile.</span>
                       </div>
                    </div>
                    <div class="security-column-right">
                       <div class="d-flex align-items-center nicknamefield">
                          <!--<span class="bx bx-check"></span>-->
                          <!--<span class="text-theme-yellow"></span>-->
                          @if(Auth::user()->nick_name === NULL)
                           <span class="bx bx-check"></span>
                            <span class="text">Anonymous-User-0ecdc</span>
                          @else
                          <span class="bx bx-check"></span>
                          <span class="text-theme-yellow text">{{ Auth::user()->nick_name }}</span>
                          @endif
                        <span class="nickname_msg alert " role="alert"></span>
                       </div>
                       <div class="security-right-button">

                          <a href="javascript:void(0)" id="open_edit_modal" onClick="open_modal_div(this.id)" class="btn-default">&nbsp; Edit &nbsp; &nbsp;</a>
                       </div>
                    </div>
                 </div>
                 <div class="security-column ">
                    <div class="security-column-left">
                       <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/avtar.svg') }}" alt="">
                       </div>
                       <div class="security-column-description">
                          <h5>Avatar</h5>
                          <span>Select an avatar to personalize your account. You can purchase your own avatar in <a href="">NFT Marketplace</a></span>
                       </div>
                    </div>
                    <div class="security-column-right">
                       <div class="d-flex align-items-center avatar_sec">
                          @if(Auth::user()->avatar === NULL)
                           <img width="20px" src="{{ asset('img/avatar/wealthmakr-avatar-default.png') }}" alt="">
                          <span class="text-theme-yellow">Unset</span>
                          @else
                          <span class="bx bx-check"></span>
                          <img width="20px" src="{{ asset('img/avatar').'/'.Auth::user()->avatar }}" alt="">
                          @endif

                          <!--<span class="bx bx-check"></span>-->
                          <!--<span class="text-theme-yellow">Unset</span>-->
                           <span class="avatar_msg alert " role="alert"></span>
                       </div>
                       <div class="security-right-button">
                          <a href="javascript:void(0)" id="open_avatar_modal" onClick="open_modal_div(this.id)" class="btn-default m-0">Change</a>
                       </div>
                    </div>
                 </div>
                 <div class="security-column ">
                    <div class="security-column-left">
                       <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/p2p.svg') }}" alt="">
                       </div>
                       <div class="security-column-description">
                          <h5>P2P Profile Settings</h5>
                          <span>Edit your P2P nickname here.</span>
                       </div>
                    </div>
                    <div class="security-column-right">
                       <div class="d-flex align-items-center">
                          <span class="bx bx-check"></span>
                          <span class="text-theme-yellow">Unset</span>
                       </div>
                       <div class="security-right-button">
                          <a href="" class="btn-default">Manage</a>
                       </div>
                    </div>
                 </div>

                </div>
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                     <div class="">
                    <h4>Preferences</h4>
                 </div>
                 <div class="security-column ">
                    <div class="security-column-left">
                       <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/confirmation.svg') }}" alt="">
                       </div>
                       <div class="security-column-description">
                          <h5>Order Confirmation Reminders</h5>
                          <span>If the order reminder function is enabled, it will need to be reconfirmed every time an order is submitted.</span>
                       </div>
                    </div>
                    <div class="security-column-right">
                       <div class="d-flex align-items-center">
                          <span class="bx bx-check"></span>
                          <span class="text-theme-yellow">Stop-Limit Order</span>
                       </div>
                       <div class="security-right-button">
                          <a href="" data-bs-toggle="modal" data-bs-target="#cnfReminder" class="btn-default">Manage</a>
                       </div>
                    </div>
                 </div>
                 <div class="d-block pb-3 border-bottom">
                    <div class="security-column-left mt-5">
                       <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/notification.svg') }}" alt="">
                       </div>
                       <div class="security-column-description">
                          <h5>Notifications</h5>
                       </div>
                    </div>
                    <div class="notification-column">
                        <div class="notification-column-left">
                              <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/notification-language.svg') }}" alt="">
                       </div>
                            <div class="notification-column-description" style="padding-left: 34px;">
                                <h6 class="fw-bold">Notification Language</h6>
                                <span>Email and app push notification language settings.</span>
                            </div>
                        </div>
                        <div class="notification-column-right">
                            <div class="d-flex align-items-center notification-column-right-des">
                            <!--<span class="bx {{ (Auth::user()->notification_language != null ) ? 'bx-check' : 'bx-check-off' }} notification_lang_icon"></span>-->
                             <span class="bx bx-check notification_lang_icon"></span>

                            <span class="text-theme-yellow notification_lang">
                                @php
                                if(Auth::user()->notification_language != null){
                                $langtext = json_decode(Auth::user()->notification_language);
                                echo $langtext->langText;
                                }else{
                                echo "English";
                                }
                                @endphp
                                </span>


                            </div>
                            <div class="security-right-button">
                                <!--<a href="" data-bs-toggle="modal" data-bs-target="#notiLanguage" id="notiLanguage_modal"  class="notiLanguage btn-default">Manage</a>-->
                                <a href="javascript:void(0)"  id="notiLanguage_modal"  class="notiLanguage btn-default" onClick="open_modal_div(this.id)">Manage</a>
                            </div>
                        </div>
                    </div>

                    <div class="notification-column">
                        <div class="notification-column-left">
                              <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/on-site-notification.svg') }}" alt="">
                       </div>
                        <div class="notification-column-description" style="padding-left: 34px;">
                            <h6 class="fw-bold">On-site Notifications</h6>
                            <span>Once enabled, you will receive relevant notifications within the app and website.</span>
                        </div>
                        </div>
                        <div class="notification-column-right">
                        <div class="d-flex align-items-center">
                          <span class="bx {{ (Auth::user()->on_site_notification_status ==1) ? 'bx-check' : 'bx-check-off' }} onsite_notification_icon"></span>
                            <span class="text-theme-yellow onsite_notification_status">{{ (Auth::user()->on_site_notification_status ==1) ? 'Active' : 'Inactive' }}</span>
                        </div>
                        <div class="security-right-button">

                            <a href="javascript:void(0)" id="On_site_Notifications"  class="onSiteNotifications btn-default" onClick="open_modal_div(this.id)">Manage</a>

                        </div>
                        </div>
                    </div>

                    <div class="notification-column mb-3">
                        <div class="notification-column-left">
                              <div class="security-column-icon">
                          <img src="{{ asset('img/dashboard-icons/settings/marketing-notification.svg') }}" alt="">
                       </div>
                        <div class="notification-column-description" style="padding-left: 34px;">
                            <h6 class="fw-bold">Marketing Emails</h6>
                            <span>Select whether you want to receive marketing emails from us.</span>
                        </div>
                        </div>
                        <div class="notification-column-right">
                            <div class="d-flex align-items-center ">


                                 <span class="bx {{ (Auth::user()->email_marketting_status ==1) ? 'bx-check' : 'bx-check-off' }} marketing_mails_icon"></span>
                                 <span class="text-theme-yellow marketing_mails_status">{{ (Auth::user()->email_marketting_status ==1) ? 'On' : 'Off' }}</span>


                            </div>
                            <div class="security-right-button">

                                 <a href="javascript:void(0)"  class="set_marketing_mails_btn btn-default">{{ (Auth::user()->email_marketting_status ==1) ? 'Disable' : 'Enable' }}</a>
                                 <input type="hidden" class="set_marketing_mails_val" name="set_marketing_mails_btn " value="{{ (Auth::user()->email_marketting_status ==1) ? 1 : 0 }}">

                            </div>
                        </div>
                    </div>

                 </div>
                    </div>
                    <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                         <div class="">
                            <h4>Marketing and Analytics</h4>
                        </div>
                        <div class="security-column ">
                            <div class="security-column-left">
                               <div class="security-column-icon">
                                  <img src="{{ asset('img/dashboard-icons/settings/analytics.svg') }}" alt="">
                               </div>
                               <div class="security-column-description">
                                  <h5>Analytics</h5>
                                  <span>WealthMark may share usage data to 3rd party analytics platforms to help improve our products and marketing.</span>
                               </div>
                            </div>
                            <div class="security-column-right">
                               <div class="d-flex align-items-center">
                                  <span class="bx bx-check"></span>
                                  <span class="text-theme-yellow">On</span>
                               </div>
                               <div class="security-right-button">
                                  <a href="" class="btn-default">Disable</a>
                               </div>
                            </div>
                         </div>
                        <div class="security-column ">
                            <div class="security-column-left">
                               <div class="security-column-icon">
                                  <img src="{{ asset('img/dashboard-icons/settings/advertising.svg') }}" alt="">
                               </div>
                               <div class="security-column-description">
                                  <h5>Advertising</h5>
                                  <span>WealthMark may share usage data to 3rd party ad platforms to help improve our targeting and marketing quality.</span>
                               </div>
                            </div>
                            <div class="security-column-right">
                               <div class="d-flex align-items-center">
                                  <span class="bx bx-check"></span>
                                  <span class="text-theme-yellow">On</span>
                               </div>
                               <div class="security-right-button">
                                  <a href="" class="btn-default">Disable</a>
                               </div>
                            </div>
                         </div>
                    </div>
        </div>
    </div>

        </div>
    </div>



    <!--<div class="modal warning-modal-index fade" id="nickNameEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog">-->
    <!--                <div class="modal-dialog">-->
    <!--                    <div class="modal-content pt-3 pb-3 p-3 ">-->

    <!--                     <h5 class="text-center text-dark">Edit Nickname</h5>  -->
    <!--                     <div class="modal-body">-->


            <!--                <form name="nicknameForm" id="nicknameForm" class="nicknameForm">-->
            <!--                 <p class="">Set a customized nickname for your profile.</p>-->

            <!--                  <span class="">Nick Name</span>  -->
            <!--                      <div class=" inner-css">-->
            <!--                        <input type="hidden" id="nikefld" name="_token" value="{{ csrf_token() }}">-->
            <!--                         <input type="text" maxlength="8" minlength="2" pattern="\d*" id="nickName" name="nickName" value="" class="nickname_style">-->
            <!--                       </div>-->
            <!--              </form>-->
            <!--                </div>-->
            <!--                <div class="row gx-2">-->
            <!--                    <div class="col-6">-->
            <!--                        <button type="button" data-bs-dismiss="modal" class="nicknameClose btn-theme-light w-100">Cancel</button>-->
            <!--                    </div>-->
            <!--                    <div class="col-6">-->
            <!--                         <button type="button" class="save-nickName btn-theme-light w-100">Save</button>-->
                                    <!-- <a href="{{ url(app()->getLocale().'/update_table_column_byID') }}" class="btn-theme w-100">Confirm</a> -->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--    </div>-->

            <!--</div>-->



    <div id="nickNameEdit" class="open_edit_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Edit Nickname</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">
                               <div class="col-md-12">
                                    <form name="nicknameForm" id="nicknameForm" class="nicknameForm">
                             <p class="fs-14 mb-2">Set a customized nickname for your profile.</p>

                              <span class="fs-14 mb-2 d-block"><b> Nick Name </b></span>
                                  <div class="">
                                    <input type="hidden" id="nikefld" name="_token" value="{{ csrf_token() }}">
                                     <input type="text" maxlength="8" minlength="2" pattern="\d*" id="nickName" name="nickName" value="{{ (Auth::user()->nick_name !== NULL) ? Auth::user()->nick_name : '' }}" class="form-control">
                                   </div>
                          </form>
                               </div>


                                <div class="d-block col-12 mt-3 w-100 text-center mb-3">
                                    <!--<button type="button" class="btn-default d-inline-block close_custom_modal_btn border-0 me-3">Close Modal</button>-->
                                     <!--<button type="button" class="save-nickName btn-theme-light w-100">Save</button>-->

                                     <!--<a href="{{ url(app()->getLocale().'/update_table_column_byID') }}" class="btn-yellow d-inline-block">Save</a>-->
                                     <button type="button" class="save-nickName btn-yellow d-inline-block border-0">Save</button>

                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


   <div class="open_avatar_modal" id="avatar">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Select Avatar</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">



                               <div class="col-md-12">


                                   <div class="dashboard-tabpills">
                <div class="">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Default</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">NFT Assets</button>
                        </li>


                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                                <div class="" style="text-align:left; ">
                                                             <p class="fs-14 mb-2 bg-light-blue p-2 mt-2 text-center text-dark">Select an avatar to use as your profile picture.</p>
                                                             <div class="avatar-img">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-1.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-2.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-3.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-4.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-5.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-6.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-7.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-8.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-9.png') }}">
                                                            <img src="{{ asset('img/assets/img/avatar/wealthmakr-avatar-10.png') }}">

                                                 </div>

                                            <span class="selectedAvatar" style="display:none"></span>
                                        <div class="bg-light-blue p-1 mb-2 mt-2"></div>
                                         <div class="d-block col-12 w-100 text-center mb-3">
                                    <button type="button" class="save-avatar  btn-yellow d-inline-block border-0">Save</button>

                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                            <div class="text-center p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" viewBox="0 0 96 96" fill="none" class="css-ln1c7u">
                                                             <path fill="#76808F" d="M46 57h4v31h-4z"></path>
                                                             <path d="M42 48c0-17.673 14.327-32 32-32h2v21c0 17.673-14.327 32-32 32h-2V48z" fill="url(#cooling-period-light_svg__paint0_linear_22059_28251)"></path>
                                                             <path d="M54 48c0-17.673-14.327-32-32-32h-2v21c0 17.673 14.327 32 32 32h2V48z" fill="url(#cooling-period-light_svg__paint1_linear_22059_28251)"></path>
                                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M48 8l8.686 8.686A52.284 52.284 0 0172 53.656L50 72h-4L24 53.657a52.284 52.284 0 0115.314-36.97L48 8z" fill="#E6E8EA"></path>
                                                             <path d="M50 57c0-17.673 14.327-32 32-32h2v15c0 17.673-14.327 32-32 32h-2V57z" fill="url(#cooling-period-light_svg__paint2_linear_22059_28251)"></path>
                                                             <path d="M46 57c0-17.673-14.327-32-32-32h-2v15c0 17.673 14.327 32 32 32h2V57z" fill="url(#cooling-period-light_svg__paint3_linear_22059_28251)"></path>
                                                             <path d="M8 57c0 10.493 8.507 19 19 19h19v-4c0-8.284-6.716-15-15-15H8zM88 57c0 10.493-8.507 19-19 19H50v-4c0-8.284 6.716-15 15-15h23z" fill="#76808F"></path>
                                                             <path d="M73 92c-8.284 0-15-6.716-15-15 0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15z" fill="url(#cooling-period-light_svg__paint4_linear_22059_28251)"></path>
                                                             <path d="M74.502 86h-3v-3h3v3zM71.502 80V68h3v12h-3z" fill="#14151A"></path>
                                                             <defs>
                                                                 <linearGradient id="cooling-period-light_svg__paint0_linear_22059_28251" x1="55" y1="37" x2="76" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FAFAFA"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient>
                                                                 <linearGradient id="cooling-period-light_svg__paint1_linear_22059_28251" x1="41" y1="37" x2="20" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FAFAFA"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient>
                                                                 <linearGradient id="cooling-period-light_svg__paint2_linear_22059_28251" x1="67" y1="25" x2="67" y2="64" gradientUnits="userSpaceOnUse"><stop stop-color="#76808F"></stop><stop offset="1" stop-color="#929AA5"></stop></linearGradient>
                                                                 <linearGradient id="cooling-period-light_svg__paint3_linear_22059_28251" x1="29" y1="25" x2="29" y2="64" gradientUnits="userSpaceOnUse"><stop stop-color="#76808F"></stop><stop offset="1" stop-color="#929AA5"></stop></linearGradient>
                                                                 <linearGradient id="cooling-period-light_svg__paint4_linear_22059_28251" x1="58" y1="77" x2="88" y2="77" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient>
                                                            </defs>
                                                         </svg>
                                                     </div>
                                                            <p class="fs-14">No NFT assets. Please note that if the NFT you selected as avatar is being traded or withdrew to other platforms, then this NFT avatar will not exist in this list any more as a choice.</p>

                                 <div class="bg-light-blue p-1 mb-2 mt-2"></div>
                                 <div class="d-block col-12 w-100 text-center mb-3">
                                    <!--<button type="button" class="btn-yellow d-inline-block border-0">Save</button>-->

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
    </div>
   <!-- notification Language model-->
    <div id="notiLanguage" class="notiLanguage_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Notification Language</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close notiLanguage_model_close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                    <div class="container-fluid p-0 m-0">
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="fs-14 bg-light-blue p-2 shadow-sm rounded">

                                     Select the language used for email and app push notifications
                                 </div>
                                  <!--<div class="h-divider mb-2"></div>-->
                                 <div class="fs-14 mt-4 mb-3">Notification Language</div>
                                 <div class="lf-select_coin-to rounded">
                                      <div class=" coin-swap-from m-0">
                                        <input type="text" value="16" class="lf-select-coin-to-input">
                                        <div class="wm-input-suffix ">
                                          <div class="lf-select-coin-to-drpd">
                                            <svg viewBox="0 0 24 24" fill="none" class="lf-select-coin-to-icn">
                                              <path d="M16.5 8.49v2.25L12 15.51l-4.5-4.77V8.49h9z" fill="currentColor"></path>
                                            </svg>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="lf-select-coin-to-active-value lf-select-coin-to-active-div">
                                        <div class="wm-dropdown-optn-item-div">
                                          <div id="select_coin_text" class="wm-dropdown-optn-item-txt">English</div>
                                        </div>
                                      </div>
                                      <div class="wm-dropdown-div  wm-dropdown-div-open" style="display: none;">
                                        <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                                          <li role="option" id="en-US" title="en-US" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner selected">
                                <div class="wm-dropdown-optn-item-div">
                                  <div class="wm-dropdown-optn-item-txt">English</div>
                                </div>
                            </div>
                          </li>
                          <li role="option" id="ru-RU" title="ru-RU" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Русский</div></div>
                            </div>
                          </li>
                          <li role="option" id="zh-CN" title="zh-CN" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">简体中文</div></div>
                            </div>
                          </li>
                          <li role="option" id="es-ES" title="es-ES" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Español(Internacional)</div></div>
                            </div>
                          </li>
                          <li role="option" id="tr-TR" title="tr-TR" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Türkçe</div></div>
                            </div>
                          </li>
                          <li role="option" id="fr-FR" title="fr-FR" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Français</div></div>
                            </div>
                          </li>
                          <li role="option" id="pt-PT" title="pt-PT" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Português</div></div>
                            </div>
                          </li>
                          <li role="option" id="ja-JP" title="ja-JP" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">日本語</div></div>
                            </div>
                          </li>
                          <li role="option" id="de-DE" title="de-DE" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Deutsch</div></div>
                            </div>
                          </li>
                          <li role="option" id="ar-XA" title="ar-XA" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">العربية</div></div>
                            </div>
                          </li>
                          <li role="option" id="id-ID" title="id-ID" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Bahasa</div></div>
                            </div>
                          </li>
                          <li role="option" id="it-IT" title="it-IT" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Italiano</div></div>
                            </div>
                          </li>
                          <li role="option" id="nl-NL" title="nl-NL" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Vlaams</div></div>
                            </div>
                          </li>
                          <li role="option" id="pl-PL" title="pl-PL" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Polski</div></div>
                            </div>
                          </li>
                          <li role="option" id="zh-TW" title="zh-TW" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">繁體中文(台湾)</div></div>
                            </div>
                          </li>
                          <li role="option" id="en-IN" title="en-IN" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">English(India)</div></div>
                            </div>
                          </li>
                          <li role="option" id="en-NG" title="en-NG" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">English(Nigeria)</div></div>
                            </div>
                          </li>
                          <li role="option" id="ro-RO" title="ro-RO" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Română</div></div>
                            </div>
                          </li>
                          <li role="option" id="cs-CZ" title="cs-CZ" class="bnb-active-option bn-sdd-option-item css-1bsofzt">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Čeština</div></div>
                            </div>
                          </li>
                          <li role="option" id="he-IL" title="he-IL" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">עברית</div></div>
                            </div>
                          </li>
                          <li role="option" id="bg-BG" title="bg-BG" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">български</div></div>
                            </div>
                          </li>
                          <li role="option" id="th-TH" title="th-TH" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">ไทย</div></div>
                            </div>
                          </li>
                          <li role="option" id="ko-KR" title="ko-KR" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">한국어</div></div>
                            </div>
                          </li>
                          <li role="option" id="es-LA" title="es-LA" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Español(Latinoamérica)</div></div>
                            </div>
                          </li>
                          <li role="option" id="pt-BR" title="pt-BR" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Português(Brasil)</div></div>
                            </div>
                          </li>
                          <li role="option" id="vi-VN" title="vi-VN" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Tiếng Việt</div></div>
                            </div>
                          </li>
                          <li role="option" id="uk-UA" title="uk-UA" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Українська</div></div>
                            </div>
                          </li>
                          <li role="option" id="en-AU" title="en-AU" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">English(Australia)</div></div>
                            </div>
                          </li>
                          <li role="option" id="ph-PH" title="ph-PH" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Filipino</div></div>
                            </div>
                          </li>
                          <li role="option" id="zh-TC" title="zh-TC" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">繁體中文</div></div>
                            </div>
                          </li>
                          <li role="option" id="ur-PK" title="ur-PK" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Urdu</div></div>
                            </div>
                          </li>
                          <li role="option" id="sk-SK" title="sk-SK" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Slovenčina</div></div>
                            </div>
                          </li>
                          <li role="option" id="sv-SE" title="sv-SE" class="wm-dropdown-optn-item">
                            <div class="wm-dropdown-optn-item-inner">
                              <div class="wm-dropdown-optn-item-div"><div class="wm-dropdown-optn-item-txt">Svenska</div></div>
                            </div>
                          </li>
                                        </ul>
                                      </div>
                                </div>

                                  <div class="mt-4 mb-4">
                                      <a href="#" class="btn-yellow d-block shadow-none text-center" id="set_notiLanguage">Save</a>
                                  </div>
                <!------------------------------------------------------------------------------------------------------>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- notification setting model-->
    <div class="On_site_Notifications">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>On-site Notifications</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                    <div class="container-fluid p-0 m-0">
                        <div class="row">
                            <div class="col-md-12">

                                 <div class="fs-14 mt-4 mb-3">Once enabled, you will receive relevant notifications within the app and website.</div>
                                 <input type="radio" id="active" class="set_onsite_notification_val" name="set_onsite_notification_btn" value="1" {{ (Auth::user()->on_site_notification_status ==1) ? 'checked="checked"' : '' }} >
                                 <label for="active">Active</label><br>
                                  <input type="radio" id="inactive" class="set_onsite_notification_val" name="set_onsite_notification_btn" value="0" {{ (Auth::user()->on_site_notification_status ==0) ? 'checked="checked"' : '' }}>
                                  <label for="inactive">Inactive</label><br>
                                  <div class="mt-4 mb-4 d-flex align-items-center">
                                       <a href="#" class="btn-yellow d-inline-block shadow-none text-center w-50 set_onsite_notification" >Save</a>
                                        &nbsp; &nbsp;
                                      <a href="#" class="btn-default d-inline-block shadow-none text-center w-50 On_site_Notifications_closeModel" >Cancel</a>


                                  </div>
                <!------------------------------------------------------------------------------------------------------>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- end notification Language-->

    <!--<div class="modal warning-modal-index fade" id="avatar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog">-->
    <!--                <div class="modal-dialog">-->
    <!--                    <div class="modal-content pt-3 pb-3 p-3 ">-->

    <!--                     <h5 class="text-center text-dark">Select Avatar</h5>  -->
    <!--                     <div class="modal-body">-->

                                <!-- Tabs -->
    <!--                                               <ul class="tabs">-->
    <!--                                                  <li class="active" rel="tab1">Default</li>-->
    <!--                                                  <li rel="tab2">NFT Assets</li>-->

    <!--                                                </ul>-->

                                                        <!-- Accordions -->
    <!--                                               <div class="tab_container">-->
    <!--                                                      <h3 class="d_active tab_drawer_heading" rel="tab1">Default</h3>-->
    <!--                                                      <div id="tab1" class="tab_content">-->
    <!--                                                     <div class="row" style="text-align:left; ">-->
    <!--                                                         <p style="">Select an avatar to use as your profile picture.</p>-->
    <!--                                                         <div class="avatar-img">-->
    <!--                                                         <img src="{{ asset('img/avatar/wealthmakr-avatar-1.png') }}">-->
    <!--                                                         <img src="{{ asset('img/avatar/wealthmakr-avatar-2.png') }}">-->
    <!--                                                         <img src="{{ asset('img/avatar/wealthmakr-avatar-3.png') }}">-->
    <!--                                                         <img src="{{ asset('img/avatar/wealthmakr-avatar-4.png') }}">-->
    <!--                                                         <img src="{{ asset('img/avatar/wealthmakr-avatar-5.png') }}">-->
    <!--                                                         <img src="{{ asset('img/avatar/wealthmakr-avatar-6.png') }}">-->

    <!--                                                          </div>-->
    <!--                                                          <span class="selectedAvatar" style="display:none"></span>-->
    <!--                                                     </div>-->
    <!--                                                       <div class="row">-->
    <!--                                                                <div class="col-6">-->
    <!--                                                                    <button type="button" data-bs-dismiss="modal" class="avatarClose btn-theme-light w-100">Cancel</button>-->
    <!--                                                                </div>-->
    <!--                                                                <div class="col-6">-->
    <!--                                                                     <button type="button" class="save-avatar btn-theme-light w-100">Save</button>-->
                                                                        <!-- <a href="{{ url(app()->getLocale().'/update_table_column_byID') }}" class="btn-theme w-100">Confirm</a> -->
    <!--                                                                </div>-->
    <!--                                                        </div>  -->

    <!--                                                 </div>-->
                                                          <!-- #tab1 -->
    <!--                                                      <h3 class="tab_drawer_heading" rel="tab2">NFT Assets</h3>-->
    <!--                                                      <div id="tab2" class="tab_content">-->
    <!--                                                        <div class="row">-->
    <!--                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="css-ln1c7u">-->
    <!--                                                         <path fill="#76808F" d="M46 57h4v31h-4z"></path>-->
    <!--                                                         <path d="M42 48c0-17.673 14.327-32 32-32h2v21c0 17.673-14.327 32-32 32h-2V48z" fill="url(#cooling-period-light_svg__paint0_linear_22059_28251)"></path>-->
    <!--                                                         <path d="M54 48c0-17.673-14.327-32-32-32h-2v21c0 17.673 14.327 32 32 32h2V48z" fill="url(#cooling-period-light_svg__paint1_linear_22059_28251)"></path>-->
    <!--                                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M48 8l8.686 8.686A52.284 52.284 0 0172 53.656L50 72h-4L24 53.657a52.284 52.284 0 0115.314-36.97L48 8z" fill="#E6E8EA"></path>-->
    <!--                                                         <path d="M50 57c0-17.673 14.327-32 32-32h2v15c0 17.673-14.327 32-32 32h-2V57z" fill="url(#cooling-period-light_svg__paint2_linear_22059_28251)"></path>-->
    <!--                                                         <path d="M46 57c0-17.673-14.327-32-32-32h-2v15c0 17.673 14.327 32 32 32h2V57z" fill="url(#cooling-period-light_svg__paint3_linear_22059_28251)"></path>-->
    <!--                                                         <path d="M8 57c0 10.493 8.507 19 19 19h19v-4c0-8.284-6.716-15-15-15H8zM88 57c0 10.493-8.507 19-19 19H50v-4c0-8.284 6.716-15 15-15h23z" fill="#76808F"></path>-->
    <!--                                                         <path d="M73 92c-8.284 0-15-6.716-15-15 0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15z" fill="url(#cooling-period-light_svg__paint4_linear_22059_28251)"></path>-->
    <!--                                                         <path d="M74.502 86h-3v-3h3v3zM71.502 80V68h3v12h-3z" fill="#14151A"></path>-->
    <!--                                                         <defs>-->
    <!--                                                             <linearGradient id="cooling-period-light_svg__paint0_linear_22059_28251" x1="55" y1="37" x2="76" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FAFAFA"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient>-->
    <!--                                                             <linearGradient id="cooling-period-light_svg__paint1_linear_22059_28251" x1="41" y1="37" x2="20" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FAFAFA"></stop><stop offset="1" stop-color="#E6E8EA"></stop></linearGradient>-->
    <!--                                                             <linearGradient id="cooling-period-light_svg__paint2_linear_22059_28251" x1="67" y1="25" x2="67" y2="64" gradientUnits="userSpaceOnUse"><stop stop-color="#76808F"></stop><stop offset="1" stop-color="#929AA5"></stop></linearGradient>-->
    <!--                                                             <linearGradient id="cooling-period-light_svg__paint3_linear_22059_28251" x1="29" y1="25" x2="29" y2="64" gradientUnits="userSpaceOnUse"><stop stop-color="#76808F"></stop><stop offset="1" stop-color="#929AA5"></stop></linearGradient>-->
    <!--                                                             <linearGradient id="cooling-period-light_svg__paint4_linear_22059_28251" x1="58" y1="77" x2="88" y2="77" gradientUnits="userSpaceOnUse"><stop stop-color="#F0B90B"></stop><stop offset="1" stop-color="#F8D33A"></stop></linearGradient>-->
    <!--                                                        </defs>-->
    <!--                                                     </svg>-->
    <!--                                                        <p style="">No NFT assets. Please note that if the NFT you selected as avatar is being traded or withdrew to other platforms, then this NFT avatar will not exist in this list any more as a choice.</p>-->
    <!--                                                         </div>-->
    <!--                                                               <div class="row">-->
    <!--                                                                                    <div class="col-6">-->
    <!--                                                                                        <button type="button" data-bs-dismiss="modal" class="nicknameClose btn-theme-light w-100">Cancel</button>-->
    <!--                                                                                    </div>-->
    <!--                                                                                    <div class="col-6">-->
    <!--                                                                                         <button type="button" class="save-nickName btn-theme-light w-100">Save</button>-->
                                                                                            <!-- <a href="{{ url(app()->getLocale().'/update_table_column_byID') }}" class="btn-theme w-100">Confirm</a> -->
    <!--                                                                                    </div>-->
    <!--                                                            </div>-->
    <!--                                                      </div>-->

    <!--                                                    </div>-->
                                                        <!-- .tab_container -->
    <!--                        </div>-->
                                                      <!-- /Accordions -->


    <!--                    </div>-->

    <!--                    </div>-->
    <!--            </div>-->

   @include('template.web_footer')
   <!---------------include('template.web_js') -->
   <!-----------------comment for dropdown not open properly ---------------------->
   <script src="https://wealthmark.io/assets/js/alert.js"></script>
   <script>
       $(".save-nickName").click(function(){
            var id = '<?php  echo Auth::user()->id ?>';
            var value = $("#nickName").val();
            var token =  $("#nikefld").val();
            var column = 'nick_name';
                  $.ajax({
                             					type: "POST",
                                             //  dataType: "text",
                                                 url: "<?php echo url(app()->getLocale().'/user/update_user_column'); ?>",
                                                 data: {
                                                     'user_id' :  id,
                                                     'value' : value,
                                                     'column' : column,
                                                     '_token': token,

                                                 },
                             					success: function(data) {
                             					    $(".nicknameClose").click();

                             					   // $("#nickNameEdit").hide();
                             					     $(".nicknamefield span.text").text(data.columnValue);
                             					       $("#nickName").val(data.columnValue);


                             					     //  $("span.nickname_msg ").text("nickname added");

                                                       triggerAlert('Nick name set!', 'success');

                                                            //   $("span.nickname_msg").css({'display' : 'block'});
                                                            //  $("span.nickname_msg ").addClass('alert-success');

                                                            // setTimeout( function(){
                                                            //     $("span.nickname_msg").css({'display' : 'none'});
                                                            //      $("span.nickname_msg ").removeClass('alert-success');
                                                            // }
                                                            // ,2000 );

                                                      return data;

                                                 },
                                                 error: function(xhr, status, error) {
                                                    var erroJson = JSON.parse(xhr.responseText);
                                                     triggerAlert('Nickname cannot be set!', 'error');
                                                    //  $("span.nickname_msg ").text("nickname cannot be set");
                                                    //   $("span.nickname_msg").css({'display' : 'block'});
                                                    //  $("span.nickname_msg ").addClass('alert-danger');

                                                    // setTimeout( function(){
                                                    //     $("span.nickname_msg").css({'display' : 'none'});
                                                    //      $("span.nickname_msg ").removeClass('alert-danger');
                                                    // }
                                                    // ,2000 );
                                                    //alert(erroJson.error);
                                                 }

                             				});


        //   $(".nicknamefield span").load(url);

            $("#nickNameEdit").children().addClass("hide").removeClass("custom-modal-bck-bg");
       });
   </script>
   <script>
      // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {

      $(".tab_content").hide();
      var activeTab = $(this).attr("rel");
      $("#"+activeTab).fadeIn();

      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {

      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel");
      $("#"+d_activeTab).fadeIn();

	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");

	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });


	/* Extra class "tab_last"
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");

// inserting avatat
 $(".avatar-img img").click(function(){
                $(this).css({"border-radius": "50% ", "border" : "5px solid #fcd535"});
                $(this).siblings().css({"border-radius": "50% ", "border" : "none"});
                var selectedAvatar = $(this).attr('src');
                var splitAvatar = selectedAvatar.split('/');
                var avatarName = splitAvatar[splitAvatar.length - 1];

                //  var avatarPath = '/assets/img/avatar/'+avatarName;
                $("span.selectedAvatar").text(avatarName);
                //  console.log(avatarName);
 });

$(".save-avatar").click(function(){

                    var id = '<?php  echo Auth::user()->id ?>';
                    var value = $("span.selectedAvatar").text();
                    var token =  $("#nikefld").val();
                    var column = 'avatar';

         //   console.log(value);

                  $.ajax({
                    type: "POST",
                    //  dataType: "text",
                    url: "<?php echo url(app()->getLocale().'/user/update_user_column'); ?>",
                    data: {
                        'user_id' :  id,
                        'value' : value,
                        'column' : column,
                        '_token': token,

                    },
                    success: function(data) {
                    $(".avatarClose").click();

                    // $("#nickNameEdit").hide();
                            $(".avatar_sec img").attr('src', '<?php echo asset('img/avatar/') ?>'+'/'+data.columnValue);
                            $(".menu_avatar img").attr('src', '<?php echo asset('img/avatar/') ?>'+'/'+data.columnValue);
                            triggerAlert('Avatar set!', 'success');
                                    // $("span.avatar_msg ").text("Avatar addedd");
                                    //               $("span.avatar_msg").css({'display' : 'block'});
                                    //              $("span.avatar_msg ").addClass('alert-success');

                                    //             setTimeout( function(){
                                    //                 $("span.avatar_msg").css({'display' : 'none'});
                                    //                  $("span.avatar_msg ").removeClass('alert-success');
                                    //             }
                                    //             ,2000 );
                                    // triggerAlert('Avatar set!', 'success');
                    return data;

                    },
                    error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    triggerAlert('Avatar cannot be set!', 'success');
                                    //  $("span.avatar_msg ").text("Avatar cannot be set");
                                    //   $("span.avatar_msg").css({'display' : 'block'});
                                    //  $("span.avatar_msg ").addClass('alert-danger');

                                    // setTimeout( function(){
                                    //     $("span.avatar_msg").css({'display' : 'none'});
                                    //      $("span.avatar_msg ").removeClass('alert-danger');
                                    // }
                                    // ,2000 );
                                    //alert(erroJson.error);
                    }

                    });

        $("#avatar").children().addClass("hide").removeClass("custom-modal-bck-bg");
})
   </script>

   <script>

        // $("#open_edit_modal").click(function() {
        //          $("#nickNameEdit").children().addClass("custom-modal-bck-bg").removeClass("hide");
        //   });

        // $("#open_avatar_modal").click(function() {
        //          $("#avatar").children().addClass("custom-modal-bck-bg").removeClass("hide");
        //       });



        // $("#notiLanguage_modal").click(function() {
        //      $("#notiLanguage").children().addClass("custom-modal-bck-bg").removeClass("hide");
        //   });

   </script>

   <script>
         $('.On_site_Notifications_closeModel').click(function (){
                var block =  $('.On_site_Notifications').find('.custom-modal-bck-bg')
                block.addClass('hide');
                block.removeClass('custom-modal-bck-bg');
            });

        $('.notiLanguage_model_close').click(function (){
                var block =  $('#notiLanguage').find('.custom-modal-bck-bg')
                block.addClass('hide');
                block.removeClass('custom-modal-bck-bg');
            });

         $('input[type=radio][name=set_onsite_notification_btn]').change(function() {

            if($(this).siblings('input[type=radio]').is(':checked') === true ){

               $(this).siblings('input[type=radio]').attr('checked') == false

            };
            $(this).attr('checked', 'checked') == true

        });

    $("#set_notiLanguage").click(function(){

          var lang = $('.wm-dropdown-optn-item-inner.selected').parent().attr('id');
          var language_text = $('.wm-dropdown-optn-item-inner.selected').find('.wm-dropdown-optn-item-txt').text();


                 $.ajax({
                    type: "POST",

                    url: "{{ url('user/set_notification_language') }}",
                    data: {
                        'user_id' :  '{{ Auth::user()->id }}',
                        'language' : lang,
                        'language_text' : language_text,
                        '_token': '{{ @csrf_token() ; }}'

                    },
                    success: function(data) {
                       // console.log(data);
                        var notificationLanguageData = JSON.parse(data.nofificationLanguage);
                       // console.log(notificationLanguageData.langCode);
                       if(data.nofificationLanguage){

                             $(".notification_lang").text(notificationLanguageData.langText);
                             var block =  $('#notiLanguage').find('.custom-modal-bck-bg')
                                            block.addClass('hide');
                                            block.removeClass('custom-modal-bck-bg');
                               triggerAlert('Notification language set!', 'success');
                        }

                    },
                    error: function(xhr, status, error) {
                         var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.statusMsg, 'error');

                    }

                    });

     });



    $('.set_onsite_notification').click(function(){

         // var status = $('.set_onsite_notification_val').val();
          var status =  $('input[type=radio][name=set_onsite_notification_btn]:checked').val();
                $.ajax({
                    type: "POST",

                    url: "{{ url('user/set_onSiteNotification') }}",
                    data: {
                            'user_id' :  '{{ Auth::user()->id }}',
                            'status' : status,
                            '_token': '{{ @csrf_token() ; }}'

                    },
                    success: function(data) {
                        console.log(data);
                        console.log(data.nofificationstatus);

                        if(data.nofificationstatus == 1){

                            $(".onsite_notification_status").text('Active');
                            $(".onsite_notification_icon").addClass('bx-check');
                            $(".onsite_notification_icon").removeClass('bx-check-off');
                           var block =  $('.On_site_Notifications').find('.custom-modal-bck-bg')
                           block.addClass('hide');
                            block.removeClass('custom-modal-bck-bg');
                            triggerAlert('On-site notification active now!', 'success');
                        }

                        if(data.nofificationstatus == 0){

                            triggerAlert('On-site notification inactive now!', 'success');
                            $(".onsite_notification_status").text('Inactive');
                            $(".onsite_notification_icon").removeClass('bx-check');
                            $(".onsite_notification_icon").addClass('bx-check-off');
                            var block =  $('.On_site_Notifications').find('.custom-modal-bck-bg')
                            block.addClass('hide');
                            block.removeClass('custom-modal-bck-bg');

                        }


                    },
                    error: function(xhr, status, error) {
                            var erroJson = JSON.parse(xhr.responseText);
                            triggerAlert(erroJson.statusMsg, 'error');

                    }

                });
      });

      $('.set_marketing_mails_btn').click(function(){

       // var status = $('input[name = set_marketing_mails_btn]').val();
         var status = $('.set_marketing_mails_val').val();
          console.log(status);
          var changedStatus = null;
          if(status == '0'){
            changedStatus  = 1;
          }
          if(status == '1'){
            changedStatus  = 0;
          }

                  $.ajax({
                    type: "POST",

                    url: "{{ url('user/set_emailmarketing_status') }}",
                    data: {
                        'user_id' :  '{{ Auth::user()->id }}',
                        'status' : changedStatus,
                        '_token': '{{ @csrf_token() ; }}'

                    },
                    success: function(data) {
                        console.log(data);
                        console.log(data.nofificationstatus);

                    if(data.nofificationstatus == 1){
                           triggerAlert('Email marketing notification turned on!', 'success');
                        // $('input[name = set_marketing_mails_btn]').val(data.status);
                        // $(".marketing_mails_indicator").html(' <span class="bx bx-check "></span><span class="text-theme-yellow ">On</span>');
                        $('.set_marketing_mails_val').val(1);
                         $(".set_marketing_mails_btn").text('Disable');
                          $(".marketing_mails_status").text('On');
                            $(".marketing_mails_icon").addClass('bx-check');
                           $(".marketing_mails_icon").removeClass('bx-check-off');

                    }

                    if(data.nofificationstatus == 0){
                        // $('input[name = set_marketing_mails_btn]').val(data.status);
                         triggerAlert('Email marketing notification turned off!', 'error');
                       //  $(".marketing_mails_indicator").html(' <span class="bx bx-check "></span><span class="text-theme-yellow ">Off</span>');
                        $('.set_marketing_mails_val').val(0);
                        $(".set_marketing_mails_btn").text('Enable');
                        $(".marketing_mails_status").text('Off');
                        $(".marketing_mails_icon").removeClass('bx-check');
                        $(".marketing_mails_icon").addClass('bx-check-off');

                    }




                    },
                    error: function(xhr, status, error) {
                         var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.statusMsg, 'error');

                    }

                    });
      });







   </script>
</body>
</html>

