<!doctype html>
<!--[if IE 7 ]><html lang="en" class="ie78 ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie78 ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    @include('fragments.home_head')

</head>

<body>
    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    @yield('content')

    <!-- jquery include -->
    <script src="{{ asset('landing/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/appear.js') }}"></script>
    <script src="{{ asset('landing/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/scrollspy.js') }}"></script>
    <script src="{{ asset('landing/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('landing/assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>

</html>
