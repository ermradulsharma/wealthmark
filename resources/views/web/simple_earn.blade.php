  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
  @include('template.web_css')
      
  
 <style>
 

 </style>
  
  
   </head>
   
 <body class="bg-white">
        @include('template.web_menu')
    
    <section  class="breadcrumbs shadow-sm simple-earn-top pt-5 pb-5">
          <div class="container">
              <div class="row justify-content-center align-items-center">
                 <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center align-items-center  order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                 <h3 class="top-heading mb-0 text-left">Simple Earn</h3>
                 <p class="top-p text-left">The simple way to Deposit & Earn</p>
               
                 </div>
                 
                 <!--------------------------open this div before login-------------------------------------->
                 <!--<div class="col-lg-6 col-md-6 col-sm-12  order-1 order-lg-2 hero-img mt-3 mb-5" data-aos="zoom-in" data-aos-delay="200">-->
                 <!--  <div class="asset-overview login-box-main">-->
                 <!--         <div class="login-box-bg">-->
                 <!--           <div class="login-box">-->
                 <!--             <img src="{{ asset('img/account.png') }}" class="login-box-img">-->
                 <!--             <div class="login-box-txt">Log in to view holding details</div>-->
                 <!--           <a href="{{ url( app()->getLocale(), 'login') }}"  <button type="button" class="btn btn-yellow">Log In</button></a>-->
                 <!--           </div>-->
                 <!--         </div>-->
                 <!--       </div>-->
                  
                 <!--</div>-->
                  <div class="col-lg-6 col-md-6 col-sm-12  order-1 order-lg-2 hero-img mt-3 mb-5" data-aos="zoom-in" data-aos-delay="200">
                   <div class="asset-overview login-box-main">
                          <div class="login-box-bg bg-white border-yellow" >
                            <div class="login-box" id="after_login">
                           <div class="asset-views-main">
                                 <div class="asset-views">
                                   <div class="asset-priview-div">
                                     <div class="asset-priview-div-left">
                                       <div class="asset-balence-text">Total Balance</div>
                                       <div class="asset-balance-div">
                                         <span class="asset-balence">**********</span>
                                       </div>
                                       <div class="asset-sbbalence">********</div>
                                     </div>
                                     <div class="asset-priview-div-right">
                                       <div class="asset-balence-text">Cumulative Profit</div>
                                       <div class="">
                                         <div class="asset-balance-div">
                                           <span class="asset-profit">**********</span>
                                         </div>
                                         <div class="asset-sbprofit">*********</div>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="d-flex mt-2 w-100">
                                     <div class="asset-priview-img-div">
                                       <img class="asset-priview-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                     </div>
                                   </div>
                                 </div>
                                 <div class="asset-btn-div  justify-content-between">
                                     <div class="w-50 text-left">  <a href="#" target="_blank" class="btn-yellow border-0 shadow-none"> <i class="bi bi-wallet me-2"></i> Wallet</a> </div>
                                     <div class="w-50 text-left">  <a href="#" target="_blank" class="btn-default"> <i class="bi bi-clock-history me-2"></i> History</a> </div>
                                  </div>
                                 <div class="asset-eye-icon-div">
                                   <i id="showbalence" class="bi bi-eye asset-eye-icon" onClick="showhideBal(this.id)" style="display:none"></i>
                                   <i id="hidebalence" class="bi bi-eye-slash asset-eye-icon" onClick="showhideBal(this.id)" ></i>
                                 </div>
                                </div>
                            </div>
                          </div>
                        </div>
                  
                 </div>
              </div>
            </div>
      </section>
    
    
    <section class="Staking simple-earn-tbl bg-white">
        <div class="container">
              <div class="staking-top mb-5">
                      <div class="search-div">
                        <!--<input  placeholder="Choose/Search Coin" id="filter" onInput="searchfilter(this.id,this.value, 'simple-earn-tbl-record')">-->
                        <input  placeholder="Choose/Search Coin">
                        <svg viewBox="0 0 24 24" fill="none" class="svg-search">
                          <path d="M3 10.982c0 3.845 3.137 6.982 6.982 6.982 1.518 0 3.036-.506 4.149-1.416L18.583 21 20 19.583l-4.452-4.452c.81-1.113 1.416-2.631 1.416-4.149 0-1.922-.81-3.643-2.023-4.958C13.726 4.81 11.905 4 9.982 4 6.137 4 3 7.137 3 10.982zM13.423 7.44a4.819 4.819 0 011.416 3.441c0 1.315-.506 2.53-1.416 3.44a4.819 4.819 0 01-3.44 1.417 4.819 4.819 0 01-3.441-1.417c-1.012-.81-1.518-2.023-1.518-3.339 0-1.315.506-2.53 1.416-3.44.911-1.012 2.227-1.518 3.542-1.518 1.316 0 2.53.506 3.44 1.416z" fill="currentColor"></path>
                        </svg>
                      </div>
                      <label class="lbl-fillter-optn">
                        <div class="lbl-fillter-check-div">
                          <input type="checkbox"  name="remember"  value="1">
                         
                          
                        </div>
                        <div class="lbl-fillter-text">Display available only</div>
                      </label>
                      <label class="lbl-fillter-optn">
                        <div class="lbl-fillter-check-div">
                          <input type="checkbox"  name="remember" value="2">
                        
                        </div>
                        <div class="lbl-fillter-text">Match My Assets</div>
                      </label>
                       <label class="lbl-fillter-optn">
                        <div class="lbl-fillter-check-div">
                          <input type="checkbox"  name="remember" value="3">
                        
                        </div>
                        <div class="lbl-fillter-text">Show Trial Funds</div>
                      </label>
            </div>
            <div class="row">
                <div class="col-md-12" id="simple-earn-tbl-record">
                 
                    <div class="sm-top-div">
                    <h3 class="h3 mb-0">Protected Products</h3>
                    <div class="sm-small-text">Get stable earnings by depositing assets</div>
                  </div>
                    <div class="simple-earn-pc">
                    <div class="simple-earn-pc-inner">
                      <div class="simple-earn-header-1">
                        <div  class="simple-earn-coin-nm-head">Coin</div>
                      </div>
                      <div class="simple-earn-header-2">
                        <div class="sm-tbl-row-mob-top">
                          <div  class="simple-earn-coin-nm-head">APR</div>
                          <svg  viewBox="0 0 20 20" fill="none" class="svg-fillter-icon">
                            <path d="M7.29167 8.75023V7.37401L10 4.45642L12.7083 7.37401V8.75023H7.29167Z" fill="#929AA5"></path>
                            <path d="M12.7083 11.25V12.6262L10 15.5438L7.29167 12.6262V11.25H12.7083Z" fill="#929AA5"></path>
                          </svg>
                        </div>
                      </div>
                      <div class="simple-earn-header-3">
                        <div  class="simple-earn-coin-nm-head">Duration(Days)</div>
                      </div>
                      <div class="simple-earn-header-4">
                        <div class="">
                        
                          <div  class="simple-earn-header-5">Auto-Subscribe</div>
                        </div>
                      </div>
                      <!--<div class="simple-earn-header-5"></div>-->
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                       
                        <div  class="simple-earn-coin-nm">EGLD</div>
                       
                      </div>
                      <div class="simple-earn-2">
                        
                          <div  class="simple-earn-profit-txt">16.9%</div>
                       
                       
                      </div>
                      <div class="simple-earn-3">
                        <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div"></div>
                      <div class="simple-earn-btn-div">
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_1" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                      
                        <div  class="simple-earn-coin-nm">RAY</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">4.5%</div>
                       
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                      
                      </div>
                      <div class="simple-earn-btn-div">
                        
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_2" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                     
                        <div  class="simple-earn-coin-nm">KLAY</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">5%</div>
                        
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                      
                      </div>
                      <div class="simple-earn-btn-div">
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_3" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                        
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                        
                        <div  class="simple-earn-coin-nm">ANKR</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">8%</div>
                       
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                        <input type="checkbox" hidden="hidden" id="username_1" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_1"></label>
                      </div>
                      <div class="simple-earn-btn-div">
                        
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_4" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                        
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                      
                        <div  class="simple-earn-coin-nm">COMP</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">5%</div>
                        
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                        <input type="checkbox" hidden="hidden" id="username_2" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_2"></label>
                      </div>
                      <div class="simple-earn-btn-div">
                        
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_5" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                     
                        <div  class="simple-earn-coin-nm">OSMO</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">10%</div>
                       
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                       <input type="checkbox" hidden="hidden" id="username_3" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_3"></label>
                      </div>
                      <div class="simple-earn-btn-div">
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_6" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                        </div>
                     
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                      
                        <div  class="simple-earn-coin-nm">DOGE</div>
                       
                      </div>
                      <div class="simple-earn-2">
                        
                          <div  class="simple-earn-profit-txt">10%</div>
                       
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                       <input type="checkbox" hidden="hidden" id="username_4" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_4"></label>
                      </div>
                      <div class="simple-earn-btn-div">
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_7" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                        </div>
                    
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                      
                        <div  class="simple-earn-coin-nm">ENS</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">4.25%</div>
                       
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                       <input type="checkbox" hidden="hidden" id="username_5" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_5"></label>
                      </div>
                      <div class="simple-earn-btn-div">
                        
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_8" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                      
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                       
                        <div  class="simple-earn-coin-nm">IMX</div>
                       
                      </div>
                      <div class="simple-earn-2">
                       
                          <div  class="simple-earn-profit-txt">3.25%</div>
                        
                       
                      </div>
                      <div class="simple-earn-3">
                        <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div">
                       <input type="checkbox" hidden="hidden" id="username_6" onClick="autosubscribe(this.id)" >
                <label class="switch" for="username_6" ></label>
                      </div>
                      <div class="simple-earn-btn-div">
                      
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_9" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                      
                      </div>
                    </div>
                    <div class="table-body simple-earn-row">
                      <div class="simple-earn-1">
                      
                        <div  class="simple-earn-coin-nm">BNB</div>
                      </div>
                      <div class="simple-earn-2">
                      
                          <div  class="simple-earn-profit-txt">6.2%</div>
                      
                       
                      </div>
                      <div class="simple-earn-3">
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-blnk-div"></div>
                      <div class="simple-earn-btn-div">
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_10" onClick="OpenModalSubcscribe(this.id)">
                            <div  class="">Subscribe</div>
                          </button>
                      
                      </div>
                    </div>
                  </div>
                    <div class="simple-earn-mob">
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">EGLD</div>
                      </div>
                      
                        <div class="simple-earn-profit-txt">16.9%</div>
                     
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="simple-earn-right-sec">
                        <div class="sm-tbl-row-mob-auto">
                          <div class="sm-tbl-row-mob-auto-div">
                           
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_7" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_7"></label>
                        </div>
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_11" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                        
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">RAY</div>
                      </div>
                      
                        <div class="simple-earn-profit-txt">4.5%</div>
                     
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                       <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                           
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_8" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_8"></label>
                        </div>
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_12" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">KLAY</div>
                      </div>
                     
                        <div class="simple-earn-profit-txt">5%</div>
                    
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                          
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                        <input type="checkbox" hidden="hidden" id="username_9" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_9"></label>
                        </div>
                      
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_13" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">ANKR</div>
                      </div>
                     
                        <div class="simple-earn-profit-txt">8%</div>
                      
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                        <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                          
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_10" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_10"></label>
                        </div>
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_14" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                      
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">COMP</div>
                      </div>
                     
                        <div class="simple-earn-profit-txt">5%</div>
                     
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                           
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_11" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_11"></label>
                        </div>
                        
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_15" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">OSMO</div>
                      </div>
                     
                        <div class="simple-earn-profit-txt">10%</div>
                     
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                            
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_12" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_12"></label>
                        </div>
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_16" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">DOGE</div>
                      </div>
                      
                        <div class="simple-earn-profit-txt">10%</div>
                     
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                       <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                            
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_13" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_13"></label>
                        </div>
                      
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_17" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">ENS</div>
                      </div>
                      
                        <div class="simple-earn-profit-txt">4.25%</div>
                      
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                            
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_14" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_14"></label>
                        </div>
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_18" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                        
                      </div>
                    </div>
                  </div>
                  <div class="table-body sm-tbl-row-mob">
                   
                    <div class="sm-tbl-row-mob-top">
                      <div class="sm-tbl-row-mob-top">
                        <div class="sm-tbl-row-mob-img">
                          <img class="sm-tbl-row-mob-img--" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                        </div>
                        <div class="sm-tbl-row-mob-img-txt">IMX</div>
                      </div>
                     
                        <div class="simple-earn-profit-txt">3.25%</div>
                      
                     
                    </div>
                    <div class="sm-tbl-row-mob-second">
                      <div class="simple-earn-left-sec">
                        <div class="sm-tbl-row-mob-dur">Duration(Days)</div>
                         <div class="simple-earn-duration">
                          <div class="simple-earn-day active">
                            <div  class="simple-earn-text">Flexible</div>
                           <div class="sm-tbl-row-mob-svg-check">
                              <svg  viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">30</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">60</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">90</div>
                           
                          </div>
                          <div class="simple-earn-day">
                            <div  class="simple-earn-text">120</div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="sm-tbl-row-mob-auto-div-0">
                        <div class="sm-tbl-row-mob-auto-div-1">
                          <div class="sm-tbl-row-mob-auto-div">
                           
                            <div class="simple-earn-header-5">Auto-Subscribe</div>
                          </div>
                         <input type="checkbox" hidden="hidden" id="username_15" onClick="autosubscribe(this.id)">
                <label class="switch" for="username_15"></label>
                        </div>
                       
                          <button type="button" class="btn-yellow border-0 shadow-none" id="subscribe_btn_19" onClick="OpenModalSubcscribe(this.id)">
                            <div class="">Subscribe</div>
                          </button>
                       
                      </div>
                    </div>
                  </div>
               
                </div>

                </div>
            </div>
        </div>
    </section>
    
    

    
    
    
    <section class="simple-earn bg-light-blue">
     <div class="container">
         <div class="sec-title text-left mb-4">
                           <h2 class="heading-h2">Learn More</h2>
                            </div>
       <div class="row">
         <div class="col-md-3 col-sm-6">
           <div class="learn-more-sm">
             <h3 class="sm-title">Flexible Products</h3>
             <div class="sm-service-content">
               <p class="sm-description">Deposit and redeem on a flexible manner. </p>
             </div>
             <div class="service-icon">
               <span>
                  <img src="{{ asset('img/simple-earn/flexible-products.svg') }}" alt="Wealthmark" >
               </span>
             </div>
           </div>
         </div>
         <div class="col-md-3 col-sm-6">
           <div class="learn-more-sm blue">
             <h3 class="sm-title">Locked Products</h3>
             <div class="sm-service-content">
               <p class="sm-description">Lock assets for a fixed period of time in return for higher rewards. </p>
             </div>
             <div class="service-icon">
               <span>
                  <img src="{{ asset('img/simple-earn/locked-products.svg') }}" alt="Wealthmark" >
               </span>
             </div>
           </div>
         </div>
         <div class="col-md-3 col-sm-6">
           <div class="learn-more-sm blue">
             <h3 class="sm-title">Tiered APR</h3>
             <div class="sm-service-content">
               <p class="sm-description">Different levels of APR according to the deposit amount in the Flexible Products.</p>
             </div>
             <div class="service-icon">
               <span>
                  <img src="{{ asset('img/simple-earn/tiered-apr.svg') }}" alt="Wealthmark" >
               </span>
             </div>
           </div>
         </div>
         <div class="col-md-3 col-sm-6">
           <div class="learn-more-sm blue">
             <h3 class="sm-title">Auto-Subscribe</h3>
             <div class="sm-service-content">
               <p class="sm-description">Hassle-free automatic subscription for Flexible or Locked. </p>
             </div>
             <div class="service-icon">
               <span>
                  <img src="{{ asset('img/simple-earn/auto-subscribe.svg') }}" alt="Wealthmark" >
               </span>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
    



