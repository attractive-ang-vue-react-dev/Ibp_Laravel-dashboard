

<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

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
    <link rel="stylesheet" href="{{ URL::asset('assets/css/intlTelInput.css') }}">

        <style type="text/css" id="flag-css">
        .iti__flag {background-image: url({{  URL::asset('assets/img/flags.png') }});}

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .iti__flag {background-image: url({{  URL::asset('assets/img/flags@2x.png') }});}
        }

        </style>

<script>

var categories = [
            "Boissons | Beverages | Bebidas",
            "Epicerie | Grocery | Productos secos",
            "Jus & Laitages | Juices & Milk | Jugos y leche",
            "Fruits & Légumes | Fruits & Vegetables | Frutas y Verduras",
            "Boulangerie | Bakery | Panadería",
            "Viande | Meat | Carne",
            "Frais (dont cremerie) | Fresh | Fresco",
            "Surgelé | Frozen | Congelado",
            "Compléments Alimentaires | Food Supplements | Suplementos Alimenticios",
            "Hygiène & Beauté | Hygiene & Beauty | Higiene y Belleza",
            "Entretien (Dtergence) | Hygiene (Detergents) | Higiene (Detergentes)"
        ];


        var certificates = [
            "Label AB",
            "Nature et progrès",
            "Label Européen",
            "Cosmebio",
            "Demeter",
            "Ecocert",
            "BDIH"
        ];

</script>

</head>
<body>
