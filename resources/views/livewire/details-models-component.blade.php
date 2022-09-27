<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
    @endif
    @error('attribute') <div class="alert alert-danger" role="alert">กรุณาใส่ความยาว</div> @enderror
    <div class="row justify-content-center align-items-start" id="row-product">
        <div class="leftProduct" id="left-product">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('/images/products')}}/{{$model->image}}"/>
                    </div>  
                    @php
                        $pimages = explode(",",$model->images);
                    @endphp
                    @foreach($pimages as $pimage)
                        @if($pimage)
                        <div class="swiper-slide">
                            <img src="{{asset('/images/products')}}/{{$pimage}}"/>
                        </div>    
                        @endif
                    @endforeach
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
            </div>

            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('/images/products')}}/{{$model->image}}"/>
                    </div>  
                    @php
                        $pimages = explode(",",$model->images);
                    @endphp
                    @foreach($pimages as $pimage)
                        @if($pimage)
                        <div class="swiper-slide">
                            <img src="{{asset('/images/products')}}/{{$pimage}}"/>
                        </div>    
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-4 rightProduct" id="right-product">
            <div class="head-product">
                <div class="head-product-name">
                    <p>{{$model->name}}<span> #{{$model->slug}}</span></p>
                </div>
                <div class="head-product-price">
                @guest
                    @if(($model->web_price) == '1')
                        <p><span>In stock {{$model->stock}}</span></p>
                    @else
                        <p>฿{{number_format($model->customer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                    @endif
                @else
                    @if(Auth::user()->role == 1)
                        @if(($model->web_price) == '1')
                            <p><span>In stock {{$model->stock}}</span></p>
                        @else
                            <p>฿{{number_format($model->customer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                        @endif
                    @elseif(Auth::user()->role == 2)
                        <p>฿{{number_format($model->dealer_price,2)}}<span> | In stock {{$model->stock}}</span></p>
                    @elseif(Auth::user()->role == 3)
                        <p>฿{{number_format($model->customer_price,2)}}, <span style="font-size:24px; color:red;">฿{{number_format($model->dealer_price,2)}}</span><span> | In stock {{$model->stock}}</span></p>
                    @endif
                @endguest
                </div>
            </div>
            <div class="quantity">
                <div class="add-qty">
                    <input wire:model="qty" type="number" min="1" step="1" value="1" max="{{$model->stock}}">
                </div>
                <div class="addtocart" style="display: inline-block;">
                @if($model->stock == 0)
                    <button type='button' class="button btn" style="opacity: 0.5; pointer-events:none;">Add To Cart</button>
                @endif
                @guest
                    @if($model->stock > 0)
                        <a href="{{ route('login') }}"><button>Add To Cart</button></button></a>
                    @endif
                @else
                    @if($model->stock > 0)
                        <button wire:click="addToCart({{$model->id}})">Add To Cart</button>
                    @endif
                @endguest
                </div>
            </div>
            @if(($model->product->subCategories->name) == "Cabling")
                <div class="length">
                    <p>Length:</p>
                    <div class="add-attribute">
                        <input wire:model.defer="attribute"> m @error('attribute') <span class="text-danger">กรุณาใส่ความยาว</span> @enderror
                    </div>
                </div>
            @endif
            <div class="relate-product">
                <div class="models">
                    <p>Models:</p>
                    <div class="relate-group">
                        <div class="relate-wrap mob">
                            <div class="aRow">
                            @php
                                $i = 0; 
                                $count = $product_models->where('product_id',$model->product->id)->unique('models_id')->count();
                            @endphp        
                            @foreach($product_models->where('product_id',$model->product->id)->unique('models_id') as $product_model)
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                                </div>
                                @if( $i == (($count+($count%2))/2)-1 && $count > 4)
                            </div>
                            <div class="aRow">
                                @endif
                                @php
                                    $i++
                                @endphp
                            @endforeach
                            </div>
                        </div>
                        <div class="relate-wrap pc">
                            <div class="aRow">       
                            @foreach($product_models->where('product_id',$model->product->id)->unique('models_id') as $product_model)
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="series">
                    <p>Series:</p>
                    <div class="relate-group">
                        <div class="relate-wrap mob">
                            <div class="aRow">
                            @php
                                $i = 0;                 
                                $count = $product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id')->count();
                            @endphp
                            @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                                @if($product_model->series_id == '')
                                @else
                                    <div class="relate-box">
                                        <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->series->name}}</a>
                                    </div>
                                    @if( $i == (($count+($count%2))/2)-1 && $count > 4)  
                                    </div><div class="aRow">
                                    @endif
                                    @php
                                        $i++
                                    @endphp
                                @endif            
                            @endforeach
                            </div>   
                        </div>  
                        <div class="relate-wrap pc">
                            <div class="aRow">
                            @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                                @if($product_model->series_id == '')
                                @else
                                    <div class="relate-box">
                                        <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->series->name}}</a>
                                    </div>
                                @endif            
                            @endforeach
                            </div>   
                        </div>
                    </div>
                </div>
                
                <div class="types">
                    @php
                        $i = 0; 
                        $count = $product_models->where('series_id',$model->series_id)->unique('series_id')->count();
                    @endphp
                    @foreach($product_models->where('series_id',$model->series_id)->unique('series_id') as $product_model)
                        @if($product_model->type_id == '')
                        @else
                        <p>Types:</p>
                        @endif
                    @endforeach
                    <div class="relate-group">
                        <div class="relate-wrap mob">
                            <div class="aRow">
                            @foreach($product_models->where('series_id',$model->series_id)->unique('type_id') as $product_model)
                                @if($product_model->type_id == '')
                                @else
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->typemodels->name}}</a>
                                </div>
                                @if( $i == (($count+($count%2))/2)-1 && $count > 4)
                            </div>
                            <div class="aRow">
                                @endif
                                    @php
                                        $i++
                                    @endphp
                                @endif
                            @endforeach
                            </div>
                        </div>
                        <div class="relate-wrap pc">
                            <div class="aRow">
                            @foreach($product_models->where('series_id',$model->series_id)->unique('type_id') as $product_model)
                                @if($product_model->type_id == '')
                                @else
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->typemodels->name}}</a>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jacket">
                    @php
                        $i = 0; 
                        $count = $product_models->where('product_id',$model->product->id)->unique('type_id')->count();
                    @endphp
                    @foreach($product_models->where('product_id',$model->product->id)->unique('type_id') as $product_model)
                        @if($product_model->jacket_id == '')
                        @else
                            <p>Jacket Types:</p>
                        @endif
                    @endforeach
                    <div class="relate-group">
                        <div class="relate-wrap">
                            <div class="aRow">
                            @foreach($product_models->where('type_id',$model->type_id)->unique('jacket_id') as $product_model)
                                @if($product_model->jacket_id == '')
                                @else
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->jacket->name}}</a>
                                </div>
                                
                                    @if( $i == (($count+($count%2))/2)-1 && $count > 4)
                            </div>
                            <div class="aRow">
                                    @endif
                                    @php
                                        $i++
                                    @endphp
                                @endif         
                            @endforeach
                            </div>
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
            <h4 class="me"><span>Overview</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->overview !!}</div>
        </div>

        <div class="tab-contents">
            <div class="line" id="application"></div>
            <h4 class="me"><span>Application</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->application !!}</div>
        </div>

        <div class="tab-contents">
            <div class="line" id="network_connectivity"></div>
            <h4 class="me"><span>Network Connectivity</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>
                <div class="menu-wrap">
                    <ul class="menu-list" id="menu-list">
                        @foreach($network_products->where('model_id',$model->id)->unique('network_image_id') as $network_product)
                            <li class="menu">{{$network_product->image_id->type->name}}</li>
                        @endforeach
                    </ul>
                </div> 
                
                <div class="content"> 
                    <div class="wrapper">
                    @foreach($network_images as $network_image)
                        @foreach($network_products->where('model_id',$model->id)->unique('network_image_id') as $network_product)
                            @if($network_image->id == $network_product->network_image_id)
                            <div id="item{{$loop->index}}" class="item">
                                <img src="{{asset('/images/products')}}/{{$network_image->image}}">
                                <div class="tag-list">
                                    @foreach($network_products->where('model_id',$model->id) as $network_product)
                                        @if($network_image->id == $network_product->network_image_id)
                                            <div class="tag-item">
                                                <a href="{{route('product.detailsmodels',['modelslug'=>$network_product->photo->slug])}}"><img src="{{asset('/images/products')}}/{{$network_product->photo->image}}" class="img-fluid rounded-start" alt="..."></a>
                                                <div>
                                                    <a href="{{route('product.detailsmodels',['modelslug'=>$network_product->photo->slug])}}" class="name">{{$network_product->photo->slug}}, {{$network_product->photo->name}}</a>
                                                    @guest
                                                        @if(($model->web_price) == '0') 
                                                        <div class="price">฿{{number_format($network_product->photo->customer_price,2)}}</div>
                                                        @endif
                                                    @else
                                                        @if(Auth::user()->role == 1)
                                                            @if(($model->web_price) == '0')
                                                            <div class="price">฿{{number_format($network_product->photo->customer_price,2)}}</div>
                                                            @endif
                                                        @elseif(Auth::user()->role == 2)
                                                        <div class="price">฿{{number_format($network_product->photo->dealer_price,2)}}</div>
                                                        @elseif(Auth::user()->role == 3)
                                                        <div class="price">฿{{number_format($network_product->photo->customer_price,2)}}, {{number_format($network_product->photo->dealer_price,2)}}</div>
                                                        @endif
                                                    @endguest
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
        </div>

        <div class="tab-contents">
            <div class="line" id="item-spotlight"></div>
            <h4 class="me"><span>Item Spotlight</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            
            <div>{!! $model->item_spotlight !!}</div>
        </div>

        <div class="tab-contents">
            <div class="line" id="feature"></div>
            <h4 class="me"><span>Feature</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->feature !!}</div>
        </div>
            @if(($model->videos) == "")
            @else
            <div class="tab-contents">
                <div class="line" id="videos"></div>
                <h4 class="me"><span>Videos</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
                <div class="video">
                    @php
                        $videos = explode(",",$model->videos);
                    @endphp
                    @foreach($videos as $video)
                        <div class="file-detail">
                            <div class="card" style="width: 35rem;">
                                <iframe class="card-img-top" width="350" height="300" src="{{$video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="tab-contents" id="resources">
            <div class="line" id="feature"></div>
            <h4>Resources</h4><br>
            <div class="download">
                @if(($model->datasheet) == "")
                @else
                    <a href="{{asset('/images/products')}}/{{$model->datasheet}}"><div class="file-detail"><i class="bi bi-file-earmark-pdf"></i> Datasheet</div></a>
                @endif
                @if(($model->firmware) == "")
                @else
                
                    <a href="{{asset('/images/products')}}/{{$model->firmware}}"><div class="file-detail"><i class="bi bi-motherboard"></i> Firm ware</div></a>
                @endif
                @if(($model->guide) == "")
                @else
                
                    <a href="{{asset('/images/products')}}/{{$model->guide}}"><div class="file-detail"><i class="bi bi-filetype-pdf"></i> Guide</div></a>
                @endif
                @if(($model->cert) == "")
                @else
                    <a href="{{asset('/images/products')}}/{{$model->cert}}"><div class="file-detail"><i class="bi bi-file-check"></i> Certificate</div></a>
                @endif
                @if(($model->config) == "")
                @else
                    <a href="{{asset('/images/products')}}/{{$model->config}}"><div class="file-detail"><i class="bi bi-file-earmark-arrow-up"></i> Config</div></a>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
