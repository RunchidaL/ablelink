<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <style>
      .container {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 90%;
        height: 180%;
        /* margin-left: auto;
        margin-right: auto; */
      }

      .swiper-wrapper{
          margin:30px 0 30px 0;
      }

      .swiper-slide {
        /* margin: 10% */
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* height: calc((100% - 60px) / 2) !important; */
        height: 40%;

        /* Center slide text vertically */
        /* display: -webkit-box;
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
        align-items: center; */
      }
    </style>

    <!-- Swiper -->
    <div class="container">
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($products as $product)
                <div class="swiper-slide">
                    <div class="card">
                        <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-wrapper">
                            <img src="{{asset('/images/products')}}/{{$product->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                    <p class="card-title">{{$product->slug}}, {{$product->name}}</p>
                                @if(($product->web_price) == '1')
                                @else
                                    <p>฿{{number_format($product->customer_price,2)}}</p>
                                @endif
                            </div>
                            <div class="card-footer">
                                <button type='button' class="button btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->customer_price}})"><span>Add to cart</span></button>
                            </div>
                        </a>    
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        grid: {
          rows: 2
        },
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        }
      });
    </script>
