<!-- link -->
<link href="/css/download.css" rel="stylesheet">
<!-- link -->


<div class="slider">
    <div class="myslider" style="display: block;">
        <div class="txt">
            <h1>Download </h1>
        </div>
        <div class="txt2">
            <h1>Center</h1>
        </div>
        <img class="imgg" src="/images/download center.jpg">
    </div>
</div>

<div class="container-fluid">
    <div class="B">
        <div class="brands">
            <div class="row" id="row-brands">
                @foreach ($brand as $brands)
                <div class="brands-col" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="800">
                    <div class="box"><a href="{{route('download.brand',['download_brand'=>$brands->slug])}}"><img src="{{asset('/images/brands')}}/{{$brands->image}}" alt="logo"></a></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>