<div style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" id="head">
                    <div class="col-md-4">
                        <h1><a href="{{route('admin.dashboard')}}" style="color: black;"><i class="bi bi-arrow-left-circle-fill"></i></a> All Orders</h1>
                    </div>
                    <!-- <div class="col-md-4 offset-md-4 d-md-flex justify-content-md-end">
                        <select style="min-width:90px" wire:model="role">
                            <option value="default" selected="selected">ทั้งหมด</option>
                            <option value="dealer">ตัวแทนจำหน่าย</option>
                            <option value="customer">ลูกค้า</option>
                        </select>
                    </div> -->
                </div>
                <table class="table table-striped">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>โทรศัพท์</th>
                            <th>จ่ายเงินผ่าน</th>
                            <th>สถานะ</th>
                            <th>วันที่สั่ง</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                @if($order->user->role == '2')
                                    @foreach($dealers->where('dealerid',$order->user_id) as $dealer)
                                        <td>{{$dealer->firstname}}</td>
                                        <td>{{$dealer->lastname}}</td>
                                        <td>{{$dealer->phonenumber}}</td>
                                    @endforeach
                                @else
                                    @foreach($customers->where('customerid',$order->user_id)->unique('customerid') as $customer)
                                        <td>{{$customer->firstname}}</td>
                                        <td>{{$customer->lastname}}</td>
                                        <td>{{$customer->phonenumber}}</td>
                                    @endforeach
                                @endif
                                <td>{{$order->payment_code == 1 ? 'เครดิตบริษัท':'บัตรเครดิต'}}</td>
                                <td>กำลังจัดส่ง</td>
                                <td>{{date('d/m/Y', strtotime($order->created_at))}}
                                    <br>
                                    เวลา {{date('H:i', strtotime($order->created_at))}} น.
                                </td>
                                <td>
                                    <a href="{{route('admin.OrderDetails',['orderid'=>$order->id])}}"><button class="btn btn-success">รายละเอียด</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>

<style>
    #head{
        margin: 2% 0 2% 0;
    }
    #edit{
        color:black;
        font-size: 25px;
    }
    #editsub{
        color:black;
        font-size: 15px;
    }
    .product-name{
        width:20%;
    }

</style>
