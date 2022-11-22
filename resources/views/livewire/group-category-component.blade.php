<div style=" min-height: calc(100vh - 227.5px); width: 100%;">
    <div class="container">
        <div class="row" id="products">
            @foreach($products->unique('groupproduct_id') as $product)
                <br>
                <div><h2 class="text" style="font-weight: bold">{{$product->group_products->name}}</h2></div>
                <div class="group-product-bg">
                @foreach($models->where('group_products',$product->groupproduct_id) as $model)
                    @if($model->series_id)
                    @elseif($model->product->brandcategory_id == $bcategory->id)
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
                </div>
                
                @foreach($series->where('group_id',$product->groupproduct_id) as $s)
                <div><h2 class="text" style="padding-left:15px;"> > {{$s->name}}</h2></div>
                    <!-- series -->
                    <div class="group-product-bg">
                        @foreach($models->where('series_id',$s->id) as $model)
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
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>


<style>
    #products{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        margin: 0;
    }
    
    .group-product-bg{
        display: flex;
        flex-wrap: wrap;
        padding: 0 7%;
        justify-content: space-evenly;
        width: 100%;
    }

    .NP-col{
        position: relative;
        width: 20%;
        text-align: start;
        margin: 3% 1%;
    }

    /* resonsive */
    @media(max-width: 1200px){
    .NP-col {
        width: 33%;
    }
    }

    @media(max-width: 900px){
    .NP-col {
        width: 100%;
    }
    }

    @media(max-width: 520px){
    .NP-col {
        width: 100%;
    }
    }
</style>
