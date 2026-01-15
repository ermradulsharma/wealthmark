<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">

  @include('template.web_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <style>

    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/



  </style>
</head>

    <body class="antialiased">
 @include('template.dashboard_mobile_menu')
@include('template.web_menu')
<div class="dashboard-main">


    <div class="container-fluid">

 <h2> enterprise page section will be showing here!</h2>

    </div>
</div>


@include('template.web_footer')

</body>
</html>
