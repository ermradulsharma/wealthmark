
 	<!-- ======= Footer ======= -->

  <footer id="footer">

      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>

    <div class="sign-up-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 text-left">
					<div class="signup_inner">
						<h4 class="text-white">Sign up now to build your own portfolio for free!</h4>
						<div class="signup_btn">
						  <a href="#" class="text-decoration-none btn-theme"> Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="container-fluid help_wrapper">
    <div class="container">
		<h4 class="text-center pt-5">Need help</h4>
		<div class="row mt-3">
			<div class="col-lg-4 text-center mt-4">
				<div class="signup_inner">
					<div class="help_box">
						<i class="bx bx-user h3 help_icon"></i>
						<h5 class="">24/7 Chat Support</h5>
						<div class="">
							Get 24/7 chat support with our friendly <br>
							customer service agents at your service.
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 text-center mt-4">
				<div class="signup_inner">
					<div class="help_box">
						<i class="bx bx-question-mark h3 help_icon"></i>
						<h5 class="">FAQS</h5>
						<div class="">
							 View FAQs for detailed instructions on <br>
							specific features.
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 text-center pb-5 mt-4">
				<div class="signup_inner">
					<div class="help_box">
						<i class="bx bx-envelope h3 help_icon"></i>
						<h5 class="">BLOG</h5>
						<div class="">
							Stay up to date with the latest <br>
							stories and commentary.
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
    <section class="footer footer_section">
   <div class="wrapper">
      <div class="hero">
         <div class="">
            <img loading="lazy" class="sc-fmlJrY buZCMp logo" src="{{ asset('assets/img/wealthmark-logo.svg') }}" alt="Wealthmark Logo">
         </div>
         <div class="download-apps">
            <div class="set">
               <a href="" target="_blank" rel="noopener noreferrer">
               <img loading="lazy" class="item" src="{{ asset('assets/img/google_play.svg') }}" alt="Google Play Icon"></a>
               <a href="" target="_blank" rel="noopener noreferrer">
               <img loading="lazy" class="item" src="{{ asset('assets/img/app-store.svg') }}" alt="App Store Icon"></a>
               <a href="" target="_blank" rel="noopener noreferrer">
               <img loading="lazy" class="item" src="{{ asset('assets/img/window-10.svg') }}" alt="Windows Icon"></a>
               <a href="" target="_blank" rel="noopener noreferrer">
               <img loading="lazy" class="item" src="{{ asset('assets/img/macos.svg') }}" alt="Mac App Icon"></a>
            </div>
         </div>
      </div>
      <div class="menu">
         <div class="menu-item">
             <div class="mob-accordian-footer">
                <span class="title">About</span>
                <i class="bi bi-plus"></i>
            </div>
            <div class="submenu">
				<ul>
                  <li><a href="{{ url( app()->getLocale(), 'about-us') }}">About</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'careers') }}">Careers</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'about-us') }}">Business Contacts</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'community') }}">Community</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'wealthmark-blog') }}">WealthMark Blog</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'terms') }}">Terms</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'privacy') }}">Privacy</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'announcements') }}">Announcements</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'news') }}">News</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'notices') }}">Notices</a></li>
                </ul>
            </div>
         </div>
         <div class="menu-item">

             <div class="mob-accordian-footer">
                 <span class="title">Services</span>
                <i class="bi bi-plus"></i>
            </div>
            <div class="submenu">
				<ul>
                  <li><a href="{{ url( app()->getLocale(), 'downloads') }}">Downloads</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'desktop-application') }}">Desktop Application</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'vip-institutional-services') }}">Institutional &amp; VIP Services</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'referral-offers') }}">Referral</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'execution-solutions') }}">Execution Solutions</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'affiliate') }}">Affiliate</a></li>
                  <!--<li><a href="{{ url( app()->getLocale(), 'bmkoin') }}">BMKoin</a></li>-->
                  <li><a href="{{ url( app()->getLocale(), 'otc-trading') }}">OTC Trading</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'listing-application') }}">Listing Application</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'p2p-merchant-application') }}">P2P Merchant Application</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'historical-market-data') }}">Historical Market Data</a></li>
                </ul>
            </div>
         </div>
         <div class="menu-item">

             <div class="mob-accordian-footer">
                   <span class="title">Support</span>
                <i class="bi bi-plus"></i>
            </div>
            <div class="submenu">
                <ul>
                  <li><a href="{{ url( app()->getLocale(), 'give-us-feedback') }}">Give Us Feedback</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'support-center') }}">Support Center</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'submit-request') }}">Submit a request</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'api-documentation') }}">API Documentation</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'fees') }}">Fees</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'trading-rules') }}">Trading Rules</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'wealthmark-verify') }}">WealthMark Verify</a></li>
                  <li><a href="{{ url( app()->getLocale(), 'law-enforcement-requests') }}">Law Enforcement Requests</a></li>
                </ul>
            </div>
         </div>
         <div class="menu-item">

             <div class="mob-accordian-footer">
                 <span class="title">Socials</span>
                <i class="bi bi-plus"></i>
            </div>
            <div class="submenu socials-ul">
               <ul>
                  <li>
                     <a href="https://twitter.com/WEALTHMARKIO" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 40 40" width="20" height="20" fill="#012970">
                              <path d="M39.929 10.667c-1.369 0.622-2.844 1.031-4.373 1.227 1.564-0.942 2.773-2.436 3.342-4.231-1.476 0.889-3.111 1.511-4.836 1.867-1.404-1.529-3.378-2.418-5.618-2.418-4.178 0-7.591 3.413-7.591 7.627 0 0.604 0.071 1.191 0.196 1.742-6.329-0.32-11.964-3.36-15.716-7.964-0.658 1.12-1.031 2.436-1.031 3.822 0 2.649 1.333 4.996 3.396 6.329-1.262 0-2.436-0.356-3.467-0.889v0.053c0 3.698 2.631 6.791 6.116 7.484-0.64 0.178-1.316 0.267-2.009 0.267-0.48 0-0.96-0.053-1.422-0.142 0.96 3.004 3.751 5.244 7.111 5.298-2.596 2.062-5.884 3.271-9.476 3.271-0.604 0-1.209-0.036-1.813-0.107 3.378 2.169 7.396 3.431 11.698 3.431 14.009 0 21.707-11.627 21.707-21.707 0-0.338 0-0.658-0.018-0.996 1.493-1.067 2.773-2.418 3.804-3.964z"></path>
                           </svg>
                        </div>
                        <span>Twitter</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.facebook.com/" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 43 43" width="20" height="20" fill="#012970">
                              <path d="M30.222 3.556v7.111h-3.556c-1.227 0-1.778 1.44-1.778 2.667v4.444h5.333v7.111h-5.333v14.222h-7.111v-14.222h-5.333v-7.111h5.333v-7.111c0-3.929 3.182-7.111 7.111-7.111h5.333z"></path>
                           </svg>
                        </div>
                        <span>Facebook</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.instagram.com/wealthmarkio/" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 24 24" width="20" height="20" fill="#012970">
                              <path d="M18.3072 4.41379C17.5298 4.41379 16.9028 5.04075 16.9028 5.81818C16.9028 6.59561 17.5298 7.22257 18.3072 7.22257C19.0846 7.22257 19.7116 6.59561 19.7116 5.81818C19.7116 5.04075 19.0846 4.41379 18.3072 4.41379ZM12.0376 6.21944C8.77743 6.21944 6.11912 8.87774 6.11912 12.1379C6.11912 15.3981 8.77743 18.0564 12.0376 18.0564C15.2978 18.0564 17.9561 15.3981 17.9561 12.1379C17.9561 8.87774 15.2978 6.21944 12.0376 6.21944ZM12.0376 15.9498C9.93103 15.9498 8.25078 14.2445 8.25078 12.163C8.25078 10.0564 9.95611 8.37618 12.0376 8.37618C14.1442 8.37618 15.8245 10.0815 15.8245 12.163C15.8245 14.2445 14.1191 15.9498 12.0376 15.9498ZM24 7.22257C24 3.23511 20.7649 0 16.7774 0H7.22257C3.23511 0 0 3.23511 0 7.22257V16.7774C0 20.7649 3.23511 24 7.22257 24H16.7524C20.7398 24 23.9749 20.7649 23.9749 16.7774V7.22257H24ZM21.7179 16.7524C21.7179 19.4859 19.4859 21.7179 16.7524 21.7179H7.22257C4.48903 21.7179 2.25705 19.4859 2.25705 16.7524V7.22257C2.25705 4.46395 4.46395 2.25705 7.22257 2.25705H16.7524C19.4859 2.25705 21.7179 4.48903 21.7179 7.22257V16.7524Z"></path>
                           </svg>
                        </div>
                        <span>Instagram</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.linkedin.com/" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 24 24" width="20" height="20" fill="#012970">
                              <path d="M24 14.5854V22.606C24 22.803 23.8193 22.9719 23.6085 22.9719H19.1819C18.9711 22.9719 18.7905 22.803 18.7905 22.606V15.1482C18.7905 13.1782 18.0376 11.8274 16.1405 11.8274C14.6951 11.8274 13.8519 12.728 13.4605 13.6004C13.3099 13.9099 13.2798 14.3602 13.2798 14.7824V22.606C13.2798 22.803 13.0991 22.9719 12.8883 22.9719H8.49185C8.28105 22.9719 8.10038 22.803 8.10038 22.606C8.10038 20.6079 8.1606 10.955 8.10038 8.70356C8.10038 8.50657 8.28105 8.33771 8.49185 8.33771H12.9184C13.1292 8.33771 13.3099 8.50657 13.3099 8.70356V10.4203C13.3099 10.4484 13.2798 10.4484 13.2798 10.4765H13.3099V10.4203C14.0025 9.43527 15.2371 8 18.0075 8C21.4404 8 24 10.1107 24 14.5854ZM0.391468 23H4.81807C5.02886 23 5.20954 22.8311 5.20954 22.6341V8.70356C5.20954 8.50657 5.02886 8.33771 4.81807 8.33771H0.391468C0.180677 8.33771 0 8.50657 0 8.70356V22.6341C0.0301129 22.8311 0.180677 23 0.391468 23Z"></path>
                              <path d="M2.76238 6.54145C4.28799 6.54145 5.52475 5.30096 5.52475 3.77073C5.52475 2.2405 4.28799 1 2.76238 1C1.23676 1 0 2.2405 0 3.77073C0 5.30096 1.23676 6.54145 2.76238 6.54145Z"></path>
                           </svg>
                        </div>
                        <span>LinkedIn</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://t.me/wealthmark" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 43 43" width="20" height="20" fill="#012970">
                              <path d="M17.387 33.156l0.498-7.52 13.653-12.302c0.604-0.551-0.124-0.818-0.924-0.338l-16.853 10.649-7.289-2.311c-1.564-0.444-1.582-1.529 0.356-2.311l28.391-10.951c1.298-0.587 2.542 0.32 2.044 2.311l-4.836 22.773c-0.338 1.618-1.316 2.009-2.667 1.262l-7.36-5.44-3.538 3.431c-0.409 0.409-0.747 0.747-1.476 0.747z"></path>
                           </svg>
                        </div>
                        <span>Telegram</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.youtube.com/" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 24 24" width="20" height="20" fill="#012970">
                              <path d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z"></path>
                           </svg>
                        </div>
                        <span>YouTube</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.reddit.com/" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 20 20" width="20" height="20" fill="none">
                              <path fill="#012970" d="M18 10.124c0-.95-.787-1.722-1.758-1.722-.478 0-.9.179-1.209.482-1.195-.84-2.854-1.392-4.681-1.46l.8-3.68 2.602.538c.028.647.576 1.17 1.251 1.17.69 0 1.252-.55 1.252-1.226 0-.675-.563-1.226-1.252-1.226-.492 0-.914.276-1.11.689l-2.91-.606a.356.356 0 00-.24.041.336.336 0 00-.14.193l-.886 4.106c-1.87.055-3.543.593-4.752 1.46a1.793 1.793 0 00-1.21-.481c-.97 0-1.757.771-1.757 1.722 0 .703.422 1.295 1.04 1.57a3.161 3.161 0 00-.042.524c0 2.646 3.136 4.782 7.016 4.782s7.016-2.136 7.016-4.781c0-.18-.014-.345-.042-.51A1.78 1.78 0 0018 10.124zM5.979 11.35c0-.675.562-1.226 1.251-1.226.69 0 1.252.551 1.252 1.226 0 .676-.563 1.227-1.252 1.227-.689 0-1.251-.551-1.251-1.227zm6.988 3.239c-.858.84-2.489.895-2.967.895-.478 0-2.123-.069-2.967-.895a.32.32 0 010-.455.336.336 0 01.464 0c.535.524 1.688.716 2.517.716.83 0 1.968-.192 2.517-.716a.336.336 0 01.464 0 .35.35 0 01-.028.455zm-.225-2.012c-.69 0-1.252-.551-1.252-1.227 0-.675.563-1.226 1.252-1.226.689 0 1.251.551 1.251 1.226 0 .676-.562 1.227-1.251 1.227z"></path>
                           </svg>
                        </div>
                        <span>Reddit</span>
                     </a>
                  </li>
                  <li>
                     <a href="https://coinmarketcap.com/" target="_blank" class="social-icon" rel="noopener noreferrer">
                        <div class="box">
                           <svg viewBox="0 0 24 24" width="20" height="20" fill="#012970">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8689 14.3415C20.444 14.606 19.9438 14.6388 19.5635 14.4275C19.0805 14.1588 18.8149 13.5296 18.8149 12.6544V10.0361C18.8149 8.77171 18.3075 7.872 17.459 7.62907C16.0212 7.21639 14.9399 8.94966 14.5335 9.60058L11.9976 13.6513V8.70029C11.9691 7.56117 11.5936 6.8798 10.8806 6.67434C10.4089 6.53854 9.70303 6.59298 9.01739 7.62673L3.33614 16.6144C2.57556 15.1919 2.17907 13.6079 2.18112 12C2.18112 6.58595 6.58495 2.18166 11.9976 2.18166C17.4103 2.18166 21.8136 6.58595 21.8136 12C21.8136 12.0094 21.8159 12.0176 21.8165 12.0263C21.8165 12.0357 21.8147 12.0439 21.8153 12.0533C21.8664 13.1017 21.5218 13.9352 20.8689 14.3415ZM23.9947 12.0006V11.9731L23.9941 11.9461C23.9638 5.35259 18.5945 0 11.997 0C5.38239 0 0 5.38302 0 12C0 18.6164 5.38239 24 11.9976 24C15.0331 24 17.9302 22.8632 20.1541 20.7998C20.5961 20.39 20.6223 19.6999 20.2123 19.2585C20.1158 19.1537 19.9991 19.0689 19.8689 19.0091C19.7387 18.9493 19.5977 18.9157 19.4542 18.9102C19.3107 18.9048 19.1675 18.9276 19.033 18.9773C18.8985 19.0271 18.7755 19.1028 18.6711 19.2C16.8685 20.8817 14.4802 21.8188 11.9976 21.8183C9.09938 21.8183 6.49166 20.5545 4.69318 18.5502L9.81652 10.4453V14.1817C9.81652 15.9764 10.523 16.5565 11.1153 16.7262C11.7083 16.896 12.6144 16.7801 13.5656 15.2581L16.3836 10.7573C16.4739 10.6121 16.5571 10.4868 16.6332 10.3785V12.6544C16.6332 14.3321 17.3153 15.6738 18.5042 16.3346C19.576 16.9305 20.9235 16.8767 22.0215 16.1941C23.3524 15.3659 24.0695 13.8398 23.9947 12.0006Z"></path>
                           </svg>
                        </div>
                        <span>CoinMarketCap</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="menu-item">

             <div class="mob-accordian-footer">
                 <span class="title">Buy Crypto</span>
                <i class="bi bi-plus"></i>
            </div>
            <div class="submenu">
                <ul>
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-bmkoin') }}">Buy BMKoin</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-busd') }}">Buy BUSD</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-bitcoin') }}">Buy Bitcoin -BTC</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-ethereum') }}">Buy Ethereum - ETH</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-litecoin') }}">Buy Litecoin</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-ripple') }}">Buy Ripple</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-bitcoin-cash') }}">Buy Bitcoin Cash</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-dogecoin') }}">Buy Dogecoin</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-defi') }}">Buy DeFi</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-shib') }}">Buy SHIB</a></li>-->
                  <!--<li><a href="{{ url( app()->getLocale(), 'buy-tradable-altcoins') }}">Buy Tradable Altcoins</a></li>-->


                <li><a href="{{ url( app()->getLocale(), 'buy-bmkoin') }}">Buy Bmkoin - BMK</a></li>
                <li><a href="{{ url( app()->getLocale(), 'buy-bitcoin') }}">Buy Bitcoin - BTC</a></li>
                <li><a href="{{ url( app()->getLocale(), 'buy-ethereum') }}">Buy Ethereum - ETH</a></li>
                <li><a href="#">Buy Tether - USDT</a></li>
                <li><a href="#">Buy Solana (SOL)</a></li>
                <li><a href="#">Buy Cardano (ADA)</a></li>
                <li><a href="{{ url( app()->getLocale(), 'buy-dogecoin') }}">Buy Dogecoin - DOGE</a></li>
                <li><a href="#">Buy XRP (XRP)</a></li>
                <li><a href="#">Buy Polkadot - DOT</a></li>
                <li><a href="{{ url( app()->getLocale(), 'buy-litecoin') }}">Buy Litecoin - LTC</a></li>


                </ul>
            </div>
         </div>
      </div>
      <div class="sc-bdfBQB sc-jmhFuu iweWIT iouOmw"><span class="sc-dUrmIn bYwCuQ"> © 2017 -  <?php echo date('Y'); ?> wealthmark.io. All rights reserved</span></div>

   </div>
