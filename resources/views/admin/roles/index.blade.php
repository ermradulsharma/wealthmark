<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Roles Listing</title>
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
            .roles-listing-table .table thead, .table th {
            min-width: 33%;
            width: 33%;
        }
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
                                            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
           <div class="row">
                    <div class="col-6">
                    <h2 class="fw-bold mb-0 ps-1">Manage User Role</h2>
                </div>
                 <div class="col-6">
                       <div class="text-right">
                                    @can('role-create')
                                        <a class="btn-yellow text-decoration-none" href="{{ route('roles.create') }}"> Create New Role</a>
                                    @endcan
                                </div>
                </div>
           </div>
            </div>

                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="col-lg-12 col-xl-12 mb-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="row">
                                   <div class="col-md-12">
                                    <div class="table-responsive roles-listing-table">


                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($roles as $key => $role)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $role->name }}</td>
                                                        <td scope="col">
                                                           <a class="btn btn-success btn-sm" href="{{ route('roles.show',$role->id) }}">Show</a>
                                                            @can('role-edit')
                                                                <a class="btn btn-warning btn-sm" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                                            @endcan
                                                            @can('role-delete')
                                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm ']) !!}
                                                                {!! Form::close() !!}
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="account_activity_pagination mt-3">
                                        {!! $roles->render() !!}
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

</body>
</html>
