
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="javascript:void(0)287aff">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  @include('template.web_css')
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link href="{{ asset('assets/admin_assets/css/dashboad-widget-style.css') }}" rel="stylesheet">
  <style>

  .widget-style3:hover .widget-style > .icons{
      color:#263674!important;
  }
 #widgets-bmk-row h4{
    color: #fdcb08;
}
 #widgets-users-row h4{
    color: #fdcb08;
}
 #widgets-orders-row h4{
    color: #fdcb08;
}
 #widgets-sale-row h4{
    color: #fdcb08;
}
  .widget-style2 {
    border-bottom: 2px solid #fdcb08;
    border-radius: 0px;
}
.widget-style2:hover {
    box-shadow: 1px 1px 3px 0.1px #c3c3c3!important;
    cursor: pointer;
}
.icon {
    color: #263674;
}
.widget-style3 {
    border-bottom: 2px solid #fdcb08;
        border-radius: 0px;
}
.widget-style1 {
    border-bottom: 2px solid #fdcb08;
    border-radius: 0px;
}
.widget-inner-block {
    display: flex;
    justify-content: space-between;
    align-items:center;
}
    .cmplet_btn{
        box-sizing: border-box;
        /*margin: 16px 0px 24px;*/
        min-width: 0px;
        display: flex;
        /*border-radius: 36px;*/
        cursor: pointer;
        background: rgba(14, 203, 129, 0.12);
        font-size: 12px!important;
        line-height: 16px;
        color: rgb(3, 166, 109);
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-left: 22px;
        padding-right: 22px;
        height: 30px;
     }
      ul.nicknamefield{
          display: inline-flex;
          font-size:14px;
          text-transform: capitalize;
      }

#securityVerification .wm-custom-modal-diolog , #customizeProfile .wm-custom-modal-diolog {
    max-width: 450px;
    width: 100%;
}
  .verify-section {
    display: none;
}



  .fund-div  {
        display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 10px 0px;
    padding: 20px 30px;
    border-radius: 10px;
    }
    .fund-div .fund-div-btn{
        width:100px;
        text-align:center;
    }
    .fund-div .fund-div-btn a{
        display:block;
    }

 /*--------------------------------   */

 .kyc-complete-notification{
     background: #29cf471f;
    border-radius: 5px;
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    justify-content: space-between;
    padding: 10px;
 }

 .kyc-complete-notification div:first-child{
     display: flex;
    align-items: center;
    padding-right:10px;
    flex-wrap:wrap;
 }

 .kyc-complete-notification div:first-child span:first-child{
     color: #29cf47;
     margin-right:10px;
 }
  .kyc-complete-notification div:first-child span:nth-child(2){
     font-size:14px;
 }

 .kyc-complete-notification div:nth-child(2) span{
     padding:5px;
     font-size:15px;
         cursor: pointer;
 }

  .fund-div-text{
         display: flex;
    align-items: center;
    padding-right:10px;
 }
 .fund-div-text div:first-child{
     background: white;
    padding: 10px;
    margin-right: 10px;
    border-radius: 50%;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
 }
 .fund-div-text div:first-child img{
     max-width:25px;
 }

     .fund-div-text div:nth-child(2) > span{
         display:block;
         margin-bottom:5px;
         font-size:14px;
     }


       .fund-div-text div:nth-child(2) > span:first-child .hot{
        background: #dc1b75;
    padding: 0px 5px;
    margin-right: 10px;
    color: white;
    border-radius: 15px;
     }
      .fund-div-text div:nth-child(2) > span:first-child .video{
          color: #fdc116;
    margin-left: 15px;
      }
         .fund-div-text div:nth-child(2) > span:first-child .video i{
             margin-right:5px;
         }

      .fund-div-text div:nth-child(2) > span:nth-child(2){
          font-size:12px;
      }
      span.sub-heading{
          font-size: 13px;
    color: #a39e9e;
      }

      @media (max-width:500px){
          .fund-div{
              display:block !important;
          }
          .fund-div .video{
              display:none;
          }
        .fund-div .fund-div-btn  {
              margin: auto;
    margin-top: 10px;
          }
          .fund-div-text div:nth-child(2) > span:nth-child(2){
              text-align: justify;
          }
      }








      .verify-now {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 108px;
    fill: currentcolor;
    position: absolute;
    right: 8px;
    top: 25px;
    width: 1em;
    height: 1em;
}
.max-width-500{
    max-width:500px;
    padding-right:10px;
}

