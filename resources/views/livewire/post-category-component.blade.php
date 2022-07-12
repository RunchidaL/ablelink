<!-- link -->
<link href="/css/activity.css" rel="stylesheet">
<link href="/css/blog.css" rel="stylesheet">
<!-- link -->


<div class="menu-activity">
    <div class="mac-left">
        <a href="/post_category/บทความ"><i class="bi bi-file-text"></i></a>
        <p class="text-icon">บทความ</p>
    </div>
    <div class="mac-center">
        <a href="#"><i class="bi bi-box-seam"></i></a>
        <p>ผลิตภัณฑ์</p>
    </div>
    <div class="mac-right">
        <a href="/post_category/องค์กร"><i class="bi bi-building"></i></a>
        <p class="text-icon">องค์กร</p>
    </div>
</div>


<div class="blog">
@foreach($posts as $post)
    <div class="blog-card">
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
@endforeach
</div>




