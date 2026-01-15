<style>
@media(max-width:768px){
    #exchange-content-main-row{
        margin-top:05%;
    }
}
@media (min-width:992px) and (max-width:1200px){
    .exchange-display-img-box {
    top:15%!important;
    }
}
@media (min-width:1201px) and (max-width:1400px){
    .exchange-display-img-box {
    top:15%!important;
    }
}
#exchange-content-main-row{
    position:relative;
}
.exchange-display-img-box {
    position: absolute;
    left: 35%;
    width: 300px;
    z-index:0;
    top:0px;
}
    .exchange-main-wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
      padding: 0px 20px;
      /*margin:10px 0px;*/
      border-bottom:1px solid transparent;
}
.exchange-main-wrapper:hover {
    border-bottom: 1px solid #d5d5d5;
       padding: 0px 20px;
    cursor:pointer;
    /*margin:10px 0px;*/
}
.exchange-heading-box{
    width:300px;
}
.exchange-head-description{
    width: 400px;
}
.exchange-display-img-box{
    display:none;
}
.show{
    display:block!important;
}
@media(max-width:768px){
     .exchange-main-wrapper {
        display: block;
        }
        .exchange-head-description {
            width: 100%;
        }
        .exchange-main-wrapper:hover{
            border:0px!important;
        }
}
@media(max-width:991px){
    .exchange-display-img-box{
        display:none!important;
    }
}
@media(min-width:992px){
    .exchange-head-description {
    width: 400px;
    width: calc(100% - 70%);
    }
}
</style>
<section>
    <div class="container">
        <div class="bg-light-blue shadow-sm rounded px-3 py-3">
             <div class="row  align-items-center">
                <div class="col-md-6 col-xs-12 col-sm-6 text-left">
                    <div class="sec-title mb-2">
                        <h2 class="heading-h2 m-0 mb-0 p-0 pb-0"><span class="yellow-text">Advantages</span> of P2P Exchange</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 text-left">
                    <div class="p2p-tabs-btn text-right mt-2 mb-2">
                        <a href="javascript:void(0)" id="Buy_Crypto" class="active">Buy Crypto</a>
                        <a href="javascript:void(0)" id="Sell_Crypto">Sell Crypto</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="bg-white pt-1 mt-3 mb-3"></div>
                </div>
            </div>
            <div>
                <div class="row Sell_Crypto hide">

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-2">
                                    <div class="steps-inner-box">
                                        <div class="show-number mb-3">
                                            <img src="{{ asset('assets/img/p2p-trading/place-an-order.svg') }}"   class="img-fluid max-width-60px" alt="gift Card Image">
                                        </div>
                                        <h4>Place an Order</h4>
                                        <div class="text text-center">Once you place a P2P order, the crypto asset will be escrowed
                                            by Wealth Mark
                                            P2P.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-2">
                                    <div class="steps-inner-box">
                                        <div class="show-number mb-3">
                                            <img src="{{ asset('assets/img/p2p-trading/pay-the-seller.svg') }}"  class="img-fluid max-width-60px" alt="gift Card Image">
                                        </div>
                                        <h4>Pay the Seller</h4>
                                        <div class="text">Send money to the seller via the suggested payment methods.
                                            Complete the
                                            fiat.</div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-2">
                                    <div class="steps-inner-box">
                                        <div class="show-number mb-3">
                                            <img src="{{ asset('assets/img/p2p-trading/get-your-crypto.svg') }}"  class="img-fluid max-width-60px" alt="gift Card Image">
                                        </div>
                                        <h4>Get your Crypto</h4>
                                        <div class="text">Once the seller confirms receipt of money, the escrowed crypto
                                            will be
                                            released to you.</div>
                                    </div>
                                </div>
                            </div>
                <div class="row Buy_Crypto ">

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-2">
                                    <div class="steps-inner-box">
                                        <div class="show-number mb-3">
                                            <img src="{{ asset('assets/img/p2p-trading/place-an-order.svg') }}"   class="img-fluid max-width-60px" alt="gift Card Image">
                                        </div>
                                        <h4>Place an Order</h4>
                                        <div class="text text-center">Once you place a P2P order, the crypto asset will be escrowed
                                            by Wealth Mark
                                            P2P.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-2">
                                    <div class="steps-inner-box">
                                        <div class="show-number mb-3">
                                            <img src="{{ asset('assets/img/p2p-trading/pay-the-seller.svg') }}"  class="img-fluid max-width-60px" alt="gift Card Image">
                                        </div>
                                        <h4>Confirm the Payment</h4>
                                        <div class="text">Check the transaction record in the given payment account, and make sure you receive the money sent by the buyer..</div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-2">
                                    <div class="steps-inner-box">
                                        <div class="show-number mb-3">
                                            <img src="{{ asset('assets/img/p2p-trading/get-your-crypto.svg') }}"  class="img-fluid max-width-60px" alt="gift Card Image">
                                        </div>
                                        <h4>Release Crypto</h4>
                                        <div class="text">Once you confirm the receipt of money, release crypto to the buyer on Binance P2P.</div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</section>




