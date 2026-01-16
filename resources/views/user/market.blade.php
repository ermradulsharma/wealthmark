<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wealthmark Market</title>
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

.stack_font_size {
    font-weight: 100!important;
    font-size: 13px;
    color: black;
}

.list-boxs {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.list-boxs .m-card {
  width: 100%;
  text-align: center;
  position: relative;
  max-width: 350px;
  margin:auto;
  cursor: pointer;
   box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.list-boxs .m-card .head,
.list-boxs .m-card .body {
  background-color: #FFF;
  padding: 1rem 1rem;

}

.list-boxs .m-card .head {
  color: #263674;
  font-size: 1.2rem;
  text-transform: uppercase;
  /*transform: translateY(30px);*/
  transition: transform .3s linear;
  border-bottom: 1px solid #F2F2F2;
  background:#f5f8fd;
}

.list-boxs .m-card .ticket {
  color: #263674;
  width: 100%;
  margin: 0 auto;
  padding: 1rem;
  font-size: 1.4rem;
  font-weight: bold;
  height: 60px;
}


.list-boxs .m-card:hover{
    box-shadow:0 .125rem .25rem transparent !important;;
}

.bg-light-blue-2{
    background:#e1f5fe1a;
}

  </style>



  <style>

 .plans {
	 display: flex;
	 justify-content: space-around;
}
 @media (max-width: 710px) {
	 .plans {
		 flex-wrap: wrap;
	}
}
 .plans__1 {
	 max-width: 200px;
	 width:100%;
	 height: 250px;
	 background: #f5f8fd;
	 display: flex;
	 flex-direction: column;
	 justify-content: space-between;
	 align-items: center;
	 border-radius: 15px 15px 100px 100px;
	 text-align: center;
	 cursor: pointer;
	    margin: 10px auto;
    margin-top: 50px;
	 box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
	 transition: all 0.5s ease;
}
 @media (max-width: 710px) {
	 .plans__1{
		 margin-bottom: 55px;
	}
}
 .plans__1:hover{
	 background: #fffefe;
	 transform: scale(1.2);
}
 .plans__1:hover .plan-header .icon {
	 background: #fffefe;
	 border: 5px solid #f5f8fd;
}
 .plans__1 .plan-header{
	 color: #1f59a7;
}
 .plans__1 .plan-header .icon {
	 width: 2em;
	 height: 2em;
	 /*line-height: 2em;*/
	 background: #f5f8fd;
	 padding: 0px;
	 font-size: 50px;
	 border-radius: 50%;
	 transform: translateY(-50%);
	 overflow: hidden;
	 transition: all 0.5s ease;
	 display:inline-block;
	 border: 5px solid white;
}
 .plans__1 .plan-header .icon img{
     max-width:50px;
 }
 .plans__1 .plan-header h2{
	 /*font: 600 30px "Poppins", sans-serif;*/
	 letter-spacing: 0.6px;
	 text-transform: uppercase;
	 font-size:18px;
	 transform: translateY(-150%);
	 display: flex;
    align-items: center;
}
 .plans__1 .plan-price{
	 width: 220px;
	 min-height: 80px;
	 background: linear-gradient(180deg, rgba(254,192,15,1) 0%, rgba(248,165,50,1) 100%);
	 color: #fffefe;
	 transform: translateY(-65%);
	 position: relative;
	 display: flex;
	 flex-direction: column;
	 justify-content: space-evenly;
	 box-shadow: -10px 17px 22px -17px #6b5c5c;
}
 .plans__1 .plan-price:before {
	 content: "";
	 position: absolute;
	 top: -5px;
	 left: 0px;
	 width: 0;
	 height: 0;
	 border-radius: 50% 10% 0 0;
	 border: 5px solid #fec00f;
	 border-color:#fec00f #fec00f #fec00f #fec00f;
}
 .plans__1 .plan-price:after {
	 content: "";
	 position: absolute;
	 top: -5px;
	 right: 0px;
	 width: 0;
	 height: 0;
	 border-radius: 10% 50% 0 0;
	 border: 5px solid #fec00f;
	 border-color:#fec00f #fec00f #fec00f #fec00f;
}
 .plans__1 .plan-price h3{
	 /*font: 500 36px "Poppins", sans-serif;*/
	 letter-spacing: 1px;
    color: black;
}
 .plans__1 .plan-price h3:before {
	 content: "";
	 position: absolute;
	 bottom: -5px;
	 left: 0px;
	 width: 0;
	 height: 0;
	 border-radius: 0 0 10% 50%;
	 border: 5px solid #f8a532;
	 border-color: #f8a532 #f8a532 #f8a532 #f8a532;
}
 .plans__1 .plan-price h3:after {
	 content: "";
	 position: absolute;
	 bottom: -5px;
	 right: 0px;
	 width: 0;
	 height: 0;
	 border-radius: 0 10% 50% 0;
	 border: 5px solid  #f8a532;
	 border-color: #f8a532 #f8a532 #f8a532 #f8a532;
}

 .plans__1 .plan-price span{
	 text-transform: uppercase;
	 transform: translateY(-30%);
	 color:black;
}
 .plans__1 .plan-advantege {
	 transform: translateY(-15%);
}
 .plans__1 .plan-advantege ul {
	 list-style: none;
	 margin: 0;
	 padding: 0;
	 display: inline-block;
	 position: relative;
}
 .plans__1 .plan-advantege ul li {
	 padding: 8px 0;
}
 .plans__1 .plan-advantege ul li:first-child {
	 padding: 0;
}
 .plans__1 .plan-advantege ul li .correct{
	 color: #88aa65;
	 font-size: 30px;
	 font-weight: bold;
}
 .plans__1 .plan-advantege ul li .false {
	 color: #a72c28;
	 font-size: 30px;
	 font-weight: bold;
}
 .plans__1 .plan-advantege ul .bar {
	 width: 198px;
	 height: 1px;
	 background: #b4b4ab;
}

@media (min-width: 768px){
    #market-plans-div .col-lg-3{
        flex: 0 0 auto !important;
    width: 33.33333333% !important;
    }
}


@media (min-width: 1279px){
    #market-plans-div .col-lg-3{
        width:25% !important;
        flex: 0 0 auto !important;
    }
}

