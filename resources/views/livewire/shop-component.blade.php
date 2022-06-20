<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->

<!-- <div class="container-fluid"> -->
    <div class="row" style="width:100%;">
        @foreach($products as $product)
        <div class="NP-col">
            <div class="card">
                <img src="{{asset('/images/products')}}/{{$product -> image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-title">{{$product -> name}}</a>
                    @if(($product->web_price) == '0')
                        <p></p>
                    @else
                        <p>{{number_format($product->web_price)}}</p>
                    @endif
                    <a href="#" class="btn btn">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="wrap-pagination-info" style="width:100%;">
            {{$products->links()}}
        </div>
        
    </div>
    
<!-- </div> -->

