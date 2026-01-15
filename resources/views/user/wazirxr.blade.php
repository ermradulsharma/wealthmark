<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>

  
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
      margin-top:10px !important;
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
        <div class="container-fluid">
            <section class="dashboard-breadcrumb mb-2rem">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                       <div class="col-8">
                          <h2 class="fw-bold mb-0">Reward Center</h2>
                       </div>
                       <div class="col-4 text-end">
                          <img src="{{asset('/assets/img/reward.svg') }}" class="breadcrumb-icon" alt="">
                       </div>
                    </div>
                </div>
            </section>
            
        </div>  
    </div>
   @include('template.web_footer') 	
  
  
</body>
</html>

