<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ablelink</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/font-awesome.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <!-- slide img -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    

    <!-- styles -->
    @yield('link_register_dealer')
    @yield('link_register_customer')
    @yield('link_login')
    @yield('link_email')
    @yield('link_reset')
    @yield('link_confirm')
    <link href="{{asset('/css/details.css')}}" rel="stylesheet">
    <link href="{{asset('/css/shop.css')}}" rel="stylesheet">
    <link href="{{asset('/css/cart.css')}}" rel="stylesheet">
    <link href="{{asset('/css/navfoot.css')}}" rel="stylesheet">
    <link href="{{asset('/css/chooseaddress.css')}}" rel="stylesheet">
    @livewireStyles
    

  </head>
  <body>
  
  @yield('navfoot')
  @yield('content2')
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-1.12.4.minb8ff.js')}}"></script>
  <script src="{{asset('js/jquery-ui-1.12.4.minb8ff.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/xelo84km5tnufl5jdpdtwbi20vgqg8jrp4p0mgqefsi3hg3h/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://cdn.omise.co/omise.js"></script>
  <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
  @livewireScripts
  
  @stack('scripts')
  </body>
</html>