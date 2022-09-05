<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">{{Session::get('message')}}</div>
    @endif
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
            <div class="form_wrap">
                <div class="form_1 data_info">
                    <div class="step">
                        <h2>ที่อยู่สำหรับการจัดส่ง</h2>
                    </div>
                    <div class="row" id="chooseaddress">
                        <div class="col-md-5 mb-4">
                            <div class="address" style="background: #f1f1f1; border-radius: 20px; padding: 5% 10%">
                                <div class="choose-address">
                                    <input type="radio" id="address1" name="address" checked/>
                                    <label for="address1"></label>
                                </div>
                                <div class="subaddress">
                                    <p>{{$user->name}}</p>
                                    <p>{{$dealer->phonenumber}}</p>
                                    <p>{{$dealer->address}} {{$dealer->subdistrict}} {{$dealer->district}}</p>
                                    <p>{{$dealer->county}} {{$dealer->zipcode}}</p>
                                </div>
                            </div><br>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">สินค้าในตะกร้า</h5>
                                </div>
                                <div class="card-body" id="item-cart">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                            <strong>สินค้า</strong>
                                            </div>
                                            <span><strong>ราคา</strong></span>
                                        </li>
                                        @foreach ($cartitems as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            <img src="{{asset('/images/products')}}/{{$item->model->image}}" style="width: 100px; height: 80px; margin-right: 10px;">
                                            @if($item->attribute)
                                            <p>{{$item->model->slug}}, {{$item->model->name}} {{$item->attribute}} m x {{$item->quantity}}</p>
                                            <span>฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</span>
                                            @else
                                            <p>{{$item->model->slug}}, {{$item->model->name}} x {{$item->quantity}}</p>
                                            <span>฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</span>
                                            @endif
                                        </li>
                                        @endforeach
                                        <hr>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div><strong>ยอดสั่งซื้อรวม</strong></div>
                                            @if(Session::has('chooseaddress'))
                                            <span><strong>฿{{number_format(Session::get('chooseaddress')['total'],2)}}</strong></span>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form_2 data_info" style="display: none;">
                    <div class="step">
                        <h2>วิธีการชำระเงิน</h2>
                    </div>
                    <div class="row" id="chooseaddress">
                        @error('payment') <p class="text-danger">กรุณาเลือกวิธีชำระเงิน</p> @enderror
                        <div class="col-md-5 mb-4">
                            <div class="address" style="background: #f1f1f1; border-radius: 20px; padding: 5% 10%">
                                <div class="choose-address">
                                    <input type="radio" id="creditcompany" name="check" value="1" wire:model.defer="payment"/>
                                    <label for="creditcompany"></label>
                                </div>
                                <div class="subaddress">
                                    <h5>จ่ายผ่านเครดิตบริษัท</h5>
                                    <p>ยอดคงเหลือ {{number_format($user->dealer->coin,2)}} บาท</p>
                                </div>
                            </div><br>
                            <div class="address">
                                <div class="choose-address">
                                    <input type="radio" id="creditcard" name="check" value="2" wire:model.defer="payment"/>
                                    <label for="creditcard"></label>
                                </div>
                                <div class="subaddress">
                                    <h5>ชำระเงินด้วยบัตรเครดิต</h5>
                                    <hr>
                                    <!-- <div class="form-group mb-2">
                                        <label for="number">หมายเลขบัตร *</label>
                                        <input type="text" class="form-control" name="number" wire:model.defer="number" placeholder="หมายเลขบัตร"/>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="name">ชื่อบัตร *</label>
                                        <input type="text" class="form-control" name="name" wire:model.defer="name" placeholder="ชื่อบัตร"/>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="month">Expiry Month</label>
                                        <input type="text" class="form-control" name="month" wire:model.defer="month" placeholder="MM/YY"/>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="year">Expiry Year</label>
                                        <input type="text" class="form-control" name="year" wire:model.defer="year" placeholder="MM/YY"/>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="cvc">CVC</label>
                                        <input type="text" class="form-control" name="cvc" wire:model.defer="cvc" placeholder="***">
                                    </div> -->
                                    <form name="checkoutForm" method="POST" action="{{route('check')}}" enctype="multipart/form-data"> 
                                    @csrf
                                    <input type="hidden" name="omiseToken">
                                    <script type="text/javascript" src="https://cdn.omise.co/omise.js"
                                        data-key="pkey_test_5stpiir1dcgcdklou95"
                                        data-image="http://bit.ly/customer_image"
                                        data-frame-label="Merchant site name"
                                        data-button-label="Pay now"
                                        data-submit-label="Submit"
                                        data-location="no"
                                        data-amount="{{Session::get('chooseaddress')['total']*100}}"
                                        data-currency="thb"
                                        >
                                    </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">สินค้าในตะกร้า</h5>
                                </div>
                                <div class="card-body" id="item-cart">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                            <strong>สินค้า</strong>
                                            </div>
                                            <span><strong>ราคา</strong></span>
                                        </li>
                                        @foreach ($cartitems as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            <img src="{{asset('/images/products')}}/{{$item->model->image}}" style="width: 100px; height: 80px; margin-right: 10px;">
                                            @if($item->attribute)
                                            <p>{{$item->model->slug}}, {{$item->model->name}} {{$item->attribute}} m x {{$item->quantity}}</p>
                                            <span>฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</span>
                                            @else
                                            <p>{{$item->model->slug}}, {{$item->model->name}} x {{$item->quantity}}</p>
                                            <span>฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</span>
                                            @endif
                                        </li>
                                        @endforeach
                                        <hr>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div><strong>ยอดสั่งซื้อรวม</strong></div>
                                            @if(Session::has('chooseaddress'))
                                            <span><strong>฿{{number_format(Session::get('chooseaddress')['total'],2)}}</strong></span>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btns_wrap">
                <div class="common_btns form_1_btns">
                    <button type="button" class="btn_next">ดำเนินการต่อ <span class="icon"><i class="bi bi-arrow-right"></i></span></button>
                </div>
                <div class="common_btns form_2_btns" style="display: none;">
                    <button type="button" class="btn_back"><span class="icon"><i class="bi bi-arrow-left"></i></span>ย้อนกลับ</button>
                    <button type="button" class="btn_next" wire:click.prevent="checkout">ชำระเงิน <span class="icon"><i class="bi bi-check-lg"></i></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    var form_1 = document.querySelector(".form_1");
    var form_2 = document.querySelector(".form_2");
    
    
    
    var form_1_btns = document.querySelector(".form_1_btns");
    var form_2_btns = document.querySelector(".form_2_btns");
    
    
    
    var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
    var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
    var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
    
    
    var form_2_progessbar = document.querySelector(".form_2_progessbar");
    
    
    var btn_done = document.querySelector(".btn_done");
    var modal_wrapper = document.querySelector(".modal_wrapper");
    var shadow = document.querySelector(".shadow");
    
    form_1_next_btn.addEventListener("click", function(){
        form_1.style.display = "none";
        form_2.style.display = "block";
    
        form_1_btns.style.display = "none";
        form_2_btns.style.display = "flex";
    
        form_2_progessbar.classList.add("active");
    });
    
    form_2_back_btn.addEventListener("click", function(){
        form_1.style.display = "block";
        form_2.style.display = "none";
    
        form_1_btns.style.display = "flex";
        form_2_btns.style.display = "none";
    
        form_2_progessbar.classList.remove("active");
    });
    
    btn_done.addEventListener("click", function(){
        modal_wrapper.classList.add("active");
    })
    
    shadow.addEventListener("click", function(){
        modal_wrapper.classList.remove("active");
    })
</script>



