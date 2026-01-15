  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
      @include('template.web_css')

      <style>

.Claim-reward-div{
    font-size:14px;
    display:flex;
}


.wm-pool-new-div-header{
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: flex;
    align-items: center;
    background: #f5f8fd !important;
    padding: 10px 0px;
    border-radius: 10px;
    color:black;
    margin-bottom:10px;
}
.wm-pool-new-div-header > div.h-pool{
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    /*color: rgb(132, 142, 156);*/
    flex: 0 0 200px;
    font-size: 12px;
    padding: 8px 16px;
}
.wm-pool-new-div-header > div.h-Liquidity{
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    /*color: rgb(132, 142, 156);*/
    flex: 0 0 230px;
    font-size: 12px;
    padding: 8px 16px
}
.wm-pool-new-div-header > div.h-Total_Yield{
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    /*color: rgb(132, 142, 156);*/
    flex: 0 0 130px;
    font-size: 12px;
    padding: 8px 16px;
}

.wm-pool-new-div-header > div.h-Reward_Coins{
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    /*color: rgb(132, 142, 156);*/
    flex: 0 0 195px;
    font-size: 12px;
    padding: 8px 16px;
}

.wm-pool-new-div-header > div.h-Volume{
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    /*color: rgb(132, 142, 156);*/
    flex: 0 0 160px;
    font-size: 12px;
    padding: 8px 0px;
}

.wm-pool-new-div-header > div.h-Operation{
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    /*color: rgb(132, 142, 156);*/
    flex: 0 0 auto;
    font-size: 12px;
    padding: 8px 16px;
}
  .wm-pool-new-div-body-row  {
        box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    align-items: center;
    flex: 1 1 0%;
    }



    .wm-pool-new-div-body .wm-pool-new-div-body-row > div.coin-name-wm {
        box-sizing: border-box;
        margin: 0px;
        min-width: 0px;
        display: flex;
        width:15%;
    }
    .wm-pool-new-div-body .wm-pool-new-div-body-row > div.Yield_div_append   {
        box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    width:20%;
    }
  .wm-pool-new-div-body .wm-pool-new-div-body-row > div.total_Yield  {
        box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
     width:10%;
    }
  .wm-pool-new-div-body .wm-pool-new-div-body-row > div.wm-reward-append  {
        box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
   width:15%;
    padding-left:15px;
    }

  .wm-pool-new-div-body .wm-pool-new-div-body-row > div.wp-pool-valume  {
        box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    width:15%;
    }

.wm-pool-new-div-body .wm-pool-new-div-body-row > div.lot-duration-div {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
     width:33%;
}