</section>

<!-- Button trigger modal -->


    <div class="modal" id="orderNotifyPopup" style="display:none" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  border-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center flex-column min-height-100px">
            <h4 class="text-black fs-4">Your Order have been accepted!</h4>
          <div class="traderDetails">
                    <div class="d-flex align-items-center hide justify-content-between">
                        <span>Trade : </span>
                        <span class="traderDetails_name "></span>
                    </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <span>Coin Name & Price : </span>
                        <span class="traderDetails_Coin"></span>
                    </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <span>OrderType : </span>
                        <span class="traderDetails_orderType"></span>
                    </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <span>Date & Time : </span>
                        <span class="traderDetails_dateTime"></span>
                    </div>
                </div>
            <a href="#" class="btn-yellow my-4 shadow-none" id="view_order">
                View Order Details
            </a>
      </div>
    </div>
  </div>
</div>
<!---- express order notification popup--->
    <div class="modal" id="expressOrderNotifyPopup" style="display:none" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header  border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" data-dismiss="modal" id="expressOrderNotifyPopup-btn-close" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex align-items-center justify-content-center flex-column min-height-100px">
                <h4 class="text-black fs-4">Your Order have been accepted!</h4>
                <div class="traderDetails">
                    <div class="d-flex align-items-center hide justify-content-between">
                        <span>Trade : </span>
                        <span class="traderDetails_name"></span>
                    </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <span>Coin Name & Price : </span>
                        <span class="traderDetails_Coin"></span>
                    </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <span>OrderType : </span>
                        <span class="traderDetails_orderType"></span>
                    </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <span>Date & Time : </span>
                        <span class="traderDetails_dateTime"></span>
                    </div>
                </div>
                <button class="btn btn-yellow my-4 shadow-none" id="view_order" orderSerialID=''>
                    View Order Details
                </button>
          </div>
        </div>
      </div>
    </div>
    <!---- end express order notification popup--->

