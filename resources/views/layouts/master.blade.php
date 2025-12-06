<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ordre National des Médécins du Bénin - @yield('title')</title>
    <meta name="author" content="ONMB">
    <meta name="description" content="ONMB - Ordre National des Médécins du Bénin">
    <meta name="keywords" content="ONMB - Ordre National des Médécins du Bénin">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png"> --}}

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

<style>

    .th-product.list-view .star-rating {
        margin: 8px 0 0 0;
        width: 80px;
        font-size: 12px;
    }



    .th-btn.style2, .th-btn{

        --theme-color: transparent !important;
        --color1: transparent !important;
        --color2: transparent !important;
        --color3: transparent !important;
        --color4: transparent !important;
        box-shadow: none !important;
    }

    .th-btn:before{
        background: none !important;
    }

    .btn-p{
        background: #bc1f24 !important;
        color: white !important;
    }

    .btn-s{
            background: #184826 !important;
        color: white !important;
    }

    .btn-w{
            background: white !important;
        color: black !important;
    }

    .btn-shadow {
        box-shadow:0 .125rem .25rem rgba(0,0,0, .2) !important;
    }

    .btn-mon-espace {
        color: white !important;
        background: #bc1f24;
        padding: 5px 10px !important;
        border-radius: 8px;
        text-align:center;
        box-shadow:0 .125rem .25rem rgba(0,0,0, .2) !important;
    }

    .btn-mon-espace::before{
        content:'' !important;
    }

    .menu a.active {
        color: var(--theme-color) !important;
    }

    .bg-primary {
        background-color: var(--theme-color) !important;
        color: #ffffff !important;
    }
    .bg-secondary {
        background-color: var(--theme-color2) !important;
        color: #ffffff !important;
    }
    :root {
        --theme-color: rgb(188,31,36);
        --theme-color2: rgb(24, 72, 38);
    }
</style>

@yield('style')



</head>

<body>

    <!--==============================
     Preloader
  ==============================-->
    {{-- <div class="preloader ">
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div> --}}

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- datetimepicker -->
    <script src="assets/js/jquery.datetimepicker.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

    @yield('scripts')
</body>

</html>
