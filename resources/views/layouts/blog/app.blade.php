<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="description" content="IDBlog - IDStack Sample Blog Project from https://idstack.net">
    <meta name="author" content="https://idstack.net">    
    <title>{{ config('app.name', 'IDBlog') }} - IDStack Sample Blog Project Admin</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/blog/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/blog/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assets/blog/css/fontastic.css') }}">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset('assets/blog/vendor/fancyapps/fancybox/jquery.fancybox.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/blog/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/blog/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/blog/favicon.png') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <!-- Main Navbar-->
      @include('layouts.blog.partials._navbar')
    </header>

    @yield('content')

    <!-- Page Footer-->
    <footer class="main-footer">
      @include('layouts.blog.partials._footer')
    </footer>
    <!-- Javascript files-->
    <script src="{{ asset('assets/blog/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/blog/vendor/popper/popper.min.js') }}"> </script>
    <script src="{{ asset('assets/blog/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/blog/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('assets/blog/vendor/fancyapps/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/blog/js/front.js') }}"></script>
  </body>
</html>
