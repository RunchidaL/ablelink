<!-- 2loop -->
<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->

<div>
    @if($scategory_slug == '')
        <h2 class="text">{{$category->name}}</h2>
    @else
        <h2 class="text">{{$scategory->name}}</h2>
    @endif
</div>
<div class="slide-container swiper">
    <div class="slide-content" style="padding: 3% 2% 3% 2%">
        <div class="card-wrapper swiper-wrapper">
        @foreach($products as $product)
            @foreach($models->where('product_id',$product->id)->unique('product_id') as $model)
            <div class="card swiper-slide">
                <div class="image-content">
                    <div class="card-image">
                        <a href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}"><img class="card-img" src="{{asset('/images/products')}}/{{$model->product->image}}" width="100%" height="100%"/></a>
                    </div>
                </div>
                <div class="card-content">
                    <a style="text-decoration: none" href="{{route('product.detailsmodels',['modelslug'=>$model->slug])}}"><h2 class="name">{{$model->slug}}, {{$model->name}}</h2></a>
                    <p style="height: 30px">{{$model->web_price}}</p>
                    
                </div>
            </div>
            @endforeach
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
        slidesPerView: 4,
        spaceBetween: 40,
        // loop: true,
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
        slidesPerGroup: 4, 
        breakpoints:{
            0: {
                slidesPerView: 2,
                slidesPerGroup: 2, 
            },
            520: {
                slidesPerView: 2,
                slidesPerGroup: 2, 
            },
            950: {
                slidesPerView: 3,
                slidesPerGroup: 3, 
            },
            1300: {
                slidesPerView: 4,
                slidesPerGroup: 4, 
            },
            1600: {
                slidesPerView: 5,
                slidesPerGroup: 5, 
            },
        },
    });
</script>
@endpush