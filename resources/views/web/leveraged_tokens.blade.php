<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | Create Entity Account</title>
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    @include('template.web_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>
    .leverage-second-menu{
    background-color: #263674!important;
    box-shadow: 0px 0px 2px 0px #fcf4db!important;
}
    @media(max-width:767px){
        ul#pills-tab.leverage-first-navbar {
            margin-left: 0px!important;
        }
        #leverage-first-section .nav-pills .nav-link {
            white-space: nowrap;
        }
    }
    #tokes-table-section i.bi.bi-chevron-down {
    position: absolute;
    right: 20px;
    top: 32px;
    z-index: 999;
}
    @media(max-width:991px){
        .action-btn-box {
            display: flex!important;
            flex-direction: column!important;
            justify-content: flex-start;
        }
    }
    .action-btn-box {
        display: flex;
       justify-content: space-evenly;
    }
     .action-head-block {
        display: flex;
        justify-content: space-around;
    }
     .action-head-block span:nth-child(1) {
        margin-left: 20px;
    }
    #tokes-table-section .table-responsive {
        border: 1px solid #f7f7f7;
    }
    ul#pills-tab.leverage-first-navbar {
    margin-left: -30px;
}
    #leverage-first-section .leverage-banner-content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 322px;
}
    #leverage-sub-navbar .nav-link {
    padding: 0.4rem 1rem!important;
    }
    @media(max-width:768px) {
        #leverage-sub-navbar{
            padding: 0px!important;
        }
        #tokes-table-section img.mx-auto.d-block.img-fluid {
            max-width: 20px;
            min-width: 20px;
        }
        #tokes-table-section img.mx-auto.d-block.img-fluid {
            min-width: 20px;
        }
        #pills-tab {
            display: flex;
            flex-wrap: revert;
            overflow-x: scroll;
            overflow-y: hidden;
        }

        .leverage-first-navbar{
        margin-left: -30px!important;
        padding: 0;
        }
    #tokes-table-section .bi-chevron-down {
        position: absolute;
        right: 21px;
        top: 30px;
        z-index: 99;
    }

    #tokes-table-section img.mx-auto.d-block.img-fluid {
        /* width: 32%; */
        min-width: 30px;
    }
    #leverage-first-section ul#pills-tab {
    margin-left: -30px;
    padding: 0;
}

    </style>
</head>

