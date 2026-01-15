<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Notification </title>
      @include('template.web_css')
      <link rel="stylesheet" href="https://wealthmark.io/assets/css/dashboard.css">
      <style>
    .MenuBox > ul > li:hover span {
    display: block;
    left: 100%;
    opacity: 1;
    height: 5vh;
    margin-top: -10px;
    border-radius: 5px;
    line-height: 15px;
}
.MenuBox {
    height: auto!important;
}
.Contact {
    display: flex;
    position: relative;
    justify-content: flex-start;
    flex-direction: column;
}
.PageContact {
    z-index: 999;
}
.MenuBox  ul{
    display:flex;
    justify-content: space-between;
}
.MenuBox > ul > li > span {
    margin-left: 0.1rem;
}
.MenuBox > ul > li:hover span {
    font-size: 12px;
    margin-top: -7px;
    padding: 16px 8px!important;

}
      </style>
   </head>
   <body class="bg-white annoncement">
      @include('template.web_menu')
      <div class="bg-light-blue py-3 px-5">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-md-8 col-sm-7">
                  <a href="{{ url(app()->getLocale().'/announcements/') }}" >
                     <div class="mb-0 fs-1 text-black text-left">  Announcements </div>
                  </a>
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
      <div class="">
         <div class="Contact">
            <div class="MenuBox ">
               <ul>
                  @foreach($announcements_categories as $announcement_cat)
                  <li class="{{ (ucfirst(trans($selected_category_detail->category_name)) == ucfirst(trans( $announcement_cat->category_name))) ? 'active' : ''}}">
                     <a href="{{ url(app()->getLocale().'/announcements-topics/'.trim(strtolower($announcement_cat->slugs))) }}" >
                     <img src="{{ asset($announcement_cat->cat_icon) }}" class="max-width-40px">
                     </a>
                     <span>
                     {{ ucfirst(trans( $announcement_cat->category_name)) }}
                     </span>
                  </li>

                  @endforeach
                 <li></li>
               </ul>
            </div>
            <div class="PageContact">
               <div class="w-100">
                  <div class="fs-2">{{ ucfirst(trans($selected_category_detail->category_name)) }}</div>
                  <div  class="h-divider mb-3 mt-2"></div>
                  <!--<h4>{{ ucfirst(trans($selected_category_detail->cat_short_description)) }}</h4>-->
                  <div  class="fs-14 border-yellow text-dark px-2 py-3">{{ ucfirst(trans($selected_category_detail->cat_long_description)) }}</div>
                  <div class="allAnnouncement d-md-flex">
                     @foreach($selected_annoncements_OfSelected_category as $all_announcements_of_eachCategory)
                     <a href="{{ url(app()->getLocale().'/announcements-articles/'.trim(strtolower($all_announcements_of_eachCategory->slugs)) ) }}" >
                        <div class="Announcement-category-list">
                           <div>
                              <span>{{ ucfirst(trans( $all_announcements_of_eachCategory->title)) }} </span>
                              <span>{{ date('d-m-Y H:i:s', strtotime($all_announcements_of_eachCategory->updated_at))  }} </span>
                           </div>
                           <span>
                           <i class="bi bi-arrow-right"></i>
                           </span>
                        </div>
                     </a>
                     @endforeach
                  </div>
               </div>
               <!--<div>{{ $selected_annoncements_OfSelected_category->links() }}</div>-->
            </div>
         </div>
      </div>
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
                  console.log(data);
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
                      var announcementHtml = '<div class="Announcement-category-list">' +
                      '<span>No match found...</span>' +
                      '</div>';
                      $(".allAnnouncement").append(announcementHtml);
                  }
              },
              error: function(xhr, status, error) {
                  // var erroJson = JSON.parse(xhr.responseText);
                  console.log(erroJson);
              }
          });
      });
   </script>
    <script>
    <script>
$(document).ready(function(){
  $(".MenuBox ul li").mouseover(function(){

        });
});
</script>



   window.load
</html>
