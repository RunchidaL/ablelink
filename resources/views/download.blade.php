@extends('layout.navfoot')

@section('link_download')
<link href="/css/download.css" rel="stylesheet">
@endsection

@section('download')
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
</div>
@endsection