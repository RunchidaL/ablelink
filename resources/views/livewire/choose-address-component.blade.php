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
            <form name="checkoutForm" action="{{route('check')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
                <div class="form_1 data_info">
                    <div class="step">
                        <h2>ที่อยู่สำหรับการจัดส่ง</h2>
                    </div>
                    <div class="row" id="chooseaddress">
                    @error('ad') <p class="text-danger">กรุณาเลือกที่อยู่สำหรับจัดส่ง</p> @enderror
                        <div class="col-md-5 mb-4">
                            @if(Auth::user()->role == 1)
                            @php 
                                $i=0;
                            @endphp
                                @foreach($customers as $customer)
                                    @php $i++;@endphp
                                    {{-- <p>{{$i}}</p> --}}
                                        @if ($i<2)
                                            <input type="radio" id="address{{$customer->id}}" value="{{$customer->id}}"  name="ad" checked/>
                                            <label for="address{{$customer->id}}">
                                                <p>{{$user->name}}</p>
                                                <p>{{$customer->phonenumber}}</p>
                                                <p>{{$customer->address}} {{$customer->subdistrict}} {{$customer->district}}</p>
                                                <p>{{$customer->county}} {{$customer->zipcode}}</p>
                                            </label>
                                        @else
                                        <input type="radio" id="address{{$customer->id}}" value="{{$customer->id}}"  name="ad"/>
                                        <label for="address{{$customer->id}}">
                                            <p>{{$user->name}}</p>
                                            <p>{{$customer->phonenumber}}</p>
                                            <p>{{$customer->address}} {{$customer->subdistrict}} {{$customer->district}}</p>
                                            <p>{{$customer->county}} {{$customer->zipcode}}</p>
                                        </label>
                                        @endif
                                @endforeach
                            @endif
                            @if(Auth::user()->role == 2)
                                        <input type="radio" name="ad" id="address1" value="{{$dealer->id}}" checked/>
                                        <label for="address1">
                                            <p>{{$user->name}}</p>
                                            <p>{{$dealer->phonenumber}}</p>
                                            <p>{{$dealer->address}} {{$dealer->subdistrict}} {{$dealer->district}}</p>
                                            <p>{{$dealer->county}} {{$dealer->zipcode}}</p>
                                        </label>
                            @endif
                            @if(Auth::user()->role == 1)
                                <input type="radio" id="addressnew"  name="ad" value="new" wire:model.defer="ad"/>
                                <label for="addressnew" onclick="myFunction()">เพิ่มที่อยู่ใหม่ </label>
                                <div class="subaddress" id="myDIV" style="display: none;">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <p>ชื่อ :</p>
                                            <input type="text" name="fname" class="form-control">
                                            @error('fname')<p class="text-danger">กรุณาใส่ชื่อจริง</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <p>นามสกุล :</p>
                                            <input type="text" name="lname" class="form-control">
                                            @error('lname')<p class="text-danger">กรุณาใส่นามสกุล</p>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group my-2">
                                        <div class="form-group">
                                            <p>บ้านเลขที่ ถนน ซอย :</p>
                                            <textarea name="address" col="30" rows="5" class="form-control" placeholer="รายละเอียดที่อยู่"></textarea>
                                            @error('address')<p class="text-danger">กรุณาใส่ที่อยู่</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <p>เเขวง/ตำบล :</p>
                                            <input type="text" name="subdistrict" class="form-control">
                                            @error('subdistrict')<p class="text-danger">กรุณาใส่เเขวง/ตำบล</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <p>เขต/อำเภอ :</p>
                                            <input type="text" name="district" class="form-control">
                                            @error('district')<p class="text-danger">กรุณาใส่เขต/อำเภอ</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <p>จังหวัด :</p>
                                            <input type="text" name="county" class="form-control">
                                            @error('county')<p class="text-danger">กรุณาใส่จังหวัด</p>@enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <p>รหัสไปรษณีย์ :</p>
                                            <input type="text" name="zipcode" class="form-control">
                                            @error('zipcode')<p class="text-danger">กรุณาใส่รหัสไปรษณีย์</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">           
                                            <p>โทรศัพท์ :</p>
                                            <input type="text" name="phone" class="form-control">
                                            @error('phone')<p class="text-danger">กรุณาใส่โทรศัพท์</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                                                @if(Auth::user()->role == 1)
                                                <span>฿{{number_format($item->model->customer_price * $item->quantity * $item->attribute,2)}}</span>
                                                @elseif(Auth::user()->role == 2)
                                                <span>฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</span>
                                                @endif
                                            @else
                                            <p>{{$item->model->slug}}, {{$item->model->name}} x {{$item->quantity}}</p>
                                                @if(Auth::user()->role == 1)
                                                <span>฿{{number_format($item->model->customer_price * $item->quantity,2)}}</span>
                                                @elseif(Auth::user()->role == 2)
                                                <span>฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</span>
                                                @endif
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
                        <p id="error-ad" class="text-danger">กรุณาเลือกวิธีชำระเงิน</p> 
                        <div class="col-md-5 mb-4">
                            @if(Auth::user()->role == 2)
                                <input type="radio" id="creditcompany" name="check" value="1" onclick="choosepay()" wire:model.defer="payment"/>
                                <label for="creditcompany">
                                    <h5>จ่ายผ่านเครดิตบริษัท</h5>
                                    <p>ยอดคงเหลือ {{number_format($user->dealer->coin,2)}} บาท</p>
                                </label>
                            @endif
                            <input type="radio" name="check" value="2" wire:model.defer="payment"/>
                            <label>
                                <h5>ชำระเงินด้วยบัตรเครดิต</h5>
                                <hr>
                                <input type="hidden" name="omiseToken">
                                <script type="text/javascript" src="https://cdn.omise.co/omise.js"
                                    data-key="pkey_test_5t30hpp2jv76v7wwj48"
                                    data-image="http://bit.ly/customer_image"
                                    data-frame-label="Ablelink"
                                    data-button-label="ชำระเงิน"
                                    data-submit-label="Submit"
                                    data-location="no"
                                    data-amount="{{Session::get('chooseaddress')['total']*100}}"
                                    data-currency="thb"
                                    >
                                </script>
                            </label>
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
                                                @if(Auth::user()->role == 1)
                                                <span>฿{{number_format($item->model->customer_price * $item->quantity * $item->attribute,2)}}</span>
                                                @elseif(Auth::user()->role == 2)
                                                <span>฿{{number_format($item->model->dealer_price * $item->quantity * $item->attribute,2)}}</span>
                                                @endif
                                            @else
                                            <p>{{$item->model->slug}}, {{$item->model->name}} x {{$item->quantity}}</p>
                                                @if(Auth::user()->role == 1)
                                                <span>฿{{number_format($item->model->customer_price * $item->quantity,2)}}</span>
                                                @elseif(Auth::user()->role == 2)
                                                <span>฿{{number_format($item->model->dealer_price * $item->quantity,2)}}</span>
                                                @endif
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
                    <button type="button" class="btn_next" id="c" wire:click="checkout" style="display: none;">ชำระเงิน <span class="icon"><i class="bi bi-check-lg"></i></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
input[type="radio"]{
    display: none;
}
label{
	position: relative;
	box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
	background-color: #EEEEEE;
	color: black;
	border-radius: 5px;
	cursor: pointer;
	border-radius: 20px; 
	padding: 5% 10%;
	margin-bottom: 5%;
	width: 100%;
}
input[type="radio"]:checked + label{
	box-shadow: 0 3px 7px rgba(0, 0, 0, 0.5);
	background-color: #194276;
	color: white;
}
</style>

<script>
function choosepay() {
    if(document.getElementById('creditcompany').checked == true){
        document.getElementById("c").style.display = "flex";
        document.getElementById("error-ad").style.display = "none";
    }
}


function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
    }
    this.checked = false;
}
</script>

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