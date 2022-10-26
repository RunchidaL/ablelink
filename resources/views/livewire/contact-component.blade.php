<!-- link -->
<link href="/css/contact.css" rel="stylesheet">
<!-- link -->

<div class="slider">
    <div class="myslider" style="display: block;">
        <div class="txt">
            <h1>CONTACT US</h1>
        </div>
        <img class="imgg" src="/images/contact1.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
    </div>
</div>

<div class="all-content">
    <div class="left" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <p class="PH">ABLE LINK (Thailand) CO., LTD. </p><br>
        <p class="contact">{{$contact->Address}}</p>
        <ul>
            <li><a href="{{$contact->link_facebook}}"><i class="bi bi-facebook"></i></a> : {{$contact->facebook}}</li>
            <li><a href="{{$contact->link_line}}"><i class="bi bi-line"></i></a> : {{$contact->line}}</li>
            <li><a href="{{$contact->link_youtube}}"><i class="bi bi-youtube"></i></a> : {{$contact->youtube}}</li>
            <li><a href="{{$contact->link_email}}"><i class="bi bi-envelope"></i></a> : {{$contact->email}}</li>
            <li><a href="#"><i class="bi bi-telephone"></i></a> : {{$contact->tel}}</li>
        </ul>
    </div>

    <div div class="right" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <iframe src="{{$contact->googlemap}}" width="500" height="350 " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>