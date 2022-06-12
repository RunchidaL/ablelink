@extends('layout.navfoot')

@section('highlight')
    <!-- <div class="container"> -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="/images/ablelink.jpg" alt=""></div>
                <div class="swiper-slide"><img src="/images/success.png" alt=""></div>
                <div class="swiper-slide"><img src="/images/focomm.png" alt=""></div>
                ...
            </div>
            <!-- If we need pagination --> 
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    <!-- </div> -->


    
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
    
@endsection
