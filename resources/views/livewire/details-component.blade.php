<div class="container">
    <div class="row justify-content-center align-items-start" id="row-product">
        <div class="leftProduct" id="left-product">
            <img src="{{asset('/images/products')}}/{{$product->image}}">
            <div class="gallery">
                @if(($product->images) == "")
                @else
                    @php
                        $pimages = explode(",",$product->images);
                    @endphp
                    @foreach($pimages as $pimage)
                        @if($pimage)
                            <img src="{{asset('/images/products')}}/{{$pimage}}"/>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-4 rightProduct" id="right-product">
            <div class="head-product">
                <div class="head-product-name">
                    <p>{{$product->name}}<span> #{{$product->slug}}</span></p> 
                </div>
                <div class="head-product-price">
                    @if(($product->web_price) == '1')
                        <p><span>In stock {{$product->stock}}</span></p>
                    @else
                        <p>฿{{number_format($product->customer_price,2)}}<span> | In stock {{$product->stock}}</span></p>
                    @endif
                </div>
            </div>
            <div class="quantity">
                <div class="add-qty">
                    <input wire:model="qty">
                    <div class="handle">
                        <a wire:click.prevent="increaseQuantity"><button><i class="bi bi-caret-up"></i></button></a>
                        <a wire:click.prevent="decreaseQuantity"><button><i class="bi bi-caret-down"></i></button></a>
                    </div>
                </div>
                <div class="addtocart" style="display: inline-block;">
                    <button wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->customer_price}})">Add To Cart</button>
                </div> 
            </div>
            <div class="relate-product">
                <div class="models">
                    <p>Models:</p>
                    <div class="relate-group">
                        @foreach($product_models->where('product_id',$product->id) as $product_model)
                            <div class="relate-box">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="series">
                    <p>Series:</p>
                    <div class="relate-group">
                        @foreach($product_models->where('group_products',$product->groupproduct_id)->unique('series_id') as $product_model)
                            <div class="relate-box">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->product->slug])}}">{{$product_model->series->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="types">
                    @foreach($product_models->where('product_id',$product->id)->unique('series_id') as $product_model)
                        @if($product_model->type_id == '')
                        @else
                        <p>Types:</p>
                        @endif
                    @endforeach
                    <div class="relate-group">
                        @foreach($product_models->where('product_id',$product->id)->unique('series_id') as $product_model)
                            @foreach($types as $type)
                                @if($type->series_id === $product_model->series_id)
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$type->product->slug])}}">{{$type->name}}</a>
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="jacket">
                    @foreach($product_models->where('product_id',$product->id)->unique('type_id') as $product_model)
                        @if($product_model->jacket_id == '')
                        @else
                            <p>Jacket Types:</p>
                        @endif
                    @endforeach
                    <div class="relate-group">
                        @foreach($product_models->where('product_id',$product->id)->unique('type_id') as $product_model)
                            @foreach($jacket_products as $jacket_product)
                                @if($jacket_product->type_id === $product_model->type_id)
                                <div class="relate-box">
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
            <div class="menu-wrap">
                <ul class="menu-list" id="menu-list">
                    @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
                        <li class="menu">{{$network_product->image_id->type->name}}</li>
                    @endforeach
                </ul>
            </div> 
            
            <div class="content"> 
                <div class="wrapper">
                @foreach($network_images as $network_image)
                    @foreach($network_products->where('product_id',$product->id)->unique('network_image_id') as $network_product)
                        @if($network_image->id == $network_product->network_image_id)
                        <div id="item{{$loop->index}}" class="item">
                            <img src="{{asset('/images/products')}}/{{$network_image->image}}">
                            <div class="tag-list">
                                @foreach($network_products->where('product_id',$product->id) as $network_product)
                                    @if($network_image->id == $network_product->network_image_id)
                                        <div class="tag-item">
                                            <a href="{{route('product.details',['slug'=>$network_product->photo->slug])}}"><img src="{{asset('/images/products')}}/{{$network_product->photo->image}}" class="img-fluid rounded-start" alt="..."></a>
                                            <div>
                                                <a href="{{route('product.details',['slug'=>$network_product->photo->slug])}}" class="name">{{$network_product->photo->name}}</a>
                                                <div class="price">฿{{number_format($network_product->photo->customer_price,2)}}</div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                    @endforeach
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
                <h4>Videos</h4>
                <div class="video">
                    @php
                        $videos = explode(",",$product->videos);
                    @endphp
                    @foreach($videos as $video)
                        @if($video)
                            <div class="file-detail">
                                <div class="card" style="width: 20rem;">
                                    <iframe class="card-img-top" width="350" height="250" src="{{url('/images/products')}}/{{$video}}"></iframe>
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
            <div class="download">
                @if(($product->datasheet) == "")
                @else
                <div class="file-detail">
                    <a href="{{asset('/images/products')}}/{{$product -> datasheet}}"><i class="bi bi-file-earmark-pdf"></i> Datasheet</a>
                </div>
                @endif
                @if(($product->firmware) == "")
                @else
                <div class="file-detail">
                    <a href="{{asset('/images/products')}}/{{$product -> firmware}}"><i class="bi bi-motherboard"></i> Firm ware</a>
                </div>
                @endif
                @if(($product->guide) == "")
                @else
                <div class="file-detail">
                    <a href="{{asset('/images/products')}}/{{$product -> guide}}"><i class="bi bi-filetype-pdf"></i> Guide</a>
                </div>
                @endif
                @if(($product->cert) == "")
                @else
                <div class="file-detail">
                    <a href="{{asset('/images/products')}}/{{$product -> cert}}"><i class="bi bi-file-check"></i> Certificate</a>
                </div>
                @endif
                @if(($product->config) == "")
                @else
                <div class="file-detail">
                    <a href="{{asset('/images/products')}}/{{$product -> config}}"><i class="bi bi-file-earmark-arrow-up"></i> Config</a>
                </div>
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