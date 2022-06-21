<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->

<div class="row">
    @foreach($products as $product)
    <div class="NP-col">
        <div class="card">
            <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-title">
                <img src="{{asset('/images/products')}}/{{$product -> image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>{{$product -> name}}</p>
                    @if(($product->web_price) == '0')
                        <p></p>
                    @else
                        <p>{{number_format($product->web_price)}}</p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="/service" class="btn btn">Add to cart</a>
                </div>
            </a>    
        </div>
    </div>
    @endforeach
    <div class="wrap-pagination-info" style="width:100%;">
        {{$products->links()}}
    </div>
</div>

