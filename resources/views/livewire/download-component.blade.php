<link href="/css/download.css" rel="stylesheet">

<div class="wallpaper">
    <img src="/images/download.png" alt="">
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            @foreach($dcategories as $dcategory)
            <a href="{{route('download.category',['downloadcategory_slug'=>$dcategory->slug])}}"><button><i class="bi bi-file-text"></i><br><p>{{$dcategory->name}}</p></button></a>
            @endforeach
        </div>
    </div>
    <div class="section">
        <div class="title">
            <p>Catelog</p>
        </div>
        @foreach($downloads as $download)
            @if(($download->category->name) == "Catelog")
            
            <div class="desc">
                <div class="row d-flex">
                    <div class="col-1 d-flex justify-content-center">
                        <p>Catelog ของ {{$download->name}}</p>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <a href="{{url('/images/downloads')}}/{{$download -> file}}">ดาวน์โหลด</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    <div class="section">
        <div class="title">
            <p>Presentation</p>
        </div>
        @foreach($downloads as $download)
            @if(($download->category->name) == "Presentation")
            
            <div class="desc">
                <div class="row d-flex">
                    <div class="col-1 d-flex justify-content-center">
                        <p>	Presentation ของ {{$download->name}}</p>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <a href="{{url('/images/downloads')}}/{{$download -> file}}">ดาวน์โหลด</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    <div class="section">
        <div class="title">
            <p>VDO</p>
        </div>
        @foreach($downloads as $download)
            @if(($download->category->name) == "VDO")
            <div class="desc">
                <div class="row d-flex justify-content-center">
                    <div id="vdo">
                        <iframe width="350" height="250" src="{{url('/images/downloads')}}/{{$download -> file}}" sandbox=""></iframe>
                        <p>	VDO ของ {{$download->name}}</p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>