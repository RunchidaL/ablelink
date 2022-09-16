<!-- link -->
<link href="/css/orderDetail.css" rel="stylesheet">
<!-- link -->

<div class="order-detail-page">
    <div class="container order-detail-home">
        <div class="row">
            <div class="col-md-12">
                <h2>รหัสใบสั่งซื้อ #{{$order->id}}</h2>
                <hr style="width:auto">
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>ผู้ขายสินค้า:</strong><br>
                            ABLE LINK (Thailand) CO., LTD.<br>
                            0951451538<br>
                            12 ซ.สุขาภิบาล 5 ซ.5 แยก 3 แขวงทำแร้ง<br>
                            เขตบางเขน, จังหวัดกรุงเทพมหานคร<br>
                            10220
                        </address>
                    </div>
                    <div class="col-md-6 text-end">
                        <address>
                            <strong>ผู้ซื้อสินค้า:</strong><br>
                            @if(Auth::user()->role == 1)
                                {{$customer->firstname}} {{$customer->lastname}}<br>
                                {{$customer->phonenumber}}<br>
                                {{$customer->address}} แขวง/ตำบล {{$customer->subdistrict}} <br>
                                เขต/อำเภอ {{$customer->district}} {{$customer->county}} <br>
                                {{$customer->zipcode}}<br>
                            @elseif(Auth::user()->role == 2)
                                {{$order->user->name}}<br>
                                {{$dealer->phonenumber}}<br>
                                {{$dealer->address}} แขวง/ตำบล {{$dealer->subdistrict}} <br>
                                เขต/อำเภอ {{$dealer->district}} {{$dealer->county}} <br>
                                {{$dealer->zipcode}}<br>
                            @endif
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>รายการสั่งซื้อ</h3>
                <div class="d-flex flex-row-reverse mr-10" style="font-size: 40px"><a href="{{route('orderpdf',['orderpdf_id'=>$order->id])}}"><i class="bi bi-printer-fill"></i></a></div>
                <div class="table-responsive order-detail-info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="order-detail-menu">
                                <td>ชื่อสินค้า</td>
                                <td></td>
                                <td>ราคา</td>
                                <td>จำนวน</td>
                                <td>รวม</td>
                            </tr>
                        </thead>
                        <tbody class="customer-order-detail">
                            @foreach($items as $item)
                            <tr class="order-detail-wrapper">
                                <td class="order-detail-product">
                                    <a href="#"><img src="{{asset('/images/products')}}/{{$item->model->image}}" alt=""></a>
                                </td>
                                <td class="order-detail-name">
                                    @if($item->attribute)
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}} {{$item->attribute}} m</a>
                                    @else
                                    <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}}</a>
                                    @endif
                                </td>
                                <td class="order-detail-name">
                                    <p class="group-cen">฿{{$item->model->dealer_price}}</p>
                                </td>
                                <td class="order-detail-quantity">
                                    <p class="group-cen">{{$item->quantity}}</p>
                                </td>
                                <td class="order-detail-total">
                                    @if($item->attribute)
                                    <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</p>
                                    @else
                                    <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</p>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>    
                        <tfoot>
                            <tr class="order-detail-conclu">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>ยอดรวมทั้งหมด</td>
                                <td>฿{{$order->total}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