.plan-header h2 i{
    font-size:14px;
}







/* ------BEGIN : quote ------------ */
.app-quote{
  padding: 10px 25px;
  color: #fff;
  background-repeat: no-repeat;
  background-size: 92px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%2351c1e7' stroke-width='0' viewBox='0 0 24 24'%3E%3Cpath stroke='none' d='M20.309 17.708C22.196 15.66 22.006 13.03 22 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292zm-11.007 0C11.19 15.66 10.999 13.03 10.993 13V5a1 1 0 0 0-1-1h-6c-1.103 0-2 .897-2 2v7a1 1 0 0 0 1 1h3.078a2.89 2.89 0 0 1-.429 1.396c-.508.801-1.465 1.348-2.846 1.624l-.803.16V20h1c2.783 0 4.906-.771 6.309-2.292z'/%3E%3C/svg%3E");
}
.app-quote-text{
  font-size: 24px;
  line-height: 35px;
  font-weight: 500;
  margin-bottom: 10px;
  padding-top: 37px;
}
.app-quote-author{
  display: block;
  font-size: 20px;
  line-height: 28px;
  font-weight: 300;
  font-style: italic;
  margin: 15px 0 0;
}
/* ------END : quote ------------ */
/* ------BEGIN : tooltip ------------ */

.tp-label-text{
  /*background-color: #2a8eb1;*/
  padding-inline: 8px;
  transition: 300ms;
}
.app-tp-wrapper{
  --tp-width: 200px;
--tp-bottom-space: 10px;
  display: inline;
  position: relative;
  line-height:10px;

}
.app-tp-wrapper:hover .app-tp,
.app-tp-wrapper:focus .app-tp{
  display: block;
}
.app-tp-wrapper:focus{
  outline: none;
}


