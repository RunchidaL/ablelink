<!-- link -->
<link href="/css/downloadcategory.css" rel="stylesheet">
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

    <div class="brand">
        <img src="{{asset('/images/brands')}}/{{$brand->image}}">
    </div>

    <div class="row">
        <div class="col">
            <a href="#Catelog"><button><i class="bi bi-file-text"></i><br><p>Catelog</p></button></a>
            <a href="#Presentation"><button><i class="bi bi-easel"></i><br><p>Presentation</p></button></a>
            <a href="#Videos"><button><i class="bi bi-play-circle"></i><br><p>Marketing Videos</p></button></a>
        </div>
    </div>


    @if($downloads->count()>0)

        @foreach($downloads->unique('category_id') as $download)
        @if(!empty($download->category_id == 1))
        <div id="Catelog" class="fakescroll">test</div>
        <h1 class="h4">Catalog</h1>
        <hr class="mt-2 pb-2 mb-4 d-none d-md-block">
        <div class="table-responsive mt-3">
            <table class="table table-sm table-header-no-border table-header-theme-blue">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2">รายการ</th>
                        <th class="text-center d-none d-md-table-cell" width="120">ไฟล์</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($catelogs as $c)
                    <tr>
                        <td class="align-middle pl-3 py-3" colspan="2">
                            <p class="namecatpre">{{$c->name}}</p>
                            <div class="d-block d-md-none text-cust-gray">
                                ไฟล์ : <a href="{{url('/images/downloads')}}/{{$c -> file}}">Download</a>
                            </div>
                        </td>
                        <td class="text-center align-middle d-none d-md-table-cell" ><a href="{{url('/images/downloads')}}/{{$c -> file}}">Download</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$catelogs->appends(['presentations'=>$presentations->currentPage()])->appends(['vdos'=>$vdos->currentPage()])->links()}}
        </div>
        @endif
        @endforeach


        <br>
        <br>
        @foreach($downloads->unique('category_id') as $download)
        @if(!empty($download->category_id == 3))
        <div id="Presentation" class="fakescroll">test</div>
        <h1 class="h4">Presentation</h1>
        <hr class="mt-2 pb-2 mb-4 d-none d-md-block">
        <div class="table-responsive mt-3">
            <table class="table table-sm table-header-no-border table-header-theme-blue">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2">รายการ</th>
                        <th class="text-center d-none d-md-table-cell" width="120">ไฟล์</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($presentations as $p)
                    <tr>
                        <td class="align-middle pl-3 py-3" colspan="2">
                            <p class="namecatpre">{{$p->name}}</p>
                            <div class="d-block d-md-none text-cust-gray">
                                ไฟล์ : <a href="{{url('/images/downloads')}}/{{$p -> file}}">Download</a>
                            </div>
                        </td>
                        <td class="text-center align-middle d-none d-md-table-cell"><a href="{{url('/images/downloads')}}/{{$p -> file}}">Download</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$presentations->appends(['catelogs'=>$catelogs->currentPage()])->appends(['vdos'=>$vdos->currentPage()])->links()}}
        </div>
        @endif
        @endforeach

        <br>
        <br>
        @foreach($downloads->unique('category_id') as $download)
        @if(!empty($download->category_id == 5))
        <div id="Videos" class="fakescroll">test</div>
        <h1 class="h4">Marketing Videos</h1>
        <hr class="mt-2 pb-2 mb-4 d-none d-md-block">
        <div class="table-responsive mt-3">
            <table class="table table-sm table-header-no-border table-header-theme-blue">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2">รายการ</th>
                        <th class="text-center d-none d-md-table-cell" width="120">ฟังก์ชัน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vdos as $v)
                    @if(!empty($v))
                    <tr>
                        <td class="align-middle px-0 py-2" id="phone">
                            <iframe  src="{{$v->file}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p class="namevdopc">Video : {{$v->name}}</p>
                            <div class="d-block d-md-none text-cust-gray">
                                <div class="namevdophone">Video : {{$v->name}}</div>
                                ฟังก์ชัน : <a href="{{$v->file}}">Fullscreen</a>
                            </div>
                        </td>
                        <td class="align-middle pl-3 py-3" id="disnone">
                            fake
                        </td>
                        <td class="text-center align-middle d-none d-md-table-cell" style="width: 15%"><a href="{{$v->file}}">Full Screen</a></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            {{$vdos->appends(['catelogs'=>$catelogs->currentPage()])->appends(['presentations'=>$presentations->currentPage()])->links()}}
        </div>
        @endif
        @endforeach
        
    @else
        <p class="datanotfound">ไม่พบข้อมูลสำหรับเเบรนด์ {{$brand->name}}</p>
    @endif
    
</div>
