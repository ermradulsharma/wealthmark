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
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <style>
      section {
        padding: 40px 0;
    }
  </style>
   </head>
   <body>
      @include('template.web_menu')
      <section class="fees-section" id="fee-block">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                  <ul class="nav nav-pills fees-tabs-wrapper" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active trading-fee-boxes" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"  aria-selected="true">Trading Fee</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link deposit-withdrawal-boxes" id="pills-profile-tab"  data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"  aria-controls="pills-profile" aria-selected="false">Deposit Withdrawal Fee</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="deposit-fee-section" id="deposit-fee-block">
         <div class="container">
            <div class=" row">
                <div class="col-md-12">
                     <h2 class="heading-h2 p-0 m-0">Deposit Withdrawal Fee</h2>
                </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="deposit_withdrawal-fee-tabs">
                     <ul class="nav nav-tabs" id="fee-deposit-withdrwal-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="fee-crypto-tab-tab" data-bs-toggle="tab"
                              data-bs-target="#fee-crypto-tab" type="button" role="tab"
                              aria-controls="fee-crypto-tab" aria-selected="true">Crypto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="fee-fiat-tab-tab" data-bs-toggle="tab"
                              data-bs-target="#fee-fiat-tab" type="button" role="tab" aria-controls="fee-fiat-tab"
                              aria-selected="false">Fiat</button>
                        </li>
                     </ul>
                     <div class="tab-content mt-4" id="fee-deposit-withdrwal-tabsContent">
                        <div class="tab-pane fade show active" id="fee-crypto-tab" role="tabpanel"
                           aria-labelledby="fee-crypto-tab-tab">
                           <div class="crypto-tab">
                              <h4>Wealth Mark does not charge deposit fees.</h4>
                              <div class="text">For each withdrawal, a flat fee is paid by users to cover the
                                 transaction costs of
                                 moving the cryptocurrency out of their Wealth Mark account.
                                 Withdrawals rates are determined by the blockchain network and can fluctuate
                                 without
                                 notice due to factors such as network congestion. Please check the most recent
                                 data
                                 listed on each withdrawal page.
                              </div>
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 input-group mb-3 mt-3">
                                    <input type="text" class="form-control" placeholder="Search"
                                       aria-label="Search" aria-describedby="basic-addon2" id="myInput">
                                    <span class="input-group-text" id="basic-addon2">Search</span>
                                 </div>
                              </div>
                              <div class="table-responsive mt-2">
                                 <table class="table table-bordered table-hover table-striped">
                                    <thead class="bn-table-thead">
                                       <tr>
                                          <th>
                                             Coin/Token
                                          </th>
                                          <th class="wm-td">Full Name</th>
                                          <th class="wm-td">Network</th>
                                          <th class="wm-td">Minimum
                                             Withdrawal
                                          </th>
                                          <th class="wm-td">Deposit Fee</th>
                                          <th class="wm-td">Withdrawal Fee
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody class="bn-table-tbody" id="myTable">
                                       <tr    class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >1INCH</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >1inch</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.34</div>
                                             <div     >12</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.17</div>
                                             <div     >6.02</div>
                                          </td>
                                       </tr>
                                       <tr  class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AGLD</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Adventure Gold</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >19</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >9.98</div>
                                          </td>
                                       </tr>
                                       <tr class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ATEM</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >ATEM</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >7162</div>
                                             <div     >260204</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >3581</div>
                                             <div     >130102</div>
                                          </td>
                                       </tr>
                                       <tr  class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AUDIO</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Audius</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >32</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >16</div>
                                          </td>
                                       </tr>
                                       <tr class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AION</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >AION</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Aion</div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.2</div>
                                             <div     >188</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.1</div>
                                             <div     >94</div>
                                          </td>
                                       </tr>
                                       <tr class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AR</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Arweave</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Arweave</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.1</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.03</div>
                                          </td>
                                       </tr>
                                       <tr class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ACA</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Acala Token</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Acala</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >1</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.2</div>
                                          </td>
                                       </tr>
                                       <tr  class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ARDR</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Ardor</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Ardor</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >4</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >2</div>
                                          </td>
                                       </tr>
                                       <tr  class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ACH</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Alchemy Pay</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >17</div>
                                             <div     >616</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >8.5</div>
                                             <div     >308</div>
                                          </td>
                                       </tr>
                                       <tr  class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ACM</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >AC Milan Fan Token
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Chiliz Chain (CHZ)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >1</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0</div>
                                          </td>
                                       </tr>
                                       <tr  class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ADA</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Cardano</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Cardano</div>
                                             <div     >BNB Beacon Chain
                                                (BEP2)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.52</div>
                                             <div     >10</div>
                                             <div     >0.86</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.26</div>
                                             <div     >0.8</div>
                                             <div     >0.43</div>
                                          </td>
                                       </tr>
                                       <tr class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >API3</div>
                                          </td>
                                          <td>
                                             <div    >API3</div>
                                          </td>
                                          <td>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td>
                                             <div     >3.54</div>
                                          </td>
                                          <td>
                                             <div     >Free</div>
                                          </td>
                                          <td>
                                             <div     >1.77</div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="fee-fiat-tab" role="tabpanel"
                           aria-labelledby="fee-fiat-tab-tab">
                           <div class="crypto-tab">
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 input-group mb-3 mt-3">
                                    <input type="text" class="form-control" placeholder="Search"
                                       aria-label="Search" aria-describedby="basic-addon2" id="myInput-2">
                                    <span class="input-group-text" id="basic-addon2">Search</span>
                                 </div>
                              </div>
                              <div class="table-responsive mt-2">
                                 <table class="table table-bordered table-hover table-striped">
                                    <thead class="bn-table-thead">
                                       <tr>
                                          <th>
                                             Coin/Token
                                          </th>
                                          <th class="wm-td">Full Name</th>
                                          <th class="wm-td">Network</th>
                                          <th class="wm-td">Minimum
                                             Withdrawal
                                          </th>
                                          <th class="wm-td">Deposit Fee</th>
                                          <th class="wm-td">Withdrawal Fee
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody class="bn-table-tbody" id="myTable-2">
                                       <tr    class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >1INCH</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >1inch</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.34</div>
                                             <div     >12</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.17</div>
                                             <div     >6.02</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AGLD</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Adventure Gold</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >19</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >9.98</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ATEM</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >ATEM</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >7162</div>
                                             <div     >260204</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >3581</div>
                                             <div     >130102</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AUDIO</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Audius</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >32</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >16</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AION</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >AION</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Aion</div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.2</div>
                                             <div     >188</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.1</div>
                                             <div     >94</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >AR</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Arweave</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Arweave</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.1</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.03</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ACA</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Acala Token</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Acala</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >1</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.2</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ARDR</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Ardor</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Ardor</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >4</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >2</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ACH</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Alchemy Pay</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >17</div>
                                             <div     >616</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >8.5</div>
                                             <div     >308</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ACM</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >AC Milan Fan Token
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Chiliz Chain (CHZ)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >1</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >ADA</div>
                                          </td>
                                          <td class="wm-td">
                                             <div    >Cardano</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >BNB Smart Chain
                                                (BEP20)
                                             </div>
                                             <div     >Cardano</div>
                                             <div     >BNB Beacon Chain
                                                (BEP2)
                                             </div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.52</div>
                                             <div     >10</div>
                                             <div     >0.86</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >Free</div>
                                             <div     >Free</div>
                                             <div     >Free</div>
                                          </td>
                                          <td class="wm-td">
                                             <div     >0.26</div>
                                             <div     >0.8</div>
                                             <div     >0.43</div>
                                          </td>
                                       </tr>
                                       <tr     class="wm-table-row wm-table-row-level-0">
                                          <td>
                                             <div    >API3</div>
                                          </td>
                                          <td>
                                             <div    >API3</div>
                                          </td>
                                          <td>
                                             <div     >Ethereum (ERC20)
                                             </div>
                                          </td>
                                          <td>
                                             <div     >3.54</div>
                                          </td>
                                          <td>
                                             <div     >Free</div>
                                          </td>
                                          <td>
                                             <div     >1.77</div>
                                          </td>
                                       </tr>
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
      </section>
      <section class="fee-section" id="fee-rate-widgets-section">
         <div class="container">
            <div class="row">
               <div class="text-left mb-2">
                  <h1 class="heading-h2 p-0 m-0">Fee Deposit Withdrawal</h1>
               </div>
               <div class="col-md-12">
                  <h6>Log in to check your trading fee rate. <a class="text-warning"> Login</a> </h6>
                  <h6>Enjoy higher discounts and privilege.<a class="text-warning"> VIP program</a> </h6>
                  <div class="text text-primary fw-bold"><strong>Enjoy more benefits with fee
                     deductions for the following transactions.</strong>
                  </div>
                  </h5>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6">
                  <div class="card border-0 shadow">
                     <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                           <div class="widgets-block">
                              <h2 class="fw-extrabold h5">
                                 <svg viewBox="0 0 24 24" fill="none" class="css-ivry7e">
                                    <path
                                       d="M5.94 19.574C7.612 21.19 9.806 22 12 22c2.194 0 4.387-.809 6.061-2.426 3.347-3.236 3.347-8.48 0-11.716L12.001 2 5.938 7.858c-3.347 3.235-3.347 8.48 0 11.716z"
                                       fill="url(#hot-g_svg__paint0_linear_1330_2334)"></path>
                                    <path
                                       d="M8.506 18.544A4.911 4.911 0 0012 20a4.91 4.91 0 003.494-1.456 4.992 4.992 0 000-7.03L12 8l-3.494 3.515a4.991 4.991 0 000 7.03z"
                                       fill="#76808F"></path>
                                    <path d="M3 3.5L5.5 6 8 3.5 5.5 1 3 3.5z"
                                       fill="url(#hot-g_svg__paint1_linear_1330_2334)"></path>
                                    <path d="M20 7.5L21.5 9 23 7.5 21.5 6 20 7.5z" fill="#76808F"></path>
                                    <path d="M1 20l1.5 1.5L4 20l-1.5-1.5L1 20z"
                                       fill="url(#hot-g_svg__paint2_linear_1330_2334)"></path>
                                    <defs>
                                       <linearGradient id="hot-g_svg__paint0_linear_1330_2334" x1="12" y1="22"
                                          x2="12" y2="2" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint1_linear_1330_2334" x1="5.5" y1="6"
                                          x2="5.5" y2="1" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint2_linear_1330_2334" x1="2.5"
                                          y1="21.5" x2="2.5" y2="18.5" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>
                                 BTC Spot Trading Pairs
                              </h2>
                               <p> fee on selected fiat and
                                 pairs
                              </p>
                             <div class="d-flex justify-content-between align-items-center">
                                  <h5 class="m-0">0% Fee</h5>

                                  <a class="text-primary fee-learn-more-link">
                                     Learn More <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                 </svg>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6">
                  <div class="card border-0 shadow">
                     <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                           <div class="widgets-block">
                              <h2 class="fw-extrabold h5">
                                 <svg viewBox="0 0 24 24" fill="none" class="css-ivry7e">
                                    <path
                                       d="M5.94 19.574C7.612 21.19 9.806 22 12 22c2.194 0 4.387-.809 6.061-2.426 3.347-3.236 3.347-8.48 0-11.716L12.001 2 5.938 7.858c-3.347 3.235-3.347 8.48 0 11.716z"
                                       fill="url(#hot-g_svg__paint0_linear_1330_2334)"></path>
                                    <path
                                       d="M8.506 18.544A4.911 4.911 0 0012 20a4.91 4.91 0 003.494-1.456 4.992 4.992 0 000-7.03L12 8l-3.494 3.515a4.991 4.991 0 000 7.03z"
                                       fill="#76808F"></path>
                                    <path d="M3 3.5L5.5 6 8 3.5 5.5 1 3 3.5z"
                                       fill="url(#hot-g_svg__paint1_linear_1330_2334)"></path>
                                    <path d="M20 7.5L21.5 9 23 7.5 21.5 6 20 7.5z" fill="#76808F"></path>
                                    <path d="M1 20l1.5 1.5L4 20l-1.5-1.5L1 20z"
                                       fill="url(#hot-g_svg__paint2_linear_1330_2334)"></path>
                                    <defs>
                                       <linearGradient id="hot-g_svg__paint0_linear_1330_2334" x1="12" y1="22"
                                          x2="12" y2="2" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint1_linear_1330_2334" x1="5.5" y1="6"
                                          x2="5.5" y2="1" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint2_linear_1330_2334" x1="2.5"
                                          y1="21.5" x2="2.5" y2="18.5" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>
                                 BUSD Spot Trading Pairs
                              </h2>
                               <p>Zero maker fee on BUSD pairs</p>
                             <div class="d-flex justify-content-between align-items-center">
                                  <h5 class="m-0">0% Fee</h5>

                                  <a class="text-primary fee-learn-more-link">
                                     Learn More <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                 </svg>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6">
                  <div class="card border-0 shadow">
                     <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                           <div class="widgets-block">
                              <h2 class="fw-extrabold h5">
                                 <svg viewBox="0 0 24 24" fill="none" class="css-ivry7e">
                                    <path
                                       d="M5.94 19.574C7.612 21.19 9.806 22 12 22c2.194 0 4.387-.809 6.061-2.426 3.347-3.236 3.347-8.48 0-11.716L12.001 2 5.938 7.858c-3.347 3.235-3.347 8.48 0 11.716z"
                                       fill="url(#hot-g_svg__paint0_linear_1330_2334)"></path>
                                    <path
                                       d="M8.506 18.544A4.911 4.911 0 0012 20a4.91 4.91 0 003.494-1.456 4.992 4.992 0 000-7.03L12 8l-3.494 3.515a4.991 4.991 0 000 7.03z"
                                       fill="#76808F"></path>
                                    <path d="M3 3.5L5.5 6 8 3.5 5.5 1 3 3.5z"
                                       fill="url(#hot-g_svg__paint1_linear_1330_2334)"></path>
                                    <path d="M20 7.5L21.5 9 23 7.5 21.5 6 20 7.5z" fill="#76808F"></path>
                                    <path d="M1 20l1.5 1.5L4 20l-1.5-1.5L1 20z"
                                       fill="url(#hot-g_svg__paint2_linear_1330_2334)"></path>
                                    <defs>
                                       <linearGradient id="hot-g_svg__paint0_linear_1330_2334" x1="12" y1="22"
                                          x2="12" y2="2" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint1_linear_1330_2334" x1="5.5" y1="6"
                                          x2="5.5" y2="1" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint2_linear_1330_2334" x1="2.5"
                                          y1="21.5" x2="2.5" y2="18.5" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>
                                 BNB Deduction
                              </h2>
                                <p>On USDⓈ-M Futures Trading fee</p>
                              <div class="d-flex justify-content-between align-items-center">
                                  <h5 class="m-0">0% Fee</h5>

                                  <a class="text-primary fee-learn-more-link">
                                     Learn More <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                 </svg>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6">
                  <div class="card border-0 shadow">
                     <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                           <div class="widgets-block">
                              <h2 class="fw-extrabold h5">
                                 <svg viewBox="0 0 24 24" fill="none" class="css-ivry7e">
                                    <path
                                       d="M5.94 19.574C7.612 21.19 9.806 22 12 22c2.194 0 4.387-.809 6.061-2.426 3.347-3.236 3.347-8.48 0-11.716L12.001 2 5.938 7.858c-3.347 3.235-3.347 8.48 0 11.716z"
                                       fill="url(#hot-g_svg__paint0_linear_1330_2334)"></path>
                                    <path
                                       d="M8.506 18.544A4.911 4.911 0 0012 20a4.91 4.91 0 003.494-1.456 4.992 4.992 0 000-7.03L12 8l-3.494 3.515a4.991 4.991 0 000 7.03z"
                                       fill="#76808F"></path>
                                    <path d="M3 3.5L5.5 6 8 3.5 5.5 1 3 3.5z"
                                       fill="url(#hot-g_svg__paint1_linear_1330_2334)"></path>
                                    <path d="M20 7.5L21.5 9 23 7.5 21.5 6 20 7.5z" fill="#76808F"></path>
                                    <path d="M1 20l1.5 1.5L4 20l-1.5-1.5L1 20z"
                                       fill="url(#hot-g_svg__paint2_linear_1330_2334)"></path>
                                    <defs>
                                       <linearGradient id="hot-g_svg__paint0_linear_1330_2334" x1="12" y1="22"
                                          x2="12" y2="2" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint1_linear_1330_2334" x1="5.5" y1="6"
                                          x2="5.5" y2="1" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                       <linearGradient id="hot-g_svg__paint2_linear_1330_2334" x1="2.5"
                                          y1="21.5" x2="2.5" y2="18.5" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#F0B90B"></stop>
                                          <stop offset="1" stop-color="#F8D33A"></stop>
                                       </linearGradient>
                                    </defs>
                                 </svg>
                                 BTC Spot Trading Pairs
                              </h2>
                               <p>On USDⓈ-M Futures Trading fee</p>
                              <div class="d-flex justify-content-between align-items-center">
                                  <h5 class="m-0">0% Fee</h5>

                                  <a class="text-primary fee-learn-more-link">
                                     Learn More <svg width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                 </svg>
                                  </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="fee-rate-tabing " id="fee-tabs">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <ul class="nav nav-tabs mb-2" id="fee-rates-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Spot-Trading-tab" data-bs-toggle="tab"
                           data-bs-target="#Spot-Trading" type="button" role="tab" aria-controls="Spot-Trading"
                           aria-selected="true">Spot Trading</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Margin-borrow-interest-tab" data-bs-toggle="tab"
                           data-bs-target="#Margin-borrow-interest" type="button" role="tab"
                           aria-controls="Margin-borrow-interest" aria-selected="false">Margin Borrow
                        Interest</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="USDFutures-Trading-tab" data-bs-toggle="tab"
                           data-bs-target="#USDFutures-Trading" type="button" role="tab"
                           aria-controls="USDFutures-Trading" aria-selected="false">USDⓈ-M Futures Trading</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link " id="coin-m-future-trading-tab" data-bs-toggle="tab"
                           data-bs-target="#coin-m-future-trading" type="button" role="tab"
                           aria-controls="coin-m-future-trading" aria-selected="true">COIN-M Futures
                        Trading</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cross-interest-tab" data-bs-toggle="tab"
                           data-bs-target="#cross-interest" type="button" role="tab" aria-controls="cross-interest"
                           aria-selected="false">Cross Collateral Interest</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="swap-farming-tab" data-bs-toggle="tab"
                           data-bs-target="#swap-farming" type="button" role="tab" aria-controls="swap-farming"
                           aria-selected="false">Swap Farming</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link " id="fee-p2p-tab" data-bs-toggle="tab" data-bs-target="#fee-p2p"
                           type="button" role="tab" aria-controls="fee-p2p" aria-selected="true">P2P</button>
                     </li>
                  </ul>
                  <div class="tab-content" id="fee-rates-tabContent">
                     <div class="tab-pane fade show active" id="Spot-Trading" role="tabpanel"
                        aria-labelledby="Spot-Trading-tab">
                        <div class="table-responsive">
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Level</th>
                                    <th>30d Trade Volume (BUSD)</th>
                                    <th>and/or</th>
                                    <th>BNB Balance</th>
                                    <th>Maker / Taker</th>
                                    <th>Maker / Taker <small>BNB 25% off</small></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Regular User</td>
                                    <td>
                                       < 1,000,000 BUSD
                                    </td>
                                    <td>or</td>
                                    <td>≥ 0 BNB</td>
                                    <td>0.1000% / 0.1000%</td>
                                    <td>0.0750% / 0.0750%</td>
                                 </tr>
                                 <tr>
                                    <td>VIP 1</td>
                                    <td>
                                       < 1,000,000 BUSD
                                    </td>
                                    <td>or</td>
                                    <td>≥ 0 BNB</td>
                                    <td>0.1000% / 0.1000%</td>
                                    <td>0.0750% / 0.0750%</td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="Margin-borrow-interest" role="tabpanel"
                        aria-labelledby="Margin-borrow-interest-tab">
                        <div class="table-responsive">
                           <table class="table table-striped table-hover table-bordered">
                              <thead class="bn-table-thead">
                                 <tr>
                                    <th rowspan="2"
                                       class="wm-td wm-td-fix-left wm-td-fix-left-last fees-level-coin-td">
                                       <div class="css-ucxrtv">
                                          <div class="item css-vurnku">Level Coin</div>
                                       </div>
                                    </th>
                                 </tr>
                                 <tr>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-1.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />1INCH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-2.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AAVE</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-3.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ACH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ADA</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-5.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AGLD</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-1.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ALGO</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />1INCH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-2.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AAVE</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-3.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ACH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ADA</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-5.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AGLD</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ALGO</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-1.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />1INCH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-2.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AAVE</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-3.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ACH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ADA</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-5.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AGLD</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-1.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ALGO</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />1INCH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-2.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AAVE</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-3.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ACH</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ADA</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-5.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />AGLD</div>
                                    </th>
                                    <th class="wm-td">
                                       <div class="fee-borrow-box"><img
                                          src="{{ asset('img/fee-borrow-icon-4.png') }}"
                                          class="img-fluid" alt="Trading / Deposit Fee" title="Trading / Deposit Fee" />ALGO</div>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody class="bn-table-tbody">
                                 <tr    class="wm-table-row wm-table-row-level-0">
                                    <td class="wm-td wm-td-fix-left wm-td-fix-left-last"
                                       style="text-align: left; position: sticky; left: 0px;">
                                       <div class="level css-4cffwv">
                                          <div  class="css-akaa8f">Regular User</div>
                                       </div>
                                    </td>
                                    <td class="wm-td">0.016990%</td>
                                    <td class="wm-td">0.100000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.027260%</td>
                                    <td class="wm-td">0.030000%</td>
                                    <td class="wm-td">0.060000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.071631%</td>
                                    <td class="wm-td">0.010000%</td>
                                    <td class="wm-td">0.029040%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.046575%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.029972%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.029972%</td>
                                    <td class="wm-td">0.020000%</td>
                                    <td class="wm-td">0.020000%</td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="USDFutures-Trading" role="tabpanel"
                        aria-labelledby="USDFutures-Trading-tab">
                        <div class="table-responsive">
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Level</th>
                                    <th>30d Trade Volume (BUSD)</th>
                                    <th>and/or</th>
                                    <th>BNB Balance</th>
                                    <th>Maker / Taker</th>
                                    <th>Maker / Taker <small>BNB 25% off</small></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Regular User</td>
                                    <td>
                                       < 1,000,000 BUSD
                                    </td>
                                    <td>or</td>
                                    <td>≥ 0 BNB</td>
                                    <td>0.1000% / 0.1000%</td>
                                    <td>0.0750% / 0.0750%</td>
                                 </tr>
                                 <tr>
                                    <td>VIP 1</td>
                                    <td>
                                       < 1,000,000 BUSD
                                    </td>
                                    <td>or</td>
                                    <td>≥ 0 BNB</td>
                                    <td>0.1000% / 0.1000%</td>
                                    <td>0.0750% / 0.0750%</td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-pane fade show" id="coin-m-future-trading" role="tabpanel"
                        aria-labelledby="coin-m-future-trading-tab">
                        <div class="table-responsive">
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Level</th>
                                    <th>30d Trade Volume (BUSD)</th>
                                    <th>and/or</th>
                                    <th>BNB Balance</th>
                                    <th>Maker / Taker</th>
                                    <th>Maker / Taker <small>BNB 25% off</small></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Regular User</td>
                                    <td>
                                       < 1,000,000 BUSD
                                    </td>
                                    <td>or</td>
                                    <td>≥ 0 BNB</td>
                                    <td>0.1000% / 0.1000%</td>
                                    <td>0.0750% / 0.0750%</td>
                                 </tr>
                                 <tr>
                                    <td>VIP 1</td>
                                    <td>
                                       < 1,000,000 BUSD
                                    </td>
                                    <td>or</td>
                                    <td>≥ 0 BNB</td>
                                    <td>0.1000% / 0.1000%</td>
                                    <td>0.0750% / 0.0750%</td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="cross-interest" role="tabpanel"
                        aria-labelledby="cross-interest-tab">
                        <table class="table table-striped table-hover table-bordered">
                           <thead>
                              <tr>
                                 <th>Level</th>
                                 <th>30d Trade Volume (BUSD)</th>
                                 <th>and/or</th>
                                 <th>BNB Balance</th>
                                 <th>Maker / Taker</th>
                                 <th>Maker / Taker <small>BNB 25% off</small></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Regular User</td>
                                 <td>
                                    < 1,000,000 BUSD
                                 </td>
                                 <td>or</td>
                                 <td>≥ 0 BNB</td>
                                 <td>0.1000% / 0.1000%</td>
                                 <td>0.0750% / 0.0750%</td>
                              </tr>
                              <tr>
                                 <td>VIP 1</td>
                                 <td>
                                    < 1,000,000 BUSD
                                 </td>
                                 <td>or</td>
                                 <td>≥ 0 BNB</td>
                                 <td>0.1000% / 0.1000%</td>
                                 <td>0.0750% / 0.0750%</td>
                              </tr>

                           </tbody>
                        </table>
                        <!-- <div class="available-gift-card mt-2" id="added-gift-card">
                           <img src="http://127.0.0.1/beta-dlp/assets/img/added-card-icon.jpg"
                               class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token">
                           <h5>No Record Found</h5>
                           </div> -->
                     </div>
                     <div class="tab-pane fade" id="swap-farming" role="tabpanel" aria-labelledby="swap-farming-tab">
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th scope="col">Level</th>
                                    <th scope="col">Pool</th>
                                    <th scope="col">Swap Fee</th>
                                    <th scope="col">Fee Rebate</th>
                                    <th scope="col">Effective Fee</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Regular User</td>
                                    <td><img src="{{ asset('img/trading-fee-pool-icon.png') }}"
                                       class="img-fluid fee-pool-icon"
                                       alt="fee Coin/Token" title="fee Coin/Token" />&nbsp;&nbsp;WOO/USDT
                                    </td>
                                    <td>0.1500%</td>
                                    <td>45.00%</td>
                                    <td>0.0825%</td>
                                 </tr>
                                 <tr>
                                    <td>VIP 1</td>
                                    <td><img src="{{ asset('img/trading-fee-pool-icon.png') }}"
                                       class="img-fluid fee-pool-icon"
                                       alt="fee Coin/Token" title="fee Coin/Token" />&nbsp;&nbsp;WOO/USDT
                                    </td>
                                    <td>0.1000%</td>
                                    <td>45.00%</td>
                                    <td>0.0550%</td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-pane fade show" id="fee-p2p" role="tabpanel" aria-labelledby="fee-p2p-tab">
                        <p>P2P transaction fees only apply to Maker. There is no fee for Taker <a
                           class="text-warning">Learn more</a></p>
                        <p>Please log in to view your exclusive rates <a class="text-warning">Login</a></p>
                        <div class="col-md-2 col-lg-2 Fiat_search-box mt-2 mb-2">
                           <lable>Fiat </lable>
                           <select class="form-control select2">
                              <option>Select</option>
                              <option selected>&#x20B9 AED</option>
                              <option>&#x20B9 AFN</option>
                              <option>&#x20B9 AMD</option>
                              <option>&#x20B9 ARS</option>
                              <option>&#x20B9 AUD</option>
                              <option>&#x20B9 AZN</option>
                              <option>&#x20B9 BGN</option>
                              <option>&#x20B9 BHD</option>
                              <option>&#x20B9 BIF</option>
                           </select>
                        </div>
                        <div class="table-responsive">
                           <table class="table table-bordered table-hover table-striped fee-p2p-table">
                              <thead class="bn-table-thead">
                                 <tr>
                                    <th>
                                       <div class="css-4cffwv">
                                          <div  class="css-vurnku">Coin/Token</div>
                                          <div class="css-1l871e7">
                                             <svg viewBox="0 0 24 24" fill="none"
                                                class="css-bgjo26">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z"
                                                   fill="currentColor"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </th>
                                    <th>
                                       <div class="css-4cffwv">
                                          <div  class="css-wp1epn">Full name</div>
                                          <div class="css-1l871e7">
                                             <svg viewBox="0 0 24 24" fill="none"
                                                class="css-bgjo26">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z"
                                                   fill="currentColor"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </th>
                                    <th>
                                       <div class="css-4cffwv">
                                          <div  class="css-dyl994">Maker</div>
                                          <div class="css-qkom0p">
                                             <div class="css-vurnku">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                   class="css-bgjo26">
                                                   <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z"
                                                      fill="currentColor"></path>
                                                </svg>
                                             </div>
                                          </div>
                                       </div>
                                    </th>
                                    <th>
                                       <div class="css-4cffwv">
                                          <div  class="css-dyl994">Taker</div>
                                          <div class="css-qkom0p">
                                             <div class="css-vurnku">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                   class="css-bgjo26">
                                                   <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z"
                                                      fill="currentColor"></path>
                                                </svg>
                                             </div>
                                          </div>
                                       </div>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody class="bn-table-tbody">
                                 <tr    class="wm-table-row wm-table-row-level-0">
                                    <td>
                                       <div class="fee-table-icon"><img
                                          src="{{ asset('img/fee-rate-icon-1.png') }}"
                                          class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token" /> BNB</div>
                                    </td>
                                    <td>Wealth Mark Coin</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                 </tr>
                                 <tr     class="wm-table-row wm-table-row-level-0">
                                    <td>
                                       <div class="fee-table-icon"><img
                                          src="{{ asset('img/fee-rate-icon-2.png') }}"
                                          class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token" />BTC</div>
                                    </td>
                                    <td>Bitcoin</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                 </tr>
                                 <tr     class="wm-table-row wm-table-row-level-0">
                                    <td>
                                       <div class="fee-table-icon"><img
                                          src="{{ asset('img/fee-rate-icon-3.png') }}"
                                          class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token" />BUSD</div>
                                    </td>
                                    <td>Wealth Mark USD</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                 </tr>
                                 <tr     class="wm-table-row wm-table-row-level-0">
                                    <td>
                                       <div class="fee-table-icon"><img
                                          src="{{ asset('img/fee-rate-icon-4.png') }}"
                                          class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token" /> DAI</div>
                                    </td>
                                    <td>DAI</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                 </tr>
                                 <tr     class="wm-table-row wm-table-row-level-0">
                                    <td>
                                       <div class="fee-table-icon"><img
                                          src="{{ asset('img/fee-rate-icon-5.png') }}"
                                          class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token" /> ETH</div>
                                    </td>
                                    <td>Ethereum</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                 </tr>
                                 <tr class="wm-table-row wm-table-row-level-0">
                                    <td>
                                       <div class="fee-table-icon"><img
                                          src="{{ asset('img/fee-rate-icon-6.png') }}"
                                          class="img-fluid" alt="fee Coin/Token" title="fee Coin/Token" />USDT</div>
                                    </td>
                                    <td>TetherUS</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                  <ul class="fee-rates-list mt-2">
                     <li class="fee-list">“Taker” is an order that trades at a market price, “Maker” is an order that
                        trades at a limited price.Learn more
                     </li>
                     <li class="fee-list">VIP trade volume levels are measured on the basis of the spot trading
                        volume, or whether the futures trading volume meets the standard (Futures trading volume
                        includes USDS-M futures and COIN-M futures).
                     </li>
                     <li class="fee-list"> Refer friends to earn trading fees 20% kickback.Learn more</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer')
      <script>
         $('.select2').select2();
      </script>
      <script>
         $(document).ready(function() {
             $(".trading-fee-boxes").click(function() {
                 $("#deposit-fee-block").hide();
                 $("#fee-rate-widgets-section").show();
                 $("#fee-tabs").show();
             });
             $(".deposit-withdrawal-boxes").click(function() {
                 $("#fee-rate-widgets-section").hide();
                 $("#fee-tabs").hide();
                 $("#deposit-fee-block").show();
             });
         });
      </script>
      <script>
         $(document).ready(function(){
           $("#myInput").on("keyup", function() {
             var value = $(this).val().toLowerCase();
             $("#myTable tr").filter(function() {
               $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
             });
           });
         });
      </script>
      <script>
         $(document).ready(function(){
           $("#myInput-2").on("keyup", function() {
             var value = $(this).val().toLowerCase();
             $("#myTable-2 tr").filter(function() {
               $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
             });
           });
         });
      </script>
   </body>
</html>
