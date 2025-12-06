<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{!! asset('/').'admin/' !!}">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="../favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
        <title> Betos | @yield('title') </title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="css/icofont.css">
        <link rel="stylesheet" type="text/css" href="css/themify.css">
        <link rel="stylesheet" type="text/css" href="css/flag-icon.css">
        <link rel="stylesheet" type="text/css" href="css/feather-icon.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link id="color" rel="stylesheet" href="css/color-1.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

        <link rel="stylesheet" type="text/css" href="css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="css/ext-component-toastr.css">
        {{-- <link rel="stylesheet" type="text/css" href="css/sweetalert2.css"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="css/sweetalert2.css"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href="css/select2.css">
        <!-- Plugins css Ends-->

        <style>
            .ck-editor__editable {
                min-height: 200px; /* Ajuste la hauteur minimale */
                max-height: 400px; /* Ajuste la hauteur maximale */
            }
        </style>



        @yield('styles')

    </head>
    <body>
        <!-- Loader starts-->
        <div class="loader-wrapper">
            <div class="theme-loader">
                <div class="loader-p"></div>
            </div>
        </div>
        <!-- Loader ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper" id="pageWrapper">
        @include('admin.layouts.header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">

            @include('admin.layouts.sidebar')

            <div class="page-body">

                @yield('beadcrumbs')

                @include('admin.layouts.alerts')

                <div class="container-fluid">

                    @yield('content')

                </div>
            <!-- Container-fluid Ends-->
            </div>

            @include('admin.layouts.footer')

        </div>
        </div>
        {{-- <!-- latest jquery-->
        <script src="js/jquery-3.5.1.min.js"></script>
        <!-- feather icon js-->
        <script src="js/icons/feather-icon/feather.min.js"></script>
        <script src="js/icons/feather-icon/feather-icon.js"></script>
        <!-- Sidebar jquery-->
        <script src="js/sidebar-menu.js"></script>
        <script src="js/config.js"></script>
        <!-- Bootstrap js-->
        <script src="js/bootstrap/popper.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- Plugins JS start-->
        <script src="js/tooltip-init.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="js/script.js"></script>
        <script src="js/customer/scripts.js"></script>
        <script src="js/theme-customizer/customizer.js"></script>
        <!-- login js-->
        <!-- Plugin used--> --}}

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/icons/feather-icon/feather.min.js"></script>
        <script src="js/icons/feather-icon/feather-icon.js"></script>
        <script src="js/sidebar-menu.js"></script>
        <script src="js/config.js"></script>
        <script src="js/bootstrap/popper.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/tooltip-init.js"></script>
        <script src="js/script.js"></script>
        <script src="js/toastr.min.js"></script>
        <script src="js/ext-component-toastr.js"></script>

        {{-- <script src="js/theme-customizer/customizer.js"></script> --}}

        <!-- Plugins JS start-->
        <script src="js/select2/select2.full.min.js"></script>
        <script src="js/select2/select2-custom.js"></script>

        {{-- <script src="js/sweet-alert/sweetalert.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- <script src="js/sweet-alert/app.js"></script> --}}
        {{-- <script src="js/tooltip-init.js"></script> --}}

        <script src="js/customer/scripts.js"></script>

        <!-- Plugins JS Ends-->

        @yield('scripts')
    </body>
</html>
