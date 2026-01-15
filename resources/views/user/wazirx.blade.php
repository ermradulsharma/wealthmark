<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>



  @include('template.web_css')
   <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/confirm-order.css') }}">
       <style>
  .sidebar-nav{
      display:block;
  }


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

            <div class="col-md-4 m-auto">
                @include('chatbox.chatbox')
            </div>

        </div>
    </div>

  @include('template.country_language')
    @include('template.web_footer')

</body>
</html>

