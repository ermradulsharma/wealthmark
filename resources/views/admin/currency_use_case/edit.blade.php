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
         <style>

table {
    caption-side: bottom;
    border-collapse: collapse;
    background: radial-gradient(#f1f3f4, transparent);
}
    img, svg {
    width: 30px;
    vertical-align: middle;

    span a{
    padding: 2px !important;

    }
    .role nav a.py-2 {
    padding-top: 0.25rem!important;
    padding-bottom: 0.25rem!important;
    }
    .role nav a.px-2 {
    padding-right: 0.25rem!important;
    padding-left: 0.5rem!important;
    }
}
</style>
    </head>
<body>
    @include('admin.template.web_menu')
    <div class="dashboard-main">
        @include('admin.template.sidebar')
        <div class="container-fluid">
            <div class=" banner-section">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('first_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
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


