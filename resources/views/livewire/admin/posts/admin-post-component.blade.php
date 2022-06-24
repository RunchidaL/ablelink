<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row" id="head">
                        <div class="col-md-4">
                            <h1>Post</h1>
                        </div>
                        <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.post.category')}}"><button class="btn btn-success">Post Category</button></a>
                        <a href="{{route('admin.addpost')}}"><button class="btn btn-success">Add Post</button></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title Image</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->category->name}}</td>
                                        <td><img src="{{asset('/images/posts')}}/{{$post -> titleimg}}" width="150"/></td>
                                        <a href="{{route('post.details',['slug'=>$post->slug])}}" class="text"><td>{{$post->title}}</td></a>
                                        <td>{{$post->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.editpost',['post_slug'=>$post->slug])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deletePost({{$post->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<style>
    #editsub{
        color:black;
        font-size: 30px;
        margin-left: 5%
    }
</style>