@media(max-width:500px){
     .verify-now{
         position:relative;
         top:unset;
         right:unset;

     }
     .verify-div-main{
         text-align:center !important;
     }
}
.first-block{
    padding: 24.5px 30px!important;
}

#increase-your-account-security .dashboard-card{
min-height:auto;
}
.security-block {
    width: 100%;
}

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

    .table>thead {
        background-color: #f5f8fd;
    }
    .user-info-header{
            background-color: rgb(250, 250, 250);
    }
     .pills-tab{
        display: flex;
        flex-wrap: nowrap;
        overflow: scroll;
    }

 .security-column-right{
     flex:unset !important;
 }
 @media screen and (min-width: 1023px){
.security-column-right {
    margin-top: 0px;
    width: max-content !important;
}}
.col-md-12.widgets-wrapper-box {
    display: flex;
    text-align:center;
}
.widget-inner-block h1{
    font-weight:bolder;
    font-size:20px;
}

    .wgt-head {
        font-size: 3.5rem!important;
    }
    span.wgt-text {
    color: gray;
}
  </style>

</head>
<body>
   <!--{{  $ipaddress = getenv("REMOTE_ADDR")  }}-->


     <!-- veryfication button top  row -->

            <!-- end veryfication button top  row -->
    @include('admin.template.web_menu')
    <div class="dashboard-main">
     @include('admin.template.sidebar')

    <div class="container-fluid bg-light-blue">
               	<div class="row mt-2 mx-auto">
       	         <div class="col-md-12">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-3 mb-2 px-4">

                    <h2 class="fw-bold mb-0 ps-1">Dashboard</h2>

            </div>


                    </div>
       	</div>


        <div class=" banner-section">



                    <!--<div class="col-md-12">-->
                    <!--    <div class="security-block fund-div bg-light-blue shadow-sm">-->
                    <!--        <div class="d-flex">-->
                    <!--            <span> <h5>Welcome to Wealthmark.io</h5></span>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                   <div class="row mb-3 bg-white mx-auto" id="widgets-bmk-row">
                                   <div class="col-md-12">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-2 mb-2 px-1">
                                                <h4 class="fw-bold mb-0 ps-1">BMK</h4>
                                        </div>
                                     </div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">P2P</div>
						<div class="weight-500 font-18 widget-text-dark">75%</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-server"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">P2P</div>
						<div class="weight-500 font-18 widget-text-dark">55%</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">P2P</div>
						<div class="weight-500 font-18 widget-text-dark">100</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-envelope" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">P2P</div>
						<div class="weight-500 font-18 widget-text-dark text-dark">50</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-globe" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
                   <div class="row mb-3 bg-white mx-auto" id="widgets-users-row">
	      <div class="col-md-12 mt-3">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-2 mb-2 px-1">
                                                <h4 class="fw-bold mb-0 ps-1">Users</h4>
                                        </div>
                                     </div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="circle-icon">
						<div class="icon border-radius-100 font-24 text-blue"><i class="bi bi-person" aria-hidden="true"></i></div>
					</div>
					<div class="widget-data">
						<div class="weight-500 font-20">All Users</div>
					</div>
					<div class="progress-data">
						<div id="chart"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white widget-style1 border-radius-10 height-100-p box-shadow">
				<div class="d-flex flex-wrap align-items-center">
					<div class="circle-icon">
						<div class="icon border-radius-100 font-24 text-blue"><i class="bi bi-person-check-fill" aria-hidden="true"></i></div>
					</div>
					<div class="widget-data">
						<div class="weight-500 font-20">Verified Users</div>
					</div>
					<div class="progress-data">
						<div id="chart2"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="circle-icon">
						<div class="icon border-radius-100 font-24 text-blue"><i class="bi bi-people" aria-hidden="true"></i></div>
					</div>
					<div class="widget-data">
						<div class="weight-500 font-20">Pending Users</div>
					</div>
					<div class="progress-data">
						<div id="chart3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="circle-icon">
						<div class="icon border-radius-100 font-24 text-blue"><i class="bi bi-person-dash-fill"></i></div>
					</div>
					<div class="widget-data">
						<div class="weight-500 font-20">Failed Users</div>
					</div>
					<div class="progress-data">
						<div id="chart4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	               <div class="row mb-3 bg-white mx-auto" id="widgets-orders-row">
                                   <div class="col-md-12 mt-3">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-2 mb-2 px-1">
                                                <h4 class="fw-bold mb-0 ps-1">Orders</h4>
                                        </div>
                                     </div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">Today's Order</div>
						<div class="weight-500 font-18 widget-text-dark">75%</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-cart4"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">Total Orders</div>
						<div class="weight-500 font-18 widget-text-dark">55%</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-cart-plus"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">Pending Orders</div>
						<div class="weight-500 font-18 widget-text-dark">100</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-basket2"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
				<div class="d-flex flex-wrap align-items-center">
					<div class="widget-data">
						<div class="weight-500 font-20">Dispute</div>
						<div class="weight-500 font-18 widget-text-dark">50</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="bi bi-cart-x-fill"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
                   <div class="row mb-3 bg-white mx-auto" id="widgets-sale-row">
                         <div class="col-md-12 mt-3">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-2 mb-2 px-1">
                                                <h4 class="fw-bold mb-0 ps-1">Sale</h4>
                                        </div>
                                     </div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style2">
				<div class="widget-data">
					<div class="weight-800 font-24">11,020</div>
					<div class="weight-500 font-18 widget-text-dark">Gift Card</div>
				</div>
				<div class="progress-data">
					<div id="chart5"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style2">
				<div class="widget-data">
					<div class="weight-800 font-24">5,000</div>
					<div class="weight-500 font-18 widget-text-dark">P2P</div>
				</div>
				<div class="progress-data">
					<div id="chart6"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style2">
				<div class="widget-data">
					<div class="weight-800 font-24">9,000</div>
					<div class="weight-500 font-18 widget-text-dark">Total</div>
				</div>
				<div class="progress-data pl-20 pr-20">
					<div id="chart7"></div>
				</div>
			</div>
		</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">
			<div class="bg-white box-shadow border-radius-10 height-100-p widget-style2">
				<div class="widget-data">
					<div class="weight-800 font-24">10,000</div>
					<div class="weight-500 font-18 widget-text-dark">Others</div>
				</div>
				<div class="progress-data">
					<div id="chart8"></div>
				</div>
			</div>
		</div>
		<!--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-10">-->
		<!--	<div class="bg-white box-shadow border-radius-10 height-100-p widget-style2">-->
		<!--		<div class="widget-data">-->
		<!--			<div class="weight-800 font-24">$60,600</div>-->
		<!--			<div class="weight-500 font-18 widget-text-dark">Total Revenue This Year</div>-->
		<!--		</div>-->
		<!--		<div class="progress-data">-->
		<!--			<div id="chart8"></div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
	</div>


           <div class="row">

            <!--  <div class="col-lg-6 col-xl-4 mb-4" id="increase-your-account-security">-->
            <!--    <div class="dashboard-card">-->
            <!--        <a href="javascript:void(0)">-->
            <!--            <div class="dashboard-card-header">-->
            <!--            <span class="dashboard-card-heading">Increase your account security (0/4)</span>-->
            <!--            <span class="bx bx-chevron-right fw-bold ms-auto"></span>                                      -->
            <!--            </div>-->
            <!--        </a>-->
            <!--        <hr>-->
            <!--        <div class="dashboard-card-body">-->
            <!--            <div class="row">-->
            <!--                   <div class="col-md-12">-->
            <!--                        <div class="security-block first-block fund-div bg-light-blue shadow-sm">-->
            <!--                            <div class="d-flex">-->
            <!--                                  <div class="security-column-icon">-->
            <!--                                     <img src="{{ asset('img/dashboard-icons/settings/biometric.png') }}" alt="">-->
            <!--                                  </div>-->
            <!--                                <span>Enable 2FA</span>-->
            <!--                            </div>-->

            <!--                        </div>-->
            <!--                   </div>-->
            <!--           </div>-->
            <!--           <div class="row">-->
            <!--                 <div class="col-md-12">-->
            <!--                           <div class="security-block first-block fund-div bg-light-blue shadow-sm">-->
            <!--                        <div class="d-flex">-->
            <!--                             <div class="security-column-icon">-->
            <!--                                 <img src="{{ asset('img/dashboard-icons/settings/login-pw.png') }}" alt="">-->
            <!--                              </div>-->
            <!--                            <span>Identity Verification</span>-->
            <!--                        </div>-->

            <!--                    </div>-->
            <!--                 </div>-->
            <!--            </div>-->
            <!--            <div class="row">-->
            <!--                  <div class="col-md-12">-->
            <!--                        <div class="security-block first-block fund-div bg-light-blue shadow-sm">-->
            <!--                        <div class="d-flex">-->
            <!--                            <div class="security-column-icon">-->
            <!--                             <img src="{{ asset('img/dashboard-icons/settings/anti-phishing.png') }}" alt="">-->
            <!--                          </div>-->
            <!--                            <span>Anti-phishing Code</span>-->
            <!--                        </div>-->
            <!--                        <a href="javascript:void(0)" class="text-theme-yellow">Setup</a>-->
            <!--                        <div class="security-column-right">-->
            <!--                          <div class="d-flex align-items-center">-->
            <!--                             <span class="bx bx-x"></span>-->
            <!--                             <span class="text-theme-yellow">OFF</span>-->
            <!--                          </div>-->
            <!--                          <div class="security-right-button">-->
            <!--                             <a href="" class="btn-theme-sm">Enable</a>-->
            <!--                          </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                  </div>-->
            <!--            </div>-->
            <!--          <div class="row">-->
            <!--          <div class="col-md-12">-->
            <!--                  <div class="security-block first-block fund-div bg-light-blue shadow-sm">-->
            <!--                <div class="d-flex">-->
            <!--                     <div class="security-column-icon">-->
            <!--                    <img src="{{ asset('img/dashboard-icons/settings/authenticator.svg') }}" alt="">-->
            <!--                </div>-->
            <!--                    <span>Turn-on Withdrawal Whitelist</span>-->
            <!--                </div>-->
            <!--                <a href="javascript:void(0)" class="text-theme-yellow">Turn On</a>-->
            <!--                <div class="security-column-right">-->
            <!--                    <div class="d-flex align-items-center">-->
            <!--                         <span class="bx bx-x"></span>-->
            <!--                         <span class="text-theme-yellow">OFF</span>-->
            <!--                    </div>-->
            <!--                  <div class="security-right-button">-->
            <!--                     <a href="{{ url( app()->getLocale()) }}/user/password" class="btn-theme-sm">Enable</a>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-6 col-xl-8 mb-4">-->

            <!--</div>-->
           </div>




        </div>
    </div>
