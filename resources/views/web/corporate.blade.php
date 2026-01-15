<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')

</head>

<body>
    @include('template.web_menu')


<section class="bg-light-blue">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-5 fs-14 text-black text-center">
                    No Record Found
                </div>
            </div>
        </div>
    </div>
</section>


    @include('template.country_language')
    @include('template.web_footer')
</body>
   
</html>