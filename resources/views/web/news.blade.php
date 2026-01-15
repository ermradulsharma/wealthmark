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
         .tab-link:hover{
         cursor:pointer;
         }
         .reward-link{
         color:white;
         }
         .reward-link:hover{
         color:#fdc116;
         }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="bg-dark-blue p-2 reward-section">
         <div class="container">
            <div class="row aligh-items-center justify-content-center">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <a href="{{ url( app()->getLocale(), 'register') }}" class="reward-link d-flex">
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                        <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                     </svg>
                     <span>Register now and get verified - Enjoy Welcome Rewards up to $100!</span>
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                     </svg>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <section class="pb-0 pt-2 news">
         <div class="container">
            <div class="row">
               <div class="col-md-12 otc-doc-div scrollbar-style py-0">
                  <ul class="tabs">
                     <li class="tab-link current mb-0" data-tab="Flash_news-top"> Flash news  </li>
                     <li class="tab-link mb-0" data-tab="Top_news_top">Top news </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <div id="Flash_news-top" class="table-content current bg-white p-0">
         <div class="top_news_section ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="latest-div-date">
                        <div class="latest-div-date-today">
                           <h1>Today's Flash News</h1>
                        </div>
                        <div class="latest-div-date--inner">
                           <div class="latest-div-date--inner-date">2022-10-13</div>
                           <div class="latest-div-date--inner-day">Thursday</div>
                        </div>
                     </div>
                     <div class="top_news_block">
                        <div class="d-flex">
                           <div class="news-time">53 mins ago</div>
                           <div class="top_news_right">
                              <div class="news_time_mob">
                                 <div class="">53 mins ago</div>
                              </div>
                              <div class="tp_content_block">
                                 <div class="">
                                    <a href="#">
                                       <h3>WM Chain Burns Over $570M Worth of WM in 21st Burn Event</h3>
                                       <div class="tp_content_block_txt">
                                          <div class="text scrollbar-style" >According to the Wealthmark Announcement, WM Chain burned about $570M worth of WM in its 21st ever burn on 13/10/2022. The event was also the last quarterly burn of 2022. The burn includes the Auto-Burn feature, Pioneer Burn Program, and a portion of gas fees burned in every transaction. A total of 2,065,152.42 WM was burned, which is about 1.28% of the current circulation of WM.&nbsp;What You Need to Know About the WM BurnSince the launch of WM and Wealthmark in 2017, we're committed to removing 100 million WM, or half of the total supply, from circulation, through a bur
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="tp_bottom_div">
                                    <div class="tp_action_btn">
                                       <div class="tp_like_div">
                                          <svg  viewBox="0 0 24 24" fill="none" class="tp_icon">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.723l3.444-3.391V3.01h.888a3.106 3.106 0 013.106 3.105v1.673H21v6.425a4.778 4.778 0 01-4.778 4.778H8V9.723zm-2-.038H3v9.306h3V9.685z" fill="currentColor"></path>
                                          </svg>
                                          <div class="tp_like_count">225</div>
                                       </div>
                                       <div class="tp_share">
                                          <div class="tp_share_inner">
                                             <div class="social-share-hover-share">
                                                <label class="toggle" for="toggle-btn-social-1">
                                                   <input type="checkbox" id="toggle-btn-social-1" />
                                                   <div class="social-share-hover-share-btn">
                                                      <!--<img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">-->
                                                      <svg  viewBox="0 0 24 24" fill="none" class="tp_icon fa-share-alt">
                                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 10a3.5 3.5 0 10-3.476-3.09L8.62 9.216a3.5 3.5 0 100 5.568l4.403 2.306a3.5 3.5 0 101.16-2.214L9.94 12.652a3.52 3.52 0 000-1.304l4.245-2.224A3.487 3.487 0 0016.5 10z" fill="currentColor"></path>
                                                      </svg>
                                                      <i class="bi bi-x"></i>
                                                      <div class="social-share-hover">
                                                         <a href="#"><i class="bi bi-facebook"></i></a>
                                                         <a href="#"><i class="bi bi-instagram"></i></a>
                                                         <a href="#"><i class="bi bi-twitter"></i></a>
                                                         <a href="#"><i class="bi bi-youtube"></i></a>
                                                      </div>
                                                   </div>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="like-subs-div">
                                    <svg  viewBox="0 0 24 24" fill="none" class="like-thumb">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.723l3.444-3.391V3.01h.888a3.106 3.106 0 013.106 3.105v1.673H21v6.425a4.778 4.778 0 01-4.778 4.778H8V9.723zm-2-.038H3v9.306h3V9.685z" fill="currentColor"></path>
                                    </svg>
                                    <div class="like-thumb-status">225</div>
                                    <div class="tp_share">
                                       <div class="tp_share_inner">
                                          <div class="social-share-hover-share">
                                             <label class="toggle" for="toggle-btn-social-1-1">
                                                <input type="checkbox" id="toggle-btn-social-1-1" />
                                                <div class="social-share-hover-share-btn">
                                                   <!--<img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">-->
                                                   <svg  viewBox="0 0 24 24" fill="none" class="tp_icon fa-share-alt">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 10a3.5 3.5 0 10-3.476-3.09L8.62 9.216a3.5 3.5 0 100 5.568l4.403 2.306a3.5 3.5 0 101.16-2.214L9.94 12.652a3.52 3.52 0 000-1.304l4.245-2.224A3.487 3.487 0 0016.5 10z" fill="currentColor"></path>
                                                   </svg>
                                                   <i class="bi bi-x"></i>
                                                   <div class="social-share-hover">
                                                      <a href="#"><i class="bi bi-facebook"></i></a>
                                                      <a href="#"><i class="bi bi-instagram"></i></a>
                                                      <a href="#"><i class="bi bi-twitter"></i></a>
                                                      <a href="#"><i class="bi bi-youtube"></i></a>
                                                   </div>
                                                </div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="top_news_block">
                        <div class="d-flex">
                           <div class="news-time">53 mins ago</div>
                           <div class="top_news_right">
                              <div class="news_time_mob">
                                 <div class="">53 mins ago</div>
                              </div>
                              <div class="tp_content_block">
                                 <div class="">
                                    <a href="#">
                                       <h3>WM Chain Burns Over $570M Worth of WM in 21st Burn Event</h3>
                                       <div class="tp_content_block_txt">
                                          <div class="text scrollbar-style" >According to the Wealthmark Announcement, WM Chain burned about $570M worth of WM in its 21st ever burn on 13/10/2022. The event was also the last quarterly burn of 2022. The burn includes the Auto-Burn feature, Pioneer Burn Program, and a portion of gas fees burned in every transaction. A total of 2,065,152.42 WM was burned, which is about 1.28% of the current circulation of WM.&nbsp;What You Need to Know About the WM BurnSince the launch of WM and Wealthmark in 2017, we're committed to removing 100 million WM, or half of the total supply, from circulation, through a bur
                                             </span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="tp_bottom_div">
                                    <div class="tp_action_btn">
                                       <div class="tp_like_div">
                                          <svg  viewBox="0 0 24 24" fill="none" class="tp_icon">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.723l3.444-3.391V3.01h.888a3.106 3.106 0 013.106 3.105v1.673H21v6.425a4.778 4.778 0 01-4.778 4.778H8V9.723zm-2-.038H3v9.306h3V9.685z" fill="currentColor"></path>
                                          </svg>
                                          <div class="tp_like_count">225</div>
                                       </div>
                                       <div class="">
                                          <div class="tp_share">
                                             <div class="">
                                                <div class="tp_share_inner">
                                                   <div class="social-share-hover-share">
                                                      <label class="toggle" for="toggle-btn-social-2">
                                                         <input type="checkbox" id="toggle-btn-social-2" />
                                                         <div class="social-share-hover-share-btn">
                                                            <!--<img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">-->
                                                            <svg  viewBox="0 0 24 24" fill="none" class="tp_icon fa-share-alt">
                                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 10a3.5 3.5 0 10-3.476-3.09L8.62 9.216a3.5 3.5 0 100 5.568l4.403 2.306a3.5 3.5 0 101.16-2.214L9.94 12.652a3.52 3.52 0 000-1.304l4.245-2.224A3.487 3.487 0 0016.5 10z" fill="currentColor"></path>
                                                            </svg>
                                                            <i class="bi bi-x"></i>
                                                            <div class="social-share-hover">
                                                               <a href="#"><i class="bi bi-facebook"></i></a>
                                                               <a href="#"><i class="bi bi-instagram"></i></a>
                                                               <a href="#"><i class="bi bi-twitter"></i></a>
                                                               <a href="#"><i class="bi bi-youtube"></i></a>
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="like-subs-div">
                                    <svg  viewBox="0 0 24 24" fill="none" class="like-thumb">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.723l3.444-3.391V3.01h.888a3.106 3.106 0 013.106 3.105v1.673H21v6.425a4.778 4.778 0 01-4.778 4.778H8V9.723zm-2-.038H3v9.306h3V9.685z" fill="currentColor"></path>
                                    </svg>
                                    <div class="like-thumb-status">225</div>
                                    <div class="">
                                       <div class="tp_share">
                                          <div class="">
                                             <svg  viewBox="0 0 24 24" fill="none" class="">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 10a3.5 3.5 0 10-3.476-3.09L8.62 9.216a3.5 3.5 0 100 5.568l4.403 2.306a3.5 3.5 0 101.16-2.214L9.94 12.652a3.52 3.52 0 000-1.304l4.245-2.224A3.487 3.487 0 0016.5 10z" fill="currentColor"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--=============================second tab =================================-->
      <div id="Top_news_top" class="table-content p-0">
         <section class="p-4 bg-light-blue">
            <div class="container text-center my-3">
               <div class="row mx-auto my-auto justify-content-center">
                  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-fluid">
                                 </div>
                                 <div class="card-img-overlay">Slide 1</div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-fluid">
                                 </div>
                                 <div class="card-img-overlay">Slide 2</div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-fluid">
                                 </div>
                                 <div class="card-img-overlay">Slide 3</div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-fluid">
                                 </div>
                                 <div class="card-img-overlay">Slide 4</div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-fluid">
                                 </div>
                                 <div class="card-img-overlay">Slide 5</div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="col-md-3">
                              <div class="card">
                                 <div class="card-img">
                                    <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-fluid">
                                 </div>
                                 <div class="card-img-overlay">Slide 6</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     </a>
                     <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <div class="mb-3 p-3 bg-dark-blue">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 news-tickerpanel p-0">
                     <div class="Flash_news" >
                        Flash news
                     </div>
                     <div id="ticker-roll" class="ticker">
                        <ul>
                           <li>Working at Wealthmark</li>
                           <li>Working with regulators</li>
                           <li>Putting our users first</li>
                           <li>Customer Support in 40 languages</li>
                           <li>Transactions per second</li>
                        </ul>
                     </div>
                     <!--/#ticker -->
                  </div>
               </div>
            </div>
         </div>
         <section class="latest_news top_news">
            <div class="container">
               <div class="row works-category">
                  <ul class="scrollbar-style">
                     <li><a href="#" class="selected" data-filter="*" id="filter-a">All</a></li>
                     <li><a href="#" data-filter="Business" id="filter-a">Business</a></li>
                     <li><a href="#" data-filter="Markets" id="filter-a"> Markets</a></li>
                     <li><a href="#" data-filter="Technology" id="filter-a">Technology</a></li>
                     <li><a href="#" data-filter="Policy" id="filter-a">Policy&nbsp;&&nbsp;Regulation</a></li>
                  </ul>
               </div>
               <div class="row mt-5">
                  <div class="col-md-12 work-one latest_news" data-filter="vectors">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-3">
                                    <input type="checkbox" id="toggle-btn-social-3" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="Business">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-4">
                                    <input type="checkbox" id="toggle-btn-social-4" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="vectors">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-5">
                                    <input type="checkbox" id="toggle-btn-social-5" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="Business">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-6">
                                    <input type="checkbox" id="toggle-btn-social-6" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="Markets">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-8">
                                    <input type="checkbox" id="toggle-btn-social-8" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="Technology">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-9">
                                    <input type="checkbox" id="toggle-btn-social-9" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="Policy">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-10">
                                    <input type="checkbox" id="toggle-btn-social-10" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 work-one" data-filter="Policy">
                     <div class="card">
                        <div class="card-left">
                           <img src="https://www.wealthmark.io/assets/img/drawers.jpg" class="img-responsIve">
                        </div>
                        <div class="card-right">
                           <div class="">
                              <h3 class="">Bitcoin and Beyond: The Future of Cryptocurrency Investing</h3>
                              <div class="text">Since 2009, when Bitcoin was quietly launched by its creator, the technology spurred thousands of digital money projects, creating a vibrant and lucrative landscape for investors.Investors now come in all sorts of flavors. What once was a small group of geeky believers is now a diverse crowd of people, from cypherpunks to big mainstream companies and large investment funds.With cryptocurrencies gaining traction as an investment asset, investors a</div>
                           </div>
                           <div class="card-right-body">
                              <div class="press-blog-auther">
                                 <div class="card-rb-1">
                                    <img src="{{ asset('assets/img/abt-team-3.jpg') }}" alt="">
                                 </div>
                                 <div class="card-rb-2">
                                    <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                    <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                                 </div>
                              </div>
                              <div class="social-share-hover-share">
                                 <label class="toggle" for="toggle-btn-social-11">
                                    <input type="checkbox" id="toggle-btn-social-11" />
                                    <div class="social-share-hover-share-btn">
                                       <img src="{{ asset('assets/img/icon-share.svg') }}" class="fa-share-alt">
                                       <i class="bi bi-x"></i>
                                       <div class="social-share-hover">
                                          <a href="#"><i class="bi bi-facebook"></i></a>
                                          <a href="#"><i class="bi bi-instagram"></i></a>
                                          <a href="#"><i class="bi bi-twitter"></i></a>
                                          <a href="#"><i class="bi bi-youtube"></i></a>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      @include('template.country_language')
      @include('template.web_footer')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
         $(function(){
           $.simpleTicker($("#ticker-roll"),{'effectType':'roll'});
         });
      </script>
      <script>
         (function($) {
           $.simpleTicker =function(element, options) {
             var defaults = {
               speed : 2000,
               delay : 2000,
               easing : 'swing',
               effectType : 'slide'
             }

             var param = {
               'ul' : '',
               'li' : '',
               'initList' : '',
               'ulWidth'  : '',
               'liHeight' : '',
               'tickerHook' : 'tickerHook',
               'effect' : {}
             }

             var plugin = this;
                 plugin.settings = {}

             var $element = $(element),
                 element = element;

             plugin.init = function() {
               plugin.settings = $.extend({}, defaults, options);
               param.ul = element.children('ul');
               param.li = element.find('li');
               param.initList = element.find('li:first');
               param.ulWidth  = param.ul.width();
               param.liHeight = param.li.height();

             //   element.css({height:(param.liHeight)});
               param.li.css({top:'0',left:'0',position:'absolute'});

               //dispatch
               switch (plugin.settings.effectType) {

                 case 'roll':
                   plugin.effect.roll();
                   break;

               }
               plugin.effect.exec();
             }

             plugin.effect = {};

             plugin.effect.exec = function() {
               param.initList.css(param.effect.init.css)
                             .animate(param.effect.init.animate,plugin.settings.speed,plugin.settings.easing)
                             .addClass(param.tickerHook);
               if (element.find(param.li).length > 1) {
                 setInterval(function(){
                   element.find('.' + param.tickerHook)
                          .animate(param.effect.start.animate,plugin.settings.speed,plugin.settings.easing)
                          .next()
                          .css(param.effect.next.css)
                          .animate(param.effect.next.animate,plugin.settings.speed,plugin.settings.easing)
                          .addClass(param.tickerHook)
                          .end()
                          .appendTo(param.ul)
                          .css(param.effect.end.css)
                          .removeClass(param.tickerHook);
                 },plugin.settings.delay);
               }
             }



             plugin.effect.roll = function() {
               param.effect = {
                 'init' : {
                   'css' : {top:'3em',display:'block',opacity:'0'},
                   'animate' : {top:'0',opacity:'1',zIndex:'98'}
                 },
                 'start' : {
                   'animate' : {top:'-3em',opacity:'0'}
                 },
                 'next' : {
                   'css' : {top:'3em',display:'block',opacity:'0',zIndex:'99'},
                   'animate' : {top:'0',opacity:'1'}
                 },
                 'end' : {
                   'css' : {zIndex:'98'}
                 }
               }
             }



             plugin.init();
           }

           $.fn.simpleTicker = function(options) {
             return this.each(function() {
               if (undefined == $(this).data('simpleTicker')) {
                 var plugin = new $.simpleTiecker(this, options);
                 $(this).data('simpleTicker', plugin);
               }
             });
           }
         })(jQuery);

      </script>
      <script>
         $(document).ready(function(){
          $('a#filter-a').click(function(){
            //hide all works by default
            $(".work-one").addClass('filter-hide');
            //show slected works based on the menu clicked
            $(".work-one[data-filter='"+$(this).attr('data-filter')+"']").removeClass("filter-hide");
            //remove selected class to the link
            $('a#filter-a').removeClass('selected');
            //add selected class to the active link
            $(this).addClass('selected');
            return false;
           });
           //show all works for "all" menu
          $('a[data-filter="*"]').click(function(event) {
             $(".work-one").removeClass('filter-hide');
             return false;
          });
         });
      </script>
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
         let items = document.querySelectorAll('.carousel .carousel-item')

         items.forEach((el) => {
         const minPerSlide = 4
         let next = el.nextElementSibling
         for (var i=1; i<minPerSlide; i++) {
         if (!next) {
              // wrap carousel by using first child
              next = items[0]
          }
          let cloneChild = next.cloneNode(true)
          el.appendChild(cloneChild.children[0])
          next = next.nextElementSibling
         }
         })
      </script>
   </body>
</html>