<section class="bg-light-blue">
   <div class="container">
      <div class="row">
         <div  class="col-md-12 text-left">
            <div class="sec-title  mb-2 ">
               <h2 class="heading-h2"><span class="yellow-text">Advantages</span> of P2P Exchange</h2>
            </div>
         </div>
      </div>
      <div class="row align-items-center" id="exchange-content-main-row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="exchange-main-wrapper low-trans-fee-hover">
               <div class="exchange-heading-box" id="low-trans-fee">
                  <h4>Low Transaction Fees</h4>
               </div>
               <div class="low-trans-fee exchange-head-description">
                  <div class="text">
                     <span class="yellow-text">On Wealthmark P2P,</span> takers are charged zero trading fees. We pledge to apply the lowest P2P transaction fees for all markets.
                  </div>
               </div>
            </div>
             <div class="exchange-display-img-box" style="display:block">
               <img src="{{ asset('assets/img/p2p-trading/low-transaction.png') }}"  class="max-width-300px">
          </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="exchange-main-wrapper flexible-pay-method-hover">
               <div class="exchange-heading-box" id="flexible-pay-method">
                  <h4>Flexible Payment Methods</h4>
               </div>
               <div class="flexible-pay-method exchange-head-description">
                  <div class="text">
                        <span class="yellow-text">Peer-to-peer (P2P)</span> exchanges allow sellers the freedom to define how they want to be paid. Buy and sell crypto with over 700 payment methods, including bank transfer, cash, M-Pesa, and multiple e-wallets.
                  </div>
               </div>
            </div>
             <div class="exchange-display-img-box" >
             <img src="{{ asset('assets/img/p2p-trading/flexible-payment.png') }}"  class="max-width-300px">
          </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="exchange-main-wrapper preferred prices-hover">
               <div class="exchange-heading-box" id="preferred prices">
                  <h4>Trade at Your Preferred Prices</h4>
               </div>
               <div class="preferred prices exchange-head-description">
                  <div class="text">
                        <span class="yellow-text">Trade crypto</span> with the freedom to buy and sell at your preferred prices. Buy or sell from the existing offers, or create trade advertisements to set your own prices.
                  </div>
               </div>
            </div>

             <div class="exchange-display-img-box">
               <img src="{{ asset('assets/img/p2p-trading/trade-preferred.png') }}"  class="max-width-300px">
          </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="exchange-main-wrapper protecting-privacy-hover">
               <div class="exchange-heading-box" id="protecting-privacy">
                  <h4>Protecting Your Privacy</h4>
               </div>
               <div class="protecting-privacy exchange-head-description">
                  <div class="text">
                       <span class="yellow-text"> Unlike credit card</span> or bank transfers, peer-to-peer exchanges do not collect information about buyers and sellers.
                  </div>
               </div>
            </div>

             <div class="exchange-display-img-box">
                         <img src="{{ asset('assets/img/p2p-trading/protecting-your.png') }}"  class="max-width-300px">
          </div>
         </div>


         <!--<div class="col-md-6 col-sm-12">-->
         <!--    <div class="d-flex align-items-center w-100 py-3 px-4 my-2">-->
         <!--        <span class="me-3 max-width-80px">-->
         <!--            <img src="{{ asset('assets/img/p2p-trading/low-transaction-fee.png') }}"  class="max-width-60px" /> -->
         <!--        </span>-->
         <!--        <div>-->
         <!--            <h4 class="title mb-1">Low Transaction Fees</h4>-->
         <!--            <div class="fs-14 fw-normal">-->
         <!--                On Wealthmark P2P, takers are charged zero trading fees. We pledge to apply the lowest P2P transaction fees for all markets.-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--    <div class="d-flex align-items-center w-100 py-3 px-4 my-2">-->
         <!--        <span class="me-3 max-width-80px">-->
         <!--            <img src="{{ asset('assets/img/p2p-trading/flexible-payment-methods.png') }}"  class="max-width-60px" /> -->
         <!--        </span>-->
         <!--        <div>-->
         <!--            <h4 class="title mb-1">Flexible Payment Methods</h4>-->
         <!--            <div class="fs-14 fw-normal">-->
         <!--               Peer-to-peer (P2P) exchanges allow sellers the freedom to define how they want to be paid. Buy and sell crypto with over 700 payment methods, including bank transfer, cash, M-Pesa, and multiple e-wallets.-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--    <div class="d-flex align-items-center w-100 py-3 px-4 my-2">-->
         <!--        <span class="me-3 max-width-80px">-->
         <!--         <img src="{{ asset('assets/img/p2p-trading/trade-preferred-prices.png') }}"  class="max-width-60px" /> -->
         <!--        </span>-->
         <!--        <div>-->
         <!--            <h4 class="title mb-1">Trade at Your Preferred Prices</h4>-->
         <!--            <div class="fs-14 fw-normal">-->
         <!--               Trade crypto with the freedom to buy and sell at your preferred prices. Buy or sell from the existing offers, or create trade advertisements to set your own prices.-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--    <div class="d-flex align-items-center w-100 py-3 px-4 my-3">-->
         <!--        <span class="me-3 max-width-80px">-->
         <!--          <img src="{{ asset('assets/img/p2p-trading/protecting-pricacy.png') }}"  class="max-width-60px" /> -->
         <!--        </span>-->
         <!--        <div>-->
         <!--            <h4 class="title mb-1">Protecting Your Privacy</h4>-->
         <!--            <div class="fs-14 fw-normal">-->
         <!--              Unlike credit card or bank transfers, peer-to-peer exchanges do not collect information about buyers and sellers.-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--</div>-->
         <!--<div class="col-md-6 col-sm-6 hide-768px text-center">-->
         <!--    <img src="{{ asset('assets/img/p2p-trading/advantages-of-p2p.svg') }}"  class="max-width-300px">-->
         <!--</div>-->
      </div>
   </div>
