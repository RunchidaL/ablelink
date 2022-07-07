<div class="container">
    <div class="row top-content">
        <div class="col d-flex align-items-center justify-content-center">
            <img src="{{asset('/images/products')}}/{{$model->product->image}}">
        </div>
        <div class="col" id="right">
            <p>{{$model->name}}</p>
            @if(($model->web_price) == '0')
                <p></p>
            @else
                <p>{{number_format($model->web_price,2)}}</p>
            @endif
            <p>In stock {{$model->stock}}</p>
            <div class="quantity">
                <input wire:model="qty" pattern="[0-9]*">
                <div class="handle">
                    <a wire:click.prevent="increaseQuantity"><button><i class="bi bi-caret-up"></i></button></a>
                    <a wire:click.prevent="decreaseQuantity"><butoon><i class="bi bi-caret-down"></i></butoon></a>
                </div>
                <div class="addtocart" style="display: inline-block;">
                    <button wire:click.prevent="store({{$model->id}},'{{$model->name}}',{{$model->customer_price}})">Add To Cart</button>
                </div> 
            </div>
            <div class="relate-product">
                <div class="models"><br>
                    <p>Models:</p>
                    <div class="row">
                        <div class="col d-flex">
                            @foreach($product_models->where('product_id',$model->product->id) as $product_model)
                            <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$product_model->product->slug])}}">{{$product_model->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div><br>
                <div class="series">
                    <p>Series:</p>
                    <div class="row">
                        <div class="col d-flex">
                            @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                            <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->series->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div><br>
                <div class="types">
                    <p>Types:</p>
                    <div class="row">
                        <div class="col d-flex">
                                @foreach($product_models->where('product_id',$model->product->id)->unique('series_id') as $product_model)
                                    @foreach($types as $type)
                                        @if($type->series_id === $product_model->series_id)
                                        <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$type->product->slug])}}">{{$type->name}}</a>
                                        @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div><br>
                <div class="jacket">
                    <p>Jacket Types:</p>
                    <div class="row">
                        <div class="col d-flex">
                            @foreach($product_models->where('product_id',$model->product->id)->unique('type_id') as $product_model)
                                @foreach($jacket_products as $jacket_product)
                                    @if($jacket_product->type_id === $product_model->type_id)
                                    <a class="relate-box" href="{{route('product.detailsmodels',['modelslug'=>$jacket_product->product->slug])}}">{{$jacket_product->jacket_type->name}}</a>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
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
            <h4>Overview</h4>
            <p id="">{!! $model->product->overview !!}</p>
        </div>

        <div class="tab-contents">
            <div class="line" id="application"></div>
            <h4>Application</h4>
            <p>{!! $model->product->application !!}</p>
        </div>

        <div class="tab-contents">
            <div class="line" id="network_connectivity"></div>
            <h4>Network Connectivity</h4>
            <div class="menu-wrap">
                <ul class="menu-list" id="menu-list">
                    @foreach($network_products->where('product_id',$model->product->id)->unique('network_image_id') as $network_product)
                        <li class="menu">{{$network_product->image_id->type->name}}</li>
                    @endforeach
                </ul>
            </div> 
            
            <div class="content"> 
                <div class="wrapper">
                @foreach($network_products->where('product_id',$model->product->id) as $network_product)
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
            <p>{!! $model->product->item_spotlight !!}</p>
        </div>

        <div class="tab-contents" >
            <div class="line" id="feature"></div>
            <h4>Feature</h4>
            <p>{!! $model->product->feature !!}</p>
        </div>
        @if(($model->product->videos) == "")
        @else
            <div class="tab-contents">
                <div class="line" id="videos"></div>
                <h4>videos</h4>
                <div class="row">
                    @php
                        $videos = explode(",",$model->product->videos);
                    @endphp
                    @foreach($videos as $video)
                        @if($video)
                        <div class="col-4 mt-2">
                            <div class="card" style="width: 20rem;">
                                <iframe class="card-img-top" width="350" height="250" src="{{url('/images/products')}}/{{$video}}" sandbox=""></iframe>
                                @php
                                    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $video);
                                @endphp
                                <div class="card-body">
                                    <p class="card-text">{{$withoutExt}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
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

