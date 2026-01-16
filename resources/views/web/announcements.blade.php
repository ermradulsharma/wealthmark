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
      <style>
         .go-corner {
         display: flex;
         align-items: center;
         justify-content: center;
         position: absolute;
         width: 32px;
         height: 32px;
         overflow: hidden;
         top: 0;
         right: 0;
         background-color: #263674;
         border-radius: 0 0px 0 32px;
         }
         .go-arrow {
         margin-top: -4px;
         margin-right: -4px;
         color: white;
         font-family: courier, sans;
         }
         .announcements-articles-card {
         display: block;
         position: relative;
         /*max-width: 262px;*/
         background-color: #fff;
         border-radius: 4px;
         padding: 25px 24px;
         /*margin: 12px;*/
         text-decoration: none;
         z-index: 0;
         overflow: hidden;
         border-top-right-radius:0px;
         }
         .announcements-articles-card:before {
         content: "";
         position: absolute;
         z-index: -1;
         top: -16px;
         right: -16px;
         background: #263674;
         height: 32px;
         width: 32px;
         border-radius: 32px;
         transform: scale(1);
         transform-origin: 50% 50%;
         transition: transform 0.25s ease-out;
         }
         .announcements-articles-card:hover:before {
         transform: scale(30);
         }
         .announcements-articles-card:hover .go-corner{
         background-color:white;
         }
         .announcements-articles-card:hover .go-corner .go-arrow{
         color:#263674;
         }
         .announcements-articles-card:hover p {
         transition: all 0.3s ease-out;
         color: rgba(255, 255, 255, 0.8);
         }
         .announcements-articles-card:hover h5 {
         transition: all 0.3s ease-out;
         color: #fdc116;
         }
         .announcements-articles-card:hover > div.text-black , .announcements-articles-card:hover > div.text-muted{
         transition: all 0.3s ease-out;
         color: #fff !important;
         }
      </style>
   </head>
   <body>
      @include('template.web_menu')
      <div class="bg-light-blue py-5 px-5">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-8 col-sm-7">
                  <h1 class="mb-0 fs-1 text-left">
                     Announcements
                  </h1>
               </div>
               <div class="col-md-4 col-sm-5">
                  <div class="wm-faq-search wm-faq-search-1 bg-light-blue p-2">
                     <div class="wm-faq-search-inner">
                        <div class="wm-faq-search-box-main">
                           <div class=" wm-faq-search-box-div">
                              <svg viewBox="0 0 24 24" fill="none" class="wm-faq-search--icn">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                              </svg>
                              <input type="input" name="search_articles" value="" placeholder="Search" maxlength="50" class="wm-faq-search-input-box">
                              <button type="button" class="btn-yellow shadow-none border-0 me-2 search_articles">
                              Search
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">All Topics</h2>
                  </div>
               </div>
            </div>
            <div class="row">

               @foreach($all_announcements_with_categories as $all_announcements_with_eachCategory )
               {{-- $all_announcements_with_eachCategory->id --}}
                   <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                      <a href="{{url(app()->getLocale().'/announcements-topics/'.trim(strtolower($all_announcements_with_eachCategory->slugs)))}}" >
                         <div class="bg-light-blue p-2 rounded shadow-sm h-100 hover-shadow-none">
                            <div class="m-auto my-2 text-center rounded-circle max-width-80px bg-white p-2">
                               <!--<img src="{{ asset('img/announcement/crypto-listing.png') }}" class="max-width-60px">-->
                                <img src="{{ asset($all_announcements_with_eachCategory->cat_icon) }}" class="max-width-60px">

                            </div>
                            <div class="text-center mb-3">
                               <h4> {{ Str::title( $all_announcements_with_eachCategory->category_name )}} </h4>
                               <div class="fs-12 text-center text-black">{{ $all_announcements_with_eachCategory->cat_short_description }} </div>
                            </div>
                         </div>
                      </a>
                   </div>
               @endforeach
            </div>
         </div>
      </section>
      <section class=" bg-light-blue p-4 shadow-sm">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title text-left">
                     <span class="title">Know About</span>
                     <h2 class="heading-h2">Latest<span class="yellow-text"> Articles</span></h2>
                  </div>
               </div>
            </div>
            <div class="row allAnnouncement">
               @foreach($all_announcements_with_categories_by_id as $all_announcements_of_eachCategory )
               {{--$all_announcements_of_eachCategory--}}
               <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                  <a class="announcements-articles-card h-100" href="{{ url(app()->getLocale().'/announcements-articles/'.trim(strtolower($all_announcements_of_eachCategory->slugs))) }}">
                     <h5 class="title">{{ substr(ucfirst(trans($all_announcements_of_eachCategory->title )), 0, 40).'...'    }}</h5>
                     <div class="fs-14 text-black fw-bold mb-2">{{ substr($all_announcements_of_eachCategory->short_description, 0, 30).'...'   }}</div>
                     <div class="fs-12 text-muted">{{ date('d-m-Y H:i:s', strtotime($all_announcements_of_eachCategory->updated_at))  }}</div>
                     <div class="go-corner" href="#">
                        <div class="go-arrow">
                           →
                        </div>
                     </div>
                  </a>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      @include('template.web_footer')
   </body>
   <script>
      $(".search_articles").click(function(){
          var article_input = $("input[name='search_articles']").val();
          var token =  '{{ @csrf_token() }}';
              $.ajax({
                  type: "POST",
                  url: "<?php echo url(app()->getLocale().'/search-announcements'); ?>",
                  data: {
                      'article_input' : article_input,
                      '_token': token,
                  },
                  success: function(data) {
                      var container = $('.allAnnouncement');
                      container.empty();
                      if(data.status==1){
                          $.each( data.filtered_annoncements, function( key, value ) {
                              var id = value.id;
                              var category_id = value.category_id;
                              var title = value.title;
                               var slugs = value.slugs.trim().toLowerCase();
                              var updated_at = value.updated_at;
                              var appLocale = "<?php echo url(app()->getLocale()) ?>";
                              var url = appLocale + '/announcements-articles/' + encodeURIComponent(slugs);
                              var announcementHtml = '<div class="Announcement-category-list">' +
                                  '<a href="' + url + '">' +
                                      '<span>' + title+ '</span>' +
                                      '<span>' + '{{ date("d-m-Y H:i:s", strtotime('+updated_at+')) }}' + '</span>' +
                                  '</a>' +
                                  '</div>';
                              $(".allAnnouncement").append(announcementHtml);
                          });
                      }else{
                          var announcementHtml = '<div class="Announcement-category-list">' +'<span>No match found...</span>' +'</div>';
                          $(".allAnnouncement").append(announcementHtml);
                      }
                  },
                  error: function(xhr, status, error) {

              }
          });
      });

   </script>
</html>
