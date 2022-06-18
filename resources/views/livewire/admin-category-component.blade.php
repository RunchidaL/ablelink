<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>All Category</h5>
                <a href="{{route('admin.addcategory')}}"><button>add category</button></a>
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" wire:click.prevent="deleCategory({{$category->id}})"><i class="bi bi-x"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
