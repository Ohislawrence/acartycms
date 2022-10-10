<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('tittletop') - {{ config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('app/assets/img/favicon.ico') }}"/>
		<!--begin::Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('app/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('app/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('app/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />

        @yield('header')
        <!-- Styles -->
    </head>

    <body class="sidebar-noneoverflow">

        @include('app.partials.nav')
        <!--begin::Content-->
		<div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="cs-overlay"></div>
            <div class="search-overlay"></div>
            @include('app.partials.sidebar')

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                @yield('body')
            </div>



            @include('app.partials.footer')
            </div>
        </div>
    </div>
            @livewireScripts
            <!-- JavaScript -->
            @yield('footer')
                <!-- Jquery Js -->
                <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
                <script src="{{ asset('app/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
                <script src="{{ asset('app/bootstrap/js/popper.min.js') }}"></script>
                <script src="{{ asset('app/bootstrap/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('app/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
                <script src="{{ asset('app/assets/js/app.js') }}"></script>

                <script>
                    $(document).ready(function() {
                        App.init();
                    });
                </script>
                <script src="{{ asset('app/plugins/highlight/highlight.pack.js') }}"></script>
                <script src="{{ asset('app/assets/js/custom.js') }}"></script>
                <!-- END GLOBAL MANDATORY SCRIPTS -->

                <script src="{{ asset('app/assets/js/scrollspyNav.js') }}"></script>
    </body>
</html>
