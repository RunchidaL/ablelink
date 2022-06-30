<!-- link -->
    <link href="{{asset('css/highlight.css')}}" rel="stylesheet">
    <link href="{{asset('css/newproduct.css')}}" rel="stylesheet">
    <link href="{{asset('css/activity.css')}}" rel="stylesheet">
    <link href="{{asset('css/brands.css')}}" rel="stylesheet">
<!-- link -->

<div class="screen">

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
        
        <a class="prev" onclick="plusSlides(-1)"><i class="bi bi-chevron-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="bi bi-chevron-right"></i></a>

        
        <div class="dotsbox" style="text-align: center; display: none" >
            <span class="dot" onclick="CurrentSlide(1)"></span>
            <span class="dot" onclick="CurrentSlide(2)"></span>
            <span class="dot" onclick="CurrentSlide(3)"></span>
        </div>
        @endforeach
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
                        <a href="#"><img class="img2" src="https://wallpaperaccess.com/full/6325241.jpg" class="d-block w-100" alt="..." ></a>
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
</div>