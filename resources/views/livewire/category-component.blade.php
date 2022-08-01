<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            @if($scategory_slug == '' and $bcategory_slug == '')
                <h2 class="text">{{$category->name}}</h2>
            @elseif($bcategory_slug == '')
                <h2 class="text">{{$scategory->name}}</h2>
            @else
                <h2 class="text">{{$bcategory->name}}</h2>
            @endif
        </div>
        <div class="row" id="products">
            @foreach($products as $product)
                @foreach($models->where('product_id',$product->id)->unique('product_id') as $model)
                <div class="NP-col">
                    <div class="card">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                            <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                    <p><span>#{{$model->slug}}</span></p>
                                    <p class="card-title">{{$model->name}}</p>
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
                            </div>
                        </a>
                        <div class="card-footer">
                            <button type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
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
                        <img src="{{asset('/images/products')}}/{{$model->product->image}}">
                    </div>
                    <div class="col">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}">
                        <h4>{{$model->name}}<span> #{{$model->slug}}</span></h4></a>
                        <div class="head-product-price">
                            <p>฿{{number_format($model->customer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                        </div><br>
                        @if(($model->product->subCategories->name) == "Cabling")
                        <div class="length">
                            <p>Length:</p>
                            <div class="add-attribute">
                                <input wire:model="attribute"> m
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