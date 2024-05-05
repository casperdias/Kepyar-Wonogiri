<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise AI Website Builder v0.01, https://ai.mobirise.com -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise AI v0.01, ai.mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('storage/assets/images/WONOGIRI.png') }}" type="image/x-icon">
    <meta name="description"
        content="The vibrant village with rich natural resources and sustainable energy potential.">

    <title>Desa Kepyar - Wonogiri</title>
    <link rel="stylesheet" href="{{ asset('storage/assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/parallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/animatecss/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/theme/css/style.css') }}">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap">
    </noscript>
    <link rel="preload" as="style" href="{{ asset('storage/assets/mobirise/css/additional.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/mobirise/css/additional.css') }}" type="text/css">



    <style>
        :root {
            --background: #FFF5E8;
            --dominant-color: #FF9914;
            --primary-color: #29BF12;
            --secondary-color: #F21B3F;
            --success-color: #20AC6B;
            --danger-color: #AE1E2C;
            --warning-color: #CC9900;
            --info-color: #0AA3C2;
            --background-text: #000000;
            --dominant-text: #000000;
            --primary-text: #FFFFFF;
            --secondary-text: #FFFFFF;
            --success-text: #FFFFFF;
            --danger-text: #FFFFFF;
            --warning-text: #000000;
            --info-text: #FFFFFF;
        }
    </style>
</head>

<body>
    @include('landingpage.layouts.nav')

    @yield('content')

    @include('landingpage.layouts.footer')
    <script src="{{ asset('storage/assets/parallax/jarallax.js') }}"></script>
    <script src="{{ asset('storage/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('storage/assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('storage/assets/embla/embla.min.js') }}"></script>
    <script src="{{ asset('storage/assets/embla/script.js') }}"></script>
    <script src="{{ asset('storage/assets/scrollgallery/scroll-gallery.js') }}"></script>
    <script src="{{ asset('storage/assets/mbr-switch-arrow/mbr-switch-arrow.js') }}"></script>
    <script src="{{ asset('storage/assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('storage/assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('storage/assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('storage/assets/formoid/formoid.min.js') }}"></script>

    <script>
        (function() {
            var animationInput = document.createElement('input');
            animationInput.setAttribute('name', 'animation');
            animationInput.setAttribute('type', 'hidden');
            document.body.append(animationInput);
        })();
    </script>
</body>

</html>
