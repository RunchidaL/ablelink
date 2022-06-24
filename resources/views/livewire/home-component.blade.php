<!-- link -->
    <link href="{{asset('css/highlight.css')}}" rel="stylesheet">
    <link href="{{asset('css/newproduct.css')}}" rel="stylesheet">
    <link href="{{asset('css/activity.css')}}" rel="stylesheet">
    <link href="{{asset('css/brands.css')}}" rel="stylesheet">
<!-- link -->

<div class="screen">

<!-- highlight -->
<div class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/images/1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/2.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/images/3.jpg" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

@push('scripts')
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
@endpush

<!-- newproduct -->
<div class="body">
    <div class="Container">
        <div>
            <p class="text">ผลิตภัณฑ์ใหม่</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="NP-col">
                    <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                    <p>Name</p>
                </div>
                <div class="NP-col">
                    <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                    <p>Name</p>
                </div>
                <div class="NP-col">
                    <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                    <p>Name</p>
                </div>
                <div class="NP-col">
                    <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                    <p>Name</p>
                </div>
                <div class="NP-col">
                    <a href="#"><img src="https://www.jib.co.th/img_master/product/original/2021091416550448648_1.jpg" alt=""></a>
                    <p>Name</p>
                </div>
            </div>
        </div>     

<!-- activity -->
        <div>
            <p class="text">ข่าวสารเเละกิจกรรม</p>
        </div>
        <div class="activity">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#"><img class="img2" src="https://wallpaperaccess.com/full/6325241.jpg" class="d-block w-70" alt="..."></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="img2" src="https://wallpaperaccess.com/full/6325215.jpg" class="d-block w-70" alt="..."></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="img2" src="https://wallpaperaccess.com/full/6325222.jpg" class="d-block w-70" alt="..."></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="AC-col">
                    <a href="/post_category/บทความ"><img src="https://img-ha.mthcdn.com/KBZ8v5cvb_d95Gi8w57wFe2tGBo=/tech.mthai.com/app/uploads/2016/11/1-4.jpg" alt=""></a>
                    <p class="text-AC">บทความ</p>
                </div>
                <div class="AC-col">
                    <a href="#"><img src="https://img-ha.mthcdn.com/KBZ8v5cvb_d95Gi8w57wFe2tGBo=/tech.mthai.com/app/uploads/2016/11/1-4.jpg" alt=""></a>
                    <p class="text-AC">ผลิตภัณฑ์</p>
                </div>
                <div class="AC-col">
                    <a href="/post_category/องค์กร"><img src="https://img-ha.mthcdn.com/KBZ8v5cvb_d95Gi8w57wFe2tGBo=/tech.mthai.com/app/uploads/2016/11/1-4.jpg" alt=""></a>
                    <p class="text-AC">องค์กร</p>
                </div>
            </div>
        </div>

<!-- brands -->
        <div class="container-fluid">
            <div class="B">
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
        </div>
    </div>     
</div>