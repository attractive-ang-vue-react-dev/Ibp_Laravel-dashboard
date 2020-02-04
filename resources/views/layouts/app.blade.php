<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--====== Title ======-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ibpblo') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css') }}">

    <!--====== Plugins css ======-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/default.css') }}">

    <!--====== Main css ======-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">


</head>

<body>


    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
