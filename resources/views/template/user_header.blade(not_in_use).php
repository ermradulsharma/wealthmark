<style>
   .sidebar-open-onclick {
   color: #091a4a;
   font-size: 30px;
   font-weight: 600 !important;
   padding: 0px 15px;
   }
   .main-sidebar-active{
   box-sizing: border-box;
   margin: 0px;
   min-width: 0px;
   position: fixed;
   inset: 0px;
   z-index: 9999;
   flex-direction: row-reverse;
   background-color: rgba(0, 0, 0, 0.1);
   display: flex;
   transition: all 0.5s ease;
   }
   .opensidebar{
   box-sizing: border-box;
   margin: 0px;
   min-width: 0px;
   overflow: auto;
   z-index: 999999;
   height: 100%;
   transition: all 0.5s ease 0s;
   width: 375px;
   background-color: rgb(255, 255, 255);
   position:relative;
   }
   .sidebar-header{
   padding: 10px 20px;
   display: flex;
   justify-content: end;
   border-bottom: 2px solid whitesmoke;
   }
   .close-sidebar{
   font-size: 30px;
   color: #9e9e9e;
   cursor: pointer;
   padding-right: 15px;
   text-align: right;
   }
</style>
<span class="screen-darken"></span>
<header class="mobile-header d-lg-none  bg-white shadow-sm">
   <div class="container-fluid">
      <div class="row">
         <div class="col-8">
            <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('assets/img/wealthmark-logo.svg') }}" alt="" class="wealthmark-logo">
            </a>
            <a href="javascript:void(0)" class="icon-link"><i class="bi bi-grid-3x3-gap d-lg-inline-block"  style="font-size: 24px;color: #222222;font-weight: normal;transition: .2s;" data-trigger="navbar_main"></i></a>
         </div>
         <div class="col-2" style="text-align:right">
            <a href="javascript:void(0)" class="sidebar-open-onclick"> <span class="bi bi-list"> </span></a>
         </div>
      </div>
   </div>
</header>
<header id="header" class="shadow-sm fixed-top header-bg-top">
   <div class="container-fluid">
      <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg py-0 ">
         <div class="container-fluid p-0">
            <div class="offcanvas-header justify-content-between border-bottom">
               <a href="{{ url('') }}" class="navbar-brand">
               <img src="{{ url('assets/img/wealthmark-logo.svg') }}" alt="" class="wealthmark-logo">
               </a>
               <div class="">
                  <a class="btn btn-danger btn-lg mobile_btn" href="{{ url( app()->getLocale(), 'login') }}" style="background: #263674;color: white;border:0;"><i class="bx bx-log-in-circle"></i> Login</a>
                  <a class="btn btn-danger btn-lg mobile_btn " href="{{ url( app()->getLocale(), 'register') }}"><i class="bx bx-log-in-circle"></i> Register</a>
               </div>
               <span class="btn-close m-0 p-0"></span>
               <!-- <button class="btn-close float-end m-0 p-0"></button> -->
            </div>
            <a href="{{ url('') }}" class="navbar-brand d-none d-lg-block">
            <img src="{{ url('assets/img/wealthmark-logo.svg') }}" alt="" class="wealthmark-logo">
            </a>
            <!-- <a class="navbar-brand" href="javascript:void(0);">Brand</a> -->
            <div class="">
               @include('template.main_navigation')
            </div>
            <div class="ms-auto">
               <ul class="navbar-nav ">
                  <li class="dashboard-hide nav-item d-none d-sm-block"><a class="btn btn-blue me-3 shadow " href="{{ url( app()->getLocale(), 'login') }}"><i class="bx bx-log-in-circle"></i> Login</a></li>
                  <li class="dashboard-hide nav-item d-none d-sm-block"><a class="btn btn-yellow shadow" href="{{ url( app()->getLocale(), 'register') }}"><i class="bx bx-log-out-circle"></i> Register</a></li>
                  <li class="nav-item hide-between-992-1400"><a class="nav-link" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#currLangModal">
                     <span class="nav-img d-lg-none"><img src="{{ url('assets/img/mob-nav-icon/english.svg') }}" class="img-responsive"> </span>
                     <span class="d-inline-block ">   English</span>
                     </a>
                  </li>
                  <li class="nav-item dropdown hide-between-992-1400">
                     <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <span class="nav-img d-lg-none"><img src="{{ url('assets/img/mob-nav-icon/download.svg') }}" class="img-responsive"> </span>
                     <span class="d-inline-block ">   Download</span> </a>
                     <ul class="dropdown-menu dropdown-menu-end fade-down">
                        <li> <a  href="javascript:void(0);">
                           <img src="{{ url('assets/img/qr/qrcode_wealthmark.io.png') }}" class="header-download" alt="QR Code" />
                           </a>
                        </li>
                     </ul>
                  </li>
                  <i class="nav-devider d-none d-sm-block hide-between-992-1400"></i>
                  <li class="nav-item hide-between-992-1400"><a class="nav-link ps-0" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#currLangModal">
                     <span class="nav-img d-lg-none"><img src="{{ url('assets/img/mob-nav-icon/inr.svg') }}" class="img-responsive"> </span>
                     <span class="d-inline-block ">   INR</span>
                     </a>
                  </li>
                  <i class="nav-devider d-none d-sm-block hide-between-992-1400"></i>
                  <!--<li class="nav-item hide-between-992-1400"><a class="nav-link ps-0" href="javascript:void(0);"><i class="bi-moon-stars-fill"></i></a></li>-->
                  <li>
                     <a class="nav-link ps-0" href="javascript:void(0);">
                        <div class="form-check form-switch">
                           <input type="checkbox" class="form-check-input" id="darkSwitch">
                           <!--<label class="custom-control-label" for="darkSwitch">Dark Mode</label>-->
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </div>
</header>
