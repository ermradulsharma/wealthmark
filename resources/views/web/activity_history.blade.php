<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/style_main.css') }}">
</head>

<body>
    @include('template.web_menu')

    <section class="activity-history" id="activity-history-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="sec-title text-left">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">Activity <span class="yellow-text">History</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="activity-history-inner-box">
                        <img src="{{ asset('img/activity-history-img.png') }}" class="img-fluid"
                            alt="gift Card Image">
                        <h5 class="mt-4">Refer and share $500,000 in Mystery Boxes </h5>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 4H7v2H4v3.5h16V6h-3V4h-3v2h-4V4zm10 8H4v7h16v-7z" fill="currentColor"></path>
                            </svg>Offer ends: 2022-08-11 23:59 (UTC) </span>
                        <br />
                        <a class="btn btn-yellow shadow mt-2" id="finished-btn"> FINISHED </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>
