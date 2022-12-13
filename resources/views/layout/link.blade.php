<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ablelink</title>
    <link rel="icon" href="/images/logo2.png" type="image/png">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- slide img -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" integrity="sha512-okkLcBJE+U19Dpd0QdHA1wn4YY6rW3CwaxeLJT3Jmj9ZcNSbln/VYw8UdqXRIwLX7J8PmtHs0I/FPAhozFvXKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" integrity="sha512-eHWYortWe2NyxHIiY/wY82nK4RlPIDDDSD5ZvTHrTkiq9tAe++DBhq5rDcC02xqHxh0ctGGMbHKotqtYcYgXZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" integrity="sha512-wXEyXmtKft9mEiu8LTc3+3BQ95aYbvxgvzH4IzFHOwvGlA14B6zREXD4CRmUPx8r2Z1RVUOXS47bwjsotSlZkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js" integrity="sha512-98e5nQTE7pmtZ3xoD5GCVKafmziXDT5WINC91MugFzF57zzBnmvGQl1N70cvdyBSWxjCOC55gq9Zn76MUgtEMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- styles -->
    @yield('link_register_dealer')
    @yield('link_register_customer')
    @yield('link_login')
    @yield('link_email')
    @yield('link_reset')
    @yield('link_confirm')
    <link href="{{asset('/css/detailsModels.css')}}" rel="stylesheet">
    <link href="{{asset('/css/shop.css')}}" rel="stylesheet">
    <link href="{{asset('/css/cart.css')}}" rel="stylesheet">
    <link href="{{asset('/css/navfoot.css')}}" rel="stylesheet">
    <link href="{{asset('/css/chooseaddress.css')}}" rel="stylesheet">
    @livewireStyles


  </head>
  <body>
  @livewire('chat-component')
  @yield('navfoot')
  @yield('content2')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/esm/ionicons.min.js" integrity="sha512-Qmj2isWbbV6AA/CETFzUkRDK1laOfyLi2rhQF6VlGjA4J+Rf6UY8APqYBhWaE3yDK3RtxjByAs+VRxr5CREuLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-1.12.4.minb8ff.js')}}"></script>
  <script src="{{asset('js/jquery-ui-1.12.4.minb8ff.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-ndrrR94PW3ckaAvvWrAzRi5JWjF71/Pw7TlSo6judANOFCmz0d+0YE+qIGamRRSnVzSvIyGs4BTtyFMm3MT/cg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://cdn.omise.co/omise.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js" integrity="sha512-teGKRDIINyavMA8HWd2it9556yHW6RLuay1xk3s/d87nSU/GGFgt4DNwmAhrZUdpKtgTQCdISUvA0sZqrLpczg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js" integrity="sha512-RmCE+nEdKZ45TpbCJgvYvfEDz3XaiGmTTJl6GfyITW3fouks4lNTOkoMXWJ9WA6aQO+3FV8cjA6fvTosOgbCrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>AOS.init();</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  @livewireScripts
  @include('sweetalert::alert')
  @stack('scripts')

  <div class="cookie-container">
    <p id="contentcookie">
      เราใช้คุกกี้เพื่อเพิ่มประสบการณ์ในการเยี่ยมชมเว็บไซต์นี้ อนุญาตคุกกี้เพื่อรับประสบการณ์ที่ดีขึ้น
    </p>
    <button class="cookie-btn">
      ยอมรับ
    </button>
  </div>
  
  <style>
      .cookie-container{
        display: block;
        position: fixed;
        bottom: -100%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 80;
        background: white;
        margin: 1% auto;
        padding: 20px 20px 10px 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 10px;
        text-align: center;
      }
      .cookie-container.active{
        bottom: 0;
      }
      .cookie-btn{
        background: white;
        color: black;
        font-weight: bold;
        text-decoration: underline;
        padding: 5px 7px;
        border: none;
        border-radius: 5px;
        transition: 0.2s ease-in-out;
      }
      .cookie-btn:hover{
        background: #CECECE;
      }
      #contentcookie{
        font-size: 16px;
      }
      @media(max-width: 1350px){
        .cookie-container{
        width: 70%;
        }
      }
      @media(max-width: 650px){
        .cookie-container{
        width: 80%;
        }
      }
  </style>

  <script>
      const cookieContainer = document.querySelector(".cookie-container");
      const cookieButton = document.querySelector(".cookie-btn");

      cookieButton.addEventListener("click", () => {
        cookieContainer.classList.remove("active");
        localStorage.setItem("cookieBannerDisplayed", "true");
      });

      setTimeout(() => {
        if (!localStorage.getItem("cookieBannerDisplayed")) {
            cookieContainer.classList.add("active");
        }
      }, 2000);
  </script>

  </body>
</html>
