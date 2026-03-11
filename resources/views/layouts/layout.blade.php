<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ultimatewebsolutions.net/foodboard/pay-with-cash-on-delivery/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 09:24:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Food order wizard with online payment">
    <meta name="author" content="UWS">
    <title>FoodBoard | Food delivery dashboard</title>

    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon">

    <!-- Google Fonts - Jost -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Font Icons -->
    <link href="vendor/icomoon/css/iconfont.min.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/dmenu/css/menu.css" rel="stylesheet">
    <link href="vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
    <link href="vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="vendor/float-labels/css/float-labels.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- Preloader End -->

    <!-- Page -->
    <div id="page">

        <!-- Header -->
        @include('layouts.header')
        <!-- Header End -->

        <!-- Sub Header -->
        @yield('sub header')
        <!-- Sub Header End -->

        <!-- Main -->
        <main>
            <!-- Order -->
            @yield('content')
            <!-- Order End -->

        </main>
        <!-- Main End -->

        <!-- Footer -->
        @include('layouts.footer')
        <!-- Footer End -->

        <!-- Notification Messages -->
        <div class="addedToCartMsg">Added to cart</div>
        <div class="alreadyInCartMsg">Already in cart</div>

    </div>
    <!-- Page End -->

    @include('layouts.modal')

    <!-- Back to top button -->
    <div id="toTop"><i class="icon icon-chevron-up"></i></div>

    <!-- Vendor Javascript Files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/easing/js/easing.min.js"></script>
    <script src="vendor/parsley/js/parsley.min.js"></script>
    <script src="vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendor/price-format/js/jquery.priceformat.min.js"></script>
    <script src="vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
    <script src="vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>
    <script src="vendor/mmenu/js/mmenu.min.js"></script>
    <script src="vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="vendor/float-labels/js/float-labels.min.js"></script>
    <script src="vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js"></script>
    <script src="vendor/jquery-wizard/js/jquery.wizard.js"></script>
    <script src="vendor/isotope/js/isotope.pkgd.min.js"></script>
    <script src="vendor/scrollreveal/js/scrollreveal.min.js"></script>
    <script src="vendor/lazyload/js/lazyload.min.js"></script>
    <script src="vendor/sticky-kit/js/sticky-kit.min.js"></script>

    <!-- Order Javascript File -->
    <script src="assets/js/order.js"></script>

    <!-- Main Javascript File -->
    <script src="js/scripts.js"></script>
</body>


<!-- Mirrored from ultimatewebsolutions.net/foodboard/pay-with-cash-on-delivery/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Feb 2026 09:24:08 GMT -->

</html>
