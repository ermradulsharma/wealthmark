<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
  <!--<meta content="" name="description">-->
  <!--<meta content="" name="keywords">-->
  <!--<meta name="theme-color" content="#287aff">-->
  <!--<link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">-->
  <!--<link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">-->

  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">-->
  @include('template.web_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
   <style>
        .sidebar-nav{
            display:block;
        }


      /*  .bootstrap-select>select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {*/
      /*      display: block!important;*/
      /*  }*/

      /*  .selectpicker {*/
      /*      padding: 0.7rem 0.75rem;*/
      /*      color: #212529;*/
      /*      background-color: #fff;*/
      /*      background-clip: padding-box;*/
      /*      border: 1px solid #ced4da;*/
      /*      border-radius: 5px;*/
      /*  }*/

      /*  .selectpicker option{*/
      /*     cursor: pointer;*/
      /*  }*/

      /*  .rw-div{*/
      /*      display: flex;*/
      /*      background: #f5f8fd !important;*/
      /*      padding: 10px;*/
      /*      border-radius: 10px;*/
      /*      margin:10px 0px;*/
      /*  }*/
      /*.rw-div > div:first-child{*/
      /*    background:#fdc116!important;*/
      /*    width:150px;*/
      /*    display:flex;*/
      /*    align-items:center;*/
      /*    justify-content:center;*/
      /*    flex-direction:column;*/
      /*}*/
      /* .rw-div > div:last-child{*/
      /*    background:white;*/
      /*    padding:10px;*/

      /*    width:calc(100% - 150px);*/
      /*}*/

      /*.border-tb{*/
      /*    border:2px solid rgb(234, 236, 239);*/
      /*    border-left:none;*/
      /*    border-right:none;*/
      /*    padding:10px;*/
      /*    margin-top:15px;*/
      /*    text-align:right;*/
      /*}*/
      /*.border-tb span{*/
      /*      background: #f5f8fd;*/
      /*  color: black;*/
      /*  padding: 5px;*/
      /*  display: inline-block;*/
      /*  border-radius: 50%;*/
      /*  line-height: 10px;*/
      /*  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;*/
      /*}*/
      /*.cursor-pointer{*/
      /*    cursor:pointer;*/
      /*}*/

      /*@import url(https://fonts.googleapis.com/css?family=Open+Sans:300&subset=latin,latin-ext);*/

/*body{*/
/*  font:300 20px 'Open Sans', sans-serif;*/
/*  color:#666;*/
/*  background-color:#bdc3c7;*/
/*}*/

/*article{*/
/*  width:815px;*/
/*  background-color:white;*/
/*  margin:50px auto;*/
/*  padding:5px 30px;*/
/*  border-radius:15px;*/
/*}*/

/*article h1{*/
/*  color:#3498db; */
/*  padding-bottom:15px;*/
/*  border-bottom:1px dashed #bdc3c7;*/
/*}*/

/*article a,article span{*/
/*  color:#3498db;*/
/*  text-decoration:none;*/
/*}*/

/*article .buton{*/
/*  color:white;*/
/*  position:relative;*/
/*  font-size:14px;*/
/*  left:10px;*/
/*  top:-5px;*/
/*  background-color:#3498db;*/
/*  text-decoration:none;*/
/*  padding:3px 6px;*/
/*}*/

/*article .buton:hover{*/
/*  background-color:#2980b9;*/
/*}*/

/*.tooltips {*/
/*  position: relative;*/
/*  display: inline;*/
/*}*/

/*.tooltips span {*/
/*  font:300 12px 'Open Sans', sans-serif;*/
/*  position: absolute;*/
/*  color: #FFFFFF;*/
/*  background: #000000;*/
/*  padding:5px 10px;*/
/*  width:140px;*/
/*  text-align: center;*/
/*  visibility: hidden;*/
/*  opacity: 0;*/
/*  filter: alpha(opacity=0);*/
/*  transition: transform .3s, opacity .6s, margin-left .2s, margin-top .2s;*/
/*}*/

/*.tooltips > span img{max-width:140px;}*/

/*.tooltips[tooltip-position="top"] span{*/
/*  margin-left:10px;*/
/*  -ms-transform: rotate(30deg);*/
/*  -webkit-transform: rotate(30deg);*/
/*  transform: rotate(30deg);*/
/*}*/

/*.tooltips[tooltip-position="bottom"] span{*/
/*  -ms-transform: rotate(-30deg);*/
/*  -webkit-transform: rotate(-30deg);*/
/*  transform: rotate(-30deg);*/
/*}*/

/*.tooltips[tooltip-position="left"] span{*/
/*  margin-top:30px;*/
/*  -ms-transform: rotate(-30deg);*/
/*  -webkit-transform: rotate(-30deg);*/
/*  transform: rotate(-30deg);*/
/*}*/

/*.tooltips[tooltip-position="right"] span{*/
/*  margin-top:30px;*/
/*  -ms-transform: rotate(30deg);*/
/*  -webkit-transform: rotate(30deg);*/
/*  transform: rotate(30deg);*/
/*}*/

/*.tooltips span:after {*/
/*  content: '';*/
/*  position: absolute;*/
/*  width: 0; height: 0;*/
/*}*/

/*.tooltips[tooltip-position="top"] span:after{*/
/*  top: 100%;*/
/*  left: 50%;*/
/*  margin-left: -8px;*/
/*  border-top: 8px solid black;*/
/*  border-right: 8px solid transparent;*/
/*  border-left: 8px solid transparent;*/
/*}*/

/*.tooltips[tooltip-position="bottom"] span:after{*/
/*  bottom: 100%;*/
/*  left: 50%;*/
/*  margin-left: -8px;*/
/*  border-bottom: 8px solid black;*/
/*  border-right: 8px solid transparent;*/
/*  border-left: 8px solid transparent;*/
/*}*/

/*.tooltips[tooltip-position="left"] span:after{*/
/*  top: 50%;*/
/*  left: 100%;*/
/*  margin-top: -8px;*/
/*  border-left: 8px solid black;*/
/*  border-top: 8px solid transparent;*/
/*  border-bottom: 8px solid transparent;*/
/*}*/

/*.tooltips[tooltip-position="right"] span:after{*/
/*  top: 50%;*/
/*  right: 100%;*/
/*  margin-top: -8px;*/
/*  border-right: 8px solid black;*/
/*  border-top: 8px solid transparent;*/
/*  border-bottom: 8px solid transparent;*/
/*}*/

/*.tooltips:hover span {*/
/*  visibility: visible;*/
/*  opacity: 1;*/
/*  z-index: 999;*/
/*  -ms-transform: rotate(0deg);*/
/*  -webkit-transform: rotate(0deg);*/
/*  transform: rotate(0deg);*/
/*  filter: alpha(opacity=100);*/
/*}*/

/*.tooltips[tooltip-position="top"]:hover span{*/
/*  bottom: 30px;*/
/*  left: 50%;*/
/*  margin-left: -76px;*/
/*}*/

/*.tooltips[tooltip-position="bottom"]:hover span{*/
/*  top: 30px;*/
/*  left: 50%;*/
/*  margin-left: -76px;*/
/*}*/

/*.tooltips[tooltip-position="left"]:hover span{*/
/*  right: 100%;*/
/*  top: 50%;*/
/*  margin-top: -15px;*/
/*  margin-right: 15px;*/
/*}*/

/*.tooltips[tooltip-position="right"]:hover span{*/
/*  left: 100%;*/
/*  top: 50%;*/
/*  margin-top: -15px;*/
/*  margin-left: 15px;*/
/*}*/

/*.tooltips[tooltip-type="primary"] > span {*/
/*  background-color:#2980b9;*/
/*}*/

/*.tooltips[tooltip-type="primary"][tooltip-position="top"] > span:after{*/
/*  border-top: 8px solid #2980b9;*/
/*}*/

/*.tooltips[tooltip-type="primary"][tooltip-position="bottom"] > span:after{*/
/*  border-bottom: 8px solid #2980b9;*/
/*}*/

/*.tooltips[tooltip-type="primary"][tooltip-position="left"] > span:after{*/
/*  border-left: 8px solid #2980b9;*/
/*}*/

/*.tooltips[tooltip-type="primary"][tooltip-position="right"] > span:after{*/
/*  border-right: 8px solid #2980b9;*/
/*}*/

/*.tooltips[tooltip-type="success"] > span {*/
/*  background-color:#27ae60;*/
/*}*/

/*.tooltips[tooltip-type="success"][tooltip-position="top"] > span:after{*/
/*  border-top: 8px solid #27ae60;*/
/*}*/

/*.tooltips[tooltip-type="success"][tooltip-position="bottom"] > span:after{*/
/*  border-bottom: 8px solid #27ae60;*/
/*}*/

/*.tooltips[tooltip-type="success"][tooltip-position="left"] > span:after{*/
/*  border-left: 8px solid #27ae60;*/
/*}*/

/*.tooltips[tooltip-type="success"][tooltip-position="right"] > span:after{*/
/*  border-right: 8px solid #27ae60;*/
/*}*/

/*.tooltips[tooltip-type="warning"] > span {*/
/*  background-color:#f39c12;*/
/*}*/

/*.tooltips[tooltip-type="warning"][tooltip-position="top"] > span:after{*/
/*  border-top: 8px solid #f39c12;*/
/*}*/

/*.tooltips[tooltip-type="warning"][tooltip-position="bottom"] > span:after{*/
/*  border-bottom: 8px solid #f39c12;*/
/*}*/

/*.tooltips[tooltip-type="warning"][tooltip-position="left"] > span:after{*/
/*  border-left: 8px solid #f39c12;*/
/*}*/

/*.tooltips[tooltip-type="warning"][tooltip-position="right"] > span:after{*/
/*  border-right: 8px solid #f39c12;*/
/*}*/

/*.tooltips[tooltip-type="danger"] > span {*/
/*  background-color:#c0392b;*/
/*}*/

/*.tooltips[tooltip-type="danger"][tooltip-position="top"] > span:after{*/
/*  border-top: 8px solid #c0392b;*/
/*}*/

/*.tooltips[tooltip-type="danger"][tooltip-position="bottom"] > span:after{*/
/*  border-bottom: 8px solid #c0392b;*/
/*}*/

/*.tooltips[tooltip-type="danger"][tooltip-position="left"] > span:after{*/
/*  border-left: 8px solid #c0392b;*/
/*}*/

/*.tooltips[tooltip-type="danger"][tooltip-position="right"] > span:after{*/
/*  border-right: 8px solid #c0392b;*/
/*}*/
    </style>
</head>
<body>
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')
        <div class="container-fluid p-0">
            <div class="bg-light-blue p-3 w-100">
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    <h2 class="fw-bold mb-0">Reward Center</h2>
                </div>
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    @include('user.reward-center-top-section')
                </div>



                <div class="card shadow-sm border-0">
                    <div class="card-body pb-0">
                        <h3 class="title mb-0">@if(Request::url()==url(app()->getLocale())."/user/reward-center") My Gift Card History @endif @if(Request::url()==url(app()->getLocale())."/user/other-giftcard-history") Other Gift Card History @endif</h3>
                        <hr>
                    </div>
                    <div class="dashboard-card-body px-3">
                        <ul class="tabs nav nav-pills mb-4 border-bottom active" id="pills-tab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <a class="nav-link ps-0 @if(Request::url()==url(app()->getLocale())."/user/reward-center") active @endif" href="{{ url(app()->getLocale()) }}/user/reward-center">My Gift Card History</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if(Request::url()==url(app()->getLocale())."/user/other-giftcard-history") active @endif"  href="{{ url(app()->getLocale()) }}/user/other-giftcard-history">Other Gift Card History</a>
                            </li>
                        </ul>

                        <div class="table-responsive">
                            <table class="table table-hover tbl-to-div">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>G.C. ORDER NO.</th>
                                        <th>G.C. SR NO.</th>
                                        <th>Card Owner</th>
                                        <th>Card Used By</th>
                                        <th>Gift Card Status</th>
                                        <th>Gift Card Used Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($my_giftcard_histroy as $row)
                                    <?php
                                        $used_user = DB::table('users')->where('id',$row->gift_card_current_user_id)->first();
                                        $owner_user = DB::table('users')->where('id',$row->gift_card_user_id)->first();
                                    ?>
                                    <tr>
                                        <td>{{($my_giftcard_histroy->currentPage() - 1) * $my_giftcard_histroy->perPage() + $loop->iteration}}</td>
                                        <td>{{$row->gift_card_gc_number}}</td>
                                        <td>{{$row->gift_card_gc_order_id}}</td>
                                        <td>
                                                <span data-bs-html="true" class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<div class='col-md-12'>{{ $owner_user->first_name }}</div><div class='col-md-12'>{{ $owner_user->phone }}</div><div class='col-md-12'>{{ $owner_user->email }}</div>"> {{ $owner_user->first_name }}</span>
                                            </td>
                                            <td>
                                                <span data-bs-html="true" class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<div class='col-md-12'>{{ $used_user->first_name }}</div><div class='col-md-12'>{{ $used_user->phone }}</div><div class='col-md-12'>{{ $used_user->email }}</div>"> {{ $used_user->first_name }}</span>
                                            </td>
                                        <td>{{$row->ip_address}}</td>
                                        <td>{{$row->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class=".security_pagination mb-4" id="security_pagination">
                         {!! $my_giftcard_histroy->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.web_footer')
    <!---------------include('template.web_js') -->
    <!-----------------comment for dropdown not open properly ---------------------->
    <script>

        function popupUserDetail(id, element){

           // console.log(id);
            var userid = id;

             $.ajax({
        url: '<?php echo url('user/popup-user-detail') ?>',
        method: 'POST',
        data: {
        '_token' : '{{ csrf_token() }}',
        'userid' : userid ,
        } ,
        success:function(data){
           // console.log(data.userDetails.id);
              if(data.userDetails){

                      var name = data.userDetails.first_name;
                      var phone = data.userDetails.phone;
                      var email = data.userDetails.email;


                        $('.user_info').html('<p>'+name+'</br>'+email+'</br>'+phone+'</p>');
                      // $(this).attr('title', data.userDetails.first_name);

                      // $('.user_info').css({'display' : 'block'});
                      // $('.user_info').parent().parent().siblings().children().children('.user_info').css({'display' : 'none'});

                    }
        },
        error: function(xhr, status, error){

        },

    });
        }

        function show_popup(element){
              console.log('show');
            element.find('.user_info').css({'display': 'block !important'});
        }
        function hide_popup(element){
            console.log('hide');
            element.find('.user_info').css({'display': 'none !important'});
        }

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
</body>
</html>

