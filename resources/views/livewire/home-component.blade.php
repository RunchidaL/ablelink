<!-- link -->
<link href="{{asset('css/highlight.css')}}" rel="stylesheet">
<link href="{{asset('css/newproduct.css')}}" rel="stylesheet">
<link href="{{asset('css/activity.css')}}" rel="stylesheet">
<link href="{{asset('css/brands.css')}}" rel="stylesheet">
<link href="{{asset('css/productpreview.css')}}" rel="stylesheet">
<!-- link -->

<div class="screen" style="min-height: calc(100vh - 227.5px);">
<!-- highlight -->
    <div class="slider">
        @foreach ($sliders as $slide)
        <div class="myslider">
            <div class="txt">
                <h1>{{$slide->title}}</h1>
            </div>
            <div class="txt2">
                <p>{{$slide->subtitle}}</p>
            </div>
            <a href="{{$slide->link}}" style="text-decoration: none"><img class="imgg" src="{{asset('images/sliders')}}/{{$slide->image}}" style="width: 100%; height: 100%; object-fit: cover;" alt=""></a>
        </div>
        @endforeach
        <a class="prev" onclick="plusSlides(-1)"><i class="bi bi-chevron-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="bi bi-chevron-right"></i></a>
        <div class="dotsbox" style="text-align: center;" >
            @php
                $i = 0; 
            @endphp
            @foreach($sliders as $slide)
                @php
                    $i++; 
                @endphp
                <span class="dot" onclick="CurrentSlide({{$i}})"></span>
            @endforeach
        </div>
    </div>

<!-- newproduct -->
    <div class="body">
        <div class="container">
                <div>
                    <p class="text" data-aos="fade-right" data-aos-duration="800">ผลิตภัณฑ์ใหม่</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($Lproduct as $lproduct)
                        <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="800">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$lproduct->slug])}}" style="text-decoration: none; color: black; "><img src="{{asset('/images/products')}}/{{$lproduct->image}}" alt="">
                            <p>{{$lproduct->name}}</p></a>
                        </div>
                        @endforeach
                    </div>
                </div> 
{{-- catagory--}}
    <div class="containertest" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <nav>
            <ul id="ul">
                <li><a href="#Security">Security</a></li>
                <li><a href="#Network">Network</a></li>
                <li><a href="#Telecomm">Telecomm</a></li>
                <li><a href="#Audio">Audio</a></li>
                <li><a href="#Software">Software</a></li>
            </ul>
        </nav>
    </div>


    <div id="Security" class="fakecategory">test</div>
    <div class="maincatagory">
        <div class="subcatagory" data-aos="fade-right" data-aos-duration="800">Security</div>
        <div class="slide-container swiper">
            <div class="slide-content1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card-wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Security</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Security</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Security</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn" id="next1"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev1"></div>
            <div class="swiper-pagination" id="pagination1"></div>
        </div>
    </div>


    <div id="Network" class="fakecategory">test</div>
    <div class="maincatagory">
        <div class="subcatagory" data-aos="fade-right" data-aos-duration="800">Network</div>
        <div class="slide-container swiper">
            <div class="slide-content2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card-wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Network</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Network</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Network</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn" id="next2"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev2"></div>
            <div class="swiper-pagination" id="pagination2"></div>
        </div>
    </div>


    <div id="Telecomm" class="fakecategory">test</div>
    <div class="maincatagory">
        <div class="subcatagory" data-aos="fade-right" data-aos-duration="800">Telecomm</div>
        <div class="slide-container swiper">
            <div class="slide-content3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card-wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Telecomm</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Telecomm</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Telecomm</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn" id="next3"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev3"></div>
            <div class="swiper-pagination" id="pagination3"></div>
        </div>
    </div>


    <div id="Audio" class="fakecategory">test</div>
    <div class="maincatagory">
        <div class="subcatagory" data-aos="fade-right" data-aos-duration="800">Audio</div>
        <div class="slide-container swiper">
            <div class="slide-content4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card-wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Audio</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Audio</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Audio</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn" id="next4"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev4"></div>
            <div class="swiper-pagination" id="pagination4"></div>
        </div>
    </div>


    <div id="Software" class="fakecategory">test</div>
    <div class="maincatagory">
        <div class="subcatagory" data-aos="fade-right" data-aos-duration="800">Software</div>
        <div class="slide-container swiper">
            <div class="slide-content5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card-wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Software</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Software</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img src="https://sv1.picz.in.th/images/2022/10/14/pvImA9.jpg">
                                </a>
                                <span class="product-discount-label">Software</span>
                                <a href="" class="add-to-cart">DETAIL</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Duplex, 9/125 SM , 2Core</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn" id="next5"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev5"></div>
            <div class="swiper-pagination" id="pagination5"></div>
        </div>
    </div>
            
<!-- activity -->
            <div>
                <p class="text" data-aos="fade-right" data-aos-duration="800">ข่าวสารเเละกิจกรรม</p>
            </div>
            <div class="slide-container swiper">
                <div class="slide-content6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach($posts as $post)
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <a href="{{route('post.details',['slug'=>$post->slug])}}"><img class="card-img" src="{{asset('/images/posts')}}/{{$post -> titleimg}}" width="100%" height="100%"/></a>
                                </div>
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
                        <a href="#"><img src="https://www.techtalkthai.com/wp-content/uploads/2018/04/techtalkthai_2018_data_center_01.jpg" alt="">
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
                    <p class="text" data-aos="fade-right" data-aos-duration="800">แบรนด์เข้าร่วม</p>
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
    const myslide = document.querySelectorAll('.myslider'),
        dot = document.querySelectorAll('.dot');

    let counter = 1;
    slidefun(counter);

    let timer = setInterval(autoslide, 5000);
    function autoslide(){
        counter += 1;
        slidefun(counter);
    }
    function plusSlides(n){
        counter += n;
        slidefun(counter);
        resetTimer();
    }
    function CurrentSlide(n){
        counter = n;
        slidefun(counter);
        resetTimer();
    }
    function resetTimer(){
        clearInterval(timer);
        timer = setInterval(autoslide, 8000);
    }

    function slidefun(n){
        let i;
        for(i = 0;i<myslide.length;i++){
            myslide[i].style.display = "none";
        }
        for(i = 0;i<dot.length;i++){
            dot[i].classList.remove('active');
        }
        if(n > myslide.length){
            counter = 1;
        }
        if(n < 1){
            counter = myslide.length;
        }
        myslide[counter - 1].style.display = "block";
        dot[counter - 1].classList.add('active');
    }
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
        delay: 3000,
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
        delay: 3000,
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
        delay: 3000,
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
        delay: 3000,
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
        delay: 3000,
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
        spaceBetween: 25,
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
        delay: 3000,
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
