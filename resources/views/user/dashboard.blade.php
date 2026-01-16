
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
  <style>

  .estimated-balance-div{
      display:flex;
      align-items:center;
      justify-content:space-between;
      flex-wrap:wrap;
  }
  @media(max-width:576px){
      .user-last-login{
          display:none!important
      }
      .estimated-balance-div h2 , .estimated-balance-div h5.fs-3 {
          font-size:20px;
      }
  }
  @media(max-width:400px){
      .profile-img img {
        height: 35px!important;
        width: 35px!important;
        border-radius: 50%;
        }
        .user-twitter {
            margin: 0px 0px 0px 0px!important;
        }
        .user-id {
            margin: 0px 5px 0px 0px!important;
        }
        .user-type {
            margin: 0px 5px 0px 0px!important;
        }
  }
    .user-other-info {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    .profile-img img {
        height: 60px;
        width: 60px;
        border-radius: 50%;
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

      ul.nicknamefield li {
          margin:0px 5px ;
      }
   ul.nicknamefield li a{
      background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);
    padding: 4px;
    color: black;
    font-size: 12px;
    line-height: 10px;
    border-radius: 5px;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
   }
   i.bi-chat-dots-fill {
    font-size: 27px;
}
#securityVerification .wm-custom-modal-diolog , #customizeProfile .wm-custom-modal-diolog {
    max-width: 450px;
    width: 100%;
}
  .verify-section {
    display: none;
}

  .chat-support span {
    /*min-width: 30px;*/
    /*height: 36px;*/
    /*    margin-top: 8px;*/
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
 .user-right-info p,  .user-right-info span {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 14px;
    line-height: 16px;
}
.user-name{
    display:flex;
    align-items: center;
}
.user-id{
        margin: 0px 15px 0px 0px;
}
.user-type{
        margin: 0px 15px 0px 0px;
        min-width:auto!important;
}
.user-twitter{
      margin: 0px 15px 0px 0px;
}
.user-other-info{
    display:flex;
    align-items: center;
}
.user-right-info .bi-chevron-right {
    font-size: 10px;
}
.user-right-info p {
    color: #858585;
}
 @media screen and (min-width: 1023px){
.security-column-right {
    margin-top: 0px;
    width: max-content !important;
}}

#estimate_drop .wm-dropdown-optn-item-inner.selected:after{
    content:'';
}

.coin-price {
    border-bottom:1px dashed black;
}
  </style>

