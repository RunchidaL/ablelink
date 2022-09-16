<!-- link -->
<link href="/css/activity.css" rel="stylesheet">
<!-- link -->

<div class="menu-activity">
    <div class="mac-left">
        <a href="/post_category/บทความ"><i class="bi bi-file-text"></i></a>
        <p class="text-icon">บทความ</p>
    </div>
    <div class="mac-center">
        <a href="{{route('newproducts')}}"><i class="bi bi-box-seam"></i></a>
        <p>ผลิตภัณฑ์</p>
    </div>
    <div class="mac-right">
        <a href="/post_category/องค์กร"><i class="bi bi-building"></i></a>
        <p class="text-icon">องค์กร</p>
    </div>
</div>

<h1 style="text-align: center; margin-bottom: 1%; background: #194276; color: white; padding: 1% 0;">ผลิตภัณฑ์ใหม่</h1>

<div class="container-fluid">
    @foreach($NewProduct->unique('brand_id') as $NewProducts)
    <div class="brand">
        <img src="{{asset('/images/brands')}}/{{$NewProducts->brand->image}}">
    </div>
    @endforeach
    <h1 class="h4">Product News</h1>
    <hr class="mt-2 pb-2 mb-3 d-none d-md-block">
    <div class="row justify-content-end">
        <div class="col-auto">
            <!-- <select name="" id=""  class="" style="min-width:90px" wire:model="month">
                <option value="">ทั้งหมด</option>
                <option value="01">มกราคม</option>
                <option value="02">กุมภาพันธ์</option>
                <option value="03">มีนาคม</option>
            </select> -->
            <select name="" id=""  class="" style="min-width:90px">
                @foreach($years as $year)
                <option value="">{{date('Y', strtotime($year->created_at))}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="table-responsive mt-3">
        <table class="table table-sm table-header-no-border table-header-theme-blue">
            <thead>
                <tr>
                    <th class="text-center" colspan="2">Subject</th>
                    <th class="text-center d-none d-md-table-cell" width="120">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($NewProduct as $NewProducts)
                <tr>
                    <td class="align-middle px-0 py-2" style="width: 10%">
                        <a href="{{$NewProducts->linkproduct}}"><img src="{{$NewProducts->img}}" alt="" style="width: 100px" height="100px"></a>
                    </td>
                    <td class="align-middle pl-3 py-3">
                        <a href="{{$NewProducts->linkproduct}}">{{$NewProducts->name}}</a>
                            <div class="d-block d-md-none text-cust-gray">
                                Date : <em>{{$NewProducts->created_at}}</em>
                            </div>
                    </td>
                    <td class="text-center align-middle d-none d-md-table-cell" style="width: 15%"><em>{{date('d/m/Y', strtotime($NewProducts->created_at))}}</em></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<style>
    .container-fluid{
        padding-top: 32px;
        padding-bottom: 64px;
        max-width: 1170px;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    .brand{
        text-align: center;
    }
    .brand img{
        width: 30%;
    }
    .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    }
    .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    }
    .table-header-theme-blue>thead>tr {
    color: #fff;
    background-color: #414141;
    }
    .table-header-no-border>thead>tr>th {
    border-top-width: 0;
    border-bottom-width: 0;
    border-right-color: transparent;
    border-left-color: transparent;
    }
    .text-cust-gray {
    color: #6c6c6c;
    }
    .tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
    }
    tr{
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
    }

    @media (min-width: 768px){
    .d-md-none {
    display: none!important;
    }
    
    }
    
</style>