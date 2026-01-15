
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Edit User Plan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="theme-color" content="javascript:void(0)287aff">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="icon">
  <link href="{{ asset('assets/img/wealthmark-logo.svg') }}" rel="apple-touch-icon">
  @include('template.web_css')
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
  <style>
    .cmplet_btn{
        box-sizing: border-box;
        /*margin: 16px 0px 24px;*/
        min-width: 0px;
        display: flex;
        /*border-radius: 36px;*/
        cursor: pointer;
        background: rgba(14, 203, 129, 0.12);
        font-size: 12px!important;
        line-height: 16px;
        color: rgb(3, 166, 109);
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-left: 22px;
        padding-right: 22px;
        height: 30px;
     }

    .error{
        color: red;
        font-size: 14px;
    }

    .error_border{
        border: 1px solid red;
    }

      ul.nicknamefield{
          display: inline-flex;
          font-size:14px;
          text-transform: capitalize;
      }

#securityVerification .wm-custom-modal-diolog , #customizeProfile .wm-custom-modal-diolog {
    max-width: 450px;
    width: 100%;
}
  .verify-section {
    display: none;
}



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

 /*--------------------------------   */

 .kyc-complete-notification{
     background: #29cf471f;
    border-radius: 5px;
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    justify-content: space-between;
    padding: 10px;
 }

 .kyc-complete-notification div:first-child{
     display: flex;
    align-items: center;
    padding-right:10px;
    flex-wrap:wrap;
 }

 .kyc-complete-notification div:first-child span:first-child{
     color: #29cf47;
     margin-right:10px;
 }
  .kyc-complete-notification div:first-child span:nth-child(2){
     font-size:14px;
 }

 .kyc-complete-notification div:nth-child(2) span{
     padding:5px;
     font-size:15px;
         cursor: pointer;
 }

  .fund-div-text{
         display: flex;
    align-items: center;
    padding-right:10px;
 }
 .fund-div-text div:first-child{
     background: white;
    padding: 10px;
    margin-right: 10px;
    border-radius: 50%;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
 }
 .fund-div-text div:first-child img{
     max-width:25px;
 }

     .fund-div-text div:nth-child(2) > span{
         display:block;
         margin-bottom:5px;
         font-size:14px;
     }


       .fund-div-text div:nth-child(2) > span:first-child .hot{
        background: #dc1b75;
    padding: 0px 5px;
    margin-right: 10px;
    color: white;
    border-radius: 15px;
     }
      .fund-div-text div:nth-child(2) > span:first-child .video{
          color: #fdc116;
    margin-left: 15px;
      }
         .fund-div-text div:nth-child(2) > span:first-child .video i{
             margin-right:5px;
         }

      .fund-div-text div:nth-child(2) > span:nth-child(2){
          font-size:12px;
      }
      span.sub-heading{
          font-size: 13px;
    color: #a39e9e;
      }

      @media (max-width:500px){
          .fund-div{
              display:block !important;
          }
          .fund-div .video{
              display:none;
          }
        .fund-div .fund-div-btn  {
              margin: auto;
    margin-top: 10px;
          }
          .fund-div-text div:nth-child(2) > span:nth-child(2){
              text-align: justify;
          }
      }








      .verify-now {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 108px;
    fill: currentcolor;
    position: absolute;
    right: 8px;
    top: 25px;
    width: 1em;
    height: 1em;
}
.max-width-500{
    max-width:500px;
    padding-right:10px;
}

@media(max-width:500px){
     .verify-now{
         position:relative;
         top:unset;
         right:unset;

     }
     .verify-div-main{
         text-align:center !important;
     }
}
.first-block{
    padding: 24.5px 30px!important;
}

#increase-your-account-security .dashboard-card{
min-height:auto;
}
.security-block {
    width: 100%;
}

.db-user-div{
            display: flex;
            align-items: center;
             font-size: 16px;
             margin-bottom:10px;
             cursor: pointer;
      }
      .db-user-div b{
          font-weight:900;
          color:black !important;
      }
      .db-user-name{
        color: rgb(112, 122, 138);

    margin-right:10px;
      }
      .db-user-type{
          color:#fdc116;
          margin-right:10px;
      }
      .db-user-status{
        color:#fdc116;
          margin-right:10px;
      }
      .db-twitter-status{

      }
     .db-login-activity {
          color: rgb(112, 122, 138);
    font-size: 12px;
      }
	  .user-name-div{
          margin-bottom:5px;
      }

    .table>thead {
        background-color: #f5f8fd;
    }
    .user-info-header{
            background-color: rgb(250, 250, 250);
    }
     .pills-tab{
        display: flex;
        flex-wrap: nowrap;
        overflow: scroll;
    }

 .security-column-right{
     flex:unset !important;
 }
 @media screen and (min-width: 1023px){
.security-column-right {
    margin-top: 0px;
    width: max-content !important;
}}
  </style>

</head>
<body>
    @include('admin.template.web_menu')
    <div class="dashboard-main">
        @include('admin.template.sidebar')
        <div class="container-fluid bg-light-blue">
            <div class=" banner-section">
                <div class="row">
                    <div class="col-md-12">
                                      <div class="d-flex justify-content-between bg-white shadow-none border-0 py-3 mb-2 px-4">
                <div class="col-6">
                    <h2 class="fw-bold mb-0 ps-1">Edit Product</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                                <div class="text-left">
                                    <a class="btn btn-blue shadow m-0" href="{{ route('plans.index') }}"> Back</a>
                                </div>
                </div>
            </div>


                    </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="card">
    <div class="card-body">
           <form action="{{ route('plans.update',$plan->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
		        <div class="form-group">
		            <strong>Name</strong>
		            <input type="text" name="name" value="{{ $plan->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
		        <div class="form-group">
		            <strong>Detail</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $plan->detail }}</textarea>
		        </div>
		    </div>

		         <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="footer-btn-box d-flex justify-content-end align-items-center">
                                                  <a class="btn-blue shadow" href="{{ route('roles.index') }}"> Cancel</a>
                                                <button type="submit" class="btn btn-yellow shadow">Submit</button>
                                            </div>
                                        </div>
		</div>


    </form>
    </div>
</div>

            </div>
        </div>
    </div>
   @include('admin.template.web_footer')
   <link rel="stylesheet" href="https://wealthmark.io/assets/css/alert.css">
   <script src="https://wealthmark.io/assets/js/alert.js"></script>
</body>
</html>



