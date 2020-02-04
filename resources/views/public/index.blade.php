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

    <div class="offCanvasMenu">
        <ul class="mobileMenu">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Fournisseur</a></li>
            <li><a href="#">Acheteur</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">M'identifier / m'inscrire</a></li>
        </ul>
        <div class="close-MobileMenu">
            <i class="fal fa-times"></i>
        </div>
    </div>
    <div class="off-canvas-overlay"></div>

    <header class="header-area">
        <div class="container-fluid">
            <div class="header-flex-wrap">
                <div class="logo">
                    <a href="/" target="_blank"><img src="{{ URL::asset('assets/img/site_logo.svg')}}" alt=""></a>
                </div>
                <nav class="d-none d-lg-block">
                    <ul class="main-menu">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Fournisseur</a></li>
                        <li><a href="#">Acheteur</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Services</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('login-form').submit();">
                                {{ __('M\'identifier / m\'inscrire') }}
                            </a>

                            <form id="login-form" action="{{ route('login') }}" method="GET" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <div class="language">

                    <div class="mobile-bar" id="m-menu"><i class="fal fa-bars"></i></div>
                    <select name="#" id="lan-select">
                        <option value="fr">FR</option>
                        <option value="fr">FR 1</option>
                        <option value="fr">FR 2</option>
                        <option value="fr">FR 3</option>
                        <option value="fr">FR 4</option>
                    </select>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="hero-area" style="background-image: url({{ URL::asset('assets/img/hero-bg.jpg') }})">
            <div class="container">
                <div class="hero-content">
                    <p>La 1ère plateforme de mise en relation entre fournisseurs, producteurs, acheteurs et revendeurs de produits BIO et écologoqies.</p>
                </div>
            </div>
        </div>
        <!-- ./ hero-area -->

        <div class="research-area">
            <div class="container">
                <form action="#">
                    <div class="research-wrap">
                        <div class="forget-wrap research-sec">
                            <a href="#" class="text-uppercase">RECHERCHER UN PRODUIT OU UN FOURNISSEUR</a>
                            <a href="#">Recherche approfondie</a>
                        </div>
                        <div class="research-g-wrap">
                            <div class="research-item">
                                <div class="input-inside">
                                    <input type="text" placeholder="Que recherchez-vous ? ">
                                </div>
                            </div>
                            <div class="research-item">
                                <div class="input-inside">
                                    <input type="text" placeholder="Que recherchez-vous ? ">
                                </div>
                            </div>
                            <div class="research-item">
                                <div class="input-inside">
                                    <select name="" id="">
                                        <option value="">Toutes les catégories</option>
                                        <option value="">Toutes les catégories</option>
                                        <option value="">Toutes les catégories</option>
                                        <option value="">Toutes les catégories</option>
                                    </select>
                                </div>
                            </div>
                            <div class="research-item">
                                <div class="submit-btn">
                                    <button class="round-btn" type="submit">Rechercher</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ./ research-area -->

        <div class="linked-area">
            <div class="container">
                <div class="linkde-wrapper" style="background-image: url({{ URL::asset('assets/img/r2.png') }});">
                    <div class="section-title">
                        <h2>Connectez-vous au monde du bio</h2>
                    </div>
                    <div class="twin-g-wrap">
                        <img src="{{ URL::asset('assets/img/r1.png')  }}" alt="" class="round-picc">
                        <div class="cmmon-wrap">
                            <p>ACHETEURS</p>
                            <a href="#">Découvrir</a>
                        </div>
                        <div class="cmmon-wrap">
                            <p>FOURNISSEURS</p>
                            <a href="#">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="four-element-wrap">
                    <div class="element-item">
                        <span><img src="{{ URL::asset('assets/img/r3.png')  }}" alt=""></span>
                        <p>Proposez ou recherchez des produits <br> bio parmi 12,000 références.</p>
                    </div>
                    <div class="element-item">
                        <span><img src="{{ URL::asset('assets/img/r4.png')  }}" alt=""></span>
                        <p>Dialoguez avec vos <br> futurs achetereurs ou fournisseurs</p>
                    </div>
                    <div class="element-item">
                        <span><img src="{{ URL::asset('assets/img/r5.png') }}" alt=""></span>
                        <p>Commande d’échantillons, demandes <br> de grilles tarifaires </p>
                    </div>
                    <div class="element-item">
                        <span><img src="{{ URL::asset('assets/img/r6.png') }}" alt=""></span>
                        <p>Concluez des partenariats gagnants <br> avec vos partenaires</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ linked-area -->

        <div class="brand-area gray-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Ils travaillent avec nous</h2>
                </div>
                <div class="brand-flex-wrap">
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/b-1.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/b-2.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/b-3.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/b-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ brand-area -->


        <div class="client-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title client-title">
                            <h2>Ce qu’ils en disent</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-client" data-relative="yes">
                            <div class="client-img">
                                <img src="{{ URL::asset('assets/img/c-1.png') }}" alt="">
                            </div>
                            <h5>Sheikh Ouzbeck</h5>
                            <h4>INTERNATIONAL BIO HEALTHY & <br> PETROL INDUSTRIES LLC</h4>
                            <p> <img src="{{ URL::asset('assets/img/inverted.svg')}}" alt=""> I hate them, they are always trying to sell me healthy products while i’m drinking petrol. <img src="{{ URL::asset('assets/img/inverted.svg')}}" alt=""></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-client" data-relative="yes">
                            <div class="client-img">
                                <img src="{{ URL::asset('assets/img/c-1.png') }}" alt="">
                            </div>
                            <h5>Sheikh Ouzbeck</h5>
                            <h4>INTERNATIONAL BIO HEALTHY & <br> PETROL INDUSTRIES LLC</h4>
                            <p> <img src="{{ URL::asset('assets/img/inverted.svg')}}" alt=""> I hate them, they are always trying to sell me healthy products while i’m drinking petrol. <img src="{{ URL::asset('assets/img/inverted.svg')}}" alt=""></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-client" data-relative="yes">
                            <div class="client-img">
                                <img src="{{ URL::asset('assets/img/c-1.png') }}" alt="">
                            </div>
                            <h5>Sheikh Ouzbeck</h5>
                            <h4>INTERNATIONAL BIO HEALTHY & <br> PETROL INDUSTRIES LLC</h4>
                            <p> <img src="{{ URL::asset('assets/img/inverted.svg')}}" alt=""> I hate them, they are always trying to sell me healthy products while i’m drinking petrol. <img src="{{ URL::asset('assets/img/inverted.svg')}}" alt=""></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ client-area -->

        <div class="gallery-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Les univers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-1.jpg')}}" alt="">
                            <p>Boissons</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-2.jpg')}}" alt="">
                            <p>Epicerie</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-3.jpg')}}" alt="">
                            <p>Boulangerie</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-1.jpg')}}" alt="">
                            <p>Boissons</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-2.jpg')}}" alt="">
                            <p>Epicerie</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-3.jpg')}}" alt="">
                            <p>Boulangerie</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-1.jpg')}}" alt="">
                            <p>Boissons</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-2.jpg')}}" alt="">
                            <p>Epicerie</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <div class="gallery-content">
                            <img src="{{ URL::asset('assets/img/g-3.jpg')}}" alt="">
                            <p>Boulangerie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ gallery-area -->

        <div class="product-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Produits a la une</h2>
                        </div>
                    </div>
                </div>
                <div class="row product-active arrow-design">
                    <div class="col-lg-6">
                        <div class="product-content-wrap">
                            <div class="product-img">
                                <img src="{{ URL::asset('assets/img/products-1.jpg')}}" alt="">
                                <div class="img-trans-content">
                                    <p><img src="{{ URL::asset('assets/img/watch.svg')}}" alt=""> Certifications</p>
                                    <p>Label rouge « oeuf fermier » <br> Agriculture Biologique certifiée</p>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="#" class="tag">Légumes bio</a>
                                <div class="place"><span><img src="{{ URL::asset('assets/img/place-indicator.svg')}}" alt=""> Strasbourg, Spain</span></div>
                                <div class="about-prouct">
                                    <h4>Producteur de bétraves </h4>
                                    <p>Lorem ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum </p>
                                </div>
                                <div class="price">
                                    <p>MOQ 100 KG</p>
                                    <p>Prix unitaire/lot 1-2K€</p>
                                </div>
                                <a href="#" class="round-btn">PLUS D’INFOS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-content-wrap">
                            <div class="product-img">
                                <img src="{{ URL::asset('assets/img/products-1.jpg')}}" alt="">
                                <div class="img-trans-content">
                                    <p><img src="{{ URL::asset('assets/img/watch.svg')}}" alt=""> Certifications</p>
                                    <p>Label rouge « oeuf fermier » <br> Agriculture Biologique certifiée</p>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="#" class="tag blue-bg">Légumes bio</a>
                                <div class="place"><span><img src="{{ URL::asset('assets/img/place-indicator.svg')}}" alt=""> Strasbourg, Spain</span></div>
                                <div class="about-prouct">
                                    <h4>Producteur de bétraves </h4>
                                    <p>Lorem ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum </p>
                                </div>
                                <div class="price">
                                    <p>MOQ 100 KG</p>
                                    <p>Prix unitaire/lot 1-2K€</p>
                                </div>
                                <a href="#" class="round-btn">PLUS D’INFOS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-content-wrap">
                            <div class="product-img">
                                <img src="{{ URL::asset('assets/img/products-1.jpg')}}" alt="">
                                <div class="img-trans-content">
                                    <p><img src="{{ URL::asset('assets/img/watch.svg')}}" alt=""> Certifications</p>
                                    <p>Label rouge « oeuf fermier » <br> Agriculture Biologique certifiée</p>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="#" class="tag">Légumes bio</a>
                                <div class="place"><span><img src="{{ URL::asset('assets/img/place-indicator.svg')}}" alt=""> Strasbourg, Spain</span></div>
                                <div class="about-prouct">
                                    <h4>Producteur de bétraves </h4>
                                    <p>Lorem ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum lorem ipsum ipsum </p>
                                </div>
                                <div class="price">
                                    <p>MOQ 100 KG</p>
                                    <p>Prix unitaire/lot 1-2K€</p>
                                </div>
                                <a href="#" class="round-btn">PLUS D’INFOS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ product-area -->


        <div class="brand-area">
            <div class="container">
                <div class="section-title">
                    <h2>Nos partenaires</h2>
                </div>
                <div class="brand-flex-wrap">
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/brand-1.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/brand-2.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/brand-3.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/brand-4.png') }}" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="{{ URL::asset('assets/img/brand-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ brand-area -->
    </main>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="footer-widget">
                        <a href="#" class="ft-logo"><img src="{{ URL::asset('assets/img/ft-logo.png') }}" alt=""></a>
                        <p>IBP PARTNERS <br> INTERNATIONAL, <br> Address, Spain</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="footer-widget">
                        <ul class="ft-menu">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="footer-widget">
                        <ul class="ft-menu">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 mb-30">
                    <div class="footer-widget">
                        <ul class="ft-menu">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== jquery js ======-->
    <script src="{{ URL::asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <!--====== Plugins js ======-->
    <script src="{{ URL::asset('assets/js/slick.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{ URL::asset('assets/js/main.js')}}"></script>

</body>

</html>