</div>


   <div id="customizeProfile" class="custom_modal_main_div">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Customize Your Profile </span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 px-2 m-0">
                            <div class="row">

                                <p class="mb-3 p-2 col-12">Customise your nickname and avatar for WealthMark Pay, C2C, Cloud-Live, Futures, NFT and other social features in Settings.</p>


                            <div class="form-check mb-2rem col-12">
                                    <input class="form-check-input" type="checkbox" value="" id="dontAsk">
                                    <label class="form-check-label fs-15" for="dontAsk">
                                        Don’t ask me again
                                     </label>
                            </div>

                                <div class="d-flex justify-content-between col-12 mt-3 w-100 text-center mb-3 p-0">

                                    <a href="javascript:void(0)" class="btn-default w-50 close_custom_modal_btn">Cancel</a> &nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="btn-yellow w-50 border-0"> Go To Settings</a>

                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>




   @include('admin.template.web_footer')
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.15.6/apexcharts.min.js'></script>
<script src='https://code.highcharts.com/highcharts.js'></script>
<script src='https://code.highcharts.com/highcharts-more.js'></script>
<script src='https://code.highcharts.com/modules/exporting.js'></script>
<script src='https://code.highcharts.com/modules/accessibility.js'></script>
      <script src="{{ asset('assets/admin_assets/js/dashboad-widget-script.js') }}"> </script>
</body>
</html>
