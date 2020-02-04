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
        <div class="login-inner-wrap">
            <div class="logo-part">
                <a href="/" target="_blank"><img src="{{ URL::asset('assets/img/login-logo.svg') }}" alt=""></a>
                <h5>REGISTRATION</h5>
            </div>
            <div class="tabContainer">
                <nav>
                    <div class="nav nav-link-wrap" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="tbOne-tab" data-toggle="tab" href="#tbOne" role="tab" aria-controls="nav-home" aria-selected="true">STEP 1</a>
                        <a class="nav-item nav-link" id="tbTwo-tab" data-toggle="tab" href="#tbTwo" role="tab" aria-controls="nav-profile" aria-selected="false">STEP 2</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tbOne" role="tabpanel" aria-labelledby="tbOne-tab">
                        <div class="tb-content-wrap">
                            <form action="#">
                                <div class="form-content">
                                    <div class="input-inside">
                                        <input type="text" placeholder="FIRSTNAME">
                                    </div>
                                    <div class="input-inside">
                                        <input type="text" placeholder="LASTNAME">
                                    </div>
                                    <div class="input-inside">
                                        <input type="text" placeholder="PHONE NUMBER">
                                        <span class="input-trans"><img src="{{ URL::asset('assets/img/flag-1.png') }}" alt=""></span>
                                    </div>
                                    <div class="input-inside">
                                        <input type="email" placeholder="EMAIL">
                                        <span class="input-trans"><img src="{{ URL::asset('assets/img/msg.png') }}" alt=""></span class="input-trans">
                                    </div>
                                    <div class="submit-btn">
                                        <button class="round-btn submit-btn" type="submit">NEXT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tbTwo" role="tabpanel" aria-labelledby="tbTwo-tab">
                        <div class="tb-content-wrap">
                            <form action="#">
                                <div class="form-content">
                                    <div class="input-inside">
                                        <input type="text" placeholder="PASSWORD">
                                        <span class="input-trans"><img src="{{ URL::asset('assets/img/lock.png') }}" alt=""></span>
                                    </div>
                                    <div class="input-inside">
                                        <input type="text" placeholder="COMPANY NAME">
                                    </div>
                                    <div class="input-inside">
                                        <input type="text" placeholder="COMPANY ADDRESS">
                                        <span class="input-trans"><img src="{{ URL::asset('assets/img/lock-2.png') }}" alt=""></span>
                                    </div>
                                    <div class="input-inside">
                                        <label class="checkBox">
                                            I accept to receive communications by email from ibpbio.
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="submit-btn">
                                        <button class="round-btn submit-btn" type="submit">NEXT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
