<!-- link -->
<link href="/css/activity.css" rel="stylesheet">
<!-- link -->

@section('link_blogac')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection


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



<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>บทความ</h2>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif

        <table class="table table-bordered">
            @foreach($posts as $post)
                <tr>
                    <td><img src="{{asset('/images')}}/{{$post -> titleimg}}" width="50"/></td>

                    <td>{{$post->title}}</td>
                    <td>{{$post->titleimg}}</td>
                    <td>{{$post->category}}</td>
                    <td>{!!$post->description!!} <br><br>{{$post->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>



{{-- <div class="content">
    @foreach ($posts as $post)
        <h3>{{$post->title}}</h3>
        <div>{!!$post->description!!}</div>
        <div>{{$post->created_at}}</div>

        <td>
            <form action="{{route("destroy", $post->id)}}" method="POST">
            <a href="{{route('edit' $post->id)}}">Edit</a>
            @csrf
            @method('Delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    @endforeach
</div> --}}
