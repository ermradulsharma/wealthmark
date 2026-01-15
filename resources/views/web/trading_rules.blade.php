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
      <link rel='stylesheet' href="{{('../pak_custom.css') }}">

   <style>
        .nav-link{
          border:0px!important;
      }
   </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="trading-rules-block pb-0 pt-0" id="trading-rules-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sec-title text-left mb-2 mt-5">
                     <span class="title">Know About</span>
                     <h1 class="heading-h2">Trading Rules ｜ Wealthmark</h1>
                  </div>
               </div>
            </div>
            <div class="row mb-3">
               <div class="col-md-8">
                  <div class="market-tab-block">
                     <ul class="nav nav-tabs" id="market-Tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="usdt-trading-rules-tab" data-bs-toggle="tab"
                              data-bs-target="#usdt-trading-rules" type="button" role="tab"
                              aria-controls="usdt-trading-rules" aria-selected="false">BUSD Market</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="bnb-trading-rules-tab" data-bs-toggle="tab"
                              data-bs-target="#bnb-trading-rules" type="button" role="tab"
                              aria-controls="bnb-trading-rules" aria-selected="true">USDT Markets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="btc-trading-rules-tab" data-bs-toggle="tab"
                              data-bs-target="#btc-trading-rules" type="button" role="tab"
                              aria-controls="btc-trading-rules" aria-selected="false">BNB Markets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="alts-trading-rules-tab" data-bs-toggle="tab"
                              data-bs-target="#alts-trading-rules" type="button" role="tab"
                              aria-controls="alts-trading-rules" aria-selected="true">BTC Market</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="market-contact-tab" data-bs-toggle="tab"
                              data-bs-target="#market-contact" type="button" role="tab"
                              aria-controls="market-contact" aria-selected="false">ALTS Markets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="fiat-trading-rules-tab" data-bs-toggle="tab"
                              data-bs-target="#fiat-trading-rules" type="button" role="tab"
                              aria-controls="fiat-trading-rules" aria-selected="true">FIAT Market</button>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="market-search-block">
                     <input type="text" class="form-control" placeholder="Search Coin Name">
                     <svg viewBox="0 0 24 24" fill="none" class="market-search-icon">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                           fill="currentColor"></path>
                     </svg>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="market-tab-block">
                     <div class="tab-content" id="market-TabsContent">
                        <!-- favourite tab content end -->
                        <div class="tab-pane fade show active" id="usdt-trading-rules" role="tabpanel"
                           aria-labelledby="usdt-trading-rules-tab">
                           <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                 <thead class="bn-table-thead">
                                    <tr>
                                       <th class="trading-rules-column">Pair</th>
                                       <th class="trading-rules-column">Minimum Trade Amount</th>
                                       <th class="trading-rules-column">Minimum Amount Movement</th>
                                       <th class="trading-rules-column">Minimum Price Movement</th>
                                       <th class="trading-rules-column">Minimum Order Size</th>
                                       <th class="trading-rules-column">Maximum Market Order Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody class="bn-table-tbody">
                                    <tr data-row-key="0" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.1 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">21995.72219239 BNB</td>
                                    </tr>
                                    <tr data-row-key="1" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.01 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">180.13866035 BTC</td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- Spot markets tab content end -->
                        <div class="tab-pane fade" id="bnb-trading-rules" role="tabpanel"
                           aria-labelledby="bnb-trading-rules-tab">
                           <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                 <thead class="bn-table-thead">
                                    <tr>
                                       <th class="trading-rules-column">Pair</th>
                                       <th class="trading-rules-column">Minimum Trade Amount</th>
                                       <th class="trading-rules-column">Minimum Amount Movement</th>
                                       <th class="trading-rules-column">Minimum Price Movement</th>
                                       <th class="trading-rules-column">Minimum Order Size</th>
                                       <th class="trading-rules-column">Maximum Market Order Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody class="bn-table-tbody">
                                    <tr data-row-key="0" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.1 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">21995.72219239 BNB</td>
                                    </tr>
                                    <tr data-row-key="1" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.01 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">180.13866035 BTC</td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- futures markets tab content end -->
                        <div class="tab-pane fade" id="btc-trading-rules" role="tabpanel"
                           aria-labelledby="btc-trading-rules-tab">
                           <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                 <thead class="bn-table-thead">
                                    <tr>
                                       <th class="trading-rules-column">Pair</th>
                                       <th class="trading-rules-column">Minimum Trade Amount</th>
                                       <th class="trading-rules-column">Minimum Amount Movement</th>
                                       <th class="trading-rules-column">Minimum Price Movement</th>
                                       <th class="trading-rules-column">Minimum Order Size</th>
                                       <th class="trading-rules-column">Maximum Market Order Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody class="bn-table-tbody">
                                    <tr data-row-key="0" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.1 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">21995.72219239 BNB</td>
                                    </tr>
                                    <tr data-row-key="1" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.01 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">180.13866035 BTC</td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- All crypto tab content end -->
                        <div class="tab-pane fade" id="market-contact" role="tabpanel"
                           aria-labelledby="market-contact-tab">
                           <div class="alts-trading-rules-sub-tabs">
                              <ul class="nav nav-pills" id="alts-market" role="tablist">
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="ALTS-markets-all-tab"
                                       data-bs-toggle="pill" data-bs-target="#ALTS-markets-all" type="button"
                                       role="tab" aria-controls="ALTS-markets-all"
                                       aria-selected="true">ALL</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ALTS-markets-ETH-tab" data-bs-toggle="pill"
                                       data-bs-target="#ALTS-markets-ETH" type="button" role="tab"
                                       aria-controls="ALTS-markets-ETH" aria-selected="false">ETH</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ALTS-markets-XRP-tab" data-bs-toggle="pill"
                                       data-bs-target="#ALTS-markets-XRP" type="button" role="tab"
                                       aria-controls="ALTS-markets-XRP" aria-selected="true">XRP</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ALTS-markets-TRX-tab" data-bs-toggle="pill"
                                       data-bs-target="#ALTS-markets-TRX" type="button" role="tab"
                                       aria-controls="ALTS-markets-TRX" aria-selected="false">TRX</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ALTS-markets-DOGE-tab" data-bs-toggle="pill"
                                       data-bs-target="#ALTS-markets-DOGE" type="button" role="tab"
                                       aria-controls="ALTS-markets-DOGE" aria-selected="false">DOGE</button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ALTS-markets-DOT-tab" data-bs-toggle="pill"
                                       data-bs-target="#ALTS-markets-DOT" type="button" role="tab"
                                       aria-controls="ALTS-markets-DOT" aria-selected="true">DOT</button>
                                 </li>
                              </ul>
                              <div class="tab-content" id="alts-marketContent">
                                 <div class="tab-pane fade show active" id="ALTS-markets-all" role="tabpanel"
                                    aria-labelledby="ALTS-markets-all-tab">
                                    <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover">
                                          <thead class="bn-table-thead">
                                             <tr>
                                                <th class="trading-rules-column">Pair</th>
                                                <th class="trading-rules-column">Minimum Trade Amount</th>
                                                <th class="trading-rules-column">Minimum Amount Movement
                                                </th>
                                                <th class="trading-rules-column">Minimum Price Movement</th>
                                                <th class="trading-rules-column">Minimum Order Size</th>
                                                <th class="trading-rules-column">Maximum Market Order Amount
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody class="bn-table-tbody">
                                             <tr data-row-key="11"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BCH/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.001 BCH</td>
                                                <td class="trading-rules-column">0.001 BCH</td>
                                                <td class="trading-rules-column">0.1 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">1827.34034216 BCH</td>
                                             </tr>
                                             <tr data-row-key="12"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">QTUM/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.1 QTUM</td>
                                                <td class="trading-rules-column">0.1 QTUM</td>
                                                <td class="trading-rules-column">0.001 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">10014.57609475 QTUM</td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="ALTS-markets-ETH" role="tabpanel"
                                    aria-labelledby="ALTS-markets-ETH-tab">
                                    <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover">
                                          <thead class="bn-table-thead">
                                             <tr>
                                                <th class="trading-rules-column">Pair</th>
                                                <th class="trading-rules-column">Minimum Trade Amount</th>
                                                <th class="trading-rules-column">Minimum Amount Movement
                                                </th>
                                                <th class="trading-rules-column">Minimum Price Movement</th>
                                                <th class="trading-rules-column">Minimum Order Size</th>
                                                <th class="trading-rules-column">Maximum Market Order Amount
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody class="bn-table-tbody">
                                             <tr data-row-key="0"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.1 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">21995.72219239 BNB</td>
                                             </tr>
                                             <tr data-row-key="1"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.01 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">180.13866035 BTC</td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="ALTS-markets-XRP" role="tabpanel"
                                    aria-labelledby="ALTS-markets-XRP-tab">
                                    <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover">
                                          <thead class="bn-table-thead">
                                             <tr>
                                                <th class="trading-rules-column">Pair</th>
                                                <th class="trading-rules-column">Minimum Trade Amount</th>
                                                <th class="trading-rules-column">Minimum Amount Movement
                                                </th>
                                                <th class="trading-rules-column">Minimum Price Movement</th>
                                                <th class="trading-rules-column">Minimum Order Size</th>
                                                <th class="trading-rules-column">Maximum Market Order Amount
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody class="bn-table-tbody">
                                             <tr data-row-key="0"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.1 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">21995.72219239 BNB</td>
                                             </tr>
                                             <tr data-row-key="1"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.01 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">180.13866035 BTC</td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="ALTS-markets-TRX" role="tabpanel"
                                    aria-labelledby="ALTS-markets-TRX-tab">
                                    <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover">
                                          <thead class="bn-table-thead">
                                             <tr>
                                                <th class="trading-rules-column">Pair</th>
                                                <th class="trading-rules-column">Minimum Trade Amount</th>
                                                <th class="trading-rules-column">Minimum Amount Movement
                                                </th>
                                                <th class="trading-rules-column">Minimum Price Movement</th>
                                                <th class="trading-rules-column">Minimum Order Size</th>
                                                <th class="trading-rules-column">Maximum Market Order Amount
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody class="bn-table-tbody">
                                             <tr data-row-key="0"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.1 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">21995.72219239 BNB</td>
                                             </tr>
                                             <tr data-row-key="1"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.01 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">180.13866035 BTC</td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="ALTS-markets-DOGE" role="tabpanel"
                                    aria-labelledby="ALTS-markets-DOGE-tab">
                                    <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover">
                                          <thead class="bn-table-thead">
                                             <tr>
                                                <th class="trading-rules-column">Pair</th>
                                                <th class="trading-rules-column">Minimum Trade Amount</th>
                                                <th class="trading-rules-column">Minimum Amount Movement
                                                </th>
                                                <th class="trading-rules-column">Minimum Price Movement</th>
                                                <th class="trading-rules-column">Minimum Order Size</th>
                                                <th class="trading-rules-column">Maximum Market Order Amount
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody class="bn-table-tbody">
                                             <tr data-row-key="0"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.001 BNB</td>
                                                <td class="trading-rules-column">0.1 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">21995.72219239 BNB</td>
                                             </tr>
                                             <tr data-row-key="1"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.00001 BTC</td>
                                                <td class="trading-rules-column">0.01 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">180.13866035 BTC</td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="ALTS-markets-DOT" role="tabpanel"
                                    aria-labelledby="ALTS-markets-DOT-tab">
                                    <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover">
                                          <thead class="bn-table-thead">
                                             <tr>
                                                <th class="trading-rules-column">Pair</th>
                                                <th class="trading-rules-column">Minimum Trade Amount</th>
                                                <th class="trading-rules-column">Minimum Amount Movement
                                                </th>
                                                <th class="trading-rules-column">Minimum Price Movement</th>
                                                <th class="trading-rules-column">Minimum Order Size</th>
                                                <th class="trading-rules-column">Maximum Market Order Amount
                                                </th>
                                             </tr>
                                          </thead>
                                          <tbody class="bn-table-tbody">
                                             <tr data-row-key="13"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">VET/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.1 VET</td>
                                                <td class="trading-rules-column">0.1 VET</td>
                                                <td class="trading-rules-column">0.00001 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">15159343.30286737 VET</td>
                                             </tr>
                                             <tr data-row-key="14"
                                                class="bn-table-row bn-table-row-level-0 highlight">
                                                <td class="trading-rules-column">
                                                   <div data-bn-type="text" class="css-1jq4ozh">EUR/BUSD
                                                   </div>
                                                </td>
                                                <td class="trading-rules-column">0.1 EUR</td>
                                                <td class="trading-rules-column">0.1 EUR</td>
                                                <td class="trading-rules-column">0.0001 BUSD</td>
                                                <td class="trading-rules-column">10 BUSD</td>
                                                <td class="trading-rules-column">2920325.20523264 EUR</td>
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="alts-trading-rules" role="tabpanel"
                           aria-labelledby="alts-trading-rules-tab">
                           <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                 <thead class="bn-table-thead">
                                    <tr>
                                       <th class="trading-rules-column">Pair</th>
                                       <th class="trading-rules-column">Minimum Trade Amount</th>
                                       <th class="trading-rules-column">Minimum Amount Movement</th>
                                       <th class="trading-rules-column">Minimum Price Movement</th>
                                       <th class="trading-rules-column">Minimum Order Size</th>
                                       <th class="trading-rules-column">Maximum Market Order Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody class="bn-table-tbody">
                                    <tr data-row-key="0" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.001 BNB</td>
                                       <td class="trading-rules-column">0.1 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">21995.72219239 BNB</td>
                                    </tr>
                                    <tr data-row-key="1" class="bn-table-row bn-table-row-level-0 highlight">
                                       <td class="trading-rules-column">
                                          <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                       </td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.00001 BTC</td>
                                       <td class="trading-rules-column">0.01 BUSD</td>
                                       <td class="trading-rules-column">10 BUSD</td>
                                       <td class="trading-rules-column">180.13866035 BTC</td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="fiat-trading-rules" role="tabpanel"
                           aria-labelledby="fiat-trading-rules-tab">
                           <ul class="nav nav-pills" id="FIAT-Markets" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="FIAT-Markets-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#FIAT-Markets-all" type="button" role="tab"
                                    aria-controls="FIAT-Markets-all" aria-selected="true">
                                 ALL
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="FIAT-Markets-AUD-tab" data-bs-toggle="pill"
                                    data-bs-target="#FIAT-Markets-AUD" type="button" role="tab"
                                    aria-controls="FIAT-Markets-AUD" aria-selected="false">
                                 ETH
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="FIAT-Markets-BIDR-tab" data-bs-toggle="pill"
                                    data-bs-target="#FIAT-Markets-BIDR" type="button" role="tab"
                                    aria-controls="FIAT-Markets-BIDR" aria-selected="true">
                                 XRP
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="FIAT-Markets-BRL-tab" data-bs-toggle="pill"
                                    data-bs-target="#FIAT-Markets-BRL" type="button" role="tab"
                                    aria-controls="FIAT-Markets-BRL" aria-selected="false">
                                 TRX
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="FIAT-Markets-EUR-tab" data-bs-toggle="pill"
                                    data-bs-target="#FIAT-Markets-EUR" type="button" role="tab"
                                    aria-controls="FIAT-Markets-EUR" aria-selected="false">
                                 DOGE
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="FIAT-Markets-GBP-tab" data-bs-toggle="pill"
                                    data-bs-target="#FIAT-Markets-GBP" type="button" role="tab"
                                    aria-controls="FIAT-Markets-GBP" aria-selected="true">
                                 DOT
                                 </button>
                              </li>
                           </ul>
                           <div class="tab-content" id="FIAT-MarketsContent">
                              <div class="tab-pane fade show active" id="FIAT-Markets-all" role="tabpanel"
                                 aria-labelledby="FIAT-Markets-all-tab">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                       <thead class="bn-table-thead">
                                          <tr>
                                             <th class="trading-rules-column">Pair</th>
                                             <th class="trading-rules-column">Minimum Trade Amount</th>
                                             <th class="trading-rules-column">Minimum Amount Movement</th>
                                             <th class="trading-rules-column">Minimum Price Movement</th>
                                             <th class="trading-rules-column">Minimum Order Size</th>
                                             <th class="trading-rules-column">Maximum Market Order Amount
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody class="bn-table-tbody">
                                          <tr data-row-key="11"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BCH/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.001 BCH</td>
                                             <td class="trading-rules-column">0.001 BCH</td>
                                             <td class="trading-rules-column">0.1 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">1827.34034216 BCH</td>
                                          </tr>
                                          <tr data-row-key="12"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">QTUM/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.1 QTUM</td>
                                             <td class="trading-rules-column">0.1 QTUM</td>
                                             <td class="trading-rules-column">0.001 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">10014.57609475 QTUM</td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="FIAT-Markets-AUD" role="tabpanel"
                                 aria-labelledby="FIAT-Markets-AUD-tab">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                       <thead class="bn-table-thead">
                                          <tr>
                                             <th class="trading-rules-column">Pair</th>
                                             <th class="trading-rules-column">Minimum Trade Amount</th>
                                             <th class="trading-rules-column">Minimum Amount Movement</th>
                                             <th class="trading-rules-column">Minimum Price Movement</th>
                                             <th class="trading-rules-column">Minimum Order Size</th>
                                             <th class="trading-rules-column">Maximum Market Order Amount
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody class="bn-table-tbody">
                                          <tr data-row-key="0"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.1 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">21995.72219239 BNB</td>
                                          </tr>
                                          <tr data-row-key="1"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.01 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">180.13866035 BTC</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="FIAT-Markets-BIDR" role="tabpanel"
                                 aria-labelledby="FIAT-Markets-BIDR-tab">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                       <thead class="bn-table-thead">
                                          <tr>
                                             <th class="trading-rules-column">Pair</th>
                                             <th class="trading-rules-column">Minimum Trade Amount</th>
                                             <th class="trading-rules-column">Minimum Amount Movement</th>
                                             <th class="trading-rules-column">Minimum Price Movement</th>
                                             <th class="trading-rules-column">Minimum Order Size</th>
                                             <th class="trading-rules-column">Maximum Market Order Amount
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody class="bn-table-tbody">
                                          <tr data-row-key="0"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.1 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">21995.72219239 BNB</td>
                                          </tr>
                                          <tr data-row-key="1"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.01 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">180.13866035 BTC</td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="FIAT-Markets-BRL" role="tabpanel"
                                 aria-labelledby="FIAT-Markets-BRL-tab">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                       <thead class="bn-table-thead">
                                          <tr>
                                             <th class="trading-rules-column">Pair</th>
                                             <th class="trading-rules-column">Minimum Trade Amount</th>
                                             <th class="trading-rules-column">Minimum Amount Movement</th>
                                             <th class="trading-rules-column">Minimum Price Movement</th>
                                             <th class="trading-rules-column">Minimum Order Size</th>
                                             <th class="trading-rules-column">Maximum Market Order Amount
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody class="bn-table-tbody">
                                          <tr data-row-key="0"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.1 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">21995.72219239 BNB</td>
                                          </tr>
                                          <tr data-row-key="1"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.01 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">180.13866035 BTC</td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="FIAT-Markets-EUR" role="tabpanel"
                                 aria-labelledby="FIAT-Markets-EUR-tab">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                       <thead class="bn-table-thead">
                                          <tr>
                                             <th class="trading-rules-column">Pair</th>
                                             <th class="trading-rules-column">Minimum Trade Amount</th>
                                             <th class="trading-rules-column">Minimum Amount Movement</th>
                                             <th class="trading-rules-column">Minimum Price Movement</th>
                                             <th class="trading-rules-column">Minimum Order Size</th>
                                             <th class="trading-rules-column">Maximum Market Order Amount
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody class="bn-table-tbody">
                                          <tr data-row-key="0"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BNB/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.001 BNB</td>
                                             <td class="trading-rules-column">0.1 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">21995.72219239 BNB</td>
                                          </tr>
                                          <tr data-row-key="1"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">BTC/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.00001 BTC</td>
                                             <td class="trading-rules-column">0.01 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">180.13866035 BTC</td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="FIAT-Markets-GBP" role="tabpanel"
                                 aria-labelledby="FIAT-Markets-GBP-tab">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                       <thead class="bn-table-thead">
                                          <tr>
                                             <th class="trading-rules-column">Pair</th>
                                             <th class="trading-rules-column">Minimum Trade Amount</th>
                                             <th class="trading-rules-column">Minimum Amount Movement</th>
                                             <th class="trading-rules-column">Minimum Price Movement</th>
                                             <th class="trading-rules-column">Minimum Order Size</th>
                                             <th class="trading-rules-column">Maximum Market Order Amount
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody class="bn-table-tbody">
                                          <tr data-row-key="13"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">VET/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.1 VET</td>
                                             <td class="trading-rules-column">0.1 VET</td>
                                             <td class="trading-rules-column">0.00001 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">15159343.30286737 VET</td>
                                          </tr>
                                          <tr data-row-key="14"
                                             class="bn-table-row bn-table-row-level-0 highlight">
                                             <td class="trading-rules-column">
                                                <div data-bn-type="text" class="css-1jq4ozh">EUR/BUSD</div>
                                             </td>
                                             <td class="trading-rules-column">0.1 EUR</td>
                                             <td class="trading-rules-column">0.1 EUR</td>
                                             <td class="trading-rules-column">0.0001 BUSD</td>
                                             <td class="trading-rules-column">10 BUSD</td>
                                             <td class="trading-rules-column">2920325.20523264 EUR</td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- new listing tab content end -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
   </body>
</html>