</head>
<body>
   <!--{{  $ipaddress = getenv("REMOTE_ADDR")  }}-->


     <!-- veryfication button top  row -->
            @if( Auth::user()->account_type == 2)
                @if( $entity_verificationStatus == 0 )
                    <div class="">
                        <div style="background-color: rgb(254, 246, 216); display: flex; place-content: center;">
                            <div style="width: 100%; max-width: 1200px; padding: 20px 24px;font-size: 14px;line-height: 24px;display: flex; ">
                                    <img src="{{  asset('img/wealthmark-logo.svg') }}" style="display: inline-block;width: 24px; height: 24px;">
                                    <div style="flex: 1;padding-left: 8px;margin-right: 24px;color: #1E2329;">
                                        <div style="margin-right: 8px;display: inline-block;">Complete verification to access Wealthmark products and services.</div>
                                        <a style=" color: #C99400; display: inline-block;text-decoration: underline;" href="javascript:void(0)">Learn more</a>
                                    </div>

                                    <a style="display: inline-block;text-decoration: none;" href="{{url(app()->getLocale().'/entity-verification')}}">
                                        <button id="verify-btn"  style="" class=" btn  btn-theme-sm active"> Verify</button>
                                    </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
            <!-- end veryfication button top  row -->
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')

    <div class="container-fluid">

       	<section class="px-3 py-1 user-info-header">
       	    <div class="row">
            		<div class="col-md-12">
            			<div class="db-user-div">
            				<div class="profile-img me-3">
            				     @if(Auth::user()->avatar != null)
                                     <img src="{{ asset('img/avatar').'/'.Auth::user()->avatar }}" alt="" >
                                  @else
            						<img src="{{ asset('img/country-flag/India-Icon.svg') }}" alt="">
            					 @endif
            				</div>

            				<div class="user-right-info">
                				    <div class="user-name mt-3">
                				        <h6 class="mb-0">
                				        @if(Auth::user()->nick_name)
                                        {{  ucfirst(Auth::user()->nick_name) }}
                                    @else

                                     User:
                                    @endif
                                    &nbsp; <a href="{{ url(app()->getLocale().'/user/settings') }}"><i class="bi bi-pencil-square text-secondary" title="Edit Now"></i></a> &nbsp;&nbsp;<i class="bi bi-check2-circle" title="You do not currently have a wealthmark Account Bound Token."></i></h6>
                				     @if( Auth::user()->account_type == 1)
                                     &nbsp;Personal
                                    @endif
                                     @if( Auth::user()->account_type == 2)
                                     Entity
                                    @endif
                				    </div>
            				        <div class="user-other-info">
            				            <div class="user-id">
            				                <p>User ID</p>
            				                <span>{{ Auth::user()->user_name }}</span>

            				            </div>
            				            <div class="user-type">
            				                <p>User Type <i class="bi bi-chevron-right"></i></p>
                                            <span>Regular User</span>
            				            </div>
            				            <div class="user-twitter">
            				                  <p>Twitter <i class="bi bi-chevron-right"></i></p>
                                           <span class="fs-14">@if(Auth::user()->twitter_link_status == 1) Linked @else Not Linked @endif</span>
            				            </div>
            				            <div class="user-last-login">

            				                  <p>Last login time <span>
            				                      {{-- $log_data->log_datetime --}}
            				                      {{ App\Http\Controllers\HomeController::fetchDateFromSQL($log_data->log_datetime) }}

            				                </span><i class="bi bi-chevron-right"></i></p>
                                              <span>IP: </span> <span>{{json_decode($log_data->request_info)->ip}}</span>
            				            </div>
            				        </div>
            				</div>



            			</div>
            		</div>
            	 </div>
       	</section>

        <div class=" banner-section">
            <div class="verify-section rounded mb-3">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="banner-title">Welcome to WealthMark</h2>
                    <span class="text-muted">Just a few more steps and you're good to go!</span>
                    <form id="form">
                        <ul id="progressbar" >
                        <li class="active" id="step1">
                            <span> Register Account </span>
                        </li>
                        <li id="step2"> <span> 2FA </span> </li>
                        <li id="step3"> <span> Deposit Funds </span> </li>
                        </ul>
                        <!-- <div class="progress">
                        <div class="pbar"> </div>
                        </div> -->
                        <fieldset>
                        <a href="javascript:void(0)" name="next-step" class="next-step btn btn-theme"> Next Step</a>
                        </fieldset>
                        <fieldset>
                        <h2>Step 2 </h2>
                        <input type="button" name="next-step" class="next-step" value="Next Step" />
                        <input type="button" name="pre-step" class="pre-step"
                            value="Pre Step" />
                        </fieldset>
                        <fieldset>
                        <div class="finish">
                            <h2 class="text text-center">
                                <span> Step 3 </span>
                            </h2>
                        </div>
                        <a name="pre-step" class="pre-step" value="Pre Step">  </a>
                        </fieldset>
                    </form>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-xl-8 mb-4">
                  <!--  start upper section (verification and buy crypto section) -->
              @if( Auth::user()->account_type == 1)
                       @if( Auth::user()->government_id_verified == 0 )
                        <!--  start verification block in case of personal-->
                        @include('template.dashboard_top_verification_section')
                         <!--  end verification block in case of personal-->
                       @else
                            <!-- buy crypto section in case of personal -->
                         @include('template.crypto_buySell_section')
                            <!-- end buy crypto section in case of personal-->
                        @endif
              @endif

              @if( Auth::user()->account_type == 2)
                       @if( $entity_verificationStatus == 0 )
                       <!--  start verification block in case of entity -->
                          @include('template.dashboard_top_verification_section')

                        <!--  end verification block in case of entity-->
                        @else
                                <!-- buy crypto section case of entity-->
                          @include('template.crypto_buySell_section')
                                <!-- end buy crypto section case of entity-->
                        @endif
              @endif
             <!--  end upper section (verification and buy crypto section) -->

