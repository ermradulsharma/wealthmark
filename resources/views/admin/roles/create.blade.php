<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Create New Role</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="theme-color" content="javascript:void(0)287aff">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
      <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
        <style>
      @media(max-width:576px){
          label.create-role-chkbox-wrapper {
                min-width: 100%!important;
            }
      }
label.create-role-chkbox-wrapper {
    min-width: 208.8px;
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
            #role-wrapper-main{
                display:flex;
                justify-content:start;
                align-items:center;
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
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-3 mb-2 px-4">
                <div class="col-6">
                    <h2 class="fw-bold mb-0 ps-1">Create New Role</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                                <div class="text-left">
                                    <a class="btn-yellow" href="{{ route('roles.index') }}"> Back</a>
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

                    <div class="col-lg-12 col-xl-12 mb-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="row">
                                   {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                               <label>Permission</label>
                                            <div class="form-group" id="role-wrapper-main">
                                                @foreach($permission as $value)
                                                    <label class="text-transform-capitalize create-role-chkbox-wrapper shadow-sm">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name input-checkbox')) }}
                                                    <span class="checkbox-value px-1">{{ str_replace('-', ' ', $value->name) }}</span></label>
                                              <br/>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="footer-btn-box d-flex justify-content-end align-items-center pr-2">
                                                  <a class="btn-blue shadow" href="{{ route('roles.index') }}"> Cancel</a>
                                                    <button type="submit" class="btn-yellow text-decoration-none">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                    {!! Form::close() !!}
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
    </script>
</body>
</html>
