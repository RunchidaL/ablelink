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
            @if($model->product->subcategory_id == "7")
                <div class="length">
                    <p>Length:</p>
                    <div class="add-attribute">
                        <input wire:model.defer="attribute"> m <span class="text-danger">กรุณาใส่ความยาว</span>
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
                                $count = $product_models->where('product_id',$model->product->id)->count();
                            @endphp        
                            @foreach($product_models->where('product_id',$model->product->id) as $product_model)
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
                            @foreach($product_models->where('product_id',$model->product->id) as $product_model)
                                <div class="relate-box">
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="series">
                    @if(!empty($product_model->series_id))
                        <p>Series:</p>
                    @endif
                    <div class="relate-group">
                        <div class="relate-wrap mob">
                            <div class="aRow">
                            @php
                                $i = 0;                 
                                $count = $product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id')->count();
                            @endphp
                            @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                                @if(!empty($product_model->series_id))
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
                                @if(!empty($product_model->series_id))
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
                        @if(!empty($product_model->type_id))
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
                        @if(!empty($product_model->jacket_id))
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
            @if(!empty($model->description))
            <a href="#description" id="description">Description</a>
            @endif
            @if($model->overview and empty($model->description))
            <a href="#overview" id="overview">Overview</a>
            @elseif(!empty($model->overview))
            <a href="#overview">Overview</a>
            @endif
            @if(!empty($model->application))
            <a href="#application">Application</a>
            @endif
            @foreach($network_products->where('model_id',$model->id)->unique('model_id') as $network_product)
                @if($network_product->model_id == $model->id)
                <a href="#network_connectivity">Network Connectivity</a>
                @endif
            @endforeach
            @if(!empty($model->item_spotlight))
            <a href="#item-spotlight">Item Spotlight</a>
            @endif
            @if(!empty($model->feature))
            <a href="#feature">Feature</a>
            @endif
            @if(!empty($model->videos))
            <a href="#videos">Videos</a>
            @endif
            @if(!empty($model->datasheet) or !empty($model->firmware) or !empty($model->guide) or !empty($model->cert) or !empty($model->config))
            <a href="#resources">Resources</a>
            @endif
        </div>
        @if(!empty($model->description))
        <div class="tab-contents">
            <h4 class="me"><span>Description</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->description !!}</div>
        </div>
        @endif
        @if(!empty($model->overview))
        <div class="tab-contents">
            @if(!empty($model->description))
            <div class="fake-scroll" id="overview"></div>
            @endif
            @if(!empty($model->description))
            <div class="line"></div>
            @endif
            <h4 class="me"><span>Overview</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->overview !!}</div>
        </div>
        @endif
        @if(!empty($model->application))
        <div class="tab-contents">
            <div class="fake-scroll" id="application"></div>
            <div class="line"></div>
            <h4 class="me"><span>Application</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->application !!}</div>
            
        </div>
        @endif
        @foreach($network_products->where('model_id',$model->id)->unique('model_id') as $network_product)
            @if($network_product->model_id == $model->id)
            <div class="tab-contents">
                <div class="fake-scroll" id="network_connectivity"></div>
                <div class="line"></div>
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
            @endif
        @endforeach
        @if(!empty($model->item_spotlight))
        <div class="tab-contents">
            <div class="fake-scroll" id="item-spotlight"></div>
            <div class="line"></div>
            <h4 class="me"><span>Item Spotlight</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->item_spotlight !!}</div>
        </div>
        @endif
        @if(!empty($model->feature))
        <div class="tab-contents">
            <div class="fake-scroll" id="feature"></div>
            <div class="line"></div>
            <h4 class="me"><span>Feature</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div>{!! $model->feature !!}</div>
        </div>
        @endif
        @if(!empty($model->videos))
        <div class="tab-contents">
            <div class="fake-scroll" id="videos"></div>
            <div class="line"></div>
            <h4 class="me"><span>Videos</span><i class="bi bi-chevron-down arw" id="chevron"></i></h4>
            <div class="video">
                <div class="slide-container4 swiper" id="swipercontainer4">
                    <div class="slide-content4" id="swiper4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <div class="card-wrapper swiper-wrapper">
                            @php
                                $videos = explode(",",$model->videos);
                            @endphp
                            @foreach ($videos as $video)
                            <div class="swiper-slide" id="swiper-slide4">
                                    <div class="card mt-3 mb-3" style="width: 30rem;">
                                        <iframe class="card-img-top" width="345" height="300" src="{{$video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn4" id="next4"></div>
                    <div class="swiper-button-prev swiper-navBtn4" id="prev4"></div>
                    <div class="swiper-pagination" id="pagination4"></div>
                </div>
            </div>
            
        </div>
        @endif
        @if(!empty($model->datasheet) or !empty($model->firmware) or !empty($model->guide) or !empty($model->cert) or !empty($model->config))
        <div class="tab-contents">
            <div class="fake-scroll" id="resources"></div>
            <div class="line"></div>
            <h4>Resources</h4><br>
            <div class="download">
                @if(!empty($model->datasheet))
                    <a href="{{asset('/images/products')}}/{{$model->datasheet}}"><div class="file-detail"><i class="bi bi-file-earmark-pdf"></i> Datasheet</div></a>
                @endif
                @if(!empty($model->firmware))
                    <a href="{{$model->firmware}}"><div class="file-detail"><i class="bi bi-motherboard"></i> Firm ware</div></a>
                @endif
                @if(!empty($model->guide))
                    <a href="{{asset('/images/products')}}/{{$model->guide}}"><div class="file-detail"><i class="bi bi-filetype-pdf"></i> Guide</div></a>
                @endif
                @if(!empty($model->cert))
                    <a href="{{asset('/images/products')}}/{{$model->cert}}"><div class="file-detail"><i class="bi bi-file-check"></i> Certificate</div></a>
                @endif
                @if(!empty($model->config))
                    <a href="{{asset('/images/products')}}/{{$model->config}}"><div class="file-detail"><i class="bi bi-file-earmark-arrow-up"></i> Config</div></a>
                @endif
            </div>
        </div>
        @endif
    </div>
