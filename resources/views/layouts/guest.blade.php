<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('tittletop') - {{ config('app.name') }}</title>
        <!--meta-->
        <meta name="description" content="We help you build ecommerce solutions that will put you on the map and make you good profit.">
        <meta name="author" content="Acarty Web Services">
        <link rel="icon" href="{{ asset('guest/assets/img/favicon.png') }}" type="image/png" sizes="16x16">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

            <!--build:css-->
        <link rel="stylesheet" href="{{ asset('guest/assets/css/main.css') }}">
        <!-- endbuild -->

        <!--custom css start-->
        <link rel="stylesheet" href="{{ asset('guest/assets/css/custom.css') }}">
        <!--custom css end-->
        @include('guests.partials.meta')
        @yield('header')
        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="main-wrapper">
            @if(!request()->is('login'))
            @if(!request()->is('register'))
                @include('guests.partials.menu')
                @endif
            @endif
            @yield('body')
            @include('guests.partials.footer')
        </div>


        @livewireScripts
        @yield('footer')
        <!--build:js-->
        <script src="{{ asset('guest/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('guest/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('guest/assets/js/vendors/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('guest/assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('guest/assets/js/vendors/parallax.min.js') }}"></script>
        <script src="{{ asset('guest/assets/js/vendors/aos.js') }}"></script>
        <script src="{{ asset('guest/assets/js/app.js') }}"></script>
    <!--endbuild-->
    </body>
</html>
