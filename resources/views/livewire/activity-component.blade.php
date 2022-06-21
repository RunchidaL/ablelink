<!-- link -->
<link href="/css/activity.css" rel="stylesheet">
<!-- link -->


<div class="menu">
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


<div class="container mt-2">
    <div class="row">
        <table class="table table-bordered">
            @foreach($posts as $post)
                <tr>
                    <td>
                        <a href="{{route('post.details',['slug'=>$post->slug])}}"><img src="{{asset('/images/posts')}}/{{$post -> titleimg}}" width="150"/></a>
                    </td>
                    <td>
                        <a href="{{route('post.details',['slug'=>$post->slug])}}" class="text">{{$post->title}}<br><br><br>Marketing Ablelink: {{$post->created_at}}</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>





