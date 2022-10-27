<!-- link -->
<link href="/css/service.css" rel="stylesheet">
<!-- link -->

<div class="slider">
    <div class="myslider" style="display: block;">
        <div class="txt">
            <h1>{{$service->title}} <i class="fas fa-bolt" style="color: yellow"></i></h1>
        </div>
        <img class="imgg" src="{{asset('/images/mainpage')}}/{{$service->image}}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
    </div>
</div>

<div class="all-content">
    <div class="content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <div class="box">
            <img src="{{asset('/images/mainpage')}}/{{$service->image1}}">
        </div>
        <h3>{{$service->title1}}</h3>
        <ul class="message">
            <p>{{$service->description1}}</p>
        </ul>
    </div>

    <div class="content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <div class="box">
            <img src="{{asset('/images/mainpage')}}/{{$service->image2}}">
        </div>
        <h3>{{$service->title2}}</h3>
        <ul class="message">
            <p>{{$service->description2}}</p>
            <p>Email: {{$contact->email}}</p>
            <p>ID LINE :{{$contact->line}}</p>
            <p>Facebook :{{$contact->facebook}}</p>
            <p>Tel :{{$contact->tel}}</p>
        </ul> 
    </div>

    <div class="content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <div class="box">
            <img src="{{asset('/images/mainpage')}}/{{$service->image3}}">
        </div>
        <h3>{{$service->title3}}</h3>
        <ul class="message">
            <p>{{$service->description3}}</p>
        </ul>    
    </div>
</div>

