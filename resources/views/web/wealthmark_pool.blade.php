<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | Wealthmark Pool</title>
    @include('template.web_css')
   
 
</head>

<body class="bg-white">
    @include('template.web_menu')
    
<section class="wealthmark-top-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-2 order-lg-1">
                   
                        <h3 class="title fs-1 text-black">Make Hashrate<br>Your Best Mate!</h3>
                        <div class="fs-14 text-white">Join Wealthmark Pool and unlock VIP rights with just mining.
                        </div>
                        <a class="btn-blue d-inline-block shadow mt-4">Learn More </a>
                    
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-1 order-lg-2 text-center">
                    <img src="{{ asset('img/wealthmark-pool/cover-graphic.svg') }}" class="max-width-300px" alt="Wealthmark Pool">
                </div>
            </div>
        </div>
    </section>
    <section class="pool-proof-work" id="pool-proof-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Proof of <span class="yellow-text">Work</span></h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Coin</th>
                                    <th>Algo</th>
                                    <th>Active Workers</th>
                                    <th>Hashrate</th>
                                    <th>Network</th>
                                    <th>Tutorial</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/wealthmark-pool/proof-work-icon-1.svg') }}" class="img-fluid" alt="Wealthmark Pool">
                                    </td>
                                    <td>SHA256</td>
                                    <td>695139</td>
                                    <td>38.53 Eh/s</td>
                                    <td>256.37 Eh/s 1.39 Eh/s</td>
                                    <td><span class="text-warning">View Tutorial </span></td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="yellow-text" data-target-modal="Coin_details_modal">
                                            <i class="bi bi-caret-down-fill"></i>
                                        </a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/wealthmark-pool/proof-work-icon-1.svg') }}" class="img-fluid" alt="Wealthmark Pool">
                                    </td>
                                    <td>SHA256</td>
                                    <td>695139</td>
                                    <td>38.53 Eh/s</td>
                                    <td>256.37 Eh/s 1.39 Eh/s</td>
                                    <td><span class="text-warning">View Tutorial </span></td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="yellow-text" data-target-modal="Coin_details_modal">
                                            <i class="bi bi-caret-down-fill"></i>
                                        </a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/wealthmark-pool/proof-work-icon-1.svg') }}" class="img-fluid" alt="Wealthmark Pool">
                                    </td>
                                    <td>SHA256</td>
                                    <td>695139</td>
                                    <td>38.53 Eh/s</td>
                                    <td>256.37 Eh/s 1.39 Eh/s</td>
                                    <td><span class="text-warning">View Tutorial </span></td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="yellow-text" data-target-modal="Coin_details_modal">
                                            <i class="bi bi-caret-down-fill"></i>
                                        </a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            
        </div>
    </section>


<section class="welathmark-pool" id="welathmark-pool">
        <div class="container">
            <div class="row">
                <div class="sec-title text-left mb-5">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Wealth Mark <span class="yellow-text">Pool</span></h2>
                </div>
            </div>
            <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="wealthmark-pool-box">
          <h3 class="title">Secure and Transparent</h3>
          <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
          <div class="service-icon">
           <img  src="https://wealthmark.io/img/wealthmark-pool/secure&transparent.svg" alt="Wealthmark Pool" class="w-75">
          </div>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="wealthmark-pool-box yellow">
          <h3 class="title">Steady Earnings</h3>
          <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
          <div class="service-icon">
            <img  src="https://wealthmark.io/img/wealthmark-pool/steady-earnings.svg" alt="Wealthmark Pool" class="w-75">
          </div>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="wealthmark-pool-box yellow">
          <h3 class="title">Comprehensive Service</h3>
          <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
          <div class="service-icon">
           <img  src="https://wealthmark.io/img/wealthmark-pool/comprehensive-service.svg" alt="Wealthmark Pool" class="w-75">
          </div>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="wealthmark-pool-box yellow">
          <h3 class="title">Wealth Mark Services</h3>
          <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
          <div class="service-icon">
            <img  src="https://wealthmark.io/img/wealthmark-pool/wealthmark-services.svg" alt="Wealthmark Pool" class="w-75">
          </div>
        </div>
      </div>
    </div>
        </div>
    </section>
<section class="wm-pay-accordian-section bg-light-blue">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">
                           
                            <div class="sec-title text-center mb-2">
                           <h2 class="heading-h2">FAQs</h2>
                            </div>
                           
                        </div>
                         <div class="wm-outlet-div text-right justify-content-end">
                           
                            <a href="#" class="learn-more btn-6">
                           <span>Learn More </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>
                           
                        </div>
                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
    Introduction for Wealthmark Smart Pool?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
 Where do my daily earnings go? Where can I check my earnings?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>
      
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    How are mining earnings calculated?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>
      </div>
    </div>
  </div>
  
  
  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
  How do I create watcher links？
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</div>     
      </div>
    </div>
  </div>
  
  
