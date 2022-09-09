<div class="container-fluid">
    <div class="brand">
        <img src="{{asset('/images/brands')}}/{{$brand->image}}">
    </div>
    <h1 class="h4">Product News</h1>
    <hr class="mt-2 pb-2 mb-4 d-none d-md-block">
    <div class="row justify-content-end">
        <div class="col-auto">
            <select name="" id=""  class="" style="min-width:90px" wire:model="month">
                <option value="default" selected="selected">ทั้งหมด</option>
                <option value="01">มกราคม</option>
                <option value="02">กุมภาพันธ์</option>
                <option value="03">มีนาคม</option>
                <option value="04">เมษายน</option>
                <option value="05">พฤษภาคม</option>
                <option value="06">มิถุนายน </option>
                <option value="07">กรกฎาคม </option>
                <option value="08">สิงหาคม </option>
                <option value="09">กันยายน </option>
                <option value="10">ตุลาคม </option>
                <option value="11">พฤศจิกายน </option>
                <option value="12">ธันวาคม </option>
            </select>
            <select style="min-width:90px" wire:model="year">
                <option value="default" selected="selected">ทั้งหมด</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        </div>
    </div>
    <div class="table-responsive mt-3">
        @if($NewProduct->count()>0)
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
                                Date : <em>{{date('d/m/Y', strtotime($NewProducts->created_at))}}</em>
                            </div>
                    </td>
                    <td class="text-center align-middle d-none d-md-table-cell" style="width: 15%"><em>{{date('d/m/Y', strtotime($NewProducts->created_at))}}</em></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <table class="table table-sm table-header-no-border table-header-theme-blue">
            <thead>
                <tr>
                    <th class="text-center" colspan="2">Subject</th>
                    <th class="text-center d-none d-md-table-cell" width="120">Date</th>
                </tr>
            </thead>
        </table>
            <h5 style="text-align: center; margin-top: 10%">ไม่มีสินค้าใหม่ในช่วงเวลาที่ท่านเลือก</h5>
        @endif
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
    .head1{
        text-align: center; 
        margin-bottom: 1%; 
        background: #194276; 
        color: white; 
        padding: 1% 0;
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

    @media screen and (max-width: 1200px){
        .brand img{
        width: 40%;
        margin-bottom:10%; 
        }
        .container-fluid{
        padding-right: 50px;
        padding-left: 50px;
        }
    }

    @media (min-width: 768px){
        .d-md-none {
        display: none!important;
        }
    }

    @media screen and (max-width: 700px){
        .brand img{
            width: 50%;
            margin-bottom:10%; 
        }
        .container-fluid{
            padding-right: 15px;
            padding-left: 15px;
        }
    }
</style>