.app-tp{
  display: none;
  position: absolute;
  width: var(--tp-width);
  right : calc(270% - var(--tp-width)/2 );
  padding-bottom: var(--tp-bottom-space);
  font-size: 12px;
  line-height: 22px;
  bottom: calc(100% - 1px);
  transform-origin: bottom center;
  animation: visibleTooltipAnim 800ms ease;
  -webkit-animation: visibleTooltipAnim 800ms ease;
}
@keyframes visibleTooltipAnim {
  0%{
      opacity: 0;
      transform: scale(0.1) rotate(30deg) translateY(50px) rotateX(90deg);
  }

  50%{
      transform: rotate(-10deg) rotateX(-2deg);
      opacity: 1;
  }
  70%{
      transform: rotate(3deg);
  }

  100%{
      transform: scale(1);
  }

}
@-webkit- keyframes visibleTooltipAnim {
  0%{
      opacity: 0;
      transform: scale(0.1) rotate(30deg) translateY(50px) rotateX(90deg);
  }

  50%{
      transform: rotate(-10deg) rotateX(-2deg);
      opacity: 1;
  }
  70%{
      transform: rotate(3deg);
  }

  100%{
      transform: scale(1);
  }
}
.app-tp:before{
  content: "";
  display: inline-block;
  border-style: solid;
  border-width: var(--tp-bottom-space) var(--tp-bottom-space) var(--tp-bottom-space) var(--tp-bottom-space);
  border-color: #263674 transparent transparent transparent;
  position: absolute;
  top: calc(100% - var(--tp-bottom-space));
  left: 83%;
  transform: translateX(-50%);
}
.app-tp-inner-wrapper{
     background: #f5f8fd;
    color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 2.8px 2.8px 2.2px rgba(0, 0, 0, 0.02), 6.7px 6.7px 5.3px rgba(0, 0, 0, 0.028), 12.5px 12.5px 10px rgba(0, 0, 0, 0.035), 22.3px 22.3px 17.9px rgba(0, 0, 0, 0.042), 41.8px 41.8px 33.4px rgba(0, 0, 0, 0.05), 100px 100px 80px rgba(0, 0, 0, 0.07);
    border: 1px solid #ebebeb;
}
.app-tp-header{
    display: flex;
    align-items: center;
    padding: 5px 10px;
    background-color: #ffffff;
    border-bottom: 0;
    color: #fcb51f;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}

.app-tp-text{
     color: black;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    padding: 10px 5px;
        text-transform: capitalize;
    font-size: 10px;
    line-height:15px;
}
/* ------END : tooltip ------------ */
  </style>

</head>
<body>
    @include('template.web_menu')

    <div class="dashboard-main">
       @include('template.sidebar')


        <div class="container-fluid p-0">
          <div class="bg-light-blue p-3 w-100">
             <div class="bg-white shadow-none border-0 px-4 py-3 mb-2">
                <h2 class="fw-bold mb-0">Market</h2>
             </div>
             <div>
                <div class="bg-white shadow-none border-0 px-4 py-5 mb-2" id="market-plans-div">
                   <div class="row py-3 flex-wrap">
                      <div class="col-lg-3 col-md-4 col-sm-6">
                         <div class="plans__1">
                            <div class="plan-header">
                                <span class="icon">
                                  <img src="{{ asset('storage/app/bmklogo/12.png') }}" >
                                </span>
                                <h2>RECURRING (ICO)&nbsp;
                                <div class="app-tp-wrapper" tabindex="0">
                                    <span aria-describedby="tp-container" class="tp-label-text"><i class="bi bi-exclamation-circle-fill"></i></span>
                                        <div class="app-tp" id="tp-container" role="tooltip">
                                          <div class="app-tp-inner-wrapper">
                                            <div class="app-tp-header">
                                              <span class="app-tp-prono">RECURRING (ICO)</span>
                                            </div>
                                            <div class="app-tp-text">
                                              This is a recurring features for gift card users, you will be able to trade recurring purchase coins at approx 8.33% every month.
                                            </div>
                                          </div>
                                        </div>
                                </div>
                               <!--<i class="bi bi-exclamation-circle-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Tooltip on top"></i>-->
                               </h2>
                            </div>
                            <div class="plan-price">
                               <h3><span>BMK </span></h3>
                               <span>
                                @if($recurring_coin)
                                    {{$recurring_coin}}
                               @else
                                    0.00
                                @endif
                               </span>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                         <div class="plans__1">
                            <div class="plan-header">
                                <span class="icon">
                                    <img src="{{ asset('storage/app/bmklogo/12.png') }}" >
                                </span>
                               <h2>Regular (ICO)&nbsp;
                                 <div class="app-tp-wrapper" tabindex="0">
                                    <span aria-describedby="tp-container" class="tp-label-text"><i class="bi bi-exclamation-circle-fill"></i></span>
                                    <div class="app-tp" id="tp-container" role="tooltip">
                                      <div class="app-tp-inner-wrapper">
                                        <div class="app-tp-header">
                                          <span class="app-tp-prono">Regular (ICO)</span>
                                        </div>
                                        <div class="app-tp-text">
                                          You will be able to trade this coin in future and its separate guidelines will be update soon.
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                </h2>
                            </div>
                            <div class="plan-price">
                               <h3><span>BMK </span></h3>
                               <span> @if($regular_coin->total)
                                    {{$regular_coin->total}}
                               @else
                                    0.00
                                @endif</span>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                         <div class="plans__1">
                            <div class="plan-header">
                                <span class="icon">
                                    <img src="{{ asset('storage/app/bmklogo/12.png') }}" >
                                </span>
                               <h2>CHARITY (ICO)&nbsp;
                                 <div class="app-tp-wrapper" tabindex="0">
                                    <span aria-describedby="tp-container" class="tp-label-text"><i class="bi bi-exclamation-circle-fill"></i></span>
                                    <div class="app-tp" id="tp-container" role="tooltip">
                                      <div class="app-tp-inner-wrapper">
                                        <div class="app-tp-header">
                                          <span class="app-tp-prono">CHARITY (ICO)</span>
                                        </div>
                                        <div class="app-tp-text">
                                        You will be able to trade this coin in future and its separate guidelines will be update soon.
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                </h2>
                            </div>
                            <div class="plan-price">
                               <h3><span>BMK </span></h3>
                               <span> @if($charity_coin->total)
                                    {{$charity_coin->total}}
                               @else
                                    0.00
                                @endif</span>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6">
                         <div class="plans__1">
                            <div class="plan-header">
                                <span class="icon">
                                    <img src="{{ asset('storage/app/bmklogo/12.png') }}" >
                                </span>
                                <h2>COMMUNITY (ICO)&nbsp;
                                    <div class="app-tp-wrapper" tabindex="0">
                                        <span aria-describedby="tp-container" class="tp-label-text"><i class="bi bi-exclamation-circle-fill"></i></span>
                                        <div class="app-tp" id="tp-container" role="tooltip">
                                            <div class="app-tp-inner-wrapper">
                                                <div class="app-tp-header">
                                                  <span class="app-tp-prono">COMMUNITY (ICO)</span>
                                                </div>
                                                <div class="app-tp-text">
                                                  You will be able to trade this coin in future and its separate guidelines will be update soon.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <div class="plan-price">
                               <h3><span>BMK </span></h3>
                               <span>
                                    0.00
                             </span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>

             <div class="bg-white shadow-none border-0 px-4 py-2 mb-2">
                    <div class="row py-3 flex-wrap">
                        <div class="col-lg-12 col-xl-12">
                            <div class="dashboard-card">
                                <div class="dashboard-card-body">
                                    <div class="row">
                                        <div class="col-md-12 table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Order No.</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Coin Name</th>
                                                        <th scope="col">No Of Coin</th>
                                                        <th scope="col">Coin Price INR</th>
                                                        <th scope="col">Coin Price USD</th>
                                                        <th scope="col">Total Price</th>
                                                        <th scope="col">Order Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="filtered_records">
                                                  <?php //print_r($order_data); ?>
                                                  @foreach($order_data as $key => $data)
                                                    <tr>
                                                        <td>{{ $order_data->firstItem() + $key }}</td>
                                                        <td><a href="javascript:void(0)" id="staking_view" data-target-modal="show_recurring_coin"  onClick="show_recurring_record({{$data->id}})" class="btn-yellow px-3 py-1">View</a></td>
                                                        <td>{{ $data->order_id }}</td>
                                                        <td>
                                                            @if($data->order_status==0)<span class="badge bg-warning">Pending</span> @endif
                                                            @if($data->order_status==1)<span class="badge bg-success">Active</span> @endif
                                                        </td>

                                                        <td>
                                                            @if($data->crypto_type=="BMK")
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ url('storage/app/bmklogo/12.png') }}" class="max-width-20px me-2">
                                                                    <span class="fs-12 fw-bolder">{{ $data->crypto_type }}</span>
                                                                </div>
                                                            @endif

                                                            @if($data->crypto_type=="ETH")
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ url('assets/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png') }}" class="max-width-20px me-2">
                                                                    <span class="fs-12 fw-bolder">{{ $data->crypto_type }}</span>
                                                                </div>
                                                            @endif

                                                            @if($data->crypto_type=="BTC")
                                                                <div class="d-flex align-items-center">
                                                                    <img src="{{ url('assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}" class="max-width-20px me-2">
                                                                    <span class="fs-12 fw-bolder">{{ $data->crypto_type }}</span>
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td>{{ $data->total_crypto_value }}</td>
                                                        <td>₹{{ $data->current_crypto_in_inr}}</td>
                                                        <td>${{ $data->crypto_current_value}}</td>
                                                        <td>₹{{ $data->domestic_currency_value }}</td>
                                                        <td>{{ date("d-m-Y", strtotime($data->created_at)) }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="account_activity_pagination mt-3">
                                            {!! $order_data->links('pagination::bootstrap-5') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

<!--              <div class="p-4">-->
<!--           <div class="app-quote">-->
<!--  <div class="app-quote-text">-->

<!--  <div class="app-tp-wrapper" tabindex="0">-->
<!--    <span aria-describedby="tp-container" class="tp-label-text">obsession</span>-->
<!--    <div class="app-tp" id="tp-container" role="tooltip">-->
<!--      <div class="app-tp-inner-wrapper">-->
<!--        <div class="app-tp-header">-->
<!--          <span class="app-tp-prono">[əbˈseʃ(ə)n]</span>-->
<!--          <button class="app-tp-prono-btn"></button>-->
<!--        </div>-->
<!--        <div class="app-tp-text">-->
<!--          <b>Obsession</b>, a persistent disturbing preoccupation with an often unreasonable idea or feeling.-->
<!--        </div>-->
<!--      </div>-->
<!--  </div>-->
<!--    </div>-->


<!--</div>-->

<!--       </div>-->
<!--       </div>-->

          </div>
       </div>



        <div id="show_recurring_coin">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-800px">
                   <div>
                   <div class="wm-custom-modal-header d-flex align-items-center justify-content-between">
                        <span>Gift Card or Recurring Coin Details</span>
                        <a href="" class="d-flex align-items-center me-5 fs-14 text-black">
                           <span class="bi bi-question-octagon guide-icon me-2"></span>
                           <span class="guide-text">Guide</span>
                        </a>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                          <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                   </div>
                    <div class="wm-custom-modal-body px-3 max-height-500px scrollbar-style  mb-5">
                    <div class="container-fluid p-0 m-0">
                        <div class="">
                            <div class="row px-3 py-2 bg-light-blue-2 shadow-sm mt-3">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Order No.</h6>
                                        </div>
                                        <div id="order_no" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Coin Name</h6>
                                        </div>
                                        <div id="staking_coin_name" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Coin Type</h6>
                                        </div>
                                        <div id="staking_coin_type" class="stack_font_size"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="row px-3 py-2 bg-light-blue-2 shadow-sm mt-3">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Status</h6>
                                        </div>
                                        <div id="status" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Payment Mode</h6>
                                        </div>
                                        <div id="payment_mode" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">No. Of BMK</h6>
                                        </div>
                                        <div id="no_of_coin" class="stack_font_size"></div>
                                    </div>
                                </div>


                            </div>
                            <div class="row px-3 py-2 bg-light-blue-2 shadow-sm mt-3">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Order Date</h6>
                                        </div>
                                        <div id="order_date" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">BMK Price</h6>
                                        </div>
                                        <div id="coin_price_inr" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">BMK Price</h6>
                                        </div>
                                        <div id="coin_price_usd" class="stack_font_size"></div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-sm-center align-items-start mb-3">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Current Value</h6>
                                        </div>
                                        <div id="total_coin_price_inr" class="stack_font_size"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-3 py-2 bg-light-blue-2 shadow-sm mt-3">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Current Value</h6>
                                        </div>
                                        <div id="total_coin_price_usd" class="stack_font_size"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Buyer Name & Country</h6>
                                        </div>
                                        <div class="stack_font_size"><span id="buyer_name"></span>(<span id="buyer_country_name"></span>)</div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex align-items-sm-center align-items-start">
                                    <div class="title-and-progress">
                                        <div class="d-flex-gap">
                                            <h6 class="title mb-0">Seller Name &  Country</h6>
                                        </div>
                                        <div class="stack_font_size"><span id="seller_name"></span>(<span id="seller_country_name"></span>)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex-gap mt-3">
                                <h6 class="title mb-0">Recurring Coin Credit Date</h6>
                                <hr>
                            </div>
                            <div class="bg-white shadow-sm w-100 max-height-200px scrollbar-style">

                                <table class="table" id="stacking_benefites">
                                    <thead class="bg-white">
                                        <tr>
                                            <th>S.No.</th>
                                            <th>status</th>
                                            <th>No Of Coin</th>
                                            <th>Coin Name</th>
                                            <th>Credit Date</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





    </div>

    @include('template.web_footer')
    <link rel="stylesheet" href="{{ url('assets/css/alert.css') }}">
    <script src="{{ url('assets/js/alert.js') }}"></script>
    <script>
        function show_recurring_record(order_id) {
            $.ajax({
        		type: "GET",
        		url: "{{ url( app()->getLocale()) }}/user/get_recurring_coin_detail",
        		data: {'id':order_id},
        		dataType: "json",
        		encode: true,
            	success:function(data){
            	    //alert(data.order_coin);
            	    if(data.order_coin.order_status==0){
            	        var status='<span class="badge bg-warning fs-10">Pending</span>';
            	    }

            	    if(data.order_coin.order_status==1){
            	        var status='<span class="badge bg-success fs-10">Completed</span>';
            	    }

            	    if(data.order_coin.crypto_type=="BMK"){
                        var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("storage/app/bmklogo/12.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ data.order_coin.crypto_type +'</span></div>';
            	    }

                    if(data.order_coin.crypto_type=="ETH"){
                        var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ data.order_coin.crypto_type +'</span></div>';
            	    }

                    if(data.order_coin.crypto_type=="BTC"){
                        var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ data.order_coin.crypto_type +'</span></div>';
                    }

            	    var order_date = new Date(data.order_coin.created_at).toLocaleDateString();
                    order_date = order_date.split("/");
                    order_date = order_date[0] + "-" + (order_date[1].length == 1 ? "0" + order_date[1] : order_date[1]) + "-" + (order_date[2].length == 1 ? "0" + order_date[2] : order_date[2]);

                    $("#staking_coin_name").html(coin_logo);
                    $("#staking_coin_type").text("Recurring");
                    $("#order_date").text(order_date);
                    $("#no_of_coin").text(data.order_coin.total_crypto_value);
                    $("#payment_mode").text("Gift Card");
                    $("#coin_price_inr").text("₹"+data.order_coin.current_crypto_in_inr);
                    $("#coin_price_usd").text("$"+data.order_coin.crypto_current_value);
                    $("#total_coin_price_inr").text("₹"+data.order_coin.domestic_currency_value);
                    $("#total_coin_price_usd").text("$"+data.order_coin.crypto_current_value*data.order_coin.total_crypto_value);
                    $("#buyer_country_name").text(data.order_coin.buyer_country);
                    $("#seller_country_name").text(data.order_coin.seller_country);
                    $("#seller_name").text(data.seller_detail.first_name);
                    $("#buyer_name").text(data.buyer_detail.first_name);
                    $("#status").html(status);
                    $("#order_no").html(data.order_coin.order_id);
                    $('#stacking_benefites tbody').empty();
                    var j = 1;
                    $.each(data.recurring_wallet_coin, function( i, val ){
                        if(val.status==0){
                	        var status='<span class="badge bg-warning fs-10 text-black">Lock</span>';
                	    }

                	    if(val.status==1){
                	        var status='<span class="badge bg-success fs-10">Unlock</span>';
            	        }

            	        if(val.status==2){
                	        var status='<span class="badge bg-danger fs-10">Blocked</span>';
            	        }

            	        if(val.coin_name=="BMK"){
                            var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("storage/app/bmklogo/12.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ val.coin_name +'</span></div>';
                	    }

                        if(val.coin_name=="ETH"){
                            var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/3a8c9fe6-2a76-4ace-aa07-415d994de6f0.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ val.coin_name +'</span></div>';
                	    }

                        if(data.coin_name=="BTC"){
                            var coin_logo='<div class="d-flex align-items-center"><img src="{{ url("assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png") }}" class="max-width-20px me-2"><span class="fs-12 fw-bolder">'+ val.coin_name +'</span></div>';
                        }

                        $('#stacking_benefites')
                            .append($('<tr>')
                            .append($('<td>').append(j++))
                            .append($('<td>').append(status))
                            .append($('<td>').append(val.no_of_coin))
                            // .append($('<td>').append(val.type_of_coin))
                            // .append($('<td>').append(val.transaction_status))
                            // .append($('<td>').append(val.coin_type))
                            .append($('<td>').append(coin_logo))
                            .append($('<td>').append(val.p2p_credit_date))
                        )
                    });
            	},
        	    error: function(xhr, textStatus, errorThrown){
                    var erroJson = JSON.parse(xhr.responseText);
                     triggerAlert(erroJson.error, 'error');
        	         $("#stakingBtn").text("Submit");
        	         $("#stakingBtn").css("pointer-events","");
                }
            });
        }
    </script>


    <script>
        function initTooltip(tooltipContainer       ) {
  const trigger = tooltipContainer.classList.contains('app-tp-wrapper') ? tooltipContainer : tooltipContainer.querySelector('.app-tp-wrapper');
  const tooltip = tooltipContainer.querySelector('.app-tp');

  // hide the tooltip on escape key press
  trigger.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      trigger.blur();
    }
  });


}
// initiate tooltips
const tooltips = document.querySelectorAll('.app-tp-wrapper');
tooltips.forEach((tooltip) => {
  initTooltip(tooltip);
});
    </script>
</body>
</html>

