<!-- link -->
<link href="/css/order.css" rel="stylesheet">
<!-- link -->

<div class="order-page">
    <div class="container order-home">
        @if($count > 0)
        <h2>ประวัติการสั่งซื้อ</h2>
        <div class="table-responsive">
            <table class="table table-condensed">
                <thead>
                    <tr class="order-menu">
                        <td>รหัสใบสั่งซื้อ</td>
                        <td>วันสั่งซื้อ</td>
                        <td>ยอดชำระเงิน</td>
                        <td>ดูรายการสินค้า</td>
                    </tr>
                </thead>
                <tbody class="customer-order">
                    @foreach($orders as $order)
                    <tr class="order-wrapper">
                        <td class="order-code">
                            <p class="group-cen">#{{$order->id}}</p>
                        </td>
                        <td class="order-quantity">
                            <p class="group-cen">{{date('d/m/Y', strtotime($order->created_at))}}</p>
                        </td>
                        <td class="order-total">
                            <p class="group-cen">฿{{number_format($order->total,2)}}</p>
                        </td>
                        <td class="order-detail">
                            <div class="group-cen">
                                <a href="{{route('order.detail',['order_id'=>$order->id])}}" class="btn btn-success">รายละเอียด</a>
                            </div> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert-wrap">
            <div class="alert alert-danger" style="font-size: 1.2rem;" role="alert">
                ไม่มีประวัติการซื้อสินค้า
            </div>
        </div>
        @endif
    </div>

    <!-- responsive phone -->
    <div class="container phone-order-home">
        @if($count > 0)
        <h2>ประวัติการสั่งซื้อ</h2>
            @foreach($orders as $order)
            <div class="phone-order-wrapper">  
                <div class="phone-order-left">
                    <p class="group-cen">#{{$order->id}}</p>
                    <p class="group-cen">{{date('d/m/Y', strtotime($order->created_at))}}</p>
                </div>
                <div class="phone-order-mid">
                    <p class="group-cen">฿{{number_format($order->total,2)}}</p>
                </div>
                <div class="phone-order-right">
                    <div class="group-cen">
                        <a href="{{route('order.detail',['order_id'=>$order->id])}}" class="btn btn-success">รายละเอียด</a>
                    </div> 
                </div>
            </div>
            @endforeach
        @else
        <div class="alert-wrap">
            <div class="alert alert-danger" style="font-size: 1rem;" role="alert">
                ไม่มีประวัติการซื้อสินค้า
            </div>
        </div>
        @endif
    </div>
</div>




