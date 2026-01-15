<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      @include('template.web_css')
      <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
      <style>
        /*.flexCheckDefault1{display:block;}*/
        /*.flexCheckDefault2{display:none;}*/
        /*.flexCheckDefault3{display:none;}*/
        /*.flexCheckDefault4{display:none;}*/
        /*.flexCheckDefault5{display:none;}*/
        /*.flexCheckDefault6{display:none;}*/
        /*.flexCheckDefault7{display:none;}*/
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="historical-data-block" id="historical-data-section">
         <div class="container">
            <div class="row mb-3">
               <div class="col-lg-6">
                  <div class="sec-title text-left">
                     <h1 class="heading-h2">Wealthmark Market Data</h1>
                  </div>
                  <div class="text">Easily download multiple market data on Wealthmark
                  </div>
               </div>
               <div class="col-lg-6 d-flex align-items-top justify-content-end">
                  <div class="hist-top-head-right d-flex justify-content-between">
                     <a class="d-flex btn btn-yellow shadow m-1">API</a>
                     <a class="d-flex btn btn-yellow shadow m-1"> Help</a>
                  </div>
               </div>
            </div>
            <div class="row d-flex align-items-start">
               <div class="col-lg-2 col-md-3">
                  <div class="left-filter-box mb-3">
                     <div class="d-flex justify-content-between filter-head">
                        <a class="filter-heading-txt">Filter</a>
                        <a onClick="uncheckAll()" title="Click me and Clear all Checkboxes" class="yellow-text">Clear All</a>
                     </div>
                     <div class="filter-wrapper">
                        <div class="filter-left-click-list mt-3">
                           <h6>COIN-M Futures</h6>
                           <div class="form-control filter-checkbox-container filter-dropdown-click"  type="checkbox" id="result1"></div>
                           <div class="filter-dropdown-list">
                              <div class="form-check">
                                 <input class="form-check-input filter-checkbox trade-data-click" type="checkbox"  id="flexCheckDefault1" onClick="showcheckedblock(this.id);"    value="Trade Data" name="hist-filter-checkbox1">
                                 <label class="form-check-label" for="flexCheckDefault1">
                                 Trade Data
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="filter-left-click-list mt-3">
                           <h6>  USDⓢ-M Futures</h6>
                           <div class="form-control filter-checkbox-container filter-dropdown-click" id="result2"></div>
                           <div class="filter-dropdown-list">
                              <div class="form-check">
                                 <input class="form-check-input filter-checkbox trade-data-click" type="checkbox" id="flexCheckDefault2" onClick="showcheckedblock(this.id);"  value="Trade Data" name="hist-filter-checkbox2">
                                 <label class="form-check-label" for="flexCheckDefault2">
                                 Trade Data
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input filter-checkbox derivative-metrics-click" type="checkbox"  id="flexCheckDefault3"  onClick="showcheckedblock(this.id);" value="Derivative Metrics" name="hist-filter-checkbox2">
                                 <label class="form-check-label" for="flexCheckDefault3">
                                 Derivative Metrics
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input filter-checkbox order-book-click" type="checkbox"  id="flexCheckDefault4"  onClick="showcheckedblock(this.id);" value="Order Book Data" name="hist-filter-checkbox2">
                                 <label class="form-check-label" for="flexCheckDefault4">
                                 Order Book Data
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="filter-left-click-list mt-3">
                           <h6>Spot</h6>
                           <div class="form-control filter-checkbox-container filter-dropdown-click" id="result3"></div>
                           <div class="filter-dropdown-list">
                              <div class="filter-inner-box">
                                 <div class="form-check">
                                    <input class="form-check-input filter-checkbox trade-data-click" type="checkbox" id="flexCheckDefault5" onClick="showcheckedblock(this.id);" value="Trade Data" name="hist-filter-checkbox3">
                                    <label class="form-check-label" for="flexCheckDefault5">
                                    Trade Data
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input filter-checkbox derivative-metrics-click" type="checkbox"  id="flexCheckDefault6" onClick="showcheckedblock(this.id);" value="Derivative Metrics" name="hist-filter-checkbox3">
                                    <label class="form-check-label" for="flexCheckDefault6">
                                    Derivative Metrics
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input filter-checkbox order-book-click" type="checkbox" id="flexCheckDefault7" onClick="showcheckedblock(this.id);" value="Order Book Data" name="hist-filter-checkbox3">
                                    <label class="form-check-label" for="flexCheckDefault7">
                                    Order Book Data
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-10 col-md-9">
                  <div class="right-filter-content ">
                     <div class="d-flex justify-content-between filter-head mb-3">
                        <h5>Data Products</h5>
                     </div>
                     <div class="row flexCheckDefault1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>K-line </h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Trades</h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault2 hide">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Aggregated Trades</h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault3 hide">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Index Price K-line</h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault4 hide">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Mark Price K-line</h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault5 hide">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Premium Index K-line</h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Futures Order Book Data</h4>
                              <div class="text">Available only on Wealth Mark Futures. It requires futures account be
                                 whitelisted first and can
                                 only be download via API.
                                 Orderbook snapshot (S_Depth): Since January 2020, only on BTC/USDT symbol.
                                 Tick-level orderbook (T_Depth): Since January 2020, on all symbols
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="apply-btn btn btn-yellow shadow">
                                 Apply for it  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                       d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault6 hide">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Historical Orderbook Data</h4>
                              <div class="text">Also known as candlestick data, K-lines are uniquely identified by their open
                                 time with
                                 multiplle intervals supported.
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 Spot Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD &copy;-M Futures Data  &nbsp;
                                 <svg width="16"
                                    height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                              <a class="data-cta-btn btn btn-yellow shadow">
                                 USD M Futures Data  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                       d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                       d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>
                     <div class="row flexCheckDefault7 hide">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-info">
                              <h4>Book Ticker</h4>
                              <div class="text">Available only on Wealth Mark Futures. It requires futures account be
                                 whitelisted first and can
                                 only be download via API.
                                 Orderbook snapshot (S_Depth): Since January 2020, only on BTC/USDT symbol.
                                 Tick-level orderbook (T_Depth): Since January 2020, on all symbols
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="data-cta-button-group">
                              <a class="apply-btn btn btn-yellow shadow">
                                 Apply for it  &nbsp;
                                 <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                       d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <hr />
                     </div>


                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <h4>Real-time Data</h4>
                           <br />
                           <div class="data-links alert alert-warning">
                              <div class="text">Spot and Wealth Mark Futures Real-Time Data found here</div>
                              <a class="yellow-text">
                                 Spot Real-Time Data
                                 <svg width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
                                 </svg>
                                 &nbsp; &nbsp;
                              </a>
                              <a class="yellow-text">
                                 Futures Real-Time Data
                                 <svg width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <h4>API Docs</h4>
                           <br />
                           <div class="data-links alert alert-warning">
                              <div class="text">Multiple API Data downloads can be found here.</div>
                              <a class="yellow-text">
                                 API Guide
                                 <svg width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script>
         $(document).ready(function(){
          $(".filter-dropdown-click").click(function(){
                         $(this).siblings(".filter-dropdown-list").slideToggle();
                         $(this).parent().siblings().children(".filter-dropdown-list").slideUp();
                     });
         });
      </script>
      <script>
         $(document).ready(function() {
           $(".filter-checkbox").click(function(){
             var days = [];
             $.each($("input[name='hist-filter-checkbox1']:checked"), function(){
               days.push($(this).val());
             });
             $("#result1").html(" " + days.join(","));
           });




             $(".filter-checkbox").click(function(){
             var days1 = [];
             $.each($("input[name='hist-filter-checkbox2']:checked"), function(){
               days1.push($(this).val());
             });
             $("#result2").html(" " + days1.join(","));
           });



             $(".filter-checkbox").click(function(){
             var days2 = [];
             $.each($("input[name='hist-filter-checkbox3']:checked"), function(){
               days2.push($(this).val());
             });
             $("#result3").html(" " + days2.join(","));
           });
         });
      </script>
      <script>
         function uncheckAll(){
         $('input[type="checkbox"]:checked').prop('checked',false);
         }

      </script>
      <script>
         function showcheckedblock(id){
             var chkId = id;
              if ($("#" +chkId).is(":checked")) {

                     $("." + chkId).removeClass("hide");
                 }
                 else{
                     $("." + chkId).addClass("hide");
                 }
         }
      </script>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
