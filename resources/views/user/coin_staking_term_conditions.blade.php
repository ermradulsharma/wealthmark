<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wealthmark Staking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="#287aff">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  @include('template.web_css')
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
       <div class="container-fluid p-0">
           <div class="bg-light-blue p-3 w-100">
               <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <h2 class="fw-bold mb-0">Terms and conditions (Staking)</h2>
            </div>

            <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <div class="f-18 fw-bold yellow-text mb-2">Terms and conditions (Staking)</div>
                <div class="fs-14">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
                </div>

                <ul class="fs-14 my-3 ms-2 ">
                        <li class="d-flex alifn-items-center mb-1">
                           <i class="bi bi-arrow-right-short me-1"></i>
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                        </li>
                        <li class="d-flex alifn-items-center mb-1">
                           <i class="bi bi-arrow-right-short me-1"></i>
                            <span>when an unknown printer took a galley of type and scrambled.</span>
                        </li>
                        <li class="d-flex alifn-items-center mb-1">
                           <i class="bi bi-arrow-right-short me-1"></i>
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                        </li>
                        <li class="d-flex alifn-items-center mb-1">
                           <i class="bi bi-arrow-right-short me-1"></i>
                            <span>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
                        </li>
                        <li class="d-flex alifn-items-center mb-1">
                           <i class="bi bi-arrow-right-short me-1"></i>
                            <span>Wealthmark respects your privacy and is committed to protecting it </span>
                        </li>

                </ul>
                <div class="f-18 fw-bold yellow-text mb-2">Terms and conditions (Staking)</div>

               <div class="fs-14 mb-2">
                <span class="fs-18 text-black">  Disclosure  </span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
                </div>
                 <div class="fs-14 mb-2">
                <span class="fs-18 text-black"> Disclaimer </span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
                </div>

            </div>

           </div>
       </div>

    </div>




    @include('template.web_footer')

</body>
</html>

