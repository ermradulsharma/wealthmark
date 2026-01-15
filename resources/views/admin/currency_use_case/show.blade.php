<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Manage Gift Card</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="javascript:void(0)287aff">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
        <div class="container-fluid">
              @can('plan-delete')
            <div class=" banner-section">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2> Show User</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Roles:</strong>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
              @endcan
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