<!------------------------------------------------------------------------------------------------new section------------------------------------------------------------------------------------------------------------------>

              <div class="dashboard-card balance-details mb-3">
                    <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Estimated Balance  <div class="show-hide"> <i class="bi bi-eye" id="eye"></i> </div> </span>
                        <div class="ms-auto">
                        <a href="" class="btn-theme-sm active">Deposit</a>
                        <a href="" class="btn-theme-sm">Withdraw</a>
                        <a href="{{url(app()->getLocale().'/buy-bmk-coin')}}" class="btn-theme-sm">Gift Card</a>
                        <!-- <span class="bx bx-chevron-right fw-bold"></span> -->
                        </div>
                    </div>
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-4 border-bottom balance-navbar-block" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="true">Spot</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">P2P</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-margin-tab" data-bs-toggle="pill" data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin" aria-selected="false">Margin</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-futures-tab" data-bs-toggle="pill" data-bs-target="#pills-futures" type="button" role="tab" aria-controls="pills-futures" aria-selected="false">Futures</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-earn-tab" data-bs-toggle="pill" data-bs-target="#pills-earn" type="button" role="tab" aria-controls="pills-earn" aria-selected="false">Earn</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-pool-tab" data-bs-toggle="pill" data-bs-target="#pills-pool" type="button" role="tab" aria-controls="pills-pool" aria-selected="false">Pool</button>
                                </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                            <div class="content">
                                <div class="estimated-balance-div">
                                    <div>
                                        <span class="text-muted">Account balance:</span>
                                        <div class="d-flex align-items-center mb-3">
                                            <h2 class="coin-price m-0"><?php echo number_format($totalAvailableCoinsInMarketWallet ,8)  ?>  <span class="h5 fs-3">BMK</span></h2>
                                            <div id="change_currency_value" class=" d-flex align-items-center">
                                                <span class="px-2">≈</span>
                                                <span class="fs-3">  $<?php echo number_format($available_ballence_bmk_usd ,2); ?> </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <span class="text-muted">Account balance(<span class='fs-13 text-danger'>Order Dispute Hold BMK</span>):</span>
                                        <div class="d-flex align-items-center mb-3">
                                            <h2 class="dispute-coin-price m-0"><?php echo number_format(json_decode($held_coin)->held_coins ,8);  ?>  <span class="h5 fs-3">BMK</span></h2>
                                        </div>
                                   </div>
                                </div>


                            <div class="chart-btn-div">
                                <div class="chart-summary">
                                    <div class="duration active "> 9 Days </div>
                                    <div class="duration"> 30 Days </div>
                                </div>

                                <div class="chart-btn-div-right">
                                    <div class="fs-14 d-flex align-items-center">
                                        <span class="me-1"><i class="bi bi-circle-fill"></i></span>
                                        <span>Portfolio</span>
                                    </div>
                                    <div class="fs-14 d-flex align-items-center">
                                        <span><i class="bi bi-bar-chart"></i></span>
                                        <span class="mx-1">Wallet Overview</span>
                                         <span><i class="bi bi-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="h-divider mt-2 mb-2"></div>

                            <p class="fs-12 text-muted font-weight-normal mb-4">The daily assets change data will be updated before 08:00 UTC the next day. </p>

                      <!--<div id="chart-div-1" style="min-width: 310px; width:100%; height: 160px; margin: 0 auto"></div>-->

                      <div id="container" style="min-width: 300px; width:100%; height: 200px; margin: 0 auto"></div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                            <div style="min-height:200px;">
                                <canvas id="myChart-div" style="width:100%;"></canvas>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-margin" role="tabpanel" aria-labelledby="pills-margin-tab">
                            ///
                        </div>
                        <div class="tab-pane fade" id="pills-futures" role="tabpanel" aria-labelledby="pills-futures-tab">
                            !!!
                        </div>
                        <div class="tab-pane fade" id="pills-earn" role="tabpanel" aria-labelledby="pills-earn-tab">
                            @@@
                        </div>
                        <div class="tab-pane fade" id="pills-pool" role="tabpanel" aria-labelledby="pills-pool-tab">
                            $$$
                        </div>
                        </div>
                    </div>
                </div>

