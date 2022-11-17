<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
        @error('attribute') <div class="alert alert-danger" role="alert">กรุณาใส่ความยาว</div> @enderror
        <div>
            @if($scategory_slug == '' and $bcategory_slug == '' and $sbcategory_slug == '')
                <h2 class="text">{{$category->name}}</h2>
            @elseif($bcategory_slug == '' and $sbcategory_slug == '')
                <h2 class="text">{{$scategory->name}}</h2>
            @elseif($sbcategory_slug == '')
                <h2 class="text">{{$bcategory->brands->name}}</h2>
            @else
                <h2 class="text">{{$sbcategory->name}}</h2>
            @endif
        </div>
        <div class="row" id="products">
            @foreach($products as $product)
                @foreach($models->where('product_id',$product->id)->unique('product_id') as $model)
                <div class="NP-col">
                    <div class="card">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                            <div class="boximgnp">
                                <div class="imgnp"><img src="{{asset('/images/products')}}/{{$model->image}}" alt="..."></div>
                            </div>
                            <div class="card-body">
                                <p><span>#{{$model->slug}}</span></p>
                                <p class="card-title">{{$model->name}}</p>
                                @guest
                                    @if(($model->web_price) == '1')
                                        <p class="empty">฿</p>
                                    @else
                                    <div class="d-flex">
                                        <div class="me-auto p-2">
                                            <p><span>In stock {{$model->stock}}</span></p>
                                        </div>
                                        <div class="p-2">
                                            <p>฿{{number_format($model->customer_price,2)}}</p>
                                        </div>
                                    </div>
                                    @endif
                                @else
                                    @if(Auth::user()->role == 1)
                                        @if(($model->web_price) == '1')
                                            <p class="empty">฿</p>
                                        @else
                                        <div class="d-flex">
                                            <div class="me-auto p-2">
                                                <p><span>In stock {{$model->stock}}</span></p>
                                            </div>
                                            <div class="p-2">
                                                <p>฿{{number_format($model->customer_price,2)}}</p>
                                            </div>
                                        </div>
                                        @endif
                                    @elseif(Auth::user()->role == 2)
                                    <div class="d-flex">
                                        <div class="me-auto p-2">
                                            <p><span>In stock {{$model->stock}}</span></p>
                                        </div>
                                        <div class="p-2">
                                            <p>฿{{number_format($model->dealer_price,2)}}</p>
                                        </div>
                                    </div>
                                    @elseif(Auth::user()->role == 3)
                                    <div class="d-flex">
                                        <div class="me-auto p-2">
                                            <p><span>In stock {{$model->stock}}</span></p>
                                        </div>
                                        <div class="p-2">
                                            <p style="font-size:12px;">฿{{number_format($model->customer_price,2)}}, <span style="color: red;">฿{{number_format($model->dealer_price,2)}}</span></p>
                                        </div>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                        </a>
                        <div class="card-footer">
                            @if($model->stock == 0)
                                <button type='button' class="button btn" style="opacity: 0.5; pointer-events:none;"><span>Add to cart</span></button>
                            @endif
                            @guest
                                @if($model->stock > 0)
                                    <a href="{{ route('login') }}"><button type='button' class="button btn"><span>Add to cart</span></button></a>
                                @endif
                            @else
                                @if($model->stock > 0)
                                <button id="add-cart-button" type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
                                @endif
                            @endguest
                        </div>
                    </div>
                </div>
                @endforeach
            @endforeach
            {{$products->links()}}
        </div>
    </div>
    <div class="add-products-preview">
        @foreach($products as $product)
            @foreach($models->where('product_id',$product->id)->unique('product_id') as $model)
            <div class="preview" data-target="{{$model->slug}}">
                <i class="bi bi-x-lg"></i>
                <div class="row">
                    <div class="col">
                        <img src="{{asset('/images/products')}}/{{$model->image}}">
                    </div>
                    <div class="col">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}">
                        <h4>{{$model->name}}<span> #{{$model->slug}}</span></h4></a>
                        <div class="head-product-price">
                        @guest
                        <p>฿{{number_format($product->customer_price,2)}}<span> | In stock {{$product->stock}}</span></p>
                        @else
                            @if(Auth::user()->role == 1)
                            <p>฿{{number_format($model->customer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                            @else
                            <p>฿{{number_format($model->dealer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                            @endif
                        @endguest
                        </div><br>
                        @if(($model->product->subCategories->name) == "Cabling")
                        <div class="length">
                            <p>Length:</p>
                            <div class="add-attribute">
                                <input wire:model.defer="attribute"> m
                                <p class="text-danger">กรุณาใส่ความยาว</p>
                            </div>
                        </div><br>
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="quantity">
                        <div class="add-qty">
                            <input wire:model.defer="qty" type="number" min="1" step="1" value="1" max="{{$model->stock}}">
                        </div>
                        <div class="addtocart" style="display: inline-block;">
                            <button wire:click.prevent="addToCart({{$model->id}})">Add To Cart</button>
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
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