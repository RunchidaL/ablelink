<!-- link -->
<link href="/css/aboutus.css" rel="stylesheet">
<link href="/css/blog.css" rel="stylesheet">
<!-- link -->
<div class="head-abu">
    <div class="content-abu" data-aos="fade-right" data-aos-duration="800">
        <img src="{{asset('/images/mainpage')}}/{{$us->image}}" height="100%" width="100%" alt="">
    </div>
    <div class="content-abu" data-aos="fade-left" data-aos-duration="800">
        <div class="about"><h1>{{$us->company}}</h1></div>
        <div class="about">>>     {{$us->description}}</div>
    </div>
</div>

<div class="container-abu">
    <div class="box-abu" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <div class="header">
            <span>VISION <i class="bi bi-bookmark-heart"></i></span>
        </div>
        <div class="sub-container">
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_vision1}}" alt="">
                <div class="name">{{$us->title_vision1}}</div>
                <div class="about">{{$us->vision1}}</div>
            </div>
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_vision2}}" alt="">
                <div class="name">{{$us->title_vision2}}</div>
                <div class="about">{{$us->vision2}}</div>
            </div>
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_vision3}}" alt="">
                <div class="name">{{$us->title_vision3}}</div>
                <div class="about">{{$us->vision3}}</div>
            </div>
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_vision4}}" alt="">
                <div class="name">{{$us->title_vision4}}</div>
                <div class="about">{{$us->vision4}}</div>
            </div>
        </div>
    </div>
</div>

<div class="container-abu">
    <div class="box-abu" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
        <div class="header">
            <span>MISSION <i class="bi bi-arrow-up-right-square"></i></span>
        </div>
        <div class="sub-container">
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_mission1}}" alt="">
                <div class="name">{{$us->title_mission1}}</div>
                <div class="about">{{$us->mission1}}</div>
            </div>
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_mission2}}" alt="">
                <div class="name">{{$us->title_mission2}}</div>
                <div class="about">{{$us->mission2}}</div>
            </div>
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_mission3}}" alt="">
                <div class="name">{{$us->title_mission3}}</div>
                <div class="about">{{$us->mission3}}</div>
            </div>
            <div class="teams" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="{{asset('/images/mainpage')}}/{{$us->image_mission4}}" alt="">
                <div class="name">{{$us->title_mission4}}</div>
                <div class="about">{{$us->mission4}}</div>
            </div>
        </div>
    </div>
</div>


<h1 class="head-award"><i class="bi bi-award"></i>Award</h1>
<div class="blog">
    @foreach($posts as $post)
    @if (($post->category_id)=='6')
        <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <div class="meta">
                <div class="photo">
                    <a href="{{route('post.details',['slug'=>$post->slug])}}"><img src="{{asset('/images/posts')}}/{{$post -> titleimg}}" width="100%" height="100%"/></a>
                </div>
                <ul class="details">
                    <li class="author"><a href="#"></a></li>
                    <li class="date">{{$post->created_at}}</li>
                    <li class="tags">
                        <ul>
                            <li><a href="">By Marketing Ablelink</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="description">
                <h1><a href="{{route('post.details',['slug'=>$post->slug])}}" class="text-blog">{{$post->title}}</a></h1>
                <h2>ABLE LINK (Thailand) CO., LTD.</h2>
                <p><a href="{{route('post.details',['slug'=>$post->slug])}}" class="text-blog">{{$post->title}}</p>
                <p class="read-more">
                    <a href="{{route('post.details',['slug'=>$post->slug])}}">Read More</a>
                </p>
            </div>
        </div>
    @endif
    @endforeach
</div>
