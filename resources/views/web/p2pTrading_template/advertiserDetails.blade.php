<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{ asset('css/p2p_trading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    <style>
  
      

       
        </style>
   </head>
   <body>
   @include('template.web_menu')
  <div class="Liquid_Swap_bg-overlay h-auto">
          <div class="container">
              <div class="tab-pills-div-top">
                  <div class="tab-pills-div-top-left overflow-auto h-auto">
                      <a href="javascript:void(0)" class="lp-link-top" id="Express_section" >
                          <div class="lp-link-top-block">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Express</div>
                              </div>
                          </div>
                      </a>
                      <a href='{{ url(app()->getLocale())."/p2p-trading" }}' class="lp-link-top" id="P2P_section">
                          <div class="lp-link-top-block active">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">P2P</div>
                              </div>
                          </div>
                      </a>
                      
                      <a href="javascript:void(0)" class="lp-link-top" id="group_section">
                          <div class="lp-link-top-block">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Group</div>
                              </div>
                          </div>
                      </a>
                      
                      <a href="javascript:void(0)" class="lp-link-top" id="block__section">
                          <div class=" lp-link-top-block ">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Block</div>
                                  
                              </div>
                          </div>
                      </a>

                   
                    </div>
                    <div class="tab-pills-div-top-right justify-content-end">
                            <nav id="p2p-nav-exapnd" class="navbar navbar-expand-lg p-0 w-100">
                    
                                <ul class="navbar-nav w-100">
                                  <li class="nav-item dropdown  d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                      <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                      </svg>
                                      <span class="" > User Guide</span>
                                    </a>
                                    <ul class="dropdown-menu  fade-down">
                                      <li>
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.896 3h14v18h-14V3zm11 13v2h-8v-2h8zm-8-3h8V6h-8v7zm6-5h-4v3h4V8z" fill="currentColor"></path></svg>
                                            <div class="d-block">
                                              <span> Beginners Guide</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                       <li>
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 12a9 9 0 1118 0 9 9 0 01-18 0zm8.934 3.5H10v-7h1.934L16 12l-4.066 3.5z" fill="currentColor"></path></svg>
                                            <div class="d-block">
                                              <span> Video tutorial</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                       <li>
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                           <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path d="M11 8.2a4 4 0 00-4-4H3v14h5.16c1.193 0 2.243.635 2.86 1.6h1.96c.617-.965 1.668-1.6 2.86-1.6H21v-14h-4a4 4 0 00-4 4v8h-2v-8z" fill="currentColor"></path></svg>
                                            <div class="d-block">
                                              <span> P2P Trading FAQ</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                @if(Auth::check()) 
                                  <li class="nav-item no-dropdown-arrow p2p-order-tab d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle position-relative" href="javascript:void(0);" >
                                      <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path></svg>
                                      <span class=""> Orders</span>
                                      <span id="order-countdown" class="order-countdown" style="display: none;">1</span>
                                    </a>
                                    <ul class="dropdown-menu  fade-down" >
                                        <div class="header-div">
                                            <div class="fs-18 min-width-150px">
                                              Processing
                                            </div>
                                           <a onclick="checkuser()" class="yellow-text fs-14 p-0">
                                                View&nbsp;All
                                            </a>
                                        </div>
                                        <div class="body-div">
                                            
                                                <div class="p2p-no-active-order">
                                                        <img src="{{ asset('img/p2p-trading/empty-list.svg') }}">
                                                        <div class="fs-16 text-muted mt-3">
                                                            No Active Orders
                                                        </div>
                                                </div>
                                            
                                            
                                               <!--<div class="timer-div-section"> </div>-->
                                                <div id="hide-when-no-order" class="hide-when-no-order">
                                                        <div class="timer">
                                                            <span id="timer" >0</span>
                                                        </div>
                                                        
                                                        <p class="d-block fs-14 text-black mt-4">
                                                            Complete your Order within 15 minutes 
                                                        </p>
                                                    </div>
                                                
                                            
                                               
                                        </div>
                                        
                                      
                                    </ul>
                                  </li>
                                  <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link" href="javascript:void(0);">
                                        <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M15 4h6v4.5h-2.5v-2H15V4zM5.833 9.998A2.333 2.333 0 003.5 12.331v1.667h8v-1.667a2.333 2.333 0 00-2.333-2.333H5.833zm9 6.002a2.333 2.333 0 00-2.333 2.333V20h8v-1.667A2.333 2.333 0 0018.167 16h-3.334zM9 17.5H5.5v-2H3V20h6v-2.5zm10-4.998a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM7.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" fill="currentColor"></path>
                                        </svg>
                                        <span class="">
                                              P2P&nbsp;User&nbsp;Center
                                        </span>
                                    </a>
                                    </li>
                                  <li class="nav-item dropdown  ">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                       
                                        <svg  viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM8.75 10.75h-2.5v2.5h2.5v-2.5zm9 0h-2.5v2.5h2.5v-2.5zm-7 0h2.5v2.5h-2.5v-2.5z" fill="currentColor"></path></svg>
                                        <span class="hide-mas-576">
                                          More
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu fade-down">
                                        <li>
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 4h6v4.5h-2.5v-2H15V4zM5.833 9.998A2.333 2.333 0 003.5 12.331v1.667h8v-1.667a2.333 2.333 0 00-2.333-2.333H5.833zm9 6.002a2.333 2.333 0 00-2.333 2.333V20h8v-1.667A2.333 2.333 0 0018.167 16h-3.334zM9 17.5H5.5v-2H3V20h6v-2.5zm10-4.998a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM7.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" fill="currentColor"></path>
                                            </svg>
                                            <div class="d-block">
                                              <span> P2P User Center</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                      <li class="d-lg-none">
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3v18h14V7l-4-4H5zm3 6.5h8V12H8V9.5zm0 5h8V17H8v-2.5z" fill="currentColor"></path>
                                            </svg>
                                            <div class="d-block">
                                              <span> Orders</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                      <li class="nested-dropdown d-lg-none">
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                              <div>
                                                <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>  
                                                </svg>
                                                <span> Payment Methods</span>
                                            </div>
                                            <span>
                                                <svg class="p2p-dropdown-svg" viewBox="0 0 24 24" fill="none" class="css-1jt6gp1"><path d="M15.5 10.29v1.75L12 15.75l-3.5-3.71v-1.75h7z" fill="currentColor"></path></svg>
                                            </span>
                                           </div>
                                        </a>
                                        <ul class="nested-dropdown-menu" style="display:none">
                                            <li>
                                                <a class="nested-dropdown-item" href="#">
                                                    <i class="bi bi-arrow-right-short"></i>
                                                    <span> Beginners Guide</span>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="nested-dropdown-item" href="#">
                                                    <i class="bi bi-arrow-right-short"></i>
                                                    <span> Video tutorial</span>
                                                </a>
                                             </li>
                                             <li>
                                                <a class="nested-dropdown-item" href="#">
                                                   <i class="bi bi-arrow-right-short"></i>
                                                   <span> P2P Trading FAQ</span>
                                                </a>
                                             </li>
                                        </ul>
                                      </li>
                                      <li class="d-lg-none">
                                        <a class="dropdown-item" href="#">
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path d="M11.336 8.577c-.769.15-1.1.558-1.1 1.146 0 .573.331.874 1.1 1.086V8.577zM12.678 15.393c.71-.196 1.041-.663 1.041-1.236 0-.438-.18-.89-1.04-1.147v2.383z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zm.86-3.948V18.5h-1.72v-1.387c-1.523-.136-2.533-.755-3.287-1.584l1.357-1.237c.573.604 1.282 1.01 2.126 1.131V12.71c-2.262-.468-3.182-1.463-3.182-2.926 0-1.583 1.04-2.64 2.986-2.865V5.5h1.72v1.418c1.206.135 2.096.603 2.76 1.357l-1.373 1.237c-.362-.408-.845-.74-1.569-.905v2.503c2.112.483 3.122 1.342 3.122 2.88 0 1.479-.935 2.73-2.94 3.062z" fill="currentColor"></path></svg>
                                            <div class="d-block">
                                              <span> User Guide</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                       <li>
                                        <a class="dropdown-item" href='{{ url(app()->getLocale())."/post-ads" }}'>
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path d="M13.5 3h-3v7.5H3v3h7.5V21h3v-7.5H21v-3h-7.5V3z" fill="currentColor"></path></svg>
                                            <div class="d-block">
                                              <span> Post new Ad</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                       <li>
                                        <a class="dropdown-item" href='{{ url(app()->getLocale())."/my-ads" }}'>
                                          <div class="d-flex align-items-center">
                                            <svg viewBox="0 0 24 24" fill="none" class="p2p-dropdown-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 3h14v18l-3.5-3-3.5 3-3.5-3L5 21V3zm3 4h4v2.5H8V7zm4 5H8v2.5h4V12zm2-5h2.5v2.5H14V7zm2.5 5H14v2.5h2.5V12z" fill="currentColor"></path></svg>
                                            <div class="d-block">
                                              <span> My ads</span>
                                            </div>
                                           </div>
                                        </a>
                                      </li>
                                      
                                      
                                    </ul>
                                  </li>
                                @endif 
                                
                                
                             
                                
                                
                                
                                
                                
                                </ul>
                              </nav>
              
                            <!--<div class="d-lg-none">-->
                            <!--    <svg data-trigger="p2p-nav-exapnd" viewBox="0 0 24 24" fill="none" class="css-xbhv3i">-->
                            <!--        <path d="M15.5 10.29v1.75L12 15.75l-3.5-3.71v-1.75h7z" fill="currentColor"></path>-->
                            <!--    </svg>-->
                            <!--</div>-->
                      
                     </div>
              </div>
          </div>
      </div>
   
   
    <div class="p-3 bg-light-blue">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="text-right">
                     <a href="javascript:void(0)" >Back</a>
                 </div>
                 
    <!--========================================================================================================================            -->             
                 
                 <div class="userDetailsSection">
                     <span class="userNameFirstLater">
                         M
                     </span>
                     <div>
                        <div class="first">
                             <span class="userName">Maan Singh</span>
                             <div>
                             <span class="userStatus">
                                 <span><i class="bi bi-patch-check-fill"></i></span>
                                 <span>Verified Merchant</span>
                             </span>
                             </div><div>
                             <span class="followStatus">
                                 <i class="bi bi-plus"></i>
                                 <span class="me-1">Follow</span>
                             </span>
                             <span class="Action yellow-text">
                                 <span>Block</span>
                                 <span class="mx-1">|</span>
                                 <span>Report    </span>
                             </span>
                         </div></div>
                        <div class="second">
                             <span class="last-seen">
                                 <span>Last seen</span>
                                 <span class="time">3m</span>
                                 <span>ago</span>
                             </span>
                             <span>|</span>
                             <span class="last-seen">
                                 <span>Joined on</span>
                                 <span class="date">2021-02-03</span>
                                
                             </span>
                             <span>|</span>
                             <span class="last-seen">
                                 <span>Deposit</span>
                                 <span class="currency">15,000.00</span>
                                 <span>BUSD</span>
                             </span>
                         </div>
                        <div class="third">
                             <span class="last-seen">
                                <span>Email</span>
                                <span class="text-green"><i class="bi bi-check-circle-fill"></i></span>
                             </span>
                             
                             <span class="last-seen">
                                 <span>SMS</span>
                                 <span class="text-green"><i class="bi bi-check-circle-fill"></i></span>
                                
                             </span>
                             <span class="last-seen">
                                <span>ID Verification</span>
                                <span class="text-green"><i class="bi bi-check-circle-fill"></i></span>
                             </span>
                         </div>
                     </div>
                 </div>
                
    <!--========================================================================================================================            -->
                <div class="userOrderHistory">
                     <div class="block">
                         <div>
                             <span>All Trades</span>
                             <span class="cursor-pointer p-1 d-inline-block cursor-pointer text-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Total number of completed P2P orders (buy and sell included)">
                                  <i class="bi bi-info-circle-fill ms-1 cursor-pointer"></i>
                             </span>
                            
                         </div>
                         <div>
                         <div class="">
                             <span>1529</span>
                             <span>Time(s)</span>
                         </div>
                         <div>
                             <span class="text-green fs-12">Buy 12</span>
                             <span class="mx-1">/</span>
                             <span class="text-red fs-12">Sell 517</span>
                         </div>
                         </div>
                     </div>
                     <div class="block">
                         <div>
                             <span>30d Trades</span>
                             <span class="cursor-pointer p-1 d-inline-block cursor-pointer text-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Total number of completed P2P orders (buy and sell included) in the past 30 days.">
                                  <i class="bi bi-info-circle-fill" ></i>
                             </span>
                            
                         </div>
                         <div class="">
                             <span>529</span>
                             <span>Time(s)</span>
                         </div>
                         
                     </div>
                     <div class="block">
                         <div>
                             <span>30d Completion Rate</span>
                             <span class="cursor-pointer p-1 d-inline-block cursor-pointer text-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Completion date = Trades/Orders(30d)*100%">
                                 <i class="bi bi-info-circle-fill"></i>
                             </span>
                             
                         </div>
                         <div class="">
                             <span>100.00</span>
                             <span>%</span>
                         </div>
                        
                     </div>
                     <div class="block">
                         <div>
                             <span>Avg. Release Time</span>
                             <span class="cursor-pointer p-1 d-inline-block cursor-pointer text-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="The average time taken(in the last 30 days) to release crypto assets as the seller in orders.">
                                  <i class="bi bi-info-circle-fill"></i>
                             </span>
                            
                         </div>
                         <div class="">
                             <span>0.54</span>
                             <span>Minute(s)</span>
                         </div>
                        
                     </div>
                     <div class="block">
                         <div>
                             <span>Avg. Pay Time</span>
                             <span class="cursor-pointer p-1 d-inline-block cursor-pointer text-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="The average time taken (in the last 30 days) to complete payment as the buyer in orders.">
                                  <i class="bi bi-info-circle-fill"></i>
                             </span>
                            
                         </div>
                         <div class="">
                             <span>0.50</span>
                             <span>Minute(s)</span>
                         </div>
                         
                     </div>
                     <div class="block" >
                         <span class="more" data-target-modal="moreInfo" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View more">
                             <i class="bi bi-three-dots-vertical"></i>
                         </span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>     
 <div class="p-3">
     <div class="container">
               
               <div class="mb-3">
                   <span class="bg-light-theme py-2 px-4 min-width-100px yellow-text rounded d-inline-block">
                       Online Ads
                   </span>
               </div>
               
               
                <div class="dashboard-tabpills">
              
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active click" id="normal">Normal (1)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link click" id="cash"> Cash (0)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link click" id="Block">Block (0)</button>
                            </li>
                       </ul>
    
                        <div class="lodaContent">
                            
                            <div class="p-2 mt-3 fs-5 text-black">
                                <span>Buy from the users</span>
                            </div>
                          <div class="p2p-tbl-record" id="77">
                             
                            <div class="first p2p-tbl-record-body">
                            <div class="block one flex-row">
                                             <span class="buyer_name_first">O</span>
                                                <div>
                                                    <div class="position-relative">
                                               <span class="buyer_name">
                                                                                                      
                                                        Omprakas
                                                                                                      
                                            </span>
                                                                                                <span class="user-login-status offline" id="onlinestatus">
                                                    <span class="dot"></span>
                                                    <span>offline</span>
                                                </span>
                                            </div>
                                                    <div class="buyer_order_completion ">
                                                <span class="sub-title order-count text-muted">1  orders  </span>
                                                <span class="sub-title order-completion text-muted">20 % completion</span>
                                            </div>
                                                    <div class="second">
                                                        <div>
                                                                                                                <span class=" payment-type-txt buyer_payment_type">UPI</span>
                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="block two">
                                            <div>  
                                                <span class="p2p-tbl-record-body-title">Price</span>
                                            </div>   
                                            <div>
                                                <span class="sub-title buyer_cr_value">60.78274830 </span>
                                                <span class="sub-title buyer_cr_type">INR</span>
                                            </div>
                                            
                                        </div>
                                        <div class="block three">
                                            <div>  
                                                <span class="p2p-tbl-record-body-title">Available</span>
                                                <span class="subTitle">
                                                        <span class="total-coin">1</span>
                                                        <span>BMK</span>
                                                </span>
                                            </div>   
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Limit</span>
                                                <span class="sub-title">
                                                    <span class="">₹1 </span>
                                                    <span class="">-</span>
                                                    <span class="crypto-total-coin-type">₹60.78274830</span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <div class="block four">
                                            <div class="block">
                                            <div>  
                                                <span class="p2p-tbl-record-body-title">Payment</span>
                                            </div>   
                                            <div id="paymentId">
                                                                                                    <span class=" payment-type-txt buyer_payment_type-2">UPI</span>
                                                                                           </div>
                                        </div>
                                        </div>
                                        <div class="block five buyer_Crypto_type">
                                            
                                            <a href="javascript:void(0)" class="actn-btn buy" onclick="Buy_bmk(this.id)" id="Buy_bmk_77">
                                                
                                                <span>Buy BMK</span>
                                            </a>
                                        </div>
                                        
                                </div>
                                
                            </div>
                           
                             <div class="p-2 mt-3 fs-5 text-black">
                                <span>Sell to the user</span>
                            </div>
                           <div class="p2p-tbl-record" id="77">
                             
                            <div class="first p2p-tbl-record-body">
                            <div class="block one flex-row">
                                             <span class="buyer_name_first">O</span>
                                                <div>
                                                    <div class="position-relative">
                                               <span class="buyer_name">
                                                                                                      
                                                        Omprakas
                                                                                                      
                                            </span>
                                                                                                <span class="user-login-status offline" id="onlinestatus">
                                                    <span class="dot"></span>
                                                    <span>offline</span>
                                                </span>
                                            </div>
                                                    <div class="buyer_order_completion ">
                                                <span class="sub-title order-count text-muted">1  orders  </span>
                                                <span class="sub-title order-completion text-muted">20 % completion</span>
                                            </div>
                                                    <div class="second">
                                                        <div>
                                                                                                                <span class=" payment-type-txt buyer_payment_type">UPI</span>
                                                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="block two">
                                            <div>  
                                                <span class="p2p-tbl-record-body-title">Price</span>
                                            </div>   
                                            <div>
                                                <span class="sub-title buyer_cr_value">60.78274830 </span>
                                                <span class="sub-title buyer_cr_type">INR</span>
                                            </div>
                                            
                                        </div>
                                        <div class="block three">
                                            <div>  
                                                <span class="p2p-tbl-record-body-title">Available</span>
                                                <span class="subTitle">
                                                        <span class="total-coin">1</span>
                                                        <span>BMK</span>
                                                </span>
                                            </div>   
                                            <div>
                                                <span class="p2p-tbl-record-body-title">Limit</span>
                                                <span class="sub-title">
                                                    <span class="">₹1 </span>
                                                    <span class="">-</span>
                                                    <span class="crypto-total-coin-type">₹60.78274830</span>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <div class="block four">
                                            <div class="block">
                                            <div>  
                                                <span class="p2p-tbl-record-body-title">Payment</span>
                                            </div>   
                                            <div id="paymentId">
                                                                                                    <span class=" payment-type-txt buyer_payment_type-2">UPI</span>
                                                                                           </div>
                                        </div>
                                        </div>
                                        <div class="block five buyer_Crypto_type">
                                            
                                            <a href="javascript:void(0)" class="actn-btn buy" onclick="Buy_bmk(this.id)" id="Buy_bmk_77">
                                                
                                                <span>Buy BMK</span>
                                            </a>
                                        </div>
                                        
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
     </div>
 </div>
 
    <div id="moreInfo">
        <div class="hide">
            <div class="wm-custom-modal-diolog bg-black max-width-450px">
                <div class="">
                    <div class="wm-custom-modal-header">
                        <span class="text-white">Trade Info</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body p-3"> 
                    <div class="info">
                        <div>All Trades</div>
                        <div>
                            <div>
                                <span>1688</span>
                                <span>Time(s)</span>
                            </div>
                            <div>
                                <span class="buy fs-12 text-green">Buy 2</span>
                                <span class="mx-1 fs-12">/</span>
                                <span class="sell fs-12 text-red">Sell 1686</span>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div>30d Trades</div>
                        <div>
                            <div>
                                <span>1688</span>
                                <span>Time(s)</span>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div>30d Completion Rate</div>
                        <div>
                            <div>
                                <span>100.00</span>
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div>Avg. Release Time</div>
                        <div>
                             <div>
                                <span>0.50</span>
                                <span>Minute(s)</span>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div>Avg. Pay Time</div>
                        <div>
                            <div>
                                <span>0.50</span>
                                <span>Minute(s)</span>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div>First Trade</div>
                        <div>
                            <div>
                                <span>174</span>
                                <span>Day(s) Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('template.web_footer')
    
    
    <script>
        
        $(function() {
            $('.dashboard-card-body .click').click(function(e){
            $('.dashboard-card-body').find('.nav-link').removeClass('active');
            $(this).addClass("active");
            window.localStorage.setItem('activeTab', $(e.target).attr('id'));
        })
        var activeTab = window.localStorage.getItem('activeTab');
		    $('.dashboard-card-body').find('.nav-link').removeClass('active');
            $("#" + activeTab).addClass('active');

        });

    </script>
    
    
    </body>
    </html>






