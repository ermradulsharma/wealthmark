<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wealthmark Staking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  @include('template.web_css')
   <style>
    .stack_font_size {
      font-weight: 100 !important;
      font-size: 13px;
      color: black;
    }


.form-control:disabled,
.form-control[readonly] {
  background-color: #e1f5fe75 !important;
  opacity: 1;
}
.bg-light-blue-2 {
  background: #e1f5fe1a;
}
.error {
  color: red;
  font-size: 13px;
}

.error_border {
  border: 1px solid red;
}
.sidebar-nav {
  display: block;
}





.fund-div {
  margin: 0px 0px !important;
}

.dashboard-card {
  border-radius: 3px;
  padding: 10px !important;
}

.fund-div {
  padding: 10px 20px;
  border-radius: 3px;
}

.filtered_records td {
  white-space: nowrap;
}
.h-divider.height-2px {
  height: 2px !important;
}

.Notice-ul {
  font-size: 14px;
  font-weight: normal !important;
}
.Notice-ul li {
  display: flex;
  align-items: center;
  color: black;
  line-height: 20px;
  margin-bottom: 5px;
  padding: 5px;
  border-bottom: 1px dotted #bed3f7;
}
.Notice-ul li i {
  color: #263674;
}



@media (min-width: 992px) {
  .dashboard-main.coin_staking > .container-fluid {
    max-width: calc(100% - 260px);
  }
}

</style>