</div>

<script>
    function getACount() {
    return document.getElementsByTagName('a').length;
}
</script>

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
    let meArrow = document.querySelectorAll("p .arw");
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

<script>
    var swiper4 = new Swiper(".slide-content4", {
        slidesPerView: 2,
        spaceBetween: 25,
        slidesPerGroup: 1,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: "#pagination4",
        clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        navigation: {
        nextEl: "#next4",
        prevEl: "#prev4",
        },
        
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            1400: {
                slidesPerView: 2,
            },
        },
    });
</script>

<style>
/* swiper video */
#swipercontainer4{
    width: 100%;
    height: 400px;
    padding: 0px 20px;
}
#swiper4{
    margin: 0 40px;
    overflow: hidden;
    padding: 0% 2% 0% 2%;
}

.swiper-navBtn4{
    color: gray;
    transition: color 0.3s ease;
}

.swiper-navBtn4:hover{
    color: black;
}

.swiper-pagination-bullet{
    width: 20px;
    height: 20px;
    text-align: center;
    line-height: 20px;
    font-size: 12px;
    color: #000;
    opacity: 1;
    background: rgba(0, 0, 0, 0.2);
}

.swiper-pagination-bullet-active{
    color: #fff;
    background: #313131;
}
.fake-scroll{
    height: 30px;
    visibility: hidden;
}


/* swiper image product */
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
    width: 80%;
}

.swiper.mySwiper .swiper-wrapper .swiper-slide img{
    display: block;
    width: 80%;
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

@media screen and (max-width: 1000px) {
    .swiper-navBtn4{
        display: none;
    }
}

@media(max-width: 767px){
    .swiper {
        width: 100%;
    }
    .swiper-slide img {
        display: block;
        width: 90%;
        height: 100%;
    }
    .swiper-button-prev.swiper-navBtn{
        left: 0;
    }
    .swiper-button-next.swiper-navBtn{
        right: 0;
    }
    #swiper4{
    margin: 0 0px;
    overflow: hidden;
    padding: 0% 0% 0% 0%;
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
    }
}
</style>