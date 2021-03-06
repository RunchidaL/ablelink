<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-2">
                        <h1>Product</h1>
                    </div>
                    <div class="col-md-6 gap-2 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.category')}}"><button class="btn btn-success">Category</button></a>
                        <a href="{{route('admin.addmodel')}}"><button class="btn btn-success">Add Models</button></a>
                        <a href="{{route('admin.group')}}"><button class="btn btn-success">Group Products</button></a>
                        <a href="{{route('admin.addproduct')}}"><button class="btn btn-success">Add Products</button></a>
                    </div>
                    <div class="col offset-md-8 d-md-flex justify-content-md-end">
                        <input class="form-control" list="datalistOptions" placeholder="search" wire:model="searchproduct">
                        <datalist id="datalistOptions">
                            @foreach($products as $product)
                                <option>{{$product->slug}}</option>
                            @endforeach
                        </datalist>
                    </div>
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>ID</th>
                            <!-- <th>Image</th> -->
                            <th>Name</th>
                            <th>Models</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <!-- <td><img src="{{asset('/images/products')}}/{{$product -> image}}" width="60"/></td> -->
                                <td class="product-name">{{$product->name}}</td>
                                <td class="models">
                                    <ul class="slist">
                                        @foreach($product->product_models as $model)
                                            <li>{{$model->id}}, {{$model->slug}}
                                                <a href="{{route('admin.editmodel',['model_slug'=>$model->slug])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                                <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteModel({{$model->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                            </li>
                                        @endforeach
                                    </ul> 
                                </td>
                                <td>
                                    <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="bi bi-pencil-square" id="edit"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})"><i class="bi bi-x" id="edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
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
    .product-name{
        width:20%;
    }

</style>
