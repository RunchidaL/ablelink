<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-4">
                        <h2>All Brand</h2>
                    </div>
                    <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.addbrand')}}"><button class="btn btn-success">Add New Brand</button></a>
                    </div>
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$brand->id}}</td>
                                <td><img src="{{asset('/images/brands')}}/{{$brand->image}}" width="120" alt=""></td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->slug}}</td>
                                <td>
                                    <a href="{{route('admin.editbrand',['brand_slug'=>$brand->slug])}}"><i class="bi bi-pencil-square" id="edit"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteBrand({{$brand->id}})"><i class="bi bi-x" id="edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
</div>


<style>
    #head{
        margin: 2% 0 2% 0;
    }
    #edit{
        color:black;
        font-size: 25px;
    }
    #editsub{
        color:black;
        font-size: 15px;
    }
    .sub-name{
        width:20%;
    }
</style>