<link href="/css/details.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <img src="{{asset('/images/products')}}/{{$model->product->image}}">
        </div>
        <div class="col" id="right">
            <p>{{$model->name}}</p>
            @if(($model->web_price) == '0')
                <p></p>
            @else
                <p>{{number_format($model->web_price)}}</p>
            @endif
            <p>In stock {{$model->stock}}</p>
            <div class="quantity">
                <input value="1">
                <div class="handle">
                    <a href="#"><button><i class="bi bi-caret-up"></i></button></a>
                    <a href="#"><butoon><i class="bi bi-caret-down"></i></butoon></a>
                </div>
                <div class="addtocart" style="display: inline-block;">
                    <a href="#"><button>Add To Cart</button></a>
                </div> 
            </div>
            <div class="relate_product">
                <div class="models"><br>
                    <p>Models:</p>
                    <div class="row">
                        @foreach($product_models->where('product_id',$model->product->id) as $product_model)
                        <div class="col-2 d-flex mt-2">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->product->slug])}}">{{$product_model->name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div><br>
                <div class="series">
                    <p>Series:</p>
                    <div class="row">
                        @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                            <div class="col-2 d-flex mt-2">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->series->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div><br>
                <div class="types">
                    <p>Types:</p>
                    <div class="row">
                    @foreach($product_models->where('product_id',$model->product->id)->unique('series_id') as $product_model)
                        @foreach($types as $type)
                            @if($type->series_id === $product_model->series_id)
                            <div class="col-2 d-flex mt-2">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$type->product->slug])}}">{{$type->name}}</a>
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div><br>
                <div class="jacket">
                    <p>Jacket Types:</p>
                    <div class="row">
                    @foreach($product_models->where('product_id',$model->product->id)->unique('type_id') as $product_model)
                        @foreach($jacket_products as $jacket_product)
                            @if($jacket_product->type_id === $product_model->type_id)
                            <div class="col-2 d-flex mt-2">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$jacket_product->product->slug])}}">{{$jacket_product->jacket_type->name}}</a>
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="infomation">
        <div class="tab-contral">
            <a href="#overview" id="overview">Overview</a>
            <a href="#application">Application</a>
            <a href="#network_connectivity">Network Connectivity</a>
            <a href="#item-spotlight">Item Spotlight</a>
            <a href="#feature">Feature</a>
            <a href="#videos">Videos</a>
            <a href="#resources">Resources</a>
        </div>
        <div class="tab-contents">
            <h5>Overview</h5>
            <p id="">{!! $model->product->overview !!}</p>
        </div>
        <div class="line" id="application"></div>
            <div class="tab-contents">
                <h5>Application</h5>
                <p>{!! $model->product->application !!}</p>
            </div>
        </div>
        <div class="line" id="network_connectivity"></div>
        <div class="tab-contents">
            <h5>Network Connectivity</h5>

        </div>

        <div class="swiper">
            <div id="swiper-pagination"></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/images/1.jpg" alt="">
                <!-- <div class="carousel-caption d-none d-md-block">
                </div> -->
            </div>
                <div class="swiper-slide"><img src="/images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="/images/3.jpg" alt=""></div>
        </div>

        <script>
            var menu = ['Slide 1', 'Slide 2', 'Slide 3']
            const swiper = new Swiper('.swiper', {
                // If we need pagination
                pagination: {
                    el: '#swiper-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (menu[index]) + '</span>';
                    },
                },
            });
        </script>

        @foreach($network_products->where('product_id',$model->product->id)->unique('network_image_id') as $network_product)
            <p class="card-text"><small class="text-muted">{{$network_product->image_id->type->name}}</small></p>
            <img width="100" height="100"src="{{asset('/images/products')}}/{{$network_product->image_id->image}}">
        @endforeach

        <br>
        @foreach($network_products->where('product_id',$model->product->id) as $network_product)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <p>{{$network_product->image_id->type->name}}</p>
                    <img width="100" height="100"src="{{asset('/images/products')}}/{{$network_product->photo->image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <a href="{{route('product.details',['slug'=>$network_product->photo->slug])}}">{{$network_product->photo->name}}</a>
                    <p class="card-text"><small class="text-muted">{{$network_product->photo->web_price}}</small></p>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="line" id="item-spotlight"></div>
        <div class="tab-contents" id="item-spotlight">
            <h5>Item Spotlight</h5>
            <p>{!! $model->product->item_spotlight !!}</p>
        </div>
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="feature">
            <h5>Feature</h5>
            <p>{!! $model->product->feature !!}</p>
        </div>
        @if(($model->product->videos) == "")
        @else
        <div class="line" id="videos"></div>
            <div class="tab-contents">
                <h5>videos</h5>
                <div class="row">
                    @php
                        $videos = explode(",",$model->product->videos);
                    @endphp
                    @foreach($videos as $video)
                    <div class="col-4 mt-2">
                        <div class="card" style="width: 20rem;">
                            <iframe class="card-img-top" width="350" height="250" src="{{url('/images/products')}}/{{$video}}" sandbox=""></iframe>
                            <div class="card-body">
                                <p class="card-text">{{$video}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="resources">
            <h5>Resources</h5>
            <br>
            <div class="row">
                @if(($model->product->datasheet) == "")
                @else
                    <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> datasheet}}">Datasheet</a></div>
                @endif
                @if(($model->product->firmware) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> firmware}}">Firm ware</a></div>
                @endif
                @if(($model->product->guide) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> guide}}">Guide</a></div>
                @endif
                @if(($model->product->cert) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> cert}}">Certificate</a></div>
                @endif
                @if(($model->product->config) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> config}}">Config</a></div>
                @endif
            </div>
        </div>
    </div>
</div>
