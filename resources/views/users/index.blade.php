<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/index.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/media.css" rel="stylesheet" type="text/css" />
    @stack('css')

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('users.components.header')
        <div id="banner">
            <div class="banner">
                <div class="banner-item">
                    <img class="d-block img-fluid" src="assets/images/banner.jpg" alt="Third slide">
                </div>
                <div class="banner-item">
                    <img class="d-block img-fluid" src="assets/images/banner.jpg" alt="Third slide">
                </div>
                <div class="banner-item">
                    <img class="d-block img-fluid" src="assets/images/banner.jpg" alt="Third slide">
                </div>
            </div>
            <div class="arrows">
                <button class="control-btn prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="control-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        @yield('content')
        {{-- @include('users.components.footer') --}}
    </div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/pages/jquery.eco_dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    {{-- Slider Banner --}}
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000
            })
            $('.navigation .menu-mobile .menu-mobile-content .menu-mobile-list li a span.drop-down').click(function() {
                $(this).toggleClass('active');
                $(this).parent().next('.sub-menu').slideToggle();
            })
            $('.menu-close').click(function() {
                $('.menu-mobile-content').toggleClass('active');
            })
            $('.navigation .menu-mobile .menu-mobile-button').click(function() {
                $('.menu-mobile-content').toggleClass('active');
            })
            // SCROLL HEADER THAN BANNER
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 100) {
                    $(".topbar").addClass("scroll-header");
                } else {
                    $(".topbar").removeClass("scroll-header");
                }
            });
        })
    </script>
    @stack('scripts')
</body>

</html>
