<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- start website links --}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="{{url('/website')}}/plugins/themefisher-font/style.css">
    <link rel="stylesheet" href="{{url('/website')}}/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/website')}}/plugins/animate-css/animate.css">
    <link rel="stylesheet" href="{{url('/website')}}/plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="{{url('/website')}}/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{url('/website')}}/plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="{{url('/website')}}/css/style.css">
    {{-- end website links --}}
    <!-- Styles -->
    {{--<link href="{{ url('include/css/app.css') }}" rel="stylesheet">--}}
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">

    @yield('content')


    {{-- start website java links --}}
        <!-- Main jQuery -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.1 -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Slick Carousel -->
        <script type="text/javascript" src="{{url('website')}}/plugins/slick-carousel/slick/slick.min.js"></script>
        <!-- Portfolio Filtering -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/mixitup/dist/mixitup.min.js"></script>
        <!-- Smooth Scroll -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
        <!-- Magnific popup -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!-- Google Map API -->
        <script type="text/javascript"  src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Sticky Nav -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/Sticky/jquery.sticky.js"></script>
        <!-- Number Counter Script -->
        <script type="text/javascript" src="{{url('/website')}}/plugins/count-to/jquery.countTo.js"></script>
        <!-- wow.min Script -->
        <script type="text/javascript" src="{{url('website')}}/plugins/wow/dist/wow.min.js"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="{{url('/website')}}/js/script.js"></script>
        {{-- end website java links --}}

        {{--<script src="{{ url('include/js/app.js') }}"></script>--}}
</body>
</html>
