<!-- link -->
<link href="/css/details.css" rel="stylesheet">
<!-- link -->

<div class="container">
    <div class="row top-content">
        <div class="col d-flex align-items-center justify-content-center">
            <img src="{{asset('/images/products')}}/{{$product->image}}">
        </div>
        <div class="col" id="right">
            <p>{{$product->name}}</p>
            @if(($product->web_price) == '0')
                <p></p>
            @else
                <p>฿{{number_format($product->web_price)}}</p>
            @endif
            <p>In stock {{$product->stock}}</p>
            <div class="quantity">
                <input value="1">
                <div class="handle">
                    <a href="#"><button><i class="bi bi-caret-up"></i></button></a>
                    <a href="#"><butoon><i class="bi bi-caret-down"></i></butoon></a>
                </div>
                <div class="addtocart" style="display: inline-block;">
                <form action="{{route('product.addCart',['product_id'=>$product->id,'product_name'=>$product->name,'product_price'=>$product->web_price])}}" method="POST">
                    @csrf
                    <button type='submit'>Add To Cart</button>
                </form>
                </div> 
            </div>
            <div class="relate-product">
                <div class="models"><br>
                    <p>Models:</p>
                    <div class="row">
                        <div class="col d-flex">
                            @foreach($product_models->where('product_id',$product->id) as $product_model)
                            <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div><br>
                <div class="series">
                    <p>Series:</p>
                    <div class="row">
                        <div class="col d-flex">
                            @foreach($product_models->where('group_products',$product->groupproduct_id)->unique('series_id') as $product_model)
                            <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$product_model->product->slug])}}">{{$product_model->series->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div><br>
                <div class="types">
                    @foreach($product_models->where('product_id',$product->id)->unique('series_id') as $product_model)
                        @if($product_model->type_id == '')
                        @else
                        <p>Types:</p>
                        @endif
                    @endforeach
                    <div class="row">
                    @foreach($product_models->where('product_id',$product->id)->unique('series_id') as $product_model)
                        @foreach($types as $type)
                            @if($type->series_id === $product_model->series_id)
                            <div class="col d-flex">
                                <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$type->product->slug])}}">{{$type->name}}</a>
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div><br>
                <div class="jacket">
                    @foreach($product_models->where('product_id',$product->id)->unique('type_id') as $product_model)
                        @if($product_model->jacket_id == '')
                        @else
                            <p>Jacket Types:</p>
                        @endif
                    @endforeach
                    <div class="row">
                    @foreach($product_models->where('product_id',$product->id)->unique('type_id') as $product_model)
                        @foreach($jacket_products as $jacket_product)
                            @if($jacket_product->type_id === $product_model->type_id)
                            <div class="col d-flex">
                                <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$jacket_product->product->slug])}}">{{$jacket_product->jacket_type->name}}</a>
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div3 class="infomation">
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
            <h4>Overview</h4>
            <p id="">{!! $product->overview !!}</p>
        </div>
        
        
        <div class="tab-contents">
            <div class="line" id="application"></div>
            <h4>Application</h4>
            <p>{!! $product->application !!}</p>
        </div>
        
        
        <div class="tab-contents">
            <div class="line" id="network_connectivity"></div>
            <h4>Network Connectivity</h4>

        <!-- oum -->
        <!-- @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
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
        @endforeach -->
        <!-- oum -->


        <!-- sui -->
            <div class="menu-wrap">
                <ul class="menu-list" id="menu-list">
                    @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
                        <li class="menu">{{$network_product->image_id->type->name}}</li>
                    @endforeach
                </ul>
            </div> 
            
            <div class="content"> 
            
                <div class="wrapper">
                @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
                    <div id="item{{$loop->index}}" class="item">
                        <img src="{{asset('/images/products')}}/{{$network_product->image_id->image}}">
                        <div class="tag-list">
                            <div class="tag-item">
                                <a href="#"><img src="{{asset('/images/products')}}/{{$network_product->photo->image}}" class="img-fluid rounded-start" alt="..."></a>
                                <div>
                                    <a href="#" class="name">{{$network_product->photo->name}}</a>
                                    <div class="price">฿{{number_format($network_product->photo->web_price)}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach  
                </div>
            </div>
        </div>
    
        <div class="tab-contents">
            <div class="line" id="item-spotlight"></div>
            <h4>Item Spotlight</h4>
            <p>{!! $product->item_spotlight !!}</p>
        </div>
        
        
        <div class="tab-contents" >
            <div class="line" id="feature"></div>
            <h4>Feature</h4>
            <p>{!! $product->feature !!}</p>
        </div>
        @if(($product->videos) == "")
        @else
            <div class="tab-contents">
                <div class="line" id="videos"></div>
                <h4>videos</h4>
                <div class="row">
                    @php
                        $videos = explode(",",$product->videos);
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
        <div class="tab-contents" id="resources">
            <div class="line" id="feature"></div>
            <h4>Resources</h4>
            <br>
            <div class="row">
                @if(($product->datasheet) == "")
                @else
                    <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> datasheet}}">Datasheet</a></div>
                @endif
                @if(($product->firmware) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> firmware}}">Firm ware</a></div>
                @endif
                @if(($product->guide) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> guide}}">Guide</a></div>
                @endif
                @if(($product->cert) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> cert}}">Certificate</a></div>
                @endif
                @if(($product->config) == "")
                @else
                <div class="col d-flex"><a href="{{asset('/images/products')}}/{{$product -> config}}">Config</a></div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
let menu = document.querySelectorAll(".menu-list .menu");
let content = document.querySelectorAll(".wrapper .item");
console.log(content)
for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", () => {
        console.log(i,menu[i],content[i]);
        content[i].style.display = ("flex");
        menu[i].classList.add("active");
        for (let n=0 ; n<menu.length; n++){
            if(n!=i) {
            menu[n].classList.remove("active");
            content[n].style.display = ("none");
            }
        }
    });
}
</script>
