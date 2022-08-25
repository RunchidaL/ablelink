<div style="margin-left: 5%; margin-right: 5%">
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
                            <h1><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> NewProducts</h1>
                        </div>
                        <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.AddNewProducts')}}"><button class="btn btn-success">AddNewProducts</button></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            {{-- @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif --}}
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>LinkProducts</th>
                                    <th>Brand_id</th>
                                    <th>Brand</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($NewProduct as $NewProducts)
                                    {{-- @foreach ($NewProduct->where('brand_id',$NewProducts->brand_id) as $NewProducts) --}}
                                    <tr>
                                        <td>{{$NewProducts->id}}</td>
                                        <td>{{$NewProducts->name}}</td>
                                        <td><img src="{{$NewProducts->img}}" style="width: 50%"></td>
                                        <td>{{$NewProducts->linkproduct}}</td>
                                        <td>{{$NewProducts->brand_id}}</td>
                                        <td><img src="{{asset('/images/brands')}}/{{$NewProducts->brand->image}}" style="width: 80%"></td>
                                        <td>{{$NewProducts->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.EditNewProducts',['NewProduct_id'=>$NewProducts->id])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteNewProduct({{$NewProducts->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
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
        margin-left: 5%
    }
</style>


