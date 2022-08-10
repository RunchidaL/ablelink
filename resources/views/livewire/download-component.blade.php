<!-- link -->
<link href="/css/download.css" rel="stylesheet">
<!-- link -->

<div class="wallpaper">
    <img src="/images/download.png" alt="">
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="/download_category/catelog"><button><i class="bi bi-file-text"></i><br><p>Catelog</p></button></a>
            <a href="/download_category/presentation"><button><i class="bi bi-easel"></i><br><p>Presentation</p></button></a>
            <a href="/download_category/vdo"><button><i class="bi bi-play-circle"></i><br><p>VDO</p></button></a>
        </div>
    </div>
    <div class="section">
        <div class="title">
            <p>Catelog</p>
        </div>
        @foreach($downloads->where('category_id','1')->unique('brand_id') as $download)
        <div class="desc">
        <img src="{{asset('/images/brands')}}/{{$download->brand->image}}" class="brandimg">
        @foreach($downloads->where('brand_id',$download->brand_id) as $download)
            @if(($download->category->name) == "Catelog")
            <div class="row">
                <div class="col-1 d-flex justify-content-center">
                    <p>Catelog ของ {{$download->name}}</p>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <a href="{{url('/images/downloads')}}/{{$download -> file}}">ดาวน์โหลด</a>
                </div>
            </div>
            @endif
        @endforeach
        </div>
        @endforeach
    </div>
    <div class="section">
        <div class="title">
            <p>Presentation</p>
        </div>
        @foreach($downloads->where('category_id','3')->unique('brand_id') as $download)
        <div class="desc">
        <img src="{{asset('/images/brands')}}/{{$download->brand->image}}" class="brandimg">    
        @foreach($downloads->where('brand_id',$download->brand_id) as $download)
            @if(($download->category->name) == "Presentation")
            <div class="row">
                <div class="col-1 d-flex justify-content-center">
                    <p>	Presentation ของ {{$download->name}}</p>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <a href="{{url('/images/downloads')}}/{{$download -> file}}">ดาวน์โหลด</a>
                </div>
            </div>
            @endif
        @endforeach
        </div>
        @endforeach
    </div>
    <div class="section">
        <div class="title">
            <p>VDO</p>
        </div>
        @foreach($downloads->where('category_id','5')->unique('brand_id') as $download)
        <div class="desc">
        <img src="{{asset('/images/brands')}}/{{$download->brand->image}}" class="brandimg">
        @foreach($downloads->where('brand_id',$download->brand_id) as $download)
            @if(($download->category->name) == "VDO")
            <div class="row justify-content-center">
                <div id="vdo">
                    <iframe width="350" height="250" src="{{$download->file}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>	VDO ของ {{$download->name}}</p>
                </div>
            </div>
            @endif
        @endforeach
        </div>
        @endforeach
    </div>
</div>