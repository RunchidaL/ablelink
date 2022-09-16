<!-- link -->
<link href="/css/order.css" rel="stylesheet">
<!-- link -->

<div class="order-page">
    <div class="container order-home">
        @if($count > 0)
        <h2>ประวัติการสั่งซื้อ</h2>
        <div class="table-responsive order-info">
            <table class="table table-condensed">
                <thead>
                    <tr class="order-menu">
                        <td>วันสั่งซื้อ</td>
                        <td>ยอดชำระเงิน</td>
                        <td>สถานะ</td>
                        <td>ดูรายการสินค้า</td>
                    </tr>
                </thead>
                <tbody class="customer-order">
                    @foreach($orders as $order)
                    <tr class="order-wrapper">
                        <td class="order-quantity">
                            <p class="group-cen">{{date('d/m/Y', strtotime($order->created_at))}}</p>
                        </td>
                        <td class="order-total">
                            <p class="group-cen">{{number_format($order->total,2)}}</p>
                        </td>
                        <td class="order-status">
                            <p class="group-cen">อยู่ระหว่างการขนส่ง</p>
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
</div>




