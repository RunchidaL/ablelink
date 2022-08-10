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
            <p>{{$downloadcategory->name}}</p>
        </div>
        @foreach($downloads->unique('brand_id') as $download)
            <div class="desc">
            <img src="{{asset('/images/brands')}}/{{$download->brand->image}}" class="brandimg">
            @foreach($downloads->where('brand_id',$download->brand_id) as $download)
            <div class="row d-flex">
                @if(($download->category->name) == "Catelog")
                <div class="col-1 d-flex justify-content-center">
                    <p>Catelog ของ {{$download->name}}</p>
                </div>
                @elseif(($download->category->name) == "Presentation")
                <div class="col-1 d-flex justify-content-center">
                    <p>Presentation ของ {{$download->name}}</p>
                </div>
                @endif
                
                @if(($download->category->name) == "VDO")
                <div id="vdo">
                    <iframe width="350" height="250" src="{{url('/images/downloads')}}/{{$download -> file}}" sandbox=""></iframe>
                    <p>	VDO ของ {{$download->name}}</p>
                </div>
                @else
                <div class="col-1 d-flex justify-content-center">
                    <a href="{{url('/images/downloads')}}/{{$download -> file}}">ดาวน์โหลด</a>
                </div>
                @endif
            </div>
            @endforeach
            </div>
        @endforeach
    </div>
</div>
