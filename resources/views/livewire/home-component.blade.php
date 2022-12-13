<!-- link -->
<link href="{{asset('css/highlight.css')}}" rel="stylesheet">
<link href="{{asset('css/newproduct.css')}}" rel="stylesheet">
<link href="{{asset('css/activity.css')}}" rel="stylesheet">
<link href="{{asset('css/brands.css')}}" rel="stylesheet">
<link href="{{asset('css/productpreview.css')}}" rel="stylesheet">
<!-- link -->

<div class="screen" style="min-height: calc(100vh - 227.5px);">
<!-- highlight -->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper" id="swiper-wrapper">
            @foreach ($sliders as $slide)
            <div class="swiper-slide"><img src="{{asset('images/sliders')}}/{{$slide->image}}"></div>
            @endforeach
        </div>
        <div class="swiper-button-next" id="nextver1"></div>
        <div class="swiper-button-prev" id="prevver1"></div>
        <div class="swiper-pagination" id="pagver1"></div>
    </div>
 
<!-- newproduct -->
    <div class="body">
        <div class="container">
                <div>
                    <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">ผลิตภัณฑ์ใหม่</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($Lproduct as $lproduct)
                        <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="800">
                            <div class="boximgnp">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$lproduct->slug])}}" class="imgnp"><img src="{{asset('/images/products')}}/{{$lproduct->image}}" alt=""></a>
                            </div>
                            <a href="{{route('product.detailsmodels',['modelslug'=>$lproduct->slug])}}" class="nameimgnp"><p>{{$lproduct->name}}</p></a>
                        </div>
                        @endforeach
                    </div>
                </div> 
{{-- catagory--}}
    <div class="containertest">
        <nav>
            <ul id="preview-menu">
            <li><a href="#Network"><i class="bi bi-wifi" style="font-size: 36px;"></i><br>Network</a></li>
            <li><a href="#Telecomm"><i class="bi bi-broadcast-pin" style="font-size: 36px;"></i><br>Telecomm</a></li>
            <li><a href="#Audio"><i class="bi bi-volume-up" style="font-size: 36px;"></i><br>Audio</a></li>
            <li><a href="#Software"><img src="{{asset('/images/mainpage')}}/Untitled.jpeg" style="width: 55px; padding: 5px;"><br>Software</a></li>
            {{-- <li><a href="#UPS"><img src="{{asset('/images/mainpage')}}/ups.jpeg" style="width: 55px; padding: 5px;"><br>UPS</a></li> --}}
            <li><a href="#Security"><i class="bi bi-shield-check" style="font-size: 36px;"></i><br>Security</a></li>
            </ul>
        </nav>
    </div>
    @php
    $i = 0; 
    @endphp
    @foreach($previews->unique('category_id') as $preview)
    @php
    $i++; 
    @endphp
    <div id="{{$preview->categories->name}}" class="fakecategory">test</div>
    <div class="maincatagory">
        <div class="subcatagory" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">{{$preview->categories->name}}</div>
        <div class="slide-container swiper">
            <div class="slide-content{{$i}}" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ($previews->where('category_id',$preview->category_id) as $preview)
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$preview->product->slug])}}" class="image">
                                    <div class="boximgpp">
                                        <div class="imgpp"><img src="{{asset('/images/products')}}/{{$preview->product->image}}"></div>
                                    </div>
                                </a>
                                <span class="product-slug">{{$preview->product->slug}}</span>
                                <a href="{{route('product.detailsmodels',['modelslug'=>$preview->product->slug])}}" class="detail">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <p class="title"><a href="{{route('product.detailsmodels',['modelslug'=>$preview->product->slug])}}">{{$preview->product->name}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn" id="next{{$i}}"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev{{$i}}"></div>
            <div class="swiper-pagination" id="pagination{{$i}}"></div>
        </div>
    </div>
    @endforeach
    
<!-- activity -->
    <div>
        <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">ข่าวสารเเละกิจกรรม</p>
    </div>
    <div class="slide-container swiper">
        <div class="slide-content6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <div class="card-wrapper swiper-wrapper">
                @foreach($posts as $post)
                <div class="card swiper-slide">
                    <div class="image-content">
                        <img class="card-img" src="{{asset('/images/posts')}}/{{$post -> titleimg}}"/>
                    </div>
                    <div class="card-content">
                        <a style="text-decoration: none" href="{{route('post.details',['slug'=>$post->slug])}}"><h2 class="name">{{$post->title}}</h2></a>
                        <a id="button" style="text-decoration: none;" href="{{route('post.details',['slug'=>$post->slug])}}">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn" id="next6"></div>
        <div class="swiper-button-prev swiper-navBtn" id="prev6"></div>
        <div class="swiper-pagination" id="pagination6"></div>
    </div>
    
            <div class="container-fluid">
                <div class="row">
                    <div class="AC-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <a href="/post_category/บทความ"><img src="https://digitalmarketingwow.com/wp-content/uploads/2016/08/Writer001.jpg" alt="">
                        <p class="text-AC">บทความ</p></a>
                    </div>
                    <div class="AC-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <a href="/newproducts"><img src="https://www.techtalkthai.com/wp-content/uploads/2018/04/techtalkthai_2018_data_center_01.jpg" alt="">
                        <p class="text-AC">ผลิตภัณฑ์</p></a>
                    </div>
                    <div class="AC-col"data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <a href="/post_category/องค์กร"><img src="https://cdn-images.prod.thinkofliving.com/wp-content/uploads/1/2019/06/11175158/Empire-Tower-1.jpg" alt="">
                        <p class="text-AC">องค์กร</p></a>
                    </div>
                </div>
            </div>

<!-- brands -->
            <div class="container-fluid">
                <div class="B">
                    <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">แบรนด์เข้าร่วม</p>
                    <div class="brands">
                        <div class="row" id="row-brands">
                            @foreach ($brand as $brands)
                            <div class="brands-col" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="800">
                                <a href="{{$brands->link}}"><img src="{{asset('/images/brands')}}/{{$brands->image}}" alt="logo"></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div> 
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      autoplay: {
        delay: 5000,
      },
      
    });
</script>

<script>
    var swiper1 = new Swiper(".slide-content1", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination1",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: "#next1",
        prevEl: "#prev1",
        },
        autoplay: {
        delay: 5000,
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    var swiper2 = new Swiper(".slide-content2", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination2",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: "#next2",
        prevEl: "#prev2",
        },
        autoplay: {
        delay: 5000,
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    var swiper3 = new Swiper(".slide-content3", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination3",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: "#next3",
        prevEl: "#prev3",
        },
        autoplay: {
        delay: 5000,
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    var swiper4 = new Swiper(".slide-content4", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination4",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: "#next4",
        prevEl: "#prev4",
        },
        autoplay: {
        delay: 5000,
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    var swiper5 = new Swiper(".slide-content5", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination5",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: "#next5",
        prevEl: "#prev5",
        },
        autoplay: {
        delay: 5000,
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    var swiper6 = new Swiper(".slide-content6", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination6",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: "#next6",
        prevEl: "#prev6",
        },
        autoplay: {
        delay: 5000,
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>
