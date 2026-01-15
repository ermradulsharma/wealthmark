<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  @include('template.web_css')

   <style>

  .sidebar-nav{
      display:block;
  }
  #preloader{
      display:none !important;
  }

  @media (max-width: 450px){

  .balance-details .dashboard-card-header{
      display:block;

  }
  .dashboard-card-heading{
      margin-bottom:10px;
      display:block;
  }
  .balance-details .dashboard-card-header .btn-theme-sm{
      margin-left:0px;
  }
 #progressbar li{
     width:33% !important;
 }

  }






  /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/


   @media (max-width: 992px){
 .hide_on_max_dashboard_992{
     display:none !important;
 }
   }
  .dashboard-main{
      margin-top:0px !important;
  }
.hide_on_dashboard{
    display:none !important;
}
header{
    box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
    background:white;
   z-index:9999999999 !important;

}
  .sidebar-btn-open{
      font-size: 30px;
    color: #242424;
  }
  @media (max-width: 992px){
     .sidebar.active {
    display: block;
    top: 0px !important;
    position: fixed !important;
    right: 0 !important;
    left:auto !important;
      }

.dashboard-sidebar {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: fixed;
    inset: 0px;
    z-index: 9999;
    flex-direction: row-reverse;
    background-color: rgba(0, 0, 0, 0.1);
    display: none;
    transition: all 0.5s ease;
}
.dashboard-sidebar-flex{
    display:flex !important;
}
  }
    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/



  </style>
</head>
<body>
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')
            <div class="container-fluid p-0">
                <section class="dashboard-breadcrumb mb-3">
                 <div class="container">
                    <div class="row align-items-center justify-content-between">
                       <div class="col-12">
                          <h2 class="fw-bold mb-0">API Management</h2>
                       </div>
                    </div>
                 </div>
                </section>

                <div class="container">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-md-4 offset-md-4  mb-3">
                                <span class="pay-method-text"><span class="h5">Create API</span></span>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 offset-md-3 offset-lg-3 offset-xl-4 ">
                                <span class="small text-muted">Tips: When you sell your cryptocurrency, the added payment method will be shown to the buyer during the transaction. To accept cash transfer, please make sure the information is correct.</span>
                                <div class="form-floating my-4">
                                    <input type="text" class="form-control" id="apiKey" placeholder="Label API key to proceed">
                                    <label for="apiKey">Label API key to proceed</label>
                                </div>
                                <button type="submit" class="btn-theme w-100">Create API</button>
                                <div class="text-center my-3">
                                    <div class="mb-3"><a href="#" data-bs-toggle="modal" data-bs-target="#warnMsg" class="text-theme-yellow ">Create Tax Report API</a></div>
                                    <div><a href="#" class="text-theme-yellow mt-5">View API documentation</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="warnMsg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="warnMsgLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <div class="col-12  mt-3 mb-2rem">
                                <img src="{{ asset('assets/img/dashboard-icons/warning-info.svg') }}" class="no-record-icon" alt="">
                            </div>
                            <p class="small text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                            <button type="button" class="btn-theme mt-3 w-100 border-0" data-bs-dismiss="modal" aria-label="Close">I Understand</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   @include('template.web_footer')
   <!--@include('template.web_js') -->
</body>
</html>