<section class="wm-pay-accordian-section">
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
           How does Simple Earn work?
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
              <div class="text"> Simple Earn allows users to earn daily rewards by depositing assets, either for flexible-term or locked-terms.</div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingTwo">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        When will I start earning?
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
               <div class="text">The first distribution of Rewards to your Spot wallet will be on the third day after you Subscribe, between 0:00 UTC to 08:00 UTC.</div>
              
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head" id="headingThree">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           How are the daily rewards calculated?
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="text">Rewards=your deposited assets*APR/365<br>
        *APR is subject to change, and may change on a daily basis.</div>
              </div>
            </div>
          </div>
          
          
          <div class="card">
            <div class="card-head" id="headingFour">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          What happens if I redeem my Locked Products early?
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
          <div class="text">You can redeem your assets anytime. But if you do this before the locked period ends, you’ll lose all rewards you have accrued. Any rewards recorded in your Spot wallet will be deducted from the asset you deposited, when you withdraw them.</div>     
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-head" id="headingfive">
              <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
         What is the difference between Fast Redemption and Standard Redemption for flexible-term products?
              </h2>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
              <div class="card-body">
          <div class="text">If you elect to redeem using Fast Redemption:</div>  
          <div class="text">Rewards will not be accrued or distributed to your Spot wallet for the day that you elect to redeem; and your saved assets will be returned to your Spot wallet immediately;</div>  
          <div class="text">If you elect to redeem using Standard Redemption:</div>  
          <div class="text">Rewards will be accrued and distributed to your Spot wallet for the day that you elect to redeem; and your saved assets will be returned to your Spot wallet within 24 hours of your request.</div>  
              </div>
            </div>
          </div>
  
  
