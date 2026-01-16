<style>
.show {
    display: block!important;
}

   .mobile-offcanvas.show {
   display: none!important;
   }
   @media(max-width:991px){
   #sidebar.sidebar {
   top: 64px!important;
   }
   .dashboard-main .sidebar {
   width: 100% !important;
   height: -webkit-fill-available;
   display: none;
   }
   #sidebar #sidebar-nav .active {
   padding: 1rem!important;
   border-bottom: 1px solid #ededed00;
   }
   .sidebar {
   top: 70px!important;
   }
   .dashboard-main .sidebar .sidebar-nav {
   display: block!important;
   }
   .dashboard-main .sidebar .sidebar-nav > li {
   display: flex!important;
   }
   .dashboard-main .sidebar {
   width: 100% !important;
   height: -webkit-fill-available;
   }
   @media(max-width:400px){
   ul#mobile-dropdown-list {
   right: -25%!important;
   }
   }
   @media(min-width:401px) and (max-width:768px){
   .show_if_login_admin-panel.navbar .left-header-custom-nav .dropdown-menu {
   left: 39% !important;
   width: 250px;
   }
   ul#mobile-dropdown-list {
   right: 23%!important;
   }
   }
   @media(min-width:768px) and (max-width:991px){
   #mobile-dropdown-list{
   left: auto !important;
   right: 28% !important;
   }
   .show_if_login_admin-panel .dropdown.left-header-custom-nav ul a {
   padding-right: 30px !important;
   }
   }
   .show_if_login_admin-panel .dropdown.left-header-custom-nav ul a {
   padding-right: 30px !important;
   }
   #header {
   transition: all 0.3s;
   z-index: 99999999;
   position: sticky;
   top: 0px;
   box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
   background: white;
   z-index: 9999999999 !important;
   }
   .sidebar {
   box-shadow: 0px 0px 5px rgba(1, 41, 112, 0.1);
   box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
   }
   @media(max-width:768px){
   /*.col-8> .show_if_login.navbar >.left-header-custom-nav{*/
   /*     position:static !important;*/
   /* }*/
   .show_if_login.navbar .left-header-custom-nav .dropdown-menu {
   left:-80px;
   width:250px;
   }
   .navbar .dropdown.notification ul li.max-width-450 {
   display:none !important;
   }
   .navbar .left-header-custom-nav > a:hover, .navbar .left-header-custom-nav > .active, .navbar .left-header-custom-nav > .active:focus, .navbar .left-header-custom-nav:hover > a{
   background:transparent;
   }
   }
   @media(max-width:500px){
   .col-8> .show_if_login.navbar >.left-header-custom-nav{
   position:static !important;
   }
   .show_if_login.navbar .left-header-custom-nav .dropdown-menu {
   left:unset !important;
   width:250px;
   }
   .navbar .dropdown.notification ul li.max-width-450 {
   display:none !important;
   }
   }
   .css-o271o {
   box-sizing: border-box;
   margin: 0px;
   min-width: 0px;
   display: flex;
   position: relative;
   height: 20px;
   -webkit-box-align: center;
   align-items: center;
   color: rgb(132, 142, 156);
   margin-right:10px;
   }
   .css-1tv5lyv {
   box-sizing: border-box;
   margin: 0px;
   min-width: 0px;
   color: currentcolor;
   width: 25px;
   height: 25px;
   font-size: 14px;
   fill: currentcolor;
   }
   .css-o271o::after {
   content: "";
   top: -5px;
   right: -5px;
   width: 6px;
   height: 6px;
   background-color: rgb(14, 203, 129);
   position: absolute;
   border-radius: 99999px;
   }
</style>
<?php
   function hideEmailAddress($email)
   {
       if(filter_var($email, FILTER_VALIDATE_EMAIL))
       {
           list($first, $last) = explode('@', $email);
           $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
           $last = explode('.', $last);
           $last_domain = str_replace(substr($last['0'], '10'), str_repeat('*', strlen($last['0'])-1), $last['0']);
           $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
           return $hideEmailAddress;
       }
   }
   ?>