<!------------------------------------------------------------------------------------------------new section------------------------------------------------------------------------------------------------------------------>
 <div class="dashboard-card balance-details mb-3">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills mb-4 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-activity-tab" data-bs-toggle="pill" data-bs-target="#pills-activity" type="button" role="tab" aria-controls="pills-activity" aria-selected="true">Activity</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-devices-tab" data-bs-toggle="pill" data-bs-target="#pills-devices" type="button" role="tab" aria-controls="pills-devices" aria-selected="false">Devices</button>
                        </li>
                        <li class="ms-auto" >
                            <a href="{{ url( app()->getLocale()) }}/user/disable-account" class="btn-theme-sm active">Disable Account</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><span class="bx bx-chevron-right fw-bold ms-3"></span></a>
                        </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">


                            <div class="activities">
                            @foreach($log_data_lastfewrows as $each_log_data)
                            <?php $json_string = json_decode($each_log_data->request_info); ?>
                                 <div class="activity">
                                    <div>
                                    <span>Web</span>
                                    <p>  {{ ucfirst($each_log_data->log_type)  }}</p>

                                    </div>
                                    <div class="ms-auto text-end">
                                  <span>{{ $json_string->ip }}</span>
                                    <p>{{ date('d-m-Y H:i:s', strtotime($each_log_data->log_datetime)) }}</p>
                                    </div>
                                </div>

                            @endforeach


                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-devices" role="tabpanel" aria-labelledby="pills-devices-tab">
                            <div class="activities">
                              @foreach($security_activity_data as $each_security_activity)

                                 <div class="activity">
                                    <div>
                                    <span>Source:{{ ucfirst($each_security_activity->source)  }}</span>
                                    <p>Activity:
                                           @if($each_security_activity->activity == 0)
                                                 Disabled
                                            @endif

                                            @if($each_security_activity->activity == 1)
                                               Enabled
                                            @endif
                                    </p>
                                    <p>
                                        @if($each_security_activity->type == 0)
                                            Google
                                        @endif

                                        @if($each_security_activity->type == 1)
                                            Wealthmark
                                        @endif
                                    -
                                       @if($each_security_activity->status == 0)
                                             Failed
                                        @endif

                                        @if($each_security_activity->status == 1)
                                            Success
                                        @endif
                                    </p>
                                    </div>
                                    <div class="ms-auto text-end">
                                  <span>IP:{{ $each_security_activity->data }}</span>
                                    <p>{{ date('d-m-Y H:i:s', strtotime($each_security_activity->updated_at)) }}</p>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

 <!------------------------------------------------------------------------------------------------new section------------------------------------------------------------------------------------------------------------------>
  <div class="dashboard-card mb-3">
                    <a href="javascript:void(0)">
                        <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Open Orders</span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </a>
                    <hr>
                    <div class="dashboard-card-body">
                       <div class="table-responsive">
                           <?php //echo "<pre>"; print_r($getpendingorder); ?>
                           @if($getpendingorder != '0')
                            <table class="table open-order-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Trade Type</th>
                                        <th scope="col">Crypto Type</th>
                                        <th scope="col">Price Amount</th>
                                        <th scope="col">Total Crypto</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$getpendingorder[0]['created_at']}}</td>
                                        <td>{{$getpendingorder[0]['tradetype']}}</td>
                                        <td>{{$getpendingorder[0]['crypto_type']}}</td>
                                        <td>{{$getpendingorder[0]['domestic_currency_value']}} {{$getpendingorder[0]['domestic_currency_type']}}</td>
                                        <td>{{$getpendingorder[0]['total_crypto_value']}} {{$getpendingorder[0]['crypto_type']}}</td>
                                        <td><a class="btn-theme-sm active" onclick="checkuser(this.id)" id ="{{$getpendingorder[0]['id']}}">View</a></td>
                                    </tr>

                                </tbody>
                            </table>
                            @else
                            <p class="my-2" style="text-align: center;">No Pending Order Found</p>
                            @endif
                       </div>
                        <div class="text-center">
                        <!--<img src="{{ asset('img/no-record-icon.svg') }}" class="" alt="">-->
                          <!--<p class="my-2">No Record Found</p> -->
                        </div>
                    </div>
                </div>

 <!------------------------------------------------------------------------------------------------new section------------------------------------------------------------------------------------------------------------------>


 <!------------------------------------------------------------------------------------------------new section------------------------------------------------------------------------------------------------------------------>

                </div>
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="stycky-div">
                      <div id="increase-your-account-security " class="mb-3">
                           <div class="dashboard-card">
                    <a href="javascript:void(0)">
                        <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Increase your account security (0/4)</span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </a>
                    <hr>
                    <div class="dashboard-card-body">
                        <div class="row">
                               <div class="col-md-12">
                                    <div class="security-block first-block fund-div bg-light-blue shadow-sm">
                                        <div class="d-flex">
                                              <div class="security-column-icon">
                                                 <img src="{{ asset('img/dashboard-icons/settings/enable2fa.svg') }}" alt="">
                                              </div>
                                            <span>Enable 2FA</span>
                                        </div>
                                        <!--<a href="javascript:void(0)" class="text-theme-yellow">On</a>-->
                                        <div class="security-column-right">
                                            <div class="d-flex align-items-center">
                                                @if(Auth::user()->is_two_factor==0)
                                                 <span class="bx bx-x"></span>
                                                 <span class="text-theme-yellow">Unset</span>
                                                @else
                                                <span class="bx bx-check"></span>
                                                <span class="text-theme-green">On</span>
                                                @endif
                                            </div>

                                            <!--<div class="security-right-button">-->
                                            <!--    @if(Auth::user()->is_two_factor==0)-->
                                            <!--        <a href="{{ url( app()->getLocale()) }}/enable-google-authenticator" class="btn-theme-sm">Enable</a>-->
                                            <!--    @else-->
                                                    <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#change_google_authenticator" class="btn-theme-sm">Change</a>-->
                                                    <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#remove_google_authenticator" class="btn-theme-sm">Remove</a>-->
                                            <!--         <a href="javascript:void(0)" data-target-modal="change_google_authenticator" class="btn-theme-sm">Change</a>-->
                                            <!--        <a href="javascript:void(0)" data-target-modal="remove_google_authenticator" class="btn-theme-sm">Remove</a>-->
                                            <!--    @endif-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                               </div>
                       </div>

                       <div class="row">
                             <div class="col-md-12">
                                       <div class="security-block first-block fund-div bg-light-blue shadow-sm">
                                    <div class="d-flex">
                                         <div class="security-column-icon">
                                             <img src="{{ asset('img/dashboard-icons/settings/identity-verifications.svg') }}" alt="">
                                          </div>
                                        <span>Identity Verification</span>
                                    </div>
                                    <!--<a href="{{ url(app()->getLocale().'/user/identification') }}" class="text-theme-yellow">Verify</a>-->
                                       <?php
                                        if( Auth::user()->account_type == 1 ){
                                            if(Auth::user()->government_id_verified == 1){

                                           echo' <a href="#" class="d-inline py-2 px-3 round shadow-sm cmplet_btn">Verified</a>';

                                            echo "";
                                            }else{

                                             echo'<a href="'.url(app()->getLocale().'/need-kyc').'" class="btn-theme w-100"> Start Now </a>';

                                            }
                                        };

                                        if( (Auth::user()->account_type == 2) ){
                                            if($entity_verificationStatus == 1  ){

                                          echo  '<a href="#" class="d-inline py-2 px-3 round shadow-sm cmplet_btn">Verified</a>';

                                            }else{

                                            echo '<a href="'. url(app()->getLocale().'/entity-verification').'" class="btn-yellow "> Start Now </a>';

                                            }
                                        } ;

                                       ?>
                                </div>
                             </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                    <div class="security-block first-block fund-div bg-light-blue shadow-sm">
                                    <div class="d-flex">
                                        <div class="security-column-icon">
                                         <img src="{{ asset('img/dashboard-icons/settings/anti-phishing.svg') }}" alt="">
                                      </div>
                                        <span>Anti-phishing Code</span>
                                    </div>
                                    <!--<a href="javascript:void(0)" class="text-theme-yellow">Setup</a>-->
                                    <div class="security-column-right">
                                      <div class="d-flex align-items-center">
                                         <span class="bx bx-x"></span>
                                         <span class="text-theme-yellow">OFF</span>
                                      </div>
                                      <div class="security-right-button">
                                         <a href="javascript:void(0)" class="btn-theme-sm">Enable</a>
                                      </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                      <div class="row">
                      <div class="col-md-12">
                              <div class="security-block first-block fund-div bg-light-blue shadow-sm">
                            <div class="d-flex">
                                 <div class="security-column-icon">
                                <img src="{{ asset('img/dashboard-icons/settings/trun-on-wdrl-whitelist.svg') }}" alt="">
                            </div>
                                <span>Turn-on Withdrawal Whitelist</span>
                            </div>
                            <!--<a href="javascript:void(0)" class="text-theme-yellow">Turn On</a>-->
                            <div class="security-column-right">
                                <div class="d-flex align-items-center">
                                     <span class="bx bx-x"></span>
                                     <span class="text-theme-yellow">OFF</span>
                                </div>
                              <div class="security-right-button">
                                 <!--<a href="{{ url( app()->getLocale()) }}/user/password" class="btn-theme-sm" >Enable</a>-->
                                 <a href="javascript:void(0)" class="btn-theme-sm" >Enable</a>
                              </div>
                            </div>
                        </div>
                      </div>
                        </div>
                    </div>
                </div>
                      </div>
                       <div class="col-12 mb-3">
                    <div class="dashboard-card bg-theme">
                        <div class="dashboard-card-header ">
                        <span class="dashboard-card-heading"><a href="javascript:void(0)" class="text-dark"> Earn up to 40% commission: Invite friends now! </a></span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </div>
                </div>
                <!-- Announcement -->
                <div class="col-12 mb-3">
                    <div class="dashboard-card position-relative">

                        <div class="dashboard-card-header justify-content-between">
                            <span class="dashboard-card-heading">Announcements</span>
                            <a href="{{ url(app()->getLocale()).'/announcements'}}" class="border-yellow text-dark px-2 py-1 rounded fs-12">
                            <span class="me-1">View More</span>    <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>

                        <hr>
                        <div class="dashboard-card-body">
                            <div class="max-height-350px scrollbar-style " >
                             <marquee scrollamount="2" direction="up" loop="true" onmouseover="this.stop();" onmouseout="this.start();">
                                @foreach($announce_data as $announcement)
                                    <div class="announcements">
                                   <a href="{{ url(app()->getLocale().'/announcements-articles/'.$announcement->slugs) }}" >
                                        <span class="announcement">{{ substr($announcement->title, 0, 50).'...' }}</span>
                                     <span class="text-muted float-end announcement-date" >{{ date('d-m-Y H:i:s', strtotime($announcement->updated_at))  }}</span>

                                    </a>

                                    </div>
                                @endforeach

                                <!-- <div class="announcements">-->
                                <!--    <a href="javascript:void(0)">-->
                                <!--        <span class="announcement">Buy & Sell Crypto on Wealthmark: Where You Trade Crypto in 3 Steps Fund Your Account with Traditional Currencies.</span>-->
                                <!--        <span class="text-muted float-end announcement-date" >27-12-2021</span> -->

                                <!--    </a>-->
                                <!--</div>-->

                                <!-- <div class="announcements">-->
                                <!--    <a href="javascript:void(0)">-->
                                <!--    <span class="announcement">Keep track of your profits, losses and portfolio valuation with our easy to use platform.</span>-->
                                <!--    <span class="text-muted float-end announcement-date" >27-12-2021</span> -->
                                <!--    </a>-->
                                <!--</div>-->
                        </marquee>
                        </div>


                        </div>
                    </div>
                </div>

                 <div class="dashboard-card mb-3">
                    <a href="javascript:void(0)">
                        <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Distribution</span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </a>
                    <hr>
                    <div class="dashboard-card-body">
                        <div class="text-center">
                        <!--<img src="{{ asset('img/no-record-icon.svg') }}" class="" alt="">-->
                        <p class="my-2">No Record Found</p>
                        </div>
                    </div>
                </div>

                  <div class="dashboard-card mb-3">
                    <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Your Trading Fee Level</span>
                        <div class="ms-auto">
                        <a href="" class="btn-theme-sm active">Trading Fee</a>
                        <a href=""><span class="bx bx-chevron-right fw-bold ms-3"></span></a>
                        </div>
                    </div>
                    <hr>
                    <div class="dashboard-card-body">
                        <div class="text-center">
                        <!--<img src="{{ asset('img/no-record-icon.svg') }}" class="" alt="">-->
                        <p class="my-2">No Record Found</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
          </div>







        </div>
    </div>
