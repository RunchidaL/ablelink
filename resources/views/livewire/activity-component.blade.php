<!-- link -->
<link href="/css/activity.css" rel="stylesheet">
<!-- link -->

<div class="menu">
    <div class="mac-left">
        <a href="#"><i class="bi bi-file-text"></i></a>
        <p class="text-icon">บทความ</p>
    </div>
    <div class="mac-center">
        <a href="#"><i class="bi bi-box-seam"></i></a>
        <p>ผลิตภัณฑ์</p>
    </div>
    <div class="mac-right">
        <a href="#"><i class="bi bi-building"></i></a>
        <p class="text-icon">องค์กร</p>
    </div>
</div>

<div class="info-body" style="padding: 10%">
    @foreach($posts as $post)
    <h5>{{$post->title}}</h5>
    <img src="{{asset('images/posts')}}/{{$post->titleimg}}">
    <p>{{$post->category}}</p>
    <p>{!! $post->description !!}</p>
    @endforeach
</div>

