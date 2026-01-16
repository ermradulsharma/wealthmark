
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
              @media(max-width:576px){
          label.create-role-chkbox-wrapper {
                min-width: 100%!important;
            }
      }
label.create-role-chkbox-wrapper {
    min-width: 205.8px;
    background-color: #f5f8fd;
    margin: 5px;
    padding: 10px;
    display: flex;
    justify-content: start;
    align-items: center;
    margin-bottom: 15px;
}
        div#role-wrapper-main {
            display: flex;
            flex-wrap: wrap;
            margin: 5px;
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
            <div class=" banner-section bg-light-blue">
               <div class="row">
                   <div class="col-md-12">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-3 mb-2 px-4">
                <div class="col-6">
                    <h2 class="fw-bold mb-0 ps-1">Edit Role</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                                <div class="text-left">
                                    <a class="btn btn-yellow" href="{{ route('roles.index') }}"> Back</a>
                                </div>
                </div>
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


{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="card">
    <div class="card-body">
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
         <strong>Permission:</strong>
        <div class="form-group" id="role-wrapper-main">

            <br/>
            @foreach($permission as $value)
                <label class="text-transform-capitalize create-role-chkbox-wrapper shadow-sm">{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                <span class="checkbox-value px-1">{{ str_replace('-', ' ', $value->name) }}</span></label>
            <br/>
            @endforeach
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="footer-btn-box d-flex justify-content-end align-items-center">
                                                  <a class="btn-blue shadow" href="{{ route('roles.index') }}"> Cancel</a>
                                                       <button type="submit" class="btn-yellow shadow">Submit</button>
                                            </div>
                                        </div>

</div>
</div>
</div>
{!! Form::close() !!}
            </div>
        </div>
    </div>
   @include('admin.template.web_footer')
   <link rel="stylesheet" href="{{ url("assets/css/alert.css") }}">
   <script src="{{ url("assets/js/alert.js") }}"></script>
    </script>
</body>
</html>




