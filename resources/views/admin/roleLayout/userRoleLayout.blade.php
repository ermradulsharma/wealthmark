<!DOCTYPE html><html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url(app()->getLocale().'/user/dashboard') }}"  style="background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);; padding:3px 8px">
                    User Roles and Permissions Controller
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="{{ route('plans.index') }}">Manage Plans</a></li>
                            <pre>
                         
</pre>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                                 
                                </a>
                              

                             
                            </li>
                           
                            <li>
                                    
                                </li>
                       
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


    </div>
</body>
</html>