</div>


   <div id="customizeProfile" clas="custom_modal_main_div">
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

                                <p class="mb-3 p-2 col-12" style="font-size: 14px;">Customise your nickname and avatar for WealthMark Pay, C2C, Cloud-Live, Futures, NFT and other social features in Settings.</p>


                            <div class="form-check mb-2rem col-12">
                                    <input class="form-check-input" type="checkbox" value="" id="dontAsk">
                                    <label class="form-check-label fs-15" for="dontAsk">
                                        Don’t ask me again
                                     </label>
                            </div>

                                <div class="d-flex justify-content-between col-12 mt-3 w-100 text-center mb-3 p-0">

                                    <a href="javascript:void(0)" class="btn-default w-50 close_custom_modal_btn">Cancel</a> &nbsp;&nbsp;
                                    <a href="{{ url(app()->getLocale()).'/user/settings' }}" class="btn-yellow w-50 border-0"> Go To Settings</a>

                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Security verification modal popup -->
    @if(Auth::user()->is_two_factor==0 or Auth::user()->is_phone_verified==0 or Auth::user()->is_mail_verified==0)
      <div id="securityVerification" class="custom_modal_main_div">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Security verification </span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close m-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                         <div class="container-fluid p-0 m-0 min-height-200px">
                             <div class="row">
                                 <p class="col-12 pb-2 mb-2">Enable 2FA to increase your account security</p>

                              @if(Auth::user()->is_two_factor==0)
                                <div class="col-12">
                                    <a href="{{ url( app()->getLocale()) }}/enable-google-authenticator">
                                        <div class="card-body auth-block border mb-2">
                                            <div class="d-flex align-items-center">
                                                 <img src="{{ asset('img/dashboard-icons/settings/wm-google-authenticator.svg') }}" class="auth-img" alt="">
                                                 <div class="text-left">
                                                        <p class="fs-13 mb-0 fw-bold text-dark">Enable WealthMark/Google Authenticator</p>
                                                        <span class="small  badge bg-warning text-white">Recommended</span>
                                                 </div>
                                            </div>
                                           <div>
                                               <i class="bi bi-arrow-right"></i>
                                           </div>

                                        </div>
                                    </a>
                                </div>
                            @endif

                            @if(Auth::user()->is_phone_verified==0)
                                <div class="col-12">
                                    <a href="{{ url( app()->getLocale()) }}/user/enable-sms-authentication">
                                        <div class="card-body auth-block border mb-2">


                                           <div class="d-flex align-items-center">


                                                <img src="{{ asset('img/dashboard-icons/settings/phone-number-verification.svg') }}" class="auth-img" alt="">
                                                <div class="text-left">
                                                        <p class="fs-13 mb-0 fw-bold text-dark">Phone verification</p>
                                                        <span class="d-block fs-12 text-muted">Phone OTP Based Verification.  </span>

                                                </div>
                                            </div>
                                           <div>
                                               <i class="bi bi-arrow-right"></i>
                                           </div>


                                        </div>
                                    </a>
                                </div>
                            @endif

                            @if(Auth::user()->is_mail_verified==0)
                                <div class="col-12">
                                    <a href="{{ url( app()->getLocale()) }}/user/enable-email-authentication">
                                        <div class="card-body auth-block border mb-2">
                                            <div class="d-flex align-items-center">

                                            <img src="{{ asset('img/dashboard-icons/settings/email-address-verification.svg') }}" class="auth-img" alt="">
                                            <div class="text-left">
                                                <p class="fs-13 mb-0 fw-bold text-dark">Email verification</p>
                                                <span class="d-block fs-12 text-muted"> Email OTP Based Verification. </span>
                                            </div>
                                             </div>
                                         <div>
                                               <i class="bi bi-arrow-right"></i>
                                           </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                             <div class="d-block col-12 mt-3 w-100 text-center  mb-3">
                            <button type="submit" class="btn-yellow d-block w-100 border-0 close_custom_modal_btn" >Remind me Later</button>
                            </div>

                             </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @endif


   @include('template.country_language')
   @include('template.web_footer')

