<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">Product</div>
                    <div class="col-md-6">
                        <a href="{{route('admin.addproduct')}}"><button class="btn btn-success">Add Products</button></a>
                    </div>
                </div>
                <table class="table">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('/images/products')}}/{{$product -> image}}" width="60"/></td>
                                <td>{{$product->name}}</td>
                                <td></td>
                                <td>{{$product->web_price}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})"><i class="bi bi-x"></i></a>
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
