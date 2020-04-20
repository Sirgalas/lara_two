<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/css/loader.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css"  href="/css/app.css">
</head>
<body>
   <div class="wraper">
        @include('include.header')
            @yield('preview')
            @yield('breadcrumbs')
            @include('include.message')
            @yield('content')
        @include('include.footer')
   </div>
   <script src="/js/jquery-2.2.3.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
   <script src="/js/gmap3.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <script src="/js/bootsnav.js"></script>
   <script src="/js/jquery.parallax-1.1.3.js"></script>
   <script src="/js/jquery.appear.js"></script>
   <script src="/js/owl.carousel.min.js"></script>
   <script src="/js/jquery.cubeportfolio.min.js"></script>
   <script src="/js/jquery.fancybox.js"></script>
   <script src="/js/jquery.themepunch.tools.min.js"></script>
   <script src="/js/jquery.themepunch.revolution.min.js"></script>
   <script src="/js/revolution.extension.layeranimation.min.js"></script>
   <script src="/js/revolution.extension.navigation.min.js"></script>
   <script src="/js/revolution.extension.parallax.min.js"></script>
   <script src="/js/revolution.extension.slideanims.min.js"></script>
   <script src="/js/revolution.extension.video.min.js"></script>
   <script src="/js/kinetic.js"></script>
   <script src="/js/jquery.final-countdown.js"></script>
   <script src="/js/functions.js"></script>
   <script src="/js/app.js"></script>
</body>
</html>
