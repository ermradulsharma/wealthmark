<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')
      <style>
         .otc-Onboarding-Procedure {
         overflow: visible!important;
         }
         .sec-title {
         z-index: 0;
         }
         .btn-blue:hover{
         cursor:pointer;
         }
         .otc-doc-div {
         overflow-x: auto;
         }
         .col-md-12.mt-3.otc-content {
         box-shadow: 0px 0px 1px 2px #d9d9d9;
         }
         .table-content.current {
         padding: 25px;
         }
         .otc-Procedure-block {
         border-radius: 100px;
         }
         .otc-Procedure-block{
         position:relative;
         cursor:pointer;
         }
         .otc-read-more-wrapper {
         position: absolute;
         top: 86%;
         min-height: 200px;
         min-width: 200px;
         text-align: center;
         }
         .otc-Procedure-block:hover .otc-read-more-wrapper{
         transform: translateY(30px);
         cursor:pointer;
         }
         .otc-Procedure-block {
         margin: 20px 0px;
         }
         .otc-Onboarding-Procedure {
         flex-wrap: wrap;
         justify-content: start;
         }
         @media(max-width:1024px){
         .otc-Procedure-icon-div {
         display: none;
         }
         .otc-Procedure-block {
         margin: 20px 10px;
         }
         }
         @media(max-width:768px){
         .otc-Procedure-block {
         height: 200px;
         width: 213px;
         }
         }
         @media(max-width:576px){
         .otc-trading-tab-nav{
         display: flex;
         flex-wrap: nowrap;
         overflow-x: scroll;
         }
         .otc-Procedure-block {
         margin: 30px 10px;
         }
         .otc-trading-tab-nav .nav-link{
         width: 205px!important;
         }
         #pills-tab::-webkit-scrollbar {
         width: 3px;
         height:4px;
         }
         #pills-tab ::-webkit-scrollbar-track {
         box-shadow: inset 0 0 5px grey;
         border-radius: 10px;
         }
         #pills-tab::-webkit-scrollbar-thumb {
         background: rgb(154, 154, 154);
         border-radius: 10px;
         }
         #otc-Onboarding-Procedure-block::-webkit-scrollbar {
         width: 3px;
         height:4px;
         }
         #otc-Onboarding-Procedure-block::-webkit-scrollbar-track {
         box-shadow: inset 0 0 5px grey;
         border-radius: 10px;
         }
         #otc-Onboarding-Procedure-block::-webkit-scrollbar-thumb {
         background: rgb(154, 154, 154);
         border-radius: 10px;
         }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <section class="breadcrumbs shadow-sm otc-trading-top">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 col-sm-10   d-flex flex-column justify-content-center  order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="top-heading m-0 p-0 mb-3 fs-2">Wealthmark OTC and Execution Solutions</h1>
                  <p class="top-p">Wealthmark OTC and Execution Solutions platform is dedicated to serving private and institutional clients with the professional services and cutting-edge technology.</p>
                  <p class="top-p">The prime choice for block trades, secure settlement and competitive pricing.</p>
                  <div>
                     <a href="#" class="btn btn-blue shadow mt-4"> Start Trading</a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-8 pt-5 pb-5  order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{ asset('img/otcTrading/otc-cover-graphic.png') }}" class="img-fluid animated" alt="Wealthmark OTC and Execution Solutions" title="Wealthmark OTC and Execution Solutions" >
               </div>
            </div>
         </div>
      </section>
      <section class="Onboarding_Procedure">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-title text-left mb-2">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Onboarding Procedure</h2>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="otc-Onboarding-Procedure" id="otc-Onboarding-Procedure-block">
                     <div class="otc-Procedure-block">
                        <div class="otc-Procedure-block-inner">
                           <img src="{{ asset('img/otcTrading/signup.png') }}" class="otc-Procedure-block-profile" alt="Open Wealthmark account and finish KYC" title="Open Wealthmark account and finish KYC" >
                           <div class="otc-Procedure-block-title">Signup</div>
                           <div class="otc-Procedure-block-sbtitle">Open Wealthmark account and finish KYC</div>
                        </div>
                        <div class="otc-read-more-wrapper">
                           <a class="btn btn-yellow shadow">View More</a>
                        </div>
                     </div>
                     <div class="otc-Procedure-icon-div">
                        <svg  viewBox="0 0 24 24" fill="none" class="otc-Procedure-icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <div class="otc-Procedure-block">
                        <div class="otc-Procedure-block-inner">
                           <img src="{{ asset('img/otcTrading/communicate.png') }}" class="otc-Procedure-block-profile" alt="Request for quote from OTC traders" title="Request for quote from OTC traders" >
                           <div class="otc-Procedure-block-title">Communicate</div>
                           <div class="otc-Procedure-block-sbtitle">Request for quote from OTC traders</div>
                        </div>
                        <div class="otc-read-more-wrapper">
                           <a class="btn btn-yellow shadow">View More</a>
                        </div>
                     </div>
                     <div class="otc-Procedure-icon-div">
                        <svg  viewBox="0 0 24 24" fill="none" class="otc-Procedure-icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <div class="otc-Procedure-block">
                        <div class="otc-Procedure-block-inner">
                           <img src="{{ asset('img/otcTrading/confirm.png') }}" class="otc-Procedure-block-profile" alt="Agree on the price of the quote" title="Agree on the price of the quote" >
                           <div class="otc-Procedure-block-title">Confirm</div>
                           <div class="otc-Procedure-block-sbtitle">Agree on the price of the quote</div>
                        </div>
                        <div class="otc-read-more-wrapper">
                           <a class="btn btn-yellow shadow">View More</a>
                        </div>
                     </div>
                     <div class="otc-Procedure-icon-div">
                        <svg  viewBox="0 0 24 24" fill="none" class="otc-Procedure-icon">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                     </div>
                     <div class="otc-Procedure-block">
                        <div class="otc-Procedure-block-inner">
                           <img src="{{ asset('img/otcTrading/settlement.png') }}" class="otc-Procedure-block-profile" alt="Trades directly settled into your wallet" title="Trades directly settled into your wallet" >
                           <div class="otc-Procedure-block-title">Settlement</div>
                           <div class="otc-Procedure-block-sbtitle">Trades directly settled into your wallet</div>
                        </div>
                        <div class="otc-read-more-wrapper">
                           <a class="btn btn-yellow shadow">View More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-12">
                  <div class="sec-title text-left mb-2">
                     <span class="title">Wealthmark's</span>
                     <h2 class="heading-h2"> OTC Features and Advantages</h2>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12">
                  <img src="{{ asset('img/otcTrading/otc-features-graphics.svg') }}" class="img-fluid max-width-400px" alt="Onboarding Process"  title="Onboarding Process">
               </div>
               <div class="col-md-8 col-sm-12">
                  <div class="why-otc-div">
                     <div class="why-otc-block">
                        <div class="why-otc-block-icn-div">
                           <img src="{{ asset('img/otcTrading/trade-asset.svg') }}" class="otc-Procedure-block-profile" alt="Trade Any Asset to Any Asset"title="Trade Any Asset to Any Asset" >
                        </div>
                        <div class="">
                           <div class="why-otc-block-title">Trade Any Asset to Any Asset</div>
                           <div class="why-otc-block-sbtitle">Support 350+ cryptos, stablecoins, and fiat pairs listed on the wealthmark or any synthetic cross pairs.</div>
                        </div>
                     </div>
                     <div class="why-otc-block">
                        <div class="why-otc-block-icn-div">
                           <img src="{{ asset('img/otcTrading/fast-competitive.svg') }}" class="otc-Procedure-block-profile" alt="Fast & Competitive Pricing" title="Fast & Competitive Pricing" >
                        </div>
                        <div class="">
                           <div class="why-otc-block-title">Fast &amp; Competitive Pricing</div>
                           <div class="why-otc-block-sbtitle">Access competitive and firm pricing without the need to trade on order books.</div>
                        </div>
                     </div>
                     <div class="why-otc-block">
                        <div class="why-otc-block-icn-div">
                           <img src="{{ asset('img/otcTrading/global-real-time.png') }}" class="otc-Procedure-block-profile" alt="Global Real-time Support" title="Global Real-time Support" >
                        </div>
                        <div class="">
                           <div class="why-otc-block-title">Global Real-time Support</div>
                           <div class="why-otc-block-sbtitle">Powered by in-house technology, get real-time responses for immediate trading needs in fast markets.</div>
                        </div>
                     </div>
                     <div class="why-otc-block">
                        <div class="why-otc-block-icn-div">
                           <img src="{{ asset('img/otcTrading/best-in-class.svg') }}" class="otc-Procedure-block-profile" alt="Best-In-Class Services" title="Best-In-Class Services" >
                        </div>
                        <div class="">
                           <div class="why-otc-block-title">Best-In-Class Services</div>
                           <div class="why-otc-block-sbtitle">Access best-in-class service from our team with experience from top global investment banks and exchanges.</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="dashboard-tabpills">
               <div class="">
                  <div class="dashboard-card-body">
                     <ul class="nav nav-pills my-1 border-bottom otc-trading-tab-nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Block Trading</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">API - RFQ and RFS Solutions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link " id="pills-margin-tab" data-bs-toggle="pill" data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin" aria-selected="true">Execution Algos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="pills-futures-tab" data-bs-toggle="pill" data-bs-target="#pills-futures" type="button" role="tab" aria-controls="pills-futures" aria-selected="false">Wealthmark Convert</button>
                        </li>
                     </ul>
                     <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">
                           <div class="row align-items-center">
                              <div class="content-column col-lg-7 col-md-6 col-sm-12 order-2 pt-4">
                                 <div class="inner-column">
                                    <div class="sec-title">
                                       <span class="title">Welcome to Wealthmark</span>
                                       <h2 class="heading-h2">Wealthmark OTC Products</h2>
                                    </div>
                                    <div class="text">For trade sizes USD$200,000 equivalent and above, get a quote and execute trades via verified communication channels.</div>
                                    <div class="mt-3">
                                       <a href="#" class="btn-yellow">
                                       Start Trading Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Image Column -->
                              <div class="image-column col-lg-5 col-md-6 col-sm-12 text-center p-4">
                                 <img src="{{ asset('img/otcTrading/block-trading.png') }}" class="img-fluid  w-100" alt="Block Trading" title="Block Trading">
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">
                           <div class="row align-items-center">
                              <div class="content-column col-lg-7 col-md-6 col-sm-12 order-2 pt-4">
                                 <div class="inner-column">
                                    <div class="sec-title">
                                       <span class="title">Welcome to Wealthmark</span>
                                       <h2 class="heading-h2">Wealthmark OTC Products</h2>
                                    </div>
                                    <div class="text">Connect directly via REST API for both request-for-quote (RFQ) and live streaming prices/request-for-stream (RFS) trading solutions. Integrate our pricing seamlessly into your platforms.</div>
                                    <div class="mt-3">
                                       <a href="#" class="btn-yellow">
                                       Start Trading Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Image Column -->
                              <div class="image-column col-lg-5 col-md-6 col-sm-12 text-center p-4">
                                 <img src="{{ asset('img/otcTrading/api-rfq-solutions.svg') }}" class="img-fluid  w-50" alt="API RFQ and RFS Solutions" title="API RFQ and RFS Solutions">
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade " id="pills-margin" role="tabpanel" aria-labelledby="pills-margin-tab">
                           <div class="row align-items-center">
                              <div class="content-column col-lg-7 col-md-6 col-sm-12 order-2 pt-4">
                                 <div class="inner-column">
                                    <div class="sec-title">
                                       <span class="title">Welcome to Wealthmark</span>
                                       <h2 class="heading-h2">Wealthmark OTC Products</h2>
                                    </div>
                                    <div class="text">Sophisticated TWAP and volume-based execution algorithms built on robust quantitative design to minimize slippage, market impact and adverse selection for large positions and illiquid assets.</div>
                                    <div class="mt-3">
                                       <a href="#" class="btn-yellow">
                                       Start Trading Now
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Image Column -->
                              <div class="image-column col-lg-5 col-md-6 col-sm-12 text-center p-4">
                                 <img src="{{ asset('img/otcTrading/execution-algos-.svg') }}" class="img-fluid  w-100" alt="Execution algo" title="Execution algo">
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade " id="pills-futures" role="tabpanel" aria-labelledby="pills-futures-tab">
                           <div class="row align-items-center">
                              <div class="content-column col-lg-7 col-md-6 col-sm-12 order-2 pt-4">
                                 <div class="inner-column">
                                    <div class="sec-title">
                                       <span class="title">Welcome to Wealthmark</span>
                                       <h2 class="heading-h2">Wealthmark OTC Products</h2>
                                    </div>
                                    <div class="text">An immediate and simple way to execute your trades via our GUI, with zero exchange fees and slippage</div>
                                    <div class="mt-3">
                                       <a href="#" class="btn-yellow">
                                       Start Convert
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Image Column -->
                              <div class="image-column col-lg-5 col-md-6 col-sm-12 text-center p-4">
                                 <img src="{{ asset('img/otcTrading/wm-product.svg') }}" class="img-fluid  w-100" alt="Wealthmark Convert" title="Wealthmark Convert">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-light-blue mb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12  col-sm-12">
                  <div class="sec-title text-center">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">Settlement and Credit Lines</h2>
                     <div class="text">
                        Get access to trading without the need for pre-funding and customized post-trade settlement solutions to optimize capital efficiency. With the flexibility of credit lines, start trading immediately before moving funds into wallets, or access funds within wallets to trade across the OTC product suite.
                     </div>
                  </div>
               </div>
               <div class="col-md-12  col-sm-12">
                  <img src="{{ asset('img/otcTrading/settlement-credit-lines.svg') }}" class="w-100 h-100" alt="Settlement and Credit Lines" title="Settlement and Credit Lines" >
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12  col-sm-12">
                  <div class="sec-title text-center">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">OTC Trading Terms</h2>
                  </div>
               </div>
               <div class="col-md-12 mt-2 otc-doc-div scrollbar-style">
                  <ul class="tabs">
                     <li class="tab-link btn-blue current" data-tab="tab-1"> Acceptance  </li>
                     <li class="tab-link btn-blue" data-tab="tab-2">Services in General </li>
                     <li class="tab-link btn-blue" data-tab="tab-3"> OTC Services </li>
                     <li class="tab-link btn-blue" data-tab="tab-4">Fees </li>
                     <li class="tab-link btn-blue" data-tab="tab-5"> Representations and Warranties</li>
                     <li class="tab-link btn-blue" data-tab="tab-6"> Limitation of Liability </li>
                  </ul>
               </div>
               <div class="col-md-12 otc-content">
                  <div id="tab-1" class="table-content shadow-sm scrollbar-style current">
                     <h4 class="mb-4">1. Acceptance of Wealthmark OTC Terms</h4>
                     <div class="text">By accessing and using the OTC services provided by Wealthmark (“OTC Services”) you agree to accept and comply with the terms and conditions stated below (“OTC Terms”). You further agree and understand that these OTC Terms are subject to the terms and conditions set forth in the Wealthmark Terms of Use. You should read the entire OTC Terms, together with the Wealthmark Terms of Use, carefully before accessing and using the OTC Services. In case of discrepancies between Wealthmark Terms of Use and these OTC Terms, these OTC Terms shall prevail. These OTC Terms govern your use of the OTC services provided by Wealthmark, which are described in greater detail herein. These OTC Terms are a prerequisite for your access to the OTC Services and you agree that you have read, understood, and accepted all of these OTC Terms contained herein.</div>
                     <div class="text">          As used in these OTC Terms, “Wealthmark” may refer to its owners, directors, investors, affiliates and employees.
                     </div>
                     <div class="text">“Wealthmark” in each case refers to the entity which you are the customer of. Depending upon the context, “Wealthmark” may also refer to the services, products, website, content or other materials (collectively “Wealthmark Services”) provided by each respective entity listed above to you as its customer.
                     </div>
                     <div class="text">Depending on your place of residence, you may not be able to use OTC Services, or your use may be limited. It is your responsibility to follow the rules and regulations applicable in your place of residence and/or place from which you access OTC Services. As long as you agree to and comply with the present OTC Terms as well as the Wealthmark Terms of Use, Wealthmark grants you a personal, non-exclusive, non-transferable, non-sub licensable and limited right to enter the Wealthmark platform and use OTC Services.
                     </div>
                     <div class="text">Wealthmark reserves the right to change, add or remove parts of these OTC Terms at any time and at its sole discretion. You will be notified of any changes in advance through your Account. Upon such notification, it is your responsibility to review the amended OTC Terms. Your continued usage of OTC Services following the posting of a notice of changes to the OTC Terms signifies that you accept and agree to the changes, and that all subsequent actions by you will be subject to the amended OTC Terms.
                     </div>
                     <div class="text">All capitalized terms in these OTC Terms shall have the same meaning as ascribed to them in the relevant Wealthmark Terms of Use.
                     </div>
                     <div class="text">THIS OTC TERMS ARE A LEGAL CONTRACT BETWEEN YOU AND WEALTHMARK. YOU SHOULD TREAT IT AS ANY OTHER LEGAL CONTRACT BY READING ITS PROVISIONS CAREFULLY, AS THEY WILL AFFECT YOUR LEGAL RIGHTS. BY USING THE OTC SERVICES IN ANY MANNER, YOU ARE DEEMED TO HAVE READ, UNDERSTOOD AND AGREED TO BE BOUND BY ALL OF THE TERMS CONTAINED IN THESE OTC TERMS. YOU MAY NOT PICK AND CHOOSE WHICH TERMS APPLY TO YOU. IF YOU DO NOT AGREE WITH ALL OF THE TERMS IN THESE OTC TERMS, YOU MUST CEASE ALL ACCESS AND USE OF THE OTC SERVICES. NOTHING IN THESE OTC TERMS IS INTENDED TO CREATE ANY ENFORCEMENT RIGHTS BY THIRD PARTIES. IF YOU DO NOT UNDERSTAND ALL OF THE TERMS AND CONDITIONS IN THESE OTC TERMS, YOU SHOULD CONSULT WITH A LAWYER BEFORE USING THE OTC SERVICES.
                     </div>
                  </div>
                  <div id="tab-2" class="table-content shadow-sm scrollbar-style">
                     <h4 class=" mb-4">2.Wealthmark OTC Services in General</h4>
                     <div class="text">    Wealthmark OTC Services are part of the Wealthmark platform that enables you to enter into over-the-counter Virtual Assets or Digital Assets purchase and sale transactions (“OTC Transaction”) without being subject to the trading rules of Wealthmark exchange and its central limit order book.
                     </div>
                     <div class="text"> OTC Services are provided to you on a request for quote basis (“OTC RFQ”) through a third-party software provider by entering into a transaction with Wealthmark’s liquidity providers (“OTC Counterparty”). You can access the OTC Services through your Account within the Wealthmark platform (“OTC Interface”).
                     </div>
                     <div class="text">Wealthmark does not operate an OTC trading desk but is partnering up with OTC Counterparties to offer a self-service OTC product to Wealthmark clients. Wealthmark is solely providing the OTC Interface in order to enable OTC Services and facilitate Transactions between the Wealthmark clients and OTC Counterparties.
                     </div>
                  </div>
                  <div id="tab-3" class="table-content shadow-sm scrollbar-style">
                     <h4 class=" mb-4">3.OTC Services</h4>
                     <div class="text">     OTC Services will be available to you by default for Virtual Assets or Digital Assets where OTC trading functionality is available. OTC Services are provided on a pre-trade basis and require the full amount of relevant Virtual Assets or Digital Assets and/or fiat currency before requesting the quote for buying and/or selling Virtual Assets or Digital Assets over-the-counter (“Quote”). OTC Services may be subject to limitations and the minimum amount to be able to access OTC Services may apply.</div>
                     <div class="text">  Trading through the OTC Services will be anonymous, and Wealthmark has policies and procedures reasonably designed to prevent the disclosure of your identity to any OTC Counterparty and vice versa. However, if ever Wealthmark or an affiliate of Wealthmark is the OTC Counterparty in a Transaction, disclosure that Wealthmark is acting as a principal in the Transaction will be made to you.</div>
                     <div class="text">  All communications related to the OTC Services (e.g., response to a Quote, Quote status, Transaction confirmation) is provided using the OTC Interface. Any other methods of communications used for OTC Services (e.g., instant message conversation, oral communications, emails) may be mutually agreed upon between you and Wealthmark</div>
                     <h4 class="mb-4">a) Quote</h4>
                     <div class="text">You may submit a request for a Quote (“Quote Request”) through the OTC Interface. In response to your Quote Request, Wealthmark will request a Quote from one or more OTC Counterparties and provide you with a Quote. A Quote received is valid for a specific amount of time as shown in the OTC Interface. You may accept or reject the Quote. Any negotiation about the specific Quote is not possible.</div>
                     <div class="text">When you accept the Quote (“Accepted Quote”), the Transaction is pending until the terms of the Transaction are confirmed by the OTC Counterparty. Your Accepted Quote does not constitute any binding agreement and can be rejected by Wealthmark or the OTC Counterparty. The Transaction status is provided through the OTC Interface</div>
                     <div class="text">You agree that Wealthmark may, in its sole and absolute discretion, determine whether to process or decline to process a Quote Request, Quote, Accepted Quote or any other response to a Quote.</div>
                     <h4 class="mb-4">b) Execution</h4>
                     <div class="text">When the Accepted Quote is confirmed by the OTC Counterparty (“Confirmed Quote”), the Transaction is confirmed and becomes binding and final (the “Execution”). A Transaction for which Execution has occurred is an executed Transaction (the “Executed Transaction”) and may not be unwound unless all parties of the Transaction agree in writing otherwise and/or explicitly stated otherwise in these OTC Terms. Upon Execution, the terms of the Executed Transaction shall constitute a binding contract between you and the other relevant OTC Counterparty.</div>
                     <div class="text">
                        However, if Wealthmark determines in its sole and absolute discretion that
                        <ul class="docx-ul">
                           <li> (i) a Quote provided to you by Wealthmark, </li>
                           <li>(ii) Accepted Quote communicated to an OTC Counterparty and/or</li>
                           <li> (iii) Confirmed Quote contained an obvious error with respect to the terms, including but not limited to the price or amount of Virtual Assets or Digital Assets, set forth in that Quote, Accepted Quote and/or Confirmed Quote, Wealthmark shall have the right to cancel the Transaction by delivering notice of the cancellation to you and the OTC Counterparty at any time prior to Settlement (as defined in point 3.c) (“Transaction Cancellation”). In the absence of such an obvious error, the terms of a Quote accepted by you (Accepted Quote) and confirmed by the OTC Counterparty (Confirmed Quote) shall be conclusive
                           </li>
                        </ul>
                     </div>
                     <h4 class="mb-4">c) Settlement</h4>
                     <div class="text">Wealthmark will settle an Executed Transaction with you after the Execution by delivering the Virtual Assets or Digital Assets and/or fiat currencies owed to you under the Executed Transaction to your Account/wallet (“Settlement”) on Wealthmark website as the circumstances warrant. The Settlement depends on the settlement of the OTC Counterparty and it occurs when the OTC Counterparty settle the Executed Transaction. In such capacity Wealthmark is acting as an agent and reserves the right to delay the Settlement. You will be notified of the approximate but non-binding settlement time through the OTC Interface before you accept the Quote. However, Wealthmark has a right to directly settle the Executed Transaction from time to time and in that case Wealthmark is acting as a principal.</div>
                     <div class="text">OTC Counterparty settles the Executed Transaction in accordance with the terms agreed with Wealthmark. If OTC Counterparty fails to settle the Executed Transaction, Wealthmark reserves the right to reverse the Executed Transaction and you bear the risk of the settlement failure. When Wealthmark is acting as a principal, Wealthmark bears the risk of settlement failure.</div>
                     <div class="text">You shall not withdraw, attempt to withdraw, transfer, alienate or provide a lien to any third party on any Virtual Assets or Digital Asset or fiat currency held on your Account to satisfy your obligation under any Executed Transaction. Wealthmark will not be responsible for any failure to settle in accordance with the timing set out above as a result of technological failures such as the internet going down and being unavailable.</div>
                     <div class="text">You acknowledge and accept that in case of the Transaction Cancellation the Settlement does not occur and neither Wealthmark, a Wealthmark affiliate nor a respective OTC Counterparty is liable for any losses incurred as a result of the failure to settle the Executed Transaction.</div>
                     <div class="text">Notwithstanding the foregoing, Wealthmark reserves the right to reasonably determine whether an extraordinary event occurred that results in Wealthmark’s inability to honor the Executed Transaction. These events include, but are not limited to identified system failure, data feed error, interruption, delay, non-settlement by the OTC Counterparty, force majeure, or other circumstances. Wealthmark undertakes to immediately notify you about the extraordinary event resulting in the inability to honor the Executed Transaction. After such notification has been sent by Wealthmark, you agree that Wealthmark will not be required to honor the Executed Transaction and that any Executed Transaction affected by the extraordinary event is null and void. In case of extraordinary event from this paragraph, Wealthmark acts as an agent toward you, and you bear the risk of the settlement failure.</div>
                  </div>
                  <div id="tab-4" class="table-content shadow-sm scrollbar-style">
                     <h4 class=" mb-4">4. Fees </h4>
                     <div class="text">OTC Services and specifically the Quotes are offered on the basis of a variable spread. Due to the volatile nature of Virtual Assets or Digital Assets, a typical spread cannot be determined in these OTC Terms, the OTC Interface or on the Wealthmark platform.</div>
                  </div>
                  <div id="tab-5" class="table-content shadow-sm scrollbar-style">
                     <h4 class=" mb-4">5. Representations and Warranties </h4>
                     <div class="text">You acknowledge and agree that when entering Transactions, you will be transacting for your own account, and in an arm’s-length role in relation to Wealthmark </div>
                     <div class="text">Wealthmark employs measures to ensure that OTC Services are accessible at all times without interruption. Notwithstanding this, Wealthmark cannot guarantee uninterrupted or error-free operation of OTC Services, or that Wealthmark will correct all defects or prevent third-party disruptions or unauthorized third-party access. In the event of such disruptions, OTC Services may not be accessible in part or in full. </div>
                     <div class="text">Wealthmark makes no representations and warranties and makes no guarantees that any particular Virtual Assets or Digital Assets will be available for OTC trading on a continuous basis. Wealthmark reserves the right, at any time, with or without cause or prior notice, at its sole discretion to limit, suspend, or terminate all or part of the OTC Services or your access to the OTC Services and/or OTC Interface. </div>
                     <div class="text">For the avoidance of doubt, Wealthmark shall not have any obligation to send any received Quote Request and/or Accepted Quote to prospective OTC Counterparties. You understand that you are solely responsible for maintaining any alternative arrangements that may be needed or desirable if any or all of the OTC Services becomes unavailable or disrupted </div>
                     <div class="text"><b>WEALTHMARK MAKES NO REPRESENTATION OR WARRANTY THAT OTC SERVICES AS SUCH ARE APPROPRIATE FOR USE IN ALL LOCATIONS, OR THAT THE TRANSACTIONS AND SERVICES DESCRIBED HEREIN ARE AVAILABLE OR APPROPRIATE FOR ENTRY INTO OR USE IN ALL JURISDICTIONS OR BY ALL PARTIES. YOU SHOULD INFORM YOURSELF AS TO THE LEGAL REQUIREMENTS AND TAX CONSEQUENCES OF USING OTC SERVICES WITHIN ALL JURISDICTIONS APPLICABLE TO YOU. WEALTHMARK IS NOT RESPONSIBLE FOR TAX CONSEQUENCES TO YOU THAT ARISE BECAUSE OF USING OTC SERVICES PROVIDED BY WEALTHMARK</b> </div>
                  </div>
                  <div id="tab-6" class="table-content shadow-sm scrollbar-style">
                     <h4 class=" mb-4">6.Limitation of Liability </h4>
                     <div class="text">For the avoidance of doubt, the disclaimers of warranty, limitation of liability and indemnification and releases set out in the Wealthmark Terms of Use shall cover the OTC Services, and these OTC Terms and the Wealthmark Terms of Use shall be interpreted accordingly</div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
      <script>
         //   =========================	tab pills js=========================

         $(document).ready(function(){

           $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');
            $('ul.tabs li').removeClass('current');
            $('.table-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
          })

          })

           $('.tabs').on('click', function(){
         $('.tabs').removeClass('active');
         $(this).addClass('active');
         });
         //   =========================	tab pills js=========================
      </script>
      <script>
         $(document).ready(function() {
             $('.otc-Procedure-block').hover(function() {
                 $('.otc-read-more-wrapper').toggleClass("bottom-show");
             });
         });
      </script>
   </body>
</html>
