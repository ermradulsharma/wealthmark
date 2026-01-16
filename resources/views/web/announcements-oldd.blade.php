<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    <link rel='stylesheet' href="{{('../assets/css/style_main.css') }}">
</head>

<body>
    @include('template.web_menu')

    <section class="announcements-search-block" id="announcements-search-section">
        <div class="container">
                   {{-- $all_announcements_with_categories --}}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-2 order-lg-1 order-md-1 order-sm-2"
                    id="search-box-announcement">
                    <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Announcement What are you <span class="yellow-text">looking for?</span>
                        </h2>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search_articles" placeholder="Type here and search announcements"
                            aria-label="Announcements" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text announcement-search-btn search_articles" id="basic-addon2">Search</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-1 order-lg-2 order-md-2 order-sm-1"
                    id="search-box-announcement">
                    <div class="announcement-header-img">
                        <img src="{{ asset('img/annoncement-img.png') }}"
                            class="img-fluid float-md-end d-flex mx-auto blink-img-animation" alt="gift Card Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="announcements-listing-block" id="announcements-listing-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sec-title text-left">
                        <span class="title text-white">Know About</span>
                        <h2 class="heading-h2 text-white">All Topics</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-4">

                @foreach($all_announcements_with_categories as $all_announcements_with_eachCategory )

                <div class="col-md-6 col-lg-4 col-sm-6" style="margin-bottom:25px">
                    <div class="flip-box listing-topic-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{ asset('img/announcement/announcement-icon.svg') }}" class="img-fluid"
                                    alt="gift Card Image">
                                <a href="{{url(app()->getLocale().'/announcements-topics/'.trim(strtolower($all_announcements_with_eachCategory->slugs)))}}" ><h4> {{ Str::title( $all_announcements_with_eachCategory->category_name )}} </h4> </a>
                                <div class="text">{{ $all_announcements_with_eachCategory->cat_short_description }} </div>
                            </div>
                            <div class="flip-box-back">
                                <div class="text">
                                <span class="text-uppercase title">{{ Str::title($all_announcements_with_eachCategory->title) }}</span> {{ substr($all_announcements_with_eachCategory->short_description, 0, 150).'...' }}
                                <a href="{{ url(app()->getLocale().'/announcements-topics/'.trim(strtolower($all_announcements_with_eachCategory->slugs))) }}" class="text-primary"><br/>Read More... </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section>


    <section class="announcements-article-block" id="announcements-article-section">
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
                  @foreach($all_announcements_with_categories as $all_announcements_with_eachCategory )

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="latest-article-box">
                            <div class="alert alert-warning" role="alert">

                                <a href="{{ url(app()->getLocale().'/announcements-articles/'.trim(strtolower($all_announcements_with_eachCategory->slugs))) }}" >
                                 <h4 class="alert-heading">{{ substr(ucfirst(trans($all_announcements_with_eachCategory->title )), 0, 150).'...'    }}</h4>
                                </a>

                                </a>
                                <div class="text">{{ substr($all_announcements_with_eachCategory->short_description, 0, 150).'...'   }}<br/>
                                <strong class="alert-heading">{{ date('d-m-Y H:i:s', strtotime($all_announcements_with_eachCategory->updated_at))  }}</strong>
                                </div>
                            </div>
                        </div>
                     </div>
                     @endforeach


            </div>

        </div>
    </section>

    @include('template.country_language')
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
                // var erroJson = JSON.parse(xhr.responseText);
                //console.log(erroJson);
            }
        });
    });

    </script>
</html>
