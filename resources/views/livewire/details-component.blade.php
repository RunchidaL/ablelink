<link href="/css/details.css" rel="stylesheet">

<div class="container">
    <div class="row">

        <div class="col">
            <img src="{{asset('/images/products')}}/{{$product -> image}}">
        </div>

        <div class="col" id="right">
            <p>{{$product->name}}</p>
            @if(($product->web_price) == '0')
                <p></p>
            @else
                <p>{{number_format($product->web_price)}}</p>
            @endif
            <div class="quantity">
                <input value="1">
                <div class="handle">
                    <a href="#"><button><i class="bi bi-caret-up"></i></button></a>
                    <a href="#"><butoon><i class="bi bi-caret-down"></i></butoon></a>
                </div>
                <div class="addtocart" style="display: inline-block;">
                    <a href="#"><button>Add To Cart</button></a>
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
            <a href="#resources">Resources</a>
        </div>
        <div class="tab-contents">
            <h5>Overview</h5>
            <p id="">{!! $product->overview !!}</p>
        </div>
        <div class="line" id="application"></div>
            <div class="tab-contents">
                <h5>Application</h5>
                <p>{!! $product->application !!}</p>
            </div>
        </div>
        <div class="line" id="network_connectivity"></div>
        <div class="tab-contents">
            <h5>Network Connectivity</h5>
            <p>{!! $product->network_connectivity !!}</p>
        </div>
        <div class="line" id="item-spotlight"></div>
        <div class="tab-contents" id="item-spotlight">
            <h5>Item Spotlight</h5>
            <p>{!! $product->item_spotlight !!}</p>
        </div>
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="feature">
            <h5>Feature</h5>
            <p>{!! $product->feature !!}</p>
        </div>
        <div class="line" id="feature"></div>
        <div class="tab-contents" id="resources">
            <h5>Resources</h5>
            <br>
            <div class="row">
                @if(($product->datasheet) == "")
                @else
                    <div class="col"><a href="{{asset('/images/products')}}/{{$product -> datasheet}}">Datasheet</a></div>
                @endif
                @if(($product->firmware) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> firmware}}">Firm ware</a></div>
                @endif
                @if(($product->guide) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> guide}}">Guide</a></div>
                @endif
                @if(($product->cert) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> cert}}">Certificate</a></div>
                @endif
                @if(($product->config) == "")
                @else
                <div class="col"><a href="{{asset('/images/products')}}/{{$product -> config}}">Config</a></div>
                @endif
            </div>
        </div>
    </div>
</div>
