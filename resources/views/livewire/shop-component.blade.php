<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->

<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            <h2 class="text">สินค้าทั้งหมด</h2>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="NP-col">
                <div class="card">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-wrapper">
                        <img src="{{asset('/images/products')}}/{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                                <p class="card-title">{{$product -> name}}</p>
                            @if(($product->web_price) == '0')
                                <p></p>
                            @else
                                <p>฿{{number_format($product->web_price)}}</p>
                            @endif
                        </div>
                        <div class="card-footer">
                            <form action="{{route('product.addCart',['product_id'=>$product->id,'product_name'=>$product->name,'product_price'=>$product->web_price])}}" method="POST">
                                @csrf
                                <button type='submit' class="button btn"><span>Add to cart</span></button>
                            </form>
                        </div>
                    </a>    
                </div>
            </div>
            @endforeach
            <div class="wrap-pagination-info">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>


