<!doctype html>
<html lang="en">

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

    <div class="login-wrapper" style="background-image: url({{ URL::asset('assets/img/login-bg.jpg') }});">
        <div class="login-inner-wrap type-2">
            <div class="logo-part type-2">
                <a href="/" target="_blank"><img src="{{ URL::asset('assets/img/login-logo.svg') }}" alt=""></a>
                <p>international business platform </p>
            </div>
            <div class="card-header">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-content">
                    <div class="input-inside type-2">
                        <label for="">Login</label>
                        <input type="text" placeholder="{{ __('E-Mail Address') }}">
                    </div>
                    <div class="input-inside type-2">
                        <label for="">Password</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="submit-btn">
                        <button class="round-btn submit-btn" type="submit">Login</button>
                    </div>
                    <div class="forget-wrap">
                        <a href="#">Forgot your password?</a>
                        <a href="#">Registration</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!--====== jquery js ======-->
    <script src="{{ URL::asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== Plugins js ======-->
    <script src="{{ URL::asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>

</body>

</html>
