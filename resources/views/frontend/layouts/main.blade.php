<!doctype html>
<html class="no-js" lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   {!! SEOMeta::generate() !!}
   {!! OpenGraph::generate() !!}
   <meta property="og:url" content="https://enviawhats.com/">
   <meta property="og:site_name" content="Envia Whats">
   <meta property="og:type" content="product">
   {!! Twitter::generate() !!}
   {!! JsonLd::generate() !!}
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="canonical" href="https://enviawhats.com/">
   <meta name="robots" content="all">
   <meta name="product:price:currency" content="BRL">
   <meta name="product:price:amount" content="5">
   <meta name="product:brand" content="Whatsapp">
   <link rel="shortcut icon" type="image/x-icon" href="https://enviawhats.com/uploads/favicon.png">
   <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="mobile-web-app-capable" content="yes">
   <meta name="HandheldFriendly" content="True">
   <meta name="MobileOptimized" content="320">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset(get_option('primary_data',true)->favicon ?? '') }}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom-animation.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H6VRTH59LT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H6VRTH59LT');
</script>
</head>

<body>
   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->
    @yield('content')
    <div class="body-overlay"></div>

    @include('frontend.layouts.footer')

   <!-- JS here -->
   <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/waypoints.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/swiper-bundle.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/counterup.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/nice-select.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/meanmenu.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/isotope-pkgd.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/imagesloaded-pkgd.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/ajax-form.js') }}"></script>
   <script src="{{ asset('assets/frontend/js/main.js') }}"></script>



</body>
</html>