let menu = document.querySelectorAll(".menu-list .menu");
let content = document.querySelectorAll(".wrapper .item");
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

<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        thumbs: {
        swiper: swiper,
        },
    });
    let meArrow = document.querySelectorAll("h4 .arw");
    let h4 = document.querySelectorAll("h4.me");
    for (let i = 0; i < h4.length; i++) {
        h4[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("tog");
        for(let l = 0 ; l < meArrow.length; l++){
            if(l!=i){
                h4[l].parentElement.classList.remove("tog");
            }
        }
        });
    }
</script>

<style>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide{
    text-align: center;
    font-size: 18px;
    background: #fff;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img{
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
}

.swiper{
    width: 70%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
}

.swiper-slide{
    background-size: cover;
    background-position: center;
}

.mySwiper2 {
    height: 80%;
    width: 100%;
}
.mySwiper{
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
}

.mySwiper .swiper-slide{
    width: 25%;
    height: 100%;
    opacity: 0.3;
}

.mySwiper .swiper-slide-thumb-active{
    opacity: 1;
}

.swiper-slide img {
    display: block;
    width: 30em;
    height: 30em;
    object-fit: cover;
}

.swiper.mySwiper .swiper-wrapper .swiper-slide img{
    display: block;
    width: 5em;
    height: 5em;
    object-fit: cover;
}

.swiper-button-next,.swiper-button-prev{
    color: gray;
}

.swiper-navBtn{
    color: gray;
    transition: color 0.3s ease;
}

.swiper-navBtn:hover{
    color: black;
}

@media(max-width: 767px){
    .swiper {
        width: 100%;
    }
    .swiper-slide img {
        display: block;
        width: 90%;
        height: 100%;
        object-fit: cover;
    }
    .swiper-button-prev.swiper-navBtn{
        left: 0;
    }
    .swiper-button-next.swiper-navBtn{
        right: 0;
    }
}

@media(max-width: 520px){
    .swiper.mySwiper .swiper-wrapper .swiper-slide img{
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .swiper {
        width: 100%;
    }
    .swiper-slide img {
        display: block;
        width: 80%;
        height: 100%;
        object-fit: cover;
    }
}
</style>