<script src="https://code.highcharts.com/highcharts.js"></script>


<!--===================================this link for id mychart-div=====================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
<!--===================================this link for id mychart-div=====================================-->


<script>
    $(document).ready(function(){
        $("#securityVerification").children().addClass('custom-modal-bck-bg').removeClass('hide');
        $("#customizeProfile").children().addClass('custom-modal-bck-bg').removeClass('hide');
    });

    $('.close_custom_modal_btn').click(function(){
        $(this).closest(".custom-modal-bck-bg").addClass('hide').removeClass('custom-modal-bck-bg');
    });

    $('.close_kyc_complete').click(function (){
        $(this).closest('.kyc-complete-notification').hide()
    })

    $(".duration").click(function (){
        $(this).addClass('active');
        $(this).siblings().removeClass('active')
    })

    $("#eye").click(function (){
        if($(this).hasClass('bi-eye')){
            $(this).addClass('bi-eye-slash');
            $(this).removeClass('bi-eye');
            $('.coin-price').html("***********");
            $('.dispute-coin-price').html("***********");
            $('.coin-price').css("border-bottom" , "1px solid transparent")
            $('#change_currency_value').addClass('hide');
            $('#estimate_drop').css("display","none !important");
        }else{
            $(this).addClass('bi-eye');
            $(this).removeClass('bi-eye-slash');
            $('.coin-price').html("<?php echo number_format($totalAvailableCoinsInMarketWallet ,8)  ?> BMK");
            $('.dispute-coin-price').html("<?php echo number_format(json_decode($held_coin)->held_coins ,8)  ?> BMK");
            $('.coin-price').css("border-bottom" , "1px dashed black")
            $('#change_currency_value').removeClass('hide');
            $('#estimate_drop').css("display","flex !important");
         }
    })
