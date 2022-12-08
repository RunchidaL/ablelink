<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
        @error('attribute') <div class="alert alert-danger" role="alert">กรุณาใส่ความยาว</div> @enderror
        <div class="row" id="products">
        @foreach($products->unique('groupproduct_id') as $product)
            <br>
            @if(!empty($product->product_models->id))
            <div>
                <h2 class="text" style="font-weight: bold">{{$product->group_products->name}}</h2>
            </div>
            @endif

            <!-- group -->
            @foreach($models->where('group_products',$product->groupproduct_id) as $model)
                @if($model->series_id)
                @else
                <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="card">
                    <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                        <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p><span>#{{$model->slug}}</span></p>
                            <p class="card-title">{{$model->nickname}}</p>
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
                            <button id="add-cart-button" type='button' class="button btn" style="opacity: 0.5; pointer-events:none;"><span>Add to cart</span></button>
                        @else
                            <button id="add-cart-button" type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
                        @endif
                    </div>
                    </div>
                </div>
                @endif
            @endforeach

            @foreach($series->where('group_id',$product->groupproduct_id) as $s)
            <br>
            <div>
            @foreach($models->where('series_id',$s->id)->unique('product_id') as $model)
                @if($s->id == $model->series_id and $model->product->brandcategory_id == $bcategory->id and empty($model->type_id))
                <h4 class="text" style="padding-left:15px;">{{$s->name}}</h4>
                @endif
            @endforeach
            </div>

                    <!-- series -->
                    @foreach($models->where('series_id',$s->id) as $model)
                        @if($model->type_id)
                        @elseif($model->product->brandcategory_id == $bcategory->id)
                        <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <div class="card">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                                <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><span>#{{$model->slug}}</span></p>
                                    <p class="card-title">{{$model->nickname}}</p>
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
                                    <button id="add-cart-button" type='button' class="button btn" style="opacity: 0.5; pointer-events:none;"><span>Add to cart</span></button>
                                @else
                                    <button id="add-cart-button" type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
                                @endif
                            </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

                    <!-- type -->
                    @foreach($types->where('series_id',$s->id) as $t)
                        <div>
                        @foreach($models->where('type_id',$t->id)->unique('product_id') as $model)
                            @if($t->id == $model->type_id and $model->product->brandcategory_id == $bcategory->id)
                            <h5 class="text" style="padding-left:30px;">{{$model->series->name}} > {{$t->name}}</h5>
                            @endif
                        </div>
                        @endforeach
                        
                        @foreach($models->where('type_id',$t->id) as $model)
                            @if($model->jacket_id)
                            @elseif($model->product->brandcategory_id == $bcategory->id)
                            <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="card">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                                    <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p><span>#{{$model->slug}}</span></p>
                                        <p class="card-title">{{$model->nickname}}</p>
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
                                        <button id="add-cart-button" type='button' class="button btn" style="opacity: 0.5; pointer-events:none;"><span>Add to cart</span></button>
                                    @else
                                        <button id="add-cart-button" type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
                                    @endif
                                </div>
                                </div>
                            </div>
                            @endif
                        @endforeach


                    @endforeach
            @endforeach
        @endforeach
        {{$products->links()}}
    </div>
    <div class="add-products-preview" id="add-products-preview">
        @foreach($models as $model)
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
                        <p>฿{{number_format($model->customer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                    @else
                        @if(Auth::user()->role == 1)
                        <p>฿{{number_format($model->customer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                        @else
                        <p>฿{{number_format($model->dealer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                        @endif
                    @endguest
                    </div><br>
                    @if(($model->product->subcategory_id) == 7)
                    <div class="length">
                        <p>Length:</p>
                        <div class="add-attribute">
                            <input wire:model.defer="attribute" required> m
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
        
    </div>
</div>


<script>
    let buttons = document.querySelectorAll('#add-cart-button');
    let previews = document.querySelectorAll(".preview");
    buttons.forEach( button =>{
        button.addEventListener("click",()=>{
            let name = button.getAttribute('data-name');
            let flag = 0;
            previews[0].parentElement.style.display = "flex";
            previews.forEach(preview => {
                let target = preview.getAttribute('data-target');
                if(target === name) {
                    preview.classList.add("active");
                }
            })
        })
    })

    previews.forEach(close =>{
        close.querySelector('.bi.bi-x-lg').onclick = () =>{
            close.classList.remove('active');
            previews[0].parentElement.style.display = "none";
        };
    });
</script>