</div>
</div>
</section>

<!--------------------------------modal-------------------------------------------------------------------------------->
<div id="autosubscribe_modal">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
          <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
        </svg>
        <div class="px-4 mt-5">
          <div class="mb-3 text-center">
            <img class="warning-img" src="{{ asset('img/warning.svg') }}">
          </div>
          <h3 class="title mb-3 text-center">Auto-Subscribe</h3>
          <div class="text"> Turning Auto-Subscribe on means your corresponding assets (including interests and new token purchases) in Spot Wallet will be transferred to Earn Wallet at 02:00 (UTC) and 16:00 (UTC) daily. You can find the Auto-Subscribe history under Wallets > Earn History > Flexible. </div>
          <div class="mt-5 mb-4">
            <a href="#" class="btn-yellow d-block text-center text-white"> I understand </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="subscribe_modal" class="simple-earn-tbl">
  <div class="hide">
    <div>
      <div class="wm-custom-modal-diolog">
        <div class="wm-custom-modal-body">
          <div class="subscribe_modal-main-div">
            <div class="subscribe_modal-left-div">
              <div class="subscribe_modal-select-coin-div">
                <div class="d-flex">
                  <div class="modal-select-coin-text">Subscribe</div>
                  <div class="modal-select-coin-img-div">
                    <img class="modal-select-coin-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                    <div class="ms-2">APE</div>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <div class="px-3 mb-3">
                  <span class="modal-select-coin-text">Duration (Days)</span>
                  <div class="simple-earn-duration mt-2">
                    <div class="simple-earn-day active">
                      <div class="simple-earn-text">Flexible</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">30</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">60</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">90</div>
                    </div>
                    <div class="simple-earn-day">
                      <div class="simple-earn-text">120</div>
                      <div class="sm-tbl-row-mob-svg-check">
                        <svg viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-1 px-3">
                  <div class="field crypto-rght-second-box">
                    <span class="modal-select-coin-text mb-2">Subscription amount</span>
                    <div class="input-wrap mt-2">
                      <div class="input-outer-div">
                        <input type="text" value="" class="inputbox">
                        <span class="input-span-text">MAX</span>
                      </div>
                      <div class="coin-select w-auto">
                        <div class="input-right-img-div">
                          <img id="Collateral-coin-img" src="{{ asset('img/coins/3222a10d-5618-4100-8476-ee7fe0a6fb12.png') }}" alt="BUSD" title="BUSD">
                        </div>
                        <span id="Collateral-coin-text" class="coin">Wm</span>
                      </div>
                    </div>
                    <div class="condition_error_msg"> ----------- show your condition msg here --------------- </div>
                  </div>
                </div>
                <div class="modal-coin-avail-div">
                  <div class="modal-select-coin-text">Amount Limits</div>
                  <div class="d-flex flex-wrap mt-2 justify-content-between">
                    <div class="d-flex flex-wrap me-2">
                      <div class="modal-coin-avail-title">Minimum:</div>
                      <div class="d-flex">0.1 OAX</div>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="modal-coin-avail-title">Available Quota:</div>
                      <div class="d-flex">60,000 OAX</div>
                    </div>
                  </div>
                </div>
                <div class="modal-conver-div-main">
                  <div class="d-flex">
                    <svg viewBox="0 0 24 24" fill="none" class="modal-conver-div-main-svg">
                      <path d="M12.011 2H12C6.472 2 2 6.472 2 12c0 5.527 4.472 10 10 10 5.516 0 9.988-4.473 10-9.989.012-5.527-4.461-10-9.989-10.011zm.998 16.984h-2.018v-2.007h2.018v2.007zm0-4.633h-2.018V5.005h2.018v9.346z" fill="currentColor"></path>
                    </svg>
                    <div class="modal-conver-div-main-txt">Don’t have enough crypto?</div>
                  </div>
                  <div class="modal-conver-div">
                    <div class="modal-conver-div-text">Convert</div>
                    <svg viewBox="0 0 24 24" fill="none" class="modal-conver-div-svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                    </svg>
                  </div>
                </div>
                <div class="Auto-Subscribe-main-div">
                  <div class="simple-earn-blnk-div ps-0">
                    <input type="checkbox" hidden="hidden" id="modal_username_1">
                    <label class="switch" for="modal_username_1"></label>
                  </div>
                  <div class="Auto-Subscribe-div">
                    <div class="d-flex">
                      <div class="modal-Auto-Subscribe-text">Auto-Subscribe</div>
                      <div class="Popular">Popular</div>
                    </div>
                    <div class="Auto-Subscribe-para">Enable Auto-Subscribe to automatically resubscribe to a product that has expired to its previous subscription immediately.</div>
                  </div>
                  <img src="{{ asset('img/simple-earn/auto-subscribe.svg') }}" class="Auto-Subscribe-img">
                </div>
              </div>
            </div>
            <div class="subscribe_modal-right-div">
              <div class="subscribe_modal-right-header">
                <div class="subscribe_modal-right-header-title">Summary</div>
              </div>
              <div class="subscribe_modal-right-body">
                <div class="custom-step-progress">
                  <div class="step-progress-frst-div">
                    <div class="d-flex">
                      <div class="custom-step-progress-bln-div">
                        <div class="step-progress-highlight-point"></div>
                        <div class="custom-step-progress-vertical-line"></div>
                      </div>
                      <div class="step-progress-title-div">
                        <div class="step-progress-title">Subscription Date</div>
                        <div class="modal-conver-div-main-txt">2022-12-16 10:42</div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="custom-step-progress-bln-div">
                        <div class="step-progress-highlight-point"></div>
                      </div>
                      <div class="step-progress-title-div">
                        <div class="step-progress-title">Value Date</div>
                        <div class="modal-conver-div-main-txt">2022-12-17 05:30</div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-end">
                    <div class="custom-step-progress-bln-div">
                      <div class="custom-step-progress-vertical-line-green"></div>
                      <div class="step-progress-highlight-point"></div>
                    </div>
                    <div class="step-progress-txt-div-2">
                      <div class="d-flex justify-content-between position-relative align-items-end ">
                        <div class="step-progress-title">Interest End Date</div>
                        <div class="modal-date-div">
                          <div class="modal-conver-div-main-txt">2023-01-07 05:30</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="custom-step-progress-bln-div">
                    <div class="custom-step-progress-vertical-line"></div>
                  </div>
                  <div class="d-flex">
                    <div class="step-progress-highlight-point"></div>
                    <div class="step-progress-txt-div">
                      <div class="step-progress-title">Redemption Date</div>
                      <div class="modal-date-div">
                        <div class="modal-conver-div-main-txt">2023-01-08 15:30</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-div2">
                  <div class="key ">Est. APR</div>
                  <div class="value">
                    <div class="key-value-profit">24.79%</div>
                  </div>
                </div>
                <div class="flex-div1">
                  <span class="key">Est. Interest</span>
                  <span class="key-value-profit">--</span>
                </div>
                <div class="subscribe_modal-dec-div">
                  <div class="subscribe_modal-dec-inner">
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">The APR is subject to change on a daily basis. Please refer to the details on the page.</div>
                    </div>
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">APR does not mean the actual or predicted returns in fiat currency.</div>
                    </div>
                    <div class="subscribe_modal-dec-block">
                      <svg viewBox="0 0 24 24" fill="none" class="subscribe_modal-dec-block-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.002 7H16l4-4v16l-4-4h-4v6H7v-6H4.002V7z" fill="currentColor"></path>
                      </svg>
                      <div class="subscribe_modal-dec-block-txt">Locked will return the subscribed digital assets to users’ spot wallets after the agreed period ends or early redemption, but the value of digital assets fluctuates and is subject to change.</div>
                    </div>
                  </div>
                </div>
                <div class="subscribe_modal-right-footer">
                  <div class="subscribe_modal-dec-inner">
                    <div class="subscribe_modal-check-box">
                      <label class="subscribe_modal-check-box-lbl">
                        <div class="subscribe_modal-check-box-input">
                          <input type="checkbox" id="subscribe_agree_checkbox">
                        </div>
                      </label>
                      <div class="">I have read and I agree to <a target="_blank" href="#" class="yellow-text">Wealthmark Simple Earn Service Agreement</a>
                      </div>
                    </div>
                  </div>
                  <button id="subscribe_confirm_btn" type="button" class="btn-default d-block w-100 border-0">Confirm</button>
                </div>
              </div>
            </div>
          </div>
          <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="convert_coin_modal">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
        <div class="wm-custom-modal-header">
          <span>Select Currency </span>
          <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
          </svg>
        </div>
        <div class="px-4">
          <div class="custom-step-progress-bln-div">
            <div class="d-flex align-items-center justify-content-end w-100 mb-3">
              <div class="text-gray">Spot Wallet</div>
            </div>
            <div class="coin-drop-down-div">
              <div class="coin-drop-down-div-inner" id="coinvert_coin_from">
                <div class="d-flex">
                  <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="coin-drop-down-div-inner-img" id="coinvert_coin_from_img">
                  <div class="coin-drop-down-div-inner-txt" id="coinvert_coin_from_text">USDT</div>
                </div>
                <svg viewBox="0 0 24 24" fill="none" class="modal-svg-down">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                </svg>
              </div>
              <div class="coin-drop-down-input-div">
                <input type="text" placeholder="1-170000" value="">
                <div class="coin-drop-down-input-div-txt">Balance: 0.00 USDT</div>
              </div>
            </div>
            <div class="bln-div-h-16"></div>
            <div class="mb-4 text-center w-100">
              <svg viewBox="0 0 24 24" fill="none" class="modal-svg-down" style="cursor: pointer;" id="swap_value">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3a9 9 0 110 18 9 9 0 010-18zm5 10l-5 5-5-5h3.75V6h2.5v7H17z" fill="currentColor"></path>
              </svg>
            </div>
            <div class="coin-drop-down-div">
              <div class="coin-drop-down-div-inner" id="coinvert_coin_to">
                <div class="d-flex">
                  <img src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}" class="coin-drop-down-div-inner-img" id="coinvert_coin_to_img">
                  <div class="coin-drop-down-div-inner-txt" id="coinvert_coin_to_text">APE</div>
                </div>
                <svg viewBox="0 0 24 24" fill="none" class="modal-svg-down">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                </svg>
              </div>
              <div class="coin-drop-down-input-div">
                <input type="text" placeholder="0.25-42000" value="">
              </div>
            </div>
            <div class="bln-div-h-16"></div>
            <div class="bln-div-h-16"></div>
            <button type="button" class="btn-yellow d-block w-100 border-0"> Enter Amount </button>
            <div class="bln-div-h-16"></div>
            <div class="bln-div-h-16"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="coin_list_modal">
  <div class="hide">
    <div class="wm-custom-modal-diolog">
      <div class="wm-custom-modal-body">
        <div class="wm-custom-modal-header">
          <span>Select Currency </span>
          <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
          </svg>
        </div>
        <div class="px-4 mb-5">
          <div class="lf-select_coin-to">
            <div class="wm-dropdown-div position-relative shadow-none  w-100 h-auto">
              <div class="p-3">
                <div class=" wm-dropdown-srch-div">
                  <div class="wm-input-prefix ">
                    <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-icn">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                    </svg>
                  </div>
                  <input type="text" class="wm-dropdown-search-input" value="">
                  <div class="wm-input-suffix ">
                    <svg viewBox="0 0 24 24" fill="none" class=" wm-dropdown-search-cross-icn">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                    </svg>
                  </div>
                </div>
              </div>
              <ul role="listbox" class="wm-dropdown-list wm-dropdown-list-css">
                <li role="option" id="16" title="16" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">BTC</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="17" title="17" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">BNB</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="14" title="14" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">ETH</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="32" title="32" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">USDT</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="34" title="34" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">Example-5</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="35" title="35" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">Example-4</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="36" title="36" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">coin-</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="37" title="37" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">Example-2</div>
                    </div>
                  </div>
                </li>
                <li role="option" id="38" title="38" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id)">
                  <div class="wm-dropdown-optn-item-inner">
                    <div class="wm-dropdown-optn-item-div">
                      <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                      <div class="wm-dropdown-optn-item-txt">Example-1</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--------------------------------------spinner-------------------------------------------------------------->