</script>
<script>
    // ======================this code for chart id chart-div-1======================================

// Highcharts.chart('chart-div-1', {
//   chart: {
//     type: 'areaspline',
//     style: {
//       //fontFamily: 'MuseoSans_normal, sans-serif'
//     }
//   },
//   title: {
//     text: ''
//   },
//   legend: {
//     enabled: false
//   },
//   xAxis: {
//     categories: [
//       '01', '02', '03', '04'
//     ],
//     // plotBands: [{ // visualize the weekend
//     //   from: 4.5,
//     //   to: 6.5,
//     //   color: 'rgba(68, 170, 213, .2)'
//     // }]

//   },
//   yAxis: {
//     title: {
//       text: ''
//     }

//   },
//   tooltip: {
//     shared: true,
//     valueSuffix: ' msccf/d'
//   },
//   credits: {
//     enabled: false
//   },
//   plotOptions: {
//     areaspline: {
//       fillOpacity: 1
//     }
//   },
//   series: [{
//     marker: {
//       enabled: false
//     },
//     //color: "#fec00f",
//     data: [
//       50, 50, 40, 42
//     ],
//      color: {
//     linearGradient: { x1: 0, x2: 1, y1: 0, y2: 1 },
//     stops: [
//         [0, '#000'],
//         [1, '#4caf50']
//     ]
//     }

//   }]
// });
</script>





