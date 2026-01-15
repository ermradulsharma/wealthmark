  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | Notification </title>
    @include('template.web_css')
    <link rel="stylesheet" href="https://wealthmark.io/assets/css/dashboard.css">

  <style>



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
        <div class="MenuBox">

            <ul>

                @foreach($announcements_categories as $announcement_cat)

                 <li class="{{ ($all_annoncements_OfSelected_category[0]->category_id == $announcement_cat->id ) ? 'active' : ''}}">

                    <a href="{{ url(app()->getLocale().'/announcements-topics/'.trim(strtolower($announcement_cat->slugs))) }}" >
                      {!!  $announcement_cat->cat_icon !!}
                      </a>
                         <span>

                      {{ ucfirst(trans( $announcement_cat->category_name)) }}
                       </span>
                </li>

                @endforeach


            </ul>
        </div>
         {{-- $get_announcement --}}

        <div class="PageContact ">


        <div class="allAnnouncement">
          <div class="full-article">

             <div class="article-title">{{ ucfirst(trans($get_announcement->title)) }}</div>
                <div class="h-divider mb-2 mt-2"></div>
               <div class="article-subtitle">
                   {{ ucfirst(trans($get_announcement->short_description)) }}

                </div>

                 {{-- ucfirst(trans($get_announcement->long_description)) --}}
                    {!! ucfirst(trans($get_announcement->long_description)) !!}

        </div>
        </div>
        <div class="Announcement-latest-topic">

                <!------------------article heading here ------ -->

                @foreach($announcements_categories as $announcement_cat)

                     @if($all_annoncements_OfSelected_category[0]->category_id == $announcement_cat->id )

                        <a href="{{ url(app()->getLocale().'/announcements-topics/'.trim(strtolower($announcement_cat->slugs))) }}" >
                           <div class="bg-white p-2 text-black mb-3">
                            {{ ucfirst(trans( $announcement_cat->category_name)) }}
                           </div>
                          </a>

                    @endif

                @endforeach
                    <!------------------end article heading here ------ -->





            @foreach($all_annoncements_OfSelected_category as $allArticle)



             <a href="{{ url(app()->getLocale().'/announcements-articles/'.trim(strtolower($allArticle->slugs))) }}" >
                   <div class="article-list-side">
                        <i class="bi bi-arrow-right-short me-1"></i>
                      <span> {{ ucfirst(trans($allArticle->title )) }}</span>
                   </div>
                       </a>

                <div class="h-divider bg-white mb-2 mt-2"></div>
             @endforeach
            </div>
    </div>



    </div>

</div>





   <!--<span> {{-- $selected_annoncements_OfSelected_category->links() --}}</span>-->
   @include('template.web_footer')

    <script>

        $(".search_articles").click(function(){
            var article_input = $("input[name='search_articles']").val();

            var token =  '{{ @csrf_token() }}';
            //console.log(article_input);
            $.ajax({
                type: "POST",
                //  dataType: "text",
                url: "<?php echo url(app()->getLocale().'/search-announcements'); ?>",

                data: {
                    'article_input' : article_input,
                    '_token': token,
                },
                success: function(data) {

                    // console.log(data.filtered_annoncements);
                    // console.log(data.status);
                    var container = $('.allAnnouncement');
                    //console.log(data);
                    container.empty();
                    if(data.status==1){
                        $.each( data.filtered_annoncements, function( key, value ) {
                            // console.log( key + ": " + value );
                             // console.log(value.id);
                            var id = value.id;
                            var category_id = value.category_id;
                            var title = value.title;
                           var slugs = value.slugs.trim().toLowerCase();
                            var updated_at = value.updated_at;
                            var appLocale = "<?php echo url(app()->getLocale()) ?>";

                            var url = appLocale + '/announcements-articles/'+ encodeURIComponent(slugs);


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


</body>
</html>























