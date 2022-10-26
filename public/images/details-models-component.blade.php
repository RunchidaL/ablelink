<div class="container flex">
        <div class="swiper w-50">
            <div class="">
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
        </div>
        <div class="info w-50 px-2 py-4 flex flex-col">
            <p class="text-2xl whitespace-none mt-20px">{{$model->name}}
                <span class="text-gray text-base"> #{{$model->slug}}</span>
            </p>
            <div class="pricecard">
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
            <div class="quantity flex mt-20px">
                <div class="add-qty">
                    <input wire:model="qty" class="w-16 h-10 mr-20px text-center text-xl" type="number" min="1" step="1" value="1" max="{{$model->stock}}">
                </div>
                <div class="addtocart" style="display: inline-block;">
                @if($model->stock == 0)
                    <button type='button' class="addToCartButton text-center" style="opacity: 0.5; pointer-events:none;">Add To Cart</button>
                @endif
                @guest
                    @if($model->stock > 0)
                        <a href="{{ route('login') }}"><button class="addToCartButton text-center">Add To Cart</button></button></a>
                    @endif
                @else
                    @if($model->stock > 0)
                        <button wire:click="addToCart({{$model->id}})" class="addToCartButton text-center">Add To Cart</button>
                    @endif
                @endguest
                </div>
            </div>
            @if($model->product->subcategory_id == "7")
                <div class="length flex mt-20px">
                    <p class="flex items-center text-base mr-10px">Length:</p>
                    <span class="add-attribute">
                        <input wire:model.defer="attribute" class="w-16 h-10 mr-10px text-center text-xl">m <span class="text-red text-base">กรุณาใส่ความยาว</span>
</span>
                </div>
            @endif
            <p class="my-10px text-base">Models: </p>
            <div class="w-full scroll-x">
                @php
                    $i = 0; 
                    $count = $product_models->where('product_id',$model->product->id)->count();
                @endphp
                <div class="top flex">
                    @foreach($product_models->where('product_id',$model->product->id) as $product_model)
                    <div class="card">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->name}}</a>
                    </div>
                        @if( $i == (($count+($count%2))/2)-1 && $count > 4)
                            </div>
                            <div class="bottom flex">
                        @endif
                        @php
                            $i++
                        @endphp
                    @endforeach
                </div>
            </div>
            <p class="my-10px text-base">Series test: </p>
            <div class="w-full scroll-x">
                @php
                    $i = 0; 
                    $count = $product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id')->count();
                @endphp
                <div class="top flex">
                    @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                        @if($product_model->series_id == '')
                        @else
                        <div class="card">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->series->name}}</a>
                        </div>
                            @if( $i == (($count+($count%2))/2)-1 && $count > 4)
                                </div>
                                <div class="bottom flex">
                            @endif
                            @php
                                $i++
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>
            <p class="my-10px text-base">Type: </p>
            <div class="w-full scroll-x">
                @php
                    $i = 0; 
                    $count = $product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id')->count();
                @endphp
                <div class="top flex">
                    @foreach($product_models->where('series_id',$model->series_id)->unique('type_id') as $product_model)
                        @if($product_model->type_id == '')
                        @elif( $count > 4)
                            @if( $i <= (($count+($count%2))/2)-1)
                            <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">
                                {{$product_model->typemodels->name}}
                            </a>
                            @endif
                        @else
                        <div class="card">
                            <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">
                                {{$product_model->typemodels->name}}
                            </a>
                        </div>
                        @endif
                        @php
                            $i++
                        @endphp
                            
                    @endforeach
                </div>
                @php
                        $i = 0
                @endphp
                @if($count > 4) 
                <div class="bottom flex">
                @foreach($product_models->where('group_products',$model->product->groupproduct_id)->unique('series_id') as $product_model)
                    @if( $i > (($count+($count%2))/2)-1)
                    <div class="card">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$product_model->slug])}}">{{$product_model->series->name}}</a>
                    </div>
                    @endif
                        @php
                            $i++
                        @endphp
                        
                    @endforeach
                </div>
                @endif
            </div>
        </div>

</div>

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
    /* height: 300px; */
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