<!--<div id="spinner_overlay">-->
<!--  <div class="cv-spinner">-->
<!--    <span class="spinner"></span>-->
<!--  </div>-->
<!--</div>-->
<!--------------------------------------spinner-------------------------------------------------------------->
  @include('template.country_language')
@include('template.web_footer') 
    

 <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
           <script>
            function autosubscribe(e){let o=e;alert(o),$("#"+o).on("change",function(e){e.target.checked&&$("#autosubscribe_modal").children(".hide").addClass("custom-modal-bck-bg").removeClass("hide")})}function OpenModalSubcscribe(e){alert(e),$("#subscribe_modal").children().addClass("custom-modal-bck-bg").removeClass("hide")}function changeSrc2(e){let o=e;$("#coinvert_coin_from_img").attr("src",$("#"+o+" .wm-dropdown-optn-item-img").attr("src")),$("#coinvert_coin_from_text").html($("#"+o+" .wm-dropdown-optn-item-txt").html()),$("#coin_list_modal").children().addClass("hide").removeClass("custom-modal-bck-bg")}$(".simple-earn-day").click(function(){$(this).addClass("active"),$(this).children(".simple-earn-text").after('<div class="sm-tbl-row-mob-svg-check"> <svg viewBox="0 0 24 24" fill="none" class="sm-tbl-row-mob-check"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z" fill="currentColor"></path> </svg></div>'),$(this).siblings().removeClass("active")}),$(".wm-custom-modal-close").click(function(){$(this).parent().parent().parent().parent().addClass("hide").removeClass("custom-modal-bck-bg")}),$("#subscribe_agree_checkbox").on("change",function(e){e.target.checked?$("#subscribe_confirm_btn").addClass("btn-yellow").removeClass("btn-default"):$("#subscribe_confirm_btn").removeClass("btn-yellow").addClass("btn-default")}),$(function(){$(".search-div input").on("keyup",function(){var e=$(this).val().toLowerCase();$("#simple-earn-tbl-record .table-body").filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(e)>-1)}),$.ajax({type:"GET",success:function(e){console.log(e)}}).done(function(){setTimeout(function(){$("#spinner_overlay").fadeOut(300)},500)})})}),$(document).ajaxSend(function(){$("#spinner_overlay").fadeIn(300)}),$(".modal-conver-div").click(function(){$("#convert_coin_modal").children().addClass("custom-modal-bck-bg").removeClass("hide")}),$("#coinvert_coin_from").click(function(){$("#coin_list_modal").children().addClass("custom-modal-bck-bg").removeClass("hide")}),$.fn.swap=function(e){return e=e.jquery?e:$(e),this.each(function(){$(document.createTextNode("")).insertBefore(this).before(e.before(this)).remove()})},$("#swap_value").click(function(){$("#coinvert_coin_from_text").swap("#coinvert_coin_to_text"),$("#coinvert_coin_from_img").swap("#coinvert_coin_to_img")});
            </script>


    </body>
</html>























