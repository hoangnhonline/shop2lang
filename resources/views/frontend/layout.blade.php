<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@yield('title')</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="robots" content="index,follow"/>
  <meta http-equiv="content-language" content="en"/>
  <meta name="description" content="@yield('site_description')"/>
  <meta name="keywords" content="@yield('site_keywords')"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="@yield('favicon')" type="image/x-icon"/>
  <link rel="canonical" href="{{ url()->current() }}"/>        
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('site_description')" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-linearicons.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap-theme.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/jquery.fancybox.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/jquery-ui.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/owl.carousel.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/owl.transitions.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/owl.theme.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/jquery.mCustomScrollbar.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/slideshow/settings.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/theme.css') }}" media="all"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}" media="all"/>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<div class="wrap">
  @include('frontend.partials.header')
  <!-- End Header -->
  <div id="content">
    @yield('content')
  </div>
  <!-- End Content -->
  @include('frontend.partials.footer')
</div>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.12.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/TimeCircles.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.countdown.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/slideshow/jquery.themepunch.revolution.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/slideshow/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/theme.js') }}"></script>
<input type="hidden" id="route-add-cart" value="{{ route('them-sanpham') }}">
<input type="hidden" id="route-cart" value="{{ route('gio-hang') }}">
@yield('javascript')
</body>
</html>