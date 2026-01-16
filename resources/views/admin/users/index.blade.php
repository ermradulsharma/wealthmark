<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Manage Gift Card</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="javascript:void(0)287aff">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">

      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
        <style>
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

            .security-block {
                width: 100%;
            }

 .failDetail {
  display: none;
  position: fixed;
  top: 40%;
  left: 60%;
  transform: translate(-40%, -60%);
  background-color: #dee2e6;
  border: 1px solid #212529;
  padding: 10px;
  z-index: 999;
}
.Unmatched{
    text-align: center;
    color:red;
}
.digistatus:hover .failDetail {
  display: block;
}
         </style>
    </head>
<body>
    @include('admin.template.web_menu')

    <div class="dashboard-main">
        @include('admin.template.sidebar')

        <div class="container-fluid bg-light-blue">
            <div class=" banner-section">
                <div class="row">
                    <div class="col-md-12">
                             <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="col-12">
                    <h2 class="fw-bold mb-0 ps-1">Manage User</h2>
                </div>
            </div>
                        <div class="col-lg-12 col-xl-12 mb-2">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                 <form id="filter_users" >
                                      @csrf

                                    <div id="Userfilter_spinner" class="col-md-1"> </div>
                                    <div class="col-sm-12">

                                        <div class="row">
                                              <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                            <input type="text" placeholder="By ID" class="form-control filter_id" name="filter_id" value="" autocomplete="off">
                                                            <span class="error" id="filter_id_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                            <input type="text" placeholder="By Email" class="form-control filter_email" name="filter_email" value="" autocomplete="off">
                                                            <span class="error" id="filter_email_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                            <input type="text" pattern="\d*" maxlength="10" placeholder="By Phone" class="form-control filter_phone" name="filter_phone" value="" autocomplete="off">
                                                            <span class="error" id="filter_phone_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                            <input type="text" pattern="\d*"  placeholder="By Pan" class="form-control filter_pan" name="filter_pan" value="" autocomplete="off">
                                                            <span class="error" id="filter_pan_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                          <select class="form-control filter_status" name="filter_status" id="filter_status">
                                                                 @if($role)
                                                                     <option value="">Select Role</option>
                                                                     @foreach( $role as $eachRole)
                                                                        <option value="{{$eachRole->name}}">{{$eachRole->name}}</option>
                                                                      @endforeach
                                                                  @endif
                                                            </select>
                                                            <span class="error" id="filter_status_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                         <select class="form-control filter_fields" name="filter_fields" id="filter_fields">

                                                                <option value="">Select Field</option>
                                                                <option value="government_id_verified-1">Verified (Accounts)</option>
                                                                <option value="government_id_verified-0">Non verified (Accounts)</option>
                                                                <option value="is_phone_verified-1">Verified Phones</option>
                                                                <option value="is_phone_verified-0">Non Verified Phones</option>
                                                                <option value="is_mail_verified-1">Verified Emails</option>
                                                                <option value="is_mail_verified-0">Non Verified Emails</option>
                                                                <option value="google_id-null">Used Google Login</option>
                                                                <option value="is_two_factor-1">Two factor On</option>
                                                                <option value="is_two_factor-0">Two factor Off</option>
                                                                <option value="is_facial_recogination-0">Facial recogination Varified</option>
                                                                <option value="is_facial_recogination-1">Facial recogination Not-varified</option>
                                                                <option value="bmk_wallet_address-notNUll">Have BMK wallets</option>
                                                                <option value="bmk_wallet_address-NULL">Dont Have BMK wallets</option>
                                                                <option value="user_type-1">Old BMK Users</option>
                                                                <option value="user_type-0">New Users</option>
                                                                <option value="digilocker_verification_responce-2">Digilocker Status Failed</option>



                                                            </select>
                                                            <span class="error" id="filter_status_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                         <select class="form-control filter_account_type" name="filter_account_type" id="filter_account_type">

                                                               <option value="">Select Account Type</option>
                                                                <option value="1">Personal</option>
                                                                <option value="2">Entity</option>
                                                                <option value="3">Admin</option>
                                                                <option value="4">SuperAdmin</option>

                                                            </select>
                                                            <span class="error" id="filter_account_type_err"> </span>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group mb-2">
                                                         <select class="form-control filter_accountstatus" name="filter_accountstatus" id="filter_accountstatus">
                                                               <option value="">Select Status</option>
                                                                <option value="0">Pending</option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Block</option>
                                                                <option value="3">Inactive</option>

                                                            </select>
                                                            <span class="error" id="filter_accountstatus_err"> </span>
                                                        </div>
                                                </div>
                                            <!--<div class="col-md-2">-->
                                            <!--            <div class="form-group mb-2">-->
                                            <!--           <input type="text" name="daterange" id="daterange" value="01/01/2018 - 01/15/2018" />-->
                                            <!--                <span class="error" id="filter_daterange_err"> </span>-->
                                            <!--            </div>-->
                                            <!--</div>-->

                                               <div class="col-md-3">
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <button type="button" name="filter" id="userfilterbtn" class="float-right btn btn-yellow w-100 d-block border-0 btn-lg">All Records</button>
                                                </div>
                                            </div>
                                        </div>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" >
                          <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="col-lg-12 col-xl-12 totalRec"> </div>
                    <div class="col-lg-12 col-xl-12 mb-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="row">
                                   <!--<div lass="col-lg-12 margin-tb">-->
                                   <!--     <form>-->
                                   <!--         <input type="text" size="30" value="" name="searchUserlist" id="searchUserlist">-->
                                   <!--         <div id="livesearch"></div>-->
                                   <!--     </form>-->
                                   <!-- </div>-->
                                    <div class="col-md-12 table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>User Id</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Verification Status</th>

                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="filtered_users">
                                                @foreach ($data as $key => $user)

                                                    <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->first_name }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->email }}</td>

                                                    <td class="digistatus">@if($user->digilocker_verification_responce == 2)
                                                        <span class="text-red">Failed</span>
                                                            <?php
                                                            $failedDigiRecords = App\Models\failed_verification_history::where('user_id', $user->id)->get();
                                                            echo '<div class="failDetail" ><p class="Unmatched">(Unmatched Details)</P>';
                                                            foreach($failedDigiRecords as $failedDigiRecord ){
                                                              //  print_r($failedDigiRecord->digilocker_verification_responce);
                                                                $failedRec = json_decode($failedDigiRecord->digilocker_verification_responce);
                                                                    $name = $failedRec->result->name;
                                                                    $uid = $failedRec->result->uid;
                                                                    $dob = $failedRec->result->dob;
                                                                    $gender = $failedRec->result->gender;

                                                                 echo '<p>'.$name.' -- '.$gender.'</p><p>'.$uid.' -- '.$dob.'</p><hr>';


                                                            }
                                                           echo '</div>';
                                                             ?>
                                                          @elseif($user->digilocker_verification_responce == null)
                                                            N/A
                                                          @else
                                                           <span class="text-green">Completed</span>
                                                          @endif
                                                    </td>
                                                    <td >
                                                      @if(sizeof($user->getRoleNames())!=0)
                                                     <?php  print_r(sizeof($user->getRoleNames())); ?>
                                                        @foreach($user->getRoleNames() as $roleName)
                                                           <label class="badge badge-success" style="color: #198754;">{{ $roleName }}</label>
                                                        @endforeach
                                                      @else
                                                       N/A
                                                      @endif


                                                    </td>
                                                    <td>
                                                       <!--<a class="btn btn-success btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>-->
                                                       <a class="btn-yellow btn-sm text-decoration-none" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                                       <!--<a class="btn btn-danger btn-sm" href="#">Delete</a>-->
                                                        <!--{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}-->
                                                        <!--    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}-->
                                                        <!--{!! Form::close() !!}-->
                                                    </td>
                                                  </tr>
                                                 @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="account_activity_pagination mt-3">
                                        {!! $data->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   @include('admin.template.web_footer')
<link rel="stylesheet" href="{{ url("assets/css/alert.css") }}">
<script src="{{ url("assets/js/alert.js") }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


   <script type="text/javascript">
        //  document.getElementById("searchUserlist").onkeyup = function() {
        //     const value = document.getElementById("searchUserlist").value;
        //     //alert(value);
        //     jQuery.ajax({
        //     type : 'get',
        //     url : '{{URL::to('admin/searchUserlist')}}',
        //     data:{
        //         'search':value
        //     },
        //     success:function(data){
        //         alert(data);
        //     $('.livesearch').html(data);
        //     }
        //     });
        // };

</script>
    <script>
    function filterUsers(){
                    var filter_id = $('.filter_id').val();
                    var filter_phone = $('.filter_phone').val();
                    var filter_email = $('.filter_email').val();
                    var _token = $("input[name=_token]").val();
                    var filter_status= $("#filter_status").val();

                     var  filter_pan = $(".filter_pan").val();
                    var  filter_fields = $("#filter_fields").val();
                    var  filter_account_type = $("#filter_account_type").val();
                    var  filter_accountstatus = $("#filter_accountstatus").val();

                //    console.log(filter_email+'|'+filter_phone+'|'+filter_status+'|'+filter_fields+'|'+filter_account_type+'|'+filter_accountstatus);




            if( filter_id.length < 1 && filter_phone.length < 1 && filter_email.length < 1 && filter_status.length < 1 && filter_fields.length < 1 && filter_account_type.length < 1 && filter_accountstatus.length < 1 && filter_pan.length < 1){
                window.location.reload();
            }

             $.ajax({
                    type: "POST",
                    url: "{{ url('admin/filter-users') }}",
                    enctype : 'multipart/form-data',


                    data: {
                        '_token':_token,

                        'filter_id' : filter_id,
                        'filter_phone' : filter_phone,
                        'filter_email' : filter_email,
                        'filter_status' : filter_status,

                        'filter_pan' : filter_pan,
                        'filter_fields' : filter_fields,
                        'filter_account_type' : filter_account_type,
                        'filter_accountstatus' : filter_accountstatus,

                    },

                    beforeSend: function(){
                        $(".account_activity_pagination").html('');
                                 $(".filtered_users").html('<div class="loading"></div>');
                            //   $("#Userfilter_spinner").text("Loading.................");
                            $(".totalRec").html('<span>Total::.....</span>');
                            $("#Userfilter_spinner").css("pointer-events","none");

                        },
                    success:function(data){

        		            if(data){
                                console.log(data);

                                //   console.log(data.records.data);
                                   console.log(data.totalRec);
                                $(".totalRec").html('<span>Total::'+data.totalRec+'</span>');
                                $(".filtered_users").html('');

                                var paginate = data.records.per_page;
                                const possibleBlocks =  Math.ceil(data.records.total / paginate);
                                //console.log(data);
        		                 var k =1;


                        	    $.each(data.records.data, function(index, value) {
                        	         var sr_num = index+1;
                                	        $.ajax({
                                                type: "GET",
                                                url: '{{ url('admin/user-role/').'/'}}'+value.id,
                                                data: {},
                                                success: function(data){

                                                   if(data){
                                                        var roles = data;
                                                   }

                                                   if(data.length === 0){
                                                        var roles = '-';
                                                   }


                                                   if(value.digilocker_verification_responce == 2){
                                                            //   '<span class="text-red">Failed</span>';
                                                            // getting failed digilocker detail
                                                                var userID = value.id;
                                                    	$.ajax({
                                                                    type: "GET",
                                                                    url: '{{ url(app()->getLocale()).'/user/failed-digilocker-details/'}}',
                                                                    data: {
                                                                        'userID' : userID
                                                                    },
                                                                    success: function(data){

                                                                      var digistatus =  '<span class="text-red">Failed</span><div class="failDetail"><p class="Unmatched">(Unmatched Details)</P>';

                                                                      $.each(data.failedDetail, function (key, val){
                                                                            console.log(JSON.parse(val.digilocker_verification_responce));
                                                                            var name= JSON.parse(val.digilocker_verification_responce).result.name;
                                                                            var uid= JSON.parse(val.digilocker_verification_responce).result.uid;
                                                                            var dob= JSON.parse(val.digilocker_verification_responce).result.dob;
                                                                            var gender= JSON.parse(val.digilocker_verification_responce).result.gender;

                                                                            digistatus = digistatus+'<p>'+name+' -- '+gender+'</p>';
                                                                            digistatus = digistatus+'<p>'+uid+' -- '+dob+'</p>';
                                                                            digistatus = digistatus+'<hr>';
                                                                      })

                                                                      digistatus = digistatus+'</div>';

                                                                      $(".filtered_users").append('<tr><td>'+sr_num+'</td>  <td>'+value.id+'</td><td>'+value.first_name+'</td><td>'+value.phone+'</td><td>'+value.email+'</td><td class="digistatus">'+digistatus+'</td><td>'+roles[0]+'</td><td>'+'<a class="btn-yellow btn-sm text-decoration-none" href="https://wealthmark.io/admin/users/'+value.id+'/edit">Edit</a>'+'</td> </tr>');

                                                                    }
                                                    	        });



                                                    }else if(value.digilocker_verification_responce == null){
                                                            var digistatus =  'N/A';
                                                            $(".filtered_users").append('<tr><td>'+sr_num+'</td>  <td>'+value.id+'</td><td>'+value.first_name+'</td><td>'+value.phone+'</td><td>'+value.email+'</td><td>'+digistatus+'</td><td>'+roles[0]+'</td><td>'+'<a class="btn-yellow btn-sm text-decoration-none" href="https://wealthmark.io/admin/users/'+value.id+'/edit">Edit</a>'+'</td> </tr>');
                                                    }else{
                                                           var digistatus = '<span class="text-green">Completed</span>';
                                                           $(".filtered_users").append('<tr><td>'+sr_num+'</td>  <td>'+value.id+'</td><td>'+value.first_name+'</td><td>'+value.phone+'</td><td>'+value.email+'</td><td>'+digistatus+'</td><td>'+roles[0]+'</td><td>'+'<a class="btn-yellow btn-sm text-decoration-none" href="https://wealthmark.io/admin/users/'+value.id+'/edit">Edit</a>'+'</td> </tr>');

                                                    }


                                                }
                                            });


                        		      });


                                        $(".account_activity_pagination").html('');

                                        var bloc = '<nav class="d-flex justify-items-center justify-content-between">   <ul class="pagination">'+'<li class="page-item disabled" aria-disabled="true" aria-label="« Previous" style="display:none"><span class="page-link" aria-hidden="true">‹</span></li>';
                                        var from = 0;
                                        var to = paginate;

                                        for(i=1; i <= possibleBlocks; i++){
                                            var bloc = bloc+'<li class="page-item " aria-current="page" onclick="getFilteredUsersData_withLimit('+from+','+to+')"><span class="page-link" style="border:1px solid #e2d8d8">'+i+'</span></li>';

                                            from= from+paginate;
                                            to = to+paginate;
                                        };
                                        var bloc = bloc+'<li class="page-item" style="display:none"><a class="page-link" href="#" rel="next" aria-label="Next »" >›</a></li>'+'</ul></nav>';
                                        $(".account_activity_pagination").html(bloc);



                    	    }else{
                    	         triggerAlert('Record not cound', 'error');
                    	       //  $("#filter").text("Serach");
                    	       //  $("#filter").css("pointer-events","");
                    	    }
        	   },
        	   complete: function (data) {
                  $("#Userfilter_spinner").text("");
                  $("#Userfilter_spinner").css("pointer-events","none");
                 },
        	   error: function(xhr, status, error) {
                var erroJson = JSON.parse(xhr.responseText);
                //alert(erroJson.error);
            }

    });



}
    $('#userfilterbtn').click(function(){
       $('.filter_phone').val('');
       $('.filter_email').val('');
      $("input[name=_token]").val('');
      $("#filter_status").val('');
      $(".filter_pan").val('');
      filter_fields = $("#filter_fields").val('');
      filter_account_type = $("#filter_account_type").val('');
      filter_accountstatus = $("#filter_accountstatus").val('');

      filterUsers();
    });

 function getFilteredUsersData_withLimit(from, to){
        // $(this).children().addClass('active');
        // $(this).siblings().child().removeClass('active');


               var filter_phone = $('.filter_phone').val();
            var filter_email = $('.filter_email').val();
            var _token = $("input[name=_token]").val();
           var filter_status=$("#filter_status").val();
        //  console.log(filter_phone+filter_email+filter_status);

                 var from = from;
                   var to = to;
                  var paginating = to - from;
               // const userID  = {{ Auth::user()->id }};



               // console.log(+'/'+from+'/'+to+'/'+'/'+paginating);

                            $.ajax({

                             	type: "POST",
                            //  dataType: "text",
                                beforeSend: function(){
                                $("#Userfilter_spinner").text("loading....");
                                $("#Userfilter_spinner").css("pointer-events","none");

                            },
                                url: "<?php echo url('/admin/user-filter-with-limit'); ?>",
                                data: {
                                        'paginating' : paginating,
                                        'to' : to,
                                        'from' : from,
                                        '_token':_token,
                                        'filter_phone' : filter_phone,
                                        'filter_email' : filter_email,
                                        'filter_status' : filter_status

                                    },

                                success: function(data) {

                                    if(data){
                                       // console.log(data);

                                        //   console.log(data.records.data);
                                            $(".filtered_users").html('');

                                            var paginate = data.records.per_page;
                                            const possibleBlocks =  Math.ceil(data.records.total / paginate);
                                           // console.log(data);

                                            $.each(data.records, function(index, value) {
                                           var sr_num = from+1;
                                                    $.ajax({
                                                        type: "GET",
                                                        url: '{{ url('admin/user-role/').'/'}}'+value.id,
                                                        data: {},
                                                        success: function(data){

                                                            if(data){
                                                            var roles = data;
                                                            }

                                                            if(data.length === 0){
                                                            var roles = '-';
                                                            }


                                                            $(".filtered_users").append('<tr><td>'+sr_num+'</td>  <td>'+value.id+'</td><td>'+value.first_name+'</td><td>'+value.phone+'</td><td>'+value.email+'</td><td>'+roles[0]+'</td><td>'+'<a class="btn-yellow btn-sm text-decoration-none" href="https://wealthmark.io/admin/users/'+value.id+'/edit">Edit</a>'+'</td> </tr>');

                                                         }
                                                    });


                                                });

                                    }else{
                                        triggerAlert('Record not cound', 'error');

                                    }



                                },
                                complete: function (data) {
                                  $("#Userfilter_spinner").text("");
                                  $("#Userfilter_spinner").css("pointer-events","none");
                                 },
                                error: function(xhr, status, error) {
                                // var erroJson = JSON.parse(xhr.responseText);

                                // console.log(status);
                                }

                            });
            }

     $(".filter_id").on("keyup", function(){
        filterUsers();
    });

    $(".filter_email").on("keyup", function(){
        filterUsers();
    });

    $(".filter_phone").on("keyup", function(){
     filterUsers();
    });

     $(".filter_pan").on("keyup", function(){
     filterUsers();
    })

    $("#filter_status").on("change", function(){
     filterUsers();
    });

     $("#filter_fields").on("change", function(){
     filterUsers();
    });

    $("#filter_account_type").on("change", function(){
     filterUsers();
    });

    $("#filter_accountstatus").on("change", function(){
     filterUsers();
    });



    </script>

 <script>


$(function() {
//   $('input[name="daterange"]').daterangepicker({
//     //   "startDate": "04/27/2023",
//   //  "endDate": "05/03/2023",
//     "opens": "left"
//   }, function(start, end, label) {
//     console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
//   });


});


</script>
</body>
</html>

