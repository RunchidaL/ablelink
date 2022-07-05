<div style="margin-left: 5%; margin-right: 5%">
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <h2><a href="{{route('admin.post')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a>  All Post Category</h2>
                            </div>
                            <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end align-items-center">
                                <a href="{{route('admin.add.post.category')}}" class="btn btn-success ">Add New Post Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message',))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($postcategories as $postcategory)
                                    <tr>
                                        <td>{{$postcategory->id}}</td>
                                        <td>{{$postcategory->name}}</td>
                                        <td>{{$postcategory->slug}}</td>
                                        <td>
                                            <a href="{{route('admin.edit.post.category',['postcategory_slug'=>$postcategory->slug])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deletePostCategory({{$postcategory->id}})"><i class="bi bi-x" id="editsub"></i></a>
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
        font-size: 25px;
    }
</style>