<?php
$onlineclass ="";
if(Auth::check() == 1 || Auth::check() === true){

    if(Cache::has('user-is-online-'.Auth::user()->id)){
    $onlineclass = 'online';

    }else{
        $onlineclass = 'offline';

    }
}
?>

<script>
    function update_user_last_activity()
	{
		$.ajax({
			url:"{{ url('') }}/update-user-last-activity",
			success:function()
			{

			}
		})
	}




    var sessionid = '<?php echo session_id() ; ?>';
    var auth_chk = '<?php echo Auth::check() ; ?>';
    // console.log(sessionid+'-'+auth_chk);
  	function check_session_id(){

    		fetch('{{ url( app()->getLocale()) }}/check_login').then(function(response){
    			return response.json();
    		}).then(function(responseData){
    			if(responseData.output == 'logout')
    			{
    				window.location.href = '{{ url( app()->getLocale()) }}/user/logout';
    			}
    		}).catch(function(err) {
                  //console.log(err);
              });
    	};

    // if(auth_chk == 1 || auth_chk === true){
    //     setInterval(function(){
    //         check_user_status();
    //         update_user_last_activity();
    //         check_session_id();
    // 	}, 1000);
    // }


</script>

<script>
if(
    localStorage.getItem("previouStatus") == 1 &&
    (  window.location.href != "{{ url(app()->getLocale().'/user/confirmed-order-info') }}"  ||    window.location.href != "{{ url(app()->getLocale().'/user/seller-confirm-order') }}"
    )
    ){
         localStorage.setItem("previouStatus", 0);
        // window.localStorage.removeItem('previouStatus');
    }
