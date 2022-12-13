<!-- link -->
<link href="/css/forwork.css" rel="stylesheet">
<!-- link -->

<div class="slider">
    <div class="myslider" style="display: block;">
        <div class="txt">
            <h1>{{$work->title}}</h1>
        </div>
        <img class="imgg" src="{{asset('/images/mainpage')}}/{{$work->image}}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
    </div>
</div>

<div class="all-content">
    <div class="col">
        <h3 class="H3" data-aos="fade-up" data-aos-duration="800">{{$work->title1}} <i class="bi bi-house-heart" style="color: white"></i></h3>
        <br>
        <ul>
            @if(!empty($work->service1))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service1}}</li>
            @endif
            @if(!empty($work->service2))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service2}}</li>
            @endif
            @if(!empty($work->service3))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service3}}</li>
            @endif
            @if(!empty($work->service4))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service4}}</li>
            @endif
            @if(!empty($work->service5))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service5}}</li>
            @endif
            @if(!empty($work->service6))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service6}}</li>
            @endif
            @if(!empty($work->service7))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service7}}</li>
            @endif
            @if(!empty($work->service8))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service8}}</li>
            @endif
            @if(!empty($work->service9))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service9}}</li>
            @endif
            @if(!empty($work->service10))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-check-lg"></i> {{$work->service10}}</li>
            @endif
        </ul>
    </div>

    <div class="col">
        <h3 class="H3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">{{$work->title2}} <i class="bi bi-people-fill" style="color: white"></i></h3>
        <br>
        <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-envelope-fill"></i> อีเมลติดต่อ : {{$work->hrmail}}</li>
        <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><i class="bi bi-telephone"></i> เบอร์ติดต่อ : {{$work->hrtel}}</li>
        <br>
        <h4 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">{{$work->heading}}</h4>
        <ul>
            @if(!empty($work->detail1))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail1}}</li>
            @endif
            @if(!empty($work->detail2))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail2}}</li>
            @endif
            @if(!empty($work->detail3))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail3}}</li>
            @endif
            @if(!empty($work->detail4))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail4}}</li>
            @endif
            @if(!empty($work->detail5))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail5}}</li>
            @endif
            @if(!empty($work->detail6))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail6}}</li>
            @endif
            @if(!empty($work->detail7))
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">- {{$work->detail7}}</li>
            @endif
        </ul>
    </div>
</div>

<style>
    #forwork span{
        border-bottom: 2px solid rgb(255, 0, 0);
    }
</style>
