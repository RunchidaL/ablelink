<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            <h2 class="text">สินค้าทั้งหมด</h2>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach($products->unique('product_id') as $product)
                    <div class="card swiper-slide">
                            <div class="card">
                                <a href="{{route('product.detailsmodels',['modelslug'=>$product->product->slug])}}"><img class="card-img" src="{{asset('/images/products')}}/{{$product->product->image}}"></a>
                            </div>
                            <a style="text-decoration: none" href="#"><h2 class="name">{{$product->slug}}, {{$product->name}}</h2></a>
                            <a id="button" style="text-decoration: none;" href="#">Add to cart</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 5,
        spaceBetween: 50,
        loop: false,
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
    });
</script>
@endpush