</section>


<div class="bg-white p-5">
    <div class="payment-type-div">
       <div class="payment-type-div-heading">Top Payment Methods</div>
       <div class="payment-type-inner-div">
          <div class="payment-type-inner-div-block">
             <a href="javascript:void(0)" target="_blank" class="payment-type-a">
                <div class="payment-type-a-div-color yellow"></div>
                <div class="payment-type-a-div">Bank Transfer</div>
             </a>
          </div>
          <div class="payment-type-inner-div-block">
             <a href="javascript:void(0)" target="_blank" class="payment-type-a">
                <div class="payment-type-a-div-color blue"></div>
                <div  class="payment-type-a-div">Alipay</div>
             </a>
          </div>
          <div class="payment-type-inner-div-block">
             <a href="javascript:void(0)" target="_blank" class="payment-type-a">
                <div class="payment-type-a-div-color green"></div>
                <div  class="payment-type-a-div">WeChat</div>
             </a>
          </div>
       </div>
    </div>
</div>


<script>
$(document).ready(function(){
  $(".exchange-main-wrapper").mouseover(function(){
   $(this).siblings(".exchange-display-img-box").addClass("show");
  });
  $(".exchange-main-wrapper").mouseout(function(){
   $(this).siblings(".exchange-display-img-box").removeClass("show");
  });
});
</script>
