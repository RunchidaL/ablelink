<link href="{{asset('/css/checkout.css')}}" rel="stylesheet">


<div class="container">
    <div class="wrapper">
        <div class="header">
            <ul>
                <li class="active form_1_progessbar">
                    <div>
                        <p>
                            <b style="font-size: 25px;">
                                <i class="bi bi-geo-alt"></i>
                            </b>
                        </p>
                    </div>
                </li>
                <li class="form_2_progessbar">
                    <div>
                        <p>
                            <b style="font-size: 25px;">
                                <i class="bi bi-credit-card"></i>
                            </b>
                        </p>
                    </div>
                </li>
                <li class="form_3_progessbar">
                    <div>
                        <p>
                            <b style="font-size: 35px;">
                                <i class="bi bi-check-lg"></i>
                            </b>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form_wrap">
                <div>
                    <div class="step">
                        <h2>เสร็จสิ้น</h2>
                    </div>
                    <div class="content-bill">
                        <div class="apbill">
                            <br>
                            <div style="margin-bottom: 10%">
                                <h3>
                                    <i class="bi bi-bag-check-fill" style="color: rgb(48, 172, 48)"></i> คำสั่งซื้อเสร็จสิ้น 
                                </h3>
                                <p>สั่งซื้อเมื่อวันที่ {{date('d/m/Y', strtotime($orderid->created_at))}}</p>
                            </div>
                            <h4><i class="bi bi-geo-alt"></i> ที่อยู่จัดส่ง</h4>
                            <p>{{$user->name}}</p>
                            <p>{{$dealer->phonenumber}}</p>
                            <p>บริษัท {{$dealer->companyTH}}</p>
                            <p>{{$dealer->address}} {{$dealer->subdistrict}} {{$dealer->district}}</p>
                            <p>{{$dealer->county}} {{$dealer->zipcode}}</p>
                            <br>
                            <h4><i class="bi bi-credit-card"></i> วิธีชำระเงิน</h4>
                            @if($orderid->payment_code == 1)
                            <p>ชำระเงินด้วยเครดิตบริษัท</p>
                            <p>ยอดคงเหลือ {{number_format($dealer->coin,2)}}</p>
                            @else
                            <p>ชำระเงินด้วยบัตรเครดิต</p>
                            @endif
                        </div>
                        <div class="vl"></div>
                        <div class="apbill">
                            <br>
                            <h4 class="yourp"><i class="bi bi-box-seam"></i> สินค้าของคุณ</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                    <strong>สินค้า</strong>
                                    </div>
                                    <span><strong>ราคา</strong></span>
                                </li>
                                @foreach ($orders as $order)
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    <img src="{{asset('/images/products')}}/{{$order->model->image}}" style="width: 100px; height: 80px; margin-right: 10px;">
                                    @if($order->attribute)
                                    <p>{{$order->model->slug}}, {{$order->model->name}} {{$order->attribute}} m x {{$order->quantity}}</p>
                                    <span>฿{{number_format($order->model->dealer_price * $order->quantity * $order->attribute,2)}}</span>
                                    @else
                                    <p>{{$order->model->slug}}, {{$order->model->name}} x {{$order->quantity}}</p>
                                    <span>฿{{number_format($order->model->dealer_price * $order->quantity,2)}}</span>
                                    @endif
                                </li>
                                @endforeach
                                <hr>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 ">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        ราคารวม
                                        <span>฿{{$orderid->total}}</span>
                                    </li>
                                </li>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btns_wrap">
                <div class="common_btns form_1_btns">
                    <a href="/"><button type="button" class="btn_next">กลับหน้าหลัก </button></a>
                </div>
            </div>
    </div>
</div>


