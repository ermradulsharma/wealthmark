<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">

  @include('template.web_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <style>

    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/

 .verifybtn{
     font-weight: 500;
     min-width: 72px;
     align-items: center;
     justify-content: center;
     box-sizing: border-box;
     font-family: BinancePlex,Arial,sans-serif!important;
     text-align: center;
     text-decoration: none;
     font-family: Binance PLEX;
     outline: none;
     font-size: 14px;
     color: #181A20;
     border-radius: 4px;
     padding: 4px 8px;
     border: none;
     background-color: #fcd535;
     height: 32px;
 }


  </style>
</head>

    <body class="antialiased">

            <!-- veryfication button top  row -->
            @if( $entity_verificationStatus)
                       @if( $entity_verificationStatus == 0 )
                    <div class="">
                                <div style="background-color: rgb(254, 246, 216); display: flex; place-content: center;">
                    <div style="width: 100%; max-width: 1200px; padding: 20px 24px;font-size: 14px;line-height: 24px;display: flex; ">
                            <img src="{{  asset('img/wealthmark-logo.svg') }}" style="display: inline-block;width: 24px; height: 24px;">
                            <div style="flex: 1;padding-left: 8px;margin-right: 24px;color: #1E2329;">
                                <div style="margin-right: 8px;display: inline-block;">Complete verification to access Binance products and services.</div>
                                <a style=" color: #C99400; display: inline-block;text-decoration: underline;" href="#">Learn more</a>
                            </div>

                            <a style="display: inline-block;text-decoration: none;" href="{{url(app()->getLocale().'/entity-verification')}}">
                                <button id="verify-btn"  style="" class="verifybtn"> Verify</button>
                            </a>
                    </div>
                </div>
                    </div>
                    @endif

                  @endif
            <!-- end veryfication button top  row -->

 @include('template.dashboard_mobile_menu')
@include('template.web_menu')
       <div class="dashboard-main">
    @include('template.sidebar')

    <div class="container-fluid">

        <!-- banner -->
        <div class=" d-flex align-items-center shadow-sm p-3">
            <div class="profile-img me-3">
            <img src="{{ asset('img/country-flag/India-Icon.svg') }}" alt="">
            </div>
            <div class="flex-item">
                <div class="profile-id">
                    <span class="me-2"></span>  <span class="text-muted">User ID: </span> <span>372573211</span>
                    <span class="mx-2 bi bi-twitter"></span><a href="" class="text-theme-yellow fs-14">Not Linked</a>
                </div>
                                <div class="profile-info">
                    <span>Last login time: </span> <span>2021-12-27 10:36:53</span>
                    <span class="ms-2">IP: </span> <span>   103.121.114.202  </span>
                </div>
            </div>
        </div>
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
                        <a href="#" name="next-step" class="next-step btn btn-theme"> Next Step</a>
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
            <!-- balance details -->
            <div class="col-lg-6 col-xl-8 mb-4">
                <div class="dashboard-card balance-details">
                    <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Balance Details</span>
                        <div class="ms-auto">
                        <a href="" class="btn-theme-sm active">Deposit</a>
                        <a href="" class="btn-theme-sm">Withdraw</a>
                        <a href="" class="btn-theme-sm">Gift Card</a>
                        <!-- <span class="bx bx-chevron-right fw-bold"></span> -->
                        </div>
                    </div>
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-4 border-bottom" id="pills-tab" role="tablist">
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-wazir-tab" data-bs-toggle="pill" data-bs-target="#pills-wazir" type="button" role="tab" aria-controls="pills-wazir" aria-selected="false">WazirX</button>
                        </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                            <div class="content">
                                <span class="text-muted">Account balance:</span>
                                <h2 class="coin-price">0.00000000 <span class="h5">BTC</span></h2>
                                <span class="text-muted">Estimated Value: </span>
                                <p class="h4">0.00</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                            ...
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
            </div>
            <!-- Referral -->
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="col-12 mb-3">
                    <div class="dashboard-card bg-theme">
                        <div class="dashboard-card-header ">
                        <span class="dashboard-card-heading"><a href="#" class="text-dark"> Earn up to 40% commission: Invite friends now! </a></span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </div>
                </div>
                <!-- Announcement -->
                <div class="col-12">
                    <div class="dashboard-card">
                        <a href="#">
                        <div class="dashboard-card-header">
                            <span class="dashboard-card-heading">Announcements</span>
                            <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                        </a>
                        <hr>
                        <div class="dashboard-card-body">
                        <div class="announcements">
                            <a href="#">
                                <span class="announcement">Trade and Win with WealthMark Futures: Share a Reward Pool of 2,400 BUSD Share Now</span>
                                <span class="text-muted float-end announcement-date" >27-12-2021</span>
                                <hr>
                            </a>
                        </div>
                        <div class="announcements">
                            <a href="#">
                                <span class="announcement">Trade and Win with WealthMark Futures: Share a Reward Pool of 2,400 BUSD Share Now</span>
                                <span class="text-muted float-end announcement-date" >27-12-2021</span>
                                <hr>
                            </a>
                        </div>
                        <div class="announcements">
                            <a href="#">
                            <span class="announcement">Trade and Win with WealthMark Futures: Share a Reward Pool of 2,400 BUSD Share Now</span>
                            <span class="text-muted float-end announcement-date" >27-12-2021</span>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- activity -->
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="dashboard-card balance-details">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills mb-4 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-activity-tab" data-bs-toggle="pill" data-bs-target="#pills-activity" type="button" role="tab" aria-controls="pills-activity" aria-selected="true">Activity</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-devices-tab" data-bs-toggle="pill" data-bs-target="#pills-devices" type="button" role="tab" aria-controls="pills-devices" aria-selected="false">Devices</button>
                        </li>
                        <li class="ms-auto" >
                            <a href="" class="btn-theme-sm active">Disable Account</a>
                        </li>
                        <li>
                            <a href="#"><span class="bx bx-chevron-right fw-bold ms-3"></span></a>
                        </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">
                            <div class="activities">
                                <div class="activity">
                                    <div>
                                    <span>Web</span>
                                    <p>27-12-2021</p>
                                    </div>
                                    <div class="ms-auto text-end">
                                    <span>117.241.150.46</span>
                                    <p>2021-12-28 10:36:35</p>
                                    </div>
                                </div>
                                <div class="activity">
                                    <div>
                                    <span>Web</span>
                                    <p>27-12-2021</p>
                                    </div>
                                    <div class="ms-auto text-end">
                                    <span>117.241.150.46</span>
                                    <p>2021-12-28 10:36:35</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-devices" role="tabpanel" aria-labelledby="pills-devices-tab">
                            <div class="activities">
                                <div class="activity">
                                    <div>
                                    <span>Web</span>
                                    <p>27-12-2021</p>
                                    </div>
                                    <div class="ms-auto text-end">
                                    <span>117.241.150.46</span>
                                    <p>2021-12-28 10:36:35</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- security -->
            <div class="col-lg-6 col-xl-4 mb-4" >
                <div class="dashboard-card">
                    <a href="#">
                        <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Increase your account security (0/4)</span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </a>
                    <hr>
                    <div class="dashboard-card-body">
                        <div class="d-flex">
                        <div class="security-block first-block">
                            <div class="d-flex">
                                <div class="dot"></div>
                                <span>Enable 2FA</span>
                            </div>
                            <a href="#" class="text-theme-yellow">On</a>
                        </div>
                        <div class="security-block second-block">
                            <div class="d-flex">
                                <div class="dot"></div>
                                <span>Identity Verification</span>
                            </div>
                            <a href="#" class="text-theme-yellow">Verify</a>
                        </div>
                        </div>
                        <div class="d-flex">
                        <div class="security-block third-block">
                            <div class="d-flex">
                                <div class="dot"></div>
                                <span>Anti-phishing Code</span>
                            </div>
                            <a href="#" class="text-theme-yellow">Setup</a>
                        </div>
                        <div class="security-block fourth-block">
                            <div class="d-flex">
                                <div class="dot"></div>
                                <span>Turn-on Withdrawal Whitelist</span>
                            </div>
                            <a href="#" class="text-theme-yellow">Turn On</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Distribution -->
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="dashboard-card">
                    <a href="#">
                        <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Distribution</span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </a>
                    <hr>
                    <div class="dashboard-card-body">
                        <div class="text-center">
                        <img src="{{ asset('img/no-record-icon.svg') }}" class="" alt="">
                        <p class="my-2">No Record Found</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- open Orders -->
            <div class="col-lg-6 mb-4">
                <div class="dashboard-card">
                    <a href="#">
                        <div class="dashboard-card-header">
                        <span class="dashboard-card-heading">Open Orders</span>
                        <span class="bx bx-chevron-right fw-bold ms-auto"></span>
                        </div>
                    </a>
                    <hr>
                    <div class="dashboard-card-body table-responsive">
                        <table class="table table-hover table-borderless open-order-table">
                        <thead>
                            <tr>
                                <th scope="col">Pair Date</th>
                                <th scope="col">Type / Side Trigger Conditions</th>
                                <th scope="col">Price Amount</th>
                                <th scope="col">Total Filled</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12-28-2021</td>
                                <td>Condition</td>
                                <td>12500</td>
                                <td>50000</td>
                                <td>some action</td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="text-center">
                        <img src="{{ asset('img/no-record-icon.svg') }}" class="" alt="">
                        <p class="my-2">No Record Found</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- trading fee Level -->
            <div class="col-lg-6 mb-4">
                <div class="dashboard-card">
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
                        <img src="{{ asset('img/no-record-icon.svg') }}" class="" alt="">
                        <p class="my-2">No Record Found</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<!-- Customize Your Profile popup -->
<div class="modal fade" id="customizeProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="customizeProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="customizeProfileLabel">Customize Your Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="pb-3 fs-15">Customise your nickname and avatar for WealthMark Pay, C2C, Cloud-Live, Futures, NFT and other social features in Settings.</p>

                <div class="form-check mb-2rem">
                    <input class="form-check-input" type="checkbox" value="" id="dontAsk">
                    <label class="form-check-label fs-15" for="dontAsk">
                        Don’t ask me again
                    </label>
                </div>
                <div class="row gx-2">
                    <div class="col-6">
                        <button type="" data-bs-dismiss="modal" class="btn-theme-light w-100">Cancel</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn-theme w-100">Go To Settings</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Security verification modal popup -->
<div class="modal fade" id="securityVerification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="securityVerificationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="securityVerificationLabel">Security verification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="pb-3 fs-15">Enable 2FA, including WealthMark/Google Authenticator, to increase your account security.</p>
                <div class="row">
                    <div class="col-6">
                        <a href="#">
                            <div class="card-body auth-block">
                                <img src="{{ asset('img/dashboard-icons/settings/authenticator.svg') }}" class="auth-img" alt="">
                                <p class="fs-14 mb-0 fw-bold my-2 text-dark">Enable WealthMark/Google Authenticator</p>
                                <span class="small text-muted">Recommended</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#">
                            <div class="card-body auth-block">
                                <img src="{{ asset('img/dashboard-icons/settings/phone-verification.svg') }}" class="auth-img" alt="">
                                <p class="fs-14 mb-0 fw-bold my-2 text-dark">Phone verification</p>
                                <!-- <span class="small text-muted">Recommended</span> -->
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-2">
                    <div class="col-12">
                        <button type="submit" class="btn-theme w-100" data-bs-dismiss="modal">Remind me Later</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

   @include('template.web_footer')

</body>
</html>
