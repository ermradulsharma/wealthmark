<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  @include('template.web_css')
   <style>
        .sidebar-nav{
            display:block;
        }


        .bootstrap-select>select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {
            display: block!important;
        }

        .selectpicker {
            padding: 0.7rem 0.75rem;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .selectpicker option{
           cursor: pointer;
        }

        .rw-div{
            display: flex;
            background: #f5f8fd !important;
            padding: 10px;
            border-radius: 10px;
            margin:10px 0px;
        }
      .rw-div > div:first-child{
          background:#fdc116!important;
          width:150px;
          display:flex;
          align-items:center;
          justify-content:center;
          flex-direction:column;
      }
       .rw-div > div:last-child{
          background:white;
          padding:10px;

          width:calc(100% - 150px);
      }

      .border-tb{
          border:2px solid rgb(234, 236, 239);
          border-left:none;
          border-right:none;
          padding:10px;
          margin-top:15px;
          text-align:right;
      }
      .border-tb span{
            background: #f5f8fd;
        color: black;
        padding: 5px;
        display: inline-block;
        border-radius: 50%;
        line-height: 10px;
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
      }
      .cursor-pointer{
          cursor:pointer;
      }
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
                                    @foreach($other_giftcard_histroy as $row)
                                    <?php
                                        $used_user = DB::table('users')->where('id',$row->gift_card_current_user_id)->first();
                                        $owner_user = DB::table('users')->where('id',$row->gift_card_user_id)->first();
                                    ?>
                                        <tr>
                                            <td>{{($other_giftcard_histroy->currentPage() - 1) * $other_giftcard_histroy->perPage() + $loop->iteration}}</td>
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
                         {!! $other_giftcard_histroy->links('pagination::bootstrap-5') !!}
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

        function popupUserDetail(id){

            console.log(id);
            var userid = id;

             $.ajax({
        url: '<?php echo url('user/popup-user-detail') ?>',
        method: 'POST',
        data: {
        '_token' : '{{ csrf_token() }}',
        'userid' : userid ,
        } ,
        success:function(data){
            console.log(data.userDetails.id);
              if(data.userDetails){

                      var name = data.userDetails.first_name;
                      var phone = data.userDetails.phone;
                      var email = data.userDetails.email;


                       $('.user_info').html('<p>'+name+'</br>'+email+'</br>'+phone+'</p>');


                      //  $('#'+userid+' '+'.user_info').html(name+' '+email+' '+phone);

                      // $(this).attr('title', data.userDetails.first_name);
                  //     $('.user_info').css({'display' : 'block'});
                //      $('.user_info').parent().parent().siblings().children().children('.user_info').css({'display' : 'none'});

                    }
        },
        error: function(xhr, status, error){

        },

    });
        }


        function show_popup(element){
              console.log('show');
            element.find('.user_info').css({'display': 'block'});
        }
        function hide_popup(element){
            console.log('hide');
            element.find('.user_info').css({'display': 'none'});
        }

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>
</body>
</html>

