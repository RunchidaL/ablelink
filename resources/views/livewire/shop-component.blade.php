<div>
    <h2 class="text">สินค้าทั้งหมด</h2>
</div>
<div class="slide-container swiper">
    <div class="slide-content" style="padding: 3% 2% 3% 2%">
        <div class="card-wrapper swiper-wrapper">
            @foreach($products as $product)
            <div class="card swiper-slide">
                <div class="image-content">
                    <div class="card-image">
                        <a href="{{route('product.details',['slug'=>$product->slug])}}"><img class="card-img" src="{{asset('/images/products')}}/{{$product->image}}" width="100%" height="100%"/></a>
                    </div>
                </div>
                <div class="card-content">
                    <a style="text-decoration: none" href="{{route('product.details',['slug'=>$product->slug])}}"><h2 class="name">{{$product->slug}}, {{$product->name}}</h2></a>
                    <p style="height: 30px">{{$product->web_price}}</p>
                    <a id="button" style="text-decoration: none;" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->customer_price}})">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>


@push('scripts')
<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 5,
        spaceBetween: 40,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        slidesPerGroup:5, 
        breakpoints:{
            0: {
                slidesPerView: 2,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
            1300: {
                slidesPerView: 5,
            },
            1600: {
                slidesPerView: 5,
            },
        },
    });
</script>
@endpush




