<!-- link -->
<link href="/css/download.css" rel="stylesheet">
<!-- link -->

<div class="wallpaper">
    <img src="/images/download.png" alt="">
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            @foreach($downloadcategories as $dcategory)
            <a href="{{route('download.category',['downloadcategory_slug'=>$dcategory->slug])}}"><button><i class="bi bi-file-text"></i><br><p>{{$dcategory->name}}</p></button></a>
            @endforeach
        </div>
    </div>
    <div class="section">

        <div class="title">
            <p>{{$downloadcategory->name}}</p>
        </div>
        @foreach($downloads as $download)
        <div class="desc">
            <div class="row d-flex">
                @if(($download->category->name) == "Catelog")
                    <div class="col-1 d-flex justify-content-center">
                        <p>category ของ {{$download->name}}</p>
                    </div>
                    @elseif(($download->category->name) == "Presentation")
                    <div class="col-1 d-flex justify-content-center">
                        <p>download ของ {{$download->name}}</p>
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
            
        </div>
        @endforeach
    </div>
    <div class="wrap-pagination-info">
        {{$downloads->links()}}
    </div>
</div>
