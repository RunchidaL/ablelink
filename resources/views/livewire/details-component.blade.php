<link href="/css/details.css" rel="stylesheet">

<div class="container">
    <div class="row">

        <div class="col">
            <img src="{{asset('/images/products')}}/{{$product -> image}}">
        </div>

        <div class="col" id="right">
            <p>{{$product->name}}</p>
            @if(($product->web_price) == '0')
                <p></p>
            @else
                <p>{{number_format($product->web_price)}}</p>
            @endif
            <p>In stock {{$product->stock}}</p>
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
        </div>
    </div>

    <div class="infomation">
        <div class="tab-contral">
            <a href="#overview" id="overview">Overview</a>
            <a href="#application">Application</a>
            <a href="#network_connectivity">Network Connectivity</a>
            <a href="#item-spotlight">Item Spotlight</a>
            <a href="#feature">Feature</a>
            <a href="#resources">Resources</a>
        </div>
        <div class="tab-contents">
            <h5>Overview</h5>
            <p id="">{!! $product->overview !!}</p>
        </div>
        <div class="line" id="application"></div>
            <div class="tab-contents">
                <h5>Application</h5>
                <p>{!! $product->application !!}</p>
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

        @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
            <p class="card-text"><small class="text-muted">{{$network_product->image_id->type->name}}</small></p>
            <img width="100" height="100"src="{{asset('/images/products')}}/{{$network_product->image_id->image}}">
        @endforeach

        <br>
        @foreach($network_products->where('product_id',$product->id) as $network_product)
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
            <p>{!! $product->item_spotlight !!}</p>
        </div>
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="feature">
            <h5>Feature</h5>
            <p>{!! $product->feature !!}</p>
        </div>
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="resources">
            <h5>Resources</h5>
            <br>
            <div class="row">
                @if(($product->datasheet) == "")
                @else
                    <div class="col"><a href="{{asset('/images/products')}}/{{$product -> datasheet}}">Datasheet</a></div>
                @endif
                @if(($product->firmware) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> firmware}}">Firm ware</a></div>
                @endif
                @if(($product->guide) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> guide}}">Guide</a></div>
                @endif
                @if(($product->cert) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> cert}}">Certificate</a></div>
                @endif
                @if(($product->config) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> config}}">Config</a></div>
                @endif
            </div>
        </div>
    </div>
</div>