.wm-pool-new-div-body{
    padding:10px !important;
    border-bottom: 2px solid #f5f8fd !important;
    position:relative;
}
.wm-pool-record-exapnd{
          display:none ;
}
.wm-lbl-txt{
      display:none;
}
  .breakdown {
    box-sizing: border-box;
    margin: 2px 0px 0px;
    min-width: 0px;
    flex-direction: column;
    width:32%;
    margin-top: 15px;
    display:none;
}
 .css-1c4j93t {
    box-sizing: border-box;
    margin: 5px 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.css-4cffwv {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}
.css-10nf7hq {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.css-10nf7hq {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.css-q2gesv {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(30, 35, 41);
    -webkit-box-align: center;
    align-items: center;
    display: inline-flex;
}
.css-1o5qkvw {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    max-width: 100%;
    z-index: 0;
    background-color: rgb(255, 255, 255);
    border-radius: 50%;
    width: 16px;
    height: 16px;
}
.css-i5epbj {
    box-sizing: border-box;
    margin: 0px 0px 0px 4px;
    min-width: 0px;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    color: rgb(24, 26, 32);
}
.css-sl45q9 {
    box-sizing: border-box;
    margin: 1px 0px 0px 5px;
    min-width: 0px;
    font-size: 12px;
    font-weight: 300;
    zoom: 0.85;
    color: rgb(24, 26, 32);
}
.css-1srq5nc {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-size: 12px;
    color: rgb(3, 166, 109);
}

 @media (max-width:1279px){
.lot-duration-div div:last-child{
    display:none !important;
}
 .coin-name-wm , .Yield_div ,.total_Yield, .wm-reward-append, .wp-pool-valume{
    width: 32% !important;
    margin-bottom: 15px !important;

 }
 .lot-duration-div{
     width:100% !important;
     justify-content:space-between!important;
         margin-top: 20px !important
 }

 .wm-pool-new-div-header .h-Reward_Coins , .wm-pool-new-div-header .h-Volume , .wm-pool-new-div-header .h-Operation{
     display:none !important;
 }

 .wm-pool-record-exapnd{display:block !important;}
 div.wm-reward-append{
     flex-direction:column !important;
     margin-top:15px !important;
 }
 .wm-lbl-txt{
     display:block;
     box-sizing: border-box;
    margin: 0px 0px 5px;
    min-width: 0px;
    color: rgb(71, 77, 87);
    font-size: 12px;
 }
 div.wp-pool-valume{
     flex-direction:column !important;
     margin-top:15px !important;
 }
 .wp-pool-tbl-div1{
     margin:5px;
     margin-top:0px !important;
 }
 .wm-pool-new-div-body-row{
     align-items: self-start !important;
    justify-content: space-between !important;
    flex-wrap: wrap;
 }

 .wm-pool-new-div-body{
     max-height: 60px;
    overflow: hidden;
     transition: all .10s ease-in-out;
 }
 .breakdown{
     display:flex !important;
 }
  .wm-pool-new-div-body.open{
     max-height:max-content !important;
     overflow:auto !important;
     height: auto !important;
     box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
     /*border: 1px solid #f5f8fd !important;*/
 }
 }




  @media (max-width:768px){
     .breakdown{
        order:6 !important;
         width:50% !important;
     }
     div.wm-reward-append{
      order:5 !important;
    width:50% !important;
    padding-left:0px !important;
     }
     .wp-pool-valume{
       order:4 !important;
        width:50% !important;
     }
     div.Yield_div_append{
        order:3 !important;
        width:50% !important;
        margin-top:15px;
     }
     .lot-duration-div{
         order:7 !important;
     }
  }

   @media (max-width:768px){
     .breakdown{
        order:6 !important;
         width:100% !important;
     }
     div.wm-reward-append{
      order:5 !important;
    width:100% !important;
    padding-left:0px !important;
     }
     .wp-pool-valume{
       order:4 !important;
        width:100% !important;
     }
     div.Yield_div_append{
        order:3 !important;
        width:100% !important;
        margin-top:15px;
     }
     .lot-duration-div{
         order:7 !important;
     }
  }

 </style>


  </head>

  <body class="bg-white">
      @include('template.web_menu')

<div class="Liquid_Swap_top pt-5 mb-0 pb-0">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-md-8 col-sm-10 col-xs-12">
                      <div class="sec-title text-center">
                          <span class="title">Welcome to Wealthmark</span>
                          <h2 class="heading-h2 text-white">Wealthmark Liquid Swap </h2>
                          <div class="text text-center text-white">Trade Instantly & Pool Tokens to Earn Rewards</div>
                      </div>

                  </div>

              </div>

          </div>

      </div>
<div class="Liquid_Swap_bg-overlay">
          <div class="container">
              <div class="tab-pills-div-top">
                  <div class="tab-pills-div-top-left scrollbar-style">
                      <a href="{{ url( app()->getLocale(), 'wm-pool') }}" class="lp-link-top">
                          <div class="active-tab lp-link-top-active">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Overview</div>
                              </div>
                          </div>
                      </a>
                      <a href="{{ url( app()->getLocale(), 'liquidity-farming') }}" class="lp-link-top">
                          <div class=" lp-link-top-block">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Liquidity</div>
                              </div>
                          </div>
                      </a>
                      <a href="{{ url( app()->getLocale(), 'swap-farming') }}" class="lp-link-top">
                          <div class=" lp-link-top-block">
                              <div class="lp-link-top-block-inner">
                                  <div class="lp-link-top-txt">Swap</div>
                                  <div class="lp-reward">
                                      <div class="lp-reward-txt">Rewards</div>
                                  </div>
                              </div>
                          </div>
                      </a>
                      <div class="lp-link-top-block">
                          <div class="lp-link-top-block-inner">
                              <div class="lp-link-top-txt">History</div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pills-div-top-right">
                      <button type="button" class=" tutorial-btn">
                          <svg viewBox="0 0 24 24" fill="none" class="tutorial-btn-video">
                              <path
                                  d="M12 3.35c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8s8.8-3.9 8.8-8.8c0-4.8-4-8.8-8.8-8.8zm0 15.6c-3.7 0-6.8-3-6.8-6.8 0-3.7 3-6.8 6.8-6.8s6.8 3 6.8 6.8c0 3.7-3.1 6.8-6.8 6.8z"
                                  fill="currentColor"></path>
                              <path d="M16.5 12.15l-6.8-3.9v7.8l6.8-3.9z" fill="currentColor"></path>
                          </svg>
                          <div class="tutorial-btn-txt">Tutorial</div>
                      </button>
                      <a href="#" class="tab-pills-div-top-right-txt">FAQ</a>
                  </div>
              </div>
          </div>
      </div>



  <section>
        <div class="container">
            <div class="wm-pool-new-div">
                        <div class="wm-pool-new-div-header">
                            <div class="h-pool">  Pool </div>
                            <div class="h-Liquidity"> Liquidity </div>
                            <div class="h-Total_Yield"> Total Yield  </div>
                            <div class="h-Reward_Coins">  Reward Coins </div>
                            <div class="h-Volume">  Volume (24hr) </div>
                            <div class="h-Operation">Operation</div>

                        </div>
                        <div class="wm-pool-new-div-body" id="demo1">
                              <div class="wm-pool-new-div-body-row">
                                <div class="coin-name-wm">
                                  <div class="wp-pool-tbl-div1">
                                    <div class="pool-wm-coin-div">
                                      <div class="pool-wm-coin-div-inner">
                                        <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">
                                        <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                      </div>
                                    </div>
                                    <div class="pool-wm-coin-title-main">ARPA/USDT</div>
                                  </div>
                                </div>
                                <div class="Yield_div Yield_div_append">
                                  <div class="Yield_title">1,329,739 USD</div>
                                  <div class="Yield_subtitle">17,115,837 ARPA + 663,886 USDT</div>
                                </div>
                                <div class="d-flex total_Yield">
                                  <div class="Yield_precentage">38.93%</div>
                                  <div class="Yield_precentage-icn-div">
                                    <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">
                                      <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>
                                      <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                                <div class="wm-pool-record-exapnd">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div class="wp-pool-valume">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>

                                   250,041 USD
                                </div>
                                <div class="wm-reward-append">
                                   <div class="wm-lbl-txt">Volume (24hr)</div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                      ARPA
                                    </div>
                                  </div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                     BNB
                                    </div>
                                  </div>

                                </div>
                                <div class="breakdown">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>
                                      <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                  </div>
                                <div class="lot-duration-div wm-btn-append">
                                  <div class="a-click box-border-gray yellow-text">Add</div>
                                  <div class="a-click box-border-gray yellow-text">Remove</div>
                                  <div class="a-click box-border-gray yellow-text">Swap</div>
                                  <div class="a-click box-border-gray">My Portion</div>
                                </div>

                              </div>


                        </div>
                        <div class="wm-pool-new-div-body" id="demo2">
                              <div class="wm-pool-new-div-body-row">
                                <div class="coin-name-wm">
                                  <div class="wp-pool-tbl-div1">
                                    <div class="pool-wm-coin-div">
                                      <div class="pool-wm-coin-div-inner">
                                        <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">
                                        <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                      </div>
                                    </div>
                                    <div class="pool-wm-coin-title-main">ARPA/USDT</div>
                                  </div>
                                </div>
                                <div class="Yield_div Yield_div_append">
                                  <div class="Yield_title">1,329,739 USD</div>
                                  <div class="Yield_subtitle">17,115,837 ARPA + 663,886 USDT</div>
                                </div>
                                <div class="d-flex total_Yield">
                                  <div class="Yield_precentage">38.93%</div>
                                  <div class="Yield_precentage-icn-div">
                                    <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">
                                      <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>
                                      <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                                <div class="wm-pool-record-exapnd">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div class="wp-pool-valume">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>

                                   250,041 USD
                                </div>
                                <div class="wm-reward-append">
                                   <div class="wm-lbl-txt">Volume (24hr)</div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                      ARPA
                                    </div>
                                  </div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                     BNB
                                    </div>
                                  </div>

                                </div>
                                <div class="breakdown">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>
                                      <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                  </div>
                                <div class="lot-duration-div wm-btn-append">
                                  <div class="a-click box-border-gray yellow-text">Add</div>
                                  <div class="a-click box-border-gray yellow-text">Remove</div>
                                  <div class="a-click box-border-gray yellow-text">Swap</div>
                                  <div class="a-click box-border-gray">My Portion</div>
                                </div>

                              </div>


                        </div>
                        <div class="wm-pool-new-div-body" id="demo2">
                              <div class="wm-pool-new-div-body-row">
                                <div class="coin-name-wm">
                                  <div class="wp-pool-tbl-div1">
                                    <div class="pool-wm-coin-div">
                                      <div class="pool-wm-coin-div-inner">
                                        <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">
                                        <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                      </div>
                                    </div>
                                    <div class="pool-wm-coin-title-main">ARPA/USDT</div>
                                  </div>
                                </div>
                                <div class="Yield_div Yield_div_append">
                                  <div class="Yield_title">1,329,739 USD</div>
                                  <div class="Yield_subtitle">17,115,837 ARPA + 663,886 USDT</div>
                                </div>
                                <div class="d-flex total_Yield">
                                  <div class="Yield_precentage">38.93%</div>
                                  <div class="Yield_precentage-icn-div">
                                    <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">
                                      <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>
                                      <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                                <div class="wm-pool-record-exapnd">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div class="wp-pool-valume">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>

                                   250,041 USD
                                </div>
                                <div class="wm-reward-append">
                                   <div class="wm-lbl-txt">Volume (24hr)</div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                      ARPA
                                    </div>
                                  </div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                     BNB
                                    </div>
                                  </div>

                                </div>
                                <div class="breakdown">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>
                                      <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                  </div>
                                <div class="lot-duration-div wm-btn-append">
                                  <div class="a-click box-border-gray yellow-text">Add</div>
                                  <div class="a-click box-border-gray yellow-text">Remove</div>
                                  <div class="a-click box-border-gray yellow-text">Swap</div>
                                  <div class="a-click box-border-gray">My Portion</div>
                                </div>

                              </div>


                        </div>
                        <div class="wm-pool-new-div-body" id="demo2">
                              <div class="wm-pool-new-div-body-row">
                                <div class="coin-name-wm">
                                  <div class="wp-pool-tbl-div1">
                                    <div class="pool-wm-coin-div">
                                      <div class="pool-wm-coin-div-inner">
                                        <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">
                                        <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                      </div>
                                    </div>
                                    <div class="pool-wm-coin-title-main">ARPA/USDT</div>
                                  </div>
                                </div>
                                <div class="Yield_div Yield_div_append">
                                  <div class="Yield_title">1,329,739 USD</div>
                                  <div class="Yield_subtitle">17,115,837 ARPA + 663,886 USDT</div>
                                </div>
                                <div class="d-flex total_Yield">
                                  <div class="Yield_precentage">38.93%</div>
                                  <div class="Yield_precentage-icn-div">
                                    <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">
                                      <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>
                                      <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>
                                    </svg>
                                  </div>
                                </div>
                                <div class="wm-pool-record-exapnd">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div class="wp-pool-valume">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>

                                   250,041 USD
                                </div>
                                <div class="wm-reward-append">
                                   <div class="wm-lbl-txt">Volume (24hr)</div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                      ARPA
                                    </div>
                                  </div>
                                  <div class="wp-pool-tbl-div1">
                                    <div class="wp-pool-tbl-div-img">
                                      <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                    </div>
                                    <div class="wp-pool-tbl-reward-txt">

                                     BNB
                                    </div>
                                  </div>

                                </div>
                                <div class="breakdown">
                                      <div class="wm-lbl-txt">Volume (24hr)</div>
                                      <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                        <div class="css-1c4j93t">
                                          <div class="css-4cffwv">
                                            <div class="css-10nf7hq">
                                              <div class="css-10nf7hq">
                                                <div class="css-q2gesv">
                                                  <img class="css-1o5qkvw" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">
                                                </div>
                                              </div>
                                              <div class="css-i5epbj">BNB</div>
                                              <div class="css-sl45q9">Rewards</div>
                                            </div>
                                          </div>
                                          <div class="css-1srq5nc">0.31%</div>
                                        </div>
                                  </div>
                                <div class="lot-duration-div wm-btn-append">
                                  <div class="a-click box-border-gray yellow-text">Add</div>
                                  <div class="a-click box-border-gray yellow-text">Remove</div>
                                  <div class="a-click box-border-gray yellow-text">Swap</div>
                                  <div class="a-click box-border-gray">My Portion</div>
                                </div>

                              </div>


                        </div>

                </div>

            <!--<div>-->
                <!--<table class="responsive-table">-->
		<!-- Responsive Table Header Section -->
		<!--<thead class="responsive-table__head">-->
		<!--	<tr class="responsive-table__row">-->
		<!--		<th class="responsive-table__head__title responsive-table__head__title--name">Pool 	</th>-->
		<!--		<th class="responsive-table__head__title responsive-table__head__title--status">Liquidity</th>-->
		<!--		<th class="responsive-table__head__title responsive-table__head__title--types">Total Yield </th>-->
		<!--		<th class="responsive-table__head__title responsive-table__head__title--update">Reward Coins</th>-->
		<!--		<th class="responsive-table__head__title responsive-table__head__title--update">Volume (24hr)</th>-->
		<!--		<th class="responsive-table__head__title responsive-table__head__title--country">Operation</th>-->
		<!--	</tr>-->
		<!--</thead>-->

		<!--<tbody class="responsive-table__body">-->

		<!--	<tr class="responsive-table__row">-->
		<!--	    <td class="responsive-table__body__text responsive-table__body__text--name">-->
		<!--	 <div class="coin-name-wm">-->
  <!--                                <div class="wp-pool-tbl-div1">-->
  <!--                                  <div class="pool-wm-coin-div">-->
  <!--                                    <div class="pool-wm-coin-div-inner">-->
  <!--                                      <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">-->
  <!--                                      <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
  <!--                                    </div>-->
  <!--                                  </div>-->
  <!--                                  <div class="pool-wm-coin-title-main">demo1</div>-->
  <!--                                </div>-->
  <!--                              </div>-->

		<!--		</td>-->
		<!--		<td class="responsive-table__body__text responsive-table__body__text--name">-->
				<!--user-icon-->
		<!--		 <div class="Yield_div Yield_div_append">-->
  <!--                                <div class="Yield_title">795,926 USD</div>-->
  <!--                                <div class="Yield_subtitle">15,333,972 IOTX + 398,010 USDT</div>-->
  <!--                              </div>-->

		<!--		</td>-->
		<!--		<td class="responsive-table__body__text responsive-table__body__text--status">-->
		<!--		    <div class="d-flex total_Yield">-->
  <!--                                <div class="Yield_precentage">2.65%</div>-->
  <!--                                <div class="Yield_precentage-icn-div">-->
  <!--                                  <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">-->
  <!--                                    <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>-->
  <!--                                    <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>-->
  <!--                                  </svg>-->
  <!--                                </div>-->
  <!--                              </div>-->
		<!--		</td>-->
		<!--		<td class="responsive-table__body__text responsive-table__body__text--types">-->
		<!--		    <div class="wm-reward-append">-->

  <!--                                <div class="wp-pool-tbl-div1">-->
  <!--                                  <div class="wp-pool-tbl-div-img">-->
  <!--                                    <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
  <!--                                  </div>-->
  <!--                                  <div class="wp-pool-tbl-reward-txt">-->

  <!--                                      demo-text-->
  <!--                                  </div>-->
  <!--                                </div>-->
  <!--                              </div>-->
		<!--		</td>-->
		<!--		<td class="responsive-table__body__text responsive-table__body__text--update">-->
		<!--		     <div class="wp-pool-valume wp-pool-valume-append">-->
  <!--                                  <span class="wp-pool-inner-lbl">Volume (24hr)</span>-->
  <!--                                  115,914 USD-->
  <!--                              </div>-->
		<!--		</td>-->
		<!--		<td class="responsive-table__body__text responsive-table__body__text--country">-->
		<!--		      <div class="lot-duration-div wm-btn-append">-->
  <!--                                <div class="a-click box-border-gray yellow-text">Add</div>-->
  <!--                                <div class="a-click box-border-gray yellow-text">Remove</div>-->
  <!--                                <div class="a-click box-border-gray yellow-text">Swap</div>-->
  <!--                                <div class="a-click box-border-gray">My Portion</div>-->
  <!--                              </div>-->
		<!--		</td>-->
		<!--	</tr>-->
		<!--</tbody>-->
	<!--</table>-->
            <!--</div>-->
            </div>
        </div>
  </section>



      @include('template.country_language')
      @include('template.web_footer')



      <script>
    // function addRemoveDiv() {
    //         var wW = $(window).width();
    //         const divid = $('.wm-pool-new-div .wm-pool-new-div-body').attr('id');
    //         if (wW <= 992) {
    //             $("#"+divid).children('.wm-mob-btn-show').html($("#"+divid).children('.wm-pool-new-div-body-row').children('.wm-btn-append'));
    //             $("#"+divid).children('.wm-mob-record-show').children('.div-1').html($("#"+divid).children('.wm-pool-new-div-body-row').children('.wm-reward-append'));
    //             $("#"+divid).children('.wm-mob-record-show').children('.div-2').html($("#"+divid).children('.wm-pool-new-div-body-row').children('.wp-pool-valume-append'));
    //         }
    //         if(wW <= 768){
    //             $("#"+divid).children('.wm-mob-record-show').children('.div-3').html($("#"+divid).children('.wm-pool-new-div-body-row').children('.Yield_div_append'));
    //         }

    //     }




      </script>

      <script>
        // $(document).ready(function(){

        //   $(window).resize(function(){
        //     //   console.log('k');
        //     //   let divid = $('.wm-pool-new-div .wm-pool-new-div-body').siblings();
        //     //   console.log(divid[1]);
        //     //   console.log(divid[2]);
        //     var wW = $(window).width();
        //      if (wW <= 1279) {
        //         $('.wm-btn-append').appendTo('.append_btn_here');
        //         $('.wp-pool-valume-append').appendTo('.wm-pool-record-show');
        //         $('.wm-reward-append').appendTo('.wm-pool-record-show');
        //         $('.Yield_div_append').appendTo('.wm-pool-record-show');

        //      }
        //      else if(wW >= 1279) {

        //          $('.wm-btn-append').insertAfter('.wm-pool-record-exapnd');
        //           $('.wm-reward-append').insertAfter('.wm-pool-record-exapnd');
        //           $('.Yield_div_append').insertAfter('.coin-name-wm');
        //           $('.wp-pool-valume-append').insertAfter('.wm-pool-record-exapnd');
        //      }
        //   });




        // });







//         const headTitleName = document.querySelector(
// 	".responsive-table__head__title--name"
// );
// const headTitleStatus = document.querySelector(
// 	".responsive-table__head__title--status"
// );
// const headTitleTypes = document.querySelector(
// 	".responsive-table__head__title--types"
// );
// const headTitleUpdate = document.querySelector(
// 	".responsive-table__head__title--update"
// );
// const headTitleCountry = document.querySelector(
// 	".responsive-table__head__title--country"
// );

// // Select tbody text from Dom
// const bodyTextName = document.querySelectorAll(
// 	".responsive-table__body__text--name"
// );
// const bodyTextStatus = document.querySelectorAll(
// 	".responsive-table__body__text--status"
// );
// const bodyTextTypes = document.querySelectorAll(
// 	".responsive-table__body__text--types"
// );
// const bodyTextUpdate = document.querySelectorAll(
// 	".responsive-table__body__text--update"
// );
// const bodyTextCountry = document.querySelectorAll(
// 	".responsive-table__body__text--country"
// );

// // Select all tbody table row from Dom
// const totalTableBodyRow = document.querySelectorAll(
// 	".responsive-table__body .responsive-table__row"
// );

// // Get thead titles and append those into tbody table data items as a "data-title" attribute
// for (let i = 0; i < totalTableBodyRow.length; i++) {
// 	bodyTextName[i].setAttribute("data-title", headTitleName.innerText);
// 	bodyTextStatus[i].setAttribute("data-title", headTitleStatus.innerText);
// 	bodyTextTypes[i].setAttribute("data-title", headTitleTypes.innerText);
// 	bodyTextUpdate[i].setAttribute("data-title", headTitleUpdate.innerText);
// 	bodyTextCountry[i].setAttribute("data-title", headTitleCountry.innerText);
// }
</script>


<script>

$('.wm-pool-record-exapnd').click(function(){
    $(this).closest('.wm-pool-new-div-body').siblings().removeClass('open');
    $(this).closest('.wm-pool-new-div-body').toggleClass('open');
});


</script>






  </body>

  </html>






















































   <!--<div class="wm-pool-new-div-body" id="demo1" onesize="addRemoveDiv(this.id)">-->
                        <!--      <div class="wm-pool-new-div-body-row">-->
                        <!--        <div class="">-->
                        <!--          <div class="wp-pool-tbl-div1">-->
                        <!--            <div class="pool-wm-coin-div">-->
                        <!--              <div class="pool-wm-coin-div-inner">-->
                        <!--                <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">-->
                        <!--                <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
                        <!--              </div>-->
                        <!--            </div>-->
                        <!--            <div class="pool-wm-coin-title-main">demo1</div>-->
                        <!--          </div>-->
                        <!--        </div>-->
                        <!--        <div class="Yield_div Yield_div_append">-->
                        <!--          <div class="Yield_title">795,926 USD</div>-->
                        <!--          <div class="Yield_subtitle">15,333,972 IOTX + 398,010 USDT</div>-->
                        <!--        </div>-->
                        <!--        <div class="d-flex">-->
                        <!--          <div class="Yield_precentage">2.65%</div>-->
                        <!--          <div class="Yield_precentage-icn-div">-->
                        <!--            <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">-->
                        <!--              <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>-->
                        <!--              <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>-->
                        <!--            </svg>-->
                        <!--          </div>-->
                        <!--        </div>-->

                        <!--        <div class="wm-reward-append">-->

                        <!--          <div class="wp-pool-tbl-div1">-->
                        <!--            <div class="wp-pool-tbl-div-img">-->
                        <!--              <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
                        <!--            </div>-->
                        <!--            <div class="wp-pool-tbl-reward-txt">-->

                        <!--                demo-text-->
                        <!--            </div>-->
                        <!--          </div>-->
                        <!--        </div>-->


                        <!--        <div class="wp-pool-valume wp-pool-valume-append">-->
                        <!--            <span class="wp-pool-inner-lbl">Volume (24hr)</span>-->
                        <!--            115,914 USD-->
                        <!--        </div>-->
                        <!--        <div class="lot-duration-div wm-btn-append">-->
                        <!--          <div class="a-click box-border-gray yellow-text">Add</div>-->
                        <!--          <div class="a-click box-border-gray yellow-text">Remove</div>-->
                        <!--          <div class="a-click box-border-gray yellow-text">Swap</div>-->
                        <!--          <div class="a-click box-border-gray">My Portion</div>-->
                        <!--        </div>-->

                        <!--      </div>-->

                        <!--     <div class="wm-pool-btn-show">-->

                        <!--    </div>-->
                        <!--     <div class="wm-pool-record-show">-->
                        <!--        <div class="div-1"></div>-->
                        <!--        <div class="div-2"></div>-->
                        <!--        <div class="div-3"></div>-->
                        <!--     </div>-->
                        <!--</div>-->

                        <!-- <div class="wm-pool-new-div-body" id="demo1" onresize="addRemoveDiv(this.id)">-->
                        <!--      <div class="wm-pool-new-div-body-row">-->
                        <!--        <div class="">-->
                        <!--          <div class="wp-pool-tbl-div1">-->
                        <!--            <div class="pool-wm-coin-div">-->
                        <!--              <div class="pool-wm-coin-div-inner">-->
                        <!--                <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">-->
                        <!--                <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
                        <!--              </div>-->
                        <!--            </div>-->
                        <!--            <div class="pool-wm-coin-title-main">demo1</div>-->
                        <!--          </div>-->
                        <!--        </div>-->
                        <!--        <div class="Yield_div Yield_div_append">-->
                        <!--          <div class="Yield_title">795,926 USD</div>-->
                        <!--          <div class="Yield_subtitle">15,333,972 IOTX + 398,010 USDT</div>-->
                        <!--        </div>-->
                        <!--        <div class="d-flex">-->
                        <!--          <div class="Yield_precentage">2.65%</div>-->
                        <!--          <div class="Yield_precentage-icn-div">-->
                        <!--            <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">-->
                        <!--              <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>-->
                        <!--              <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>-->
                        <!--            </svg>-->
                        <!--          </div>-->
                        <!--        </div>-->

                        <!--        <div class="wm-pool-record-exapnd">-->
                        <!--            <i class="bi bi-chevron-down"></i>-->
                        <!--        </div>-->

                        <!--      </div>-->

                        <!--    <div class="wm-pool-btn-show">-->
                        <!--         <div class="lot-duration-div wm-btn-append">-->
                        <!--          <div class="a-click box-border-gray yellow-text">Add</div>-->
                        <!--          <div class="a-click box-border-gray yellow-text">Remove</div>-->
                        <!--          <div class="a-click box-border-gray yellow-text">Swap</div>-->
                        <!--          <div class="a-click box-border-gray">My Portion</div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="wm-pool-record-show">-->
                        <!--    <div class="wm-reward-append">-->
                        <!--             <span class="wp-pool-inner-lbl mb-2">Volume (24hr)</span>-->
                        <!--          <div class="wp-pool-tbl-div1">-->
                        <!--            <div class="wp-pool-tbl-div-img">-->
                        <!--              <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
                        <!--            </div>-->
                        <!--            <div class="wp-pool-tbl-reward-txt">-->

                        <!--                demo-text-->
                        <!--            </div>-->
                        <!--          </div>-->
                        <!--        </div>-->
                        <!--    <div class="wm-pool-breakdown">-->
                        <!--             <span class="wp-pool-inner-lbl mb-2">Volume (24hr)</span>-->
                        <!--             <div class="wm-pool-breakdown-inner">-->
                        <!--                  <div class="d-flex">-->
                        <!--                     <img src="https://www.wealthmark.io/63af2-c980-42cf-a139-7b9f462a36c2.png" class="me-2">-->
                        <!--                     <div class="Yield_subtitle">BNB</div> -->
                        <!--                </div>-->
                        <!--                 <div class="Yield_subtitle success">0.48%</div>-->
                        <!--             </div>-->
                        <!--             <div class="wm-pool-breakdown-inner">-->
                        <!--                 <div class="d-flex">-->
                        <!--                     <img src="https://www.wealthmark.io/63af2-c980-42cf-a139-7b9f462a36c2.png" class="me-2">-->
                        <!--                     <div class="Yield_subtitle">BNB</div>-->
                        <!--                </div>-->
                        <!--                 <div class="Yield_subtitle success">0.48%</div>-->
                        <!--             </div>-->


                        <!--        </div>-->
                        <!--    <div class="wp-pool-valume wp-pool-valume-append">-->
                        <!--            <span class="wp-pool-inner-lbl">Volume (24hr)</span>-->
                        <!--            115,914 USD-->
                        <!--        </div>-->

                        <!--     </div>-->
                        <!--</div>-->


                        <!--<div class="wm-pool-new-div-body" id="demo1" onresize="addRemoveDiv(this.id)">-->
                        <!--      <div class="wm-pool-new-div-body-row">-->
                        <!--        <div class="">-->
                        <!--          <div class="wp-pool-tbl-div1">-->
                        <!--            <div class="pool-wm-coin-div">-->
                        <!--              <div class="pool-wm-coin-div-inner">-->
                        <!--                <img class="pool-wm-coin-div-inner-img-1" src="https://www.wealthmark.io/97fe9-1b7d-41ca-b5d4-a646baa22f47.png">-->
                        <!--                <img class="pool-wm-coin-div-inner-img-2" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
                        <!--              </div>-->
                        <!--            </div>-->
                        <!--            <div class="pool-wm-coin-title-main">demo1</div>-->
                        <!--          </div>-->
                        <!--        </div>-->
                        <!--        <div class="Yield_div Yield_div_append">-->
                        <!--          <div class="Yield_title">795,926 USD</div>-->
                        <!--          <div class="Yield_subtitle">15,333,972 IOTX + 398,010 USDT</div>-->
                        <!--        </div>-->
                        <!--        <div class="d-flex">-->
                        <!--          <div class="Yield_precentage">2.65%</div>-->
                        <!--          <div class="Yield_precentage-icn-div">-->
                        <!--            <svg viewBox="0 0 48 48" fill="none" cursor="pointer" class="Yield_precentage-icn-div-info">-->
                        <!--              <path d="M25 16.67h-2v2h2v-2zM25 20.67h-2v10.68h2V20.67z" fill="currentColor"></path>-->
                        <!--              <path d="M24 12c6.62 0 12 5.38 12 12s-5.38 12-12 12-12-5.38-12-12 5.38-12 12-12zm0-2c-7.73 0-14 6.27-14 14s6.27 14 14 14 14-6.27 14-14-6.27-14-14-14z" fill="currentColor"></path>-->
                        <!--            </svg>-->
                        <!--          </div>-->
                        <!--        </div>-->
                        <!--        <div class="wm-reward-append">-->

                        <!--          <div class="wp-pool-tbl-div1">-->
                        <!--            <div class="wp-pool-tbl-div-img">-->
                        <!--              <img class="wp-pool-tbl-div-img--" src="https://www.wealthmark.io/c7d80-7bcd-4cfb-8bd9-d1760a752afc.png">-->
                        <!--            </div>-->
                        <!--            <div class="wp-pool-tbl-reward-txt">-->

                        <!--                demo-text-->
                        <!--            </div>-->
                        <!--          </div>-->
                        <!--        </div>-->
                        <!--        <div class="wp-pool-valume wp-pool-valume-append">-->
                        <!--            <span class="wp-pool-inner-lbl">Volume (24hr)</span>-->
                        <!--            115,914 USD-->
                        <!--        </div>-->
                        <!--        <div class="lot-duration-div wm-btn-append">-->
                        <!--          <div class="a-click box-border-gray yellow-text">Add</div>-->
                        <!--          <div class="a-click box-border-gray yellow-text">Remove</div>-->
                        <!--          <div class="a-click box-border-gray yellow-text">Swap</div>-->
                        <!--          <div class="a-click box-border-gray">My Portion</div>-->
                        <!--        </div>-->

                        <!--      </div>-->

                        <!--     <div class="wm-pool-btn-show">-->

                        <!--    </div>-->
                        <!--     <div class="wm-pool-record-show">-->
                        <!--        <div class="div-1"></div>-->
                        <!--        <div class="div-2"></div>-->
                        <!--        <div class="div-3"></div>-->
                        <!--     </div>-->
                        <!--</div>-->