</script>
<script>
@auth

const userID = '{{ Auth::user()->id }}';
  setInterval(function() {
    // orderNotifyPopup(userID);
    // onlineOrderNotifyPopup(userID);
     //checkpendingordersornot();
     var orderid = $('#expressOrderNotifyPopup #view_order').attr('orderSerialID');
     //alert(orderid);
     //console.log(orderid);
    //  if(orderid!=''){
    //      checkorderstatus();
    //  }

      update_user_last_activity();
            check_session_id();

  }, 10000);
@endauth

  function orderNotifyPopup(trader_id) {

         var trader_id = trader_id;
         var user_id = trader_id;

        $.ajax({
             type: 'GET',
             url: '{{ "/getOrderStatusByUserID" }}',
           data: {
                    '_token': "{{ csrf_token() }}",
                    'user_id' : user_id,
                    'trader_id' : trader_id
                },
            success: function (data) {

                   if(data.getRecentOrders != null){

                         if(data.count > 0){
                            if(data.getRecentOrders.seller_id == trader_id || data.getRecentOrders.buyer_id == trader_id){
                            //  alert (trader_id);
                            if(data.getRecentOrders.ordertype == 1 && data.getRecentOrders.seller_id == trader_id){

                                  $('#orderNotifyPopup .traderDetails .traderDetails_name').text(data.tradername.first_name);
                                  $('#orderNotifyPopup .traderDetails .traderDetails_Coin').text(data.getRecentOrders.total_crypto_value+'-'+data.getRecentOrders.crypto_type);

                                  if(data.getRecentOrders.ordertype == 1){
                                        var ordertype = 'Sell' ;
                                    }else{
                                        var ordertype = 'Buy' ;
                                    }
                                  $('#orderNotifyPopup .traderDetails .traderDetails_orderType').text(ordertype);

                                  var createdAt = new Date(data.getRecentOrders.created_at);
                                  var formattedDateTime = createdAt.toLocaleString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' });
                                  $('#orderNotifyPopup .traderDetails .traderDetails_dateTime').text(formattedDateTime);

                                   $('#orderNotifyPopup #view_order').attr('href', '{{ url(app()->getLocale())."/p2p-trading/buy/seller-confirm-order-info" }}'+'/'+data.getRecentOrders.id);
                               }

                            if(data.getRecentOrders.ordertype == 0 && data.getRecentOrders.buyer_id == trader_id){

                                    $('#orderNotifyPopup .traderDetails .traderDetails_name').text(data.tradername.first_name);
                                    $('#orderNotifyPopup .traderDetails .traderDetails_Coin').text(data.getRecentOrders.total_crypto_value+'-'+data.getRecentOrders.crypto_type);
                                    if(data.getRecentOrders.ordertype == 1){
                                        var ordertype = 'Sell' ;
                                    }else{
                                        var ordertype = 'Buy' ;
                                    }
                                    $('#orderNotifyPopup .traderDetails .traderDetails_orderType').text(ordertype);

                                  var createdAt = new Date(data.getRecentOrders.created_at);
                                  var formattedDateTime = createdAt.toLocaleString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' });
                                  $('#orderNotifyPopup .traderDetails .traderDetails_dateTime').text(formattedDateTime);

                                 $('#orderNotifyPopup #view_order').attr('href', '{{ url(app()->getLocale())."/user/confirmed-order-info"}}'+'/'+data.getRecentOrders.id);

                            }

                            $('#orderNotifyPopup').modal('show');
                           }


                         }
                    }

                },
                error: function(xhr, status, error) {
                   // var erroJson = JSON.parse(xhr.responseText);
                   // triggerAlert('something went wrong!', 'error');
                }

        });


    };

