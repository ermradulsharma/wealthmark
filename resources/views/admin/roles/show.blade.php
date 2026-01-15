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
      @include('template.web_css')
      <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
            .role-info-box label {
    display: inline-block;
    text-transform: capitalize;
}
         </style>
    </head>
<body>
    @include('admin.template.web_menu')
    <div class="dashboard-main">
        @include('admin.template.sidebar')
        <div class="container-fluid bg-light-blue">
            <div class=" banner-section">
                       <div class="bg-white shadow-none border-0 mb-2">

                           <div class="col-md-12">
                                <div class="row bg-white shadow-none border-0 py-3 mb-2 mx-1">
                <div class="col-6">
                    <h2 class="fw-bold mb-0 ps-1">Show Role</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
			                              <a class="btn-yellow shadow" href="{{ route('roles.index') }}"> Back</a>
                                			</div>
            </div>


                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group d-flex align-items-center role-info-box">
                        <h5 class="m-0"><strong>Name: &nbsp;</strong></h5>
                        {{ $role->name }}
                    </div>
                </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group d-flex align-items-center role-info-box">
                         <h5 class="m-0"><strong>Permissions:&nbsp;</strong></h5>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label label-success">{{ $v->name }},</label>
                            @endforeach
                        @endif
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
    </div>
   @include('admin.template.web_footer')
   <link rel="stylesheet" href="{{ url("assets/css/alert.css") }}">
   <script src="{{ url("assets/js/alert.js") }}"></script>
    </script>
</body>
</html>


