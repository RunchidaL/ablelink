<div style=" min-height: calc(100vh - 227.5px); width: 100%; display: flex; justify-content: start; align-items: center; flex-direction: column;">
    <div class="container">
        <div>
            <h2 class="text">ผลิตภัณฑ์ทั้งหมด</h2>
        </div>
        <div class="row" id="products">
            @foreach($products as $product)
            <div class="NP-col">
                <div class="card">
                    <a href="{{route('product.detailsmodels',['modelslug'=>$product->slug])}}" class="card-wrapper">
                        <img src="{{asset('/images/products')}}/{{$product->product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                                <p class="card-title">{{$product->name}}</p>
                            @if(($product->web_price) == '1')
                                <p class="empty">฿</p>
                            @else
                                <p>฿{{number_format($product->customer_price,2)}}</p>
                            @endif
                        </div>
                    </a> 
                    <div class="card-footer">
                        <button id="add-cart-button" type='button' class="button btn" data-name="{{$product->slug}}"><span>Add to cart</span></button>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="paginate">
                <div style="text-align: center">{{$products->links()}}</div>
            </div>
        </div>
    </div>
    <div class="add-products-preview" id="add-products-preview">
        @foreach($products as $product)
        <div class="preview" data-target="{{$product->slug}}">
            <i class="bi bi-x-lg"></i>
            <div class="row">
                <div class="col">
                    <img src="{{asset('/images/products')}}/{{$product->product->image}}">
                </div>
                <div class="col">
                    <a href="{{route('product.detailsmodels',['modelslug'=>$product->slug])}}">
                    <h4>{{$product->name}}<span> #{{$product->slug}}</span></h4></a>
                    <div class="head-product-price">
                        <p>฿{{number_format($product->customer_price,2)}}<span> | In stock {{$product->stock}}</span></p>
                    </div><br>
                    @if(($product->product->subCategories->name) == "Cabling")
                    <div class="length">
                        <p>Length:</p>
                        <div class="add-attribute">
                            <input wire:model="attribute"> m
                        </div>
                    </div><br>
                    @endif
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="quantity">
                    <div class="add-qty">
                        <!-- <input >
                        <div class="handle">
                            <span wire:click="increaseQuantity"><button><i class="bi bi-caret-up"></i></button></span>
                            <span wire:click="decreaseQuantity"><button><i class="bi bi-caret-down"></i></button></span>
                        </div> -->
                        <input type="number" min="1" step="1" value="1">
                    </div>
                    <div class="addtocart" style="display: inline-block;">
                        <button wire:click.prevent="addToCart({{$product->id}})">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    let buttons = document.querySelectorAll('#add-cart-button');
    let previews = document.querySelectorAll(".preview");
    buttons.forEach( button =>{
        button.addEventListener("click",()=>{
            console.log("button is clicked",button);
            let name = button.getAttribute('data-name');
            let flag = 0;
            previews[0].parentElement.style.display = "flex";
            previews.forEach(preview => {
                let target = preview.getAttribute('data-target');
                if(target === name) {
                    preview.classList.add("active");
                }
            })
        })
    })

    previews.forEach(close =>{
        close.querySelector('.bi.bi-x-lg').onclick = () =>{
            close.classList.remove('active');
            previews[0].parentElement.style.display = "none";
        };
    });
</script>