<?php if(Auth::check() == 1 || Auth::check() === true){ ?>




    function onlineOrderNotifyPopup(trader_id) {
          var onlineStatus= "<?php    echo $onlineclass;  ?>";
    //alert(onlineStatus);
         var trader_id = trader_id;
         var user_id = trader_id;
         var onlineUSerID = '<?php echo Auth::user()->id ; ?>';
         var country = '<?php echo Auth::user()->country ?>';


        $.ajax({
             type: 'GET',
             url: '{{ url("/getexpressOrderStatus") }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'user_id' : user_id,
                    'trader_id' : trader_id
                },
            success: function (data) {
            //  console.log(data);
            //  if(data.getRecentOrders == null && data.count == 0){
            //      $('#expressOrderNotifyPopup').hide();
            //  }
                  if(data.getRecentOrders != null){

                         if(data.count > 0){



                                        var availablepaymentmethodid =   $.ajax({
                                              url:  '{{ url("/getpaymentmethodByuserid") }}',

                                            method: 'POST',
                                            data: {

                                                '_token': "{{ csrf_token() }}",
                                                'payment_method_id': data.getRecentOrders.payment_method_id,

                                            },
                                            success: function(response) {

                                                var availablePaymentData =   JSON.parse(response);

                                                   var availableCoinTotrade= availablePaymentData.AvailableCoins;
                                                    var sellerPayMethod=  availablePaymentData.payment_method_id;

                                                 if(sellerPayMethod == data.getRecentOrders.payment_method_id && data.getRecentOrders.buyer_id != null && data.getRecentOrders.seller_id == null && data.getRecentOrders.seller_confirmation_status == null && data.getRecentOrders.buyer_country == country &&  availableCoinTotrade  >= data.getRecentOrders.total_crypto_value){

                                                      if(data.getRecentOrders.buyer_id != onlineUSerID){

                                                          $('#expressOrderNotifyPopup .traderDetails .traderDetails_name').text(data.tradername.first_name);
                                                          $('#expressOrderNotifyPopup .traderDetails .traderDetails_Coin').text(data.getRecentOrders.total_crypto_value+'-'+data.getRecentOrders.crypto_type);
                                                        //   if(data.getRecentOrders.ordertype =! 1 && data.getRecentOrders.ordertype =! 0){
                                                        //         var ordertype = 'Express Trade' ;
                                                        //     }
                                                          $('#expressOrderNotifyPopup .traderDetails .traderDetails_orderType').text(ordertype);

                                                        //   var createdAt = new Date(data.getRecentOrders.created_at);
                                                        //     var formattedDateTime = createdAt.toLocaleString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' });
                                                        //   $('#expressOrderNotifyPopup .traderDetails .traderDetails_dateTime').text(formattedDateTime);

                                                          $('#expressOrderNotifyPopup #view_order').attr('orderSerialID', data.getRecentOrders.id);
                                                         $('#expressOrderNotifyPopup').modal('show');
                                                      }

                                              }

                                                //return availablePaymentData.id;

                                            },
                                            error: function(xhr, status, error) {
                                                // handle any errors that occurred during the AJAX request
                                            }
                                        });



                         }


                    }



                },
                error: function(xhr, status, error) {
                    //var erroJson = JSON.parse(xhr.responseText);
                  // triggerAlert('something went wrong!', 'error');
                }

        });


    }

    function checkorderstatus (){
        var orderid = $('#expressOrderNotifyPopup #view_order').attr('orderSerialID');
                                                //console.log(orderid);
         $.ajax({
             type: 'POST',
             url: '{{ url("/checkOrderAcceptedorNot") }}',
                data: {
                    '_token': "{{ csrf_token() }}",

                    'orderId' : orderid,
                },
            success: function (data) {
                //console.log(data);
                if(data==1){

                     $("#expressOrderNotifyPopup-btn-close").click();
                }
            },
           });
    }
    <?php } ?>
