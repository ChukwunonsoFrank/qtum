<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    @include('fragments.user_head')

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/icons/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" />
    <script type="module" src="https://widgets.tradingview-widget.com/w/en/tv-ticker-tape.js"></script>

    <style>
        .bottom-link {
            opacity: 0 !important;
        }

        .tradingview-widget-copyright {
            display: none !important;
        }
    </style>


    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/40.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/40.png') }}" />

    <title>Qtumweb3</title>
</head>

<body class="bg-4">
    {{-- <div class="preload preload-container">
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div> --}}

    @yield('content')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-down.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script src="{{ asset('assets/js/multiple-modal.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/init.js') }}"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
