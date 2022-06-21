<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-4">
                        <h1>Product</h1>
                    </div>
                    <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                        <a href="{{route('admin.addproduct')}}"><button class="btn btn-success">Add Products</button></a>
                    </div>
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Web Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('/images/products')}}/{{$product -> image}}" width="60"/></td>
                                <td class="product-name">{{$product->name}}</td>
                                <td>{{number_format($product->web_price)}}</td>
                                <td>{{$product->created_at}}</td>
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
    .product-name{
        width:50%;
    }

</style>
