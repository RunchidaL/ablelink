<div style="margin-left: 5%; margin-right: 5%">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <h1><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> All Dealers</h1>
                            </div>
                            <div class="col-md-4 gap-2 offset-md-4 d-md-flex justify-content-md-end">
                                <a href="{{route('admin.addsale')}}"><button class="btn btn-success">Add Cost</button></a>
                                <a href="{{route('admin.addinfoDealer')}}"><button class="btn btn-success">Add Info Dealer</button></a>
                                <a href="{{route('admin.addDealer')}}"><button class="btn btn-success">Add New Dealer</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>ชื่อกิจการ</th>
                                    <th>Email</th>
                                    <th>ชื่อบริษัท</th>
                                    <th>Credit</th>
                                    <th>ยอดการสั่งซื้อในเว็บ</th>
                                    <th>Sale</th>
                                    <th>ยอดการสั่งซื้อทั้งหมด</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $sum = 0;
                                $sum_total = 0;
                                
                            @endphp
                                @foreach ($dealers as $dealer)
                                    <tr>
                                        <td>{{$dealer->id}}</td>
                                        <td>{{$dealer->name}}</td>
                                        <td>{{$dealer->email}}</td>
                                        @foreach ($dealer->dealers as $name)
                                            <td>{{$name->companyTH}}</td>
                                            <td>{{number_format($name->coin,2)}}</td>
                                        @endforeach
                                        <td>{{number_format($dealer->totals->where('user_id',$dealer->id)->sum('total'),2)}}</td>
                                        <td>{{number_format($dealer->costs->where('user_id',$dealer->id)->sum('cost'),2)}}</td>
                                        <td>{{number_format($dealer->totals->where('user_id',$dealer->id)->sum('total') + $dealer->costs->where('user_id',$dealer->id)->sum('cost'),2)}}</td>
                                        <td>
                                            @foreach ($dealer->dealers as $infodealer)
                                            <a href="{{route('admin.editDealer',['infodealer_id'=>$infodealer->dealerid])}}"><i class="bi bi-pencil-square" id="editsub"></i></a>
                                            @endforeach
                                            <a href="#" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click.prevent="deleteDealer({{$dealer->id}})"><i class="bi bi-x" id="editsub"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    #editsub{
        color:black;
        font-size: 25px;
        margin-left: 5%
    }
</style>

