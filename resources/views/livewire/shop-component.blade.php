<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            <h2 class="text">สินค้าทั้งหมด</h2>
        </div>
        <div class="row" id="products">
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
                                <p>฿{{number_format($product->web_price,2)}}</p>
                            @endif
                        </div>
                        <div class="card-footer">
                            <button type='button' class="button btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->customer_price}})"><span>Add to cart</span></button>
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
</div>


