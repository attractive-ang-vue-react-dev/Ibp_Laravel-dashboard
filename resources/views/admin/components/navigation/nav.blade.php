@extends('admin.app')
@section('nav')
    <div class="offCanvasMenu">
        <ul class="mobileMenu">
            <li><a href="#">Accueil</a></li>
            <li><a href="/admin/supplier">Supplier</a></li>
            <li><a href="#">Buyer</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="/admin">{{ __('home.Acc') }}</a></li>
        </ul>
        <div class="close-MobileMenu">
            <i class="fal fa-times"></i>
        </div>
    </div>
    <div class="off-canvas-overlay"></div>

    <header class="header-area bdr-bottom" data-z-index="5">
        <div class="container-fluid">
            <div class="header-flex-wrap">

                <div class="logo">
                    <div class="mobile-bar" id="open-sidebar"><i class="fal fa-bars"></i></div>
                    <a href="/" target="_blank"><img src="{{ URL::asset('assets/img/site_logo.svg') }}" alt=""></a>
                </div>

                <nav class="d-none d-lg-block">
                    <ul class="main-menu">
                        <li><a href="#">{{ __('home.accueil') }}</a></li>
                        <li><a href="/admin/supplier">{{ __('home.supplier') }}</a></li>
                        <li><a href="#">{{ __('home.buyer') }}</a></li>
                        <li><a hrsef="#">{{ __('home.faq') }}</a></li>
                        <li><a href="#">{{ __('home.services') }}</a></li>
                        <li><a href="/admin">{{ __('home.acc') }}</a></li>

                        <li><a href="#"><span class="img-span"><img src="{{ URL::asset('assets/img/r7.png') }}" alt=""> <span class="noti-count">3</span></span></a></li>
                    </ul>
                </nav>

                <ul class="language navbar-nav ml-auto">
                <!-- Authentication Links -->
                @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @switch($locale)
                            @case('sp')
                            Spanish
                            @break
                            @case('fr')
                            French
                            @break
                            @default
                            English
                        @endswitch
                        <span class="caret"></span>
                    </a>
                        <div class="mobile-bar dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/fr">French</a>
                            <a class="dropdown-item" href="lang/en">English</a>
                            <a class="dropdown-item" href="lang/sp">Spanish</a>
                        </div>
                    </li>
                </ul>

                <!-- <div class="language">
                    <div class="mobile-bar" id="m-menu"><i class="fal fa-bars"></i></div>
                    <select name="#" id="lan-select">
                        <option value="fr">FR</option>
                        <option value="en">EN</option>
                        <option value="es">ES</option>
                    </select>
                </div> -->
            </div>
        </div>
    </header>

    @yield('content')

@endsection