<script>
    $(function () {
  var chart;
  $(document).ready(function () {
    chart = new Highcharts.Chart({
        // colors: ['#ff0000', '#3f51b5', '#795548', '#009688', '#21ff10'],
        //var seriesData = [["apple",29.9], ["orange",71.5], ["mango",106.4]];
        chart : {
          renderTo : 'container',
          type : 'spline',
          // backgroundColor : {
          //   linearGradient : [0, 0, 0, 400],
          //   stops : [
          //     [0, 'rgb(96, 96, 96)'],
          //     [1, 'rgb(16, 16, 16)']
          //   ]
          // }
        },
        title : {
          text : ''
        },
        subtitle : {
          text : ''
        },
        xAxis : {
            labels: {
                enabled: true
            },
            categories: ["demo1", "demo2" , "demo3" , "demo4", "demo5" , "demo6" , "demo7"],

        //   type : 'datetime',
        //   dateTimeLabelFormats : { // don't display the dummy year
        //     month : '%e. %b',
        //     year : '%b'
        //   }
        },
        yAxis : {
          title : {
            text : ''
          },
          min : 0
        },
        tooltip : {
          formatter : function () {
            return '<b>' + 'Wealthmark Chart' + '</b><br/>' +
            this.y + ' m';
          }
        },
        plotOptions : {
          area : {
            lineWidth : 0,
            marker : {
              enabled : false,
              states : {
                hover : {
                  enabled : true,
                  radius : 5
                }
              }
            },
            shadow : false,
            states : {
              hover : {
                lineWidth : 1
              }
            }
          }
        },

        series : [{
            showInLegend: false,
            name : '',
            type : "area",

            // fillColor : {
            //   linearGradient : [0, 0, 0, 300],
            //   stops : [
            //     [0, '#ffffff00'],
            //     [1, 'rgba(254,192,15,1)']
            //   ]
            // }
                fillColor: {
            linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
            stops: [
              [0, '#fdc116'],
              [1, '#ffffff']
            ]
          }
            ,
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data : [

              [100],
              [200],
              [200],
              [180],
              [150],
              [100],
              [200],

            //   [Date.UTC(1970, 11, 2), 0.8],
            //   [Date.UTC(1970, 11, 9), 0.6],
            //   [Date.UTC(1970, 11, 16), 0.6],
            //   [Date.UTC(1970, 11, 28), 0.67],
            //   [Date.UTC(1971, 0, 1), 0.81],
            //   [Date.UTC(1971, 0, 8), 0.78],
            //   [Date.UTC(1971, 0, 12), 0.98],
            //   [Date.UTC(1971, 0, 27), 1.84],
            //   [Date.UTC(1971, 1, 10), 1.80],
            //   [Date.UTC(1971, 1, 18), 1.80],
            //   [Date.UTC(1971, 1, 24), 1.92],
            //   [Date.UTC(1971, 2, 4), 2.49],
            //   [Date.UTC(1971, 2, 11), 2.79],
            //   [Date.UTC(1971, 2, 15), 2.73],
            //   [Date.UTC(1971, 2, 25), 2.61],
            //   [Date.UTC(1971, 3, 2), 2.76],
            //   [Date.UTC(1971, 3, 6), 2.82],
            //   [Date.UTC(1971, 3, 13), 2.8],
            //   [Date.UTC(1971, 4, 3), 2.1],
            //   [Date.UTC(1971, 4, 26), 1.1],
            //   [Date.UTC(1971, 5, 9), 0.25],
            //   [Date.UTC(1971, 5, 12), 0]
            ]
          }

        ]
      });
  });
});


</script>



<!--===================================this code for id mychart-div=====================================-->

<script>
    var ctx = document.getElementById('myChart-div').getContext('2d');

var chart = new Chart(ctx, {

	// The type of chart we want to create
	type: 'line', // also try bar or other graph types

	// The data for our dataset
	data: {
		labels: ["demo1", "demo2","demo3","demo4"],
		// Information about the dataset
    datasets: [{
			label: "Wealthmark",
			backgroundColor: '#fdc116',
			borderColor: '#f8a532',
			data: [100,100,100,100],
		}]
	},

	// Configuration options
	options: {
    layout: {
      padding: 10,
    },
		legend: {
			position: 'bottom',
      display:false
		},
		title: {
			display: false,
			text: 'Precipitation in Toronto'
		},
		scales: {
			yAxes: [{
        gridLines: {
                display:false
            },
				scaleLabel: {
					display: false,
					labelString: 'Precipitation in mm'
				}
			}],
			xAxes: [{
        gridLines: {
                display:false
            },
				scaleLabel: {
					display: false,
					labelString: 'Month of the Year'
				}
			}]
		}
	}
});

</script>
  <script>

        function checkuser(id) {
           var orderid = id;
            var trader_id = '<?php echo Auth::user()->id; ?>';
           console.log(trader_id);
            $.ajax({
                type: 'post',
                url: '{{ "/getOrderDetailbyId" }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'orderId' : orderid,
                },
                success: function (data) {
                    setTimeout(function(){
                        if(data.order_data.buyer_id == trader_id){
                            window.location.href = '{{ url(app()->getLocale())."/user/confirmed-order-info" }}';
                        }
                        if(data.order_data.seller_id == trader_id){
                            window.location.href = '{{ url(app()->getLocale())."/users/seller-confirm-order" }}';
                        }
                    }, 1000)
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    triggerAlert('something went wrong!', 'error');
                }
            });
        }

    </script>
<!--===================================this code for id mychart-div=====================================-->
</body>

</html>