<header class="mobile-header d-lg-none  bg-white shadow-sm">
   <div class="container-fluid">
      <div class="row">
         <div class="col-2">
            <a href="{{ url('') }}" class="navbar-brand">
            <img src="{{ url('assets/img/wealthmark-logo.svg') }}" alt="" class="wealthmark-logo mt-2" >
            </a>
         </div>
         <div class="col-8 d-flex justify-content-end align-items-center mob-nav">
            @auth
            <div class="show_if_login show_if_login_admin-panel navbar flex-nowrap">
               <div class="nav-item dropdown left-header-custom-nav max-width-300 user">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <span class="">
                  @if(Auth::user()->avatar != null)
                  <img width="20px" src="{{ asset('img/avatar').'/'.Auth::user()->avatar }}" alt="">
                  @else
                  <span class="nav-img d-lg-none"> <img src="{{ asset('img/icon-user.svg') }}" class="img-responsive mr-0"> </span>
                  @endif
                  </span>
                  <span class="d-lg-none user-name-txt hide-575">Vin Diesel</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end fade-down" id="mobile-dropdown-list">
                     <li>
                        <a class="dropdown-item" href="javascript:void(0);" style="padding-right: 36px !important;">
                           <div class="d-flex align-items-center">
                              <i class="bi bi-sliders header-icons"></i>
                              <div class="d-block">
                                 <span> Change Password </span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li style="border-top:2px solid whitesmoke;">
                        <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/logout">
                           <div class="d-flex align-items-center">
                              <i class="bi bi-box-arrow-right header-icons"></i>
                              <div class="d-block">
                                 <span> Log Out </span>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            @else
            <a class="btn btn-blue-login  shadow d-flex justify-content-center align-items-center " href="{{ url( app()->getLocale(), 'login') }}">
            <span class="me-1"> <i class="bx bx-log-in-circle"></i> </span>
            <span class="text-only"> Login </span>
            </a>
            <a class="btn btn-yellow-register shadow  d-flex justify-content-center align-items-center" href="{{ url( app()->getLocale(), 'register') }}">
            <span class="me-1">
            <i class="bx bx-log-out-circle"></i>
            </span>
            <span class="text-only"> Register </span>
            </a>
            @endauth
         </div>
         <div class="col-2 d-flex justify-content-end align-items-center">
            <span class="bi bi-list btn-mobile-nav " id="mobile-sidebar-show" data-trigger="navbar_main"></span>
         </div>
      </div>
   </div>
   </div>
</header>
<header id="header" class="border_new header-bg-top">
   <div class="container-fluid  second_border_new">
      <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg py-0">
         <div class="offcanvas-header justify-content-between">
            <a href="{{ url('') }}" class="navbar-brand" id="find-2">
            <img src="{{ asset('img/wealthmark-logo.svg') }}" alt="ss" class="wealthmark-logo">
            </a>
            <span class="btn-close m-0 p-0"></span>
         </div>
         <a href="{{url('')}}" class="navbar-brand d-none d-lg-block">
         <img src="{{asset('img/wealthmark-logo.svg') }}" alt="dd" class="wealthmark-logo">
         </a>
         <div>
         </div>
         <div class="ms-auto">
            <ul class="navbar-nav ">
               @auth
               <div class="show_if_login show_if_login_admin-panel">
                  <li class="nav-item dropdown left-header-custom-nav max-width-300 user">
                     <a class="nav-link dropdown-toggle nodropdown-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <span class="">
                     @if(Auth::user()->avatar != null)
                     <img width="20px" src="{{ asset('img/avatar').'/'.Auth::user()->avatar }}" alt="">
                     @else
                     <span class="nav-img icon-only"> <img src="{{ asset('img/icon-user.svg') }}" class="img-responsive">  </span>&nbsp;
                     @endif
                     </span>
                     <span class="text-only user-name-txt ps-2"> Vin Diesel</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end fade-down scrollbar-style">
                        <li>
                           <a class="dropdown-item" href="#" style="padding-right: 36px !important;">
                              <div class="d-flex align-items-center">
                                 <i class="bi bi-lock header-icons"></i>
                                 <div class="d-block">
                                    <span> Change Password </span>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li style="border-top:2px solid whitesmoke;">
                           <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/logout">
                              <div class="d-flex align-items-center">
                                 <i class="bi bi-box-arrow-right header-icons"></i>
                                 <div class="d-block">
                                    <span> Log Out </span>
                                 </div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </li>
               </div>
               @else
               @endauth
            </ul>
         </div>
      </nav>
   </div>
</header>
