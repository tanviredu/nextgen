<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>@yield('title')</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/backend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('assets/backend/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('assets/backend/css/font.css')}}">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend/icon/LineIcons.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/backend/css/style.green.css')}}" id="theme-stylesheet">

    <link rel="stylesheet" href="{{asset('assets/backend/css/custom.css')}}">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/backend/img/favicon.ico') }}">
    <link rel="stylesheet" type='text/css' href="{{asset('assets/sweet-alert/sweetalert.min.css') }}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/backend/css/custom.css')}}">

    @stack('css')

    <script src="{{ asset('assets/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/ajaxSetup.js') }}"></script>
    <script src="{{asset('assets/backend/vendor/jquery/jquery.min.js')}}"></script>



</head>

<body>
    @include('layouts.backend.partial.header')

    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('layouts.backend.partial.sidebar')
        <!-- Sidebar Navigation end-->


        <div class="page-content">

            @yield('content')


            <!-- footer -->
            @include('layouts.backend.partial.footer')
            <!-- Footer end-->


        </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{asset('assets/backend/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('assets/backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('assets/backend/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>

    <script src="{{asset('assets/backend/js/front.js')}}"></script>

    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("searchMenu");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myMenuUl");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                    $('#ulinfo1').show();
                    $('#ulinfo2').show();
                } else {
                    li[i].style.display = "none";
                    $('#ulinfo1').hide();
                    $('#ulinfo2').hide();
                }
            }
        }
    </script>

    @stack('js')
</body>

</html>
