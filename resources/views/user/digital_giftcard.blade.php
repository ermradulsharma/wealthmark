<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Digital Gift Card</title>
  <!--<meta content="" name="description">-->
  <!--<meta content="" name="keywords">-->
  <!--<meta name="theme-color" content="#287aff">-->
  <!--<link href="{{ asset('img/wealthmark-logo.svg') }}" rel="icon">-->
  <!--<link href="{{ asset('img/wealthmark-logo.svg') }}" rel="apple-touch-icon">-->
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">-->
  @include('template.web_css')
   <style>
        .sidebar-nav{
            display:block;
        }


      /*  .bootstrap-select>select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {*/
      /*      display: block!important;*/
      /*  }*/

      /*  .selectpicker {*/
      /*      padding: 0.7rem 0.75rem;*/
      /*      color: #212529;*/
      /*      background-color: #fff;*/
      /*      background-clip: padding-box;*/
      /*      border: 1px solid #ced4da;*/
      /*      border-radius: 5px;*/
      /*  }*/

      /*  .selectpicker option{*/
      /*     cursor: pointer;*/
      /*  }*/

      /*  .rw-div{*/
      /*      display: flex;*/
      /*      background: #f5f8fd !important;*/
      /*      padding: 10px;*/
      /*      border-radius: 10px;*/
      /*      margin:10px 0px;*/
      /*  }*/
      /*.rw-div > div:first-child{*/
      /*    background:#fdc116!important;*/
      /*    width:150px;*/
      /*    display:flex;*/
      /*    align-items:center;*/
      /*    justify-content:center;*/
      /*    flex-direction:column;*/
      /*}*/
      /* .rw-div > div:last-child{*/
      /*    background:white;*/
      /*    padding:10px;*/

      /*    width:calc(100% - 150px);*/
      /*}*/

      /*.border-tb{*/
      /*    border:2px solid rgb(234, 236, 239);*/
      /*    border-left:none;*/
      /*    border-right:none;*/
      /*    padding:10px;*/
      /*    margin-top:15px;*/
      /*    text-align:right;*/
      /*}*/
      /*.border-tb span{*/
      /*      background: #f5f8fd;*/
      /*  color: black;*/
      /*  padding: 5px;*/
      /*  display: inline-block;*/
      /*  border-radius: 50%;*/
      /*  line-height: 10px;*/
      /*  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;*/
      /*}*/
      /*.cursor-pointer{*/
      /*    cursor:pointer;*/
      /*}*/
    </style>
</head>
<body>
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')
        <div class="container-fluid p-0">
            <div class="bg-light-blue p-3 w-100">
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                    <h2 class="fw-bold mb-0">Digital Gift Card</h2>
                </div>
                <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">

                </div>

            </div>
        </div>
    </div>
    @include('template.web_footer')
    <!---------------include('template.web_js') -->
    <!-----------------comment for dropdown not open properly ---------------------->
</body>
</html>

