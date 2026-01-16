<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | <?php echo e(Request::segment(2)); ?></title>
    <?php echo $__env->make('template.web_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<style>
   .crypto-conversion{
       display:flex;
       gap:20px;
       flex-wrap:wrap;
   }
    .crypto-conversion .block{
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    border-radius: 52px;
    cursor: pointer;
    height: 48px;
    -webkit-flex: none;
    -ms-flex: none;
    flex: none;
    width: calc((100% - 16px - 16px) / 2);
    /*margin-top: 16px;*/
    /*margin-right: 16px;*/
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: var(--bg-light-blue) !important;
    }
     .crypto-conversion .block:hover{
         box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;
     }
      .crypto-conversion .block img{
          width:100%;
          max-width:30px;
      }


      .more-services {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    margin-top: 16px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.more-services-block {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    border-radius: 8px;
    cursor: pointer;
    height: 68px;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background: var(--bg-light-blue) !important;
    padding-left: 16px;
    padding-right: 16px;
}
     .more-services-block-svg {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    color: currentColor;
    width: 24px;
    height: 24px;
    font-size: 24px;
    fill: #1E2329;
    fill: currentColor;
    width: 1em;
    height: 1em;
}
.more-services-block-div {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    word-break: break-all;
    color: #1E2329;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-left: unset;
    margin-top: 4px;
    font-size: 12px;
    line-height: 16px;
}
.more-services-block-div-svg {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    color: currentColor;
    width: 24px;
    height: 24px;
    font-size: 24px;
    fill: #1E2329;
    fill: currentColor;
    color: #929AA5;
    width: 1em;
    height: 1em;
    margin-left: 4px;
    display: none;
}.more-services>div:not(:last-child) {
    margin-right: 8px;
}


.cash-balence-top-sectio {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 24px;
}
.cash-balence-top-sectio-left {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    max-width: 590px;
    width: 100%;
    background: #FFFFFF;
    border-radius: 16px;
    padding-top: 24px;
    padding-bottom: 24px;
    padding-left: 24px;
    padding-right: 24px;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

.cash-balence-top-sectio-right {
    box-sizing: border-box;
    margin-right: 0px;
    margin-bottom: 0px;
    min-width: 0px;
    max-width: 590px;
    width: 100%;
    flex: 1 1 0%;
    position: relative;
    padding-top: unset;
    padding-bottom: unset;
    padding-left: 24px;
    padding-right: 24px;
    margin-left: unset;
    margin-top: 24px;
}


.flex-div-column {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
}
.how-works svg {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: currentcolor;
    font-size: 24px;
    fill: currentcolor;
    width: 1em;
    height: 1em;
}
.how-works > div {
    box-sizing: border-box;
    margin: 8px 0px 0px;
    min-width: 0px;
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
    color: rgb(30, 35, 41);
}
.cash-balence-space {
    box-sizing: border-box;
    margin: 12px 0px 0px;
    min-width: 0px;
    height: 4px;
    background-color: rgb(234, 236, 239);
    flex: 1 1 0%;
}

.input-dropdown{
display: flex;
    width: 100%;
    padding: 10px;
    border: 2px solid #f5f8fd;
    border-radius: 10px;
    margin-bottom:20px;
}
.input-dropdown input{
    border:0;
    padding: 0px 10px;
    width:100%;
}
      @media screen and (min-width: 767px){
          .more-services-block-svg {
    width: 40px;
    height: 40px;
    font-size: 40px;
}
          .more-services-block {
    height: 128px;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;

}
.more-services>div:not(:last-child) {
    margin-right: 16px;
}
.crypto-conversion .block{
    height: 48px;
    width: calc((100% - 32px - 16px) / 3);
}
          .more-services-block-div {
    margin-left: unset;
    margin-top: 16px;
    font-size: 16px;
    line-height: 24px;
}.more-services-block-div-svg {
    display: none;
}
.cash-balence-top-sectio {
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 36px;
}

  .cash-balence-top-sectio-left {
    max-width: 590px;
    width: 100%;
    padding-top: 32px;
    padding-bottom: 32px;
    padding-left: 40px;
    padding-right: 40px;
}


  .cash-balence-top-sectio-right {
    max-width: 590px;
    width: 100%;
    padding-top: unset;
    padding-bottom: unset;
    padding-left: 32px;
    padding-right: 32px;
    margin-left: unset;
    margin-top: 36px;
}
}
@media screen and (min-width: 1023px){
.crypto-conversion .block {
    height: 56px;
    width: calc((100% - 96px - 24px) / 5);
}
    .more-services-block {
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
}
.more-services>div:not(:last-child) {
    margin-right: 24px;
}
.more-services-block-div {
    margin-left: 16px;
    margin-top: unset;
    font-size: 24px;
    line-height: 28px;
}
.more-services-block-div-svg {
    display: inline-block;
}
.cash-balence-top-sectio {
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;

    margin-top: 40px;
}
.cash-balence-top-sectio-left {
    max-width: 603px;
    width: unset;
}

.cash-balence-top-sectio-right {
    max-width: 538px;
    width: unset;
    padding: 32px 40px;
    margin-left: 24px;
    margin-top: unset;
}
}
</style>

</head>

<body class="bg-white">
    <?php echo $__env->make('template.web_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <section class="bg-light-blue">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">

                            <h1 class="">Get Crypto with Fiat</h1>
                           <span class="title">Easily buy 99+ cryptocurrencies with 50+ fiat currencies</span>

                        </div>

            </div>


            <div class="cash-balence-top-sectio">
  <div class="cash-balence-top-sectio-left">
    <div  class="fs-4 mb-3">Cryptocurrency Calculator</div>

    <div class="input-dropdown">
        <input type="text" placeholder="Enter amount" >


     <div class="lf-select_coin-to">
                                             <div class="coin-swap-from m-0 max-width-100px border-0 rounded height-40px rounded">
                                                <input type="text" value="31" class="lf-select-coin-to-input">
                                                <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                             </div>
                                             <div class="lf-select-coin-to-active-div">
                                                <div class="wm-dropdown-optn-item-div">
                                                   <img class="wm-dropdown-optn-item-img" src="<?php echo e(asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png')); ?>">
                                                   <div class="wm-dropdown-optn-item-txt">INR</div>
                                                </div>
                                             </div>
                                             <div class="wm-dropdown-div wm-dropdown-div-open min-width-200px end-0"  style="display: none;">
                                                <div class="p-3">
                                                    <div class=" wm-dropdown-srch-div">
                                                        <i class="bi bi-search wm-dropdown-search-icn"></i>
                                                        <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                                        <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                                                    </div>
                                                </div>

                                                <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">

                                                   <li role="option"  class="wm-dropdown-optn-item">
                                                      <div class="wm-dropdown-optn-item-inner">
                                                         <div class="wm-dropdown-optn-item-div">
                                                            <img class="wm-dropdown-optn-item-img" src="<?php echo e(asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png')); ?>">
                                                            <div class="wm-dropdown-optn-item-txt">demo</div>
                                                         </div>
                                                      </div>
                                                   </li>

                                                </ul>
                                             </div>
                                          </div>
    </div>

 <div class="input-dropdown">
        <input type="text" placeholder="Enter amount" >


     <div class="lf-select_coin-to">
                                             <div class="coin-swap-from m-0 max-width-100px border-0 rounded height-40px rounded">
                                                <input type="text" value="31" class="lf-select-coin-to-input">
                                                <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                             </div>
                                             <div class="lf-select-coin-to-active-div">
                                                <div class="wm-dropdown-optn-item-div">
                                                   <img class="wm-dropdown-optn-item-img" src="<?php echo e(asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png')); ?>">
                                                   <div class="wm-dropdown-optn-item-txt">INR</div>
                                                </div>
                                             </div>
                                             <div class="wm-dropdown-div wm-dropdown-div-open min-width-200px end-0"  style="display: none;">
                                                <div class="p-3">
                                                    <div class=" wm-dropdown-srch-div">
                                                        <i class="bi bi-search wm-dropdown-search-icn"></i>
                                                        <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                                        <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                                                    </div>
                                                </div>

                                                <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">

                                                   <li role="option"  class="wm-dropdown-optn-item">
                                                      <div class="wm-dropdown-optn-item-inner">
                                                         <div class="wm-dropdown-optn-item-div">
                                                            <img class="wm-dropdown-optn-item-img" src="<?php echo e(asset('img/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png')); ?>">
                                                            <div class="wm-dropdown-optn-item-txt">demo</div>
                                                         </div>
                                                      </div>
                                                   </li>

                                                </ul>
                                             </div>
                                          </div>
    </div>


        <div class="fs-14 text-muted mt-4">Estimated price
          : 1
          BNB ≈

          28,266.27
           INR
        </div>


  </div>
  <div class="cash-balence-top-sectio-right">
    <div  class="fs-4 text-black">P2P Trading</div>
    <div  class="fs-14 text-muted mt-3">Buy and sell Tether safely and easily on Wealthmark P2P. Find the best offer below to buy and sell crypto with your preferred payment methods today.</div>
    <div  class="fs-16 textmuted mt-4">How P2P works</div>
    <div class="d-flex justify-content-between mt-4">
      <div class="flex-div-column how-works">
        <svg viewBox="0 0 24 24" fill="none" class="">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M4 2h16v21l-4-4-4 4-4-4-4 4V2z" fill="url(#orders-g_svg__paint0_linear)"></path>
          <path d="M14 6H6v2h8V6zM18 6h-2v2h2V6zM6 10h8v2H6v-2zM18 10h-2v2h2v-2zM6 14h8v2H6v-2zM18 14h-2v2h2v-2z" fill="#76808F"></path>
          <defs>
            <linearGradient id="orders-g_svg__paint0_linear" x1="12" y1="23" x2="12" y2="2" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0B90B"></stop>
              <stop offset="1" stop-color="#F8D33A"></stop>
            </linearGradient>
          </defs>
        </svg>
        <div  class="">Place order</div>
      </div>
      <div class="cash-balence-space"></div>
      <div class="flex-div-column how-works">
        <svg viewBox="0 0 24 24" fill="none" class="">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.732 4.768a5.732 5.732 0 110 11.464 5.732 5.732 0 010-11.464zm0 8.189L5.276 10.5l2.456-2.457L10.19 10.5l-2.457 2.457z" fill="url(#buy-crypto-g_svg__paint0_linear_34040_26824)"></path>
          <path d="M2 10.625h20V22H5a3 3 0 01-3-3v-8.375z" fill="#76808F"></path>
          <path fill="#F6CB2B" d="M17 14.232h5v4h-5z"></path>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.009 1.893a3.991 3.991 0 110 7.982 3.991 3.991 0 010-7.982zm0 5.701l-1.71-1.71 1.71-1.71 1.71 1.71-1.71 1.71z" fill="url(#buy-crypto-g_svg__paint1_linear_34040_26824)"></path>
          <defs>
            <linearGradient id="buy-crypto-g_svg__paint0_linear_34040_26824" x1="7.732" y1="16.232" x2="7.732" y2="4.768" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0B90B"></stop>
              <stop offset="1" stop-color="#F8D33A"></stop>
            </linearGradient>
            <linearGradient id="buy-crypto-g_svg__paint1_linear_34040_26824" x1="18.009" y1="9.875" x2="18.009" y2="1.893" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0B90B"></stop>
              <stop offset="1" stop-color="#F8D33A"></stop>
            </linearGradient>
          </defs>
        </svg>
        <div  class="">Pay seller</div>
      </div>
      <div class="cash-balence-space"></div>
      <div class="flex-div-column how-works">
        <svg viewBox="0 0 24 24" fill="none" class="">
          <path d="M2.5 16.0166H5.5H19.5H22.5V22.0166H2.5V16.0166Z" fill="#76808F"></path>
          <rect width="10.7188" height="12.5625" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 18.7812 19.5938)" fill="url(#paint0_linear_426_107729)"></rect>
          <path d="M13.1314 18.2031V17.3191C14.356 17.1166 14.927 16.3523 14.927 15.4499C14.927 14.5106 14.31 13.9858 13.0209 13.6911V12.1625C13.4629 12.2638 13.7575 12.4664 13.9785 12.715L14.8165 11.9599C14.4113 11.4995 13.868 11.2141 13.1314 11.1312V10.2656H12.6065H12.0816V11.1312C10.8938 11.2693 10.2584 11.9139 10.2584 12.8808C10.2584 13.774 10.8201 14.3817 12.2013 14.6672V16.3246C11.6857 16.251 11.2529 16.0024 10.903 15.634L10.0742 16.3891C10.5346 16.8956 11.1516 17.2731 12.0816 17.356V18.2031H13.1314ZM11.5291 12.8439C11.5291 12.4848 11.7317 12.2362 12.2013 12.1441V13.5069C11.7317 13.378 11.5291 13.1938 11.5291 12.8439ZM13.6562 15.5512C13.6562 15.9011 13.4536 16.1865 13.0209 16.3062V14.8513C13.5457 15.0079 13.6562 15.2841 13.6562 15.5512Z" fill="#76808F"></path>
          <path d="M17.5 2L7.5 2L12.5 7L17.5 2Z" fill="#76808F"></path>
          <defs>
            <linearGradient id="paint0_linear_426_107729" x1="5.35938" y1="0" x2="5.35938" y2="12.5625" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0B90B"></stop>
              <stop offset="1" stop-color="#F8D33A"></stop>
            </linearGradient>
          </defs>
        </svg>
        <div  class="">Get crypto</div>
      </div>
    </div>
    <button  type="button" class="btn-yellow border-0 d-block w-100 mt-5">Buy BMK</button>
  </div>
</div>
        </div>
    </section>

















     <section class="">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h3>More Services</h3>
             </div>
         </div>
         <div class="more-services">
              <div class="more-services-block">
                <svg viewBox="0 0 24 24" fill="none" class="more-services-block-svg">
                  <path d="M2.5 16.0166H5.5H19.5H22.5V22.0166H2.5V16.0166Z" fill="#76808F"></path>
                  <rect width="10.7188" height="12.5625" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 18.7812 19.5938)" fill="url(#paint0_linear_426_107729)"></rect>
                  <path d="M13.1314 18.2031V17.3191C14.356 17.1166 14.927 16.3523 14.927 15.4499C14.927 14.5106 14.31 13.9858 13.0209 13.6911V12.1625C13.4629 12.2638 13.7575 12.4664 13.9785 12.715L14.8165 11.9599C14.4113 11.4995 13.868 11.2141 13.1314 11.1312V10.2656H12.6065H12.0816V11.1312C10.8938 11.2693 10.2584 11.9139 10.2584 12.8808C10.2584 13.774 10.8201 14.3817 12.2013 14.6672V16.3246C11.6857 16.251 11.2529 16.0024 10.903 15.634L10.0742 16.3891C10.5346 16.8956 11.1516 17.2731 12.0816 17.356V18.2031H13.1314ZM11.5291 12.8439C11.5291 12.4848 11.7317 12.2362 12.2013 12.1441V13.5069C11.7317 13.378 11.5291 13.1938 11.5291 12.8439ZM13.6562 15.5512C13.6562 15.9011 13.4536 16.1865 13.0209 16.3062V14.8513C13.5457 15.0079 13.6562 15.2841 13.6562 15.5512Z" fill="#76808F"></path>
                  <path d="M17.5 2L7.5 2L12.5 7L17.5 2Z" fill="#76808F"></path>
                  <defs>
                    <linearGradient id="paint0_linear_426_107729" x1="5.35938" y1="0" x2="5.35938" y2="12.5625" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#F8D33A"></stop>
                    </linearGradient>
                  </defs>
                </svg>
                <a class="more-services-block-div">Deposit Fiat

                  <svg viewBox="0 0 24 24" fill="none" class="more-services-block-div-svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                  </svg>
                </a>
              </div>
              <div class="more-services-block">
                <svg viewBox="0 0 24 24" fill="none" class="more-services-block-svg">
                  <path d="M5.875 20c1.5 1.5 2.957 2 4.225 2l6.619-.003a4.324 4.324 0 004.324-4.324h-7.994l-2.602-2.63.547-.547 1.677 1.678c.98.98 2.568.98 3.548 0l-4.249-4.249H5.875V20z" fill="url(#sell-crypto-g_svg__paint0_linear_8385_60263)"></path>
                  <path fill="#76808F" d="M2 11.925h3.875V22H2z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.688 2a5.313 5.313 0 110 10.625 5.313 5.313 0 010-10.625zm0 7.59L14.41 7.312l2.277-2.277 2.276 2.277-2.276 2.276z" fill="url(#sell-crypto-g_svg__paint1_linear_8385_60263)"></path>
                  <defs>
                    <linearGradient id="sell-crypto-g_svg__paint0_linear_8385_60263" x1="12.813" y1="11.925" x2="12.813" y2="22" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F8D33A"></stop>
                      <stop offset="1" stop-color="#F0B90B"></stop>
                    </linearGradient>
                    <linearGradient id="sell-crypto-g_svg__paint1_linear_8385_60263" x1="16.688" y1="12.625" x2="16.688" y2="2" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#F8D33A"></stop>
                    </linearGradient>
                  </defs>
                </svg>
                <a class="more-services-block-div">Sell Crypto

                  <svg viewBox="0 0 24 24" fill="none" class="more-services-block-div-svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                  </svg>
                </a>
              </div>
              <div class="more-services-block">
                <svg viewBox="0 0 48 48" fill="none" class="more-services-block-svg">
                  <path d="M4.5 32.0332H10.5H38.5H44.5V44.0332H4.5V32.0332Z" fill="#76808F"></path>
                  <rect width="21.4375" height="25.125" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 37.0625 39.1875)" fill="url(#paint0_linear_458_80155)"></rect>
                  <path d="M25.7627 36.4062V34.6383C28.2121 34.2331 29.3539 32.7045 29.3539 30.8997C29.3539 29.0212 28.12 27.9715 25.5417 27.3822V24.325C26.4257 24.5276 27.015 24.9328 27.457 25.43L29.1329 23.9199C28.3226 22.9991 27.236 22.4281 25.7627 22.2624V20.5312H24.713H23.6632V22.2624C21.2875 22.5386 20.0168 23.8278 20.0168 25.7615C20.0168 27.5479 21.1402 28.7634 23.9026 29.3343V32.6493C22.8713 32.502 22.0057 32.0047 21.3059 31.2681L19.6484 32.7782C20.5693 33.7911 21.8032 34.5462 23.6632 34.7119V36.4062H25.7627ZM22.5582 25.6879C22.5582 24.9696 22.9634 24.4724 23.9026 24.2882V27.0138C22.9634 26.756 22.5582 26.3877 22.5582 25.6879ZM26.8124 31.1023C26.8124 31.8021 26.4073 32.373 25.5417 32.6125V29.7027C26.5914 30.0157 26.8124 30.5682 26.8124 31.1023Z" fill="#76808F"></path>
                  <path d="M14.5 14.0005L34.5 14.0005L24.5 4.00049L14.5 14.0005Z" fill="#76808F"></path>
                  <defs>
                    <linearGradient id="paint0_linear_458_80155" x1="10.7188" y1="0" x2="10.7188" y2="25.125" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#F0B90B"></stop>
                      <stop offset="1" stop-color="#F8D33A"></stop>
                    </linearGradient>
                  </defs>
                </svg>
                <a class="more-services-block-div">Withdraw Fiat

                  <svg viewBox="0 0 24 24" fill="none" class="more-services-block-div-svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                  </svg>

                </a>
              </div>
            </div>
         </div>

       </section>






 <section>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h3 class="mb-5">Top Cryptocurrency Conversions</h3>
             </div>
         </div>
         <div class="crypto-conversion">
             <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>

              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>

              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
              <div class="block">
                 <div>
                     <img src="<?php echo e(asset('img/storage/app/bmklogo/12.png')); ?>">
                 </div>
                 <div>
                        <span>BMK</span>
                        <span>to</span>
                        <span>BTC</span>
                 </div>
             </div>
         </div>
     </div>
 </section>



 <section class="wm-pay-accordian-section bg-light-blue">
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
    What is cryptocurrency?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="fs-14 text-muted"> Cryptocurrency is a digital form of money that uses cryptography for security and operates independently of a central bank. Transactions with cryptocurrencies are recorded on a distributed public ledger called a blockchain, which ensures that all transactions are secure, transparent, and irreversible. Cryptocurrencies are decentralized and offer potential benefits over traditional currencies, such as faster and cheaper transactions, greater privacy, and the ability to bypass financial intermediaries. However, they can be highly volatile and subject to significant price swings, and the regulatory environment surrounding cryptocurrencies is still evolving, which creates uncertainty and risk for investors.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
How do I buy cryptocurrency?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="fs-14 text-muted mb-2">
           You can buy crypto instantly in the Wealthmark app or through the Wealthmark website online, following the steps below:
       </div>

     <ul class="text-muted">
            <li class="d-flex"><span class="me-2">1</span><span>Sign up for an account on the Wealthmark website. </span></li>
            <li class="d-flex"><span class="me-2">2</span><span>Complete the necessary verification steps, such as identity verification. </span></li>
            <li class="d-flex"><span class="me-2">3</span><span>Choose the cryptocurrency you want to buy, select your preferred payment method, and enter the amount you want to spend.</span></li>
            <li class="d-flex"><span class="me-2">4</span><span>Review the transaction details and confirm the purchase. </span></li>
        </ul>
        <div class="fs-14 text-muted mt-2">
            Your newly purchased cryptocurrency will be credited to your Wealthmark account.
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Why should I buy cryptocurrency?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="fs-14 text-muted">There are several reasons why someone may consider buying cryptocurrency for investment purposes:</div>
        <ul class="text-muted">
            <li class="d-flex"><span class="me-2">1</span><span>Potential for high returns: Cryptocurrencies can be highly volatile and subject to significant price swings, which means that they offer the potential for high returns if you buy at the right time and sell when the price has gone up. </span></li>
            <li class="d-flex"><span class="me-2">2</span><span>Diversification: Investing in cryptocurrency can be a way to diversify your investment portfolio and spread your risk across different types of assets. </span></li>
            <li class="d-flex"><span class="me-2">3</span><span>Decentralized and secure: Cryptocurrencies are decentralized and operate independently of traditional financial systems, which means that they offer a high degree of security and privacy. </span></li>
            <li class="d-flex"><span class="me-2">4</span><span>Growing adoption: Cryptocurrencies are becoming more widely adopted as a means of payment and as a store of value, which suggests that their value may continue to increase over time. </span></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
  What can I do with cryptocurrency?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="fs-14 text-muted">
      Cryptocurrency can be used in various ways, including buying goods and services, trading on exchanges, holding as an investment, sending money internationally, and supporting charitable causes. It offers benefits such as decentralization, security, and privacy, as well as the potential for high returns and diversification of investment portfolios. The availability and acceptance of cryptocurrency can also vary by country and region, and its use and investment require careful research and understanding of the risks involved. Overall, cryptocurrency offers new possibilities and challenges for finance and investment in the digital age.
  </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
  What cryptocurrency should I buy?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="fs-14 text-muted">
      The cryptocurrency you choose to buy depends on your intended use. For spending cryptocurrency, Bitcoin, Litecoin, or Bitcoin Cash are widely accepted. Ethereum and ERC-20 tokens are ideal for creating smart contracts, purchasing NFTs, and other innovative use cases. Dogecoin and Shiba Inu coin are popular because of their strong communities, and they are often considered fun coins for buying, holding, and swapping. Stablecoins like USD Coin and PAX Dollar are tied to the value of the U.S. Dollar, providing less volatility than other cryptocurrencies.
  </div>
      </div>
    </div>
  </div>

</div>
</div>
</section>

     <?php echo $__env->make('template.country_language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('template.web_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <script src="<?php echo e(asset('assets/css/accordian_bootstrap.min.js')); ?>"></script>
<script>


</script>
</body>

</html>
<?php /**PATH D:\Laravel Project\wealthMark\resources\views/web/cash_balance.blade.php ENDPATH**/ ?>