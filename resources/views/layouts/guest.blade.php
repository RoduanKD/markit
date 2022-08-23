<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Markit') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="/vendor_assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/vendor_assets/css/animate.css">
    <link rel="stylesheet" href="/vendor_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendor_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="/vendor_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/vendor_assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/vendor_assets/css/select2.min.css">
    <link rel="stylesheet" href="/vendor_assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="/vendor_assets/css/slick.css">
    <link rel="stylesheet" href="/vendor_assets/css/trumbowyg.min.css">
    <link rel="stylesheet" href="/vendor_assets/css/venobox.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('partials.navbar')

    @yield('content')

    @include('sections.footer')



    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U"></script>
    <!-- inject:js-->
    <script src="/vendor_assets/js/jquery/jquery-1.12.4.min.js"></script>
    <script src="/vendor_assets/js/jquery/uikit.min.js"></script>
    <script src="/vendor_assets/js/bootstrap/popper.js"></script>
    <script src="/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/vendor_assets/js/chart.bundle.min.js"></script>
    <script src="/vendor_assets/js/grid.min.js"></script>
    <script src="/vendor_assets/js/jquery-ui.min.js"></script>
    <script src="/vendor_assets/js/jquery.barrating.min.js"></script>
    <script src="/vendor_assets/js/jquery.countdown.min.js"></script>
    <script src="/vendor_assets/js/jquery.counterup.min.js"></script>
    <script src="/vendor_assets/js/jquery.easing1.3.js"></script>
    <script src="/vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/vendor_assets/js/owl.carousel.min.js"></script>
    <script src="/vendor_assets/js/select2.full.min.js"></script>
    <script src="/vendor_assets/js/slick.min.js"></script>
    <script src="/vendor_assets/js/tether.min.js"></script>
    <script src="/vendor_assets/js/trumbowyg.min.js"></script>
    <script src="/vendor_assets/js/venobox.min.js"></script>
    <script src="/vendor_assets/js/waypoints.min.js"></script>
    <script src="/theme_assets/js/dashboard.js"></script>
    <script src="/theme_assets/js/main.js"></script>
    <script src="/theme_assets/js/map.js"></script>
    <!-- endinject-->
</body>

</html>
