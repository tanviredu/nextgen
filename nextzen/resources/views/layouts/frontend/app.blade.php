<!doctype html>
<html lang="en">


<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.png') }}">

    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}" media="all" />

    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/foundation.min.css') }}" media="all" />

    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" media="all" />

    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}" media="all" />

    <!-- Lightbox IMage Gallery Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/lightbox.min.css') }}" media="all" />

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/style.css') }}" media="all" />

    <!-- Google Fonts For Stylesheet -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700"
        rel="stylesheet" type="text/css" />

    <!-- REVOLUTION STYLE SHEETS Delete If not using Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/revolution/css/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/revolution/css/layers.css') }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/revolution/css/navigation.css') }}">

    @stack('css')

</head>

<body>
    <!-- Page Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader Ends /-->

    <!-- Main Container -->
    <div class="main-container">

        @include('layouts.frontend.partial.navbar')

       @yield('content')

        <!-- Footer -->
       @include('layouts.frontend.partial.footer')
        <!-- Footer Ends here /-->

    </div>
    <!-- Main Container /-->

    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>

    <!-- Including Jquery so All js Can run -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.js') }}"></script>

    <!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/foundation.min.js') }}"></script>

    <!-- Including Owl Carousel File -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>

    <!-- Webful JS -->
    <script src="{{ asset('assets/frontend/js/webful.js') }}"></script>

    <!-- Including LightBox Plugin Delete if not using -->
    <script src="{{ asset('assets/frontend/js/lightbox.min.js') }}"></script>

    <!-- REVOLUTION JS FILES Delete if Not Using Revolution Slider -->
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
         The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/lib/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    @stack('js')
</body>


</html>