</div>
</div>
</section>


    <div id="Coin_details_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-950px">
                <div class="">
                   <div class="wm-custom-modal-header">
                            <span>Security verification </span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                   
                        </div>
                    <div class="wm-custom-modal-body px-3 max-height-500px scrollbar-style mb-3">
                        <div class="container-fluid p-0 m-0">
                            <div class="row">
                                <div class="col-lg-12">
                                     <div style="min-height:200px;">
                                <canvas id="myChart-div" style="width:100%;"></canvas>
                            </div>
                                </div>
                               <div class="col-lg-12">
                                   <div class="d-flex align-items-center bg-light-blue w-100 p-2 justify-content-between fs-14 mb-2">
                                       <div>Mining URL:</div>
                                       <div class="bg-light-white p-2 rounded fs-12">
                                           <span>Unit profit detail</span>
                                       </div>
                                   </div>
                                   <div class="d-flex align-items-center w-100 p-2 justify-content-between fs-14 mb-2">
                                       <a href="javascript:void(0)" class="">
                                          <span> stratum+tcp://sha256.poolwealthmark.io:443</span>
                                       <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2Ljc2IDJWMTQuMjZIMTQuNzZWNEg3VjJIMTYuNzZaIiBmaWxsPSIjRjBCOTBCIi8+CjxwYXRoIGQ9Ik0zIDUuOTc5OThWMTguMjRIMTIuNzZWNS45OTk5OEwzIDUuOTc5OThaTTEwLjc1IDE2LjI2SDVWNy45OTk5OEgxMC43NkwxMC43NSAxNi4yNloiIGZpbGw9IiNGMEI5MEIiLz4KPC9zdmc+Cg==" alt="" class="ms-2">
                                       </a>
                                       
                                   <div class="bg-light-theme p-2 rounded">
                                       
                                       <span>Supports BTC/BCH and Smart Pool</span>
                                   </div>
                                   </div>
                                    <div class="d-flex align-items-center w-100 p-2 justify-content-between fs-14 mb-2">
                                       <a href="javascript:void(0)" class="">
                                          <span> stratum+tcp://sha256.poolwealthmark.io:443</span>
                                       <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2Ljc2IDJWMTQuMjZIMTQuNzZWNEg3VjJIMTYuNzZaIiBmaWxsPSIjRjBCOTBCIi8+CjxwYXRoIGQ9Ik0zIDUuOTc5OThWMTguMjRIMTIuNzZWNS45OTk5OEwzIDUuOTc5OThaTTEwLjc1IDE2LjI2SDVWNy45OTk5OEgxMC43NkwxMC43NSAxNi4yNloiIGZpbGw9IiNGMEI5MEIiLz4KPC9zdmc+Cg==" alt="" class="ms-2">
                                       </a>
                                       
                                   <div class="bg-light-theme p-2 rounded">
                                       
                                       <span>Only supports BTC</span>
                                   </div>
                                   </div>
                                   <div class="mb-2">
                                      <span class="fw-normal text-muted me-1">Mining Fee</span>
                                      <span>
                                          <b>2.50%</b>
                                      </span>
                                  </div>
                                  <div class="mb-2">
                                      <span class="fw-normal text-muted me-1">The latest Smart Pool enhancement ratio</span>
                                      <span>
                                          <b>0.00%</b>
                                      </span>
                                  </div>
                                  <div class="mb-2">
                                      <span class="fw-normal text-muted me-1">Settlement Method</span>
                                      <span>
                                          <b>FPPS</b>
                                      </span>
                                  </div>
                                  <div class="mb-2">
                                      <span class="fw-normal text-muted me-1">Yesterday's BTC PPS Yield</span>
                                      <span>
                                          <b>102.49%</b>
                                      </span>
                                  </div>
                                  <div class="mb-2">
                                      <span class="fw-normal text-muted me-1">Settlement period</span>
                                      <span>
                                          <b>00:00 today to 00:00 UTC tomorrow</b>
                                      </span>
                                  </div>
                                  <div class="mb-2">
                                      <span class="fw-normal text-muted me-1">Payout time</span>
                                      <span>
                                          <b>02:00 to 10:00 UTC daily</b>
                                      </span>
                                  </div>
                                  
                               </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
   
    @include('template.country_language')
    @include('template.web_footer')

 <script src="{{ asset('css/accordian_bootstrap.min.js') }}"></script> 
  <!--===================================this link for id mychart-div=====================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
<!--===================================this link for id mychart-div=====================================--><!--===================================this code for id mychart-div=====================================-->

<script>
    var ctx = document.getElementById('myChart-div').getContext('2d');

var chart = new Chart(ctx, {
 
	// The type of chart we want to create
	type: 'line', // also try bar or other graph types

	// The data for our dataset
	data: {
		labels: ["demo1", "demo2","demo3","demo4"],
		// Information about the dataset
    datasets: [{
			label: "Wealthmark",
			backgroundColor: '#fdc116',
			borderColor: '#f8a532',
			data: [100,100,100,100],
		}]
	},

	// Configuration options
	options: {
    layout: {
      padding: 10,
    },
		legend: {
			position: 'bottom',
      display:false
		},
		title: {
			display: false,
			text: 'Precipitation in Toronto'
		},
		scales: {
			yAxes: [{
        gridLines: {
                display:false
            },
				scaleLabel: {
					display: false,
					labelString: 'Precipitation in mm'
				}
			}],
			xAxes: [{
        gridLines: {
                display:false
            },
				scaleLabel: {
					display: false,
					labelString: 'Month of the Year'
				}
			}]
		}
	}
});

</script>

<!--===================================this code for id mychart-div=====================================-->
</body>

</html>