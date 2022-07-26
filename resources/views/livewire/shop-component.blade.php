<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            <h2 class="text">ผลิตภัณฑ์ทั้งหมด</h2>
        </div>
        <div class="row" id="products">
            @foreach($products as $product)
            <div class="NP-col">
                <div class="card">
                    <a href="{{route('product.detailsmodels',['modelslug'=>$product->slug])}}" class="card-wrapper">
                        <img src="{{asset('/images/products')}}/{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                                <p class="card-title">{{$product->name}}<span> #{{$product->slug}}</span></p>
                            @if(($product->web_price) == '1')
                                <p class="empty">฿</p>
                            @else
                                <p>฿{{number_format($product->customer_price,2)}}</p>
                            @endif
                        </div>
                    </a> 
                    <div class="card-footer">
                        <button type='button' class="button btn" data-name="{{$product->slug}}"><span>Add to cart</span></button>
                    </div>
                </div>
            </div>
            @endforeach
            {{$products->links()}}
        </div>
    </div>
    <div class="add-products-preview">
        @foreach($products as $product)
        <div class="preview" data-target="{{$product->slug}}">
            <i class="bi bi-x-lg"></i>
            <div class="row">
                <div class="col">
                    <img src="{{asset('/images/products')}}/{{$product->image}}">
                </div>
                <div class="col">
                    <a href="{{route('product.detailsmodels',['modelslug'=>$product->slug])}}">
                    <h4>{{$product->name}}<span> #{{$product->slug}}</span></h4></a>
                    <div class="head-product-price">
                        <p>฿{{number_format($product->customer_price,2)}}<span> | In stock {{$product->stock}}</span></p>
                    </div><br>
                    @if(($product->product->subCategories->name) == "Cabling")
                    <div class="length">
                        <p>Length:</p>
                        <div class="add-attribute">
                            <input wire:model.defer="attribute"> m
                        </div>
                    </div><br>
                    @endif
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="quantity">
                    <div class="add-qty">
                        <input wire:model.defer="qty" type="number" min="1" step="1" value="1" max="{{$product->stock}}">
                    </div>
                    <div class="addtocart" style="display: inline-block;">
                        <button wire:click.prevent="addToCart({{$product->id}})">Add To Cart</button>
                    </div> 
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
let preveiwContainer = document.querySelector('.add-products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

    document.querySelectorAll('#products .card-footer .button').forEach(product =>{
        product.onclick = () =>{
            preveiwContainer.style.display = 'flex';
            let name = product.getAttribute('data-name');
            previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target){
                preview.classList.add('active');
            }
            });
        };
    });

    previewBox.forEach(close =>{
        close.querySelector('.bi.bi-x-lg').onclick = () =>{
            close.classList.remove('active');
            preveiwContainer.style.display = 'none';
        };
    });
</script>