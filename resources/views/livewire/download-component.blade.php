<link href="/css/download.css" rel="stylesheet">

<div class="wallpaper">
    <img src="/images/download.png" alt="">
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <button><i class="bi bi-file-text"></i><br><p>Catelog</p></button>
            <button><i class="bi bi-file-slides"></i></i><br><p>Presentation</p></button>
            <button><i class="bi bi-camera-video"></i><br><p>VDO</p></button>
        </div>
    </div>
    <div class="section">
        <div class="title">
            <p>Catelog</p>
        </div>
        <div class="desc">
            @foreach($downloads as $download)
            <div class="row d-flex justify-content-center">
                <div class="col-1 d-flex justify-content-center">
                    <p>Catelog ของ {{$download->name}}</p>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <a href="{{url('/images/downloads')}}/{{$download -> file}}">ดาวน์โหลด</a>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
    <div class="section">
        <div class="title">
            <p>Presentation</p>
        </div>
        <div class="desc">
            <p>Presentation ของ____</p>
            <p>Presentation ของ____</p>
            <p>Presentation ของ____</p>
        </div>
    </div>
    <div class="section">
        <div class="title">
            <p>VDO</p>
        </div>
        <div class="desc">
            <p>VDO ของ____</p>
            <p>VDO ของ____</p>
            <p>VDO ของ____</p>
        </div>
    </div>
</div>
