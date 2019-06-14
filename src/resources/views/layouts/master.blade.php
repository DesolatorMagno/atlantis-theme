<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts and icons -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
       <script src="{{ asset('vendor/atlantis-theme/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
            WebFont.load({
                google: {"families":["Lato:300,400,700,900"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ["{{ asset('vendor/atlantis-theme/css/fonts.min.css') }}"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/atlantis-theme/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/atlantis-theme/css/atlantis.min.css') }}">
        <style>
        .logo-header .logo {
            color: #eee;
        }
        </style>
        @stack('style')

    </head>
    <body data-background-color="{{ config('theme.themes.' . config('theme.active') . '.body' )}}">
        <div class="wrapper">
            <div class="main-header">
                @include('atlantis-theme.layouts.logo-header')
                @include('atlantis-theme.layouts.navbar')
            </div>
            @include('atlantis-theme.layouts.sidebar')

            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Scripts -->

    <!--   Core JS Files   -->
    <script src="{{ asset('vendor/atlantis-theme/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/atlantis-theme/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/atlantis-theme/js/core/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <!-- jQuery UI -->
    <script src="{{ asset('vendor/atlantis-theme/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendor/atlantis-theme/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('vendor/atlantis-theme/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Atlantis JS -->
    <script src="{{ asset('vendor/atlantis-theme/js/atlantis.min.js') }}"></script>

    <!-- jQuery Scrollbar -->

    @include('atlantis-theme.partials.msg')
    <script>
        function activateMenu(root, classList){
            $("#" + root).collapse('show');
            ele = document.getElementById(root)
            ele.parentElement.classList.add('active')
            if (classList) {
               ele.getElementsByClassName(classList)[0].classList.add('active')
            }
        }
    </script>
    @stack('script')

</html>
