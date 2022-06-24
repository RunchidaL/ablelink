<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->

<div>
    @if($scategory_slug == '')
        <p class="text">{{$category->name}}</p>
    @else
        <p class="text">{{$scategory->name}}</p>
    @endif
</div>
<div class="row">
    @foreach($products as $product)
    <div class="NP-col">
        <div class="card">
            <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-title">
                <img src="{{asset('/images/products')}}/{{$product -> image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">{{$product -> name}}</p>
                    @if(($product->web_price) == '0')
                        <p class="card-text"></p>
                    @else
                        <p class="card-text">฿{{number_format($product->web_price)}}</p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="#" class="button btn">Add to cart</a>
                </div>
            </a>    
        </div>
    </div>
    @endforeach
</div>
    <div class="wrap-pagination-info">
        {{$products->links()}}
    </div>
</div>
