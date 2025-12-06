<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{!! asset('admin').'/' !!}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="{!! asset('/images/logo/favicon.png') !!}" type="image/x-icon">
    <link rel="shortcut icon" href="{!! asset('/images/logo/favicon.png') !!}" type="image/x-icon">
    <title> ONMB | @yield('title') </title>

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
    @yield('styles')
  </head>
  <body>

    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>

    @yield('content')



    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/icons/feather-icon/feather.min.js"></script>
    <script src="js/icons/feather-icon/feather-icon.js"></script>
    {{-- <script src="js/sidebar-menu.js"></script> --}}
    <script src="js/config.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/script.js"></script>



    @yield('scripts')

  </body>
</html>