</head>
<body>
    @include('template.web_menu')

    <div class="dashboard-main coin_staking">
       @include('template.sidebar')

       <div class="container-fluid p-0">
          <div class="bg-light-blue p-3 w-100">
            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <h2 class="fw-bold mb-0">Staking</h2>
            </div>
            <div>
                <div class="bg-white shadow-none border-0 px-4 py-2 mb-2">
                    <div class="row py-3 flex-wrap">
                        <div class="col-lg-12 col-xl-8">
                            <div class="dashboard-card mb-3">
                                <div class="dashboard-card-body">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Maturity Status</th>
                                                        <th scope="col">Coin Name</th>
                                                        <th scope="col">Coin Type</th>
                                                        <th scope="col">Deposit Date</th>
                                                        <th scope="col">Maturity Date</th>
                                                        <th scope="col">Interest Rate</th>
                                                        <th scope="col">Before Maturity Coins</th>
                                                        <!--<th scope="col">After Maturity Coins</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody class="filtered_records">
                                                  <?php //print_r($userStakingData); ?>
                                                  @foreach($userStakingData as $key => $data)
                                                    <tr>
                                                        <td>{{ $userStakingData->firstItem() + $key }}</td>
                                                        <td><a href="javascript:void(0)" id="staking_view" data-bs-toggle="modal" data-bs-target="#show_staking_coin" onClick="show_staking_record({{$data->id}})" class="btn-yellow px-3 py-1">View</a></td>
                                                        <td>
                                                            @if($data->status==0)<span class="badge bg-warning">Pending</span> @endif
                                                            @if($data->status==1)<span class="badge bg-success">Active</span> @endif
                                                        </td>
                                                        <td>
                                                            @if($data->maturity_status==0)<span class="badge bg-warning">in process</span> @endif
                                                            @if($data->maturity_status==1)<span class="badge bg-success">Active</span> @endif
                                                        </td>
                                                        <td>
                                                            @if($data->staking_coin_name=="BMK")
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ url("storage/app/bmklogo/12.png") }}" class="max-width-20px me-2">
                                                                    <span class="fs-12 fw-bolder">{{ $data->staking_coin_name }}</span>
                                                                </div>
                                                            @endif

                                                            @if($data->staking_coin_name=="ETH")
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ url("assets/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png") }}" class="max-width-20px me-2">
                                                                    <span class="fs-12 fw-bolder">{{ $data->staking_coin_name }}</span>
                                                                </div>
                                                            @endif

                                                            @if($data->staking_coin_name=="BTC")
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ url("assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png") }}" class="max-width-20px me-2">
                                                                    <span class="fs-12 fw-bolder">{{ $data->staking_coin_name }}</span>
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td>{{ $data->staking_coin_type }}</td>
                                                        <td>{{ date("d-m-Y", strtotime($data->date_of_deposite)) }}</td>
                                                        <td>{{ date("d-m-Y", strtotime($data->maturity_date)) }}</td>
                                                        <td>{{ $data->percentage_of_interest }}%</td>
                                                        <td>{{ $data->before_maturity_coins }}</td>
                                                        {{--<td>{{ $data->after_maturity_coins }}</td>--}}
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="account_activity_pagination mt-3">
                                            {!! $userStakingData->links('pagination::bootstrap-5') !!}
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-4">
                            <div class="dashboard-card">
                                <div class="col-md-12">
                                    <div class="security-block fund-div bg-light-blue shadow-sm w-100">
                                        <div class="d-flex">
                                            <span>Staking Coin</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="row">
                                        <form action="" method="POST">
                                            {{ csrf_field() }}
                                            <div class="row" id="coin_frm">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-floating mt-3">
                                                        <select id="coin_list" onChange="getCoin(this.value);"  name="coin_list" class="form-control">
                                                            <option value=""></option>
                                        					<option value="BMK">BMK</option>
                                        					<option value="BTC">BTC</option>
                                        					<option value="ETH">ETH</option>
                                        				</select>
                                        				<label for="">Select Coin Name</label>
                                                        <span class="error" id="coin_list_err"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12" id="bmk_coin_list_type">
                                                    <div class="form-floating mt-3">
                                                        <select name="bmk_coin_type" id="bmk_coin_type" class="form-control" onChange="getCoinType(this.value);">
                                                            <option value=""></option>
                                                            <!--<option value="P2P">P2P({{$p2p_coin}})</option>-->
                                        					<!--<option value="Recurring">Recurring({{$recurring_coin}})</option>-->
                                        					<!--<option value="Regular">Regular({{$regular_coin->total}})</option>
                                        					<option value="Charity">Charity({{$regular_coin->total}})</option>
                                        					<option value="Community">Community({{$regular_coin->total}})</option>-->
                                        				</select>
                                        				<label for="">Select Coin Type</label>
                                                        <span class="error" id="bmk_coin_type_err"></span>
                                                    </div>
                                                </div>

                                            <!--    <div class="col-md-12 col-sm-12 col-xs-12" id="other_coin_list_type" style="display:none;">-->
                                            <!--        <div class="form-floating mt-3">-->
                                            <!--            <select name="other_coin_type" id="other_coin_type" class="form-control" onChange="getCoinType(this.value);"> -->
                                            <!--                <option value=""></option>-->
                                        				<!--	<option value="P2P">P2P({{$p2p_coin}})</option>-->
                                        				<!--</select>-->
                                        				<!--<label for="">Select Coin Type</label>-->
                                            <!--            <span class="error" id="other_coin_type_err"></span>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                                <?php
                                                    //$coin_name,$coin_type
                                                    // $data=$this->get_p2p_coin_for_staking("BMK","p2p");
                                                    // print_r($data);
                                                ?>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-floating mt-3 mb-3">
                                                        <input type="text" class="form-control" name="available_coins" id="available_coins" readonly>
                                                        <label for="">Available Coins</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-floating mt-3 mb-3">
                                                        <input type="text" class="form-control" name="staking_coins" id="staking_coins">
                                                        <label for="">Staking Coins</label>
                                                        <span class="error" id="staking_coins_err"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="total_val_inr" id="total_val_inr" readonly>
                                                        <label for="">Total Value INR</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="total_val_usd" id="total_val_usd" readonly>
                                                        <label for="">Total Value USD</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-floating mb-3">
                                                        <select name="tenure" id="tenure" class="form-control" onChange="getCoinTenure(this.value);">
                                        					<option value=""></option>
                                        					<option value="1">1 Year</option>
                                        					<option value="2">2 Year</option>
                                        					<option value="3">3 Year</option>
                                        				</select>
                                                        <label for="">Locking Tenure</label>
                                                        <span class="error" id="tenure_err"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 d-none">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="upto_coin_benefits" id="upto_coin_benefits" readonly>
                                                        <label for="">Upto {{ env('BMK_STACKING_PERCENTAGE') }}% Coin Benefits</label>
                                                        <span class="error" id="upto_coin_benefits_err"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 d-none">
                                                  <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="monthly_upto_coin_benefits" id="monthly_upto_coin_benefits" readonly>
                                                    <label for="">Monthly Benefits Upto</label>
                                                    <span class="error" id="monthly_upto_coin_benefits_err"></span>
                                                  </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 d-none">
                                                  <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="total_coin_benefits" id="total_coin_benefits" readonly>
                                                    <label for="">Total Coin Benefits</label>
                                                    <span class="error" id="total_coin_benefits_err"></span>
                                                  </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 d-none">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="after_maturity_total_val_inr" id="after_maturity_total_val_inr" readonly>
                                                        <label for="">After Maturity Total Value INR</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 d-none">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="after_maturity_total_val_usd" id="after_maturity_total_val_usd" readonly>
                                                        <label>After Maturity Total Value USD</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="every_month_benefites_value_USD" id="every_month_benefites_value_USD" readonly>
                                                        <label for="">Every Month Benefites Value(USD)</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="every_month_benefites_value_inr" id="every_month_benefites_value_inr" readonly>
                                                        <label>Every Month Benefites Value(INR)</label>
                                                    </div>
                                                </div>

                                                <!--<div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">-->
                                                <!--    <div class="title-and-progress">-->
                                                <!--        <div class="d-flex-gap">-->
                                                <!--            <h6 class="title mb-0">Every Month Benefites Value(USD)</h6>-->
                                                <!--        </div>-->
                                                <!--        <div id="every_month_benefites_value_USD" class="stack_font_size"></div>-->
                                                <!--    </div>-->
                                                <!--</div>-->

                                                <!--<div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">-->
                                                <!--    <div class="title-and-progress">-->
                                                <!--        <div class="d-flex-gap">-->
                                                <!--            <h6 class="title mb-0">Every Month Benefites Value(INR)</h6>-->
                                                <!--        </div>-->
                                                <!--        <div id="every_month_benefites_value_inr" class="stack_font_size"></div>-->
                                                <!--    </div>-->
                                                <!--</div>-->


                                                <div class="list-group">
                                                    <label class="mx-3">
                                                        <input class="form-check-input me-1" type="checkbox" id="term" name="term">
                                                        <span class="fs-12">I agree to <a href="{{ url(app()->getLocale().'/user/coin-staking-term-and-conditions') }}" target="_blank">Terms and conditions</a></span>
                                                    </label>
                                                    <span class="error mx-3" id="term_err"></span>
                                                </div>

                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group text-center">
                                                        <!--<button type="button" id="stakingBtn" name="stakingBtn" class="btn btn-yellow w-100 d-block border-0">Submit</button>-->
                                                        <button type="button" id="staking_coin_now" name="stakingBtn" class="btn btn-yellow w-100 d-block border-0">Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="staking_otp_box" style="display:none;">
                                                <ul class="nav nav-pills my-1 border-bottom">
                                                    <li class="nav-item w-100" role="presentation">
                                                        <button class="nav-link w-100 active text-left" type="button" role="tab" aria-controls="pills-spot" aria-selected="true">Verify Staking OTP</button>
                                                    </li>
                                                </ul>
                                                <div class="form-group mt-3">
                                                    <input type="input" pattern="\d*" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="staking_coin_otp" class="form-control">
                                                    <span class="error" id="error_gift_card_otp"></span>
                                                    <div class="verification_innerInfo my-2 error_text fs-12">Enter the 6-digit code sent to <span  dir="ltr" class="getCode_outer1"></span></div>
                                                </div>
                                                <div class="btn-div ">
                                                    <button type="button" class="btn-yellow border-0 d-block w-100 shadow-sm mt-3" id="stakingBtn">
                                                        <div class="inner_text">Verify Now</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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




    <div class="modal fade" id="show_staking_coin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Coin Staking Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="wm-custom-modal-body px-3 py-1">
                    <div class="container-fluid p-0 m-0">
                        <div class="">
                            <div class="row security-block fund-div bg-light-blue-2 shadow-sm w-100 mb-3">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Coin Name</h6>
                                        </div>
                                        <div id="staking_coin_name" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Coin Type</h6>
                                        </div>
                                        <div id="staking_coin_type" class="stack_font_size"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Status</h6>
                                        </div>
                                        <div id="status" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Maturity Status</h6>
                                        </div>
                                        <div id="maturity_status" class="stack_font_size"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="row security-block fund-div bg-light-blue-2 shadow-sm w-100 mb-3">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Transaction Number</h6>
                                        </div>
                                        <div id="staking_transaction_id" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-5 col-lg-5 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Staking Number</h6>
                                        </div>
                                        <div id="stacking_num" class="stack_font_size"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row security-block fund-div bg-light-blue-2 shadow-sm w-100 mb-3">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Date Of Staking</h6>
                                        </div>
                                        <div id="date_of_deposite" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Date Of Unlocking</h6>
                                        </div>
                                        <div id="maturity_date" class="stack_font_size"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Staking Rate</h6>
                                        </div>
                                        <div id="percentage_of_interest" class="stack_font_size"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row security-block fund-div bg-light-blue-2 shadow-sm w-100 mb-3">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Staking No. Of Year</h6>
                                        </div>
                                        <div id="staking_num_of_year" class="stack_font_size"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Price Of Coin In INR</h6>
                                        </div>
                                        <div id="current_price_of_coin_inr" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Price Of Coin In USD</h6>
                                        </div>
                                        <div id="current_price_of_coin_usd" class="stack_font_size"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row security-block fund-div bg-light-blue-2 shadow-sm w-100 mb-3" >
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Staking Coins</h6>
                                        </div>
                                        <div id="before_maturity_coins" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Before Staking Value In INR</h6>
                                        </div>
                                        <div id="before_maturity_value_inr" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Before Staking Value In USD</h6>
                                        </div>
                                        <div id="before_maturity_value_usd" class="stack_font_size"></div>
                                    </div>
                                </div>


                            </div>

                            <div class="row security-block fund-div bg-light-blue-2 shadow-sm w-100 mb-3 d-none">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">After Staking Coins</h6>
                                        </div>
                                        <div id="after_maturity_coins" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">After Staking Value In INR</h6>
                                        </div>
                                        <div id="after_total_value_INR" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">After Staking Value In USD</h6>
                                        </div>
                                        <div id="after_total_value_USD" class="stack_font_size"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex-gap">
                                <h6 class="title mb-0 w-100">Stacking Coin Benefites Credit Date</h6>
                                <hr>
                            </div>
                            <div class="bg-white shadow-sm w-100 max-height-200px scrollbar-style">

                                <table class="table" id="stacking_benefites">
                                    <!--user_id-->
                                    <!--order_id-->
                                    <!--no_of_coin-->
                                    <!--type_of_coin-->
                                    <!--0:debit|1:credit-->
                                    <!--transaction_status-->
                                    <!--0=debit,1=credit-->
                                    <!--status-->
                                    <!--0=inactive,1=active, 2=block-->
                                    <!--coin_type-->
                                    <!--1=Staking, 2=Recurring,3=P2P-->
                                    <!--coin_name-->
                                    <!--comments-->
                                    <!--p2p_credit_date-->
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>status</th>
                                            <th>Every Month Credit Amount(USD)</th>
                                            <th>Every Month Credit Amount(INR)</th>
                                            <!--<th>No Of Coin</th>-->
                                            <th>Coin Name</th>
                                            <th>Credit Date</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <!--    <tr>-->
                                        <!--    <td>S.No.</td>-->
                                        <!--    <td>status</td>-->
                                        <!--    <td>No Of Coin</td>-->
                                        <!--    <td>Type Of Coin</td>-->
                                        <!--    <td>Transaction Status</td>-->
                                        <!--    <td>Coin Type</td>-->
                                        <!--    <td>Coin Name</td>-->
                                        <!--    <td>Credit Date</td>-->
                                        <!--</tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div id="Notification">
        <div class="hide">
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
                                            Get stable earnings by depositing assets.
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-forward-fill me-1"></i>
                                        <span>
                                            Lock assets for a fixed term and earn higher rewards.
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-forward-fill me-1"></i>
                                        <span>
                                            You cannot unlock the asset before the completion of the selected term.
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
                                    <button type="submit" id="agree_button" class="btn-yellow d-block w-100 border-0 desabled" >Agree and continue</button>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('template.web_footer')
   <link rel="stylesheet" href="{{ url('assets/css/alert.css') }}">
   <script src="{{ url('assets/js/alert.js') }}"></script>
    <script>
        // function get_coin_for_staking(){
        //     $.ajax({
        //     	type: "POST",
        //     	url: "{{ url( app()->getLocale()) }}/user/get_p2p_coin_for_staking",
        //     	data: {'_token':_token,'coin_name':coin_list,'bmk_coin_type':bmk_coin_type,'other_coin_type':other_coin_type,'tenure':tenure},
        //     	dataType: "json",
        //     	encode: true,
        //     	beforeSend: function(){ $("#stakingBtn").text("Submitting tenure record"); $("#stakingBtn").css("pointer-events","none"); },
        //     	success:function(data){
        //     	    if(data.success==200){
        //         		triggerAlert('Staking record submitted successfully.', 'success');
        //         		setTimeout(function(){
        //                     window.location.href = "{{ url( app()->getLocale()) }}/user/coin-staking";
        //                 }, 2000);
        //     	    }
        //     	    else{
        //     	         triggerAlert('Somthing went wrong', 'error');
        //     	         $("#stakingBtn").text("Submit");
        //     	         $("#stakingBtn").css("pointer-events","");
        //     	    }
        //       },
        //       error: function(xhr, textStatus, errorThrown){
        //             var erroJson = JSON.parse(xhr.responseText);
        //              triggerAlert(erroJson.error, 'error');
        //              $("#stakingBtn").text("Submit");
        //              $("#stakingBtn").css("pointer-events","");
        //         }
        //     });
        // }
        $('#staking_coin_now').click(function(){
            var coin_list = $('#coin_list').val();
            var bmk_coin_type = $('#bmk_coin_type').val();
            var other_coin_type = $("#other_coin_type").val();
            var available_coins=$("#available_coins").val();
            var staking_coins=$("#staking_coins").val();
            var tenure=$("#tenure").val();
            var total_val_inr=$("#total_val_inr").val();
            var total_val_usd=$("#total_val_usd").val();
            var upto_coin_benefits=$("#upto_coin_benefits").val();
            var monthly_upto_coin_benefits=$("#monthly_upto_coin_benefits").val();
            var _token = $("input[name=_token]").val();
            if($("#bmk_coin_type option:selected").text()=="" || $("#bmk_coin_type option:selected").text()===0){
                triggerAlert('Insufficient coin for stacking.', 'error');
                return false;
            }else{
                if($("#term").prop('checked') == false){
                    $("#term_err").html("Please check term & conditions.");
                    $("#term").addClass("error_border");
                }else{
                    $("#term_err").html("");
                    $("#term").removeClass("error_border");
                }

                if(coin_list == ""){
                    $("#coin_list_err").html("Please select coin name.");
                    $("#coin_list").addClass("error_border");
                }else{
                    $("#coin_list_err").html("");
                    $("#coin_list").removeClass("error_border");
                }

                if(bmk_coin_type == ""){
                    $("#bmk_coin_type_err").html("Please select coin Type.");
                    $("#bmk_coin_type").addClass("error_border");
                }else{
                    $("#bmk_coin_type_err").html("");
                    $("#bmk_coin_type").removeClass("error_border");
                }

                if(other_coin_type == ""){
                    $("#other_coin_type_err").html("Please select coin type.");
                    $("#other_coin_type").addClass("error_border");
                }else{
                    $("#other_coin_type_err").html("");
                    $("#other_coin_type").removeClass("error_border");
                }

                if(staking_coins == ""){
                    $("#staking_coins_err").html("Please enter staking coin.");
                    $("#staking_coins").addClass("error_border");
                }else{
                    $("#staking_coins_err").html("");
                    $("#staking_coins").removeClass("error_border");
                }

                if(tenure == ""){
                    $("#tenure_err").html("Please select tenure coin.");
                    $("#tenure").addClass("error_border");
                }else{
                    $("#tenure_err").html("");
                    $("#tenure").removeClass("error_border");
                }
                if(tenure!="" && (other_coin_type!="" || bmk_coin_type!="") && staking_coins!="" && coin_list!="" && $("#term").prop('checked') == true){
                    $.ajax({
                        url: "{{ url( app()->getLocale()) }}/user/genrate-staking-record-otp",
                        method:"POST",
                        data: {'_token':_token,'coin_name':coin_list,'bmk_coin_type':bmk_coin_type,'other_coin_type':other_coin_type,'tenure':tenure},
                        dataType:"json",
                        beforeSend:function(){ $('#staking_coin_now').text("Sending OTP"); $('#staking_coin_now').attr('disabled', 'disabled');},
                        success:function(data){
                            if(data)
                            {
                               triggerAlert('OTP sent successfully your registered email address for staking coin.', 'success');
                                $('html, body').animate({
                                    scrollTop: $("#staking_otp_box").offset().top
                                }, 2000);
                               $('.getCode_outer1').text(data.email_data);
                               // $('#pills-tab').css('display', 'none');
                                $('#coin_frm').css('display', 'none');
                                $('#staking_otp_box').css("display",'block');
                            }
                        },
                        error: function(xhr, textStatus, errorThrown){
                            var erroJson = JSON.parse(xhr.responseText);
                            //alert(erroJson.error);
                            triggerAlert(erroJson.error, 'error');
                            $('#staking_coin_now').text("Submit");
                            $('#staking_coin_now').removeAttr('disabled');
                        }
                    })
                }
            }
        });

        function show_staking_record(staking_id) {
            $.ajax({
        		type: "GET",
        		url: "{{ url( app()->getLocale()) }}/user/get_staking_coin_detail",
        		data: {'id':staking_id},
        		dataType: "json",
        		encode: true,
        // 		beforeSend: function(){ $("#staking_view").html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>'); },
            	success:function(data){
            	   // alert(data.staking_wallet_coin);
            	    if(data.stacking_coin.status==0){
            	        var status='<span class="badge bg-warning fs-10">Pending</span>';
            	    }

            	    if(data.stacking_coin.status==1){
            	        var status='<span class="badge bg-success fs-10">Active</span>';
            	    }

            	    if(data.stacking_coin.status==2){
            	        var status='<span class="badge bg-danger fs10">Block</span>';
            	    }

            	    if(data.stacking_coin.maturity_status==0){
            	        var maturity_status='<span class="badge bg-danger" style="font-size:10px;">Locked</span>';
            	    }

            	    if(data.stacking_coin.maturity_status==1){
            	        var maturity_status='<span class="badge bg-success">Unlock</span>';
            	    }

            	    if(data.stacking_coin.staking_coin_name=="BMK"){
                        var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("storage/app/bmklogo/12.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ data.stacking_coin.staking_coin_name +'</span></div>';
            	    }

                    if(data.stacking_coin.staking_coin_name=="ETH"){
                        var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ data.stacking_coin.staking_coin_name +'</span></div>';
            	    }

                    if(data.stacking_coin.staking_coin_name=="BTC"){
                        var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ data.stacking_coin.staking_coin_name +'</span></div>';
                    }

            	    var deposite_day = data.stacking_coin.date_of_deposite.split('-')[2];
                    var deposite_m = data.stacking_coin.date_of_deposite.split('-')[1];
                    var deposite_y = data.stacking_coin.date_of_deposite.split('-')[0];
            	    var deposite_date = deposite_day+-+deposite_m+-+deposite_y;

            	    var maturity_day = data.stacking_coin.maturity_date.split('-')[2];
                    var maturity_m = data.stacking_coin.maturity_date.split('-')[1];
                    var maturity_y = data.stacking_coin.maturity_date.split('-')[0];
            	    var maturity_date = maturity_day+-+maturity_m+-+maturity_y;
            	    //alert(maturity_date);

                    $("#staking_coin_name").html(coin_logo);
                    $("#staking_coin_type").text(data.stacking_coin.staking_coin_type);
                    $("#date_of_deposite").text(deposite_date);
                    $("#maturity_date").text(maturity_date);
                    $("#staking_transaction_id").text(data.stacking_coin.staking_transaction_id);
                    $("#staking_num_of_year").text(data.stacking_coin.staking_num_of_year + " Year");
                    $("#stacking_num").text(data.stacking_coin.stacking_num);
                    $("#before_maturity_coins").text(data.stacking_coin.before_maturity_coins);
                    $("#before_maturity_value_usd").text("$"+data.stacking_coin.before_maturity_value_usd);
                    $("#before_maturity_value_inr").text("₹"+data.stacking_coin.before_maturity_value_inr);
                    $("#after_maturity_coins").text(data.stacking_coin.after_maturity_coins);
                    $("#after_total_value_INR").text("₹"+data.stacking_coin.after_total_value_INR);
                    $("#after_total_value_USD").text("$"+data.stacking_coin.after_total_value_USD);
                    $("#upto_total_benefits").text(data.stacking_coin.upto_total_benefits);
                    $("#upto_monthly_benefits").text(data.stacking_coin.upto_monthly_benefits);
                    $("#percentage_of_interest").text(data.stacking_coin.percentage_of_interest+"%");
                    $("#current_price_of_coin_usd").text("$"+data.stacking_coin.current_price_of_coin_usd);
                    $("#current_price_of_coin_inr").text("₹"+data.stacking_coin.current_price_of_coin_inr);
                    $("#status").html(status);
                    $("#maturity_status").html(maturity_status);
                    $("#comments").text(data.stacking_coin.comments);

                    $('#stacking_benefites tbody').empty();
                    var j = 1;
                    $.each(data.staking_wallet_coin, function( i, val ){
                        if(val.status==0){
                	        var status='<span class="badge bg-warning fs-10 text-black">Lock</span>';
                	    }

                	    if(val.status==1){
                	        var status='<span class="badge bg-success fs-10">Unlock</span>';
            	        }

            	        if(val.status==2){
                	        var status='<span class="badge bg-danger fs-10">Blocked</span>';
            	        }

            	        if(val.coin_name=="BMK"){
                            var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("storage/app/bmklogo/12.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ val.coin_name +'</span></div>';
                	    }

                        if(val.coin_name=="ETH"){
                            var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ val.coin_name +'</span></div>';
                	    }

                        if(data.coin_name=="BTC"){
                            var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ val.coin_name +'</span></div>';
                        }

                        $('#stacking_benefites')
                            .append($('<tr>')
                            .append($('<td>').append(j++))
                            .append($('<td>').append(status))
                            .append($('<td>').append(val.every_month_benefits_usd))
                            .append($('<td>').append(val.every_month_benefits_inr))
                            //.append($('<td>').append(val.no_of_coin))
                            // .append($('<td>').append(val.type_of_coin))
                            // .append($('<td>').append(val.transaction_status))
                            // .append($('<td>').append(val.coin_type))
                            .append($('<td>').append(coin_logo))
                            .append($('<td>').append(val.p2p_credit_date))
                        )
                    });
            	},
        	    error: function(xhr, textStatus, errorThrown){
                    var erroJson = JSON.parse(xhr.responseText);
                     triggerAlert(erroJson.error, 'error');
        	         $("#stakingBtn").text("Submit");
        	         $("#stakingBtn").css("pointer-events","");
                }
            });
        }

        function getCoin(val) {
            $.ajax({
            	type: "GET",
            	url: "{{ url( app()->getLocale()) }}/user/get_coin_for_staking",
            	data: {'coin_name':val},
            	success:function(data){
            	   $("#bmk_coin_type").html(data);
                }
            });
        }

        // function getCoinType(myval) {
        //     var mycoin = $("#bmk_coin_type option:selected").text();
        //     var result = mycoin.match(/\((.*)\)/);
        //     $("#available_coins").val(result[1]);
        //     if(myval == "Recurring" || myval == "BTC" || myval == "ETH"){
        //         alert();
        //         var bmk_price_inr = <?php //print_r($bmk_inr_price->per_coin); ?>;
        //         var bmk_price_usd = <?php //print_r($bmk_price->per_coin); ?>;
        //         $("#staking_coins").val(result[1]);
        //         $('#staking_coins').prop('readonly', true);
        //         $("#total_val_usd").val(bmk_price_usd*result[1]);
        //         $("#total_val_inr").val(bmk_price_inr*result[1]);
        //     }
        //     // if(myval == "BTC" || myval == "ETH"){

        //     // }
        // }

        function getCoinType(myval) {
            var mycoin = $("#bmk_coin_type option:selected").text();
            var result = mycoin.match(/\((.*)\)/);

            var bmk_price_inr = <?php print_r($bmk_inr_price->per_coin); ?>;
            var bmk_price_usd = <?php print_r($bmk_price->per_coin); ?>;
            if(myval == "Recurring"){
                $("#available_coins").val(result[1]);
                $("#staking_coins").val(result[1]);
                $('#staking_coins').prop('readonly', true);
                $("#total_val_usd").val(bmk_price_usd*result[1]);
                $("#total_val_inr").val(bmk_price_inr*result[1]);
            }
            else if(myval == "P2P"){
                $("#available_coins").val(result[1]);
                $("#staking_coins").val(result[1]);
                $('#staking_coins').prop('readonly', true);
                $("#total_val_usd").val(bmk_price_usd*result[1]);
                $("#total_val_inr").val(bmk_price_inr*result[1]);
            }
            else if(myval == ""){
                $("#available_coins").val('');
                $("#staking_coins").val('');
                $('#staking_coins').prop('readonly', false);
                $("#total_val_usd").val('');
                $("#total_val_inr").val('');
                $("#staking_coins").val('');
                $("#monthly_upto_coin_benefits").val('');
                $("#upto_coin_benefits").val('');
                $('#tenure').val('');
                $("#after_maturity_total_val_inr").val('');
                $("#after_maturity_total_val_usd").val('');
                $("#total_coin_benefits").val('');
            }
            else{
                $("#available_coins").val('');
                $("#staking_coins").val('');
                $('#staking_coins').prop('readonly', false);
                $("#total_val_usd").val('');
                $("#total_val_inr").val('');
                $("#staking_coins").val('');
                $("#monthly_upto_coin_benefits").val('');
                $("#upto_coin_benefits").val('');
                $('#tenure').val('');
                $("#after_maturity_total_val_inr").val('');
                $("#after_maturity_total_val_usd").val('');
                $("#total_coin_benefits").val('');
            }
        }

        function getCoinTenure(myval) {
            if(myval==""){
                $("#monthly_upto_coin_benefits").val('');
                $("#upto_coin_benefits").val('');
                $("#after_maturity_total_val_inr").val('');
                $("#after_maturity_total_val_usd").val('');
                $("#total_coin_benefits").val('');
                $("#every_month_benefites_value_USD").val('');
                $("#every_month_benefites_value_inr").val('');
            }else{
                var bmk_stack_per={{ env('BMK_STACKING_PERCENTAGE') }};
                var upto_coin_benefits = $("#staking_coins").val()*bmk_stack_per/100;
                var monthly= $("#monthly_upto_coin_benefits").val(upto_coin_benefits);
                var yearly= $("#upto_coin_benefits").val(upto_coin_benefits*12*myval);
                var total_coin=$("#staking_coins").val();
                $("#total_coin_benefits").val(parseFloat($("#upto_coin_benefits").val())+parseFloat(total_coin));
                var bmk_price_inr = <?php print_r($bmk_inr_price->per_coin); ?>;
                var bmk_price_usd = <?php print_r($bmk_price->per_coin); ?>;
                $("#after_maturity_total_val_inr").val($("#total_coin_benefits").val()*bmk_price_inr);
                $("#after_maturity_total_val_usd").val($("#total_coin_benefits").val()*bmk_price_usd);
                var benefites_inr=$("#total_val_inr").val()*bmk_stack_per/100;
                var benefites_usd=$("#total_val_usd").val()*bmk_stack_per/100;
                $("#every_month_benefites_value_inr").val(benefites_inr/(12*myval));
                $("#every_month_benefites_value_USD").val(benefites_usd/(12*myval));
            }
        }
    </script>

    <script>
        $( document ).ready(function() {
            $("#stakingBtn").on("click", function() {
                var staking_coin_otp = $('#staking_coin_otp').val();
                if(staking_coin_otp===""){
                    triggerAlert('Please enter otp.', 'error');
                    return false;
                }else{
                    var coin_list = $('#coin_list').val();
                    var bmk_coin_type = $('#bmk_coin_type').val();
                    var other_coin_type = $("#other_coin_type").val();
                    var available_coins=$("#available_coins").val();
                    var staking_coins=$("#staking_coins").val();
                    var tenure=$("#tenure").val();
                    var total_val_inr=$("#total_val_inr").val();
                    var total_val_usd=$("#total_val_usd").val();
                    var upto_coin_benefits=$("#upto_coin_benefits").val();
                    var monthly_upto_coin_benefits=$("#monthly_upto_coin_benefits").val();
                    var _token = $("input[name=_token]").val();
                    if($("#bmk_coin_type option:selected").text()=="" || $("#bmk_coin_type option:selected").text()===0){
                        triggerAlert('Insufficient coin for stacking.', 'error');
                        return false;
                    }else{
                        if($("#term").prop('checked') == false){
                            $("#term_err").html("Please check term & conditions.");
                            $("#term").addClass("error_border");
                        }else{
                            $("#term_err").html("");
                            $("#term").removeClass("error_border");
                        }

                        if(coin_list == ""){
                            $("#coin_list_err").html("Please select coin name.");
                            $("#coin_list").addClass("error_border");
                        }else{
                            $("#coin_list_err").html("");
                            $("#coin_list").removeClass("error_border");
                        }

                        if(bmk_coin_type == ""){
                            $("#bmk_coin_type_err").html("Please select coin Type.");
                            $("#bmk_coin_type").addClass("error_border");
                        }else{
                            $("#bmk_coin_type_err").html("");
                            $("#bmk_coin_type").removeClass("error_border");
                        }

                        if(other_coin_type == ""){
                            $("#other_coin_type_err").html("Please select coin type.");
                            $("#other_coin_type").addClass("error_border");
                        }else{
                            $("#other_coin_type_err").html("");
                            $("#other_coin_type").removeClass("error_border");
                        }

                        if(staking_coins == ""){
                            $("#staking_coins_err").html("Please enter staking coin.");
                            $("#staking_coins").addClass("error_border");
                        }else{
                            $("#staking_coins_err").html("");
                            $("#staking_coins").removeClass("error_border");
                        }

                        if(tenure == ""){
                            $("#tenure_err").html("Please select tenure coin.");
                            $("#tenure").addClass("error_border");
                        }else{
                            $("#tenure_err").html("");
                            $("#tenure").removeClass("error_border");
                        }

                        if(tenure!="" && (other_coin_type!="" || bmk_coin_type!="") && staking_coins!="" && coin_list!="" && $("#term").prop('checked') == true){
                        	$.ajax({
                        		type: "POST",
                        		url: "{{ url( app()->getLocale()) }}/user/submit-staking-record",
                        		data: {'_token':_token,'coin_name':coin_list,'bmk_coin_type':bmk_coin_type,'other_coin_type':other_coin_type,'tenure':tenure,'staking_coin_otp':staking_coin_otp},
                        		dataType: "json",
                        		encode: true,
                        		beforeSend: function(){ $("#stakingBtn").text("Submitting tenure record"); $("#stakingBtn").css("pointer-events","none"); },
                        		success:function(data){
                        		    if(data.success==200){
                                		triggerAlert('Staking record submitted successfully.', 'success');
                                		setTimeout(function(){
                                            window.location.href = "{{ url( app()->getLocale()) }}/user/coin-staking";
                                        }, 2000);
                            	    }
                            	    else{
                            	         triggerAlert('Somthing went wrong', 'error');
                            	         $("#stakingBtn").text("Submit");
                            	         $("#stakingBtn").css("pointer-events","");
                            	    }
                        	   },
                        	   error: function(xhr, textStatus, errorThrown){
                                    var erroJson = JSON.parse(xhr.responseText);
                                     triggerAlert(erroJson.error, 'error');
                        	         $("#stakingBtn").text("Submit");
                        	         $("#stakingBtn").css("pointer-events","");
                                }
                            });
                        }
                    }
                }
            });
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

        $('#term').change(function()
        {
           $("#Notification").children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
           $('#term').prop("checked", false);
        });


        $("#agree_button").click(function (){
            $("#Notification").children('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
            $('#term').prop("checked", true);
        })
    });
  </script>
</body>
</html>