<body class="bg-white">
    @include('template.web_menu')
    <section class="leverage-first-box breadcrumbs-box shadow-sm p-0" id="leverage-first-section">
        <div class="container-fluid">
            <div class="leverage-banner-content">
                <div class="row">
                    <div clas="col-md-12">
                        <div class="banner-space-manage">
                            &nbsp;
                        </div>
                    </div>
                </div>
                    <div class="row">
                <div class="overview-inner-box text-center">
                    <h3 class="digital-asset-heading">Wealthmark Leveraged Tokens</h3>
                    <h5 class="text-center fw-bold"> Enjoy increased leverage without risk of liquidation</h5>
                </div>
            </div>
            <div class="row leverage-second-menu">
                     <div class="offset-md-2 col-md-10">
                <ul class="nav nav-pills leverage-first-navbar" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">Tokens</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="false">Subscription
                            History</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Redemption History</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Service Agreement</button>
                    </li>
                </ul>
            </div>
            </div>
            </div>
        </div>
    </section>

    <section class="leverage-tokens-tabs p-0" id="leverage-navbar">
        <div class="container">

        </div>
    </section>

    <section class="leverage-tokens-sub-tab p-0" id="leverage-sub-navbar">
        <div class="container">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-2 mt-2 " id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-contact2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="my-tokens-tab" data-bs-toggle="pill" data-bs-target="#my-tokens"
                            type="button" role="tab" aria-controls="my-tokens" aria-selected="true">My Tokens</button>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="tokes-table-box m-0 p-3" id="tokes-table-section">
        <div class="container">
            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show" id="my-tokens" role="tabpanel" aria-labelledby="pills-contact-tab">
                        &nbsp;
                    </div>

                    <div class="tab-pane fade active show" id="pills-contact2" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                           <div class="tokens-table table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" width="200">Name</th>
                                        <th scope="col">NAV</th>
                                        <th scope="col">Real Leverage</th>
                                        <th scope="col">Last Price</th>
                                        <th scope="col">24h Change</th>
                                        <th scope="col" colspan="+3">
                                            <div class="action-head-block">
                                                <span>Action </span>
                                                <span> </span>
                                                <span> </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-1.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-danger">-13.96%</td>
                                     <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-2.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-success">83.96%</td>
                                          <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-4.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-danger">-13.96%</td>
                                   <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-5.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-success">13.96%</td>
                                         <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-7.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-danger">-13.96%</td>
                                     <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-8.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-danger">-13.96%</td>
                                       <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-9.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-danger">-13.96%</td>
                                    <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-10.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-success"> 3.96%</td>
                                    <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-2.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-success">93.96%</td>
                                       <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"> <img loading="lazy" class="mx-auto d-block img-fluid pt-1"
                                                src="{{ asset('assets/img/token-table-img-4.png') }}"
                                                alt="Leverage Tokens Image"></td>
                                        <td>
                                            <p>ADADOWN <span
                                                    class="badge rounded-pill bg-warning text-dark">-1.760x</span></p>
                                            <span class="lever-tokens-name-txt">Short ADA with Up to 4x Leverage </span>
                                        </td>
                                        <td>$0.005974</td>
                                        <td>-1.765X</td>
                                        <td>$0.005996</td>
                                        <td class="text-danger">-13.96%</td>
                                <td colspan="+3">
                                         <div class="action-btn-box">
                                             <a href="#" class="yellow-text d-flex justify-content-center">Trade</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Subscribe</a>
                                             <a href="#" class="yellow-text d-flex justify-content-center">Redeem</a>
                                         </div>
                                     </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row bg-light-blue shadow-sm p-2">
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-3 position-relative"
                                id="subscription-tokens">
                                <label>Token </label>
                                <i class="bi bi-chevron-down"></i>
                                <select class="form-control">
                                    <option>All </option>
                                    <option>1INCHUP </option>
                                    <option>1INCHDOWN </option>
                                    <option>XLMDOWN </option>
                                    <option>SUSHIDOWN </option>
                                    <option>SUSHIUP </option>
                                    <option>AAVEDOWN </option>
                                    <option>AAVEUP </option>
                                    <option>BCHDOWN </option>
                                    <option>BCHUP </option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-3 position-relative">
                                <label>Start Date & End Date</label>
                                <i class="bi bi-chevron-down"></i>
                                <div class="input-group input-daterange">
                                    <input type="text" name="daterange" value="01/01/2018 - 01/15/2018"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 mt-3">
                                <a href="#" class="btn btn-yellow shadow mt-4">Search</a>
                                <a href="#" class="btn btn-blue shadow mt-4">Reset</a>
                                <a class="btn btn-blue shadow  mt-4" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal100">Export Redemption
                                    History</a>
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover subscription-history-table">
                                        <thead>
                                            <tr>
                                                <th class="fw-bold" scope="col">Time</th>
                                                <th class="fw-bold" scope="col">Token</th>
                                                <th class="fw-bold" scope="col">Amount</th>
                                                <th class="fw-bold" scope="col">NAV</th>
                                                <th class="fw-bold" scope="col">Fee</th>
                                                <th class="fw-bold" scope="col">Net Proceeds</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 10:00am </td>
                                                <td> $0.006190</td>
                                                <td class="text-danger"> -6.83% <iclass="bi-arrow-up"></i></td>
                                                <td>$0.006190</td>
                                                <td>$0.006190 </td>
                                                <td>$0.006190</td>
                                            </tr>
                                            <tr>
                                                <td> 10:00am </td>
                                                <td> $0.006190</td>
                                                <td class="g-text-left g-light-green"> 56.83% <iclass="bi-arrow-up"></i>
                                                </td>
                                                <td>$0.006190</td>
                                                <td>$0.006190 </td>
                                                <td>$0.006190</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                       <div class="row bg-light-blue shadow-sm p-2">
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-3 position-relative"
                                id="subscription-tokens">
                                <label>Token </label>
                                <i class="bi bi-chevron-down"></i>
                                <select class="form-control">
                                    <option>All </option>
                                    <option>1INCHUP </option>
                                    <option>1INCHDOWN </option>
                                    <option>XLMDOWN </option>
                                    <option>SUSHIDOWN </option>
                                    <option>SUSHIUP </option>
                                    <option>AAVEDOWN </option>
                                    <option>AAVEUP </option>
                                    <option>BCHDOWN </option>
                                    <option>BCHUP </option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-3 position-relative">
                                <label>Start Date & End Date</label>
                                <i class="bi bi-chevron-down"></i>
                                <div class="input-group input-daterange">
                                    <input type="text" name="daterange" value="01/01/2018 - 01/15/2018"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 mt-3">
                                <a href="#" class="btn btn-yellow shadow mt-4">Search</a>
                                <a href="#" class="btn btn-blue shadow mt-4">Reset</a>
                                <a class="btn btn-blue shadow  mt-4" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal100">Export Redemption
                                    History</a>
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover subscription-history-table">
                                        <thead>
                                            <tr>
                                                <th class="fw-bold" scope="col">Time</th>
                                                <th class="fw-bold" scope="col">Token</th>
                                                <th class="fw-bold" scope="col">Amount</th>
                                                <th class="fw-bold" scope="col">NAV</th>
                                                <th class="fw-bold" scope="col">Fee</th>
                                                <th class="fw-bold" scope="col">Net Proceeds</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 10:00am </td>
                                                <td> $0.006190</td>
                                                <td class="g-text-left g-light-green"> 56.83% <iclass="bi-arrow-up"></i>
                                                </td>
                                                <td>$0.006190</td>
                                                <td>$0.006190 </td>
                                                <td>$0.006190</td>
                                            </tr>
                                            <tr>
                                                <td> 10:00am </td>
                                                <td> $0.006190</td>
                                                <td class="text-danger"> -5.83% <iclass="bi-arrow-up"></i></td>
                                                <td>$0.006190</td>
                                                <td>$0.006190 </td>
                                                <td>$0.006190</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                            <div class="available-gift-card" id="added-gift-card">
                                <img src="{{ asset('assets/img/added-card-icon.jpg') }}" class="img-fluid"
                                    alt="Leverage Tokens Image">
                                <h5>No records found.</h5>
                            </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row mt-4">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <h2> Wealth Mark Leveraged Tokens Agreement</h2>
                                <div class="service-agareement text">
                                    <div data-bn-type="text" class="article-title text">Wealthmark Leveraged Tokens
                                        Agreement
                                    </div>
                                    <div data-bn-type="text" class="caption text">Version: 18 August 2022</div>
                                    <div data-bn-type="text" class="paragraph text">This Wealthmark Leveraged Tokens
                                        Agreement (this <strong>“Agreement”</strong>) shall apply to all BLVT issued,
                                        redeemed and/or traded on the Platform.
                                    </div>
                                    <div data-bn-type="text" class="paragraph text">All capitalised terms and
                                        references used in this Agreement that are not defined herein shall have the
                                        meaning given to them in the <a class="link" href="/en/terms">Wealthmark Terms
                                            of
                                            Use</a>, as updated from time to time (the <strong>“Terms of Use”</strong>).
                                        Where a term is defined both in the Terms of Use and in this Agreement, for the
                                        purposes of this Agreement only, the definition in this Agreement shall prevail.
                                    </div>
                                    <div data-bn-type="text" class="paragraph text">The terms in this Agreement
                                        shall be supplemental to and are to be read together with the Terms of Use.
                                        Accordingly, the provisions set out in the Terms of Use shall apply to the use
                                        of the Platform for the purposes of transacting in BLVT and references in the
                                        Terms of Use to the “Wealthmark Services” shall include the issue, redemption
                                        and
                                        trading of BLVT and the related services contemplated hereunder, where relevant.
                                        In the event of any conflict or inconsistency between the terms in this
                                        Agreement and the Terms of Use, the terms in this Agreement shall prevail with
                                        respect to the services contemplated hereunder unless expressly stated
                                        otherwise.
                                    </div>
                                    <div data-bn-type="text" class="paragraph text">The terms in this Agreement
                                        shall be further supplemented by the <a class="link"
                                            href="/en/support/faq/73c39e149c90425dbbab242cbb443685">Wealthmark Leveraged
                                            Tokens Trading Rules</a>, as updated from time to time (the <strong>“Trading
                                            Rules”</strong>). In the event of any conflict or inconsistency between the
                                        terms in this Agreement and the Trading Rules, the Trading Rules shall prevail
                                        with respect to the services contemplated hereunder unless expressly stated
                                        otherwise.
                                    </div>
                                    <div data-bn-type="text" class="paragraph text">This version of this Agreement
                                        shall replace and supersede any previous agreements between us with respect to
                                        BLVT and any previous versions of this Agreement that may have been accepted
                                        through, or otherwise made available on, the Platform. By subscribing to,
                                        redeeming and/or trading in BLVT, you confirm your acceptance of this Agreement,
                                        the Terms of Use and the Trading Rules.
                                    </div>
                                    <ol>
                                        <li>
                                            <div data-bn-type="text" class="chapter-title text">Definitions and
                                                Interpretation
                                            </div>
                                            <ol>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">The following
                                                        definitions are applicable to the terms of this Agreement:
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Basket”</strong> has the meaning given to it in clause
                                                        2.3 of this Agreement.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Basket Value”</strong> means, in respect of each BLVT,
                                                        the combined market value of all USD(S)-M Futures Contracts
                                                        constituting the Basket.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“BLVT”</strong> or <strong>“Leveraged Token”</strong>
                                                        means a series of Tokens issued by Wealthmark that represent a
                                                        leveraged position in the relevant Basket, comprising long or
                                                        short positions in USD(S)-M Futures Contracts referencing the
                                                        relevant Underlying.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text"><strong>“BLVT
                                                            Account”</strong> has the meaning given to it in clause 2.3
                                                        of this Agreement.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text"><strong>“BLVT
                                                            Account Value”</strong> means, with respect to a BLVT, the
                                                        number of Tokens issued by the relevant BLVT Account multiplied
                                                        by the Token Price of each Token, as determined by Wealthmark.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text"><strong>“BLVT
                                                            Fees”</strong> has the meaning given to it in clause 3.7.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text"><strong>“BLVT
                                                            Limit”</strong> has the meaning given to it in clause 3.4.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Leverage Ratio”</strong> means, with respect to a BLVT,
                                                        the quotient obtained by dividing the Basket Value by the BLVT
                                                        Account Value.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Perpetual Futures Contracts”</strong> means contracts
                                                        representing an obligation to buy or sell a Digital Asset (the
                                                        <strong>“Underlying”</strong>) at a specific price, at any time
                                                        while the contract remains open, with no specific expiry date.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Rebalancing”</strong> has the meaning given to it in
                                                        clause 2.6 of this Agreement.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Reverse Token Splits”</strong> has the meaning given to
                                                        it in clause 2.7 of the Agreement.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Target Leverage Ratio”</strong> means the particular
                                                        Leverage Ratio that a Basket is looking to maintain , which is
                                                        set by a Wealthmark proprietary algorithm and will be within a
                                                        range of between 1.25x and 4x (the <strong>“Target Leverage
                                                            Range”</strong>).
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“Token”</strong> means, in respect of each BLVT, each
                                                        individual digital token (or fraction thereof) issued by
                                                        Wealthmark
                                                        that has a value assigned to it and forms part of that BLVT.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text"><strong>“Token
                                                            Price”</strong> has the meaning given to it in clause 2.4 of
                                                        this Agreement.
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">
                                                        <strong>“USD(S)-M Futures Contract”</strong> means a Perpetual
                                                        Futures Contract that is quoted, settled and margined in USD
                                                        stablecoins (BUSD and USDT) and is traded on the Platform.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">The headings
                                                        are inserted for convenience only and shall not affect the
                                                        construction of this Agreement. Expressions in the singular form
                                                        shall include the plural and vice versa, and all references to
                                                        the masculine genders shall include the female and neuter
                                                        genders and vice versa.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">The words
                                                        “include” or “including” shall be deemed to be followed by
                                                        “without limitation” or “but not limited to” whether or not they
                                                        are followed by such phrases or words of like import, and
                                                        “otherwise” shall not be construed as limited by words with
                                                        which it is associated.
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            <div data-bn-type="text" class="chapter-title text">Features of BLVT
                                            </div>
                                            <ol>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">BLVTs are a
                                                        type of derivative product that allows you to gain leveraged
                                                        exposure to an underlying Digital Asset, without the requirement
                                                        to pledge collateral or meet certain margin requirements and
                                                        without the risk of liquidation.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Wealthmark is the
                                                        sole issuer of BLVTs and also a market maker in BLVTs. You may
                                                        request to subscribe for BLVT, redeem existing BLVT or trade
                                                        BLVT on the secondary market through functionality available on
                                                        the Platform.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Each BLVT has
                                                        an associated segregated account on the Platform (each, a
                                                        <strong>“BLVT Account”</strong>) that holds a dynamically
                                                        adjusted basket of USD(S)-M Futures Contracts referencing the
                                                        relevant Underlying referred to (the <strong>“Basket”</strong>).
                                                        For example, the “BTCUP” Token will reference a Basket of long
                                                        positions in BTCUSDT USD(S)-M Futures Contracts. The number and
                                                        type of USD(S)-M Futures Contracts included within a Basket are
                                                        automatically selected by a Wealthmark proprietary algorithm by
                                                        reference to the Target Leverage Ratio that the Basket is
                                                        looking to maintain.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">The price at
                                                        which each Token issued with respect to a BLVT may be subscribed
                                                        for or redeemed (the <strong>“Token Price”</strong>), is
                                                        referred to on the Platform as the “NAV” and is intended to
                                                        reflect the current market value of the Token. This takes into
                                                        account the Basket Value of the associated BLVT Account that has
                                                        issued the Token and the applicable Leverage Ratio. It is
                                                        important to note that the Token Price will always differ from
                                                        the price of the Underlying.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">If, at any
                                                        point, the Leverage Ratio of a BLVT falls outside the Target
                                                        Leverage Range, Wealthmark will rebalance the associated Basket
                                                        by
                                                        either buying additional USD(S)-M Futures for inclusion in the
                                                        relevant Basket or selling a certain number of USD(S)-M Futures
                                                        Contracts included within the relevant Basket, so as to bring
                                                        the Leverage Ratio back within the Target Leverage Range (a
                                                        <strong>“Rebalancing”</strong>). It may not always be possible
                                                        for the Leverage Ratio to be within the Target Leverage Range at
                                                        all times, such as in periods of extreme market volatility.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">The Target
                                                        Leverage Ratio is not fixed and varies from time to time. As
                                                        such, Rebalancing will only occur when market conditions deem it
                                                        necessary rather than at predefined intervals. This reduces the
                                                        risk of any front-running of BLVT. Further information with
                                                        respect to Rebalancing of BLVT can be found here: <a
                                                            class="link" href="/en/support/faq/360043387931">What Is
                                                            Wealthmark Leveraged Tokens Rebalancing.</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">In order to
                                                        provide a better trading experience for users, Wealthmark may,
                                                        from
                                                        time to time, make a BLVT subject to a reverse token split
                                                        process to consolidate the existing number of Tokens into a
                                                        smaller number of proportionally more valuable Tokens (a
                                                        <strong>“Reverse Token Split”</strong>). When extreme market
                                                        fluctuations decrease the value of a Token, a Reverse Token
                                                        Split may be initiated to boost the Token’s liquidity and price.
                                                        Wealthmark will announce the arrangements for Reverse Token
                                                        Splits
                                                        through the Platform prior to the effective time. Further
                                                        information on Reverse Token Splits can be found here: <a
                                                            class="link"
                                                            href="/en/support/faq/e3aba24f04644ad5b2139b3c87cbb29d">What
                                                            Is Reverse Token Split | Wealthmark Support</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Further
                                                        information on BLVT more generally can be found here: <a
                                                            class="link"
                                                            href="/en/leveraged-tokens/tokens/allTokens">Wealthmark
                                                            Leveraged Tokens | BLVTs</a>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            <div data-bn-type="text" class="chapter-title text">Transacting in
                                                BLVT through the Platform
                                            </div>
                                            <ol>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">In order to
                                                        subscribe for, redeem and/or trade in BLVT through the Platform,
                                                        you must have:
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">(a) set up a
                                                        valid Account;
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">(b)
                                                        successfully passed a user knowledge assessment to confirm your
                                                        understanding of the risks and features of Leveraged Tokens as
                                                        complex cryptocurrency instruments; and
                                                    </div>
                                                    <div data-bn-type="text" class="paragraph text">(c) read,
                                                        understood and accepted the <a class="link"
                                                            href="/en/support/faq/360042918232">Wealthmark Leveraged
                                                            Tokens
                                                            Risk Disclosure Statement</a> (the <strong>“BLVT Risk
                                                            Disclosure”</strong>) and the terms of this Agreement.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">A list of all
                                                        Tokens available for subscription/redemption through the
                                                        Platform can be found on the following webpage: <a class="link"
                                                            href="/en/leveraged-tokens/tokens/allTokens">Wealthmark
                                                            Leveraged Tokens | BLVTs</a>. Each Token references a
                                                        specific Underlying. You may choose to take positions in “UP”
                                                        Tokens and/or “Down” Tokens. “UP” Tokens follow the price
                                                        movements in the Underlying and allow for you to realize between
                                                        1.25x-4x leveraged gains when the price of the Underlying rises,
                                                        whereas “DOWN” Tokens take an inverse position to the Underlying
                                                        and allow for you to realize between 1.25x-4x leveraged gains
                                                        when the price of the Underlying declines. Each BLVT Account
                                                        associated with an “UP” Token will take a long position in
                                                        USD(S)-M Futures Contracts referencing the Underlying whereas
                                                        each BLVT Account associated with a “DOWN” Token will take a
                                                        short position in USD(S)-M Futures Contracts referencing the
                                                        Underlying. For example, a BTCUP Token will reference a Basket
                                                        of long positions in BTCUSDT USD(S)-M Futures Contracts whereas
                                                        an ETHDOWN Token will reference a Basket of short positions in
                                                        ETHUSDT USD(S)-M Futures Contracts.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">You may
                                                        request to subscribe for or redeem Tokens issued with respect to
                                                        a BLVT directly with Wealthmark via the Platform at the current
                                                        Token Price, plus any applicable BLVT Fees, by clicking
                                                        “Subscribe” or “Redeem” against the relevant Token through the
                                                        following webpage: <a class="link"
                                                            href="/en/leveraged-tokens/tokens/allTokens">Wealthmark
                                                            Leveraged Tokens | BLVTs</a>. Wealthmark will periodically
                                                        adjust the Basket related to a BLVT to account for any
                                                        subscriptions or redemptions by buying additional USD(S)-M
                                                        Futures Contracts for inclusion in the Basket or selling
                                                        USD(S)-M Futures Contracts included within the Basket, as
                                                        required. Further information on how to subscribe for and redeem
                                                        BLVT can be found here: <a class="link"
                                                            href="/en/support/faq/360043392271">How to Subscribe or
                                                            Redeem Wealthmark Leveraged Tokens.</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">The current
                                                        subscription and redemption fee for BLVT is 0.1% of the notional
                                                        value of the Token (calculated and payable in USDT) and will be
                                                        automatically deducted from (or credited to) your Account at the
                                                        time of subscription/redemption. Wealthmark may impose a daily
                                                        limit on subscriptions and/or redemptions to a BLVT
                                                        (<strong>“BLVT Limit”</strong>). You may subscribe or redeem for
                                                        each BLVT up to the applicable BLVT Limit at any time except
                                                        during a Rebalancing. Wealthmark may vary the BLVT Limit from
                                                        time
                                                        to time in its discretion depending on prevailing market
                                                        conditions. Please refer to the <a class="link"
                                                            href="/en/support/faq/73c39e149c90425dbbab242cbb443685">Trading
                                                            Rules</a> for information on the current BLVT Limits.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Wealthmark
                                                        reserves the right at any time to suspend the subscription
                                                        and/or redemption of BLVT depending on prevailing market
                                                        conditions. Any such suspension may continue for so long as
                                                        Wealthmark determines necessary in its sole discretion. In such
                                                        a
                                                        circumstance, Users may continue to trade BLVT in the secondary
                                                        market. Without prejudice to the foregoing, Wealthmark may
                                                        choose
                                                        to delist any Token available through the Platform and/or may
                                                        discontinue providing any of the services referred to hereunder,
                                                        in each case at any time in its sole and absolute discretion,
                                                        without giving any reason or any notice to you thereof.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Users may
                                                        trade BLVT on the secondary market, either with other users of
                                                        the Platform or with Wealthmark as counterparty, by clicking
                                                        “Trade” against the relevant Token through the following
                                                        webpage: <a class="link"
                                                            href="/en/leveraged-tokens/tokens/allTokens">Wealthmark
                                                            Leveraged Tokens | BLVT</a>. Wealthmark supports the
                                                        liquidity
                                                        of BLVT and may step in as a buyer or seller when needed in
                                                        order to maintain the secondary market price of BLVT within a
                                                        certain range of the current Token Price. Information on how to
                                                        trade BLVT in the spot market can be found here: <a class="link"
                                                            href="/en/support/faq/360043392151">How to Get Started With
                                                            Wealthmark Leveraged Tokens</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Wealthmark
                                                        charges certain fees with respect to the subscription,
                                                        redemption and trading of BLVT through the Platform
                                                        (<strong>“BLVT Fees”</strong>). Information with respect to the
                                                        BLVT Fees can be found here: <a class="link"
                                                            href="/en/support/faq/360043392811">Leveraged Tokens Fees |
                                                            Wealthmark</a>. Wealthmark reserves the right to update the
                                                        BLVT
                                                        Fees in its discretion from time to time by posting the updated
                                                        fees to the Platform.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Wealthmark
                                                        reserves the right to update the information contained in the
                                                        Trading Rules, the Platform and the various webpages referred to
                                                        in this Agreement from time to time at its discretion. It is
                                                        your responsibility to familiarise yourself with the content of
                                                        such materials from time to time.
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            <div data-bn-type="text" class="chapter-title text">Risks of
                                                transacting in BLVT
                                            </div>
                                            <ol>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Before
                                                        transacting in BLVT through the Platform, you should take steps
                                                        to understand the nature of this complex product and the risks
                                                        involved as set out in the <a class="link"
                                                            href="/en/support/faq/360042918232">BLVT Risk
                                                            Disclosure</a>. By transacting in BLVT on the Platform, you
                                                        acknowledge and agree that you have sufficient investment
                                                        knowledge, financial expertise, and experience and the capacity
                                                        to take on the increased risks arising from Leveraged Tokens
                                                        trading. You further agree to assume all the risks arising from
                                                        conducting Leveraged Tokens trading on your own account. If you
                                                        are uncomfortable with the level of risks described in <a
                                                            class="link" href="/en/support/faq/360042918232">BLVT Risk
                                                            Disclosure</a>, you should not transact in BLVT.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">By transacting
                                                        in BLVT through the Platform, you authorise Wealthmark to
                                                        automatically: (i) deduct from your Wealthmark Account any
                                                        amounts
                                                        owed from you to Wealthmark, and/or (ii) credit to your Account
                                                        any
                                                        amount owed from Wealthmark to you, in each case in connection
                                                        with
                                                        the subscription, redemption and/or trading of BLVT.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">By transacting
                                                        in BLVT through the Platform and without prejudice to any other
                                                        rights or remedies granted to Wealthmark and the Wealthmark
                                                        Affiliates
                                                        in this Agreement, the Terms of Use or the Trading Rules, you
                                                        further authorise Wealthmark and the Wealthmark Affiliates at
                                                        any time
                                                        to take such measures as they deem in their sole discretion to
                                                        be required for the purposes of mitigating potential losses to
                                                        you, other clients of Wealthmark and the Platform, which
                                                        measures
                                                        may include (but shall not be limited to) suspension of
                                                        subscriptions, redemptions and/or trading of BLVT through the
                                                        Platform.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div data-bn-type="text" class="paragraph text">Wealthmark
                                                        reserves the right to alter, revise, modify, and/or amend this
                                                        Agreement at any time in its discretion. Any such amendments
                                                        will take effect immediately upon being published on the
                                                        Platform. It is your responsibility to regularly check our
                                                        website to confirm the latest version of this Agreement. Your
                                                        continued access and use of the Platform for the purposes of
                                                        trading in BLVT following any amendments to this Agreement shall
                                                        indicate your acceptance of such amendments. If you do not agree
                                                        to any such amendments, you should cease transacting in BLVT
                                                        through the Platform.
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="token-faq-block" id="token-faq-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="sec-title text-left">-->
    <!--                <span class="title">Know About</span>-->
    <!--                <h2 class="heading-h2">FAQ</h2>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="faq-inner-block" id="faq-inner-section">-->
    <!--                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">-->
    <!--                    <div class="accordion" id="accordian-api">-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingOne">-->
    <!--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
    <!--                                    1. What is Wealthmark Pay?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapseOne" class="accordion-collapse collapse show"-->
    <!--                                aria-labelledby="headingOne" data-bs-parent="#accordian-api">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text"> <strong>This is the first item's accordion body.</strong> It-->
    <!--                                        is shown by-->
    <!--                                        default, until the collapse plugin adds the appropriate classes that we use-->
    <!--                                        to-->
    <!--                                        style each element. These classes control the overall appearance, as well as-->
    <!--                                        the-->
    <!--                                        showing and hiding via CSS transitions. You can modify any of this with-->
    <!--                                        custom-->
    <!--                                        CSS or overriding our default variables. It's also worth noting that just-->
    <!--                                        about-->
    <!--                                        any HTML can go within the <code>.accordion-body</code>, though the-->
    <!--                                        transition-->
    <!--                                        does limit overflow.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingTwo">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
    <!--                                    2. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by-->
    <!--                                    Wealthmark?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"-->
    <!--                                data-bs-parent="#accordian-api">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text"> You can access your Wealthmark Pay Wallet by clicking-->
    <!--                                            [Wallets] --->
    <!--                                            [Funding] - [Pay] on your Wealthmark App.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingThree">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapseThree" aria-expanded="false"-->
    <!--                                    aria-controls="collapseThree">-->
    <!--                                    3. How long does it take for a Wealthmark Pay transaction to be completed?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapseThree" class="accordion-collapse collapse"-->
    <!--                                aria-labelledby="headingThree" data-bs-parent="#accordian-api">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text">Wealthmark Pay transactions are usually confirmed-->
    <!--                                            instantly.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingfour">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapsefour" aria-expanded="false"-->
    <!--                                    aria-controls="collapsefour">-->
    <!--                                    4. Can I pay with Bitcoin, Wealthmark and other cryptocurrencies supported by-->
    <!--                                    Wealthmark?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"-->
    <!--                                data-bs-parent="#accordian-api">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text">You can access your Wealthmark Pay Wallet by clicking-->
    <!--                                            [Wallets] --->
    <!--                                            [Funding] - [Pay] on your Wealthmark App.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <h2 class="accordion-header" id="headingfive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
    <!--                                    data-bs-target="#collapsefive" aria-expanded="false"-->
    <!--                                    aria-controls="collapsefive">-->
    <!--                                    5. How long does it take for a Wealthmark Pay transaction to be completed?-->
    <!--                                </button>-->
    <!--                            </h2>-->
    <!--                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"-->
    <!--                                data-bs-parent="#accordian-api">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <div class="text"> Wealthmark Pay transactions are usually confirmed-->
    <!--                                            instantly.-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

        <div class="modal fade" id="exampleModal100" tabindex="-1" aria-labelledby="exampleModal100Label"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModal100Label">Export Redemption History</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Last 24 Hours
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Last 2 Weeks
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Past Month
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        All
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Yesterday
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6" checked>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        Month To Date
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault7">
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        Past 3 Months
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-yellow shadow" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn  btn-blue shadow">Export Now</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModal100Label">Export Redemption History</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Last 24 Hours
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Last 2 Weeks
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Past Month
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        All
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Yesterday
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6" checked>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        Month To Date
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault7">
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        Past 3 Months
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-yellow shadow" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn  btn-blue shadow">Export Now</button>
                    </div>
                </div>
            </div>
        </div>

    @include('template.country_language')
    @include('template.web_footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#pills-contact2-tab").click(function() {
            $("#leverage-sub-navbar").show();

        });
        $("#pills-home-tab").click(function() {
            $("#leverage-sub-navbar").hide();

        });

        $("#pills-profile-tab").click(function() {
            $("#leverage-sub-navbar").hide();
        });

        $("#pills-contact-tab").click(function() {
            $("#leverage-sub-navbar").hide();
        });

    });
    </script>
</body>

</html>
