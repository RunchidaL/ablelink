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
                                {{$order->firstname}} {{$order->lastname}}<br>
                                {{$order->phonenumber}}<br>
                                {{$order->address}} แขวง/ตำบล {{$order->subdistrict}} <br>
                                เขต/อำเภอ {{$order->district}} {{$order->county}} <br>
                                {{$order->zipcode}}<br>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-detail-info">
            <div class="d-flex">
                <div class="me-auto align-self-center">
                    <h3>รายการสั่งซื้อ</h3>
                </div>
                <div class="p-2">
                    @if(Auth::user()->role == 2)
                    <div class="d-flex flex-row-reverse mr-10" style="font-size: 40px"><a href="{{route('orderpdf',['orderpdf_id'=>$order->id])}}"><i class="bi bi-printer-fill"></i></a></div>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-condensed">
                    <thead>
                        <tr class="order-detail-menu">
                            <td>รายการสินค้า</td>
                            <td></td>
                            <td>ราคา</td>
                            <td>จำนวน</td>
                            <td>รวม</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr class="order-detail-wrapper">
                            <td class="order-detail-product">
                                @if(empty($item->model->id))
                                <a href="#"><img src="{{asset('/images')}}/no-photo-available.png" alt=""></a>
                                @else
                                <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}"><img src="{{asset('/images/products')}}/{{$item->model->image}}" alt=""></a>
                                @endif
                            </td>
                            <td class="order-detail-name">
                                @if(empty($item->model->id))
                                <a href="">ไม่มีสินค้าในระบบแล้ว</a>
                                @elseif($item->attribute)
                                <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}} {{$item->attribute}} m</a>
                                @else
                                <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}">{{$item->model->slug}}, {{$item->model->name}}</a>
                                @endif
                            </td>
                            <td class="order-detail-price">
                                @if(empty($item->model->id))
                                <p class="group-cen">-</p>
                                @else
                                    @if($user->role == 1)
                                        @if($item->attribute == '')
                                            <p class="group-cen">฿{{number_format($item->model->customer_price,2)}}</p>
                                        @else
                                            <p class="group-cen">฿{{number_format($item->model->customer_price * $item->attribute,2)}}</p>
                                        @endif
                                    @elseif($user->role == 2)
                                        @if($item->attribute == '')
                                            <p class="group-cen">฿{{number_format($item->model->dealer_price,2)}}</p>
                                        @else
                                            <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->attribute,2)}}</p>
                                        @endif
                                    @endif
                                @endif
                            </td>
                            <td class="order-detail-quantity">
                                <p class="group-cen">{{$item->quantity}}</p>
                            </td>
                            <td class="order-detail-total">
                                @if(empty($item->model->id))
                                <p class="group-cen">-</p>
                                @else
                                    @if($user->role == 1)
                                        @if($item->attribute == '')
                                        <p class="group-cen">฿{{number_format($item->model->customer_price * $item->quantity,2)}}</p>
                                        @else
                                        <p class="group-cen">฿{{number_format($item->model->customer_price * $item->quantity * $item->attribute,2)}}</p>
                                        @endif
                                    @elseif($user->role == 2)
                                        @if($item->attribute == '')
                                        <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</p>
                                        @else
                                        <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</p>
                                        @endif
                                    @endif
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
                            <td>฿{{number_format($order->total,2)}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- responsive phone -->
        <div class="phone-order-detail-info">
            <div class="phone-order-detail-menu"><span>รายการสั่งซื้อ</span>
                @if(Auth::user()->role == 2)
                    <a href="{{route('orderpdf',['orderpdf_id'=>$order->id])}}"><i class="bi bi-printer-fill" style="font-size: 30px"></i></a>
                @endif
            </div>
            @foreach($items as $item)
            <div class="phone-order-detail-wrapper">
                <div class="phone-order-detail-left">
                    <div class="phone-order-detail-product">
                        @if(empty($item->model->id))
                        <a href="#"><img src="{{asset('/images')}}/no-photo-available.png" alt=""></a>
                        @else
                        <a href="{{route('product.detailsmodels',['modelslug'=>$item->model->slug])}}"><img src="{{asset('/images/products')}}/{{$item->model->image}}" alt=""></a>
                        @endif
                    </div>
                </div>
                <div class="phone-order-detail-right">
                    <div class="phone-order-detail-name">
                    @if(empty($item->model->id))
                    <p class="group-cen">-</p>
                    @else
                        @if($user->role == 1)
                            @if($item->attribute == '')
                                <p class="group-cen">฿{{number_format($item->model->customer_price,2)}}</p>
                            @else
                                <p class="group-cen">฿{{number_format($item->model->customer_price * $item->attribute,2)}}</p>
                            @endif
                        @elseif($user->role == 2)
                            @if($item->attribute == '')
                                <p class="group-cen">฿{{number_format($item->model->dealer_price,2)}}</p>
                            @else
                                <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->attribute,2)}}</p>
                            @endif
                        @endif
                    @endif
                    </div>
                    <div class="phone-order-detail-total">
                    @if(empty($item->model->id))
                    <p class="group-cen">-</p>
                    @else
                        @if($user->role == 1)
                            @if($item->attribute == '')
                            <p class="group-cen">฿{{number_format($item->model->customer_price * $item->quantity,2)}}</p>
                            @else
                            <p class="group-cen">฿{{number_format($item->model->customer_price * $item->quantity * $item->attribute,2)}}</p>
                            @endif
                        @elseif($user->role == 2)
                            @if($item->attribute == '')
                            <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</p>
                            @else
                            <p class="group-cen">฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</p>
                            @endif
                        @endif
                    @endif
                    </div>
                    <div class="phone-order-detail-quantity">
                        <p class="group-cen">จำนวน {{$item->quantity}} ชิ้น</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="phone-order-detail-conclu">
                <span>ยอดรวมทั้งหมด</span>
                <span>฿{{number_format($order->total,2)}}</span>
            </div>
        </div>
    </div>
</div>

