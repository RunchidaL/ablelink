<!-- link -->
<link href="{{asset('css/highlight.css')}}" rel="stylesheet">
<link href="{{asset('css/newproduct.css')}}" rel="stylesheet">
<link href="{{asset('css/activity.css')}}" rel="stylesheet">
<link href="{{asset('css/brands.css')}}" rel="stylesheet">
<!-- link -->

<div class="screen" style="min-height: calc(100vh - 227.5px);">
<!-- highlight -->
    <div class="slider">
        @foreach ($sliders as $slide)
        <div class="myslider" style="display: block;">
            <div class="txt">
                <a href="{{$slide->link}}" style="text-decoration: none"><h1>{{$slide->title}}</h1></a>
                <p>{{$slide->subtitle}}</p>
            </div>
            <img class="imgg" src="{{asset('images/sliders')}}/{{$slide->image}}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
        </div>
        @endforeach
        <a class="prev" onclick="plusSlides(-1)"><i class="bi bi-chevron-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="bi bi-chevron-right"></i></a>
        <div class="dotsbox" style="text-align: center; display: none" >
            <span class="dot" onclick="CurrentSlide(1)"></span>
            <span class="dot" onclick="CurrentSlide(2)"></span>
            <span class="dot" onclick="CurrentSlide(3)"></span>
        </div>
    </div>

@push('scripts')
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
@endpush

<!-- newproduct -->
    <div class="body">
        <div class="Container">
            <div>
                <p class="text">ผลิตภัณฑ์ใหม่</p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @foreach ($Lproduct as $lproduct)
                    <div class="NP-col">
                        <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" style="text-decoration: none; color: black; "><img src="{{asset('/images/products')}}/{{$lproduct->image}}" alt="">
                        <p>{{$lproduct->name}}</p></a>
                    </div>
                    @endforeach
                </div>
            </div>     

<!-- activity -->
            <div><p class="text">ข่าวสารเเละกิจกรรม</p></div>
            <div class="slide-container swiper">
                <div class="slide-content" style="padding: 3% 2% 3% 2%">
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
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>

@push('scripts')
<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        autoplay: {
        delay: 3000,
        },
        slidesPerGroup:3, 
        

        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endpush
        
            <div class="container-fluid">
                <div class="row">
                    <div class="AC-col">
                        <a href="/post_category/บทความ"><img src="https://digitalmarketingwow.com/wp-content/uploads/2016/08/Writer001.jpg" alt="">
                        <p class="text-AC">บทความ</p></a>
                    </div>
                    <div class="AC-col">
                        <a href="#"><img src="https://www.techtalkthai.com/wp-content/uploads/2018/04/techtalkthai_2018_data_center_01.jpg" alt="">
                        <p class="text-AC">ผลิตภัณฑ์</p></a>
                    </div>
                    <div class="AC-col">
                        <a href="/post_category/องค์กร"><img src="https://cdn-images.prod.thinkofliving.com/wp-content/uploads/1/2019/06/11175158/Empire-Tower-1.jpg" alt="">
                        <p class="text-AC">องค์กร</p></a>
                    </div>
                </div>
            </div>

<!-- brands -->
            <div class="container-fluid">
                <div class="B">
                    <p class="text">แบรนด์เข้าร่วม</p>
                    <div class="brands">
                        <div class="row" id="row-brands">
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 1.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 2.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 3.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 4.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="row" id="row-brands">   
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 5.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 6.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 7.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 8.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="row" id="row-brands">      
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 9.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 10.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                <a href="#"><img src="/images/brand 11.png" alt="logo"></a>
                            </div>
                            <div class="brands-col">
                                {{-- <a href="#"><img src="/images/logoAbleLink.png" alt="logo"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div> 
</div>
