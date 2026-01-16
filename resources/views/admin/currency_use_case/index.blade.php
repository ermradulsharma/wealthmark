<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Currency use Case</title>
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
                                                <h2 class="fw-bold mb-0 ps-1">Currency use Case</h2>
                                            </div>
                                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" >
                          <p>{{ $message }}</p>
                        </div>
                    @endif
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
                                                    <th>Id</th>
                                                    <th>Presale Public (60%)</th>
                                                    <th>Community (50%)</th>
                                                    <th>Team (5%)</th>
                                                    <th>Mining (20%) </th>
                                                    <th>Charity (3%)</th>
                                                     <th>Early User Benefit (7%)</th>
                                                      <th>Pre Launch (0%)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i= 1; @endphp
                                              @foreach($usecase_coin as $userCoin)

                                                  <tr>
                                                       <td>{{ $i }}</td>
                                                    <td>{{ $userCoin->id }}</td>
                                                    <td>{{ $userCoin->presale_public }}</td>
                                                    <td>{{ $userCoin->community }}</td>
                                                    <td>{{ $userCoin->team }}</td>
                                                    <td>{{ $userCoin->mining }}</td>
                                                    <td>{{ $userCoin->charity }}</td>
                                                    <td>{{ $userCoin->early_user_benefit }}</td>
                                                      <td>{{ $userCoin->pre_launch}}</td>
                                                    <td >

                                                           <label class="badge badge-success" style="color: #198754;"></label>

                                                    </td>
                                                    <td>


                                                    </td>
                                                  </tr>
                                                  @php $i++ @endphp

                                             @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="account_activity_pagination mt-3">

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
   <script type="text/javascript">
         document.getElementById("searchUserlist").onkeyup = function() {
            const value = document.getElementById("searchUserlist").value;
            //alert(value);
            jQuery.ajax({
            type : 'get',
            url : '{{URL::to('admin/searchUserlist')}}',
            data:{
                'search':value
            },
            success:function(data){
                alert(data);
            $('.livesearch').html(data);
            }
            });
        };

</script>
</body>
</html>

