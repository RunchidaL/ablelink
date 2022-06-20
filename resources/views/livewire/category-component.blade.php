<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->

<div>
    <p class="text">สินค้าทั้งหมด</p>
</div>
<div class="container-fluid">
    <div class="row">
        @foreach($products as $product)
        <div class="NP-col">
            <div class="card">
                <img src="{{asset('/images/products')}}/{{$product -> image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-title">{{$product -> name}}</a>
                    <p class="card-text">{{$product -> web_price}}</p>
                    <a href="#" class="btn btn">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="wrap-pagination-info">
{{$products->links()}}
</div>

