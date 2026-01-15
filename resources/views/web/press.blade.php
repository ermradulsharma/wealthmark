<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
      <meta name="keywords" content="Wealthmark, Crypto, coins">
      <meta name="author" content="Wealthmark">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Press</title>
      @include('template.web_css')
      <style>
         .nav-tabs-a {
         margin-bottom: 0;
         }  
         .news-time {
         height: 30px;
         border-radius: 10px;
         width: 70px!important;
         }
         .news-time:hover {
         height: 30px;
         border-radius: 10px;
         width: 70px!important;
         background:linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
         color:white;
         }
         .latest-news-text {
         border: 1px solid #fdc116;
         }
         .latest-news-text:hover {
         border: 1px solid #263674;
         cursor:pointer;
         }
         @media(min-width:501px) and (max-width:576px){
         .threediv-block a .threediv-block-txt-top {
         font-size: 15px;
         }
         }
      </style>
   </head>
   <body class="bg-white">
      @include('template.web_menu')
      <div class="bg-light-blue">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="nav-tabs-list d-flex justify-content-between">
                     <a  href="{{ url( app()->getLocale(), 'about-us') }}" class="nav-tabs-a">About</a>
                     <a  href="{{ url( app()->getLocale(), 'careers') }}" class="nav-tabs-a">Careers</a>
                     <a  href="{{ url( app()->getLocale(), 'press') }}" class="nav-tabs-a active">Press</a>
                     <a  href="{{ url( app()->getLocale(), 'community') }}" class="nav-tabs-a">Community</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section id="press"  class="breadcrumbs shadow-sm bg-dark-blue p-5">
         <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
               <div class="col-lg-4 col-md-6 col-sm-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                  <h1 class="top-heading yellow-text">Wealthmark Newsroom</h1>
                  <p class="top-p text-white">Your source for the latest news from Wealthmark. Get access to our official announcements, blog posts, news updates, media assets and more. When it comes to blockchain and crypto, Wealthmark is always at the heart of the story.</p>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-6 hero-img text-center">
                  <img src="{{ asset('img/press-cover-graphic.png') }}" class="img-fluid" alt="Wealthmark Newsroom Banner" title="Wealthmark Newsroom Banner">
               </div>
            </div>
         </div>
      </section>
      <div class="support-sec press bg-light-blue p-3">
         <div class="container">
            <div class="threediv">
               <div class="threediv-block">
                  <a href="#">
                     <div class="threediv-block-inner">
                        <img src="{{ asset('img/blog.svg') }}" class="support-sec-svg" alt="Wealthmark Blog" title="Wealthmark Blog" >
                        <div class="threediv-block-txt-div">
                           <div class="threediv-block-txt-top">Wealthmark Blog</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="threediv-block">
                  <a href="#">
                     <div class="threediv-block-inner">
                        <img src="{{ asset('img/announcements.svg') }}" class="support-sec-svg" alt="Announcements " title="Announcements ">
                        <div class="threediv-block-txt-div">
                           <div class="threediv-block-txt-top">Announcements</div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="threediv-block">
                  <a href="#">
                     <div class="threediv-block-inner">
                        <img src="{{ asset('img/media-assets.svg') }}" class="support-sec-svg" alt="Media Assets" title="Media Assets ">
                        <div class="threediv-block-txt-div">
                           <div class="threediv-block-txt-top">Media Assets</div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-title">
                     <span class="title">Welcome to Wealthmark</span>
                     <h2 class="heading-h2">About Wealthmark</h2>
                  </div>
                  <div class="text">
                     Wealthmark is the world’s leading blockchain ecosystem and cryptocurrency infrastructure provider with a financial product suite that includes the largest digital asset exchange.
                  </div>
                  <div class="mt-3">
                     <a href="#" class="btn btn-blue shadow"> View Openings</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="remove-- bg-light-blue">
         <div class="container">
            <div class="col-md-12">
               <div class="sec-title text-left mb-3">
                  <h2 class="heading-h2">Official Announcements</h2>
                  <div class="text mt-0"><b> Stay up to date on Wealthmark product updates, new listings, trading competitions and other important announcements... </b></div>
                  <a href="#" class="news-link-btn">View More &gt;&gt;</a>
               </div>
            </div>
            <h5>
               Latest announcement
            </h5>
            <div class="news-container">
               <div class="news-sidebar-left">
                  <a  href="#"  class="news-title-link">
                     <div class="overflow-ellipsis-div">
                        Wealthmark P2P Turns 3! Stand a Chance to Share 33,000 BUSD in Rewards, Receive Exclusive Wealthmark <br>
                        <!--<span class="overflow-ellipsis">…</span>-->
                     </div>
                  </a>
                  <div  class="news-text">
                     <div class="overflow-ellipsis-div">This is a general announcement. Products and services referred to here may not be available in your region.Reminder: Click the [Join now] button on the main activity page to be eligible for the rewards.To celebrate Wealthmark P2P’s third anniversary, we are launching a series of promotions for all P2P users! A total rewards pool of 33,000 BUSD is up for grabs, and eligible users will <wbr>
                        <span class="overflow-ellipsis">…</span>
                     </div>
                  </div>
                  <div  class="news-hosted-by">By Wealthmark Team, 11:40</div>
               </div>
               <div class="news-sidebar">
                  <a  href="#" class="news-list-right">
                     <div class="news-list-flex-div">
                        <div  class="news-list-flex-div-inner">
                           <div class="overflow-ellipsis-div">Subscribe to ALPINE Locked Products &amp; Stand a Chance to Enjoy <wbr>
                              <span class="overflow-ellipsis">…</span>
                           </div>
                        </div>
                        <div  class="news-time">09:35</div>
                     </div>
                  </a>
                  <a  href="#"  class="news-list-right">
                     <div class="news-list-flex-div">
                        <div  class="news-list-flex-div-inner">
                           <div class="LinesEllipsis  ">Wealthmark Convert Adds PROS <wbr>
                           </div>
                        </div>
                        <div  class="news-time">08:30</div>
                     </div>
                  </a>
                  <a  href="#" class="news-list-right">
                     <div class="news-list-flex-div">
                        <div  class="news-list-flex-div-inner">
                           <div class="overflow-ellipsis-div">Read Wealthmark News and Play WODL to Share $25,000 in SKL Token <wbr>
                              <span class="overflow-ellipsis">…</span>
                           </div>
                        </div>
                        <div  class="news-time">07:30</div>
                     </div>
                  </a>
                  <a  href="#" class="news-list-right">
                     <div class="news-list-flex-div">
                        <div  class="news-list-flex-div-inner">
                           <div class="overflow-ellipsis-div">Join the Wealthmark Academy NFT Study Week and Share Up to 50,000 <wbr>
                              <span class="overflow-ellipsis">…</span>
                           </div>
                        </div>
                        <div  class="news-time">05:30</div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="latest_news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sec-title text-left mb-3">
                     <h2 class="heading-h2">Latest News</h2>
                     <div class="text mt-0"><b> Keep up to date with the latest crypto news and updates.. </b></div>
                     <a href="#" class="news-link-btn">View More &gt;&gt;</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="container latest_news_blog">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="card">
                     <div class="card-left">
                        <div class="card-img"></div>
                     </div>
                     <div class="card-right">
                        <h5 class="">New 1-Second Interval Feature Now Available on Spot and Margin Charts</h5>
                        <div class="text">Wealthmark has just launched our latest feature for traders who want to monitor price changes by the second....</div>
                        <div class="card-right-body">
                           <div class="press-blog-auther">
                              <!--<div class="card-rb-1">-->
                              <!--   <img src="{{ asset('img/abt-team-3.jpg') }}" alt="Latest New" title="Latest New">-->
                              <!--</div>-->
                              <div class="card-rb-2">
                                 <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                 <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                              </div>
                           </div>
                           <div class="social-share-hover-share">
                              <label class="toggle" for="toggle-btn-social-1">
                                 <input type="checkbox" id="toggle-btn-social-1" />
                                 <div class="social-share-hover-share-btn">
                                    <img src="{{ asset('img/icon-share.svg') }}" class="fa-share-alt" alt="Share Now" title="Share Now">
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
               <div class="col-md-4 col-sm-6">
                  <div class="card">
                     <div class="card-left">
                        <div class="card-img"></div>
                     </div>
                     <div class="card-right">
                        <h5 class="">New 1-Second Interval Feature Now Available on Spot and Margin Charts</h5>
                        <div class="text">Wealthmark has just launched our latest feature for traders who want to monitor price changes by the second....</div>
                        <div class="card-right-body">
                           <div class="press-blog-auther">
                              <!--<div class="card-rb-1">-->
                              <!--   <img src="{{ asset('img/abt-team-3.jpg') }}" alt="Latest New" title="Latest New">-->
                              <!--</div>-->
                              <div class="card-rb-2">
                                 <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                 <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                              </div>
                           </div>
                           <div class="social-share-hover-share">
                              <label class="toggle" for="toggle-btn-social-2">
                                 <input type="checkbox" id="toggle-btn-social-2" />
                                 <div class="social-share-hover-share-btn">
                                    <img src="{{ asset('img/icon-share.svg') }}" class="fa-share-alt" alt="Share Now" title="Share Now">
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
               <div class="col-md-4 col-sm-6">
                  <div class="card">
                     <div class="card-left">
                        <div class="card-img"></div>
                     </div>
                     <div class="card-right">
                        <h5 class="">New 1-Second Interval Feature Now Available on Spot and Margin Charts</h5>
                        <div class="text">Wealthmark has just launched our latest feature for traders who want to monitor price changes by the second....</div>
                        <div class="card-right-body">
                           <div class="press-blog-auther">
                              <!--<div class="card-rb-1">-->
                              <!--   <img src="{{ asset('img/abt-team-3.jpg') }}" alt="Latest New" title="Latest New">-->
                              <!--</div>-->
                              <div class="card-rb-2">
                                 <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                 <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                              </div>
                           </div>
                           <div class="social-share-hover-share">
                              <label class="toggle" for="toggle-btn-social-3">
                                 <input type="checkbox" id="toggle-btn-social-3" />
                                 <div class="social-share-hover-share-btn">
                                    <img src="{{ asset('img/icon-share.svg') }}" class="fa-share-alt" alt="Share Now" title="Share Now">
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
               <div class="col-md-4 col-sm-6">
                  <div class="card">
                     <div class="card-left">
                        <div class="card-img"></div>
                     </div>
                     <div class="card-right">
                        <h5 class="">New 1-Second Interval Feature Now Available on Spot and Margin Charts</h5>
                        <div class="text">Wealthmark has just launched our latest feature for traders who want to monitor price changes by the second....</div>
                        <div class="card-right-body">
                           <div class="press-blog-auther">
                              <!--<div class="card-rb-1">-->
                              <!--   <img src="{{ asset('img/abt-team-3.jpg') }}" alt="Latest New" title="Latest New">-->
                              <!--</div>-->
                              <div class="card-rb-2">
                                 <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                 <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                              </div>
                           </div>
                           <div class="social-share-hover-share">
                              <label class="toggle" for="toggle-btn-social-4">
                                 <input type="checkbox" id="toggle-btn-social-4" />
                                 <div class="social-share-hover-share-btn">
                                    <img src="{{ asset('img/icon-share.svg') }}" class="fa-share-alt" alt="Share Now" title="Share Now">
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
               <div class="col-md-4 col-sm-6">
                  <div class="card">
                     <div class="card-left">
                        <div class="card-img"></div>
                     </div>
                     <div class="card-right">
                        <h5 class="">New 1-Second Interval Feature Now Available on Spot and Margin Charts</h5>
                        <div class="text">Wealthmark has just launched our latest feature for traders who want to monitor price changes by the second....</div>
                        <div class="card-right-body">
                           <div class="press-blog-auther">
                              <!--<div class="card-rb-1">-->
                              <!--   <img src="{{ asset('img/abt-team-3.jpg') }}"alt="Latest New" title="Latest New">-->
                              <!--</div>-->
                              <div class="card-rb-2">
                                 <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                 <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                              </div>
                           </div>
                           <div class="social-share-hover-share">
                              <label class="toggle" for="toggle-btn-social-5">
                                 <input type="checkbox" id="toggle-btn-social-5" />
                                 <div class="social-share-hover-share-btn">
                                    <img src="{{ asset('img/icon-share.svg') }}" class="fa-share-alt" alt="Share Now" title="Share Now">
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
               <div class="col-md-4 col-sm-6">
                  <div class="card">
                     <div class="card-left">
                        <div class="card-img"></div>
                     </div>
                     <div class="card-right">
                        <h5 class="">New 1-Second Interval Feature Now Available on Spot and Margin Charts</h5>
                        <div class="text">Wealthmark has just launched our latest feature for traders who want to monitor price changes by the second....</div>
                        <div class="card-right-body">
                           <div class="press-blog-auther">
                              <!--<div class="card-rb-1">-->
                              <!--   <img src="{{ asset('img/abt-team-3.jpg') }}"alt="Latest New" title="Latest New">-->
                              <!--</div>-->
                              <div class="card-rb-2">
                                 <div class="card-rb-2-title fw-7">Michelle Appleton</div>
                                 <div class="card-rb-2-text fw-5">28 Jun 2020</div>
                              </div>
                           </div>
                           <div class="social-share-hover-share">
                              <label class="toggle" for="toggle-btn-social-6">
                                 <input type="checkbox" id="toggle-btn-social-6" />
                                 <div class="social-share-hover-share-btn">
                                    <img src="{{ asset('img/icon-share.svg') }}" class="fa-share-alt" alt="Share Now" title="Share Now">
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
      <section>
         <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="sec-title text-left mb-3">
                  <span class="title">Welcome to Wealthmark</span>
                  <h2 class="heading-h2">Latest News</h2>
                  <div class="text mt-0"><b> Keep up to date with the latest crypto news and updates.. </b></div>
                  <a   href="#" class="news-link-btn">View More &gt;&gt;</a>
               </div>
            </div>
            <div class="col-md-12">
               <a href="#">
                  <div class="news_container">
                     <div class="news_main_div">
                        <img src="{{ asset('img/drawers.jpg') }}" class="news_img" alt="Latest New" title="Latest New">
                        <div class="news_inner-right">
                           <h4 class="">Read Wealthmark News and Play WODL to Share $25,000 in SKL Token Vouchers, With Additional $5,00 <wbr>
                              <span class="overflow-ellipsis">...</span>
                           </h4>
                           <div class="text">Activity Period: 2022-10-10 00:00 (UTC) to 2022-10-16 23:59 (UTC)Crypto WODL is a mini-game that allows users to guess mystery words to understand the latest market developments while earning crypto rewards.&nbsp;The theme of this week is ETH Merge. Read Wealthmark News to learn more about this topic and participate in this week’s WODL. Users who get at least five corre <wbr>
                              <span class="overflow-ellipsis">...</span>
                           </div>
                           <div class="news_bottom">
                              <div class="latest-news-text">
                                 <svg  viewBox="0 0 24 24" fill="none" class="latest-news-svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3.5a5.502 5.502 0 00-5.302 4.032 7.502 7.502 0 016.77 6.77A5.502 5.502 0 0015 3.5zM14.5 15a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0zm-8 0L9 17.5l2.5-2.5L9 12.5 6.5 15zM9 4H4v5l5-5zm11 16h-5l5-5v5z" fill="currentColor"></path>
                                 </svg>
                                 <div class="news-brand">BTC</div>
                                 <div class="news-status">-0.97%</div>
                                 <svg  viewBox="0 0 24 24" fill="none" class="latest-news-svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                                 </svg>
                              </div>
                              <div class="latest-news-text">
                                 <svg  viewBox="0 0 24 24" fill="none" class="latest-news-svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3.5a5.502 5.502 0 00-5.302 4.032 7.502 7.502 0 016.77 6.77A5.502 5.502 0 0015 3.5zM14.5 15a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0zm-8 0L9 17.5l2.5-2.5L9 12.5 6.5 15zM9 4H4v5l5-5zm11 16h-5l5-5v5z" fill="currentColor"></path>
                                 </svg>
                                 <div class="news-brand">ETH</div>
                                 <div class="news-status">-0.84%</div>
                                 <svg  viewBox="0 0 24 24" fill="none" class="latest-news-svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                                 </svg>
                              </div>
                              <div class="latest-news-text">
                                 <svg  viewBox="0 0 24 24" fill="none" class="latest-news-svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3.5a5.502 5.502 0 00-5.302 4.032 7.502 7.502 0 016.77 6.77A5.502 5.502 0 0015 3.5zM14.5 15a5.5 5.5 0 10-11 0 5.5 5.5 0 0011 0zm-8 0L9 17.5l2.5-2.5L9 12.5 6.5 15zM9 4H4v5l5-5zm11 16h-5l5-5v5z" fill="currentColor"></path>
                                 </svg>
                                 <div class="news-brand">BNB</div>
                                 <div class="news-status">-1.15%</div>
                                 <svg  viewBox="0 0 24 24" fill="none" class="latest-news-svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </section>
      @include('template.country_language')
      @include('template.web_footer') 
   </body>
</html>