<!-- link -->
<link href="/css/shop.css" rel="stylesheet">
<!-- link -->


<!-- old -->
<div class="productNav">
    @foreach($categories as $category)
    <a href="{{route('product.category',['category_slug'=> $category->slug])}}">{{$category->name}}</a>
    @endforeach
</div>
<div class="choices">
    @foreach($categories as $category)
        @foreach($category->subCategories as $scategory)
        <div class="one-box">
            <div><a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></div>
        </div>
        @endforeach
    @endforeach
</div>

<!-- new -->
<!-- <div class="productNav">
    @foreach($categories as $category)
    <a href="{{route('product.category',['category_slug'=> $category->slug])}}">{{$category->name}}</a>
        @if(count($category->subCategories)>0)
            <span class="toggle-control">+</span>
            <ul class="sub-cate">
                @foreach($category->subCategories as $scategory)
                    <li class="one-box">
                        <div><a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></div>
                    </li>
                @endforeach 
            </ul>
        @endif
    @endforeach
</div> -->


<!-- <div>
    <p class="text">สินค้าทั้งหมด</p>
</div> -->
<div class="container-fluid">
    <div class="row">
        @foreach($products as $product)
        <div class="NP-col">
            <div class="card">
                <img src="{{asset('/images/products')}}/{{$product -> image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{route('product.details',['slug'=>$product->slug])}}" class="card-title">{{$product -> name}}</a>
                    <p class="card-text">{{$product -> web_price}}</p>
                    <a href="#" class="btn btn">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- <div class="choices">
    <div class="one-box">
        <div>Switch SMRT/L2/L3/L4</div>
    </div>
    <div class="one-box">
        <div>Industrail Switch</div>
    </div>
    <div class="one-box">
        <div>Wireless</div>
    </div>
    <div class="one-box">
        <div>Cabling</div>
    </div>
    <div class="one-box">
        <div>SFP</div>
    </div>
    <div class="one-box">
        <div>Industrail Automation</div>
    </div>
    <div class="one-box">
        <div>Media Converter</div>
    </div>
    <div class="one-box">
        <div>WireMesh and FiberTray</div>
    </div>
</div> -->
<!-- <div class="choices">
    <div class="one-box">
        <div>Switch SMRT/L2/L3/L4</div>
    </div>
    <div class="one-box">
        <div>Industrail Switch</div>
    </div>
    <div class="one-box">
        <div>Wireless</div>
    </div>
    <div class="one-box">
        <div>Cabling</div>
    </div>
    <div class="one-box">
        <div>SFP</div>
    </div>
    <div class="one-box">
        <div>Industrail Automation</div>
    </div>
    <div class="one-box">
        <div>Media Converter</div>
    </div>
    <div class="one-box">
        <div>WireMesh and FiberTray</div>
    </div>
</div>  -->
<!-- <div class="choices">
    <div class="one-box">
        <div>Router 4g</div>
    </div>
    <div class="one-box">
        <div>Smart lot</div>
    </div>
</div>  -->
<!-- <div class="choices">
    <div class="one-box">
        <div>UTP</div>
    </div>
    <div class="one-box">
        <div>Fiber</div>
    </div>
    <div class="one-box">
        <div>HDMI/LAN/Wireless</div>
    </div>
</div>  -->
<!-- <div class="choices">
    <div class="one-box">
        <div>UPS Tower</div>
    </div>
    <div class="one-box">
        <div>UPS Rack</div>
    </div>
    <div class="one-box">
        <div>Power Supply</div>
    </div>
    <div class="one-box">
        <div>Surge</div>
    </div>
</div>  -->
<!-- <div class="choices">
    <div class="one-box">
        <div>Ip audio</div>
    </div>
    <div class="one-box">
        <div>VOIP</div>
    </div>
    <div class="one-box">
        <div>Smart Touch TV and AV Mounthing</div>
    </div>
    <div class="one-box">
        <div>Multimedia</div>
    </div>
</div>  -->
<!-- <div class="choices">
    <div class="one-box">
        <div>Network-management</div>
    </div>
    <div class="one-box">
        <div>CCTV VMS</div>
    </div>
</div>  -->
<!-- <div class="choices">
    <div class="one-box">
        <div>Solar</div>
    </div>
    <div class="one-box">
        <div>Lighting</div>
    </div>
</div>  -->
