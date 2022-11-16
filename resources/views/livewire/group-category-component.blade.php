<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
        @endif
        @error('attribute') <div class="alert alert-danger" role="alert">กรุณาใส่ความยาว</div> @enderror
        <div class="row" id="products">
        @foreach($products->unique('groupproduct_id') as $product)
            <br>
            <div>
                <h2 class="text" style="font-weight: bold">{{$product->group_products->name}}</h2>

            </div>

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
                <h4 class="text" style="padding-left:15px;">{{$s->name}}</h4>
            </div>

                    <!-- series -->
                    @foreach($models->where('series_id',$s->id) as $model)
                        @if($model->type_id)
                        @else
                        <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <div class="card">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                                <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
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
                        <br>
                        <div>
                            <h5 class="text" style="padding-left:30px;">{{$t->name}}</h5>
                        </div>
                        @foreach($models->where('type_id',$t->id) as $model)
                            @if($model->jacket_id)
                            @else
                            <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="card">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                                    <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
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
                                        <button id="add-cart-button" type='button' class="button btn" style="opacity: 0.5; pointer-events:none;"><span>Add to cart</span></button>
                                    @else
                                        <button id="add-cart-button" type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
                                    @endif
                                </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                        <!-- jacket -->
                        @foreach($jackets->where('type_id',$t->id) as $j)
                        <br>
                        <div>
                            <p class="text" style="padding-left:45px;">{{$j->name}}</p>
                        </div>
                            @foreach($models->where('jacket_id',$j->id) as $model)
                            <div class="NP-col" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="card">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}" class="card-wrapper">
                                    <img src="{{asset('/images/products')}}/{{$model->image}}" class="card-img-top" alt="...">
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
                                        <button id="add-cart-button" type='button' class="button btn" style="opacity: 0.5; pointer-events:none;"><span>Add to cart</span></button>
                                    @else
                                        <button id="add-cart-button" type='button' class="button btn" data-name="{{$model->slug}}"><span>Add to cart</span></button>
                                    @endif
                                </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                    @endforeach
            @endforeach
        @endforeach
    </div>
</div>
