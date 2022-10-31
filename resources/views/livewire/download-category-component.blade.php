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
        <img class="imgg" src="/images/download center.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href=""><button><i class="bi bi-file-text"></i><br><p>Catelog</p></button></a>
            <a href=""><button><i class="bi bi-easel"></i><br><p>Presentation</p></button></a>
            <a href=""><button><i class="bi bi-play-circle"></i><br><p>Marketing Videos</p></button></a>
        </div>
    </div>
    <div class="section">
        <div class="desc">
            <div class="row d-flex">
            @if($downloads->count()>0)
                <div class="title">
                    @foreach($downloads->unique('category_id') as $download)
                        @if(!empty($download->category_id == 1))
                        <p>Catelog</p>
                        @endif
                    @endforeach
                </div>
                @foreach($catelogs as $c)
                    <div class="col-1 d-flex justify-content-center">
                        <p>Catelog ของ {{$c->name}}</p>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <a href="{{url('/images/downloads')}}/{{$c -> file}}">ดาวน์โหลด</a>
                    </div>
                @endforeach
                <div class="title">
                    @foreach($downloads->unique('category_id') as $download)
                        @if(!empty($download->category_id == 3))
                        <p>Presentation</p>
                        @endif
                    @endforeach
                </div>
                @foreach($pres as $p)
                    <div class="col-1 d-flex justify-content-center">
                        <p>Presentation ของ {{$p->name}}</p>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <a href="{{url('/images/downloads')}}/{{$p -> file}}">ดาวน์โหลด</a>
                    </div>
                @endforeach
                <div class="title">
                    @foreach($downloads->unique('category_id') as $download)
                        @if(!empty($download->category_id == 5))
                        <p>Marketing Videos</p>
                        @endif
                    @endforeach
                </div>
                @foreach($vdos as $v)
                    @if(!empty($v))
                    <div id="vdo">
                        <iframe width="350" height="250" src="{{$v->file}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>	VDO ของ {{$v->name}}</p>
                    </div>
                    @endif
                @endforeach
            @else
                <p>ไม่มี</p>
            @endif
            </div>

        </div>
    </div>
</div>