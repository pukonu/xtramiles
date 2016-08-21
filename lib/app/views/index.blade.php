
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield("title")

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.carousel.css') }}">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="{{ asset('assets/vendors/magnific-popup/magnific-popup.css') }}">

    <!--Theme Styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    <!--[if lt IE 9]>

        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include("layout.menu")

    @yield("content")

    @include("layout.newsletter")

    @include("layout.footer")

    @include("snippet.donation-form")

    <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--Magnific Popup-->
    <script src="{{ asset('assets/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!--Owl Carousel-->
    <script src="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.js') }}"></script>
    <!--CounterUp-->
    <script src="{{ asset('assets/vendors/couterup/jquery.counterup.min.js') }}"></script>
    <!--WayPoints-->
    <script src="{{ asset('assets/vendors/waypoint/waypoints.min.js') }}"></script>
    <!--Theme Script-->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
