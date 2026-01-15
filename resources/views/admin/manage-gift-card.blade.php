
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Manage Gift Card</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="javascript:void(0)287aff">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  @include('template.web_css')
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <style>

/* scrollbar */
 .listing-table-responsive::-webkit-scrollbar {
  width: 5px;
  height: 5px;
}

 .listing-table-responsive::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 10px;
  border-radius: 10px;
}

 .listing-table-responsive::-webkit-scrollbar-thumb {
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.3);
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
}

 .listing-table-responsive::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(255, 255, 255, 0.3);
}


div#gift-card-listing {
    max-height: 694px;
}

.listing-table-responsive{
        max-height: 610px;
        overflow-y:scroll;
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

    .error{
        color: red;
        font-size: 14px;
    }

    .error_border{
        border: 1px solid red;
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
    padding: 15px 15px;
    border-radius: 5px;
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
  </style>

</head>
<body>
    @include('admin.template.web_menu')
    <div class="dashboard-main bg-light-blue">
        @include('admin.template.sidebar')
        <div class="container-fluid">
            <div class=" banner-section">
                <div class="row">


                    <div class="col-md-12">
                        <!--<div class="security-block fund-div bg-light-blue shadow-sm">-->
                        <!--    <div class="d-flex">-->
                        <!--        <span>Manage Gift Card</span>-->
                        <!--    </div>-->
                        <!--</div>-->

                              <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="col-12">
                    <h2 class="fw-bold mb-0 ps-1">Manage Gift Card</h2>
                </div>
            </div>
                    </div>



                    <div class="col-lg-12 col-xl-12 mb-3">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                 <form id="filter_giftcard" action="{{ url("admin/manage-gift-card") }}" method="GET">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group mb-2">
                                                        <input type="text" placeholder="Filter by date" class="form-control filter_date" name="filter_date" value="" autocomplete="off" >
                                                        <span class="error" id="filter_date_err"> </span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group mb-2">
                                                        <input type="text" placeholder="Filter by Email" class="form-control filter_email" name="filter_email" value="" autocomplete="off" >
                                                        <span class="error" id="filter_email_err"> </span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group mb-2">
                                                        <input type="text" pattern="\d*" maxlength="10"  placeholder="Filter by Phone" class="form-control filter_phone" name="filter_phone" value="" autocomplete="off">
                                                        <span class="error" id="filter_phone_err"> </span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group mb-2">
                                                        <input type="text" placeholder="Filter by amount" class="form-control filter_amount" name="filter_amount " id="filter_amount" value="" autocomplete="off">
                                                        <span class="error" id="filter_amount_err"> </span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group mb-2">
                                                        <select class="form-control filter_status" name="filter_status" id="filter_status" >
                                                            <option value="">Status</option>
                                                            <option value="0">Pending</option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Block</option>
                                                            <option value="3">Used</option>
                                                        </select>
                                                        <span class="error" id="filter_status_err"> </span>
                                                    </div>
                                                </div>
                                                <div id="filter_spinner" class="col-md-1">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <button type="submit" name="filter" id="filter" class="btn btn-yellow w-100 d-block border-0 btn-lg">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-8 mb-4">
                        <div class="dashboard-card" id="gift-card-listing">
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <div class="col-md-12 table-responsive listing-table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                  <th scope="col">S.No.</th>
                                                  <th scope="col">Status</th>
                                                  <th scope="col">Amount</th>
                                                  <th scope="col">Expiry Date</th>
                                                  <th scope="col">Used Date</th>
                                                  <th scope="col">Phone</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">G.C. ORDER NO.</th>
                                                  <th scope="col">G.C. SR NO.</th>
                                                  <th scope="col">Created Date</th>
                                                </tr>
                                            </thead>
                                            <tbody class="filtered_records">

                                                @foreach($giftcard as $key => $data)
                                                    <tr>
                                                        <td>{{ $giftcard->firstItem() + $key }}</td>
                                                        <td>
                                                            @if($data->Gift_Card_Status==0)<span class="badge bg-warning">Pending</span> @endif
                                                            @if($data->Gift_Card_Status==1)<span class="badge bg-success">Active</span> @endif
                                                            @if($data->Gift_Card_Status==2)<span class="badge bg-danger">Block</span> @endif
                                                            @if($data->Gift_Card_Status==3)<span class="badge bg-danger">Used</span> @endif
                                                        </td>
                                                        <td>₹{{$data->Gift_Card_Amount}}</td>
                                                        <td>{{date("d-m-Y", strtotime($data->Gift_Card_Expiration_date))}}</td>
                                                        <td>{{ $data->Gift_Card_Used_Date }}</td>
                                                        <td>{{ $data->Gift_Card_phone }}</td>
                                                        <td>{{ $data->Gift_Card_email }}</td>
                                                        <td>{{ $data->Gift_Card_Voucher_no }}</td>
                                                        <td>{{ $data->Gift_Card_Voucher_pin }}</td>
                                                        <td>{{ $data->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="account_activity_pagination mt-3">
                                        {!! $giftcard->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @can('giftcard-create')
                    <div class="col-lg-6 col-xl-4 mb-4">
                        <div class="dashboard-card">
                            <div class="col-md-12">
                                <div class="security-block fund-div bg-light-blue shadow-sm">
                                    <div class="d-flex">
                                        <span>Generate New Gift Card</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <form action="" method="POST">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-floating mb-3">
                                                    <input ype="text" pattern="\d*" maxlength="10"  required oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Phone" id="phone" class="form-control" name="phone" value="" autofocus>
                                                    <label for="">Phone</label>
                                                    <span class="error" id="phone_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Email" autofocus required>
                                                    <label for="">Email</label>
                                                    <span class="error" id="email_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" autofocus required>
                                                    <label for="">Amount</label>
                                                    <span class="error" id="amount_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" name="no_of_gift_card" id="no_of_gift_card" value="" placeholder="No Of Gift Card" autofocus required>
                                                    <label for="">No Of Gift Card</label>
                                                    <span class="error" id="no_of_gift_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="exp_date" id="exp_date" autocomplete="off" autofocus required>
                                                <label for="" class="label-exp-date">Expiry Date</label>
                                                <span class="error" id="exp_date_err"></span>
                                              </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <div class="form-floating mb-3">
                                                <select class="form-control" name="status" id="status" required>
                                                    <option value="">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Pending</option>
                                                </select>
                                                <label for="">Status</label>
                                                <span class="error" id="status_err"></span>
                                              </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top:20px;">
                                                <div class="form-group text-center">
                                                    <button type="button" id="generate" name="generate" class="btn btn-yellow w-100 d-block border-0">Generate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="col-md-12 mt-4">
                                        <div class="security-block fund-div bg-light-blue shadow-sm">
                                            <div class="d-flex">
                                                <span>Import Gift Card</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group mt-3">
                                                <label for="">Select File (Excel OR CSV):</label>
                                                <input type="file" class="form-control" name="uploadexcel" id="uploadexcel" required autofocus>
                                                <span class="error" id="uploadexcel_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top:20px;">
                                            <div class="form-group text-center">
                                                <button type="button" name="import" id="import_excel" onclick="excel_upload();" class="btn btn-yellow w-100 d-block border-0">Import</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
   @include('admin.template.web_footer')
   <link rel="stylesheet" href="https://wealthmark.io/assets/css/alert.css">
   <script src="https://wealthmark.io/assets/js/alert.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
  function getFilteredgiftcardData_withLimit(from, to){
      //  $(this).child().addClass('active');
       // $(this).siblings().child().removeClass('active');
      //  $(this).css("background", "blue");

            var filter_phone = $('.filter_phone').val();
            var filter_email = $('.filter_email').val();
            var _token = $("input[name=_token]").val();
            var filter_date=$(".filter_date").val();
            var filter_status=$("#filter_status").val();
            var filter_amount=$("#filter_amount").val();

                 var from = from;
                   var to = to;
                  var paginating = to - from;
               // const userID  = {{ Auth::user()->id }};



               // console.log(+'/'+from+'/'+to+'/'+'/'+paginating);

                     $.ajax({

                             					type: "POST",
                                             //  dataType: "text",
                                             	beforeSend: function(){ $("#filter_spinner").text("loading...."); $("#filter_spinner").css("pointer-events","none"); },
                                                 url: "<?php echo url('/admin/gift-card-filter-with-limit'); ?>",
                                                data: {
                                                    'paginating' : paginating,
                                                    'to' : to,
                                                    'from' : from,
                                                    '_token':_token,
                                                    'filter_phone' : filter_phone,
                                                    'filter_email' : filter_email,
                                                    'filter_date' : filter_date,
                                                    'filter_status' : filter_status,
                                                    'filter_amount':filter_amount

                                                },
                             					success: function(data) {
                             					     var i =1;
                             					     sr_num = from+1;
                                                                    if(data){

                                                                        console.log(data);

                                                                        //   console.log(data.records.data);
                                                                        $(".filtered_records").html('');


                                                                        // console.log(data.records.data);

                                                                        $.each(data.records, function(index, value) {
                                                                                if(value.Gift_Card_Status == '0'){
                                                                                var giftcards_status = 'Pending';
                                                                                }else if(value.Gift_Card_Status == 1){
                                                                                var giftcards_status = 'Active';

                                                                                }else if(value.Gift_Card_Status == 2){
                                                                                var giftcards_status = 'Block';
                                                                                }else{
                                                                                var giftcards_status = 'Used';
                                                                                };
                                                                                $(".filtered_records").append('<tr><td>'+sr_num+'</td><td><span class="badge bg-warning">'+giftcards_status+'</span><td>₹'+value.Gift_Card_Amount+'</td><td>'+value.Gift_Card_Expiration_date+'</td><td>'+value.Gift_Card_Used_Date+'</td><td>'+value.Gift_Card_phone+'</td><td>'+value.Gift_Card_email+'</td><td>'+value.Gift_Card_Voucher_no+'</td><td>'+value.Gift_Card_Voucher_pin+'</td><td>'+value.created_at+'</td></tr>');

                                                                                sr_num++;

                                                                        });

                                                                    }else{
                                                                        triggerAlert('Record not cound', 'error');

                                                                    }
                                               },
                                                complete: function (data) {
                                                  $("#filter_spinner").text("");
                                                  $("#filter_spinner").css("pointer-events","none");
                                                 },
                                                 error: function(xhr, status, error) {
                                                   // var erroJson = JSON.parse(xhr.responseText);

                                                   // console.log(status);
                                                }

                        });
            };

    function filtergifts(){
              var filter_phone = $('.filter_phone').val();
            var filter_email = $('.filter_email').val();
            var _token = $("input[name=_token]").val();
            var filter_date=$(".filter_date").val();
            var filter_status=$("#filter_status").val();
            var filter_amount=$("#filter_amount").val();

            if(filter_phone.length < 1 && filter_email.length < 1 && filter_status.length < 1 && filter_amount.length < 1 && filter_date.length < 1){
                window.location.reload();
            }

             $.ajax({
        		type: "POST",
        		url: "{{ url('admin/manage-gift-card-filter') }}",
        		 enctype : 'multipart/form-data',
                // processData: false,
                // contentType: false,
                // data : formData,

        		data: {'_token':_token,'filter_phone' : filter_phone,  'filter_email' : filter_email, 'filter_date' : filter_date,'filter_status' : filter_status,'filter_amount':filter_amount},
        	//	dataType: "json",
        	//	encode: true,
        		beforeSend: function(){ $("#filter_spinner").text("loading...."); $("#filter_spinner").css("pointer-events","none"); },
        		success:function(data){
        		   var i =1;
        		    if(data){
        		          var paginate = data.records.per_page;
        		         const possibleBlocks =  Math.ceil(data.records.total / paginate);
        		         console.log(data);

        		       //   console.log(data.records.data);
        		      $(".filtered_records").html('');


        		     // console.log(data.records.data);

        		      $.each(data.records.data, function(index, value) {
                                            if(value.Gift_Card_Status == '0'){
                                            var giftcards_status = 'Pending';
                                            }else if(value.Gift_Card_Status == 1){
                                            var giftcards_status = 'Active';

                                            }else if(value.Gift_Card_Status == 2){
                                            var giftcards_status = 'Block';
                                            }else{
                                            var giftcards_status = 'Used';
                                            };
                        $(".filtered_records").append('<tr><td>'+i+'</td><td><span class="badge bg-warning">'+giftcards_status+'</span><td>₹'+value.Gift_Card_Amount+'</td><td>'+value.Gift_Card_Expiration_date+'</td><td>'+value.Gift_Card_Used_Date+'</td><td>'+value.Gift_Card_phone+'</td><td>'+value.Gift_Card_email+'</td><td>'+value.Gift_Card_Voucher_no+'</td><td>'+value.Gift_Card_Voucher_pin+'</td><td>'+value.created_at+'</td></tr>');

        		          i++;
        		     });

                                $(".account_activity_pagination").html('');

                                var bloc = '<nav class="d-flex justify-items-center justify-content-between">   <ul class="pagination">'+'<li class="page-item disabled" aria-disabled="true" aria-label="« Previous"><span class="page-link" aria-hidden="true" style="display:none">‹</span></li>';
                                var from = 0;
                                var to = paginate;

                                for(i=1; i <= possibleBlocks; i++){
                                    var bloc = bloc+'<li class="page-item" aria-current="page" onclick="getFilteredgiftcardData_withLimit('+from+','+to+')"><span class="page-link" style="border:1px solid #e2d8d8">'+i+'</span></li>';

                                    from= from+paginate;
                                    to = to+paginate;
                                };
                                var bloc = bloc+'<li class="page-item" style="display:none"><a class="page-link" href="#" rel="next" aria-label="Next »">›</a></li>'+'</ul></nav>';
                                $(".account_activity_pagination").html(bloc);

                                        // console.log(bloc);
            	    }else{
            	         triggerAlert('Record not cound', 'error');
            	       //  $("#filter").text("Serach");
            	       //  $("#filter").css("pointer-events","");
            	    }
        	   },
        	   complete: function (data) {
                  $("#filter_spinner").text("");
                  $("#filter_spinner").css("pointer-events","none");
                 },
        	   error: function(xhr, status, error) {
                var erroJson = JSON.parse(xhr.responseText);
                //alert(erroJson.error);
            }

    });
};

    $(".filter_email").on("keyup", function(){
                  filtergifts();
    });

    $(".filter_phone").on("keyup", function(){
     filtergifts();
    });

    $("#filter_amount").on("keyup", function(){
     filtergifts();
    });

    $("#filter_status").on("change", function(){
     filtergifts();
    });
    $(".filter_date").on("select", function(){
        alert();
     filtergifts();
    });

    </script>
    <script>
        $(function() {
            $('input[name="exp_date"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                showDropdowns: true,
                autoApply: true,
                opens:'center',
                drops:'up',
            });

            $('input[name="exp_date"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD-MM-YYYY'));
            });

            $('input[name="exp_date"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });


            $('input[name="filter_date"]').daterangepicker({
                  autoUpdateInput: false,
                  locale: {
                      cancelLabel: 'Clear'
                  }
            });

              $('input[name="filter_date"]').on('apply.daterangepicker', function(ev, picker) {
                  $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
              });

              $('input[name="filter_date"]').on('cancel.daterangepicker', function(ev, picker) {
                  $(this).val('');
              });
        });

        $( document ).ready(function() {
            $("#generate").on("click", function() {
                var phone = $('#phone').val();
                var email = $('#email').val();
                var _token = $("input[name=_token]").val();
                var no_of_gift_card=$("#no_of_gift_card").val();
                var exp_date=$("#exp_date").val();
                var status=$("#status").val();
                var amount=$("#amount").val();
                if(phone==""){
                    $("#phone_err").html("Please enter phone");
                    $("#phone").addClass("error_border");
                }else{
                    $("#phone_err").html("");
                    $("#phone").removeClass("error_border");
                }

                if(email==""){
                    $("#email_err").html("Please enter email");
                    $("#email").addClass("error_border");
                }else{
                    if (IsEmail(email) == false) {
                        $('#email_err').html("Please enter valid email.");
                        return false;
                    }else{
                        $("#email_err").html("");
                        $("#email").removeClass("error_border");
                    }
                }


                if(no_of_gift_card==""){
                    $("#no_of_gift_err").html("Please enter no of gift card");
                    $("#no_of_gift_card").addClass("error_border");
                }else{
                    $("#no_of_gift_err").html("");
                    $("#no_of_gift_card").removeClass("error_border");
                }

                if(exp_date==""){
                    $("#exp_date_err").html("Please enter expiry date");
                    $("#exp_date").addClass("error_border");
                }else{
                    $("#exp_date_err").html("");
                    $("#exp_date").removeClass("error_border");
                }

                if(status==""){
                    $("#status_err").html("Please select status");
                    $("#status").addClass("error_border");
                }else{
                    $("#status_err").html("");
                    $("#status").removeClass("error_border");
                }

                if(amount==""){
                    $("#amount_err").html("Please enter amount");
                    $("#amount").addClass("error_border");
                }else{
                    $("#amount_err").html("");
                    $("#amount").removeClass("error_border");
                }

                if(phone!="" && (email!="" && IsEmail(email)==true) && no_of_gift_card!="" && exp_date!="" && status!="" && amount!=""){
                	$.ajax({
            		type: "POST",
            		url: "{{ url('admin/genertae-gift-card') }}",
            		data: {'_token':_token,'phone' : phone,  'email' : email, 'no_of_gift_card' : no_of_gift_card , 'exp_date' : exp_date,'status' : status,'amount':amount},
            		dataType: "json",
            		encode: true,
            		beforeSend: function(){ $("#generate").text("Generating Gift Card"); $("#generate").css("pointer-events","none"); },
            		success:function(data){
            		    if(data==1){
                    		triggerAlert('Gift card successfully generated.', 'success');
                    		setTimeout(function(){
                                window.location.href = '{{ url('admin/manage-gift-card') }}';
                            }, 2000);
                	    }else{
                	         triggerAlert('Somthing went wrong', 'error');
                	         $("#generate").text("Generate");
                	         $("#generate").css("pointer-events","");
                	    }
            	   }
                });
            }
        });


        // $("#filter").on("click", function() {
        //     var filter_phone = $('#filter_phone').val();
        //     var filter_email = $('#filter_email').val();
        //     var _token = $("input[name=_token]").val();
        //     var filter_date=$("#filter_date").val();
        //     var filter_status=$("#filter_status").val();
        //     var filter_amount=$("#filter_amount").val();
        //     $.ajax({
        // 		type: "POST",
        // 		url: "{{ url('admin/filter-gift-card') }}",
        // 		data: {'_token':_token,'filter_phone' : filter_phone,  'filter_email' : filter_email, 'filter_date' : filter_date,'filter_status' : filter_status,'filter_amount':filter_amount},
        // 		dataType: "json",
        // 		encode: true,
        // 		beforeSend: function(){ $("#filter").text("Filtering records in process"); $("#filter").css("pointer-events","none"); },
        // 		success:function(data){
        // 		    if(data==1){
        //         		triggerAlert('Gift card successfully generated.', 'success');
        //         		setTimeout(function(){
        //                     window.location.href = '{{ url('admin/manage-gift-card') }}';
        //                 }, 2000);
        //     	    }else{
        //     	         triggerAlert('Record not cound', 'error');
        //     	         $("#filter").text("Serach");
        //     	         $("#filter").css("pointer-events","");
        //     	    }
        // 	   }
        //     });
        // });
    });




    function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        }
        else {
            return true;
        }
    }



    function excel_upload(){
        var fd = new FormData();
        var files = $('#uploadexcel')[0].files;
        var _token = $("input[name=_token]").val();
        if(files.length==0 || files.length==""){
            $('#uploadexcel_error').html("Please upload excel or csv file.");
            $('#uploadexcel').addClass('error_border');
        }

        if(files.length > 0 ){
            fd.append('uploadexcel',files[0]);
            fd.append('_token',_token);
            $.ajax({
                url:'{{ url('admin/import-gift-card') }}',
                type:'post',
                data:fd,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $("#import_excel").text('Uploading in process..');
                    $("#import_excel").css("pointer-events","none");
                },
                success:function(response){

                   if(response==1){
                		triggerAlert('File successfully uploaded.', 'success');
                		setTimeout(function(){
                            window.location.href = '{{ url('admin/manage-gift-card') }}';
                        }, 1000);
            	    }else{
            	         triggerAlert('Somthing went wrong', 'error');
            	         $("#import_excel").text("Import");
            	         $("#import_excel").css("pointer-events","");
            	    }
                }
            });
        }
    }
    </script>
</body>
</html>