</script>
<script>
/* check pending order for auth user if pending order found then popup not shows else popup show*/
    @auth
     function checkpendingordersornot (){
        $.ajax({
            type: 'POST',
            url: '{{ url("/checkpendingorders") }}',
            data: {
                '_token': "{{ csrf_token() }}",
                'userid':'{{ Auth::user()->id }}',
            },
            success: function (data) {
                // console.log(data);
                if(data==0){
                    const userID = '{{ Auth::user()->id }}';
                    setInterval(function() {
                            orderNotifyPopup(userID);
                            onlineOrderNotifyPopup(userID);
                    }, 1000);
                }
            },
        });
    }
    @endauth
</script>
<script>
    // Run timer from database record 06-14-2023
    // $(document).ready(function(){
    //   // var payment_time_limit = '<?php // echo $get_order_data->payment_time_limit; ?>';
    //     var orderId = sessionStorage.getItem('orderid') // '<?php // echo $_SESSION['orderid']; ?>';

    //     startTimer(orderId);
    //     function startTimer(orderId) {
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route('test') }}',
    //             data:{
    //               '_token': "{{ csrf_token() }}",
    //               'orderId':orderId,

    //             },
    //             success: function(data) {
    //                 if(data.orderObj.order_status == 1){
    //                     var minutes = Math.floor(data.orderObj.payment_time_limit / 60);
    //                     var seconds = data.orderObj.payment_time_limit % 60;
    //                     $('#timer').html('');
    //                     $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
    //                 } else {
    //                      clearInterval(timeInterval);
    //                 }

    //             }
    //         });
    //     }

    //     function updateTimerValue() {
    //         var minutes = Math.floor(payment_time_limit / 60);
    //         var seconds = payment_time_limit % 60;
    //         $('#timer').html('');
    //         $('#timer').html(minutes + ':' + (seconds < 10 ? '0' : '') + seconds);
    //         payment_time_limit--;
    //       //  console.log(payment_time_limit);
    //     //    console.log( payment_time_limit--);

    //         if(payment_time_limit <= 0){
    //             console.log('g');
    //             var orderStatus = '4';
    //             $.ajax({
    //                 type: 'POST',
    //                 url: '{{ route('test') }}',
    //                 data:{
    //                   '_token': "{{ csrf_token() }}",
    //                   'orderId':orderId,
    //                   'orderStatus':orderStatus,
    //                 },
    //                 success: function(data) {
    //                     triggerAlert('System Cancelled!', 'error');
    //                     clearInterval(timeInterval);
    //                     $('#timer').html(00 + ':' + 00 + seconds);
    //                     console.log('Timer Expired')

    //                 }
    //             });
    //         } else {
    //           startTimer(orderId, payment_time_limit);
    //         }

    //     }

    //     var timeInterval = setInterval(updateTimerValue, 1000);

    // });
</script>
  </footer>
  <!-- End Footer -->
