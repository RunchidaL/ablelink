@extends('layout.navfoot')




<!-- sdfgsdfgsdfg -->
@section('highlight') 
<!-- <div class="container"> -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="/images/1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/2.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/3.jpg" alt=""></div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <!-- <div class="swiper-scrollbar"></div> -->
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




@section('newproduct')

<div>
    <p class="text">ผลิตภัณฑ์ใหม่</p>
</div>
<div class="container-fluid">
        <div class="row">
            <div class="NP-col">
                <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                <p>Art</p>
            </div>
            <div class="NP-col">
                <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                <p>Art</p>
            </div>
            <div class="NP-col">
                <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                <p>Art</p>
            </div>
            <div class="NP-col">
                <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                <p>Art</p>
            </div>
            <div class="NP-col">
                <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                <p>Art</p>
            </div>
        </div>
</div>
    
@endsection


@section('activity')
<div>
    <p class="text">ข่าวสารเเละกิจกรรม</p>
</div>

<!-- <div class="container"> -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="/images/1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/2.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/3.jpg" alt=""></div>
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

@section('brands')
    <div class="container-fluid-brands">
        <p class="text">แบรนด์เข้าร่วม</p>
        <div class="row">
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
        </div>
        <div class="row">
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
            <div class="brands-col">
                <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a>
            </div>
        </div>
    </div>
@endsection

