@extends('layout.navfoot')

@section('link_download')
<link href="/css/download.css" rel="stylesheet">
@endsection

@section('content')
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
            <p>Catelog ของบริษัท</p>
            <p>Catelog ของบริษัทอื่น</p>
            <p>Catelog ของบริษัทอื่น</p>
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
@endsection