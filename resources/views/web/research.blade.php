<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
    <meta name="keywords" content="Wealthmark, Crypto, coins">
    <meta name="author" content="Wealthmark">
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">
    
    
<style> 
.reseach-price-info {
    width: 5%;
}
    #project-tabs-section .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link {
        height: 100px;
        max-height: 100px;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
    }
    #project-tabs-section .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        height: 100px;
        max-height: 100px;
    }
    .css-p6vrhp {
        display:none !important;
        opacity:0 !important;
        visibility: hidden !important;
    }
    
    .chakra-link.css-1vvtfcp{
        display:none !important;
        opacity:0 !important;
        visibility: hidden !important;
    }
    
#crypto-widget-CoinBlocks a.chakra-link.css-1vvtfcp {
    display: none!important;
}

    </style>
</head>

<body>
    @include('template.web_menu')
    <section class="research-widgets py-5" id="research-widgets">
        <div class="container py-3">
       
        <div id="crypto-widget-CoinBlocks" data-transparent="false" data-design="classic"  data-coin-ids="1,166,136,20,29,2"></div>
        </div>
    </section>
    <!-- banner section started -->
    <section class="pt-8 pb-8 bg-gradient-primary" id="research-banner-section">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-md-left text-white order-2 order-lg-1">
                    <h1 class="display-3 font-weight-bold text-left text-uppercase text-white">Wealth Mark</h1>
                    <p class="text-white-90 lead mb-4 banner-para">Wealth Mark Research provides institutional-grade
                        analysis, in-depth insights, and unbiased information to all participants in the digital asset
                        industry.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center order-1 order-lg-2">
                    <img loading="lazy" class="d-block img-fluid banner-main-img animated"
                        src="{{ asset('img/research-banner.svg') }}" alt="Research Image">
                </div>
            </div>
        </div>
    </section>
    <!-- banner section End -->

    <!-- project tabs -->
    <section class="pt-8 pb-8" id="project-tabs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">
                    <ul class="row nav nav-tabs" id="myTab" role="tablist">
                        <li class="col-md-6 nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">
                                <img loading="lazy" class="mx-auto d-block project-icon img-fluid"
                                    src="{{ asset('img/project-report-icon.svg') }}" alt="Research Image">
                                Project Reports
                            </button>
                        </li>
                        <li class="col-md-6 nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <img loading="lazy" class="mx-auto d-block project-icon img-fluid"
                                    src="{{ asset('img/analysis-report.svg') }}" alt="Research Image">
                                Analysis Report
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <img loading="lazy" src="{{ asset('img/latest-project.png') }}"
                                        alt="Research Image" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="">Project Reports</h3>
                                    <div class="text">"Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry". </div>
                                    <a class="text-warning">Read More </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="row">
                                <div class="col-md-4">
                                    <img loading="lazy" src="{{ asset('img/latest-insight-img.png') }}"
                                        alt="Research Image" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="">Analysis Reports</h3>
                                    <div class="text">"Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry". </div>
                                    <span class="text-warning">Read our latest report </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project tabs -->


    <section class="insight-section" id="insight">
        <div class="container">
            <div class="row heading-row-insight">
                <div class="col-md-8 col-xs-6 col-sm-6 sec-title text-left insight-heading-block">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Insights & Analysis</h2>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6 sec-title text-right view-all-block insight-heading-block ">
                    <h2 class="float-right view-all-btn  research-view-all">View all cards →</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-insight-img.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Insights & Analysis</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-insight-img.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Insights & Analysis</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-insight-img.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Insights & Analysis</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-insight-img.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Insights & Analysis</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- latest project report -->

    <section class="project-section" id="project-report-new">
        <div class="container">
            <div class="row project-report-new_heading-row">
                <div class="col-md-8 col-xs-6 col-sm-6 sec-title text-left new-project-heading-block">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Latest Project Report</h2>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6 sec-title text-right view-all-block  new-project-heading-block">
                    <h2 class="float-right view-all-btn text-right">View all cards →</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-project.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Project Reports-1</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-project.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Project Reports-1</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-project.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Project Reports-1</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <img loading="lazy" src="{{ asset('img/latest-project.png') }}"
                            alt="Research Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Latest Project Reports-1</h5>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <a href="" class="text-warning">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- price infor section -->
    <section class="research-clients-section" id="our-collaborations">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Wealth Mark Research & collaborations</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Last Price</th>
                                    <th>24h Change</th>
                                    <th>Read more</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center"> 
                                            <img src="{{ asset('img/research-price-icon.png') }}" class="img-fluid reseach-price-info" alt="walth mark blog">
                                            <strong>&nbsp;BNB</strong>
                                            <small class="text-primary">&nbsp;BNB </small>
                                        </div>
                                    </td>
                                    <td><p class="badge bg-warning text-white">$296 </p> </td>
                                    <td><p class="text-success fw-bold">+1.83% </p></td>
                                    <td><a class="btn btn-yellow shadow">Read Report </a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center"> 
                                            <img src="{{ asset('img/research-price-icon-2.png') }}" class="img-fluid reseach-price-info" alt="walth mark blog">
                                            <strong>&nbsp;BTC</strong>
                                            <small class="text-primary">&nbsp;Bitcoin </small>
                                        </div>
                                    </td>
                                    <td><p>$296 </p> </td>
                                    <td><p class="text-success fw-bold">+1.83% </p></td>
                                    <td><a class="btn btn-yellow shadow">Read Report </a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center"> 
                                            <img src="{{ asset('img/research-price-icon-3.png') }}" class="img-fluid reseach-price-info" alt="walth mark blog">
                                            <strong>&nbsp;ETH</strong>
                                            <small class="text-primary">&nbsp;Ethereum </small>
                                        </div>
                                    </td>
                                    <td><p>$296 </p> </td>
                                    <td><p class="text-success fw-bold">+1.83% </p></td>
                                    <td><a class="btn btn-yellow shadow">Read Report </a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center"> 
                                            <img src="{{ asset('img/research-price-icon-4.png') }}" class="img-fluid reseach-price-info" alt="walth mark blog">
                                            <strong>&nbsp;BCH</strong>
                                            <small class="text-primary">&nbsp;Bitcoin Cash </small>
                                        </div>
                                    </td>
                                    <td><p>$296 </p> </td>
                                    <td><p class="text-success fw-bold">+1.83% </p></td>
                                    <td><a class="btn btn-yellow shadow">Read Report </a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center"> 
                                            <img src="{{ asset('img/research-price-icon-5.png') }}" class="img-fluid reseach-price-info" alt="walth mark blog">
                                            <strong>&nbsp;LTC</strong>
                                            <small class="text-primary">&nbsp;Litecoin </small>
                                        </div>
                                    </td>
                                    <td><p>$296 </p> </td>
                                    <td><p class="text-success fw-bold">+1.83% </p></td>
                                    <td><a class="btn btn-yellow shadow">Read Report </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center"> 
                                            <img src="{{ asset('img/research-price-icon-6.png') }}" class="img-fluid reseach-price-info" alt="walth mark blog">
                                            <strong>&nbsp;CUSD</strong>
                                            <small class="text-primary">&nbsp;XDP </small>
                                        </div>
                                    </td>
                                    <td><p>$296 </p> </td>
                                    <td><p class="text-success fw-bold">+1.83% </p></td>
                                    <td><a class="btn btn-yellow shadow">Read Report </a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- our collaboration with clients -->

    <section class="research-clients-section" id="our-collaborations">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 sec-title text-left">
                    <span class="title">Know About</span>
                    <h2 class="heading-h2">Wealth Mark Research & collaborations</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="clients-logo">
                        <img loading="lazy" src="{{ asset('img/logo-1.png') }}" alt="Research Image"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="clients-logo">
                        <img loading="lazy" src="{{ asset('img/logo-2.png') }}" alt="Research Image"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="clients-logo">
                        <img loading="lazy" src="{{ asset('img/logo-3.png') }}" alt="Research Image"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="clients-logo">
                        <img loading="lazy" src="{{ asset('img/logo-4.png') }}" alt="Research Image"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="clients-logo">
                        <img loading="lazy" src="{{ asset('img/logo-5.png') }}" alt="Research Image"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="clients-logo">
                        <img loading="lazy" src="{{ asset('img/logo-8.png') }}" alt="Research Image"
                            class="img-fluid">
                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('template.country_language')
    @include('template.web_footer')
   
  
   
    <script src="https://crypto.com/price/static/widget/index.js"></script>
</body>

</html>